<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecopy - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecopy.php">
 <link rel="shorturl" href="https://www.php.net/imagecopy">
 <link rel="alternate" href="https://www.php.net/imagecopy" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageconvolution.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecopymerge.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecopy.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecopy.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecopy.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecopy.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecopy.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecopy.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecopy.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecopy.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecopy.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecopy.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecopy.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copy part of an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecopy - Manual" />
<meta name="twitter:description" content="Copy part of an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecopy - Manual" />
<meta itemprop="description" content="Copy part of an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copy part of an image" />

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
        <a href="function.imagecopymerge.php">
          imagecopymerge &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageconvolution.php">
          &laquo; imageconvolution        </a>
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
            <option value='en/function.imagecopy.php' selected="selected">English</option>
            <option value='de/function.imagecopy.php'>German</option>
            <option value='es/function.imagecopy.php'>Spanish</option>
            <option value='fr/function.imagecopy.php'>French</option>
            <option value='it/function.imagecopy.php'>Italian</option>
            <option value='ja/function.imagecopy.php'>Japanese</option>
            <option value='pt_BR/function.imagecopy.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecopy.php'>Russian</option>
            <option value='tr/function.imagecopy.php'>Turkish</option>
            <option value='uk/function.imagecopy.php'>Ukrainian</option>
            <option value='zh/function.imagecopy.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecopy" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecopy</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecopy</span> &mdash; <span class="dc-title">Copy part of an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecopy-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecopy</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$dst_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$src_image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$dst_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$src_height</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

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

 <div class="refsect1 parameters" id="refsect1-function.imagecopy-parameters">
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
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecopy-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecopy-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecopy-examples">
  <h3 class="title">Examples</h3>
  <p class="para">

  <div class="example" id="example-2857">
   <p><strong>Example #1 Cropping the PHP.net logo</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create image instances<br /></span><span style="color: #0000BB">$src </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #DD0000">'php.gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$dest </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">80</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Copy<br /></span><span style="color: #0000BB">imagecopy</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">, </span><span style="color: #0000BB">$src</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">13</span><span style="color: #007700">, </span><span style="color: #0000BB">80</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output and free from memory<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/gif'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagegif</span><span style="color: #007700">(</span><span style="color: #0000BB">$dest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="mediaobject">
    
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagecopy.gif" alt="Output of example : Cropping the PHP.net logo" width="80" height="40" />
     </div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imagecopy-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecopy.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecopy%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecopy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopy.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72393">  <div class="votes">
    <div id="Vu72393">
    <a href="/manual/vote-note.php?id=72393&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72393">
    <a href="/manual/vote-note.php?id=72393&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72393" title="68% like this...">
    6
    </div>
  </div>
  <a href="#72393" class="name">
  <strong class="user"><em>john at mccarthy dot net</em></strong></a><a class="genanchor" href="#72393"> &para;</a><div class="date" title="2007-01-17 05:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72393">
<div class="phpcode"><code><span class="html">Here is an upgrade of that cool wave function: Double the size of the image, wave it, then resample it down again. This makes even nicer, anti aliased waves.<br /><br />    // So easy and nice!<br />    function wave_region($img, $x, $y, $width, $height,$amplitude = 4.5,$period = 30)<br />    {<br />        // Make a copy of the image twice the size<br />        $mult = 2;<br />        $img2 = imagecreatetruecolor($width * $mult, $height * $mult);<br />        imagecopyresampled ($img2,$img,0,0,$x,$y,$width * $mult,$height * $mult,$width, $height);<br /><br />        // Wave it<br />        for ($i = 0;$i &lt; ($width * $mult);$i += 2)<br />        {<br />           imagecopy($img2,$img2,<br />               $x + $i - 2,$y + sin($i / $period) * $amplitude,    // dest<br />               $x + $i,$y,            // src<br />               2,($height * $mult));<br />        }<br />        <br />        // Resample it down again<br />        imagecopyresampled ($img,$img2,$x,$y,0,0,$width, $height,$width * $mult,$height * $mult);<br />        imagedestroy($img2);<br />    }<br /><br />To use it in a full image:<br />    wave_region ($oImage,0,0,imagesx($oImage),imagesy($oImage));</span></code></div>
  </div>
 </div>
  <div class="note" id="93690">  <div class="votes">
    <div id="Vu93690">
    <a href="/manual/vote-note.php?id=93690&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93690">
    <a href="/manual/vote-note.php?id=93690&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93690" title="70% like this...">
    4
    </div>
  </div>
  <a href="#93690" class="name">
  <strong class="user"><em>latin4567 at gmail dot com</em></strong></a><a class="genanchor" href="#93690"> &para;</a><div class="date" title="2009-09-22 07:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93690">
<div class="phpcode"><code><span class="html">I have created a PHP function which performs the standard 9-Slice scaling technique. This is extremely useful for thumbnail shadow scaling, and anything involving skinning. Feel free to pick apart and use<br /><br />Note: instead of specifying margins, my 9-slicing routine uses a centered-rectangle concept... as input you provide the image (as a resource), the x and y coords of the rectangle, and the width and height of the rectangle.<br /><br />The $src_im parameter should be an image resource. This script was written for 9-slicing translucent PNG images, and has only been tested with translucent PNG images, however it should work with other image types (possibly requiring some modification)<br /><br />so if your source image was 400 x 400, you needed a 24 pixel margin on all sides, and your target size was 800 x 500, you would use the following parameters:<br /><br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">NineSlice</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">352</span><span class="keyword">, </span><span class="default">352</span><span class="keyword">, </span><span class="default">800</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">/* 9-Slice Image Slicing Script by Sam Kelly (DuroSoft: <a href="http://www.durosoft.com" rel="nofollow" target="_blank">http://www.durosoft.com</a>) */<br /></span><span class="keyword">function </span><span class="default">NineSlice</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$rect_x</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">, </span><span class="default">$rect_w</span><span class="keyword">, </span><span class="default">$rect_h</span><span class="keyword">, </span><span class="default">$target_w</span><span class="keyword">, </span><span class="default">$target_h</span><span class="keyword">)<br />{<br />    </span><span class="default">$src_w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">);<br />    </span><span class="default">$src_h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$src_im</span><span class="keyword">);<br />    <br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$target_w</span><span class="keyword">, </span><span class="default">$target_h</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />    <br />    </span><span class="default">$left_w </span><span class="keyword">= </span><span class="default">$rect_x</span><span class="keyword">;<br />    </span><span class="default">$right_w </span><span class="keyword">= </span><span class="default">$src_w </span><span class="keyword">- (</span><span class="default">$rect_x </span><span class="keyword">+ </span><span class="default">$rect_w</span><span class="keyword">);<br />    <br />    </span><span class="default">$left_src_y </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$rect_h </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$rect_y</span><span class="keyword">;<br />    </span><span class="default">$right_src_y </span><span class="keyword">= </span><span class="default">$left_src_y</span><span class="keyword">;<br />    <br />    </span><span class="default">$left_src_x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$right_src_x </span><span class="keyword">= </span><span class="default">$left_w </span><span class="keyword">+ </span><span class="default">$rect_w</span><span class="keyword">;<br />    <br />    </span><span class="default">$top_src_x </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$rect_w </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">1 </span><span class="keyword">+ </span><span class="default">$rect_x</span><span class="keyword">;<br />    </span><span class="default">$bottom_src_x </span><span class="keyword">= </span><span class="default">$top_src_x</span><span class="keyword">;<br />    </span><span class="default">$bottom_src_y </span><span class="keyword">= </span><span class="default">$rect_y </span><span class="keyword">+ </span><span class="default">$rect_h</span><span class="keyword">;<br />    </span><span class="default">$bottom_h </span><span class="keyword">= </span><span class="default">$src_h </span><span class="keyword">- </span><span class="default">$bottom_src_y</span><span class="keyword">;<br />    <br />    </span><span class="default">$left_tile </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$left_tile</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$left_src_y</span><span class="keyword">, </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    <br />    </span><span class="default">$right_tile </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$right_tile</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$right_src_x</span><span class="keyword">, </span><span class="default">$right_src_y</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="default">$top_tile </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$top_tile</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$top_src_x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">);<br />    <br />    </span><span class="default">$bottom_tile </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$bottom_tile</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bottom_src_x</span><span class="keyword">, </span><span class="default">$bottom_src_y</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br />    <br />    </span><span class="default">$inner_tile </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$inner_tile</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$src_w </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$src_h </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />    <br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bottom_src_y</span><span class="keyword">, </span><span class="default">$rect_x</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$right_src_x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$src_im</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">, </span><span class="default">$src_w </span><span class="keyword">- </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$bottom_src_y</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br /><br />    </span><span class="default">imagesettile</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$top_tile</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">, </span><span class="default">IMG_COLOR_TILED</span><span class="keyword">);<br />    <br />    </span><span class="default">imagesettile</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$left_tile</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">, </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$bottom_h </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">IMG_COLOR_TILED</span><span class="keyword">);<br />    <br />    <br />    </span><span class="default">$right_side </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$rect_y </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">);<br />    </span><span class="default">imagesettile</span><span class="keyword">(</span><span class="default">$right_side</span><span class="keyword">, </span><span class="default">$right_tile</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$right_side</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$rect_y </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">, </span><span class="default">IMG_COLOR_TILED</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$right_side</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$rect_y</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$rect_y </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">);<br />    <br />    </span><span class="default">$bottom_side </span><span class="keyword">= </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w </span><span class="keyword">- </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br />    </span><span class="default">imagesettile</span><span class="keyword">(</span><span class="default">$bottom_side</span><span class="keyword">, </span><span class="default">$bottom_tile</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$bottom_side</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w </span><span class="keyword">- </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">, </span><span class="default">IMG_COLOR_TILED</span><span class="keyword">);<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$bottom_side</span><span class="keyword">, </span><span class="default">$right_w</span><span class="keyword">, </span><span class="default">$target_h </span><span class="keyword">- </span><span class="default">$bottom_h</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$target_w </span><span class="keyword">- </span><span class="default">$right_w </span><span class="keyword">- </span><span class="default">$left_w</span><span class="keyword">, </span><span class="default">$bottom_h</span><span class="keyword">);<br /><br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$left_tile</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$right_tile</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$top_tile</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$bottom_tile</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$inner_tile</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$right_side</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$bottom_side</span><span class="keyword">);<br />    <br />    return </span><span class="default">$im</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">CreateBlankPNG</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">)<br />{<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br />    return </span><span class="default">$im</span><span class="keyword">;<br />}<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73430">  <div class="votes">
    <div id="Vu73430">
    <a href="/manual/vote-note.php?id=73430&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73430">
    <a href="/manual/vote-note.php?id=73430&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73430" title="66% like this...">
    4
    </div>
  </div>
  <a href="#73430" class="name">
  <strong class="user"><em>Jeff</em></strong></a><a class="genanchor" href="#73430"> &para;</a><div class="date" title="2007-02-22 03:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73430">
<div class="phpcode"><code><span class="html">I came across the problem of having a page where any image could be uploaded, then I would need to work with it as a true color image with transparency. The problem came with palette images with transparency (e.g. GIF images), the transparent parts changed to black (no matter what color was actually representing transparent) when I used imagecopy to convert the image to true color.<br /><br />To convert an image to true color with the transparency as well, the following code works (assuming $img is your image resource):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Convert $img to truecolor<br /></span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />if (!</span><span class="default">imageistruecolor</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)) {<br />  </span><span class="default">$original_transparency </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />  </span><span class="comment">//we have a transparent color<br />  </span><span class="keyword">if (</span><span class="default">$original_transparency </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="comment">//get the actual transparent color<br />    </span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$original_transparency</span><span class="keyword">);<br />    </span><span class="default">$original_transparency </span><span class="keyword">= (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] &lt;&lt; </span><span class="default">16</span><span class="keyword">) | (</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] &lt;&lt; </span><span class="default">8</span><span class="keyword">) | </span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">];<br />    </span><span class="comment">//change the transparent color to black, since transparent goes to black anyways (no way to remove transparency in GIF)<br />    </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />  }<br />  </span><span class="comment">//create truecolor image and transfer<br />  </span><span class="default">$truecolor </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />  </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />  </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$truecolor</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />  </span><span class="default">$img </span><span class="keyword">= </span><span class="default">$truecolor</span><span class="keyword">;<br />  </span><span class="comment">//remake transparency (if there was transparency)<br />  </span><span class="keyword">if (</span><span class="default">$original_transparency </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />      for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++)<br />        if (</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) == </span><span class="default">$original_transparency</span><span class="keyword">)<br />          </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">127 </span><span class="keyword">&lt;&lt; </span><span class="default">24</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />And now $img is a true color image resource</span></code></div>
  </div>
 </div>
  <div class="note" id="58932">  <div class="votes">
    <div id="Vu58932">
    <a href="/manual/vote-note.php?id=58932&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58932">
    <a href="/manual/vote-note.php?id=58932&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58932" title="75% like this...">
    2
    </div>
  </div>
  <a href="#58932" class="name">
  <strong class="user"><em>ragnar_40k at hotmail dot com</em></strong></a><a class="genanchor" href="#58932"> &para;</a><div class="date" title="2005-11-21 03:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58932">
<div class="phpcode"><code><span class="html">Here a function to make holes into images:<br /><br />// Set the alpha channel for a part of an image (it ignores the canvas alpha atm).<br />// $img_canvas - 32-bit true color image w/ alpha channel<br />// $img_mask - 8-bit gray scale image (white parts will be masked transparent in the canvas).<br />// This relies on the current pixel format:<br />// (high byte) -&gt; (alpha channel} {red} {green} {blue} &lt;- (low byte)<br />function mask($img_canvas, $img_mask, $dst_x, $dst_y)<br />{<br />   $old_blendmode = imagealphablending($img_canvas, FALSE);<br /><br />   $width  = imagesx($img_mask);<br />   $heigth = imagesy($img_mask);<br /><br />   $mask_x = 0;<br />   $x = $dst_y;<br />   while ($mask_x&lt;$width)<br />   {<br />       $mask_y = 0;<br />       $y = $dst_y;<br />       while ($mask_y&lt;$heigth)<br />       {<br />           imagesetpixel($img_canvas, $x, $y,<br />               ((imagecolorat($img_mask, $mask_x, $mask_y) &gt;&gt; 1) &lt;&lt; 24) | (imagecolorat($img_canvas, $x, $y) &amp; 0x00FFFFFF));<br /><br />           ++$mask_y;<br />           ++$y;<br />       }<br />       ++$mask_x;<br />       ++$x;<br />   }<br /><br />   imagealphablending($img_canvas, $old_blendmode);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="58014">  <div class="votes">
    <div id="Vu58014">
    <a href="/manual/vote-note.php?id=58014&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58014">
    <a href="/manual/vote-note.php?id=58014&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58014" title="75% like this...">
    2
    </div>
  </div>
  <a href="#58014" class="name">
  <strong class="user"><em>johnny at netvor dot sk</em></strong></a><a class="genanchor" href="#58014"> &para;</a><div class="date" title="2005-10-21 08:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58014">
<div class="phpcode"><code><span class="html">simple image combination srcipt, ie. if u want to create one  huuuge signature from more small ones<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// config --<br /></span><span class="default">$src </span><span class="keyword">= array (</span><span class="string">"<a href="http://www.google.com/images/logo_sm.gif" rel="nofollow" target="_blank">http://www.google.com/images/logo_sm.gif</a>"</span><span class="keyword">, </span><span class="string">"<a href="http://sk2.php.net/images/php.gif" rel="nofollow" target="_blank">http://sk2.php.net/images/php.gif</a>"</span><span class="keyword">);    <br /></span><span class="default">$under </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;    </span><span class="comment">// combine images underneath or not?<br />// -- end of config<br /><br /></span><span class="default">$imgBuf </span><span class="keyword">= array ();<br /></span><span class="default">$maxW</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$maxH</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach (</span><span class="default">$src </span><span class="keyword">as </span><span class="default">$link</span><span class="keyword">)<br />{<br />    switch(</span><span class="default">substr </span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">strrpos </span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">))<br />    {<br />        case </span><span class="string">'png'</span><span class="keyword">:<br />            </span><span class="default">$iTmp </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />            break;<br />        case </span><span class="string">'gif'</span><span class="keyword">:<br />            </span><span class="default">$iTmp </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />            break;                <br />        case </span><span class="string">'jpeg'</span><span class="keyword">:            <br />        case </span><span class="string">'jpg'</span><span class="keyword">:<br />            </span><span class="default">$iTmp </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />            break;                <br />    }<br /><br />    if (</span><span class="default">$under</span><span class="keyword">)<br />    {<br />        </span><span class="default">$maxW</span><span class="keyword">=(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">)&gt;</span><span class="default">$maxW</span><span class="keyword">)?</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">):</span><span class="default">$maxW</span><span class="keyword">;<br />        </span><span class="default">$maxH</span><span class="keyword">+=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">);<br />    }<br />    else<br />    {<br />        </span><span class="default">$maxW</span><span class="keyword">+=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">);<br />        </span><span class="default">$maxH</span><span class="keyword">=(</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">)&gt;</span><span class="default">$maxH</span><span class="keyword">)?</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$iTmp</span><span class="keyword">):</span><span class="default">$maxH</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">array_push </span><span class="keyword">(</span><span class="default">$imgBuf</span><span class="keyword">,</span><span class="default">$iTmp</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$iOut </span><span class="keyword">= </span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">$maxW</span><span class="keyword">,</span><span class="default">$maxH</span><span class="keyword">) ;<br /><br /></span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach (</span><span class="default">$imgBuf </span><span class="keyword">as </span><span class="default">$img</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$under</span><span class="keyword">)<br />        </span><span class="default">imagecopy </span><span class="keyword">(</span><span class="default">$iOut</span><span class="keyword">,</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">));<br />    else<br />        </span><span class="default">imagecopy </span><span class="keyword">(</span><span class="default">$iOut</span><span class="keyword">,</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">));    <br />    </span><span class="default">$pos</span><span class="keyword">+= </span><span class="default">$under </span><span class="keyword">? </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) : </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">imagedestroy </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />}<br /><br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$iOut</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97836">  <div class="votes">
    <div id="Vu97836">
    <a href="/manual/vote-note.php?id=97836&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97836">
    <a href="/manual/vote-note.php?id=97836&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97836" title="54% like this...">
    5
    </div>
  </div>
  <a href="#97836" class="name">
  <strong class="user"><em>petr dot biza at gmail dot com</em></strong></a><a class="genanchor" href="#97836"> &para;</a><div class="date" title="2010-05-11 07:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97836">
<div class="phpcode"><code><span class="html">There is function to crop blank edges from image.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br />* $image image cursor (from imagecreatetruecolor)
<br />* $backgound image curosr (from imagecolorallocate)
<br />* $paddng int 
<br />*/
<br /></span><span class="keyword">function </span><span class="default">imageCrop</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$background </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$padding </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />    if(</span><span class="default">$background</span><span class="keyword">)
<br />      </span><span class="default">$background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$top </span><span class="keyword">= </span><span class="default">imageSY</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />    </span><span class="default">$left </span><span class="keyword">= </span><span class="default">imageSX</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />    </span><span class="default">$bottom </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$right </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    
<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">) ; </span><span class="default">$x</span><span class="keyword">++) {
<br />        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">) ; </span><span class="default">$y</span><span class="keyword">++) {
<br />          
<br />          </span><span class="comment">// if there match
<br />            </span><span class="keyword">if(</span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) != </span><span class="default">$background</span><span class="keyword">) {
<br />              
<br />              if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$left</span><span class="keyword">)
<br />                </span><span class="default">$left </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;
<br />              if(</span><span class="default">$x </span><span class="keyword">&gt; </span><span class="default">$right</span><span class="keyword">)
<br />                </span><span class="default">$right </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;
<br />              if(</span><span class="default">$y </span><span class="keyword">&gt; </span><span class="default">$bottom</span><span class="keyword">)
<br />                </span><span class="default">$bottom </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;
<br />              if(</span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$top</span><span class="keyword">)
<br />                </span><span class="default">$top </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;
<br />        }
<br />        }
<br />    }
<br />    
<br />    </span><span class="default">$right</span><span class="keyword">++;
<br />    </span><span class="default">$bottom</span><span class="keyword">++;
<br />    
<br />    </span><span class="comment">// create new image with padding
<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$right</span><span class="keyword">-</span><span class="default">$left</span><span class="keyword">+</span><span class="default">$padding</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">,</span><span class="default">$bottom</span><span class="keyword">-</span><span class="default">$top</span><span class="keyword">+</span><span class="default">$padding</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">);
<br />    </span><span class="comment">// fill the background
<br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$background</span><span class="keyword">);
<br />    </span><span class="comment">// copy 
<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$padding</span><span class="keyword">, </span><span class="default">$padding</span><span class="keyword">, </span><span class="default">$left</span><span class="keyword">, </span><span class="default">$top</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">-</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$bottom</span><span class="keyword">-</span><span class="default">$top</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">// destroy old image cursor
<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br />    return </span><span class="default">$img</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89658">  <div class="votes">
    <div id="Vu89658">
    <a href="/manual/vote-note.php?id=89658&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89658">
    <a href="/manual/vote-note.php?id=89658&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89658" title="56% like this...">
    4
    </div>
  </div>
  <a href="#89658" class="name">
  <strong class="user"><em>webmaster at plumage dot nl</em></strong></a><a class="genanchor" href="#89658"> &para;</a><div class="date" title="2009-03-18 04:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89658">
<div class="phpcode"><code><span class="html">I have a few remarks om the mirror-function:<br />The cases horizontal and vertical are switched.<br />1 = vertical and 2 = horizontal.<br />When I used it there appeared a black lining of 1 pixel on the side or on the top of the picture.<br />To remove it the function becomes as follows:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ImageFlip </span><span class="keyword">( </span><span class="default">$imgsrc</span><span class="keyword">, </span><span class="default">$mode </span><span class="keyword">)<br />{<br /><br />    </span><span class="default">$width                        </span><span class="keyword">=    </span><span class="default">imagesx </span><span class="keyword">( </span><span class="default">$imgsrc </span><span class="keyword">);<br />    </span><span class="default">$height                       </span><span class="keyword">=    </span><span class="default">imagesy </span><span class="keyword">( </span><span class="default">$imgsrc </span><span class="keyword">);<br /><br />    </span><span class="default">$src_x                        </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$src_y                        </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$src_width                    </span><span class="keyword">=    </span><span class="default">$width</span><span class="keyword">;<br />    </span><span class="default">$src_height                   </span><span class="keyword">=    </span><span class="default">$height</span><span class="keyword">;<br /><br />    switch ( </span><span class="default">$mode </span><span class="keyword">)<br />    {<br /><br />        case </span><span class="string">'1'</span><span class="keyword">: </span><span class="comment">//vertical<br />            </span><span class="default">$src_y                </span><span class="keyword">=    </span><span class="default">$height </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$src_height           </span><span class="keyword">=    -</span><span class="default">$height</span><span class="keyword">;<br />        break;<br /><br />        case </span><span class="string">'2'</span><span class="keyword">: </span><span class="comment">//horizontal<br />            </span><span class="default">$src_x                </span><span class="keyword">=    </span><span class="default">$width </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$src_width            </span><span class="keyword">=    -</span><span class="default">$width</span><span class="keyword">;<br />        break;<br /><br />        case </span><span class="string">'3'</span><span class="keyword">: </span><span class="comment">//both<br />            </span><span class="default">$src_x                </span><span class="keyword">=    </span><span class="default">$width </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$src_y                </span><span class="keyword">=    </span><span class="default">$height </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$src_width            </span><span class="keyword">=    -</span><span class="default">$width</span><span class="keyword">;<br />            </span><span class="default">$src_height           </span><span class="keyword">=    -</span><span class="default">$height</span><span class="keyword">;<br />        break;<br /><br />        default:<br />            return </span><span class="default">$imgsrc</span><span class="keyword">;<br /><br />    }<br /><br />    </span><span class="default">$imgdest                    </span><span class="keyword">=    </span><span class="default">imagecreatetruecolor </span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br /><br />    if ( </span><span class="default">imagecopyresampled </span><span class="keyword">( </span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$imgsrc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y </span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$src_width</span><span class="keyword">, </span><span class="default">$src_height </span><span class="keyword">) )<br />    {<br />        return </span><span class="default">$imgdest</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$imgsrc</span><span class="keyword">;<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85992">  <div class="votes">
    <div id="Vu85992">
    <a href="/manual/vote-note.php?id=85992&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85992">
    <a href="/manual/vote-note.php?id=85992&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85992" title="54% like this...">
    3
    </div>
  </div>
  <a href="#85992" class="name">
  <strong class="user"><em>xafford</em></strong></a><a class="genanchor" href="#85992"> &para;</a><div class="date" title="2008-09-27 05:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85992">
<div class="phpcode"><code><span class="html">concerning the previous post of Borszczuk and the function to mirror images:<br /><br />There´s a way better (and faster) method for this task with imagecopyresampled.<br /><br /><span class="default">&lt;?php<br /><br />define </span><span class="keyword">( </span><span class="string">'IMAGE_FLIP_HORIZONTAL'</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">( </span><span class="string">'IMAGE_FLIP_VERTICAL'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">);<br /></span><span class="default">define </span><span class="keyword">( </span><span class="string">'IMAGE_FLIP_BOTH'</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">);<br /><br />function </span><span class="default">ImageFlip </span><span class="keyword">( </span><span class="default">$imgsrc</span><span class="keyword">, </span><span class="default">$mode </span><span class="keyword">)<br />{<br /><br />    </span><span class="default">$width                        </span><span class="keyword">=    </span><span class="default">imagesx </span><span class="keyword">( </span><span class="default">$imgsrc </span><span class="keyword">);<br />    </span><span class="default">$height                       </span><span class="keyword">=    </span><span class="default">imagesy </span><span class="keyword">( </span><span class="default">$imgsrc </span><span class="keyword">);<br /><br />    </span><span class="default">$src_x                        </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$src_y                        </span><span class="keyword">=    </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$src_width                    </span><span class="keyword">=    </span><span class="default">$width</span><span class="keyword">;<br />    </span><span class="default">$src_height                   </span><span class="keyword">=    </span><span class="default">$height</span><span class="keyword">;<br /><br />    switch ( (int) </span><span class="default">$mode </span><span class="keyword">)<br />    {<br /><br />        case </span><span class="default">IMAGE_FLIP_HORIZONTAL</span><span class="keyword">:<br />            </span><span class="default">$src_y                </span><span class="keyword">=    </span><span class="default">$height</span><span class="keyword">;<br />            </span><span class="default">$src_height           </span><span class="keyword">=    -</span><span class="default">$height</span><span class="keyword">;<br />        break;<br /><br />        case </span><span class="default">IMAGE_FLIP_VERTICAL</span><span class="keyword">:<br />            </span><span class="default">$src_x                </span><span class="keyword">=    </span><span class="default">$width</span><span class="keyword">;<br />            </span><span class="default">$src_width            </span><span class="keyword">=    -</span><span class="default">$width</span><span class="keyword">;<br />        break;<br /><br />        case </span><span class="default">IMAGE_FLIP_BOTH</span><span class="keyword">:<br />            </span><span class="default">$src_x                </span><span class="keyword">=    </span><span class="default">$width</span><span class="keyword">;<br />            </span><span class="default">$src_y                </span><span class="keyword">=    </span><span class="default">$height</span><span class="keyword">;<br />            </span><span class="default">$src_width            </span><span class="keyword">=    -</span><span class="default">$width</span><span class="keyword">;<br />            </span><span class="default">$src_height           </span><span class="keyword">=    -</span><span class="default">$height</span><span class="keyword">;<br />        break;<br /><br />        default:<br />            return </span><span class="default">$imgsrc</span><span class="keyword">;<br /><br />    }<br /><br />    </span><span class="default">$imgdest                    </span><span class="keyword">=    </span><span class="default">imagecreatetruecolor </span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br /><br />    if ( </span><span class="default">imagecopyresampled </span><span class="keyword">( </span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$imgsrc</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$src_x</span><span class="keyword">, </span><span class="default">$src_y</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$src_width</span><span class="keyword">, </span><span class="default">$src_height </span><span class="keyword">) )<br />    {<br />        return </span><span class="default">$imgdest</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$imgsrc</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92039">  <div class="votes">
    <div id="Vu92039">
    <a href="/manual/vote-note.php?id=92039&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92039">
    <a href="/manual/vote-note.php?id=92039&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92039" title="55% like this...">
    2
    </div>
  </div>
  <a href="#92039" class="name">
  <strong class="user"><em>Chad Allard</em></strong></a><a class="genanchor" href="#92039"> &para;</a><div class="date" title="2009-07-06 12:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92039">
<div class="phpcode"><code><span class="html">Regarding the image_flip function discussed in the notes here, don't forget to support transparency.<br /><br />AFTER:  <br /><br />$imgdest = imagecreatetruecolor($width, $height); <br /><br />ADD:<br /><br />imagealphablending($imgdest, false);<br />imagesavealpha($imgdest, true);<br /><br />In another post here it mentioned you didn't have to use the imagesavealpha function, but I found without it the background transparency can turn the background canvas black.</span></code></div>
  </div>
 </div>
  <div class="note" id="91152">  <div class="votes">
    <div id="Vu91152">
    <a href="/manual/vote-note.php?id=91152&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91152">
    <a href="/manual/vote-note.php?id=91152&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91152" title="52% like this...">
    1
    </div>
  </div>
  <a href="#91152" class="name">
  <strong class="user"><em>John Conde</em></strong></a><a class="genanchor" href="#91152"> &para;</a><div class="date" title="2009-05-27 07:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91152">
<div class="phpcode"><code><span class="html">Simple and basic image cropping:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Original image<br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">'someimage.jpg'</span><span class="keyword">;<br /><br /></span><span class="comment">// Get dimensions of the original image<br /></span><span class="keyword">list(</span><span class="default">$current_width</span><span class="keyword">, </span><span class="default">$current_height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /><br /></span><span class="comment">// The x and y coordinates on the original image where we<br />// will begin cropping the image<br /></span><span class="default">$left </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br /></span><span class="default">$top </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br /><br /></span><span class="comment">// This will be the final size of the image (e.g. how many pixels<br />// left and down we will be going)<br /></span><span class="default">$crop_width </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$crop_height </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /><br /></span><span class="comment">// Resample the image<br /></span><span class="default">$canvas </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$crop_width</span><span class="keyword">, </span><span class="default">$crop_height</span><span class="keyword">);<br /></span><span class="default">$current_image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">$current_image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$left</span><span class="keyword">, </span><span class="default">$top</span><span class="keyword">, </span><span class="default">$current_width</span><span class="keyword">, </span><span class="default">$current_height</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$canvas</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91973">  <div class="votes">
    <div id="Vu91973">
    <a href="/manual/vote-note.php?id=91973&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91973">
    <a href="/manual/vote-note.php?id=91973&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91973" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91973" class="name">
  <strong class="user"><em>etienne at escott dot info</em></strong></a><a class="genanchor" href="#91973"> &para;</a><div class="date" title="2009-07-03 02:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91973">
<div class="phpcode"><code><span class="html">This is based on the Skew function from designerkamal at gmail dot com.<br /><br />This is a function for skewing images in PHP with anti-aliasing. It works with alpha PNG images.<br /><br />Warning: the bigger the image you skew, the longer it will take to process. It's about 3 times longer than without anti-aliasing.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// $img: handle of an image<br />// $skew_val: level of skew to apply (0 being none, 1 being 45°)<br /></span><span class="keyword">function </span><span class="default">imageskewantialiased</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$skew_val</span><span class="keyword">)<br />{<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">$height2 </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">+ (</span><span class="default">$width </span><span class="keyword">* </span><span class="default">$skew_val</span><span class="keyword">);<br />    <br />    </span><span class="comment">// See below for definition of imagecreatealpha<br />    </span><span class="default">$imgdest </span><span class="keyword">= </span><span class="default">imagecreatealpha</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height2</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Process the image<br />    </span><span class="keyword">for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$floor </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$level</span><span class="keyword">);<br />        <br />        </span><span class="comment">// To go faster, some lines are being copied at once<br />        </span><span class="keyword">if (</span><span class="default">$level </span><span class="keyword">== </span><span class="default">$floor</span><span class="keyword">)<br />            </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);<br />        else<br />        {<br />            </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$level </span><span class="keyword">- </span><span class="default">$floor</span><span class="keyword">;<br />            <br />            </span><span class="comment">// The first pixel of the line<br />            // We get the color then apply a fade on it depending on the level<br />            </span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br />            </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] + (</span><span class="default">$temp </span><span class="keyword">* </span><span class="default">127</span><span class="keyword">);<br />            if (</span><span class="default">$alpha </span><span class="keyword">&lt; </span><span class="default">127</span><span class="keyword">)<br />            {<br />                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">], </span><span class="default">$alpha</span><span class="keyword">);<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$floor</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />            }<br />            <br />            </span><span class="comment">// The rest of the line<br />            </span><span class="keyword">for(</span><span class="default">$y </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++)<br />            {<br />                </span><span class="comment">// Merge this pixel and the upper one<br />                </span><span class="default">$color2 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />                </span><span class="default">$alpha </span><span class="keyword">= (</span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] * </span><span class="default">$temp</span><span class="keyword">) + (</span><span class="default">$color2</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] * (</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$temp</span><span class="keyword">));<br />                if (</span><span class="default">$alpha </span><span class="keyword">&lt; </span><span class="default">127</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$red   </span><span class="keyword">= (</span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]   * </span><span class="default">$temp</span><span class="keyword">) + (</span><span class="default">$color2</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]   * (</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$temp</span><span class="keyword">));<br />                    </span><span class="default">$green </span><span class="keyword">= (</span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] * </span><span class="default">$temp</span><span class="keyword">) + (</span><span class="default">$color2</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] * (</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$temp</span><span class="keyword">));<br />                    </span><span class="default">$blue  </span><span class="keyword">= (</span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]  * </span><span class="default">$temp</span><span class="keyword">) + (</span><span class="default">$color2</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]  * (</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$temp</span><span class="keyword">));<br />                    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">, </span><span class="default">$alpha</span><span class="keyword">);<br />                    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$floor </span><span class="keyword">+ </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />                }<br />                <br />                </span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">$color2</span><span class="keyword">;<br />            }<br />            <br />            </span><span class="comment">// The last pixel of the line<br />            </span><span class="default">$color1 </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">));<br />            </span><span class="default">$alpha </span><span class="keyword">= </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] + ((</span><span class="default">1 </span><span class="keyword">- </span><span class="default">$temp</span><span class="keyword">) * </span><span class="default">127</span><span class="keyword">);<br />            if (</span><span class="default">$alpha </span><span class="keyword">&lt; </span><span class="default">127</span><span class="keyword">)<br />            {<br />                </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">], </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">], </span><span class="default">$color1</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">], </span><span class="default">$alpha</span><span class="keyword">);<br />                </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$floor </span><span class="keyword">+ </span><span class="default">$height </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />            }<br />        }<br />        <br />        </span><span class="comment">// The line is finished, the next line will be lower<br />        </span><span class="default">$level </span><span class="keyword">+= </span><span class="default">$skew_val</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// Finished processing, return the skewed image<br />    </span><span class="keyword">return </span><span class="default">$imgdest</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Creates a new image of the size specified with a blank background (transparent)<br /></span><span class="keyword">function </span><span class="default">imagecreatealpha</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Create a normal image and apply required settings<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />    </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Apply the transparent background<br />    </span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />    {<br />        for (</span><span class="default">$y </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++)<br />        {<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);<br />        }<br />    }<br />    <br />    return </span><span class="default">$img</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Here's an example of how to use it<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">imageskewantialiased</span><span class="keyword">(</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'test.png'</span><span class="keyword">), </span><span class="default">0.15</span><span class="keyword">), </span><span class="string">'skew.png'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68940">  <div class="votes">
    <div id="Vu68940">
    <a href="/manual/vote-note.php?id=68940&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68940">
    <a href="/manual/vote-note.php?id=68940&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68940" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68940" class="name">
  <strong class="user"><em>C. Jansen</em></strong></a><a class="genanchor" href="#68940"> &para;</a><div class="date" title="2006-08-16 11:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68940">
<div class="phpcode"><code><span class="html">While replying to a post in a support forum I noticed something odd about imagecopy(). The first snippet (should) create an image object, allocate a colour resource within that image, fill the background with the allocated colour and then copy another, cropped to fit, image onto it.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// create a new image resource<br />    </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br />    </span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255 </span><span class="keyword">);<br /><br />    </span><span class="comment">//fill the background with white<br />    </span><span class="default">imagefill</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$white </span><span class="keyword">);<br /><br />    </span><span class="comment">//copy the image into new a resource<br />    </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$crop_top</span><span class="keyword">, </span><span class="default">$crop_left</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But this produces a black background. I noticed taking away the imagefill() call yields the same results. The solution was to call imagefill() after the imagecopy(). Thinking linearly I would have guessed this to cover the previously copied image in white but it doesn't. I guess GD uses a layer system? Is this correct?<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// create a new image resource<br />    </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br />    </span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255 </span><span class="keyword">);<br /><br />    </span><span class="comment">// copy image into new resource<br />    </span><span class="default">imagecopy</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$crop_top</span><span class="keyword">, </span><span class="default">$crop_left</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br />        <br />    </span><span class="comment">//fill the background with white (not sure why it has to be in this order)<br />    </span><span class="default">imagefill</span><span class="keyword">( </span><span class="default">$temp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$white </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I am using php 5.1.4 with the bundled GD (2.0.28)</span></code></div>
  </div>
 </div>
  <div class="note" id="61693">  <div class="votes">
    <div id="Vu61693">
    <a href="/manual/vote-note.php?id=61693&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61693">
    <a href="/manual/vote-note.php?id=61693&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61693" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61693" class="name">
  <strong class="user"><em>designerkamal at gmail dot com</em></strong></a><a class="genanchor" href="#61693"> &para;</a><div class="date" title="2006-02-09 11:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61693">
<div class="phpcode"><code><span class="html">Skewing images in PHP...<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">Skew</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$skew_val</span><span class="keyword">)<br />{<br />  </span><span class="default">$imgsrc </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />  </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$imgsrc</span><span class="keyword">);<br />  </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$imgsrc</span><span class="keyword">);<br />  </span><span class="default">$imgdest </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">+(</span><span class="default">$height</span><span class="keyword">*</span><span class="default">$skew_val</span><span class="keyword">));<br />  </span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">$temp</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0 </span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width </span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />   {<br />     for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0 </span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height </span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) <br />    {<br />        </span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$imgsrc</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">+</span><span class="default">$temp</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />      </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">,</span><span class="default">$trans</span><span class="keyword">);<br />        <br />    }<br />    </span><span class="default">$temp</span><span class="keyword">+=</span><span class="default">$skew_val</span><span class="keyword">;<br />   }<br />  </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">, </span><span class="default">$dest</span><span class="keyword">); <br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imgsrc</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$imgdest</span><span class="keyword">);<br />}<br /></span><span class="default">Skew</span><span class="keyword">(</span><span class="string">"img.gif"</span><span class="keyword">, </span><span class="string">"img2.png"</span><span class="keyword">,</span><span class="string">"1"</span><span class="keyword">);<br />print </span><span class="string">"&lt;img src='img.gif'&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />print </span><span class="string">"&lt;img src='img2.png'&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80830">  <div class="votes">
    <div id="Vu80830">
    <a href="/manual/vote-note.php?id=80830&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80830">
    <a href="/manual/vote-note.php?id=80830&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80830" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#80830" class="name">
  <strong class="user"><em>matrebatre</em></strong></a><a class="genanchor" href="#80830"> &para;</a><div class="date" title="2008-02-02 05:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80830">
<div class="phpcode"><code><span class="html">I had the same problem as Jeff, but his solution didn't work for me. I made this script, and it seems to work:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$img </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="string">'in.gif'</span><span class="keyword">);
<br /></span><span class="default">$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />
<br /></span><span class="default">$trans </span><span class="keyword">= </span><span class="default">imagecolortransparent</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />if(</span><span class="default">$trans </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {
<br />
<br /></span><span class="default">$rgb </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">);
<br />
<br /></span><span class="default">$oldimg </span><span class="keyword">= </span><span class="default">$img</span><span class="keyword">;
<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">);
<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">],</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">],</span><span class="default">$rgb</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);
<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);
<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$oldimg</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">);
<br />
<br />}
<br />
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="string">'out.gif'</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84306">  <div class="votes">
    <div id="Vu84306">
    <a href="/manual/vote-note.php?id=84306&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84306">
    <a href="/manual/vote-note.php?id=84306&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84306" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#84306" class="name">
  <strong class="user"><em>Cory Gagliardi</em></strong></a><a class="genanchor" href="#84306"> &para;</a><div class="date" title="2008-07-08 11:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84306">
<div class="phpcode"><code><span class="html">Here is some simple code for resizing an uploaded image and inserting a watermark (from a 24-bit PNG) on the bottom right of it.  In this case, the water mark was a diagnol band that said "SOLD" across it.  The code that verifies the uploaded image is the correct type has been omitted:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="comment">//Load and resize the image<br /></span><span class="default">$uploaded </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]);<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">IMAGE_WIDTH</span><span class="keyword">, </span><span class="default">IMAGE_HEIGHT</span><span class="keyword">);<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$uploaded</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">IMAGE_WIDTH</span><span class="keyword">, </span><span class="default">IMAGE_HEIGHT</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$uploaded</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$uploaded</span><span class="keyword">));    <br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">); </span><span class="comment">//allows us to apply a 24-bit watermark over $image<br /><br />//Load the sold watermark<br /></span><span class="default">$sold_band </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'../images/sold_band.png'</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$sold_band</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">//Apply watermark and save<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">image_overlap</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$sold_band</span><span class="keyword">);<br /></span><span class="default">imagecopy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$sold_band</span><span class="keyword">,</span><span class="default">IMAGE_WIDTH </span><span class="keyword">- </span><span class="default">SOLD_WIDTH</span><span class="keyword">,</span><span class="default">IMAGE_HEIGHT </span><span class="keyword">- </span><span class="default">SOLD_HEIGHT</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">SOLD_WIDTH</span><span class="keyword">,</span><span class="default">SOLD_HEIGHT</span><span class="keyword">);<br /></span><span class="default">$success </span><span class="keyword">= </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="string">'../images/sold/'</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="string">'.jpg'</span><span class="keyword">,</span><span class="default">85</span><span class="keyword">);<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$uploaded</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$sold_band</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62264">  <div class="votes">
    <div id="Vu62264">
    <a href="/manual/vote-note.php?id=62264&amp;page=function.imagecopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62264">
    <a href="/manual/vote-note.php?id=62264&amp;page=function.imagecopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62264" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#62264" class="name">
  <strong class="user"><em>admin at cvxdes dot com</em></strong></a><a class="genanchor" href="#62264"> &para;</a><div class="date" title="2006-02-23 08:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62264">
<div class="phpcode"><code><span class="html">I used this to watermark images. This is the function I wrote:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">watermark</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$logo</span><span class="keyword">){<br />    </span><span class="default">$bwidth  </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$bheight </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$lwidth  </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$logo</span><span class="keyword">);<br />    </span><span class="default">$lheight </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$logo</span><span class="keyword">);<br />    </span><span class="default">$src_x </span><span class="keyword">= </span><span class="default">$bwidth </span><span class="keyword">- (</span><span class="default">$lwidth </span><span class="keyword">+ </span><span class="default">5</span><span class="keyword">);<br />    </span><span class="default">$src_y </span><span class="keyword">= </span><span class="default">$bheight </span><span class="keyword">- (</span><span class="default">$lheight </span><span class="keyword">+ </span><span class="default">5</span><span class="keyword">);<br />    </span><span class="default">ImageAlphaBlending</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">ImageCopy</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$logo</span><span class="keyword">,</span><span class="default">$src_x</span><span class="keyword">,</span><span class="default">$src_y</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$lwidth</span><span class="keyword">,</span><span class="default">$lheight</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><span class="default">&lt;?php<br /></span><span class="comment">//$current_image would be your image the watermark is overlayed onto. Make sure it's imagecreatefrom*** to work.<br /></span><span class="default">watermark</span><span class="keyword">(</span><span class="default">$current_image</span><span class="keyword">,</span><span class="default">$watermark_image</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecopy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecopy.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
