<!doctype html>
<html lang="en">

<head>
    @include('includes.meta')
    @include('includes.styles')
    @stack('styles')
</head>

<body>
    @include('includes.navbar')

    <div class="container py-5">
        {{-- dynamic breadcrumbs --}}
        <div class="mb-3">
            {{ $breadcrumbs }}
        </div>

        {{-- slot: dynamic content --}}
        {{ $slot }}
    </div>

    @include('includes.scripts')
    @stack('scripts')
</body>

</html>
