<?php		
require_once '../restler/restler.php';
require_once 'callsql.php';


$r = new Restler();
$r->setSupportedFormats('JsonFormat', 'XmlFormat');
$r->addAPIClass('callsql');
$r->handle();


