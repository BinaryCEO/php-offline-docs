<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gzwrite - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gzwrite.php">
 <link rel="shorturl" href="https://www.php.net/gzwrite">
 <link rel="alternate" href="https://www.php.net/gzwrite" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gzuncompress.php">
 <link rel="next" href="https://www.php.net/manual/en/function.inflate-add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gzwrite.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gzwrite.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gzwrite.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gzwrite.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gzwrite.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gzwrite.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gzwrite.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gzwrite.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gzwrite.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gzwrite.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gzwrite.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary-safe gz-file write" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gzwrite - Manual" />
<meta name="twitter:description" content="Binary-safe gz-file write" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gzwrite - Manual" />
<meta itemprop="description" content="Binary-safe gz-file write" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary-safe gz-file write" />

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
        <a href="function.inflate-add.php">
          inflate_add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gzuncompress.php">
          &laquo; gzuncompress        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zlib.php'>Zlib</a></li>      <li><a href='ref.zlib.php'>Zlib Functions</a></li>      </ul>
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
            <option value='en/function.gzwrite.php' selected="selected">English</option>
            <option value='de/function.gzwrite.php'>German</option>
            <option value='es/function.gzwrite.php'>Spanish</option>
            <option value='fr/function.gzwrite.php'>French</option>
            <option value='it/function.gzwrite.php'>Italian</option>
            <option value='ja/function.gzwrite.php'>Japanese</option>
            <option value='pt_BR/function.gzwrite.php'>Brazilian Portuguese</option>
            <option value='ru/function.gzwrite.php'>Russian</option>
            <option value='tr/function.gzwrite.php'>Turkish</option>
            <option value='uk/function.gzwrite.php'>Ukrainian</option>
            <option value='zh/function.gzwrite.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gzwrite" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gzwrite</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gzwrite</span> &mdash; <span class="dc-title">Binary-safe gz-file write</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gzwrite-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gzwrite</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>gzwrite()</strong></span> writes the contents of
   <code class="parameter">data</code> to the given gz-file.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.gzwrite-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">
       The gz-file pointer. It must be valid, and must point to a file
       successfully opened by <span class="function"><a href="function.gzopen.php" class="function">gzopen()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The string to write.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The number of uncompressed bytes to write. If supplied, writing will 
       stop after <code class="parameter">length</code> (uncompressed) bytes have been
       written or the end of <code class="parameter">data</code> is reached,
       whichever comes first.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.gzwrite-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para"> 
   Returns the number of (uncompressed) bytes written to the given gz-file 
   stream,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.gzwrite-changelog">
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
       <code class="parameter">length</code> is nullable now; previously, the default was
       <code class="literal">0</code>.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       This functions returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure now; previously <code class="literal">0</code> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.gzwrite-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-976">
    <p><strong>Example #1 <span class="function"><strong>gzwrite()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'Some information to compress'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$gz </span><span style="color: #007700">= </span><span style="color: #0000BB">gzopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'somefile.gz'</span><span style="color: #007700">,</span><span style="color: #DD0000">'w9'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">gzwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$gz</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">gzclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$gz</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.gzwrite-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gzread.php" class="function" rel="rdfs-seeAlso">gzread()</a> - Binary-safe gz-file read</span></li>
    <li><span class="function"><a href="function.gzopen.php" class="function" rel="rdfs-seeAlso">gzopen()</a> - Open gz-file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/gzwrite.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gzwrite%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gzwrite&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzwrite.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88746">  <div class="votes">
    <div id="Vu88746">
    <a href="/manual/vote-note.php?id=88746&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88746">
    <a href="/manual/vote-note.php?id=88746&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88746" title="71% like this...">
    3
    </div>
  </div>
  <a href="#88746" class="name">
  <strong class="user"><em>calmarius at nospam dot atw dot hu</em></strong></a><a class="genanchor" href="#88746"> &para;</a><div class="date" title="2009-02-05 08:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88746">
<div class="phpcode"><code><span class="html">gz compression is often used with tar archives. Building tar archives is quite easy. Here is a code snipplet which can be used for building tar archives before compressing them to tar.gz.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\<br />// Adds file header to the tar file, it is used before adding file content.<br />// f: file resource (provided by eg. fopen)<br />// phisfn: path to file<br />// archfn: path to file in archive, directory names must be followed by '/'<br />//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\<br /></span><span class="keyword">function </span><span class="default">TarAddHeader</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$phisfn</span><span class="keyword">,</span><span class="default">$archfn</span><span class="keyword">)<br />{<br />    </span><span class="default">$info</span><span class="keyword">=</span><span class="default">stat</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">);<br />    </span><span class="default">$ouid</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%6s "</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]));<br />    </span><span class="default">$ogid</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%6s "</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]));<br />    </span><span class="default">$omode</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%6s "</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">)));<br />    </span><span class="default">$omtime</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%11s"</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">)));<br />    if (@</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">))<br />    {<br />         </span><span class="default">$type</span><span class="keyword">=</span><span class="string">"5"</span><span class="keyword">;<br />         </span><span class="default">$osize</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%11s "</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />    }<br />    else<br />    {<br />         </span><span class="default">$type</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />         </span><span class="default">$osize</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%11s "</span><span class="keyword">, </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">)));<br />         </span><span class="default">clearstatcache</span><span class="keyword">();<br />    }<br />    </span><span class="default">$dmajor </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$dminor </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$gname </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$linkname </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$magic </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$uname </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$version </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$chunkbeforeCS</span><span class="keyword">=</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"a100a8a8a8a12A12"</span><span class="keyword">,</span><span class="default">$archfn</span><span class="keyword">, </span><span class="default">$omode</span><span class="keyword">, </span><span class="default">$ouid</span><span class="keyword">, </span><span class="default">$ogid</span><span class="keyword">, </span><span class="default">$osize</span><span class="keyword">, </span><span class="default">$omtime</span><span class="keyword">);<br />    </span><span class="default">$chunkafterCS</span><span class="keyword">=</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"a1a100a6a2a32a32a8a8a155a12"</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">, </span><span class="default">$linkname</span><span class="keyword">, </span><span class="default">$magic</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$uname</span><span class="keyword">, </span><span class="default">$gname</span><span class="keyword">, </span><span class="default">$dmajor</span><span class="keyword">, </span><span class="default">$dminor </span><span class="keyword">,</span><span class="default">$prefix</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br /><br />    </span><span class="default">$checksum </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">148</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$checksum</span><span class="keyword">+=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$chunkbeforeCS</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">148</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">156</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$checksum</span><span class="keyword">+=</span><span class="default">ord</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">);<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">156</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">512</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++, </span><span class="default">$j</span><span class="keyword">++)    </span><span class="default">$checksum</span><span class="keyword">+=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$chunkafterCS</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br /><br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$chunkbeforeCS</span><span class="keyword">,</span><span class="default">148</span><span class="keyword">);<br />    </span><span class="default">$checksum</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%6s "</span><span class="keyword">,</span><span class="default">decoct</span><span class="keyword">(</span><span class="default">$checksum</span><span class="keyword">));<br />    </span><span class="default">$bdchecksum</span><span class="keyword">=</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"a8"</span><span class="keyword">, </span><span class="default">$checksum</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$bdchecksum</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$chunkafterCS</span><span class="keyword">,</span><span class="default">356</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="comment">//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/<br />// Writes file content to the tar file must be called after a TarAddHeader<br />// f:file resource provided by fopen<br />// phisfn: path to file<br />//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/<br /></span><span class="keyword">function </span><span class="default">TarWriteContents</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$phisfn</span><span class="keyword">)<br />{<br />    if (@</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">))<br />    {<br />        return;<br />    }<br />    else<br />    {<br />        </span><span class="default">$size</span><span class="keyword">=</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">);<br />        </span><span class="default">$padding</span><span class="keyword">=</span><span class="default">$size </span><span class="keyword">% </span><span class="default">512 </span><span class="keyword">? </span><span class="default">512</span><span class="keyword">-</span><span class="default">$size</span><span class="keyword">%</span><span class="default">512 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$f2</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$phisfn</span><span class="keyword">,</span><span class="string">"rb"</span><span class="keyword">);<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$f2</span><span class="keyword">)) </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f2</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">));<br />        </span><span class="default">$pstr</span><span class="keyword">=</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"a%d"</span><span class="keyword">,</span><span class="default">$padding</span><span class="keyword">);<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">pack</span><span class="keyword">(</span><span class="default">$pstr</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">));<br />    }<br />}<br /></span><span class="comment">//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/<br />// Adds 1024 byte footer at the end of the tar file<br />// f: file resource<br />//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/<br /></span><span class="keyword">function </span><span class="default">TarAddFooter</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">)<br />{<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'a1024'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="34955">  <div class="votes">
    <div id="Vu34955">
    <a href="/manual/vote-note.php?id=34955&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34955">
    <a href="/manual/vote-note.php?id=34955&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34955" title="60% like this...">
    2
    </div>
  </div>
  <a href="#34955" class="name">
  <strong class="user"><em>Kioob</em></strong></a><a class="genanchor" href="#34955"> &para;</a><div class="date" title="2003-08-13 04:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34955">
<div class="phpcode"><code><span class="html">This is a short example of use gzwrite function. 
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">gzcompressfile</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$level</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">){
<br />    </span><span class="default">$dest</span><span class="keyword">=</span><span class="default">$source</span><span class="keyword">.</span><span class="string">'.gz'</span><span class="keyword">;
<br />    </span><span class="default">$mode</span><span class="keyword">=</span><span class="string">'wb'</span><span class="keyword">.</span><span class="default">$level</span><span class="keyword">;
<br />    </span><span class="default">$error</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />    if(</span><span class="default">$fp_out</span><span class="keyword">=</span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">)){
<br />        if(</span><span class="default">$fp_in</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="string">'rb'</span><span class="keyword">)){
<br />            while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp_in</span><span class="keyword">))
<br />                </span><span class="default">gzwrite</span><span class="keyword">(</span><span class="default">$fp_out</span><span class="keyword">,</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp_in</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">*</span><span class="default">512</span><span class="keyword">));
<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp_in</span><span class="keyword">);
<br />            }
<br />          else </span><span class="default">$error</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />        </span><span class="default">gzclose</span><span class="keyword">(</span><span class="default">$fp_out</span><span class="keyword">);
<br />        }
<br />      else </span><span class="default">$error</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />    if(</span><span class="default">$error</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />      else return </span><span class="default">$dest</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />the function gzcompressfile() compress a file 'data.csv' to 'data.csv.gz'. the function return false if error, and the new file name if it's ok.</span></code></div>
  </div>
 </div>
  <div class="note" id="100799">  <div class="votes">
    <div id="Vu100799">
    <a href="/manual/vote-note.php?id=100799&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100799">
    <a href="/manual/vote-note.php?id=100799&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100799" title="no votes...">
    0
    </div>
  </div>
  <a href="#100799" class="name">
  <strong class="user"><em>Take Heed</em></strong></a><a class="genanchor" href="#100799"> &para;</a><div class="date" title="2010-11-07 12:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100799">
<div class="phpcode"><code><span class="html">Read the description of gzwrite() very carefully.  If the 'length' option is not specified, then the input data will have slashes stripped on systems where magic quotes are enabled.  This is important information to know when compressing files.
<br />
<br /><span class="default">&lt;?php
<br />$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">5000</span><span class="keyword">);
<br /></span><span class="default">gzwrite</span><span class="keyword">(</span><span class="default">$fp2</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Is the correct way to avoid issues with magic quotes.</span></code></div>
  </div>
 </div>
  <div class="note" id="82108">  <div class="votes">
    <div id="Vu82108">
    <a href="/manual/vote-note.php?id=82108&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82108">
    <a href="/manual/vote-note.php?id=82108&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82108" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82108" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#82108"> &para;</a><div class="date" title="2008-03-27 12:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82108">
<div class="phpcode"><code><span class="html">katzlbtjunk's method is certainly shorter, but it is unusable for anything except small files.  It would try to load the whole file into memory, then create an entire compressed copy, and only then write it to disk.  The other method given below will not exhaust memory like that.</span></code></div>
  </div>
 </div>
  <div class="note" id="88682">  <div class="votes">
    <div id="Vu88682">
    <a href="/manual/vote-note.php?id=88682&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88682">
    <a href="/manual/vote-note.php?id=88682&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88682" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#88682" class="name">
  <strong class="user"><em>repository at lamaresh dot net</em></strong></a><a class="genanchor" href="#88682"> &para;</a><div class="date" title="2009-02-03 10:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88682">
<div class="phpcode"><code><span class="html">This function add a line to a .gz compressed file
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">AppendLineGz</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">) {
<br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />        </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">gzfile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />        </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">)] = </span><span class="string">"</span><span class="default">$string</span><span class="string">\r\n"</span><span class="keyword">;
<br />        </span><span class="default">$input</span><span class="keyword">=</span><span class="default">implode</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);
<br />    } else {</span><span class="default">$input</span><span class="keyword">=</span><span class="string">"</span><span class="default">$string</span><span class="string">\r\n"</span><span class="keyword">;}
<br />    </span><span class="default">$gz </span><span class="keyword">= </span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="string">'w9'</span><span class="keyword">);
<br />    </span><span class="default">gzwrite</span><span class="keyword">(</span><span class="default">$gz</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);
<br />    </span><span class="default">gzclose</span><span class="keyword">(</span><span class="default">$gz</span><span class="keyword">);    
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81314">  <div class="votes">
    <div id="Vu81314">
    <a href="/manual/vote-note.php?id=81314&amp;page=function.gzwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81314">
    <a href="/manual/vote-note.php?id=81314&amp;page=function.gzwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81314" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#81314" class="name">
  <strong class="user"><em>katzlbtjunk at hotmail dot com</em></strong></a><a class="genanchor" href="#81314"> &para;</a><div class="date" title="2008-02-21 11:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81314">
<div class="phpcode"><code><span class="html">How about this instead:<br />$s = file_get_contents('file.tar'); <br />file_put_contents('file.tar.gz',gzencode($s,9));</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gzwrite&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzwrite.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.zlib.php">Zlib Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.deflate-add.php" title="deflate_&#8203;add">deflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.deflate-init.php" title="deflate_&#8203;init">deflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gzclose.php" title="gzclose">gzclose</a>
                        </li>
                                                <li class="">
                            <a href="function.gzcompress.php" title="gzcompress">gzcompress</a>
                        </li>
                                                <li class="">
                            <a href="function.gzdecode.php" title="gzdecode">gzdecode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzdeflate.php" title="gzdeflate">gzdeflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzencode.php" title="gzencode">gzencode</a>
                        </li>
                                                <li class="">
                            <a href="function.gzeof.php" title="gzeof">gzeof</a>
                        </li>
                                                <li class="">
                            <a href="function.gzfile.php" title="gzfile">gzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetc.php" title="gzgetc">gzgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgets.php" title="gzgets">gzgets</a>
                        </li>
                                                <li class="">
                            <a href="function.gzgetss.php" title="gzgetss">gzgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.gzinflate.php" title="gzinflate">gzinflate</a>
                        </li>
                                                <li class="">
                            <a href="function.gzopen.php" title="gzopen">gzopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gzpassthru.php" title="gzpassthru">gzpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.gzputs.php" title="gzputs">gzputs</a>
                        </li>
                                                <li class="">
                            <a href="function.gzread.php" title="gzread">gzread</a>
                        </li>
                                                <li class="">
                            <a href="function.gzrewind.php" title="gzrewind">gzrewind</a>
                        </li>
                                                <li class="">
                            <a href="function.gzseek.php" title="gzseek">gzseek</a>
                        </li>
                                                <li class="">
                            <a href="function.gztell.php" title="gztell">gztell</a>
                        </li>
                                                <li class="">
                            <a href="function.gzuncompress.php" title="gzuncompress">gzuncompress</a>
                        </li>
                                                <li class="current">
                            <a href="function.gzwrite.php" title="gzwrite">gzwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-add.php" title="inflate_&#8203;add">inflate_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-read-len.php" title="inflate_&#8203;get_&#8203;read_&#8203;len">inflate_&#8203;get_&#8203;read_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-get-status.php" title="inflate_&#8203;get_&#8203;status">inflate_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.inflate-init.php" title="inflate_&#8203;init">inflate_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-gzhandler.php" title="ob_&#8203;gzhandler">ob_&#8203;gzhandler</a>
                        </li>
                                                <li class="">
                            <a href="function.readgzfile.php" title="readgzfile">readgzfile</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-decode.php" title="zlib_&#8203;decode">zlib_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-encode.php" title="zlib_&#8203;encode">zlib_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.zlib-get-coding-type.php" title="zlib_&#8203;get_&#8203;coding_&#8203;type">zlib_&#8203;get_&#8203;coding_&#8203;type</a>
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
