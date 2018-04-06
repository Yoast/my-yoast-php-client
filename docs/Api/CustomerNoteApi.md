# Yoast\MyYoastApiClient\CustomerNoteApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerNoteCount**](CustomerNoteApi.md#customerNoteCount) | **GET** /CustomerNotes/count | Count instances of the model matched by where from the data source.
[**customerNoteCreate**](CustomerNoteApi.md#customerNoteCreate) | **POST** /CustomerNotes | Create a new instance of the model and persist it into the data source.
[**customerNoteCreateChangeStreamGetCustomerNotesChangeStream**](CustomerNoteApi.md#customerNoteCreateChangeStreamGetCustomerNotesChangeStream) | **GET** /CustomerNotes/change-stream | Create a change stream.
[**customerNoteCreateChangeStreamPostCustomerNotesChangeStream**](CustomerNoteApi.md#customerNoteCreateChangeStreamPostCustomerNotesChangeStream) | **POST** /CustomerNotes/change-stream | Create a change stream.
[**customerNoteDeleteById**](CustomerNoteApi.md#customerNoteDeleteById) | **DELETE** /CustomerNotes/{id} | Delete a model instance by {{id}} from the data source.
[**customerNoteExistsGetCustomerNotesidExists**](CustomerNoteApi.md#customerNoteExistsGetCustomerNotesidExists) | **GET** /CustomerNotes/{id}/exists | Check whether a model instance exists in the data source.
[**customerNoteExistsHeadCustomerNotesid**](CustomerNoteApi.md#customerNoteExistsHeadCustomerNotesid) | **HEAD** /CustomerNotes/{id} | Check whether a model instance exists in the data source.
[**customerNoteFind**](CustomerNoteApi.md#customerNoteFind) | **GET** /CustomerNotes | Find all instances of the model matched by filter from the data source.
[**customerNoteFindById**](CustomerNoteApi.md#customerNoteFindById) | **GET** /CustomerNotes/{id} | Find a model instance by {{id}} from the data source.
[**customerNoteFindOne**](CustomerNoteApi.md#customerNoteFindOne) | **GET** /CustomerNotes/findOne | Find first instance of the model matched by filter from the data source.
[**customerNotePatchOrCreate**](CustomerNoteApi.md#customerNotePatchOrCreate) | **PATCH** /CustomerNotes | Patch an existing model instance or insert a new one into the data source.
[**customerNotePrototypeGetAuthor**](CustomerNoteApi.md#customerNotePrototypeGetAuthor) | **GET** /CustomerNotes/{id}/author | Fetches belongsTo relation author.
[**customerNotePrototypeGetCustomer**](CustomerNoteApi.md#customerNotePrototypeGetCustomer) | **GET** /CustomerNotes/{id}/customer | Fetches belongsTo relation customer.
[**customerNotePrototypePatchAttributes**](CustomerNoteApi.md#customerNotePrototypePatchAttributes) | **PATCH** /CustomerNotes/{id} | Patch attributes for a model instance and persist it into the data source.
[**customerNoteReplaceByIdPostCustomerNotesidReplace**](CustomerNoteApi.md#customerNoteReplaceByIdPostCustomerNotesidReplace) | **POST** /CustomerNotes/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**customerNoteReplaceByIdPutCustomerNotesid**](CustomerNoteApi.md#customerNoteReplaceByIdPutCustomerNotesid) | **PUT** /CustomerNotes/{id} | Replace attributes for a model instance and persist it into the data source.
[**customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate**](CustomerNoteApi.md#customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate) | **POST** /CustomerNotes/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**customerNoteReplaceOrCreatePutCustomerNotes**](CustomerNoteApi.md#customerNoteReplaceOrCreatePutCustomerNotes) | **PUT** /CustomerNotes | Replace an existing model instance or insert a new one into the data source.
[**customerNoteUpdateAll**](CustomerNoteApi.md#customerNoteUpdateAll) | **POST** /CustomerNotes/update | Update instances of the model matched by {{where}} from the data source.
[**customerNoteUpsertWithWhere**](CustomerNoteApi.md#customerNoteUpsertWithWhere) | **POST** /CustomerNotes/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **customerNoteCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerNoteCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerNoteCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteCount: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteCreate**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNoteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteCreateChangeStreamGetCustomerNotesChangeStream**
> \SplFileObject customerNoteCreateChangeStreamGetCustomerNotesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerNoteCreateChangeStreamGetCustomerNotesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteCreateChangeStreamGetCustomerNotesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteCreateChangeStreamPostCustomerNotesChangeStream**
> \SplFileObject customerNoteCreateChangeStreamPostCustomerNotesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerNoteCreateChangeStreamPostCustomerNotesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteCreateChangeStreamPostCustomerNotesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteDeleteById**
> object customerNoteDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerNoteDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteExistsGetCustomerNotesidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 customerNoteExistsGetCustomerNotesidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerNoteExistsGetCustomerNotesidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteExistsGetCustomerNotesidExists: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteExistsHeadCustomerNotesid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 customerNoteExistsHeadCustomerNotesid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerNoteExistsHeadCustomerNotesid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteExistsHeadCustomerNotesid: ', $e->getMessage(), PHP_EOL;
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

# **customerNoteFind**
> \Yoast\MyYoastApiClient\Model\CustomerNote[] customerNoteFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerNoteFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote[]**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteFindById**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerNoteFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteFindOne**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerNoteFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNotePatchOrCreate**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNotePatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNotePatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNotePatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNotePrototypeGetAuthor**
> \Yoast\MyYoastApiClient\Model\Customer customerNotePrototypeGetAuthor($id, $refresh)

Fetches belongsTo relation author.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | CustomerNote id
$refresh = true; // bool | 

try {
    $result = $api_instance->customerNotePrototypeGetAuthor($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNotePrototypeGetAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CustomerNote id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNotePrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\Customer customerNotePrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | CustomerNote id
$refresh = true; // bool | 

try {
    $result = $api_instance->customerNotePrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNotePrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CustomerNote id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNotePrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNotePrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | CustomerNote id
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | An object of model property name/value pairs

try {
    $result = $api_instance->customerNotePrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNotePrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CustomerNote id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteReplaceByIdPostCustomerNotesidReplace**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteReplaceByIdPostCustomerNotesidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNoteReplaceByIdPostCustomerNotesidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteReplaceByIdPostCustomerNotesidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteReplaceByIdPutCustomerNotesid**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteReplaceByIdPutCustomerNotesid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNoteReplaceByIdPutCustomerNotesid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteReplaceByIdPutCustomerNotesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteReplaceOrCreatePostCustomerNotesReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteReplaceOrCreatePutCustomerNotes**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteReplaceOrCreatePutCustomerNotes($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | Model instance data

try {
    $result = $api_instance->customerNoteReplaceOrCreatePutCustomerNotes($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteReplaceOrCreatePutCustomerNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 customerNoteUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | An object of model property name/value pairs

try {
    $result = $api_instance->customerNoteUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNoteUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\CustomerNote customerNoteUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerNoteApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\CustomerNote(); // \Yoast\MyYoastApiClient\Model\CustomerNote | An object of model property name/value pairs

try {
    $result = $api_instance->customerNoteUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerNoteApi->customerNoteUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CustomerNote**](../Model/CustomerNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

