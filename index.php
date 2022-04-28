<?php

require_once('app/Database.php');

$db = new Database();
$d = $db->db_dump("SELECT * FROM pegawai");
print_r($d);