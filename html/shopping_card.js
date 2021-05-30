function product(name, price) {
    this.name = name;
    this.price = price;
    return [this.name, this.price];
}

var pulli_rosa = product("Rosa Pullover", 59.99);
var shirt_weiss = product("Weißes T-Shirt", 29.99);
var pulli_rot = product("Roter Pullover", 65.99);
var jacke_rot = product("Rote Jacke", 150.00);
var jacke_gelb = product("Gelbe Jacke", 45.50);


function saveToCart(myItem) {

    var completeShoppingCart = JSON.parse(localStorage.getItem("myShoppingCard"));
    completeShoppingCart.push(myItem);
    localStorage.setItem("myShoppingCard", JSON.stringify(completeShoppingCart));


}
console.log(localStorage.getItem("myShoppingCard"));




