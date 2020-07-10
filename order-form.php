<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <?php include 'navigation.html';?>
          </div>
        <h1>Hamburger rendelés</h1>
        <form id="order" action="">
            <div class="form">
                <div class="form-group">
                    <label>Feltét</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Mennyiség</label>
                    <input name="amount" type="number" oninput="validateForm()">
                    <p>A rendlés összege <strong>0</strong> Ft.</p>
                    <div id="error"></div>

                    <button class="btn btn-success" type="button" onclick="validateForm()">
                        Megrendelés
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="/js/amount.js"></script>
</body>

</html>