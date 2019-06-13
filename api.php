<?php

$data1 = [['first_name'=>'milan'],['first_name'=>'dsffd'],['first_name'=>'sdfsdf'],['first_name'=>'dsfasd'],['first_name'=>'sdfsdfdfssds'],['first_name'=>'dsfsad'],['first_name'=>'dsfasdf'],['first_name'=>'sdfsdfdfssds'],['first_name'=>'dsfsad'],['first_name'=>'dsfasdf']];

$data2 = [['first_name'=>'test'],['first_name'=>'dsffd'],['first_name'=>'sdfsdf'],['first_name'=>'dsfasd'],['first_name'=>'sdfsdfdfssds'],['first_name'=>'dsfsad'],['first_name'=>'dsfasdf'],['first_name'=>'sdfsdfdfssds'],['first_name'=>'dsfsad'],['first_name'=>'dsfasdf']]; 

if ($_POST['start'] == "0") {

  $table_data = array("draw"=> (int)$_POST['draw']+1,
  "recordsFiltered"=> 200,
  "data"=> $data1);

  //echo json_encode($table_data);
  echo json_encode($table_data);

}else{

  $table_data = array("draw"=> (int)$_POST['draw']+1,
  "recordsFiltered"=> 200,
  "data"=> $data2);

  //echo json_encode($table_data);
  echo json_encode($table_data);
}

