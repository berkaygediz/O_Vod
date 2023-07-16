function hideobject(clickobject) {
  var object = document.getElementById(clickobject);
  if (object.style.display === "none") {
    object.style.display = "block";
  } else {
    object.style.display = "none";
  }
}
