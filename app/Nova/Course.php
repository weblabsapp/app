<?php

namespace App\Nova;

use App\Nova\Actions\GetLessonsAction;
use App\Nova\Actions\GetTopicsAction;
use App\Nova\Filters\ActiveFilter;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

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
            ID::make()->sortable()
                ->hideFromIndex()
                ->showOnPreview(),

            Text::make('title')
                ->sortable()
                ->showOnPreview(),

            Text::make('tag')
                ->showOnPreview()
                ->readonly(),

            Text::make('language_version'),

            Text::make('description')
                ->readonly()
                ->onlyOnDetail()
                ->showOnPreview()
                ->asHtml(),

            NovaTinyMCE::make('description')
                ->options([
                    'menubar' => false,
                    'content_css' => [
                        asset('css/blockquotes.min.css')
                    ],
                    'plugins' => ['lists', 'preview', 'wordcount', 'directionality', 'link'],
                    'toolbar' => 'undo redo | blockquote | link | bold italic forecolor | preview | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
                    'height' => '200'
                ])
            ->onlyOnForms(),

            Number::make('Lessons Count', function (\App\Models\Course $resource) {
                return $resource->lessons()->count();
            }),

            Number::make('Enrollments', function (\App\Models\Course $resource) {
                return $resource->enrollments()->count();
            }),

            Boolean::make('Is Active', 'is_active')
                ->rules('boolean', Rule::in([1, 0])),

            Image::make('logo')
                ->maxWidth(100)
                ->showOnPreview(),
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
        return [
            (new GetLessonsAction())
                ->onlyInline()
                ->showOnDetail(),

            (new GetTopicsAction())
                ->onlyInline()
                ->showOnDetail()
        ];
    }
}
