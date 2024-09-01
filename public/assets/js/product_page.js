function changeImage(src) {
  document.getElementById('largeImage').src = src;
}

// Assuming you have the color swatches with the class 'color-swatch'
const colorSwatches = document.querySelectorAll('.color-swatch');

colorSwatches.forEach(swatch => {
  swatch.addEventListener('click', function () {
      // Remove 'selected' class from all swatches
      colorSwatches.forEach(s => s.classList.remove('selected'));
      
      // Add 'selected' class to the clicked swatch
      this.classList.add('selected');
  });
});

// Get references to the elements
const decrementButton = document.querySelector('.decrement-button');
const incrementButton = document.querySelector('.increment-button');
const quantityLabel = document.querySelector('.quantity-label');

// Initial quantity
let quantity = parseInt(quantityLabel.textContent, 10);

// Function to update the quantity
function updateQuantity(amount) {
  quantity += amount;
  if (quantity < 0) {
      quantity = 0; // Prevent quantity from going below 0
  }
  quantityLabel.textContent = quantity;
}

// Event listeners for buttons
decrementButton.addEventListener('click', () => updateQuantity(-1));
incrementButton.addEventListener('click', () => updateQuantity(1));

// document.addEventListener('DOMContentLoaded', () => {
//   // Reference to the price label and add to cart button
//   const priceLabel = document.getElementById('price-label');
//   const addToCartButton = document.getElementById('add-to-cart-button');

//   // Initial price
//   let price = 0;

//   // Function to update the price
//   function updatePrice(newPrice) {
//       price = newPrice*0.25;
//       priceLabel.textContent = `$${price.toFixed(2)}`;
//   }

//   // Event listener for the button to change the price dynamically
//   addToCartButton.addEventListener('click', () => {
//       // Example: Increase price by $10 on each click
//       updatePrice(price + 10);
//   });

//   // Event listener for quantity change
//   quantityLabel.addEventListener('DOMSubtreeModified', function() {
//       // Calculate new price based on quantity
//       const newPrice = 268.35 * quantity;
//       updatePrice(newPrice);
//   });
// });

$(document).ready(function () {
  $('.btn').on('click', function(e) {
      e.preventDefault(); // Prevent default link behavior
      $('#modal').modal('show'); // Show the modal
  });
});
