# Yoast\MyYoastApiClient\RefundLineItemApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundLineItemCount**](RefundLineItemApi.md#refundLineItemCount) | **GET** /RefundLineItems/count | Count instances of the model matched by where from the data source.
[**refundLineItemCreate**](RefundLineItemApi.md#refundLineItemCreate) | **POST** /RefundLineItems | Create a new instance of the model and persist it into the data source.
[**refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream**](RefundLineItemApi.md#refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream) | **GET** /RefundLineItems/change-stream | Create a change stream.
[**refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream**](RefundLineItemApi.md#refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream) | **POST** /RefundLineItems/change-stream | Create a change stream.
[**refundLineItemDeleteById**](RefundLineItemApi.md#refundLineItemDeleteById) | **DELETE** /RefundLineItems/{id} | Delete a model instance by {{id}} from the data source.
[**refundLineItemExistsGetRefundLineItemsidExists**](RefundLineItemApi.md#refundLineItemExistsGetRefundLineItemsidExists) | **GET** /RefundLineItems/{id}/exists | Check whether a model instance exists in the data source.
[**refundLineItemExistsHeadRefundLineItemsid**](RefundLineItemApi.md#refundLineItemExistsHeadRefundLineItemsid) | **HEAD** /RefundLineItems/{id} | Check whether a model instance exists in the data source.
[**refundLineItemFind**](RefundLineItemApi.md#refundLineItemFind) | **GET** /RefundLineItems | Find all instances of the model matched by filter from the data source.
[**refundLineItemFindById**](RefundLineItemApi.md#refundLineItemFindById) | **GET** /RefundLineItems/{id} | Find a model instance by {{id}} from the data source.
[**refundLineItemFindOne**](RefundLineItemApi.md#refundLineItemFindOne) | **GET** /RefundLineItems/findOne | Find first instance of the model matched by filter from the data source.
[**refundLineItemPatchOrCreate**](RefundLineItemApi.md#refundLineItemPatchOrCreate) | **PATCH** /RefundLineItems | Patch an existing model instance or insert a new one into the data source.
[**refundLineItemPrototypeGetLineItem**](RefundLineItemApi.md#refundLineItemPrototypeGetLineItem) | **GET** /RefundLineItems/{id}/lineItem | Fetches belongsTo relation lineItem.
[**refundLineItemPrototypeGetRefund**](RefundLineItemApi.md#refundLineItemPrototypeGetRefund) | **GET** /RefundLineItems/{id}/refund | Fetches belongsTo relation refund.
[**refundLineItemPrototypePatchAttributes**](RefundLineItemApi.md#refundLineItemPrototypePatchAttributes) | **PATCH** /RefundLineItems/{id} | Patch attributes for a model instance and persist it into the data source.
[**refundLineItemReplaceByIdPostRefundLineItemsidReplace**](RefundLineItemApi.md#refundLineItemReplaceByIdPostRefundLineItemsidReplace) | **POST** /RefundLineItems/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**refundLineItemReplaceByIdPutRefundLineItemsid**](RefundLineItemApi.md#refundLineItemReplaceByIdPutRefundLineItemsid) | **PUT** /RefundLineItems/{id} | Replace attributes for a model instance and persist it into the data source.
[**refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate**](RefundLineItemApi.md#refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate) | **POST** /RefundLineItems/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**refundLineItemReplaceOrCreatePutRefundLineItems**](RefundLineItemApi.md#refundLineItemReplaceOrCreatePutRefundLineItems) | **PUT** /RefundLineItems | Replace an existing model instance or insert a new one into the data source.
[**refundLineItemUpdateAll**](RefundLineItemApi.md#refundLineItemUpdateAll) | **POST** /RefundLineItems/update | Update instances of the model matched by {{where}} from the data source.
[**refundLineItemUpsertWithWhere**](RefundLineItemApi.md#refundLineItemUpsertWithWhere) | **POST** /RefundLineItems/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **refundLineItemCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 refundLineItemCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->refundLineItemCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemCount: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemCreate**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream**
> \SplFileObject refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemCreateChangeStreamGetRefundLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream**
> \SplFileObject refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemCreateChangeStreamPostRefundLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemDeleteById**
> object refundLineItemDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundLineItemDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemExistsGetRefundLineItemsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 refundLineItemExistsGetRefundLineItemsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundLineItemExistsGetRefundLineItemsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemExistsGetRefundLineItemsidExists: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemExistsHeadRefundLineItemsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 refundLineItemExistsHeadRefundLineItemsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundLineItemExistsHeadRefundLineItemsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemExistsHeadRefundLineItemsid: ', $e->getMessage(), PHP_EOL;
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

# **refundLineItemFind**
> \Yoast\MyYoastApiClient\Model\RefundLineItem[] refundLineItemFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundLineItemFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem[]**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemFindById**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundLineItemFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemFindOne**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundLineItemFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemPrototypeGetLineItem**
> \Yoast\MyYoastApiClient\Model\LineItem refundLineItemPrototypeGetLineItem($id, $refresh)

Fetches belongsTo relation lineItem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | RefundLineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->refundLineItemPrototypeGetLineItem($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemPrototypeGetLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| RefundLineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemPrototypeGetRefund**
> \Yoast\MyYoastApiClient\Model\Refund refundLineItemPrototypeGetRefund($id, $refresh)

Fetches belongsTo relation refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | RefundLineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->refundLineItemPrototypeGetRefund($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemPrototypeGetRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| RefundLineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | RefundLineItem id
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->refundLineItemPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| RefundLineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemReplaceByIdPostRefundLineItemsidReplace**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemReplaceByIdPostRefundLineItemsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemReplaceByIdPostRefundLineItemsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemReplaceByIdPostRefundLineItemsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemReplaceByIdPutRefundLineItemsid**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemReplaceByIdPutRefundLineItemsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemReplaceByIdPutRefundLineItemsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemReplaceByIdPutRefundLineItemsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemReplaceOrCreatePostRefundLineItemsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemReplaceOrCreatePutRefundLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemReplaceOrCreatePutRefundLineItems($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | Model instance data

try {
    $result = $api_instance->refundLineItemReplaceOrCreatePutRefundLineItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemReplaceOrCreatePutRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 refundLineItemUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->refundLineItemUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundLineItemUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundLineItemUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundLineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->refundLineItemUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundLineItemApi->refundLineItemUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

