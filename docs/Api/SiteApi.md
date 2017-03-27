# Yoast\MyYoastApiClient\SiteApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteCount**](SiteApi.md#siteCount) | **GET** /Sites/count | Count instances of the model matched by where from the data source.
[**siteCreate**](SiteApi.md#siteCreate) | **POST** /Sites | Create a new instance of the model and persist it into the data source.
[**siteCreateChangeStreamGetSitesChangeStream**](SiteApi.md#siteCreateChangeStreamGetSitesChangeStream) | **GET** /Sites/change-stream | Create a change stream.
[**siteCreateChangeStreamPostSitesChangeStream**](SiteApi.md#siteCreateChangeStreamPostSitesChangeStream) | **POST** /Sites/change-stream | Create a change stream.
[**siteDeleteById**](SiteApi.md#siteDeleteById) | **DELETE** /Sites/{id} | Delete a model instance by {{id}} from the data source.
[**siteExistsGetSitesidExists**](SiteApi.md#siteExistsGetSitesidExists) | **GET** /Sites/{id}/exists | Check whether a model instance exists in the data source.
[**siteExistsHeadSitesid**](SiteApi.md#siteExistsHeadSitesid) | **HEAD** /Sites/{id} | Check whether a model instance exists in the data source.
[**siteFind**](SiteApi.md#siteFind) | **GET** /Sites | Find all instances of the model matched by filter from the data source.
[**siteFindById**](SiteApi.md#siteFindById) | **GET** /Sites/{id} | Find a model instance by {{id}} from the data source.
[**siteFindOne**](SiteApi.md#siteFindOne) | **GET** /Sites/findOne | Find first instance of the model matched by filter from the data source.
[**sitePatchOrCreate**](SiteApi.md#sitePatchOrCreate) | **PATCH** /Sites | Patch an existing model instance or insert a new one into the data source.
[**sitePrototypeGetUser**](SiteApi.md#sitePrototypeGetUser) | **GET** /Sites/{id}/user | Fetches belongsTo relation user.
[**sitePrototypePatchAttributes**](SiteApi.md#sitePrototypePatchAttributes) | **PATCH** /Sites/{id} | Patch attributes for a model instance and persist it into the data source.
[**siteReplaceByIdPostSitesidReplace**](SiteApi.md#siteReplaceByIdPostSitesidReplace) | **POST** /Sites/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**siteReplaceByIdPutSitesid**](SiteApi.md#siteReplaceByIdPutSitesid) | **PUT** /Sites/{id} | Replace attributes for a model instance and persist it into the data source.
[**siteReplaceOrCreatePostSitesReplaceOrCreate**](SiteApi.md#siteReplaceOrCreatePostSitesReplaceOrCreate) | **POST** /Sites/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**siteReplaceOrCreatePutSites**](SiteApi.md#siteReplaceOrCreatePutSites) | **PUT** /Sites | Replace an existing model instance or insert a new one into the data source.
[**siteUpdateAll**](SiteApi.md#siteUpdateAll) | **POST** /Sites/update | Update instances of the model matched by {{where}} from the data source.
[**siteUpsertWithWhere**](SiteApi.md#siteUpsertWithWhere) | **POST** /Sites/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **siteCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 siteCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->siteCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteCount: ', $e->getMessage(), PHP_EOL;
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

# **siteCreate**
> \Yoast\MyYoastApiClient\Model\Site siteCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->siteCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteCreateChangeStreamGetSitesChangeStream**
> \SplFileObject siteCreateChangeStreamGetSitesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->siteCreateChangeStreamGetSitesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteCreateChangeStreamGetSitesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **siteCreateChangeStreamPostSitesChangeStream**
> \SplFileObject siteCreateChangeStreamPostSitesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->siteCreateChangeStreamPostSitesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteCreateChangeStreamPostSitesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **siteDeleteById**
> object siteDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->siteDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **siteExistsGetSitesidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 siteExistsGetSitesidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->siteExistsGetSitesidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteExistsGetSitesidExists: ', $e->getMessage(), PHP_EOL;
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

# **siteExistsHeadSitesid**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 siteExistsHeadSitesid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->siteExistsHeadSitesid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteExistsHeadSitesid: ', $e->getMessage(), PHP_EOL;
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

# **siteFind**
> \Yoast\MyYoastApiClient\Model\Site[] siteFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->siteFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteFindById**
> \Yoast\MyYoastApiClient\Model\Site siteFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->siteFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteFindOne**
> \Yoast\MyYoastApiClient\Model\Site siteFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->siteFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Site sitePatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->sitePatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeGetUser**
> \Yoast\MyYoastApiClient\Model\MyYoastUser sitePrototypeGetUser($id, $refresh)

Fetches belongsTo relation user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$refresh = true; // bool | 

try {
    $result = $api_instance->sitePrototypeGetUser($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeGetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Site sitePrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | An object of model property name/value pairs

try {
    $result = $api_instance->sitePrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteReplaceByIdPostSitesidReplace**
> \Yoast\MyYoastApiClient\Model\Site siteReplaceByIdPostSitesidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->siteReplaceByIdPostSitesidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteReplaceByIdPostSitesidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteReplaceByIdPutSitesid**
> \Yoast\MyYoastApiClient\Model\Site siteReplaceByIdPutSitesid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->siteReplaceByIdPutSitesid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteReplaceByIdPutSitesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteReplaceOrCreatePostSitesReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Site siteReplaceOrCreatePostSitesReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->siteReplaceOrCreatePostSitesReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteReplaceOrCreatePostSitesReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteReplaceOrCreatePutSites**
> \Yoast\MyYoastApiClient\Model\Site siteReplaceOrCreatePutSites($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | Model instance data

try {
    $result = $api_instance->siteReplaceOrCreatePutSites($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteReplaceOrCreatePutSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 siteUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | An object of model property name/value pairs

try {
    $result = $api_instance->siteUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Site siteUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | An object of model property name/value pairs

try {
    $result = $api_instance->siteUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

