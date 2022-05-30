@extends('layouts.app')

@section('title','Guest All  posts')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
<section class="container-fluid">
    <div class="row justify-content-center p-5">

        {{-- message shown after sending the email --}}
        <div class="col-8">
            Thank you for getting in touch!
            Soon one of our admin will answer you!
        </div>
    
    </div>
</section>
@endsection