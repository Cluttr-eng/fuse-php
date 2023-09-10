# # FinancialConnectionsAccountCachedBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **float** | The amount of funds available, in cents, to be withdrawn from the account, as determined by the financial institution. The format of this value is a double. Available balance may be cached and is not guaranteed to be up-to-date in realtime unless the value was returned by /financial_connections/balances. For accounts with credit features, the available funds generally equal the credit limit. Some institutions may not provide an available balance calculation. If this is the case, Fuse will return a null value for the available balance. To ensure you have the most accurate information, we recommend obtaining the current balance by using &#39;balance.available || balance.current&#39;. | [optional]
**current** | **float** | Amount without factoring in pending balances, in cents. The format of this value is a double. | [optional]
**iso_currency_code** | **string** | The ISO-4217 currency code of the balance. | [optional]
**last_updated_date** | **string** | The date of the last update to the balance. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
