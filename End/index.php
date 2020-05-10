<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/php.css">
    <title>Document</title>

</head>


<body>

    <form action="kontrol.php"method="POST">
    <div class="kullanicigirisi">
<h1>Kullanıcı Giriş</h1>

<div class="txtb">
    <svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
        <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/> </svg> 
<label for="">Kullanıcı Adı:</label>
<input type="email"name="name"value=""placeholder="Kullanıcı Adı">
</div>

<div class="txtb">
    <svg class="bi bi-unlock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M.5 9a2 2 0 012-2h7a2 2 0 012 2v5a2 2 0 01-2 2h-7a2 2 0 01-2-2V9z"/>
        <path fill-rule="evenodd" d="M8.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
      </svg>
        <label for="">Şifre:</label>
<input type="password"name="password"value=""placeholder="Şifre">

</div>
<div class="txtb">
    <label for="">Message:</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
</div>

<button class="btn"type="submit">Giriş</button>
    </div>
   
</form>    
</body>
</html>