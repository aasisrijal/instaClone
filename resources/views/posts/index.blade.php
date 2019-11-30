@extends('layouts.app')

@section('content')
    <div class="container">
    <h4>Users to follow</h4>
    @foreach($userAll as $user)
    <div class="row">
        <div class="col-4">
            <a href="/profile/{{ $user->id }}">{{ $user->username }}</a>
        </div>
        
    </div>
    @endforeach
     @foreach($posts as $post)
        <div class="row">
        
        <div class="col-5 offset-3">
            <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>

        </div>
        </div>
        <div class="row pb-4">
        <div class="col-5 offset-3">
        
            <div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
                </div> 
        </div>
    </div>
     </div>
     @endforeach
    </div>
    <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

@endsection