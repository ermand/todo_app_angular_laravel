<?php

class Todo extends \Eloquent {

	protected $fillable = ['title', 'completed'];

    /**
     * Get completed attribute as boolean.
     *
     * @param $value
     * @return bool
     */
    public function getCompletedAttribute($value)
    {
        return (boolean) $value;
    }
}