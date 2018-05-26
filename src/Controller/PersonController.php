<?php 

namespace Site\Controller;

use Site\Controller\Controller;
use Site\Classes\Person;
use Site\Classes\Content;
use Site\Classes\Adult;
use Site\Classes\Child;
use Site\Classes\Config;


class PersonController extends Controller 
{

  const RELATIONSHIP = ['', 'single', 'in relationship', 'married'];

  public function __construct($request)
  {
    parent::__construct($request);
  }

  public function indexAction() 
  {
    $this->view->render('index.php');
  }

  public function addAction() 
  {
    $firstname = $this->request->postParam('firstname');
    $lastname = $this->request->postParam('lastname');
    $age = $this->request->postParam('age');
    $gender = $this->request->postParam('gender') == 0 ? 'male' : 'female';
    $city = $this->request->postParam('city');
    $address = $this->request->postParam('address');
    $state = $this->request->postParam('state');

    $adult = $this->request->postParam('adult') == 0 ? 'adult' : 'child';

    $data = [$firstname, $lastname, $gender, $age, $city, $address, $state];

    if ( $adult == 'adult' )
    {
      $work = $this->request->postParam('work');
      $education = $this->request->postParam('education');
      $marrigeStatus = self::RELATIONSHIP[$this->request->postParam('marrigeStatus')];
      $kids = $this->request->postParam('kids');

      $person = new Adult($firstname, $lastname, $gender, $age, $city, $address, $state, $work, $education, $marrigeStatus, $kids);
      array_push($data, $work, $education, $marrigeStatus, $kids);
    } else 
    {
      $school = $this->request->postParam('school');
      $favoriteFriend = $this->request->postParam('favoriteFriend');
      $favoriteGame = $this->request->postParam('favoriteGame');

      $person = new Child($firstname, $lastname, $gender, $age, $city, $address, $state, $school, $favoriteFriend, $favoriteGame);

      array_push($data, $school, $favoriteFriend, $favoriteGame);
    }    

    $person->save($person, $data);

    $this->view->redirect('list');
  }

  public function listAction() 
  {
    $content = new Content();
    $this->view->persons = $content->getAllPersons();

    $this->view->render('list.php');
  }

  public function childAction($id) 
  {
    $content = new Content();
    $this->view->person = $content->getPerson($id, Config::CHILD_FILENAME);

    $this->view->render('child.php');
  }

  public function adultAction($id) 
  {
    $content = new Content();
    $this->view->person = $content->getPerson($id, Config::ADULT_FILENAME);

    $this->view->render('adult.php');
  }

  public function deleteAction($param)
  {
    $id = $param['id'];
    $filename = $param['args'] == 'adult' ? Config::ADULT_FILENAME : Config::CHILD_FILENAME;
    $content = new Content();
    if ( $content->getPerson($id, $filename) ) 
    {
      $content->delete($id, $filename);
      
      $this->view->redirect('list');
    } else 
    {
      $this->view->error = "Person not found";
      $this->view->render('error.php');
    }

  }
}