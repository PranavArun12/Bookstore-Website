function submitFormAndRedirect("website1.html") {
  var form = document.getElementById("myForm");
  form.submit();
  window.location.href = "website1.html";
}