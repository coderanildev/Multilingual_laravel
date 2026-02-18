@extends('layouts.base')

@section('body')

    {{-- SHOW SIDEBAR + TOPBAR ONLY IF LOGGED IN --}}
    @auth
        @include('layouts.nav')
        @include('layouts.sidenav')

        <main class="content">
            @include('layouts.topbar')

            @yield('content')

            @include('layouts.footer')
        </main>
    @endauth

    {{-- SHOW ONLY CONTENT FOR GUEST (LOGIN, REGISTER) --}}
    @guest
        @yield('content')
    @endguest

@endsection
