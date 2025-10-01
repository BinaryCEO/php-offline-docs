<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ImageMagick - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.imagick.php">
 <link rel="shorturl" href="https://www.php.net/imagick">
 <link rel="alternate" href="https://www.php.net/imagick" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.utilspec.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/gmagickpixel.setcolorvalue.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.imagick.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.imagick.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.imagick.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.imagick.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.imagick.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.imagick.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.imagick.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.imagick.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.imagick.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.imagick.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.imagick.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.imagick.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Image Processing (ImageMagick)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ImageMagick - Manual" />
<meta name="twitter:description" content="Image Processing (ImageMagick)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ImageMagick - Manual" />
<meta itemprop="description" content="Image Processing (ImageMagick)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Image Processing (ImageMagick)" />

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
        <a href="intro.imagick.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gmagickpixel.setcolorvalue.php">
          &laquo; GmagickPixel::setcolorvalue        </a>
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
            <option value='en/book.imagick.php' selected="selected">English</option>
            <option value='de/book.imagick.php'>German</option>
            <option value='es/book.imagick.php'>Spanish</option>
            <option value='fr/book.imagick.php'>French</option>
            <option value='it/book.imagick.php'>Italian</option>
            <option value='ja/book.imagick.php'>Japanese</option>
            <option value='pt_BR/book.imagick.php'>Brazilian Portuguese</option>
            <option value='ru/book.imagick.php'>Russian</option>
            <option value='tr/book.imagick.php'>Turkish</option>
            <option value='uk/book.imagick.php'>Ukrainian</option>
            <option value='zh/book.imagick.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.imagick" class="book">
 
 <h1 class="title">Image Processing (ImageMagick)</h1>
 
 
 
 
 
 
 







 





 







 





 





 





 






 







<ul class="chunklist chunklist_book"><li><a href="intro.imagick.php">Introduction</a></li><li><a href="imagick.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="imagick.requirements.php">Requirements</a></li><li><a href="imagick.installation.php">Installation</a></li><li><a href="imagick.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="imagick.constants.php">Predefined Constants</a></li><li><a href="imagick.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="imagick.examples-1.php">Basic usage</a></li></ul></li><li><a href="class.imagick.php">Imagick</a> — The Imagick class<ul class="chunklist chunklist_book chunklist_children"><li><a href="imagick.adaptiveblurimage.php">Imagick::adaptiveBlurImage</a> — Adds adaptive blur filter to image</li><li><a href="imagick.adaptiveresizeimage.php">Imagick::adaptiveResizeImage</a> — Adaptively resize image with data dependent triangulation</li><li><a href="imagick.adaptivesharpenimage.php">Imagick::adaptiveSharpenImage</a> — Adaptively sharpen the image</li><li><a href="imagick.adaptivethresholdimage.php">Imagick::adaptiveThresholdImage</a> — Selects a threshold for each pixel based on a range of intensity</li><li><a href="imagick.addimage.php">Imagick::addImage</a> — Adds new image to Imagick object image list</li><li><a href="imagick.addnoiseimage.php">Imagick::addNoiseImage</a> — Adds random noise to the image</li><li><a href="imagick.affinetransformimage.php">Imagick::affineTransformImage</a> — Transforms an image</li><li><a href="imagick.animateimages.php">Imagick::animateImages</a> — Animates an image or images</li><li><a href="imagick.annotateimage.php">Imagick::annotateImage</a> — Annotates an image with text</li><li><a href="imagick.appendimages.php">Imagick::appendImages</a> — Append a set of images</li><li><a href="imagick.autolevelimage.php">Imagick::autoLevelImage</a> — Adjusts the levels of a particular image channel</li><li><a href="imagick.averageimages.php">Imagick::averageImages</a> — Average a set of images</li><li><a href="imagick.blackthresholdimage.php">Imagick::blackThresholdImage</a> — Forces all pixels below the threshold into black</li><li><a href="imagick.blueshiftimage.php">Imagick::blueShiftImage</a> — Mutes the colors of the image</li><li><a href="imagick.blurimage.php">Imagick::blurImage</a> — Adds blur filter to image</li><li><a href="imagick.borderimage.php">Imagick::borderImage</a> — Surrounds the image with a border</li><li><a href="imagick.brightnesscontrastimage.php">Imagick::brightnessContrastImage</a> — Change the brightness and/or contrast of an image</li><li><a href="imagick.charcoalimage.php">Imagick::charcoalImage</a> — Simulates a charcoal drawing</li><li><a href="imagick.chopimage.php">Imagick::chopImage</a> — Removes a region of an image and trims</li><li><a href="imagick.clampimage.php">Imagick::clampImage</a> — Restricts the color range from 0 to the quantum depth.</li><li><a href="imagick.clear.php">Imagick::clear</a> — Clears all resources associated to Imagick object</li><li><a href="imagick.clipimage.php">Imagick::clipImage</a> — Clips along the first path from the 8BIM profile</li><li><a href="imagick.clipimagepath.php">Imagick::clipImagePath</a> — Clips along the named paths from the 8BIM profile, if present</li><li><a href="imagick.clippathimage.php">Imagick::clipPathImage</a> — Clips along the named paths from the 8BIM profile</li><li><a href="imagick.clone.php">Imagick::clone</a> — Makes an exact copy of the Imagick object</li><li><a href="imagick.clutimage.php">Imagick::clutImage</a> — Replaces colors in the image</li><li><a href="imagick.coalesceimages.php">Imagick::coalesceImages</a> — Composites a set of images</li><li><a href="imagick.colorfloodfillimage.php">Imagick::colorFloodfillImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.colorizeimage.php">Imagick::colorizeImage</a> — Blends the fill color with the image</li><li><a href="imagick.colormatriximage.php">Imagick::colorMatrixImage</a> — Apply color transformation to an image</li><li><a href="imagick.combineimages.php">Imagick::combineImages</a> — Combines one or more images into a single image</li><li><a href="imagick.commentimage.php">Imagick::commentImage</a> — Adds a comment to your image</li><li><a href="imagick.compareimagechannels.php">Imagick::compareImageChannels</a> — Returns the difference in one or more images</li><li><a href="imagick.compareimagelayers.php">Imagick::compareImageLayers</a> — Returns the maximum bounding region between images</li><li><a href="imagick.compareimages.php">Imagick::compareImages</a> — Compares an image to a reconstructed image</li><li><a href="imagick.compositeimage.php">Imagick::compositeImage</a> — Composite one image onto another</li><li><a href="imagick.construct.php">Imagick::__construct</a> — The Imagick constructor</li><li><a href="imagick.contrastimage.php">Imagick::contrastImage</a> — Change the contrast of the image</li><li><a href="imagick.contraststretchimage.php">Imagick::contrastStretchImage</a> — Enhances the contrast of a color image</li><li><a href="imagick.convolveimage.php">Imagick::convolveImage</a> — Applies a custom convolution kernel to the image</li><li><a href="imagick.count.php">Imagick::count</a> — Get the number of images</li><li><a href="imagick.cropimage.php">Imagick::cropImage</a> — Extracts a region of the image</li><li><a href="imagick.cropthumbnailimage.php">Imagick::cropThumbnailImage</a> — Creates a crop thumbnail</li><li><a href="imagick.current.php">Imagick::current</a> — Returns a reference to the current Imagick object</li><li><a href="imagick.cyclecolormapimage.php">Imagick::cycleColormapImage</a> — Displaces an image's colormap</li><li><a href="imagick.decipherimage.php">Imagick::decipherImage</a> — Deciphers an image</li><li><a href="imagick.deconstructimages.php">Imagick::deconstructImages</a> — Returns certain pixel differences between images</li><li><a href="imagick.deleteimageartifact.php">Imagick::deleteImageArtifact</a> — Delete image artifact</li><li><a href="imagick.deleteimageproperty.php">Imagick::deleteImageProperty</a> — Deletes an image property</li><li><a href="imagick.deskewimage.php">Imagick::deskewImage</a> — Removes skew from the image</li><li><a href="imagick.despeckleimage.php">Imagick::despeckleImage</a> — Reduces the speckle noise in an image</li><li><a href="imagick.destroy.php">Imagick::destroy</a> — Destroys the Imagick object</li><li><a href="imagick.displayimage.php">Imagick::displayImage</a> — Displays an image</li><li><a href="imagick.displayimages.php">Imagick::displayImages</a> — Displays an image or image sequence</li><li><a href="imagick.distortimage.php">Imagick::distortImage</a> — Distorts an image using various distortion methods</li><li><a href="imagick.drawimage.php">Imagick::drawImage</a> — Renders the ImagickDraw object on the current image</li><li><a href="imagick.edgeimage.php">Imagick::edgeImage</a> — Enhance edges within the image</li><li><a href="imagick.embossimage.php">Imagick::embossImage</a> — Returns a grayscale image with a three-dimensional effect</li><li><a href="imagick.encipherimage.php">Imagick::encipherImage</a> — Enciphers an image</li><li><a href="imagick.enhanceimage.php">Imagick::enhanceImage</a> — Improves the quality of a noisy image</li><li><a href="imagick.equalizeimage.php">Imagick::equalizeImage</a> — Equalizes the image histogram</li><li><a href="imagick.evaluateimage.php">Imagick::evaluateImage</a> — Applies an expression to an image</li><li><a href="imagick.exportimagepixels.php">Imagick::exportImagePixels</a> — Exports raw image pixels</li><li><a href="imagick.extentimage.php">Imagick::extentImage</a> — Set image size</li><li><a href="imagick.filter.php">Imagick::filter</a> — Applies a custom convolution kernel to the image</li><li><a href="imagick.flattenimages.php">Imagick::flattenImages</a> — Merges a sequence of images</li><li><a href="imagick.flipimage.php">Imagick::flipImage</a> — Creates a vertical mirror image</li><li><a href="imagick.floodfillpaintimage.php">Imagick::floodFillPaintImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.flopimage.php">Imagick::flopImage</a> — Creates a horizontal mirror image</li><li><a href="imagick.forwardfouriertransformimage.php">Imagick::forwardFourierTransformImage</a> — Implements the discrete Fourier transform (DFT)</li><li><a href="imagick.frameimage.php">Imagick::frameImage</a> — Adds a simulated three-dimensional border</li><li><a href="imagick.functionimage.php">Imagick::functionImage</a> — Applies a function on the image</li><li><a href="imagick.fximage.php">Imagick::fxImage</a> — Evaluate expression for each pixel in the image</li><li><a href="imagick.gammaimage.php">Imagick::gammaImage</a> — Gamma-corrects an image</li><li><a href="imagick.gaussianblurimage.php">Imagick::gaussianBlurImage</a> — Blurs an image</li><li><a href="imagick.getcolorspace.php">Imagick::getColorspace</a> — Gets the colorspace</li><li><a href="imagick.getcompression.php">Imagick::getCompression</a> — Gets the object compression type</li><li><a href="imagick.getcompressionquality.php">Imagick::getCompressionQuality</a> — Gets the object compression quality</li><li><a href="imagick.getcopyright.php">Imagick::getCopyright</a> — Returns the ImageMagick API copyright as a string</li><li><a href="imagick.getfilename.php">Imagick::getFilename</a> — The filename associated with an image sequence</li><li><a href="imagick.getfont.php">Imagick::getFont</a> — Gets font</li><li><a href="imagick.getformat.php">Imagick::getFormat</a> — Returns the format of the Imagick object</li><li><a href="imagick.getgravity.php">Imagick::getGravity</a> — Gets the gravity</li><li><a href="imagick.gethomeurl.php">Imagick::getHomeURL</a> — Returns the ImageMagick home URL</li><li><a href="imagick.getimage.php">Imagick::getImage</a> — Returns a new Imagick object</li><li><a href="imagick.getimagealphachannel.php">Imagick::getImageAlphaChannel</a> — Checks if the image has an alpha channel</li><li><a href="imagick.getimageartifact.php">Imagick::getImageArtifact</a> — Get image artifact</li><li><a href="imagick.getimageattribute.php">Imagick::getImageAttribute</a> — Returns a named attribute</li><li><a href="imagick.getimagebackgroundcolor.php">Imagick::getImageBackgroundColor</a> — Returns the image background color</li><li><a href="imagick.getimageblob.php">Imagick::getImageBlob</a> — Returns the image sequence as a blob</li><li><a href="imagick.getimageblueprimary.php">Imagick::getImageBluePrimary</a> — Returns the chromaticy blue primary point</li><li><a href="imagick.getimagebordercolor.php">Imagick::getImageBorderColor</a> — Returns the image border color</li><li><a href="imagick.getimagechanneldepth.php">Imagick::getImageChannelDepth</a> — Gets the depth for a particular image channel</li><li><a href="imagick.getimagechanneldistortion.php">Imagick::getImageChannelDistortion</a> — Compares image channels of an image to a reconstructed image</li><li><a href="imagick.getimagechanneldistortions.php">Imagick::getImageChannelDistortions</a> — Gets channel distortions</li><li><a href="imagick.getimagechannelextrema.php">Imagick::getImageChannelExtrema</a> — Gets the extrema for one or more image channels</li><li><a href="imagick.getimagechannelkurtosis.php">Imagick::getImageChannelKurtosis</a> — The getImageChannelKurtosis purpose</li><li><a href="imagick.getimagechannelmean.php">Imagick::getImageChannelMean</a> — Gets the mean and standard deviation</li><li><a href="imagick.getimagechannelrange.php">Imagick::getImageChannelRange</a> — Gets channel range</li><li><a href="imagick.getimagechannelstatistics.php">Imagick::getImageChannelStatistics</a> — Returns statistics for each channel in the image</li><li><a href="imagick.getimageclipmask.php">Imagick::getImageClipMask</a> — Gets image clip mask</li><li><a href="imagick.getimagecolormapcolor.php">Imagick::getImageColormapColor</a> — Returns the color of the specified colormap index</li><li><a href="imagick.getimagecolors.php">Imagick::getImageColors</a> — Gets the number of unique colors in the image</li><li><a href="imagick.getimagecolorspace.php">Imagick::getImageColorspace</a> — Gets the image colorspace</li><li><a href="imagick.getimagecompose.php">Imagick::getImageCompose</a> — Returns the composite operator associated with the image</li><li><a href="imagick.getimagecompression.php">Imagick::getImageCompression</a> — Gets the current image's compression type</li><li><a href="imagick.getimagecompressionquality.php">Imagick::getImageCompressionQuality</a> — Gets the current image's compression quality</li><li><a href="imagick.getimagedelay.php">Imagick::getImageDelay</a> — Gets the image delay</li><li><a href="imagick.getimagedepth.php">Imagick::getImageDepth</a> — Gets the image depth</li><li><a href="imagick.getimagedispose.php">Imagick::getImageDispose</a> — Gets the image disposal method</li><li><a href="imagick.getimagedistortion.php">Imagick::getImageDistortion</a> — Compares an image to a reconstructed image</li><li><a href="imagick.getimageextrema.php">Imagick::getImageExtrema</a> — Gets the extrema for the image</li><li><a href="imagick.getimagefilename.php">Imagick::getImageFilename</a> — Returns the filename of a particular image in a sequence</li><li><a href="imagick.getimageformat.php">Imagick::getImageFormat</a> — Returns the format of a particular image in a sequence</li><li><a href="imagick.getimagegamma.php">Imagick::getImageGamma</a> — Gets the image gamma</li><li><a href="imagick.getimagegeometry.php">Imagick::getImageGeometry</a> — Gets the width and height as an associative array</li><li><a href="imagick.getimagegravity.php">Imagick::getImageGravity</a> — Gets the image gravity</li><li><a href="imagick.getimagegreenprimary.php">Imagick::getImageGreenPrimary</a> — Returns the chromaticy green primary point</li><li><a href="imagick.getimageheight.php">Imagick::getImageHeight</a> — Returns the image height</li><li><a href="imagick.getimagehistogram.php">Imagick::getImageHistogram</a> — Gets the image histogram</li><li><a href="imagick.getimageindex.php">Imagick::getImageIndex</a> — Gets the index of the current active image</li><li><a href="imagick.getimageinterlacescheme.php">Imagick::getImageInterlaceScheme</a> — Gets the image interlace scheme</li><li><a href="imagick.getimageinterpolatemethod.php">Imagick::getImageInterpolateMethod</a> — Returns the interpolation method</li><li><a href="imagick.getimageiterations.php">Imagick::getImageIterations</a> — Gets the image iterations</li><li><a href="imagick.getimagelength.php">Imagick::getImageLength</a> — Returns the image length in bytes</li><li><a href="imagick.getimagematte.php">Imagick::getImageMatte</a> — Return if the image has a matte channel</li><li><a href="imagick.getimagemattecolor.php">Imagick::getImageMatteColor</a> — Returns the image matte color</li><li><a href="imagick.getimagemimetype.php">Imagick::getImageMimeType</a> — Returns the image mime-type</li><li><a href="imagick.getimageorientation.php">Imagick::getImageOrientation</a> — Gets the image orientation</li><li><a href="imagick.getimagepage.php">Imagick::getImagePage</a> — Returns the page geometry</li><li><a href="imagick.getimagepixelcolor.php">Imagick::getImagePixelColor</a> — Returns the color of the specified pixel</li><li><a href="imagick.getimageprofile.php">Imagick::getImageProfile</a> — Returns the named image profile</li><li><a href="imagick.getimageprofiles.php">Imagick::getImageProfiles</a> — Returns the image profiles</li><li><a href="imagick.getimageproperties.php">Imagick::getImageProperties</a> — Returns the image properties</li><li><a href="imagick.getimageproperty.php">Imagick::getImageProperty</a> — Returns the named image property</li><li><a href="imagick.getimageredprimary.php">Imagick::getImageRedPrimary</a> — Returns the chromaticity red primary point</li><li><a href="imagick.getimageregion.php">Imagick::getImageRegion</a> — Extracts a region of the image</li><li><a href="imagick.getimagerenderingintent.php">Imagick::getImageRenderingIntent</a> — Gets the image rendering intent</li><li><a href="imagick.getimageresolution.php">Imagick::getImageResolution</a> — Gets the image X and Y resolution</li><li><a href="imagick.getimagesblob.php">Imagick::getImagesBlob</a> — Returns all image sequences as a blob</li><li><a href="imagick.getimagescene.php">Imagick::getImageScene</a> — Gets the image scene</li><li><a href="imagick.getimagesignature.php">Imagick::getImageSignature</a> — Generates an SHA-256 message digest</li><li><a href="imagick.getimagesize.php">Imagick::getImageSize</a> — Returns the image length in bytes</li><li><a href="imagick.getimagetickspersecond.php">Imagick::getImageTicksPerSecond</a> — Gets the image ticks-per-second</li><li><a href="imagick.getimagetotalinkdensity.php">Imagick::getImageTotalInkDensity</a> — Gets the image total ink density</li><li><a href="imagick.getimagetype.php">Imagick::getImageType</a> — Gets the potential image type</li><li><a href="imagick.getimageunits.php">Imagick::getImageUnits</a> — Gets the image units of resolution</li><li><a href="imagick.getimagevirtualpixelmethod.php">Imagick::getImageVirtualPixelMethod</a> — Returns the virtual pixel method</li><li><a href="imagick.getimagewhitepoint.php">Imagick::getImageWhitePoint</a> — Returns the chromaticity white point</li><li><a href="imagick.getimagewidth.php">Imagick::getImageWidth</a> — Returns the image width</li><li><a href="imagick.getinterlacescheme.php">Imagick::getInterlaceScheme</a> — Gets the object interlace scheme</li><li><a href="imagick.getiteratorindex.php">Imagick::getIteratorIndex</a> — Gets the index of the current active image</li><li><a href="imagick.getnumberimages.php">Imagick::getNumberImages</a> — Returns the number of images in the object</li><li><a href="imagick.getoption.php">Imagick::getOption</a> — Returns a value associated with the specified key</li><li><a href="imagick.getpackagename.php">Imagick::getPackageName</a> — Returns the ImageMagick package name</li><li><a href="imagick.getpage.php">Imagick::getPage</a> — Returns the page geometry</li><li><a href="imagick.getpixeliterator.php">Imagick::getPixelIterator</a> — Returns a MagickPixelIterator</li><li><a href="imagick.getpixelregioniterator.php">Imagick::getPixelRegionIterator</a> — Get an ImagickPixelIterator for an image section</li><li><a href="imagick.getpointsize.php">Imagick::getPointSize</a> — Gets point size</li><li><a href="imagick.getquantum.php">Imagick::getQuantum</a> — Returns the ImageMagick quantum range</li><li><a href="imagick.getquantumdepth.php">Imagick::getQuantumDepth</a> — Gets the quantum depth</li><li><a href="imagick.getquantumrange.php">Imagick::getQuantumRange</a> — Returns the Imagick quantum range</li><li><a href="imagick.getregistry.php">Imagick::getRegistry</a> — Get a StringRegistry entry</li><li><a href="imagick.getreleasedate.php">Imagick::getReleaseDate</a> — Returns the ImageMagick release date</li><li><a href="imagick.getresource.php">Imagick::getResource</a> — Returns the specified resource's memory usage</li><li><a href="imagick.getresourcelimit.php">Imagick::getResourceLimit</a> — Returns the specified resource limit</li><li><a href="imagick.getsamplingfactors.php">Imagick::getSamplingFactors</a> — Gets the horizontal and vertical sampling factor</li><li><a href="imagick.getsize.php">Imagick::getSize</a> — Returns the size associated with the Imagick object</li><li><a href="imagick.getsizeoffset.php">Imagick::getSizeOffset</a> — Returns the size offset</li><li><a href="imagick.getversion.php">Imagick::getVersion</a> — Returns the ImageMagick API version</li><li><a href="imagick.haldclutimage.php">Imagick::haldClutImage</a> — Replaces colors in the image</li><li><a href="imagick.hasnextimage.php">Imagick::hasNextImage</a> — Checks if the object has more images</li><li><a href="imagick.haspreviousimage.php">Imagick::hasPreviousImage</a> — Checks if the object has a previous image</li><li><a href="imagick.identifyformat.php">Imagick::identifyFormat</a> — Formats a string with image details</li><li><a href="imagick.identifyimage.php">Imagick::identifyImage</a> — Identifies an image and fetches attributes</li><li><a href="imagick.implodeimage.php">Imagick::implodeImage</a> — Creates a new image as a copy</li><li><a href="imagick.importimagepixels.php">Imagick::importImagePixels</a> — Imports image pixels</li><li><a href="imagick.inversefouriertransformimage.php">Imagick::inverseFourierTransformImage</a> — Implements the inverse discrete Fourier transform (DFT)</li><li><a href="imagick.labelimage.php">Imagick::labelImage</a> — Adds a label to an image</li><li><a href="imagick.levelimage.php">Imagick::levelImage</a> — Adjusts the levels of an image</li><li><a href="imagick.linearstretchimage.php">Imagick::linearStretchImage</a> — Stretches with saturation the image intensity</li><li><a href="imagick.liquidrescaleimage.php">Imagick::liquidRescaleImage</a> — Animates an image or images</li><li><a href="imagick.listregistry.php">Imagick::listRegistry</a> — List all the registry settings</li><li><a href="imagick.magnifyimage.php">Imagick::magnifyImage</a> — Scales an image proportionally 2x</li><li><a href="imagick.mapimage.php">Imagick::mapImage</a> — Replaces the colors of an image with the closest color from a reference image</li><li><a href="imagick.mattefloodfillimage.php">Imagick::matteFloodfillImage</a> — Changes the transparency value of a color</li><li><a href="imagick.medianfilterimage.php">Imagick::medianFilterImage</a> — Applies a digital filter</li><li><a href="imagick.mergeimagelayers.php">Imagick::mergeImageLayers</a> — Merges image layers</li><li><a href="imagick.minifyimage.php">Imagick::minifyImage</a> — Scales an image proportionally to half its size</li><li><a href="imagick.modulateimage.php">Imagick::modulateImage</a> — Control the brightness, saturation, and hue</li><li><a href="imagick.montageimage.php">Imagick::montageImage</a> — Creates a composite image</li><li><a href="imagick.morphimages.php">Imagick::morphImages</a> — Method morphs a set of images</li><li><a href="imagick.morphology.php">Imagick::morphology</a> — Applies a user supplied kernel to the image according to the given morphology method.</li><li><a href="imagick.mosaicimages.php">Imagick::mosaicImages</a> — Forms a mosaic from images</li><li><a href="imagick.motionblurimage.php">Imagick::motionBlurImage</a> — Simulates motion blur</li><li><a href="imagick.negateimage.php">Imagick::negateImage</a> — Negates the colors in the reference image</li><li><a href="imagick.newimage.php">Imagick::newImage</a> — Creates a new image</li><li><a href="imagick.newpseudoimage.php">Imagick::newPseudoImage</a> — Creates a new image</li><li><a href="imagick.nextimage.php">Imagick::nextImage</a> — Moves to the next image</li><li><a href="imagick.normalizeimage.php">Imagick::normalizeImage</a> — Enhances the contrast of a color image</li><li><a href="imagick.oilpaintimage.php">Imagick::oilPaintImage</a> — Simulates an oil painting</li><li><a href="imagick.opaquepaintimage.php">Imagick::opaquePaintImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.optimizeimagelayers.php">Imagick::optimizeImageLayers</a> — Removes repeated portions of images to optimize</li><li><a href="imagick.orderedposterizeimage.php">Imagick::orderedPosterizeImage</a> — Performs an ordered dither</li><li><a href="imagick.paintfloodfillimage.php">Imagick::paintFloodfillImage</a> — Changes the color value of any pixel that matches target</li><li><a href="imagick.paintopaqueimage.php">Imagick::paintOpaqueImage</a> — Change any pixel that matches color</li><li><a href="imagick.painttransparentimage.php">Imagick::paintTransparentImage</a> — Changes any pixel that matches color with the color defined by fill</li><li><a href="imagick.pingimage.php">Imagick::pingImage</a> — Fetch basic attributes about the image</li><li><a href="imagick.pingimageblob.php">Imagick::pingImageBlob</a> — Quickly fetch attributes</li><li><a href="imagick.pingimagefile.php">Imagick::pingImageFile</a> — Get basic image attributes in a lightweight manner</li><li><a href="imagick.polaroidimage.php">Imagick::polaroidImage</a> — Simulates a Polaroid picture</li><li><a href="imagick.posterizeimage.php">Imagick::posterizeImage</a> — Reduces the image to a limited number of color level</li><li><a href="imagick.previewimages.php">Imagick::previewImages</a> — Quickly pin-point appropriate parameters for image processing</li><li><a href="imagick.previousimage.php">Imagick::previousImage</a> — Move to the previous image in the object</li><li><a href="imagick.profileimage.php">Imagick::profileImage</a> — Adds or removes a profile from an image</li><li><a href="imagick.quantizeimage.php">Imagick::quantizeImage</a> — Analyzes the colors within a reference image</li><li><a href="imagick.quantizeimages.php">Imagick::quantizeImages</a> — Analyzes the colors within a sequence of images</li><li><a href="imagick.queryfontmetrics.php">Imagick::queryFontMetrics</a> — Returns an array representing the font metrics</li><li><a href="imagick.queryfonts.php">Imagick::queryFonts</a> — Returns the configured fonts</li><li><a href="imagick.queryformats.php">Imagick::queryFormats</a> — Returns formats supported by Imagick</li><li><a href="imagick.radialblurimage.php">Imagick::radialBlurImage</a> — Radial blurs an image</li><li><a href="imagick.raiseimage.php">Imagick::raiseImage</a> — Creates a simulated 3d button-like effect</li><li><a href="imagick.randomthresholdimage.php">Imagick::randomThresholdImage</a> — Creates a high-contrast, two-color image</li><li><a href="imagick.readimage.php">Imagick::readImage</a> — Reads image from filename</li><li><a href="imagick.readimageblob.php">Imagick::readImageBlob</a> — Reads image from a binary string</li><li><a href="imagick.readimagefile.php">Imagick::readImageFile</a> — Reads image from open filehandle</li><li><a href="imagick.readimages.php">Imagick::readimages</a> — Reads image from an array of filenames</li><li><a href="imagick.recolorimage.php">Imagick::recolorImage</a> — Recolors image</li><li><a href="imagick.reducenoiseimage.php">Imagick::reduceNoiseImage</a> — Smooths the contours of an image</li><li><a href="imagick.remapimage.php">Imagick::remapImage</a> — Remaps image colors</li><li><a href="imagick.removeimage.php">Imagick::removeImage</a> — Removes an image from the image list</li><li><a href="imagick.removeimageprofile.php">Imagick::removeImageProfile</a> — Removes the named image profile and returns it</li><li><a href="imagick.render.php">Imagick::render</a> — Renders all preceding drawing commands</li><li><a href="imagick.resampleimage.php">Imagick::resampleImage</a> — Resample image to desired resolution</li><li><a href="imagick.resetimagepage.php">Imagick::resetImagePage</a> — Reset image page</li><li><a href="imagick.resizeimage.php">Imagick::resizeImage</a> — Scales an image</li><li><a href="imagick.rollimage.php">Imagick::rollImage</a> — Offsets an image</li><li><a href="imagick.rotateimage.php">Imagick::rotateImage</a> — Rotates an image</li><li><a href="imagick.rotationalblurimage.php">Imagick::rotationalBlurImage</a> — Rotational blurs an image</li><li><a href="imagick.roundcorners.php">Imagick::roundCorners</a> — Rounds image corners</li><li><a href="imagick.sampleimage.php">Imagick::sampleImage</a> — Scales an image with pixel sampling</li><li><a href="imagick.scaleimage.php">Imagick::scaleImage</a> — Scales the size of an image</li><li><a href="imagick.segmentimage.php">Imagick::segmentImage</a> — Segments an image</li><li><a href="imagick.selectiveblurimage.php">Imagick::selectiveBlurImage</a> — Selectively blur an image within a contrast threshold</li><li><a href="imagick.separateimagechannel.php">Imagick::separateImageChannel</a> — Separates a channel from the image</li><li><a href="imagick.sepiatoneimage.php">Imagick::sepiaToneImage</a> — Sepia tones an image</li><li><a href="imagick.setbackgroundcolor.php">Imagick::setBackgroundColor</a> — Sets the object's default background color</li><li><a href="imagick.setcolorspace.php">Imagick::setColorspace</a> — Set colorspace</li><li><a href="imagick.setcompression.php">Imagick::setCompression</a> — Sets the object's default compression type</li><li><a href="imagick.setcompressionquality.php">Imagick::setCompressionQuality</a> — Sets the object's default compression quality</li><li><a href="imagick.setfilename.php">Imagick::setFilename</a> — Sets the filename before you read or write the image</li><li><a href="imagick.setfirstiterator.php">Imagick::setFirstIterator</a> — Sets the Imagick iterator to the first image</li><li><a href="imagick.setfont.php">Imagick::setFont</a> — Sets font</li><li><a href="imagick.setformat.php">Imagick::setFormat</a> — Sets the format of the Imagick object</li><li><a href="imagick.setgravity.php">Imagick::setGravity</a> — Sets the gravity</li><li><a href="imagick.setimage.php">Imagick::setImage</a> — Replaces image in the object</li><li><a href="imagick.setimagealphachannel.php">Imagick::setImageAlphaChannel</a> — Sets image alpha channel</li><li><a href="imagick.setimageartifact.php">Imagick::setImageArtifact</a> — Set image artifact</li><li><a href="imagick.setimageattribute.php">Imagick::setImageAttribute</a> — Sets an image attribute</li><li><a href="imagick.setimagebackgroundcolor.php">Imagick::setImageBackgroundColor</a> — Sets the image background color</li><li><a href="imagick.setimagebias.php">Imagick::setImageBias</a> — Sets the image bias for any method that convolves an image</li><li><a href="imagick.setimagebiasquantum.php">Imagick::setImageBiasQuantum</a> — Sets the image bias</li><li><a href="imagick.setimageblueprimary.php">Imagick::setImageBluePrimary</a> — Sets the image chromaticity blue primary point</li><li><a href="imagick.setimagebordercolor.php">Imagick::setImageBorderColor</a> — Sets the image border color</li><li><a href="imagick.setimagechanneldepth.php">Imagick::setImageChannelDepth</a> — Sets the depth of a particular image channel</li><li><a href="imagick.setimageclipmask.php">Imagick::setImageClipMask</a> — Sets image clip mask</li><li><a href="imagick.setimagecolormapcolor.php">Imagick::setImageColormapColor</a> — Sets the color of the specified colormap index</li><li><a href="imagick.setimagecolorspace.php">Imagick::setImageColorspace</a> — Sets the image colorspace</li><li><a href="imagick.setimagecompose.php">Imagick::setImageCompose</a> — Sets the image composite operator</li><li><a href="imagick.setimagecompression.php">Imagick::setImageCompression</a> — Sets the image compression</li><li><a href="imagick.setimagecompressionquality.php">Imagick::setImageCompressionQuality</a> — Sets the image compression quality</li><li><a href="imagick.setimagedelay.php">Imagick::setImageDelay</a> — Sets the image delay</li><li><a href="imagick.setimagedepth.php">Imagick::setImageDepth</a> — Sets the image depth</li><li><a href="imagick.setimagedispose.php">Imagick::setImageDispose</a> — Sets the image disposal method</li><li><a href="imagick.setimageextent.php">Imagick::setImageExtent</a> — Sets the image size</li><li><a href="imagick.setimagefilename.php">Imagick::setImageFilename</a> — Sets the filename of a particular image</li><li><a href="imagick.setimageformat.php">Imagick::setImageFormat</a> — Sets the format of a particular image</li><li><a href="imagick.setimagegamma.php">Imagick::setImageGamma</a> — Sets the image gamma</li><li><a href="imagick.setimagegravity.php">Imagick::setImageGravity</a> — Sets the image gravity</li><li><a href="imagick.setimagegreenprimary.php">Imagick::setImageGreenPrimary</a> — Sets the image chromaticity green primary point</li><li><a href="imagick.setimageindex.php">Imagick::setImageIndex</a> — Set the iterator position</li><li><a href="imagick.setimageinterlacescheme.php">Imagick::setImageInterlaceScheme</a> — Sets the image compression</li><li><a href="imagick.setimageinterpolatemethod.php">Imagick::setImageInterpolateMethod</a> — Sets the image interpolate pixel method</li><li><a href="imagick.setimageiterations.php">Imagick::setImageIterations</a> — Sets the image iterations</li><li><a href="imagick.setimagematte.php">Imagick::setImageMatte</a> — Sets the image matte channel</li><li><a href="imagick.setimagemattecolor.php">Imagick::setImageMatteColor</a> — Sets the image matte color</li><li><a href="imagick.setimageopacity.php">Imagick::setImageOpacity</a> — Sets the image opacity level</li><li><a href="imagick.setimageorientation.php">Imagick::setImageOrientation</a> — Sets the image orientation</li><li><a href="imagick.setimagepage.php">Imagick::setImagePage</a> — Sets the page geometry of the image</li><li><a href="imagick.setimageprofile.php">Imagick::setImageProfile</a> — Adds a named profile to the Imagick object</li><li><a href="imagick.setimageproperty.php">Imagick::setImageProperty</a> — Sets an image property</li><li><a href="imagick.setimageredprimary.php">Imagick::setImageRedPrimary</a> — Sets the image chromaticity red primary point</li><li><a href="imagick.setimagerenderingintent.php">Imagick::setImageRenderingIntent</a> — Sets the image rendering intent</li><li><a href="imagick.setimageresolution.php">Imagick::setImageResolution</a> — Sets the image resolution</li><li><a href="imagick.setimagescene.php">Imagick::setImageScene</a> — Sets the image scene</li><li><a href="imagick.setimagetickspersecond.php">Imagick::setImageTicksPerSecond</a> — Sets the image ticks-per-second</li><li><a href="imagick.setimagetype.php">Imagick::setImageType</a> — Sets the image type</li><li><a href="imagick.setimageunits.php">Imagick::setImageUnits</a> — Sets the image units of resolution</li><li><a href="imagick.setimagevirtualpixelmethod.php">Imagick::setImageVirtualPixelMethod</a> — Sets the image virtual pixel method</li><li><a href="imagick.setimagewhitepoint.php">Imagick::setImageWhitePoint</a> — Sets the image chromaticity white point</li><li><a href="imagick.setinterlacescheme.php">Imagick::setInterlaceScheme</a> — Sets the image compression</li><li><a href="imagick.setiteratorindex.php">Imagick::setIteratorIndex</a> — Set the iterator position</li><li><a href="imagick.setlastiterator.php">Imagick::setLastIterator</a> — Sets the Imagick iterator to the last image</li><li><a href="imagick.setoption.php">Imagick::setOption</a> — Set an option</li><li><a href="imagick.setpage.php">Imagick::setPage</a> — Sets the page geometry of the Imagick object</li><li><a href="imagick.setpointsize.php">Imagick::setPointSize</a> — Sets point size</li><li><a href="imagick.setprogressmonitor.php">Imagick::setProgressMonitor</a> — Set a callback to be called during processing</li><li><a href="imagick.setregistry.php">Imagick::setRegistry</a> — Sets the ImageMagick registry entry named key to value</li><li><a href="imagick.setresolution.php">Imagick::setResolution</a> — Sets the image resolution</li><li><a href="imagick.setresourcelimit.php">Imagick::setResourceLimit</a> — Sets the limit for a particular resource</li><li><a href="imagick.setsamplingfactors.php">Imagick::setSamplingFactors</a> — Sets the image sampling factors</li><li><a href="imagick.setsize.php">Imagick::setSize</a> — Sets the size of the Imagick object</li><li><a href="imagick.setsizeoffset.php">Imagick::setSizeOffset</a> — Sets the size and offset of the Imagick object</li><li><a href="imagick.settype.php">Imagick::setType</a> — Sets the image type attribute</li><li><a href="imagick.shadeimage.php">Imagick::shadeImage</a> — Creates a 3D effect</li><li><a href="imagick.shadowimage.php">Imagick::shadowImage</a> — Simulates an image shadow</li><li><a href="imagick.sharpenimage.php">Imagick::sharpenImage</a> — Sharpens an image</li><li><a href="imagick.shaveimage.php">Imagick::shaveImage</a> — Shaves pixels from the image edges</li><li><a href="imagick.shearimage.php">Imagick::shearImage</a> — Creating a parallelogram</li><li><a href="imagick.sigmoidalcontrastimage.php">Imagick::sigmoidalContrastImage</a> — Adjusts the contrast of an image</li><li><a href="imagick.sketchimage.php">Imagick::sketchImage</a> — Simulates a pencil sketch</li><li><a href="imagick.smushimages.php">Imagick::smushImages</a> — Takes all images from the current image pointer to the end of the image list and smushs them</li><li><a href="imagick.solarizeimage.php">Imagick::solarizeImage</a> — Applies a solarizing effect to the image</li><li><a href="imagick.sparsecolorimage.php">Imagick::sparseColorImage</a> — Interpolates colors</li><li><a href="imagick.spliceimage.php">Imagick::spliceImage</a> — Splices a solid color into the image</li><li><a href="imagick.spreadimage.php">Imagick::spreadImage</a> — Randomly displaces each pixel in a block</li><li><a href="imagick.statisticimage.php">Imagick::statisticImage</a> — Modifies image using a statistics function</li><li><a href="imagick.steganoimage.php">Imagick::steganoImage</a> — Hides a digital watermark within the image</li><li><a href="imagick.stereoimage.php">Imagick::stereoImage</a> — Composites two images</li><li><a href="imagick.stripimage.php">Imagick::stripImage</a> — Strips an image of all profiles and comments</li><li><a href="imagick.subimagematch.php">Imagick::subImageMatch</a> — Searches for a subimage in the current image and returns a similarity image</li><li><a href="imagick.swirlimage.php">Imagick::swirlImage</a> — Swirls the pixels about the center of the image</li><li><a href="imagick.textureimage.php">Imagick::textureImage</a> — Repeatedly tiles the texture image</li><li><a href="imagick.thresholdimage.php">Imagick::thresholdImage</a> — Changes the value of individual pixels based on a threshold</li><li><a href="imagick.thumbnailimage.php">Imagick::thumbnailImage</a> — Changes the size of an image</li><li><a href="imagick.tintimage.php">Imagick::tintImage</a> — Applies a color vector to each pixel in the image</li><li><a href="imagick.tostring.php">Imagick::__toString</a> — Returns the image as a string</li><li><a href="imagick.transformimage.php">Imagick::transformImage</a> — Convenience method for setting crop size and the image geometry</li><li><a href="imagick.transformimagecolorspace.php">Imagick::transformImageColorspace</a> — Transforms an image to a new colorspace</li><li><a href="imagick.transparentpaintimage.php">Imagick::transparentPaintImage</a> — Paints pixels transparent</li><li><a href="imagick.transposeimage.php">Imagick::transposeImage</a> — Creates a vertical mirror image</li><li><a href="imagick.transverseimage.php">Imagick::transverseImage</a> — Creates a horizontal mirror image</li><li><a href="imagick.trimimage.php">Imagick::trimImage</a> — Remove edges from the image</li><li><a href="imagick.uniqueimagecolors.php">Imagick::uniqueImageColors</a> — Discards all but one of any pixel color</li><li><a href="imagick.unsharpmaskimage.php">Imagick::unsharpMaskImage</a> — Sharpens an image</li><li><a href="imagick.valid.php">Imagick::valid</a> — Checks if the current item is valid</li><li><a href="imagick.vignetteimage.php">Imagick::vignetteImage</a> — Adds vignette filter to the image</li><li><a href="imagick.waveimage.php">Imagick::waveImage</a> — Applies wave filter to the image</li><li><a href="imagick.whitethresholdimage.php">Imagick::whiteThresholdImage</a> — Force all pixels above the threshold into white</li><li><a href="imagick.writeimage.php">Imagick::writeImage</a> — Writes an image to the specified filename</li><li><a href="imagick.writeimagefile.php">Imagick::writeImageFile</a> — Writes an image to a filehandle</li><li><a href="imagick.writeimages.php">Imagick::writeImages</a> — Writes an image or image sequence</li><li><a href="imagick.writeimagesfile.php">Imagick::writeImagesFile</a> — Writes frames to a filehandle</li></ul></li><li><a href="class.imagickdraw.php">ImagickDraw</a> — The ImagickDraw class<ul class="chunklist chunklist_book chunklist_children"><li><a href="imagickdraw.affine.php">ImagickDraw::affine</a> — Adjusts the current affine transformation matrix</li><li><a href="imagickdraw.annotation.php">ImagickDraw::annotation</a> — Draws text on the image</li><li><a href="imagickdraw.arc.php">ImagickDraw::arc</a> — Draws an arc</li><li><a href="imagickdraw.bezier.php">ImagickDraw::bezier</a> — Draws a bezier curve</li><li><a href="imagickdraw.circle.php">ImagickDraw::circle</a> — Draws a circle</li><li><a href="imagickdraw.clear.php">ImagickDraw::clear</a> — Clears the ImagickDraw</li><li><a href="imagickdraw.clone.php">ImagickDraw::clone</a> — Makes an exact copy of the specified ImagickDraw object</li><li><a href="imagickdraw.color.php">ImagickDraw::color</a> — Draws color on image</li><li><a href="imagickdraw.comment.php">ImagickDraw::comment</a> — Adds a comment</li><li><a href="imagickdraw.composite.php">ImagickDraw::composite</a> — Composites an image onto the current image</li><li><a href="imagickdraw.construct.php">ImagickDraw::__construct</a> — The ImagickDraw constructor</li><li><a href="imagickdraw.destroy.php">ImagickDraw::destroy</a> — Frees all associated resources</li><li><a href="imagickdraw.ellipse.php">ImagickDraw::ellipse</a> — Draws an ellipse on the image</li><li><a href="imagickdraw.getclippath.php">ImagickDraw::getClipPath</a> — Obtains the current clipping path ID</li><li><a href="imagickdraw.getcliprule.php">ImagickDraw::getClipRule</a> — Returns the current polygon fill rule</li><li><a href="imagickdraw.getclipunits.php">ImagickDraw::getClipUnits</a> — Returns the interpretation of clip path units</li><li><a href="imagickdraw.getfillcolor.php">ImagickDraw::getFillColor</a> — Returns the fill color</li><li><a href="imagickdraw.getfillopacity.php">ImagickDraw::getFillOpacity</a> — Returns the opacity used when drawing</li><li><a href="imagickdraw.getfillrule.php">ImagickDraw::getFillRule</a> — Returns the fill rule</li><li><a href="imagickdraw.getfont.php">ImagickDraw::getFont</a> — Returns the font</li><li><a href="imagickdraw.getfontfamily.php">ImagickDraw::getFontFamily</a> — Returns the font family</li><li><a href="imagickdraw.getfontsize.php">ImagickDraw::getFontSize</a> — Returns the font pointsize</li><li><a href="imagickdraw.getfontstretch.php">ImagickDraw::getFontStretch</a> — Gets the font stretch to use when annotating with text</li><li><a href="imagickdraw.getfontstyle.php">ImagickDraw::getFontStyle</a> — Returns the font style</li><li><a href="imagickdraw.getfontweight.php">ImagickDraw::getFontWeight</a> — Returns the font weight</li><li><a href="imagickdraw.getgravity.php">ImagickDraw::getGravity</a> — Returns the text placement gravity</li><li><a href="imagickdraw.getstrokeantialias.php">ImagickDraw::getStrokeAntialias</a> — Returns the current stroke antialias setting</li><li><a href="imagickdraw.getstrokecolor.php">ImagickDraw::getStrokeColor</a> — Returns the color used for stroking object outlines</li><li><a href="imagickdraw.getstrokedasharray.php">ImagickDraw::getStrokeDashArray</a> — Returns an array representing the pattern of dashes and gaps used to stroke paths</li><li><a href="imagickdraw.getstrokedashoffset.php">ImagickDraw::getStrokeDashOffset</a> — Returns the offset into the dash pattern to start the dash</li><li><a href="imagickdraw.getstrokelinecap.php">ImagickDraw::getStrokeLineCap</a> — Returns the shape to be used at the end of open subpaths when they are stroked</li><li><a href="imagickdraw.getstrokelinejoin.php">ImagickDraw::getStrokeLineJoin</a> — Returns the shape to be used at the corners of paths when they are stroked</li><li><a href="imagickdraw.getstrokemiterlimit.php">ImagickDraw::getStrokeMiterLimit</a> — Returns the stroke miter limit</li><li><a href="imagickdraw.getstrokeopacity.php">ImagickDraw::getStrokeOpacity</a> — Returns the opacity of stroked object outlines</li><li><a href="imagickdraw.getstrokewidth.php">ImagickDraw::getStrokeWidth</a> — Returns the width of the stroke used to draw object outlines</li><li><a href="imagickdraw.gettextalignment.php">ImagickDraw::getTextAlignment</a> — Returns the text alignment</li><li><a href="imagickdraw.gettextantialias.php">ImagickDraw::getTextAntialias</a> — Returns the current text antialias setting</li><li><a href="imagickdraw.gettextdecoration.php">ImagickDraw::getTextDecoration</a> — Returns the text decoration</li><li><a href="imagickdraw.gettextencoding.php">ImagickDraw::getTextEncoding</a> — Returns the code set used for text annotations</li><li><a href="imagickdraw.gettextinterlinespacing.php">ImagickDraw::getTextInterlineSpacing</a> — Gets the text interword spacing</li><li><a href="imagickdraw.gettextinterwordspacing.php">ImagickDraw::getTextInterwordSpacing</a> — Gets the text interword spacing</li><li><a href="imagickdraw.gettextkerning.php">ImagickDraw::getTextKerning</a> — Gets the text kerning</li><li><a href="imagickdraw.gettextundercolor.php">ImagickDraw::getTextUnderColor</a> — Returns the text under color</li><li><a href="imagickdraw.getvectorgraphics.php">ImagickDraw::getVectorGraphics</a> — Returns a string containing vector graphics</li><li><a href="imagickdraw.line.php">ImagickDraw::line</a> — Draws a line</li><li><a href="imagickdraw.matte.php">ImagickDraw::matte</a> — Paints on the image's opacity channel</li><li><a href="imagickdraw.pathclose.php">ImagickDraw::pathClose</a> — Adds a path element to the current path</li><li><a href="imagickdraw.pathcurvetoabsolute.php">ImagickDraw::pathCurveToAbsolute</a> — Draws a cubic Bezier curve</li><li><a href="imagickdraw.pathcurvetoquadraticbezierabsolute.php">ImagickDraw::pathCurveToQuadraticBezierAbsolute</a> — Draws a quadratic Bezier curve</li><li><a href="imagickdraw.pathcurvetoquadraticbezierrelative.php">ImagickDraw::pathCurveToQuadraticBezierRelative</a> — Draws a quadratic Bezier curve</li><li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php">ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute</a> — Draws a quadratic Bezier curve</li><li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php">ImagickDraw::pathCurveToQuadraticBezierSmoothRelative</a> — Draws a quadratic Bezier curve</li><li><a href="imagickdraw.pathcurvetorelative.php">ImagickDraw::pathCurveToRelative</a> — Draws a cubic Bezier curve</li><li><a href="imagickdraw.pathcurvetosmoothabsolute.php">ImagickDraw::pathCurveToSmoothAbsolute</a> — Draws a cubic Bezier curve</li><li><a href="imagickdraw.pathcurvetosmoothrelative.php">ImagickDraw::pathCurveToSmoothRelative</a> — Draws a cubic Bezier curve</li><li><a href="imagickdraw.pathellipticarcabsolute.php">ImagickDraw::pathEllipticArcAbsolute</a> — Draws an elliptical arc</li><li><a href="imagickdraw.pathellipticarcrelative.php">ImagickDraw::pathEllipticArcRelative</a> — Draws an elliptical arc</li><li><a href="imagickdraw.pathfinish.php">ImagickDraw::pathFinish</a> — Terminates the current path</li><li><a href="imagickdraw.pathlinetoabsolute.php">ImagickDraw::pathLineToAbsolute</a> — Draws a line path</li><li><a href="imagickdraw.pathlinetohorizontalabsolute.php">ImagickDraw::pathLineToHorizontalAbsolute</a> — Draws a horizontal line path</li><li><a href="imagickdraw.pathlinetohorizontalrelative.php">ImagickDraw::pathLineToHorizontalRelative</a> — Draws a horizontal line</li><li><a href="imagickdraw.pathlinetorelative.php">ImagickDraw::pathLineToRelative</a> — Draws a line path</li><li><a href="imagickdraw.pathlinetoverticalabsolute.php">ImagickDraw::pathLineToVerticalAbsolute</a> — Draws a vertical line</li><li><a href="imagickdraw.pathlinetoverticalrelative.php">ImagickDraw::pathLineToVerticalRelative</a> — Draws a vertical line path</li><li><a href="imagickdraw.pathmovetoabsolute.php">ImagickDraw::pathMoveToAbsolute</a> — Starts a new sub-path</li><li><a href="imagickdraw.pathmovetorelative.php">ImagickDraw::pathMoveToRelative</a> — Starts a new sub-path</li><li><a href="imagickdraw.pathstart.php">ImagickDraw::pathStart</a> — Declares the start of a path drawing list</li><li><a href="imagickdraw.point.php">ImagickDraw::point</a> — Draws a point</li><li><a href="imagickdraw.polygon.php">ImagickDraw::polygon</a> — Draws a polygon</li><li><a href="imagickdraw.polyline.php">ImagickDraw::polyline</a> — Draws a polyline</li><li><a href="imagickdraw.pop.php">ImagickDraw::pop</a> — Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw</li><li><a href="imagickdraw.popclippath.php">ImagickDraw::popClipPath</a> — Terminates a clip path definition</li><li><a href="imagickdraw.popdefs.php">ImagickDraw::popDefs</a> — Terminates a definition list</li><li><a href="imagickdraw.poppattern.php">ImagickDraw::popPattern</a> — Terminates a pattern definition</li><li><a href="imagickdraw.push.php">ImagickDraw::push</a> — Clones the current ImagickDraw and pushes it to the stack</li><li><a href="imagickdraw.pushclippath.php">ImagickDraw::pushClipPath</a> — Starts a clip path definition</li><li><a href="imagickdraw.pushdefs.php">ImagickDraw::pushDefs</a> — Indicates that following commands create named elements for early processing</li><li><a href="imagickdraw.pushpattern.php">ImagickDraw::pushPattern</a> — Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern</li><li><a href="imagickdraw.rectangle.php">ImagickDraw::rectangle</a> — Draws a rectangle</li><li><a href="imagickdraw.render.php">ImagickDraw::render</a> — Renders all preceding drawing commands onto the image</li><li><a href="imagickdraw.resetvectorgraphics.php">ImagickDraw::resetVectorGraphics</a> — Resets the vector graphics</li><li><a href="imagickdraw.rotate.php">ImagickDraw::rotate</a> — Applies the specified rotation to the current coordinate space</li><li><a href="imagickdraw.roundrectangle.php">ImagickDraw::roundRectangle</a> — Draws a rounded rectangle</li><li><a href="imagickdraw.scale.php">ImagickDraw::scale</a> — Adjusts the scaling factor</li><li><a href="imagickdraw.setclippath.php">ImagickDraw::setClipPath</a> — Associates a named clipping path with the image</li><li><a href="imagickdraw.setcliprule.php">ImagickDraw::setClipRule</a> — Set the polygon fill rule to be used by the clipping path</li><li><a href="imagickdraw.setclipunits.php">ImagickDraw::setClipUnits</a> — Sets the interpretation of clip path units</li><li><a href="imagickdraw.setfillalpha.php">ImagickDraw::setFillAlpha</a> — Sets the opacity to use when drawing using the fill color or fill texture</li><li><a href="imagickdraw.setfillcolor.php">ImagickDraw::setFillColor</a> — Sets the fill color to be used for drawing filled objects</li><li><a href="imagickdraw.setfillopacity.php">ImagickDraw::setFillOpacity</a> — Sets the opacity to use when drawing using the fill color or fill texture</li><li><a href="imagickdraw.setfillpatternurl.php">ImagickDraw::setFillPatternURL</a> — Sets the URL to use as a fill pattern for filling objects</li><li><a href="imagickdraw.setfillrule.php">ImagickDraw::setFillRule</a> — Sets the fill rule to use while drawing polygons</li><li><a href="imagickdraw.setfont.php">ImagickDraw::setFont</a> — Sets the fully-specified font to use when annotating with text</li><li><a href="imagickdraw.setfontfamily.php">ImagickDraw::setFontFamily</a> — Sets the font family to use when annotating with text</li><li><a href="imagickdraw.setfontsize.php">ImagickDraw::setFontSize</a> — Sets the font pointsize to use when annotating with text</li><li><a href="imagickdraw.setfontstretch.php">ImagickDraw::setFontStretch</a> — Sets the font stretch to use when annotating with text</li><li><a href="imagickdraw.setfontstyle.php">ImagickDraw::setFontStyle</a> — Sets the font style to use when annotating with text</li><li><a href="imagickdraw.setfontweight.php">ImagickDraw::setFontWeight</a> — Sets the font weight</li><li><a href="imagickdraw.setgravity.php">ImagickDraw::setGravity</a> — Sets the text placement gravity</li><li><a href="imagickdraw.setresolution.php">ImagickDraw::setResolution</a> — Sets the resolution</li><li><a href="imagickdraw.setstrokealpha.php">ImagickDraw::setStrokeAlpha</a> — Specifies the opacity of stroked object outlines</li><li><a href="imagickdraw.setstrokeantialias.php">ImagickDraw::setStrokeAntialias</a> — Controls whether stroked outlines are antialiased</li><li><a href="imagickdraw.setstrokecolor.php">ImagickDraw::setStrokeColor</a> — Sets the color used for stroking object outlines</li><li><a href="imagickdraw.setstrokedasharray.php">ImagickDraw::setStrokeDashArray</a> — Specifies the pattern of dashes and gaps used to stroke paths</li><li><a href="imagickdraw.setstrokedashoffset.php">ImagickDraw::setStrokeDashOffset</a> — Specifies the offset into the dash pattern to start the dash</li><li><a href="imagickdraw.setstrokelinecap.php">ImagickDraw::setStrokeLineCap</a> — Specifies the shape to be used at the end of open subpaths when they are stroked</li><li><a href="imagickdraw.setstrokelinejoin.php">ImagickDraw::setStrokeLineJoin</a> — Specifies the shape to be used at the corners of paths when they are stroked</li><li><a href="imagickdraw.setstrokemiterlimit.php">ImagickDraw::setStrokeMiterLimit</a> — Specifies the miter limit</li><li><a href="imagickdraw.setstrokeopacity.php">ImagickDraw::setStrokeOpacity</a> — Specifies the opacity of stroked object outlines</li><li><a href="imagickdraw.setstrokepatternurl.php">ImagickDraw::setStrokePatternURL</a> — Sets the pattern used for stroking object outlines</li><li><a href="imagickdraw.setstrokewidth.php">ImagickDraw::setStrokeWidth</a> — Sets the width of the stroke used to draw object outlines</li><li><a href="imagickdraw.settextalignment.php">ImagickDraw::setTextAlignment</a> — Specifies a text alignment</li><li><a href="imagickdraw.settextantialias.php">ImagickDraw::setTextAntialias</a> — Controls whether text is antialiased</li><li><a href="imagickdraw.settextdecoration.php">ImagickDraw::setTextDecoration</a> — Specifies a decoration</li><li><a href="imagickdraw.settextencoding.php">ImagickDraw::setTextEncoding</a> — Specifies the text code set</li><li><a href="imagickdraw.settextinterlinespacing.php">ImagickDraw::setTextInterlineSpacing</a> — Sets the text interline spacing</li><li><a href="imagickdraw.settextinterwordspacing.php">ImagickDraw::setTextInterwordSpacing</a> — Sets the text interword spacing</li><li><a href="imagickdraw.settextkerning.php">ImagickDraw::setTextKerning</a> — Sets the text kerning</li><li><a href="imagickdraw.settextundercolor.php">ImagickDraw::setTextUnderColor</a> — Specifies the color of a background rectangle</li><li><a href="imagickdraw.setvectorgraphics.php">ImagickDraw::setVectorGraphics</a> — Sets the vector graphics</li><li><a href="imagickdraw.setviewbox.php">ImagickDraw::setViewbox</a> — Sets the overall canvas size</li><li><a href="imagickdraw.skewx.php">ImagickDraw::skewX</a> — Skews the current coordinate system in the horizontal direction</li><li><a href="imagickdraw.skewy.php">ImagickDraw::skewY</a> — Skews the current coordinate system in the vertical direction</li><li><a href="imagickdraw.translate.php">ImagickDraw::translate</a> — Applies a translation to the current coordinate system</li></ul></li><li><a href="class.imagickpixel.php">ImagickPixel</a> — The ImagickPixel class<ul class="chunklist chunklist_book chunklist_children"><li><a href="imagickpixel.clear.php">ImagickPixel::clear</a> — Clears resources associated with this object</li><li><a href="imagickpixel.construct.php">ImagickPixel::__construct</a> — The ImagickPixel constructor</li><li><a href="imagickpixel.destroy.php">ImagickPixel::destroy</a> — Deallocates resources associated with this object</li><li><a href="imagickpixel.getcolor.php">ImagickPixel::getColor</a> — Returns the color</li><li><a href="imagickpixel.getcolorasstring.php">ImagickPixel::getColorAsString</a> — Returns the color as a string</li><li><a href="imagickpixel.getcolorcount.php">ImagickPixel::getColorCount</a> — Returns the color count associated with this color</li><li><a href="imagickpixel.getcolorquantum.php">ImagickPixel::getColorQuantum</a> — Returns the color of the pixel in an array as Quantum values</li><li><a href="imagickpixel.getcolorvalue.php">ImagickPixel::getColorValue</a> — Gets the normalized value of the provided color channel</li><li><a href="imagickpixel.getcolorvaluequantum.php">ImagickPixel::getColorValueQuantum</a> — Gets the quantum value of a color in the ImagickPixel</li><li><a href="imagickpixel.gethsl.php">ImagickPixel::getHSL</a> — Returns the normalized HSL color of the ImagickPixel object</li><li><a href="imagickpixel.getindex.php">ImagickPixel::getIndex</a> — Gets the colormap index of the pixel wand</li><li><a href="imagickpixel.ispixelsimilar.php">ImagickPixel::isPixelSimilar</a> — Check the distance between this color and another</li><li><a href="imagickpixel.ispixelsimilarquantum.php">ImagickPixel::isPixelSimilarQuantum</a> — Returns whether two colors differ by less than the specified distance</li><li><a href="imagickpixel.issimilar.php">ImagickPixel::isSimilar</a> — Check the distance between this color and another</li><li><a href="imagickpixel.setcolor.php">ImagickPixel::setColor</a> — Sets the color</li><li><a href="imagickpixel.setcolorcount.php">ImagickPixel::setColorCount</a> — Sets the color count associated with this color</li><li><a href="imagickpixel.setcolorvalue.php">ImagickPixel::setColorValue</a> — Sets the normalized value of one of the channels</li><li><a href="imagickpixel.setcolorvaluequantum.php">ImagickPixel::setColorValueQuantum</a> — Sets the quantum value of a color element of the ImagickPixel</li><li><a href="imagickpixel.sethsl.php">ImagickPixel::setHSL</a> — Sets the normalized HSL color</li><li><a href="imagickpixel.setindex.php">ImagickPixel::setIndex</a> — Sets the colormap index of the pixel wand</li></ul></li><li><a href="class.imagickpixeliterator.php">ImagickPixelIterator</a> — The ImagickPixelIterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="imagickpixeliterator.clear.php">ImagickPixelIterator::clear</a> — Clear resources associated with a PixelIterator</li><li><a href="imagickpixeliterator.construct.php">ImagickPixelIterator::__construct</a> — The ImagickPixelIterator constructor</li><li><a href="imagickpixeliterator.destroy.php">ImagickPixelIterator::destroy</a> — Deallocates resources associated with a PixelIterator</li><li><a href="imagickpixeliterator.getcurrentiteratorrow.php">ImagickPixelIterator::getCurrentIteratorRow</a> — Returns the current row of ImagickPixel objects</li><li><a href="imagickpixeliterator.getiteratorrow.php">ImagickPixelIterator::getIteratorRow</a> — Returns the current pixel iterator row</li><li><a href="imagickpixeliterator.getnextiteratorrow.php">ImagickPixelIterator::getNextIteratorRow</a> — Returns the next row of the pixel iterator</li><li><a href="imagickpixeliterator.getpreviousiteratorrow.php">ImagickPixelIterator::getPreviousIteratorRow</a> — Returns the previous row</li><li><a href="imagickpixeliterator.newpixeliterator.php">ImagickPixelIterator::newPixelIterator</a> — Returns a new pixel iterator</li><li><a href="imagickpixeliterator.newpixelregioniterator.php">ImagickPixelIterator::newPixelRegionIterator</a> — Returns a new pixel iterator</li><li><a href="imagickpixeliterator.resetiterator.php">ImagickPixelIterator::resetIterator</a> — Resets the pixel iterator</li><li><a href="imagickpixeliterator.setiteratorfirstrow.php">ImagickPixelIterator::setIteratorFirstRow</a> — Sets the pixel iterator to the first pixel row</li><li><a href="imagickpixeliterator.setiteratorlastrow.php">ImagickPixelIterator::setIteratorLastRow</a> — Sets the pixel iterator to the last pixel row</li><li><a href="imagickpixeliterator.setiteratorrow.php">ImagickPixelIterator::setIteratorRow</a> — Set the pixel iterator row</li><li><a href="imagickpixeliterator.synciterator.php">ImagickPixelIterator::syncIterator</a> — Syncs the pixel iterator</li></ul></li><li><a href="class.imagickkernel.php">ImagickKernel</a> — The ImagickKernel class<ul class="chunklist chunklist_book chunklist_children"><li><a href="imagickkernel.addkernel.php">ImagickKernel::addKernel</a> — Attach another kernel to a kernel list</li><li><a href="imagickkernel.addunitykernel.php">ImagickKernel::addUnityKernel</a> — Adds a Unity Kernel to the kernel list</li><li><a href="imagickkernel.frombuiltin.php">ImagickKernel::fromBuiltIn</a> — Create a kernel from a builtin in kernel</li><li><a href="imagickkernel.frommatrix.php">ImagickKernel::fromMatrix</a> — Create a kernel from a 2d matrix of values</li><li><a href="imagickkernel.getmatrix.php">ImagickKernel::getMatrix</a> — Get the 2d matrix of values used in this kernel</li><li><a href="imagickkernel.scale.php">ImagickKernel::scale</a> — Scales a kernel list by the given amount</li><li><a href="imagickkernel.separate.php">ImagickKernel::separate</a> — Separates a linked set of kernels and returns an array of ImagickKernels</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.imagick%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.imagick&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.imagick.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="78717">  <div class="votes">
    <div id="Vu78717">
    <a href="/manual/vote-note.php?id=78717&amp;page=book.imagick&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78717">
    <a href="/manual/vote-note.php?id=78717&amp;page=book.imagick&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78717" title="57% like this...">
    17
    </div>
  </div>
  <a href="#78717" class="name">
  <strong class="user"><em>mlong-php at mlong dot us</em></strong></a><a class="genanchor" href="#78717"> &para;</a><div class="date" title="2007-10-24 11:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78717">
<div class="phpcode"><code><span class="html">Here is an example on how to take an image that is already in a string (say, from a database), and resize it, add a border, and print it out. I use this for showing reseller logos<br /><br />  // Decode image from base64<br />  $image=base64_decode($imagedata);<br /><br />  // Create Imagick object<br />  $im = new Imagick();<br /><br />  // Convert image into Imagick<br />  $im-&gt;readimageblob($image);<br /><br />  // Create thumbnail max of 200x82<br />  $im-&gt;thumbnailImage(200,82,true);<br /><br />  // Add a subtle border<br />  $color=new ImagickPixel();<br />  $color-&gt;setColor("rgb(220,220,220)");<br />  $im-&gt;borderImage($color,1,1);<br /><br />  // Output the image<br />  $output = $im-&gt;getimageblob();<br />  $outputtype = $im-&gt;getFormat();<br /><br />  header("Content-type: $outputtype");<br />  echo $output;</span></code></div>
  </div>
 </div>
  <div class="note" id="111591">  <div class="votes">
    <div id="Vu111591">
    <a href="/manual/vote-note.php?id=111591&amp;page=book.imagick&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111591">
    <a href="/manual/vote-note.php?id=111591&amp;page=book.imagick&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111591" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#111591" class="name">
  <strong class="user"><em>carlosvanhalen7 at gmail dot com</em></strong></a><a class="genanchor" href="#111591"> &para;</a><div class="date" title="2013-03-06 07:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111591">
<div class="phpcode"><code><span class="html">Here's a handy function that finds the first occurrence of a specific pixel. You can set the tolerance of the color you are looking for, or set it to 0 if want an exact match<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">findPixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$tolerance</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">)<br />{<br />    </span><span class="default">$original_                 </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$height                    </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$width                    </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">)    = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$matrix_org                </span><span class="keyword">= array();<br />    </span><span class="default">$matrix_mrk                </span><span class="keyword">= array();<br /><br />    for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />        </span><span class="default">$matrix_org</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]            = array();<br />        </span><span class="default">$matrix_mrk</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">]            = array();<br />    }<br /><br />    for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )<br />    {<br />        for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height </span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ ){<br />            </span><span class="default">$matrix_org</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]                = </span><span class="default">$original_</span><span class="keyword">-&gt;</span><span class="default">getImagePixelColor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)-&gt;</span><span class="default">getColorAsString</span><span class="keyword">();<br />            </span><span class="default">$colors                         </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^-,0-9+$]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$matrix_org</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]); <br />            </span><span class="default">$colors                            </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$colors</span><span class="keyword">);<br />            </span><span class="default">$r_org                            </span><span class="keyword">= </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            </span><span class="default">$g_org                            </span><span class="keyword">= </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />            </span><span class="default">$b_org                            </span><span class="keyword">= </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />            <br />            if(     ( </span><span class="default">$r </span><span class="keyword">&lt;= (</span><span class="default">$r_org</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">) &amp;&amp; </span><span class="default">$r </span><span class="keyword">&gt;= (</span><span class="default">$r_org </span><span class="keyword">- </span><span class="default">$tolerance</span><span class="keyword">) ) <br />                &amp;&amp;  ( </span><span class="default">$g </span><span class="keyword">&lt;= (</span><span class="default">$g_org</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">) &amp;&amp; </span><span class="default">$g </span><span class="keyword">&gt;= (</span><span class="default">$g_org </span><span class="keyword">- </span><span class="default">$tolerance</span><span class="keyword">) ) <br />                &amp;&amp;  ( </span><span class="default">$b </span><span class="keyword">&lt;= (</span><span class="default">$b_org</span><span class="keyword">+</span><span class="default">$tolerance</span><span class="keyword">) &amp;&amp; </span><span class="default">$b </span><span class="keyword">&gt;= (</span><span class="default">$b_org </span><span class="keyword">- </span><span class="default">$tolerance</span><span class="keyword">) ) )<br />            {<br />                return array( </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);<br />            }<br />        }<br />    }<br /><br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82366">  <div class="votes">
    <div id="Vu82366">
    <a href="/manual/vote-note.php?id=82366&amp;page=book.imagick&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82366">
    <a href="/manual/vote-note.php?id=82366&amp;page=book.imagick&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82366" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#82366" class="name">
  <strong class="user"><em>Eero Niemi (eero at eero dot info)</em></strong></a><a class="genanchor" href="#82366"> &para;</a><div class="date" title="2008-04-08 07:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82366">
<div class="phpcode"><code><span class="html">To load image (usually vector image, like PDF) with larger resolution than image's default is, you have to set resolution before reading the file, like this:<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(); <br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">setResolution</span><span class="keyword">( </span><span class="default">300</span><span class="keyword">, </span><span class="default">300 </span><span class="keyword">); <br /></span><span class="default">$im</span><span class="keyword">-&gt;</span><span class="default">readImage</span><span class="keyword">( </span><span class="string">"test.pdf" </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.imagick&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.imagick.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.utilspec.image.php">Image Processing and Generation</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.exif.php" title="Exif">Exif</a>
                        </li>
                                                <li class="">
                            <a href="book.image.php" title="GD">GD</a>
                        </li>
                                                <li class="">
                            <a href="book.gmagick.php" title="Gmagick">Gmagick</a>
                        </li>
                                                <li class="current">
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
