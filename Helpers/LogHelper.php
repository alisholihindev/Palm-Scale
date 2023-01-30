<?php 

namespace Helpers;

use App\Models\UserLog;
use Carbon\Carbon;

class LogHelper
{
	public function storeLog($type, $nomor, $menu)
	{
		$item 	= [
			'user_id' 		=> auth()->user()->id,
			'menu' 			=> $menu,
			'action' 		=> $this->typeFormatted($type),
			'log' 			=> $this->makeLogMessage($type , $nomor, $menu),
		];

		UserLog::create($item);

		return true;
	}

	public function makeLogMessage($type, $nomor, $menu)
	{
		$message 		= '<p>User <b>'.ucwords(auth()->user()->name).'</b> melakukan '.$this->typeFormatted($type);
		
		// LOGIN OR LOGOUT MESSAGE
		if ($type == 'login' || $type == 'logout') {
			$message .= $this->logInOrOutMessage();
			return $message;
		}
		// 

		$message 		.= $this->textMenuDanNomor($menu, $nomor);
		$message 		.= $this->textTanggal();

		return $message;
	}

	public function typeFormatted($type)
	{
		$str 	= '';
		switch ($type) {
			case 'add':
				$str 		= 'Penambahan';
				break;
			case 'edit':
				$str 		= 'Perubahan';
				break;
			case 'delete':
				$str 		= 'Penghapusan';
				break;
			case 'login':
				$str 		= 'Login';
				break;
			case 'logout':
				$str 		= 'Logout';
				break;
		}

		return $str;
	}

	public function logInOrOutMessage()
	{
		return $this->textTanggal();
	}

	public function textTanggal()
	{
		return ' pada tanggal <b>'.Carbon::now()->format('d F Y H:i:s').'</b> </p>';
	}

	public function textMenuDanNomor($menu, $nomor)
	{
		return ' data di menu <b>'.ucwords($menu).'</b> dan id/nomor <b>'.$nomor.'</b>';
	}
}