<?php

//Don't worry about this bit
ini_set('display_errors', 1);

include './src/HTTP/Client.php';
include './src/Twitter/Client.php';

var_dump(new HTTP\Client);
var_dump(new Twitter\Client);
