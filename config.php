<?php
// Define absolute path to git, differentiates per hoster
define('GITPATH', '/usr/local/cpanel/3rdparty/bin/git');

$repos = array(
    // Add a new repo branchname = GitHub branchname & path = abolute or relative path to repo on server
    array('branchname' => 'dev', 'path' => 'dev'),
    array('branchname' => 'master', 'path' => 'words'),
);
