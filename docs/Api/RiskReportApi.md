# FuseClient\RiskReportApi

All URIs are relative to https://sandbox-api.letsfuse.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteConsumerRiskReport()**](RiskReportApi.md#deleteConsumerRiskReport) | **DELETE** /v1/risk_report/consumer/{consumer_risk_report_id} | Delete consumer risk report |
| [**getConsumerRiskReportCustomization()**](RiskReportApi.md#getConsumerRiskReportCustomization) | **GET** /v1/risk_report/consumer/customization/{consumer_risk_report_customization_id} | Get consumer risk report customization |


## `deleteConsumerRiskReport()`

```php
deleteConsumerRiskReport($consumer_risk_report_id, $fuse_client_id, $fuse_api_key): \FuseClient\Model\DeleteConsumerRiskReportResponse
```

Delete consumer risk report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = FuseClient\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FuseClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = FuseClient\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FuseClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new FuseClient\Api\RiskReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_risk_report_id = 'consumer_risk_report_id_example'; // string
$fuse_client_id = 'fuse_client_id_example'; // string
$fuse_api_key = 'fuse_api_key_example'; // string

try {
    $result = $apiInstance->deleteConsumerRiskReport($consumer_risk_report_id, $fuse_client_id, $fuse_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskReportApi->deleteConsumerRiskReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_risk_report_id** | **string**|  | |
| **fuse_client_id** | **string**|  | |
| **fuse_api_key** | **string**|  | |

### Return type

[**\FuseClient\Model\DeleteConsumerRiskReportResponse**](../Model/DeleteConsumerRiskReportResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsumerRiskReportCustomization()`

```php
getConsumerRiskReportCustomization($consumer_risk_report_customization_id, $fuse_client_id, $fuse_api_key): \FuseClient\Model\GetConsumerRiskReportCustomizationResponse
```

Get consumer risk report customization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: fuseApiKey
$config = FuseClient\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FuseClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Api-Key', 'Bearer');

// Configure API key authorization: fuseClientId
$config = FuseClient\Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FuseClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fuse-Client-Id', 'Bearer');


$apiInstance = new FuseClient\Api\RiskReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_risk_report_customization_id = 'consumer_risk_report_customization_id_example'; // string
$fuse_client_id = 'fuse_client_id_example'; // string
$fuse_api_key = 'fuse_api_key_example'; // string

try {
    $result = $apiInstance->getConsumerRiskReportCustomization($consumer_risk_report_customization_id, $fuse_client_id, $fuse_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskReportApi->getConsumerRiskReportCustomization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_risk_report_customization_id** | **string**|  | |
| **fuse_client_id** | **string**|  | |
| **fuse_api_key** | **string**|  | |

### Return type

[**\FuseClient\Model\GetConsumerRiskReportCustomizationResponse**](../Model/GetConsumerRiskReportCustomizationResponse.md)

### Authorization

[fuseApiKey](../../README.md#fuseApiKey), [fuseClientId](../../README.md#fuseClientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
