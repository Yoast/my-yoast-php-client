# Yoast\MyYoastApiClient\ComposerTokenApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiComposerTokensGeneratePost**](ComposerTokenApi.md#apicomposertokensgeneratepost) | **POST** /api/ComposerTokens/generate | Generates a Composer token
[**apiComposerTokensIdDeletePost**](ComposerTokenApi.md#apicomposertokensiddeletepost) | **POST** /api/ComposerTokens/{id}/delete | Disable a composer token
[**apiComposerTokensIdRenamePost**](ComposerTokenApi.md#apicomposertokensidrenamepost) | **POST** /api/ComposerTokens/{id}/rename | Renames a Composer token

# **apiComposerTokensGeneratePost**
> \Yoast\MyYoastApiClient\Model\ComposerToken apiComposerTokensGeneratePost($body)

Generates a Composer token

Generates a personal token for the logged in customer that can be used to download our plugins with Composer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\GenerateDto(); // \Yoast\MyYoastApiClient\Model\GenerateDto | 

try {
    $result = $apiInstance->apiComposerTokensGeneratePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->apiComposerTokensGeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\GenerateDto**](../Model/GenerateDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiComposerTokensIdDeletePost**
> \Yoast\MyYoastApiClient\Model\ComposerToken apiComposerTokensIdDeletePost($id)

Disable a composer token

Renders a single composer token unusable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiComposerTokensIdDeletePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->apiComposerTokensIdDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiComposerTokensIdRenamePost**
> \Yoast\MyYoastApiClient\Model\ComposerToken apiComposerTokensIdRenamePost($body, $id)

Renames a Composer token

Changes the name of a Composer token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\RenameBodyDto(); // \Yoast\MyYoastApiClient\Model\RenameBodyDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiComposerTokensIdRenamePost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->apiComposerTokensIdRenamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\RenameBodyDto**](../Model/RenameBodyDto.md)|  |
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

