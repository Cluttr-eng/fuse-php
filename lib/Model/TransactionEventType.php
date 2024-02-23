<?php
/**
 * TransactionEventType
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
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FuseClient\Model;
use \FuseClient\ObjectSerializer;

/**
 * TransactionEventType Class Doc Comment
 *
 * @category Class
 * @description Type of the transaction, ie loan
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionEventType
{
    /**
     * Possible values of this enum
     */
    public const ACH = 'ach';

    public const ADJUSTMENT = 'adjustment';

    public const ATM = 'atm';

    public const BANK_CHARGE = 'bank_charge';

    public const BILL_PAYMENT = 'bill_payment';

    public const CARD_PAYMENT = 'card_payment';

    public const CASH = 'cash';

    public const CASHBACK = 'cashback';

    public const CHARGE = 'charge';

    public const CHEQUE = 'cheque';

    public const CREDIT = 'credit';

    public const DEBIT = 'debit';

    public const DEPOSIT = 'deposit';

    public const DIGITAL_PAYMENT = 'digital_payment';

    public const DIRECT_DEBIT = 'direct_debit';

    public const FEE = 'fee';

    public const IN_STORE = 'in_store';

    public const INTEREST = 'interest';

    public const ONLINE = 'online';

    public const OTHER = 'other';

    public const PAYMENT = 'payment';

    public const PURCHASE = 'purchase';

    public const STANDING_ORDER = 'standing_order';

    public const TRANSACTION = 'transaction';

    public const TRANSFER = 'transfer';

    public const WIRE = 'wire';

    public const WITHDRAWAL = 'withdrawal';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACH,
            self::ADJUSTMENT,
            self::ATM,
            self::BANK_CHARGE,
            self::BILL_PAYMENT,
            self::CARD_PAYMENT,
            self::CASH,
            self::CASHBACK,
            self::CHARGE,
            self::CHEQUE,
            self::CREDIT,
            self::DEBIT,
            self::DEPOSIT,
            self::DIGITAL_PAYMENT,
            self::DIRECT_DEBIT,
            self::FEE,
            self::IN_STORE,
            self::INTEREST,
            self::ONLINE,
            self::OTHER,
            self::PAYMENT,
            self::PURCHASE,
            self::STANDING_ORDER,
            self::TRANSACTION,
            self::TRANSFER,
            self::WIRE,
            self::WITHDRAWAL
        ];
    }
}


