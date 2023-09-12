<?php
/**
 * Aggregator
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
 * Aggregator Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Aggregator
{
    /**
     * Possible values of this enum
     */
    public const AKOYA = 'akoya';

    public const BASIQ = 'basiq';

    public const BELVO = 'belvo';

    public const FINICITY = 'finicity';

    public const FINVERSE = 'finverse';

    public const FLINKS = 'flinks';

    public const MONO = 'mono';

    public const MX = 'mx';

    public const PLAID = 'plaid';

    public const SALTEDGE = 'saltedge';

    public const SNAPTRADE = 'snaptrade';

    public const TELLER = 'teller';

    public const TRUELAYER = 'truelayer';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AKOYA,
            self::BASIQ,
            self::BELVO,
            self::FINICITY,
            self::FINVERSE,
            self::FLINKS,
            self::MONO,
            self::MX,
            self::PLAID,
            self::SALTEDGE,
            self::SNAPTRADE,
            self::TELLER,
            self::TRUELAYER
        ];
    }
}


