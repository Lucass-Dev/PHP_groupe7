function addToCart(title){

let notif = document.getElementById("notif");
notif.style.display = "block";
notif.innerHTML = title+" a bien été ajouté au panier"

setTimeout(function(){

	notif.style.display = "none";
}, 3000);

let table = document.getElementById('flex');
let newTr = document.createElement('tr');
let newth = document.createElement('th');
newTr.appendChild(newth)
table.appendChild(newTr)
newth.innerHTML = title;
}