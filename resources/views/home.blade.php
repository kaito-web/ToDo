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
                    </div>
                </div>
            </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('タスク') }}</div>

                <div class="card-body ">
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-secondary text-center">
                            タスクを追加する
                        </a>
                    </div>
                </div>
                <table class="table">
                  <thead>
                  <tr>
                    <th>タイトル</th>
                    <th>状態</th>
                    <th>期限</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
@endsection
