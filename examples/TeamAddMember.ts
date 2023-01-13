import * as HelloSign from "hellosign-sdk";

const teamApi = new HelloSign.TeamApi();

// Configure HTTP basic authorization: api_key
teamApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// teamApi.accessToken = "YOUR_ACCESS_TOKEN";

const data: HelloSign.TeamAddMemberRequest = {
  emailAddress: "george@example.com",
};

const result = teamApi.teamAddMember(data);
result.then(response => {
  console.log(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
