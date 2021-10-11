<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Topic extends Model {
    protected $table = "topics";
    public $timestamps = false;
    public $fillable = ['name','status'];
    public function User() {
        return $this->belongsTo(User::class,'owner_by','id');
    }
    public function StatusBnt() {
        return $this-> status == 1 ? 'checked' : '';
    }
}
?>