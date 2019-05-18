<?php 
session_start();
if($_SESSION['manager'] != 1)
{
    header("Location: index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- Admin -</title>
    <link rel="stylesheet" type="text/css" href="css/manager.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
</head>
<body>
    <div class="grid">
        <aside class="side">
            <h2>Manager</h2>
            <a id="homeAnchor" onclick="viewMain();">Home</a>
            <a id="postAnchor" onclick="viewPost();">Post a Picnic</a>
            <a id="editAnchor" onclick="viewEdit();">Edit a Picnic</a>
            <a href="index.php" >Back</a>
        </aside>
        <section class="content">
            <div id="post" class="wrapper">
                <h2>Add a picnic</h2>
                <form action="functions/function_post_picnic.php" method="POST">
                    <table>
                        <tr>
                            <td colspan="1"><label for="">Title:</label>
                            <input type="text" placeholder="eg, Central Park" name="title"></td>
                            <td>
                                <label for="">Picture:</label>
                                <input type="file" name="src" accept="image/*"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <label for="">Place</label>
                                <input type="text" placeholder="eg, New York,USA" name="place">
                            </td>
                            <td colspan="1">
                                <label for="">Date</label>
                                <input type="date" name="date">
                            </td>
                        </tr>
                        <tr style="display: flex;flex-flow:row wrap;align-items:center;">
                            <td>
                                <label for="">Departure</label>
                                <input type="time" name="departure">
                            </td>
                            <td>
                                <label for="">Arrival</label>
                                <input type="time" name="arrival">
                            </td>
                            <td>
                                <label for="">Back</label>
                                <input type="time" name="back">
                            </td>
                            <td>
                                <label for="">Meet</label>
                                <input type="text" name="meet">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Transportaion</label>
                                <input type="text" placeholder="eg, Bus,Train" name="transportation">
                            </td>
                            <td>
                                <label for="">Price</label>
                                <input type="number" placeholder="eg, $50" name="price">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Desc.</label>
                                <textarea name="" id="" cols="100" rows="10" placeholder="Picnic description here" name="description"></textarea>
                            </td>
                            <td colspan="2">
                                <input type="submit">
                                <input type="reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="edit" class="wrapper">
                <h2>Edit</h2>
                <select name="picnics" id="picnics" onchange="updateStuff(this.value)">
                    <?php
                        $db = new PDO("mysql:host=localhost;dbname=c59_Noodles",'root','');
                        $res = $db->query("SELECT * FROM picnic");
                        $res = $res->fetchAll();
                        forEach($res as $pic)
                        {
                            echo "<option value='".$pic['ref']."'>".$pic['title']."</option>";
                        }
                    ?>
                </select>
                <form action="functions/function_edit_picnic.php" method="POST">
                    <table>
                        <tr>
                            <td colspan="1"><label for="">Title:</label>
                            <input type="text" placeholder="eg, Central Park" name="title" id="title"></td>
                            <td>
                                <label for="">Picture:</label>
                                <input type="file" name="src" accept="image/*" id="src"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <label for="">Place</label>
                                <input type="text" placeholder="eg, New York,USA" name="place" id="place">
                            </td>
                            <td colspan="1">
                                <label for="">Date</label>
                                <input type="date" name="date" id="date">
                            </td>
                        </tr>
                        <tr style="display: flex;flex-flow:row wrap;align-items:center;">
                            <td>
                                <label for="">Departure</label>
                                <input type="time" name="departure" id="departure">
                            </td>
                            <td>
                                <label for="">Arrival</label>
                                <input type="time" name="arrival" id="arrival">
                            </td>
                            <td>
                                <label for="">Back</label>
                                <input type="time" name="back" id="back">
                            </td>
                            <td>
                                <label for="">Meet</label>
                                <input type="text" name="meet" id="meet">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Transportaion</label>
                                <input type="text" placeholder="eg, Bus,Train" name="transportation" id="transportation">
                            </td>
                            <td>
                                <label for="">Price</label>
                                <input type="number" placeholder="eg, $50" name="price" id="price">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Desc.</label>
                                <textarea name="" id="" cols="100" rows="10" placeholder="Picnic description here" name="description" id="description"></textarea>
                            </td>
                            <td colspan="2">
                                <input type="submit">
                                <input type="reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="main" class="wrapper">
                <h2>What would you like to do?</h2>
                <ul>
                    <button onclick="viewPost();"><li>Add a picnic</li></button>
                    <button onclick="viewEdit();"><li>Edit a picnic</li></button>
                    <button><li>Remove a picnic</li></button>
                </ul>
            </div>
        </section>      
    </div>
</body>
<script src="js/manager.js"></script>
</html>