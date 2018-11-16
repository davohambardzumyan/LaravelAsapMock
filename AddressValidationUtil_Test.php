<?php


use App\Classes\AddressValidation;
use AspectMock\Test as test;


class AddressValidationUtil_Test extends TestCase {

  public function testGetNominatimPlaceId() {
    $mockGetNominatimPlaceId = function ($address = null, $omitCity = false, $omitStreet = false) {
      if (count(array_diff(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null], $address)) == 0) {
        return "api_response";
      }
      if (count(array_diff(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null], $address)) == 0) {
        return "api_response";
      }
      if (count(array_diff(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null], $address)) == 0) {
        return "api_response";
      }
      if (count(array_diff(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null], $address)) == 0) {
        return "api_response";
      }
      if (count(array_diff(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null], $address)) == 0) {
        return "239099001";
      }
      if (count(array_diff(["zipcode" => "39020", "city" => "Kastelbell", "street" => "Moosweg 15", "country_id" => 1,], $address)) == 0) {
        return "api_response";
      }
    };

    test::double('App\Classes\AddressValidation', ["getNominatimPlaceId" => $mockGetNominatimPlaceId]);
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));
    $this->assertEquals(api_response, AddressValidation::getNominatimPlaceId(["zipcode" => "zipcode", "city" => "City1", "street" => "street", "country_id" => null]));


  }
}
