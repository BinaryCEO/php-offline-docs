<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagedashedline - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagedashedline.php">
 <link rel="shorturl" href="https://www.php.net/imagedashedline">
 <link rel="alternate" href="https://www.php.net/imagedashedline" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecropauto.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagedestroy.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagedashedline.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagedashedline.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagedashedline.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagedashedline.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagedashedline.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagedashedline.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagedashedline.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagedashedline.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagedashedline.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagedashedline.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagedashedline.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Draw a dashed line" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagedashedline - Manual" />
<meta name="twitter:description" content="Draw a dashed line" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagedashedline - Manual" />
<meta itemprop="description" content="Draw a dashed line" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Draw a dashed line" />

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
        <a href="function.imagedestroy.php">
          imagedestroy &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecropauto.php">
          &laquo; imagecropauto        </a>
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
            <option value='en/function.imagedashedline.php' selected="selected">English</option>
            <option value='de/function.imagedashedline.php'>German</option>
            <option value='es/function.imagedashedline.php'>Spanish</option>
            <option value='fr/function.imagedashedline.php'>French</option>
            <option value='it/function.imagedashedline.php'>Italian</option>
            <option value='ja/function.imagedashedline.php'>Japanese</option>
            <option value='pt_BR/function.imagedashedline.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagedashedline.php'>Russian</option>
            <option value='tr/function.imagedashedline.php'>Turkish</option>
            <option value='uk/function.imagedashedline.php'>Ukrainian</option>
            <option value='zh/function.imagedashedline.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagedashedline" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagedashedline</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagedashedline</span> &mdash; <span class="dc-title">Draw a dashed line</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagedashedline-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagedashedline</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y1</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$x2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$y2</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function is deprecated. Use combination of
   <span class="function"><a href="function.imagesetstyle.php" class="function">imagesetstyle()</a></span> and <span class="function"><a href="function.imageline.php" class="function">imageline()</a></span>
   instead.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagedashedline-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">x1</code></dt>
     <dd>
      <p class="para">
       Upper left x coordinate.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y1</code></dt>
     <dd>
      <p class="para">
       Upper left y coordinate 0, 0 is the top left corner of the image.
      </p>
     </dd>
    
    
     <dt><code class="parameter">x2</code></dt>
     <dd>
      <p class="para">
       Bottom right x coordinate.
      </p>
     </dd>
    
    
     <dt><code class="parameter">y2</code></dt>
     <dd>
      <p class="para">
       Bottom right y coordinate.
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

 <div class="refsect1 returnvalues" id="refsect1-function.imagedashedline-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagedashedline-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagedashedline-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2879">
    <p><strong>Example #1 <span class="function"><strong>imagedashedline()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 100x100 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw a vertical dashed line<br /></span><span style="color: #0000BB">imagedashedline</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">25</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">, </span><span style="color: #0000BB">$white</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'./dashedline.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/21009b70229598c6a80eef8b45bf282b-imagedashedline.png" alt="Output of example : imagedashedline()" width="100" height="100" />
     </div>
    </div>
   </div>
   <div class="example" id="example-2880">
    <p><strong>Example #2 Alternative to <span class="function"><strong>imagedashedline()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 100x100 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Define our style: First 4 pixels is white and the <br />// next 4 is transparent. This creates the dashed line effect<br /></span><span style="color: #0000BB">$style </span><span style="color: #007700">= Array(<br />                </span><span style="color: #0000BB">$white</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">$white</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">$white</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">$white</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">IMG_COLOR_TRANSPARENT</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">IMG_COLOR_TRANSPARENT</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">IMG_COLOR_TRANSPARENT</span><span style="color: #007700">, <br />                </span><span style="color: #0000BB">IMG_COLOR_TRANSPARENT<br />                </span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagesetstyle</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$style</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Draw the dashed line<br /></span><span style="color: #0000BB">imageline</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">25</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">, </span><span style="color: #0000BB">75</span><span style="color: #007700">, </span><span style="color: #0000BB">IMG_COLOR_STYLED</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Save the image<br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #DD0000">'./imageline.png'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagedashedline-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagesetstyle.php" class="function" rel="rdfs-seeAlso">imagesetstyle()</a> - Set the style for line drawing</span></li>
   <li><span class="function"><a href="function.imageline.php" class="function" rel="rdfs-seeAlso">imageline()</a> - Draw a line</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagedashedline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagedashedline%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagedashedline&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagedashedline.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99437">  <div class="votes">
    <div id="Vu99437">
    <a href="/manual/vote-note.php?id=99437&amp;page=function.imagedashedline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99437">
    <a href="/manual/vote-note.php?id=99437&amp;page=function.imagedashedline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99437" title="66% like this...">
    1
    </div>
  </div>
  <a href="#99437" class="name">
  <strong class="user"><em>tgabor72 at freemail dot hu</em></strong></a><a class="genanchor" href="#99437"> &para;</a><div class="date" title="2010-08-17 11:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99437">
<div class="phpcode"><code><span class="html">You can use the imagepatternedline() function with extra features instead of imagedashedline() to give a visible dashedlines and other any kind of patterned lines on your images. The routine also manages the thickness of the line. Have fun!
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// imagepatternedline() function
<br />// Routine was developed to draw any kind of straight line with thickness. Routine uses imageline() function to draw line.
<br />// Parameters are (similar to imageline() function):
<br />//   $image: (resource) imagefile
<br />//   $xstart, $ystart: (int) x,y coordinates for first point
<br />//   $xend, $yend: (int) x,y coordinates for last point
<br />//   $color: (int) color identifier that created with imagecolorallocate()
<br />// extra parameters:
<br />//   $thickness: (int) thickness of line in pixel
<br />//   $pattern: (string) pattern of line, which repeats continuously while line is being drawed.
<br />//   If there is '1' in the pattern that means the actual dot of line is visible,
<br />//   '0' means dot is not visible (space between two line elements).
<br />//   All characters regard for one pixel. Default: 1 dot wide dashed line with 4-4 dots and spaces.
<br />// Examples for pattern:
<br />// "1" or "" continuous line
<br />// "10" close dotline
<br />// "10000" dotline
<br />// "111111110000001100000011111111" dotline for design drawing
<br />// "111111111100000011000000110000001111111111" double dotline
<br />// some examples for using imagepatternedline():
<br />// imagepatternedline($image,300,300,442,442,$color,200,""); // a square with 200 length of edge and rotated 45 degrees
<br />// imagepatternedline($image,100,200,289,200,$color,100, 
<br />//  "11001100000011001111000011001111110000001100001100"
<br />// ."00001111001100111100000011000000110000110011001100"
<br />// ."11000011111100111111000011001111001111000011110000"
<br />// ."1111001111110011000011000000001100110011"); // barcode 
<br />
<br /></span><span class="keyword">function </span><span class="default">imagepatternedline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$xstart</span><span class="keyword">, </span><span class="default">$ystart</span><span class="keyword">, </span><span class="default">$xend</span><span class="keyword">, </span><span class="default">$yend</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$thickness</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$pattern</span><span class="keyword">=</span><span class="string">"11000011"</span><span class="keyword">) {
<br />   </span><span class="default">$pattern</span><span class="keyword">=(!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">)) ? </span><span class="string">"1" </span><span class="keyword">: </span><span class="default">$pattern</span><span class="keyword">;
<br />   </span><span class="default">$x</span><span class="keyword">=</span><span class="default">$xend</span><span class="keyword">-</span><span class="default">$xstart</span><span class="keyword">;
<br />   </span><span class="default">$y</span><span class="keyword">=</span><span class="default">$yend</span><span class="keyword">-</span><span class="default">$ystart</span><span class="keyword">;
<br />   </span><span class="default">$length</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">sqrt</span><span class="keyword">(</span><span class="default">pow</span><span class="keyword">((</span><span class="default">$x</span><span class="keyword">),</span><span class="default">2</span><span class="keyword">)+</span><span class="default">pow</span><span class="keyword">((</span><span class="default">$y</span><span class="keyword">),</span><span class="default">2</span><span class="keyword">)));
<br />   </span><span class="default">$fullpattern</span><span class="keyword">=</span><span class="default">$pattern</span><span class="keyword">;
<br />   while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fullpattern</span><span class="keyword">)&lt;</span><span class="default">$length</span><span class="keyword">) </span><span class="default">$fullpattern</span><span class="keyword">.=</span><span class="default">$pattern</span><span class="keyword">;
<br />   if (!</span><span class="default">$length</span><span class="keyword">) {
<br />      if (</span><span class="default">$fullpattern</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) </span><span class="default">imagefilledellipse</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$xstart</span><span class="keyword">, </span><span class="default">$ystart</span><span class="keyword">, </span><span class="default">$thickness</span><span class="keyword">, </span><span class="default">$thickness</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />      return;
<br />   }
<br />   </span><span class="default">$x1</span><span class="keyword">=</span><span class="default">$xstart</span><span class="keyword">;
<br />   </span><span class="default">$y1</span><span class="keyword">=</span><span class="default">$ystart</span><span class="keyword">;
<br />   </span><span class="default">$x2</span><span class="keyword">=</span><span class="default">$x1</span><span class="keyword">;
<br />   </span><span class="default">$y2</span><span class="keyword">=</span><span class="default">$y1</span><span class="keyword">;
<br />   </span><span class="default">$mx</span><span class="keyword">=</span><span class="default">$x</span><span class="keyword">/</span><span class="default">$length</span><span class="keyword">;
<br />   </span><span class="default">$my</span><span class="keyword">=</span><span class="default">$y</span><span class="keyword">/</span><span class="default">$length</span><span class="keyword">;
<br />   </span><span class="default">$line</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />   for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$length</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){
<br />      if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)==</span><span class="default">0 </span><span class="keyword">or </span><span class="default">$fullpattern</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) {
<br />         </span><span class="default">$line</span><span class="keyword">.=</span><span class="default">$fullpattern</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />      }else{
<br />         </span><span class="default">$x2</span><span class="keyword">+=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)*</span><span class="default">$mx</span><span class="keyword">;
<br />         </span><span class="default">$y2</span><span class="keyword">+=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)*</span><span class="default">$my</span><span class="keyword">;
<br />         if (</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$mx</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y2</span><span class="keyword">-</span><span class="default">$my</span><span class="keyword">), </span><span class="default">$color</span><span class="keyword">);
<br />         </span><span class="default">$k</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />         for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$thickness</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">++) {
<br />            </span><span class="default">$k1</span><span class="keyword">=-((</span><span class="default">$k</span><span class="keyword">-</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$my</span><span class="keyword">)*(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">2</span><span class="keyword">;
<br />            </span><span class="default">$k2</span><span class="keyword">= ((</span><span class="default">$k</span><span class="keyword">-</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$mx</span><span class="keyword">)*(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">2</span><span class="keyword">;
<br />            </span><span class="default">$k</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">-</span><span class="default">$k</span><span class="keyword">;
<br />            if (</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) {
<br />               </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$mx</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y2</span><span class="keyword">-</span><span class="default">$my</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />               if (</span><span class="default">$y</span><span class="keyword">) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$mx</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y2</span><span class="keyword">-</span><span class="default">$my</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />               if (</span><span class="default">$x</span><span class="keyword">) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">-</span><span class="default">$mx</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y2</span><span class="keyword">-</span><span class="default">$my</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />            }
<br />         }
<br />         </span><span class="default">$x1</span><span class="keyword">=</span><span class="default">$x2</span><span class="keyword">;
<br />         </span><span class="default">$y1</span><span class="keyword">=</span><span class="default">$y2</span><span class="keyword">;
<br />         </span><span class="default">$line</span><span class="keyword">=</span><span class="default">$fullpattern</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />      }
<br />   }
<br />   </span><span class="default">$x2</span><span class="keyword">+=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)*</span><span class="default">$mx</span><span class="keyword">;
<br />   </span><span class="default">$y2</span><span class="keyword">+=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)*</span><span class="default">$my</span><span class="keyword">;
<br />   if (</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xend</span><span class="keyword">), </span><span class="default">round</span><span class="keyword">(</span><span class="default">$yend</span><span class="keyword">), </span><span class="default">$color</span><span class="keyword">);
<br />   </span><span class="default">$k</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />   for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$thickness</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">++) {
<br />      </span><span class="default">$k1</span><span class="keyword">=-((</span><span class="default">$k</span><span class="keyword">-</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$my</span><span class="keyword">)*(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">2</span><span class="keyword">;
<br />      </span><span class="default">$k2</span><span class="keyword">= ((</span><span class="default">$k</span><span class="keyword">-</span><span class="default">0.5</span><span class="keyword">)*</span><span class="default">$mx</span><span class="keyword">)*(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">*</span><span class="default">0.5</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">2</span><span class="keyword">;
<br />      </span><span class="default">$k</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">-</span><span class="default">$k</span><span class="keyword">;
<br />      if (</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) {
<br />         </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xend</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$yend</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />         if (</span><span class="default">$y</span><span class="keyword">) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xend</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$yend</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />         if (</span><span class="default">$x</span><span class="keyword">) </span><span class="default">imageline</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$x1</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$y1</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$xend</span><span class="keyword">)+</span><span class="default">$k1</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$yend</span><span class="keyword">)+</span><span class="default">$k2</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />      }
<br />   }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61989">  <div class="votes">
    <div id="Vu61989">
    <a href="/manual/vote-note.php?id=61989&amp;page=function.imagedashedline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61989">
    <a href="/manual/vote-note.php?id=61989&amp;page=function.imagedashedline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61989" title="66% like this...">
    1
    </div>
  </div>
  <a href="#61989" class="name">
  <strong class="user"><em>ProfessorNeo at gmx dot de</em></strong></a><a class="genanchor" href="#61989"> &para;</a><div class="date" title="2006-02-16 12:07"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61989">
<div class="phpcode"><code><span class="html">The bug reported by 'michi at marel dot at' also exists in PHP version 5.1.1. This functions just works with vertical lines!</span></code></div>
  </div>
 </div>
  <div class="note" id="109763">  <div class="votes">
    <div id="Vu109763">
    <a href="/manual/vote-note.php?id=109763&amp;page=function.imagedashedline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109763">
    <a href="/manual/vote-note.php?id=109763&amp;page=function.imagedashedline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109763" title="50% like this...">
    0
    </div>
  </div>
  <a href="#109763" class="name">
  <strong class="user"><em>ihsanduvac at gmail dot com</em></strong></a><a class="genanchor" href="#109763"> &para;</a><div class="date" title="2012-08-17 06:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109763">
<div class="phpcode"><code><span class="html">It doesn't work for horizontal lines. Use imagesetstyle()</span></code></div>
  </div>
 </div>
  <div class="note" id="54728">  <div class="votes">
    <div id="Vu54728">
    <a href="/manual/vote-note.php?id=54728&amp;page=function.imagedashedline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54728">
    <a href="/manual/vote-note.php?id=54728&amp;page=function.imagedashedline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54728" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54728" class="name">
  <strong class="user"><em>alien-scripts.de</em></strong></a><a class="genanchor" href="#54728"> &para;</a><div class="date" title="2005-07-13 02:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54728">
<div class="phpcode"><code><span class="html">I make my own dashedline:<br /><br />&lt;?<br />for($l=50;$l&lt;=550;$l+=5)<br />   {<br />    if($da == 0) { $da = 1; }<br />    elseif($da == 1){<br />    imageline($bild,$l,50,$l+5,50,$green);<br />    $da = 0; }<br />   }<br />?&gt;<br /><br />$l is the x-value <br />and we have a dashed line :)</span></code></div>
  </div>
 </div>
  <div class="note" id="37545">  <div class="votes">
    <div id="Vu37545">
    <a href="/manual/vote-note.php?id=37545&amp;page=function.imagedashedline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37545">
    <a href="/manual/vote-note.php?id=37545&amp;page=function.imagedashedline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37545" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#37545" class="name">
  <strong class="user"><em>michi at marel dot at</em></strong></a><a class="genanchor" href="#37545"> &para;</a><div class="date" title="2003-11-19 06:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37545">
<div class="phpcode"><code><span class="html">There's a bug till PHP 4.0.4 in this function. You can only draw vertical dashed lines. To draw other dashed lines you can set &lt;ImageSetStyle&gt; to a special dashed line and draw it by &lt;ImageLine&gt;.
<br />
<br />Sample code:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">MDashedLine</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x0</span><span class="keyword">, </span><span class="default">$y0</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">, </span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">)
<br />{
<br />        </span><span class="default">$st </span><span class="keyword">= array(</span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">, </span><span class="default">$bg</span><span class="keyword">);
<br />        </span><span class="default">ImageSetStyle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">);
<br />        </span><span class="default">ImageLine</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x0</span><span class="keyword">, </span><span class="default">$y0</span><span class="keyword">, </span><span class="default">$x1</span><span class="keyword">, </span><span class="default">$y1</span><span class="keyword">, </span><span class="default">IMG_COLOR_STYLED</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagedashedline&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagedashedline.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
