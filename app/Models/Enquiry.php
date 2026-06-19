<?php
namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
class Enquiry extends Model
{
    protected $fillable = ['name', 'mail', 'category_id','query','status'];

   public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }
    
    //  public function subcategories()
    // {
    //     return $this->hasMany(Post::class);
    // }

    // add any other methods you need
}