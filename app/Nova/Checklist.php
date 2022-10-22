<?php

namespace App\Nova;

use App\Nova\Filters\LessonChecklistFilter;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Checklist extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\LessonCompletenessChecklist::class;

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
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'text', 'lesson_id'
    ];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()
            ->sortable()
            ->showOnPreview(),

            BelongsTo::make('lesson')
                ->readonly(function (NovaRequest $request) {
                    return $request->isUpdateOrUpdateAttachedRequest();
                })
                ->withoutTrashed(),

            NovaTinyMCE::make('Checklist Text', 'text')->options([
                    'menubar' => false,
                    'plugins' => ['wordcount', 'directionality', 'link', 'codesample'],
                    'toolbar' => 'undo redo | link | bold italic forecolor | codesample | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
                    'height' => '200',
                ])
                ->showOnIndex()
                ->showOnPreview()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param NovaRequest $request
     * @return LessonChecklistFilter[]
     */
    public function filters(NovaRequest $request)
    {
        return [
            new LessonChecklistFilter()
        ];
    }

    /**
     * Sort them by id
     *
     * @param NovaRequest $request
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->reorder('id');
    }
}