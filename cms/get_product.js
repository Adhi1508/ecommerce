// function searchProduct(event) {

//     event.preventDefault();
//     // Get the input value from the form
//     const id = document.getElementById('id').value;
  
//     // Send a GET request to the server using the Fetch API
//     fetch('get_product.php?id=${id}')
//       .then(response => {
//         console.log('Server response status:', response.status);
//         if (!response.ok) {
//           throw new Error(`HTTP error! status: ${response.status}`);
//         }
//         return response.json(); // Parse the JSON-encoded response
//       })
//       .then(data => {
//         console.log('Server response:', data);
//         // Update the input boxes with the data from the server
//         document.getElementById('name').value = data.productname;
//         document.getElementById('price').value = data.price;
//         document.getElementById('quantity').value = data.quantity;
//         document.getElementById('image').value = data.image;
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while searching for the product.');
//     });
//   }
  
       
  