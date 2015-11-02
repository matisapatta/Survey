/**
 * Created by mati on 11/2/15.
 */
var program = require('commander');
var AWS = require('aws-sdk');
AWS.config.loadFromPath('../config.json');
var dynamodb = new AWS.DynamoDB();
var headers = [];
var params = {
    /*
     // optional (for pagination, returned as LastEvaluatedTableName)
     ExclusiveStartTableName: 'table_name',

     // optional (to further limit the number of table names returned per page)
     Limit: 1
     */
};
dynamodb.listTables(params, function(err, data) {
    if (err) console.log(err, err.stack); // an error occurred
    else     console.log(data);           // successful response
});