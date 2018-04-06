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
[**sitePrototypeCountSubscriptions**](SiteApi.md#sitePrototypeCountSubscriptions) | **GET** /Sites/{id}/subscriptions/count | Counts subscriptions of Site.
[**sitePrototypeCreateSubscriptions**](SiteApi.md#sitePrototypeCreateSubscriptions) | **POST** /Sites/{id}/subscriptions | Creates a new instance in subscriptions of this model.
[**sitePrototypeDeleteSubscriptions**](SiteApi.md#sitePrototypeDeleteSubscriptions) | **DELETE** /Sites/{id}/subscriptions | Deletes all subscriptions of this model.
[**sitePrototypeDestroyByIdSubscriptions**](SiteApi.md#sitePrototypeDestroyByIdSubscriptions) | **DELETE** /Sites/{id}/subscriptions/{fk} | Delete a related item by id for subscriptions.
[**sitePrototypeExistsSubscriptions**](SiteApi.md#sitePrototypeExistsSubscriptions) | **HEAD** /Sites/{id}/subscriptions/rel/{fk} | Check the existence of subscriptions relation to an item by id.
[**sitePrototypeFindByIdSubscriptions**](SiteApi.md#sitePrototypeFindByIdSubscriptions) | **GET** /Sites/{id}/subscriptions/{fk} | Find a related item by id for subscriptions.
[**sitePrototypeGetSubscriptions**](SiteApi.md#sitePrototypeGetSubscriptions) | **GET** /Sites/{id}/subscriptions | Queries subscriptions of Site.
[**sitePrototypeGetUser**](SiteApi.md#sitePrototypeGetUser) | **GET** /Sites/{id}/user | Fetches belongsTo relation user.
[**sitePrototypeLinkSubscriptions**](SiteApi.md#sitePrototypeLinkSubscriptions) | **PUT** /Sites/{id}/subscriptions/rel/{fk} | Add a related item by id for subscriptions.
[**sitePrototypePatchAttributes**](SiteApi.md#sitePrototypePatchAttributes) | **PATCH** /Sites/{id} | Patch attributes for a model instance and persist it into the data source.
[**sitePrototypeUnlinkSubscriptions**](SiteApi.md#sitePrototypeUnlinkSubscriptions) | **DELETE** /Sites/{id}/subscriptions/rel/{fk} | Remove the subscriptions relation to an item by id.
[**sitePrototypeUpdateByIdSubscriptions**](SiteApi.md#sitePrototypeUpdateByIdSubscriptions) | **PUT** /Sites/{id}/subscriptions/{fk} | Update a related item by id for subscriptions.
[**siteReplaceByIdPostSitesidReplace**](SiteApi.md#siteReplaceByIdPostSitesidReplace) | **POST** /Sites/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**siteReplaceByIdPutSitesid**](SiteApi.md#siteReplaceByIdPutSitesid) | **PUT** /Sites/{id} | Replace attributes for a model instance and persist it into the data source.
[**siteReplaceOrCreatePostSitesReplaceOrCreate**](SiteApi.md#siteReplaceOrCreatePostSitesReplaceOrCreate) | **POST** /Sites/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**siteReplaceOrCreatePutSites**](SiteApi.md#siteReplaceOrCreatePutSites) | **PUT** /Sites | Replace an existing model instance or insert a new one into the data source.
[**siteSwitchSubscription**](SiteApi.md#siteSwitchSubscription) | **POST** /Sites/switchSubscription | 
[**siteTransfer**](SiteApi.md#siteTransfer) | **POST** /Sites/transfer | 
[**siteUpdateAll**](SiteApi.md#siteUpdateAll) | **POST** /Sites/update | Update instances of the model matched by {{where}} from the data source.
[**siteUpsertWithWhere**](SiteApi.md#siteUpsertWithWhere) | **POST** /Sites/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **siteCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 siteCount($where)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

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
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 siteExistsGetSitesidExists($id)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteExistsHeadSitesid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 siteExistsHeadSitesid($id)

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

[**\Yoast\MyYoastApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

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
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeCountSubscriptions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 sitePrototypeCountSubscriptions($id, $where)

Counts subscriptions of Site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->sitePrototypeCountSubscriptions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeCountSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeCreateSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription sitePrototypeCreateSubscriptions($id, $data)

Creates a new instance in subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->sitePrototypeCreateSubscriptions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeCreateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeDeleteSubscriptions**
> sitePrototypeDeleteSubscriptions($id)

Deletes all subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id

try {
    $api_instance->sitePrototypeDeleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeDeleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeDestroyByIdSubscriptions**
> sitePrototypeDestroyByIdSubscriptions($id, $fk)

Delete a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->sitePrototypeDestroyByIdSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeDestroyByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeExistsSubscriptions**
> bool sitePrototypeExistsSubscriptions($id, $fk)

Check the existence of subscriptions relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->sitePrototypeExistsSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeExistsSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeFindByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription sitePrototypeFindByIdSubscriptions($id, $fk)

Find a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->sitePrototypeFindByIdSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeFindByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeGetSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription[] sitePrototypeGetSubscriptions($id, $filter)

Queries subscriptions of Site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->sitePrototypeGetSubscriptions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeGetUser**
> \Yoast\MyYoastApiClient\Model\Customer sitePrototypeGetUser($id, $refresh)

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

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeLinkSubscriptions**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions sitePrototypeLinkSubscriptions($id, $fk, $data)

Add a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\SiteSubscriptions(); // \Yoast\MyYoastApiClient\Model\SiteSubscriptions | 

try {
    $result = $api_instance->sitePrototypeLinkSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeLinkSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **fk** | **string**| Foreign key for subscriptions |
 **data** | [**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeUnlinkSubscriptions**
> sitePrototypeUnlinkSubscriptions($id, $fk)

Remove the subscriptions relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->sitePrototypeUnlinkSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeUnlinkSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitePrototypeUpdateByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription sitePrototypeUpdateByIdSubscriptions($id, $fk, $data)

Update a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$id = "id_example"; // string | Site id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->sitePrototypeUpdateByIdSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->sitePrototypeUpdateByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Site id |
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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteSwitchSubscription**
> double siteSwitchSubscription($from_source_id, $to_source_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$from_source_id = 1.2; // double | 
$to_source_id = 1.2; // double | 

try {
    $result = $api_instance->siteSwitchSubscription($from_source_id, $to_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteSwitchSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_source_id** | **double**|  |
 **to_source_id** | **double**|  |

### Return type

**double**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteTransfer**
> \Yoast\MyYoastApiClient\Model\Site[] siteTransfer($from_source_id, $to_source_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SiteApi();
$from_source_id = 1.2; // double | 
$to_source_id = 1.2; // double | 

try {
    $result = $api_instance->siteTransfer($from_source_id, $to_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_source_id** | **double**|  |
 **to_source_id** | **double**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 siteUpdateAll($where, $data)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

