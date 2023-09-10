# # CreateConsumerRiskReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | A unique ID representing the bank account that this risk report is calculated for. Typically this will be a bank connection account ID from your application. It is currently used as a means of connecting events to the consumer risk report. |
**iso_currency_code** | **string** | The ISO-4217 currency code of the transaction |
**end_user_name** | **string** | The name of the end user associated with this consumer risk report. | [optional]
**customization_id** | **string** | This is used to determine the timeframe and other metadata for the consumer risk report. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
