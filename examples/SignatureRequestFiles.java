import com.hellosign.ApiClient;
import com.hellosign.ApiException;
import com.hellosign.Configuration;
import com.hellosign.api.*;
import com.hellosign.auth.HttpBasicAuth;
import com.hellosign.auth.HttpBearerAuth;
import com.hellosign.model.*;

import java.io.File;

public class Example {
    public static void main(String[] args) {
        ApiClient apiClient = Configuration.getDefaultApiClient();

        // Configure HTTP basic authorization: api_key
        HttpBasicAuth apiKey = (HttpBasicAuth) apiClient
            .getAuthentication("api_key");
        apiKey.setUsername("YOUR_API_KEY");

        // or, configure Bearer (JWT) authorization: oauth2
        /*
        HttpBearerAuth oauth2 = (HttpBearerAuth) apiClient
            .getAuthentication("oauth2");

        oauth2.setBearerToken("YOUR_ACCESS_TOKEN");
        */

        SignatureRequestApi signatureRequestApi = new SignatureRequestApi(apiClient);

        String signatureRequestId = "fa5c8a0b0f492d768749333ad6fcc214c111e967";

        try {
            File result = signatureRequestApi.signatureRequestFiles(signatureRequestId, "pdf");
            result.renameTo(new File("file_response.pdf"));
        } catch (ApiException e) {
            System.err.println("Exception when calling AccountApi#accountCreate");
            System.err.println("Status code: " + e.getCode());
            System.err.println("Reason: " + e.getResponseBody());
            System.err.println("Response headers: " + e.getResponseHeaders());
            e.printStackTrace();
        }
    }
}
