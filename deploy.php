<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'cicd');

// Project repository
set('repository', 'git@github.com:paul-nallet/cicd-test.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);


// Shared files/dirs between deploys
add('shared_files', [
    '.env',
]);
add('shared_dirs', [
    "storage",
]);

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

// Hosts
host('167.172.52.79')
    ->user('deployer')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '~/{{application}}');


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
