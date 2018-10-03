        // FIXER LE MENU
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > document.getElementById("head").clientHeight || document.documentElement.scrollTop > document.getElementById("head").clientHeight) {
                document.getElementById("menu").className = "fixed";
                document.getElementById("bgOpacity").className = "opacity";
            } else {
                document.getElementById("menu").className = "unfixed";
                document.getElementById("bgOpacity").className = "opacityOff";
            }
        }
        // DEPLACEMENT MENU FLUIDE
        $(document).ready(function () {
            $('.scroll').on('click', function () {
                var page = $(this).attr('href');
                var speed = 750;
                $('html, body').animate({
                    scrollTop: $(page).offset().top
                }, speed);
                return false;
            });
        });
        // AFFICHAGE MENU EN FONCTION DE LA POSITION
        $(window).load(function () {
            var lastId,
                topMenu = $("#menu"),
                topMenuHeight = topMenu.outerHeight() + 15,
                menuItems = topMenu.find("a"),
                scrollItems = menuItems.map(function () {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

            $(window).scroll(function () {
                var fromTop = $(this).scrollTop() + topMenuHeight;
                var cur = scrollItems.map(function () {
                    if ($(this).offset().top < fromTop)
                        return this;
                });
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : "";

                if (lastId !== id) {
                    lastId = id;
                    menuItems
                        .parent().removeClass("active")
                        .end().filter("[href=#" + id + "]").parent().addClass("active");
                }
            });
        }); 
        // BARRE DE PROGRESSION
        $(function(){
            $(document).on('scroll',function(){
                var hauteur = $(document).height()-$(window).height();
                var position = $(document).scrollTop();
                var largeur = $(window).width();	
                var barre = position / hauteur * largeur;	
                $("#progress").css("width",barre);
            });
        });
        // MASQUER BARRE DE DEFILEMENT MODAL
        function openModal(element) {
            $('body').css('overflow', 'hidden');
        }
        function closeModal(element) {
            $('body').css('overflow', 'auto');
        }
