<?php
/**
 * WebhookSource
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
 * WebhookSource Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookSource
{
    /**
     * Possible values of this enum
     */
    public const PLAID = 'plaid';

    public const TELLER = 'teller';

    public const MX = 'mx';

    public const FUSE = 'fuse';

    public const SNAPTRADE = 'snaptrade';

    public const MONO = 'mono';

    public const TRUELAYER = 'truelayer';

    public const FINVERSE = 'finverse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLAID,
            self::TELLER,
            self::MX,
            self::FUSE,
            self::SNAPTRADE,
            self::MONO,
            self::TRUELAYER,
            self::FINVERSE
        ];
    }
}


