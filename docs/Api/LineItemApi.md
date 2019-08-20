# Yoast\MyYoastApiClient\LineItemApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lineItemCount**](LineItemApi.md#lineItemCount) | **GET** /LineItems/count | Count instances of the model matched by where from the data source.
[**lineItemCreate**](LineItemApi.md#lineItemCreate) | **POST** /LineItems | Create a new instance of the model and persist it into the data source.
[**lineItemCreateChangeStreamGetLineItemsChangeStream**](LineItemApi.md#lineItemCreateChangeStreamGetLineItemsChangeStream) | **GET** /LineItems/change-stream | Create a change stream.
[**lineItemCreateChangeStreamPostLineItemsChangeStream**](LineItemApi.md#lineItemCreateChangeStreamPostLineItemsChangeStream) | **POST** /LineItems/change-stream | Create a change stream.
[**lineItemDeleteById**](LineItemApi.md#lineItemDeleteById) | **DELETE** /LineItems/{id} | Delete a model instance by {{id}} from the data source.
[**lineItemExistsGetLineItemsidExists**](LineItemApi.md#lineItemExistsGetLineItemsidExists) | **GET** /LineItems/{id}/exists | Check whether a model instance exists in the data source.
[**lineItemExistsHeadLineItemsid**](LineItemApi.md#lineItemExistsHeadLineItemsid) | **HEAD** /LineItems/{id} | Check whether a model instance exists in the data source.
[**lineItemFind**](LineItemApi.md#lineItemFind) | **GET** /LineItems | Find all instances of the model matched by filter from the data source.
[**lineItemFindById**](LineItemApi.md#lineItemFindById) | **GET** /LineItems/{id} | Find a model instance by {{id}} from the data source.
[**lineItemFindOne**](LineItemApi.md#lineItemFindOne) | **GET** /LineItems/findOne | Find first instance of the model matched by filter from the data source.
[**lineItemPatchOrCreate**](LineItemApi.md#lineItemPatchOrCreate) | **PATCH** /LineItems | Patch an existing model instance or insert a new one into the data source.
[**lineItemPrototypeCountRefunds**](LineItemApi.md#lineItemPrototypeCountRefunds) | **GET** /LineItems/{id}/refunds/count | Counts refunds of LineItem.
[**lineItemPrototypeCreateRefunds**](LineItemApi.md#lineItemPrototypeCreateRefunds) | **POST** /LineItems/{id}/refunds | Creates a new instance in refunds of this model.
[**lineItemPrototypeDeleteRefunds**](LineItemApi.md#lineItemPrototypeDeleteRefunds) | **DELETE** /LineItems/{id}/refunds | Deletes all refunds of this model.
[**lineItemPrototypeDestroyByIdRefunds**](LineItemApi.md#lineItemPrototypeDestroyByIdRefunds) | **DELETE** /LineItems/{id}/refunds/{fk} | Delete a related item by id for refunds.
[**lineItemPrototypeExistsRefunds**](LineItemApi.md#lineItemPrototypeExistsRefunds) | **HEAD** /LineItems/{id}/refunds/rel/{fk} | Check the existence of refunds relation to an item by id.
[**lineItemPrototypeFindByIdRefunds**](LineItemApi.md#lineItemPrototypeFindByIdRefunds) | **GET** /LineItems/{id}/refunds/{fk} | Find a related item by id for refunds.
[**lineItemPrototypeGetOrder**](LineItemApi.md#lineItemPrototypeGetOrder) | **GET** /LineItems/{id}/order | Fetches belongsTo relation order.
[**lineItemPrototypeGetProduct**](LineItemApi.md#lineItemPrototypeGetProduct) | **GET** /LineItems/{id}/product | Fetches belongsTo relation product.
[**lineItemPrototypeGetRefunds**](LineItemApi.md#lineItemPrototypeGetRefunds) | **GET** /LineItems/{id}/refunds | Queries refunds of LineItem.
[**lineItemPrototypeLinkRefunds**](LineItemApi.md#lineItemPrototypeLinkRefunds) | **PUT** /LineItems/{id}/refunds/rel/{fk} | Add a related item by id for refunds.
[**lineItemPrototypePatchAttributes**](LineItemApi.md#lineItemPrototypePatchAttributes) | **PATCH** /LineItems/{id} | Patch attributes for a model instance and persist it into the data source.
[**lineItemPrototypeUnlinkRefunds**](LineItemApi.md#lineItemPrototypeUnlinkRefunds) | **DELETE** /LineItems/{id}/refunds/rel/{fk} | Remove the refunds relation to an item by id.
[**lineItemPrototypeUpdateByIdRefunds**](LineItemApi.md#lineItemPrototypeUpdateByIdRefunds) | **PUT** /LineItems/{id}/refunds/{fk} | Update a related item by id for refunds.
[**lineItemReplaceByIdPostLineItemsidReplace**](LineItemApi.md#lineItemReplaceByIdPostLineItemsidReplace) | **POST** /LineItems/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**lineItemReplaceByIdPutLineItemsid**](LineItemApi.md#lineItemReplaceByIdPutLineItemsid) | **PUT** /LineItems/{id} | Replace attributes for a model instance and persist it into the data source.
[**lineItemReplaceOrCreatePostLineItemsReplaceOrCreate**](LineItemApi.md#lineItemReplaceOrCreatePostLineItemsReplaceOrCreate) | **POST** /LineItems/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**lineItemReplaceOrCreatePutLineItems**](LineItemApi.md#lineItemReplaceOrCreatePutLineItems) | **PUT** /LineItems | Replace an existing model instance or insert a new one into the data source.
[**lineItemUpdateAll**](LineItemApi.md#lineItemUpdateAll) | **POST** /LineItems/update | Update instances of the model matched by {{where}} from the data source.
[**lineItemUpsertWithWhere**](LineItemApi.md#lineItemUpsertWithWhere) | **POST** /LineItems/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **lineItemCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 lineItemCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->lineItemCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemCount: ', $e->getMessage(), PHP_EOL;
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

# **lineItemCreate**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemCreateChangeStreamGetLineItemsChangeStream**
> \SplFileObject lineItemCreateChangeStreamGetLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->lineItemCreateChangeStreamGetLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemCreateChangeStreamGetLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **lineItemCreateChangeStreamPostLineItemsChangeStream**
> \SplFileObject lineItemCreateChangeStreamPostLineItemsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->lineItemCreateChangeStreamPostLineItemsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemCreateChangeStreamPostLineItemsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **lineItemDeleteById**
> object lineItemDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->lineItemDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **lineItemExistsGetLineItemsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 lineItemExistsGetLineItemsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->lineItemExistsGetLineItemsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemExistsGetLineItemsidExists: ', $e->getMessage(), PHP_EOL;
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

# **lineItemExistsHeadLineItemsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 lineItemExistsHeadLineItemsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->lineItemExistsHeadLineItemsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemExistsHeadLineItemsid: ', $e->getMessage(), PHP_EOL;
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

# **lineItemFind**
> \Yoast\MyYoastApiClient\Model\LineItem[] lineItemFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->lineItemFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem[]**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemFindById**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->lineItemFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemFindOne**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->lineItemFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeCountRefunds**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 lineItemPrototypeCountRefunds($id, $where)

Counts refunds of LineItem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->lineItemPrototypeCountRefunds($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeCountRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeCreateRefunds**
> \Yoast\MyYoastApiClient\Model\Refund lineItemPrototypeCreateRefunds($id, $data)

Creates a new instance in refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | 

try {
    $result = $api_instance->lineItemPrototypeCreateRefunds($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeCreateRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeDeleteRefunds**
> lineItemPrototypeDeleteRefunds($id)

Deletes all refunds of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id

try {
    $api_instance->lineItemPrototypeDeleteRefunds($id);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeDeleteRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeDestroyByIdRefunds**
> lineItemPrototypeDestroyByIdRefunds($id, $fk)

Delete a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $api_instance->lineItemPrototypeDestroyByIdRefunds($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeDestroyByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **fk** | **string**| Foreign key for refunds |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeExistsRefunds**
> bool lineItemPrototypeExistsRefunds($id, $fk)

Check the existence of refunds relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $result = $api_instance->lineItemPrototypeExistsRefunds($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeExistsRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **fk** | **string**| Foreign key for refunds |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeFindByIdRefunds**
> \Yoast\MyYoastApiClient\Model\Refund lineItemPrototypeFindByIdRefunds($id, $fk)

Find a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $result = $api_instance->lineItemPrototypeFindByIdRefunds($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeFindByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **fk** | **string**| Foreign key for refunds |

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order lineItemPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->lineItemPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeGetProduct**
> \Yoast\MyYoastApiClient\Model\Product lineItemPrototypeGetProduct($id, $refresh)

Fetches belongsTo relation product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->lineItemPrototypeGetProduct($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeGetProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeGetRefunds**
> \Yoast\MyYoastApiClient\Model\Refund[] lineItemPrototypeGetRefunds($id, $filter)

Queries refunds of LineItem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->lineItemPrototypeGetRefunds($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeGetRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeLinkRefunds**
> \Yoast\MyYoastApiClient\Model\RefundLineItem lineItemPrototypeLinkRefunds($id, $fk, $data)

Add a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds
$data = new \Yoast\MyYoastApiClient\Model\RefundLineItem(); // \Yoast\MyYoastApiClient\Model\RefundLineItem | 

try {
    $result = $api_instance->lineItemPrototypeLinkRefunds($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeLinkRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **fk** | **string**| Foreign key for refunds |
 **data** | [**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\RefundLineItem**](../Model/RefundLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | An object of model property name/value pairs

try {
    $result = $api_instance->lineItemPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeUnlinkRefunds**
> lineItemPrototypeUnlinkRefunds($id, $fk)

Remove the refunds relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds

try {
    $api_instance->lineItemPrototypeUnlinkRefunds($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeUnlinkRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **fk** | **string**| Foreign key for refunds |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeUpdateByIdRefunds**
> \Yoast\MyYoastApiClient\Model\Refund lineItemPrototypeUpdateByIdRefunds($id, $fk, $data)

Update a related item by id for refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$fk = "fk_example"; // string | Foreign key for refunds
$data = new \Yoast\MyYoastApiClient\Model\Refund(); // \Yoast\MyYoastApiClient\Model\Refund | 

try {
    $result = $api_instance->lineItemPrototypeUpdateByIdRefunds($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeUpdateByIdRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
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

# **lineItemReplaceByIdPostLineItemsidReplace**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemReplaceByIdPostLineItemsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemReplaceByIdPostLineItemsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemReplaceByIdPostLineItemsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemReplaceByIdPutLineItemsid**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemReplaceByIdPutLineItemsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemReplaceByIdPutLineItemsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemReplaceByIdPutLineItemsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemReplaceOrCreatePostLineItemsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemReplaceOrCreatePostLineItemsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemReplaceOrCreatePostLineItemsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemReplaceOrCreatePostLineItemsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemReplaceOrCreatePutLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemReplaceOrCreatePutLineItems($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | Model instance data

try {
    $result = $api_instance->lineItemReplaceOrCreatePutLineItems($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemReplaceOrCreatePutLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 lineItemUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | An object of model property name/value pairs

try {
    $result = $api_instance->lineItemUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\LineItem lineItemUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | An object of model property name/value pairs

try {
    $result = $api_instance->lineItemUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
