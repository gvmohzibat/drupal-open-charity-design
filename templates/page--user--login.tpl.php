<div id="page_wrapper">           
    <form action="<?php base_path();?>login" method="post" id="user-login" accept-charset="UTF-8">
        <fieldset>
            <legend>User Login</legend>
        <div>
            <div class="form-item form-type-textfield form-item-name">
                <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="name" value="" maxlength="60" class="form-text required input" />
                <div class="description">Enter your My Drupal username.</div>
            </div>
            <div class="form-item form-type-password form-item-pass">
                <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                <input type="password" id="edit-pass" name="pass" maxlength="128" class="form-text required input" />
                <div class="description">Enter the password that accompanies your username.</div>
            </div>
            <input type="hidden" name="form_build_id" value="form-URVpZVCL5xwIB3C4rcVwx5rSZLFTB4gdpdidUS7j5g0" />
            <input type="hidden" name="form_id" value="user_login" />
            <div class="form-actions form-wrapper" id="edit-actions">
                <input type="submit" id="edit-submit" name="op" value="Log in" class="form-submit" /></div>
        </div>
    </fieldset>
    </form>
</div>