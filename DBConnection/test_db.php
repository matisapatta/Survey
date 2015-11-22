<?php
/**
 * Created by PhpStorm.
 * User: mati
 * Date: 10/22/15
 * Time: 8:24 PM
 */

require './aws/aws-autoloader.php';
/*
$sdk = new Aws\Sdk([
    'region'   => 'local',
    'version'  => 'latest',
    'endpoint' => 'http://localhost:8000',
    'accessKeyId' => '',
    'secretAccessKey' => ''

]);

echo 'hola';
$dynamodb = $sdk->createDynamoDb();
echo 'chau';
*/

use Aws\DynamoDb\DynamoDbClient;

$client = DynamoDbClient::factory(array(
    'profile' => 'default',
    'region'  => 'local'
));
?>


