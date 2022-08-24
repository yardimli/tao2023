<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story_tag extends Model
{
    use HasFactory;

	public $timestamps = false;

	protected $fillable = ['story_id','tag_id'];
}
