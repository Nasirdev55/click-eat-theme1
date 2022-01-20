@extends('layouts.click-eat-theme2.master')
@section('title')
Check Out
@stop
@section('extra_css')
<style>
    .checkout .card{width: 362px;
height: 284px;}
.checkout .card h3{font: normal normal bold 18px/24px Open Sans;}
</style>
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
    componentRestrictions: { country: ["pk", "au"] },
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
  let long = place.geometry.location.long();
  let lat = place.geometry.location.lat();
    document.getElementById('long') = long;
    document.getElementById('lat') = lat;
}
</script>
@stop
@section('content')
<section class="page-title">
    <div class="container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">Checkout</h1>
         <b>Home / Checkout</b>
    </div>
</section>

<section class="my-5 checkout">
    <div class="container">
    
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/order')}}" method="post" id="checkout-form">@csrf
                        <div class="form-group">
                            <input type="text" name="card_number" class="form-control @error('card_number') is-invalid @enderror" placeholder="Card Number e.g. 42424242424242">
                            @error('card_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="expiration_month" class="form-control @error('expiration_month') is-invalid @enderror" placeholder="Expiry Month (MM) e.g 09">
                            @error('expiration_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="expiration_year" class="form-control @error('expiration_year') is-invalid @enderror" placeholder="Expiry Year (YYYY) e.g 2025">
                            @error('expiration_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="long" id="long">
                    <input type="hidden" name="lat" id="lat">            
                    <input type="text" name="address"id="ship-address"
          required
          autocomplete="off" class="form-control @if(Session::has('address')) is-invalid @endif @error('address') is-invalid @enderror" placeholder="Street Address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if(Session::has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ Session('address') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="cvc" class="form-control @error('cvc') is-invalid @enderror" placeholder="CVC">
                            @error('cvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number">
                            @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="card shadow p-3 px-4 ml-auto">
                    <h3>Cart Totals</h3>
                    <div class="d-flex mt-4 pr-4">
                        <b>Subtotal</b>
                        <b class="ml-auto">@if(session()->has('totals')) {{ '$'.session('totals') }} @endif</b>
                    </div>
                    <div class="d-flex pr-4">
                        <b>Delivery Charges</b>
                        <b class="ml-auto">Free</b>
                    </div>
                    <hr>
                    <div class="d-flex pr-4">
                        <h3>Totals</h3>
                        <b class="ml-auto theme-color">@if(session()->has('totals')) {{ '$'.session('totals') }} @endif</b>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn text-white font-weight-bold px-5" onclick="document.querySelector('#checkout-form').submit()" id="order">Place Order</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script>
    $('#order').click(function(){
        $.ajax({
            url : '/order',
            method : 'post',
            data : { _token : '{{csrf_token()}}', }
        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIx_eL01XVZ07Ld1Ad09orDmV3httbrgo&libraries=places&callback=initAutocomplete&libraries=places&v=weekly" async defer></script>

@endsection