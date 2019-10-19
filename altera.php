<?php

$conexao = mysqli_connect("localhost","id10997696_pizzaron","pizzaron","id10997696_pizzaron")
                      //onde esta o banco   usuario banco         senha      nome banco de dados
                      $codigo = $_POST['codigo'];
                      $sabor = $_POST['sabor'];
                      $valor = $_POST['valor'];

                      $query = "update tb_pizza set ds_sabor = '$sabor', vl_pizza = $valor where cd_pizza = $codigo";

                      mysqli_query($conexao,$query);

                      echo "Registro Alterado com Sucesso!";
