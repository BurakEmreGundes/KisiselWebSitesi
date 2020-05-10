const form=document.querySelector('#form');
const ul=document.querySelector('#yorumlar');
const inputAd=document.querySelector('#ad');
const inputSoyad=document.querySelector('#soyadi');
const inputEmail=document.querySelector('#email');
const inputTelefon=document.querySelector('#telefon');
const clearButonu=document.querySelector('#buttonClear');

console.log(inputEmail);
console.log(inputSoyad);
clearButonu.addEventListener('click',function(e){
  inputAd.value='';
  inputSoyad.value='';
  inputTelefon.value='';
  inputEmail.value='';
  
      e.preventDefault();
    });
function kontrol(){

  if(inputAd.value===''||inputSoyad.value===''||inputEmail.value===''){
    swal("Dikkat !", "Lütfen Boş Alan Bırakmayınız", "error");
  
  }
  else{
    if(!(inputTelefon.value.length===11)){
      swal("Dikkat !", "Lütfen 11 Haneli Ve Geçerli Bir Telefon Numarası Giriniz", "info");
    }
    else{
      if(inputAd.value.length<2||inputSoyad.value<2){
        swal("Dikkat !", "Lütfen Ad Veya Soyad Değerini Kontrol Ediniz", "info");

      }
    }
   

  }

 
 
  
  // if(inputSoyad.value===''){
  //   swal("Dikkat !", "Lütfen Soyadı Alanını Boş Bırakmayınız", "error");
  // }
  // else if(inputSoyad.value.length<2){
  //   swal("Dikkat !", "Geçersiz Soyad Değeri", "info");
  // }
  // if(inputEmail.value===''){
  //   swal("Dikkat !", "Lütfen Email Alanını Boş Bırakmayınız", "error");
  // }



}





form.addEventListener('submit',button);
  function button(e){
kontrol();
	//swal("Good job!", "You clicked the button!", "success");
	e.preventDefault();


  }

/********************************BAŞKA YERDEN ALMA */
function openNav() {
	document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
	document.getElementById("myNav").style.width = "0%";
  }

  /***************************************** */

//SLİDER

const slayt1=document.querySelector('.slider1');
const yorumlarButonu=document.querySelector('.yorumlar');
const iletisimButonu=document.querySelector('.iletisim');
const iletisimButonu2=document.querySelector('.iletisim2');
const yorumlarButonu2=document.querySelector('.yorumlar2');


let sayfaSayisi=slayt1.children.length;
console.log(sayfaSayisi);
console.log(slayt1.children);
let slaytNum;
slaytGoster1(0);



yorumlarButonu2.addEventListener('click',function(e){

  slaytNum=1;
  slaytGoster1(slaytNum);
    e.preventDefault();
  });


yorumlarButonu.addEventListener('click',function(e){

slaytNum=1;
slaytGoster1(slaytNum);
  e.preventDefault();
});
iletisimButonu.addEventListener('click',function(e){
slaytNum=0;
slaytGoster1(slaytNum);
e.preventDefault();

});
iletisimButonu2.addEventListener('click',function(e){
  slaytNum=0;
  slaytGoster1(slaytNum);
  e.preventDefault();
  
  });


function slaytGoster1(slaytNumm){

for(let i=0;i<slayt1.children.length;i++){
  slayt1.children[i].style.display='none';
}

slayt1.children[slaytNumm].style.display='block';


}


///////******************************************* */
//YORUMLAR
const form1=document.querySelector('#form2');
const inputTextArea=document.querySelector('#textarea');
let yorumlar;

form1.addEventListener('submit',addNewComment);


loadTime();
function addNewComment(e){

if(inputTextArea.value===''){
    swal("Dikkat !", "Lütfen Yorum Kutusunu Boş Bırakmayınız", "error");
}
else{
    createNewItem(inputTextArea.value);
    yorumlar.push(inputTextArea.value);
    saveLG(inputTextArea.value);
    swal("Yorum Yaptınız !", "Sitemi Ziyaret Edip Beni Değerlendirdiğin İçin Teşekkürler");
    console.log(localStorage);


}


e.preventDefault();
}

function saveLG(text){
    localStorage.setItem('yorumlar',JSON.stringify(yorumlar));
  
}
function loadTime(){
yorumlar=getLS();
yorumlar.forEach(function(item) {
    createNewItem(item);
});


}

function getLS(){
if(localStorage.getItem('yorumlar')===null){
    yorumlar=[];
}
else{
    yorumlar=JSON.parse(localStorage.getItem('yorumlar'));

}
return yorumlar;
}



function createNewItem(text){
const li=document.createElement('li');
li.className='yorumlarLi';
li.appendChild(document.createTextNode(text));
ul.appendChild(li);
}
ul.style.overflow='auto';

function deleteAllItem(){

ul.remove(ul.children);

}

var slayt = document.getElementsByClassName("slayt"); 

var slaytSayısı = slayt.length;

var slaytNo = 0;

  slaytGoster(slaytNo);


  function onceki() {

    slaytNo--;

    slaytGoster(slaytNo);

    clearInterval(s);

  }

   function sonraki() {

    slaytNo++;

    slaytGoster(slaytNo);
     clearInterval(s);
  }

 var s =  setInterval(function() {

    slaytNo++;

    slaytGoster(slaytNo);

  },3000000);



 function slaytGoster(slaytNumarası) {

     //slaytNo = slaytNumarası;

   if(slaytNumarası >= slaytSayısı){

     slaytNo = 0;

   }

   if(slaytNumarası < 0){

     slaytNo = slaytSayısı -1;

   }

     for(i = 0; i< slaytSayısı; i++) {

     slayt[i].style.display = "none";


   }

   slayt[slaytNo].style.display = "block";

 }
 
 function openNav() {
	document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
	document.getElementById("myNav").style.width = "0%";
  }
  function tumu1(){
    var element=document.getElementById('buttonla1');
    element.classList.toggle('toogle');
  
  var	hidden=document.getElementById('ekstra11');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra21');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra31');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra41');
  hidden.classList.toggle('visible');
  
    
  }
  
    function tumu(){
  var element=document.getElementById('buttonla');
  element.classList.toggle('toogle');
  
  
  
  var hidden=document.getElementById('ekstra1');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra2');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra3');
  hidden.classList.toggle('visible');
  
  hidden=document.getElementById('ekstra4');
  hidden.classList.toggle('visible');
  
  
  
  
    }
  



