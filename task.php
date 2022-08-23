<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <h1 class="mb-5">Multiplication table generator</h1>
        <div class="card mt-3">
            <div class="text-center">
                <img src="numbers.jpg" class="card-img-top w-50" alt="Numbers">
            </div>
            <h4 class="card-header text-center">Generate your own multiplication table worksheet!</h4>
            <div class="card-body">
                <form action="out.php" method="GET">
                    <div class="row align-items-center">

                        <div class="col-md-6 ">
                            Number set
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="number" value="5" checked>
                                <label class="form-check-label">
                                    1 to 5
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="number" value="10">
                                <label class="form-check-label">
                                    1 to 10
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="number" value="15">
                                <label class="form-check-label">
                                    1 to 15
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            Hidden fields
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="percent" value="10" checked>
                                <label class="form-check-label">
                                    10%
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="percent" value="30">
                                <label class="form-check-label">
                                    30%
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="percent" value="50">
                                <label class="form-check-label">
                                    50%
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark btn-md">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>