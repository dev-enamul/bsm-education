@extends('backend.mastaring.master')
@section('team.index','active')
@section('menu','menu-open')
@section('content')
<div class="card">
     
    @include('backend.layouts.notification')
    <!-- /.card-header -->
    <div class="card-body">   
        <table id="example1" class="table table-bordered table-striped mt-2">
            <thead>
            <tr>
                <th style="width: 10%">Image</th>
                <th style="width: 15%">Name</th>
                <th style="width:15%">Position</th> 
                <th style="width:40%">Description</th> 
                <th style="width:20%">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td><img src="{{ asset($data->image??'uploads/destinations/destination.jpg') }}" alt="{{ $data->country }}" style="width:100px"></td>
                        <td><b>{{ $data->name }}</b></td>
                        <td>{{$data->position}}</td> 
                        <td>{{$data->description}}</td> 
                        <td>
                         <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('team.edit',$data->id) }}" class="btn btn-block btn-primary btn-sm"  >Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('team.destroy',$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" class="deleteBtn btn btn-block btn-danger btn-sm" data-id="{{ $data->id }}">Delete</a>
                            </form>
                            </div>
                         </div>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 

@section('js')
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.deleteBtn').click(function(e){
            var form=$(this).closest('form');
            var dataId=$(this).data('id');
            e.preventDefault();

            //swal javascript
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });

        });
    </script> 
@endsection
