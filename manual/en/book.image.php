<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GD - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.image.php">
 <link rel="shorturl" href="https://www.php.net/image">
 <link rel="alternate" href="https://www.php.net/image" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.utilspec.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.read-exif-data.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.image.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.image.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.image.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.image.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.image.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.image.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.image.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.image.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.image.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.image.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.image.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.image.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Image Processing and GD" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GD - Manual" />
<meta name="twitter:description" content="Image Processing and GD" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GD - Manual" />
<meta itemprop="description" content="Image Processing and GD" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Image Processing and GD" />

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
        <a href="intro.image.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.read-exif-data.php">
          &laquo; read_exif_data        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      </ul>
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
            <option value='en/book.image.php' selected="selected">English</option>
            <option value='de/book.image.php'>German</option>
            <option value='es/book.image.php'>Spanish</option>
            <option value='fr/book.image.php'>French</option>
            <option value='it/book.image.php'>Italian</option>
            <option value='ja/book.image.php'>Japanese</option>
            <option value='pt_BR/book.image.php'>Brazilian Portuguese</option>
            <option value='ru/book.image.php'>Russian</option>
            <option value='tr/book.image.php'>Turkish</option>
            <option value='uk/book.image.php'>Ukrainian</option>
            <option value='zh/book.image.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.image" class="book">
 
 <h1 class="title">Image Processing and GD</h1>
 
 
 
 

 
 
 







 




 







 






 




 




<ul class="chunklist chunklist_book"><li><a href="intro.image.php">Introduction</a></li><li><a href="image.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="image.requirements.php">Requirements</a></li><li><a href="image.installation.php">Installation</a></li><li><a href="image.configuration.php">Runtime Configuration</a></li><li><a href="image.resources.php">Resource Types</a></li></ul></li><li><a href="image.constants.php">Predefined Constants</a></li><li><a href="image.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="image.examples-png.php">PNG creation with PHP</a></li><li><a href="image.examples-watermark.php">Adding watermarks to images using alpha channels</a></li><li><a href="image.examples.merged-watermark.php">Using imagecopymerge to create a translucent watermark</a></li></ul></li><li><a href="ref.image.php">GD and Image Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.gd-info.php">gd_info</a> — Retrieve information about the currently installed GD library</li><li><a href="function.getimagesize.php">getimagesize</a> — Get the size of an image</li><li><a href="function.getimagesizefromstring.php">getimagesizefromstring</a> — Get the size of an image from a string</li><li><a href="function.image-type-to-extension.php">image_type_to_extension</a> — Get file extension for image type</li><li><a href="function.image-type-to-mime-type.php">image_type_to_mime_type</a> — Get Mime-Type for image-type returned by getimagesize,
   exif_read_data, exif_thumbnail, exif_imagetype</li><li><a href="function.image2wbmp.php">image2wbmp</a> — Output image to browser or file</li><li><a href="function.imageaffine.php">imageaffine</a> — Return an image containing the affine transformed src image, using an optional clipping area</li><li><a href="function.imageaffinematrixconcat.php">imageaffinematrixconcat</a> — Concatenate two affine transformation matrices</li><li><a href="function.imageaffinematrixget.php">imageaffinematrixget</a> — Get an affine transformation matrix</li><li><a href="function.imagealphablending.php">imagealphablending</a> — Set the blending mode for an image</li><li><a href="function.imageantialias.php">imageantialias</a> — Should antialias functions be used or not</li><li><a href="function.imagearc.php">imagearc</a> — Draws an arc</li><li><a href="function.imageavif.php">imageavif</a> — Output image to browser or file</li><li><a href="function.imagebmp.php">imagebmp</a> — Output a BMP image to browser or file</li><li><a href="function.imagechar.php">imagechar</a> — Draw a character horizontally</li><li><a href="function.imagecharup.php">imagecharup</a> — Draw a character vertically</li><li><a href="function.imagecolorallocate.php">imagecolorallocate</a> — Allocate a color for an image</li><li><a href="function.imagecolorallocatealpha.php">imagecolorallocatealpha</a> — Allocate a color for an image</li><li><a href="function.imagecolorat.php">imagecolorat</a> — Get the index of the color of a pixel</li><li><a href="function.imagecolorclosest.php">imagecolorclosest</a> — Get the index of the closest color to the specified color</li><li><a href="function.imagecolorclosestalpha.php">imagecolorclosestalpha</a> — Get the index of the closest color to the specified color + alpha</li><li><a href="function.imagecolorclosesthwb.php">imagecolorclosesthwb</a> — Get the index of the color which has the hue, white and blackness</li><li><a href="function.imagecolordeallocate.php">imagecolordeallocate</a> — De-allocate a color for an image</li><li><a href="function.imagecolorexact.php">imagecolorexact</a> — Get the index of the specified color</li><li><a href="function.imagecolorexactalpha.php">imagecolorexactalpha</a> — Get the index of the specified color + alpha</li><li><a href="function.imagecolormatch.php">imagecolormatch</a> — Makes the colors of the palette version of an image more closely match the true color version</li><li><a href="function.imagecolorresolve.php">imagecolorresolve</a> — Get the index of the specified color or its closest possible alternative</li><li><a href="function.imagecolorresolvealpha.php">imagecolorresolvealpha</a> — Get the index of the specified color + alpha or its closest possible alternative</li><li><a href="function.imagecolorset.php">imagecolorset</a> — Set the color for the specified palette index</li><li><a href="function.imagecolorsforindex.php">imagecolorsforindex</a> — Get the colors for an index</li><li><a href="function.imagecolorstotal.php">imagecolorstotal</a> — Find out the number of colors in an image's palette</li><li><a href="function.imagecolortransparent.php">imagecolortransparent</a> — Define a color as transparent</li><li><a href="function.imageconvolution.php">imageconvolution</a> — Apply a 3x3 convolution matrix, using coefficient and offset</li><li><a href="function.imagecopy.php">imagecopy</a> — Copy part of an image</li><li><a href="function.imagecopymerge.php">imagecopymerge</a> — Copy and merge part of an image</li><li><a href="function.imagecopymergegray.php">imagecopymergegray</a> — Copy and merge part of an image with gray scale</li><li><a href="function.imagecopyresampled.php">imagecopyresampled</a> — Copy and resize part of an image with resampling</li><li><a href="function.imagecopyresized.php">imagecopyresized</a> — Copy and resize part of an image</li><li><a href="function.imagecreate.php">imagecreate</a> — Create a new palette based image</li><li><a href="function.imagecreatefromavif.php">imagecreatefromavif</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefrombmp.php">imagecreatefrombmp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromgd.php">imagecreatefromgd</a> — Create a new image from GD file or URL</li><li><a href="function.imagecreatefromgd2.php">imagecreatefromgd2</a> — Create a new image from GD2 file or URL</li><li><a href="function.imagecreatefromgd2part.php">imagecreatefromgd2part</a> — Create a new image from a given part of GD2 file or URL</li><li><a href="function.imagecreatefromgif.php">imagecreatefromgif</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromjpeg.php">imagecreatefromjpeg</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefrompng.php">imagecreatefrompng</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromstring.php">imagecreatefromstring</a> — Create a new image from the image stream in the string</li><li><a href="function.imagecreatefromtga.php">imagecreatefromtga</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromwbmp.php">imagecreatefromwbmp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromwebp.php">imagecreatefromwebp</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromxbm.php">imagecreatefromxbm</a> — Create a new image from file or URL</li><li><a href="function.imagecreatefromxpm.php">imagecreatefromxpm</a> — Create a new image from file or URL</li><li><a href="function.imagecreatetruecolor.php">imagecreatetruecolor</a> — Create a new true color image</li><li><a href="function.imagecrop.php">imagecrop</a> — Crop an image to the given rectangle</li><li><a href="function.imagecropauto.php">imagecropauto</a> — Crop an image automatically using one of the available modes</li><li><a href="function.imagedashedline.php">imagedashedline</a> — Draw a dashed line</li><li><a href="function.imagedestroy.php">imagedestroy</a> — Destroy an image</li><li><a href="function.imageellipse.php">imageellipse</a> — Draw an ellipse</li><li><a href="function.imagefill.php">imagefill</a> — Flood fill</li><li><a href="function.imagefilledarc.php">imagefilledarc</a> — Draw a partial arc and fill it</li><li><a href="function.imagefilledellipse.php">imagefilledellipse</a> — Draw a filled ellipse</li><li><a href="function.imagefilledpolygon.php">imagefilledpolygon</a> — Draw a filled polygon</li><li><a href="function.imagefilledrectangle.php">imagefilledrectangle</a> — Draw a filled rectangle</li><li><a href="function.imagefilltoborder.php">imagefilltoborder</a> — Flood fill to specific color</li><li><a href="function.imagefilter.php">imagefilter</a> — Applies a filter to an image</li><li><a href="function.imageflip.php">imageflip</a> — Flips an image using a given mode</li><li><a href="function.imagefontheight.php">imagefontheight</a> — Get font height</li><li><a href="function.imagefontwidth.php">imagefontwidth</a> — Get font width</li><li><a href="function.imageftbbox.php">imageftbbox</a> — Give the bounding box of a text using fonts via freetype2</li><li><a href="function.imagefttext.php">imagefttext</a> — Write text to the image using fonts using FreeType 2</li><li><a href="function.imagegammacorrect.php">imagegammacorrect</a> — Apply a gamma correction to a GD image</li><li><a href="function.imagegd.php">imagegd</a> — Output GD image to browser or file</li><li><a href="function.imagegd2.php">imagegd2</a> — Output GD2 image to browser or file</li><li><a href="function.imagegetclip.php">imagegetclip</a> — Get the clipping rectangle</li><li><a href="function.imagegetinterpolation.php">imagegetinterpolation</a> — Get the interpolation method</li><li><a href="function.imagegif.php">imagegif</a> — Output image to browser or file</li><li><a href="function.imagegrabscreen.php">imagegrabscreen</a> — Captures the whole screen</li><li><a href="function.imagegrabwindow.php">imagegrabwindow</a> — Captures a window</li><li><a href="function.imageinterlace.php">imageinterlace</a> — Enable or disable interlace</li><li><a href="function.imageistruecolor.php">imageistruecolor</a> — Finds whether an image is a truecolor image</li><li><a href="function.imagejpeg.php">imagejpeg</a> — Output image to browser or file</li><li><a href="function.imagelayereffect.php">imagelayereffect</a> — Set the alpha blending flag to use layering effects</li><li><a href="function.imageline.php">imageline</a> — Draw a line</li><li><a href="function.imageloadfont.php">imageloadfont</a> — Load a new font</li><li><a href="function.imageopenpolygon.php">imageopenpolygon</a> — Draws an open polygon</li><li><a href="function.imagepalettecopy.php">imagepalettecopy</a> — Copy the palette from one image to another</li><li><a href="function.imagepalettetotruecolor.php">imagepalettetotruecolor</a> — Converts a palette based image to true color</li><li><a href="function.imagepng.php">imagepng</a> — Output a PNG image to either the browser or a file</li><li><a href="function.imagepolygon.php">imagepolygon</a> — Draws a polygon</li><li><a href="function.imagerectangle.php">imagerectangle</a> — Draw a rectangle</li><li><a href="function.imageresolution.php">imageresolution</a> — Get or set the resolution of the image</li><li><a href="function.imagerotate.php">imagerotate</a> — Rotate an image with a given angle</li><li><a href="function.imagesavealpha.php">imagesavealpha</a> — Whether to retain full alpha channel information when saving images</li><li><a href="function.imagescale.php">imagescale</a> — Scale an image using the given new width and height</li><li><a href="function.imagesetbrush.php">imagesetbrush</a> — Set the brush image for line drawing</li><li><a href="function.imagesetclip.php">imagesetclip</a> — Set the clipping rectangle</li><li><a href="function.imagesetinterpolation.php">imagesetinterpolation</a> — Set the interpolation method</li><li><a href="function.imagesetpixel.php">imagesetpixel</a> — Set a single pixel</li><li><a href="function.imagesetstyle.php">imagesetstyle</a> — Set the style for line drawing</li><li><a href="function.imagesetthickness.php">imagesetthickness</a> — Set the thickness for line drawing</li><li><a href="function.imagesettile.php">imagesettile</a> — Set the tile image for filling</li><li><a href="function.imagestring.php">imagestring</a> — Draw a string horizontally</li><li><a href="function.imagestringup.php">imagestringup</a> — Draw a string vertically</li><li><a href="function.imagesx.php">imagesx</a> — Get image width</li><li><a href="function.imagesy.php">imagesy</a> — Get image height</li><li><a href="function.imagetruecolortopalette.php">imagetruecolortopalette</a> — Convert a true color image to a palette image</li><li><a href="function.imagettfbbox.php">imagettfbbox</a> — Give the bounding box of a text using TrueType fonts</li><li><a href="function.imagettftext.php">imagettftext</a> — Write text to the image using TrueType fonts</li><li><a href="function.imagetypes.php">imagetypes</a> — Return the image types supported by this PHP build</li><li><a href="function.imagewbmp.php">imagewbmp</a> — Output image to browser or file</li><li><a href="function.imagewebp.php">imagewebp</a> — Output a WebP image to browser or file</li><li><a href="function.imagexbm.php">imagexbm</a> — Output an XBM image to browser or file</li><li><a href="function.iptcembed.php">iptcembed</a> — Embeds binary IPTC data into a JPEG image</li><li><a href="function.iptcparse.php">iptcparse</a> — Parse a binary IPTC block into single tags</li><li><a href="function.jpeg2wbmp.php">jpeg2wbmp</a> — Convert JPEG image file to WBMP image file</li><li><a href="function.png2wbmp.php">png2wbmp</a> — Convert PNG image file to WBMP image file</li></ul></li><li><a href="class.gdimage.php">GdImage</a> — The GdImage class</li><li><a href="class.gdfont.php">GdFont</a> — The GdFont class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.image%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.image&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.image.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103685">  <div class="votes">
    <div id="Vu103685">
    <a href="/manual/vote-note.php?id=103685&amp;page=book.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103685">
    <a href="/manual/vote-note.php?id=103685&amp;page=book.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103685" title="51% like this...">
    3
    </div>
  </div>
  <a href="#103685" class="name">
  <strong class="user"><em>kurdtpage at gmail dot com</em></strong></a><a class="genanchor" href="#103685"> &para;</a><div class="date" title="2011-04-27 10:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103685">
<div class="phpcode"><code><span class="html">When using GD, please make sure of the following things:<br /><br />1. The file that is used to manipulate images is saved as ANSI format and not UTF-8<br />2. There is no space in front of the opening tag <span class="default">&lt;?php</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97137">  <div class="votes">
    <div id="Vu97137">
    <a href="/manual/vote-note.php?id=97137&amp;page=book.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97137">
    <a href="/manual/vote-note.php?id=97137&amp;page=book.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97137" title="51% like this...">
    3
    </div>
  </div>
  <a href="#97137" class="name">
  <strong class="user"><em>mail at ecross dot nl</em></strong></a><a class="genanchor" href="#97137"> &para;</a><div class="date" title="2010-04-03 07:31"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97137">
<div class="phpcode"><code><span class="html">hello there,<br />i made a function to create a gradient image.<br /><br />description:<br />gradient(int image_width, int image_height, <br />int start_red, int start_green, int start_blue, <br />int end_red, int end_green, int end_blue, <br />bool vertical)<br /><br />function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">gradient</span><span class="keyword">(</span><span class="default">$image_width</span><span class="keyword">, </span><span class="default">$image_height</span><span class="keyword">,</span><span class="default">$c1_r</span><span class="keyword">, </span><span class="default">$c1_g</span><span class="keyword">, </span><span class="default">$c1_b</span><span class="keyword">, </span><span class="default">$c2_r</span><span class="keyword">, </span><span class="default">$c2_g</span><span class="keyword">, </span><span class="default">$c2_b</span><span class="keyword">, </span><span class="default">$vertical</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />{<br /></span><span class="comment">// first: lets type cast;<br /></span><span class="default">$image_width </span><span class="keyword">= (integer)</span><span class="default">$image_width</span><span class="keyword">;<br /></span><span class="default">$image_height </span><span class="keyword">= (integer)</span><span class="default">$image_height</span><span class="keyword">;<br /></span><span class="default">$c1_r </span><span class="keyword">= (integer)</span><span class="default">$c1_r</span><span class="keyword">;<br /></span><span class="default">$c1_g </span><span class="keyword">= (integer)</span><span class="default">$c1_g</span><span class="keyword">;<br /></span><span class="default">$c1_b </span><span class="keyword">= (integer)</span><span class="default">$c1_b</span><span class="keyword">;<br /></span><span class="default">$c2_r </span><span class="keyword">= (integer)</span><span class="default">$c2_r</span><span class="keyword">;<br /></span><span class="default">$c2_g </span><span class="keyword">= (integer)</span><span class="default">$c2_g</span><span class="keyword">;<br /></span><span class="default">$c2_b </span><span class="keyword">= (integer)</span><span class="default">$c2_b</span><span class="keyword">;<br /></span><span class="default">$vertical </span><span class="keyword">= (bool)</span><span class="default">$vertical</span><span class="keyword">;<br /><br /></span><span class="comment">// create a image<br /></span><span class="default">$image  </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$image_width</span><span class="keyword">, </span><span class="default">$image_height</span><span class="keyword">); <br /><br /></span><span class="comment">// make the gradient<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$image_height</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) <br />{ <br /></span><span class="default">$color_r </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* (</span><span class="default">$c2_r</span><span class="keyword">-</span><span class="default">$c1_r</span><span class="keyword">) / </span><span class="default">$image_height</span><span class="keyword">)+</span><span class="default">$c1_r</span><span class="keyword">;<br /></span><span class="default">$color_g </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* (</span><span class="default">$c2_g</span><span class="keyword">-</span><span class="default">$c1_g</span><span class="keyword">) / </span><span class="default">$image_height</span><span class="keyword">)+</span><span class="default">$c1_g</span><span class="keyword">;<br /></span><span class="default">$color_b </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* (</span><span class="default">$c2_b</span><span class="keyword">-</span><span class="default">$c1_b</span><span class="keyword">) / </span><span class="default">$image_height</span><span class="keyword">)+</span><span class="default">$c1_b</span><span class="keyword">;<br /><br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$color_r</span><span class="keyword">, </span><span class="default">$color_g</span><span class="keyword">, </span><span class="default">$color_b</span><span class="keyword">);<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$image_width</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />} <br /><br /></span><span class="comment"># Prints out all the figures and picture and frees memory <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">); <br /><br />if(</span><span class="default">$vertical</span><span class="keyword">){</span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);}<br /></span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); <br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87566">  <div class="votes">
    <div id="Vu87566">
    <a href="/manual/vote-note.php?id=87566&amp;page=book.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87566">
    <a href="/manual/vote-note.php?id=87566&amp;page=book.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87566" title="51% like this...">
    3
    </div>
  </div>
  <a href="#87566" class="name">
  <strong class="user"><em>Thomas</em></strong></a><a class="genanchor" href="#87566"> &para;</a><div class="date" title="2008-12-10 02:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87566">
<div class="phpcode"><code><span class="html">You know, maybe this goes without saying, but I thought I would drop a note in here.  When developing code to resize images, it is best not to use GD.  When using the current GD methodologies, you are reading content from an image and manipulating it.  By then writing that content to a brand new file, you are losing the EXIF data.<br /><br />For purposes when you want to retain EXIF data, it is recommended that you compile in and use the PECL Imagick extension.  It has great resizing methods built right in and the EXIF data is retained.</span></code></div>
  </div>
 </div>
  <div class="note" id="86564">  <div class="votes">
    <div id="Vu86564">
    <a href="/manual/vote-note.php?id=86564&amp;page=book.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86564">
    <a href="/manual/vote-note.php?id=86564&amp;page=book.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86564" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86564" class="name">
  <strong class="user"><em>code at ashleyhunt dot co dot uk</em></strong></a><a class="genanchor" href="#86564"> &para;</a><div class="date" title="2008-10-23 06:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86564">
<div class="phpcode"><code><span class="html">I have been looking to send the output from GD to a text string without proxying via a file or to a browser.<br /><br />I have come up with a solution.<br /><br />This code buffers the output between the ob_start() and ob_end() functions into ob_get_contents()<br /><br />See the example below<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Create a test source image for this example<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">300</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">233</span><span class="keyword">, </span><span class="default">14</span><span class="keyword">, </span><span class="default">91</span><span class="keyword">);<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">,  </span><span class="string">'A Simple Text String'</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">);<br /><br /></span><span class="comment">// start buffering<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="comment">// output jpeg (or any other chosen) format &amp; quality<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">85</span><span class="keyword">);<br /></span><span class="comment">// capture output to string<br /></span><span class="default">$contents </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="comment">// end capture<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br /></span><span class="comment">// be tidy; free up memory<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="comment">// lastly (for the example) we are writing the string to a file<br /></span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"./temp/img.jpg"</span><span class="keyword">, </span><span class="string">"a+" </span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">( </span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$contents </span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$fh </span><span class="keyword">);<br /></span><span class="default">?&gt;</span> <br /><br />Enjoy!<br />Ashley</span></code></div>
  </div>
 </div>
  <div class="note" id="107069">  <div class="votes">
    <div id="Vu107069">
    <a href="/manual/vote-note.php?id=107069&amp;page=book.image&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107069">
    <a href="/manual/vote-note.php?id=107069&amp;page=book.image&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107069" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#107069" class="name">
  <strong class="user"><em>herbert dot walde at googlemail dot com</em></strong></a><a class="genanchor" href="#107069"> &para;</a><div class="date" title="2012-01-04 11:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107069">
<div class="phpcode"><code><span class="html">In case your script is using output-buffering-functions somewhere, then you have to clear the buffer first ( with ob_clear() ), before outputting an image with a function like imagepng(). 
<br />
<br />And you should make sure that no buffer will get send after outputing an image by using the ob_end_flush()-function.
<br />
<br />Furthermore you should check if a buffer has already been flushed somewhere before. This can be done using the headers_sent()-function.
<br />
<br />Here is the full solution:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">headers_sent</span><span class="keyword">()){
<br />    die(</span><span class="string">'Headers have been send somewhere within my script'</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">ob_clean</span><span class="keyword">(); </span><span class="comment">//Clears the buffer
<br />
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,  </span><span class="default">NULL</span><span class="keyword">);
<br />
<br /></span><span class="default">ob_end_flush</span><span class="keyword">(); </span><span class="comment">//Now we send the header and image plus we make sure that nothing will get send from now on (including possible shutdown-functions and __destruct()-methods) till the end of page-execution
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.image&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.image.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.utilspec.image.php">Image Processing and Generation</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.exif.php" title="Exif">Exif</a>
                        </li>
                                                <li class="current">
                            <a href="book.image.php" title="GD">GD</a>
                        </li>
                                                <li class="">
                            <a href="book.gmagick.php" title="Gmagick">Gmagick</a>
                        </li>
                                                <li class="">
                            <a href="book.imagick.php" title="ImageMagick">ImageMagick</a>
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
