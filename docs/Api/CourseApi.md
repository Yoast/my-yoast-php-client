# Yoast\MyYoastApiClient\CourseApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseCount**](CourseApi.md#courseCount) | **GET** /Courses/count | Count instances of the model matched by where from the data source.
[**courseCreate**](CourseApi.md#courseCreate) | **POST** /Courses | Create a new instance of the model and persist it into the data source.
[**courseCreateChangeStreamGetCoursesChangeStream**](CourseApi.md#courseCreateChangeStreamGetCoursesChangeStream) | **GET** /Courses/change-stream | Create a change stream.
[**courseCreateChangeStreamPostCoursesChangeStream**](CourseApi.md#courseCreateChangeStreamPostCoursesChangeStream) | **POST** /Courses/change-stream | Create a change stream.
[**courseDeleteById**](CourseApi.md#courseDeleteById) | **DELETE** /Courses/{id} | Delete a model instance by {{id}} from the data source.
[**courseExistsGetCoursesidExists**](CourseApi.md#courseExistsGetCoursesidExists) | **GET** /Courses/{id}/exists | Check whether a model instance exists in the data source.
[**courseExistsHeadCoursesid**](CourseApi.md#courseExistsHeadCoursesid) | **HEAD** /Courses/{id} | Check whether a model instance exists in the data source.
[**courseFind**](CourseApi.md#courseFind) | **GET** /Courses | Find all instances of the model matched by filter from the data source.
[**courseFindById**](CourseApi.md#courseFindById) | **GET** /Courses/{id} | Find a model instance by {{id}} from the data source.
[**courseFindOne**](CourseApi.md#courseFindOne) | **GET** /Courses/findOne | Find first instance of the model matched by filter from the data source.
[**courseFromAcademy**](CourseApi.md#courseFromAcademy) | **PUT** /Courses/fromAcademy | 
[**coursePatchOrCreate**](CourseApi.md#coursePatchOrCreate) | **PATCH** /Courses | Patch an existing model instance or insert a new one into the data source.
[**coursePrototypeCreateProduct**](CourseApi.md#coursePrototypeCreateProduct) | **POST** /Courses/{id}/product | Creates a new instance in product of this model.
[**coursePrototypeDestroyProduct**](CourseApi.md#coursePrototypeDestroyProduct) | **DELETE** /Courses/{id}/product | Deletes product of this model.
[**coursePrototypeGetProduct**](CourseApi.md#coursePrototypeGetProduct) | **GET** /Courses/{id}/product | Fetches hasOne relation product.
[**coursePrototypePatchAttributes**](CourseApi.md#coursePrototypePatchAttributes) | **PATCH** /Courses/{id} | Patch attributes for a model instance and persist it into the data source.
[**coursePrototypeUpdateProduct**](CourseApi.md#coursePrototypeUpdateProduct) | **PUT** /Courses/{id}/product | Update product of this model.
[**courseReplaceByIdPostCoursesidReplace**](CourseApi.md#courseReplaceByIdPostCoursesidReplace) | **POST** /Courses/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**courseReplaceByIdPutCoursesid**](CourseApi.md#courseReplaceByIdPutCoursesid) | **PUT** /Courses/{id} | Replace attributes for a model instance and persist it into the data source.
[**courseReplaceOrCreatePostCoursesReplaceOrCreate**](CourseApi.md#courseReplaceOrCreatePostCoursesReplaceOrCreate) | **POST** /Courses/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**courseReplaceOrCreatePutCourses**](CourseApi.md#courseReplaceOrCreatePutCourses) | **PUT** /Courses | Replace an existing model instance or insert a new one into the data source.
[**courseUpdateAll**](CourseApi.md#courseUpdateAll) | **POST** /Courses/update | Update instances of the model matched by {{where}} from the data source.
[**courseUpsertWithWhere**](CourseApi.md#courseUpsertWithWhere) | **POST** /Courses/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **courseCount**
> \Yoast\MyYoastApiClient\Model\InlineResponse200 courseCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->courseCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseCount: ', $e->getMessage(), PHP_EOL;
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

# **courseCreate**
> \Yoast\MyYoastApiClient\Model\Course courseCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->courseCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseCreateChangeStreamGetCoursesChangeStream**
> \SplFileObject courseCreateChangeStreamGetCoursesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->courseCreateChangeStreamGetCoursesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseCreateChangeStreamGetCoursesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **courseCreateChangeStreamPostCoursesChangeStream**
> \SplFileObject courseCreateChangeStreamPostCoursesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->courseCreateChangeStreamPostCoursesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseCreateChangeStreamPostCoursesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **courseDeleteById**
> object courseDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **courseExistsGetCoursesidExists**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 courseExistsGetCoursesidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseExistsGetCoursesidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseExistsGetCoursesidExists: ', $e->getMessage(), PHP_EOL;
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

# **courseExistsHeadCoursesid**
> \Yoast\MyYoastApiClient\Model\InlineResponse2001 courseExistsHeadCoursesid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->courseExistsHeadCoursesid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseExistsHeadCoursesid: ', $e->getMessage(), PHP_EOL;
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

# **courseFind**
> \Yoast\MyYoastApiClient\Model\Course[] courseFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course[]**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseFindById**
> \Yoast\MyYoastApiClient\Model\Course courseFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseFindOne**
> \Yoast\MyYoastApiClient\Model\Course courseFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->courseFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseFromAcademy**
> \Yoast\MyYoastApiClient\Model\Course courseFromAcademy($course_data, $extra_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$course_data = "course_data_example"; // string | 
$extra_data = "extra_data_example"; // string | 

try {
    $result = $api_instance->courseFromAcademy($course_data, $extra_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseFromAcademy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_data** | **string**|  |
 **extra_data** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePatchOrCreate**
> \Yoast\MyYoastApiClient\Model\Course coursePatchOrCreate($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->coursePatchOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePatchOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePrototypeCreateProduct**
> \Yoast\MyYoastApiClient\Model\Product coursePrototypeCreateProduct($id, $data)

Creates a new instance in product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Course id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->coursePrototypeCreateProduct($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePrototypeCreateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Course id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePrototypeDestroyProduct**
> coursePrototypeDestroyProduct($id)

Deletes product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Course id

try {
    $api_instance->coursePrototypeDestroyProduct($id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePrototypeDestroyProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Course id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePrototypeGetProduct**
> \Yoast\MyYoastApiClient\Model\Product coursePrototypeGetProduct($id, $refresh)

Fetches hasOne relation product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Course id
$refresh = true; // bool | 

try {
    $result = $api_instance->coursePrototypeGetProduct($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePrototypeGetProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Course id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePrototypePatchAttributes**
> \Yoast\MyYoastApiClient\Model\Course coursePrototypePatchAttributes($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Course id
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | An object of model property name/value pairs

try {
    $result = $api_instance->coursePrototypePatchAttributes($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePrototypePatchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Course id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursePrototypeUpdateProduct**
> \Yoast\MyYoastApiClient\Model\Product coursePrototypeUpdateProduct($id, $data)

Update product of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Course id
$data = new \Yoast\MyYoastApiClient\Model\Product(); // \Yoast\MyYoastApiClient\Model\Product | 

try {
    $result = $api_instance->coursePrototypeUpdateProduct($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->coursePrototypeUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Course id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseReplaceByIdPostCoursesidReplace**
> \Yoast\MyYoastApiClient\Model\Course courseReplaceByIdPostCoursesidReplace($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->courseReplaceByIdPostCoursesidReplace($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseReplaceByIdPostCoursesidReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseReplaceByIdPutCoursesid**
> \Yoast\MyYoastApiClient\Model\Course courseReplaceByIdPutCoursesid($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$id = "id_example"; // string | Model id
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->courseReplaceByIdPutCoursesid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseReplaceByIdPutCoursesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseReplaceOrCreatePostCoursesReplaceOrCreate**
> \Yoast\MyYoastApiClient\Model\Course courseReplaceOrCreatePostCoursesReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->courseReplaceOrCreatePostCoursesReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseReplaceOrCreatePostCoursesReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseReplaceOrCreatePutCourses**
> \Yoast\MyYoastApiClient\Model\Course courseReplaceOrCreatePutCourses($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | Model instance data

try {
    $result = $api_instance->courseReplaceOrCreatePutCourses($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseReplaceOrCreatePutCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| Model instance data | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseUpdateAll**
> \Yoast\MyYoastApiClient\Model\InlineResponse2002 courseUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | An object of model property name/value pairs

try {
    $result = $api_instance->courseUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseUpsertWithWhere**
> \Yoast\MyYoastApiClient\Model\Course courseUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Yoast\MyYoastApiClient\Api\CourseApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Yoast\MyYoastApiClient\Model\Course(); // \Yoast\MyYoastApiClient\Model\Course | An object of model property name/value pairs

try {
    $result = $api_instance->courseUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
