<?php
include 'header.php';
    $conn = new mysqli('localhost', 'root', '', 'ratingSystem');

    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT id FROM stars");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = $total / $numR;
?>
<html>

<head>
<link rel="stylesheet" href="css/StarRating.css">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
 crossorigin="anonymous">
 <style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>


<!-- search -->
<div style="border: 5px outset #1128a4; background-color: #1128a4; ">
    <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search..." data-inset="true"></ul>
</div>
<!-- /search -->

<!-- main content -->
<div data-role="main" class="ui-content">
    <h2 style="text-align:center;">Fashion Week Events</h2>
</div>
        <div class="ui-block-a" id="event-collapse-time-pic" style="width:20%;">
            <img src="images/jam3.png" class="thumbnail" width="100%">  
        </div>  
        <div class="ui-block-b" style="width:80%; padding:5%;">
                    <p id="para1">Opening Ceremony is the brainchild of Humberto Leon and Carol Lim, two longtime
                        friends from California who have succeeded in packaging downtown Westminster cool and exporting
                        it around the world. What began on a little-traveled street on the edges of Chinatown and Soho
                        as a niche retail concept loosely based on the Olympics—homegrown brands are “pitted” against an
                        ever-changing, highly curated roster of designers from a specific geographic region—has become a
                        many tentacled entity with a cult following.</p>
                        <h1 style="font-family: Tahoma, sans-serif;font-size: 35px; color:#1128A4;"><b>Rs.180</b></h1>
                        <div style="background: white;">
                    <i class="fa fa-star fa-2x" data-index="0"></i>
                    <i class="fa fa-star fa-2x" data-index="1"></i>
                    <i class="fa fa-star fa-2x" data-index="2"></i>
                    <i class="fa fa-star fa-2x" data-index="3"></i>
                    <i class="fa fa-star fa-2x" data-index="4"></i>
                     <br>
    </div>  
                        <input type="image" src="images/buynow.png" name="submit" width="150" height="100" alt="submit"/> 
                        

    </div>
</div>    


  <!-- /main content -->

  <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "index.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', '#FFD700','border-color, coral');
        }

        function resetStarColors() {
            $('.fa-star').css('color', '#B2BEB5');
        }
    </script> 
</body>
</html>