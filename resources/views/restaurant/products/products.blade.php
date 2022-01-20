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
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Product List</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-plus"></i> Create Product</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-plus"></i> Create Product Category</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table responsive table-striped" id="data-table" class="display" style="width:100%">
                <thead class="bg-light">
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Currency</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Category</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($products as $index=>$product)   
                <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->capacity}}</td>
                        <td>{{$product->currency}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->dprice}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <img src="{{asset('vendor-admin-assets/icons/Icon material-edit.svg')}}" alt="" class="px-1">
                            <img src="{{asset('vendor-admin-assets/icons/bin.png')}}" alt="" class="px-1"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div style="padding:20px">
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
                            <form action="{{url('markete/upload-images')}}" method="post"  enctype="multipart/form-data" id="imageUpload" class="dropzone form-control" style="width:100%;min-height:283px;border: dashed 2px #ced4da;border-spacing: 2px;">
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
        <div class="tab-pane fade p-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div style="padding:20px">
                <div class="form-group" id="category-added">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control px-3" placeholder="Name" id="category_name">
                    <div id="category_name_feedback" class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control px-3" id="category_image">
                    <div id="category_image_feedback" class="invalid-feedback"></div>
                </div>
                <div class="form-group text-center mt-3">
                    <button id="category_add" class="btn text-white" style="background: #28A745 0% 0% no-repeat padding-box;
border-radius: 8px;">Submit</button>
                </div>
                <table class="table responsive mt-5" class="display" style="width:100%">
                <thead class="bg-dark text-white border-bottom-0">
                    <tr class="border-bottom-0">
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="category-table">
                    @foreach($categories as $key=>$cat)
                    <tr>
                        <td>@if($key < 9){{0}}@endif{{$key + 1}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" id="e{{$cat->id}}" onclick="edit_category(this.id)">Edit</button>
                                <button class="btn btn-danger ms-3" id="d{{$cat->id}}" onclick="delete_category(this.id)">Delete</button>
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
<div class="modal fade" id="edit-category" tabindex="-1" aria-labelledby="delete-confirmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-confirmLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <input type="hidden" id="ed-category">
                <input type="text" class="form-control px-3" placeholder="Name" id="category_name_edit">
                <div id="category_name_edit_feedback" class="invalid-feedback"></div>
            </div>
		  <div class="form-control">
			  <img src="" alt="">
		  </div>
            <div class="form-group">
                <input type="text" class="form-control px-3" placeholder="Name" id="category_image_edit">
                <div id="category_name_edit_feedback" class="invalid-feedback"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="edit-confirm">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div><!-- Modal -->
<div class="modal fade" id="success-status" tabindex="-1" aria-labelledby="success-statusLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="delete-confirmLabel">Congratulation!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-success">
        Great ! Action performed Successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="delete-confirm" tabindex="-1" aria-labelledby="delete-confirmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="delete-confirmLabel">Delete Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Are you sure to delete category ?
        <input type="hidden" id="del-category">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="del-confirm">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer-extra-links')
<script>
    var img_arr = [];
    $('#category_add').click(function(){
		var fd = new FormData();
		fd.append('_token', '{{csrf_token()}}');
		fd.append('category_name' , $('#category_name').val());
		fd.append('category_image', document.getElementById('category_image').files[0]);
        $.ajax({
            type: "POST",
            url: "{{route('markete.category.create')}}",
            data: fd,
            success: function(data){
                console.log(data);
                    $('#category_name').removeClass('is-invalid');
                    $('#category_name_feedback').text('');
                    $('#category_image').removeClass('is-invalid');
                    $('#category_image_feedback').text('');
                    if(data.success == false)
                    {
                        if(data.errors.category_name)
                        {
                            $('#category_name').addClass('is-invalid');
                            $('#category_name_feedback').text(data.errors.category_name);
                        }
                        if(data.errors.category_image)
                        {
                            $('#category_image').addClass('is-invalid');
                            $('#category_image_feedback').text(data.errors.category_image);
                        }
                    }
                    if(data.success == true)
                    {
                        $('#category_name').val('');
                        document.getElementById('category_image').reset();
                        categories();
                        $('#success-status').modal('show');
                    }
                }
            
        })
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
                        $('.dropzone').append('<div class="dz-default dz-message"><button class="dz-button" type="button" style="display: none;">Drop files here to upload</button><div style="cursor:pointer" class="img-rem"><img src="http://127.0.0.1:8000/vendor-admin-assets/icons/choose-pic-vendor.svg" alt="" style="width: 131px;height: 108px;cursor:pointer"><p class="mt-3"><b>Drop your files here, or <span style="color:#6c63ff"> browse</span></b></p></div></div>')
                        $('.dropzone .dz-message').show();
                        $('#success-status').modal('show');
                        setTimeout(function(){
                            window.location.href = '/markete/products';
                        },2000);
                    }
                }
            
        })
    })
    

function categories()
{
    $.ajax({
            type: "POST",
            url: "{{route('markete.categories')}}",
            data: {
                _token:'{{csrf_token()}}',
            },
            success: function(data){
                $('#category-table').html('');
                $('#category-select').html('');
                $('#category-select').append('<option value="">Select Category</option>');
                data.forEach(function(item,index){
                    var str = '<tr>';
                        str += '<td>'+((index < 9) ? ('0'+(index+1)) : (index+1) )+'</td>';
                        str += '<td>'+item.name+'</td>';
                        str += '<td>';
                        str += '<div class="d-flex justify-content-center">';
                        str += '<button class="btn btn-primary" id="e'+item.id+'" onclick="edit_category(this.id)">Edit</button>';
                        str += '<button class="btn btn-danger ms-3" id="d'+item.id+'" onclick="delete_category(this.id)">Delete</button>';
                        str += '</div>';
                        str += '</td></tr>';
                        $('#category-table').append(str);
                        $('#category-select').append('<option value="'+item.name+'">'+item.name+'</option>');
                })
            }
        })
}
function status_remove()
{
    $('#status-remove').fadeOut('slow');
}
function delete_category(id)
{
    var del = id.replace('d','');
    $('#del-category').val(del);
    $('#delete-confirm').modal('show');
    
}
function edit_category(id)
{
    var ed = id.replace('e','');
    $.ajax({
            type: "POST",
            url: "{{route('markete.category.edit')}}",
            data: {
                _token:'{{csrf_token()}}','category_id': ed,
            },
            success: function(data){
                if(data.success)
                {
                    $('#ed-category').val(ed);
                    $('#category_name_edit').val(data.category.name);
                    $('#edit-category').modal('show');
                }
            }
        })
    
}
$('#del-confirm').click(function(){
    var dd = $('#del-category').val();
    $.ajax({
            type: "POST",
            url: "{{route('markete.category.delete')}}",
            data: {
                _token:'{{csrf_token()}}','category_id': dd,
            },
            success: function(data){
                    if(data.success == false)
                    {
                        
                    }
                    if(data.success == true)
                    {
                        categories();
                        $('#delete-confirm').modal('hide');
                        $('#success-status').modal('show');
                    }
                }
            
        })
})
$('#edit-confirm').click(function(){
    var dd = $('#category_name_edit').val();;
    $.ajax({
            type: "POST",
            url: "{{route('markete.category.update')}}",
            data: {
                _token:'{{csrf_token()}}','category_name': dd,'category_id' : $('#ed-category').val(),
            },
            success: function(data){
                    $('#category_name_edit').removeClass('is-invalid');
                    $('#category_name_edit_feedback').text('');
                    if(data.success == false)
                    {
                        $('#category_name_edit').addClass('is-invalid');
                        $('#category_name_edit_feedback').text(data.errors.category_name);
                    }
                    if(data.success == true)
                    {
                        categories();
                        $('#edit-category').modal('hide');
                        $('#success-status').modal('show');
                    }
                }
            
        })
})
</script>
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
                    url: '{{url("markete/remove-images")}}',
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
        
</script>
@endsection
