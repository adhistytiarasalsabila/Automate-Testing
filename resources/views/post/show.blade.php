@extends('layouts.app')

@section('content')
@auth
<div class="con">
    <div class="container">
        <h2 class="mx-3 fw-bold text-capitalize">
            {{ $post->title }}
        </h2>
    </div>

    <div class="py-12">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card shadow">
                    <p class=" mb-3 block mx-3 mt-3 ">{{$post->description}}</p>
                    <p class="mb-4 mt-2 mx-3">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endauth

@endsection