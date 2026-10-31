<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Item Details | Eureca Closet</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>

        .item-details-page {
            padding: 70px 7% 100px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 35px;
            color: #b76e79;
            font-size: 14px;
            font-weight: 600;
        }

        .item-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: start;
        }

        .large-item-image {
            height: 600px;
            background-color: #f3e5e8;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 150px;
        }

        .details-category {
            color: #b76e79;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .details-content h1 {
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 15px;
        }

        .details-location {
            color: #777;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .details-price {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .details-price span {
            color: #777;
            font-size: 14px;
            font-weight: normal;
        }

        .details-description {
            color: #666;
            font-size: 15px;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .rental-box {
            background-color: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 18px;
            padding: 25px;
            margin-top: 25px;
        }

        .rental-box h3 {
            margin-bottom: 20px;
        }

        .date-fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .date-field label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .date-field input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
        }

        .request-button {
            width: 100%;
            border: none;
            cursor: pointer;
        }

        .owner-info {
            border-top: 1px solid #eeeeee;
            margin-top: 30px;
            padding-top: 25px;
        }

        .owner-info h3 {
            margin-bottom: 8px;
        }

        .owner-info p {
            color: #777;
            font-size: 14px;
        }

        @media (max-width: 800px) {

            .item-details {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .large-item-image {
                height: 400px;
            }

            .details-content h1 {
                font-size: 34px;
            }

        }

        @media (max-width: 500px) {

            .item-details-page {
                padding-left: 20px;
                padding-right: 20px;
            }

            .large-item-image {
                height: 350px;
                font-size: 100px;
            }

            .date-fields {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVIGATION
    ========================== -->

    <header class="navbar">

        <a href="../index.php" class="logo">
            Eureca <span>Closet</span>
        </a>

        <nav>

            <ul class="nav-links">

                <li>
                    <a href="../index.php">
                        Home
                    </a>
                </li>

                <li>
                    <a href="browse.php">
                        Browse
                    </a>
                </li>

                <li>
                    <a href="../index.php#how-it-works">
                        How It Works
                    </a>
                </li>

                <li>
                    <a href="#">
                        List an Item
                    </a>
                </li>

                <li>
                    <a href="#">
                        Login
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-button">
                        Get Started
                    </a>
                </li>

            </ul>

        </nav>

    </header>


    <!-- =========================
         ITEM DETAILS
    ========================== -->

    <main>

        <section class="item-details-page">

            <a href="browse.php" class="back-link">
                ← Back to Browse
            </a>


            <div class="item-details">


                <!-- ITEM IMAGE -->

                <div class="large-item-image">

                    👗

                </div>


                <!-- ITEM INFORMATION -->

                <div class="details-content">

                    <p class="details-category">
                        Dresses
                    </p>

                    <h1>
                        Elegant Evening Dress
                    </h1>

                    <p class="details-location">
                        📍 Nelspruit
                    </p>

                    <p class="details-price">
                        R250
                        <span>/ day</span>
                    </p>


                    <p class="details-description">

                        A beautiful elegant dress perfect for
                        weddings, birthday celebrations, dinners,
                        graduations and other special occasions.

                        <br><br>

                        This item is available for short-term
                        rental through Eureca Closet.

                    </p>


                    <!-- RENTAL BOX -->

                    <div class="rental-box">

                        <h3>
                            Choose Your Rental Dates
                        </h3>


                        <div class="date-fields">

                            <div class="date-field">

                                <label for="startDate">
                                    Start Date
                                </label>

                                <input
                                    type="date"
                                    id="startDate"
                                >

                            </div>


                            <div class="date-field">

                                <label for="endDate">
                                    Return Date
                                </label>

                                <input
                                    type="date"
                                    id="endDate"
                                >

                            </div>

                        </div>


                        <button
                            class="btn-primary request-button"
                            onclick="requestRental()"
                        >

                            Request to Rent

                        </button>

                    </div>


                    <!-- OWNER -->

                    <div class="owner-info">

                        <h3>
                            Listed by
                        </h3>

                        <p>
                            Eureca Closet Member
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer class="footer">

        <div class="footer-content">

            <div>

                <a href="../index.php" class="footer-logo">
                    Eureca <span>Closet</span>
                </a>

                <p>
                    Rent. Slay. Return. Repeat.
                </p>

            </div>


            <div>

                <h3>
                    Eureca Closet
                </h3>

                <p>
                    A marketplace for renting beautiful
                    fashion and occasion items.
                </p>

            </div>


            <div>

                <h3>
                    Quick Links
                </h3>

                <p>
                    Browse Items
                </p>

                <p>
                    List an Item
                </p>

                <p>
                    How It Works
                </p>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                &copy; <?php echo date("Y"); ?> Eureca Closet.
                All rights reserved.
            </p>

        </div>

    </footer>


    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        function requestRental() {

            const startDate =
                document.getElementById("startDate").value;

            const endDate =
                document.getElementById("endDate").value;


            if (startDate === "" || endDate === "") {

                alert(
                    "Please select your rental dates first."
                );

                return;
            }


            if (endDate < startDate) {

                alert(
                    "Return date cannot be before the start date."
                );

                return;
            }


            alert(
                "Your rental request has been started! " +
                "We will connect this to the booking system next."
            );

        }

    </script>


</body>

</html>