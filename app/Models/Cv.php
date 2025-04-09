<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cv extends Model
{
    use HasFactory;
    protected $fillable=['uid','avatar','name','position','goal','phone','nationality','email','address','skill','language','experience','education','references'];
    public function user(){
        $this->belongsTo(User::class,'uid','id');
    }
}
