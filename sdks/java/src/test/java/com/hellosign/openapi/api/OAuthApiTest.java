/*
 * HelloSign API
 * HelloSign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package com.hellosign.openapi.api;

import com.hellosign.openapi.ApiClient;
import com.hellosign.openapi.ApiException;
import com.hellosign.openapi.TestHelper;
import com.hellosign.openapi.auth.*;
import com.hellosign.openapi.model.*;
import org.junit.Assert;
import org.junit.Test;

/**
 * API tests for OAuthApi
 */
public class OAuthApiTest {

    /**
     * OAuth Token Generate
     *
     * Once you have retrieved the code from the user callback, you will need to exchange it for an access token via a backend call.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void oauthTokenGenerateTest() throws Exception {
        OAuthTokenGenerateRequest request = TestHelper.getFixtureData(OAuthTokenGenerateRequest.class, "default");
        OAuthTokenResponse expected = TestHelper.getFixtureData(OAuthTokenResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        OAuthApi api = new OAuthApi(apiClient);
        OAuthTokenResponse actual = api.oauthTokenGenerate(request);
        Assert.assertEquals(expected, actual);
    }

    /**
     * OAuth Token Refresh
     *
     * Access tokens are only valid for a given period of time (typically one hour) for security reasons. Whenever acquiring an new access token its TTL is also given (see &#x60;expires_in&#x60;), along with a refresh token that can be used to acquire a new access token after the current one has expired.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void oauthTokenRefreshTest() throws Exception {
        OAuthTokenRefreshRequest request = TestHelper.getFixtureData(OAuthTokenRefreshRequest.class, "default");
        OAuthTokenResponse expected = TestHelper.getFixtureData(OAuthTokenResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        OAuthApi api = new OAuthApi(apiClient);
        OAuthTokenResponse actual = api.oauthTokenRefresh(request);
        Assert.assertEquals(expected, actual);
    }

}
