<?php
include('config.php');

$payload = file_get_contents('php://input');
if (empty($payload)) {
    die('No payload present');
} else {
    $useablepayload = json_decode($payload);
    $payloadbranch = $useablepayload->{'ref'};

    foreach ($repos as $repo) {
        if (strpos($payloadbranch, $repo['branchname']) !== false) {
            $cdcommand = 'cd '.$repo['path'].' && ';
        }
    }

    $commands = array(
        $cdcommand.'pwd',
        $cdcommand.GITPATH.' pull 2>&1',
        $cdcommand.GITPATH.' status 2>&1',
        $cdcommand.GITPATH.' submodule sync 2>&1',
        $cdcommand.GITPATH.' submodule update 2>&1',
        $cdcommand.GITPATH.' submodule status 2>&1',
        'find pwd -type d -exec chmod 755 {} \;',
        'find pwd -type f -exec chmod 644 {} \;',
    );

    foreach ($commands as $command) {
        echo shell_exec($command);
    }
}
