```php
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Browse Items | Eureca Closet</title>

    <link rel="stylesheet" href="../assets/css/style.css">

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
     BROWSE HEADER
========================== -->

<main>

<section class="section">

    <div class="section-heading">

        <p class="section-label">
            EURECA CLOSET
        </p>

        <h1>
            Browse Items
        </h1>

        <p>
            Find something beautiful for your next special moment.
        </p>

    </div>


    <!-- =========================
         SEARCH & FILTERS
    ========================== -->

    <div class="browse-filters">

        <input
            type="text"
            id="searchInput"
            placeholder="Search for an item..."
        >


        <select id="categoryFilter">

            <option value="all">
                All Categories
            </option>

            <option value="traditional">
                Traditional Wear
            </option>

            <option value="dresses">
                Dresses
            </option>

            <option value="handbags">
                Handbags
            </option>

            <option value="heels">
                Heels
            </option>

            <option value="flowers">
                Artificial Flowers
            </option>

        </select>


        <select id="priceFilter">

            <option value="all">
                All Prices
            </option>

            <option value="under100">
                Under R100
            </option>

            <option value="100to300">
                R100 - R300
            </option>

            <option value="over300">
                Over R300
            </option>

        </select>

    </div>


    <!-- =========================
         ITEMS
    ========================== -->

    <div class="category-grid" id="itemsContainer">


        <!-- ITEM 1 -->

        <div
            class="category-card item-card"
            data-name="Xibelana Traditional Outfit"
            data-category="traditional"
            data-price="350"
        >

            <div class="category-icon">
                🥻
            </div>

            <h3>
                Xibelana Traditional Outfit
            </h3>

            <p>
                Traditional outfit perfect for cultural
                celebrations and special occasions.
            </p>

            <strong>
                R350 / day
            </strong>

            <p>
                📍 Acornhoek
            </p>

            <a
                href="item.php?id=1"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 2 -->

        <div
            class="category-card item-card"
            data-name="Elegant Evening Dress"
            data-category="dresses"
            data-price="250"
        >

            <div class="category-icon">
                👗
            </div>

            <h3>
                Elegant Evening Dress
            </h3>

            <p>
                A beautiful dress for dinners,
                weddings and special occasions.
            </p>

            <strong>
                R250 / day
            </strong>

            <p>
                📍 Nelspruit
            </p>

            <a
                href="item.php?id=2"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 3 -->

        <div
            class="category-card item-card"
            data-name="Classic Black Handbag"
            data-category="handbags"
            data-price="150"
        >

            <div class="category-icon">
                👜
            </div>

            <h3>
                Classic Black Handbag
            </h3>

            <p>
                A stylish handbag to complete
                your outfit.
            </p>

            <strong>
                R150 / day
            </strong>

            <p>
                📍 Mbombela
            </p>

            <a
                href="item.php?id=3"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 4 -->

        <div
            class="category-card item-card"
            data-name="Elegant Nude Heels"
            data-category="heels"
            data-price="120"
        >

            <div class="category-icon">
                👠
            </div>

            <h3>
                Elegant Nude Heels
            </h3>

            <p>
                Elegant heels suitable for
                weddings and special events.
            </p>

            <strong>
                R120 / day
            </strong>

            <p>
                📍 White River
            </p>

            <a
                href="item.php?id=4"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 5 -->

        <div
            class="category-card item-card"
            data-name="Artificial Flower Bouquet"
            data-category="flowers"
            data-price="100"
        >

            <div class="category-icon">
                🌸
            </div>

            <h3>
                Artificial Flower Bouquet
            </h3>

            <p>
                Beautiful artificial flowers for
                photoshoots and special occasions.
            </p>

            <strong>
                R100 / day
            </strong>

            <p>
                📍 Acornhoek
            </p>

            <a
                href="item.php?id=5"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 6 -->

        <div
            class="category-card item-card"
            data-name="Wedding Flower Arrangement"
            data-category="flowers"
            data-price="180"
        >

            <div class="category-icon">
                💐
            </div>

            <h3>
                Wedding Flower Arrangement
            </h3>

            <p>
                Artificial flower arrangement
                perfect for weddings and events.
            </p>

            <strong>
                R180 / day
            </strong>

            <p>
                📍 Nelspruit
            </p>

            <a
                href="item.php?id=6"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 7 -->

        <div
            class="category-card item-card"
            data-name="Decorative Flower Set"
            data-category="flowers"
            data-price="250"
        >

            <div class="category-icon">
                🌺
            </div>

            <h3>
                Decorative Flower Set
            </h3>

            <p>
                A beautiful flower set for
                decorations and photoshoots.
            </p>

            <strong>
                R250 / day
            </strong>

            <p>
                📍 Bushbuckridge
            </p>

            <a
                href="item.php?id=7"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 8 -->

        <div
            class="category-card item-card"
            data-name="Small Floral Decoration"
            data-category="flowers"
            data-price="80"
        >

            <div class="category-icon">
                🌷
            </div>

            <h3>
                Small Floral Decoration
            </h3>

            <p>
                Small artificial flower decoration
                for intimate events and photos.
            </p>

            <strong>
                R80 / day
            </strong>

            <p>
                📍 Mbombela
            </p>

            <a
                href="item.php?id=8"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 9 -->

        <div
            class="category-card item-card"
            data-name="Traditional Celebration Set"
            data-category="traditional"
            data-price="450"
        >

            <div class="category-icon">
                🥻
            </div>

            <h3>
                Traditional Celebration Set
            </h3>

            <p>
                Traditional clothing suitable for
                celebrations and cultural events.
            </p>

            <strong>
                R450 / day
            </strong>

            <p>
                📍 Bushbuckridge
            </p>

            <a
                href="item.php?id=9"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 10 -->

        <div
            class="category-card item-card"
            data-name="Satin Occasion Dress"
            data-category="dresses"
            data-price="300"
        >

            <div class="category-icon">
                👗
            </div>

            <h3>
                Satin Occasion Dress
            </h3>

            <p>
                Elegant satin dress for parties,
                dinners and celebrations.
            </p>

            <strong>
                R300 / day
            </strong>

            <p>
                📍 Nelspruit
            </p>

            <a
                href="item.php?id=10"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 11 -->

        <div
            class="category-card item-card"
            data-name="Mini Evening Bag"
            data-category="handbags"
            data-price="80"
        >

            <div class="category-icon">
                👛
            </div>

            <h3>
                Mini Evening Bag
            </h3>

            <p>
                A small stylish bag for
                evening occasions.
            </p>

            <strong>
                R80 / day
            </strong>

            <p>
                📍 Acornhoek
            </p>

            <a
                href="item.php?id=11"
                class="btn-primary"
            >
                View Item
            </a>

        </div>


        <!-- ITEM 12 -->

        <div
            class="category-card item-card"
            data-name="Black Party Heels"
            data-category="heels"
            data-price="200"
        >

            <div class="category-icon">
                👠
            </div>

            <h3>
                Black Party Heels
            </h3>

            <p>
                Stylish black heels for
                parties and special occasions.
            </p>

            <strong>
                R200 / day
            </strong>

            <p>
                📍 Mbombela
            </p>

            <a
                href="item.php?id=12"
                class="btn-primary"
            >
                View Item
            </a>

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
                fashion and occasion wear.
            </p>

        </div>


        <div>

            <h3>
                Quick Links
            </h3>

            <p>
                <a href="browse.php">
                    Browse Items
                </a>
            </p>

            <p>
                List an Item
            </p>

            <p>
                <a href="../index.php#how-it-works">
                    How It Works
                </a>
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

const searchInput = document.getElementById("searchInput");

const categoryFilter = document.getElementById("categoryFilter");

const priceFilter = document.getElementById("priceFilter");

const items = document.querySelectorAll(".item-card");


function filterItems() {

    const searchText =
        searchInput.value.toLowerCase();

    const selectedCategory =
        categoryFilter.value;

    const selectedPrice =
        priceFilter.value;


    items.forEach(function(item) {

        const name =
            item.dataset.name.toLowerCase();

        const category =
            item.dataset.category;

        const price =
            Number(item.dataset.price);


        let matchesSearch =
            name.includes(searchText);


        let matchesCategory =
            selectedCategory === "all" ||
            category === selectedCategory;


        let matchesPrice = true;


        if (selectedPrice === "under100") {

            matchesPrice = price < 100;

        }


        if (selectedPrice === "100to300") {

            matchesPrice =
                price >= 100 &&
                price <= 300;

        }


        if (selectedPrice === "over300") {

            matchesPrice = price > 300;

        }


        if (
            matchesSearch &&
            matchesCategory &&
            matchesPrice
        ) {

            item.style.display = "";

        } else {

            item.style.display = "none";

        }

    });

}


searchInput.addEventListener(
    "input",
    filterItems
);


categoryFilter.addEventListener(
    "change",
    filterItems
);


priceFilter.addEventListener(
    "change",
    filterItems
);


// Read category from homepage URL

const urlParams =
    new URLSearchParams(window.location.search);

const categoryFromURL =
    urlParams.get("category");


if (categoryFromURL) {

    categoryFilter.value =
        categoryFromURL;

    filterItems();

}

</script>


</body>
</html>
```
