# Yoast\MyYoastApiClient\ChangelogApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiChangelogsPut**](ChangelogApi.md#apichangelogsput) | **PUT** /api/Changelogs | Upsert a changelog

# **apiChangelogsPut**
> \Yoast\MyYoastApiClient\Model\Changelog apiChangelogsPut($body)

Upsert a changelog

Upsert a changelog for a product group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\ChangelogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpsertChangelogDto(); // \Yoast\MyYoastApiClient\Model\UpsertChangelogDto | 

try {
    $result = $apiInstance->apiChangelogsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangelogApi->apiChangelogsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpsertChangelogDto**](../Model/UpsertChangelogDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Changelog**](../Model/Changelog.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

