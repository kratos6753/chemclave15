(function(){
/*var button = new Array();
var wrapper = new Array();
var open = new Array();
for(i=0;i<4;i++){
	button[i] = document.getElementById('cn-button-'+(i+1));
    wrapper[i] = document.getElementById('cn-wrapper-'+(i+1));
    
    //open and close menu when the button is clicked
	open[i] = false;
	
	button[i].addEventListener('click', function(){
		alert(i);
	  if(!open[i]){
	    this.innerHTML = "Close";
	    classie.add(wrapper[i], 'opened-nav');
	  }
	  else{
	    this.innerHTML = "Menu";
		classie.remove(wrapper[i], 'opened-nav');
	  }
	  open[i] = !open[i];
	}, false);
}*/
var i;
var open = [false,false,false,false];
$('.cn-button').click(function(){
	$('.cn-wrapper').removeClass('opened-nav');
	i = parseInt($(this).attr('id').slice(-1));
	if(!open[i]){
		//$(this).html('Close');
		$(this).next().addClass('opened-nav');
	}else {
		//$(this).html('Menu');
		$(this).next().removeClass('opened-nav');
	}
	open[i] = !open[i]
});
/*
	function closeWrapper(){
		classie.remove(wrapper[i], 'opened-nav');
	}
*/
})();
