@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">List of Questions for {{ $category->name or 'Default' }}</div>

                    <div class="panel-body">
                        {{ $questions or 'none' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
