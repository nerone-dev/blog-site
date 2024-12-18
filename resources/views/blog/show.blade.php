@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white rounded shadow p-6">
        <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="rounded">
        <h1 class="text-3xl font-bold mt-4">{{ $blog->title }}</h1>
        <p class="mt-4 text-gray-800">{!! $blog->content !!}</p>
    </div>
</div>
@endsection
