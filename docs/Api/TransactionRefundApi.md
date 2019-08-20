# Yoast\MyYoastApiClient\TransactionRefundApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionRefundCount**](TransactionRefundApi.md#transactionRefundCount) | **GET** /TransactionRefunds/count | Count instances of the model matched by where from the data source.
[**transactionRefundCreate**](TransactionRefundApi.md#transactionRefundCreate) | **POST** /TransactionRefunds | Create a new instance of the model and persist it into the data source.
[**transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream**](TransactionRefundApi.md#transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream) | **GET** /TransactionRefunds/change-stream | Create a change stream.
[**transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream**](TransactionRefundApi.md#transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream) | **POST** /TransactionRefunds/change-stream | Create a change stream.
[**transactionRefundDeleteById**](TransactionRefundApi.md#transactionRefundDeleteById) | **DELETE** /TransactionRefunds/{id} | Delete a model instance by {{id}} from the data source.
[**transactionRefundExistsGetTransactionRefundsidExists**](TransactionRefundApi.md#transactionRefundExistsGetTransactionRefundsidExists) | **GET** /TransactionRefunds/{id}/exists | Check whether a model instance exists in the data source.
[**transactionRefundExistsHeadTransactionRefundsid**](TransactionRefundApi.md#transactionRefundExistsHeadTransactionRefundsid) | **HEAD** /TransactionRefunds/{id} | Check whether a model instance exists in the data source.
[**transactionRefundFind**](TransactionRefundApi.md#transactionRefundFind) | **GET** /TransactionRefunds | Find all instances of the model matched by filter from the data source.
[**transactionRefundFindById**](TransactionRefundApi.md#transactionRefundFindById) | **GET** /TransactionRefunds/{id} | Find a model instance by {{id}} from the data source.
[**transactionRefundFindOne**](TransactionRefundApi.md#transactionRefundFindOne) | **GET** /TransactionRefunds/findOne | Find first instance of the model matched by filter from the data source.
[**transactionRefundPatchOrCreate**](TransactionRefundApi.md#transactionRefundPatchOrCreate) | **PATCH** /TransactionRefunds | Patch an existing model instance or insert a new one into the data source.
[**transactionRefundPrototypeGetTransaction**](TransactionRefundApi.md#transactionRefundPrototypeGetTransaction) | **GET** /TransactionRefunds/{id}/transaction | Fetches belongsTo relation transaction.
[**transactionRefundPrototypePatchAttributes**](TransactionRefundApi.md#transactionRefundPrototypePatchAttributes) | **PATCH** /TransactionRefunds/{id} | Patch attributes for a model instance and persist it into the data source.
[**transactionRefundReplaceByIdPostTransactionRefundsidReplace**](TransactionRefundApi.md#transactionRefundReplaceByIdPostTransactionRefundsidReplace) | **POST** /TransactionRefunds/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**transactionRefundReplaceByIdPutTransactionRefundsid**](TransactionRefundApi.md#transactionRefundReplaceByIdPutTransactionRefundsid) | **PUT** /TransactionRefunds/{id} | Replace attributes for a model instance and persist it into the data source.
[**transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate**](TransactionRefundApi.md#transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate) | **POST** /TransactionRefunds/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**transactionRefundReplaceOrCreatePutTransactionRefunds**](TransactionRefundApi.md#transactionRefundReplaceOrCreatePutTransactionRefunds) | **PUT** /TransactionRefunds | Replace an existing model instance or insert a new one into the data source.
[**transactionRefundUpdateAll**](TransactionRefundApi.md#transactionRefundUpdateAll) | **POST** /TransactionRefunds/update | Update instances of the model matched by {{where}} from the data source.
[**transactionRefundUpsertWithWhere**](TransactionRefundApi.md#transactionRefundUpsertWithWhere) | **POST** /TransactionRefunds/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **transactionRefundCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 transactionRefundCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->transactionRefundCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundCount: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundCreate**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream**
> \SplFileObject transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundCreateChangeStreamGetTransactionRefundsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream**
> \SplFileObject transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundCreateChangeStreamPostTransactionRefundsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundDeleteById**
> object transactionRefundDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionRefundDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundExistsGetTransactionRefundsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 transactionRefundExistsGetTransactionRefundsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionRefundExistsGetTransactionRefundsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundExistsGetTransactionRefundsidExists: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundExistsHeadTransactionRefundsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 transactionRefundExistsHeadTransactionRefundsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionRefundExistsHeadTransactionRefundsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundExistsHeadTransactionRefundsid: ', $e->getMessage(), PHP_EOL;
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

# **transactionRefundFind**
> \Yoast\MyYoastApiClient\Model\TransactionRefund[] transactionRefundFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->transactionRefundFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund[]**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundFindById**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->transactionRefundFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundFindOne**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->transactionRefundFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundPrototypeGetTransaction**
> \Yoast\MyYoastApiClient\Model\Transaction transactionRefundPrototypeGetTransaction($id, $refresh)

Fetches belongsTo relation transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | TransactionRefund id
$refresh = true; // bool | 

try {
    $result = $api_instance->transactionRefundPrototypeGetTransaction($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundPrototypeGetTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TransactionRefund id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | TransactionRefund id
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | An object of model property name/value pairs

try {
    $result = $api_instance->transactionRefundPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TransactionRefund id |
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundReplaceByIdPostTransactionRefundsidReplace**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundReplaceByIdPostTransactionRefundsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundReplaceByIdPostTransactionRefundsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundReplaceByIdPostTransactionRefundsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundReplaceByIdPutTransactionRefundsid**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundReplaceByIdPutTransactionRefundsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundReplaceByIdPutTransactionRefundsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundReplaceByIdPutTransactionRefundsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundReplaceOrCreatePostTransactionRefundsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundReplaceOrCreatePutTransactionRefunds**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundReplaceOrCreatePutTransactionRefunds($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | Model instance data

try {
    $result = $api_instance->transactionRefundReplaceOrCreatePutTransactionRefunds($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundReplaceOrCreatePutTransactionRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 transactionRefundUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | An object of model property name/value pairs

try {
    $result = $api_instance->transactionRefundUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionRefundUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionRefundApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | An object of model property name/value pairs

try {
    $result = $api_instance->transactionRefundUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundApi->transactionRefundUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

