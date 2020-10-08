<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Telnet\TelnetClient;

$client = new TelnetClient('127.0.0.1', 23);
$client->disconnect();
echo "Done\n";
