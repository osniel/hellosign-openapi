import * as HelloSign from "hellosign-sdk";

const embeddedApi = new HelloSign.EmbeddedApi();

// Configure HTTP basic authorization: api_key
embeddedApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// embeddedApi.accessToken = "YOUR_ACCESS_TOKEN";

const data: HelloSign.EmbeddedEditUrlRequest = {
  ccRoles: [""],
  mergeFields: [],
};

const templateId = "5de8179668f2033afac48da1868d0093bf133266";

const result = embeddedApi.embeddedEditUrl(templateId, data);
result.then(response => {
  console.log(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
