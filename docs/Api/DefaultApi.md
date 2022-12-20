# Yoast\MyYoastApiClient\DefaultApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsControllerSetTOTPTwoFactorConfig**](DefaultApi.md#accountscontrollersettotptwofactorconfig) | **POST** /api/accounts/{id}/TOTPTwoFactorConfig | 
[**agencyControllerAddAgency**](DefaultApi.md#agencycontrolleraddagency) | **POST** /api/SiteReview/Agency | 
[**agencyControllerAddOwnerToAgency**](DefaultApi.md#agencycontrolleraddownertoagency) | **POST** /api/SiteReview/Agency/add-owner | 
[**agencyControllerDisconnectOwnerFromAgency**](DefaultApi.md#agencycontrollerdisconnectownerfromagency) | **POST** /api/SiteReview/Agency/disconnect-owner | 
[**agencyControllerGetAllAgenciesWithUsers**](DefaultApi.md#agencycontrollergetallagencieswithusers) | **GET** /api/SiteReview/Agency/all | 
[**agencyControllerGetAllForCustomer**](DefaultApi.md#agencycontrollergetallforcustomer) | **GET** /api/SiteReview/Agency | 
[**agencyControllerGetById**](DefaultApi.md#agencycontrollergetbyid) | **GET** /api/SiteReview/Agency/{id} | 
[**agencyControllerUpdateClientById**](DefaultApi.md#agencycontrollerupdateclientbyid) | **PUT** /api/SiteReview/Agency/{id} | 
[**clientControllerCreateClient**](DefaultApi.md#clientcontrollercreateclient) | **POST** /api/SiteReview/Client | 
[**clientControllerGetAllForAgency**](DefaultApi.md#clientcontrollergetallforagency) | **GET** /api/SiteReview/Client/Agency/{id} | 
[**clientControllerGetClientById**](DefaultApi.md#clientcontrollergetclientbyid) | **GET** /api/SiteReview/Client/{id} | 
[**clientControllerUpdateClientById**](DefaultApi.md#clientcontrollerupdateclientbyid) | **PATCH** /api/SiteReview/Client/{id} | 
[**reviewControllerCreateReview**](DefaultApi.md#reviewcontrollercreatereview) | **POST** /api/SiteReview/Review | 
[**reviewControllerGetAllReviews**](DefaultApi.md#reviewcontrollergetallreviews) | **GET** /api/SiteReview/Review/Agency/{id} | 

# **accountsControllerSetTOTPTwoFactorConfig**
> accountsControllerSetTOTPTwoFactorConfig($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto(); // \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->accountsControllerSetTOTPTwoFactorConfig($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountsControllerSetTOTPTwoFactorConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto**](../Model/TOTPTwoFactorConfigDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agencyControllerAddAgency**
> agencyControllerAddAgency($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AddAgencyDto(); // \Yoast\MyYoastApiClient\Model\AddAgencyDto | 

try {
    $apiInstance->agencyControllerAddAgency($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerAddAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AddAgencyDto**](../Model/AddAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agencyControllerAddOwnerToAgency**
> agencyControllerAddOwnerToAgency($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto(); // \Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto | 

try {
    $apiInstance->agencyControllerAddOwnerToAgency($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerAddOwnerToAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto**](../Model/AddOwnerToAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agencyControllerDisconnectOwnerFromAgency**
> agencyControllerDisconnectOwnerFromAgency($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto(); // \Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto | 

try {
    $apiInstance->agencyControllerDisconnectOwnerFromAgency($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerDisconnectOwnerFromAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto**](../Model/DisconnectOwnerFromAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agencyControllerGetAllAgenciesWithUsers**
> agencyControllerGetAllAgenciesWithUsers()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->agencyControllerGetAllAgenciesWithUsers();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerGetAllAgenciesWithUsers: ', $e->getMessage(), PHP_EOL;
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

# **agencyControllerGetAllForCustomer**
> agencyControllerGetAllForCustomer()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->agencyControllerGetAllForCustomer();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerGetAllForCustomer: ', $e->getMessage(), PHP_EOL;
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

# **agencyControllerGetById**
> agencyControllerGetById($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->agencyControllerGetById($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agencyControllerUpdateClientById**
> agencyControllerUpdateClientById($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateAgencyDto(); // \Yoast\MyYoastApiClient\Model\UpdateAgencyDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->agencyControllerUpdateClientById($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->agencyControllerUpdateClientById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateAgencyDto**](../Model/UpdateAgencyDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientControllerCreateClient**
> clientControllerCreateClient($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CreateClientDto(); // \Yoast\MyYoastApiClient\Model\CreateClientDto | 

try {
    $apiInstance->clientControllerCreateClient($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientControllerCreateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateClientDto**](../Model/CreateClientDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientControllerGetAllForAgency**
> clientControllerGetAllForAgency($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->clientControllerGetAllForAgency($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientControllerGetAllForAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientControllerGetClientById**
> clientControllerGetClientById($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->clientControllerGetClientById($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientControllerGetClientById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientControllerUpdateClientById**
> clientControllerUpdateClientById($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateClientDto(); // \Yoast\MyYoastApiClient\Model\UpdateClientDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->clientControllerUpdateClientById($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientControllerUpdateClientById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateClientDto**](../Model/UpdateClientDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewControllerCreateReview**
> reviewControllerCreateReview($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CreateReviewDto(); // \Yoast\MyYoastApiClient\Model\CreateReviewDto | 

try {
    $apiInstance->reviewControllerCreateReview($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewControllerCreateReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateReviewDto**](../Model/CreateReviewDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewControllerGetAllReviews**
> reviewControllerGetAllReviews($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->reviewControllerGetAllReviews($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewControllerGetAllReviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

