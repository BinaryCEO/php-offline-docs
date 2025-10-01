<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagearc - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagearc.php">
 <link rel="shorturl" href="https://www.php.net/imagearc">
 <link rel="alternate" href="https://www.php.net/imagearc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imageantialias.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imageavif.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagearc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagearc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagearc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagearc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagearc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagearc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagearc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagearc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagearc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagearc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagearc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draws an arc" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagearc - Manual" />
<meta name="twitter:description" content="Draws an arc" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagearc - Manual" />
<meta itemprop="description" content="Draws an arc" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draws an arc" />

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
        <a href="function.imageavif.php">
          imageavif &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imageantialias.php">
          &laquo; imageantialias        </a>
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
            <option value='en/function.imagearc.php' selected="selected">English</option>
            <option value='de/function.imagearc.php'>German</option>
            <option value='es/function.imagearc.php'>Spanish</option>
            <option value='fr/function.imagearc.php'>French</option>
            <option value='it/function.imagearc.php'>Italian</option>
            <option value='ja/function.imagearc.php'>Japanese</option>
            <option value='pt_BR/function.imagearc.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagearc.php'>Russian</option>
            <option value='tr/function.imagearc.php'>Turkish</option>
            <option value='uk/function.imagearc.php'>Ukrainian</option>
            <option value='zh/function.imagearc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagearc" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagearc</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagearc</span> &mdash; <span class="dc-title">Draws an arc</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagearc-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagearc</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start_angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$end_angle</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>imagearc()</strong></span> draws an arc of circle centered at the given
   coordinates.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagearc-parameters">
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
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagearc-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagearc-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagearc-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2833">
    <p><strong>Example #1 Drawing a circle with <span class="function"><strong>imagearc()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// create a 200*200 image<br /></span><span style="color: #0000BB">$img </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// allocate some colors<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$red   </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$green </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$blue  </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">,   </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// draw the head<br /></span><span style="color: #0000BB">imagearc</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">,  </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">360</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// mouth<br /></span><span style="color: #0000BB">imagearc</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #0000BB">25</span><span style="color: #007700">, </span><span style="color: #0000BB">155</span><span style="color: #007700">, </span><span style="color: #0000BB">$red</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// left and then the right eye<br /></span><span style="color: #0000BB">imagearc</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,  </span><span style="color: #0000BB">60</span><span style="color: #007700">,  </span><span style="color: #0000BB">75</span><span style="color: #007700">,  </span><span style="color: #0000BB">50</span><span style="color: #007700">,  </span><span style="color: #0000BB">50</span><span style="color: #007700">,  </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">360</span><span style="color: #007700">, </span><span style="color: #0000BB">$green</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagearc</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">, </span><span style="color: #0000BB">140</span><span style="color: #007700">,  </span><span style="color: #0000BB">75</span><span style="color: #007700">,  </span><span style="color: #0000BB">50</span><span style="color: #007700">,  </span><span style="color: #0000BB">50</span><span style="color: #007700">,  </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">360</span><span style="color: #007700">, </span><span style="color: #0000BB">$blue</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// output image in the browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type: image/png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagearc.png" alt="Output of example : Drawing a circle with imagearc()" width="200" height="200" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagearc-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagefilledarc.php" class="function" rel="rdfs-seeAlso">imagefilledarc()</a> - Draw a partial arc and fill it</span></li>
   <li><span class="function"><a href="function.imageellipse.php" class="function" rel="rdfs-seeAlso">imageellipse()</a> - Draw an ellipse</span></li>
   <li><span class="function"><a href="function.imagefilledellipse.php" class="function" rel="rdfs-seeAlso">imagefilledellipse()</a> - Draw a filled ellipse</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagearc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagearc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagearc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagearc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="21460">  <div class="votes">
    <div id="Vu21460">
    <a href="/manual/vote-note.php?id=21460&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21460">
    <a href="/manual/vote-note.php?id=21460&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21460" title="80% like this...">
    3
    </div>
  </div>
  <a href="#21460" class="name">
  <strong class="user"><em>jinny at 263 dot net</em></strong></a><a class="genanchor" href="#21460"> &para;</a><div class="date" title="2002-05-13 10:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21460">
<div class="phpcode"><code><span class="html">imagesetstyle() sets the style to be used by all line drawing functions when drawing with the special color .<br /><br />Here goes a example of drawing a dashed-line circle.enjoy!<br /><br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br /><br /></span><span class="default">$b   </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$w   </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br /></span><span class="default">$style </span><span class="keyword">= array (</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">);<br /><br /></span><span class="default">imagesetstyle </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$style</span><span class="keyword">);<br /><br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">50</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">360</span><span class="keyword">,</span><span class="default">IMG_COLOR_STYLED</span><span class="keyword">);<br /><br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107109">  <div class="votes">
    <div id="Vu107109">
    <a href="/manual/vote-note.php?id=107109&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107109">
    <a href="/manual/vote-note.php?id=107109&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107109" title="71% like this...">
    3
    </div>
  </div>
  <a href="#107109" class="name">
  <strong class="user"><em>chandlerklebs at gmail dot com</em></strong></a><a class="genanchor" href="#107109"> &para;</a><div class="date" title="2012-01-07 10:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107109">
<div class="phpcode"><code><span class="html">This is an example script I wrote for myself to help me learn how to used the imagearc functions. Maybe if will also help others.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//example PHP script of imagearc functions<br /></span><span class="default">$image_width</span><span class="keyword">=</span><span class="default">360</span><span class="keyword">;</span><span class="default">$image_height</span><span class="keyword">=</span><span class="default">360</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$image_width</span><span class="keyword">,</span><span class="default">$image_height</span><span class="keyword">); </span><span class="comment">//make image variable<br /><br />//create a background color by making a filled rectangle<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$image_width</span><span class="keyword">,</span><span class="default">$image_height</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br /><br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">$image_width</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">- </span><span class="default">$image_width</span><span class="keyword">/</span><span class="default">32 </span><span class="keyword">; </span><span class="comment">//radius<br /></span><span class="default">$cx</span><span class="keyword">=</span><span class="default">$image_width</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$cy</span><span class="keyword">=</span><span class="default">$image_height</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br /><br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">,  </span><span class="default">0</span><span class="keyword">, </span><span class="default">360</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">); </span><span class="comment">//regular outlines arc<br /><br /></span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">1</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">1</span><span class="keyword">,  </span><span class="default">0</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">,</span><span class="default">IMG_ARC_CHORD</span><span class="keyword">); </span><span class="comment">//filled triangle with chord of circle<br /></span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">1</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">*</span><span class="default">1</span><span class="keyword">,  </span><span class="default">180</span><span class="keyword">, </span><span class="default">270</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">,</span><span class="default">IMG_ARC_PIE</span><span class="keyword">); </span><span class="comment">//pie slice<br /><br /></span><span class="default">$font_number</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">; </span><span class="comment">//can use built in fonts numbered 1 to 5<br /></span><span class="default">$string</span><span class="keyword">=</span><span class="string">"Hello world!"</span><span class="keyword">;<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font_number</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-(</span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_number</span><span class="keyword">)*</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">))/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">-</span><span class="default">120</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);</span><span class="comment">// output image in the browser<br /><br /></span><span class="default">$filename</span><span class="keyword">=</span><span class="string">"imagearc"</span><span class="keyword">;<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="string">"./frames/</span><span class="default">$filename</span><span class="string">.png"</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">); </span><span class="comment">//make highly compressed png<br /><br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38339">  <div class="votes">
    <div id="Vu38339">
    <a href="/manual/vote-note.php?id=38339&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38339">
    <a href="/manual/vote-note.php?id=38339&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38339" title="75% like this...">
    2
    </div>
  </div>
  <a href="#38339" class="name">
  <strong class="user"><em>eamon at hostelworld dot com</em></strong></a><a class="genanchor" href="#38339"> &para;</a><div class="date" title="2003-12-17 07:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38339">
<div class="phpcode"><code><span class="html">Right...<br />possibly the easiest way of drawing a filled circle:<br />Loop through the imagearc function incrementing the diameter by one pixel:<br />&lt;?<br /> // --- code fragment --- //<br /><br />for($i=1; $i&lt;$Diameter; $i++){<br />  imagearc($Image, $CenterX, $CenterY, $i, $i, $Start, $End, $Color);<br />}<br /><br />// --------------------- //<br /><br />?&gt;<br /><br />This works great for circles with diameters up to about 60 or 70 pixels wide. After that, you start to get pixle gaps.</span></code></div>
  </div>
 </div>
  <div class="note" id="122721">  <div class="votes">
    <div id="Vu122721">
    <a href="/manual/vote-note.php?id=122721&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122721">
    <a href="/manual/vote-note.php?id=122721&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122721" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122721" class="name">
  <strong class="user"><em>cleverphp</em></strong></a><a class="genanchor" href="#122721"> &para;</a><div class="date" title="2018-05-11 02:25"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122721">
<div class="phpcode"><code><span class="html">imagearc example works not well,as it lacks of this line<br />"$white = imagecolorallocate($img, 255, 255, 255);<br />    imagefill($img,0,0,$white);<br />    $black = imagecolorallocate($img, 0, 0, 0);<br />"</span></code></div>
  </div>
 </div>
  <div class="note" id="16678">  <div class="votes">
    <div id="Vu16678">
    <a href="/manual/vote-note.php?id=16678&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16678">
    <a href="/manual/vote-note.php?id=16678&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16678" title="58% like this...">
    2
    </div>
  </div>
  <a href="#16678" class="name">
  <strong class="user"><em>marc at resiteit dot com</em></strong></a><a class="genanchor" href="#16678"> &para;</a><div class="date" title="2001-11-08 01:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16678">
<div class="phpcode"><code><span class="html">Round cornered anti-aliased dynamically sized button.
<br />
<br />$w=40;
<br />$h=20;
<br />$im = ImageCreate($w,$h);
<br />$white=ImageColorAllocate($im,255,255,255);
<br />ImageFilledRectangle($im,0,0,$w,$h,$white);
<br />imagecolortransparent ($im, $white);
<br />ImageTTFText ($im, $h+ceil($h/3)+1, 0, -1, $h-1, $col1, "arialbd.ttf", "O");
<br />ImageTTFText ($im, $h+ceil($h/3)+1, 0, $w-$h, $h-1, $col1, "arialbd.ttf", "O");
<br />ImageTTFText ($im, $h+ceil($h/3)+1, 0, 1, $h-1, $col1, "arialbd.ttf", "O");
<br />ImageTTFText ($im, $h+ceil($h/3)+1, 0, $w-$h-2, $h-1, $col1, "arialbd.ttf", "O");
<br />$points=array(
<br />    1,round($h/2), 
<br />    round($h/4),$h-round($h/4), 
<br />    round($h/2),$h, 
<br />    $w-(round($h/2)),$h, 
<br />    $w-(round($h/4)),$h-round($h/4), 
<br />    $w-2,round($h/2), 
<br />    $w-round($h/4),round($h/4), 
<br />    $w-round($h/2),0, 
<br />    round($h/2),0, 
<br />    round($h/4),round($h/4)
<br />);
<br />imagefilledpolygon ($im, $points, 10, $col1);
<br />
<br />header("content-type: image/gif");
<br />header("Content-Disposition: filename=name.gif");
<br />ImageGif($im);
<br />ImageDestroy($im);</span></code></div>
  </div>
 </div>
  <div class="note" id="38538">  <div class="votes">
    <div id="Vu38538">
    <a href="/manual/vote-note.php?id=38538&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38538">
    <a href="/manual/vote-note.php?id=38538&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38538" title="66% like this...">
    1
    </div>
  </div>
  <a href="#38538" class="name">
  <strong class="user"><em>jerryscript at aol dot com</em></strong></a><a class="genanchor" href="#38538"> &para;</a><div class="date" title="2003-12-26 02:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38538">
<div class="phpcode"><code><span class="html">[note-Apache/1.3.29 (Win32) PHP/4.3.4]<br /><br />The imagearc (and imageellipse) functions do not accept line thicknesses when drawn from 0 to 360 degrees.<br /><br />Drawing from 0 to 359 and again from 359 to 360 does create an ellipse with the current line thickness.<br /><br />Jerry</span></code></div>
  </div>
 </div>
  <div class="note" id="15229">  <div class="votes">
    <div id="Vu15229">
    <a href="/manual/vote-note.php?id=15229&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15229">
    <a href="/manual/vote-note.php?id=15229&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15229" title="66% like this...">
    1
    </div>
  </div>
  <a href="#15229" class="name">
  <strong class="user"><em>foripepe at yahoo dot com</em></strong></a><a class="genanchor" href="#15229"> &para;</a><div class="date" title="2001-09-02 09:56"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15229">
<div class="phpcode"><code><span class="html">To fill an arc (DiameterX != DiameterY):
<br />
<br />&lt;?
<br />function imagefilledarc($Image, $CenterX, $CenterY, $DiameterX, $DiameterY, $Start, $End, $Color) {
<br />    // To draw the arc
<br />    imagearc($Image, $CenterX, $CenterY, $DiameterX, $DiameterY, $Start, $End, $Color);
<br />    // To close the arc with 2 lines between the center and the 2 limits of the arc
<br />    $x = $CenterX + (cos(deg2rad($Start))*($DiameterX/2));
<br />    $y = $CenterY + (sin(deg2rad($Start))*($DiameterY/2));
<br />    imageline($Image, $x, $y, $CenterX, $CenterY, $Color);
<br />    $x = $CenterX + (cos(deg2rad($End))*($DiameterX/2));
<br />    $y = $CenterY + (sin(deg2rad($End))*($DiameterY/2));
<br />    imageline($Image, $x, $y, $CenterX, $CenterY, $Color);
<br />    // To fill the arc, the starting point is a point in the middle of the closed space
<br />    $x = $CenterX + (cos(deg2rad(($Start+$End)/2))*($DiameterX/4));
<br />    $y = $CenterY + (sin(deg2rad(($Start+$End)/2))*($DiameterY/4));
<br />    imagefilltoborder($Image, $x, $y, $Color, $Color);
<br />}
<br />?&gt;
<br />
<br />To close the arc with 2 lines (DiameterX != DiameterY):
<br />
<br />&lt;?
<br />function imagenofilledarc($Image, $CenterX, $CenterY, $DiameterX, $DiameterY, $Start, $End, $Color) {
<br />    // To draw the arc
<br />    imagearc($Image, $CenterX, $CenterY, $DiameterX, $DiameterY, $Start, $End, $Color);
<br />    // To close the arc with 2 lines between the center and the 2 limits of the arc
<br />    $x = $CenterX + (cos(deg2rad($Start))*($DiameterX/2));
<br />    $y = $CenterY + (sin(deg2rad($Start))*($DiameterY/2));
<br />    imageline($Image, $x, $y, $CenterX, $CenterY, $Color);
<br />    $x = $CenterX + (cos(deg2rad($End))*($DiameterX/2));
<br />    $y = $CenterY + (sin(deg2rad($End))*($DiameterY/2));
<br />    imageline($Image, $x, $y, $CenterX, $CenterY, $Color);
<br />}
<br />?&gt;
<br />
<br />An example:
<br />&lt;?
<br />    $destImage = imagecreate( 216, 152 );
<br />    $c0 = imagecolorallocate( $destImage, 0, 255, 255 );
<br />    $c1 = imagecolorallocate( $destImage, 0, 0, 0 );
<br />    $c2 = imagecolorallocate( $destImage, 255, 0, 0 );
<br />    ImageFilledRectangle ( $destImage, 0, 0, 216, 152, $c0 );
<br />    imagefilledarc( $destImage, 108, 76, 180, 80, 0, 130, $c1 );
<br />    imagenofilledarc( $destImage, 108, 76, 180, 80, 0, 130, $c2 );
<br />    header("content-type: image/PNG");
<br />    ImagePNG( $destImage );
<br />    ImageDestroy( $destImage );
<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="2872">  <div class="votes">
    <div id="Vu2872">
    <a href="/manual/vote-note.php?id=2872&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2872">
    <a href="/manual/vote-note.php?id=2872&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2872" title="66% like this...">
    1
    </div>
  </div>
  <a href="#2872" class="name">
  <strong class="user"><em>travis at duluth dot com</em></strong></a><a class="genanchor" href="#2872"> &para;</a><div class="date" title="1999-12-22 06:36"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2872">
<div class="phpcode"><code><span class="html">The wierd thing is that the first two integers tell where to place the "circle".
<br />So for example I first create the "pallet" to place the circle on.
<br />$image = imagecreate(500, 500);  
<br />(this makes a huge 500x500 gif :) )
<br />$colorBody = imagecolorallocate($image, 0, 0, 0);
<br />(make the default color of the "pallet" black
<br />$circleColor = imagecolorallocate($image, 255, 0, 255);
<br />(going to make the circle an ugly pink color)
<br />imagearc($image, 250, 250, 300, 300, 0, 360, $circleColor);
<br />Places the image in the center (250,250) and the circle is 300 pixels in diameter.
<br />
<br />Hope this helps.
<br /> 
<br />Travis Kent Beste</span></code></div>
  </div>
 </div>
  <div class="note" id="110224">  <div class="votes">
    <div id="Vu110224">
    <a href="/manual/vote-note.php?id=110224&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110224">
    <a href="/manual/vote-note.php?id=110224&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110224" title="60% like this...">
    1
    </div>
  </div>
  <a href="#110224" class="name">
  <strong class="user"><em>joe dot tym at gmail dot com</em></strong></a><a class="genanchor" href="#110224"> &para;</a><div class="date" title="2012-10-02 05:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110224">
<div class="phpcode"><code><span class="html">I didn't have much luck with the other two functions, one of them makes circles that look like they've been printed on a dot-matrix printer. This simple function builds a border out of circles, seems to work nicely.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">imagearcunfilled</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">,</span><span class="default">$border_thickness</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) {
<br />
<br />        </span><span class="default">imagesetthickness</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />
<br />        </span><span class="default">$x_radius </span><span class="keyword">= </span><span class="default">$width </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />        </span><span class="default">$y_radius </span><span class="keyword">= </span><span class="default">$height </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">;
<br />
<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">360</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />                if (</span><span class="default">TRUE</span><span class="keyword">) {
<br />                        </span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">cos</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) * </span><span class="default">$x_radius</span><span class="keyword">;
<br />                        </span><span class="default">$y2 </span><span class="keyword">= </span><span class="default">$y </span><span class="keyword">+ </span><span class="default">sin</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) * </span><span class="default">$y_radius</span><span class="keyword">;
<br />                        </span><span class="default">imagefilledarc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$y2</span><span class="keyword">,</span><span class="default">$border_thickness</span><span class="keyword">,</span><span class="default">$border_thickness</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">360</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">,</span><span class="default">IMG_ARC_PIE</span><span class="keyword">);
<br />                }
<br />        }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59697">  <div class="votes">
    <div id="Vu59697">
    <a href="/manual/vote-note.php?id=59697&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59697">
    <a href="/manual/vote-note.php?id=59697&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59697" title="60% like this...">
    1
    </div>
  </div>
  <a href="#59697" class="name">
  <strong class="user"><em>mojiro at awmn dot net</em></strong></a><a class="genanchor" href="#59697"> &para;</a><div class="date" title="2005-12-13 12:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59697">
<div class="phpcode"><code><span class="html">A previous for the Rotated (Filled)Ellipse note from(nojer2 at yahoo dot com, 02-Apr-2001 12:06) has a mistake, at the second arc. Replace them with the following listing.<br /><br />if ($filled) {<br />    triangle($im, $cx, $cy, $cx+$px, $cy+$py, $cx+$x, $cy+$y, $colour);<br />    triangle($im, $cx, $cy, $cx-$px, $cy-$py, $cx-$x, $cy-$y, $colour);<br />} else {<br />    imageline($im, $cx+$px, $cy+$py, $cx+$x, $cy+$y, $colour);<br />    imageline($im, $cx-$px, $cy-$py, $cx-$x, $cy-$y, $colour);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="28773">  <div class="votes">
    <div id="Vu28773">
    <a href="/manual/vote-note.php?id=28773&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28773">
    <a href="/manual/vote-note.php?id=28773&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28773" title="60% like this...">
    1
    </div>
  </div>
  <a href="#28773" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#28773"> &para;</a><div class="date" title="2003-01-23 08:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28773">
<div class="phpcode"><code><span class="html">Please note that in order to draw a complete circle or ellipse (without using the imageellipse) you mustn't use 0? for both s and e. If you do this you will get, umm, nothing. Instead set s to 0? and e to 360? to get a complete circle or ellipse.</span></code></div>
  </div>
 </div>
  <div class="note" id="12250">  <div class="votes">
    <div id="Vu12250">
    <a href="/manual/vote-note.php?id=12250&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12250">
    <a href="/manual/vote-note.php?id=12250&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12250" title="60% like this...">
    1
    </div>
  </div>
  <a href="#12250" class="name">
  <strong class="user"><em>nojer2 at yahoo dot com</em></strong></a><a class="genanchor" href="#12250"> &para;</a><div class="date" title="2001-04-01 02:06"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12250">
<div class="phpcode"><code><span class="html">Here's the function to draw rotated ellipses again. This time I've optimised it a bit, fixed the no-fill bug, and used a 'squishratio' rather than a 'radiusmodifier', to make the curves perfect, so ignore my previous version.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rotatedellipse</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$rotateangle</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">, </span><span class="default">$filled</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {
<br />   </span><span class="default">$step</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;
<br />   </span><span class="default">$cosangle</span><span class="keyword">=</span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$rotateangle</span><span class="keyword">));
<br />   </span><span class="default">$sinangle</span><span class="keyword">=</span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$rotateangle</span><span class="keyword">));
<br />
<br />   </span><span class="default">$squishratio </span><span class="keyword">= </span><span class="default">$height</span><span class="keyword">/</span><span class="default">$width</span><span class="keyword">;
<br />   </span><span class="default">$nopreviouspoint </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />   for (</span><span class="default">$angle</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$angle</span><span class="keyword">&lt;=(</span><span class="default">180</span><span class="keyword">+</span><span class="default">$step</span><span class="keyword">); </span><span class="default">$angle</span><span class="keyword">+=</span><span class="default">$step</span><span class="keyword">) {
<br />       
<br />      </span><span class="default">$ox </span><span class="keyword">= (</span><span class="default">$width </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">)));
<br />      </span><span class="default">$oy </span><span class="keyword">= (</span><span class="default">$width </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">))) * </span><span class="default">$squishratio</span><span class="keyword">;
<br />
<br />      </span><span class="default">$x </span><span class="keyword">=  + ((</span><span class="default">$ox </span><span class="keyword">* </span><span class="default">$cosangle</span><span class="keyword">) - (</span><span class="default">$oy </span><span class="keyword">* </span><span class="default">$sinangle</span><span class="keyword">));
<br />      </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$centrey </span><span class="keyword">+ ((</span><span class="default">$ox </span><span class="keyword">* </span><span class="default">$sinangle</span><span class="keyword">) + (</span><span class="default">$oy </span><span class="keyword">* </span><span class="default">$cosangle</span><span class="keyword">));
<br />  
<br />      if (</span><span class="default">$nopreviouspoint</span><span class="keyword">) {
<br />        </span><span class="default">$px</span><span class="keyword">=</span><span class="default">$x</span><span class="keyword">;
<br />        </span><span class="default">$py</span><span class="keyword">=</span><span class="default">$y</span><span class="keyword">;
<br />        </span><span class="default">$nopreviouspoint</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />      }
<br />
<br />      if (</span><span class="default">$filled</span><span class="keyword">) {
<br />         </span><span class="default">triangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">);
<br />         </span><span class="default">triangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">);
<br />      } else {
<br />         </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">); 
<br />         </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">); 
<br />      }
<br />      </span><span class="default">$px</span><span class="keyword">=</span><span class="default">$x</span><span class="keyword">;
<br />      </span><span class="default">$py</span><span class="keyword">=</span><span class="default">$y</span><span class="keyword">;
<br />   } 
<br />}
<br />
<br />function </span><span class="default">triangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$y1</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$y2</span><span class="keyword">, </span><span class="default">$x3</span><span class="keyword">,</span><span class="default">$y3</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">) {
<br />   </span><span class="default">$coords </span><span class="keyword">= array(</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$y1</span><span class="keyword">, </span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$y2</span><span class="keyword">, </span><span class="default">$x3</span><span class="keyword">,</span><span class="default">$y3</span><span class="keyword">);
<br />   </span><span class="default">imagefilledpolygon</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$coords</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">); 
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="7832">  <div class="votes">
    <div id="Vu7832">
    <a href="/manual/vote-note.php?id=7832&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7832">
    <a href="/manual/vote-note.php?id=7832&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7832" title="60% like this...">
    1
    </div>
  </div>
  <a href="#7832" class="name">
  <strong class="user"><em>timothyhouck at yahoo dot com</em></strong></a><a class="genanchor" href="#7832"> &para;</a><div class="date" title="2000-08-16 03:58"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7832">
<div class="phpcode"><code><span class="html">To do filled arcs, try something like this:
<br />
<br /><span class="default">&lt;?php
<br />$diameter </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />while(</span><span class="default">$diameter </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {
<br />  </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$start </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />  </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$diameter</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />  </span><span class="default">$diameter</span><span class="keyword">--;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />...well you get the point.  It's a kludge, and *very* slow, but it's free.</span></code></div>
  </div>
 </div>
  <div class="note" id="12251">  <div class="votes">
    <div id="Vu12251">
    <a href="/manual/vote-note.php?id=12251&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12251">
    <a href="/manual/vote-note.php?id=12251&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12251" title="57% like this...">
    1
    </div>
  </div>
  <a href="#12251" class="name">
  <strong class="user"><em>nojer2 at yahoo dot com</em></strong></a><a class="genanchor" href="#12251"> &para;</a><div class="date" title="2001-04-01 02:18"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12251">
<div class="phpcode"><code><span class="html">Here's a dashed circle function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dashedcircle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$radius</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">, </span><span class="default">$dashsize</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">) {
<br />
<br />   </span><span class="default">$dash</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />   for (</span><span class="default">$angle</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$angle</span><span class="keyword">&lt;=(</span><span class="default">180</span><span class="keyword">+</span><span class="default">$dashsize</span><span class="keyword">); </span><span class="default">$angle</span><span class="keyword">+=</span><span class="default">$dashsize</span><span class="keyword">) {
<br />      </span><span class="default">$x </span><span class="keyword">= (</span><span class="default">$radius </span><span class="keyword">* </span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">)));
<br />      </span><span class="default">$y </span><span class="keyword">= (</span><span class="default">$radius </span><span class="keyword">* </span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$angle</span><span class="keyword">)));
<br />
<br />      if (</span><span class="default">$dash</span><span class="keyword">) {
<br />         </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">+</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">+</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">); 
<br />         </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$px</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$py</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">-</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">); 
<br />      }
<br />      </span><span class="default">$dash</span><span class="keyword">=!</span><span class="default">$dash</span><span class="keyword">;
<br />      </span><span class="default">$px</span><span class="keyword">=</span><span class="default">$x</span><span class="keyword">;
<br />      </span><span class="default">$py</span><span class="keyword">=</span><span class="default">$y</span><span class="keyword">;
<br />   } 
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95097">  <div class="votes">
    <div id="Vu95097">
    <a href="/manual/vote-note.php?id=95097&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95097">
    <a href="/manual/vote-note.php?id=95097&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95097" title="54% like this...">
    1
    </div>
  </div>
  <a href="#95097" class="name">
  <strong class="user"><em>anton dot vandeghinste at telenet dot be</em></strong></a><a class="genanchor" href="#95097"> &para;</a><div class="date" title="2009-12-13 07:27"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95097">
<div class="phpcode"><code><span class="html">I needed an arc with a thick border and i didn't like to use 359.9 as end angle so i made a function that works pretty well:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagearcthick</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$thick </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$thick </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)<br />    {<br />        return </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    }<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;(</span><span class="default">$thick</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">-(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">5</span><span class="keyword">), </span><span class="default">$h</span><span class="keyword">-(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">5</span><span class="keyword">),</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />        </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">5</span><span class="keyword">), </span><span class="default">$h</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">5</span><span class="keyword">), </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112636">  <div class="votes">
    <div id="Vu112636">
    <a href="/manual/vote-note.php?id=112636&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112636">
    <a href="/manual/vote-note.php?id=112636&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112636" title="53% like this...">
    1
    </div>
  </div>
  <a href="#112636" class="name">
  <strong class="user"><em>lucas dot delmas at live dot fr</em></strong></a><a class="genanchor" href="#112636"> &para;</a><div class="date" title="2013-07-07 07:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112636">
<div class="phpcode"><code><span class="html">The imagearc function has a precision of one degree. The function truncates the $start and $end values to the inferior degree.<br /><br />For example if the starting angle you calculated is : -178.62450462172°<br />and the ending angle is : -152.78056427917°<br />imagearc will draw a curve from -178° to -152°.<br /><br />If you need accurate curves drawing, you need to use a loop to draw little step-by-step lines. By creating a large number of short enough lines, you will create the impression of a curve with accuracy.</span></code></div>
  </div>
 </div>
  <div class="note" id="95928">  <div class="votes">
    <div id="Vu95928">
    <a href="/manual/vote-note.php?id=95928&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95928">
    <a href="/manual/vote-note.php?id=95928&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95928" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95928" class="name">
  <strong class="user"><em>ajim1417 at gmail dot com</em></strong></a><a class="genanchor" href="#95928"> &para;</a><div class="date" title="2010-01-28 07:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95928">
<div class="phpcode"><code><span class="html">I wrote a simple function that can draws an arc counter-clockwisekly. Here it is :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagearcCC</span><span class="keyword">(&amp;</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">) {<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">360 </span><span class="keyword">- </span><span class="default">$e</span><span class="keyword">;<br /></span><span class="default">$end </span><span class="keyword">= </span><span class="default">360 </span><span class="keyword">- </span><span class="default">$s</span><span class="keyword">;<br />return </span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The params of this function is exactly the same as the usual imagearc function.</span></code></div>
  </div>
 </div>
  <div class="note" id="34712">  <div class="votes">
    <div id="Vu34712">
    <a href="/manual/vote-note.php?id=34712&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34712">
    <a href="/manual/vote-note.php?id=34712&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34712" title="50% like this...">
    0
    </div>
  </div>
  <a href="#34712" class="name">
  <strong class="user"><em>logang at deltatee dot com</em></strong></a><a class="genanchor" href="#34712"> &para;</a><div class="date" title="2003-08-04 08:19"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34712">
<div class="phpcode"><code><span class="html">Heres a function to make a curve between two points... This will be a downward curve but it wouldn't be hard to make a similar function to make an upward curve. The first point has to be to the left of the second point ($x1 &lt; $x2), and height is actually backwards. The larger height is the less of a crest the curve has. I imagine with a few modifications this functions could make upward curves as well.<br /><br />function ImageCurveDown ($image, $x1, $y1, $x2, $y2, $height, $color) {<br />    $presicion = 1;<br /><br />    for ($left = ($x1-$x2); $left &lt; 0; $left++){<br />        if ($y1 &lt; $y2) {<br />            $cy = $y2 + $height;<br />            $cx = $x1 - $left;<br />        } else {<br />            $cy = $y1 + $height;<br />            $cx = $x2 + $left;<br />        }<br />        $nx1 = abs($x1 - $cx);<br />        $ny1 = abs($y1 - $cy);<br />        $nx2 = abs($x2 - $cx);<br />        $ny2 = abs($y2 - $cy);<br /><br />        if ($y1 &lt; $y2) {<br />            if ($nx2 == 0 || $ny1 == 0) continue;<br />            $angle1 = atan($height/$nx2);<br />            $A1 = $nx2/cos ($angle1);<br />            $B1 = $ny2/sin ($angle1);<br />            $angle2 = pi()/2 +atan($left/$ny1);<br />            $A2 = $nx1/cos ($angle2);<br />            $B2 = $ny1/sin ($angle2);<br />        } else {<br />            if ($ny2 == 0 || $nx1 == 0) continue;<br />            $angle1 = atan($ny2/$nx2);<br />            $A1 = abs($nx2/cos ($angle1));<br />            $B1 = abs($ny2/sin ($angle1));<br />            $angle2 = atan($height/$nx1);<br />            $A2 = abs ($nx1/cos ($angle2));<br />            $B2 = abs($ny1/sin ($angle2));<br />        }<br /><br />        if (abs($A1 - $A2) &lt; $presicion &amp;&amp; abs ($B1 - $B2) &lt; $presicion) {<br />            ImageArc($image, $cx, $cy, $A1*2, $B1*2, 180+rad2deg($angle2), 360-rad2deg($angle1), $color);<br />        }<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="17231">  <div class="votes">
    <div id="Vu17231">
    <a href="/manual/vote-note.php?id=17231&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17231">
    <a href="/manual/vote-note.php?id=17231&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17231" title="50% like this...">
    0
    </div>
  </div>
  <a href="#17231" class="name">
  <strong class="user"><em>arve at skogvold dot as</em></strong></a><a class="genanchor" href="#17231"> &para;</a><div class="date" title="2001-11-30 01:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17231">
<div class="phpcode"><code><span class="html">I found a better way for drawing a pie chart:
<br />
<br />header ("Content-type: image/png");
<br />$diameter = 100;
<br />$radius = $diameter / 2;
<br />$centerX = $radius;
<br />$centerY = $radius;
<br />
<br />$im = @ImageCreate ($diameter, $diameter)
<br />    or die ("Cannot Initialize new GD image stream");
<br />
<br />$background = ImageColorAllocate ($im, 0, 0, 0);
<br />$red = ImageColorAllocate ($im, 176, 0, 0);
<br />
<br />function fill_arc($start, $end, $color) {
<br />    global $diameter, $centerX, $centerY, $im, $radius;
<br />    imagearc($im, $centerX, $centerY, $diameter, $diameter, $start, $end, $color); 
<br />    imageline($im, $centerX, $centerY, $centerX + cos(deg2rad($start)) * $radius, $centerY + sin(deg2rad($start)) * $radius, $color);
<br />    imageline($im, $centerX, $centerY, $centerX + cos(deg2rad($end)) * $radius, $centerY + sin(deg2rad($end)) * $radius, $color);
<br />    imagefill ($im,$centerX + $radius * 0.5 *cos(deg2rad($start+($end-$start)/2)), $centerY + $radius * 0.5 * sin(deg2rad($start+($end-$start)/2)), $color);
<br />    }
<br />
<br />
<br />fill_arc(0,30,$red);
<br />// Will make a red filled arc, starting at 0 degrees, ending at 30 degrees
<br />
<br />ImagePng ($im);</span></code></div>
  </div>
 </div>
  <div class="note" id="8566">  <div class="votes">
    <div id="Vu8566">
    <a href="/manual/vote-note.php?id=8566&amp;page=function.imagearc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8566">
    <a href="/manual/vote-note.php?id=8566&amp;page=function.imagearc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8566" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#8566" class="name">
  <strong class="user"><em>cbriou at orange-art dot fr</em></strong></a><a class="genanchor" href="#8566"> &para;</a><div class="date" title="2000-09-17 07:03"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8566">
<div class="phpcode"><code><span class="html">There is another way to fill an arc :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// To draw the arc
<br /></span><span class="default">$Color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">, </span><span class="default">$Red</span><span class="keyword">, </span><span class="default">$Green</span><span class="keyword">, </span><span class="default">$Blue</span><span class="keyword">);
<br /></span><span class="default">imagearc</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">, </span><span class="default">$CenterX</span><span class="keyword">, </span><span class="default">$CenterY</span><span class="keyword">, </span><span class="default">$Diameter</span><span class="keyword">, </span><span class="default">$Diameter</span><span class="keyword">, </span><span class="default">$Start</span><span class="keyword">, </span><span class="default">$End</span><span class="keyword">, </span><span class="default">$Color</span><span class="keyword">);
<br /></span><span class="comment">// To close the arc with 2 lines between the center and the 2 limits of the arc
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$CenterX </span><span class="keyword">+ (</span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$Start</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">$CenterY </span><span class="keyword">+ (</span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$Start</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$CenterX</span><span class="keyword">, </span><span class="default">$CenterY</span><span class="keyword">, </span><span class="default">$Color</span><span class="keyword">);
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$CenterX </span><span class="keyword">+ (</span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$End</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">$CenterY </span><span class="keyword">+ (</span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$End</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br /></span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$CenterX</span><span class="keyword">, </span><span class="default">$CenterY</span><span class="keyword">, </span><span class="default">$Color</span><span class="keyword">);
<br /></span><span class="comment">// To fill the arc, the starting point is a point in the middle of the closed space
<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$CenterX </span><span class="keyword">+ (</span><span class="default">cos</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$Start</span><span class="keyword">+</span><span class="default">$End</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">));
<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">$CenterY </span><span class="keyword">+ (</span><span class="default">sin</span><span class="keyword">(</span><span class="default">deg2rad</span><span class="keyword">((</span><span class="default">$Start</span><span class="keyword">+</span><span class="default">$End</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">))*(</span><span class="default">$Diameter</span><span class="keyword">/</span><span class="default">4</span><span class="keyword">));
<br /></span><span class="default">imagefilltoborder</span><span class="keyword">(</span><span class="default">$Image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$Color</span><span class="keyword">, </span><span class="default">$Color</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagearc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagearc.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
