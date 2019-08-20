# Yoast\MyYoastApiClient\ComposerTokenApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**composerTokenCount**](ComposerTokenApi.md#composerTokenCount) | **GET** /ComposerTokens/count | Count instances of the model matched by where from the data source.
[**composerTokenCreate**](ComposerTokenApi.md#composerTokenCreate) | **POST** /ComposerTokens | Create a new instance of the model and persist it into the data source.
[**composerTokenCreateChangeStreamGetComposerTokensChangeStream**](ComposerTokenApi.md#composerTokenCreateChangeStreamGetComposerTokensChangeStream) | **GET** /ComposerTokens/change-stream | Create a change stream.
[**composerTokenCreateChangeStreamPostComposerTokensChangeStream**](ComposerTokenApi.md#composerTokenCreateChangeStreamPostComposerTokensChangeStream) | **POST** /ComposerTokens/change-stream | Create a change stream.
[**composerTokenDelete**](ComposerTokenApi.md#composerTokenDelete) | **POST** /ComposerTokens/{id}/delete | 
[**composerTokenDeleteById**](ComposerTokenApi.md#composerTokenDeleteById) | **DELETE** /ComposerTokens/{id} | Delete a model instance by {{id}} from the data source.
[**composerTokenExistsGetComposerTokensidExists**](ComposerTokenApi.md#composerTokenExistsGetComposerTokensidExists) | **GET** /ComposerTokens/{id}/exists | Check whether a model instance exists in the data source.
[**composerTokenExistsHeadComposerTokensid**](ComposerTokenApi.md#composerTokenExistsHeadComposerTokensid) | **HEAD** /ComposerTokens/{id} | Check whether a model instance exists in the data source.
[**composerTokenFind**](ComposerTokenApi.md#composerTokenFind) | **GET** /ComposerTokens | Find all instances of the model matched by filter from the data source.
[**composerTokenFindById**](ComposerTokenApi.md#composerTokenFindById) | **GET** /ComposerTokens/{id} | Find a model instance by {{id}} from the data source.
[**composerTokenFindOne**](ComposerTokenApi.md#composerTokenFindOne) | **GET** /ComposerTokens/findOne | Find first instance of the model matched by filter from the data source.
[**composerTokenGenerate**](ComposerTokenApi.md#composerTokenGenerate) | **POST** /ComposerTokens/generate | 
[**composerTokenPatchOrCreate**](ComposerTokenApi.md#composerTokenPatchOrCreate) | **PATCH** /ComposerTokens | Patch an existing model instance or insert a new one into the data source.
[**composerTokenPrototypeGetCustomer**](ComposerTokenApi.md#composerTokenPrototypeGetCustomer) | **GET** /ComposerTokens/{id}/customer | Fetches belongsTo relation customer.
[**composerTokenPrototypePatchAttributes**](ComposerTokenApi.md#composerTokenPrototypePatchAttributes) | **PATCH** /ComposerTokens/{id} | Patch attributes for a model instance and persist it into the data source.
[**composerTokenRename**](ComposerTokenApi.md#composerTokenRename) | **POST** /ComposerTokens/{id}/rename | 
[**composerTokenReplaceByIdPostComposerTokensidReplace**](ComposerTokenApi.md#composerTokenReplaceByIdPostComposerTokensidReplace) | **POST** /ComposerTokens/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**composerTokenReplaceByIdPutComposerTokensid**](ComposerTokenApi.md#composerTokenReplaceByIdPutComposerTokensid) | **PUT** /ComposerTokens/{id} | Replace attributes for a model instance and persist it into the data source.
[**composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate**](ComposerTokenApi.md#composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate) | **POST** /ComposerTokens/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**composerTokenReplaceOrCreatePutComposerTokens**](ComposerTokenApi.md#composerTokenReplaceOrCreatePutComposerTokens) | **PUT** /ComposerTokens | Replace an existing model instance or insert a new one into the data source.
[**composerTokenUpdateAll**](ComposerTokenApi.md#composerTokenUpdateAll) | **POST** /ComposerTokens/update | Update instances of the model matched by {{where}} from the data source.
[**composerTokenUpsertWithWhere**](ComposerTokenApi.md#composerTokenUpsertWithWhere) | **POST** /ComposerTokens/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **composerTokenCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 composerTokenCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->composerTokenCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenCount: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenCreate**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenCreateChangeStreamGetComposerTokensChangeStream**
> \SplFileObject composerTokenCreateChangeStreamGetComposerTokensChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->composerTokenCreateChangeStreamGetComposerTokensChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenCreateChangeStreamGetComposerTokensChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenCreateChangeStreamPostComposerTokensChangeStream**
> \SplFileObject composerTokenCreateChangeStreamPostComposerTokensChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->composerTokenCreateChangeStreamPostComposerTokensChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenCreateChangeStreamPostComposerTokensChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenDelete**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->composerTokenDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenDeleteById**
> object composerTokenDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->composerTokenDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenExistsGetComposerTokensidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 composerTokenExistsGetComposerTokensidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->composerTokenExistsGetComposerTokensidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenExistsGetComposerTokensidExists: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenExistsHeadComposerTokensid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 composerTokenExistsHeadComposerTokensid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->composerTokenExistsHeadComposerTokensid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenExistsHeadComposerTokensid: ', $e->getMessage(), PHP_EOL;
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

# **composerTokenFind**
> \Yoast\MyYoastApiClient\Model\ComposerToken[] composerTokenFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->composerTokenFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken[]**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenFindById**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->composerTokenFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenFindOne**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->composerTokenFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenGenerate**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenGenerate($data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | 

try {
    $result = $api_instance->composerTokenGenerate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenPrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\Customer composerTokenPrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | ComposerToken id
$refresh = true; // bool | 

try {
    $result = $api_instance->composerTokenPrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenPrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ComposerToken id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | ComposerToken id
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | An object of model property name/value pairs

try {
    $result = $api_instance->composerTokenPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ComposerToken id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenRename**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenRename($id, $data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | 
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | 

try {
    $result = $api_instance->composerTokenRename($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenReplaceByIdPostComposerTokensidReplace**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenReplaceByIdPostComposerTokensidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenReplaceByIdPostComposerTokensidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenReplaceByIdPostComposerTokensidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenReplaceByIdPutComposerTokensid**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenReplaceByIdPutComposerTokensid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenReplaceByIdPutComposerTokensid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenReplaceByIdPutComposerTokensid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenReplaceOrCreatePostComposerTokensReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenReplaceOrCreatePutComposerTokens**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenReplaceOrCreatePutComposerTokens($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | Model instance data

try {
    $result = $api_instance->composerTokenReplaceOrCreatePutComposerTokens($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenReplaceOrCreatePutComposerTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 composerTokenUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | An object of model property name/value pairs

try {
    $result = $api_instance->composerTokenUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **composerTokenUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\ComposerToken composerTokenUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ComposerTokenApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ComposerToken(); // \Yoast\MyYoastApiClient\Model\ComposerToken | An object of model property name/value pairs

try {
    $result = $api_instance->composerTokenUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposerTokenApi->composerTokenUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

