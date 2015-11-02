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
AWS.config.loadFromPath('../config.json');
var dynamodb = new AWS.DynamoDB();
var headers = [];

// Basic PutItem
var params = {
    TableName: 'Survey',
    Item: { "token": {S:'11'}, "resp1": {S:'5'}, "resp2": {S:'2'} }
};


// See http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Expressions.SpecifyingConditions.html for more details on expression language
// Conditional Put - Put if doesn't already exist


// // Conditional Put - Expression Attribute Names and Values


dynamodb.putItem(params, function(err, data) {
    if (err) console.log(err); // an error occurred
    else console.log(data); // successful response
});