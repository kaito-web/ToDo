@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="">
            <div class="card">
                <div class="card-header">{{ __('エラー') }}</div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                    <p class="fs-4">お探しのページは見つかりませんでした。</p>
                    </div>
                    <div class="d-grid gap-4 col-6 mx-auto">
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            ホームへ戻る
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
