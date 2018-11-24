<?php

class dbconf_fcc{
	public $hostname;
	public $username;
	public $password;
	public $database;

	public function __save_log_fcc($log,$isi)
	{
		$fp = fopen($log,'a');
		fwrite($fp,$isi);
		fclose($fp);
		echo "[+] ERROR DETECTED ! Please Check Log File : <b>".$log."</b> ";
	}
	public function __connect_db_fcc($h,$u,$p,$d)
	{
		if(function_exists('mysql_connect'))
		{
			$db = mysql_connect($h,$u,$p);
			$db.= mysql_select_db($d);
		}elseif(function_exists('mysqli_connect'))
		{
			$db = mysqli_connect($h,$u,$p,$d);
		}else{
			$db = "[".date('d m Y - H:i:s')."] Can't Connect ! function connect to db not exists ! \n";
			$this->__save_log_fcc("log_db.txt",$db);
		}
		return $db;
	}
	public function __query_db_fcc($k,$q)
	{
		if(function_exists('mysql_query'))
		{
			$q = mysql_query($q);
		}elseif(function_exists('mysqli_query'))
		{
			$q = mysqli_query($k,$q);
		}else{
			$q = "[".date('d m Y - H:i:s')."] Query can't Executed !  Contact :ADMIN \n ";
			$this->__save_log_fcc("log_db.txt",$q);
		}
		return $q;
	}
	public function __fetch_db_fcc($q)
	{
		if(function_exists('mysql_fetch_array'))
		{
			$f = mysql_fetch_array($q);
		}elseif(function_exists('mysqli_fetch_array'))
		{
			$f = mysqli_fetch_array($q);
		}else{
			$f = "[".date('d m Y - H:i:s')."] Can't fetch Array :( \n";
			$this->__save_log_fcc("log_db.txt",$f);
		}
		return $f;
	}
}
class html_fcc{
	public function __table_fcc($konten)
	{
		$tbl = "<table>";
		$tbl.= $konten;
		$tbl.= "</table>";
		return $tbl;
	}
	public function __th_fcc($t)
	{
		$th = "<th>";
		$th.= $t;
		$th.= "</th>";
		return $th;
	}
	public function __tr_fcc($td)
	{
		$tr = "<tr>";
		$tr.= $td;
		$tr.= "</tr>";
		return $tr;
	}
	public function __td_fcc($t)
	{
		$td = "<td>";
		$td.= $t;
		$td.= "</td>";
		return $td;
	}
}
function __fcc_priv8_string(){
	$generate = md5(sha1(base64_decode("ZGF0ZSgnZG1ZJyk7Cg==")));
	return $generate;
}