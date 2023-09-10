# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | Remote Id of the transaction, ie Plaid or Teller Id |
**fingerprint** | **string** | Uniquely identifies this transaction across all transactions for a single financial connection. Used for reconnection deduplication. This field may or may not be present depending on if a transaction can be uniquely identified. See more information here: https://letsfuse.readme.io/docs/duplicate-accounts | [optional]
**remote_account_id** | **string** | Remote Account Id of the transaction, ie Plaid Account Id |
**amount** | **float** | Amount in cents associated with the transaction. The format of this value is a double.  Positive values when money moves out of the account; negative values when money moves in. For example, debit card purchases are positive; credit card payments, direct deposits, and refunds are negative. |
**date** | **string** | Date of the transaction (YYYY-MM-DD) |
**description** | **string** | Description of the transaction |
**category** | **string[]** | Categories of the transaction, i.e., Computers and Electronics. You can download the categories from [here](https://fuse-public-bucket.s3.amazonaws.com/transaction-categories.csv) |
**merchant** | [**\OpenAPI\Client\Model\TransactionMerchant**](TransactionMerchant.md) |  |
**status** | **string** | The status of the transaction. This will be either posted or pending. |
**type** | **string** | Type of the transaction, ie adjustment. &#39;-&#39; means we were not able to map the upstream type. |
**iso_currency_code** | **string** | The ISO-4217 currency code of the transaction | [optional]
**remote_data** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
