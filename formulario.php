<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre'])&& !empty($_POST['email'])&&!empty($_POST['mensaje'])){
            $nombre=$_POST['nombre'];
            $email=$_POST['email'];
            $asunto="Consulta vía web"; 
            $mensaje="Nombre: ".$nombre."\n".$_POST['mensaje'];
            $header="From: ".$email."\r\n";
            $header.="Reply-To: contacto@dospajarosvolando.com"."\r\n";
            $header.="X-Mailer: PHP/".phpversion();
            $tuCasilla="contacto@dospajarosvolando.com";
            $mail=@mail($tuCasilla,$asunto,$mensaje,$header);
            if($mail){
                echo "<script>
                        alert('Gracias por tu contacto! nos estaremos comunicando');
                        window.location='index.html'
                        </script>";
            }else{
                echo "<script>
                        alert('Lamentamos decirte que no hemos podido enviar su consulta');
                        window.location='index.html'
                        </script>";
            }
        }
        else{
            echo "<script>
            alert('Error, faltan datos');
                    window.location='index.html'
                </script>"; 
        }
    } 
     header("Location: formulario.php")
?>