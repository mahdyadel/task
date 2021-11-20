@extends('layouts.dashboard.app')
@section('title', '|Modal')
@section('content')
@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
<h2>Modal</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Modal</a></li>
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
                        <button type="submit" class="btn btn-primary" ><i class="fa fa-search">Search</i></button>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus">Add</i></a>
                    </div>

                </div>{{--  //end of row  --}}
            </form>{{--  //end of form  --}}
        </div>{{--  //end of col-12  --}}
    </div>{{--  //end of row  --}}

    <div class="row">
        <div class="col-md-12">
            @if($todo->count() > 0)
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Description</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($todo as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                     <td>
                        <a href="#" title="edit" data-placement = "bottom" class=" float-left btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#editmodal"><i class="fa fa-edit"></i></a>
                                    <form class="float-left ml-1" action="{{ route('dashboard.todo.destroy' , $todo->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <a href="#" data-toggle="tooltip" title="delete" data-id="{{ $todo->id }}" data-placement = "bottom" class="dltBtn btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
            
                                    </form>
                                </td>
                </tr>
                    
                @endforeach
                
                </tbody>

            </table>
            @else
            <h3 style="font-weight: 400">Sorry No Data Found </h3>
            @endif
        </div>
    </div>

 


<!-- Modal Add -->
    <div class="modal" id="addmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة منتج</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body">

                        <form action="{{ route('dashboard.todo.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <lable for="title">Title</lable>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>


                           

                            <div class="form-group">
                                <lable for="description">Description</lable>
                                <textarea type="text" class="form-control" id="description" name="description"
                                    required></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Add Modal</button>
                        <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        
<!-- Modal Edit -->
    <div class="modal" id="editmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة منتج</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body">

                        <form action="{{ url('dashboard/todo/update') }}" method="post">
                            @csrf
                             {{ method_field('patch') }}

                            <div class="form-group">
                                <input type="hidden" name="todo_id" id="todo_id"  value="">
                                <lable for="title">Title</lable>
                                <input type="text" class="form-control" id="title" value="{{ $todo->title }}" name="title" required>
                            </div>


                           

                            <div class="form-group">
                                <lable for="description">Description</lable>
                                <textarea type="text" class="form-control" id="description" name="description"
                                    required>{{ $todo->description }}</textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Add Modal</button>
                        <button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    

</div>{{--  //end of title  --}}
    

@endsection

    