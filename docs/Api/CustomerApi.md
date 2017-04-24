# Yoast\MyYoastApiClient\CustomerApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerChangePassword**](CustomerApi.md#customerChangePassword) | **POST** /Customers/change-password | Change a user&#39;s password.
[**customerConfirm**](CustomerApi.md#customerConfirm) | **GET** /Customers/confirm | Confirm a user registration with email verification token.
[**customerCount**](CustomerApi.md#customerCount) | **GET** /Customers/count | Count instances of the model matched by where from the data source.
[**customerCreate**](CustomerApi.md#customerCreate) | **POST** /Customers | Create a new instance of the model and persist it into the data source.
[**customerCreateChangeStreamGetCustomersChangeStream**](CustomerApi.md#customerCreateChangeStreamGetCustomersChangeStream) | **GET** /Customers/change-stream | Create a change stream.
[**customerCreateChangeStreamPostCustomersChangeStream**](CustomerApi.md#customerCreateChangeStreamPostCustomersChangeStream) | **POST** /Customers/change-stream | Create a change stream.
[**customerDeleteById**](CustomerApi.md#customerDeleteById) | **DELETE** /Customers/{id} | Delete a model instance by {{id}} from the data source.
[**customerExistsGetCustomersidExists**](CustomerApi.md#customerExistsGetCustomersidExists) | **GET** /Customers/{id}/exists | Check whether a model instance exists in the data source.
[**customerExistsHeadCustomersid**](CustomerApi.md#customerExistsHeadCustomersid) | **HEAD** /Customers/{id} | Check whether a model instance exists in the data source.
[**customerFind**](CustomerApi.md#customerFind) | **GET** /Customers | Find all instances of the model matched by filter from the data source.
[**customerFindById**](CustomerApi.md#customerFindById) | **GET** /Customers/{id} | Find a model instance by {{id}} from the data source.
[**customerFindOne**](CustomerApi.md#customerFindOne) | **GET** /Customers/findOne | Find first instance of the model matched by filter from the data source.
[**customerFromWooCommerce**](CustomerApi.md#customerFromWooCommerce) | **PUT** /Customers/fromWooCommerce | 
[**customerLogin**](CustomerApi.md#customerLogin) | **POST** /Customers/login | Login a user with username/email and password.
[**customerLogout**](CustomerApi.md#customerLogout) | **POST** /Customers/logout | Logout a user with access token.
[**customerPatchOrCreate**](CustomerApi.md#customerPatchOrCreate) | **PATCH** /Customers | Patch an existing model instance or insert a new one into the data source.
[**customerProfile**](CustomerApi.md#customerProfile) | **GET** /Customers/{id}/profile | 
[**customerPrototypeCountAccessTokens**](CustomerApi.md#customerPrototypeCountAccessTokens) | **GET** /Customers/{id}/accessTokens/count | Counts accessTokens of Customer.
[**customerPrototypeCountCredentials**](CustomerApi.md#customerPrototypeCountCredentials) | **GET** /Customers/{id}/credentials/count | Counts credentials of Customer.
[**customerPrototypeCountIdentities**](CustomerApi.md#customerPrototypeCountIdentities) | **GET** /Customers/{id}/identities/count | Counts identities of Customer.
[**customerPrototypeCountOrders**](CustomerApi.md#customerPrototypeCountOrders) | **GET** /Customers/{id}/orders/count | Counts orders of Customer.
[**customerPrototypeCountSites**](CustomerApi.md#customerPrototypeCountSites) | **GET** /Customers/{id}/sites/count | Counts sites of Customer.
[**customerPrototypeCountSubscriptions**](CustomerApi.md#customerPrototypeCountSubscriptions) | **GET** /Customers/{id}/subscriptions/count | Counts subscriptions of Customer.
[**customerPrototypeCreateAccessTokens**](CustomerApi.md#customerPrototypeCreateAccessTokens) | **POST** /Customers/{id}/accessTokens | Creates a new instance in accessTokens of this model.
[**customerPrototypeCreateCredentials**](CustomerApi.md#customerPrototypeCreateCredentials) | **POST** /Customers/{id}/credentials | Creates a new instance in credentials of this model.
[**customerPrototypeCreateIdentities**](CustomerApi.md#customerPrototypeCreateIdentities) | **POST** /Customers/{id}/identities | Creates a new instance in identities of this model.
[**customerPrototypeCreateOrders**](CustomerApi.md#customerPrototypeCreateOrders) | **POST** /Customers/{id}/orders | Creates a new instance in orders of this model.
[**customerPrototypeCreateSites**](CustomerApi.md#customerPrototypeCreateSites) | **POST** /Customers/{id}/sites | Creates a new instance in sites of this model.
[**customerPrototypeCreateSubscriptions**](CustomerApi.md#customerPrototypeCreateSubscriptions) | **POST** /Customers/{id}/subscriptions | Creates a new instance in subscriptions of this model.
[**customerPrototypeDeleteAccessTokens**](CustomerApi.md#customerPrototypeDeleteAccessTokens) | **DELETE** /Customers/{id}/accessTokens | Deletes all accessTokens of this model.
[**customerPrototypeDeleteCredentials**](CustomerApi.md#customerPrototypeDeleteCredentials) | **DELETE** /Customers/{id}/credentials | Deletes all credentials of this model.
[**customerPrototypeDeleteIdentities**](CustomerApi.md#customerPrototypeDeleteIdentities) | **DELETE** /Customers/{id}/identities | Deletes all identities of this model.
[**customerPrototypeDeleteOrders**](CustomerApi.md#customerPrototypeDeleteOrders) | **DELETE** /Customers/{id}/orders | Deletes all orders of this model.
[**customerPrototypeDeleteSites**](CustomerApi.md#customerPrototypeDeleteSites) | **DELETE** /Customers/{id}/sites | Deletes all sites of this model.
[**customerPrototypeDeleteSubscriptions**](CustomerApi.md#customerPrototypeDeleteSubscriptions) | **DELETE** /Customers/{id}/subscriptions | Deletes all subscriptions of this model.
[**customerPrototypeDestroyByIdAccessTokens**](CustomerApi.md#customerPrototypeDestroyByIdAccessTokens) | **DELETE** /Customers/{id}/accessTokens/{fk} | Delete a related item by id for accessTokens.
[**customerPrototypeDestroyByIdCredentials**](CustomerApi.md#customerPrototypeDestroyByIdCredentials) | **DELETE** /Customers/{id}/credentials/{fk} | Delete a related item by id for credentials.
[**customerPrototypeDestroyByIdIdentities**](CustomerApi.md#customerPrototypeDestroyByIdIdentities) | **DELETE** /Customers/{id}/identities/{fk} | Delete a related item by id for identities.
[**customerPrototypeDestroyByIdOrders**](CustomerApi.md#customerPrototypeDestroyByIdOrders) | **DELETE** /Customers/{id}/orders/{fk} | Delete a related item by id for orders.
[**customerPrototypeDestroyByIdSites**](CustomerApi.md#customerPrototypeDestroyByIdSites) | **DELETE** /Customers/{id}/sites/{fk} | Delete a related item by id for sites.
[**customerPrototypeDestroyByIdSubscriptions**](CustomerApi.md#customerPrototypeDestroyByIdSubscriptions) | **DELETE** /Customers/{id}/subscriptions/{fk} | Delete a related item by id for subscriptions.
[**customerPrototypeFindByIdAccessTokens**](CustomerApi.md#customerPrototypeFindByIdAccessTokens) | **GET** /Customers/{id}/accessTokens/{fk} | Find a related item by id for accessTokens.
[**customerPrototypeFindByIdCredentials**](CustomerApi.md#customerPrototypeFindByIdCredentials) | **GET** /Customers/{id}/credentials/{fk} | Find a related item by id for credentials.
[**customerPrototypeFindByIdIdentities**](CustomerApi.md#customerPrototypeFindByIdIdentities) | **GET** /Customers/{id}/identities/{fk} | Find a related item by id for identities.
[**customerPrototypeFindByIdOrders**](CustomerApi.md#customerPrototypeFindByIdOrders) | **GET** /Customers/{id}/orders/{fk} | Find a related item by id for orders.
[**customerPrototypeFindByIdSites**](CustomerApi.md#customerPrototypeFindByIdSites) | **GET** /Customers/{id}/sites/{fk} | Find a related item by id for sites.
[**customerPrototypeFindByIdSubscriptions**](CustomerApi.md#customerPrototypeFindByIdSubscriptions) | **GET** /Customers/{id}/subscriptions/{fk} | Find a related item by id for subscriptions.
[**customerPrototypeGetAccessTokens**](CustomerApi.md#customerPrototypeGetAccessTokens) | **GET** /Customers/{id}/accessTokens | Queries accessTokens of Customer.
[**customerPrototypeGetCredentials**](CustomerApi.md#customerPrototypeGetCredentials) | **GET** /Customers/{id}/credentials | Queries credentials of Customer.
[**customerPrototypeGetIdentities**](CustomerApi.md#customerPrototypeGetIdentities) | **GET** /Customers/{id}/identities | Queries identities of Customer.
[**customerPrototypeGetOrders**](CustomerApi.md#customerPrototypeGetOrders) | **GET** /Customers/{id}/orders | Queries orders of Customer.
[**customerPrototypeGetSites**](CustomerApi.md#customerPrototypeGetSites) | **GET** /Customers/{id}/sites | Queries sites of Customer.
[**customerPrototypeGetSubscriptions**](CustomerApi.md#customerPrototypeGetSubscriptions) | **GET** /Customers/{id}/subscriptions | Queries subscriptions of Customer.
[**customerPrototypePatchAttributes**](CustomerApi.md#customerPrototypePatchAttributes) | **PATCH** /Customers/{id} | Patch attributes for a model instance and persist it into the data source.
[**customerPrototypeUpdateByIdAccessTokens**](CustomerApi.md#customerPrototypeUpdateByIdAccessTokens) | **PUT** /Customers/{id}/accessTokens/{fk} | Update a related item by id for accessTokens.
[**customerPrototypeUpdateByIdCredentials**](CustomerApi.md#customerPrototypeUpdateByIdCredentials) | **PUT** /Customers/{id}/credentials/{fk} | Update a related item by id for credentials.
[**customerPrototypeUpdateByIdIdentities**](CustomerApi.md#customerPrototypeUpdateByIdIdentities) | **PUT** /Customers/{id}/identities/{fk} | Update a related item by id for identities.
[**customerPrototypeUpdateByIdOrders**](CustomerApi.md#customerPrototypeUpdateByIdOrders) | **PUT** /Customers/{id}/orders/{fk} | Update a related item by id for orders.
[**customerPrototypeUpdateByIdSites**](CustomerApi.md#customerPrototypeUpdateByIdSites) | **PUT** /Customers/{id}/sites/{fk} | Update a related item by id for sites.
[**customerPrototypeUpdateByIdSubscriptions**](CustomerApi.md#customerPrototypeUpdateByIdSubscriptions) | **PUT** /Customers/{id}/subscriptions/{fk} | Update a related item by id for subscriptions.
[**customerReplaceByIdPostCustomersidReplace**](CustomerApi.md#customerReplaceByIdPostCustomersidReplace) | **POST** /Customers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**customerReplaceByIdPutCustomersid**](CustomerApi.md#customerReplaceByIdPutCustomersid) | **PUT** /Customers/{id} | Replace attributes for a model instance and persist it into the data source.
[**customerReplaceOrCreatePostCustomersReplaceOrCreate**](CustomerApi.md#customerReplaceOrCreatePostCustomersReplaceOrCreate) | **POST** /Customers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**customerReplaceOrCreatePutCustomers**](CustomerApi.md#customerReplaceOrCreatePutCustomers) | **PUT** /Customers | Replace an existing model instance or insert a new one into the data source.
[**customerResetPassword**](CustomerApi.md#customerResetPassword) | **POST** /Customers/reset | Reset password for a user with email.
[**customerUpdateAll**](CustomerApi.md#customerUpdateAll) | **POST** /Customers/update | Update instances of the model matched by {{where}} from the data source.
[**customerUpsertWithWhere**](CustomerApi.md#customerUpsertWithWhere) | **POST** /Customers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **customerChangePassword**
> customerChangePassword($old_password, $new_password)

Change a user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$old_password = "old_password_example"; // string | 
$new_password = "new_password_example"; // string | 

try {
    $api_instance->customerChangePassword($old_password, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerChangePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_password** | **string**|  |
 **new_password** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerConfirm**
> customerConfirm($uid, $token, $redirect)

Confirm a user registration with email verification token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$uid = "uid_example"; // string | 
$token = "token_example"; // string | 
$redirect = "redirect_example"; // string | 

try {
    $api_instance->customerConfirm($uid, $token, $redirect);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **token** | **string**|  |
 **redirect** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCount: ', $e->getMessage(), PHP_EOL;
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

# **customerCreate**
> \Yoast\MyYoastApiClient\Model\Customer customerCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreateChangeStreamGetCustomersChangeStream**
> \SplFileObject customerCreateChangeStreamGetCustomersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerCreateChangeStreamGetCustomersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateChangeStreamGetCustomersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerCreateChangeStreamPostCustomersChangeStream**
> \SplFileObject customerCreateChangeStreamPostCustomersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerCreateChangeStreamPostCustomersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateChangeStreamPostCustomersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerDeleteById**
> object customerDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **customerExistsGetCustomersidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 customerExistsGetCustomersidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerExistsGetCustomersidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerExistsGetCustomersidExists: ', $e->getMessage(), PHP_EOL;
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

# **customerExistsHeadCustomersid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 customerExistsHeadCustomersid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerExistsHeadCustomersid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerExistsHeadCustomersid: ', $e->getMessage(), PHP_EOL;
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

# **customerFind**
> \Yoast\MyYoastApiClient\Model\Customer[] customerFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer[]**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerFindById**
> \Yoast\MyYoastApiClient\Model\Customer customerFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerFindOne**
> \Yoast\MyYoastApiClient\Model\Customer customerFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customerFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Customer customerFromWooCommerce($customer_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$customer_data = "customer_data_example"; // string | 

try {
    $result = $api_instance->customerFromWooCommerce($customer_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFromWooCommerce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLogin**
> object customerLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$credentials = NULL; // object | 
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->customerLogin($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | **object**|  |
 **include** | **string**| Related objects to include in the response. See the description of return value for more details. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLogout**
> customerLogout()

Logout a user with access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();

try {
    $api_instance->customerLogout();
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Customer customerPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerProfile**
> \Yoast\MyYoastApiClient\Model\InlineResponse2003 customerProfile($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = 56; // int | 

try {
    $result = $api_instance->customerProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountAccessTokens**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountAccessTokens($id, $where)

Counts accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountAccessTokens($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountCredentials**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountCredentials($id, $where)

Counts credentials of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountCredentials($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountIdentities**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountIdentities($id, $where)

Counts identities of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountIdentities($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountOrders**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountOrders($id, $where)

Counts orders of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountOrders($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountSites**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountSites($id, $where)

Counts sites of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountSites($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountSubscriptions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 customerPrototypeCountSubscriptions($id, $where)

Counts subscriptions of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountSubscriptions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken customerPrototypeCreateAccessTokens($id, $data)

Creates a new instance in accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\AccessToken(); // \Yoast\MyYoastApiClient\Model\AccessToken | 

try {
    $result = $api_instance->customerPrototypeCreateAccessTokens($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/\Yoast\MyYoastApiClient\Model\AccessToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential customerPrototypeCreateCredentials($id, $data)

Creates a new instance in credentials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\UserCredential(); // \Yoast\MyYoastApiClient\Model\UserCredential | 

try {
    $result = $api_instance->customerPrototypeCreateCredentials($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/\Yoast\MyYoastApiClient\Model\UserCredential.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity customerPrototypeCreateIdentities($id, $data)

Creates a new instance in identities of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\UserIdentity(); // \Yoast\MyYoastApiClient\Model\UserIdentity | 

try {
    $result = $api_instance->customerPrototypeCreateIdentities($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/\Yoast\MyYoastApiClient\Model\UserIdentity.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateOrders**
> \Yoast\MyYoastApiClient\Model\Order customerPrototypeCreateOrders($id, $data)

Creates a new instance in orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->customerPrototypeCreateOrders($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateSites**
> \Yoast\MyYoastApiClient\Model\Site customerPrototypeCreateSites($id, $data)

Creates a new instance in sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | 

try {
    $result = $api_instance->customerPrototypeCreateSites($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription customerPrototypeCreateSubscriptions($id, $data)

Creates a new instance in subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->customerPrototypeCreateSubscriptions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteAccessTokens**
> customerPrototypeDeleteAccessTokens($id)

Deletes all accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteAccessTokens($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteCredentials**
> customerPrototypeDeleteCredentials($id)

Deletes all credentials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteCredentials($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteIdentities**
> customerPrototypeDeleteIdentities($id)

Deletes all identities of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteIdentities($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteOrders**
> customerPrototypeDeleteOrders($id)

Deletes all orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteOrders($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteSites**
> customerPrototypeDeleteSites($id)

Deletes all sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteSites($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteSubscriptions**
> customerPrototypeDeleteSubscriptions($id)

Deletes all subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdAccessTokens**
> customerPrototypeDestroyByIdAccessTokens($id, $fk)

Delete a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $api_instance->customerPrototypeDestroyByIdAccessTokens($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdCredentials**
> customerPrototypeDestroyByIdCredentials($id, $fk)

Delete a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for credentials

try {
    $api_instance->customerPrototypeDestroyByIdCredentials($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for credentials |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdIdentities**
> customerPrototypeDestroyByIdIdentities($id, $fk)

Delete a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for identities

try {
    $api_instance->customerPrototypeDestroyByIdIdentities($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for identities |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdOrders**
> customerPrototypeDestroyByIdOrders($id, $fk)

Delete a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for orders

try {
    $api_instance->customerPrototypeDestroyByIdOrders($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for orders |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdSites**
> customerPrototypeDestroyByIdSites($id, $fk)

Delete a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for sites

try {
    $api_instance->customerPrototypeDestroyByIdSites($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for sites |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdSubscriptions**
> customerPrototypeDestroyByIdSubscriptions($id, $fk)

Delete a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $api_instance->customerPrototypeDestroyByIdSubscriptions($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken customerPrototypeFindByIdAccessTokens($id, $fk)

Find a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $result = $api_instance->customerPrototypeFindByIdAccessTokens($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential customerPrototypeFindByIdCredentials($id, $fk)

Find a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for credentials

try {
    $result = $api_instance->customerPrototypeFindByIdCredentials($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for credentials |

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity customerPrototypeFindByIdIdentities($id, $fk)

Find a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for identities

try {
    $result = $api_instance->customerPrototypeFindByIdIdentities($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for identities |

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order customerPrototypeFindByIdOrders($id, $fk)

Find a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for orders

try {
    $result = $api_instance->customerPrototypeFindByIdOrders($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for orders |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdSites**
> \Yoast\MyYoastApiClient\Model\Site customerPrototypeFindByIdSites($id, $fk)

Find a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for sites

try {
    $result = $api_instance->customerPrototypeFindByIdSites($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for sites |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription customerPrototypeFindByIdSubscriptions($id, $fk)

Find a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for subscriptions

try {
    $result = $api_instance->customerPrototypeFindByIdSubscriptions($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for subscriptions |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken[] customerPrototypeGetAccessTokens($id, $filter)

Queries accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetAccessTokens($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken[]**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential[] customerPrototypeGetCredentials($id, $filter)

Queries credentials of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetCredentials($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential[]**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity[] customerPrototypeGetIdentities($id, $filter)

Queries identities of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetIdentities($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity[]**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetOrders**
> \Yoast\MyYoastApiClient\Model\Order[] customerPrototypeGetOrders($id, $filter)

Queries orders of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetOrders($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetSites**
> \Yoast\MyYoastApiClient\Model\Site[] customerPrototypeGetSites($id, $filter)

Queries sites of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetSites($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription[] customerPrototypeGetSubscriptions($id, $filter)

Queries subscriptions of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetSubscriptions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Customer customerPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken customerPrototypeUpdateByIdAccessTokens($id, $fk, $data)

Update a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens
$data = new \Yoast\MyYoastApiClient\Model\AccessToken(); // \Yoast\MyYoastApiClient\Model\AccessToken | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdAccessTokens($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |
 **data** | [**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/\Yoast\MyYoastApiClient\Model\AccessToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential customerPrototypeUpdateByIdCredentials($id, $fk, $data)

Update a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for credentials
$data = new \Yoast\MyYoastApiClient\Model\UserCredential(); // \Yoast\MyYoastApiClient\Model\UserCredential | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdCredentials($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for credentials |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/\Yoast\MyYoastApiClient\Model\UserCredential.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity customerPrototypeUpdateByIdIdentities($id, $fk, $data)

Update a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for identities
$data = new \Yoast\MyYoastApiClient\Model\UserIdentity(); // \Yoast\MyYoastApiClient\Model\UserIdentity | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdIdentities($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for identities |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/\Yoast\MyYoastApiClient\Model\UserIdentity.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order customerPrototypeUpdateByIdOrders($id, $fk, $data)

Update a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for orders
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdOrders($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for orders |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdSites**
> \Yoast\MyYoastApiClient\Model\Site customerPrototypeUpdateByIdSites($id, $fk, $data)

Update a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for sites
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdSites($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for sites |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription customerPrototypeUpdateByIdSubscriptions($id, $fk, $data)

Update a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for subscriptions
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdSubscriptions($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for subscriptions |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceByIdPostCustomersidReplace**
> \Yoast\MyYoastApiClient\Model\Customer customerReplaceByIdPostCustomersidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceByIdPostCustomersidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceByIdPostCustomersidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceByIdPutCustomersid**
> \Yoast\MyYoastApiClient\Model\Customer customerReplaceByIdPutCustomersid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceByIdPutCustomersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceByIdPutCustomersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceOrCreatePostCustomersReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Customer customerReplaceOrCreatePostCustomersReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceOrCreatePostCustomersReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceOrCreatePostCustomersReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceOrCreatePutCustomers**
> \Yoast\MyYoastApiClient\Model\Customer customerReplaceOrCreatePutCustomers($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceOrCreatePutCustomers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceOrCreatePutCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerResetPassword**
> customerResetPassword($options)

Reset password for a user with email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$options = NULL; // object | 

try {
    $api_instance->customerResetPassword($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerResetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 customerUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Customer customerUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/\Yoast\MyYoastApiClient\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

