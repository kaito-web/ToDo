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
                        <form action="{{ route('tasks.create', ['folder' => $folder_id]) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">タイトル</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title') }}" />
                            </div>
                            <div class="col-md-8"></div>
                            <div class="form-group">
                                <label for="due_date">期限</label>
                                <input class="form-control" type="text" id="datepicker" name="due_date">

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        flatpickr(document.getElementById('datepicker'), {
                                            locale: 'ja',
                                            dateFormat: 'Y-m-d',
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-12"></div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">{{ '送信' }}</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
