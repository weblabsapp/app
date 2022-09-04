<?php

namespace App\Nova;

use App\Nova\Filters\ActiveFilter;
use App\Nova\Filters\LessonCourseFilter;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Lesson extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Lesson::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * Hide from sidebar navigator
     *
     * @var bool
     */
    public static $displayInNavigation = false;

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'tag'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()
                ->sortable()
                ->showOnPreview()
                ->hideFromIndex(),

            Text::make('Title', 'title')
                ->showOnPreview(),

            Text::make('Tag', 'tag')
                ->showOnPreview(),

            BelongsTo::make('Course', 'course', Course::class)
                ->showOnPreview()
                ->readonly(fn (NovaRequest $request) => $request->isUpdateOrUpdateAttachedRequest()),

            NovaTinyMCE::make('Explore content', 'explore_content')
                ->options([
                    'menubar' => false,
                    'content_css' => [
                        asset('css/blockquotes.min.css')
                    ],
                    'plugins' => ['lists', 'preview', 'wordcount', 'directionality', 'link', 'codesample', 'table', 'code'],
                    'toolbar' => 'undo redo | blockquote link | bold italic forecolor | codesample | preview | table tabledelete | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
                ]),

            NovaTinyMCE::make('Full content', 'full_content')
                ->options([
                    'menubar' => false,
                    'plugins' => ['lists', 'preview', 'wordcount', 'directionality', 'link', 'codesample', 'table', 'code'],
                    'toolbar' => 'undo redo | blockquote link | bold italic forecolor | codesample | preview | table tabledelete | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
                ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            (new LessonCourseFilter()),
            new ActiveFilter()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

//    protected static function initializeQuery(NovaRequest $request, $query, $search, $withTrashed)
//    {
//    }
}
