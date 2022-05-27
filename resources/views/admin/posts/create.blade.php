@extends('layouts.app')

@section('title','Create-Post')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
    @include('partials.main.insert_post_form')
@endsection