# Yoast\MyYoastApiClient\TransactionApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionCount**](TransactionApi.md#transactionCount) | **GET** /Transactions/count | Count instances of the model matched by where from the data source.
[**transactionCreate**](TransactionApi.md#transactionCreate) | **POST** /Transactions | Create a new instance of the model and persist it into the data source.
[**transactionCreateChangeStreamGetTransactionsChangeStream**](TransactionApi.md#transactionCreateChangeStreamGetTransactionsChangeStream) | **GET** /Transactions/change-stream | Create a change stream.
[**transactionCreateChangeStreamPostTransactionsChangeStream**](TransactionApi.md#transactionCreateChangeStreamPostTransactionsChangeStream) | **POST** /Transactions/change-stream | Create a change stream.
[**transactionDeleteById**](TransactionApi.md#transactionDeleteById) | **DELETE** /Transactions/{id} | Delete a model instance by {{id}} from the data source.
[**transactionExistsGetTransactionsidExists**](TransactionApi.md#transactionExistsGetTransactionsidExists) | **GET** /Transactions/{id}/exists | Check whether a model instance exists in the data source.
[**transactionExistsHeadTransactionsid**](TransactionApi.md#transactionExistsHeadTransactionsid) | **HEAD** /Transactions/{id} | Check whether a model instance exists in the data source.
[**transactionFind**](TransactionApi.md#transactionFind) | **GET** /Transactions | Find all instances of the model matched by filter from the data source.
[**transactionFindById**](TransactionApi.md#transactionFindById) | **GET** /Transactions/{id} | Find a model instance by {{id}} from the data source.
[**transactionFindOne**](TransactionApi.md#transactionFindOne) | **GET** /Transactions/findOne | Find first instance of the model matched by filter from the data source.
[**transactionPatchOrCreate**](TransactionApi.md#transactionPatchOrCreate) | **PATCH** /Transactions | Patch an existing model instance or insert a new one into the data source.
[**transactionPrototypeCountRefunds**](TransactionApi.md#transactionPrototypeCountRefunds) | **GET** /Transactions/{id}/refunds/count | Counts refunds of Transaction.
[**transactionPrototypeCreateRefunds**](TransactionApi.md#transactionPrototypeCreateRefunds) | **POST** /Transactions/{id}/refunds | Creates a new instance in refunds of this model.
[**transactionPrototypeDeleteRefunds**](TransactionApi.md#transactionPrototypeDeleteRefunds) | **DELETE** /Transactions/{id}/refunds | Deletes all refunds of this model.
[**transactionPrototypeDestroyByIdRefunds**](TransactionApi.md#transactionPrototypeDestroyByIdRefunds) | **DELETE** /Transactions/{id}/refunds/{fk} | Delete a related item by id for refunds.
[**transactionPrototypeFindByIdRefunds**](TransactionApi.md#transactionPrototypeFindByIdRefunds) | **GET** /Transactions/{id}/refunds/{fk} | Find a related item by id for refunds.
[**transactionPrototypeGetOrder**](TransactionApi.md#transactionPrototypeGetOrder) | **GET** /Transactions/{id}/order | Fetches belongsTo relation order.
[**transactionPrototypeGetRefunds**](TransactionApi.md#transactionPrototypeGetRefunds) | **GET** /Transactions/{id}/refunds | Queries refunds of Transaction.
[**transactionPrototypePatchAttributes**](TransactionApi.md#transactionPrototypePatchAttributes) | **PATCH** /Transactions/{id} | Patch attributes for a model instance and persist it into the data source.
[**transactionPrototypeUpdateByIdRefunds**](TransactionApi.md#transactionPrototypeUpdateByIdRefunds) | **PUT** /Transactions/{id}/refunds/{fk} | Update a related item by id for refunds.
[**transactionReplaceByIdPostTransactionsidReplace**](TransactionApi.md#transactionReplaceByIdPostTransactionsidReplace) | **POST** /Transactions/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**transactionReplaceByIdPutTransactionsid**](TransactionApi.md#transactionReplaceByIdPutTransactionsid) | **PUT** /Transactions/{id} | Replace attributes for a model instance and persist it into the data source.
[**transactionReplaceOrCreatePostTransactionsReplaceOrCreate**](TransactionApi.md#transactionReplaceOrCreatePostTransactionsReplaceOrCreate) | **POST** /Transactions/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**transactionReplaceOrCreatePutTransactions**](TransactionApi.md#transactionReplaceOrCreatePutTransactions) | **PUT** /Transactions | Replace an existing model instance or insert a new one into the data source.
[**transactionUpdateAll**](TransactionApi.md#transactionUpdateAll) | **POST** /Transactions/update | Update instances of the model matched by {{where}} from the data source.
[**transactionUpsertWithWhere**](TransactionApi.md#transactionUpsertWithWhere) | **POST** /Transactions/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **transactionCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 transactionCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->transactionCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCount: ', $e->getMessage(), PHP_EOL;
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

# **transactionCreate**
> \Yoast\MyYoastApiClient\Model\Transaction transactionCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionCreateChangeStreamGetTransactionsChangeStream**
> \SplFileObject transactionCreateChangeStreamGetTransactionsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->transactionCreateChangeStreamGetTransactionsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCreateChangeStreamGetTransactionsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **transactionCreateChangeStreamPostTransactionsChangeStream**
> \SplFileObject transactionCreateChangeStreamPostTransactionsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->transactionCreateChangeStreamPostTransactionsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCreateChangeStreamPostTransactionsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **transactionDeleteById**
> object transactionDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->transactionDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **transactionExistsGetTransactionsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 transactionExistsGetTransactionsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->transactionExistsGetTransactionsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionExistsGetTransactionsidExists: ', $e->getMessage(), PHP_EOL;
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

# **transactionExistsHeadTransactionsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 transactionExistsHeadTransactionsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->transactionExistsHeadTransactionsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionExistsHeadTransactionsid: ', $e->getMessage(), PHP_EOL;
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

# **transactionFind**
> \Yoast\MyYoastApiClient\Model\Transaction[] transactionFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->transactionFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionFindById**
> \Yoast\MyYoastApiClient\Model\Transaction transactionFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->transactionFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionFindOne**
> \Yoast\MyYoastApiClient\Model\Transaction transactionFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->transactionFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Transaction transactionPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeCountRefunds**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 transactionPrototypeCountRefunds($id, $where)

Counts refunds of Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->transactionPrototypeCountRefunds($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeCountRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeCreateRefunds**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionPrototypeCreateRefunds($id, $data)

Creates a new instance in refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | 

try {
    $result = $apiInstance->transactionPrototypeCreateRefunds($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeCreateRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeDeleteRefunds**
> transactionPrototypeDeleteRefunds($id)

Deletes all refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id

try {
    $apiInstance->transactionPrototypeDeleteRefunds($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeDeleteRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeDestroyByIdRefunds**
> transactionPrototypeDestroyByIdRefunds($id, $fk)

Delete a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $apiInstance->transactionPrototypeDestroyByIdRefunds($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeDestroyByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **fk** | **string**| Foreign key for refunds |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeFindByIdRefunds**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionPrototypeFindByIdRefunds($id, $fk)

Find a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $result = $apiInstance->transactionPrototypeFindByIdRefunds($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeFindByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **fk** | **string**| Foreign key for refunds |

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order transactionPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$refresh = true; // bool | 

try {
    $result = $apiInstance->transactionPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeGetRefunds**
> \Yoast\MyYoastApiClient\Model\TransactionRefund[] transactionPrototypeGetRefunds($id, $filter)

Queries refunds of Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$filter = "filter_example"; // string | 

try {
    $result = $apiInstance->transactionPrototypeGetRefunds($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeGetRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund[]**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Transaction transactionPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $apiInstance->transactionPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeUpdateByIdRefunds**
> \Yoast\MyYoastApiClient\Model\TransactionRefund transactionPrototypeUpdateByIdRefunds($id, $fk, $data)

Update a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Transaction id
$fk = "fk_example"; // string | Foreign key for refunds
$data = new \Yoast\MyYoastApiClient\Model\TransactionRefund(); // \Yoast\MyYoastApiClient\Model\TransactionRefund | 

try {
    $result = $apiInstance->transactionPrototypeUpdateByIdRefunds($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeUpdateByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **fk** | **string**| Foreign key for refunds |
 **data** | [**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\TransactionRefund**](../Model/TransactionRefund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionReplaceByIdPostTransactionsidReplace**
> \Yoast\MyYoastApiClient\Model\Transaction transactionReplaceByIdPostTransactionsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionReplaceByIdPostTransactionsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceByIdPostTransactionsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionReplaceByIdPutTransactionsid**
> \Yoast\MyYoastApiClient\Model\Transaction transactionReplaceByIdPutTransactionsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionReplaceByIdPutTransactionsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceByIdPutTransactionsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionReplaceOrCreatePostTransactionsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Transaction transactionReplaceOrCreatePostTransactionsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionReplaceOrCreatePostTransactionsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceOrCreatePostTransactionsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionReplaceOrCreatePutTransactions**
> \Yoast\MyYoastApiClient\Model\Transaction transactionReplaceOrCreatePutTransactions($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $apiInstance->transactionReplaceOrCreatePutTransactions($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceOrCreatePutTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 transactionUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $apiInstance->transactionUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Transaction transactionUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $apiInstance->transactionUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

