# Yoast\MyYoastApiClient\OrderApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderControllerExport**](OrderApi.md#ordercontrollerexport) | **GET** /api/Orders/export | Get orders
[**orderControllerGetAutoRenewalCount**](OrderApi.md#ordercontrollergetautorenewalcount) | **GET** /api/Orders/auto-renewal-count | 
[**orderControllerGetMany**](OrderApi.md#ordercontrollergetmany) | **GET** /api/Orders | Get orders
[**orderControllerGetManyPaged**](OrderApi.md#ordercontrollergetmanypaged) | **GET** /api/Orders/paged | Get orders
[**orderControllerGetOne**](OrderApi.md#ordercontrollergetone) | **GET** /api/Orders/{id} | Get a order
[**orderControllerInvoice**](OrderApi.md#ordercontrollerinvoice) | **GET** /api/Orders/{id}/invoice | Create invoice
[**orderControllerRefundInvoice**](OrderApi.md#ordercontrollerrefundinvoice) | **GET** /api/Orders/{id}/refunds/{refundId}/invoice | Creates a credit note

# **orderControllerExport**
> \Yoast\MyYoastApiClient\Model\Order[] orderControllerExport($startDate, $endDate)

Get orders

A large export of orders between dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->orderControllerExport($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerGetAutoRenewalCount**
> \Yoast\MyYoastApiClient\Model\AutoRenewalCountResponseDto orderControllerGetAutoRenewalCount($startDate, $endDate, $secret)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$secret = "secret_example"; // string | 

try {
    $result = $apiInstance->orderControllerGetAutoRenewalCount($startDate, $endDate, $secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerGetAutoRenewalCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **secret** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\AutoRenewalCountResponseDto**](../Model/AutoRenewalCountResponseDto.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Order[] orderControllerGetMany($filter)

Get orders

Get and filter orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->orderControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerGetManyPaged**
> orderControllerGetManyPaged($filter)

Get orders

Get and filter orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->orderControllerGetManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerGetManyPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Order orderControllerGetOne($id, $filter)

Get a order

Get a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->orderControllerGetOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerInvoice**
> orderControllerInvoice($id)

Create invoice

Creates a PDF for an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->orderControllerInvoice($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderControllerRefundInvoice**
> orderControllerRefundInvoice($id, $refundId)

Creates a credit note

Creates a PDF for a credit note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$refundId = "refundId_example"; // string | 

try {
    $apiInstance->orderControllerRefundInvoice($id, $refundId);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderControllerRefundInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **refundId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

