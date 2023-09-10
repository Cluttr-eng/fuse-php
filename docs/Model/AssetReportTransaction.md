# # AssetReportTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | Remote Id of the transaction, ie Plaid or Teller Id |
**remote_account_id** | **string** | Remote Account Id of the transaction, ie Plaid Account Id |
**amount** | **float** | Amount in cents associated with the transaction. The format of this value is a double. Positive values when money moves out of the account; negative values when money moves in. For example, debit card purchases are positive; credit card payments, direct deposits, and refunds are negative. |
**date** | **string** | Date of the transaction (YYYY-MM-DD) |
**description** | **string** | Description of the transaction |
**category** | **string[]** | Categories of the transaction, ie Computers and Electronics. &#39;-&#39; means we could not map the upstream category. |
**merchant** | [**\OpenAPI\Client\Model\TransactionMerchant**](TransactionMerchant.md) |  |
**status** | **string** | The status of the transaction. This will be either posted or pending. |
**iso_currency_code** | **string** | The ISO-4217 currency code of the transaction | [optional]
**remote_data** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
