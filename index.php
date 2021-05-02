<?php
header("Content-type:text/html; charset=utf8");
ini_set('default_charset','utf-8');
include("conexao.php");
   ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <title>RGB Test</title>
    </head>
    <body>
     <div class="container" >
        
        <div class="logo"> 
            <img  src="img/logo.png" alt="" >  
         </div>
    <div class="menu">
        <div class="telefone">
            <p>°° 0000-0000</p>
        </div>
        <nav>
            <ul id="menuconfig">
                <li> <a href="#">Página 1</a> </li>
                <li> <a href="#">Página 2</a></li>
                <li> <a href="#">Página 3</a></li>
                <li> <a href="#">Página 4</a></li>
                <li> <a href="#">Página 5</a></li>
                <li> <a href="#">Página 6</a></li>
                <li> <a href="#">Página 7</a></li>
            </ul>
        </nav>
        <hr>
    </div>
    <div class="linha">
        <div class="foto">
            <img class="foto" src="img/foto1.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='1'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto2.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='2'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto3.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='3'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto4.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='4'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto5.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='5'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        
    </div>
    <div class="linha">
        <div class="foto">
            <img class="foto" src="img/foto6.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='6'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto7.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='7'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto8.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='8'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto9.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='9'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto10.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='10'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        
    </div>
    <div class="linha">
        <div class="foto">
            <img class="foto" src="img/foto11.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='11'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto12.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='12'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto13.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='13'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto14.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='14'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto15.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='15'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        
    </div>
    <div class="linha">
        <div class="foto">
            <img class="foto" src="img/foto16.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='16'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto17.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='17'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto18.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='18'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto19.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='19'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        <div class="foto">
            <img class="foto" src="img/foto20.jfif" alt="" >  
            <?php
            $consulta = "SELECT TEXTO FROM TEXTO where CODIGO_TEXTO='20'" ;
            $CON = mysqli_query($mysqli,$consulta) or die ("Erro ao conectar");
           while($fetch = mysqli_fetch_row($CON)){
            
            for($i=0; $i<1; $i++){
                $str = $fetch[$i];
             }
             echo $fetch[0];
        }
        
           ?>
            <hr class="hrstyle">
        </div>
        
    </div>
    <hr>
    <div class="rodape ">
    <h3 class="hrtyle"> Pessoa ou Empresa</h3>
        <div class="foto">
            <img class="foto" src="img/foto1.jfif" alt="" > 
             
            
        </div>
    </div>
         </body>
</html>
