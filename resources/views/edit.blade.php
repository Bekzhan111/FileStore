@extends('layout')
@section('content')
<div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit File
                        </h2>
                        <p class="mb-4">Edit: {{ $file->title }}</p>
                    </header>

                    <form method="POST" action="/files/{{ $file->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >File Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                value="{{ $file->title }}"
                            />
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label for="file" class="inline-block text-lg mb-2">
                                File
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="file"
                            />
                            <img
                            class="w-48 mr-6 mb-6"
                            src="{{ $file->file ? asset('storage/' . $file->file) : asset('images/no-image.png') }}"
                            alt=""
                        />
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update Data
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
@endsection