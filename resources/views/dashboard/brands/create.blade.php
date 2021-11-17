@extends('layouts.dashboard.app')
@section('title', '|Create Brands')

@section( 'content')

<h2>Brands</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Brands</a></li>
    <li class="breadcrumb-item"> <a href="{{ route('dashboard.brands.index') }}">Brands </a></li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>
  </ol>
</nav>
<div class="tile mb-4">
    <form action="{{ route('dashboard.brands.store') }}" method="post" >
        @csrf
        @method('post')

        @include('dashboard.partials._errors')

        @foreach (config('translatable.locales') as $locale)
        <div class="form-group">
            <label>@lang('brand.' . $locale . '.title')</label>
            <input type="text" name="{{ $locale }}[title]" class="form-control" value="{{ old($locale . '.title') }}">
        </div>
    @endforeach


            @foreach (config('translatable.locales') as $locale)
            <div class="form-group">
                <label>@lang('brand.' . $locale . '.description')</label>
                <input type="text" name="{{ $locale }}[description]" class="form-control" value="{{ old($locale . '.description') }}">
            </div>
        @endforeach

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Add Brand</i></button>
        </div>

    </form>

</div>

@endsection
