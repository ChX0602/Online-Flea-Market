<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemEntity
 *
 * @author Chen Xing
 */
class ItemEntity {
    //put your code here
    public $id;
    public $name;
    public $type;
    public $price;
    public $age;
    public $image;
    public $review;
    public $is_available;
    
    function __construct($id, $name, $type, $price, $age, $image, $review, $is_available) {
       $this->id = $id;
       $this->name = $name;
       $this->type = $type;
       $this->price = $price;
       $this->age = $age;
       $this->image = $image;
       $this->review = $review;
       $this->is_available = $is_available;
    }
}
