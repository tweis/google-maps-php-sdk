<?php
/**
 * Copyright (c) 2019 - present
 * Google Maps PHP - PlacesResultt.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 1/8/2019
 * MIT license: https://github.com/biscolab/google-maps-php/blob/master/LICENSE
 */

namespace Biscolab\GoogleMaps\Http\Result;

use Biscolab\GoogleMaps\Fields\GoogleMapsResultFields;
use Biscolab\GoogleMaps\Http\GoogleMapsResult;
use Biscolab\GoogleMaps\Object\Geometry;
use Biscolab\GoogleMaps\Object\PhotoCollection;
use Biscolab\GoogleMaps\Object\ReviewCollection;

/**
 * Class PlacesResult
 *
 * @method PhotoCollection getPhotos()
 * @method Geometry getGeometry()
 * @method string getFormattedAddress()
 * @method string getName()
 * @method string getIcon()
 * @method string getId()
 * @method string getPlaceId()
 * @method string getReference()
 * @method string getVicinity()
 * @method array getTypes()
 * @method array getOpeningHours()
 * @method int getPriceLevel()
 * @method float getRating()
 * @method array getPlusCode()
 * @method int getUserRatingsTotal()
 * @since   0.5.0
 */
class PlacesResult extends GoogleMapsResult
{

	/**
	 * @var null|string
	 */
	protected $formatted_address = null;

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var Geometry
	 */
	protected $geometry = null;

	/**
	 * @var string
	 */
	protected $icon = '';

	/**
	 * @var string
	 */
	protected $id = '';

	/**
	 * @var PhotoCollection
	 */
	protected $photos = null;

	/**
	 * @var string
	 */
	protected $place_id = '';

	/**
	 * @var string
	 */
	protected $reference = '';

	/**
	 * @var string
	 */
	protected $vicinity = '';

	/**
	 * @var array
	 */
	protected $types = [];

	/**
	 * @var array
	 */
	protected $opening_hours = [];

	/**
	 * @var int
	 */
	protected $price_level = 0;

	/**
	 * @var bool
	 */
	protected $permanently_closed = false;

	/**
	 * @var ReviewCollection
	 */
	protected $reviews = null;

	/**
	 * @var int
	 */
	protected $utc_offset = 0;

	/**
	 * @var string
	 */
	protected $website = '';

	/**
	 * @var string
	 */
	protected $international_phone_number = '';

	/**
	 * @var string
	 */
	protected $formatted_phone_number = '';

	/**
	 * @var string
	 */
	protected $adr_address = '';

	/**
	 * @var int
	 */
	protected $user_ratings_total = 0;

	/**
	 * @var array
	 */
	protected $typeCheck = [
		GoogleMapsResultFields::FORMATTED_ADDRESS          => 'string',
		GoogleMapsResultFields::NAME                       => 'string',
		GoogleMapsResultFields::GEOMETRY                   => Geometry::class,
		GoogleMapsResultFields::ICON                       => 'string',
		GoogleMapsResultFields::ID                         => 'string',
		GoogleMapsResultFields::PHOTOS                     => PhotoCollection::class,
		GoogleMapsResultFields::PLACE_ID                   => 'string',
		GoogleMapsResultFields::REFERENCE                  => 'string',
		GoogleMapsResultFields::VICINITY                   => 'string',
		GoogleMapsResultFields::TYPES                      => 'array',
		GoogleMapsResultFields::OPENING_HOURS              => 'json',
		GoogleMapsResultFields::PRICE_LEVEL                => 'int',
		GoogleMapsResultFields::RATING                     => 'float',
		GoogleMapsResultFields::PERMANENTLY_CLOSED         => 'bool',
		GoogleMapsResultFields::PLUS_CODE                  => 'array',
		GoogleMapsResultFields::REVIEWS                    => ReviewCollection::class,
		GoogleMapsResultFields::UTC_OFFSET                 => 'int',
		GoogleMapsResultFields::WEBSITE                    => 'string',
		GoogleMapsResultFields::INTERNATIONAL_PHONE_NUMBER => 'string',
		GoogleMapsResultFields::FORMATTED_PHONE_NUMBER     => 'string',
		GoogleMapsResultFields::ADR_ADDRESS                => 'string',
		GoogleMapsResultFields::USER_RATINGS_TOTAL         => 'int',
	];

	/**
	 * @return bool|null
	 */
	public function getPermanentlyClose(): bool
	{

		return $this->permanently_closed ?? false;
	}

}