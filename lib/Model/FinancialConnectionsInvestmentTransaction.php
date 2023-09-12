<?php
/**
 * FinancialConnectionsInvestmentTransaction
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

use \ArrayAccess;
use \FuseClient\ObjectSerializer;

/**
 * FinancialConnectionsInvestmentTransaction Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FinancialConnectionsInvestmentTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinancialConnectionsInvestmentTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remote_id' => 'string',
        'remote_account_id' => 'string',
        'account_name' => 'string',
        'amount' => 'float',
        'description' => 'string',
        'fees' => 'float',
        'currency' => '\FuseClient\Model\Currency',
        'date' => '\DateTime',
        'type' => 'string',
        'subtype' => '\FuseClient\Model\FinancialConnectionsInvestmentTransactionSubtype',
        'quantity' => 'float',
        'price' => 'float',
        'security' => '\FuseClient\Model\FinancialConnectionsInvestmentSecurity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'remote_id' => null,
        'remote_account_id' => null,
        'account_name' => null,
        'amount' => null,
        'description' => null,
        'fees' => null,
        'currency' => null,
        'date' => 'date-time',
        'type' => null,
        'subtype' => null,
        'quantity' => null,
        'price' => null,
        'security' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'remote_id' => false,
		'remote_account_id' => false,
		'account_name' => false,
		'amount' => false,
		'description' => false,
		'fees' => false,
		'currency' => false,
		'date' => false,
		'type' => false,
		'subtype' => false,
		'quantity' => false,
		'price' => false,
		'security' => false
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
        'remote_id' => 'remote_id',
        'remote_account_id' => 'remote_account_id',
        'account_name' => 'account_name',
        'amount' => 'amount',
        'description' => 'description',
        'fees' => 'fees',
        'currency' => 'currency',
        'date' => 'date',
        'type' => 'type',
        'subtype' => 'subtype',
        'quantity' => 'quantity',
        'price' => 'price',
        'security' => 'security'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remote_id' => 'setRemoteId',
        'remote_account_id' => 'setRemoteAccountId',
        'account_name' => 'setAccountName',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'fees' => 'setFees',
        'currency' => 'setCurrency',
        'date' => 'setDate',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'security' => 'setSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remote_id' => 'getRemoteId',
        'remote_account_id' => 'getRemoteAccountId',
        'account_name' => 'getAccountName',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'fees' => 'getFees',
        'currency' => 'getCurrency',
        'date' => 'getDate',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'security' => 'getSecurity'
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

    public const TYPE_CASH = 'cash';
    public const TYPE_BUY = 'buy';
    public const TYPE_SELL = 'sell';
    public const TYPE_TRANSFER = 'transfer';
    public const TYPE_FEE = 'fee';
    public const TYPE_CANCEL = 'cancel';
    public const TYPE_MINUS = '-';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CASH,
            self::TYPE_BUY,
            self::TYPE_SELL,
            self::TYPE_TRANSFER,
            self::TYPE_FEE,
            self::TYPE_CANCEL,
            self::TYPE_MINUS,
        ];
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
        $this->setIfExists('remote_id', $data ?? [], null);
        $this->setIfExists('remote_account_id', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('subtype', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('security', $data ?? [], null);
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

        if ($this->container['remote_id'] === null) {
            $invalidProperties[] = "'remote_id' can't be null";
        }
        if ($this->container['remote_account_id'] === null) {
            $invalidProperties[] = "'remote_account_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['security'] === null) {
            $invalidProperties[] = "'security' can't be null";
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
     * Gets remote_id
     *
     * @return string
     */
    public function getRemoteId()
    {
        return $this->container['remote_id'];
    }

    /**
     * Sets remote_id
     *
     * @param string $remote_id The remote ID of the Investment transaction
     *
     * @return self
     */
    public function setRemoteId($remote_id)
    {
        if (is_null($remote_id)) {
            throw new \InvalidArgumentException('non-nullable remote_id cannot be null');
        }
        $this->container['remote_id'] = $remote_id;

        return $this;
    }

    /**
     * Gets remote_account_id
     *
     * @return string
     */
    public function getRemoteAccountId()
    {
        return $this->container['remote_account_id'];
    }

    /**
     * Sets remote_account_id
     *
     * @param string $remote_account_id Remote Account Id of the transaction, ie Plaid Account Id
     *
     * @return self
     */
    public function setRemoteAccountId($remote_account_id)
    {
        if (is_null($remote_account_id)) {
            throw new \InvalidArgumentException('non-nullable remote_account_id cannot be null');
        }
        $this->container['remote_account_id'] = $remote_account_id;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The name of the account associated with the investment transaction
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount of the investment transaction, in cents. The format of this value is a double.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the investment transaction
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return float
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param float $fees The fees associated with the investment transaction, in cents. The format of this value is a double.
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \FuseClient\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \FuseClient\Model\Currency $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date and time of the investment transaction
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the investment transaction (e.g., 'buy', 'sell', 'dividend')
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return \FuseClient\Model\FinancialConnectionsInvestmentTransactionSubtype|null
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param \FuseClient\Model\FinancialConnectionsInvestmentTransactionSubtype|null $subtype subtype
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        if (is_null($subtype)) {
            throw new \InvalidArgumentException('non-nullable subtype cannot be null');
        }
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The number of units of the security involved in this transaction
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The price of the security involved in this transaction, in cents. The format of this value is a double.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets security
     *
     * @return \FuseClient\Model\FinancialConnectionsInvestmentSecurity
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param \FuseClient\Model\FinancialConnectionsInvestmentSecurity $security security
     *
     * @return self
     */
    public function setSecurity($security)
    {
        if (is_null($security)) {
            throw new \InvalidArgumentException('non-nullable security cannot be null');
        }
        $this->container['security'] = $security;

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


