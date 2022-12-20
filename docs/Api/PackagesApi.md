# Yoast\MyYoastApiClient\PackagesApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packagesControllerServeArchiveZIP**](PackagesApi.md#packagescontrollerservearchivezip) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
[**packagesControllerServePackagesJSON**](PackagesApi.md#packagescontrollerservepackagesjson) | **GET** /packages/packages.json | Serves the general packages.json file.
[**packagesControllerServeProvider2JSON**](PackagesApi.md#packagescontrollerserveprovider2json) | **GET** /packages/p2/{org}/{name}.json | Serves the requested provider.json
[**packagesControllerServeProviderJSON**](PackagesApi.md#packagescontrollerserveproviderjson) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json

# **packagesControllerServeArchiveZIP**
> \Yoast\MyYoastApiClient\Model\ packagesControllerServeArchiveZIP($org, $archive, $name)

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
    $result = $apiInstance->packagesControllerServeArchiveZIP($org, $archive, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesControllerServeArchiveZIP: ', $e->getMessage(), PHP_EOL;
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

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesControllerServePackagesJSON**
> \Yoast\MyYoastApiClient\Model\ packagesControllerServePackagesJSON()

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
    $result = $apiInstance->packagesControllerServePackagesJSON();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesControllerServePackagesJSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesControllerServeProvider2JSON**
> \Yoast\MyYoastApiClient\Model\ packagesControllerServeProvider2JSON($org, $name)

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
$name = "name_example"; // string | The package name, optionally suffixed with -dev

try {
    $result = $apiInstance->packagesControllerServeProvider2JSON($org, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesControllerServeProvider2JSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **name** | **string**| The package name, optionally suffixed with -dev |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesControllerServeProviderJSON**
> \Yoast\MyYoastApiClient\Model\ packagesControllerServeProviderJSON($org, $nameAndHash)

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
    $result = $apiInstance->packagesControllerServeProviderJSON($org, $nameAndHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->packagesControllerServeProviderJSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **nameAndHash** | **string**| The package name and package hash separated by a $ character |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

