<?php
    $formData = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $formData = [
            'nom' => $_POST['nom'] ?? '',
            'name' => $_POST['name'] ?? '',
            'address' => $_POST['address'] ?? '',
            'city' => $_POST['city'] ?? '',
            'postal' => $_POST['postal'] ?? ''
        ];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-container {
            border: 2px solid #000;
            padding: 20px;
            width: 400px;
            margin-bottom: 30px;
        }
        .form-container h2 {
            text-align: center;
            margin-top: 0;
            font-size: 16px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: none;
            border-bottom: 1px solid #000;
            box-sizing: border-box;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            width: 100%;
            margin-top: 10px;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .data-table {
            border-collapse: collapse;
            width: 400px;
            border: 2px solid #000;
            margin-top: 20px;
        }
        .data-table th {
            background-color: #f2f2f2;
            border: 1px solid #000;
            padding: 12px;
            text-align: left;
            font-weight: bold;
        }
        .data-table td {
            border: 1px solid #000;
            padding: 12px;
        }
        .data-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Client Address</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="nom">Name :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="name">First Name :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City :</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="postal">Postal Code :</label>
                <input type="text" id="postal" name="postal" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <?php if ($formData !== null): ?>
        <div class="table-container">
            <h2>Client Data</h2>
            <table class="data-table">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo htmlspecialchars($formData['nom']); ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo htmlspecialchars($formData['name']); ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo htmlspecialchars($formData['address']); ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php echo htmlspecialchars($formData['city']); ?></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><?php echo htmlspecialchars($formData['postal']); ?></td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
</body>
</html>