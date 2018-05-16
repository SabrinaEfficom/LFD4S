<?php

/* ::base.html.twig */
class __TwigTemplate_abee435b957d7c2f2e10d6771e704456a671ea07c724e9235c5089167ddd9a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"site EII\">
        <meta name=\"author\" content=\"Arif Sabrina\">
        <link rel=\"shortcut icon\" href=\"themes/assets/ico/LFD4Sicon.ico\">


        <!-- Bootstrap core CSS -->
        <link href=\"themes/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src=\"themes/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href=\"themes/assets/css/carousel.css\" rel=\"stylesheet\">

    </head>
    <body>
     <br />

        <!-- NAVBAR================================================== -->
        <div class=\"navbar-wrapper\">
            <div class=\"container\">
                <div class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=";
        // line 43
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_home");
        echo ">Accueil LFD4St</a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"lfd4s_platform_first:\">Home</a></li>
                                <li><a href=\"login\">sign</a></li>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                                <li><a href=\"#Commande\">Commande</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Producteur <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"\">Producteur</a></li>
                                        <li><a href=\"\">info Producteur</a></li>

                                    </ul>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">bio <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"divider\"></li>
                                        <li class=\"dropdown-header\">produit</li>
                                        <li><a href=\"\">fruits</a></li>
                                        <li><a href=\"\">legumes</a></li>

                                    </ul>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Information <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">livraison</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Carousel
   ================================================== -->
        <div id=\"mainCarousel\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <script
                                src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyBeFIshYtHt6EJgz_5zl66k1O10a-gnGaI&sensor=false\">
                        </script>
                        <script>
                            var myCenter=new google.maps.LatLng(50.63123710000001,3.063240700000051);
                            var marker;
                            function initialize()
                            {
                                var mapProp = {
                                    center:myCenter,
                                    zoom:15,
                                    mapTypeId:google.maps.MapTypeId.ROADMAP
                                };
                                var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
                                marker=new google.maps.Marker({
                                    position:myCenter,
                                    // icon:'themes/assets/images/nepali-momo.png',
                                    animation:google.maps.Animation.BOUNCE
                                });

                                marker.setMap(map);

                                // Info open
                                var infowindow = new google.maps.InfoWindow({
                                    content:\"Hello World!\"
                                });

                                google.maps.event.addListener(marker, 'click', function() {
                                    infowindow.open(map,marker);
                                });
                            }
                            google.maps.event.addDomListener(window, 'load', initialize);
                        </script>
                        <div id=\"googleMap\" style=\"height:450px;\"></div>
                        <div class=\"container\">
                            <div class=\"carousel-caption\">
                                <a class=\"btn btn-lg btn-default\" href=";
        // line 135
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_cart");
        echo " role=\"button\" style=\"font-size:2em\">Commande &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.carousel -->
        </div>

        <div class=\"mainTitle\">
            <div class=\"container\">
                <h1>La fraicheur des 4 saisons</h1>
                <p>
                   La FD4S est société la société qui vous mets en contact avec les producteurs de votre région!
                    Nousvous garantissons livraison rapide, qualité, transparance et la sécurité de vos achats

                </p>
            </div>
        </div>



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class=\"container marketing\">
            <!-- Three columns of text below the carousel -->
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <img class=\"img-circle\" src=\"themes/assets/images/Produits.jpg\" alt=\"Generic placeholder image\">
                    <h2>Produits</h2>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\"> En savoir plus </a></p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img class=\"img-circle\" src=\"themes/assets/images/image.jpg\" alt=\"Generic placeholder image\">
                    <h2>livraison</h2>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">En savoir plus </a></p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img class=\"img-circle\" src=\"themes/assets/images/Paypal.jpg\" alt=\"Lam Tikka\">
                    <h2>Paiement sécurisé </h2>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\"> En savoir plus </a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>




        <div class=\"introSection\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"cntr\">Nos producteur vous propose leur produits</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container marketing\">
            <h2 class=\"itemsTitle\">Producteurs le mieux notés</h2>
            <div id=\"myCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD1.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 1</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 2</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD3.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 3</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/producteur.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 4</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/produits.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 5</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 6</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 7</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 8</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 9</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel1\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#myCarousel1\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div><!-- /.carousel -->
        </div>

        <div class=\"container marketing\">
            <h2 class=\"itemsTitle\">Producteurs à proximité</h2>
            <div id=\"myCarousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>Prod 10</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>Prod 11</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>Prod 12</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 13</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 14</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 15</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 16</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 17</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 18</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel2\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#myCarousel2\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div><!-- /.carousel -->
        </div>

        <div class=\"container marketing\">
            <h2 class=\"itemsTitle\"> NOS NOUVEAU PRODUCTEURS </h2>
            <div id=\"myCarousel3\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD1.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 19</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 20</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD3.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 21</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->

                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD1.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 22</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 23</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD3.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 24</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->

                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD1.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 25</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 26</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/PROD3.jpg\" alt=\"Generic placeholder image\">
                                <h4>prod 27</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div><!-- /.carousel -->
        </div>





        <div class=\"introSection\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <h3>Welcome to restaurent</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>

                    <div class=\"col-lg-4\">
                        <h3>Welcome to restaurent</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>

                        </p>

                    </div>

                    <div class=\"col-lg-3\">
                        <h3>Welcome to restaurent</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                        </p>

                    </div>

                </div>
            </div>
        </div>


        <div class=\"container marketing\">
            <div id=\"myCarousel4\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row featurette\">
                            <div class=\"col-md-7\">
                                <h2 class=\"featurette-heading\">Fish and Chips <span class=\"text-muted\">It's very very testy</span></h2>
                                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                            </div>
                            <div class=\"col-md-5\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Fish and Chips\">
                            </div>
                        </div>
                    </div>


                    <div class=\"item\">
                        <div class=\"row featurette\">
                            <div class=\"col-md-5\">
                                <img src=\"themes/assets/images/PROD2.jpg\" alt=\"Generic placeholder image\">
                            </div>
                            <div class=\"col-md-7\">
                                <h2 class=\"featurette-heading\">Oh yeah, very nice Burger. <span class=\"text-muted\">Delicious.</span></h2>
                                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                            </div>
                        </div>
                    </div>


                    <div class=\"item\">
                        <div class=\"row featurette\">
                            <div class=\"col-md-7\">
                                <h2 class=\"featurette-heading\">Try yourself <span class=\"text-muted\">Testy</span></h2>
                                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                            </div>
                            <div class=\"col-md-5\">
                                <img class=\"img-circle\" src=\"/themes/assets/images/PROD1.jpg\" alt=\"Generic placeholder image\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.carousel -->
        </div><!-- /.container -->
        <!-- /END THE FEATURETTES -->
        <br />

 <br /><br  />
        <!-- FOOTER -->
        <footer>
            <div class=\"container\">
                <p class=\"pull-right\"><a href=\"\">Back to top</a></p>
                <p>&copy; 2018 LFD4S, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Mentions Légales</a></p>
                <p>Pour votre santé, pratiquez une activité physique régulière. <a href=www.mangerbouger.fr>www.mangerbouger.fr</a></p>
            </div>
        </footer>
 <br  />
        ";
        // line 507
        $this->displayBlock('javascripts', $context, $blocks);
        // line 512
        echo "    </body>
</html>
";
    }

    // line 507
    public function block_javascripts($context, array $blocks = array())
    {
        // line 508
        echo "        <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
        <script src=\"/web/js/bootstrap.min.js\"></script>
        <script src=\"/web/js/holder.js \"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 508,  542 => 507,  536 => 512,  534 => 507,  159 => 135,  64 => 43,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="site EII">*/
/*         <meta name="author" content="Arif Sabrina">*/
/*         <link rel="shortcut icon" href="themes/assets/ico/LFD4Sicon.ico">*/
/* */
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*         <!-- Just for debugging purposes. Don't actually copy this line! -->*/
/*         <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Custom styles for this template -->*/
/*         <link href="themes/assets/css/carousel.css" rel="stylesheet">*/
/* */
/*     </head>*/
/*     <body>*/
/*      <br />*/
/* */
/*         <!-- NAVBAR================================================== -->*/
/*         <div class="navbar-wrapper">*/
/*             <div class="container">*/
/*                 <div class="navbar navbar-inverse navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand" href={{ path('lfd4s_platform_home')}}>Accueil LFD4St</a>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li class="active"><a href="lfd4s_platform_first:">Home</a></li>*/
/*                                 <li><a href="login">sign</a></li>*/
/*                                 <li><a href="about.html">About Us</a></li>*/
/*                                 <li><a href="contact.html">Contact</a></li>*/
/*                                 <li><a href="#Commande">Commande</a></li>*/
/*                                 <li class="dropdown">*/
/*                                     <a href="" class="dropdown-toggle" data-toggle="dropdown">Producteur <b class="caret"></b></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="">Producteur</a></li>*/
/*                                         <li><a href="">info Producteur</a></li>*/
/* */
/*                                     </ul>*/
/*                                 </li>*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="" class="dropdown-toggle" data-toggle="dropdown">bio <b class="caret"></b></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="dropdown-header">produit</li>*/
/*                                         <li><a href="">fruits</a></li>*/
/*                                         <li><a href="">legumes</a></li>*/
/* */
/*                                     </ul>*/
/*                                 </li>*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">livraison</a></li>*/
/* */
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Carousel*/
/*    ================================================== -->*/
/*         <div id="mainCarousel">*/
/*             <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                     <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                 </ol>*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <script*/
/*                                 src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBeFIshYtHt6EJgz_5zl66k1O10a-gnGaI&sensor=false">*/
/*                         </script>*/
/*                         <script>*/
/*                             var myCenter=new google.maps.LatLng(50.63123710000001,3.063240700000051);*/
/*                             var marker;*/
/*                             function initialize()*/
/*                             {*/
/*                                 var mapProp = {*/
/*                                     center:myCenter,*/
/*                                     zoom:15,*/
/*                                     mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*                                 };*/
/*                                 var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/*                                 marker=new google.maps.Marker({*/
/*                                     position:myCenter,*/
/*                                     // icon:'themes/assets/images/nepali-momo.png',*/
/*                                     animation:google.maps.Animation.BOUNCE*/
/*                                 });*/
/* */
/*                                 marker.setMap(map);*/
/* */
/*                                 // Info open*/
/*                                 var infowindow = new google.maps.InfoWindow({*/
/*                                     content:"Hello World!"*/
/*                                 });*/
/* */
/*                                 google.maps.event.addListener(marker, 'click', function() {*/
/*                                     infowindow.open(map,marker);*/
/*                                 });*/
/*                             }*/
/*                             google.maps.event.addDomListener(window, 'load', initialize);*/
/*                         </script>*/
/*                         <div id="googleMap" style="height:450px;"></div>*/
/*                         <div class="container">*/
/*                             <div class="carousel-caption">*/
/*                                 <a class="btn btn-lg btn-default" href={{ path('lfd4s_platform_cart')}} role="button" style="font-size:2em">Commande &raquo;</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.carousel -->*/
/*         </div>*/
/* */
/*         <div class="mainTitle">*/
/*             <div class="container">*/
/*                 <h1>La fraicheur des 4 saisons</h1>*/
/*                 <p>*/
/*                    La FD4S est société la société qui vous mets en contact avec les producteurs de votre région!*/
/*                     Nousvous garantissons livraison rapide, qualité, transparance et la sécurité de vos achats*/
/* */
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*         <!-- Marketing messaging and featurettes*/
/*         ================================================== -->*/
/*         <!-- Wrap the rest of the page in another container to center all the content. -->*/
/* */
/*         <div class="container marketing">*/
/*             <!-- Three columns of text below the carousel -->*/
/*             <div class="row">*/
/*                 <div class="col-lg-4">*/
/*                     <img class="img-circle" src="themes/assets/images/Produits.jpg" alt="Generic placeholder image">*/
/*                     <h2>Produits</h2>*/
/*                     <p><a class="btn btn-default" href="#" role="button"> En savoir plus </a></p>*/
/*                 </div><!-- /.col-lg-4 -->*/
/*                 <div class="col-lg-4">*/
/*                     <img class="img-circle" src="themes/assets/images/image.jpg" alt="Generic placeholder image">*/
/*                     <h2>livraison</h2>*/
/*                     <p><a class="btn btn-default" href="#" role="button">En savoir plus </a></p>*/
/*                 </div><!-- /.col-lg-4 -->*/
/*                 <div class="col-lg-4">*/
/*                     <img class="img-circle" src="themes/assets/images/Paypal.jpg" alt="Lam Tikka">*/
/*                     <h2>Paiement sécurisé </h2>*/
/*                     <p><a class="btn btn-default" href="#" role="button"> En savoir plus </a></p>*/
/*                 </div><!-- /.col-lg-4 -->*/
/*             </div><!-- /.row -->*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*         <div class="introSection">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="cntr">Nos producteur vous propose leur produits</h1>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container marketing">*/
/*             <h2 class="itemsTitle">Producteurs le mieux notés</h2>*/
/*             <div id="myCarousel1" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD1.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 1</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 2</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD3.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 3</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/producteur.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 4</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/produits.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 5</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 6</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 7</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 8</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 9</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>*/
/*                 <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div><!-- /.carousel -->*/
/*         </div>*/
/* */
/*         <div class="container marketing">*/
/*             <h2 class="itemsTitle">Producteurs à proximité</h2>*/
/*             <div id="myCarousel2" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>Prod 10</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>Prod 11</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>Prod 12</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 13</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 14</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 15</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 16</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 17</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 18</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>*/
/*                 <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div><!-- /.carousel -->*/
/*         </div>*/
/* */
/*         <div class="container marketing">*/
/*             <h2 class="itemsTitle"> NOS NOUVEAU PRODUCTEURS </h2>*/
/*             <div id="myCarousel3" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD1.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 19</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 20</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD3.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 21</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/* */
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD1.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 22</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 23</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD3.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 24</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/* */
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD1.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 25</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 26</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/PROD3.jpg" alt="Generic placeholder image">*/
/*                                 <h4>prod 27</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>*/
/*                 <a class="right carousel-control" href="" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div><!-- /.carousel -->*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <div class="introSection">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-5">*/
/*                         <h3>Welcome to restaurent</h3>*/
/*                         <p>*/
/*                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy*/
/*                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*/
/*                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>*/
/*                             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,*/
/*                             and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-4">*/
/*                         <h3>Welcome to restaurent</h3>*/
/*                         <p>*/
/*                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy*/
/*                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*/
/*                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>*/
/* */
/*                         </p>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-lg-3">*/
/*                         <h3>Welcome to restaurent</h3>*/
/*                         <p>*/
/*                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy*/
/*                             text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.*/
/* */
/*                         </p>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="container marketing">*/
/*             <div id="myCarousel4" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row featurette">*/
/*                             <div class="col-md-7">*/
/*                                 <h2 class="featurette-heading">Fish and Chips <span class="text-muted">It's very very testy</span></h2>*/
/*                                 <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>*/
/*                             </div>*/
/*                             <div class="col-md-5">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Fish and Chips">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="item">*/
/*                         <div class="row featurette">*/
/*                             <div class="col-md-5">*/
/*                                 <img src="themes/assets/images/PROD2.jpg" alt="Generic placeholder image">*/
/*                             </div>*/
/*                             <div class="col-md-7">*/
/*                                 <h2 class="featurette-heading">Oh yeah, very nice Burger. <span class="text-muted">Delicious.</span></h2>*/
/*                                 <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="item">*/
/*                         <div class="row featurette">*/
/*                             <div class="col-md-7">*/
/*                                 <h2 class="featurette-heading">Try yourself <span class="text-muted">Testy</span></h2>*/
/*                                 <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>*/
/*                             </div>*/
/*                             <div class="col-md-5">*/
/*                                 <img class="img-circle" src="/themes/assets/images/PROD1.jpg" alt="Generic placeholder image">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.carousel -->*/
/*         </div><!-- /.container -->*/
/*         <!-- /END THE FEATURETTES -->*/
/*         <br />*/
/* */
/*  <br /><br  />*/
/*         <!-- FOOTER -->*/
/*         <footer>*/
/*             <div class="container">*/
/*                 <p class="pull-right"><a href="">Back to top</a></p>*/
/*                 <p>&copy; 2018 LFD4S, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Mentions Légales</a></p>*/
/*                 <p>Pour votre santé, pratiquez une activité physique régulière. <a href=www.mangerbouger.fr>www.mangerbouger.fr</a></p>*/
/*             </div>*/
/*         </footer>*/
/*  <br  />*/
/*         {% block javascripts %}*/
/*         <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>*/
/*         <script src="/web/js/bootstrap.min.js"></script>*/
/*         <script src="/web/js/holder.js "></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
