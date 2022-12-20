# Yoast\MyYoastApiClient\BlacklistApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOne**](BlacklistApi.md#createone) | **POST** /api/Blacklist | Creates a blacklisted site
[**deleteOne**](BlacklistApi.md#deleteone) | **DELETE** /api/Blacklist/{id} | Remove a site from the blacklist
[**getMany**](BlacklistApi.md#getmany) | **GET** /api/Blacklist | Gets blacklisted sites
[**getManyPaged**](BlacklistApi.md#getmanypaged) | **GET** /api/Blacklist/paged | Gets blacklisted sites

# **createOne**
> \Yoast\MyYoastApiClient\Model\ createOne($body)

Creates a blacklisted site

Creates a single site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto(); // \Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto | 

try {
    $result = $apiInstance->createOne($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->createOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto**](../Model/CreateBlacklistSiteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOne**
> \Yoast\MyYoastApiClient\Model\ deleteOne($id)

Remove a site from the blacklist

Deletes a single blacklisted site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->deleteOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->deleteOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMany**
> \Yoast\MyYoastApiClient\Model\Blacklist[] getMany($filter)

Gets blacklisted sites

Get and filter blacklisted sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->getMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Blacklist[]**](../Model/Blacklist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManyPaged**
> \Yoast\MyYoastApiClient\Model\Blacklist[] getManyPaged($filter)

Gets blacklisted sites

Get and filter blacklisted sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getManyPaged($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->getManyPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Blacklist[]**](../Model/Blacklist.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

