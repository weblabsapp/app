<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ActivatableScope implements Scope
{
    /**
     * All extensions to be added to the builder.
     *
     * @var array
     */
    protected $extensions = ['WithInactive', 'OnlyActive', 'OnlyInactive', 'SetActive', 'SetInactive'];

    /**
     * @param Builder $builder
     * @param Model $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where($model->getQualifiedIsActiveColumn(), true);
    }

    /**
     * @param Builder $builder
     */
    public function extend(Builder $builder)
    {
        foreach ($this->extensions as $extension) {
            $this->{"add{$extension}"}($builder);
        }
    }

    /**
     * @param Builder $builder
     */
    public function addWithInactive(Builder $builder)
    {
        $builder->macro('withInactive', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }

    /**
     * @param Builder $builder
     */
    protected function addOnlyActive(Builder $builder)
    {
        $builder->macro('onlyActive', function (Builder $builder) {
            $model = $builder->getModel();

            $builder->withoutGlobalScope($this)->where(
                $model->getQualifiedIsActiveColumn(), true
            );

            return $builder;
        });
    }

    /**
     * @param Builder $builder
     */
    protected function addOnlyInactive(Builder $builder)
    {
        $builder->macro('onlyInactive', function (Builder $builder) {
            $model = $builder->getModel();

            $builder->withoutGlobalScope($this)->where(
                $model->getQualifiedIsActiveColumn(), false
            );

            return $builder;
        });
    }

    /**
     * @param Builder $builder
     */
    protected function addSetActive(Builder $builder)
    {
        $builder->macro('setActive', function (Builder $builder, $userType = null) {
            $builder->onlyInactive();

            return $builder->update([$builder->getModel()->getQualifiedIsActiveColumn() => true]);
        });
    }

    /**
     * @param Builder $builder
     */
    protected function addSetInactive(Builder $builder)
    {
        $builder->macro('setInactive', function (Builder $builder) {
            $builder->onlyActive();

            return $builder->update([$builder->getModel()->getQualifiedIsActiveColumn() => false]);
        });
    }
}