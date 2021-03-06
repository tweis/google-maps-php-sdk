<?php
/**
 * Copyright (c) 2019 - present
 * Google Maps PHP - placesFindPlaceByText.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 9/9/2019
 * MIT license: https://github.com/biscolab/google-maps-php/blob/master/LICENSE
 */

use Biscolab\GoogleMaps\Api\P;
use Biscolab\GoogleMaps\Enum\GoogleMapsApiConfigFields;

// Run "composer install" command or change with your actual autoload.php file
require '../../vendor/autoload.php';

// Further info about API key: https://developers.google.com/places/web-service/get-api-key
$places = new \Biscolab\GoogleMaps\Api\Places([
	GoogleMapsApiConfigFields::KEY => 'YOUR_API_KEY'
]);

// Get data starting from a literal place name
// From Google official documentation you can try with "Museum of Contemporary Art Australia"
// see https://developers.google.com/places/web-service/search#FindPlaceRequests
$address = 'Museum of Contemporary Art Australia';

// https://developers.google.com/places/web-service/search#FindPlaceRequests
$params = [];
$fields = [];
$results_by_name = $places->findPlaceByText($address, $params, $fields);

// Get number of results
$results_by_name->count(); // count($results_by_name)

// Get first result
/** @var \Biscolab\GoogleMaps\Http\Result\PlacesResult $first_result */
$first_result = $results_by_name->current();

// Get result Geometry and then get location (latitude and longitude)
$location = $first_result->getGeometry()->getLocation();

// Get place ID
$place_id = $first_result->getPlaceId();

// You can itarate result
//foreach ($results_by_name as $candidate) {
//	...
//}