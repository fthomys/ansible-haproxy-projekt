<?php
header('Content-Type: text/plain');
echo "Host: ".gethostname()."\n";
echo "Date: ".date('c')."\n";
echo "PHP: ".PHP_VERSION."\n";
echo "OS: ".php_uname()."\n";
echo "Server IPs:\n";
foreach (gethostbynamel(gethostname()) ?: [] as $ip) {
  echo "  - $ip\n";
}
