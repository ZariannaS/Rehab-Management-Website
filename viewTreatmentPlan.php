<!DOCTYPE html>
<html>

<head>
    <title>View Treatment Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Treatment Plans</h1>
    <table>
        <tr>
            <th>Treatment ID</th>
            <th>Patient Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Notes</th>
        </tr>
        <?php
        require_once('mysqli_connect.php');

        $query = "SELECT t.id AS treatment_id, p.name AS patient_name, t.start_date, t.end_date, t.notes FROM Treatment t JOIN Patient p ON t.patient_id = p.id";

        $response = @mysqli_query($dbc, $query);

        if ($response) {
            while ($row = mysqli_fetch_array($response)) {
                echo '<tr>';
                echo '<td>' . $row['treatment_id'] . '</td>';
                echo '<td>' . $row['patient_name'] . '</td>';
                echo '<td>' . $row['start_date'] . '</td>';
                echo '<td>' . $row['end_date'] . '</td>';
                echo '<td>' . $row['notes'] . '</td>';
                echo '</tr>';
            }
        } else {
            echo "Error: " . mysqli_error($dbc);
        }

        mysqli_close($dbc);
        ?>
    </table>
</body>

</html>
