<?php

namespace App\Nova\Filters;

use App\Models\Course;
use App\Models\Topic;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class LessonTopicFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $query->where('topic_id', $value);

        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $courses = Course::query()
            ->withInactive()
            ->get()
            ->pluck('id');

        return Topic::query()
            ->whereIn('course_id', $courses)
            ->onlyActive()
            ->orderBy('topic_order')
            ->get()
            ->pluck('id', 'title');
    }
}
