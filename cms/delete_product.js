function deleteProduct(event) {

    event.preventDefault();

    const id = document.getElementById('reference').value;

    fetch('delete_product.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `id=${id}`
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('HTTP error! status: ${response.status}');
        }
        return response.text(); // Parse the text response
      })
      .then(result => {
        console.log(result);
        alert('Product deleted successfully');
        loadContent();
      })
      .catch(error => {
        console.error('Error communicating with server:', error);
        alert('An error occurred while deleting the product.');
      });
  }

// function deleteProduct(event) {

//   event.preventDefault();

//   // const id = document.getElementById('image').value;
//   const id = $('#reference').val();

//   // Define the request body as a URL-encoded string
//   // const requestBody = `id=${id}`;

//   $.ajax({
//     url: 'delete_product.php',
//     type: 'POST',
//     data: requestBody,
//     contentType: 'application/x-www-form-urlencoded',
//     // data: {
//     //   id: id
//     // },
//     dataType: "json",
//     success: function (response) {
//       if (response.status === "success") {
//         alert(response.message);
//         // Reload the product list after deletion
//         loadContent();
//       } else {
//         alert(response.message);
//       }
//     },
//     error: function (xhr, status, error) {
//       console.error("AJAX error: " + status + " - " + error);
//     }
//   });
// }

// function deleteProduct(event) {

//   event.preventDefault();

//   // Get the input values from the form
//   const id = $('#reference').val();

//   // Create a new XMLHttpRequest object
//   const xhr = new XMLHttpRequest();

//   // Set the HTTP method and URL
//   xhr.open('POST', 'delete_product.php', true);


//   // Set the Content-Type header
//   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//   // alert("dfghj");

//   // Define the request body as a URL-encoded string
//   const requestBody = `id=${id}`;

//   // alert("dfghj");

//   // Set the event handler for when the response is received
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       console.log('Server response status:', xhr.status);
//       if (xhr.status === 200) {
//         const response = JSON.parse(xhr.responseText);
//         if (response.status === 'success') {
//           alert(response.message);
//           // Reload the product list after deletion
//           loadContent();
//         } else {
//           alert(response.message);
//         }
//       } else {
//         console.error('AJAX error:', xhr.status);
//       }
//     }
//   };



//   // Send the request
//   xhr.send(requestBody);

//   // alert("dfghj");
// }