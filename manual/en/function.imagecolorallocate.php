<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagecolorallocate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagecolorallocate.php">
 <link rel="shorturl" href="https://www.php.net/imagecolorallocate">
 <link rel="alternate" href="https://www.php.net/imagecolorallocate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagecharup.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagecolorallocatealpha.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagecolorallocate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagecolorallocate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagecolorallocate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagecolorallocate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagecolorallocate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagecolorallocate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagecolorallocate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagecolorallocate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagecolorallocate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagecolorallocate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagecolorallocate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Allocate a color for an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagecolorallocate - Manual" />
<meta name="twitter:description" content="Allocate a color for an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagecolorallocate - Manual" />
<meta itemprop="description" content="Allocate a color for an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Allocate a color for an image" />

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
        <a href="function.imagecolorallocatealpha.php">
          imagecolorallocatealpha &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagecharup.php">
          &laquo; imagecharup        </a>
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
            <option value='en/function.imagecolorallocate.php' selected="selected">English</option>
            <option value='de/function.imagecolorallocate.php'>German</option>
            <option value='es/function.imagecolorallocate.php'>Spanish</option>
            <option value='fr/function.imagecolorallocate.php'>French</option>
            <option value='it/function.imagecolorallocate.php'>Italian</option>
            <option value='ja/function.imagecolorallocate.php'>Japanese</option>
            <option value='pt_BR/function.imagecolorallocate.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagecolorallocate.php'>Russian</option>
            <option value='tr/function.imagecolorallocate.php'>Turkish</option>
            <option value='uk/function.imagecolorallocate.php'>Ukrainian</option>
            <option value='zh/function.imagecolorallocate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagecolorallocate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagecolorallocate</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagecolorallocate</span> &mdash; <span class="dc-title">Allocate a color for an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagecolorallocate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagecolorallocate</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$red</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$green</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$blue</code></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns a color identifier representing the color composed of the given
   <abbr title="Red-Green-Blue">RGB</abbr> components.
  </p>
  <p class="para">
   <span class="function"><strong>imagecolorallocate()</strong></span> must be called
   to create each color that is to be used in the image represented
   by <code class="parameter">image</code>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The first call to <span class="function"><strong>imagecolorallocate()</strong></span> fills
    the background color in palette-based images - images created using
    <span class="function"><a href="function.imagecreate.php" class="function">imagecreate()</a></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagecolorallocate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
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
    
   </dl>
   These parameters are integers between 0 and 255 or hexadecimals between 
   0x00 and 0xFF.
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagecolorallocate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A color identifier or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the allocation failed.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagecolorallocate-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imagecolorallocate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2837">
    <p><strong>Example #1 <span class="function"><strong>imagecolorallocate()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// sets background to red<br /></span><span style="color: #0000BB">$background </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// sets some colors<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">, </span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// hexadecimal way<br /></span><span style="color: #0000BB">$white </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">, </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$black </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">, </span><span style="color: #0000BB">0x00</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagecolorallocate-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagecolorallocatealpha.php" class="function" rel="rdfs-seeAlso">imagecolorallocatealpha()</a> - Allocate a color for an image</span></li>
   <li><span class="function"><a href="function.imagecolordeallocate.php" class="function" rel="rdfs-seeAlso">imagecolordeallocate()</a> - De-allocate a color for an image</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagecolorallocate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagecolorallocate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagecolorallocate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorallocate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94785">  <div class="votes">
    <div id="Vu94785">
    <a href="/manual/vote-note.php?id=94785&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94785">
    <a href="/manual/vote-note.php?id=94785&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94785" title="73% like this...">
    21
    </div>
  </div>
  <a href="#94785" class="name">
  <strong class="user"><em>jahservant 13 at gmail dot com</em></strong></a><a class="genanchor" href="#94785"> &para;</a><div class="date" title="2009-11-24 04:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94785">
<div class="phpcode"><code><span class="html">Note that you can only assign 255 colors to any image palette.  If you try assigning more, imagecolorallocate() will fail.<br /><br />If, for example, you are randomly allocating colors, it will be wise to check if you have used up all of the colors possible.  You can use imagecolorclosest() to get the closest assigned color:<br /><span class="default">&lt;?php<br />     </span><span class="comment">//assign random rgb values<br />     </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//r(ed)<br />     </span><span class="default">$c2 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//g(reen)<br />     </span><span class="default">$c3 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//b(lue)<br />     //test if we have used up palette<br />     </span><span class="keyword">if(</span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">)&gt;=</span><span class="default">255</span><span class="keyword">) {<br />          </span><span class="comment">//palette used up; pick closest assigned color<br />          </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />     } else {<br />          </span><span class="comment">//palette NOT used up; assign new color<br />          </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />     }<br /></span><span class="default">?&gt;<br /></span><br />Also, imagecolorallocate() will assign a new color EVERY time the function is called, even if the color already exists in the palette:<br /><span class="default">&lt;?php<br />     </span><span class="comment">// [...]<br />     </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">); </span><span class="comment">//returns 5<br />     </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">); </span><span class="comment">//returns 6<br />     </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">); </span><span class="comment">//returns 7<br />     // [...]<br />     </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">); </span><span class="comment">//returns 23<br />     </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">,</span><span class="default">125</span><span class="keyword">); </span><span class="comment">//returns 25<br />     // [...]<br />     // etc...<br /></span><span class="default">?&gt;<br /></span><br />So here, imagecolorexact() is useful:<br /><span class="default">&lt;?php<br />     </span><span class="comment">//see if color already exists<br />     </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />     if(</span><span class="default">$color</span><span class="keyword">==-</span><span class="default">1</span><span class="keyword">) {<br />          </span><span class="comment">//color does not exist; allocate a new one<br />          </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />     }<br /></span><span class="default">?&gt;<br /></span><br />And, for nerdy-ness sake, we can put the two ideas together:<br /><span class="default">&lt;?php<br />     </span><span class="comment">//assign random rgb values<br />     </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//r(ed)<br />     </span><span class="default">$c2 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//g(reen)<br />     </span><span class="default">$c3 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//b(lue)<br />     //get color from palette<br />     </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />     if(</span><span class="default">$color</span><span class="keyword">==-</span><span class="default">1</span><span class="keyword">) {<br />          </span><span class="comment">//color does not exist...<br />          //test if we have used up palette<br />          </span><span class="keyword">if(</span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">)&gt;=</span><span class="default">255</span><span class="keyword">) {<br />               </span><span class="comment">//palette used up; pick closest assigned color<br />               </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />          } else {<br />               </span><span class="comment">//palette NOT used up; assign new color<br />               </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />          }<br />     }<br /></span><span class="default">?&gt;<br /></span><br />Or as a function:<br /><span class="default">&lt;?php<br />     </span><span class="keyword">function </span><span class="default">createcolor</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">$c3</span><span class="keyword">) {<br />          </span><span class="comment">//get color from palette<br />          </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorexact</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />          if(</span><span class="default">$color</span><span class="keyword">==-</span><span class="default">1</span><span class="keyword">) {<br />               </span><span class="comment">//color does not exist...<br />               //test if we have used up palette<br />               </span><span class="keyword">if(</span><span class="default">imagecolorstotal</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">)&gt;=</span><span class="default">255</span><span class="keyword">) {<br />                    </span><span class="comment">//palette used up; pick closest assigned color<br />                    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorclosest</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />               } else {<br />                    </span><span class="comment">//palette NOT used up; assign new color<br />                    </span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">, </span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">);<br />               }<br />          }<br />          return </span><span class="default">$color</span><span class="keyword">;<br />     }<br /><br />     for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">1000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { </span><span class="comment">//1000 because it is significantly greater than 255<br />          //assign random rgb values<br />          </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//r(ed)<br />          </span><span class="default">$c2 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//g(reen)<br />          </span><span class="default">$c3 </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">,</span><span class="default">200</span><span class="keyword">); </span><span class="comment">//b(lue)<br />          //generate the color<br />          </span><span class="default">$color </span><span class="keyword">= </span><span class="default">createcolor</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">,</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">$c2</span><span class="keyword">,</span><span class="default">$c3</span><span class="keyword">);<br />          </span><span class="comment">//do something with color...<br />     </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78726">  <div class="votes">
    <div id="Vu78726">
    <a href="/manual/vote-note.php?id=78726&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78726">
    <a href="/manual/vote-note.php?id=78726&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78726" title="65% like this...">
    9
    </div>
  </div>
  <a href="#78726" class="name">
  <strong class="user"><em>Ludo</em></strong></a><a class="genanchor" href="#78726"> &para;</a><div class="date" title="2007-10-24 02:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78726">
<div class="phpcode"><code><span class="html">When working on an existant GIF images, if the number of different colours has reached the limits of the GIF format, imagecolorallocate will not use to the colour you ask her within the parameters, she will apply black !<br /><br />That's a problem when generating images "on-the-fly" with many manipulations, from a GIF image.<br />To go round the problem, you have to convert the GIF image into a PNG one, and then you can work on the PNG and everything will be ok.<br /><br />For example :<br /><span class="default">&lt;?php<br /></span><span class="comment">// first, convert into a PNG image<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="string">'my_image.gif'</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">'my_image.png'</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br /></span><span class="comment">// then, you can work on it<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">'my_image.png'</span><span class="keyword">);<br /></span><span class="comment">/*<br />* work on the image<br />*/<br /></span><span class="default">imagegif</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78131">  <div class="votes">
    <div id="Vu78131">
    <a href="/manual/vote-note.php?id=78131&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78131">
    <a href="/manual/vote-note.php?id=78131&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78131" title="66% like this...">
    4
    </div>
  </div>
  <a href="#78131" class="name">
  <strong class="user"><em>William Barath</em></strong></a><a class="genanchor" href="#78131"> &para;</a><div class="date" title="2007-09-28 04:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78131">
<div class="phpcode"><code><span class="html">Lots of hsv2rgb commentary but no working example, so here's mine:<br /><br /><span class="default">&lt;?php </span><span class="comment">// hsv2rgb example translated from ImageMagick C code<br /></span><span class="keyword">function </span><span class="default">hsv2rgb</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) <br />{<br />    </span><span class="default">$s </span><span class="keyword">/= </span><span class="default">256.0</span><span class="keyword">;<br />    if (</span><span class="default">$s </span><span class="keyword">== </span><span class="default">0.0</span><span class="keyword">) return array(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);<br />    </span><span class="default">$h </span><span class="keyword">/= (</span><span class="default">256.0 </span><span class="keyword">/ </span><span class="default">6.0</span><span class="keyword">);<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">);<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$h </span><span class="keyword">- </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$p </span><span class="keyword">= (integer)(</span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$s</span><span class="keyword">));<br />    </span><span class="default">$q </span><span class="keyword">= (integer)(</span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$s </span><span class="keyword">* </span><span class="default">$f</span><span class="keyword">));<br />    </span><span class="default">$t </span><span class="keyword">= (integer)(</span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$s </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$f</span><span class="keyword">)));<br />    switch(</span><span class="default">$i</span><span class="keyword">) {<br />    case </span><span class="default">0</span><span class="keyword">: return array(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">);<br />    case </span><span class="default">1</span><span class="keyword">: return array(</span><span class="default">$q</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">);<br />    case </span><span class="default">2</span><span class="keyword">: return array(</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />    case </span><span class="default">3</span><span class="keyword">: return array(</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$q</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);<br />    case </span><span class="default">4</span><span class="keyword">: return array(</span><span class="default">$t</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);<br />    default: return array(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">,</span><span class="default">$q</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">(</span><span class="default">256</span><span class="keyword">,</span><span class="default">128</span><span class="keyword">);<br />for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">64</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />    list(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) = </span><span class="default">hsv2rgb</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">| </span><span class="default">7</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">,(</span><span class="default">$y</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">) |</span><span class="default">7</span><span class="keyword">);<br />    </span><span class="default">$color </span><span class="keyword">= (</span><span class="default">$r </span><span class="keyword">&lt;&lt; </span><span class="default">16 </span><span class="keyword">) | (</span><span class="default">$g </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) | </span><span class="default">$b</span><span class="keyword">;<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">4</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />}<br />for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">64</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">128</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />    list(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) = </span><span class="default">hsv2rgb</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">|</span><span class="default">7</span><span class="keyword">,((</span><span class="default">127</span><span class="keyword">-</span><span class="default">$y</span><span class="keyword">)*</span><span class="default">4</span><span class="keyword">)|</span><span class="default">7</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">$color </span><span class="keyword">= (</span><span class="default">$r </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">) | (</span><span class="default">$g </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) | </span><span class="default">$b</span><span class="keyword">;<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">-</span><span class="default">4</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />}<br />for (</span><span class="default">$y</span><span class="keyword">=</span><span class="default">120</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">128</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++){<br />    </span><span class="default">$color </span><span class="keyword">= ((</span><span class="default">$x </span><span class="keyword">|</span><span class="default">7</span><span class="keyword">) &lt;&lt; </span><span class="default">16</span><span class="keyword">) | ((</span><span class="default">$x </span><span class="keyword">|</span><span class="default">7</span><span class="keyword">) &lt;&lt; </span><span class="default">8</span><span class="keyword">) | (</span><span class="default">$x </span><span class="keyword">|</span><span class="default">7</span><span class="keyword">);<br />    </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);<br />}<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40497">  <div class="votes">
    <div id="Vu40497">
    <a href="/manual/vote-note.php?id=40497&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40497">
    <a href="/manual/vote-note.php?id=40497&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40497" title="63% like this...">
    3
    </div>
  </div>
  <a href="#40497" class="name">
  <strong class="user"><em>jernberg at fairytale dot se</em></strong></a><a class="genanchor" href="#40497"> &para;</a><div class="date" title="2004-03-05 10:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40497">
<div class="phpcode"><code><span class="html">this might help someone, how to allocate an color from an html color-definition:
<br />
<br /><span class="default">&lt;?php
<br />$fg </span><span class="keyword">= </span><span class="string">"#ff0080"</span><span class="keyword">;
<br />
<br /></span><span class="default">$red </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;
<br /></span><span class="default">$green </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;
<br /></span><span class="default">$blue </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;
<br />if( </span><span class="default">eregi</span><span class="keyword">( </span><span class="string">"[#]?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})"</span><span class="keyword">, </span><span class="default">$fg</span><span class="keyword">, </span><span class="default">$ret </span><span class="keyword">) )
<br />{
<br />    </span><span class="default">$red </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );
<br />    </span><span class="default">$green </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );
<br />    </span><span class="default">$blue </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">( </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] );
<br />}
<br />
<br /></span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">( </span><span class="default">$img1</span><span class="keyword">, </span><span class="default">$red</span><span class="keyword">, </span><span class="default">$green</span><span class="keyword">, </span><span class="default">$blue </span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53654">  <div class="votes">
    <div id="Vu53654">
    <a href="/manual/vote-note.php?id=53654&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53654">
    <a href="/manual/vote-note.php?id=53654&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53654" title="66% like this...">
    1
    </div>
  </div>
  <a href="#53654" class="name">
  <strong class="user"><em>andreoli dot carlo at libero dot it</em></strong></a><a class="genanchor" href="#53654"> &para;</a><div class="date" title="2005-06-08 06:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53654">
<div class="phpcode"><code><span class="html">hsl to RGB
<br />(not yet optimized but it function)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">hslToRgb </span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">) {
<br />    if (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">240 </span><span class="keyword">|| </span><span class="default">$h</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) return array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />    if (</span><span class="default">$s</span><span class="keyword">&gt;</span><span class="default">240 </span><span class="keyword">|| </span><span class="default">$s</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) return array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />    if (</span><span class="default">$l</span><span class="keyword">&gt;</span><span class="default">240 </span><span class="keyword">|| </span><span class="default">$l</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) return array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);     
<br />    if (</span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">40</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=(int)(</span><span class="default">$h</span><span class="keyword">/</span><span class="default">40</span><span class="keyword">*</span><span class="default">256</span><span class="keyword">);
<br />        </span><span class="default">$B</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    }
<br />    elseif (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">40 </span><span class="keyword">&amp;&amp; </span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">80</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=(</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">40</span><span class="keyword">)/</span><span class="default">40</span><span class="keyword">)*</span><span class="default">256</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    }
<br />    elseif (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">80 </span><span class="keyword">&amp;&amp; </span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">120</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">80</span><span class="keyword">)/</span><span class="default">40</span><span class="keyword">*</span><span class="default">256</span><span class="keyword">;
<br />    }
<br />    elseif (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">120 </span><span class="keyword">&amp;&amp; </span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">160</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=(</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">120</span><span class="keyword">)/</span><span class="default">40</span><span class="keyword">)*</span><span class="default">256</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />    }
<br />    elseif (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">160 </span><span class="keyword">&amp;&amp; </span><span class="default">$h</span><span class="keyword">&lt;=</span><span class="default">200</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">160</span><span class="keyword">)/</span><span class="default">40</span><span class="keyword">*</span><span class="default">256</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />    }
<br />    elseif (</span><span class="default">$h</span><span class="keyword">&gt;</span><span class="default">200</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=(</span><span class="default">1</span><span class="keyword">-(</span><span class="default">$h</span><span class="keyword">-</span><span class="default">200</span><span class="keyword">)/</span><span class="default">40</span><span class="keyword">)*</span><span class="default">256</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$R</span><span class="keyword">=</span><span class="default">$R</span><span class="keyword">+(</span><span class="default">240</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">)/</span><span class="default">240</span><span class="keyword">*(</span><span class="default">128</span><span class="keyword">-</span><span class="default">$R</span><span class="keyword">);
<br />    </span><span class="default">$G</span><span class="keyword">=</span><span class="default">$G</span><span class="keyword">+(</span><span class="default">240</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">)/</span><span class="default">240</span><span class="keyword">*(</span><span class="default">128</span><span class="keyword">-</span><span class="default">$G</span><span class="keyword">);
<br />    </span><span class="default">$B</span><span class="keyword">=</span><span class="default">$B</span><span class="keyword">+(</span><span class="default">240</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">)/</span><span class="default">240</span><span class="keyword">*(</span><span class="default">128</span><span class="keyword">-</span><span class="default">$B</span><span class="keyword">);
<br />    if (</span><span class="default">$l</span><span class="keyword">&lt;</span><span class="default">120</span><span class="keyword">) {
<br />        </span><span class="default">$R</span><span class="keyword">=(</span><span class="default">$R</span><span class="keyword">/</span><span class="default">120</span><span class="keyword">)*</span><span class="default">$l</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=(</span><span class="default">$G</span><span class="keyword">/</span><span class="default">120</span><span class="keyword">)*</span><span class="default">$l</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=(</span><span class="default">$B</span><span class="keyword">/</span><span class="default">120</span><span class="keyword">)*</span><span class="default">$l</span><span class="keyword">;
<br />    }
<br />    else {
<br />        </span><span class="default">$R</span><span class="keyword">=</span><span class="default">$l</span><span class="keyword">*((</span><span class="default">256</span><span class="keyword">-</span><span class="default">$R</span><span class="keyword">)/</span><span class="default">120</span><span class="keyword">)+</span><span class="default">2</span><span class="keyword">*</span><span class="default">$R</span><span class="keyword">-</span><span class="default">256</span><span class="keyword">;
<br />        </span><span class="default">$G</span><span class="keyword">=</span><span class="default">$l</span><span class="keyword">*((</span><span class="default">256</span><span class="keyword">-</span><span class="default">$G</span><span class="keyword">)/</span><span class="default">120</span><span class="keyword">)+</span><span class="default">2</span><span class="keyword">*</span><span class="default">$G</span><span class="keyword">-</span><span class="default">256</span><span class="keyword">;
<br />        </span><span class="default">$B</span><span class="keyword">=</span><span class="default">$l</span><span class="keyword">*((</span><span class="default">256</span><span class="keyword">-</span><span class="default">$B</span><span class="keyword">)/</span><span class="default">120</span><span class="keyword">)+</span><span class="default">2</span><span class="keyword">*</span><span class="default">$B</span><span class="keyword">-</span><span class="default">256</span><span class="keyword">;
<br />    }
<br />    if (</span><span class="default">$R</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$R</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    if (</span><span class="default">$R</span><span class="keyword">&gt;</span><span class="default">255</span><span class="keyword">) </span><span class="default">$R</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />    if (</span><span class="default">$G</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$G</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    if (</span><span class="default">$G</span><span class="keyword">&gt;</span><span class="default">255</span><span class="keyword">) </span><span class="default">$G</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />    if (</span><span class="default">$B</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$B</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    if (</span><span class="default">$B</span><span class="keyword">&gt;</span><span class="default">255</span><span class="keyword">) </span><span class="default">$B</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">;
<br />    
<br />    return array((int)</span><span class="default">$R</span><span class="keyword">,(int)</span><span class="default">$G</span><span class="keyword">,(int)</span><span class="default">$B</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44244">  <div class="votes">
    <div id="Vu44244">
    <a href="/manual/vote-note.php?id=44244&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44244">
    <a href="/manual/vote-note.php?id=44244&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44244" title="66% like this...">
    1
    </div>
  </div>
  <a href="#44244" class="name">
  <strong class="user"><em>smoli at paranoya dot ch</em></strong></a><a class="genanchor" href="#44244"> &para;</a><div class="date" title="2004-07-19 11:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44244">
<div class="phpcode"><code><span class="html">Some of you maybe want to use HSV color model for drawing color selectors and circles:
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function &amp;</span><span class="default">colormap_hsv_to_rgb</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">)
<br />  {
<br />    </span><span class="default">$ret </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();
<br />
<br />    if(</span><span class="default">$s </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)
<br />    {
<br />      </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">;
<br />      </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">;
<br />      </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">;
<br />
<br />      return </span><span class="default">$ret</span><span class="keyword">;
<br />    }
<br />    else
<br />    {
<br />      </span><span class="default">$h </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">) / </span><span class="default">255.0</span><span class="keyword">;
<br />      </span><span class="default">$s </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) / </span><span class="default">255.0</span><span class="keyword">;
<br />      </span><span class="default">$v </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) / </span><span class="default">255.0</span><span class="keyword">;
<br />
<br />      </span><span class="default">$hue </span><span class="keyword">= </span><span class="default">$h</span><span class="keyword">;
<br />
<br />      if(</span><span class="default">$hue </span><span class="keyword">== </span><span class="default">1.0</span><span class="keyword">)
<br />        </span><span class="default">$hue </span><span class="keyword">= </span><span class="default">0.0</span><span class="keyword">;
<br />
<br />      </span><span class="default">$hue </span><span class="keyword">*= </span><span class="default">6.0</span><span class="keyword">;
<br />
<br />      </span><span class="default">$i </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$hue</span><span class="keyword">);
<br />      </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$hue </span><span class="keyword">- </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />      </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$s</span><span class="keyword">);
<br />      </span><span class="default">$q </span><span class="keyword">= </span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- (</span><span class="default">$s </span><span class="keyword">* </span><span class="default">$f</span><span class="keyword">));
<br />      </span><span class="default">$t </span><span class="keyword">= </span><span class="default">$v </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- (</span><span class="default">$s </span><span class="keyword">* (</span><span class="default">1.0 </span><span class="keyword">- </span><span class="default">$f</span><span class="keyword">)));
<br />
<br />      switch(</span><span class="default">$i</span><span class="keyword">)
<br />      {
<br />         case </span><span class="default">0</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; break;
<br />         case </span><span class="default">1</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$q</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; break;
<br />         case </span><span class="default">2</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">; break;
<br />         case </span><span class="default">3</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$q</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; break;
<br />         case </span><span class="default">4</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; break;
<br />         case </span><span class="default">5</span><span class="keyword">: </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">$w</span><span class="keyword">; </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$q</span><span class="keyword">; break;
<br />      }
<br />    }
<br />    
<br />    </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">r </span><span class="keyword">* </span><span class="default">255.0</span><span class="keyword">);
<br />    </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">g </span><span class="keyword">* </span><span class="default">255.0</span><span class="keyword">);
<br />    </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">* </span><span class="default">255.0</span><span class="keyword">);
<br />
<br />    return </span><span class="default">$ret</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60689">  <div class="votes">
    <div id="Vu60689">
    <a href="/manual/vote-note.php?id=60689&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60689">
    <a href="/manual/vote-note.php?id=60689&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60689" title="58% like this...">
    3
    </div>
  </div>
  <a href="#60689" class="name">
  <strong class="user"><em>SW</em></strong></a><a class="genanchor" href="#60689"> &para;</a><div class="date" title="2006-01-13 02:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60689">
<div class="phpcode"><code><span class="html">This works! A Black-Image with vertical centered white Aliased Arial-Text and same left and right margin - used for Menu-Buttons.<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">createImgText </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$marginX</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$imgH</span><span class="keyword">=</span><span class="default">0 </span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$imgColorHex</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$txtColorHex</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">){<br />    if(</span><span class="default">$string</span><span class="keyword">!=</span><span class="string">""</span><span class="keyword">){<br />        </span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);     <br />        </span><span class="comment">//<br />        </span><span class="default">$spacing </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />          </span><span class="default">$line </span><span class="keyword">= array(</span><span class="string">"linespacing" </span><span class="keyword">=&gt; </span><span class="default">$spacing</span><span class="keyword">);<br />        </span><span class="default">$box </span><span class="keyword">= @</span><span class="default">imageftbbox</span><span class="keyword">(</span><span class="default">$fontsize</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$fontfile</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">)<br />        or die(</span><span class="string">"ERROR"</span><span class="keyword">);<br />        </span><span class="default">$tw</span><span class="keyword">=</span><span class="default">$box</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]-</span><span class="default">$box</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">//image width<br />        </span><span class="default">$marginY </span><span class="keyword">= </span><span class="default">$imgH </span><span class="keyword">- ((</span><span class="default">$imgH </span><span class="keyword">- </span><span class="default">$fontsize</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$imgWidth </span><span class="keyword">= </span><span class="default">$tw </span><span class="keyword">+ (</span><span class="default">2</span><span class="keyword">*</span><span class="default">$marginX</span><span class="keyword">);<br />        </span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">$imgWidth</span><span class="keyword">, </span><span class="default">$imgH</span><span class="keyword">); <br />        </span><span class="default">$int </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$imgColorHex</span><span class="keyword">);<br />        </span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">"red" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x10</span><span class="keyword">),<br />               </span><span class="string">"green" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x8</span><span class="keyword">),<br />               </span><span class="string">"blue" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; </span><span class="default">$int</span><span class="keyword">);<br />        </span><span class="default">$black </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">]); <br />        </span><span class="default">$int </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$txtColorHex</span><span class="keyword">);<br />        </span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">"red" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x10</span><span class="keyword">),<br />               </span><span class="string">"green" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x8</span><span class="keyword">),<br />               </span><span class="string">"blue" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; </span><span class="default">$int</span><span class="keyword">);<br />        </span><span class="default">$white </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"red"</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"green"</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"blue"</span><span class="keyword">]); <br />        </span><span class="default">ImageFtText</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$fontsize</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$marginX</span><span class="keyword">, </span><span class="default">$marginY</span><span class="keyword">, </span><span class="default">$white</span><span class="keyword">, </span><span class="default">$fontfile</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, array()); <br />        </span><span class="default">ImagePng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">); <br />        </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    }else{<br />        echo </span><span class="string">"ERROR!"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">createImgText </span><span class="keyword">(</span><span class="string">"Hello World"</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">18</span><span class="keyword">, </span><span class="string">"arial.ttf"</span><span class="keyword">, </span><span class="string">"000000"</span><span class="keyword">, </span><span class="string">"FFFFFF"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75727">  <div class="votes">
    <div id="Vu75727">
    <a href="/manual/vote-note.php?id=75727&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75727">
    <a href="/manual/vote-note.php?id=75727&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75727" title="60% like this...">
    1
    </div>
  </div>
  <a href="#75727" class="name">
  <strong class="user"><em>picklecj at rose-hulman dot edu</em></strong></a><a class="genanchor" href="#75727"> &para;</a><div class="date" title="2007-06-13 08:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75727">
<div class="phpcode"><code><span class="html">Another solution to color limitation issues when creating gradients. This file takes width (px) and left and right colors (hex) and makes a gradient while only allocating 250 colors.<br /><br /><span class="default">&lt;?php<br />$leftR </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"left"</span><span class="keyword">],</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$leftG </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"left"</span><span class="keyword">],</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$leftB </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"left"</span><span class="keyword">],</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$rightR </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"right"</span><span class="keyword">],</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$rightG </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"right"</span><span class="keyword">],</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$rightB </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"right"</span><span class="keyword">],</span><span class="default">4</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">$image</span><span class="keyword">=</span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">],</span><span class="default">1</span><span class="keyword">);<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">250</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$colorset</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$leftR </span><span class="keyword">+ (</span><span class="default">$i</span><span class="keyword">*((</span><span class="default">$rightR</span><span class="keyword">-</span><span class="default">$leftR</span><span class="keyword">)/</span><span class="default">250</span><span class="keyword">)), </span><span class="default">$leftG </span><span class="keyword">+ (</span><span class="default">$i</span><span class="keyword">*((</span><span class="default">$rightG</span><span class="keyword">-</span><span class="default">$leftG</span><span class="keyword">)/</span><span class="default">250</span><span class="keyword">)), </span><span class="default">$leftB </span><span class="keyword">+ (</span><span class="default">$i</span><span class="keyword">*((</span><span class="default">$rightB</span><span class="keyword">-</span><span class="default">$leftB</span><span class="keyword">)/</span><span class="default">250</span><span class="keyword">)));<br />}<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">]);</span><span class="default">$i</span><span class="keyword">++) {<br />  </span><span class="default">imagesetpixel </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$colorset</span><span class="keyword">[(int)(</span><span class="default">$i</span><span class="keyword">/(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"width"</span><span class="keyword">]/</span><span class="default">250</span><span class="keyword">))] );<br />}<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />example: gradient.php?width=640&amp;left=000000&amp;right=FF0000<br /><br />Makes a 640px-wide image that fades from black to red.</span></code></div>
  </div>
 </div>
  <div class="note" id="47757">  <div class="votes">
    <div id="Vu47757">
    <a href="/manual/vote-note.php?id=47757&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47757">
    <a href="/manual/vote-note.php?id=47757&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47757" title="60% like this...">
    1
    </div>
  </div>
  <a href="#47757" class="name">
  <strong class="user"><em>tyberis</em></strong></a><a class="genanchor" href="#47757"> &para;</a><div class="date" title="2004-11-28 04:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47757">
<div class="phpcode"><code><span class="html">2 functions to convert from HSV colorspace (hue/saturation/brightness) to RGB (red/green/blue) colorspace and back. 
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// $c = array($red, $green, $blue)
<br />// $red=[0..1], $green=[0..1], $blue=[0..1];
<br /></span><span class="keyword">function </span><span class="default">rgb2hsv</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br /> list(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">)=</span><span class="default">$c</span><span class="keyword">;
<br /> </span><span class="default">$v</span><span class="keyword">=</span><span class="default">max</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);
<br /> </span><span class="default">$t</span><span class="keyword">=</span><span class="default">min</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);
<br /> </span><span class="default">$s</span><span class="keyword">=(</span><span class="default">$v</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)?</span><span class="default">0</span><span class="keyword">:(</span><span class="default">$v</span><span class="keyword">-</span><span class="default">$t</span><span class="keyword">)/</span><span class="default">$v</span><span class="keyword">;
<br /> if (</span><span class="default">$s</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)
<br />  </span><span class="default">$h</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">;
<br /> else {
<br />  </span><span class="default">$a</span><span class="keyword">=</span><span class="default">$v</span><span class="keyword">-</span><span class="default">$t</span><span class="keyword">;
<br />  </span><span class="default">$cr</span><span class="keyword">=(</span><span class="default">$v</span><span class="keyword">-</span><span class="default">$r</span><span class="keyword">)/</span><span class="default">$a</span><span class="keyword">;
<br />  </span><span class="default">$cg</span><span class="keyword">=(</span><span class="default">$v</span><span class="keyword">-</span><span class="default">$g</span><span class="keyword">)/</span><span class="default">$a</span><span class="keyword">;
<br />  </span><span class="default">$cb</span><span class="keyword">=(</span><span class="default">$v</span><span class="keyword">-</span><span class="default">$b</span><span class="keyword">)/</span><span class="default">$a</span><span class="keyword">;
<br />  </span><span class="default">$h</span><span class="keyword">=(</span><span class="default">$r</span><span class="keyword">==</span><span class="default">$v</span><span class="keyword">)?</span><span class="default">$cb</span><span class="keyword">-</span><span class="default">$cg</span><span class="keyword">:((</span><span class="default">$g</span><span class="keyword">==</span><span class="default">$v</span><span class="keyword">)?</span><span class="default">2</span><span class="keyword">+</span><span class="default">$cr</span><span class="keyword">-</span><span class="default">$cb</span><span class="keyword">:((</span><span class="default">$b</span><span class="keyword">==</span><span class="default">$v</span><span class="keyword">)?</span><span class="default">$h</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">+</span><span class="default">$cg</span><span class="keyword">-</span><span class="default">$cr</span><span class="keyword">:</span><span class="default">0</span><span class="keyword">));
<br />  </span><span class="default">$h</span><span class="keyword">=</span><span class="default">60</span><span class="keyword">*</span><span class="default">$h</span><span class="keyword">;
<br />  </span><span class="default">$h</span><span class="keyword">=(</span><span class="default">$h</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">)?</span><span class="default">$h</span><span class="keyword">+</span><span class="default">360</span><span class="keyword">:</span><span class="default">$h</span><span class="keyword">;
<br /> }
<br /> return array(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// $c = array($hue, $saturation, $brightness)
<br />// $hue=[0..360], $saturation=[0..1], $brightness=[0..1]
<br /></span><span class="keyword">function </span><span class="default">hsv2rgb</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {
<br /> list(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">)=</span><span class="default">$c</span><span class="keyword">;
<br /> if (</span><span class="default">$s</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)
<br />  return array(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);
<br /> else {
<br />  </span><span class="default">$h</span><span class="keyword">=(</span><span class="default">$h</span><span class="keyword">%=</span><span class="default">360</span><span class="keyword">)/</span><span class="default">60</span><span class="keyword">;
<br />  </span><span class="default">$i</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">);
<br />  </span><span class="default">$f</span><span class="keyword">=</span><span class="default">$h</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">;
<br />  </span><span class="default">$q</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$q</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">$v</span><span class="keyword">*(</span><span class="default">1</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">);
<br />  </span><span class="default">$q</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">$v</span><span class="keyword">*(</span><span class="default">1</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">*(</span><span class="default">1</span><span class="keyword">-</span><span class="default">$f</span><span class="keyword">));
<br />  </span><span class="default">$q</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]=</span><span class="default">$q</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]=</span><span class="default">$v</span><span class="keyword">;
<br />  </span><span class="default">$q</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]=</span><span class="default">$v</span><span class="keyword">*(</span><span class="default">1</span><span class="keyword">-</span><span class="default">$s</span><span class="keyword">*</span><span class="default">$f</span><span class="keyword">);
<br />  </span><span class="comment">//return(array($q[($i+4)%5],$q[($i+2)%5],$q[$i%5]));
<br />  </span><span class="keyword">return(array(</span><span class="default">$q</span><span class="keyword">[(</span><span class="default">$i</span><span class="keyword">+</span><span class="default">4</span><span class="keyword">)%</span><span class="default">6</span><span class="keyword">],</span><span class="default">$q</span><span class="keyword">[(</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">)%</span><span class="default">6</span><span class="keyword">],</span><span class="default">$q</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">%</span><span class="default">6</span><span class="keyword">])); </span><span class="comment">//[1]
<br /> </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[1] - EDITOR NOTE: THIS IS A FIX FROM "hc at hob(removethis)soft dot net".</span></code></div>
  </div>
 </div>
  <div class="note" id="35765">  <div class="votes">
    <div id="Vu35765">
    <a href="/manual/vote-note.php?id=35765&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35765">
    <a href="/manual/vote-note.php?id=35765&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35765" title="60% like this...">
    1
    </div>
  </div>
  <a href="#35765" class="name">
  <strong class="user"><em>chris at drunkenpirates dot co dot uk</em></strong></a><a class="genanchor" href="#35765"> &para;</a><div class="date" title="2003-09-13 05:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35765">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br />An example combining the use of ImageColorAllocate, Imagesetpixel, Imagecopyresized and some basic Trig<br />*/<br /><br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br /><br /></span><span class="default">$height </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">;<br /></span><span class="default">$width </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">;<br /><br /></span><span class="default">$imA </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br /></span><span class="default">$imB </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$bckA </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$bckB </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//GENERATE GRAY SCALE PALLETE<br /><br /></span><span class="keyword">for(</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">256</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">++){<br />                </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">);<br />                }<br /><br /></span><span class="comment">//PRODUCE DATA<br /><br /></span><span class="default">$m</span><span class="keyword">=</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />for(</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">128</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">++){<br />                </span><span class="default">$s</span><span class="keyword">=  (</span><span class="default">sin</span><span class="keyword">( </span><span class="default">deg2rad</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">*</span><span class="default">360</span><span class="keyword">*</span><span class="default">$m</span><span class="keyword">/</span><span class="default">128</span><span class="keyword">) )+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">127</span><span class="keyword">;<br />                </span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">]=</span><span class="default">$s</span><span class="keyword">;<br />                }<br />for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgA</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">];<br />                }<br />        }<br />for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgB</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$col_arr</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">];<br />                }<br />        }<br /><br /></span><span class="comment">//SET PIXELS<br /><br /></span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">$height</span><span class="keyword">;</span><span class="default">$y</span><span class="keyword">++){<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$width</span><span class="keyword">;</span><span class="default">$x</span><span class="keyword">++){<br />                </span><span class="default">$imgC</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]=</span><span class="default">$imgA</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]+</span><span class="default">$imgB</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">];<br />                </span><span class="default">$s</span><span class="keyword">=</span><span class="default">$imgC</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">][</span><span class="default">$y</span><span class="keyword">]/</span><span class="default">2</span><span class="keyword">;<br />                </span><span class="default">Imagesetpixel</span><span class="keyword">(</span><span class="default">$imA</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">);<br />                }<br />        }<br /><br /></span><span class="comment">//RESIZE IMAGE FOR DISPLAY<br /><br /></span><span class="default">Imagecopyresized </span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">, </span><span class="default">$imA</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">);<br /></span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$imB</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="19128">  <div class="votes">
    <div id="Vu19128">
    <a href="/manual/vote-note.php?id=19128&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19128">
    <a href="/manual/vote-note.php?id=19128&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19128" title="60% like this...">
    1
    </div>
  </div>
  <a href="#19128" class="name">
  <strong class="user"><em>bisqwit at iki dot fi</em></strong></a><a class="genanchor" href="#19128"> &para;</a><div class="date" title="2002-02-16 08:30"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19128">
<div class="phpcode"><code><span class="html">Actually, you can't allocate more than 256 colours for an paletted image (ImageCreate).<br />Use ImageCreateTrueColor instead. For it to work, you need libgd version 2 support in php though.</span></code></div>
  </div>
 </div>
  <div class="note" id="69208">  <div class="votes">
    <div id="Vu69208">
    <a href="/manual/vote-note.php?id=69208&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69208">
    <a href="/manual/vote-note.php?id=69208&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69208" title="57% like this...">
    1
    </div>
  </div>
  <a href="#69208" class="name">
  <strong class="user"><em>behun at webconsult dot sk</em></strong></a><a class="genanchor" href="#69208"> &para;</a><div class="date" title="2006-08-27 01:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69208">
<div class="phpcode"><code><span class="html">Also, when you need more then 256 colors, use imagecreatetruecolor function. With this function you can use unlimited number of colors.</span></code></div>
  </div>
 </div>
  <div class="note" id="48399">  <div class="votes">
    <div id="Vu48399">
    <a href="/manual/vote-note.php?id=48399&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48399">
    <a href="/manual/vote-note.php?id=48399&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48399" title="57% like this...">
    1
    </div>
  </div>
  <a href="#48399" class="name">
  <strong class="user"><em>aaron at parecki dot com</em></strong></a><a class="genanchor" href="#48399"> &para;</a><div class="date" title="2004-12-22 02:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48399">
<div class="phpcode"><code><span class="html">This will let you tint an image to any specific color. The blacks of the source image become your specified color, and the whites remain white. Works best for colorizing greyscale images. <br /><br /><span class="default">&lt;?php<br /><br />$r </span><span class="keyword">= </span><span class="default">224</span><span class="keyword">;<br /></span><span class="default">$g </span><span class="keyword">= </span><span class="default">192</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$source_file </span><span class="keyword">= </span><span class="string">"picture.jpg"</span><span class="keyword">;<br /><br /></span><span class="default">$im_src </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$source_file</span><span class="keyword">);<br /></span><span class="default">$im_tint </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im_src</span><span class="keyword">),</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im_src</span><span class="keyword">));<br />for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">255</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">++) {<br />     </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im_tint</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">), </span><span class="default">max</span><span class="keyword">(</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">), </span><span class="default">max</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">));<br />}<br /></span><span class="default">ImageCopyMerge</span><span class="keyword">(</span><span class="default">$im_tint</span><span class="keyword">,</span><span class="default">$im_src</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$im_src</span><span class="keyword">), </span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$im_src</span><span class="keyword">), </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im_src</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /></span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im_tint</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101302">  <div class="votes">
    <div id="Vu101302">
    <a href="/manual/vote-note.php?id=101302&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101302">
    <a href="/manual/vote-note.php?id=101302&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101302" title="53% like this...">
    1
    </div>
  </div>
  <a href="#101302" class="name">
  <strong class="user"><em>phillip dot gooch at gmail dot com</em></strong></a><a class="genanchor" href="#101302"> &para;</a><div class="date" title="2010-12-08 07:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101302">
<div class="phpcode"><code><span class="html">If you even in a situation where it's not allocating the color you want it could be because of your images color allocation table. GIF and 8-bit PNG images are very susceptible to this.
<br />
<br />If your using an GIF and PNG try dropping a color from the table, should let you allocate another.</span></code></div>
  </div>
 </div>
  <div class="note" id="58756">  <div class="votes">
    <div id="Vu58756">
    <a href="/manual/vote-note.php?id=58756&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58756">
    <a href="/manual/vote-note.php?id=58756&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58756" title="100% like this...">
    2
    </div>
  </div>
  <a href="#58756" class="name">
  <strong class="user"><em>mlse</em></strong></a><a class="genanchor" href="#58756"> &para;</a><div class="date" title="2005-11-15 01:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58756">
<div class="phpcode"><code><span class="html">Another more general variation on the theme using the same naming conventions as the hexdec and dechex built-in functions ...<br /><br />Prototype:<br /><br />array hexrgb ( string hex_string )<br /><br />Returns:<br /><br />An associative array of the RGB components specified in hex_string.<br /><br />hexrgb() example:<br /><br /><span class="default">&lt;?php<br />$rgb </span><span class="keyword">= </span><span class="default">hexrgb</span><span class="keyword">(</span><span class="string">"0xAABBCC"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output is:<br /><br />Array<br />(<br />  [red] =&gt; 170<br />  [green] =&gt; 187<br />  [blue] =&gt; 204<br />)<br /><br />Implementation:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">hexrgb </span><span class="keyword">(</span><span class="default">$hexstr</span><span class="keyword">)<br />{<br />  </span><span class="default">$int </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$hexstr</span><span class="keyword">);<br /><br />  return array(</span><span class="string">"red" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x10</span><span class="keyword">),<br />               </span><span class="string">"green" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; (</span><span class="default">$int </span><span class="keyword">&gt;&gt; </span><span class="default">0x8</span><span class="keyword">),<br />               </span><span class="string">"blue" </span><span class="keyword">=&gt; </span><span class="default">0xFF </span><span class="keyword">&amp; </span><span class="default">$int</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />The output of hexdec can then be passed to imagecolorallocate and manipulated as required.</span></code></div>
  </div>
 </div>
  <div class="note" id="54257">  <div class="votes">
    <div id="Vu54257">
    <a href="/manual/vote-note.php?id=54257&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54257">
    <a href="/manual/vote-note.php?id=54257&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54257" title="100% like this...">
    2
    </div>
  </div>
  <a href="#54257" class="name">
  <strong class="user"><em>mail at kailashnadh dot name</em></strong></a><a class="genanchor" href="#54257"> &para;</a><div class="date" title="2005-06-28 07:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54257">
<div class="phpcode"><code><span class="html">This nifty function will produce the negative of a given image!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/********************************<br /><br />     Code by Kailash Nadh<br />     <a href="http://kailashnadh.name" rel="nofollow" target="_blank">http://kailashnadh.name</a><br /><br />     usage:<br />     img2neg("my_pic.jpg");<br /><br />*********************************/<br /><br /></span><span class="keyword">function </span><span class="default">img2neg</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">) {<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br /><br />    </span><span class="default">$source</span><span class="keyword">=</span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$pic</span><span class="keyword">);    </span><span class="comment">// Source<br />    </span><span class="default">$width</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);    </span><span class="default">$height</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);<br /><br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);    </span><span class="comment">// Our negative img in the making<br /><br />    </span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&lt; </span><span class="default">$height</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">++) {<br />        for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$width</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br /><br />        </span><span class="default">$colors</span><span class="keyword">=</span><span class="default">imagecolorsforindex</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">imagecolorat</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">));<br /><br />            </span><span class="comment">// this is what makes the colors negative<br />            </span><span class="default">$r</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">-</span><span class="default">$colors</span><span class="keyword">[</span><span class="string">'red'</span><span class="keyword">];<br />            </span><span class="default">$g</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">-</span><span class="default">$colors</span><span class="keyword">[</span><span class="string">'green'</span><span class="keyword">];<br />            </span><span class="default">$b</span><span class="keyword">=</span><span class="default">255</span><span class="keyword">-</span><span class="default">$colors</span><span class="keyword">[</span><span class="string">'blue'</span><span class="keyword">];<br />            </span><span class="default">$test</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">,</span><span class="default">$g</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br />            </span><span class="default">imagesetpixel</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$test</span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50981">  <div class="votes">
    <div id="Vu50981">
    <a href="/manual/vote-note.php?id=50981&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50981">
    <a href="/manual/vote-note.php?id=50981&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50981" title="100% like this...">
    2
    </div>
  </div>
  <a href="#50981" class="name">
  <strong class="user"><em>mv at brazil dot com</em></strong></a><a class="genanchor" href="#50981"> &para;</a><div class="date" title="2005-03-15 11:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50981">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * Create a image bar using lib GD
<br /> * Ege. &lt;img src="color_sample.php?color=FF0000" width="10 height="30"&gt;
<br /> */
<br />
<br />// Split the HTML color representation
<br /></span><span class="default">$hexcolor </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"color"</span><span class="keyword">], </span><span class="default">2</span><span class="keyword">); 
<br />
<br /></span><span class="comment">// Convert HEX values to DECIMAL
<br /></span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="string">"0x</span><span class="keyword">{</span><span class="default">$hexcolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="string">"0x</span><span class="keyword">{</span><span class="default">$hexcolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">hexdec</span><span class="keyword">(</span><span class="string">"0x</span><span class="keyword">{</span><span class="default">$hexcolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">);
<br />
<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">ImageCreate</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br /></span><span class="default">$colorallocate </span><span class="keyword">= </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$bincolor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br /></span><span class="default">ImageFilledRectangle</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">$colorallocate</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);
<br /></span><span class="default">ImagePNG</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57536">  <div class="votes">
    <div id="Vu57536">
    <a href="/manual/vote-note.php?id=57536&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57536">
    <a href="/manual/vote-note.php?id=57536&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57536" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57536" class="name">
  <strong class="user"><em>Zigbigidorlu at hotmail dot com</em></strong></a><a class="genanchor" href="#57536"> &para;</a><div class="date" title="2005-10-06 12:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57536">
<div class="phpcode"><code><span class="html">Here's a very simple and very effective code to change a HEX color to RGB.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">HEX2RGB</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">){
<br /> </span><span class="default">$color_array </span><span class="keyword">= array();
<br /> </span><span class="default">$hex_color </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$color</span><span class="keyword">);
<br /> for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">6</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />  </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex_color</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />  switch(</span><span class="default">$hex</span><span class="keyword">){
<br />   case </span><span class="string">"A"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">; break;
<br />   case </span><span class="string">"B"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">11</span><span class="keyword">; break;
<br />   case </span><span class="string">"C"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">; break;
<br />   case </span><span class="string">"D"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">; break;
<br />   case </span><span class="string">"E"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">14</span><span class="keyword">; break;
<br />   case </span><span class="string">"F"</span><span class="keyword">: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">15</span><span class="keyword">; break;
<br />   default: </span><span class="default">$num </span><span class="keyword">= </span><span class="default">$hex</span><span class="keyword">; break;
<br />  }
<br />  </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$color_array</span><span class="keyword">,</span><span class="default">$num</span><span class="keyword">);
<br /> }
<br /> </span><span class="default">$R </span><span class="keyword">= ((</span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] * </span><span class="default">16</span><span class="keyword">) + </span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br /> </span><span class="default">$G </span><span class="keyword">= ((</span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] * </span><span class="default">16</span><span class="keyword">) + </span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br /> </span><span class="default">$B </span><span class="keyword">= ((</span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] * </span><span class="default">16</span><span class="keyword">) + </span><span class="default">$color_array</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]);
<br /> return array(</span><span class="default">$R</span><span class="keyword">,</span><span class="default">$G</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">);
<br /> unset(</span><span class="default">$color_array</span><span class="keyword">,</span><span class="default">$hex</span><span class="keyword">,</span><span class="default">$R</span><span class="keyword">,</span><span class="default">$G</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49168">  <div class="votes">
    <div id="Vu49168">
    <a href="/manual/vote-note.php?id=49168&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49168">
    <a href="/manual/vote-note.php?id=49168&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49168" title="50% like this...">
    0
    </div>
  </div>
  <a href="#49168" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#49168"> &para;</a><div class="date" title="2005-01-18 02:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49168">
<div class="phpcode"><code><span class="html">When you are using truecolor images, you can also use bitwise operations to generate the color:<br /><span class="default">&lt;?php<br />$color </span><span class="keyword">= (</span><span class="default">$r </span><span class="keyword">&lt;&lt; </span><span class="default">16</span><span class="keyword">) | (</span><span class="default">$g </span><span class="keyword">&lt;&lt; </span><span class="default">8</span><span class="keyword">) | </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// 2261213<br /></span><span class="default">?&gt;<br /></span>This is identical to the imagecolorallocate() function, in truecolor images!</span></code></div>
  </div>
 </div>
  <div class="note" id="31271">  <div class="votes">
    <div id="Vu31271">
    <a href="/manual/vote-note.php?id=31271&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31271">
    <a href="/manual/vote-note.php?id=31271&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31271" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#31271" class="name">
  <strong class="user"><em>leif at harmsen dot net</em></strong></a><a class="genanchor" href="#31271"> &para;</a><div class="date" title="2003-04-15 07:31"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31271">
<div class="phpcode"><code><span class="html">I was unable to get any of the posted methods for converting colour to grayscale to work.  The problem appears to be the way gd creates images from jpeg inconsistently over various versions.  Eventually I wrote my own that works for me - this approach allocates the 256 color pallete first.  You can also play with separate $r, $g, $b variables before using imagecolorallocate in order to tone or tint the image.
<br />
<br /><span class="default">&lt;?php
<br />$resource </span><span class="keyword">= </span><span class="string">'whatever.jpg'</span><span class="keyword">;
<br /></span><span class="default">$im_size </span><span class="keyword">= </span><span class="default">GetImageSize</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">);
<br /></span><span class="default">$imageWidth </span><span class="keyword">= </span><span class="default">$im_size</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br /></span><span class="default">$imageHeight </span><span class="keyword">= </span><span class="default">$im_size</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br /></span><span class="default">$im </span><span class="keyword">= </span><span class="default">imageCreate</span><span class="keyword">(</span><span class="default">$imageWidth</span><span class="keyword">,</span><span class="default">$imageHeight</span><span class="keyword">);
<br />for (</span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">256</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">++) {     
<br />     </span><span class="default">ImageColorAllocate</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">);
<br />}
<br /></span><span class="default">$im2 </span><span class="keyword">= </span><span class="default">ImageCreateFromJpeg</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">);
<br /></span><span class="default">ImageCopyMerge</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">$im2</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">, </span><span class="default">$imageWidth</span><span class="keyword">, </span><span class="default">$imageHeight</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br /></span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$im2</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />go on using $im as your image, it is now grayscale ....</span></code></div>
  </div>
 </div>
  <div class="note" id="118993">  <div class="votes">
    <div id="Vu118993">
    <a href="/manual/vote-note.php?id=118993&amp;page=function.imagecolorallocate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118993">
    <a href="/manual/vote-note.php?id=118993&amp;page=function.imagecolorallocate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118993" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#118993" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#118993"> &para;</a><div class="date" title="2016-03-14 09:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118993">
<div class="phpcode"><code><span class="html">you have VERY limited space for color indexes (255 indexes on my system, with over 10 GB ram available, cli, no memory limit), when there is no more indexes available, imagecolorallocate will return false. when you create 2x indexes with the same r/g/b, you waste this very limited space. the function below should never fail, AND never waste any color index space. if there's already an index with the rgb, it will return the existing index, else it will try allocate 1, in the event that allocation fail (presumably because all index space is used up already), it will return the closest match to what you requested, and warn you via $couldFindExact.<br /><br />function myimagecolorallocate($gd,int $red,int $green,int $blue,bool &amp;$couldFindExact=null):int{<br />    $ret=imagecolorexact($gd, $red, $green, $blue);<br />    if($ret===-1){<br />        $ret=imagecolorallocate($gd, $red, $green, $blue);<br />        if($ret===false){<br />            $couldFindExact=false;//out of color indexes (255 index by default..wish i knew why)<br />            $ret=imagecolorclosest($gd, $red, $green, $blue);<br />        } else {<br />            $couldFindExact=true;<br />        }<br />    } else {<br />        $couldFindExact=true;<br />    }<br />    return $ret;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagecolorallocate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagecolorallocate.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
