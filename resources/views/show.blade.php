@extends('public_layout.master')

@section('content')
            <h1>Showing Task {{ $blog->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $blog->title }}<br>
            <strong>Description:</strong> {{ $blog->description }}
        </p>
    </div>
@endsection