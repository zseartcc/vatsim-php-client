# VATSIM\Client\MapDataApi

All URIs are relative to *https://api.vatsim.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mapDataList**](MapDataApi.md#mapDataList) | **GET** /map_data/ | 


# **mapDataList**
> \VATSIM\Client\Model\MapData mapDataList()



GET /map_data/

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\MapDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->mapDataList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapDataApi->mapDataList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VATSIM\Client\Model\MapData**](../Model/MapData.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

