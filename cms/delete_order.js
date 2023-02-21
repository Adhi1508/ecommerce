function deleteOrder(event) {

    event.preventDefault();

    const id = document.getElementById('references').value;

    fetch('delete_order.php', {
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
        alert('Order deleted successfully');
        loadOrder();
      })
      .catch(error => {
        console.error('Error communicating with server:', error);
        alert('An error occurred while deleting the order.');
      });
  }