<div class="wrap">
    <h4 class="mt-2 ml-3" style="display:block !important;"><?php _e('Smsclone Admin Setup','smsclone'); ?></h4>
    <div class="row ml-lg-2">
        <div class="col-lg-8 shadow p-3">
            <form method="POST" action="admin-post.php">
                <?php $admin_setup_options = get_option('smsclone_admin_setup_options'); ?>
                <input type="hidden" name="action" value="smsclone_admin_setup"/>
                <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                    <div class="col-lg-12">
                        <label><?php _e('Username','smsclone'); ?></label>
                        <input type="text" value="<?php echo $admin_setup_options['smsclone_username']; ?>" name="smsclone_username" class="form-control" />
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label><?php _e('Password','smsclone'); ?></label>
                        <input type="text" value="<?php echo $admin_setup_options['smsclone_password']; ?>" name="smsclone_password" class="form-control" />
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label><?php _e('Sender ID','smsclone'); ?></label>
                        <input type="text" value="<?php echo $admin_setup_options['smsclone_sender_id']; ?>" name="smsclone_sender_id" class="form-control" />
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label><?php _e('Phone No','smsclone'); ?></label>
                        <input type="text" value="<?php echo $admin_setup_options['smsclone_phone']; ?>" name="smsclone_phone" class="form-control" />
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label><?php _e('Route Type','smsclone'); ?></label>
                        <select class="form-control" name="smsclone_route_type">
                            <option <?php echo $admin_setup_options['smsclone_route_type'] == "https://smsclone.com/api/sms/sendsms" ? "selected" : "" ?> value="https://smsclone.com/api/sms/sendsms">Normal route</option>
                            <option <?php echo $admin_setup_options['smsclone_route_type'] == "https://smsclone.com/api/sms/dnd-route" ? "selected" : "" ?> value="https://smsclone.com/api/sms/dnd-route">DND route</option>
                            <option <?php echo $admin_setup_options['smsclone_route_type'] == "https://smsclone.com/api/sms/dnd-fallback" ? "selected" : "" ?> value="https://smsclone.com/api/sms/dnd-fallback">DND fallback route</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                    </div>
                </div>
            </form>
            <br/>
            <ul class="nav nav-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#neworder"><?php _e('New Order','smsclone'); ?></a>
                </li>
            </ul>
            <div class="tab-content w-100 clearfix">
                <div class="tab-pane active" id="neworder">
                    <?php $smsclone_admin_processing_options = get_option('smsclone_admin_processing_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_admin_processing_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="processing" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_admin_processing_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" name="smsclone_is_active" <?php echo $checked; ?> value="<?php echo $smsclone_admin_processing_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_admin_processing_options['smsclone_message']); ?>
                                </textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="shadow pl-2 pt-2 pb-3" style="max-width:300px;min-width:250px">
                <h6>Place Holders</h6>
                <hr>
                <p>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ order.id }}</button>
                </p>
            </div>
        </div>
    </div>
</div>