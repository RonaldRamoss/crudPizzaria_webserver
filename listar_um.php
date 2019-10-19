<?php

$conexao = mysqli_connect("localhost","id10997696_pizzaron","pizzaron","id10997696_pizzaron");
                      //onde esta o banco   usuario banco         senha      nome banco de dados


                        $codigo = $_POST['codigo'];

                      $query = "SELECT * FROM tb_pizza where cd_pizza = $codigo";

                      $result = mysqli_query($conexao,$query);


                      while($linha = mysqli_fetch_assoc($result)){
                    $registro = array(
                      'pizzas'=> array(
                          'codigo' => $linha['cd_pizza'],
                          'sabor' => $linha['ds_sabor'],
                          'valor' => $linha['vl_pizza']
                        )
                      );
                      }

                      echo json_encode($registro);
                      // json_encode responsavel por retornar uma string que nesse caso retorna os valores do bd
