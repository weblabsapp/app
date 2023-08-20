<?php

namespace App\Nova;

use App\Nova\Actions\GetChecklistAction;
use App\Nova\Filters\ActiveFilter;
use App\Nova\Filters\LessonCourseFilter;
use App\Nova\Filters\LessonTopicFilter;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

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
    public static $displayInNavigation = true;

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
                ->showOnPreview()
                ->displayUsing(function($title) {
                    return strlen($title) > 30
                        ? strip_tags(substr($title, 0, 50)) . '...'
                        : $title;
                }),

            Text::make('Tag', 'tag')
                ->showOnPreview()
                ->hideFromIndex()
                ->readonly(),

            BelongsTo::make('Course', 'course', Course::class)
                ->showOnPreview()
                ->withoutTrashed()
                ->readonly(fn (NovaRequest $request) => $request->isUpdateOrUpdateAttachedRequest()),

            BelongsTo::make('Topic', 'topic', Topic::class)
                ->dontReorderAssociatables()
                ->showOnPreview()
                ->withoutTrashed(),

            Number::make('Order', 'lesson_order')
                ->rules('required', 'integer', 'min:1')
                ->sortable()
                ->showOnIndex(),

            Boolean::make('Is Active', 'is_active'),

            NovaTinyMCE::make('Explore content', 'explore_content')
                ->options([
                    'menubar' => false,
                    'content_css' => [
                        asset('css/blockquotes.min.css')
                    ],
                    'plugins' => ['lists', 'preview', 'wordcount', 'directionality', 'link', 'codesample', 'table', 'code'],
                    'toolbar' => 'undo redo | blockquote link | bold italic forecolor | codesample | preview | table tabledelete | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
                ])->onlyOnForms(),

            NovaTinyMCE::make('Full content', 'full_content')
                ->options([
                    'menubar' => false,
                    'plugins' => ['lists', 'preview', 'wordcount', 'directionality', 'link', 'codesample', 'table', 'code'],
                    'toolbar' => 'undo redo | blockquote link | bold italic forecolor | codesample | preview | table tabledelete | backcolor alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
                ])->onlyOnForms(),

            Textarea::make('Starting Code', 'first_code')
                ->onlyOnForms(),

            Flexible::make('Command Options', 'command_options')
                ->addLayout('Option', 'option', [
                    Text::make('Label', 'label'),
                    Text::make('Key', 'key')->rules('required'),
                    Select::make('Type', 'type')
                        ->options([
                            'bool' => 'Boolean',
                            'text' => 'Text',
                            'select' => 'Dropdown'
                        ])->rules('required'),
                    Text::make('Value', 'value')
                ])->button('Add Option'),

            Textarea::make('macros'),

            HasOne::make('Tutorial Video', 'video', LessonVideo::class),

            HasMany::make('Checklist Summary', 'checklist', Checklist::class)
                ->showOnDetail(),

            HasMany::make('AI Questions', 'AIQuestion', LessonAiQuestion::class)

        ];
    }

    /**
     * Manipulate topics relation query
     *
     * @param NovaRequest $request
     * @param Builder $query
     * @return Builder
     */
    public static function relatableTopics(NovaRequest $request, Builder $query)
    {
        return $query->reorder('topic_order');
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
            new LessonCourseFilter(),
            new LessonTopicFilter(),
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
            (new GetChecklistAction())
                ->onlyInline()
                ->showOnDetail(),
        ];
    }
}
