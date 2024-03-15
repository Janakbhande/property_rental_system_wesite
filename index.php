<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSS- Find best rents</title>
    <?php
    include "includes/head_links.php";
    ?>
</head>

<body>

    <?php
    include "includes/header.php"
        ?>

    <div class="container1 app">
        <a target="_self" data-testid="link" role="link" tabindex="0" href="properties.html">
            <div data-testid="action" style="width:100%">
                <h2 title="rent-homes" aria-hidden="false" style="-webkit-line-clamp: 1;">Rent-Homes</h2>
            </div>
            <div class="seeallmsg" onclick="seealllist()">see all</div>
        </a>

        <?php
        include "container1.php";
        ?>
    </div>
    <div class="container1 app">
        <a target="_self" data-testid="link" role="link" tabindex="0" href="properties.html">
            <div data-testid="action" style="width:100%">
                <h2 title="rent-homes" aria-hidden="false" style="-webkit-line-clamp: 1;">Rent-Apartments</h2>
            </div>
            <div class="seeallmsg" onclick="seealllist()">see all</div>
        </a>

        <?php
        include "container1.php";
        ?>

    </div>
    <div class="container1 app">
        <a target="_self" data-testid="link" role="link" tabindex="0" href="properties.html">
            <div data-testid="action" style="width:100%">
                <h2 title="rent-homes" aria-hidden="false" style="-webkit-line-clamp: 1;">Rent-Condos</h2>
            </div>
            <div class="seeallmsg" onclick="seealllist()">see all</div>
        </a>

        <?php
        include "container1.php";
        ?>
    </div>
    <div class="container1 app">
        <a target="_self" data-testid="link" role="link" tabindex="0" href="properties.html">
            <div data-testid="action" style="width:100%">
                <h2 title="rent-homes" aria-hidden="false" style="-webkit-line-clamp: 1;">Rent-Future Projects</h2>
            </div>
            <div class="seeallmsg" onclick="seealllist()">see all</div>
        </a>

        <?php
        include "container1.php";
        ?>

    </div>


    <script>
        function search() {
            var areaSelect = document.getElementById("areaSelect");
            var selectedArea = areaSelect.value;
            alert("Selected area: " + selectedArea);
        }

        function seeall() {
            constant seeAll = document.querySelectorAll(".container1");
            seeAll.style.display = "flex";
            seeAll.style.overflow - x = "visible";
        }
    </script>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>