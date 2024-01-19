# LicenseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the license in the NewFold Plugin License Service. | 
**pluginSlug** | **string** | Slug of the plugin generated when the plugin was registered with PLS. (uses our product group slugs). | 
**userSlug** | **string** | Slug of the PLS user who owns the plugin. | 
**domainName** | **string** | The URL of the site that the license is active on. Warning: might not always be a valid URL. | 
**email** | **string** | The email address of the user that bought the license. Warning: might not always be a valid email. | 
**startDate** | [**\DateTime**](\DateTime.md) | date from which the license starts to be valid, in ISO8601 format (UTC Tz). | 
**expirationDate** | [**\DateTime**](\DateTime.md) | The expiration date of the license in ISO8601 format (UTC Tz). | 
**status** | **string** | The current status of the license | 
**createdBy** | **string** | The user that created the license. | 
**createdAt** | [**\DateTime**](\DateTime.md) | The creation date of the license in ISO8601 format (UTC Tz). | 
**modifiedBy** | **string** | The user that last modified the license. | 
**modifiedAt** | [**\DateTime**](\DateTime.md) | The date on which the license was last modified in ISO8601 format (UTC Tz). | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

