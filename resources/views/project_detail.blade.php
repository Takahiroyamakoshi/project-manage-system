@include ('components.header')
@extends('components.header')

<body>
    <header>
        @yield('navbar')
    </header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="card-header bg-light">案件情報詳細</h2>

                    <div class="card text-white bg-secondary col-md-12">
                        <div class="card-header">上位企業</div>
                        <div class="card-body">
                            <p id="higher_company">{{ $project['higher_company'] }}</p>
                        </div>
                    </div>

                    <div class="card text-white bg-dark col-md-12">
                        <div class="card-header">詳細</div>
                        <div class="card-body">
                            <p id="higher_company">{{ $project['detail'] }}</p>
                        </div>
                    </div>

                    <div class="card text-white bg-secondary col-md-12">
                        <div class="card-header">スキル</div>
                        <div class="card-body">
                            <p id="higher_company">{{ $project['skill'] }}</p>
                        </div>
                    </div>

                    <div class="card text-white bg-dark col-md-12">
                        <div class="card-header">勤務地</div>
                        <div class="card-body">
                            <p id="higher_company">{{ $project['work_place'] }}</p>
                        </div>
                    </div>

                    <div class="card text-white bg-secondary col-md-12">
                        <div class="card-header">備考</div>
                        <div class="card-body">
                            <p id="higher_company">{{ $project['remark'] }}</p>
                        </div>
                    </div>

                    <div class="mt-3">
                    <button type="button" onclick="history.back()">戻る</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>