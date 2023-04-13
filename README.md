# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/websystemspl/lei-openapi.git"
    }
  ],
  "require": {
    "websystemspl/lei-openapi": "^v0.0.2"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://test1.service.leireg.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderControllerApi* | [**createOrder**](docs/Api/OrderControllerApi.md#createorder) | **POST** /api/externalorder/createorder | 
*OrderControllerApi* | [**loadOrderStatus**](docs/Api/OrderControllerApi.md#loadorderstatus) | **POST** /api/externalorder/status | 
*OrderControllerApi* | [**uploadFile**](docs/Api/OrderControllerApi.md#uploadfile) | **POST** /api/externalorder/fileupload | 

## Models

- [AddressData](docs/Model/AddressData.md)
- [AppendOrderAttachmentRequest](docs/Model/AppendOrderAttachmentRequest.md)
- [AttachmentData](docs/Model/AttachmentData.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [EntityData](docs/Model/EntityData.md)
- [InvoiceAddress](docs/Model/InvoiceAddress.md)
- [InvoiceContact](docs/Model/InvoiceContact.md)
- [LoadOrderStatusRequest](docs/Model/LoadOrderStatusRequest.md)
- [Mother](docs/Model/Mother.md)
- [PartnerLeiData](docs/Model/PartnerLeiData.md)
- [PartnerOrderData](docs/Model/PartnerOrderData.md)
- [Payment](docs/Model/Payment.md)
- [PaymentDetails](docs/Model/PaymentDetails.md)
- [RelationshipData](docs/Model/RelationshipData.md)
- [ResponseString](docs/Model/ResponseString.md)
- [ValidationResponseBooleanFileUploadValidationError](docs/Model/ValidationResponseBooleanFileUploadValidationError.md)
- [ValidationResponseStringLeiOrderValidationError](docs/Model/ValidationResponseStringLeiOrderValidationError.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
