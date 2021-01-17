<?php
include 'header.php';
?>
<body>
  <div id="page-one" data-role="content">
    <div role="main" class="ui-content">
      <a id="price-sort" href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-left ui-mini">Sort by Price</a>
      <ul data-role="listview" data-sort="none" data-inset="true" data-filter="true" id="food" name="food"></ul>
    </div>
  </div>
</body>
</html>

<?php include 'footer.php' ?>

<script>
    var data = [
        {category: "food", picture: "sortingPOI/Carrot.jpg", name: "Carrot 1Kg", description: "Fresh carrot from Nuwara Eliya", price: "100.00", link:"product.php"},
        {category: "food", picture: "sortingPOI/chickenCubes.jpg", name: "Chicken Cubes", description: "Chicken Cubes", price: "300.00",link:"product2.php"},
        {category: "food", picture: "sortingPOI/kome.jpg", name: "Munchee Kome", description: "Delightful Cookies", price: "150.00",link:"product3.php"},
        {category: "food", picture: "sortingPOI/jamBottle.jpg", name: "Mixed Fruit Jam", description: "MD Mixed Fruit Jam 225g", price: "180.00",link:"product.php"},
        {category: "food", picture: "sortingPOI/chips.jpg", name: "Potato Chips", description: "Jacker Barbecue Wavy Potato Chips 60g", price: "420.00",link:"product2.php"},
        {category: "cosmetics", picture: "sortingPOI/cream1.jpg", name: "Facial Scrub", description: "Whitening Scrub 200g", price: "800.00",link:"product4.php"},
        {category: "cosmetics", picture: "sortingPOI/cream2.jpg", name: "Facial Cream", description: "Garnier Skin Whitening Cream", price: "1150.00",link:"product4.php"}
    ];

    function updateListview(sorting){
        var direction = ~sorting.indexOf("-asc") ? 1 : -1;
        data.sort(function(a, b) {
        return direction *(Number(a.price) - Number(b.price));
        });
        var html = "";
        $.each(data, function(index, item) {
            html += '<li class="' + item.category + '"><a data-ajax="false" href="'+item.link + '">';
            html += '<img src="images/' + item.picture + '".jpg" class="ui-li-thumb">';
            html += '<h4>' + item.name + '</h4>';
            html += '<p>' + item.description + '</p>';
            html += '<p class="ui-li-aside">Rs.' + item.price + '</p>';
            html += '</a></li>';
        });
        $("#food").data("sort", sorting).empty().html(html).listview("refresh");
    }

    $(document).on("listviewcreate", "#food", function(event, ui) {
        $("#price-sort").on("vclick", function(e) {
            var sorting = $("#food").data("sort") == "price-asc" ? "price-desc" : "price-asc";
            updateListview(sorting);
        });
    });

    $(document).on("listviewcreate", "#page-one", function() {
        updateListview("none");
    });
  </script>