import * as HelloSign from "hellosign-sdk";
import * as fs from 'fs';

const signatureRequestApi = new HelloSign.SignatureRequestApi();

// Configure HTTP basic authorization: api_key
signatureRequestApi.username = "YOUR_API_KEY";

// or, configure Bearer (JWT) authorization: oauth2
// signatureRequestApi.accessToken = "YOUR_ACCESS_TOKEN";

const signatureRequestId = "fa5c8a0b0f492d768749333ad6fcc214c111e967";
const fileType = "pdf";

const result = signatureRequestApi.signatureRequestFiles(signatureRequestId, fileType);

result.then(response => {
  fs.createWriteStream('file_response.pdf').write(response.body);
}).catch(error => {
  console.log("Exception when calling HelloSign API:");
  console.log(error.body);
});
