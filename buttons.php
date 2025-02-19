<!DOCTYPE html>
<html>
  <head>
    <title>Registrar Profesores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="inicio.php">CELEX ENCB</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">

                  </div>
                </div>
             </div>
             
          </div>
       </div>
  </div>

    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="inicio.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.php"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.php"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.php"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li class="current"><a href="RegistrarPagos.php"><i class="glyphicon glyphicon-tasks"></i> Registrar Pagos</a></li>
                    <li class="current"><a href="RegistrarProfesores.php"><i class="glyphicon glyphicon-tasks"></i> Registrar Profesores</a></li>              
                </ul>
             </div>
      </div>
		  <div class="col-md-10">

          <div class="row">
          <div class="col-md-6">
            <div class="content-box-large">
              <div class="panel-body">
                    <h4>Extra Small Buttons</h4>
                    <p>
                      <button class="btn btn-default btn-xs">Default</button>
                      <button class="btn btn-primary btn-xs">Primary</button>
                      <button class="btn btn-info btn-xs">Info</button>
                      <button class="btn btn-success btn-xs">Success</button>
                      <button class="btn btn-warning btn-xs">Warning</button>
                      <button class="btn btn-danger btn-xs">Danger</button>
                    </p>
                    <h4>Small Buttons</h4>
                    <p>
                      <button class="btn btn-default btn-sm">Default</button>
                      <button class="btn btn-primary btn-sm">Primary</button>
                      <button class="btn btn-info btn-sm">Info</button>
                      <button class="btn btn-success btn-sm">Success</button>
                      <button class="btn btn-warning btn-sm">Warning</button>
                      <button class="btn btn-danger btn-sm">Danger</button>
                    </p>
                    <h4>Normal Buttons</h4>
                    <p>
                      <button class="btn btn-default">Default</button>
                      <button class="btn btn-primary">Primary</button>
                      <button class="btn btn-info">Info</button>
                      <button class="btn btn-success">Success</button>
                      <button class="btn btn-warning">Warning</button>
                      <button class="btn btn-danger">Danger</button>
                    </p>
                    <h4>Large Buttons</h4>
                    <p>
                      <button class="btn btn-default btn-lg">Default</button>
                      <button class="btn btn-primary btn-lg">Primary</button>
                      <button class="btn btn-info btn-lg">Info</button>
                      <button class="btn btn-success btn-lg">Success</button>
                      <button class="btn btn-warning btn-lg">Warning</button>
                      <button class="btn btn-danger btn-lg">Danger</button>
                    </p>

                    <div class="well" style="margin-top:30px;">
                        <button type="button" class="btn btn-lg btn-block btn-primary">Block level Primary button</button>
                        <button type="button" class="btn btn-lg btn-block btn-default">Block level Default button</button>
                      </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="content-box-large">
              <div class="panel-body">
                <h4>Button Dropdowns</h4>
                <p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Default <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      Primary <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      Info <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                      Success <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Warning <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                      Danger <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </p>

                <h4>Split Button Dropdowns</h4>
                <p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </p>

                <h4>Buttons With Icons</h4>
                <p>This is an example buttons with icons. About 140 icons are available.</p>
                <p>
                      <button class="btn btn-default"><i class="glyphicon glyphicon-eye-open"></i> View</button>
                      <button class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i> Update</button>
                      <button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                      <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                </p>

                <p>And there this is a toolbar icon example</p>
                <p>
                      <div class="btn-group">
                        <button class="btn btn-default"><i class="glyphicon glyphicon-step-backward"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-fast-backward"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-backward"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-play"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-pause"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-stop"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-forward"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-fast-forward"></i></button>
                        <button class="btn btn-default"><i class="glyphicon glyphicon-step-forward"></i></button>
                      </div>
                </p>


              </div>
            </div>
          </div>

        </div>

      <!-- Icons -->
      <div class="row">
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title ">Available Icons</div>
            
              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>
            </div>
            <div class="content-box-large box-with-header">
              <ul class="bs-glyphicons">
                <li>
                  <span class="glyphicon glyphicon-adjust"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-align-center"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-align-justify"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-align-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-align-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-arrow-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-arrow-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-arrow-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-arrow-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-asterisk"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-backward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-backward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-ban-circle"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-barcode"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-bell"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-bell</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-bold"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-bold</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-book"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-book</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-bookmark"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-briefcase"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-bullhorn"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-camera"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-camera</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-certificate"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-check"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-check</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-chevron-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-chevron-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-circle-arrow-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-circle-arrow-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-circle-arrow-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-circle-arrow-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-cloud"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-cloud-download"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-cloud-upload"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-cog"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-cog</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-collapse-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-collapse-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-comment"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-comment</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-compressed"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-copyright-mark"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-credit-card"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-cutlery"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-dashboard"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-download"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-download</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-download-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-earphone"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-edit"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-edit</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-eject"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-eject</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-envelope"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-euro"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-exclamation-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-expand"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-expand</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-export"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-export</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-eye-close"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-eye-open"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-facetime-video"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-fast-backward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-fast-forward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-file"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-file</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-film"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-film</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-filter"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-filter</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-fire"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-fire</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-flag"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-flag</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-flash"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-flash</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-floppy-disk"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-floppy-open"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-floppy-remove"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-floppy-save"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-floppy-saved"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-folder-close"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-font"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-font</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-forward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-forward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-fullscreen"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-gbp"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-gift"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-gift</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-glass"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-globe"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-globe</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hand-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hand-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hand-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hand-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hd-video"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-hdd"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-header"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-header</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-headphones"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-heart"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-heart-empty"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-home"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-home</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-import"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-import</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-inbox"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-indent-left"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-indent-right"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-info-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-italic"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-italic</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-leaf"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-link"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-link</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-list"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-list</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-list-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-lock"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-lock</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-log-in"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-log-out"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-magnet"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-minus"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-minus-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-move"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-move</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-music"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-music</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-new-window"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-off"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-off</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-ok"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-ok</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-ok-circle"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-ok-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-open"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-open</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-paperclip"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-pause"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-pause</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-pencil"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-phone"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-phone</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-phone-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-picture"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-picture</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-plane"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-plane</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-play"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-play</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-play-circle"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-plus"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-plus-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-print"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-print</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-pushpin"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-qrcode"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-question-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-random"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-random</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-record"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-record</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-refresh"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-registration-mark"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-remove"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-remove</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-remove-circle"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-remove-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-repeat"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-resize-full"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-resize-horizontal"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-resize-small"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-resize-vertical"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-retweet"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-road"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-road</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-save"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-save</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-saved"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-saved</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-screenshot"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sd-video"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-search"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-search</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-send"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-send</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-share"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-share</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-share-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-signal"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-signal</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-attributes"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-order"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sound-5-1"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sound-6-1"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sound-7-1"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sound-dolby"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-sound-stereo"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-star</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-stats"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-stats</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-step-backward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-step-forward"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-stop"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-stop</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-subtitles"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tag"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tag</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tags"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tags</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tasks"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-text-height"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-text-width"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-th"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-th</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-th-large"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-th-list"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-thumbs-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-time"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-time</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tint"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tint</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tower"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tower</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-transfer"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-trash</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tree-conifer"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-tree-deciduous"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-unchecked"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-upload"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-upload</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-usd"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-usd</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-user"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-user</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-volume-down"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-volume-off"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-volume-up"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-warning-sign"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-zoom-in"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                </li>
                <li>
                  <span class="glyphicon glyphicon-zoom-out"></span>
                  <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                </li>
              </ul>
            </div>
          </div>
      </div>
      <!-- Icons -->

		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <script src="js/custom.js"></script>
  </body>
</html>