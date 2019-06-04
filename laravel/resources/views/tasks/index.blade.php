@extends('layout')

@section('content')
<div class="mb-4">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">
        投稿を新規作成する
    </a>
</div>
    <div class="container mt-4">
        @foreach ($tasks as $task)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $task->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(str_limit($task->body, 200))) !!}
                    </p>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $task->created_at->format('Y.m.d') }}
                    </span>

                    @if ($task->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $task->comments->count() }}件
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection