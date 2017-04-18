# Yoast\MyYoastApiClient\OrderApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderCount**](OrderApi.md#orderCount) | **GET** /Orders/count | Count instances of the model matched by where from the data source.
[**orderCreate**](OrderApi.md#orderCreate) | **POST** /Orders | Create a new instance of the model and persist it into the data source.
[**orderCreateChangeStreamGetOrdersChangeStream**](OrderApi.md#orderCreateChangeStreamGetOrdersChangeStream) | **GET** /Orders/change-stream | Create a change stream.
[**orderCreateChangeStreamPostOrdersChangeStream**](OrderApi.md#orderCreateChangeStreamPostOrdersChangeStream) | **POST** /Orders/change-stream | Create a change stream.
[**orderDeleteById**](OrderApi.md#orderDeleteById) | **DELETE** /Orders/{id} | Delete a model instance by {{id}} from the data source.
[**orderExistsGetOrdersidExists**](OrderApi.md#orderExistsGetOrdersidExists) | **GET** /Orders/{id}/exists | Check whether a model instance exists in the data source.
[**orderExistsHeadOrdersid**](OrderApi.md#orderExistsHeadOrdersid) | **HEAD** /Orders/{id} | Check whether a model instance exists in the data source.
[**orderFind**](OrderApi.md#orderFind) | **GET** /Orders | Find all instances of the model matched by filter from the data source.
[**orderFindById**](OrderApi.md#orderFindById) | **GET** /Orders/{id} | Find a model instance by {{id}} from the data source.
[**orderFindOne**](OrderApi.md#orderFindOne) | **GET** /Orders/findOne | Find first instance of the model matched by filter from the data source.
[**orderFromWooCommerce**](OrderApi.md#orderFromWooCommerce) | **PUT** /Orders/fromWooCommerce | 
[**orderPatchOrCreate**](OrderApi.md#orderPatchOrCreate) | **PATCH** /Orders | Patch an existing model instance or insert a new one into the data source.
[**orderPrototypeCountItems**](OrderApi.md#orderPrototypeCountItems) | **GET** /Orders/{id}/items/count | Counts items of Order.
[**orderPrototypeCreateItems**](OrderApi.md#orderPrototypeCreateItems) | **POST** /Orders/{id}/items | Creates a new instance in items of this model.
[**orderPrototypeCreateSubscription**](OrderApi.md#orderPrototypeCreateSubscription) | **POST** /Orders/{id}/subscription | Creates a new instance in subscription of this model.
[**orderPrototypeDeleteItems**](OrderApi.md#orderPrototypeDeleteItems) | **DELETE** /Orders/{id}/items | Deletes all items of this model.
[**orderPrototypeDestroyByIdItems**](OrderApi.md#orderPrototypeDestroyByIdItems) | **DELETE** /Orders/{id}/items/{fk} | Delete a related item by id for items.
[**orderPrototypeDestroySubscription**](OrderApi.md#orderPrototypeDestroySubscription) | **DELETE** /Orders/{id}/subscription | Deletes subscription of this model.
[**orderPrototypeFindByIdItems**](OrderApi.md#orderPrototypeFindByIdItems) | **GET** /Orders/{id}/items/{fk} | Find a related item by id for items.
[**orderPrototypeGetCustomer**](OrderApi.md#orderPrototypeGetCustomer) | **GET** /Orders/{id}/customer | Fetches belongsTo relation customer.
[**orderPrototypeGetItems**](OrderApi.md#orderPrototypeGetItems) | **GET** /Orders/{id}/items | Queries items of Order.
[**orderPrototypeGetSubscription**](OrderApi.md#orderPrototypeGetSubscription) | **GET** /Orders/{id}/subscription | Fetches hasOne relation subscription.
[**orderPrototypePatchAttributes**](OrderApi.md#orderPrototypePatchAttributes) | **PATCH** /Orders/{id} | Patch attributes for a model instance and persist it into the data source.
[**orderPrototypeUpdateByIdItems**](OrderApi.md#orderPrototypeUpdateByIdItems) | **PUT** /Orders/{id}/items/{fk} | Update a related item by id for items.
[**orderPrototypeUpdateSubscription**](OrderApi.md#orderPrototypeUpdateSubscription) | **PUT** /Orders/{id}/subscription | Update subscription of this model.
[**orderReplaceByIdPostOrdersidReplace**](OrderApi.md#orderReplaceByIdPostOrdersidReplace) | **POST** /Orders/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**orderReplaceByIdPutOrdersid**](OrderApi.md#orderReplaceByIdPutOrdersid) | **PUT** /Orders/{id} | Replace attributes for a model instance and persist it into the data source.
[**orderReplaceOrCreatePostOrdersReplaceOrCreate**](OrderApi.md#orderReplaceOrCreatePostOrdersReplaceOrCreate) | **POST** /Orders/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**orderReplaceOrCreatePutOrders**](OrderApi.md#orderReplaceOrCreatePutOrders) | **PUT** /Orders | Replace an existing model instance or insert a new one into the data source.
[**orderUpdateAll**](OrderApi.md#orderUpdateAll) | **POST** /Orders/update | Update instances of the model matched by {{where}} from the data source.
[**orderUpsertWithWhere**](OrderApi.md#orderUpsertWithWhere) | **POST** /Orders/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **orderCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCount: ', $e->getMessage(), PHP_EOL;
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

# **orderCreate**
> \Yoast\MyYoastApiClient\Model\Order orderCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateChangeStreamGetOrdersChangeStream**
> \SplFileObject orderCreateChangeStreamGetOrdersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->orderCreateChangeStreamGetOrdersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateChangeStreamGetOrdersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **orderCreateChangeStreamPostOrdersChangeStream**
> \SplFileObject orderCreateChangeStreamPostOrdersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->orderCreateChangeStreamPostOrdersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateChangeStreamPostOrdersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **orderDeleteById**
> object orderDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->orderDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **orderExistsGetOrdersidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 orderExistsGetOrdersidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->orderExistsGetOrdersidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderExistsGetOrdersidExists: ', $e->getMessage(), PHP_EOL;
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

# **orderExistsHeadOrdersid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 orderExistsHeadOrdersid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->orderExistsHeadOrdersid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderExistsHeadOrdersid: ', $e->getMessage(), PHP_EOL;
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

# **orderFind**
> \Yoast\MyYoastApiClient\Model\Order[] orderFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->orderFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderFindById**
> \Yoast\MyYoastApiClient\Model\Order orderFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->orderFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderFindOne**
> \Yoast\MyYoastApiClient\Model\Order orderFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->orderFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Order orderFromWooCommerce($order_data, $extra_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$order_data = "order_data_example"; // string | 
$extra_data = "extra_data_example"; // string | 

try {
    $result = $api_instance->orderFromWooCommerce($order_data, $extra_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFromWooCommerce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_data** | **string**|  |
 **extra_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Order orderPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCountItems**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountItems($id, $where)

Counts items of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountItems($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateItems**
> \Yoast\MyYoastApiClient\Model\LineItem orderPrototypeCreateItems($id, $data)

Creates a new instance in items of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->orderPrototypeCreateItems($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateSubscription**
> \Yoast\MyYoastApiClient\Model\SubscriptionOrders orderPrototypeCreateSubscription($id, $data)

Creates a new instance in subscription of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\SubscriptionOrders(); // \Yoast\MyYoastApiClient\Model\SubscriptionOrders | 

try {
    $result = $api_instance->orderPrototypeCreateSubscription($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/\Yoast\MyYoastApiClient\Model\SubscriptionOrders.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/SubscriptionOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDeleteItems**
> orderPrototypeDeleteItems($id)

Deletes all items of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteItems($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdItems**
> orderPrototypeDestroyByIdItems($fk, $id)

Delete a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDestroyByIdItems($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Order id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroySubscription**
> orderPrototypeDestroySubscription($id)

Deletes subscription of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDestroySubscription($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem orderPrototypeFindByIdItems($fk, $id)

Find a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Order id

try {
    $result = $api_instance->orderPrototypeFindByIdItems($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Order id |

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\MyYoastUser orderPrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$refresh = true; // bool | 

try {
    $result = $api_instance->orderPrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetItems**
> \Yoast\MyYoastApiClient\Model\LineItem[] orderPrototypeGetItems($id, $filter)

Queries items of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetItems($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem[]**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetSubscription**
> \Yoast\MyYoastApiClient\Model\SubscriptionOrders orderPrototypeGetSubscription($id, $refresh)

Fetches hasOne relation subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$refresh = true; // bool | 

try {
    $result = $api_instance->orderPrototypeGetSubscription($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/SubscriptionOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Order orderPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | An object of model property name/value pairs

try {
    $result = $api_instance->orderPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem orderPrototypeUpdateByIdItems($fk, $id, $data)

Update a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdItems($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateSubscription**
> \Yoast\MyYoastApiClient\Model\SubscriptionOrders orderPrototypeUpdateSubscription($id, $data)

Update subscription of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\SubscriptionOrders(); // \Yoast\MyYoastApiClient\Model\SubscriptionOrders | 

try {
    $result = $api_instance->orderPrototypeUpdateSubscription($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/\Yoast\MyYoastApiClient\Model\SubscriptionOrders.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/SubscriptionOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReplaceByIdPostOrdersidReplace**
> \Yoast\MyYoastApiClient\Model\Order orderReplaceByIdPostOrdersidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderReplaceByIdPostOrdersidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReplaceByIdPostOrdersidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReplaceByIdPutOrdersid**
> \Yoast\MyYoastApiClient\Model\Order orderReplaceByIdPutOrdersid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderReplaceByIdPutOrdersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReplaceByIdPutOrdersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReplaceOrCreatePostOrdersReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Order orderReplaceOrCreatePostOrdersReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderReplaceOrCreatePostOrdersReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReplaceOrCreatePostOrdersReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReplaceOrCreatePutOrders**
> \Yoast\MyYoastApiClient\Model\Order orderReplaceOrCreatePutOrders($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | Model instance data

try {
    $result = $api_instance->orderReplaceOrCreatePutOrders($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReplaceOrCreatePutOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 orderUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | An object of model property name/value pairs

try {
    $result = $api_instance->orderUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Order orderUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | An object of model property name/value pairs

try {
    $result = $api_instance->orderUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

