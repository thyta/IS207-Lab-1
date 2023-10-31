<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="css/checkout.css">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
  <header>
    <!-- include header -->
    <?php include 'include/header.php'; ?>
  </header>
  <main>
    <div class="container mt-5 main__contain">
        <div class="row">
            <div class="col-sm-5 ">  
                <p class="h2 mb-2" style="font-weight: 700;">Billing details</p>
                <div class="full-name d-flex justify-content-between mt-5 mb-2">
                    <div class="first-name">
                        <p class="bill-name">First Name</p>
                        <input type="text" class="form-control">
                    </div>
                    <div class="last-name">
                        <p class="bill-name">Last Name</p>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form mt-2 mb-2">
                    <p class="bill-name">Company Name (Optional)</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Country / Region</p>
                    <select id="Region" class="form-control " name="Region">
                        <option value="Selection" class=""> Select option</option>
                        <option value="Viet">Viet Nam</option>
                        <option value="America">America</option>
                        <option value="France">France</option>
                        <option value="China">China</option>
                    </select>
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Street address</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Town / City</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Province</p>
                    <select id="Province" class="form-control" name="Province">
                        <option value="Selection" class=""> Select option</option>
                        <option value="An_Giang">An Giang</option>
                        <option value="HCM">Ho Chi Minh</option>
                        <option value="HN">Ha Noi</option>
                        <option value="CT">Can Tho</option>
                    </select>
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">ZIP code</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Phone</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-2 mb-3">
                    <p class="bill-name">Email address</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form mt-5 mb-3">
                    <input type="text" class="form-control">
                </div>
            </div>
        <div class="col-sm-7 mt-5 ">
            <div class="Cost">
                <div class="d-flex justify-content-between product ">
                    <p class="h3" style="font-weight: 600; font-size:20px;">Product</p>
                    <p class="h3" style="font-weight: 600; font-size:20px;">Subtotal</p>
                </div>
                <div class="d-flex justify-content-between product ">
                    <div class=" d-flex">
                        <p class=" text-black-50 " style="margin-right:5px;">Asgaard sofa</p>
                        <p class=" " style="margin-right:5px;">X</p>
                        <p class=" " style="margin-right:5px;">1</p>
                    </div>
                    <p class="">Rs. 250,000.00</p>
                </div>
                <div class="d-flex justify-content-between product ">
                    <p class="" style="font-weight: 500;">Subtotal</p>
                    <p class="">Rs. 250,000.00</p>
                </div>
                <div class="d-flex justify-content-between product ">
                    <p class="" style="font-weight: 500;">Total</p>
                    <p class="" style="font-size: 20px; font-weight:700; color: #B88E2F;">Rs. 250,000.00</p>
                </div>
            </div>
            <div class="cash mt-5">
                <div class="d-flex align-items-center">
                    <input style="margin-right: 8px;" type="radio" id="myCheckbox" name="radio" value="selected" checked>
                    <p class="" style="font-weight: 500; margin:0;">Direct Bank Transfer</p>
                </div>
                <p class="cash-disc text-black-50 mt-3 mb-3">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                <div class="d-flex align-items-center">
                    <input style="margin-right: 8px;" type="radio" id="myCheckbox" name="radio" value="selected" checked>
                    <p class="" style="font-weight: 500; margin:0;">Direct Bank Transfer</p>
                </div>
                <div class="d-flex align-items-center">
                    <input style="margin-right: 8px;" type="radio" id="myCheckbox" name="radio" value="selected" checked>
                    <p class="" style="font-weight: 500; margin:0;">Cash On Delivery</p>
                </div>
                <div class="privacy">
                    <p class="cash-disc mt-3 mb-3 " style="display: contents;">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our</p>
                    <a class="privacy-policy text-black" style="font-weight: 700; text-decoration:none; cursor:pointer;">privacy policy</a>
                </div>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-center mt-3">
                <p class="click-place-order">Place order</p>
            </div>
            
        </div>
     </div>
    </div>
    <?php include 'include/banner.php'; ?>
  </main>
  <footer>
    <!-- place footer here -->
    <?php include 'include/footer.php'; ?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>