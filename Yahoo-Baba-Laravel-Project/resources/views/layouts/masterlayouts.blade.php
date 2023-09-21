<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yahoo Baba - @yield('title', 'Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @stack('style')
</head>

<body>

    {{-- Nav Bar Start --}}

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('post') }}">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Nav Bar End --}}

    {{-- Content Part Start --}}

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>Welcome To Home Page</h1>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('post') }}">Post</a>
                <a href="{{ route('about') }}">About</a>

                {{-- <h2>Fruits Name</h2>
                @forelse ($fruits as $key => $value)
                    <p>{{ $key }} - {{ $value }}</p>
                @empty
                    <p>No Data Found</p>
                @endforelse --}}
                {{-- @foreach ($fruits as $key => $value)
                    <p>{{ $key }} - {{ $value }}</p>
                @endforeach --}}

            </div>

            @hasSection('content')
                @yield('content')
            @else
                <h2 class="mt-4 mb-4">No Content Found</h2>
            @endif
        </div>
        {{-- @section('sidebar')
            <aside>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('post') }}">Post</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </aside>
        @show --}}



    </div>

    {{-- @php
    $fruits = ['one' => 'Apple', 'two' => 'Orange', 'three' => 'Pineapple', 'four' => 'jacfruit'];
@endphp --}}

    {{-- @include('Pages.header', [$fruits]) --}}
    {{-- @includeUnless( false,'Pages.header') --}}




    {{-- Content Part End --}}
    <footer class="bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="py-2 text-center m-0">All Right Reverse @ Copyrights 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @stack('js')
</body>



</html>

{{--

@includeIf('Pages.content')
@includeWhen( true,'Pages.footer', $fruits) --}}
