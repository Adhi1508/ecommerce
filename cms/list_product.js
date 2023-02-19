function loadContent() {
    // Specify the URL to fetch data from
    const url = 'list_product.php';
  
    // Send a GET request to the server using the Fetch API
    fetch(url)
      .then(response => {
        // Check if the response was successful
        if (!response.ok) {
          // If the response was not successful, throw an error
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        // If the response was successful, extract the response data as text
        return response.text();
      })
      .then(data => {
        // Update the DOM with the response data
        document.getElementById('ServerContent').innerHTML = data;
      })
      .catch(error => {
        // If there was an error during the request or response handling, catch it
        console.error('Error communicating with server:', error);
        // Show an error message to the user
        alert('An error occurred while loading content from the server.');
      });
  }
  

//   function loadContent() {
//       const url = 'list_product.php';
//       fetch(url)
//           .then(response => {
//               if (!response.ok) {
//                   throw new Error(`HTTP error! status: ${response.status}`);
//               }
//               return response.text();
//           })
//           .then(data => {
//               document.getElementById('ServerContent').innerHTML = data;
//           })
//           .catch(error => {
//               console.error('Error communicating with server:', error);
//               alert('An error occurred while loading content from the server.');
//           });
//   }

