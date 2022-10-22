<?php

namespace App\Nova\Actions;

use App\Nova\Filters\ActiveFilter;
use App\Nova\Filters\LessonCourseFilter;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class GetLessonsAction extends Action
{
    public $name = 'View Lessons';

    public $withoutConfirmation = true;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        return Action::redirect(sprintf(
            '/resources/lessons?lessons_filter=%s',
            urlencode(base64_encode(json_encode([
                [LessonCourseFilter::class => $models->first()->id],
                [ActiveFilter::class => ['active' => true]]
            ])))
        ));
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [];
    }
}
