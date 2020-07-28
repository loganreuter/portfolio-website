var el = document.querySelector('#nav-burger');
var le = document.querySelector('#nav-background');

el.onclick = function() {
  el.classList.toggle('open');
  le.classList.toggle('open');
  console.log('click');
};

linkedin = function(){
  alert("Currently I do not have a Linkedin.");
}
