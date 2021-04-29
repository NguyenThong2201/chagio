<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	//
	protected $table = 'products';
	protected $fillable = [
		'title',
		'category_id',
		'image',
		'summary',
		'contents',
		'completed',
		'status',
		'created_by',
		'updated_by'
	];

	public function getUser()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

}
