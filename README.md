# fuse-php

## Quick start
Documentation for each method, request param, and response field are available in docstrings and will appear on hover in most modern editors.

Install
```
composer require cluttr-eng/fuse-php:VERSION
```

```
<?php

namespace Fuse\Tests;

use FuseClient\Configuration;
use FuseClient\HeaderSelector;
use FuseClient\Api\FuseApi;
use FuseClient\Model\CreateSessionRequest;
use FuseClient\Model\Aggregator;
use FuseClient\Model\Product;
use FuseClient\Model\CountryCode;
use FuseClient\Model\Entity;
use FuseClient\Model\CreateLinkTokenRequest;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class CustomHeaderSelector extends HeaderSelector
{
    /**
     * @param string[] $accept
     * @param string   $contentType
     * @param bool     $isMultipart
     * @return string[]
     */
    public function selectHeaders(array $accept, string $contentType, bool $isMultipart): array
    {
        $headers = parent::selectHeaders($accept, $contentType, $isMultipart);

        // Add the custom headers
        $headers['Plaid-Client-Id'] = "my-plaid-client-id";  // get value from environment or your logic
        $headers['Plaid-Secret'] = "my-plaid-secret";  // get value from environment or your logic

        return $headers;
    }
}

class FuseTest extends TestCase {
    public function testAddition() {
        $config = Configuration::getDefaultConfiguration()->setHost(getenv('BASE_URL'));

        $config = Configuration::getDefaultConfiguration()->setApiKey('Fuse-Api-Key', 'my-fuse-api-key');
        $config = Configuration::getDefaultConfiguration()->setApiKey('Fuse-Client-Id', 'my-fuse-client-id');

        $customHeaderSelector = new CustomHeaderSelector();

        $apiInstance = new FuseApi(
            new Client(),
            $config,
            $customHeaderSelector
        );


        //If you are using web SDKs, pass in the "is_web_view" property and set it to false, otherwise the Fuse frontend will not work. 
        $createSessionRequest = new CreateSessionRequest();

        $createSessionRequest['supported_financial_institution_aggregators'] = [
            Aggregator::PLAID
        ];

        $createSessionRequest['products'] = [
            Product::ACCOUNT_DETAILS,
            Product::BALANCE
        ];

        $createSessionRequest['country_codes'] = [
            CountryCode::US,
        ];

        $entity = new Entity();
        $entity['id'] = "entity-id";
        $createSessionRequest['entity'] = $entity;

        $create_session_response = $apiInstance->createSession($createSessionRequest);

        $createLinkTokenRequest = new CreateLinkTokenRequest();

        $createLinkTokenRequest['institution_id'] = "a504e026-7cec-4dc0-9449-29e0997f6a62"; //First independent bank
        $createLinkTokenRequest['session_client_secret'] = $create_session_response['client_secret'];
        $createLinkTokenRequest['entity'] = $entity;
        $createLinkTokenRequest['client_name'] = 'Fuse';

        $create_link_token_response = $apiInstance->createLinkToken($createLinkTokenRequest);

    }
}
```
