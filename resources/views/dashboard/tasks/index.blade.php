@extends('layouts.dashboard.app')
@section('title', '|Tasks')
@section('content')

<h2>Tasks</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Tasks</a></li>
    {{--  <li class="breadcrumb-item active" aria-current="page">Data</li>  --}}
  </ol>
</nav>
<div class="tile mb-4">
    <div class="row">
        <div class="col-12">
            <form action="">
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="search" autofocus  class="form-control" placeholder="search" value="{{ request()->search }}">
                        </div>
                    </div>{{--  //end of col  --}}
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search">Search</i></button>
                        <a href="{{ route('dashboard.tasks.create') }}" class="btn btn-primary"><i class="fa fa-plus">Add</i></a>
                        {{-- <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus">Add</i></a> --}}
                    </div>

                </div>{{--  //end of row  --}}
            </form>{{--  //end of form  --}}
        </div>{{--  //end of col-12  --}}
    </div>{{--  //end of row  --}}

    <div class="row">
        <div class="col-md-12">
            @if($tasks->count() > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $index=> $task)

                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                <img src="{{url('uploads').'/'. $task->photo }}" alt="{{ $task->photo }}" style="width: 100px;height: 100px" class="img-thumnail">
                            </td>
                            <td>
                                    {{-- <a href="{{ route('dashboard.tasks.edit' , $task->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a> --}}
                        <a href="{{ route('dashboard.tasks.edit' , $task->id) }}" data-toggle="tooltip" title="edit" data-placement = "bottom" class=" float-left btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></a>
                                    <form class="float-left ml-1" action="{{ route('dashboard.tasks.destroy' , $task->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <a href="#" data-toggle="tooltip" title="delete" data-id="{{ $task->id }}" data-placement = "bottom" class="dltBtn btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
            
                                    </form>
                                </td>
                        </tr>

                    @endforeach
                </tbody>

            </table>
            {{$tasks->appends(request()->query())->links()}}
            @else
            <h3 style="font-weight: 400">Sorry No Data Found </h3>
            @endif
        </div>
    </div>

</div>{{--  //end of tile  --}}

@endsection


@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.dltBtn').click(function(e){
        var form = $(this).closest('form');
        var dataId = $(this).data('id');
        e.preventDefault();

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
    })
  </script>
  @endsection
