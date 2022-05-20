function accept(id) {
  
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    window.location.reload(true);
  }
  xhttp.open("GET", "formAccept.php?q="+id);
  xhttp.send();
  
}