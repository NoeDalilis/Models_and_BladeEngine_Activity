@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    <table>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection