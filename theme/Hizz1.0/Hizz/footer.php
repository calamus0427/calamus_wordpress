            <footer>
                <div>© <?php the_time('Y') ?> 「<?php bloginfo('name'); ?>」</div>
                <div>Theme By <a href="http://ztomo.com/downloads/hizz" target="_blank">Hizz</a>
<span>基于 &nbsp;<a href="https://cn.wordpress.org/" target="_blank">WordPress</a>
搭建
</span>
                </div>
            </footer>
        </div>
    </body>
<a id="back_to_top" href="#" class="back_to_top"><span>▲</span>
</a>
    <script>
    $(document).ready((function (_this) {
        return function () {
            var bt;
            bt = $('#back_to_top');
            if ($(document).width() > 480) {
                $(window).scroll(function () {
                    var st;
                    st = $(window).scrollTop();
                    if (st > 30) {
                        return bt.css('display', 'block');
                    } else {
                        return bt.css('display', 'none');
                    }
                });
                return bt.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            }
        };
    })(this));
    </script>
    <script>
$(document).ready(function() { 
$.fn.postLike = function() {
 if ($(this).hasClass('done')) {
 return false;
 } else {
 $(this).addClass('done');
 var id = $(this).data("id"),
 action = $(this).data('action'),
 rateHolder = $(this).children('.count');
 var ajax_data = {
 action: "bigfa_like",
 um_id: id,
 um_action: action
 };
 $.post("<?php echo get_option('home'); ?>/wp-admin/admin-ajax.php", ajax_data,
 function(data) {
 $(rateHolder).html(data);
 });
 return false;
 }
};
$(document).on("click", ".favorite",
function() {
 $(this).postLike();
});
}); 
    </script>
</html>