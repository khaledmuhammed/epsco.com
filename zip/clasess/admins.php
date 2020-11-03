<?php
class adminsClass extends model{
  public static function form(){
    ?>        
    <form role="form"  onsubmit="submitForm(this,'admins.php')" prevent-default>
      <input type="hidden" name="action" value="submit"> 
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="user_name" required />
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <div class="col-xs-4 col-xs-offset-8">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
    </form>
    <?php
  }
}