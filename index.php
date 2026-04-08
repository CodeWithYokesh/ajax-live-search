<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Live Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .container {
            width: 700px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>AJAX-Based Student Live Search</h2>
        <input type="text" id="search" placeholder="Search by name or course..." onkeyup="loadData()">
        <div id="result"></div>
    </div>

    <script>
        function loadData() {
            let search = document.getElementById("search").value;

            let xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch.php?search=" + encodeURIComponent(search), true);

            xhr.onload = function () {
                if (this.status == 200) {
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };

            xhr.send();
        }

        window.onload = loadData;
    </script>
</body>
</html>