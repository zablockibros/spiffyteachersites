@extends('layouts.app')

@section('title', 'View Questions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('question-success'))
                    <p class="alert alert-info">{{ Session::get('question-success') }}</p>
                @endif
                <a href="{{ route('questions.userNew') }}">Write New Question</a>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <td>{{ $question->name }}</td>
                                <td>{{ $question->category->name }}</td>
                                <td>{{ $question->slug }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->answer }}</td>
                                <td>{{ $question->created_at }}</td>
                                <td>{{ $question->updated_at }}</td>
                                <td>
                                    <a href="{{ route('questions.userView', ['id' => $question->id]) }}">Edit</a>
                                    {!! Form::open(['route' => ['questions.userDelete', $question->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $questions->links() !!}
            </div>
        </div>
    </div>
@endsection