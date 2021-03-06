//This file will hold the code for all of the javascript code needed to support
//this project

//This function will create a topic in the topics table
function createTopic(){
  let topic  = document.getElementById('topic').value;

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  }

  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        document.getElementById("message").innerHTML = 'Topic Added - Refresh to See it Above';
    }
  };

  xmlhttp.open("GET", "addTopic.php?q="+topic, true);
  xmlhttp.send();
}

//This function will add a comment
function addComment() {
  let comment  = document.getElementById('comment').value;

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  }

  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        document.getElementById("message").innerHTML = 'Topic Added - Refresh to See it Above';
    }
  };

  xmlhttp.open("GET", "addcomment.php?q="+comment, true);
  xmlhttp.send();
}
