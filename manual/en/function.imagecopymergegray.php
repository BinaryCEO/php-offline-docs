<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecopymergegray - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecopymergegray.php">
 <link rel="shorturl" href="https://www.php.net/imagecopymergegray">
 <link rel="alternate" href="https://www.php.net/imagecopymergegray" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecopymerge.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecopyresampled.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecopymergegray.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecopymergegray.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecopymergegray.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecopymergegray.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecopymergegray.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecopymergegray.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecopymergegray.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecopymergegray.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecopymergegray.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecopymergegray.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecopymergegray.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copy and merge part of an image with gray scale" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecopymergegray - Manual" />
<meta name="twitter:description" content="Copy and merge part of an image with gray scale" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecopymergegray - Manual" />
<meta itemprop="description" content="Copy and merge part of an image with gray scale" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copy and merge part of an image with gray scale" />

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
        <a href="function.imagecopyresampled.php">
          imagecopyresampled &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecopymerge.php">
          &laquo; imagecopymerge        </a>
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
            <option value='en/function.imagecopymergegray.php' selected="selected">English</option>
            <option value='de/function.imagecopymergegray.php'>German</option>
            <option value='es/function.imagecopymergegray.php'>Spanish</option>
            <option value='fr/function.imagecopymergegray.php'>French</option>
            <option value='it/function.imagecopymergegray.php'>Italian</option>
            <option value='ja/function.imagecopymergegray.php'>Japanese</option>
            <option value='pt_BR/function.imagecopymergegray.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecopymergegray.php'>Russian</option>
            <option value='tr/function.imagecopymergegray.php'>Turkish</option>
            <option value='uk/function.imagecopymergegray.php'>Ukrainian</option>
            <option value='zh/function.imagecopymergegray.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecopymergegray" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecopymergegray</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecopymergegray</span> &mdash; <span class="dc-title">Copy and merge part of an image with gray scale</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecopymergegray-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecopymergegray</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$dst_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$src_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pct</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagecopymergegray()</strong></span> copy a part of <code class="parameter">src_image</code> onto
   <code class="parameter">dst_image</code> starting at the x,y coordinates
   <code class="parameter">src_x</code>, <code class="parameter">src_y</code> with
   a width of <code class="parameter">src_width</code> and a height of
   <code class="parameter">src_height</code>.  The portion defined will be copied
   onto the x,y coordinates, <code class="parameter">dst_x</code> and
   <code class="parameter">dst_y</code>.
  </p>
  <p class="para">
   This function is identical to <span class="function"><a href="function.imagecopymerge.php" class="function">imagecopymerge()</a></span> except
   that when merging it preserves the hue of the source by converting
   the destination pixels to gray scale before the copy operation.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecopymergegray-parameters">
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
    
    
     <dt><code class="parameter">src_width</code></dt>
     <dd>
      <p class="para">Source width.</p>
     </dd>
    
    
     <dt><code class="parameter">src_height</code></dt>
     <dd>
      <p class="para">Source height.</p>
     </dd>
    
    
     <dt><code class="parameter">pct</code></dt>
     <dd>
      <p class="para">
        The <code class="parameter">src_image</code> will be changed to grayscale according 
        to <code class="parameter">pct</code> where 0 is fully grayscale and 100 is 
        unchanged. When <code class="parameter">pct</code> = 100 this function behaves 
        identically to <span class="function"><a href="function.imagecopy.php" class="function">imagecopy()</a></span> for pallete images, except for
        ignoring alpha components, while
        it implements alpha transparency for true colour images.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecopymergegray-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecopymergegray-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecopymergegray-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2859">
    <p><strong>Example #1 <span class="function"><strong>imagecopymergegray()</strong></span> usage</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create image instances<br /></span><span style="color: #0000BB">$dest </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #DD0000">'php.gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$src </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #DD0000">'php.gif'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Copy and merge - Gray = 20%<br /></span><span style="color: #0000BB">imagecopymergegray</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">, </span><span style="color: #0000BB">$src</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">47</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecopymergegray.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecopymergegray%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecopymergegray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopymergegray.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83104">  <div class="votes">
    <div id="Vu83104">
    <a href="/manual/vote-note.php?id=83104&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83104">
    <a href="/manual/vote-note.php?id=83104&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83104" title="75% like this...">
    2
    </div>
  </div>
  <a href="#83104" class="name">
  <strong class="user"><em>amezghal at msn dot com</em></strong></a><a class="genanchor" href="#83104"> &para;</a><div class="date" title="2008-05-09 05:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83104">
<div class="phpcode"><code><span class="html">gray effect :)<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'content-type:image/png'</span><span class="keyword">);<br /></span><span class="default">$url_img </span><span class="keyword">= </span><span class="string">'my_image.png'</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$url_img</span><span class="keyword">);<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">$gray_img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br /></span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$gray_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$x</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />  for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$y</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">);<br />    </span><span class="default">$r </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    </span><span class="default">$g </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br />     </span><span class="comment">//for gray mode $r = $g = $b<br />    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(array(</span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">));<br />    </span><span class="default">$gray_color </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$new_img</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">,   </span><span class="default">$color</span><span class="keyword">);<br />     </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$gray_img</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$gray_color</span><span class="keyword">);<br />   }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41579">  <div class="votes">
    <div id="Vu41579">
    <a href="/manual/vote-note.php?id=41579&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41579">
    <a href="/manual/vote-note.php?id=41579&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41579" title="100% like this...">
    2
    </div>
  </div>
  <a href="#41579" class="name">
  <strong class="user"><em>switch251 at netcourrier dot com</em></strong></a><a class="genanchor" href="#41579"> &para;</a><div class="date" title="2004-04-15 07:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41579">
<div class="phpcode"><code><span class="html">In addition to code_couturier too: his code will produce blue pictures, because the value he uses to set the pixel color (the code is incomplete: I first thought it should be $gray) is between 0 and 255, which corresponds to blue levels.<br /><br />To convert the picture to grayscale, use the following code:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// replace with your files<br />    </span><span class="default">$originalFileName    </span><span class="keyword">= </span><span class="string">"colorPicture.jpg"</span><span class="keyword">;<br />    </span><span class="default">$destinationFileName </span><span class="keyword">= </span><span class="string">"bwPicture.jpg"</span><span class="keyword">;<br />    <br />    </span><span class="comment">// create a copy of the original image<br />    // works with jpg images<br />    // fell free to adapt to other formats ;)<br />    </span><span class="default">$fullPath </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$originalFileName</span><span class="keyword">);<br />    </span><span class="default">$lastIndex </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$fullPath</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$fullPath</span><span class="keyword">[</span><span class="default">$lastIndex</span><span class="keyword">];<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/jpg|jpeg|JPG|JPEG/"</span><span class="keyword">, </span><span class="default">$extension</span><span class="keyword">)){<br />        </span><span class="default">$sourceImage </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$originalFileName</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// get image dimensions<br />    </span><span class="default">$img_width  </span><span class="keyword">= </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br />    </span><span class="default">$img_height </span><span class="keyword">= </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br /><br />    </span><span class="comment">// convert to grayscale<br />    // note: this will NOT affect your original image, unless<br />    // originalFileName and destinationFileName are the same<br />    </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt;</span><span class="default">$img_height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) { <br />        for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;</span><span class="default">$img_width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) { <br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$red   </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$green </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">)  &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$blue  </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br /><br />            </span><span class="default">$gray </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">.299</span><span class="keyword">*</span><span class="default">$red </span><span class="keyword">+ </span><span class="default">.587</span><span class="keyword">*</span><span class="default">$green </span><span class="keyword">+ </span><span class="default">.114</span><span class="keyword">*</span><span class="default">$blue</span><span class="keyword">);<br />            <br />            </span><span class="comment">// shift gray level to the left<br />            </span><span class="default">$grayR </span><span class="keyword">= </span><span class="default">$gray </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">;   </span><span class="comment">// R: red<br />            </span><span class="default">$grayG </span><span class="keyword">= </span><span class="default">$gray </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">;    </span><span class="comment">// G: green<br />            </span><span class="default">$grayB </span><span class="keyword">= </span><span class="default">$gray</span><span class="keyword">;         </span><span class="comment">// B: blue<br />            <br />            // OR operation to compute gray value<br />            </span><span class="default">$grayColor </span><span class="keyword">= </span><span class="default">$grayR </span><span class="keyword">| </span><span class="default">$grayG </span><span class="keyword">| </span><span class="default">$grayB</span><span class="keyword">;<br /><br />            </span><span class="comment">// set the pixel color<br />            </span><span class="default">imagesetpixel </span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$grayColor</span><span class="keyword">);<br />            </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="comment">// copy pixel values to new file buffer<br />    </span><span class="default">$destinationImage </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$img_width</span><span class="keyword">, </span><span class="default">$img_height</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">, </span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$img_width</span><span class="keyword">, </span><span class="default">$img_height</span><span class="keyword">);<br /><br />    </span><span class="comment">// create file on disk<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">, </span><span class="default">$destinationFileName</span><span class="keyword">);<br />    <br />    </span><span class="comment">// destroy temp image buffers<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">);    <br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Copy-paste, replace the file names on the top and there you go (picture files must be in same folder as this script. If not, you will have to do your own file management).</span></code></div>
  </div>
 </div>
  <div class="note" id="36420">  <div class="votes">
    <div id="Vu36420">
    <a href="/manual/vote-note.php?id=36420&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36420">
    <a href="/manual/vote-note.php?id=36420&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36420" title="100% like this...">
    1
    </div>
  </div>
  <a href="#36420" class="name">
  <strong class="user"><em>mail at laeubi dot de</em></strong></a><a class="genanchor" href="#36420"> &para;</a><div class="date" title="2003-10-09 12:45"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36420">
<div class="phpcode"><code><span class="html">This function don't work properly for me on trucolerimages (have not tried yet for other types) it jsut produce a part-grayscale image, and some color get mesed up.<br />I found a workaround here:<br /><a href="http://www.phpbuilder.com/columns/cash20030526.php3?page=2" rel="nofollow" target="_blank">http://www.phpbuilder.com/columns/cash20030526.php3?page=2</a><br /><br />[quote]<br />Advanced Image Editing Under the GD Library<br />Colorizing<br />Colorizing images is fairly easy to do. The easiest way to colorize an image is fairly simple to grasp. Create an image of the same dimensions and fill that image with the color you want to change it to. This new image is then placed on top of the older image, giving it a colorized look.<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">imagecolorize</span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">,&amp;</span><span class="default">$col</span><span class="keyword">,</span><span class="default">$pct</span><span class="keyword">) { <br />    </span><span class="comment">// Get the image's width <br />    </span><span class="default">$im_w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);  <br />    </span><span class="comment">// Get the image's height <br />    </span><span class="default">$im_h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);  <br />    </span><span class="comment">// Set a pixel with the color, so we can get it easily <br />    </span><span class="default">$setpixel </span><span class="keyword">= </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$im_w</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$col</span><span class="keyword">);  <br />    </span><span class="comment">// Get the color <br />    </span><span class="default">$index </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$im_w</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);  <br />    </span><span class="comment">// Find the color in the index <br />    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$index</span><span class="keyword">);  <br />    </span><span class="comment">// Get the red value <br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">]; <br />    </span><span class="comment">// Get the green value <br />    </span><span class="default">$g </span><span class="keyword">= </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">];  <br />    </span><span class="comment">// Get the blue value <br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">];  <br />    </span><span class="comment">// Create the layover <br />    </span><span class="default">$layover </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$im_w</span><span class="keyword">,</span><span class="default">$im_h</span><span class="keyword">);  <br />    </span><span class="comment">// Allocate the color on this image <br />    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$layover</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);  <br />    </span><span class="comment">// Fill the image with the new color (this really isn't needed) <br />    </span><span class="default">$fill </span><span class="keyword">= </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$layover</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);  <br />    </span><span class="comment">// Merge the layover on top of the older image <br />    </span><span class="default">$merge </span><span class="keyword">= </span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$layover</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$im_w</span><span class="keyword">,</span><span class="default">$im_h</span><span class="keyword">,</span><span class="default">$pct</span><span class="keyword">); <br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$layover</span><span class="keyword">); </span><span class="comment">// Destroy the layover <br /></span><span class="keyword">} <br /></span><span class="default">?&gt;</span> <br /><br />If we use a blue layover RGB(0,0,255), we get this result:<br />[/quote]<br /><br />if you use black or gray, its not perfekt, but better than nothing ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="74523">  <div class="votes">
    <div id="Vu74523">
    <a href="/manual/vote-note.php?id=74523&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74523">
    <a href="/manual/vote-note.php?id=74523&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74523" title="no votes...">
    0
    </div>
  </div>
  <a href="#74523" class="name">
  <strong class="user"><em>szamil at ginf dot pl</em></strong></a><a class="genanchor" href="#74523"> &para;</a><div class="date" title="2007-04-15 02:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74523">
<div class="phpcode"><code><span class="html">I've changed a little switch251's code and here we have sephia effect<br /><span class="default">&lt;?php<br />   </span><span class="comment">// replace with your files<br />    </span><span class="default">$originalFileName    </span><span class="keyword">= </span><span class="default">$filename</span><span class="keyword">;<br />    </span><span class="default">$destinationFileName </span><span class="keyword">= </span><span class="string">"2"</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">;<br />    <br />    </span><span class="comment">// create a copy of the original image<br />    // works with jpg images<br />    // fell free to adapt to other formats ;)<br />    </span><span class="default">$fullPath </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$originalFileName</span><span class="keyword">);<br />    </span><span class="default">$lastIndex </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$fullPath</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">$fullPath</span><span class="keyword">[</span><span class="default">$lastIndex</span><span class="keyword">];<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/jpg|jpeg|JPG|JPEG/"</span><span class="keyword">, </span><span class="default">$extension</span><span class="keyword">))<br />    {<br />        </span><span class="default">$sourceImage </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$originalFileName</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// get image dimensions<br />    </span><span class="default">$img_width  </span><span class="keyword">= </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br />    </span><span class="default">$img_height </span><span class="keyword">= </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br /><br />    </span><span class="comment">// convert to grayscale<br />    // note: this will NOT affect your original image, unless<br />    // originalFileName and destinationFileName are the same<br />    </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt;</span><span class="default">$img_height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) <br />    { <br />        for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;</span><span class="default">$img_width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) <br />        { <br />            </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">);<br />            </span><span class="default">$red   </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$green </span><span class="keyword">= (</span><span class="default">$rgb </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">)  &amp; </span><span class="default">0xFF</span><span class="keyword">;<br />            </span><span class="default">$blue  </span><span class="keyword">= </span><span class="default">$rgb </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">;<br /><br />          </span><span class="comment">//sephia<br />            </span><span class="default">$red2 </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$red</span><span class="keyword">*</span><span class="default">.393 </span><span class="keyword">+ </span><span class="default">$green</span><span class="keyword">*</span><span class="default">.769 </span><span class="keyword">+ </span><span class="default">$blue</span><span class="keyword">*</span><span class="default">.189</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />            </span><span class="default">$green2 </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$red</span><span class="keyword">*</span><span class="default">.349 </span><span class="keyword">+ </span><span class="default">$green</span><span class="keyword">*</span><span class="default">.686 </span><span class="keyword">+ </span><span class="default">$blue</span><span class="keyword">*</span><span class="default">.168</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />            </span><span class="default">$blue2  </span><span class="keyword">= </span><span class="default">min</span><span class="keyword">(</span><span class="default">$red</span><span class="keyword">*</span><span class="default">.272 </span><span class="keyword">+ </span><span class="default">$green</span><span class="keyword">*</span><span class="default">.534 </span><span class="keyword">+ </span><span class="default">$blue</span><span class="keyword">*</span><span class="default">.131</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />            </span><span class="comment">// shift gray level to the left<br />            <br />            </span><span class="default">$grayR </span><span class="keyword">= </span><span class="default">$red2 </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">;   </span><span class="comment">// R: red<br />            </span><span class="default">$grayG </span><span class="keyword">= </span><span class="default">$green2 </span><span class="keyword">&lt;&lt; </span><span class="default">8 </span><span class="keyword">;    </span><span class="comment">// G: green<br />            </span><span class="default">$grayB </span><span class="keyword">= </span><span class="default">$blue2</span><span class="keyword">;         </span><span class="comment">// B: blue<br />            <br />            // OR operation to compute gray value<br />            </span><span class="default">$grayColor </span><span class="keyword">= </span><span class="default">$grayR </span><span class="keyword">| </span><span class="default">$grayG </span><span class="keyword">| </span><span class="default">$grayB</span><span class="keyword">;<br /><br />            <br />            </span><span class="comment">// set the pixel color<br />            </span><span class="default">imagesetpixel </span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$grayColor</span><span class="keyword">);<br />            </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="comment">// copy pixel values to new file buffer<br />    </span><span class="default">$destinationImage </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$img_width</span><span class="keyword">, </span><span class="default">$img_height</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">, </span><span class="default">$sourceImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$img_width</span><span class="keyword">, </span><span class="default">$img_height</span><span class="keyword">);<br /><br />    </span><span class="comment">// create file on disk<br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">, </span><span class="default">$destinationFileName</span><span class="keyword">);<br />    <br />    </span><span class="comment">// destroy temp image buffers<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$destinationImage</span><span class="keyword">);    <br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$sourceImage</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55853">  <div class="votes">
    <div id="Vu55853">
    <a href="/manual/vote-note.php?id=55853&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55853">
    <a href="/manual/vote-note.php?id=55853&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55853" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55853" class="name">
  <strong class="user"><em>Mark Barba</em></strong></a><a class="genanchor" href="#55853"> &para;</a><div class="date" title="2005-08-15 12:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55853">
<div class="phpcode"><code><span class="html">//  Using the same code I found here on php.net, <br />// I was able to figure out how to convert GIF (or any other<br />// format GD supports) to CIP format.  CIP is the image<br />// format for Cisco IP Phones...  7905/7940 and 7960 <br />// models...  Hope someone finds this useful and make it <br />// better...  <br /><br />/////// GIF2CIP PHP code ///////<br /><br />// Convert image in memory to grayscale<br />    $img_width  = imageSX($im2);<br />    $img_height = imageSY($im2);<br /><br />   // convert to grayscale<br />   // note: this will NOT affect your original image, unless<br />   // originalFileName and destinationFileName are the same<br />   for ($y = 0; $y &lt;$img_height; $y++) { <br />       for ($x = 0; $x &lt;$img_width; $x++) { <br />           $rgb = imagecolorat($im2, $x, $y);<br />           $red  = ($rgb &gt;&gt; 16) &amp; 0xFF;<br />           $green = ($rgb &gt;&gt; 8)  &amp; 0xFF;<br />           $blue  = $rgb &amp; 0xFF;<br /><br />           $gray = round(.299*$red + .587*$green + .114*$blue);<br />           <br />           // shift gray level to the left<br />           $grayR = $gray &lt;&lt; 16;  // R: red<br />           $grayG = $gray &lt;&lt; 8;    // G: green<br />           $grayB = $gray;        // B: blue<br />           <br />           // OR operation to compute gray value<br />           $grayColor = $grayR | $grayG | $grayB;<br /><br />           // set the pixel color<br />           imagesetpixel ($im2, $x, $y, $grayColor);<br />           imagecolorallocate ($im2, $gray, $gray, $gray);<br />       }<br />   }<br />/////////////////////////////////////////////////////////<br /><br />    // Modifies palette to only 4-colors (CIP Images on 7905/7940 &amp; 7960 is 2-bit color)<br />    ImageTrueColorToPalette2($im2,FALSE,4);<br /><br />    // Basic header for CIP Image files...<br />    header ("Content-type: text/xml");<br />    echo "&lt;CiscoIPPhoneImage&gt; ";<br />    echo "&lt;LocationX&gt;-1&lt;/LocationX&gt; ";<br />    echo "&lt;LocationY&gt;-1&lt;/LocationY&gt; ";<br />    echo "&lt;Width&gt;132&lt;/Width&gt; ";<br />    echo "&lt;Height&gt;65&lt;/Height&gt; ";<br />    echo "&lt;Depth&gt;2&lt;/Depth&gt; ";<br />    echo "&lt;Data&gt;";<br /><br />// get image dimensions (almost same code as above)<br />   $img_width  = imageSX($im2);<br />   $img_height = imageSY($im2);<br /><br />   // convert to grayscale<br />   // note: this will NOT affect your original image, unless<br />   // originalFileName and destinationFileName are the same<br />   for ($y = 0; $y &lt;$img_height; $y++) { <br />       for ($x = 0; $x+4 &lt;$img_width; $x = $x+4) <br />       { <br />            for ($ix = 0; $ix &lt; 4; $ix++)<br />            {<br />               $rgb = imagecolorat($im2, $x + $ix, $y);<br /><br />               // I came up with this translation on my own<br />               // Some smart person is bound to perfect it<br />               if ($rgb=="2") {$rgb=0;$Gray1[$ix] = $rgb;continue;}<br />               if ($rgb=="0") {$rgb=2;$Gray1[$ix] = $rgb;continue;}<br />               if ($rgb=="1") {$rgb=1;$Gray1[$ix] = $rgb;continue;}<br />               if ($rgb=="3") {$rgb=3;$Gray1[$ix] = $rgb;continue;}<br />           }<br />                $gray1 = $Gray1[0];<br />                $gray2 = $Gray1[1] &lt;&lt; 2;<br />                $gray3 = $Gray1[2] &lt;&lt; 4;<br />                $gray4 = $Gray1[3] &lt;&lt; 6;<br />                <br />                // Pack 4 pixels into a single byte for CIP images<br />                $grey = $gray1 | $gray2 | $gray3 | $gray4;<br /><br />                // CIP image data is sent in HEX, strtoupper is not really needed.<br />                $code = strtoupper(dechex($grey)); <br /><br />                // My quick fix to padding single HEX values<br />                if (strlen($code)==1) $code = "0".$code;<br />                echo $code;<br />                <br />       }<br /><br />   }<br />    echo "&lt;/Data&gt;";<br />    echo "&lt;Title&gt;$myvar&lt;/Title&gt; ";<br />    echo "&lt;Prompt&gt;$city&lt;/Prompt&gt; ";<br />    echo "&lt;/CiscoIPPhoneImage&gt;";<br />    exit;</span></code></div>
  </div>
 </div>
  <div class="note" id="39920">  <div class="votes">
    <div id="Vu39920">
    <a href="/manual/vote-note.php?id=39920&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39920">
    <a href="/manual/vote-note.php?id=39920&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39920" title="no votes...">
    0
    </div>
  </div>
  <a href="#39920" class="name">
  <strong class="user"><em>annonymous at example dot com</em></strong></a><a class="genanchor" href="#39920"> &para;</a><div class="date" title="2004-02-15 04:25"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39920">
<div class="phpcode"><code><span class="html">in addition to code_couturier - try this formula to calculate gray-value (luminance) in his "more exact" way:<br /><br />$gray = round(.299*$red + .587*$green + .114*$blue);</span></code></div>
  </div>
 </div>
  <div class="note" id="36668">  <div class="votes">
    <div id="Vu36668">
    <a href="/manual/vote-note.php?id=36668&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36668">
    <a href="/manual/vote-note.php?id=36668&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36668" title="no votes...">
    0
    </div>
  </div>
  <a href="#36668" class="name">
  <strong class="user"><em>code_couturier at graffiti dot net</em></strong></a><a class="genanchor" href="#36668"> &para;</a><div class="date" title="2003-10-18 12:08"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36668">
<div class="phpcode"><code><span class="html"># very fast way to generate a grayscal-<br /># image from a true color image<br /><br />#...<br /><br /># --- quick grayscale image<br />for ($y = 0; $y &lt;$img_height; $y++) { <br /> for ($x = 0; $x &lt;$img_width; $x++) { <br /><br /> # here we extract the green from <br /> # the pixel at x,y , to use it as gray value<br /> $gray = (ImageColorAt($image, $x, $y) &gt;&gt; 8) &amp; 0xFF;<br /><br /> # a more exact way would be this:<br /> # $rgb = ImageColorAt($image, $x, $y);<br /> # $red = ($rgb &gt;&gt; 16) &amp; 0xFF;<br /> # $green = (trgb &gt;&gt; 8) &amp; 0xFF;<br /> # $blue = $rgb &amp; 0xFF;<br /> # $gray = (int)(($red+$green+$blue)/4); <br /><br /> # and here we set the new pixel/color<br />  imagesetpixel ($image, $x, $y, <br />  ImageColorAllocate ($image, $gray,$gray,$gray));<br /> }<br />}<br /> <br /># ...</span></code></div>
  </div>
 </div>
  <div class="note" id="94111">  <div class="votes">
    <div id="Vu94111">
    <a href="/manual/vote-note.php?id=94111&amp;page=function.imagecopymergegray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94111">
    <a href="/manual/vote-note.php?id=94111&amp;page=function.imagecopymergegray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94111" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#94111" class="name">
  <strong class="user"><em>anonymous at domain dot com</em></strong></a><a class="genanchor" href="#94111"> &para;</a><div class="date" title="2009-10-16 03:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94111">
<div class="phpcode"><code><span class="html">grayscale conversion is built-in with imagefilter(). <br /><br /><span class="default">&lt;?php<br />     </span><span class="comment">/* other code */<br /><br />     </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'some.jpg'</span><span class="keyword">);<br />     </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">IMG_FILTER_GRAYSCALE</span><span class="keyword">);<br /><br />     </span><span class="comment">/* other code (ie save) */<br /><br />     </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br />     </span><span class="comment">/* other code */<br /></span><span class="default">?&gt;<br /></span><br />you could create the sepia effect by the following:<br /><br /><span class="default">&lt;?php<br />     </span><span class="comment">/* other code */<br /><br />     </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'some.jpg'</span><span class="keyword">);<br />     </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">IMG_FILTER_GRAYSCALE</span><span class="keyword">);<br />     </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">112</span><span class="keyword">, </span><span class="default">66</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br />     </span><span class="comment">//Wikipedia RGB definition of sepia<br /><br />     /* other code (ie save) */<br /><br />     </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br />     </span><span class="comment">/* other code */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecopymergegray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopymergegray.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.imagecopymergegray.php" title="imagecopymergegray">imagecopymergegray</a>
                        </li>
                                                <li class="">
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
