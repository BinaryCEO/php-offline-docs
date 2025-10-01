<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecopyresized - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecopyresized.php">
 <link rel="shorturl" href="https://www.php.net/imagecopyresized">
 <link rel="alternate" href="https://www.php.net/imagecopyresized" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecopyresampled.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecreate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecopyresized.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecopyresized.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecopyresized.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecopyresized.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecopyresized.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecopyresized.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecopyresized.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecopyresized.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecopyresized.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecopyresized.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecopyresized.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copy and resize part of an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecopyresized - Manual" />
<meta name="twitter:description" content="Copy and resize part of an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecopyresized - Manual" />
<meta itemprop="description" content="Copy and resize part of an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copy and resize part of an image" />

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
        <a href="function.imagecreate.php">
          imagecreate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecopyresampled.php">
          &laquo; imagecopyresampled        </a>
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
            <option value='en/function.imagecopyresized.php' selected="selected">English</option>
            <option value='de/function.imagecopyresized.php'>German</option>
            <option value='es/function.imagecopyresized.php'>Spanish</option>
            <option value='fr/function.imagecopyresized.php'>French</option>
            <option value='it/function.imagecopyresized.php'>Italian</option>
            <option value='ja/function.imagecopyresized.php'>Japanese</option>
            <option value='pt_BR/function.imagecopyresized.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecopyresized.php'>Russian</option>
            <option value='tr/function.imagecopyresized.php'>Turkish</option>
            <option value='uk/function.imagecopyresized.php'>Ukrainian</option>
            <option value='zh/function.imagecopyresized.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecopyresized" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecopyresized</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecopyresized</span> &mdash; <span class="dc-title">Copy and resize part of an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecopyresized-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecopyresized</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$dst_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$src_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_height</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecopyresized()</strong></span> copies a rectangular
   portion of one image to another image.
   <code class="parameter">dst_image</code> is the destination image,
   <code class="parameter">src_image</code> is the source image identifier.
  </p>
  <p class="para">
   In other words, <span class="function"><strong>imagecopyresized()</strong></span> will take a 
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
   corner. This function can be used to copy regions within the
   same image (if <code class="parameter">dst_image</code> is the same as
   <code class="parameter">src_image</code>) but if the regions overlap the
   results will be unpredictable.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecopyresized-parameters">
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

 <div class="refsect1 returnvalues" id="refsect1-function.imagecopyresized-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecopyresized-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecopyresized-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2862">
    <p><strong>Example #1 Resizing an image</strong></p>
    <div class="example-contents"><p>
     This example will display the image at half size.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// File and new size<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'test.jpg'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$percent </span><span style="color: #007700">= </span><span style="color: #0000BB">0.5</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Content type<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/jpeg'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get new sizes<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">) = </span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$newwidth </span><span style="color: #007700">= </span><span style="color: #0000BB">$width </span><span style="color: #007700">* </span><span style="color: #0000BB">$percent</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$newheight </span><span style="color: #007700">= </span><span style="color: #0000BB">$height </span><span style="color: #007700">* </span><span style="color: #0000BB">$percent</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Load<br /></span><span style="color: #0000BB">$thumb </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$newwidth</span><span style="color: #007700">, </span><span style="color: #0000BB">$newheight</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$source </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromjpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Resize<br /></span><span style="color: #0000BB">imagecopyresized</span><span style="color: #007700">(</span><span style="color: #0000BB">$thumb</span><span style="color: #007700">, </span><span style="color: #0000BB">$source</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$newwidth</span><span style="color: #007700">, </span><span style="color: #0000BB">$newheight</span><span style="color: #007700">, </span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$thumb</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecopyresized.jpg" alt="Output of example : Resizing an image" width="47" height="25" />
     </div>
    </div>
    <div class="example-contents"><p>
     The image will be output at half size, though better
     quality could be obtained using <span class="function"><a href="function.imagecopyresampled.php" class="function">imagecopyresampled()</a></span>.
    </p></div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagecopyresized-notes">
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


 <div class="refsect1 seealso" id="refsect1-function.imagecopyresized-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecopyresampled.php" class="function" rel="rdfs-seeAlso">imagecopyresampled()</a> - Copy and resize part of an image with resampling</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecopyresized.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecopyresized%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecopyresized&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopyresized.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">33 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="50432">  <div class="votes">
    <div id="Vu50432">
    <a href="/manual/vote-note.php?id=50432&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50432">
    <a href="/manual/vote-note.php?id=50432&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50432" title="59% like this...">
    20
    </div>
  </div>
  <a href="#50432" class="name">
  <strong class="user"><em>robby at planetargon dot com</em></strong></a><a class="genanchor" href="#50432"> &para;</a><div class="date" title="2005-02-28 07:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50432">
<div class="phpcode"><code><span class="html">Most of the examples below don't keep the proportions properly. They keep using if/else for the height/width..and forgetting that you might have a max height AND a max width, not one or the other.<br /><br />/**<br />* Resize an image and keep the proportions<br />* @author Allison Beckwith &lt;allison@planetargon.com&gt;<br />* @param string $filename<br />* @param integer $max_width<br />* @param integer $max_height<br />* @return image<br />*/<br />function resizeImage($filename, $max_width, $max_height)<br />{<br />    list($orig_width, $orig_height) = getimagesize($filename);<br /><br />    $width = $orig_width;<br />    $height = $orig_height;<br /><br />    # taller<br />    if ($height &gt; $max_height) {<br />        $width = ($max_height / $height) * $width;<br />        $height = $max_height;<br />    }<br /><br />    # wider<br />    if ($width &gt; $max_width) {<br />        $height = ($max_width / $width) * $height;<br />        $width = $max_width;<br />    }<br /><br />    $image_p = imagecreatetruecolor($width, $height);<br /><br />    $image = imagecreatefromjpeg($filename);<br /><br />    imagecopyresampled($image_p, $image, 0, 0, 0, 0, <br />                                     $width, $height, $orig_width, $orig_height);<br /><br />    return $image_p;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="57453">  <div class="votes">
    <div id="Vu57453">
    <a href="/manual/vote-note.php?id=57453&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57453">
    <a href="/manual/vote-note.php?id=57453&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57453" title="75% like this...">
    4
    </div>
  </div>
  <a href="#57453" class="name">
  <strong class="user"><em>jesse at method studios</em></strong></a><a class="genanchor" href="#57453"> &para;</a><div class="date" title="2005-10-04 12:07"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57453">
<div class="phpcode"><code><span class="html">imagecopyresized() does not do any resampling.  This makes it extremely quick.  If quality is an issue, use imagecopyresampled().</span></code></div>
  </div>
 </div>
  <div class="note" id="104556">  <div class="votes">
    <div id="Vu104556">
    <a href="/manual/vote-note.php?id=104556&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104556">
    <a href="/manual/vote-note.php?id=104556&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104556" title="64% like this...">
    4
    </div>
  </div>
  <a href="#104556" class="name">
  <strong class="user"><em>email at vladislav dot net</em></strong></a><a class="genanchor" href="#104556"> &para;</a><div class="date" title="2011-06-22 03:30"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104556">
<div class="phpcode"><code><span class="html">I didn't find here before any script giving both GIF and PNG transparent images correct, so I offer you mine.
<br />Here is the code for 'image.php' script to generate a resized or original sized images of any type (JPEG, GIF, PNG) with respect to possible transparency of GIF and PNG.
<br />The following script can be used in HTML tag IMG (to display an image marked in database with ID equal to 1 and resized to max 100px) like this:
<br />&lt;img src="image.php?id=1&amp;size=100" /&gt;.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/* *************************
<br /> * Script by A. Vladislav I.
<br /> * ************************* */
<br /></span><span class="default">$id </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">];
<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">];
<br />if(!empty(</span><span class="default">$id</span><span class="keyword">))
<br />{
<br /></span><span class="comment">/* Here you may take the source image path from where you want: current direcory, databse etc.
<br /> I used the $_GET['id'] for giving the script an ID of the image in database, where its real name is stored.
<br /> I consider later the $f variable responsible to store file name and $type variable responsible to store mime type of the image. You may use function GetImageSize() to discover the mime type.
<br /> So don't forget to set the */
<br />  </span><span class="default">$f </span><span class="keyword">= </span><span class="comment">/*...*/ </span><span class="keyword">;
<br /></span><span class="comment">/* and */
<br />  </span><span class="default">$type </span><span class="keyword">= </span><span class="comment">/*...*/ </span><span class="keyword">;
<br /></span><span class="comment">/* ... */
<br /></span><span class="keyword">}
<br /></span><span class="default">$imgFunc </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />switch(</span><span class="default">$type</span><span class="keyword">)
<br />{
<br />    case </span><span class="string">'image/gif'</span><span class="keyword">:
<br />        </span><span class="default">$img </span><span class="keyword">= </span><span class="default">ImageCreateFromGIF</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />        </span><span class="default">$imgFunc </span><span class="keyword">= </span><span class="string">'ImageGIF'</span><span class="keyword">;
<br />        </span><span class="default">$transparent_index </span><span class="keyword">= </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />        if(</span><span class="default">$transparent_index</span><span class="keyword">!=(-</span><span class="default">1</span><span class="keyword">)) </span><span class="default">$transparent_color </span><span class="keyword">= </span><span class="default">ImageColorsForIndex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$transparent_index</span><span class="keyword">);
<br />        break;
<br />    case </span><span class="string">'image/jpeg'</span><span class="keyword">:
<br />        </span><span class="default">$img </span><span class="keyword">= </span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />        </span><span class="default">$imgFunc </span><span class="keyword">= </span><span class="string">'ImageJPEG'</span><span class="keyword">;
<br />        break;
<br />    case </span><span class="string">'image/png'</span><span class="keyword">:
<br />        </span><span class="default">$img </span><span class="keyword">= </span><span class="default">ImageCreateFromPNG</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />        </span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">ImageSaveAlpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">$imgFunc </span><span class="keyword">= </span><span class="string">'ImagePNG'</span><span class="keyword">;
<br />        break;
<br />    default:
<br />        die(</span><span class="string">"ERROR - no image found"</span><span class="keyword">);
<br />        break;
<br />}
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: "</span><span class="keyword">.</span><span class="default">$type</span><span class="keyword">);
<br />if(!empty(</span><span class="default">$size</span><span class="keyword">))
<br />{
<br />    
<br />    list(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">) = </span><span class="default">GetImageSize</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);
<br />    if( </span><span class="default">$w</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">or </span><span class="default">$h</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">) die(</span><span class="string">"ERROR - zero image size"</span><span class="keyword">);
<br />    </span><span class="default">$percent </span><span class="keyword">= </span><span class="default">$size </span><span class="keyword">/ ((</span><span class="default">$w</span><span class="keyword">&gt;</span><span class="default">$h</span><span class="keyword">)?</span><span class="default">$w</span><span class="keyword">:</span><span class="default">$h</span><span class="keyword">);
<br />    if(</span><span class="default">$percent</span><span class="keyword">&gt;</span><span class="default">0 </span><span class="keyword">and </span><span class="default">$percent</span><span class="keyword">&lt;</span><span class="default">1</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$nw </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$percent</span><span class="keyword">);
<br />        </span><span class="default">$nh </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">*</span><span class="default">$percent</span><span class="keyword">);
<br />        </span><span class="default">$img_resized </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$nw</span><span class="keyword">,</span><span class="default">$nh</span><span class="keyword">);
<br />        if(</span><span class="default">$type</span><span class="keyword">==</span><span class="string">'image/png'</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">);
<br />            </span><span class="default">ImageSaveAlpha</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />        }
<br />        if(!empty(</span><span class="default">$transparent_color</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$transparent_new </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">,</span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">],</span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">],</span><span class="default">$transparent_color</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);
<br />            </span><span class="default">$transparent_new_index </span><span class="keyword">= </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">,</span><span class="default">$transparent_new</span><span class="keyword">);
<br />            </span><span class="default">ImageFill</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparent_new_index</span><span class="keyword">);
<br />        }
<br />        if(</span><span class="default">ImageCopyResized</span><span class="keyword">(</span><span class="default">$img_resized</span><span class="keyword">,</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$nw</span><span class="keyword">,</span><span class="default">$nh</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h </span><span class="keyword">))
<br />        {
<br />            </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />            </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$img_resized</span><span class="keyword">;
<br />            
<br />        }
<br />    }
<br />}
<br /></span><span class="default">$imgFunc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />P.S.
<br />The script can be written better (optimized etc.), but I hope you can do it by yourself.</span></code></div>
  </div>
 </div>
  <div class="note" id="52239">  <div class="votes">
    <div id="Vu52239">
    <a href="/manual/vote-note.php?id=52239&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52239">
    <a href="/manual/vote-note.php?id=52239&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52239" title="66% like this...">
    3
    </div>
  </div>
  <a href="#52239" class="name">
  <strong class="user"><em>development at lab-9 dot com</em></strong></a><a class="genanchor" href="#52239"> &para;</a><div class="date" title="2005-04-25 03:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52239">
<div class="phpcode"><code><span class="html">If you read your Imagedata from a Database Blob and use the functions from above to resize the image to a thumbnail improving a lot of traffic, you will have to make temporary copies of the files in order that the functions can access them<br /><br />Here a example:<br /><br />// switch through imagetypes<br />$extension = "jpg";<br />if(mysql_result($query, 0, 'type') == "image/pjpeg")<br />{ $extension = "jpg"; } // overwrite<br />else if(mysql_result($query, 0, 'type') == "image/gif")<br />{ $extension = "gif"; } // overwrite<br /><br />// get a temporary filename<br />// use microtime() to get a unique filename<br />// if you request more than one file f.e. by creating large numbers of thumbnails, the server could be not fast enough to save all these different files and you get duplicated copies and resizepics() will resize and output often the same content<br /><br />$filename = microtime()."_temp.".$extension;<br /><br />// open<br />$tempfile = fopen($filename, "w+");<br /><br />// write<br />fwrite($tempfile, mysql_result($query, 0, 'image'));<br /><br />// close<br />fclose($tempfile);<br /><br />// resize and output the content<br />echo resizepics($filename, '100', '70');<br /><br />// delete temporary file<br />unlink($filename);<br /><br />NOTE: this script has to be put into a file which sends correct header informations to the browser, otherwise you won't get more to see than a big red cross :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="68737">  <div class="votes">
    <div id="Vu68737">
    <a href="/manual/vote-note.php?id=68737&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68737">
    <a href="/manual/vote-note.php?id=68737&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68737" title="66% like this...">
    2
    </div>
  </div>
  <a href="#68737" class="name">
  <strong class="user"><em>hodgman at ali dot com dot au</em></strong></a><a class="genanchor" href="#68737"> &para;</a><div class="date" title="2006-08-08 04:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68737">
<div class="phpcode"><code><span class="html">Users of this function should be aware that this function can return false in certain circumstances! I am assuming this is an indicator of failure.<br /><br />None of the example code displayed in these notes takes this into account, so all of these examples contain weaknesses that could crash a program if not used with care.<br /><br />However, it is not documented what kinds situations will cause it to fail, and what side effects (if it is not atomic) occur if the operation fails, so we will have to wait for the documentation to be updated before this function can be used in rock-solid (crash-proof) code.<br /><br />[[I posted this information earlier, but I phrased it as a question so it was removed by the editors]]</span></code></div>
  </div>
 </div>
  <div class="note" id="9855">  <div class="votes">
    <div id="Vu9855">
    <a href="/manual/vote-note.php?id=9855&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9855">
    <a href="/manual/vote-note.php?id=9855&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9855" title="66% like this...">
    1
    </div>
  </div>
  <a href="#9855" class="name">
  <strong class="user"><em>skurrilo at skurrilo dot de</em></strong></a><a class="genanchor" href="#9855"> &para;</a><div class="date" title="2000-11-28 07:36"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9855">
<div class="phpcode"><code><span class="html">If you aren't happy with the quality of the resized images, just give ImageMagick a try. (<a href="http://www.imagemagick.org" rel="nofollow" target="_blank">http://www.imagemagick.org</a>) This is a commandline tool for converting and viewing images.</span></code></div>
  </div>
 </div>
  <div class="note" id="50019">  <div class="votes">
    <div id="Vu50019">
    <a href="/manual/vote-note.php?id=50019&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50019">
    <a href="/manual/vote-note.php?id=50019&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50019" title="54% like this...">
    4
    </div>
  </div>
  <a href="#50019" class="name">
  <strong class="user"><em>smelban at smwebdesigns dot com</em></strong></a><a class="genanchor" href="#50019"> &para;</a><div class="date" title="2005-02-15 08:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50019">
<div class="phpcode"><code><span class="html">Resize image proportionaly where you give a max width or max height<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br /></span><span class="comment">//$myimage = resizeImage('filename', 'newwidthmax', 'newheightmax');<br /></span><span class="default">$myimage </span><span class="keyword">= </span><span class="default">resizeImage</span><span class="keyword">(</span><span class="string">'test.jpg'</span><span class="keyword">, </span><span class="string">'150'</span><span class="keyword">, </span><span class="string">'120'</span><span class="keyword">);<br />print </span><span class="default">$myimage</span><span class="keyword">;<br /><br />function </span><span class="default">resizeImage</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">){<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    if(</span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">$height </span><span class="keyword">&amp;&amp; </span><span class="default">$newheight </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">){<br />        </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">/ (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$newwidth</span><span class="keyword">);<br />    } else if (</span><span class="default">$width </span><span class="keyword">&lt; </span><span class="default">$height </span><span class="keyword">&amp;&amp; </span><span class="default">$newwidth </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">) {<br />        </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">/ (</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$newheight</span><span class="keyword">);    <br />    } else {<br />        </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">;<br />        </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />    }<br />    </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">);<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    return </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55570">  <div class="votes">
    <div id="Vu55570">
    <a href="/manual/vote-note.php?id=55570&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55570">
    <a href="/manual/vote-note.php?id=55570&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55570" title="60% like this...">
    1
    </div>
  </div>
  <a href="#55570" class="name">
  <strong class="user"><em>mecdesign at hotmail dot com</em></strong></a><a class="genanchor" href="#55570"> &para;</a><div class="date" title="2005-08-07 02:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55570">
<div class="phpcode"><code><span class="html">This code will resize your images if your image needs to fit (without stretching) into a max height / width destination image that is not a 1:1 ratio (mine was 4:3).<br /><br />&lt;?<br />   // Ratios<br />   $image_ratio = $width / $height; // Actual image's ratio<br />   $destination_ratio = $max_width / $max_height; // Ratio of dest. placeholder<br />   <br />    // Taller<br />    if($image_ratio &lt; $destination_ratio)<br />    {<br />        //Too tall:<br />        if($height &gt; $max_height)<br />        {<br />            $height = $max_height;<br />            $width = ceil($height / $image_ratio);<br />        }<br />    }<br />    // Wider / balanced &amp; too wide:<br />    else if ($width &gt; $max_width)<br />    {<br />        $width = $max_width;<br />        $height = ceil($width / $image_ratio);<br />    }<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="52939">  <div class="votes">
    <div id="Vu52939">
    <a href="/manual/vote-note.php?id=52939&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52939">
    <a href="/manual/vote-note.php?id=52939&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52939" title="60% like this...">
    1
    </div>
  </div>
  <a href="#52939" class="name">
  <strong class="user"><em>no at name dot com</em></strong></a><a class="genanchor" href="#52939"> &para;</a><div class="date" title="2005-05-18 04:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52939">
<div class="phpcode"><code><span class="html">I was searching for script, that do not resize on the fly, but copy resized file to other place, so after long searches, i've done this function. I hope it will be usefull for someone:<br />(This is not original code, i'v taked it from somwhere and edited a ltl :)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">resize</span><span class="keyword">(</span><span class="default">$cur_dir</span><span class="keyword">, </span><span class="default">$cur_file</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$output_dir</span><span class="keyword">)<br />{<br />    </span><span class="default">$dir_name </span><span class="keyword">= </span><span class="default">$cur_dir</span><span class="keyword">;<br />    </span><span class="default">$olddir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir_name</span><span class="keyword">);<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$cur_file</span><span class="keyword">;<br />    </span><span class="default">$format</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">))<br />    {<br />        </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/jpeg'</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">))<br />    {<br />        </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/gif'</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.png/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">))<br />    {<br />        </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/png'</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">$format</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">)<br />    {<br />        list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />        </span><span class="default">$newheight</span><span class="keyword">=</span><span class="default">$height</span><span class="keyword">*</span><span class="default">$newwidth</span><span class="keyword">/</span><span class="default">$width</span><span class="keyword">;<br />        switch(</span><span class="default">$format</span><span class="keyword">)<br />        {<br />            case </span><span class="string">'image/jpeg'</span><span class="keyword">:<br />            </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            break;<br />            case </span><span class="string">'image/gif'</span><span class="keyword">;<br />            </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            break;<br />            case </span><span class="string">'image/png'</span><span class="keyword">:<br />            </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            break;<br />        }<br />        </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">,</span><span class="default">$newheight</span><span class="keyword">);<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />        </span><span class="default">$source </span><span class="keyword">= @</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />        </span><span class="default">$filename</span><span class="keyword">=</span><span class="string">"</span><span class="default">$output_dir</span><span class="string">/</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">;<br />        @</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>call this function using <br />&lt;?<br />resize("./input folder", "picture_file_name", "width", "./output folder");<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="55692">  <div class="votes">
    <div id="Vu55692">
    <a href="/manual/vote-note.php?id=55692&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55692">
    <a href="/manual/vote-note.php?id=55692&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55692" title="55% like this...">
    2
    </div>
  </div>
  <a href="#55692" class="name">
  <strong class="user"><em>FearINC at gmail dot com</em></strong></a><a class="genanchor" href="#55692"> &para;</a><div class="date" title="2005-08-10 10:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55692">
<div class="phpcode"><code><span class="html">I wrote a function not long ago that creates a thumbnail out of a large picture. Unlike other notes on this page, the code is a function so it can be used many times on the same script. The function allows the programer to set max height and width and resizes the picture proportionally.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">saveThumbnail</span><span class="keyword">(</span><span class="default">$saveToDir</span><span class="keyword">, </span><span class="default">$imagePath</span><span class="keyword">, </span><span class="default">$imageName</span><span class="keyword">, </span><span class="default">$max_x</span><span class="keyword">, </span><span class="default">$max_y</span><span class="keyword">) {<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"'^(.*)\.(gif|jpe?g|png)$'i"</span><span class="keyword">, </span><span class="default">$imageName</span><span class="keyword">, </span><span class="default">$ext</span><span class="keyword">);<br />    switch (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])) {<br />        case </span><span class="string">'jpg' </span><span class="keyword">: <br />        case </span><span class="string">'jpeg'</span><span class="keyword">: </span><span class="default">$im   </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg </span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">);<br />                     break;<br />        case </span><span class="string">'gif' </span><span class="keyword">: </span><span class="default">$im   </span><span class="keyword">= </span><span class="default">imagecreatefromgif  </span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">);<br />                     break;<br />        case </span><span class="string">'png' </span><span class="keyword">: </span><span class="default">$im   </span><span class="keyword">= </span><span class="default">imagecreatefrompng  </span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">);<br />                     break;<br />        default    : </span><span class="default">$stop </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                     break;<br />    }<br />    <br />    if (!isset(</span><span class="default">$stop</span><span class="keyword">)) {<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    <br />        if ((</span><span class="default">$max_x</span><span class="keyword">/</span><span class="default">$max_y</span><span class="keyword">) &lt; (</span><span class="default">$x</span><span class="keyword">/</span><span class="default">$y</span><span class="keyword">)) {<br />            </span><span class="default">$save </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">$max_x</span><span class="keyword">), </span><span class="default">$y</span><span class="keyword">/(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">$max_x</span><span class="keyword">));<br />        }<br />        else {<br />            </span><span class="default">$save </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/(</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$max_y</span><span class="keyword">), </span><span class="default">$y</span><span class="keyword">/(</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$max_y</span><span class="keyword">));<br />        }<br />        </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$save</span><span class="keyword">, </span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$save</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$save</span><span class="keyword">), </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />        <br />        </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$save</span><span class="keyword">, </span><span class="string">"</span><span class="keyword">{</span><span class="default">$saveToDir</span><span class="keyword">}{</span><span class="default">$ext</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]}</span><span class="string">.gif"</span><span class="keyword">);<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />        </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$save</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />the function for now takes only jpg,gif and png files, but that can easily be changed.<br />It's an easy to use easy to understand function and I hope it will come useful to someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="74084">  <div class="votes">
    <div id="Vu74084">
    <a href="/manual/vote-note.php?id=74084&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74084">
    <a href="/manual/vote-note.php?id=74084&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74084" title="55% like this...">
    1
    </div>
  </div>
  <a href="#74084" class="name">
  <strong class="user"><em>Halit Yesil mail at halityesil dot com</em></strong></a><a class="genanchor" href="#74084"> &para;</a><div class="date" title="2007-03-23 08:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74084">
<div class="phpcode"><code><span class="html">This Class image resize or crop,<br />your copyright text write on the image and your logo marge on the image.<br /><br />Full Class code =&gt; <a href="http://www.phpbuilder.com/snippet/download.php?type=snippet&amp;id=2188" rel="nofollow" target="_blank">http://www.phpbuilder.com/snippet/download.php?type=snippet&amp;id=2188</a><br />/**<br />     * Author         : Halit YESIL<br />     * www            : www.halityesil.com, www.prografik.net, www.trteknik.net<br />     * email        : mail@halityesil.com, halit.yesil@prografik.net, halit.yesil@trteknik.net<br />     * GSM            : +90.535 648 3504<br />     * Create Date    : 21 / 03 / 2007<br />     * <br />     * <br />     * Script        : Image resize and croping class. <br />     *                  You can Write copyright text and attach your logo write on image with this class<br />     * <br />     * <br />     * $obj = new pg_image($arg);<br />     *<br />     * <br />     * Varibles Information<br />     *         [0] type =&gt; (POST | FILE) =&gt; Source File Send Type _FILES OR Dir<br />     *         [1] file =&gt; ({if POST Array file = $_FILES['yourfile']}|{if FILE false}) =&gt; Source File filesource<br />     *         [2] path =&gt; ({if FILE String [ dirname/filename.extension ]}) =&gt; Source File Root Path<br />     *         [3] target =&gt; ({if FILE String [ dirname/filename.extension ]}) =&gt; Target File Root Path<br />     *         [4] width =&gt; (integer) =&gt; Target File Width<br />     *         [5] height =&gt; (integer) =&gt; Target File Height<br />     *         [6] quality =&gt; (integer 1 - 100) =&gt; Target File Quality 0-100 %<br />     *         [7] action =&gt; (crop | resize) =&gt; Target Action "resize" OR "crop"<br />     *         [8] bordersize =&gt; (integer 0-5) =&gt; Target Border Size<br />     *         [9] bordercolor =&gt; (color hex) =&gt; Target Border Color<br />     *         [10] bgcolor =&gt; (color hex) =&gt; Target Background Color<br />     *         [11] copytext =&gt; (String) =&gt; Copyright Content Text<br />     *         [12] copycolor =&gt; (color hex) =&gt; Copyright Text Color<br />     *         [13] copyshadow =&gt; (color hex) =&gt; Copyright Text Shadow color<br />     *         [14] copybgcolor =&gt; (color hex) =&gt; Copyright Background Color<br />     *         [15] copybgshadow =&gt; (color hex) =&gt; Copyright Background Shadow Color<br />     *         [16] copybordersize =&gt; (integer 0-5) =&gt; Copyright Border Size 1-3<br />     *         [17] copybordercolor =&gt; (color hex) =&gt; Copyright Border Color<br />     *      [18] copyposition =&gt; (top | topright | topleft | center | left | right | bottom | bottomright | bottomleft) =&gt; Copyright Position<br />     *         [19] logoposition =&gt; (top | topright | topleft | center | left | right | bottom | bottomright | bottomleft) =&gt; Logo Image Position<br />     *         [20] logoimage =&gt; (String [ dirname/filename.extension] Allow Extension (PNG | GIF | JPG)) =&gt; Logo Image Root Path "PNG" OR "GIF" OR "JPG"<br />     * <br />     * <br />     * <br />     * <br />     */<br /><br /><span class="default">&lt;?php<br /><br />$source </span><span class="keyword">= (</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'img'</span><span class="keyword">] != </span><span class="string">''</span><span class="keyword">)?</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'img'</span><span class="keyword">]:</span><span class="string">'braille3.jpg'</span><span class="keyword">;<br />    </span><span class="default">$arg </span><span class="keyword">=array(     </span><span class="default">type </span><span class="keyword">=&gt;</span><span class="string">'FILE'</span><span class="keyword">,<br />                    </span><span class="default">file </span><span class="keyword">=&gt;</span><span class="default">false</span><span class="keyword">,<br />                     </span><span class="default">path </span><span class="keyword">=&gt;</span><span class="default">$source</span><span class="keyword">,<br />                     </span><span class="default">target </span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">,<br />                     </span><span class="default">width </span><span class="keyword">=&gt;</span><span class="default">150</span><span class="keyword">,<br />                     </span><span class="default">height </span><span class="keyword">=&gt;</span><span class="default">50</span><span class="keyword">,<br />                     </span><span class="default">quality </span><span class="keyword">=&gt;</span><span class="default">80</span><span class="keyword">,<br />                     </span><span class="default">action </span><span class="keyword">=&gt;</span><span class="string">'resize'</span><span class="keyword">,<br />                     </span><span class="default">bordersize </span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">,<br />                     </span><span class="default">bordercolor </span><span class="keyword">=&gt;</span><span class="string">'#00CCFF'</span><span class="keyword">,<br />                     </span><span class="default">bgcolor </span><span class="keyword">=&gt;</span><span class="string">'#000000'</span><span class="keyword">,<br />                     </span><span class="default">copytext </span><span class="keyword">=&gt;</span><span class="string">'Bodrum 1998'</span><span class="keyword">,<br />                     </span><span class="default">copycolor </span><span class="keyword">=&gt;</span><span class="string">'#FFFFFF'</span><span class="keyword">,<br />                     </span><span class="comment">//copyshadow =&gt;'#000000',<br />                     //copybgcolor =&gt;'#D0FFCC',<br />                     //copybgshadow =&gt;'#656565',<br />                     </span><span class="default">copybordersize </span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">,<br />                     </span><span class="default">copybordercolor </span><span class="keyword">=&gt;</span><span class="string">'#FFFFFF'</span><span class="keyword">,<br />                     </span><span class="default">copyposition </span><span class="keyword">=&gt;</span><span class="string">'bottom'</span><span class="keyword">,<br />                     </span><span class="default">logoposition </span><span class="keyword">=&gt;</span><span class="string">'topleft'</span><span class="keyword">,<br />                     </span><span class="default">logoimage </span><span class="keyword">=&gt;</span><span class="string">'logo.png'</span><span class="keyword">);<br />    <br />    </span><span class="comment">//$arg = "$source,,400,300,80,resize";<br />    </span><span class="keyword">new </span><span class="default">pg_image</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49948">  <div class="votes">
    <div id="Vu49948">
    <a href="/manual/vote-note.php?id=49948&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49948">
    <a href="/manual/vote-note.php?id=49948&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49948" title="54% like this...">
    1
    </div>
  </div>
  <a href="#49948" class="name">
  <strong class="user"><em>finnsi at centrum dot is</em></strong></a><a class="genanchor" href="#49948"> &para;</a><div class="date" title="2005-02-13 05:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49948">
<div class="phpcode"><code><span class="html">If you need to delete or resize images in the filesystem (not in DB) without loosing the image quality...<br />I commented the code as much as possible so that newbies (like myself) will understand it.  ;)<br /><br /><span class="default">&lt;?php <br />    <br />    </span><span class="comment">/* <br />    <br />    WRITTEN BY:<br />    Finnur Eiriksson, (<a href="http://www.centrum.is/finnsi" rel="nofollow" target="_blank">http://www.centrum.is/finnsi</a>)<br />    Based on snippets that have been posted on www.PHP.net<br />    Drop me an e-mail if you have any questions.<br />    <br />    NOTE:<br />    This code is written to either delete or resize pictures in the file system, so if you have your pictures in a database<br />    you will have to make some changes. Also, if you are using other picture formats than .gif's or .jpg's you<br />    will have to add som code as well (Read the comments to find out where to do this).<br />    <br />    IMPORTANT:     <br />    The $_GET['resizepic'] variable only contains the NAME of the file that is going to be deleted/resized. <br />    <br />    The internet guest account (IUSR_SERVERNAME on WINDOWS) must have read and write permissions (execution permission not needed) <br />    in your image directory (i.e. $dir_name = "FooBar"). It is a good idea to have a separate directory for images that users <br />    can upload to and manipulate the contents. Ideally, you should have one directory for the pictures that are used for the website,<br />    and another upload directory <br />    <br />    */<br />     <br />    </span><span class="default">$dir_name </span><span class="keyword">= </span><span class="string">"FooBar"</span><span class="keyword">;  </span><span class="comment">// Enter the name of the directory that contains the images<br />    </span><span class="default">$olddir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();  </span><span class="comment">// Get the Current Windows Directory to be able to switch back in the end of the script<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir_name</span><span class="keyword">); </span><span class="comment">//make a directory handle<br />    //To delete a picture<br />    </span><span class="keyword">if(isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'delpic'</span><span class="keyword">])){ <br />        </span><span class="default">chdir</span><span class="keyword">(</span><span class="string">'images'</span><span class="keyword">);<br />        </span><span class="default">$delpic </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'delpic'</span><span class="keyword">];<br />        @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$delpic</span><span class="keyword">);<br />        </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$olddir</span><span class="keyword">);<br />    }<br />    </span><span class="comment">//To resize a picture<br />    </span><span class="keyword">if(isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'resize'</span><span class="keyword">])){<br />        </span><span class="comment">//$_GET['resize'] contains the resize-percentage (for example 80 and 40, for 80% and 40% respectively. To double the image in size the user enters 200 etc.)<br />        // File and new size<br />        </span><span class="default">$percent </span><span class="keyword">= (</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'resize'</span><span class="keyword">]/</span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">chdir</span><span class="keyword">(</span><span class="string">'images'</span><span class="keyword">);</span><span class="comment">// change the windows directory to the image directory<br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'resizepic'</span><span class="keyword">];<br />                <br />        </span><span class="comment">// Decide the content type, NB:This code is written to only execute on .gif's and .jpg's<br />        // If you want other formats than .gif's and .jpg's add your code here, in the same manner:<br />        </span><span class="default">$format</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">)){<br />            </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/jpeg'</span><span class="keyword">;<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />        }<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">)){<br />            </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'image/gif'</span><span class="keyword">;<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/gif'</span><span class="keyword">);<br />        }<br />        if(</span><span class="default">$format</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">){  </span><span class="comment">//This is where the actual resize process begins...<br />            // Get new sizes<br />            </span><span class="keyword">list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br />            </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br />            <br />            </span><span class="comment">// Load the image<br />            </span><span class="keyword">switch(</span><span class="default">$format</span><span class="keyword">){<br />                case </span><span class="string">'image/jpeg'</span><span class="keyword">:<br />                    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />                break;<br />                case </span><span class="string">'image/gif'</span><span class="keyword">;<br />                    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />                break;<br />            }<br />            </span><span class="comment">//Get the Image<br />            </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">,</span><span class="default">$newheight</span><span class="keyword">);<br />            </span><span class="comment">//This must be set to false in order to be able to overwrite the black <br />            //pixels in the background with transparent pixels. Otherwise the new <br />            //pixels would just be applied on top of the black background.<br />            </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />            </span><span class="comment">//Make a temporary file handle<br />            </span><span class="default">$source </span><span class="keyword">= @</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />            </span><span class="comment">// Resize<br />            </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />            </span><span class="comment">//Write the image to the destination file<br />            </span><span class="keyword">@</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">);<br />            </span><span class="comment">//Change back to the old directory... I'm not sure that this is neccessary<br />            </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$olddir</span><span class="keyword">);<br />            </span><span class="comment">//Specify where you want the user to go after the operation:<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: foobar.php'</span><span class="keyword">);<br />        }<br />    }<br />        <br />        <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88533">  <div class="votes">
    <div id="Vu88533">
    <a href="/manual/vote-note.php?id=88533&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88533">
    <a href="/manual/vote-note.php?id=88533&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88533" title="53% like this...">
    1
    </div>
  </div>
  <a href="#88533" class="name">
  <strong class="user"><em>david from quidware</em></strong></a><a class="genanchor" href="#88533"> &para;</a><div class="date" title="2009-01-28 12:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88533">
<div class="phpcode"><code><span class="html">If the script should resize and save thumb I use this simple code, I made a couple corrections from last one and added the possibility to resize to a max HEIGHT:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Make thumbs from JPEG, PNG, GIF source file<br /> *<br /> * $tmpname = $_FILES['source']['tmp_name'];   <br /> * $size - max width size<br /> * $save_dir - destination folder<br /> * $save_name - tnumb new name<br /> * $maxisheight - is max for width (if not is for height)<br /> *<br /> * Author:  David Taubmann <a href="http://www.quidware.com" rel="nofollow" target="_blank">http://www.quidware.com</a> (edited from LEDok - <a href="http://www.citadelavto.ru/" rel="nofollow" target="_blank">http://www.citadelavto.ru/</a>)<br /> */<br /> <br />/*/    // And now how using this function fast:<br />if ($_POST[pic])<br />    {<br />    $tmpname  = $_FILES['pic']['tmp_name'];<br />    @img_resize( $tmpname , 600 , "../album" , "album_".$id.".jpg");<br />    @img_resize( $tmpname , 120 , "../album" , "album_".$id."_small.jpg");<br />    @img_resize( $tmpname , 60 , "../album" , "album_".$id."_maxheight.jpg", 1);<br />    }<br />    else<br />    echo "No Images uploaded via POST";<br />/**/<br /><br /></span><span class="keyword">function </span><span class="default">img_resize</span><span class="keyword">( </span><span class="default">$tmpname</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$save_dir</span><span class="keyword">, </span><span class="default">$save_name</span><span class="keyword">, </span><span class="default">$maxisheight </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">)<br />    {<br />    </span><span class="default">$save_dir     </span><span class="keyword">.= ( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$save_dir</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">) != </span><span class="string">"/"</span><span class="keyword">) ? </span><span class="string">"/" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$gis        </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);<br />    </span><span class="default">$type        </span><span class="keyword">= </span><span class="default">$gis</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />    switch(</span><span class="default">$type</span><span class="keyword">)<br />        {<br />        case </span><span class="string">"1"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">); break;<br />        case </span><span class="string">"2"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);break;<br />        case </span><span class="string">"3"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">); break;<br />        default:  </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);<br />        }<br /><br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$imorig</span><span class="keyword">);<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$imorig</span><span class="keyword">);<br />        <br />        </span><span class="default">$woh </span><span class="keyword">= (!</span><span class="default">$maxisheight</span><span class="keyword">)? </span><span class="default">$gis</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] : </span><span class="default">$gis</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ;    <br />        <br />        if(</span><span class="default">$woh </span><span class="keyword">&lt;= </span><span class="default">$size</span><span class="keyword">)<br />        {<br />        </span><span class="default">$aw </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br />        </span><span class="default">$ah </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;<br />        }<br />            else<br />        {<br />            if(!</span><span class="default">$maxisheight</span><span class="keyword">){<br />                </span><span class="default">$aw </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />                </span><span class="default">$ah </span><span class="keyword">= </span><span class="default">$size </span><span class="keyword">* </span><span class="default">$y </span><span class="keyword">/ </span><span class="default">$x</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$aw </span><span class="keyword">= </span><span class="default">$size </span><span class="keyword">* </span><span class="default">$x </span><span class="keyword">/ </span><span class="default">$y</span><span class="keyword">;<br />                </span><span class="default">$ah </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />            }<br />        }   <br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$aw</span><span class="keyword">,</span><span class="default">$ah</span><span class="keyword">);<br />    if (</span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$imorig </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$aw</span><span class="keyword">,</span><span class="default">$ah</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">))<br />        if (</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$save_dir</span><span class="keyword">.</span><span class="default">$save_name</span><span class="keyword">))<br />            return </span><span class="default">true</span><span class="keyword">;<br />            else<br />            return </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50399">  <div class="votes">
    <div id="Vu50399">
    <a href="/manual/vote-note.php?id=50399&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50399">
    <a href="/manual/vote-note.php?id=50399&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50399" title="53% like this...">
    1
    </div>
  </div>
  <a href="#50399" class="name">
  <strong class="user"><em>haker4o at haker4o dot org</em></strong></a><a class="genanchor" href="#50399"> &para;</a><div class="date" title="2005-02-26 08:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50399">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//                      Resize image.<br />//             Writeen By: Smelban &amp; Haker4o <br />// Mails smelban@smwebdesigns.com &amp; Haker4o@Haker4o.org <br />// This code is written to only execute on  jpg,gif,png      <br />// $picname = resizepics('pics', 'new widthmax', 'new heightmax');<br />// Demo  $picname = resizepics('stihche.jpg', '180', '140');<br /></span><span class="default">$picname </span><span class="keyword">= </span><span class="default">resizepics</span><span class="keyword">(</span><span class="string">'picture-name.format'</span><span class="keyword">, </span><span class="string">'180'</span><span class="keyword">, </span><span class="string">'140'</span><span class="keyword">);<br />echo </span><span class="default">$pickname</span><span class="keyword">;<br /></span><span class="comment">//Error<br /></span><span class="keyword">die( </span><span class="string">"&lt;font color=\"#FF0066\"&gt;&lt;center&gt;&lt;b&gt;File not exists :(&lt;b&gt;&lt;/center&gt;&lt;/FONT&gt;"</span><span class="keyword">);<br /></span><span class="comment">//Funcion resizepics<br /></span><span class="keyword">function </span><span class="default">resizepics</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">){<br />     if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />           </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />     }<br />     if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />           </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/gif'</span><span class="keyword">);<br />     } <br />     list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />     if(</span><span class="default">$width </span><span class="keyword">&gt; </span><span class="default">$height </span><span class="keyword">&amp;&amp; </span><span class="default">$newheight </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">){<br />       </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">/ (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$newwidth</span><span class="keyword">);<br />     } else if (</span><span class="default">$width </span><span class="keyword">&lt; </span><span class="default">$height </span><span class="keyword">&amp;&amp; </span><span class="default">$newwidth </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">) {<br />       </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">/ (</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$newheight</span><span class="keyword">);    <br />     } else {<br />       </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">;<br />       </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpeg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpeg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">Imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.png/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$pics</span><span class="keyword">);<br />    }<br />    </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">);<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    return </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    return </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpeg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    return </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.jpeg/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    return </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.png/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    return </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.gif/i"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$pics</span><span class="string">"</span><span class="keyword">)){<br />    return </span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br />    }<br /> }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52541">  <div class="votes">
    <div id="Vu52541">
    <a href="/manual/vote-note.php?id=52541&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52541">
    <a href="/manual/vote-note.php?id=52541&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52541" title="52% like this...">
    1
    </div>
  </div>
  <a href="#52541" class="name">
  <strong class="user"><em>del at kartoon dot net</em></strong></a><a class="genanchor" href="#52541"> &para;</a><div class="date" title="2005-05-05 01:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52541">
<div class="phpcode"><code><span class="html">This snippet allows you to grab a thumbnail from the center of a large image.  This was used for a client photo gallery for art to give a teaser of the image to come (only a small portion).  You could get dynamic with this value.  I also put in a scaling factor in case you want to scale down first before chopping.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The file<br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">'moon.jpg'</span><span class="keyword">;<br /></span><span class="default">$percent </span><span class="keyword">= </span><span class="default">1.0</span><span class="keyword">; </span><span class="comment">// if you want to scale down first<br /></span><span class="default">$imagethumbsize </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">; </span><span class="comment">// thumbnail size (area cropped in middle of image)<br />// Content type<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br /><br /></span><span class="comment">// Get new dimensions<br /></span><span class="keyword">list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br /></span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">* </span><span class="default">$percent</span><span class="keyword">;<br /><br /></span><span class="comment">// Resample<br /></span><span class="default">$image_p </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$imagethumbsize </span><span class="keyword">, </span><span class="default">$imagethumbsize</span><span class="keyword">);  </span><span class="comment">// true color for best quality<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /><br /></span><span class="comment">// basically take this line and put in your versin the -($new_width/2) + ($imagethumbsize/2) &amp; -($new_height/2) + ($imagethumbsize/2) for<br />// the 2/3 position in the 3 and 4 place for imagecopyresampled<br />// -($new_width/2) + ($imagethumbsize/2)<br />// AND<br />// -($new_height/2) + ($imagethumbsize/2)<br />// are the trick<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, -(</span><span class="default">$new_width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$imagethumbsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), -(</span><span class="default">$new_height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$imagethumbsize</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width </span><span class="keyword">, </span><span class="default">$new_width </span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br /></span><span class="comment">// Output<br /><br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_p</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121081">  <div class="votes">
    <div id="Vu121081">
    <a href="/manual/vote-note.php?id=121081&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121081">
    <a href="/manual/vote-note.php?id=121081&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121081" title="100% like this...">
    1
    </div>
  </div>
  <a href="#121081" class="name">
  <strong class="user"><em>eslindsey at gmail dot com</em></strong></a><a class="genanchor" href="#121081"> &para;</a><div class="date" title="2017-05-15 08:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121081">
<div class="phpcode"><code><span class="html">I'm not sure why nworld3d at yahoo dot com's <a href="http://php.net/manual/en/function.imagecopyresized.php#69123" rel="nofollow" target="_blank">http://php.net/manual/en/function.imagecopyresized.php#69123</a> was downvoted--it was exactly what I was looking for to composite several alpha channel images, just like Photoshop. I needed to start with transparency and stack a few alpha images one after another on top of it. After mucking about with the built in PHP functions, I was worried that I would need to cheat by removing all the alpha and then using a transparent color in the end, but that would have looked different depending on what background I put it on top of. nworld3d at yahoo dot's comment saved me from having to go that route, and gets a +1 from me.</span></code></div>
  </div>
 </div>
  <div class="note" id="90651">  <div class="votes">
    <div id="Vu90651">
    <a href="/manual/vote-note.php?id=90651&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90651">
    <a href="/manual/vote-note.php?id=90651&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90651" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90651" class="name">
  <strong class="user"><em>kvslaap</em></strong></a><a class="genanchor" href="#90651"> &para;</a><div class="date" title="2009-05-02 07:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90651">
<div class="phpcode"><code><span class="html">this is a script which loops trough a directory that is currently set to "files" and resizes all images with respecting the image ratio
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//use this line if you get the error message of using too much memory (strip '//')
<br />//ini_set ( "memory_limit", "48M");
<br />
<br /></span><span class="default">$target_width </span><span class="keyword">= </span><span class="default">800</span><span class="keyword">;
<br /></span><span class="default">$target_height </span><span class="keyword">= </span><span class="default">600</span><span class="keyword">;
<br />
<br />if (</span><span class="default">ob_get_level</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">) </span><span class="default">ob_start</span><span class="keyword">();
<br />if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'files/'</span><span class="keyword">)) {
<br />  while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />    if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) {
<br />      </span><span class="default">$destination_path </span><span class="keyword">= </span><span class="string">'./files/'</span><span class="keyword">;
<br />      </span><span class="default">$target_path </span><span class="keyword">= </span><span class="default">$destination_path </span><span class="keyword">. </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />
<br />      </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$target_path</span><span class="keyword">);
<br />      </span><span class="default">$allowed_ext </span><span class="keyword">= </span><span class="string">"jpg, gif, png, bmp, jpeg, JPG"</span><span class="keyword">;
<br />      </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$extension</span><span class="keyword">[</span><span class="default">extension</span><span class="keyword">];
<br />      </span><span class="default">$allowed_paths </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">", "</span><span class="keyword">, </span><span class="default">$allowed_ext</span><span class="keyword">);
<br />      </span><span class="default">$ok </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />      for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$allowed_paths</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />        if (</span><span class="default">$allowed_paths</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="string">"</span><span class="default">$extension</span><span class="string">"</span><span class="keyword">) {
<br />          </span><span class="default">$ok </span><span class="keyword">= </span><span class="string">"1"</span><span class="keyword">;
<br />        }
<br />      }
<br />
<br />      if (</span><span class="default">$ok </span><span class="keyword">== </span><span class="string">"1"</span><span class="keyword">) {
<br />
<br />        if(</span><span class="default">$extension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">|| </span><span class="default">$extension </span><span class="keyword">== </span><span class="string">"jpeg" </span><span class="keyword">|| </span><span class="default">$extension </span><span class="keyword">== </span><span class="string">"JPG"</span><span class="keyword">){
<br />          </span><span class="default">$tmp_image</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$target_path</span><span class="keyword">);
<br />        }
<br />
<br />        if(</span><span class="default">$extension </span><span class="keyword">== </span><span class="string">"png"</span><span class="keyword">) {
<br />          </span><span class="default">$tmp_image</span><span class="keyword">=</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$target_path</span><span class="keyword">);
<br />        }
<br />
<br />        if(</span><span class="default">$extension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">) {
<br />          </span><span class="default">$tmp_image</span><span class="keyword">=</span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$target_path</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$tmp_image</span><span class="keyword">);
<br />        </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$tmp_image</span><span class="keyword">);
<br />
<br />        </span><span class="comment">//calculate the image ratio
<br />        </span><span class="default">$imgratio </span><span class="keyword">= (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$height</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">$imgratio</span><span class="keyword">&gt;</span><span class="default">1</span><span class="keyword">) {
<br />          </span><span class="default">$new_width </span><span class="keyword">= </span><span class="default">$target_width</span><span class="keyword">;
<br />          </span><span class="default">$new_height </span><span class="keyword">= (</span><span class="default">$target_width </span><span class="keyword">/ </span><span class="default">$imgratio</span><span class="keyword">);
<br />        } else {
<br />          </span><span class="default">$new_height </span><span class="keyword">= </span><span class="default">$target_height</span><span class="keyword">;
<br />          </span><span class="default">$new_width </span><span class="keyword">= (</span><span class="default">$target_height </span><span class="keyword">* </span><span class="default">$imgratio</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="default">$new_image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$new_width</span><span class="keyword">,</span><span class="default">$new_height</span><span class="keyword">);
<br />        </span><span class="default">ImageCopyResized</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$tmp_image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_width</span><span class="keyword">, </span><span class="default">$new_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);
<br />        </span><span class="comment">//Grab new image
<br />        </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">, </span><span class="default">$target_path</span><span class="keyword">);
<br />        </span><span class="default">$image_buffer </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$new_image</span><span class="keyword">);
<br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$tmp_image</span><span class="keyword">);
<br />        echo </span><span class="string">" </span><span class="default">$file</span><span class="string"> resized to </span><span class="default">$new_width</span><span class="string"> x </span><span class="default">$new_height</span><span class="string"> &lt;br&gt; \n"</span><span class="keyword">;
<br />        echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;  
<br />        </span><span class="default">ob_flush</span><span class="keyword">();
<br />        </span><span class="default">flush</span><span class="keyword">();
<br />      }
<br />    }
<br />  }
<br />  </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />  echo </span><span class="string">"Done."</span><span class="keyword">;
<br />  </span><span class="default">ob_end_flush</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85152">  <div class="votes">
    <div id="Vu85152">
    <a href="/manual/vote-note.php?id=85152&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85152">
    <a href="/manual/vote-note.php?id=85152&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85152" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85152" class="name">
  <strong class="user"><em>it at chmzap dot ru</em></strong></a><a class="genanchor" href="#85152"> &para;</a><div class="date" title="2008-08-17 10:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85152">
<div class="phpcode"><code><span class="html">If the script should resize and save thumb I use this simple code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Make thumbs from JPEG, PNG, GIF source file
<br /> *
<br /> * $tmpname = $_FILES['source']['tmp_name'];    
<br /> * $size - max width size
<br /> * $save_dir - destination folder
<br /> * $save_name - tnumb new name
<br /> * 
<br /> * Author:  LEDok - <a href="http://www.citadelavto.ru/" rel="nofollow" target="_blank">http://www.citadelavto.ru/</a>
<br /> */
<br />
<br /></span><span class="keyword">function </span><span class="default">img_resize</span><span class="keyword">( </span><span class="default">$tmpname</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$save_dir</span><span class="keyword">, </span><span class="default">$save_name </span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$save_dir </span><span class="keyword">.= ( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$save_dir</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">) != </span><span class="string">"/"</span><span class="keyword">) ? </span><span class="string">"/" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">;
<br />        </span><span class="default">$gis       </span><span class="keyword">= </span><span class="default">GetImageSize</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);
<br />    </span><span class="default">$type       </span><span class="keyword">= </span><span class="default">$gis</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />    switch(</span><span class="default">$type</span><span class="keyword">)
<br />        {
<br />        case </span><span class="string">"1"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">); break;
<br />        case </span><span class="string">"2"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);break;
<br />        case </span><span class="string">"3"</span><span class="keyword">: </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">); break;
<br />        default:  </span><span class="default">$imorig </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$tmpname</span><span class="keyword">);
<br />        } 
<br />
<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$imorig</span><span class="keyword">);
<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$imorig</span><span class="keyword">);
<br />        if(</span><span class="default">$gis</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt;= </span><span class="default">$size</span><span class="keyword">)
<br />        {
<br />        </span><span class="default">$av </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;
<br />        </span><span class="default">$ah </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;
<br />        }
<br />            else
<br />        {
<br />            </span><span class="default">$yc </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">*</span><span class="default">1.3333333</span><span class="keyword">;
<br />            </span><span class="default">$d </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">&gt;</span><span class="default">$yc</span><span class="keyword">?</span><span class="default">$x</span><span class="keyword">:</span><span class="default">$yc</span><span class="keyword">;
<br />            </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">&gt;</span><span class="default">$size </span><span class="keyword">? </span><span class="default">$size</span><span class="keyword">/</span><span class="default">$d </span><span class="keyword">: </span><span class="default">$size</span><span class="keyword">;
<br />              </span><span class="default">$av </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">*</span><span class="default">$c</span><span class="keyword">;        </span><span class="comment">//высота исходной картинки
<br />              </span><span class="default">$ah </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">*</span><span class="default">$c</span><span class="keyword">;        </span><span class="comment">//длина исходной картинки
<br />        </span><span class="keyword">}    
<br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$av</span><span class="keyword">, </span><span class="default">$ah</span><span class="keyword">);
<br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$av</span><span class="keyword">,</span><span class="default">$ah</span><span class="keyword">);
<br />    if (</span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$imorig </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$av</span><span class="keyword">,</span><span class="default">$ah</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">))
<br />        if (</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$save_dir</span><span class="keyword">.</span><span class="default">$save_name</span><span class="keyword">))
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />            else
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />And now how using this function fast
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">pic</span><span class="keyword">])
<br />{
<br /></span><span class="default">$tmpname  </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'pic'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">];
<br />@</span><span class="default">img_resize</span><span class="keyword">( </span><span class="default">$tmpname </span><span class="keyword">, </span><span class="default">600 </span><span class="keyword">, </span><span class="string">"../album" </span><span class="keyword">, </span><span class="string">"album_"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">".jpg"</span><span class="keyword">);
<br />@</span><span class="default">img_resize</span><span class="keyword">( </span><span class="default">$tmpname </span><span class="keyword">, </span><span class="default">120 </span><span class="keyword">, </span><span class="string">"../album" </span><span class="keyword">, </span><span class="string">"album_"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">"_small.jpg"</span><span class="keyword">);
<br />@</span><span class="default">img_resize</span><span class="keyword">( </span><span class="default">$tmpname </span><span class="keyword">, </span><span class="default">60 </span><span class="keyword">, </span><span class="string">"../album" </span><span class="keyword">, </span><span class="string">"album_"</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">"verysmall.jpg"</span><span class="keyword">);
<br />}
<br />else
<br />echo </span><span class="string">"No Images uploaded via POST"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78482">  <div class="votes">
    <div id="Vu78482">
    <a href="/manual/vote-note.php?id=78482&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78482">
    <a href="/manual/vote-note.php?id=78482&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78482" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78482" class="name">
  <strong class="user"><em>andrvm at andrvm dot ru</em></strong></a><a class="genanchor" href="#78482"> &para;</a><div class="date" title="2007-10-14 04:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78482">
<div class="phpcode"><code><span class="html">One more version of setMemoryForImage (see below)
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">setMemoryForImage</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)
<br />{
<br />   </span><span class="default">$imageInfo    </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br />   </span><span class="default">$memoryNeeded </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$imageInfo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">$imageInfo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$imageInfo</span><span class="keyword">[</span><span class="string">'bits'</span><span class="keyword">] * </span><span class="default">$imageInfo</span><span class="keyword">[</span><span class="string">'channels'</span><span class="keyword">] / </span><span class="default">8 </span><span class="keyword">+ </span><span class="default">Pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">)) * </span><span class="default">1.65</span><span class="keyword">);
<br />   
<br />   </span><span class="default">$memoryLimit </span><span class="keyword">= (int) </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">)*</span><span class="default">1048576</span><span class="keyword">;
<br />
<br />  if ((</span><span class="default">memory_get_usage</span><span class="keyword">() + </span><span class="default">$memoryNeeded</span><span class="keyword">) &gt; </span><span class="default">$memoryLimit</span><span class="keyword">)
<br />   {
<br />     </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">memory_get_usage</span><span class="keyword">() + </span><span class="default">$memoryNeeded </span><span class="keyword">+ </span><span class="default">$memoryLimit</span><span class="keyword">)/</span><span class="default">1048576</span><span class="keyword">).</span><span class="string">'M'</span><span class="keyword">);
<br />     return (</span><span class="default">true</span><span class="keyword">);
<br />   }
<br />   else return(</span><span class="default">false</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>//work's it. no problem!</span></code></div>
  </div>
 </div>
  <div class="note" id="71182">  <div class="votes">
    <div id="Vu71182">
    <a href="/manual/vote-note.php?id=71182&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71182">
    <a href="/manual/vote-note.php?id=71182&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71182" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71182" class="name">
  <strong class="user"><em>feip at feip dot net</em></strong></a><a class="genanchor" href="#71182"> &para;</a><div class="date" title="2006-11-15 04:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71182">
<div class="phpcode"><code><span class="html">This code convert images to thumbs. <br />How he work - <br />Check source image - Width and Height, <br />crop a maximum from original image,<br />resize croped to user defined size<br /><br />// makeIcons_MergeCenter($src, $dst, $dstx, $dsty);<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">makeIcons_MergeCenter</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">, </span><span class="default">$dstx</span><span class="keyword">, </span><span class="default">$dsty</span><span class="keyword">){<br /><br /></span><span class="comment">//$src = original image location<br />//$dst = destination image location<br />//$dstx = user defined width of image<br />//$dsty = user defined height of image<br /><br /></span><span class="default">$allowedExtensions </span><span class="keyword">= </span><span class="string">'jpg jpeg gif png'</span><span class="keyword">;<br /><br /></span><span class="default">$name </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">);<br /></span><span class="default">$currentExtensions </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br /></span><span class="default">$extensions </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$allowedExtensions</span><span class="keyword">);<br /><br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$extensions</span><span class="keyword">)&gt;</span><span class="default">$i</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">){<br />if(</span><span class="default">$extensions</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="default">$currentExtensions</span><span class="keyword">)<br />{ </span><span class="default">$extensionOK</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; <br /></span><span class="default">$fileExtension</span><span class="keyword">=</span><span class="default">$extensions</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]; <br />break; }<br />}<br /><br />if(</span><span class="default">$extensionOK</span><span class="keyword">){<br /><br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">getImageSize</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br />if(</span><span class="default">$width </span><span class="keyword">&gt;= </span><span class="default">$dstx </span><span class="keyword">AND </span><span class="default">$height </span><span class="keyword">&gt;= </span><span class="default">$dsty</span><span class="keyword">){<br /><br /></span><span class="default">$proportion_X </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$dstx</span><span class="keyword">;<br /></span><span class="default">$proportion_Y </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$dsty</span><span class="keyword">;<br /><br />if(</span><span class="default">$proportion_X </span><span class="keyword">&gt; </span><span class="default">$proportion_Y </span><span class="keyword">){<br /></span><span class="default">$proportion </span><span class="keyword">= </span><span class="default">$proportion_Y</span><span class="keyword">;<br />}else{<br /></span><span class="default">$proportion </span><span class="keyword">= </span><span class="default">$proportion_X </span><span class="keyword">;<br />}<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">] = </span><span class="default">$dstx </span><span class="keyword">* </span><span class="default">$proportion</span><span class="keyword">;<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">] = </span><span class="default">$dsty </span><span class="keyword">* </span><span class="default">$proportion</span><span class="keyword">;<br /><br /></span><span class="default">$original</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">] = <br /></span><span class="default">round</span><span class="keyword">(</span><span class="default">sqrt</span><span class="keyword">((</span><span class="default">$width</span><span class="keyword">*</span><span class="default">$width</span><span class="keyword">)+(</span><span class="default">$height</span><span class="keyword">*</span><span class="default">$height</span><span class="keyword">))/</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">] = <br /></span><span class="default">round</span><span class="keyword">(</span><span class="default">sqrt</span><span class="keyword">((</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">]*</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">])+<br />(</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">]*</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">]))/</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">$crop </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$original</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">] - </span><span class="default">$target</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">]);<br /><br />if(</span><span class="default">$proportion_X </span><span class="keyword">&lt; </span><span class="default">$proportion_Y </span><span class="keyword">){<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">] = </span><span class="default">round</span><span class="keyword">(((</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)*</span><span class="default">$crop</span><span class="keyword">)/</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">]);<br />}else{<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] =  </span><span class="default">round</span><span class="keyword">(((</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)*</span><span class="default">$crop</span><span class="keyword">)/</span><span class="default">$target</span><span class="keyword">[</span><span class="string">'diagonal_center'</span><span class="keyword">]);<br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />}<br /><br />if(</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">OR </span><span class="default">$fileExtension</span><span class="keyword">==</span><span class="string">'jpeg'</span><span class="keyword">){ <br /></span><span class="default">$from </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); <br />}elseif (</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){ <br /></span><span class="default">$from </span><span class="keyword">= </span><span class="default">ImageCreateFromGIF</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">); <br />}elseif (</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">'png'</span><span class="keyword">){<br /> </span><span class="default">$from </span><span class="keyword">= </span><span class="default">imageCreateFromPNG</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$new </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor </span><span class="keyword">(</span><span class="default">$dstx</span><span class="keyword">,</span><span class="default">$dsty</span><span class="keyword">);<br /><br /></span><span class="default">imagecopyresampled </span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">,  </span><span class="default">$from</span><span class="keyword">,  </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">], <br /></span><span class="default">$target</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">], </span><span class="default">$dstx</span><span class="keyword">, </span><span class="default">$dsty</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">], </span><span class="default">$target</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">]);<br /><br /> if(</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">"jpg" </span><span class="keyword">OR </span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">'jpeg'</span><span class="keyword">){ <br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">, </span><span class="default">70</span><span class="keyword">); <br />}elseif (</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">"gif"</span><span class="keyword">){ <br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">); <br />}elseif (</span><span class="default">$fileExtension </span><span class="keyword">== </span><span class="string">'png'</span><span class="keyword">){<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">);<br />}<br />}<br />}<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69699">  <div class="votes">
    <div id="Vu69699">
    <a href="/manual/vote-note.php?id=69699&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69699">
    <a href="/manual/vote-note.php?id=69699&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69699" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69699" class="name">
  <strong class="user"><em>kyle dot florence at gmail dot com</em></strong></a><a class="genanchor" href="#69699"> &para;</a><div class="date" title="2006-09-15 06:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69699">
<div class="phpcode"><code><span class="html">The function below will resize an image based on max width and height, then it will create a thumbnail image from the center of the resized image of a width and height specified.  This function will not resize the image to max_w pixels by max_h pixels, those are only the max width's and heights the image can be, it resizes the image to the first 1:1 ratio below max_w and max_h.<br /><br />For example, if you have an image that is 800x600 and you specify your new image to be 400x200, it will resize based on the smallest number (in this case 200) and maintain the images 1:1 ratio.  So your final image would end up at something like 262x200.<br /><br />UPDATE:  I have updated this function, I added the 'newdir' option in case you want the images saved in a different directory than the script.  I also fixed the thumbnail slice so it is perfectly in the center now and fixed the bug that 'ob at babcom dot biz' mentioned so you can safely resize based on width or height now.<br /><br />&lt;?<br />/**********************************************************<br /> * function resizejpeg:<br /> *<br /> *  = creates a resized image based on the max width<br /> *    specified as well as generates a thumbnail from<br /> *    a rectangle cut from the middle of the image.<br /> *<br /> *    @dir    = directory image is stored in<br /> *    @newdir = directory new image will be stored in<br /> *    @img    = the image name<br /> *    @max_w  = the max width of the resized image<br /> *    @max_h  = the max height of the resized image<br /> *    @th_w   = the width of the thumbnail<br /> *    @th_h   = the height of the thumbnail<br /> *<br /> **********************************************************/<br /><br />function resizejpeg($dir, $newdir, $img, $max_w, $max_h, $th_w, $th_h)<br />{<br />    // set destination directory<br />    if (!$newdir) $newdir = $dir;<br /><br />    // get original images width and height<br />    list($or_w, $or_h, $or_t) = getimagesize($dir.$img);<br /><br />    // make sure image is a jpeg<br />    if ($or_t == 2) {<br />    <br />        // obtain the image's ratio<br />        $ratio = ($or_h / $or_w);<br /><br />        // original image<br />        $or_image = imagecreatefromjpeg($dir.$img);<br /><br />        // resize image?<br />        if ($or_w &gt; $max_w || $or_h &gt; $max_h) {<br /><br />            // resize by height, then width (height dominant)<br />            if ($max_h &lt; $max_w) {<br />                $rs_h = $max_h;<br />                $rs_w = $rs_h / $ratio;<br />            }<br />            // resize by width, then height (width dominant)<br />            else {<br />                $rs_w = $max_w;<br />                $rs_h = $ratio * $rs_w;<br />            }<br /><br />            // copy old image to new image<br />            $rs_image = imagecreatetruecolor($rs_w, $rs_h);<br />            imagecopyresampled($rs_image, $or_image, 0, 0, 0, 0, $rs_w, $rs_h, $or_w, $or_h);<br />        }<br />        // image requires no resizing<br />        else {<br />            $rs_w = $or_w;<br />            $rs_h = $or_h;<br /><br />            $rs_image = $or_image;<br />        }<br /><br />        // generate resized image<br />        imagejpeg($rs_image, $newdir.$img, 100);<br /><br />        $th_image = imagecreatetruecolor($th_w, $th_h);<br /><br />        // cut out a rectangle from the resized image and store in thumbnail<br />        $new_w = (($rs_w / 2) - ($th_w / 2));<br />        $new_h = (($rs_h / 2) - ($th_h / 2));<br /><br />        imagecopyresized($th_image, $rs_image, 0, 0, $new_w, $new_h, $rs_w, $rs_h, $rs_w, $rs_h);<br /><br />        // generate thumbnail<br />        imagejpeg($th_image, $newdir.'thumb_'.$img, 100);<br /><br />        return true;<br />    } <br /><br />    // Image type was not jpeg!<br />    else {<br />        return false;<br />    }<br />}<br />?&gt;<br /><br />Example:<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="string">'./'</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="string">'test.jpg'</span><span class="keyword">;<br /><br /></span><span class="default">resizejpeg</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">600</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The example would resize the image 'test.jpg' into something 600x400 or less (retains the 1:1 ratio of the image) and creates the file 'thumb_test.jpg' at 300x150.</span></code></div>
  </div>
 </div>
  <div class="note" id="68631">  <div class="votes">
    <div id="Vu68631">
    <a href="/manual/vote-note.php?id=68631&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68631">
    <a href="/manual/vote-note.php?id=68631&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68631" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68631" class="name">
  <strong class="user"><em>kyle(dot)florence(_[at]_)gmail(dot)com</em></strong></a><a class="genanchor" href="#68631"> &para;</a><div class="date" title="2006-08-03 06:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68631">
<div class="phpcode"><code><span class="html">The function below will resize an image based on max width and height, then it will create a thumbnail image from the center of the resized image of a width and height specified.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**********************************************************<br /> * function resizejpeg:<br /> *<br /> *  = creates a resized image based on the max width<br /> *    specified as well as generates a thumbnail from<br /> *    a rectangle cut from the middle of the image.<br /> *<br /> *    @dir   = directory image is stored in<br /> *    @img   = the image name<br /> *    @max_w = the max width of the resized image<br /> *    @max_h = the max height of the resized image<br /> *    @th_w  = the width of the thumbnail<br /> *    @th_h  = the height of the thumbnail<br /> *<br /> **********************************************************/<br /><br /></span><span class="keyword">function </span><span class="default">resizejpeg</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$max_w</span><span class="keyword">, </span><span class="default">$max_h</span><span class="keyword">, </span><span class="default">$th_w</span><span class="keyword">, </span><span class="default">$th_h</span><span class="keyword">)<br />{<br />    </span><span class="comment">// get original images width and height<br />    </span><span class="keyword">list(</span><span class="default">$or_w</span><span class="keyword">, </span><span class="default">$or_h</span><span class="keyword">, </span><span class="default">$or_t</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$img</span><span class="keyword">);<br /><br />    </span><span class="comment">// make sure image is a jpeg<br />    </span><span class="keyword">if (</span><span class="default">$or_t </span><span class="keyword">== </span><span class="default">2</span><span class="keyword">) {<br />    <br />        </span><span class="comment">// obtain the image's ratio<br />        </span><span class="default">$ratio </span><span class="keyword">= (</span><span class="default">$or_h </span><span class="keyword">/ </span><span class="default">$or_w</span><span class="keyword">);<br /><br />        </span><span class="comment">// original image<br />        </span><span class="default">$or_image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$img</span><span class="keyword">);<br /><br />        </span><span class="comment">// resize image<br />        </span><span class="keyword">if (</span><span class="default">$or_w </span><span class="keyword">&gt; </span><span class="default">$max_w </span><span class="keyword">|| </span><span class="default">$or_h </span><span class="keyword">&gt; </span><span class="default">$max_h</span><span class="keyword">) {<br /><br />            </span><span class="comment">// first resize by width (less than $max_w)<br />            </span><span class="keyword">if (</span><span class="default">$or_w </span><span class="keyword">&gt; </span><span class="default">$max_w</span><span class="keyword">) {<br />                </span><span class="default">$rs_w </span><span class="keyword">= </span><span class="default">$max_w</span><span class="keyword">;<br />                </span><span class="default">$rs_h </span><span class="keyword">= </span><span class="default">$ratio </span><span class="keyword">* </span><span class="default">$max_h</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$rs_w </span><span class="keyword">= </span><span class="default">$or_w</span><span class="keyword">;<br />                </span><span class="default">$rs_h </span><span class="keyword">= </span><span class="default">$or_h</span><span class="keyword">;<br />            }<br /><br />            </span><span class="comment">// then resize by height (less than $max_h)<br />            </span><span class="keyword">if (</span><span class="default">$rs_h </span><span class="keyword">&gt; </span><span class="default">$max_h</span><span class="keyword">) {<br />                </span><span class="default">$rs_w </span><span class="keyword">= </span><span class="default">$max_w </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">;<br />                </span><span class="default">$rs_h </span><span class="keyword">= </span><span class="default">$max_h</span><span class="keyword">;<br />            }<br /><br />            </span><span class="comment">// copy old image to new image<br />            </span><span class="default">$rs_image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$rs_w</span><span class="keyword">, </span><span class="default">$rs_h</span><span class="keyword">);<br />            </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$rs_image</span><span class="keyword">, </span><span class="default">$or_image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$rs_w</span><span class="keyword">, </span><span class="default">$rs_h</span><span class="keyword">, </span><span class="default">$or_w</span><span class="keyword">, </span><span class="default">$or_h</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$rs_w </span><span class="keyword">= </span><span class="default">$or_w</span><span class="keyword">;<br />            </span><span class="default">$rs_h </span><span class="keyword">= </span><span class="default">$or_h</span><span class="keyword">;<br /><br />            </span><span class="default">$rs_image </span><span class="keyword">= </span><span class="default">$or_image</span><span class="keyword">;<br />        }<br />    <br />        </span><span class="comment">// generate resized image<br />        </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$rs_image</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$img</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /><br />        </span><span class="default">$th_image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$th_w</span><span class="keyword">, </span><span class="default">$th_h</span><span class="keyword">);<br /><br />        </span><span class="comment">// cut out a rectangle from the resized image and store in thumbnail<br />        </span><span class="default">$new_w </span><span class="keyword">= ((</span><span class="default">$rs_w </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">));<br />        </span><span class="default">$new_h </span><span class="keyword">= ((</span><span class="default">$rs_h </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">));<br /><br />        </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$th_image</span><span class="keyword">, </span><span class="default">$rs_image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_w</span><span class="keyword">, </span><span class="default">$new_h</span><span class="keyword">, </span><span class="default">$rs_w</span><span class="keyword">, </span><span class="default">$rs_h</span><span class="keyword">, </span><span class="default">$rs_w</span><span class="keyword">, </span><span class="default">$rs_h</span><span class="keyword">);<br /><br />        </span><span class="comment">// generate thumbnail<br />        </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$th_image</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'thumb_'</span><span class="keyword">.</span><span class="default">$img</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /><br />        return </span><span class="default">true</span><span class="keyword">;<br />    } <br />    <br />    </span><span class="comment">// Image type was not jpeg!<br />    </span><span class="keyword">else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="string">'./'</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="string">'test.jpg'</span><span class="keyword">;<br /><br /></span><span class="default">resizejpeg</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">600</span><span class="keyword">, </span><span class="default">600</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The example would resize the image 'test.jpg' into something 600x600 or less (1:1 ratio) and create the file 'thumb_test.jpg' at 300x150.</span></code></div>
  </div>
 </div>
  <div class="note" id="64830">  <div class="votes">
    <div id="Vu64830">
    <a href="/manual/vote-note.php?id=64830&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64830">
    <a href="/manual/vote-note.php?id=64830&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64830" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64830" class="name">
  <strong class="user"><em>06madsenl at westseneca dot wnyric dot org</em></strong></a><a class="genanchor" href="#64830"> &para;</a><div class="date" title="2006-04-21 06:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64830">
<div class="phpcode"><code><span class="html">I was fiddling with this a few days trying to figure out how to resize the original images on my website, but this site:<br /><br /><a href="http://www.sitepoint.com/article/image-resizing-php" rel="nofollow" target="_blank">http://www.sitepoint.com/article/image-resizing-php</a><br /><br />Has a great tutorial on using PHP to resize images without creating thumbnails.  It was exactly what I was looking to do.</span></code></div>
  </div>
 </div>
  <div class="note" id="61962">  <div class="votes">
    <div id="Vu61962">
    <a href="/manual/vote-note.php?id=61962&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61962">
    <a href="/manual/vote-note.php?id=61962&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61962" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61962" class="name">
  <strong class="user"><em>konteineris at yahoo dot com</em></strong></a><a class="genanchor" href="#61962"> &para;</a><div class="date" title="2006-02-15 06:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61962">
<div class="phpcode"><code><span class="html">Function creates a thumbnail from the source image, resizes it so that it fits the desired thumb width and height or fills it grabbing maximum image part and resizing it, and lastly writes it to destination<br /><br />&lt;?<br /><br />function thumb($filename, $destination, $th_width, $th_height, $forcefill)<br />{    <br />   list($width, $height) = getimagesize($filename);<br /><br />   $source = imagecreatefromjpeg($filename);<br /><br />   if($width &gt; $th_width || $height &gt; $th_height){<br />      $a = $th_width/$th_height;<br />      $b = $width/$height;<br /><br />      if(($a &gt; $b)^$forcefill)<br />      {<br />         $src_rect_width  = $a * $height;<br />         $src_rect_height = $height;<br />         if(!$forcefill)<br />         {<br />            $src_rect_width = $width;<br />            $th_width = $th_height/$height*$width;<br />         }<br />      }<br />      else<br />      {<br />         $src_rect_height = $width/$a;<br />         $src_rect_width  = $width;<br />         if(!$forcefill)<br />         {<br />            $src_rect_height = $height;<br />            $th_height = $th_width/$width*$height;<br />         }<br />      }<br /><br />      $src_rect_xoffset = ($width - $src_rect_width)/2*intval($forcefill);<br />      $src_rect_yoffset = ($height - $src_rect_height)/2*intval($forcefill);<br /><br />      $thumb  = imagecreatetruecolor($th_width, $th_height);<br />      imagecopyresized($thumb, $source, 0, 0, $src_rect_xoffset, $src_rect_yoffset, $th_width, $th_height, $src_rect_width, $src_rect_height);<br /><br />      imagejpeg($thumb,$destination);<br />   }<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="48155">  <div class="votes">
    <div id="Vu48155">
    <a href="/manual/vote-note.php?id=48155&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48155">
    <a href="/manual/vote-note.php?id=48155&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48155" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48155" class="name">
  <strong class="user"><em>backglancer at hotmail</em></strong></a><a class="genanchor" href="#48155"> &para;</a><div class="date" title="2004-12-13 07:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48155">
<div class="phpcode"><code><span class="html">Neat script to create a thumbnails no larger than 150 (or user-specific) height AND width.<br /><br /><span class="default">&lt;?PHP<br />$picture </span><span class="keyword">=</span><span class="string">"" </span><span class="comment"># picture fileNAME here. not address<br /></span><span class="default">$max</span><span class="keyword">=</span><span class="default">150</span><span class="keyword">;    </span><span class="comment"># maximum size of 1 side of the picture.<br />/*<br />here you can insert any specific "if-else",<br />or "switch" type of detector of what type of picture this is.<br />in this example i'll use standard JPG<br />*/<br /><br /></span><span class="default">$src_img</span><span class="keyword">=</span><span class="default">ImagecreateFromJpeg</span><span class="keyword">(</span><span class="default">$picture</span><span class="keyword">);<br /><br /></span><span class="default">$oh </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);  </span><span class="comment"># original height<br /></span><span class="default">$ow </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">);  </span><span class="comment"># original width<br /><br /></span><span class="default">$new_h </span><span class="keyword">= </span><span class="default">$oh</span><span class="keyword">;<br /></span><span class="default">$new_w </span><span class="keyword">= </span><span class="default">$ow</span><span class="keyword">;<br /><br />if(</span><span class="default">$oh </span><span class="keyword">&gt; </span><span class="default">$max </span><span class="keyword">|| </span><span class="default">$ow </span><span class="keyword">&gt; </span><span class="default">$max</span><span class="keyword">){<br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$oh</span><span class="keyword">/</span><span class="default">$ow</span><span class="keyword">;<br />        </span><span class="default">$new_h </span><span class="keyword">= (</span><span class="default">$oh </span><span class="keyword">&gt; </span><span class="default">$ow</span><span class="keyword">) ? </span><span class="default">$max </span><span class="keyword">: </span><span class="default">$max</span><span class="keyword">*</span><span class="default">$r</span><span class="keyword">;<br />        </span><span class="default">$new_w </span><span class="keyword">= </span><span class="default">$new_h</span><span class="keyword">/</span><span class="default">$r</span><span class="keyword">;<br />}<br /></span><span class="comment">// note TrueColor does 256 and not.. 8<br /></span><span class="default">$dst_img </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$new_w</span><span class="keyword">,</span><span class="default">$new_h</span><span class="keyword">);<br /><br /></span><span class="default">ImageCopyResized</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="default">$src_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$new_w</span><span class="keyword">, </span><span class="default">$new_h</span><span class="keyword">, </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">), </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$src_img</span><span class="keyword">));<br /><br /></span><span class="default">ImageJpeg</span><span class="keyword">(</span><span class="default">$dst_img</span><span class="keyword">, </span><span class="string">"th_</span><span class="default">$picture</span><span class="string">"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111988">  <div class="votes">
    <div id="Vu111988">
    <a href="/manual/vote-note.php?id=111988&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111988">
    <a href="/manual/vote-note.php?id=111988&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111988" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#111988" class="name">
  <strong class="user"><em>jack at computerrageprevention dot ca</em></strong></a><a class="genanchor" href="#111988"> &para;</a><div class="date" title="2013-04-19 06:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111988">
<div class="phpcode"><code><span class="html">There are many user notes here that deal with creating a thumbnail, but I wrote a function that created a thumbnail of an image as it gets uploaded.  It is simply a combination of a file uploader with a thumbnail maker, but it is very simple to use now.<br /><br />Following is an index.php file that contains the upload form, the function, and an example of how to use the function. The last two values in the 'thumb' function are for the width and height limits for the resulting thumbnail.  No matter what size the original image, the thumbnail will always fit within the dimensions specified.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">$_POST</span><span class="keyword">[</span><span class="default">formname</span><span class="keyword">] ==</span><span class="string">"upload"</span><span class="keyword">)<br />{<br /> if (</span><span class="default">$_FILES</span><span class="keyword">)<br /> {<br />  foreach (</span><span class="default">$_FILES </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />  {<br />   </span><span class="default">$m </span><span class="keyword">= </span><span class="default">thumb</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)) . </span><span class="string">"/" </span><span class="keyword">. </span><span class="string">"image_1"</span><span class="keyword">, </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)) . </span><span class="string">"/" </span><span class="keyword">. </span><span class="string">"thumb_1"</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">);<br /><br />   </span><span class="comment">// display any messages, whether success or failure<br />   </span><span class="keyword">if (</span><span class="default">$m</span><span class="keyword">) { foreach(</span><span class="default">$m </span><span class="keyword">as </span><span class="default">$text</span><span class="keyword">) { print </span><span class="string">"</span><span class="default">$text</span><span class="string">&lt;br&gt;"</span><span class="keyword">; } }<br />  }<br /> }<br />}<br /><br />function </span><span class="default">thumb</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$bigname</span><span class="keyword">, </span><span class="default">$thumbname</span><span class="keyword">, </span><span class="default">$maxwidth</span><span class="keyword">, </span><span class="default">$maxheight</span><span class="keyword">)<br />{<br /> if (</span><span class="default">is_uploaded_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="default">tmp_name</span><span class="keyword">]))<br /> {<br />  </span><span class="comment">// determine the image type<br />  </span><span class="keyword">if (</span><span class="default">$file</span><span class="keyword">[</span><span class="default">type</span><span class="keyword">] == </span><span class="string">"image/jpeg"</span><span class="keyword">) { </span><span class="default">$ext </span><span class="keyword">= </span><span class="string">".jpg"</span><span class="keyword">; }<br />  if (</span><span class="default">$file</span><span class="keyword">[</span><span class="default">type</span><span class="keyword">] == </span><span class="string">"image/png"</span><span class="keyword">) { </span><span class="default">$ext </span><span class="keyword">= </span><span class="string">".png"</span><span class="keyword">; }<br />  if (</span><span class="default">$file</span><span class="keyword">[</span><span class="default">type</span><span class="keyword">] == </span><span class="string">"image/gif"</span><span class="keyword">) { </span><span class="default">$ext </span><span class="keyword">= </span><span class="string">".gif"</span><span class="keyword">; }<br /><br />  </span><span class="default">$newfile </span><span class="keyword">= </span><span class="default">$bigname </span><span class="keyword">. </span><span class="default">$ext</span><span class="keyword">;<br /><br />  if (</span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="default">tmp_name</span><span class="keyword">], </span><span class="default">$newfile</span><span class="keyword">))<br />  {<br />   </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Upload complete"</span><span class="keyword">;<br /><br />   </span><span class="comment">// get old image size and convert to a maximum width/height combo<br />   </span><span class="default">$size </span><span class="keyword">= </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$newfile</span><span class="keyword">);<br /><br />   </span><span class="comment">// only do the conversion if the width is greater than zero, otherwise there could be a division by zero error<br />   </span><span class="keyword">if (</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] != </span><span class="default">0</span><span class="keyword">)<br />   {<br /><br />    </span><span class="comment">// Calculate the thumbnail's width an height, based on the max sized allowed and the original's dimensions<br />    </span><span class="keyword">if (</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]/</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &gt; </span><span class="default">$maxwidth</span><span class="keyword">/</span><span class="default">$maxheight</span><span class="keyword">)<br />    { </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$maxwidth</span><span class="keyword">; </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">$maxwidth</span><span class="keyword">) / </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); }<br />     else<br />    { </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$maxheight</span><span class="keyword">; </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">((</span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">$maxheight</span><span class="keyword">) / </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); }<br /><br />    </span><span class="comment">// Create the thumbnail<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">);<br /><br />    if (</span><span class="default">$ext </span><span class="keyword">== </span><span class="string">".jpg"</span><span class="keyword">) { </span><span class="default">$j </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$newfile</span><span class="keyword">); }<br />    if (</span><span class="default">$ext </span><span class="keyword">== </span><span class="string">".png"</span><span class="keyword">) { </span><span class="default">$j </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$newfile</span><span class="keyword">); }<br />    if (</span><span class="default">$ext </span><span class="keyword">== </span><span class="string">".gif"</span><span class="keyword">) { </span><span class="default">$j </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$newfile</span><span class="keyword">); }<br /><br />    if (</span><span class="default">$j</span><span class="keyword">)<br />    {<br />     </span><span class="comment">// Copy the original image and paste into the new image, resized<br />     </span><span class="keyword">if (</span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))<br />     {<br />      if (</span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$thumbname </span><span class="keyword">. </span><span class="default">$ext</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">))<br />      {<br />       </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Image thumb created successfully"</span><span class="keyword">;<br />      } else {<br />       </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Image thumb would not export"</span><span class="keyword">;<br />      }<br />     } else {<br />      </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Image resize failure"</span><span class="keyword">;<br />     }<br />    } else {<br />     </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Image type not recognized"</span><span class="keyword">;<br />    }<br />   } else { </span><span class="comment">// size[1] != 0<br />    </span><span class="default">$message</span><span class="keyword">[] = </span><span class="string">"Image size invalid"</span><span class="keyword">;<br />   }<br />  } </span><span class="comment">// move_uploaded_file<br /> </span><span class="keyword">} </span><span class="comment">// is_uploaded_file<br /><br /> </span><span class="keyword">return </span><span class="default">$message</span><span class="keyword">;<br />}<br /><br />print </span><span class="string">"<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;title&gt;Image upload and create Thumbnail&lt;/title&gt;<br />&lt;/head&gt;<br /><br />&lt;body&gt;<br /><br />&lt;form action='index.php' method='POST' enctype='multipart/form-data'&gt;<br />&lt;input type='hidden' name='formname' value='upload'&gt;<br />&lt;input type='file' name='fileupload'&gt;<br />&lt;input type='submit' value='Upload'&gt;<br />&lt;/form&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br />"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />NOTE: This does not deal with adjusting palettes or transparent colors, but that can be added if you need it.</span></code></div>
  </div>
 </div>
  <div class="note" id="69123">  <div class="votes">
    <div id="Vu69123">
    <a href="/manual/vote-note.php?id=69123&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69123">
    <a href="/manual/vote-note.php?id=69123&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69123" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#69123" class="name">
  <strong class="user"><em>nworld3d at yahoo dot com</em></strong></a><a class="genanchor" href="#69123"> &para;</a><div class="date" title="2006-08-23 05:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69123">
<div class="phpcode"><code><span class="html">Belows is the code snipet that allows you to resize a transparent PNG and composite it into another image.  The code is tested to work with PHP5.1.2, GD2, but I think it can also work with other versions of PHP and GD.  <br /><br />The code has been commented to help you read through it.  The idea of resizing the transparent PNG image is to create a new destination image which is completely transparent then turn off the imageAlphaBlending of this new image so that when the PNG source file is copied, its alpha channel is still retained.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Compose a PNG file over a src file.<br /> * If new width/ height are defined, then resize the PNG (and keep all the transparency info)<br /> * Author:  Alex Le - <a href="http://www.alexle.net" rel="nofollow" target="_blank">http://www.alexle.net</a><br /> */<br /></span><span class="keyword">function </span><span class="default">imageComposeAlpha</span><span class="keyword">( &amp;</span><span class="default">$src</span><span class="keyword">, &amp;</span><span class="default">$ovr</span><span class="keyword">, </span><span class="default">$ovr_x</span><span class="keyword">, </span><span class="default">$ovr_y</span><span class="keyword">, </span><span class="default">$ovr_w </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$ovr_h </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if( </span><span class="default">$ovr_w </span><span class="keyword">&amp;&amp; </span><span class="default">$ovr_h </span><span class="keyword">)<br />        </span><span class="default">$ovr </span><span class="keyword">= </span><span class="default">imageResizeAlpha</span><span class="keyword">( </span><span class="default">$ovr</span><span class="keyword">, </span><span class="default">$ovr_w</span><span class="keyword">, </span><span class="default">$ovr_h </span><span class="keyword">);<br />        <br />    </span><span class="comment">/* Noew compose the 2 images */<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$ovr</span><span class="keyword">, </span><span class="default">$ovr_x</span><span class="keyword">, </span><span class="default">$ovr_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$ovr</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$ovr</span><span class="keyword">) );    <br />}<br /><br /></span><span class="comment">/**<br /> * Resize a PNG file with transparency to given dimensions<br /> * and still retain the alpha channel information<br /> * Author:  Alex Le - <a href="http://www.alexle.net" rel="nofollow" target="_blank">http://www.alexle.net</a><br /> */<br /></span><span class="keyword">function </span><span class="default">imageResizeAlpha</span><span class="keyword">(&amp;</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">)<br />{<br />        </span><span class="comment">/* create a new image with the new width and height */<br />        </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">); <br />        <br />        </span><span class="comment">/* making the new image transparent */<br />        </span><span class="default">$background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />        </span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$background</span><span class="keyword">); </span><span class="comment">// make the new temp image all transparent<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="comment">// turn off the alpha blending to keep the alpha channel<br />        <br />        /* Resize the PNG file */<br />        /* use imagecopyresized to gain some performance but loose some quality */<br />        </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$src</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));<br />        </span><span class="comment">/* use imagecopyresampled if you concern more about the quality */<br />        //imagecopyresampled($temp, $src, 0, 0, 0, 0, $w, $h, imagesx($src), imagesy($src));<br />        </span><span class="keyword">return </span><span class="default">$temp</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Example usage:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /><br /></span><span class="comment">/* Open the photo and the overlay image */<br /></span><span class="default">$photoImage </span><span class="keyword">= </span><span class="default">ImageCreateFromJPEG</span><span class="keyword">(</span><span class="string">'images/MiuMiu.jpg'</span><span class="keyword">);<br /></span><span class="default">$overlay </span><span class="keyword">= </span><span class="default">ImageCreateFromPNG</span><span class="keyword">(</span><span class="string">'images/hair-trans.png'</span><span class="keyword">);<br /><br /></span><span class="default">$percent </span><span class="keyword">= </span><span class="default">0.8</span><span class="keyword">;<br /></span><span class="default">$newW </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$overlay</span><span class="keyword">) * </span><span class="default">$percent</span><span class="keyword">);<br /></span><span class="default">$newH </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$overlay</span><span class="keyword">) * </span><span class="default">$percent</span><span class="keyword">);<br /><br /></span><span class="comment">/* Compose the overlay photo over the target image */<br /></span><span class="default">imageComposeAlpha</span><span class="keyword">( </span><span class="default">$photoImage</span><span class="keyword">, </span><span class="default">$overlay</span><span class="keyword">, </span><span class="default">86</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">$newW</span><span class="keyword">, </span><span class="default">$newH </span><span class="keyword">);<br /><br /></span><span class="comment">/* Open another PNG file, then resize and compose it */<br /></span><span class="default">$watermark </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'images/watermark.png'</span><span class="keyword">);<br /></span><span class="default">imageComposeAlpha</span><span class="keyword">( </span><span class="default">$photoImage</span><span class="keyword">, </span><span class="default">$watermark</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">, </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">)/</span><span class="default">2 </span><span class="keyword">);<br /><br /></span><span class="comment">/**<br /> * Open the same PNG file then compose without resizing <br /> * As the original $watermark is passed by reference, it was resized already.<br /> * So we have to reopen it.<br /> */<br /></span><span class="default">$watermark </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'images/watermark.png'</span><span class="keyword">);<br /></span><span class="default">imageComposeAlpha</span><span class="keyword">( </span><span class="default">$photoImage</span><span class="keyword">, </span><span class="default">$watermark</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">350</span><span class="keyword">);<br /></span><span class="default">Imagepng</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">); </span><span class="comment">// output to browser<br /><br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$photoImage</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$overlay</span><span class="keyword">); <br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$watermark</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106539">  <div class="votes">
    <div id="Vu106539">
    <a href="/manual/vote-note.php?id=106539&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106539">
    <a href="/manual/vote-note.php?id=106539&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106539" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#106539" class="name">
  <strong class="user"><em>licson0729 at gmail dot com</em></strong></a><a class="genanchor" href="#106539"> &para;</a><div class="date" title="2011-11-17 03:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106539">
<div class="phpcode"><code><span class="html">I couldn't find any script that resize an image and give border to it. So I made one myself. Hope that can help you.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagecopyresizedwithborder</span><span class="keyword">(&amp;</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$borderthickess</span><span class="keyword">,</span><span class="default">$bordercolor</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">)<br />{<br />    list(</span><span class="default">$width_orig</span><span class="keyword">, </span><span class="default">$height_orig</span><span class="keyword">) = array(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));<br /><br />    if (</span><span class="default">$width </span><span class="keyword">&amp;&amp; (</span><span class="default">$width_orig </span><span class="keyword">&lt; </span><span class="default">$height_orig</span><span class="keyword">))<br />    {<br />        </span><span class="default">$width </span><span class="keyword">= (</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$height_orig</span><span class="keyword">) * </span><span class="default">$width_orig</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        </span><span class="default">$height </span><span class="keyword">= (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">$width_orig</span><span class="keyword">) * </span><span class="default">$height_orig</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$dst </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">*</span><span class="default">$borderthickess</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">*</span><span class="default">$borderthickess</span><span class="keyword">);<br />    </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">));<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(isset(</span><span class="default">$bordercolor</span><span class="keyword">) ? </span><span class="default">$bordercolor </span><span class="keyword">: </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">)));<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$borderthickess</span><span class="keyword">,</span><span class="default">$borderthickess</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">));<br />    return </span><span class="default">$dst</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69042">  <div class="votes">
    <div id="Vu69042">
    <a href="/manual/vote-note.php?id=69042&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69042">
    <a href="/manual/vote-note.php?id=69042&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69042" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#69042" class="name">
  <strong class="user"><em>ob at babcom dot biz</em></strong></a><a class="genanchor" href="#69042"> &para;</a><div class="date" title="2006-08-21 04:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69042">
<div class="phpcode"><code><span class="html">Regarding the note and function of kyle.florence on August 3rd 2006:<br /><br />I tried to use his function resizejpeg() for resizing images in my gallery. As far as I can tell it contains a small bug.<br /><br />Resizing worked fine as long as I had the same maximum width and maximum height specified. Wanting all thumbnails to have the same height - so my images would appear in a straight line on my website both in portrait format and in landscape format - I soon encountered the problem that resizing with different values of maximum width and maximum height would not work proberly.<br /><br />If you are using the script change the following 2 lines where the resized width and the resized height are calculated:<br /><br /><span class="default">&lt;?php <br />$rs_h </span><span class="keyword">= </span><span class="default">$ratio </span><span class="keyword">* </span><span class="default">$max_h</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span>should be:<br /><span class="default">&lt;?php <br />$rs_h </span><span class="keyword">= </span><span class="default">$ratio </span><span class="keyword">* </span><span class="default">$rs_w</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span><br />and:<br /><span class="default">&lt;?php <br />$rs_w </span><span class="keyword">= </span><span class="default">$max_w </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span>should be:<br /><span class="default">&lt;?php <br />$rs_w </span><span class="keyword">= </span><span class="default">$rs_h </span><span class="keyword">/ </span><span class="default">$ratio</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span><br />The following function is based on Kyle Florence's function. I left out the thumbnail-part and rather added the possibiliy of defining a new dir and new filename for the image. If you need to resize and then create a thumbnail just run the function twice. Here, the thumbnail will contain the full picture and not a cutout of the original image. <br /><br />The function supports JPG, GIF and PNG resizing. The quality in case of JPG is given to the function as the last parameter $Quality.<br /><br />The variable names should speak for their usage.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">Resize</span><span class="keyword">(</span><span class="default">$Dir</span><span class="keyword">,</span><span class="default">$Image</span><span class="keyword">,</span><span class="default">$NewDir</span><span class="keyword">,</span><span class="default">$NewImage</span><span class="keyword">,</span><span class="default">$MaxWidth</span><span class="keyword">,</span><span class="default">$MaxHeight</span><span class="keyword">,</span><span class="default">$Quality</span><span class="keyword">) {<br />  list(</span><span class="default">$ImageWidth</span><span class="keyword">,</span><span class="default">$ImageHeight</span><span class="keyword">,</span><span class="default">$TypeCode</span><span class="keyword">)=</span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$Dir</span><span class="keyword">.</span><span class="default">$Image</span><span class="keyword">);<br />  </span><span class="default">$ImageType</span><span class="keyword">=(</span><span class="default">$TypeCode</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">?</span><span class="string">"gif"</span><span class="keyword">:(</span><span class="default">$TypeCode</span><span class="keyword">==</span><span class="default">2</span><span class="keyword">?</span><span class="string">"jpeg"</span><span class="keyword">:<br />             (</span><span class="default">$TypeCode</span><span class="keyword">==</span><span class="default">3</span><span class="keyword">?</span><span class="string">"png"</span><span class="keyword">:</span><span class="default">FALSE</span><span class="keyword">)));<br />  </span><span class="default">$CreateFunction</span><span class="keyword">=</span><span class="string">"imagecreatefrom"</span><span class="keyword">.</span><span class="default">$ImageType</span><span class="keyword">;<br />  </span><span class="default">$OutputFunction</span><span class="keyword">=</span><span class="string">"image"</span><span class="keyword">.</span><span class="default">$ImageType</span><span class="keyword">;<br />  if (</span><span class="default">$ImageType</span><span class="keyword">) {<br />    </span><span class="default">$Ratio</span><span class="keyword">=(</span><span class="default">$ImageHeight</span><span class="keyword">/</span><span class="default">$ImageWidth</span><span class="keyword">);<br />    </span><span class="default">$ImageSource</span><span class="keyword">=</span><span class="default">$CreateFunction</span><span class="keyword">(</span><span class="default">$Dir</span><span class="keyword">.</span><span class="default">$Image</span><span class="keyword">);<br />    if (</span><span class="default">$ImageWidth </span><span class="keyword">&gt; </span><span class="default">$MaxWidth </span><span class="keyword">|| </span><span class="default">$ImageHeight </span><span class="keyword">&gt; </span><span class="default">$MaxHeight</span><span class="keyword">) {<br />      if (</span><span class="default">$ImageWidth </span><span class="keyword">&gt; </span><span class="default">$MaxWidth</span><span class="keyword">) {<br />         </span><span class="default">$ResizedWidth</span><span class="keyword">=</span><span class="default">$MaxWidth</span><span class="keyword">;<br />         </span><span class="default">$ResizedHeight</span><span class="keyword">=</span><span class="default">$ResizedWidth</span><span class="keyword">*</span><span class="default">$Ratio</span><span class="keyword">;<br />      }<br />      else {<br />        </span><span class="default">$ResizedWidth</span><span class="keyword">=</span><span class="default">$ImageWidth</span><span class="keyword">;<br />        </span><span class="default">$ResizedHeight</span><span class="keyword">=</span><span class="default">$ImageHeight</span><span class="keyword">;<br />      }        <br />      if (</span><span class="default">$ResizedHeight </span><span class="keyword">&gt; </span><span class="default">$MaxHeight</span><span class="keyword">) {<br />        </span><span class="default">$ResizedHeight</span><span class="keyword">=</span><span class="default">$MaxHeight</span><span class="keyword">;<br />        </span><span class="default">$ResizedWidth</span><span class="keyword">=</span><span class="default">$ResizedHeight</span><span class="keyword">/</span><span class="default">$Ratio</span><span class="keyword">;<br />      }       <br />      </span><span class="default">$ResizedImage</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$ResizedWidth</span><span class="keyword">,</span><span class="default">$ResizedHeight</span><span class="keyword">);<br />      </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$ResizedImage</span><span class="keyword">,</span><span class="default">$ImageSource</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$ResizedWidth</span><span class="keyword">,<br />                         </span><span class="default">$ResizedHeight</span><span class="keyword">,</span><span class="default">$ImageWidth</span><span class="keyword">,</span><span class="default">$ImageHeight</span><span class="keyword">);<br />    } <br />    else {<br />      </span><span class="default">$ResizedWidth</span><span class="keyword">=</span><span class="default">$ImageWidth</span><span class="keyword">;<br />      </span><span class="default">$ResizedHeight</span><span class="keyword">=</span><span class="default">$ImageHeight</span><span class="keyword">;      <br />      </span><span class="default">$ResizedImage</span><span class="keyword">=</span><span class="default">$ImageSource</span><span class="keyword">;<br />    }    <br />    </span><span class="default">$OutputFunction</span><span class="keyword">(</span><span class="default">$ResizedImage</span><span class="keyword">,</span><span class="default">$NewDir</span><span class="keyword">.</span><span class="default">$NewImage</span><span class="keyword">,</span><span class="default">$Quality</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />  }    <br />  else<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Before calling the function support for JPG, PNG or GIF should be checked.</span></code></div>
  </div>
 </div>
  <div class="note" id="48632">  <div class="votes">
    <div id="Vu48632">
    <a href="/manual/vote-note.php?id=48632&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48632">
    <a href="/manual/vote-note.php?id=48632&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48632" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#48632" class="name">
  <strong class="user"><em>marcy DOT xxx (AT) gmail.com</em></strong></a><a class="genanchor" href="#48632"> &para;</a><div class="date" title="2005-01-02 11:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48632">
<div class="phpcode"><code><span class="html">This example allow to use every kind of image and to resize images with ImageCopyResized(), maintaining proportions..<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// switch to find the correct type of function<br /><br /></span><span class="default">$imgfile </span><span class="keyword">= </span><span class="string">'namefile.jpg'</span><span class="keyword">;<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/"</span><span class="keyword">.</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"type"</span><span class="keyword">]);<br /><br />switch(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"type"</span><span class="keyword">]){<br />default:<br />    </span><span class="default">$function_image_create </span><span class="keyword">= </span><span class="string">"ImageCreateFromJpeg"</span><span class="keyword">;<br />    </span><span class="default">$function_image_new </span><span class="keyword">= </span><span class="string">"ImageJpeg"</span><span class="keyword">;<br />break;<br />case </span><span class="string">"jpg"</span><span class="keyword">:<br />    </span><span class="default">$function_image_create </span><span class="keyword">= </span><span class="string">"ImageCreateFromJpeg"</span><span class="keyword">;<br />    </span><span class="default">$function_image_new </span><span class="keyword">= </span><span class="string">"ImageJpeg"</span><span class="keyword">;<br />case </span><span class="string">"jpeg"</span><span class="keyword">:<br />    </span><span class="default">$function_image_create </span><span class="keyword">= </span><span class="string">"ImageCreateFromJpeg"</span><span class="keyword">;<br />    </span><span class="default">$function_image_new </span><span class="keyword">= </span><span class="string">"ImageJpeg"</span><span class="keyword">;<br />break;<br />case </span><span class="string">"png"</span><span class="keyword">:<br />    </span><span class="default">$function_image_create </span><span class="keyword">= </span><span class="string">"ImageCreateFromPng"</span><span class="keyword">;<br />    </span><span class="default">$function_image_new </span><span class="keyword">= </span><span class="string">"ImagePNG"</span><span class="keyword">;<br />break;<br />case </span><span class="string">"gif"</span><span class="keyword">:<br />    </span><span class="default">$function_image_create </span><span class="keyword">= </span><span class="string">"ImageCreateFromGif"</span><span class="keyword">;<br />    </span><span class="default">$function_image_new </span><span class="keyword">= </span><span class="string">"ImagePNG"</span><span class="keyword">;<br />break;<br />}<br /><br />list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br /><br /></span><span class="comment">// the new weight of the thumb<br /><br /></span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br /><br /></span><span class="comment">// Proportion is maintained<br /><br /></span><span class="default">$newwidth </span><span class="keyword">= (int) ((</span><span class="default">$width</span><span class="keyword">*</span><span class="default">80</span><span class="keyword">)/</span><span class="default">$height</span><span class="keyword">);<br /><br /></span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">,</span><span class="default">$newheight</span><span class="keyword">);<br /></span><span class="default">$source </span><span class="keyword">= @</span><span class="default">function_image_create</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br /><br /></span><span class="default">ImageCopyResized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br />@</span><span class="default">$function_image_new</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75624">  <div class="votes">
    <div id="Vu75624">
    <a href="/manual/vote-note.php?id=75624&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75624">
    <a href="/manual/vote-note.php?id=75624&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75624" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#75624" class="name">
  <strong class="user"><em>nils dot clark-bernhard at human-aspects dot de</em></strong></a><a class="genanchor" href="#75624"> &para;</a><div class="date" title="2007-06-08 04:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75624">
<div class="phpcode"><code><span class="html">Regarding ob at babcom dot biz's function Resize($Dir,$Image,$NewDir,$NewImage,$MaxWidth,$MaxHeight,$Quality) <br /><br />Make sure to not use a quality of 9 or higher for png resizing.<br /><br />PHP will output an error like:<br />fatal libpng error: zlib failed to initialize compressor<br />or<br />gd-png error: setjmp returns error condition</span></code></div>
  </div>
 </div>
  <div class="note" id="55743">  <div class="votes">
    <div id="Vu55743">
    <a href="/manual/vote-note.php?id=55743&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55743">
    <a href="/manual/vote-note.php?id=55743&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55743" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#55743" class="name">
  <strong class="user"><em>MaLaZ</em></strong></a><a class="genanchor" href="#55743"> &para;</a><div class="date" title="2005-08-11 07:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55743">
<div class="phpcode"><code><span class="html">simple script for creating thumbnails with process information and saving original ratio thumbnail to new destination...good then useing with upload or uploaded images:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//Upload------------------------------------<br /></span><span class="keyword">if(isset( </span><span class="default">$submit </span><span class="keyword">))<br />{<br />if (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">] == </span><span class="string">"image/jpeg"</span><span class="keyword">){<br />    </span><span class="default">copy </span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">], </span><span class="string">"../images/"</span><span class="keyword">.</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">])<br />    or die (</span><span class="string">"Could not copy"</span><span class="keyword">); <br />        echo </span><span class="string">""</span><span class="keyword">;<br />        echo </span><span class="string">"Image Name: "</span><span class="keyword">.</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">].</span><span class="string">""</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;br&gt;Image Size: "</span><span class="keyword">.</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'size'</span><span class="keyword">].</span><span class="string">""</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;br&gt;Image Type: "</span><span class="keyword">.</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">].</span><span class="string">""</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;br&gt;Image Copy Done....&lt;br&gt;"</span><span class="keyword">;<br />        } <br />         else {<br />            echo </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />            echo </span><span class="string">"bad file type ("</span><span class="keyword">.</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'imagefile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">].</span><span class="string">")&lt;br&gt;"</span><span class="keyword">;exit;<br />              }<br /></span><span class="comment">//-----upload end<br /><br />//------start thumbnailer<br /><br />    </span><span class="default">$thumbsize</span><span class="keyword">=</span><span class="default">120</span><span class="keyword">;<br />    echo </span><span class="string">"Thumbnail Info: &lt;br&gt;<br />         1.Thumb defined size: - OK: </span><span class="default">$thumbsize</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">$imgfile </span><span class="keyword">= </span><span class="string">"../images/</span><span class="default">$imagefile_name</span><span class="string">"</span><span class="keyword">;</span><span class="comment">//processed image<br />    </span><span class="keyword">echo </span><span class="string">"<br />         2.Image destination: - OK: </span><span class="default">$imgfile</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br />    echo </span><span class="string">"3.Image size - OK: W=</span><span class="default">$width</span><span class="string"> x H=</span><span class="default">$height</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">$imgratio</span><span class="keyword">=</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height</span><span class="keyword">;<br />    echo </span><span class="string">"3.Image ratio - OK: </span><span class="default">$imgratio</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    if (</span><span class="default">$imgratio</span><span class="keyword">&gt;</span><span class="default">1</span><span class="keyword">){<br />      </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">;<br />      </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">/</span><span class="default">$imgratio</span><span class="keyword">;}<br />    else{<br />      </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">;<br />      </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">*</span><span class="default">$imgratio</span><span class="keyword">;}<br />    echo </span><span class="string">"4.Thumb new size -OK: W=</span><span class="default">$newwidth</span><span class="string"> x H=</span><span class="default">$newheight</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">,</span><span class="default">$newheight</span><span class="keyword">);<br />    echo </span><span class="string">"5.TrueColor - OK&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br />    echo </span><span class="string">"6.From JPG - OK&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">,</span><span class="string">"../images/thumbs/thumb_</span><span class="default">$imagefile_name</span><span class="string">"</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);echo </span><span class="string">"7.Done... - OK&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="comment">//-----------end--------------    <br /></span><span class="default">?&gt;<br /></span><br />or without any info, just resizing:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//------start thumbnailer<br />   </span><span class="default">$thumbsize</span><span class="keyword">=</span><span class="default">120</span><span class="keyword">;<br />   </span><span class="default">$imgfile </span><span class="keyword">= </span><span class="string">"../images/</span><span class="default">$imagefile_name</span><span class="string">"</span><span class="keyword">;<br />   </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />   list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br />   </span><span class="default">$imgratio</span><span class="keyword">=</span><span class="default">$width</span><span class="keyword">/</span><span class="default">$height</span><span class="keyword">;<br />   if (</span><span class="default">$imgratio</span><span class="keyword">&gt;</span><span class="default">1</span><span class="keyword">){<br />     </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">;<br />     </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">/</span><span class="default">$imgratio</span><span class="keyword">;}<br />   else{<br />     </span><span class="default">$newheight </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">;<br />     </span><span class="default">$newwidth </span><span class="keyword">= </span><span class="default">$thumbsize</span><span class="keyword">*</span><span class="default">$imgratio</span><span class="keyword">;}<br />   </span><span class="default">$thumb </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$newwidth</span><span class="keyword">,</span><span class="default">$newheight</span><span class="keyword">);<br />   </span><span class="default">$source </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">);<br />   </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newwidth</span><span class="keyword">, </span><span class="default">$newheight</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">,</span><span class="string">"../images/thumbs/thumb_</span><span class="default">$imagefile_name</span><span class="string">"</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /></span><span class="comment">//-----------end--------------   <br /></span><span class="default">?&gt;<br /></span><br />i hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="53760">  <div class="votes">
    <div id="Vu53760">
    <a href="/manual/vote-note.php?id=53760&amp;page=function.imagecopyresized&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53760">
    <a href="/manual/vote-note.php?id=53760&amp;page=function.imagecopyresized&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53760" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#53760" class="name">
  <strong class="user"><em>brian &lt;dot&gt; tyler &lt;at&gt; gmail &lt;dot&gt; com</em></strong></a><a class="genanchor" href="#53760"> &para;</a><div class="date" title="2005-06-12 03:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53760">
<div class="phpcode"><code><span class="html">I spent last night getting unsuccessful results from this function until I found this note of fluffle &lt;&lt;at&gt;&gt; gmail on the imagecopyresampled page, I have made a slight modification, so you can just cut and paste.<br /><br />Just to clarify that src_w and src_h do not necessarily need to be the source image width and height, as they specify the size of the rectangle cropped from the source picture, with its top left corner situated at (src_x, src_y).<br /><br />For example, the code below crops a jpeg image to be square, with the square situated in the centre of the original image, and then resizes it to a 100x100 thumbnail.<br /><br />function ($image_filename, $thumb_location, $image_thumb_size){<br />//@$image_filename - the filename of the image you want<br />//to get a thumbnail for (relative to location of this<br />//function).<br />//@$thumb_location - the url (relative to location of this<br />//function) to save the thumbnail.<br />//@$image_thumb_size - the x-y dimension of your thumb<br />//in pixels.<br /><br />   list($ow, $oh) = getimagesize($image_filename);<br />   $image_original = imagecreatefromjpeg($image_filename);<br />   $image_thumb = imagecreatetruecolor($image_thumb_size,$image_thumb_size);<br />if ($ow &gt; $oh) {<br />   $off_w = ($ow-$oh)/2;<br />   $off_h = 0;<br />   $ow = $oh;<br />} elseif ($oh &gt; $ow) {<br />   $off_w = 0;<br />   $off_h = ($oh-$ow)/2;<br />   $oh = $ow;<br />} else {<br />   $off_w = 0;<br />   $off_h = 0;<br />}<br />imagecopyresampled($image_thumb, $image_original, 0, 0, $off_w, $off_h, 100, 100, $ow, $oh);<br /><br />imagejpeg($image_thumb, $thumb_location);<br />}//end function</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecopyresized&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopyresized.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.imagecopyresampled.php" title="imagecopyresampled">imagecopyresampled</a>
                        </li>
                                                <li class="current">
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
