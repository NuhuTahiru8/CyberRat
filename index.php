<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cyber RAT__./</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <form class="form-inline" action="/save.php" method="post">
        <label for="c" class="mb-2 mr-sm-2">Command:</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="c" placeholder="Enter Command" name="command">

        <button type="submit" class="btn btn-primary mb-2">execute -></button>
    </form>
</div>

</body>
</html>
