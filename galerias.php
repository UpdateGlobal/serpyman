<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("modulo/head.php"); ?>
    <style>
        $red: #AA3939;
$brand_orange: #D49A6A;
$menu_item_orange: #FFD1AA;
$dark_mint: #0D4D4D;
$darkest_mint: #373739;

.navbar-inverse {
  background-color: $red;
  border: none;
  .navbar-nav {
    > li > a {
      &,
      &:hover {
      color: $menu_item_orange;
      }
    }
    > .active > a { 
      &,
      &:hover,
      &:focus {
        color: $menu_item_orange;
        background: darken($red, 15%);
      }
    }
   }  
  .navbar-brand {
    &,
    &:hover {
    color: $brand_orange;
    //font-weight: bold;
    }
  }
  .navbar-toggle {
    border: 3px solid darken($red, 15%);
    &:hover{
      background-color: lighten($red, 25%);
    }
    &:focus {
      background-color: lighten($red, 10%);
    }
    .icon-bar {
      background-color: darken($red, 15%);
    }
  }
}

body {
  margin-top: 7rem;
  background-color: $dark_mint;
}

.filter-button-group {
  padding: 15px;
}

.btn.btn-default {
  padding: 1rem 0;
  font-size: 1.7rem;
  background-color: lighten($dark_mint, 10%);
  border-color: $darkest_mint;
 //border: none;
  border-radius: 0;
  &:hover,
  &:active, 
  &:focus,
  &.is-checked{
    background-color: darken($dark_mint, 5%);
    color: white ;
    border: none;
    outline: none;
  }
}

.thumbnail {
  border-radius: 0px;
  border: 0px;
  padding: 0px;
}

//customise modal

a.pp_play,
a.pp_arrow_previous,
a.pp_arrow_next,
a.pp_close{
  display: none;
}

//.pp_social { float: left; margin: 0; width:450px;}
.pp_social .twitter { float: left; width: 60px; }
.pp_social .facebook { float: left; margin-left: 15px; width: 80px; overflow: hidden;}

.pp_nav {
  margin-top: 0;
}
    </style>
</head>
<body>
<div class="page-wrapper">
    <?php include ('modulo/menu.php'); ?>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(/img/serpyman_head.png);">
        <div class="auto-container text-right">
            <h1>Serpyman / Galer&iacute;as</h1>
            <ul class="bread-crumb"><li><a href="/index.php">Home</a></li> <li>Galer&iacute;as</li></ul>
        </div>
    </section>
    <!-- Page Banner -->
    <!--contenido de servicios-->
    <!--Servicios-->
    <section class="portfolio section-padding pb-0" style="background-color: #f7f7f7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title" align="left">
                        <h2>Galer&iacute;a <span>Serpyman</span></h2>
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MY WEBSITE</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">About</a>
                </li>
                <li class="active">
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container">
  <!--filtering-->

<div class="btn-group btn-group-justified filter-button-group" role="group" aria-label="filterImages">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default is-checked" data-filter="*">All</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" data-filter=".people">People</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" data-filter=".nature">Nature</button>
  </div>
</div>  
  <div class="grid">
    <div class="grid-sizer col-xs-12 col-sm-6 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><a class="prettyphoto" href="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228325/Venice_USA_jc7bsq.jpg" rel="prettyPhoto[portfolio]"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228325/Venice_USA_jc7bsq.jpg" alt="Venice beach, California."></a></div>
     <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><a class="prettyphoto" href="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247984/_DSC2757_uztioi.jpg" rel="prettyPhoto[portfolio]"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247984/_DSC2757_uztioi.jpg" alt="Aurora over Svalbard archipelago, Norway."></a></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><a class="prettyphoto" href="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247785/DSCF2474_hjhodu.jpg" rel="prettyPhoto[portfolio]"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247785/DSCF2474_hjhodu.jpg" alt="Flying around Mt. Everest, Nepal."></a></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228326/Polar_night_in_Longyearbyen_Svalbard_bgq55i.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228325/Mosque_in_Samarkand_Uzbekistan_ym9kzo.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228325/In_a_dessert_Southern_Kazakhstan_ylwjbl.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228324/Ho_Chi_Mihn_Vietnam_jwdqxd.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228324/Wellington_New_Zealand_cwvqfz.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Mangawhai_New_Zealand_ftmvhv.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Wellington_New_Zealand_2_bwxicu.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Kuan_Yin_Thong_Hood_Cho_Temple_Penang_e6vys6.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Wellington_New_Zealand_4_u11nld.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Wellington_New_Zealand_3_ghuumw.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247813/_DSC3321_copy_rzjopt.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item people"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464228323/Wellington_New_Zealand_1_cezblk.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247813/_DSC1457_cdoncu.jpg" alt=""></div>
    <div class="col-xs-12 col-sm-6 col-md-4 grid-item nature"><img class="thumbnail img-responsive" src="https://res.cloudinary.com/debtiw4tn/image/upload/v1464247786/DSCF2489_iz6wkx.jpg" alt=""></div>
  </div>
</div>

                    
                </div>
            </div>
        </div>
    </section>
    <!--Servicios-->
    <?php include ('modulo/footer.php') ?>
    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/prettyphoto/3.1.6/js/jquery.prettyPhoto.js"></script>
    <script>
//need this to deactivate lightbox on small screens
$(document).ready(function () {
  
  lightboxOnResize();
 
});

$(window).resize(function() {
  lightboxOnResize();

});

//***ISOTOPE***
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  layoutMode: 'masonry'
});

// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});



/*
$('#filters a').on("click", function(){
  var selector = $(this).attr('data-filter'); 
  $('#container').isotope({ filter: selector }, function(){
    if(selector == "*"){
     $(".fancybox").attr("data-fancybox-group", "gallery");
    } else{ 
     $(selector).find(".fancybox").attr("data-fancybox-group", selector);
    }
  });
  return false;
});
*/



// change is-checked class on buttons
$('.btn-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

//***LIGHTBOX***
//https://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/documentation
// $(document).delegate('a[rel="prettyPhoto[portfolio]"]', 'click', function(event) {
//     event.preventDefault();
//     $(this).prettyPhoto({
//       theme: "light_square",
//     });
// }); 

function lightboxOnResize() {
  
  if ($(window).width() < 768) {
       
        $('a[rel="prettyPhoto[portfolio]"]')
            .removeAttr('rel')
            .addClass('lightboxRemoved');
      
 $('a.lightboxRemoved').click(function( event ) {
        event.preventDefault();
   console.log("test");
      });
     // $("a[rel='prettyPhoto[portfolio]']").unbind('click');
    
    } else {
        
       $('a.lightboxRemoved').attr('rel', 'prettyPhoto[portfolio]').removeClass("lightboxRemoved");
       $("a[rel='prettyPhoto[portfolio]']").prettyPhoto({
         theme: "light_square",
       });
        
    }
}


    </script>
</div>
</body>
</html>