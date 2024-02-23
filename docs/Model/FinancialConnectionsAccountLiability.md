# # FinancialConnectionsAccountLiability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | Remote Id of the account, ie Plaid or Teller account id |
**currency** | **string** | The ISO-4217 currency code of the account. |
**fingerprint** | **string** | Uniquely identifies this account across all accounts for a single financial connection. Used for reconnection deduplication. See more information here: https://letsfuse.readme.io/docs/duplicate-accounts |
**institution** | [**\FuseClient\Model\FinancialConnectionsAccountInstitution**](FinancialConnectionsAccountInstitution.md) |  | [optional]
**mask** | **string** | The partial account number. | [optional]
**name** | **string** | The account&#39;s name, ie &#39;My Checking&#39; |
**type** | [**\FuseClient\Model\AccountType**](AccountType.md) |  |
**subtype** | [**\FuseClient\Model\AccountSubtype**](AccountSubtype.md) |  | [optional]
**balance** | [**\FuseClient\Model\FinancialConnectionsAccountCachedBalance**](FinancialConnectionsAccountCachedBalance.md) |  |
**additional_balances** | [**\FuseClient\Model\FinancialConnectionsAccountCachedBalance[]**](FinancialConnectionsAccountCachedBalance.md) | An array of additional balances. This may be used for investment type accounts where the user can have multiple balances across different currencies. | [optional]
**remote_data** | **object** |  |
**aprs** | [**\FuseClient\Model\FinancialConnectionsAccountLiabilityAllOfAprs[]**](FinancialConnectionsAccountLiabilityAllOfAprs.md) | The various interest rates that apply to the account. If APR data is not available, this array will be empty. | [optional]
**interest_rate_percentage** | **float** | The interest rate on the loan as a percentage. | [optional]
**origination_principal_amount** | **float** | The original principal balance of the loan. | [optional]
**next_payment_due_date** | **string** | The due date for the next payment. The due date is null if a payment is not expected. | [optional]
**last_payment_date** | **string** | The date of the last payment. Dates are returned in an ISO 8601 format (YYYY-MM-DD). | [optional]
**last_payment_amount** | **float** | The amount of the last payment. | [optional]
**minimum_payment_amount** | **float** | The minimum payment required for an account. This can apply to any debt account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
