<html lang="ja">

@include ('components.header')
@extends('components.header')
<body>
@yield('navbar')
    <div class="container-fluid">
        <div class="title">
            <div class="content">
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
                            <p>{{ $language }}</p>
                        </div>
                        <div class="desired_framework">
                            <h5>・フレームワーク</h5>
                            <p>{{ $framework }}</p>
                        </div>
                        <div class="desired_tool">
                            <h5>・ツール</h5>
                            <p>{{ $tool }}</p>
                        </div>
                        <div class="desired_working_style">
                            <h5>・勤務形態</h5>
                            <p>{{ $working_style }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h2>プロジェクト案件一覧</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>上位</th>
                    <th>案件概要</th>
                    <th>詳細内容</th>
                    <th>環境</th>
                    <th>スキル</th>
                    <th>勤務地</th>
                    <th>備考</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project['higher_company'] }}</td>
                    <td>{{ $project['project_overview'] }}</td>
                    <td>{{ $project['detail'] }}</td>
                    <td>{{ $project['environment'] }}</td>
                    <td>{{ $project['skill'] }}</td>
                    <td>{{ $project['work_place'] }}</td>
                    <td>{{ $project['remark'] }}</td>
                    <td>
                        <a href="{{ route('user.project.show', $project['id']) }}" class="btn btn-primary btn-sm">詳細</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
