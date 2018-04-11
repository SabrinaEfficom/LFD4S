<?php

/* base.html.twig */
class __TwigTemplate_c6467985f06e6bdfba2ed9a2fe18b65137d86dfc19149d024e74688cbb88c476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90533f58609ce4273d5b8b6d587ea0384e485a2c4721532c4680b03b40ac4d08 = $this->env->getExtension("native_profiler");
        $__internal_90533f58609ce4273d5b8b6d587ea0384e485a2c4721532c4680b03b40ac4d08->enter($__internal_90533f58609ce4273d5b8b6d587ea0384e485a2c4721532c4680b03b40ac4d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"site EII\">
        <meta name=\"author\" content=\"Arif Sabrina\">

        <!-- Bootstrap core CSS -->
        <link href=\"/web/css/bootstrap-theme.min.css\" rel=\"stylesheet\">

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"/web/Images/LFD4Sicon.ico\"/>



        <link href=\"\\web\\css\\Home.css\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>
    <body>
        _________________________________________________________
 <br />

        <!-- NAVBAR
================================================== -->
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
                            <a class=\"navbar-brand\" href=\"index.html\">Accueil LFD4St</a>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"index.html\">Home</a></li>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                                <li><a href=\"#Commande\">Commande</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Producteur <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Producteur</a></li>

                                    </ul>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">bio <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"divider\"></li>
                                        <li class=\"dropdown-header\">produit</li>
                                        <li><a href=\"#\">salade</a></li>

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
                            var myCenter=new google.maps.LatLng(51.508742,-0.120850);
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
        // line 136
        echo $this->env->getExtension('routing')->getPath("lfd4s_platform_cart");
        echo " role=\"button\" style=\"font-size:2em\">Order Online Now &raquo;</a>
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
                   LA FD4S EST ......
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
                    <img class=\"img-circle\" src=\"themes/assets/images/nepali-momo.png\" alt=\"Generic placeholder image\">
                    <h2>Nepalese MOMO</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">&pound; 2.2 Add to cart &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img class=\"img-circle\" src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                    <h2>Burger</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">&pound;5 Add to cart &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img class=\"img-circle\" src=\"themes/assets/images/gorkha-special-chicken.png\" alt=\"Lam Tikka\">
                    <h2>Gurkha Chicken</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">&pound;4 Add to cart &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>




        <div class=\"introSection\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"cntr\">We are launching complete online food order system for restaurent and takeaway Only at the rate <br>&pound;999 </h1>
                    </div>
                </div>
            </div>
        </div>








        <div class=\"container marketing\">
            <h2 class=\"itemsTitle\">PRODUCTEUR/h2>
            <div id=\"myCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
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
            <h2 class=\"itemsTitle\">Lunch</h2>
            <div id=\"myCarousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/chicken.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks_lussy.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/chicken_fry.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/fish-and-chips.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
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
            <h2 class=\"itemsTitle\">Dinner</h2>
            <div id=\"myCarousel3\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/chicken_fry.png\" alt=\"Generic placeholder image\">
                                <h4>Chicken</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/rice.png\" alt=\"Generic placeholder image\">
                                <h4>Rice</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/courinder.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
                                <h4>Meal</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->

                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/salate.png\" alt=\"Generic placeholder image\">
                                <h4>Salates</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/chicken_fry.png\" alt=\"Generic placeholder image\">
                                <h4>Chicken</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                            <div class=\"col-lg-4\">
                                <img  src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                                <h4>Drink</h4>
                                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Add to cart &raquo;</a></p>
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel3\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
                <a class=\"right carousel-control\" href=\"#myCarousel3\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div><!-- /.carousel -->
        </div>


        <div class=\"highlightSection\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"media\">
                            <a href=\"menu/\"><img src=\"themes/assets/images/nepali-momo.png\" alt=\"nepali-momo\"> </a>
                            <h3 class=\"media-heading text-primary-theme\">NEPALESE LAMB MOMO</h3>
                            <p>Steamed dumplings filled with slightly spiced minced meat served with special sauce.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"media\"><a href=\"menu/\"><img src=\"themes/assets/images/gorkha-special-chicken.png\" alt=\"GURKHA SPECIAL CHICKEN\"> </a>
                            <h3 class=\"media-heading text-danger-theme\">GURKHA SPECIAL CHICKEN</h3>
                            <p>Boneless chicken marinated in mustard, smoked chilli, herbs and spices slowly cooked in tandoor. </p>

                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"media\">
                            <a href=\"menu/\"><img src=\"themes/assets/images/lam-tikka.png\" alt=\"Lam Tikka\"> </a>
                            <h3 class=\"media-heading\">LAMB TIKKA SPECIAL</h3>
                            <p>Tender pieces of lamb mixed with our own spices and gently cooked in clay oven. </p>
                        </div>
                    </div>
                </div>
            </div>
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
                                <img src=\"themes/assets/images/fish-and-chips.png\" alt=\"Fish and Chips\">
                            </div>
                        </div>
                    </div>


                    <div class=\"item\">
                        <div class=\"row featurette\">
                            <div class=\"col-md-5\">
                                <img src=\"themes/assets/images/burger.png\" alt=\"Generic placeholder image\">
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
                                <img class=\"img-circle\" src=\"themes/assets/images/drinks.png\" alt=\"Generic placeholder image\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.carousel -->
        </div><!-- /.container -->
        <!-- /END THE FEATURETTES -->


        <br  />
        _________________________________________________________
 <br  />
        ";
        // line 534
        $this->displayBlock('navigation', $context, $blocks);
        // line 535
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 536
        echo "  ______________________________________________________
 <br  />
        footer<br  />
        <!-- FOOTER -->
        <footer>
            <div class=\"container\">
                <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
                <p>&copy; 2018 LFD4S, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
            </div>
        </footer>
 <br  />
        ";
        // line 547
        $this->displayBlock('javascripts', $context, $blocks);
        // line 552
        echo "    </body>
</html>
";
        
        $__internal_90533f58609ce4273d5b8b6d587ea0384e485a2c4721532c4680b03b40ac4d08->leave($__internal_90533f58609ce4273d5b8b6d587ea0384e485a2c4721532c4680b03b40ac4d08_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_0149252ce1bb03f67c66c9e22ea0bb645ecdf6ef1d1039a45874346996070c1f = $this->env->getExtension("native_profiler");
        $__internal_0149252ce1bb03f67c66c9e22ea0bb645ecdf6ef1d1039a45874346996070c1f->enter($__internal_0149252ce1bb03f67c66c9e22ea0bb645ecdf6ef1d1039a45874346996070c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LA fraicheur des 4 saisons!";
        
        $__internal_0149252ce1bb03f67c66c9e22ea0bb645ecdf6ef1d1039a45874346996070c1f->leave($__internal_0149252ce1bb03f67c66c9e22ea0bb645ecdf6ef1d1039a45874346996070c1f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12dff7f01296a2474870352e04bec2491a913029395bd70b349da2db40de7079 = $this->env->getExtension("native_profiler");
        $__internal_12dff7f01296a2474870352e04bec2491a913029395bd70b349da2db40de7079->enter($__internal_12dff7f01296a2474870352e04bec2491a913029395bd70b349da2db40de7079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12dff7f01296a2474870352e04bec2491a913029395bd70b349da2db40de7079->leave($__internal_12dff7f01296a2474870352e04bec2491a913029395bd70b349da2db40de7079_prof);

    }

    // line 534
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3c8d727aa91962143e01e7ff80d89e4b92d087f10ad353a8a1267553c081270a = $this->env->getExtension("native_profiler");
        $__internal_3c8d727aa91962143e01e7ff80d89e4b92d087f10ad353a8a1267553c081270a->enter($__internal_3c8d727aa91962143e01e7ff80d89e4b92d087f10ad353a8a1267553c081270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        
        $__internal_3c8d727aa91962143e01e7ff80d89e4b92d087f10ad353a8a1267553c081270a->leave($__internal_3c8d727aa91962143e01e7ff80d89e4b92d087f10ad353a8a1267553c081270a_prof);

    }

    // line 535
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fcaac4bb8ae261b61d4ba7d8e2da75aee1915a90a5f73089b2c10d4df857b72 = $this->env->getExtension("native_profiler");
        $__internal_0fcaac4bb8ae261b61d4ba7d8e2da75aee1915a90a5f73089b2c10d4df857b72->enter($__internal_0fcaac4bb8ae261b61d4ba7d8e2da75aee1915a90a5f73089b2c10d4df857b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fcaac4bb8ae261b61d4ba7d8e2da75aee1915a90a5f73089b2c10d4df857b72->leave($__internal_0fcaac4bb8ae261b61d4ba7d8e2da75aee1915a90a5f73089b2c10d4df857b72_prof);

    }

    // line 547
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07dfc7890b2183cd49b9017c9f6ccd005503048d094f0799119ad4737aabceb1 = $this->env->getExtension("native_profiler");
        $__internal_07dfc7890b2183cd49b9017c9f6ccd005503048d094f0799119ad4737aabceb1->enter($__internal_07dfc7890b2183cd49b9017c9f6ccd005503048d094f0799119ad4737aabceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 548
        echo "        <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
        <script src=\"/web/js/bootstrap.min.js\"></script>
        <script src=\"/web/js/holder.js \"></script>
        ";
        
        $__internal_07dfc7890b2183cd49b9017c9f6ccd005503048d094f0799119ad4737aabceb1->leave($__internal_07dfc7890b2183cd49b9017c9f6ccd005503048d094f0799119ad4737aabceb1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  651 => 548,  645 => 547,  634 => 535,  623 => 534,  612 => 14,  600 => 13,  591 => 552,  589 => 547,  576 => 536,  573 => 535,  571 => 534,  170 => 136,  47 => 15,  45 => 14,  41 => 13,  27 => 1,);
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
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="/web/css/bootstrap-theme.min.css" rel="stylesheet">*/
/* */
/*         <title>{% block title %}LA fraicheur des 4 saisons!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="/web/Images/LFD4Sicon.ico"/>*/
/* */
/* */
/* */
/*         <link href="\web\css\Home.css" rel="stylesheet">*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/*     <body>*/
/*         _________________________________________________________*/
/*  <br />*/
/* */
/*         <!-- NAVBAR*/
/* ================================================== -->*/
/*         <div class="navbar-wrapper">*/
/*             <div class="container">*/
/* */
/*                 <div class="navbar navbar-inverse navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand" href="index.html">Accueil LFD4St</a>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li class="active"><a href="index.html">Home</a></li>*/
/*                                 <li><a href="about.html">About Us</a></li>*/
/*                                 <li><a href="contact.html">Contact</a></li>*/
/*                                 <li><a href="#Commande">Commande</a></li>*/
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Producteur <b class="caret"></b></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">Producteur</a></li>*/
/* */
/*                                     </ul>*/
/*                                 </li>*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">bio <b class="caret"></b></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="dropdown-header">produit</li>*/
/*                                         <li><a href="#">salade</a></li>*/
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
/*                             var myCenter=new google.maps.LatLng(51.508742,-0.120850);*/
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
/*                                 <a class="btn btn-lg btn-default" href={{ path('lfd4s_platform_cart')}} role="button" style="font-size:2em">Order Online Now &raquo;</a>*/
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
/*                    LA FD4S EST ......*/
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
/*                     <img class="img-circle" src="themes/assets/images/nepali-momo.png" alt="Generic placeholder image">*/
/*                     <h2>Nepalese MOMO</h2>*/
/*                     <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>*/
/*                     <p><a class="btn btn-default" href="#" role="button">&pound; 2.2 Add to cart &raquo;</a></p>*/
/*                 </div><!-- /.col-lg-4 -->*/
/*                 <div class="col-lg-4">*/
/*                     <img class="img-circle" src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                     <h2>Burger</h2>*/
/*                     <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>*/
/*                     <p><a class="btn btn-default" href="#" role="button">&pound;5 Add to cart &raquo;</a></p>*/
/*                 </div><!-- /.col-lg-4 -->*/
/*                 <div class="col-lg-4">*/
/*                     <img class="img-circle" src="themes/assets/images/gorkha-special-chicken.png" alt="Lam Tikka">*/
/*                     <h2>Gurkha Chicken</h2>*/
/*                     <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>*/
/*                     <p><a class="btn btn-default" href="#" role="button">&pound;4 Add to cart &raquo;</a></p>*/
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
/*                         <h1 class="cntr">We are launching complete online food order system for restaurent and takeaway Only at the rate <br>&pound;999 </h1>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         <div class="container marketing">*/
/*             <h2 class="itemsTitle">PRODUCTEUR/h2>*/
/*             <div id="myCarousel1" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
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
/*             <h2 class="itemsTitle">Lunch</h2>*/
/*             <div id="myCarousel2" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/chicken.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks_lussy.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/fish-and-chips.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
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
/*             <h2 class="itemsTitle">Dinner</h2>*/
/*             <div id="myCarousel3" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <div class="carousel-inner">*/
/*                     <div class="item active">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">*/
/*                                 <h4>Chicken</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/rice.png" alt="Generic placeholder image">*/
/*                                 <h4>Rice</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/courinder.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
/*                                 <h4>Meal</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/* */
/*                     </div>*/
/*                     <div class="item">*/
/*                         <div class="row">*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">*/
/*                                 <h4>Salates</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">*/
/*                                 <h4>Chicken</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                             <div class="col-lg-4">*/
/*                                 <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                                 <h4>Drink</h4>*/
/*                                 <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>*/
/*                             </div><!-- /.col-lg-4 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/*                 </div>*/
/*                 <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>*/
/*                 <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div><!-- /.carousel -->*/
/*         </div>*/
/* */
/* */
/*         <div class="highlightSection">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <div class="media">*/
/*                             <a href="menu/"><img src="themes/assets/images/nepali-momo.png" alt="nepali-momo"> </a>*/
/*                             <h3 class="media-heading text-primary-theme">NEPALESE LAMB MOMO</h3>*/
/*                             <p>Steamed dumplings filled with slightly spiced minced meat served with special sauce.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4">*/
/*                         <div class="media"><a href="menu/"><img src="themes/assets/images/gorkha-special-chicken.png" alt="GURKHA SPECIAL CHICKEN"> </a>*/
/*                             <h3 class="media-heading text-danger-theme">GURKHA SPECIAL CHICKEN</h3>*/
/*                             <p>Boneless chicken marinated in mustard, smoked chilli, herbs and spices slowly cooked in tandoor. </p>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4">*/
/*                         <div class="media">*/
/*                             <a href="menu/"><img src="themes/assets/images/lam-tikka.png" alt="Lam Tikka"> </a>*/
/*                             <h3 class="media-heading">LAMB TIKKA SPECIAL</h3>*/
/*                             <p>Tender pieces of lamb mixed with our own spices and gently cooked in clay oven. </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
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
/*                                 <img src="themes/assets/images/fish-and-chips.png" alt="Fish and Chips">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="item">*/
/*                         <div class="row featurette">*/
/*                             <div class="col-md-5">*/
/*                                 <img src="themes/assets/images/burger.png" alt="Generic placeholder image">*/
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
/*                                 <img class="img-circle" src="themes/assets/images/drinks.png" alt="Generic placeholder image">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.carousel -->*/
/*         </div><!-- /.container -->*/
/*         <!-- /END THE FEATURETTES -->*/
/* */
/* */
/*         <br  />*/
/*         _________________________________________________________*/
/*  <br  />*/
/*         {% block navigation %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*   ______________________________________________________*/
/*  <br  />*/
/*         footer<br  />*/
/*         <!-- FOOTER -->*/
/*         <footer>*/
/*             <div class="container">*/
/*                 <p class="pull-right"><a href="#">Back to top</a></p>*/
/*                 <p>&copy; 2018 LFD4S, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>*/
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
