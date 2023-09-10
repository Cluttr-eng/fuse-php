# OpenAPI\Client\FuseApi

All URIs are relative to https://sandbox-api.letsfuse.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountEvents()**](FuseApi.md#addAccountEvents) | **POST** /v1/accounts/{account_id}/events |  |
| [**createAssetReport()**](FuseApi.md#createAssetReport) | **POST** /v1/financial_connections/asset_report/create |  |
| [**createConsumerRiskReport()**](FuseApi.md#createConsumerRiskReport) | **POST** /v1/risk_report/consumer |  |
| [**createConsumerRiskReportCustomization()**](FuseApi.md#createConsumerRiskReportCustomization) | **POST** /v1/risk_report/consumer/customization |  |
| [**createLinkToken()**](FuseApi.md#createLinkToken) | **POST** /v1/link/token |  |
| [**createSession()**](FuseApi.md#createSession) | **POST** /v1/session |  |
| [**deleteFinancialConnection()**](FuseApi.md#deleteFinancialConnection) | **DELETE** /v1/financial_connections/{financial_connection_id_to_delete} | Delete a financial connection |
| [**enrichTransactions()**](FuseApi.md#enrichTransactions) | **POST** /v1/transactions/enrich |  |
| [**exchangeFinancialConnectionsPublicToken()**](FuseApi.md#exchangeFinancialConnectionsPublicToken) | **POST** /v1/financial_connections/public_token/exchange |  |
| [**getAssetReport()**](FuseApi.md#getAssetReport) | **POST** /v1/financial_connections/asset_report |  |
| [**getConsumerRiskReport()**](FuseApi.md#getConsumerRiskReport) | **GET** /v1/risk_report/consumer/{consumer_risk_report_id} | Get consumer risk report |
| [**getEntity()**](FuseApi.md#getEntity) | **GET** /v1/entities/{entity_id} | Get entity |
| [**getFinanceScore()**](FuseApi.md#getFinanceScore) | **GET** /v1/accounts/{account_id}/finance_score | Get finance score |
| [**getFinancialConnection()**](FuseApi.md#getFinancialConnection) | **GET** /v1/financial_connections/{financial_connection_id} | Get financial connection details |
| [**getFinancialConnectionsAccountDetails()**](FuseApi.md#getFinancialConnectionsAccountDetails) | **POST** /v1/financial_connections/accounts/details | Get account details |
| [**getFinancialConnectionsAccountStatement()**](FuseApi.md#getFinancialConnectionsAccountStatement) | **POST** /v1/financial_connections/accounts/statement |  |
| [**getFinancialConnectionsAccounts()**](FuseApi.md#getFinancialConnectionsAccounts) | **POST** /v1/financial_connections/accounts | Get accounts |
| [**getFinancialConnectionsBalances()**](FuseApi.md#getFinancialConnectionsBalances) | **POST** /v1/financial_connections/balances | Get balances |
| [**getFinancialConnectionsOwners()**](FuseApi.md#getFinancialConnectionsOwners) | **POST** /v1/financial_connections/owners | Get account owners |
| [**getFinancialConnectionsTransactions()**](FuseApi.md#getFinancialConnectionsTransactions) | **POST** /v1/financial_connections/transactions | Get transactions |
| [**getFinancialInstitution()**](FuseApi.md#getFinancialInstitution) | **GET** /v1/financial_connections/institutions/{institution_id} | Get a financial institution |
| [**getInvestmentHoldings()**](FuseApi.md#getInvestmentHoldings) | **POST** /v1/financial_connections/investments/holdings | Get investment holdings |
| [**getInvestmentTransactions()**](FuseApi.md#getInvestmentTransactions) | **POST** /v1/financial_connections/investments/transactions | Get investment transactions |
| [**migrateFinancialConnection()**](FuseApi.md#migrateFinancialConnection) | **POST** /v1/financial_connections/migrate | Migrate financial connection |
| [**refreshAssetReport()**](FuseApi.md#refreshAssetReport) | **POST** /v1/financial_connections/asset_report/refresh |  |
| [**syncFinancialConnectionsData()**](FuseApi.md#syncFinancialConnectionsData) | **POST** /v1/financial_connections/sync | Sync financial connections data |
| [**updateConsumerRiskReportCustomization()**](FuseApi.md#updateConsumerRiskReportCustomization) | **POST** /v1/risk_report/consumer/customization/{consumer_risk_report_customization_id} | Update consumer risk report customization |
| [**v1FinancialConnectionsLiabilitiesPost()**](FuseApi.md#v1FinancialConnectionsLiabilitiesPost) | **POST** /v1/financial_connections/liabilities | Get liabilities |


## `addAccountEvents()`

```php
addAccountEvents($account_id, $add_account_events_request): \OpenAPI\Client\Model\AddAccountEventsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$add_account_events_request = new \OpenAPI\Client\Model\AddAccountEventsRequest(); // \OpenAPI\Client\Model\AddAccountEventsRequest

try {
    $result = $apiInstance->addAccountEvents($account_id, $add_account_events_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->addAccountEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **add_account_events_request** | [**\OpenAPI\Client\Model\AddAccountEventsRequest**](../Model/AddAccountEventsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AddAccountEventsResponse**](../Model/AddAccountEventsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetReport()`

```php
createAssetReport($create_asset_report_request): \OpenAPI\Client\Model\CreateAssetReportResponse
```



Use this endpoint to generate an Asset Report for a user. For Plaid, you will need to have the assets product enabled on your plaid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_asset_report_request = new \OpenAPI\Client\Model\CreateAssetReportRequest(); // \OpenAPI\Client\Model\CreateAssetReportRequest

try {
    $result = $apiInstance->createAssetReport($create_asset_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->createAssetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_asset_report_request** | [**\OpenAPI\Client\Model\CreateAssetReportRequest**](../Model/CreateAssetReportRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateAssetReportResponse**](../Model/CreateAssetReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConsumerRiskReport()`

```php
createConsumerRiskReport($create_consumer_risk_report_request): \OpenAPI\Client\Model\CreateConsumerRiskReportResponse
```



Starts the background process that will calculate the consumer risk report depending on the customization passed in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_consumer_risk_report_request = new \OpenAPI\Client\Model\CreateConsumerRiskReportRequest(); // \OpenAPI\Client\Model\CreateConsumerRiskReportRequest

try {
    $result = $apiInstance->createConsumerRiskReport($create_consumer_risk_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->createConsumerRiskReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_consumer_risk_report_request** | [**\OpenAPI\Client\Model\CreateConsumerRiskReportRequest**](../Model/CreateConsumerRiskReportRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateConsumerRiskReportResponse**](../Model/CreateConsumerRiskReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConsumerRiskReportCustomization()`

```php
createConsumerRiskReportCustomization($create_consumer_risk_report_customization_request): \OpenAPI\Client\Model\CreateConsumerRiskReportCustomizationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_consumer_risk_report_customization_request = new \OpenAPI\Client\Model\CreateConsumerRiskReportCustomizationRequest(); // \OpenAPI\Client\Model\CreateConsumerRiskReportCustomizationRequest

try {
    $result = $apiInstance->createConsumerRiskReportCustomization($create_consumer_risk_report_customization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->createConsumerRiskReportCustomization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_consumer_risk_report_customization_request** | [**\OpenAPI\Client\Model\CreateConsumerRiskReportCustomizationRequest**](../Model/CreateConsumerRiskReportCustomizationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateConsumerRiskReportCustomizationResponse**](../Model/CreateConsumerRiskReportCustomizationResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLinkToken()`

```php
createLinkToken($create_link_token_request): \OpenAPI\Client\Model\CreateLinkTokenResponse
```



Create a link token to start the process of a user connecting to a specific financial institution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_link_token_request = new \OpenAPI\Client\Model\CreateLinkTokenRequest(); // \OpenAPI\Client\Model\CreateLinkTokenRequest

try {
    $result = $apiInstance->createLinkToken($create_link_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->createLinkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_link_token_request** | [**\OpenAPI\Client\Model\CreateLinkTokenRequest**](../Model/CreateLinkTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateLinkTokenResponse**](../Model/CreateLinkTokenResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSession()`

```php
createSession($create_session_request): \OpenAPI\Client\Model\CreateSessionResponse
```



Creates a session that returns a client_secret which is required as a parameter when initializing the Fuse SDK.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_session_request = new \OpenAPI\Client\Model\CreateSessionRequest(); // \OpenAPI\Client\Model\CreateSessionRequest

try {
    $result = $apiInstance->createSession($create_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_session_request** | [**\OpenAPI\Client\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateSessionResponse**](../Model/CreateSessionResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFinancialConnection()`

```php
deleteFinancialConnection($financial_connection_id_to_delete): \OpenAPI\Client\Model\DeleteFinancialConnectionResponse
```

Delete a financial connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financial_connection_id_to_delete = 'financial_connection_id_to_delete_example'; // string

try {
    $result = $apiInstance->deleteFinancialConnection($financial_connection_id_to_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->deleteFinancialConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financial_connection_id_to_delete** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\DeleteFinancialConnectionResponse**](../Model/DeleteFinancialConnectionResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enrichTransactions()`

```php
enrichTransactions($fuse_client_id, $fuse_api_key, $enrich_transactions_request): \OpenAPI\Client\Model\EnrichTransactionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fuse_client_id = 'fuse_client_id_example'; // string
$fuse_api_key = 'fuse_api_key_example'; // string
$enrich_transactions_request = new \OpenAPI\Client\Model\EnrichTransactionsRequest(); // \OpenAPI\Client\Model\EnrichTransactionsRequest

try {
    $result = $apiInstance->enrichTransactions($fuse_client_id, $fuse_api_key, $enrich_transactions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->enrichTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fuse_client_id** | **string**|  | |
| **fuse_api_key** | **string**|  | |
| **enrich_transactions_request** | [**\OpenAPI\Client\Model\EnrichTransactionsRequest**](../Model/EnrichTransactionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EnrichTransactionsResponse**](../Model/EnrichTransactionsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeFinancialConnectionsPublicToken()`

```php
exchangeFinancialConnectionsPublicToken($exchange_financial_connections_public_token_request): \OpenAPI\Client\Model\ExchangeFinancialConnectionsPublicTokenResponse
```



API to exchange a public token for an access token and financial connection id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange_financial_connections_public_token_request = new \OpenAPI\Client\Model\ExchangeFinancialConnectionsPublicTokenRequest(); // \OpenAPI\Client\Model\ExchangeFinancialConnectionsPublicTokenRequest

try {
    $result = $apiInstance->exchangeFinancialConnectionsPublicToken($exchange_financial_connections_public_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->exchangeFinancialConnectionsPublicToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_financial_connections_public_token_request** | [**\OpenAPI\Client\Model\ExchangeFinancialConnectionsPublicTokenRequest**](../Model/ExchangeFinancialConnectionsPublicTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExchangeFinancialConnectionsPublicTokenResponse**](../Model/ExchangeFinancialConnectionsPublicTokenResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetReport()`

```php
getAssetReport($get_asset_report_request): \OpenAPI\Client\Model\RefreshAssetReportResponse
```



Retrieves the Asset Report in JSON format. For Plaid, you will need to have the assets product enabled on your plaid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_asset_report_request = {
	"asset_report_token": "fuse_ar_dev_1MV8sa"
}; // \OpenAPI\Client\Model\GetAssetReportRequest

try {
    $result = $apiInstance->getAssetReport($get_asset_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getAssetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_asset_report_request** | [**\OpenAPI\Client\Model\GetAssetReportRequest**](../Model/GetAssetReportRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RefreshAssetReportResponse**](../Model/RefreshAssetReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsumerRiskReport()`

```php
getConsumerRiskReport($consumer_risk_report_id, $recalculate): \OpenAPI\Client\Model\GetConsumerRiskReportResponse
```

Get consumer risk report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_risk_report_id = 'consumer_risk_report_id_example'; // string
$recalculate = True; // bool | An optional boolean parameter. If set to true, the system will recalculate before returning the risk report. If omitted or set to false, the current risk report will be returned without recalculation.

try {
    $result = $apiInstance->getConsumerRiskReport($consumer_risk_report_id, $recalculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getConsumerRiskReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_risk_report_id** | **string**|  | |
| **recalculate** | **bool**| An optional boolean parameter. If set to true, the system will recalculate before returning the risk report. If omitted or set to false, the current risk report will be returned without recalculation. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetConsumerRiskReportResponse**](../Model/GetConsumerRiskReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntity()`

```php
getEntity($entity_id): \OpenAPI\Client\Model\GetEntityResponse
```

Get entity

An entity is automatically created after a successful connection. The id of the entity is what is set when calling the 'create session' endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntity($entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetEntityResponse**](../Model/GetEntityResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceScore()`

```php
getFinanceScore($account_id): \OpenAPI\Client\Model\GetFinanceScoreResponse
```

Get finance score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getFinanceScore($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinanceScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinanceScoreResponse**](../Model/GetFinanceScoreResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnection()`

```php
getFinancialConnection($financial_connection_id): \OpenAPI\Client\Model\GetFinancialConnectionResponse
```

Get financial connection details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financial_connection_id = 'financial_connection_id_example'; // string

try {
    $result = $apiInstance->getFinancialConnection($financial_connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financial_connection_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionResponse**](../Model/GetFinancialConnectionResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsAccountDetails()`

```php
getFinancialConnectionsAccountDetails($get_financial_connections_account_details_request): \OpenAPI\Client\Model\GetFinancialConnectionsAccountDetailsResponse
```

Get account details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_account_details_request = new \OpenAPI\Client\Model\GetFinancialConnectionsAccountDetailsRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsAccountDetailsRequest

try {
    $result = $apiInstance->getFinancialConnectionsAccountDetails($get_financial_connections_account_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_account_details_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsAccountDetailsRequest**](../Model/GetFinancialConnectionsAccountDetailsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsAccountDetailsResponse**](../Model/GetFinancialConnectionsAccountDetailsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsAccountStatement()`

```php
getFinancialConnectionsAccountStatement($get_financial_connections_account_statement_request): \OpenAPI\Client\Model\GetFinancialConnectionsAccountStatementResponse
```



Retrieves an account statement for the given financial connection, account and date. This endpoint may time out so we recommend using a retry mechanism with exponential backoff.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_account_statement_request = new \OpenAPI\Client\Model\GetFinancialConnectionsAccountStatementRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsAccountStatementRequest

try {
    $result = $apiInstance->getFinancialConnectionsAccountStatement($get_financial_connections_account_statement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_account_statement_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsAccountStatementRequest**](../Model/GetFinancialConnectionsAccountStatementRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsAccountStatementResponse**](../Model/GetFinancialConnectionsAccountStatementResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsAccounts()`

```php
getFinancialConnectionsAccounts($get_financial_connections_accounts_request): \OpenAPI\Client\Model\GetFinancialConnectionsAccountsResponse
```

Get accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_accounts_request = new \OpenAPI\Client\Model\GetFinancialConnectionsAccountsRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsAccountsRequest

try {
    $result = $apiInstance->getFinancialConnectionsAccounts($get_financial_connections_accounts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_accounts_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsAccountsRequest**](../Model/GetFinancialConnectionsAccountsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsAccountsResponse**](../Model/GetFinancialConnectionsAccountsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsBalances()`

```php
getFinancialConnectionsBalances($get_financial_connections_balance_request): \OpenAPI\Client\Model\GetFinancialConnectionsBalanceResponse
```

Get balances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_balance_request = new \OpenAPI\Client\Model\GetFinancialConnectionsBalanceRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsBalanceRequest

try {
    $result = $apiInstance->getFinancialConnectionsBalances($get_financial_connections_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_balance_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsBalanceRequest**](../Model/GetFinancialConnectionsBalanceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsBalanceResponse**](../Model/GetFinancialConnectionsBalanceResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsOwners()`

```php
getFinancialConnectionsOwners($get_financial_connections_owners_request): \OpenAPI\Client\Model\GetFinancialConnectionsOwnersResponse
```

Get account owners

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_owners_request = new \OpenAPI\Client\Model\GetFinancialConnectionsOwnersRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsOwnersRequest

try {
    $result = $apiInstance->getFinancialConnectionsOwners($get_financial_connections_owners_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsOwners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_owners_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsOwnersRequest**](../Model/GetFinancialConnectionsOwnersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsOwnersResponse**](../Model/GetFinancialConnectionsOwnersResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialConnectionsTransactions()`

```php
getFinancialConnectionsTransactions($get_financial_connections_transactions_request): \OpenAPI\Client\Model\GetFinancialConnectionsTransactionsResponse
```

Get transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_financial_connections_transactions_request = new \OpenAPI\Client\Model\GetFinancialConnectionsTransactionsRequest(); // \OpenAPI\Client\Model\GetFinancialConnectionsTransactionsRequest

try {
    $result = $apiInstance->getFinancialConnectionsTransactions($get_financial_connections_transactions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialConnectionsTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_financial_connections_transactions_request** | [**\OpenAPI\Client\Model\GetFinancialConnectionsTransactionsRequest**](../Model/GetFinancialConnectionsTransactionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialConnectionsTransactionsResponse**](../Model/GetFinancialConnectionsTransactionsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialInstitution()`

```php
getFinancialInstitution($institution_id): \OpenAPI\Client\Model\GetFinancialInstitutionResponse
```

Get a financial institution

Receive metadata for a financial institution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = 'institution_id_example'; // string

try {
    $result = $apiInstance->getFinancialInstitution($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getFinancialInstitution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetFinancialInstitutionResponse**](../Model/GetFinancialInstitutionResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvestmentHoldings()`

```php
getInvestmentHoldings($get_investment_holdings_request): \OpenAPI\Client\Model\GetInvestmentHoldingsResponse
```

Get investment holdings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_investment_holdings_request = new \OpenAPI\Client\Model\GetInvestmentHoldingsRequest(); // \OpenAPI\Client\Model\GetInvestmentHoldingsRequest

try {
    $result = $apiInstance->getInvestmentHoldings($get_investment_holdings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getInvestmentHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_investment_holdings_request** | [**\OpenAPI\Client\Model\GetInvestmentHoldingsRequest**](../Model/GetInvestmentHoldingsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetInvestmentHoldingsResponse**](../Model/GetInvestmentHoldingsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvestmentTransactions()`

```php
getInvestmentTransactions($get_investment_transactions_request): \OpenAPI\Client\Model\GetInvestmentTransactionsResponse
```

Get investment transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_investment_transactions_request = new \OpenAPI\Client\Model\GetInvestmentTransactionsRequest(); // \OpenAPI\Client\Model\GetInvestmentTransactionsRequest

try {
    $result = $apiInstance->getInvestmentTransactions($get_investment_transactions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->getInvestmentTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_investment_transactions_request** | [**\OpenAPI\Client\Model\GetInvestmentTransactionsRequest**](../Model/GetInvestmentTransactionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetInvestmentTransactionsResponse**](../Model/GetInvestmentTransactionsResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrateFinancialConnection()`

```php
migrateFinancialConnection($migrate_financial_connections_token_request): \OpenAPI\Client\Model\MigrateFinancialConnectionsTokenResponse
```

Migrate financial connection

This endpoint migrates financial connections from Plaid or MX into the unified Fuse API. It accepts a POST request with connection data, aggregator, entity, and Fuse products, and responds with a JSON payload containing the migrated connection's data, access token, ID, and request ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$migrate_financial_connections_token_request = new \OpenAPI\Client\Model\MigrateFinancialConnectionsTokenRequest(); // \OpenAPI\Client\Model\MigrateFinancialConnectionsTokenRequest

try {
    $result = $apiInstance->migrateFinancialConnection($migrate_financial_connections_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->migrateFinancialConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **migrate_financial_connections_token_request** | [**\OpenAPI\Client\Model\MigrateFinancialConnectionsTokenRequest**](../Model/MigrateFinancialConnectionsTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MigrateFinancialConnectionsTokenResponse**](../Model/MigrateFinancialConnectionsTokenResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshAssetReport()`

```php
refreshAssetReport($refresh_asset_report_request): \OpenAPI\Client\Model\AssetReportResponse
```



Refreshes the Asset Report in JSON format. For Plaid, you will need to have the assets product enabled on your plaid account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_asset_report_request = {"asset_report_token": "fca_dev_dev_6f12f5bb-22dd-4855-b918-f47ec439198a",
  "asset_report_id": "1f414183-220c-44f5-b0c8-bc0e6d4053bb",
  "request_id": "1764d296-b5bc-4e7f-a457-588f77200793"}; // \OpenAPI\Client\Model\RefreshAssetReportRequest

try {
    $result = $apiInstance->refreshAssetReport($refresh_asset_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->refreshAssetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refresh_asset_report_request** | [**\OpenAPI\Client\Model\RefreshAssetReportRequest**](../Model/RefreshAssetReportRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AssetReportResponse**](../Model/AssetReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncFinancialConnectionsData()`

```php
syncFinancialConnectionsData($fuse_verification, $body): \OpenAPI\Client\Model\SyncFinancialConnectionsDataResponse
```

Sync financial connections data

Call this endpoint upon receiving a financial_connection.sync_data webhook. This will keep the financial connections data up to date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fuse_verification = 'fuse_verification_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->syncFinancialConnectionsData($fuse_verification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->syncFinancialConnectionsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fuse_verification** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\OpenAPI\Client\Model\SyncFinancialConnectionsDataResponse**](../Model/SyncFinancialConnectionsDataResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConsumerRiskReportCustomization()`

```php
updateConsumerRiskReportCustomization($consumer_risk_report_customization_id, $update_consumer_risk_report_customization_request): \OpenAPI\Client\Model\UpdateConsumerRiskReportCustomizationResponse
```

Update consumer risk report customization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_risk_report_customization_id = 'consumer_risk_report_customization_id_example'; // string
$update_consumer_risk_report_customization_request = new \OpenAPI\Client\Model\UpdateConsumerRiskReportCustomizationRequest(); // \OpenAPI\Client\Model\UpdateConsumerRiskReportCustomizationRequest

try {
    $result = $apiInstance->updateConsumerRiskReportCustomization($consumer_risk_report_customization_id, $update_consumer_risk_report_customization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->updateConsumerRiskReportCustomization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_risk_report_customization_id** | **string**|  | |
| **update_consumer_risk_report_customization_request** | [**\OpenAPI\Client\Model\UpdateConsumerRiskReportCustomizationRequest**](../Model/UpdateConsumerRiskReportCustomizationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateConsumerRiskReportCustomizationResponse**](../Model/UpdateConsumerRiskReportCustomizationResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1FinancialConnectionsLiabilitiesPost()`

```php
v1FinancialConnectionsLiabilitiesPost($get_liabilities_request): \OpenAPI\Client\Model\GetLiabilitiesResponse
```

Get liabilities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FuseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_liabilities_request = new \OpenAPI\Client\Model\GetLiabilitiesRequest(); // \OpenAPI\Client\Model\GetLiabilitiesRequest

try {
    $result = $apiInstance->v1FinancialConnectionsLiabilitiesPost($get_liabilities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuseApi->v1FinancialConnectionsLiabilitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_liabilities_request** | [**\OpenAPI\Client\Model\GetLiabilitiesRequest**](../Model/GetLiabilitiesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetLiabilitiesResponse**](../Model/GetLiabilitiesResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
