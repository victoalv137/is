<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Document</title>
</head>
<body>
    @php
        $fp = fopen($temp,"rb");
        $file = fread($fp,$size);
        $file = chunk_split(base64_encode($file));
    @endphp
   
    <p><strong>Nombre: </strong>{!!$nombre!!}</p>
    <p><strong>Correo :</strong>{!!$puesto!!}</p>
    <p><strong>Asunto: </strong>{!!$email!!}</p>
    <p><strong>Mensaje :</strong>{!!$file!!}</p>
    
</body>
</html>