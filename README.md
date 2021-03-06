# php-client
API for VATSIM. This API only accepts and returns application/json - e-mail api@vatsim.net for troubleshooting

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Package version: 2.3
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/zseartcc/vatsim-php-client.git"
    }
  ],
  "require": {
    "zseartcc/vatsim-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATSIM\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VATSIM\Client\Api\DivisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->divisionsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DivisionsApi->divisionsList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.vatsim.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DivisionsApi* | [**divisionsList**](docs/Api/DivisionsApi.md#divisionslist) | **GET** /divisions/ | 
*DivisionsApi* | [**divisionsMembers**](docs/Api/DivisionsApi.md#divisionsmembers) | **GET** /divisions/{id}/members/ | 
*DivisionsApi* | [**divisionsRead**](docs/Api/DivisionsApi.md#divisionsread) | **GET** /divisions/{id}/ | 
*MapDataApi* | [**mapDataList**](docs/Api/MapDataApi.md#mapdatalist) | **GET** /map_data/ | 
*RatingsApi* | [**ratingsAddComment**](docs/Api/RatingsApi.md#ratingsaddcomment) | **POST** /ratings/add_comment/ | Append a comment to the members profile.
*RatingsApi* | [**ratingsConnectionsRead**](docs/Api/RatingsApi.md#ratingsconnectionsread) | **GET** /ratings/{idnum}/connections/ | 
*RatingsApi* | [**ratingsFlightPlans**](docs/Api/RatingsApi.md#ratingsflightplans) | **GET** /ratings/{idnum}/flight_plans/ | 
*RatingsApi* | [**ratingsPartialUpdate**](docs/Api/RatingsApi.md#ratingspartialupdate) | **PATCH** /ratings/{idnum}/ | 
*RatingsApi* | [**ratingsRatingTimes**](docs/Api/RatingsApi.md#ratingsratingtimes) | **GET** /ratings/{idnum}/rating_times/ | 
*RatingsApi* | [**ratingsRead**](docs/Api/RatingsApi.md#ratingsread) | **GET** /ratings/{idnum}/ | 
*RatingsApi* | [**ratingsRead_0**](docs/Api/RatingsApi.md#ratingsread_0) | **GET** /ratings/{idnum}/atcsessions{var}/ | 
*RegionsApi* | [**regionsList**](docs/Api/RegionsApi.md#regionslist) | **GET** /regions/ | 
*RegionsApi* | [**regionsMembers**](docs/Api/RegionsApi.md#regionsmembers) | **GET** /regions/{id}/members/ | 
*RegionsApi* | [**regionsRead**](docs/Api/RegionsApi.md#regionsread) | **GET** /regions/{id}/ | 
*SubdivisionsApi* | [**subdivisionsList**](docs/Api/SubdivisionsApi.md#subdivisionslist) | **GET** /subdivisions/ | 
*SubdivisionsApi* | [**subdivisionsMembers**](docs/Api/SubdivisionsApi.md#subdivisionsmembers) | **GET** /subdivisions/{id}/members/ | 
*SubdivisionsApi* | [**subdivisionsRead**](docs/Api/SubdivisionsApi.md#subdivisionsread) | **GET** /subdivisions/{id}/ | 


## Documentation For Models

 - [ATCSessions](docs/Model/ATCSessions.md)
 - [DivisionPatch](docs/Model/DivisionPatch.md)
 - [Divisions](docs/Model/Divisions.md)
 - [MapData](docs/Model/MapData.md)
 - [Subdivisions](docs/Model/Subdivisions.md)
 - [User](docs/Model/User.md)


## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

api@vatsim.net


