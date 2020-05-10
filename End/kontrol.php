
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

// do{
//     $kullaniciAdi=$_POST['name'];
//     $Sifre= $_POST['password'];
    


// }while(!(isset($_POST['name'])&&isset($_POST['password'])&&$kullaniciAdi=='burak'&&$Sifre=='123456'));




if(isset($_POST['name'])&&isset($_POST['password']))//bunlar tanımlanmış mı diye
{
    $kullaniciAdi=$_POST['name'];
    $Sifre= $_POST['password'];
    if(empty($kullaniciAdi)|| empty($Sifre))
    {  
        //swal("Good job!", "You clicked the button!", "success");  
        alert('Lutfen Bos Alan Bırakmayınız');
    include("index.php");//Hocam header komutu webhostta hata verdiği için ve çözümünüde bulamadığım için include komutunu kullandımç
    }
    else
    {
      if($kullaniciAdi=='b191210013@gmail.com'&&filter_var($kullaniciAdi, FILTER_VALIDATE_EMAIL)&&$Sifre=='123456'){
        //   session_start();
        //   $_SESSION['name']='b191210013@gmail.com';
        //   $_SESSION['password']='123456';
          alert('Hosgeldin b191210013');
          include("hakkinda.html");//Hocam header komutu webhostta hata verdiği için ve çözümünüde bulamadığım için include komutunu kullandımç
          
      }
      else{
        alert('Yanlış Kullanıcı Adı Veya Şifre');
        include('index.php');//Hocam header komutu webhostta hata verdiği için ve çözümünüde bulamadığım için include komutunu kullandımç
      }

    }
    
}
else{
    alert('Lütfen Boş Alan Bırakmayınız');
    include('index.php');//Hocam header komutu webhostta hata verdiği için ve çözümünüde bulamadığım için include komutunu kullandımç
}


   
?>