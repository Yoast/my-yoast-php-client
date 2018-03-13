# Yoast\MyYoastApiClient\RefundApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundCount**](RefundApi.md#refundCount) | **GET** /Refunds/count | Count instances of the model matched by where from the data source.
[**refundCreate**](RefundApi.md#refundCreate) | **POST** /Refunds | Create a new instance of the model and persist it into the data source.
[**refundCreateChangeStreamGetRefundsChangeStream**](RefundApi.md#refundCreateChangeStreamGetRefundsChangeStream) | **GET** /Refunds/change-stream | Create a change stream.
[**refundCreateChangeStreamPostRefundsChangeStream**](RefundApi.md#refundCreateChangeStreamPostRefundsChangeStream) | **POST** /Refunds/change-stream | Create a change stream.
[**refundDeleteById**](RefundApi.md#refundDeleteById) | **DELETE** /Refunds/{id} | Delete a model instance by {{id}} from the data source.
[**refundExistsGetRefundsidExists**](RefundApi.md#refundExistsGetRefundsidExists) | **GET** /Refunds/{id}/exists | Check whether a model instance exists in the data source.
[**refundExistsHeadRefundsid**](RefundApi.md#refundExistsHeadRefundsid) | **HEAD** /Refunds/{id} | Check whether a model instance exists in the data source.
[**refundFind**](RefundApi.md#refundFind) | **GET** /Refunds | Find all instances of the model matched by filter from the data source.
[**refundFindById**](RefundApi.md#refundFindById) | **GET** /Refunds/{id} | Find a model instance by {{id}} from the data source.
[**refundFindOne**](RefundApi.md#refundFindOne) | **GET** /Refunds/findOne | Find first instance of the model matched by filter from the data source.
[**refundPatchOrCreate**](RefundApi.md#refundPatchOrCreate) | **PATCH** /Refunds | Patch an existing model instance or insert a new one into the data source.
[**refundPrototypeCountInvoices**](RefundApi.md#refundPrototypeCountInvoices) | **GET** /Refunds/{id}/invoices/count | Counts invoices of Refund.
[**refundPrototypeCountLineItems**](RefundApi.md#refundPrototypeCountLineItems) | **GET** /Refunds/{id}/lineItems/count | Counts lineItems of Refund.
[**refundPrototypeCountRefundLineItems**](RefundApi.md#refundPrototypeCountRefundLineItems) | **GET** /Refunds/{id}/refundLineItems/count | Counts refundLineItems of Refund.
[**refundPrototypeCreateInvoices**](RefundApi.md#refundPrototypeCreateInvoices) | **POST** /Refunds/{id}/invoices | Creates a new instance in invoices of this model.
[**refundPrototypeCreateLineItems**](RefundApi.md#refundPrototypeCreateLineItems) | **POST** /Refunds/{id}/lineItems | Creates a new instance in lineItems of this model.
[**refundPrototypeCreateRefundLineItems**](RefundApi.md#refundPrototypeCreateRefundLineItems) | **POST** /Refunds/{id}/refundLineItems | Creates a new instance in refundLineItems of this model.
[**refundPrototypeDeleteInvoices**](RefundApi.md#refundPrototypeDeleteInvoices) | **DELETE** /Refunds/{id}/invoices | Deletes all invoices of this model.
[**refundPrototypeDeleteLineItems**](RefundApi.md#refundPrototypeDeleteLineItems) | **DELETE** /Refunds/{id}/lineItems | Deletes all lineItems of this model.
[**refundPrototypeDeleteRefundLineItems**](RefundApi.md#refundPrototypeDeleteRefundLineItems) | **DELETE** /Refunds/{id}/refundLineItems | Deletes all refundLineItems of this model.
[**refundPrototypeDestroyByIdInvoices**](RefundApi.md#refundPrototypeDestroyByIdInvoices) | **DELETE** /Refunds/{id}/invoices/{fk} | Delete a related item by id for invoices.
[**refundPrototypeDestroyByIdLineItems**](RefundApi.md#refundPrototypeDestroyByIdLineItems) | **DELETE** /Refunds/{id}/lineItems/{fk} | Delete a related item by id for lineItems.
[**refundPrototypeDestroyByIdRefundLineItems**](RefundApi.md#refundPrototypeDestroyByIdRefundLineItems) | **DELETE** /Refunds/{id}/refundLineItems/{fk} | Delete a related item by id for refundLineItems.
[**refundPrototypeExistsLineItems**](RefundApi.md#refundPrototypeExistsLineItems) | **HEAD** /Refunds/{id}/lineItems/rel/{fk} | Check the existence of lineItems relation to an item by id.
[**refundPrototypeFindByIdInvoices**](RefundApi.md#refundPrototypeFindByIdInvoices) | **GET** /Refunds/{id}/invoices/{fk} | Find a related item by id for invoices.
[**refundPrototypeFindByIdLineItems**](RefundApi.md#refundPrototypeFindByIdLineItems) | **GET** /Refunds/{id}/lineItems/{fk} | Find a related item by id for lineItems.
[**refundPrototypeFindByIdRefundLineItems**](RefundApi.md#refundPrototypeFindByIdRefundLineItems) | **GET** /Refunds/{id}/refundLineItems/{fk} | Find a related item by id for refundLineItems.
[**refundPrototypeGetInvoices**](RefundApi.md#refundPrototypeGetInvoices) | **GET** /Refunds/{id}/invoices | Queries invoices of Refund.
[**refundPrototypeGetLineItems**](RefundApi.md#refundPrototypeGetLineItems) | **GET** /Refunds/{id}/lineItems | Queries lineItems of Refund.
[**refundPrototypeGetOrder**](RefundApi.md#refundPrototypeGetOrder) | **GET** /Refunds/{id}/order | Fetches belongsTo relation order.
[**refundPrototypeGetRefundLineItems**](RefundApi.md#refundPrototypeGetRefundLineItems) | **GET** /Refunds/{id}/refundLineItems | Queries refundLineItems of Refund.
[**refundPrototypeLinkLineItems**](RefundApi.md#refundPrototypeLinkLineItems) | **PUT** /Refunds/{id}/lineItems/rel/{fk} | Add a related item by id for lineItems.
[**refundPrototypePatchAttributes**](RefundApi.md#refundPrototypePatchAttributes) | **PATCH** /Refunds/{id} | Patch attributes for a model instance and persist it into the data source.
[**refundPrototypeUnlinkLineItems**](RefundApi.md#refundPrototypeUnlinkLineItems) | **DELETE** /Refunds/{id}/lineItems/rel/{fk} | Remove the lineItems relation to an item by id.
[**refundPrototypeUpdateByIdInvoices**](RefundApi.md#refundPrototypeUpdateByIdInvoices) | **PUT** /Refunds/{id}/invoices/{fk} | Update a related item by id for invoices.
[**refundPrototypeUpdateByIdLineItems**](RefundApi.md#refundPrototypeUpdateByIdLineItems) | **PUT** /Refunds/{id}/lineItems/{fk} | Update a related item by id for lineItems.
[**refundPrototypeUpdateByIdRefundLineItems**](RefundApi.md#refundPrototypeUpdateByIdRefundLineItems) | **PUT** /Refunds/{id}/refundLineItems/{fk} | Update a related item by id for refundLineItems.
[**refundReplaceByIdPostRefundsidReplace**](RefundApi.md#refundReplaceByIdPostRefundsidReplace) | **POST** /Refunds/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**refundReplaceByIdPutRefundsid**](RefundApi.md#refundReplaceByIdPutRefundsid) | **PUT** /Refunds/{id} | Replace attributes for a model instance and persist it into the data source.
[**refundReplaceOrCreatePostRefundsReplaceOrCreate**](RefundApi.md#refundReplaceOrCreatePostRefundsReplaceOrCreate) | **POST** /Refunds/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**refundReplaceOrCreatePutRefunds**](RefundApi.md#refundReplaceOrCreatePutRefunds) | **PUT** /Refunds | Replace an existing model instance or insert a new one into the data source.
[**refundUpdateAll**](RefundApi.md#refundUpdateAll) | **POST** /Refunds/update | Update instances of the model matched by {{where}} from the data source.
[**refundUpsertWithWhere**](RefundApi.md#refundUpsertWithWhere) | **POST** /Refunds/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **refundCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 refundCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->refundCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCount: ', $e->getMessage(), PHP_EOL;
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

# **refundCreate**
> \Yoast\MyYoastApiClient\Model\Refund refundCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundCreateChangeStreamGetRefundsChangeStream**
> \SplFileObject refundCreateChangeStreamGetRefundsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->refundCreateChangeStreamGetRefundsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCreateChangeStreamGetRefundsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **refundCreateChangeStreamPostRefundsChangeStream**
> \SplFileObject refundCreateChangeStreamPostRefundsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->refundCreateChangeStreamPostRefundsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundCreateChangeStreamPostRefundsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **refundDeleteById**
> object refundDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->refundDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **refundExistsGetRefundsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 refundExistsGetRefundsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->refundExistsGetRefundsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundExistsGetRefundsidExists: ', $e->getMessage(), PHP_EOL;
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

# **refundExistsHeadRefundsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 refundExistsHeadRefundsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->refundExistsHeadRefundsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundExistsHeadRefundsid: ', $e->getMessage(), PHP_EOL;
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

# **refundFind**
> \Yoast\MyYoastApiClient\Model\Refund[] refundFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->refundFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundFindById**
> \Yoast\MyYoastApiClient\Model\Refund refundFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->refundFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundFindOne**
> \Yoast\MyYoastApiClient\Model\Refund refundFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->refundFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Refund refundPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCountInvoices**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 refundPrototypeCountInvoices($id, $where)

Counts invoices of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->refundPrototypeCountInvoices($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCountInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCountLineItems**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 refundPrototypeCountLineItems($id, $where)

Counts lineItems of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->refundPrototypeCountLineItems($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCountLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCountRefundLineItems**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 refundPrototypeCountRefundLineItems($id, $where)

Counts refundLineItems of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->refundPrototypeCountRefundLineItems($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCountRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCreateInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice refundPrototypeCreateInvoices($id, $data)

Creates a new instance in invoices of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$data = new \Yoast\MyYoastApiClient\Model\Invoice(); // \Yoast\MyYoastApiClient\Model\Invoice | 

try {
    $result = $apiInstance->refundPrototypeCreateInvoices($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCreateInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCreateLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem refundPrototypeCreateLineItems($id, $data)

Creates a new instance in lineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $apiInstance->refundPrototypeCreateLineItems($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCreateLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeCreateRefundLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundPrototypeCreateRefundLineItems($id, $data)

Creates a new instance in refundLineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | 

try {
    $result = $apiInstance->refundPrototypeCreateRefundLineItems($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeCreateRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDeleteInvoices**
> refundPrototypeDeleteInvoices($id)

Deletes all invoices of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id

try {
    $apiInstance->refundPrototypeDeleteInvoices($id);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDeleteInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDeleteLineItems**
> refundPrototypeDeleteLineItems($id)

Deletes all lineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id

try {
    $apiInstance->refundPrototypeDeleteLineItems($id);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDeleteLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDeleteRefundLineItems**
> refundPrototypeDeleteRefundLineItems($id)

Deletes all refundLineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id

try {
    $apiInstance->refundPrototypeDeleteRefundLineItems($id);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDeleteRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDestroyByIdInvoices**
> refundPrototypeDestroyByIdInvoices($id, $fk)

Delete a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for invoices

try {
    $apiInstance->refundPrototypeDestroyByIdInvoices($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDestroyByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for invoices |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDestroyByIdLineItems**
> refundPrototypeDestroyByIdLineItems($id, $fk)

Delete a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $apiInstance->refundPrototypeDestroyByIdLineItems($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDestroyByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeDestroyByIdRefundLineItems**
> refundPrototypeDestroyByIdRefundLineItems($id, $fk)

Delete a related item by id for refundLineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for refundLineItems

try {
    $apiInstance->refundPrototypeDestroyByIdRefundLineItems($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeDestroyByIdRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for refundLineItems |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeExistsLineItems**
> bool refundPrototypeExistsLineItems($id, $fk)

Check the existence of lineItems relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $result = $apiInstance->refundPrototypeExistsLineItems($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeExistsLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeFindByIdInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice refundPrototypeFindByIdInvoices($id, $fk)

Find a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for invoices

try {
    $result = $apiInstance->refundPrototypeFindByIdInvoices($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeFindByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for invoices |

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeFindByIdLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem refundPrototypeFindByIdLineItems($id, $fk)

Find a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $result = $apiInstance->refundPrototypeFindByIdLineItems($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeFindByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeFindByIdRefundLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundPrototypeFindByIdRefundLineItems($id, $fk)

Find a related item by id for refundLineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for refundLineItems

try {
    $result = $apiInstance->refundPrototypeFindByIdRefundLineItems($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeFindByIdRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for refundLineItems |

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeGetInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice[] refundPrototypeGetInvoices($id, $filter)

Queries invoices of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$filter = "filter_example"; // string | 

try {
    $result = $apiInstance->refundPrototypeGetInvoices($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeGetInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeGetLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem[] refundPrototypeGetLineItems($id, $filter)

Queries lineItems of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$filter = "filter_example"; // string | 

try {
    $result = $apiInstance->refundPrototypeGetLineItems($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeGetLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem[]**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order refundPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$refresh = true; // bool | 

try {
    $result = $apiInstance->refundPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeGetRefundLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem[] refundPrototypeGetRefundLineItems($id, $filter)

Queries refundLineItems of Refund.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$filter = "filter_example"; // string | 

try {
    $result = $apiInstance->refundPrototypeGetRefundLineItems($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeGetRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem[]**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeLinkLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundPrototypeLinkLineItems($id, $fk, $data)

Add a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | 

try {
    $result = $apiInstance->refundPrototypeLinkLineItems($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeLinkLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Refund refundPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $apiInstance->refundPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeUnlinkLineItems**
> refundPrototypeUnlinkLineItems($id, $fk)

Remove the lineItems relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $apiInstance->refundPrototypeUnlinkLineItems($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeUnlinkLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeUpdateByIdInvoices**
> \Yoast\MyYoastApiClient\Model\Invoice refundPrototypeUpdateByIdInvoices($id, $fk, $data)

Update a related item by id for invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for invoices
$data = new \Yoast\MyYoastApiClient\Model\Invoice(); // \Yoast\MyYoastApiClient\Model\Invoice | 

try {
    $result = $apiInstance->refundPrototypeUpdateByIdInvoices($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeUpdateByIdInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
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

# **refundPrototypeUpdateByIdLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem refundPrototypeUpdateByIdLineItems($id, $fk, $data)

Update a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for lineItems
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $apiInstance->refundPrototypeUpdateByIdLineItems($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeUpdateByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for lineItems |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundPrototypeUpdateByIdRefundLineItems**
> \Yoast\MyYoastApiClient\Model\RefundLineItem refundPrototypeUpdateByIdRefundLineItems($id, $fk, $data)

Update a related item by id for refundLineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Refund id
$fk = "fk_example"; // string | Foreign key for refundLineItems
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | 

try {
    $result = $apiInstance->refundPrototypeUpdateByIdRefundLineItems($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundPrototypeUpdateByIdRefundLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Refund id |
 **fk** | **string**| Foreign key for refundLineItems |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundReplaceByIdPostRefundsidReplace**
> \Yoast\MyYoastApiClient\Model\Refund refundReplaceByIdPostRefundsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundReplaceByIdPostRefundsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundReplaceByIdPostRefundsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundReplaceByIdPutRefundsid**
> \Yoast\MyYoastApiClient\Model\Refund refundReplaceByIdPutRefundsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundReplaceByIdPutRefundsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundReplaceByIdPutRefundsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundReplaceOrCreatePostRefundsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Refund refundReplaceOrCreatePostRefundsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundReplaceOrCreatePostRefundsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundReplaceOrCreatePostRefundsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundReplaceOrCreatePutRefunds**
> \Yoast\MyYoastApiClient\Model\Refund refundReplaceOrCreatePutRefunds($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $apiInstance->refundReplaceOrCreatePutRefunds($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundReplaceOrCreatePutRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 refundUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $apiInstance->refundUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Refund refundUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $apiInstance->refundUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

