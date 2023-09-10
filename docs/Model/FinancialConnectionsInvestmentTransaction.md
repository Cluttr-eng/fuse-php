# # FinancialConnectionsInvestmentTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | The remote ID of the Investment transaction |
**remote_account_id** | **string** | Remote Account Id of the transaction, ie Plaid Account Id |
**account_name** | **string** | The name of the account associated with the investment transaction | [optional]
**amount** | **float** | The amount of the investment transaction, in cents. The format of this value is a double. |
**description** | **string** | A description of the investment transaction |
**fees** | **float** | The fees associated with the investment transaction, in cents. The format of this value is a double. |
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  |
**date** | **\DateTime** | The date and time of the investment transaction |
**type** | **string** | The type of the investment transaction (e.g., &#39;buy&#39;, &#39;sell&#39;, &#39;dividend&#39;) |
**subtype** | [**\OpenAPI\Client\Model\FinancialConnectionsInvestmentTransactionSubtype**](FinancialConnectionsInvestmentTransactionSubtype.md) |  | [optional]
**quantity** | **float** | The number of units of the security involved in this transaction |
**price** | **float** | The price of the security involved in this transaction, in cents. The format of this value is a double. |
**security** | [**\OpenAPI\Client\Model\FinancialConnectionsInvestmentSecurity**](FinancialConnectionsInvestmentSecurity.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
