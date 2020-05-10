
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

// let icindekilerButton=document.querySelector('#header');
// icindekilerButton=icindekilerButton.children[1].children[0];

 
//   if(icindekilerButton.className=="bi bi-x"){
// 	function buttonDegistir(e){
// 		icindekilerButton.className='bi bi-list-ul';
// 	   icindekilerButton.innerHTML='<path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>';
// 		console.log(e.target);

//   }
  
// }
//   else if(icindekilerButton.className=="bi bi-list-ul"){
// 	function buttonDegistir(e){
// 		icindekilerButton.className='bi bi-x';
// 	   icindekilerButton.innerHTML='<path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>'+'<path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>';
// 		console.log(e.target);
  
// 	}
	
//   }
//   icindekilerButton.addEventListener('click',buttonDegistir);
  

  function openNav() {
	document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
	document.getElementById("myNav").style.width = "0%";
  }


//   function ekle(){
// let div=document.createElement('div');
// div.className='box1';
// div.classList.add('ekstra');

// div.innerHTML='<a href="https://goo.gl/maps/tSSpX53fpF36HSxG7"><div class="üstüne"><svg class="konumSimge" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'
// +'<path d="M6.354 5.5H4a3 3 0 000 6h3a3 3 0 002.83-4H9c-.086 0-.17.01-.25.031A2 2 0 017 10.5H4a2 2 0 110-4h1.535c.218-.376.495-.714.82-1z"/>'
// +'<path d="M6.764 6.5H7c.364 0 .706.097 1 .268A1.99 1.99 0 019 6.5h.236A3.004 3.004 0 008 5.67a3 3 0 00-1.236.83z"/>'
// +'<path d="M9 5.5a3 3 0 00-2.83 4h1.098A2 2 0 019 6.5h3a2 2 0 110 4h-1.535a4.02 4.02 0 01-.82 1H12a3 3 0 100-6H9z"/>'
// +'<path d="M8 11.33a3.01 3.01 0 001.236-.83H9a1.99 1.99 0 01-1-.268 1.99 1.99 0 01-1 .268h-.236c.332.371.756.66 1.236.83z"/>'
// +'</svg></div></a>';


// let parent=document.getElementById(buttonla);
// parent.style.height=1500;



//   }
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

