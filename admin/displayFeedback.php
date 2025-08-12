<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback for Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Feedback for Animal</h2>

        <form action="getFeedback.php" method="GET">
            <div class="mb-3">
                <label for="animalID" class="form-label">Animal ID:</label>
                <input type="number" id="animalID" name="animalID" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Get Feedback</button>
        </form>

        <div id="feedbackResults" class="mt-4">
            <?php
            if (isset($_GET['animalID'])) {
                include 'getFeedback.php';
            }
            ?>
        </div>
    </div>
</body>
</html>
