@extends('layouts.admin')
@section('title', 'Posts')

@section('content')
    <section>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="d-flex justify-content-between align-items-center py-4">
            <h1>Posts</h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crea nuovo post</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Update At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->slug) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.posts.edit', $post->slug) }}"><i class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>


                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>
@endsection
