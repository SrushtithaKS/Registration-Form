<?php
// Collect data from the form submission
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$field = $_POST['field'];
$experience = $_POST['experience'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submission Success</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        // Function to print the page
        function printPage() {
            window.print();
        }

        // Function to download the content as a PDF
        function downloadPDF() {
            const { jsPDF } = window.jspdf;

            const doc = new jsPDF();

            doc.text("Application Form Details", 20, 20);
            doc.text("Full Name: " + "<?php echo $fullName; ?>", 20, 30);
            doc.text("Email: " + "<?php echo $email; ?>", 20, 40);
            doc.text("Phone Number: " + "<?php echo $phone; ?>", 20, 50);
            doc.text("Date of Birth: " + "<?php echo $dob; ?>", 20, 60);
            doc.text("Gender: " + "<?php echo $gender; ?>", 20, 70);
            doc.text("Qualification: " + "<?php echo $qualification; ?>", 20, 80);
            doc.text("Field of Study: " + "<?php echo $field; ?>", 20, 90);
            doc.text("Work Experience: " + "<?php echo $experience; ?>", 20, 100);

            doc.save('application-details.pdf');
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .header {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
        }

        .content {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        h1, h2 {
<<<<<<< Updated upstream
            color: white;
=======
            color: #0056b3;
>>>>>>> Stashed changes
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }

        th, td {
            text-align: left;
            padding: 0.75rem;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f9;
            color: #0056b3;
        }

        td {
            background-color: #f9f9f9;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .buttons button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            margin: 0 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .buttons button:hover {
            background-color: #004494;
        }

        .footer {
            text-align: center;
            padding: 1rem;
            background-color: #f4f4f9;
            color: #333;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header class="header">
<<<<<<< Updated upstream
        <h1>Application Submitted Successfully!</h1>
=======
        <h1>Application Submitted Successfully</h1>
        <p>Thank you for submitting your application. Below are the details you provided:</p>
    </header>
    <main class="content">
        <h2>Application Details</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <td><?php echo $fullName; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <th>Qualification</th>
                <td><?php echo $qualification; ?></td>
            </tr>
            <tr>
                <th>Field of Study</th>
                <td><?php echo $field; ?></td>
            </tr>
            <tr>
                <<?php
// Collect data from the form submission
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$field = $_POST['field'];
$experience = $_POST['experience'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submission Success</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        // Function to print the page
        function printPage() {
            window.print();
        }

        // Function to download the content as a PDF
        function downloadPDF() {
            const { jsPDF } = window.jspdf;

            const doc = new jsPDF();

            doc.text("Application Form Details", 20, 20);
            doc.text("Full Name: " + "<?php echo $fullName; ?>", 20, 30);
            doc.text("Email: " + "<?php echo $email; ?>", 20, 40);
            doc.text("Phone Number: " + "<?php echo $phone; ?>", 20, 50);
            doc.text("Date of Birth: " + "<?php echo $dob; ?>", 20, 60);
            doc.text("Gender: " + "<?php echo $gender; ?>", 20, 70);
            doc.text("Qualification: " + "<?php echo $qualification; ?>", 20, 80);
            doc.text("Field of Study: " + "<?php echo $field; ?>", 20, 90);
            doc.text("Work Experience: " + "<?php echo $experience; ?>", 20, 100);

            doc.save('application-details.pdf');
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .header {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
        }

        .content {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        h1, h2 {
            color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }

        th, td {
            text-align: left;
            padding: 0.75rem;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f9;
            color: #0056b3;
        }

        td {
            background-color: #f9f9f9;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .buttons button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            margin: 0 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .buttons button:hover {
            background-color: #004494;
        }

        .footer {
            text-align: center;
            padding: 1rem;
            background-color: #f4f4f9;
            color: #333;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Application Submitted Successfully</h1>
>>>>>>> Stashed changes
        <p>Thank you for submitting your application. Below are the details you provided:</p>
    </header>
    <main class="content">
        <h2>Application Details</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <td><?php echo $fullName; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <th>Qualification</th>
                <td><?php echo $qualification; ?></td>
            </tr>
            <tr>
                <th>Field of Study</th>
                <td><?php echo $field; ?></td>
            </tr>
            <tr>
                <th>Work Experience</th>
                <td><?php echo $experience; ?></td>
            </tr>
        </table>

        <div class="buttons">
            <button onclick="printPage()">Print</button>
            <button onclick="downloadPDF()">Download PDF</button>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Online Application Portal. All rights reserved.</p>
    </footer>
</body>
</html>
<<<<<<< Updated upstream
=======
th>Work Experience</th>
                <td><?php echo $experience; ?></td>
            </tr>
        </table>

        <div class="buttons">
            <button onclick="printPage()">Print</button>
            <button onclick="downloadPDF()">Download PDF</button>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Online Application Portal. All rights reserved.</p>
    </footer>
</body>
</html>
>>>>>>> Stashed changes
