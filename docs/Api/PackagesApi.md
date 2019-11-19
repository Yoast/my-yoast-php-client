# Yoast\MyYoastApiClient\PackagesApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packagesDistOrgNameArchiveZipGet**](PackagesApi.md#packagesdistorgnamearchivezipget) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
[**packagesPOrgNameAndHashJsonGet**](PackagesApi.md#packagesporgnameandhashjsonget) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json
[**packagesPackagesJsonGet**](PackagesApi.md#packagespackagesjsonget) | **GET** /packages/packages.json | Serves the general packages.json file.

# **packagesDistOrgNameArchiveZipGet**
> \SplFileObject packagesDistOrgNameArchiveZipGet($org, $archive, $name)

Serves an .zip of the plugin.

Serves an .zip of the plugin, described by the parameters passed in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 
$archive = "archive_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->packagesDistOrgNameArchiveZipGet($org, $archive, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesDistOrgNameArchiveZipGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **archive** | **string**|  |
 **name** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesPOrgNameAndHashJsonGet**
> \SplFileObject packagesPOrgNameAndHashJsonGet($org, $nameAndHash)

Serves the requested provider.json

Serves the requested provider.json defined by the org, name and hash of the file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org = "org_example"; // string | 
$nameAndHash = "nameAndHash_example"; // string | The package name and package hash separated by a $ character

try {
    $result = $apiInstance->packagesPOrgNameAndHashJsonGet($org, $nameAndHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesPOrgNameAndHashJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **nameAndHash** | **string**| The package name and package hash separated by a $ character |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesPackagesJsonGet**
> \SplFileObject packagesPackagesJsonGet()

Serves the general packages.json file.

Serves the general packages.json file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PackagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->packagesPackagesJsonGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesPackagesJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

