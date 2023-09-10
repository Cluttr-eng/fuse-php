# # WebhookEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\WebhookType**](WebhookType.md) |  |
**financial_connection_id** | **string** | Financial connection id associated with the webhook |
**environment** | **string** |  |
**source** | [**\OpenAPI\Client\Model\WebhookSource**](WebhookSource.md) |  |
**verification_token** | **string** | Aggregator verification data needed to verify the webhook | [optional]
**asset_report_id** | **string** | Exists for assets.report_ready webhooks | [optional]
**historical_transactions_available** | **bool** | Exists for transactions.updates webhooks. Indicates if historical transaction information (up to 24 months) is ready to be queried. | [optional]
**removed_transaction_ids** | **string[]** | Exists for transactions.updates webhooks. Currently only supported by Plaid. | [optional]
**remote_data** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
