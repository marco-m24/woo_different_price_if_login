// Copia e incolla questo codice nel tuo file functions.php del tema WordPress


function mrc_custom_get_price( $price, $product  ) {

    if( is_user_logged_in() ){
        //$price = $price * 0.5;
        if( $product->id == 1846 ){
            $price = $price - 4.50;
        }

    }
    return $price;
}
add_filter( 'woocommerce_get_price', 'mrc_custom_get_price',10,2);
