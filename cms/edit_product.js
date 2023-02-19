// function updateProduct(event) {

//     event.preventDefault();

//     const name = document.getElementById("name").value;
//     const price = document.getElementById("price").value;
//     const quantity = document.getElementById("quantity").value;
//     const image = document.getElementById("image").value;
//     const id = document.getElementById("reference").value;

//     fetch('edit_product.php', {
//       method: 'POST',
//       body: JSON.stringify({id, name, price, quantity, image}),
//       headers: {
//         'Content-Type': 'application/json'
//       }
//     })
//     .then(response => response.json())
//     .then(data => {
//       console.log(data);
//       if (data.status === 'success') {
//         alert(data.message);
//         // Reload the product list after update
//         loadContent();
//       } else {
//         alert(data.message);
//       }
//     })
//     .catch(error => console.error(error));
//   }

// function updateProduct(event) {
//     event.preventDefault();

//     const name = $('#name').val();
//     const price = $('#price').val();
//     const quantity = $('#quantity').val();
//     const image = $('#image').val();
//     const id = $('#reference').val();

//     $.ajax({
//       url: 'edit_product.php',
//       type: 'POST',
//       data: {name: name, price: price, quantity: quantity, image: image, id: id},
//       dataType: 'json',
//       success: function(data) {
//         console.log(data);
//         if (data.status === 'success') {
//           alert(data.message);
//           // Reload the product list after update
//           loadContent();
//         } else {
//           alert(data.message);
//         }
//       },
//       error: function(jqXHR, textStatus, errorThrown) {
//         console.error(errorThrown);
//       }
//     });
//   }

function updateProduct(event) {

  // Prevent the default form submission behavior
  event.preventDefault();

  const name = $("#name").val();
  const price = $("#price").val();
  const quantity = $("#quantity").val();
  const image = $("#image").val();
  const id = $("#reference").val();

  $.ajax({
      url: "edit_product.php",
      method: "POST",
      data: {
        name: name,
        price: price,
        quantity: quantity,
        image: image,
        id: id
      },
      dataType: "json"
    })
    .done(function (data) {
      if (data.status === "success") {
        alert(data.message);
        loadContent();
      } else {
        alert(data.message);
      }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.error("Error updating product:", errorThrown);
    });
}

// function updateProduct(event) {
//     event.preventDefault();

//     const name = $('#name').val();
//     const price = $('#price').val();
//     const quantity = $('#quantity').val();
//     const image = $('#image').val();
//     const id = $('#reference').val();

//     const requestBody = {
//       name: name,
//       price: price,
//       quantity: quantity,
//       image: image,
//       id: id
//     };

//     $.ajax({
//         url: 'edit_product.php',
//         type: 'POST',
//         data: JSON.stringify(requestBody),
//         contentType: 'application/json',
//         dataType: 'json'
//       })
//       .done(function (data) {
//         console.log('Server response:', data);
//         if (data.status === 'success') {
//           alert('Product updated successfully');
//           loadContent(); // Load the content after a product is updated
//         } else {
//           alert('Failed to update product: ' + data.message);
//         }
//       })
//       .fail(function (jqXHR, textStatus, errorThrown) {
//         console.error('Error communicating with server:', errorThrown);
//         alert('An error occurred while updating the product.');
//       });
//   }




// function searchProduct(event) {

//     event.preventDefault();
//     // Get the input value from the form
//     const id = document.getElementById('reference').value;

//     // Send a GET request to the server using the Fetch API
//     fetch('get_product.php'), {
//         method: 'GET',
//         headers: {
//           'Content-Type': 'application/x-www-form-urlencoded'
//         },
//     }
//         .then(response => response.json())
//         .then(response => {
//             console.log('Server response status:', response.status);
//             if (!response.ok) {
//                 throw new Error(`HTTP error! status: ${response.status}`);
//             }
//             return response.json(); // Parse the JSON-encoded response
//         })
//         .then(data1 => {
//             // console.log('Server response:', data);
//             console.log(data1.id);
//             console.log(data1.name);
//             console.log(data1.price);
//             // Update the input boxes with the data from the server
//             document.getElementById('name').value = data1.name;
//             document.getElementById('price').value = data1.price;
//             document.getElementById('quantity').value = data1.quantity;
//             document.getElementById('image').value = data1.image;
//         })
//         .catch(error => {
//             console.error('Error communicating with server:', error);
//             alert('An error occurred while searching for the product.');
//         });
// }

// function searchProduct(event) {

//     event.preventDefault();
//     // Make an AJAX request to the PHP script that returns the data as JSON
//     let productId = document.getElementById('reference').value; 
//     let xhr = new XMLHttpRequest();
//     xhr.open('GET', `get_product.php?id=` );
//     xhr.setRequestHeader('Content-type', 'application/json');
//     xhr.onload = function() {
//     if (xhr.status == 200) {
//         // Parse the JSON data and use it as needed
//         let data = JSON.parse(xhr.responseText);
//         console.log(data.id, data.name, data.price, data.quantity, data.image);
//         alert(data.id);
//     } else {
//         console.error('Error retrieving product data: ' + xhr.status);
//     }
//     };
//     xhr.send();
// }

//   function loadProduct() {
//     const id = document.getElementById('reference').value;

//     fetch(`get_product.php?id=${id}`)
//       .then(response => {
//         if (!response.ok) {
//           throw new Error(`HTTP error! status: ${response.status}`);
//         }
//         return response.json(); // Parse the JSON-encoded response
//       })
//       .then(data => {
//         const nameInput = document.getElementById('name');
//         const priceInput = document.getElementById('price');
//         const quantityInput = document.getElementById('quantity');
//         const imageInput = document.getElementById('image');

//         nameInput.value = data.productname;
//         priceInput.value = data.price;
//         quantityInput.value = data.quantity;
//         imageInput.value = data.image;
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while loading the product.');
//       });
//   }

//   function updateProduct() {
//     // Get the input values from the form
//     const id = document.getElementById('reference').value;
//     const name = document.getElementById('name').value;
//     const price = document.getElementById('price').value;
//     const quantity = document.getElementById('quantity').value;
//     const image = document.getElementById('image').value;

//     // Define the request body as a JSON object
//     const requestBody = {
//       name,
//       price,
//       quantity,
//       image
//     };

//     // Send a PUT request to the server using the Fetch API
//     fetch(`update_product.php?id=${id}`, {
//       method: 'PUT',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify(requestBody)
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
//           alert('Product updated successfully');
//           loadContent();
//         } else {
//           alert('Failed to update product: ' + data.message);
//         }
//       })
//       .catch(error => {
//         console.error('Error communicating with server:', error);
//         alert('An error occurred while updating the product.');
//       });
//   }