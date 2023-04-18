@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="row row-cols-auto">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">{{ __('フォルダ') }}</div>

                    <div class="card-body ">
                        <div class="d-grid gap-2">
                            <a href="{{ route('folders.create')}}" class="btn btn-outline-secondary text-center">
                                フォルダを追加する
                            </a>
                        </div>
                    </div>
                    <div class="list-group">
                        @foreach ($folders as $folder)
                            <a href="{{ route('tasks.index', ['folder' => $folder->id]) }}"
                                class="list-group-item list-group-item-action">
                                {{ $folder->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('タスク') }}</div>

                <div class="card-body ">
                    <div class="d-grid gap-2">
                        <a href="{{ route('tasks.create', ['folder' => $current_folder_id]) }}" class="btn btn-outline-secondary text-center">
                            タスクを追加する
                        </a>
                    </div>
                </div>
                <table class="table">
                  <thead>
                  <tr>
                    <th class="table">タイトル</th>
                    <th>状態</th>
                    <th>期限</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                      <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                        <span class="{{ $task->status_class }}">{{ $task->status_label }}</span>
                        </td>
                        <td>{{ $task->formatted_due_date }}</td>
                        <td><a href="{{ route('tasks.edit', ['folder' => $task->folder_id, 'task' => $task->id]) }}" class="link">編集</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>

@endsection
