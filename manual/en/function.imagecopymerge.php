<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecopymerge - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecopymerge.php">
 <link rel="shorturl" href="https://www.php.net/imagecopymerge">
 <link rel="alternate" href="https://www.php.net/imagecopymerge" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecopy.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecopymergegray.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecopymerge.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecopymerge.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecopymerge.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecopymerge.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecopymerge.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecopymerge.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecopymerge.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecopymerge.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecopymerge.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecopymerge.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecopymerge.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copy and merge part of an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecopymerge - Manual" />
<meta name="twitter:description" content="Copy and merge part of an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecopymerge - Manual" />
<meta itemprop="description" content="Copy and merge part of an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copy and merge part of an image" />

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
        <a href="function.imagecopymergegray.php">
          imagecopymergegray &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecopy.php">
          &laquo; imagecopy        </a>
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
            <option value='en/function.imagecopymerge.php' selected="selected">English</option>
            <option value='de/function.imagecopymerge.php'>German</option>
            <option value='es/function.imagecopymerge.php'>Spanish</option>
            <option value='fr/function.imagecopymerge.php'>French</option>
            <option value='it/function.imagecopymerge.php'>Italian</option>
            <option value='ja/function.imagecopymerge.php'>Japanese</option>
            <option value='pt_BR/function.imagecopymerge.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecopymerge.php'>Russian</option>
            <option value='tr/function.imagecopymerge.php'>Turkish</option>
            <option value='uk/function.imagecopymerge.php'>Ukrainian</option>
            <option value='zh/function.imagecopymerge.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecopymerge" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecopymerge</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecopymerge</span> &mdash; <span class="dc-title">Copy and merge part of an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecopymerge-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecopymerge</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$dst_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$src_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pct</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Copy a part of <code class="parameter">src_image</code> onto
   <code class="parameter">dst_image</code> starting at the x,y coordinates
   <code class="parameter">src_x</code>, <code class="parameter">src_y</code> with
   a width of <code class="parameter">src_width</code> and a height of
   <code class="parameter">src_height</code>.  The portion defined will be copied
   onto the x,y coordinates, <code class="parameter">dst_x</code> and
   <code class="parameter">dst_y</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecopymerge-parameters">
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
       The two images will be merged according to <code class="parameter">pct</code>
       which can range from 0 to 100.  When <code class="parameter">pct</code> = 0,
       no action is taken, when 100 this function behaves identically
       to <span class="function"><a href="function.imagecopy.php" class="function">imagecopy()</a></span> for pallete images, except for
       ignoring alpha components, while it implements alpha transparency
       for true colour images.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecopymerge-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecopymerge-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecopymerge-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2858">
    <p><strong>Example #1 Merging two copies of the PHP.net logo with 75% transparency</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create image instances<br /></span><span style="color: #0000BB">$dest </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #DD0000">'php.gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$src </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #DD0000">'php.gif'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Copy and merge<br /></span><span style="color: #0000BB">imagecopymerge</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">, </span><span style="color: #0000BB">$src</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">47</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecopymerge.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecopymerge%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecopymerge&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopymerge.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92787">  <div class="votes">
    <div id="Vu92787">
    <a href="/manual/vote-note.php?id=92787&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92787">
    <a href="/manual/vote-note.php?id=92787&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92787" title="71% like this...">
    77
    </div>
  </div>
  <a href="#92787" class="name">
  <strong class="user"><em>Sina Salek</em></strong></a><a class="genanchor" href="#92787"> &para;</a><div class="date" title="2009-08-09 01:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92787">
<div class="phpcode"><code><span class="html">I've just checked PHP's issue tracker and a core developer says that this function was never meant to support alpha channel! and they refused to commit the provided patch! so ridicules 
<br />Anyway i tried rodrigo's workaround and it worked quite well, thanks rodrigo for sharing it.
<br />I came up with another idea which is much faster than his solution, (it may need a little bit more memory)
<br />
<br />Hope it helps someone.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * PNG ALPHA CHANNEL SUPPORT for imagecopymerge();
<br /> * by Sina Salek
<br /> *
<br /> * Bugfix by Ralph Voigt (bug which causes it
<br /> * to work only for $src_x = $src_y = 0. 
<br /> * Also, inverting opacity is not necessary.)
<br /> * 08-JAN-2011
<br /> *
<br /> **/
<br />    </span><span class="keyword">function </span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">){
<br />        </span><span class="comment">// creating a cut resource
<br />        </span><span class="default">$cut </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);
<br />
<br />        </span><span class="comment">// copying relevant section from background to the cut resource
<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$cut</span><span class="keyword">, </span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// copying relevant section from watermark to the cut resource
<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$cut</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// insert cut resource to destination image
<br />        </span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$cut</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">);
<br />    } 
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107060">  <div class="votes">
    <div id="Vu107060">
    <a href="/manual/vote-note.php?id=107060&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107060">
    <a href="/manual/vote-note.php?id=107060&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107060" title="72% like this...">
    16
    </div>
  </div>
  <a href="#107060" class="name">
  <strong class="user"><em>Leo</em></strong></a><a class="genanchor" href="#107060"> &para;</a><div class="date" title="2012-01-04 06:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107060">
<div class="phpcode"><code><span class="html">imagecopymerge PHP function helped me to create a fast method that replaces one color by another in true color images.<br /><br />Beforehand for this purpose I had to loop over all the pixels of an image and replace color pixel by pixel using imagecolorat and imagesetpixel; this method is really slow for large images.<br /><br />So here is the fast one:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">replaceColorInImage </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$old_r</span><span class="keyword">, </span><span class="default">$old_g</span><span class="keyword">, </span><span class="default">$old_b</span><span class="keyword">, </span><span class="default">$new_r</span><span class="keyword">, </span><span class="default">$new_g</span><span class="keyword">, </span><span class="default">$new_b</span><span class="keyword">)<br />{<br />    </span><span class="default">imagecolortransparent </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$old_r</span><span class="keyword">, </span><span class="default">$old_g</span><span class="keyword">, </span><span class="default">$old_b</span><span class="keyword">));<br />    <br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    <br />    </span><span class="default">$resImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor </span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />    <br />    </span><span class="default">imagefill </span><span class="keyword">(</span><span class="default">$resImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$resImage</span><span class="keyword">, </span><span class="default">$new_r</span><span class="keyword">, </span><span class="default">$new_g</span><span class="keyword">, </span><span class="default">$new_b</span><span class="keyword">));<br />    <br />    </span><span class="default">imagecopymerge </span><span class="keyword">(</span><span class="default">$resImage</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />    <br />    return </span><span class="default">$resImage</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53100">  <div class="votes">
    <div id="Vu53100">
    <a href="/manual/vote-note.php?id=53100&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53100">
    <a href="/manual/vote-note.php?id=53100&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53100" title="69% like this...">
    9
    </div>
  </div>
  <a href="#53100" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#53100"> &para;</a><div class="date" title="2005-05-23 11:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53100">
<div class="phpcode"><code><span class="html">Building upon backglancer's and stefan's posts below, the following script will lay a 24-bit PNG watermark over any image.<br /><br />To prepare a 24-bit watermark, I recommend creating a white logo or text over a transparent background in Photoshop.  Save this as a 24-bit PNG via 'Save for the Web...'.  Be sure to set the transparency of the logo layer in Photoshop itself.  30-40% is a good setting.<br /><br />Once the assets are prepared, throw the full or relative server paths at the watermark function below:<br /><br />/******************************************************************/<br /><br />function watermark($sourcefile, $watermarkfile) {<br />  <br />    #<br />    # $sourcefile = Filename of the picture to be watermarked.<br />    # $watermarkfile = Filename of the 24-bit PNG watermark file.<br />    #<br />    <br />    //Get the resource ids of the pictures<br />    $watermarkfile_id = imagecreatefrompng($watermarkfile);<br />    <br />    imageAlphaBlending($watermarkfile_id, false);<br />    imageSaveAlpha($watermarkfile_id, true);<br /><br />    $fileType = strtolower(substr($sourcefile, strlen($sourcefile)-3));<br /><br />    switch($fileType) {<br />        case('gif'):<br />            $sourcefile_id = imagecreatefromgif($sourcefile);<br />            break;<br />            <br />        case('png'):<br />            $sourcefile_id = imagecreatefrompng($sourcefile);<br />            break;<br />            <br />        default:<br />            $sourcefile_id = imagecreatefromjpeg($sourcefile);<br />    }<br /><br />    //Get the sizes of both pix   <br />  $sourcefile_width=imageSX($sourcefile_id);<br />  $sourcefile_height=imageSY($sourcefile_id);<br />  $watermarkfile_width=imageSX($watermarkfile_id);<br />  $watermarkfile_height=imageSY($watermarkfile_id);<br /><br />    $dest_x = ( $sourcefile_width / 2 ) - ( $watermarkfile_width / 2 );<br />    $dest_y = ( $sourcefile_height / 2 ) - ( $watermarkfile_height / 2 );<br />    <br />    // if a gif, we have to upsample it to a truecolor image<br />    if($fileType == 'gif') {<br />        // create an empty truecolor container<br />        $tempimage = imagecreatetruecolor($sourcefile_width,<br />                                                                            $sourcefile_height);<br />        <br />        // copy the 8-bit gif into the truecolor image<br />        imagecopy($tempimage, $sourcefile_id, 0, 0, 0, 0, <br />                            $sourcefile_width, $sourcefile_height);<br />        <br />        // copy the source_id int<br />        $sourcefile_id = $tempimage;<br />    }<br /><br />    imagecopy($sourcefile_id, $watermarkfile_id, $dest_x, $dest_y, 0, 0,<br />                        $watermarkfile_width, $watermarkfile_height);<br /><br />    //Create a jpeg out of the modified picture<br />    switch($fileType) {<br />    <br />        // remember we don't need gif any more, so we use only png or jpeg.<br />        // See the upsaple code immediately above to see how we handle gifs<br />        case('png'):<br />            header("Content-type: image/png");<br />            imagepng ($sourcefile_id);<br />            break;<br />            <br />        default:<br />            header("Content-type: image/jpg");<br />            imagejpeg ($sourcefile_id);<br />    }           <br />  <br />    imagedestroy($sourcefile_id);<br />    imagedestroy($watermarkfile_id);<br />    <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="107066">  <div class="votes">
    <div id="Vu107066">
    <a href="/manual/vote-note.php?id=107066&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107066">
    <a href="/manual/vote-note.php?id=107066&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107066" title="60% like this...">
    1
    </div>
  </div>
  <a href="#107066" class="name">
  <strong class="user"><em>Leo</em></strong></a><a class="genanchor" href="#107066"> &para;</a><div class="date" title="2012-01-04 09:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107066">
<div class="phpcode"><code><span class="html">The following function creates mask of a true color image for a given color. Beforehand for creating an image mask I used to loop over all image pixels and check their color using imagecolorat and copy if the color matches with imagesetpixel. This was very slow for large images, so the following code improves the process.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">getOppositeColor </span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">)<br />    {<br />        return (<br />                    ( (</span><span class="default">255 </span><span class="keyword">- (</span><span class="default">$color </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">) &lt;&lt; </span><span class="default">16 </span><span class="keyword">) +<br />                    ( (</span><span class="default">255 </span><span class="keyword">- (</span><span class="default">$color </span><span class="keyword">&gt;&gt; </span><span class="default">8  </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">) &lt;&lt; </span><span class="default">8  </span><span class="keyword">) +<br />                    ( (</span><span class="default">255 </span><span class="keyword">- (</span><span class="default">$color         </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">)         )<br />                );<br />    }<br /><br />    function </span><span class="default">createImageMask </span><span class="keyword">(&amp;</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)<br />    {<br />        </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />        </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />        <br />        </span><span class="default">$tmpImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor </span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br /><br />        </span><span class="default">imagecopy </span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br /><br />        </span><span class="default">imagefilter </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">IMG_FILTER_NEGATE</span><span class="keyword">);<br /><br />        </span><span class="default">imagecolortransparent </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">getOppositeColor </span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">));<br />        <br />        </span><span class="default">imagecopymerge </span><span class="keyword">(</span><span class="default">$tmpImage</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /><br />        </span><span class="default">imagedestroy </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />        <br />        </span><span class="default">$image </span><span class="keyword">= </span><span class="default">$tmpImage</span><span class="keyword">;        <br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />So for example, if we have a photo and we specify color = (255, 0, 0), i.e. red, the result will be image of the same size with red pixels everywhere the original photo was red and grey pixels exerywhere else.</span></code></div>
  </div>
 </div>
  <div class="note" id="52903">  <div class="votes">
    <div id="Vu52903">
    <a href="/manual/vote-note.php?id=52903&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52903">
    <a href="/manual/vote-note.php?id=52903&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52903" title="58% like this...">
    3
    </div>
  </div>
  <a href="#52903" class="name">
  <strong class="user"><em>backglancer in the hotmail</em></strong></a><a class="genanchor" href="#52903"> &para;</a><div class="date" title="2005-05-17 02:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52903">
<div class="phpcode"><code><span class="html">I was about to kill myself....<br />any one of you trying to merge a SEMI transparent png...<br />use imagecopy   :)<br />&lt;?<br />$flag = imagecreatefrompng('flags/images/flagWhiteFill.png');<br />$mask = imagecreatefrompng('flags/images/flag_transparent.png');<br /><br />imagealphablending($flag, 1);<br />imagealphablending($mask, 1);<br /><br />imagecopy($flag, $mask, 0,0,0,0,25,43);<br /><br />Header("Content-type: image/jpeg");<br />imagepng($flag);<br />?&gt;<br /><br />ImageSaveAlpha(resource, bool);   made the transparent color - not transparent... dunno why :)</span></code></div>
  </div>
 </div>
  <div class="note" id="88456">  <div class="votes">
    <div id="Vu88456">
    <a href="/manual/vote-note.php?id=88456&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88456">
    <a href="/manual/vote-note.php?id=88456&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88456" title="55% like this...">
    3
    </div>
  </div>
  <a href="#88456" class="name">
  <strong class="user"><em>rodrigo dot polo at gmail dot com</em></strong></a><a class="genanchor" href="#88456"> &para;</a><div class="date" title="2009-01-25 02:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88456">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * PNG ALPHA CHANNEL SUPPORT for imagecopymerge();
<br /> * This is a function like imagecopymerge but it handle alpha channel well!!!
<br /> **/
<br />
<br />// A fix to get a function like imagecopymerge WITH ALPHA SUPPORT
<br />// Main script by aiden dot mail at freemail dot hu 
<br />// Transformed to imagecopymerge_alpha() by rodrigo dot polo at gmail dot com
<br /></span><span class="keyword">function </span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">){
<br />    if(!isset(</span><span class="default">$pct</span><span class="keyword">)){ 
<br />        return </span><span class="default">false</span><span class="keyword">; 
<br />    }
<br />    </span><span class="default">$pct </span><span class="keyword">/= </span><span class="default">100</span><span class="keyword">;
<br />    </span><span class="comment">// Get image width and height
<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$src_im </span><span class="keyword">);
<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$src_im </span><span class="keyword">);
<br />    </span><span class="comment">// Turn alpha blending off
<br />    </span><span class="default">imagealphablending</span><span class="keyword">( </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">false </span><span class="keyword">);
<br />    </span><span class="comment">// Find the most opaque pixel in the image (the one with the smallest alpha value)
<br />    </span><span class="default">$minalpha </span><span class="keyword">= </span><span class="default">127</span><span class="keyword">;
<br />    for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ )
<br />    for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ ){
<br />        </span><span class="default">$alpha </span><span class="keyword">= ( </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">) &gt;&gt; </span><span class="default">24 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />        if( </span><span class="default">$alpha </span><span class="keyword">&lt; </span><span class="default">$minalpha </span><span class="keyword">){ 
<br />            </span><span class="default">$minalpha </span><span class="keyword">= </span><span class="default">$alpha</span><span class="keyword">; 
<br />        }
<br />    }
<br />    </span><span class="comment">//loop through image pixels and modify alpha for each
<br />    </span><span class="keyword">for( </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++ ){
<br />        for( </span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++ ){
<br />            </span><span class="comment">//get current alpha value (represents the TANSPARENCY!)
<br />            </span><span class="default">$colorxy </span><span class="keyword">= </span><span class="default">imagecolorat</span><span class="keyword">( </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y </span><span class="keyword">);
<br />            </span><span class="default">$alpha </span><span class="keyword">= ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">24 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">;
<br />            </span><span class="comment">//calculate new alpha
<br />            </span><span class="keyword">if( </span><span class="default">$minalpha </span><span class="keyword">!== </span><span class="default">127 </span><span class="keyword">){ 
<br />                </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">127 </span><span class="keyword">+ </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$pct </span><span class="keyword">* ( </span><span class="default">$alpha </span><span class="keyword">- </span><span class="default">127 </span><span class="keyword">) / ( </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$minalpha </span><span class="keyword">); 
<br />            } else { 
<br />                </span><span class="default">$alpha </span><span class="keyword">+= </span><span class="default">127 </span><span class="keyword">* </span><span class="default">$pct</span><span class="keyword">;
<br />            }
<br />            </span><span class="comment">//get the color index with new alpha
<br />            </span><span class="default">$alphacolorxy </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">( </span><span class="default">$src_im</span><span class="keyword">, ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">16 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">, ( </span><span class="default">$colorxy </span><span class="keyword">&gt;&gt; </span><span class="default">8 </span><span class="keyword">) &amp; </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">$colorxy </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">$alpha </span><span class="keyword">);
<br />            </span><span class="comment">//set pixel with the new color + opacity
<br />            </span><span class="keyword">if( !</span><span class="default">imagesetpixel</span><span class="keyword">( </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$alphacolorxy </span><span class="keyword">) ){ 
<br />                return </span><span class="default">false</span><span class="keyword">; 
<br />            }
<br />        }
<br />    }
<br />    </span><span class="comment">// The image copy
<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// USAGE EXAMPLE:
<br /></span><span class="default">$img_a </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'image1.png'</span><span class="keyword">);
<br /></span><span class="default">$img_b </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'wm2.png'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// SAME COMMANDS:
<br /></span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$img_a</span><span class="keyword">, </span><span class="default">$img_b</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img_b</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img_b</span><span class="keyword">),</span><span class="default">50</span><span class="keyword">);
<br />
<br /></span><span class="comment">// OUTPUT IMAGE:
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);
<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img_a</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img_a</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85517">  <div class="votes">
    <div id="Vu85517">
    <a href="/manual/vote-note.php?id=85517&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85517">
    <a href="/manual/vote-note.php?id=85517&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85517" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85517" class="name">
  <strong class="user"><em>gigitrix</em></strong></a><a class="genanchor" href="#85517"> &para;</a><div class="date" title="2008-09-03 06:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85517">
<div class="phpcode"><code><span class="html">Some highly amusing stuff: This code appears normal and is a way to cut out slices of an image randomly.<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Content-Type: image/jpeg"</span><span class="keyword">);<br /></span><span class="default">$width</span><span class="keyword">=</span><span class="default">837</span><span class="keyword">;<br /></span><span class="default">$height</span><span class="keyword">=</span><span class="default">771</span><span class="keyword">;<br /></span><span class="default">$origim </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"theimage.jpeg"</span><span class="keyword">); </span><span class="comment">/* Attempt to open */<br /></span><span class="default">$imagetodisplay</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /><br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">100</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />{<br /></span><span class="default">$xPos</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">-</span><span class="default">9</span><span class="keyword">);<br /></span><span class="default">$yPos</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">-</span><span class="default">9</span><span class="keyword">);<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imagetodisplay</span><span class="keyword">, </span><span class="default">$origim</span><span class="keyword">, </span><span class="default">$xPos</span><span class="keyword">, </span><span class="default">$yPos </span><span class="keyword">, </span><span class="default">$xPos</span><span class="keyword">, </span><span class="default">$yPos </span><span class="keyword">, </span><span class="default">10  </span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />}<br /><br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$imagetodisplay</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imagetodisplay</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$origim</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Try running this however and an omitted detail adds to the fun. Since the first colour that is defined is taken to be the background colour, we have a random colour selected from $origim as the background colour for $imagetodisplay, but this random colour is weighted according to the background image. It was a surprise (I thought the bg would be black) but I am now keeping it as it looks good.</span></code></div>
  </div>
 </div>
  <div class="note" id="48169">  <div class="votes">
    <div id="Vu48169">
    <a href="/manual/vote-note.php?id=48169&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48169">
    <a href="/manual/vote-note.php?id=48169&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48169" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48169" class="name">
  <strong class="user"><em>jtacon at php dot net</em></strong></a><a class="genanchor" href="#48169"> &para;</a><div class="date" title="2004-12-14 05:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48169">
<div class="phpcode"><code><span class="html">This example shows how to use imageCopyMerge to create a water mark function with four random positions (the corners).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">waterMark</span><span class="keyword">(</span><span class="default">$fileInHD</span><span class="keyword">, </span><span class="default">$wmFile</span><span class="keyword">, </span><span class="default">$transparency </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">, </span><span class="default">$jpegQuality </span><span class="keyword">= </span><span class="default">90</span><span class="keyword">, </span><span class="default">$margin </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">) {<br /><br /> </span><span class="default">$wmImg   </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$wmFile</span><span class="keyword">);<br /> </span><span class="default">$jpegImg </span><span class="keyword">= </span><span class="default">imageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$fileInHD</span><span class="keyword">);<br /><br /> </span><span class="comment">// Water mark random position<br /> </span><span class="default">$wmX </span><span class="keyword">= (bool)</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) ? </span><span class="default">$margin </span><span class="keyword">: (</span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$jpegImg</span><span class="keyword">) - </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$wmImg</span><span class="keyword">)) - </span><span class="default">$margin</span><span class="keyword">;<br /> </span><span class="default">$wmY </span><span class="keyword">= (bool)</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) ? </span><span class="default">$margin </span><span class="keyword">: (</span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$jpegImg</span><span class="keyword">) - </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$wmImg</span><span class="keyword">)) - </span><span class="default">$margin</span><span class="keyword">;<br /><br /> </span><span class="comment">// Water mark process<br /> </span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$jpegImg</span><span class="keyword">, </span><span class="default">$wmImg</span><span class="keyword">, </span><span class="default">$wmX</span><span class="keyword">, </span><span class="default">$wmY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$wmImg</span><span class="keyword">), </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$wmImg</span><span class="keyword">), </span><span class="default">$transparency</span><span class="keyword">);<br /><br /> </span><span class="comment">// Overwriting image<br /> </span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$jpegImg</span><span class="keyword">, </span><span class="default">$fileInHD</span><span class="keyword">, </span><span class="default">$jpegQuality</span><span class="keyword">);<br />}<br /><br /></span><span class="default">waterMark</span><span class="keyword">(</span><span class="string">'myImage.jpg'</span><span class="keyword">,</span><span class="string">'waterMark.gif'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />HTH.<br /><br />Javier Tac?n.</span></code></div>
  </div>
 </div>
  <div class="note" id="14316">  <div class="votes">
    <div id="Vu14316">
    <a href="/manual/vote-note.php?id=14316&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14316">
    <a href="/manual/vote-note.php?id=14316&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14316" title="100% like this...">
    1
    </div>
  </div>
  <a href="#14316" class="name">
  <strong class="user"><em>stefan dot wehowsky at profilschmiede dot de</em></strong></a><a class="genanchor" href="#14316"> &para;</a><div class="date" title="2001-07-26 09:32"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14316">
<div class="phpcode"><code><span class="html">This function is intended to serve as an example for the "imageCopyMerge"-function.
<br />I hope it will help some of the less experienced php-coders here.
<br />I wrote it to mark objects of a real estate broker as "sold" by copying the "sold"-picture right into the picture of the house.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//$sourcefile = Filename of the picture into that $insertfile will be inserted.
<br />//$insertfile = Filename of the picture that is to be inserted into $sourcefile.
<br />//$targetfile = Filename of the modified picture.
<br />//$transition = Intensity of the transition (in percent)
<br />//$pos          = Position where $insertfile will be inserted in $sourcefile
<br />//                0 = middle
<br />//                1 = top left
<br />//                2 = top right
<br />//                3 = bottom right
<br />//                4 = bottom left
<br />//                5 = top middle
<br />//                6 = middle right
<br />//                7 = bottom middle
<br />//                8 = middle left
<br />//
<br />//
<br /></span><span class="keyword">function </span><span class="default">mergePix</span><span class="keyword">(</span><span class="default">$sourcefile</span><span class="keyword">,</span><span class="default">$insertfile</span><span class="keyword">, </span><span class="default">$targetfile</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$transition</span><span class="keyword">=</span><span class="default">50</span><span class="keyword">)
<br />{
<br />    
<br /></span><span class="comment">//Get the resource id?s of the pictures
<br />    </span><span class="default">$insertfile_id </span><span class="keyword">= </span><span class="default">imageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$insertfile</span><span class="keyword">);
<br />    </span><span class="default">$sourcefile_id </span><span class="keyword">= </span><span class="default">imageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$sourcefile</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Get the sizes of both pix    
<br />    </span><span class="default">$sourcefile_width</span><span class="keyword">=</span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$sourcefile_id</span><span class="keyword">);
<br />    </span><span class="default">$sourcefile_height</span><span class="keyword">=</span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$sourcefile_id</span><span class="keyword">);
<br />    </span><span class="default">$insertfile_width</span><span class="keyword">=</span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$insertfile_id</span><span class="keyword">);
<br />    </span><span class="default">$insertfile_height</span><span class="keyword">=</span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$insertfile_id</span><span class="keyword">);
<br />
<br /></span><span class="comment">//middle
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= ( </span><span class="default">$sourcefile_width </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$insertfile_width </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">);
<br />        </span><span class="default">$dest_y </span><span class="keyword">= ( </span><span class="default">$sourcefile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$insertfile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">);
<br />    }
<br />
<br /></span><span class="comment">//top left
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//top right
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$sourcefile_width </span><span class="keyword">- </span><span class="default">$insertfile_width</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//bottom right
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">3 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$sourcefile_width </span><span class="keyword">- </span><span class="default">$insertfile_width</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$sourcefile_height </span><span class="keyword">- </span><span class="default">$insertfile_height</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//bottom left    
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">4 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$sourcefile_height </span><span class="keyword">- </span><span class="default">$insertfile_height</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//top middle
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">5 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= ( ( </span><span class="default">$sourcefile_width </span><span class="keyword">- </span><span class="default">$insertfile_width </span><span class="keyword">) / </span><span class="default">2 </span><span class="keyword">);
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//middle right
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">6 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$sourcefile_width </span><span class="keyword">- </span><span class="default">$insertfile_width</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= ( </span><span class="default">$sourcefile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$insertfile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">);
<br />    }
<br />        
<br /></span><span class="comment">//bottom middle    
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">7 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= ( ( </span><span class="default">$sourcefile_width </span><span class="keyword">- </span><span class="default">$insertfile_width </span><span class="keyword">) / </span><span class="default">2 </span><span class="keyword">);
<br />        </span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$sourcefile_height </span><span class="keyword">- </span><span class="default">$insertfile_height</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//middle left
<br />    </span><span class="keyword">if( </span><span class="default">$pos </span><span class="keyword">== </span><span class="default">8 </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$dest_y </span><span class="keyword">= ( </span><span class="default">$sourcefile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">) - ( </span><span class="default">$insertfile_height </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">);
<br />    }
<br />    
<br /></span><span class="comment">//The main thing : merge the two pix    
<br />    </span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$sourcefile_id</span><span class="keyword">, </span><span class="default">$insertfile_id</span><span class="keyword">,</span><span class="default">$dest_x</span><span class="keyword">,</span><span class="default">$dest_y</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$insertfile_width</span><span class="keyword">,</span><span class="default">$insertfile_height</span><span class="keyword">,</span><span class="default">$transition</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Create a jpeg out of the modified picture
<br />    </span><span class="default">imagejpeg </span><span class="keyword">(</span><span class="default">$sourcefile_id</span><span class="keyword">,</span><span class="string">"</span><span class="default">$targetfile</span><span class="string">"</span><span class="keyword">);
<br />    
<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42243">  <div class="votes">
    <div id="Vu42243">
    <a href="/manual/vote-note.php?id=42243&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42243">
    <a href="/manual/vote-note.php?id=42243&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42243" title="no votes...">
    0
    </div>
  </div>
  <a href="#42243" class="name">
  <strong class="user"><em>claudio dot gaetani at gdldesign dot it</em></strong></a><a class="genanchor" href="#42243"> &para;</a><div class="date" title="2004-05-09 11:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42243">
<div class="phpcode"><code><span class="html">This function is intended to serve as an example for the "imageCopyMerge"-"ImageCopyResized", "ImageColorTransparent" functions. <br />I hope it will help. <br />This function pick an image, square cut it resampled at the size requested and finishing merge the result with another one to obtain a circular image result. I have a problem to obtain an thumbnail that respect the colors and at the same time where cutted in a circular form, I hope this solution can gives you a clue to obtain a free form images, I use this one also to create multicutted images.<br /><br /><span class="default">&lt;?php<br />$generalsrc</span><span class="keyword">=</span><span class="string">"</span><span class="default">$image</span><span class="string">"</span><span class="keyword">; </span><span class="comment">//the image to resample, resize and iconaize<br /></span><span class="default">$final_thumbwidth </span><span class="keyword">=</span><span class="string">"125"</span><span class="keyword">;<br /></span><span class="default">$final_thumbheight </span><span class="keyword">=</span><span class="string">"125"</span><span class="keyword">;<br /><br /></span><span class="default">$abc </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">"</span><span class="default">$generalsrc</span><span class="string">"</span><span class="keyword">); <br /></span><span class="default">$def </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$final_thumbwidth</span><span class="keyword">, </span><span class="default">$final_thumbheight</span><span class="keyword">); <br /></span><span class="default">$src_mx </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">)-</span><span class="string">"0.1"</span><span class="keyword">); </span><span class="comment">// middle x point of the image<br /></span><span class="default">$src_my </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">)-</span><span class="string">"0.1"</span><span class="keyword">); </span><span class="comment">// middle y point of the image<br /></span><span class="default">$src_x </span><span class="keyword">= (</span><span class="default">$src_mx </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$src_y </span><span class="keyword">= (</span><span class="default">$src_my </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$src_sq </span><span class="keyword">= (</span><span class="default">$src_x </span><span class="keyword">&gt;= </span><span class="default">$src_y</span><span class="keyword">)?</span><span class="default">$src_y</span><span class="keyword">:</span><span class="default">$src_x</span><span class="keyword">; </span><span class="comment">//used to define the best size for a square cut of the image<br /></span><span class="default">$pl </span><span class="keyword">= (</span><span class="default">$src_x </span><span class="keyword">&gt;= </span><span class="default">$src_y</span><span class="keyword">)?</span><span class="string">"1"</span><span class="keyword">:</span><span class="string">"2"</span><span class="keyword">; </span><span class="comment">//define if the image is portait or landscape<br /></span><span class="default">$strt_pntx </span><span class="keyword">= (</span><span class="default">$pl</span><span class="keyword">==</span><span class="string">"1"</span><span class="keyword">)?</span><span class="default">round</span><span class="keyword">((</span><span class="default">$src_my </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">)-</span><span class="string">"0. 1"</span><span class="keyword">):</span><span class="string">"0"</span><span class="keyword">;  </span><span class="comment">//defines the x start point<br /></span><span class="default">$strt_pnty </span><span class="keyword">= (</span><span class="default">$pl</span><span class="keyword">==</span><span class="string">"2"</span><span class="keyword">)?</span><span class="default">round</span><span class="keyword">((</span><span class="default">$src_mx </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">)-</span><span class="string">"0. 1"</span><span class="keyword">):</span><span class="string">"0"</span><span class="keyword">;  </span><span class="comment">//defines the y start point<br /><br /></span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$def</span><span class="keyword">, </span><span class="default">$abc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$strt_pntx</span><span class="keyword">, </span><span class="default">$strt_pnty</span><span class="keyword">, </span><span class="default">$final_thumbwidth</span><span class="keyword">, </span><span class="default">$final_thumbheight</span><span class="keyword">, </span><span class="default">$src_sq</span><span class="keyword">, </span><span class="default">$src_sq</span><span class="keyword">);<br /><br /></span><span class="default">$overlay_img </span><span class="keyword">= </span><span class="default">imagecreatefromPNG</span><span class="keyword">(</span><span class="string">"circle_125.png"</span><span class="keyword">); </span><span class="comment">//NOTE use png for this<br /></span><span class="default">$src_w </span><span class="keyword">= </span><span class="string">"ImageSX(</span><span class="default">$overlay_img</span><span class="string">)"</span><span class="keyword">;<br /></span><span class="default">$src_h  </span><span class="keyword">= </span><span class="string">"ImageSY(</span><span class="default">$overlay_img</span><span class="string">)"</span><span class="keyword">;<br /><br /></span><span class="default">$can_img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);<br /><br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">ImageColorAllocate </span><span class="keyword">(</span><span class="default">$overlay_img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$overlay_img </span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br /><br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$can_img</span><span class="keyword">, </span><span class="default">$def</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">);<br /></span><span class="default">imagecopymerge</span><span class="keyword">(</span><span class="default">$can_img</span><span class="keyword">, </span><span class="default">$overlay_img </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$overlay_img</span><span class="keyword">), </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$overlay_img</span><span class="keyword">),</span><span class="default">100</span><span class="keyword">); </span><span class="comment">//Imagecopy won't work, you must used imagecopymerge<br /><br /></span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$can_img</span><span class="keyword">,</span><span class="string">"merge_</span><span class="default">$generalsrc</span><span class="string">"</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$overlay_img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$can_img</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">); <br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$def</span><span class="keyword">); <br /><br />print </span><span class="string">"&lt;HTML&gt;&lt;HEAD&gt;&lt;TITLE&gt;test&lt;/TITLE&gt;&lt;/HEAD&gt;&lt;BODY&gt;<br />original:&lt;hr&gt;&lt;img src=\"</span><span class="default">$generalsrc</span><span class="string">\" width=\"300\"&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;new:&lt;hr&gt;&lt;img src=\"merge_</span><span class="default">$generalsrc</span><span class="string">\"&gt;<br />&lt;br&gt;width = </span><span class="default">$src_x</span><span class="string"><br />&lt;br&gt;height = </span><span class="default">$src_y</span><span class="string"><br />&lt;br&gt;mdlw = </span><span class="default">$src_mx</span><span class="string"><br />&lt;br&gt;mdlh = </span><span class="default">$src_my</span><span class="string"><br />&lt;br&gt;sqr = </span><span class="default">$src_sq</span><span class="string"><br />&lt;br&gt;pl = </span><span class="default">$pl</span><span class="string"><br />&lt;br&gt;start point x = </span><span class="default">$strt_pntx</span><span class="string"><br />&lt;br&gt;start point y = </span><span class="default">$strt_pnty</span><span class="string"><br />&lt;/BODY&gt;&lt;/HTML&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58361">  <div class="votes">
    <div id="Vu58361">
    <a href="/manual/vote-note.php?id=58361&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58361">
    <a href="/manual/vote-note.php?id=58361&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58361" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#58361" class="name">
  <strong class="user"><em>nick at prient dot co dot uk</em></strong></a><a class="genanchor" href="#58361"> &para;</a><div class="date" title="2005-11-01 02:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58361">
<div class="phpcode"><code><span class="html">Task: Rotate a large image, then reduce it in size and place it on a small background (i.e. as an Inset).<br /><br />Problem: If you resize the image first, the rotation becomes hugely aliased...  So, it makes sense to rotate it first, then shrink it.<br />Unfortunately, when you resample the image, you lose the background color (at least, some of it may change), so you can no longer set transparancy as you require.  If instead you resize the image (rather than resample), again, the aliasing looks bad.<br /><br />Solution:  Resize the background - make it bigger.  Then add the original (large) inset, and resize the whole thing back to normal.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* We will shrink the inset to 25% */<br /></span><span class="default">$resizePercentage </span><span class="keyword">= </span><span class="default">0.25</span><span class="keyword">;<br /><br /></span><span class="comment">/* Load a source image and a background */<br /></span><span class="default">$iSource </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$source_file</span><span class="keyword">);<br /></span><span class="default">$iBackground </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$background_file</span><span class="keyword">);<br /><br /></span><span class="comment">/* Do something here, such a rotate, skew etc */<br /></span><span class="keyword">...<br /></span><span class="comment">/* Assume $iSource is still the image we want to insert onto the background */<br /><br />/* Set the background color to be transparent */<br /></span><span class="default">$cBackground </span><span class="keyword">= </span><span class="default">ImageColorClosest</span><span class="keyword">(</span><span class="default">$iSource</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">ImageColorTransparent</span><span class="keyword">(</span><span class="default">$iSource</span><span class="keyword">, </span><span class="default">$cBackground</span><span class="keyword">);<br /><br /></span><span class="comment">/* Resize the background - make it huge */<br /></span><span class="default">$iBackground </span><span class="keyword">= </span><span class="default">ImageResize</span><span class="keyword">(</span><span class="default">$iTemplate</span><span class="keyword">, </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) / </span><span class="default">$resizePercentage</span><span class="keyword">, </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) / </span><span class="default">$resizePercentage</span><span class="keyword">);<br /></span><span class="comment">/* Place the image on the background - all full size, so no aliasing issues */<br /></span><span class="default">ImageCopyMerge</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">, </span><span class="default">$iSource</span><span class="keyword">, <br />    ((</span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) - </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$iSource</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">), <br />    ((</span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) - </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$iSource</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">) - </span><span class="default">25</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$iWorking</span><span class="keyword">), </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$iSource</span><span class="keyword">), </span><span class="default">100</span><span class="keyword">);<br /></span><span class="comment">/* Shrink the combined image... no issues with transparancy! */<br /></span><span class="default">$iBackground </span><span class="keyword">= </span><span class="default">ImageResize</span><span class="keyword">(</span><span class="default">$iTemplate</span><span class="keyword">, </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) * </span><span class="default">$resizePercentage</span><span class="keyword">, </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$iBackground </span><span class="keyword">) * </span><span class="default">$resizePercentage</span><span class="keyword">);<br /><br /></span><span class="comment">/* Output the image as a PNG */<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">ImagePng</span><span class="keyword">(</span><span class="default">$iBackground</span><span class="keyword">);<br />exit();<br /><br />function </span><span class="default">ImageResize</span><span class="keyword">(</span><span class="default">$pImage</span><span class="keyword">, </span><span class="default">$t_width</span><span class="keyword">, </span><span class="default">$t_height</span><span class="keyword">) {<br />  </span><span class="comment">// Target image<br />  </span><span class="default">$iCanvas </span><span class="keyword">= @</span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">$t_width</span><span class="keyword">, </span><span class="default">$t_height</span><span class="keyword">);<br />  </span><span class="comment">// Source dimensions<br />  </span><span class="default">$s_width </span><span class="keyword">= </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$pImage</span><span class="keyword">);<br />  </span><span class="default">$s_height </span><span class="keyword">= </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$pImage</span><span class="keyword">);<br />  </span><span class="comment">// Copy image<br />  </span><span class="default">ImageCopyResampled</span><span class="keyword">(</span><span class="default">$iCanvas</span><span class="keyword">, </span><span class="default">$pImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$t_width</span><span class="keyword">, </span><span class="default">$t_height</span><span class="keyword">, </span><span class="default">$s_width</span><span class="keyword">, </span><span class="default">$s_height</span><span class="keyword">);<br />  </span><span class="comment">// Return image<br />  </span><span class="keyword">return </span><span class="default">$iCanvas</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="25585">  <div class="votes">
    <div id="Vu25585">
    <a href="/manual/vote-note.php?id=25585&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25585">
    <a href="/manual/vote-note.php?id=25585&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25585" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25585" class="name">
  <strong class="user"><em>jonny at sanriowasteland dot net</em></strong></a><a class="genanchor" href="#25585"> &para;</a><div class="date" title="2002-09-29 05:36"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25585">
<div class="phpcode"><code><span class="html">If you need to merge 2 png's (or  presumably 2 gifs) with different color palettes, I have found this is the function to use.  Just set pct to 99, and you are rocking.  With pct set to 100, or imagecopy for that matter, the palette seems to go wonky.  (It probably just uses the palette of the source image. but don't quote me on that).</span></code></div>
  </div>
 </div>
  <div class="note" id="52900">  <div class="votes">
    <div id="Vu52900">
    <a href="/manual/vote-note.php?id=52900&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52900">
    <a href="/manual/vote-note.php?id=52900&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52900" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#52900" class="name">
  <strong class="user"><em>barbarina_sv at libero dot it</em></strong></a><a class="genanchor" href="#52900"> &para;</a><div class="date" title="2005-05-17 01:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52900">
<div class="phpcode"><code><span class="html">I needed to draw a "pointer" image over a map, but had some problems with png image transparency.<br />So I created a png image with white background (not transparent) and merged it on my map, after defining white color as transparent:<br /><br /><span class="default">&lt;?php<br /><br />$src_file </span><span class="keyword">= </span><span class="string">'source.jpg'</span><span class="keyword">;<br />list(</span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$src_t</span><span class="keyword">, </span><span class="default">$src_a</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">);<br /><br /></span><span class="default">$ptr_file </span><span class="keyword">= </span><span class="string">'pointer.png'</span><span class="keyword">; </span><span class="comment">// must have no transparency, but white background<br /></span><span class="keyword">list(</span><span class="default">$ptr_w</span><span class="keyword">, </span><span class="default">$ptr_h</span><span class="keyword">, </span><span class="default">$ptr_t</span><span class="keyword">, </span><span class="default">$ptr_a</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$ptr_file</span><span class="keyword">);<br /><br /></span><span class="comment">// destination image dimensions:<br /></span><span class="default">$dst_w </span><span class="keyword">= </span><span class="default">400</span><span class="keyword">;<br /></span><span class="default">$dst_h </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /><br /></span><span class="comment">// pointer position:<br /></span><span class="default">$ptr_x </span><span class="keyword">= </span><span class="default">195</span><span class="keyword">;<br /></span><span class="default">$ptr_y </span><span class="keyword">= </span><span class="default">70</span><span class="keyword">;<br /><br /></span><span class="default">$srcImage </span><span class="keyword">= </span><span class="default">imageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">) or die (</span><span class="string">'failed imageCreateFromJpg'</span><span class="keyword">); <br /></span><span class="default">$dstImage </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">) or die (</span><span class="string">'failed imageCreateTrueColor'</span><span class="keyword">); <br /><br /></span><span class="default">imageCopyResampled</span><span class="keyword">(</span><span class="default">$dstImage</span><span class="keyword">, </span><span class="default">$srcImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$dst_w</span><span class="keyword">, </span><span class="default">$dst_h</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">) or die (</span><span class="string">'failed imageCopyResampled'</span><span class="keyword">); <br /><br /></span><span class="default">$ptrImage </span><span class="keyword">= </span><span class="default">imageCreateFromPng</span><span class="keyword">(</span><span class="default">$ptr_file</span><span class="keyword">) or die (</span><span class="string">'failed imageCreateFromPng'</span><span class="keyword">); <br /><br /></span><span class="default">$ptr_white </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$ptrImage</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">imageColorTransparent</span><span class="keyword">(</span><span class="default">$ptrImage</span><span class="keyword">,</span><span class="default">$ptr_white</span><span class="keyword">);<br /><br /></span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$dstImage</span><span class="keyword">, </span><span class="default">$ptrImage</span><span class="keyword">, </span><span class="default">$ptr_x</span><span class="keyword">, </span><span class="default">$ptr_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ptr_w</span><span class="keyword">, </span><span class="default">$ptr_h</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">) or die (</span><span class="string">'failed imageCopyMerge'</span><span class="keyword">);<br /><br /></span><span class="default">imageJpeg</span><span class="keyword">(</span><span class="default">$dstImage</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">) or die (</span><span class="string">'failed imageJpeg'</span><span class="keyword">);<br /><br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$srcImage</span><span class="keyword">) or die (</span><span class="string">'failed imageDestroy(1)'</span><span class="keyword">);<br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$dstImage</span><span class="keyword">) or die (</span><span class="string">'failed imageDestroy(2)'</span><span class="keyword">);<br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$ptrImage</span><span class="keyword">) or die (</span><span class="string">'failed imageDestroy(3)'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76286">  <div class="votes">
    <div id="Vu76286">
    <a href="/manual/vote-note.php?id=76286&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76286">
    <a href="/manual/vote-note.php?id=76286&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76286" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#76286" class="name">
  <strong class="user"><em>Al</em></strong></a><a class="genanchor" href="#76286"> &para;</a><div class="date" title="2007-07-09 07:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76286">
<div class="phpcode"><code><span class="html">Check your header... He is false... <br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102844">  <div class="votes">
    <div id="Vu102844">
    <a href="/manual/vote-note.php?id=102844&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102844">
    <a href="/manual/vote-note.php?id=102844&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102844" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#102844" class="name">
  <strong class="user"><em>thciobanu</em></strong></a><a class="genanchor" href="#102844"> &para;</a><div class="date" title="2011-03-09 12:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102844">
<div class="phpcode"><code><span class="html">This is what I use for merging two images while respecting the alpha channel (formulas are taken from the wikipedia article on alpha compositing; they're not too pretty as I didn't really try to make them look so, but instead just work and make sense when checked out months from now), with a quirk - an additional parameter (that defaults to NULL to be ignored) to manually specify a "transparent" color, which won't be copied over from the source to the destination. In comparison to the other implementation here, only one pass over $src_im is done, but more calculations are performed:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">, </span><span class="default">$trans </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />{<br />  </span><span class="default">$dst_w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">);<br />  </span><span class="default">$dst_h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">);<br /><br />  </span><span class="comment">// bounds checking<br />  </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">$dst_x </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">$dst_y </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  if (</span><span class="default">$dst_x </span><span class="keyword">+ </span><span class="default">$src_w </span><span class="keyword">&gt; </span><span class="default">$dst_w</span><span class="keyword">)<br />    </span><span class="default">$src_w </span><span class="keyword">= </span><span class="default">$dst_w </span><span class="keyword">- </span><span class="default">$dst_x</span><span class="keyword">;<br />  if (</span><span class="default">$dst_y </span><span class="keyword">+ </span><span class="default">$src_h </span><span class="keyword">&gt; </span><span class="default">$dst_h</span><span class="keyword">)<br />    </span><span class="default">$src_h </span><span class="keyword">= </span><span class="default">$dst_h </span><span class="keyword">- </span><span class="default">$dst_y</span><span class="keyword">;<br /><br />  for(</span><span class="default">$x_offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x_offset </span><span class="keyword">&lt; </span><span class="default">$src_w</span><span class="keyword">; </span><span class="default">$x_offset</span><span class="keyword">++)<br />    for(</span><span class="default">$y_offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y_offset </span><span class="keyword">&lt; </span><span class="default">$src_h</span><span class="keyword">; </span><span class="default">$y_offset</span><span class="keyword">++)<br />    {<br />      </span><span class="comment">// get source &amp; dest color<br />      </span><span class="default">$srccolor </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$src_x </span><span class="keyword">+ </span><span class="default">$x_offset</span><span class="keyword">, </span><span class="default">$src_y </span><span class="keyword">+ </span><span class="default">$y_offset</span><span class="keyword">));<br />      </span><span class="default">$dstcolor </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$dst_x </span><span class="keyword">+ </span><span class="default">$x_offset</span><span class="keyword">, </span><span class="default">$dst_y </span><span class="keyword">+ </span><span class="default">$y_offset</span><span class="keyword">));<br /><br />      </span><span class="comment">// apply transparency<br />      </span><span class="keyword">if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$trans</span><span class="keyword">) || (</span><span class="default">$srccolor </span><span class="keyword">!== </span><span class="default">$trans</span><span class="keyword">))<br />      {<br />        </span><span class="default">$src_a </span><span class="keyword">= </span><span class="default">$srccolor</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] * </span><span class="default">$pct </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">;<br />        </span><span class="comment">// blend<br />        </span><span class="default">$src_a </span><span class="keyword">= </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$src_a</span><span class="keyword">;<br />        </span><span class="default">$dst_a </span><span class="keyword">= </span><span class="default">127 </span><span class="keyword">- </span><span class="default">$dstcolor</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">];<br />        </span><span class="default">$dst_r </span><span class="keyword">= (</span><span class="default">$srccolor</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] * </span><span class="default">$src_a </span><span class="keyword">+ </span><span class="default">$dstcolor</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] * </span><span class="default">$dst_a </span><span class="keyword">* (</span><span class="default">127 </span><span class="keyword">- </span><span class="default">$src_a</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">;<br />        </span><span class="default">$dst_g </span><span class="keyword">= (</span><span class="default">$srccolor</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] * </span><span class="default">$src_a </span><span class="keyword">+ </span><span class="default">$dstcolor</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] * </span><span class="default">$dst_a </span><span class="keyword">* (</span><span class="default">127 </span><span class="keyword">- </span><span class="default">$src_a</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">;<br />        </span><span class="default">$dst_b </span><span class="keyword">= (</span><span class="default">$srccolor</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] * </span><span class="default">$src_a </span><span class="keyword">+ </span><span class="default">$dstcolor</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">] * </span><span class="default">$dst_a </span><span class="keyword">* (</span><span class="default">127 </span><span class="keyword">- </span><span class="default">$src_a</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">;<br />        </span><span class="default">$dst_a </span><span class="keyword">= </span><span class="default">127 </span><span class="keyword">- (</span><span class="default">$src_a </span><span class="keyword">+ </span><span class="default">$dst_a </span><span class="keyword">* (</span><span class="default">127 </span><span class="keyword">- </span><span class="default">$src_a</span><span class="keyword">) / </span><span class="default">127</span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$dst_r</span><span class="keyword">, </span><span class="default">$dst_g</span><span class="keyword">, </span><span class="default">$dst_b</span><span class="keyword">, </span><span class="default">$dst_a</span><span class="keyword">);<br />        </span><span class="comment">// paint<br />        </span><span class="keyword">if (!</span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$dst_x </span><span class="keyword">+ </span><span class="default">$x_offset</span><span class="keyword">, </span><span class="default">$dst_y </span><span class="keyword">+ </span><span class="default">$y_offset</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">))<br />          return </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">imagecolordeallocate</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />      }<br />    }<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// use it like this (identical to imagecopymerge)<br /></span><span class="keyword">function </span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">)<br /></span><span class="comment">// or this<br /></span><span class="keyword">function </span><span class="default">imagecopymerge_alpha</span><span class="keyword">(</span><span class="default">$dst_im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$dst_x</span><span class="keyword">, </span><span class="default">$dst_y</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$src_w</span><span class="keyword">, </span><span class="default">$src_h</span><span class="keyword">, </span><span class="default">$pct</span><span class="keyword">, array(</span><span class="string">'red' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'green' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'blue' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'alpha' </span><span class="keyword">=&gt;</span><span class="default">4</span><span class="keyword">))<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90471">  <div class="votes">
    <div id="Vu90471">
    <a href="/manual/vote-note.php?id=90471&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90471">
    <a href="/manual/vote-note.php?id=90471&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90471" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#90471" class="name">
  <strong class="user"><em>santin1991[at]gmail[dot]com</em></strong></a><a class="genanchor" href="#90471"> &para;</a><div class="date" title="2009-04-23 04:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90471">
<div class="phpcode"><code><span class="html">Add logo on image script.
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Put logo on low right jpeg image
<br /> * used stefan's script for position
<br /> **/
<br /></span><span class="default">$logo_file </span><span class="keyword">= </span><span class="string">"logo.png"</span><span class="keyword">; 
<br /></span><span class="default">$image_file </span><span class="keyword">= </span><span class="string">"img.jpg"</span><span class="keyword">; 
<br /></span><span class="default">$targetfile </span><span class="keyword">= </span><span class="string">"img2.jpg"</span><span class="keyword">;
<br /></span><span class="default">$photo </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$image_file</span><span class="keyword">);
<br /></span><span class="default">$fotoW </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$photo</span><span class="keyword">);
<br /></span><span class="default">$fotoH </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$photo</span><span class="keyword">);
<br /></span><span class="default">$logoImage </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$logo_file</span><span class="keyword">);
<br /></span><span class="default">$logoW </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$logoImage</span><span class="keyword">); 
<br /></span><span class="default">$logoH </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$logoImage</span><span class="keyword">); 
<br /></span><span class="default">$photoFrame </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$fotoW</span><span class="keyword">,</span><span class="default">$fotoH</span><span class="keyword">);
<br /></span><span class="default">$dest_x </span><span class="keyword">= </span><span class="default">$fotoW </span><span class="keyword">- </span><span class="default">$logoW</span><span class="keyword">;
<br /></span><span class="default">$dest_y </span><span class="keyword">= </span><span class="default">$fotoH </span><span class="keyword">- </span><span class="default">$logoH</span><span class="keyword">;
<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$photoFrame</span><span class="keyword">, </span><span class="default">$photo</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$fotoW</span><span class="keyword">, </span><span class="default">$fotoH</span><span class="keyword">, </span><span class="default">$fotoW</span><span class="keyword">, </span><span class="default">$fotoH</span><span class="keyword">);
<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$photoFrame</span><span class="keyword">, </span><span class="default">$logoImage</span><span class="keyword">, </span><span class="default">$dest_x</span><span class="keyword">, </span><span class="default">$dest_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$logoW</span><span class="keyword">, </span><span class="default">$logoH</span><span class="keyword">);
<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$photoFrame</span><span class="keyword">, </span><span class="default">$targetfile</span><span class="keyword">);  
<br />echo </span><span class="string">'&lt;img src="'</span><span class="keyword">.</span><span class="default">$targetfile</span><span class="keyword">.</span><span class="string">'" /&gt;'</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32393">  <div class="votes">
    <div id="Vu32393">
    <a href="/manual/vote-note.php?id=32393&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32393">
    <a href="/manual/vote-note.php?id=32393&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32393" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#32393" class="name">
  <strong class="user"><em>bjorn AT smokingmedia DOT com</em></strong></a><a class="genanchor" href="#32393"> &para;</a><div class="date" title="2003-05-26 11:10"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32393">
<div class="phpcode"><code><span class="html">in addition to stefan's posting:<br /><br />i found that if you use imagecopymerge with png-24 files with an alpha channel, it doesn't work use imagecopy instead.<br />it seems that imagecopymerge doesn't respect the alpha channel the way it should (a bug??).<br /><br />some sample code here to place an image (image.png) on a backgroundcolor or backgroundimage.<br /><br /><span class="default">&lt;?php<br /><br />$im </span><span class="keyword">= </span><span class="string">"image.png"</span><span class="keyword">;<br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="string">"ffddee"</span><span class="keyword">;     </span><span class="comment">// hex representation of the color (i.e. #ffffff for white)<br /></span><span class="default">$out </span><span class="keyword">= </span><span class="string">"png"</span><span class="keyword">;       </span><span class="comment">// or "jpg" for jpg file output<br />// $backgroundfile = "";  // optional backgroundfile if you don't want to use a color<br /><br />//<br />// function to convert hex colorcode to decimal<br />//<br /><br /></span><span class="keyword">function </span><span class="default">colordecode</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">){<br /><br />   </span><span class="default">$code</span><span class="keyword">[</span><span class="default">r</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />   </span><span class="default">$code</span><span class="keyword">[</span><span class="default">g</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />   </span><span class="default">$code</span><span class="keyword">[</span><span class="default">b</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /><br />   return </span><span class="default">$code</span><span class="keyword">;<br /><br />} </span><span class="comment">// end func colordecode<br /><br />// create the resource id<br /></span><span class="default">$image_id </span><span class="keyword">= </span><span class="default">imageCreateFromPNG</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="comment">// get image size<br /></span><span class="default">$im_X </span><span class="keyword">= </span><span class="default">ImageSX</span><span class="keyword">(</span><span class="default">$image_id</span><span class="keyword">);<br /></span><span class="default">$im_Y </span><span class="keyword">= </span><span class="default">ImageSY</span><span class="keyword">(</span><span class="default">$image_id</span><span class="keyword">);<br /><br /></span><span class="comment">// create a truecolor background image of the right size<br />// or use a background image like this<br />// $backgroundimage = imageCreateFromPNG($backgroundfile);<br /></span><span class="default">$backgroundimage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$im_X</span><span class="keyword">, </span><span class="default">$im_Y</span><span class="keyword">);<br /><br /></span><span class="comment">// get the desired backgroundcolor:<br />// don't use this if you want to use a background image<br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">colordecode</span><span class="keyword">(</span><span class="default">$bg</span><span class="keyword">);<br /></span><span class="default">$backgroundcolor </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">[</span><span class="default">r</span><span class="keyword">], </span><span class="default">$code</span><span class="keyword">[</span><span class="default">g</span><span class="keyword">], </span><span class="default">$code</span><span class="keyword">[</span><span class="default">b</span><span class="keyword">]);<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$im_X</span><span class="keyword">, </span><span class="default">$im_Y</span><span class="keyword">, </span><span class="default">$backgroundcolor</span><span class="keyword">);<br /><br /></span><span class="comment">// merge the two together with alphablending on!<br /></span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">, </span><span class="default">$image_id</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$im_X</span><span class="keyword">, </span><span class="default">$im_Y</span><span class="keyword">);<br /><br /></span><span class="comment">// output the image:<br /></span><span class="keyword">if(</span><span class="default">$output </span><span class="keyword">== </span><span class="string">"jpg"</span><span class="keyword">){<br />   </span><span class="default">Header</span><span class="keyword">( </span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br />   </span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">);<br />   }<br />   else{<br />       </span><span class="default">Header</span><span class="keyword">( </span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br />       </span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">);<br />       }<br /><br /></span><span class="comment">// destroy the memory<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$backgroundimage</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$image_id</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62202">  <div class="votes">
    <div id="Vu62202">
    <a href="/manual/vote-note.php?id=62202&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62202">
    <a href="/manual/vote-note.php?id=62202&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62202" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#62202" class="name">
  <strong class="user"><em>jylyn at hotmail dot com</em></strong></a><a class="genanchor" href="#62202"> &para;</a><div class="date" title="2006-02-22 01:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62202">
<div class="phpcode"><code><span class="html">A few corrections to the code supplied by nick at prient:<br /><br />$iTemplate should be $iBackground<br />$iWorking should be $iSource<br /><br />After fixing those two I found the script really useful, thanks!</span></code></div>
  </div>
 </div>
  <div class="note" id="53131">  <div class="votes">
    <div id="Vu53131">
    <a href="/manual/vote-note.php?id=53131&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53131">
    <a href="/manual/vote-note.php?id=53131&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53131" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#53131" class="name">
  <strong class="user"><em>Ascent [at] WebAQ.com</em></strong></a><a class="genanchor" href="#53131"> &para;</a><div class="date" title="2005-05-24 02:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53131">
<div class="phpcode"><code><span class="html">First you need make 0~9 gif format images and background image.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />make random image number check<br />20050524 by ascent WebAQ.com<br />*/<br /><br /></span><span class="default">$rands </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">,</span><span class="default">9999</span><span class="keyword">);<br /><br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'random_image_number_check'</span><span class="keyword">] = </span><span class="default">$rands</span><span class="keyword">;<br /><br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="string">'./random_image_bg.jpg'</span><span class="keyword">;<br /></span><span class="default">$numimgp </span><span class="keyword">= </span><span class="string">'./random_image_number_%d.gif'</span><span class="keyword">;<br /><br /></span><span class="default">$numimg1 </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$numimgp</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rands</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">$numimg2 </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$numimgp</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rands</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">$numimg3 </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$numimgp</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rands</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">$numimg4 </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$numimgp</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rands</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">$ys1 </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(-</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$ys2 </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(-</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$ys3 </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(-</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$ys4 </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(-</span><span class="default">4</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /><br /></span><span class="default">$bgImg </span><span class="keyword">= </span><span class="default">imageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$bg</span><span class="keyword">);<br /></span><span class="default">$nmImg1 </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$numimg1</span><span class="keyword">);<br /></span><span class="default">$nmImg2 </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$numimg2</span><span class="keyword">);<br /></span><span class="default">$nmImg3 </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$numimg3</span><span class="keyword">);<br /></span><span class="default">$nmImg4 </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$numimg4</span><span class="keyword">);<br /></span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">, </span><span class="default">$nmImg1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">$ys1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">, </span><span class="default">$nmImg2</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">$ys2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">, </span><span class="default">$nmImg3</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$ys3</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">imageCopyMerge</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">, </span><span class="default">$nmImg4</span><span class="keyword">, </span><span class="default">70</span><span class="keyword">, </span><span class="default">$ys4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpg"</span><span class="keyword">);<br /></span><span class="default">ImageJPEG</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$bgImg</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$nmImg1</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$nmImg2</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$nmImg3</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$nmImg4</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="102496">  <div class="votes">
    <div id="Vu102496">
    <a href="/manual/vote-note.php?id=102496&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102496">
    <a href="/manual/vote-note.php?id=102496&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102496" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#102496" class="name">
  <strong class="user"><em>killing_wombles0000 at hotmail dot com</em></strong></a><a class="genanchor" href="#102496"> &para;</a><div class="date" title="2011-02-17 09:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102496">
<div class="phpcode"><code><span class="html">Anyone wanting to create a reflecion of an image. Simple process that copies, line by line, from the bottom of the image, a given number of pixels. Each line gets gradually more transparent. Outputs PNG to screen.<br /><br />This is pretty hot-coded - all four input variables (input image, reflection height, starting transparency, gap between image and reflection) are set manually here.<br /><br /><span class="default">&lt;?php<br />    $in </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'C:\test.jpg'</span><span class="keyword">);<br />    </span><span class="default">$reflection_strength </span><span class="keyword">= </span><span class="default">120</span><span class="keyword">;        </span><span class="comment">//    starting transparency (0-127, 0 being opaque)<br />    </span><span class="default">$reflection_height </span><span class="keyword">= </span><span class="default">40</span><span class="keyword">;        </span><span class="comment">//     height of reflection in pixels<br />    </span><span class="default">$gap </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;                        </span><span class="comment">//    gap between image and reflection<br />    <br />    </span><span class="default">$orig_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);                                </span><span class="comment">//    store height of original image<br />    </span><span class="default">$orig_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);                                    </span><span class="comment">//    store height of original image<br />    </span><span class="default">$output_height </span><span class="keyword">= </span><span class="default">$orig_height </span><span class="keyword">+ </span><span class="default">$reflection_height </span><span class="keyword">+ </span><span class="default">$gap</span><span class="keyword">;    </span><span class="comment">//    calculate height of output image<br />    <br />    // create new image to use for output. fill with transparency. ALPHA BLENDING MUST BE FALSE<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$orig_width</span><span class="keyword">, </span><span class="default">$output_height</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">$bg1</span><span class="keyword">);<br />    <br />    </span><span class="comment">// copy original image onto new one, leaving space underneath for reflection and 'gap'<br />    </span><span class="default">imagecopyresampled </span><span class="keyword">( </span><span class="default">$out </span><span class="keyword">, </span><span class="default">$in </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">));<br /><br />     </span><span class="comment">// create new single-line image to act as buffer while applying transparency<br />    </span><span class="default">$reflection_section </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$bg1 </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg1</span><span class="keyword">);<br /><br />    </span><span class="comment">// 1. copy each line individually, starting at the 'bottom' of the image, working upwards. <br />    // 2. set transparency to vary between reflection_strength and 127<br />    // 3. copy line back to mirrored position in original<br />    </span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$reflection_height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />    {    <br />        </span><span class="default">$t </span><span class="keyword">= ((</span><span class="default">127</span><span class="keyword">-</span><span class="default">$reflection_strength</span><span class="keyword">) + (</span><span class="default">$reflection_strength</span><span class="keyword">*(</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$reflection_height</span><span class="keyword">)));<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">)  - </span><span class="default">$y</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">);<br />        </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">$gap</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) - (</span><span class="default">2</span><span class="keyword">*</span><span class="default">$a</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// output image to view<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123999">  <div class="votes">
    <div id="Vu123999">
    <a href="/manual/vote-note.php?id=123999&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123999">
    <a href="/manual/vote-note.php?id=123999&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123999" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#123999" class="name">
  <strong class="user"><em>highton ridley</em></strong></a><a class="genanchor" href="#123999"> &para;</a><div class="date" title="2019-07-01 08:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123999">
<div class="phpcode"><code><span class="html">killing_wombles0000 gave an almost working piece of code to mirror an image with increasing transparency. With help from showdev on stackexchange, here's the corrected and fully working code:<br /><span class="default">&lt;?php<br />$in </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="string">'<a href="https://picsum.photos/id/1084/536/354?grayscale" rel="nofollow" target="_blank">https://picsum.photos/id/1084/536/354?grayscale</a>'</span><span class="keyword">);<br /></span><span class="default">$reflection_strength </span><span class="keyword">= </span><span class="default">120</span><span class="keyword">;        </span><span class="comment">//    starting transparency (0-127, 0 being opaque)<br /></span><span class="default">$reflection_height </span><span class="keyword">= </span><span class="default">40</span><span class="keyword">;        </span><span class="comment">//     height of reflection in pixels<br /></span><span class="default">$gap </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;                        </span><span class="comment">//    gap between image and reflection<br /><br /></span><span class="default">$orig_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);                                </span><span class="comment">//    store height of original image<br /></span><span class="default">$orig_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);                                    </span><span class="comment">//    store height of original image<br /></span><span class="default">$output_height </span><span class="keyword">= </span><span class="default">$orig_height </span><span class="keyword">+ </span><span class="default">$reflection_height </span><span class="keyword">+ </span><span class="default">$gap</span><span class="keyword">;    </span><span class="comment">//    calculate height of output image<br /><br />// create new image to use for output. fill with BLACK.<br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$orig_width</span><span class="keyword">, </span><span class="default">$output_height</span><span class="keyword">);<br /></span><span class="comment">//imagealphablending($out, false);<br />//$bg = imagecolortransparent($out, imagecolorallocatealpha($out, 255, 255, 255, 127));<br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">$bg</span><span class="keyword">);<br /><br /></span><span class="comment">// copy original image onto new one, leaving space underneath for reflection and 'gap'<br /></span><span class="default">imagecopyresampled </span><span class="keyword">( </span><span class="default">$out </span><span class="keyword">, </span><span class="default">$in </span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">));<br /><br /> </span><span class="comment">// create new single-line image to act as buffer while applying transparency<br /></span><span class="default">$reflection_section </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">$bg1 </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">));<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg1</span><span class="keyword">);<br /><br /></span><span class="comment">// 1. copy each line individually, starting at the 'bottom' of the image, working upwards.<br />// 2. set transparency to vary between reflection_strength and 127<br />// 3. copy line back to mirrored position in original<br /></span><span class="keyword">for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$reflection_height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++)<br />{<br />    </span><span class="default">$t </span><span class="keyword">= ((</span><span class="default">127</span><span class="keyword">-</span><span class="default">$reflection_strength</span><span class="keyword">) + (</span><span class="default">$reflection_strength</span><span class="keyword">*(</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$reflection_height</span><span class="keyword">)));<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">)  - </span><span class="default">$y</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">imagefilter</span><span class="keyword">(</span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">IMG_FILTER_COLORIZE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">);<br />    </span><span class="default">imagecopyresized</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$reflection_section</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) + </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">$gap</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">) - </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// output image to view<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73477">  <div class="votes">
    <div id="Vu73477">
    <a href="/manual/vote-note.php?id=73477&amp;page=function.imagecopymerge&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73477">
    <a href="/manual/vote-note.php?id=73477&amp;page=function.imagecopymerge&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73477" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#73477" class="name">
  <strong class="user"><em>jay at zylex dot net dot nz</em></strong></a><a class="genanchor" href="#73477"> &para;</a><div class="date" title="2007-02-24 03:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73477">
<div class="phpcode"><code><span class="html">Hi<br />i wrote this script to add a watermark image into the bottom right a larger image. Its very basic i know but its all i need for now. It also is an easy function for noobs to grasp. It just takes an two image types as arguments<br /><br />for example <br />$image = imagecreatefromjpeg("FILELOCATION");<br />$insert = imagecreatefrompng("WATERMARKFILELOCATION");<br />$image = image_overlap($image, $insert);<br /><br />function image_overlap($background, $foreground){<br />   $insertWidth = imagesx($foreground);<br />   $insertHeight = imagesy($foreground);<br /><br />   $imageWidth = imagesx($background);<br />   $imageHeight = imagesy($background);<br /><br />   $overlapX = $imageWidth-$insertWidth-5;<br />   $overlapY = $imageHeight-$insertHeight-5;<br />               imagecolortransparent($foreground,<br />imagecolorat($foreground,0,0));                imagecopymerge($background,$foreground,<br />$overlapX,$overlapY,0,0,$insertWidth,$insertHeight,100);   return $background;<br />    }<br /><br />It doesnt smooth the edges between the two images but it works easily.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecopymerge&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopymerge.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.imagecopymerge.php" title="imagecopymerge">imagecopymerge</a>
                        </li>
                                                <li class="">
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
