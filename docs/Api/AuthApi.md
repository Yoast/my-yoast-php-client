# Yoast\MyYoastApiClient\AuthApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginControllerGetAccessTokenWithoutWordPress**](AuthApi.md#logincontrollergetaccesstokenwithoutwordpress) | **POST** /api/Customers/login | Log in a user on MyYoast.
[**loginControllerLoginUser**](AuthApi.md#logincontrollerloginuser) | **POST** /api/Customers/login-user | 
[**loginControllerLogoutUser**](AuthApi.md#logincontrollerlogoutuser) | **POST** /api/Customers/logout-user | Logout the user on Yoast.com.
[**loginControllerLogoutWithoutWordPress**](AuthApi.md#logincontrollerlogoutwithoutwordpress) | **GET** /logout | 
[**yoastComOpenIdControllerYoastComCallback**](AuthApi.md#yoastcomopenidcontrolleryoastcomcallback) | **GET** /auth/yoast/callback | 
[**yoastComOpenIdControllerYoastComLogin**](AuthApi.md#yoastcomopenidcontrolleryoastcomlogin) | **GET** /auth/yoast | 

# **loginControllerGetAccessTokenWithoutWordPress**
> \Yoast\MyYoastApiClient\Model\AccessTokenResponse loginControllerGetAccessTokenWithoutWordPress($body)

Log in a user on MyYoast.

This is only done for internal user accounts which, in contrast to user accounts, do have set passwords in MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\LoginDto(); // \Yoast\MyYoastApiClient\Model\LoginDto | 

try {
    $result = $apiInstance->loginControllerGetAccessTokenWithoutWordPress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginControllerGetAccessTokenWithoutWordPress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\LoginDto**](../Model/LoginDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginControllerLoginUser**
> loginControllerLoginUser($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\LoginUserDto(); // \Yoast\MyYoastApiClient\Model\LoginUserDto | 

try {
    $apiInstance->loginControllerLoginUser($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginControllerLoginUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\LoginUserDto**](../Model/LoginUserDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginControllerLogoutUser**
> loginControllerLogoutUser()

Logout the user on Yoast.com.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->loginControllerLogoutUser();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginControllerLogoutUser: ', $e->getMessage(), PHP_EOL;
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

# **loginControllerLogoutWithoutWordPress**
> loginControllerLogoutWithoutWordPress()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->loginControllerLogoutWithoutWordPress();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginControllerLogoutWithoutWordPress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **yoastComOpenIdControllerYoastComCallback**
> yoastComOpenIdControllerYoastComCallback()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->yoastComOpenIdControllerYoastComCallback();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->yoastComOpenIdControllerYoastComCallback: ', $e->getMessage(), PHP_EOL;
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

# **yoastComOpenIdControllerYoastComLogin**
> yoastComOpenIdControllerYoastComLogin()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->yoastComOpenIdControllerYoastComLogin();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->yoastComOpenIdControllerYoastComLogin: ', $e->getMessage(), PHP_EOL;
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

