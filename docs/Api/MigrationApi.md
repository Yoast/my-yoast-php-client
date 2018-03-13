# Yoast\MyYoastApiClient\MigrationApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**migrationCount**](MigrationApi.md#migrationCount) | **GET** /Migrations/count | Count instances of the model matched by where from the data source.
[**migrationCreate**](MigrationApi.md#migrationCreate) | **POST** /Migrations | Create a new instance of the model and persist it into the data source.
[**migrationCreateChangeStreamGetMigrationsChangeStream**](MigrationApi.md#migrationCreateChangeStreamGetMigrationsChangeStream) | **GET** /Migrations/change-stream | Create a change stream.
[**migrationCreateChangeStreamPostMigrationsChangeStream**](MigrationApi.md#migrationCreateChangeStreamPostMigrationsChangeStream) | **POST** /Migrations/change-stream | Create a change stream.
[**migrationDeleteById**](MigrationApi.md#migrationDeleteById) | **DELETE** /Migrations/{id} | Delete a model instance by {{id}} from the data source.
[**migrationExistsGetMigrationsidExists**](MigrationApi.md#migrationExistsGetMigrationsidExists) | **GET** /Migrations/{id}/exists | Check whether a model instance exists in the data source.
[**migrationExistsHeadMigrationsid**](MigrationApi.md#migrationExistsHeadMigrationsid) | **HEAD** /Migrations/{id} | Check whether a model instance exists in the data source.
[**migrationFind**](MigrationApi.md#migrationFind) | **GET** /Migrations | Find all instances of the model matched by filter from the data source.
[**migrationFindById**](MigrationApi.md#migrationFindById) | **GET** /Migrations/{id} | Find a model instance by {{id}} from the data source.
[**migrationFindOne**](MigrationApi.md#migrationFindOne) | **GET** /Migrations/findOne | Find first instance of the model matched by filter from the data source.
[**migrationMigrateByName**](MigrationApi.md#migrationMigrateByName) | **GET** /Migrations/migrateByName | Run specific migration by name
[**migrationPatchOrCreate**](MigrationApi.md#migrationPatchOrCreate) | **PATCH** /Migrations | Patch an existing model instance or insert a new one into the data source.
[**migrationPrototypePatchAttributes**](MigrationApi.md#migrationPrototypePatchAttributes) | **PATCH** /Migrations/{id} | Patch attributes for a model instance and persist it into the data source.
[**migrationReplaceByIdPostMigrationsidReplace**](MigrationApi.md#migrationReplaceByIdPostMigrationsidReplace) | **POST** /Migrations/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**migrationReplaceByIdPutMigrationsid**](MigrationApi.md#migrationReplaceByIdPutMigrationsid) | **PUT** /Migrations/{id} | Replace attributes for a model instance and persist it into the data source.
[**migrationReplaceOrCreatePostMigrationsReplaceOrCreate**](MigrationApi.md#migrationReplaceOrCreatePostMigrationsReplaceOrCreate) | **POST** /Migrations/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**migrationReplaceOrCreatePutMigrations**](MigrationApi.md#migrationReplaceOrCreatePutMigrations) | **PUT** /Migrations | Replace an existing model instance or insert a new one into the data source.
[**migrationUpdateAll**](MigrationApi.md#migrationUpdateAll) | **POST** /Migrations/update | Update instances of the model matched by {{where}} from the data source.
[**migrationUpsertWithWhere**](MigrationApi.md#migrationUpsertWithWhere) | **POST** /Migrations/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **migrationCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 migrationCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $apiInstance->migrationCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationCount: ', $e->getMessage(), PHP_EOL;
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

# **migrationCreate**
> \Yoast\MyYoastApiClient\Model\Migration migrationCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationCreateChangeStreamGetMigrationsChangeStream**
> \SplFileObject migrationCreateChangeStreamGetMigrationsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->migrationCreateChangeStreamGetMigrationsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationCreateChangeStreamGetMigrationsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **migrationCreateChangeStreamPostMigrationsChangeStream**
> \SplFileObject migrationCreateChangeStreamPostMigrationsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options = "options_example"; // string | 

try {
    $result = $apiInstance->migrationCreateChangeStreamPostMigrationsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationCreateChangeStreamPostMigrationsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **migrationDeleteById**
> object migrationDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->migrationDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **migrationExistsGetMigrationsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 migrationExistsGetMigrationsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->migrationExistsGetMigrationsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationExistsGetMigrationsidExists: ', $e->getMessage(), PHP_EOL;
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

# **migrationExistsHeadMigrationsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 migrationExistsHeadMigrationsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id

try {
    $result = $apiInstance->migrationExistsHeadMigrationsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationExistsHeadMigrationsid: ', $e->getMessage(), PHP_EOL;
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

# **migrationFind**
> \Yoast\MyYoastApiClient\Model\Migration[] migrationFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->migrationFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration[]**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationFindById**
> \Yoast\MyYoastApiClient\Model\Migration migrationFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->migrationFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationFindOne**
> \Yoast\MyYoastApiClient\Model\Migration migrationFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $apiInstance->migrationFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationMigrateByName**
> migrationMigrateByName($name, $record)

Run specific migration by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the migration script to run.
$record = true; // bool | 

try {
    $apiInstance->migrationMigrateByName($name, $record);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationMigrateByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the migration script to run. |
 **record** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Migration migrationPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Migration migrationPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Migration id
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | An object of model property name/value pairs

try {
    $result = $apiInstance->migrationPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Migration id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationReplaceByIdPostMigrationsidReplace**
> \Yoast\MyYoastApiClient\Model\Migration migrationReplaceByIdPostMigrationsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationReplaceByIdPostMigrationsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationReplaceByIdPostMigrationsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationReplaceByIdPutMigrationsid**
> \Yoast\MyYoastApiClient\Model\Migration migrationReplaceByIdPutMigrationsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationReplaceByIdPutMigrationsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationReplaceByIdPutMigrationsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationReplaceOrCreatePostMigrationsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Migration migrationReplaceOrCreatePostMigrationsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationReplaceOrCreatePostMigrationsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationReplaceOrCreatePostMigrationsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationReplaceOrCreatePutMigrations**
> \Yoast\MyYoastApiClient\Model\Migration migrationReplaceOrCreatePutMigrations($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | Model instance data

try {
    $result = $apiInstance->migrationReplaceOrCreatePutMigrations($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationReplaceOrCreatePutMigrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 migrationUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | An object of model property name/value pairs

try {
    $result = $apiInstance->migrationUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrationUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Migration migrationUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Migration(); // \Yoast\MyYoastApiClient\Model\Migration | An object of model property name/value pairs

try {
    $result = $apiInstance->migrationUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->migrationUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Migration**](../Model/Migration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

