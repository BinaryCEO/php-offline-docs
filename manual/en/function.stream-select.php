<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stream_select - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stream-select.php">
 <link rel="shorturl" href="https://www.php.net/stream-select">
 <link rel="alternate" href="https://www.php.net/stream-select" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-resolve-include-path.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-set-blocking.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stream-select.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stream-select.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stream-select.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stream-select.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stream-select.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stream-select.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stream-select.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stream-select.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stream-select.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stream-select.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stream-select.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stream_select - Manual" />
<meta name="twitter:description" content="Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stream_select - Manual" />
<meta itemprop="description" content="Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds" />

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
        <a href="function.stream-set-blocking.php">
          stream_set_blocking &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-resolve-include-path.php">
          &laquo; stream_resolve_include_path        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      <li><a href='ref.stream.php'>Stream Functions</a></li>      </ul>
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
            <option value='en/function.stream-select.php' selected="selected">English</option>
            <option value='de/function.stream-select.php'>German</option>
            <option value='es/function.stream-select.php'>Spanish</option>
            <option value='fr/function.stream-select.php'>French</option>
            <option value='it/function.stream-select.php'>Italian</option>
            <option value='ja/function.stream-select.php'>Japanese</option>
            <option value='pt_BR/function.stream-select.php'>Brazilian Portuguese</option>
            <option value='ru/function.stream-select.php'>Russian</option>
            <option value='tr/function.stream-select.php'>Turkish</option>
            <option value='uk/function.stream-select.php'>Ukrainian</option>
            <option value='zh/function.stream-select.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stream-select" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stream_select</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stream_select</span> &mdash; <span class="dc-title">Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.stream-select-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stream_select</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$read</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$write</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$except</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$seconds</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$microseconds</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>stream_select()</strong></span> function accepts arrays of streams and
   waits for them to change status. Its operation is equivalent to that of
   the <span class="function"><a href="function.socket-select.php" class="function">socket_select()</a></span> function except in that it acts on streams.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.stream-select-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">read</code></dt>
     <dd>
      <p class="para">
       The streams listed in the <code class="parameter">read</code> array will be watched to
       see if characters become available for reading (more precisely, to see if
       a read will not block - in particular, a stream resource is also ready on
       end-of-file, in which case an <span class="function"><a href="function.fread.php" class="function">fread()</a></span> will return
       a zero length string).
      </p>
     </dd>
    
    
     <dt><code class="parameter">write</code></dt>
     <dd>
      <p class="para">
       The streams listed in the <code class="parameter">write</code> array will be
       watched to see if a write will not block.
      </p>
     </dd>
    
    
     <dt><code class="parameter">except</code></dt>
     <dd>
      <p class="para">
       The streams listed in the <code class="parameter">except</code> array will be
       watched for high priority exceptional (&quot;out-of-band&quot;) data arriving.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        When <span class="function"><strong>stream_select()</strong></span> returns, the arrays
        <code class="parameter">read</code>, <code class="parameter">write</code> and
        <code class="parameter">except</code> are modified to indicate which stream
        resource(s) actually changed status.
        The original keys of the <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s are preserved.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">seconds</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">seconds</code> and <code class="parameter">microseconds</code>
       together form the <em>timeout</em> parameter,
       <code class="parameter">seconds</code> specifies the number of seconds while
       <code class="parameter">microseconds</code> the number of microseconds.
       The <code class="parameter">timeout</code> is an upper bound on the amount of time
       that <span class="function"><strong>stream_select()</strong></span> will wait before it returns.
       If <code class="parameter">seconds</code> and <code class="parameter">microseconds</code> are
       both set to <code class="literal">0</code>, <span class="function"><strong>stream_select()</strong></span> will
       not wait for data - instead it will return immediately, indicating the
       current status of the streams.
      </p>
      <p class="para">
       If <code class="parameter">seconds</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> <span class="function"><strong>stream_select()</strong></span>
       can block indefinitely, returning only when an event on one of the
       watched streams occurs (or if a signal interrupts the system call).
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="para">
        Using a timeout value of <code class="literal">0</code> allows you to
        instantaneously poll the status of the streams, however, it is NOT a
        good idea to use a <code class="literal">0</code> timeout value in a loop as it
        will cause your script to consume too much CPU time.
       </p>
       <p class="para">
        It is much better to specify a timeout value of a few seconds, although
        if you need to be checking and running other code concurrently, using a
        timeout value of at least <code class="literal">200000</code> microseconds will
        help reduce the CPU usage of your script.
       </p>
       <p class="para">
        Remember that the timeout value is the maximum time that will elapse;
        <span class="function"><strong>stream_select()</strong></span> will return as soon as the
        requested streams are ready for use.
       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">microseconds</code></dt>
     <dd>
      <p class="para">
       See <code class="parameter">seconds</code> description.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stream-select-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success <span class="function"><strong>stream_select()</strong></span> returns the number of
   stream resources contained in the modified arrays, which may be zero if
   the timeout expires before anything interesting happens. On error <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   is returned and a warning raised (this can happen if the system call is
   interrupted by an incoming signal).
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stream-select-changelog">
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
       <code class="parameter">microseconds</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stream-select-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4067">
    <p><strong>Example #1 <span class="function"><strong>stream_select()</strong></span> Example</strong></p>
    <div class="example-contents"><p>
     This example checks to see if data has arrived for reading on either
     <code class="parameter">$stream1</code> or <code class="parameter">$stream2</code>.
     Since the timeout value is <code class="literal">0</code> it will return
     immediately:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Prepare the read array */<br /></span><span style="color: #0000BB">$read   </span><span style="color: #007700">= array(</span><span style="color: #0000BB">$stream1</span><span style="color: #007700">, </span><span style="color: #0000BB">$stream2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$write  </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$except </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">false </span><span style="color: #007700">=== (</span><span style="color: #0000BB">$num_changed_streams </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$read</span><span style="color: #007700">, </span><span style="color: #0000BB">$write</span><span style="color: #007700">, </span><span style="color: #0000BB">$except</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">))) {<br />    </span><span style="color: #FF8000">/* Error handling */<br /></span><span style="color: #007700">} elseif (</span><span style="color: #0000BB">$num_changed_streams </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">/* At least on one of the streams something interesting happened */<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.stream-select-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Due to a limitation in the current Zend Engine it is not possible to pass a
    constant modifier like <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> directly as a parameter to a function
    which expects this parameter to be passed by reference. Instead use a
    temporary variable or an expression with the leftmost member being a
    temporary variable:
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$e </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">stream_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
   Be sure to use the <code class="literal">===</code> operator when checking for an
   error. Since the <span class="function"><strong>stream_select()</strong></span> may return 0 the
   comparison with <code class="literal">==</code> would evaluate to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>:
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$e </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">false </span><span style="color: #007700">=== </span><span style="color: #0000BB">stream_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"stream_select() failed\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you read/write to a stream returned in the arrays be aware that
    they do not necessarily read/write the full amount of data you have
    requested. Be prepared to even only be able to read/write a single
    byte.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Some streams (like <code class="literal">zlib</code>) cannot be selected by this
    function.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>Windows compatibility</strong><br />
   <p class="para">
    Use of <span class="function"><strong>stream_select()</strong></span> on
    file descriptors returned by <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> will fail
    and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> under Windows.
   </p>
   <p class="para">
    <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong> from a console changes status as soon as <em>any</em>
    input events are available, but reading from the stream may still block.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stream-select-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.stream-set-blocking.php" class="function" rel="rdfs-seeAlso">stream_set_blocking()</a> - Set blocking/non-blocking mode on a stream</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/functions/stream-select.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stream-select%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stream-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-select.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92012">  <div class="votes">
    <div id="Vu92012">
    <a href="/manual/vote-note.php?id=92012&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92012">
    <a href="/manual/vote-note.php?id=92012&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92012" title="100% like this...">
    5
    </div>
  </div>
  <a href="#92012" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#92012"> &para;</a><div class="date" title="2009-07-04 07:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92012">
<div class="phpcode"><code><span class="html">Note that reading from a regular file which is on end-of-file will *not* block. You'll get a non-blocking, zero-byte read.  However, stream_select *will* block if the input is a pipe, and there is no more data to be had.</span></code></div>
  </div>
 </div>
  <div class="note" id="123582">  <div class="votes">
    <div id="Vu123582">
    <a href="/manual/vote-note.php?id=123582&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123582">
    <a href="/manual/vote-note.php?id=123582&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123582" title="85% like this...">
    5
    </div>
  </div>
  <a href="#123582" class="name">
  <strong class="user"><em>Sitsofe</em></strong></a><a class="genanchor" href="#123582"> &para;</a><div class="date" title="2019-02-04 06:52"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123582">
<div class="phpcode"><code><span class="html">When stream_select() fails you SHOULD NOT use the results of the arrays (i.e. read, write, except) that were passed into it as parameters. While doing so anyway won't trigger undefined behaviour, you are depending on unspecified behaviour that by definition is not guaranteed.<br /><br />At the time of writing the PHP 7.2 interpreter does not modify the arrays upon stream_select() failure (see the code around <a href="https://github.com/php/php-src/blob/php-7.2.14/ext/standard/streamsfuncs.c#L842" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/php-7.2.14/ext/standard/streamsfuncs.c#L842</a>) thus a PHP program that doesn't heed the advice above can deceive itself as to the state of those streams.<br /><br />(Hopefully this warning can be added to the main documentation one day)</span></code></div>
  </div>
 </div>
  <div class="note" id="122839">  <div class="votes">
    <div id="Vu122839">
    <a href="/manual/vote-note.php?id=122839&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122839">
    <a href="/manual/vote-note.php?id=122839&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122839" title="85% like this...">
    5
    </div>
  </div>
  <a href="#122839" class="name">
  <strong class="user"><em>Martin</em></strong></a><a class="genanchor" href="#122839"> &para;</a><div class="date" title="2018-06-15 11:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122839">
<div class="phpcode"><code><span class="html">Maintaining connection with multiple clients can be tricky, PHP script is single-thread process, so if you like to do more than one thing at once (like waiting for new connections and waiting for new data), you’ll have to use some sort of multiplexing. <br /><br /><span class="default">&lt;?php<br />$socket </span><span class="keyword">= </span><span class="default">stream_socket_server</span><span class="keyword">(</span><span class="string">"tcp://0.0.0.0:8000"</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">STREAM_SERVER_BIND </span><span class="keyword">| </span><span class="default">STREAM_SERVER_LISTEN</span><span class="keyword">);<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">$connections </span><span class="keyword">= [];<br /></span><span class="default">$read </span><span class="keyword">= [];<br /></span><span class="default">$write </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$except </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />while (</span><span class="default">1</span><span class="keyword">) {<br /><br />    </span><span class="comment">// look for new connections<br />    </span><span class="keyword">if (</span><span class="default">$c </span><span class="keyword">= @</span><span class="default">stream_socket_accept</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, empty(</span><span class="default">$connections</span><span class="keyword">) ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">, </span><span class="default">$peer</span><span class="keyword">)) {<br />        echo </span><span class="default">$peer</span><span class="keyword">.</span><span class="string">' connected'</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="string">'Hello '</span><span class="keyword">.</span><span class="default">$peer</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">);<br />        </span><span class="default">$connections</span><span class="keyword">[</span><span class="default">$peer</span><span class="keyword">] = </span><span class="default">$c</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// wait for any stream data<br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$connections</span><span class="keyword">;<br />    if (</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">)) {<br /><br />        foreach (</span><span class="default">$read </span><span class="keyword">as </span><span class="default">$c</span><span class="keyword">) {<br />            </span><span class="default">$peer </span><span class="keyword">= </span><span class="default">stream_socket_get_name</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />            if (</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">)) {<br />                echo </span><span class="string">'Connection closed '</span><span class="keyword">.</span><span class="default">$peer</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />                unset(</span><span class="default">$connections</span><span class="keyword">[</span><span class="default">$peer</span><span class="keyword">]);<br />            } else {<br />                </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />                echo </span><span class="default">$peer</span><span class="keyword">.</span><span class="string">': '</span><span class="keyword">.</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">).</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43473">  <div class="votes">
    <div id="Vu43473">
    <a href="/manual/vote-note.php?id=43473&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43473">
    <a href="/manual/vote-note.php?id=43473&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43473" title="85% like this...">
    5
    </div>
  </div>
  <a href="#43473" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#43473"> &para;</a><div class="date" title="2004-06-22 11:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43473">
<div class="phpcode"><code><span class="html">If you want to set an absolute maximum execution time for stream_select in a loop, it's important to decrement the max_time value passed to stream_select.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The maximum time for execution in milliseconds<br /></span><span class="default">$maxtime </span><span class="keyword">= </span><span class="default">200000</span><span class="keyword">;<br /></span><span class="comment">// The time the loop started<br /></span><span class="default">$starttime </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">// Original array of sockets<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">$orig_sockets</span><span class="keyword">;<br /><br /></span><span class="comment">// The function to calculate the timeout<br /></span><span class="keyword">function </span><span class="default">calctimeout</span><span class="keyword">(</span><span class="default">$maxtime</span><span class="keyword">, </span><span class="default">$starttime</span><span class="keyword">)<br />{<br />    return </span><span class="default">$maxtime </span><span class="keyword">- ((</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$starttime</span><span class="keyword">) * </span><span class="default">1000000</span><span class="keyword">);<br />}<br /><br />while (</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">, </span><span class="default">$w </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$e </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">calctimeout</span><span class="keyword">(</span><span class="default">$maxtime</span><span class="keyword">, </span><span class="default">$starttime</span><span class="keyword">)) !== </span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="comment">// loop through the sockets that showed activity<br />    </span><span class="keyword">foreach (</span><span class="default">$r </span><span class="keyword">as </span><span class="default">$socket</span><span class="keyword">) {<br />        </span><span class="comment">// $socket talked<br />    </span><span class="keyword">}<br /><br />    </span><span class="comment">// stream_select modifies the contents of $r<br />    // in a loop we should replace it with the original<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$orig_sockets</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72587">  <div class="votes">
    <div id="Vu72587">
    <a href="/manual/vote-note.php?id=72587&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72587">
    <a href="/manual/vote-note.php?id=72587&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72587" title="68% like this...">
    6
    </div>
  </div>
  <a href="#72587" class="name">
  <strong class="user"><em>maartenwolzak at gmail dot com</em></strong></a><a class="genanchor" href="#72587"> &para;</a><div class="date" title="2007-01-25 01:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72587">
<div class="phpcode"><code><span class="html">Note that you should change the calctimeout function below to divide the outcome by 1.000.000 otherwise you'll be waiting for two years instead of one minute for the socket to timeout...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// The function to calculate the timeout<br /></span><span class="keyword">function </span><span class="default">calctimeout</span><span class="keyword">(</span><span class="default">$maxtime</span><span class="keyword">, </span><span class="default">$starttime</span><span class="keyword">)<br />{<br />   return (</span><span class="default">$maxtime </span><span class="keyword">- ((</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$starttime</span><span class="keyword">) * </span><span class="default">1000000</span><span class="keyword">))/</span><span class="default">1000000</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118775">  <div class="votes">
    <div id="Vu118775">
    <a href="/manual/vote-note.php?id=118775&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118775">
    <a href="/manual/vote-note.php?id=118775&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118775" title="83% like this...">
    4
    </div>
  </div>
  <a href="#118775" class="name">
  <strong class="user"><em>asphp at dsgml dot com</em></strong></a><a class="genanchor" href="#118775"> &para;</a><div class="date" title="2016-02-04 09:28"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118775">
<div class="phpcode"><code><span class="html">Make sure not to pass the same variable in the 3 arguments to stream_select, or you'll only get the results from one of them and the others will be overwritten.</span></code></div>
  </div>
 </div>
  <div class="note" id="113028">  <div class="votes">
    <div id="Vu113028">
    <a href="/manual/vote-note.php?id=113028&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113028">
    <a href="/manual/vote-note.php?id=113028&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113028" title="80% like this...">
    3
    </div>
  </div>
  <a href="#113028" class="name">
  <strong class="user"><em>mark2xv at gmail dot com</em></strong></a><a class="genanchor" href="#113028"> &para;</a><div class="date" title="2013-08-20 04:52"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113028">
<div class="phpcode"><code><span class="html">If you're getting unexplainable problems with nonblocking sockets using stream_select, disable the buffers using:<br /><br />stream_set_read_buffer($socket, 0);<br />stream_set_write_buffer($socket, 0);<br /><br />For some reason when writing (in total) ~256k, sockets start returning FALSE when reading, yet always appear in the stream_select arrays. This fixed that problem. (for us.)</span></code></div>
  </div>
 </div>
  <div class="note" id="50920">  <div class="votes">
    <div id="Vu50920">
    <a href="/manual/vote-note.php?id=50920&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50920">
    <a href="/manual/vote-note.php?id=50920&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50920" title="80% like this...">
    3
    </div>
  </div>
  <a href="#50920" class="name">
  <strong class="user"><em>phpdoc at shemesh dot biz</em></strong></a><a class="genanchor" href="#50920"> &para;</a><div class="date" title="2005-03-14 01:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50920">
<div class="phpcode"><code><span class="html">Please note that, on return, the key of "read" will be zero based, serially numbered according to the streams for which there is read data ready only. In other words, if you want to know which of the original streams placed in "read" is ready, there is no immediate way of knowing that.<br /><br />If you want to know which of the original stream is which, you can either use "==", or possibly set a reverse map array, in which the stream is the key, and the key to the original "read" array is the data.</span></code></div>
  </div>
 </div>
  <div class="note" id="115400">  <div class="votes">
    <div id="Vu115400">
    <a href="/manual/vote-note.php?id=115400&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115400">
    <a href="/manual/vote-note.php?id=115400&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115400" title="75% like this...">
    2
    </div>
  </div>
  <a href="#115400" class="name">
  <strong class="user"><em>rob at associatedtechs dot com</em></strong></a><a class="genanchor" href="#115400"> &para;</a><div class="date" title="2014-07-18 12:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115400">
<div class="phpcode"><code><span class="html">If you try to use stream_select() with fread(), you may get bit by a combination of bugs (<a href="https://bugs.php.net/bug.php?id=52602" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=52602</a> and <a href="https://bugs.php.net/bug.php?id=51056" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=51056</a>). As of PHP 5.5.10, fread() and stream_select() don't reliably play well together.<br /><br />If you need stream_select() and you don't need an encrypted connection (e.g. TLS), use stream_socket_recvfrom() instead of fread().<br /><br />I can't find a way to reliably handle an encrypted connection with blocking functions in PHP; non-blocking might be the only way to do it.</span></code></div>
  </div>
 </div>
  <div class="note" id="72796">  <div class="votes">
    <div id="Vu72796">
    <a href="/manual/vote-note.php?id=72796&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72796">
    <a href="/manual/vote-note.php?id=72796&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72796" title="60% like this...">
    2
    </div>
  </div>
  <a href="#72796" class="name">
  <strong class="user"><em>Ben</em></strong></a><a class="genanchor" href="#72796"> &para;</a><div class="date" title="2007-02-01 05:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72796">
<div class="phpcode"><code><span class="html">You can key on file descriptors just fine by casting them to an int or a string, which returns what you would expect.</span></code></div>
  </div>
 </div>
  <div class="note" id="100842">  <div class="votes">
    <div id="Vu100842">
    <a href="/manual/vote-note.php?id=100842&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100842">
    <a href="/manual/vote-note.php?id=100842&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100842" title="52% like this...">
    1
    </div>
  </div>
  <a href="#100842" class="name">
  <strong class="user"><em>aks at esoft dot dk</em></strong></a><a class="genanchor" href="#100842"> &para;</a><div class="date" title="2010-11-10 07:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100842">
<div class="phpcode"><code><span class="html">stream_select() looks deceptively like a simple wrapper around POSIX select(2).<br /><br />But beware: while select(2) allows you to pass no file descriptors and use it as a "portable subsecond sleep", PHP will complain with "Warning: stream_select(): No stream arrays were passed in ****" if all arrays are empty or null, and it WONT sleep, it will return immediately. So... if the number of file descriptors you have isn't static, you have to deal with the special case yourself.</span></code></div>
  </div>
 </div>
  <div class="note" id="117492">  <div class="votes">
    <div id="Vu117492">
    <a href="/manual/vote-note.php?id=117492&amp;page=function.stream-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117492">
    <a href="/manual/vote-note.php?id=117492&amp;page=function.stream-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117492" title="51% like this...">
    1
    </div>
  </div>
  <a href="#117492" class="name">
  <strong class="user"><em>doingitwrong at mailismagic dot com</em></strong></a><a class="genanchor" href="#117492"> &para;</a><div class="date" title="2015-06-17 10:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117492">
<div class="phpcode"><code><span class="html">If you use stream_select() with a blocking stream, you are doing it wrong!<br /><br />Just because this function returns something in one or more of the arrays does NOT mean that a future read or write operation will not block.<br /><br />The above sentence is the most important sentence you will ever read regarding stream manipulation.  Using stream_select() with blocking streams is a very common amateur mistake and causes major headaches when tracking down usage of this and similar select() system functions.  PHP (and really the underlying OS) should verify that the supplied stream set is not blocking and throw an error/exception if any socket is set to block so that people are forced to fix their code.  The documentation for stream_select() is, at best, misleading.<br /><br />If you want a non-blocking stream, then set the stream to not block.  Otherwise, live with the blocking stream.  That is, after all, the whole point of blocking - to block indefinitely until the operation completes.  select() is built for non-blocking streams ONLY.  Any other use will result in very hard to track down bugs.<br /><br />I got the above lecture many years ago after encountering the very bugs I mention.  I fixed my code and now correct similar mistakes when I run into the issue elsewhere.  Writing code for non-blocking streams is simpler than trying to write hacks for blocking streams with select() functions and ending up with application bugs.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stream-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-select.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.stream.php">Stream Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.stream-bucket-append.php" title="stream_&#8203;bucket_&#8203;append">stream_&#8203;bucket_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-make-writeable.php" title="stream_&#8203;bucket_&#8203;make_&#8203;writeable">stream_&#8203;bucket_&#8203;make_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-new.php" title="stream_&#8203;bucket_&#8203;new">stream_&#8203;bucket_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-prepend.php" title="stream_&#8203;bucket_&#8203;prepend">stream_&#8203;bucket_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-create.php" title="stream_&#8203;context_&#8203;create">stream_&#8203;context_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-default.php" title="stream_&#8203;context_&#8203;get_&#8203;default">stream_&#8203;context_&#8203;get_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-options.php" title="stream_&#8203;context_&#8203;get_&#8203;options">stream_&#8203;context_&#8203;get_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-params.php" title="stream_&#8203;context_&#8203;get_&#8203;params">stream_&#8203;context_&#8203;get_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-default.php" title="stream_&#8203;context_&#8203;set_&#8203;default">stream_&#8203;context_&#8203;set_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-option.php" title="stream_&#8203;context_&#8203;set_&#8203;option">stream_&#8203;context_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-options.php" title="stream_&#8203;context_&#8203;set_&#8203;options">stream_&#8203;context_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-params.php" title="stream_&#8203;context_&#8203;set_&#8203;params">stream_&#8203;context_&#8203;set_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-copy-to-stream.php" title="stream_&#8203;copy_&#8203;to_&#8203;stream">stream_&#8203;copy_&#8203;to_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-append.php" title="stream_&#8203;filter_&#8203;append">stream_&#8203;filter_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-prepend.php" title="stream_&#8203;filter_&#8203;prepend">stream_&#8203;filter_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-register.php" title="stream_&#8203;filter_&#8203;register">stream_&#8203;filter_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-remove.php" title="stream_&#8203;filter_&#8203;remove">stream_&#8203;filter_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-contents.php" title="stream_&#8203;get_&#8203;contents">stream_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-filters.php" title="stream_&#8203;get_&#8203;filters">stream_&#8203;get_&#8203;filters</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-line.php" title="stream_&#8203;get_&#8203;line">stream_&#8203;get_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-meta-data.php" title="stream_&#8203;get_&#8203;meta_&#8203;data">stream_&#8203;get_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-transports.php" title="stream_&#8203;get_&#8203;transports">stream_&#8203;get_&#8203;transports</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-wrappers.php" title="stream_&#8203;get_&#8203;wrappers">stream_&#8203;get_&#8203;wrappers</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-is-local.php" title="stream_&#8203;is_&#8203;local">stream_&#8203;is_&#8203;local</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-isatty.php" title="stream_&#8203;isatty">stream_&#8203;isatty</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-notification-callback.php" title="stream_&#8203;notification_&#8203;callback">stream_&#8203;notification_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-register-wrapper.php" title="stream_&#8203;register_&#8203;wrapper">stream_&#8203;register_&#8203;wrapper</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-resolve-include-path.php" title="stream_&#8203;resolve_&#8203;include_&#8203;path">stream_&#8203;resolve_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="current">
                            <a href="function.stream-select.php" title="stream_&#8203;select">stream_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-blocking.php" title="stream_&#8203;set_&#8203;blocking">stream_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-chunk-size.php" title="stream_&#8203;set_&#8203;chunk_&#8203;size">stream_&#8203;set_&#8203;chunk_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-read-buffer.php" title="stream_&#8203;set_&#8203;read_&#8203;buffer">stream_&#8203;set_&#8203;read_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-timeout.php" title="stream_&#8203;set_&#8203;timeout">stream_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-write-buffer.php" title="stream_&#8203;set_&#8203;write_&#8203;buffer">stream_&#8203;set_&#8203;write_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-accept.php" title="stream_&#8203;socket_&#8203;accept">stream_&#8203;socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-client.php" title="stream_&#8203;socket_&#8203;client">stream_&#8203;socket_&#8203;client</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-enable-crypto.php" title="stream_&#8203;socket_&#8203;enable_&#8203;crypto">stream_&#8203;socket_&#8203;enable_&#8203;crypto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-get-name.php" title="stream_&#8203;socket_&#8203;get_&#8203;name">stream_&#8203;socket_&#8203;get_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-pair.php" title="stream_&#8203;socket_&#8203;pair">stream_&#8203;socket_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-recvfrom.php" title="stream_&#8203;socket_&#8203;recvfrom">stream_&#8203;socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-sendto.php" title="stream_&#8203;socket_&#8203;sendto">stream_&#8203;socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-server.php" title="stream_&#8203;socket_&#8203;server">stream_&#8203;socket_&#8203;server</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-shutdown.php" title="stream_&#8203;socket_&#8203;shutdown">stream_&#8203;socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-supports-lock.php" title="stream_&#8203;supports_&#8203;lock">stream_&#8203;supports_&#8203;lock</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-register.php" title="stream_&#8203;wrapper_&#8203;register">stream_&#8203;wrapper_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-restore.php" title="stream_&#8203;wrapper_&#8203;restore">stream_&#8203;wrapper_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-unregister.php" title="stream_&#8203;wrapper_&#8203;unregister">stream_&#8203;wrapper_&#8203;unregister</a>
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
