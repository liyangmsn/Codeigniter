<?php /* Smarty version Smarty-3.1.20, created on 2015-01-20 15:46:59
         compiled from "/c/webroot/pindan.me/application/views/common/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:25187827454be07f3f0ed35-13990258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2a80de889559264fdf94acf2e32759a73954546' => 
    array (
      0 => '/c/webroot/pindan.me/application/views/common/footer.html',
      1 => 1421314294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25187827454be07f3f0ed35-13990258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54be07f3f1dd34_64316571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be07f3f1dd34_64316571')) {function content_54be07f3f1dd34_64316571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/c/webroot/pindan.me/application/libraries/smarty/plugins/function.site_url.php';
if (!is_callable('smarty_function_base_url')) include '/c/webroot/pindan.me/application/libraries/smarty/plugins/function.base_url.php';
?>      <footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-8">
              <h3 class="footer-title">拼单么？</h3>
              <p>
                <a data-via="designmodo" href='javascript:void(0);'>你还在为商品不包邮而烦恼吗？你还在为凑单而浪费金钱吗？现在都这都不需要你发愁了，来拼单么，帮你解决这些问题。拼单么提供一个拼单购物的平台，拼单么支持上线拼单（如：京东商城、国美在线、一号店、当当网、淘宝网、天猫、小米、等平台）、线下拼单（如：某个店铺、某个商场、某个楼盘、等）</a>
              </p>
            </div> <!-- /col-xs-7 -->

            <div class="col-xs-4">
              <div class="footer-banner">
                <h3 class="footer-title"></h3>
                <ul>
                  <li><a href="<?php echo smarty_function_site_url(array('uri'=>'us/eula'),$_smarty_tpl);?>
">拼单协议</a></li>
                  <li><a href="<?php echo smarty_function_site_url(array('uri'=>'help'),$_smarty_tpl);?>
">常见问题</a></li>
                  <li><a href="">友情链接</a></li>
                  <li><a href="<?php echo smarty_function_site_url(array('uri'=>'us'),$_smarty_tpl);?>
">关于我们</a></li>
                  <li><a href="<?php echo smarty_function_site_url(array('uri'=>'us/join'),$_smarty_tpl);?>
">加入我们</a></li>
                </ul>
                <strong>联系我们: </strong><a target="_blank" href="http://designmodo.com/flat">kefu@pindan.me</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="/static/js/vendor/jquery.min.js"></script>
      <script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/js/user.js"></script>
      <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        $('.tishi').tooltip();
      </script>
    </body>
</html><?php }} ?>