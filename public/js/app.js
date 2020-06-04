function showAlert(title,text,icon,buttons,dangerMode,functionSuccess,functionNotSuccess){

  swal({
    title: title,
    text: text,
    icon: icon,
    buttons: buttons,
    dangerMode: dangerMode,
  })
  .then((value) => {
    if (value) {

      if (typeof functionSuccess === "function") { 
          functionSuccess();
      }              
      
    } else {

      if (typeof functionNotSuccess === "function") { 
          functionNotSuccess();
      }                   
    
    }
  });

}