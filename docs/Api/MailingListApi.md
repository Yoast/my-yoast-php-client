# Yoast\MyYoastApiClient\MailingListApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkGetRoute**](MailingListApi.md#checkgetroute) | **GET** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | 
[**getStatus**](MailingListApi.md#getstatus) | **GET** /api/Mailing-list/status | Get the subscription status.
[**isSubscribedToNewsletter**](MailingListApi.md#issubscribedtonewsletter) | **GET** /api/Mailing-list/isSubscribedToNewsletter | Get the subscription status.
[**mailChimpWebhook**](MailingListApi.md#mailchimpwebhook) | **POST** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | Entry point for the mailchimp webhooks
[**mailblueWebhook**](MailingListApi.md#mailbluewebhook) | **POST** /api/Mailing-list/newsletter/wALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJV | Entry point for the mailblue webhooks
[**removeContactCustomField**](MailingListApi.md#removecontactcustomfield) | **DELETE** /api/Mailing-list/fieldValue | Delete contact tags and/or fields.
[**setContactCustomField**](MailingListApi.md#setcontactcustomfield) | **POST** /api/Mailing-list/fieldValue | Update contact tags and/or fields.
[**setContactTag**](MailingListApi.md#setcontacttag) | **POST** /api/Mailing-list/contactTag | Update contact tags and/or fields.
[**subscribe**](MailingListApi.md#subscribe) | **POST** /api/Mailing-list/subscribe | Subscribe contact to a mailing list.
[**subscribeToNewsletter**](MailingListApi.md#subscribetonewsletter) | **POST** /api/Mailing-list/subscribeToNewsletter | Subscribe contact to the newsletter.
[**unsubscribe**](MailingListApi.md#unsubscribe) | **POST** /api/Mailing-list/unsubscribe | Unsubscribe to a mailing list.
[**unsubscribeFromNewsletter**](MailingListApi.md#unsubscribefromnewsletter) | **POST** /api/Mailing-list/unsubscribeFromNewsletter | Unsubscribe to a mailing list.

# **checkGetRoute**
> checkGetRoute()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->checkGetRoute();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->checkGetRoute: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> getStatus($email, $list)

Get the subscription status.

Get the subscription status for a contact and list name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | 
$list = "list_example"; // string | 

try {
    $apiInstance->getStatus($email, $list);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **list** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isSubscribedToNewsletter**
> isSubscribedToNewsletter($email)

Get the subscription status.

Get the subscription status for a contact and list name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | 

try {
    $apiInstance->isSubscribedToNewsletter($email);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->isSubscribedToNewsletter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailChimpWebhook**
> mailChimpWebhook()

Entry point for the mailchimp webhooks

Digests the mailchimp subscribe webhook response to subscribe a customer(contact) to a mailblue list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->mailChimpWebhook();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailChimpWebhook: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailblueWebhook**
> mailblueWebhook()

Entry point for the mailblue webhooks

Digests the mailblue webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->mailblueWebhook();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailblueWebhook: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeContactCustomField**
> removeContactCustomField($body)

Delete contact tags and/or fields.

Update contact tags and/or fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\FieldValueDto(); // \Yoast\MyYoastApiClient\Model\FieldValueDto | 

try {
    $apiInstance->removeContactCustomField($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->removeContactCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\FieldValueDto**](../Model/FieldValueDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setContactCustomField**
> setContactCustomField($body)

Update contact tags and/or fields.

Update contact tags and/or fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\FieldValueDto(); // \Yoast\MyYoastApiClient\Model\FieldValueDto | 

try {
    $apiInstance->setContactCustomField($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->setContactCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\FieldValueDto**](../Model/FieldValueDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setContactTag**
> setContactTag($body)

Update contact tags and/or fields.

Update contact tags and/or fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TagDto(); // \Yoast\MyYoastApiClient\Model\TagDto | 

try {
    $apiInstance->setContactTag($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->setContactTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TagDto**](../Model/TagDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribe**
> subscribe($body)

Subscribe contact to a mailing list.

subscribes a contact to a mailing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\SubscribeDto(); // \Yoast\MyYoastApiClient\Model\SubscribeDto | 

try {
    $apiInstance->subscribe($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->subscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SubscribeDto**](../Model/SubscribeDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeToNewsletter**
> subscribeToNewsletter()

Subscribe contact to the newsletter.

subscribes a contact to a mailing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->subscribeToNewsletter();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->subscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribe**
> unsubscribe($body)

Unsubscribe to a mailing list.

Unsubscribes a contact to a mailing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UnsubscribeDto(); // \Yoast\MyYoastApiClient\Model\UnsubscribeDto | 

try {
    $apiInstance->unsubscribe($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->unsubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UnsubscribeDto**](../Model/UnsubscribeDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeFromNewsletter**
> unsubscribeFromNewsletter()

Unsubscribe to a mailing list.

Unsubscribes a contact to a mailing list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\MailingListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->unsubscribeFromNewsletter();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->unsubscribeFromNewsletter: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

