@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $blog->title }}</h1>
            <p><strong>Author:</strong> {{ $blog->author->name }}</p>
            <p><strong>Category:</strong> {{ $blog->category->name }}</p>
            <p>{!! $blog->content !!}</p>
        </div>
    </div>
</div>
@endsection
