<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Connection extends Base {

	protected $table = 'tracker_connections';
	public $connection='tracker';
	protected $fillable = array(
		'name',
	);

}
