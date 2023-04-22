<?php

    require('vendor/autoload.php');

    $conexaoMongo = new MongoDB\Client('mongodb+srv://root:gui123456@cluster0-vfhtx.mongodb.net/test?retryWrites=true&w=1
    ');


    $database = $conexaoMongo->dankicode;

    $collection = $database->aulas;

    $collection->insertOne(['nome'=>'Danki Code Inserido','curso'=>'dev web']);
  
    //$collection->deleteOne(array('nome'=>'Danki Code Atualizado 2'));

    $collection->updateOne(['nome'=>'Danki Code Inserido'],['$set'=>['nome'=>'Atualizado em aula']]);

    $data = $collection->find();

    foreach($data as $key=>$value){
        echo $value['nome'];
        echo '<br />';
    }





?>