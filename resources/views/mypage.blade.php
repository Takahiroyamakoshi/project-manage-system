<!DOCTYPE html>
<html>
@extends('header')

@section('content')
<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    <div class="container">
        <h2>プロフィール</h2>
        <div class="profile-section">
            <div class="form-group">
                <label for="username">ユーザー名:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="password">パスワード:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="新しいパスワードを入力してください">
            </div>
            <button type="submit" class="btn btn-primary">パスワード変更</button>
        </div>
    </div>
</form>

{{--        <h2>プロジェクト案件一覧</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>プロジェクト案件名</th>
                    <th>進捗状況</th>
                    <th>期限</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->status }}</td>
                        <td>{{ $project->deadline }}</td>
                        <td><a href="{{ route('projects.show', $project->id) }}">詳細</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
--}}
    <footer>
        <div class="container">
            <h4>リンク集</h4>
            <ul>
                <li><a href="#">利用規約</a></li>
                <li><a href="#">プライバシーポリシー</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </div>
    </footer>

<div class="title">
    <div class="mx-auto content">
        <h2>MyPage</h2>
    </div>
</div>
<section class="desired_condition top-border">
    <div class="bg">
        <div class="row row-0 mx-auto content">
            <div class="col-12 col-sm-6 about">
                <div class="mx-auto icon" style="background-image: url();"></div>
            </div>
            <div class="col-12 col-sm-6 pr">
                <h4>希望条件</h4>
                <div class="desired_language">
                    <h5>・言語</h5>
                    <p></p>
                </div>
                <div class="desired_framework">
                    <h5>・フレームワーク</h5>
                    <p></p>
                </div>
                <div class="desired_tool">
                    <h5>・ツール</h5>
                    <p></p>
                </div>
                <div class="desired_working_style">
                    <h5>・勤務形態</h5>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

</html>
@endsection