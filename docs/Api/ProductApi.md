# Yoast\MyYoastApiClient\ProductApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productCount**](ProductApi.md#productCount) | **GET** /Products/count | Count instances of the model matched by where from the data source.
[**productCreate**](ProductApi.md#productCreate) | **POST** /Products | Create a new instance of the model and persist it into the data source.
[**productCreateChangeStreamGetProductsChangeStream**](ProductApi.md#productCreateChangeStreamGetProductsChangeStream) | **GET** /Products/change-stream | Create a change stream.
[**productCreateChangeStreamPostProductsChangeStream**](ProductApi.md#productCreateChangeStreamPostProductsChangeStream) | **POST** /Products/change-stream | Create a change stream.
[**productDeleteById**](ProductApi.md#productDeleteById) | **DELETE** /Products/{id} | Delete a model instance by {{id}} from the data source.
[**productExistsGetProductsidExists**](ProductApi.md#productExistsGetProductsidExists) | **GET** /Products/{id}/exists | Check whether a model instance exists in the data source.
[**productExistsHeadProductsid**](ProductApi.md#productExistsHeadProductsid) | **HEAD** /Products/{id} | Check whether a model instance exists in the data source.
[**productFind**](ProductApi.md#productFind) | **GET** /Products | Find all instances of the model matched by filter from the data source.
[**productFindById**](ProductApi.md#productFindById) | **GET** /Products/{id} | Find a model instance by {{id}} from the data source.
[**productFindOne**](ProductApi.md#productFindOne) | **GET** /Products/findOne | Find first instance of the model matched by filter from the data source.
[**productFromWooCommerce**](ProductApi.md#productFromWooCommerce) | **PUT** /Products/fromWooCommerce | 
[**productPatchOrCreate**](ProductApi.md#productPatchOrCreate) | **PATCH** /Products | Patch an existing model instance or insert a new one into the data source.
[**productPrototypeCountLineItems**](ProductApi.md#productPrototypeCountLineItems) | **GET** /Products/{id}/lineItems/count | Counts lineItems of Product.
[**productPrototypeCountSubscriptions**](ProductApi.md#productPrototypeCountSubscriptions) | **GET** /Products/{id}/subscriptions/count | Counts subscriptions of Product.
[**productPrototypeCreateLineItems**](ProductApi.md#productPrototypeCreateLineItems) | **POST** /Products/{id}/lineItems | Creates a new instance in lineItems of this model.
[**productPrototypeCreateSubscriptions**](ProductApi.md#productPrototypeCreateSubscriptions) | **POST** /Products/{id}/subscriptions | Creates a new instance in subscriptions of this model.
[**productPrototypeDeleteLineItems**](ProductApi.md#productPrototypeDeleteLineItems) | **DELETE** /Products/{id}/lineItems | Deletes all lineItems of this model.
[**productPrototypeDeleteSubscriptions**](ProductApi.md#productPrototypeDeleteSubscriptions) | **DELETE** /Products/{id}/subscriptions | Deletes all subscriptions of this model.
[**productPrototypeDestroyByIdLineItems**](ProductApi.md#productPrototypeDestroyByIdLineItems) | **DELETE** /Products/{id}/lineItems/{fk} | Delete a related item by id for lineItems.
[**productPrototypeDestroyByIdSubscriptions**](ProductApi.md#productPrototypeDestroyByIdSubscriptions) | **DELETE** /Products/{id}/subscriptions/{fk} | Delete a related item by id for subscriptions.
[**productPrototypeFindByIdLineItems**](ProductApi.md#productPrototypeFindByIdLineItems) | **GET** /Products/{id}/lineItems/{fk} | Find a related item by id for lineItems.
[**productPrototypeFindByIdSubscriptions**](ProductApi.md#productPrototypeFindByIdSubscriptions) | **GET** /Products/{id}/subscriptions/{fk} | Find a related item by id for subscriptions.
[**productPrototypeGetCourses**](ProductApi.md#productPrototypeGetCourses) | **GET** /Products/{id}/courses | Fetches belongsTo relation courses.
[**productPrototypeGetLineItems**](ProductApi.md#productPrototypeGetLineItems) | **GET** /Products/{id}/lineItems | Queries lineItems of Product.
[**productPrototypeGetSubscriptions**](ProductApi.md#productPrototypeGetSubscriptions) | **GET** /Products/{id}/subscriptions | Queries subscriptions of Product.
[**productPrototypePatchAttributes**](ProductApi.md#productPrototypePatchAttributes) | **PATCH** /Products/{id} | Patch attributes for a model instance and persist it into the data source.
[**productPrototypeUpdateByIdLineItems**](ProductApi.md#productPrototypeUpdateByIdLineItems) | **PUT** /Products/{id}/lineItems/{fk} | Update a related item by id for lineItems.
[**productPrototypeUpdateByIdSubscriptions**](ProductApi.md#productPrototypeUpdateByIdSubscriptions) | **PUT** /Products/{id}/subscriptions/{fk} | Update a related item by id for subscriptions.
[**productReplaceByIdPostProductsidReplace**](ProductApi.md#productReplaceByIdPostProductsidReplace) | **POST** /Products/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productReplaceByIdPutProductsid**](ProductApi.md#productReplaceByIdPutProductsid) | **PUT** /Products/{id} | Replace attributes for a model instance and persist it into the data source.
[**productReplaceOrCreatePostProductsReplaceOrCreate**](ProductApi.md#productReplaceOrCreatePostProductsReplaceOrCreate) | **POST** /Products/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**productReplaceOrCreatePutProducts**](ProductApi.md#productReplaceOrCreatePutProducts) | **PUT** /Products | Replace an existing model instance or insert a new one into the data source.
[**productUpdateAll**](ProductApi.md#productUpdateAll) | **POST** /Products/update | Update instances of the model matched by {{where}} from the data source.
[**productUpsertWithWhere**](ProductApi.md#productUpsertWithWhere) | **POST** /Products/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **productCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCount: ', $e->getMessage(), PHP_EOL;
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

# **productCreate**
> \Yoast\MyYoastApiClient\Model\Product productCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCreateChangeStreamGetProductsChangeStream**
> \SplFileObject productCreateChangeStreamGetProductsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productCreateChangeStreamGetProductsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateChangeStreamGetProductsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **productCreateChangeStreamPostProductsChangeStream**
> \SplFileObject productCreateChangeStreamPostProductsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productCreateChangeStreamPostProductsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateChangeStreamPostProductsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **productDeleteById**
> object productDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **productExistsGetProductsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 productExistsGetProductsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productExistsGetProductsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productExistsGetProductsidExists: ', $e->getMessage(), PHP_EOL;
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

# **productExistsHeadProductsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 productExistsHeadProductsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productExistsHeadProductsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productExistsHeadProductsid: ', $e->getMessage(), PHP_EOL;
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

# **productFind**
> \Yoast\MyYoastApiClient\Model\Product[] productFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productFindById**
> \Yoast\MyYoastApiClient\Model\Product productFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productFindOne**
> \Yoast\MyYoastApiClient\Model\Product productFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Product productFromWooCommerce($product_data, $extra_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$product_data = "product_data_example"; // string | 
$extra_data = "extra_data_example"; // string | 

try {
    $result = $api_instance->productFromWooCommerce($product_data, $extra_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFromWooCommerce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_data** | **string**|  |
 **extra_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Product productPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeCountLineItems**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productPrototypeCountLineItems($id, $where)

Counts lineItems of Product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productPrototypeCountLineItems($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeCountLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeCountSubscriptions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productPrototypeCountSubscriptions($id, $where)

Counts subscriptions of Product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productPrototypeCountSubscriptions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeCountSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeCreateLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem productPrototypeCreateLineItems($id, $data)

Creates a new instance in lineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->productPrototypeCreateLineItems($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeCreateLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **data** | [**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeCreateSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription productPrototypeCreateSubscriptions($id, $data)

Creates a new instance in subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->productPrototypeCreateSubscriptions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeCreateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeDeleteLineItems**
> productPrototypeDeleteLineItems($id)

Deletes all lineItems of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id

try {
    $api_instance->productPrototypeDeleteLineItems($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeDeleteLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeDeleteSubscriptions**
> productPrototypeDeleteSubscriptions($id)

Deletes all subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id

try {
    $api_instance->productPrototypeDeleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeDeleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeDestroyByIdLineItems**
> productPrototypeDestroyByIdLineItems($id, $fk)

Delete a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $api_instance->productPrototypeDestroyByIdLineItems($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeDestroyByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeDestroyByIdSubscriptions**
> productPrototypeDestroyByIdSubscriptions($id, $fk)

Delete a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->productPrototypeDestroyByIdSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeDestroyByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeFindByIdLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem productPrototypeFindByIdLineItems($id, $fk)

Find a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for lineItems

try {
    $result = $api_instance->productPrototypeFindByIdLineItems($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeFindByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **fk** | **string**| Foreign key for lineItems |

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeFindByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription productPrototypeFindByIdSubscriptions($id, $fk)

Find a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->productPrototypeFindByIdSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeFindByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeGetCourses**
> \Yoast\MyYoastApiClient\Model\Course productPrototypeGetCourses($id, $refresh)

Fetches belongsTo relation courses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$refresh = true; // bool | 

try {
    $result = $api_instance->productPrototypeGetCourses($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeGetCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeGetLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem[] productPrototypeGetLineItems($id, $filter)

Queries lineItems of Product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productPrototypeGetLineItems($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeGetLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\LineItem[]**](../Model/LineItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeGetSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription[] productPrototypeGetSubscriptions($id, $filter)

Queries subscriptions of Product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productPrototypeGetSubscriptions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Product productPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | An object of model property name/value pairs

try {
    $result = $api_instance->productPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPrototypeUpdateByIdLineItems**
> \Yoast\MyYoastApiClient\Model\LineItem productPrototypeUpdateByIdLineItems($id, $fk, $data)

Update a related item by id for lineItems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for lineItems
$data = new \Yoast\MyYoastApiClient\Model\LineItem(); // \Yoast\MyYoastApiClient\Model\LineItem | 

try {
    $result = $api_instance->productPrototypeUpdateByIdLineItems($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeUpdateByIdLineItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
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

# **productPrototypeUpdateByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription productPrototypeUpdateByIdSubscriptions($id, $fk, $data)

Update a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Product id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->productPrototypeUpdateByIdSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPrototypeUpdateByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product id |
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

# **productReplaceByIdPostProductsidReplace**
> \Yoast\MyYoastApiClient\Model\Product productReplaceByIdPostProductsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productReplaceByIdPostProductsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productReplaceByIdPostProductsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReplaceByIdPutProductsid**
> \Yoast\MyYoastApiClient\Model\Product productReplaceByIdPutProductsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productReplaceByIdPutProductsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productReplaceByIdPutProductsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReplaceOrCreatePostProductsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Product productReplaceOrCreatePostProductsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productReplaceOrCreatePostProductsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productReplaceOrCreatePostProductsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productReplaceOrCreatePutProducts**
> \Yoast\MyYoastApiClient\Model\Product productReplaceOrCreatePutProducts($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | Model instance data

try {
    $result = $api_instance->productReplaceOrCreatePutProducts($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productReplaceOrCreatePutProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 productUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | An object of model property name/value pairs

try {
    $result = $api_instance->productUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Product productUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | An object of model property name/value pairs

try {
    $result = $api_instance->productUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

