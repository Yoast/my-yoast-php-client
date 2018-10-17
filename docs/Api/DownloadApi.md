# Yoast\MyYoastApiClient\DownloadApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadCount**](DownloadApi.md#downloadCount) | **GET** /Downloads/count | Count instances of the model matched by where from the data source.
[**downloadCreate**](DownloadApi.md#downloadCreate) | **POST** /Downloads | Create a new instance of the model and persist it into the data source.
[**downloadCreateChangeStreamGetDownloadsChangeStream**](DownloadApi.md#downloadCreateChangeStreamGetDownloadsChangeStream) | **GET** /Downloads/change-stream | Create a change stream.
[**downloadCreateChangeStreamPostDownloadsChangeStream**](DownloadApi.md#downloadCreateChangeStreamPostDownloadsChangeStream) | **POST** /Downloads/change-stream | Create a change stream.
[**downloadDeleteById**](DownloadApi.md#downloadDeleteById) | **DELETE** /Downloads/{id} | Delete a model instance by {{id}} from the data source.
[**downloadDownload**](DownloadApi.md#downloadDownload) | **GET** /Downloads/file/{name} | Downloads the requested file.
[**downloadExistsGetDownloadsidExists**](DownloadApi.md#downloadExistsGetDownloadsidExists) | **GET** /Downloads/{id}/exists | Check whether a model instance exists in the data source.
[**downloadExistsHeadDownloadsid**](DownloadApi.md#downloadExistsHeadDownloadsid) | **HEAD** /Downloads/{id} | Check whether a model instance exists in the data source.
[**downloadFind**](DownloadApi.md#downloadFind) | **GET** /Downloads | Find all instances of the model matched by filter from the data source.
[**downloadFindById**](DownloadApi.md#downloadFindById) | **GET** /Downloads/{id} | Find a model instance by {{id}} from the data source.
[**downloadFindOne**](DownloadApi.md#downloadFindOne) | **GET** /Downloads/findOne | Find first instance of the model matched by filter from the data source.
[**downloadPatchOrCreate**](DownloadApi.md#downloadPatchOrCreate) | **PATCH** /Downloads | Patch an existing model instance or insert a new one into the data source.
[**downloadPrototypeCountProducts**](DownloadApi.md#downloadPrototypeCountProducts) | **GET** /Downloads/{id}/products/count | Counts products of Download.
[**downloadPrototypeCreateProducts**](DownloadApi.md#downloadPrototypeCreateProducts) | **POST** /Downloads/{id}/products | Creates a new instance in products of this model.
[**downloadPrototypeDeleteProducts**](DownloadApi.md#downloadPrototypeDeleteProducts) | **DELETE** /Downloads/{id}/products | Deletes all products of this model.
[**downloadPrototypeDestroyByIdProducts**](DownloadApi.md#downloadPrototypeDestroyByIdProducts) | **DELETE** /Downloads/{id}/products/{fk} | Delete a related item by id for products.
[**downloadPrototypeExistsProducts**](DownloadApi.md#downloadPrototypeExistsProducts) | **HEAD** /Downloads/{id}/products/rel/{fk} | Check the existence of products relation to an item by id.
[**downloadPrototypeFindByIdProducts**](DownloadApi.md#downloadPrototypeFindByIdProducts) | **GET** /Downloads/{id}/products/{fk} | Find a related item by id for products.
[**downloadPrototypeGetProducts**](DownloadApi.md#downloadPrototypeGetProducts) | **GET** /Downloads/{id}/products | Queries products of Download.
[**downloadPrototypeLinkProducts**](DownloadApi.md#downloadPrototypeLinkProducts) | **PUT** /Downloads/{id}/products/rel/{fk} | Add a related item by id for products.
[**downloadPrototypePatchAttributes**](DownloadApi.md#downloadPrototypePatchAttributes) | **PATCH** /Downloads/{id} | Patch attributes for a model instance and persist it into the data source.
[**downloadPrototypeUnlinkProducts**](DownloadApi.md#downloadPrototypeUnlinkProducts) | **DELETE** /Downloads/{id}/products/rel/{fk} | Remove the products relation to an item by id.
[**downloadPrototypeUpdateByIdProducts**](DownloadApi.md#downloadPrototypeUpdateByIdProducts) | **PUT** /Downloads/{id}/products/{fk} | Update a related item by id for products.
[**downloadReplaceByIdPostDownloadsidReplace**](DownloadApi.md#downloadReplaceByIdPostDownloadsidReplace) | **POST** /Downloads/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**downloadReplaceByIdPutDownloadsid**](DownloadApi.md#downloadReplaceByIdPutDownloadsid) | **PUT** /Downloads/{id} | Replace attributes for a model instance and persist it into the data source.
[**downloadReplaceOrCreatePostDownloadsReplaceOrCreate**](DownloadApi.md#downloadReplaceOrCreatePostDownloadsReplaceOrCreate) | **POST** /Downloads/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**downloadReplaceOrCreatePutDownloads**](DownloadApi.md#downloadReplaceOrCreatePutDownloads) | **PUT** /Downloads | Replace an existing model instance or insert a new one into the data source.
[**downloadUpdateAll**](DownloadApi.md#downloadUpdateAll) | **POST** /Downloads/update | Update instances of the model matched by {{where}} from the data source.
[**downloadUpload**](DownloadApi.md#downloadUpload) | **POST** /Downloads/file/{name} | Uploads the requested file.
[**downloadUpsertWithWhere**](DownloadApi.md#downloadUpsertWithWhere) | **POST** /Downloads/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **downloadCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 downloadCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->downloadCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadCount: ', $e->getMessage(), PHP_EOL;
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

# **downloadCreate**
> \Yoast\MyYoastApiClient\Model\Download downloadCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadCreateChangeStreamGetDownloadsChangeStream**
> \SplFileObject downloadCreateChangeStreamGetDownloadsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->downloadCreateChangeStreamGetDownloadsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadCreateChangeStreamGetDownloadsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **downloadCreateChangeStreamPostDownloadsChangeStream**
> \SplFileObject downloadCreateChangeStreamPostDownloadsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->downloadCreateChangeStreamPostDownloadsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadCreateChangeStreamPostDownloadsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **downloadDeleteById**
> object downloadDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->downloadDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **downloadDownload**
> object downloadDownload($name, $version, $site)

Downloads the requested file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$name = "name_example"; // string | 
$version = "version_example"; // string | 
$site = "site_example"; // string | 

try {
    $result = $api_instance->downloadDownload($name, $version, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **version** | **string**|  | [optional]
 **site** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadExistsGetDownloadsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 downloadExistsGetDownloadsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->downloadExistsGetDownloadsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadExistsGetDownloadsidExists: ', $e->getMessage(), PHP_EOL;
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

# **downloadExistsHeadDownloadsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 downloadExistsHeadDownloadsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->downloadExistsHeadDownloadsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadExistsHeadDownloadsid: ', $e->getMessage(), PHP_EOL;
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

# **downloadFind**
> \Yoast\MyYoastApiClient\Model\Download[] downloadFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->downloadFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download[]**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFindById**
> \Yoast\MyYoastApiClient\Model\Download downloadFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->downloadFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFindOne**
> \Yoast\MyYoastApiClient\Model\Download downloadFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->downloadFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Download downloadPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeCountProducts**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 downloadPrototypeCountProducts($id, $where)

Counts products of Download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->downloadPrototypeCountProducts($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeCountProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeCreateProducts**
> \Yoast\MyYoastApiClient\Model\Product downloadPrototypeCreateProducts($id, $data)

Creates a new instance in products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->downloadPrototypeCreateProducts($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeCreateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeDeleteProducts**
> downloadPrototypeDeleteProducts($id)

Deletes all products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id

try {
    $api_instance->downloadPrototypeDeleteProducts($id);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeDestroyByIdProducts**
> downloadPrototypeDestroyByIdProducts($id, $fk)

Delete a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->downloadPrototypeDestroyByIdProducts($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeDestroyByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeExistsProducts**
> bool downloadPrototypeExistsProducts($id, $fk)

Check the existence of products relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->downloadPrototypeExistsProducts($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeExistsProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **fk** | **string**| Foreign key for products |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeFindByIdProducts**
> \Yoast\MyYoastApiClient\Model\Product downloadPrototypeFindByIdProducts($id, $fk)

Find a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->downloadPrototypeFindByIdProducts($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeFindByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **fk** | **string**| Foreign key for products |

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeGetProducts**
> \Yoast\MyYoastApiClient\Model\Product[] downloadPrototypeGetProducts($id, $filter)

Queries products of Download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->downloadPrototypeGetProducts($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeLinkProducts**
> \Yoast\MyYoastApiClient\Model\DownloadProducts downloadPrototypeLinkProducts($id, $fk, $data)

Add a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products
$data = new \Yoast\MyYoastApiClient\Model\DownloadProducts(); // \Yoast\MyYoastApiClient\Model\DownloadProducts | 

try {
    $result = $api_instance->downloadPrototypeLinkProducts($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeLinkProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **fk** | **string**| Foreign key for products |
 **data** | [**\Yoast\MyYoastApiClient\Model\DownloadProducts**](../Model/DownloadProducts.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\DownloadProducts**](../Model/DownloadProducts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Download downloadPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | An object of model property name/value pairs

try {
    $result = $api_instance->downloadPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeUnlinkProducts**
> downloadPrototypeUnlinkProducts($id, $fk)

Remove the products relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->downloadPrototypeUnlinkProducts($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeUnlinkProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPrototypeUpdateByIdProducts**
> \Yoast\MyYoastApiClient\Model\Product downloadPrototypeUpdateByIdProducts($id, $fk, $data)

Update a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Download id
$fk = "fk_example"; // string | Foreign key for products
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->downloadPrototypeUpdateByIdProducts($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadPrototypeUpdateByIdProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Download id |
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

# **downloadReplaceByIdPostDownloadsidReplace**
> \Yoast\MyYoastApiClient\Model\Download downloadReplaceByIdPostDownloadsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadReplaceByIdPostDownloadsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadReplaceByIdPostDownloadsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadReplaceByIdPutDownloadsid**
> \Yoast\MyYoastApiClient\Model\Download downloadReplaceByIdPutDownloadsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadReplaceByIdPutDownloadsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadReplaceByIdPutDownloadsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadReplaceOrCreatePostDownloadsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Download downloadReplaceOrCreatePostDownloadsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadReplaceOrCreatePostDownloadsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadReplaceOrCreatePostDownloadsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadReplaceOrCreatePutDownloads**
> \Yoast\MyYoastApiClient\Model\Download downloadReplaceOrCreatePutDownloads($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | Model instance data

try {
    $result = $api_instance->downloadReplaceOrCreatePutDownloads($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadReplaceOrCreatePutDownloads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 downloadUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | An object of model property name/value pairs

try {
    $result = $api_instance->downloadUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadUpload**
> object downloadUpload($name, $version, $secret)

Uploads the requested file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$name = "name_example"; // string | 
$version = "version_example"; // string | 
$secret = "secret_example"; // string | 

try {
    $result = $api_instance->downloadUpload($name, $version, $secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **version** | **string**|  | [optional]
 **secret** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Download downloadUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\DownloadApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Download(); // \Yoast\MyYoastApiClient\Model\Download | An object of model property name/value pairs

try {
    $result = $api_instance->downloadUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Download**](../Model/Download.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

