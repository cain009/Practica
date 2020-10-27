<?php

    class Usuario
    {
        public $nombre;
        public $apellido;
        public $cedula;
        public $usuario;
        public $password;
        public $area;

        function create($nombre, $apellido, $cedula, $usuario, $password, $area)
        {
            $db=new db();
            $db->_construct();
            $sql=("insert into public.usuario(nombre, apellido, cedula, usuario, password, area) values ('$nombre','$apellido','$cedula','$usuario', '$password', '$area')");
            $query=pg_query($sql);
            if ($query==FALSE)
            {
                
            }
        }
    }
?>