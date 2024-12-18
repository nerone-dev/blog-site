@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($blogs as $blog)
        <div class="bg-white rounded shadow">
            <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="rounded-t">
            <div class="p-4">
                <h2 class="text-xl font-bold">{{ $blog->title }}</h2>
                <p class="text-gray-600">{!! Str::limit($blog->content, 100) !!}</p>
                <a href="{{ route('blog.show', $blog->id) }}" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
