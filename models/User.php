<?php

include_once ROOT.'/models/Storage.php';
class User
{
	public static function getUserList()
	{
			//link from storage
			return Storage::getUserList();
	}
}
