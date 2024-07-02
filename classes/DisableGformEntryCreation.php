<?php

namespace App;

use GFAPI;

class DisableGformEntryCreation
{
	public function __construct()
	{
		add_action('gform_after_submission', array($this, 'delete_form_entry'));
	}

	public function delete_form_entry($entry)
	{
		GFAPI::delete_entry( $entry['id'] );
	}
}
