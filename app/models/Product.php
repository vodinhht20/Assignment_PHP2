<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $table = "products";
    public $fillable = ['name','price','discount','description','category_id'];
    public $timestamps = false;
    public function category () {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
?>