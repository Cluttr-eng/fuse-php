# # AddAccountEventsRequestEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the transaction |
**event_type** | **string** |  |
**status** | [**\OpenAPI\Client\Model\InAppTransactionEventStatus**](InAppTransactionEventStatus.md) |  |
**amount** | **float** |  |
**country_code** | **string** |  | [optional] [default to 'US']
**iso_currency_code** | **string** | The ISO-4217 currency code. |
**transaction_type** | [**\OpenAPI\Client\Model\TransactionEventType**](TransactionEventType.md) |  | [optional]
**transaction_description** | **string** |  | [optional]
**transaction_owner_type** | **string** |  | [optional] [default to 'consumer']
**merchant_name** | **string** |  |
**timestamp** | **string** | Datetime that the balance is accurate for In ISO-8601 format |
**balance** | **float** | The running balance of the account after the transaction has occurred, in cents. | [optional]
**available** | **float** | The current balance of the account factoring in pending transactions. | [optional]
**current** | **float** | The current balance of the account without factoring in pending transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
