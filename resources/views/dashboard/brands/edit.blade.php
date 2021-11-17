@extends('layouts.dashboard.app')
@section('title', '|Edit Tasks')

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
    <form action="{{ route('dashboard.tasks.update' , $task->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('dashboard.partials._errors')

        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="name">Photo</label>
          <input type="file" name="photo" value="{{ $task->photo }}" class="form-control" required>
      </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Edit Task</i></button>
        </div>

    </form>
</div>

@endsection
