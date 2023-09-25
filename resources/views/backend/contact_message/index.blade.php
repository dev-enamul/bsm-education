@extends('backend.mastaring.master')
@section('contacr.index','active')
@section('menu','menu-open')
@section('content')
<div class="card">
    @include('backend.layouts.notification')
    <!-- /.card-header -->
    <div class="card-body">   
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($messages as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->message }}</td>
                        <td>
                         <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('message.destroy',$row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="deleteBtn btn btn-block btn-danger btn-sm" data-id="{{ $row->id }}">Delete</a>
                                </form>
                            </div>
                         </div>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
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
