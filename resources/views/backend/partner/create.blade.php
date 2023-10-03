@extends('backend.mastaring.master')
@section('partners.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Institute</small></h3>
            </div> 
            @include('backend.layouts.notification') 

                <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                 
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <label for="name">Institute Link <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Link" value="{{ old('name') }}" required>
                                    @error('name')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="destination_id">Destination <span class="text-danger">*</span></label>
                                    <select name="destination_id" id="destination_id" class="form-control" required>
                                        <option value="">Select Destination</option>
                                        @foreach ($countrys as $data)
                                            <option {{old('destination_id')==$data->id??'selected'}} value="{{$data->id}}">{{$data->country}}</option>
                                        @endforeach
                                    </select> 
                                </div> 
                               
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <img class="w-100 mb-2 mt-3" style="max-width: 215px" src="{{asset('uploads/institutes/default.jpg')}}" alt="" id="aa"> <br>
                                <label for="image">Image <span class="text-danger"> <span class="text-danger">*</span> [373 X 136]</span></label>   
                                <input type="file" name="image" class="form-control" id="image" oninput="aa.src=window.URL.createObjectURL(this.files[0])" required>
                                @error('image')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <!-- /.card-body -->
                    <div class="card-footer text-right">
           
                        <button type="submit" name="status" value="1" class="btn btn-primary">Submit</button>
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
