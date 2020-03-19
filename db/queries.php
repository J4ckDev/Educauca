<?php
include_once('dbConect.php');

class queries{
    function __construct(){}

    //Consultas a la base de datos

    //Control de registro y login
    public function signUp($name,$surname,$age,$email,$pass,$code,$discapacidad,$rol){
        $query = "INSERT INTO usuarios (nombres,apellidos,edad,rol,pass,discapacidad,codigo,email) VALUES (:nombres,:apellidos,:edad,:rol,:pass,:discapacidad,:codigo,:email)";
        try {
            //Crear el hash de la contraseñas
            $password = password_hash($pass, PASSWORD_BCRYPT);
            // Preparar sentencia
            $comando = dbConect::getInstance()->getDb()->prepare($query);
            $comando -> bindParam(':nombres',$name,PDO::PARAM_STR);
            $comando -> bindParam(':apellidos',$surname,PDO::PARAM_STR);
            $comando -> bindParam(':edad',$age,PDO::PARAM_STR);
            $comando -> bindParam(':rol',$rol,PDO::PARAM_STR);
            $comando -> bindParam(':pass',$password,PDO::PARAM_STR);
            $comando -> bindParam(':discapacidad',$discapacidad,PDO::PARAM_STR);
            $comando -> bindParam(':codigo',$code,PDO::PARAM_STR);
            $comando -> bindParam(':email',$email,PDO::PARAM_STR);
            // Ejecutar sentencia preparada
            $comando->execute();
            return true;
        } catch (PDOException $e) {
            
        }
        return false;
    }

    public static function signIn($email,$pwd){
        $query = "SELECT * FROM usuarios WHERE email=:email";
        try {
            // Preparar sentencia
            $comando = dbConect::getInstance()->getDb()->prepare($query);
            // Ejecutar sentencia preparada
            $comando->bindParam(':email',$email,PDO::PARAM_STR);
            $comando->execute();
            $resultado = $comando -> fetchAll(PDO::FETCH_ASSOC);

            if ($resultado != [] && password_verify($pwd,$resultado[0]['pass'])) {
                $_SESSION['nombres'] = $resultado[0]['nombres'];
                $_SESSION['apellidos'] = $resultado[0]['apellidos'];
                $_SESSION['edad'] = $resultado[0]['edad'];
                $_SESSION['rol'] = $resultado[0]['rol'];
                if (isset($resultado[0]['discapacidad'])) {
                    $_SESSION['discapacidad'] = $resultado[0]['discapacidad'];
                }                
                $_SESSION['codigo'] = $resultado[0]['codigo'];
                $_SESSION['email'] = $resultado[0]['email'];
                return true;
            } else {
                return false;
            }
            
        } catch (PDOException $e) {
            
        }
        return false;
    }

    //Cursos, Secciones, Subsecciones e Matricula Cursos.

    public function newCourse($name,$description,$teacher,$pass)
    {
        $query = "INSERT INTO cursos (name,description,idTeacher,pass) VALUES (:name,:description,:teacher,:pass)";
        try {
            //Crear el hash de la contraseñas
            $password = password_hash($pass, PASSWORD_BCRYPT);
            // Preparar sentencia
            $comando = dbConect::getInstance()->getDb()->prepare($query);
            $comando -> bindParam(':name',$name,PDO::PARAM_STR);
            $comando -> bindParam(':description',$description,PDO::PARAM_STR);
            $comando -> bindParam(':idTeacher',$teacher,PDO::PARAM_STR);
            $comando -> bindParam(':pass',$pass,PDO::PARAM_STR);
            // Ejecutar sentencia preparada
            $comando->execute();
            return true;
        } catch (PDOException $e) {
            
        }
        return false;
    }

    public function getCourses()
    {
        $query = "SELECT * FROM cursos";
        try {
            // Preparar sentencia
            $comando = dbConect::getInstance()->getDb()->prepare($query);
            // Ejecutar sentencia preparada
            $comando->execute();
            return $comando -> fetchAll(PDO::FETCH_ASSOC);            
        } catch (PDOException $e) {
            
        }
        return false;
    }

}