function product(name, price, amount) {
    this.name = name;
    this.price = price;
    this.amount = amount;
    return [this.name, this.price, this.amount];
}

var pulli_rosa = new product("Rosa Pullover", 59.99, 1);
var shirt_weiss = new product("Weißes T-Shirt", 29.99, 1);
var pulli_rot = new product("Roter Pullover", 65.99, 1);
var jacke_rot = new product("Rote Jacke", 150.00,2);
var jacke_gelb = new product("Gelbe Jacke", 45.50,2);

var allProducts = [
    pulli_rosa,
    shirt_weiss,
    pulli_rot,
    jacke_rot,
    jacke_gelb
]
function saveToCart(myItem) {
    if (myItem.name === null) {
        localStorage.setItem(myItem.name, myItem.price);
    } else {
        total += Number(myItem.price);
        localStorage.setItem("total", myItem.price);
    }
    let completeShoppingCart = JSON.parse(localStorage.getItem("myShoppingCard")) || [];
    completeShoppingCart.push(myItem);

    localStorage.setItem("myShoppingCard", JSON.stringify(completeShoppingCart));


}
let myShoppingCart = [];

console.log(localStorage.getItem("myShoppingCard"));




