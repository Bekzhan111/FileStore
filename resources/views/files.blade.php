@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@unless(count($files) == 0)

@foreach ($files as $file)
<x-file-card :file="$file"/>

@endforeach
@else
<p>No listings found</p>

@endunless
</div>

<div class="mt-6 p-4">{{ $files->links() }}</div>

@endsection