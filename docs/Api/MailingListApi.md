# Yoast\MyYoastApiClient\MailingListApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingListControllerCheckGetRoute**](MailingListApi.md#mailinglistcontrollercheckgetroute) | **GET** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | 
[**mailingListControllerGetStatus**](MailingListApi.md#mailinglistcontrollergetstatus) | **GET** /api/Mailing-list/status | Get the subscription status.
[**mailingListControllerIsSubscribedToNewsletter**](MailingListApi.md#mailinglistcontrollerissubscribedtonewsletter) | **GET** /api/Mailing-list/isSubscribedToNewsletter | Get the subscription status.
[**mailingListControllerMailChimpWebhook**](MailingListApi.md#mailinglistcontrollermailchimpwebhook) | **POST** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | Entry point for the mailchimp webhooks
[**mailingListControllerMailblueWebhook**](MailingListApi.md#mailinglistcontrollermailbluewebhook) | **POST** /api/Mailing-list/newsletter/wALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJV | Entry point for the mailblue webhooks
[**mailingListControllerRemoveContactCustomField**](MailingListApi.md#mailinglistcontrollerremovecontactcustomfield) | **DELETE** /api/Mailing-list/fieldValue | Delete contact tags and/or fields.
[**mailingListControllerSetContactCustomField**](MailingListApi.md#mailinglistcontrollersetcontactcustomfield) | **POST** /api/Mailing-list/fieldValue | Update contact tags and/or fields.
[**mailingListControllerSetContactTag**](MailingListApi.md#mailinglistcontrollersetcontacttag) | **POST** /api/Mailing-list/contactTag | Update contact tags and/or fields.
[**mailingListControllerSubscribe**](MailingListApi.md#mailinglistcontrollersubscribe) | **POST** /api/Mailing-list/subscribe | Subscribe contact to a mailing list.
[**mailingListControllerSubscribeToNewsletter**](MailingListApi.md#mailinglistcontrollersubscribetonewsletter) | **POST** /api/Mailing-list/subscribeToNewsletter | Subscribe contact to the newsletter.
[**mailingListControllerUnsubscribe**](MailingListApi.md#mailinglistcontrollerunsubscribe) | **POST** /api/Mailing-list/unsubscribe | Unsubscribe to a mailing list.
[**mailingListControllerUnsubscribeFromNewsletter**](MailingListApi.md#mailinglistcontrollerunsubscribefromnewsletter) | **POST** /api/Mailing-list/unsubscribeFromNewsletter | Unsubscribe to a mailing list.

# **mailingListControllerCheckGetRoute**
> mailingListControllerCheckGetRoute()



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
    $apiInstance->mailingListControllerCheckGetRoute();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerCheckGetRoute: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerGetStatus**
> mailingListControllerGetStatus($email, $list)

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
    $apiInstance->mailingListControllerGetStatus($email, $list);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerGetStatus: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerIsSubscribedToNewsletter**
> mailingListControllerIsSubscribedToNewsletter($email)

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
    $apiInstance->mailingListControllerIsSubscribedToNewsletter($email);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerIsSubscribedToNewsletter: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerMailChimpWebhook**
> mailingListControllerMailChimpWebhook()

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
    $apiInstance->mailingListControllerMailChimpWebhook();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerMailChimpWebhook: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerMailblueWebhook**
> mailingListControllerMailblueWebhook()

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
    $apiInstance->mailingListControllerMailblueWebhook();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerMailblueWebhook: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerRemoveContactCustomField**
> mailingListControllerRemoveContactCustomField($body)

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
    $apiInstance->mailingListControllerRemoveContactCustomField($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerRemoveContactCustomField: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerSetContactCustomField**
> mailingListControllerSetContactCustomField($body)

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
    $apiInstance->mailingListControllerSetContactCustomField($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerSetContactCustomField: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerSetContactTag**
> mailingListControllerSetContactTag($body)

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
    $apiInstance->mailingListControllerSetContactTag($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerSetContactTag: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerSubscribe**
> mailingListControllerSubscribe($body)

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
    $apiInstance->mailingListControllerSubscribe($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerSubscribe: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerSubscribeToNewsletter**
> mailingListControllerSubscribeToNewsletter()

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
    $apiInstance->mailingListControllerSubscribeToNewsletter();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerSubscribeToNewsletter: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerUnsubscribe**
> mailingListControllerUnsubscribe($body)

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
    $apiInstance->mailingListControllerUnsubscribe($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerUnsubscribe: ', $e->getMessage(), PHP_EOL;
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

# **mailingListControllerUnsubscribeFromNewsletter**
> mailingListControllerUnsubscribeFromNewsletter()

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
    $apiInstance->mailingListControllerUnsubscribeFromNewsletter();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->mailingListControllerUnsubscribeFromNewsletter: ', $e->getMessage(), PHP_EOL;
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

