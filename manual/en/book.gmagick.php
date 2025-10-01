<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Gmagick - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.gmagick.php">
 <link rel="shorturl" href="https://www.php.net/gmagick">
 <link rel="alternate" href="https://www.php.net/gmagick" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.utilspec.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.gdfont.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.gmagick.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.gmagick.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.gmagick.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.gmagick.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.gmagick.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.gmagick.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.gmagick.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.gmagick.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.gmagick.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.gmagick.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.gmagick.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.gmagick.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gmagick" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Gmagick - Manual" />
<meta name="twitter:description" content="Gmagick" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Gmagick - Manual" />
<meta itemprop="description" content="Gmagick" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gmagick" />

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
        <a href="intro.gmagick.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.gdfont.php">
          &laquo; GdFont        </a>
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
            <option value='en/book.gmagick.php' selected="selected">English</option>
            <option value='de/book.gmagick.php'>German</option>
            <option value='es/book.gmagick.php'>Spanish</option>
            <option value='fr/book.gmagick.php'>French</option>
            <option value='it/book.gmagick.php'>Italian</option>
            <option value='ja/book.gmagick.php'>Japanese</option>
            <option value='pt_BR/book.gmagick.php'>Brazilian Portuguese</option>
            <option value='ru/book.gmagick.php'>Russian</option>
            <option value='tr/book.gmagick.php'>Turkish</option>
            <option value='uk/book.gmagick.php'>Ukrainian</option>
            <option value='zh/book.gmagick.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.gmagick" class="book">
 
 <h1 class="title">Gmagick</h1>
 

 

 







 







 







 






 






 





 
<ul class="chunklist chunklist_book"><li><a href="intro.gmagick.php">Introduction</a></li><li><a href="gmagick.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="gmagick.requirements.php">Requirements</a></li><li><a href="gmagick.installation.php">Installation</a></li></ul></li><li><a href="gmagick.constants.php">Predefined Constants</a></li><li><a href="gmagick.examples.php">Examples</a></li><li><a href="class.gmagick.php">Gmagick</a> — The Gmagick class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gmagick.addimage.php">Gmagick::addimage</a> — Adds new image to Gmagick object image list</li><li><a href="gmagick.addnoiseimage.php">Gmagick::addnoiseimage</a> — Adds random noise to the image</li><li><a href="gmagick.annotateimage.php">Gmagick::annotateimage</a> — Annotates an image with text</li><li><a href="gmagick.blurimage.php">Gmagick::blurimage</a> — Adds blur filter to image</li><li><a href="gmagick.borderimage.php">Gmagick::borderimage</a> — Surrounds the image with a border</li><li><a href="gmagick.charcoalimage.php">Gmagick::charcoalimage</a> — Simulates a charcoal drawing</li><li><a href="gmagick.chopimage.php">Gmagick::chopimage</a> — Removes a region of an image and trims</li><li><a href="gmagick.clear.php">Gmagick::clear</a> — Clears all resources associated to Gmagick object</li><li><a href="gmagick.commentimage.php">Gmagick::commentimage</a> — Adds a comment to your image</li><li><a href="gmagick.compositeimage.php">Gmagick::compositeimage</a> — Composite one image onto another</li><li><a href="gmagick.construct.php">Gmagick::__construct</a> — The Gmagick constructor</li><li><a href="gmagick.cropimage.php">Gmagick::cropimage</a> — Extracts a region of the image</li><li><a href="gmagick.cropthumbnailimage.php">Gmagick::cropthumbnailimage</a> — Creates a crop thumbnail</li><li><a href="gmagick.current.php">Gmagick::current</a> — The current purpose</li><li><a href="gmagick.cyclecolormapimage.php">Gmagick::cyclecolormapimage</a> — Displaces an image's colormap</li><li><a href="gmagick.deconstructimages.php">Gmagick::deconstructimages</a> — Returns certain pixel differences between images</li><li><a href="gmagick.despeckleimage.php">Gmagick::despeckleimage</a> — The despeckleimage purpose</li><li><a href="gmagick.destroy.php">Gmagick::destroy</a> — The destroy purpose</li><li><a href="gmagick.drawimage.php">Gmagick::drawimage</a> — Renders the GmagickDraw object on the current image</li><li><a href="gmagick.edgeimage.php">Gmagick::edgeimage</a> — Enhance edges within the image</li><li><a href="gmagick.embossimage.php">Gmagick::embossimage</a> — Returns a grayscale image with a three-dimensional effect</li><li><a href="gmagick.enhanceimage.php">Gmagick::enhanceimage</a> — Improves the quality of a noisy image</li><li><a href="gmagick.equalizeimage.php">Gmagick::equalizeimage</a> — Equalizes the image histogram</li><li><a href="gmagick.flipimage.php">Gmagick::flipimage</a> — Creates a vertical mirror image</li><li><a href="gmagick.flopimage.php">Gmagick::flopimage</a> — Creates a horizontal mirror image</li><li><a href="gmagick.frameimage.php">Gmagick::frameimage</a> — Adds a simulated three-dimensional border</li><li><a href="gmagick.gammaimage.php">Gmagick::gammaimage</a> — Gamma-corrects an image</li><li><a href="gmagick.getcopyright.php">Gmagick::getcopyright</a> — Returns the GraphicsMagick API copyright as a string</li><li><a href="gmagick.getfilename.php">Gmagick::getfilename</a> — The filename associated with an image sequence</li><li><a href="gmagick.getimagebackgroundcolor.php">Gmagick::getimagebackgroundcolor</a> — Returns the image background color</li><li><a href="gmagick.getimageblueprimary.php">Gmagick::getimageblueprimary</a> — Returns the chromaticy blue primary point</li><li><a href="gmagick.getimagebordercolor.php">Gmagick::getimagebordercolor</a> — Returns the image border color</li><li><a href="gmagick.getimagechanneldepth.php">Gmagick::getimagechanneldepth</a> — Gets the depth for a particular image channel</li><li><a href="gmagick.getimagecolors.php">Gmagick::getimagecolors</a> — Returns the color of the specified colormap index</li><li><a href="gmagick.getimagecolorspace.php">Gmagick::getimagecolorspace</a> — Gets the image colorspace</li><li><a href="gmagick.getimagecompose.php">Gmagick::getimagecompose</a> — Returns the composite operator associated with the image</li><li><a href="gmagick.getimagedelay.php">Gmagick::getimagedelay</a> — Gets the image delay</li><li><a href="gmagick.getimagedepth.php">Gmagick::getimagedepth</a> — Gets the depth of the image</li><li><a href="gmagick.getimagedispose.php">Gmagick::getimagedispose</a> — Gets the image disposal method</li><li><a href="gmagick.getimageextrema.php">Gmagick::getimageextrema</a> — Gets the extrema for the image</li><li><a href="gmagick.getimagefilename.php">Gmagick::getimagefilename</a> — Returns the filename of a particular image in a sequence</li><li><a href="gmagick.getimageformat.php">Gmagick::getimageformat</a> — Returns the format of a particular image in a sequence</li><li><a href="gmagick.getimagegamma.php">Gmagick::getimagegamma</a> — Gets the image gamma</li><li><a href="gmagick.getimagegreenprimary.php">Gmagick::getimagegreenprimary</a> — Returns the chromaticy green primary point</li><li><a href="gmagick.getimageheight.php">Gmagick::getimageheight</a> — Returns the image height</li><li><a href="gmagick.getimagehistogram.php">Gmagick::getimagehistogram</a> — Gets the image histogram</li><li><a href="gmagick.getimageindex.php">Gmagick::getimageindex</a> — Gets the index of the current active image</li><li><a href="gmagick.getimageinterlacescheme.php">Gmagick::getimageinterlacescheme</a> — Gets the image interlace scheme</li><li><a href="gmagick.getimageiterations.php">Gmagick::getimageiterations</a> — Gets the image iterations</li><li><a href="gmagick.getimagematte.php">Gmagick::getimagematte</a> — Check if the image has a matte channel</li><li><a href="gmagick.getimagemattecolor.php">Gmagick::getimagemattecolor</a> — Returns the image matte color</li><li><a href="gmagick.getimageprofile.php">Gmagick::getimageprofile</a> — Returns the named image profile</li><li><a href="gmagick.getimageredprimary.php">Gmagick::getimageredprimary</a> — Returns the chromaticity red primary point</li><li><a href="gmagick.getimagerenderingintent.php">Gmagick::getimagerenderingintent</a> — Gets the image rendering intent</li><li><a href="gmagick.getimageresolution.php">Gmagick::getimageresolution</a> — Gets the image X and Y resolution</li><li><a href="gmagick.getimagescene.php">Gmagick::getimagescene</a> — Gets the image scene</li><li><a href="gmagick.getimagesignature.php">Gmagick::getimagesignature</a> — Generates an SHA-256 message digest</li><li><a href="gmagick.getimagetype.php">Gmagick::getimagetype</a> — Gets the potential image type</li><li><a href="gmagick.getimageunits.php">Gmagick::getimageunits</a> — Gets the image units of resolution</li><li><a href="gmagick.getimagewhitepoint.php">Gmagick::getimagewhitepoint</a> — Returns the chromaticity white point</li><li><a href="gmagick.getimagewidth.php">Gmagick::getimagewidth</a> — Returns the width of the image</li><li><a href="gmagick.getpackagename.php">Gmagick::getpackagename</a> — Returns the GraphicsMagick package name</li><li><a href="gmagick.getquantumdepth.php">Gmagick::getquantumdepth</a> — Returns the Gmagick quantum depth as a string</li><li><a href="gmagick.getreleasedate.php">Gmagick::getreleasedate</a> — Returns the GraphicsMagick release date as a string</li><li><a href="gmagick.getsamplingfactors.php">Gmagick::getsamplingfactors</a> — Gets the horizontal and vertical sampling factor</li><li><a href="gmagick.getsize.php">Gmagick::getsize</a> — Returns the size associated with the Gmagick object</li><li><a href="gmagick.getversion.php">Gmagick::getversion</a> — Returns the GraphicsMagick API version</li><li><a href="gmagick.hasnextimage.php">Gmagick::hasnextimage</a> — Checks if the object has more images</li><li><a href="gmagick.haspreviousimage.php">Gmagick::haspreviousimage</a> — Checks if the object has a previous image</li><li><a href="gmagick.implodeimage.php">Gmagick::implodeimage</a> — Creates a new image as a copy</li><li><a href="gmagick.labelimage.php">Gmagick::labelimage</a> — Adds a label to an image</li><li><a href="gmagick.levelimage.php">Gmagick::levelimage</a> — Adjusts the levels of an image</li><li><a href="gmagick.magnifyimage.php">Gmagick::magnifyimage</a> — Scales an image proportionally 2x</li><li><a href="gmagick.mapimage.php">Gmagick::mapimage</a> — Replaces the colors of an image with the closest color from a reference image</li><li><a href="gmagick.medianfilterimage.php">Gmagick::medianfilterimage</a> — Applies a digital filter</li><li><a href="gmagick.minifyimage.php">Gmagick::minifyimage</a> — Scales an image proportionally to half its size</li><li><a href="gmagick.modulateimage.php">Gmagick::modulateimage</a> — Control the brightness, saturation, and hue</li><li><a href="gmagick.motionblurimage.php">Gmagick::motionblurimage</a> — Simulates motion blur</li><li><a href="gmagick.newimage.php">Gmagick::newimage</a> — Creates a new image</li><li><a href="gmagick.nextimage.php">Gmagick::nextimage</a> — Moves to the next image</li><li><a href="gmagick.normalizeimage.php">Gmagick::normalizeimage</a> — Enhances the contrast of a color image</li><li><a href="gmagick.oilpaintimage.php">Gmagick::oilpaintimage</a> — Simulates an oil painting</li><li><a href="gmagick.previousimage.php">Gmagick::previousimage</a> — Move to the previous image in the object</li><li><a href="gmagick.profileimage.php">Gmagick::profileimage</a> — Adds or removes a profile from an image</li><li><a href="gmagick.quantizeimage.php">Gmagick::quantizeimage</a> — Analyzes the colors within a reference image</li><li><a href="gmagick.quantizeimages.php">Gmagick::quantizeimages</a> — The quantizeimages purpose</li><li><a href="gmagick.queryfontmetrics.php">Gmagick::queryfontmetrics</a> — Returns an array representing the font metrics</li><li><a href="gmagick.queryfonts.php">Gmagick::queryfonts</a> — Returns the configured fonts</li><li><a href="gmagick.queryformats.php">Gmagick::queryformats</a> — Returns formats supported by Gmagick</li><li><a href="gmagick.radialblurimage.php">Gmagick::radialblurimage</a> — Radial blurs an image</li><li><a href="gmagick.raiseimage.php">Gmagick::raiseimage</a> — Creates a simulated 3d button-like effect</li><li><a href="gmagick.read.php">Gmagick::read</a> — Reads image from filename</li><li><a href="gmagick.readimage.php">Gmagick::readimage</a> — Reads image from filename</li><li><a href="gmagick.readimageblob.php">Gmagick::readimageblob</a> — Reads image from a binary string</li><li><a href="gmagick.readimagefile.php">Gmagick::readimagefile</a> — The readimagefile purpose</li><li><a href="gmagick.reducenoiseimage.php">Gmagick::reducenoiseimage</a> — Smooths the contours of an image</li><li><a href="gmagick.removeimage.php">Gmagick::removeimage</a> — Removes an image from the image list</li><li><a href="gmagick.removeimageprofile.php">Gmagick::removeimageprofile</a> — Removes the named image profile and returns it</li><li><a href="gmagick.resampleimage.php">Gmagick::resampleimage</a> — Resample image to desired resolution</li><li><a href="gmagick.resizeimage.php">Gmagick::resizeimage</a> — Scales an image</li><li><a href="gmagick.rollimage.php">Gmagick::rollimage</a> — Offsets an image</li><li><a href="gmagick.rotateimage.php">Gmagick::rotateimage</a> — Rotates an image</li><li><a href="gmagick.scaleimage.php">Gmagick::scaleimage</a> — Scales the size of an image</li><li><a href="gmagick.separateimagechannel.php">Gmagick::separateimagechannel</a> — Separates a channel from the image</li><li><a href="gmagick.setcompressionquality.php">Gmagick::setCompressionQuality</a> — Sets the object's default compression quality</li><li><a href="gmagick.setfilename.php">Gmagick::setfilename</a> — Sets the filename before you read or write the image</li><li><a href="gmagick.setimagebackgroundcolor.php">Gmagick::setimagebackgroundcolor</a> — Sets the image background color</li><li><a href="gmagick.setimageblueprimary.php">Gmagick::setimageblueprimary</a> — Sets the image chromaticity blue primary point</li><li><a href="gmagick.setimagebordercolor.php">Gmagick::setimagebordercolor</a> — Sets the image border color</li><li><a href="gmagick.setimagechanneldepth.php">Gmagick::setimagechanneldepth</a> — Sets the depth of a particular image channel</li><li><a href="gmagick.setimagecolorspace.php">Gmagick::setimagecolorspace</a> — Sets the image colorspace</li><li><a href="gmagick.setimagecompose.php">Gmagick::setimagecompose</a> — Sets the image composite operator</li><li><a href="gmagick.setimagedelay.php">Gmagick::setimagedelay</a> — Sets the image delay</li><li><a href="gmagick.setimagedepth.php">Gmagick::setimagedepth</a> — Sets the image depth</li><li><a href="gmagick.setimagedispose.php">Gmagick::setimagedispose</a> — Sets the image disposal method</li><li><a href="gmagick.setimagefilename.php">Gmagick::setimagefilename</a> — Sets the filename of a particular image in a sequence</li><li><a href="gmagick.setimageformat.php">Gmagick::setimageformat</a> — Sets the format of a particular image</li><li><a href="gmagick.setimagegamma.php">Gmagick::setimagegamma</a> — Sets the image gamma</li><li><a href="gmagick.setimagegreenprimary.php">Gmagick::setimagegreenprimary</a> — Sets the image chromaticity green primary point</li><li><a href="gmagick.setimageindex.php">Gmagick::setimageindex</a> — Set the iterator to the position in the image list specified with the index parameter</li><li><a href="gmagick.setimageinterlacescheme.php">Gmagick::setimageinterlacescheme</a> — Sets the interlace scheme of the image</li><li><a href="gmagick.setimageiterations.php">Gmagick::setimageiterations</a> — Sets the image iterations</li><li><a href="gmagick.setimageprofile.php">Gmagick::setimageprofile</a> — Adds a named profile to the Gmagick object</li><li><a href="gmagick.setimageredprimary.php">Gmagick::setimageredprimary</a> — Sets the image chromaticity red primary point</li><li><a href="gmagick.setimagerenderingintent.php">Gmagick::setimagerenderingintent</a> — Sets the image rendering intent</li><li><a href="gmagick.setimageresolution.php">Gmagick::setimageresolution</a> — Sets the image resolution</li><li><a href="gmagick.setimagescene.php">Gmagick::setimagescene</a> — Sets the image scene</li><li><a href="gmagick.setimagetype.php">Gmagick::setimagetype</a> — Sets the image type</li><li><a href="gmagick.setimageunits.php">Gmagick::setimageunits</a> — Sets the image units of resolution</li><li><a href="gmagick.setimagewhitepoint.php">Gmagick::setimagewhitepoint</a> — Sets the image chromaticity white point</li><li><a href="gmagick.setsamplingfactors.php">Gmagick::setsamplingfactors</a> — Sets the image sampling factors</li><li><a href="gmagick.setsize.php">Gmagick::setsize</a> — Sets the size of the Gmagick object</li><li><a href="gmagick.shearimage.php">Gmagick::shearimage</a> — Creating a parallelogram</li><li><a href="gmagick.solarizeimage.php">Gmagick::solarizeimage</a> — Applies a solarizing effect to the image</li><li><a href="gmagick.spreadimage.php">Gmagick::spreadimage</a> — Randomly displaces each pixel in a block</li><li><a href="gmagick.stripimage.php">Gmagick::stripimage</a> — Strips an image of all profiles and comments</li><li><a href="gmagick.swirlimage.php">Gmagick::swirlimage</a> — Swirls the pixels about the center of the image</li><li><a href="gmagick.thumbnailimage.php">Gmagick::thumbnailimage</a> — Changes the size of an image</li><li><a href="gmagick.trimimage.php">Gmagick::trimimage</a> — Remove edges from the image</li><li><a href="gmagick.write.php">Gmagick::write</a> — Alias of Gmagick::writeimage</li><li><a href="gmagick.writeimage.php">Gmagick::writeimage</a> — Writes an image to the specified filename</li></ul></li><li><a href="class.gmagickdraw.php">GmagickDraw</a> — The GmagickDraw class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gmagickdraw.annotate.php">GmagickDraw::annotate</a> — Draws text on the image</li><li><a href="gmagickdraw.arc.php">GmagickDraw::arc</a> — Draws an arc</li><li><a href="gmagickdraw.bezier.php">GmagickDraw::bezier</a> — Draws a bezier curve</li><li><a href="gmagickdraw.ellipse.php">GmagickDraw::ellipse</a> — Draws an ellipse on the image</li><li><a href="gmagickdraw.getfillcolor.php">GmagickDraw::getfillcolor</a> — Returns the fill color</li><li><a href="gmagickdraw.getfillopacity.php">GmagickDraw::getfillopacity</a> — Returns the opacity used when drawing</li><li><a href="gmagickdraw.getfont.php">GmagickDraw::getfont</a> — Returns the font</li><li><a href="gmagickdraw.getfontsize.php">GmagickDraw::getfontsize</a> — Returns the font pointsize</li><li><a href="gmagickdraw.getfontstyle.php">GmagickDraw::getfontstyle</a> — Returns the font style</li><li><a href="gmagickdraw.getfontweight.php">GmagickDraw::getfontweight</a> — Returns the font weight</li><li><a href="gmagickdraw.getstrokecolor.php">GmagickDraw::getstrokecolor</a> — Returns the color used for stroking object outlines</li><li><a href="gmagickdraw.getstrokeopacity.php">GmagickDraw::getstrokeopacity</a> — Returns the opacity of stroked object outlines</li><li><a href="gmagickdraw.getstrokewidth.php">GmagickDraw::getstrokewidth</a> — Returns the width of the stroke used to draw object outlines</li><li><a href="gmagickdraw.gettextdecoration.php">GmagickDraw::gettextdecoration</a> — Returns the text decoration</li><li><a href="gmagickdraw.gettextencoding.php">GmagickDraw::gettextencoding</a> — Returns the code set used for text annotations</li><li><a href="gmagickdraw.line.php">GmagickDraw::line</a> — Draws a line</li><li><a href="gmagickdraw.point.php">GmagickDraw::point</a> — Draws a point</li><li><a href="gmagickdraw.polygon.php">GmagickDraw::polygon</a> — Draws a polygon</li><li><a href="gmagickdraw.polyline.php">GmagickDraw::polyline</a> — Draws a polyline</li><li><a href="gmagickdraw.rectangle.php">GmagickDraw::rectangle</a> — Draws a rectangle</li><li><a href="gmagickdraw.rotate.php">GmagickDraw::rotate</a> — Applies the specified rotation to the current coordinate space</li><li><a href="gmagickdraw.roundrectangle.php">GmagickDraw::roundrectangle</a> — Draws a rounded rectangle</li><li><a href="gmagickdraw.scale.php">GmagickDraw::scale</a> — Adjusts the scaling factor</li><li><a href="gmagickdraw.setfillcolor.php">GmagickDraw::setfillcolor</a> — Sets the fill color to be used for drawing filled objects</li><li><a href="gmagickdraw.setfillopacity.php">GmagickDraw::setfillopacity</a> — The setfillopacity purpose</li><li><a href="gmagickdraw.setfont.php">GmagickDraw::setfont</a> — Sets the fully-specified font to use when annotating with text</li><li><a href="gmagickdraw.setfontsize.php">GmagickDraw::setfontsize</a> — Sets the font pointsize to use when annotating with text</li><li><a href="gmagickdraw.setfontstyle.php">GmagickDraw::setfontstyle</a> — Sets the font style to use when annotating with text</li><li><a href="gmagickdraw.setfontweight.php">GmagickDraw::setfontweight</a> — Sets the font weight</li><li><a href="gmagickdraw.setstrokecolor.php">GmagickDraw::setstrokecolor</a> — Sets the color used for stroking object outlines</li><li><a href="gmagickdraw.setstrokeopacity.php">GmagickDraw::setstrokeopacity</a> — Specifies the opacity of stroked object outlines</li><li><a href="gmagickdraw.setstrokewidth.php">GmagickDraw::setstrokewidth</a> — Sets the width of the stroke used to draw object outlines</li><li><a href="gmagickdraw.settextdecoration.php">GmagickDraw::settextdecoration</a> — Specifies a decoration</li><li><a href="gmagickdraw.settextencoding.php">GmagickDraw::settextencoding</a> — Specifies the text code set</li></ul></li><li><a href="class.gmagickpixel.php">GmagickPixel</a> — The GmagickPixel class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gmagickpixel.construct.php">GmagickPixel::__construct</a> — The GmagickPixel constructor</li><li><a href="gmagickpixel.getcolor.php">GmagickPixel::getcolor</a> — Returns the color</li><li><a href="gmagickpixel.getcolorcount.php">GmagickPixel::getcolorcount</a> — Returns the color count associated with this color</li><li><a href="gmagickpixel.getcolorvalue.php">GmagickPixel::getcolorvalue</a> — Gets the normalized value of the provided color channel</li><li><a href="gmagickpixel.setcolor.php">GmagickPixel::setcolor</a> — Sets the color</li><li><a href="gmagickpixel.setcolorvalue.php">GmagickPixel::setcolorvalue</a> — Sets the normalized value of one of the channels</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmagick/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.gmagick%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.gmagick&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gmagick.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
