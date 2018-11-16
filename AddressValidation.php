<?php namespace App\Classes;

use GuzzleHttp;

class AddressValidation {

  public static function getNominatimPlaceId($address) {
    $placeId = AddressValidation::getNominatimPlaceIdQuery($address);
    if ($placeId == null) {
      $placeId = AddressValidation::getNominatimPlaceIdQuery($address, true);
    }

    if ($placeId == null) {
      $placeId = AddressValidation::getNominatimPlaceIdQuery($address, false, true);
    }

    if ($placeId == null) {
      $placeId = AddressValidation::getNominatimPlaceIdQuery($address, true, true);
    }

    return $placeId;

  }

  public static function getNominatimPlaceIdQuery($address, $omitCity = false, $omitStreet = false) {
    $zipcode = $address->zipcode;
    $city = $address->city;
    if ($omitCity == true) {
      $city = "";
    }
    $street = $address->street;
    if ($omitStreet == true) {
      $street = "";
    }

    try {
      $country = $address->country->code;
    } catch (\Exception $e) {
      $country = '';
    }


    $url = "api" . $zipcode . "&street=" . $street . "&city=" . $city . "&country=" . $country;

    $client = new GuzzleHttp\Client();
    $res = $client->get($url);
    if ($res->getStatusCode() == 200) {
      $jsonResponse = json_decode($res->getBody());
      if (count($jsonResponse) == 0) {
        return null;
      }
      return $jsonResponse[0]->place_id;
    }
    return null;
  }

}
