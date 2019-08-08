# Yoast\MyYoastApiClient\DownloadApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiDownloadsFileNameGet**](DownloadApi.md#apiDownloadsFileNameGet) | **GET** /api/Downloads/file/{name} | Route to download a file
[**apiDownloadsFileNamePost**](DownloadApi.md#apiDownloadsFileNamePost) | **POST** /api/Downloads/file/{name} | Route to update a file.


# **apiDownloadsFileNameGet**
> apiDownloadsFileNameGet($version, $pluginVersion, $site, $name)

Route to download a file

Download a file if the authenticated user has access to that file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$pluginVersion = "pluginVersion_example"; // string | 
$site = "site_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->apiDownloadsFileNameGet($version, $pluginVersion, $site, $name);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->apiDownloadsFileNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **pluginVersion** | **string**|  |
 **site** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiDownloadsFileNamePost**
> object apiDownloadsFileNamePost($updateFileDto, $name)

Route to update a file.

Updates a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updateFileDto = new \Yoast\MyYoastApiClient\Model\UpdateFileDto(); // \Yoast\MyYoastApiClient\Model\UpdateFileDto | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->apiDownloadsFileNamePost($updateFileDto, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->apiDownloadsFileNamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateFileDto** | [**\Yoast\MyYoastApiClient\Model\UpdateFileDto**](../Model/UpdateFileDto.md)|  |
 **name** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

