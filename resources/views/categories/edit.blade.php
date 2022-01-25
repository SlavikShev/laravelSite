@extends('layouts.app')

@section('title', 'edit')

@section('content')
    <p>edit category: {{ $category->title }}</p>

    <form action="{{ route('admin.categories.posts.update', $category->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="parent_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <label for="title">Заголовок</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $category->title }}">
            <input type="submit" value="Сохранить">
        </div>
    </form>
@endsection
