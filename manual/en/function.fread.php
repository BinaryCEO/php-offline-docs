<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fread - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fread.php">
 <link rel="shorturl" href="https://www.php.net/fread">
 <link rel="alternate" href="https://www.php.net/fread" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fputs.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fscanf.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fread.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fread.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fread.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fread.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fread.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fread.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fread.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fread.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fread.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fread.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fread.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary-safe file read" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fread - Manual" />
<meta name="twitter:description" content="Binary-safe file read" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fread - Manual" />
<meta itemprop="description" content="Binary-safe file read" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary-safe file read" />

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
        <a href="function.fscanf.php">
          fscanf &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fputs.php">
          &laquo; fputs        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.fread.php' selected="selected">English</option>
            <option value='de/function.fread.php'>German</option>
            <option value='es/function.fread.php'>Spanish</option>
            <option value='fr/function.fread.php'>French</option>
            <option value='it/function.fread.php'>Italian</option>
            <option value='ja/function.fread.php'>Japanese</option>
            <option value='pt_BR/function.fread.php'>Brazilian Portuguese</option>
            <option value='ru/function.fread.php'>Russian</option>
            <option value='tr/function.fread.php'>Turkish</option>
            <option value='uk/function.fread.php'>Ukrainian</option>
            <option value='zh/function.fread.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fread" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fread</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fread</span> &mdash; <span class="dc-title">Binary-safe file read</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fread-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fread</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>fread()</strong></span> reads up to
   <code class="parameter">length</code> bytes from the file pointer
   referenced by <code class="parameter">stream</code>. Reading stops as soon as one
   of the following conditions is met:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <code class="parameter">length</code> bytes have been read
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      EOF (end of file) is reached
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      a packet becomes available or the <a href="function.socket-set-timeout.php" class="link">
      socket timeout</a> occurs (for network streams)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      if the stream is read buffered and it does not represent a plain file, at
      most one read of up to a number of bytes equal to the chunk size (usually
      8192) is made; depending on the previously buffered data, the size of the
      returned data may be larger than the chunk size.
     </span>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fread-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">A file system pointer <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>
that is typically created using <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>.</p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       Up to <code class="parameter">length</code> number of bytes read.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fread-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the read string  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fread-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2374">
    <p><strong>Example #1 A simple <span class="function"><strong>fread()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// get contents of a file into a string<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">"/usr/local/something.txt"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$contents </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2375">
    <p><strong>Example #2 Binary <span class="function"><strong>fread()</strong></span> example</strong></p>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      On systems which differentiate between binary and text files
      (i.e. Windows) the file must be opened with &#039;b&#039; included in
      <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> mode parameter.
     </p>
    </div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">"c:\\files\\somepic.gif"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$contents </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2376">
    <p><strong>Example #3 Remote <span class="function"><strong>fread()</strong></span> examples</strong></p>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      When reading from anything that is not a regular local file, such as
      streams returned when
      reading <a href="features.remote-files.php" class="link">remote files</a> or from
      <span class="function"><a href="function.popen.php" class="function">popen()</a></span> and <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span>, reading
      will stop after a packet is available.  This means that you should
      collect the data together in chunks as shown in the examples below.
     </p>
    </div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$contents </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"rb"</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">FALSE </span><span style="color: #007700">=== </span><span style="color: #0000BB">$handle</span><span style="color: #007700">) {<br />    exit(</span><span style="color: #DD0000">"Failed to open stream to URL"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$contents </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$contents </span><span style="color: #007700">.= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">8192</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


<div class="refsect1 notes" id="refsect1-function.fread-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you just want to get the contents of a file into a string, use
    <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span> as it has much better performance
    than the code above.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Note that <span class="function"><strong>fread()</strong></span> reads from the current position of 
    the file pointer. Use <span class="function"><a href="function.ftell.php" class="function">ftell()</a></span> to find the current 
    position of the pointer and <span class="function"><a href="function.rewind.php" class="function">rewind()</a></span> to rewind the 
    pointer position.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fread-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fwrite.php" class="function" rel="rdfs-seeAlso">fwrite()</a> - Binary-safe file write</span></li>
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.fsockopen.php" class="function" rel="rdfs-seeAlso">fsockopen()</a> - Open Internet or Unix domain socket connection</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
    <li><span class="function"><a href="function.fgetss.php" class="function" rel="rdfs-seeAlso">fgetss()</a> - Gets line from file pointer and strip HTML tags</span></li>
    <li><span class="function"><a href="function.fscanf.php" class="function" rel="rdfs-seeAlso">fscanf()</a> - Parses input from a file according to a format</span></li>
    <li><span class="function"><a href="function.file.php" class="function" rel="rdfs-seeAlso">file()</a> - Reads entire file into an array</span></li>
    <li><span class="function"><a href="function.fpassthru.php" class="function" rel="rdfs-seeAlso">fpassthru()</a> - Output all remaining data on a file pointer</span></li>
    <li><span class="function"><a href="function.fseek.php" class="function" rel="rdfs-seeAlso">fseek()</a> - Seeks on a file pointer</span></li>
    <li><span class="function"><a href="function.ftell.php" class="function" rel="rdfs-seeAlso">ftell()</a> - Returns the current position of the file read/write pointer</span></li>
    <li><span class="function"><a href="function.rewind.php" class="function" rel="rdfs-seeAlso">rewind()</a> - Rewind the position of a file pointer</span></li>
    <li><span class="function"><a href="function.unpack.php" class="function" rel="rdfs-seeAlso">unpack()</a> - Unpack data from binary string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/fread.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fread%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fread&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fread.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113885">  <div class="votes">
    <div id="Vu113885">
    <a href="/manual/vote-note.php?id=113885&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113885">
    <a href="/manual/vote-note.php?id=113885&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113885" title="79% like this...">
    20
    </div>
  </div>
  <a href="#113885" class="name">
  <strong class="user"><em>dharmilshah at gmail dot com</em></strong></a><a class="genanchor" href="#113885"> &para;</a><div class="date" title="2013-12-12 11:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113885">
<div class="phpcode"><code><span class="html">For anyone still trying to write an effective file downloader function/script, the work has been done for you in all the major servers including Apache &amp; nginx.<br /><br />Using the X-Sendfile header, you can do the following:<br /><br />if ($user-&gt;isLoggedIn())<br />{<br />    header("X-Sendfile: $path_to_somefile_private");<br />    header("Content-Type: application/octet-stream");<br />    header("Content-Disposition: attachment; filename=\"$somefile\"");<br />}<br /><br />Apache will serve the file for you while NOT revealing your private file path! Pretty nice. This works on all browsers/download managers and saves a lot of resources.<br /><br />Documentation:<br />Apache module: <a href="https://tn123.org/mod_xsendfile/" rel="nofollow" target="_blank">https://tn123.org/mod_xsendfile/</a><br />Nginx: <a href="http://wiki.nginx.org/XSendfile" rel="nofollow" target="_blank">http://wiki.nginx.org/XSendfile</a><br />Lighttpd: <a href="http://blog.lighttpd.net/articles/2006/07/02/x-sendfile/" rel="nofollow" target="_blank">http://blog.lighttpd.net/articles/2006/07/02/x-sendfile/</a><br /><br />Hopefully this will save you many hours of work.</span></code></div>
  </div>
 </div>
  <div class="note" id="93250">  <div class="votes">
    <div id="Vu93250">
    <a href="/manual/vote-note.php?id=93250&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93250">
    <a href="/manual/vote-note.php?id=93250&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93250" title="65% like this...">
    25
    </div>
  </div>
  <a href="#93250" class="name">
  <strong class="user"><em>edgarinvillegas at hotmail dot com</em></strong></a><a class="genanchor" href="#93250"> &para;</a><div class="date" title="2009-08-30 12:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93250">
<div class="phpcode"><code><span class="html">I had a fread script that hanged forever (from php manual):<br /><br /><span class="default">&lt;?php<br />$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"example.host.com"</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">);<br />if (!</span><span class="default">$fp</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)&lt;br /&gt;\n"</span><span class="keyword">;<br />} else {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Data sent by socket"</span><span class="keyword">);<br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {  </span><span class="comment">//This looped forever<br />        </span><span class="default">$content </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    echo </span><span class="default">$content</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The problem is that sometimes end of streaming is not marked by EOF nor a fixed mark, that's why this looped forever. This caused me a lot of headaches...<br />I solved it using the stream_get_meta_data function and a break statement as the following shows:<br /><br /><span class="default">&lt;?php<br />$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"example.host.com"</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">);<br />if (!</span><span class="default">$fp</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)&lt;br /&gt;\n"</span><span class="keyword">;<br />} else {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Data sent by socket"</span><span class="keyword">);<br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {  <br />        </span><span class="default">$content </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />        </span><span class="default">$stream_meta_data </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">); </span><span class="comment">//Added line<br />         </span><span class="keyword">if(</span><span class="default">$stream_meta_data</span><span class="keyword">[</span><span class="string">'unread_bytes'</span><span class="keyword">] &lt;= </span><span class="default">0</span><span class="keyword">) break; </span><span class="comment">//Added line<br />    </span><span class="keyword">}<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    echo </span><span class="default">$content</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope this will save a lot of headaches to someone.<br /><br />(Greetings, from La Paz-Bolivia)</span></code></div>
  </div>
 </div>
  <div class="note" id="82841">  <div class="votes">
    <div id="Vu82841">
    <a href="/manual/vote-note.php?id=82841&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82841">
    <a href="/manual/vote-note.php?id=82841&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82841" title="86% like this...">
    11
    </div>
  </div>
  <a href="#82841" class="name">
  <strong class="user"><em>mail at 3v1n0 dot net</em></strong></a><a class="genanchor" href="#82841"> &para;</a><div class="date" title="2008-04-28 03:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82841">
<div class="phpcode"><code><span class="html">This is an hack I've done to download remote files with HTTP resume support. This is useful if you want to write a download script that fetches files remotely and then sends them to the user, adding support to download managers (I tested it on wget). To do that you should also use a "remote_filesize" function that you can easily write/find.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">readfile_chunked_remote</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$seek </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$retbytes </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">) {
<br />    </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />    </span><span class="default">$defaultchunksize </span><span class="keyword">= </span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">;
<br />    </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">$defaultchunksize</span><span class="keyword">;
<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$cnt </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$remotereadfile </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[a-zA-Z]+:\/\//'</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">))
<br />        </span><span class="default">$remotereadfile </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />
<br />    </span><span class="default">$handle </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">$handle </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">stream_set_timeout</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);
<br />    
<br />    if (</span><span class="default">$seek </span><span class="keyword">!= </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">$remotereadfile</span><span class="keyword">)
<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$seek</span><span class="keyword">);
<br />
<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {
<br />
<br />        if (</span><span class="default">$remotereadfile </span><span class="keyword">&amp;&amp; </span><span class="default">$seek </span><span class="keyword">!= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$cnt</span><span class="keyword">+</span><span class="default">$chunksize </span><span class="keyword">&gt; </span><span class="default">$seek</span><span class="keyword">)
<br />            </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">$seek</span><span class="keyword">-</span><span class="default">$cnt</span><span class="keyword">;
<br />        else
<br />            </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">$defaultchunksize</span><span class="keyword">;
<br />
<br />        </span><span class="default">$buffer </span><span class="keyword">= @</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$chunksize</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">$retbytes </span><span class="keyword">|| (</span><span class="default">$remotereadfile </span><span class="keyword">&amp;&amp; </span><span class="default">$seek </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">)) {
<br />            </span><span class="default">$cnt </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">);
<br />        }
<br />
<br />        if (!</span><span class="default">$remotereadfile </span><span class="keyword">|| (</span><span class="default">$remotereadfile </span><span class="keyword">&amp;&amp; </span><span class="default">$cnt </span><span class="keyword">&gt; </span><span class="default">$seek</span><span class="keyword">))
<br />            echo </span><span class="default">$buffer</span><span class="keyword">;
<br />
<br />        </span><span class="default">ob_flush</span><span class="keyword">();
<br />        </span><span class="default">flush</span><span class="keyword">();
<br />    }
<br />
<br />    </span><span class="default">$info </span><span class="keyword">= </span><span class="default">stream_get_meta_data</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />
<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'timed_out'</span><span class="keyword">])
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$retbytes </span><span class="keyword">&amp;&amp; </span><span class="default">$status</span><span class="keyword">) {
<br />        return </span><span class="default">$cnt</span><span class="keyword">;
<br />    }
<br />
<br />    return </span><span class="default">$status</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84115">  <div class="votes">
    <div id="Vu84115">
    <a href="/manual/vote-note.php?id=84115&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84115">
    <a href="/manual/vote-note.php?id=84115&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84115" title="63% like this...">
    24
    </div>
  </div>
  <a href="#84115" class="name">
  <strong class="user"><em>Edward Jaramilla</em></strong></a><a class="genanchor" href="#84115"> &para;</a><div class="date" title="2008-06-28 11:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84115">
<div class="phpcode"><code><span class="html">I couldn't get some of the previous resume scripts to work with Free Download Manager or Firefox.  I did some clean up and modified the code a little.<br /><br />Changes:<br />1. Added a Flag to specify if you want download to be resumable or not<br />2. Some error checking and data cleanup for invalid/multiple ranges based on <a href="http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt" rel="nofollow" target="_blank">http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt</a><br />3. Always calculate a $seek_end even though the range specification says it could be empty... eg: bytes 500-/1234<br />4. Removed some Cache headers that didn't seem to be needed. (add back if you have problems)<br />5. Only send partial content header if downloading a piece of the file (IE workaround)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">dl_file_resumable</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$is_resume</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">)<br />{<br />    </span><span class="comment">//First, see if the file exists<br />    </span><span class="keyword">if (!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))<br />    {<br />        die(</span><span class="string">"&lt;b&gt;404 File not found!&lt;/b&gt;"</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//Gather relevent info about file<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$fileinfo </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    <br />    </span><span class="comment">//workaround for IE filename bug with multiple periods / multiple dots in filename<br />    //that adds square brackets to filename - eg. setup.abc.exe becomes setup[1].abc.exe<br />    </span><span class="default">$filename </span><span class="keyword">= (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">], </span><span class="string">'MSIE'</span><span class="keyword">)) ?<br />                  </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\./'</span><span class="keyword">, </span><span class="string">'%2e'</span><span class="keyword">, </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">], </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">], </span><span class="string">'.'</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">) :<br />                  </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">];<br />    <br />    </span><span class="default">$file_extension </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$path_info</span><span class="keyword">[</span><span class="string">'extension'</span><span class="keyword">]);<br /><br />    </span><span class="comment">//This will set the Content-Type to the appropriate setting for the file<br />    </span><span class="keyword">switch(</span><span class="default">$file_extension</span><span class="keyword">)<br />    {<br />        case </span><span class="string">'exe'</span><span class="keyword">: </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'application/octet-stream'</span><span class="keyword">; break;<br />        case </span><span class="string">'zip'</span><span class="keyword">: </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'application/zip'</span><span class="keyword">; break;<br />        case </span><span class="string">'mp3'</span><span class="keyword">: </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'audio/mpeg'</span><span class="keyword">; break;<br />        case </span><span class="string">'mpg'</span><span class="keyword">: </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'video/mpeg'</span><span class="keyword">; break;<br />        case </span><span class="string">'avi'</span><span class="keyword">: </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'video/x-msvideo'</span><span class="keyword">; break;<br />        default:    </span><span class="default">$ctype</span><span class="keyword">=</span><span class="string">'application/force-download'</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//check if http_range is sent by browser (or download manager)<br />    </span><span class="keyword">if(</span><span class="default">$is_resume </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_RANGE'</span><span class="keyword">]))<br />    {<br />        list(</span><span class="default">$size_unit</span><span class="keyword">, </span><span class="default">$range_orig</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_RANGE'</span><span class="keyword">], </span><span class="default">2</span><span class="keyword">);<br /><br />        if (</span><span class="default">$size_unit </span><span class="keyword">== </span><span class="string">'bytes'</span><span class="keyword">)<br />        {<br />            </span><span class="comment">//multiple ranges could be specified at the same time, but for simplicity only serve the first range<br />            //<a href="http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt" rel="nofollow" target="_blank">http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt</a><br />            </span><span class="keyword">list(</span><span class="default">$range</span><span class="keyword">, </span><span class="default">$extra_ranges</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$range_orig</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">$range </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        }<br />    }<br />    else<br />    {<br />        </span><span class="default">$range </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//figure out download piece from range (if set)<br />    </span><span class="keyword">list(</span><span class="default">$seek_start</span><span class="keyword">, </span><span class="default">$seek_end</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$range</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br />    </span><span class="comment">//set start and end based on range (if set), else set defaults<br />    //also check for invalid ranges.<br />    </span><span class="default">$seek_end </span><span class="keyword">= (empty(</span><span class="default">$seek_end</span><span class="keyword">)) ? (</span><span class="default">$size </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) : </span><span class="default">min</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$seek_end</span><span class="keyword">)),(</span><span class="default">$size </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">));<br />    </span><span class="default">$seek_start </span><span class="keyword">= (empty(</span><span class="default">$seek_start</span><span class="keyword">) || </span><span class="default">$seek_end </span><span class="keyword">&lt; </span><span class="default">abs</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$seek_start</span><span class="keyword">))) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">max</span><span class="keyword">(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$seek_start</span><span class="keyword">)),</span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="comment">//add headers if resumable<br />    </span><span class="keyword">if (</span><span class="default">$is_resume</span><span class="keyword">)<br />    {<br />        </span><span class="comment">//Only send partial content header if downloading a piece of the file (IE workaround)<br />        </span><span class="keyword">if (</span><span class="default">$seek_start </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$seek_end </span><span class="keyword">&lt; (</span><span class="default">$size </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">))<br />        {<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 206 Partial Content'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Accept-Ranges: bytes'</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Range: bytes '</span><span class="keyword">.</span><span class="default">$seek_start</span><span class="keyword">.</span><span class="string">'-'</span><span class="keyword">.</span><span class="default">$seek_end</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$size</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">//headers for IE Bugs (is this necessary?)<br />    //header("Cache-Control: cache, must-revalidate");   <br />    //header("Pragma: public");<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: ' </span><span class="keyword">. </span><span class="default">$ctype</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: attachment; filename="' </span><span class="keyword">. </span><span class="default">$filename </span><span class="keyword">. </span><span class="string">'"'</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: '</span><span class="keyword">.(</span><span class="default">$seek_end </span><span class="keyword">- </span><span class="default">$seek_start </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));<br /><br />    </span><span class="comment">//open the file<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br />    </span><span class="comment">//seek to start of missing part<br />    </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$seek_start</span><span class="keyword">);<br /><br />    </span><span class="comment">//start buffered download<br />    </span><span class="keyword">while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />    {<br />        </span><span class="comment">//reset time limit for big files<br />        </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />        print(</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">));<br />        </span><span class="default">flush</span><span class="keyword">();<br />        </span><span class="default">ob_flush</span><span class="keyword">();<br />    }<br /><br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    exit;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78406">  <div class="votes">
    <div id="Vu78406">
    <a href="/manual/vote-note.php?id=78406&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78406">
    <a href="/manual/vote-note.php?id=78406&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78406" title="80% like this...">
    9
    </div>
  </div>
  <a href="#78406" class="name">
  <strong class="user"><em>matt at matt-darby dot com</em></strong></a><a class="genanchor" href="#78406"> &para;</a><div class="date" title="2007-10-10 10:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78406">
<div class="phpcode"><code><span class="html">I thought I had an issue where fread() would fail on files &gt; 30M in size. I tried a file_get_contents() method with the same results. The issue was not reading the file, but echoing its data back to the browser. <br /><br />Basically, you need to split up the filedata into manageable chunks before firing it off to the browser:<br /><br /><span class="default">&lt;?php<br /><br />$total     </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">);<br /></span><span class="default">$blocksize </span><span class="keyword">= (</span><span class="default">2 </span><span class="keyword">&lt;&lt; </span><span class="default">20</span><span class="keyword">); </span><span class="comment">//2M chunks<br /></span><span class="default">$sent      </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$handle    </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /><br /></span><span class="comment">// Push headers that tell what kind of file is coming down the pike<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: '</span><span class="keyword">.</span><span class="default">$content_type</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: attachment; filename='</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-length: '</span><span class="keyword">.</span><span class="default">$filesize </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">);<br />                <br /></span><span class="comment">// Now we need to loop through the file and echo out chunks of file data<br />// Dumping the whole file fails at &gt; 30M!<br /></span><span class="keyword">while(</span><span class="default">$sent </span><span class="keyword">&lt; </span><span class="default">$total</span><span class="keyword">){<br />    echo </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$blocksize</span><span class="keyword">);<br />    </span><span class="default">$sent </span><span class="keyword">+= </span><span class="default">$blocksize</span><span class="keyword">;<br />}<br />            <br />exit(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone!</span></code></div>
  </div>
 </div>
  <div class="note" id="115340">  <div class="votes">
    <div id="Vu115340">
    <a href="/manual/vote-note.php?id=115340&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115340">
    <a href="/manual/vote-note.php?id=115340&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115340" title="81% like this...">
    7
    </div>
  </div>
  <a href="#115340" class="name">
  <strong class="user"><em>john dot wellesz at teaser dot com</em></strong></a><a class="genanchor" href="#115340"> &para;</a><div class="date" title="2014-07-07 08:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115340">
<div class="phpcode"><code><span class="html">Note that fread() will return '' (empty string) when a timeout occurs unlike socket_read() which returns false...</span></code></div>
  </div>
 </div>
  <div class="note" id="105471">  <div class="votes">
    <div id="Vu105471">
    <a href="/manual/vote-note.php?id=105471&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105471">
    <a href="/manual/vote-note.php?id=105471&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105471" title="78% like this...">
    8
    </div>
  </div>
  <a href="#105471" class="name">
  <strong class="user"><em>randym</em></strong></a><a class="genanchor" href="#105471"> &para;</a><div class="date" title="2011-08-20 10:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105471">
<div class="phpcode"><code><span class="html">Concerning [problems with UTF-8 and] downloading Zip files I found that simply adding 3 lines of code before starting the fread to the buffer for delivery in all browsers solved the problem.
<br />
<br /><span class="default">&lt;?php
<br />    ob_end_clean</span><span class="keyword">();
<br />    </span><span class="default">ob_start</span><span class="keyword">();
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Type:' </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />... see where placed in the function below:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">readfile_chunked</span><span class="keyword">( </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$retbytes </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">) {
<br />    </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">* (</span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">); </span><span class="comment">// how many bytes per chunk
<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$cnt </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb' </span><span class="keyword">);
<br />    if ( </span><span class="default">$handle </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">ob_end_clean</span><span class="keyword">(); </span><span class="comment">//added to fix ZIP file corruption
<br />    </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">//added to fix ZIP file corruption
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Type:' </span><span class="keyword">); </span><span class="comment">//added to fix ZIP file corruption
<br />    </span><span class="keyword">while ( !</span><span class="default">feof</span><span class="keyword">( </span><span class="default">$handle </span><span class="keyword">) ) {
<br />        </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">( </span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$chunksize </span><span class="keyword">);
<br />        </span><span class="comment">//$buffer = str_replace("ï»¿","",$buffer);
<br />        </span><span class="keyword">echo </span><span class="default">$buffer</span><span class="keyword">;
<br />        </span><span class="default">ob_flush</span><span class="keyword">();
<br />        </span><span class="default">flush</span><span class="keyword">();
<br />        if ( </span><span class="default">$retbytes </span><span class="keyword">) {
<br />            </span><span class="default">$cnt </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$buffer </span><span class="keyword">);
<br />        }
<br />    }
<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$handle </span><span class="keyword">);
<br />    if ( </span><span class="default">$retbytes </span><span class="keyword">&amp;&amp; </span><span class="default">$status </span><span class="keyword">) {
<br />        return </span><span class="default">$cnt</span><span class="keyword">; </span><span class="comment">// return num. bytes delivered like readfile() does.
<br />    </span><span class="keyword">}
<br />    return </span><span class="default">$status</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85801">  <div class="votes">
    <div id="Vu85801">
    <a href="/manual/vote-note.php?id=85801&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85801">
    <a href="/manual/vote-note.php?id=85801&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85801" title="76% like this...">
    7
    </div>
  </div>
  <a href="#85801" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85801"> &para;</a><div class="date" title="2008-09-18 06:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85801">
<div class="phpcode"><code><span class="html">It might be worth noting that if your site uses a front controller with sessions and you send a large file to a user; you should end the session just before sending the file, otherwise the user will not be able to continue continue browsing the site while the file is downloading.</span></code></div>
  </div>
 </div>
  <div class="note" id="82474">  <div class="votes">
    <div id="Vu82474">
    <a href="/manual/vote-note.php?id=82474&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82474">
    <a href="/manual/vote-note.php?id=82474&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82474" title="66% like this...">
    3
    </div>
  </div>
  <a href="#82474" class="name">
  <strong class="user"><em>shocker at shockingsoft dot com</em></strong></a><a class="genanchor" href="#82474"> &para;</a><div class="date" title="2008-04-12 06:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82474">
<div class="phpcode"><code><span class="html">If you read from a socket connection or any other stream that may delay when responsing but you want to set a timeout you can use stream_set_timeout():<br /><br /><span class="default">&lt;?php<br />$f </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"127.0.0.1"</span><span class="keyword">, </span><span class="default">123</span><span class="keyword">);<br />if (</span><span class="default">$f</span><span class="keyword">)<br /> {<br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="string">"hello"</span><span class="keyword">);<br />  </span><span class="default">stream_set_timeout</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">); </span><span class="comment">//5 seconds read timeout<br />  </span><span class="keyword">if (!</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">)) echo </span><span class="string">"Error while reading"</span><span class="keyword">;<br />    else echo </span><span class="string">"Read ok"</span><span class="keyword">;<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br /> }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102986">  <div class="votes">
    <div id="Vu102986">
    <a href="/manual/vote-note.php?id=102986&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102986">
    <a href="/manual/vote-note.php?id=102986&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102986" title="64% like this...">
    4
    </div>
  </div>
  <a href="#102986" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102986"> &para;</a><div class="date" title="2011-03-18 05:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102986">
<div class="phpcode"><code><span class="html">If you serve a file download over PHP with fread and print/echo and experience corrupted binary files, chances are the server still uses magic quotes and escapes the null bytes in your file. Although from 5.3.0 magic quotes are no longer supported, you might still encounter this problem. Try to turn them off by placing this code before using fread:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">@</span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'magic_quotes_runtime'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51703">  <div class="votes">
    <div id="Vu51703">
    <a href="/manual/vote-note.php?id=51703&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51703">
    <a href="/manual/vote-note.php?id=51703&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51703" title="66% like this...">
    2
    </div>
  </div>
  <a href="#51703" class="name">
  <strong class="user"><em>mrhappy[at]dotgeek.org</em></strong></a><a class="genanchor" href="#51703"> &para;</a><div class="date" title="2005-04-07 07:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51703">
<div class="phpcode"><code><span class="html">Just a note for anybody trying to implement a php handled download script -<br /><br />We spent a long time trying to figure out why our code was eating system resources on large files.. Eventually we managed to trace it to output buffering that was being started on every page via an include.. (It was attempting to buffer the entire 600 Megs or whatever size *before* sending data to the client) if you have this problem you may want to check that first and either not start buffering or close that in the usual way :)<br /><br />Hope that prevents somebody spending hours trying to fix an obscure issue.<br /><br />Regards :)</span></code></div>
  </div>
 </div>
  <div class="note" id="54350">  <div class="votes">
    <div id="Vu54350">
    <a href="/manual/vote-note.php?id=54350&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54350">
    <a href="/manual/vote-note.php?id=54350&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54350" title="66% like this...">
    1
    </div>
  </div>
  <a href="#54350" class="name">
  <strong class="user"><em>Richard Dale richard at premiumdata dot n dot e dot t</em></strong></a><a class="genanchor" href="#54350"> &para;</a><div class="date" title="2005-06-30 09:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54350">
<div class="phpcode"><code><span class="html">If you use any of the above code for downloadinng files, Internet Explorer will change the filename if it has multiple periods in it to something with square brackets.  To work around this, we check to see if the User Agent contains MSIE and rewrite the necessary periods as %2E
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment"># eg. $filename="setup.abc.exe";
<br /></span><span class="keyword">if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_USER_AGENT'</span><span class="keyword">], </span><span class="string">"MSIE"</span><span class="keyword">)) { 
<br />    </span><span class="comment"># workaround for IE filename bug with multiple periods / multiple dots in filename
<br />    # that adds square brackets to filename - eg. setup.abc.exe becomes setup[1].abc.exe
<br />    </span><span class="default">$iefilename </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\./'</span><span class="keyword">, </span><span class="string">'%2e'</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=</span><span class="default">$iefilename</span><span class="string">" </span><span class="keyword">);
<br />} else {
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49078">  <div class="votes">
    <div id="Vu49078">
    <a href="/manual/vote-note.php?id=49078&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49078">
    <a href="/manual/vote-note.php?id=49078&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49078" title="60% like this...">
    3
    </div>
  </div>
  <a href="#49078" class="name">
  <strong class="user"><em>m (at) mindplay (dot) dk</em></strong></a><a class="genanchor" href="#49078"> &para;</a><div class="date" title="2005-01-16 12:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49078">
<div class="phpcode"><code><span class="html">Here's a function for sending a file to the client - it may look more complicated than necessary, but has a number of advantages over simpler file sending functions:<br /><br />- Works with large files, and uses only an 8KB buffer per transfer. <br /><br />- Stops transferring if the client is disconnected (unlike many scripts, that continue to read and buffer the entire file, wasting valuable resources) but does not halt the script <br /><br />- Returns TRUE if transfer was completed, or FALSE if the client was disconnected before completing the download - you'll often need this, so you can log downloads correctly. <br /><br />- Sends a number of headers, including ones that ensure it's cached for a maximum of 2 hours on any browser/proxy, and "Content-Length" which most people seem to forget. <br /><br />(tested on Linux (Apache) and Windows (IIS5/6) under PHP4.3.x)<br /><br />Note that the folder from which protected files will be pulled, is set as a constant in this function (/protected) ... Now here's the function: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">send_file</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();<br />  </span><span class="default">$path </span><span class="keyword">= </span><span class="string">"protected/"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">;<br />  if (!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) or </span><span class="default">connection_status</span><span class="keyword">()!=</span><span class="default">0</span><span class="keyword">) return(</span><span class="default">FALSE</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: no-store, no-cache, must-revalidate"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: post-check=0, pre-check=0"</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: no-cache"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Expires: "</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">"D, d M Y H:i:s"</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">"H"</span><span class="keyword">)+</span><span class="default">2</span><span class="keyword">, </span><span class="default">date</span><span class="keyword">(</span><span class="string">"i"</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">"m"</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">"d"</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y"</span><span class="keyword">))).</span><span class="string">" GMT"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Last-Modified: "</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">"D, d M Y H:i:s"</span><span class="keyword">).</span><span class="string">" GMT"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/octet-stream"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.(string)(</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)));<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: inline; filename=</span><span class="default">$name</span><span class="string">"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Transfer-Encoding: binary\n"</span><span class="keyword">);<br />  if (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)) {<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) and (</span><span class="default">connection_status</span><span class="keyword">()==</span><span class="default">0</span><span class="keyword">)) {<br />      print(</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">8</span><span class="keyword">));<br />      </span><span class="default">flush</span><span class="keyword">();<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />  }<br />  return((</span><span class="default">connection_status</span><span class="keyword">()==</span><span class="default">0</span><span class="keyword">) and !</span><span class="default">connection_aborted</span><span class="keyword">());<br />}<br /></span><span class="default">?&gt;<br /></span><br />And here's an example of using the function: <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">if (!</span><span class="default">send_file</span><span class="keyword">(</span><span class="string">"platinumdemo.zip"</span><span class="keyword">)) { <br />die (</span><span class="string">"file transfer failed"</span><span class="keyword">); <br /></span><span class="comment">// either the file transfer was incomplete <br />// or the file was not found <br /></span><span class="keyword">} else { <br /></span><span class="comment">// the download was a success <br />// log, or do whatever else <br /></span><span class="keyword">} <br /></span><span class="default">?&gt;</span> <br /><br />Regards, <br />Rasmus Schultz</span></code></div>
  </div>
 </div>
  <div class="note" id="129740">  <div class="votes">
    <div id="Vu129740">
    <a href="/manual/vote-note.php?id=129740&amp;page=function.fread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129740">
    <a href="/manual/vote-note.php?id=129740&amp;page=function.fread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129740" title="no votes...">
    0
    </div>
  </div>
  <a href="#129740" class="name">
  <strong class="user"><em>admin at codebydeer dot com</em></strong></a><a class="genanchor" href="#129740"> &para;</a><div class="date" title="2024-09-08 05:48"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129740">
<div class="phpcode"><code><span class="html">You need to know that if the $length parameter of fread() is 0, it will be Faltal Error.<br /><span class="default">&lt;?php<br />$filepath </span><span class="keyword">= </span><span class="string">"example/a/dir/file.txt"</span><span class="keyword">;<br /><br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">, </span><span class="string">"c+"</span><span class="keyword">);<br /></span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$fileSize </span><span class="keyword">= </span><span class="default">fstat</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)[</span><span class="string">"size"</span><span class="keyword">];<br />if (</span><span class="default">$fileSize </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$txt </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$txt </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$fileSize</span><span class="keyword">);<br />}<br />echo </span><span class="default">$txt</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>I'm Japanese so if I took some mistakes, very sorry.<br />thanks!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fread&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fread.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="current">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
