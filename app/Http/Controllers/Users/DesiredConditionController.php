<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DesiredConditionController extends Controller
{
    const LANGUAGE_ID = 1;
    const FRAMEWORK_ID = 2;
    const TOOL_ID = 3;
    const WORKING_STYLE_ID = 4;

    public function show()
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

        return view('edit_desired_condition', [
            'id' => $user->id,
            'language' => $languageNames,
            'framework' => $frameworkNames,
            'tool' => $toolNames,
            'working_style' => $workingStyles,
        ]);
    }

    public function edit()
    {
    }
}
