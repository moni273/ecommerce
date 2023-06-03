






var allMenuDropdownButtons = document.querySelectorAll('.menu__container--superitem.sub');
var allMenuSubitemBoxes = document.querySelectorAll('.menu__container--subitembox');

Array.from(allMenuDropdownButtons).forEach( (button,index) => {
    button.addEventListener('click',function(){
        
        if( allMenuSubitemBoxes[index].classList.contains('select') ){
            Array.from( allMenuSubitemBoxes ).forEach( box => {
                box.classList.remove('select');
                box.style.height = '0px';
            } );
        }else{
            Array.from( allMenuSubitemBoxes ).forEach( box => {
                box.classList.remove('select');
                box.style.height = '0px';
            } );
            allMenuSubitemBoxes[index].classList.add('select');
            allMenuSubitemBoxes[index].style.height = allMenuSubitemBoxes[index].scrollHeight+'px';
        }
    });
} );

var menuButton = document.querySelector('.header__mobilemenu');
function menuClose(){
    menuButton.classList.remove('select');
    document.querySelector('.menu').classList.remove('select');
}

function menuOpen(){
    menuButton.classList.add('select');
    document.querySelector('.menu').classList.add('select');
}


menuButton.addEventListener( 'click',function(){
    if( menuButton.classList.contains('select') ){
        menuClose();
    }else{
        menuOpen();
    }
} );

document.querySelector('.menu__close').addEventListener('click',function(){
    menuClose();
});



// function myFunction() {
//     var input, filter, ul, li, a, i, txtValue;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     ul = document.getElementById("myUL");
//     li = ul.getElementsByClassName("product__details--name");
//     for (i = 0; i < li.length; i++) {
//         a = li[i].getElementsByClassName("product__details--name")[0];
//         txtValue = a.textContent || a.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             li[i].style.display = "";
//         } else {
//             li[i].style.display = "none";
//         }
//     }
// }


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



