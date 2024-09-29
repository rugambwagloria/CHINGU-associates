<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shop Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .shop-section, .product-launches {
    margin: 20px;
  }
  .shop-section h2, .product-launches h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  .shop-item, .product-item {
    display: inline-block;
    width: 18%;
    margin: 1%;
    text-align: center;
    border: 1px solid #ddd;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .shop-item img, .product-item img {
    width: 100%;
    height: auto;
  }
  .shop-item button, .product-item button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
  }
  .shop-item button:hover, .product-item button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="shop-section">
  <h2>Shops to get you started!</h2>
  <div class="shop-item">
    <img src="path-to-image.jpg" alt="Baby Step Boutique">
    <p>Baby Step Boutique</p>
    <button onclick="viewStore()">View store</button>
  </div>
  <div class="shop-item">
    <img src="path-to-image.jpg" alt="Tayebwa's crochet">
    <p>Tayebwa's crochet</p>
    <button onclick="viewStore()">View store</button>
  </div>
  <div class="shop-item">
    <img src="path-to-image.jpg" alt="Girly fashion line">
    <p>Girly fashion line</p>
    <button onclick="viewStore()">View store</button>
  </div>
  <div class="shop-item">
    <img src="path-to-image.jpg" alt="The Nsawo plug">
    <p>The Nsawo plug</p>
    <button onclick="viewStore()">View store</button>
  </div>
  <div class="shop-item">
