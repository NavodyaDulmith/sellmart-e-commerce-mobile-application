<?php

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 transition: 0.3s;
 border-radius: 5px;"class="panel panel-default">
 <br>
 <div style="margin-left: 10; font-size: small;" class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
 <div style="margin-left: 10;" class="panel-body">'.$row["comment"].'</div>
 <div class="panel-footer" align="right"><button type="button" style="border: none;
 font-size: x-small;margin-right: 10; margin-bottom: 10;" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
</div>
 ';

 /* <div style="margin-top: 30px;
 border: 1px solid #ccc;
 background: #f0f0f0;" class="panel panel-default">
  <div style="border: 1px;" class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <h2 style="border: 1px;" class="panel-body">'.$row["comment"].'</h2>
  <button type="button" class="ui-btn ui-btn-inline" id="'.$row["comment_id"].'">Reply</button>
 </div> */
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px;     box-shadow: 0 4px 8px 0 rgb(0 8 255 / 20%);   ;
   transition: 0.3s;
   border-radius: 5px;"class="panel panel-default ">
   <br>
    <div style ="font-size: small; margin-left: 10;" class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div Style="margin-left: 10;" class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"><button type="button" style="border: none;
    font-size: x-small; margin-right: 10; margin-bottom: 10;" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}
