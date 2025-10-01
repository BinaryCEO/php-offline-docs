<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Basic usage - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/imagick.examples-1.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagick.examples-1.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagick.examples-1.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/imagick.examples.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagick.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/class.imagick.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagick.examples-1.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagick.examples-1.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagick.examples-1.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagick.examples-1.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagick.examples-1.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagick.examples-1.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagick.examples-1.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagick.examples-1.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagick.examples-1.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagick.examples-1.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagick.examples-1.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Basic usage" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Basic usage - Manual" />
<meta name="twitter:description" content="Basic usage" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Basic usage - Manual" />
<meta itemprop="description" content="Basic usage" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Basic usage" />

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
        <a href="class.imagick.php">
          Imagick &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagick.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      <li><a href='imagick.examples.php'>Examples</a></li>      </ul>
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
            <option value='en/imagick.examples-1.php' selected="selected">English</option>
            <option value='de/imagick.examples-1.php'>German</option>
            <option value='es/imagick.examples-1.php'>Spanish</option>
            <option value='fr/imagick.examples-1.php'>French</option>
            <option value='it/imagick.examples-1.php'>Italian</option>
            <option value='ja/imagick.examples-1.php'>Japanese</option>
            <option value='pt_BR/imagick.examples-1.php'>Brazilian Portuguese</option>
            <option value='ru/imagick.examples-1.php'>Russian</option>
            <option value='tr/imagick.examples-1.php'>Turkish</option>
            <option value='uk/imagick.examples-1.php'>Ukrainian</option>
            <option value='zh/imagick.examples-1.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagick.examples-1" class="section">
  <h2 class="title">Basic usage</h2>
  <p class="para">
   Imagick makes image manipulation in PHP extremely easy through an OO
   interface. Here is a quick example on how to make a thumbnail:
   <div class="example" id="example-2956">
    <p><strong>Example #1 Creating a thumbnail in Imagick</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$image </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">(</span><span style="color: #DD0000">'image.jpg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// If 0 is provided as a width or height parameter,<br />// aspect ratio is maintained<br /></span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">thumbnailImage</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$image</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   Using SPL and other OO features supported in Imagick, it can be simple
   to resize all files in a directory (useful for batch resizing large
   digital camera images to be web viewable). Here we use resize, as we might
   want to retain certain meta-data:
   <div class="example" id="example-2957">
    <p><strong>Example #2 Make a thumbnail of all JPG files in a directory</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$images </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">(</span><span style="color: #0000BB">glob</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/*.JPG'</span><span style="color: #007700">));<br /><br />foreach(</span><span style="color: #0000BB">$images </span><span style="color: #007700">as </span><span style="color: #0000BB">$image</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// Providing 0 forces thumbnailImage to maintain aspect ratio<br />    </span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">thumbnailImage</span><span style="color: #007700">(</span><span style="color: #0000BB">1024</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />}<br /><br /></span><span style="color: #0000BB">$images</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeImages</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   This is an example of creating a reflection of an image.
   The reflection is created by flipping the image and overlaying a gradient on it.
   Then both, the original image and the reflection is overlayed on a canvas.
   <div class="example" id="example-2958">
    <p><strong>Example #3 Creating a reflection of an image</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Read the image */<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">(</span><span style="color: #DD0000">"test.png"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Thumbnail the image */<br /></span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">thumbnailImage</span><span style="color: #007700">(</span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create a border for the image */<br /></span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">borderImage</span><span style="color: #007700">(new </span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #DD0000">"white"</span><span style="color: #007700">), </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Clone the image and flip it */<br /></span><span style="color: #0000BB">$reflection </span><span style="color: #007700">= </span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clone</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flipImage</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Create gradient. It will be overlayed on the reflection */<br /></span><span style="color: #0000BB">$gradient </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Gradient needs to be large enough for the image and the borders */<br /></span><span style="color: #0000BB">$gradient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newPseudoImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageWidth</span><span style="color: #007700">() + </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageHeight</span><span style="color: #007700">() + </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #DD0000">"gradient:transparent-black"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Composite the gradient on the reflection */<br /></span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">compositeImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$gradient</span><span style="color: #007700">, </span><span style="color: #0000BB">imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COMPOSITE_OVER</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Add some opacity. Requires ImageMagick 6.2.9 or later */<br /></span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImageOpacity</span><span style="color: #007700">( </span><span style="color: #0000BB">0.3 </span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create an empty canvas */<br /></span><span style="color: #0000BB">$canvas </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Canvas needs to be large enough to hold the both images */<br /></span><span style="color: #0000BB">$width </span><span style="color: #007700">= </span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageWidth</span><span style="color: #007700">() + </span><span style="color: #0000BB">40</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$height </span><span style="color: #007700">= (</span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageHeight</span><span style="color: #007700">() * </span><span style="color: #0000BB">2</span><span style="color: #007700">) + </span><span style="color: #0000BB">30</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, new </span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #DD0000">"black"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImageFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">"png"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Composite the original image and the reflection on the canvas */<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">compositeImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COMPOSITE_OVER</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">compositeImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">, </span><span style="color: #0000BB">imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COMPOSITE_OVER</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getImageHeight</span><span style="color: #007700">() + </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Output the image*/<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/png"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$canvas</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/c0d23d2d6769e53e24a1b3136c064577-hello_world_reflection.png" alt="Output of example : Creating a reflection of an image" width="250" height="130" />
     </div>
    </div>
   </div>
  </p>
  <p class="para">
   This example illustrates how to use fill patterns during drawing.
   <div class="example" id="example-2959">
    <p><strong>Example #4 Filling text with gradient</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Create a new imagick object */<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Create new image. This will be used as fill pattern */<br /></span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newPseudoImage</span><span style="color: #007700">(</span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #DD0000">"gradient:red-black"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create imagickdraw object */<br /></span><span style="color: #0000BB">$draw </span><span style="color: #007700">= new </span><span style="color: #0000BB">ImagickDraw</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Start a new pattern called "gradient" */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pushPattern</span><span style="color: #007700">(</span><span style="color: #DD0000">'gradient'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Composite the gradient on the pattern */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">composite</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">COMPOSITE_OVER</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Close the pattern */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">popPattern</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Use the pattern called "gradient" as the fill */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFillPatternURL</span><span style="color: #007700">(</span><span style="color: #DD0000">'#gradient'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Set font size to 52 */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFontSize</span><span style="color: #007700">(</span><span style="color: #0000BB">52</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Annotate some text */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">annotation</span><span style="color: #007700">(</span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello World!"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create a new canvas object and a white image */<br /></span><span style="color: #0000BB">$canvas </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newImage</span><span style="color: #007700">(</span><span style="color: #0000BB">350</span><span style="color: #007700">, </span><span style="color: #0000BB">70</span><span style="color: #007700">, </span><span style="color: #DD0000">"white"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Draw the ImagickDraw on to the canvas */<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">drawImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* 1px black border around the image */<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">borderImage</span><span style="color: #007700">(</span><span style="color: #DD0000">'black'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Set the format to PNG */<br /></span><span style="color: #0000BB">$canvas</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImageFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Output the image */<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/png"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$canvas</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/c0d23d2d6769e53e24a1b3136c064577-hello_world.png" alt="Output of example : Filling text with gradient" width="352" height="72" />
     </div>
    </div>
   </div>
  </p>
  <p class="para">
   Working with animated GIF images
   <div class="example" id="example-2960">
    <p><strong>Example #5 Read in GIF image and resize all frames</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Create a new imagick object and read in GIF */<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.gif"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Resize all frames */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$im </span><span style="color: #007700">as </span><span style="color: #0000BB">$frame</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">/* 50x50 frames */<br />    </span><span style="color: #0000BB">$frame</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">thumbnailImage</span><span style="color: #007700">(</span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* Set the virtual canvas to correct size */<br />    </span><span style="color: #0000BB">$frame</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImagePage</span><span style="color: #007700">(</span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* Notice writeImages instead of writeImage */<br /></span><span style="color: #0000BB">$im</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeImages</span><span style="color: #007700">(</span><span style="color: #DD0000">"example_small.gif"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Working with ellipse primitive and custom fonts
   <div class="example" id="example-2961">
    <p><strong>Example #6 Create a PHP logo</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Set width and height in proportion of genuine PHP logo */<br /></span><span style="color: #0000BB">$width </span><span style="color: #007700">= </span><span style="color: #0000BB">400</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$height </span><span style="color: #007700">= </span><span style="color: #0000BB">210</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Create an Imagick object with transparent canvas */<br /></span><span style="color: #0000BB">$img </span><span style="color: #007700">= new </span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, new </span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #DD0000">'transparent'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* New ImagickDraw instance for ellipse draw */<br /></span><span style="color: #0000BB">$draw </span><span style="color: #007700">= new </span><span style="color: #0000BB">ImagickDraw</span><span style="color: #007700">();<br /></span><span style="color: #FF8000">/* Set purple fill color for ellipse */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFillColor</span><span style="color: #007700">(</span><span style="color: #DD0000">'#777bb4'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Set ellipse dimensions */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ellipse</span><span style="color: #007700">(</span><span style="color: #0000BB">$width </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$height </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$width </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$height </span><span style="color: #007700">/ </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">360</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Draw ellipse onto the canvas */<br /></span><span style="color: #0000BB">$img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">drawImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Reset fill color from purple to black for text (note: we are reusing ImagickDraw object) */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFillColor</span><span style="color: #007700">(</span><span style="color: #DD0000">'black'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Set stroke border to white color */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStrokeColor</span><span style="color: #007700">(</span><span style="color: #DD0000">'white'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Set stroke border thickness */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStrokeWidth</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Set font kerning (negative value means that letters are closer to each other) */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTextKerning</span><span style="color: #007700">(-</span><span style="color: #0000BB">8</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Set font and font size used in PHP logo */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFont</span><span style="color: #007700">(</span><span style="color: #DD0000">'Handel Gothic.ttf'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFontSize</span><span style="color: #007700">(</span><span style="color: #0000BB">150</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Center text horizontally and vertically */<br /></span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setGravity</span><span style="color: #007700">(</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">::</span><span style="color: #0000BB">GRAVITY_CENTER</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Add center "php" with Y offset of -10 to canvas (inside ellipse) */<br /></span><span style="color: #0000BB">$img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">annotateImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, -</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">'php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImageFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Set appropriate header for PNG and output the image */<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$img</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/c0d23d2d6769e53e24a1b3136c064577-php_logo.png" alt="Output of example : Creating PHP logo with Imagick" width="300" height="180" />
     </div>
    </div>
   </div>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagick.examples-1%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagick.examples-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.examples-1.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115506">  <div class="votes">
    <div id="Vu115506">
    <a href="/manual/vote-note.php?id=115506&amp;page=imagick.examples-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115506">
    <a href="/manual/vote-note.php?id=115506&amp;page=imagick.examples-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115506" title="82% like this...">
    36
    </div>
  </div>
  <a href="#115506" class="name">
  <strong class="user"><em>vokseli</em></strong></a><a class="genanchor" href="#115506"> &para;</a><div class="date" title="2014-08-06 07:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115506">
<div class="phpcode"><code><span class="html">Be careful when loading multiple images by passing an array to a new Imagick object. This is from Example #2:<br /><br /><span class="default">&lt;?php<br /><br />$images </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(</span><span class="default">glob</span><span class="keyword">(</span><span class="string">'images/*.JPG'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />If you have lots of images inside the images folder, PHP will consume a lot of memory, ergo it is not recommended. I personally think it's a better idea to loop each image separately:<br /><br /><span class="default">&lt;?php<br /><br />$image_files </span><span class="keyword">= </span><span class="default">glob</span><span class="keyword">(</span><span class="string">'images/*.JPG'</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$image_files </span><span class="keyword">as </span><span class="default">$image_file</span><span class="keyword">) {<br />    </span><span class="default">$image </span><span class="keyword">= new </span><span class="default">Imagick</span><span class="keyword">(</span><span class="default">$image_file</span><span class="keyword">);<br />    </span><span class="comment">// Do something for the image and so on...<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />This way only a single image is fitted into the memory at a time.</span></code></div>
  </div>
 </div>
  <div class="note" id="113872">  <div class="votes">
    <div id="Vu113872">
    <a href="/manual/vote-note.php?id=113872&amp;page=imagick.examples-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113872">
    <a href="/manual/vote-note.php?id=113872&amp;page=imagick.examples-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113872" title="73% like this...">
    18
    </div>
  </div>
  <a href="#113872" class="name">
  <strong class="user"><em>inoshadi at gmail dot com</em></strong></a><a class="genanchor" href="#113872"> &para;</a><div class="date" title="2013-12-11 07:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113872">
<div class="phpcode"><code><span class="html">on Example #3 Creating a reflection of an image<br />----------------------------------------------------<br />/* Clone the image and flip it */<br />$reflection = $im-&gt;clone();<br />$reflection-&gt;flipImage();<br />----------------------------------------------------<br />it was using the Imagick::clone function<br /><br />This function has been DEPRECATED as of imagick 3.1.0 in favour of using the clone keyword.<br /><br />use below code instead:<br />----------------------------------------------------<br />/* Clone the image and flip it */<br />$reflection = clone $im;<br />$reflection-&gt;flipImage();<br />----------------------------------------------------<br /><br /><a href="http://php.net/manual/en/imagick.clone.php" rel="nofollow" target="_blank">http://php.net/manual/en/imagick.clone.php</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagick.examples-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.examples-1.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="imagick.examples.php">Examples</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="imagick.examples-1.php" title="Basic usage">Basic usage</a>
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
