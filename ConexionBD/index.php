<?php
/**
 * Created by PhpStorm.
 * User: mati
 * Date: 10/12/15
 * Time: 10:30 AM
 */
require './aws/aws-autoloader.php';


$sdk = new Aws\Sdk([
    'region'   => 'us-west-2',
    'version'  => 'latest',
    'endpoint' => 'http://localhost:8080'
]);

echo "Mati ves esto2?";

$dynamoDb = $sdk->createDynamoDb();

// Create an "errors" table
$dynamoDb->createTable(array(
    'TableName' => 'errors',
    'AttributeDefinitions' => array(
        array(
            'AttributeName' => 'id',
            'AttributeType' => 'N'
        ),
        array(
            'AttributeName' => 'time',
            'AttributeType' => 'N'
        )
    ),
    'KeySchema' => array(
        array(
            'AttributeName' => 'id',
            'KeyType'       => 'HASH'
        ),
        array(
            'AttributeName' => 'time',
            'KeyType'       => 'RANGE'
        )
    ),
    'ProvisionedThroughput' => array(
        'ReadCapacityUnits'  => 10,
        'WriteCapacityUnits' => 20
    )
));

$result = $dynamoDb->putItem(array(
    'TableName' => 'errors',
    'Item' => array(
        'id'      => array('N' => '1201'),
        'time'    => array('N' => '14:05:05'),
        'error'   => array('S' => 'Executive overflow'),
        'message' => array('S' => 'no vacant areas')
    )
));

$result = $dynamoDb->getItem(array(
    'ConsistentRead' => true,
    'TableName' => 'errors',
    'Key'       => array(
        'id'   => array('N' => '1201'),
        'time' => array('N' => '14:05:05')
    )
));

// Grab value from the result object like an array
echo $result['Item']['id']['N'] . "\n";
//> 1201
echo $result->getPath('Item/id/N') . "\n";
//> 1201
echo $result['Item']['error']['S'] . "\n";
//> Executive overflow
echo $result['Item']['message']['S'] . "\n";
//> no vacant areas


