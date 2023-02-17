<?php

try {
  throw new Exception("Houve um erro",1);
} catch(Exception $e) {
  // Mandando em json um array com várias informações do erro;
  echo json_encode(array(
    "message"=>$e->getMessage(),
    "line"=>$e->getFile(),
    "file"=>$e->getFile(),
    "code"=>$e->getCode()
  ));
}
?>