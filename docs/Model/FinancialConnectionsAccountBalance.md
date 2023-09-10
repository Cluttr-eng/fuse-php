# # FinancialConnectionsAccountBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_account_id** | **string** | Remote Account Id of the transaction, ie Plaid Account Id |
**available** | **float** | Amount in cents after factoring in pending balances. The format of this value is a double. For accounts with credit features, the available funds generally equal the credit limit. Some institutions may not provide an available balance calculation. If this is the case, Fuse will return a null value for the available balance. To ensure you have the most accurate information, we recommend obtaining the current balance by using &#39;balance.available || balance.current&#39;. | [optional]
**current** | **float** | Amount in cents without factoring in pending balances. The format of this value is a double. | [optional]
**iso_currency_code** | **string** | The ISO-4217 currency code of the balance. | [optional]
**last_updated_date** | **string** | The last time the account balance was updated, represented as an ISO 8601 timestamp (YYYY-MM-DDTHH:mm:ssZ). This value may not be available for some accounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
