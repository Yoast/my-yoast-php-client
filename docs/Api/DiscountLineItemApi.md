# Yoast\MyYoastApiClient\DiscountLineItemApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountLineItemCount**](DiscountLineItemApi.md#discountLineItemCount) | **GET** /DiscountLineItems/count | Count instances of the model matched by where from the data source.
[**discountLineItemCreate**](DiscountLineItemApi.md#discountLineItemCreate) | **POST** /DiscountLineItems | Create a new instance of the model and persist it into the data source.
[**discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream**](DiscountLineItemApi.md#discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream) | **GET** /DiscountLineItems/change-stream | Create a change stream.
[**discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream**](DiscountLineItemApi.md#discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream) | **POST** /DiscountLineItems/change-stream | Create a change stream.
[**discountLineItemDeleteById**](DiscountLineItemApi.md#discountLineItemDeleteById) | **DELETE** /DiscountLineItems/{id} | Delete a model instance by {{id}} from the data source.
[**discountLineItemExistsGetDiscountLineItemsidExists**](DiscountLineItemApi.md#discountLineItemExistsGetDiscountLineItemsidExists) | **GET** /DiscountLineItems/{id}/exists | Check whether a model instance exists in the data source.
[**discountLineItemExistsHeadDiscountLineItemsid**](DiscountLineItemApi.md#discountLineItemExistsHeadDiscountLineItemsid) | **HEAD** /DiscountLineItems/{id} | Check whether a model instance exists in the data source.
[**discountLineItemFind**](DiscountLineItemApi.md#discountLineItemFind) | **GET** /DiscountLineItems | Find all instances of the model matched by filter from the data source.
[**discountLineItemFindById**](DiscountLineItemApi.md#discountLineItemFindById) | **GET** /DiscountLineItems/{id} | Find a model instance by {{id}} from the data source.
[**discountLineItemFindOne**](DiscountLineItemApi.md#discountLineItemFindOne) | **GET** /DiscountLineItems/findOne | Find first instance of the model matched by filter from the data source.
[**discountLineItemPatchOrCreate**](DiscountLineItemApi.md#discountLineItemPatchOrCreate) | **PATCH** /DiscountLineItems | Patch an existing model instance or insert a new one into the data source.
[**discountLineItemPrototypeGetOrder**](DiscountLineItemApi.md#discountLineItemPrototypeGetOrder) | **GET** /DiscountLineItems/{id}/order | Fetches belongsTo relation order.
[**discountLineItemPrototypePatchAttributes**](DiscountLineItemApi.md#discountLineItemPrototypePatchAttributes) | **PATCH** /DiscountLineItems/{id} | Patch attributes for a model instance and persist it into the data source.
[**discountLineItemReplaceByIdPostDiscountLineItemsidReplace**](DiscountLineItemApi.md#discountLineItemReplaceByIdPostDiscountLineItemsidReplace) | **POST** /DiscountLineItems/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**discountLineItemReplaceByIdPutDiscountLineItemsid**](DiscountLineItemApi.md#discountLineItemReplaceByIdPutDiscountLineItemsid) | **PUT** /DiscountLineItems/{id} | Replace attributes for a model instance and persist it into the data source.
[**discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate**](DiscountLineItemApi.md#discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate) | **POST** /DiscountLineItems/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**discountLineItemReplaceOrCreatePutDiscountLineItems**](DiscountLineItemApi.md#discountLineItemReplaceOrCreatePutDiscountLineItems) | **PUT** /DiscountLineItems | Replace an existing model instance or insert a new one into the data source.
[**discountLineItemUpdateAll**](DiscountLineItemApi.md#discountLineItemUpdateAll) | **POST** /DiscountLineItems/update | Update instances of the model matched by {{where}} from the data source.
[**discountLineItemUpsertWithWhere**](DiscountLineItemApi.md#discountLineItemUpsertWithWhere) | **POST** /DiscountLineItems/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **discountLineItemCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 discountLineItemCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->discountLineItemCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemCount: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemCreate**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream**
> \SplFileObject discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemCreateChangeStreamGetDiscountLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream**
> \SplFileObject discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemCreateChangeStreamPostDiscountLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemDeleteById**
> object discountLineItemDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->discountLineItemDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemExistsGetDiscountLineItemsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 discountLineItemExistsGetDiscountLineItemsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->discountLineItemExistsGetDiscountLineItemsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemExistsGetDiscountLineItemsidExists: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemExistsHeadDiscountLineItemsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 discountLineItemExistsHeadDiscountLineItemsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->discountLineItemExistsHeadDiscountLineItemsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemExistsHeadDiscountLineItemsid: ', $e->getMessage(), PHP_EOL;
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

# **discountLineItemFind**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem[] discountLineItemFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->discountLineItemFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem[]**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemFindById**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->discountLineItemFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemFindOne**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->discountLineItemFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order discountLineItemPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | DiscountLineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->discountLineItemPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DiscountLineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | DiscountLineItem id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->discountLineItemPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DiscountLineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemReplaceByIdPostDiscountLineItemsidReplace**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemReplaceByIdPostDiscountLineItemsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemReplaceByIdPostDiscountLineItemsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemReplaceByIdPostDiscountLineItemsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemReplaceByIdPutDiscountLineItemsid**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemReplaceByIdPutDiscountLineItemsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemReplaceByIdPutDiscountLineItemsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemReplaceByIdPutDiscountLineItemsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemReplaceOrCreatePostDiscountLineItemsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemReplaceOrCreatePutDiscountLineItems**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemReplaceOrCreatePutDiscountLineItems($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | Model instance data

try {
    $result = $api_instance->discountLineItemReplaceOrCreatePutDiscountLineItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemReplaceOrCreatePutDiscountLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 discountLineItemUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->discountLineItemUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountLineItemUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem discountLineItemUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DiscountLineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | An object of model property name/value pairs

try {
    $result = $api_instance->discountLineItemUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountLineItemApi->discountLineItemUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

