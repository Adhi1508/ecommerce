// function addContent() {
//     // Get the input values from the form
//     const name = document.getElementById('name').value;
//     const price = document.getElementById('price').value;
//     const quantity = document.getElementById('quantity').value;
//     const image = document.getElementById('image').value;

//     // Define the request body as a URL-encoded string
//     const requestBody = `name=${name}&price=${price}&quantity=${quantity}&image=${image}`;

//     // Send a POST request to the server using the Fetch API
//     fetch('add_product.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/x-www-form-urlencoded'
//       },
//       body: requestBody
//     })
//       .then(response => {
//         if (!response.ok) {
//           throw new Error(`HTTP error! status: ${response.status}`);
//         }
//         return response.text();
//       })
//       .then(data => {
//         // Handle the server response
//         console.log('Server response:', data);
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while adding the product.');
//       });
//   }

// function addContent() {
//     // Get the input values from the form
//     const name = document.getElementById('name').value;
//     const price = document.getElementById('price').value;
//     const quantity = document.getElementById('quantity').value;
//     const image = document.getElementById('image').value;

//     // Define the request body as a URL-encoded string
//     const requestBody = `name=${name}&price=${price}&quantity=${quantity}&image=${image}`;

//     // Send a POST request to the server using the Fetch API
//     fetch('add_product.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/x-www-form-urlencoded'
//       },
//       body: requestBody
//     })
//       .then(response => {
//         console.log('Server response status:', response.status); // Log the HTTP status code
//         if (!response.ok) {
//           throw new Error(`HTTP error! status: ${response.status}`);
//         }
//         return response.text();
//       })
//       .then(data => {
//         // Handle the server response
//         console.log('Server response:', data);
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while adding the product.');
//       });
//   }


// function addContent() {
//     // Get the input values from the form
//     const name = document.getElementById('name').value;
//     const price = document.getElementById('price').value;
//     const quantity = document.getElementById('quantity').value;
//     const image = document.getElementById('image').value;

//     // Define the request body as a URL-encoded string
//     const requestBody = `name=${name}&price=${price}&quantity=${quantity}&image=${image}`;

//     // Send a POST request to the server using the Fetch API
//     fetch('add_product.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/x-www-form-urlencoded'
//       },
//       body: requestBody
//     })
//       .then(response => {
//         console.log('Server response status:', response.status);
//         if (!response.ok) {
//           throw new Error(`HTTP error! status: ${response.status}`);
//         }
//         return response.json(); // Parse the JSON-encoded response
//       })
//       .then(data => {
//         console.log('Server response:', data);
//         if (data.status === 'success') {
//           alert('Product added successfully');
//         } else {
//           alert('Failed to add product: ' + data.message);
//         }
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while adding the product.');
//     });
// }

// function addContent() {
//     // Get the values of the product fields from the form
//     let name = document.getElementById("productName").value;
//     let price = document.getElementById("productPrice").value;
//     let quantity = document.getElementById("productQuantity").value;
//     let image = document.getElementById("productImage").value;

//     // Build the URL with the query parameters
//     let url = "http://localhost/cw2/Code/CMS/add_product.php";
//     url += "?name=" + encodeURIComponent(name);
//     url += "&price=" + encodeURIComponent(price);
//     url += "&quantity=" + encodeURIComponent(quantity);
//     url += "&image=" + encodeURIComponent(image);

//     // Send the AJAX request
//     let request = new XMLHttpRequest();
//     request.open("GET", url);
//     request.onload = function () {
//         if (request.status === 200) {
//             // Handle successful response
//         } else {
//             alert("Error communicating with server: " + request.status);
//         }
//     };
//     request.send();
// }

// function addContent(event) {

//   // Prevent the default form submission behavior
//   event.preventDefault();

//   // Get the input values from the form
//   const name = document.getElementById('name').value;
//   const price = document.getElementById('price').value;
//   const quantity = document.getElementById('quantity').value;
//   const image = document.getElementById('image').value;

//   // Define the request body as a URL-encoded string
//   const requestBody = `name=${name}&price=${price}&quantity=${quantity}&image=${image}`;

//   // Send a POST request to the server using the Fetch API
//   fetch('add_product.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/x-www-form-urlencoded'
//       },
//       body: requestBody
//     })
//     .then(response => {
//       console.log('Server response status:', response.status);
//       if (!response.ok) {
//         throw new Error(`HTTP error! status: ${response.status}`);
//       }
//       return response.json(); // Parse the JSON-encoded response
//     })
//     .then(data => {
//       console.log('Server response:', data);
//       if (data.status === 'success') {
//         alert('Product added successfully');
//         loadContent(); // Load the content after a product is added
//       } else {
//         alert('Failed to add product: ' + data.message);
//       }
//     })
//     .catch(error => {
//       console.error('Error communicating with server:', error);
//       alert('An error occurred while adding the product.');
//     });
// }

function addContent(event) {

  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values from the form
  const name = $('#name').val();
  const price = $('#price').val();
  const quantity = $('#quantity').val();
  const image = $('#image').val();

  // Define the request body as a URL-encoded string
  const requestBody = `name=${name}&price=${price}&quantity=${quantity}&image=${image}`;

  // Send a POST request to the server using jQuery
  $.ajax({
      url: 'add_product.php',
      type: 'POST',
      data: requestBody,
      contentType: 'application/x-www-form-urlencoded',
      dataType: 'json'
    })
    .done(function (data) {
      console.log('Server response:', data);
      if (data.status === 'success') {
        alert('Product added successfully');
        loadContent(); // Load the content after a product is added
      } else {
        alert('Failed to add product: ' + data.message);
      }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.error('Error communicating with server:', errorThrown);
      alert('An error occurred while adding the product.');
    });
}