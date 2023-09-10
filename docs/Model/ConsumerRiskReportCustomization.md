# # ConsumerRiskReportCustomization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**timeframe** | [**\OpenAPI\Client\Model\ConsumerRiskReportTimeFrame**](ConsumerRiskReportTimeFrame.md) |  |
**min_limit** | **int** | The minimum allowed limit, in cents. |
**max_limit** | **int** | The maximum allowed limit, in cents. |
**risk_tolerance** | **int** | This parameter indicates the risk tolerance associated with spend limits. A high risk tolerance allow for higher limits, increasing both potential gains and losses. A Lower risk tolerance enforces strict limits, reducing the potential for loss but also limiting transaction volume for reliable users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
