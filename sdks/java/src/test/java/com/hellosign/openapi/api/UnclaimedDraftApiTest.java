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
 * API tests for UnclaimedDraftApi
 */
public class UnclaimedDraftApiTest {
    /**
     * Creates a new Draft that can be claimed using the claim URL.
     *
     * Creates a new Draft that can be claimed using the claim URL. The first authenticated user to access the URL will claim the Draft and will be shown either the \&quot;Sign and send\&quot; or the \&quot;Request signature\&quot; page with the Draft loaded. Subsequent access to the claim URL will result in a 404.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void unclaimedDraftCreateTest() throws Exception {
        UnclaimedDraftCreateRequest request = TestHelper.getFixtureData(UnclaimedDraftCreateRequest.class, "default");
        UnclaimedDraftCreateResponse expected = TestHelper.getFixtureData(UnclaimedDraftCreateResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        UnclaimedDraftApi api = new UnclaimedDraftApi(apiClient);
        UnclaimedDraftCreateResponse actual = api.unclaimedDraftCreate(request);
        Assert.assertEquals(expected, actual);
    }

    /**
     * Creates a new Draft that will be claimed for use in an embedded iFrame.
     *
     * Creates a new Draft that can be claimed and used in an embedded iFrame. The first authenticated user to access the URL will claim the Draft and will be shown the \&quot;Request signature\&quot; page with the Draft loaded. Subsequent access to the claim URL will result in a &#x60;404&#x60;. For this embedded endpoint the &#x60;requester_email_address&#x60; parameter is required.  **NOTE**: Embedded unclaimed drafts can only be accessed in embedded iFrames whereas normal drafts can be used and accessed on HelloSign.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void unclaimedDraftCreateEmbeddedTest() throws Exception {
        UnclaimedDraftCreateEmbeddedRequest request = TestHelper.getFixtureData(UnclaimedDraftCreateEmbeddedRequest.class, "default");
        UnclaimedDraftCreateResponse expected = TestHelper.getFixtureData(UnclaimedDraftCreateResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        UnclaimedDraftApi api = new UnclaimedDraftApi(apiClient);
        UnclaimedDraftCreateResponse actual = api.unclaimedDraftCreateEmbedded(request);
        Assert.assertEquals(expected, actual);
    }

    /**
     * Creates a new Draft using existing template(s) that will be claimed for use in an embedded iFrame.
     *
     * Creates a new Draft with a previously saved template(s) that can be claimed and used in an embedded iFrame. The first authenticated user to access the URL will claim the Draft and will be shown the \&quot;Request signature\&quot; page with the Draft loaded. Subsequent access to the claim URL will result in a &#x60;404&#x60;. For this embedded endpoint the &#x60;requester_email_address&#x60; parameter is required.  **NOTE**: Embedded unclaimed drafts can only be accessed in embedded iFrames whereas normal drafts can be used and accessed on HelloSign.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void unclaimedDraftCreateEmbeddedWithTemplateTest() throws Exception {
        UnclaimedDraftCreateEmbeddedWithTemplateRequest request = TestHelper.getFixtureData(UnclaimedDraftCreateEmbeddedWithTemplateRequest.class, "default");
        UnclaimedDraftCreateResponse expected = TestHelper.getFixtureData(UnclaimedDraftCreateResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        UnclaimedDraftApi api = new UnclaimedDraftApi(apiClient);
        UnclaimedDraftCreateResponse actual = api.unclaimedDraftCreateEmbeddedWithTemplate(request);
        Assert.assertEquals(expected, actual);
    }

    /**
     * Creates a new signature request from an embedded request that can be edited prior to being sent.
     *
     * Creates a new signature request from an embedded request that can be edited prior to being sent to the recipients. Parameter &#x60;test_mode&#x60; can be edited prior to request. Signers can be edited in embedded editor. Requester&#39;s email address will remain unchanged if &#x60;requester_email_address&#x60; parameter is not set.  **NOTE**: Embedded unclaimed drafts can only be accessed in embedded iFrames whereas normal drafts can be used and accessed on HelloSign.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void unclaimedDraftEditAndResendTest() throws Exception {
        String signatureRequestId = "2f9781e1a83jdja934d808c153c2e1d3df6f8f2f";

        UnclaimedDraftEditAndResendRequest request = TestHelper.getFixtureData(UnclaimedDraftEditAndResendRequest.class, "default");
        UnclaimedDraftCreateResponse expected = TestHelper.getFixtureData(UnclaimedDraftCreateResponse.class, "default");
        ApiClient apiClient = TestHelper.setUpMock(200, expected);
        UnclaimedDraftApi api = new UnclaimedDraftApi(apiClient);
        UnclaimedDraftCreateResponse actual = api.unclaimedDraftEditAndResend(signatureRequestId, request);
        Assert.assertEquals(expected, actual);
    }

}
