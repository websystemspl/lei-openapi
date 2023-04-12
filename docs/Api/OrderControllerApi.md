# OpenAPI\Client\OrderControllerApi

All URIs are relative to https://test1.service.leireg.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrderControllerApi.md#createOrder) | **POST** /api/externalorder/createorder |  |
| [**loadOrderStatus()**](OrderControllerApi.md#loadOrderStatus) | **POST** /api/externalorder/status |  |
| [**uploadFile()**](OrderControllerApi.md#uploadFile) | **POST** /api/externalorder/fileupload |  |


## `createOrder()`

```php
createOrder($create_order_request): \OpenAPI\Client\Model\ValidationResponseStringLeiOrderValidationError
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
$create_order_request = new \OpenAPI\Client\Model\CreateOrderRequest(); // \OpenAPI\Client\Model\CreateOrderRequest

try {
    $result = $apiInstance->createOrder($create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order_request** | [**\OpenAPI\Client\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  | |

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

## `loadOrderStatus()`

```php
loadOrderStatus($load_order_status_request): \OpenAPI\Client\Model\ResponseString
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
$load_order_status_request = new \OpenAPI\Client\Model\LoadOrderStatusRequest(); // \OpenAPI\Client\Model\LoadOrderStatusRequest

try {
    $result = $apiInstance->loadOrderStatus($load_order_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->loadOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **load_order_status_request** | [**\OpenAPI\Client\Model\LoadOrderStatusRequest**](../Model/LoadOrderStatusRequest.md)|  | |

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
uploadFile($append_order_attachment_request): \OpenAPI\Client\Model\ValidationResponseBooleanFileUploadValidationError
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
$append_order_attachment_request = new \OpenAPI\Client\Model\AppendOrderAttachmentRequest(); // \OpenAPI\Client\Model\AppendOrderAttachmentRequest

try {
    $result = $apiInstance->uploadFile($append_order_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderControllerApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **append_order_attachment_request** | [**\OpenAPI\Client\Model\AppendOrderAttachmentRequest**](../Model/AppendOrderAttachmentRequest.md)|  | |

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
