@extends('home')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Janrlar ro'yxati</h1>
    <a href="/genres/create" class="btn btn-primary">Yangi janr qo'shish</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td><a href="/genres/{{$genre->id}}" class="btn btn-outline-primary btn-sm">{{ $genre->name }}</a></td>
                <td>
                    <a href="/genres/{{ $genre->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/genres/{{ $genre->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
