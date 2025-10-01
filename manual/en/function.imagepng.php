<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imagepng - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imagepng.php">
 <link rel="shorturl" href="https://www.php.net/imagepng">
 <link rel="alternate" href="https://www.php.net/imagepng" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagepalettetotruecolor.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imagepolygon.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imagepng.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imagepng.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imagepng.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imagepng.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imagepng.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imagepng.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imagepng.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imagepng.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imagepng.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imagepng.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imagepng.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output a PNG image to either the browser or a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imagepng - Manual" />
<meta name="twitter:description" content="Output a PNG image to either the browser or a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imagepng - Manual" />
<meta itemprop="description" content="Output a PNG image to either the browser or a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output a PNG image to either the browser or a file" />

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
        <a href="function.imagepolygon.php">
          imagepolygon &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagepalettetotruecolor.php">
          &laquo; imagepalettetotruecolor        </a>
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
            <option value='en/function.imagepng.php' selected="selected">English</option>
            <option value='de/function.imagepng.php'>German</option>
            <option value='es/function.imagepng.php'>Spanish</option>
            <option value='fr/function.imagepng.php'>French</option>
            <option value='it/function.imagepng.php'>Italian</option>
            <option value='ja/function.imagepng.php'>Japanese</option>
            <option value='pt_BR/function.imagepng.php'>Brazilian Portuguese</option>
            <option value='ru/function.imagepng.php'>Russian</option>
            <option value='tr/function.imagepng.php'>Turkish</option>
            <option value='uk/function.imagepng.php'>Ukrainian</option>
            <option value='zh/function.imagepng.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imagepng" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imagepng</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imagepng</span> &mdash; <span class="dc-title">Output a PNG image to either the browser or a file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imagepng-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imagepng</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.gdimage.php" class="type GdImage">GdImage</a></span> <code class="parameter">$image</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$file</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$quality</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$filters</code><span class="initializer"> = -1</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Outputs or saves a <abbr title="Portable Network Graphics">PNG</abbr> image from the given 
   <code class="parameter">image</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imagepng-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">image</code></dt><dd><p class="para">A <span class="classname"><a href="class.gdimage.php" class="classname">GdImage</a></span> object, returned by one of the image creation functions,
such as <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>.</p></dd>
    
     <dt><code class="parameter">file</code></dt>
     <dd>
      <p class="para">The path or an open stream resource (which is automatically closed after this function returns) to save the file to. If not set or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the raw image stream will be output directly.</p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is invalid if the <code class="parameter">quality</code> and
        <code class="parameter">filters</code> arguments are not used.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">quality</code></dt>
     <dd>
      <p class="para">
       Compression level: from 0 (no compression) to 9.
       The default (<code class="literal">-1</code>) uses the zlib compression default.
       For more information see the <a href="http://www.zlib.net/manual.html" class="link external">&raquo;&nbsp;zlib manual</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">filters</code></dt>
     <dd>
      <p class="para">
       Allows reducing the PNG file size. It is a bitmask field which may be
       set to any combination of the <strong><code><a href="image.constants.php#constant.png-filter-none">PNG_FILTER_<span class="replaceable">*</span></a></code></strong>
       constants. <strong><code><a href="image.constants.php#constant.png-no-filter">PNG_NO_FILTER</a></code></strong> or 
       <strong><code><a href="image.constants.php#constant.png-all-filters">PNG_ALL_FILTERS</a></code></strong> may also be used to respectively
       disable or activate all filters.
       The default value (<code class="literal">-1</code>) disables filtering.
      </p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="simpara">
        The <code class="parameter">filters</code> parameter is ignored by system libgd.
       </p>
      </div>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imagepng-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="caution"><strong class="caution">Caution</strong><p class="simpara">However, if libgd fails to output the image, this function returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</p></div>
 </div>


 <div class="refsect1 errors" id="refsect1-function.imagepng-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">quality</code> is invalid.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imagepng-changelog">
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
      <td>8.4.0</td>
      <td>
       Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">quality</code> is invalid.
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


 <div class="refsect1 examples" id="refsect1-function.imagepng-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$im </span><span style="color: #007700">= </span><span style="color: #0000BB">imagecreatefrompng</span><span style="color: #007700">(</span><span style="color: #DD0000">"test.png"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: image/png'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$im</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imagepng-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.imagegif.php" class="function" rel="rdfs-seeAlso">imagegif()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagewbmp.php" class="function" rel="rdfs-seeAlso">imagewbmp()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagejpeg.php" class="function" rel="rdfs-seeAlso">imagejpeg()</a> - Output image to browser or file</span></li>
   <li><span class="function"><a href="function.imagetypes.php" class="function" rel="rdfs-seeAlso">imagetypes()</a> - Return the image types supported by this PHP build</span></li>
   <li><span class="function"><a href="function.imagesavealpha.php" class="function" rel="rdfs-seeAlso">imagesavealpha()</a> - Whether to retain full alpha channel information when saving images</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/imagepng.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imagepng%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imagepng&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagepng.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">33 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106093">  <div class="votes">
    <div id="Vu106093">
    <a href="/manual/vote-note.php?id=106093&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106093">
    <a href="/manual/vote-note.php?id=106093&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106093" title="70% like this...">
    51
    </div>
  </div>
  <a href="#106093" class="name">
  <strong class="user"><em>matteosistisette at gmail dot com</em></strong></a><a class="genanchor" href="#106093"> &para;</a><div class="date" title="2011-10-09 12:02"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106093">
<div class="phpcode"><code><span class="html">The name "quality" for the compression parameter is quite misleading, as png compression is always lossless. The trade off is between speed and filesize, it cannot affect quality.<br /><br />Here's something I found at stackoverflow; I haven't checked it, but if it is correct it should definitely included in the documentation:<br /><br />---<br />from php source (gd.h):<br /><br />/* 2.0.12: Compression level: 0-9 or -1, where 0 is NO COMPRESSION at all,<br />* 1 is FASTEST but produces larger files, 9 provides the best<br />* compression (smallest files) but takes a long time to compress, and<br />* -1 selects the default compiled into the zlib library.<br />*/<br />Conclusion: Based on the Zlib manual (<a href="http://www.zlib.net/manual.html" rel="nofollow" target="_blank">http://www.zlib.net/manual.html</a>) the default compression level is set to 6.<br />---<br /><br />Regarding suggestions to rescale the 0-99 quality range of jpeg into the 0-9 range of png, note that for jpeg 99 is minimum compression (maximum quality) while for png 9 is maximum compression (quality doesn't change).</span></code></div>
  </div>
 </div>
  <div class="note" id="28775">  <div class="votes">
    <div id="Vu28775">
    <a href="/manual/vote-note.php?id=28775&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28775">
    <a href="/manual/vote-note.php?id=28775&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28775" title="76% like this...">
    42
    </div>
  </div>
  <a href="#28775" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#28775"> &para;</a><div class="date" title="2003-01-23 10:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28775">
<div class="phpcode"><code><span class="html">"Tip: As with anything that outputs its result directly to the browser, you can use the output-control functions (<a href="http://www.php.net/manual/en/ref.outcontrol.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ref.outcontrol.php</a>) to capture the output of this function, and save it in a string (for example)."<br /><br />ob_start();<br />imagepng($image);<br />$image_data = ob_get_contents();<br />ob_end_clean();<br /><br />And now you can save $image_data to a database, for example, instead of first writing it to file and then reading the data from it. Just don't forget to use mysql_escape_string...</span></code></div>
  </div>
 </div>
  <div class="note" id="31308">  <div class="votes">
    <div id="Vu31308">
    <a href="/manual/vote-note.php?id=31308&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31308">
    <a href="/manual/vote-note.php?id=31308&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31308" title="100% like this...">
    4
    </div>
  </div>
  <a href="#31308" class="name">
  <strong class="user"><em>mail at stefanbechtold dot de</em></strong></a><a class="genanchor" href="#31308"> &para;</a><div class="date" title="2003-04-16 06:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31308">
<div class="phpcode"><code><span class="html">to all the ones, who like having their users fill their profil with an image without destroying a fixed design the following should be a great way to handle this problem.<br /><br />this file opens a picture from $imagepath and returns it as a valid picture to embed in: &lt;img src="file.php?image=123.jpg[?maxX=200&amp;maxY=150]"&gt; (in [] = optional)<br /><br />but this file does more than this. it also adds black borders to files that are smaller than the max. size, so adding borders to the left and right where a image is too high :-)<br /><br />if there is a need for a copyright note this script will also help you. you can put in a various text to $copyright. the text length should be in relationship to $maxX and $maxY.<br /><br />Well there are other features of the script, just try'em out and have fun with it :-)<br /><br />bye <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># standard height &amp; weight if not given<br /></span><span class="keyword">if(!isset(</span><span class="default">$maxX</span><span class="keyword">)) </span><span class="default">$maxX </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />if(!isset(</span><span class="default">$maxY</span><span class="keyword">)) </span><span class="default">$maxY </span><span class="keyword">= </span><span class="default">75</span><span class="keyword">;<br /><br /></span><span class="comment"># colour- &amp; textvalues<br /></span><span class="default">$picBG </span><span class="keyword">= </span><span class="string">"0,0,0"</span><span class="keyword">; </span><span class="comment"># RGB-value !<br /></span><span class="default">$picFG </span><span class="keyword">= </span><span class="string">"104,104,104"</span><span class="keyword">; </span><span class="comment"># RGB-value !<br /></span><span class="default">$copyright </span><span class="keyword">= </span><span class="string">"stefan bechtold"</span><span class="keyword">; <br /></span><span class="default">$font </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="comment"># minimal &amp; maximum zoom<br /></span><span class="default">$minZoom </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment"># per cent related on orginal (!=0)<br /></span><span class="default">$maxZoom </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">; </span><span class="comment"># per cent related on orginal (!=0)<br /><br /># paths<br /></span><span class="default">$imgpath </span><span class="keyword">= </span><span class="string">"userimages/"</span><span class="keyword">; </span><span class="comment"># ending with "/" !<br /></span><span class="default">$nopicurl </span><span class="keyword">= </span><span class="string">"../images/nopic.jpg"</span><span class="keyword">; </span><span class="comment"># starting in $imagepath!!!<br /></span><span class="default">$nofileurl </span><span class="keyword">= </span><span class="string">"../images/nofile.jpg"</span><span class="keyword">; </span><span class="comment"># starting in $imagepath!!!<br /><br /></span><span class="keyword">if(!isset(</span><span class="default">$image</span><span class="keyword">) || empty(</span><span class="default">$image</span><span class="keyword">))<br />    </span><span class="default">$imageurl </span><span class="keyword">= </span><span class="default">$imgpath </span><span class="keyword">. </span><span class="default">$nopicurl</span><span class="keyword">;<br />elseif(! </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$imgpath </span><span class="keyword">. </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)))<br />    </span><span class="default">$imageurl </span><span class="keyword">= </span><span class="default">$imgpath </span><span class="keyword">. </span><span class="default">$nofileurl</span><span class="keyword">;<br />else<br />    </span><span class="default">$imageurl </span><span class="keyword">= </span><span class="default">$imgpath </span><span class="keyword">. </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /><br /></span><span class="comment"># reading image<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">getImageSize</span><span class="keyword">(</span><span class="default">$imageurl</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">); </span><span class="comment"># $info, only to handle problems with earlier php versions...<br /></span><span class="keyword">switch(</span><span class="default">$image</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) {<br />      case </span><span class="default">1</span><span class="keyword">:<br />       </span><span class="comment"># GIF image<br />        </span><span class="default">$timg </span><span class="keyword">= </span><span class="default">imageCreateFromGIF</span><span class="keyword">(</span><span class="default">$imageurl</span><span class="keyword">);<br />        break;<br />    case </span><span class="default">2</span><span class="keyword">:<br />       </span><span class="comment"># JPEG image<br />        </span><span class="default">$timg </span><span class="keyword">= </span><span class="default">imageCreateFromJPEG</span><span class="keyword">(</span><span class="default">$imageurl</span><span class="keyword">);<br />        break;<br />    case </span><span class="default">3</span><span class="keyword">:<br />       </span><span class="comment"># PNG image<br />        </span><span class="default">$timg </span><span class="keyword">= </span><span class="default">imageCreateFromPNG</span><span class="keyword">(</span><span class="default">$imageurl</span><span class="keyword">);<br />        break;<br />}<br /><br /></span><span class="comment"># reading image sizes<br /></span><span class="default">$imgX </span><span class="keyword">= </span><span class="default">$image</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">$imgY </span><span class="keyword">= </span><span class="default">$image</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="comment"># calculation zoom factor <br /></span><span class="default">$_X </span><span class="keyword">= </span><span class="default">$imgX</span><span class="keyword">/</span><span class="default">$maxX </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">;<br /></span><span class="default">$_Y </span><span class="keyword">= </span><span class="default">$imgY</span><span class="keyword">/</span><span class="default">$maxY </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="comment"># selecting correct zoom factor, so that the image always keeps in the given format<br /># no matter if it is more higher than wider or the other way around<br /></span><span class="keyword">if((</span><span class="default">100</span><span class="keyword">-</span><span class="default">$_X</span><span class="keyword">) &lt; (</span><span class="default">100</span><span class="keyword">-</span><span class="default">$_Y</span><span class="keyword">)) </span><span class="default">$_K </span><span class="keyword">= </span><span class="default">$_X</span><span class="keyword">;<br />else </span><span class="default">$_K </span><span class="keyword">= </span><span class="default">$_Y</span><span class="keyword">;<br /><br /></span><span class="comment"># zoom check to the original<br /></span><span class="keyword">if(</span><span class="default">$_K </span><span class="keyword">&gt; </span><span class="default">10000</span><span class="keyword">/</span><span class="default">$minZoom</span><span class="keyword">) </span><span class="default">$_K </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">/</span><span class="default">$minZoom</span><span class="keyword">;<br />if(</span><span class="default">$_K </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">/</span><span class="default">$maxZoom</span><span class="keyword">) </span><span class="default">$_K </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">/</span><span class="default">$maxZoom</span><span class="keyword">;<br /><br /></span><span class="comment"># calculate new image sizes<br /></span><span class="default">$newX </span><span class="keyword">= </span><span class="default">$imgX</span><span class="keyword">/</span><span class="default">$_K </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">;<br /></span><span class="default">$newY </span><span class="keyword">= </span><span class="default">$imgY</span><span class="keyword">/</span><span class="default">$_K </span><span class="keyword">* </span><span class="default">100</span><span class="keyword">;<br /><br /></span><span class="comment"># set start positoin of the image<br /># always centered <br /></span><span class="default">$posX </span><span class="keyword">= (</span><span class="default">$maxX</span><span class="keyword">-</span><span class="default">$newX</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$posY </span><span class="keyword">= (</span><span class="default">$maxY</span><span class="keyword">-</span><span class="default">$newY</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br /><br /></span><span class="comment"># creating new image with given sizes<br /></span><span class="default">$imgh </span><span class="keyword">= </span><span class="default">imageCreateTrueColor</span><span class="keyword">(</span><span class="default">$maxX</span><span class="keyword">, </span><span class="default">$maxY</span><span class="keyword">);<br /><br /></span><span class="comment"># setting colours<br /></span><span class="default">$cols </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$picBG</span><span class="keyword">);<br /></span><span class="default">$bgcol </span><span class="keyword">= </span><span class="default">imageColorallocate</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]), </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]));<br /></span><span class="default">$cols </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$picFG</span><span class="keyword">);<br /></span><span class="default">$fgcol </span><span class="keyword">= </span><span class="default">imageColorallocate</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]), </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]));<br /><br /></span><span class="comment"># fill background<br /></span><span class="default">imageFill</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$bgcol</span><span class="keyword">);<br /><br /></span><span class="comment"># create small copy of the image<br /></span><span class="default">imageCopyResampled</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">, </span><span class="default">$timg</span><span class="keyword">, </span><span class="default">$posX</span><span class="keyword">, </span><span class="default">$posY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$newX</span><span class="keyword">, </span><span class="default">$newY</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$image</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="comment"># writing copyright note<br /></span><span class="default">imageStringUp</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">, </span><span class="default">$font</span><span class="keyword">, </span><span class="default">$maxX</span><span class="keyword">-</span><span class="default">9</span><span class="keyword">, </span><span class="default">$maxY</span><span class="keyword">-</span><span class="default">3</span><span class="keyword">, </span><span class="default">$copyright</span><span class="keyword">, </span><span class="default">$fgcol</span><span class="keyword">);<br /><br /></span><span class="comment"># output<br /></span><span class="keyword">switch(</span><span class="default">$image</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) {<br />      case </span><span class="default">1</span><span class="keyword">:<br />    </span><span class="comment"># GIF image<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/gif"</span><span class="keyword">);<br />        </span><span class="default">imageGIF</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">);<br />    case </span><span class="default">2</span><span class="keyword">:<br />    </span><span class="comment"># JPEG image<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/jpeg"</span><span class="keyword">);<br />        </span><span class="default">imageJPEG</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">);<br />    case </span><span class="default">3</span><span class="keyword">:<br />    </span><span class="comment"># PNG image<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/png"</span><span class="keyword">);<br />        </span><span class="default">imagePNG</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">);<br />}<br /><br /></span><span class="comment"># cleaning cache<br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$timg</span><span class="keyword">);<br /></span><span class="default">imageDestroy</span><span class="keyword">(</span><span class="default">$imgh</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85748">  <div class="votes">
    <div id="Vu85748">
    <a href="/manual/vote-note.php?id=85748&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85748">
    <a href="/manual/vote-note.php?id=85748&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85748" title="79% like this...">
    14
    </div>
  </div>
  <a href="#85748" class="name">
  <strong class="user"><em>luxian.m [at] gmail [dot] com</em></strong></a><a class="genanchor" href="#85748"> &para;</a><div class="date" title="2008-09-16 01:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85748">
<div class="phpcode"><code><span class="html">If you want to open a png image with alpha blending, you need to do something like this:<br /><br /><span class="default">&lt;?php<br />$file </span><span class="keyword">= </span><span class="string">'semitransparent.png'</span><span class="keyword">; </span><span class="comment">// path to png image<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">); </span><span class="comment">// open image<br /></span><span class="default">imagealphablending</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// setting alpha blending on<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// save alphablending setting (important)<br /></span><span class="default">?&gt;<br /></span><br />I spent almost a day to find out why alpha blending doesn't work. I hope this is usefull to others too :)</span></code></div>
  </div>
 </div>
  <div class="note" id="96303">  <div class="votes">
    <div id="Vu96303">
    <a href="/manual/vote-note.php?id=96303&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96303">
    <a href="/manual/vote-note.php?id=96303&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96303" title="75% like this...">
    15
    </div>
  </div>
  <a href="#96303" class="name">
  <strong class="user"><em>r.lomas at infonie.fr</em></strong></a><a class="genanchor" href="#96303"> &para;</a><div class="date" title="2010-02-19 07:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96303">
<div class="phpcode"><code><span class="html">I just lost about 4 hours on a really stupid problem. My images on the local server were somehow broken and therefore did not display in the browsers. After much looking around and testing, including re-installing apache on my computer a couple of times, I traced the problem to an included file. <br />No the problem was not a whitespace, but the UTF BOM encoding character at the begining of one of my inluded files...<br />So beware of your included files!<br />Make sure they are not encoded in UTF or otherwise in UTF without BOM.<br />Hope it save someone's time.</span></code></div>
  </div>
 </div>
  <div class="note" id="28667">  <div class="votes">
    <div id="Vu28667">
    <a href="/manual/vote-note.php?id=28667&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28667">
    <a href="/manual/vote-note.php?id=28667&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28667" title="80% like this...">
    3
    </div>
  </div>
  <a href="#28667" class="name">
  <strong class="user"><em>johnbeech at mkv25.net</em></strong></a><a class="genanchor" href="#28667"> &para;</a><div class="date" title="2003-01-20 04:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28667">
<div class="phpcode"><code><span class="html">PNG files are already compressed. They use a lossless compression algorithm. If you are using HighColour images, the compression only does so much. For low colour images (16 or 256) the compression is much better.<br /><br />It is pointless trying to compress the images further before sending to a browser.</span></code></div>
  </div>
 </div>
  <div class="note" id="108032">  <div class="votes">
    <div id="Vu108032">
    <a href="/manual/vote-note.php?id=108032&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108032">
    <a href="/manual/vote-note.php?id=108032&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108032" title="70% like this...">
    12
    </div>
  </div>
  <a href="#108032" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#108032"> &para;</a><div class="date" title="2012-03-23 11:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108032">
<div class="phpcode"><code><span class="html">Be careful when using a variable for the file name.<br />PHP behavior with $filename differs when switching to PHP5.4 : PHP5.3 will use $filename='' the same way as $filename=NULL (e.g. no warning)<br /><span class="default">&lt;?php<br />$im </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">); </span><span class="comment"># Warning: imagepng(): Filename cannot be empty<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">); </span><span class="comment"># works as expected<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120610">  <div class="votes">
    <div id="Vu120610">
    <a href="/manual/vote-note.php?id=120610&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120610">
    <a href="/manual/vote-note.php?id=120610&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120610" title="75% like this...">
    2
    </div>
  </div>
  <a href="#120610" class="name">
  <strong class="user"><em>klaus at hax dot at</em></strong></a><a class="genanchor" href="#120610"> &para;</a><div class="date" title="2017-02-07 05:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120610">
<div class="phpcode"><code><span class="html">apparently something changed from php 5.5 to 5.6.<br /><br />I used to call ImagePng($image, '');<br />apparently this doesn't work anymore in 5.6 as it returns: imagepng(): Filename cannot be empty<br /><br />ImagePng($image, NULL); <br /><br />seems to work fine though.</span></code></div>
  </div>
 </div>
  <div class="note" id="100577">  <div class="votes">
    <div id="Vu100577">
    <a href="/manual/vote-note.php?id=100577&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100577">
    <a href="/manual/vote-note.php?id=100577&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100577" title="62% like this...">
    9
    </div>
  </div>
  <a href="#100577" class="name">
  <strong class="user"><em>mhorne69 at gmail dot com</em></strong></a><a class="genanchor" href="#100577"> &para;</a><div class="date" title="2010-10-24 07:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100577">
<div class="phpcode"><code><span class="html">If you're generating an image dynamically based on post data and don't want to save it to the server, sending it to be displayed can cause problems as when the person tries to save it, the browser will request it again from the server (causing any post data to be lost and probably a corrupted png).
<br />
<br />The easiest way to get around this is to force it to download using the content disposition header, for example:
<br />
<br /><span class="default">&lt;?php
<br />header</span><span class="keyword">(</span><span class="string">'Content-Disposition: Attachment;filename=image.png'</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="23739">  <div class="votes">
    <div id="Vu23739">
    <a href="/manual/vote-note.php?id=23739&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23739">
    <a href="/manual/vote-note.php?id=23739&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23739" title="66% like this...">
    1
    </div>
  </div>
  <a href="#23739" class="name">
  <strong class="user"><em>bgd1977 at hotmail dot com</em></strong></a><a class="genanchor" href="#23739"> &para;</a><div class="date" title="2002-07-26 06:37"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23739">
<div class="phpcode"><code><span class="html">I have experienced segfaults and bus errors with the following configuration: FreeBSD4.4, Apache 1.3.26, PHP 4.2.2, GD-1.8.4, PDFlib 4.0.1. The apache process crashed when calling the imagepng function, but it didn't crash when calling the imagejpg function, or imagecreatefrompng...<br /><br /> Some wasted hours (lots) later, in which I have tried to recompile gd, libpng, php, libjpeg, what-not, I have found the following advices:<br /><a href="http://bugs.php.net/bug.php?id=16841" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=16841</a><br /><br /> So the problem was not with the png library, but rather with the PDFlib. Even though all the threads led to a png-problem... so I have simply upgraded to PDFlib 4.0.3 (w/o any special configure arguments; --with-libpng didn't work anyways), recompiled PHP, and now everything works (imagepng, pdf creation, etc.).<br /><br /> Hope this helps,<br /> bogdan</span></code></div>
  </div>
 </div>
  <div class="note" id="117819">  <div class="votes">
    <div id="Vu117819">
    <a href="/manual/vote-note.php?id=117819&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117819">
    <a href="/manual/vote-note.php?id=117819&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117819" title="61% like this...">
    4
    </div>
  </div>
  <a href="#117819" class="name">
  <strong class="user"><em>Chris F</em></strong></a><a class="genanchor" href="#117819"> &para;</a><div class="date" title="2015-08-14 04:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117819">
<div class="phpcode"><code><span class="html">I was curious about the relationship between quality, processing time and resulting image size, so I created this little benchmark to test it (The image used was originally RGB_24bits_palette_R85.png, found on wikipedia). Results are at the bottom.<br /><span class="default">&lt;?php<br />$sizes </span><span class="keyword">= [</span><span class="string">'32'</span><span class="keyword">, </span><span class="string">'64'</span><span class="keyword">, </span><span class="string">'128'</span><span class="keyword">, </span><span class="string">'256'</span><span class="keyword">, </span><span class="string">'512'</span><span class="keyword">, </span><span class="string">'1024'</span><span class="keyword">, </span><span class="string">'2048'</span><span class="keyword">];<br /><br />foreach (</span><span class="default">$sizes </span><span class="keyword">as </span><span class="default">$size</span><span class="keyword">) {<br />    echo </span><span class="string">"\nSize: </span><span class="keyword">{</span><span class="default">$size</span><span class="keyword">}</span><span class="string">x</span><span class="keyword">{</span><span class="default">$size</span><span class="keyword">}</span><span class="string">px:\n"</span><span class="keyword">;<br /><br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="string">"images/test</span><span class="keyword">{</span><span class="default">$size</span><span class="keyword">}</span><span class="string">.png"</span><span class="keyword">);<br />    for (</span><span class="default">$quality </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$quality </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$quality</span><span class="keyword">++) {<br />        </span><span class="default">ob_start</span><span class="keyword">();<br /><br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$quality</span><span class="keyword">);<br />        </span><span class="default">$elapsed </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start</span><span class="keyword">;<br /><br />        </span><span class="default">$blob </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br />        </span><span class="default">$blobSize </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$blob</span><span class="keyword">);<br />        echo </span><span class="string">"quality: </span><span class="default">$quality</span><span class="string">, size: </span><span class="default">$blobSize</span><span class="string">, elapsed: </span><span class="default">$elapsed</span><span class="string">\n"</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Results (some omitted for brevity):<br /><br />// Size: 32x32px:<br />// quality: 0, size: 3172, elapsed: 0.00013399124145508<br />// quality: 1, size: 266, elapsed: 9.4890594482422E-5<br />// quality: 2, size: 264, elapsed: 7.7009201049805E-5<br />// quality: 3, size: 223, elapsed: 7.4863433837891E-5<br />// quality: 4, size: 225, elapsed: 8.5830688476562E-5<br />// quality: 5, size: 209, elapsed: 8.5115432739258E-5<br />// quality: 6, size: 208, elapsed: 9.608268737793E-5<br />// quality: 7, size: 205, elapsed: 0.0001060962677002<br />// quality: 8, size: 186, elapsed: 0.00015091896057129<br />// quality: 9, size: 181, elapsed: 0.00022006034851074<br /><br />// Size: 128x128px:<br />// quality: 0, size: 49425, elapsed: 0.0010969638824463<br />// quality: 1, size: 976, elapsed: 0.00091886520385742<br />// quality: 2, size: 938, elapsed: 0.00088310241699219<br />// quality: 3, size: 925, elapsed: 0.00087594985961914<br />// quality: 4, size: 608, elapsed: 0.0009760856628418<br />// quality: 5, size: 607, elapsed: 0.00098395347595215<br />// quality: 6, size: 601, elapsed: 0.0010099411010742<br />// quality: 7, size: 602, elapsed: 0.001086950302124<br />// quality: 8, size: 521, elapsed: 0.001910924911499<br />// quality: 9, size: 491, elapsed: 0.0029060840606689<br /><br />// Size: 512x512px:<br />// quality: 0, size: 788279, elapsed: 0.012928009033203<br />// quality: 1, size: 12467, elapsed: 0.013065099716187<br />// quality: 2, size: 11885, elapsed: 0.013008117675781<br />// quality: 3, size: 11190, elapsed: 0.013030052185059<br />// quality: 4, size: 7311, elapsed: 0.016619920730591<br />// quality: 5, size: 6994, elapsed: 0.016351222991943<br />// quality: 6, size: 6475, elapsed: 0.016234159469604<br />// quality: 7, size: 6432, elapsed: 0.016525983810425<br />// quality: 8, size: 6094, elapsed: 0.022937774658203<br />// quality: 9, size: 5649, elapsed: 0.065664052963257<br /><br />// Size: 2048x2048px:<br />// quality: 0, size: 12605375, elapsed: 0.20983290672302<br />// quality: 1, size: 451735, elapsed: 0.19678711891174<br />// quality: 2, size: 409375, elapsed: 0.19415307044983<br />// quality: 3, size: 366404, elapsed: 0.20460414886475<br />// quality: 4, size: 312538, elapsed: 0.22785305976868<br />// quality: 5, size: 281671, elapsed: 0.23320484161377<br />// quality: 6, size: 244248, elapsed: 0.28935289382935<br />// quality: 7, size: 238310, elapsed: 0.33481192588806<br />// quality: 8, size: 217038, elapsed: 0.71698379516602<br />// quality: 9, size: 208881, elapsed: 1.858146905899<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113515">  <div class="votes">
    <div id="Vu113515">
    <a href="/manual/vote-note.php?id=113515&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113515">
    <a href="/manual/vote-note.php?id=113515&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113515" title="62% like this...">
    2
    </div>
  </div>
  <a href="#113515" class="name">
  <strong class="user"><em>php dot net at phor dot net</em></strong></a><a class="genanchor" href="#113515"> &para;</a><div class="date" title="2013-10-23 01:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113515">
<div class="phpcode"><code><span class="html">If you are outputting a PNG directly in response to a client request it is important to check your web server configuration.<br /><br />Some clients may request your images with a &lt;a href="<a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html" rel="nofollow" target="_blank">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html</a>"&gt;accept header&lt;/a&gt; of image/*. Default configurations of Apache and possibly other servers will by default NOT allow your script to run in response to this request.<br /><br />Apache is specifically discussed at <a href="http://stackoverflow.com/q/19169337" rel="nofollow" target="_blank">http://stackoverflow.com/q/19169337</a> but other server have been documented to have issue too.<br /><br />In other words, when testing your application don't just use the web browser, consider a phone's browser and networking libraries which could send different headers.</span></code></div>
  </div>
 </div>
  <div class="note" id="60128">  <div class="votes">
    <div id="Vu60128">
    <a href="/manual/vote-note.php?id=60128&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60128">
    <a href="/manual/vote-note.php?id=60128&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60128" title="60% like this...">
    3
    </div>
  </div>
  <a href="#60128" class="name">
  <strong class="user"><em>adrenalin at NOSPAM dot myrealbox dot com</em></strong></a><a class="genanchor" href="#60128"> &para;</a><div class="date" title="2005-12-27 07:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60128">
<div class="phpcode"><code><span class="html">Trying to resize a png 256 colors image and save it in 256 colors with a correct color palette ? (if you'll save a 256 color image in truecolor palette the result image will have a big size).<br />I spent some hours trying various function to get a good quality 256 color png image, but because of color palette the result image quality was awful.<br />But thank to the comment of zmorris at zsculpt dot com from imagetruecolortopalette function page, i figured out how to get a properly image!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">resize_png</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$dst</span><span class="keyword">,</span><span class="default">$dstw</span><span class="keyword">,</span><span class="default">$dsth</span><span class="keyword">) {<br />    list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">, </span><span class="default">$attr</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />    </span><span class="default">$tim </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$dstw</span><span class="keyword">,</span><span class="default">$dsth</span><span class="keyword">);<br />    </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$tim</span><span class="keyword">,</span><span class="default">$im</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$dstw</span><span class="keyword">,</span><span class="default">$dsth</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">,</span><span class="default">$height</span><span class="keyword">);<br />    </span><span class="default">$tim </span><span class="keyword">= </span><span class="default">ImageTrueColorToPalette2</span><span class="keyword">(</span><span class="default">$tim</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$tim</span><span class="keyword">,</span><span class="default">$dst</span><span class="keyword">);<br />}<br /></span><span class="comment">//zmorris at zsculpt dot com function, a bit completed<br /></span><span class="keyword">function </span><span class="default">ImageTrueColorToPalette2</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$dither</span><span class="keyword">, </span><span class="default">$ncolors</span><span class="keyword">) {<br />    </span><span class="default">$width </span><span class="keyword">= </span><span class="default">imagesx</span><span class="keyword">( </span><span class="default">$image </span><span class="keyword">);<br />    </span><span class="default">$height </span><span class="keyword">= </span><span class="default">imagesy</span><span class="keyword">( </span><span class="default">$image </span><span class="keyword">);<br />    </span><span class="default">$colors_handle </span><span class="keyword">= </span><span class="default">ImageCreateTrueColor</span><span class="keyword">( </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height </span><span class="keyword">);<br />    </span><span class="default">ImageCopyMerge</span><span class="keyword">( </span><span class="default">$colors_handle</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">, </span><span class="default">100 </span><span class="keyword">);<br />    </span><span class="default">ImageTrueColorToPalette</span><span class="keyword">( </span><span class="default">$image</span><span class="keyword">, </span><span class="default">$dither</span><span class="keyword">, </span><span class="default">$ncolors </span><span class="keyword">);<br />    </span><span class="default">ImageColorMatch</span><span class="keyword">( </span><span class="default">$colors_handle</span><span class="keyword">, </span><span class="default">$image </span><span class="keyword">);<br />    </span><span class="default">ImageDestroy</span><span class="keyword">(</span><span class="default">$colors_handle</span><span class="keyword">);<br />    return </span><span class="default">$image</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Good luck,<br />Namolovan Nicolae, Moldova</span></code></div>
  </div>
 </div>
  <div class="note" id="72237">  <div class="votes">
    <div id="Vu72237">
    <a href="/manual/vote-note.php?id=72237&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72237">
    <a href="/manual/vote-note.php?id=72237&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72237" title="56% like this...">
    5
    </div>
  </div>
  <a href="#72237" class="name">
  <strong class="user"><em>alex at gateway-productions dot com</em></strong></a><a class="genanchor" href="#72237"> &para;</a><div class="date" title="2007-01-08 03:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72237">
<div class="phpcode"><code><span class="html">barts code below does not work at least with gd 2<br /><br />Only returns a blank image with alpha not the source resized<br /><br />        $im = ImageCreateFromPNG($sourcefile);<br />        $im_dest = imagecreatetruecolor ($forcedwidth, $forcedheight);<br />        imagealphablending($im_dest, false);<br />        imagecopyresampled($im_dest, $im, 0, 0, 0, 0, $wm_width, $wm_height, $forcedwidth, $forcedheight);<br />        imagesavealpha($im_dest, true);<br />        imagepng($im_dest, $destfile);<br />        imagedestroy($img_dest);<br /><br />ps you also forgot image destroy and you had a random var in imagepng undefined in your post</span></code></div>
  </div>
 </div>
  <div class="note" id="97032">  <div class="votes">
    <div id="Vu97032">
    <a href="/manual/vote-note.php?id=97032&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97032">
    <a href="/manual/vote-note.php?id=97032&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97032" title="54% like this...">
    2
    </div>
  </div>
  <a href="#97032" class="name">
  <strong class="user"><em>wietse89 at gmail dot com</em></strong></a><a class="genanchor" href="#97032"> &para;</a><div class="date" title="2010-03-29 06:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97032">
<div class="phpcode"><code><span class="html">When you allow multiple output formats, (jpg/png) but want to use the 1-100 quality scale (like jpg), you will have to format the number:<br /><br /><span class="default">&lt;?php<br />$pngQuality </span><span class="keyword">= (</span><span class="default">$quality </span><span class="keyword">- </span><span class="default">100</span><span class="keyword">) / </span><span class="default">11.111111</span><span class="keyword">;<br /></span><span class="default">$pngQuality </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$pngQuality</span><span class="keyword">));<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$pngQuality</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53021">  <div class="votes">
    <div id="Vu53021">
    <a href="/manual/vote-note.php?id=53021&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53021">
    <a href="/manual/vote-note.php?id=53021&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53021" title="53% like this...">
    1
    </div>
  </div>
  <a href="#53021" class="name">
  <strong class="user"><em>neburk0rk at gmail dot com</em></strong></a><a class="genanchor" href="#53021"> &para;</a><div class="date" title="2005-05-20 11:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53021">
<div class="phpcode"><code><span class="html">This is my way to store PNG-images in a MySQL database... You cannot directly store the PNG-image in a variable, and then parse it in the database, cos if you try to define it to a variable, it'll still just output it...<br />In my method i use three functions<br /> to "capture" the output and store it in a variable; ob_start (to start the output buffering),    ob_get_contents  (to capture the output),    and  ob_end_clean (to erase the cache, and end the output buffering)<br /><br /><span class="default">&lt;?php<br />$imagefile </span><span class="keyword">= </span><span class="string">"changethistogourimage.gif"</span><span class="keyword">;<br /><br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromgif</span><span class="keyword">(</span><span class="default">$imagefile</span><span class="keyword">);<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br /></span><span class="default">$imagevariable </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br /></span><span class="comment">/*<br />HERE YOU CAN MESS WITH THE $imagevariable AS YOU LIKE<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128421">  <div class="votes">
    <div id="Vu128421">
    <a href="/manual/vote-note.php?id=128421&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128421">
    <a href="/manual/vote-note.php?id=128421&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128421" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128421" class="name">
  <strong class="user"><em>Messerli at messerli dot net</em></strong></a><a class="genanchor" href="#128421"> &para;</a><div class="date" title="2023-04-22 03:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128421">
<div class="phpcode"><code><span class="html">// Send the Image as Base64 Data directly to the browser.<br />// No File on the Server! No Hacker Problem. <br /><br />  ob_start();<br />  imagepng($img);<br />  $ImageData=ob_get_contents();<br />  ob_end_clean();<br />  echo '&lt;img src="data:image/jpg;base64,'.base64_encode($ImageData).'"&gt;';</span></code></div>
  </div>
 </div>
  <div class="note" id="104913">  <div class="votes">
    <div id="Vu104913">
    <a href="/manual/vote-note.php?id=104913&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104913">
    <a href="/manual/vote-note.php?id=104913&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104913" title="52% like this...">
    1
    </div>
  </div>
  <a href="#104913" class="name">
  <strong class="user"><em>Zane, MegaLab.it</em></strong></a><a class="genanchor" href="#104913"> &para;</a><div class="date" title="2011-07-14 11:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104913">
<div class="phpcode"><code><span class="html">My script was unable to complete: Fatal error: Allowed memory size of XX bytes exhausted (tried to allocate XX+n bytes).<br /><br />I found out that PHP handles images in uncompressed format: my input image was 8768x4282@32 bit =&gt; ~150 MB per single in-memory copy.<br /><br />As a solution, you can either check the dimensions and reject anything too big or, as I did, use ini_set('memory_limit','1024M'); on the page start (if your server has enough on board memory).</span></code></div>
  </div>
 </div>
  <div class="note" id="102944">  <div class="votes">
    <div id="Vu102944">
    <a href="/manual/vote-note.php?id=102944&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102944">
    <a href="/manual/vote-note.php?id=102944&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102944" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102944" class="name">
  <strong class="user"><em>codam</em></strong></a><a class="genanchor" href="#102944"> &para;</a><div class="date" title="2011-03-15 10:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102944">
<div class="phpcode"><code><span class="html">Creating a transparent image filled with tranparent color only
<br />
<br />I had some hard times putting up this one:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Set the image
<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);
<br /></span><span class="default">imagesavealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Fill the image with transparent color
<br /></span><span class="default">$color </span><span class="keyword">= </span><span class="default">imagecolorallocatealpha</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">0x00</span><span class="keyword">,</span><span class="default">127</span><span class="keyword">);
<br /></span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$color</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Save the image to file.png
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="string">"file.png"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Destroy image
<br /></span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90760">  <div class="votes">
    <div id="Vu90760">
    <a href="/manual/vote-note.php?id=90760&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90760">
    <a href="/manual/vote-note.php?id=90760&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90760" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90760" class="name">
  <strong class="user"><em>thalis kalfigopoulos</em></strong></a><a class="genanchor" href="#90760"> &para;</a><div class="date" title="2009-05-08 04:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90760">
<div class="phpcode"><code><span class="html">I ran across the following WRT sessions and image creation.<br /><br />In main.php:<br /><span class="default">&lt;?php<br />  </span><span class="keyword">(...</span><span class="default">session in progress</span><span class="keyword">...)<br />  </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">]=</span><span class="string">'some text...'</span><span class="keyword">;<br />  </span><span class="default">$imgSrc</span><span class="keyword">=</span><span class="string">'<a href="http://foo.com/createImage.php?sid=" rel="nofollow" target="_blank">http://foo.com/createImage.php?sid=</a>'</span><span class="keyword">.</span><span class="default">session_id</span><span class="keyword">();<br />  echo(</span><span class="string">'&lt;img src="'</span><span class="keyword">.</span><span class="default">$imgSrc</span><span class="keyword">.</span><span class="string">'"/&gt;'</span><span class="keyword">);<br />  unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">]);<br />...<br /></span><span class="default">?&gt;<br /></span><br />In createImage.php:<br /><span class="default">&lt;?php<br />  header</span><span class="keyword">(</span><span class="string">'image/png'</span><span class="keyword">);<br />  </span><span class="default">session_id</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'sid'</span><span class="keyword">]);<br />  </span><span class="default">session_start</span><span class="keyword">();<br />  </span><span class="default">$img</span><span class="keyword">=</span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">200</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);  <br />  </span><span class="default">$text_color</span><span class="keyword">=</span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">);<br />  </span><span class="default">imagestring</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">,  </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">], </span><span class="default">$text_color</span><span class="keyword">);<br />  </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />  </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Problem: main.php execution ends before createImage.php writing the text to image, thus the unset($_SESSION['text']) destroys the text and you end up with empty image.<br />Solution: move call to unset() as last statement of createImage.php</span></code></div>
  </div>
 </div>
  <div class="note" id="86735">  <div class="votes">
    <div id="Vu86735">
    <a href="/manual/vote-note.php?id=86735&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86735">
    <a href="/manual/vote-note.php?id=86735&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86735" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86735" class="name">
  <strong class="user"><em>eetu11 at suomi24 dot fi</em></strong></a><a class="genanchor" href="#86735"> &para;</a><div class="date" title="2008-11-01 07:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86735">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /><br />    </span><span class="comment">// aid of the highlighted Alliance <br />    </span><span class="default">$marked_aid </span><span class="keyword">= </span><span class="default">2403</span><span class="keyword">; <br />     <br />    </span><span class="comment">// Preferences <br />    </span><span class="default">$mysqlhost </span><span class="keyword">= </span><span class="string">'localhost'</span><span class="keyword">; <br />    </span><span class="default">$mysqluser </span><span class="keyword">= </span><span class="string">'user'</span><span class="keyword">; <br />    </span><span class="default">$mysqlpass </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">; <br />    </span><span class="default">$mysqldb </span><span class="keyword">= </span><span class="string">'database'</span><span class="keyword">; <br />     <br />    </span><span class="comment">// Create database connection and select database <br />    </span><span class="default">$db </span><span class="keyword">= @</span><span class="default">mysql_connect</span><span class="keyword">(</span><span class="default">$mysqlhost</span><span class="keyword">, </span><span class="default">$mysqluser</span><span class="keyword">, </span><span class="default">$mysqlpass</span><span class="keyword">) OR die(</span><span class="string">'Can not connect to DB-Server!'</span><span class="keyword">); <br />    </span><span class="default">$db_select </span><span class="keyword">= @</span><span class="default">mysql_select_db</span><span class="keyword">(</span><span class="default">$mysqldb</span><span class="keyword">) OR die(</span><span class="string">'Can not select DB!'</span><span class="keyword">); <br />     <br />    </span><span class="comment">// Create image: Map goes from -400 to 400 <br />    // -&gt; sums up tp 2*400+1 (+1 due to the 0 in the center) <br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreate</span><span class="keyword">(</span><span class="default">801</span><span class="keyword">, </span><span class="default">801</span><span class="keyword">); <br />     <br />    </span><span class="comment">// Choose the colors of background, normal village and highlighted alliance <br />    </span><span class="default">$color_background </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">); <br />    </span><span class="default">$color_normal </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">); <br />    </span><span class="default">$color_marked </span><span class="keyword">= </span><span class="default">imagecolorallocate</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); <br /><br />    </span><span class="comment">// Fill images background with chosen color <br />    </span><span class="default">imagefill</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$color_background</span><span class="keyword">); <br /><br />    </span><span class="comment">// Select ALL villages from the DB and order by ascending ID <br />    // (Fields are numbered from top left to bottom right) <br />    </span><span class="default">$query </span><span class="keyword">= </span><span class="string">'SELECT x, y, aid FROM x_world ORDER BY id ASC'</span><span class="keyword">; <br />    </span><span class="default">$result </span><span class="keyword">= @</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">) OR die(</span><span class="string">'Can not select villages from table x_world!'</span><span class="keyword">); <br />     <br />    </span><span class="comment">// Check whether there any villages at all <br />    </span><span class="keyword">if (</span><span class="default">mysql_num_rows</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) { <br />         <br />        </span><span class="comment">// Select first village <br />        </span><span class="default">$row </span><span class="keyword">= @</span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); <br />         <br />        </span><span class="comment">// These variables save the location on which we are currently drawing <br />        </span><span class="default">$x_pointer </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />        </span><span class="default">$y_pointer </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />         <br />        </span><span class="comment">// Outer loop for the Y-coordinates <br />        </span><span class="keyword">for(</span><span class="default">$y</span><span class="keyword">=</span><span class="default">400</span><span class="keyword">; </span><span class="default">$y </span><span class="keyword">&gt;= -</span><span class="default">400</span><span class="keyword">; </span><span class="default">$y</span><span class="keyword">--) { <br />         <br />            </span><span class="comment">// Inner loop for the X-coordinates <br />            </span><span class="keyword">for (</span><span class="default">$x</span><span class="keyword">=-</span><span class="default">400</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">400</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) { <br />                 <br />                </span><span class="comment">// Once we reached the coordinates matching the current record selected from the DB: <br />                </span><span class="keyword">if (</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] == </span><span class="default">$x </span><span class="keyword">AND </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">] == </span><span class="default">$y</span><span class="keyword">) { <br />                     <br />                    </span><span class="comment">// Selecting the village color depending on the aid <br />                    </span><span class="keyword">if (</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'aid'</span><span class="keyword">] == </span><span class="default">$marked_aid</span><span class="keyword">) { <br />                        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">$color_marked</span><span class="keyword">; <br />                    } else { <br />                        </span><span class="default">$color </span><span class="keyword">= </span><span class="default">$color_normal</span><span class="keyword">; <br />                    } <br />                     <br />                    </span><span class="comment">// Drawing the village with the selected color <br />                    </span><span class="default">imagefilledrectangle</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$x_pointer</span><span class="keyword">, </span><span class="default">$y_pointer</span><span class="keyword">, (</span><span class="default">$x_pointer </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">), (</span><span class="default">$y_pointer </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">), </span><span class="default">$color</span><span class="keyword">); <br />                     <br />                    </span><span class="comment">// Select next record <br />                    </span><span class="default">$row </span><span class="keyword">= @</span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); <br />                } <br />                 <br />                </span><span class="comment">// Increase pointer for X-coordinate <br />                </span><span class="default">$x_pointer</span><span class="keyword">++; <br />            } <br />             <br />            </span><span class="comment">// Increase pointer for Y-coordinate <br />            </span><span class="default">$y_pointer</span><span class="keyword">++; <br />             <br />            </span><span class="comment">// We reached the end of a line and have to set the X-pointer to 0 again <br />            </span><span class="default">$x_pointer </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />        }     <br />    } <br />     <br />    </span><span class="comment">// Select the HTTP-Header for the selected filetype <br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">); <br />     <br />    </span><span class="comment">// Generate image and print it <br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">); <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79150">  <div class="votes">
    <div id="Vu79150">
    <a href="/manual/vote-note.php?id=79150&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79150">
    <a href="/manual/vote-note.php?id=79150&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79150" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79150" class="name">
  <strong class="user"><em>Jeff Sauro</em></strong></a><a class="genanchor" href="#79150"> &para;</a><div class="date" title="2007-11-13 03:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79150">
<div class="phpcode"><code><span class="html">My webserver, running 5.14 didn't like the header that was generated using imagepng(). It works find on my local test server and on 4.x from another host. <br /><br />The generated image displays in the browser (IE, firefox) but when saved to a file or inserted into an RTF file, the image was corrupted. As a test, when attempting to right-click to save as, the image format was not recognized. <br /><br />The only work-around appears to be adding the additional paramaters. <br /><br />So instead of just <br />imagepng($image); //DIDNT WORK--CORUPT IMAGE<br /><br />This worked<br />imagepng($image,NULL,0,NULL);<br /><br />and saving to disk, this worked:<br />imagepng($image,$file_location,0,NULL);<br /><br />Jeff</span></code></div>
  </div>
 </div>
  <div class="note" id="45027">  <div class="votes">
    <div id="Vu45027">
    <a href="/manual/vote-note.php?id=45027&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45027">
    <a href="/manual/vote-note.php?id=45027&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45027" title="50% like this...">
    0
    </div>
  </div>
  <a href="#45027" class="name">
  <strong class="user"><em>pm at dontspamme dot pietmarcus dot com</em></strong></a><a class="genanchor" href="#45027"> &para;</a><div class="date" title="2004-08-23 01:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45027">
<div class="phpcode"><code><span class="html">in reply to: cbrasho at yahoo dot com<br /><br />if you use Apache as a webserver, you could do the following:<br /><br />You could set up a 'img' directory in your webspace.<br />In that directory there will be two files: a .htaccess file and a img.php file<br />the .htaccess file contains the following code:<br />ErrorDocument 404 /img/img.php<br /><br />the img.php file looks something like this:<br /><br /><span class="default">&lt;?php<br />  $file </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REDIRECT_URL'</span><span class="keyword">];<br /><br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">'select img_blob from images where filename=\\'' . $file . '</span><span class="keyword">\\</span><span class="string">');<br />  list($blob) = mysql_fetch_row($result);<br /><br />  header('</span><span class="default">HTTP</span><span class="keyword">/</span><span class="default">1.0 200 Ok</span><span class="string">');<br />  header("Content-type: image/jpeg");<br />  <br />  print $blob; # or whatever works, I don'</span><span class="default">t </span><span class="keyword">use </span><span class="default">this<br />?&gt;<br /></span><br />if you use a url for your image like <a href="http://test.com/img/image1.jpeg," rel="nofollow" target="_blank">http://test.com/img/image1.jpeg,</a> which doesn't exist, normally you would get a 404-page. in this case, the 404 is being handled by img.php, which brings up the required image...</span></code></div>
  </div>
 </div>
  <div class="note" id="19130">  <div class="votes">
    <div id="Vu19130">
    <a href="/manual/vote-note.php?id=19130&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19130">
    <a href="/manual/vote-note.php?id=19130&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19130" title="50% like this...">
    0
    </div>
  </div>
  <a href="#19130" class="name">
  <strong class="user"><em>ruelle at xtof dot com</em></strong></a><a class="genanchor" href="#19130"> &para;</a><div class="date" title="2002-02-17 06:34"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19130">
<div class="phpcode"><code><span class="html">Better than a chmod 777 to any '/dir/pic.png' you should :<br />- test if dir is writable (is_writable func.)<br />- use chmod 700 (more secure because let only the webserver ID have access)<br /><br />In any case you should program a (crontab) script to change the owner ID of any images created.</span></code></div>
  </div>
 </div>
  <div class="note" id="103787">  <div class="votes">
    <div id="Vu103787">
    <a href="/manual/vote-note.php?id=103787&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103787">
    <a href="/manual/vote-note.php?id=103787&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103787" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#103787" class="name">
  <strong class="user"><em>boukeversteegh at gmail dot com</em></strong></a><a class="genanchor" href="#103787"> &para;</a><div class="date" title="2011-05-03 02:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103787">
<div class="phpcode"><code><span class="html">If you care about speed, you probably already cache your generated images to a file. In that case, DON'T use "createimagefrompng" and "imagepng" to output the image. Use fpassthru instead. It is literally hundreds of times faster.<br /><br /><span class="default">&lt;?php<br />  header</span><span class="keyword">(</span><span class="string">"Content-Type: image/png"</span><span class="keyword">);<br />  <br />  </span><span class="comment"># Generate cachefile for image, if it doesn't exist<br />  </span><span class="keyword">if( !</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$cachefile</span><span class="keyword">) ) {<br />    </span><span class="default">$im </span><span class="keyword">= </span><span class="default">generateimage</span><span class="keyword">();     </span><span class="comment"># some code generates an image resource<br />    </span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$cachefile</span><span class="keyword">); </span><span class="comment"># store the image to cachefile<br /><br />    # don't output it like this:<br />    /* imagepng($im);*/<br />   <br />    </span><span class="default">imagedestroy</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br />  }<br /><br />  </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$cachefile</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">); </span><span class="comment"># stream the image directly from the cachefile<br />  </span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />  exit;<br /></span><span class="default">?&gt;<br /></span><br />I've tested it with a 5120x5120 (1.2Mb) image, that was cached on the harddisk. Using imagepng, the transfer took 12 seconds. Using fpassthru, it took only 32ms!</span></code></div>
  </div>
 </div>
  <div class="note" id="82612">  <div class="votes">
    <div id="Vu82612">
    <a href="/manual/vote-note.php?id=82612&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82612">
    <a href="/manual/vote-note.php?id=82612&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82612" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#82612" class="name">
  <strong class="user"><em>vicrry at yahoo dot com</em></strong></a><a class="genanchor" href="#82612"> &para;</a><div class="date" title="2008-04-18 04:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82612">
<div class="phpcode"><code><span class="html">@ phpman at texmedia dot de:<br /><br />The compression range in PNG is in range 0-9, i think if you specified a compression level higher than 9, it'll be completely "compressed", or suppressed in the other words.<br /><br />The compression level is originally for JPEG, which is in range 0 - 100, I think it'll work fine if you divide it by ten before passing to imagepng(). ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="99733">  <div class="votes">
    <div id="Vu99733">
    <a href="/manual/vote-note.php?id=99733&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99733">
    <a href="/manual/vote-note.php?id=99733&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99733" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#99733" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#99733"> &para;</a><div class="date" title="2010-09-01 12:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99733">
<div class="phpcode"><code><span class="html">If you need to call imagepng() multiple times (for example, when you want to send it to the browser, but also to a disk cache), write your image to a file first, THEN call readfile() on it.<br /><br />PHP internally works with a temporary file when sending the image to the browser, so you'll gain nothing by calling imagepng() twice.</span></code></div>
  </div>
 </div>
  <div class="note" id="54432">  <div class="votes">
    <div id="Vu54432">
    <a href="/manual/vote-note.php?id=54432&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54432">
    <a href="/manual/vote-note.php?id=54432&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54432" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#54432" class="name">
  <strong class="user"><em>vladson at pc-labs dot info</em></strong></a><a class="genanchor" href="#54432"> &para;</a><div class="date" title="2005-07-04 08:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54432">
<div class="phpcode"><code><span class="html">To send 'Content-Length' header (like in static pictures case) i use "Output handler" like this...<br /><span class="default">&lt;?php<br /></span><span class="comment">//    Output handler<br /></span><span class="keyword">function </span><span class="default">output_handler</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) {<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/png'</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">));<br />    return </span><span class="default">$img</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//    Image output<br /></span><span class="default">ob_start</span><span class="keyword">(</span><span class="string">"output_handler"</span><span class="keyword">);<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">);<br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52520">  <div class="votes">
    <div id="Vu52520">
    <a href="/manual/vote-note.php?id=52520&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52520">
    <a href="/manual/vote-note.php?id=52520&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52520" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#52520" class="name">
  <strong class="user"><em>php at no dot spam dot prosa dot net</em></strong></a><a class="genanchor" href="#52520"> &para;</a><div class="date" title="2005-05-04 07:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52520">
<div class="phpcode"><code><span class="html">You could use the function imagecreatefrompng <br /><br />(I assume that you already know how to get the text from the url.)<br /><br />The only thing left to do is put that text on the image using the correct colors for you.<br /><br /><span class="default">&lt;?php<br /><br />$im </span><span class="keyword">= @</span><span class="default">imagecreatefrompng</span><span class="keyword">(</span><span class="default">$imgname</span><span class="keyword">); <br /><br /></span><span class="default">$text_color </span><span class="keyword">= </span><span class="default">imagecolorallocate </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">$Red</span><span class="keyword">,</span><span class="default">$Green</span><span class="keyword">,</span><span class="default">$Blue</span><span class="keyword">);<br /><br /></span><span class="default">imagestring </span><span class="keyword">(</span><span class="default">$im</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">,  </span><span class="default">5</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">,  </span><span class="default">$SomeTextFromURL</span><span class="keyword">, </span><span class="default">$text_color</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Regards,<br />Peter Berkhout.</span></code></div>
  </div>
 </div>
  <div class="note" id="89609">  <div class="votes">
    <div id="Vu89609">
    <a href="/manual/vote-note.php?id=89609&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89609">
    <a href="/manual/vote-note.php?id=89609&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89609" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#89609" class="name">
  <strong class="user"><em>matt at mattbostock dot com</em></strong></a><a class="genanchor" href="#89609"> &para;</a><div class="date" title="2009-03-16 12:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89609">
<div class="phpcode"><code><span class="html">To change the background of a 24-bit PNG for graceful degradation in IE6, the PNG file needs a bKGD chunk:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// insert a BKGD chunk into the PNG file for graceful image degradation in IE6<br />    </span><span class="default">$bgColor </span><span class="keyword">= array(</span><span class="default">250</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">);<br />    </span><span class="default">$pngData </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br />    <br />    </span><span class="default">$idatMarker </span><span class="keyword">= </span><span class="string">'200049444154'</span><span class="keyword">;<br />    </span><span class="default">$bkgdMarker </span><span class="keyword">= </span><span class="string">'624b4744'</span><span class="keyword">;<br />    <br />    </span><span class="default">$bkgdChunk </span><span class="keyword">= </span><span class="string">'0006' </span><span class="keyword">. </span><span class="default">$bkgdMarker</span><span class="keyword">;<br />    foreach (</span><span class="default">$bgColor </span><span class="keyword">as </span><span class="default">$bit</span><span class="keyword">)<br />    {<br />        </span><span class="default">$bkgdChunkData </span><span class="keyword">.= </span><span class="string">'00' </span><span class="keyword">. </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$bit</span><span class="keyword">);<br />    }<br />    </span><span class="default">$bkgdChunk </span><span class="keyword">.= </span><span class="default">$bkgdChunkData</span><span class="keyword">;<br />    </span><span class="default">$bkgdChunk </span><span class="keyword">.= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">crc32</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$bkgdMarker </span><span class="keyword">. </span><span class="default">$bkgdChunkData</span><span class="keyword">))) . </span><span class="string">'0000'</span><span class="keyword">;<br /><br />    </span><span class="default">$parsed </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$idatMarker</span><span class="keyword">, </span><span class="default">$pngData</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// split file by first 'IDAT' chunk    <br />    </span><span class="default">$pngData </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$parsed</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="default">$bkgdChunk </span><span class="keyword">. </span><span class="default">$idatMarker </span><span class="keyword">. </span><span class="default">$parsed</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$cachedFilename</span><span class="keyword">, </span><span class="default">$pngData</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44820">  <div class="votes">
    <div id="Vu44820">
    <a href="/manual/vote-note.php?id=44820&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44820">
    <a href="/manual/vote-note.php?id=44820&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44820" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#44820" class="name">
  <strong class="user"><em>cbrasho at yahoo dot com</em></strong></a><a class="genanchor" href="#44820"> &para;</a><div class="date" title="2004-08-17 07:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44820">
<div class="phpcode"><code><span class="html">Having your pictures stored in a database sounds great but brings you a lot of trouble.<br />Storing images in a DB you will have a script show.php that will appear in &lt;img&gt; tags: &lt;img src='show.php?img_id=$some_id'&gt;<br />But if you want to have REGISTER GLOBALS = OFF, you are in trouble and there is no way (at leas as far as i know) to solve the problem but to put te img from the DB in a file and put the coresponding file name in the &lt;img&gt; tag. But this brings another problem: simultaneous accesses to the page. So you will have to find a way to give unique names to the picture files for each simultaneous access to the page. The solution might be using sessions. This is how you end up having a very compleh PHP script for a very simple problem. So, the basic ideea is " do not store your pictures in a blob unless you know exactly what you are doing".</span></code></div>
  </div>
 </div>
  <div class="note" id="78787">  <div class="votes">
    <div id="Vu78787">
    <a href="/manual/vote-note.php?id=78787&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78787">
    <a href="/manual/vote-note.php?id=78787&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78787" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#78787" class="name">
  <strong class="user"><em>phpman at texmedia dot de</em></strong></a><a class="genanchor" href="#78787"> &para;</a><div class="date" title="2007-10-27 02:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78787">
<div class="phpcode"><code><span class="html">When changeing the PHP version from 4 to 5 I found out, that PHP5 handles imagepng() more restrictive than in PHP4. I'd used <br /><br />imagepng($image,'',90);<br /><br />to reduce the image quality whithout saving the image as a file. The quality parameter is not supported at all, I used imagejpg before and simply changed the function to imagepng whithout taking care of the existing parameters. It did not matter and there was no error in PHP4. But in PHP5, the image will not be shown anymore. So you have to remove it to have the standard:<br /><br />imagepng($image);</span></code></div>
  </div>
 </div>
  <div class="note" id="49278">  <div class="votes">
    <div id="Vu49278">
    <a href="/manual/vote-note.php?id=49278&amp;page=function.imagepng&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49278">
    <a href="/manual/vote-note.php?id=49278&amp;page=function.imagepng&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49278" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#49278" class="name">
  <strong class="user"><em>dws at mrao dot cam dot ac dot uk</em></strong></a><a class="genanchor" href="#49278"> &para;</a><div class="date" title="2005-01-22 02:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49278">
<div class="phpcode"><code><span class="html">Presumably it returns true on success and false on failure, although the documentation doesn't actually say so.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imagepng&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imagepng.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
