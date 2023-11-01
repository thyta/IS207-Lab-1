<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link to boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <!-- Its header -->
    <?php include 'include/header.php'; ?>


    <!-- Start a masthead -->
    <div class="masthead">
        <div class="position-relative">
            <img src="img/img-cart/Rectangle 1.png" alt="Shop" class="img-fluid" style="width: 100%" />
            <div class="position-absolute top-50 start-50 translate-middle">
                <img src="img/Meubel House_Logos-05.png" alt="logo" style="display: inline; margin-left:25%;">
                <p class="masthead__txt fs-1" style="margin-bottom: 2px"><strong>Shop</strong></p>
                <p class="masthead__txt"><strong>home</strong> > shop</p>
            </div>
        </div>
    </div>
    <!-- end a masthead -->

    <div class="cart" style="margin: 5%; width: 90%">
        <table cellspacing="0px" style="margin-right: 5%">
            <tr class="cart__title">
                <th></th>
                <th>Product</th>
                <th>Price</th>
                <th style="text-align: center;">Quanity</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
            <tr class="cart__item">
                <td class="cart__item__img"><img class="cart__item__img--active" src="img/img-cart/Asgaard sofa 5.png"
                        alt=""></td>
                <td class="cart__item__product">Asgaard sofa</td>
                <td class="cart__item__price">Rs. 250,000.00</td>
                <td class="cart__item__quanity">
                    <center>
                        <div
                            style="height: 32px; width: 32px; border: 2px solid #9F9F9F; border-radius: 5px; font-size: 16px; display: inline-block; text-align: center; display: flex;justify-content: center;align-items: center;">
                            1</div>
                    </center>
                </td>
                <td class="cart__item__subtotal">Rs. 250,000.00</td>
                <td>
                    <svg  style= "margin-left: 20%" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path
                            d="M23.625 7H20.125V4.8125C20.125 3.84727 19.3402 3.0625 18.375 3.0625H9.625C8.65977 3.0625 7.875 3.84727 7.875 4.8125V7H4.375C3.89102 7 3.5 7.39102 3.5 7.875V8.75C3.5 8.87031 3.59844 8.96875 3.71875 8.96875H5.37031L6.0457 23.2695C6.08945 24.202 6.86055 24.9375 7.79297 24.9375H20.207C21.1422 24.9375 21.9105 24.2047 21.9543 23.2695L22.6297 8.96875H24.2812C24.4016 8.96875 24.5 8.87031 24.5 8.75V7.875C24.5 7.39102 24.109 7 23.625 7ZM18.1562 7H9.84375V5.03125H18.1562V7Z"
                            fill="#B88E2F" />
                    </svg>
                </td>
        </table>
        <div class="cart__total">
            <div class="cart__total__title">Cart Totals</div>
            <table>
                <tr>
                    <td style="height: 50px; width: 80px; text-align: left; font-weight: bold;">Subtotal</td>
                    <td style="height: 50px; width: 125px; text-align: right; color: #9F9F9F;"
                        class="cart__total__subtotal">Rs 250,000.00</td>
                </tr>
                <tr>
                    <td style="height: 50px; width: 80px; text-align: left; font-weight: bold;">Total</td>
                    <td style="height: 50px; width: 125px; text-align: right; font-size: 20px; color: #B88E2F;"
                        class="cart__total__total">Rs 250,000.00</td>
                </tr>
            </table>
            <div class="cart__total__checkout">Check Out</div>
        </div>
    </div>

    <!-- include banner -->
    <?php include 'include/banner.php'; ?>
    <!-- include footer -->
    <?php include 'include/footer.php'; ?>
</body>

</html>