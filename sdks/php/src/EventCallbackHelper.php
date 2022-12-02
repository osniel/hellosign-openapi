<?php
/**
 * EventCallbackValidate
 *
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * Dropbox Sign API
 *
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HelloSignSDK;

/**
 * EventCallbackHelper Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */
abstract class EventCallbackHelper
{
    public const EVENT_TYPE_ACCOUNT_CALLBACK = 'account_callback';

    public const EVENT_TYPE_APP_CALLBACK = 'app_callback';

    /**
     * Verify that a callback came from HelloSign.com
     */
    public static function isValid(
        string $api_key,
        Model\EventCallbackRequest $event_callback
    ): bool {
        $event = $event_callback->getEvent();

        $hash = hash_hmac(
            'sha256',
            $event->getEventTime() . $event->getEventType(),
            $api_key
        );

        return $event->getEventHash() === $hash;
    }

    /**
     * Identifies the callback type, one of "account_callback" or "app_callback".
     * "app_callback" will always include a value for "reported_for_app_id"
     */
    public static function getCallbackType(
        Model\EventCallbackRequest $event_callback
    ): string {
        $metadata = $event_callback->getEvent()->getEventMetadata();

        if (empty($metadata->getReportedForAppId())) {
            return self::EVENT_TYPE_ACCOUNT_CALLBACK;
        }

        return self::EVENT_TYPE_APP_CALLBACK;
    }
}
