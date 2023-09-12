# # CreateSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supported_financial_institution_aggregators** | [**\FuseClient\Model\Aggregator[]**](Aggregator.md) |  |
**products** | [**\FuseClient\Model\Product[]**](Product.md) | List of products that you would like the institutions to support |
**country_codes** | [**\FuseClient\Model\CountryCode[]**](CountryCode.md) | List of country codes that you would like the institutions to support | [optional]
**entity** | [**\FuseClient\Model\Entity**](Entity.md) |  |
**access_token** | **string** | The fuse access token for an existing financial connection. This will perform the process to reconnect an existing disconnected account. | [optional]
**is_web_view** | **bool** | Set to false for web SDKs (e.g., React), and true for mobile SDKs (e.g., React Native, Flutter, iOS, Android). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
