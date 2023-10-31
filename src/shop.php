<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link to boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/shop.css">
</head>

<body>
    <!-- Its header -->
    <?php include 'include/header.php'; ?>

    <!-- Start a masthead -->
    <div class="masthead">
        <div class="position-relative">
            <img src="img/img-shop/Rectangle 1.png" alt="Shop" class="img-fluid" style="width: 100%" />
            <div class="position-absolute top-50 start-50 translate-middle">
                <p class="masthead__txt fs-1" style="margin-bottom: 2px"><strong>Shop</strong></p>
                <p class="masthead__txt"><strong>home</strong> > shop</p>
            </div>
        </div>
    </div>
    <!-- End masthead -->

    <!-- Start tool filter -->
    <div class="row tool">
        <ul class="col-sm-3 p-3 no-gutters d-flex align-items-center justify-content-center">
            <li class="tool__list"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                    fill="none">
                    <path
                        d="M22.0238 7.14285H8.92857M6.54762 7.14285H2.97619M22.0238 19.0476H8.92857M6.54762 19.0476H2.97619M16.0714 13.0952H2.97619M22.0238 13.0952H18.4524M7.7381 4.7619C8.05383 4.7619 8.35663 4.88733 8.57989 5.11058C8.80315 5.33384 8.92857 5.63664 8.92857 5.95238V8.33333C8.92857 8.64906 8.80315 8.95187 8.57989 9.17512C8.35663 9.39838 8.05383 9.52381 7.7381 9.52381C7.42236 9.52381 7.11956 9.39838 6.8963 9.17512C6.67304 8.95187 6.54762 8.64906 6.54762 8.33333V5.95238C6.54762 5.63664 6.67304 5.33384 6.8963 5.11058C7.11956 4.88733 7.42236 4.7619 7.7381 4.7619V4.7619ZM7.7381 16.6667C8.05383 16.6667 8.35663 16.7921 8.57989 17.0153C8.80315 17.2386 8.92857 17.5414 8.92857 17.8571V20.2381C8.92857 20.5538 8.80315 20.8566 8.57989 21.0799C8.35663 21.3031 8.05383 21.4286 7.7381 21.4286C7.42236 21.4286 7.11956 21.3031 6.8963 21.0799C6.67304 20.8566 6.54762 20.5538 6.54762 20.2381V17.8571C6.54762 17.5414 6.67304 17.2386 6.8963 17.0153C7.11956 16.7921 7.42236 16.6667 7.7381 16.6667ZM17.2619 10.7143C17.5776 10.7143 17.8804 10.8397 18.1037 11.063C18.327 11.2862 18.4524 11.589 18.4524 11.9048V14.2857C18.4524 14.6014 18.327 14.9042 18.1037 15.1275C17.8804 15.3508 17.5776 15.4762 17.2619 15.4762C16.9462 15.4762 16.6434 15.3508 16.4201 15.1275C16.1969 14.9042 16.0714 14.6014 16.0714 14.2857V11.9048C16.0714 11.589 16.1969 11.2862 16.4201 11.063C16.6434 10.8397 16.9462 10.7143 17.2619 10.7143V10.7143Z"
                        stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            <li class="tool__list">
                <p class="tool__text">Filter</p>
            </li>
            <li class="tool__list"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                    fill="none">
                    <path
                        d="M18.6667 22.1667C17.7384 22.1667 16.8482 21.7979 16.1918 21.1416C15.5354 20.4852 15.1667 19.5949 15.1667 18.6667C15.1667 17.7384 15.5354 16.8482 16.1918 16.1918C16.8482 15.5354 17.7384 15.1667 18.6667 15.1667C19.5949 15.1667 20.4852 15.5354 21.1415 16.1918C21.7979 16.8482 22.1667 17.7384 22.1667 18.6667C22.1667 19.5949 21.7979 20.4852 21.1415 21.1416C20.4852 21.7979 19.5949 22.1667 18.6667 22.1667ZM9.33334 22.1667C8.40508 22.1667 7.51484 21.7979 6.85846 21.1416C6.20208 20.4852 5.83334 19.5949 5.83334 18.6667C5.83334 17.7384 6.20208 16.8482 6.85846 16.1918C7.51484 15.5354 8.40508 15.1667 9.33334 15.1667C10.2616 15.1667 11.1518 15.5354 11.8082 16.1918C12.4646 16.8482 12.8333 17.7384 12.8333 18.6667C12.8333 19.5949 12.4646 20.4852 11.8082 21.1416C11.1518 21.7979 10.2616 22.1667 9.33334 22.1667ZM18.6667 12.8333C17.7384 12.8333 16.8482 12.4646 16.1918 11.8082C15.5354 11.1518 15.1667 10.2616 15.1667 9.33334C15.1667 8.40509 15.5354 7.51485 16.1918 6.85847C16.8482 6.20209 17.7384 5.83334 18.6667 5.83334C19.5949 5.83334 20.4852 6.20209 21.1415 6.85847C21.7979 7.51485 22.1667 8.40509 22.1667 9.33334C22.1667 10.2616 21.7979 11.1518 21.1415 11.8082C20.4852 12.4646 19.5949 12.8333 18.6667 12.8333ZM9.33334 12.8333C8.40508 12.8333 7.51484 12.4646 6.85846 11.8082C6.20208 11.1518 5.83334 10.2616 5.83334 9.33334C5.83334 8.40509 6.20208 7.51485 6.85846 6.85847C7.51484 6.20209 8.40508 5.83334 9.33334 5.83334C10.2616 5.83334 11.1518 6.20209 11.8082 6.85847C12.4646 7.51485 12.8333 8.40509 12.8333 9.33334C12.8333 10.2616 12.4646 11.1518 11.8082 11.8082C11.1518 12.4646 10.2616 12.8333 9.33334 12.8333Z"
                        fill="black" />
                </svg>
            </li>
            <li class="tool__list">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M4.5 6.75H19.5C20.2956 6.75 21.0587 7.06607 21.6213 7.62868C22.1839 8.19129 22.5 8.95435 22.5 9.75V14.25C22.5 15.0456 22.1839 15.8087 21.6213 16.3713C21.0587 16.9339 20.2956 17.25 19.5 17.25H4.5C3.70435 17.25 2.94129 16.9339 2.37868 16.3713C1.81607 15.8087 1.5 15.0456 1.5 14.25V9.75C1.5 8.95435 1.81607 8.19129 2.37868 7.62868C2.94129 7.06607 3.70435 6.75 4.5 6.75ZM4.5 8.25C4.10218 8.25 3.72064 8.40804 3.43934 8.68934C3.15804 8.97064 3 9.35218 3 9.75V14.25C3 14.6478 3.15804 15.0294 3.43934 15.3107C3.72064 15.592 4.10218 15.75 4.5 15.75H19.5C19.8978 15.75 20.2794 15.592 20.5607 15.3107C20.842 15.0294 21 14.6478 21 14.25V9.75C21 9.35218 20.842 8.97064 20.5607 8.68934C20.2794 8.40804 19.8978 8.25 19.5 8.25H4.5ZM1.5 3C1.5 2.80109 1.57902 2.61032 1.71967 2.46967C1.86032 2.32902 2.05109 2.25 2.25 2.25H21.75C21.9489 2.25 22.1397 2.32902 22.2803 2.46967C22.421 2.61032 22.5 2.80109 22.5 3C22.5 3.19891 22.421 3.38968 22.2803 3.53033C22.1397 3.67098 21.9489 3.75 21.75 3.75H2.25C2.05109 3.75 1.86032 3.67098 1.71967 3.53033C1.57902 3.38968 1.5 3.19891 1.5 3ZM1.5 21C1.5 20.8011 1.57902 20.6103 1.71967 20.4697C1.86032 20.329 2.05109 20.25 2.25 20.25H21.75C21.9489 20.25 22.1397 20.329 22.2803 20.4697C22.421 20.6103 22.5 20.8011 22.5 21C22.5 21.1989 22.421 21.3897 22.2803 21.5303C22.1397 21.671 21.9489 21.75 21.75 21.75H2.25C2.05109 21.75 1.86032 21.671 1.71967 21.5303C1.57902 21.3897 1.5 21.1989 1.5 21Z"
                        fill="black" />
                </svg>
            </li>
        </ul>
        <ul class="col-sm-3 p-3 ">
            <li class="tool__list">
                <p class="tool__text">Showing 1–16 of 32 results</p>
            </li>
        </ul>
        <div class="col-sm-3 p-3 tool__container">
            <ul class="tool__child--1">
                <li class="tool__list">
                    <p class="tool__text">Show</p>
                </li>
                <li class="tool__list">
                    <form action="/action_page.php">
                <li class="tool__list">
                    <select class="form-select" style="width: 70px; margin:-10px" id="sel1" name="sellist1">
                        <option>16</option>
                        <option>8</option>
                        <option>4</option>
                        <option>2</option>
                    </select>
                </li>
                </form>
                </li>
            </ul>
        </div>
        <div class="col-sm-3 p-3 mx-0 tool__container">
            <ul class="tool__child--2">
                <li class="tool__list">
                    <p class="tool__text">Sort by</p>
                </li>
                <li class="tool__list">
                    <form action="/action_page.php">
                <li class="tool__list" style="60px">
                    <select class="form-select" style="width: 150px; margin:-10px" id="sel1" name="sellist1">
                        <option>Default</option>
                        <option>Name</option>
                        <option>Low to high</option>
                        <option>High to low</option>
                    </select>
                </li>
                </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- End of tool filter -->

    <!-- star product card -->
    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 1.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Syltherine</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 3.500.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 2.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Leviosa</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 3.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Lolito</h5>
                        <p class="card-text card__text--style">Stylish cafe chaie.</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 7.000.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 14.000.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 4.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Respira</h5>
                        <p class="card-text card__text--style">Outdoor bar table and stool</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 1.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Syltherine</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 3.500.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 2.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Leviosa</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 3.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Lolito</h5>
                        <p class="card-text card__text--style">Stylish cafe chaie.</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 7.000.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 14.000.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 4.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Respira</h5>
                        <p class="card-text card__text--style">Outdoor bar table and stool</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 1.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Syltherine</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 3.500.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 2.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Leviosa</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 3.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Lolito</h5>
                        <p class="card-text card__text--style">Stylish cafe chaie.</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 7.000.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 14.000.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 4.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Respira</h5>
                        <p class="card-text card__text--style">Outdoor bar table and stool</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 1.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Syltherine</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 3.500.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 2.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Leviosa</h5>
                        <p class="card-text card__text--style">Stylish cafe chair</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 2.500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 3.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Lolito</h5>
                        <p class="card-text card__text--style">Stylish cafe chaie.</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 7.000.000</b></p>
                            </div>
                            <div class="col-6 text-right card__pricebase--style ">
                                <p><del>RP 14.000.000<del></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single card -->
            <div class="col">
                <div class="card h-100" style="border-radius:0;">
                    <img src="img/img-shop/image 4.png" class="card-img-top" alt="..." style="border-radius:0;">
                    <div class="card-body">
                        <h5 class="card-title card__title--style">Respira</h5>
                        <p class="card-text card__text--style">Outdoor bar table and stool</p>
                        <div class="row">
                            <div class="col-6 card__pricenew--stlye">
                                <p><b>RP 500.000</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <div class="overlay-content">
                            <button class="overlay-button card__atc">Add to Cart</button>
                            <div class="btn-row">
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M12 10.6667C11.4747 10.6667 11 10.8733 10.644 11.2047L5.94 8.46667C5.97333 8.31334 6 8.16 6 8C6 7.84 5.97333 7.68667 5.94 7.53334L10.64 4.79334C11 5.12667 11.4733 5.33334 12 5.33334C13.1067 5.33334 14 4.44 14 3.33334C14 2.22667 13.1067 1.33334 12 1.33334C10.8933 1.33334 10 2.22667 10 3.33334C10 3.49334 10.0267 3.64667 10.06 3.8L5.36 6.54C5 6.20667 4.52667 6 4 6C2.89333 6 2 6.89334 2 8C2 9.10667 2.89333 10 4 10C4.52667 10 5 9.79333 5.36 9.46L10.0587 12.2053C10.0211 12.3563 10.0014 12.5111 10 12.6667C10 13.0622 10.1173 13.4489 10.3371 13.7778C10.5568 14.1067 10.8692 14.3631 11.2346 14.5144C11.6001 14.6658 12.0022 14.7054 12.3902 14.6282C12.7781 14.5511 13.1345 14.3606 13.4142 14.0809C13.6939 13.8012 13.8844 13.4448 13.9616 13.0568C14.0387 12.6689 13.9991 12.2668 13.8478 11.9013C13.6964 11.5358 13.44 11.2235 13.1111 11.0037C12.7822 10.784 12.3956 10.6667 12 10.6667Z"
                                            fill="white" />
                                    </svg>
                                    Share
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M10.08 7L11.08 8L14.52 4.55L11 1L10 2L11.8 3.8H2.00001V5.2H11.82L10.08 7ZM5.86001 9L4.86001 8L1.42001 11.5L4.91001 15L5.91001 14L4.10001 12.2H14V10.8H4.10001L5.86001 9Z"
                                            fill="white" />
                                    </svg>
                                    Compare
                                </button>
                                <button class="overlay-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M7.99973 14.0361C-5.33333 6.66667 3.99999 -1.33333 7.99973 3.72537C12 -1.33334 21.3333 6.66667 7.99973 14.0361Z"
                                            stroke="white" stroke-width="1.8" />
                                    </svg>
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of product card -->

    <!-- start of pagination -->
    <div class="pagination d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <li class="page-item pagi__link"><a href="#">1</a></li>
                <li class="page-item pagi__link"><a href="#">2</a></li>
                <li class="page-item pagi__link"><a href="#">3</a></li>
                <li class="page-item pagi__link">
                    <a href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>