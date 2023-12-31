<?php
/**
 * WebhookType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fuse
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FuseClient\Model;
use \FuseClient\ObjectSerializer;

/**
 * WebhookType Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookType
{
    /**
     * Possible values of this enum
     */
    public const FINANCIAL_CONNECTION_SYNC_DATA = 'financial_connection.sync_data';

    public const FINANCIAL_CONNECTION_DISCONNECTED = 'financial_connection.disconnected';

    public const FINANCIAL_CONNECTION_FINISHED = 'financial_connection.finished';

    public const TRANSACTIONS_UPDATES = 'transactions.updates';

    public const ASSETS_REPORT_READY = 'assets.report_ready';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FINANCIAL_CONNECTION_SYNC_DATA,
            self::FINANCIAL_CONNECTION_DISCONNECTED,
            self::FINANCIAL_CONNECTION_FINISHED,
            self::TRANSACTIONS_UPDATES,
            self::ASSETS_REPORT_READY
        ];
    }
}


