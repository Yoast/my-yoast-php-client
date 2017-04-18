# Yoast\MyYoastApiClient\MyYoastUserApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**myYoastUserConfirm**](MyYoastUserApi.md#myYoastUserConfirm) | **GET** /MyYoastUsers/confirm | Confirm a user registration with email verification token.
[**myYoastUserCount**](MyYoastUserApi.md#myYoastUserCount) | **GET** /MyYoastUsers/count | Count instances of the model matched by where from the data source.
[**myYoastUserCreate**](MyYoastUserApi.md#myYoastUserCreate) | **POST** /MyYoastUsers | Create a new instance of the model and persist it into the data source.
[**myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream**](MyYoastUserApi.md#myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream) | **GET** /MyYoastUsers/change-stream | Create a change stream.
[**myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream**](MyYoastUserApi.md#myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream) | **POST** /MyYoastUsers/change-stream | Create a change stream.
[**myYoastUserDeleteById**](MyYoastUserApi.md#myYoastUserDeleteById) | **DELETE** /MyYoastUsers/{id} | Delete a model instance by {{id}} from the data source.
[**myYoastUserExistsGetMyYoastUsersidExists**](MyYoastUserApi.md#myYoastUserExistsGetMyYoastUsersidExists) | **GET** /MyYoastUsers/{id}/exists | Check whether a model instance exists in the data source.
[**myYoastUserExistsHeadMyYoastUsersid**](MyYoastUserApi.md#myYoastUserExistsHeadMyYoastUsersid) | **HEAD** /MyYoastUsers/{id} | Check whether a model instance exists in the data source.
[**myYoastUserFind**](MyYoastUserApi.md#myYoastUserFind) | **GET** /MyYoastUsers | Find all instances of the model matched by filter from the data source.
[**myYoastUserFindById**](MyYoastUserApi.md#myYoastUserFindById) | **GET** /MyYoastUsers/{id} | Find a model instance by {{id}} from the data source.
[**myYoastUserFindOne**](MyYoastUserApi.md#myYoastUserFindOne) | **GET** /MyYoastUsers/findOne | Find first instance of the model matched by filter from the data source.
[**myYoastUserFromWooCommerce**](MyYoastUserApi.md#myYoastUserFromWooCommerce) | **PUT** /MyYoastUsers/fromWooCommerce | 
[**myYoastUserLogin**](MyYoastUserApi.md#myYoastUserLogin) | **POST** /MyYoastUsers/login | Login a user with username/email and password.
[**myYoastUserLogout**](MyYoastUserApi.md#myYoastUserLogout) | **POST** /MyYoastUsers/logout | Logout a user with access token.
[**myYoastUserPatchOrCreate**](MyYoastUserApi.md#myYoastUserPatchOrCreate) | **PATCH** /MyYoastUsers | Patch an existing model instance or insert a new one into the data source.
[**myYoastUserProfile**](MyYoastUserApi.md#myYoastUserProfile) | **GET** /MyYoastUsers/{id}/profile | 
[**myYoastUserPrototypeCountAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeCountAccessTokens) | **GET** /MyYoastUsers/{id}/accessTokens/count | Counts accessTokens of MyYoastUser.
[**myYoastUserPrototypeCountCredentials**](MyYoastUserApi.md#myYoastUserPrototypeCountCredentials) | **GET** /MyYoastUsers/{id}/credentials/count | Counts credentials of MyYoastUser.
[**myYoastUserPrototypeCountIdentities**](MyYoastUserApi.md#myYoastUserPrototypeCountIdentities) | **GET** /MyYoastUsers/{id}/identities/count | Counts identities of MyYoastUser.
[**myYoastUserPrototypeCountOrders**](MyYoastUserApi.md#myYoastUserPrototypeCountOrders) | **GET** /MyYoastUsers/{id}/orders/count | Counts orders of MyYoastUser.
[**myYoastUserPrototypeCountSites**](MyYoastUserApi.md#myYoastUserPrototypeCountSites) | **GET** /MyYoastUsers/{id}/sites/count | Counts sites of MyYoastUser.
[**myYoastUserPrototypeCountSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeCountSubscriptions) | **GET** /MyYoastUsers/{id}/subscriptions/count | Counts subscriptions of MyYoastUser.
[**myYoastUserPrototypeCreateAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeCreateAccessTokens) | **POST** /MyYoastUsers/{id}/accessTokens | Creates a new instance in accessTokens of this model.
[**myYoastUserPrototypeCreateCredentials**](MyYoastUserApi.md#myYoastUserPrototypeCreateCredentials) | **POST** /MyYoastUsers/{id}/credentials | Creates a new instance in credentials of this model.
[**myYoastUserPrototypeCreateIdentities**](MyYoastUserApi.md#myYoastUserPrototypeCreateIdentities) | **POST** /MyYoastUsers/{id}/identities | Creates a new instance in identities of this model.
[**myYoastUserPrototypeCreateOrders**](MyYoastUserApi.md#myYoastUserPrototypeCreateOrders) | **POST** /MyYoastUsers/{id}/orders | Creates a new instance in orders of this model.
[**myYoastUserPrototypeCreateSites**](MyYoastUserApi.md#myYoastUserPrototypeCreateSites) | **POST** /MyYoastUsers/{id}/sites | Creates a new instance in sites of this model.
[**myYoastUserPrototypeCreateSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeCreateSubscriptions) | **POST** /MyYoastUsers/{id}/subscriptions | Creates a new instance in subscriptions of this model.
[**myYoastUserPrototypeDeleteAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeDeleteAccessTokens) | **DELETE** /MyYoastUsers/{id}/accessTokens | Deletes all accessTokens of this model.
[**myYoastUserPrototypeDeleteCredentials**](MyYoastUserApi.md#myYoastUserPrototypeDeleteCredentials) | **DELETE** /MyYoastUsers/{id}/credentials | Deletes all credentials of this model.
[**myYoastUserPrototypeDeleteIdentities**](MyYoastUserApi.md#myYoastUserPrototypeDeleteIdentities) | **DELETE** /MyYoastUsers/{id}/identities | Deletes all identities of this model.
[**myYoastUserPrototypeDeleteOrders**](MyYoastUserApi.md#myYoastUserPrototypeDeleteOrders) | **DELETE** /MyYoastUsers/{id}/orders | Deletes all orders of this model.
[**myYoastUserPrototypeDeleteSites**](MyYoastUserApi.md#myYoastUserPrototypeDeleteSites) | **DELETE** /MyYoastUsers/{id}/sites | Deletes all sites of this model.
[**myYoastUserPrototypeDeleteSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeDeleteSubscriptions) | **DELETE** /MyYoastUsers/{id}/subscriptions | Deletes all subscriptions of this model.
[**myYoastUserPrototypeDestroyByIdAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdAccessTokens) | **DELETE** /MyYoastUsers/{id}/accessTokens/{fk} | Delete a related item by id for accessTokens.
[**myYoastUserPrototypeDestroyByIdCredentials**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdCredentials) | **DELETE** /MyYoastUsers/{id}/credentials/{fk} | Delete a related item by id for credentials.
[**myYoastUserPrototypeDestroyByIdIdentities**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdIdentities) | **DELETE** /MyYoastUsers/{id}/identities/{fk} | Delete a related item by id for identities.
[**myYoastUserPrototypeDestroyByIdOrders**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdOrders) | **DELETE** /MyYoastUsers/{id}/orders/{fk} | Delete a related item by id for orders.
[**myYoastUserPrototypeDestroyByIdSites**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdSites) | **DELETE** /MyYoastUsers/{id}/sites/{fk} | Delete a related item by id for sites.
[**myYoastUserPrototypeDestroyByIdSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeDestroyByIdSubscriptions) | **DELETE** /MyYoastUsers/{id}/subscriptions/{fk} | Delete a related item by id for subscriptions.
[**myYoastUserPrototypeFindByIdAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdAccessTokens) | **GET** /MyYoastUsers/{id}/accessTokens/{fk} | Find a related item by id for accessTokens.
[**myYoastUserPrototypeFindByIdCredentials**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdCredentials) | **GET** /MyYoastUsers/{id}/credentials/{fk} | Find a related item by id for credentials.
[**myYoastUserPrototypeFindByIdIdentities**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdIdentities) | **GET** /MyYoastUsers/{id}/identities/{fk} | Find a related item by id for identities.
[**myYoastUserPrototypeFindByIdOrders**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdOrders) | **GET** /MyYoastUsers/{id}/orders/{fk} | Find a related item by id for orders.
[**myYoastUserPrototypeFindByIdSites**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdSites) | **GET** /MyYoastUsers/{id}/sites/{fk} | Find a related item by id for sites.
[**myYoastUserPrototypeFindByIdSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeFindByIdSubscriptions) | **GET** /MyYoastUsers/{id}/subscriptions/{fk} | Find a related item by id for subscriptions.
[**myYoastUserPrototypeGetAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeGetAccessTokens) | **GET** /MyYoastUsers/{id}/accessTokens | Queries accessTokens of MyYoastUser.
[**myYoastUserPrototypeGetCredentials**](MyYoastUserApi.md#myYoastUserPrototypeGetCredentials) | **GET** /MyYoastUsers/{id}/credentials | Queries credentials of MyYoastUser.
[**myYoastUserPrototypeGetIdentities**](MyYoastUserApi.md#myYoastUserPrototypeGetIdentities) | **GET** /MyYoastUsers/{id}/identities | Queries identities of MyYoastUser.
[**myYoastUserPrototypeGetOrders**](MyYoastUserApi.md#myYoastUserPrototypeGetOrders) | **GET** /MyYoastUsers/{id}/orders | Queries orders of MyYoastUser.
[**myYoastUserPrototypeGetSites**](MyYoastUserApi.md#myYoastUserPrototypeGetSites) | **GET** /MyYoastUsers/{id}/sites | Queries sites of MyYoastUser.
[**myYoastUserPrototypeGetSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeGetSubscriptions) | **GET** /MyYoastUsers/{id}/subscriptions | Queries subscriptions of MyYoastUser.
[**myYoastUserPrototypePatchAttributes**](MyYoastUserApi.md#myYoastUserPrototypePatchAttributes) | **PATCH** /MyYoastUsers/{id} | Patch attributes for a model instance and persist it into the data source.
[**myYoastUserPrototypeUpdateByIdAccessTokens**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdAccessTokens) | **PUT** /MyYoastUsers/{id}/accessTokens/{fk} | Update a related item by id for accessTokens.
[**myYoastUserPrototypeUpdateByIdCredentials**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdCredentials) | **PUT** /MyYoastUsers/{id}/credentials/{fk} | Update a related item by id for credentials.
[**myYoastUserPrototypeUpdateByIdIdentities**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdIdentities) | **PUT** /MyYoastUsers/{id}/identities/{fk} | Update a related item by id for identities.
[**myYoastUserPrototypeUpdateByIdOrders**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdOrders) | **PUT** /MyYoastUsers/{id}/orders/{fk} | Update a related item by id for orders.
[**myYoastUserPrototypeUpdateByIdSites**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdSites) | **PUT** /MyYoastUsers/{id}/sites/{fk} | Update a related item by id for sites.
[**myYoastUserPrototypeUpdateByIdSubscriptions**](MyYoastUserApi.md#myYoastUserPrototypeUpdateByIdSubscriptions) | **PUT** /MyYoastUsers/{id}/subscriptions/{fk} | Update a related item by id for subscriptions.
[**myYoastUserReplaceByIdPostMyYoastUsersidReplace**](MyYoastUserApi.md#myYoastUserReplaceByIdPostMyYoastUsersidReplace) | **POST** /MyYoastUsers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**myYoastUserReplaceByIdPutMyYoastUsersid**](MyYoastUserApi.md#myYoastUserReplaceByIdPutMyYoastUsersid) | **PUT** /MyYoastUsers/{id} | Replace attributes for a model instance and persist it into the data source.
[**myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate**](MyYoastUserApi.md#myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate) | **POST** /MyYoastUsers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**myYoastUserReplaceOrCreatePutMyYoastUsers**](MyYoastUserApi.md#myYoastUserReplaceOrCreatePutMyYoastUsers) | **PUT** /MyYoastUsers | Replace an existing model instance or insert a new one into the data source.
[**myYoastUserResetPassword**](MyYoastUserApi.md#myYoastUserResetPassword) | **POST** /MyYoastUsers/reset | Reset password for a user with email.
[**myYoastUserUpdateAll**](MyYoastUserApi.md#myYoastUserUpdateAll) | **POST** /MyYoastUsers/update | Update instances of the model matched by {{where}} from the data source.
[**myYoastUserUpsertWithWhere**](MyYoastUserApi.md#myYoastUserUpsertWithWhere) | **POST** /MyYoastUsers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **myYoastUserConfirm**
> myYoastUserConfirm($uid, $token, $redirect)

Confirm a user registration with email verification token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$uid = "uid_example"; // string | 
$token = "token_example"; // string | 
$redirect = "redirect_example"; // string | 

try {
    $api_instance->myYoastUserConfirm($uid, $token, $redirect);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserConfirm: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserCount: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserCreate**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream**
> \SplFileObject myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserCreateChangeStreamGetMyYoastUsersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream**
> \SplFileObject myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserCreateChangeStreamPostMyYoastUsersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserDeleteById**
> object myYoastUserDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->myYoastUserDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserExistsGetMyYoastUsersidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 myYoastUserExistsGetMyYoastUsersidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->myYoastUserExistsGetMyYoastUsersidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserExistsGetMyYoastUsersidExists: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserExistsHeadMyYoastUsersid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 myYoastUserExistsHeadMyYoastUsersid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->myYoastUserExistsHeadMyYoastUsersid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserExistsHeadMyYoastUsersid: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserFind**
> \Yoast\MyYoastApiClient\Model\MyYoastUser[] myYoastUserFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->myYoastUserFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser[]**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserFindById**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->myYoastUserFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserFindOne**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->myYoastUserFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserFromWooCommerce($customer_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$customer_data = "customer_data_example"; // string | 

try {
    $result = $api_instance->myYoastUserFromWooCommerce($customer_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserFromWooCommerce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserLogin**
> object myYoastUserLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$credentials = NULL; // object | 
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->myYoastUserLogin($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserLogin: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserLogout**
> myYoastUserLogout()

Logout a user with access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();

try {
    $api_instance->myYoastUserLogout();
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserLogout: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserProfile**
> \Yoast\MyYoastApiClient\Model\InlineResponse2003 myYoastUserProfile($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = 56; // int | 

try {
    $result = $api_instance->myYoastUserProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserProfile: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserPrototypeCountAccessTokens**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountAccessTokens($id, $where)

Counts accessTokens of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountAccessTokens($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCountCredentials**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountCredentials($id, $where)

Counts credentials of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountCredentials($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCountIdentities**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountIdentities($id, $where)

Counts identities of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountIdentities($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCountOrders**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountOrders($id, $where)

Counts orders of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountOrders($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCountSites**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountSites($id, $where)

Counts sites of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountSites($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCountSubscriptions**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 myYoastUserPrototypeCountSubscriptions($id, $where)

Counts subscriptions of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->myYoastUserPrototypeCountSubscriptions($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCountSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken myYoastUserPrototypeCreateAccessTokens($id, $data)

Creates a new instance in accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\AccessToken(); // \Yoast\MyYoastApiClient\Model\AccessToken | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateAccessTokens($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/\Yoast\MyYoastApiClient\Model\AccessToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential myYoastUserPrototypeCreateCredentials($id, $data)

Creates a new instance in credentials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\UserCredential(); // \Yoast\MyYoastApiClient\Model\UserCredential | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateCredentials($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/\Yoast\MyYoastApiClient\Model\UserCredential.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity myYoastUserPrototypeCreateIdentities($id, $data)

Creates a new instance in identities of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\UserIdentity(); // \Yoast\MyYoastApiClient\Model\UserIdentity | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateIdentities($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/\Yoast\MyYoastApiClient\Model\UserIdentity.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateOrders**
> \Yoast\MyYoastApiClient\Model\Order myYoastUserPrototypeCreateOrders($id, $data)

Creates a new instance in orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateOrders($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateSites**
> \Yoast\MyYoastApiClient\Model\Site myYoastUserPrototypeCreateSites($id, $data)

Creates a new instance in sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateSites($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeCreateSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription myYoastUserPrototypeCreateSubscriptions($id, $data)

Creates a new instance in subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->myYoastUserPrototypeCreateSubscriptions($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeCreateSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteAccessTokens**
> myYoastUserPrototypeDeleteAccessTokens($id)

Deletes all accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteAccessTokens($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteCredentials**
> myYoastUserPrototypeDeleteCredentials($id)

Deletes all credentials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteCredentials($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteIdentities**
> myYoastUserPrototypeDeleteIdentities($id)

Deletes all identities of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteIdentities($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteOrders**
> myYoastUserPrototypeDeleteOrders($id)

Deletes all orders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteOrders($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteSites**
> myYoastUserPrototypeDeleteSites($id)

Deletes all sites of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteSites($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDeleteSubscriptions**
> myYoastUserPrototypeDeleteSubscriptions($id)

Deletes all subscriptions of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDeleteSubscriptions($id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDeleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdAccessTokens**
> myYoastUserPrototypeDestroyByIdAccessTokens($fk, $id)

Delete a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for accessTokens
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdAccessTokens($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for accessTokens |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdCredentials**
> myYoastUserPrototypeDestroyByIdCredentials($fk, $id)

Delete a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for credentials
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdCredentials($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for credentials |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdIdentities**
> myYoastUserPrototypeDestroyByIdIdentities($fk, $id)

Delete a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for identities
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdIdentities($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for identities |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdOrders**
> myYoastUserPrototypeDestroyByIdOrders($fk, $id)

Delete a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdOrders($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdSites**
> myYoastUserPrototypeDestroyByIdSites($fk, $id)

Delete a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdSites($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeDestroyByIdSubscriptions**
> myYoastUserPrototypeDestroyByIdSubscriptions($fk, $id)

Delete a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for subscriptions
$id = "id_example"; // string | MyYoastUser id

try {
    $api_instance->myYoastUserPrototypeDestroyByIdSubscriptions($fk, $id);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeDestroyByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for subscriptions |
 **id** | **string**| MyYoastUser id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken myYoastUserPrototypeFindByIdAccessTokens($fk, $id)

Find a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for accessTokens
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdAccessTokens($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for accessTokens |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential myYoastUserPrototypeFindByIdCredentials($fk, $id)

Find a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for credentials
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdCredentials($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for credentials |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity myYoastUserPrototypeFindByIdIdentities($fk, $id)

Find a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for identities
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdIdentities($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for identities |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order myYoastUserPrototypeFindByIdOrders($fk, $id)

Find a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdOrders($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdSites**
> \Yoast\MyYoastApiClient\Model\Site myYoastUserPrototypeFindByIdSites($fk, $id)

Find a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdSites($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeFindByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription myYoastUserPrototypeFindByIdSubscriptions($fk, $id)

Find a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for subscriptions
$id = "id_example"; // string | MyYoastUser id

try {
    $result = $api_instance->myYoastUserPrototypeFindByIdSubscriptions($fk, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeFindByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for subscriptions |
 **id** | **string**| MyYoastUser id |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken[] myYoastUserPrototypeGetAccessTokens($id, $filter)

Queries accessTokens of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetAccessTokens($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken[]**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential[] myYoastUserPrototypeGetCredentials($id, $filter)

Queries credentials of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetCredentials($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential[]**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity[] myYoastUserPrototypeGetIdentities($id, $filter)

Queries identities of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetIdentities($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity[]**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetOrders**
> \Yoast\MyYoastApiClient\Model\Order[] myYoastUserPrototypeGetOrders($id, $filter)

Queries orders of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetOrders($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetSites**
> \Yoast\MyYoastApiClient\Model\Site[] myYoastUserPrototypeGetSites($id, $filter)

Queries sites of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetSites($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeGetSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription[] myYoastUserPrototypeGetSubscriptions($id, $filter)

Queries subscriptions of MyYoastUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->myYoastUserPrototypeGetSubscriptions($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **filter** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | An object of model property name/value pairs

try {
    $result = $api_instance->myYoastUserPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdAccessTokens**
> \Yoast\MyYoastApiClient\Model\AccessToken myYoastUserPrototypeUpdateByIdAccessTokens($fk, $id, $data)

Update a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for accessTokens
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\AccessToken(); // \Yoast\MyYoastApiClient\Model\AccessToken | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdAccessTokens($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for accessTokens |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/\Yoast\MyYoastApiClient\Model\AccessToken.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdCredentials**
> \Yoast\MyYoastApiClient\Model\UserCredential myYoastUserPrototypeUpdateByIdCredentials($fk, $id, $data)

Update a related item by id for credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for credentials
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\UserCredential(); // \Yoast\MyYoastApiClient\Model\UserCredential | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdCredentials($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for credentials |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/\Yoast\MyYoastApiClient\Model\UserCredential.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserCredential**](../Model/UserCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdIdentities**
> \Yoast\MyYoastApiClient\Model\UserIdentity myYoastUserPrototypeUpdateByIdIdentities($fk, $id, $data)

Update a related item by id for identities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for identities
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\UserIdentity(); // \Yoast\MyYoastApiClient\Model\UserIdentity | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdIdentities($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for identities |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/\Yoast\MyYoastApiClient\Model\UserIdentity.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity**](../Model/UserIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdOrders**
> \Yoast\MyYoastApiClient\Model\Order myYoastUserPrototypeUpdateByIdOrders($fk, $id, $data)

Update a related item by id for orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for orders
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Order(); // \Yoast\MyYoastApiClient\Model\Order | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdOrders($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for orders |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Order**](../Model/\Yoast\MyYoastApiClient\Model\Order.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdSites**
> \Yoast\MyYoastApiClient\Model\Site myYoastUserPrototypeUpdateByIdSites($fk, $id, $data)

Update a related item by id for sites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for sites
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Site(); // \Yoast\MyYoastApiClient\Model\Site | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdSites($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for sites |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Site**](../Model/\Yoast\MyYoastApiClient\Model\Site.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserPrototypeUpdateByIdSubscriptions**
> \Yoast\MyYoastApiClient\Model\Subscription myYoastUserPrototypeUpdateByIdSubscriptions($fk, $id, $data)

Update a related item by id for subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$fk = "fk_example"; // string | Foreign key for subscriptions
$id = "id_example"; // string | MyYoastUser id
$data = new \Yoast\MyYoastApiClient\Model\Subscription(); // \Yoast\MyYoastApiClient\Model\Subscription | 

try {
    $result = $api_instance->myYoastUserPrototypeUpdateByIdSubscriptions($fk, $id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserPrototypeUpdateByIdSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fk** | **string**| Foreign key for subscriptions |
 **id** | **string**| MyYoastUser id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/\Yoast\MyYoastApiClient\Model\Subscription.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserReplaceByIdPostMyYoastUsersidReplace**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserReplaceByIdPostMyYoastUsersidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserReplaceByIdPostMyYoastUsersidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserReplaceByIdPostMyYoastUsersidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserReplaceByIdPutMyYoastUsersid**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserReplaceByIdPutMyYoastUsersid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserReplaceByIdPutMyYoastUsersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserReplaceByIdPutMyYoastUsersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserReplaceOrCreatePostMyYoastUsersReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserReplaceOrCreatePutMyYoastUsers**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserReplaceOrCreatePutMyYoastUsers($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | Model instance data

try {
    $result = $api_instance->myYoastUserReplaceOrCreatePutMyYoastUsers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserReplaceOrCreatePutMyYoastUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserResetPassword**
> myYoastUserResetPassword($options)

Reset password for a user with email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$options = NULL; // object | 

try {
    $api_instance->myYoastUserResetPassword($options);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserResetPassword: ', $e->getMessage(), PHP_EOL;
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

# **myYoastUserUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 myYoastUserUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | An object of model property name/value pairs

try {
    $result = $api_instance->myYoastUserUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myYoastUserUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\MyYoastUser myYoastUserUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\MyYoastUserApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\MyYoastUser(); // \Yoast\MyYoastApiClient\Model\MyYoastUser | An object of model property name/value pairs

try {
    $result = $api_instance->myYoastUserUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyYoastUserApi->myYoastUserUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/\Yoast\MyYoastApiClient\Model\MyYoastUser.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\MyYoastUser**](../Model/MyYoastUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

