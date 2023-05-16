<!DOCTYPE html>
<html>
@include ('components.header')
@extends('components.header')

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@yield('navbar')
<form method="POST" action="{{ route('user.profile.update') }}">
    @csrf
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <h2>プロフィール</h2>
                <div class="profile-section">
                    <div class="form-group">
                        <label for="username">ユーザー名:</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="新しいパスワードを入力してください">
                    </div>
                    <button type="submit" class="btn btn-primary">変更</button>
                </div>
            </div>
        </div>
    </div>
</form>
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

</html>
