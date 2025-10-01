<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagefilledrectangle - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagefilledrectangle.php">
 <link rel="shorturl" href="https://www.php.net/imagefilledrectangle">
 <link rel="alternate" href="https://www.php.net/imagefilledrectangle" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagefilledpolygon.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagefilltoborder.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagefilledrectangle.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagefilledrectangle.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagefilledrectangle.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagefilledrectangle.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagefilledrectangle.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagefilledrectangle.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagefilledrectangle.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagefilledrectangle.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagefilledrectangle.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagefilledrectangle.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagefilledrectangle.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draw a filled rectangle" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagefilledrectangle - Manual" />
<meta name="twitter:description" content="Draw a filled rectangle" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagefilledrectangle - Manual" />
<meta itemprop="description" content="Draw a filled rectangle" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draw a filled rectangle" />

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
        <a href="function.imagefilltoborder.php">
          imagefilltoborder &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagefilledpolygon.php">
          &laquo; imagefilledpolygon        </a>
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
            <option value='en/function.imagefilledrectangle.php' selected="selected">English</option>
            <option value='de/function.imagefilledrectangle.php'>German</option>
            <option value='es/function.imagefilledrectangle.php'>Spanish</option>
            <option value='fr/function.imagefilledrectangle.php'>French</option>
            <option value='it/function.imagefilledrectangle.php'>Italian</option>
            <option value='ja/function.imagefilledrectangle.php'>Japanese</option>
            <option value='pt_BR/function.imagefilledrectangle.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagefilledrectangle.php'>Russian</option>
            <option value='tr/function.imagefilledrectangle.php'>Turkish</option>
            <option value='uk/function.imagefilledrectangle.php'>Ukrainian</option>
            <option value='zh/function.imagefilledrectangle.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagefilledrectangle" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagefilledrectangle</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagefilledrectangle</span> &mdash; <span class="dc-title">Draw a filled rectangle</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagefilledrectangle-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagefilledrectangle</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Creates a rectangle filled with <code class="parameter">color</code> in the given
   <code class="parameter">image</code> starting at point 1 and ending at point 2.
   0, 0 is the top left corner of the image.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagefilledrectangle-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">x1</code></dt>
     <dd>
      <p class="para">
       x-coordinate for point 1.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y1</code></dt>
     <dd>
      <p class="para">
       y-coordinate for point 1.
      </p>
     </dd>
    
    
     <dt><code class="parameter">x2</code></dt>
     <dd>
      <p class="para">
       x-coordinate for point 2.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y2</code></dt>
     <dd>
      <p class="para">
       y-coordinate for point 2.
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

 <div class="refsect1 returnvalues" id="refsect1-function.imagefilledrectangle-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagefilledrectangle-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagefilledrectangle-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2887">
    <p><strong>Example #1 <span class="function"><strong>imagefilledrectangle()</strong></span> usage</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 55x30 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">55</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw a white rectangle<br /></span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">25</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'./imagefilledrectangle.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagefilledrectangle.png" alt="Output of example : imagefilledrectangle()" width="55" height="30" />
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagefilledrectangle.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagefilledrectangle%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagefilledrectangle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledrectangle.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="42815">  <div class="votes">
    <div id="Vu42815">
    <a href="/manual/vote-note.php?id=42815&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42815">
    <a href="/manual/vote-note.php?id=42815&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42815" title="68% like this...">
    8
    </div>
  </div>
  <a href="#42815" class="name">
  <strong class="user"><em>michal dot kocarek at seznam dot cz</em></strong></a><a class="genanchor" href="#42815"> &para;</a><div class="date" title="2004-05-30 01:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42815">
<div class="phpcode"><code><span class="html">If you want to draw a rectangle with rounded corners, you can use this simple function... <br />Rectangle starts at x1y1 and ends at x2y2. $radius defines radius of circled corner. <br /><br />&lt;?<br /><br />function ImageRectangleWithRoundedCorners(&amp;$im, $x1, $y1, $x2, $y2, $radius, $color) {<br />// draw rectangle without corners<br />imagefilledrectangle($im, $x1+$radius, $y1, $x2-$radius, $y2, $color);<br />imagefilledrectangle($im, $x1, $y1+$radius, $x2, $y2-$radius, $color);<br />// draw circled corners<br />imagefilledellipse($im, $x1+$radius, $y1+$radius, $radius*2, $radius*2, $color);<br />imagefilledellipse($im, $x2-$radius, $y1+$radius, $radius*2, $radius*2, $color);<br />imagefilledellipse($im, $x1+$radius, $y2-$radius, $radius*2, $radius*2, $color);<br />imagefilledellipse($im, $x2-$radius, $y2-$radius, $radius*2, $radius*2, $color);<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="109787">  <div class="votes">
    <div id="Vu109787">
    <a href="/manual/vote-note.php?id=109787&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109787">
    <a href="/manual/vote-note.php?id=109787&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109787" title="75% like this...">
    4
    </div>
  </div>
  <a href="#109787" class="name">
  <strong class="user"><em>olivier dot pons at google dot mail dot com</em></strong></a><a class="genanchor" href="#109787"> &para;</a><div class="date" title="2012-08-21 09:48"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109787">
<div class="phpcode"><code><span class="html">I wanted to clear an image, and set it to full transparent.
<br />imagefilledrectangle() seems to ignore alpha channel and alpha blending.
<br />Use imagefill() instead:
<br />
<br /><span class="default">&lt;?php
<br />$w </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);
<br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$final</span><span class="keyword">);
<br /></span><span class="default">$grande </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Alpha blending on to use channel alpha
<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$grande</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="comment">// Allocate a transparent color and fill the new image with it.
<br />// Without this the image will have a black background instead
<br />// of being transparent.
<br /></span><span class="default">$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$grande</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);
<br /></span><span class="comment">// transparent alpha will be _ignored_:
<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$grande</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$w</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);
<br /></span><span class="comment">// ok, transparent will be used and set whole alpha channel to transparent:
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$grande</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="17216">  <div class="votes">
    <div id="Vu17216">
    <a href="/manual/vote-note.php?id=17216&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17216">
    <a href="/manual/vote-note.php?id=17216&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17216" title="75% like this...">
    2
    </div>
  </div>
  <a href="#17216" class="name">
  <strong class="user"><em>saramg at uclink dot berkeley dot edu</em></strong></a><a class="genanchor" href="#17216"> &para;</a><div class="date" title="2001-11-29 07:42"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17216">
<div class="phpcode"><code><span class="html">Important quirk to note:
<br />
<br />While imagerectangle will allow you to use a different order of your coordinates (such as bottom-left to upper-right), imagefilledrectangle will only work correctly if you use top-left to bottom-right as indicated in the docs.</span></code></div>
  </div>
 </div>
  <div class="note" id="65557">  <div class="votes">
    <div id="Vu65557">
    <a href="/manual/vote-note.php?id=65557&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65557">
    <a href="/manual/vote-note.php?id=65557&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65557" title="63% like this...">
    3
    </div>
  </div>
  <a href="#65557" class="name">
  <strong class="user"><em>administrador(ensaimada)sphoera(punt)com</em></strong></a><a class="genanchor" href="#65557"> &para;</a><div class="date" title="2006-05-03 03:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65557">
<div class="phpcode"><code><span class="html">I've made a function to make full color gradients:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// The image must be in truecolor mode!!<br />    </span><span class="keyword">function </span><span class="default">gradient_region</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">,</span><span class="default">$src_color</span><span class="keyword">, </span><span class="default">$dest_color</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">){<br />        </span><span class="default">$src_alpha </span><span class="keyword">= (</span><span class="default">$src_color</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br />        </span><span class="default">$src_red </span><span class="keyword">= (</span><span class="default">$src_color </span><span class="keyword">&amp; </span><span class="default">0xFF0000</span><span class="keyword">) &gt;&gt; </span><span class="default">16</span><span class="keyword">;<br />        </span><span class="default">$src_green </span><span class="keyword">= (</span><span class="default">$src_color </span><span class="keyword">&amp; </span><span class="default">0x00FF00</span><span class="keyword">) &gt;&gt; </span><span class="default">8</span><span class="keyword">;<br />        </span><span class="default">$src_blue </span><span class="keyword">= (</span><span class="default">$src_color </span><span class="keyword">&amp; </span><span class="default">0x0000FF</span><span class="keyword">);<br />        <br />        </span><span class="default">$dest_alpha </span><span class="keyword">= (</span><span class="default">$dest_color</span><span class="keyword">) &gt;&gt; </span><span class="default">24</span><span class="keyword">;<br />        </span><span class="default">$dest_red </span><span class="keyword">= (</span><span class="default">$dest_color </span><span class="keyword">&amp; </span><span class="default">0xFF0000</span><span class="keyword">) &gt;&gt; </span><span class="default">16</span><span class="keyword">;<br />        </span><span class="default">$dest_green </span><span class="keyword">= (</span><span class="default">$dest_color </span><span class="keyword">&amp; </span><span class="default">0x00FF00</span><span class="keyword">) &gt;&gt; </span><span class="default">8</span><span class="keyword">;<br />        </span><span class="default">$dest_blue </span><span class="keyword">= (</span><span class="default">$dest_color </span><span class="keyword">&amp; </span><span class="default">0x0000FF</span><span class="keyword">);<br />            <br />            <br />        </span><span class="default">$inc_alpha </span><span class="keyword">= (</span><span class="default">$dest_alpha </span><span class="keyword">- </span><span class="default">$src_alpha</span><span class="keyword">) / </span><span class="default">$width</span><span class="keyword">;<br />        </span><span class="default">$inc_red </span><span class="keyword">= (</span><span class="default">$dest_red </span><span class="keyword">- </span><span class="default">$src_red</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">;<br />        </span><span class="default">$inc_green </span><span class="keyword">= (</span><span class="default">$dest_green </span><span class="keyword">- </span><span class="default">$src_green</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">;<br />        </span><span class="default">$inc_blue </span><span class="keyword">= (</span><span class="default">$dest_blue </span><span class="keyword">- </span><span class="default">$src_blue</span><span class="keyword">)/</span><span class="default">$width</span><span class="keyword">;<br />        <br />        </span><span class="comment">// If you need more performance, the step can be increased<br />        </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$src_alpha </span><span class="keyword">+= </span><span class="default">$inc_alpha</span><span class="keyword">;<br />            </span><span class="default">$src_blue </span><span class="keyword">+= </span><span class="default">$inc_blue</span><span class="keyword">;<br />            </span><span class="default">$src_green </span><span class="keyword">+= </span><span class="default">$inc_green</span><span class="keyword">;<br />            </span><span class="default">$src_red </span><span class="keyword">+= </span><span class="default">$inc_red</span><span class="keyword">;<br />            </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />                </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,         <br />                </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">+</span><span class="default">$height</span><span class="keyword">,<br />                </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,<br />                </span><span class="default">$src_red</span><span class="keyword">,</span><span class="default">$src_green</span><span class="keyword">,</span><span class="default">$src_blue</span><span class="keyword">,</span><span class="default">$src_alpha</span><span class="keyword">));<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />More functions at <a href="http://www.sphoera.com" rel="nofollow" target="_blank">http://www.sphoera.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="71788">  <div class="votes">
    <div id="Vu71788">
    <a href="/manual/vote-note.php?id=71788&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71788">
    <a href="/manual/vote-note.php?id=71788&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71788" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71788" class="name">
  <strong class="user"><em>Google</em></strong></a><a class="genanchor" href="#71788"> &para;</a><div class="date" title="2006-12-15 01:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71788">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//index.php <br />//set your year, month, daym hour, minute, second you want to cuuntdown to.<br /><br />//ONLY CHANGE FROM HERE<br /></span><span class="default">$year</span><span class="keyword">=</span><span class="string">"2006"</span><span class="keyword">;<br /></span><span class="default">$month</span><span class="keyword">=</span><span class="string">"12"</span><span class="keyword">;<br /></span><span class="default">$day</span><span class="keyword">=</span><span class="string">"25"</span><span class="keyword">;<br /></span><span class="default">$hour</span><span class="keyword">=</span><span class="string">"00"</span><span class="keyword">;<br /></span><span class="default">$minute</span><span class="keyword">=</span><span class="string">"00"</span><span class="keyword">;<br /></span><span class="default">$second</span><span class="keyword">=</span><span class="string">"00"</span><span class="keyword">;<br /></span><span class="default">$event</span><span class="keyword">=</span><span class="string">"Christmas Day 2006"</span><span class="keyword">;<br /><br /></span><span class="default">$time</span><span class="keyword">=</span><span class="default">mktime</span><span class="keyword">(</span><span class="default">$hour</span><span class="keyword">, </span><span class="default">$minute</span><span class="keyword">, </span><span class="default">$second</span><span class="keyword">, </span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);<br /><br /></span><span class="default">$timecurrent</span><span class="keyword">=</span><span class="default">date</span><span class="keyword">(</span><span class="string">'U'</span><span class="keyword">);<br /></span><span class="default">$cdtime</span><span class="keyword">=</span><span class="default">$time</span><span class="keyword">-</span><span class="default">$timecurrent</span><span class="keyword">;<br /></span><span class="default">$cdmonths</span><span class="keyword">=</span><span class="default">$cddays</span><span class="keyword">/</span><span class="default">30</span><span class="keyword">;<br /></span><span class="default">$cdyears</span><span class="keyword">=</span><span class="default">$cddays</span><span class="keyword">/</span><span class="default">365</span><span class="keyword">;<br /><br /></span><span class="comment">//Used this case only...<br /></span><span class="default">$cdminutes</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$cdtime</span><span class="keyword">/</span><span class="default">60</span><span class="keyword">);<br /></span><span class="comment">//cdtime is seconds<br /></span><span class="default">$cdhours</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$cdtime</span><span class="keyword">/</span><span class="default">3600</span><span class="keyword">);<br /></span><span class="default">$cddays</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$cdhours</span><span class="keyword">/</span><span class="default">24</span><span class="keyword">);<br /><br /></span><span class="comment">//String the date<br /></span><span class="default">$currentdate </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'l, F j, Y'</span><span class="keyword">);<br /></span><span class="comment">// Set the content-type<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="comment">// Create the image<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">701</span><span class="keyword">, </span><span class="default">355</span><span class="keyword">);<br /><br /></span><span class="comment">//Temp BGCOLOR (center of c-finder)<br /></span><span class="default">$bg1 </span><span class="keyword">= </span><span class="default">208</span><span class="keyword">;<br /></span><span class="default">$bg2 </span><span class="keyword">= </span><span class="default">130</span><span class="keyword">;<br /></span><span class="default">$bg3 </span><span class="keyword">= </span><span class="default">208</span><span class="keyword">;<br /><br /></span><span class="default">$s1 </span><span class="keyword">= </span><span class="default">$bg1 </span><span class="keyword">- </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$s2 </span><span class="keyword">= </span><span class="default">$bg2 </span><span class="keyword">- </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$s3 </span><span class="keyword">= </span><span class="default">$bg3 </span><span class="keyword">- </span><span class="default">20</span><span class="keyword">;<br /><br /></span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">$bg1 </span><span class="keyword">+ </span><span class="default">30</span><span class="keyword">;<br /></span><span class="default">$t2 </span><span class="keyword">= </span><span class="default">$bg2 </span><span class="keyword">+ </span><span class="default">30</span><span class="keyword">;<br /></span><span class="default">$t3 </span><span class="keyword">= </span><span class="default">$bg3 </span><span class="keyword">+ </span><span class="default">30</span><span class="keyword">;<br /><br /></span><span class="default">$cArray</span><span class="keyword">=array();<br />    </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$bg1</span><span class="keyword">, </span><span class="default">$bg2</span><span class="keyword">, </span><span class="default">$bg3</span><span class="keyword">); </span><span class="comment">//Background<br />    </span><span class="default">$c8 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">$bg2</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">); </span><span class="comment">//Background<br />    </span><span class="default">$c2 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$s1</span><span class="keyword">, </span><span class="default">$s2</span><span class="keyword">, </span><span class="default">$s3</span><span class="keyword">); </span><span class="comment">//Shadow<br />    </span><span class="default">$c3 </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$t1</span><span class="keyword">, </span><span class="default">$t2</span><span class="keyword">, </span><span class="default">$t3</span><span class="keyword">); </span><span class="comment">//Text<br /><br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">701</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">);<br /><br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">701</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">$c8</span><span class="keyword">);<br /><br /></span><span class="comment">// The text to draw<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">;<br /></span><span class="comment">// Replace path by your own font path<br /></span><span class="default">$fnum </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);<br /></span><span class="default">$font </span><span class="keyword">= </span><span class="string">"/f/font (</span><span class="default">$fnum</span><span class="string">)"</span><span class="keyword">;<br /><br /></span><span class="comment">// Add some shadow to the text<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">42</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"Today is:"</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"Today is:"</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">92</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"...</span><span class="default">$currentdate</span><span class="string">..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"...</span><span class="default">$currentdate</span><span class="string">..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">142</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"So there are exactly:"</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">140</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"So there are exactly:"</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">192</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cddays</span><span class="string"> with just..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">190</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cddays</span><span class="string"> days with just..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">242</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cdminutes</span><span class="string"> minutes and only..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">240</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cdminutes</span><span class="string"> minutes and only..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">292</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cdseconds</span><span class="string"> seconds until..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">290</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cdseconds</span><span class="string"> seconds until..."</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">342</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"- + </span><span class="default">$event</span><span class="string"> + -"</span><span class="keyword">);<br /></span><span class="default">imagettftext</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">28</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">340</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="string">"- + </span><span class="default">$event</span><span class="string"> + -"</span><span class="keyword">);<br /><br /></span><span class="comment">// Using imagepng() results in clearer text compared with imagejpeg()<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70731">  <div class="votes">
    <div id="Vu70731">
    <a href="/manual/vote-note.php?id=70731&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70731">
    <a href="/manual/vote-note.php?id=70731&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70731" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70731" class="name">
  <strong class="user"><em>info at 555webdesign dot com</em></strong></a><a class="genanchor" href="#70731"> &para;</a><div class="date" title="2006-10-25 10:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70731">
<div class="phpcode"><code><span class="html">Thanks terereese. it took me over two hours to figure that one out.<br />it worked locally: imagefilledrectangle(imagresource, int x1, int x2, int y1, inty2, color)<br /><br />BUT remote on my provider only this worked: imagefilledrectangle(imagresource, int x1, int y2, int x1, inty1, color)<br /><br />Any ideas why and where?</span></code></div>
  </div>
 </div>
  <div class="note" id="113374">  <div class="votes">
    <div id="Vu113374">
    <a href="/manual/vote-note.php?id=113374&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113374">
    <a href="/manual/vote-note.php?id=113374&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113374" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#113374" class="name">
  <strong class="user"><em>Darren Edale</em></strong></a><a class="genanchor" href="#113374"> &para;</a><div class="date" title="2013-10-03 09:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113374">
<div class="phpcode"><code><span class="html">The issue with filling using a rectangle is caused in your code by having alpha blending turned on before rendering the filled rectangle. Alpha blending causes what you draw on the image to be blended with whatever is already on the image according to the alpha channels of each. Therefore, because blending is on, and because the rectangle's fill colour is completely transparent, the blending of the existing image content with the transparent rectangle results in no change to the existing image.<br /><br />With blending off, when drawing to the image what you draw completely replaces what is already there. So, drawing the rectangle in this case results in the original content of the image being completely replaced with a transparent rectangle.<br /><br />So in order to use imagefilledrectangle() to erase an image to transparency, you need to turn off alpha blending first.<br /><br />I guess the reason imagefill() works with alpha blending on is because it does not perform any alpha blending - it always works without alpha blending regardless of the setting. I suspect there are reasons for this to do with alpha channels complicating edge detection.<br /><br />I would recommend using imagefilledrectangle() to create a blank transparent image resource instead of imagefill() because it is undoubtedly much faster in probably all cases.<br /><br />Here is some example code to blank an image to transparent, assuming $im is a successfully created image:<br /><br /><span class="default">&lt;?php<br />$transparent </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, </span><span class="default">$imagesy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, </span><span class="default">$transparent</span><span class="keyword">);<br /></span><span class="default">imagecolordeallocate</span><span class="keyword">(</span><span class="default">$transparent</span><span class="keyword">);<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83036">  <div class="votes">
    <div id="Vu83036">
    <a href="/manual/vote-note.php?id=83036&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83036">
    <a href="/manual/vote-note.php?id=83036&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83036" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#83036" class="name">
  <strong class="user"><em>mike at delenk dot net</em></strong></a><a class="genanchor" href="#83036"> &para;</a><div class="date" title="2008-05-07 12:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83036">
<div class="phpcode"><code><span class="html">The examples in function imagettfbbox() gave me many problems because of misunderstand of how the text is positionned in the box.<br /><br />So I did a new example:<br />- writing a text<br />- in the correct position in its box<br />- with a padding around<br /><br />Enjoy !<br />Mike<br /><br />&lt;?<br /><br />// some settings<br />    $angle = 0;<br />    $text = 'Ühg 0123456789';<br />    $font_face = dirname(__FILE__).'/verdana.ttf'; // put the file in the same directory<br />    $font_size = 9; //(int) pixels in GD 1, or points in GD 2<br /><br />// retrieves box frame<br />    $box = imagettfbbox($font_size, 0, $font_face, $text);<br />    $bottom_left_x = $box[0]; // used below<br />    $bottom_left_y = $box[1]; // used below<br />    $bottom_right_x = $box[2]; // used below<br />    $bottom_right_y = $box[3];<br />    $top_right_x = $box[4];<br />    $top_right_y = $box[5];<br />    $top_left_x = $box[6];<br />    $top_left_y = $box[7]; // used below<br /><br />// define width and height of the text box<br />    $box_w = abs($bottom_left_x) + abs($bottom_right_x);<br />    $box_h = abs($bottom_left_y) + abs($top_left_y);<br /><br />// add padding<br />    $padding_x = 5;<br />    $padding_y = 5;<br />    $box_w = $box_w + 2 * $padding_x;<br />    $box_h = $box_h + 2 * $padding_y;<br /><br />// origin of the text = baseline of the first char<br />    $text_x = abs($bottom_left_x) -1 + $padding_x;<br />    $text_y = $box_h -1 - abs($bottom_left_y) - $padding_y;<br />    <br />// mysterious correction for the characters going low like pgjq<br />    if(abs($bottom_left_y) &lt;= 1) $box_h--;<br /><br />// create the image<br />    $img = imagecreatetruecolor($box_w, $box_h);<br /> <br />// define some colors<br />    $white = imagecolorallocate($img,255,255,255);<br />    $black = imagecolorallocate($img,0,0,0);<br />    $lightgrey = imagecolorallocate($img, 200, 200, 200);<br />    $grey = imagecolorallocate($img,100,100,100);<br />    $yellow = imagecolorallocate($img, 0xFF, 0xFF, 0x00);<br /> <br />// attribute colors<br />    $font_color =  $black;<br />    $padding_color =  $lightgrey;<br />    $background_color =  $yellow;<br /> <br />// fill image with background color<br />    imagefill($img, 0, 0, $background_color);<br /><br />// fill image with padding color<br />    imagefilledrectangle($img, 0, 0, $box_w, $padding_y - 1, $padding_color); // top<br />    imagefilledrectangle($img, 0, 0, $padding_x - 1, $box_h - 1, $padding_color); // left<br />    imagefilledrectangle($img, 0, $box_h - $padding_y -1, $box_w, $box_h - 1, $padding_color); // bottom<br />    imagefilledrectangle($img, $box_w - $padding_x, 0, $box_w - 1, $box_h - 1, $padding_color); // right<br /><br />//write text<br />imagettftext($img, $font_size, 0, $text_x, $text_y, $font_color, $font_face, $text);<br /><br />//rotate image<br />    if ($angle &gt; 0) $img = imagerotate($img, $angle, $white);<br /><br />// send header<br />    header("Content-type: image/gif");<br /> <br />//sends image<br />    imagegif($img);<br />    imagedestroy($img);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="39123">  <div class="votes">
    <div id="Vu39123">
    <a href="/manual/vote-note.php?id=39123&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39123">
    <a href="/manual/vote-note.php?id=39123&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39123" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#39123" class="name">
  <strong class="user"><em>booga</em></strong></a><a class="genanchor" href="#39123"> &para;</a><div class="date" title="2004-01-17 05:48"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39123">
<div class="phpcode"><code><span class="html">a simple way of using imagerectangle to create a percentage bar<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//this needs to reside in its own php page<br />//you can include that php page in your html as you would an image:<br />//&lt;IMG SRC="ratingpng.php?rating=25.2" border="0"&gt;<br /><br /></span><span class="keyword">function </span><span class="default">drawRating</span><span class="keyword">(</span><span class="default">$rating</span><span class="keyword">) {<br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">102</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />    </span><span class="default">$back </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">$border </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">$red </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,</span><span class="default">60</span><span class="keyword">,</span><span class="default">75</span><span class="keyword">);<br />    </span><span class="default">$fill </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">44</span><span class="keyword">,</span><span class="default">81</span><span class="keyword">,</span><span class="default">150</span><span class="keyword">);<br />    </span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">101</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">$back</span><span class="keyword">);<br />    </span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$rating</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">$fill</span><span class="keyword">);<br />    </span><span class="default">ImageRectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">101</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">$border</span><span class="keyword">);<br />    </span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />}<br /><br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">drawRating</span><span class="keyword">(</span><span class="default">$rating</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68066">  <div class="votes">
    <div id="Vu68066">
    <a href="/manual/vote-note.php?id=68066&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68066">
    <a href="/manual/vote-note.php?id=68066&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68066" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#68066" class="name">
  <strong class="user"><em>terereese at hotmail dot com</em></strong></a><a class="genanchor" href="#68066"> &para;</a><div class="date" title="2006-07-11 08:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68066">
<div class="phpcode"><code><span class="html">I would like to inform developers about a problem I encountered when trying to use imagefilledrectangle.<br /><br />I noted that the order in which the start and end y coordinates are listed is extremely important.<br />as in the statements below.<br />if($this-&gt;d_values[$i]['unit_value'] &lt; 0)<br />imagefilledrectangle($this-&gt;img,$position_x, $start_y , $end_x, $end_y ,$d_color);            <br />else                <br />imagefilledrectangle($this-&gt;img, $position_x,$ end_y , $end_x, $start_y,$d_colour);            <br />            <br /><br />Thanks</span></code></div>
  </div>
 </div>
  <div class="note" id="57743">  <div class="votes">
    <div id="Vu57743">
    <a href="/manual/vote-note.php?id=57743&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57743">
    <a href="/manual/vote-note.php?id=57743&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57743" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#57743" class="name">
  <strong class="user"><em>me [a.t.] forestfactory [d.o.t.] de</em></strong></a><a class="genanchor" href="#57743"> &para;</a><div class="date" title="2005-10-12 04:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57743">
<div class="phpcode"><code><span class="html">As of PHP 5, it seems to be no longer necessary to draw the rectangle from the upper left to the lower right corner. This led me into big trouble porting a script developed under PHP 5 to PHP 4.</span></code></div>
  </div>
 </div>
  <div class="note" id="96871">  <div class="votes">
    <div id="Vu96871">
    <a href="/manual/vote-note.php?id=96871&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96871">
    <a href="/manual/vote-note.php?id=96871&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96871" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#96871" class="name">
  <strong class="user"><em>Mice32</em></strong></a><a class="genanchor" href="#96871"> &para;</a><div class="date" title="2010-03-19 04:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96871">
<div class="phpcode"><code><span class="html">That script draws Serpinski's carpet:
<br />
<br /><span class="default">&lt;?php
<br />    set_time_limit</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />
<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;        </span><span class="comment">// Iterations
<br />    </span><span class="default">$xy </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">;    </span><span class="comment">// Picture size
<br />
<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$xy</span><span class="keyword">, </span><span class="default">$xy</span><span class="keyword">);
<br />
<br />    </span><span class="default">$white </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br />
<br />    </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$xy</span><span class="keyword">, </span><span class="default">$xy</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);
<br />    function </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">) {
<br />        global </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">;
<br />
<br />        if(</span><span class="default">$n </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) return;
<br />
<br />        </span><span class="default">$a1 </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$a </span><span class="keyword">/ </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">$c </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">;
<br />        </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">/ </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$c </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">;
<br />        </span><span class="default">$b1 </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$b </span><span class="keyword">/ </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">$d </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">;
<br />        </span><span class="default">$d1 </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">/ </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">2 </span><span class="keyword">* </span><span class="default">$d </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">;
<br /> 
<br />        </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">);
<br />
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">drawCarpet</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$d1</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);
<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100111">  <div class="votes">
    <div id="Vu100111">
    <a href="/manual/vote-note.php?id=100111&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100111">
    <a href="/manual/vote-note.php?id=100111&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100111" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#100111" class="name">
  <strong class="user"><em>Tobi</em></strong></a><a class="genanchor" href="#100111"> &para;</a><div class="date" title="2010-09-25 02:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100111">
<div class="phpcode"><code><span class="html">It looks like there are waves beetween the points, but it's straight.<br /><br /><span class="default">&lt;?php<br />$maxwert </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">;<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$maxwert</span><span class="keyword">, </span><span class="default">$maxwert</span><span class="keyword">);<br /></span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />   for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$maxwert</span><span class="keyword">;</span><span class="default">$y </span><span class="keyword">+= </span><span class="default">$size</span><span class="keyword">){<br />     for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$maxwert</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">+=</span><span class="default">$size</span><span class="keyword">){<br />      </span><span class="default">$r </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />      </span><span class="default">$g </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />      </span><span class="default">$b </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />      </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$g</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />      <br />      </span><span class="default">imagefilledrectangle </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$size </span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">+</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />     <br />     }<br />   }                  <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">); <br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20333">  <div class="votes">
    <div id="Vu20333">
    <a href="/manual/vote-note.php?id=20333&amp;page=function.imagefilledrectangle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20333">
    <a href="/manual/vote-note.php?id=20333&amp;page=function.imagefilledrectangle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20333" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#20333" class="name">
  <strong class="user"><em>ivank at 2xtreme dot net</em></strong></a><a class="genanchor" href="#20333"> &para;</a><div class="date" title="2002-03-30 04:34"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20333">
<div class="phpcode"><code><span class="html">As stated above, it needs to go from the top left corner to the bottom right corner. Just use this to flip it if neccessary:<br /><br />// flip them if neccessary (x3, y3 are temp vars)<br />if($x1 &gt; $x2) { $x3 = $x2; $x2 = $x1; $x1 = $x3; }<br />if($y1 &gt; $y2) { $y3 = $y2; $y2 = $y1; $y1 = $y3; }<br />ImageFilledRectangle($im, $x1, $y1, $x2, $y2, $color);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagefilledrectangle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagefilledrectangle.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
