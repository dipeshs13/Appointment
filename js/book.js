// document.addEventListener('DOMContentLoaded', function(){
    let buttons = document.getElementsByClassName('book');
    if(buttons.length > 0){
    for(let i=0; i<buttons.length; i++){
    buttons[i].addEventListener('click', function(){
        window.location.href = 'Book.php';
    });
    }
    }