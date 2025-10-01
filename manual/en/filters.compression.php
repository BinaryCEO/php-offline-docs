<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Compression Filters - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/filters.compression.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/filters.compression.php">
 <link rel="alternate" href="https://www.php.net/manual/en/filters.compression.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/filters.php">
 <link rel="prev" href="https://www.php.net/manual/en/filters.convert.php">
 <link rel="next" href="https://www.php.net/manual/en/filters.encryption.php">

 <link rel="alternate" href="https://www.php.net/manual/en/filters.compression.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/filters.compression.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/filters.compression.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/filters.compression.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/filters.compression.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/filters.compression.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/filters.compression.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/filters.compression.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/filters.compression.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/filters.compression.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/filters.compression.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Compression Filters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Compression Filters - Manual" />
<meta name="twitter:description" content="Compression Filters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Compression Filters - Manual" />
<meta itemprop="description" content="Compression Filters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Compression Filters" />

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
        <a href="filters.encryption.php">
          Encryption Filters &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="filters.convert.php">
          &laquo; Conversion Filters        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='filters.php'>List of Available Filters</a></li>      </ul>
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
            <option value='en/filters.compression.php' selected="selected">English</option>
            <option value='de/filters.compression.php'>German</option>
            <option value='es/filters.compression.php'>Spanish</option>
            <option value='fr/filters.compression.php'>French</option>
            <option value='it/filters.compression.php'>Italian</option>
            <option value='ja/filters.compression.php'>Japanese</option>
            <option value='pt_BR/filters.compression.php'>Brazilian Portuguese</option>
            <option value='ru/filters.compression.php'>Russian</option>
            <option value='tr/filters.compression.php'>Turkish</option>
            <option value='uk/filters.compression.php'>Ukrainian</option>
            <option value='zh/filters.compression.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="filters.compression" class="section">
  <h2 class="title">Compression Filters</h2>

  <p class="simpara">
   While the <a href="wrappers.compression.php" class="link">Compression Wrappers</a>
   provide a way of creating
   gzip and bz2 compatible files on the local filesystem, they do not provide a 
   means for generalized compression over network streams, nor do they provide a 
   means to begin with a non-compressed stream and transition to a compressed one.  
   For this, a compression filter may be applied to any stream resource at any time.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Compression filters do <em>not</em> generate headers and trailers
    used by command line utilities such as <code class="literal">gzip</code>.  They only compress
    and decompress the payload portions of compressed data streams.
   </span>
  </p></blockquote>

  <div class="section" id="filters.compression.zlib">
   <h2 class="title">zlib.deflate and zlib.inflate</h2>
   <p class="simpara">
    <code class="literal">zlib.deflate</code> (compression) and
    <code class="literal">zlib.inflate</code> (decompression) are implementations of
    the compression methods described in <a href="https://datatracker.ietf.org/doc/html/rfc1951" class="link external">&raquo;&nbsp;RFC 1951</a>.
    The <code class="literal">deflate</code> filter takes up to three parameters passed as
    an associative array.  

    <code class="parameter">level</code> describes the compression
    strength to use (1-9).  Higher numbers will generally yield smaller payloads at
    the cost of additional processing time.  Two special compression levels also exist:
    0 (for no compression at all), and -1 (zlib internal default -- currently 6).

    <code class="parameter">window</code> is the base-2 log of the compression loopback window size.
    Higher values (up to 15 -- 32768 bytes) yield better compression at a cost of memory,
    while lower values (down to 9 -- 512 bytes) yield worse compression in a smaller memory footprint.
    Default <code class="parameter">window</code> size is currently <code class="literal">15</code>.

    <code class="parameter">memory</code> is a scale indicating how much work memory should be allocated.
    Valid values range from 1 (minimal allocation) to 9 (maximum allocation).  This memory allocation
    affects speed only and does not impact the size of the generated payload.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Because compression level is the most commonly used parameter, it may be alternatively
     provided as a simple integer value (rather than an array element).
    </span>
   </p></blockquote>

   <p class="simpara">
    zlib.* compression filters are available if
    <a href="ref.zlib.php" class="link">zlib</a> support is enabled.
   </p>

   <div class="example" id="example-5958">
    <p><strong>Example #1 
     <code class="literal">zlib.deflate</code> and
     <code class="literal">zlib.inflate</code>
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$params </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'level' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #DD0000">'window' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">15</span><span style="color: #007700">, </span><span style="color: #DD0000">'memory' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">9</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$original_text </span><span style="color: #007700">= </span><span style="color: #DD0000">"This is a test.\nThis is only a test.\nThis is not an important string.\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"The original text is " </span><span style="color: #007700">. </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$original_text</span><span style="color: #007700">) . </span><span style="color: #DD0000">" characters long.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.deflated'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'zlib.deflate'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_WRITE</span><span style="color: #007700">, </span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$original_text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The compressed file is " </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.deflated'</span><span style="color: #007700">) . </span><span style="color: #DD0000">" bytes long.\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"The original text was:\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">/* Use readfile and zlib.inflate to decompress on the fly */<br /></span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://filter/zlib.inflate/resource=test.deflated'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Generates output:<br /><br />The original text is 70 characters long.<br />The compressed file is 56 bytes long.<br />The original text was:<br />This is a test.<br />This is only a test.<br />This is not an important string.<br /><br /> */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-5959">
    <p><strong>Example #2 
     <code class="literal">zlib.deflate</code> simple
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$original_text </span><span style="color: #007700">= </span><span style="color: #DD0000">"This is a test.\nThis is only a test.\nThis is not an important string.\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"The original text is " </span><span style="color: #007700">. </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$original_text</span><span style="color: #007700">) . </span><span style="color: #DD0000">" characters long.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.deflated'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Here "6" indicates compression level 6 */<br /></span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'zlib.deflate'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_WRITE</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$original_text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The compressed file is " </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.deflated'</span><span style="color: #007700">) . </span><span style="color: #DD0000">" bytes long.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Generates output:<br /><br />The original text is 70 characters long.<br />The compressed file is 56 bytes long.<br /><br /> */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="section" id="filters.compression.bzip2">
   <h2 class="title">bzip2.compress and bzip2.decompress</h2>
   <p class="simpara">
    <code class="literal">bzip2.compress</code> and
    <code class="literal">bzip2.decompress</code>
    work in the same manner as the zlib filters described above.

    The <code class="literal">bzip2.compress</code> filter accepts up to two parameters given as 
    elements of an associative array: 

    <code class="parameter">blocks</code> is an integer value
    from 1 to 9 specifying the number of 100kbyte blocks of memory to allocate for
    workspace. 

    <code class="parameter">work</code> is also an integer value ranging from
    0 to 250 indicating how much effort to expend using the normal compression method
    before falling back on a slower, but more reliable method.  Tuning this parameter
    effects only compression speed.  Neither size of compressed output nor memory usage
    are changed by this setting.  A work factor of 0 instructs the bzip library to use
    an internal default.   

    The <code class="literal">bzip2.decompress</code> filter only accepts one parameter,
    which can be passed as either an ordinary boolean value, or as the 
    <code class="parameter">small</code> element of an associative array.

    <code class="parameter">small</code>, when set to a <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> value, instructs the bzip library
    to perform decompression in a minimal memory footprint at the cost of speed.
   </p>

   <p class="simpara">
     bzip2.* compression filters are available if
     <a href="ref.bzip2.php" class="link">bz2</a> support is enabled.
   </p>

   <div class="example" id="example-5960">
    <p><strong>Example #3 
     <code class="literal">bzip2.compress</code> and
     <code class="literal">bzip2.decompress</code>
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$param </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'blocks' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">9</span><span style="color: #007700">, </span><span style="color: #DD0000">'work' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The original file is " </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'LICENSE'</span><span style="color: #007700">) . </span><span style="color: #DD0000">" bytes long.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'LICENSE.compressed'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">stream_filter_append</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">'bzip2.compress'</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_FILTER_WRITE</span><span style="color: #007700">, </span><span style="color: #0000BB">$param</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'LICENSE'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The compressed file is " </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #DD0000">'LICENSE.compressed'</span><span style="color: #007700">) . </span><span style="color: #DD0000">" bytes long.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Generates output:<br /><br />The original file is 3288 bytes long.<br />The compressed file is 1488 bytes long.<br /><br /> */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/filters.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffilters.compression%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=filters.compression&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filters.compression.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117859">  <div class="votes">
    <div id="Vu117859">
    <a href="/manual/vote-note.php?id=117859&amp;page=filters.compression&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117859">
    <a href="/manual/vote-note.php?id=117859&amp;page=filters.compression&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117859" title="83% like this...">
    8
    </div>
  </div>
  <a href="#117859" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#117859"> &para;</a><div class="date" title="2015-08-21 06:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117859">
<div class="phpcode"><code><span class="html">To read a gzip encoded stream from http<br /><span class="default">&lt;?php<br />$opts </span><span class="keyword">= [<br />    </span><span class="string">"http" </span><span class="keyword">=&gt; [<br />        </span><span class="string">"method" </span><span class="keyword">=&gt; </span><span class="string">"GET"</span><span class="keyword">,<br />        </span><span class="string">"header" </span><span class="keyword">=&gt; [ </span><span class="string">"Accept-Encoding: gzip" </span><span class="keyword">],<br />    ]<br />];<br /></span><span class="default">$ctx </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"<a href="http://php.net" rel="nofollow" target="_blank">http://php.net</a>"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$ctx</span><span class="keyword">);<br /></span><span class="comment">// check  stream_get_meta_data($f)["wrapper_data"] has "Content-Encoding: gzip"<br /></span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="string">"zlib.inflate"</span><span class="keyword">, </span><span class="default">STREAM_FILTER_READ</span><span class="keyword">, [</span><span class="string">"window" </span><span class="keyword">=&gt; </span><span class="default">30</span><span class="keyword">]);<br />echo </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">); </span><span class="comment">// any stream processing<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122919">  <div class="votes">
    <div id="Vu122919">
    <a href="/manual/vote-note.php?id=122919&amp;page=filters.compression&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122919">
    <a href="/manual/vote-note.php?id=122919&amp;page=filters.compression&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122919" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122919" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#122919"> &para;</a><div class="date" title="2018-07-08 01:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122919">
<div class="phpcode"><code><span class="html">Please note that there is currently a bug in this feature. ftell(), fseek() and fstat() functions cannot be used. Writing to a stream after using this function will not change the stream position as it should.<br /><br />See bug: <a href="https://bugs.php.net/bug.php?id=49874" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=49874</a><br /><br />Also the zlib filters don't work with php://temp, php://memory and php://input streams, nothing is outputted to those streams.</span></code></div>
  </div>
 </div>
  <div class="note" id="128233">  <div class="votes">
    <div id="Vu128233">
    <a href="/manual/vote-note.php?id=128233&amp;page=filters.compression&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128233">
    <a href="/manual/vote-note.php?id=128233&amp;page=filters.compression&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128233" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128233" class="name">
  <strong class="user"><em>TingSong</em></strong></a><a class="genanchor" href="#128233"> &para;</a><div class="date" title="2023-02-20 03:43"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128233">
<div class="phpcode"><code><span class="html">To decompress a gzipped stream:<br /><br /><span class="default">&lt;?php<br />$stream </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="https://example.com/some/file.txt.gz" rel="nofollow" target="_blank">https://example.com/some/file.txt.gz</a>'</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br /></span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="string">'zlib.inflate'</span><span class="keyword">, </span><span class="default">STREAM_FILTER_READ</span><span class="keyword">, [</span><span class="string">'window' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">+</span><span class="default">16</span><span class="keyword">]);<br /><br /></span><span class="comment">// read the decompressed line directly<br /></span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /><br /></span><span class="comment">// process the lines<br /></span><span class="default">?&gt;<br /></span><br />As the doc of zlib <a href="https://www.zlib.net/manual.html#Advanced" rel="nofollow" target="_blank">https://www.zlib.net/manual.html#Advanced</a><br /><br />The 'window' parameter between 8 and 15 specified the window size from 2⁸ to 2¹⁵ bytes. It can be added by 16 for wrapping with gzip header and trailer instead of zlib wrapper.<br /><br />And, window could be -8..-15 for unwrapping RAW deflate data.</span></code></div>
  </div>
 </div>
  <div class="note" id="125804">  <div class="votes">
    <div id="Vu125804">
    <a href="/manual/vote-note.php?id=125804&amp;page=filters.compression&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125804">
    <a href="/manual/vote-note.php?id=125804&amp;page=filters.compression&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125804" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#125804" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125804"> &para;</a><div class="date" title="2021-02-10 06:37"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125804">
<div class="phpcode"><code><span class="html">To use the zlib.inflate filter with data originally written using gzcompress() or zlib.deflate, set the window option to 15 as outlined here: <a href="https://bugs.php.net/bug.php?id=68556" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=68556</a><br /><br /><span class="default">&lt;?php<br />$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">file_name</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br /></span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="string">'zlib.inflate'</span><span class="keyword">, </span><span class="default">STREAM_FILTER_READ</span><span class="keyword">, [</span><span class="string">'window' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">]);<br /></span><span class="default">$contents </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=filters.compression&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filters.compression.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="filters.php">List of Available Filters</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="filters.string.php" title="String Filters">String Filters</a>
                        </li>
                                                <li class="">
                            <a href="filters.convert.php" title="Conversion Filters">Conversion Filters</a>
                        </li>
                                                <li class="current">
                            <a href="filters.compression.php" title="Compression Filters">Compression Filters</a>
                        </li>
                                                <li class="">
                            <a href="filters.encryption.php" title="Encryption Filters">Encryption Filters</a>
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
