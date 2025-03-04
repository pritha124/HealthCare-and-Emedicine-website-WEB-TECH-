<?php
require_once('../Model/userModel.php');

$faqs = getFAQs();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FAQs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dbdccebf;
            color: #333;

        table {
            width: 100%;
            background-color: #113a80;
            color: white;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 10px;
            text-align: center;
            font-size: 16px;
        }

        table img {
            border-radius: 50%;
        }

        table button {
            padding: 8px 15px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            background-color: #ffffff;
            color: #113a80;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        table button:hover {
            background-color: #0c2d66;

            color: white;
        }

        h1 {
            text-align: center;
            color: #113a80;
          
            font-size: 32px;
            margin-bottom: 20px;
        }
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .faq-container h3 {
            font-size: 20px;
            color: #113a80;
            margin-bottom: 10px;
        }

        .faq-container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .faq-container hr {
            border: none;
            height: 1px;
            background: #ccc;
            margin: 20px 0;
        }

        .no-faqs {
            text-align: center;
            font-size: 18px;
            color: #777;
                }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <td colspan="9" align="center" style="font-size: 20px; font-weight: bold;">
                Health Care & E-Medicine
            </td>
            <td align="center">
                <img src="" alt="User Icon" width="40" height="40">
            </td>
        </tr>
       <tr>
            <td><button onclick="location.href='home.html'">Home Page</button></td>
            <td><button onclick="location.href='Department.html'">Doctors</button></td>
            <td><button onclick="location.href='medicine.html'">Medicine</button></td>
            <td><button onclick="location.href='faq.php'">FAQ</button></td>
            <td><button onclick="location.href='hospital.html'">Hospitals</button></td>
            <td><button onclick="location.href='tests.html'">Tests</button></td>
            <td><button onclick="location.href='contractUs.html'">Contract us</button></td>
            <td><button onclick="location.href='signUp.html'">Sign Up</button></td>
            <td><button onclick="location.href='logIn.html'">Log in</button></td>
        </tr>
    </table>
    <h1>Frequently Asked Questions</h1>
    <div class="faq-container">
        <?php if (!empty($faqs)): ?>
            <?php foreach ($faqs as $faq): ?>
                <div>
                    <h3>Q: <?= htmlspecialchars($faq['question']) ?></h3>
                    <p>A: <?= htmlspecialchars($faq['answer']) ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-faqs">No FAQs available at the moment.</p>
        <?php endif; ?>
    </div>
</body>

</html>