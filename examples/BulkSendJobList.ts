import * as HelloSign from "hellosign-sdk";

const bulkSendJobApi = new HelloSign.BulkSendJobApi();

// Configure HTTP basic authorization: api_key
bulkSendJobApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// bulkSendJobApi.accessToken = "YOUR_ACCESS_TOKEN";

const page = 1;
const pageSize = 20;

const result = bulkSendJobApi.bulkSendJobList(page, pageSize);
result.then(response => {
  console.log(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
