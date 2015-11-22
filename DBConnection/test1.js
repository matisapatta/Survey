/**
 * Created by mati on 10/18/15.
 */
var params = {
    /*
     // optional (for pagination, returned as LastEvaluatedTableName)
     ExclusiveStartTableName: 'table_name',

     // optional (to further limit the number of table names returned per page)
     Limit: 1
     */
};

var program = require('commander');
var AWS = require('aws-sdk');
AWS.config.loadFromPath('./config.json');
var dynamodb = new AWS.DynamoDB();
var headers = [];

// Basic PutItem
var params = {
    TableName: 'table_name',
    Item: { // a map of attribute name to AttributeValue

        // attribute_name: attribute_value,
        // Note: attribute_value (string | number | boolean | null | Uint8Array | dynamodb.Set(array, S|N|B) | Array | Object)

        // primary keys are required
        token: 10,
       // range_key_attribute_name: 'range_attribute_value', // optional if table is hash-only

        resp1: 5,
        resp2: 3

    },
    ReturnValues: 'NONE', // optional (NONE | ALL_OLD)
    ReturnConsumedCapacity: 'NONE', // optional (NONE | TOTAL | INDEXES)
    ReturnItemCollectionMetrics: 'NONE', // optional (NONE | SIZE)
};

// See http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Expressions.SpecifyingConditions.html for more details on expression language
// Conditional Put - Put if doesn't already exist


// // Conditional Put - Expression Attribute Names and Values


dynamodb.putItem(params, function(err, data) {
    if (err) console.log(err); // an error occurred
    else console.log(data); // successful response
});