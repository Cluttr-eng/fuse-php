# # CreateLinkTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**institution_id** | **string** | An id that is unique for an institution. |
**entity** | [**\OpenAPI\Client\Model\Entity**](Entity.md) |  |
**client_name** | **string** | The name of your application. This is what will be displayed to users. |
**session_client_secret** | **string** | The session client secret created from the &#39;Create session client secret&#39; endpoint |
**webhook_url** | **string** | This field allows you to set a unique webhook URL for each individual entity. By specifying an entity-specific webhook URL, you can receive and process data events for each entity separately. If this field is left empty, the organization-wide webhook URL set in the sandbox/production environment will be used as the default for all entities. | [optional]
**mx** | [**\OpenAPI\Client\Model\CreateLinkTokenRequestMx**](CreateLinkTokenRequestMx.md) |  | [optional]
**plaid** | [**\OpenAPI\Client\Model\CreateLinkTokenRequestPlaid**](CreateLinkTokenRequestPlaid.md) |  | [optional]
**teller** | [**\OpenAPI\Client\Model\CreateLinkTokenRequestTeller**](CreateLinkTokenRequestTeller.md) |  | [optional]
**snaptrade** | [**\OpenAPI\Client\Model\CreateLinkTokenRequestSnaptrade**](CreateLinkTokenRequestSnaptrade.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
