@extends('root.frontend.frontend')
@section('title','Home')
@section('content')
    @include('frontend.components.homeComponents.sliderSection')
    @include('frontend.components.homeComponents.headerSection')
    <main>
        @include('frontend.components.homeComponents.aboutSection')
        @include('frontend.components.homeComponents.servicesSection')
        @include('frontend.components.homeComponents.whyUsSection')
        @include('frontend.components.homeComponents.portfolioSection')
        @include('frontend.components.homeComponents.clientSection')
        @include('frontend.components.homeComponents.testimonialsSection')
        @include('frontend.components.homeComponents.teamSection')
        @include('frontend.components.homeComponents.blogSection')
        @include('frontend.components.homeComponents.contactSection')
    </main>
@endsection
@push('onPageJs')
    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    </script>
@endpush
