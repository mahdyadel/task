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
                        <a href="#" class="btn btn-primary" ><i class="fa fa-plus">Add</i></a>
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
           
        </div>
    </div>

 

    

</div>{{--  //end of title  --}}


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
