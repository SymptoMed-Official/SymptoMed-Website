<?php
$output = shell_exec('git pull origin master');
echo "status: <pre>$output</pre>";
?>