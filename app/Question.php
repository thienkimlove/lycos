<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Question extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'question',
        'save_to'    => 'slug',
    );

	protected $fillable = ['question', 'answer', 'slug', 'answer_person', 'ask_person'];

}
