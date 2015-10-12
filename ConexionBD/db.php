<?php
/**
 * Created by PhpStorm.
 * User: mati
 * Date: 10/12/15
 * Time: 2:31 PM
 */

require './aws/aws-autoloader.php';

$sdk = new Aws\Sdk();


$dynamodb = $sdk->createDynamoDb([
    'profile' => 'default',
    'region'   => 'us-west-2',
    'version'  => 'latest',
    'endpoint' => 'http://localhost:8000'
]);

$tableName = 'ExampleTable';

echo "# Creating table $tableName...\n";

$result = $dynamodb->createTable([
    'TableName' => $tableName,
    'AttributeDefinitions' => [
        [ 'AttributeName' => 'Id', 'AttributeType' => 'N' ]
    ],
    'KeySchema' => [
        [ 'AttributeName' => 'Id', 'KeyType' => 'HASH' ]
    ],
    'ProvisionedThroughput' => [
        'ReadCapacityUnits'    => 5,
        'WriteCapacityUnits' => 6
    ]
]);

print_r($result->getPath('TableDescription'));
echo "HOLA";
