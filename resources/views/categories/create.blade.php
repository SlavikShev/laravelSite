@extends('layouts.app')

@section('title', 'create')

@section('content')
    <form action="{{  route('admin.categories.posts.store')  }}" method="POST">
        @csrf
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title">
        <input type="submit" value="Создать">
    </form>
@endsection
