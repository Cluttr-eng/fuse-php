# # TransactionToEnrich

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the transaction that to help you tie data back to your systems. |
**description** | **string** | The name of the merchant if available or a description of the transaction. |
**mcc** | **string** | The merchant category code. | [optional]
**amount** | **float** | The amount of the transaction in cents, in the currency of the account. Must be a positive value. Use the type field to indicate the direction. |
**direction** | **string** | The direction of the transaction. |
**country_code** | **string** |  | [optional] [default to 'US']
**iso_currency_code** | **string** |  | [optional] [default to 'USD']
**date** | **string** | The date the transaction was posted. | [optional]
**owner_type** | **string** |  | [optional] [default to 'consumer']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
