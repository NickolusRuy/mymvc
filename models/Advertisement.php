<?php
include_once ROOT.'/models/Storage.php';

class Advertisement
{


	public static function getAdsList()
	{
			//link from storage
			return Storage::getAdList();
	}
}
