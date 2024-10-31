@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        {{ __('Edit Post') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @error('title')
                <div class="bg-red-600 text-white font-semibold py-3 pl-5 text-center">
                    <p class="text-center">{{ $message }}</p>
                </div>
                @enderror
                <div class="bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('post.update', $post->id )}}">
                        @csrf
                        @method('PUT')
                        <div class="row my-4 mx-3">
                            <div class="mb-5">
                                <div class="col">
                                    <label><span class="font-semibold fs-5 mx-2" >Title</span></label>
                                </div>
                                <div class="col">
                                    <input type="text" name="title" value="{{$post->title}}" class="p-3 form-control" style= "border: 1px solid blue; border-radius: 10px;" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="col">
                                    <label><span class="font-semibold fs-5 mx-2">Description</span></label>
                                </div>
                                <div class="col">
                                <textarea name="description" class="p-3 form-control" style="border: 1px solid blue;border-radius: 10px;">{{$post->description}}</textarea>
                                </div>
                                
                            </div>
                        </div>
                            <div class="flex text-end mb-3">
                                <button type="submit" class="btn btn-success p-3  fw-bold rounded-lg mr-5">Update</button>
                                <button type="submit" class="btn btn-danger p-3  fw-bold rounded-lg mx-2">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection