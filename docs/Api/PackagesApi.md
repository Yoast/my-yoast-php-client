# Yoast\MyYoastApiClient\PackagesApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serveArchiveZIP**](PackagesApi.md#servearchivezip) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
[**servePackagesJSON**](PackagesApi.md#servepackagesjson) | **GET** /packages/packages.json | Serves the general packages.json file.
[**serveProvider2JSON**](PackagesApi.md#serveprovider2json) | **GET** /packages/p2/{org}/{name}.json | Serves the requested provider.json
[**serveProviderJSON**](PackagesApi.md#serveproviderjson) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json

# **serveArchiveZIP**
> serveArchiveZIP($org, $archive, $name)

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
    $apiInstance->serveArchiveZIP($org, $archive, $name);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->serveArchiveZIP: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servePackagesJSON**
> servePackagesJSON()

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
    $apiInstance->servePackagesJSON();
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->servePackagesJSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProvider2JSON**
> serveProvider2JSON($org, $name)

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
    $apiInstance->serveProvider2JSON($org, $name);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->serveProvider2JSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **name** | **string**| The package name, optionally suffixed with -dev |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProviderJSON**
> serveProviderJSON($org, $nameAndHash)

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
    $apiInstance->serveProviderJSON($org, $nameAndHash);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->serveProviderJSON: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **nameAndHash** | **string**| The package name and package hash separated by a $ character |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

