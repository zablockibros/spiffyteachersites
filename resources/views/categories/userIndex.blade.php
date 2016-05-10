@extends('layouts.app')

@section('title', 'View Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('category-success'))
                    <p class="alert alert-info">{{ Session::get('category-success') }}</p>
                @endif
                    <a href="{{ route('categories.userNew') }}">Write New Category</a>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                            <tr>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->slug }}</td>
                                <td>{{ $cat->description }}</td>
                                <td>{{ $cat->created_at }}</td>
                                <td>{{ $cat->updated_at }}</td>
                                <td>
                                    <a href="{{ route('categories.userView', ['id' => $cat->id]) }}">Edit</a>
                                    {!! Form::open(['route' => ['categories.userDelete', $cat->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection