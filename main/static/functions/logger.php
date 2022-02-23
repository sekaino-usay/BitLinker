<?php

function logging($path = NULL)
{
  if ($path == NULL) {
    $path = $_SERVER["REQUEST_URI"];
  }
  $logfile = fopen(__DIR__ . "/../../../data/access.log", "a");
  $addr = str_pad($_SERVER["REMOTE_ADDR"], 15);
  $refferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
  $reffererPrint = isset($refferer) ? " : $refferer" : "";
  $writeString = date("Y m d D H:i:s") . " : " . $addr . " : $path" . $reffererPrint . "\n";
  // echo $writeString;
  fwrite($logfile, $writeString);
}
