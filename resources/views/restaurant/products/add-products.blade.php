@extends('layouts.vendor-admin.master')
@section('title')
Products
@endsection
@section('header-extra-links')
<link rel="stylesheet" href="{{asset('/plugins/dropzone/dist/dropzone.css')}}">
@endsection
@section('content')

<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link"  href="{{url('/restaurant/products')}}">Product List</a>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-plus"></i> Create Product</button>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link"  href="{{url('/restaurant/product-category')}}"><i class="fa fa-plus"></i> Create Product
                Category</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div style="padding:20px">
			<div id="status22"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="" id="product_name" class="form-control">
                                    <div id="product_name_feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="text" name="" id="capacity" class="form-control">
                                    <div id="capacity_feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="text" name="" id="price" class="form-control">
                                            <div id="price_feedback" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Discount Price (Optional)</label>
                                            <input type="text" name="" id="dprice" class="form-control">
                                            <div id="dprice_feedback" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                            
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="" id="category-select" class="form-select">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->name}}">{{$cat->name}}</option> 
                                        @endforeach
                                    </select>
                                    <div id="category_feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group position-relative">
                            <label for="">Upload Image</label>
                            <form action="{{url('restaurant/upload-images')}}" method="post"  enctype="multipart/form-data" id="imageUpload" class="dropzone form-control" style="width:100%;min-height:283px;border: dashed 2px #ced4da;border-spacing: 2px;">
                @csrf
                <div class="fallback">
                  <input name="file" type="file" multiple/>
                </div>
              </form>
                                    <div id="imageUpload_feedback" class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="" id="description" cols="30" rows="10" class="form-control"></textarea>
                            <div id="description_feedback" class="invalid-feedback"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button id="save-product" class="btn btn-primary text-nowrap"><img src="{{ asset('vendor-admin-assets/icons/Icon awesome-save.svg')}}" style="width:20px;height:20px;margin-bottom: 5px;" alt="">	&nbsp; <span style="margin-bottom: 5px;"> Save</span></button>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

@endsection
@section('footer-extra-links')
<script src="{{asset('/plugins/dropzone/dist/dropzone.js')}}"></script>
    <script type="text/javascript">
        var img_arr = [];
        Dropzone.options.imageUpload = {
            maxFiles            :       5,
            maxFilesize         :       3,
            addRemoveLinks: true,
            dictRemveFile: 'Remove',
            init: function () {
            this.on("removedfile", function (file) {
              var img = jQuery.parseJSON(file.xhr.response);
              //alert(responseText);
                $.post({
                    url: '{{url("restaurant/remove-images")}}',
                    data: {id: img.success, _token: $('[name="_token"]').val()},
                    dataType: 'json',
                    success: function (file,responseText) {
                        const index = img_arr.indexOf(img.id);
                        if (index > -1) {
                            img_arr.splice(index, 1);
                            }
                        console.log(img_arr);
                        if(img_arr.length == 0)
                        $('.dropzone .dz-message').show();
                    }
                });
            });
            this.on("success", function(file, responseText) {
                console.log(responseText);
                var obj = responseText;
                img_arr.push(obj.id);
                console.log(img_arr);
                if(img_arr.length)
                $('.dropzone .dz-message').hide();
            });
          },

       };
       
       $(document).ready(function(){
            $('.dz-message button').hide();
            $('.dz-message').append('<div style="cursor:pointer" class="img-rem"><img src="{{asset("vendor-admin-assets/icons/choose-pic-vendor.svg")}}" alt="" style="width: 131px;height: 108px;cursor:pointer"><p class="mt-3"><b>Drop your files here, or <span style="color:#6c63ff"> browse</span></b></p></div>');
        })
        $('#save-product').click(function(){
        $.ajax({
            type: "POST",
            url: "{{route('markete.product.create')}}",
            data: {
                _token:'{{csrf_token()}}',
                'product_name': $('#product_name').val(),
                'capacity' : $('#capacity').val(),
                'currency_select' : $('#currency-select').val(),
                'price' : $('#price').val(),
                'dprice' : $('#dprice').val(),
                'category_select' : $('#category-select').val(),
                'images' : img_arr,
                'description': $('#description').val(),
            },
            success: function(data){
                console.log(data);
                    $('#product_name').removeClass('is-invalid');
                    $('#product_name_feedback').text('');
                    $('#capacity').removeClass('is-invalid');
                    $('#capacity_feedback').text('');
                    $('#currency-select').removeClass('is-invalid');
                    $('#currency_feedback').text('');
                    $('#price').removeClass('is-invalid');
                    $('#price_feedback').text('');
                    $('#dprice').removeClass('is-invalid');
                    $('#dprice_feedback').text('');
                    $('#category-select').removeClass('is-invalid');
                    $('#category_feedback').text('');
                    $('#description').removeClass('is-invalid');
                    $('#description_feedback').text('');
                    if(data.success == false)
                    {
                        if(data.errors.product_name)
                        {
                            $('#product_name').addClass('is-invalid');
                            $('#product_name_feedback').text(data.errors.product_name);
                        }
                        if(data.errors.capacity)
                        {
                            $('#capacity').addClass('is-invalid');
                            $('#capacity_feedback').text(data.errors.capacity);
                        }
                        if(data.errors.currency_select)
                        {
                            $('#currency-select').addClass('is-invalid');
                            $('#currency_feedback').text(data.errors.currency_select);
                        }
                        if(data.errors.price)
                        {
                            $('#price').addClass('is-invalid');
                            $('#price_feedback').text(data.errors.price);
                        }
                        if(data.errors.dprice)
                        {
                            $('#dprice').addClass('is-invalid');
                            $('#dprice_feedback').text(data.errors.dprice);
                        }
                        if(data.errors.category_select)
                        {
                            $('#category-select').addClass('is-invalid');
                            $('#category_feedback').text(data.errors.category_select);
                        }
                        if(data.errors.description)
                        {
                            $('#description').addClass('is-invalid');
                            $('#description_feedback').text(data.errors.description);
                        }
                        if(data.errors.images)
                        {
                            $('#imageUpload').addClass('is-invalid');
                            $('#imageUpload_feedback').text(data.errors.images);
                        }
                    }
                    if(data.success == true)
                    {
                        $('#product_name').val('');
                        $('#capacity').val('');
                        $('#currency-select').val('');
                        $('#price').val('');
                        $('#dprice').val('');
                        $('#category-select').val('');
                        $('#dprice').val('');
                        $('#description').val('');
                        $('.dropzone .dz-preview').remove();
                        $('.dropzone .dz-message').remove();
                        img_arr = [];
                        $('.dropzone').append('<div class="dz-default dz-message"><button class="dz-button" type="button" style="display: none;">Drop files here to upload</button><div style="cursor:pointer" class="img-rem"><img src="http://clickeat.com.au/vendor-admin-assets/icons/choose-pic-vendor.svg" alt="" style="width: 131px;height: 108px;cursor:pointer"><p class="mt-3"><b>Drop your files here, or <span style="color:#6c63ff"> browse</span></b></p></div></div>')
                        $('.dropzone .dz-message').show();
                        $('#status22').append('<div class="alert alert-success">Product Added Successfully! </div>');
                    }
                }
            
        })
    })
</script>
@endsection