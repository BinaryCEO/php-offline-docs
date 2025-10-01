<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefilledellipse - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefilledellipse.php">
 <link rel="shorturl" href="https://www.php.net/imagefilledellipse">
 <link rel="alternate" href="https://www.php.net/imagefilledellipse" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagefilledarc.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagefilledpolygon.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefilledellipse.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefilledellipse.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefilledellipse.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefilledellipse.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefilledellipse.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefilledellipse.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefilledellipse.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefilledellipse.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefilledellipse.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefilledellipse.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefilledellipse.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draw a filled ellipse" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefilledellipse - Manual" />
<meta name="twitter:description" content="Draw a filled ellipse" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefilledellipse - Manual" />
<meta itemprop="description" content="Draw a filled ellipse" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draw a filled ellipse" />

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
        <a href="function.imagefilledpolygon.php">
          imagefilledpolygon &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagefilledarc.php">
          &laquo; imagefilledarc        </a>
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
            <option value='en/function.imagefilledellipse.php' selected="selected">English</option>
            <option value='de/function.imagefilledellipse.php'>German</option>
            <option value='es/function.imagefilledellipse.php'>Spanish</option>
            <option value='fr/function.imagefilledellipse.php'>French</option>
            <option value='it/function.imagefilledellipse.php'>Italian</option>
            <option value='ja/function.imagefilledellipse.php'>Japanese</option>
            <option value='pt_BR/function.imagefilledellipse.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefilledellipse.php'>Russian</option>
            <option value='tr/function.imagefilledellipse.php'>Turkish</option>
            <option value='uk/function.imagefilledellipse.php'>Ukrainian</option>
            <option value='zh/function.imagefilledellipse.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefilledellipse" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefilledellipse</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefilledellipse</span> &mdash; <span class="dc-title">Draw a filled ellipse</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefilledellipse-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefilledellipse</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$center_y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$width</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$height</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Draws an ellipse centered at the specified coordinate on the given
   <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefilledellipse-parameters">
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
       The ellipse width.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       The ellipse height.
      </p>
     </dd>
    
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       The fill color. A color identifier created with <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagefilledellipse-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefilledellipse-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagefilledellipse-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2885">
    <p><strong>Example #1 <span class="function"><strong>imagefilledellipse()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// create a blank image<br /></span><span style="color: #0000BB">$image </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">400</span><span style="color: #007700">, </span><span style="color: #0000BB">300</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// fill the background color<br /></span><span style="color: #0000BB">$bg </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// choose a color for the ellipse<br /></span><span style="color: #0000BB">$col_ellipse </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// draw the white ellipse<br /></span><span style="color: #0000BB">imagefilledellipse</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #0000BB">300</span><span style="color: #007700">, </span><span style="color: #0000BB">200</span><span style="color: #007700">, </span><span style="color: #0000BB">$col_ellipse</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// output the picture<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type: image/png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagefilledellipse.png" alt="Output of example : imagefilledellipse()" width="400" height="300" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.imagefilledellipse-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>imagefilledellipse()</strong></span> ignores <span class="function"><a href="function.imagesetthickness.php" class="function">imagesetthickness()</a></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagefilledellipse-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imageellipse.php" class="function" rel="rdfs-seeAlso">imageellipse()</a> - Draw an ellipse</span></li>
   <li><span class="function"><a href="function.imagefilledarc.php" class="function" rel="rdfs-seeAlso">imagefilledarc()</a> - Draw a partial arc and fill it</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefilledellipse.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefilledellipse%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefilledellipse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledellipse.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="49813">  <div class="votes">
    <div id="Vu49813">
    <a href="/manual/vote-note.php?id=49813&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49813">
    <a href="/manual/vote-note.php?id=49813&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49813" title="100% like this...">
    4
    </div>
  </div>
  <a href="#49813" class="name">
  <strong class="user"><em>richard at mf2fm dot co dot uk</em></strong></a><a class="genanchor" href="#49813"> &para;</a><div class="date" title="2005-02-09 02:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49813">
<div class="phpcode"><code><span class="html">Here is a piece of code using imagefilledellipse which creates a simulation of the current phase of the moon...<br /><br />Usage is &lt;img src="moon.php?size=100"&gt; which produces an image 100px by 100px wide.  If size is left out, the default is 24px by 24px.<br /><br /><span class="default">&lt;?php<br /><br />$mps</span><span class="keyword">=</span><span class="default">2551442.8</span><span class="keyword">; </span><span class="comment">// moon phase in seconds (29 days, 12 hours, 44 mins, 2.8 secs)<br /></span><span class="default">$position</span><span class="keyword">=</span><span class="default">time</span><span class="keyword">()-</span><span class="default">mktime</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">2005</span><span class="keyword">); </span><span class="comment">// seconds since full moon at 10:32GMT on 25 Jan 2005<br /></span><span class="default">$position</span><span class="keyword">=(</span><span class="default">$position</span><span class="keyword">-</span><span class="default">$mps</span><span class="keyword">*</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$position</span><span class="keyword">/</span><span class="default">$mps</span><span class="keyword">))/</span><span class="default">$mps</span><span class="keyword">; </span><span class="comment">// phase from 0 to 1<br /><br /></span><span class="default">$position</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">*(</span><span class="default">0.5</span><span class="keyword">-</span><span class="default">$position</span><span class="keyword">);<br /></span><span class="comment">## revised to produce easier to work with...<br />## $position=1 - full moon<br />## $position=0 - new moon<br />## $position=-1 - full moon<br /><br /></span><span class="default">$size</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">];<br />if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">)) </span><span class="default">$size</span><span class="keyword">=</span><span class="default">24</span><span class="keyword">; </span><span class="comment">// width/height in pixels<br /></span><span class="default">$moon</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);<br /></span><span class="default">$dark</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">34</span><span class="keyword">, </span><span class="default">68</span><span class="keyword">); </span><span class="comment">// background colour for moon<br /></span><span class="default">$light</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">238</span><span class="keyword">, </span><span class="default">238</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">); </span><span class="comment">// foreground colour for moon<br /></span><span class="default">$corona</span><span class="keyword">=</span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">153</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">); </span><span class="comment">// edge of moon (semi-transparent)<br /><br />##<br />## Make transparent background<br />##<br /></span><span class="default">$background</span><span class="keyword">=</span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$background</span><span class="keyword">); <br /><br /></span><span class="comment">##<br />## Make the moon!<br />##<br /></span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$corona</span><span class="keyword">);<br />if (</span><span class="default">$position</span><span class="keyword">&gt;-</span><span class="default">1</span><span class="keyword">/</span><span class="default">$size </span><span class="keyword">AND </span><span class="default">$position</span><span class="keyword">&lt;</span><span class="default">1</span><span class="keyword">/</span><span class="default">$size</span><span class="keyword">) </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$dark</span><span class="keyword">); </span><span class="comment">// new moon<br /></span><span class="keyword">elseif (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$position</span><span class="keyword">)&gt;</span><span class="default">1</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">/</span><span class="default">$size</span><span class="keyword">) </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$light</span><span class="keyword">); </span><span class="comment">// full moon<br /></span><span class="keyword">elseif (</span><span class="default">$position</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$light</span><span class="keyword">);<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$xpos</span><span class="keyword">=(</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$xpos</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">$xpos</span><span class="keyword">);<br />        </span><span class="default">$xpos</span><span class="keyword">=</span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$xpos</span><span class="keyword">*</span><span class="default">$xpos</span><span class="keyword">));<br />        </span><span class="default">$xpos</span><span class="keyword">=(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)+(</span><span class="default">$position</span><span class="keyword">-</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$xpos</span><span class="keyword">*(</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xpos</span><span class="keyword">), </span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$dark</span><span class="keyword">);<br />    }<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$set</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            if (!</span><span class="default">$set </span><span class="keyword">AND </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)==</span><span class="default">$dark</span><span class="keyword">) </span><span class="default">$set</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />            elseif (</span><span class="default">$set </span><span class="keyword">AND </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)==</span><span class="default">$light</span><span class="keyword">) </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$dark</span><span class="keyword">); <br />        }<br />    }<br />}<br />else {<br />    </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">, </span><span class="default">$dark</span><span class="keyword">);<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$xpos</span><span class="keyword">=(</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$xpos</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">$xpos</span><span class="keyword">);<br />        </span><span class="default">$xpos</span><span class="keyword">=</span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$xpos</span><span class="keyword">*</span><span class="default">$xpos</span><span class="keyword">));<br />        </span><span class="default">$xpos</span><span class="keyword">=(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">)+(</span><span class="default">$position</span><span class="keyword">+</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$xpos</span><span class="keyword">*(</span><span class="default">$size</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xpos</span><span class="keyword">), </span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$light</span><span class="keyword">);<br />    }<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$set</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            if (!</span><span class="default">$set </span><span class="keyword">AND </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)==</span><span class="default">$light</span><span class="keyword">) </span><span class="default">$set</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />            elseif (</span><span class="default">$set </span><span class="keyword">AND </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)==</span><span class="default">$dark</span><span class="keyword">) </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$light</span><span class="keyword">); <br />        }<br />    }<br />}<br /><br /></span><span class="comment">##<br />## And output the picture<br />##<br /></span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$moon</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87502">  <div class="votes">
    <div id="Vu87502">
    <a href="/manual/vote-note.php?id=87502&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87502">
    <a href="/manual/vote-note.php?id=87502&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87502" title="75% like this...">
    4
    </div>
  </div>
  <a href="#87502" class="name">
  <strong class="user"><em>Mark</em></strong></a><a class="genanchor" href="#87502"> &para;</a><div class="date" title="2008-12-07 05:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87502">
<div class="phpcode"><code><span class="html">This draws an anti-aliased circle with an optional border. Call with &lt;img src="circle.php?r=50&amp;fg=ff0000&amp;bg=000000&amp;bw=5&amp;bc=ffff00"/&gt; to draw a filled circle with radius=50, foreground color=red, background color=black, border width=5, and border color=yellow. Assumes register_globals is on, but you can fix that easily.<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br /><br /></span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">) or </span><span class="default">$r </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br /></span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$bw</span><span class="keyword">) or </span><span class="default">$bw </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fg</span><span class="keyword">)==</span><span class="default">6 </span><span class="keyword">or </span><span class="default">$fg </span><span class="keyword">= </span><span class="string">'e8e8e8'</span><span class="keyword">;<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bg</span><span class="keyword">)==</span><span class="default">6 </span><span class="keyword">or </span><span class="default">$bg </span><span class="keyword">= </span><span class="string">'ffffff'</span><span class="keyword">;<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bc</span><span class="keyword">)==</span><span class="default">6 </span><span class="keyword">or </span><span class="default">$bc </span><span class="keyword">= </span><span class="string">'000000'</span><span class="keyword">;<br /><br />function </span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$hex</span><span class="keyword">) {<br />    return </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,<br />        </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)),<br />        </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">))<br />        );<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">-(</span><span class="default">$bw</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">);<br /><br /></span><span class="default">$im1 </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">$im2 </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">$bg</span><span class="keyword">));<br />if(</span><span class="default">$bw</span><span class="keyword">) </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">,</span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">$bc</span><span class="keyword">));<br /></span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">,</span><span class="default">hex2rgb</span><span class="keyword">(</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">$fg</span><span class="keyword">));<br /></span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">$im1</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70557">  <div class="votes">
    <div id="Vu70557">
    <a href="/manual/vote-note.php?id=70557&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70557">
    <a href="/manual/vote-note.php?id=70557&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70557" title="66% like this...">
    1
    </div>
  </div>
  <a href="#70557" class="name">
  <strong class="user"><em>sunbox at gmx dot net</em></strong></a><a class="genanchor" href="#70557"> &para;</a><div class="date" title="2006-10-20 04:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70557">
<div class="phpcode"><code><span class="html">draws a gradient filled ellipse with alpha color support based on felixbruns at &lt;ANTI-SPAM&gt;web dot de imagegradientellipse function. thx felixbruns :o)<br /><br />function imagegradientellipsealpha($image, $cx, $cy, $w, $h, $ic, $oc){<br />       $w = abs($w);<br />       $h = abs($h);<br />       $oc = array(0xFF &amp; ($oc &gt;&gt; 0x10), 0xFF &amp; ($oc &gt;&gt; 0x8), 0xFF &amp; $oc);<br />       $ic = array(0xFF &amp; ($ic &gt;&gt; 0x10), 0xFF &amp; ($ic &gt;&gt; 0x8), 0xFF &amp; $ic);<br />       $c0 = ($oc[0] - $ic[0]) / $w;<br />       $c1 = ($oc[1] - $ic[1]) / $w;<br />       $c2 = ($oc[2] - $ic[2]) / $w;<br />       $ot = $oc &gt;&gt; 24;<br />       $it = $ic &gt;&gt; 24;<br />       $ct = ($ot - $it) / $w;<br />       $i = 0;<br />       $j = 0;<br />       $is = ($w&lt;$h)?($w/$h):1;<br />       $js = ($h&lt;$w)?($h/$w):1;<br />       while(1){<br />           $r = $oc[0] - floor($i * $c0);<br />           $g = $oc[1] - floor($i * $c1);<br />           $b = $oc[2] - floor($i * $c2);<br />           $t = $ot - floor($i * $ct);<br />           $c = imagecolorallocatealpha($image, $r, $g, $b, $t);<br />           imageellipse($image, $cx, $cy, $w-$i, $h-$j, $c);<br />           if($i &lt; $w){<br />               $i += $is;<br />           }<br />           if($j &lt; $h){<br />               $j += $js;<br />           }<br />           if($i &gt;= $w &amp;&amp; $j &gt;= $h){<br />               break;<br />           }<br />       }<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="69212">  <div class="votes">
    <div id="Vu69212">
    <a href="/manual/vote-note.php?id=69212&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69212">
    <a href="/manual/vote-note.php?id=69212&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69212" title="100% like this...">
    2
    </div>
  </div>
  <a href="#69212" class="name">
  <strong class="user"><em>felixbruns at &lt;ANTI-SPAM&gt;web dot de</em></strong></a><a class="genanchor" href="#69212"> &para;</a><div class="date" title="2006-08-27 05:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69212">
<div class="phpcode"><code><span class="html">I quickly made a gradient ellipse function (i took some code from other gradient functions). It works like imageellipse or imagefilledellipse but with two color parameters: $ic is the inner color of the gradient ellipse and $oc is the outer color.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagegradientellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$ic</span><span class="keyword">, </span><span class="default">$oc</span><span class="keyword">){<br />    </span><span class="default">$w </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">$oc </span><span class="keyword">= array(</span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$oc </span><span class="keyword">&gt;&gt; </span><span class="default">0x10</span><span class="keyword">), </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$oc </span><span class="keyword">&gt;&gt; </span><span class="default">0x8</span><span class="keyword">), </span><span class="default">0xFF </span><span class="keyword">&amp; </span><span class="default">$oc</span><span class="keyword">);<br />    </span><span class="default">$ic </span><span class="keyword">= array(</span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$ic </span><span class="keyword">&gt;&gt; </span><span class="default">0x10</span><span class="keyword">), </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$ic </span><span class="keyword">&gt;&gt; </span><span class="default">0x8</span><span class="keyword">), </span><span class="default">0xFF </span><span class="keyword">&amp; </span><span class="default">$ic</span><span class="keyword">);<br />    </span><span class="default">$c0 </span><span class="keyword">= (</span><span class="default">$oc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] - </span><span class="default">$ic</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) / </span><span class="default">$w</span><span class="keyword">;<br />    </span><span class="default">$c1 </span><span class="keyword">= (</span><span class="default">$oc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$ic</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) / </span><span class="default">$w</span><span class="keyword">;<br />    </span><span class="default">$c2 </span><span class="keyword">= (</span><span class="default">$oc</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">$ic</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) / </span><span class="default">$w</span><span class="keyword">;<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$is </span><span class="keyword">= (</span><span class="default">$w</span><span class="keyword">&lt;</span><span class="default">$h</span><span class="keyword">)?(</span><span class="default">$w</span><span class="keyword">/</span><span class="default">$h</span><span class="keyword">):</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$js </span><span class="keyword">= (</span><span class="default">$h</span><span class="keyword">&lt;</span><span class="default">$w</span><span class="keyword">)?(</span><span class="default">$h</span><span class="keyword">/</span><span class="default">$w</span><span class="keyword">):</span><span class="default">1</span><span class="keyword">;<br />    while(</span><span class="default">1</span><span class="keyword">){<br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$oc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] - </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$c0</span><span class="keyword">);<br />        </span><span class="default">$g </span><span class="keyword">= </span><span class="default">$oc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$c1</span><span class="keyword">);<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$oc</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] - </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$c2</span><span class="keyword">);<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />        </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">, </span><span class="default">$cy</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">-</span><span class="default">$j</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />        if(</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$w</span><span class="keyword">){<br />            </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$is</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$h</span><span class="keyword">){<br />            </span><span class="default">$j </span><span class="keyword">+= </span><span class="default">$js</span><span class="keyword">;<br />        }<br />        if(</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$w </span><span class="keyword">&amp;&amp; </span><span class="default">$j </span><span class="keyword">&gt;= </span><span class="default">$h</span><span class="keyword">){<br />            break;<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20332">  <div class="votes">
    <div id="Vu20332">
    <a href="/manual/vote-note.php?id=20332&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20332">
    <a href="/manual/vote-note.php?id=20332&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20332" title="100% like this...">
    2
    </div>
  </div>
  <a href="#20332" class="name">
  <strong class="user"><em>ivank at 2xtreme dot net</em></strong></a><a class="genanchor" href="#20332"> &para;</a><div class="date" title="2002-03-30 04:31"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20332">
<div class="phpcode"><code><span class="html">Sometimes, you have x1, y1, x2, y2 parameters, but not the center, width, and height. Use this to draw a filled ellipse from your x1, y1, x2, and y2:<br /><br />ImageFilledEllipse(<br />$im, <br />($x1 + round(($x2 - $x1) / 2)), <br />($y1 + round(($y2 - $y1) / 2)), <br />($x2 - $x1), <br />($y2 - $y1), <br />$color);</span></code></div>
  </div>
 </div>
  <div class="note" id="62241">  <div class="votes">
    <div id="Vu62241">
    <a href="/manual/vote-note.php?id=62241&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62241">
    <a href="/manual/vote-note.php?id=62241&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62241" title="100% like this...">
    1
    </div>
  </div>
  <a href="#62241" class="name">
  <strong class="user"><em>jbr at ya-right dot com</em></strong></a><a class="genanchor" href="#62241"> &para;</a><div class="date" title="2006-02-22 07:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62241">
<div class="phpcode"><code><span class="html">This is a niffty function that you can use to make transparent ellipse/round type cutouts of any PNG or GIF image. The hard part is finding what color to use for the cutout layer and then the transparent layer, because you don't want to set the transparent index to a color being used in the image. After that it's as simple as layering the two images together.<br /><br />what you need for the example...<br /><br />a image of the size you want the cutout to be, gif or png (true color /256) can be used!<br /><br />&lt;?<br /><br />$original_image = './image.png';<br />$output_image = './new.png';<br />$temp_image = './temp'; // path and name (don't include the extension)<br />$is_true_color = true;<br /><br />$ext = substr ( $original_image, strrpos ( $original_image, '.' ) );<br />$temp_image .= $ext;<br />$new = image_get ( $ext, $original_image );<br />$width = imagesx ( $new );<br />$height = imagesy ( $new );<br /><br />// we need to create temp reduced image so we can get the colors<br />// in a high bit true color image (png 16,24 bit only)<br /><br />if ( $is_true_color )<br />{<br />    imagetruecolortopalette ( $new, false, 256 );<br />    image_make ( $new, $ext, $temp_image );<br />    imagedestroy ( $new );<br />    $colors = get_rgb ( $temp_image, $ext );<br />    @unlink ( $temp_image );<br />    $new = image_get ( $ext, $original_image );<br />}<br />else<br />{<br />    $colors = get_rgb ( $original_image, $ext );<br />}<br /><br />// this creates the cutout layer (2 colors, both will become transparent)<br /><br />$old = imagecreate ( $width, $height );<br />imageantialias( $old, true );<br />imagecolorallocate ( $old, $colors[0]['red'], $colors[0]['green'], $colors[0]['blue'] );<br />$bg = imagecolorallocate ( $old, $colors[1]['red'], $colors[1]['green'], $colors[1]['blue'] );<br />imagefilledellipse ( $old, floor ( $width / 2 ), floor ( $height / 2 ), $width, $height, $bg );<br />imagecolortransparent ( $old, $bg );<br />imagecopy ( $new, $old, 0, 0, 0, 0, $width, $height );<br />image_make ( $new, $ext, $output_image );<br />imagedestroy ( $old );<br />imagedestroy ( $new );<br /><br />// this layers both images together, making a nice ellipse/round transparent image cutout<br /><br />$old = imagecreate ( $width, $height );<br />$new = image_get ( $ext, $output_image );<br />$tbg = imagecolorallocate ( $old, $colors[0]['red'], $colors[0]['green'], $colors[0]['blue'] );<br />imagecopy ( $old, $new, 0, 0, 0, 0, $width, $height );<br />imagecolortransparent ( $old, $tbg );<br />image_make ( $old, $ext, $output_image );<br />imagedestroy ( $old );<br />imagedestroy ( $new );<br /><br />/*<br />* shortcut functions (1,2)<br />*/<br /><br />// returns the called image resource<br /><br />function image_get ( $ext, $name )<br />{<br />    switch ( $ext )<br />    {<br />        case '.gif' :<br />        return ( imagecreatefromgif ( $name ) );<br />        break;<br />        case '.png' :<br />        return ( imagecreatefrompng ( $name ) );<br />        break;<br />    }<br />}<br /><br />// outputs the image named passed to it<br /><br />function image_make ( $io, $ext, $name )<br />{<br />    switch ( $ext )<br />    {<br />        case '.gif' :<br />        imagegif ( $io, $name );<br />        break;<br />        case '.png' :<br />        imagepng ( $io, $name );<br />        break;<br />    }<br />}<br /><br />// get (2) colors not found in the current image<br /><br />function get_rgb ( $image, $ext )<br />{<br />    $x = 0;<br />    $colors = array ();<br />    $img = image_get ( $ext, $image );<br /><br />    for ( $color = 10; $color &lt;= 250; $color++ )<br />    {<br />        if ( imagecolorexact ( $img, $color, $color, $color ) == -1 )<br />        {<br />            $colors[] = array ( 'red' =&gt; $color, 'green' =&gt; $color, 'blue' =&gt; $color );<br /><br />            if ( $x == 1 )<br />            {<br />                imagedestroy ( $img );<br />                return ( $colors );<br />            }<br /><br />            $x++;<br />        }<br />    }<br /><br />    imagedestory ( $img );<br />    return ( $colors );<br />}<br /><br />?&gt;<br /><br />You can try a demo here (SGML) capture a web page, then make multi cutouts example!<br /><br /><a href="http://www.ya-right.com/" rel="nofollow" target="_blank">http://www.ya-right.com/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="57696">  <div class="votes">
    <div id="Vu57696">
    <a href="/manual/vote-note.php?id=57696&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57696">
    <a href="/manual/vote-note.php?id=57696&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57696" title="100% like this...">
    1
    </div>
  </div>
  <a href="#57696" class="name">
  <strong class="user"><em>mark at freegeekchicago dot org</em></strong></a><a class="genanchor" href="#57696"> &para;</a><div class="date" title="2005-10-11 10:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57696">
<div class="phpcode"><code><span class="html">Here is a simple script using imagefilledellipse to created rounded corners on the fly.  It takes color, bg_color, width, height, and placement (i.e. top left, bottom right) as arguments.<br /><br /><span class="default">&lt;?php<br />$color </span><span class="keyword">= </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'color'</span><span class="keyword">];<br /></span><span class="default">$bg_color </span><span class="keyword">= </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'bg_color'</span><span class="keyword">];<br /><br /></span><span class="default">$c_width </span><span class="keyword">= </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'width'</span><span class="keyword">];<br /></span><span class="default">$c_height </span><span class="keyword">= </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'height'</span><span class="keyword">];<br /><br /></span><span class="default">$placement </span><span class="keyword">= </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'placement'</span><span class="keyword">];<br /><br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$c_width</span><span class="keyword">;<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$c_height</span><span class="keyword">;<br /><br /></span><span class="comment">// create a blank image<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$c_width</span><span class="keyword">, </span><span class="default">$c_height</span><span class="keyword">);<br /><br /></span><span class="comment">// fill the corner color<br /></span><span class="default">$col_ellipse </span><span class="keyword">= </span><span class="default">hex2int</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br /><br /></span><span class="comment">// fill the background color<br /><br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="default">hex2int</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$bg_color</span><span class="keyword">);<br /><br /></span><span class="comment">// fill the background color<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">);<br /><br /></span><span class="comment">// draw the ellipse<br />//takes (resource image, int cx, int cy, int w, int h, int color)<br /><br />// bottom right corner<br /></span><span class="keyword">if (</span><span class="default">$placement </span><span class="keyword">== </span><span class="string">"br"</span><span class="keyword">) {</span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$col_ellipse</span><span class="keyword">);}<br /><br /></span><span class="comment">// top right corner<br /></span><span class="keyword">if (</span><span class="default">$placement </span><span class="keyword">== </span><span class="string">"tl"</span><span class="keyword">) {</span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$c_width</span><span class="keyword">, </span><span class="default">$c_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$col_ellipse</span><span class="keyword">);}<br /><br /></span><span class="comment">// top left corner<br /></span><span class="keyword">if (</span><span class="default">$placement </span><span class="keyword">== </span><span class="string">"tr"</span><span class="keyword">) {</span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$c_height</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$col_ellipse</span><span class="keyword">);}<br /><br /></span><span class="comment">// bottom left corner<br /></span><span class="keyword">if (</span><span class="default">$placement </span><span class="keyword">== </span><span class="string">"bl"</span><span class="keyword">) {</span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$c_width</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$col_ellipse</span><span class="keyword">);}<br /><br /></span><span class="comment">// output the picture<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /> <br />function </span><span class="default">hex2int</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) {<br />  </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"#"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />  </span><span class="default">$red </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />  </span><span class="default">$green </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />  </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)); <br /><br />  </span><span class="default">$color_int </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue</span><span class="keyword">);<br />  return(</span><span class="default">$color_int</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />You would call it like so:<br />&lt;img src="round_test.php?<br />width=50&amp;height=50&amp;color=fffefe&amp;bg_color=99e1e0&amp;placement=tr"&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="25916">  <div class="votes">
    <div id="Vu25916">
    <a href="/manual/vote-note.php?id=25916&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25916">
    <a href="/manual/vote-note.php?id=25916&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25916" title="100% like this...">
    1
    </div>
  </div>
  <a href="#25916" class="name">
  <strong class="user"><em>dave at corecommunications dot us</em></strong></a><a class="genanchor" href="#25916"> &para;</a><div class="date" title="2002-10-10 06:56"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25916">
<div class="phpcode"><code><span class="html">I needed to draw translucent circles on an existing image, using imagealphablending($image,true);. Turns out that imagefilledellipse seems to do the ellipse by drawing a series of lines from the centroid out to the circumference. Problem with this is that pixels near the center very visibly get drawn multiple times, producing a kind of moire effect. Also, the 0-degree (center to right) line is drawn twice and so is twice as dark the pixel below it.<br /><br />My workaround was to draw the ellipse solid in a copy of the source image and do an imagecopymerge back into the original.</span></code></div>
  </div>
 </div>
  <div class="note" id="13511">  <div class="votes">
    <div id="Vu13511">
    <a href="/manual/vote-note.php?id=13511&amp;page=function.imagefilledellipse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13511">
    <a href="/manual/vote-note.php?id=13511&amp;page=function.imagefilledellipse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13511" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#13511" class="name">
  <strong class="user"><em>harry dot wood at ic dot ac dot uk</em></strong></a><a class="genanchor" href="#13511"> &para;</a><div class="date" title="2001-06-19 04:09"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13511">
<div class="phpcode"><code><span class="html">This draws a rotated ellipse. If you don't want filled ellipses, then you don't need the triangle function.
<br />
<br />function triangle($x1,$y1, $x2,$y2, $x3,$y3, $colour) {
<br />   global $im;
<br />   $coords = array($x1,$y1, $x2,$y2, $x3,$y3);
<br />   imagefilledpolygon($im, $coords, 3, $colour); 
<br />}
<br />
<br />function rotatedellipse($cx, $cy, $width, $height, $rotateangle, $colour, $filled=true) {
<br />   global $im;
<br />   $step=15;
<br />   $cosangle=cos(deg2rad($rotateangle));
<br />   $sinangle=sin(deg2rad($rotateangle));
<br />
<br />   $squishratio = $height/$width;
<br />   $nopreviouspoint = true;
<br />   for ($angle=0; $angle&lt;=(180+$step); $angle+=$step) {
<br />       
<br />      $ox = ($width * cos(deg2rad($angle)));
<br />      $oy = ($width * sin(deg2rad($angle))) * $squishratio;
<br />
<br />      $x = ($ox * $cosangle) - ($oy * $sinangle);
<br />      $y = ($ox * $sinangle) + ($oy * $cosangle);
<br />  
<br />      if ($nopreviouspoint) {
<br />        $px=$x;
<br />        $py=$y;
<br />        $nopreviouspoint=false;
<br />      }
<br />
<br />      if ($filled) {
<br />         triangle($cx, $cy, $cx+$px, $cy+$py, $cx+$x, $cy+$y, $colour);
<br />         triangle($cx, $cy, $cx-$px, $cy-$py, $cx-$x, $cy-$y, $colour);
<br />      } else {
<br />         imageline($im, $cx+$px, $cy+$py, $cx+$x, $cy+$y, $colour); 
<br />         imageline($im, $cx-$px, $cy-$py, $cx-$x, $cy-$y, $colour); 
<br />      }
<br />      $px=$x;
<br />      $py=$y;
<br />   } 
<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefilledellipse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledellipse.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.imagefilledarc.php" title="imagefilledarc">imagefilledarc</a>
                        </li>
                                                <li class="current">
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
