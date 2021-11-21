@extends('layouts.dashboard.app')
@section('title', '|Brands')
@section('content')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection

<h2>Brands</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Brands</a></li>
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
                        <a href="#" id="add_data" class="btn btn-primary" data-toggle="modal" data-target="#studentModal"><i class="fa fa-plus">Add</i></a>
                    </div>

                </div>{{--  //end of row  --}}
            </form>{{--  //end of form  --}}
        </div>{{--  //end of col-12  --}}
    </div>{{--  //end of row  --}}

    <div class="row">
        <div class="col-md-12">
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
                
                </tbody>

            </table>
           
        </div>
    </div>

 

    

</div>{{--  //end of title  --}}



<!-- Modal Add -->
    <div class="modal" id="addmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة منتج</h6><button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <div class="modal-body">

                        <form method="post" id="student_form">
                            @csrf

                            <div class="form-group">
                                <lable for="title">Title</lable>
                                <input type="text"  class="form-control" id="title" name="title" required>
                            </div>

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



    
<div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="student_form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Enter First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

        {{-- //ajax// --}}

@section('scripts')
 <script>
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "{{ route('dashboard.brand.datatable') }}",
            "type": "GET"
        },
        "columns": [
            { "data": "id" },
            { "data": "brand.title" },
            { "data": "brand.description" },

        ]
    } );
} );
</script>  
@endsection
