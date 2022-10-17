const preloaderControl = () => {
    window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 1000);
  }
}

const moveSidebar = () => {
    const sidebar = document.querySelector('#sidebar-primary');
    sidebar.classList.toggle('sidebar-active');
    sidebar.classList.toggle('sidebar-hidden');
}

const closeCheckout = () => {
    const checkoutModal = document.querySelector('#checkout');
    checkoutModal.classList.toggle('checkout-hidden');
    checkoutModal.classList.toggle('checkout-active');
}

const checkoutControl = () => {
  const x = document.querySelector('#checkout .close');
    x.addEventListener('click', closeCheckout);
    const checkoutBtn = document.querySelector('.xoo-wsc-ft-btn-checkout');
    checkoutBtn.addEventListener('click', customCheckout)
}

const sidebarControl = () => {
    
    let men = document.querySelector('#header').children[1];
    let women = document.querySelector('#header').children[2];
    let sidebarOpac = document.querySelector('#sidebar-primary .opac');
    let targets = [men, women];

    targets.forEach(function (target, index) { 
        target.addEventListener('click', moveSidebar);
    });
    
    sidebarOpac.addEventListener('click', moveSidebar);
    
}

function customCheckout(event) {
    event.preventDefault();
    var wp_ajax_url = "<?php echo site_url();?>/wp-admin/admin-ajax.php";
    var data = {
        action: 'getCheckoutPageContent',
        product_id: jQuery(event.target).data('productid'),
        quantity: 1
    };

    jQuery.post(wp_ajax_url, data, function(content) {
        alert('checkout');

    });
}

document.addEventListener('DOMContentLoaded', function () {

    console.log('DOM ready');
    console.log(Date());
    preloaderControl();
    sidebarControl();
    checkoutControl();



}, false);




