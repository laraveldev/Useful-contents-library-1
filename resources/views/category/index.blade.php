@extends('home')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Categoriyalar ro'yxati</h1>
        <a href="/categories/create" class="btn btn-primary">Yangi caregoriya qo'shish</a>
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
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="/categories/{{$category->id}}" class="btn btn-outline-primary btn-sm">{{ $category->name }}</a></td>
                <td>
                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/categories/{{ $category->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
