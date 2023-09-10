# # SyncTransactionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The access token of the financial institution connection |
**cursor** | **string** | The cursor value represents the last update requested. Providing it will cause the response to only return changes after this update. If omitted, the entire history of updates will be returned, starting with the first-added transactions on the item. | [optional]
**count** | **int** | The number of transaction updates to fetch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
