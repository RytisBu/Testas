<?php

namespace App\Classes;

use App\Traits;

class FormBuilder
{
	use Traits\Button;
	use Traits\Input;
	use Traits\Label;

	public function open(string $action, string $method = 'GET') : string
	{
		return "<form action=\"{$action}\" method=\"{$method}\">";
	}

	public function close() : string
	{
		return '</form>';
	}
}