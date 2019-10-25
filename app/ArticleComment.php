<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleComment extends Model
{
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
