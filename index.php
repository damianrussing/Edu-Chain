<?php
include('config/config.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/fonts.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <a onclick="toTop();" id="to-top">
        <i class="fas fa-arrow-up"></i></a>
</div>

<nav>
    <div id="normal">
        <ul id="top">
            <li><a onclick="scrollAbout()"><?php echo $lang['about'] ?></a></li>
            <li><a onclick="scrollTeam()"><?php echo $lang['team'] ?></a></li>
            <li><a onclick="scrollPackages()"><?php echo $lang['packages'] ?></a></li>
            <li><a onclick="scrollContact()"><?php echo $lang['contact'] ?></a></li>
        </ul>
    </div>

    <div id="extend">
        <ul id="top2">
            <li><a onclick="scrollAbout()"><?php echo $lang['about'] ?></a></li>
            <li><a onclick="scrollTeam()"><?php echo $lang['team'] ?></a></li>
            <li><a onclick="scrollPackages()"><?php echo $lang['packages'] ?></a></li>
            <li><a onclick="scrollContact()"><?php echo $lang['contact'] ?></a></li>
        </ul>
    </div>
</nav>
<div id="BannerShadow">
    <div id="Banner">

        <h1>Edu-Chain</h1>
        <p><?php echo $lang['banner_text'] ?></p>


    </div>
</div>
<div id="info">
    <h1><?php echo $lang['about'] ?></h1>
    <p>Lorem ipsum dolor sit amet, nulla consulatu ius eu, ei sit modus insolens persecuti. Vim veniam facilis civibus
        ut, inani fabellas tractatos no usu. Phaedrum posidonium id eum, ei mel aliquid qualisque, nostrud discere
        eligendi eam ne. Yeetus Deletus Fetus vel ne, perpetua aliquando ne eum. Utamur explicari ius ne. Purto
        lobortis temporibus vel ex.

        Eu mei meis probatus, et sed aeterno civibus, cu diam vivendo accumsan vis. At per quodsi feugait, maiestatis
        reformidans disputationi mea ne. Pri ei vidit facete, liber impetus saperet an sea, et prima persecuti sea. Usu
        harum percipit invenire cu, inimicus persequeris eu vix, nam diceret delenit ne.

        Ne pro erant essent instructior, eos at eripuit graecis perpetua. Duo no invenire accommodare, ut enim mediocrem
        vim. Sit ad odio tibique aliquando. Aeterno intellegat voluptaria ea eum, veri dolorum constituam in mea. Ne
        error tollit molestie vix, duo veri omnesque phaedrum id. No vim facilis scripserit cotidieque, eam utamur
        persequeris no, ex sea feugait adolescens.

        Exerci utroque deserunt mea at. Eius dicit nusquam ius et, vix quidam aliquid et. Vix at populo lucilius
        tincidunt. Et nam conceptam cotidieque, pro tation semper omittam ea, velit mucius labores his ne. Regione
        eripuit ea sea, vel et recteque accommodare. Te suscipit adolescens interpretaris cum. Eu pri case lorem nullam,
        eu vix possit platonem.

        Te mea natum adipisci iudicabit. Case repudiare ex eum, eu reque appetere eos, mel munere blandit at. Meliore
        liberavisse sit id. Sea ei dicta verterem deseruisse.</p>
</div>
<div id="BannerShadow">
    <div id="Banner2">

        <h1><?php echo $lang['team'] ?></h1>

        <div class="person1 person">
            <div src="">
                <h2>Kelly de Wit</h2>
                <h3><?php echo $lang['task_1'] ?></h3>
            </div>
        </div>
        <div class="person2 person">
            <div src="">
                <h2>Lisa Jacobs</h2>
                <h3><?php echo $lang['task_2'] ?></h3>
            </div>


        </div>
    </div>
</div>

<div id="info2">

    <h1><?php echo $lang['packages'] ?></h1>
    <div id="container">
        <div id="item-1"
             onclick="toggleModal(<?php echo "'" . $lang['package_1'] . "', '" . $lang['package_1_desc_1'] . "', '" . $lang['package_1_desc_2'] . "', '" . $lang['package_contains'] . "', '" . $lang['package_1_contain_1'] . "', '" . $lang['package_1_contain_2'] . "', '" . $lang['package_buy'] . "', 'empty'"; ?>)">
            <h3><?php echo $lang['package_category_1'] ?></h3>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_1'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_2'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_3'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_4'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_5'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_6'] ?></h4>
            <h3>€0,-
                <small>/ <?php echo $lang['month'] ?></small>
            </h3>
        </div>
        <div id="item-2"
             onclick="toggleModal(<?php echo "'" . $lang['package_2'] . "', '" . $lang['package_2_desc_1'] . "', '" . $lang['package_2_desc_2'] . "', '" . $lang['package_contains'] . "', '" . $lang['package_2_contain_1'] . "', '" . $lang['package_2_contain_2'] . "', '" . $lang['package_buy'] . "', '', '" . $lang['package_2_contain_3'] . "', '" . $lang['package_2_contain_4'] . "', 'empty'"; ?>)">
            <h3><?php echo $lang['package_category_2'] ?></h3>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_1'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_2'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_3'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_4'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_5'] ?></h4>
            <h4><i class="fas fa-times"></i><?php echo $lang['package_item_6'] ?></h4>
            <h3>€24,95
                <small>/ <?php echo $lang['month'] ?></small>
            </h3>
        </div>
        <div id="item-3"
             onclick="toggleModal(<?php echo "'" . $lang['package_3'] . "', '" . $lang['package_3_desc_1'] . "', '" . $lang['package_3_desc_2'] . "', '" . $lang['package_contains'] . "', '" . $lang['package_3_contain_1'] . "', '" . $lang['package_3_contain_2'] . "', '" . $lang['package_buy'] . "', '', '" . $lang['package_3_contain_3'] . "', '" . $lang['package_3_contain_4'] . "', '', '" . $lang['package_3_desc_3'] . "', '" . $lang['package_3_contain_5'] . "', '" . $lang['package_3_contain_6'] . "'"; ?>)">
            <h3><?php echo $lang['package_category_3'] ?></h3>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_1'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_2'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_3'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_4'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_5'] ?></h4>
            <h4><i class="fas fa-check"></i><?php echo $lang['package_item_6'] ?></h4>
            <h3>€49,95
                <small>/ <?php echo $lang['month'] ?></small>
            </h3>
        </div>
    </div>
</div>
</div>
<div id="footer">
    <div id="BannerShadow">
        <div id="Banner3">

            <div id="contact-info">
                <h2><i class="fas fa-map-marked-alt"></i><?php echo $lang['address'] ?></h2>
                <p><?php echo $lang['address_1'] ?><br/>
                    <?php echo $lang['address_2'] ?>
                </p>

                <h2><i class="fas fa-phone"></i><?php echo $lang['phone'] ?></h2>
                <p>06-51559065
                </p>

                <h2><i class="fas fa-envelope"></i> Email</h2>
                <p>contact@edu-chain.nl
                </p>
            </div>
            <div id="contact-form">
                <form id="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <fieldset>
                        <input name="name" placeholder="<?php echo $lang['name'] ?>" type="text"
                               value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </fieldset>
                    <fieldset>
                        <input name="email" placeholder="<?php echo $lang['email'] ?>" type="email"
                               value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </fieldset>
                    <fieldset>
                        <input name="title" placeholder="<?php echo $lang['topic'] ?>" type="text"
                               value="<?php echo isset($_POST['title']) ? $title : ''; ?>">
                    </fieldset>
                    <fieldset>
                        <textarea name="message"
                                  placeholder="<?php echo $lang['type_message'] ?>"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending"><?php echo $lang['submit'] ?></button>
                    </fieldset>
                </form>
            </div>

            <div id="bottom">
                <p>
                    <a class="flag" href="<?php echo $lang['link'] ?>"><img src="<?php echo $lang['flag'] ?>"></a>
                    Copyright &copy; <?php echo date("Y");
                    echo $lang['copyright'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal-box">
        <div class="modal-head">
            <h1 class="header"></h1>
            <span class="close">×</span>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>