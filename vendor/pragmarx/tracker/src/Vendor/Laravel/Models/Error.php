<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Error extends Base {

	protected $table = 'tracker_errors';
	public $connection='tracker';
	protected $fillable = array(
		'message',
		'code',
	);

}
