import * as HelloSign from "hellosign-sdk";

const fs = require('fs');

const apiAppApi = new HelloSign.ApiAppApi();

// Configure HTTP basic authorization: api_key
apiAppApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// apiAppApi.accessToken = "YOUR_ACCESS_TOKEN";

const oauth: HelloSign.SubOAuth = {
  callbackUrl: "https://example.com/oauth",
  scopes: [
    HelloSign.SubOAuth.ScopesEnum.BasicAccountInfo,
    HelloSign.SubOAuth.ScopesEnum.RequestSignature,
  ],
};

const whiteLabelingOptions: HelloSign.SubWhiteLabelingOptions = {
  primaryButtonColor: "#00b3e6",
  primaryButtonTextColor: "#ffffff",
};

const data: HelloSign.ApiAppCreateRequest = {
  name: "My Production App",
  domains: ["example.com"],
  customLogoFile: fs.createReadStream("CustomLogoFile.png"),
  oauth,
  whiteLabelingOptions,
};

const result = apiAppApi.apiAppCreate(data);
result.then(response => {
  console.log(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
