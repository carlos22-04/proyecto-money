<?php

cLass transactionsController extends AppsController
{

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $conditions = array("conditions"=>"transactions.account_id=accounts.id and transactions.category_id=categories.id");

    $columnaSuma = array(
        "columna" =>"transactions.amount"
      );

    $this->set("transactions", $this->transactions->find("transactions, accounts, categories",  "all", $conditions));
    $this->set("transactionCount", $this->transactions->find("transactions", "count"));
    $transactionsSuma = $this->transactions->find("transactions", "suma", $columnaSuma);
    $this->set(compact("transactions", "transactionCount", "transactionsSuma"));
  }

  public function add(){
      if ($_POST) {
      if ($_POST["operation"] == 'egreso'){
        $_POST["amount"] = $_POST["amount"]*(-1);
      }
      if ($this->transactions->save("transactions", $_POST)) {
        $this->redirect(array("controller"=>"transactions"));
      }else{
        $this->redirect(array("controller"=>"transactions", "method"=>"add"));
      }
    }
      
      $this->set("accounts", $this->transactions->find("accounts"));
      $this->set("categories", $this->transactions->find("categories"));
      $this->_view->setView("add");
  }  

  public function edit($id){
      if ($id) {
        $options = array(
          "conditions" => "id=".$id
        );
        $transaction = $this->transactions->find("transactions","first", $options);
        $this->set("transaction", $transaction);
          $this->set("accounts", $this->transactions->find("accounts"));
          $this->set("categories", $this->transactions->find("categories"));
      }

      if($_POST){
        if ($_POST["operation"] == 'egreso'){
          $_POST["amount"] = $_POST["amount"]*(-1);
        }
        if ($this->transactions->update("transactions", $_POST)){
          $this->redirect(
            array(
              "controller"=>"transactions"
            ));
        }else{
          $this->redirect(
            array(
              "controller"=>"transactions",
              "method"=>"edit/".$_POST["id"]
            )
          );
        }
      }
  }

    
    public function delete($id){
        $conditions = "id=".$id;
      if(  $this->transactions->delete("transactions",$conditions)){
          $this->redirect(array("controller"=>"transactions"));
      }else{
          $this->redirect(array("controller"=>"transactions","method"=>"add"));
      }
    }
}
