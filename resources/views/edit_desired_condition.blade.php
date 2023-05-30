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
                        <form method="PUT" action="user/desired-project-edit">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="language">言語</label>
                                <p>{{ $language }}</p>
                                <select size="3" class="form-control" id="language_candidates" name="language_candidates[]" multiple onchange="showSelectedLanguage()">
                                    @foreach ($languageCandidates as $languageCandidate)
                                    <option value="{{ $languageCandidate['id'] }}">{{ $languageCandidate['name'] }}</option>
                                    @endforeach
                                </select>
                                <p id="selected_language"></p>
                            </div>
                            <script>
                                function showSelectedLanguage() {
                                    var select = document.getElementById("language_candidates");
                                    var selectedOptions = Array.from(select.selectedOptions).map(option => option.text);
                                    var selectedLanguage = selectedOptions.join(", ");
                                    document.getElementById("selected_language").innerHTML = selectedLanguage;
                                }
                            </script>
                            <div class="form-group">
                                <label for="framework">フレームワーク</label>
                                <p>{{ $framework }}</p>
                                <input type="text" class="form-control" id="framework" name="framework" value="{{ $framework }}">

                            </div>
                            <div class="form-group">
                                <label for="tool">ツール</label>
                                <p>{{ $tool }}</p>
                                <input type="text" class="form-control" id="tool" name="tool" value="{{ $tool }}">
                            </div>
                            <div class="form-group">
                                <label for="working_style">勤務形態</label>
                                <p>{{ $working_style }}</p>
                                <input type="text" class="form-control" id="working_style" name="working_style" value="{{ $working_style }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">更新</button>
                            </div>
                        </form>
                        @php
                        $languages = explode(",", $language);
                        @endphp
                        <form>
                            <div id="displayContainer">
                                @foreach ($languages as $language)
                                <span class="tag">{{ $language }} <button class="removeButton">×</button></span>
                                @endforeach
                            </div>
                            <input type="text" id="tagInput">
                            <button id="addButton">追加</button>
                        </form>
                        <script src="{{ asset('js/script.js') }}"></script>
                    </div>
                </div>
            </div>
        </section>