@extends('layouts.app')

@section('title','Guest All  posts')

@section('header-content')
    @include('partials.header.header_nav')
@endsection

@section('content')
<section class="container-fluid">
    <div class="row justify-content-center p-5">
        <div class="col-8">

            {{-- # FORM TO SEND AN EMAIL TO THE 'ADMIN' --}}
            <form action="{{route('email.store')}}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    {{-- % insert your email in order to get the answer from the admin --}}
                    <label for="authorEmail" >Email</label>
                    <input type="text" class="form-control" id="authorEmail" name="authorEmail" placeholder="Email author">
                </div>
                {{-- && This content will be shown inside the email as html :) --}}
                <div class="form-group">
                    <label for="email_title" >Title</label>
                    <input type="text" class="form-control @error('email-title') is-invalid @enderror" id="email_title" name="email_title" placeholder="Email title">
                    @error('email_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- && This content will be shown inside the email as html :) --}}
                <div class="form-group">
                    <label for="email_text">Email content</label>
                    <textarea rows="3" type="text" class="form-control" id="email_text" name="email_text" placeholder="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection