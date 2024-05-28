@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach ($blogs as $blog)
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <small class="text-muted">{{ $blog->category->name }}</small>
                    </div>
                    <div class="card-body">
                        {{ $blog->content }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <!-- Add your sidebar content here -->
        </div>
    </div>
</div>
@endsection
