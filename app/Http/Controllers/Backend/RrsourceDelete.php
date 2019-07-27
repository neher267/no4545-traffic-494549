<?php

namespace App\Http\Controllers\Backend;

trait RrsourceDelete{
	public function delete(...$files)
	{
		foreach ($files as $file) {
			if (!empty($file) && file_exists($file)) { 
	            unlink($file);
	        }
		}
	}
}