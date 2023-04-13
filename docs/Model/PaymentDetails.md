# # PaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentPrice** | **string** | The price paid for the LEI || Price without a comma or point in full number 65.85 -&gt; 6585 | [optional]
**typPrepaid** | **string** | If payment_type &#x3D; PREPAID | Which payment provider was used | [optional]
**paymentType** | **string** | What type of payment was used? There is INVOICE and PREPAID | [optional]
**paymentCode** | **string** | The payment code returned by the payment provider | [optional]
**paymentCurrency** | **string** | Currency in which the LEI was paid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
