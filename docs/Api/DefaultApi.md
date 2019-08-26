# Yoast\MyYoastApiClient\DefaultApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCustomersIdRoleMappingDelete**](DefaultApi.md#apiCustomersIdRoleMappingDelete) | **DELETE** /api/Customers/{id}/roleMapping | 
[**apiCustomersIdRoleMappingPost**](DefaultApi.md#apiCustomersIdRoleMappingPost) | **POST** /api/Customers/{id}/roleMapping | 


# **apiCustomersIdRoleMappingDelete**
> apiCustomersIdRoleMappingDelete($roleDto, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$roleDto = new \Yoast\MyYoastApiClient\Model\RoleDto(); // \Yoast\MyYoastApiClient\Model\RoleDto | 
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdRoleMappingDelete($roleDto, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiCustomersIdRoleMappingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleDto** | [**\Yoast\MyYoastApiClient\Model\RoleDto**](../Model/RoleDto.md)|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdRoleMappingPost**
> apiCustomersIdRoleMappingPost($id, $roleDto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$roleDto = new \Yoast\MyYoastApiClient\Model\RoleDto(); // \Yoast\MyYoastApiClient\Model\RoleDto | 

try {
    $apiInstance->apiCustomersIdRoleMappingPost($id, $roleDto);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiCustomersIdRoleMappingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **roleDto** | [**\Yoast\MyYoastApiClient\Model\RoleDto**](../Model/RoleDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

