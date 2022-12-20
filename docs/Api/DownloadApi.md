# Yoast\MyYoastApiClient\DownloadApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadControllerDownloadFile**](DownloadApi.md#downloadcontrollerdownloadfile) | **GET** /api/downloads/file/{name} | Route to download a file
[**downloadControllerUploadFile**](DownloadApi.md#downloadcontrolleruploadfile) | **POST** /api/downloads/file/{name} | Route to update a file.

# **downloadControllerDownloadFile**
> downloadControllerDownloadFile($name, $version, $pluginVersion, $site)

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
$name = "name_example"; // string | 
$version = "version_example"; // string | 
$pluginVersion = "pluginVersion_example"; // string | 
$site = "site_example"; // string | 

try {
    $apiInstance->downloadControllerDownloadFile($name, $version, $pluginVersion, $site);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadControllerDownloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **version** | **string**|  |
 **pluginVersion** | **string**|  |
 **site** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadControllerUploadFile**
> \Yoast\MyYoastApiClient\Model\ downloadControllerUploadFile($body, $name)

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
$body = new \Yoast\MyYoastApiClient\Model\UpdateFileDto(); // \Yoast\MyYoastApiClient\Model\UpdateFileDto | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->downloadControllerUploadFile($body, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadControllerUploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateFileDto**](../Model/UpdateFileDto.md)|  |
 **name** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

