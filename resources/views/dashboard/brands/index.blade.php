@extends('layouts.dashboard.app')
@section('title', '|Brands')
@section('content')

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
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addbrand"><i class="fa fa-plus">Add</i></a>
                    </div>

                </div>{{--  //end of row  --}}
            </form>{{--  //end of form  --}}
        </div>{{--  //end of col-12  --}}
    </div>{{--  //end of row  --}}

    <div class="row">
        <div class="col-md-12">
            {{-- @if($brands->count() > 0) --}}
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
            {{-- @else
            <h3 style="font-weight: 400">Sorry No Data Found </h3>
            @endif --}}
        </div>
    </div>

 

    

</div>{{--  //end of title  --}}
<!-- Modal -->
    <div class="modal fade" id="addbrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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
            {"data":  "action", orderable: false, searchable: false}

        ]
    } );
} );
</script>  
@endsection
