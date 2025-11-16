<!DOCTYPE html>
<html>
<head>
    <title>Event Registration Demo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .page {
            width: 400px;
        }

        h2 {
            background: #eee;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .container {
            border: 1px solid black;
            padding: 15px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 95%;
            padding: 7px;
            margin-top: 5px;
            margin-bottom: 12px;
            border: 1px solid #999;
        }

        button {
            padding: 7px 15px;
            background: #2b6cb0;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #1e4f82;
        }

        #resultBox {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid green;
            color: green;
        }

        .activity-item {
            border: 1px solid gray;
            padding: 8px;
            margin-top: 5px;
            display: flex;
            justify-content: space-between;
            background: #f9f9f9;
        }

        .remove-btn {
            background: red;
            color: white;
            border: none;
            padding: 3px 7px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="page">

    <h2>Participant Registration</h2>

    <div class="container">
        <label>Full Name</label>
        <input type="text" id="name">

        <label>Email</label>
        <input type="text" id="email">

        <label>Phone Number</label>
        <input type="text" id="phone">

        <label>Password</label>
        <input type="password" id="pass">

        <label>Confirm Password</label>
        <input type="password" id="cpass">

        <button onclick="register()">Register</button>
    </div>

    <div id="resultBox"></div>

    <h2>Activity Selection</h2>

    <div class="container">
        <label>Activity Name</label>
        <input type="text" id="activityInput">

        <button onclick="addActivity()">Add Activity</button>

        <h4>Activity List:</h4>
        <div id="activityList"></div>
    </div>

</div>

<script>
    function register() {
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let pass = document.getElementById("pass").value;
        let cpass = document.getElementById("cpass").value;

        if(name === "" || email === "" || phone === "" || pass === "" || cpass === ""){
            alert("All fields are required!");
            return;
        }

        if(email.indexOf("@") === -1){
            alert("Email must contain '@'");
            return;
        }

        if(isNaN(phone)){
            alert("Phone must contain only numbers");
            return;
        }

        if(pass !== cpass){
            alert("Passwords do not match");
            return;
        }

        document.getElementById("resultBox").innerHTML =
            "<b>Registration Successful!</b><br><br>" +
            "Name: " + name + "<br>" +
            "Email: " + email + "<br>" +
            "Phone: " + phone;
    }

    function addActivity() {
        let activity = document.getElementById("activityInput").value;

        if(activity === ""){
            alert("Please enter an activity name");
            return;
        }

        let box = document.createElement("div");
        box.className = "activity-item";

        let text = document.createElement("span");
        text.textContent = activity;

        let btn = document.createElement("button");
        btn.textContent = "Remove";
        btn.className = "remove-btn";

        btn.onclick = function() {
            box.remove();
        };

        box.appendChild(text);
        box.appendChild(btn);

        document.getElementById("activityList").appendChild(box);

        document.getElementById("activityInput").value = "";
    }
</script>

</body>
</html>
