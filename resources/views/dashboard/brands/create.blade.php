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

    <div class="panel panel-default">
         <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="arabic-link">AR</a>
            </li>
        </ul>

         <div class="card-body" id="english-form">
            <div class="form-group">
                            <label class="required" for="title">{{__('brand.title') }} (EN)</label>
                <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
                @if($errors->has('en_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_title') }}
                    </div>
                @endif
                {{--  <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>  --}}
                    </div>
            <div class="form-group">
                            <label class="required" for="title">{{__('brand.description') }} (EN)</label>
                <textarea class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" name="en_description" id="en_description">{{ old('en_description') }}</textarea>
                @if($errors->has('en_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_description') }}
                    </div>
                @endif
                {{--  <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>  --}}
            </div>
        </div>


        <div class="card-body d-none" id="arabic-form">
                <div class="form-group">
                                <label class="required" for="title">{{__('brand.title') }} (AR)</label>
                    <input class="form-control {{ $errors->has('es_title') ? 'is-invalid' : '' }}" type="text" name="es_title" id="es_title" value="{{ old('es_title', '') }}" required>
                    @if($errors->has('es_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('es_title') }}
                        </div>
                    @endif
                    {{--  <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>  --}}
                </div>
                <div class="form-group">
                                <label class="required" for="title">{{__('brand.description') }} (AR)</label>
                    <textarea class="form-control {{ $errors->has('es_description') ? 'is-invalid' : '' }}" name="es_description" id="es_description">{{ old('es_description') }}</textarea>
                    @if($errors->has('es_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('es_description') }}
                        </div>
                    @endif
                    {{--  <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>  --}}
                </div>
        </div>
        
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Add Brand</i></button>
        </div>

   
    </form>

</div>

@endsection
@section('scripts')



    <script>
        var $englishForm = $('#english-form');
        var $spanishForm = $('#arabic-form');
        var $englishLink = $('#english-link');
        var $spanishLink = $('#arabic-link');

        $englishLink.click(function() {
          $englishLink.toggleClass('bg-aqua-active');
          $englishForm.toggleClass('hidden');
          $spanishLink.toggleClass('bg-aqua-active');
          $spanishForm.toggleClass('hidden');
        });

        $spanishLink.click(function() {
          $englishLink.toggleClass('bg-aqua-active');
          $englishForm.toggleClass('hidden');
          $spanishLink.toggleClass('bg-aqua-active');
          $spanishForm.toggleClass('hidden');
        });
    </script>
@endsection




