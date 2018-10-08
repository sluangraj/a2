<?php
class controller {
  public $load;
  public $model;

  public function __construct(){
    $this->load = new load();
    $this->model = new user();
    $this->home();
  }
  public function __set($name, $value){
  $this->$name = $value;
  }
  public function __get($name){
  return $this->$name;
  }
  public function __destruct(){
  }
  public function home(){
    //assign values to all variables protected
    $this->model->__set('userID','sluangra');
    $this->model->__set('firstName','Stephanie');
    $this->model->__set('lastName', 'Luangraj');
    $this->model->__set('email', 'sluangra@iu.edu');
    $this->model->__set('role', 'admin');
    //model
    $data = $this->model->getName();
    //view
    $this->load->view('view.php',$data);
  }
}
?>
