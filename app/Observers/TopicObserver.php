<?php

namespace App\Observers;

use App\Models\Topic;
use Illuminate\Support\Str;

class TopicObserver
{
    public static function creating(Topic $topic)
    {
        $topic->slug = Str::slug($topic->title);
    }
}
