<?php
namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description','status','image'];

public function enquiry()
    {
        return $this->hasOne(Enquiry::class);
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