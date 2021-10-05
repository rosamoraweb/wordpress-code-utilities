/* Sin email al admin si el producto es gratuito */
add_filter('woocommerce_email_enabled_new_order', function($enabled, $order) {
    if ($order instanceof WC_Order) {
        $order_total = floatval($order->get_total());
        if ($order_total == 0) {
            return false;
        }
    }
    return $enabled;
}, 10, 2);
