$('input').focus(function(){
    $(this).parents('p').addClass('focused');
  });
  
  $('input').blur(function(){
    var inputValue = $(this).val();
    if ( inputValue == "" ) {
      $(this).removeClass('filled');
      $(this).parents('p').removeClass('focused');  
    } else {
      $(this).addClass('filled');
    }
  })  
  $("input").on("change keypress keyup blur", function() {
      var id = $(this).attr("id");
      var idVal = $("#"+id).val();
      if(id == "name"){
          $("#nombreFirma").html(idVal);
      }else if(id == "puesto"){
        $("#puestoFirma").html(idVal);
      }else if(id == "telefono"){
        var str = idVal;
       $("#linkPhone").attr("href", "tel:+"+str.replace(/\s/g, ''));
        $("#telefonoFirma").html(idVal);
      }
 });
 $('select').on('change', function() {
  var id = $(this).attr("id");
  if(id == "pais"){
    if(this.value == "México"){
      $("#backPais").attr("src","http://aihgroup.com.mx/emailDONTDELETE/footer-MEXICO.jpeg");
    }else if(this.value == "Punta Cana"){
      $("#backPais").attr("src","http://aihgroup.com.mx/emailDONTDELETE/footer-PUNTA.jpeg");
    }
    else if(this.value == "Guadalajara"){
      $("#backPais").attr("src","http://aihgroup.com.mx/emailDONTDELETE/footer-GUADALAJARA.jpeg");
    }
    else if(this.value == "Cancún"){
      $("#backPais").attr("src","http://aihgroup.com.mx/emailDONTDELETE/footer-CANCUN.jpg");
    }
  }
});

 function copyToClip(str) {
    function listener(e) {
      e.clipboardData.setData("text/html", str);
      e.clipboardData.setData("text/plain", str);
      e.preventDefault();
    }
    document.addEventListener("copy", listener);
    document.execCommand("copy");
    document.removeEventListener("copy", listener);
  };