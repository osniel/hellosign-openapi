import com.hellosign.ApiClient;
import com.hellosign.ApiException;
import com.hellosign.Configuration;
import com.hellosign.api.*;
import com.hellosign.auth.HttpBasicAuth;
import com.hellosign.auth.HttpBearerAuth;
import com.hellosign.model.*;
import com.hellosign.model.ReportCreateRequest.ReportTypeEnum;

import java.util.Arrays;

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

        ReportApi reportApi = new ReportApi(apiClient);

        ReportCreateRequest data = new ReportCreateRequest()
            .startDate("09/01/2020")
            .endDate("09/01/2020")
            .reportType(Arrays.asList(ReportTypeEnum.USER_ACTIVITY, ReportTypeEnum.DOCUMENT_STATUS));

        try {
            ReportCreateResponse result = reportApi.reportCreate(data);
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
