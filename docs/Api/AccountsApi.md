# Yoast\MyYoastApiClient\AccountsApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkUsername**](AccountsApi.md#checkusername) | **GET** /api/accounts/checkUsername | Username availability check
[**setTOTPTwoFactorConfig**](AccountsApi.md#settotptwofactorconfig) | **POST** /api/accounts/{id}/TOTPTwoFactorConfig | 

# **checkUsername**
> \Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto checkUsername($body, $xAccountAppSharedSecret)

Username availability check

Checks whether a username is still available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto(); // \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto | 
$xAccountAppSharedSecret = "xAccountAppSharedSecret_example"; // string | The API shared secret

try {
    $result = $apiInstance->checkUsername($body, $xAccountAppSharedSecret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->checkUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto**](../Model/UsernameCheckRequestDto.md)|  |
 **xAccountAppSharedSecret** | **string**| The API shared secret |

### Return type

[**\Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto**](../Model/UsernameCheckResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTOTPTwoFactorConfig**
> setTOTPTwoFactorConfig($body, $xAccountAppSharedSecret, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto(); // \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto | 
$xAccountAppSharedSecret = "xAccountAppSharedSecret_example"; // string | The API shared secret
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->setTOTPTwoFactorConfig($body, $xAccountAppSharedSecret, $id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->setTOTPTwoFactorConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto**](../Model/TOTPTwoFactorConfigDto.md)|  |
 **xAccountAppSharedSecret** | **string**| The API shared secret |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

