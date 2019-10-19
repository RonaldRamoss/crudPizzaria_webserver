<?php

$conexao = mysqli_connect("localhost","id10997696_pizzaron","pizzaron","id10997696_pizzaron");
                      //onde esta o banco   usuario banco         senha      nome banco de dados


                      $query = "SELECT * FROM tb_pizza order by ds_sabor";

                      $result = mysqli_query($conexao,$query);

                      $registro = array(

                          'pizzas'=> array()

                      );

                      $i=0;

                      while($linha = mysqli_fetch_assoc($result)){
                    //Funcao mysqli_fetch_assoc serve para poder retornar uma matriz, ele que retorna uma linha inteira por vez

                        $registro['pizzas'][$i] = array(
                          'codigo' => $linha['cd_pizza'],
                          'sabor' => $linha['ds_sabor'],
                          'valor' => $linha['vl_pizza']

                        );
                        $i++;
                      }

                      echo json_encode($registro);
                      // json_encode responsavel por retornar uma string que nesse caso retorna os valores do bd
