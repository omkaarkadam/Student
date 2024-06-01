<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            color: #333;
        }
        
        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }

        .required-field::after {
            content: "*";
            color: red;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="submit"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<center>
    <h2>Student Information Form</h2>
</center>
<form action="connect.php" method="post" onsubmit="return validateForm()">
    <label for="student_id" class="required-field">Student ID:</label><br>
    <input type="text" id="student_id" name="student_id"><br>

    <label for="first_name" class="required-field">First Name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>

    <label for="last_name" class="required-field">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>

    <label for="class">Class:</label><br>
    <input type="text" id="class" name="class"><br>

    <label for="email" class="required-field">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <h3>Subject Marks:*</h3>

    <label for="english">English:</label><br>
    <input type="text" id="english" name="english"><br>

    <label for="hindi">Hindi:</label><br>
    <input type="text" id="hindi" name="hindi"><br>

    <label for="maths">Maths:</label><br>
    <input type="text" id="maths" name="maths"><br>

    <label for="science">Science:</label><br>
    <input type="text" id="science" name="science"><br>

    <label for="history">History:</label><br>
    <input type="text" id="history" name="history"><br>

    <label for="geography">Geography:</label><br>
    <input type="text" id="geography" name="geography"><br>

    <label for="remarks">Remarks (Minimum 150 characters):</label><br>
    <textarea id="remarks" name="remarks" rows="4"></textarea><br>

    <br>
    <input type="submit" value="Submit">
</form>

<script>
    function validateForm() {
        var studentId = document.getElementById('student_id').value;
        var firstName = document.getElementById('first_name').value;
        var lastName = document.getElementById('last_name').value;
        var email = document.getElementById('email').value;
        var remarks = document.getElementById('remarks').value;

        var errorMessage = "";

        if (!/^\d+$/.test(studentId)) {
            errorMessage += "Student ID should contain only numbers.\n";
            document.getElementById('student_id').classList.add('error');
        } else {
            document.getElementById('student_id').classList.remove('error');
        }

        if (!/^[a-zA-Z]+$/.test(firstName)) {
            errorMessage += "First Name should contain only alphabets.\n";
            document.getElementById('first_name').classList.add('error');
        } else {
            document.getElementById('first_name').classList.remove('error');
        }

        if (!/^[a-zA-Z]+$/.test(lastName)) {
            errorMessage += "Last Name should contain only alphabets.\n";
            document.getElementById('last_name').classList.add('error');
        } else {
            document.getElementById('last_name').classList.remove('error');
        }

        if (email.trim() === "") {
            errorMessage += "Please enter Email.\n";
            document.getElementById('email').classList.add('error');
        } else {
            document.getElementById('email').classList.remove('error');
        }

        if (remarks.trim().length > 150) {
            errorMessage += "Remarks should be at least 150 characters long.\n";
            document.getElementById('remarks').classList.add('error');
        } else {
            document.getElementById('remarks').classList.remove('error');
        }

        // Marks validation
        var english = document.getElementById('english').value;
        var hindi = document.getElementById('hindi').value;
        var maths = document.getElementById('maths').value;
        var science = document.getElementById('science').value;
        var history = document.getElementById('history').value;
        var geography = document.getElementById('geography').value;

        if (!/^\d+$/.test(english)) {
            errorMessage += "English marks should contain only numbers.\n";
            document.getElementById('english').classList.add('error');
        } else {
            document.getElementById('english').classList.remove('error');
        }

        if (!/^\d+$/.test(hindi)) {
            errorMessage += "Hindi marks should contain only numbers.\n";
            document.getElementById('hindi').classList.add('error');
        } else {
            document.getElementById('hindi').classList.remove('error');
        }

        if (!/^\d+$/.test(maths)) {
            errorMessage += "Maths marks should contain only numbers.\n";
            document.getElementById('maths').classList.add('error');
        } else {
            document.getElementById('maths').classList.remove('error');
        }

        if (!/^\d+$/.test(science)) {
            errorMessage += "Science marks should contain only numbers.\n";
            document.getElementById('science').classList.add('error');
        } else {
            document.getElementById('science').classList.remove('error');
        }

        if (!/^\d+$/.test(history)) {
            errorMessage += "History marks should contain only numbers.\n";
            document.getElementById('history').classList.add('error');
        } else {
            document.getElementById('history').classList.remove('error');
        }

        if (!/^\d+$/.test(geography)) {
            errorMessage += "Geography marks should contain only numbers.\n";
            document.getElementById('geography').classList.add('error');
        } else {
            document.getElementById('geography').classList.remove('error');
        }

        if (errorMessage !== "") {
            alert(errorMessage);
            return false;
        }

        return true;
    }
</script>

</body>
</html>
