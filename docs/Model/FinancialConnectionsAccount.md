# # FinancialConnectionsAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | Remote Id of the account, ie Plaid or Teller account id |
**currency** | **string** | The ISO-4217 currency code of the account. |
**fingerprint** | **string** | Uniquely identifies this account across all accounts for a single financial connection. Used for reconnection deduplication. See more information here: https://letsfuse.readme.io/docs/duplicate-accounts |
**institution** | [**\OpenAPI\Client\Model\FinancialConnectionsAccountInstitution**](FinancialConnectionsAccountInstitution.md) |  | [optional]
**mask** | **string** | The partial account number. | [optional]
**name** | **string** | The account&#39;s name, ie &#39;My Checking&#39; |
**type** | [**\OpenAPI\Client\Model\AccountType**](AccountType.md) |  |
**subtype** | [**\OpenAPI\Client\Model\AccountSubtype**](AccountSubtype.md) |  | [optional]
**balance** | [**\OpenAPI\Client\Model\FinancialConnectionsAccountCachedBalance**](FinancialConnectionsAccountCachedBalance.md) |  |
**remote_data** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
