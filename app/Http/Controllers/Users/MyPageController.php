<?php

namespace App\Http\Controllers\Users;

use App\Helpers\KeyWordCollection;
use App\Http\Controllers\Controller;
use App\Models\User;

class MyPageController extends Controller
{
    //TODO desired_key_wordsテーブル再作成
    const LANGUAGE_ID = 1;
    const FRAMEWORK_ID = 2;
    const TOOL_ID = 3;
    const WORKING_STYLE_ID = 4;

    public function index()
    {
        // ユーザーIDに紐づく希望条件を取得
        $user = User::with('desiredProject.desiredKeyWord.KeyWord')
            ->find(auth()->id());

        $languageNames = $user->desiredProject->desiredKeyWord
            ->filter(function ($desiredKeyWord) {
                return $desiredKeyWord->KeyWord->key_word_group_id == self::LANGUAGE_ID;
            })
            ->pluck('KeyWord.name')
            ->join(',');

        $frameworkNames = $user->desiredProject->desiredKeyWord
            ->filter(function ($desiredKeyWord) {
                return $desiredKeyWord->KeyWord->key_word_group_id == self::FRAMEWORK_ID;
            })
            ->pluck('KeyWord.name')
            ->join(',');

        $toolNames = $user->desiredProject->desiredKeyWord
            ->filter(function ($desiredKeyWord) {
                return $desiredKeyWord->KeyWord->key_word_group_id == self::TOOL_ID;
            })
            ->pluck('KeyWord.name')
            ->join(',');

        $workingStyles = $user->desiredProject->desiredKeyWord
            ->filter(function ($desiredKeyWord) {
                return $desiredKeyWord->KeyWord->key_word_group_id == self::WORKING_STYLE_ID;
            })
            ->pluck('KeyWord.name')
            ->join(',');

        // ユーザーIDに紐づく案件情報を取得
        $joinableProjects = User::with('attendInfo.projectInfo')
            ->find(auth()->id())->attendInfo;

        foreach ($joinableProjects as $joinableProject) {
            $projects[] = $joinableProject->projectInfo->toArray();
        }
// da($projects[0]);
        return view('mypage', [
            'language' => $languageNames,
            'framework' => $frameworkNames,
            'tool' => $toolNames,
            'working_style' => $workingStyles,
            'projects' => $projects,
        ]);
    }
}
