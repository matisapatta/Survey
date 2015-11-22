/**
 * Created by mati on 11/2/15.
 */
var program = require('commander');
var AWS = require('aws-sdk');
AWS.config.loadFromPath('../config.json');
var dynamodb = new AWS.DynamoDB();
var headers = [];

var params = {
    TableName: 'Survey1',
};
dynamodb.describeTable(params, function(err, data) {
    if (err) console.log(err); // an error occurred
    else console.log(data); // successful response
});