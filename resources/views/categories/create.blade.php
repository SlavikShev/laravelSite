@extends('layouts.app')

@section('title', 'create')

@section('content')
    <form action="{{  route('admin.categories.posts.store')  }}" method="POST">
        @csrf
        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="parent_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <label for="title">Заголовок</label>
            <input class="form-control" type="text" name="title" id="title">
            <input type="submit" value="Создать">
        </div>
    </form>
@endsection
