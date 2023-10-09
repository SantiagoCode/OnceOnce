@extends('layouts.app')

@section('content')
{{-- @include('partials.product-slideshow', [
    'title' => __('Doral™️ 2023 Collection - <b>Amsterdam</b>'),
    'tags' => ['Amsterdam'],
    'category' => '',
    ]) --}}

{{-- @if(function_exists('get_field'))
@include('partials.billboard-list', [
    'billboards' => get_field('billboards_section_1', 81)
    ])
@endif() --}}

@include('partials.header')
@include('partials.hero')
@include('partials.nuestros-servicios')
@include('partials.sobre-nosotros')
@include('partials.propiedades')
@include('partials.asesoria')

{{-- @if(function_exists('get_field'))
@include('partials.billboard-list', [
    'billboards' => get_field('billboards_section_2', 81)
    ])
@endif --}}

@endsection
