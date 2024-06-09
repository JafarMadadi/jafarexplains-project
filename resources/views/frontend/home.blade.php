@extends('frontend.layouts.master')

@section('title')
    {{-- {{ $settings->site_name }} --}}
@endsection

@section('content')

    <!--================ Start Home Banner Area =================-->
    @include('frontend.sections.banner')
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    @include('frontend.sections.about-us')
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    @include('frontend.sections.brand')
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    @include('frontend.sections.feature')
    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    @include('frontend.sections.portfolio')
    <!--================End Portfolio Area =================-->

    <!--================ Start Testimonial Area =================-->
    @include('frontend.sections.testimonial')
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('frontend.sections.newsletter')
    <!--================ End Newsletter Area =================-->

@endsection
