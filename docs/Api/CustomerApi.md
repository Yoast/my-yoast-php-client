# Yoast\MyYoastApiClient\CustomerApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCustomersActivatePost**](CustomerApi.md#apiCustomersActivatePost) | **POST** /api/Customers/activate | Activate the account of a user
[**apiCustomersAllrolesGet**](CustomerApi.md#apiCustomersAllrolesGet) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
[**apiCustomersCurrentGet**](CustomerApi.md#apiCustomersCurrentGet) | **GET** /api/Customers/current | Get the current customer
[**apiCustomersCustomerIdBuyerCourseEnrollmentsGet**](CustomerApi.md#apiCustomersCustomerIdBuyerCourseEnrollmentsGet) | **GET** /api/Customers/{customerId}/buyerCourseEnrollments | Find Course Enrollments that a customer is buyer of
[**apiCustomersCustomerIdComposerTokensGet**](CustomerApi.md#apiCustomersCustomerIdComposerTokensGet) | **GET** /api/Customers/{customerId}/composerTokens | Get composer tokens
[**apiCustomersCustomerIdComposerTokensIdGet**](CustomerApi.md#apiCustomersCustomerIdComposerTokensIdGet) | **GET** /api/Customers/{customerId}/composerTokens/{id} | Get a composer token
[**apiCustomersCustomerIdCourseEnrollmentsGet**](CustomerApi.md#apiCustomersCustomerIdCourseEnrollmentsGet) | **GET** /api/Customers/{customerId}/courseEnrollments | Find Course Enrollments
[**apiCustomersCustomerIdIdentitiesGet**](CustomerApi.md#apiCustomersCustomerIdIdentitiesGet) | **GET** /api/Customers/{customerId}/identities | Get user identities
[**apiCustomersCustomerIdNewsletterDelete**](CustomerApi.md#apiCustomersCustomerIdNewsletterDelete) | **DELETE** /api/Customers/{customerId}/newsletter | Unsubscribe from the newsletter
[**apiCustomersCustomerIdNewsletterGet**](CustomerApi.md#apiCustomersCustomerIdNewsletterGet) | **GET** /api/Customers/{customerId}/newsletter | Newsletter subscription status
[**apiCustomersCustomerIdNewsletterPost**](CustomerApi.md#apiCustomersCustomerIdNewsletterPost) | **POST** /api/Customers/{customerId}/newsletter | Subscribe to the newsletter
[**apiCustomersCustomerIdOrdersGet**](CustomerApi.md#apiCustomersCustomerIdOrdersGet) | **GET** /api/Customers/{customerId}/orders | Get orders
[**apiCustomersCustomerIdOrdersIdGet**](CustomerApi.md#apiCustomersCustomerIdOrdersIdGet) | **GET** /api/Customers/{customerId}/orders/{id} | Get a order
[**apiCustomersCustomerIdSitesGet**](CustomerApi.md#apiCustomersCustomerIdSitesGet) | **GET** /api/Customers/{customerId}/sites | Get sites
[**apiCustomersCustomerIdSitesIdGet**](CustomerApi.md#apiCustomersCustomerIdSitesIdGet) | **GET** /api/Customers/{customerId}/sites/{id} | Get a site
[**apiCustomersCustomerIdSitesPost**](CustomerApi.md#apiCustomersCustomerIdSitesPost) | **POST** /api/Customers/{customerId}/sites | Create a site for a user
[**apiCustomersCustomerIdStudentCourseEnrollmentsGet**](CustomerApi.md#apiCustomersCustomerIdStudentCourseEnrollmentsGet) | **GET** /api/Customers/{customerId}/studentCourseEnrollments | Find Course Enrollments that a customer is student in
[**apiCustomersCustomerIdSubscriptionsGet**](CustomerApi.md#apiCustomersCustomerIdSubscriptionsGet) | **GET** /api/Customers/{customerId}/subscriptions | Get subscriptions
[**apiCustomersCustomerIdSubscriptionsIdCancelPost**](CustomerApi.md#apiCustomersCustomerIdSubscriptionsIdCancelPost) | **POST** /api/Customers/{customerId}/subscriptions/{id}/cancel | Cancel (part of) a subscription.
[**apiCustomersCustomerIdSubscriptionsIdGet**](CustomerApi.md#apiCustomersCustomerIdSubscriptionsIdGet) | **GET** /api/Customers/{customerId}/subscriptions/{id} | Get a subscriptions
[**apiCustomersGet**](CustomerApi.md#apiCustomersGet) | **GET** /api/Customers | Get customers
[**apiCustomersIdAccessTokensPost**](CustomerApi.md#apiCustomersIdAccessTokensPost) | **POST** /api/Customers/{id}/accessTokens | Create an access token for a user
[**apiCustomersIdAvatarPost**](CustomerApi.md#apiCustomersIdAvatarPost) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
[**apiCustomersIdDownloadGet**](CustomerApi.md#apiCustomersIdDownloadGet) | **GET** /api/Customers/{id}/download | Download profile.
[**apiCustomersIdEnablePost**](CustomerApi.md#apiCustomersIdEnablePost) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
[**apiCustomersIdFindRefundsGet**](CustomerApi.md#apiCustomersIdFindRefundsGet) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
[**apiCustomersIdGdprDeleteDelete**](CustomerApi.md#apiCustomersIdGdprDeleteDelete) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
[**apiCustomersIdGet**](CustomerApi.md#apiCustomersIdGet) | **GET** /api/Customers/{id} | Get a customer
[**apiCustomersIdPasswordPatch**](CustomerApi.md#apiCustomersIdPasswordPatch) | **PATCH** /api/Customers/{id}/password | Update a customer&#39;s password in WordPress
[**apiCustomersIdPatch**](CustomerApi.md#apiCustomersIdPatch) | **PATCH** /api/Customers/{id} | 
[**apiCustomersIdProfileGet**](CustomerApi.md#apiCustomersIdProfileGet) | **GET** /api/Customers/{id}/profile | 
[**apiCustomersIdProfilePatch**](CustomerApi.md#apiCustomersIdProfilePatch) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
[**apiCustomersIdRoleMappingDelete**](CustomerApi.md#apiCustomersIdRoleMappingDelete) | **DELETE** /api/Customers/{id}/roleMapping | 
[**apiCustomersIdRoleMappingPost**](CustomerApi.md#apiCustomersIdRoleMappingPost) | **POST** /api/Customers/{id}/roleMapping | 
[**apiCustomersIdRolesGet**](CustomerApi.md#apiCustomersIdRolesGet) | **GET** /api/Customers/{id}/roles | 
[**apiCustomersNewsletterListSubscribePost**](CustomerApi.md#apiCustomersNewsletterListSubscribePost) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
[**apiCustomersNonceGet**](CustomerApi.md#apiCustomersNonceGet) | **GET** /api/Customers/nonce | Get a nonce from Yoast.com
[**apiCustomersResetPasswordPatch**](CustomerApi.md#apiCustomersResetPasswordPatch) | **PATCH** /api/Customers/resetPassword | Reset the user&#39;s password.
[**apiCustomersRolemappingIdsGet**](CustomerApi.md#apiCustomersRolemappingIdsGet) | **GET** /api/Customers/rolemapping-ids | Get the ids of all customers with at least one role.
[**apiCustomersSendResetPasswordEmailPost**](CustomerApi.md#apiCustomersSendResetPasswordEmailPost) | **POST** /api/Customers/sendResetPasswordEmail | Send a reset password email to the user.
[**apiCustomersSignupPost**](CustomerApi.md#apiCustomersSignupPost) | **POST** /api/Customers/signup | Signup a customer on yoast.com.


# **apiCustomersActivatePost**
> object apiCustomersActivatePost($activateAccountDto)

Activate the account of a user

This route can be used to activate the account of a new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activateAccountDto = new \Yoast\MyYoastApiClient\Model\ActivateAccountDto(); // \Yoast\MyYoastApiClient\Model\ActivateAccountDto | 

try {
    $result = $apiInstance->apiCustomersActivatePost($activateAccountDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersActivatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activateAccountDto** | [**\Yoast\MyYoastApiClient\Model\ActivateAccountDto**](../Model/ActivateAccountDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersAllrolesGet**
> object apiCustomersAllrolesGet()

Get all existing roles with their ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustomersAllrolesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersAllrolesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCurrentGet**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersCurrentGet()

Get the current customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustomersCurrentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCurrentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdBuyerCourseEnrollmentsGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCustomersCustomerIdBuyerCourseEnrollmentsGet($customerId)

Find Course Enrollments that a customer is buyer of

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdBuyerCourseEnrollmentsGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdBuyerCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdComposerTokensGet**
> \Yoast\MyYoastApiClient\Model\ComposerToken[] apiCustomersCustomerIdComposerTokensGet($customerId, $filter)

Get composer tokens

Get and filter composer tokens of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdComposerTokensGet($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdComposerTokensGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken[]**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdComposerTokensIdGet**
> \Yoast\MyYoastApiClient\Model\ComposerToken apiCustomersCustomerIdComposerTokensIdGet($customerId, $id, $filter)

Get a composer token

Get a single composer token of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdComposerTokensIdGet($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdComposerTokensIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdCourseEnrollmentsGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCustomersCustomerIdCourseEnrollmentsGet($ownershipRelation, $customerId, $courseId)

Find Course Enrollments

Find Course Enrollments and filter by course or ownership relation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ownershipRelation = "ownershipRelation_example"; // string | 
$customerId = "customerId_example"; // string | 
$courseId = "courseId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdCourseEnrollmentsGet($ownershipRelation, $customerId, $courseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ownershipRelation** | [**string**](../Model/.md)|  |
 **customerId** | [**string**](../Model/.md)|  |
 **courseId** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdIdentitiesGet**
> \Yoast\MyYoastApiClient\Model\UserIdentity[] apiCustomersCustomerIdIdentitiesGet($customerId, $filter)

Get user identities

Get and filter user identities of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdIdentitiesGet($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdIdentitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity[]**](../Model/UserIdentity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdNewsletterDelete**
> object apiCustomersCustomerIdNewsletterDelete($customerId)

Unsubscribe from the newsletter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdNewsletterDelete($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdNewsletterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdNewsletterGet**
> object apiCustomersCustomerIdNewsletterGet($customerId)

Newsletter subscription status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdNewsletterGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdNewsletterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdNewsletterPost**
> object apiCustomersCustomerIdNewsletterPost($customerId)

Subscribe to the newsletter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdNewsletterPost($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdNewsletterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdOrdersGet**
> \Yoast\MyYoastApiClient\Model\Order[] apiCustomersCustomerIdOrdersGet($customerId, $filter)

Get orders

Get and filter orders of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdOrdersGet($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdOrdersIdGet**
> \Yoast\MyYoastApiClient\Model\Order apiCustomersCustomerIdOrdersIdGet($customerId, $id, $filter)

Get a order

Get a single order of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdOrdersIdGet($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdOrdersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSitesGet**
> \Yoast\MyYoastApiClient\Model\Site[] apiCustomersCustomerIdSitesGet($customerId, $filter)

Get sites

Get and filter sites of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdSitesGet($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSitesIdGet**
> \Yoast\MyYoastApiClient\Model\Site apiCustomersCustomerIdSitesIdGet($customerId, $id, $filter)

Get a site

Get a single site of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdSitesIdGet($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSitesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSitesPost**
> \Yoast\MyYoastApiClient\Model\Site apiCustomersCustomerIdSitesPost($createSiteBodyDto, $customerId)

Create a site for a user

Create a site record so we can link a subscription to a site which is linked to a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSiteBodyDto = new \Yoast\MyYoastApiClient\Model\CreateSiteBodyDto(); // \Yoast\MyYoastApiClient\Model\CreateSiteBodyDto | 
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdSitesPost($createSiteBodyDto, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSitesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSiteBodyDto** | [**\Yoast\MyYoastApiClient\Model\CreateSiteBodyDto**](../Model/CreateSiteBodyDto.md)|  |
 **customerId** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdStudentCourseEnrollmentsGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCustomersCustomerIdStudentCourseEnrollmentsGet($customerId)

Find Course Enrollments that a customer is student in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdStudentCourseEnrollmentsGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdStudentCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSubscriptionsGet**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiCustomersCustomerIdSubscriptionsGet($customerId, $filter)

Get subscriptions

Get and filter subscriptions of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdSubscriptionsGet($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSubscriptionsIdCancelPost**
> object apiCustomersCustomerIdSubscriptionsIdCancelPost($cancelSubscriptionBodyDto, $customerId, $id)

Cancel (part of) a subscription.

Communicates a (partial) subscription to yoast.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelSubscriptionBodyDto = new \Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto(); // \Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto | 
$customerId = "customerId_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdSubscriptionsIdCancelPost($cancelSubscriptionBodyDto, $customerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSubscriptionsIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancelSubscriptionBodyDto** | [**\Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto**](../Model/CancelSubscriptionBodyDto.md)|  |
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersCustomerIdSubscriptionsIdGet**
> \Yoast\MyYoastApiClient\Model\Subscription apiCustomersCustomerIdSubscriptionsIdGet($customerId, $id, $filter)

Get a subscriptions

Get a single subscriptions of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "customerId_example"; // string | 
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersCustomerIdSubscriptionsIdGet($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSubscriptionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersGet**
> \Yoast\MyYoastApiClient\Model\Customer[] apiCustomersGet($filter)

Get customers

Get and filter customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer[]**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdAccessTokensPost**
> apiCustomersIdAccessTokensPost($id)

Create an access token for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdAccessTokensPost($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdAccessTokensPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdAvatarPost**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdAvatarPost($id)

Upload a new UserAvatar to WordPress

This route allows the user to upload a new UserAvatar to their WordPress account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdAvatarPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdAvatarPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdDownloadGet**
> \Yoast\MyYoastApiClient\Model\JSZip apiCustomersIdDownloadGet($id)

Download profile.

Downloads the data of the given customer as CSV files inside a ZIP file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdDownloadGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\JSZip**](../Model/JSZip.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdEnablePost**
> object apiCustomersIdEnablePost($id)

Enables the customer with the given ID

Used when customers accidentally disable their own account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdEnablePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdEnablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdFindRefundsGet**
> \Yoast\MyYoastApiClient\Model\Refund[] apiCustomersIdFindRefundsGet($id)

Find refunds for user

Find the refunds for provided user id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdFindRefundsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdFindRefundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdGdprDeleteDelete**
> string apiCustomersIdGdprDeleteDelete($id)

Performs a \"GDPR forget me\" request.

Deletes and/or obfuscates all data related to a customer, except order data that we legally need to generate invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdGdprDeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdGdprDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdGet**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdGet($id, $filter)

Get a customer

Get a single customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCustomersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdPasswordPatch**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdPasswordPatch($changePasswordDto, $id)

Update a customer's password in WordPress

This route allows a customer to updates their password on WordPress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$changePasswordDto = new \Yoast\MyYoastApiClient\Model\ChangePasswordDto(); // \Yoast\MyYoastApiClient\Model\ChangePasswordDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdPasswordPatch($changePasswordDto, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdPasswordPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **changePasswordDto** | [**\Yoast\MyYoastApiClient\Model\ChangePasswordDto**](../Model/ChangePasswordDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdPatch**
> apiCustomersIdPatch($updateUserDto, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updateUserDto = new \Yoast\MyYoastApiClient\Model\UpdateUserDto(); // \Yoast\MyYoastApiClient\Model\UpdateUserDto | 
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdPatch($updateUserDto, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateUserDto** | [**\Yoast\MyYoastApiClient\Model\UpdateUserDto**](../Model/UpdateUserDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdProfileGet**
> object apiCustomersIdProfileGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdProfileGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdProfilePatch**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdProfilePatch($id, $updateUserToWordpressDto)

Update a customer to WordPress

This route allows a customer to updates their profile on WordPress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$updateUserToWordpressDto = new \Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto(); // \Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto | 

try {
    $result = $apiInstance->apiCustomersIdProfilePatch($id, $updateUserToWordpressDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdProfilePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **updateUserToWordpressDto** | [**\Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto**](../Model/UpdateUserToWordpressDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdRoleMappingDelete**
> apiCustomersIdRoleMappingDelete($roleDto, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleDto = new \Yoast\MyYoastApiClient\Model\RoleDto(); // \Yoast\MyYoastApiClient\Model\RoleDto | 
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdRoleMappingDelete($roleDto, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRoleMappingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleDto** | [**\Yoast\MyYoastApiClient\Model\RoleDto**](../Model/RoleDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdRoleMappingPost**
> apiCustomersIdRoleMappingPost($roleDto, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleDto = new \Yoast\MyYoastApiClient\Model\RoleDto(); // \Yoast\MyYoastApiClient\Model\RoleDto | 
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdRoleMappingPost($roleDto, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRoleMappingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleDto** | [**\Yoast\MyYoastApiClient\Model\RoleDto**](../Model/RoleDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdRolesGet**
> apiCustomersIdRolesGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->apiCustomersIdRolesGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRolesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersNewsletterListSubscribePost**
> object apiCustomersNewsletterListSubscribePost($subscribeByEmailBodyDto, $list)

Subscribes a user to a newsletter

Subscribes a user to the given (url) newsletter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeByEmailBodyDto = new \Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto(); // \Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto | 
$list = "list_example"; // string | 

try {
    $result = $apiInstance->apiCustomersNewsletterListSubscribePost($subscribeByEmailBodyDto, $list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersNewsletterListSubscribePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscribeByEmailBodyDto** | [**\Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto**](../Model/SubscribeByEmailBodyDto.md)|  |
 **list** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersNonceGet**
> object apiCustomersNonceGet()

Get a nonce from Yoast.com

Get a nonce from Yoast.com for usage with further requests to Yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiCustomersNonceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersNonceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersResetPasswordPatch**
> object apiCustomersResetPasswordPatch($resetPasswordDto)

Reset the user's password.

This route allows a user to reset its password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resetPasswordDto = new \Yoast\MyYoastApiClient\Model\ResetPasswordDto(); // \Yoast\MyYoastApiClient\Model\ResetPasswordDto | 

try {
    $result = $apiInstance->apiCustomersResetPasswordPatch($resetPasswordDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersResetPasswordPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resetPasswordDto** | [**\Yoast\MyYoastApiClient\Model\ResetPasswordDto**](../Model/ResetPasswordDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersRolemappingIdsGet**
> string[] apiCustomersRolemappingIdsGet()

Get the ids of all customers with at least one role.

Requires the caller to have the admin role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiCustomersRolemappingIdsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersRolemappingIdsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersSendResetPasswordEmailPost**
> object apiCustomersSendResetPasswordEmailPost($sendResetPasswordEmailDto)

Send a reset password email to the user.

Use yoast.com to send a password reset email to the user email specified in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sendResetPasswordEmailDto = new \Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto(); // \Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto | 

try {
    $result = $apiInstance->apiCustomersSendResetPasswordEmailPost($sendResetPasswordEmailDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersSendResetPasswordEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendResetPasswordEmailDto** | [**\Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto**](../Model/SendResetPasswordEmailDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersSignupPost**
> object apiCustomersSignupPost($signupAccountDto)

Signup a customer on yoast.com.

Using this route, a new account can be created on yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signupAccountDto = new \Yoast\MyYoastApiClient\Model\SignupAccountDto(); // \Yoast\MyYoastApiClient\Model\SignupAccountDto | 

try {
    $result = $apiInstance->apiCustomersSignupPost($signupAccountDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersSignupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signupAccountDto** | [**\Yoast\MyYoastApiClient\Model\SignupAccountDto**](../Model/SignupAccountDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

