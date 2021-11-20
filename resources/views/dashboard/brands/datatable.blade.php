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
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search">Search</i></button>
                        <a href="{{ route('dashboard.brands.create') }}" class="btn btn-primary"><i class="fa fa-plus">Add</i></a>
                        {{-- <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus">Add</i></a> --}}
                    </div>

                </div>{{--  //end of row  --}}
            </form>{{--  //end of form  --}}
        </div>{{--  //end of col-12  --}}
    </div>{{--  //end of row  --}}

    <div class="row">
        <div class="col-md-12">
            @if($brands->count() > 0)
            <table class="table table-hover" id ="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $index=> $brand)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $brand->brand->title }}</td>
                            <td>{{ $brand->brand->description }}</td>
                           
                            <td>
                        <a href="{{ route('dashboard.brands.edit' , $brand->id) }}" data-toggle="tooltip" title="edit" data-placement = "bottom" class=" float-left btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></a>
                                    <form class="float-left ml-1" action="{{ route('dashboard.brands.destroy' , $brand->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <a href="#" data-toggle="tooltip" title="delete" data-id="{{ $brand->id }}" data-placement = "bottom" class="dltBtn btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
            
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

</div>{{--  //end of tile  --}}

@endsection


