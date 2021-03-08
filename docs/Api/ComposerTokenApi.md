# Yoast\MyYoastApiClient\ComposerTokenApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**composerTokenControllerDisable**](ComposerTokenApi.md#composertokencontrollerdisable) | **POST** /api/ComposerTokens/{id}/delete | Disable a composer token
[**composerTokenControllerGenerate**](ComposerTokenApi.md#composertokencontrollergenerate) | **POST** /api/ComposerTokens/generate | Generates a Composer token
[**composerTokenControllerRename**](ComposerTokenApi.md#composertokencontrollerrename) | **POST** /api/ComposerTokens/{id}/rename | Renames a Composer token

# **composerTokenControllerDisable**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenControllerDisable($id)

Disable a composer token

Renders a single composer token unusable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->composerTokenControllerDisable($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenControllerDisable: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenControllerGenerate**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenControllerGenerate($body)

Generates a Composer token

Generates a personal token for the logged in customer that can be used to download our plugins with Composer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\GenerateDto(); // \Yoast\MyYoastApiClient\Model\GenerateDto | 

try {
    $result = $apiInstance->composerTokenControllerGenerate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenControllerGenerate: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenControllerRename**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenControllerRename($body, $id)

Renames a Composer token

Changes the name of a Composer token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\RenameBodyDto(); // \Yoast\MyYoastApiClient\Model\RenameBodyDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->composerTokenControllerRename($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenControllerRename: ', $e->getMessage(), PHP_EOL;
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

