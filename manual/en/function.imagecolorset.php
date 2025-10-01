<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolorset - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolorset.php">
 <link rel="shorturl" href="https://www.php.net/imagecolorset">
 <link rel="alternate" href="https://www.php.net/imagecolorset" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecolorresolvealpha.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecolorsforindex.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolorset.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolorset.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolorset.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolorset.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolorset.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolorset.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolorset.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolorset.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolorset.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolorset.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolorset.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the color for the specified palette index" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolorset - Manual" />
<meta name="twitter:description" content="Set the color for the specified palette index" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolorset - Manual" />
<meta itemprop="description" content="Set the color for the specified palette index" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the color for the specified palette index" />

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
        <a href="function.imagecolorsforindex.php">
          imagecolorsforindex &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecolorresolvealpha.php">
          &laquo; imagecolorresolvealpha        </a>
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
            <option value='en/function.imagecolorset.php' selected="selected">English</option>
            <option value='de/function.imagecolorset.php'>German</option>
            <option value='es/function.imagecolorset.php'>Spanish</option>
            <option value='fr/function.imagecolorset.php'>French</option>
            <option value='it/function.imagecolorset.php'>Italian</option>
            <option value='ja/function.imagecolorset.php'>Japanese</option>
            <option value='pt_BR/function.imagecolorset.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolorset.php'>Russian</option>
            <option value='tr/function.imagecolorset.php'>Turkish</option>
            <option value='uk/function.imagecolorset.php'>Ukrainian</option>
            <option value='zh/function.imagecolorset.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolorset" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolorset</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolorset</span> &mdash; <span class="dc-title">Set the color for the specified palette index</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolorset-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolorset</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$color</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$red</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$green</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$blue</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$alpha</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This sets the specified index in the palette to the specified
   color. This is useful for creating flood-fill-like effects in
   palleted images without the overhead of performing the actual
   flood-fill.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolorset-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">color</code></dt>
     <dd>
      <p class="para">
       An index in the palette.
      </p>
     </dd>
    
    
     <dt><code class="parameter">red</code></dt>
     <dd>
      <p class="para">Value of red component.</p>
     </dd>
    
    
     <dt><code class="parameter">green</code></dt>
     <dd>
      <p class="para">Value of green component.</p>
     </dd>
    
    
     <dt><code class="parameter">blue</code></dt>
     <dd>
      <p class="para">Value of blue component.</p>
     </dd>
    
    
     <dt><code class="parameter">alpha</code></dt>
     <dd>
      <p class="para">
       Value of alpha component.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolorset-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The function returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolorset-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecolorset-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2851">
    <p><strong>Example #1 <span class="function"><strong>imagecolorset()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a 300x100 image<br /></span><span style="color: #0000BB">$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">300</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the background to be red<br /></span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get the color index for the background<br /></span><span style="color: #0000BB">$bg </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Set the background to be blue<br /></span><span style="color: #0000BB">imagecolorset</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">$bg</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output the image to the browser<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecolorset-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorat.php" class="function" rel="rdfs-seeAlso">imagecolorat()</a> - Get the index of the color of a pixel</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolorset.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolorset%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolorset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorset.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="70156">  <div class="votes">
    <div id="Vu70156">
    <a href="/manual/vote-note.php?id=70156&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70156">
    <a href="/manual/vote-note.php?id=70156&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70156" title="83% like this...">
    4
    </div>
  </div>
  <a href="#70156" class="name">
  <strong class="user"><em>moxleystratton.com</em></strong></a><a class="genanchor" href="#70156"> &para;</a><div class="date" title="2006-10-04 03:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70156">
<div class="phpcode"><code><span class="html">If you want to convert a Color image to Grayscale without creating a blotchy image, use this color calculation:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagetograyscale</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)<br />{<br />    if (</span><span class="default">imageistruecolor</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)) {<br />        </span><span class="default">imagetruecolortopalette</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">);<br />    }<br /><br />    for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="default">$c</span><span class="keyword">++) {<br />        </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />        </span><span class="default">$gray </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">0.299 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + </span><span class="default">0.587 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">0.114 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);<br />        </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81252">  <div class="votes">
    <div id="Vu81252">
    <a href="/manual/vote-note.php?id=81252&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81252">
    <a href="/manual/vote-note.php?id=81252&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81252" title="80% like this...">
    3
    </div>
  </div>
  <a href="#81252" class="name">
  <strong class="user"><em>heavyraptor2 at hotmail dot com</em></strong></a><a class="genanchor" href="#81252"> &para;</a><div class="date" title="2008-02-20 01:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81252">
<div class="phpcode"><code><span class="html">I've been looking for a simple function which "colorizes" an image, without any success ... it looks like a lot of people mean something different with "colorizing" an image, because actually colorzing means multiplying the old color's grayscale with the new color. So a white pixel would become 100% of the colorize-to-color and a black pixel would stay black (I know I can't explain well ... I hope you understood, otherwise take a look at the example below the functions' code).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">image_colorize</span><span class="keyword">(&amp;</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$rgb</span><span class="keyword">) {<br />  </span><span class="default">imageTrueColorToPalette</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">);<br />  </span><span class="default">$numColors </span><span class="keyword">= </span><span class="default">imageColorsTotal</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /><br />  for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$numColors</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />    list(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) = </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">imageColorsForIndex</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">));<br /><br />    </span><span class="comment">// calculate grayscale in percent<br />    </span><span class="default">$grayscale </span><span class="keyword">= (</span><span class="default">$r </span><span class="keyword">+ </span><span class="default">$g </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">) / </span><span class="default">3 </span><span class="keyword">/ </span><span class="default">0xff</span><span class="keyword">;<br /><br />    </span><span class="default">imageColorSet</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,<br />      </span><span class="default">$grayscale </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],<br />      </span><span class="default">$grayscale </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],<br />      </span><span class="default">$grayscale </span><span class="keyword">* </span><span class="default">$rgb</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]<br />    );<br />  }<br /><br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example of usage:<br /><span class="default">&lt;?php<br />$color </span><span class="keyword">= array(</span><span class="default">0xff</span><span class="keyword">,</span><span class="default">0xaa</span><span class="keyword">,</span><span class="default">0x2a</span><span class="keyword">); </span><span class="comment">// color to convert to<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">'<a href="http://sundog.net/images/uploads/1_google_logo.jpg" rel="nofollow" target="_blank">http://sundog.net/images/uploads/1_google_logo.jpg</a>'</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br /><br /></span><span class="default">image_colorize</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">$color</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/gif'</span><span class="keyword">);<br /></span><span class="default">imageGif</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />exit;<br /></span><span class="default">?&gt;<br /></span><br />Enjoy</span></code></div>
  </div>
 </div>
  <div class="note" id="46219">  <div class="votes">
    <div id="Vu46219">
    <a href="/manual/vote-note.php?id=46219&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46219">
    <a href="/manual/vote-note.php?id=46219&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46219" title="75% like this...">
    2
    </div>
  </div>
  <a href="#46219" class="name">
  <strong class="user"><em>dade dot c at email dot it</em></strong></a><a class="genanchor" href="#46219"> &para;</a><div class="date" title="2004-10-02 01:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46219">
<div class="phpcode"><code><span class="html">this is helpful if you would like to implement a color theme system in your website... try it out<br />Davide Candiloro Italy<br /><br />function colorize ($pngpath, $r, $g, $b) <br />/*<br />REQUIRES: $pngpath to be a valid path of a greyscale PNG-8 image with 64 colors palette<br />          $r, $g, $b to be integers in the range 0..255<br />EFFECTS: returns the png image colorized with the color represented by $r, $g, $b.<br />*/<br />{<br />    header("Content-type: image/png");<br />    $im = imagecreatefrompng("images/table.png");<br /><br />    imagetruecolortopalette($im, FALSE, 256); <br />   <br />      for ($c = 0; $c &lt; 64; $c++){ /*64 is the number of colors in the PNG-8 palette*/<br />        $col = imagecolorsforindex($im, $c);           <br />        imagecolorset ( $im, $c, $r*$col['red']/256, $g*$col['green']/256, $b*$col['blue']/256); /*replaces original greyscale palette with a colorized one*/<br />     }<br /><br />    imagepng($im);<br />    imagedestroy($im);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="41841">  <div class="votes">
    <div id="Vu41841">
    <a href="/manual/vote-note.php?id=41841&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41841">
    <a href="/manual/vote-note.php?id=41841&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41841" title="66% like this...">
    2
    </div>
  </div>
  <a href="#41841" class="name">
  <strong class="user"><em>m4551 at abasoft dot it</em></strong></a><a class="genanchor" href="#41841"> &para;</a><div class="date" title="2004-04-23 09:19"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41841">
<div class="phpcode"><code><span class="html">here's a function to greyscale an image even from a truecolor source (jpeg or png).<br /><br />slightly poor quality, but very fast...<br /><br />function imagegreyscale(&amp;$img, $dither=1) {    <br />    if (!($t = imagecolorstotal($img))) {<br />        $t = 256;<br />        imagetruecolortopalette($img, $dither, $t);    <br />    }<br />    for ($c = 0; $c &lt; $t; $c++) {    <br />        $col = imagecolorsforindex($img, $c);<br />        $min = min($col['red'],$col['green'],$col['blue']);<br />        $max = max($col['red'],$col['green'],$col['blue']);<br />        $i = ($max+$min)/2;<br />        imagecolorset($img, $c, $i, $i, $i);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="82729">  <div class="votes">
    <div id="Vu82729">
    <a href="/manual/vote-note.php?id=82729&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82729">
    <a href="/manual/vote-note.php?id=82729&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82729" title="66% like this...">
    1
    </div>
  </div>
  <a href="#82729" class="name">
  <strong class="user"><em>Thomas Mueller</em></strong></a><a class="genanchor" href="#82729"> &para;</a><div class="date" title="2008-04-23 10:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82729">
<div class="phpcode"><code><span class="html">Here is a function to colorize a picture gradient style.<br /><br />All you have to do is to pass an img-object and an array of colors.<br /><br />e.g.<br /><br />$arr = array('#000000', '#990000', '#00FFFF', '#FFFFDD');<br />colorize ($img, $arr);<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">colorize</span><span class="keyword">(</span><span class="default">$imgdata</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">)<br />{<br />    </span><span class="default">imageTrueColorToPalette</span><span class="keyword">(</span><span class="default">$imgdata</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">0xFF</span><span class="keyword">);<br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$palette</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$imgdata</span><span class="keyword">);<br />    while (</span><span class="default">$i</span><span class="keyword">--)<br />    {<br />        list(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) = </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">imageColorsForIndex</span><span class="keyword">(</span><span class="default">$imgdata</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">));<br />        <br />        </span><span class="default">$grayscale </span><span class="keyword">= (</span><span class="default">$r</span><span class="keyword">*</span><span class="default">.3 </span><span class="keyword">+ </span><span class="default">$g</span><span class="keyword">*</span><span class="default">.59 </span><span class="keyword">+</span><span class="default">$b</span><span class="keyword">*</span><span class="default">.11</span><span class="keyword">) / </span><span class="default">0xFF</span><span class="keyword">;<br />        <br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$l</span><span class="keyword">*</span><span class="default">$grayscale</span><span class="keyword">;<br />        <br />        </span><span class="default">$perc </span><span class="keyword">= </span><span class="default">$pos</span><span class="keyword">-</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$pos</span><span class="keyword">);<br />        <br />        </span><span class="default">$tbase </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"#"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">]);<br />        </span><span class="default">$baseR </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tbase</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$baseG </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tbase</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$baseB </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tbase</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        <br />        </span><span class="default">$tmix </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"#"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$palette</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />        </span><span class="default">$mixR </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmix</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$mixG </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmix</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$mixB </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tmix</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br />        <br />        </span><span class="default">$resR </span><span class="keyword">= </span><span class="default">$baseR</span><span class="keyword">+(</span><span class="default">$mixR</span><span class="keyword">-</span><span class="default">$baseR</span><span class="keyword">)*</span><span class="default">$perc</span><span class="keyword">;<br />        </span><span class="default">$resG </span><span class="keyword">= </span><span class="default">$baseG</span><span class="keyword">+(</span><span class="default">$mixG</span><span class="keyword">-</span><span class="default">$baseG</span><span class="keyword">)*</span><span class="default">$perc</span><span class="keyword">;<br />        </span><span class="default">$resB </span><span class="keyword">= </span><span class="default">$baseB</span><span class="keyword">+(</span><span class="default">$mixB</span><span class="keyword">-</span><span class="default">$baseB</span><span class="keyword">)*</span><span class="default">$perc</span><span class="keyword">;<br />        <br />        </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$imgdata</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$resR</span><span class="keyword">, </span><span class="default">$resG</span><span class="keyword">, </span><span class="default">$resB</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117574">  <div class="votes">
    <div id="Vu117574">
    <a href="/manual/vote-note.php?id=117574&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117574">
    <a href="/manual/vote-note.php?id=117574&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117574" title="100% like this...">
    1
    </div>
  </div>
  <a href="#117574" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#117574"> &para;</a><div class="date" title="2015-07-01 01:25"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117574">
<div class="phpcode"><code><span class="html">If you are creating a palette image from scratch you have to use imagecolorallocate() for each index before you can use imagecolorset() on it.</span></code></div>
  </div>
 </div>
  <div class="note" id="93134">  <div class="votes">
    <div id="Vu93134">
    <a href="/manual/vote-note.php?id=93134&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93134">
    <a href="/manual/vote-note.php?id=93134&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93134" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93134" class="name">
  <strong class="user"><em>Bartman</em></strong></a><a class="genanchor" href="#93134"> &para;</a><div class="date" title="2009-08-25 02:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93134">
<div class="phpcode"><code><span class="html">I had the same problem as heavyraptor2 so i made this function...<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imagecolorize</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$endcolor</span><span class="keyword">){<br />    </span><span class="comment">//funcion takes image and turns black into $endcolor, white to white and<br />    //everything in between in corresponding gradient<br />    //$endcolor should be 6 char html color<br /><br />    //make sure it has usable palette<br />    </span><span class="keyword">if (</span><span class="default">imageistruecolor</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">)) {<br />        </span><span class="default">imagetruecolortopalette</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//first make it gray to be sure of even results (thanks moxleystratton.com)<br />    //comment this loop if you want the output based on, for example, <br />    //the red channel (for this take a look at the $gray-var in the last loop)<br />    </span><span class="keyword">for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="default">$c</span><span class="keyword">++) {<br />        </span><span class="default">$col </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />        </span><span class="default">$gray </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">0.299 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">] + </span><span class="default">0.587 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">] + </span><span class="default">0.114 </span><span class="keyword">* </span><span class="default">$col</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">]);<br />        </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">, </span><span class="default">$gray</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//determine end-colors in hexdec<br />    </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$endcolor</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$endcolor</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br />    </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$endcolor</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br /><br />    </span><span class="comment">//determine gradient-delta's<br />    </span><span class="default">$stepR </span><span class="keyword">= (</span><span class="default">255</span><span class="keyword">-</span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">])/</span><span class="default">255.0</span><span class="keyword">;<br />    </span><span class="default">$stepG </span><span class="keyword">= (</span><span class="default">255</span><span class="keyword">-</span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">])/</span><span class="default">255.0</span><span class="keyword">;<br />    </span><span class="default">$stepB </span><span class="keyword">= (</span><span class="default">255</span><span class="keyword">-</span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">])/</span><span class="default">255.0</span><span class="keyword">;<br /><br />    </span><span class="comment">//aColor contains the 256 gradations between endcolor(i=0) and white(i=255)<br />    </span><span class="default">$aColor </span><span class="keyword">= array();<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">255</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'r'</span><span class="keyword">] = </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'r'</span><span class="keyword">] + (</span><span class="default">$i</span><span class="keyword">*</span><span class="default">$stepR</span><span class="keyword">);<br />        </span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'g'</span><span class="keyword">] = </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'g'</span><span class="keyword">] + (</span><span class="default">$i</span><span class="keyword">*</span><span class="default">$stepG</span><span class="keyword">);<br />        </span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">] = </span><span class="default">$EndcolorRGB</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] + (</span><span class="default">$i</span><span class="keyword">*</span><span class="default">$stepB</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//for every color-index we now replace $gray-values for $aColor<br />    </span><span class="keyword">for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); </span><span class="default">$c</span><span class="keyword">++){<br />        </span><span class="default">$currentColorRGB </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />        </span><span class="default">$gray </span><span class="keyword">= </span><span class="default">$currentColorRGB</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">];</span><span class="comment">//image is grayscale, so red,green and blue<br />        // should be equal. We use this number as key of aColor<br />        </span><span class="default">imagecolorset</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,(int)</span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$gray</span><span class="keyword">][</span><span class="string">'r'</span><span class="keyword">], (int)</span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$gray</span><span class="keyword">][</span><span class="string">'g'</span><span class="keyword">], (int)</span><span class="default">$aColor</span><span class="keyword">[</span><span class="default">$gray</span><span class="keyword">][</span><span class="string">'b'</span><span class="keyword">]);<br />    }<br />}</span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="13963">  <div class="votes">
    <div id="Vu13963">
    <a href="/manual/vote-note.php?id=13963&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13963">
    <a href="/manual/vote-note.php?id=13963&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13963" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#13963" class="name">
  <strong class="user"><em>olivier at moostik dot net</em></strong></a><a class="genanchor" href="#13963"> &para;</a><div class="date" title="2001-07-11 05:49"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13963">
<div class="phpcode"><code><span class="html">This function change colors of an image with ranges 0&gt;100 for each primary color:
<br />
<br />int ImageSelectiveColor (int im, int red, int green, int blue)
<br />
<br />im is image pointer
<br />red, green and blue are ranges 0-&gt;100
<br />
<br />function ImageSelectiveColor($im,$red,$green,$blue)
<br /> {
<br />  for($i=0;$i&lt;imagecolorstotal($im);$i++)
<br />   {
<br />    $col=ImageColorsForIndex($im,$i);
<br />    $red_set=$red/100*$col['red'];
<br />    $green_set=$green/100*$col['green'];
<br />    $blue_set=$blue/100*$col['blue'];
<br />    if($red_set&gt;255)$red_set=255;
<br />    if($green_set&gt;255)$green_set=255;
<br />    if($blue_set&gt;255)$blue_set=255;
<br />    imagecolorset($im,$i,$red_set,$green_set,$blue_set);
<br />    
<br />   }
<br />  return $im;
<br /> 
<br /> }</span></code></div>
  </div>
 </div>
  <div class="note" id="77351">  <div class="votes">
    <div id="Vu77351">
    <a href="/manual/vote-note.php?id=77351&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77351">
    <a href="/manual/vote-note.php?id=77351&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77351" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#77351" class="name">
  <strong class="user"><em>admin at phpgfx dot com</em></strong></a><a class="genanchor" href="#77351"> &para;</a><div class="date" title="2007-08-25 11:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77351">
<div class="phpcode"><code><span class="html">Here is a function to turn an image into pure black and white<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">imagepurebw</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$amount </span><span class="keyword">= </span><span class="default">383 </span><span class="keyword">) {<br />    </span><span class="default">$total </span><span class="keyword">= </span><span class="default">imagecolorstotal</span><span class="keyword">( </span><span class="default">$img </span><span class="keyword">);<br />    for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">imagecolorsforindex</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">);<br />        </span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$index </span><span class="keyword">);<br />        </span><span class="default">$color </span><span class="keyword">= ( </span><span class="default">array_sum</span><span class="keyword">( </span><span class="default">$index </span><span class="keyword">) &gt; </span><span class="default">$amount </span><span class="keyword">) ? </span><span class="default">255 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">imagecolorset</span><span class="keyword">( </span><span class="default">$img</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">, </span><span class="default">$color </span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="24186">  <div class="votes">
    <div id="Vu24186">
    <a href="/manual/vote-note.php?id=24186&amp;page=function.imagecolorset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24186">
    <a href="/manual/vote-note.php?id=24186&amp;page=function.imagecolorset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24186" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#24186" class="name">
  <strong class="user"><em>info at devking dot com</em></strong></a><a class="genanchor" href="#24186"> &para;</a><div class="date" title="2002-08-08 02:20"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24186">
<div class="phpcode"><code><span class="html">here's a simple function to greyscale an image...<br /><br />function imagecolorgrey( &amp;$img ) {<br /> for( $i=0; $i&lt;imagecolorstotal( $img ); $i++ ) {<br />  $c = ImageColorsForIndex( $img, $i );<br />  $t = ($c["red"]+$c["green"]+$c["blue"])/3;<br />  imagecolorset( $img, $i, $t, $t, $t );    <br /> }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolorset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorset.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
