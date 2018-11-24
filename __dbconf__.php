<?php
include '__function__.php';

$dbconf = new dbconf_fcc();
$html   = new html_fcc();

$dbconf->hostname = "localhost";
$dbconf->username = "root";
$dbconf->password = "";
$dbconf->database = "crud_alinko";

$acon = $dbconf->__connect_db_fcc($dbconf->hostname,
								$dbconf->username,
								$dbconf->password,
								$dbconf->database);

if(!$acon)
								{
									$fail= "[".date('d M Y - H:i:s')."] database not connected !,Please Configure __dbconf__.php \n";
									$dbconf->__save_log_fcc("log_db.txt",$fail);
								}