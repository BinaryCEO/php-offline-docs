<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: exif_thumbnail - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.exif-thumbnail.php">
 <link rel="shorturl" href="https://www.php.net/exif-thumbnail">
 <link rel="alternate" href="https://www.php.net/exif-thumbnail" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exif.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.exif-tagname.php">
 <link rel="next" href="https://www.php.net/manual/en/function.read-exif-data.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.exif-thumbnail.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.exif-thumbnail.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.exif-thumbnail.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.exif-thumbnail.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.exif-thumbnail.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.exif-thumbnail.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.exif-thumbnail.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.exif-thumbnail.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.exif-thumbnail.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.exif-thumbnail.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.exif-thumbnail.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Retrieve the embedded thumbnail of an image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: exif_thumbnail - Manual" />
<meta name="twitter:description" content="Retrieve the embedded thumbnail of an image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: exif_thumbnail - Manual" />
<meta itemprop="description" content="Retrieve the embedded thumbnail of an image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Retrieve the embedded thumbnail of an image" />

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
        <a href="function.read-exif-data.php">
          read_exif_data &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.exif-tagname.php">
          &laquo; exif_tagname        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.exif.php'>Exif</a></li>      <li><a href='ref.exif.php'>Exif Functions</a></li>      </ul>
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
            <option value='en/function.exif-thumbnail.php' selected="selected">English</option>
            <option value='de/function.exif-thumbnail.php'>German</option>
            <option value='es/function.exif-thumbnail.php'>Spanish</option>
            <option value='fr/function.exif-thumbnail.php'>French</option>
            <option value='it/function.exif-thumbnail.php'>Italian</option>
            <option value='ja/function.exif-thumbnail.php'>Japanese</option>
            <option value='pt_BR/function.exif-thumbnail.php'>Brazilian Portuguese</option>
            <option value='ru/function.exif-thumbnail.php'>Russian</option>
            <option value='tr/function.exif-thumbnail.php'>Turkish</option>
            <option value='uk/function.exif-thumbnail.php'>Ukrainian</option>
            <option value='zh/function.exif-thumbnail.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.exif-thumbnail" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">exif_thumbnail</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">exif_thumbnail</span> &mdash; <span class="dc-title">Retrieve the embedded thumbnail of an image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.exif-thumbnail-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>exif_thumbnail</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$file</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$width</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$height</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$image_type</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>exif_thumbnail()</strong></span> reads the embedded thumbnail of an image. 
  </p>
  <p class="para">
   If you want to deliver thumbnails through this function, you should send
   the mimetype information using the <span class="function"><a href="function.header.php" class="function">header()</a></span> function.
  </p>
  <p class="para">
   It is possible that <span class="function"><strong>exif_thumbnail()</strong></span> cannot create an 
   image but can determine its size. In this case, the return value is 
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> but <code class="parameter">width</code> and <code class="parameter">height</code> 
   are set.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.exif-thumbnail-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">file</code></dt>
     <dd>
      <p class="para">
       The location of the image file. This can either be a path to the file 
       or a stream <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">width</code></dt>
     <dd>
      <p class="para">
       The return width of the returned thumbnail.
      </p>
     </dd>
    
    
     <dt><code class="parameter">height</code></dt>
     <dd>
      <p class="para">
       The returned height of the returned thumbnail.
      </p>
     </dd>
    
    
     <dt><code class="parameter">image_type</code></dt>
     <dd>
      <p class="para">
       The returned image type of the returned thumbnail.  This is either
       <abbr title="Tagged Image File Format">TIFF</abbr> or <abbr title="Joint Photographic Experts Group">JPEG</abbr>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.exif-thumbnail-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the embedded thumbnail, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the image contains no 
   thumbnail.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.exif-thumbnail-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.2.0</td>
       <td>
        The <code class="parameter">file</code> parameter now supports both local files
        and stream resources.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.exif-thumbnail-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2816">
    <p><strong>Example #1 <span class="function"><strong>exif_thumbnail()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$image </span><span style="color: #007700">= </span><span style="color: #0000BB">exif_thumbnail</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/image.jpg'</span><span style="color: #007700">, </span><span style="color: #0000BB">$width</span><span style="color: #007700">, </span><span style="color: #0000BB">$height</span><span style="color: #007700">, </span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$image</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: ' </span><span style="color: #007700">.</span><span style="color: #0000BB">image_type_to_mime_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">));<br />    echo </span><span style="color: #0000BB">$image</span><span style="color: #007700">;<br />    exit;<br />} else {<br />    </span><span style="color: #FF8000">// no thumbnail available, handle the error here<br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">'No thumbnail available'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.exif-thumbnail-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If the <code class="parameter">file</code> is used to pass a stream to this function, then the stream 
    must be seekable. Note that the file pointer position is not changed after this function returns.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.exif-thumbnail-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.exif-read-data.php" class="function" rel="rdfs-seeAlso">exif_read_data()</a> - Reads the EXIF headers from an image file</span></li>
    <li><span class="function"><a href="function.image-type-to-mime-type.php" class="function" rel="rdfs-seeAlso">image_type_to_mime_type()</a> - Get Mime-Type for image-type returned by getimagesize,
   exif_read_data, exif_thumbnail, exif_imagetype</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/exif/functions/exif-thumbnail.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.exif-thumbnail%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.exif-thumbnail&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exif-thumbnail.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43199">  <div class="votes">
    <div id="Vu43199">
    <a href="/manual/vote-note.php?id=43199&amp;page=function.exif-thumbnail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43199">
    <a href="/manual/vote-note.php?id=43199&amp;page=function.exif-thumbnail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43199" title="76% like this...">
    7
    </div>
  </div>
  <a href="#43199" class="name">
  <strong class="user"><em>Eric</em></strong></a><a class="genanchor" href="#43199"> &para;</a><div class="date" title="2004-06-13 07:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43199">
<div class="phpcode"><code><span class="html">This will allow you to manipulate the thumbnail image ($imgJpeg) using the various gd commands:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">if ((</span><span class="default">$imgJpeg </span><span class="keyword">= </span><span class="default">exif_thumbnail</span><span class="keyword">(</span><span class="default">$strImagePath</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">)<br />    print </span><span class="string">"No Thumbnail!"</span><span class="keyword">;<br />  else<br />    </span><span class="default">$imgJpeg </span><span class="keyword">= </span><span class="default">imageCreateFromString</span><span class="keyword">(</span><span class="default">$imgJpeg</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84777">  <div class="votes">
    <div id="Vu84777">
    <a href="/manual/vote-note.php?id=84777&amp;page=function.exif-thumbnail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84777">
    <a href="/manual/vote-note.php?id=84777&amp;page=function.exif-thumbnail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84777" title="71% like this...">
    3
    </div>
  </div>
  <a href="#84777" class="name">
  <strong class="user"><em>thrustvector at &amp;#39;gee&amp;#39;mail dot com</em></strong></a><a class="genanchor" href="#84777"> &para;</a><div class="date" title="2008-07-29 01:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84777">
<div class="phpcode"><code><span class="html">If you've edited the image with image editing software and it no longer contains an exif thumbnail, I've created a script that will add one back into it, using the "PHP Exif Library": <a href="http://pel.sourceforge.net/index.php" rel="nofollow" target="_blank">http://pel.sourceforge.net/index.php</a><br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once(</span><span class="string">'../PEL/PelJpeg.php'</span><span class="keyword">);<br />require_once(</span><span class="string">'../PEL/PelIfd.php'</span><span class="keyword">);<br /></span><span class="default">$fullpath </span><span class="keyword">= </span><span class="string">'images/DSC_0013c.JPG'</span><span class="keyword">;  </span><span class="comment"># path of source image (does not contain an exif thumbnail)<br />      <br /></span><span class="default">$jpeg </span><span class="keyword">= new </span><span class="default">PelJpeg</span><span class="keyword">(</span><span class="default">$fullpath</span><span class="keyword">);<br /> </span><span class="default">$exif </span><span class="keyword">= </span><span class="default">$jpeg</span><span class="keyword">-&gt;</span><span class="default">getExif</span><span class="keyword">();<br /> </span><span class="default">$tiff </span><span class="keyword">= </span><span class="default">$exif</span><span class="keyword">-&gt;</span><span class="default">getTiff</span><span class="keyword">();<br /> </span><span class="default">$ifd0 </span><span class="keyword">= </span><span class="default">$tiff</span><span class="keyword">-&gt;</span><span class="default">getIfd</span><span class="keyword">();        </span><span class="comment"># need this so that we can later link it to the new IFD <br /><br /> </span><span class="default">$ifd1 </span><span class="keyword">= </span><span class="default">$ifd0</span><span class="keyword">-&gt;</span><span class="default">getNextIfd</span><span class="keyword">();<br />if (!</span><span class="default">$ifd1</span><span class="keyword">) {        </span><span class="comment"># Only create thumbnail if one doesn't exist (i.e. there is no IFD1)<br />    </span><span class="default">$ifd1 </span><span class="keyword">= new </span><span class="default">PelIfd</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$ifd0</span><span class="keyword">-&gt;</span><span class="default">setNextIfd</span><span class="keyword">(</span><span class="default">$ifd1</span><span class="keyword">); </span><span class="comment"># point ifd0 to the new ifd1 (or else ifd1 will not be read)<br /><br />    </span><span class="default">$original </span><span class="keyword">= </span><span class="default">ImageCreateFromString</span><span class="keyword">(</span><span class="default">$jpeg</span><span class="keyword">-&gt;</span><span class="default">getBytes</span><span class="keyword">()); </span><span class="comment"># create image resource of original<br />    </span><span class="default">$orig_w</span><span class="keyword">=</span><span class="default">imagesx</span><span class="keyword">(</span><span class="default">$original</span><span class="keyword">);<br />    </span><span class="default">$orig_h</span><span class="keyword">=</span><span class="default">imagesy</span><span class="keyword">(</span><span class="default">$original</span><span class="keyword">);<br />    </span><span class="default">$wmax </span><span class="keyword">= </span><span class="default">160</span><span class="keyword">;<br />    </span><span class="default">$hmax </span><span class="keyword">= </span><span class="default">120</span><span class="keyword">;<br /><br />    if (</span><span class="default">$orig_w</span><span class="keyword">&gt;</span><span class="default">$wmax </span><span class="keyword">|| </span><span class="default">$orig_h</span><span class="keyword">&gt;</span><span class="default">$hmax</span><span class="keyword">) {<br />        </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">$wmax</span><span class="keyword">;<br />        </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">$hmax</span><span class="keyword">;<br />        if (</span><span class="default">$thumb_w</span><span class="keyword">/</span><span class="default">$orig_w</span><span class="keyword">*</span><span class="default">$orig_h</span><span class="keyword">&gt;</span><span class="default">$thumb_h</span><span class="keyword">)<br />            </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$thumb_h</span><span class="keyword">*</span><span class="default">$orig_w</span><span class="keyword">/</span><span class="default">$orig_h</span><span class="keyword">); </span><span class="comment"># maintain aspect ratio<br />        </span><span class="keyword">else<br />            </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$thumb_w</span><span class="keyword">*</span><span class="default">$orig_h</span><span class="keyword">/</span><span class="default">$orig_w</span><span class="keyword">);<br />    }<br />    else { </span><span class="comment"># only set the thumb's size if the original is larger than 'wmax'x'hmax'<br />        </span><span class="default">$thumb_w</span><span class="keyword">=</span><span class="default">$orig_w</span><span class="keyword">;<br />        </span><span class="default">$thumb_h</span><span class="keyword">=</span><span class="default">$orig_h</span><span class="keyword">;<br />    }<br /><br />        </span><span class="comment"># create image resource with thumbnail sizing<br />    </span><span class="default">$thumb</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$thumb_w</span><span class="keyword">,</span><span class="default">$thumb_h</span><span class="keyword">); <br />        </span><span class="comment">## Resize original and copy to the blank thumb resource<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">,</span><span class="default">$original</span><span class="keyword">,<br />                               </span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$thumb_w</span><span class="keyword">,</span><span class="default">$thumb_h</span><span class="keyword">,</span><span class="default">$orig_w</span><span class="keyword">,</span><span class="default">$orig_h</span><span class="keyword">);<br /><br />        </span><span class="comment"># start writing output to buffer<br />    </span><span class="default">ob_start</span><span class="keyword">();        <br />        </span><span class="comment"># outputs thumb resource contents to buffer<br />    </span><span class="default">ImageJpeg</span><span class="keyword">(</span><span class="default">$thumb</span><span class="keyword">);    <br />        </span><span class="comment"># create PelDataWindow from buffer thumb contents (and end output to buffer)<br />    </span><span class="default">$window </span><span class="keyword">= new </span><span class="default">PelDataWindow</span><span class="keyword">(</span><span class="default">ob_get_clean</span><span class="keyword">()); <br /><br />    if (</span><span class="default">$window</span><span class="keyword">) {    <br /><br />        </span><span class="default">$ifd1</span><span class="keyword">-&gt;</span><span class="default">setThumbnail</span><span class="keyword">(</span><span class="default">$window</span><span class="keyword">); </span><span class="comment"># set window data as thumbnail in ifd1<br />        </span><span class="default">$outpath </span><span class="keyword">= </span><span class="default">$fullpath</span><span class="keyword">; </span><span class="comment"># overwrite original jpg file<br />        </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$outpath</span><span class="keyword">, </span><span class="default">$jpeg</span><span class="keyword">-&gt;</span><span class="default">getBytes</span><span class="keyword">()); </span><span class="comment"># write everything to output filename<br />            # Show thumbnail in file:<br />        </span><span class="keyword">echo </span><span class="string">'&lt;img src="thumb_exif.php?image='</span><span class="keyword">.</span><span class="default">$outpath</span><span class="keyword">.</span><span class="string">'" border=0 alt="If you see this, it did not work"&gt;&lt;br&gt;'</span><span class="keyword">;<br /><br />        <br />    }<br />}<br />else {<br />    echo </span><span class="string">'ifd1 already exists! (IFD1 is where the thumbnail is stored)&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br />&lt;?php </span><span class="comment"># This is the code in thumb_exif.php :<br />        </span><span class="default">$imgdat </span><span class="keyword">= </span><span class="default">exif_thumbnail</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'image'</span><span class="keyword">], </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: ' </span><span class="keyword">. </span><span class="default">image_type_to_mime_type</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">));<br />        echo(</span><span class="default">$imgdat</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If you have a lot of such files, you can easily make a script that searches them out and adds thumbnails to their exif.</span></code></div>
  </div>
 </div>
  <div class="note" id="78357">  <div class="votes">
    <div id="Vu78357">
    <a href="/manual/vote-note.php?id=78357&amp;page=function.exif-thumbnail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78357">
    <a href="/manual/vote-note.php?id=78357&amp;page=function.exif-thumbnail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78357" title="61% like this...">
    3
    </div>
  </div>
  <a href="#78357" class="name">
  <strong class="user"><em>Miguel Vitorino</em></strong></a><a class="genanchor" href="#78357"> &para;</a><div class="date" title="2007-10-08 06:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78357">
<div class="phpcode"><code><span class="html">use this if you want to embed a thumbnail directly on the HTML page without writing it first to a file:<br /><br /><span class="default">&lt;?php<br />$image </span><span class="keyword">= </span><span class="default">exif_thumbnail</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;img  width='</span><span class="default">$width</span><span class="string">' height='</span><span class="default">$height</span><span class="string">' src='data:image/gif;base64,"</span><span class="keyword">.</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">).</span><span class="string">"'&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72168">  <div class="votes">
    <div id="Vu72168">
    <a href="/manual/vote-note.php?id=72168&amp;page=function.exif-thumbnail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72168">
    <a href="/manual/vote-note.php?id=72168&amp;page=function.exif-thumbnail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72168" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#72168" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#72168"> &para;</a><div class="date" title="2007-01-05 06:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72168">
<div class="phpcode"><code><span class="html">If you want to convert from TIFF to JPG you can use ImageMagick if it is installed in your server.<br /><br /><span class="default">&lt;?php<br />$exec </span><span class="keyword">= </span><span class="string">'convert /path/to/file.tiff /path/to/file.jpg 2&gt;&amp;1'</span><span class="keyword">;<br />@</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$exec</span><span class="keyword">, </span><span class="default">$exec_output</span><span class="keyword">, </span><span class="default">$exec_retval</span><span class="keyword">);<br /><br /></span><span class="comment">//possible error<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$exec_output</span><span class="keyword">)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49017">  <div class="votes">
    <div id="Vu49017">
    <a href="/manual/vote-note.php?id=49017&amp;page=function.exif-thumbnail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49017">
    <a href="/manual/vote-note.php?id=49017&amp;page=function.exif-thumbnail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49017" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#49017" class="name">
  <strong class="user"><em>hanspeter dot debets at dendrite dot com</em></strong></a><a class="genanchor" href="#49017"> &para;</a><div class="date" title="2005-01-14 06:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49017">
<div class="phpcode"><code><span class="html">Great that the thumbnail can be in TIFF format (f.i. Kodak cameras have embedded thumbnail in TIFF) BUT I have not been able to show TIFF as an embedded image in HTML (using the &lt;IMG...&gt; tag). There seems to be no function in PHP to change TIFF to, lets say, JPG. (imagecreatefromstring gives a 'unknown datatype' error for the TIFF stream. So below sample works great for JPEG embedded thumbnail, but not for TIFF embedded (but then, maybe I did something wrong?):<br /><br />test_exif.php:<br /><br />&lt;HTML&gt;<br />&lt;HEAD&gt;<br />    &lt;TITLE&gt;Test EXIF Read  &lt;/TITLE&gt;<br />&lt;/HEAD&gt;<br />&lt;BODY&gt;<br /><span class="default">&lt;?php<br />$image</span><span class="keyword">=</span><span class="string">'P0000614.JPG'</span><span class="keyword">;<br />echo(</span><span class="string">"&lt;B&gt;"</span><span class="keyword">. </span><span class="default">$image</span><span class="keyword">. </span><span class="string">"&lt;/B&gt;:&lt;BR&gt;&lt;BR&gt;\n"</span><span class="keyword">);<br /><br /></span><span class="default">$exif </span><span class="keyword">= </span><span class="default">exif_read_data</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="string">'ANY_TAG'</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />if (!</span><span class="default">$exif</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">)<br />{<br />    echo(</span><span class="string">"Image contains headers&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    echo(</span><span class="string">"&lt;A href=showthumb.php?image=" </span><span class="keyword">. </span><span class="default">$image </span><span class="keyword">.</span><span class="string">"&gt; &lt;IMG border=0 src=showthumb.php?image=" </span><span class="keyword">. </span><span class="default">$image </span><span class="keyword">.</span><span class="string">"&gt;&lt;/A&gt;&lt;BR&gt;&lt;BR&gt;"</span><span class="keyword">);<br /><br />    foreach (</span><span class="default">$exif </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$section</span><span class="keyword">) <br />    {<br />        foreach (</span><span class="default">$section </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) <br />        {<br />            echo </span><span class="string">"</span><span class="default">$key</span><span class="string">.</span><span class="default">$name</span><span class="string">: </span><span class="default">$val</span><span class="string">&lt;br&gt;\n"</span><span class="keyword">;<br />        }<br />    }<br />}<br />else<br />{<br />    echo(</span><span class="string">"Sorry, image &lt;B&gt;"</span><span class="keyword">.</span><span class="default">$image </span><span class="keyword">. </span><span class="string">"&lt;/B&gt; does not contain (readable) EXIF data."</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>&lt;/BODY&gt;<br />&lt;/HTML&gt;<br /><br />showthumb.php:<br /><br /><span class="default">&lt;?php<br />$imgdat </span><span class="keyword">= </span><span class="default">exif_thumbnail</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'image'</span><span class="keyword">],</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: ' </span><span class="keyword">. </span><span class="default">image_type_to_mime_type</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">));<br />echo(</span><span class="default">$imgdat</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />When clicking on the &lt;A&gt; opens the TIFF image in the program that windows assigned to this type, but the JPEG opens in the browser.<br /><br />I am using PHP 4.3.6 on windows iis 4 (yeah, I know.....)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.exif-thumbnail&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exif-thumbnail.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exif.php">Exif Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.exif-imagetype.php" title="exif_&#8203;imagetype">exif_&#8203;imagetype</a>
                        </li>
                                                <li class="">
                            <a href="function.exif-read-data.php" title="exif_&#8203;read_&#8203;data">exif_&#8203;read_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.exif-tagname.php" title="exif_&#8203;tagname">exif_&#8203;tagname</a>
                        </li>
                                                <li class="current">
                            <a href="function.exif-thumbnail.php" title="exif_&#8203;thumbnail">exif_&#8203;thumbnail</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.read-exif-data.php" title="read_&#8203;exif_&#8203;data">read_&#8203;exif_&#8203;data</a>
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
