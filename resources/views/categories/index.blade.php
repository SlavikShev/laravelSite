@extends('layouts.app')

@section('title','all categories')

@section('content')
    <a class="btn btn-primary" href="{{ route('admin.categories.posts.create') }}">create category</a>

    <p>categories list</p>

    <table>
        <thead>
            <tr>
                <td>Заголовок</td>
                <td>Родительская категория</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        <a href="{{ route('admin.categories.posts.edit', $category->id) }}">{{ $category->title }}</a>
                    </td>
                    <td>{{ $category->parentTitle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
