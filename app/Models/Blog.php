<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $primaryKey = "ns_id";
    protected $fillable = ['page_name','headerdata','ns_title','ns_desc','ns_img','ns_delete','created_at'];
    protected $casts = [
        'headerdata' => 'json'
    ];
}
