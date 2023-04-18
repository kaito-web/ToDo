@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('フォルダを追加') }}</div>

                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $message)
                          <li>{{ $message }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                    <form method="POST" action="{{ route('folders.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label">{{ __('フォルダ名') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title" id = "title"　value="{{ old('title') }}" />
                            </div>
                        </div>

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