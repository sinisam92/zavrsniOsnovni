
function showHide() {
  var coms = document.getElementById('comments-div');
  var btn = document.getElementById('comments-btn');
    if (coms.style.display === 'none') {
      coms.style.display = 'block';
      btn.innerHTML = 'Hide comments';
    }else {
      coms.style.display = 'none';
      btn.innerHTML = 'Show comments';
    }
};
