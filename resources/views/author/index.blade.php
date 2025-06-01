@extends('home')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Authorlar ro'yxati</h1>
    <a href="/authors/create" class="btn btn-primary">Yangi foydalanuvchi qo'shish</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Url</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td><a href="authors/{{$author->id}}" class="btn btn-outline-primary btn-sm">{{ $author->name }}</a></td>
                <td><a href='{{ $author->url }}' target="_blank" class="btn btn-outline-primary btn-sm">link</a></td>
                <td>
                    <a href="/authors/{{ $author->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/authors/{{ $author->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">O'chirish</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
