<?php

function smsclone_activate() {
    if(version_compare(get_bloginfo('version'),'5.0','<')) {
        die; 
    }

    $smsclone_processing_message_options = get_option('smsclone_processing_message_options');
    if(!$smsclone_processing_message_options) {
        $smsclone_processing_message_options = [
            'smsclone_to' => '{{ billing.phone }}',
            'smsclone_is_active' => 2,
            'smsclone_event' => 'processing',
            'smsclone_message' => "Hi {{ billing.firstname }},\nYou ordered the following items:\n{{ order.products_ordered }}\nOrder Total: {{ order.total }}"
        ];
        add_option('smsclone_processing_message_options',$smsclone_processing_message_options);
    }

    $smsclone_cancelled_message_options = get_option('smsclone_cancelled_message_options');
    if(!$smsclone_cancelled_message_options) {
        $smsclone_cancelled_message_options = [
            'smsclone_to' => '{{ billing.phone }}',
            'smsclone_is_active' => 1,
            'smsclone_event' => 'cancelled',
            'smsclone_message' => "Hi {{ billing.firstname }},\nYour order has being cancelled."
        ];
        add_option('smsclone_cancelled_message_options',$smsclone_cancelled_message_options);
    }

    $smsclone_failed_message_options = get_option('smsclone_failed_message_options');
    if(!$smsclone_failed_message_options) {
        $smsclone_failed_message_options = [
            'smsclone_to' => '{{ billing.phone }}',
            'smsclone_is_active' => 1,
            'smsclone_event' => 'failed',
            'smsclone_message' => "Hi {{ billing.firstname }},\nYour order failed."
        ];
        add_option('smsclone_failed_message_options',$smsclone_failed_message_options);
    }

    $smsclone_completed_message_options = get_option('smsclone_completed_message_options');
    if(!$smsclone_completed_message_options) {
        $smsclone_completed_message_options = [
            'smsclone_to' => '{{ billing.phone }}',
            'smsclone_is_active' => 1,
            'smsclone_event' => 'completed',
            'smsclone_message' => "Hi {{ billing.firstname }},\nYour order has being delivered.\n Thank you for your patronage."
        ];
        add_option('smsclone_completed_message_options',$smsclone_completed_message_options);
    }

    $smsclone_refunded_message_options = get_option('smsclone_refunded_message_options');
    if(!$smsclone_refunded_message_options) {
        $smsclone_refunded_message_options = [
            'smsclone_to' => '{{ billing.phone }}',
            'smsclone_is_active' => 1,
            'smsclone_event' => 'refunded',
            'smsclone_message' => "Hi {{ billing.firstname }},\nYou have being refunded for Order ID:{{ order.id }}"
        ];
        add_option('smsclone_refunded_message_options',$smsclone_refunded_message_options);
    }

    $smsclone_admin_processing_options = get_option('smsclone_admin_processing_options');
    if(!$smsclone_admin_processing_options) {
        $smsclone_admin_processing_options = [
            'smsclone_event' => 'processing',
            'smsclone_is_active' => 2,
            'smsclone_message' => "New order: \n Order ID: {{ order.id }}."
        ];
        add_option('smsclone_admin_processing_options',$smsclone_admin_processing_options);
    }

    $admin_setup_options = get_option('smsclone_admin_setup_options');
    if(!$admin_setup_options) {
        $admin_setup_options = [
            'smsclone_username' => "",
            'smsclone_password' => "",
            'smsclone_sender_id' => "",
            'smsclone_phone' => "",
            'smsclone_route_type' => "https://smsclone.com/api/sms/dnd-fallback"
        ];
        add_option('smsclone_admin_setup_options',$admin_setup_options);
    }
    return;
}