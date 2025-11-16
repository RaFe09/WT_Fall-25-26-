<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinic Patient Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 500px;
      margin: 50px auto;
      background-color: white;
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      font-weight: bold;
      margin-top: 15px;
      color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="tel"],
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #2f2fa2;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 4px;
      margin-top: 25px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #24247c;
    }

    .section {
      margin-top: 30px;
    }

  </style>
</head>
<body>

  <div class="container">
    <h1>Clinic Patient Registration</h1>

    <form>
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" placeholder="Enter your age">

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" placeholder="e.g., 017XXXXXXXX">

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" placeholder="example@email.com">

      <label for="provider">Insurance Provider:</label>
      <select id="provider" name="provider">
        <option value="">Select Provider</option>
        <option value="GreenLife">Green Life Insurance</option>
        <option value="MetLife">MetLife</option>
        <option value="Guardian">Guardian Life Insurance</option>
        <option value="Other">Other</option>
      </select>

      <label for="policy">Insurance Policy Number:</label>
      <input type="text" id="policy" name="policy" placeholder="e.g., INS-123456">

      <div class="section">
        <h2>Additional Information</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Choose a username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password">

        <label for="confirm">Confirm Password:</label>
        <input type="password" id="confirm" name="confirm" placeholder="Re-enter password">
      </div>

      <input type="submit" value="Register">
    </form>
  </div>

</body>
</html>
