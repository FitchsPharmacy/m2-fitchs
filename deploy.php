<?php
namespace Deployer;

require 'recipe/magento2.php';

// Config

set('repository', 'git@github.com:FitchsPharmacy/m2-fitchs.git');

set('static_deploy_options', '-f');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
localhost()->set('local', true);

host('fitchs.au')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/home/fitchs/public_html')
	->setLabels(['stage' => 'production', 'branch' => 'main']);
host('staging.fitchs.au')
	->set('port','9545')
	->set('http_user', 'stagingfitchs')
    ->set('http_group', 'php-stagingfitchs')
    ->set('remote_user', 'stagingfitchs')
    ->set('deploy_path', '/home/stagingfitchs/public_html')
    ->set('cachetool', '/var/run/stagingfitchs.sock')
	->setLabels(['stage' => 'staging', 'branch' => 'develop']);





// Hooks

after('deploy:failed', 'deploy:unlock');

