<?php
/**
 * Created by PhpStorm.
 * User: mati
 * Date: 10/12/15
 * Time: 2:31 PM
 */

require './aws/aws-autoloader.php';

echo "antes";

$client = new Aws\DynamoDb\DynamoDbClient([
    'region'  => 'us-west-2',
    'version' => 'latest',
    'endpoint' => 'http://localhost:8000'
]);

//$dynamoDb = $client->createDynamoDb();
echo "dsp";