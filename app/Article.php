<?php

namespace App;

use App\ArticleComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    public function comments(): HasMany
    {
        return $this->hasMany(ArticleComment::class);
    }
}
