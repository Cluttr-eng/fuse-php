<?php
/**
 * WebhookEvent
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
 * WebhookEvent Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\FuseClient\Model\WebhookType',
        'financial_connection_id' => 'string',
        'environment' => 'string',
        'source' => '\FuseClient\Model\WebhookSource',
        'verification_token' => 'string',
        'asset_report_id' => 'string',
        'historical_transactions_available' => 'bool',
        'removed_transaction_ids' => 'string[]',
        'remote_data' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'financial_connection_id' => null,
        'environment' => null,
        'source' => null,
        'verification_token' => null,
        'asset_report_id' => null,
        'historical_transactions_available' => null,
        'removed_transaction_ids' => null,
        'remote_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'financial_connection_id' => false,
		'environment' => false,
		'source' => false,
		'verification_token' => false,
		'asset_report_id' => false,
		'historical_transactions_available' => false,
		'removed_transaction_ids' => false,
		'remote_data' => true
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
        'type' => 'type',
        'financial_connection_id' => 'financial_connection_id',
        'environment' => 'environment',
        'source' => 'source',
        'verification_token' => 'verification_token',
        'asset_report_id' => 'asset_report_id',
        'historical_transactions_available' => 'historical_transactions_available',
        'removed_transaction_ids' => 'removed_transaction_ids',
        'remote_data' => 'remote_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'financial_connection_id' => 'setFinancialConnectionId',
        'environment' => 'setEnvironment',
        'source' => 'setSource',
        'verification_token' => 'setVerificationToken',
        'asset_report_id' => 'setAssetReportId',
        'historical_transactions_available' => 'setHistoricalTransactionsAvailable',
        'removed_transaction_ids' => 'setRemovedTransactionIds',
        'remote_data' => 'setRemoteData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'financial_connection_id' => 'getFinancialConnectionId',
        'environment' => 'getEnvironment',
        'source' => 'getSource',
        'verification_token' => 'getVerificationToken',
        'asset_report_id' => 'getAssetReportId',
        'historical_transactions_available' => 'getHistoricalTransactionsAvailable',
        'removed_transaction_ids' => 'getRemovedTransactionIds',
        'remote_data' => 'getRemoteData'
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

    public const ENVIRONMENT_SANDBOX = 'sandbox';
    public const ENVIRONMENT_PRODUCTION = 'production';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentAllowableValues()
    {
        return [
            self::ENVIRONMENT_SANDBOX,
            self::ENVIRONMENT_PRODUCTION,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('financial_connection_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('verification_token', $data ?? [], null);
        $this->setIfExists('asset_report_id', $data ?? [], null);
        $this->setIfExists('historical_transactions_available', $data ?? [], null);
        $this->setIfExists('removed_transaction_ids', $data ?? [], null);
        $this->setIfExists('remote_data', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['financial_connection_id'] === null) {
            $invalidProperties[] = "'financial_connection_id' can't be null";
        }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($this->container['environment']) && !in_array($this->container['environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'environment', must be one of '%s'",
                $this->container['environment'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['remote_data'] === null) {
            $invalidProperties[] = "'remote_data' can't be null";
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
     * Gets type
     *
     * @return \FuseClient\Model\WebhookType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FuseClient\Model\WebhookType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets financial_connection_id
     *
     * @return string
     */
    public function getFinancialConnectionId()
    {
        return $this->container['financial_connection_id'];
    }

    /**
     * Sets financial_connection_id
     *
     * @param string $financial_connection_id Financial connection id associated with the webhook
     *
     * @return self
     */
    public function setFinancialConnectionId($financial_connection_id)
    {
        if (is_null($financial_connection_id)) {
            throw new \InvalidArgumentException('non-nullable financial_connection_id cannot be null');
        }
        $this->container['financial_connection_id'] = $financial_connection_id;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!in_array($environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'environment', must be one of '%s'",
                    $environment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \FuseClient\Model\WebhookSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \FuseClient\Model\WebhookSource $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets verification_token
     *
     * @return string|null
     */
    public function getVerificationToken()
    {
        return $this->container['verification_token'];
    }

    /**
     * Sets verification_token
     *
     * @param string|null $verification_token Aggregator verification data needed to verify the webhook
     *
     * @return self
     */
    public function setVerificationToken($verification_token)
    {
        if (is_null($verification_token)) {
            throw new \InvalidArgumentException('non-nullable verification_token cannot be null');
        }
        $this->container['verification_token'] = $verification_token;

        return $this;
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
     * @param string|null $asset_report_id Exists for assets.report_ready webhooks
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
     * Gets historical_transactions_available
     *
     * @return bool|null
     */
    public function getHistoricalTransactionsAvailable()
    {
        return $this->container['historical_transactions_available'];
    }

    /**
     * Sets historical_transactions_available
     *
     * @param bool|null $historical_transactions_available Exists for transactions.updates webhooks. Indicates if historical transaction information (up to 24 months) is ready to be queried.
     *
     * @return self
     */
    public function setHistoricalTransactionsAvailable($historical_transactions_available)
    {
        if (is_null($historical_transactions_available)) {
            throw new \InvalidArgumentException('non-nullable historical_transactions_available cannot be null');
        }
        $this->container['historical_transactions_available'] = $historical_transactions_available;

        return $this;
    }

    /**
     * Gets removed_transaction_ids
     *
     * @return string[]|null
     */
    public function getRemovedTransactionIds()
    {
        return $this->container['removed_transaction_ids'];
    }

    /**
     * Sets removed_transaction_ids
     *
     * @param string[]|null $removed_transaction_ids Exists for transactions.updates webhooks. Currently only supported by Plaid.
     *
     * @return self
     */
    public function setRemovedTransactionIds($removed_transaction_ids)
    {
        if (is_null($removed_transaction_ids)) {
            throw new \InvalidArgumentException('non-nullable removed_transaction_ids cannot be null');
        }
        $this->container['removed_transaction_ids'] = $removed_transaction_ids;

        return $this;
    }

    /**
     * Gets remote_data
     *
     * @return mixed
     */
    public function getRemoteData()
    {
        return $this->container['remote_data'];
    }

    /**
     * Sets remote_data
     *
     * @param mixed $remote_data remote_data
     *
     * @return self
     */
    public function setRemoteData($remote_data)
    {
        if (is_null($remote_data)) {
            array_push($this->openAPINullablesSetToNull, 'remote_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remote_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remote_data'] = $remote_data;

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


