# Yoast\MyYoastApiClient\ProductGroupApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productGroupCount**](ProductGroupApi.md#productGroupCount) | **GET** /ProductGroups/count | Count instances of the model matched by where from the data source.
[**productGroupCreate**](ProductGroupApi.md#productGroupCreate) | **POST** /ProductGroups | Create a new instance of the model and persist it into the data source.
[**productGroupCreateChangeStreamGetProductGroupsChangeStream**](ProductGroupApi.md#productGroupCreateChangeStreamGetProductGroupsChangeStream) | **GET** /ProductGroups/change-stream | Create a change stream.
[**productGroupCreateChangeStreamPostProductGroupsChangeStream**](ProductGroupApi.md#productGroupCreateChangeStreamPostProductGroupsChangeStream) | **POST** /ProductGroups/change-stream | Create a change stream.
[**productGroupDeleteById**](ProductGroupApi.md#productGroupDeleteById) | **DELETE** /ProductGroups/{id} | Delete a model instance by {{id}} from the data source.
[**productGroupExistsGetProductGroupsidExists**](ProductGroupApi.md#productGroupExistsGetProductGroupsidExists) | **GET** /ProductGroups/{id}/exists | Check whether a model instance exists in the data source.
[**productGroupExistsHeadProductGroupsid**](ProductGroupApi.md#productGroupExistsHeadProductGroupsid) | **HEAD** /ProductGroups/{id} | Check whether a model instance exists in the data source.
[**productGroupFind**](ProductGroupApi.md#productGroupFind) | **GET** /ProductGroups | Find all instances of the model matched by filter from the data source.
[**productGroupFindById**](ProductGroupApi.md#productGroupFindById) | **GET** /ProductGroups/{id} | Find a model instance by {{id}} from the data source.
[**productGroupFindOne**](ProductGroupApi.md#productGroupFindOne) | **GET** /ProductGroups/findOne | Find first instance of the model matched by filter from the data source.
[**productGroupFromWooCommerce**](ProductGroupApi.md#productGroupFromWooCommerce) | **PUT** /ProductGroups/fromWooCommerce | 
[**productGroupPatchOrCreate**](ProductGroupApi.md#productGroupPatchOrCreate) | **PATCH** /ProductGroups | Patch an existing model instance or insert a new one into the data source.
[**productGroupPrototypeCountChildren**](ProductGroupApi.md#productGroupPrototypeCountChildren) | **GET** /ProductGroups/{id}/children/count | Counts children of ProductGroup.
[**productGroupPrototypeCountDownload**](ProductGroupApi.md#productGroupPrototypeCountDownload) | **GET** /ProductGroups/{id}/download/count | Counts download of ProductGroup.
[**productGroupPrototypeCountProducts**](ProductGroupApi.md#productGroupPrototypeCountProducts) | **GET** /ProductGroups/{id}/products/count | Counts products of ProductGroup.
[**productGroupPrototypeCreateChildren**](ProductGroupApi.md#productGroupPrototypeCreateChildren) | **POST** /ProductGroups/{id}/children | Creates a new instance in children of this model.
[**productGroupPrototypeCreateDownload**](ProductGroupApi.md#productGroupPrototypeCreateDownload) | **POST** /ProductGroups/{id}/download | Creates a new instance in download of this model.
[**productGroupPrototypeCreateProducts**](ProductGroupApi.md#productGroupPrototypeCreateProducts) | **POST** /ProductGroups/{id}/products | Creates a new instance in products of this model.
[**productGroupPrototypeDeleteChildren**](ProductGroupApi.md#productGroupPrototypeDeleteChildren) | **DELETE** /ProductGroups/{id}/children | Deletes all children of this model.
[**productGroupPrototypeDeleteDownload**](ProductGroupApi.md#productGroupPrototypeDeleteDownload) | **DELETE** /ProductGroups/{id}/download | Deletes all download of this model.
[**productGroupPrototypeDeleteProducts**](ProductGroupApi.md#productGroupPrototypeDeleteProducts) | **DELETE** /ProductGroups/{id}/products | Deletes all products of this model.
[**productGroupPrototypeDestroyByIdChildren**](ProductGroupApi.md#productGroupPrototypeDestroyByIdChildren) | **DELETE** /ProductGroups/{id}/children/{fk} | Delete a related item by id for children.
[**productGroupPrototypeDestroyByIdDownload**](ProductGroupApi.md#productGroupPrototypeDestroyByIdDownload) | **DELETE** /ProductGroups/{id}/download/{fk} | Delete a related item by id for download.
[**productGroupPrototypeDestroyByIdProducts**](ProductGroupApi.md#productGroupPrototypeDestroyByIdProducts) | **DELETE** /ProductGroups/{id}/products/{fk} | Delete a related item by id for products.
[**productGroupPrototypeExistsDownload**](ProductGroupApi.md#productGroupPrototypeExistsDownload) | **HEAD** /ProductGroups/{id}/download/rel/{fk} | Check the existence of download relation to an item by id.
[**productGroupPrototypeExistsProducts**](ProductGroupApi.md#productGroupPrototypeExistsProducts) | **HEAD** /ProductGroups/{id}/products/rel/{fk} | Check the existence of products relation to an item by id.
[**productGroupPrototypeFindByIdChildren**](ProductGroupApi.md#productGroupPrototypeFindByIdChildren) | **GET** /ProductGroups/{id}/children/{fk} | Find a related item by id for children.
[**productGroupPrototypeFindByIdDownload**](ProductGroupApi.md#productGroupPrototypeFindByIdDownload) | **GET** /ProductGroups/{id}/download/{fk} | Find a related item by id for download.
[**productGroupPrototypeFindByIdProducts**](ProductGroupApi.md#productGroupPrototypeFindByIdProducts) | **GET** /ProductGroups/{id}/products/{fk} | Find a related item by id for products.
[**productGroupPrototypeGetChildren**](ProductGroupApi.md#productGroupPrototypeGetChildren) | **GET** /ProductGroups/{id}/children | Queries children of ProductGroup.
[**productGroupPrototypeGetCourse**](ProductGroupApi.md#productGroupPrototypeGetCourse) | **GET** /ProductGroups/{id}/course | Fetches belongsTo relation course.
[**productGroupPrototypeGetDownload**](ProductGroupApi.md#productGroupPrototypeGetDownload) | **GET** /ProductGroups/{id}/download | Queries download of ProductGroup.
[**productGroupPrototypeGetParent**](ProductGroupApi.md#productGroupPrototypeGetParent) | **GET** /ProductGroups/{id}/parent | Fetches belongsTo relation parent.
[**productGroupPrototypeGetProducts**](ProductGroupApi.md#productGroupPrototypeGetProducts) | **GET** /ProductGroups/{id}/products | Queries products of ProductGroup.
[**productGroupPrototypeLinkDownload**](ProductGroupApi.md#productGroupPrototypeLinkDownload) | **PUT** /ProductGroups/{id}/download/rel/{fk} | Add a related item by id for download.
[**productGroupPrototypeLinkProducts**](ProductGroupApi.md#productGroupPrototypeLinkProducts) | **PUT** /ProductGroups/{id}/products/rel/{fk} | Add a related item by id for products.
[**productGroupPrototypePatchAttributes**](ProductGroupApi.md#productGroupPrototypePatchAttributes) | **PATCH** /ProductGroups/{id} | Patch attributes for a model instance and persist it into the data source.
[**productGroupPrototypeUnlinkDownload**](ProductGroupApi.md#productGroupPrototypeUnlinkDownload) | **DELETE** /ProductGroups/{id}/download/rel/{fk} | Remove the download relation to an item by id.
[**productGroupPrototypeUnlinkProducts**](ProductGroupApi.md#productGroupPrototypeUnlinkProducts) | **DELETE** /ProductGroups/{id}/products/rel/{fk} | Remove the products relation to an item by id.
[**productGroupPrototypeUpdateByIdChildren**](ProductGroupApi.md#productGroupPrototypeUpdateByIdChildren) | **PUT** /ProductGroups/{id}/children/{fk} | Update a related item by id for children.
[**productGroupPrototypeUpdateByIdDownload**](ProductGroupApi.md#productGroupPrototypeUpdateByIdDownload) | **PUT** /ProductGroups/{id}/download/{fk} | Update a related item by id for download.
[**productGroupPrototypeUpdateByIdProducts**](ProductGroupApi.md#productGroupPrototypeUpdateByIdProducts) | **PUT** /ProductGroups/{id}/products/{fk} | Update a related item by id for products.
[**productGroupReplaceByIdPostProductGroupsidReplace**](ProductGroupApi.md#productGroupReplaceByIdPostProductGroupsidReplace) | **POST** /ProductGroups/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productGroupReplaceByIdPutProductGroupsid**](ProductGroupApi.md#productGroupReplaceByIdPutProductGroupsid) | **PUT** /ProductGroups/{id} | Replace attributes for a model instance and persist it into the data source.
[**productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate**](ProductGroupApi.md#productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate) | **POST** /ProductGroups/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**productGroupReplaceOrCreatePutProductGroups**](ProductGroupApi.md#productGroupReplaceOrCreatePutProductGroups) | **PUT** /ProductGroups | Replace an existing model instance or insert a new one into the data source.
[**productGroupUpdateAll**](ProductGroupApi.md#productGroupUpdateAll) | **POST** /ProductGroups/update | Update instances of the model matched by {{where}} from the data source.
[**productGroupUpsertWithWhere**](ProductGroupApi.md#productGroupUpsertWithWhere) | **POST** /ProductGroups/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **productGroupCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productGroupCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupCount: ', $e->getMessage(), PHP_EOL;
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

# **productGroupCreate**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupCreateChangeStreamGetProductGroupsChangeStream**
> \SplFileObject productGroupCreateChangeStreamGetProductGroupsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productGroupCreateChangeStreamGetProductGroupsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupCreateChangeStreamGetProductGroupsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **productGroupCreateChangeStreamPostProductGroupsChangeStream**
> \SplFileObject productGroupCreateChangeStreamPostProductGroupsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productGroupCreateChangeStreamPostProductGroupsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupCreateChangeStreamPostProductGroupsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **productGroupDeleteById**
> object productGroupDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **productGroupExistsGetProductGroupsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 productGroupExistsGetProductGroupsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupExistsGetProductGroupsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupExistsGetProductGroupsidExists: ', $e->getMessage(), PHP_EOL;
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

# **productGroupExistsHeadProductGroupsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 productGroupExistsHeadProductGroupsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupExistsHeadProductGroupsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupExistsHeadProductGroupsid: ', $e->getMessage(), PHP_EOL;
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

# **productGroupFind**
> \Yoast\MyYoastApiClient\Model\ProductGroup[] productGroupFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupFindById**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupFindOne**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupFromWooCommerce($product_group_term, $product_group_meta, $extra_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$product_group_term = "product_group_term_example"; // string | 
$product_group_meta = "product_group_meta_example"; // string | 
$extra_data = "extra_data_example"; // string | 

try {
    $result = $api_instance->productGroupFromWooCommerce($product_group_term, $product_group_meta, $extra_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupFromWooCommerce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_term** | **string**|  |
 **product_group_meta** | **string**|  |
 **extra_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCountChildren**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productGroupPrototypeCountChildren($id, $where)

Counts children of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupPrototypeCountChildren($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCountChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCountDownload**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productGroupPrototypeCountDownload($id, $where)

Counts download of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupPrototypeCountDownload($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCountDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCountProducts**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 productGroupPrototypeCountProducts($id, $where)

Counts products of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupPrototypeCountProducts($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCountProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCreateChildren**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPrototypeCreateChildren($id, $data)

Creates a new instance in children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | 

try {
    $result = $api_instance->productGroupPrototypeCreateChildren($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCreateChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCreateDownload**
> \Yoast\MyYoastApiClient\Model\Download productGroupPrototypeCreateDownload($id, $data)

Creates a new instance in download of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | 

try {
    $result = $api_instance->productGroupPrototypeCreateDownload($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCreateDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeCreateProducts**
> \Yoast\MyYoastApiClient\Model\Product productGroupPrototypeCreateProducts($id, $data)

Creates a new instance in products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->productGroupPrototypeCreateProducts($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeCreateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDeleteChildren**
> productGroupPrototypeDeleteChildren($id)

Deletes all children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id

try {
    $api_instance->productGroupPrototypeDeleteChildren($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDeleteChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDeleteDownload**
> productGroupPrototypeDeleteDownload($id)

Deletes all download of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id

try {
    $api_instance->productGroupPrototypeDeleteDownload($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDeleteDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDeleteProducts**
> productGroupPrototypeDeleteProducts($id)

Deletes all products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id

try {
    $api_instance->productGroupPrototypeDeleteProducts($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDestroyByIdChildren**
> productGroupPrototypeDestroyByIdChildren($id, $fk)

Delete a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for children

try {
    $api_instance->productGroupPrototypeDestroyByIdChildren($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDestroyByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for children |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDestroyByIdDownload**
> productGroupPrototypeDestroyByIdDownload($id, $fk)

Delete a related item by id for download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download

try {
    $api_instance->productGroupPrototypeDestroyByIdDownload($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDestroyByIdDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeDestroyByIdProducts**
> productGroupPrototypeDestroyByIdProducts($id, $fk)

Delete a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->productGroupPrototypeDestroyByIdProducts($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeDestroyByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeExistsDownload**
> bool productGroupPrototypeExistsDownload($id, $fk)

Check the existence of download relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download

try {
    $result = $api_instance->productGroupPrototypeExistsDownload($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeExistsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeExistsProducts**
> bool productGroupPrototypeExistsProducts($id, $fk)

Check the existence of products relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->productGroupPrototypeExistsProducts($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeExistsProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeFindByIdChildren**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPrototypeFindByIdChildren($id, $fk)

Find a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for children

try {
    $result = $api_instance->productGroupPrototypeFindByIdChildren($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeFindByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for children |

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeFindByIdDownload**
> \Yoast\MyYoastApiClient\Model\Download productGroupPrototypeFindByIdDownload($id, $fk)

Find a related item by id for download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download

try {
    $result = $api_instance->productGroupPrototypeFindByIdDownload($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeFindByIdDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeFindByIdProducts**
> \Yoast\MyYoastApiClient\Model\Product productGroupPrototypeFindByIdProducts($id, $fk)

Find a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->productGroupPrototypeFindByIdProducts($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeFindByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeGetChildren**
> \Yoast\MyYoastApiClient\Model\ProductGroup[] productGroupPrototypeGetChildren($id, $filter)

Queries children of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productGroupPrototypeGetChildren($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeGetChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeGetCourse**
> \Yoast\MyYoastApiClient\Model\Course productGroupPrototypeGetCourse($id, $refresh)

Fetches belongsTo relation course.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$refresh = true; // bool | 

try {
    $result = $api_instance->productGroupPrototypeGetCourse($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeGetCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeGetDownload**
> \Yoast\MyYoastApiClient\Model\Download[] productGroupPrototypeGetDownload($id, $filter)

Queries download of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productGroupPrototypeGetDownload($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeGetDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download[]**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeGetParent**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPrototypeGetParent($id, $refresh)

Fetches belongsTo relation parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$refresh = true; // bool | 

try {
    $result = $api_instance->productGroupPrototypeGetParent($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeGetParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeGetProducts**
> \Yoast\MyYoastApiClient\Model\Product[] productGroupPrototypeGetProducts($id, $filter)

Queries products of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productGroupPrototypeGetProducts($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeLinkDownload**
> \Yoast\MyYoastApiClient\Model\ProductGroupDownloads productGroupPrototypeLinkDownload($id, $fk, $data)

Add a related item by id for download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download
$data = new \Yoast\MyYoastApiClient\Model\ProductGroupDownloads(); // \Yoast\MyYoastApiClient\Model\ProductGroupDownloads | 

try {
    $result = $api_instance->productGroupPrototypeLinkDownload($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeLinkDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroupDownloads**](../Model/ProductGroupDownloads.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroupDownloads**](../Model/ProductGroupDownloads.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeLinkProducts**
> \Yoast\MyYoastApiClient\Model\ProductGroupProducts productGroupPrototypeLinkProducts($id, $fk, $data)

Add a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products
$data = new \Yoast\MyYoastApiClient\Model\ProductGroupProducts(); // \Yoast\MyYoastApiClient\Model\ProductGroupProducts | 

try {
    $result = $api_instance->productGroupPrototypeLinkProducts($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeLinkProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroupProducts**](../Model/ProductGroupProducts.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroupProducts**](../Model/ProductGroupProducts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeUnlinkDownload**
> productGroupPrototypeUnlinkDownload($id, $fk)

Remove the download relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download

try {
    $api_instance->productGroupPrototypeUnlinkDownload($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeUnlinkDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeUnlinkProducts**
> productGroupPrototypeUnlinkProducts($id, $fk)

Remove the products relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->productGroupPrototypeUnlinkProducts($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeUnlinkProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeUpdateByIdChildren**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupPrototypeUpdateByIdChildren($id, $fk, $data)

Update a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for children
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | 

try {
    $result = $api_instance->productGroupPrototypeUpdateByIdChildren($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeUpdateByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for children |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeUpdateByIdDownload**
> \Yoast\MyYoastApiClient\Model\Download productGroupPrototypeUpdateByIdDownload($id, $fk, $data)

Update a related item by id for download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for download
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | 

try {
    $result = $api_instance->productGroupPrototypeUpdateByIdDownload($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeUpdateByIdDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for download |
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupPrototypeUpdateByIdProducts**
> \Yoast\MyYoastApiClient\Model\Product productGroupPrototypeUpdateByIdProducts($id, $fk, $data)

Update a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for products
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->productGroupPrototypeUpdateByIdProducts($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupPrototypeUpdateByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for products |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupReplaceByIdPostProductGroupsidReplace**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupReplaceByIdPostProductGroupsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupReplaceByIdPostProductGroupsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupReplaceByIdPostProductGroupsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupReplaceByIdPutProductGroupsid**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupReplaceByIdPutProductGroupsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupReplaceByIdPutProductGroupsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupReplaceByIdPutProductGroupsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupReplaceOrCreatePostProductGroupsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupReplaceOrCreatePutProductGroups**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupReplaceOrCreatePutProductGroups($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupReplaceOrCreatePutProductGroups($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupReplaceOrCreatePutProductGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 productGroupUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ProductGroup(); // \Yoast\MyYoastApiClient\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

