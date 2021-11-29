# Yoast\MyYoastApiClient\MailingListApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiMailingListGet**](MailingListApi.md#apimailinglistget) | **GET** /api/Mailing-list | Get mailingLists Names.
[**apiMailingListIsSubscribedToNewsletterGet**](MailingListApi.md#apimailinglistissubscribedtonewsletterget) | **GET** /api/Mailing-list/isSubscribedToNewsletter | Get the subscription status.
[**apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKGet**](MailingListApi.md#apimailinglistnewslettertzhjyjwsyfumpznnhjavadzzirixrsbxofgptzjyykget) | **GET** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | 
[**apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKPost**](MailingListApi.md#apimailinglistnewslettertzhjyjwsyfumpznnhjavadzzirixrsbxofgptzjyykpost) | **POST** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | Entry point for the mailchimp webhooks
[**apiMailingListNewsletterWALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJVPost**](MailingListApi.md#apimailinglistnewsletterwalaznyubfqzieudiqyzetbldbkodetcjkokmkcbjvpost) | **POST** /api/Mailing-list/newsletter/wALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJV | Entry point for the mailblue webhooks
[**apiMailingListStatusGet**](MailingListApi.md#apimailingliststatusget) | **GET** /api/Mailing-list/status | Get the subscription status.
[**apiMailingListSubscribePost**](MailingListApi.md#apimailinglistsubscribepost) | **POST** /api/Mailing-list/subscribe | Subscribe contact to a mailing list.
[**apiMailingListUnsubscribeFromNewsletterPost**](MailingListApi.md#apimailinglistunsubscribefromnewsletterpost) | **POST** /api/Mailing-list/unsubscribeFromNewsletter | Unsubscribe to a mailing list.
[**apiMailingListUnsubscribePost**](MailingListApi.md#apimailinglistunsubscribepost) | **POST** /api/Mailing-list/unsubscribe | Unsubscribe to a mailing list.

# **apiMailingListGet**
> apiMailingListGet()

Get mailingLists Names.

Gets the names of all the mailing lists.

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
    $apiInstance->apiMailingListGet();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListGet: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListIsSubscribedToNewsletterGet**
> apiMailingListIsSubscribedToNewsletterGet($email)

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
    $apiInstance->apiMailingListIsSubscribedToNewsletterGet($email);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListIsSubscribedToNewsletterGet: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKGet**
> apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKGet()



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
    $apiInstance->apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKGet();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKGet: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKPost**
> apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKPost()

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
    $apiInstance->apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKPost();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListNewsletterTZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyKPost: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListNewsletterWALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJVPost**
> apiMailingListNewsletterWALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJVPost()

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
    $apiInstance->apiMailingListNewsletterWALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJVPost();
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListNewsletterWALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJVPost: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListStatusGet**
> apiMailingListStatusGet($email, $list)

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
    $apiInstance->apiMailingListStatusGet($email, $list);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListStatusGet: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListSubscribePost**
> apiMailingListSubscribePost($body)

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
    $apiInstance->apiMailingListSubscribePost($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListSubscribePost: ', $e->getMessage(), PHP_EOL;
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

# **apiMailingListUnsubscribeFromNewsletterPost**
> apiMailingListUnsubscribeFromNewsletterPost($body)

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
$body = new \Yoast\MyYoastApiClient\Model\UnsubscribeFromNewsletterDto(); // \Yoast\MyYoastApiClient\Model\UnsubscribeFromNewsletterDto | 

try {
    $apiInstance->apiMailingListUnsubscribeFromNewsletterPost($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListUnsubscribeFromNewsletterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UnsubscribeFromNewsletterDto**](../Model/UnsubscribeFromNewsletterDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiMailingListUnsubscribePost**
> apiMailingListUnsubscribePost($body)

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
    $apiInstance->apiMailingListUnsubscribePost($body);
} catch (Exception $e) {
    echo 'Exception when calling MailingListApi->apiMailingListUnsubscribePost: ', $e->getMessage(), PHP_EOL;
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

