<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model {
    protected $table = "posts";
    public $fillable = ['title','topic_id','content','description_short'];
    public function User() {
        return $this->belongsTo(User::class,'author_id','id');
    }
    public function Topic() {
        return $this->belongsTo(Topic::class,'topic_id','id');
    }
}
?>