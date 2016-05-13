<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

use Symfony\Component\Console\Application;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Base extends Eloquent {

	protected $hidden = ['config'];
	public $connection='tracker';
	private $config;

	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);

		$this->setConnection($this->getConfig()->get('connection'));
	}

	public function getConfig()
	{
		if ($this->config)
		{
			return $this->config;
		}
		elseif (isset($GLOBALS["app"]) && $GLOBALS["app"] instanceof Application)
		{
			return $GLOBALS["app"]["tracker.config"];
		}

		return app()->make('tracker.config');
	}

	public function setConfig($config)
	{
		$this->config = $config;
	}

	public function scopePeriod($query, $minutes, $alias = '')
	{
		$alias = $alias ? "$alias." : '';
		return $query
				->where($alias.'updated_at', '>=', $minutes->getStart()?$minutes->getStart():1)
				->where($alias.'updated_at', '<=', $minutes->getEnd()?$minutes->getEnd():1);
	}

}
