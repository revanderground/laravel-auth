@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <div class="card-title text-center">
                        <h2>{{ $post->title }}</h2>
                    </div>

                    <div class="card-image text-center my-3">
                        <img class = "w-50" src="{{ $post->post_image }}" alt="post-image">
                    </div>

                    <div class="subtitle">
                        Post with id: {{ $post->id }} | Post written on the: {{ $post->post_date }}
                        by {{ $post->author }}

                    </div>

                    <div class="card-text">
                        {{ $post->post_content }}
                    </div>

                    <div class="card-footer">
                        <a href="http://" class="btn btn-success">
                            Edit
                        </a>

                        <a href="http://" class="btn btn-danger">
                            Delete
                        </a>

                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

@endsection
