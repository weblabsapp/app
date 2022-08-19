<?php

namespace App\Models\Traits;


use App\Models\Scopes\ActivatableScope;

/**
 * @method withInactive()
 * @method onlyActive()
 * @method onlyInactive()
 * @method setActive()
 * @method setInactive()
 */
trait Activatable
{
    /**
     * Boot the banned users trait for a model.
     *
     * @return void
     */
    public static function bootActivatable()
    {
        static::addGlobalScope(new ActivatableScope());
    }

    /**
     * @return string
     */
    public function getIsActiveColumn()
    {
        return 'is_active';
    }

    /**
     * @return mixed
     */
    public function getQualifiedIsActiveColumn()
    {
        return $this->qualifyColumn($this->getIsActiveColumn());
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->{$this->getIsActiveColumn()};
    }
}