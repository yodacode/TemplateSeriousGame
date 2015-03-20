<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Idea Pro</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/icomoon.css">
  <link rel="stylesheet" type="text/css" href="css/front.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<body>

<div class="site-container">
  <div class="site-pusher">
    <header class="header">
      <nav class="navbar navbar-default">
        <section class="container">
          <!-- Brand and toggle get grouped for better mobile display -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Dashboard</a></li>
              <li><a href="#">Mon activite</a></li>
              <li><a href="#">Le blog</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs hidden-sm"><img src="http://placehold.it/35x35" alt="avatar" class="img-circle img-thumbnail"/></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Benjamin de Vaublanc <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Mon compte</a></li>
                  <li><a href="#">Mon activité</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Déconnexion</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="icon-precious icon-bordered red"></i> <span>12312432</span></a> </li>
              <li class="active hidden-xs">
                <a href="#" data-btn-notif class="btn-notif">
                  <i class="icon-notification5"></i>
                  <span class="pills">3</span>
                </a>
              </li>
            </ul>
          </section><!-- /.navbar-collapse -->

        </section><!-- /.container-fluid -->
      </nav>

      <div class="site-notif">
        <a href="#">Link <span class="sr-only">(current)</span></a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
      </div>

    </header>

    <div class="site-content">
      <section data-wizard data-wizard-step="3" data-wizard-bg="images/bg-wizard"></section>

      <section class="container-fluid">

        <section class="main col-md-9">

          <section class="idea-detail">
            <section class="idea-detail-author">
              <section class="user">
                <section class="user-avatar">
                  <img src="http://placehold.it/50x50" alt="avatar" class="img-circle img-thumbnail">
                </section>
                <section class="user-content">
                  <section class="user-username"><a href="#">Etienne Datcharry</a></section>
                  <section class="user-gems">
                    <i class="icon-precious icon-bordered red"></i> 231 gems
                  </section>
                </section>
                <section class="user-rank">place 42</section>
              </section>
            </section>
            <figure class="idea-detail-picture">
              <img src="images/detail-idea.png" alt="picture detail" />
              <section class="votes">
                <section class="votes-content">
                  <section class="votes-up">
                   <a href="#"><span data-votes-up>321</span> <i class="glyphicon glyphicon-thumbs-up"></i></a>
                  </section>
                  <section class="votes-down">
                   <a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> <span data-votes-up>42342</span></a>
                  </section>
                  <section class="votes-progress-bar">
                    <section class="votes-progress">
                    </section>
                  </section>
                </section>
              </section>
            </figure>
            <section class="idea-detail-content">
              <section class="col-md-3 idea-detail-popularity">
                <img src="images/popular-3.png"/>
              </section>
              <section class="col-md-9 idea-detail-description">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  <br><br>
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </section>
              <section class="col-md-12 idea-detail-tags">
                <span class="label label-default">connected</span> <span class="label label-default">posey</span>
              </section>
            </section>
          </section>

          <section class="comment">
            <?php for ($i=0; $i < 3; $i++) : ?>
              <section class="comment-item row">
                <section class="comment-avatar col-md-1">
                    <img src="http://placehold.it/50x50" alt="avatar" class="img-circle img-thumbnail">
                </section>

                <section class="col-md-11">
                  <span class="comment-username">Jean Martin</span>
                  <span class="comment-date">il y a un jour</span>
                </section>
                <section class="col-md-11 comment-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  </p>
                </section>

                <section class="comments-votes col-md-12">
                   <a href="#" class="active"><i class="glyphicon glyphicon-thumbs-up"></i> <span data-votes-up>321</span></a>
                   <a href="#"><span data-votes-up>42342</span> <i class="glyphicon glyphicon-thumbs-down"></i></a>
                </section>
              </section>
            <?php endfor; ?>
          </section>

          <section
            data-widget-pitch
            data-widget-color="default"
            data-widget-title="Le pitch"
            data-widget-class="widget-pitch"
            data-widget-icon="icon-referee">
            <section data-widget-content>
              <p>
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru
              </p>
            </section>
          </section>

          <section class="feed">
            <div class="feed-header">
                <button class="btn btn-default btn-danger btn-thinder"><i class="icon-magic-wand"></i> J'ai de la chance</button>
                <div class="dropdown clearfix ">
                  <button class="btn btn-default dropdown-toggle btn-filter" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
                    Filtrer
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                    <li class="dropdown-header">Filtres</li>
                    <li><a href="#">Les dernières mise à jour</a></li>
                    <li><a href="#">Les plus likées</a></li>
                    <li><a href="#">Les plus commentées</a></li>
                    <li><a href="#">Les plus récentes</a></li>
                  </ul>
                </div>
            </div>

            <section class="feed-list row" data-feed-list data-feed>
              <article class="idea feed-item col-md-4" data-feed-item>
                <div class="idea-avatar">
                  <img src="http://placehold.it/50x50" alt="avatar" class="img-circle img-thumbnail">
                </div>
                <div class="idea-theme">
                  Theme
                </div>
                <figure class="idea-picture">
                  <img src="images/default-idea-picture.png" alt="idea picture" />
                </figure>
                <div class="idea-author">
                  by Ofer Attali
                </div>
                <div class="idea-gems">
                  <div class="gems-score">3489734</div>
                  <div class="circle">
                    <div class="circle-content"><i class="icon-precious icon-bordered red"></i></div>
                  </div>
                </div>
                <section class="idea-description">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br><br>
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                  <span class="label label-default">Connected</span> <span class="label label-default">Innovation</span>
                </section>
                <section class="idea-btn text-center">
                  <a href="#" class="btn btn-default">Découvrir</a>
                </section>
                <section class="votes">
                  <section class="votes-content">
                    <section class="votes-up">
                     <a href="#"><span data-votes-up>321</span> <i class="glyphicon glyphicon-thumbs-up"></i></a>
                    </section>
                    <section class="votes-down">
                     <a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> <span data-votes-up>42342</span></a>
                    </section>
                    <section class="votes-progress-bar">
                      <section class="votes-progress">
                      </section>
                    </section>
                  </section>
                </section>
              </article><!-- .idea -->
            </section>

            <button class="btn btn-block btn-default btn-lg feed-more" data-feed-more>Plus d'idées <i class="glyphicon glyphicon-chevron-down"></i></button>
          </section><!-- .feed -->
        </section><!-- .main -->

        <aside class="sidebar col-md-3">

            <section 
              data-widget-invest
              data-widget-color="success"
              data-widget-title="Investir sur cette idée"
              data-widget-class="widget-invest"
              data-widget-icon="icon-precious">
              <section data-widget-content>
                <section class="widget-invest-precious"><i class="icon-precious"></i> </section>


                <section class="widget-invest-gems">
                  <span data-gems-counter class="gems-counter">465787</span> <span class="gems-label">gems</span>
                </section>

                <section class="widget-invest-time">
                  <i class="icon-clock"></i>
                  <span class="time" data-time-days>10</span> <span>Jours</span>
                  <span class="time" data-time-hours>15</span> <span>Heures</span>
                </section>
                 
                <input type="range" min="0" max="23454" value="0" data-widget-invest-rangeslider class="data-widget-invest-rangeslider">
              </section>
            </section>

            <section
              data-widget-timeline
              data-widget-color="primary"
              data-widget-title="Temps restants"
              data-widget-class="widget-timeline"
              data-widget-icon="icon-clock">
              <section data-widget-content>
                <div class="widget-timeline-progress" data-widget-remaining-progress></div>
                <section class="widget-timeline-time">
                  <span class="time" data-time-days>10</span> <span>Jours</span>
                  <span class="time" data-time-hours>15</span> <span>Heures</span>
                </section>
                <section class="widget-timeline-label">
                  Avant la fin de la phase de vote (phase 2)
                </section>

              </section>
            </section>



            <section
              data-widget-tips
              data-widget-color="default"
              data-widget-title="Trucs"
              data-widget-class="widget-tips"
              data-widget-scroll="true"
              data-widget-icon="icon-wink">
              <section data-widget-content>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
                <p>tips</p>
              </section>
            </section>

            <section data-widget-test data-widget-color="default" data-widget-title="widget de test" data-widget-icon="icon-clock" data-widget-content="met Lorem ipsum dolor sit amet"></section>


            <section
              data-widget-user-ranking
              data-widget-color="primary"
              data-widget-title="Ma position dans le classement"
              data-widget-class="widget-user-ranking"
              data-widget-scroll="true"
              data-widget-icon="icon-game42">
              <section data-widget-content>
                <?php for ($i=0; $i < 10; $i++) : ?>
                  <section class="user">
                    <section class="user-avatar">
                      <img src="http://placehold.it/50x50" alt="avatar" class="img-circle img-thumbnail">
                    </section>
                    <section class="user-content">
                      <section class="user-username"><a href="#">Etienne Datcharry</a></section>
                      <section class="user-gems">
                        <i class="icon-precious icon-bordered red"></i> 231 gems
                      </section>
                    </section>
                    <section class="user-rank">place 42</section>
                  </section>
                <?php endfor; ?>

              </section>
            </section>

            <section
              data-widget-ideas-last
              data-widget-color="primary"
              data-widget-title="Les dernières idées"
              data-widget-class="widget-ideas-last"
              data-widget-scroll="true"
              data-widget-icon="icon-bulb">
              <section data-widget-content>
                <?php for ($i=0; $i < 10; $i++) : ?>
                  <section class="user">
                    <section class="user-avatar">
                      <img src="http://placehold.it/50x50" alt="avatar" class="img-circle img-thumbnail">
                    </section>
                    <section class="user-content">
                      <section class="user-username"><a href="#">Etienne Datcharry</a></section>
                      <section class="user-gems">
                        <i class="icon-precious icon-bordered red"></i> 231 gems
                      </section>
                    </section>
                    <section class="user-date">12/10/2015</section>
                    <section class="user-ideas">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua...
                      </p>
                      <a href="" class="btn btn-default">Découvrir</a>
                    </section>
                  </section>
                <?php endfor; ?>
              </section>
            </section>
        </aside><!-- .sidebar -->

      </section>

    </div>

    <div data-site-cache class="site-cache"></div>

  </div>
</div>

</body>

  <script type="text/javascript" src="js/front.dist.js"></script>
</body>
</html>