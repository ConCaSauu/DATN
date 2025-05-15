<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = ['uid','total_money','coin','created_at'];
    public function user(){
        $this->belongsTo(User::class,'uid','id');
    }
}
