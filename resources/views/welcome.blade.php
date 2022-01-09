<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Olivyerchik</title>

        @include('styles')
    </head>
    <body class="antialiased">
        @include('components.preloader')

    <div id="wrap">
        @include('components.header')
        @include('components.sliderComponent')
        @include('components.specialities')
        @include('components.item')
        @include('components.testimonials')
        @include('components.chef')
        @include('components.subscription')
        @include('components.download')
    </div>

    @include('components.footer')

    <span class="scroll-top" data-scroll="up">
    <i class="fas fa-long-arrow-alt-up"></i>
</span>
    @include('scripts')
    </body>
</html>
