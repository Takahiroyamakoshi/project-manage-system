<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;

class KeyWordCollection extends Collection
{
    public function filterByGroupId(int $groupId): self
    {
        return $this->filter(function ($keyWord) use ($groupId) {
            return $keyWord->key_word_group_id === $groupId;
        });
    }
}