# Yoast\MyYoastApiClient\ConfigurationServiceRequestApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationServiceRequestAssign**](ConfigurationServiceRequestApi.md#configurationServiceRequestAssign) | **POST** /ConfigurationServiceRequests/{id}/assign | 
[**configurationServiceRequestComplete**](ConfigurationServiceRequestApi.md#configurationServiceRequestComplete) | **POST** /ConfigurationServiceRequests/{id}/complete | 
[**configurationServiceRequestConfigure**](ConfigurationServiceRequestApi.md#configurationServiceRequestConfigure) | **POST** /ConfigurationServiceRequests/{id}/configure | 
[**configurationServiceRequestCount**](ConfigurationServiceRequestApi.md#configurationServiceRequestCount) | **GET** /ConfigurationServiceRequests/count | Count instances of the model matched by where from the data source.
[**configurationServiceRequestCreate**](ConfigurationServiceRequestApi.md#configurationServiceRequestCreate) | **POST** /ConfigurationServiceRequests | Create a new instance of the model and persist it into the data source.
[**configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream**](ConfigurationServiceRequestApi.md#configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream) | **GET** /ConfigurationServiceRequests/change-stream | Create a change stream.
[**configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream**](ConfigurationServiceRequestApi.md#configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream) | **POST** /ConfigurationServiceRequests/change-stream | Create a change stream.
[**configurationServiceRequestDeleteById**](ConfigurationServiceRequestApi.md#configurationServiceRequestDeleteById) | **DELETE** /ConfigurationServiceRequests/{id} | Delete a model instance by {{id}} from the data source.
[**configurationServiceRequestExistsGetConfigurationServiceRequestsidExists**](ConfigurationServiceRequestApi.md#configurationServiceRequestExistsGetConfigurationServiceRequestsidExists) | **GET** /ConfigurationServiceRequests/{id}/exists | Check whether a model instance exists in the data source.
[**configurationServiceRequestExistsHeadConfigurationServiceRequestsid**](ConfigurationServiceRequestApi.md#configurationServiceRequestExistsHeadConfigurationServiceRequestsid) | **HEAD** /ConfigurationServiceRequests/{id} | Check whether a model instance exists in the data source.
[**configurationServiceRequestFind**](ConfigurationServiceRequestApi.md#configurationServiceRequestFind) | **GET** /ConfigurationServiceRequests | Find all instances of the model matched by filter from the data source.
[**configurationServiceRequestFindById**](ConfigurationServiceRequestApi.md#configurationServiceRequestFindById) | **GET** /ConfigurationServiceRequests/{id} | Find a model instance by {{id}} from the data source.
[**configurationServiceRequestFindOne**](ConfigurationServiceRequestApi.md#configurationServiceRequestFindOne) | **GET** /ConfigurationServiceRequests/findOne | Find first instance of the model matched by filter from the data source.
[**configurationServiceRequestPatchOrCreate**](ConfigurationServiceRequestApi.md#configurationServiceRequestPatchOrCreate) | **PATCH** /ConfigurationServiceRequests | Patch an existing model instance or insert a new one into the data source.
[**configurationServiceRequestPrototypeGetAssignee**](ConfigurationServiceRequestApi.md#configurationServiceRequestPrototypeGetAssignee) | **GET** /ConfigurationServiceRequests/{id}/assignee | Fetches belongsTo relation assignee.
[**configurationServiceRequestPrototypeGetCustomer**](ConfigurationServiceRequestApi.md#configurationServiceRequestPrototypeGetCustomer) | **GET** /ConfigurationServiceRequests/{id}/customer | Fetches belongsTo relation customer.
[**configurationServiceRequestPrototypeGetOrder**](ConfigurationServiceRequestApi.md#configurationServiceRequestPrototypeGetOrder) | **GET** /ConfigurationServiceRequests/{id}/order | Fetches belongsTo relation order.
[**configurationServiceRequestPrototypeGetSite**](ConfigurationServiceRequestApi.md#configurationServiceRequestPrototypeGetSite) | **GET** /ConfigurationServiceRequests/{id}/site | Fetches belongsTo relation site.
[**configurationServiceRequestPrototypePatchAttributes**](ConfigurationServiceRequestApi.md#configurationServiceRequestPrototypePatchAttributes) | **PATCH** /ConfigurationServiceRequests/{id} | Patch attributes for a model instance and persist it into the data source.
[**configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace**](ConfigurationServiceRequestApi.md#configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace) | **POST** /ConfigurationServiceRequests/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid**](ConfigurationServiceRequestApi.md#configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid) | **PUT** /ConfigurationServiceRequests/{id} | Replace attributes for a model instance and persist it into the data source.
[**configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate**](ConfigurationServiceRequestApi.md#configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate) | **POST** /ConfigurationServiceRequests/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests**](ConfigurationServiceRequestApi.md#configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests) | **PUT** /ConfigurationServiceRequests | Replace an existing model instance or insert a new one into the data source.
[**configurationServiceRequestReport**](ConfigurationServiceRequestApi.md#configurationServiceRequestReport) | **GET** /ConfigurationServiceRequests/{id}/report | 
[**configurationServiceRequestUpdateAll**](ConfigurationServiceRequestApi.md#configurationServiceRequestUpdateAll) | **POST** /ConfigurationServiceRequests/update | Update instances of the model matched by {{where}} from the data source.
[**configurationServiceRequestUpsertWithWhere**](ConfigurationServiceRequestApi.md#configurationServiceRequestUpsertWithWhere) | **POST** /ConfigurationServiceRequests/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **configurationServiceRequestAssign**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestAssign($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->configurationServiceRequestAssign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestComplete**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestComplete($id, $data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | 
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | 

try {
    $result = $api_instance->configurationServiceRequestComplete($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestConfigure**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestConfigure($id, $data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | 
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | 

try {
    $result = $api_instance->configurationServiceRequestConfigure($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestConfigure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 configurationServiceRequestCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->configurationServiceRequestCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestCount: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestCreate**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream**
> \SplFileObject configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestCreateChangeStreamGetConfigurationServiceRequestsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream**
> \SplFileObject configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestCreateChangeStreamPostConfigurationServiceRequestsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestDeleteById**
> object configurationServiceRequestDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->configurationServiceRequestDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestExistsGetConfigurationServiceRequestsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 configurationServiceRequestExistsGetConfigurationServiceRequestsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->configurationServiceRequestExistsGetConfigurationServiceRequestsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestExistsGetConfigurationServiceRequestsidExists: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestExistsHeadConfigurationServiceRequestsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 configurationServiceRequestExistsHeadConfigurationServiceRequestsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->configurationServiceRequestExistsHeadConfigurationServiceRequestsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestExistsHeadConfigurationServiceRequestsid: ', $e->getMessage(), PHP_EOL;
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

# **configurationServiceRequestFind**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest[] configurationServiceRequestFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->configurationServiceRequestFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest[]**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestFindById**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->configurationServiceRequestFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestFindOne**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->configurationServiceRequestFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPrototypeGetAssignee**
> \Yoast\MyYoastApiClient\Model\Customer configurationServiceRequestPrototypeGetAssignee($id, $refresh)

Fetches belongsTo relation assignee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | ConfigurationServiceRequest id
$refresh = true; // bool | 

try {
    $result = $api_instance->configurationServiceRequestPrototypeGetAssignee($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPrototypeGetAssignee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ConfigurationServiceRequest id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPrototypeGetCustomer**
> \Yoast\MyYoastApiClient\Model\Customer configurationServiceRequestPrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | ConfigurationServiceRequest id
$refresh = true; // bool | 

try {
    $result = $api_instance->configurationServiceRequestPrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ConfigurationServiceRequest id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order configurationServiceRequestPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | ConfigurationServiceRequest id
$refresh = true; // bool | 

try {
    $result = $api_instance->configurationServiceRequestPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ConfigurationServiceRequest id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPrototypeGetSite**
> \Yoast\MyYoastApiClient\Model\Site configurationServiceRequestPrototypeGetSite($id, $refresh)

Fetches belongsTo relation site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | ConfigurationServiceRequest id
$refresh = true; // bool | 

try {
    $result = $api_instance->configurationServiceRequestPrototypeGetSite($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPrototypeGetSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ConfigurationServiceRequest id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | ConfigurationServiceRequest id
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | An object of model property name/value pairs

try {
    $result = $api_instance->configurationServiceRequestPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ConfigurationServiceRequest id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestReplaceByIdPostConfigurationServiceRequestsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestReplaceByIdPutConfigurationServiceRequestsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestReplaceOrCreatePostConfigurationServiceRequestsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | Model instance data

try {
    $result = $api_instance->configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestReplaceOrCreatePutConfigurationServiceRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestReport**
> \Yoast\MyYoastApiClient\Model\InlineResponse2007 configurationServiceRequestReport($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->configurationServiceRequestReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 configurationServiceRequestUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | An object of model property name/value pairs

try {
    $result = $api_instance->configurationServiceRequestUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationServiceRequestUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest configurationServiceRequestUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\ConfigurationServiceRequestApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest(); // \Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest | An object of model property name/value pairs

try {
    $result = $api_instance->configurationServiceRequestUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationServiceRequestApi->configurationServiceRequestUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ConfigurationServiceRequest**](../Model/ConfigurationServiceRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

