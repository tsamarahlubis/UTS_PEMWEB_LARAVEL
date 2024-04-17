// 1. Isotope JS
document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.isotope-wrapper');
    var iso = new Isotope(grid, {
        itemSelector: '.isotope-item',
        layoutMode: 'masonry'
    });

    var filterButtons = document.querySelectorAll('.isotope-btn button');

    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var filterValue = this.getAttribute('data-filter');

            if (filterValue === 'all') {
                iso.arrange({
                    filter: '*'
                });
            } else {
                iso.arrange({
                    filter: filterValue
                });
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.isotope-video-wrapper');
    var iso = new Isotope(grid, {
        itemSelector: '.isotope-video-item',
        layoutMode: 'fitRows'
    });

    var filterButtons = document.querySelectorAll('.isotope-btn button');

    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var filterValue = this.getAttribute('data-filter');

            if (filterValue === 'all') {
                iso.arrange({
                    filter: '*'
                });
            } else {
                iso.arrange({
                    filter: filterValue
                });
            }
        });
    });
});

// 2. Navbar
const menuToggle = document.querySelector('#dropdownBtn')
    const nav = document.querySelector('#dropdownList')
    const tutup = document.querySelector('#closeBtn')

    menuToggle.addEventListener('click', function() {
        // nav.classList.toggle('')
        nav.classList.remove('hidden')
    });

    tutup.addEventListener('click', function() {
        nav.classList.add('hidden')
    });

    document.addEventListener('click', (event) => {
            if (!menuToggle.contains(event.target) && !nav.contains(event.target)) {
                // nav.classList.remove('slide');
                nav.classList.add('hidden');
            }
});

//3. Magnific PopUp Image
$('.popup-image').magnificPopup({
    type: 'image',
    gallery: {
        enabled: false
    }
});

// 4. Magnific PopUp Video
$(".popup-video").magnificPopup({
    type: "iframe",
 });

//  5. Wow JS
var wow = new WOW(
    {
      mobile: false,
    }
  );
  wow.init();
var windowOn = $(window);

// 6. Pesan
function closeMessage() {
    var message = document.getElementById('message');
    message.style.display = 'none';
}

document.addEventListener('click', function(event) {
    var message = document.getElementById('message');
    if (message && event.target !== message && !message.contains(event.target)) {
        message.style.display = 'none';
    }
});