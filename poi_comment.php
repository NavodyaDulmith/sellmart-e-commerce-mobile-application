<?php
//comment.php
?>

<div>
    <form method="POST" id="comment_form">
        <div>
            <form method="POST" id="comment_form">
                <div>
                    <input type="text" name="comment_name" id="comment_name" placeholder="Enter Name" />
                </div>
                <div>
                    <textarea name="comment_content" id="comment_content" placeholder="Enter Comment" rows="5"></textarea>
                </div>
                <div>
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
            <span id="comment_message"></span>
            <br />
            <div id="display_comment"></div>
        </div>

    </form>
    
</div>
