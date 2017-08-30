<?php
require_once __DIR__ . '/vendor/autoload.php';
Stormpath\Client::$apiKeyFileLocation = 'apiKey.properties';
$client = Stormpath\Client::getInstance();

$application = Stormpath\Resource\Application::get('https://api.stormpath.com/v1/applications/3KvBiWKFW6qUmZtZ4VMhL8');

$account = \Stormpath\Resource\Account::instantiate([
    'givenName' => 'Joel',
    'surname' => 'Stormtrooperskar',
    'username' => 'tklrt421',
    'email' => 'tklrt421@stormpath.com',
    'password' => 'Changeme1'
]);

$customData = $account->customData;
$customData->favoriteColor = 'white';

$account = $application->createAccount($account);
?>