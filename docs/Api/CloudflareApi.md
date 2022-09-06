# Yoast\MyYoastApiClient\CloudflareApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCloudflareKvRegisteredDomainsPurgePost**](CloudflareApi.md#apicloudflarekvregistereddomainspurgepost) | **POST** /api/cloudflare/kv/registered-domains/purge | Purge kv pairs from the registered domains key value store in Cloudflare
[**apiCloudflareKvRegisteredDomainsUpdateAllPost**](CloudflareApi.md#apicloudflarekvregistereddomainsupdateallpost) | **POST** /api/cloudflare/kv/registered-domains/update-all | Update sites in the registered domains key value store in Cloudflare

# **apiCloudflareKvRegisteredDomainsPurgePost**
> object[] apiCloudflareKvRegisteredDomainsPurgePost($body)

Purge kv pairs from the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto(); // \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto | 

try {
    $result = $apiInstance->apiCloudflareKvRegisteredDomainsPurgePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->apiCloudflareKvRegisteredDomainsPurgePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\PurgeKVRequestDto**](../Model/PurgeKVRequestDto.md)|  |

### Return type

**object[]**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCloudflareKvRegisteredDomainsUpdateAllPost**
> object apiCloudflareKvRegisteredDomainsUpdateAllPost($body)

Update sites in the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto(); // \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto | 

try {
    $result = $apiInstance->apiCloudflareKvRegisteredDomainsUpdateAllPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->apiCloudflareKvRegisteredDomainsUpdateAllPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto**](../Model/UpdateAllKVRequestDto.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

