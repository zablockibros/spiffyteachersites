@extends('layouts.app')

@section('title', 'Top Teacher Websites & Blogs')

@section('content')

    @include('listings', [
        'websites' => $websites
    ])

@endsection
