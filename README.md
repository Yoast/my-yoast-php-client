# my-yoast-php-client
The MyYoast server NestJS Api

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/yoast/my-yoast-php-client.git"
    }
  ],
  "require": {
    "yoast/my-yoast-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/my-yoast-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    $result = $apiInstance->apiCustomersLoginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiCustomersLoginPost: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\LoginUserDto(); // \Yoast\MyYoastApiClient\Model\LoginUserDto | 

try {
    $result = $apiInstance->apiCustomersLoginUserPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiCustomersLoginUserPost: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->authYoastCallbackGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authYoastCallbackGet: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->authYoastGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authYoastGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->logoutGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->logoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://my.yoast.test:3000/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**apiCustomersLoginPost**](docs/Api/AuthApi.md#apicustomersloginpost) | **POST** /api/Customers/login | Log in a user on MyYoast.
*AuthApi* | [**apiCustomersLoginUserPost**](docs/Api/AuthApi.md#apicustomersloginuserpost) | **POST** /api/Customers/login-user | 
*AuthApi* | [**authYoastCallbackGet**](docs/Api/AuthApi.md#authyoastcallbackget) | **GET** /auth/yoast/callback | 
*AuthApi* | [**authYoastGet**](docs/Api/AuthApi.md#authyoastget) | **GET** /auth/yoast | 
*AuthApi* | [**logoutGet**](docs/Api/AuthApi.md#logoutget) | **GET** /logout | 
*ComposerTokenApi* | [**apiComposerTokensBulkPost**](docs/Api/ComposerTokenApi.md#apicomposertokensbulkpost) | **POST** /api/ComposerTokens/bulk | Create many ComposerToken
*ComposerTokenApi* | [**apiComposerTokensGeneratePost**](docs/Api/ComposerTokenApi.md#apicomposertokensgeneratepost) | **POST** /api/ComposerTokens/generate | Generates a Composer token
*ComposerTokenApi* | [**apiComposerTokensGet**](docs/Api/ComposerTokenApi.md#apicomposertokensget) | **GET** /api/ComposerTokens | Retrieve many ComposerToken
*ComposerTokenApi* | [**apiComposerTokensIdDelete**](docs/Api/ComposerTokenApi.md#apicomposertokensiddelete) | **DELETE** /api/ComposerTokens/{id} | Delete one ComposerToken
*ComposerTokenApi* | [**apiComposerTokensIdDeletePost**](docs/Api/ComposerTokenApi.md#apicomposertokensiddeletepost) | **POST** /api/ComposerTokens/{id}/delete | Disable a composer token
*ComposerTokenApi* | [**apiComposerTokensIdGet**](docs/Api/ComposerTokenApi.md#apicomposertokensidget) | **GET** /api/ComposerTokens/{id} | Retrieve one ComposerToken
*ComposerTokenApi* | [**apiComposerTokensIdPatch**](docs/Api/ComposerTokenApi.md#apicomposertokensidpatch) | **PATCH** /api/ComposerTokens/{id} | Update one ComposerToken
*ComposerTokenApi* | [**apiComposerTokensIdRenamePost**](docs/Api/ComposerTokenApi.md#apicomposertokensidrenamepost) | **POST** /api/ComposerTokens/{id}/rename | Renames a Composer token
*ComposerTokenApi* | [**apiComposerTokensPost**](docs/Api/ComposerTokenApi.md#apicomposertokenspost) | **POST** /api/ComposerTokens | Create one ComposerToken
*CourseApi* | [**apiCoursesBulkPost**](docs/Api/CourseApi.md#apicoursesbulkpost) | **POST** /api/Courses/bulk | Create many Course
*CourseApi* | [**apiCoursesFromAcademyPut**](docs/Api/CourseApi.md#apicoursesfromacademyput) | **PUT** /api/Courses/fromAcademy | Upserts a course
*CourseApi* | [**apiCoursesGet**](docs/Api/CourseApi.md#apicoursesget) | **GET** /api/Courses | Retrieve many Course
*CourseApi* | [**apiCoursesIdDelete**](docs/Api/CourseApi.md#apicoursesiddelete) | **DELETE** /api/Courses/{id} | Delete one Course
*CourseApi* | [**apiCoursesIdGet**](docs/Api/CourseApi.md#apicoursesidget) | **GET** /api/Courses/{id} | Retrieve one Course
*CourseApi* | [**apiCoursesIdPatch**](docs/Api/CourseApi.md#apicoursesidpatch) | **PATCH** /api/Courses/{id} | Update one Course
*CourseApi* | [**apiCoursesPost**](docs/Api/CourseApi.md#apicoursespost) | **POST** /api/Courses | Create one Course
*CourseEnrollmentApi* | [**apiCourseEnrollmentsBulkInvitePost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsbulkinvitepost) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
*CourseEnrollmentApi* | [**apiCourseEnrollmentsBulkPost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsbulkpost) | **POST** /api/CourseEnrollments/bulk | Create many CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsFromAcademyPut**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsfromacademyput) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsget) | **GET** /api/CourseEnrollments | Retrieve many CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsGetLegacyExpiringGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsgetlegacyexpiringget) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdDelete**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsiddelete) | **DELETE** /api/CourseEnrollments/{id} | Delete one CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsidget) | **GET** /api/CourseEnrollments/{id} | Retrieve one CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdInvitePost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsidinvitepost) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdPatch**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsidpatch) | **PATCH** /api/CourseEnrollments/{id} | Update one CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsPost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentspost) | **POST** /api/CourseEnrollments | Create one CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsTransferPost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentstransferpost) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments
*CustomerApi* | [**apiCustomersActivatePost**](docs/Api/CustomerApi.md#apicustomersactivatepost) | **POST** /api/Customers/activate | Activate the account of a user
*CustomerApi* | [**apiCustomersAllrolesGet**](docs/Api/CustomerApi.md#apicustomersallrolesget) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
*CustomerApi* | [**apiCustomersBulkPost**](docs/Api/CustomerApi.md#apicustomersbulkpost) | **POST** /api/Customers/bulk | Create many Customer
*CustomerApi* | [**apiCustomersCurrentGet**](docs/Api/CustomerApi.md#apicustomerscurrentget) | **GET** /api/Customers/current | Get the current customer
*CustomerApi* | [**apiCustomersCustomerIdSubscriptionsSubscriptionIdCancelPost**](docs/Api/CustomerApi.md#apicustomerscustomeridsubscriptionssubscriptionidcancelpost) | **POST** /api/Customers/{customerId}/subscriptions/{subscriptionId}/cancel | Cancel (part of) a subscription.
*CustomerApi* | [**apiCustomersGet**](docs/Api/CustomerApi.md#apicustomersget) | **GET** /api/Customers | Retrieve many Customer
*CustomerApi* | [**apiCustomersIdAvatarPost**](docs/Api/CustomerApi.md#apicustomersidavatarpost) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
*CustomerApi* | [**apiCustomersIdDelete**](docs/Api/CustomerApi.md#apicustomersiddelete) | **DELETE** /api/Customers/{id} | Delete one Customer
*CustomerApi* | [**apiCustomersIdDownloadGet**](docs/Api/CustomerApi.md#apicustomersiddownloadget) | **GET** /api/Customers/{id}/download | Download profile.
*CustomerApi* | [**apiCustomersIdEnablePost**](docs/Api/CustomerApi.md#apicustomersidenablepost) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
*CustomerApi* | [**apiCustomersIdFindRefundsGet**](docs/Api/CustomerApi.md#apicustomersidfindrefundsget) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
*CustomerApi* | [**apiCustomersIdGet**](docs/Api/CustomerApi.md#apicustomersidget) | **GET** /api/Customers/{id} | Retrieve one Customer
*CustomerApi* | [**apiCustomersIdNewsletterDelete**](docs/Api/CustomerApi.md#apicustomersidnewsletterdelete) | **DELETE** /api/Customers/{id}/newsletter | 
*CustomerApi* | [**apiCustomersIdNewsletterGet**](docs/Api/CustomerApi.md#apicustomersidnewsletterget) | **GET** /api/Customers/{id}/newsletter | 
*CustomerApi* | [**apiCustomersIdNewsletterPost**](docs/Api/CustomerApi.md#apicustomersidnewsletterpost) | **POST** /api/Customers/{id}/newsletter | 
*CustomerApi* | [**apiCustomersIdPatch**](docs/Api/CustomerApi.md#apicustomersidpatch) | **PATCH** /api/Customers/{id} | Update one Customer
*CustomerApi* | [**apiCustomersIdProfileGet**](docs/Api/CustomerApi.md#apicustomersidprofileget) | **GET** /api/Customers/{id}/profile | 
*CustomerApi* | [**apiCustomersIdProfilePatch**](docs/Api/CustomerApi.md#apicustomersidprofilepatch) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
*CustomerApi* | [**apiCustomersIdRelationGet**](docs/Api/CustomerApi.md#apicustomersidrelationget) | **GET** /api/Customers/{id}/{relation} | 
*CustomerApi* | [**apiCustomersLogoutUserPost**](docs/Api/CustomerApi.md#apicustomerslogoutuserpost) | **POST** /api/Customers/logout-user | Logout the user on Yoast.com.
*CustomerApi* | [**apiCustomersNewsletterListSubscribePost**](docs/Api/CustomerApi.md#apicustomersnewsletterlistsubscribepost) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
*CustomerApi* | [**apiCustomersNonceGet**](docs/Api/CustomerApi.md#apicustomersnonceget) | **GET** /api/Customers/nonce | Get a nonce from Yoast.com
*CustomerApi* | [**apiCustomersPost**](docs/Api/CustomerApi.md#apicustomerspost) | **POST** /api/Customers | Create one Customer
*CustomerApi* | [**apiCustomersResetPasswordPatch**](docs/Api/CustomerApi.md#apicustomersresetpasswordpatch) | **PATCH** /api/Customers/resetPassword | Reset the user&#x27;s password.
*CustomerApi* | [**apiCustomersRolemappingIdsGet**](docs/Api/CustomerApi.md#apicustomersrolemappingidsget) | **GET** /api/Customers/rolemapping-ids | Get the ids of all customers with at least one role.
*CustomerApi* | [**apiCustomersSendResetPasswordEmailPost**](docs/Api/CustomerApi.md#apicustomerssendresetpasswordemailpost) | **POST** /api/Customers/sendResetPasswordEmail | Send a reset password email to the user.
*CustomerApi* | [**apiCustomersSignupPost**](docs/Api/CustomerApi.md#apicustomerssignuppost) | **POST** /api/Customers/signup | Signup a customer on yoast.com.
*CustomerNoteApi* | [**apiCustomerNotesBulkPost**](docs/Api/CustomerNoteApi.md#apicustomernotesbulkpost) | **POST** /api/CustomerNotes/bulk | Create many CustomerNote
*CustomerNoteApi* | [**apiCustomerNotesGet**](docs/Api/CustomerNoteApi.md#apicustomernotesget) | **GET** /api/CustomerNotes | Retrieve many CustomerNote
*CustomerNoteApi* | [**apiCustomerNotesIdDelete**](docs/Api/CustomerNoteApi.md#apicustomernotesiddelete) | **DELETE** /api/CustomerNotes/{id} | Delete one CustomerNote
*CustomerNoteApi* | [**apiCustomerNotesIdGet**](docs/Api/CustomerNoteApi.md#apicustomernotesidget) | **GET** /api/CustomerNotes/{id} | Retrieve one CustomerNote
*CustomerNoteApi* | [**apiCustomerNotesIdPatch**](docs/Api/CustomerNoteApi.md#apicustomernotesidpatch) | **PATCH** /api/CustomerNotes/{id} | Update one CustomerNote
*CustomerNoteApi* | [**apiCustomerNotesPost**](docs/Api/CustomerNoteApi.md#apicustomernotespost) | **POST** /api/CustomerNotes | Create one CustomerNote
*DownloadApi* | [**apiDownloadsBulkPost**](docs/Api/DownloadApi.md#apidownloadsbulkpost) | **POST** /api/Downloads/bulk | Create many Download
*DownloadApi* | [**apiDownloadsFileNameGet**](docs/Api/DownloadApi.md#apidownloadsfilenameget) | **GET** /api/Downloads/file/{name} | Route to download a file
*DownloadApi* | [**apiDownloadsFileNamePost**](docs/Api/DownloadApi.md#apidownloadsfilenamepost) | **POST** /api/Downloads/file/{name} | Route to update a file.
*DownloadApi* | [**apiDownloadsGet**](docs/Api/DownloadApi.md#apidownloadsget) | **GET** /api/Downloads | Retrieve many Download
*DownloadApi* | [**apiDownloadsIdDelete**](docs/Api/DownloadApi.md#apidownloadsiddelete) | **DELETE** /api/Downloads/{id} | Delete one Download
*DownloadApi* | [**apiDownloadsIdGet**](docs/Api/DownloadApi.md#apidownloadsidget) | **GET** /api/Downloads/{id} | Retrieve one Download
*DownloadApi* | [**apiDownloadsIdPatch**](docs/Api/DownloadApi.md#apidownloadsidpatch) | **PATCH** /api/Downloads/{id} | Update one Download
*DownloadApi* | [**apiDownloadsPost**](docs/Api/DownloadApi.md#apidownloadspost) | **POST** /api/Downloads | Create one Download
*EDDApi* | [**eddSlApiGet**](docs/Api/EDDApi.md#eddslapiget) | **GET** /edd-sl-api | Activate or deactivate a site license
*EDDApi* | [**eddSlApiPost**](docs/Api/EDDApi.md#eddslapipost) | **POST** /edd-sl-api | 
*ExportOrdersApi* | [**exportOrdersYearMonthTypeGet**](docs/Api/ExportOrdersApi.md#exportordersyearmonthtypeget) | **GET** /export-orders/{year}/{month}/{type} | 
*FromWooCommerceApi* | [**apiCustomersFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apicustomersfromwoocommerceput) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
*FromWooCommerceApi* | [**apiOrdersFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiordersfromwoocommerceput) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
*FromWooCommerceApi* | [**apiProductGroupsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiproductgroupsfromwoocommerceput) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.
*FromWooCommerceApi* | [**apiProductsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiproductsfromwoocommerceput) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
*FromWooCommerceApi* | [**apiSubscriptionsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apisubscriptionsfromwoocommerceput) | **PUT** /api/Subscriptions/fromWooCommerce | Sync subscriptions to MyYoast.
*HelpscoutApi* | [**helpscoutPost**](docs/Api/HelpscoutApi.md#helpscoutpost) | **POST** /helpscout | Get information about a customer
*OrderApi* | [**apiOrdersBulkPost**](docs/Api/OrderApi.md#apiordersbulkpost) | **POST** /api/Orders/bulk | Create many Order
*OrderApi* | [**apiOrdersGet**](docs/Api/OrderApi.md#apiordersget) | **GET** /api/Orders | Retrieve many Order
*OrderApi* | [**apiOrdersIdDelete**](docs/Api/OrderApi.md#apiordersiddelete) | **DELETE** /api/Orders/{id} | Delete one Order
*OrderApi* | [**apiOrdersIdGet**](docs/Api/OrderApi.md#apiordersidget) | **GET** /api/Orders/{id} | Retrieve one Order
*OrderApi* | [**apiOrdersIdInvoiceGet**](docs/Api/OrderApi.md#apiordersidinvoiceget) | **GET** /api/Orders/{id}/invoice | Create invoice
*OrderApi* | [**apiOrdersIdPatch**](docs/Api/OrderApi.md#apiordersidpatch) | **PATCH** /api/Orders/{id} | Update one Order
*OrderApi* | [**apiOrdersIdRefundsRefundIdInvoiceGet**](docs/Api/OrderApi.md#apiordersidrefundsrefundidinvoiceget) | **GET** /api/Orders/{id}/refunds/{refundId}/invoice | Creates a credit note
*OrderApi* | [**apiOrdersPost**](docs/Api/OrderApi.md#apiorderspost) | **POST** /api/Orders | Create one Order
*PackagesApi* | [**packagesDistOrgNameArchiveZipGet**](docs/Api/PackagesApi.md#packagesdistorgnamearchivezipget) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
*PackagesApi* | [**packagesPOrgNameAndHashJsonGet**](docs/Api/PackagesApi.md#packagesporgnameandhashjsonget) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json
*PackagesApi* | [**packagesPackagesJsonGet**](docs/Api/PackagesApi.md#packagespackagesjsonget) | **GET** /packages/packages.json | Serves the general packages.json file.
*ProductApi* | [**apiProductsBulkPost**](docs/Api/ProductApi.md#apiproductsbulkpost) | **POST** /api/Products/bulk | Create many Product
*ProductApi* | [**apiProductsGet**](docs/Api/ProductApi.md#apiproductsget) | **GET** /api/Products | Retrieve many Product
*ProductApi* | [**apiProductsIdDelete**](docs/Api/ProductApi.md#apiproductsiddelete) | **DELETE** /api/Products/{id} | Delete one Product
*ProductApi* | [**apiProductsIdGet**](docs/Api/ProductApi.md#apiproductsidget) | **GET** /api/Products/{id} | Retrieve one Product
*ProductApi* | [**apiProductsIdPatch**](docs/Api/ProductApi.md#apiproductsidpatch) | **PATCH** /api/Products/{id} | Update one Product
*ProductApi* | [**apiProductsPost**](docs/Api/ProductApi.md#apiproductspost) | **POST** /api/Products | Create one Product
*ProductGroupApi* | [**apiProductGroupsBulkPost**](docs/Api/ProductGroupApi.md#apiproductgroupsbulkpost) | **POST** /api/ProductGroups/bulk | Create many ProductGroup
*ProductGroupApi* | [**apiProductGroupsGet**](docs/Api/ProductGroupApi.md#apiproductgroupsget) | **GET** /api/ProductGroups | Retrieve many ProductGroup
*ProductGroupApi* | [**apiProductGroupsIdDelete**](docs/Api/ProductGroupApi.md#apiproductgroupsiddelete) | **DELETE** /api/ProductGroups/{id} | Delete one ProductGroup
*ProductGroupApi* | [**apiProductGroupsIdGet**](docs/Api/ProductGroupApi.md#apiproductgroupsidget) | **GET** /api/ProductGroups/{id} | Retrieve one ProductGroup
*ProductGroupApi* | [**apiProductGroupsIdPatch**](docs/Api/ProductGroupApi.md#apiproductgroupsidpatch) | **PATCH** /api/ProductGroups/{id} | Update one ProductGroup
*ProductGroupApi* | [**apiProductGroupsPost**](docs/Api/ProductGroupApi.md#apiproductgroupspost) | **POST** /api/ProductGroups | Create one ProductGroup
*RefundApi* | [**apiRefundsBulkPost**](docs/Api/RefundApi.md#apirefundsbulkpost) | **POST** /api/Refunds/bulk | Create many Refund
*RefundApi* | [**apiRefundsGet**](docs/Api/RefundApi.md#apirefundsget) | **GET** /api/Refunds | Retrieve many Refund
*RefundApi* | [**apiRefundsIdDelete**](docs/Api/RefundApi.md#apirefundsiddelete) | **DELETE** /api/Refunds/{id} | Delete one Refund
*RefundApi* | [**apiRefundsIdGet**](docs/Api/RefundApi.md#apirefundsidget) | **GET** /api/Refunds/{id} | Retrieve one Refund
*RefundApi* | [**apiRefundsIdPatch**](docs/Api/RefundApi.md#apirefundsidpatch) | **PATCH** /api/Refunds/{id} | Update one Refund
*RefundApi* | [**apiRefundsPost**](docs/Api/RefundApi.md#apirefundspost) | **POST** /api/Refunds | Create one Refund
*RobotsApi* | [**robotsTxtGet**](docs/Api/RobotsApi.md#robotstxtget) | **GET** /robots.txt | 
*ServerCheckApi* | [**serverCheckGet**](docs/Api/ServerCheckApi.md#servercheckget) | **GET** /server-check | Server health check
*SiteApi* | [**apiSitesBulkPost**](docs/Api/SiteApi.md#apisitesbulkpost) | **POST** /api/Sites/bulk | Create many Site
*SiteApi* | [**apiSitesCurrentGet**](docs/Api/SiteApi.md#apisitescurrentget) | **GET** /api/Sites/current | Get the current connected site for an access token.
*SiteApi* | [**apiSitesGet**](docs/Api/SiteApi.md#apisitesget) | **GET** /api/Sites | Retrieve many Site
*SiteApi* | [**apiSitesIdDelete**](docs/Api/SiteApi.md#apisitesiddelete) | **DELETE** /api/Sites/{id} | Delete one Site
*SiteApi* | [**apiSitesIdGet**](docs/Api/SiteApi.md#apisitesidget) | **GET** /api/Sites/{id} | Retrieve one Site
*SiteApi* | [**apiSitesIdPatch**](docs/Api/SiteApi.md#apisitesidpatch) | **PATCH** /api/Sites/{id} | Update one Site
*SiteApi* | [**apiSitesIndexPost**](docs/Api/SiteApi.md#apisitesindexpost) | **POST** /api/Sites/index | 
*SiteApi* | [**apiSitesPost**](docs/Api/SiteApi.md#apisitespost) | **POST** /api/Sites | Create one Site
*SiteApi* | [**apiSitesSwitchSubscriptionNumberOfTimesPost**](docs/Api/SiteApi.md#apisitesswitchsubscriptionnumberoftimespost) | **POST** /api/Sites/switchSubscriptionNumberOfTimes | Switches the subscription for a number of times.
*SiteApi* | [**apiSitesSwitchSubscriptionPost**](docs/Api/SiteApi.md#apisitesswitchsubscriptionpost) | **POST** /api/Sites/switchSubscription | Switches the subscription for a number of times.
*SiteApi* | [**apiSitesTransferPost**](docs/Api/SiteApi.md#apisitestransferpost) | **POST** /api/Sites/transfer | Transfer sites.
*SubscriptionApi* | [**apiSubscriptionsBulkPost**](docs/Api/SubscriptionApi.md#apisubscriptionsbulkpost) | **POST** /api/Subscriptions/bulk | Create many Subscription
*SubscriptionApi* | [**apiSubscriptionsGet**](docs/Api/SubscriptionApi.md#apisubscriptionsget) | **GET** /api/Subscriptions | Retrieve many Subscription
*SubscriptionApi* | [**apiSubscriptionsIdDelete**](docs/Api/SubscriptionApi.md#apisubscriptionsiddelete) | **DELETE** /api/Subscriptions/{id} | Delete one Subscription
*SubscriptionApi* | [**apiSubscriptionsIdGet**](docs/Api/SubscriptionApi.md#apisubscriptionsidget) | **GET** /api/Subscriptions/{id} | Retrieve one Subscription
*SubscriptionApi* | [**apiSubscriptionsIdPatch**](docs/Api/SubscriptionApi.md#apisubscriptionsidpatch) | **PATCH** /api/Subscriptions/{id} | Update one Subscription
*SubscriptionApi* | [**apiSubscriptionsIdRecalculateSubscriptionCountPost**](docs/Api/SubscriptionApi.md#apisubscriptionsidrecalculatesubscriptioncountpost) | **POST** /api/Subscriptions/{id}/recalculateSubscriptionCount | Recalculate SubscriptionCount.
*SubscriptionApi* | [**apiSubscriptionsPost**](docs/Api/SubscriptionApi.md#apisubscriptionspost) | **POST** /api/Subscriptions | Create one Subscription

## Documentation For Models

 - [AccessToken](docs/Model/AccessToken.md)
 - [ActivateAccountDto](docs/Model/ActivateAccountDto.md)
 - [BillingDto](docs/Model/BillingDto.md)
 - [BulkDto](docs/Model/BulkDto.md)
 - [BulkInviteDto](docs/Model/BulkInviteDto.md)
 - [CancelSubscriptionBodyDto](docs/Model/CancelSubscriptionBodyDto.md)
 - [ComposerToken](docs/Model/ComposerToken.md)
 - [Course](docs/Model/Course.md)
 - [CourseDataDto](docs/Model/CourseDataDto.md)
 - [CourseEnrollment](docs/Model/CourseEnrollment.md)
 - [CourseEnrollmentFromAcademyDto](docs/Model/CourseEnrollmentFromAcademyDto.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerData](docs/Model/CustomerData.md)
 - [CustomerFromWooDto](docs/Model/CustomerFromWooDto.md)
 - [CustomerNote](docs/Model/CustomerNote.md)
 - [Download](docs/Model/Download.md)
 - [EddDTO](docs/Model/EddDTO.md)
 - [ExtraCourseDataDto](docs/Model/ExtraCourseDataDto.md)
 - [ExtraOrderData](docs/Model/ExtraOrderData.md)
 - [FromAcademyDto](docs/Model/FromAcademyDto.md)
 - [GenerateDto](docs/Model/GenerateDto.md)
 - [HelpScoutCustomerData](docs/Model/HelpScoutCustomerData.md)
 - [HelpScoutDto](docs/Model/HelpScoutDto.md)
 - [InviteDto](docs/Model/InviteDto.md)
 - [JSZip](docs/Model/JSZip.md)
 - [LineItemData](docs/Model/LineItemData.md)
 - [LineItemTax](docs/Model/LineItemTax.md)
 - [LoginDto](docs/Model/LoginDto.md)
 - [LoginUserDto](docs/Model/LoginUserDto.md)
 - [LogoutUserBodyDto](docs/Model/LogoutUserBodyDto.md)
 - [MetaDataDto](docs/Model/MetaDataDto.md)
 - [Order](docs/Model/Order.md)
 - [OrderData](docs/Model/OrderData.md)
 - [OrderFromWooDto](docs/Model/OrderFromWooDto.md)
 - [Product](docs/Model/Product.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductData](docs/Model/ProductData.md)
 - [ProductDownload](docs/Model/ProductDownload.md)
 - [ProductFromWooDto](docs/Model/ProductFromWooDto.md)
 - [ProductGroup](docs/Model/ProductGroup.md)
 - [ProductGroupExtraData](docs/Model/ProductGroupExtraData.md)
 - [ProductGroupFromWooDto](docs/Model/ProductGroupFromWooDto.md)
 - [ProductGroupMeta](docs/Model/ProductGroupMeta.md)
 - [ProductGroupTerm](docs/Model/ProductGroupTerm.md)
 - [ProductImage](docs/Model/ProductImage.md)
 - [ProgressData](docs/Model/ProgressData.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundDataDto](docs/Model/RefundDataDto.md)
 - [RenameBodyDto](docs/Model/RenameBodyDto.md)
 - [ResetPasswordDto](docs/Model/ResetPasswordDto.md)
 - [SendResetPasswordEmailDto](docs/Model/SendResetPasswordEmailDto.md)
 - [ShippingDto](docs/Model/ShippingDto.md)
 - [SignupAccountDto](docs/Model/SignupAccountDto.md)
 - [Site](docs/Model/Site.md)
 - [SubscribeByEmailBodyDto](docs/Model/SubscribeByEmailBodyDto.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionData](docs/Model/SubscriptionData.md)
 - [SubscriptionFromWooDto](docs/Model/SubscriptionFromWooDto.md)
 - [SwitchSubscriptionNumberOfTimesDto](docs/Model/SwitchSubscriptionNumberOfTimesDto.md)
 - [TaxLineItem](docs/Model/TaxLineItem.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionDataDto](docs/Model/TransactionDataDto.md)
 - [TransferDto](docs/Model/TransferDto.md)
 - [TransferSiteDto](docs/Model/TransferSiteDto.md)
 - [UpdateFileDto](docs/Model/UpdateFileDto.md)
 - [UpdateUserToWordpressDto](docs/Model/UpdateUserToWordpressDto.md)

## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string


## Author



