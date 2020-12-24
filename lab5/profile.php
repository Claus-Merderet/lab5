<?php
require_once  'inc/session_st.php';
require_once 'inc/connect_db.php';
?>
<!DOCTYPE html>
<head>
    <title>Personal account</title>
    <?php require_once 'html/head.html' ?>
</head>
<body>
<?php require_once 'html/header.html' ?>
<main class="content">
    <div class="container">
        <h3> Welcome to your personal account! here you can view the currency balances available at the moment and place an order.</h3>
        <div class="row mx-md-n5">
            <div class="col-4 px-md-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><h5>Place an order for currency </h5></th>
                        <th scope="col"><a class="btn btn-primary btn-lg" href="order.php" role="button">Make order</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><h5>Request for consultation on the order</h5></td>
                        <td><a class="btn btn-primary btn-lg" href="consultation.php" role="button">Application!</a></td>
                    </tr>
                    <tr>
                        <td><h5>Leave your personal account</h5></td>
                        <td>
                            <form  action="" method="post">
                            <input type="submit"  class="btn btn-primary btn-lg"  name="log" value="Logout">
                            <?php require_once 'inc/logout.php'?>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-8 px-md-5" style="width: 40%; margin: 0 auto;">
                <form action="" method="post">
                    <select class="form-control form-control-lg" name="currency_name">
                        <option value="Euro €">Euro €</option>
                        <option value="Dollar $">Dollar $</option>
                        <option value="Pound £">Pound £</option>
                        <input class="btn btn-primary btn-lg" style = "margin: 5px " type="submit" value="Show currency">
                    </select>
                    <?php require_once 'inc/show_currency.php'; ?>
            </div>
        </div>
</main>
<?php require_once 'html/footer.html'; ?>
</body>
</html>