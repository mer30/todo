<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subtask extends Model {


    use SoftDeletes;

    protected $table ='subtasks';
    protected $dates=['deleted_at'];
    protected $fillable=[
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

    public function project(){
        return $this->belongsTo('App\project');


    }

    public function task()
    {

        return $this->hasMany('App\Task');
    }
}
