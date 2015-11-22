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
    KeySchema: [ // The type of of schema.  Must start with a HASH type, with an optional second RANGE.
        { // Required HASH type attribute
            AttributeName: 'token',
            KeyType: 'HASH',

        },

    ],
    AttributeDefinitions: [ // The names and types of all primary and index key attributes only
        {
            AttributeName: 'token',
            AttributeType: 'N', // (S | N | B) for string, number, binary
        },


    ],
    ProvisionedThroughput: { // required provisioned throughput for the table
        ReadCapacityUnits: 10,
        WriteCapacityUnits: 10,
    },
};
dynamodb.createTable(params, function(err, data) {
    if (err) console.log(err); // an error occurred
    else console.log(data); // successful response
});