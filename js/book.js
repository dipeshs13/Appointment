
const textarea = document.getElementById('search');

let size_increase = function(){
    this.rows = 6;
}
let size_decrease = function(){
    this.rows = 3;
}
textarea.addEventListener('focus', size_increase);

// textarea.addEventListener('blur', size_decrease);


// let reviewForm = document.getElementById('reviewForm');

// reviewForm.addEventListener('click', function(event) {
//     event.preventDefault(); 

//     const reviewText = document.getElementById('search').value;

    
    
//     let para = document.getElementById('review');
//     para.innerText = reviewText;
// });