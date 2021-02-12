let searchInput = document.getElementById('searchBar');
let allCategory = document.querySelectorAll('#categorieSpan');
let allCard = document.querySelectorAll('.art');

searchInput.addEventListener('keyup', function(e) {
    let input = searchInput.value;
    console.log(input);
    input = input.toLowerCase();

    for (let i = 0; i < allCard.length; i++) {
        if (allCategory[i].innerText.toLowerCase().includes(input)) {
            allCard[i].style.display = "flex";
        }else{
            allCard[i].style.display = "none";            
        }
    }
});