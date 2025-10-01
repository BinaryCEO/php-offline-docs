<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GD and Image Functions - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="shorturl" href="https://www.php.net/image">
 <link rel="alternate" href="https://www.php.net/image" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/image.examples.merged-watermark.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gd-info.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.image.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.image.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.image.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.image.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.image.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.image.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.image.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.image.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.image.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.image.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.image.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="GD and Image Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GD and Image Functions - Manual" />
<meta name="twitter:description" content="GD and Image Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GD and Image Functions - Manual" />
<meta itemprop="description" content="GD and Image Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="GD and Image Functions" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="function.gd-info.php">
          gd_info &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="image.examples.merged-watermark.php">
          &laquo; Using imagecopymerge to create a translucent watermark        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/ref.image.php' selected="selected">English</option>
            <option value='de/ref.image.php'>German</option>
            <option value='es/ref.image.php'>Spanish</option>
            <option value='fr/ref.image.php'>French</option>
            <option value='it/ref.image.php'>Italian</option>
            <option value='ja/ref.image.php'>Japanese</option>
            <option value='pt_BR/ref.image.php'>Brazilian Portuguese</option>
            <option value='ru/ref.image.php'>Russian</option>
            <option value='tr/ref.image.php'>Turkish</option>
            <option value='uk/ref.image.php'>Ukrainian</option>
            <option value='zh/ref.image.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.image" class="reference">
 <h1 class="title">GD and Image Functions</h1>

 















































































































































































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.gd-info.php">gd_info</a> — Retrieve information about the currently installed GD library</li><li><a href="function.getimagesize.php">getimagesize</a> — Get the size of an image</li><li><a href="function.getimagesizefromstring.php">getimagesizefromstring</a> — Get the size of an image from a string</li><li><a href="function.image-type-to-extension.php">image_type_to_extension</a> — Get file extension for image type</li><li><a href="function.image-type-to-mime-type.php">image_type_to_mime_type</a> — Get Mime-Type for image-type returned by getimagesize,
   exif_read_data, exif_thumbnail, exif_imagetype</li><li><a href="function.image2wbmp.php">image2wbmp</a> — Output image to browser or file</li><li><a href="function.imageaffine.php">imageaffine</a> — Return an image containing the affine transformed src image, using an optional clipping area</li><li><a href="function.imageaffinematrixconcat.php">imageaffinematrixconcat</a> — Concatenate two affine transformation matrices</li><li><a href="function.imageaffinematrixget.php">imageaffinematrixget</a> — Get an affine transformation matrix</li><li><a href="function.imagealphablending.php">imagealphablending</a> — Set the blending mode for an image</li><li><a href="function.imageantialias.php">imageantialias</a> — Should antialias functions be used or not</li><li><a href="function.imagearc.php">imagearc</a> — Draws an arc</li><li><a href="function.imageavif.php">imageavif</a> — Output image to browser or file</li><li><a href="function.imagebmp.php">imagebmp</a> — Output a BMP image to browser or file</li><li><a href="function.imagechar.php">imagechar</a> — Draw a character horizontally</li><li><a href="function.imagecharup.php">imagecharup</a> — Draw a character vertically</li><li><a href="function.imagecolorallocate.php">imagecolorallocate</a> — Allocate a color for an image</li><li><a href="function.imagecolorallocatealpha.php">imagecolorallocatealpha</a> — Allocate a color for an image</li><li><a href="function.imagecolorat.php">imagecolorat</a> — Get the index of the color of a pixel</li><li><a href="function.imagecolorclosest.php">imagecolorclosest</a> — Get the index of the closest color to the specified color</li><li><a href="function.imagecolorclosestalpha.php">imagecolorclosestalpha</a> — Get the index of the closest color to the specified color + alpha</li><li><a href="function.imagecolorclosesthwb.php">imagecolorclosesthwb</a> — Get the index of the color which has the hue, white and blackness</li><li><a href="function.imagecolordeallocate.php">imagecolordeallocate</a> — De-allocate a color for an image</li><li><a href="function.imagecolorexact.php">imagecolorexact</a> — Get the index of the specified color</li><li><a href="function.imagecolorexactalpha.php">imagecolorexactalpha</a> — Get the index of the specified color + alpha</li><li><a href="function.imagecolormatch.php">imagecolormatch</a> — Makes the colors of the palette version of an image more closely match the true color version</li><li><a href="function.imagecolorresolve.php">imagecolorresolve</a> — Get the index of the specified color or its closest possible alternative</li><li><a href="function.imagecolorresolvealpha.php">imagecolorresolvealpha</a> — Get the index of the specified color + alpha or its closest possible alternative</li><li><a href="function.imagecolorset.php">imagecolorset</a> — Set the color for the specified palette index</li><li><a href="function.imagecolorsforindex.php">imagecolorsforindex</a> — Get the colors for an index</li><li><a href="function.imagecolorstotal.php">imagecolorstotal</a> — Find out the number of colors in an image's palette</li><li><a href="function.imagecolortransparent.php">imagecolortransparent</a> — Define a color as transparent</li><li><a href="function.imageconvolution.php">imageconvolution</a> — Apply a 3x3 convolution matrix, using coefficient and offset</li><li><a href="function.imagecopy.php">imagecopy</a> — Copy part of an image</li><li><a href="function.imagecopymerge.php">imagecopymerge</a> — Copy and merge part of an image</li><li><a href="function.imagecopymergegray.php">imagecopymergegray</a> — Copy and merge part of an image with gray scale</li><li><a href="function.imagecopyresampled.php">imagecopyresampled</a> — Copy and resize part of an image with resampling</li><li><a href="function.imagecopyresized.php">imagecopyresized</a> — Copy and resize part of an image</li><li><a href="function.imagecreate.php">imagecreate</a> — Create a new palette based image</li><li><a href="function.imagecreatefromavif.php">imagecreatefromavif</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefrombmp.php">imagecreatefrombmp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromgd.php">imagecreatefromgd</a> — Create a new image from GD file or URL</li><li><a href="function.imagecreatefromgd2.php">imagecreatefromgd2</a> — Create a new image from GD2 file or URL</li><li><a href="function.imagecreatefromgd2part.php">imagecreatefromgd2part</a> — Create a new image from a given part of GD2 file or URL</li><li><a href="function.imagecreatefromgif.php">imagecreatefromgif</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromjpeg.php">imagecreatefromjpeg</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefrompng.php">imagecreatefrompng</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromstring.php">imagecreatefromstring</a> — Create a new image from the image stream in the string</li><li><a href="function.imagecreatefromtga.php">imagecreatefromtga</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromwbmp.php">imagecreatefromwbmp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromwebp.php">imagecreatefromwebp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromxbm.php">imagecreatefromxbm</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromxpm.php">imagecreatefromxpm</a> — Create a new image from file or URL</li><li><a href="function.imagecreatetruecolor.php">imagecreatetruecolor</a> — Create a new true color image</li><li><a href="function.imagecrop.php">imagecrop</a> — Crop an image to the given rectangle</li><li><a href="function.imagecropauto.php">imagecropauto</a> — Crop an image automatically using one of the available modes</li><li><a href="function.imagedashedline.php">imagedashedline</a> — Draw a dashed line</li><li><a href="function.imagedestroy.php">imagedestroy</a> — Destroy an image</li><li><a href="function.imageellipse.php">imageellipse</a> — Draw an ellipse</li><li><a href="function.imagefill.php">imagefill</a> — Flood fill</li><li><a href="function.imagefilledarc.php">imagefilledarc</a> — Draw a partial arc and fill it</li><li><a href="function.imagefilledellipse.php">imagefilledellipse</a> — Draw a filled ellipse</li><li><a href="function.imagefilledpolygon.php">imagefilledpolygon</a> — Draw a filled polygon</li><li><a href="function.imagefilledrectangle.php">imagefilledrectangle</a> — Draw a filled rectangle</li><li><a href="function.imagefilltoborder.php">imagefilltoborder</a> — Flood fill to specific color</li><li><a href="function.imagefilter.php">imagefilter</a> — Applies a filter to an image</li><li><a href="function.imageflip.php">imageflip</a> — Flips an image using a given mode</li><li><a href="function.imagefontheight.php">imagefontheight</a> — Get font height</li><li><a href="function.imagefontwidth.php">imagefontwidth</a> — Get font width</li><li><a href="function.imageftbbox.php">imageftbbox</a> — Give the bounding box of a text using fonts via freetype2</li><li><a href="function.imagefttext.php">imagefttext</a> — Write text to the image using fonts using FreeType 2</li><li><a href="function.imagegammacorrect.php">imagegammacorrect</a> — Apply a gamma correction to a GD image</li><li><a href="function.imagegd.php">imagegd</a> — Output GD image to browser or file</li><li><a href="function.imagegd2.php">imagegd2</a> — Output GD2 image to browser or file</li><li><a href="function.imagegetclip.php">imagegetclip</a> — Get the clipping rectangle</li><li><a href="function.imagegetinterpolation.php">imagegetinterpolation</a> — Get the interpolation method</li><li><a href="function.imagegif.php">imagegif</a> — Output image to browser or file</li><li><a href="function.imagegrabscreen.php">imagegrabscreen</a> — Captures the whole screen</li><li><a href="function.imagegrabwindow.php">imagegrabwindow</a> — Captures a window</li><li><a href="function.imageinterlace.php">imageinterlace</a> — Enable or disable interlace</li><li><a href="function.imageistruecolor.php">imageistruecolor</a> — Finds whether an image is a truecolor image</li><li><a href="function.imagejpeg.php">imagejpeg</a> — Output image to browser or file</li><li><a href="function.imagelayereffect.php">imagelayereffect</a> — Set the alpha blending flag to use layering effects</li><li><a href="function.imageline.php">imageline</a> — Draw a line</li><li><a href="function.imageloadfont.php">imageloadfont</a> — Load a new font</li><li><a href="function.imageopenpolygon.php">imageopenpolygon</a> — Draws an open polygon</li><li><a href="function.imagepalettecopy.php">imagepalettecopy</a> — Copy the palette from one image to another</li><li><a href="function.imagepalettetotruecolor.php">imagepalettetotruecolor</a> — Converts a palette based image to true color</li><li><a href="function.imagepng.php">imagepng</a> — Output a PNG image to either the browser or a file</li><li><a href="function.imagepolygon.php">imagepolygon</a> — Draws a polygon</li><li><a href="function.imagerectangle.php">imagerectangle</a> — Draw a rectangle</li><li><a href="function.imageresolution.php">imageresolution</a> — Get or set the resolution of the image</li><li><a href="function.imagerotate.php">imagerotate</a> — Rotate an image with a given angle</li><li><a href="function.imagesavealpha.php">imagesavealpha</a> — Whether to retain full alpha channel information when saving images</li><li><a href="function.imagescale.php">imagescale</a> — Scale an image using the given new width and height</li><li><a href="function.imagesetbrush.php">imagesetbrush</a> — Set the brush image for line drawing</li><li><a href="function.imagesetclip.php">imagesetclip</a> — Set the clipping rectangle</li><li><a href="function.imagesetinterpolation.php">imagesetinterpolation</a> — Set the interpolation method</li><li><a href="function.imagesetpixel.php">imagesetpixel</a> — Set a single pixel</li><li><a href="function.imagesetstyle.php">imagesetstyle</a> — Set the style for line drawing</li><li><a href="function.imagesetthickness.php">imagesetthickness</a> — Set the thickness for line drawing</li><li><a href="function.imagesettile.php">imagesettile</a> — Set the tile image for filling</li><li><a href="function.imagestring.php">imagestring</a> — Draw a string horizontally</li><li><a href="function.imagestringup.php">imagestringup</a> — Draw a string vertically</li><li><a href="function.imagesx.php">imagesx</a> — Get image width</li><li><a href="function.imagesy.php">imagesy</a> — Get image height</li><li><a href="function.imagetruecolortopalette.php">imagetruecolortopalette</a> — Convert a true color image to a palette image</li><li><a href="function.imagettfbbox.php">imagettfbbox</a> — Give the bounding box of a text using TrueType fonts</li><li><a href="function.imagettftext.php">imagettftext</a> — Write text to the image using TrueType fonts</li><li><a href="function.imagetypes.php">imagetypes</a> — Return the image types supported by this PHP build</li><li><a href="function.imagewbmp.php">imagewbmp</a> — Output image to browser or file</li><li><a href="function.imagewebp.php">imagewebp</a> — Output a WebP image to browser or file</li><li><a href="function.imagexbm.php">imagexbm</a> — Output an XBM image to browser or file</li><li><a href="function.iptcembed.php">iptcembed</a> — Embeds binary IPTC data into a JPEG image</li><li><a href="function.iptcparse.php">iptcparse</a> — Parse a binary IPTC block into single tags</li><li><a href="function.jpeg2wbmp.php">jpeg2wbmp</a> — Convert JPEG image file to WBMP image file</li><li><a href="function.png2wbmp.php">png2wbmp</a> — Convert PNG image file to WBMP image file</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.image%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.image&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.image.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87238">  <div class="votes">
    <div id="Vu87238">
    <a href="/manual/vote-note.php?id=87238&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87238">
    <a href="/manual/vote-note.php?id=87238&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87238" title="59% like this...">
    8
    </div>
  </div>
  <a href="#87238" class="name">
  <strong class="user"><em>chuckstudios at gmail dot com</em></strong></a><a class="genanchor" href="#87238"> &para;</a><div class="date" title="2008-11-25 09:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87238">
<div class="phpcode"><code><span class="html">I wrote a simple function to convert an image resource to PGM (portable graymap) in order to feed it to an OCR program. It works just like the rest of the image output functions, and will convert to grayscale for you:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">imagepgm</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$pgm </span><span class="keyword">= </span><span class="string">"P5 "</span><span class="keyword">.</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">).</span><span class="string">" "</span><span class="keyword">.</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">).</span><span class="string">" 255\n"</span><span class="keyword">;<br />        for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); </span><span class="default">$y</span><span class="keyword">++)<br />        {<br />            for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); </span><span class="default">$x</span><span class="keyword">++)<br />            {<br />                </span><span class="default">$colors </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />                </span><span class="default">$pgm </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0.3 </span><span class="keyword">* </span><span class="default">$colors</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">] + </span><span class="default">0.59 </span><span class="keyword">* </span><span class="default">$colors</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">] + </span><span class="default">0.11 </span><span class="keyword">* </span><span class="default">$colors</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">]);<br />            }<br />        }<br />        if(</span><span class="default">$filename </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">)<br />        {<br />            </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$pgm</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            return </span><span class="default">$pgm</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57909">  <div class="votes">
    <div id="Vu57909">
    <a href="/manual/vote-note.php?id=57909&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57909">
    <a href="/manual/vote-note.php?id=57909&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57909" title="53% like this...">
    5
    </div>
  </div>
  <a href="#57909" class="name">
  <strong class="user"><em>michal-ok at o2 dot pl</em></strong></a><a class="genanchor" href="#57909"> &para;</a><div class="date" title="2005-10-18 02:29"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57909">
<div class="phpcode"><code><span class="html">The image sharpen function (by Alex R. Austin) provided below seems to be very resource hungry and I couldn't make it work on two different servers - trying to sharpen a 413 x 413 image I ended up with "Fatal error: Allowed memory size of 8388608 bytes exhausted" or "Internal Server Error" or the script terminated without notice. Because I had no priviliges to change the default memory limit on these servers I started looking for other sharpen functions. I have come across a php Unsharp Mask function which works like a charm on both of the servers I dealt with. It can be found at <a href="http://vikjavev.no/hovudsida/umtestside.php." rel="nofollow" target="_blank">http://vikjavev.no/hovudsida/umtestside.php.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="63064">  <div class="votes">
    <div id="Vu63064">
    <a href="/manual/vote-note.php?id=63064&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63064">
    <a href="/manual/vote-note.php?id=63064&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63064" title="54% like this...">
    4
    </div>
  </div>
  <a href="#63064" class="name">
  <strong class="user"><em>felipensp at gmail dot com</em></strong></a><a class="genanchor" href="#63064"> &para;</a><div class="date" title="2006-03-12 09:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63064">
<div class="phpcode"><code><span class="html">Representation decimal of a color in hexadecimal for use on functions of library GD.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Representation hexadecimal<br />    </span><span class="default">$var </span><span class="keyword">= </span><span class="string">'#FFFFFF'</span><span class="keyword">;<br /><br />    function </span><span class="default">getRgbFromGd</span><span class="keyword">(</span><span class="default">$color_hex</span><span class="keyword">) {<br /><br />        return </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'hexdec'</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$color_hex</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">, </span><span class="string">'|'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)));<br /><br />    }<br />    <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">getRgbFromGd</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">));<br /><br />    </span><span class="comment">// Output: Array ( [0] =&gt; 255 [1] =&gt; 255 [2] =&gt; 255 )<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63689">  <div class="votes">
    <div id="Vu63689">
    <a href="/manual/vote-note.php?id=63689&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63689">
    <a href="/manual/vote-note.php?id=63689&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63689" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#63689" class="name">
  <strong class="user"><em>shd at earthling dot net</em></strong></a><a class="genanchor" href="#63689"> &para;</a><div class="date" title="2006-03-28 04:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63689">
<div class="phpcode"><code><span class="html">If you happen to need a way to output a Windows BMP file (e.g. when using the PEAR ExcelWriter), feel free to use the following code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagebmp </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$fn </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if (!</span><span class="default">$im</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />            <br />    if (</span><span class="default">$fn </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$fn </span><span class="keyword">= </span><span class="string">'php://output'</span><span class="keyword">;<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />    if (!</span><span class="default">$f</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />            <br />    </span><span class="comment">//Image dimensions<br />    </span><span class="default">$biWidth </span><span class="keyword">= </span><span class="default">imagesx </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$biHeight </span><span class="keyword">= </span><span class="default">imagesy </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">$biBPLine </span><span class="keyword">= </span><span class="default">$biWidth </span><span class="keyword">* </span><span class="default">3</span><span class="keyword">;<br />    </span><span class="default">$biStride </span><span class="keyword">= (</span><span class="default">$biBPLine </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">) &amp; ~</span><span class="default">3</span><span class="keyword">;<br />    </span><span class="default">$biSizeImage </span><span class="keyword">= </span><span class="default">$biStride </span><span class="keyword">* </span><span class="default">$biHeight</span><span class="keyword">;<br />    </span><span class="default">$bfOffBits </span><span class="keyword">= </span><span class="default">54</span><span class="keyword">;<br />    </span><span class="default">$bfSize </span><span class="keyword">= </span><span class="default">$bfOffBits </span><span class="keyword">+ </span><span class="default">$biSizeImage</span><span class="keyword">;<br />            <br />    </span><span class="comment">//BITMAPFILEHEADER<br />    </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="string">'BM'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">pack </span><span class="keyword">(</span><span class="string">'VvvV'</span><span class="keyword">, </span><span class="default">$bfSize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bfOffBits</span><span class="keyword">));<br />            <br />    </span><span class="comment">//BITMAPINFO (BITMAPINFOHEADER)<br />    </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">pack </span><span class="keyword">(</span><span class="string">'VVVvvVVVVVV'</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">$biWidth</span><span class="keyword">, </span><span class="default">$biHeight</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$biSizeImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />            <br />    </span><span class="default">$numpad </span><span class="keyword">= </span><span class="default">$biStride </span><span class="keyword">- </span><span class="default">$biBPLine</span><span class="keyword">;<br />    for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">$biHeight </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; --</span><span class="default">$y</span><span class="keyword">)<br />    {<br />        for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$biWidth</span><span class="keyword">; ++</span><span class="default">$x</span><span class="keyword">)<br />        {<br />            </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imagecolorat </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">pack </span><span class="keyword">(</span><span class="string">'V'</span><span class="keyword">, </span><span class="default">$col</span><span class="keyword">), </span><span class="default">3</span><span class="keyword">);<br />        }<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numpad</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">)<br />            </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">pack </span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />    }<br />    </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />It works the same way as regular imagejpeg/imagepng do and only supports GD2.0 true colour bitmaps (which is what's required by ExcelWriter).</span></code></div>
  </div>
 </div>
  <div class="note" id="120217">  <div class="votes">
    <div id="Vu120217">
    <a href="/manual/vote-note.php?id=120217&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120217">
    <a href="/manual/vote-note.php?id=120217&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120217" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#120217" class="name">
  <strong class="user"><em>delabahan at gmail dot com</em></strong></a><a class="genanchor" href="#120217"> &para;</a><div class="date" title="2016-11-24 05:44"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120217">
<div class="phpcode"><code><span class="html">This is an example of get high resolution images.<br /><br /><span class="default">&lt;?php<br /> </span><span class="comment">/**<br /> * Class name      : resizeImage<br /> * Created by   : wang<br /> * Description   : This class is to resize the image from original size to new size <br /> */<br /></span><span class="keyword">class </span><span class="default">resizeImage<br /></span><span class="keyword">{<br />     </span><span class="comment">/**<br />     * Function name : resize_img<br />     * Description   : This function is to resize image <br />     * @param          : $origimg variable is the original image <br />     * @param          : $newimg variable is the new image <br />     * @param          : $w variable is the width of image <br />     * @param          : $f variable is the height of image <br />     */<br />    </span><span class="keyword">public  function </span><span class="default">resize_img</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">,</span><span class="default">$newimg</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">){<br />        </span><span class="default">$info </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">);<br />        </span><span class="default">$mime   </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'mime'</span><span class="keyword">];<br /><br />        </span><span class="comment">// Make sure that the requested file is actually an image<br />        </span><span class="keyword">if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$mime</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">) != </span><span class="string">'image/'</span><span class="keyword">)<br />        {<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 400 Bad Request'</span><span class="keyword">);<br />            return </span><span class="string">'Error: requested file is not an accepted type: ' </span><span class="keyword">.</span><span class="default">$origimg</span><span class="keyword">;<br />            exit();<br />        }<br /><br />        </span><span class="comment">// Check they extention of image<br />        </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">image_type_to_extension</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />        if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$extension</span><span class="keyword">) == </span><span class="string">'.png'</span><span class="keyword">){<br />            </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize_imagepng</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />            </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$newimg</span><span class="keyword">);<br />            </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />        }elseif(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$extension</span><span class="keyword">) == </span><span class="string">'.jpeg'</span><span class="keyword">){<br />            </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize_imagejpeg</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />            </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$newimg</span><span class="keyword">);<br />            </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />        }elseif(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$extension </span><span class="keyword">== </span><span class="string">'.gif'</span><span class="keyword">)){<br />            </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize_imagegif</span><span class="keyword">(</span><span class="default">$origimg</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />            </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$newimg</span><span class="keyword">);<br />            </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />        }<br /><br />    }<br />     </span><span class="comment">/**<br />     * End function name : resize_img<br />     */<br /><br />     /**<br />     * Function name : resize_imagepng<br />     * Description   : This function is to resize png image <br />     * @param          : $file variable is the original image <br />     * @param          : $w variable is the width of image <br />     * @param          : $f variable is the height of image <br />     */<br />    </span><span class="keyword">private function </span><span class="default">resize_imagepng</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">) {<br />       list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$dst </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />       </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />       return </span><span class="default">$dst</span><span class="keyword">;<br />    }<br />     </span><span class="comment">/**<br />     * End function name : resize_imagepng<br />     */<br /><br />     /**<br />     * Function name : resize_imagejpeg<br />     * Description   : This function is to resize jpeg image <br />     * @param          : $file variable is the original image <br />     * @param          : $w variable is the width of image <br />     * @param          : $f variable is the height of image <br />     */<br />    </span><span class="keyword">private function </span><span class="default">resize_imagejpeg</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">) {<br />       list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$dst </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />       </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />       return </span><span class="default">$dst</span><span class="keyword">;<br />    }<br />     </span><span class="comment">/**<br />     * End function name : resize_imagejpeg<br />     */<br /><br />     /**<br />     * Function name : resize_imagegif<br />     * Description   : This function is to resize gif image <br />     * @param          : $file variable is the original image <br />     * @param          : $w variable is the width of image <br />     * @param          : $f variable is the height of image <br />     */<br />    </span><span class="keyword">private function </span><span class="default">resize_imagegif</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">) {<br />       list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$src </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />       </span><span class="default">$dst </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />       </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />       return </span><span class="default">$dst</span><span class="keyword">;<br />    }<br />     </span><span class="comment">/**<br />     * End function name : resize_imagegif<br />     */<br /></span><span class="keyword">}<br /></span><span class="comment">/**<br />* End class name : resizeImage<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106150">  <div class="votes">
    <div id="Vu106150">
    <a href="/manual/vote-note.php?id=106150&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106150">
    <a href="/manual/vote-note.php?id=106150&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106150" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#106150" class="name">
  <strong class="user"><em>ingo at jache dot de</em></strong></a><a class="genanchor" href="#106150"> &para;</a><div class="date" title="2011-10-14 03:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106150">
<div class="phpcode"><code><span class="html">I know this might look somewhat superfluous to others, but i once came across a situation where i needed a *strong* blur on an image without having ImageMagick installed. Executing the convolution-filter several times on the same image is awfully slow and still doesn't give a good blur.<br /><br />The function below accepts a truecolor-image and a blur-factor between 0.0 and 1.0. Beware: It's still quite slow.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">blurImage</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">$blur</span><span class="keyword">)<br />    {<br />        </span><span class="default">$blur </span><span class="keyword">= </span><span class="default">$blur</span><span class="keyword">*</span><span class="default">$blur</span><span class="keyword">;<br />        </span><span class="default">$blur </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">min</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">$blur</span><span class="keyword">));<br />    <br />        </span><span class="default">$srcw </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">);<br />        </span><span class="default">$srch </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">);<br />        <br />        </span><span class="default">$dstimg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">,</span><span class="default">$srch</span><span class="keyword">);<br />    <br />        </span><span class="default">$f1a </span><span class="keyword">= </span><span class="default">$blur</span><span class="keyword">;<br />        </span><span class="default">$f1b </span><span class="keyword">= </span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$blur</span><span class="keyword">;<br /><br />    <br />        </span><span class="default">$cr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$cg </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$cb </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$nr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$ng </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$nb </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />        </span><span class="default">$or </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />        </span><span class="default">$og </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />        </span><span class="default">$ob </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br /><br />        </span><span class="comment">//-------------------------------------------------<br />        // first line is a special case<br />        //-------------------------------------------------<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$srcw</span><span class="keyword">;<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$srch</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        while (</span><span class="default">$x</span><span class="keyword">--)<br />        {<br />            </span><span class="comment">//horizontal blurren<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$cr </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$cg </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$cb </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    <br />            </span><span class="default">$nr </span><span class="keyword">= (</span><span class="default">$cr </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$or </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />            </span><span class="default">$ng </span><span class="keyword">= (</span><span class="default">$cg </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$og </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />            </span><span class="default">$nb </span><span class="keyword">= (</span><span class="default">$cb </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$ob </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);    <br /><br />            </span><span class="default">$or </span><span class="keyword">= </span><span class="default">$nr</span><span class="keyword">;<br />            </span><span class="default">$og </span><span class="keyword">= </span><span class="default">$ng</span><span class="keyword">;<br />            </span><span class="default">$ob </span><span class="keyword">= </span><span class="default">$nb</span><span class="keyword">;<br />            <br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,(</span><span class="default">$nr </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">) | (</span><span class="default">$ng </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) | (</span><span class="default">$nb</span><span class="keyword">));<br />        }<br />        </span><span class="comment">//-------------------------------------------------<br /><br />        //-------------------------------------------------<br />        // now process the entire picture<br />        //-------------------------------------------------<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$srch</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        while (</span><span class="default">$y</span><span class="keyword">--)<br />        {<br /><br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$or </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$og </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$ob </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br /><br />            </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$srcw</span><span class="keyword">;<br />            while (</span><span class="default">$x</span><span class="keyword">--)<br />            {<br />                </span><span class="comment">//horizontal <br />                </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">);<br />                </span><span class="default">$cr </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$cg </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$cb </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                <br />                </span><span class="default">$nr </span><span class="keyword">= (</span><span class="default">$cr </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$or </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />                </span><span class="default">$ng </span><span class="keyword">= (</span><span class="default">$cg </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$og </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />                </span><span class="default">$nb </span><span class="keyword">= (</span><span class="default">$cb </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$ob </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);    <br />    <br />                </span><span class="default">$or </span><span class="keyword">= </span><span class="default">$nr</span><span class="keyword">;<br />                </span><span class="default">$og </span><span class="keyword">= </span><span class="default">$ng</span><span class="keyword">;<br />                </span><span class="default">$ob </span><span class="keyword">= </span><span class="default">$nb</span><span class="keyword">;<br />                <br />                <br />                </span><span class="comment">//vertical <br />                </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />                </span><span class="default">$vr </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$vg </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                </span><span class="default">$vb </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />                <br />                </span><span class="default">$nr </span><span class="keyword">= (</span><span class="default">$nr </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$vr </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />                </span><span class="default">$ng </span><span class="keyword">= (</span><span class="default">$ng </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$vg </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);<br />                </span><span class="default">$nb </span><span class="keyword">= (</span><span class="default">$nb </span><span class="keyword">* </span><span class="default">$f1a</span><span class="keyword">) + (</span><span class="default">$vb </span><span class="keyword">* </span><span class="default">$f1b</span><span class="keyword">);    <br />    <br />                </span><span class="default">$vr </span><span class="keyword">= </span><span class="default">$nr</span><span class="keyword">;<br />                </span><span class="default">$vg </span><span class="keyword">= </span><span class="default">$ng</span><span class="keyword">;<br />                </span><span class="default">$vb </span><span class="keyword">= </span><span class="default">$nb</span><span class="keyword">;<br />                <br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,(</span><span class="default">$nr </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">) | (</span><span class="default">$ng </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) | (</span><span class="default">$nb</span><span class="keyword">));<br />            }<br />        <br />        }<br />        </span><span class="comment">//-------------------------------------------------<br />        </span><span class="keyword">return </span><span class="default">$dstimg</span><span class="keyword">;        <br /><br />    }<br /><br />    <br />    </span><span class="default">$srcimg </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"test.jpg"</span><span class="keyword">);<br />    </span><span class="default">$dstimg </span><span class="keyword">= </span><span class="default">blurImage</span><span class="keyword">(</span><span class="default">$srcimg</span><span class="keyword">,</span><span class="default">0.2</span><span class="keyword">);<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />    echo( </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">) );<br />    exit();<br />    <br />    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37131">  <div class="votes">
    <div id="Vu37131">
    <a href="/manual/vote-note.php?id=37131&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37131">
    <a href="/manual/vote-note.php?id=37131&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37131" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#37131" class="name">
  <strong class="user"><em>jeff at lushmedia dot com</em></strong></a><a class="genanchor" href="#37131"> &para;</a><div class="date" title="2003-11-04 08:52"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37131">
<div class="phpcode"><code><span class="html">I wrote an online overview of the image functions that people might find useful. In addition to a general overview of the various function categories and code samples, I have included many interactive examples of the functions, allowing viewers to experiment with the parameters, and seeing the results in real time. The presentation is located at New York PHP<br /><a href="http://www.nyphp.org/content/presentations/GDintro/" rel="nofollow" target="_blank">http://www.nyphp.org/content/presentations/GDintro/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120139">  <div class="votes">
    <div id="Vu120139">
    <a href="/manual/vote-note.php?id=120139&amp;page=ref.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120139">
    <a href="/manual/vote-note.php?id=120139&amp;page=ref.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120139" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#120139" class="name">
  <strong class="user"><em>mpyw</em></strong></a><a class="genanchor" href="#120139"> &para;</a><div class="date" title="2016-11-10 08:45"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120139">
<div class="phpcode"><code><span class="html">This is an example of black-and-white imagebmp() implementation. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Output a black-and-white BMP image to either the browser or a file.<br /> * <br /> * @param resource $image<br /> *            An image resource, returned by one of the image creation functions,<br /> *            such as imagecreatetruecolor().<br /> *<br /> * @param string|null $to<br /> *            The path or an open stream resource<br /> *            (which is automatically being closed after this function returns)<br /> *            to save the file to.<br /> *            If not set or NULL, the raw image stream will be outputted directly.<br /> *<br /> * @param float $threshold<br /> *            The number in the range of 0.0 to 1.0.<br /> *            Brighter for larger, or darker for smaller.<br /> *<br /> * @return bool Returns TRUE on success or FALSE on failure.<br /> * <br /> */<br /></span><span class="keyword">function </span><span class="default">imagebwbmp</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$to </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$threshold </span><span class="keyword">= </span><span class="default">0.5</span><span class="keyword">)<br />{<br />    if (</span><span class="default">func_num_args</span><span class="keyword">() &lt; </span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$fmt </span><span class="keyword">= </span><span class="string">"imagebwbmp() expects a least 1 parameters, %d given"</span><span class="keyword">;<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$fmt</span><span class="keyword">, </span><span class="default">func_num_args</span><span class="keyword">()), </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return;<br />    }<br />    if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)) {<br />        </span><span class="default">$fmt </span><span class="keyword">= </span><span class="string">"imagebwbmp() expects parameter 1 to be resource, %s given"</span><span class="keyword">;<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$fmt</span><span class="keyword">, </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)), </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return;<br />    }<br />    if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$threshold</span><span class="keyword">)) {<br />        </span><span class="default">$fmt </span><span class="keyword">= </span><span class="string">"imagebwbmp() expects parameter 3 to be float, %s given"</span><span class="keyword">;<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$fmt</span><span class="keyword">, </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$threshold</span><span class="keyword">)), </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return;<br />    }<br /><br />    if (</span><span class="default">get_resource_type</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">) !== </span><span class="string">'gd'</span><span class="keyword">) {<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"imagebwbmp(): supplied resource is not a valid gd resource"</span><span class="keyword">;<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    switch (</span><span class="default">true</span><span class="keyword">) {<br />        case </span><span class="default">$to </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">:<br />            break;<br />        case </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">) &amp;&amp; </span><span class="default">get_resource_type</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">) === </span><span class="string">'stream'</span><span class="keyword">:<br />        case </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">) &amp;&amp; </span><span class="default">$to </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">):<br />            if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[waxc+]/'</span><span class="keyword">, </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">)[</span><span class="string">'mode'</span><span class="keyword">])) {<br />                break;<br />            }<br />        default:<br />            </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"imagebwbmp(): Invalid 2nd parameter, it must a writable filename or a writable stream"</span><span class="keyword">;<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    if (</span><span class="default">$to </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$to </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://output'</span><span class="keyword">, </span><span class="string">'wb'</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$biWidth </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$biHeight </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$biSizeImage </span><span class="keyword">= ((int)</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$biWidth </span><span class="keyword">/ </span><span class="default">32</span><span class="keyword">) * </span><span class="default">32 </span><span class="keyword">/ </span><span class="default">8 </span><span class="keyword">* </span><span class="default">$biHeight</span><span class="keyword">);<br />    </span><span class="default">$bfOffBits </span><span class="keyword">= </span><span class="default">54 </span><span class="keyword">+ </span><span class="default">4 </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// Use two colors (black and white)<br />    </span><span class="default">$bfSize </span><span class="keyword">= </span><span class="default">$bfOffBits </span><span class="keyword">+ </span><span class="default">$biSizeImage</span><span class="keyword">;<br />    <br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="string">'BM'</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'VvvV'</span><span class="keyword">, </span><span class="default">$bfSize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bfOffBits</span><span class="keyword">));<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'VVVvvVVVVVV'</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">$biWidth</span><span class="keyword">, </span><span class="default">$biHeight</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$biSizeImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="string">"\xff\xff\xff\x00"</span><span class="keyword">); </span><span class="comment">// white<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="string">"\x00\x00\x00\x00"</span><span class="keyword">); </span><span class="comment">// black<br />    <br />    </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">$biHeight </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; --</span><span class="default">$y</span><span class="keyword">) {<br />        </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$biWidth</span><span class="keyword">; ++</span><span class="default">$x</span><span class="keyword">) {<br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />            </span><span class="default">$value </span><span class="keyword">= (</span><span class="default">0.299 </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + </span><span class="default">0.587 </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">0.114 </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]) / </span><span class="default">0xff</span><span class="keyword">;<br />            </span><span class="default">$color </span><span class="keyword">= (int)(</span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">$threshold</span><span class="keyword">);<br />            </span><span class="default">$byte </span><span class="keyword">= (</span><span class="default">$byte </span><span class="keyword">&lt;&lt; </span><span class="default">1</span><span class="keyword">) | </span><span class="default">$color</span><span class="keyword">;<br />            if (</span><span class="default">$x </span><span class="keyword">% </span><span class="default">8 </span><span class="keyword">=== </span><span class="default">7</span><span class="keyword">) {<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">, </span><span class="default">$byte</span><span class="keyword">));<br />                </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            }<br />        }<br />        if (</span><span class="default">$x </span><span class="keyword">% </span><span class="default">8</span><span class="keyword">) {<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">, </span><span class="default">$byte </span><span class="keyword">&lt;&lt; (</span><span class="default">8 </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">% </span><span class="default">8</span><span class="keyword">)));<br />        }<br />        if (</span><span class="default">$x </span><span class="keyword">% </span><span class="default">32</span><span class="keyword">) {<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"\x00"</span><span class="keyword">, (int)((</span><span class="default">32 </span><span class="keyword">- </span><span class="default">$x </span><span class="keyword">% </span><span class="default">32</span><span class="keyword">) / </span><span class="default">8</span><span class="keyword">)));<br />        }<br />    }<br /><br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.image&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.image.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.image.php">GD</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.image.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="image.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="image.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="image.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.image.php" title="GD and Image Functions">GD and Image Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.gdimage.php" title="GdImage">GdImage</a>
                        </li>
                                                <li class="">
                            <a href="class.gdfont.php" title="GdFont">GdFont</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
