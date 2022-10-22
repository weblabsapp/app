<?php

namespace App\Nova\Filters;

use Laravel\Nova\Filters\BooleanFilter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ActiveFilter extends BooleanFilter
{
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
        if (!is_array($value)) {
            $value = [];
        }

        $value = array_filter($value, function ($value) {
            return $value !== false;
        });

        if (isset($value['active'], $value['inactive']) || isset($value['inactive'])) {
            return $query->withInactive();
        } elseif (isset($value['active'])) {
            return $query->onlyActive();
        } else {
            return $query->withInactive();
        }
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        return [
            'Active' => 'active',
            'Inactive' => 'inactive'
        ];
    }
}
