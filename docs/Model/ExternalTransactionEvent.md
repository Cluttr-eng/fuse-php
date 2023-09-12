# # ExternalTransactionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the transaction |
**event_type** | **string** |  |
**status** | [**\FuseClient\Model\ExternalTransactionEventStatus**](ExternalTransactionEventStatus.md) |  |
**amount** | **float** | Amount in cents associated with the transaction. Use positive values to represent money going out and negative to represent money going in. |
**country_code** | **string** |  | [optional] [default to 'US']
**iso_currency_code** | **string** | The ISO-4217 currency code. |
**transaction_type** | [**\FuseClient\Model\TransactionEventType**](TransactionEventType.md) |  | [optional]
**transaction_description** | **string** |  | [optional]
**transaction_owner_type** | **string** |  | [optional] [default to 'consumer']
**merchant_name** | **string** |  |
**timestamp** | **string** | Datetime of the transaction In ISO-8601 format |
**balance** | **float** | The running balance of the account after the transaction has occurred, in cents | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
