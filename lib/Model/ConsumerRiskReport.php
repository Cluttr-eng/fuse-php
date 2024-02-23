<?php
/**
 * ConsumerRiskReport
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

use \ArrayAccess;
use \FuseClient\ObjectSerializer;

/**
 * ConsumerRiskReport Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsumerRiskReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumerRiskReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'customization_id' => 'string',
        'spend_limit' => 'float',
        'current_spend' => 'float',
        'pending_payments_amount' => 'float',
        'iso_currency_code' => 'string',
        'last_updated' => 'string',
        'finance_score' => '\FuseClient\Model\FinanceScore',
        'predicted_balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'customization_id' => null,
        'spend_limit' => null,
        'current_spend' => null,
        'pending_payments_amount' => null,
        'iso_currency_code' => null,
        'last_updated' => null,
        'finance_score' => null,
        'predicted_balance' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'customization_id' => false,
        'spend_limit' => false,
        'current_spend' => false,
        'pending_payments_amount' => false,
        'iso_currency_code' => false,
        'last_updated' => false,
        'finance_score' => false,
        'predicted_balance' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'customization_id' => 'customization_id',
        'spend_limit' => 'spend_limit',
        'current_spend' => 'current_spend',
        'pending_payments_amount' => 'pending_payments_amount',
        'iso_currency_code' => 'iso_currency_code',
        'last_updated' => 'last_updated',
        'finance_score' => 'finance_score',
        'predicted_balance' => 'predicted_balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customization_id' => 'setCustomizationId',
        'spend_limit' => 'setSpendLimit',
        'current_spend' => 'setCurrentSpend',
        'pending_payments_amount' => 'setPendingPaymentsAmount',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'last_updated' => 'setLastUpdated',
        'finance_score' => 'setFinanceScore',
        'predicted_balance' => 'setPredictedBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customization_id' => 'getCustomizationId',
        'spend_limit' => 'getSpendLimit',
        'current_spend' => 'getCurrentSpend',
        'pending_payments_amount' => 'getPendingPaymentsAmount',
        'iso_currency_code' => 'getIsoCurrencyCode',
        'last_updated' => 'getLastUpdated',
        'finance_score' => 'getFinanceScore',
        'predicted_balance' => 'getPredictedBalance'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('customization_id', $data ?? [], null);
        $this->setIfExists('spend_limit', $data ?? [], null);
        $this->setIfExists('current_spend', $data ?? [], null);
        $this->setIfExists('pending_payments_amount', $data ?? [], null);
        $this->setIfExists('iso_currency_code', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('finance_score', $data ?? [], null);
        $this->setIfExists('predicted_balance', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['customization_id'] === null) {
            $invalidProperties[] = "'customization_id' can't be null";
        }
        if ($this->container['spend_limit'] === null) {
            $invalidProperties[] = "'spend_limit' can't be null";
        }
        if ($this->container['current_spend'] === null) {
            $invalidProperties[] = "'current_spend' can't be null";
        }
        if ($this->container['pending_payments_amount'] === null) {
            $invalidProperties[] = "'pending_payments_amount' can't be null";
        }
        if ($this->container['iso_currency_code'] === null) {
            $invalidProperties[] = "'iso_currency_code' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['finance_score'] === null) {
            $invalidProperties[] = "'finance_score' can't be null";
        }
        if ($this->container['predicted_balance'] === null) {
            $invalidProperties[] = "'predicted_balance' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customization_id
     *
     * @return string
     */
    public function getCustomizationId()
    {
        return $this->container['customization_id'];
    }

    /**
     * Sets customization_id
     *
     * @param string $customization_id customization_id
     *
     * @return self
     */
    public function setCustomizationId($customization_id)
    {
        if (is_null($customization_id)) {
            throw new \InvalidArgumentException('non-nullable customization_id cannot be null');
        }
        $this->container['customization_id'] = $customization_id;

        return $this;
    }

    /**
     * Gets spend_limit
     *
     * @return float
     */
    public function getSpendLimit()
    {
        return $this->container['spend_limit'];
    }

    /**
     * Sets spend_limit
     *
     * @param float $spend_limit The total limit for the current timeframe, in cents.
     *
     * @return self
     */
    public function setSpendLimit($spend_limit)
    {
        if (is_null($spend_limit)) {
            throw new \InvalidArgumentException('non-nullable spend_limit cannot be null');
        }
        $this->container['spend_limit'] = $spend_limit;

        return $this;
    }

    /**
     * Gets current_spend
     *
     * @return float
     */
    public function getCurrentSpend()
    {
        return $this->container['current_spend'];
    }

    /**
     * Sets current_spend
     *
     * @param float $current_spend The total current spend in the current timeframe, in cents, without factoring in pending payments.
     *
     * @return self
     */
    public function setCurrentSpend($current_spend)
    {
        if (is_null($current_spend)) {
            throw new \InvalidArgumentException('non-nullable current_spend cannot be null');
        }
        $this->container['current_spend'] = $current_spend;

        return $this;
    }

    /**
     * Gets pending_payments_amount
     *
     * @return float
     */
    public function getPendingPaymentsAmount()
    {
        return $this->container['pending_payments_amount'];
    }

    /**
     * Sets pending_payments_amount
     *
     * @param float $pending_payments_amount The total unpaid amount, in cents, from all timeframes.
     *
     * @return self
     */
    public function setPendingPaymentsAmount($pending_payments_amount)
    {
        if (is_null($pending_payments_amount)) {
            throw new \InvalidArgumentException('non-nullable pending_payments_amount cannot be null');
        }
        $this->container['pending_payments_amount'] = $pending_payments_amount;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string $iso_currency_code The ISO-4217 currency code of the transaction
     *
     * @return self
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        if (is_null($iso_currency_code)) {
            throw new \InvalidArgumentException('non-nullable iso_currency_code cannot be null');
        }
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param string $last_updated The datetime of when the consumer risk report was most recently updated, in ISO-8601 format.
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            throw new \InvalidArgumentException('non-nullable last_updated cannot be null');
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets finance_score
     *
     * @return \FuseClient\Model\FinanceScore
     */
    public function getFinanceScore()
    {
        return $this->container['finance_score'];
    }

    /**
     * Sets finance_score
     *
     * @param \FuseClient\Model\FinanceScore $finance_score finance_score
     *
     * @return self
     */
    public function setFinanceScore($finance_score)
    {
        if (is_null($finance_score)) {
            throw new \InvalidArgumentException('non-nullable finance_score cannot be null');
        }
        $this->container['finance_score'] = $finance_score;

        return $this;
    }

    /**
     * Gets predicted_balance
     *
     * @return float
     */
    public function getPredictedBalance()
    {
        return $this->container['predicted_balance'];
    }

    /**
     * Sets predicted_balance
     *
     * @param float $predicted_balance Predicted balance for the timeframe.
     *
     * @return self
     */
    public function setPredictedBalance($predicted_balance)
    {
        if (is_null($predicted_balance)) {
            throw new \InvalidArgumentException('non-nullable predicted_balance cannot be null');
        }
        $this->container['predicted_balance'] = $predicted_balance;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


