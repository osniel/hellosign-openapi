package com.hellosign.api;

import com.hellosign.ApiClient;
import com.hellosign.TestHelper;
import com.hellosign.model.*;
import org.junit.Assert;
import org.junit.Test;

public class OAuthApiTest {
    @Test
    public void oauthTokenGenerateTest() throws Exception {
        OAuthTokenGenerateRequest request = TestHelper.getFixtureData(
            OAuthTokenGenerateRequest.class,
            "default"
        );
        OAuthTokenResponse expected = TestHelper.getFixtureData(
            OAuthTokenResponse.class,
            "default"
        );
        ApiClient apiClient = TestHelper.setUpMock(200, expected);

        OAuthApi api = new OAuthApi(apiClient);
        OAuthTokenResponse actual = api.oauthTokenGenerate(request);
        Assert.assertEquals(expected, actual);
    }

    @Test
    public void oauthTokenRefreshTest() throws Exception {
        OAuthTokenRefreshRequest request = TestHelper.getFixtureData(
            OAuthTokenRefreshRequest.class,
            "default"
        );
        OAuthTokenResponse expected = TestHelper.getFixtureData(
            OAuthTokenResponse.class,
            "default"
        );
        ApiClient apiClient = TestHelper.setUpMock(200, expected);

        OAuthApi api = new OAuthApi(apiClient);
        OAuthTokenResponse actual = api.oauthTokenRefresh(request);
        Assert.assertEquals(expected, actual);
    }
}