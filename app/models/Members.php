<?php

class Members extends \Eloquent {
	protected $table = 'members';
	public $timestamps = false;
	public $primaryKey = 'MID';
}