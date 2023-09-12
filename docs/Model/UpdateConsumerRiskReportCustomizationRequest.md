# # UpdateConsumerRiskReportCustomizationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeframe** | [**\FuseClient\Model\ConsumerRiskReportTimeFrame**](ConsumerRiskReportTimeFrame.md) |  | [optional]
**min_limit** | **float** | The minimum allowed limit, in cents. | [optional]
**max_limit** | **float** | The maximum allowed limit, in cents. | [optional]
**risk_tolerance** | **float** | This parameter indicates the risk tolerance associated with spend limits. A high risk tolerance allow for higher limits, increasing both potential gains and losses. A Lower risk tolerance enforces strict limits, reducing the potential for loss but also limiting transaction volume for reliable users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
