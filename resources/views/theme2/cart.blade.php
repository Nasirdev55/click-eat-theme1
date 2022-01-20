@extends('layouts.click-eat-theme2.master')
@section('title')
Cart
@stop
@section('extra_css')
<style>
    .cart .table .d-flex img{width:100px;height:100px}
.counter{width: 80px;
height: 45px;user-select: none;border: 1px solid #ced4da;padding: 10px 0px;}
</style>
@stop
@section('content')
    
<section class="page-title">
    <div class="container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">View Cart</h1>
         <b>Home / Cart</b>
    </div>
</section>

<section class="my-5 cart">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>   
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(session()->has('cart'))
                        @foreach(session('cart') as $index=>$cart)
                        <tr class="text-center">
                            <td>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('images/'.$cart['image'])}}" alt="">
                                    </div>
                                    <div class="m-auto">
                                        <b>{{$cart['name']}}</b>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">${{$cart['price']}}</td>
                            <td class="align-middle text-center"><div class="counter ml-auto mr-auto">
                                <div class="m-auto">
                                    <i class="fa fa-minus" id="n{{$index}}" onclick="minus(this.id);c_dec(this.id)"></i>
                                    <span class="mx-2" id="counter{{$index}}">{{$cart['items']}}</span>
                                    <i class="fa fa-plus" id="p{{$index}}" onclick="plus(this.id);c_inc(this.id)"></i>
                                </div>
                            </div></td>
                            <td class="align-middle text-center" id="subtotal{{$index}}">${{$cart['total']}}</td>
                            <th class="align-middle text-center"><a href="{{url('/remove-cart/'.$index)}}"><i class="fa fa-trash" style="cursor: pointer;color:black"></i></a></th>
                        </tr>
                        @endforeach
                        @else
                        <p class="mb-4 text-danger">Nothing in the Cart !</p>
                        @endif
                    </tbody>
                </table>
            </div>
             @if(session()->has('cart'))
            <div class="col-md-4">
                <div class="card shadow p-3 px-4 ml-auto">
                    <h3>Cart Totals</h3>
                    @foreach(session('cart') as $index=>$cart)
                    <div class="d-flex mt-4 pr-4">
                        <b>{{$cart['name']}}</b>
                        <b class="ml-auto" id="sub{{$index}}">${{$cart['total']}}</b>
                    </div>
                    @endforeach
                    <hr>
                    <div class="d-flex pr-4">
                        <h3>Totals</h3>
                        <b class="ml-auto theme-color" id="totals">@if(session()->has('totals')) {{ '$'.session('totals') }} @endif</b>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{url('/checkout')}}"><button class="btn text-white font-weight-bold px-4">Proceed to Checkout</button></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@stop
@section('scripts')
<script>
    function c_inc(id){
        var prid = id.replace('p','');
        $.ajax({
            url : '/cart-increment',
            type : 'post',
            data : { _token : '{{csrf_token()}}',pid : prid,items: $('#counter'+prid).text()},
            success : function(data){
                if(data.success)
                {
                    $('#totals').text('$'+data.totals);
                    $('#sub'+prid).text('$'+data.subtotal);
                    $('#subtotal'+prid).text('$'+data.subtotal);
                }
            }
        });
    }
    function c_dec(id){
        var prid = id.replace('n','');
        $.ajax({
            url : '/cart-decrement',
            type : 'post',
            data : { _token : '{{csrf_token()}}',pid : prid,items: $('#counter'+prid).text()},
            success : function(data){
                if(data.success)
                {
                    $('#totals').text('$'+data.totals);
                    $('#sub'+prid).text('$'+data.subtotal);
                    $('#subtotal'+prid).text('$'+data.subtotal);
                }
                //console.log(data)
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIx_eL01XVZ07Ld1Ad09orDmV3httbrgo&libraries=places&callback=initialize" async defer></script>
<script>
    let autocomplete;
let address1Field;
let address2Field;
let postalField;

function initAutocomplete() {
  address1Field = document.querySelector("#ship-address");
  address2Field = document.querySelector("#address2");
  postalField = document.querySelector("#postcode");
  // Create the autocomplete object, restricting the search predictions to
  // addresses in the US and Canada.
  autocomplete = new google.maps.places.Autocomplete(address1Field, {
    componentRestrictions: { country: ["us", "ca"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });
  address1Field.focus();
  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener("place_changed", fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  const place = autocomplete.getPlace();
  let address1 = "";
  let postcode = "";

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  // place.address_components are google.maps.GeocoderAddressComponent objects
  // which are documented at http://goo.gle/3l5i5Mr
  for (const component of place.address_components) {
    const componentType = component.types[0];

    switch (componentType) {
      case "street_number": {
        address1 = `${component.long_name} ${address1}`;
        break;
      }

      case "route": {
        address1 += component.short_name;
        break;
      }

      case "postal_code": {
        postcode = `${component.long_name}${postcode}`;
        break;
      }

      case "postal_code_suffix": {
        postcode = `${postcode}-${component.long_name}`;
        break;
      }
      case "locality":
        document.querySelector("#locality").value = component.long_name;
        break;
      case "administrative_area_level_1": {
        document.querySelector("#state").value = component.short_name;
        break;
      }
      case "country":
        document.querySelector("#country").value = component.long_name;
        break;
    }
  }

  address1Field.value = address1;
  postalField.value = postcode;
  // After filling the form with address components from the Autocomplete
  // prediction, set cursor focus on the second address line to encourage
  // entry of subpremise information such as apartment, unit, or floor number.
  address2Field.focus();
}
</script>
@endsection