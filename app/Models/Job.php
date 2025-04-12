<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['cid','ucid','name','description','exd_date','salary_min','salary_max','status'];

    public function category()
    {
        return $this->belongsTo(Category::class,'cid','id');
    }

}
