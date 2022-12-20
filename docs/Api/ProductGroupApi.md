# Yoast\MyYoastApiClient\ProductGroupApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMany**](ProductGroupApi.md#getmany) | **GET** /api/ProductGroups | Get productgroups
[**updateDownload**](ProductGroupApi.md#updatedownload) | **PATCH** /api/ProductGroups/updateDownload | Update the download

# **getMany**
> \Yoast\MyYoastApiClient\Model\ProductGroup[] getMany($filter)

Get productgroups

Get and filter productgroups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->getMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDownload**
> \Yoast\MyYoastApiClient\Model\ProductGroup updateDownload($body)

Update the download

Set the passed downloadUrl and version to the passed product group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateDownloadDto(); // \Yoast\MyYoastApiClient\Model\UpdateDownloadDto | 

try {
    $result = $apiInstance->updateDownload($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->updateDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateDownloadDto**](../Model/UpdateDownloadDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

