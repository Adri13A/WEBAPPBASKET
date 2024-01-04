<?php
session_destroy();
session_start();
require_once('config/conexion.php');

class AuthController
{
    private $PDO;

    public function __construct(){
        $con = new Conexion();
        $this->PDO = $con->open();
    }
    
    public function authenticateUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $statement = "SELECT * FROM admin WHERE emailAdmin = :email AND passwordAdmin = :password";
                $consulta = $this->PDO->prepare($statement);
                $consulta->bindParam(':email', $email);
                $consulta->bindParam(':password', $password);
                $consulta->execute();
                if ($fila = $consulta->fetch()) {
                    $_SESSION['nombre'] = $fila['nombreAdmin'];
                    header("Location: views/admin/admin.php");
                } else {
                    $statement = "SELECT * FROM torneos WHERE usuarioOrganizador = :usuario AND contrasenaOrganizador = :password";
                    $consulta = $this->PDO->prepare($statement);
                    $consulta->bindParam(':usuario', $email);
                    $consulta->bindParam(':password', $password);
                    $consulta->execute();
                    if($fila = $consulta->fetch()) {
                        $_SESSION['organizador'] = $fila['organizador'];
                        $_SESSION['idTorneo'] = $fila['idTorneo'];
                        $_SESSION['patrocinadores'] = $fila['patrocinadores'];
                        $_SESSION['sede'] = $fila['sede'];
                        $_SESSION['premio1erLugar'] = $fila['premio1erLugar'];
                        $_SESSION['premio2doLugar'] = $fila['premio2doLugar'];
                        $_SESSION['premio3erLugar'] = $fila['premio3erLugar'];
                        $_SESSION['otroPremio'] = $fila['otroPremio'];

                        $_SESSION['nombreTorneo'] = $fila['nombreTorneo'];

                        header("Location: views/organizador/organizador.php");
                    }
                    else {
                        $this->redirectToIndex("Datos incorrectos");
                    }
            } 
        } else {
            // Datos incompletos
            $this->redirectToIndex("Por favor, complete todos los campos");
        }
    }
    }

    private function redirectToIndex($mensaje)
    {
        // Redirigir al usuario al index con un mensaje de error
        header("Location: index.php?error=" . urlencode($mensaje));
        exit();
    }

}

// Crear una instancia del controlador
$authController = new AuthController();

// Llamar al método para autenticar al usuario
$authController->authenticateUser();
?>
