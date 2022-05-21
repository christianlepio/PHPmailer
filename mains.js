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
          setInterval(
          Swal.fire(
            'Email Sent!',
            'Your message has been sent successfully!',
            'success'
          ),50000)
          location.href = "http://localhost/phpmailer/";
        }
      })
  });