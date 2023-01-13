<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSign\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$unclaimedDraftApi = new HelloSign\Api\UnclaimedDraftApi($config);

$data = new HelloSign\Model\UnclaimedDraftEditAndResendRequest();
$data->setClientId("ec64a202072370a737edf4a0eb7f4437")
    ->setTestMode(true);

$signatureRequestId = "2f9781e1a83jdja934d808c153c2e1d3df6f8f2f";

try {
    $result = $unclaimedDraftApi->unclaimedDraftEditAndResend($signatureRequestId, $data);
    print_r($result);
} catch (HelloSign\ApiException $e) {
    $error = $e->getResponseObject();
    echo "Exception when calling HelloSign API: "
        . print_r($error->getError());
}
