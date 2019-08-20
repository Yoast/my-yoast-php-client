# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseEnrollmentBulkInvite**](CourseEnrollmentApi.md#courseEnrollmentBulkInvite) | **POST** /CourseEnrollments/bulkInvite | Bulk invites another Customer by email to use this Course Enrollment.
[**courseEnrollmentCount**](CourseEnrollmentApi.md#courseEnrollmentCount) | **GET** /CourseEnrollments/count | Count instances of the model matched by where from the data source.
[**courseEnrollmentCreate**](CourseEnrollmentApi.md#courseEnrollmentCreate) | **POST** /CourseEnrollments | Create a new instance of the model and persist it into the data source.
[**courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream**](CourseEnrollmentApi.md#courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream) | **GET** /CourseEnrollments/change-stream | Create a change stream.
[**courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream**](CourseEnrollmentApi.md#courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream) | **POST** /CourseEnrollments/change-stream | Create a change stream.
[**courseEnrollmentDeleteById**](CourseEnrollmentApi.md#courseEnrollmentDeleteById) | **DELETE** /CourseEnrollments/{id} | Delete a model instance by {{id}} from the data source.
[**courseEnrollmentExistsGetCourseEnrollmentsidExists**](CourseEnrollmentApi.md#courseEnrollmentExistsGetCourseEnrollmentsidExists) | **GET** /CourseEnrollments/{id}/exists | Check whether a model instance exists in the data source.
[**courseEnrollmentExistsHeadCourseEnrollmentsid**](CourseEnrollmentApi.md#courseEnrollmentExistsHeadCourseEnrollmentsid) | **HEAD** /CourseEnrollments/{id} | Check whether a model instance exists in the data source.
[**courseEnrollmentFind**](CourseEnrollmentApi.md#courseEnrollmentFind) | **GET** /CourseEnrollments | Find all instances of the model matched by filter from the data source.
[**courseEnrollmentFindById**](CourseEnrollmentApi.md#courseEnrollmentFindById) | **GET** /CourseEnrollments/{id} | Find a model instance by {{id}} from the data source.
[**courseEnrollmentFindOne**](CourseEnrollmentApi.md#courseEnrollmentFindOne) | **GET** /CourseEnrollments/findOne | Find first instance of the model matched by filter from the data source.
[**courseEnrollmentFromAcademy**](CourseEnrollmentApi.md#courseEnrollmentFromAcademy) | **PUT** /CourseEnrollments/fromAcademy | 
[**courseEnrollmentGetLegacyExpiring**](CourseEnrollmentApi.md#courseEnrollmentGetLegacyExpiring) | **GET** /CourseEnrollments/getLegacyExpiring | Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.
[**courseEnrollmentInvite**](CourseEnrollmentApi.md#courseEnrollmentInvite) | **POST** /CourseEnrollments/{id}/invite | Invites another Customer by email to use this Course Enrollment.
[**courseEnrollmentPatchOrCreate**](CourseEnrollmentApi.md#courseEnrollmentPatchOrCreate) | **PATCH** /CourseEnrollments | Patch an existing model instance or insert a new one into the data source.
[**courseEnrollmentPrototypeGetBuyer**](CourseEnrollmentApi.md#courseEnrollmentPrototypeGetBuyer) | **GET** /CourseEnrollments/{id}/buyer | Fetches belongsTo relation buyer.
[**courseEnrollmentPrototypeGetCourse**](CourseEnrollmentApi.md#courseEnrollmentPrototypeGetCourse) | **GET** /CourseEnrollments/{id}/course | Fetches belongsTo relation course.
[**courseEnrollmentPrototypeGetOrder**](CourseEnrollmentApi.md#courseEnrollmentPrototypeGetOrder) | **GET** /CourseEnrollments/{id}/order | Fetches belongsTo relation order.
[**courseEnrollmentPrototypeGetProduct**](CourseEnrollmentApi.md#courseEnrollmentPrototypeGetProduct) | **GET** /CourseEnrollments/{id}/product | Fetches belongsTo relation product.
[**courseEnrollmentPrototypeGetStudent**](CourseEnrollmentApi.md#courseEnrollmentPrototypeGetStudent) | **GET** /CourseEnrollments/{id}/student | Fetches belongsTo relation student.
[**courseEnrollmentPrototypePatchAttributes**](CourseEnrollmentApi.md#courseEnrollmentPrototypePatchAttributes) | **PATCH** /CourseEnrollments/{id} | Patch attributes for a model instance and persist it into the data source.
[**courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace**](CourseEnrollmentApi.md#courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace) | **POST** /CourseEnrollments/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**courseEnrollmentReplaceByIdPutCourseEnrollmentsid**](CourseEnrollmentApi.md#courseEnrollmentReplaceByIdPutCourseEnrollmentsid) | **PUT** /CourseEnrollments/{id} | Replace attributes for a model instance and persist it into the data source.
[**courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate**](CourseEnrollmentApi.md#courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate) | **POST** /CourseEnrollments/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**courseEnrollmentReplaceOrCreatePutCourseEnrollments**](CourseEnrollmentApi.md#courseEnrollmentReplaceOrCreatePutCourseEnrollments) | **PUT** /CourseEnrollments | Replace an existing model instance or insert a new one into the data source.
[**courseEnrollmentTransfer**](CourseEnrollmentApi.md#courseEnrollmentTransfer) | **POST** /CourseEnrollments/transfer | 
[**courseEnrollmentUpdateAll**](CourseEnrollmentApi.md#courseEnrollmentUpdateAll) | **POST** /CourseEnrollments/update | Update instances of the model matched by {{where}} from the data source.
[**courseEnrollmentUpsertWithWhere**](CourseEnrollmentApi.md#courseEnrollmentUpsertWithWhere) | **POST** /CourseEnrollments/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **courseEnrollmentBulkInvite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentBulkInvite($line_item_id, $line_item_number, $email)

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$line_item_id = "line_item_id_example"; // string | 
$line_item_number = "line_item_number_example"; // string | 
$email = "email_example"; // string | 

try {
    $result = $api_instance->courseEnrollmentBulkInvite($line_item_id, $line_item_number, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentBulkInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**|  | [optional]
 **line_item_number** | **string**|  | [optional]
 **email** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 courseEnrollmentCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->courseEnrollmentCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentCount: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentCreate**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream**
> \SplFileObject courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentCreateChangeStreamGetCourseEnrollmentsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream**
> \SplFileObject courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentCreateChangeStreamPostCourseEnrollmentsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentDeleteById**
> object courseEnrollmentDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseEnrollmentDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentExistsGetCourseEnrollmentsidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 courseEnrollmentExistsGetCourseEnrollmentsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseEnrollmentExistsGetCourseEnrollmentsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentExistsGetCourseEnrollmentsidExists: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentExistsHeadCourseEnrollmentsid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 courseEnrollmentExistsHeadCourseEnrollmentsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseEnrollmentExistsHeadCourseEnrollmentsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentExistsHeadCourseEnrollmentsid: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentFind**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseEnrollmentFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentFindById**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseEnrollmentFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentFindOne**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseEnrollmentFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentFromAcademy**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentFromAcademy($progress_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$progress_data = "progress_data_example"; // string | 

try {
    $result = $api_instance->courseEnrollmentFromAcademy($progress_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentFromAcademy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **progress_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentGetLegacyExpiring**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentGetLegacyExpiring($from, $until)

Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $api_instance->courseEnrollmentGetLegacyExpiring($from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentGetLegacyExpiring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**|  |
 **until** | **\DateTime**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentInvite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentInvite($id, $email)

Invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | 
$email = "email_example"; // string | 

try {
    $result = $api_instance->courseEnrollmentInvite($id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **email** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPatchOrCreate**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentPatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentPatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypeGetBuyer**
> \Yoast\MyYoastApiClient\Model\Customer courseEnrollmentPrototypeGetBuyer($id, $refresh)

Fetches belongsTo relation buyer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$refresh = true; // bool | 

try {
    $result = $api_instance->courseEnrollmentPrototypeGetBuyer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypeGetBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypeGetCourse**
> \Yoast\MyYoastApiClient\Model\Course courseEnrollmentPrototypeGetCourse($id, $refresh)

Fetches belongsTo relation course.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$refresh = true; // bool | 

try {
    $result = $api_instance->courseEnrollmentPrototypeGetCourse($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypeGetCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypeGetOrder**
> \Yoast\MyYoastApiClient\Model\Order courseEnrollmentPrototypeGetOrder($id, $refresh)

Fetches belongsTo relation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$refresh = true; // bool | 

try {
    $result = $api_instance->courseEnrollmentPrototypeGetOrder($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypeGetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypeGetProduct**
> \Yoast\MyYoastApiClient\Model\Product courseEnrollmentPrototypeGetProduct($id, $refresh)

Fetches belongsTo relation product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$refresh = true; // bool | 

try {
    $result = $api_instance->courseEnrollmentPrototypeGetProduct($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypeGetProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypeGetStudent**
> \Yoast\MyYoastApiClient\Model\Customer courseEnrollmentPrototypeGetStudent($id, $refresh)

Fetches belongsTo relation student.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$refresh = true; // bool | 

try {
    $result = $api_instance->courseEnrollmentPrototypeGetStudent($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypeGetStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentPrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentPrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | CourseEnrollment id
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | An object of model property name/value pairs

try {
    $result = $api_instance->courseEnrollmentPrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentPrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| CourseEnrollment id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentReplaceByIdPostCourseEnrollmentsidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentReplaceByIdPutCourseEnrollmentsid**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentReplaceByIdPutCourseEnrollmentsid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentReplaceByIdPutCourseEnrollmentsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentReplaceByIdPutCourseEnrollmentsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentReplaceOrCreatePostCourseEnrollmentsReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentReplaceOrCreatePutCourseEnrollments**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentReplaceOrCreatePutCourseEnrollments($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | Model instance data

try {
    $result = $api_instance->courseEnrollmentReplaceOrCreatePutCourseEnrollments($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentReplaceOrCreatePutCourseEnrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentTransfer**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentTransfer($from_source_id, $to_source_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$from_source_id = 1.2; // double | 
$to_source_id = 1.2; // double | 

try {
    $result = $api_instance->courseEnrollmentTransfer($from_source_id, $to_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_source_id** | **double**|  |
 **to_source_id** | **double**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 courseEnrollmentUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | An object of model property name/value pairs

try {
    $result = $api_instance->courseEnrollmentUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseEnrollmentUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\CourseEnrollment(); // \Yoast\MyYoastApiClient\Model\CourseEnrollment | An object of model property name/value pairs

try {
    $result = $api_instance->courseEnrollmentUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

