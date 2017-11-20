# Yoast\MyYoastApiClient\MigrationMapApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**migrationMapCount**](MigrationMapApi.md#migrationMapCount) | **GET** /MigrationMaps/count | Count instances of the model matched by where from the data source.
[**migrationMapCreate**](MigrationMapApi.md#migrationMapCreate) | **POST** /MigrationMaps | Create a new instance of the model and persist it into the data source.
[**migrationMapCreateChangeStreamGetMigrationMapsChangeStream**](MigrationMapApi.md#migrationMapCreateChangeStreamGetMigrationMapsChangeStream) | **GET** /MigrationMaps/change-stream | Create a change stream.
[**migrationMapCreateChangeStreamPostMigrationMapsChangeStream**](MigrationMapApi.md#migrationMapCreateChangeStreamPostMigrationMapsChangeStream) | **POST** /MigrationMaps/change-stream | Create a change stream.
[**migrationMapDeleteById**](MigrationMapApi.md#migrationMapDeleteById) | **DELETE** /MigrationMaps/{id} | Delete a model instance by {{id}} from the data source.
[**migrationMapExistsGetMigrationMapsidExists**](MigrationMapApi.md#migrationMapExistsGetMigrationMapsidExists) | **GET** /MigrationMaps/{id}/exists | Check whether a model instance exists in the data source.
[**migrationMapExistsHeadMigrationMapsid**](MigrationMapApi.md#migrationMapExistsHeadMigrationMapsid) | **HEAD** /MigrationMaps/{id} | Check whether a model instance exists in the data source.
[**migrationMapFind**](MigrationMapApi.md#migrationMapFind) | **GET** /MigrationMaps | Find all instances of the model matched by filter from the data source.
[**migrationMapFindById**](MigrationMapApi.md#migrationMapFindById) | **GET** /MigrationMaps/{id} | Find a model instance by {{id}} from the data source.
[**migrationMapFindOne**](MigrationMapApi.md#migrationMapFindOne) | **GET** /MigrationMaps/findOne | Find first instance of the model matched by filter from the data source.
[**migrationMapPatchOrCreate**](MigrationMapApi.md#migrationMapPatchOrCreate) | **PATCH** /MigrationMaps | Patch an existing model instance or insert a new one into the data source.
[**migrationMapPrototypePatchAttributes**](MigrationMapApi.md#migrationMapPrototypePatchAttributes) | **PATCH** /MigrationMaps/{id} | Patch attributes for a model instance and persist it into the data source.
[**migrationMapReplaceByIdPostMigrationMapsidReplace**](MigrationMapApi.md#migrationMapReplaceByIdPostMigrationMapsidReplace) | **POST** /MigrationMaps/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**migrationMapReplaceByIdPutMigrationMapsid**](MigrationMapApi.md#migrationMapReplaceByIdPutMigrationMapsid) | **PUT** /MigrationMaps/{id} | Replace attributes for a model instance and persist it into the data source.
[**migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate**](MigrationMapApi.md#migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate) | **POST** /MigrationMaps/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**migrationMapReplaceOrCreatePutMigrationMaps**](MigrationMapApi.md#migrationMapReplaceOrCreatePutMigrationMaps) | **PUT** /MigrationMaps | Replace an existing model instance or insert a new one into the data source.
[**migrationMapUpdateAll**](MigrationMapApi.md#migrationMapUpdateAll) | **POST** /MigrationMaps/update | Update instances of the model matched by {{where}} from the data source.
[**migrationMapUpsertWithWhere**](MigrationMapApi.md#migrationMapUpsertWithWhere) | **POST** /MigrationMaps/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **migrationMapCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 migrationMapCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->migrationMapCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapCount: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapCreate**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapCreateChangeStreamGetMigrationMapsChangeStream**
> \SplFileObject migrationMapCreateChangeStreamGetMigrationMapsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->migrationMapCreateChangeStreamGetMigrationMapsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapCreateChangeStreamGetMigrationMapsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapCreateChangeStreamPostMigrationMapsChangeStream**
> \SplFileObject migrationMapCreateChangeStreamPostMigrationMapsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->migrationMapCreateChangeStreamPostMigrationMapsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapCreateChangeStreamPostMigrationMapsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapDeleteById**
> object migrationMapDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->migrationMapDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapExistsGetMigrationMapsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 migrationMapExistsGetMigrationMapsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->migrationMapExistsGetMigrationMapsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapExistsGetMigrationMapsidExists: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapExistsHeadMigrationMapsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 migrationMapExistsHeadMigrationMapsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->migrationMapExistsHeadMigrationMapsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapExistsHeadMigrationMapsid: ', $e->getMessage(), PHP_EOL;
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

# **migrationMapFind**
> \Yoast\MyYoastApiClient\Model\MigrationMap[] migrationMapFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->migrationMapFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap[]**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapFindById**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->migrationMapFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapFindOne**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->migrationMapFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | MigrationMap id
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | An object of model property name/value pairs

try {
    $result = $api_instance->migrationMapPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MigrationMap id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapReplaceByIdPostMigrationMapsidReplace**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapReplaceByIdPostMigrationMapsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapReplaceByIdPostMigrationMapsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapReplaceByIdPostMigrationMapsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapReplaceByIdPutMigrationMapsid**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapReplaceByIdPutMigrationMapsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapReplaceByIdPutMigrationMapsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapReplaceByIdPutMigrationMapsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapReplaceOrCreatePostMigrationMapsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapReplaceOrCreatePutMigrationMaps**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapReplaceOrCreatePutMigrationMaps($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | Model instance data

try {
    $result = $api_instance->migrationMapReplaceOrCreatePutMigrationMaps($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapReplaceOrCreatePutMigrationMaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 migrationMapUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | An object of model property name/value pairs

try {
    $result = $api_instance->migrationMapUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMapUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\MigrationMap migrationMapUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MigrationMapApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\MigrationMap(); // \Yoast\MyYoastApiClient\Model\MigrationMap | An object of model property name/value pairs

try {
    $result = $api_instance->migrationMapUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationMapApi->migrationMapUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MigrationMap**](../Model/MigrationMap.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

