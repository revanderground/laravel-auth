@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto">

            <div class="card my-card">
                <div class="card-body">

                    <div class="card-title text-center">
                        <h2>{{ $post->title }}</h2>
                    </div>

                    <div class="card-image text-center my-3">
                        <img class = "w-50" src="{{ $post->post_image }}" alt="post-image">
                    </div>

                    <div class="subtitle my-3">
                        Post with id: {{ $post->id }} | Post written on the: {{ $post->post_date }}
                        by {{ $post->author }}

                    </div>

                    <div class="card-text my-3">
                        {{ $post->post_content }}
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                            Edit
                        </a>


                        <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>

                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

@endsection
