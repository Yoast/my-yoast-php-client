# Yoast\MyYoastApiClient\CustomerApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCustomersActivatePost**](CustomerApi.md#apiCustomersActivatePost) | **POST** /api/Customers/activate | Activate the account of a user
[**apiCustomersAllrolesGet**](CustomerApi.md#apiCustomersAllrolesGet) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
[**apiCustomersBulkPost**](CustomerApi.md#apiCustomersBulkPost) | **POST** /api/Customers/bulk | Create many Customer
[**apiCustomersCurrentGet**](CustomerApi.md#apiCustomersCurrentGet) | **GET** /api/Customers/current | Get the current customer
[**apiCustomersCustomerIdCourseEnrollmentsGet**](CustomerApi.md#apiCustomersCustomerIdCourseEnrollmentsGet) | **GET** /api/Customers/{customerId}/courseEnrollments | Find Course Enrollments
[**apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost**](CustomerApi.md#apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost) | **POST** /api/Customers/{customerId}/subscriptions/{subscriptionId}/cancel | Cancel (part of) a subscription.
[**apiCustomersGet**](CustomerApi.md#apiCustomersGet) | **GET** /api/Customers | Retrieve many Customer
[**apiCustomersIdAvatarPost**](CustomerApi.md#apiCustomersIdAvatarPost) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
[**apiCustomersIdDelete**](CustomerApi.md#apiCustomersIdDelete) | **DELETE** /api/Customers/{id} | Delete one Customer
[**apiCustomersIdDownloadGet**](CustomerApi.md#apiCustomersIdDownloadGet) | **GET** /api/Customers/{id}/download | Download profile.
[**apiCustomersIdEnablePost**](CustomerApi.md#apiCustomersIdEnablePost) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
[**apiCustomersIdFindRefundsGet**](CustomerApi.md#apiCustomersIdFindRefundsGet) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
[**apiCustomersIdGet**](CustomerApi.md#apiCustomersIdGet) | **GET** /api/Customers/{id} | Retrieve one Customer
[**apiCustomersIdNewsletterDelete**](CustomerApi.md#apiCustomersIdNewsletterDelete) | **DELETE** /api/Customers/{id}/newsletter | 
[**apiCustomersIdNewsletterGet**](CustomerApi.md#apiCustomersIdNewsletterGet) | **GET** /api/Customers/{id}/newsletter | 
[**apiCustomersIdNewsletterPost**](CustomerApi.md#apiCustomersIdNewsletterPost) | **POST** /api/Customers/{id}/newsletter | 
[**apiCustomersIdPatch**](CustomerApi.md#apiCustomersIdPatch) | **PATCH** /api/Customers/{id} | Update one Customer
[**apiCustomersIdProfileGet**](CustomerApi.md#apiCustomersIdProfileGet) | **GET** /api/Customers/{id}/profile | 
[**apiCustomersIdProfilePatch**](CustomerApi.md#apiCustomersIdProfilePatch) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
[**apiCustomersIdRelationGet**](CustomerApi.md#apiCustomersIdRelationGet) | **GET** /api/Customers/{id}/{relation} | 
[**apiCustomersLogoutUserPost**](CustomerApi.md#apiCustomersLogoutUserPost) | **POST** /api/Customers/logout-user | Logout the user on Yoast.com.
[**apiCustomersNewsletterListSubscribePost**](CustomerApi.md#apiCustomersNewsletterListSubscribePost) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
[**apiCustomersNonceGet**](CustomerApi.md#apiCustomersNonceGet) | **GET** /api/Customers/nonce | Get a nonce from Yoast.com
[**apiCustomersPost**](CustomerApi.md#apiCustomersPost) | **POST** /api/Customers | Create one Customer
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

Use /api/roles instead.

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

# **apiCustomersBulkPost**
> \Yoast\MyYoastApiClient\Model\Customer[] apiCustomersBulkPost($bulkDto)

Create many Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bulkDto = new \Yoast\MyYoastApiClient\Model\BulkDto(); // \Yoast\MyYoastApiClient\Model\BulkDto | 

try {
    $result = $apiInstance->apiCustomersBulkPost($bulkDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulkDto** | [**\Yoast\MyYoastApiClient\Model\BulkDto**](../Model/BulkDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer[]**](../Model/Customer.md)

### Authorization

No authorization required

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

# **apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost**
> object apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost($cancelSubscriptionBodyDto, $customerId, $subscriptionId)

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
$subscriptionId = "subscriptionId_example"; // string | 

try {
    $result = $apiInstance->apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost($cancelSubscriptionBodyDto, $customerId, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancelSubscriptionBodyDto** | [**\Yoast\MyYoastApiClient\Model\CancelSubscriptionBodyDto**](../Model/CancelSubscriptionBodyDto.md)|  |
 **customerId** | **string**|  |
 **subscriptionId** | **string**|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersGet**
> \Yoast\MyYoastApiClient\Model\Customer[] apiCustomersGet($fields, $filter, $or, $sort, $join, $perPage, $offset, $page, $cache)

Retrieve many Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$filter = "filter_example"; // string | <h4>Adds fields request condition (multiple conditions) to the request.</h4><i>Syntax:</i> <strong>?filter[]=field||condition||value</strong><br/><i>Examples:</i> <ul><li><strong>?filter[]=name||eq||batman</strong></li><li><strong>?filter[]=isVillain||eq||false&filter[]=city||eq||Arkham</strong> (multiple filters are treated as a combination of AND type of conditions)</li><li><strong>?filter[]=shots||in||12,26</strong> (some conditions accept multiple values separated by commas)</li><li><strong>?filter[]=power||isnull</strong> (some conditions don't accept value)</li></ul><br/>Filter Conditions:<ul><li><strong><code>eq</code></strong> (<code>=</code>, equal)</li><li><strong><code>ne</code></strong> (<code>!=</code>, not equal)</li><li><strong><code>gt</code></strong> (<code>&gt;</code>, greater than)</li><li><strong><code>lt</code></strong> (<code>&lt;</code>, lower that)</li><li><strong><code>gte</code></strong> (<code>&gt;=</code>, greater than or equal)</li><li><strong><code>lte</code></strong> (<code>&lt;=</code>, lower than or equal)</li><li><strong><code>starts</code></strong> (<code>LIKE val%</code>, starts with)</li><li><strong><code>ends</code></strong> (<code>LIKE %val</code>, ends with)</li><li><strong><code>cont</code></strong> (<code>LIKE %val%</code>, contains)</li><li><strong><code>excl</code></strong> (<code>NOT LIKE %val%</code>, not contains)</li><li><strong><code>in</code></strong> (<code>IN</code>, in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>notin</code></strong> (<code>NOT IN</code>, not in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>isnull</code></strong> (<code>IS NULL</code>, is NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>notnull</code></strong> (<code>IS NOT NULL</code>, not NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>between</code></strong> (<code>BETWEEN</code>, between, <strong><em>accepts two values</em></strong>)</li></ul>
$or = "or_example"; // string | <h4>Adds <code>OR</code> conditions to the request.</h4><i>Syntax:</i> <strong>?or[]=field||condition||value</strong><br/>It uses the same conditions as the filter parameter<br/><i>Rules and <i>Examples:</i></i><ul><li>If there is only <strong>one</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as simple filter:</li><ul><li><strong>?or[]=name||eq||batman</strong></li></ul></ul><ul><li>If there are <strong>multiple</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as a compination of <code>OR</code> conditions, as follows:<br><code>WHERE {or} OR {or} OR ...</code></li><ul><li><strong>?or[]=name||eq||batman&or[]=name||eq||joker</strong></li></ul></ul><ul><li>If there are <strong>one</strong> <code>or</code> and <strong>one</strong> <code>filter</code> then it will be interpreted as <code>OR</code> condition, as follows:<br><code>WHERE {filter} OR {or}</code></li><ul><li><strong>?filter[]=name||eq||batman&or[]=name||eq||joker</strong></li></ul></ul><ul><li>If present <strong>both</strong> <code>or</code> and <code>filter</code> in any amount (<strong>one</strong> or <strong>miltiple</strong> each) then both interpreted as a combitation of <code>AND</code> conditions and compared with each other by <code>OR</code> condition, as follows:<br><code>WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)</code></li><ul><li><strong>?filter[]=type||eq||hero&filter[]=status||eq||alive&or[]=type||eq||villain&or[]=status||eq||dead</strong></li></ul></ul>
$sort = "sort_example"; // string | <h4>Adds sort by field (by multiple fields) and order to query result.</h4><i>Syntax:</i> <strong>?sort[]=field,ASC|DESC</strong><br/><i>Examples:</i></i><ul><li><strong>?sort[]=name,ASC</strong></li><li><strong>?sort[]=name,ASC&sort[]=id,DESC</strong></li></ul>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join[]=relation</strong></li><li><strong>?join[]=relation||field1,field2,...</strong></li><li><strong>?join[]=relation1||field11,field12,...&join[]=relation1.nested||field21,field22,...&join[]=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join[]=profile</strong></li><li><strong>?join[]=profile||firstName,email</strong></li><li><strong>?join[]=profile||firstName,email&join[]=notifications||content&join[]=tasks</strong></li><li><strong>?join[]=relation1&join[]=relation1.nested&join[]=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$perPage = 8.14; // float | <h4>Receive <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?per_page=number</strong><br/><i>Example:</i> <strong>?per_page=10</strong>
$offset = 8.14; // float | <h4>Offset <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?offset=number</strong><br/><i>Example:</i> <strong>?offset=10</strong>
$page = 8.14; // float | <h4>Receive a portion of <code>limit</code> entities (alternative to <code>offset</code>). Will be applied if <code>limit</code> is set up.</h4><i>Syntax:</i> <strong>?page=number</strong><br/><i>Example:</i> <strong>?page=2</strong>
$cache = 8.14; // float | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->apiCustomersGet($fields, $filter, $or, $sort, $join, $perPage, $offset, $page, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **filter** | **string**| &lt;h4&gt;Adds fields request condition (multiple conditions) to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?filter[]&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt; &lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;isVillain||eq||false&amp;filter[]&#x3D;city||eq||Arkham&lt;/strong&gt; (multiple filters are treated as a combination of AND type of conditions)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;shots||in||12,26&lt;/strong&gt; (some conditions accept multiple values separated by commas)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;power||isnull&lt;/strong&gt; (some conditions don&#39;t accept value)&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;Filter Conditions:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;eq&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&#x3D;&lt;/code&gt;, equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ne&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;!&#x3D;&lt;/code&gt;, not equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&lt;/code&gt;, greater than)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&lt;/code&gt;, lower that)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&#x3D;&lt;/code&gt;, greater than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&#x3D;&lt;/code&gt;, lower than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;starts&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE val%&lt;/code&gt;, starts with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ends&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val&lt;/code&gt;, ends with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;cont&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val%&lt;/code&gt;, contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;excl&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT LIKE %val%&lt;/code&gt;, not contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;in&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IN&lt;/code&gt;, in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notin&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT IN&lt;/code&gt;, not in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;isnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NULL&lt;/code&gt;, is NULL, &lt;strong&gt;&lt;em&gt;doesn&#39;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NOT NULL&lt;/code&gt;, not NULL, &lt;strong&gt;&lt;em&gt;doesn&#39;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;between&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;BETWEEN&lt;/code&gt;, between, &lt;strong&gt;&lt;em&gt;accepts two values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;/ul&gt; | [optional]
 **or** | **string**| &lt;h4&gt;Adds &lt;code&gt;OR&lt;/code&gt; conditions to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?or[]&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;It uses the same conditions as the filter parameter&lt;br/&gt;&lt;i&gt;Rules and &lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;If there is only &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as simple filter:&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or[]&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;multiple&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as a compination of &lt;code&gt;OR&lt;/code&gt; conditions, as follows:&lt;br&gt;&lt;code&gt;WHERE {or} OR {or} OR ...&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or[]&#x3D;name||eq||batman&amp;or[]&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;filter&lt;/code&gt; then it will be interpreted as &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE {filter} OR {or}&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;name||eq||batman&amp;or[]&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If present &lt;strong&gt;both&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;code&gt;filter&lt;/code&gt; in any amount (&lt;strong&gt;one&lt;/strong&gt; or &lt;strong&gt;miltiple&lt;/strong&gt; each) then both interpreted as a combitation of &lt;code&gt;AND&lt;/code&gt; conditions and compared with each other by &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;type||eq||hero&amp;filter[]&#x3D;status||eq||alive&amp;or[]&#x3D;type||eq||villain&amp;or[]&#x3D;status||eq||dead&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt; | [optional]
 **sort** | **string**| &lt;h4&gt;Adds sort by field (by multiple fields) and order to query result.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?sort[]&#x3D;field,ASC|DESC&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?sort[]&#x3D;name,ASC&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?sort[]&#x3D;name,ASC&amp;sort[]&#x3D;id,DESC&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1||field11,field12,...&amp;join[]&#x3D;relation1.nested||field21,field22,...&amp;join[]&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&amp;join[]&#x3D;notifications||content&amp;join[]&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1&amp;join[]&#x3D;relation1.nested&amp;join[]&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **perPage** | **float**| &lt;h4&gt;Receive &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;10&lt;/strong&gt; | [optional]
 **offset** | **float**| &lt;h4&gt;Offset &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;10&lt;/strong&gt; | [optional]
 **page** | **float**| &lt;h4&gt;Receive a portion of &lt;code&gt;limit&lt;/code&gt; entities (alternative to &lt;code&gt;offset&lt;/code&gt;). Will be applied if &lt;code&gt;limit&lt;/code&gt; is set up.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?page&#x3D;2&lt;/strong&gt; | [optional]
 **cache** | **float**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer[]**](../Model/Customer.md)

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
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdDelete**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdDelete($id)

Delete one Customer

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
    $result = $apiInstance->apiCustomersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

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
 **id** | **string**|  |

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

Enables the customer with the given ID

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
 **id** | **string**|  |

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
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdGet**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdGet($id, $fields, $join, $cache)

Retrieve one Customer

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
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join[]=relation</strong></li><li><strong>?join[]=relation||field1,field2,...</strong></li><li><strong>?join[]=relation1||field11,field12,...&join[]=relation1.nested||field21,field22,...&join[]=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join[]=profile</strong></li><li><strong>?join[]=profile||firstName,email</strong></li><li><strong>?join[]=profile||firstName,email&join[]=notifications||content&join[]=tasks</strong></li><li><strong>?join[]=relation1&join[]=relation1.nested&join[]=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$cache = 8.14; // float | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->apiCustomersIdGet($id, $fields, $join, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1||field11,field12,...&amp;join[]&#x3D;relation1.nested||field21,field22,...&amp;join[]&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&amp;join[]&#x3D;notifications||content&amp;join[]&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1&amp;join[]&#x3D;relation1.nested&amp;join[]&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **cache** | **float**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdNewsletterDelete**
> object apiCustomersIdNewsletterDelete($id)



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
    $result = $apiInstance->apiCustomersIdNewsletterDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdNewsletterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdNewsletterGet**
> object apiCustomersIdNewsletterGet($id)



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
    $result = $apiInstance->apiCustomersIdNewsletterGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdNewsletterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdNewsletterPost**
> object apiCustomersIdNewsletterPost($id)



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
    $result = $apiInstance->apiCustomersIdNewsletterPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdNewsletterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdPatch**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersIdPatch($customer, $id)

Update one Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCustomersIdPatch($customer, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)|  |
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

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
 **id** | **string**|  |

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
 **id** | **string**|  |
 **updateUserToWordpressDto** | [**\Yoast\MyYoastApiClient\Model\UpdateUserToWordpressDto**](../Model/UpdateUserToWordpressDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersIdRelationGet**
> apiCustomersIdRelationGet($relation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$relation = "relation_example"; // string | 

try {
    $apiInstance->apiCustomersIdRelationGet($relation);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRelationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relation** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCustomersLogoutUserPost**
> object apiCustomersLogoutUserPost($logoutUserBodyDto)

Logout the user on Yoast.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$logoutUserBodyDto = new \Yoast\MyYoastApiClient\Model\LogoutUserBodyDto(); // \Yoast\MyYoastApiClient\Model\LogoutUserBodyDto | 

try {
    $result = $apiInstance->apiCustomersLogoutUserPost($logoutUserBodyDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersLogoutUserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logoutUserBodyDto** | [**\Yoast\MyYoastApiClient\Model\LogoutUserBodyDto**](../Model/LogoutUserBodyDto.md)|  |

### Return type

**object**

### Authorization

No authorization required

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

# **apiCustomersPost**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersPost($customer)

Create one Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer = new \Yoast\MyYoastApiClient\Model\Customer(); // \Yoast\MyYoastApiClient\Model\Customer | 

try {
    $result = $apiInstance->apiCustomersPost($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

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

