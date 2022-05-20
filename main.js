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
          Swal.fire(
            'Email Sent!',
            'Your message has been sent successfully!',
            'success'
          )
          location.href = "http://localhost/phpmailer/";
        }
      })
  });