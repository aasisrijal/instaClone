@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple118/v4/00/df/9e/00df9e13-3cd4-0c2f-fc6d-eefe921664a4/source/512x512bb.jpg" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
                  <a href="/post/create">Add New Post</a>  
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>11k</strong> followers</div>
                <div class="pr-4"><strong>500</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">hype.com</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
        
    </div>

    <div class="row pt-4">
       @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
        
    </div>
    
</div>
@endsection
