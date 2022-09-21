@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    <p>
                        {{ session('success') }}
                    </p>
                </div>
            @endif
            @if (session('deleted'))
            <div class="alert alert-success">
                <p>
                    {{ session('deleted') }}
                </p>
            </div>
            @endif
            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)

                        <tr>
                            <th scope="row">
                                {{ $post->id }}
                            </th>

                            <td>
                                {{ $post->author}}
                            </td>

                            <td>
                                {{ $post->title }}
                            </td>

                            <td>
                                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                                    View
                                </a>
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
                            </td>

                        </tr>

                    @empty

                    @endforelse


                </tbody>
              </table>

        </div>

    </div>

</div>

@endsection
