<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.List', 'List') }}</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       {{-- datatables styles --}}
   <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

   <style>
    body {
        background: pink;
    }

    nav {
        background: black;
    }
    .card {

padding: 50px;
border-radius: 50px;
background-color: #ffffff; /* Warna latar belakang putih */
box-shadow: 0 8px 15px rgb(0, 0, 0); /* Efek bayangan */
transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Efek transisi pada transformasi dan bayangan */
margin: 0 auto; /* Mengatur margin secara otomatis untuk membuatnya berada di tengah */
margin-bottom: 20px;
}

.card:hover {
transform: translateY(-5px); /* Efek naik saat dihover */
box-shadow: 0 12px 20px rgba(156, 3, 131, 0.925); /* Efek bayangan saat dihover */
}



/* Responsif */
@media screen and (max-width: 768px) {
.card {
 width: 100%; /* Mengisi lebar layar */
}
}
</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.List', 'HOME') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('about')}}">{{ __('About') }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('kategori.index')}}">{{ __('Kategori') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('merk.index')}}">{{ __('Merk') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('produk.index')}}">{{ __('Produk') }}</a>
                        </li>
                        @endguest
                    </ul>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{-- scripts --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   {{-- DataTable scripts--}}
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
   <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
   <script>
       $(document).ready(function () {
               $('#dataTable').DataTable();
           });
   </script>
</body>
</html>
