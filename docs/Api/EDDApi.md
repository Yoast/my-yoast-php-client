# Yoast\MyYoastApiClient\EDDApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eddSlApiGet**](EDDApi.md#eddSlApiGet) | **GET** /edd-sl-api | Activate or deactivate a site license
[**eddSlApiPost**](EDDApi.md#eddSlApiPost) | **POST** /edd-sl-api | 


# **eddSlApiGet**
> eddSlApiGet($eddAction, $url, $itemName)

Activate or deactivate a site license

Used for legacy EDD license checks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\EDDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eddAction = "eddAction_example"; // string | 
$url = "url_example"; // string | 
$itemName = "itemName_example"; // string | 

try {
    $apiInstance->eddSlApiGet($eddAction, $url, $itemName);
} catch (Exception $e) {
    echo 'Exception when calling EDDApi->eddSlApiGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eddAction** | **string**|  |
 **url** | **string**|  |
 **itemName** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eddSlApiPost**
> eddSlApiPost($eddDTO, $eddAction)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\EDDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eddDTO = new \Yoast\MyYoastApiClient\Model\EddDTO(); // \Yoast\MyYoastApiClient\Model\EddDTO | 
$eddAction = "eddAction_example"; // string | 

try {
    $apiInstance->eddSlApiPost($eddDTO, $eddAction);
} catch (Exception $e) {
    echo 'Exception when calling EDDApi->eddSlApiPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eddDTO** | [**\Yoast\MyYoastApiClient\Model\EddDTO**](../Model/EddDTO.md)|  |
 **eddAction** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

