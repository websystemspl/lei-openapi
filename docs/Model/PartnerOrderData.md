# # PartnerOrderData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerLeiData** | [**\OpenAPI\Client\Model\PartnerLeiData**](PartnerLeiData.md) |  |
**orderType** | **string** | The type of order which was submitted by the customer || LEI &#x3D; New LEI Order, TR_IN &#x3D; TRANSFER A LEI, RENEW &#x3D; RENEW A LEI |
**companyType** | **string** | The type of company for which the LEI is to be issued || CURRENTLY ONLY COMPANY POSSIBLE |
**payment** | [**\OpenAPI\Client\Model\Payment**](Payment.md) |  |
**referenceLei** | **string** | LEI number in case of ReNewal or Transfer || NULL if job_type &#x3D; NEW_LEI | [optional]
**transferLou** | **string** | If the order OrderType is &#39;LEI&#39; transferLou and referenceLei must be empty || if orderType is &#39;TR-IN&#39; transferLou and referenceLei must contain a value | [optional]
**transferLei** | **string** | If the order OrderType is &#39;LEI&#39; transferLou and transferLei must be empty || if orderType is &#39;TR-IN&#39; transferLou and transferLei must contain a value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
