@extends('backend.mastaring.master')
@section('team.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Team</small></h3>
            </div> 
            @include('backend.layouts.notification') 

                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                 
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Title" value="{{ old('name') }}" required>
                                    @error('name')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="position">Position <span class="text-danger">*</span></label>
                                    <input type="text" name="position" class="form-control" id="position" placeholder="Enter Title" value="{{ old('position') }}" required>
                                    @error('position')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="facebook"> Facebook </label>
                                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Enter Facebook" value="{{ old('facebook') }}" >
                                    @error('facebook')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="twitter"> Twitter </label>
                                    <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Enter Twitter" value="{{ old('twitter') }}" >
                                    @error('twitter')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <label for="linkedin"> Linkedin </label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter Linkedin" value="{{ old('linkedin') }}" >
                                    @error('linkedin')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                                
                                <div class="form-group">
                                    <label for="instagram"> Instagram </label>
                                    <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Enter Instagram" value="{{ old('instagram') }}" >
                                    @error('instagram')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 

                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <img class="w-100 mb-2 mt-3" style="max-width: 215px" src="{{asset('uploads/team/default.jpg')}}" alt="" id="aa"> <br>
                                <label for="image">Image <span class="text-danger"> <span class="text-danger">*</span> [160 X 160]</span></label>   
                                <input type="file" name="image" class="form-control" id="image" oninput="aa.src=window.URL.createObjectURL(this.files[0])" required>
                                @error('image')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description"> Description <span class="text-danger">[Max 10 word]</span></label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="9">{{old('description')}}</textarea>                                
                                @error('description')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <!-- /.card-body -->
                    <div class="card-footer text-right">
                        <button type="submit" name="status" value="0" class="btn btn-info">Save as Draft</button>
                        <button type="submit" name="status" value="1" class="btn btn-primary">PUblish</button>
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
 