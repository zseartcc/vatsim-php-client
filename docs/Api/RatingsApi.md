# VATSIM\Client\RatingsApi

All URIs are relative to *https://api.vatsim.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ratingsAddComment**](RatingsApi.md#ratingsAddComment) | **POST** /ratings/add_comment/ | Append a comment to the members profile.
[**ratingsConnectionsRead**](RatingsApi.md#ratingsConnectionsRead) | **GET** /ratings/{idnum}/connections/ | 
[**ratingsFlightPlans**](RatingsApi.md#ratingsFlightPlans) | **GET** /ratings/{idnum}/flight_plans/ | 
[**ratingsPartialUpdate**](RatingsApi.md#ratingsPartialUpdate) | **PATCH** /ratings/{idnum}/ | 
[**ratingsRatingTimes**](RatingsApi.md#ratingsRatingTimes) | **GET** /ratings/{idnum}/rating_times/ | 
[**ratingsRead**](RatingsApi.md#ratingsRead) | **GET** /ratings/{idnum}/ | 
[**ratingsRead_0**](RatingsApi.md#ratingsRead_0) | **GET** /ratings/{idnum}/atcsessions{var}/ | 


# **ratingsAddComment**
> ratingsAddComment()

Append a comment to the members profile.

Accepts fields:  comment type  Valid Types: 8, 9, 10, 12, 14, 15, 17, 18

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ratingsAddComment();
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsAddComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsConnectionsRead**
> ratingsConnectionsRead($idnum)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.

try {
    $apiInstance->ratingsConnectionsRead($idnum);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsConnectionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsFlightPlans**
> ratingsFlightPlans($idnum)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.

try {
    $apiInstance->ratingsFlightPlans($idnum);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsFlightPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsPartialUpdate**
> \VATSIM\Client\Model\DivisionPatch ratingsPartialUpdate($idnum, $data)



PATCH /ratings/{idnum}/

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.
$data = new \VATSIM\Client\Model\DivisionPatch(); // \VATSIM\Client\Model\DivisionPatch | 

try {
    $result = $apiInstance->ratingsPartialUpdate($idnum, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |
 **data** | [**\VATSIM\Client\Model\DivisionPatch**](../Model/DivisionPatch.md)|  |

### Return type

[**\VATSIM\Client\Model\DivisionPatch**](../Model/DivisionPatch.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsRatingTimes**
> ratingsRatingTimes($idnum)



Returns the amount of time this member has on each rating

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.

try {
    $apiInstance->ratingsRatingTimes($idnum);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsRatingTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsRead**
> \VATSIM\Client\Model\User ratingsRead($idnum)



GET /ratings/{idnum}/

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.

try {
    $result = $apiInstance->ratingsRead($idnum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |

### Return type

[**\VATSIM\Client\Model\User**](../Model/User.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingsRead_0**
> \VATSIM\Client\Model\ATCSessions ratingsRead_0($idnum, $var)



GET /ratings/{idnum}/atcsessions/{position}?{date}?{start}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idnum = 56; // int | A unique value identifying this ratings.
$var = "var_example"; // string | 

try {
    $result = $apiInstance->ratingsRead_0($idnum, $var);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->ratingsRead_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idnum** | **int**| A unique value identifying this ratings. |
 **var** | **string**|  |

### Return type

[**\VATSIM\Client\Model\ATCSessions**](../Model/ATCSessions.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

