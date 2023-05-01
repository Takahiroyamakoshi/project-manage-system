<!DOCTYPE html>
<html lang="ja">
@extends('components.header')
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('ログインしました！') }}
                        <br>
                        <a href="{{ route('user.mypage') }}">マイページへ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
