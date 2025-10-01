<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefilledarc - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefilledarc.php">
 <link rel="shorturl" href="https://www.php.net/imagefilledarc">
 <link rel="alternate" href="https://www.php.net/imagefilledarc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagefill.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagefilledellipse.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefilledarc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefilledarc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefilledarc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefilledarc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefilledarc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefilledarc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefilledarc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefilledarc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefilledarc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefilledarc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefilledarc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draw a partial arc and fill it" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefilledarc - Manual" />
<meta name="twitter:description" content="Draw a partial arc and fill it" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefilledarc - Manual" />
<meta itemprop="description" content="Draw a partial arc and fill it" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draw a partial arc and fill it" />

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
        <a href="function.imagefilledellipse.php">
          imagefilledellipse &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagefill.php">
          &laquo; imagefill        </a>
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
            <option value='en/function.imagefilledarc.php' selected="selected">English</option>
            <option value='de/function.imagefilledarc.php'>German</option>
            <option value='es/function.imagefilledarc.php'>Spanish</option>
            <option value='fr/function.imagefilledarc.php'>French</option>
            <option value='it/function.imagefilledarc.php'>Italian</option>
            <option value='ja/function.imagefilledarc.php'>Japanese</option>
            <option value='pt_BR/function.imagefilledarc.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefilledarc.php'>Russian</option>
            <option value='tr/function.imagefilledarc.php'>Turkish</option>
            <option value='uk/function.imagefilledarc.php'>Ukrainian</option>
            <option value='zh/function.imagefilledarc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefilledarc" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefilledarc</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefilledarc</span> &mdash; <span class="dc-title">Draw a partial arc and fill it</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefilledarc-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefilledarc</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start_angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$end_angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$style</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Draws a partial arc centered at the specified coordinate in the
   given <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefilledarc-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">center_x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of the center.
      </p>
     </dd>
    
    
     <dt><code class="parameter">center_y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of the center.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       The arc width.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       The arc height.
      </p>
     </dd>
    
    
     <dt><code class="parameter">start_angle</code></dt>
     <dd>
      <p class="para">
       The arc start angle, in degrees.
      </p>
     </dd>
    
    
     <dt><code class="parameter">end_angle</code></dt>
     <dd>
      <p class="para">
       The arc end angle, in degrees.
       0° is located at the three-o&#039;clock position, and the arc is drawn
       clockwise.
      </p>
     </dd>
    
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       A color identifier created with <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">style</code></dt>
     <dd>
      <p class="para">
       A bitwise OR of the following possibilities:
       <ol type="1">
        <li class="listitem"><span class="simpara"><strong><code><a href="image.constants.php#constant.img-arc-pie">IMG_ARC_PIE</a></code></strong></span></li>
        <li class="listitem"><span class="simpara"><strong><code><a href="image.constants.php#constant.img-arc-chord">IMG_ARC_CHORD</a></code></strong></span></li>
        <li class="listitem"><span class="simpara"><strong><code><a href="image.constants.php#constant.img-arc-nofill">IMG_ARC_NOFILL</a></code></strong></span></li>
        <li class="listitem"><span class="simpara"><strong><code><a href="image.constants.php#constant.img-arc-edged">IMG_ARC_EDGED</a></code></strong></span></li>
       </ol>
       <strong><code><a href="image.constants.php#constant.img-arc-pie">IMG_ARC_PIE</a></code></strong> and <strong><code><a href="image.constants.php#constant.img-arc-chord">IMG_ARC_CHORD</a></code></strong> are
       mutually exclusive; <strong><code><a href="image.constants.php#constant.img-arc-chord">IMG_ARC_CHORD</a></code></strong> just
       connects the starting and ending angles with a straight line, while
       <strong><code><a href="image.constants.php#constant.img-arc-pie">IMG_ARC_PIE</a></code></strong> produces a rounded edge.
       <strong><code><a href="image.constants.php#constant.img-arc-nofill">IMG_ARC_NOFILL</a></code></strong> indicates that the arc
       or chord should be outlined, not filled.  <strong><code><a href="image.constants.php#constant.img-arc-edged">IMG_ARC_EDGED</a></code></strong>,
       used together with <strong><code><a href="image.constants.php#constant.img-arc-nofill">IMG_ARC_NOFILL</a></code></strong>, indicates that the
       beginning and ending angles should be connected to the center - this is a
       good way to outline (rather than fill) a &#039;pie slice&#039;.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagefilledarc-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefilledarc-changelog">
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
  <code class="parameter">image</code> expects a <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span>
  instance now; previously, a valid <code class="literal">gd</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imagefilledarc-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2884">
    <p><strong>Example #1 Creating a 3D looking pie</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// create image<br /></span><span style="color: #0000BB">$image </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// allocate some colors<br /></span><span style="color: #0000BB">$white    </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$gray     </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0xC0</span><span style="color: #007700">, </span><span style="color: #0000BB">0xC0</span><span style="color: #007700">, </span><span style="color: #0000BB">0xC0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$darkgray </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0x90</span><span style="color: #007700">, </span><span style="color: #0000BB">0x90</span><span style="color: #007700">, </span><span style="color: #0000BB">0x90</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$navy     </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x80</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$darknavy </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x50</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$red      </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$darkred  </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0x90</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// make the 3D effect<br /></span><span style="color: #007700">for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">60</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">50</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">--) {<br />   </span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$darknavy</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br />   </span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">75 </span><span style="color: #007700">, </span><span style="color: #0000BB">$darkgray</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br />   </span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">, </span><span style="color: #0000BB">360 </span><span style="color: #007700">, </span><span style="color: #0000BB">$darkred</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">$navy</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">45</span><span style="color: #007700">, </span><span style="color: #0000BB">75 </span><span style="color: #007700">, </span><span style="color: #0000BB">$gray</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagefilledarc</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">, </span><span style="color: #0000BB">360 </span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_ARC_PIE</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #FF8000">// flush image<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagefilledarc.png" alt="Output of example : Creating a 3D looking pie" width="100" height="100" />
     </div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefilledarc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefilledarc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefilledarc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledarc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="77090">  <div class="votes">
    <div id="Vu77090">
    <a href="/manual/vote-note.php?id=77090&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77090">
    <a href="/manual/vote-note.php?id=77090&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77090" title="100% like this...">
    4
    </div>
  </div>
  <a href="#77090" class="name">
  <strong class="user"><em>Mike</em></strong></a><a class="genanchor" href="#77090"> &para;</a><div class="date" title="2007-08-14 12:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77090">
<div class="phpcode"><code><span class="html">The previous example does not work well.  This is much better and faster:<br /><br /><span class="default">&lt;?php<br />$Randomized </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">);<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$Randomized</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">);};</span><span class="comment">//full array with garbage.<br /></span><span class="default">$imgx</span><span class="keyword">=</span><span class="string">'600'</span><span class="keyword">;</span><span class="default">$imgy</span><span class="keyword">=</span><span class="string">'400'</span><span class="keyword">;</span><span class="comment">//Set Image Size. ImageX,ImageY<br /></span><span class="default">$cx </span><span class="keyword">= </span><span class="string">'300'</span><span class="keyword">;</span><span class="default">$cy </span><span class="keyword">=</span><span class="string">'150'</span><span class="keyword">; </span><span class="comment">//Set Pie Postition. CenterX,CenterY<br /></span><span class="default">$sx </span><span class="keyword">= </span><span class="string">'600'</span><span class="keyword">;</span><span class="default">$sy</span><span class="keyword">=</span><span class="string">'300'</span><span class="keyword">;</span><span class="default">$sz </span><span class="keyword">=</span><span class="string">'100'</span><span class="keyword">;</span><span class="comment">// Set Size-dimensions. SizeX,SizeY,SizeZ<br /><br /></span><span class="default">$data_sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">//convert to angles.<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$Randomized</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />   </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = ((</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] / </span><span class="default">$data_sum</span><span class="keyword">) * </span><span class="default">360</span><span class="keyword">);<br />   </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />};<br /></span><span class="default">$im  </span><span class="keyword">= </span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">$imgx</span><span class="keyword">,</span><span class="default">$imgy</span><span class="keyword">);<br /></span><span class="default">$background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="comment">//Random colors.<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$Randomized</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />   </span><span class="default">$r</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);</span><span class="default">$g</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);</span><span class="default">$b</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);   <br />   </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br />   </span><span class="default">$colord</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,(</span><span class="default">$r</span><span class="keyword">/</span><span class="default">1.5</span><span class="keyword">),(</span><span class="default">$g</span><span class="keyword">/</span><span class="default">1.5</span><span class="keyword">),(</span><span class="default">$b</span><span class="keyword">/</span><span class="default">1.5</span><span class="keyword">));<br />}<br /></span><span class="comment">//3D effect.<br /></span><span class="keyword">for(</span><span class="default">$z</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$z</span><span class="keyword">&lt;=</span><span class="default">$sz</span><span class="keyword">;</span><span class="default">$z</span><span class="keyword">++){<br />        </span><span class="comment">// first slice<br />    </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$cx</span><span class="keyword">,(</span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$sz</span><span class="keyword">)-</span><span class="default">$z</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">,</span><span class="default">0<br />    </span><span class="keyword">,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$colord</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">);<br />   for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$Randomized</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$cx</span><span class="keyword">,(</span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$sz</span><span class="keyword">)-</span><span class="default">$z</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]<br />        ,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">$colord</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">);<br />   };<br />};<br /></span><span class="comment">//Top pie.<br />   // first slice<br />   </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$cx</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">,</span><span class="default">0 </span><span class="keyword">,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$Randomized</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />   </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$cx</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">,</span><span class="default">$sx</span><span class="keyword">,</span><span class="default">$sy</span><span class="keyword">,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] ,</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />};<br /></span><span class="comment">//Output.<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102337">  <div class="votes">
    <div id="Vu102337">
    <a href="/manual/vote-note.php?id=102337&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102337">
    <a href="/manual/vote-note.php?id=102337&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102337" title="63% like this...">
    3
    </div>
  </div>
  <a href="#102337" class="name">
  <strong class="user"><em>splogamurugan at gmail dot com</em></strong></a><a class="genanchor" href="#102337"> &para;</a><div class="date" title="2011-02-09 02:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102337">
<div class="phpcode"><code><span class="html">A simple pie chart generation script. 
<br />Displays the percentage at center arc and displays the Legends with random colors. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">simplepie
<br /></span><span class="keyword">{
<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$dataArr</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$font </span><span class="keyword">= </span><span class="string">'./verdana.ttf'</span><span class="keyword">; </span><span class="comment">/** get it from c:/windows/fonts dir */
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);
<br />        </span><span class="default">$piewidth </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">* </span><span class="default">0.70</span><span class="keyword">;</span><span class="comment">/* pie area */
<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$piewidth</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br />        </span><span class="default">$total </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$dataArr</span><span class="keyword">);
<br />        </span><span class="default">$angle_start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$ylegend </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;
<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$piewidth</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">));
<br />        foreach(</span><span class="default">$dataArr </span><span class="keyword">as </span><span class="default">$label</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {
<br />            </span><span class="default">$angle_done    </span><span class="keyword">= (</span><span class="default">$value</span><span class="keyword">/</span><span class="default">$total</span><span class="keyword">) * </span><span class="default">360</span><span class="keyword">; </span><span class="comment">/** angle calculated for 360 degrees */
<br />            </span><span class="default">$perc          </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$value</span><span class="keyword">/</span><span class="default">$total</span><span class="keyword">) * </span><span class="default">100</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">/** percentage calculated */
<br />            </span><span class="default">$color         </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));
<br />            </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$piewidth</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$angle_start</span><span class="keyword">, </span><span class="default">$angle_done</span><span class="keyword">+= </span><span class="default">$angle_start</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);
<br />            </span><span class="default">$xtext </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">+ (</span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$angle_start</span><span class="keyword">+</span><span class="default">$angle_done</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">))*(</span><span class="default">$piewidth</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">));
<br />            </span><span class="default">$ytext </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">+ (</span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$angle_start</span><span class="keyword">+</span><span class="default">$angle_done</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">))*(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">)); 
<br />            </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$xtext</span><span class="keyword">, </span><span class="default">$ytext</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$perc</span><span class="string"> %"</span><span class="keyword">);
<br />            </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">$piewidth</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">, </span><span class="default">$ylegend</span><span class="keyword">, </span><span class="default">$piewidth</span><span class="keyword">+</span><span class="default">20</span><span class="keyword">, </span><span class="default">$ylegend</span><span class="keyword">+=</span><span class="default">20</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">); 
<br />            </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$piewidth</span><span class="keyword">+</span><span class="default">22</span><span class="keyword">, </span><span class="default">$ylegend</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$label</span><span class="keyword">);
<br />            </span><span class="default">$ylegend </span><span class="keyword">+= </span><span class="default">4</span><span class="keyword">;
<br />            </span><span class="default">$angle_start </span><span class="keyword">= </span><span class="default">$angle_done</span><span class="keyword">;
<br />        }
<br />    }
<br />    function </span><span class="default">render</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);
<br />        </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">image</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="comment">/** usage */
<br /></span><span class="default">$dataArr </span><span class="keyword">= array(</span><span class="default">2001</span><span class="keyword">=&gt;</span><span class="default">10</span><span class="keyword">, </span><span class="default">2002</span><span class="keyword">=&gt;</span><span class="default">30</span><span class="keyword">, </span><span class="default">2003</span><span class="keyword">=&gt;</span><span class="default">50</span><span class="keyword">, </span><span class="default">2004</span><span class="keyword">=&gt;</span><span class="default">10</span><span class="keyword">);
<br /></span><span class="default">$width</span><span class="keyword">=</span><span class="default">600</span><span class="keyword">;
<br /></span><span class="default">$height</span><span class="keyword">=</span><span class="default">480</span><span class="keyword">;
<br /></span><span class="default">$pie </span><span class="keyword">= new </span><span class="default">simplepie</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$dataArr</span><span class="keyword">);
<br /></span><span class="default">$pie</span><span class="keyword">-&gt;</span><span class="default">render</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120236">  <div class="votes">
    <div id="Vu120236">
    <a href="/manual/vote-note.php?id=120236&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120236">
    <a href="/manual/vote-note.php?id=120236&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120236" title="60% like this...">
    1
    </div>
  </div>
  <a href="#120236" class="name">
  <strong class="user"><em>vrp76 at mail dot ru</em></strong></a><a class="genanchor" href="#120236"> &para;</a><div class="date" title="2016-11-29 08:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120236">
<div class="phpcode"><code><span class="html">The analogue of the function<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">myimagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$style </span><span class="keyword">= </span><span class="default">IMG_ARC_PIE</span><span class="keyword">){ <br />  <br />    </span><span class="default">$delta </span><span class="keyword">= </span><span class="default">0.1</span><span class="keyword">;<br />    </span><span class="default">$twoPi </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">*</span><span class="default">pi</span><span class="keyword">();<br />    <br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br />    <br />    if(</span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">$w</span><span class="keyword">){<br />        </span><span class="default">$kx</span><span class="keyword">=</span><span class="default">$w</span><span class="keyword">;<br />        </span><span class="default">$ky</span><span class="keyword">=</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">;<br />    }else{<br />        </span><span class="default">$kx</span><span class="keyword">=</span><span class="default">$h</span><span class="keyword">*</span><span class="default">$w</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">;<br />        </span><span class="default">$ky</span><span class="keyword">=</span><span class="default">$h</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$StartRad </span><span class="keyword">= </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">);<br />    </span><span class="default">$EndRad   </span><span class="keyword">= </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">);<br />        <br />    </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cx</span><span class="keyword">;<br />    </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cy</span><span class="keyword">;<br />    <br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$StartRad</span><span class="keyword">;<br /><br />    if(</span><span class="default">$style</span><span class="keyword">==</span><span class="default">IMG_ARC_PIE <br />     </span><span class="keyword">or </span><span class="default">$style</span><span class="keyword">==</span><span class="default">IMG_ARC_EDGED <br />     </span><span class="keyword">or </span><span class="default">$style</span><span class="keyword">==(</span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">) <br />     or </span><span class="default">$style</span><span class="keyword">==(</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">)){<br />        <br />        if(</span><span class="default">$StartRad</span><span class="keyword">&gt;=</span><span class="default">$EndRad</span><span class="keyword">){<br />            <br />            </span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">$twoPi</span><span class="keyword">;<br />            </span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">$EndRad</span><span class="keyword">;<br />            <br />        }else </span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">$EndRad</span><span class="keyword">;<br />            <br />    }else </span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">0</span><span class="keyword">;<br />     <br />    foreach(</span><span class="default">$b </span><span class="keyword">as </span><span class="default">$vb</span><span class="keyword">){<br />        do {    <br />            </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$kx</span><span class="keyword">*</span><span class="default">cos</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />            </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ky</span><span class="keyword">*</span><span class="default">sin</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />            </span><span class="default">$a </span><span class="keyword">+= </span><span class="default">$delta</span><span class="keyword">; <br />        } while (</span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">$vb</span><span class="keyword">);<br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cx </span><span class="keyword">+ </span><span class="default">$kx</span><span class="keyword">*</span><span class="default">cos</span><span class="keyword">(</span><span class="default">$EndRad</span><span class="keyword">);<br />    </span><span class="default">$array_points</span><span class="keyword">[] = </span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$ky</span><span class="keyword">*</span><span class="default">sin</span><span class="keyword">(</span><span class="default">$EndRad</span><span class="keyword">);<br />    <br />    </span><span class="default">$count_array_points    </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array_points</span><span class="keyword">);<br />    </span><span class="default">$num_points </span><span class="keyword">= </span><span class="default">$count_array_points</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br />    <br />    if(</span><span class="default">$style</span><span class="keyword">==</span><span class="default">IMG_ARC_PIE </span><span class="keyword">or </span><span class="default">$style</span><span class="keyword">==</span><span class="default">IMG_ARC_EDGED </span><span class="keyword">or </span><span class="default">$style</span><span class="keyword">==</span><span class="default">IMG_ARC_CHORD</span><span class="keyword">){<br />        </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$array_points</span><span class="keyword">, </span><span class="default">$num_points</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    }elseif(</span><span class="default">$style</span><span class="keyword">==(</span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">)){<br />        <br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; <br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$count_array_points </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />        <br />        </span><span class="default">$x1 </span><span class="keyword">= </span><span class="default">$array_points</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$y1 </span><span class="keyword">= </span><span class="default">$array_points</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">];<br />        <br />        do { <br />            </span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">$array_points</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]; <br />            </span><span class="default">$y2 </span><span class="keyword">= </span><span class="default">$array_points</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">];<br />            </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">, </span><span class="default">$y2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />            </span><span class="default">$x1 </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">; <br />            </span><span class="default">$y1 </span><span class="keyword">= </span><span class="default">$y2</span><span class="keyword">; <br />        } while (</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">);<br />            <br />    }elseif(</span><span class="default">$style</span><span class="keyword">==(</span><span class="default">IMG_ARC_CHORD</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">) or </span><span class="default">$style</span><span class="keyword">==(</span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">)){<br />        </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$array_points</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$array_points</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$array_points</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">], </span><span class="default">$array_points</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">);<br />    }else{    <br />        </span><span class="default">imagepolygon</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$array_points</span><span class="keyword">, </span><span class="default">$num_points</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);    <br />    }<br />    <br />}<br /><br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">900</span><span class="keyword">, </span><span class="default">1250</span><span class="keyword">);<br /><br /></span><span class="default">$white        </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">);<br /></span><span class="default">$gray</span><span class="keyword">[]     = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0xC0</span><span class="keyword">, </span><span class="default">0xC0</span><span class="keyword">, </span><span class="default">0xC0</span><span class="keyword">);<br /></span><span class="default">$gray</span><span class="keyword">[]     = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">);<br /></span><span class="default">$navy</span><span class="keyword">[]     = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x80</span><span class="keyword">);<br /></span><span class="default">$navy</span><span class="keyword">[]     = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x50</span><span class="keyword">);<br /></span><span class="default">$red</span><span class="keyword">[]      = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$red</span><span class="keyword">[]      = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$yellow</span><span class="keyword">[]    = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0xFF</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /></span><span class="default">$yellow</span><span class="keyword">[]    = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">, </span><span class="default">0x90</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br /><br /></span><span class="default">$Cx </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$Cy </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="default">$W </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;<br /></span><span class="default">$H </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="default">$Dx </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">;<br /></span><span class="default">$Dy </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$Dy_3d </span><span class="keyword">= </span><span class="default">40</span><span class="keyword">;<br /><br /></span><span class="default">$Angles</span><span class="keyword">[</span><span class="string">'yellow'</span><span class="keyword">]    = array(</span><span class="default">180</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$Angles</span><span class="keyword">[</span><span class="string">'gray'</span><span class="keyword">]        = array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">88</span><span class="keyword">);<br /></span><span class="default">$Angles</span><span class="keyword">[</span><span class="string">'navy'</span><span class="keyword">]        = array(</span><span class="default">88</span><span class="keyword">,</span><span class="default">92</span><span class="keyword">);<br /></span><span class="default">$Angles</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">]        = array(</span><span class="default">92</span><span class="keyword">,</span><span class="default">180</span><span class="keyword">);<br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_PIE'</span><span class="keyword">] = </span><span class="default">IMG_ARC_PIE</span><span class="keyword">;  <br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_CHORD'</span><span class="keyword">] = </span><span class="default">IMG_ARC_CHORD</span><span class="keyword">;<br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_PIE|IMG_ARC_NOFILL'</span><span class="keyword">] = </span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">;<br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_CHORD|IMG_ARC_NOFILL'</span><span class="keyword">] = </span><span class="default">IMG_ARC_CHORD</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">;<br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_PIE|IMG_ARC_EDGED|IMG_ARC_NOFILL'</span><span class="keyword">] = </span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">;<br /><br /></span><span class="default">$styles</span><span class="keyword">[</span><span class="string">'IMG_ARC_CHORD|IMG_ARC_EDGED|IMG_ARC_NOFILL'</span><span class="keyword">] = </span><span class="default">IMG_ARC_CHORD</span><span class="keyword">|</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">;<br /><br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">130</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="string">'imagefilledarc'</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /><br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">130 </span><span class="keyword">+ </span><span class="default">$Dx</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="string">'myimagefilledarc'</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$styles </span><span class="keyword">as </span><span class="default">$name_style </span><span class="keyword">=&gt; </span><span class="default">$style</span><span class="keyword">){<br /><br />    <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$Cy</span><span class="keyword">+</span><span class="default">$Dy_3d</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">$Cy</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />        foreach(</span><span class="default">$Angles </span><span class="keyword">as </span><span class="default">$colors</span><span class="keyword">=&gt;</span><span class="default">$angle</span><span class="keyword">){<br />            </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$Cx</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">+</span><span class="default">$Dy</span><span class="keyword">, </span><span class="default">$W</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],$</span><span class="default">$colors</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$style</span><span class="keyword">);<br />        }<br />    }<br />            <br />    foreach(</span><span class="default">$Angles </span><span class="keyword">as </span><span class="default">$colors</span><span class="keyword">=&gt;</span><span class="default">$angle</span><span class="keyword">){<br />        </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$Cx</span><span class="keyword">, </span><span class="default">$Cy</span><span class="keyword">+</span><span class="default">$Dy</span><span class="keyword">, </span><span class="default">$W</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],$</span><span class="default">$colors</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$style</span><span class="keyword">);<br />    }<br />    <br />    <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$Cy</span><span class="keyword">+</span><span class="default">$Dy_3d</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">$Cy</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />        foreach(</span><span class="default">$Angles </span><span class="keyword">as </span><span class="default">$colors</span><span class="keyword">=&gt;</span><span class="default">$angle</span><span class="keyword">){<br />            </span><span class="default">myimagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$Cx</span><span class="keyword">+</span><span class="default">$Dx</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">+</span><span class="default">$Dy</span><span class="keyword">, </span><span class="default">$W</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],$</span><span class="default">$colors</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$style</span><span class="keyword">);<br />        }<br />    }<br />            <br />    foreach(</span><span class="default">$Angles </span><span class="keyword">as </span><span class="default">$colors</span><span class="keyword">=&gt;</span><span class="default">$angle</span><span class="keyword">){<br />        </span><span class="default">myimagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$Cx</span><span class="keyword">+</span><span class="default">$Dx</span><span class="keyword">, </span><span class="default">$Cy</span><span class="keyword">+</span><span class="default">$Dy</span><span class="keyword">, </span><span class="default">$W</span><span class="keyword">, </span><span class="default">$H</span><span class="keyword">, </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],$</span><span class="default">$colors</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$style</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">450</span><span class="keyword">-</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$name_style</span><span class="keyword">)*</span><span class="default">8</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$Cy</span><span class="keyword">+</span><span class="default">$Dy</span><span class="keyword">+</span><span class="default">$H</span><span class="keyword">-</span><span class="default">10</span><span class="keyword">, </span><span class="default">$name_style</span><span class="keyword">, </span><span class="default">$yellow</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /><br />    </span><span class="default">$Dy</span><span class="keyword">+=</span><span class="default">200</span><span class="keyword">;<br />}<br /><br /> <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38800">  <div class="votes">
    <div id="Vu38800">
    <a href="/manual/vote-note.php?id=38800&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38800">
    <a href="/manual/vote-note.php?id=38800&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38800" title="100% like this...">
    2
    </div>
  </div>
  <a href="#38800" class="name">
  <strong class="user"><em>caist - www.caist.com</em></strong></a><a class="genanchor" href="#38800"> &para;</a><div class="date" title="2004-01-07 08:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38800">
<div class="phpcode"><code><span class="html">if you want to place a text onto the edge of a circle you need to<br />get a point on the circle:<br /><br />$pos_x=$radius*sin(deg2rad($angle));<br />$pos_y=sqrt($radius*$radius-$pos_x*$pos_x);<br /><br />if you want the point to be in the middle of a pie piece<br />you need a starting and ending angle<br /><br />$pos_x=$radius*sin(deg2rad($angle_end-($angle_start)/2));<br />$pos_y=sqrt($radius*$radius-$pos_x*$pos_x);<br /><br />hope it helps</span></code></div>
  </div>
 </div>
  <div class="note" id="117690">  <div class="votes">
    <div id="Vu117690">
    <a href="/manual/vote-note.php?id=117690&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117690">
    <a href="/manual/vote-note.php?id=117690&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117690" title="no votes...">
    0
    </div>
  </div>
  <a href="#117690" class="name">
  <strong class="user"><em>xcoda3 at web dot de</em></strong></a><a class="genanchor" href="#117690"> &para;</a><div class="date" title="2015-07-23 04:24"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117690">
<div class="phpcode"><code><span class="html">For everyone who will use imageellipse() with a border (imagesetthickness() not working correctly).<br />This function simualtes the standard gd border.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imageEllipseWithBorder</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$centerX</span><span class="keyword">, </span><span class="default">$centerY</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$borderWidth</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Calculate inner and outer strength of border<br />        </span><span class="default">$borderOuterStrength </span><span class="keyword">= ((</span><span class="default">$borderWidth </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$borderInnerStrength </span><span class="keyword">= (((</span><span class="default">$borderWidth </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">);<br /><br />        </span><span class="comment">// Caculate x-/y-offset from 0/0 position to ellipse center<br />        </span><span class="default">$ellipseXOffset </span><span class="keyword">= </span><span class="default">$centerX </span><span class="keyword">- (</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">$borderOuterStrength</span><span class="keyword">;<br />        </span><span class="default">$ellipseYOffset </span><span class="keyword">= </span><span class="default">$centerY </span><span class="keyword">- (</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">) - </span><span class="default">$borderOuterStrength</span><span class="keyword">;<br /><br />        </span><span class="comment">// Create temp image for editing<br />        </span><span class="default">$tempImageWidth  </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">+ (</span><span class="default">$borderOuterStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$tempImageHeight </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">+ (</span><span class="default">$borderInnerStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$tempImage </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$tempImageWidth</span><span class="keyword">, </span><span class="default">$tempImageHeight</span><span class="keyword">);<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$tempImage</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br />        </span><span class="comment">// Fill temp image with "transparent" color<br />        </span><span class="default">$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$tempImage</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br />        </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$tempImage</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br /><br />        </span><span class="comment">// Draw outer ellipse (representing the border)<br />        </span><span class="default">imagefilledellipse</span><span class="keyword">(<br />            </span><span class="default">$tempImage</span><span class="keyword">,<br />            </span><span class="default">$centerX </span><span class="keyword">- </span><span class="default">$ellipseXOffset</span><span class="keyword">,<br />            </span><span class="default">$centerY </span><span class="keyword">- </span><span class="default">$ellipseYOffset</span><span class="keyword">,<br />            </span><span class="default">$width  </span><span class="keyword">+ </span><span class="default">$borderOuterStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">$height </span><span class="keyword">+ </span><span class="default">$borderOuterStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">$color<br />        </span><span class="keyword">);<br /><br />        </span><span class="comment">// Draw inner ellipse (transparent area)<br />        </span><span class="default">imagefilledellipse</span><span class="keyword">(<br />            </span><span class="default">$tempImage</span><span class="keyword">,<br />            </span><span class="default">$centerX </span><span class="keyword">- </span><span class="default">$ellipseXOffset</span><span class="keyword">,<br />            </span><span class="default">$centerY </span><span class="keyword">- </span><span class="default">$ellipseYOffset</span><span class="keyword">,<br />            </span><span class="default">$width </span><span class="keyword">- </span><span class="default">$borderInnerStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">$height </span><span class="keyword">- </span><span class="default">$borderInnerStrength </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">$transparent<br />        </span><span class="keyword">);<br /><br />        </span><span class="comment">// "Paste" ellipse (with transparent inner area) into image at original position<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">imagecopy</span><span class="keyword">(<br />            </span><span class="default">$image</span><span class="keyword">,<br />            </span><span class="default">$tempImage</span><span class="keyword">,<br />            </span><span class="default">$ellipseXOffset </span><span class="keyword">+ (</span><span class="default">$borderWidth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) % </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">$ellipseYOffset </span><span class="keyword">+ (</span><span class="default">$borderWidth </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) % </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="default">$tempImageWidth</span><span class="keyword">,<br />            </span><span class="default">$tempImageHeight<br />        </span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113735">  <div class="votes">
    <div id="Vu113735">
    <a href="/manual/vote-note.php?id=113735&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113735">
    <a href="/manual/vote-note.php?id=113735&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113735" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113735" class="name">
  <strong class="user"><em>floripondia dot 88 at hotmail dot com</em></strong></a><a class="genanchor" href="#113735"> &para;</a><div class="date" title="2013-11-22 04:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113735">
<div class="phpcode"><code><span class="html">If you want to make a pie graph with exploded slices and data shows on each one and data side right too you can use this snippet.<br /><span class="default">&lt;?php<br />$values </span><span class="keyword">= array(</span><span class="string">"2010" </span><span class="keyword">=&gt; </span><span class="default">1950</span><span class="keyword">, </span><span class="string">"2011" </span><span class="keyword">=&gt; </span><span class="default">750</span><span class="keyword">, </span><span class="string">"2012" </span><span class="keyword">=&gt; </span><span class="default">2100</span><span class="keyword">, </span><span class="string">"2013" </span><span class="keyword">=&gt; </span><span class="default">580</span><span class="keyword">, </span><span class="string">"2014" </span><span class="keyword">=&gt; </span><span class="default">5000</span><span class="keyword">);<br /></span><span class="default">$total </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= (</span><span class="default">$total </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) ? array(</span><span class="default">360</span><span class="keyword">) : </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br /></span><span class="default">$keys </span><span class="keyword">= (</span><span class="default">$total </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) ? array(</span><span class="string">""</span><span class="keyword">) : </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">);<br /></span><span class="default">$radius </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">;<br /></span><span class="default">$imgx </span><span class="keyword">= </span><span class="default">1800 </span><span class="keyword">+ </span><span class="default">$radius</span><span class="keyword">;<br /></span><span class="default">$imgy </span><span class="keyword">= </span><span class="default">600 </span><span class="keyword">+ </span><span class="default">$radius</span><span class="keyword">;<br /></span><span class="default">$cx </span><span class="keyword">= </span><span class="default">400 </span><span class="keyword">+ </span><span class="default">$radius</span><span class="keyword">;<br /></span><span class="default">$cy </span><span class="keyword">= </span><span class="default">200 </span><span class="keyword">+ </span><span class="default">$radius</span><span class="keyword">;<br /></span><span class="default">$sx </span><span class="keyword">= </span><span class="default">800</span><span class="keyword">;<br /></span><span class="default">$sy </span><span class="keyword">= </span><span class="default">400</span><span class="keyword">;<br /></span><span class="default">$sz </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;<br /></span><span class="default">$data_sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$angle_sum </span><span class="keyword">= array(-</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="default">360</span><span class="keyword">);<br /></span><span class="default">$typo </span><span class="keyword">= </span><span class="string">"./helvetica.ttf"</span><span class="keyword">;<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$imgx</span><span class="keyword">, </span><span class="default">$imgy</span><span class="keyword">);<br /></span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$color </span><span class="keyword">= array(<br />    array(</span><span class="default">220</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">),<br />    array(</span><span class="default">77</span><span class="keyword">, </span><span class="default">33</span><span class="keyword">, </span><span class="default">114</span><span class="keyword">),<br />    array(</span><span class="default">249</span><span class="keyword">, </span><span class="default">141</span><span class="keyword">, </span><span class="default">53</span><span class="keyword">),<br />    array(</span><span class="default">158</span><span class="keyword">, </span><span class="default">37</span><span class="keyword">, </span><span class="default">59</span><span class="keyword">),<br />    array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">),<br />    array(</span><span class="default">28</span><span class="keyword">, </span><span class="default">94</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">),<br />    </span><span class="comment">//array(206, 16, 118),<br />    </span><span class="keyword">array(</span><span class="default">43</span><span class="keyword">, </span><span class="default">67</span><span class="keyword">, </span><span class="default">86</span><span class="keyword">),<br />    </span><span class="comment">//array(155, 108, 166),<br />    </span><span class="keyword">array(</span><span class="default">83</span><span class="keyword">, </span><span class="default">69</span><span class="keyword">, </span><span class="default">62</span><span class="keyword">)<br />);<br /></span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">);<br /></span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">);<br /></span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">);<br /></span><span class="default">$colors </span><span class="keyword">= array(</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]));<br /></span><span class="default">$colord </span><span class="keyword">= array(</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">), (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">), (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">)));<br /></span><span class="default">$factorx </span><span class="keyword">= array();<br /></span><span class="default">$factory </span><span class="keyword">= array();<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = ((</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] / </span><span class="default">$data_sum</span><span class="keyword">) * </span><span class="default">360</span><span class="keyword">);<br />    </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />    </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]);<br />    </span><span class="default">$colord</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">), (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">), (</span><span class="default">$color</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] / </span><span class="default">1.5</span><span class="keyword">));<br />    </span><span class="default">$factorx</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) / </span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$factory</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) / </span><span class="default">2</span><span class="keyword">));<br />}<br />for(</span><span class="default">$z </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$z </span><span class="keyword">&lt;= </span><span class="default">$sz</span><span class="keyword">; </span><span class="default">$z</span><span class="keyword">++){<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ (</span><span class="default">$factorx</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * </span><span class="default">$radius</span><span class="keyword">), ((</span><span class="default">$cy </span><span class="keyword">+ </span><span class="default">$sz</span><span class="keyword">) - </span><span class="default">$z</span><span class="keyword">) + (</span><span class="default">$factory</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * </span><span class="default">$radius</span><span class="keyword">), </span><span class="default">$sx</span><span class="keyword">, </span><span class="default">$sy</span><span class="keyword">, </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">], </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$colord</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    }<br />}<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ (</span><span class="default">$factorx</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * </span><span class="default">$radius</span><span class="keyword">), </span><span class="default">$cy </span><span class="keyword">+ (</span><span class="default">$factory</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * </span><span class="default">$radius</span><span class="keyword">), </span><span class="default">$sx</span><span class="keyword">, </span><span class="default">$sy</span><span class="keyword">, </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">], </span><span class="default">$angle_sum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">900</span><span class="keyword">, </span><span class="default">50 </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">50 </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">), </span><span class="default">950</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">50 </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">), </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">970</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">50 </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">), </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="default">$typo</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$cx </span><span class="keyword">+ (</span><span class="default">$factorx</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * (</span><span class="default">$sx </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">)) - </span><span class="default">40</span><span class="keyword">, </span><span class="default">$cy </span><span class="keyword">+ (</span><span class="default">$factory</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * (</span><span class="default">$sy </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">)) + </span><span class="default">10</span><span class="keyword">, </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="default">$typo</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />}<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93585">  <div class="votes">
    <div id="Vu93585">
    <a href="/manual/vote-note.php?id=93585&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93585">
    <a href="/manual/vote-note.php?id=93585&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93585" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93585" class="name">
  <strong class="user"><em>Christopher Kramer</em></strong></a><a class="genanchor" href="#93585"> &para;</a><div class="date" title="2009-09-17 04:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93585">
<div class="phpcode"><code><span class="html">If this function is not available because you're using an old gdlib version, here is a workaround if you want to draw a pie chart:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// width and height of the image<br /></span><span class="default">$width</span><span class="keyword">=</span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$height</span><span class="keyword">=</span><span class="default">200</span><span class="keyword">;<br /><br /></span><span class="default">$simulate_old_gd</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">; </span><span class="comment">// do not use imagefilledarc although available? <br /><br />// the pieces of the pie (in degree)<br /></span><span class="default">$pieces</span><span class="keyword">=array(</span><span class="default">180</span><span class="keyword">,</span><span class="default">90</span><span class="keyword">,</span><span class="default">45</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);<br /><br /></span><span class="default">$diagram</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br /><br /></span><span class="comment">// background color<br /></span><span class="default">$white</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$white</span><span class="keyword">);<br /><br /></span><span class="comment">// the circle is 2px smaller than the image<br /></span><span class="default">$width</span><span class="keyword">-=</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$height</span><span class="keyword">-=</span><span class="default">2</span><span class="keyword">;<br /><br /></span><span class="comment">// we need a border color<br /></span><span class="default">$black</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// draw the border of the pie<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), <br />         </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">360</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br /><br /></span><span class="comment">// position (in degrees) where to place the next piece<br /></span><span class="default">$position</span><span class="keyword">=</span><span class="default">270</span><span class="keyword">; <br /></span><span class="comment">// we will use calculated gray colors for simple example<br /></span><span class="default">$gray</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; <br /><br />foreach(</span><span class="default">$pieces </span><span class="keyword">as </span><span class="default">$deg</span><span class="keyword">)<br /> {<br /> </span><span class="comment">// calculate the gray color<br /> </span><span class="default">$gray</span><span class="keyword">+=</span><span class="default">30</span><span class="keyword">;<br /> if(</span><span class="default">$gray</span><span class="keyword">&gt;</span><span class="default">255</span><span class="keyword">) </span><span class="default">$gray</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /> </span><span class="default">$color</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">,</span><span class="default">$gray</span><span class="keyword">,</span><span class="default">$gray</span><span class="keyword">,</span><span class="default">$gray</span><span class="keyword">);<br /> <br /> </span><span class="comment">// position must be kept &lt; 360<br /> </span><span class="keyword">if(</span><span class="default">$position</span><span class="keyword">&gt;</span><span class="default">360</span><span class="keyword">) </span><span class="default">$position</span><span class="keyword">-=</span><span class="default">360</span><span class="keyword">;<br /><br /> if(!</span><span class="default">$simulate_old_gd </span><span class="keyword">&amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="string">'imagefilledarc'</span><span class="keyword">))<br />  {  <br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), <br />  </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$position</span><span class="keyword">, <br />  </span><span class="default">$position</span><span class="keyword">+</span><span class="default">$deg</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">,</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">);<br />  }<br /> else<br />  {<br />  </span><span class="comment">// we use some maths to calculate the pixel on the circle<br />  </span><span class="default">$pix_x</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">((</span><span class="default">$width</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">)*</span><span class="default">cos</span><span class="keyword">(</span><span class="default">$position</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">)<br />         +</span><span class="default">round</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));<br />  </span><span class="default">$pix_y</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">((</span><span class="default">$height</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">)*</span><span class="default">sin</span><span class="keyword">(</span><span class="default">$position</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">)<br />         +</span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));<br />  </span><span class="comment">// now we  draw a line from the mid of the circle to the<br />  // calculated pixel on the circle<br />  </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), <br />            </span><span class="default">$pix_x</span><span class="keyword">, </span><span class="default">$pix_y</span><span class="keyword">, </span><span class="default">$black</span><span class="keyword">);<br />  </span><span class="comment">// now we need a pixel for flood filling.<br />  //- We could use maths to calculate a pixel inside the <br />  // piece:<br />  //$fill_x=round(floor(($width-10)/2)*<br />  //        cos(($position+2)/180*M_PI)+round($width/2));<br />  //$fill_y=round(floor(($height-10)/2)*<br />  //        sin(($position+2)/180*M_PI)+round($height/2));<br />  //- or we could use an universal pixel with less maths ;)  <br />  // (top mid):<br />  </span><span class="default">$fill_x</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)-</span><span class="default">2</span><span class="keyword">;<br />  </span><span class="default">$fill_y</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br />  </span><span class="comment">// now we flood fill the circle<br />  </span><span class="keyword">@</span><span class="default">imagefilltoborder </span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">,</span><span class="default">$fill_x</span><span class="keyword">,</span><span class="default">$fill_y</span><span class="keyword">,</span><span class="default">$black</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />  </span><span class="comment">/* (it does not matter here that we fill more than we need<br />      because the next pieces will fix this)<br />     IF YOU ONLY WANT ONE PIECE<br />     (simulate imagefilledarc) you'd have to draw<br />     both border lines and flood fill afterwards */<br />  </span><span class="keyword">}<br /> </span><span class="comment">// the position of the next piece is $deg degrees further<br /> </span><span class="default">$position</span><span class="keyword">+=</span><span class="default">$deg</span><span class="keyword">;<br /> }<br /> <br /></span><span class="comment">// output the image<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$diagram</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$digram</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89216">  <div class="votes">
    <div id="Vu89216">
    <a href="/manual/vote-note.php?id=89216&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89216">
    <a href="/manual/vote-note.php?id=89216&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89216" title="no votes...">
    0
    </div>
  </div>
  <a href="#89216" class="name">
  <strong class="user"><em>mateusz dot charytoniuk at gmail dot com</em></strong></a><a class="genanchor" href="#89216"> &para;</a><div class="date" title="2009-02-26 09:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89216">
<div class="phpcode"><code><span class="html">The code below uses colors from "hans at lintoo dot dk"'s note. It delivers pie charts with labels:<br /><br /><span class="default">&lt;?php<br />$bright_list </span><span class="keyword">= array(<br />    array(</span><span class="default">255</span><span class="keyword">, </span><span class="default">203</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">),<br />    array(</span><span class="default">220</span><span class="keyword">, </span><span class="default">101</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">),<br />    array(</span><span class="default">189</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">51</span><span class="keyword">),<br />    array(</span><span class="default">214</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">),<br />    array(</span><span class="default">98</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">96</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">62</span><span class="keyword">, </span><span class="default">136</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">102</span><span class="keyword">, </span><span class="default">179</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">, </span><span class="default">195</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">115</span><span class="keyword">, </span><span class="default">106</span><span class="keyword">),<br />    array(</span><span class="default">178</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">52</span><span class="keyword">),<br />    array(</span><span class="default">137</span><span class="keyword">, </span><span class="default">91</span><span class="keyword">, </span><span class="default">74</span><span class="keyword">),<br />    array(</span><span class="default">82</span><span class="keyword">, </span><span class="default">56</span><span class="keyword">, </span><span class="default">47</span><span class="keyword">)<br />);<br /></span><span class="default">$dark_list </span><span class="keyword">= array(<br />    array(</span><span class="default">205</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">),<br />    array(</span><span class="default">170</span><span class="keyword">, </span><span class="default">51</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">),<br />    array(</span><span class="default">139</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">),<br />    array(</span><span class="default">164</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">77</span><span class="keyword">),<br />    array(</span><span class="default">48</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">46</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">86</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">52</span><span class="keyword">, </span><span class="default">129</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">95</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">),<br />    array(</span><span class="default">0</span><span class="keyword">, </span><span class="default">65</span><span class="keyword">, </span><span class="default">56</span><span class="keyword">),<br />    array(</span><span class="default">128</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">),<br />    array(</span><span class="default">87</span><span class="keyword">, </span><span class="default">41</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">),<br />    array(</span><span class="default">32</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)<br />);<br /><br /></span><span class="default">$data </span><span class="keyword">= array();<br /></span><span class="default">$angle </span><span class="keyword">= array();<br /></span><span class="default">$title </span><span class="keyword">= array();<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />foreach( </span><span class="default">$_GET </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">) {<br />    </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">$title</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">++] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"_"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">strval</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">));<br />}<br /></span><span class="default">$sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />if( </span><span class="default">$sum </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) {<br />    ++ </span><span class="default">$sum</span><span class="keyword">;<br />}<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; ++ </span><span class="default">$i </span><span class="keyword">) {<br />    </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]/</span><span class="default">$sum</span><span class="keyword">*</span><span class="default">360</span><span class="keyword">);<br />    if( </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">0 </span><span class="keyword">) {<br />        ++ </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    }<br />}<br /></span><span class="default">$sum_angle </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />if( </span><span class="default">$sum_angle </span><span class="keyword">&lt; </span><span class="default">360 </span><span class="keyword">) {<br />    </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+=</span><span class="default">360</span><span class="keyword">-</span><span class="default">$sum_angle</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">$count</span><span class="keyword">*</span><span class="default">34</span><span class="keyword">;<br />if( </span><span class="default">$height </span><span class="keyword">&lt; </span><span class="default">180 </span><span class="keyword">) {<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">180</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$im  </span><span class="keyword">= </span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">350</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">$background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">);<br /></span><span class="default">$border </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">97</span><span class="keyword">,</span><span class="default">97</span><span class="keyword">,</span><span class="default">97</span><span class="keyword">);<br /></span><span class="default">$font_color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">'yourfont.ttf'</span><span class="keyword">;<br /><br /></span><span class="default">$bright </span><span class="keyword">= array();<br />foreach( </span><span class="default">$bright_list </span><span class="keyword">as </span><span class="default">$c </span><span class="keyword">) {<br />    </span><span class="default">$bright</span><span class="keyword">[] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">$dark </span><span class="keyword">= array();<br />foreach( </span><span class="default">$dark_list </span><span class="keyword">as </span><span class="default">$c </span><span class="keyword">) {<br />    </span><span class="default">$dark</span><span class="keyword">[] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$c</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />}<br /></span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />for( </span><span class="default">$i </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; ++ </span><span class="default">$i </span><span class="keyword">) {<br />    for( </span><span class="default">$j </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&gt; </span><span class="default">90</span><span class="keyword">; -- </span><span class="default">$j </span><span class="keyword">) {<br />        </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">180</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">+</span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$dark</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    }<br />    </span><span class="default">$tmp </span><span class="keyword">+= </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />}<br /><br /></span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />for( </span><span class="default">$i </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; ++ </span><span class="default">$i </span><span class="keyword">) {<br />    </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">180</span><span class="keyword">, </span><span class="default">120</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">+</span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$bright</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    </span><span class="default">$tmp </span><span class="keyword">+= </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />}<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; ++ </span><span class="default">$i </span><span class="keyword">) {<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">209</span><span class="keyword">, </span><span class="default">19</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">), </span><span class="default">231</span><span class="keyword">, </span><span class="default">41</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">), </span><span class="default">$border</span><span class="keyword">);<br />    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">), </span><span class="default">230</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">), </span><span class="default">$bright</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">imagefttext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">240</span><span class="keyword">, </span><span class="default">34</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">), </span><span class="default">$font_color</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$title</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />}<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />try 'pie.php?foo=3&amp;bar=4&amp;baz=6'</span></code></div>
  </div>
 </div>
  <div class="note" id="61310">  <div class="votes">
    <div id="Vu61310">
    <a href="/manual/vote-note.php?id=61310&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61310">
    <a href="/manual/vote-note.php?id=61310&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61310" title="no votes...">
    0
    </div>
  </div>
  <a href="#61310" class="name">
  <strong class="user"><em>imazir at gmail dot com</em></strong></a><a class="genanchor" href="#61310"> &para;</a><div class="date" title="2006-01-31 02:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61310">
<div class="phpcode"><code><span class="html">The previous example does not work. Try those modifications and you will have the expected results :<br /><br />&lt;?<br />$Randomized = rand(1,20);<br />for($i=0;$i&lt;=$Randomized;$i++){$data[$i]=rand(2,20);};//full array with garbage.<br />$imgx='200';$imgy='200';//Set Image Size. ImageX,ImageY<br />$cx = '100';$cy ='50'; //Set Pie Postition. CenterX,CenterY<br />$sx = '200';$sy='100';$sz ='20';// Set Size-dimensions. SizeX,SizeY,SizeZ<br /><br />$data_sum = array_sum($data);<br />//convert to angles.<br />for($i=0;$i&lt;=$Randomized;$i++){<br />   $angle[$i] = (($data[$i] / $data_sum) * 360);<br />   $angle_sum[$i] = array_sum($angle);<br />};<br />$im  = imagecreate ($imgx,$imgy);<br />$background = imagecolorallocate($im, 255, 255, 255);<br />//Random colors.<br />for($i=0;$i&lt;=$Randomized;$i++){<br />   $r=rand(100,255);$g=rand(100,255);$b=rand(100,255);    <br />   $colors[$i] = imagecolorallocate($im,$r,$g,$b);<br />   $colord[$i] = imagecolorallocate($im,($r/2),($g/2),($b/2));<br />}<br />//3D effect.<br />for($z=1;$z&lt;=$sz;$z++){<br />   for($i=1;$i&lt;=$Randomized;$i++){<br />imagefilledarc($im,$cx,($cy+$sz)-$z,$sx,$sy,$angle_sum[$i-1]<br />,$angle_sum[$i],$colord[$i],IMG_ARC_PIE);<br />   };<br />};<br />//Top pie.<br />for($i=1;$i&lt;=$Randomized;$i++){<br />   imagefilledarc($im,$cx,$cy,$sx,$sy,$angle_sum[$i-1] ,$angle_sum[$i], $colors[$i], IMG_ARC_PIE);<br />};<br />//Output.<br />header('Content-type: image/png');<br />imagepng($im);<br />imagedestroy($im);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="54383">  <div class="votes">
    <div id="Vu54383">
    <a href="/manual/vote-note.php?id=54383&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54383">
    <a href="/manual/vote-note.php?id=54383&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54383" title="no votes...">
    0
    </div>
  </div>
  <a href="#54383" class="name">
  <strong class="user"><em>paulcharltonthomson at hotmail dot com</em></strong></a><a class="genanchor" href="#54383"> &para;</a><div class="date" title="2005-07-01 11:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54383">
<div class="phpcode"><code><span class="html">Here's a slightly better way to get the colours for the pie chart shaded wall as posted by double-zonk at wp dot pl<br /><br /><span class="default">&lt;?php<br /><br />$rgb0 </span><span class="keyword">= array (</span><span class="default">255</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">); <br /></span><span class="default">$rgb1 </span><span class="keyword">= array (</span><span class="default">255</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); <br /></span><span class="default">$rgb2 </span><span class="keyword">= array (</span><span class="default">153</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); <br /></span><span class="default">$rgb3 </span><span class="keyword">= array (</span><span class="default">51</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">102</span><span class="keyword">); <br /></span><span class="default">$rgb4 </span><span class="keyword">= array (</span><span class="default">51</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">, </span><span class="default">204</span><span class="keyword">); <br /></span><span class="default">$rgb5 </span><span class="keyword">= array (</span><span class="default">51</span><span class="keyword">, </span><span class="default">102</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">); <br /></span><span class="default">$rgb6 </span><span class="keyword">= array (</span><span class="default">128</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">); <br /></span><span class="default">$rgb7 </span><span class="keyword">= array (</span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">); <br /><br />for (</span><span class="default">$r </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">; ++</span><span class="default">$r</span><span class="keyword">)<br />    { <br />        if(${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">0</span><span class="keyword">] &lt; </span><span class="default">50</span><span class="keyword">) </span><span class="default">$shadowr </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; else </span><span class="default">$shadowr </span><span class="keyword">= ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">0</span><span class="keyword">] - </span><span class="default">50</span><span class="keyword">; <br />        if(${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">1</span><span class="keyword">] &lt; </span><span class="default">50</span><span class="keyword">) </span><span class="default">$shadowg </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; else </span><span class="default">$shadowg </span><span class="keyword">= ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">50</span><span class="keyword">; <br />        if(${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">2</span><span class="keyword">] &lt; </span><span class="default">50</span><span class="keyword">) </span><span class="default">$shadowb </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; else </span><span class="default">$shadowb </span><span class="keyword">= ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">}[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">50</span><span class="keyword">; <br />        ${</span><span class="string">"wall" </span><span class="keyword">. </span><span class="default">$r</span><span class="keyword">} = array (</span><span class="default">$shadowr</span><span class="keyword">, </span><span class="default">$shadowg</span><span class="keyword">, </span><span class="default">$shadowb</span><span class="keyword">); <br />    } <br /><br />for (</span><span class="default">$s </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$s </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">; ++</span><span class="default">$s</span><span class="keyword">)<br />    { <br />        </span><span class="default">$kolor</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">0</span><span class="keyword">], ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">1</span><span class="keyword">], ${</span><span class="string">"rgb" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">2</span><span class="keyword">]); <br />        </span><span class="default">$cien</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, ${</span><span class="string">"wall" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">0</span><span class="keyword">], ${</span><span class="string">"wall" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">1</span><span class="keyword">], ${</span><span class="string">"wall" </span><span class="keyword">. </span><span class="default">$s</span><span class="keyword">}[</span><span class="default">2</span><span class="keyword">]); <br />    } <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45955">  <div class="votes">
    <div id="Vu45955">
    <a href="/manual/vote-note.php?id=45955&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45955">
    <a href="/manual/vote-note.php?id=45955&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45955" title="no votes...">
    0
    </div>
  </div>
  <a href="#45955" class="name">
  <strong class="user"><em>rich at dicksonlife dot com</em></strong></a><a class="genanchor" href="#45955"> &para;</a><div class="date" title="2004-09-24 07:22"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45955">
<div class="phpcode"><code><span class="html">Even more efficiency:<br /><br />The original code snippet and the following suggestions are inefficient in that they rely on the overlying php to fill vertically using loops rather than taking advantage of the underlying drawing routines. Also, this is done by repeatedly drawing filled partial elipses and circular calculations are typically expensive (PHP may use tables, I'm not sure) The original code could be rewritten as <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Add the bottom layer.<br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">, </span><span class="default">$darknavy</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">, </span><span class="default">75 </span><span class="keyword">, </span><span class="default">$darkgray</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">60</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">, </span><span class="default">360 </span><span class="keyword">, </span><span class="default">$darkred</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br /><br /></span><span class="comment">//Now do the joining pieces.<br />//Note: Precompute cosines and sines for efficiency<br />  </span><span class="default">$c1</span><span class="keyword">=</span><span class="default">50</span><span class="keyword">*</span><span class="default">cos</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">);<br />  </span><span class="default">$s1</span><span class="keyword">=</span><span class="default">25</span><span class="keyword">*</span><span class="default">sin</span><span class="keyword">(</span><span class="default">45</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">);<br />  </span><span class="default">$c2</span><span class="keyword">=</span><span class="default">50</span><span class="keyword">*</span><span class="default">cos</span><span class="keyword">(</span><span class="default">75</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">);<br />  </span><span class="default">$s2</span><span class="keyword">=</span><span class="default">25</span><span class="keyword">*</span><span class="default">sin</span><span class="keyword">(</span><span class="default">75</span><span class="keyword">/</span><span class="default">180</span><span class="keyword">*</span><span class="default">M_PI</span><span class="keyword">);<br /><br />  </span><span class="default">$area1</span><span class="keyword">=array(</span><span class="default">100</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$s1</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">+</span><span class="default">$s1</span><span class="keyword">);<br />  </span><span class="default">$area2</span><span class="keyword">=array(</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$s1</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">+</span><span class="default">$s1</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">+</span><span class="default">$s2</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$s2</span><span class="keyword">);<br /></span><span class="comment">//Note that piece 3 goes round the corner. So we are only interested in the leftmost extent. You would need to do this programatically. Also, you do not need to make vertical parts for any segments completely at the back of the pie (in fact, not filledarcs either)<br />  </span><span class="default">$area3</span><span class="keyword">=array(</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$s2</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">+</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">+</span><span class="default">$s2</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">);<br /><br />  </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$area1 </span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">, </span><span class="default">$darknavy</span><span class="keyword">);<br />  </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$area2 </span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">, </span><span class="default">$darkgray</span><span class="keyword">);<br />  </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$area3 </span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">, </span><span class="default">$darkred</span><span class="keyword">);<br /><br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">, </span><span class="default">$navy</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">45</span><span class="keyword">, </span><span class="default">75 </span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />  </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">75</span><span class="keyword">, </span><span class="default">360 </span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Note that the polygons are perhaps slightly inefficient. If there was an imagefilledtriangle, this code would be simpler. Given how fundamental triangles are, perhaps for a future version?<br /><br />Rich</span></code></div>
  </div>
 </div>
  <div class="note" id="44194">  <div class="votes">
    <div id="Vu44194">
    <a href="/manual/vote-note.php?id=44194&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44194">
    <a href="/manual/vote-note.php?id=44194&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44194" title="50% like this...">
    0
    </div>
  </div>
  <a href="#44194" class="name">
  <strong class="user"><em>hans at lintoo dot dk</em></strong></a><a class="genanchor" href="#44194"> &para;</a><div class="date" title="2004-07-17 12:14"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44194">
<div class="phpcode"><code><span class="html">I found some bugs in my script.. and therefore I am posting the fixes:<br />Bugs:<br /><span class="default">&lt;?php<br />$drakcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">139</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">//Should be<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">139</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And then if you modify the code a little and, then make a image 200x125 then you won't be wasting space.<br />Changes:<br /><span class="default">&lt;?php<br />$im  </span><span class="keyword">= </span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">200</span><span class="keyword">, </span><span class="default">125</span><span class="keyword">);<br /></span><span class="comment">// AND<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">60</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">50</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />    </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">], </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />}<br /></span><span class="comment">// AND<br />       </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>you can see a online demo at: <a href="http://webstatistik.lintoo.dk/" rel="nofollow" target="_blank">http://webstatistik.lintoo.dk/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="44177">  <div class="votes">
    <div id="Vu44177">
    <a href="/manual/vote-note.php?id=44177&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44177">
    <a href="/manual/vote-note.php?id=44177&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44177" title="no votes...">
    0
    </div>
  </div>
  <a href="#44177" class="name">
  <strong class="user"><em>hans at lintoo dot dk</em></strong></a><a class="genanchor" href="#44177"> &para;</a><div class="date" title="2004-07-16 03:27"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44177">
<div class="phpcode"><code><span class="html">I modificed the code to make a 3d pie from data collected elsewhere.... in this case it was for a statistics page...<br /><br />when testing you can use:<br /><br />enjoy<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Making a image 200 x 200<br /></span><span class="default">$im  </span><span class="keyword">= </span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">);<br /><br /></span><span class="comment">//Setting background color<br /></span><span class="default">$background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">, </span><span class="default">226</span><span class="keyword">);<br /><br /></span><span class="comment">//Setting colors of elements<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">203</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">220</span><span class="keyword">, </span><span class="default">101</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">189</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">51</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">214</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">98</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">96</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">62</span><span class="keyword">, </span><span class="default">136</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">102</span><span class="keyword">, </span><span class="default">179</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">, </span><span class="default">195</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">115</span><span class="keyword">, </span><span class="default">106</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">178</span><span class="keyword">, </span><span class="default">210</span><span class="keyword">, </span><span class="default">52</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">137</span><span class="keyword">, </span><span class="default">91</span><span class="keyword">, </span><span class="default">74</span><span class="keyword">);<br /></span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">11</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">82</span><span class="keyword">, </span><span class="default">56</span><span class="keyword">, </span><span class="default">47</span><span class="keyword">);<br /><br /></span><span class="comment">//Setting the darker alt color to the main color<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">205</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">170</span><span class="keyword">, </span><span class="default">51</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$drakcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">139</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">164</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">77</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">48</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">46</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">86</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">52</span><span class="keyword">, </span><span class="default">129</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">95</span><span class="keyword">, </span><span class="default">145</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">65</span><span class="keyword">, </span><span class="default">56</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">, </span><span class="default">160</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">87</span><span class="keyword">, </span><span class="default">41</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">);<br /></span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">11</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//Getting the data from GET<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">11</span><span class="keyword">) {<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$_GET</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">//Getting ready<br /></span><span class="default">$datasum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$angle</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="comment">//Calc the start and end angle position of the elements<br /></span><span class="keyword">while (</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">11</span><span class="keyword">) {<br />    ++</span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$part</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] / </span><span class="default">$datasum</span><span class="keyword">;<br />    </span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] * </span><span class="default">360</span><span class="keyword">);<br />    </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br />//DEBUGGING - only for testing purposes<br />echo "&lt;pre&gt;";<br />print_r($part);<br />print_r($anglesum);<br />print_r($angle);<br />*/<br /><br />// make the 3D effect<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">$n </span><span class="keyword">&lt;= </span><span class="default">11</span><span class="keyword">) {<br />    ++</span><span class="default">$n</span><span class="keyword">;<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] != </span><span class="default">0</span><span class="keyword">) {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">110</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">100</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />            </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">], </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">$darkcolor</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />        }<br />    }<br />}<br /><br /></span><span class="comment">//make the 2d data that sits above the 3deffect<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">11</span><span class="keyword">) {<br />    ++</span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$angle</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">0</span><span class="keyword">) {<br />       </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">$anglesum</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$randcolor</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    }   <br />}<br /><br /></span><span class="comment">// flush image<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45489">  <div class="votes">
    <div id="Vu45489">
    <a href="/manual/vote-note.php?id=45489&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45489">
    <a href="/manual/vote-note.php?id=45489&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45489" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#45489" class="name">
  <strong class="user"><em>micha _a.t_ psytrance _d.o.t_ info</em></strong></a><a class="genanchor" href="#45489"> &para;</a><div class="date" title="2004-09-08 07:09"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45489">
<div class="phpcode"><code><span class="html">for nice colors and adapted shadows from amount of values i try:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">_errechne_gradzahlen</span><span class="keyword">( </span><span class="default">$werte </span><span class="keyword">) {         </span><span class="comment">/* calc degrees */    <br />    </span><span class="keyword">foreach( </span><span class="default">$werte </span><span class="keyword">as </span><span class="default">$wert </span><span class="keyword">) { </span><span class="default">$sum </span><span class="keyword">+= </span><span class="default">$wert</span><span class="keyword">; }<br />    foreach( </span><span class="default">$werte </span><span class="keyword">as </span><span class="default">$wert </span><span class="keyword">) { </span><span class="default">$gradzahlen</span><span class="keyword">[] = </span><span class="default">360 </span><span class="keyword">* ( </span><span class="default">$wert </span><span class="keyword">/ </span><span class="default">$sum </span><span class="keyword">); }<br />    return </span><span class="default">$gradzahlen</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">_randomcol </span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">) {<br />    return </span><span class="default">imagecolorallocate</span><span class="keyword">( </span><span class="default">$im</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">224</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">224</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">, </span><span class="default">224</span><span class="keyword">) );        <br />}<br /><br /></span><span class="default">$values </span><span class="keyword">= array( </span><span class="default">100</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">43</span><span class="keyword">, </span><span class="default">32 </span><span class="keyword">);    </span><span class="comment">/* the data to display ( real values ) */<br /></span><span class="default">$werte </span><span class="keyword">= </span><span class="default">_errechne_gradzahlen</span><span class="keyword">( </span><span class="default">$values </span><span class="keyword">);        </span><span class="comment">/* degrees-array */<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$half_width </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">);<br /></span><span class="default">$half_height </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br /><br />foreach( </span><span class="default">$werte </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$wert </span><span class="keyword">) {<br />    </span><span class="comment">/* get colors and shadows */<br />    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">_randomcol</span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">);                 <br />    </span><span class="default">$shadow </span><span class="keyword">= </span><span class="default">$color </span><span class="keyword">- </span><span class="default">20000</span><span class="keyword">;                 </span><span class="comment">// or brighter shadows take 10000<br />    </span><span class="default">$colors</span><span class="keyword">[] = </span><span class="default">$color</span><span class="keyword">;<br />    </span><span class="default">$shadows</span><span class="keyword">[] = </span><span class="default">$shadow</span><span class="keyword">;<br /></span><span class="comment">/* 3D effekt */<br />     </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= (</span><span class="default">$half_height </span><span class="keyword">+ </span><span class="default">10</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">$half_height</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">--) {<br />        </span><span class="default">imagefilledarc</span><span class="keyword">( <br />                    </span><span class="default">$im</span><span class="keyword">, <br />                    </span><span class="default">$half_width</span><span class="keyword">,  </span><span class="default">$i</span><span class="keyword">,         <br />                    </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$half_height</span><span class="keyword">,<br />                    </span><span class="default">$offset</span><span class="keyword">, (</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$wert</span><span class="keyword">),   </span><span class="comment">// from, to (degrees)<br />                    </span><span class="default">$shadows</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">);<br />    }<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$wert</span><span class="keyword">;<br />}<br /></span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />foreach( </span><span class="default">$werte </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$wert </span><span class="keyword">) {             </span><span class="comment">/* an now draw the top */<br />    </span><span class="default">imagefilledarc</span><span class="keyword">( <br />                </span><span class="default">$im</span><span class="keyword">, <br />                </span><span class="default">$half_width</span><span class="keyword">, </span><span class="default">$half_width</span><span class="keyword">, <br />                </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$half_height</span><span class="keyword">,           </span><span class="comment">// half sized<br />                </span><span class="default">$offset</span><span class="keyword">, (</span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$wert</span><span class="keyword">), <br />                </span><span class="default">$colors</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">IMG_ARC_PIE</span><span class="keyword">);<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$offset </span><span class="keyword">+ </span><span class="default">$wert</span><span class="keyword">;<br />}<br /></span><span class="default">header</span><span class="keyword">( </span><span class="string">"Content-type: image/png" </span><span class="keyword">);<br /></span><span class="default">imagepng </span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">( </span><span class="default">$im </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />sry for my crab english and the disordered code, i cut and 'translate' it from a class i wrote before.</span></code></div>
  </div>
 </div>
  <div class="note" id="44451">  <div class="votes">
    <div id="Vu44451">
    <a href="/manual/vote-note.php?id=44451&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44451">
    <a href="/manual/vote-note.php?id=44451&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44451" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#44451" class="name">
  <strong class="user"><em>poopie</em></strong></a><a class="genanchor" href="#44451"> &para;</a><div class="date" title="2004-08-05 09:08"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44451">
<div class="phpcode"><code><span class="html">The examples given so far for drawing a 3D looking pie chart are extremely inefficient and can give a huge performance hit to scripts that draw a lot of pies and in particular those that do offline processing on disk, rather than send a single pie chart to the browser (either way this modification saves you a lot of CPU cycles).<br /><br />Modify the portion of the code that creates the 3D effect to only draw the outline (with IMG_ARC_NOFILL) of the pie layers below the top filled pie:<br /><br />// make the 3D effect (modified for the original example)<br />for ($i = 60; $i &gt;= 50; $i--) {<br />   imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_NOFILL);<br />  imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_NOFILL);<br />  imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_NOFILL);<br />}<br /><br />Note the &gt;= on the for loop, which fills in a gap that is created without the =</span></code></div>
  </div>
 </div>
  <div class="note" id="50725">  <div class="votes">
    <div id="Vu50725">
    <a href="/manual/vote-note.php?id=50725&amp;page=function.imagefilledarc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50725">
    <a href="/manual/vote-note.php?id=50725&amp;page=function.imagefilledarc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50725" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#50725" class="name">
  <strong class="user"><em>t_therkelsen at hotmail dot com</em></strong></a><a class="genanchor" href="#50725"> &para;</a><div class="date" title="2005-03-08 01:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50725">
<div class="phpcode"><code><span class="html">Note that imageFilledArc() and imageArc() both take ints as degree measurements.  This is no problem if you're *only* using imageArc() and/or imageFilledArc().  However, if you're using calculated degrees and plan to superimpose other drawing elements (eg., you want to make vertical lines between the shadow 3D effect) you need to floor() your degrees before converting them to radians, otherwise you'll get precision errors.<br /><br />A small example illustrating the 'feature'...<br /><br /><span class="default">&lt;?php<br />$img </span><span class="keyword">= </span><span class="default">imageCreate</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">);<br /></span><span class="default">$back </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$front </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">$sd </span><span class="keyword">= </span><span class="default">45.5</span><span class="keyword">;<br /></span><span class="default">$ed </span><span class="keyword">= </span><span class="default">130.5</span><span class="keyword">;<br /><br /></span><span class="default">imageFilledArc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">$sd</span><span class="keyword">, </span><span class="default">$ed</span><span class="keyword">,<br />               </span><span class="default">$front</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">|</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">);<br /></span><span class="default">imageArc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">230</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">$sd</span><span class="keyword">, </span><span class="default">$ed</span><span class="keyword">, </span><span class="default">$front</span><span class="keyword">);<br /><br /></span><span class="default">imageLine</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">230</span><span class="keyword">,<br />          </span><span class="default">$front</span><span class="keyword">);<br /></span><span class="default">imageLine</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">230</span><span class="keyword">,<br />          </span><span class="default">$front</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And this is how it should be...<br /><br /><span class="default">&lt;?php<br />$img </span><span class="keyword">= </span><span class="default">imageCreate</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">);<br /></span><span class="default">$back </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$front </span><span class="keyword">= </span><span class="default">imageColorAllocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">$sd </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">45.5</span><span class="keyword">);<br /></span><span class="default">$ed </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">130.5</span><span class="keyword">);<br /><br /></span><span class="default">imageFilledArc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">$sd</span><span class="keyword">, </span><span class="default">$ed</span><span class="keyword">,<br />               </span><span class="default">$front</span><span class="keyword">, </span><span class="default">IMG_ARC_PIE</span><span class="keyword">|</span><span class="default">IMG_ARC_NOFILL</span><span class="keyword">|</span><span class="default">IMG_ARC_EDGED</span><span class="keyword">);<br /></span><span class="default">imageArc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">230</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">, </span><span class="default">$sd</span><span class="keyword">, </span><span class="default">$ed</span><span class="keyword">, </span><span class="default">$front</span><span class="keyword">);<br /><br /></span><span class="default">imageLine</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$sd</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">230</span><span class="keyword">,<br />          </span><span class="default">$front</span><span class="keyword">);<br /></span><span class="default">imageLine</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">,<br />          </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">200</span><span class="keyword">, </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$ed</span><span class="keyword">))*</span><span class="default">150</span><span class="keyword">+</span><span class="default">230</span><span class="keyword">,<br />          </span><span class="default">$front</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefilledarc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledarc.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
