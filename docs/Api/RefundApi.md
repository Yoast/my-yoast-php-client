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
[**refundPrototypeGetOrder**](RefundApi.md#refundPrototypeGetOrder) | **GET** /Refunds/{id}/order | Fetches belongsTo relation order.
[**refundPrototypePatchAttributes**](RefundApi.md#refundPrototypePatchAttributes) | **PATCH** /Refunds/{id} | Patch attributes for a model instance and persist it into the data source.
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->refundCount($where);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundCreate($data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->refundCreateChangeStreamGetRefundsChangeStream($options);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->refundCreateChangeStreamPostRefundsChangeStream($options);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundDeleteById($id);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundExistsGetRefundsidExists($id);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->refundExistsHeadRefundsid($id);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundFind($filter);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundFindById($id, $filter);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->refundFindOne($filter);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundPatchOrCreate($data);
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

# **refundPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order refundPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Refund id
$refresh = true; // bool | 

try {
    $result = $api_instance->refundPrototypeGetOrder($id, $refresh);
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

# **refundPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Refund refundPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Refund id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $api_instance->refundPrototypePatchAttributes($id, $data);
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

# **refundReplaceByIdPostRefundsidReplace**
> \Yoast\MyYoastApiClient\Model\Refund refundReplaceByIdPostRefundsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundReplaceByIdPostRefundsidReplace($id, $data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundReplaceByIdPutRefundsid($id, $data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundReplaceOrCreatePostRefundsReplaceOrCreate($data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | Model instance data

try {
    $result = $api_instance->refundReplaceOrCreatePutRefunds($data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $api_instance->refundUpdateAll($where, $data);
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

$api_instance = new Yoast\MyYoastApiClient\Api\RefundApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | An object of model property name/value pairs

try {
    $result = $api_instance->refundUpsertWithWhere($where, $data);
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

