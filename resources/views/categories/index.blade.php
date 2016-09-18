@extends('layouts.app')

@section('title', 'Teacher Blog Categories')

@section('content')

    <div class="unicard unicard-framed mgb-30">

        <!-- header -->
        <div class="unicard-header bd-b">
            <h4 class="fw-bold case-u unicard-title">Teacher Blog Categories</h4>
        </div>
        <!-- /header -->

        <!-- unicard block -->
        <div class="unicard-block">
            <div class="row-fluid">
                <div class="col-md-6">
                    <h4>Grade Level Categories</h4>
                    <ul>
                        @foreach($categories as $category)
                            @if($category->label != 'grade-level')
                                @continue
                            @endif
                            <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Subject Categories</h4>
                    <ul>
                        @foreach($categories as $category)
                            @if($category->label != 'subject')
                                @continue
                            @endif
                            <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
