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
        {category: "british fish low-budget", picture: "sortingPOI/Carrot.jpg", name: "Carrot 1Kg", description: "Fresh carrot from Nuwara Eliya", price: "100.00"},
        {category: "spanish high-budget", picture: "sortingPOI/chickenCubes.jpg", name: "Chicken Cubes", description: "Navodya Chicken Cubes", price: "300.00"},
        {category: "american medium-budget", picture: "sortingPOI/kome.jpg", name: "Munchee Kome", description: "Delightful Cookies", price: "150.00"}
    ];

    function updateListview(sorting){
        var direction = ~sorting.indexOf("-asc") ? 1 : -1;
        data.sort(function(a, b) {
        return direction *(Number(a.price) - Number(b.price));
        });
        var html = "";
        $.each(data, function(index, item) {
            html += '<li class="' + item.category + '"><a href="#">';
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