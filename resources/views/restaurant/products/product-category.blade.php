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
            <a class="nav-link" href="{{url('/restaurant/products')}}">Product List</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="{{url('/restaurant/add-product')}}"></i> Create Product</a>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-plus"></i> Create Product
                Category</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">


        <div class="tab-pane fade show active p-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div style="padding:20px">
				@if(Session::get('msg'))
                <div class="alert alert-success">
                    {{Session::get('msg')}}
                </div>
            @endif
                <form action="{{route('markete.category.create')}}" method="post" enctype="multipart/form-data"> @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control px-3 @error('category_name') is-invalid @enderror"
                                placeholder="Name" name="category_name">
                            @error('category_name')<div id="category_name_feedback" class="invalid-feedback">
                                {{$message}}</div>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="file" class="form-control px-3 @error('category_name') is-invalid @enderror"
                                name="category_image">
                            @error('category_image')<div id="category_image_feedback" class="invalid-feedback">
                                {{$message}}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn text-white" style="background: #28A745 0% 0% no-repeat padding-box;
border-radius: 8px;">Submit</button>
                    </div>
                </form>
                <table class="table responsive mt-5" class="display" style="width:100%">
                    <thead class="bg-dark text-white border-bottom-0">
                        <tr class="border-bottom-0">
                            <th>Sr</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="category-table">
                        @foreach($categories as $key=>$cat)
                        <tr>
                            <td>@if($key < 9){{0}}@endif{{$key + 1}}</td> <td><img data-enlargeable
                                        style="cursor: zoom-in;" src="{{$cat->image}}" width="40px" height="40px"></td>
                            <td>{{$cat->name}}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary" data-obj="{{$cat}}" data-bs-toggle="modal" data-bs-target="#edit" data-id="{{$cat->id}}">Edit</button>
                                    <a class="btn btn-danger ms-3" href="{{url('/restaurant/category/delete/'.$cat->id)}}">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="delete-confirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-confirmLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route('markete.category.update')}}" method="post" enctype="multipart/form-data"> @csrf
                    <input type="hidden" name="id">
                        <div class="form-group">
                            <input type="text" class="form-control px-3 @error('category_name') is-invalid @enderror"
                                placeholder="Name" name="category_name">
                            @error('category_name')<div id="category_name_feedback" class="invalid-feedback">
                                {{$message}}</div>@enderror
                        </div>
				
				<div class="form-group">
					<img src="" alt="" id="eshowImage" height="100px" width="100px">
				</div>
                        <div class="form-group">
                            <input type="file" class="form-control px-3 @error('category_name') is-invalid @enderror"
                                name="category_image">
                            @error('category_image')<div id="category_image_feedback" class="invalid-feedback">
                                {{$message}}</div>@enderror
                        </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button></form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div><!-- Modal -->

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
</script>

@endsection