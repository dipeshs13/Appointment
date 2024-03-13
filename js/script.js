let btns = document.getElementsByClassName('book');

let book = function() {
    window.location.href = "Book.php";
}

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', book);
}


