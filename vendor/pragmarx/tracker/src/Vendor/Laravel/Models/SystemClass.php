<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SystemClass extends Base {

	protected $table = 'tracker_system_classes';
	public $connection='tracker';
	protected $fillable = array(
		'name',
	);

}
