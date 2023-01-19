import com.dropbox.sign.ApiClient;
import com.dropbox.sign.ApiException;
import com.dropbox.sign.Configuration;
import com.dropbox.sign.api.*;
import com.dropbox.sign.auth.HttpBasicAuth;
import com.dropbox.sign.model.*;

import java.io.File;
import java.util.List;

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

        UnclaimedDraftApi unclaimedDraftApi = new UnclaimedDraftApi(apiClient);

        UnclaimedDraftCreateEmbeddedRequest data = new UnclaimedDraftCreateEmbeddedRequest()
            .clientId("ec64a202072370a737edf4a0eb7f4437")
            .addFilesItem(new File("example_signature_request.pdf"));
            .requesterEmailAddress("jack@dropboxsign.com")
            .testMode(true);

        try {
            UnclaimedDraftCreateResponse result = unclaimedDraftApi.unclaimedDraftCreateEmbedded(data);
            System.out.println(result);
        } catch (ApiException e) {
            System.err.println("Exception when calling AccountApi#accountCreate");
            System.err.println("Status code: " + e.getCode());
            System.err.println("Reason: " + e.getResponseBody());
            System.err.println("Response headers: " + e.getResponseHeaders());
            e.printStackTrace();
        }
    }
}
