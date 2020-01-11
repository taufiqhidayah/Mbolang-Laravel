let button = document.getElementById('tombol')
let text = "";
let lihattombol = document.getElementById('tombol').style.visibility = "visible"

button.addEventListener('click', function(){
	var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  	var charangka = '0123456789'
  	for (var i = 0; i < 2; i++)
   	    text += possible.charAt(Math.floor(Math.random() * possible.length));
 
  	for (var a = 0; a < 3; a++){
  		text += charangka.charAt(Math.floor(Math.random() * charangka.length));
    }

	let kodetemp = document.getElementById('kode')
	kodetemp.innerHTML = "Kode: " + text
	lihattombol = document.getElementById('tombol').style.visibility = "hidden"

	console.log(text);
})