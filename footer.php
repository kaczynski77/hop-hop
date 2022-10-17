<?php wp_footer(); ?>

<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="checkoutModalLabel">Checkout</h4>
            </div>
            <div class="modal-body">
                <div id="checkOutPageContent">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function customCheckout(event) {
    var wp_ajax_url = "<?php echo site_url();?>/wp-admin/admin-ajax.php";
    var data = {
        action: 'getCheckoutPageContent',
        product_id: jQuery(event.target).data('productid'),
        quantity: 1
    };

    jQuery.post(wp_ajax_url, data, function(content) {
        jQuery("#checkOutPageContent").html(content);
        jQuery("#checkoutModal").modal('show');

    });
}
</script>

<div id="footer">

    <span class='footer__bottom'>2022 Хоп-хоп</span>
</div>
</div>
</div>
</div>
</div>
</body>

</html>