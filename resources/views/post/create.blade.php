@extends('layouts.app')

@section('content')
@auth

<div class="container text-center">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Create post') }}
    </h2>
</div>
<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @error('title')
                <div class="bg-red-600 text-white font-semibold py-3 pl-5 text-center">
                    <p class="text-center">{{ $message }}</p>
                </div>
                @enderror
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('post.store')}}">
                        @csrf
                        <div class="row my-4 mx-3">
                            <div class="mb-5">
                                <div class="col">
                                    <label><span class="font-semibold fs-5" >Title</span></label>
                                </div>
                                <div class="col">
                                    <input type="text" name="title" class="p-3 form-control" style= "border: 1px solid blue; border-radius: 10px;" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="col">
                                    <label><span class="font-semibold fs-5">Description</span></label>
                                </div>
                                <div class="col">
                                <textarea name="description" class="p-3 form-control" style="border: 1px solid blue;border-radius: 10px;"></textarea>
                                </div>
                                
                            </div>
                            <div class="flex text-end">
                                <button type="submit" class="btn btn-primary p-3  fw-bold rounded-lg mr-5">Create</button>
                                {{-- <button type="submit" class="btn btn-danger p-3  fw-bold rounded-lg">Cancel</button> --}}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endauth

@endsection