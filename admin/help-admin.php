<?php
  /**
   * Admin Help
   *
   * @package Advanced Login System
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: help-admin.php, v2.00 2011-07-10 10:12:05 gewa Exp $
   */
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<p class="bluetip"><i class="icon-lightbulb icon-3x pull-left"></i><strong>Protecting pages based on admin level</strong><br />
Here you can find instructions on how to protect your pages based on user level, login state etc..</p>
<section class="widget">
  <header>
    <div class="row">
      <h1><i class="icon-reorder"></i> Help Section <i class="icon-double-angle-right"></i> Admin Protection</h1>
    </div>
  </header>
  <div class="content2">
    <section class="content">
<div class="pagetip">First start by creating a new php page that you want to give access to all of your administrators.<br />
  Let's call this page for the purpose of this tutorial <strong>admins_only.php</strong><br />
</div>

<div class="pagetip"> <strong>1</strong>. At the very beginning of the page start by adding following php code:
  <?php
highlight_string('
<?php
  define("_VALID_PHP", true);
  require_once("init.php");
?>');
?>
  <br />
  Make sure that <strong>init.php</strong> point to correct directory. For example, If your <strong><em>admins_only.php</em></strong> page is in the same directory as main script, than no changes are necessary, otherwise you need to enter correct path to your init.php page. Depending where you placed <strong><em>admins_only.php</em></strong> page, below or above root directory init.php becomes <strong>../init.php</strong> if below the root or <strong>otherdir/init.php</strong> if above the root.</div>

<div class="pagetip"> <strong>2</strong>. Now let's add some protection:
  <?php
highlight_string('
<?php
  define("_VALID_PHP", true);
  require_once("init.php");
  
  if (!$user->is_Admin())
      redirect_to("login.php");
?>');
?>

  The two new lines of code do admin verification. First line checks if user is <strong>not admin</strong>, the second one redirects admin to login page <strong>login.php</strong> </div>

<div class="pagetip"> <strong>3</strong>. Now you can continue to add the usual html or php code to your page.</div>

<div class="pagetip"> <em>In this example we protected single page using admin verification process. If admin is not logged in we redirect to login page, otherwise, we let the admin view the page.</em> </div>

    </section>
  </div>
</section>