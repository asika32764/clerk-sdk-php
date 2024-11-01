# AllowListBlockList
(*allowListBlockList*)

## Overview

Allow-lists and Block-lists allow you to control who can sign up or sign in
to your application, by restricting access based on the user's email
address or phone number.
<https://clerk.com/docs/authentication/allowlist>

### Available Operations

* [listAllowlistIdentifiers](#listallowlistidentifiers) - List all identifiers on the allow-list
* [createAllowlistIdentifier](#createallowlistidentifier) - Add identifier to the allow-list
* [deleteAllowlistIdentifier](#deleteallowlistidentifier) - Delete identifier from allow-list
* [listBlocklistIdentifiers](#listblocklistidentifiers) - List all identifiers on the block-list
* [createBlocklistIdentifier](#createblocklistidentifier) - Add identifier to the block-list
* [deleteBlocklistIdentifier](#deleteblocklistidentifier) - Delete identifier from block-list

## listAllowlistIdentifiers

Get a list of all identifiers allowed to sign up to an instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->allowListBlockList->listAllowlistIdentifiers(

);

if ($response->allowlistIdentifierList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListAllowlistIdentifiersResponse](../../Models/Operations/ListAllowlistIdentifiersResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors36 | 401, 402             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## createAllowlistIdentifier

Create an identifier allowed to sign up to an instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateAllowlistIdentifierRequestBody(
    identifier: '<value>',
);

$response = $sdk->allowListBlockList->createAllowlistIdentifier(
    request: $request
);

if ($response->allowlistIdentifier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateAllowlistIdentifierRequestBody](../../Models/Operations/CreateAllowlistIdentifierRequestBody.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateAllowlistIdentifierResponse](../../Models/Operations/CreateAllowlistIdentifierResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors37 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteAllowlistIdentifier

Delete an identifier from the instance allow-list

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->allowListBlockList->deleteAllowlistIdentifier(
    identifierId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `identifierId`                                         | *string*                                               | :heavy_check_mark:                                     | The ID of the identifier to delete from the allow-list |

### Response

**[?Operations\DeleteAllowlistIdentifierResponse](../../Models/Operations/DeleteAllowlistIdentifierResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors38 | 402, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## listBlocklistIdentifiers

Get a list of all identifiers which are not allowed to access an instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->allowListBlockList->listBlocklistIdentifiers(

);

if ($response->blocklistIdentifiers !== null) {
    // handle response
}
```

### Response

**[?Operations\ListBlocklistIdentifiersResponse](../../Models/Operations/ListBlocklistIdentifiersResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors39 | 401, 402             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## createBlocklistIdentifier

Create an identifier that is blocked from accessing an instance

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;
use Clerk\Backend\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();

$request = new Operations\CreateBlocklistIdentifierRequestBody(
    identifier: '<value>',
);

$response = $sdk->allowListBlockList->createBlocklistIdentifier(
    request: $request
);

if ($response->blocklistIdentifier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateBlocklistIdentifierRequestBody](../../Models/Operations/CreateBlocklistIdentifierRequestBody.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateBlocklistIdentifierResponse](../../Models/Operations/CreateBlocklistIdentifierResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors40 | 400, 402, 422        | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |

## deleteBlocklistIdentifier

Delete an identifier from the instance block-list

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Clerk\Backend;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Backend\ClerkBackend::builder()->setSecurity($security)->build();



$response = $sdk->allowListBlockList->deleteBlocklistIdentifier(
    identifierId: '<id>'
);

if ($response->deletedObject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `identifierId`                                         | *string*                                               | :heavy_check_mark:                                     | The ID of the identifier to delete from the block-list |

### Response

**[?Operations\DeleteBlocklistIdentifierResponse](../../Models/Operations/DeleteBlocklistIdentifierResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ClerkErrors41 | 402, 404             | application/json     |
| Errors\SDKException  | 4XX, 5XX             | \*/\*                |