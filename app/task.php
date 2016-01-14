<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class task extends Model {

    use SoftDeletes;

    protected $table ='tasks';
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

    public function subtask()
    {

        return $this->hasMany('App\subTask');
    }



}
