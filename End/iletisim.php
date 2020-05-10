<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/style.css">
  <title>İletişim</title>
 


</head>

<body>


  <div class="container">
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="hakkinda.html">AnaSayfa</a>
        <a href="ozgecmis.html">Özgeçmiş</a>
        <a href="sehrim.html">Şehrim</a>
        <a href="mirasimiz.html">Mirasımız</a>
        <a href="iletisim.html">İletişim</a>
      </div>
    </div>
    <div id="header">
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu" onclick='openNav()'><svg class="bi bi-list-ul" width="40px" height="40px"
          viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z"
            clip-rule="evenodd" />
        </svg></label>
      <nav class="menu">
        <ul>
          <li><a href="hakkinda.html">
              <p><strong><span> AnaSayfa</span></strong></p>
            </a></li>
          <li><a href="ozgecmis.html" >
              <p><strong><span>Özgeçmiş</span></strong></p>
            </a></li>
          <li><a href="sehrim.html">
              <p><strong><span>Şehrim</span></strong></p>
            </a></li>
          <li><a href="mirasimiz.html">
              <p><strong><span>Mirasımız</span></strong></p>
            </a></li>
          <li><a href="iletisim.html">
              <p><strong><span>İletişim</span></strong></p>
            </a></li>
        </ul>
      </nav>





    </div>










    <div id="main">
      <div id="mainİci">



        <div id="tanıtım">


          <div class="mavialan">


            <div id="benimResimim"></div>
            <div id="adVeButon"></div>



          </div>
          <div class="Ibaba">

            <div id="benimResimim1"></div>
            <div class="slider1">

              <div class="iletisim-form">
                <div id='gecisButton' class='iletisim'><span>İletişim</span></div>
                <div id='gecisButton' class='yorumlar'><span>Yorumlar</span></div>


                <form action="gonder.php" class='form' id='form'method="POST">

                  <div class="outline">
                    <span><svg class="bi bi-people-circle" width="12px" height="12px" viewBox="0 0 16 16"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                        <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z"
                          clip-rule="evenodd" /> </svg> </i></span>
                    <label for="">Adınız:</label>
                    <input type="text" placeholder='Name'id='ad'name='name'>


                  </div>



                  <div class="outline">
                    <span><svg class="bi bi-people-circle" width="12px" height="12px" viewBox="0 0 16 16"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                        <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z"
                          clip-rule="evenodd" /> </svg> </i></span>
                    <label for="">Soyadınız:</label>
                    <input type="text" name="soyad" placeholder='Surname'id='soyadi'>
                  </div>



                  <div class="outline">
                    <svg class="bi bi-at" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"
                        clip-rule="evenodd" />
                    </svg>
                    <label for="">Email:</label>
                    <input type="email" placeholder="Email"id='email'name='email'>
                  </div>


                  
                  <div class="outline">
                    <span><svg class="bi bi-people-circle" width="12px" height="12px" viewBox="0 0 16 16"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z" />
                        <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z"
                          clip-rule="evenodd" /> </svg> </i></span>
                    <label for="">Telefon:</label>
                    <input type="text"   placeholder='Phone'id='telefon'name='telefon'>
                  </div>

                  <button class='Ibutton' id='buttonClear' type='button'>clear</button>
                  <button class='Ibutton' id='buttonSubmit' type='submit'>submit</button>
                  


                </form>

              </div>



              <div id='yorumKutusu'>
                <div id='gecisButton' class='iletisim2'><span>İletişim</span></div>
                <div id='gecisButton' class='yorumlar2'><span>Yorumlar</span></div>

                <form action=""id='form2'>

                  <textarea name="" id="textarea" cols="60" rows="8"></textarea>

                  <button id='button1' type='submit'>Yorum Yap</button>
                </form>

                <ul id='yorumlar'>

                </ul>

              </div>





            </div>




          </div>



        </div>










      </div>




    </div>
    <div id="footer"></div>
  </div>

  <script type="text/javascript" src="script.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>