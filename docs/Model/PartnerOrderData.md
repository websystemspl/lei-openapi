# # PartnerOrderData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_lei_data** | [**\OpenAPI\Client\Model\PartnerLeiData**](PartnerLeiData.md) |  | [optional]
**order_type** | **string** | The type of order which was submitted by the customer || LEI &#x3D; New LEI Order, TR_IN &#x3D; TRANSFER A LEI, RENEW &#x3D; RENEW A LEI | [optional]
**company_type** | **string** | The type of company for which the LEI is to be issued || CURRENTLY ONLY COMPANY POSSIBLE | [optional]
**payment** | [**\OpenAPI\Client\Model\Payment**](Payment.md) |  | [optional]
**reference_lei** | **string** | LEI number in case of ReNewal or Transfer || NULL if job_type &#x3D; NEW_LEI | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
