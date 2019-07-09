# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCourseEnrollmentsBulkInvitePost**](CourseEnrollmentApi.md#apicourseenrollmentsbulkinvitepost) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
[**apiCourseEnrollmentsBulkPost**](CourseEnrollmentApi.md#apicourseenrollmentsbulkpost) | **POST** /api/CourseEnrollments/bulk | Create many CourseEnrollment
[**apiCourseEnrollmentsFromAcademyPut**](CourseEnrollmentApi.md#apicourseenrollmentsfromacademyput) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
[**apiCourseEnrollmentsGet**](CourseEnrollmentApi.md#apicourseenrollmentsget) | **GET** /api/CourseEnrollments | Retrieve many CourseEnrollment
[**apiCourseEnrollmentsGetLegacyExpiringGet**](CourseEnrollmentApi.md#apicourseenrollmentsgetlegacyexpiringget) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
[**apiCourseEnrollmentsIdDelete**](CourseEnrollmentApi.md#apicourseenrollmentsiddelete) | **DELETE** /api/CourseEnrollments/{id} | Delete one CourseEnrollment
[**apiCourseEnrollmentsIdGet**](CourseEnrollmentApi.md#apicourseenrollmentsidget) | **GET** /api/CourseEnrollments/{id} | Retrieve one CourseEnrollment
[**apiCourseEnrollmentsIdInvitePost**](CourseEnrollmentApi.md#apicourseenrollmentsidinvitepost) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
[**apiCourseEnrollmentsIdPatch**](CourseEnrollmentApi.md#apicourseenrollmentsidpatch) | **PATCH** /api/CourseEnrollments/{id} | Update one CourseEnrollment
[**apiCourseEnrollmentsPost**](CourseEnrollmentApi.md#apicourseenrollmentspost) | **POST** /api/CourseEnrollments | Create one CourseEnrollment
[**apiCourseEnrollmentsTransferPost**](CourseEnrollmentApi.md#apicourseenrollmentstransferpost) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments

# **apiCourseEnrollmentsBulkInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsBulkInvitePost($body)

Bulk invite for Course Enrollment.

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\BulkInviteDto(); // \Yoast\MyYoastApiClient\Model\BulkInviteDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsBulkInvitePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsBulkInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\BulkInviteDto**](../Model/BulkInviteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsBulkPost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsBulkPost($body)

Create many CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->apiCourseEnrollmentsBulkPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsFromAcademyPut**
> apiCourseEnrollmentsFromAcademyPut($body)

Update a CourseEnrollment

Updates the progress for a certain course and student with data from academy.yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto(); // \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto | 

try {
    $apiInstance->apiCourseEnrollmentsFromAcademyPut($body);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsFromAcademyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto**](../Model/CourseEnrollmentFromAcademyDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsGet($fields, $filter, $or, $sort, $join, $perPage, $offset, $page, $cache)

Retrieve many CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$filter = "filter_example"; // string | <h4>Adds fields request condition (multiple conditions) to the request.</h4><i>Syntax:</i> <strong>?filter[]=field||condition||value</strong><br/><i>Examples:</i> <ul><li><strong>?filter[]=name||eq||batman</strong></li><li><strong>?filter[]=isVillain||eq||false&filter[]=city||eq||Arkham</strong> (multiple filters are treated as a combination of AND type of conditions)</li><li><strong>?filter[]=shots||in||12,26</strong> (some conditions accept multiple values separated by commas)</li><li><strong>?filter[]=power||isnull</strong> (some conditions don't accept value)</li></ul><br/>Filter Conditions:<ul><li><strong><code>eq</code></strong> (<code>=</code>, equal)</li><li><strong><code>ne</code></strong> (<code>!=</code>, not equal)</li><li><strong><code>gt</code></strong> (<code>&gt;</code>, greater than)</li><li><strong><code>lt</code></strong> (<code>&lt;</code>, lower that)</li><li><strong><code>gte</code></strong> (<code>&gt;=</code>, greater than or equal)</li><li><strong><code>lte</code></strong> (<code>&lt;=</code>, lower than or equal)</li><li><strong><code>starts</code></strong> (<code>LIKE val%</code>, starts with)</li><li><strong><code>ends</code></strong> (<code>LIKE %val</code>, ends with)</li><li><strong><code>cont</code></strong> (<code>LIKE %val%</code>, contains)</li><li><strong><code>excl</code></strong> (<code>NOT LIKE %val%</code>, not contains)</li><li><strong><code>in</code></strong> (<code>IN</code>, in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>notin</code></strong> (<code>NOT IN</code>, not in range, <strong><em>accepts multiple values</em></strong>)</li><li><strong><code>isnull</code></strong> (<code>IS NULL</code>, is NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>notnull</code></strong> (<code>IS NOT NULL</code>, not NULL, <strong><em>doesn't accept value</em></strong>)</li><li><strong><code>between</code></strong> (<code>BETWEEN</code>, between, <strong><em>accepts two values</em></strong>)</li></ul>
$or = "or_example"; // string | <h4>Adds <code>OR</code> conditions to the request.</h4><i>Syntax:</i> <strong>?or[]=field||condition||value</strong><br/>It uses the same conditions as the filter parameter<br/><i>Rules and <i>Examples:</i></i><ul><li>If there is only <strong>one</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as simple filter:</li><ul><li><strong>?or[]=name||eq||batman</strong></li></ul></ul><ul><li>If there are <strong>multiple</strong> <code>or</code> present (without <code>filter</code>) then it will be interpreted as a compination of <code>OR</code> conditions, as follows:<br><code>WHERE {or} OR {or} OR ...</code></li><ul><li><strong>?or[]=name||eq||batman&or[]=name||eq||joker</strong></li></ul></ul><ul><li>If there are <strong>one</strong> <code>or</code> and <strong>one</strong> <code>filter</code> then it will be interpreted as <code>OR</code> condition, as follows:<br><code>WHERE {filter} OR {or}</code></li><ul><li><strong>?filter[]=name||eq||batman&or[]=name||eq||joker</strong></li></ul></ul><ul><li>If present <strong>both</strong> <code>or</code> and <code>filter</code> in any amount (<strong>one</strong> or <strong>miltiple</strong> each) then both interpreted as a combitation of <code>AND</code> conditions and compared with each other by <code>OR</code> condition, as follows:<br><code>WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)</code></li><ul><li><strong>?filter[]=type||eq||hero&filter[]=status||eq||alive&or[]=type||eq||villain&or[]=status||eq||dead</strong></li></ul></ul>
$sort = "sort_example"; // string | <h4>Adds sort by field (by multiple fields) and order to query result.</h4><i>Syntax:</i> <strong>?sort[]=field,ASC|DESC</strong><br/><i>Examples:</i></i><ul><li><strong>?sort[]=name,ASC</strong></li><li><strong>?sort[]=name,ASC&sort[]=id,DESC</strong></li></ul>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join[]=relation</strong></li><li><strong>?join[]=relation||field1,field2,...</strong></li><li><strong>?join[]=relation1||field11,field12,...&join[]=relation1.nested||field21,field22,...&join[]=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join[]=profile</strong></li><li><strong>?join[]=profile||firstName,email</strong></li><li><strong>?join[]=profile||firstName,email&join[]=notifications||content&join[]=tasks</strong></li><li><strong>?join[]=relation1&join[]=relation1.nested&join[]=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$perPage = 1.2; // int | <h4>Receive <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?per_page=number</strong><br/><i>Example:</i> <strong>?per_page=10</strong>
$offset = 1.2; // int | <h4>Offset <code>N</code> amount of entities.</h4><i>Syntax:</i> <strong>?offset=number</strong><br/><i>Example:</i> <strong>?offset=10</strong>
$page = 1.2; // int | <h4>Receive a portion of <code>limit</code> entities (alternative to <code>offset</code>). Will be applied if <code>limit</code> is set up.</h4><i>Syntax:</i> <strong>?page=number</strong><br/><i>Example:</i> <strong>?page=2</strong>
$cache = 1.2; // int | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->apiCourseEnrollmentsGet($fields, $filter, $or, $sort, $join, $perPage, $offset, $page, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **filter** | **string**| &lt;h4&gt;Adds fields request condition (multiple conditions) to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?filter[]&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt; &lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;isVillain||eq||false&amp;filter[]&#x3D;city||eq||Arkham&lt;/strong&gt; (multiple filters are treated as a combination of AND type of conditions)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;shots||in||12,26&lt;/strong&gt; (some conditions accept multiple values separated by commas)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;power||isnull&lt;/strong&gt; (some conditions don&#x27;t accept value)&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;Filter Conditions:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;eq&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&#x3D;&lt;/code&gt;, equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ne&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;!&#x3D;&lt;/code&gt;, not equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&lt;/code&gt;, greater than)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lt&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&lt;/code&gt;, lower that)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;gte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;gt;&#x3D;&lt;/code&gt;, greater than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;lte&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;&amp;lt;&#x3D;&lt;/code&gt;, lower than or equal)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;starts&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE val%&lt;/code&gt;, starts with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;ends&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val&lt;/code&gt;, ends with)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;cont&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;LIKE %val%&lt;/code&gt;, contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;excl&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT LIKE %val%&lt;/code&gt;, not contains)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;in&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IN&lt;/code&gt;, in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notin&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;NOT IN&lt;/code&gt;, not in range, &lt;strong&gt;&lt;em&gt;accepts multiple values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;isnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NULL&lt;/code&gt;, is NULL, &lt;strong&gt;&lt;em&gt;doesn&#x27;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;notnull&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;IS NOT NULL&lt;/code&gt;, not NULL, &lt;strong&gt;&lt;em&gt;doesn&#x27;t accept value&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;&lt;code&gt;between&lt;/code&gt;&lt;/strong&gt; (&lt;code&gt;BETWEEN&lt;/code&gt;, between, &lt;strong&gt;&lt;em&gt;accepts two values&lt;/em&gt;&lt;/strong&gt;)&lt;/li&gt;&lt;/ul&gt; | [optional]
 **or** | **string**| &lt;h4&gt;Adds &lt;code&gt;OR&lt;/code&gt; conditions to the request.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?or[]&#x3D;field||condition||value&lt;/strong&gt;&lt;br/&gt;It uses the same conditions as the filter parameter&lt;br/&gt;&lt;i&gt;Rules and &lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;If there is only &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as simple filter:&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or[]&#x3D;name||eq||batman&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;multiple&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; present (without &lt;code&gt;filter&lt;/code&gt;) then it will be interpreted as a compination of &lt;code&gt;OR&lt;/code&gt; conditions, as follows:&lt;br&gt;&lt;code&gt;WHERE {or} OR {or} OR ...&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?or[]&#x3D;name||eq||batman&amp;or[]&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If there are &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;strong&gt;one&lt;/strong&gt; &lt;code&gt;filter&lt;/code&gt; then it will be interpreted as &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE {filter} OR {or}&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;name||eq||batman&amp;or[]&#x3D;name||eq||joker&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt;&lt;ul&gt;&lt;li&gt;If present &lt;strong&gt;both&lt;/strong&gt; &lt;code&gt;or&lt;/code&gt; and &lt;code&gt;filter&lt;/code&gt; in any amount (&lt;strong&gt;one&lt;/strong&gt; or &lt;strong&gt;miltiple&lt;/strong&gt; each) then both interpreted as a combitation of &lt;code&gt;AND&lt;/code&gt; conditions and compared with each other by &lt;code&gt;OR&lt;/code&gt; condition, as follows:&lt;br&gt;&lt;code&gt;WHERE ({filter} AND {filter} AND ...) OR ({or} AND {or} AND ...)&lt;/code&gt;&lt;/li&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?filter[]&#x3D;type||eq||hero&amp;filter[]&#x3D;status||eq||alive&amp;or[]&#x3D;type||eq||villain&amp;or[]&#x3D;status||eq||dead&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/ul&gt; | [optional]
 **sort** | **string**| &lt;h4&gt;Adds sort by field (by multiple fields) and order to query result.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?sort[]&#x3D;field,ASC|DESC&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?sort[]&#x3D;name,ASC&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?sort[]&#x3D;name,ASC&amp;sort[]&#x3D;id,DESC&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1||field11,field12,...&amp;join[]&#x3D;relation1.nested||field21,field22,...&amp;join[]&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&amp;join[]&#x3D;notifications||content&amp;join[]&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1&amp;join[]&#x3D;relation1.nested&amp;join[]&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **perPage** | **int**| &lt;h4&gt;Receive &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?per_page&#x3D;10&lt;/strong&gt; | [optional]
 **offset** | **int**| &lt;h4&gt;Offset &lt;code&gt;N&lt;/code&gt; amount of entities.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?offset&#x3D;10&lt;/strong&gt; | [optional]
 **page** | **int**| &lt;h4&gt;Receive a portion of &lt;code&gt;limit&lt;/code&gt; entities (alternative to &lt;code&gt;offset&lt;/code&gt;). Will be applied if &lt;code&gt;limit&lt;/code&gt; is set up.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?page&#x3D;number&lt;/strong&gt;&lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?page&#x3D;2&lt;/strong&gt; | [optional]
 **cache** | **int**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsGetLegacyExpiringGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsGetLegacyExpiringGet($from, $until)

Get legacy course enrollments that expire between two given dates

Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | 
$until = "until_example"; // string | 

try {
    $result = $apiInstance->apiCourseEnrollmentsGetLegacyExpiringGet($from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsGetLegacyExpiringGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  |
 **until** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdDelete**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdDelete($id)

Delete one CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1.2; // int | 

try {
    $result = $apiInstance->apiCourseEnrollmentsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdGet($id, $fields, $join, $cache)

Retrieve one CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1.2; // int | 
$fields = "fields_example"; // string | <h4>Selects fields that should be returned in the reponse body.</h4><i>Syntax:</i> <strong>?fields=field1,field2,...</strong> <br/><i>Example:</i> <strong>?fields=email,name</strong>
$join = "join_example"; // string | <h4>Receive joined relational objects in GET result (with all or selected fields).</h4><i>Syntax:</i><ul><li><strong>?join[]=relation</strong></li><li><strong>?join[]=relation||field1,field2,...</strong></li><li><strong>?join[]=relation1||field11,field12,...&join[]=relation1.nested||field21,field22,...&join[]=...</strong></li></ul><br/><i>Examples:</i></i><ul><li><strong>?join[]=profile</strong></li><li><strong>?join[]=profile||firstName,email</strong></li><li><strong>?join[]=profile||firstName,email&join[]=notifications||content&join[]=tasks</strong></li><li><strong>?join[]=relation1&join[]=relation1.nested&join[]=relation1.nested.deepnested</strong></li></ul><strong><i>Notice:</i></strong> <code>id</code> field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above.
$cache = 1.2; // int | <h4>Reset cache (if was enabled) and receive entities from the DB.</h4><i>Usage:</i> <strong>?cache=0</strong>

try {
    $result = $apiInstance->apiCourseEnrollmentsIdGet($id, $fields, $join, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **fields** | **string**| &lt;h4&gt;Selects fields that should be returned in the reponse body.&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;field1,field2,...&lt;/strong&gt; &lt;br/&gt;&lt;i&gt;Example:&lt;/i&gt; &lt;strong&gt;?fields&#x3D;email,name&lt;/strong&gt; | [optional]
 **join** | **string**| &lt;h4&gt;Receive joined relational objects in GET result (with all or selected fields).&lt;/h4&gt;&lt;i&gt;Syntax:&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation||field1,field2,...&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1||field11,field12,...&amp;join[]&#x3D;relation1.nested||field21,field22,...&amp;join[]&#x3D;...&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;&lt;i&gt;Examples:&lt;/i&gt;&lt;/i&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;profile||firstName,email&amp;join[]&#x3D;notifications||content&amp;join[]&#x3D;tasks&lt;/strong&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;?join[]&#x3D;relation1&amp;join[]&#x3D;relation1.nested&amp;join[]&#x3D;relation1.nested.deepnested&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;strong&gt;&lt;i&gt;Notice:&lt;/i&gt;&lt;/strong&gt; &lt;code&gt;id&lt;/code&gt; field always persists in relational objects. To use nested relations, the parent level MUST be set before the child level like example above. | [optional]
 **cache** | **int**| &lt;h4&gt;Reset cache (if was enabled) and receive entities from the DB.&lt;/h4&gt;&lt;i&gt;Usage:&lt;/i&gt; &lt;strong&gt;?cache&#x3D;0&lt;/strong&gt; | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdInvitePost($body, $id)

Invite a customer

Invites another Customer by email to use this Course Enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\InviteDto(); // \Yoast\MyYoastApiClient\Model\InviteDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCourseEnrollmentsIdInvitePost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\InviteDto**](../Model/InviteDto.md)|  |
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdPatch**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdPatch($body, $id)

Update one CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | 
$id = 1.2; // int | 

try {
    $result = $apiInstance->apiCourseEnrollmentsIdPatch($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)|  |
 **id** | **int**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsPost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsPost($body)

Create one CourseEnrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | 

try {
    $result = $apiInstance->apiCourseEnrollmentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsTransferPost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsTransferPost($body)

Transfer course enrollments

Transfers all Course Enrollments from one Customer to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferDto(); // \Yoast\MyYoastApiClient\Model\TransferDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsTransferPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TransferDto**](../Model/TransferDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

