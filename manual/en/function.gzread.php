<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gzread - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gzread.php">
 <link rel="shorturl" href="https://www.php.net/gzread">
 <link rel="alternate" href="https://www.php.net/gzread" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gzputs.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gzrewind.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gzread.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gzread.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gzread.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gzread.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gzread.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gzread.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gzread.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gzread.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gzread.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gzread.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gzread.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary-safe gz-file read" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gzread - Manual" />
<meta name="twitter:description" content="Binary-safe gz-file read" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gzread - Manual" />
<meta itemprop="description" content="Binary-safe gz-file read" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary-safe gz-file read" />

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
        <a href="function.gzrewind.php">
          gzrewind &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gzputs.php">
          &laquo; gzputs        </a>
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
            <option value='en/function.gzread.php' selected="selected">English</option>
            <option value='de/function.gzread.php'>German</option>
            <option value='es/function.gzread.php'>Spanish</option>
            <option value='fr/function.gzread.php'>French</option>
            <option value='it/function.gzread.php'>Italian</option>
            <option value='ja/function.gzread.php'>Japanese</option>
            <option value='pt_BR/function.gzread.php'>Brazilian Portuguese</option>
            <option value='ru/function.gzread.php'>Russian</option>
            <option value='tr/function.gzread.php'>Turkish</option>
            <option value='uk/function.gzread.php'>Ukrainian</option>
            <option value='zh/function.gzread.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gzread" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gzread</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gzread</span> &mdash; <span class="dc-title">Binary-safe gz-file read</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gzread-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gzread</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>gzread()</strong></span> reads up to <code class="parameter">length</code> bytes
   from the given gz-file pointer. Reading stops when
   <code class="parameter">length</code> (uncompressed) bytes have been read
   or <abbr title="End Of File">EOF</abbr> is reached, whichever comes first.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.gzread-parameters">
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
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The number of bytes to read.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.gzread-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The data that have been read,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.gzread-changelog">
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
      <td>7.4.0</td>
      <td>
       This functions returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure now; previously <code class="literal">0</code> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.gzread-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-973">
    <p><strong>Example #1 <span class="function"><strong>gzread()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// get contents of a gz-file into a string<br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">"/usr/local/something.txt.gz"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$zd </span><span style="color: #007700">= </span><span style="color: #0000BB">gzopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$contents </span><span style="color: #007700">= </span><span style="color: #0000BB">gzread</span><span style="color: #007700">(</span><span style="color: #0000BB">$zd</span><span style="color: #007700">, </span><span style="color: #0000BB">10000</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">gzclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$zd</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.gzread-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gzwrite.php" class="function" rel="rdfs-seeAlso">gzwrite()</a> - Binary-safe gz-file write</span></li>
    <li><span class="function"><a href="function.gzopen.php" class="function" rel="rdfs-seeAlso">gzopen()</a> - Open gz-file</span></li>
    <li><span class="function"><a href="function.gzgets.php" class="function" rel="rdfs-seeAlso">gzgets()</a> - Get line from file pointer</span></li>
    <li><span class="function"><a href="function.gzgetss.php" class="function" rel="rdfs-seeAlso">gzgetss()</a> - Get line from gz-file pointer and strip HTML tags</span></li>
    <li><span class="function"><a href="function.gzfile.php" class="function" rel="rdfs-seeAlso">gzfile()</a> - Read entire gz-file into an array</span></li>
    <li><span class="function"><a href="function.gzpassthru.php" class="function" rel="rdfs-seeAlso">gzpassthru()</a> - Output all remaining data on a gz-file pointer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/gzread.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gzread%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gzread&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzread.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110078">  <div class="votes">
    <div id="Vu110078">
    <a href="/manual/vote-note.php?id=110078&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110078">
    <a href="/manual/vote-note.php?id=110078&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110078" title="90% like this...">
    8
    </div>
  </div>
  <a href="#110078" class="name">
  <strong class="user"><em>Nitrogen</em></strong></a><a class="genanchor" href="#110078"> &para;</a><div class="date" title="2012-09-17 03:02"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110078">
<div class="phpcode"><code><span class="html">Here is a function for returning the uncompressed filesize of a gzip file. The filesize is stored as a 32-bit integer in the end of the compressed file, that's how this function works. Additionally, this function checks to see if it's a real gzip compressed file before doing the work; if it isn't, then just like other gz- functions, it'll treat it just like a regular file and perform a normal filesize operation. Enjoy!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">gzfilesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {<br />  </span><span class="default">$gzfs </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />  if((</span><span class="default">$zp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">))!==</span><span class="default">FALSE</span><span class="keyword">) {<br />    if(@</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$zp</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) == </span><span class="string">"\x1F\x8B"</span><span class="keyword">) { </span><span class="comment">// this is a gzip'd file<br />      </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$zp</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">);<br />      if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$datum </span><span class="keyword">= @</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$zp</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">))==</span><span class="default">4</span><span class="keyword">)<br />        </span><span class="default">extract</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'Vgzfs'</span><span class="keyword">, </span><span class="default">$datum</span><span class="keyword">));<br />    }<br />    else </span><span class="comment">// not a gzip'd file, revert to regular filesize function<br />      </span><span class="default">$gzfs </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$zp</span><span class="keyword">);<br />  }<br />  return(</span><span class="default">$gzfs</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121440">  <div class="votes">
    <div id="Vu121440">
    <a href="/manual/vote-note.php?id=121440&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121440">
    <a href="/manual/vote-note.php?id=121440&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121440" title="100% like this...">
    5
    </div>
  </div>
  <a href="#121440" class="name">
  <strong class="user"><em>waldermort at gmail dot com</em></strong></a><a class="genanchor" href="#121440"> &para;</a><div class="date" title="2017-07-26 07:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121440">
<div class="phpcode"><code><span class="html">Be careful when reading data in a loop. gzread() behaves a little differently than bzread() or fread(), it does NOT return false when reading past the end of stream. It instead returns an empty string.<br /><br />So a loop like:<br />$handle = gzopen($file);<br />while (false !== $chunk = gzread($handle, $bytes)) {<br />   //...<br />}<br /><br />will loop indefinitely.</span></code></div>
  </div>
 </div>
  <div class="note" id="91375">  <div class="votes">
    <div id="Vu91375">
    <a href="/manual/vote-note.php?id=91375&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91375">
    <a href="/manual/vote-note.php?id=91375&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91375" title="66% like this...">
    1
    </div>
  </div>
  <a href="#91375" class="name">
  <strong class="user"><em>robinv12001 at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#91375"> &para;</a><div class="date" title="2009-06-09 02:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91375">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">//Using FTP Download a gzip file on current date from a remote server
<br />//The gzip files are extracted
<br /></span><span class="keyword">function </span><span class="default">parse_rawlist</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$curraw</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$struc </span><span class="keyword">= array();
<br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/[\s]+/"</span><span class="keyword">,</span><span class="default">$curraw</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">);
<br />
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'perms'</span><span class="keyword">]      =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'number'</span><span class="keyword">]     =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'owner'</span><span class="keyword">]     =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">]      =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">]         =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'month'</span><span class="keyword">]      =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'day'</span><span class="keyword">]        =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">]      =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];
<br />        </span><span class="default">$struc</span><span class="keyword">[</span><span class="string">'zfile_name'</span><span class="keyword">]      =     </span><span class="default">$current</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">];
<br />     </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]      =     </span><span class="default">$struc</span><span class="keyword">;
<br />    </span><span class="default">$i</span><span class="keyword">++;
<br />    }
<br />   return </span><span class="default">$structure</span><span class="keyword">;
<br />
<br />}
<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, </span><span class="string">'100M'</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Give FTP Information Here
<br />//------------------------------------------------------------
<br /></span><span class="default">$ftp_server     </span><span class="keyword">=     </span><span class="string">"example.com"</span><span class="keyword">;
<br /></span><span class="default">$ftp_user_name    </span><span class="keyword">=    </span><span class="string">"example"</span><span class="keyword">;
<br /></span><span class="default">$ftp_user_pass    </span><span class="keyword">=    </span><span class="string">"test"</span><span class="keyword">;
<br /></span><span class="comment">//------------------------------------------------------------
<br />//------------------------------------------------------------
<br /></span><span class="default">$local_path     </span><span class="keyword">=    </span><span class="string">'/opt/lampp/htdocs/sample/test.gz'</span><span class="keyword">;</span><span class="comment">//Local Path
<br /></span><span class="default">$server_path     </span><span class="keyword">=     </span><span class="string">'outgoing/folder/'</span><span class="keyword">;</span><span class="comment">//Remote Sever Path
<br />//------------------------------------------------------------
<br />
<br /></span><span class="default">$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">$ftp_server</span><span class="keyword">,</span><span class="default">21</span><span class="keyword">);
<br />if(</span><span class="default">$conn_id</span><span class="keyword">)
<br />{
<br />    echo </span><span class="string">"Successfully connected"</span><span class="keyword">;
<br />}
<br />  
<br /></span><span class="default">$login_result     </span><span class="keyword">=     </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$ftp_user_name</span><span class="keyword">, </span><span class="default">$ftp_user_pass</span><span class="keyword">);
<br /></span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$server_path</span><span class="keyword">);</span><span class="comment">//Change Current Working Directory
<br /></span><span class="default">$file_list     </span><span class="keyword">=    </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">);
<br /></span><span class="default">$zip_details    </span><span class="keyword">=    </span><span class="default">parse_rawlist</span><span class="keyword">(</span><span class="default">$file_list</span><span class="keyword">);
<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">); 
<br /></span><span class="default">$curr_date    </span><span class="keyword">=    </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">"F d Y"</span><span class="keyword">));
<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$zip_details</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)
<br />{
<br />    </span><span class="default">$fname        </span><span class="keyword">=    </span><span class="default">$zip_details</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'zfile_name'</span><span class="keyword">];    
<br />    </span><span class="default">$mod_date1    </span><span class="keyword">=    </span><span class="default">$zip_details</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'month'</span><span class="keyword">].</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$zip_details</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'day'</span><span class="keyword">].</span><span class="string">" "</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y"</span><span class="keyword">);    
<br />    </span><span class="default">$mod_date    </span><span class="keyword">=    </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$mod_date1</span><span class="keyword">);</span><span class="comment">//File Modified Date
<br />    </span><span class="keyword">if(</span><span class="default">$mod_date </span><span class="keyword">== </span><span class="default">$curr_date</span><span class="keyword">)</span><span class="comment">//If modified date equals current date
<br />    </span><span class="keyword">{
<br />        </span><span class="default">$local_file    </span><span class="keyword">=    </span><span class="default">$fname</span><span class="keyword">;
<br />        </span><span class="default">$server_file    </span><span class="keyword">=    </span><span class="default">$fname</span><span class="keyword">;
<br />        if (</span><span class="default">ftp_get</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">$server_file</span><span class="keyword">, </span><span class="default">FTP_BINARY</span><span class="keyword">)) 
<br />        {
<br />        
<br />            echo </span><span class="string">"&lt;br/&gt;Successfully written to </span><span class="default">$local_file</span><span class="string">\n"</span><span class="keyword">;
<br />        } 
<br />        else 
<br />        {
<br />            echo </span><span class="string">"&lt;br/&gt;There was a problem\n"</span><span class="keyword">;
<br />        }
<br />        if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$fzip_size    </span><span class="keyword">=    </span><span class="default">$zip_details</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'size'</span><span class="keyword">];    
<br />            </span><span class="default">$filename    </span><span class="keyword">=    </span><span class="default">$local_file</span><span class="keyword">;
<br />            </span><span class="default">$ext        </span><span class="keyword">=    </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">);    
<br />            </span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">PATHINFO_FILENAME</span><span class="keyword">);        
<br />            </span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="default">$file_name</span><span class="keyword">.</span><span class="string">".csv"</span><span class="keyword">;
<br />            </span><span class="default">$zd         </span><span class="keyword">=     </span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />            </span><span class="default">$contents     </span><span class="keyword">=     </span><span class="default">gzread</span><span class="keyword">(</span><span class="default">$zd</span><span class="keyword">, </span><span class="default">$fzip_size</span><span class="keyword">);
<br />            </span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="string">"uploads/"</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">;
<br />            </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">,</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">));
<br />            if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">))
<br />            {
<br />                </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">,</span><span class="default">0755</span><span class="keyword">);
<br />                </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">);
<br />            }
<br />            </span><span class="default">gzclose</span><span class="keyword">(</span><span class="default">$zd</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br /></span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80954">  <div class="votes">
    <div id="Vu80954">
    <a href="/manual/vote-note.php?id=80954&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80954">
    <a href="/manual/vote-note.php?id=80954&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80954" title="60% like this...">
    2
    </div>
  </div>
  <a href="#80954" class="name">
  <strong class="user"><em>utku</em></strong></a><a class="genanchor" href="#80954"> &para;</a><div class="date" title="2008-02-08 01:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80954">
<div class="phpcode"><code><span class="html">I don't think it would be wise to open a whole gzip file (it _is_ compressed for a reason, and likely to be a very big file) into a single string. You would most likely hit the php memory limits. Instead, if you need to process the file, put your gzread calls in a loop, and read incrementally by a setting $length to a constant value.</span></code></div>
  </div>
 </div>
  <div class="note" id="128614">  <div class="votes">
    <div id="Vu128614">
    <a href="/manual/vote-note.php?id=128614&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128614">
    <a href="/manual/vote-note.php?id=128614&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128614" title="no votes...">
    0
    </div>
  </div>
  <a href="#128614" class="name">
  <strong class="user"><em>imp</em></strong></a><a class="genanchor" href="#128614"> &para;</a><div class="date" title="2023-06-15 01:43"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128614">
<div class="phpcode"><code><span class="html">The maximum $length is 2147483647 bytes (2^32-1).<br /><br />Otherwise gzread() return false.</span></code></div>
  </div>
 </div>
  <div class="note" id="98938">  <div class="votes">
    <div id="Vu98938">
    <a href="/manual/vote-note.php?id=98938&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98938">
    <a href="/manual/vote-note.php?id=98938&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98938" title="no votes...">
    0
    </div>
  </div>
  <a href="#98938" class="name">
  <strong class="user"><em>denis at bitrix dot ru</em></strong></a><a class="genanchor" href="#98938"> &para;</a><div class="date" title="2010-07-16 09:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98938">
<div class="phpcode"><code><span class="html">Note that this functions' behavior differs from fread in case of EOF.<br /><br />When you read the last chunk (mean the last bytes from file), it is EOF just after gzread, but in case of fread you need to read once more to get EOF.<br /><br />Hope, I am clear :)</span></code></div>
  </div>
 </div>
  <div class="note" id="91462">  <div class="votes">
    <div id="Vu91462">
    <a href="/manual/vote-note.php?id=91462&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91462">
    <a href="/manual/vote-note.php?id=91462&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91462" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91462" class="name">
  <strong class="user"><em>robinv12001 at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#91462"> &para;</a><div class="date" title="2009-06-10 09:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91462">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Extracting the content of a gzip file in php and creating a new csv file using the content<br />//Create a folder uploads inside current folder<br /></span><span class="default">$local_file    </span><span class="keyword">=    </span><span class="string">'test.gz'</span><span class="keyword">;<br /><br /></span><span class="comment">//To Get the size of the uncompressed file<br /></span><span class="default">$FileRead </span><span class="keyword">= </span><span class="default">$local_file</span><span class="keyword">;<br /></span><span class="default">$FileOpen </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$FileRead</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br /></span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">);<br /></span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$GZFileSize </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">));<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">);<br /></span><span class="comment">//To Get the size of the zip file<br /><br /></span><span class="default">$fzip_size    </span><span class="keyword">=    </span><span class="default">$GZFileSize</span><span class="keyword">;<br />    <br /></span><span class="default">$filename    </span><span class="keyword">=    </span><span class="default">$local_file</span><span class="keyword">;<br /></span><span class="default">$ext        </span><span class="keyword">=    </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">);    <br /></span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">PATHINFO_FILENAME</span><span class="keyword">);        <br /></span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="default">$file_name</span><span class="keyword">.</span><span class="string">".csv"</span><span class="keyword">;<br /><br /></span><span class="default">$zd         </span><span class="keyword">=     </span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br /></span><span class="default">$contents     </span><span class="keyword">=     </span><span class="default">gzread</span><span class="keyword">(</span><span class="default">$zd</span><span class="keyword">, </span><span class="default">$fzip_size</span><span class="keyword">);<br /></span><span class="default">gzclose</span><span class="keyword">(</span><span class="default">$zd</span><span class="keyword">);<br /></span><span class="default">$file_name    </span><span class="keyword">=    </span><span class="string">"uploads/"</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">;<br /></span><span class="default">$fp    </span><span class="keyword">=    </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">, </span><span class="string">"wb"</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">); </span><span class="comment">//write contents of feed to cache file<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">))<br />{<br />    </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">,</span><span class="default">0755</span><span class="keyword">);<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73724">  <div class="votes">
    <div id="Vu73724">
    <a href="/manual/vote-note.php?id=73724&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73724">
    <a href="/manual/vote-note.php?id=73724&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73724" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73724" class="name">
  <strong class="user"><em>zaotong at yahoo dot com</em></strong></a><a class="genanchor" href="#73724"> &para;</a><div class="date" title="2007-03-07 03:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73724">
<div class="phpcode"><code><span class="html">As was shown to me in another forum there is a way to get the uncompressed size of the gz file by viewing the last 4 bytes of the gz file.<br /><br />Here is a piece of code that will do this<br /><span class="default">&lt;?php<br />$FileRead </span><span class="keyword">= </span><span class="string">'SomeText.txt'</span><span class="keyword">;<br /></span><span class="default">$FileOpen </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$FileRead</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">);<br />        </span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />        </span><span class="default">$GZFileSize </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">));<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$FileOpen</span><span class="keyword">);<br />        </span><span class="default">$HandleRead </span><span class="keyword">= </span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$FileRead</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />        </span><span class="default">$ContentRead </span><span class="keyword">= </span><span class="default">gzread</span><span class="keyword">(</span><span class="default">$HandleRead</span><span class="keyword">, </span><span class="default">$GZFileSize</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will read the last 4 bytes of the gz file and use it as the file int for the gzread.<br /><br />Thanks to stereofrog for helping me with this code.</span></code></div>
  </div>
 </div>
  <div class="note" id="100832">  <div class="votes">
    <div id="Vu100832">
    <a href="/manual/vote-note.php?id=100832&amp;page=function.gzread&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100832">
    <a href="/manual/vote-note.php?id=100832&amp;page=function.gzread&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100832" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#100832" class="name">
  <strong class="user"><em>calin_ip at yahoo dot com</em></strong></a><a class="genanchor" href="#100832"> &para;</a><div class="date" title="2010-11-10 03:55"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100832">
<div class="phpcode"><code><span class="html">Regarding finding out the lenght of the gz file.<br />For some reason the seek() function didn't worked, so, I've tried finding out the last 4 bytes using string functions.<br />That worked pretty well. Here is the code. <br /><span class="default">&lt;?php<br />$stringu</span><span class="keyword">=</span><span class="string">'my_beautiful_file.txt.gz'</span><span class="keyword">;<br /></span><span class="default">$gzip</span><span class="keyword">=</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$stringu</span><span class="keyword">);<br /></span><span class="default">$rest </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$gzip</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">); <br /></span><span class="default">$GZFileSize </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$rest</span><span class="keyword">));<br /><br /></span><span class="default">$FileRead </span><span class="keyword">= </span><span class="default">$stringu</span><span class="keyword">;<br /></span><span class="default">$HandleRead </span><span class="keyword">= </span><span class="default">gzopen</span><span class="keyword">(</span><span class="default">$FileRead</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br /></span><span class="default">$ContentRead </span><span class="keyword">= </span><span class="default">gzread</span><span class="keyword">(</span><span class="default">$HandleRead</span><span class="keyword">, </span><span class="default">$GZFileSize</span><span class="keyword">);<br /></span><span class="default">gzclose</span><span class="keyword">(</span><span class="default">$HandleRead</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gzread&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzread.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
