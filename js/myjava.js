/*function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block"; 
}*/

function showDiv() { 
        if(document.getElementById('solv-pakke-tekst').style.display=='none') { 
            document.getElementById('solv-pakke-tekst').style.display='block'; 
        } 
        return false;
    } 
   /* function hide() { 
        if(document.getElementById('polterabendtekst').style.display=='block') { 
            document.getElementById('polterabendtekst').style.display='none'; 
        } 
        return false;
    }   */




/* input form til at vælge antal voksne eller børn  */ 
var count = 1;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
    }



/* calender */
webshim.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'date',
    date: {
        startView: 2,
        inlinePicker: true,
        classes: 'hide-inputbtns'
    }
});
webshim.setOptions('forms', {
    lazyCustomMessages: true
});
//start polyfilling
webshim.polyfill('forms forms-ext');

//only last example using format display
$(function () {
    $('.format-date').each(function () {
        var $display = $('.date-display', this);
        $(this).on('change', function (e) {
            //webshim.format will automatically format date to according to webshim.activeLang or the browsers locale
            var localizedDate = webshim.format.date($.prop(e.target, 'value'));
            $display.html(localizedDate);
        });
    });
});



/* Kontakt formular */
/* Kontakt formularen er lavet ud fra kode på følgende side: https://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068

$("#kontaktform").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 $.ajax({
      type: "POST",
      url: "sendmail.php",
      data: "name=" + name + "&email=" + email + "&message=" + message,
      success : function(text){
          if (text == "success"){
              formSuccess();
          } else {
              formError();
              submitMSG(false,text);
          }
      }
  });
}
function formSuccess(){
    $("#kontaktform")[0].reset();
submitMSG(true, "Tak for din henvendelse, vi svarer dig så hurtigt vi kan!");
}

function formError(){
    $("#kontaktform").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}



function submitMSG(valid, msg){
        var msgClasses;
    if(valid){
        msgClasses = "h3 text-center tada animated text-success";
		formError();
		submitMSG(false, "Har du udfyldt alle felterne?");
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}



/*Nedenstående kode burde få knappen lokation til at få animation pulse ved hover 
/* Kode taget fra http://www.telegraphicsinc.com/2013/07/how-to-use-animate-css/
/* Animation på knapper
function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}


$(document).ready(function(){
    $('#lokation').each(function() {
        animationHover(this, 'pulse');
    });
});
*/
 
