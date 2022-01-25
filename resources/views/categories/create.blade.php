@extends('layouts.app')

@section('title', 'create')

@section('content')
    <form action="{{  route('admin.categories.posts.store')  }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input class="form-control" type="text" name="title" id="title">
            <input type="submit" value="Создать">
        </div>
    </form>
@endsection
