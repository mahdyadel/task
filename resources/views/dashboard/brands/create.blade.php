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
    <form action="{{ route('dashboard.brands.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        @include('dashboard.partials._errors')

        <div class="card-body" id="english-form">
            <div class="form-group">
                <label class="required" for="en_title">{{ trans('cruds.article.fields.title') }} (EN)</label>
                <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
                @if($errors->has('en_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="en_full_text">{{ trans('cruds.article.fields.full_text') }} (EN)</label>
                <textarea class="form-control {{ $errors->has('en_full_text') ? 'is-invalid' : '' }}" name="en_full_text" id="en_full_text">{{ old('en_full_text') }}</textarea>
                @if($errors->has('en_full_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_full_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
            </div>
        </div>
        
        <div class="card-body d-none" id="spanish-form">
            <div class="form-group">
                <label class="required" for="title">{{ trans('brand.title') }} (AR)</label>
                <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="es_title" value="{{ old('ar_title', '') }}" required>
                @if($errors->has('es_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ar_title') }}
                    </div>
                @endif
                {{--  <span class="help-block">{{ trans('brand') }}</span>  --}}
            </div>
            <div class="form-group">
                <label for="ar_description">{{ trans('brand.description') }} (ES)</label>
                <textarea class="form-control {{ $errors->has('ar_description') ? 'is-invalid' : '' }}" name="ar_description" id="es_full_text">{{ old('es_full_text') }}</textarea>
                @if($errors->has('ar_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ar_description') }}
                    </div>
                @endif
                {{--  <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>  --}}
            </div>
        </div>


        <div class="form-group">
          <label for="name">Description</label>
          <input type="text" name="description" class="form-control" required>
      </div>

       

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Add Brand</i></button>
        </div>

    </form>
</div>

@endsectio