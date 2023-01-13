import * as HelloSign from "hellosign-sdk";

const apiAppApi = new HelloSign.ApiAppApi();

// Configure HTTP basic authorization: api_key
apiAppApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// apiAppApi.accessToken = "YOUR_ACCESS_TOKEN";

const page = 1;
const pageSize = 2;

const result = apiAppApi.apiAppList(page, pageSize);
result.then(response => {
  console.log(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
