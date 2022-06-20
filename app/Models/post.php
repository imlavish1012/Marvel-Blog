<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{

  protected $fillable = ['title','slug','description','image_path','user_id'];
    use HasFactory;
    use sluggable;
    public function user()
    {
      return $this->belongsTo(user::class);
    }
    public function sluggable(): array
    {
      return [
        'slug'=>[
          'source'=>'title'
        ]
      ];
    }
}
