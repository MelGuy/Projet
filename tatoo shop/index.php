<?php include "equipe.php";
include "book.php"; include "message.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Pic-Ink</title>
</head>
<body>
    <header>
        <nav>
            <img src="img/logo.png" alt="joli logo">
            <ul id='menu'>
                <li><a href="#presentation" class="menu link hvr-underline-from-center">Qui sommes nous ?</a></li>
                <li><a href="#equipe" class="menu link hvr-underline-from-center">L'équipe</a></li>
                <li><a href="#shop" class="menu link hvr-underline-from-center">Le shop</a></li>
                <li><a href="#contact" class="menu link hvr-underline-from-center">Questions / rdv</a></li>
            </ul>           
        </nav>
    </header>
        <main>
            <section id="presentation">
                <h1>Qui sommes nous ?</h1>
                        
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lorem vulputate, convallis eros quis, maximus arcu. Vivamus faucibus rhoncus ipsum. Praesent non felis mauris. Nulla facilisi. Nulla facilisi. Praesent aliquet rhoncus ante. Cras finibus felis justo, non suscipit diam congue nec. Vestibulum id sollicitudin tortor. Etiam ut ante tincidunt, euismod nisi in, hendrerit lacus.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat ut eros vitae pharetra. Duis nec libero orci. Nunc malesuada mi quis arcu eleifend, in dictum nibh egestas. Vivamus fermentum leo nulla, sed posuere tellus tristique sit amet. Mauris sit amet pretium eros. Morbi pharetra, massa at placerat efficitur, odio turpis fermentum tortor, eu blandit erat ante ac justo. Donec non venenatis metus. In hac habitasse platea dictumst. Ut consequat aliquam turpis sit amet dignissim. Vivamus urna nulla, iaculis nec lorem pellentesque, vulputate pretium odio. Praesent nec mattis risus. Curabitur tellus tortor, semper ac suscipit at, iaculis id nisl. Vivamus consectetur, sapien vel venenatis dapibus, ante arcu tempus justo, aliquet sagittis mi mi eget ligula. Donec iaculis, lectus sed bibendum ullamcorper, magna felis bibendum sapien, vel ullamcorper nulla eros et ex. Aenean feugiat erat dolor, sed tristique massa ullamcorper sit amet.</p>
                    <p>blblblb@kk.com</p>
                    <p>06.58.37.45.66</p>
                
            </section>
            <section id="equipe">
                <ul>
                <?php foreach($team as $value): ?>
                    <li><h3><?php echo $value['name'] ?></h3>
                        <ul>
                            <li><img src=img/<?php echo $value['profilPic'] ?>></li>
                            <li><p><?php echo $value['description'] ?></p></li>
                            
                            
                        </ul>
                    </li>
                                <?php  endforeach;?>
                </ul>
                <button class="show">Leurs créations <i class="fas fa-angle-double-down"></i></button>
                    <div class="hide">
                        <?php foreach($book as $show): ?>
                            <img src=img/book/<?php echo $show['img'] ?> title="<?php echo $show['name'] ?>" alt="photo des gens">
                        <?php endforeach; ?>
            </section>
            <section id="shop">
                    <h2>Notre merveilleux shop</h2>
                        <div class="description">
                        <img src=img/shop1.jpg class="img1" alt="façade shop">
                        <!-- <p>Notre salon situé vers les terreaux posssède son petit salon d'accueil ansi que sa salle avec 3 plans de travail séparer par des rideaux pour sa faire tatouer en toute intimié.</p> -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lorem vulputate, convallis eros quis, maximus arcu. Vivamus faucibus rhoncus ipsum. Praesent non felis mauris. Nulla facilisi. Nulla facilisi. Praesent aliquet rhoncus ante. Cras finibus felis justo, non suscipit diam congue nec. Vestibulum id sollicitudin tortor. Etiam ut ante tincidunt, euismod nisi in, hendrerit lacus.

    Integer sodales gravida dolor, quis suscipit erat. Praesent risus orci, hendrerit et placerat semper, ultrices vel risus. Morbi volutpat sem lorem, at hendrerit neque pellentesque a. Sed sollicitudin sagittis lacus, quis tempus massa dapibus at. Mauris ex erat, mattis eu convallis a, suscipit nec metus. Nullam hendrerit nunc metus, eget auctor sapien sagittis sit amet. Integer sed felis ac turpis ultricies blandit. Integer sit amet sem at massa aliquet vestibulum. Nulla facilisi. Ut id purus id dolor laoreet suscipit sed in quam. Aliquam ultricies facilisis ligula eget imperdiet. Sed in molestie eros. Maecenas sit amet elit nulla. Etiam feugiat sollicitudin est id pharetra. Aliquam aliquet purus eget justo lobortis rhoncus. Vestibulum lacinia dui neque, a ultricies metus vestibulum ut.</p>
    <img src=img/shop.jpg alt="interieur shop">
    </div>
    <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.280614250234!2d4.83304908624827!3d45.76864538591696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eafe9af3dc5f%3A0xbcea5260d5a8e65!2sLa%20Taverne%20du%20Perroquet%20Bourr%C3%A9!5e0!3m2!1sfr!2sfr!4v1568640977407!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        
            </section>
            <section id="contact">
                    <h2>Question ? Devis ? RDV ? <i class="fas fa-level-down-alt"></i></h2>
                    <form class="contact" method="post" action="" onsubmit="return verifForm(this)">
                        <fieldset><legend>Vos coordonnées</legend>
                            <input type="text" id="nom" placeholder="Nom" name="name" onblur="verifName(this)"/>
                            <input type="email" id="mail" placeholder="Mail" name="mail" />
                        </fieldset>                   
                        <fieldset><legend>Votre message :</legend>
                            <input type="text" id="objet" placeholder="Object" name="object" />
                            <textarea id="message" name="message" placeholder="Ui ?" cols="30" rows="8" onblur="verifMess(this)"></textarea>
                        </fieldset>                    
                        <div style="text-align:center;"><input type="submit" name="envoi" class="btnForm" value="Envoyer le formulaire !" /></div>
                    </form>
            </section>
        </main>
        <footer>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
            <p>Merci d'avoir visité</p>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>