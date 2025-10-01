<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagestring - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagestring.php">
 <link rel="shorturl" href="https://www.php.net/imagestring">
 <link rel="alternate" href="https://www.php.net/imagestring" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagesettile.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagestringup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagestring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagestring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagestring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagestring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagestring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagestring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagestring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagestring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagestring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagestring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagestring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draw a string horizontally" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagestring - Manual" />
<meta name="twitter:description" content="Draw a string horizontally" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagestring - Manual" />
<meta itemprop="description" content="Draw a string horizontally" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draw a string horizontally" />

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
        <a href="function.imagestringup.php">
          imagestringup &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagesettile.php">
          &laquo; imagesettile        </a>
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
            <option value='en/function.imagestring.php' selected="selected">English</option>
            <option value='de/function.imagestring.php'>German</option>
            <option value='es/function.imagestring.php'>Spanish</option>
            <option value='fr/function.imagestring.php'>French</option>
            <option value='it/function.imagestring.php'>Italian</option>
            <option value='ja/function.imagestring.php'>Japanese</option>
            <option value='pt_BR/function.imagestring.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagestring.php'>Russian</option>
            <option value='tr/function.imagestring.php'>Turkish</option>
            <option value='uk/function.imagestring.php'>Ukrainian</option>
            <option value='zh/function.imagestring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagestring" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagestring</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagestring</span> &mdash; <span class="dc-title">Draw a string horizontally</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagestring-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagestring</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.gdfont.php" class="type GdFont">GdFont</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$font</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Draws a <code class="parameter">string</code> at the given coordinates.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagestring-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    <dt>
<code class="parameter">font</code></dt><dd><p class="para">Can be 1, 2, 3, 4, 5 for built-in
fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or <span class="classname"><a href="class.gdfont.php" class="classname">GdFont</a></span> instance,
returned by <span class="function"><a href="function.imageloadfont.php" class="function">imageloadfont()</a></span>.</p></dd>
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       x-coordinate of the upper left corner.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       y-coordinate of the upper left corner.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be written.
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

 <div class="refsect1 returnvalues" id="refsect1-function.imagestring-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagestring-changelog">
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
  <td>8.1.0</td>
  <td>
  The <code class="parameter">font</code> parameter now accepts both an <span class="classname"><a href="class.gdfont.php" class="classname">GdFont</a></span> instance
  and an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>; previously only <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> was accepted.
  </td>
</tr>

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


 <div class="refsect1 examples" id="refsect1-function.imagestring-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2935">
    <p><strong>Example #1 <span class="function"><strong>imagestring()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 100*30 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// White background and blue text<br /></span><span style="color: #0000BB">$bg </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$textcolor </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Write the string at the top left<br /></span><span style="color: #0000BB">imagestring</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">'Hello world!'</span><span style="color: #007700">, </span><span style="color: #0000BB">$textcolor</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the image<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagestring.png" alt="Output of example : imagestring()" width="100" height="30" />
     </div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagestring-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagestringup.php" class="function" rel="rdfs-seeAlso">imagestringup()</a> - Draw a string vertically</span></li>
   <li><span class="function"><a href="function.imageloadfont.php" class="function" rel="rdfs-seeAlso">imageloadfont()</a> - Load a new font</span></li>
   <li><span class="function"><a href="function.imagettftext.php" class="function" rel="rdfs-seeAlso">imagettftext()</a> - Write text to the image using TrueType fonts</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagestring.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagestring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagestring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagestring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86763">  <div class="votes">
    <div id="Vu86763">
    <a href="/manual/vote-note.php?id=86763&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86763">
    <a href="/manual/vote-note.php?id=86763&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86763" title="67% like this...">
    28
    </div>
  </div>
  <a href="#86763" class="name">
  <strong class="user"><em>keksnicoh at googlemail dot com</em></strong></a><a class="genanchor" href="#86763"> &para;</a><div class="date" title="2008-11-02 10:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86763">
<div class="phpcode"><code><span class="html">Some fun with imagestring:<br /><br />This function is a product of too much time..<br />It opens an image and create a new image with one letter instead of a pixel.<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * generates a image with chars instead of pixels<br /> *<br /> * @param string $url Filepath or url<br /> * @param string $chars The chars which should replace the pixels<br /> * @param int $shrpns Sharpness (2 = every second pixel, 1 = every pixel ... )<br /> * @param int $size <br /> * @param int $weight font-weight/size<br /> * @return sesource<br /> * @author Nicolas 'KeksNicoh' Heimann &lt;www.salamipla.net&gt;<br /> * @date 02nov08<br /> */<br /></span><span class="keyword">function </span><span class="default">pixelfuck</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">=</span><span class="string">'ewk34543§G§$§$Tg34g4g'</span><span class="keyword">, </span><span class="default">$shrpns</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">,</span><span class="default">$weight</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />{<br />    list(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$resource </span><span class="keyword">= </span><span class="default">imagecreatefromstring</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">));<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">*</span><span class="default">$size</span><span class="keyword">,</span><span class="default">$h</span><span class="keyword">*</span><span class="default">$size</span><span class="keyword">);<br /><br />    </span><span class="default">$cc </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">);<br />    for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y </span><span class="keyword">&lt;</span><span class="default">$h</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">+=</span><span class="default">$shrpns</span><span class="keyword">) <br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x </span><span class="keyword">&lt;</span><span class="default">$w</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">+=</span><span class="default">$shrpns</span><span class="keyword">)<br />            </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$weight</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">*</span><span class="default">$size</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">*</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">{@++</span><span class="default">$p</span><span class="keyword">%</span><span class="default">$cc</span><span class="keyword">}, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">));<br />    return </span><span class="default">$img</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">'<a href="http://upload.wikimedia.org/wikipedia/commons/b/be/Manga_Icon.png" rel="nofollow" target="_blank">http://upload.wikimedia.org/wikipedia/commons/b/be/Manga_Icon.png</a>'</span><span class="keyword">;<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">'I-dont-like-manga-...-Why-do-they-have-such-big-eyes? Strange-...-WHAT-WANT-YOU-DO?'</span><span class="keyword">;<br /><br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">pixelfuck</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Have fun  :)</span></code></div>
  </div>
 </div>
  <div class="note" id="116501">  <div class="votes">
    <div id="Vu116501">
    <a href="/manual/vote-note.php?id=116501&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116501">
    <a href="/manual/vote-note.php?id=116501&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116501" title="65% like this...">
    7
    </div>
  </div>
  <a href="#116501" class="name">
  <strong class="user"><em>Booteille</em></strong></a><a class="genanchor" href="#116501"> &para;</a><div class="date" title="2015-01-14 12:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116501">
<div class="phpcode"><code><span class="html">Here is a function with similar declaration of imagestring() but who handles whitespaces (It creates new lines and 4 spaces instead of \n and \t) and image's size limits<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * @author Booteille<br /> *<br /> * @param resource $image<br /> * @param int $font<br /> * @param int $x<br /> * @param int $y<br /> * @param string $string<br /> * @param int $color<br /> */<br /></span><span class="keyword">function </span><span class="default">whitespaces_imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">) {<br />    </span><span class="default">$font_height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br />    </span><span class="default">$font_width </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br />    </span><span class="default">$image_height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$image_width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$max_characters </span><span class="keyword">= (int) (</span><span class="default">$image_width </span><span class="keyword">- </span><span class="default">$x</span><span class="keyword">) / </span><span class="default">$font_width </span><span class="keyword">;<br />    </span><span class="default">$next_offset_y </span><span class="keyword">= </span><span class="default">$y</span><span class="keyword">;<br /><br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$exploded_string </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">), </span><span class="default">$i_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$exploded_string</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$i_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$exploded_wrapped_string </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\t"</span><span class="keyword">, </span><span class="string">"    "</span><span class="keyword">, </span><span class="default">$exploded_string</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]), </span><span class="default">$max_characters</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">));<br />        </span><span class="default">$j_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$exploded_wrapped_string</span><span class="keyword">);<br />        for(</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$j_count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$next_offset_y</span><span class="keyword">, </span><span class="default">$exploded_wrapped_string</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">);<br />            </span><span class="default">$next_offset_y </span><span class="keyword">+= </span><span class="default">$font_height</span><span class="keyword">;<br /><br />            if(</span><span class="default">$next_offset_y </span><span class="keyword">&gt;= </span><span class="default">$image_height </span><span class="keyword">- </span><span class="default">$y</span><span class="keyword">) {<br />                return;<br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93353">  <div class="votes">
    <div id="Vu93353">
    <a href="/manual/vote-note.php?id=93353&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93353">
    <a href="/manual/vote-note.php?id=93353&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93353" title="60% like this...">
    1
    </div>
  </div>
  <a href="#93353" class="name">
  <strong class="user"><em>jordanslost at gmail</em></strong></a><a class="genanchor" href="#93353"> &para;</a><div class="date" title="2009-09-04 04:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93353">
<div class="phpcode"><code><span class="html">Here is a small bit I made for writing to a image from right to left when you are limited to imagestring()<br /><br /><span class="default">&lt;?php<br /><br />        $pageview_letters </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'//'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">); </span><span class="comment">// Form are original array of letters.<br />        </span><span class="default">$minus </span><span class="keyword">= </span><span class="default">6</span><span class="keyword">; </span><span class="comment">// The letter spacing in pixels<br />        </span><span class="default">$first </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// Whether or not we have started the string<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">375</span><span class="keyword">; </span><span class="comment">// X Location of imagestring<br />        </span><span class="default">$y </span><span class="keyword">= </span><span class="default">23</span><span class="keyword">; </span><span class="comment">// Y Location of imagestring<br />        </span><span class="default">$letters </span><span class="keyword">= array(); </span><span class="comment">// Initiate the array o letters.<br /><br />        </span><span class="keyword">foreach ( </span><span class="default">$pageview_letters </span><span class="keyword">as </span><span class="default">$letter </span><span class="keyword">) {<br />        <br />            </span><span class="default">$letters</span><span class="keyword">[] = </span><span class="default">$letter</span><span class="keyword">;<br />            <br />        }<br />        <br />        </span><span class="default">$letters </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">$letters </span><span class="keyword">);<br />        <br />        foreach ( </span><span class="default">$letters </span><span class="keyword">as </span><span class="default">$letter </span><span class="keyword">) {<br />        <br />            if ( </span><span class="default">$first </span><span class="keyword">) {<br />            <br />                </span><span class="default">imagestring</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$letter</span><span class="keyword">, </span><span class="default">$light_blue </span><span class="keyword">);<br />                </span><span class="default">$first </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                <br />            } else {<br />                <br />                </span><span class="default">$x </span><span class="keyword">= ( </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$minus </span><span class="keyword">);<br />                </span><span class="default">imagestring</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$letter</span><span class="keyword">, </span><span class="default">$light_blue </span><span class="keyword">);<br />                <br />            }<br />        <br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80199">  <div class="votes">
    <div id="Vu80199">
    <a href="/manual/vote-note.php?id=80199&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80199">
    <a href="/manual/vote-note.php?id=80199&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80199" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80199" class="name">
  <strong class="user"><em>eviloverlord+php at gmail dot com</em></strong></a><a class="genanchor" href="#80199"> &para;</a><div class="date" title="2008-01-03 03:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80199">
<div class="phpcode"><code><span class="html">Simple script to convert a string (such as an email addresses) to a transparent image.<br /><br />Usage: <br />&lt;img src="stringtoimg.php?string=<span class="default">&lt;?= urlencode</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$email</span><span class="keyword">)) </span><span class="default">?&gt;</span>"&gt;<br /><br />From a spambot's point of view, they see:<br />&lt;img src="stringtoimg.php?string=ZpbXZG92ZXJsb3JkQGdtYWlsLmNvbQ%3D%3D"&gt;<br /><br />Optional parameters:<br />    font_size: 1 to 5, with the default at 3<br />    R/G/B: the font color, in hex.<br /><br />Usage:<br />&lt;img src="stringtoimg.php?string=<span class="default">&lt;?= urlencode</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$email</span><span class="keyword">)) </span><span class="default">?&gt;</span>&amp;font_size=4&amp;R=FF&amp;G=FF&amp;B=00"&gt;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />Filename: stringtoimg.php<br /><br />Parameters:<br />        string: the string to print<br />        font_size (optional): the size of the font from 1-5<br />        R/G/B (optional): the RGB colors of the font in hex       <br />*/<br /><br /></span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="comment">//Get string info<br /></span><span class="default">$font_size </span><span class="keyword">= isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'font_size'</span><span class="keyword">]) ? </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'font_size'</span><span class="keyword">] : </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'string'</span><span class="keyword">]));<br /><br /></span><span class="comment">//Get the size of the string<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">) * </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">);<br /><br /></span><span class="comment">//Create the image<br /></span><span class="default">$img </span><span class="keyword">= @</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">)<br />      or die(</span><span class="string">"Cannot Initialize new GD image stream"</span><span class="keyword">);<br /><br /></span><span class="comment">//Make it transparent<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$trans_colour </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$trans_colour</span><span class="keyword">);<br /><br /></span><span class="comment">//Get the text color<br /></span><span class="default">$text_color </span><span class="keyword">= isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'R'</span><span class="keyword">], </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'G'</span><span class="keyword">], </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">]) ?<br />        </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'R'</span><span class="keyword">]), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'G'</span><span class="keyword">]), </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'B'</span><span class="keyword">])) :<br />        </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//Draw the string<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,  </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">);<br /><br /></span><span class="comment">//Output the image<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71995">  <div class="votes">
    <div id="Vu71995">
    <a href="/manual/vote-note.php?id=71995&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71995">
    <a href="/manual/vote-note.php?id=71995&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71995" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71995" class="name">
  <strong class="user"><em>gannon (at) portablesofdoom (dot) org</em></strong></a><a class="genanchor" href="#71995"> &para;</a><div class="date" title="2006-12-27 06:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71995">
<div class="phpcode"><code><span class="html">I like this better than "tjpoe at cableaz dot com"'s function for wrapping text to fit width (auto-adjusts height as needed) since it doesn't only do 1 word per line.<br /><br />function make_wrapped_txt($txt, $color=000000, $space=4, $font=4, $w=300) {<br />  if (strlen($color) != 6) $color = 000000;<br />  $int = hexdec($color);<br />  $h = imagefontheight($font);<br />  $fw = imagefontwidth($font);<br />  $txt = explode("\n", wordwrap($txt, ($w / $fw), "\n"));<br />  $lines = count($txt);<br />  $im = imagecreate($w, (($h * $lines) + ($lines * $space)));<br />  $bg = imagecolorallocate($im, 255, 255, 255);<br />  $color = imagecolorallocate($im, 0xFF &amp; ($int &gt;&gt; 0x10), 0xFF &amp; ($int &gt;&gt; 0x8), 0xFF &amp; $int);<br />  $y = 0;<br />  foreach ($txt as $text) {<br />    $x = (($w - ($fw * strlen($text))) / 2);<br />    imagestring($im, $font, $x, $y, $text, $color);<br />    $y += ($h + $space);<br />  }<br />  header('Content-type: image/jpeg');<br />  die(imagejpeg($im));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="71038">  <div class="votes">
    <div id="Vu71038">
    <a href="/manual/vote-note.php?id=71038&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71038">
    <a href="/manual/vote-note.php?id=71038&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71038" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71038" class="name">
  <strong class="user"><em>Piotr dot Sulecki at traxelektronik dot pl</em></strong></a><a class="genanchor" href="#71038"> &para;</a><div class="date" title="2006-11-09 03:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71038">
<div class="phpcode"><code><span class="html">The built-in fonts used to be in latin-2 (iso8859-2) encoding. For some time, they are in latin-1 (iso8859-1) encoding. There is no way to change the encoding at all. If you need to use any other encoding, you have to use TrueType fonts.</span></code></div>
  </div>
 </div>
  <div class="note" id="22211">  <div class="votes">
    <div id="Vu22211">
    <a href="/manual/vote-note.php?id=22211&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22211">
    <a href="/manual/vote-note.php?id=22211&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22211" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#22211" class="name">
  <strong class="user"><em>deejay_world at yahoo dot com</em></strong></a><a class="genanchor" href="#22211"> &para;</a><div class="date" title="2002-06-10 07:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22211">
<div class="phpcode"><code><span class="html">Width ImageString, the strings you draw are not automatically wrapped width the edge of the image. You may use this function to automatically wrap them:<br /><br />function ImageStringWrap($image, $font, $x, $y, $text, $color, $maxwidth)<br />{<br />    $fontwidth = ImageFontWidth($font);<br />    $fontheight = ImageFontHeight($font);<br /><br />    if ($maxwidth != NULL) {<br />        $maxcharsperline = floor($maxwidth / $fontwidth);<br />        $text = wordwrap($text, $maxcharsperline, "\n", 1);<br />      }<br /><br />    $lines = explode("\n", $text);<br />    while (list($numl, $line) = each($lines)) {<br />        ImageString($image, $font, $x, $y, $line, $color);<br />        $y += $fontheight;<br />      }<br />}<br /><br />So, in particular, if you want to wrap a text with the edge of the Image, you may do:<br />ImageStringWrap($img, $font, 0, $y, $text, $color, ImageSX($img) );</span></code></div>
  </div>
 </div>
  <div class="note" id="53740">  <div class="votes">
    <div id="Vu53740">
    <a href="/manual/vote-note.php?id=53740&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53740">
    <a href="/manual/vote-note.php?id=53740&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53740" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#53740" class="name">
  <strong class="user"><em>aly at slo-igre dot net</em></strong></a><a class="genanchor" href="#53740"> &para;</a><div class="date" title="2005-06-11 01:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53740">
<div class="phpcode"><code><span class="html">There is an error in "tjpoe at cableaz dot com" 's function ImageStringWrap. Instead of <br /><br />    else<br />           $string = $text;<br /><br />there should be<br /><br />     else<br />           $string = array($text);<br /><br />for function to work for strings with only one word. Otherwise it works like a charm, thanks.</span></code></div>
  </div>
 </div>
  <div class="note" id="81829">  <div class="votes">
    <div id="Vu81829">
    <a href="/manual/vote-note.php?id=81829&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81829">
    <a href="/manual/vote-note.php?id=81829&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81829" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#81829" class="name">
  <strong class="user"><em>sk89q</em></strong></a><a class="genanchor" href="#81829"> &para;</a><div class="date" title="2008-03-14 02:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81829">
<div class="phpcode"><code><span class="html">Creates a box of text. Has horizontal and vertical alignment, box arguments, and custom leading. I submitted this to the manual in 2003 actually, but it disappeared after a year or so (not sure why). Here it is again.<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">"ALIGN_LEFT"</span><span class="keyword">, </span><span class="string">"left"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"ALIGN_CENTER"</span><span class="keyword">, </span><span class="string">"center"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"ALIGN_RIGHT"</span><span class="keyword">, </span><span class="string">"right"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"VALIGN_TOP"</span><span class="keyword">, </span><span class="string">"top"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"VALIGN_MIDDLE"</span><span class="keyword">, </span><span class="string">"middle"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"VALIGN_BOTTOM"</span><span class="keyword">, </span><span class="string">"bottom"</span><span class="keyword">);<br /><br />function </span><span class="default">imagestringbox</span><span class="keyword">(&amp;</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$left</span><span class="keyword">, </span><span class="default">$top</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">, </span><span class="default">$bottom</span><span class="keyword">, </span><span class="default">$align</span><span class="keyword">, </span><span class="default">$valign</span><span class="keyword">, </span><span class="default">$leading</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)<br />{<br />   </span><span class="comment">// Get size of box<br />   </span><span class="default">$height </span><span class="keyword">= </span><span class="default">$bottom </span><span class="keyword">- </span><span class="default">$top</span><span class="keyword">;<br />   </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$right </span><span class="keyword">- </span><span class="default">$left</span><span class="keyword">;<br />  <br />   </span><span class="comment">// Break the text into lines, and into an array<br />   </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">wordwrap</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$width </span><span class="keyword">/ </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">)), </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />   </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />  <br />   </span><span class="comment">// Other important numbers<br />   </span><span class="default">$line_height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) + </span><span class="default">$leading</span><span class="keyword">;<br />   </span><span class="default">$line_count </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$height </span><span class="keyword">/ </span><span class="default">$line_height</span><span class="keyword">);<br />   </span><span class="default">$line_count </span><span class="keyword">= (</span><span class="default">$line_count </span><span class="keyword">&gt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">)) ? (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">)) : (</span><span class="default">$line_count</span><span class="keyword">);<br />  <br />   </span><span class="comment">// Loop through lines<br />   </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$line_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />   {<br />       </span><span class="comment">// Vertical Align<br />       </span><span class="keyword">switch(</span><span class="default">$valign</span><span class="keyword">)<br />       {<br />           case </span><span class="default">VALIGN_TOP</span><span class="keyword">: </span><span class="comment">// Top<br />               </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$top </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$line_height</span><span class="keyword">);<br />               break;<br />           case </span><span class="default">VALIGN_MIDDLE</span><span class="keyword">: </span><span class="comment">// Middle<br />               </span><span class="default">$y </span><span class="keyword">= </span><span class="default">$top </span><span class="keyword">+ ((</span><span class="default">$height </span><span class="keyword">- (</span><span class="default">$line_count </span><span class="keyword">* </span><span class="default">$line_height</span><span class="keyword">)) / </span><span class="default">2</span><span class="keyword">) + (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$line_height</span><span class="keyword">);<br />               break;<br />           case </span><span class="default">VALIGN_BOTTOM</span><span class="keyword">: </span><span class="comment">// Bottom<br />               </span><span class="default">$y </span><span class="keyword">= (</span><span class="default">$top </span><span class="keyword">+ </span><span class="default">$height</span><span class="keyword">) - (</span><span class="default">$line_count </span><span class="keyword">* </span><span class="default">$line_height</span><span class="keyword">) + (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$line_height</span><span class="keyword">);<br />               break;<br />           default:<br />               return </span><span class="default">false</span><span class="keyword">;<br />       }<br />      <br />       </span><span class="comment">// Horizontal Align<br />       </span><span class="default">$line_width </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) * </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br />       switch(</span><span class="default">$align</span><span class="keyword">)<br />       {<br />           case </span><span class="default">ALIGN_LEFT</span><span class="keyword">: </span><span class="comment">// Left<br />               </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$left</span><span class="keyword">;<br />               break;<br />           case </span><span class="default">ALIGN_CENTER</span><span class="keyword">: </span><span class="comment">// Center<br />               </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$left </span><span class="keyword">+ ((</span><span class="default">$width </span><span class="keyword">- </span><span class="default">$line_width</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />               break;<br />           case </span><span class="default">ALIGN_RIGHT</span><span class="keyword">: </span><span class="comment">// Right<br />               </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$left </span><span class="keyword">+ (</span><span class="default">$width </span><span class="keyword">- </span><span class="default">$line_width</span><span class="keyword">);<br />               break;<br />           default:<br />               return </span><span class="default">false</span><span class="keyword">;<br />       }<br />      <br />       </span><span class="comment">// Draw<br />       </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$color</span><span class="keyword">);<br />   }<br />  <br />   return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123818">  <div class="votes">
    <div id="Vu123818">
    <a href="/manual/vote-note.php?id=123818&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123818">
    <a href="/manual/vote-note.php?id=123818&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123818" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#123818" class="name">
  <strong class="user"><em>wheberson dot com dot br at gmail dot com</em></strong></a><a class="genanchor" href="#123818"> &para;</a><div class="date" title="2019-05-02 05:55"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123818">
<div class="phpcode"><code><span class="html">// Convert e-mail to image (png)<br />function convertEmailToImg ($aValue, $aRed, $aGreen, $aBlue, $aAlphaF=0, $aAlphaB=127, $aFontSize=4)<br /><br />{<br />    $img= imagecreatetruecolor (imagefontwidth ($aFontSize) * strlen ($aValue), imagefontheight ($aFontSize));<br />    imagesavealpha ($img, true);<br />    imagefill ($img, 0, 0, imagecolorallocatealpha ($img, 0, 0, 0, $aAlphaB));<br />    imagestring ($img, $aFontSize, 0, 0, $aValue, imagecolorallocatealpha ($img, $aRed, $aGreen, $aBlue, $aAlphaF));<br />    ob_start ();<br />    imagepng ($img);<br />    imagedestroy ($img);<br />    return base64_encode (ob_get_clean ());<br />}<br /><br />// Example<br />$imgString= convertEmailToImg ('contact@example.com', 0, 0, 255, 0, 127, 4);</span></code></div>
  </div>
 </div>
  <div class="note" id="73346">  <div class="votes">
    <div id="Vu73346">
    <a href="/manual/vote-note.php?id=73346&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73346">
    <a href="/manual/vote-note.php?id=73346&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73346" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#73346" class="name">
  <strong class="user"><em>jlamer</em></strong></a><a class="genanchor" href="#73346"> &para;</a><div class="date" title="2007-02-18 06:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73346">
<div class="phpcode"><code><span class="html">//  Example of use...<br /><br />//  This is a simple function to output text to an image<br />//  which is centered (as much as I want to do by eye)<br />//  and wrapped<br />//    Just remember that all the sizes are guessed<br />// doesn't cut on the space (only on number of characters)<br />//  or change color of text, but this isn't for that...<br />function imageCenterString( $imgw, $imgh,<br />   $image_text = '', $text_size=5 )<br />{<br />   $im = imagecreate( $imgw, $imgh );<br />    <br />   // white background and blue text<br />   $bg = imagecolorallocate($im, 255, 255, 255);<br />   $textcolor = imagecolorallocate($im, 0, 0, 0);<br />    <br />   $t_h = $t_w = $t_x = $t_y = 0;<br />   $base_w =9; $base_h = 16;<br />   $m = 0.88;<br />   switch ( $text_size )<br />   {<br />      case 1: $t_w = $base_w*pow(($m*.98),4);<br />         $t_h = $base_h*pow(($m*.98),4);<br />         break;<br />      case 2: $t_w = $base_w*pow($m,3);<br />         $t_h = $base_h*pow($m,3);<br />         break;<br />      case 3: $t_w = $base_w*pow($m,2);<br />         $t_h = $base_h*pow($m,2);<br />         break;<br />      case 4: $t_w = $base_w*$m;<br />         $t_h = $base_h*$m;<br />         break;<br />      case 5: $t_w = $base_w;<br />         $t_h = $base_h;<br />         break;<br />      default:<br />         if ( $text_size &gt;= 5 ) // set to 5<br />         {   $t_w = $base_w; $t_h = $base_h; }<br />         if ( $text_size &lt; 5 ) // set to 1<br />         {<br />            $t_w = $base_w*pow(($m*.98),4);<br />            $t_h = $base_h*pow(($m*.98),4);<br />         }<br />         break;<br />   }<br />    <br />   $text_array = array();<br />    <br />   $max = floor($imgw/$t_w);<br />    <br />   for( $i=0; strlen($image_text) &gt; 0; $i += $max)<br />   {<br />      array_push($text_array, substr($image_text,0,$max));<br />      if ( strlen($image_text) &gt;= $max )<br />      {   $image_text = substr($image_text,$max); }<br />      else<br />      {   $image_text = ''; }<br />   }<br />    <br />   $t_y = ($imgh/2) - ($t_h*count($text_array)/2);<br /><br />   foreach ( $text_array as $text )<br />   {<br />      $t_x = ($imgw/2)-($t_w*strlen($text)/2);<br />      imagestring($im, $text_size, $t_x, $t_y,<br />         $text, $textcolor);<br />      $t_y += $t_h;<br />   }<br /><br />   // output the image<br />   header("Content-type: image/gpeg");<br />   imagejpeg($im);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="47479">  <div class="votes">
    <div id="Vu47479">
    <a href="/manual/vote-note.php?id=47479&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47479">
    <a href="/manual/vote-note.php?id=47479&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47479" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#47479" class="name">
  <strong class="user"><em>cesargus at yahoo dot com</em></strong></a><a class="genanchor" href="#47479"> &para;</a><div class="date" title="2004-11-17 10:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47479">
<div class="phpcode"><code><span class="html">//simple hello world<br /><br />&lt;?<br />header ("Content-type: image/png");<br /><br />$img_handle = ImageCreate (200, 20) or die ("Cannot Create image");<br />$back_color = ImageColorAllocate ($img_handle, 0, 10, 10);<br />$txt_color = ImageColorAllocate ($img_handle, 235, 235, 51);<br />ImageString ($img_handle, 10, 25, 5,  "Hello world!", $txt_color);<br />ImagePng ($img_handle); <br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85089">  <div class="votes">
    <div id="Vu85089">
    <a href="/manual/vote-note.php?id=85089&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85089">
    <a href="/manual/vote-note.php?id=85089&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85089" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#85089" class="name">
  <strong class="user"><em>mustafa at hafunny dot info</em></strong></a><a class="genanchor" href="#85089"> &para;</a><div class="date" title="2008-08-14 02:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85089">
<div class="phpcode"><code><span class="html">If you have any problem with CentralEurope's words, for example : ľščťžýáíéúäňôď, I am try this problem by iconv() function.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// create example image<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /></span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$textcolor </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">"ľščťžýáíéúäňôď..."</span><span class="keyword">;<br /><br /></span><span class="comment">//simple convert string<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"Windows-1250"</span><span class="keyword">, </span><span class="string">"Latin2"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="comment">// write converted string at the top left<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$textcolor</span><span class="keyword">);<br /><br /></span><span class="comment">// output the image<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71752">  <div class="votes">
    <div id="Vu71752">
    <a href="/manual/vote-note.php?id=71752&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71752">
    <a href="/manual/vote-note.php?id=71752&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71752" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#71752" class="name">
  <strong class="user"><em>iibm at free dot fr</em></strong></a><a class="genanchor" href="#71752"> &para;</a><div class="date" title="2006-12-14 02:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71752">
<div class="phpcode"><code><span class="html">I've made a little modification of the (quite usefull) imagestringcutted function (when align=center, it doesn't work well for me if x1!=0) so juste replace the last line with :<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">[...]<br />   else </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$x1</span><span class="keyword">+(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$x1</span><span class="keyword">)/ </span><span class="default">2 </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">$fontwidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50455">  <div class="votes">
    <div id="Vu50455">
    <a href="/manual/vote-note.php?id=50455&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50455">
    <a href="/manual/vote-note.php?id=50455&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50455" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#50455" class="name">
  <strong class="user"><em>webmaster at acdrifter dot com</em></strong></a><a class="genanchor" href="#50455"> &para;</a><div class="date" title="2005-02-28 08:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50455">
<div class="phpcode"><code><span class="html">If you are looking to center the text, use the following function; I'm not promising perfection...<br /><br />function imagecenteredstring ( &amp;$img, $font, $xMin, $xMax, $y, $str, $col ) {<br />    $textWidth = imagefontwidth( $font ) * strlen( $str );<br />    $xLoc = ( $xMax - $xMin - $textWidth ) / 2 + $xMin + $font;<br />    imagestring( $img, $font, $xLoc, $y, $str, $col );<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="29485">  <div class="votes">
    <div id="Vu29485">
    <a href="/manual/vote-note.php?id=29485&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29485">
    <a href="/manual/vote-note.php?id=29485&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29485" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#29485" class="name">
  <strong class="user"><em>php dot net at mvoncken dot nl</em></strong></a><a class="genanchor" href="#29485"> &para;</a><div class="date" title="2003-02-14 02:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29485">
<div class="phpcode"><code><span class="html">A simple example:<br />To make one line of text fit in the image.<br /><br /><span class="default">&lt;?php<br />header </span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"spam@mvoncken.nl"</span><span class="keyword">;                                              <br /></span><span class="default">$font   </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">$width  </span><span class="keyword">= </span><span class="default">ImageFontWidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) * </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">ImageFontHeight</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br /><br /></span><span class="default">$im </span><span class="keyword">= @</span><span class="default">imagecreate </span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">$background_color </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">); </span><span class="comment">//white background<br /></span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);</span><span class="comment">//black text<br /></span><span class="default">imagestring </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,  </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">);<br /></span><span class="default">imagepng </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I use something like this for spamprotection of my visitors (pass userid as an url-parameter for this php)</span></code></div>
  </div>
 </div>
  <div class="note" id="87759">  <div class="votes">
    <div id="Vu87759">
    <a href="/manual/vote-note.php?id=87759&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87759">
    <a href="/manual/vote-note.php?id=87759&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87759" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#87759" class="name">
  <strong class="user"><em>mike at mike-griffiths dot co dot uk</em></strong></a><a class="genanchor" href="#87759"> &para;</a><div class="date" title="2008-12-19 12:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87759">
<div class="phpcode"><code><span class="html">I created an alternative using the function imagechar to create a string of an image.  The below function below was used to create an image the same height and width of the text string.  It is used on my website to mask users email addresses.
<br />
<br /><span class="default">&lt;?PHP
<br />
<br /></span><span class="comment">// Set your string somehow
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'your@example.com'</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Set font size
<br /></span><span class="default">$font_size </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Create image width dependant on width of the string
<br /></span><span class="default">$width  </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">)*</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="comment">// Set height to that of the font
<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">);
<br /></span><span class="comment">// Create the image pallette
<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);
<br /></span><span class="comment">// Grey background
<br /></span><span class="default">$bg    </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">);
<br /></span><span class="comment">// White font color
<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br /></span><span class="comment">// Length of the string
<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="comment">// Y-coordinate of character, X changes, Y is static
<br /></span><span class="default">$ypos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br /></span><span class="comment">// Loop through the string
<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$len</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){
<br />    </span><span class="comment">// Position of the character horizontally
<br />    </span><span class="default">$xpos </span><span class="keyword">= </span><span class="default">$i </span><span class="keyword">* </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">);
<br />    </span><span class="comment">// Draw character
<br />    </span><span class="default">imagechar</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$xpos</span><span class="keyword">, </span><span class="default">$ypos</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />    </span><span class="comment">// Remove character from string
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);    
<br />    
<br />}
<br /></span><span class="comment">// Return the image
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/gif"</span><span class="keyword">);
<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="comment">// Remove image 
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80186">  <div class="votes">
    <div id="Vu80186">
    <a href="/manual/vote-note.php?id=80186&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80186">
    <a href="/manual/vote-note.php?id=80186&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80186" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#80186" class="name">
  <strong class="user"><em>Epidemiah</em></strong></a><a class="genanchor" href="#80186"> &para;</a><div class="date" title="2008-01-03 05:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80186">
<div class="phpcode"><code><span class="html">Its just an easy function to write an string in the middle of a picture.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imageCenterString</span><span class="keyword">(&amp;</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$font </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$font </span><span class="keyword">&gt; </span><span class="default">5</span><span class="keyword">){ </span><span class="default">$font </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; }<br />    </span><span class="default">$num </span><span class="keyword">= array(array(</span><span class="default">4.6</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">),<br />                 array(</span><span class="default">4.6</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">),<br />                 array(</span><span class="default">5.6</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">),<br />                 array(</span><span class="default">6.5</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">),<br />                 array(</span><span class="default">7.6</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">),<br />                 array(</span><span class="default">8.5</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">));<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">$num</span><span class="keyword">[</span><span class="default">$font</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$x     </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) - </span><span class="default">$width </span><span class="keyword">- </span><span class="default">8</span><span class="keyword">;<br />    </span><span class="default">$y     </span><span class="keyword">= </span><span class="default">Imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) - (</span><span class="default">$num</span><span class="keyword">[</span><span class="default">$font</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] + </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70486">  <div class="votes">
    <div id="Vu70486">
    <a href="/manual/vote-note.php?id=70486&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70486">
    <a href="/manual/vote-note.php?id=70486&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70486" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#70486" class="name">
  <strong class="user"><em>god at in-heaven dot org</em></strong></a><a class="genanchor" href="#70486"> &para;</a><div class="date" title="2006-10-18 02:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70486">
<div class="phpcode"><code><span class="html">Here's a simple function for creating an aligned string which is cutted to match the space between $x1 and $x2<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagestringcutted</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">,</span><span class="default">$align</span><span class="keyword">=</span><span class="string">"center"</span><span class="keyword">) {<br />    </span><span class="default">$fontwidth </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br />    </span><span class="default">$fullwidth </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">$fontwidth</span><span class="keyword">;<br />    </span><span class="default">$maxwidth </span><span class="keyword">= </span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$x1</span><span class="keyword">;<br />    </span><span class="default">$targetwidth </span><span class="keyword">= </span><span class="default">$fullwidth</span><span class="keyword">-(</span><span class="default">4</span><span class="keyword">*</span><span class="default">$fontwidth</span><span class="keyword">);<br />    if(</span><span class="default">$fullwidth </span><span class="keyword">&gt; </span><span class="default">$maxwidth</span><span class="keyword">) {<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) AND ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)-(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">4</span><span class="keyword">))*</span><span class="default">$fontwidth</span><span class="keyword">) &gt; </span><span class="default">$targetwidth </span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) { }<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)-</span><span class="default">$i</span><span class="keyword">)-</span><span class="default">4</span><span class="keyword">).</span><span class="string">"..."</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">$align </span><span class="keyword">== </span><span class="string">"left"</span><span class="keyword">) </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />    elseif(</span><span class="default">$align </span><span class="keyword">== </span><span class="string">"right"</span><span class="keyword">) </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$x2 </span><span class="keyword">- ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">$fontwidth</span><span class="keyword">)),</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />    else </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$x1</span><span class="keyword">)/ </span><span class="default">2 </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">$fontwidth </span><span class="keyword">/ </span><span class="default">2</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>Usage:<br /><span class="default">&lt;?php<br />imagestringcutted</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$x1</span><span class="keyword">,</span><span class="default">$x2</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">,</span><span class="default">$align</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Will create a string $text, which is cutted if it's too long to match between  $x1 and $2, on $img with font $font and color $color at height $y and with align to $align.<br />Hope it will help some people.<br />Sorry for my bad English.</span></code></div>
  </div>
 </div>
  <div class="note" id="51306">  <div class="votes">
    <div id="Vu51306">
    <a href="/manual/vote-note.php?id=51306&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51306">
    <a href="/manual/vote-note.php?id=51306&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51306" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#51306" class="name">
  <strong class="user"><em>shadikka at gmail dot com</em></strong></a><a class="genanchor" href="#51306"> &para;</a><div class="date" title="2005-03-26 11:49"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51306">
<div class="phpcode"><code><span class="html">My version of the centered string, it decreases the font number (since I've noticed smaller numbers are smaller fonts) until 1 if the string won't fit. Then it will give up.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagestringcentered </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">) {<br /> while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) &gt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)) {<br />  if (</span><span class="default">$font </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">) { </span><span class="default">$font</span><span class="keyword">--; }<br />  else { break; }<br /> }  <br /> </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) / </span><span class="default">2 </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20402">  <div class="votes">
    <div id="Vu20402">
    <a href="/manual/vote-note.php?id=20402&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20402">
    <a href="/manual/vote-note.php?id=20402&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20402" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#20402" class="name">
  <strong class="user"><em>bob dot brown at opus dot co dot nz</em></strong></a><a class="genanchor" href="#20402"> &para;</a><div class="date" title="2002-04-02 03:59"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20402">
<div class="phpcode"><code><span class="html">If you find that you are getting two characters on the end of your imageString that look like a Y and an upside down L then they're probably representations of CR/LF.  Try trim()ing the string before outputting it.  (I was sooo sure this was a bug &lt;g&gt;)</span></code></div>
  </div>
 </div>
  <div class="note" id="85197">  <div class="votes">
    <div id="Vu85197">
    <a href="/manual/vote-note.php?id=85197&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85197">
    <a href="/manual/vote-note.php?id=85197&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85197" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#85197" class="name">
  <strong class="user"><em>Abubaker dot shamlan at gmail dot com</em></strong></a><a class="genanchor" href="#85197"> &para;</a><div class="date" title="2008-08-19 03:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85197">
<div class="phpcode"><code><span class="html">this is a function that is based on imagestring but it produces text in the center of an image i hope it helps :D
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ImageStringCenter</span><span class="keyword">(</span><span class="default">$image_resource</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$line_number</span><span class="keyword">, </span><span class="default">$total_lines</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">) {
<br />
<br />    </span><span class="default">$center_x </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( ( </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$image_resource</span><span class="keyword">) - ( </span><span class="default">ImageFontWidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">) * </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) ) ) / </span><span class="default">2 </span><span class="keyword">);
<br />
<br />    </span><span class="default">$center_y </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">( ( ( </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$image_resource</span><span class="keyword">) - ( </span><span class="default">ImageFontHeight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">) * </span><span class="default">$total_lines </span><span class="keyword">) ) / </span><span class="default">2</span><span class="keyword">)  + ( (</span><span class="default">$line_number</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">) * </span><span class="default">ImageFontHeight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">) ) );
<br />
<br /></span><span class="default">ImageString</span><span class="keyword">(</span><span class="default">$image_resource</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$center_x</span><span class="keyword">, </span><span class="default">$center_y</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53298">  <div class="votes">
    <div id="Vu53298">
    <a href="/manual/vote-note.php?id=53298&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53298">
    <a href="/manual/vote-note.php?id=53298&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53298" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#53298" class="name">
  <strong class="user"><em>tjpoe at cableaz dot com</em></strong></a><a class="genanchor" href="#53298"> &para;</a><div class="date" title="2005-05-27 07:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53298">
<div class="phpcode"><code><span class="html">i modified the centering functions and created this which centers each word on it's own line. You can adjust the spacing with the $valign var. currently no implimentation if text is too large for image. strings are tokenized by space, but can obviously be changed. <br /><br />function ImageStringWrap($image, $font, $text, $color)<br />{<br />  $fontwidth = ImageFontWidth($font);<br />  $fontheight = ImageFontHeight($font);<br />  $words= str_word_count($text);<br />  if ($words &gt; 1){<br />    $string=array(strtok($text,' '));<br />    for ($i = 1 ; $i &lt;= $words ; $i++){<br />      $string=array_merge($string,array($i=&gt;strtok(' ')));<br />    }<br />  }<br />  else<br />    $string=$text;<br />  $vspace=4;<br />  $y=((imagesy($image)-($fontheight*$words)-($words*$vspace))/2);<br />  foreach($string as $st){<br />    $x=((imagesx($image)-($fontwidth * strlen($st)))/2);<br />    ImageString($image,$font,$x,$y,$st,$color);<br />    $y+=($fontheight+$vspace);<br />  }<br />}<br />hope this is helpful</span></code></div>
  </div>
 </div>
  <div class="note" id="46512">  <div class="votes">
    <div id="Vu46512">
    <a href="/manual/vote-note.php?id=46512&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46512">
    <a href="/manual/vote-note.php?id=46512&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46512" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#46512" class="name">
  <strong class="user"><em>brooks dot boyd at gmail dot com</em></strong></a><a class="genanchor" href="#46512"> &para;</a><div class="date" title="2004-10-13 12:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46512">
<div class="phpcode"><code><span class="html">Drawing a string as an image is a handy way to disguise an eMail address so spam sniffers can't get it as easily. The only catch to creating a dynamic image with your eMail in it is the eMail to be displayed must be passed via the query string to enable static HTML to use it. So, the eMail must be encrypted slightly in order to not defeat the purpose of not typing your eMail address outright. I wrote the following script to do so:<br /><br />Save the following as email.php<br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'addr'</span><span class="keyword">] != </span><span class="string">""</span><span class="keyword">) {<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'addr'</span><span class="keyword">];<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\[dot]/"</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">);<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\[at]/"</span><span class="keyword">,</span><span class="string">"@"</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">);<br />        </span><span class="default">$final </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$final </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">)-</span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        }<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">$final</span><span class="keyword">;<br /><br />        </span><span class="default">$char_width </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br />        </span><span class="default">$char_height </span><span class="keyword">= </span><span class="default">17</span><span class="keyword">;<br />        </span><span class="default">$padding </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />        </span><span class="default">$width </span><span class="keyword">= </span><span class="default">$padding</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">)*</span><span class="default">$char_width</span><span class="keyword">;<br />        </span><span class="default">$height </span><span class="keyword">= +</span><span class="default">$padding</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">+</span><span class="default">$char_height</span><span class="keyword">;<br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />        </span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />        </span><span class="default">imagefilledrectangle </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">); </span><span class="comment"># Make transparent<br />        </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">$padding</span><span class="keyword">, </span><span class="default">$padding</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />        </span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />        </span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">125</span><span class="keyword">);<br />        </span><span class="default">imagefilledrectangle </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">); </span><span class="comment"># Make transparent<br />    </span><span class="keyword">}<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpg'</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />If the script is called without an eMail address, it outputs a 2x2 transparent image.<br /><br />To call the script to generate the eMail "user@home.com", the HTML tag would be:<br /><br />&lt;img src="email.php?addr=moc[dot]emoh[at]resu"&gt;<br /><br />To 'encrypt' the eMail address to pass to the script, write the address backwards and replace "." with "[dot]" and "@" with "[at]". It's not the most ironclad protection, but it thwarts most casual eMail sniffers.</span></code></div>
  </div>
 </div>
  <div class="note" id="26674">  <div class="votes">
    <div id="Vu26674">
    <a href="/manual/vote-note.php?id=26674&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26674">
    <a href="/manual/vote-note.php?id=26674&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26674" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#26674" class="name">
  <strong class="user"><em>aholmes84 at hotmail dot com</em></strong></a><a class="genanchor" href="#26674"> &para;</a><div class="date" title="2002-11-08 11:25"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26674">
<div class="phpcode"><code><span class="html">When setting the font, any integer less than 1 defaults to 1, and any integer greater than 5 defaults to 5.</span></code></div>
  </div>
 </div>
  <div class="note" id="62440">  <div class="votes">
    <div id="Vu62440">
    <a href="/manual/vote-note.php?id=62440&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62440">
    <a href="/manual/vote-note.php?id=62440&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62440" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#62440" class="name">
  <strong class="user"><em>rush at 507magazine dot com</em></strong></a><a class="genanchor" href="#62440"> &para;</a><div class="date" title="2006-02-28 11:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62440">
<div class="phpcode"><code><span class="html">hello, I noticed that if you put a rand(3,5) it will put random sizes of font to each character put on the image. this is very useful when programming captchas for anti-spam form verification.</span></code></div>
  </div>
 </div>
  <div class="note" id="61378">  <div class="votes">
    <div id="Vu61378">
    <a href="/manual/vote-note.php?id=61378&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61378">
    <a href="/manual/vote-note.php?id=61378&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61378" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#61378" class="name">
  <strong class="user"><em>julien / at / theoconcept.com</em></strong></a><a class="genanchor" href="#61378"> &para;</a><div class="date" title="2006-02-01 03:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61378">
<div class="phpcode"><code><span class="html">If you are looking for a way to generate a "CAPTCHA" image for a form verification (to verify it is not a robot), have a look at this : <a href="http://blog.theoconcept.com/static/distortion/" rel="nofollow" target="_blank">http://blog.theoconcept.com/static/distortion/</a><br /><br />It gives an animated image with the parameter string, with distortion, here is an example :<br /><a href="http://blog.theoconcept.com/static/distortion/distortion.php" rel="nofollow" target="_blank">http://blog.theoconcept.com/static/distortion/distortion.php</a><br /><br />(*)  You'll need GD + Freetype support<br />(**) You'll need ImageMagick on the machine</span></code></div>
  </div>
 </div>
  <div class="note" id="52797">  <div class="votes">
    <div id="Vu52797">
    <a href="/manual/vote-note.php?id=52797&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52797">
    <a href="/manual/vote-note.php?id=52797&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52797" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#52797" class="name">
  <strong class="user"><em>jurgen dot vanoosterwijck at pandora dot be</em></strong></a><a class="genanchor" href="#52797"> &para;</a><div class="date" title="2005-05-12 10:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52797">
<div class="phpcode"><code><span class="html">Based on the previous example, here's how to center a string both horizontally and vertically...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagestringcentered </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">) {<br /> while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) &gt; </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)) {<br />  if (</span><span class="default">$font </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">) { </span><span class="default">$font</span><span class="keyword">--; }<br />  else { break; }<br /> } <br /> </span><span class="default">$cy </span><span class="keyword">= (</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">) - (</span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">);<br /> </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$font</span><span class="keyword">,</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) / </span><span class="default">2 </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) * </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">,</span><span class="default">$cy</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90481">  <div class="votes">
    <div id="Vu90481">
    <a href="/manual/vote-note.php?id=90481&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90481">
    <a href="/manual/vote-note.php?id=90481&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90481" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#90481" class="name">
  <strong class="user"><em>eric dot brison at anakeen dot com</em></strong></a><a class="genanchor" href="#90481"> &para;</a><div class="date" title="2009-04-24 12:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90481">
<div class="phpcode"><code><span class="html">Same function as above but it can display multi-line strings.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">sendimagetext</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {<br />  </span><span class="comment">// Set font size<br />  </span><span class="default">$font_size </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br /><br />  </span><span class="default">$ts</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />  </span><span class="default">$width</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  foreach (</span><span class="default">$ts </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$string</span><span class="keyword">) { </span><span class="comment">//compute width<br />    </span><span class="default">$width</span><span class="keyword">=</span><span class="default">max</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />  }<br /><br />  </span><span class="comment">// Create image width dependant on width of the string<br />  </span><span class="default">$width  </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">)*</span><span class="default">$width</span><span class="keyword">;<br />  </span><span class="comment">// Set height to that of the font<br />  </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">)*</span><span class="default">count</span><span class="keyword">(</span><span class="default">$ts</span><span class="keyword">);<br />  </span><span class="default">$el</span><span class="keyword">=</span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">);<br />  </span><span class="default">$em</span><span class="keyword">=</span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font_size</span><span class="keyword">);<br />  </span><span class="comment">// Create the image pallette<br />  </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br />  </span><span class="comment">// Dark red background<br />  </span><span class="default">$bg </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0xAA</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">, </span><span class="default">0x00</span><span class="keyword">);<br />  </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">$width </span><span class="keyword">,</span><span class="default">$height </span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">);<br />  </span><span class="comment">// White font color<br />  </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /><br />  foreach (</span><span class="default">$ts </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="comment">// Length of the string<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="comment">// Y-coordinate of character, X changes, Y is static<br />    </span><span class="default">$ypos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="comment">// Loop through the string<br />    </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$len</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />      </span><span class="comment">// Position of the character horizontally<br />      </span><span class="default">$xpos </span><span class="keyword">= </span><span class="default">$i </span><span class="keyword">* </span><span class="default">$em</span><span class="keyword">;<br />      </span><span class="default">$ypos </span><span class="keyword">= </span><span class="default">$k </span><span class="keyword">* </span><span class="default">$el</span><span class="keyword">;<br />      </span><span class="comment">// Draw character<br />      </span><span class="default">imagechar</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$font_size</span><span class="keyword">, </span><span class="default">$xpos</span><span class="keyword">, </span><span class="default">$ypos</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />      </span><span class="comment">// Remove character from string<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);      <br />    }<br />  }<br />  </span><span class="comment">// Return the image<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br />  </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />  </span><span class="comment">// Remove image<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53114">  <div class="votes">
    <div id="Vu53114">
    <a href="/manual/vote-note.php?id=53114&amp;page=function.imagestring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53114">
    <a href="/manual/vote-note.php?id=53114&amp;page=function.imagestring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53114" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#53114" class="name">
  <strong class="user"><em>bpgordon at gmail dot com</em></strong></a><a class="genanchor" href="#53114"> &para;</a><div class="date" title="2005-05-23 04:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53114">
<div class="phpcode"><code><span class="html">This code produces a png image of the text within the query. It autofits to the length of the string. <br />Usage: <a href="http://yoursite.com/text.php?abcdefg+hijk" rel="nofollow" target="_blank">http://yoursite.com/text.php?abcdefg+hijk</a><br /><br />Use + to produce a space in the image. The + can be excaped with a carat (^). Most other symbols work fine in the query string, like the ?.<br /><br /><span class="default">&lt;?php<br />header </span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"QUERY_STRING"</span><span class="keyword">];<br /></span><span class="default">$md5 </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//just so we don't convert valid text into a +<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"^+"</span><span class="keyword">, </span><span class="default">$md5</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//replaces ^+ with long, unnatural string<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"+"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//replaces + with space<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$md5</span><span class="keyword">, </span><span class="string">"+"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//replaces the long, unnatural string with +<br /></span><span class="default">$width  </span><span class="keyword">= </span><span class="default">imagefontwidth</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">) * </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagefontheight</span><span class="keyword">(</span><span class="default">$font</span><span class="keyword">);<br /></span><span class="default">$image </span><span class="keyword">= @</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$black </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">//background<br /></span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);<br /></span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">,  </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagestring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagestring.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
