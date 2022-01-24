@extends('layouts.app')

@section('content')
    <form action="{{  route('admin.categories.store')  }}" method="POST">
        @csrf
        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <input type="submit">
    </form>
@endsection
