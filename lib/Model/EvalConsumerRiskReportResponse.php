<?php
/**
 * EvalConsumerRiskReportResponse
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
 * EvalConsumerRiskReportResponse Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EvalConsumerRiskReportResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EvalConsumerRiskReportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mean_granted_above_failed_payments' => 'float',
        'mean_granted_below_failed_payments' => 'float',
        'mean_predicted_limits' => 'float',
        'mean_successful_payments' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mean_granted_above_failed_payments' => null,
        'mean_granted_below_failed_payments' => null,
        'mean_predicted_limits' => null,
        'mean_successful_payments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mean_granted_above_failed_payments' => false,
		'mean_granted_below_failed_payments' => false,
		'mean_predicted_limits' => false,
		'mean_successful_payments' => false
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
        'mean_granted_above_failed_payments' => 'mean_granted_above_failed_payments',
        'mean_granted_below_failed_payments' => 'mean_granted_below_failed_payments',
        'mean_predicted_limits' => 'mean_predicted_limits',
        'mean_successful_payments' => 'mean_successful_payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mean_granted_above_failed_payments' => 'setMeanGrantedAboveFailedPayments',
        'mean_granted_below_failed_payments' => 'setMeanGrantedBelowFailedPayments',
        'mean_predicted_limits' => 'setMeanPredictedLimits',
        'mean_successful_payments' => 'setMeanSuccessfulPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mean_granted_above_failed_payments' => 'getMeanGrantedAboveFailedPayments',
        'mean_granted_below_failed_payments' => 'getMeanGrantedBelowFailedPayments',
        'mean_predicted_limits' => 'getMeanPredictedLimits',
        'mean_successful_payments' => 'getMeanSuccessfulPayments'
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
        $this->setIfExists('mean_granted_above_failed_payments', $data ?? [], null);
        $this->setIfExists('mean_granted_below_failed_payments', $data ?? [], null);
        $this->setIfExists('mean_predicted_limits', $data ?? [], null);
        $this->setIfExists('mean_successful_payments', $data ?? [], null);
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
     * Gets mean_granted_above_failed_payments
     *
     * @return float|null
     */
    public function getMeanGrantedAboveFailedPayments()
    {
        return $this->container['mean_granted_above_failed_payments'];
    }

    /**
     * Sets mean_granted_above_failed_payments
     *
     * @param float|null $mean_granted_above_failed_payments 
     *
     * @return self
     */
    public function setMeanGrantedAboveFailedPayments($mean_granted_above_failed_payments)
    {
        if (is_null($mean_granted_above_failed_payments)) {
            throw new \InvalidArgumentException('non-nullable mean_granted_above_failed_payments cannot be null');
        }
        $this->container['mean_granted_above_failed_payments'] = $mean_granted_above_failed_payments;

        return $this;
    }

    /**
     * Gets mean_granted_below_failed_payments
     *
     * @return float|null
     */
    public function getMeanGrantedBelowFailedPayments()
    {
        return $this->container['mean_granted_below_failed_payments'];
    }

    /**
     * Sets mean_granted_below_failed_payments
     *
     * @param float|null $mean_granted_below_failed_payments 
     *
     * @return self
     */
    public function setMeanGrantedBelowFailedPayments($mean_granted_below_failed_payments)
    {
        if (is_null($mean_granted_below_failed_payments)) {
            throw new \InvalidArgumentException('non-nullable mean_granted_below_failed_payments cannot be null');
        }
        $this->container['mean_granted_below_failed_payments'] = $mean_granted_below_failed_payments;

        return $this;
    }

    /**
     * Gets mean_predicted_limits
     *
     * @return float|null
     */
    public function getMeanPredictedLimits()
    {
        return $this->container['mean_predicted_limits'];
    }

    /**
     * Sets mean_predicted_limits
     *
     * @param float|null $mean_predicted_limits 
     *
     * @return self
     */
    public function setMeanPredictedLimits($mean_predicted_limits)
    {
        if (is_null($mean_predicted_limits)) {
            throw new \InvalidArgumentException('non-nullable mean_predicted_limits cannot be null');
        }
        $this->container['mean_predicted_limits'] = $mean_predicted_limits;

        return $this;
    }

    /**
     * Gets mean_successful_payments
     *
     * @return float|null
     */
    public function getMeanSuccessfulPayments()
    {
        return $this->container['mean_successful_payments'];
    }

    /**
     * Sets mean_successful_payments
     *
     * @param float|null $mean_successful_payments 
     *
     * @return self
     */
    public function setMeanSuccessfulPayments($mean_successful_payments)
    {
        if (is_null($mean_successful_payments)) {
            throw new \InvalidArgumentException('non-nullable mean_successful_payments cannot be null');
        }
        $this->container['mean_successful_payments'] = $mean_successful_payments;

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


