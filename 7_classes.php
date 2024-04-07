<?php

class Address
{
    //class properties
    protected string $building_number;
    protected string $street_name;
    protected string $city;
    protected string $state;
    protected string $post_code;
    protected string $country;
 
       //constructor
        function __construct(string $building_number,string $street_name,string $city,string $state,string $post_code,string $country )
        {
            $this->building_number = $building_number;
            $this->street_name = $street_name;
            $this->city = $city;
            $this->state = $state;
            $this->post_code = $post_code;
            $this->country = $country;
        }

        public function printAddress() :string
        {
            return print_r($this->building_number . " " . $this->street_name . "\n" . $this->city . "\n" . $this->state . "\n" .  $this->country . "\n" . $this->post_code);
        }

}

//Use the class Address

$myAddress = new Address("24","Some Street","Paris","Texas","90101","United States");

$myAddress->printAddress();