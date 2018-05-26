<?php 

namespace Site\Classes;

use Site\Classes\Config;

class Content 
{

  public function getPerson(int $id, $filename) 
  {
    if ( ($handle = fopen($filename, "r")) !== false ) {
      while ($row = fgetcsv($handle)) {
        $data = $this->getData($filename, $row);
        if (in_array($id, $row)) {
          return $data;
        }
      }
      fclose($handle);
    }
  }

  public function getAllPersons() 
  {
    $persons = [];
    if ( file_exists(Config::ADULT_FILENAME) ) 
    {
      if ( ($handle = fopen(Config::ADULT_FILENAME, "r")) !== false ) 
      {
        while ( $row = fgetcsv($handle) )
        {
          $persons[] = [
            'id' => $row[0], 
            'firstname' => $row[1], 
            'lastname'  => $row[2],
            'adult'     =>  true
          ];
        }
      }
    }
    if ( file_exists(Config::CHILD_FILENAME) )
    {
      if ( ($handle = fopen(Config::CHILD_FILENAME, "r")) !== false )
      {
        while ( $row = fgetcsv($handle) )
        {
          $persons[] = [
            'id' => $row[0], 
            'firstname' => $row[1], 
            'lastname'  => $row[2],
            'adult'     => false
          ];
        }
      }
    }
    return $persons;
  }

  public function getData($filename, $row) {
    if  ($filename == 'adults.csv' )
    {
      return [
        'id'            => $row[0],
        'firstname'     => $row[1],
        'lastname'      => $row[2],
        'gender'        => $row[3],
        'age'           => $row[4],
        'city'          => $row[5],
        'address'       => $row[6],
        'state'         => $row[7],
        'work'          => $row[8],
        'education'     => $row[9],
        'marrigeStatus' => $row[10],
        'kids'          => $row[11]
      ];
    }
    return [
      'id'              => $row[0],
      'firstname'       => $row[1],
      'lastname'        => $row[2],
      'gender'          => $row[3],
      'age'             => $row[4],
      'city'            => $row[5],
      'address'         => $row[6],
      'state'           => $row[7],
      'school'          => $row[8],
      'favoriteFriend'  => $row[9],
      'favoriteGame'    => $row[10]
    ];
  }

  public function delete($id, $filename)
  {
    $i = 0;
    $temp = [];

    $read = fopen($filename, "r") or die("can't open the file");
    while ( !feof($read) )
    {
      $temp[$i] = fgets($read);
      $i++;
    }
    fclose($read);

    $write = fopen($filename, "w") or die("can't open the file");
    foreach ( $temp as $tmp )
    {
      if ($tmp[0] != $id) {
        fwrite($write, $tmp);
      }
    }
    fclose($write);
  }
}