<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<p>Para reestablecer la contraseña de tu cuenta relacionada a <a href="http://mipagina.pe/login">mipagina.pe</a>,
haz clic en el siguiente enlace:</p>
<p style="font-size: 18px">{{ url('password/reset/'.$token) }}</p>
<p>Si no funciona, copie la URL y péguela en una ventana de su navegador.</p>
<p>Si ha recibido este mensaje por error, es probable que hayan introducido
sin darse cuenta su dirección de correo electrónico para reestablecer una contraseña.
</p>
</body>
</html>