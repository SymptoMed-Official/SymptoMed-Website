<?php
$output = shell_exec('git pull origin master');
// $view_landing = shell_exec('cd app/Views/themes/modern/landing-page/ && git pull');
// $public_landing = shell_exec('cd public/landing-page/ && git pull');
echo "  <b>Status GIT PULL</b>
<pre>
    SymptoMed-Website: $output
</pre>";
?>