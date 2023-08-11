<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class LessonVideo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\LessonVideo::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * Hide from sidebar navigator
     *
     * @var bool
     */
    public static $displayInNavigation = false;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make('id'),

            BelongsTo::make('Lesson', 'lesson', Lesson::class)
                ->showOnPreview()
                ->withoutTrashed()
                ->readonly(fn (NovaRequest $request) => $request->isUpdateOrUpdateAttachedRequest()),

            Text::make('Video URL', 'video_url')
                ->showOnPreview()
                ->hideFromIndex(),

            Text::make('Poster Image', 'poster')
        ];
    }
}
