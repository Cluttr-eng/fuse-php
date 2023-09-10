<?php
/**
 * FinancialConnectionsHolding
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FinancialConnectionsHolding Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FinancialConnectionsHolding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinancialConnectionsHolding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remote_account_id' => 'string',
        'cost_basis' => 'float',
        'value' => 'float',
        'quantity' => 'float',
        'institution_price' => 'float',
        'security' => '\OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'remote_account_id' => null,
        'cost_basis' => null,
        'value' => null,
        'quantity' => null,
        'institution_price' => null,
        'security' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'remote_account_id' => false,
		'cost_basis' => false,
		'value' => false,
		'quantity' => false,
		'institution_price' => false,
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
        'remote_account_id' => 'remote_account_id',
        'cost_basis' => 'cost_basis',
        'value' => 'value',
        'quantity' => 'quantity',
        'institution_price' => 'institution_price',
        'security' => 'security'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remote_account_id' => 'setRemoteAccountId',
        'cost_basis' => 'setCostBasis',
        'value' => 'setValue',
        'quantity' => 'setQuantity',
        'institution_price' => 'setInstitutionPrice',
        'security' => 'setSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remote_account_id' => 'getRemoteAccountId',
        'cost_basis' => 'getCostBasis',
        'value' => 'getValue',
        'quantity' => 'getQuantity',
        'institution_price' => 'getInstitutionPrice',
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
        $this->setIfExists('remote_account_id', $data ?? [], null);
        $this->setIfExists('cost_basis', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('institution_price', $data ?? [], null);
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

        if ($this->container['remote_account_id'] === null) {
            $invalidProperties[] = "'remote_account_id' can't be null";
        }
        if ($this->container['cost_basis'] === null) {
            $invalidProperties[] = "'cost_basis' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['institution_price'] === null) {
            $invalidProperties[] = "'institution_price' can't be null";
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
     * @param string $remote_account_id The remote account ID associated with this holding.
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
     * Gets cost_basis
     *
     * @return float
     */
    public function getCostBasis()
    {
        return $this->container['cost_basis'];
    }

    /**
     * Sets cost_basis
     *
     * @param float $cost_basis The original total value of the holding, in cents, when it was purchased. The format of this value is a double.
     *
     * @return self
     */
    public function setCostBasis($cost_basis)
    {
        if (is_null($cost_basis)) {
            throw new \InvalidArgumentException('non-nullable cost_basis cannot be null');
        }
        $this->container['cost_basis'] = $cost_basis;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value The current market value of the holding, in cents. The format of this value is a double.
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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
     * @param float $quantity The number of units of the security held in this holding.
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
     * Gets institution_price
     *
     * @return float
     */
    public function getInstitutionPrice()
    {
        return $this->container['institution_price'];
    }

    /**
     * Sets institution_price
     *
     * @param float $institution_price The price of the security, in cents, as provided by the financial institution managing the holding. The format of this value is a double.
     *
     * @return self
     */
    public function setInstitutionPrice($institution_price)
    {
        if (is_null($institution_price)) {
            throw new \InvalidArgumentException('non-nullable institution_price cannot be null');
        }
        $this->container['institution_price'] = $institution_price;

        return $this;
    }

    /**
     * Gets security
     *
     * @return \OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurity
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param \OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurity $security security
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

