@extends('backend.mastaring.master')
@section('blog.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Update Blog</small></h3>
            </div> 
            @include('backend.layouts.notification') 

                <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body pb-0">
                                 
                                <div class="form-group">
                                    <label for="description"> Description  <span class="text-danger">*</span></label>
                                    <textarea  name="description" class="form-control" id="description" placeholder="Enter Description" required>{{ old('description',$blog->description) }}</textarea>
                                    @error('description')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="card-body pb-0"> 
                                <div class="form-group">
                                    <label for="heading">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Title" value="{{ old('heading',$blog->heading) }}" required>
                                    @error('heading')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <label for="image">Blog Image <span class="text-danger">[384 X 220]</span></label>   
                                            <input type="file" name="image" class="form-control" id="image" oninput="oldImg.src=window.URL.createObjectURL(this.files[0])">
                                            @error('image')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <img class="w-100 mb-2 w-100" src="{{asset($blog->image??'backend/images/default_blog1.jpg')}}" alt="" id="oldImg">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <label for="details_image">Blog Details Image <span class="text-danger">[1220 X 345]</span></label>   
                                            <input type="file" name="details_image" class="form-control" id="details_image" oninput="blogDetailsImage.src=window.URL.createObjectURL(this.files[0])">
                                            @error('details_image')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <img class="w-100 mb-2 w-100" src="{{asset($blog->details_image??'backend/images/default_blog2.jpg')}}" alt="" id="blogDetailsImage">
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" placeholder="e.g., (student, immigration)" value="{{ old('tags',$blog->tags) }}">
                                    @error('tags')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <!-- /.card-body -->
                    <div class="card-footer text-right"> 
                        <button type="submit" name="status" value="0" class="btn btn-primary">Update & Save as Draft</button>
                        <button type="submit" name="status" value="1" class="btn btn-primary">Update & Publish</button>
                    </div>
                </form>
        </div>
        <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const imageInput = document.getElementById("imageInput");
        const imagePreview = document.getElementById("imagePreview");

        imageInput.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener("load", function () {
                    imagePreview.src = reader.result;
                    imagePreview.style.display = "block";
                });

                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = "none";
                imagePreview.src = "#";
            }
        });
    });
    </script>

    <script>
        var route_prefix = "/filemanager";
    </script>

    <!-- CKEditor init -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
    <script>
        $('textarea[name=description]').ckeditor({
            height: 250,
            filebrowserImageBrowseUrl: route_prefix + '?type=Images',
            filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{ csrf_token() }}',
            filebrowserBrowseUrl: route_prefix + '?type=Files',
            filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{ csrf_token() }}',
            filebrowserWindowWidth: '900',
            contentsCss: [
                'http://freecoder.test/frontend/css/mdb.min.css',
                'http://freecoder.test/frontend/css/style.css'
            ],
            filebrowserWindowHeight: '500',
            extraPlugins: 'codesnippet',
            // extraPlugins: 'youtube',
        });
    </script>
@endsection
