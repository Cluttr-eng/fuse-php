# # FinancialConnectionsInvestmentSecurity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | Remote Id of the security, ie Plaid or Snaptrade security id |
**symbol** | **string** | The trading symbol for publicly traded securities, or a short identifier if available. |
**isin** | **string** | The International Securities Identification Number (ISIN) uniquely identifies the security. | [optional]
**sedol** | **string** | The Stock Exchange Daily Official List (SEDOL) code uniquely identifies the security, primarily used in the United Kingdom and Ireland. | [optional]
**cusip** | **string** | The Committee on Uniform Securities Identification Procedures (CUSIP) number uniquely identifies the security, primarily used in the United States and Canada. | [optional]
**close_price** | **float** | The closing price of the security, in cents, at the end of the most recent trading day. The format of this value is a double. | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  |
**name** | **string** | A descriptive name for the security, suitable for display. | [optional]
**type** | [**\OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurityType**](FinancialConnectionsInvestmentSecurityType.md) |  | [optional]
**exchange** | [**\OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurityExchange**](FinancialConnectionsInvestmentSecurityExchange.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
