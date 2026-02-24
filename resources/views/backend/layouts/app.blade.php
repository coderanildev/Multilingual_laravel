@extends('backend.layouts.base')

@section('body')

    {{-- SHOW SIDEBAR + TOPBAR ONLY IF LOGGED IN --}}
    @auth
        @include('backend.layouts.nav')
        @include('backend.layouts.sidenav')

        <main class="content">
            @include('backend.layouts.topbar')

            @yield('content')

            @include('backend.layouts.footer')
        </main>
    @endauth

    {{-- SHOW ONLY CONTENT FOR GUEST (LOGIN, REGISTER) --}}
    @guest
        @yield('content')
    @endguest

@endsection
