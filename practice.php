<!DOCTYPE html>
<html>
<head>
  <title>Event Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
    
    h1, h2 {
      text-align: center;
      color: #003366;
    }
 
    .section {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 400px;
      margin: 20px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
      border: none;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
      padding: 15px;
      background-color: #e8f5e8;
      border-radius: 5px;
      border: 1px solid #4caf50;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
      padding: 10px;
      background-color: #ffe6e6;
      border-radius: 5px;
      border: 1px solid #ff4444;
    }

    .activity-item {
      background-color: #f9f9f9;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border-left: 4px solid #003366;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .remove-btn {
      background-color: #ff4444;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
      width: auto;
    }

    .remove-btn:hover {
      background-color: #cc0000;
    }

    .activity-input-group {
      display: flex;
      gap: 10px;
    }

    .activity-input-group input {
      flex: 1;
    }

    .activity-input-group button {
      width: auto;
      flex: 0 0 100px;
    }
  </style>
</head>
 
<body>
  <!-- Participant Registration Section -->
  <div class="section">
    <h2>Participant Registration</h2>
    <form id="registrationForm">
      <label>Full Name:</label>
      <input type="text" id="fullname" required>

      <label>Email:</label>
      <input type="email" id="email" required>

      <label>Phone Number:</label>
      <input type="tel" id="phonenumber" required>

      <label>Password:</label>
      <input type="password" id="password" required>

      <label>Confirm Password:</label>
      <input type="password" id="confirmpassword" required>

      <button type="submit">Register</button>
    </form>
  </div>

  <div id="error"></div>
  <div id="output"></div>

  <!-- Activity Selection Section -->
  <div class="section">
    <h2>Activity Selection</h2>
    <div class="activity-input-group">
      <input type="text" id="activityName" placeholder="Enter activity name">
      <button onclick="addActivity()">Add Activity</button>
    </div>
    <div id="activitiesList"></div>
  </div>
 
<script>
  // Registration Form Handling
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    handleSubmit();
  });

  function handleSubmit() {
    var fullname = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var phonenumber = document.getElementById("phonenumber").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmpassword = document.getElementById("confirmpassword").value.trim();
 
    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");
 
    
    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";
 
    
    if(fullname === "" || email === "" || phonenumber === "" || password === "" || confirmpassword === "") {
      errorDiv.innerHTML = "Please fill all fields";
      return false;
    }
 
    if(!email.includes("@")) {
      errorDiv.innerHTML = "Email must contain '@'";
      return false;
    }
 
    if(isNaN(phonenumber) || phonenumber === "") {
      errorDiv.innerHTML = "Phone number must contain only digits";
      return false;
    }
 
    if(password !== confirmpassword) {
      errorDiv.innerHTML = "Passwords do not match";
      return false;
    }
 
    
    outputDiv.innerHTML = `
      <strong>Registration Successful!</strong><br>
      Name: ${fullname}<br>
      Email: ${email}<br>
      Phone: ${phonenumber}
    `;
 
   
    document.getElementById("registrationForm").reset();
    
    return false;
  }

  
  function addActivity() {
    var activityInput = document.getElementById("activityName");
    var activityName = activityInput.value.trim();
    
    if(activityName === "") {
      alert("Please enter an activity name");
      return;
    }
    
    var activitiesList = document.getElementById("activitiesList");
    
    
    var activityItem = document.createElement("div");
    activityItem.className = "activity-item";
    
    activityItem.innerHTML = `
      <span>${activityName}</span>
      <button class="remove-btn" onclick="removeActivity(this)">Remove</button>
    `;
    
    activitiesList.appendChild(activityItem);
    
    activityInput.value = "";
  }

  function removeActivity(button) {
    var activityItem = button.parentElement;
    activityItem.remove();
  }

  
  document.getElementById("activityName").addEventListener("keypress", function(event) {
    if(event.key === "Enter") {
      addActivity();
      event.preventDefault();
    }
  });
</script>
</body>
</html>