<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: feof - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.feof.php">
 <link rel="shorturl" href="https://www.php.net/feof">
 <link rel="alternate" href="https://www.php.net/feof" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fdatasync.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fflush.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.feof.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.feof.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.feof.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.feof.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.feof.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.feof.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.feof.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.feof.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.feof.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.feof.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.feof.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tests for end-of-file on a file pointer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: feof - Manual" />
<meta name="twitter:description" content="Tests for end-of-file on a file pointer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: feof - Manual" />
<meta itemprop="description" content="Tests for end-of-file on a file pointer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tests for end-of-file on a file pointer" />

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
        <a href="function.fflush.php">
          fflush &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fdatasync.php">
          &laquo; fdatasync        </a>
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
            <option value='en/function.feof.php' selected="selected">English</option>
            <option value='de/function.feof.php'>German</option>
            <option value='es/function.feof.php'>Spanish</option>
            <option value='fr/function.feof.php'>French</option>
            <option value='it/function.feof.php'>Italian</option>
            <option value='ja/function.feof.php'>Japanese</option>
            <option value='pt_BR/function.feof.php'>Brazilian Portuguese</option>
            <option value='ru/function.feof.php'>Russian</option>
            <option value='tr/function.feof.php'>Turkish</option>
            <option value='uk/function.feof.php'>Ukrainian</option>
            <option value='zh/function.feof.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.feof" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">feof</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">feof</span> &mdash; <span class="dc-title">Tests for end-of-file on a file pointer</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.feof-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>feof</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Tests for end-of-file on a file pointer.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.feof-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">The file pointer must be valid, and must point to
a file successfully opened by <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> or
<span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span> (and not yet closed by
<span class="function"><a href="function.fclose.php" class="function">fclose()</a></span>).</p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.feof-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the file pointer is at EOF or an error occurs
   (including socket timeout); otherwise returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.feof-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    If a connection opened by <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span> wasn&#039;t closed
    by the server, <span class="function"><strong>feof()</strong></span> will hang. To workaround this, see 
    below example:
    <div class="example" id="example-2343">
     <p><strong>Example #1 Handling timeouts with <span class="function"><strong>feof()</strong></span></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">safe_feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">) {<br /> </span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /> return </span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* Assuming $fp is previously opened by fsockopen() */<br /><br /></span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$timeout </span><span style="color: #007700">= </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'default_socket_timeout'</span><span style="color: #007700">);<br /><br />while(!</span><span style="color: #0000BB">safe_feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$start</span><span style="color: #007700">) &amp;&amp; (</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">) - </span><span style="color: #0000BB">$start</span><span style="color: #007700">) &lt; </span><span style="color: #0000BB">$timeout</span><span style="color: #007700">)<br />{<br /> </span><span style="color: #FF8000">/* Handle */<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    If the passed file pointer is not valid you may get an infinite loop, because
    <span class="function"><strong>feof()</strong></span> fails to return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
    <div class="example" id="example-2344">
     <p><strong>Example #2 <span class="function"><strong>feof()</strong></span> example with an invalid file pointer</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// if file can not be read or doesn't exist fopen function returns FALSE<br /></span><span style="color: #0000BB">$file </span><span style="color: #007700">= @</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"no_such_file"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// FALSE from fopen will issue warning and result in infinite loop here<br /></span><span style="color: #007700">while (!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)) {<br />}<br /><br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/feof.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.feof%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.feof&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.feof.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="67261">  <div class="votes">
    <div id="Vu67261">
    <a href="/manual/vote-note.php?id=67261&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67261">
    <a href="/manual/vote-note.php?id=67261&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67261" title="70% like this...">
    50
    </div>
  </div>
  <a href="#67261" class="name">
  <strong class="user"><em>ironoxid at libero dot it</em></strong></a><a class="genanchor" href="#67261"> &para;</a><div class="date" title="2006-06-06 06:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67261">
<div class="phpcode"><code><span class="html">I really thought that the feof() was TRUE when the logical file pointer is a EOF.<br />but no ! <br />we need to read and get an empty record before the eof() reports TRUE.<br /><br />So<br /><br />$fp = fopen('test.bin','rb');<br />while(!feof($fp)) {<br />  $c = fgetc($fp);<br />  // ... do something with $c <br />  echo ftell($fp), ",";<br />}<br />echo 'EOF!';<br /><br />prints for two time the last byte position.<br />If our file length is 5 byte this code prints <br /><br />0,1,2,3,4,5,5,EOF!<br /><br />Because of this, you have to do another check to verify if fgetc really reads another byte (to prevent error on "do something with $c" ^_^).<br /><br />To prevent errors you have to use this code<br /><br />$fp = fopen('test.bin','rb');<br />while(!feof($fp)) {<br />  $c = fgetc($fp);<br />  if($c === false) break;<br />  // ... do something with $c <br />}<br /><br />but this is the same of<br /><br />$fp = fopen('test.bin','rb');<br />while(($c = fgetc($fp))!==false) {<br />  // ... do something with $c <br />}<br /><br />Consequently feof() is simply useless.<br />Before write this note I want to submit this as a php bug but one php developer said that this does not imply a bug in PHP itself (<a href="http://bugs.php.net/bug.php?id=35136&amp;edit=2" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=35136&amp;edit=2</a>).<br /><br />If this is not a bug I think that this need at least to be noticed.<br /><br />Sorry for my bad english.<br />Bye ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="96074">  <div class="votes">
    <div id="Vu96074">
    <a href="/manual/vote-note.php?id=96074&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96074">
    <a href="/manual/vote-note.php?id=96074&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96074" title="75% like this...">
    15
    </div>
  </div>
  <a href="#96074" class="name">
  <strong class="user"><em>sudo dot adam dot carruthers at gmail dot com</em></strong></a><a class="genanchor" href="#96074"> &para;</a><div class="date" title="2010-02-06 09:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96074">
<div class="phpcode"><code><span class="html">When using feof() on a TCP stream, i found the following to work (after many hours of frustration and anger):<br /><br />NOTE: I used ";" to denote the end of data transmission.  This can be modified to whatever the server's end of file or in this case, end of output character is.<br /><br /><span class="default">&lt;?php<br />        $cursor </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        </span><span class="default">$inData </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /><br />        while(</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">) != </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">fgetc</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />            </span><span class="default">$inData</span><span class="keyword">.= </span><span class="default">$cursor</span><span class="keyword">;<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />        echo(</span><span class="default">$inData</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Since strcmp() returns 0 when the two strings are equal, it will return non zero as long as the cursor is not ";".  Using the above method will add ";" to the string, but the fix for this is simple.<br /><br /><span class="default">&lt;?php<br />        $cursor </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        </span><span class="default">$inData </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /><br />         </span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">fgetc</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />        while(</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">) != </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$inData</span><span class="keyword">.= </span><span class="default">$cursor</span><span class="keyword">;<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />        echo(</span><span class="default">$inData</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="122925">  <div class="votes">
    <div id="Vu122925">
    <a href="/manual/vote-note.php?id=122925&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122925">
    <a href="/manual/vote-note.php?id=122925&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122925" title="75% like this...">
    4
    </div>
  </div>
  <a href="#122925" class="name">
  <strong class="user"><em>DimeCadmium</em></strong></a><a class="genanchor" href="#122925"> &para;</a><div class="date" title="2018-07-10 07:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122925">
<div class="phpcode"><code><span class="html">feof() does not test for the actual end of a file, it tests for an exceptional condition known as end-of-file. (It's based on the C function of the same name which "tests the  end-of-file  indicator  for  the  stream")<br /><br />That is to say, feof() only tells you whether fread() (and friends) have run into EOF, to allow you to differentiate it from other errors. You should be testing the return value of fread() (or whatever function you're using to read), not feof().<br /><br />In particular, if your filehandle is invalid (file doesn't exist / permissions issue / etc.) or fread() encounters some other error, feof will return false, and your code will be running an infinite loop processing the FALSE returned from fread().<br /><br />From the (C) manpage for fread():<br />       fread() does not distinguish between end-of-file and error, and callers<br />       must use feof(3) and ferror(3) to determine which occurred.<br />That is the SOLE purpose for feof().</span></code></div>
  </div>
 </div>
  <div class="note" id="70715">  <div class="votes">
    <div id="Vu70715">
    <a href="/manual/vote-note.php?id=70715&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70715">
    <a href="/manual/vote-note.php?id=70715&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70715" title="65% like this...">
    10
    </div>
  </div>
  <a href="#70715" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#70715"> &para;</a><div class="date" title="2006-10-24 03:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70715">
<div class="phpcode"><code><span class="html">feof() is, in fact, reliable.  However, you have to use it carefully in conjunction with fgets().  A common (but incorrect) approach is to try something like this:<br /><br />&lt;?<br />$fp = fopen("myfile.txt", "r");<br />while (!feof($fp)) {<br />  $current_line = fgets($fp);<br />  // do stuff to the current line here<br />}<br />fclose($fp);<br />?&gt;<br /><br />The problem when processing plain text files is that feof() will not return true after getting the last line of input.  You need to try to get input _and fail_ before feof() returns true.  You can think of the loop above working like this:<br /><br />* (merrily looping, getting lines and processing them)<br />* fgets used to get 2nd to last line<br />* line is processed<br />* loop back up -- feof returns false, so do the steps inside the loop<br />* fgets used to get last line<br />* line is processed<br />* loop back up -- since the last call to fgets worked (you got the last line), feof still returns false, so you do the steps inside the loop again<br />* fgets used to try to get another line (but there's nothing there!)<br />* your code doesn't realize this, and tries to process this non-existent line (typically by doing the same actions again)<br />* now when your code loops back up, feof returns true, and your loop ends<br /><br />There's two ways to solve this:<br /><br />1. You can put an additional test for feof() inside the loop<br />2. You can move around your calls to fgets() so that the testing of feof() happens in a better location<br /><br />Here's solution 1:<br /><br />&lt;?<br />$fp = fopen("myfile.txt", "r");<br />while(!feof($fp)) {<br />  $current_line = fgets($fp);<br />  if (!feof($fp)) {<br />    // process current line<br />  }<br />}<br />fclose($fp);<br />?&gt;<br /><br />And here's solution 2 (IMHO, more elegant):<br /><br />&lt;?<br />$fp = fopen("myfile.txt", "r");<br />$current_line = fgets($fp);<br />while (!feof($fp)) {<br />  // process current line<br />  $current_line = fgets($fp);<br />}<br />fclose($fp);<br />?&gt;<br /><br />FYI, the eof() function in C++ works the exact same way, so this isn't just some weird PHP thing...</span></code></div>
  </div>
 </div>
  <div class="note" id="117809">  <div class="votes">
    <div id="Vu117809">
    <a href="/manual/vote-note.php?id=117809&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117809">
    <a href="/manual/vote-note.php?id=117809&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117809" title="61% like this...">
    3
    </div>
  </div>
  <a href="#117809" class="name">
  <strong class="user"><em>line dot loic at gmail dot com</em></strong></a><a class="genanchor" href="#117809"> &para;</a><div class="date" title="2015-08-13 09:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117809">
<div class="phpcode"><code><span class="html">To avoid infinite loops and the warning :<br />"Warning: feof() expects parameter 1 to be resource, boolean given"<br /><br />You need to check that the fopen function return the correct type.<br />This can be achieved very easily with gettype().<br />Here is an example :<br /><br />$source = fopen($xml_uri, "r");<br />$xml = "";<br />                    <br />if(gettype($source) == "resource") { // Check here !<br />    while (!feof($source)) {<br />        $xml .= fgets($source, 4096);<br />    }<br />}<br /><br />echo $xml;</span></code></div>
  </div>
 </div>
  <div class="note" id="81436">  <div class="votes">
    <div id="Vu81436">
    <a href="/manual/vote-note.php?id=81436&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81436">
    <a href="/manual/vote-note.php?id=81436&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81436" title="61% like this...">
    3
    </div>
  </div>
  <a href="#81436" class="name">
  <strong class="user"><em>honzam+php at ipdgroup dot com</em></strong></a><a class="genanchor" href="#81436"> &para;</a><div class="date" title="2008-02-28 02:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81436">
<div class="phpcode"><code><span class="html">Johannes: Remember note from stream_get_meta_data page: For socket streams this member [eof] can be TRUE  even when unread_bytes  is non-zero. To determine if there is more data to be read, use feof() instead of reading this item. <br /><br />Another thing: better not rely on the "including socket timeout" part of when feof returns true. Just found program looping two days in while(!feof($fd)) fread ... with 20 seconds timeout in PHP 4.3.10.</span></code></div>
  </div>
 </div>
  <div class="note" id="60284">  <div class="votes">
    <div id="Vu60284">
    <a href="/manual/vote-note.php?id=60284&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60284">
    <a href="/manual/vote-note.php?id=60284&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60284" title="62% like this...">
    2
    </div>
  </div>
  <a href="#60284" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#60284"> &para;</a><div class="date" title="2006-01-01 06:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60284">
<div class="phpcode"><code><span class="html">if you use fseek function to pos the pointer exceed the size the file,feof still return true.so note that when you use feof as the condition of while loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="67114">  <div class="votes">
    <div id="Vu67114">
    <a href="/manual/vote-note.php?id=67114&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67114">
    <a href="/manual/vote-note.php?id=67114&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67114" title="60% like this...">
    3
    </div>
  </div>
  <a href="#67114" class="name">
  <strong class="user"><em>m a p o p a at g m a i l. c o m</em></strong></a><a class="genanchor" href="#67114"> &para;</a><div class="date" title="2006-06-03 05:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67114">
<div class="phpcode"><code><span class="html">you  can avoid the infinite loop and filling the error logs <br />by an simple if statement <br />Here is the example<br /><br />    $handle = fopen("<a href="http://xml.weather.yahoo.com/forecastrss?p=AYXX0008&amp;u=f" rel="nofollow" target="_blank">http://xml.weather.yahoo.com/forecastrss?p=AYXX0008&amp;u=f</a>", "r");<br />    $xml = "";<br />    if ($handle)<br />    {<br />       while (!feof($handle))<br />       {<br />           $xml .= fread($handle, 128);<br />       }<br />        fclose($handle);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="71252">  <div class="votes">
    <div id="Vu71252">
    <a href="/manual/vote-note.php?id=71252&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71252">
    <a href="/manual/vote-note.php?id=71252&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71252" title="58% like this...">
    4
    </div>
  </div>
  <a href="#71252" class="name">
  <strong class="user"><em>cmr at forestfactory dot de</em></strong></a><a class="genanchor" href="#71252"> &para;</a><div class="date" title="2006-11-19 08:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71252">
<div class="phpcode"><code><span class="html">Here's solution 3:<br /><br />&lt;?<br />$fp = fopen("myfile.txt", "r");<br />while ( ($current_line = fgets($fp)) !== false ) {<br />  // do stuff to the current line here<br />}<br />fclose($fp);<br />?&gt;<br /><br />AFAICS fgets() never returns an empty string, so we can also write:<br /><br />&lt;?<br />$fp = fopen("myfile.txt", "r");<br />while ( $current_line = fgets($fp) ) {<br />  // do stuff to the current line here<br />}<br />fclose($fp);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="50613">  <div class="votes">
    <div id="Vu50613">
    <a href="/manual/vote-note.php?id=50613&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50613">
    <a href="/manual/vote-note.php?id=50613&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50613" title="60% like this...">
    2
    </div>
  </div>
  <a href="#50613" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50613"> &para;</a><div class="date" title="2005-03-04 09:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50613">
<div class="phpcode"><code><span class="html">if you're worried the file pointer is invalid, TEST IT before you go into your loop... that way it'll never be an infinite loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="107449">  <div class="votes">
    <div id="Vu107449">
    <a href="/manual/vote-note.php?id=107449&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107449">
    <a href="/manual/vote-note.php?id=107449&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107449" title="54% like this...">
    2
    </div>
  </div>
  <a href="#107449" class="name">
  <strong class="user"><em>dewi at dewimorgan dot com</em></strong></a><a class="genanchor" href="#107449"> &para;</a><div class="date" title="2012-02-09 11:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107449">
<div class="phpcode"><code><span class="html">Return values in the documentation are incorrectly stated. It says: <br /><br />Returns TRUE if the file pointer is at EOF or an error occurs (including socket timeout); otherwise returns FALSE.<br /><br />Correct text would be more like:<br /><br />Returns FALSE if no filehandle was passed; <br />returns NULL if no filehandle was passed; <br />returns TRUE if the file pointer is at EOF or an error occurs (including socket timeout);<br />otherwise returns FALSE.<br /><br />As an example, running the following from the commandline:<br /><br />php -r 'echo <br />    "Empty: ".var_export(feof(), true)."\n".<br />    "Null: ".var_export(feof(NULL), true)."\n".<br />    "Undefined: ".var_export(feof($undef), true)."\n"<br />;'<br /><br />This will output:<br /><br />PHP Warning:  Wrong parameter count for feof() in Command line code on line 1<br />PHP Warning:  feof(): supplied argument is not a valid stream resource in Command line code on line 1<br />PHP Warning:  feof(): supplied argument is not a valid stream resource in Command line code on line 1<br /><br />Empty: NULL<br />Null: false<br />Undefined: false<br /><br />This can, as other commenters have reported, result in infinite loops and massive PHP error logfiles, if the file handle returned by fopen() is invalid for any reason.</span></code></div>
  </div>
 </div>
  <div class="note" id="77912">  <div class="votes">
    <div id="Vu77912">
    <a href="/manual/vote-note.php?id=77912&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77912">
    <a href="/manual/vote-note.php?id=77912&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77912" title="54% like this...">
    2
    </div>
  </div>
  <a href="#77912" class="name">
  <strong class="user"><em>Jet</em></strong></a><a class="genanchor" href="#77912"> &para;</a><div class="date" title="2007-09-19 07:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77912">
<div class="phpcode"><code><span class="html">To avoid infinite loop with fgets() just use do..while statement.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'myfile.txt'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">)) do {<br />    </span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />    </span><span class="comment">// do any stuff here...<br /></span><span class="keyword">} while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">));<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113366">  <div class="votes">
    <div id="Vu113366">
    <a href="/manual/vote-note.php?id=113366&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113366">
    <a href="/manual/vote-note.php?id=113366&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113366" title="53% like this...">
    1
    </div>
  </div>
  <a href="#113366" class="name">
  <strong class="user"><em>Alwar</em></strong></a><a class="genanchor" href="#113366"> &para;</a><div class="date" title="2013-10-02 07:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113366">
<div class="phpcode"><code><span class="html">Don't use feof to test if you have readed all data sent by the other end of the socket. As i know it would return true only when the other end closes the connection.</span></code></div>
  </div>
 </div>
  <div class="note" id="117578">  <div class="votes">
    <div id="Vu117578">
    <a href="/manual/vote-note.php?id=117578&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117578">
    <a href="/manual/vote-note.php?id=117578&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117578" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117578" class="name">
  <strong class="user"><em>lulzury at Yahoo dot com</em></strong></a><a class="genanchor" href="#117578"> &para;</a><div class="date" title="2015-07-01 05:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117578">
<div class="phpcode"><code><span class="html">From washington dot edu css342:<br />On unix/linux, every line in a file has an End-Of-Line (EOL) character and the EOF character is after the last line. On windows, each line has an EOL characters except the last line. So unix/linux file's last line is <br />      stuff, EOL, EOF <br />whereas windows file's last line, if the cursor is on the line, is <br />      stuff, EOF <br /><br />So set up data files on windows to be the same as on unix/linux. This way, you will correctly determine eof under both unix/linux and windows. In general, you must exit all loops and all functions immediately when you are attempting to read an item that would be past the eof. <br /><br />Here is a typical set up that will work correctly. Suppose in a data file, there are multiple lines of data. In some function is the loop where you are reading and handling this data. This loop will look similar to the following.<br />     // infinite loop to read and handle a line of data<br />     for (;;) {<br />        $ln = fgets($fp);<br />        if (feof($fp)) break;<br /><br />        // read the rest of the line<br />        // do whatever with data<br />     }<br />If you dislike infinite loops, you can accomplish this same thing using a while loop by priming the loop and reading again at the end:<br />    $ln = fgets($fp);<br />     while (!feof($fp)) {<br />        // read the rest of the line<br />        // do whatever with data<br /><br />        $ln = fgets($fp);<br />     }</span></code></div>
  </div>
 </div>
  <div class="note" id="95425">  <div class="votes">
    <div id="Vu95425">
    <a href="/manual/vote-note.php?id=95425&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95425">
    <a href="/manual/vote-note.php?id=95425&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95425" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95425" class="name">
  <strong class="user"><em>jakicoll</em></strong></a><a class="genanchor" href="#95425"> &para;</a><div class="date" title="2010-01-02 04:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95425">
<div class="phpcode"><code><span class="html">Please note that feof() used with TCP-Connections, returns false as long as the connection is open.<br />It even returns false when there is no data available.<br /><br />BTW: Using feof() with HTTP for a single request, you should always make sure that you set the HTTP-Header "Connection" to "close" and _not_ to "keep-alive".</span></code></div>
  </div>
 </div>
  <div class="note" id="40717">  <div class="votes">
    <div id="Vu40717">
    <a href="/manual/vote-note.php?id=40717&amp;page=function.feof&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40717">
    <a href="/manual/vote-note.php?id=40717&amp;page=function.feof&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40717" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40717" class="name">
  <strong class="user"><em>Johannes</em></strong></a><a class="genanchor" href="#40717"> &para;</a><div class="date" title="2004-03-12 02:47"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40717">
<div class="phpcode"><code><span class="html">I found feof() to be a slow function when using a non-blocking connection.<br /><br />The function stream_get_meta_data() returns much quicker and has a return field 'eof'.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.feof&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.feof.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
