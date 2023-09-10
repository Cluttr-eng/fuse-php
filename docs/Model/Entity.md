# # Entity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the user or business account that is connecting to an institution. Use this id when calling the GET /entities/${entity_id} endpoint. |
**name** | **string** | Name for the user or business account. Required for EU connections. | [optional]
**email** | **string** | Email address associated with the user or business account. One of email/phone is required for EU connections. | [optional]
**phone** | **string** | Phone number associated with the user or business account. One of email/phone is required for EU connections. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
