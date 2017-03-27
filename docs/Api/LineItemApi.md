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
[**lineItemPrototypeCountDiscounts**](LineItemApi.md#lineItemPrototypeCountDiscounts) | **GET** /LineItems/{id}/discounts/count | Counts discounts of LineItem.
[**lineItemPrototypeCreateDiscounts**](LineItemApi.md#lineItemPrototypeCreateDiscounts) | **POST** /LineItems/{id}/discounts | Creates a new instance in discounts of this model.
[**lineItemPrototypeDeleteDiscounts**](LineItemApi.md#lineItemPrototypeDeleteDiscounts) | **DELETE** /LineItems/{id}/discounts | Deletes all discounts of this model.
[**lineItemPrototypeDestroyByIdDiscounts**](LineItemApi.md#lineItemPrototypeDestroyByIdDiscounts) | **DELETE** /LineItems/{id}/discounts/{fk} | Delete a related item by id for discounts.
[**lineItemPrototypeFindByIdDiscounts**](LineItemApi.md#lineItemPrototypeFindByIdDiscounts) | **GET** /LineItems/{id}/discounts/{fk} | Find a related item by id for discounts.
[**lineItemPrototypeGetDiscounts**](LineItemApi.md#lineItemPrototypeGetDiscounts) | **GET** /LineItems/{id}/discounts | Queries discounts of LineItem.
[**lineItemPrototypeGetTransaction**](LineItemApi.md#lineItemPrototypeGetTransaction) | **GET** /LineItems/{id}/transaction | Fetches belongsTo relation transaction.
[**lineItemPrototypePatchAttributes**](LineItemApi.md#lineItemPrototypePatchAttributes) | **PATCH** /LineItems/{id} | Patch attributes for a model instance and persist it into the data source.
[**lineItemPrototypeUpdateByIdDiscounts**](LineItemApi.md#lineItemPrototypeUpdateByIdDiscounts) | **PUT** /LineItems/{id}/discounts/{fk} | Update a related item by id for discounts.
[**lineItemReplaceByIdPostLineItemsidReplace**](LineItemApi.md#lineItemReplaceByIdPostLineItemsidReplace) | **POST** /LineItems/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**lineItemReplaceByIdPutLineItemsid**](LineItemApi.md#lineItemReplaceByIdPutLineItemsid) | **PUT** /LineItems/{id} | Replace attributes for a model instance and persist it into the data source.
[**lineItemReplaceOrCreatePostLineItemsReplaceOrCreate**](LineItemApi.md#lineItemReplaceOrCreatePostLineItemsReplaceOrCreate) | **POST** /LineItems/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**lineItemReplaceOrCreatePutLineItems**](LineItemApi.md#lineItemReplaceOrCreatePutLineItems) | **PUT** /LineItems | Replace an existing model instance or insert a new one into the data source.
[**lineItemUpdateAll**](LineItemApi.md#lineItemUpdateAll) | **POST** /LineItems/update | Update instances of the model matched by {{where}} from the data source.
[**lineItemUpsertWithWhere**](LineItemApi.md#lineItemUpsertWithWhere) | **POST** /LineItems/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **lineItemCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 lineItemCount($where)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

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
> \Yoast\MyYoastApiClient\Model\InlineResponse200 lineItemExistsGetLineItemsidExists($id)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemExistsHeadLineItemsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 lineItemExistsHeadLineItemsid($id)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

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
$filter = "filter_example"; // string | Filter defining fields and include

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
 **filter** | **string**| Filter defining fields and include | [optional]

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeCountDiscounts**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 lineItemPrototypeCountDiscounts($id, $where)

Counts discounts of LineItem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->lineItemPrototypeCountDiscounts($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeCountDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeCreateDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem lineItemPrototypeCreateDiscounts($id, $data)

Creates a new instance in discounts of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | 

try {
    $result = $api_instance->lineItemPrototypeCreateDiscounts($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeCreateDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/\Yoast\MyYoastApiClient\Model\DiscountLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeDeleteDiscounts**
> lineItemPrototypeDeleteDiscounts($id)

Deletes all discounts of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id

try {
    $api_instance->lineItemPrototypeDeleteDiscounts($id);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeDeleteDiscounts: ', $e->getMessage(), PHP_EOL;
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

# **lineItemPrototypeDestroyByIdDiscounts**
> lineItemPrototypeDestroyByIdDiscounts($fk, $id)

Delete a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$fk = "fk_example"; // string | Foreign key for discounts
$id = "id_example"; // string | LineItem id

try {
    $api_instance->lineItemPrototypeDestroyByIdDiscounts($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeDestroyByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for discounts |
 **id** | **string**| LineItem id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeFindByIdDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem lineItemPrototypeFindByIdDiscounts($fk, $id)

Find a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$fk = "fk_example"; // string | Foreign key for discounts
$id = "id_example"; // string | LineItem id

try {
    $result = $api_instance->lineItemPrototypeFindByIdDiscounts($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeFindByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for discounts |
 **id** | **string**| LineItem id |

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeGetDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem[] lineItemPrototypeGetDiscounts($id, $filter)

Queries discounts of LineItem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->lineItemPrototypeGetDiscounts($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeGetDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem[]**](../Model/DiscountLineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeGetTransaction**
> \Yoast\MyYoastApiClient\Model\Transaction lineItemPrototypeGetTransaction($id, $refresh)

Fetches belongsTo relation transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$id = "id_example"; // string | LineItem id
$refresh = true; // bool | 

try {
    $result = $api_instance->lineItemPrototypeGetTransaction($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeGetTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LineItem id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Transaction**](../Model/Transaction.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemPrototypeUpdateByIdDiscounts**
> \Yoast\MyYoastApiClient\Model\DiscountLineItem lineItemPrototypeUpdateByIdDiscounts($fk, $id, $data)

Update a related item by id for discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\LineItemApi();
$fk = "fk_example"; // string | Foreign key for discounts
$id = "id_example"; // string | LineItem id
$data = new \Yoast\MyYoastApiClient\Model\DiscountLineItem(); // \Yoast\MyYoastApiClient\Model\DiscountLineItem | 

try {
    $result = $api_instance->lineItemPrototypeUpdateByIdDiscounts($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemApi->lineItemPrototypeUpdateByIdDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for discounts |
 **id** | **string**| LineItem id |
 **data** | [**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/\Yoast\MyYoastApiClient\Model\DiscountLineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DiscountLineItem**](../Model/DiscountLineItem.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lineItemUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 lineItemUpdateAll($where, $data)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/\Yoast\MyYoastApiClient\Model\LineItem.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

