<?php
/**
 * FinancialConnectionsAccountLiability
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
 * FinancialConnectionsAccountLiability Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FinancialConnectionsAccountLiability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinancialConnectionsAccountLiability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remote_id' => 'string',
        'currency' => 'string',
        'fingerprint' => 'string',
        'institution' => '\FuseClient\Model\FinancialConnectionsAccountInstitution',
        'mask' => 'string',
        'name' => 'string',
        'type' => '\FuseClient\Model\AccountType',
        'subtype' => '\FuseClient\Model\AccountSubtype',
        'balance' => '\FuseClient\Model\FinancialConnectionsAccountCachedBalance',
        'remote_data' => 'mixed',
        'aprs' => '\FuseClient\Model\FinancialConnectionsAccountLiabilityAllOfAprs[]',
        'interest_rate_percentage' => 'float',
        'origination_principal_amount' => 'float',
        'next_payment_due_date' => 'string',
        'last_payment_date' => 'string',
        'last_payment_amount' => 'float',
        'minimum_payment_amount' => 'float'
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
        'currency' => null,
        'fingerprint' => null,
        'institution' => null,
        'mask' => null,
        'name' => null,
        'type' => null,
        'subtype' => null,
        'balance' => null,
        'remote_data' => null,
        'aprs' => null,
        'interest_rate_percentage' => null,
        'origination_principal_amount' => null,
        'next_payment_due_date' => null,
        'last_payment_date' => null,
        'last_payment_amount' => null,
        'minimum_payment_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'remote_id' => false,
		'currency' => false,
		'fingerprint' => false,
		'institution' => false,
		'mask' => false,
		'name' => false,
		'type' => false,
		'subtype' => true,
		'balance' => false,
		'remote_data' => true,
		'aprs' => false,
		'interest_rate_percentage' => false,
		'origination_principal_amount' => false,
		'next_payment_due_date' => false,
		'last_payment_date' => false,
		'last_payment_amount' => false,
		'minimum_payment_amount' => false
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
        'currency' => 'currency',
        'fingerprint' => 'fingerprint',
        'institution' => 'institution',
        'mask' => 'mask',
        'name' => 'name',
        'type' => 'type',
        'subtype' => 'subtype',
        'balance' => 'balance',
        'remote_data' => 'remote_data',
        'aprs' => 'aprs',
        'interest_rate_percentage' => 'interest_rate_percentage',
        'origination_principal_amount' => 'origination_principal_amount',
        'next_payment_due_date' => 'next_payment_due_date',
        'last_payment_date' => 'last_payment_date',
        'last_payment_amount' => 'last_payment_amount',
        'minimum_payment_amount' => 'minimum_payment_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remote_id' => 'setRemoteId',
        'currency' => 'setCurrency',
        'fingerprint' => 'setFingerprint',
        'institution' => 'setInstitution',
        'mask' => 'setMask',
        'name' => 'setName',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'balance' => 'setBalance',
        'remote_data' => 'setRemoteData',
        'aprs' => 'setAprs',
        'interest_rate_percentage' => 'setInterestRatePercentage',
        'origination_principal_amount' => 'setOriginationPrincipalAmount',
        'next_payment_due_date' => 'setNextPaymentDueDate',
        'last_payment_date' => 'setLastPaymentDate',
        'last_payment_amount' => 'setLastPaymentAmount',
        'minimum_payment_amount' => 'setMinimumPaymentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remote_id' => 'getRemoteId',
        'currency' => 'getCurrency',
        'fingerprint' => 'getFingerprint',
        'institution' => 'getInstitution',
        'mask' => 'getMask',
        'name' => 'getName',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'balance' => 'getBalance',
        'remote_data' => 'getRemoteData',
        'aprs' => 'getAprs',
        'interest_rate_percentage' => 'getInterestRatePercentage',
        'origination_principal_amount' => 'getOriginationPrincipalAmount',
        'next_payment_due_date' => 'getNextPaymentDueDate',
        'last_payment_date' => 'getLastPaymentDate',
        'last_payment_amount' => 'getLastPaymentAmount',
        'minimum_payment_amount' => 'getMinimumPaymentAmount'
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
        $this->setIfExists('remote_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('fingerprint', $data ?? [], null);
        $this->setIfExists('institution', $data ?? [], null);
        $this->setIfExists('mask', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('subtype', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('remote_data', $data ?? [], null);
        $this->setIfExists('aprs', $data ?? [], null);
        $this->setIfExists('interest_rate_percentage', $data ?? [], null);
        $this->setIfExists('origination_principal_amount', $data ?? [], null);
        $this->setIfExists('next_payment_due_date', $data ?? [], null);
        $this->setIfExists('last_payment_date', $data ?? [], null);
        $this->setIfExists('last_payment_amount', $data ?? [], null);
        $this->setIfExists('minimum_payment_amount', $data ?? [], null);
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
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['fingerprint'] === null) {
            $invalidProperties[] = "'fingerprint' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
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
     * @param string $remote_id Remote Id of the account, ie Plaid or Teller account id
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The ISO-4217 currency code of the account.
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
     * Gets fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string $fingerprint Uniquely identifies this account across all accounts for a single financial connection. Used for reconnection deduplication. See more information here: https://letsfuse.readme.io/docs/duplicate-accounts
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        if (is_null($fingerprint)) {
            throw new \InvalidArgumentException('non-nullable fingerprint cannot be null');
        }
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets institution
     *
     * @return \FuseClient\Model\FinancialConnectionsAccountInstitution|null
     */
    public function getInstitution()
    {
        return $this->container['institution'];
    }

    /**
     * Sets institution
     *
     * @param \FuseClient\Model\FinancialConnectionsAccountInstitution|null $institution institution
     *
     * @return self
     */
    public function setInstitution($institution)
    {
        if (is_null($institution)) {
            throw new \InvalidArgumentException('non-nullable institution cannot be null');
        }
        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return string|null
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param string|null $mask The partial account number.
     *
     * @return self
     */
    public function setMask($mask)
    {
        if (is_null($mask)) {
            throw new \InvalidArgumentException('non-nullable mask cannot be null');
        }
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The account's name, ie 'My Checking'
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \FuseClient\Model\AccountType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \FuseClient\Model\AccountType $type type
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
     * Gets subtype
     *
     * @return \FuseClient\Model\AccountSubtype|null
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param \FuseClient\Model\AccountSubtype|null $subtype subtype
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        if (is_null($subtype)) {
            array_push($this->openAPINullablesSetToNull, 'subtype');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subtype', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \FuseClient\Model\FinancialConnectionsAccountCachedBalance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \FuseClient\Model\FinancialConnectionsAccountCachedBalance $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

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
     * Gets aprs
     *
     * @return \FuseClient\Model\FinancialConnectionsAccountLiabilityAllOfAprs[]|null
     */
    public function getAprs()
    {
        return $this->container['aprs'];
    }

    /**
     * Sets aprs
     *
     * @param \FuseClient\Model\FinancialConnectionsAccountLiabilityAllOfAprs[]|null $aprs The various interest rates that apply to the account. If APR data is not available, this array will be empty.
     *
     * @return self
     */
    public function setAprs($aprs)
    {
        if (is_null($aprs)) {
            throw new \InvalidArgumentException('non-nullable aprs cannot be null');
        }
        $this->container['aprs'] = $aprs;

        return $this;
    }

    /**
     * Gets interest_rate_percentage
     *
     * @return float|null
     */
    public function getInterestRatePercentage()
    {
        return $this->container['interest_rate_percentage'];
    }

    /**
     * Sets interest_rate_percentage
     *
     * @param float|null $interest_rate_percentage The interest rate on the loan as a percentage.
     *
     * @return self
     */
    public function setInterestRatePercentage($interest_rate_percentage)
    {
        if (is_null($interest_rate_percentage)) {
            throw new \InvalidArgumentException('non-nullable interest_rate_percentage cannot be null');
        }
        $this->container['interest_rate_percentage'] = $interest_rate_percentage;

        return $this;
    }

    /**
     * Gets origination_principal_amount
     *
     * @return float|null
     */
    public function getOriginationPrincipalAmount()
    {
        return $this->container['origination_principal_amount'];
    }

    /**
     * Sets origination_principal_amount
     *
     * @param float|null $origination_principal_amount The original principal balance of the loan.
     *
     * @return self
     */
    public function setOriginationPrincipalAmount($origination_principal_amount)
    {
        if (is_null($origination_principal_amount)) {
            throw new \InvalidArgumentException('non-nullable origination_principal_amount cannot be null');
        }
        $this->container['origination_principal_amount'] = $origination_principal_amount;

        return $this;
    }

    /**
     * Gets next_payment_due_date
     *
     * @return string|null
     */
    public function getNextPaymentDueDate()
    {
        return $this->container['next_payment_due_date'];
    }

    /**
     * Sets next_payment_due_date
     *
     * @param string|null $next_payment_due_date The due date for the next payment. The due date is null if a payment is not expected.
     *
     * @return self
     */
    public function setNextPaymentDueDate($next_payment_due_date)
    {
        if (is_null($next_payment_due_date)) {
            throw new \InvalidArgumentException('non-nullable next_payment_due_date cannot be null');
        }
        $this->container['next_payment_due_date'] = $next_payment_due_date;

        return $this;
    }

    /**
     * Gets last_payment_date
     *
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return $this->container['last_payment_date'];
    }

    /**
     * Sets last_payment_date
     *
     * @param string|null $last_payment_date The date of the last payment. Dates are returned in an ISO 8601 format (YYYY-MM-DD).
     *
     * @return self
     */
    public function setLastPaymentDate($last_payment_date)
    {
        if (is_null($last_payment_date)) {
            throw new \InvalidArgumentException('non-nullable last_payment_date cannot be null');
        }
        $this->container['last_payment_date'] = $last_payment_date;

        return $this;
    }

    /**
     * Gets last_payment_amount
     *
     * @return float|null
     */
    public function getLastPaymentAmount()
    {
        return $this->container['last_payment_amount'];
    }

    /**
     * Sets last_payment_amount
     *
     * @param float|null $last_payment_amount The amount of the last payment.
     *
     * @return self
     */
    public function setLastPaymentAmount($last_payment_amount)
    {
        if (is_null($last_payment_amount)) {
            throw new \InvalidArgumentException('non-nullable last_payment_amount cannot be null');
        }
        $this->container['last_payment_amount'] = $last_payment_amount;

        return $this;
    }

    /**
     * Gets minimum_payment_amount
     *
     * @return float|null
     */
    public function getMinimumPaymentAmount()
    {
        return $this->container['minimum_payment_amount'];
    }

    /**
     * Sets minimum_payment_amount
     *
     * @param float|null $minimum_payment_amount The minimum payment required for an account. This can apply to any debt account.
     *
     * @return self
     */
    public function setMinimumPaymentAmount($minimum_payment_amount)
    {
        if (is_null($minimum_payment_amount)) {
            throw new \InvalidArgumentException('non-nullable minimum_payment_amount cannot be null');
        }
        $this->container['minimum_payment_amount'] = $minimum_payment_amount;

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


