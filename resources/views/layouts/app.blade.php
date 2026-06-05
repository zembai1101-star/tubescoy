@include('components.header')

@include('components.navbar')

@include('components.sidebar')

<div class="content-wrapper">
    @yield('content')
</div>

@include('components.footer')

@include('components.scripts')