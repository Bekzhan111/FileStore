@props(['file'])
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('images/no-image.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/files/{{ $file->id }}">{{ $file->title }}</a>
            </h3>
        </div>
    </div>
</div>