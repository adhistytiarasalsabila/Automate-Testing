@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="flex justify-between items-center">
                    <h2 class="font-semibold my-3">
                        {{ __('All Posts from ead laboratory') }}
                    </h2>
                </div>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-primary text-white fw-bold rounded-lg my-3" href="{{route('post.create')}}">Create new post</a>
            </div>
        </div>

    </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (session('success'))
                    <div class="bg-lime-500 p-3 text-white text-center">
                        {{ session('success') }}
                    </div>
                    @endif
    
                    @if (session('error'))
                    <div class="bg-red-500 p-3 text-white text-center">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 gap-3">
                        @foreach($data as $dt)
                        <div class="p-3 rounded-lg shadow">
                            <p class="fs-2 text-capitalize">{{$dt->title}}</p>
                            <p class="mb-4 mt-1 fs-6">{{ $dt->created_at->diffForHumans() }}</p>
                            <p class="font-base mb-3 fs-4">{{$dt->description}}</p>
                            <hr class="mb-2" />
                            <div>
                                <div class="row">
                                    <div class="d-flex flex-row">         
                                        <a type="submit" href="{{ route('post.show', $dt->id )}}" id="{{$dt->id}}" class="btn btn-success my-2 mx-1 fw-bold">show</a>
                                        <a type="submit" href="{{ route('post.edit', $dt->id )}}" id="edit-{{$dt->id}}" class="btn btn-primary my-2 mx-1 fw-bold">Edit</a>
                                        <form class="my-2 mx-1" action="{{ route('post.destroy', $dt->id )}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="delete-{{$dt->id}}" class="btn btn-danger fw-bold">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
