<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecopyresampled - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecopyresampled.php">
 <link rel="shorturl" href="https://www.php.net/imagecopyresampled">
 <link rel="alternate" href="https://www.php.net/imagecopyresampled" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecopymergegray.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecopyresized.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecopyresampled.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecopyresampled.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecopyresampled.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecopyresampled.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecopyresampled.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecopyresampled.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecopyresampled.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecopyresampled.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecopyresampled.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecopyresampled.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecopyresampled.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copy and resize part of an image with resampling" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecopyresampled - Manual" />
<meta name="twitter:description" content="Copy and resize part of an image with resampling" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecopyresampled - Manual" />
<meta itemprop="description" content="Copy and resize part of an image with resampling" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copy and resize part of an image with resampling" />

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
        <a href="function.imagecopyresized.php">
          imagecopyresized &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecopymergegray.php">
          &laquo; imagecopymergegray        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      <li><a href='ref.image.php'>GD and Image Functions</a></li>      </ul>
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
            <option value='en/function.imagecopyresampled.php' selected="selected">English</option>
            <option value='de/function.imagecopyresampled.php'>German</option>
            <option value='es/function.imagecopyresampled.php'>Spanish</option>
            <option value='fr/function.imagecopyresampled.php'>French</option>
            <option value='it/function.imagecopyresampled.php'>Italian</option>
            <option value='ja/function.imagecopyresampled.php'>Japanese</option>
            <option value='pt_BR/function.imagecopyresampled.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecopyresampled.php'>Russian</option>
            <option value='tr/function.imagecopyresampled.php'>Turkish</option>
            <option value='uk/function.imagecopyresampled.php'>Ukrainian</option>
            <option value='zh/function.imagecopyresampled.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecopyresampled" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecopyresampled</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecopyresampled</span> &mdash; <span class="dc-title">Copy and resize part of an image with resampling</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecopyresampled-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecopyresampled</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$dst_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$src_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_height</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecopyresampled()</strong></span> copies a rectangular
   portion of one image to another image, smoothly interpolating pixel
   values so that, in particular, reducing the size of an image still
   retains a great deal of clarity.
  </p>
  <p class="para">
   In other words, <span class="function"><strong>imagecopyresampled()</strong></span> will take a 
   rectangular area from <code class="parameter">src_image</code> of width 
   <code class="parameter">src_width</code> and height <code class="parameter">src_height</code> at 
   position (<code class="parameter">src_x</code>,<code class="parameter">src_y</code>) 
   and place it in a rectangular area of <code class="parameter">dst_image</code> 
   of width <code class="parameter">dst_width</code> and height <code class="parameter">dst_height</code>
   at position (<code class="parameter">dst_x</code>,<code class="parameter">dst_y</code>).
  </p>
  <p class="para">
   If the source and destination coordinates and width and heights
   differ, appropriate stretching or shrinking of the image fragment
   will be performed. The coordinates refer to the upper left
   corner.  This function can be used to copy regions within the
   same image (if <code class="parameter">dst_image</code> is the same as
   <code class="parameter">src_image</code>) but if the regions overlap the
   results will be unpredictable.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecopyresampled-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dst_image</code></dt>
     <dd>
      <p class="para">Destination image resource.</p>
     </dd>
    
    
     <dt><code class="parameter">src_image</code></dt>
     <dd>
      <p class="para">Source image resource.</p>
     </dd>
    
    
     <dt><code class="parameter">dst_x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of destination point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">dst_y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of destination point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">src_x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of source point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">src_y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of source point.
      </p>
     </dd>
    
    
     <dt><code class="parameter">dst_width</code></dt>
     <dd>
      <p class="para">
       Destination width.
      </p>
     </dd>
    
    
     <dt><code class="parameter">dst_height</code></dt>
     <dd>
      <p class="para">
       Destination height.
      </p>
     </dd>
    
    
     <dt><code class="parameter">src_width</code></dt>
     <dd>
      <p class="para">Source width.</p>
     </dd>
    
    
     <dt><code class="parameter">src_height</code></dt>
     <dd>
      <p class="para">Source height.</p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecopyresampled-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecopyresampled-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">dst_image</code> and <code class="parameter">src_image</code> expect
       <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> instances now; previously, <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s
       were expected.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagecopyresampled-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2860">
    <p><strong>Example #1 Simple example</strong></p>
    <div class="example-contents"><p>
     This example will resample an image to half its original size.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The file<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'test.jpg'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$percent </span><span style="color: #007700">= </span><span style="color: #0000BB">0.5</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Content type<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get new dimensions<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">) = </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$new_width </span><span style="color: #007700">= </span><span style="color: #0000BB">$width </span><span style="color: #007700">* </span><span style="color: #0000BB">$percent</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$new_height </span><span style="color: #007700">= </span><span style="color: #0000BB">$height </span><span style="color: #007700">* </span><span style="color: #0000BB">$percent</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Resample<br /></span><span style="color: #0000BB">$image_p </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$new_width</span><span style="color: #007700">, </span><span style="color: #0000BB">$new_height</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$image </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromjpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagecopyresampled</span><span style="color: #007700">(</span><span style="color: #0000BB">$image_p</span><span style="color: #007700">, </span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$new_width</span><span style="color: #007700">, </span><span style="color: #0000BB">$new_height</span><span style="color: #007700">, </span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$image_p</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecopyresampled.jpg" alt="Output of example : Simple example" width="47" height="25" />
     </div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2861">
    <p><strong>Example #2 Resampling an image proportionally</strong></p>
    <div class="example-contents"><p>
     This example will display an image with the maximum width,
     or height, of 200 pixels.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The file<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'test.jpg'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Set a maximum height and width<br /></span><span style="color: #0000BB">$width </span><span style="color: #007700">= </span><span style="color: #0000BB">200</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$height </span><span style="color: #007700">= </span><span style="color: #0000BB">200</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Content type<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get new dimensions<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$width_orig</span><span style="color: #007700">, </span><span style="color: #0000BB">$height_orig</span><span style="color: #007700">) = </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$ratio_orig </span><span style="color: #007700">= </span><span style="color: #0000BB">$width_orig</span><span style="color: #007700">/</span><span style="color: #0000BB">$height_orig</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$width</span><span style="color: #007700">/</span><span style="color: #0000BB">$height </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$ratio_orig</span><span style="color: #007700">) {<br />   </span><span style="color: #0000BB">$width </span><span style="color: #007700">= </span><span style="color: #0000BB">$height</span><span style="color: #007700">*</span><span style="color: #0000BB">$ratio_orig</span><span style="color: #007700">;<br />} else {<br />   </span><span style="color: #0000BB">$height </span><span style="color: #007700">= </span><span style="color: #0000BB">$width</span><span style="color: #007700">/</span><span style="color: #0000BB">$ratio_orig</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Resample<br /></span><span style="color: #0000BB">$image_p </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$image </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromjpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagecopyresampled</span><span style="color: #007700">(</span><span style="color: #0000BB">$image_p</span><span style="color: #007700">, </span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, </span><span style="color: #0000BB">$width_orig</span><span style="color: #007700">, </span><span style="color: #0000BB">$height_orig</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$image_p</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecopyresampled_2.jpg" alt="Output of example : Resampling an image proportionally" width="200" height="107" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagecopyresampled-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    There is a problem due to palette image limitations (255+1 colors).
    Resampling or filtering an image commonly needs more colors than 255, a
    kind of approximation is used to calculate the new resampled pixel and its
    color.  With a palette image we try to allocate a new color, if that
    failed, we choose the closest (in theory) computed color.  This is
    not always the closest visual color. That may produce a weird result, like
    blank (or visually blank) images.  To skip this problem, please use a
    truecolor image as a destination image, such as one created by
    <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imagecopyresampled-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecopyresized.php" class="function" rel="rdfs-seeAlso">imagecopyresized()</a> - Copy and resize part of an image</span></li>
   <li><span class="function"><a href="function.imagescale.php" class="function" rel="rdfs-seeAlso">imagescale()</a> - Scale an image using the given new width and height</span></li>
   <li><span class="function"><a href="function.imagecrop.php" class="function" rel="rdfs-seeAlso">imagecrop()</a> - Crop an image to the given rectangle</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecopyresampled.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecopyresampled%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecopyresampled&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopyresampled.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">37 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112742">  <div class="votes">
    <div id="Vu112742">
    <a href="/manual/vote-note.php?id=112742&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112742">
    <a href="/manual/vote-note.php?id=112742&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112742" title="73% like this...">
    203
    </div>
  </div>
  <a href="#112742" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#112742"> &para;</a><div class="date" title="2013-07-18 07:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112742">
<div class="phpcode"><code><span class="html">FOUR RECTANGLES<br /><br />                  $src_image                                   $dst_image<br />+------------+---------------------------------+   +------------+--------------------+<br />|            |                                 |   |            |                    |<br />|            |                                 |   |         $dst_y                  |<br />|            |                                 |   |            |                    |<br />|         $src_y                               |   +-- $dst_x --+----$dst_width----+ |<br />|            |                                 |   |            |                  | |<br />|            |                                 |   |            |    Resampled     | |<br />|            |                                 |   |            |                  | |<br />+-- $src_x --+------ $src_width ------+        |   |       $dst_height             | |<br />|            |                        |        |   |            |                  | |<br />|            |                        |        |   |            |                  | |<br />|            |                        |        |   |            |                  | |<br />|            |                        |        |   |            +------------------+ |<br />|            |        Sample          |        |   |                                 |<br />|            |                        |        |   |                                 |<br />|            |                        |        |   |                                 |<br />|       $src_height                   |        |   |                                 |<br />|            |                        |        |   +---------------------------------+<br />|            |                        |        |<br />|            |                        |        |<br />|            +------------------------+        |<br />|                                              |<br />|                                              |<br />+----------------------------------------------+</span></code></div>
  </div>
 </div>
  <div class="note" id="104028">  <div class="votes">
    <div id="Vu104028">
    <a href="/manual/vote-note.php?id=104028&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104028">
    <a href="/manual/vote-note.php?id=104028&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104028" title="73% like this...">
    79
    </div>
  </div>
  <a href="#104028" class="name">
  <strong class="user"><em>promaty at gmail dot com</em></strong></a><a class="genanchor" href="#104028"> &para;</a><div class="date" title="2011-05-18 05:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104028">
<div class="phpcode"><code><span class="html">Here is my ultimate image resizer that preserves transparency for gif's and png's and has an option to crop images to fixed dimensions (preserves image proportions by default)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">image_resize</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$crop</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">){<br /><br />  if(!list(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">)) return </span><span class="string">"Unsupported picture type!"</span><span class="keyword">;<br /><br />  </span><span class="default">$type </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">));<br />  if(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">'jpeg'</span><span class="keyword">) </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'jpg'</span><span class="keyword">;<br />  switch(</span><span class="default">$type</span><span class="keyword">){<br />    case </span><span class="string">'bmp'</span><span class="keyword">: </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefromwbmp</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); break;<br />    case </span><span class="string">'gif'</span><span class="keyword">: </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); break;<br />    case </span><span class="string">'jpg'</span><span class="keyword">: </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); break;<br />    case </span><span class="string">'png'</span><span class="keyword">: </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); break;<br />    default : return </span><span class="string">"Unsupported picture type!"</span><span class="keyword">;<br />  }<br /><br />  </span><span class="comment">// resize<br />  </span><span class="keyword">if(</span><span class="default">$crop</span><span class="keyword">){<br />    if(</span><span class="default">$w </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">or </span><span class="default">$h </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">) return </span><span class="string">"Picture is too small!"</span><span class="keyword">;<br />    </span><span class="default">$ratio </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">;<br />    </span><span class="default">$x </span><span class="keyword">= (</span><span class="default">$w </span><span class="keyword">- </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">;<br />  }<br />  else{<br />    if(</span><span class="default">$w </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">and </span><span class="default">$h </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">) return </span><span class="string">"Picture is too small!"</span><span class="keyword">;<br />    </span><span class="default">$ratio </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$w </span><span class="keyword">* </span><span class="default">$ratio</span><span class="keyword">;<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$h </span><span class="keyword">* </span><span class="default">$ratio</span><span class="keyword">;<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  }<br /><br />  </span><span class="default">$new </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br />  </span><span class="comment">// preserve transparency<br />  </span><span class="keyword">if(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"gif" </span><span class="keyword">or </span><span class="default">$type </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">){<br />    </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  }<br /><br />  </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br /><br />  switch(</span><span class="default">$type</span><span class="keyword">){<br />    case </span><span class="string">'bmp'</span><span class="keyword">: </span><span class="default">imagewbmp</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">); break;<br />    case </span><span class="string">'gif'</span><span class="keyword">: </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">); break;<br />    case </span><span class="string">'jpg'</span><span class="keyword">: </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">); break;<br />    case </span><span class="string">'png'</span><span class="keyword">: </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">); break;<br />  }<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example that I use when uploading new images to the server.<br /><br />This saves the original picture in the form:<br />original.type<br /><br />and creates a new thumbnail:<br />100x100.type<br /><br /><span class="default">&lt;?php<br />  $pic_type </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$picture</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">],</span><span class="string">"."</span><span class="keyword">));<br />  </span><span class="default">$pic_name </span><span class="keyword">= </span><span class="string">"original</span><span class="default">$pic_type</span><span class="string">"</span><span class="keyword">;<br />  </span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$picture</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">], </span><span class="default">$pic_name</span><span class="keyword">);<br />  if (</span><span class="default">true </span><span class="keyword">!== (</span><span class="default">$pic_error </span><span class="keyword">= @</span><span class="default">image_resize</span><span class="keyword">(</span><span class="default">$pic_name</span><span class="keyword">, </span><span class="string">"100x100</span><span class="default">$pic_type</span><span class="string">"</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">))) {<br />    echo </span><span class="default">$pic_error</span><span class="keyword">;<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$pic_name</span><span class="keyword">);<br />  }<br />  else echo </span><span class="string">"OK!"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="85929">  <div class="votes">
    <div id="Vu85929">
    <a href="/manual/vote-note.php?id=85929&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85929">
    <a href="/manual/vote-note.php?id=85929&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85929" title="69% like this...">
    15
    </div>
  </div>
  <a href="#85929" class="name">
  <strong class="user"><em>zorroswordsman at gmail dot com</em></strong></a><a class="genanchor" href="#85929"> &para;</a><div class="date" title="2008-09-24 07:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85929">
<div class="phpcode"><code><span class="html">I've created a PHP5 image resize class, using ImageCopyResampled, that someone might find useful, with support for JPEG, PNG, and GIF formats. It retains the original image's aspect ratio when resizing, and doesn't resize or resample if the original width and height is smaller then the desired resize.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Imaging<br /></span><span class="keyword">class </span><span class="default">imaging<br /></span><span class="keyword">{<br /><br />    </span><span class="comment">// Variables<br />    </span><span class="keyword">private </span><span class="default">$img_input</span><span class="keyword">;<br />    private </span><span class="default">$img_output</span><span class="keyword">;<br />    private </span><span class="default">$img_src</span><span class="keyword">;<br />    private </span><span class="default">$format</span><span class="keyword">;<br />    private </span><span class="default">$quality </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br />    private </span><span class="default">$x_input</span><span class="keyword">;<br />    private </span><span class="default">$y_input</span><span class="keyword">;<br />    private </span><span class="default">$x_output</span><span class="keyword">;<br />    private </span><span class="default">$y_output</span><span class="keyword">;<br />    private </span><span class="default">$resize</span><span class="keyword">;<br /><br />    </span><span class="comment">// Set image<br />    </span><span class="keyword">public function </span><span class="default">set_img</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)<br />    {<br /><br />        </span><span class="comment">// Find format<br />        </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));<br /><br />        </span><span class="comment">// JPEG image<br />        </span><span class="keyword">if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"JPG" </span><span class="keyword">OR </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"JPEG"</span><span class="keyword">))<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;<br />            <br /><br />        }<br /><br />        </span><span class="comment">// PNG image<br />        </span><span class="keyword">elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"PNG"</span><span class="keyword">)<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromPNG</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;<br /><br />        }<br /><br />        </span><span class="comment">// GIF image<br />        </span><span class="keyword">elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"GIF"</span><span class="keyword">)<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromGIF</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;<br /><br />        }<br /><br />        </span><span class="comment">// Get dimensions<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);<br /><br />    }<br /><br />    </span><span class="comment">// Set maximum image size (pixels)<br />    </span><span class="keyword">public function </span><span class="default">set_size</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)<br />    {<br /><br />        </span><span class="comment">// Resize<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt; </span><span class="default">$size </span><span class="keyword">&amp;&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">&gt; </span><span class="default">$size</span><span class="keyword">)<br />        {<br /><br />            </span><span class="comment">// Wide<br />            </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">)<br />            {<br /><br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;<br /><br />            }<br /><br />            </span><span class="comment">// Tall<br />            </span><span class="keyword">else<br />            {<br /><br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;<br /><br />            }<br /><br />            </span><span class="comment">// Ready<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br /><br />        }<br /><br />        </span><span class="comment">// Don't resize<br />        </span><span class="keyword">else { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">; }<br /><br />    }<br /><br />    </span><span class="comment">// Set image quality (JPEG only)<br />    </span><span class="keyword">public function </span><span class="default">set_quality</span><span class="keyword">(</span><span class="default">$quality</span><span class="keyword">)<br />    {<br /><br />        if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$quality</span><span class="keyword">))<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">quality </span><span class="keyword">= </span><span class="default">$quality</span><span class="keyword">;<br /><br />        }<br /><br />    }<br /><br />    </span><span class="comment">// Save image<br />    </span><span class="keyword">public function </span><span class="default">save_img</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />    {<br /><br />        </span><span class="comment">// Resize<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">)<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output</span><span class="keyword">);<br />            </span><span class="default">ImageCopyResampled</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">);<br /><br />        }<br /><br />        </span><span class="comment">// Save JPEG<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"JPG" </span><span class="keyword">OR </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"JPEG"</span><span class="keyword">)<br />        {<br /><br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imageJPEG</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">quality</span><span class="keyword">); }<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }<br /><br />        }<br /><br />        </span><span class="comment">// Save PNG<br />        </span><span class="keyword">elseif(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"PNG"</span><span class="keyword">)<br />        {<br /><br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }<br /><br />        }<br /><br />        </span><span class="comment">// Save GIF<br />        </span><span class="keyword">elseif(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"GIF"</span><span class="keyword">)<br />        {<br /><br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imageGIF</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }<br /><br />        }<br /><br />    }<br /><br />    </span><span class="comment">// Get width<br />    </span><span class="keyword">public function </span><span class="default">get_width</span><span class="keyword">()<br />    {<br /><br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;<br /><br />    }<br /><br />    </span><span class="comment">// Get height<br />    </span><span class="keyword">public function </span><span class="default">get_height</span><span class="keyword">()<br />    {<br /><br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;<br /><br />    }<br /><br />    </span><span class="comment">// Clear image cache<br />    </span><span class="keyword">public function </span><span class="default">clear_cache</span><span class="keyword">()<br />    {<br /><br />        @</span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);<br />        @</span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">);<br /><br />    }<br /><br />}<br /><br /></span><span class="comment">##### DEMO #####<br /><br />// Image<br /></span><span class="default">$src </span><span class="keyword">= </span><span class="string">"myimage.jpg"</span><span class="keyword">;<br /><br /></span><span class="comment">// Begin<br /></span><span class="default">$img </span><span class="keyword">= new </span><span class="default">imaging</span><span class="keyword">;<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_img</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_quality</span><span class="keyword">(</span><span class="default">80</span><span class="keyword">);<br /><br /></span><span class="comment">// Small thumbnail<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_size</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">save_img</span><span class="keyword">(</span><span class="string">"small_" </span><span class="keyword">. </span><span class="default">$src</span><span class="keyword">);<br /><br /></span><span class="comment">// Baby thumbnail<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_size</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">save_img</span><span class="keyword">(</span><span class="string">"baby_" </span><span class="keyword">. </span><span class="default">$src</span><span class="keyword">);<br /><br /></span><span class="comment">// Finalize<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">clear_cache</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81273">  <div class="votes">
    <div id="Vu81273">
    <a href="/manual/vote-note.php?id=81273&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81273">
    <a href="/manual/vote-note.php?id=81273&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81273" title="66% like this...">
    3
    </div>
  </div>
  <a href="#81273" class="name">
  <strong class="user"><em>wm at violet dot bg</em></strong></a><a class="genanchor" href="#81273"> &para;</a><div class="date" title="2008-02-20 01:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81273">
<div class="phpcode"><code><span class="html">This is a fixed version of ImageCopyResampledBicubic posted by liviu.malaescu<br />The original version wasn't respecting src_x &amp; src_y args<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ImageCopyResampledBicubic</span><span class="keyword">(&amp;</span><span class="default">$dst_image</span><span class="keyword">, &amp;</span><span class="default">$src_image</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">)  {<br />        </span><span class="comment">// we should first cut the piece we are interested in from the source<br />        </span><span class="default">$src_img </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$src_image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);<br /><br />        </span><span class="comment">// this one is used as temporary image<br />        </span><span class="default">$dst_img </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">);<br /><br />        </span><span class="default">ImagePaletteCopy</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$src_img</span><span class="keyword">);<br />        </span><span class="default">$rX </span><span class="keyword">= </span><span class="default">$src_w </span><span class="keyword">/ </span><span class="default">$dst_w</span><span class="keyword">;<br />        </span><span class="default">$rY </span><span class="keyword">= </span><span class="default">$src_h </span><span class="keyword">/ </span><span class="default">$dst_h</span><span class="keyword">;<br />        </span><span class="default">$w </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$dst_h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++)  {<br />            </span><span class="default">$ow </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$w </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$y </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) * </span><span class="default">$rY</span><span class="keyword">);<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$dst_w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)  {<br />                </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$g </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                </span><span class="default">$ot </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">; </span><span class="default">$t </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$x </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) * </span><span class="default">$rX</span><span class="keyword">);<br />                for (</span><span class="default">$u </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$u </span><span class="keyword">&lt; (</span><span class="default">$w </span><span class="keyword">- </span><span class="default">$ow</span><span class="keyword">); </span><span class="default">$u</span><span class="keyword">++)  {<br />                    for (</span><span class="default">$p </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$p </span><span class="keyword">&lt; (</span><span class="default">$t </span><span class="keyword">- </span><span class="default">$ot</span><span class="keyword">); </span><span class="default">$p</span><span class="keyword">++)  {<br />                        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">ImageColorsForIndex</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">ImageColorAt</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$ot </span><span class="keyword">+ </span><span class="default">$p</span><span class="keyword">, </span><span class="default">$ow </span><span class="keyword">+ </span><span class="default">$u</span><span class="keyword">));<br />                        </span><span class="default">$r </span><span class="keyword">+= </span><span class="default">$c</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">];<br />                        </span><span class="default">$g </span><span class="keyword">+= </span><span class="default">$c</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">];<br />                        </span><span class="default">$b </span><span class="keyword">+= </span><span class="default">$c</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">];<br />                        </span><span class="default">$a</span><span class="keyword">++;<br />                    }<br />                }<br />                </span><span class="default">ImageSetPixel</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">ImageColorClosest</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$r </span><span class="keyword">/ </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$g </span><span class="keyword">/ </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">/ </span><span class="default">$a</span><span class="keyword">));<br />            }<br />        }<br /><br />        </span><span class="comment">// apply the temp image over the returned image and use the destination x,y coordinates<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dst_image</span><span class="keyword">, </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">);<br /><br />        </span><span class="comment">// we should return true since ImageCopyResampled/ImageCopyResized do it<br />        </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83292">  <div class="votes">
    <div id="Vu83292">
    <a href="/manual/vote-note.php?id=83292&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83292">
    <a href="/manual/vote-note.php?id=83292&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83292" title="66% like this...">
    1
    </div>
  </div>
  <a href="#83292" class="name">
  <strong class="user"><em>mattura gmail com</em></strong></a><a class="genanchor" href="#83292"> &para;</a><div class="date" title="2008-05-19 10:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83292">
<div class="phpcode"><code><span class="html">Here's a little function I wrote to resize images to a maximum dimension - based on what facebook does in the galleries. You put in a source, destination and a maximum dimension in pixels (eg 300), and for example if the image is long and thin, the longest edge will be 300px, yet the image retains proportions. A square image will become 300x300, a 6x4 (landscape) will become 300x200, a 4x6 (portrait) - 200x300 etc.<br />It works on jpg images, but other formats can easily be added.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">createThumb</span><span class="keyword">(</span><span class="default">$spath</span><span class="keyword">, </span><span class="default">$dpath</span><span class="keyword">, </span><span class="default">$maxd</span><span class="keyword">) {<br /> </span><span class="default">$src</span><span class="keyword">=@</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$spath</span><span class="keyword">);<br /> if (!</span><span class="default">$src</span><span class="keyword">) {return </span><span class="default">false</span><span class="keyword">;} else {<br />  </span><span class="default">$srcw</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />  </span><span class="default">$srch</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />  if (</span><span class="default">$srcw</span><span class="keyword">&lt;</span><span class="default">$srch</span><span class="keyword">) {</span><span class="default">$height</span><span class="keyword">=</span><span class="default">$maxd</span><span class="keyword">;</span><span class="default">$width</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$srcw</span><span class="keyword">*</span><span class="default">$height</span><span class="keyword">/</span><span class="default">$srch</span><span class="keyword">);}<br />  else {</span><span class="default">$width</span><span class="keyword">=</span><span class="default">$maxd</span><span class="keyword">;</span><span class="default">$height</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$srch</span><span class="keyword">*</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$srcw</span><span class="keyword">);}<br />  if (</span><span class="default">$width</span><span class="keyword">&gt;</span><span class="default">$srcw </span><span class="keyword">&amp;&amp; </span><span class="default">$height</span><span class="keyword">&gt;</span><span class="default">$srch</span><span class="keyword">) {</span><span class="default">$width</span><span class="keyword">=</span><span class="default">$srcw</span><span class="keyword">;</span><span class="default">$height</span><span class="keyword">=</span><span class="default">$srch</span><span class="keyword">;}  </span><span class="comment">//if image is actually smaller than you want, leave small (remove this line to resize anyway)<br />  </span><span class="default">$thumb</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />  if (</span><span class="default">$height</span><span class="keyword">&lt;</span><span class="default">100</span><span class="keyword">) {</span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));}<br />  else {</span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));}<br />  </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$dpath</span><span class="keyword">);<br />  return </span><span class="default">true</span><span class="keyword">;<br /> }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79119">  <div class="votes">
    <div id="Vu79119">
    <a href="/manual/vote-note.php?id=79119&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79119">
    <a href="/manual/vote-note.php?id=79119&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79119" title="66% like this...">
    1
    </div>
  </div>
  <a href="#79119" class="name">
  <strong class="user"><em>Dave McCourt</em></strong></a><a class="genanchor" href="#79119"> &para;</a><div class="date" title="2007-11-12 05:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79119">
<div class="phpcode"><code><span class="html">This function is taken from lots of web sources so thanks to all for posting. It creates square or landscape thumbnails from .jpgs  from either portait or landscape original images. I decide in advance which way I want the thumbs to display for consistency. I usually sharpen the images as well post-upload, to save on server resources. I can post this code if anyone wants it. I hope this helps someone...<br /><br />    # create thumbnails from jpgs<br />    # usage:<br />    # create_jpgthumb(uploaded file, final file (with path), thumb height, thumb width, jpg quality, scale thumb (true) or fixed size (false); <br />    function create_jpgthumb($original, $thumbnail, $max_width, $max_height, $quality, $scale = true) {<br />        <br />        list ($src_width, $src_height, $type, $w) = getimagesize($original);<br />        <br />        if (!$srcImage = @imagecreatefromjpeg($original)) {<br />            return false;<br />        }<br /><br />        # image resizes to natural height and width<br />        if ($scale == true) {<br />                        <br />            if ($src_width &gt; $src_height ) {<br />                $thumb_width = $max_width;<br />                $thumb_height = floor($src_height * ($max_width / $src_width));<br />            } else if ($src_width &lt; $src_height ) {<br />                $thumb_height = $max_height;<br />                $thumb_width = floor($src_width * ($max_height / $src_height));<br />            } else {<br />                $thumb_width = $max_height;<br />                $thumb_height = $max_height;<br />            }<br /><br />            if (!@$destImage = imagecreatetruecolor($thumb_width, $thumb_height)) {<br />                return false;<br />            }<br />            <br />            if (!@imagecopyresampled($destImage, $srcImage, 0, 0, 0, 0, $thumb_width, $thumb_height, $src_width, $src_height)) {<br />                return false;<br />            }<br />                        <br />        # image is fixed to supplied width and height and cropped<br />        } else if ($scale == false) {<br />        <br />            $ratio = $max_width / $max_height;<br />                <br />            # thumbnail is landscape<br />             if ($ratio &gt; 1) {<br />             <br />                # uploaded pic is landscape<br />                if ($src_width &gt; $src_height) {<br /><br />                    $thumb_width = $max_width;<br />                    $thumb_height = ceil($max_width * ($src_height / $src_width));<br />                    <br />                    if ($thumb_height &gt; $max_width) {<br />                        $thumb_height = $max_width;<br />                        $thumb_width = ceil($max_width * ($src_width / $src_height));<br />                    }<br /><br />                # uploaded pic is portrait<br />                } else {<br />                <br />                    $thumb_height = $max_width;<br />                    $thumb_width = ceil($max_width * ($src_height / $src_width));<br />                    <br />                    if ($thumb_width &gt; $max_width) {<br />                        $thumb_width = $max_width;<br />                        $thumb_height = ceil($max_width * ($src_height / $src_width));<br />                    }<br />                    <br />                    $off_h = ($src_height - $src_width) / 2;<br />            <br />                }<br />    <br />                if (!@$destImage = imagecreatetruecolor($max_width, $max_height)) {<br />                    return false;<br />                }<br />        <br />                if (!@imagecopyresampled($destImage, $srcImage, 0, 0, 0, $off_h, $thumb_width, $thumb_height, $src_width, $src_height)) {<br />                    return false;<br />                }<br /><br />            # thumbnail is square<br />             } else {<br />             <br />                if ($src_width &gt; $src_height) {<br />                    $off_w = ($src_width - $src_height) / 2;<br />                    $off_h = 0;<br />                    $src_width = $src_height;<br />                } else if ($src_height &gt; $src_width) {<br />                    $off_w = 0;<br />                    $off_h = ($src_height - $src_width) / 2;<br />                    $src_height = $src_width;<br />                } else {<br />                    $off_w = 0;<br />                    $off_h = 0;<br />                }<br /><br />                if (!@$destImage = imagecreatetruecolor($max_width, $max_height)) {<br />                    return false;<br />                }<br />        <br />                if (!@imagecopyresampled($destImage, $srcImage, 0, 0, $off_w, $off_h, $max_width, $max_height, $src_width, $src_height)) {<br />                    return false;<br />                }<br /><br />             }<br />         <br />                            <br />        }<br />        <br />        @imagedestroy($srcImage);<br /><br />        if (!@imageantialias($destImage, true)) {<br />            return false;<br />        }<br />        <br />        if (!@imagejpeg($destImage, $thumbnail, $quality)) {<br />            return false;<br />        }<br />                        <br />        @imagedestroy($destImage);<br />        <br />        return true;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="114602">  <div class="votes">
    <div id="Vu114602">
    <a href="/manual/vote-note.php?id=114602&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114602">
    <a href="/manual/vote-note.php?id=114602&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114602" title="63% like this...">
    3
    </div>
  </div>
  <a href="#114602" class="name">
  <strong class="user"><em>kazuya</em></strong></a><a class="genanchor" href="#114602"> &para;</a><div class="date" title="2014-03-11 02:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114602">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />$new_file </span><span class="keyword">= </span><span class="default">img_resize</span><span class="keyword">(</span><span class="string">"./img/"</span><span class="keyword">, </span><span class="string">"test.jpg"</span><span class="keyword">,</span><span class="string">"copy_test.jpg"</span><span class="keyword">,</span><span class="default">300</span><span class="keyword">);<br />echo </span><span class="string">"&lt;IMG src = '</span><span class="default">$new_file</span><span class="string">'&gt;"</span><span class="keyword">;<br /><br />function </span><span class="default">img_resize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$tmp_name</span><span class="keyword">,</span><span class="default">$new_name</span><span class="keyword">,</span><span class="default">$new_width</span><span class="keyword">){<br />    if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">)){<br />        echo </span><span class="string">"file not found!"</span><span class="keyword">;<br />        exit;<br />    }<br />    if (!</span><span class="default">is_writable</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)){<br />        echo </span><span class="string">"error:permission denied!"</span><span class="keyword">;<br />        exit;<br />    }<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$tmp_name</span><span class="keyword">);<br />    </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$new_width </span><span class="keyword">* </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$width</span><span class="keyword">); <br />    </span><span class="default">$image_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">);<br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="default">$tmp_name</span><span class="keyword">); <br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,<br />                        </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">); <br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$path </span><span class="keyword">. </span><span class="default">$new_name</span><span class="keyword">); <br />    return </span><span class="default">$path</span><span class="keyword">.</span><span class="default">$new_name</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54448">  <div class="votes">
    <div id="Vu54448">
    <a href="/manual/vote-note.php?id=54448&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54448">
    <a href="/manual/vote-note.php?id=54448&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54448" title="64% like this...">
    5
    </div>
  </div>
  <a href="#54448" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#54448"> &para;</a><div class="date" title="2005-07-04 05:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54448">
<div class="phpcode"><code><span class="html">It should be noted that the imagecopyresampled() function is much more blurry than Photoshop CS's default bicubic funtion. And looks similar to a blury version of Photoshop's bilinear function. The documentation fails to note which algorithm is used in resampling.</span></code></div>
  </div>
 </div>
  <div class="note" id="81898">  <div class="votes">
    <div id="Vu81898">
    <a href="/manual/vote-note.php?id=81898&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81898">
    <a href="/manual/vote-note.php?id=81898&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81898" title="63% like this...">
    3
    </div>
  </div>
  <a href="#81898" class="name">
  <strong class="user"><em>bobbyboyojones at hotmail dot com</em></strong></a><a class="genanchor" href="#81898"> &para;</a><div class="date" title="2008-03-18 11:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81898">
<div class="phpcode"><code><span class="html">I hated that enlarging an image resulted in giant pixels rather than a smoother look, so I wrote this function.  It takes longer, but gives a much nicer look.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagecopyresampledSMOOTH</span><span class="keyword">(&amp;</span><span class="default">$dst_img</span><span class="keyword">, &amp;</span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$mult</span><span class="keyword">=</span><span class="default">1.25</span><span class="keyword">){<br />    </span><span class="comment">// don't use a $mult that's too close to an int or this function won't make much of a difference<br /><br />    </span><span class="default">$tgt_w </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$src_w </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">);<br />    </span><span class="default">$tgt_h </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$src_h </span><span class="keyword">* </span><span class="default">$mult</span><span class="keyword">);<br />    <br />    </span><span class="comment">// using $mult &lt;= 1 will make the current step w/h smaller (or the same), don't allow this, always resize by at least 1 pixel larger<br />    </span><span class="keyword">if(</span><span class="default">$tgt_w </span><span class="keyword">&lt;= </span><span class="default">$src_w</span><span class="keyword">){ </span><span class="default">$tgt_w </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">; }<br />    if(</span><span class="default">$tgt_h </span><span class="keyword">&lt;= </span><span class="default">$src_h</span><span class="keyword">){ </span><span class="default">$tgt_h </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">; }<br />    <br />    </span><span class="comment">// if the current step w/h is larger than the final height, adjust it back to the final size<br />    // this check also makes it so that if we are doing a resize to smaller image, it happens in one step (since that's already smooth)<br />    </span><span class="keyword">if(</span><span class="default">$tgt_w </span><span class="keyword">&gt; </span><span class="default">$dst_w</span><span class="keyword">){ </span><span class="default">$tgt_w </span><span class="keyword">= </span><span class="default">$dst_w</span><span class="keyword">; }<br />    if(</span><span class="default">$tgt_h </span><span class="keyword">&gt; </span><span class="default">$dst_h</span><span class="keyword">){ </span><span class="default">$tgt_h </span><span class="keyword">= </span><span class="default">$dst_h</span><span class="keyword">; }<br /><br />    </span><span class="default">$tmpImg </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$tgt_w</span><span class="keyword">, </span><span class="default">$tgt_h</span><span class="keyword">);<br /><br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$tmpImg</span><span class="keyword">, </span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$tgt_w</span><span class="keyword">, </span><span class="default">$tgt_h</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$tmpImg</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tgt_w</span><span class="keyword">, </span><span class="default">$tgt_h</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$tmpImg</span><span class="keyword">);<br /><br />    </span><span class="comment">// as long as the final w/h has not been reached, reep on resizing<br />    </span><span class="keyword">if(</span><span class="default">$tgt_w </span><span class="keyword">&lt; </span><span class="default">$dst_w </span><span class="keyword">OR </span><span class="default">$tgt_h </span><span class="keyword">&lt; </span><span class="default">$dst_h</span><span class="keyword">){<br />        </span><span class="default">imagecopyresampledSMOOTH</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">, </span><span class="default">$tgt_w</span><span class="keyword">, </span><span class="default">$tgt_h</span><span class="keyword">, </span><span class="default">$mult</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90544">  <div class="votes">
    <div id="Vu90544">
    <a href="/manual/vote-note.php?id=90544&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90544">
    <a href="/manual/vote-note.php?id=90544&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90544" title="61% like this...">
    3
    </div>
  </div>
  <a href="#90544" class="name">
  <strong class="user"><em>z3n666 at gmail dot com</em></strong></a><a class="genanchor" href="#90544"> &para;</a><div class="date" title="2009-04-27 11:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90544">
<div class="phpcode"><code><span class="html">I was looking around and couldn't find a function that resizes images to any ratio without leaving a blank area, so i wrote this one. It's able to resize images to any size ratio, when the ratio is no match with the original it will crop proportional area on the original and resize it.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">_ckdir</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">) {
<br />    if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {
<br />        </span><span class="default">$p</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">));
<br />        if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">)) {
<br />            </span><span class="default">_o</span><span class="keyword">(</span><span class="string">"Mkdir: "</span><span class="keyword">.</span><span class="default">$p</span><span class="keyword">);
<br />            </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">,</span><span class="default">777</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br />function </span><span class="default">img_resizer</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$quality</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$saveas</span><span class="keyword">) {
<br />    </span><span class="comment">/* v2.5 with auto crop */
<br />    </span><span class="default">$r</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$e</span><span class="keyword">=</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">));
<br />    if ((</span><span class="default">$e </span><span class="keyword">== </span><span class="string">"jpg"</span><span class="keyword">) || (</span><span class="default">$e </span><span class="keyword">== </span><span class="string">"peg"</span><span class="keyword">)) {
<br />        </span><span class="default">$OldImage</span><span class="keyword">=</span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">) or </span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    } elseif (</span><span class="default">$e </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">) {
<br />        </span><span class="default">$OldImage</span><span class="keyword">=</span><span class="default">ImageCreateFromGif</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">) or </span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    } elseif (</span><span class="default">$e </span><span class="keyword">== </span><span class="string">"bmp"</span><span class="keyword">) {
<br />        </span><span class="default">$OldImage</span><span class="keyword">=</span><span class="default">ImageCreateFromwbmp</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">) or </span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    } elseif (</span><span class="default">$e </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">) {
<br />        </span><span class="default">$OldImage</span><span class="keyword">=</span><span class="default">ImageCreateFromPng</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">) or </span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    } else {
<br />        </span><span class="default">_o</span><span class="keyword">(</span><span class="string">"Not a Valid Image! ("</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">.</span><span class="string">") -- "</span><span class="keyword">.</span><span class="default">$src</span><span class="keyword">);</span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    }
<br />    if (</span><span class="default">$r</span><span class="keyword">) {
<br />        list(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">)=</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);
<br />        </span><span class="comment">// check if ratios match
<br />        </span><span class="default">$_ratio</span><span class="keyword">=array(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">);
<br />        if (</span><span class="default">$_ratio</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="default">$_ratio</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) { </span><span class="comment">// crop image
<br />
<br />            // find the right scale to use
<br />            </span><span class="default">$_scale</span><span class="keyword">=</span><span class="default">min</span><span class="keyword">((float)(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">),(float)(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">));
<br />
<br />            </span><span class="comment">// coords to crop
<br />            </span><span class="default">$cropX</span><span class="keyword">=(float)(</span><span class="default">$width</span><span class="keyword">-(</span><span class="default">$_scale</span><span class="keyword">*</span><span class="default">$w</span><span class="keyword">));
<br />            </span><span class="default">$cropY</span><span class="keyword">=(float)(</span><span class="default">$height</span><span class="keyword">-(</span><span class="default">$_scale</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">));    
<br />            
<br />            </span><span class="comment">// cropped image size
<br />            </span><span class="default">$cropW</span><span class="keyword">=(float)(</span><span class="default">$width</span><span class="keyword">-</span><span class="default">$cropX</span><span class="keyword">);
<br />            </span><span class="default">$cropH</span><span class="keyword">=(float)(</span><span class="default">$height</span><span class="keyword">-</span><span class="default">$cropY</span><span class="keyword">);
<br />            
<br />            </span><span class="default">$crop</span><span class="keyword">=</span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$cropW</span><span class="keyword">,</span><span class="default">$cropH</span><span class="keyword">);
<br />            </span><span class="comment">// crop the middle part of the image to fit proportions
<br />            </span><span class="default">ImageCopy</span><span class="keyword">(
<br />                </span><span class="default">$crop</span><span class="keyword">,
<br />                </span><span class="default">$OldImage</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                (int)(</span><span class="default">$cropX</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">),
<br />                (int)(</span><span class="default">$cropY</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">),
<br />                </span><span class="default">$cropW</span><span class="keyword">,
<br />                </span><span class="default">$cropH
<br />            </span><span class="keyword">);
<br />        }
<br />        
<br />        </span><span class="comment">// do the thumbnail
<br />        </span><span class="default">$NewThumb</span><span class="keyword">=</span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">);
<br />        if (isset(</span><span class="default">$crop</span><span class="keyword">)) { </span><span class="comment">// been cropped
<br />            </span><span class="default">ImageCopyResampled</span><span class="keyword">(
<br />                </span><span class="default">$NewThumb</span><span class="keyword">,
<br />                </span><span class="default">$crop</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">$w</span><span class="keyword">,
<br />                </span><span class="default">$h</span><span class="keyword">,
<br />                </span><span class="default">$cropW</span><span class="keyword">,
<br />                </span><span class="default">$cropH
<br />            </span><span class="keyword">);
<br />            </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$crop</span><span class="keyword">);
<br />        } else { </span><span class="comment">// ratio match, regular resize
<br />            </span><span class="default">ImageCopyResampled</span><span class="keyword">(
<br />                </span><span class="default">$NewThumb</span><span class="keyword">,
<br />                </span><span class="default">$OldImage</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">0</span><span class="keyword">,
<br />                </span><span class="default">$w</span><span class="keyword">,
<br />                </span><span class="default">$h</span><span class="keyword">,
<br />                </span><span class="default">$width</span><span class="keyword">,
<br />                </span><span class="default">$height
<br />            </span><span class="keyword">);
<br />        }
<br />        </span><span class="default">_ckdir</span><span class="keyword">(</span><span class="default">$saveas</span><span class="keyword">);
<br />        </span><span class="default">ImageJpeg</span><span class="keyword">(</span><span class="default">$NewThumb</span><span class="keyword">,</span><span class="default">$saveas</span><span class="keyword">,</span><span class="default">$quality</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$NewThumb</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$OldImage</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$r</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90038">  <div class="votes">
    <div id="Vu90038">
    <a href="/manual/vote-note.php?id=90038&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90038">
    <a href="/manual/vote-note.php?id=90038&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90038" title="61% like this...">
    3
    </div>
  </div>
  <a href="#90038" class="name">
  <strong class="user"><em>satanas147 at gmail dot com</em></strong></a><a class="genanchor" href="#90038"> &para;</a><div class="date" title="2009-04-02 08:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90038">
<div class="phpcode"><code><span class="html">Another add-on to previous php5 class for thumbnail (with a merge of Matt and Zorro's proposals).
<br />This is dedicated to generate thumbnail on the fly for a webpage using the subclass thumbnail.
<br />It saves the generated thumb as myimage_tn, in the same directory.
<br />I'm quite new with php5, so I think this could be optimized, but it seems to work fine.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Imaging
<br /></span><span class="keyword">class </span><span class="default">imaging
<br /></span><span class="keyword">{
<br />    </span><span class="comment">// Variables
<br />    </span><span class="keyword">private </span><span class="default">$img_input</span><span class="keyword">;
<br />    private </span><span class="default">$img_output</span><span class="keyword">;
<br />    private </span><span class="default">$img_src</span><span class="keyword">;
<br />    private </span><span class="default">$format</span><span class="keyword">;
<br />    private </span><span class="default">$quality </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;
<br />    private </span><span class="default">$x_input</span><span class="keyword">;
<br />    private </span><span class="default">$y_input</span><span class="keyword">;
<br />    private </span><span class="default">$x_output</span><span class="keyword">;
<br />    private </span><span class="default">$y_output</span><span class="keyword">;
<br />    private </span><span class="default">$resize</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// Set image
<br />    </span><span class="keyword">public function </span><span class="default">set_img</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// Find format
<br />        </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">));
<br />        </span><span class="comment">// JPEG image
<br />        </span><span class="keyword">if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"JPG" </span><span class="keyword">OR </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"JPEG"</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">// PNG image
<br />        </span><span class="keyword">elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"PNG"</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromPNG</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">// GIF image
<br />        </span><span class="keyword">elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) &amp;&amp; </span><span class="default">$ext </span><span class="keyword">== </span><span class="string">"GIF"</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">= </span><span class="default">$ext</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input </span><span class="keyword">= </span><span class="default">ImageCreateFromGIF</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">// Get dimensions
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="comment">// Set maximum image size (pixels)
<br />    </span><span class="keyword">public function </span><span class="default">set_size</span><span class="keyword">(</span><span class="default">$max_x </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">,</span><span class="default">$max_y </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// Resize
<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt; </span><span class="default">$max_x </span><span class="keyword">|| </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">&gt; </span><span class="default">$max_y</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$a</span><span class="keyword">= </span><span class="default">$max_x </span><span class="keyword">/ </span><span class="default">$max_y</span><span class="keyword">;
<br />            </span><span class="default">$b</span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;
<br />            if (</span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">$b</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= </span><span class="default">$max_x</span><span class="keyword">;
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= (</span><span class="default">$max_x </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;
<br />            }
<br />            else
<br />            {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= </span><span class="default">$max_y</span><span class="keyword">;
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= (</span><span class="default">$max_y </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;
<br />            }
<br />            </span><span class="comment">// Ready
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">// Don't resize       
<br />        </span><span class="keyword">else { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">; }
<br />    }
<br />    </span><span class="comment">// Set image quality (JPEG only)
<br />    </span><span class="keyword">public function </span><span class="default">set_quality</span><span class="keyword">(</span><span class="default">$quality</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$quality</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">quality </span><span class="keyword">= </span><span class="default">$quality</span><span class="keyword">;
<br />        }
<br />    }
<br />    </span><span class="comment">// Save image
<br />    </span><span class="keyword">public function </span><span class="default">save_img</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// Resize
<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output</span><span class="keyword">);
<br />            </span><span class="default">ImageCopyResampled</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">);
<br />        }
<br />        </span><span class="comment">// Save JPEG
<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"JPG" </span><span class="keyword">OR </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"JPEG"</span><span class="keyword">)
<br />        {
<br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imageJPEG</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">quality</span><span class="keyword">); }
<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }
<br />        }
<br />        </span><span class="comment">// Save PNG
<br />        </span><span class="keyword">elseif(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"PNG"</span><span class="keyword">)
<br />        {
<br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }
<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }
<br />        }
<br />        </span><span class="comment">// Save GIF
<br />        </span><span class="keyword">elseif(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format </span><span class="keyword">== </span><span class="string">"GIF"</span><span class="keyword">)
<br />        {
<br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize</span><span class="keyword">) { </span><span class="default">imageGIF</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }
<br />            else { </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_src</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">); }
<br />        }
<br />    }
<br />    </span><span class="comment">// Get width
<br />    </span><span class="keyword">public function </span><span class="default">get_width</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;
<br />    }
<br />    </span><span class="comment">// Get height
<br />    </span><span class="keyword">public function </span><span class="default">get_height</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;
<br />    }
<br />    </span><span class="comment">// Clear image cache
<br />    </span><span class="keyword">public function </span><span class="default">clear_cache</span><span class="keyword">()
<br />    {
<br />        @</span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_input</span><span class="keyword">);
<br />        @</span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">img_output</span><span class="keyword">);
<br />    }
<br />}
<br />class </span><span class="default">thumbnail </span><span class="keyword">extends </span><span class="default">imaging </span><span class="keyword">{
<br />    private </span><span class="default">$image</span><span class="keyword">;
<br />    private </span><span class="default">$width</span><span class="keyword">;
<br />    private </span><span class="default">$height</span><span class="keyword">;
<br />    
<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">) {
<br /></span><span class="default">parent</span><span class="keyword">::</span><span class="default">set_img</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br /></span><span class="default">parent</span><span class="keyword">::</span><span class="default">set_quality</span><span class="keyword">(</span><span class="default">80</span><span class="keyword">);
<br /></span><span class="default">parent</span><span class="keyword">::</span><span class="default">set_size</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">thumbnail</span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">PATHINFO_DIRNAME</span><span class="keyword">).</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">PATHINFO_FILENAME</span><span class="keyword">).</span><span class="string">'_tn.'</span><span class="keyword">.</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">);
<br /></span><span class="default">parent</span><span class="keyword">::</span><span class="default">save_img</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">thumbnail</span><span class="keyword">);
<br /></span><span class="default">parent</span><span class="keyword">::</span><span class="default">clear_cache</span><span class="keyword">();
<br />        }
<br />    function </span><span class="default">__toString</span><span class="keyword">() {
<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">thumbnail</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />********
<br />* </span><span class="default">DEMO </span><span class="keyword">*
<br />********
<br /></span><span class="default">$thumb </span><span class="keyword">= new </span><span class="default">thumbnail</span><span class="keyword">(</span><span class="string">'./image_dir/sub_dir/myimage.jpg'</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);
<br />echo </span><span class="string">'&lt;img src=\''</span><span class="keyword">.</span><span class="default">$thumb</span><span class="keyword">.</span><span class="string">'\' alt=\'myimage\' title=\'myimage\'/&gt;'</span><span class="keyword">;
<br />
<br />    </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114758">  <div class="votes">
    <div id="Vu114758">
    <a href="/manual/vote-note.php?id=114758&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114758">
    <a href="/manual/vote-note.php?id=114758&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114758" title="60% like this...">
    1
    </div>
  </div>
  <a href="#114758" class="name">
  <strong class="user"><em>julien at go-on-web dot com</em></strong></a><a class="genanchor" href="#114758"> &para;</a><div class="date" title="2014-04-02 08:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114758">
<div class="phpcode"><code><span class="html">Windows does not accept floating width and height...<br /><br />So, in "Example #2 Resampling an image proportionally", prefer :<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height </span><span class="keyword">&gt; </span><span class="default">$ratio_orig</span><span class="keyword">) {<br />   </span><span class="default">$width </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$height</span><span class="keyword">*</span><span class="default">$ratio_orig </span><span class="keyword">);<br />} else {<br />   </span><span class="default">$height </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">/</span><span class="default">$ratio_orig </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>(used "round")<br />otherwise your image wont be resized.</span></code></div>
  </div>
 </div>
  <div class="note" id="78239">  <div class="votes">
    <div id="Vu78239">
    <a href="/manual/vote-note.php?id=78239&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78239">
    <a href="/manual/vote-note.php?id=78239&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78239" title="60% like this...">
    1
    </div>
  </div>
  <a href="#78239" class="name">
  <strong class="user"><em>tim dot daldini at gmail dot be</em></strong></a><a class="genanchor" href="#78239"> &para;</a><div class="date" title="2007-10-03 08:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78239">
<div class="phpcode"><code><span class="html">Tim's function is a whole lot faster, however, the quality setting doesnt seem right since resizing very big images doesnt affect quality of the resulting thumbnails that much on quality 1 for example.<br /><br />Anyone has figured out how to use a more correct quality setting by comparing image surfaces (for example) basing on Tim's function?<br /><br />images with a total of 10Megapixels that contain 5Megapixels when resized should use the same quality setting like images that contain 1Megapixels but only 0.5 when resized.<br /><br />Not hard to understand, but the memoryload would be a lot lower if the function could decide to use a setting of quality 1 automatically when resizing big images to small thumbnails. This would be handy especially when using the function for images of various sizes in the same application.</span></code></div>
  </div>
 </div>
  <div class="note" id="94251">  <div class="votes">
    <div id="Vu94251">
    <a href="/manual/vote-note.php?id=94251&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94251">
    <a href="/manual/vote-note.php?id=94251&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94251" title="58% like this...">
    2
    </div>
  </div>
  <a href="#94251" class="name">
  <strong class="user"><em>seifer at loveletslive dot com</em></strong></a><a class="genanchor" href="#94251"> &para;</a><div class="date" title="2009-10-25 05:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94251">
<div class="phpcode"><code><span class="html">Okay so I saw that others have posted this already but I just messed around and made it so figured I would share it.<br /><br />Mine works, not to say others don't, I haven't tested them.<br /><br />This function creates a thumbnail of the specfied size.<br />If the thumbnail is a different ration it will automatically crop the center of the source image.<br /><br />It works if the source image is bigger or smaller than the desired "cropped thumbnail."<br /><br />Here is the code...<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">CroppedThumbnail</span><span class="keyword">(</span><span class="default">$imgSrc</span><span class="keyword">,</span><span class="default">$thumbnail_width</span><span class="keyword">,</span><span class="default">$thumbnail_height</span><span class="keyword">) { </span><span class="comment">//$imgSrc is a FILE - Returns an image resource.<br />    //getting the image dimensions  <br />    </span><span class="keyword">list(</span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$imgSrc</span><span class="keyword">);   <br />    </span><span class="default">$myImage </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$imgSrc</span><span class="keyword">);<br />    </span><span class="default">$ratio_orig </span><span class="keyword">= </span><span class="default">$width_orig</span><span class="keyword">/</span><span class="default">$height_orig</span><span class="keyword">;<br />    <br />    if (</span><span class="default">$thumbnail_width</span><span class="keyword">/</span><span class="default">$thumbnail_height </span><span class="keyword">&gt; </span><span class="default">$ratio_orig</span><span class="keyword">) {<br />       </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$thumbnail_width</span><span class="keyword">/</span><span class="default">$ratio_orig</span><span class="keyword">;<br />       </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$thumbnail_width</span><span class="keyword">;<br />    } else {<br />       </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$thumbnail_height</span><span class="keyword">*</span><span class="default">$ratio_orig</span><span class="keyword">;<br />       </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$thumbnail_height</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$x_mid </span><span class="keyword">= </span><span class="default">$new_width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;  </span><span class="comment">//horizontal middle<br />    </span><span class="default">$y_mid </span><span class="keyword">= </span><span class="default">$new_height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">; </span><span class="comment">//vertical middle<br />    <br />    </span><span class="default">$process </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">round</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$new_height</span><span class="keyword">)); <br />    <br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">, </span><span class="default">$myImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">);<br />    </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$thumbnail_width</span><span class="keyword">, </span><span class="default">$thumbnail_height</span><span class="keyword">); <br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$process</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">$x_mid</span><span class="keyword">-(</span><span class="default">$thumbnail_width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)), (</span><span class="default">$y_mid</span><span class="keyword">-(</span><span class="default">$thumbnail_height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)), </span><span class="default">$thumbnail_width</span><span class="keyword">, </span><span class="default">$thumbnail_height</span><span class="keyword">, </span><span class="default">$thumbnail_width</span><span class="keyword">, </span><span class="default">$thumbnail_height</span><span class="keyword">);<br /><br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$myImage</span><span class="keyword">);<br />    return </span><span class="default">$thumb</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Create the thumbnail<br /></span><span class="default">$newThumb </span><span class="keyword">= </span><span class="default">CroppedThumbnail</span><span class="keyword">(</span><span class="string">"MyImageName.jpg"</span><span class="keyword">,</span><span class="default">75</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /><br /></span><span class="comment">// And display the image...<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$newThumb</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110592">  <div class="votes">
    <div id="Vu110592">
    <a href="/manual/vote-note.php?id=110592&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110592">
    <a href="/manual/vote-note.php?id=110592&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110592" title="55% like this...">
    1
    </div>
  </div>
  <a href="#110592" class="name">
  <strong class="user"><em>alex-thennstaett-remove at gmx dot net</em></strong></a><a class="genanchor" href="#110592"> &para;</a><div class="date" title="2012-11-10 05:06"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110592">
<div class="phpcode"><code><span class="html">Having updated GD-Library from 2.0.35-r1 to 2.0.35-r3 using negative numbers for $dstX or $dstY started to produce unpredictable results, such as inserting shrinked images and enlarging $dstH or $dstW all by itself. While it did work fine previously, one should avoid using or calculating negative numbers for imagecopyresampled from the beginning.</span></code></div>
  </div>
 </div>
  <div class="note" id="126845">  <div class="votes">
    <div id="Vu126845">
    <a href="/manual/vote-note.php?id=126845&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126845">
    <a href="/manual/vote-note.php?id=126845&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126845" title="no votes...">
    0
    </div>
  </div>
  <a href="#126845" class="name">
  <strong class="user"><em>mark at manngo dot net</em></strong></a><a class="genanchor" href="#126845"> &para;</a><div class="date" title="2022-02-12 07:57"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126845">
<div class="phpcode"><code><span class="html">Note that as of PHP 8.1, you will get deprecated errors if the arguments are floating point. You will save yourself a lot of angst if you cast the arguments:<br /><br /><span class="default">&lt;?php<br />    imagecopyresampled</span><span class="keyword">(<br />        </span><span class="default">$dst_image</span><span class="keyword">, </span><span class="default">$src_image</span><span class="keyword">,<br />        (int) </span><span class="default">$dst_x</span><span class="keyword">,        (int) </span><span class="default">$dst_y</span><span class="keyword">,<br />        (int) </span><span class="default">$src_x</span><span class="keyword">,        (int) </span><span class="default">$src_y</span><span class="keyword">,<br />        (int) </span><span class="default">$dst_width</span><span class="keyword">,    (int) </span><span class="default">$dst_height</span><span class="keyword">,<br />        (int) </span><span class="default">$src_width</span><span class="keyword">,    (int) </span><span class="default">$src_height<br />    </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You could also have rounded them off, but I think casting them is truer to the original behaviour.</span></code></div>
  </div>
 </div>
  <div class="note" id="113009">  <div class="votes">
    <div id="Vu113009">
    <a href="/manual/vote-note.php?id=113009&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113009">
    <a href="/manual/vote-note.php?id=113009&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113009" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113009" class="name">
  <strong class="user"><em>sam at durosoft.com</em></strong></a><a class="genanchor" href="#113009"> &para;</a><div class="date" title="2013-08-17 06:18"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113009">
<div class="phpcode"><code><span class="html">The ultimate smart image re-sizing routine. You provide the original image, and a desired width and/or height. The function will intelligently re-size the original image to fit, centered, within the specified dimensions. Either width or height can be omitted to have the re-size "lock" only on width or height. Fantastic for thumbnail generation. Designed to work with PNG's.<br /><br />function resize_image_smart($orig, $dest_width=null, $dest_height=null)<br />{<br />  $orig_width = imagesx($orig);<br />  $orig_height = imagesy($orig);<br />  $vertical_offset = 0;<br />  $horizontal_offset = 0;<br />  if($dest_width == null)<br />  {<br />    if($dest_height == null)<br />    {<br />      die('$dest_width and $dest_height cant both be null!');<br />    }<br />    // height is locked<br />    $dest_width = $dest_height * $orig_width / $orig_height;<br />  } else {<br />    if($dest_height == null)<br />    {<br />      // width is locked<br />      $dest_height = $dest_width * $orig_height / $orig_width;<br />    } else {<br />      // both dimensions are locked<br />      $vertical_offset = $dest_height - ($orig_height * $dest_width) / $orig_width;<br />      $horizontal_offset = $dest_width - ($dest_height * $orig_width) / $orig_height;<br />      if($vertical_offset &lt; 0) $vertical_offset = 0;<br />      if($horizontal_offset &lt; 0) $horizontal_offset = 0;<br />    }<br />  }<br />  $img = imagecreatetruecolor($dest_width, $dest_height);<br />  imagesavealpha($img, true);<br />  imagealphablending($img, false);<br />  $transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);<br />  imagefill($img, 0, 0, $transparent);<br />  imagecopyresampled($img, $orig, round($horizontal_offset / 2),<br />                                  round($vertical_offset / 2),<br />                                  0,<br />                                  0,<br />                                  round($dest_width - $horizontal_offset),<br />                                  round($dest_height - $vertical_offset),<br />                                  $orig_width,<br />                                  $orig_height);<br />  return $img;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="98560">  <div class="votes">
    <div id="Vu98560">
    <a href="/manual/vote-note.php?id=98560&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98560">
    <a href="/manual/vote-note.php?id=98560&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98560" title="100% like this...">
    2
    </div>
  </div>
  <a href="#98560" class="name">
  <strong class="user"><em>guru_boy87 at hotmail dot com</em></strong></a><a class="genanchor" href="#98560"> &para;</a><div class="date" title="2010-06-23 04:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98560">
<div class="phpcode"><code><span class="html">Function to resize an image.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">resizeImage</span><span class="keyword">(</span><span class="default">$originalImage</span><span class="keyword">,</span><span class="default">$toWidth</span><span class="keyword">,</span><span class="default">$toHeight</span><span class="keyword">)
<br />{
<br />
<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$originalImage</span><span class="keyword">);
<br />    </span><span class="default">$xscale</span><span class="keyword">=</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$toWidth</span><span class="keyword">;
<br />    </span><span class="default">$yscale</span><span class="keyword">=</span><span class="default">$height</span><span class="keyword">/</span><span class="default">$toHeight</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$yscale</span><span class="keyword">&gt;</span><span class="default">$xscale</span><span class="keyword">){
<br />        </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$width </span><span class="keyword">* (</span><span class="default">1</span><span class="keyword">/</span><span class="default">$yscale</span><span class="keyword">));
<br />        </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height </span><span class="keyword">* (</span><span class="default">1</span><span class="keyword">/</span><span class="default">$yscale</span><span class="keyword">));
<br />    }
<br />    else {
<br />        </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$width </span><span class="keyword">* (</span><span class="default">1</span><span class="keyword">/</span><span class="default">$xscale</span><span class="keyword">));
<br />        </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height </span><span class="keyword">* (</span><span class="default">1</span><span class="keyword">/</span><span class="default">$xscale</span><span class="keyword">));
<br />    }
<br />    
<br />    
<br />    </span><span class="default">$imageResized </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">);
<br />    </span><span class="default">$imageTmp     </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg </span><span class="keyword">(</span><span class="default">$originalImage</span><span class="keyword">);
<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$imageResized</span><span class="keyword">, </span><span class="default">$imageTmp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br />
<br />    return </span><span class="default">$imageResized</span><span class="keyword">;
<br />    
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89987">  <div class="votes">
    <div id="Vu89987">
    <a href="/manual/vote-note.php?id=89987&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89987">
    <a href="/manual/vote-note.php?id=89987&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89987" title="100% like this...">
    2
    </div>
  </div>
  <a href="#89987" class="name">
  <strong class="user"><em>zuegs</em></strong></a><a class="genanchor" href="#89987"> &para;</a><div class="date" title="2009-03-31 10:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89987">
<div class="phpcode"><code><span class="html">Resampling GIFs and retain transparency dosen't work always, as dependent on the resample factor the resulting resampled image has some pattern-noise that prevents "imagegif" to find all the transparent-pixels.<br />One way to fix this, is to reset all pixels with high alpha to full-transparent:<br /><span class="default">&lt;?php<br /></span><span class="comment">// load/create images<br /></span><span class="default">$img_src</span><span class="keyword">=</span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$g_srcfile</span><span class="keyword">);<br /></span><span class="default">$img_dst</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$g_iw</span><span class="keyword">,</span><span class="default">$g_ih</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="comment">// get and reallocate transparency-color<br /></span><span class="default">$transindex </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img_src</span><span class="keyword">);<br />if(</span><span class="default">$transindex </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />  </span><span class="default">$transcol </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img_src</span><span class="keyword">, </span><span class="default">$transindex</span><span class="keyword">);<br />  </span><span class="default">$transindex </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$transcol</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$transcol</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$transcol</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">], </span><span class="default">127</span><span class="keyword">);<br />  </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$transindex</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// resample<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$img_src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$g_iw</span><span class="keyword">, </span><span class="default">$g_ih</span><span class="keyword">, </span><span class="default">$g_is</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$g_is</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="comment">// restore transparency<br /></span><span class="keyword">if(</span><span class="default">$transindex </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />  </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$transindex</span><span class="keyword">);<br />  for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$g_ih</span><span class="keyword">; ++</span><span class="default">$y</span><span class="keyword">)<br />    for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$g_iw</span><span class="keyword">; ++</span><span class="default">$x</span><span class="keyword">)<br />      if(((</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">)&gt;&gt;</span><span class="default">24</span><span class="keyword">) &amp; </span><span class="default">0x7F</span><span class="keyword">) &gt;= </span><span class="default">100</span><span class="keyword">) </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$transindex</span><span class="keyword">);<br /><br /></span><span class="comment">// save GIF<br /></span><span class="default">imagetruecolortopalette</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$g_dstfile</span><span class="keyword">); <br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88263">  <div class="votes">
    <div id="Vu88263">
    <a href="/manual/vote-note.php?id=88263&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88263">
    <a href="/manual/vote-note.php?id=88263&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88263" title="100% like this...">
    1
    </div>
  </div>
  <a href="#88263" class="name">
  <strong class="user"><em>Warren</em></strong></a><a class="genanchor" href="#88263"> &para;</a><div class="date" title="2009-01-17 11:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88263">
<div class="phpcode"><code><span class="html">This is a function I wrote for making thumbnails -  it will accept a source *image resource* and destination *path*, plus the max dimension and whether the thumbnail should be square.
<br />
<br />I chose to accept a resource as the source to make it a bit more efficient to create multiple sizes. For example:
<br />
<br /><span class="default">&lt;?php
<br />$src_im</span><span class="keyword">=@</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pathtofile</span><span class="keyword">);
<br /></span><span class="default">$large </span><span class="keyword">= </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">,</span><span class="default">$destination_large</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);
<br />@</span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">);
<br /></span><span class="default">$medium </span><span class="keyword">= </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$large</span><span class="keyword">,</span><span class="default">$destination_medium</span><span class="keyword">,</span><span class="default">500</span><span class="keyword">);
<br />@</span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$large</span><span class="keyword">);
<br /></span><span class="default">$small </span><span class="keyword">= </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$medium</span><span class="keyword">,</span><span class="default">$destination_small</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">);
<br />@</span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$medium</span><span class="keyword">);
<br /></span><span class="default">$square </span><span class="keyword">= </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$small</span><span class="keyword">,</span><span class="default">$destination_square</span><span class="keyword">,</span><span class="default">75</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);
<br />@</span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$small</span><span class="keyword">);
<br />@</span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$square</span><span class="keyword">);
<br />
<br />function </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dpath</span><span class="keyword">, </span><span class="default">$maxd</span><span class="keyword">, </span><span class="default">$square</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    </span><span class="default">$src_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">);
<br />    </span><span class="default">$src_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">);
<br />    </span><span class="default">$src_w</span><span class="keyword">=</span><span class="default">$src_width</span><span class="keyword">;
<br />    </span><span class="default">$src_h</span><span class="keyword">=</span><span class="default">$src_height</span><span class="keyword">;
<br />    </span><span class="default">$src_x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$src_y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    if(</span><span class="default">$square</span><span class="keyword">){
<br />        </span><span class="default">$dst_w </span><span class="keyword">= </span><span class="default">$maxd</span><span class="keyword">;
<br />        </span><span class="default">$dst_h </span><span class="keyword">= </span><span class="default">$maxd</span><span class="keyword">;
<br />        if(</span><span class="default">$src_width</span><span class="keyword">&gt;</span><span class="default">$src_height</span><span class="keyword">){
<br />            </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">$src_width</span><span class="keyword">-</span><span class="default">$src_height</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);
<br />            </span><span class="default">$src_w</span><span class="keyword">=</span><span class="default">$src_height</span><span class="keyword">;
<br />            </span><span class="default">$src_h</span><span class="keyword">=</span><span class="default">$src_height</span><span class="keyword">;
<br />        }else{
<br />            </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">$src_height</span><span class="keyword">-</span><span class="default">$src_width</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);
<br />            </span><span class="default">$src_w</span><span class="keyword">=</span><span class="default">$src_width</span><span class="keyword">;
<br />            </span><span class="default">$src_h</span><span class="keyword">=</span><span class="default">$src_width</span><span class="keyword">;
<br />        }
<br />    }else{
<br />        if(</span><span class="default">$src_width</span><span class="keyword">&gt;</span><span class="default">$src_height</span><span class="keyword">){
<br />            </span><span class="default">$dst_w</span><span class="keyword">=</span><span class="default">$maxd</span><span class="keyword">;
<br />            </span><span class="default">$dst_h</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_height</span><span class="keyword">*(</span><span class="default">$dst_w</span><span class="keyword">/</span><span class="default">$src_width</span><span class="keyword">));
<br />        }else{
<br />            </span><span class="default">$dst_h</span><span class="keyword">=</span><span class="default">$maxd</span><span class="keyword">;
<br />            </span><span class="default">$dst_w</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$src_width</span><span class="keyword">*(</span><span class="default">$dst_h</span><span class="keyword">/</span><span class="default">$src_height</span><span class="keyword">));
<br />        }
<br />    }
<br />    </span><span class="default">$dst_im</span><span class="keyword">=@</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dst_w</span><span class="keyword">,</span><span class="default">$dst_h</span><span class="keyword">);
<br />    @</span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);
<br />    @</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">,</span><span class="default">$dpath</span><span class="keyword">);
<br />    return </span><span class="default">$dst_im</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93190">  <div class="votes">
    <div id="Vu93190">
    <a href="/manual/vote-note.php?id=93190&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93190">
    <a href="/manual/vote-note.php?id=93190&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93190" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93190" class="name">
  <strong class="user"><em>asgaroth dot belem at gmail dot com</em></strong></a><a class="genanchor" href="#93190"> &para;</a><div class="date" title="2009-08-27 12:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93190">
<div class="phpcode"><code><span class="html">In case you are having trouble ( like I did ) and getting some kind of noise in the resampled image.<br /><br />then changing imagecopyresampled() with imagecopyresized()  removes the noise, found that here: <a href="http://bugs.php.net/bug.php?id=45030" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=45030</a><br /><br />Do not ask me why. but it works.</span></code></div>
  </div>
 </div>
  <div class="note" id="93166">  <div class="votes">
    <div id="Vu93166">
    <a href="/manual/vote-note.php?id=93166&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93166">
    <a href="/manual/vote-note.php?id=93166&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93166" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93166" class="name">
  <strong class="user"><em>asgaroth dot belem at gmail dot com</em></strong></a><a class="genanchor" href="#93166"> &para;</a><div class="date" title="2009-08-26 11:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93166">
<div class="phpcode"><code><span class="html">About preserving the  transparency when resizing PNGs this was the only thing that worked for me:<br /><br /><span class="default">&lt;?php imagealphablending</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">$watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_watermark_width</span><span class="keyword">, </span><span class="default">$new_watermark_height</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">)); <br /></span><span class="default">?&gt;<br /></span><br />Tried without success:<br /><br /><span class="default">&lt;?php imagealphablending</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$new_watermark</span><span class="keyword">, </span><span class="default">$watermark</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_watermark_width</span><span class="keyword">, </span><span class="default">$new_watermark_height</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">));<br /> </span><span class="default">?&gt;<br /></span><br />hope it helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="84516">  <div class="votes">
    <div id="Vu84516">
    <a href="/manual/vote-note.php?id=84516&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84516">
    <a href="/manual/vote-note.php?id=84516&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84516" title="100% like this...">
    1
    </div>
  </div>
  <a href="#84516" class="name">
  <strong class="user"><em>swizec at swizec dot com</em></strong></a><a class="genanchor" href="#84516"> &para;</a><div class="date" title="2008-07-17 02:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84516">
<div class="phpcode"><code><span class="html">Wrote a function for sanitising user uploaded images. It saves the native image in size roughly 800x600 so it still fits on most screens when opened, makes a desired size thumbnail and turns all images into high quality jpegs for smaller bandwidth use.<br /><br />Thumbnails are made in a similar way a designer would make them in photoshop, first resize the most troublesome dimension to desired size, then crop the rest out so the image retains proportions and most of it ends up in the thumbnail.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="comment">// $image is $_FILES[ &lt;image name&gt; ]<br />// $imageId is the id used in a database or wherever for this image<br />// $thumbWidth and $thumbHeight are desired dimensions for the thumbnail<br /></span><span class="keyword">function </span><span class="default">processImage</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$imageId</span><span class="keyword">, </span><span class="default">$thumbWidth</span><span class="keyword">, </span><span class="default">$thumbHeight </span><span class="keyword">)<br />{<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="default">$image</span><span class="keyword">[ </span><span class="string">'type' </span><span class="keyword">];<br />    </span><span class="default">$galleryPath </span><span class="keyword">= </span><span class="string">'images/collection/'</span><span class="keyword">;<br />    <br />    if ( </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$type</span><span class="keyword">, </span><span class="string">'image/' </span><span class="keyword">) === </span><span class="default">FALSE </span><span class="keyword">)<br />    { </span><span class="comment">// not an image<br />        </span><span class="keyword">return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">'image/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$type </span><span class="keyword">);<br />    </span><span class="default">$createFunc </span><span class="keyword">= </span><span class="string">'imagecreatefrom' </span><span class="keyword">. </span><span class="default">$type</span><span class="keyword">;<br />    <br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">$createFunc</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">[ </span><span class="string">'tmp_name' </span><span class="keyword">] );<br />    <br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">[ </span><span class="string">'tmp_name' </span><span class="keyword">] );<br />    <br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">];<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">];<br />    if ( </span><span class="default">$w </span><span class="keyword">&gt; </span><span class="default">800 </span><span class="keyword">|| </span><span class="default">$h </span><span class="keyword">&gt; </span><span class="default">600 </span><span class="keyword">)<br />    { </span><span class="comment">// we make sure the image isn't too huge<br />        </span><span class="keyword">if ( </span><span class="default">$w </span><span class="keyword">&gt; </span><span class="default">800 </span><span class="keyword">)<br />        {<br />            </span><span class="default">$nw </span><span class="keyword">= </span><span class="default">800</span><span class="keyword">;<br />            </span><span class="default">$nh </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( </span><span class="default">$nw</span><span class="keyword">*(</span><span class="default">$h</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">) );<br />        }elseif( </span><span class="default">$h </span><span class="keyword">&gt; </span><span class="default">600 </span><span class="keyword">)<br />        {<br />            </span><span class="default">$nh </span><span class="keyword">= </span><span class="default">600</span><span class="keyword">;<br />            </span><span class="default">$nw </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( </span><span class="default">$nh</span><span class="keyword">*(</span><span class="default">$w</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">) );<br />        }<br />        <br />        </span><span class="default">$im2 </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$nw</span><span class="keyword">, </span><span class="default">$nh </span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">( </span><span class="default">$im2</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$nw</span><span class="keyword">, </span><span class="default">$nh</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h </span><span class="keyword">);<br />        </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">);<br />        <br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">$im2</span><span class="keyword">;<br />        </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$nw</span><span class="keyword">;<br />        </span><span class="default">$h </span><span class="keyword">= </span><span class="default">$nh</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// create thumbnail<br />    </span><span class="default">$tw </span><span class="keyword">= </span><span class="default">$thumbWidth</span><span class="keyword">;<br />    </span><span class="default">$th </span><span class="keyword">= </span><span class="default">$thumbHeight</span><span class="keyword">;<br />    </span><span class="default">$imT </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$th </span><span class="keyword">);<br />    <br />    if ( </span><span class="default">$tw</span><span class="keyword">/</span><span class="default">$th </span><span class="keyword">&gt; </span><span class="default">$th</span><span class="keyword">/</span><span class="default">$tw </span><span class="keyword">)<br />    { </span><span class="comment">// wider<br />        </span><span class="default">$tmph </span><span class="keyword">= </span><span class="default">$h</span><span class="keyword">*(</span><span class="default">$tw</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">);<br />        </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$tmph </span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$tmph</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h </span><span class="keyword">); </span><span class="comment">// resize to width<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">( </span><span class="default">$imT</span><span class="keyword">, </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tmph</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">-</span><span class="default">$th</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$th</span><span class="keyword">, </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$th </span><span class="keyword">); </span><span class="comment">// crop<br />        </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$temp </span><span class="keyword">);<br />    }else<br />    { </span><span class="comment">// taller<br />        </span><span class="default">$tmpw </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">*(</span><span class="default">$th</span><span class="keyword">/</span><span class="default">$h </span><span class="keyword">);<br />        </span><span class="default">$imT </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$tmpw</span><span class="keyword">, </span><span class="default">$th </span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">( </span><span class="default">$imT</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tmpw</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h </span><span class="keyword">); </span><span class="comment">// resize to height<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">( </span><span class="default">$imT</span><span class="keyword">, </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tmpw</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">-</span><span class="default">$tw</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$th</span><span class="keyword">, </span><span class="default">$tw</span><span class="keyword">, </span><span class="default">$th </span><span class="keyword">); </span><span class="comment">// crop<br />        </span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$temp </span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// save the image<br />    </span><span class="default">imagejpeg</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">$galleryPath </span><span class="keyword">. </span><span class="default">$imgid </span><span class="keyword">. </span><span class="string">'.jpg'</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">);<br />    </span><span class="default">imagejpeg</span><span class="keyword">( </span><span class="default">$imT</span><span class="keyword">, </span><span class="default">$galleryPath </span><span class="keyword">. </span><span class="default">$imgid </span><span class="keyword">. </span><span class="string">'_thumb.jpg'</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81856">  <div class="votes">
    <div id="Vu81856">
    <a href="/manual/vote-note.php?id=81856&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81856">
    <a href="/manual/vote-note.php?id=81856&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81856" title="100% like this...">
    1
    </div>
  </div>
  <a href="#81856" class="name">
  <strong class="user"><em>arnar at netvistun dot is</em></strong></a><a class="genanchor" href="#81856"> &para;</a><div class="date" title="2008-03-16 10:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81856">
<div class="phpcode"><code><span class="html">A small thumb script. Lets you specify max height and width. The thumb will always be of a rectangular shape while the image itself retains it's proportions. Very clean.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The file<br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">'a.jpg'</span><span class="keyword">;<br /><br /></span><span class="comment">// Set a maximum height and width<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br /><br /></span><span class="default">$thumbsize </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br /><br /></span><span class="comment">// Content type<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br /><br /></span><span class="comment">// Get new dimensions<br /></span><span class="keyword">list(</span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /><br /></span><span class="default">$ratio_orig </span><span class="keyword">= </span><span class="default">$width_orig</span><span class="keyword">/</span><span class="default">$height_orig</span><span class="keyword">;<br /><br />if (</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height </span><span class="keyword">&gt; </span><span class="default">$ratio_orig</span><span class="keyword">) {<br />   </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">*</span><span class="default">$ratio_orig</span><span class="keyword">;<br />} else {<br />   </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">$ratio_orig</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Resample<br /></span><span class="default">$image_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$thumbsize</span><span class="keyword">, </span><span class="default">$thumbsize</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, -(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$thumbsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), -(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$thumbsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">);<br /><br /></span><span class="comment">// Output<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87881">  <div class="votes">
    <div id="Vu87881">
    <a href="/manual/vote-note.php?id=87881&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87881">
    <a href="/manual/vote-note.php?id=87881&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87881" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87881" class="name">
  <strong class="user"><em>MBorgPL at gmail dot com</em></strong></a><a class="genanchor" href="#87881"> &para;</a><div class="date" title="2008-12-28 10:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87881">
<div class="phpcode"><code><span class="html">Another addition to zorroswordsman at gmail dot com's resize class. <br /><br />The function takes $_FILES['sent_image'] as 1st parameter. The 2nd is complete destination path. <br /><br />It only moves images. <br /><br />It returns destination path if succeeded, and false if any error occurred. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">move_image</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">, </span><span class="default">$dest_img</span><span class="keyword">)<br />{<br />    </span><span class="comment">//verifies if the uploaded file is an image<br />    </span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">], </span><span class="string">'image'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) <br />        {<br />        </span><span class="comment">//moves the uploaded file into the destination place<br />        </span><span class="keyword">if (</span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$tmp_img</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">], </span><span class="default">$dest_img</span><span class="keyword">)) {<br />            return </span><span class="default">$dest_img</span><span class="keyword">;<br />        }<br />    }        <br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87866">  <div class="votes">
    <div id="Vu87866">
    <a href="/manual/vote-note.php?id=87866&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87866">
    <a href="/manual/vote-note.php?id=87866&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87866" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87866" class="name">
  <strong class="user"><em>MBorg_PL</em></strong></a><a class="genanchor" href="#87866"> &para;</a><div class="date" title="2008-12-27 03:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87866">
<div class="phpcode"><code><span class="html">Another tiny ammendment to zorroswordsman at gmail dot com's resize class AND matt at rees-jenkins dot co dot uk addition. The class may resize to different width and height not only same ones:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Set maximum image size (pixels)<br /></span><span class="keyword">public function </span><span class="default">set_size</span><span class="keyword">(</span><span class="default">$max_x </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">,</span><span class="default">$max_y </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)<br />{<br />    <br />    </span><span class="comment">// Resize<br />    </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt; </span><span class="default">$max_x </span><span class="keyword">|| </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">&gt; </span><span class="default">$max_y</span><span class="keyword">)<br />    {<br /><br />        </span><span class="default">$a</span><span class="keyword">= </span><span class="default">$max_x </span><span class="keyword">/ </span><span class="default">$max_y</span><span class="keyword">;<br />        </span><span class="default">$b</span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;<br />        <br />        if (</span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">$b</span><span class="keyword">)<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= </span><span class="default">$max_x</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= (</span><span class="default">$max_x </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;<br /><br />        }<br />        else<br />        {<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= </span><span class="default">$max_y</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= (</span><span class="default">$max_y </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;<br /><br />        }<br />        </span><span class="comment">// Ready<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />        <br />    }<br />    <br />    </span><span class="comment">// Don't resize        <br />    </span><span class="keyword">else { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">; }<br />    <br />}<br /></span><span class="default">?&gt;<br /></span><br />And the use of the class is now:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">##### DEMO #####<br /><br />// Image<br /></span><span class="default">$src </span><span class="keyword">= </span><span class="string">"myimage.jpg"</span><span class="keyword">;<br /><br /></span><span class="comment">// Begin<br /></span><span class="default">$img </span><span class="keyword">= new </span><span class="default">imaging</span><span class="keyword">;<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_img</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_quality</span><span class="keyword">(</span><span class="default">80</span><span class="keyword">);<br /><br /></span><span class="comment">// Small thumbnail<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_size</span><span class="keyword">(</span><span class="default">250</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">save_img</span><span class="keyword">(</span><span class="string">"small_250x150_" </span><span class="keyword">. </span><span class="default">$src</span><span class="keyword">);<br /><br /></span><span class="comment">// Baby thumbnail<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">set_size</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">250</span><span class="keyword">);<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">save_img</span><span class="keyword">(</span><span class="string">"baby_50x250_" </span><span class="keyword">. </span><span class="default">$src</span><span class="keyword">);<br /><br /></span><span class="comment">// Finalize<br /></span><span class="default">$img</span><span class="keyword">-&gt;</span><span class="default">clear_cache</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86344">  <div class="votes">
    <div id="Vu86344">
    <a href="/manual/vote-note.php?id=86344&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86344">
    <a href="/manual/vote-note.php?id=86344&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86344" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86344" class="name">
  <strong class="user"><em>matt at rees-jenkins dot co dot uk</em></strong></a><a class="genanchor" href="#86344"> &para;</a><div class="date" title="2008-10-14 03:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86344">
<div class="phpcode"><code><span class="html">A tiny ammendment to zorroswordsman at gmail dot com's resize class. It was only resizing if both the width AND height where greater than the desired size. This should fix it:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Set maximum image size (pixels)<br /></span><span class="keyword">function </span><span class="default">set_size</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Resize<br />    </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt; </span><span class="default">$size </span><span class="keyword">|| </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input </span><span class="keyword">&gt; </span><span class="default">$size</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Wide<br />        </span><span class="keyword">if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input </span><span class="keyword">&gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// Tall<br />        </span><span class="keyword">else<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_output </span><span class="keyword">= (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_output </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">y_input</span><span class="keyword">) * </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">x_input</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// Ready<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Don't resize<br />    </span><span class="keyword">else { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resize </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">; }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77612">  <div class="votes">
    <div id="Vu77612">
    <a href="/manual/vote-note.php?id=77612&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77612">
    <a href="/manual/vote-note.php?id=77612&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77612" title="100% like this...">
    1
    </div>
  </div>
  <a href="#77612" class="name">
  <strong class="user"><em>eblejr AT phrebh DOT com</em></strong></a><a class="genanchor" href="#77612"> &para;</a><div class="date" title="2007-09-05 11:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77612">
<div class="phpcode"><code><span class="html">Tim's code is fast, but if you're trying to put resampled images anywhere but in the top-left corner, it doesn't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="85038">  <div class="votes">
    <div id="Vu85038">
    <a href="/manual/vote-note.php?id=85038&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85038">
    <a href="/manual/vote-note.php?id=85038&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85038" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85038" class="name">
  <strong class="user"><em>crash</em></strong></a><a class="genanchor" href="#85038"> &para;</a><div class="date" title="2008-08-12 06:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85038">
<div class="phpcode"><code><span class="html">The suggestion of converting a gif to a png to retain transparency was useful. However the steps used to maintain the transparency work for a gif as well, so the conversion step is not necessary. Just do everything the same, and save as a gif anyway. i.e.<br /><br /><span class="default">&lt;?php<br />$g_iw is </span><span class="keyword">new </span><span class="default">image width<br />$g_ih is </span><span class="keyword">new </span><span class="default">image height<br /><br />$img_src</span><span class="keyword">=</span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$g_srcfile</span><span class="keyword">);<br /></span><span class="default">$img_dst</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$g_iw</span><span class="keyword">,</span><span class="default">$g_ih</span><span class="keyword">);<br /><br /></span><span class="comment">//preserve alpha<br /></span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$img_src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$g_iw</span><span class="keyword">, </span><span class="default">$g_ih</span><span class="keyword">, </span><span class="default">$g_is</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$g_is</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">, </span><span class="default">$g_dstfile</span><span class="keyword">); <br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img_dst</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75258">  <div class="votes">
    <div id="Vu75258">
    <a href="/manual/vote-note.php?id=75258&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75258">
    <a href="/manual/vote-note.php?id=75258&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75258" title="100% like this...">
    1
    </div>
  </div>
  <a href="#75258" class="name">
  <strong class="user"><em>rich at corephp dot co dot uk</em></strong></a><a class="genanchor" href="#75258"> &para;</a><div class="date" title="2007-05-20 03:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75258">
<div class="phpcode"><code><span class="html">Be wary of this function when resizing images to make them *larger* than the original due to the memory consumption rate. For example a 200KB JPEG file (1024x768) will take up 4MB of memory when loaded, but when resampled to twice the the size the memory use jumps to 20.1MB. imagecopyresized does the same. Allow approx. 5 bytes per *pixel* for memory allowance when dealing with true colour images.</span></code></div>
  </div>
 </div>
  <div class="note" id="81633">  <div class="votes">
    <div id="Vu81633">
    <a href="/manual/vote-note.php?id=81633&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81633">
    <a href="/manual/vote-note.php?id=81633&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81633" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81633" class="name">
  <strong class="user"><em>rayg at daylongraphics dot com</em></strong></a><a class="genanchor" href="#81633"> &para;</a><div class="date" title="2008-03-07 02:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81633">
<div class="phpcode"><code><span class="html">Here's a simple function to resample one JPEG imagefile to another while keeping aspect ratio of the source within the destination's dimensions. You can also tune the allowable distortion if you end up making too many thumbnails with thin blank areas around them. Should work when enlarging images too. Function returns true if it worked, false if not.<br /><br />function resample_picfile($src, $dst, $w, $h)<br />{<br />    // If distortion stretching is within the range below,<br />    // then let image be distorted.<br />    $lowend = 0.8;<br />    $highend = 1.25;<br /><br />    $src_img = imagecreatefromjpeg($src);<br />    if($src_img)<br />    {<br />        $dst_img = ImageCreateTrueColor($w, $h);<br />        /* if you don't want aspect-preserved images <br />to have a black bkgnd, fill $dst_img with the color of your choice here. <br />        */<br /><br />        if($dst_img)<br />        {<br />            $src_w = imageSX($src_img);<br />            $src_h = imageSY($src_img);<br /><br />            $scaleX = (float)$w / $src_w;<br />            $scaleY = (float)$h / $src_h;<br />            $scale = min($scaleX, $scaleY);<br /><br />            $dstW = $w;<br />            $dstH = $h;<br />            $dstX = $dstY = 0;<br /><br />            $scaleR = $scaleX / $scaleY;<br />            if($scaleR &lt; $lowend || $scaleR &gt; $highend)<br />            {<br />                $dstW = (int)($scale * $src_w + 0.5);<br />                $dstH = (int)($scale * $src_h + 0.5);<br /><br />                // Keep pic centered in frame.<br />                $dstX = (int)(0.5 * ($w - $dstW));<br />                $dstY = (int)(0.5 * ($h - $dstH));<br />            }<br />            <br />            imagecopyresampled(<br />                $dst_img, $src_img, $dstX, $dstY, 0, 0, <br />                $dstW, $dstH, $src_w, $src_h); <br />            imagejpeg($dst_img, $dst); <br />            imagedestroy($dst_img);<br />        }<br />        imagedestroy($src_img);<br />        return file_exists($dst);<br />    }<br />    return false;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="79297">  <div class="votes">
    <div id="Vu79297">
    <a href="/manual/vote-note.php?id=79297&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79297">
    <a href="/manual/vote-note.php?id=79297&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79297" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79297" class="name">
  <strong class="user"><em>matt1walsh DESPAMMER gmail dot com</em></strong></a><a class="genanchor" href="#79297"> &para;</a><div class="date" title="2007-11-19 07:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79297">
<div class="phpcode"><code><span class="html">None of the stuff I've seen for resizing transparent GIFs works consistently and yields a good image. The hack I thought of is silly, but it works okay -- convert GIF to PNG. This worked for me.<br /><br />$g_iw is new image width<br />$g_ih is new image height<br /><br />$img_src=imagecreatefromgif($g_srcfile);<br />$img_dst=imagecreatetruecolor($g_iw,$g_ih);<br /><br />//preserve alpha<br />imagecolortransparent($img_dst, imagecolorallocate($img_dst, 0, 0, 0));<br />imagealphablending($img_dst, false);<br />imagesavealpha($img_dst, true);<br />imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $g_iw, $g_ih, $g_is[0], $g_is[1]);<br /><br />imagepng($img_dst, $g_dstfile); <br />imagedestroy($img_dst);</span></code></div>
  </div>
 </div>
  <div class="note" id="94221">  <div class="votes">
    <div id="Vu94221">
    <a href="/manual/vote-note.php?id=94221&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94221">
    <a href="/manual/vote-note.php?id=94221&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94221" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#94221" class="name">
  <strong class="user"><em>michael at heymichael dot com</em></strong></a><a class="genanchor" href="#94221"> &para;</a><div class="date" title="2009-10-22 10:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94221">
<div class="phpcode"><code><span class="html">imagecopyresampled() works amazingly well, but here is something NOT to try with it:<br /><br />The resize routine I wrote looks for pixel widths, and resizes images based on the notion that if their widths and heights are too big, so are their byte sizes. It worked out well at first.<br /><br />But when I saw huge byte-size images slipping through beneath my 1000px-wide benchmark, I figured I'd subject the smaller-width images to resizing if their filesize() exceeded 100K.<br /><br />The idea was that I'd "resize" them keeping their original widths and heights (i.e. in (1) below, $newW = $oldW, $newH = $oldH), and letting the "75" at (2) below reduce the byte size.<br /><br />DON'T try that. imagecopyresampled() will lock up the server trying to resize an 800px-wide image to a "new" width of 800px. (I caught that on my Windows server before ever putting it on the destination Linux server, so take that with a grain of salt.)<br /><br />I got around it by making $newW = ($picW * 0.99), etc. You get the byte-size reduction you want without locking up.<br /><br />(1) imagecopyresampled($image_p, $image, 0, 0, 0, 0, $newW, $newH, $picW, $picH);<br /><br />(2) imagejpeg($image_p, $theFile, 75);</span></code></div>
  </div>
 </div>
  <div class="note" id="61169">  <div class="votes">
    <div id="Vu61169">
    <a href="/manual/vote-note.php?id=61169&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61169">
    <a href="/manual/vote-note.php?id=61169&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61169" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61169" class="name">
  <strong class="user"><em>areddan at silverarm dot ie</em></strong></a><a class="genanchor" href="#61169"> &para;</a><div class="date" title="2006-01-27 12:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61169">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// The file<br /></span><span class="default">$filein </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; </span><span class="comment">// File in<br /></span><span class="default">$fileout </span><span class="keyword">= </span><span class="string">'ttt.gif'</span><span class="keyword">; </span><span class="comment">// Fileout - optional <br /><br /></span><span class="default">$imagethumbsize_w </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">; </span><span class="comment">// thumbnail size (area cropped in middle of image)<br /></span><span class="default">$imagethumbsize_h </span><span class="keyword">= </span><span class="default">75</span><span class="keyword">; </span><span class="comment">// thumbnail size (area cropped in middle of image)<br /></span><span class="default">resize_then_crop</span><span class="keyword">( </span><span class="default">$filein</span><span class="keyword">,</span><span class="default">$fileout</span><span class="keyword">,</span><span class="default">$imagethumbsize_w</span><span class="keyword">,<br /></span><span class="default">$imagethumbsize_h</span><span class="keyword">,</span><span class="comment">/*rgb*/</span><span class="string">"255"</span><span class="keyword">,</span><span class="string">"255"</span><span class="keyword">,</span><span class="string">"255"</span><span class="keyword">);<br /><br /></span><span class="comment">//Author Alan Reddan Silverarm Solutions<br />//Date 27/01/2005<br />//Function that works well with images.<br />//It takes the image and reduces its size to best fit. i.e If you have an image<br />//that is 200 X 100 and you want a thumbnail of 75 X 50,<br />//it first resizes the image to 100 X 50<br />//and then takes out a portion 75 X 50 from then center of the input image.<br />//So loads of image information is retained.<br />//The corollary also holds if your input image is 100 X 200<br />//it first resizes image to 75 X 150 and then takes out a<br />//portion 75 X 75 from the centre<br />// The advantage here is that function decides on whether<br />//resize is by width or height itself.<br />//it also decides whether to use the height or the width as the base start point<br />//in the case that athumbnail is rectangular<br /><br /></span><span class="keyword">function </span><span class="default">resize_then_crop</span><span class="keyword">( </span><span class="default">$filein</span><span class="keyword">,</span><span class="default">$fileout</span><span class="keyword">,<br /></span><span class="default">$imagethumbsize_w</span><span class="keyword">,</span><span class="default">$imagethumbsize_h</span><span class="keyword">,</span><span class="default">$red</span><span class="keyword">,</span><span class="default">$green</span><span class="keyword">,</span><span class="default">$blue</span><span class="keyword">)<br />{<br /><br /></span><span class="comment">// Get new dimensions<br /></span><span class="keyword">list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filein</span><span class="keyword">);<br /></span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br /></span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br /><br />   if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filein</span><span class="string">"</span><span class="keyword">))<br />   {<br />       </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/jpeg'</span><span class="keyword">;<br />   }<br />   if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filein</span><span class="string">"</span><span class="keyword">))<br />   {<br />       </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/gif'</span><span class="keyword">;<br />   }<br />   if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.png/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filein</span><span class="string">"</span><span class="keyword">))<br />   {<br />       </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/png'</span><span class="keyword">;<br />   }<br />   <br />       switch(</span><span class="default">$format</span><span class="keyword">)<br />       {<br />           case </span><span class="string">'image/jpeg'</span><span class="keyword">:<br />           </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filein</span><span class="keyword">);<br />           break;<br />           case </span><span class="string">'image/gif'</span><span class="keyword">;<br />           </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$filein</span><span class="keyword">);<br />           break;<br />           case </span><span class="string">'image/png'</span><span class="keyword">:<br />           </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$filein</span><span class="keyword">);<br />           break;<br />       }<br /><br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">$imagethumbsize_w </span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">$imagethumbsize_h </span><span class="keyword">;<br />list(</span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filein</span><span class="keyword">);<br /><br />if (</span><span class="default">$width_orig </span><span class="keyword">&lt; </span><span class="default">$height_orig</span><span class="keyword">) {<br />  </span><span class="default">$height </span><span class="keyword">= (</span><span class="default">$imagethumbsize_w </span><span class="keyword">/ </span><span class="default">$width_orig</span><span class="keyword">) * </span><span class="default">$height_orig</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$width </span><span class="keyword">= (</span><span class="default">$imagethumbsize_h </span><span class="keyword">/ </span><span class="default">$height_orig</span><span class="keyword">) * </span><span class="default">$width_orig</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">$width </span><span class="keyword">&lt; </span><span class="default">$imagethumbsize_w</span><span class="keyword">)<br /></span><span class="comment">//if the width is smaller than supplied thumbnail size <br /></span><span class="keyword">{<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">$imagethumbsize_w</span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= (</span><span class="default">$imagethumbsize_w</span><span class="keyword">/ </span><span class="default">$width_orig</span><span class="keyword">) * </span><span class="default">$height_orig</span><span class="keyword">;;<br />}<br /><br />if (</span><span class="default">$height </span><span class="keyword">&lt; </span><span class="default">$imagethumbsize_h</span><span class="keyword">)<br /></span><span class="comment">//if the height is smaller than supplied thumbnail size <br /></span><span class="keyword">{<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">$imagethumbsize_h</span><span class="keyword">;<br /></span><span class="default">$width </span><span class="keyword">= (</span><span class="default">$imagethumbsize_h </span><span class="keyword">/ </span><span class="default">$height_orig</span><span class="keyword">) * </span><span class="default">$width_orig</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width </span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);  <br /></span><span class="default">$bgcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">);   <br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$bgcolor</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,<br /></span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">);<br /></span><span class="default">$thumb2 </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$imagethumbsize_w </span><span class="keyword">, </span><span class="default">$imagethumbsize_h</span><span class="keyword">);<br /></span><span class="comment">// true color for best quality<br /></span><span class="default">$bgcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">);   <br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,<br /></span><span class="default">$imagethumbsize_w </span><span class="keyword">, </span><span class="default">$imagethumbsize_h </span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$w1 </span><span class="keyword">=(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$imagethumbsize_w</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$h1 </span><span class="keyword">= (</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) - (</span><span class="default">$imagethumbsize_h</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">, </span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$w1</span><span class="keyword">, </span><span class="default">$h1</span><span class="keyword">,<br /></span><span class="default">$imagethumbsize_w </span><span class="keyword">, </span><span class="default">$imagethumbsize_h </span><span class="keyword">,</span><span class="default">$imagethumbsize_w</span><span class="keyword">, </span><span class="default">$imagethumbsize_h</span><span class="keyword">);<br /><br /></span><span class="comment">// Output<br />//header('Content-type: image/gif');<br />//imagegif($thumb); //output to browser first image when testing<br /><br /></span><span class="keyword">if (</span><span class="default">$fileout </span><span class="keyword">!=</span><span class="string">""</span><span class="keyword">)</span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">, </span><span class="default">$fileout</span><span class="keyword">); </span><span class="comment">//write to file<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/gif'</span><span class="keyword">);<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$thumb2</span><span class="keyword">); </span><span class="comment">//output to browser<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112275">  <div class="votes">
    <div id="Vu112275">
    <a href="/manual/vote-note.php?id=112275&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112275">
    <a href="/manual/vote-note.php?id=112275&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112275" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#112275" class="name">
  <strong class="user"><em>hoangvu4000 at gmail dot com</em></strong></a><a class="genanchor" href="#112275"> &para;</a><div class="date" title="2013-05-26 05:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112275">
<div class="phpcode"><code><span class="html">My complete function to resize an image  with exif data
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">CreateThumbnail</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">$thumb</span><span class="keyword">,</span><span class="default">$thumbwidth</span><span class="keyword">, </span><span class="default">$quality </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">)
<br />{
<br />         
<br />        </span><span class="default">$im1</span><span class="keyword">=</span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />        if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"exif_read_data"</span><span class="keyword">)){
<br />                </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />                if(!empty(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">])) {
<br />                switch(</span><span class="default">$exif</span><span class="keyword">[</span><span class="string">'Orientation'</span><span class="keyword">]) {
<br />                case </span><span class="default">8</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                case </span><span class="default">3</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                case </span><span class="default">6</span><span class="keyword">:
<br />                    </span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagerotate</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,-</span><span class="default">90</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                    break;
<br />                } 
<br />                }
<br />        }
<br />        </span><span class="default">$info </span><span class="keyword">= @</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);
<br />        
<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />         
<br />        </span><span class="default">$w2</span><span class="keyword">=</span><span class="default">ImageSx</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">$h2</span><span class="keyword">=</span><span class="default">ImageSy</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">$w1 </span><span class="keyword">= (</span><span class="default">$thumbwidth </span><span class="keyword">&lt;= </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) ? </span><span class="default">$thumbwidth </span><span class="keyword">: </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]  ;
<br />         
<br />        </span><span class="default">$h1</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$h2</span><span class="keyword">*(</span><span class="default">$w1</span><span class="keyword">/</span><span class="default">$w2</span><span class="keyword">));
<br />        </span><span class="default">$im2</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w1</span><span class="keyword">,</span><span class="default">$h1</span><span class="keyword">);
<br />         
<br />        </span><span class="default">imagecopyresampled </span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$w1</span><span class="keyword">,</span><span class="default">$h1</span><span class="keyword">,</span><span class="default">$w2</span><span class="keyword">,</span><span class="default">$h2</span><span class="keyword">); 
<br />        </span><span class="default">$path</span><span class="keyword">=</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);
<br />        </span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$quality</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);
<br />         
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123343">  <div class="votes">
    <div id="Vu123343">
    <a href="/manual/vote-note.php?id=123343&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123343">
    <a href="/manual/vote-note.php?id=123343&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123343" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#123343" class="name">
  <strong class="user"><em>aykuty at gmail dot com</em></strong></a><a class="genanchor" href="#123343"> &para;</a><div class="date" title="2018-11-14 08:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123343">
<div class="phpcode"><code><span class="html">scale image with ratio and then completes to the canvas size by centering <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* <br />verilen maksimum değerlere göre resmi boyutlandırır ve beyaz renk ile cerceveye ortalar. trendyol entegrasyonu için yazmıştım.<br /><br />Aykut YILDIZGÖRÜR <br />aykuty add gmail dot com<br />*/<br /><br /></span><span class="keyword">function </span><span class="default">set_image2canvas</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$new_file</span><span class="keyword">, </span><span class="default">$canvas_width</span><span class="keyword">=</span><span class="default">1200</span><span class="keyword">, </span><span class="default">$canvas_height </span><span class="keyword">=</span><span class="default">1800</span><span class="keyword">, </span><span class="default">$quality</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">) {<br />                <br />    if (!</span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$new_file </span><span class="keyword">)) {<br />        <br />        list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">, </span><span class="default">$attr</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">( </span><span class="default">$file </span><span class="keyword">);<br />        <br />        if(</span><span class="default">$width</span><span class="keyword">&gt; </span><span class="default">$height</span><span class="keyword">) {<br />                </span><span class="default">$width_tt</span><span class="keyword">=</span><span class="default">$canvas_width</span><span class="keyword">;<br />                </span><span class="default">$height_tt</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">$width</span><span class="keyword">*</span><span class="default">$canvas_width</span><span class="keyword">);<br />                </span><span class="default">$off_y </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(( </span><span class="default">$canvas_height </span><span class="keyword">- </span><span class="default">$height_tt</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);<br />                </span><span class="default">$off_x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />                <br />        } else {<br />                </span><span class="default">$height_tt</span><span class="keyword">=</span><span class="default">$canvas_height</span><span class="keyword">;<br />                </span><span class="default">$width_tt</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height</span><span class="keyword">*</span><span class="default">$canvas_height</span><span class="keyword">);<br />                </span><span class="default">$off_x</span><span class="keyword">=</span><span class="default">ceil</span><span class="keyword">((</span><span class="default">$canvas_width </span><span class="keyword">- </span><span class="default">$width_tt</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);<br />                </span><span class="default">$off_y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$thumb</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">( </span><span class="default">$file </span><span class="keyword">);<br />        </span><span class="default">$thumb_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$canvas_width</span><span class="keyword">, </span><span class="default">$canvas_height</span><span class="keyword">);<br />        <br />        </span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">( </span><span class="default">$thumb_p</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255 </span><span class="keyword">);<br />        </span><span class="default">imagefill </span><span class="keyword">( </span><span class="default">$thumb_p</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg </span><span class="keyword">);<br />        </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb_p</span><span class="keyword">, </span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$off_x</span><span class="keyword">, </span><span class="default">$off_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width_tt</span><span class="keyword">, </span><span class="default">$height_tt</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />        <br />        </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb_p</span><span class="keyword">,</span><span class="default">$new_file</span><span class="keyword">,</span><span class="default">$quality</span><span class="keyword">);<br />        <br />    }else{ </span><span class="comment">//hedef resim zaten var<br />            </span><span class="keyword">return -</span><span class="default">1</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80417">  <div class="votes">
    <div id="Vu80417">
    <a href="/manual/vote-note.php?id=80417&amp;page=function.imagecopyresampled&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80417">
    <a href="/manual/vote-note.php?id=80417&amp;page=function.imagecopyresampled&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80417" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#80417" class="name">
  <strong class="user"><em>Michael Shepanski</em></strong></a><a class="genanchor" href="#80417"> &para;</a><div class="date" title="2008-01-14 10:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80417">
<div class="phpcode"><code><span class="html">Here is a function I thought I would share that will resample and copy an image with rounded corners.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/** ------------------------------------------------------------<br /> * Copy and resample an image with rounded corners.<br /> * ----------------------------------------------------------- */<br /></span><span class="keyword">function </span><span class="default">imageRoundedCopyResampled</span><span class="keyword">(&amp;</span><span class="default">$dstimg</span><span class="keyword">, &amp;</span><span class="default">$srcimg</span><span class="keyword">, </span><span class="default">$dstx</span><span class="keyword">, </span><span class="default">$dsty</span><span class="keyword">, </span><span class="default">$srcx</span><span class="keyword">,<br />                                   </span><span class="default">$srcy</span><span class="keyword">, </span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">, </span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">) {<br />    </span><span class="comment"># Resize the Source Image<br />    </span><span class="default">$srcResized </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">);<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$srcResized</span><span class="keyword">, </span><span class="default">$srcimg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$srcx</span><span class="keyword">, </span><span class="default">$srcy</span><span class="keyword">,<br />                       </span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">, </span><span class="default">$srcw</span><span class="keyword">, </span><span class="default">$srch</span><span class="keyword">);<br />    </span><span class="comment"># Copy the Body without corners<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">, </span><span class="default">$srcResized</span><span class="keyword">, </span><span class="default">$dstx</span><span class="keyword">+</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dsty</span><span class="keyword">,<br />              </span><span class="default">$radius</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dstw</span><span class="keyword">-(</span><span class="default">$radius</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">), </span><span class="default">$dsth</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">, </span><span class="default">$srcResized</span><span class="keyword">, </span><span class="default">$dstx</span><span class="keyword">, </span><span class="default">$dsty</span><span class="keyword">+</span><span class="default">$radius</span><span class="keyword">,<br />              </span><span class="default">0</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dstw</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">-(</span><span class="default">$radius</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">));<br />    </span><span class="comment"># Create a list of iterations; array(array(X1, X2, CenterX, CenterY), ...)<br />    # Iterations in order are: Top-Left, Top-Right, Bottom-Left, Bottom-Right<br />    </span><span class="default">$iterations </span><span class="keyword">= array(<br />        array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">),<br />        array(</span><span class="default">$dstw</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dstw</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">),<br />        array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">),<br />        array(</span><span class="default">$dstw</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dstw</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$dsth</span><span class="keyword">-</span><span class="default">$radius</span><span class="keyword">)<br />    );<br />    </span><span class="comment"># Loop through each corner 'iteration'<br />    </span><span class="keyword">foreach(</span><span class="default">$iterations </span><span class="keyword">as </span><span class="default">$iteration</span><span class="keyword">) {<br />        list(</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$y1</span><span class="keyword">,</span><span class="default">$cx</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">) = </span><span class="default">$iteration</span><span class="keyword">;<br />        for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">$y1</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;=</span><span class="default">$y1</span><span class="keyword">+</span><span class="default">$radius</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />            for (</span><span class="default">$x</span><span class="keyword">=</span><span class="default">$x1</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;=</span><span class="default">$x1</span><span class="keyword">+</span><span class="default">$radius</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />                </span><span class="comment"># If length (X,Y)-&gt;(CX,CY) is less then radius draw the point<br />                </span><span class="default">$length </span><span class="keyword">= </span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">pow</span><span class="keyword">((</span><span class="default">$cx </span><span class="keyword">- </span><span class="default">$x</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">) + </span><span class="default">pow</span><span class="keyword">((</span><span class="default">$cy </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">));<br />                if (</span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">$radius</span><span class="keyword">) {<br />                    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dstimg</span><span class="keyword">, </span><span class="default">$srcResized</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$dstx</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">+</span><span class="default">$dsty</span><span class="keyword">,<br />                              </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />                }<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecopyresampled&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopyresampled.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.image.php">GD and Image Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gd-info.php" title="gd_&#8203;info">gd_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesize.php" title="getimagesize">getimagesize</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesizefromstring.php" title="getimagesizefromstring">getimagesizefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-extension.php" title="image_&#8203;type_&#8203;to_&#8203;extension">image_&#8203;type_&#8203;to_&#8203;extension</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-mime-type.php" title="image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type">image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.image2wbmp.php" title="image2wbmp">image2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffine.php" title="imageaffine">imageaffine</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixconcat.php" title="imageaffinematrixconcat">imageaffinematrixconcat</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixget.php" title="imageaffinematrixget">imageaffinematrixget</a>
                        </li>
                                                <li class="">
                            <a href="function.imagealphablending.php" title="imagealphablending">imagealphablending</a>
                        </li>
                                                <li class="">
                            <a href="function.imageantialias.php" title="imageantialias">imageantialias</a>
                        </li>
                                                <li class="">
                            <a href="function.imagearc.php" title="imagearc">imagearc</a>
                        </li>
                                                <li class="">
                            <a href="function.imageavif.php" title="imageavif">imageavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagebmp.php" title="imagebmp">imagebmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagechar.php" title="imagechar">imagechar</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecharup.php" title="imagecharup">imagecharup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocate.php" title="imagecolorallocate">imagecolorallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocatealpha.php" title="imagecolorallocatealpha">imagecolorallocatealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorat.php" title="imagecolorat">imagecolorat</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosest.php" title="imagecolorclosest">imagecolorclosest</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosestalpha.php" title="imagecolorclosestalpha">imagecolorclosestalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosesthwb.php" title="imagecolorclosesthwb">imagecolorclosesthwb</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolordeallocate.php" title="imagecolordeallocate">imagecolordeallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexact.php" title="imagecolorexact">imagecolorexact</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexactalpha.php" title="imagecolorexactalpha">imagecolorexactalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolormatch.php" title="imagecolormatch">imagecolormatch</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolve.php" title="imagecolorresolve">imagecolorresolve</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolvealpha.php" title="imagecolorresolvealpha">imagecolorresolvealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorset.php" title="imagecolorset">imagecolorset</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorsforindex.php" title="imagecolorsforindex">imagecolorsforindex</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorstotal.php" title="imagecolorstotal">imagecolorstotal</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolortransparent.php" title="imagecolortransparent">imagecolortransparent</a>
                        </li>
                                                <li class="">
                            <a href="function.imageconvolution.php" title="imageconvolution">imageconvolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopy.php" title="imagecopy">imagecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymerge.php" title="imagecopymerge">imagecopymerge</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymergegray.php" title="imagecopymergegray">imagecopymergegray</a>
                        </li>
                                                <li class="current">
                            <a href="function.imagecopyresampled.php" title="imagecopyresampled">imagecopyresampled</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresized.php" title="imagecopyresized">imagecopyresized</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreate.php" title="imagecreate">imagecreate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromavif.php" title="imagecreatefromavif">imagecreatefromavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrombmp.php" title="imagecreatefrombmp">imagecreatefrombmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd.php" title="imagecreatefromgd">imagecreatefromgd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2.php" title="imagecreatefromgd2">imagecreatefromgd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2part.php" title="imagecreatefromgd2part">imagecreatefromgd2part</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgif.php" title="imagecreatefromgif">imagecreatefromgif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromjpeg.php" title="imagecreatefromjpeg">imagecreatefromjpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrompng.php" title="imagecreatefrompng">imagecreatefrompng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromstring.php" title="imagecreatefromstring">imagecreatefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromtga.php" title="imagecreatefromtga">imagecreatefromtga</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwbmp.php" title="imagecreatefromwbmp">imagecreatefromwbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwebp.php" title="imagecreatefromwebp">imagecreatefromwebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxbm.php" title="imagecreatefromxbm">imagecreatefromxbm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxpm.php" title="imagecreatefromxpm">imagecreatefromxpm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatetruecolor.php" title="imagecreatetruecolor">imagecreatetruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecrop.php" title="imagecrop">imagecrop</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecropauto.php" title="imagecropauto">imagecropauto</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedashedline.php" title="imagedashedline">imagedashedline</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedestroy.php" title="imagedestroy">imagedestroy</a>
                        </li>
                                                <li class="">
                            <a href="function.imageellipse.php" title="imageellipse">imageellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefill.php" title="imagefill">imagefill</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledarc.php" title="imagefilledarc">imagefilledarc</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledellipse.php" title="imagefilledellipse">imagefilledellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledpolygon.php" title="imagefilledpolygon">imagefilledpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledrectangle.php" title="imagefilledrectangle">imagefilledrectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilltoborder.php" title="imagefilltoborder">imagefilltoborder</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilter.php" title="imagefilter">imagefilter</a>
                        </li>
                                                <li class="">
                            <a href="function.imageflip.php" title="imageflip">imageflip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontheight.php" title="imagefontheight">imagefontheight</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontwidth.php" title="imagefontwidth">imagefontwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.imageftbbox.php" title="imageftbbox">imageftbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefttext.php" title="imagefttext">imagefttext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegammacorrect.php" title="imagegammacorrect">imagegammacorrect</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd.php" title="imagegd">imagegd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd2.php" title="imagegd2">imagegd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetclip.php" title="imagegetclip">imagegetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetinterpolation.php" title="imagegetinterpolation">imagegetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegif.php" title="imagegif">imagegif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabscreen.php" title="imagegrabscreen">imagegrabscreen</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabwindow.php" title="imagegrabwindow">imagegrabwindow</a>
                        </li>
                                                <li class="">
                            <a href="function.imageinterlace.php" title="imageinterlace">imageinterlace</a>
                        </li>
                                                <li class="">
                            <a href="function.imageistruecolor.php" title="imageistruecolor">imageistruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagejpeg.php" title="imagejpeg">imagejpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagelayereffect.php" title="imagelayereffect">imagelayereffect</a>
                        </li>
                                                <li class="">
                            <a href="function.imageline.php" title="imageline">imageline</a>
                        </li>
                                                <li class="">
                            <a href="function.imageloadfont.php" title="imageloadfont">imageloadfont</a>
                        </li>
                                                <li class="">
                            <a href="function.imageopenpolygon.php" title="imageopenpolygon">imageopenpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettecopy.php" title="imagepalettecopy">imagepalettecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettetotruecolor.php" title="imagepalettetotruecolor">imagepalettetotruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepng.php" title="imagepng">imagepng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepolygon.php" title="imagepolygon">imagepolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerectangle.php" title="imagerectangle">imagerectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imageresolution.php" title="imageresolution">imageresolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerotate.php" title="imagerotate">imagerotate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesavealpha.php" title="imagesavealpha">imagesavealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagescale.php" title="imagescale">imagescale</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetbrush.php" title="imagesetbrush">imagesetbrush</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetclip.php" title="imagesetclip">imagesetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetinterpolation.php" title="imagesetinterpolation">imagesetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetpixel.php" title="imagesetpixel">imagesetpixel</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetstyle.php" title="imagesetstyle">imagesetstyle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetthickness.php" title="imagesetthickness">imagesetthickness</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesettile.php" title="imagesettile">imagesettile</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestring.php" title="imagestring">imagestring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestringup.php" title="imagestringup">imagestringup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesx.php" title="imagesx">imagesx</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesy.php" title="imagesy">imagesy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetruecolortopalette.php" title="imagetruecolortopalette">imagetruecolortopalette</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettfbbox.php" title="imagettfbbox">imagettfbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettftext.php" title="imagettftext">imagettftext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetypes.php" title="imagetypes">imagetypes</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewbmp.php" title="imagewbmp">imagewbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewebp.php" title="imagewebp">imagewebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagexbm.php" title="imagexbm">imagexbm</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcembed.php" title="iptcembed">iptcembed</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcparse.php" title="iptcparse">iptcparse</a>
                        </li>
                                                <li class="">
                            <a href="function.jpeg2wbmp.php" title="jpeg2wbmp">jpeg2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.png2wbmp.php" title="png2wbmp">png2wbmp</a>
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
