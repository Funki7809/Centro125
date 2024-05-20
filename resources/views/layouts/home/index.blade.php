@extends('template.index')

@section('content')

	@include('layouts.home.modules.trending-notes')
    @include('layouts.home.modules.best-notes')
    @include('layouts.home.modules.notes-by-category')

@endsection