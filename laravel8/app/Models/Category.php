<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//
	protected $table = 'category';
	protected $fillable = [
		'title',
		'completed',
		'created_by',
		'updated_by'
	];

	public function getUser()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

}
