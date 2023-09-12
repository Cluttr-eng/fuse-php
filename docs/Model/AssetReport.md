# # AssetReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_report_id** | **string** | A unique ID identifying an Asset Report. | [optional]
**asset_report_token** | **string** | A token that can be provided to endpoints such as /asset_report/get or /asset_report/pdf/get to fetch or update an Asset Report. | [optional]
**date_generated** | **string** | The date and time when the Asset Report was created, in ISO 8601 format | [optional]
**days_requested** | **int** | The duration of transaction history you requested | [optional]
**accounts** | [**\FuseClient\Model\AssetReportAccountsInner[]**](AssetReportAccountsInner.md) | An array of Asset Reports, one for each account in the Asset Report. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
