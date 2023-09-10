<?php
/**
 * AssetReport
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
 * AssetReport Class Doc Comment
 *
 * @category Class
 * @description The Asset Report in JSON format.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AssetReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_report_id' => 'string',
        'asset_report_token' => 'string',
        'date_generated' => 'string',
        'days_requested' => 'int',
        'accounts' => '\OpenAPI\Client\Model\AssetReportAccountsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset_report_id' => null,
        'asset_report_token' => null,
        'date_generated' => null,
        'days_requested' => null,
        'accounts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asset_report_id' => false,
		'asset_report_token' => false,
		'date_generated' => false,
		'days_requested' => false,
		'accounts' => false
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
        'asset_report_id' => 'asset_report_id',
        'asset_report_token' => 'asset_report_token',
        'date_generated' => 'date_generated',
        'days_requested' => 'days_requested',
        'accounts' => 'accounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_report_id' => 'setAssetReportId',
        'asset_report_token' => 'setAssetReportToken',
        'date_generated' => 'setDateGenerated',
        'days_requested' => 'setDaysRequested',
        'accounts' => 'setAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_report_id' => 'getAssetReportId',
        'asset_report_token' => 'getAssetReportToken',
        'date_generated' => 'getDateGenerated',
        'days_requested' => 'getDaysRequested',
        'accounts' => 'getAccounts'
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
        $this->setIfExists('asset_report_id', $data ?? [], null);
        $this->setIfExists('asset_report_token', $data ?? [], null);
        $this->setIfExists('date_generated', $data ?? [], null);
        $this->setIfExists('days_requested', $data ?? [], null);
        $this->setIfExists('accounts', $data ?? [], null);
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
     * Gets asset_report_id
     *
     * @return string|null
     */
    public function getAssetReportId()
    {
        return $this->container['asset_report_id'];
    }

    /**
     * Sets asset_report_id
     *
     * @param string|null $asset_report_id A unique ID identifying an Asset Report.
     *
     * @return self
     */
    public function setAssetReportId($asset_report_id)
    {
        if (is_null($asset_report_id)) {
            throw new \InvalidArgumentException('non-nullable asset_report_id cannot be null');
        }
        $this->container['asset_report_id'] = $asset_report_id;

        return $this;
    }

    /**
     * Gets asset_report_token
     *
     * @return string|null
     */
    public function getAssetReportToken()
    {
        return $this->container['asset_report_token'];
    }

    /**
     * Sets asset_report_token
     *
     * @param string|null $asset_report_token A token that can be provided to endpoints such as /asset_report/get or /asset_report/pdf/get to fetch or update an Asset Report.
     *
     * @return self
     */
    public function setAssetReportToken($asset_report_token)
    {
        if (is_null($asset_report_token)) {
            throw new \InvalidArgumentException('non-nullable asset_report_token cannot be null');
        }
        $this->container['asset_report_token'] = $asset_report_token;

        return $this;
    }

    /**
     * Gets date_generated
     *
     * @return string|null
     */
    public function getDateGenerated()
    {
        return $this->container['date_generated'];
    }

    /**
     * Sets date_generated
     *
     * @param string|null $date_generated The date and time when the Asset Report was created, in ISO 8601 format
     *
     * @return self
     */
    public function setDateGenerated($date_generated)
    {
        if (is_null($date_generated)) {
            throw new \InvalidArgumentException('non-nullable date_generated cannot be null');
        }
        $this->container['date_generated'] = $date_generated;

        return $this;
    }

    /**
     * Gets days_requested
     *
     * @return int|null
     */
    public function getDaysRequested()
    {
        return $this->container['days_requested'];
    }

    /**
     * Sets days_requested
     *
     * @param int|null $days_requested The duration of transaction history you requested
     *
     * @return self
     */
    public function setDaysRequested($days_requested)
    {
        if (is_null($days_requested)) {
            throw new \InvalidArgumentException('non-nullable days_requested cannot be null');
        }
        $this->container['days_requested'] = $days_requested;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \OpenAPI\Client\Model\AssetReportAccountsInner[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \OpenAPI\Client\Model\AssetReportAccountsInner[]|null $accounts An array of Asset Reports, one for each account in the Asset Report.
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        if (is_null($accounts)) {
            throw new \InvalidArgumentException('non-nullable accounts cannot be null');
        }
        $this->container['accounts'] = $accounts;

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

