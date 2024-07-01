    <!-- Jquery js -->
    <script src="<?=base_url('/assets/js/jquery-3.7.1.min.js');?>"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="<?=base_url('/assets/js/boostrap.bundle.min.js');?>"></script>
    <!-- CountDown -->
    <!-- <script src="<?=base_url('/assets/js/countdown.js');?>"></script> -->
    <!-- counter up -->
    <script src="<?=base_url('/assets/js/counterup.min.js');?>"></script>
    <!-- Slick js -->
    <script src="<?=base_url('/assets/js/slick.min.js');?>"></script>
    <!-- magnific popup -->
    <script src="<?=base_url('/assets/js/jquery.magnific-popup.js');?>"></script>
    <!-- apex chart -->
    <script src="<?=base_url('/assets/js/apexchart.js');?>"></script>

    <!-- main js -->
    <script src="<?=base_url('/assets/js/main.js');?>"></script>

    <script>
var timer;

function debounce() {
    clearTimeout(timer);
    timer = setTimeout(function() {
        $(".mega-menue-active").removeClass('mega-menue-active');
    }, 300);
}


// function activateTab(){
//     const url = new URL(window.location.href);
    
//     if(url.hash){
//         let element = document.getElementById(url.hash.toString());
//         console.log(element);
//         // const element = document.getElementById(url.hash.toString());
//         console.log('URL  found '+element);
//         console.log('URL  found '+url.hash);

//     $(url.hash.toString()).tab('show')
//     }else{
//         console.log('URL ash not found '+url.hash);
//     }

// }

function activateTab() {
  const url = new URL(window.location.href);
  const hash = url.hash.toString();

  if (hash) {
    const element = document.getElementById(hash.substring(1)); // remove the leading '#'
    if (element) {
      console.log('Element found:', element);
      $(element).show(); // assumes jQuery and Bootstrap
    } else {
      console.log('Element not found:', hash);
    }
  } else {
    console.log('No hash found');
  }
}

$(document).ready(function() {
    $('.custom-mega-menu').removeClass('mega-menue-active');
    $(".custom-mega-menu").mouseenter(function() {
        clearTimeout(timer);
    });

    $(".custom-mega-menu").mouseleave(function() {
        debounce();
    });

    $('[data-maga-menu]').hover(function() {
      $(".mega-menue-active").removeClass('mega-menue-active');
        // hover over
        let id = $(this).data('magaMenu');
        $('#' + id).addClass('mega-menue-active');
        clearTimeout(timer);
    }, function() {
        // hover out
        debounce();
    });
    function scrollIntoView(container) {
    const element = document.getElementById(container);
    if (element) {
        console.log(element);
        element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });;
    } else {
        console.error("Element with id 'tabcontainer' not found.");
    }
}

scrollIntoView('tabcontainer');
    activateTab();



});
    </script>