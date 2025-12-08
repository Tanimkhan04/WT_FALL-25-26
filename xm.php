<!DOCTYPE html>
<html>
<head>
  <title>Product Inventory Form</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f5faff;
    }

    form {
      background: white;
      padding: 20px;
      width: 320px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background: #003366;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background: #0055aa;
    }

    #error {
      color: red;
      text-align: center;
      margin-top: 10px;
    }

    #output {
      margin-top: 20px;
      color: #003366;
      text-align: center;
    }
  </style>
</head>

<body>

<h2 style="text-align:center">Product Inventory Form</h2>

<form onsubmit="return validateProductForm()">

  <label>Product Name:</label>
  <input type="text" id="pname">

  <label>Price:</label>
  <input type="number" id="price">

  <label>Quantity in Stock:</label>
  <input type="number" id="qty">

  <label>Category:</label>
  <select id="category">
    <option value="">-- Select Category --</option>
    <option value="Electronics">Electronics</option>
    <option value="Clothing">Clothing</option>
    <option value="Food">Food</option>
    <option value="Cosmetics">Cosmetics</option>
  </select>

  <label>Expiry Date:</label>
  <input type="text" id="exp" placeholder="DD-MM-YYYY">

  <button type="submit">Add Product</button>

</form>

<div id="error"></div>
<div id="output"></div>

<!-- External JS File -->
<script src="validation.js"></script>

</body>
</html>
