<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>GENERATE CSV</h1>
        <form method="GET" action="generate.php">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="name" name="email" id="form2Example1" class="form-control" required />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <select name="domain" id="domain" class="form-control">
                    <option value="monotonmail.com">monotonmail.com</option>
                    <option value="pdimail.site">pdimail.site</option>
                </select>
                <label class="form-label" for="form2Example2">Domain</label>
            </div>
            <!-- Total Input -->
            <div class="form-outline mb-4">
                <input type="number" name="total" class="form-control" required placeholder="1000" />
                <label class="form-label" for="total">Total</label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">generate</button>
        </form>
    </div>
</body>

</html>