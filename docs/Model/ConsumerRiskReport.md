# # ConsumerRiskReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**customization_id** | **string** |  |
**spend_limit** | **float** | The total limit for the current timeframe, in cents. |
**current_spend** | **float** | The total current spend in the current timeframe, in cents, without factoring in pending payments. |
**pending_payments_amount** | **float** | The total unpaid amount, in cents, from all timeframes. |
**iso_currency_code** | **string** | The ISO-4217 currency code of the transaction |
**last_updated** | **string** | The datetime of when the consumer risk report was most recently updated, in ISO-8601 format. |
**finance_score** | [**\FuseClient\Model\FinanceScore**](FinanceScore.md) |  |
**predicted_balance** | **float** | Predicted balance for the timeframe. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
