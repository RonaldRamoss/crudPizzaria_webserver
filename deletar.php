<?php

$conexao = mysqli_connect("localhost","id10997696_pizzaron","pizzaron","id10997696_pizzaron")
                      //onde esta o banco   usuario banco         senha      nome banco de dados
                      $codigo = $_POST['codigo'];
                      $sabor = $_POST['sabor'];
                      $valor = $_POST['valor'];

                      $query = "delete from  tb_pizza  where cd_pizza = $codigo";

                      mysqli_query($conexao,$query);

                      echo "Registro excluido com Sucesso!";
