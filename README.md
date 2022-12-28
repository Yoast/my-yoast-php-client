# my-yoast-php-client
The MyYoast Api

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


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateDto(); // \Yoast\MyYoastApiClient\Model\UpdateDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->changeStudent($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->changeStudent: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->getMany: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->getManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->getManyPaged: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->getOne: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CreateDto(); // \Yoast\MyYoastApiClient\Model\CreateDto | 

try {
    $result = $apiInstance->invite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->invite: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferAdmissionDto(); // \Yoast\MyYoastApiClient\Model\TransferAdmissionDto | 

try {
    $result = $apiInstance->transferAdmissions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->transferAdmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://my.yoast.test:3000*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdmissionApi* | [**changeStudent**](docs/Api/AdmissionApi.md#changestudent) | **PUT** /api/Admissions/{id} | Update an admission
*AdmissionApi* | [**getMany**](docs/Api/AdmissionApi.md#getmany) | **GET** /api/Admissions | Get admissions
*AdmissionApi* | [**getManyPaged**](docs/Api/AdmissionApi.md#getmanypaged) | **GET** /api/Admissions/paged | Get admissions
*AdmissionApi* | [**getOne**](docs/Api/AdmissionApi.md#getone) | **GET** /api/Admissions/{id} | Get an admission
*AdmissionApi* | [**invite**](docs/Api/AdmissionApi.md#invite) | **POST** /api/Admissions | Invite a customer
*AdmissionApi* | [**transferAdmissions**](docs/Api/AdmissionApi.md#transferadmissions) | **POST** /api/Admissions/transfer | Transfer admissions between customers
*AuthApi* | [**getAccessTokenWithoutWordPress**](docs/Api/AuthApi.md#getaccesstokenwithoutwordpress) | **POST** /api/Customers/login | Log in a user on MyYoast.
*AuthApi* | [**loginUser**](docs/Api/AuthApi.md#loginuser) | **POST** /api/Customers/login-user | 
*AuthApi* | [**logoutUser**](docs/Api/AuthApi.md#logoutuser) | **POST** /api/Customers/logout-user | Logout the user on Yoast.com.
*AuthApi* | [**logoutWithoutWordPress**](docs/Api/AuthApi.md#logoutwithoutwordpress) | **GET** /logout | 
*AuthApi* | [**yoastComCallback**](docs/Api/AuthApi.md#yoastcomcallback) | **GET** /auth/yoast/callback | 
*AuthApi* | [**yoastComLogin**](docs/Api/AuthApi.md#yoastcomlogin) | **GET** /auth/yoast | 
*AuthenticationApi* | [**getAccessToken**](docs/Api/AuthenticationApi.md#getaccesstoken) | **GET** /api/auth/{id}/getAccessToken | 
*AuthenticationApi* | [**getProfile**](docs/Api/AuthenticationApi.md#getprofile) | **GET** /api/profile | 
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /api/auth/login | 
*BlacklistApi* | [**createOne**](docs/Api/BlacklistApi.md#createone) | **POST** /api/Blacklist | Creates a blacklisted site
*BlacklistApi* | [**deleteOne**](docs/Api/BlacklistApi.md#deleteone) | **DELETE** /api/Blacklist/{id} | Remove a site from the blacklist
*BlacklistApi* | [**getMany**](docs/Api/BlacklistApi.md#getmany) | **GET** /api/Blacklist | Gets blacklisted sites
*BlacklistApi* | [**getManyPaged**](docs/Api/BlacklistApi.md#getmanypaged) | **GET** /api/Blacklist/paged | Gets blacklisted sites
*CloudflareApi* | [**purgeKVStore**](docs/Api/CloudflareApi.md#purgekvstore) | **POST** /api/cloudflare/kv/registered-domains/purge | Purge kv pairs from the registered domains key value store in Cloudflare
*CloudflareApi* | [**updateAll**](docs/Api/CloudflareApi.md#updateall) | **POST** /api/cloudflare/kv/registered-domains/update-all | Update sites in the registered domains key value store in Cloudflare
*ComposerTokenApi* | [**disable**](docs/Api/ComposerTokenApi.md#disable) | **POST** /api/ComposerTokens/{id}/delete | Disable a composer token
*ComposerTokenApi* | [**generate**](docs/Api/ComposerTokenApi.md#generate) | **POST** /api/ComposerTokens/generate | Generates a Composer token
*ComposerTokenApi* | [**rename**](docs/Api/ComposerTokenApi.md#rename) | **POST** /api/ComposerTokens/{id}/rename | Renames a Composer token
*CourseApi* | [**fromAcademy**](docs/Api/CourseApi.md#fromacademy) | **PUT** /api/Courses/fromAcademy | Upserts a course
*CourseApi* | [**getMany**](docs/Api/CourseApi.md#getmany) | **GET** /api/Courses | Get courses
*CourseApi* | [**getOne**](docs/Api/CourseApi.md#getone) | **GET** /api/Courses/{id} | 
*CourseEnrollmentApi* | [**bulkInvite**](docs/Api/CourseEnrollmentApi.md#bulkinvite) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
*CourseEnrollmentApi* | [**fromAcademy**](docs/Api/CourseEnrollmentApi.md#fromacademy) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
*CourseEnrollmentApi* | [**getLegacyExpiring**](docs/Api/CourseEnrollmentApi.md#getlegacyexpiring) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
*CourseEnrollmentApi* | [**getMany**](docs/Api/CourseEnrollmentApi.md#getmany) | **GET** /api/CourseEnrollments | Get course enrollments
*CourseEnrollmentApi* | [**getManyPaged**](docs/Api/CourseEnrollmentApi.md#getmanypaged) | **GET** /api/CourseEnrollments/paged | Get customers
*CourseEnrollmentApi* | [**getOne**](docs/Api/CourseEnrollmentApi.md#getone) | **GET** /api/CourseEnrollments/{id} | Get a course enrollment
*CourseEnrollmentApi* | [**invite**](docs/Api/CourseEnrollmentApi.md#invite) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
*CourseEnrollmentApi* | [**transfer**](docs/Api/CourseEnrollmentApi.md#transfer) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments
*CustomerApi* | [**activate**](docs/Api/CustomerApi.md#activate) | **POST** /api/Customers/activate | Activate the account of a user
*CustomerApi* | [**addRole**](docs/Api/CustomerApi.md#addrole) | **POST** /api/Customers/{id}/roleMapping | 
*CustomerApi* | [**cancelSubscription**](docs/Api/CustomerApi.md#cancelsubscription) | **POST** /api/Customers/{customerId}/subscriptions/{id}/cancel | Cancel (part of) a subscription.
*CustomerApi* | [**changePassword**](docs/Api/CustomerApi.md#changepassword) | **PATCH** /api/Customers/{id}/password | Update a customer&#x27;s password in WordPress
*CustomerApi* | [**createAccessToken**](docs/Api/CustomerApi.md#createaccesstoken) | **POST** /api/Customers/{id}/accessTokens | Create an access token for a user
*CustomerApi* | [**createAccount**](docs/Api/CustomerApi.md#createaccount) | **POST** /api/Customers/create-account | Creates an account for a customer on yoast.com without the signup flow.
*CustomerApi* | [**createSite**](docs/Api/CustomerApi.md#createsite) | **POST** /api/Customers/{customerId}/sites | Create a site for a user
*CustomerApi* | [**current**](docs/Api/CustomerApi.md#current) | **GET** /api/Customers/current | Get the current customer
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
*CustomerApi* | [**deleteRole**](docs/Api/CustomerApi.md#deleterole) | **DELETE** /api/Customers/{id}/roleMapping | 
*CustomerApi* | [**downloadProfile**](docs/Api/CustomerApi.md#downloadprofile) | **GET** /api/Customers/{id}/download | Download profile.
*CustomerApi* | [**enable**](docs/Api/CustomerApi.md#enable) | **POST** /api/Customers/{id}/enable | Enables the customer with the given ID
*CustomerApi* | [**findRefunds**](docs/Api/CustomerApi.md#findrefunds) | **GET** /api/Customers/{id}/findRefunds | Find refunds for user
*CustomerApi* | [**getAllRoles**](docs/Api/CustomerApi.md#getallroles) | **GET** /api/Customers/allroles | Get all existing roles with their ID.
*CustomerApi* | [**getBuyerCourseEnrollments**](docs/Api/CustomerApi.md#getbuyercourseenrollments) | **GET** /api/Customers/{customerId}/buyerCourseEnrollments | Find Course Enrollments that a customer is buyer of
*CustomerApi* | [**getCourseAccessList**](docs/Api/CustomerApi.md#getcourseaccesslist) | **GET** /api/Customers/academyCourseAccessList/{sourceId} | Academy Course access
*CustomerApi* | [**getCourseAccessListByCustomerId**](docs/Api/CustomerApi.md#getcourseaccesslistbycustomerid) | **GET** /api/Customers/academyCourseAccessListByCustomerId/{customerId} | Academy Course access
*CustomerApi* | [**getCourseEnrollments**](docs/Api/CustomerApi.md#getcourseenrollments) | **GET** /api/Customers/{customerId}/courseEnrollments | Find Course Enrollments
*CustomerApi* | [**getCustomersWithRole**](docs/Api/CustomerApi.md#getcustomerswithrole) | **GET** /api/Customers/rolemapping-ids | Get the ids of all customers with at least one role.
*CustomerApi* | [**getMany**](docs/Api/CustomerApi.md#getmany) | **GET** /api/Customers/{customerId}/composerTokens | Get composer tokens
*CustomerApi* | [**getManyPaged**](docs/Api/CustomerApi.md#getmanypaged) | **GET** /api/Customers/paged | Get customers
*CustomerApi* | [**getMany_0**](docs/Api/CustomerApi.md#getmany_0) | **GET** /api/Customers/{customerId}/subscriptions | Get subscriptions
*CustomerApi* | [**getMany_1**](docs/Api/CustomerApi.md#getmany_1) | **GET** /api/Customers/{customerId}/sites | Get sites
*CustomerApi* | [**getMany_2**](docs/Api/CustomerApi.md#getmany_2) | **GET** /api/Customers/{customerId}/orders | Get orders
*CustomerApi* | [**getMany_3**](docs/Api/CustomerApi.md#getmany_3) | **GET** /api/Customers/{id}/roles | 
*CustomerApi* | [**getMany_4**](docs/Api/CustomerApi.md#getmany_4) | **GET** /api/Customers/{customerId}/identities | Get user identities
*CustomerApi* | [**getMany_5**](docs/Api/CustomerApi.md#getmany_5) | **GET** /api/Customers | Get customers
*CustomerApi* | [**getOne**](docs/Api/CustomerApi.md#getone) | **GET** /api/Customers/{customerId}/composerTokens/{id} | Get a composer token
*CustomerApi* | [**getOne_0**](docs/Api/CustomerApi.md#getone_0) | **GET** /api/Customers/{customerId}/subscriptions/{id} | Get a subscriptions
*CustomerApi* | [**getOne_1**](docs/Api/CustomerApi.md#getone_1) | **GET** /api/Customers/{customerId}/sites/{id} | Get a site
*CustomerApi* | [**getOne_2**](docs/Api/CustomerApi.md#getone_2) | **GET** /api/Customers/{customerId}/orders/{id} | Get a order
*CustomerApi* | [**getOne_3**](docs/Api/CustomerApi.md#getone_3) | **GET** /api/Customers/{id} | Get a customer
*CustomerApi* | [**getStudentCourseEnrollments**](docs/Api/CustomerApi.md#getstudentcourseenrollments) | **GET** /api/Customers/{customerId}/studentCourseEnrollments | Find Course Enrollments that a customer is student in
*CustomerApi* | [**patchProfile**](docs/Api/CustomerApi.md#patchprofile) | **PATCH** /api/Customers/{id}/profile | Update a customer to WordPress
*CustomerApi* | [**profile**](docs/Api/CustomerApi.md#profile) | **GET** /api/Customers/{id}/profile | 
*CustomerApi* | [**resetPassword**](docs/Api/CustomerApi.md#resetpassword) | **PATCH** /api/Customers/resetPassword | Reset the user&#x27;s password.
*CustomerApi* | [**sendResetPasswordEmail**](docs/Api/CustomerApi.md#sendresetpasswordemail) | **POST** /api/Customers/sendResetPasswordEmail | Send a reset password email to the user.
*CustomerApi* | [**signup**](docs/Api/CustomerApi.md#signup) | **POST** /api/Customers/signup | Signup a customer on yoast.com following the normal signup flow.
*CustomerApi* | [**status**](docs/Api/CustomerApi.md#status) | **GET** /api/Customers/{customerId}/newsletter | Newsletter subscription status
*CustomerApi* | [**subscribe**](docs/Api/CustomerApi.md#subscribe) | **POST** /api/Customers/{customerId}/newsletter | Subscribe to the newsletter
*CustomerApi* | [**subscribeByEmail**](docs/Api/CustomerApi.md#subscribebyemail) | **POST** /api/Customers/newsletter/{list}/subscribe | Subscribes a user to a newsletter
*CustomerApi* | [**unsubscribe**](docs/Api/CustomerApi.md#unsubscribe) | **DELETE** /api/Customers/{customerId}/newsletter | Unsubscribe from the newsletter
*CustomerApi* | [**updateOne**](docs/Api/CustomerApi.md#updateone) | **PATCH** /api/Customers/{id} | 
*CustomerApi* | [**uploadAvatar**](docs/Api/CustomerApi.md#uploadavatar) | **POST** /api/Customers/{id}/avatar | Upload a new UserAvatar to WordPress
*CustomerNoteApi* | [**createOne**](docs/Api/CustomerNoteApi.md#createone) | **POST** /api/CustomerNotes | 
*CustomerNoteApi* | [**deleteOne**](docs/Api/CustomerNoteApi.md#deleteone) | **DELETE** /api/CustomerNotes/{id} | 
*CustomerNoteApi* | [**getMany**](docs/Api/CustomerNoteApi.md#getmany) | **GET** /api/CustomerNotes | Get customer notes
*CustomerNoteApi* | [**getOne**](docs/Api/CustomerNoteApi.md#getone) | **GET** /api/CustomerNotes/{id} | Get a customer note
*DefaultApi* | [**addAgency**](docs/Api/DefaultApi.md#addagency) | **POST** /api/SiteReview/Agency | 
*DefaultApi* | [**addOwnerToAgency**](docs/Api/DefaultApi.md#addownertoagency) | **POST** /api/SiteReview/Agency/add-owner | 
*DefaultApi* | [**createClient**](docs/Api/DefaultApi.md#createclient) | **POST** /api/SiteReview/Client | 
*DefaultApi* | [**createReview**](docs/Api/DefaultApi.md#createreview) | **POST** /api/SiteReview/Review | 
*DefaultApi* | [**disconnectOwnerFromAgency**](docs/Api/DefaultApi.md#disconnectownerfromagency) | **POST** /api/SiteReview/Agency/disconnect-owner | 
*DefaultApi* | [**getAllAgenciesWithUsers**](docs/Api/DefaultApi.md#getallagencieswithusers) | **GET** /api/SiteReview/Agency/all | 
*DefaultApi* | [**getAllForAgency**](docs/Api/DefaultApi.md#getallforagency) | **GET** /api/SiteReview/Client/Agency/{id} | 
*DefaultApi* | [**getAllForCustomer**](docs/Api/DefaultApi.md#getallforcustomer) | **GET** /api/SiteReview/Agency | 
*DefaultApi* | [**getAllReviews**](docs/Api/DefaultApi.md#getallreviews) | **GET** /api/SiteReview/Review/Agency/{id} | 
*DefaultApi* | [**getById**](docs/Api/DefaultApi.md#getbyid) | **GET** /api/SiteReview/Agency/{id} | 
*DefaultApi* | [**getClientById**](docs/Api/DefaultApi.md#getclientbyid) | **GET** /api/SiteReview/Client/{id} | 
*DefaultApi* | [**setTOTPTwoFactorConfig**](docs/Api/DefaultApi.md#settotptwofactorconfig) | **POST** /api/accounts/{id}/TOTPTwoFactorConfig | 
*DefaultApi* | [**updateClientById**](docs/Api/DefaultApi.md#updateclientbyid) | **PUT** /api/SiteReview/Agency/{id} | 
*DefaultApi* | [**updateClientById_0**](docs/Api/DefaultApi.md#updateclientbyid_0) | **PATCH** /api/SiteReview/Client/{id} | 
*DownloadApi* | [**downloadFile**](docs/Api/DownloadApi.md#downloadfile) | **GET** /api/downloads/file/{name} | Route to download a file
*DownloadApi* | [**uploadFile**](docs/Api/DownloadApi.md#uploadfile) | **POST** /api/downloads/file/{name} | Route to update a file.
*EDDApi* | [**handleGetRequest**](docs/Api/EDDApi.md#handlegetrequest) | **GET** /edd-sl-api | Activate or deactivate a site license
*EDDApi* | [**handlePostRequest**](docs/Api/EDDApi.md#handlepostrequest) | **POST** /edd-sl-api | 
*EmailApi* | [**sendEmails**](docs/Api/EmailApi.md#sendemails) | **POST** /api/Emails/bulk-send | 
*ExportOrdersApi* | [**exportOrders**](docs/Api/ExportOrdersApi.md#exportorders) | **GET** /export-orders/{year}/{month}/{type} | Creates an export for orders
*ExportOrdersApi* | [**exportOrdersV2**](docs/Api/ExportOrdersApi.md#exportordersv2) | **GET** /export-orders/v2/{from}/{to}/{type} | Creates an export for orders
*FromWooCommerceApi* | [**customerFromWooCommerce**](docs/Api/FromWooCommerceApi.md#customerfromwoocommerce) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
*FromWooCommerceApi* | [**orderFromWooCommerce**](docs/Api/FromWooCommerceApi.md#orderfromwoocommerce) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
*FromWooCommerceApi* | [**productFromWooCommerce**](docs/Api/FromWooCommerceApi.md#productfromwoocommerce) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
*FromWooCommerceApi* | [**productGroupFromWooCommerce**](docs/Api/FromWooCommerceApi.md#productgroupfromwoocommerce) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.
*GDPRApi* | [**deleteCustomer**](docs/Api/GDPRApi.md#deletecustomer) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.
*HelpscoutApi* | [**helpscout**](docs/Api/HelpscoutApi.md#helpscout) | **POST** /helpscout | Get information about a customer
*MailingListApi* | [**checkGetRoute**](docs/Api/MailingListApi.md#checkgetroute) | **GET** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | 
*MailingListApi* | [**getStatus**](docs/Api/MailingListApi.md#getstatus) | **GET** /api/Mailing-list/status | Get the subscription status.
*MailingListApi* | [**isSubscribedToNewsletter**](docs/Api/MailingListApi.md#issubscribedtonewsletter) | **GET** /api/Mailing-list/isSubscribedToNewsletter | Get the subscription status.
*MailingListApi* | [**mailChimpWebhook**](docs/Api/MailingListApi.md#mailchimpwebhook) | **POST** /api/Mailing-list/newsletter/tZhjyjwsYFUMPzNNhJaVADZZIrixRSbXOFgptZJyyK | Entry point for the mailchimp webhooks
*MailingListApi* | [**mailblueWebhook**](docs/Api/MailingListApi.md#mailbluewebhook) | **POST** /api/Mailing-list/newsletter/wALazNYUBfqZIeUDiqyzETbLdbkODeTCjKokMKcbJV | Entry point for the mailblue webhooks
*MailingListApi* | [**removeContactCustomField**](docs/Api/MailingListApi.md#removecontactcustomfield) | **DELETE** /api/Mailing-list/fieldValue | Delete contact tags and/or fields.
*MailingListApi* | [**setContactCustomField**](docs/Api/MailingListApi.md#setcontactcustomfield) | **POST** /api/Mailing-list/fieldValue | Update contact tags and/or fields.
*MailingListApi* | [**setContactTag**](docs/Api/MailingListApi.md#setcontacttag) | **POST** /api/Mailing-list/contactTag | Update contact tags and/or fields.
*MailingListApi* | [**subscribe**](docs/Api/MailingListApi.md#subscribe) | **POST** /api/Mailing-list/subscribe | Subscribe contact to a mailing list.
*MailingListApi* | [**subscribeToNewsletter**](docs/Api/MailingListApi.md#subscribetonewsletter) | **POST** /api/Mailing-list/subscribeToNewsletter | Subscribe contact to the newsletter.
*MailingListApi* | [**unsubscribe**](docs/Api/MailingListApi.md#unsubscribe) | **POST** /api/Mailing-list/unsubscribe | Unsubscribe to a mailing list.
*MailingListApi* | [**unsubscribeFromNewsletter**](docs/Api/MailingListApi.md#unsubscribefromnewsletter) | **POST** /api/Mailing-list/unsubscribeFromNewsletter | Unsubscribe to a mailing list.
*OrderApi* | [**export**](docs/Api/OrderApi.md#export) | **GET** /api/Orders/export | Get orders
*OrderApi* | [**getAutoRenewalCount**](docs/Api/OrderApi.md#getautorenewalcount) | **GET** /api/Orders/auto-renewal-count | 
*OrderApi* | [**getMany**](docs/Api/OrderApi.md#getmany) | **GET** /api/Orders | Get orders
*OrderApi* | [**getManyPaged**](docs/Api/OrderApi.md#getmanypaged) | **GET** /api/Orders/paged | Get orders
*OrderApi* | [**getOne**](docs/Api/OrderApi.md#getone) | **GET** /api/Orders/{id} | Get a order
*OrderApi* | [**getOneByInvoice**](docs/Api/OrderApi.md#getonebyinvoice) | **GET** /api/Orders/InvoiceNumber/{invoiceNumber} | Get a order by invoiceNumber
*OrderApi* | [**getProductGroupsByInvoice**](docs/Api/OrderApi.md#getproductgroupsbyinvoice) | **GET** /api/Orders/productGroups/{invoiceNumber} | Get productGroups by invoiceNumber
*OrderApi* | [**invoice**](docs/Api/OrderApi.md#invoice) | **GET** /api/Orders/{id}/invoice | Create invoice
*OrderApi* | [**refundInvoice**](docs/Api/OrderApi.md#refundinvoice) | **GET** /api/Orders/{id}/refunds/{refundId}/invoice | Creates a credit note
*PackagesApi* | [**serveArchiveZIP**](docs/Api/PackagesApi.md#servearchivezip) | **GET** /packages/dist/{org}/{name}/{archive}.zip | Serves an .zip of the plugin.
*PackagesApi* | [**servePackagesJSON**](docs/Api/PackagesApi.md#servepackagesjson) | **GET** /packages/packages.json | Serves the general packages.json file.
*PackagesApi* | [**serveProvider2JSON**](docs/Api/PackagesApi.md#serveprovider2json) | **GET** /packages/p2/{org}/{name}.json | Serves the requested provider.json
*PackagesApi* | [**serveProviderJSON**](docs/Api/PackagesApi.md#serveproviderjson) | **GET** /packages/p/{org}/{nameAndHash}.json | Serves the requested provider.json
*ProductApi* | [**deleteOne**](docs/Api/ProductApi.md#deleteone) | **DELETE** /api/Products/{productId} | 
*ProductApi* | [**getMany**](docs/Api/ProductApi.md#getmany) | **GET** /api/Products | Get products
*ProductApi* | [**getOne**](docs/Api/ProductApi.md#getone) | **GET** /api/Products/{id} | Get a product
*ProductApi* | [**pluginVersionDetails**](docs/Api/ProductApi.md#pluginversiondetails) | **GET** /api/Products/wordpressPluginVersionDetails | 
*ProductGroupApi* | [**getMany**](docs/Api/ProductGroupApi.md#getmany) | **GET** /api/ProductGroups | Get productgroups
*ProductGroupApi* | [**updateDownload**](docs/Api/ProductGroupApi.md#updatedownload) | **PATCH** /api/ProductGroups/updateDownload | Update the download
*ProvisionerApi* | [**getMany**](docs/Api/ProvisionerApi.md#getmany) | **GET** /api/ProvisionerData | Get provisioner data
*ProvisionerApi* | [**getOne**](docs/Api/ProvisionerApi.md#getone) | **GET** /api/ProvisionerData/{id} | Get provisioner data
*ProvisioningAccountApi* | [**setSiteForSubscription**](docs/Api/ProvisioningAccountApi.md#setsiteforsubscription) | **POST** /api/provisioning/account/regenerate-token | Generate a new auth token
*ProvisioningDownloadsApi* | [**currentVersion**](docs/Api/ProvisioningDownloadsApi.md#currentversion) | **GET** /api/provisioning/downloads/currentVersion | Retrieve the current version for the productCode for the provisioner.
*ProvisioningDownloadsApi* | [**currentZip**](docs/Api/ProvisioningDownloadsApi.md#currentzip) | **GET** /api/provisioning/downloads/currentZip | Redirect to the current zip for the productCode.
*ProvisioningUsersApi* | [**scheduleDelete**](docs/Api/ProvisioningUsersApi.md#scheduledelete) | **POST** /api/provisioning/user/schedule-delete | Schedule a delete for a subscription
*RefundApi* | [**export**](docs/Api/RefundApi.md#export) | **GET** /api/Refunds/export | Get refunds
*RefundApi* | [**getMany**](docs/Api/RefundApi.md#getmany) | **GET** /api/Refunds | Get refunds
*RefundApi* | [**getOne**](docs/Api/RefundApi.md#getone) | **GET** /api/Refunds/{id} | Get a refund
*RobotsApi* | [**serveRobots**](docs/Api/RobotsApi.md#serverobots) | **GET** /robots.txt | 
*ServerCheckApi* | [**checkHealth**](docs/Api/ServerCheckApi.md#checkhealth) | **GET** /server-check | Server health check
*SiteApi* | [**addSubscription**](docs/Api/SiteApi.md#addsubscription) | **PUT** /api/Sites/{id}/subscriptions | Adds a subscription to a site
*SiteApi* | [**current**](docs/Api/SiteApi.md#current) | **GET** /api/Sites/current | Get the current connected site for an access token.
*SiteApi* | [**currentClone**](docs/Api/SiteApi.md#currentclone) | **GET** /api/Sites/info | Get the current connected site for an access token.
*SiteApi* | [**deleteOne**](docs/Api/SiteApi.md#deleteone) | **DELETE** /api/Sites/{id} | 
*SiteApi* | [**getMany**](docs/Api/SiteApi.md#getmany) | **GET** /api/Sites | Get sites
*SiteApi* | [**getManyPaged**](docs/Api/SiteApi.md#getmanypaged) | **GET** /api/Sites/paged | Get sites
*SiteApi* | [**getOne**](docs/Api/SiteApi.md#getone) | **GET** /api/Sites/{id} | Get a site
*SiteApi* | [**getSiteStatus**](docs/Api/SiteApi.md#getsitestatus) | **GET** /api/Sites/getSiteStatus | Get a url&#x27;s HTTP status
*SiteApi* | [**index**](docs/Api/SiteApi.md#index) | **POST** /api/Sites/index | 
*SiteApi* | [**removeSubscription**](docs/Api/SiteApi.md#removesubscription) | **DELETE** /api/Sites/{id}/subscriptions/{subscriptionId} | Removes a subscription from a site
*SiteApi* | [**switchSubscription**](docs/Api/SiteApi.md#switchsubscription) | **POST** /api/Sites/switchSubscription | Switches the subscription for a number of times.
*SiteApi* | [**switchSubscriptionNumberOfTimes**](docs/Api/SiteApi.md#switchsubscriptionnumberoftimes) | **POST** /api/Sites/switchSubscriptionNumberOfTimes | Switches the subscription for a number of times.
*SiteApi* | [**updateOne**](docs/Api/SiteApi.md#updateone) | **PATCH** /api/Sites/{id} | 
*SiteApi* | [**updateSiteUrl**](docs/Api/SiteApi.md#updatesiteurl) | **PATCH** /api/Sites/{id}/url | 
*SubscriptionApi* | [**calculateExpansionPrice**](docs/Api/SubscriptionApi.md#calculateexpansionprice) | **GET** /api/Subscriptions/calculateExpansionPrice/{id}/{subscriptionNumber} | Calculate expansion price
*SubscriptionApi* | [**deleteOne**](docs/Api/SubscriptionApi.md#deleteone) | **DELETE** /api/Subscriptions/{id} | Delete a subscription
*SubscriptionApi* | [**forceCancel**](docs/Api/SubscriptionApi.md#forcecancel) | **POST** /api/Subscriptions/{id}/force-cancel | Forcefully cancel a subscription
*SubscriptionApi* | [**getExpiringSubscriptions**](docs/Api/SubscriptionApi.md#getexpiringsubscriptions) | **GET** /api/Subscriptions/expiring | 
*SubscriptionApi* | [**getMany**](docs/Api/SubscriptionApi.md#getmany) | **GET** /api/Subscriptions | Get subscriptions
*SubscriptionApi* | [**getManyPaged**](docs/Api/SubscriptionApi.md#getmanypaged) | **GET** /api/Subscriptions/paged | Get subscriptions
*SubscriptionApi* | [**getOne**](docs/Api/SubscriptionApi.md#getone) | **GET** /api/Subscriptions/{id} | Get a subscription
*SubscriptionApi* | [**linkSite**](docs/Api/SubscriptionApi.md#linksite) | **POST** /api/Subscriptions/link-site | Link a subscription to provided site URL
*SubscriptionApi* | [**recalculateSubscriptionCount**](docs/Api/SubscriptionApi.md#recalculatesubscriptioncount) | **POST** /api/Subscriptions/{id}/recalculateSubscriptionCount | Recalculate SubscriptionCount.
*SubscriptionApi* | [**renew**](docs/Api/SubscriptionApi.md#renew) | **GET** /api/Subscriptions/renew/{subscriptionNumber}/{secretKey} | Renew subscriptions
*SubscriptionApi* | [**setExpiryDate**](docs/Api/SubscriptionApi.md#setexpirydate) | **POST** /api/Subscriptions/setExpiryDate | Set Date.
*SubscriptionApi* | [**switchPaymentMethod**](docs/Api/SubscriptionApi.md#switchpaymentmethod) | **GET** /api/Subscriptions/switchPaymentMethod/{id}/{subscriptionNumber} | 
*SubscriptionApi* | [**transferOwnership**](docs/Api/SubscriptionApi.md#transferownership) | **POST** /api/Subscriptions/transfer | Transfer subscription ownership
*SubscriptionApi* | [**upgrade**](docs/Api/SubscriptionApi.md#upgrade) | **GET** /api/Subscriptions/upgrade/{subscriptionNumber}/{secretKey} | Upgrade subscriptions
*SubscriptionProvisioningApi* | [**cancelSubscription**](docs/Api/SubscriptionProvisioningApi.md#cancelsubscription) | **POST** /api/provisioning/subscriptions/{id}/cancel | Cancel a single subscription
*SubscriptionProvisioningApi* | [**create**](docs/Api/SubscriptionProvisioningApi.md#create) | **POST** /api/provisioning/subscriptions/create | Create a subscription
*SubscriptionProvisioningApi* | [**getOne**](docs/Api/SubscriptionProvisioningApi.md#getone) | **GET** /api/provisioning/subscriptions/{id} | Get a subscription
*SubscriptionProvisioningApi* | [**refundSubscription**](docs/Api/SubscriptionProvisioningApi.md#refundsubscription) | **POST** /api/provisioning/subscriptions/{id}/refund | Refund a single subscription
*SubscriptionProvisioningApi* | [**renewSubscription**](docs/Api/SubscriptionProvisioningApi.md#renewsubscription) | **POST** /api/provisioning/subscriptions/{id}/renew | Renew a subscription
*SubscriptionProvisioningApi* | [**setSiteForSubscription**](docs/Api/SubscriptionProvisioningApi.md#setsiteforsubscription) | **POST** /api/provisioning/subscriptions/{id}/set-site | Link a subscription to a site
*WorkerApi* | [**addJob**](docs/Api/WorkerApi.md#addjob) | **POST** /api/Worker/job | 
*WorkerApi* | [**getJob**](docs/Api/WorkerApi.md#getjob) | **GET** /api/Worker/job/{id} | 
*WorkerApi* | [**getRecurringJobs**](docs/Api/WorkerApi.md#getrecurringjobs) | **GET** /api/Worker/getRecurringJobs | 
*WorkerApi* | [**getRecurringJobsInfo**](docs/Api/WorkerApi.md#getrecurringjobsinfo) | **GET** /api/Worker/getRecurringJobs/{name} | 
*WorkerApi* | [**getScheduledJobs**](docs/Api/WorkerApi.md#getscheduledjobs) | **GET** /api/Worker/getScheduledJobs/{name} | 
*WorkerApi* | [**removeAllJobsWithName**](docs/Api/WorkerApi.md#removealljobswithname) | **DELETE** /api/Worker/jobsByName/{name} | 
*WorkerApi* | [**removeJob**](docs/Api/WorkerApi.md#removejob) | **DELETE** /api/Worker/job/{id} | 

## Documentation For Models

 - [AcademyCourseAccessListDto](docs/Model/AcademyCourseAccessListDto.md)
 - [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
 - [ActivateAccountDto](docs/Model/ActivateAccountDto.md)
 - [ActivateAccountResponseDto](docs/Model/ActivateAccountResponseDto.md)
 - [AddAgencyDto](docs/Model/AddAgencyDto.md)
 - [AddJobDto](docs/Model/AddJobDto.md)
 - [AddOwnerToAgencyDto](docs/Model/AddOwnerToAgencyDto.md)
 - [AddSubscriptionDto](docs/Model/AddSubscriptionDto.md)
 - [Admission](docs/Model/Admission.md)
 - [AutoRenewalCountResponseDto](docs/Model/AutoRenewalCountResponseDto.md)
 - [BillingDto](docs/Model/BillingDto.md)
 - [Blacklist](docs/Model/Blacklist.md)
 - [BulkInviteDto](docs/Model/BulkInviteDto.md)
 - [BulkSendEmailDto](docs/Model/BulkSendEmailDto.md)
 - [CancelProvisionedSubscriptionDto](docs/Model/CancelProvisionedSubscriptionDto.md)
 - [CancelSubscriptionBodyDto](docs/Model/CancelSubscriptionBodyDto.md)
 - [ChangePasswordDto](docs/Model/ChangePasswordDto.md)
 - [ComposerToken](docs/Model/ComposerToken.md)
 - [CouponLineDto](docs/Model/CouponLineDto.md)
 - [Course](docs/Model/Course.md)
 - [CourseDataDto](docs/Model/CourseDataDto.md)
 - [CourseEnrollment](docs/Model/CourseEnrollment.md)
 - [CourseEnrollmentFromAcademyDto](docs/Model/CourseEnrollmentFromAcademyDto.md)
 - [CreateAccountDto](docs/Model/CreateAccountDto.md)
 - [CreateBlacklistSiteDto](docs/Model/CreateBlacklistSiteDto.md)
 - [CreateClientDto](docs/Model/CreateClientDto.md)
 - [CreateCustomerNoteDto](docs/Model/CreateCustomerNoteDto.md)
 - [CreateDto](docs/Model/CreateDto.md)
 - [CreateProvisionedSubscriptionDto](docs/Model/CreateProvisionedSubscriptionDto.md)
 - [CreateReviewDto](docs/Model/CreateReviewDto.md)
 - [CreateSiteBodyDto](docs/Model/CreateSiteBodyDto.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerData](docs/Model/CustomerData.md)
 - [CustomerDetails](docs/Model/CustomerDetails.md)
 - [CustomerFromWooDto](docs/Model/CustomerFromWooDto.md)
 - [CustomerNote](docs/Model/CustomerNote.md)
 - [DisconnectOwnerFromAgencyDto](docs/Model/DisconnectOwnerFromAgencyDto.md)
 - [EddDTO](docs/Model/EddDTO.md)
 - [ExtraCourseDataDto](docs/Model/ExtraCourseDataDto.md)
 - [ExtraOrderData](docs/Model/ExtraOrderData.md)
 - [ExtraProductData](docs/Model/ExtraProductData.md)
 - [FeeLineDto](docs/Model/FeeLineDto.md)
 - [FieldValueDto](docs/Model/FieldValueDto.md)
 - [FromAcademyDto](docs/Model/FromAcademyDto.md)
 - [GenerateDto](docs/Model/GenerateDto.md)
 - [HelpScoutDto](docs/Model/HelpScoutDto.md)
 - [InviteDto](docs/Model/InviteDto.md)
 - [JSZip](docs/Model/JSZip.md)
 - [JobOptionsDto](docs/Model/JobOptionsDto.md)
 - [LineItemDto](docs/Model/LineItemDto.md)
 - [LineItemTax](docs/Model/LineItemTax.md)
 - [LinkSiteDto](docs/Model/LinkSiteDto.md)
 - [LoginAccountDto](docs/Model/LoginAccountDto.md)
 - [LoginDto](docs/Model/LoginDto.md)
 - [LoginUserDto](docs/Model/LoginUserDto.md)
 - [MetaDataDto](docs/Model/MetaDataDto.md)
 - [Order](docs/Model/Order.md)
 - [OrderData](docs/Model/OrderData.md)
 - [OrderFromWooDto](docs/Model/OrderFromWooDto.md)
 - [OrderRefundDto](docs/Model/OrderRefundDto.md)
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
 - [ProvisionerData](docs/Model/ProvisionerData.md)
 - [PurgeKVRequestDto](docs/Model/PurgeKVRequestDto.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundDataDto](docs/Model/RefundDataDto.md)
 - [RegenerateTokenResponseDto](docs/Model/RegenerateTokenResponseDto.md)
 - [RenameBodyDto](docs/Model/RenameBodyDto.md)
 - [ResetPasswordDto](docs/Model/ResetPasswordDto.md)
 - [RoleIDDto](docs/Model/RoleIDDto.md)
 - [ScheduleDeleteUserDto](docs/Model/ScheduleDeleteUserDto.md)
 - [SendResetPasswordEmailDto](docs/Model/SendResetPasswordEmailDto.md)
 - [SetExpiryDateDto](docs/Model/SetExpiryDateDto.md)
 - [SetProvisionedSiteDto](docs/Model/SetProvisionedSiteDto.md)
 - [ShippingDto](docs/Model/ShippingDto.md)
 - [SignupAccountDto](docs/Model/SignupAccountDto.md)
 - [Site](docs/Model/Site.md)
 - [SubscribeByEmailBodyDto](docs/Model/SubscribeByEmailBodyDto.md)
 - [SubscribeDto](docs/Model/SubscribeDto.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionProvisioningResponseDto](docs/Model/SubscriptionProvisioningResponseDto.md)
 - [SubscriptionStatusDto](docs/Model/SubscriptionStatusDto.md)
 - [SwitchSubscriptionNumberOfTimesDto](docs/Model/SwitchSubscriptionNumberOfTimesDto.md)
 - [TOTPTwoFactorConfigDto](docs/Model/TOTPTwoFactorConfigDto.md)
 - [TagDto](docs/Model/TagDto.md)
 - [TaxLineItem](docs/Model/TaxLineItem.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionDataDto](docs/Model/TransactionDataDto.md)
 - [TransferAdmissionDto](docs/Model/TransferAdmissionDto.md)
 - [TransferDto](docs/Model/TransferDto.md)
 - [TransferOwnershipDto](docs/Model/TransferOwnershipDto.md)
 - [TransferSiteDto](docs/Model/TransferSiteDto.md)
 - [TwoFactorConfigDto](docs/Model/TwoFactorConfigDto.md)
 - [UnspecifiedResponseDto](docs/Model/UnspecifiedResponseDto.md)
 - [UnsubscribeDto](docs/Model/UnsubscribeDto.md)
 - [UpdateAgencyDto](docs/Model/UpdateAgencyDto.md)
 - [UpdateAllKVRequestDto](docs/Model/UpdateAllKVRequestDto.md)
 - [UpdateClientDto](docs/Model/UpdateClientDto.md)
 - [UpdateDownloadDto](docs/Model/UpdateDownloadDto.md)
 - [UpdateDto](docs/Model/UpdateDto.md)
 - [UpdateFileDto](docs/Model/UpdateFileDto.md)
 - [UpdateSiteDto](docs/Model/UpdateSiteDto.md)
 - [UpdateSiteUrlDto](docs/Model/UpdateSiteUrlDto.md)
 - [UpdateUserDto](docs/Model/UpdateUserDto.md)
 - [UpdateUserToWordpressDto](docs/Model/UpdateUserToWordpressDto.md)
 - [UserIdentity](docs/Model/UserIdentity.md)

## Documentation For Authorization


## bearer

- **Type**: HTTP bearer authentication


## Author



