<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">
        <ul>
            <li  class="appointButton"><a class="appoint" href="index.php">Cards</a></li>
        </ul>
    <div class="cardContainer">
        <div class="cardStyle">
            <form action='?action=store' method="post">
                <div>
                    <input placeholder="Enquiry Title" class="fondo tituloPlace" type="text" name="title">
                    <input placeholder="Coder Name"class="tituloPlace2 fondo" type="text" name="name">
                    
                    <div class="btn-group buttonGroup" role="group" aria-label="Basic example">

                        <button type="submit" class="btn btn-secondary send">Send</button>
                        <button type="button" class="btn btn-secondary cancel"><a class="linkCancel" href="index.php">Cancel</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </main>

</body>