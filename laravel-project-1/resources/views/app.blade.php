@include('components.header')
@include('components.nav')

<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('components.footer')
