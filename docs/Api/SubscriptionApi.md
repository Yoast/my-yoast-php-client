# Yoast\MyYoastApiClient\SubscriptionApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionCount**](SubscriptionApi.md#subscriptionCount) | **GET** /Subscriptions/count | Count instances of the model matched by where from the data source.
[**subscriptionCreate**](SubscriptionApi.md#subscriptionCreate) | **POST** /Subscriptions | Create a new instance of the model and persist it into the data source.
[**subscriptionCreateChangeStreamGetSubscriptionsChangeStream**](SubscriptionApi.md#subscriptionCreateChangeStreamGetSubscriptionsChangeStream) | **GET** /Subscriptions/change-stream | Create a change stream.
[**subscriptionCreateChangeStreamPostSubscriptionsChangeStream**](SubscriptionApi.md#subscriptionCreateChangeStreamPostSubscriptionsChangeStream) | **POST** /Subscriptions/change-stream | Create a change stream.
[**subscriptionDeleteById**](SubscriptionApi.md#subscriptionDeleteById) | **DELETE** /Subscriptions/{id} | Delete a model instance by {{id}} from the data source.
[**subscriptionExistsGetSubscriptionsidExists**](SubscriptionApi.md#subscriptionExistsGetSubscriptionsidExists) | **GET** /Subscriptions/{id}/exists | Check whether a model instance exists in the data source.
[**subscriptionExistsHeadSubscriptionsid**](SubscriptionApi.md#subscriptionExistsHeadSubscriptionsid) | **HEAD** /Subscriptions/{id} | Check whether a model instance exists in the data source.
[**subscriptionFind**](SubscriptionApi.md#subscriptionFind) | **GET** /Subscriptions | Find all instances of the model matched by filter from the data source.
[**subscriptionFindById**](SubscriptionApi.md#subscriptionFindById) | **GET** /Subscriptions/{id} | Find a model instance by {{id}} from the data source.
[**subscriptionFindOne**](SubscriptionApi.md#subscriptionFindOne) | **GET** /Subscriptions/findOne | Find first instance of the model matched by filter from the data source.
[**subscriptionPatchOrCreate**](SubscriptionApi.md#subscriptionPatchOrCreate) | **PATCH** /Subscriptions | Patch an existing model instance or insert a new one into the data source.
[**subscriptionPrototypeCountOrders**](SubscriptionApi.md#subscriptionPrototypeCountOrders) | **GET** /Subscriptions/{id}/orders/count | Counts orders of Subscription.
[**subscriptionPrototypeCountSites**](SubscriptionApi.md#subscriptionPrototypeCountSites) | **GET** /Subscriptions/{id}/sites/count | Counts sites of Subscription.
[**subscriptionPrototypeCreateOrders**](SubscriptionApi.md#subscriptionPrototypeCreateOrders) | **POST** /Subscriptions/{id}/orders | Creates a new instance in orders of this model.
[**subscriptionPrototypeCreateProduct**](SubscriptionApi.md#subscriptionPrototypeCreateProduct) | **POST** /Subscriptions/{id}/product | Creates a new instance in product of this model.
[**subscriptionPrototypeCreateSites**](SubscriptionApi.md#subscriptionPrototypeCreateSites) | **POST** /Subscriptions/{id}/sites | Creates a new instance in sites of this model.
[**subscriptionPrototypeCreateSubscriber**](SubscriptionApi.md#subscriptionPrototypeCreateSubscriber) | **POST** /Subscriptions/{id}/subscriber | Creates a new instance in subscriber of this model.
[**subscriptionPrototypeDeleteOrders**](SubscriptionApi.md#subscriptionPrototypeDeleteOrders) | **DELETE** /Subscriptions/{id}/orders | Deletes all orders of this model.
[**subscriptionPrototypeDeleteSites**](SubscriptionApi.md#subscriptionPrototypeDeleteSites) | **DELETE** /Subscriptions/{id}/sites | Deletes all sites of this model.
[**subscriptionPrototypeDestroyByIdOrders**](SubscriptionApi.md#subscriptionPrototypeDestroyByIdOrders) | **DELETE** /Subscriptions/{id}/orders/{fk} | Delete a related item by id for orders.
[**subscriptionPrototypeDestroyByIdSites**](SubscriptionApi.md#subscriptionPrototypeDestroyByIdSites) | **DELETE** /Subscriptions/{id}/sites/{fk} | Delete a related item by id for sites.
[**subscriptionPrototypeDestroyProduct**](SubscriptionApi.md#subscriptionPrototypeDestroyProduct) | **DELETE** /Subscriptions/{id}/product | Deletes product of this model.
[**subscriptionPrototypeDestroySubscriber**](SubscriptionApi.md#subscriptionPrototypeDestroySubscriber) | **DELETE** /Subscriptions/{id}/subscriber | Deletes subscriber of this model.
[**subscriptionPrototypeExistsOrders**](SubscriptionApi.md#subscriptionPrototypeExistsOrders) | **HEAD** /Subscriptions/{id}/orders/rel/{fk} | Check the existence of orders relation to an item by id.
[**subscriptionPrototypeExistsSites**](SubscriptionApi.md#subscriptionPrototypeExistsSites) | **HEAD** /Subscriptions/{id}/sites/rel/{fk} | Check the existence of sites relation to an item by id.
[**subscriptionPrototypeFindByIdOrders**](SubscriptionApi.md#subscriptionPrototypeFindByIdOrders) | **GET** /Subscriptions/{id}/orders/{fk} | Find a related item by id for orders.
[**subscriptionPrototypeFindByIdSites**](SubscriptionApi.md#subscriptionPrototypeFindByIdSites) | **GET** /Subscriptions/{id}/sites/{fk} | Find a related item by id for sites.
[**subscriptionPrototypeGetOrders**](SubscriptionApi.md#subscriptionPrototypeGetOrders) | **GET** /Subscriptions/{id}/orders | Queries orders of Subscription.
[**subscriptionPrototypeGetProduct**](SubscriptionApi.md#subscriptionPrototypeGetProduct) | **GET** /Subscriptions/{id}/product | Fetches hasOne relation product.
[**subscriptionPrototypeGetSites**](SubscriptionApi.md#subscriptionPrototypeGetSites) | **GET** /Subscriptions/{id}/sites | Queries sites of Subscription.
[**subscriptionPrototypeGetSubscriber**](SubscriptionApi.md#subscriptionPrototypeGetSubscriber) | **GET** /Subscriptions/{id}/subscriber | Fetches hasOne relation subscriber.
[**subscriptionPrototypeLinkOrders**](SubscriptionApi.md#subscriptionPrototypeLinkOrders) | **PUT** /Subscriptions/{id}/orders/rel/{fk} | Add a related item by id for orders.
[**subscriptionPrototypeLinkSites**](SubscriptionApi.md#subscriptionPrototypeLinkSites) | **PUT** /Subscriptions/{id}/sites/rel/{fk} | Add a related item by id for sites.
[**subscriptionPrototypePatchAttributes**](SubscriptionApi.md#subscriptionPrototypePatchAttributes) | **PATCH** /Subscriptions/{id} | Patch attributes for a model instance and persist it into the data source.
[**subscriptionPrototypeUnlinkOrders**](SubscriptionApi.md#subscriptionPrototypeUnlinkOrders) | **DELETE** /Subscriptions/{id}/orders/rel/{fk} | Remove the orders relation to an item by id.
[**subscriptionPrototypeUnlinkSites**](SubscriptionApi.md#subscriptionPrototypeUnlinkSites) | **DELETE** /Subscriptions/{id}/sites/rel/{fk} | Remove the sites relation to an item by id.
[**subscriptionPrototypeUpdateByIdOrders**](SubscriptionApi.md#subscriptionPrototypeUpdateByIdOrders) | **PUT** /Subscriptions/{id}/orders/{fk} | Update a related item by id for orders.
[**subscriptionPrototypeUpdateByIdSites**](SubscriptionApi.md#subscriptionPrototypeUpdateByIdSites) | **PUT** /Subscriptions/{id}/sites/{fk} | Update a related item by id for sites.
[**subscriptionPrototypeUpdateProduct**](SubscriptionApi.md#subscriptionPrototypeUpdateProduct) | **PUT** /Subscriptions/{id}/product | Update product of this model.
[**subscriptionPrototypeUpdateSubscriber**](SubscriptionApi.md#subscriptionPrototypeUpdateSubscriber) | **PUT** /Subscriptions/{id}/subscriber | Update subscriber of this model.
[**subscriptionReplaceByIdPostSubscriptionsidReplace**](SubscriptionApi.md#subscriptionReplaceByIdPostSubscriptionsidReplace) | **POST** /Subscriptions/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**subscriptionReplaceByIdPutSubscriptionsid**](SubscriptionApi.md#subscriptionReplaceByIdPutSubscriptionsid) | **PUT** /Subscriptions/{id} | Replace attributes for a model instance and persist it into the data source.
[**subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate**](SubscriptionApi.md#subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate) | **POST** /Subscriptions/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**subscriptionReplaceOrCreatePutSubscriptions**](SubscriptionApi.md#subscriptionReplaceOrCreatePutSubscriptions) | **PUT** /Subscriptions | Replace an existing model instance or insert a new one into the data source.
[**subscriptionUpdateAll**](SubscriptionApi.md#subscriptionUpdateAll) | **POST** /Subscriptions/update | Update instances of the model matched by {{where}} from the data source.
[**subscriptionUpsertWithWhere**](SubscriptionApi.md#subscriptionUpsertWithWhere) | **POST** /Subscriptions/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **subscriptionCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 subscriptionCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->subscriptionCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionCount: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionCreate**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionCreateChangeStreamGetSubscriptionsChangeStream**
> \SplFileObject subscriptionCreateChangeStreamGetSubscriptionsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->subscriptionCreateChangeStreamGetSubscriptionsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionCreateChangeStreamGetSubscriptionsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionCreateChangeStreamPostSubscriptionsChangeStream**
> \SplFileObject subscriptionCreateChangeStreamPostSubscriptionsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->subscriptionCreateChangeStreamPostSubscriptionsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionCreateChangeStreamPostSubscriptionsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionDeleteById**
> object subscriptionDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->subscriptionDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionExistsGetSubscriptionsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 subscriptionExistsGetSubscriptionsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->subscriptionExistsGetSubscriptionsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionExistsGetSubscriptionsidExists: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionExistsHeadSubscriptionsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 subscriptionExistsHeadSubscriptionsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->subscriptionExistsHeadSubscriptionsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionExistsHeadSubscriptionsid: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionFind**
> \Yoast\MyYoastApiClient\Model\Subscription[] subscriptionFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->subscriptionFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionFindById**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->subscriptionFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionFindOne**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->subscriptionFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCountOrders**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 subscriptionPrototypeCountOrders($id, $where)

Counts orders of Subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->subscriptionPrototypeCountOrders($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCountOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCountSites**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 subscriptionPrototypeCountSites($id, $where)

Counts sites of Subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->subscriptionPrototypeCountSites($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCountSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCreateOrders**
> \Yoast\MyYoastApiClient\Model\Order subscriptionPrototypeCreateOrders($id, $data)

Creates a new instance in orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->subscriptionPrototypeCreateOrders($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCreateOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCreateProduct**
> \Yoast\MyYoastApiClient\Model\Product subscriptionPrototypeCreateProduct($id, $data)

Creates a new instance in product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->subscriptionPrototypeCreateProduct($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCreateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/\Yoast\MyYoastApiClient\Model\Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCreateSites**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions subscriptionPrototypeCreateSites($id, $data)

Creates a new instance in sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\SiteSubscriptions(); // \Yoast\MyYoastApiClient\Model\SiteSubscriptions | 

try {
    $result = $api_instance->subscriptionPrototypeCreateSites($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCreateSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/\Yoast\MyYoastApiClient\Model\SiteSubscriptions.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeCreateSubscriber**
> \Yoast\MyYoastApiClient\Model\MyYoastUser subscriptionPrototypeCreateSubscriber($id, $data)

Creates a new instance in subscriber of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | 

try {
    $result = $api_instance->subscriptionPrototypeCreateSubscriber($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeCreateSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDeleteOrders**
> subscriptionPrototypeDeleteOrders($id)

Deletes all orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDeleteOrders($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDeleteOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDeleteSites**
> subscriptionPrototypeDeleteSites($id)

Deletes all sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDeleteSites($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDeleteSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDestroyByIdOrders**
> subscriptionPrototypeDestroyByIdOrders($fk, $id)

Delete a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDestroyByIdOrders($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDestroyByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDestroyByIdSites**
> subscriptionPrototypeDestroyByIdSites($fk, $id)

Delete a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDestroyByIdSites($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDestroyByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDestroyProduct**
> subscriptionPrototypeDestroyProduct($id)

Deletes product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDestroyProduct($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDestroyProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeDestroySubscriber**
> subscriptionPrototypeDestroySubscriber($id)

Deletes subscriber of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeDestroySubscriber($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeDestroySubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeExistsOrders**
> bool subscriptionPrototypeExistsOrders($fk, $id)

Check the existence of orders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id

try {
    $result = $api_instance->subscriptionPrototypeExistsOrders($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeExistsOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeExistsSites**
> bool subscriptionPrototypeExistsSites($fk, $id)

Check the existence of sites relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id

try {
    $result = $api_instance->subscriptionPrototypeExistsSites($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeExistsSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeFindByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order subscriptionPrototypeFindByIdOrders($fk, $id)

Find a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id

try {
    $result = $api_instance->subscriptionPrototypeFindByIdOrders($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeFindByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeFindByIdSites**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions subscriptionPrototypeFindByIdSites($fk, $id)

Find a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id

try {
    $result = $api_instance->subscriptionPrototypeFindByIdSites($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeFindByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeGetOrders**
> \Yoast\MyYoastApiClient\Model\Order[] subscriptionPrototypeGetOrders($id, $filter)

Queries orders of Subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->subscriptionPrototypeGetOrders($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeGetOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeGetProduct**
> \Yoast\MyYoastApiClient\Model\Product subscriptionPrototypeGetProduct($id, $refresh)

Fetches hasOne relation product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$refresh = true; // bool | 

try {
    $result = $api_instance->subscriptionPrototypeGetProduct($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeGetProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeGetSites**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions[] subscriptionPrototypeGetSites($id, $filter)

Queries sites of Subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->subscriptionPrototypeGetSites($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeGetSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions[]**](../Model/SiteSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeGetSubscriber**
> \Yoast\MyYoastApiClient\Model\MyYoastUser subscriptionPrototypeGetSubscriber($id, $refresh)

Fetches hasOne relation subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$refresh = true; // bool | 

try {
    $result = $api_instance->subscriptionPrototypeGetSubscriber($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeGetSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeLinkOrders**
> \Yoast\MyYoastApiClient\Model\SubscriptionOrders subscriptionPrototypeLinkOrders($fk, $id, $data)

Add a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\SubscriptionOrders(); // \Yoast\MyYoastApiClient\Model\SubscriptionOrders | 

try {
    $result = $api_instance->subscriptionPrototypeLinkOrders($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeLinkOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/\Yoast\MyYoastApiClient\Model\SubscriptionOrders.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SubscriptionOrders**](../Model/SubscriptionOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeLinkSites**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions subscriptionPrototypeLinkSites($fk, $id, $data)

Add a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\SiteSubscriptions(); // \Yoast\MyYoastApiClient\Model\SiteSubscriptions | 

try {
    $result = $api_instance->subscriptionPrototypeLinkSites($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeLinkSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/\Yoast\MyYoastApiClient\Model\SiteSubscriptions.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | An object of model property name/value pairs

try {
    $result = $api_instance->subscriptionPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUnlinkOrders**
> subscriptionPrototypeUnlinkOrders($fk, $id)

Remove the orders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeUnlinkOrders($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUnlinkOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUnlinkSites**
> subscriptionPrototypeUnlinkSites($fk, $id)

Remove the sites relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id

try {
    $api_instance->subscriptionPrototypeUnlinkSites($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUnlinkSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUpdateByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order subscriptionPrototypeUpdateByIdOrders($fk, $id, $data)

Update a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->subscriptionPrototypeUpdateByIdOrders($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUpdateByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUpdateByIdSites**
> \Yoast\MyYoastApiClient\Model\SiteSubscriptions subscriptionPrototypeUpdateByIdSites($fk, $id, $data)

Update a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\SiteSubscriptions(); // \Yoast\MyYoastApiClient\Model\SiteSubscriptions | 

try {
    $result = $api_instance->subscriptionPrototypeUpdateByIdSites($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUpdateByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/\Yoast\MyYoastApiClient\Model\SiteSubscriptions.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\SiteSubscriptions**](../Model/SiteSubscriptions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUpdateProduct**
> \Yoast\MyYoastApiClient\Model\Product subscriptionPrototypeUpdateProduct($id, $data)

Update product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->subscriptionPrototypeUpdateProduct($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/\Yoast\MyYoastApiClient\Model\Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPrototypeUpdateSubscriber**
> \Yoast\MyYoastApiClient\Model\MyYoastUser subscriptionPrototypeUpdateSubscriber($id, $data)

Update subscriber of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Subscription id
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | 

try {
    $result = $api_instance->subscriptionPrototypeUpdateSubscriber($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionPrototypeUpdateSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Subscription id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionReplaceByIdPostSubscriptionsidReplace**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionReplaceByIdPostSubscriptionsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionReplaceByIdPostSubscriptionsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionReplaceByIdPostSubscriptionsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionReplaceByIdPutSubscriptionsid**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionReplaceByIdPutSubscriptionsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionReplaceByIdPutSubscriptionsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionReplaceByIdPutSubscriptionsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionReplaceOrCreatePostSubscriptionsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionReplaceOrCreatePutSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionReplaceOrCreatePutSubscriptions($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | Model instance data

try {
    $result = $api_instance->subscriptionReplaceOrCreatePutSubscriptions($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionReplaceOrCreatePutSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 subscriptionUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | An object of model property name/value pairs

try {
    $result = $api_instance->subscriptionUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Subscription subscriptionUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\SubscriptionApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | An object of model property name/value pairs

try {
    $result = $api_instance->subscriptionUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->subscriptionUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

