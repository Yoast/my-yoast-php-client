# Yoast\MyYoastApiClient\ProvisioningUsersApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scheduleDelete**](ProvisioningUsersApi.md#scheduledelete) | **POST** /api/provisioning/user/schedule-delete | Schedule a delete for a subscription

# **scheduleDelete**
> \Yoast\MyYoastApiClient\Model\SubscriptionProvisioningResponseDto scheduleDelete($body)

Schedule a delete for a subscription

Schedules a customer for gdpr delete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisioningUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\ScheduleDeleteUserDto(); // \Yoast\MyYoastApiClient\Model\ScheduleDeleteUserDto | 

try {
    $result = $apiInstance->scheduleDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningUsersApi->scheduleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ScheduleDeleteUserDto**](../Model/ScheduleDeleteUserDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\SubscriptionProvisioningResponseDto**](../Model/SubscriptionProvisioningResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

