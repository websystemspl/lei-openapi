# # EntityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company name of the company for which the LEI is created | [optional]
**taxid** | **string** | VAT ID of the company for which the LEI is created | [optional]
**registerNr** | **string** | Registration number of the company for which the LEI is created | [optional]
**registrationAuthorityKey** | **string** | RA000709&#39;, -&gt; Registration authority of the company for which the LEI is created | Use GLEIF RA Code from LIST -&gt; https://api.gleif.org/api/v1/registration-authorities || The RA code RA777777 is used for General Government Entities and International Organizations only in case there is no information available in any regular registration authority and Public Legal Documents are used for validation instead. RA code RA888888 is used as an interim code. This indicates that a Registration/Validation Authority is not available on the RA list. The RA code RA999999 refers to situations when no Registration Authority can be defined for a Legal Entity. | [optional]
**registrationAuthorityText** | **string** | Free text exception if GLEIF code for entity_registration_authority_key is RA777777, RA888888 or RA999999. | [optional]
**legalFormText** | **string** | SHALL include the correct name of the entity&#39;s legal form where no ELF code exists (if GLEIF code for entity_legal_form_key is 8888 or 9999). | [optional]
**legalFormKey** | **string** | Legal form of the company for which the LEI is created | Use GLEIF ELF CODE from LIST -&gt; https://api.gleif.org/api/v1/entity-legal-forms || ELF code 8888 is to be used when a new ELF code (for a legal form not yet on the list) is requested by an LEI issuer from GLEIF for a jurisdiction which is on the ELF code list. ELF code 9999 is to be used for LEIs from a jurisdiction which is not on the ELF code list yet | [optional]
**destinationCountry** | **string** | Country of the company for which the LEI is created | [optional]
**creationDate** | **\DateTime** | Foundation date of the company for which the LEI is created | DateTimeFormat.ISO.DATE | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
