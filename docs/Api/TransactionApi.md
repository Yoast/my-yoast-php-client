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
[**transactionPrototypeCountItems**](TransactionApi.md#transactionPrototypeCountItems) | **GET** /Transactions/{id}/items/count | Counts items of Transaction.
[**transactionPrototypeCreateItems**](TransactionApi.md#transactionPrototypeCreateItems) | **POST** /Transactions/{id}/items | Creates a new instance in items of this model.
[**transactionPrototypeDeleteItems**](TransactionApi.md#transactionPrototypeDeleteItems) | **DELETE** /Transactions/{id}/items | Deletes all items of this model.
[**transactionPrototypeDestroyByIdItems**](TransactionApi.md#transactionPrototypeDestroyByIdItems) | **DELETE** /Transactions/{id}/items/{fk} | Delete a related item by id for items.
[**transactionPrototypeFindByIdItems**](TransactionApi.md#transactionPrototypeFindByIdItems) | **GET** /Transactions/{id}/items/{fk} | Find a related item by id for items.
[**transactionPrototypeGetCustomer**](TransactionApi.md#transactionPrototypeGetCustomer) | **GET** /Transactions/{id}/customer | Fetches belongsTo relation customer.
[**transactionPrototypeGetItems**](TransactionApi.md#transactionPrototypeGetItems) | **GET** /Transactions/{id}/items | Queries items of Transaction.
[**transactionPrototypePatchAttributes**](TransactionApi.md#transactionPrototypePatchAttributes) | **PATCH** /Transactions/{id} | Patch attributes for a model instance and persist it into the data source.
[**transactionPrototypeUpdateByIdItems**](TransactionApi.md#transactionPrototypeUpdateByIdItems) | **PUT** /Transactions/{id}/items/{fk} | Update a related item by id for items.
[**transactionReplaceByIdPostTransactionsidReplace**](TransactionApi.md#transactionReplaceByIdPostTransactionsidReplace) | **POST** /Transactions/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**transactionReplaceByIdPutTransactionsid**](TransactionApi.md#transactionReplaceByIdPutTransactionsid) | **PUT** /Transactions/{id} | Replace attributes for a model instance and persist it into the data source.
[**transactionReplaceOrCreatePostTransactionsReplaceOrCreate**](TransactionApi.md#transactionReplaceOrCreatePostTransactionsReplaceOrCreate) | **POST** /Transactions/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**transactionReplaceOrCreatePutTransactions**](TransactionApi.md#transactionReplaceOrCreatePutTransactions) | **PUT** /Transactions | Replace an existing model instance or insert a new one into the data source.
[**transactionUpdateAll**](TransactionApi.md#transactionUpdateAll) | **POST** /Transactions/update | Update instances of the model matched by {{where}} from the data source.
[**transactionUpsertWithWhere**](TransactionApi.md#transactionUpsertWithWhere) | **POST** /Transactions/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **transactionCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 transactionCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->transactionCount($where);
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

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->transactionCreateChangeStreamGetTransactionsChangeStream($options);
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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->transactionCreateChangeStreamPostTransactionsChangeStream($options);
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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionDeleteById($id);
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
> \Yoast\MyYoastApiClient\Model\InlineResponse200 transactionExistsGetTransactionsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionExistsGetTransactionsidExists($id);
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

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionExistsHeadTransactionsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 transactionExistsHeadTransactionsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->transactionExistsHeadTransactionsid($id);
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

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->transactionFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->transactionFindById($id, $filter);
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
 **filter** | **string**| Filter defining fields and include | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->transactionFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeCountItems**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 transactionPrototypeCountItems($id, $where)

Counts items of Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->transactionPrototypeCountItems($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeCountItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeCreateItems**
> \Yoast\MyYoastApiClient\Model\LineItem transactionPrototypeCreateItems($id, $data)

Creates a new instance in items of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->transactionPrototypeCreateItems($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeCreateItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeDeleteItems**
> transactionPrototypeDeleteItems($id)

Deletes all items of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id

try {
    $api_instance->transactionPrototypeDeleteItems($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeDeleteItems: ', $e->getMessage(), PHP_EOL;
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

# **transactionPrototypeDestroyByIdItems**
> transactionPrototypeDestroyByIdItems($fk, $id)

Delete a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Transaction id

try {
    $api_instance->transactionPrototypeDestroyByIdItems($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeDestroyByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Transaction id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeFindByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem transactionPrototypeFindByIdItems($fk, $id)

Find a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Transaction id

try {
    $result = $api_instance->transactionPrototypeFindByIdItems($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeFindByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Transaction id |

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\MyYoastUser transactionPrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id
$refresh = true; // bool | 

try {
    $result = $api_instance->transactionPrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeGetItems**
> \Yoast\MyYoastApiClient\Model\LineItem[] transactionPrototypeGetItems($id, $filter)

Queries items of Transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->transactionPrototypeGetItems($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeGetItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem[]**](../Model/LineItem.md)

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Transaction id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $api_instance->transactionPrototypePatchAttributes($id, $data);
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionPrototypeUpdateByIdItems**
> \Yoast\MyYoastApiClient\Model\LineItem transactionPrototypeUpdateByIdItems($fk, $id, $data)

Update a related item by id for items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$fk = "fk_example"; // string | Foreign key for items
$id = "id_example"; // string | Transaction id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->transactionPrototypeUpdateByIdItems($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionPrototypeUpdateByIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for items |
 **id** | **string**| Transaction id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionReplaceByIdPostTransactionsidReplace($id, $data);
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionReplaceByIdPutTransactionsid($id, $data);
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionReplaceOrCreatePostTransactionsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceOrCreatePostTransactionsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | Model instance data

try {
    $result = $api_instance->transactionReplaceOrCreatePutTransactions($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionReplaceOrCreatePutTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 transactionUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $api_instance->transactionUpdateAll($where, $data);
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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

$api_instance = new Yoast\MyYoastApiClient\Api\TransactionApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Transaction(); // \Yoast\MyYoastApiClient\Model\Transaction | An object of model property name/value pairs

try {
    $result = $api_instance->transactionUpsertWithWhere($where, $data);
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/\Yoast\MyYoastApiClient\Model\Transaction.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

