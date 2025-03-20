# OpenAPI\Client\OrderControllerApi

All URIs are relative to https://test1.service.leireg.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrderControllerApi.md#createOrder) | **POST** /api/externalorder/createorder |  |
| [**getEvoRequestLink()**](OrderControllerApi.md#getEvoRequestLink) | **POST** /api/externalorder/getevorequestlink |  |
| [**loadOrderStatus()**](OrderControllerApi.md#loadOrderStatus) | **POST** /api/externalorder/status |  |
| [**submitEvoPaymentFailure()**](OrderControllerApi.md#submitEvoPaymentFailure) | **POST** /api/externalorder/submitevopaymentfailure |  |
| [**submitEvoPaymentNotify()**](OrderControllerApi.md#submitEvoPaymentNotify) | **POST** /api/externalorder/submitevopaymentnotify |  |
| [**submitEvoPaymentSuccess()**](OrderControllerApi.md#submitEvoPaymentSuccess) | **POST** /api/externalorder/submitevopaymentsuccess |  |
| [**uploadFile()**](OrderControllerApi.md#uploadFile) | **POST** /api/externalorder/fileupload |  |


## `createOrder()`

```php
createOrder($createOrderRequest): \OpenAPI\Client\Model\ValidationResponseStringLeiOrderValidationError
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createOrderRequest = new \OpenAPI\Client\Model\CreateOrderRequest(); // \OpenAPI\Client\Model\CreateOrderRequest

try {
    $result = $apiInstance->createOrder($createOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOrderRequest** | [**\OpenAPI\Client\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ValidationResponseStringLeiOrderValidationError**](../Model/ValidationResponseStringLeiOrderValidationError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvoRequestLink()`

```php
getEvoRequestLink($evoRequestLinkRequest): \OpenAPI\Client\Model\ResponseString
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$evoRequestLinkRequest = new \OpenAPI\Client\Model\EvoRequestLinkRequest(); // \OpenAPI\Client\Model\EvoRequestLinkRequest

try {
    $result = $apiInstance->getEvoRequestLink($evoRequestLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->getEvoRequestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **evoRequestLinkRequest** | [**\OpenAPI\Client\Model\EvoRequestLinkRequest**](../Model/EvoRequestLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseString**](../Model/ResponseString.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadOrderStatus()`

```php
loadOrderStatus($loadOrderStatusRequest): \OpenAPI\Client\Model\ResponseString
```



The following Error-Codes in the field 'data' are: S0, S1 = 'Receipt' || S2, S3 = 'In progress' || S4, S5 = 'Feedback required' || S6 = 'In progress' || S7, S8, S9, S10, S11 = 'Under review' || S12, S13 = 'Cancelled customer' || S14 = 'Completed' || S15, S16 = 'Under review' || E0 = 'Payment method selection pending'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loadOrderStatusRequest = new \OpenAPI\Client\Model\LoadOrderStatusRequest(); // \OpenAPI\Client\Model\LoadOrderStatusRequest

try {
    $result = $apiInstance->loadOrderStatus($loadOrderStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->loadOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loadOrderStatusRequest** | [**\OpenAPI\Client\Model\LoadOrderStatusRequest**](../Model/LoadOrderStatusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseString**](../Model/ResponseString.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitEvoPaymentFailure()`

```php
submitEvoPaymentFailure($evoPaymentDataRequest): \OpenAPI\Client\Model\ResponseString
```



The session ID is returned in the data field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$evoPaymentDataRequest = new \OpenAPI\Client\Model\EvoPaymentDataRequest(); // \OpenAPI\Client\Model\EvoPaymentDataRequest

try {
    $result = $apiInstance->submitEvoPaymentFailure($evoPaymentDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->submitEvoPaymentFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **evoPaymentDataRequest** | [**\OpenAPI\Client\Model\EvoPaymentDataRequest**](../Model/EvoPaymentDataRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseString**](../Model/ResponseString.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitEvoPaymentNotify()`

```php
submitEvoPaymentNotify($evoPaymentDataRequest): \OpenAPI\Client\Model\ResponseBoolean
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$evoPaymentDataRequest = new \OpenAPI\Client\Model\EvoPaymentDataRequest(); // \OpenAPI\Client\Model\EvoPaymentDataRequest

try {
    $result = $apiInstance->submitEvoPaymentNotify($evoPaymentDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->submitEvoPaymentNotify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **evoPaymentDataRequest** | [**\OpenAPI\Client\Model\EvoPaymentDataRequest**](../Model/EvoPaymentDataRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseBoolean**](../Model/ResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitEvoPaymentSuccess()`

```php
submitEvoPaymentSuccess($evoPaymentDataRequest): \OpenAPI\Client\Model\ResponseString
```



The session ID is returned in the data field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$evoPaymentDataRequest = new \OpenAPI\Client\Model\EvoPaymentDataRequest(); // \OpenAPI\Client\Model\EvoPaymentDataRequest

try {
    $result = $apiInstance->submitEvoPaymentSuccess($evoPaymentDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->submitEvoPaymentSuccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **evoPaymentDataRequest** | [**\OpenAPI\Client\Model\EvoPaymentDataRequest**](../Model/EvoPaymentDataRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseString**](../Model/ResponseString.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($appendOrderAttachmentRequest): \OpenAPI\Client\Model\ValidationResponseBooleanFileUploadValidationError
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appendOrderAttachmentRequest = new \OpenAPI\Client\Model\AppendOrderAttachmentRequest(); // \OpenAPI\Client\Model\AppendOrderAttachmentRequest

try {
    $result = $apiInstance->uploadFile($appendOrderAttachmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appendOrderAttachmentRequest** | [**\OpenAPI\Client\Model\AppendOrderAttachmentRequest**](../Model/AppendOrderAttachmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ValidationResponseBooleanFileUploadValidationError**](../Model/ValidationResponseBooleanFileUploadValidationError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
