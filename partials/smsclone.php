<div class="wrap">
    <h4 class="mt-2 ml-3" style="display:block !important;"><?php _e('Recepient Setup','smsclone'); ?></h4>
    <div class="row ml-lg-2">
        <div class="col-lg-8 shadow p-3">
            <ul class="nav nav-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#neworder"><?php _e('New Order','smsclone'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#ordercancelled"><?php _e('Order Cancelled','smsclone'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#orderrefunded"><?php _e('Order Refunded','smsclone'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#orderfailed"><?php _e('Order Failed','smsclone'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#ordercompleted"><?php _e('Order Completed','smsclone'); ?></a>
                </li>
            </ul>
            <div class="tab-content w-100 clearfix">
                <div class="tab-pane active" id="neworder">
                    <?php $smsclone_processing_message_options = get_option('smsclone_processing_message_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_processing_message_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="processing" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_processing_message_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" <?php echo $checked; ?> name="smsclone_is_active" value="<?php echo $smsclone_processing_message_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('To','smsclone'); ?></label>
                                <input class="form-control" value="<?php echo $smsclone_processing_message_options['smsclone_to']; ?>" name="smsclone_to" type="text" />
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_processing_message_options['smsclone_message']); ?>
                                </textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="ordercancelled">
                    <?php $smsclone_cancelled_message_options = get_option('smsclone_cancelled_message_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_cancelled_message_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="cancelled" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_cancelled_message_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" <?php echo $checked; ?> name="smsclone_is_active" value="<?php echo $smsclone_cancelled_message_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('To','smsclone'); ?></label>
                                <input class="form-control" value="<?php echo $smsclone_cancelled_message_options['smsclone_to']; ?>" name="smsclone_to" type="text" />
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_cancelled_message_options['smsclone_message']); ?>
                                </textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="orderrefunded">
                    <?php $smsclone_refunded_message_options = get_option('smsclone_refunded_message_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_refunded_message_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="refunded" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_refunded_message_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" <?php echo $checked;?> name="smsclone_is_active" value="<?php echo $smsclone_refunded_message_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('To','smsclone'); ?></label>
                                <input class="form-control" value="<?php echo $smsclone_refunded_message_options['smsclone_to']; ?>" name="smsclone_to" type="text" />
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_refunded_message_options['smsclone_message']); ?>
                                </textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="orderfailed">
                    <?php $smsclone_failed_message_options = get_option('smsclone_failed_message_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_failed_message_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="failed" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_failed_message_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" <?php echo $checked; ?> name="smsclone_is_active" value="<?php echo $smsclone_failed_message_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('To','smsclone'); ?></label>
                                <input class="form-control" value="<?php echo $smsclone_failed_message_options['smsclone_to']; ?>" name="smsclone_to" type="text" />
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_failed_message_options['smsclone_message']); ?>
                                </textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-sm btn-primary"><?php _e('Save','smsclone'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="ordercompleted">
                    <?php $smsclone_completed_message_options = get_option('smsclone_completed_message_options'); ?>
                    <form method="POST" action="admin-post.php">
                        <input type="hidden" name="action" value="smsclone_completed_message_setup"/>
                        <div class="row w-100 d-flex justify-content-start align-items-center flex-column">
                            <input class="form-control" value="completed" name="smsclone_event" type="hidden" />
                            <div class="col-lg-12 mt-2">
                                <?php $checked = $smsclone_completed_message_options['smsclone_is_active'] == 2 ? "checked" : ""; ?>
                                <input class="form-control" type="checkbox" <?php echo $checked; ?> name="smsclone_is_active" value="<?php echo $smsclone_completed_message_options['smsclone_is_active']?>"/>
                                <label>Active</label>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('To','smsclone'); ?></label>
                                <input class="form-control" value="<?php echo $smsclone_completed_message_options['smsclone_to']; ?>" name="smsclone_to" type="text" />
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label><?php _e('Message','smsclone'); ?></label>
                                <textarea rows="7" style="resize:none;" class="form-control" name="smsclone_message">
                                    <?php echo trim($smsclone_completed_message_options['smsclone_message']); ?>
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
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ order.products_ordered }}</button>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ order.total }} </button>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ billing.firstname }} </button>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ billing.lastname }} </button>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ billing.email }} </button>
                    <button class="btn btn-default border btn-sm placeholder-btn d-block mb-1" data-toggle="tooltip" data-placement="top" title="Click to copy" type="button">{{ billing.phone }} </button>
                </p>
            </div>
        </div>
    </div>
</div>

