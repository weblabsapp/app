<?php

namespace App\Nova;

use App\Nova\Filters\ActiveFilter;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Account extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Account::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email'
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
                ->hideFromIndex()
                ->showOnPreview(),

            Gravatar::make()
                ->maxWidth(50)
                ->hideFromIndex()
                ->showOnPreview(),

            Text::make('Name')
                ->sortable()
                ->showOnPreview()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->showOnPreview()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:accounts,email')
                ->updateRules('unique:accounts,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', Rules\Password::defaults())
                ->updateRules('nullable', Rules\Password::defaults()),

            Boolean::make('Is Active', 'is_active')
                ->rules('boolean', Rule::in([1, 0])),

            Boolean::make('Is Admin', 'admin')
                ->onlyOnIndex()
                ->readonly(),

            $this->adminField()
        ];
    }

    /**
     * @return \Illuminate\Http\Resources\MergeValue|mixed
     */
    protected function adminField()
    {
        if ($this->resource instanceof \App\Models\Account && (!$this->resource->exists || $this->resource->is_active)) {
            return $this->merge([
                HasOne::make('Admin Section', 'admin', \App\Nova\Admin::class)
                    ->hideWhenUpdating(function ($request, $resource) {
                        $x = func_get_args();
                    })
            ]);
        }

        return $this->merge([]);
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
        return [];
    }
}
