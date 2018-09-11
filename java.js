
let btn = document.getElementById('show-hideBtn');

btn.onclick = function() {
    let comments = document.getElementsByClassName("comments");
    if(comments.style.display === "none"){
        comments.style.display = 'block';
        btn.innerHTML = 'Hide comments';
    }else{
        comments.style.display = 'none';
        btn.innerHTML = 'Show comments';
    }
}
    