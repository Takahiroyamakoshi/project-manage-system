<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\KeyWord;
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

        // 言語の選択候補項目
        $languageKeyWords = KeyWord::where('key_word_group_id', self::LANGUAGE_ID)
            ->get()
            ->toArray();

        $frameworkKeyWords = KeyWord::where('key_word_group_id', self::FRAMEWORK_ID)
            ->get()
            ->toArray();

        $toolKeyWords = KeyWord::where('key_word_group_id', self::TOOL_ID)
            ->get()
            ->toArray();

        $workingStyleKeyWords = KeyWord::where('key_word_group_id', self::WORKING_STYLE_ID)
            ->get()
            ->toArray();

        $languageCandidates = $this->creatingSelectionKeyWord($languageNames, $languageKeyWords);
        $frameworkCandidates = $this->creatingSelectionKeyWord($frameworkNames, $frameworkKeyWords);
        $toolCandidates = $this->creatingSelectionKeyWord($toolNames, $toolKeyWords);
        $workingStyleCandidates = $this->creatingSelectionKeyWord($workingStyles, $workingStyleKeyWords);

        return view('edit_desired_condition', [
            'id' => $user->id,
            'language' => $languageNames,
            'framework' => $frameworkNames,
            'tool' => $toolNames,
            'working_style' => $workingStyles,
            'languageCandidates' => $languageCandidates,
            'frameworkCandidates' => $frameworkCandidates,
            'toolCandidates' => $toolCandidates,
            'workingStyleCandidates' => $workingStyleCandidates,
        ]);
    }

    /**
     * 希望条件更新画面で既に選択された希望条件項目を排除する
     * @param $desiredKeyWord
     * @param $candidate
     * @return $result
     */
    public function creatingSelectionKeyWord(string $desiredKeyWord, array $candidate): array
    {
        $excludedValues = explode(",", $desiredKeyWord);
        $filteredKeywords = array_filter($candidate, function ($keyword) use ($excludedValues) {
            return !in_array($keyword["name"], $excludedValues);
        });

        $result = array_values($filteredKeywords);
        return $result;
    }

    public function update(Request $request)
    {
        foreach ($selectedLanguageIds as $languageId) {
            // 各言語IDに対する更新処理を行う
            // ...
        }
}
