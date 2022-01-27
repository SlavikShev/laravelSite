@extends('layouts.app')

@section('title','posts')

@section('content')
    <p>post list page</p>

    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create post</a>
@endsection
