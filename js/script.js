menu.onclick = function myFunction() {
	var x = document.getElementById('myTopnav');
	
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}


$('body').scrollspy({target: ".topnav", offset: 50});
$("#myTopnav a").on('click', function(event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
      window.location.hash = hash;
    });
  }
});
