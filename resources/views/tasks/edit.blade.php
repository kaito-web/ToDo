@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('タスクを追加') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form
                        action="{{ route('tasks.edit', ['folder' => $task->folder_id, 'task' => $task->id]) }}"
                        method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">タイトル</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title') ?? $task->title }}" />
                            </div>
                            <div class="form-group">
                                <label for="status">状態</label>
                                <select name="status" id="status" class="form-control">
                                    @foreach (\App\Models\Task::STATUS as $key => $val)
                                        <option value="{{ $key }}"
                                            {{ $key == old('status', $task->status) ? 'selected' : '' }}>
                                            {{ $val['label'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="due_date">期限</label>
                                <input type="text" class="form-control" name="due_date" id="datepicker" 
                                    value="{{ old('due_date') ?? $task->formatted_due_date }}" />
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            flatpickr(document.getElementById('datepicker'), {
                                                locale: 'ja',
                                                dateFormat: 'Y-m-d',
                                            });
                                        });
                                    </script>
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    flatpickr(document.getElementById('datepicker'), {
                                        locale: 'ja',
                                        dateFormat: 'Y-m-d',
                                    });
                                });
                            </script>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2" type="submit">{{ '送信' }}</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection