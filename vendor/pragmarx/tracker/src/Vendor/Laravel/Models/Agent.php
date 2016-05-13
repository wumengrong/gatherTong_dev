<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Agent extends Base {

	protected $table = 'tracker_agents';
	public $connection='tracker';
	protected $fillable = array('name',
								'browser',
								'browser_version');

}
