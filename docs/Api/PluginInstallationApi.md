# Yoast\MyYoastApiClient\PluginInstallationApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactForSite**](PluginInstallationApi.md#getcontactforsite) | **POST** /api/PluginInstallation/getContactEmail | 
[**installAndActivatePlugin**](PluginInstallationApi.md#installandactivateplugin) | **POST** /api/PluginInstallation/installAndActivatePlugin | 
[**revokeToken**](PluginInstallationApi.md#revoketoken) | **POST** /api/PluginInstallation/revokeToken | 

# **getContactForSite**
> getContactForSite($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PluginInstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto(); // \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto | 

try {
    $apiInstance->getContactForSite($body);
} catch (Exception $e) {
    echo 'Exception when calling PluginInstallationApi->getContactForSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SiteInstallationActorDto**](../Model/SiteInstallationActorDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installAndActivatePlugin**
> installAndActivatePlugin($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PluginInstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto(); // \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto | 

try {
    $apiInstance->installAndActivatePlugin($body);
} catch (Exception $e) {
    echo 'Exception when calling PluginInstallationApi->installAndActivatePlugin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SiteInstallationActorDto**](../Model/SiteInstallationActorDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeToken**
> revokeToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\PluginInstallationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto(); // \Yoast\MyYoastApiClient\Model\SiteInstallationActorDto | 

try {
    $apiInstance->revokeToken($body);
} catch (Exception $e) {
    echo 'Exception when calling PluginInstallationApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SiteInstallationActorDto**](../Model/SiteInstallationActorDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

