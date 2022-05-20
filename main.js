

  $( ".btbt" ).on( "click", function(e){
      e.preventDefault();
      Swal.fire(
        'Email Sent!',
        'Your message has been sent successfully!',
        'success'
      )
      window.location.assign("http://localhost/phpmailer/")
  });