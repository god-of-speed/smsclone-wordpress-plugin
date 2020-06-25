<?php

function smsclone_processing_message_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_processing_message_options = get_option('smsclone_processing_message_options');
    $smsclone_processing_message_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_processing_message_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_processing_message_options['smsclone_to'] = $_POST['smsclone_to'];
    $smsclone_processing_message_options['smsclone_message'] = trim($_POST['smsclone_message']);

    update_option('smsclone_processing_message_options',$smsclone_processing_message_options);
    wp_redirect(admin_url('admin.php?page=smsclone&status=1'));
}

function smsclone_failed_message_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_failed_message_options = get_option('smsclone_failed_message_options');
    $smsclone_failed_message_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_failed_message_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_failed_message_options['smsclone_to'] = $_POST['smsclone_to'];
    $smsclone_failed_message_options['smsclone_message'] = trim($_POST['smsclone_message']);

    update_option('smsclone_failed_message_options',$smsclone_failed_message_options);
    wp_redirect(admin_url('admin.php?page=smsclone&status=1'));
}

function smsclone_completed_message_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_completed_message_options = get_option('smsclone_completed_message_options');
    $smsclone_completed_message_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_completed_message_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_completed_message_options['smsclone_to'] = $_POST['smsclone_to'];
    $smsclone_completed_message_options['smsclone_message'] = trim($_POST['smsclone_message']);

    update_option('smsclone_completed_message_options',$smsclone_completed_message_options);
    wp_redirect(admin_url('admin.php?page=smsclone&status=1'));
}

function smsclone_refunded_message_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_refunded_message_options = get_option('smsclone_refunded_message_options');
    $smsclone_refunded_message_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_refunded_message_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_refunded_message_options['smsclone_to'] = $_POST['smsclone_to'];
    $smsclone_refunded_message_options['smsclone_message'] = trim($_POST['smsclone_message']);

    update_option('smsclone_refunded_message_options',$smsclone_refunded_message_options);
    wp_redirect(admin_url('admin.php?page=smsclone&status=1'));
}

function smsclone_cancelled_message_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_cancelled_message_options = get_option('smsclone_cancelled_message_options');
    $smsclone_cancelled_message_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_cancelled_message_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_cancelled_message_options['smsclone_to'] = $_POST['smsclone_to'];
    $smsclone_cancelled_message_options['smsclone_message'] = trim($_POST['smsclone_message']);

    update_option('smsclone_cancelled_message_options',$smsclone_cancelled_message_options);
    wp_redirect(admin_url('admin.php?page=smsclone&status=1'));
}

function smsclone_admin_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }
    $admin_setup_options = get_option('smsclone_admin_setup_options');
    $admin_setup_options['smsclone_username'] = $_POST['smsclone_username'];
    $admin_setup_options['smsclone_password'] = $_POST['smsclone_password'];
    $admin_setup_options['smsclone_sender_id'] = $_POST['smsclone_sender_id'];
    $admin_setup_options['smsclone_phone'] = $_POST['smsclone_phone'];
    $admin_setup_options['smsclone_route_type'] = $_POST['smsclone_route_type'];

    update_option('smsclone_admin_setup_options',$admin_setup_options);
    wp_redirect(admin_url('admin.php?page=smsclone_admin_setup&status=1'));
}

function smsclone_admin_processing_setup() {
    if(!current_user_can('edit_theme_options') ) {
        wp_die(__('You are not allowed to be on this page.','smsclone'));
    }

    $smsclone_admin_processing_options = get_option('smsclone_admin_processing_options');
    $smsclone_admin_processing_options['smsclone_event'] = $_POST['smsclone_event'];
    $smsclone_admin_processing_options['smsclone_is_active'] = $_POST['smsclone_is_active'] ? 2 : 1;
    $smsclone_admin_processing_options['smsclone_message'] = $_POST['smsclone_message'];

    update_option('smsclone_admin_processing_options',$smsclone_admin_processing_options);
    wp_redirect(admin_url('admin.php?page=smsclone_admin_setup&status=1'));
}

function smsclone_process_message_failed($order_id) {
    $order = wc_get_order( $order_id );
    $orderData = $order->get_data();
    $products = "";
    foreach($order->get_items() as $key=>$val) {
        $product_name = $val->get_product()->get_name();
        $quantity = $val->get_quantity();
        $item_total = $val->get_total();
        $products .= "Product name: ".$product_name." | Quantity: ".$quantity." | Total: ₦".number_format($item_total,2,'.',',')."\n";
    }
    $arrMapper = [
        '{{ order.id }}' => $orderData['id'],
        '{{ order.products_ordered }}' => $products,
        '{{ order.total }}' => "₦".number_format($orderData['total'],2,'.',','),
        '{{ billing.firstname }}' => $orderData['billing']['first_name'],
        '{{ billing.lastname }}' => $orderData['billing']['last_name'],
        '{{ billing.email }}' => $orderData['billing']['email'],
        '{{ billing.phone }}' => $orderData['billing']['phone']
    ];
    //get admin setup
    $aso = get_option('smsclone_admin_setup_options');
    //get recipient processing option
    $sfmo = get_option('smsclone_failed_message_options');
    if($sfmo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim(strtr($sfmo['smsclone_to'],$arrMapper));
        $message = trim(strtr($sfmo['smsclone_message'],$arrMapper));
        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
}

function smsclone_process_message_processing($order_id) {
    $order = wc_get_order( $order_id );
    $orderData = $order->get_data();
    $products = "";
    foreach($order->get_items() as $key=>$val) {
        $product_name = $val->get_product()->get_name();
        $quantity = $val->get_quantity();
        $item_total = $val->get_total();
        $products .= "Product name: ".$product_name." | Quantity: ".$quantity." | Total: ₦".number_format($item_total,2,'.',',')."\n";
    }
    $arrMapper = [
        '{{ order.id }}' => $orderData['id'],
        '{{ order.products_ordered }}' => $products,
        '{{ order.total }}' => "₦".number_format($orderData['total'],2,'.',','),
        '{{ billing.firstname }}' => $orderData['billing']['first_name'],
        '{{ billing.lastname }}' => $orderData['billing']['last_name'],
        '{{ billing.email }}' => $orderData['billing']['email'],
        '{{ billing.phone }}' => $orderData['billing']['phone']
    ];
    //get admin setup
    $aso = get_option('smsclone_admin_setup_options');
    //get recipient processing option
    $spmo = get_option('smsclone_processing_message_options');
    if($spmo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim(strtr($spmo['smsclone_to'],$arrMapper));
        $message = trim(strtr($spmo['smsclone_message'],$arrMapper));
        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
    //get admin processing option
    $sapo = get_option('smsclone_admin_processing_options');
    if($sapo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim($aso['smsclone_phone']);
        $message = trim(strtr($sapo['smsclone_message'],$arrMapper));

        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
}

function smsclone_process_message_completed($order_id) {
    $order = wc_get_order( $order_id );
    $orderData = $order->get_data();
    $products = "";
    foreach($order->get_items() as $key=>$val) {
        $product_name = $val->get_product()->get_name();
        $quantity = $val->get_quantity();
        $item_total = $val->get_total();
        $products .= "Product name: ".$product_name." | Quantity: ".$quantity." | Total: ₦".number_format($item_total,2,'.',',')."\n";
    }
    $arrMapper = [
        '{{ order.id }}' => $orderData['id'],
        '{{ order.products_ordered }}' => $products,
        '{{ order.total }}' => "₦".number_format($orderData['total'],2,'.',','),
        '{{ billing.firstname }}' => $orderData['billing']['first_name'],
        '{{ billing.lastname }}' => $orderData['billing']['last_name'],
        '{{ billing.email }}' => $orderData['billing']['email'],
        '{{ billing.phone }}' => $orderData['billing']['phone']
    ];
    //get admin setup
    $aso = get_option('smsclone_admin_setup_options');
    //get recipient processing option
    $scmo = get_option('smsclone_completed_message_options');
    if($scmo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim(strtr($scmo['smsclone_to'],$arrMapper));
        $message = trim(strtr($scmo['smsclone_message'],$arrMapper));

        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
}

function smsclone_process_message_refunded($order_id) {
    $order = wc_get_order( $order_id );
    $orderData = $order->get_data();
    $products = "";
    foreach($order->get_items() as $key=>$val) {
        $product_name = $val->get_product()->get_name();
        $quantity = $val->get_quantity();
        $item_total = $val->get_total();
        $products .= "Product name: ".$product_name." | Quantity: ".$quantity." | Total: ₦".number_format($item_total,2,'.',',')."\n";
    }
    $arrMapper = [
        '{{ order.id }}' => $orderData['id'],
        '{{ order.products_ordered }}' => $products,
        '{{ order.total }}' => "₦".number_format($orderData['total'],2,'.',','),
        '{{ billing.firstname }}' => $orderData['billing']['first_name'],
        '{{ billing.lastname }}' => $orderData['billing']['last_name'],
        '{{ billing.email }}' => $orderData['billing']['email'],
        '{{ billing.phone }}' => $orderData['billing']['phone']
    ];
    //get admin setup
    $aso = get_option('smsclone_admin_setup_options');
    //get recipient processing option
    $srmo = get_option('smsclone_refunded_message_options');
    if($srmo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim(strtr($srmo['smsclone_to'],$arrMapper));
        $message = trim(strtr($srmo['smsclone_message'],$arrMapper));

        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
}

function smsclone_process_message_cancelled($order_id) {
    $order = wc_get_order( $order_id );
    $orderData = $order->get_data();
    $products = "";
    foreach($order->get_items() as $key=>$val) {
        $product_name = $val->get_product()->get_name();
        $quantity = $val->get_quantity();
        $item_total = $val->get_total();
        $products .= "Product name: ".$product_name." | Quantity: ".$quantity." | Total: ₦".number_format($item_total,2,'.',',')."\n";
    }
    $arrMapper = [
        '{{ order.id }}' => $orderData['id'],
        '{{ order.products_ordered }}' => $products,
        '{{ order.total }}' => "₦".number_format($orderData['total'],2,'.',','),
        '{{ billing.firstname }}' => $orderData['billing']['first_name'],
        '{{ billing.lastname }}' => $orderData['billing']['last_name'],
        '{{ billing.email }}' => $orderData['billing']['email'],
        '{{ billing.phone }}' => $orderData['billing']['phone']
    ];
    //get admin setup
    $aso = get_option('smsclone_admin_setup_options');
    //get recipient processing option
    $scmo = get_option('smsclone_cancelled_message_options');
    if($scmo['smsclone_is_active'] == 2){
        // Get an instance of the WC_Order object (same as before)
        $to = trim(strtr($scmo['smsclone_to'],$arrMapper));
        $message = trim(strtr($scmo['smsclone_message'],$arrMapper));

        //curl request for smsclone
        try{
            $response = wp_remote_get($aso['smsclone_route_type']."?username=".$aso['smsclone_username']."&password=".$aso['smsclone_password']."&sender=".$aso['smsclone_sender_id']."&recipient=".$to."&message=".$message);
        }catch(\Exception $err) {}
    }
}