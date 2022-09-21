@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')

                @include ('admin.posts.includes.form')

                <div class="form-group p-3 text-center">
                    <button type="submit" class="btn btn-primary">
                        Edit post
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
