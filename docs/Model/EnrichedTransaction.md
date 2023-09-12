# # EnrichedTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A original ID for the transaction that to help you tie data back to your systems. |
**merchant_id** | **string** | A Fuse defined, unique ID for the merchant associated with this transaction. | [optional]
**merchant_name** | **string** | The name of the merchant. | [optional]
**logo** | [**\FuseClient\Model\MerchantLogo**](MerchantLogo.md) |  | [optional]
**categories** | **string[]** | Hierarchical transaction categories: Each element narrows down from parent to nested sub-categories. Example: [&#39;personnel&#39;, &#39;employee&#39;, &#39;payroll&#39;]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
