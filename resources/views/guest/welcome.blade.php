<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{config('app.name','Boolblog')}}</title>
    </head>
    <body>
        <header class="bg-primary">
            <section class="container-fluid">
                <div class="row p-2">
                    <h1 class="text-uppercase fw-bolder">Boolblog</h1>
                </div>
            </section>
        </header>

        <main>
            <section class="container-fluid">
                <div class="row p-5">
                    <div class="card col-6">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            <div class="buttons">
                                {{--  //# CHECK LOGIN  --}}
                                @if (Route::has('login'))
                                    @auth
                                    {{-- //# change instead of route to the home  ONLY IF LOGIN --}}
                                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Explore your Posts</a>

                                    {{-- //# Logout event only if login  --}}
                                    <a  class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
    
                                @else
                                {{-- % ELSE YOU COULD LOGIN OR REGISTER --}}
                                    <a class="btn btn-primary"  class="nav-link" href="{{ route('login') }}">Login</a>

                                    {{-- % IF I WOULD LIKE TO REGISTER I AM ROUTED TO THE REGISTER PAGE  --}}
                                    @if (Route::has('register'))
                                        <a class="btn btn-primary"  class="nav-link" href="{{ route('register') }}">Register</a>
                                    @endif
    
                                    @endauth
                                @endif 
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-uppercase">Welcome</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit tempore a sint saepe ipsa assumenda labore possimus, fugit, incidunt vero veniam minus aperiam commodi autem quis quibusdam maxime, iure culpa.</p>
                        {{-- % guests and admins ARE ALLOWED TO "VIEW" THE POSTS --}}
                        <button class="btn btn-sm btn-primary">
                            <a href="{{route('guests.posts')}}">Guest page</a>
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>


