<?php

//Clase conexion mysql
class mysql 
{
    
    var $server = "";
    var $user = "";
    var $pass = "";
    var $data_base = "";
    var $conexion;
    var $flag = false;
    var $error_conexion = "Error en la conexion a MYSQL";
    
    function conectar()
    {
            $this->conexion = @mysql_connect($this->server,$this->user,$this->pass) or die($this->error_conexion);
            $this->flag = true;
            @mysql_query("SET NAMES utf8");
            return $this->conexion;
    }
    
    function cerrar()
    {
        if($this->flag == true){
            @mysql_close($this->conexion);
        }
    }
    
    function consultar($query)
    {
        return @mysql_db_query($this->data_base,$query);
    }
    
    function f_objeto($query)
    {
        return @mysql_fetch_object($query);
    }

    function f_registros($query)
    {
        return @mysql_fetch_assoc($query);
    }

    function f_total($query)
    {
        return @mysql_num_rows($query);
    }
    
    function seleccionar_db($db){
        $result = @mysql_select_db($db,$this->conexion);
        if($result){
            $this->data_base = $db; 
            return true;
        }else{
            return false;
        }
    }
    
    function liberar_sql($query){
        mysql_free_result($query);
    }
}

?>