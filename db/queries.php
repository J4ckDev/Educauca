<?php
include_once('dbConect.php');

class queries{
    function __construct(){}

    //Consultas a la base de datos

    //Control de registro y login
    public function SignUp($name,$surname,$age,$email,$pass,$code,$discapacidad,$rol){
        $query = "INSERT INTO usuarios (nombres,apellidos,edad,rol,contraseña,discapacidad,codigo,email) VALUES (:nombres,:apellidos,:edad,:rol,:contraseña,:discapacidad,:codigo,:email)";
        try {
            //Crear el hash de la contraseñas
            $password = password_hash($pass, PASSWORD_BCRYPT);
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);
            $comando -> bindParam(':nombres',$name,PDO::PARAM_STR);
            $comando -> bindParam(':apellidos',$surname,PDO::PARAM_STR);
            $comando -> bindParam(':edad',$age,PDO::PARAM_STR);
            $comando -> bindParam(':rol',$rol,PDO::PARAM_STR);
            $comando -> bindParam(':contraseña',$password,PDO::PARAM_STR);
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
    public static function signIn($email,$pass){
        $query = "SELECT * FROM usuarios WHERE email=:email AND contraseña=:pass";
        try {
            // Preparar sentencia
            $comando = dbConnect::getInstance()->getDb()->prepare($query);
            // Ejecutar sentencia preparada
            $comando->bindParam(':email',$email,PDO::PARAM_STR);
            $comando->bindParam(':pass',$pass,PDO::PARAM_STR);
            $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            
            if ($resultado != [] && password_verify($pass,$resultado["contraseña"])) {
                $_SESSION['nombres'] = $resultado['nombres'];
                $_SESSION['apellidos'] = $resultado['apellidos'];
                $_SESSION['edad'] = $resultado['edad'];
                $_SESSION['rol'] = $resultado['rol'];
                if (!isset($resultado['discapacidad'])) {
                    $_SESSION['discapacidad'] = $resultado['discapacidad'];
                }                
                $_SESSION['codigo'] = $resultado['codigo'];
                $_SESSION['email'] = $resultado['email'];
                return true;
            } else {
                return false;
            }
            
        } catch (PDOException $e) {
            
        }
        return false;
    }
}