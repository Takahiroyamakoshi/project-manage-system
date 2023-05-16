<html lang="ja">

@include ('components.header')
@extends('components.header')

<body>
    @yield('navbar')
    <div class="container-fluid">
        <div class="title">
            <div class="content">
                <h2>希望条件編集</h2>
            </div>
        </div>
        <section class="desired_condition top-border">
    <div class="bg">
        <div class="row row-0 mx-auto content">
            <div class="col-12 col-sm-6 pr">
                <h4>希望条件</h4>
                <form method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="language">言語</label>
                        <input type="text" class="form-control" id="language" name="language" value="{{ $language }}">
                    </div>
                    <div class="form-group">
                        <label for="framework">フレームワーク</label>
                        <input type="text" class="form-control" id="framework" name="framework" value="{{ $framework }}">
                    </div>
                    <div class="form-group">
                        <label for="tool">ツール</label>
                        <input type="text" class="form-control" id="tool" name="tool" value="{{ $tool }}">
                    </div>
                    <div class="form-group">
                        <label for="working_style">勤務形態</label>
                        <input type="text" class="form-control" id="working_style" name="working_style" value="{{ $working_style }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>