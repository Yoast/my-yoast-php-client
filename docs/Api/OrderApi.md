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
[**orderInvoice**](OrderApi.md#orderInvoice) | **GET** /Orders/{id}/invoice | 
[**orderPatchOrCreate**](OrderApi.md#orderPatchOrCreate) | **PATCH** /Orders | Patch an existing model instance or insert a new one into the data source.
[**orderPrototypeCountConfigurationServiceRequests**](OrderApi.md#orderPrototypeCountConfigurationServiceRequests) | **GET** /Orders/{id}/configurationServiceRequests/count | Counts configurationServiceRequests of Order.
[**orderPrototypeCountDiscounts**](OrderApi.md#orderPrototypeCountDiscounts) | **GET** /Orders/{id}/discounts/count | Counts discounts of Order.
[**orderPrototypeCountInvoices**](OrderApi.md#orderPrototypeCountInvoices) | **GET** /Orders/{id}/invoices/count | Counts invoices of Order.
[**orderPrototypeCountItems**](OrderApi.md#orderPrototypeCountItems) | **GET** /Orders/{id}/items/count | Counts items of Order.
[**orderPrototypeCountRefunds**](OrderApi.md#orderPrototypeCountRefunds) | **GET** /Orders/{id}/refunds/count | Counts refunds of Order.
[**orderPrototypeCountSubscriptions**](OrderApi.md#orderPrototypeCountSubscriptions) | **GET** /Orders/{id}/subscriptions/count | Counts subscriptions of Order.
[**orderPrototypeCountTransactions**](OrderApi.md#orderPrototypeCountTransactions) | **GET** /Orders/{id}/transactions/count | Counts transactions of Order.
[**orderPrototypeCountVats**](OrderApi.md#orderPrototypeCountVats) | **GET** /Orders/{id}/vats/count | Counts vats of Order.
[**orderPrototypeCreateConfigurationServiceRequests**](OrderApi.md#orderPrototypeCreateConfigurationServiceRequests) | **POST** /Orders/{id}/configurationServiceRequests | Creates a new instance in configurationServiceRequests of this model.
[**orderPrototypeCreateDiscounts**](OrderApi.md#orderPrototypeCreateDiscounts) | **POST** /Orders/{id}/discounts | Creates a new instance in discounts of this model.
[**orderPrototypeCreateInvoices**](OrderApi.md#orderPrototypeCreateInvoices) | **POST** /Orders/{id}/invoices | Creates a new instance in invoices of this model.
[**orderPrototypeCreateItems**](OrderApi.md#orderPrototypeCreateItems) | **POST** /Orders/{id}/items | Creates a new instance in items of this model.
[**orderPrototypeCreateRefunds**](OrderApi.md#orderPrototypeCreateRefunds) | **POST** /Orders/{id}/refunds | Creates a new instance in refunds of this model.
[**orderPrototypeCreateSubscriptions**](OrderApi.md#orderPrototypeCreateSubscriptions) | **POST** /Orders/{id}/subscriptions | Creates a new instance in subscriptions of this model.
[**orderPrototypeCreateTransactions**](OrderApi.md#orderPrototypeCreateTransactions) | **POST** /Orders/{id}/transactions | Creates a new instance in transactions of this model.
[**orderPrototypeCreateVats**](OrderApi.md#orderPrototypeCreateVats) | **POST** /Orders/{id}/vats | Creates a new instance in vats of this model.
[**orderPrototypeDeleteConfigurationServiceRequests**](OrderApi.md#orderPrototypeDeleteConfigurationServiceRequests) | **DELETE** /Orders/{id}/configurationServiceRequests | Deletes all configurationServiceRequests of this model.
[**orderPrototypeDeleteDiscounts**](OrderApi.md#orderPrototypeDeleteDiscounts) | **DELETE** /Orders/{id}/discounts | Deletes all discounts of this model.
[**orderPrototypeDeleteInvoices**](OrderApi.md#orderPrototypeDeleteInvoices) | **DELETE** /Orders/{id}/invoices | Deletes all invoices of this model.
[**orderPrototypeDeleteItems**](OrderApi.md#orderPrototypeDeleteItems) | **DELETE** /Orders/{id}/items | Deletes all items of this model.
[**orderPrototypeDeleteRefunds**](OrderApi.md#orderPrototypeDeleteRefunds) | **DELETE** /Orders/{id}/refunds | Deletes all refunds of this model.
[**orderPrototypeDeleteSubscriptions**](OrderApi.md#orderPrototypeDeleteSubscriptions) | **DELETE** /Orders/{id}/subscriptions | Deletes all subscriptions of this model.
[**orderPrototypeDeleteTransactions**](OrderApi.md#orderPrototypeDeleteTransactions) | **DELETE** /Orders/{id}/transactions | Deletes all transactions of this model.
[**orderPrototypeDeleteVats**](OrderApi.md#orderPrototypeDeleteVats) | **DELETE** /Orders/{id}/vats | Deletes all vats of this model.
[**orderPrototypeDestroyByIdConfigurationServiceRequests**](OrderApi.md#orderPrototypeDestroyByIdConfigurationServiceRequests) | **DELETE** /Orders/{id}/configurationServiceRequests/{fk} | Delete a related item by id for configurationServiceRequests.
[**orderPrototypeDestroyByIdDiscounts**](OrderApi.md#orderPrototypeDestroyByIdDiscounts) | **DELETE** /Orders/{id}/discounts/{fk} | Delete a related item by id for discounts.
[**orderPrototypeDestroyByIdInvoices**](OrderApi.md#orderPrototypeDestroyByIdInvoices) | **DELETE** /Orders/{id}/invoices/{fk} | Delete a related item by id for invoices.
[**orderPrototypeDestroyByIdItems**](OrderApi.md#orderPrototypeDestroyByIdItems) | **DELETE** /Orders/{id}/items/{fk} | Delete a related item by id for items.
[**orderPrototypeDestroyByIdRefunds**](OrderApi.md#orderPrototypeDestroyByIdRefunds) | **DELETE** /Orders/{id}/refunds/{fk} | Delete a related item by id for refunds.
[**orderPrototypeDestroyByIdSubscriptions**](OrderApi.md#orderPrototypeDestroyByIdSubscriptions) | **DELETE** /Orders/{id}/subscriptions/{fk} | Delete a related item by id for subscriptions.
[**orderPrototypeDestroyByIdTransactions**](OrderApi.md#orderPrototypeDestroyByIdTransactions) | **DELETE** /Orders/{id}/transactions/{fk} | Delete a related item by id for transactions.
[**orderPrototypeDestroyByIdVats**](OrderApi.md#orderPrototypeDestroyByIdVats) | **DELETE** /Orders/{id}/vats/{fk} | Delete a related item by id for vats.
[**orderPrototypeExistsSubscriptions**](OrderApi.md#orderPrototypeExistsSubscriptions) | **HEAD** /Orders/{id}/subscriptions/rel/{fk} | Check the existence of subscriptions relation to an item by id.
[**orderPrototypeFindByIdConfigurationServiceRequests**](OrderApi.md#orderPrototypeFindByIdConfigurationServiceRequests) | **GET** /Orders/{id}/configurationServiceRequests/{fk} | Find a related item by id for configurationServiceRequests.
[**orderPrototypeFindByIdDiscounts**](OrderApi.md#orderPrototypeFindByIdDiscounts) | **GET** /Orders/{id}/discounts/{fk} | Find a related item by id for discounts.
[**orderPrototypeFindByIdInvoices**](OrderApi.md#orderPrototypeFindByIdInvoices) | **GET** /Orders/{id}/invoices/{fk} | Find a related item by id for invoices.
[**orderPrototypeFindByIdItems**](OrderApi.md#orderPrototypeFindByIdItems) | **GET** /Orders/{id}/items/{fk} | Find a related item by id for items.
[**orderPrototypeFindByIdRefunds**](OrderApi.md#orderPrototypeFindByIdRefunds) | **GET** /Orders/{id}/refunds/{fk} | Find a related item by id for refunds.
[**orderPrototypeFindByIdSubscriptions**](OrderApi.md#orderPrototypeFindByIdSubscriptions) | **GET** /Orders/{id}/subscriptions/{fk} | Find a related item by id for subscriptions.
[**orderPrototypeFindByIdTransactions**](OrderApi.md#orderPrototypeFindByIdTransactions) | **GET** /Orders/{id}/transactions/{fk} | Find a related item by id for transactions.
[**orderPrototypeFindByIdVats**](OrderApi.md#orderPrototypeFindByIdVats) | **GET** /Orders/{id}/vats/{fk} | Find a related item by id for vats.
[**orderPrototypeGetConfigurationServiceRequests**](OrderApi.md#orderPrototypeGetConfigurationServiceRequests) | **GET** /Orders/{id}/configurationServiceRequests | Queries configurationServiceRequests of Order.
[**orderPrototypeGetCustomer**](OrderApi.md#orderPrototypeGetCustomer) | **GET** /Orders/{id}/customer | Fetches belongsTo relation customer.
[**orderPrototypeGetDiscounts**](OrderApi.md#orderPrototypeGetDiscounts) | **GET** /Orders/{id}/discounts | Queries discounts of Order.
[**orderPrototypeGetInvoices**](OrderApi.md#orderPrototypeGetInvoices) | **GET** /Orders/{id}/invoices | Queries invoices of Order.
[**orderPrototypeGetItems**](OrderApi.md#orderPrototypeGetItems) | **GET** /Orders/{id}/items | Queries items of Order.
[**orderPrototypeGetRefunds**](OrderApi.md#orderPrototypeGetRefunds) | **GET** /Orders/{id}/refunds | Queries refunds of Order.
[**orderPrototypeGetSubscriptions**](OrderApi.md#orderPrototypeGetSubscriptions) | **GET** /Orders/{id}/subscriptions | Queries subscriptions of Order.
[**orderPrototypeGetTransactions**](OrderApi.md#orderPrototypeGetTransactions) | **GET** /Orders/{id}/transactions | Queries transactions of Order.
[**orderPrototypeGetVats**](OrderApi.md#orderPrototypeGetVats) | **GET** /Orders/{id}/vats | Queries vats of Order.
[**orderPrototypeLinkSubscriptions**](OrderApi.md#orderPrototypeLinkSubscriptions) | **PUT** /Orders/{id}/subscriptions/rel/{fk} | Add a related item by id for subscriptions.
[**orderPrototypePatchAttributes**](OrderApi.md#orderPrototypePatchAttributes) | **PATCH** /Orders/{id} | Patch attributes for a model instance and persist it into the data source.
[**orderPrototypeUnlinkSubscriptions**](OrderApi.md#orderPrototypeUnlinkSubscriptions) | **DELETE** /Orders/{id}/subscriptions/rel/{fk} | Remove the subscriptions relation to an item by id.
[**orderPrototypeUpdateByIdConfigurationServiceRequests**](OrderApi.md#orderPrototypeUpdateByIdConfigurationServiceRequests) | **PUT** /Orders/{id}/configurationServiceRequests/{fk} | Update a related item by id for configurationServiceRequests.
[**orderPrototypeUpdateByIdDiscounts**](OrderApi.md#orderPrototypeUpdateByIdDiscounts) | **PUT** /Orders/{id}/discounts/{fk} | Update a related item by id for discounts.
[**orderPrototypeUpdateByIdInvoices**](OrderApi.md#orderPrototypeUpdateByIdInvoices) | **PUT** /Orders/{id}/invoices/{fk} | Update a related item by id for invoices.
[**orderPrototypeUpdateByIdItems**](OrderApi.md#orderPrototypeUpdateByIdItems) | **PUT** /Orders/{id}/items/{fk} | Update a related item by id for items.
[**orderPrototypeUpdateByIdRefunds**](OrderApi.md#orderPrototypeUpdateByIdRefunds) | **PUT** /Orders/{id}/refunds/{fk} | Update a related item by id for refunds.
[**orderPrototypeUpdateByIdSubscriptions**](OrderApi.md#orderPrototypeUpdateByIdSubscriptions) | **PUT** /Orders/{id}/subscriptions/{fk} | Update a related item by id for subscriptions.
[**orderPrototypeUpdateByIdTransactions**](OrderApi.md#orderPrototypeUpdateByIdTransactions) | **PUT** /Orders/{id}/transactions/{fk} | Update a related item by id for transactions.
[**orderPrototypeUpdateByIdVats**](OrderApi.md#orderPrototypeUpdateByIdVats) | **PUT** /Orders/{id}/vats/{fk} | Update a related item by id for vats.
[**orderRefundInvoice**](OrderApi.md#orderRefundInvoice) | **GET** /Orders/{id}/refunds/{refundId}/invoice | 
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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

# **orderInvoice**
> \Yoast\MyYoastApiClient\Model\InlineResponse2008 orderInvoice($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->orderInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCountConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountConfigurationServiceRequests($id, $where)

Counts configurationServiceRequests of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountConfigurationServiceRequests($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountDiscounts**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountDiscounts($id, $where)

Counts discounts of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountDiscounts($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountDiscounts: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountInvoices**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountInvoices($id, $where)

Counts invoices of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountInvoices($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountInvoices: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountRefunds**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountRefunds($id, $where)

Counts refunds of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountRefunds($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountRefunds: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountSubscriptions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountSubscriptions($id, $where)

Counts subscriptions of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountSubscriptions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountSubscriptions: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountTransactions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountTransactions($id, $where)

Counts transactions of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountTransactions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountTransactions: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCountVats**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 orderPrototypeCountVats($id, $where)

Counts vats of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->orderPrototypeCountVats($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCountVats: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeCreateConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest orderPrototypeCreateConfigurationServiceRequests($id, $data)

Creates a new instance in configurationServiceRequests of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | 

try {
    $result = $api_instance->orderPrototypeCreateConfigurationServiceRequests($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem orderPrototypeCreateDiscounts($id, $data)

Creates a new instance in discounts of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | 

try {
    $result = $api_instance->orderPrototypeCreateDiscounts($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice orderPrototypeCreateInvoices($id, $data)

Creates a new instance in invoices of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\Invoice(); // \Yoast\MyYoastApiClient\Model\Invoice | 

try {
    $result = $api_instance->orderPrototypeCreateInvoices($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateRefunds**
> \Yoast\MyYoastApiClient\Model\Refund orderPrototypeCreateRefunds($id, $data)

Creates a new instance in refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | 

try {
    $result = $api_instance->orderPrototypeCreateRefunds($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription orderPrototypeCreateSubscriptions($id, $data)

Creates a new instance in subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->orderPrototypeCreateSubscriptions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateTransactions**
> \Yoast\MyYoastApiClient\Model\Transaction orderPrototypeCreateTransactions($id, $data)

Creates a new instance in transactions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | 

try {
    $result = $api_instance->orderPrototypeCreateTransactions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeCreateVats**
> \Yoast\MyYoastApiClient\Model\VATLineItem orderPrototypeCreateVats($id, $data)

Creates a new instance in vats of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | 

try {
    $result = $api_instance->orderPrototypeCreateVats($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeCreateVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDeleteConfigurationServiceRequests**
> orderPrototypeDeleteConfigurationServiceRequests($id)

Deletes all configurationServiceRequests of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteConfigurationServiceRequests($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteDiscounts**
> orderPrototypeDeleteDiscounts($id)

Deletes all discounts of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteDiscounts($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteDiscounts: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteInvoices**
> orderPrototypeDeleteInvoices($id)

Deletes all invoices of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteInvoices($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteInvoices: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteRefunds**
> orderPrototypeDeleteRefunds($id)

Deletes all refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteRefunds($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteRefunds: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteSubscriptions**
> orderPrototypeDeleteSubscriptions($id)

Deletes all subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteSubscriptions: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteTransactions**
> orderPrototypeDeleteTransactions($id)

Deletes all transactions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteTransactions($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteTransactions: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDeleteVats**
> orderPrototypeDeleteVats($id)

Deletes all vats of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id

try {
    $api_instance->orderPrototypeDeleteVats($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDeleteVats: ', $e->getMessage(), PHP_EOL;
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

# **orderPrototypeDestroyByIdConfigurationServiceRequests**
> orderPrototypeDestroyByIdConfigurationServiceRequests($id, $fk)

Delete a related item by id for configurationServiceRequests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for configurationServiceRequests

try {
    $api_instance->orderPrototypeDestroyByIdConfigurationServiceRequests($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for configurationServiceRequests |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdDiscounts**
> orderPrototypeDestroyByIdDiscounts($id, $fk)

Delete a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for discounts

try {
    $api_instance->orderPrototypeDestroyByIdDiscounts($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for discounts |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdInvoices**
> orderPrototypeDestroyByIdInvoices($id, $fk)

Delete a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for invoices

try {
    $api_instance->orderPrototypeDestroyByIdInvoices($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for invoices |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdItems**
> orderPrototypeDestroyByIdItems($id, $fk)

Delete a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for items

try {
    $api_instance->orderPrototypeDestroyByIdItems($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for items |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdRefunds**
> orderPrototypeDestroyByIdRefunds($id, $fk)

Delete a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $api_instance->orderPrototypeDestroyByIdRefunds($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for refunds |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdSubscriptions**
> orderPrototypeDestroyByIdSubscriptions($id, $fk)

Delete a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->orderPrototypeDestroyByIdSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdTransactions**
> orderPrototypeDestroyByIdTransactions($id, $fk)

Delete a related item by id for transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for transactions

try {
    $api_instance->orderPrototypeDestroyByIdTransactions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for transactions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeDestroyByIdVats**
> orderPrototypeDestroyByIdVats($id, $fk)

Delete a related item by id for vats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for vats

try {
    $api_instance->orderPrototypeDestroyByIdVats($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeDestroyByIdVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for vats |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeExistsSubscriptions**
> bool orderPrototypeExistsSubscriptions($id, $fk)

Check the existence of subscriptions relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->orderPrototypeExistsSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeExistsSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest orderPrototypeFindByIdConfigurationServiceRequests($id, $fk)

Find a related item by id for configurationServiceRequests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for configurationServiceRequests

try {
    $result = $api_instance->orderPrototypeFindByIdConfigurationServiceRequests($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for configurationServiceRequests |

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem orderPrototypeFindByIdDiscounts($id, $fk)

Find a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for discounts

try {
    $result = $api_instance->orderPrototypeFindByIdDiscounts($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for discounts |

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice orderPrototypeFindByIdInvoices($id, $fk)

Find a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for invoices

try {
    $result = $api_instance->orderPrototypeFindByIdInvoices($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for invoices |

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem orderPrototypeFindByIdItems($id, $fk)

Find a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for items

try {
    $result = $api_instance->orderPrototypeFindByIdItems($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for items |

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdRefunds**
> \Yoast\MyYoastApiClient\Model\Refund orderPrototypeFindByIdRefunds($id, $fk)

Find a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $result = $api_instance->orderPrototypeFindByIdRefunds($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for refunds |

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription orderPrototypeFindByIdSubscriptions($id, $fk)

Find a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->orderPrototypeFindByIdSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdTransactions**
> \Yoast\MyYoastApiClient\Model\Transaction orderPrototypeFindByIdTransactions($id, $fk)

Find a related item by id for transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for transactions

try {
    $result = $api_instance->orderPrototypeFindByIdTransactions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for transactions |

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeFindByIdVats**
> \Yoast\MyYoastApiClient\Model\VATLineItem orderPrototypeFindByIdVats($id, $fk)

Find a related item by id for vats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for vats

try {
    $result = $api_instance->orderPrototypeFindByIdVats($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeFindByIdVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for vats |

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest[] orderPrototypeGetConfigurationServiceRequests($id, $filter)

Queries configurationServiceRequests of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetConfigurationServiceRequests($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest[]**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\Customer orderPrototypeGetCustomer($id, $refresh)

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

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem[] orderPrototypeGetDiscounts($id, $filter)

Queries discounts of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetDiscounts($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem[]**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice[] orderPrototypeGetInvoices($id, $filter)

Queries invoices of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetInvoices($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice[]**](../Model/Invoice.md)

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

# **orderPrototypeGetRefunds**
> \Yoast\MyYoastApiClient\Model\Refund[] orderPrototypeGetRefunds($id, $filter)

Queries refunds of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetRefunds($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription[] orderPrototypeGetSubscriptions($id, $filter)

Queries subscriptions of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetSubscriptions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetTransactions**
> \Yoast\MyYoastApiClient\Model\Transaction[] orderPrototypeGetTransactions($id, $filter)

Queries transactions of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetTransactions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeGetVats**
> \Yoast\MyYoastApiClient\Model\VATLineItem[] orderPrototypeGetVats($id, $filter)

Queries vats of Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->orderPrototypeGetVats($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeGetVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem[]**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeLinkSubscriptions**
> \Yoast\MyYoastApiClient\Model\SubscriptionOrders orderPrototypeLinkSubscriptions($id, $fk, $data)

Add a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\SubscriptionOrders(); // \Yoast\MyYoastApiClient\Model\SubscriptionOrders | 

try {
    $result = $api_instance->orderPrototypeLinkSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeLinkSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |
 **data** | [**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/SubscriptionOrders.md)|  | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUnlinkSubscriptions**
> orderPrototypeUnlinkSubscriptions($id, $fk)

Remove the subscriptions relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->orderPrototypeUnlinkSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUnlinkSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest orderPrototypeUpdateByIdConfigurationServiceRequests($id, $fk, $data)

Update a related item by id for configurationServiceRequests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for configurationServiceRequests
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdConfigurationServiceRequests($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for configurationServiceRequests |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem orderPrototypeUpdateByIdDiscounts($id, $fk, $data)

Update a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for discounts
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdDiscounts($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for discounts |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice orderPrototypeUpdateByIdInvoices($id, $fk, $data)

Update a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for invoices
$data = new \Yoast\MyYoastApiClient\Model\Invoice(); // \Yoast\MyYoastApiClient\Model\Invoice | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdInvoices($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for invoices |
 **data** | [**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem orderPrototypeUpdateByIdItems($id, $fk, $data)

Update a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for items
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdItems($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for items |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdRefunds**
> \Yoast\MyYoastApiClient\Model\Refund orderPrototypeUpdateByIdRefunds($id, $fk, $data)

Update a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for refunds
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdRefunds($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for refunds |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription orderPrototypeUpdateByIdSubscriptions($id, $fk, $data)

Update a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for subscriptions |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdTransactions**
> \Yoast\MyYoastApiClient\Model\Transaction orderPrototypeUpdateByIdTransactions($id, $fk, $data)

Update a related item by id for transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for transactions
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdTransactions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for transactions |
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPrototypeUpdateByIdVats**
> \Yoast\MyYoastApiClient\Model\VATLineItem orderPrototypeUpdateByIdVats($id, $fk, $data)

Update a related item by id for vats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | Order id
$fk = "fk_example"; // string | Foreign key for vats
$data = new \Yoast\MyYoastApiClient\Model\VATLineItem(); // \Yoast\MyYoastApiClient\Model\VATLineItem | 

try {
    $result = $api_instance->orderPrototypeUpdateByIdVats($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPrototypeUpdateByIdVats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order id |
 **fk** | **string**| Foreign key for vats |
 **data** | [**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\VATLineItem**](../Model/VATLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRefundInvoice**
> \Yoast\MyYoastApiClient\Model\InlineResponse2008 orderRefundInvoice($id, $refund_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\OrderApi();
$id = "id_example"; // string | 
$refund_id = "refund_id_example"; // string | 

try {
    $result = $api_instance->orderRefundInvoice($id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderRefundInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **refund_id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| An object of model property name/value pairs | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

