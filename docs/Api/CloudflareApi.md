# Yoast\MyYoastApiClient\CloudflareApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purgeKVStore**](CloudflareApi.md#purgekvstore) | **POST** /api/cloudflare/kv/registered-domains/purge | Purge kv pairs from the registered domains key value store in Cloudflare
[**updateAll**](CloudflareApi.md#updateall) | **POST** /api/cloudflare/kv/registered-domains/update-all | Update sites in the registered domains key value store in Cloudflare

# **purgeKVStore**
> object[] purgeKVStore($body)

Purge kv pairs from the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto(); // \Yoast\MyYoastApiClient\Model\PurgeKVRequestDto | 

try {
    $result = $apiInstance->purgeKVStore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->purgeKVStore: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAll**
> object updateAll($body)

Update sites in the registered domains key value store in Cloudflare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CloudflareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto(); // \Yoast\MyYoastApiClient\Model\UpdateAllKVRequestDto | 

try {
    $result = $apiInstance->updateAll($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudflareApi->updateAll: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

