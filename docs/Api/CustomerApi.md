# Yoast\MyYoastApiClient\CustomerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAccessTokenControllerCreateAccessToken**](CustomerApi.md#customeraccesstokencontrollercreateaccesstoken) | **POST** /api/Customers/{id}/accessTokens | Create an access token for a user
[**customerAuthControllerActivate**](CustomerApi.md#customerauthcontrolleractivate) | **POST** /api/Customers/activate | Activate the account of a user
[**customerAuthControllerChangePassword**](CustomerApi.md#customerauthcontrollerchangepassword) | **PATCH** /api/Customers/{id}/password | Update a customer&#x27;s password in WordPress
[**customerAuthControllerGetNonce**](CustomerApi.md#customerauthcontrollergetnonce) | **GET** /api/Customers/nonce | Get a nonce from Yoast.com
[**customerAuthControllerResetPassword**](CustomerApi.md#customerauthcontrollerresetpassword) | **PATCH** /api/Customers/resetPassword | Reset the user&#x27;s password.
[**customerAuthControllerSendResetPasswordEmail**](CustomerApi.md#customerauthcontrollersendresetpasswordemail) | **POST** /api/Customers/sendResetPasswordEmail | Send a reset password email to the user.
[**customerAuthControllerSignup**](CustomerApi.md#customerauthcontrollersignup) | **POST** /api/Customers/signup | Signup a customer on yoast.com.
[**customerComposerTokenControllerGetMany**](CustomerApi.md#customercomposertokencontrollergetmany) | **GET** /api/Customers/{customerId}/composerTokens | Get composer tokens
[**customerComposerTokenControllerGetOne**](CustomerApi.md#customercomposertokencontrollergetone) | **GET** /api/Customers/{customerId}/composerTokens/{id} | Get a composer token
[**customerControllerCurrent**](CustomerApi.md#customercontrollercurrent) | **GET** /api/Customers/current | Get the current customer
[**customerControllerDownloadProfile**](CustomerApi.md#customercontrollerdownloadprofile) | **GET** /api/Customers/{id}/download | Download profile.
[**customerControllerEnable**](CustomerApi.md#customercontrollerenable) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
[**customerControllerGetAllRoles**](CustomerApi.md#customercontrollergetallroles) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
[**customerControllerGetCustomersWithRole**](CustomerApi.md#customercontrollergetcustomerswithrole) | **GET** /api/Customers/rolemapping-ids | Get the ids of all customers with at least one role.
[**customerControllerGetMany**](CustomerApi.md#customercontrollergetmany) | **GET** /api/Customers | Get customers
[**customerControllerGetManyPaged**](CustomerApi.md#customercontrollergetmanypaged) | **GET** /api/Customers/paged | Get customers
[**customerControllerGetOne**](CustomerApi.md#customercontrollergetone) | **GET** /api/Customers/{id} | Get a customer
[**customerControllerPatchProfile**](CustomerApi.md#customercontrollerpatchprofile) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
[**customerControllerProfile**](CustomerApi.md#customercontrollerprofile) | **GET** /api/Customers/{id}/profile | 
[**customerControllerUpdateOne**](CustomerApi.md#customercontrollerupdateone) | **PATCH** /api/Customers/{id} | 
[**customerControllerUploadAvatar**](CustomerApi.md#customercontrolleruploadavatar) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
[**customerCourseEnrollmentControllerGetBuyerCourseEnrollments**](CustomerApi.md#customercourseenrollmentcontrollergetbuyercourseenrollments) | **GET** /api/Customers/{customerId}/buyerCourseEnrollments | Find Course Enrollments that a customer is buyer of
[**customerCourseEnrollmentControllerGetCourseEnrollments**](CustomerApi.md#customercourseenrollmentcontrollergetcourseenrollments) | **GET** /api/Customers/{customerId}/courseEnrollments | Find Course Enrollments
[**customerCourseEnrollmentControllerGetStudentCourseEnrollments**](CustomerApi.md#customercourseenrollmentcontrollergetstudentcourseenrollments) | **GET** /api/Customers/{customerId}/studentCourseEnrollments | Find Course Enrollments that a customer is student in
[**customerGDPRControllerDeleteCustomer**](CustomerApi.md#customergdprcontrollerdeletecustomer) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
[**customerIdentityControllerGetMany**](CustomerApi.md#customeridentitycontrollergetmany) | **GET** /api/Customers/{customerId}/identities | Get user identities
[**customerNewsletterControllerStatus**](CustomerApi.md#customernewslettercontrollerstatus) | **GET** /api/Customers/{customerId}/newsletter | Newsletter subscription status
[**customerNewsletterControllerSubscribe**](CustomerApi.md#customernewslettercontrollersubscribe) | **POST** /api/Customers/{customerId}/newsletter | Subscribe to the newsletter
[**customerNewsletterControllerSubscribeByEmail**](CustomerApi.md#customernewslettercontrollersubscribebyemail) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
[**customerNewsletterControllerUnsubscribe**](CustomerApi.md#customernewslettercontrollerunsubscribe) | **DELETE** /api/Customers/{customerId}/newsletter | Unsubscribe from the newsletter
[**customerOrderControllerGetMany**](CustomerApi.md#customerordercontrollergetmany) | **GET** /api/Customers/{customerId}/orders | Get orders
[**customerOrderControllerGetOne**](CustomerApi.md#customerordercontrollergetone) | **GET** /api/Customers/{customerId}/orders/{id} | Get a order
[**customerRefundControllerFindRefunds**](CustomerApi.md#customerrefundcontrollerfindrefunds) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
[**customerRolesControllerAddRole**](CustomerApi.md#customerrolescontrolleraddrole) | **POST** /api/Customers/{id}/roleMapping | 
[**customerRolesControllerDeleteRole**](CustomerApi.md#customerrolescontrollerdeleterole) | **DELETE** /api/Customers/{id}/roleMapping | 
[**customerRolesControllerGetMany**](CustomerApi.md#customerrolescontrollergetmany) | **GET** /api/Customers/{id}/roles | 
[**customerSiteControllerCreateSite**](CustomerApi.md#customersitecontrollercreatesite) | **POST** /api/Customers/{customerId}/sites | Create a site for a user
[**customerSiteControllerGetMany**](CustomerApi.md#customersitecontrollergetmany) | **GET** /api/Customers/{customerId}/sites | Get sites
[**customerSiteControllerGetOne**](CustomerApi.md#customersitecontrollergetone) | **GET** /api/Customers/{customerId}/sites/{id} | Get a site
[**customerSubscriptionControllerCancelSubscription**](CustomerApi.md#customersubscriptioncontrollercancelsubscription) | **POST** /api/Customers/{customerId}/subscriptions/{id}/cancel | Cancel (part of) a subscription.
[**customerSubscriptionControllerGetMany**](CustomerApi.md#customersubscriptioncontrollergetmany) | **GET** /api/Customers/{customerId}/subscriptions | Get subscriptions
[**customerSubscriptionControllerGetOne**](CustomerApi.md#customersubscriptioncontrollergetone) | **GET** /api/Customers/{customerId}/subscriptions/{id} | Get a subscriptions

# **customerAccessTokenControllerCreateAccessToken**
> \Yoast\MyYoastApiClient\Model\AccessToken customerAccessTokenControllerCreateAccessToken($id)

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
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerAccessTokenControllerCreateAccessToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAccessTokenControllerCreateAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerActivate**
> object customerAuthControllerActivate($body)

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
$body = new \Yoast\MyYoastApiClient\Model\ActivateAccountDto(); // \Yoast\MyYoastApiClient\Model\ActivateAccountDto | 

try {
    $result = $apiInstance->customerAuthControllerActivate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ActivateAccountDto**](../Model/ActivateAccountDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerChangePassword**
> \Yoast\MyYoastApiClient\Model\Customer customerAuthControllerChangePassword($body, $id)

Update a customer's password in WordPress

This route allows a customer to updates their password on WordPress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\ChangePasswordDto(); // \Yoast\MyYoastApiClient\Model\ChangePasswordDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerAuthControllerChangePassword($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerChangePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ChangePasswordDto**](../Model/ChangePasswordDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerGetNonce**
> object customerAuthControllerGetNonce()

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
    $result = $apiInstance->customerAuthControllerGetNonce();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerGetNonce: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerResetPassword**
> \Yoast\MyYoastApiClient\Model\Customer customerAuthControllerResetPassword($body)

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
$body = new \Yoast\MyYoastApiClient\Model\ResetPasswordDto(); // \Yoast\MyYoastApiClient\Model\ResetPasswordDto | 

try {
    $result = $apiInstance->customerAuthControllerResetPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerResetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ResetPasswordDto**](../Model/ResetPasswordDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerSendResetPasswordEmail**
> object customerAuthControllerSendResetPasswordEmail($body)

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
$body = new \Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto(); // \Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto | 

try {
    $result = $apiInstance->customerAuthControllerSendResetPasswordEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerSendResetPasswordEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SendResetPasswordEmailDto**](../Model/SendResetPasswordEmailDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAuthControllerSignup**
> object customerAuthControllerSignup($body)

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
$body = new \Yoast\MyYoastApiClient\Model\SignupAccountDto(); // \Yoast\MyYoastApiClient\Model\SignupAccountDto | 

try {
    $result = $apiInstance->customerAuthControllerSignup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAuthControllerSignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SignupAccountDto**](../Model/SignupAccountDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerComposerTokenControllerGetMany**
> \Yoast\MyYoastApiClient\Model\ComposerToken[] customerComposerTokenControllerGetMany($customerId, $filter)

Get composer tokens

Get and filter composer tokens of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerComposerTokenControllerGetMany($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerComposerTokenControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken[]**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerComposerTokenControllerGetOne**
> \Yoast\MyYoastApiClient\Model\ComposerToken customerComposerTokenControllerGetOne($customerId, $id, $filter)

Get a composer token

Get a single composer token of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerComposerTokenControllerGetOne($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerComposerTokenControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ComposerToken**](../Model/ComposerToken.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerCurrent**
> \Yoast\MyYoastApiClient\Model\Customer customerControllerCurrent()

Get the current customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerControllerCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerCurrent: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerDownloadProfile**
> \Yoast\MyYoastApiClient\Model\JSZip customerControllerDownloadProfile($id)

Download profile.

Downloads the data of the given customer as CSV files inside a ZIP file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerDownloadProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerDownloadProfile: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerEnable**
> object customerControllerEnable($id)

Enables the customer with the given ID

Used when customers accidentally disable their own account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerEnable($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerEnable: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerGetAllRoles**
> object customerControllerGetAllRoles()

Get all existing roles with their ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerControllerGetAllRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerGetAllRoles: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerGetCustomersWithRole**
> string[] customerControllerGetCustomersWithRole()

Get the ids of all customers with at least one role.

Requires the caller to have the admin role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerControllerGetCustomersWithRole();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerGetCustomersWithRole: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Customer[] customerControllerGetMany($filter)

Get customers

Get and filter customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer[]**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerGetManyPaged**
> object customerControllerGetManyPaged($filter)

Get customers

Get and filter customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerControllerGetManyPaged($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerGetManyPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Customer customerControllerGetOne($id, $filter)

Get a customer

Get a single customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerControllerGetOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerPatchProfile**
> \Yoast\MyYoastApiClient\Model\Customer customerControllerPatchProfile($body, $id)

Update a customer to WordPress

This route allows a customer to updates their profile on WordPress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto(); // \Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerPatchProfile($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerPatchProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto**](../Model/UpdateUserToWordpressDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerProfile**
> object customerControllerProfile($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerProfile: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerUpdateOne**
> \Yoast\MyYoastApiClient\Model\Customer customerControllerUpdateOne($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateUserDto(); // \Yoast\MyYoastApiClient\Model\UpdateUserDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerUpdateOne($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateUserDto**](../Model/UpdateUserDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerUploadAvatar**
> \Yoast\MyYoastApiClient\Model\Customer customerControllerUploadAvatar($id)

Upload a new UserAvatar to WordPress

This route allows the user to upload a new UserAvatar to their WordPress account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerControllerUploadAvatar($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerControllerUploadAvatar: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCourseEnrollmentControllerGetBuyerCourseEnrollments**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] customerCourseEnrollmentControllerGetBuyerCourseEnrollments($customerId)

Find Course Enrollments that a customer is buyer of

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerCourseEnrollmentControllerGetBuyerCourseEnrollments($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCourseEnrollmentControllerGetBuyerCourseEnrollments: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCourseEnrollmentControllerGetCourseEnrollments**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] customerCourseEnrollmentControllerGetCourseEnrollments($customerId, $ownershipRelation, $courseId)

Find Course Enrollments

Find Course Enrollments and filter by course or ownership relation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$ownershipRelation = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$courseId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerCourseEnrollmentControllerGetCourseEnrollments($customerId, $ownershipRelation, $courseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCourseEnrollmentControllerGetCourseEnrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **ownershipRelation** | [**string**](../Model/.md)|  |
 **courseId** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCourseEnrollmentControllerGetStudentCourseEnrollments**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] customerCourseEnrollmentControllerGetStudentCourseEnrollments($customerId)

Find Course Enrollments that a customer is student in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerCourseEnrollmentControllerGetStudentCourseEnrollments($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCourseEnrollmentControllerGetStudentCourseEnrollments: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGDPRControllerDeleteCustomer**
> string customerGDPRControllerDeleteCustomer($id)

Performs a \"GDPR forget me\" request.

Deletes and/or obfuscates all data related to a customer, except order data that we legally need to generate invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerGDPRControllerDeleteCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGDPRControllerDeleteCustomer: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerIdentityControllerGetMany**
> \Yoast\MyYoastApiClient\Model\UserIdentity[] customerIdentityControllerGetMany($customerId, $filter)

Get user identities

Get and filter user identities of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerIdentityControllerGetMany($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerIdentityControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\UserIdentity[]**](../Model/UserIdentity.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNewsletterControllerStatus**
> object customerNewsletterControllerStatus($customerId)

Newsletter subscription status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerNewsletterControllerStatus($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerNewsletterControllerStatus: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNewsletterControllerSubscribe**
> object customerNewsletterControllerSubscribe($customerId)

Subscribe to the newsletter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerNewsletterControllerSubscribe($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerNewsletterControllerSubscribe: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNewsletterControllerSubscribeByEmail**
> object customerNewsletterControllerSubscribeByEmail($body, $list)

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
$body = new \Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto(); // \Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto | 
$list = "list_example"; // string | 

try {
    $result = $apiInstance->customerNewsletterControllerSubscribeByEmail($body, $list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerNewsletterControllerSubscribeByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SubscribeByEmailBodyDto**](../Model/SubscribeByEmailBodyDto.md)|  |
 **list** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerNewsletterControllerUnsubscribe**
> object customerNewsletterControllerUnsubscribe($customerId)

Unsubscribe from the newsletter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerNewsletterControllerUnsubscribe($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerNewsletterControllerUnsubscribe: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerOrderControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Order[] customerOrderControllerGetMany($customerId, $filter)

Get orders

Get and filter orders of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerOrderControllerGetMany($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerOrderControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order[]**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerOrderControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Order customerOrderControllerGetOne($customerId, $id, $filter)

Get a order

Get a single order of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerOrderControllerGetOne($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerOrderControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRefundControllerFindRefunds**
> \Yoast\MyYoastApiClient\Model\Refund[] customerRefundControllerFindRefunds($id)

Find refunds for user

Find the refunds for provided user id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerRefundControllerFindRefunds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRefundControllerFindRefunds: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRolesControllerAddRole**
> \Yoast\MyYoastApiClient\Model\Customer customerRolesControllerAddRole($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\RoleIDDto(); // \Yoast\MyYoastApiClient\Model\RoleIDDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerRolesControllerAddRole($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRolesControllerAddRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\RoleIDDto**](../Model/RoleIDDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRolesControllerDeleteRole**
> \Yoast\MyYoastApiClient\Model\Customer customerRolesControllerDeleteRole($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\RoleIDDto(); // \Yoast\MyYoastApiClient\Model\RoleIDDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerRolesControllerDeleteRole($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRolesControllerDeleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\RoleIDDto**](../Model/RoleIDDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerRolesControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Role[] customerRolesControllerGetMany($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerRolesControllerGetMany($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerRolesControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Role[]**](../Model/Role.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSiteControllerCreateSite**
> \Yoast\MyYoastApiClient\Model\Site customerSiteControllerCreateSite($body, $customerId)

Create a site for a user

Create a site record so we can link a subscription to a site which is linked to a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CreateSiteBodyDto(); // \Yoast\MyYoastApiClient\Model\CreateSiteBodyDto | 
$customerId = "customerId_example"; // string | 

try {
    $result = $apiInstance->customerSiteControllerCreateSite($body, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSiteControllerCreateSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateSiteBodyDto**](../Model/CreateSiteBodyDto.md)|  |
 **customerId** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSiteControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Site[] customerSiteControllerGetMany($customerId, $filter)

Get sites

Get and filter sites of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerSiteControllerGetMany($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSiteControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSiteControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Site customerSiteControllerGetOne($customerId, $id, $filter)

Get a site

Get a single site of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerSiteControllerGetOne($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSiteControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionControllerCancelSubscription**
> object customerSubscriptionControllerCancelSubscription($body, $customerId, $id)

Cancel (part of) a subscription.

Communicates a (partial) subscription to yoast.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto(); // \Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto | 
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->customerSubscriptionControllerCancelSubscription($body, $customerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSubscriptionControllerCancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto**](../Model/CancelSubscriptionBodyDto.md)|  |
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

# **customerSubscriptionControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Subscription[] customerSubscriptionControllerGetMany($customerId, $filter)

Get subscriptions

Get and filter subscriptions of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerSubscriptionControllerGetMany($customerId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSubscriptionControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Subscription customerSubscriptionControllerGetOne($customerId, $id, $filter)

Get a subscriptions

Get a single subscriptions of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->customerSubscriptionControllerGetOne($customerId, $id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerSubscriptionControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

