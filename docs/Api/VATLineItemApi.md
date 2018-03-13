# Yoast\MyYoastApiClient\VATLineItemApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vATLineItemCount**](VATLineItemApi.md#vATLineItemCount) | **GET** /VATLineItems/count | Count instances of the model matched by where from the data source.
[**vATLineItemCreate**](VATLineItemApi.md#vATLineItemCreate) | **POST** /VATLineItems | Create a new instance of the model and persist it into the data source.
[**vATLineItemCreateChangeStreamGetVATLineItemsChangeStream**](VATLineItemApi.md#vATLineItemCreateChangeStreamGetVATLineItemsChangeStream) | **GET** /VATLineItems/change-stream | Create a change stream.
[**vATLineItemCreateChangeStreamPostVATLineItemsChangeStream**](VATLineItemApi.md#vATLineItemCreateChangeStreamPostVATLineItemsChangeStream) | **POST** /VATLineItems/change-stream | Create a change stream.
[**vATLineItemDeleteById**](VATLineItemApi.md#vATLineItemDeleteById) | **DELETE** /VATLineItems/{id} | Delete a model instance by {{id}} from the data source.
[**vATLineItemExistsGetVATLineItemsidExists**](VATLineItemApi.md#vATLineItemExistsGetVATLineItemsidExists) | **GET** /VATLineItems/{id}/exists | Check whether a model instance exists in the data source.
[**vATLineItemExistsHeadVATLineItemsid**](VATLineItemApi.md#vATLineItemExistsHeadVATLineItemsid) | **HEAD** /VATLineItems/{id} | Check whether a model instance exists in the data source.
[**vATLineItemFind**](VATLineItemApi.md#vATLineItemFind) | **GET** /VATLineItems | Find all instances of the model matched by filter from the data source.
[**vATLineItemFindById**](VATLineItemApi.md#vATLineItemFindById) | **GET** /VATLineItems/{id} | Find a model instance by {{id}} from the data source.
[**vATLineItemFindOne**](VATLineItemApi.md#vATLineItemFindOne) | **GET** /VATLineItems/findOne | Find first instance of the model matched by filter from the data source.
[**vATLineItemPatchOrCreate**](VATLineItemApi.md#vATLineItemPatchOrCreate) | **PATCH** /VATLineItems | Patch an existing model instance or insert a new one into the data source.
[**vATLineItemPrototypeGetOrder**](VATLineItemApi.md#vATLineItemPrototypeGetOrder) | **GET** /VATLineItems/{id}/order | Fetches belongsTo relation order.
[**vATLineItemPrototypePatchAttributes**](VATLineItemApi.md#vATLineItemPrototypePatchAttributes) | **PATCH** /VATLineItems/{id} | Patch attributes for a model instance and persist it into the data source.
[**vATLineItemReplaceByIdPostVATLineItemsidReplace**](VATLineItemApi.md#vATLineItemReplaceByIdPostVATLineItemsidReplace) | **POST** /VATLineItems/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**vATLineItemReplaceByIdPutVATLineItemsid**](VATLineItemApi.md#vATLineItemReplaceByIdPutVATLineItemsid) | **PUT** /VATLineItems/{id} | Replace attributes for a model instance and persist it into the data source.
[**vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate**](VATLineItemApi.md#vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate) | **POST** /VATLineItems/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**vATLineItemReplaceOrCreatePutVATLineItems**](VATLineItemApi.md#vATLineItemReplaceOrCreatePutVATLineItems) | **PUT** /VATLineItems | Replace an existing model instance or insert a new one into the data source.
[**vATLineItemUpdateAll**](VATLineItemApi.md#vATLineItemUpdateAll) | **POST** /VATLineItems/update | Update instances of the model matched by {{where}} from the data source.
[**vATLineItemUpsertWithWhere**](VATLineItemApi.md#vATLineItemUpsertWithWhere) | **POST** /VATLineItems/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **vATLineItemCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 vATLineItemCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->vATLineItemCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemCreate**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemCreateChangeStreamGetVATLineItemsChangeStream**
> \SplFileObject vATLineItemCreateChangeStreamGetVATLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->vATLineItemCreateChangeStreamGetVATLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemCreateChangeStreamGetVATLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemCreateChangeStreamPostVATLineItemsChangeStream**
> \SplFileObject vATLineItemCreateChangeStreamPostVATLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->vATLineItemCreateChangeStreamPostVATLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemCreateChangeStreamPostVATLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemDeleteById**
> object vATLineItemDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->vATLineItemDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemDeleteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemExistsGetVATLineItemsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 vATLineItemExistsGetVATLineItemsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->vATLineItemExistsGetVATLineItemsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemExistsGetVATLineItemsidExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemExistsHeadVATLineItemsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 vATLineItemExistsHeadVATLineItemsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->vATLineItemExistsHeadVATLineItemsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemExistsHeadVATLineItemsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemFind**
> \Yoast\MyYoastApiClient\Model\VATLineItem[] vATLineItemFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->vATLineItemFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem[]**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemFindById**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->vATLineItemFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemFindOne**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->vATLineItemFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order vATLineItemPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | VATLineItem id
$refresh = true; // bool | 

try {
    $result = $apiInstance->vATLineItemPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| VATLineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | VATLineItem id
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | An object of model property name/value pairs

try {
    $result = $apiInstance->vATLineItemPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| VATLineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemReplaceByIdPostVATLineItemsidReplace**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemReplaceByIdPostVATLineItemsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemReplaceByIdPostVATLineItemsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemReplaceByIdPostVATLineItemsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemReplaceByIdPutVATLineItemsid**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemReplaceByIdPutVATLineItemsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemReplaceByIdPutVATLineItemsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemReplaceByIdPutVATLineItemsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemReplaceOrCreatePostVATLineItemsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemReplaceOrCreatePutVATLineItems**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemReplaceOrCreatePutVATLineItems($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | Model instance data

try {
    $result = $apiInstance->vATLineItemReplaceOrCreatePutVATLineItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemReplaceOrCreatePutVATLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 vATLineItemUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | An object of model property name/value pairs

try {
    $result = $apiInstance->vATLineItemUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vATLineItemUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\VATLineItem vATLineItemUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\VATLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | An object of model property name/value pairs

try {
    $result = $apiInstance->vATLineItemUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VATLineItemApi->vATLineItemUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

