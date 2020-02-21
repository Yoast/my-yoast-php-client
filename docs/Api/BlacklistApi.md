# Yoast\MyYoastApiClient\BlacklistApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBlacklistGet**](BlacklistApi.md#apiBlacklistGet) | **GET** /api/Blacklist | Gets blacklisted sites
[**apiBlacklistIdDelete**](BlacklistApi.md#apiBlacklistIdDelete) | **DELETE** /api/Blacklist/{id} | Remove a site from the blacklist
[**apiBlacklistPost**](BlacklistApi.md#apiBlacklistPost) | **POST** /api/Blacklist | Creates a blacklisted site


# **apiBlacklistGet**
> \Yoast\MyYoastApiClient\Model\Blacklist[] apiBlacklistGet($filter)

Gets blacklisted sites

Get and filter blacklisted sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiBlacklistGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->apiBlacklistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Blacklist[]**](../Model/Blacklist.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBlacklistIdDelete**
> string apiBlacklistIdDelete($id)

Remove a site from the blacklist

Deletes a single blacklisted site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiBlacklistIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->apiBlacklistIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiBlacklistPost**
> string apiBlacklistPost($createBlacklistSiteDto)

Creates a blacklisted site

Creates a single site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createBlacklistSiteDto = new \Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto(); // \Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto | 

try {
    $result = $apiInstance->apiBlacklistPost($createBlacklistSiteDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->apiBlacklistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createBlacklistSiteDto** | [**\Yoast\MyYoastApiClient\Model\CreateBlacklistSiteDto**](../Model/CreateBlacklistSiteDto.md)|  |

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

