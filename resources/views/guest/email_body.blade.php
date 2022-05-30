@extends('layouts.app')


{{-- message inside the email --}}
@section('content')
    <section class="container-fluid">
        <div class="row justify-content-center p-5">
            <div class="col-8">
                <h1>{{ $email_title }}</h1>
                <p>
                    {{ $email_text }}
                </p>
            </div>    
        </div>
    </section>
@endsection