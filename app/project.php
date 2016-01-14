<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingScope;
Project::all();

class project extends Model {

	//



    use SoftDeletes;

    protected $table ='projects';
    protected $dates=['deleted_at'];
    protected $fillable = [
    'name',
    'slug',
    'desc',
    'duedate',
    'completed'
        ];

    public function setDuedateAttribute($date)
    {
       $this->attributes['duedate']=Carbon::parse($date);

    }

    public function user(){

        return $this->belongsTo('App\user');

    }
    public function tasks()
    {

        return $this->hasMany('App\Task');
    }
//
    public function subtasks()
    {
        return $this->hasManyThrough('App\subtask','App\task');
    }

}
