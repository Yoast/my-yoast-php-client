# Yoast\MyYoastApiClient\CloudflareApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCloudflareKvRegisteredDomainsPurgePost**](CloudflareApi.md#apiCloudflareKvRegisteredDomainsPurgePost) | **POST** /api/cloudflare/kv/registered-domains/purge | Purge kv pairs from the registered domains key value store in Cloudflare
[**apiCloudflareKvRegisteredDomainsUpdateAllPost**](CloudflareApi.md#apiCloudflareKvRegisteredDomainsUpdateAllPost) | **POST** /api/cloudflare/kv/registered-domains/update-all | Update sites in the registered domains key value store in Cloudflare


# **apiCloudflareKvRegisteredDomainsPurgePost**
> object[] apiCloudflareKvRegisteredDomainsPurgePost($purgeKVRequestDto)

Purge kv pairs from the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purgeKVRequestDto = new \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto(); // \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto | 

try {
    $result = $apiInstance->apiCloudflareKvRegisteredDomainsPurgePost($purgeKVRequestDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->apiCloudflareKvRegisteredDomainsPurgePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purgeKVRequestDto** | [**\Yoast\MyYoastApiClient\Model\PurgeKVRequestDto**](../Model/PurgeKVRequestDto.md)|  |

### Return type

**object[]**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCloudflareKvRegisteredDomainsUpdateAllPost**
> object apiCloudflareKvRegisteredDomainsUpdateAllPost($updateAllKVRequestDto)

Update sites in the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateAllKVRequestDto = new \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto(); // \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto | 

try {
    $result = $apiInstance->apiCloudflareKvRegisteredDomainsUpdateAllPost($updateAllKVRequestDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->apiCloudflareKvRegisteredDomainsUpdateAllPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateAllKVRequestDto** | [**\Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto**](../Model/UpdateAllKVRequestDto.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

