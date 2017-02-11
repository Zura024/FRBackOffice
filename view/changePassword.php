<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 10.02.2017
 * Time: 16:50
 */
?>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 370px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="margin: auto">User Management</h4>
            </div>
                <div style="height: 60px">
                <div class="" id="msg" style=" text-align: center" >
                    
                </div>
                </div>
            <div class="modal-body" style="height: 210px;">
                <div class="form-group">
                    <input type="password" class="form-control" id="old_pass" required placeholder="Old password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="new_pass" required placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password"  class="form-control" type="password" required id="confirm_new_pass" placeholder="Confirm Password">
                </div>
                <button class="btn btn-default" onclick="changePassword()"> Change password </button>
            </div>
        </div>
    </div>
</div>

