<?php require_once("includes/functions.php"); ?>
<?php
 find_selected_page();
?>
<?php include("includes/header.php");?>
      <table id="structure">
        <tr>
          <td id="navigation">
            &nbsp;
            <?php
            navigation();
            ?>
            <a href="new_page.php">+ Add a new Page</a>
          </td>
          <td id="page">
            <h2>Add Page</h2>
            <form action="create_page.php" method="Post">
                            <p>Page Name</p><input type="text" name="menu_name" value="" id="menu_name"/>
                            <p>Content</p>
                            <textarea name="content" rows="20" cols="60"></textarea>
                            <input type="submit" value="Add page"/>
                        </form>
                        <a href="content.php">Cancel</a>
          </td>
        </tr>
      </table>
      <?php include("includes/footer.php");?>