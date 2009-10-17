<?php require_once "features.phpc";
  $ab['propreties'] = array(
    _("Images watermark"),
    _("Online files edition"),
    _("Online compression and extraction"),
    _("Log journal"),
    _("Themes support"),
    _("<abbr title='Internationalization'>i18n</abbr>"),
    _("Online audio and video"),
    _("yyy"),
    _("zzz"),
    _("Price"),
  );
  $products = array(
    _("<abbr title='AjaxBrowser'>AB</abbr>&nbsp;Pro"),
    _("<abbr title='AjaxBrowser'>AB</abbr>&nbsp;Free"),
    "Xplorer",
    "olphin",
    "toto",
    "haricot",
  );

      $ab['objects'] = array(
        $products[0] => array(
          yes(), // _("Images watermark"),
          yes(), // _("Online files edition"),
          yes(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          yes(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          _("Coming soon&hellip;"), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(30), // _("Price"),
        ),
        $products[1] => array(
          no(), // _("Images watermark"),
          yes(), // _("Online files edition"),
          no(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          yes(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          no(), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(0), // _("Price"),
        ),
        $products[2] => array(
          no(), // _("Images watermark"),
          no(), // _("Online files edition"),
          no(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          no(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          no(), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(45), // _("Price"),
        ),
        $products[3] => array(
          no(), // _("Images watermark"),
          no(), // _("Online files edition"),
          no(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          no(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          no(), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(45), // _("Price"),
        ),

                $products[5] => array(
          no(), // _("Images watermark"),
          no(), // _("Online files edition"),
          no(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          no(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          no(), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(10), // _("Price"),
        ),
        $products[4] => array(
          no(), // _("Images watermark"),
          no(), // _("Online files edition"),
          no(), // _("Online compression and extraction"),
          yes(), // _("Log journal"),
          no(), // _("Themes support"),
          yes(), // _("i18n (Internationalization)"),
          no(), // _("Online audio and video"),
          yes(), // _("yyy"),
          yes(), // _("zzz"),
          currency(1), // _("Price"),
        ),

      );
?>
<h1><?php echo _('Features'); ?> </h1>
<div id='page'>
  <h3><?php echo _('Features list'); ?></h3>
  <div>
    <ul>
      <li><?php echo _("Files management (drag'n'drop, advanced selection, cut/copy/paste, etc.)&thinsp;;");?></li>
      <li><?php echo _("Images watermarking&thinsp;;");?></li>
      <li><?php echo _("Online files edition with syntax highlightment (<abbr title='confer' lang='la'>cf</abbr>. <a href='http://codepress.org/'>Codepress</a>)&thinsp;;");?></li>
      <li><?php echo _("Online compression and extraction (<abbr title='confer' lang='la'>cf</abbr>. <a href='?p=documentation.easyarchive'>EasyArchive</a>)&thinsp;;");?></li>
<!--       <li><?php echo _("Uploads and downloads of files as archive&thinsp;;");?></li> -->
      <li><?php echo _("Advanced rights management (UNIX-like)&thinsp;;");?></li>
      <li><?php echo _("Log journal&thinsp;;");?></li>
      <li><?php echo _("Themes support and customisation&thinsp;;");?></li>
      <li><?php echo _("<abbr title='Localization'>l10n</abbr> and <abbr title='Internationalization'>i18n</abbr> support.");?></li>
      <li><?php echo _("Online audio and video (using <abbr title='HyperText Markup Language'>HTML</abbr>5)&thinsp;;");?></li>
    </ul>
  </div>

  <h3><?php echo _("<em>Pro</em> <abbr title='versus'>vs</abbr> <em>Free</em> version"); ?></h3>
  <div id='comparison'>
    <p><?php echo _("This table compare only <em>Pro</em> and <em>Free</em> version of AjaxBrowser. Further on this page you will find a comparison between AjaxBrowser and others products on the market. "); ?></p>
    <?php
      $pro_free = new features();
      $pro_free->PROPERTIES = $ab['propreties'];
      $pro_free->OBJECTS = array(
        $products[0] => $ab['objects'][$products[0]],
        $products[1] => $ab['objects'][$products[1]],
      );
      echo $pro_free->comparator(_("comparison between Pro and Free versions"));
    ?>
  </div>
  <h3><?php echo _("AjaxBrowser <abbr title='versus'>vs</abbr> Others products"); ?></h3>
  <div>
    <p><?php echo _("This is a <strong>mockery</strong>, real data for others products are currently not avaible. Come later to check for real data"); ?></p>
    <?php
      $ab_others = new features();
      $ab_others->PROPERTIES = $ab['propreties'];
      $ab_others->OBJECTS = $ab['objects'];
      echo $ab_others->comparator(_("comparison between AjaxBrowser and Others products"));
    ?>
  </div>

<h3><?php echo _('Supported Languages'); ?></h3>
  <div>
		<ol id='flags'>
      <li><img src='/images/flags/gb.png' title='English (British)'/> English (British)&thinsp;;</li>
      <li><img src='/images/flags/fr.png' title='Français' /> Français&thinsp;;</li>
      <li><img src='/images/flags/es.png' title='Español' /> Español&thinsp;;</li>
      <li><img src='/images/flags/tw.png' title='中文' /> 中文&thinsp;;</li>
      <li><img src='/images/flags/cn.png' title='中國' /> 中國&thinsp;;</li>
      <li><img class='down' src='/images/add.png' title='<?php echo _('Add another.'); ?>' /> <a href='https://translations.launchpad.net/ajaxbrowser'><?php echo _('Translate into a new language.'); ?></a></li>
    </ol>
	</div>

</div>
