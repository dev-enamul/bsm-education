@extends('backend.mastaring.master')
@section('destination.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Destination</small></h3>
            </div> 
            @include('backend.layouts.notification') 

                <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                 
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <label for="country">Country Name <span class="text-danger">*</span></label>
                                    <input type="text" name="country" class="form-control" id="country" placeholder="Enter Title" value="{{ old('country') }}" required>
                                    @error('country')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                                <div class="form-group"> 
                                    <label for="short_description">Short Description <span class="text-danger">*</span></label>
                                    <textarea name="short_description" id="short_description" class="form-control" cols="5" rows="3" required>{{ old('short_description') }}</textarea>
    
                                    @error('short_description')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror  
                                </div> 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <img class="w-100 mb-2 mt-3" style="max-width: 215px" src="{{asset('uploads/destinations/destination.jpg')}}" alt="" id="aa"> <br>
                                <label for="image">Image <span class="text-danger">[500 X 300]</span></label>   
                                <input type="file" name="image" class="form-control" id="image" oninput="aa.src=window.URL.createObjectURL(this.files[0])">
                                @error('image')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="card-body pb-0"> 
                                <div class="form-group">
                                    <label for="reason"> Whay Study In this Country? </label>
                                    <textarea  name="reason" class="form-control" id="reason">{{ old('reason') }}</textarea>
                                    @error('reason')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="requir_document"> Required Document </label>
                                    <textarea  name="requir_document" class="form-control" id="requir_document">{{ old('requir_document') }}</textarea>
                                    @error('requir_document')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="card-body pb-0"> 
                                <div class="form-group">
                                    <label for="procedure"> Application Procedures</label>
                                    <textarea  name="procedure" class="form-control" id="procedure">{{ old('procedure') }}</textarea>
                                    @error('procedure')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="fee"> Visa Procedure and Fee </label>
                                    <textarea  name="fee" class="form-control" id="fee">{{ old('fee') }}</textarea>
                                    @error('fee')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div> 
 
                    </div>

               
                   
                    <!-- /.card-body -->
                    <div class="card-footer text-right">
                        <button type="submit" name="status" value="0" class="btn btn-primary">Save as Draft</button>
                        <button type="submit" name="status" value="1" class="btn btn-primary">Publish</button>
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
        $('textarea[name=requir_document]').ckeditor({
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

        $('textarea[name=reason]').ckeditor({
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

        $('textarea[name=fee]').ckeditor({
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

        $('textarea[name=procedure]').ckeditor({
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
