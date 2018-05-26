<?php

namespace Site\Classes;

use Site\Classes\Person;

class Child extends Person
{

  private $school;
  private $favoriteFriend;
  private $favoriteGame;

  public function __construct($firstName, $lastName, $gender, $age, $city, $address, $state, $school, $favoriteFriend, $favoriteGame)
  {
    parent::__construct($firstName, $lastName, $gender, $age, $city, $address, $state);
    $this->school = $school;
    $this->favoriteFriend = $favoriteFriend;
    $this->favoriteGame = $favoriteGame;
  }

  /**
   * Get the value of school
   */ 
  public function getSchool()
  {
    return $this->school;
  }

  /**
   * Set the value of school
   *
   * @return  self
   */ 
  public function setSchool($school)
  {
    $this->school = $school;

    return $this;
  }

  /**
   * Get the value of favoriteFriend
   */ 
  public function getFavoriteFriend()
  {
    return $this->favoriteFriend;
  }

  /**
   * Set the value of favoriteFriend
   *
   * @return  self
   */ 
  public function setFavoriteFriend($favoriteFriend)
  {
    $this->favoriteFriend = $favoriteFriend;

    return $this;
  }

  /**
   * Get the value of favoriteGame
   */ 
  public function getFavoriteGame()
  {
    return $this->favoriteGame;
  }

  /**
   * Set the value of favoriteGame
   *
   * @return  self
   */ 
  public function setFavoriteGame($favoriteGame)
  {
    $this->favoriteGame = $favoriteGame;

    return $this;
  }
}