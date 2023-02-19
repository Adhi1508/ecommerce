<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    
    <title>CMS Page</title>
</head>

<body>
    <!-- Start of navigation bar -->
    <nav>
        <ul>
            <li class="cart"><a href="./cms/cms.php"><i
                        class="fas fa-dumbbell"></i><span></span><span></span><span>FitFury</span></a></li>
            <li><a href="./cms.php">Home</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
    </nav>
    <!-- End of navigation bar -->

    <!-- Display a heading  -->
    <div class="customer-order">
        <h2>Customer Orders</h2>
    </div>

    <!-- Start of table customer orders -->
    <div class="cart-container">
        <table>
            <thead>
                <tr>
                    <!-- The heading of the table -->
                    <th>Reference</th>
                    <th>Username</th>
                    <th>Product Name</th>
                    <th>Price(Rs)</th>
                    <th>Quantity</th>
                    <th>Total(Rs)</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <tr>
                    <!-- The details of the table -->
                    <td>C1GY</td>
                    <td>Adhiveer</td>
                    <td>Dumbbell 2kg</td>
                    <td>500</td>
                    <td>2</td>
                    <td>1000</td>
                    <td>20/03/22</td>

                    <!-- A delete button for each row at the end of the table -->
                    <td><button class="action-btn">Delete</button></td>
                </tr>
                <tr>
                    <!-- The details of the table -->
                    <td>C45T</td>
                    <td>Lokesh</td>
                    <td>Dumbell 4kg</td>
                    <td>750</td>
                    <td>2</td>
                    <td>1500</td>
                    <td>01/03/22</td>

                    <!-- A delete button for each row at the end of the table -->
                    <td><button class="action-btn">Delete</button></td>
                </tr>
                <tr>
                    <!-- The details of the table -->
                    <td>C265</td>
                    <td>Chetan</td>
                    <td>Dumbell 8kg</td>
                    <td>1000</td>
                    <td>5</td>
                    <td>5000</td>
                    <td>25/03/22</td>

                    <!-- A delete button for each row at the end of the table -->
                    <td><button class="action-btn">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- End of table customer orders -->

    <!-- Start of form asking the details of the product -->
    <div class="container">
        <form class="form-container">
            <div class="top-deals">
                <h2>Actions</h2>
            </div>
            <!-- <input type="text" id="reference" name="reference" placeholder="Reference:"><br><br> -->
            <input type="text" id="reference" name="id" placeholder="ID:"><br><br>
            <input type="text" id="name" name="name" placeholder="Name:"><br><br>
            <input type="text" id="price" name="price" placeholder="Price:"><br><br>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity:"><br><br>
            <input type="text" id="image" name="image" placeholder="Image:"><br><br>

            <!-- Added buttons to add,edit or delete products -->
            <!-- <input type="submit" onclick="SearchProduct(event)" value="Search Product"> -->
            <input type="submit" onclick="addContent(event)" value="Add Product">
            <!-- <input type="submit" formaction="get_product.php" formmethod="get" value="Edit Product"> -->
            <input type="submit" onclick="updateProduct(event)" value="Edit Product">
            <input type="submit" onclick="deleteProduct(event)" value="Delete Product">
            <!-- <input type="submit"> -->
        </form>
        <!-- End of form asking the details of the product -->

        <!-- Added a table for the inventory(View products) -->
        <div class="cart-container">
            <div class="inventory">
                <h2>Inventory</h2>
            </div>
            <table id="ServerContent">
                <thead>
                    <input type="submit" onclick="loadContent()" value="Load Product">
                </thead>
            </table>
        </div>
    </div>

    <!-- Start of footer -->
    <footer>
        <p>Copyright © 2021 FitFury.com. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>
    <!-- End of footer -->
    <script src="list_product.js"></script>
    <script src="add_product.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="delete_product.js"></script>
    <script src="edit_product.js"></script>
</body>

</html>