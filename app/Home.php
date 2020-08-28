<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model {
	protected $fillable = ['SlideImage1', 'SlideImage2', 'SlideImage3', 'TestimonialImage1', 'TestimonialImage2', 'TestimonialImage3', 'TestimonialClient1', 'TestimonialClient2', 'TestimonialClient3'];
	public function user() {
		return $this->belongsTo(User::class);
	}
}
