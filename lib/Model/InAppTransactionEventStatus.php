<?php
/**
 * InAppTransactionEventStatus
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
 * InAppTransactionEventStatus Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InAppTransactionEventStatus
{
    /**
     * Possible values of this enum
     */
    public const PENDING = 'pending';

    public const SUCCEEDED = 'succeeded';

    public const FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::SUCCEEDED,
            self::FAILED
        ];
    }
}


