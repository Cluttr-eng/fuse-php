# # ExchangeFinancialConnectionsPublicTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Token used for querying data on the user, ie account details, balances etc. This does NOT expire and should be stored securely. |
**financial_connection_id** | **string** | The id of the new financial connection. Every webhook will be sent with this id. Use this id when calling the GET /financial_connection/${financial_connection_id} endpoint. |
**institution** | [**\OpenAPI\Client\Model\FinancialInstitution**](FinancialInstitution.md) |  | [optional]
**aggregator** | [**\OpenAPI\Client\Model\Aggregator**](Aggregator.md) |  |
**request_id** | **string** | An identifier that is exclusive to the request and can serve as a means for investigating and resolving issues. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
