<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stream_get_contents - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stream-get-contents.php">
 <link rel="shorturl" href="https://www.php.net/stream-get-contents">
 <link rel="alternate" href="https://www.php.net/stream-get-contents" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-filter-remove.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-get-filters.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stream-get-contents.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stream-get-contents.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stream-get-contents.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stream-get-contents.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stream-get-contents.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stream-get-contents.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stream-get-contents.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stream-get-contents.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stream-get-contents.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stream-get-contents.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stream-get-contents.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reads remainder of a stream into a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stream_get_contents - Manual" />
<meta name="twitter:description" content="Reads remainder of a stream into a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stream_get_contents - Manual" />
<meta itemprop="description" content="Reads remainder of a stream into a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reads remainder of a stream into a string" />

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
        <a href="function.stream-get-filters.php">
          stream_get_filters &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-filter-remove.php">
          &laquo; stream_filter_remove        </a>
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
            <option value='en/function.stream-get-contents.php' selected="selected">English</option>
            <option value='de/function.stream-get-contents.php'>German</option>
            <option value='es/function.stream-get-contents.php'>Spanish</option>
            <option value='fr/function.stream-get-contents.php'>French</option>
            <option value='it/function.stream-get-contents.php'>Italian</option>
            <option value='ja/function.stream-get-contents.php'>Japanese</option>
            <option value='pt_BR/function.stream-get-contents.php'>Brazilian Portuguese</option>
            <option value='ru/function.stream-get-contents.php'>Russian</option>
            <option value='tr/function.stream-get-contents.php'>Turkish</option>
            <option value='uk/function.stream-get-contents.php'>Ukrainian</option>
            <option value='zh/function.stream-get-contents.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stream-get-contents" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stream_get_contents</h1> 
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stream_get_contents</span> &mdash; <span class="dc-title">Reads remainder of a stream into a string</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.stream-get-contents-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stream_get_contents</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = -1</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment"> 
   Identical to <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span>, except that
   <span class="function"><strong>stream_get_contents()</strong></span> operates on an already open
   stream resource and returns the remaining contents in a string, up to
   <code class="parameter">length</code> bytes and starting at the specified
   <code class="parameter">offset</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.stream-get-contents-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code> (<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>)</dt>
     <dd>
      <p class="para">
       A stream resource (e.g. returned from <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>)
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</dt>
     <dd>
      <p class="para">
       The maximum bytes to read. Defaults to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (read all the remaining
       buffer).
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)</dt>
     <dd>
      <p class="para">
       Seek to the specified offset before reading. If this number is negative,
       no seeking will occur and reading will start from the current position.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stream-get-contents-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stream-get-contents-changelog">
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
       <code class="parameter">length</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stream-get-contents-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4055">
    <p><strong>Example #1 <span class="function"><strong>stream_get_contents()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// print all the page starting at the offset 10<br />    </span><span style="color: #007700">echo </span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">);<br />}<br /><br /><br />if (</span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.net'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// print the first 5 bytes<br />    </span><span style="color: #007700">echo </span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.stream-get-contents-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When specifying a <code class="parameter">length</code> value other than <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, this function will
    immediately allocate an internal buffer of that size even if the
    actual contents are significantly shorter.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stream-get-contents-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
    <li><span class="function"><a href="function.fread.php" class="function" rel="rdfs-seeAlso">fread()</a> - Binary-safe file read</span></li>
    <li><span class="function"><a href="function.fpassthru.php" class="function" rel="rdfs-seeAlso">fpassthru()</a> - Output all remaining data on a file pointer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/functions/stream-get-contents.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stream-get-contents%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stream-get-contents&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-get-contents.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106905">  <div class="votes">
    <div id="Vu106905">
    <a href="/manual/vote-note.php?id=106905&amp;page=function.stream-get-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106905">
    <a href="/manual/vote-note.php?id=106905&amp;page=function.stream-get-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106905" title="63% like this...">
    10
    </div>
  </div>
  <a href="#106905" class="name">
  <strong class="user"><em>clarck dot smith at gmail dot com</em></strong></a><a class="genanchor" href="#106905"> &para;</a><div class="date" title="2011-12-17 07:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106905">
<div class="phpcode"><code><span class="html">In that case when stream_get_contents/fread/fgets or other stream reading functions block indefinitely your script because they don't reached the limit of bytes to read use the socket_get_meta_data function to figure out the number of the bytes to read. It returns an array that contains a key named 'unread_bytes' and then pass that number to your favourite stream reading functions second parameter to read from the stream.<br /><br />Maybe a good workaround to use the stream_select function, and set the socket to non-blocking mode with the use of stream_set_blocking($stream, 0). In this case the socket reading functions work properly.<br /><br />Cheers, Ervin</span></code></div>
  </div>
 </div>
  <div class="note" id="101974">  <div class="votes">
    <div id="Vu101974">
    <a href="/manual/vote-note.php?id=101974&amp;page=function.stream-get-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101974">
    <a href="/manual/vote-note.php?id=101974&amp;page=function.stream-get-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101974" title="58% like this...">
    3
    </div>
  </div>
  <a href="#101974" class="name">
  <strong class="user"><em>m rahman</em></strong></a><a class="genanchor" href="#101974"> &para;</a><div class="date" title="2011-01-20 01:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101974">
<div class="phpcode"><code><span class="html">When omitting the parameter $maxlength, any received bytes are stacked up until the underlying stream is not readable anymore, the the function returns that stack in one piece.</span></code></div>
  </div>
 </div>
  <div class="note" id="130329">  <div class="votes">
    <div id="Vu130329">
    <a href="/manual/vote-note.php?id=130329&amp;page=function.stream-get-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130329">
    <a href="/manual/vote-note.php?id=130329&amp;page=function.stream-get-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130329" title="no votes...">
    0
    </div>
  </div>
  <a href="#130329" class="name">
  <strong class="user"><em>jure dot sah at t-2 dot com</em></strong></a><a class="genanchor" href="#130329"> &para;</a><div class="date" title="2025-05-30 04:58"><strong>3 months ago</strong></div>
  <div class="text" id="Hcom130329">
<div class="phpcode"><code><span class="html">In my case this is acting a little unpredictable, which may occur in your case as well depending on how the streams are set up.<br /><br />This can be resolved by using the offset 0 (rather than the default -1), to ensure your streams are always read from the start, rather than the current position.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stream-get-contents&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-get-contents.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
