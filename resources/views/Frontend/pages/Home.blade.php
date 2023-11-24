@extends('Frontend.masterlayout.frontend_master')
@include('Frontend.component.hero')
@section('content')
    <main id="main">
        @include('Frontend.component.about')
        @include('Frontend.component.skill')
        @include('Frontend.component.projects')
        @include('Frontend.component.contact')
    </main>
    @include('Frontend.component.footer')
@endsection


