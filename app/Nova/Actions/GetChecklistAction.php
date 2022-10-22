<?php

namespace App\Nova\Actions;

use App\Nova\Filters\ActiveFilter;
use App\Nova\Filters\CourseTopicFilter;
use App\Nova\Filters\LessonChecklistFilter;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class GetChecklistAction extends Action
{
    public $name = 'View Checklist';

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
            '/resources/checklists?checklists_filter=%s',
            urlencode(base64_encode(json_encode([
                [LessonChecklistFilter::class => $models->first()->id],
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