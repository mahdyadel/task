@extends('layouts.dashboard.app')
@section('title', '|Create Tasks')

@section( 'content')

<h2>Tasks</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Tasks</a></li>
    <li class="breadcrumb-item"> <a href="{{ route('dashboard.tasks.index') }}">Tasks </a></li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>
  </ol>
</nav>
<div class="tile mb-4">
    <form action="{{ route('dashboard.tasks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        @include('dashboard.partials._errors')

        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="name">Photo</label>
          <input type="file" name="photo" class="form-control" required>
      </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Add Task</i></button>
        </div>

    </form>
</div>

@endsection
