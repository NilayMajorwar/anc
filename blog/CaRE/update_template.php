<?php
  if(!file_exists("../data.json")){
    echo "Blog data not found!";
  } else {
    $myfile = fopen("../data.json", "r");
    $data_json = fread($myfile, filesize("../data.json"));
    $data = json_decode($data_json);
    fclose($myfile);
?>
<!DOCTYPE html>
<html lang="zxx" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141882297-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-141882297-1');
  </script>
  <title>
    Update Blog
  </title>
  <meta charset="UTF-8" />
  <meta name="description"
    content="The Academics and Career Council of the Indian Institute of Technology, Kanpur is a council directly placed under the Student's Gymkhana that aims to foster all needs related to academics and research for the campus dwellers. " />
  <meta property="og:image" content="img/cover.png" />
  <meta name="keywords"
    content="academic, research, cell, anc, iit kanpur, college, study, science, gymkhana, academics, career, future" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link href="../../../../img/favicon.ico" rel="shortcut icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../../../css/magnific-popup.css" />
  <link rel="stylesheet" href="../../../../css/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="../../admin/styles.css">
  <link rel="stylesheet" href="../../../../css/style.css" />
  <link rel="stylesheet" href="../../../../css/animate.css" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="container">
      <a href="../../../../index.html" class="site-logo">
        <img src="../../../../img/anc-logo.png" alt="logo" height="100px" width="100px" />
        <!-- <h1>Academics and Career Council</h1> -->
      </a>
      <!-- Switch button -->
      <div class="nav-switch">
        <div class="ns-bar"></div>
      </div>
      <div class="header-right">
        <ul class="main-menu">
          <li><a href="../../../../index.html">Home</a></li>
          <li><a href="../../../../about.html">Academics</a></li>
          <li><a href="../../../../service.html">Research</a></li>
          <li><a href="../../../../ir.html">Int. Relations</a></li>
          <li><a href="../../../../crdev.html">Career Dev.</a></li>
          <li class="active"><a href="../../../">Blogs</a></li>
          <li><a href="../../../../contact.html">Contact</a></li>
          <!-- <li><a href="src">SRC</a></li> -->
        </ul>
      </div>
    </div>
  </header>
  <!-- Header section end -->

  <!-- Page Top section -->
  <section class="page-top-section set-bg" data-setbg="../../../img/page-top-bg/6.jpg">
    <div class="container hero-title">
      <h2>Update Blog</h2>
    </div>
  </section>
  <!-- Page Top section end -->

  <!-- Services section -->
  <section class="blog-section spad">
    <div class="container">
      <div class="blog-post">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="blog" data-editor="ClassicEditor" data-collaboration="false">
                <main>
          <div class="centered">
            <form action="update.php" method="post" enctype="multipart/form-data">
              <h3 style="float:left;margin-right: 10px">Title: </h3>
              <input type="text" value="<?php echo $data->title?>" id="title" name="title" required>
              <br/><br/>
              <h3 style="float:left;margin-right: 10px">Date: </h3>
              <input type="text" value="<?php echo $data->date?>" id="date" name="date" placeholder="Eg: Jul 01, 2020" required>
              <br/><br/>
              <h3 style="float:left;margin-right: 10px">Intro: </h3>
              <textarea id="intro" name="intro" rows="4" cols="30" required><?php echo $data->intro?></textarea>
              <br/><br/>
              <h3 style="float:left;margin-right: 10px">Content: </h3>
              <br/><br/>
              <div class="row row-editor">
                <textarea class="editor" name="content" id="content">
                  <?php echo $data->content?>
                </textarea>
              </div>
              <br/>
              <center>
              <input type="submit">
              </center>
            </form>
          </div>
        </main>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="../../build/ckeditor.js"></script>
  <script>ClassicEditor
      .create( document.querySelector( '.editor' ), {
        
        toolbar: {
          items: [
            'heading',
            '|',
            'bold',
            'italic',
            'underline',
            'alignment',
            'link',
            'bulletedList',
            'numberedList',
            '|',
            'indent',
            'outdent',
            '|',
            'imageUpload',
            'blockQuote',
            'insertTable',
            'mediaEmbed',
            'undo',
            'redo',
            'code',
            'codeBlock',
            'fontBackgroundColor',
            'fontColor',
            'fontSize',
            'horizontalLine',
            'subscript',
            'superscript'
          ]
        },
        language: 'en',
        image: {
          toolbar: [
            'imageTextAlternative',
            '|',
            'imageStyle:full',
            'imageStyle:alignLeft',
            'imageStyle:alignCenter',
            'imageStyle:alignRight'
          ],
          styles: [
                    'full',
                    'alignLeft',
                    'alignCenter',
                    'alignRight',
                ]
        },
        table: {
          contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells'
          ]
        },
        licenseKey: '',
        link: {
                addTargetToExternalLinks: true
            },
            ckfinder: {
                uploadUrl: 'https://anciitk.in/blog/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
            },
            mediaEmbed: {
                toolbar: [
                  "mediaStyle:full",
                  "|",
                  "mediaStyle:alignLeft",
                  "mediaStyle:alignCenter",
                  "mediaStyle:alignRight",
                ],
                styles: ["full", "alignLeft", "alignCenter", "alignRight"]
              },
      } )
      .then( editor => {
        window.editor = editor;
      } )
      .catch( error => {
        console.error( 'Oops, something gone wrong!' );
        console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
        console.warn( 'Build id: x2dqmi5n45qb-rdtgl4lls2b7' );
        console.error( error );
      } );
  </script>

  <!--====== Javascripts & Jquery ======-->
  <script src="../../../../js/jquery-3.2.1.min.js"></script>
  <script src="../../../../js/bootstrap.min.js"></script>
  <script src="../../../../js/owl.carousel.min.js"></script>
  <script src="../../../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../../../js/circle-progress.min.js"></script>
  <script src="../../../../js/main.js"></script>
</body>

</html>
<?php } ?>