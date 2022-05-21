$( ".btbt" ).on( "click", function(e){
      e.preventDefault();

      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Email Sent!',
            text: 'Your message has been sent successfully!',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function(){
          location.href = "http://localhost/phpmailer/";
        }, 1500);
        }
      })
  });