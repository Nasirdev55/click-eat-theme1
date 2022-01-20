@extends('layouts.vendor-admin.master')
@section('title')
Products
@endsection
@section('header-extra-links')
@endsection
@section('content')

<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Product List</button>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="{{url('/restaurant/add-product')}}"><i class="fa fa-plus"></i> Create
                Product</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link"  href="{{url('/restaurant/product-category')}}"><i class="fa fa-plus"></i> Create Product
                Category</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
			@if(Session::get('msg'))
                <div class="alert alert-success">
                    {{Session::get('msg')}}
                </div>
            @endif
            <table class="table responsive table-striped" id="data-table" class="display" style="width:100%">
                <thead class="bg-light">
                    <tr>
                        <th>Sr No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index=>$product)
                    <tr>
                        <td>{{$index + 1}}</td>
						<td><img data-enlargeable
                                        style="cursor: zoom-in;" src="{{asset('/images/'.$product->image->name)}}" width="50px" height="50px"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->capacity}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->dprice}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <!--img src="{{asset('vendor-admin-assets/icons/Icon material-edit.svg')}}" alt=""
                                class="px-1"-->
                            <a class="" href="{{url('/restaurant/product/delete/'.$product->id)}}"><img src="{{asset('vendor-admin-assets/icons/bin.png')}}" alt="" class="px-1"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('footer-extra-links')
<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function () {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function () {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function (e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
	$(document).ready(function(){
        $('#edit').on('shown.bs.modal', function(e) {
          var sr = $(e.relatedTarget).data('obj');
          var modal = $(this)
          modal.find('.modal-body input[name="category_name"]').val(sr['name']);
          modal.find('.modal-body input[name="id"]').val(sr['id']);
          var output = document.getElementById('eshowImage');
          output.src = sr['image'];
        })
    });
@endsection