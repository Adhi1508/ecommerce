"use strict";

//Globals
window.onload = loadBasket;

//Get basket from session storage or create one if it does not exist
function getBasket(){
    let basket;
    if(sessionStorage.basket === undefined || sessionStorage.basket === ""){
        basket = [];
    }
    else {
        basket = JSON.parse(sessionStorage.basket);
    }
    return basket;
}

//Displays basket in page.
function loadBasket(){
    let basket = getBasket();//Load or create basket
    
    //Build string with basket HTML
    let htmlStr = "<form action='checkout.php' method='post'>";
    htmlStr += "<table><thead><tr><th>Reference</th><th>Product Name</th><th>Price(Rs)</th></tr>";
    let prodIDs = [];
    var baskettotal = 0;
    
    for(let i=0; i<basket.length; ++i){
        baskettotal += Number(basket[i].price);
        htmlStr += "<tr><td>" + basket[i].id + "</td> <td>" + basket[i].name + "</td><td>" + basket[i].price + "</td></tr>";
        prodIDs.push({id: basket[i].id, name: basket[i].name, price: basket[i].price});//Add to product array
    }
    htmlStr += "<tr><td colspan='2'><strong>Total</strong></td><td><strong>" + baskettotal + "</strong></td></tr></thead></table>";

    //Add hidden field to form that contains stringified version of product ids.
    htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";
    
    //Add checkout and empty basket buttons
    htmlStr += "<button class='checkout' type='submit' value='Checkout'>Checkout</button></form>";
    htmlStr += "<button class='checkout' onclick='emptyBasket()'>Empty Basket</button>";
    
    //Display nubmer of products in basket
    document.getElementById("basketdiv").innerHTML = htmlStr;
}

//Adds an item to the basket
function addToBasket(prodID, prodName, prodPrice){
    let basket = getBasket();//Load or create basket
    
    //Add product to basket
    basket.push({id: prodID, name: prodName, price: prodPrice});
    
    //Store in local storage
    sessionStorage.basket = JSON.stringify(basket);
    
    //Display basket in page.
    loadBasket();      
}

//Deletes all products from basket
function emptyBasket(){
    sessionStorage.clear();
    loadBasket();
}
