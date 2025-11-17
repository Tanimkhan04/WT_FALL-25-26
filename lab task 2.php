<!DOCTYPE html>
<html>
<head>
  <title> registration form</title>
  <style>
  body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
h2 {
      text-align: center;
      color: #003366;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
     </style>
</head>
 
<body>
 
<form onsubmit="return handleSubmit()">
 
<h1> registration form</h1>

<label> Full name:</label>
<input type="text" id="full name">

Email:
<input type="email" id="email">

Phone number:
<input type="number" id="phone number">

password:
<input type="password" id="password">

confirm password:
<input type="password" id="confirm password">
</select>
 
<button type="submit">Submit</button>
 
</form>
 
<div id="error"> </div>
<div id="output"> </div>
 
<script>
 
function handleSubmit()
{
 
 
var fullname=document.getElementById("full name").value.trim();
var email=document.getElementById("email").value.trim();
var phone=document.getElementById("phone").value.trim();
var password=document.getElementById("password").value.trim();
 
var errorDiv=document.getElementById("error");
var outputDiv=document.getElementById("output");
 
 
 
if(fullname=== ""|| email === ""||phonenumber=== ""||password === "")
{
  errorDiv.innerHTML= "pelase fill the form";
  return false;
}
if(isNaN(id))
{
  errorDiv.innerHTML ="id must be number";
  return false;
}
 
if(phonenumber>150)
{
  errorDiv.innerHTML ="phone number must be less then 11 digit";
  return false;
}
outputDiv.innerHTML=`
fullName: ${name}<br>
email: ${email} <br>
phone number: ${phone number}<br>
password: ${password}<br>
confirm password:${confirm password}
`;
return false;
}
 
</script>
 
 
 
</body>
 
 
 
</html>
 
 