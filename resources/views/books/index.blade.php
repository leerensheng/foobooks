@extends('layouts.master')

@section('title')
    All books
@stop

@section('content')

    <h1>All the books</h2>

    <div class='book'>
        @foreach($books as $book)
            <h2>{{ $book->title }}</h2>
            <img src='{{ $book->cover }}' alt='Cover for {{ $book->title }} '>
            <a href='/book/edit/{{$book->id}}'>Edit</a>
            <a href='/book/delete/{{$book->id}}'>Delete</a>
        @endforeach
    </div>

@stop
