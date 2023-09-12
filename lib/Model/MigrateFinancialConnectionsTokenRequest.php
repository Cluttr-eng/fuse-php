<?php
/**
 * MigrateFinancialConnectionsTokenRequest
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
 * MigrateFinancialConnectionsTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MigrateFinancialConnectionsTokenRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MigrateFinancialConnectionsTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connection_data' => '\FuseClient\Model\MigrateFinancialConnectionsAggregatorConnectionData',
        'aggregator' => 'string',
        'entity' => '\FuseClient\Model\MigrateFinancialConnectionsTokenRequestEntity',
        'fuse_products' => '\FuseClient\Model\Product[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connection_data' => null,
        'aggregator' => null,
        'entity' => null,
        'fuse_products' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'connection_data' => false,
		'aggregator' => false,
		'entity' => false,
		'fuse_products' => false
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
        'connection_data' => 'connection_data',
        'aggregator' => 'aggregator',
        'entity' => 'entity',
        'fuse_products' => 'fuse_products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_data' => 'setConnectionData',
        'aggregator' => 'setAggregator',
        'entity' => 'setEntity',
        'fuse_products' => 'setFuseProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_data' => 'getConnectionData',
        'aggregator' => 'getAggregator',
        'entity' => 'getEntity',
        'fuse_products' => 'getFuseProducts'
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

    public const AGGREGATOR_PLAID = 'plaid';
    public const AGGREGATOR_MX = 'mx';
    public const AGGREGATOR_TELLER = 'teller';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAggregatorAllowableValues()
    {
        return [
            self::AGGREGATOR_PLAID,
            self::AGGREGATOR_MX,
            self::AGGREGATOR_TELLER,
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
        $this->setIfExists('connection_data', $data ?? [], null);
        $this->setIfExists('aggregator', $data ?? [], null);
        $this->setIfExists('entity', $data ?? [], null);
        $this->setIfExists('fuse_products', $data ?? [], null);
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

        if ($this->container['connection_data'] === null) {
            $invalidProperties[] = "'connection_data' can't be null";
        }
        if ($this->container['aggregator'] === null) {
            $invalidProperties[] = "'aggregator' can't be null";
        }
        $allowedValues = $this->getAggregatorAllowableValues();
        if (!is_null($this->container['aggregator']) && !in_array($this->container['aggregator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'aggregator', must be one of '%s'",
                $this->container['aggregator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['entity'] === null) {
            $invalidProperties[] = "'entity' can't be null";
        }
        if ($this->container['fuse_products'] === null) {
            $invalidProperties[] = "'fuse_products' can't be null";
        }
        if ((count($this->container['fuse_products']) < 1)) {
            $invalidProperties[] = "invalid value for 'fuse_products', number of items must be greater than or equal to 1.";
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
     * Gets connection_data
     *
     * @return \FuseClient\Model\MigrateFinancialConnectionsAggregatorConnectionData
     */
    public function getConnectionData()
    {
        return $this->container['connection_data'];
    }

    /**
     * Sets connection_data
     *
     * @param \FuseClient\Model\MigrateFinancialConnectionsAggregatorConnectionData $connection_data connection_data
     *
     * @return self
     */
    public function setConnectionData($connection_data)
    {
        if (is_null($connection_data)) {
            throw new \InvalidArgumentException('non-nullable connection_data cannot be null');
        }
        $this->container['connection_data'] = $connection_data;

        return $this;
    }

    /**
     * Gets aggregator
     *
     * @return string
     */
    public function getAggregator()
    {
        return $this->container['aggregator'];
    }

    /**
     * Sets aggregator
     *
     * @param string $aggregator The aggregator being migrated (either 'plaid', 'mx' or 'teller).
     *
     * @return self
     */
    public function setAggregator($aggregator)
    {
        if (is_null($aggregator)) {
            throw new \InvalidArgumentException('non-nullable aggregator cannot be null');
        }
        $allowedValues = $this->getAggregatorAllowableValues();
        if (!in_array($aggregator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'aggregator', must be one of '%s'",
                    $aggregator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aggregator'] = $aggregator;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \FuseClient\Model\MigrateFinancialConnectionsTokenRequestEntity
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \FuseClient\Model\MigrateFinancialConnectionsTokenRequestEntity $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        if (is_null($entity)) {
            throw new \InvalidArgumentException('non-nullable entity cannot be null');
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets fuse_products
     *
     * @return \FuseClient\Model\Product[]
     */
    public function getFuseProducts()
    {
        return $this->container['fuse_products'];
    }

    /**
     * Sets fuse_products
     *
     * @param \FuseClient\Model\Product[] $fuse_products A list of Fuse products that the migrated connection will have access to.
     *
     * @return self
     */
    public function setFuseProducts($fuse_products)
    {
        if (is_null($fuse_products)) {
            throw new \InvalidArgumentException('non-nullable fuse_products cannot be null');
        }


        if ((count($fuse_products) < 1)) {
            throw new \InvalidArgumentException('invalid length for $fuse_products when calling MigrateFinancialConnectionsTokenRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['fuse_products'] = $fuse_products;

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


