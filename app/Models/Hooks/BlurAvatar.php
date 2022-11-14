<?php

namespace App\Models\Hooks;


use Intervention\Image\Image;

class BlurAvatar
{
    /**
     * @param Image $image
     * @return void
     */
    public function handle($image)
    {
        $image->blur(80);
    }
}