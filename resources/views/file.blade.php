@extends('layout')
@section('content')
<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{ $file->file ? asset('storage/' . $file->file) : asset('images/no-image.png') }}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{ $file->title }}</h3>
                    </div>
                </div>
            </div>
            <div class="mt-4 p-2 flex space-x-6">
                <a href="/files/{{ $file->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
                <form method="POST" action="/files/{{ $file->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                        Delete
                    </button>
                </form>
            </div>
@endsection