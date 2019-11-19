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
$body = new \Yoast\MyYoastApiClient\Model\LogoutUserBodyDto(); // \Yoast\MyYoastApiClient\Model\LogoutUserBodyDto | 

try {
    $result = $apiInstance->apiCustomersLogoutUserPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiCustomersLogoutUserPost: ', $e->getMessage(), PHP_EOL;
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
*AuthApi* | [**apiCustomersLogoutUserPost**](docs/Api/AuthApi.md#apicustomerslogoutuserpost) | **POST** /api/Customers/logout-user | Logout the user on Yoast.com.
*AuthApi* | [**authYoastCallbackGet**](docs/Api/AuthApi.md#authyoastcallbackget) | **GET** /auth/yoast/callback | 
*AuthApi* | [**authYoastGet**](docs/Api/AuthApi.md#authyoastget) | **GET** /auth/yoast | 
*AuthApi* | [**logoutGet**](docs/Api/AuthApi.md#logoutget) | **GET** /logout | 
*ComposerTokenApi* | [**apiComposerTokensGeneratePost**](docs/Api/ComposerTokenApi.md#apicomposertokensgeneratepost) | **POST** /api/ComposerTokens/generate | Generates a Composer token
*ComposerTokenApi* | [**apiComposerTokensIdDeletePost**](docs/Api/ComposerTokenApi.md#apicomposertokensiddeletepost) | **POST** /api/ComposerTokens/{id}/delete | Disable a composer token
*ComposerTokenApi* | [**apiComposerTokensIdRenamePost**](docs/Api/ComposerTokenApi.md#apicomposertokensidrenamepost) | **POST** /api/ComposerTokens/{id}/rename | Renames a Composer token
*CourseApi* | [**apiCoursesFromAcademyPut**](docs/Api/CourseApi.md#apicoursesfromacademyput) | **PUT** /api/Courses/fromAcademy | Upserts a course
*CourseApi* | [**apiCoursesGet**](docs/Api/CourseApi.md#apicoursesget) | **GET** /api/Courses | Get courses
*CourseApi* | [**apiCoursesIdGet**](docs/Api/CourseApi.md#apicoursesidget) | **GET** /api/Courses/{id} | 
*CourseEnrollmentApi* | [**apiCourseEnrollmentsBulkInvitePost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsbulkinvitepost) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
*CourseEnrollmentApi* | [**apiCourseEnrollmentsFromAcademyPut**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsfromacademyput) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsget) | **GET** /api/CourseEnrollments | Get course enrollments
*CourseEnrollmentApi* | [**apiCourseEnrollmentsGetLegacyExpiringGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsgetlegacyexpiringget) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdGet**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsidget) | **GET** /api/CourseEnrollments/{id} | Get a course enrollment
*CourseEnrollmentApi* | [**apiCourseEnrollmentsIdInvitePost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentsidinvitepost) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
*CourseEnrollmentApi* | [**apiCourseEnrollmentsTransferPost**](docs/Api/CourseEnrollmentApi.md#apicourseenrollmentstransferpost) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments
*CustomerApi* | [**apiCustomersActivatePost**](docs/Api/CustomerApi.md#apicustomersactivatepost) | **POST** /api/Customers/activate | Activate the account of a user
*CustomerApi* | [**apiCustomersAllrolesGet**](docs/Api/CustomerApi.md#apicustomersallrolesget) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
*CustomerApi* | [**apiCustomersCurrentGet**](docs/Api/CustomerApi.md#apicustomerscurrentget) | **GET** /api/Customers/current | Get the current customer
*CustomerApi* | [**apiCustomersCustomerIdBuyerCourseEnrollmentsGet**](docs/Api/CustomerApi.md#apicustomerscustomeridbuyercourseenrollmentsget) | **GET** /api/Customers/{customerId}/buyerCourseEnrollments | Find Course Enrollments that a customer is buyer of
*CustomerApi* | [**apiCustomersCustomerIdComposerTokensGet**](docs/Api/CustomerApi.md#apicustomerscustomeridcomposertokensget) | **GET** /api/Customers/{customerId}/composerTokens | Get composer tokens
*CustomerApi* | [**apiCustomersCustomerIdComposerTokensIdGet**](docs/Api/CustomerApi.md#apicustomerscustomeridcomposertokensidget) | **GET** /api/Customers/{customerId}/composerTokens/{id} | Get a composer token
*CustomerApi* | [**apiCustomersCustomerIdCourseEnrollmentsGet**](docs/Api/CustomerApi.md#apicustomerscustomeridcourseenrollmentsget) | **GET** /api/Customers/{customerId}/courseEnrollments | Find Course Enrollments
*CustomerApi* | [**apiCustomersCustomerIdIdentitiesGet**](docs/Api/CustomerApi.md#apicustomerscustomerididentitiesget) | **GET** /api/Customers/{customerId}/identities | Get user identities
*CustomerApi* | [**apiCustomersCustomerIdNewsletterDelete**](docs/Api/CustomerApi.md#apicustomerscustomeridnewsletterdelete) | **DELETE** /api/Customers/{customerId}/newsletter | Unsubscribe from the newsletter
*CustomerApi* | [**apiCustomersCustomerIdNewsletterGet**](docs/Api/CustomerApi.md#apicustomerscustomeridnewsletterget) | **GET** /api/Customers/{customerId}/newsletter | Newsletter subscription status
*CustomerApi* | [**apiCustomersCustomerIdNewsletterPost**](docs/Api/CustomerApi.md#apicustomerscustomeridnewsletterpost) | **POST** /api/Customers/{customerId}/newsletter | Subscribe to the newsletter
*CustomerApi* | [**apiCustomersCustomerIdOrdersGet**](docs/Api/CustomerApi.md#apicustomerscustomeridordersget) | **GET** /api/Customers/{customerId}/orders | Get orders
*CustomerApi* | [**apiCustomersCustomerIdOrdersIdGet**](docs/Api/CustomerApi.md#apicustomerscustomeridordersidget) | **GET** /api/Customers/{customerId}/orders/{id} | Get a order
*CustomerApi* | [**apiCustomersCustomerIdSitesGet**](docs/Api/CustomerApi.md#apicustomerscustomeridsitesget) | **GET** /api/Customers/{customerId}/sites | Get sites
*CustomerApi* | [**apiCustomersCustomerIdSitesIdGet**](docs/Api/CustomerApi.md#apicustomerscustomeridsitesidget) | **GET** /api/Customers/{customerId}/sites/{id} | Get a site
*CustomerApi* | [**apiCustomersCustomerIdSitesPost**](docs/Api/CustomerApi.md#apicustomerscustomeridsitespost) | **POST** /api/Customers/{customerId}/sites | Create a site for a user
*CustomerApi* | [**apiCustomersCustomerIdStudentCourseEnrollmentsGet**](docs/Api/CustomerApi.md#apicustomerscustomeridstudentcourseenrollmentsget) | **GET** /api/Customers/{customerId}/studentCourseEnrollments | Find Course Enrollments that a customer is student in
*CustomerApi* | [**apiCustomersCustomerIdSubscriptionsGet**](docs/Api/CustomerApi.md#apicustomerscustomeridsubscriptionsget) | **GET** /api/Customers/{customerId}/subscriptions | Get subscriptions
*CustomerApi* | [**apiCustomersCustomerIdSubscriptionsIdCancelPost**](docs/Api/CustomerApi.md#apicustomerscustomeridsubscriptionsidcancelpost) | **POST** /api/Customers/{customerId}/subscriptions/{id}/cancel | Cancel (part of) a subscription.
*CustomerApi* | [**apiCustomersCustomerIdSubscriptionsIdGet**](docs/Api/CustomerApi.md#apicustomerscustomeridsubscriptionsidget) | **GET** /api/Customers/{customerId}/subscriptions/{id} | Get a subscriptions
*CustomerApi* | [**apiCustomersGet**](docs/Api/CustomerApi.md#apicustomersget) | **GET** /api/Customers | Get customers
*CustomerApi* | [**apiCustomersIdAccessTokensPost**](docs/Api/CustomerApi.md#apicustomersidaccesstokenspost) | **POST** /api/Customers/{id}/accessTokens | Create an access token for a user
*CustomerApi* | [**apiCustomersIdAvatarPost**](docs/Api/CustomerApi.md#apicustomersidavatarpost) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
*CustomerApi* | [**apiCustomersIdDownloadGet**](docs/Api/CustomerApi.md#apicustomersiddownloadget) | **GET** /api/Customers/{id}/download | Download profile.
*CustomerApi* | [**apiCustomersIdEnablePost**](docs/Api/CustomerApi.md#apicustomersidenablepost) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
*CustomerApi* | [**apiCustomersIdFindRefundsGet**](docs/Api/CustomerApi.md#apicustomersidfindrefundsget) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
*CustomerApi* | [**apiCustomersIdGdprDeleteDelete**](docs/Api/CustomerApi.md#apicustomersidgdprdeletedelete) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
*CustomerApi* | [**apiCustomersIdGet**](docs/Api/CustomerApi.md#apicustomersidget) | **GET** /api/Customers/{id} | Get a customer
*CustomerApi* | [**apiCustomersIdPasswordPatch**](docs/Api/CustomerApi.md#apicustomersidpasswordpatch) | **PATCH** /api/Customers/{id}/password | Update a customer&#x27;s password in WordPress
*CustomerApi* | [**apiCustomersIdPatch**](docs/Api/CustomerApi.md#apicustomersidpatch) | **PATCH** /api/Customers/{id} | 
*CustomerApi* | [**apiCustomersIdProfileGet**](docs/Api/CustomerApi.md#apicustomersidprofileget) | **GET** /api/Customers/{id}/profile | 
*CustomerApi* | [**apiCustomersIdProfilePatch**](docs/Api/CustomerApi.md#apicustomersidprofilepatch) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
*CustomerApi* | [**apiCustomersIdRoleMappingDelete**](docs/Api/CustomerApi.md#apicustomersidrolemappingdelete) | **DELETE** /api/Customers/{id}/roleMapping | 
*CustomerApi* | [**apiCustomersIdRoleMappingPost**](docs/Api/CustomerApi.md#apicustomersidrolemappingpost) | **POST** /api/Customers/{id}/roleMapping | 
*CustomerApi* | [**apiCustomersIdRolesGet**](docs/Api/CustomerApi.md#apicustomersidrolesget) | **GET** /api/Customers/{id}/roles | 
*CustomerApi* | [**apiCustomersNewsletterListSubscribePost**](docs/Api/CustomerApi.md#apicustomersnewsletterlistsubscribepost) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
*CustomerApi* | [**apiCustomersNonceGet**](docs/Api/CustomerApi.md#apicustomersnonceget) | **GET** /api/Customers/nonce | Get a nonce from Yoast.com
*CustomerApi* | [**apiCustomersResetPasswordPatch**](docs/Api/CustomerApi.md#apicustomersresetpasswordpatch) | **PATCH** /api/Customers/resetPassword | Reset the user&#x27;s password.
*CustomerApi* | [**apiCustomersRolemappingIdsGet**](docs/Api/CustomerApi.md#apicustomersrolemappingidsget) | **GET** /api/Customers/rolemapping-ids | Get the ids of all customers with at least one role.
*CustomerApi* | [**apiCustomersSendResetPasswordEmailPost**](docs/Api/CustomerApi.md#apicustomerssendresetpasswordemailpost) | **POST** /api/Customers/sendResetPasswordEmail | Send a reset password email to the user.
*CustomerApi* | [**apiCustomersSignupPost**](docs/Api/CustomerApi.md#apicustomerssignuppost) | **POST** /api/Customers/signup | Signup a customer on yoast.com.
*CustomerNoteApi* | [**apiCustomerNotesGet**](docs/Api/CustomerNoteApi.md#apicustomernotesget) | **GET** /api/CustomerNotes | Get customer notes
*CustomerNoteApi* | [**apiCustomerNotesIdDelete**](docs/Api/CustomerNoteApi.md#apicustomernotesiddelete) | **DELETE** /api/CustomerNotes/{id} | 
*CustomerNoteApi* | [**apiCustomerNotesIdGet**](docs/Api/CustomerNoteApi.md#apicustomernotesidget) | **GET** /api/CustomerNotes/{id} | Get a customer note
*CustomerNoteApi* | [**apiCustomerNotesPost**](docs/Api/CustomerNoteApi.md#apicustomernotespost) | **POST** /api/CustomerNotes | 
*DownloadApi* | [**apiDownloadsFileNameGet**](docs/Api/DownloadApi.md#apidownloadsfilenameget) | **GET** /api/downloads/file/{name} | Route to download a file
*DownloadApi* | [**apiDownloadsFileNamePost**](docs/Api/DownloadApi.md#apidownloadsfilenamepost) | **POST** /api/downloads/file/{name} | Route to update a file.
*EDDApi* | [**eddSlApiGet**](docs/Api/EDDApi.md#eddslapiget) | **GET** /edd-sl-api | Activate or deactivate a site license
*EDDApi* | [**eddSlApiPost**](docs/Api/EDDApi.md#eddslapipost) | **POST** /edd-sl-api | 
*ExportOrdersApi* | [**exportOrdersYearMonthTypeGet**](docs/Api/ExportOrdersApi.md#exportordersyearmonthtypeget) | **GET** /export-orders/{year}/{month}/{type} | 
*FromWooCommerceApi* | [**apiCustomersFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apicustomersfromwoocommerceput) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
*FromWooCommerceApi* | [**apiOrdersFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiordersfromwoocommerceput) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
*FromWooCommerceApi* | [**apiProductGroupsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiproductgroupsfromwoocommerceput) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.
*FromWooCommerceApi* | [**apiProductsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apiproductsfromwoocommerceput) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
*FromWooCommerceApi* | [**apiSubscriptionsFromWooCommercePut**](docs/Api/FromWooCommerceApi.md#apisubscriptionsfromwoocommerceput) | **PUT** /api/Subscriptions/fromWooCommerce | Sync subscriptions to MyYoast.
*GDPRApi* | [**apiCustomersIdGdprDeleteDelete**](docs/Api/GDPRApi.md#apicustomersidgdprdeletedelete) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
*HelpscoutApi* | [**helpscoutPost**](docs/Api/HelpscoutApi.md#helpscoutpost) | **POST** /helpscout | Get information about a customer
*OrderApi* | [**apiOrdersExportGet**](docs/Api/OrderApi.md#apiordersexportget) | **GET** /api/Orders/export | Get orders
*OrderApi* | [**apiOrdersGet**](docs/Api/OrderApi.md#apiordersget) | **GET** /api/Orders | Get orders
*OrderApi* | [**apiOrdersIdGet**](docs/Api/OrderApi.md#apiordersidget) | **GET** /api/Orders/{id} | Get a order
*OrderApi* | [**apiOrdersIdInvoiceGet**](docs/Api/OrderApi.md#apiordersidinvoiceget) | **GET** /api/Orders/{id}/invoice | Create invoice
*OrderApi* | [**apiOrdersIdRefundsRefundIdInvoiceGet**](docs/Api/OrderApi.md#apiordersidrefundsrefundidinvoiceget) | **GET** /api/Orders/{id}/refunds/{refundId}/invoice | Creates a credit note
*PackagesApi* | [**packagesDistOrgNameArchiveZipGet**](docs/Api/PackagesApi.md#packagesdistorgnamearchivezipget) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
*PackagesApi* | [**packagesPOrgNameAndHashJsonGet**](docs/Api/PackagesApi.md#packagesporgnameandhashjsonget) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json
*PackagesApi* | [**packagesPackagesJsonGet**](docs/Api/PackagesApi.md#packagespackagesjsonget) | **GET** /packages/packages.json | Serves the general packages.json file.
*ProductApi* | [**apiProductsGet**](docs/Api/ProductApi.md#apiproductsget) | **GET** /api/Products | Get products
*ProductApi* | [**apiProductsIdGet**](docs/Api/ProductApi.md#apiproductsidget) | **GET** /api/Products/{id} | Get a product
*ProductApi* | [**apiProductsIdPatch**](docs/Api/ProductApi.md#apiproductsidpatch) | **PATCH** /api/Products/{id} | 
*ProductApi* | [**apiProductsPost**](docs/Api/ProductApi.md#apiproductspost) | **POST** /api/Products | 
*ProductApi* | [**apiProductsProductIdDelete**](docs/Api/ProductApi.md#apiproductsproductiddelete) | **DELETE** /api/Products/{productId} | 
*ProductGroupApi* | [**apiProductGroupsGet**](docs/Api/ProductGroupApi.md#apiproductgroupsget) | **GET** /api/ProductGroups | Get productgroups
*RefundApi* | [**apiRefundsExportGet**](docs/Api/RefundApi.md#apirefundsexportget) | **GET** /api/Refunds/export | Get refunds
*RefundApi* | [**apiRefundsGet**](docs/Api/RefundApi.md#apirefundsget) | **GET** /api/Refunds | Get refunds
*RefundApi* | [**apiRefundsIdGet**](docs/Api/RefundApi.md#apirefundsidget) | **GET** /api/Refunds/{id} | Get a refund
*RobotsApi* | [**robotsTxtGet**](docs/Api/RobotsApi.md#robotstxtget) | **GET** /robots.txt | 
*ServerCheckApi* | [**serverCheckGet**](docs/Api/ServerCheckApi.md#servercheckget) | **GET** /server-check | Server health check
*SiteApi* | [**apiSitesCurrentGet**](docs/Api/SiteApi.md#apisitescurrentget) | **GET** /api/Sites/current | Get the current connected site for an access token.
*SiteApi* | [**apiSitesGet**](docs/Api/SiteApi.md#apisitesget) | **GET** /api/Sites | Get sites
*SiteApi* | [**apiSitesIdDelete**](docs/Api/SiteApi.md#apisitesiddelete) | **DELETE** /api/Sites/{id} | 
*SiteApi* | [**apiSitesIdGet**](docs/Api/SiteApi.md#apisitesidget) | **GET** /api/Sites/{id} | Get a site
*SiteApi* | [**apiSitesIdPatch**](docs/Api/SiteApi.md#apisitesidpatch) | **PATCH** /api/Sites/{id} | 
*SiteApi* | [**apiSitesIdSubscriptionsPut**](docs/Api/SiteApi.md#apisitesidsubscriptionsput) | **PUT** /api/Sites/{id}/subscriptions | Adds a subscription to a site
*SiteApi* | [**apiSitesIdSubscriptionsSubscriptionIdDelete**](docs/Api/SiteApi.md#apisitesidsubscriptionssubscriptioniddelete) | **DELETE** /api/Sites/{id}/subscriptions/{subscriptionId} | Removes a subscription from a site
*SiteApi* | [**apiSitesIndexPost**](docs/Api/SiteApi.md#apisitesindexpost) | **POST** /api/Sites/index | 
*SiteApi* | [**apiSitesSwitchSubscriptionNumberOfTimesPost**](docs/Api/SiteApi.md#apisitesswitchsubscriptionnumberoftimespost) | **POST** /api/Sites/switchSubscriptionNumberOfTimes | Switches the subscription for a number of times.
*SiteApi* | [**apiSitesSwitchSubscriptionPost**](docs/Api/SiteApi.md#apisitesswitchsubscriptionpost) | **POST** /api/Sites/switchSubscription | Switches the subscription for a number of times.
*SiteApi* | [**apiSitesTransferPost**](docs/Api/SiteApi.md#apisitestransferpost) | **POST** /api/Sites/transfer | Transfer sites.
*SubscriptionApi* | [**apiSubscriptionsExpiringGet**](docs/Api/SubscriptionApi.md#apisubscriptionsexpiringget) | **GET** /api/Subscriptions/expiring | 
*SubscriptionApi* | [**apiSubscriptionsGet**](docs/Api/SubscriptionApi.md#apisubscriptionsget) | **GET** /api/Subscriptions | Get subscriptions
*SubscriptionApi* | [**apiSubscriptionsIdDelete**](docs/Api/SubscriptionApi.md#apisubscriptionsiddelete) | **DELETE** /api/Subscriptions/{id} | Delete a subscription
*SubscriptionApi* | [**apiSubscriptionsIdGet**](docs/Api/SubscriptionApi.md#apisubscriptionsidget) | **GET** /api/Subscriptions/{id} | Get a subscription
*SubscriptionApi* | [**apiSubscriptionsIdRecalculateSubscriptionCountPost**](docs/Api/SubscriptionApi.md#apisubscriptionsidrecalculatesubscriptioncountpost) | **POST** /api/Subscriptions/{id}/recalculateSubscriptionCount | Recalculate SubscriptionCount.

## Documentation For Models

 - [AccessToken](docs/Model/AccessToken.md)
 - [ActivateAccountDto](docs/Model/ActivateAccountDto.md)
 - [AddSubscriptionDto](docs/Model/AddSubscriptionDto.md)
 - [BillingDto](docs/Model/BillingDto.md)
 - [BulkInviteDto](docs/Model/BulkInviteDto.md)
 - [CancelSubscriptionBodyDto](docs/Model/CancelSubscriptionBodyDto.md)
 - [ChangePasswordDto](docs/Model/ChangePasswordDto.md)
 - [ComposerToken](docs/Model/ComposerToken.md)
 - [CouponLineDto](docs/Model/CouponLineDto.md)
 - [Course](docs/Model/Course.md)
 - [CourseDataDto](docs/Model/CourseDataDto.md)
 - [CourseEnrollment](docs/Model/CourseEnrollment.md)
 - [CourseEnrollmentFromAcademyDto](docs/Model/CourseEnrollmentFromAcademyDto.md)
 - [CreateCustomerNoteDto](docs/Model/CreateCustomerNoteDto.md)
 - [CreateSiteBodyDto](docs/Model/CreateSiteBodyDto.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerData](docs/Model/CustomerData.md)
 - [CustomerFromWooDto](docs/Model/CustomerFromWooDto.md)
 - [CustomerNote](docs/Model/CustomerNote.md)
 - [EddDTO](docs/Model/EddDTO.md)
 - [ExtraCourseDataDto](docs/Model/ExtraCourseDataDto.md)
 - [ExtraOrderData](docs/Model/ExtraOrderData.md)
 - [ExtraProductData](docs/Model/ExtraProductData.md)
 - [ExtraSubscriptionData](docs/Model/ExtraSubscriptionData.md)
 - [FromAcademyDto](docs/Model/FromAcademyDto.md)
 - [GenerateDto](docs/Model/GenerateDto.md)
 - [HelpScoutCustomerData](docs/Model/HelpScoutCustomerData.md)
 - [HelpScoutDto](docs/Model/HelpScoutDto.md)
 - [InviteDto](docs/Model/InviteDto.md)
 - [JSZip](docs/Model/JSZip.md)
 - [LineItem](docs/Model/LineItem.md)
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
 - [RenewalAmount](docs/Model/RenewalAmount.md)
 - [ResetPasswordDto](docs/Model/ResetPasswordDto.md)
 - [RoleDto](docs/Model/RoleDto.md)
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
 - [UpdateUserDto](docs/Model/UpdateUserDto.md)
 - [UpdateUserToWordpressDto](docs/Model/UpdateUserToWordpressDto.md)
 - [UserIdentity](docs/Model/UserIdentity.md)

## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string


## Author



