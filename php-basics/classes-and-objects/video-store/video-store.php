<?php
include ("../video-store/Application.php");
include ("../video-store/Video.php");
session_start();

if (!isset($_SESSION["storage"]))
{
    $_SESSION["storage"] = array();
}

?>

<html lang="en">

    <head>
        <link rel="stylesheet" href="/php-basics/classes-and-objects/video-store/style.css">
    </head>
    <body>

        <div class="gridItems1">
            <div>
                <h3>Choose the operation you want to perform</h3>
                <p> Choose <b> 0 </b> for EXIT </p>
                <p> Choose <b> 1 </b> to fill video store </p>
                <p> Choose <b> 2 </b> to rent video (as user) </p>
                <p> Choose <b> 3 </b> to return video (as user) </p>
                <p> Choose <b> 4 </b> to list inventory </p>
            </div>

            <form name="form" action="" method="get">
                <input type="text" name="operation" id="operation">
            </form>
        </div>

        <div class="gridItems-add" id="gridItemsPopup-add">
            <div>
                <h3>Choose a Movie to add to the store</h3>
                <h4 id="errorMessageFormInputs-add">Please fill in all provided inputs</h4>
            </div>
            <form name="form" method="post">
                <div class="chooseGridContainer">
                    <div class="chooseGrid">
                        <label for="movie-title-add">Choose a title:</label>
                        <input type="text" name="movie-title-add" id="movie-title-add" placeholder="title">
                    </div>

                    <div class="chooseGrid">
                        <label for="movie-status-add">Choose a Status:</label>
                        <select name="movie-status-add" id="movie-status-add">
                            <option value="unavailable">Unavailable</option>
                            <option value="available">Available</option>
                        </select>
                    </div>

                    <div class="chooseGrid">
                        <label for="movie-rating-add">Choose a Rating:</label>
                        <select name="movie-rating-add" id="movie-rating-add">
                            <?php foreach(range(1, 10) as $item): ?>
                                <option value=<?= $item; ?>><?= $item; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit">
                </div>
            </form>
        </div>

        <div class="gridItems-rent" id="gridItemsPopup-rent">
            <div>
                <h3>Choose a Movie to rent from the store</h3>
                <h4 id="errorMessageFormInputs-rent">Please fill in all provided inputs</h4>
            </div>

            <form name="form" action="" method="post">
                <input type="text" name="movie-title-rent" id="movie-title-rent" placeholder="title">
                <input type="submit">
            </form>
        </div>

        <div class="gridItems-list" id="gridItemsPopup-list">
            <h1>List of movies</h1>
            <div>
                <?php
                    $data = $_SESSION["storage"];
                    ?>
                        <table class="listInventoryTableContainer">
                            <thead style="display: table-header-group">
                                <tr style="text-align:center">
                                    <th>No </th>
                                    <th>Title </th>
                                    <th>Status </th>
                                    <th>Rating </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($data as $fck => $rows) :?>
                                    <tr class="item_row">
                                        <td><?php print_r( ++$total . "."); ?></td>


                                        <td> <?php print_r($rows[0]->title); ?></td>
                                        <td> <?php print_r($rows[0]->status); ?></td>
                                        <td> <?php print_r($rows[0]->rating); ?></td>

                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    <?php
                ?>
            </div>
        </div>

        <div class="gridItems-return" id="gridItemsPopup-return">
            <div>
                <h3>Choose a Movie to return to the store</h3>
                <h4 id="errorMessageFormInputs-return">Please fill in all provided inputs</h4>
            </div>
            <form name="form" method="post">
                <div class="chooseGridContainer-return">
                    <div class="chooseGrid">
                        <label for="movie-title-return">Choose a title:</label>
                        <input type="text" name="movie-title-return" id="movie-title-return" placeholder="title">
                    </div>

                    <div class="chooseGrid">
                        <label for="movie-rating-return">Choose a Rating:</label>
                        <select name="movie-rating-return" id="movie-rating-return">
                            <?php foreach(range(1, 10) as $item): ?>
                                <option value=<?= $item; ?>><?= $item; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit">
                </div>
            </form>
        </div>

    </body>

</html>

<?php

if (isset($_GET['operation'])) {

    if (is_numeric($_GET['operation']) && $_GET['operation'] >= 0 && $_GET['operation'] <= 3)
    {
        if ($_GET['operation'] >= 1 && $_GET['operation'] <= 3)
        {
            if ($_GET['operation'] == 1)
            {
                ?>
                <script>
                    document.getElementById("gridItemsPopup-add").style.display = 'block';
                </script>
                <?php

                if (isset($_POST['movie-title-add']))
                {
                    if(count(array_filter($_POST)) != count($_POST))
                    {
                        ?>
                        <script>
                            document.getElementById("errorMessageFormInputs-add").style.display = 'block';
                        </script>
                        <?php
                    }
                    else
                    {
                        $movie = new video($_POST['movie-title-add'], $_POST['movie-status-add'], $_POST['movie-rating-add']);
                        $storage = $_SESSION["storage"];
                        $app = new Application($movie, $storage);
                        $app->run($_GET['operation']);

                        if ($app->add_movies())
                        {
                            $hasMovie = false;
                            foreach ($_SESSION["storage"] as $val)
                            {
                                if ($val[0]->title == $app->add_movies()[0]->title)
                                {
                                    $hasMovie = true;
                                }
                            }
                            if (!$hasMovie)
                            {
                                $_SESSION["storage"][] = $app->add_movies();
                                $array = array_unique($_SESSION["storage"], SORT_REGULAR);
                                session_unset();
                                $_SESSION["storage"] = $array;
                            }
                        }
                    }
                }
            }
            else if ($_GET['operation'] == 2)
            {

                ?>
                <script>
                    document.getElementById("gridItemsPopup-rent").style.display = 'block';
                </script>
                <?php

                if (isset($_POST['movie-title-rent']))
                {
                    if(count(array_filter($_POST)) != count($_POST))
                    {
                        ?>
                        <script>
                            document.getElementById("errorMessageFormInputs").style.display = 'block';
                        </script>
                        <?php
                    }
                    else
                    {
                        $movie = new video($_POST['movie-title-rent'], "-", "-");
                        $storage = $_SESSION["storage"];
                        $app = new Application($movie, $storage);
                        $app->run($_GET['operation']);

                        if ($app->rent_video() != null)
                        {
                            $hasMovie = false;
                            foreach ($_SESSION["storage"] as $val)
                            {
                                if ($val[0]->title == $app->rent_video()->title)
                                {
                                    $hasMovie = true;
                                }
                            }
                            if (!$hasMovie)
                            {
                                $_SESSION["storage"][] = array($app->rent_video());
                                $array = array_unique($_SESSION["storage"], SORT_REGULAR);
                                session_unset();
                                $_SESSION["storage"] = $array;
                            }
                        }
                    }
                }
            }
            else if ($_GET['operation'] == 3)
            {
                ?>
                <script>
                    document.getElementById("gridItemsPopup-return").style.display = 'block';
                </script>
                <?php

                if (isset($_POST['movie-title-return']))
                {
                    if(count(array_filter($_POST)) != count($_POST))
                    {
                        ?>
                        <script>
                            document.getElementById("errorMessageFormInputs-return").style.display = 'block';
                        </script>
                        <?php
                    }
                    else
                    {
                        $movie = new video($_POST['movie-title-return'], "-", $_POST['movie-rating-return']);
                        $storage = $_SESSION["storage"];
                        $app = new Application($movie, $storage);
                        $app->run($_GET['operation']);

                        if ($app->return_video())
                        {
                            $hasMovie = false;
                            foreach ($_SESSION["storage"] as $val)
                            {
                                if ($val[0]->title == $app->return_video()->title)
                                {
                                    $hasMovie = true;
                                }
                            }
                            if (!$hasMovie)
                            {
                                $_SESSION["storage"][] = array($app->return_video());
                                $array = array_unique($_SESSION["storage"], SORT_REGULAR);
                                session_unset();
                                $_SESSION["storage"] = $array;
                            }
                        }
                    }
                }
            }
        }
    }
    if ($_GET['operation'] == 4)
    {
        ?>
        <script>
            document.getElementById("gridItemsPopup-list").style.display = 'block';
        </script>
        <?php
    }
}


