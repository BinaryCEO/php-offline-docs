<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gzopen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gzopen.php">
 <link rel="shorturl" href="https://www.php.net/gzopen">
 <link rel="alternate" href="https://www.php.net/gzopen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gzinflate.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gzpassthru.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gzopen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gzopen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gzopen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gzopen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gzopen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gzopen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gzopen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gzopen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gzopen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gzopen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gzopen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open gz-file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gzopen - Manual" />
<meta name="twitter:description" content="Open gz-file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gzopen - Manual" />
<meta itemprop="description" content="Open gz-file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open gz-file" />

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
        <a href="function.gzpassthru.php">
          gzpassthru &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gzinflate.php">
          &laquo; gzinflate        </a>
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
            <option value='en/function.gzopen.php' selected="selected">English</option>
            <option value='de/function.gzopen.php'>German</option>
            <option value='es/function.gzopen.php'>Spanish</option>
            <option value='fr/function.gzopen.php'>French</option>
            <option value='it/function.gzopen.php'>Italian</option>
            <option value='ja/function.gzopen.php'>Japanese</option>
            <option value='pt_BR/function.gzopen.php'>Brazilian Portuguese</option>
            <option value='ru/function.gzopen.php'>Russian</option>
            <option value='tr/function.gzopen.php'>Turkish</option>
            <option value='uk/function.gzopen.php'>Ukrainian</option>
            <option value='zh/function.gzopen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gzopen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gzopen</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gzopen</span> &mdash; <span class="dc-title">Open gz-file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gzopen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gzopen</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$use_include_path</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Opens a gzip (.gz) file for reading or writing. 
  </p>
  <p class="para">
   <span class="function"><strong>gzopen()</strong></span> can be used to read a file which is
   not in gzip format; in this case <span class="function"><a href="function.gzread.php" class="function">gzread()</a></span> will
   directly read from the file without decompression.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.gzopen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The file name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       As in <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> (<code class="literal">rb</code> or 
       <code class="literal">wb</code>) but can also include a compression level 
       (<code class="literal">wb9</code>) or a strategy: <code class="literal">f</code> for
       filtered data as in <code class="literal">wb6f</code>, <code class="literal">h</code> for
       <code class="literal">Huffman only compression</code> as in <code class="literal">wb1h</code>.
       (See the description of <code class="literal">deflateInit2</code>
       in <var class="filename">zlib.h</var> for 
       more information about the strategy parameter.)
      </p>
     </dd>
    
    
     <dt><code class="parameter">use_include_path</code></dt>
     <dd>
      <p class="para">
       You can set this optional parameter to <code class="literal">1</code>, if you
       want to search for the file in the <a href="ini.core.php#ini.include-path" class="link">include_path</a> too.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.gzopen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a file pointer to the file opened, after that, everything you read
   from this file descriptor will be transparently decompressed and what you 
   write gets compressed.
  </p>
  <p class="para">
   If the open fails, the function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.gzopen-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-971">
    <p><strong>Example #1 <span class="function"><strong>gzopen()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">gzopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp/file.gz"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.gzopen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gzclose.php" class="function" rel="rdfs-seeAlso">gzclose()</a> - Close an open gz-file pointer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/gzopen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gzopen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gzopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzopen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105676">  <div class="votes">
    <div id="Vu105676">
    <a href="/manual/vote-note.php?id=105676&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105676">
    <a href="/manual/vote-note.php?id=105676&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105676" title="78% like this...">
    19
    </div>
  </div>
  <a href="#105676" class="name">
  <strong class="user"><em>David Gero dave at havidave dot com</em></strong></a><a class="genanchor" href="#105676"> &para;</a><div class="date" title="2011-09-06 02:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105676">
<div class="phpcode"><code><span class="html">gzopen("php://output","wb") doesn't work on a web server, nor does fopen("compress.zlib://php://output","wb").<br /><br />Here is a snippet to gzip a file and output it on the fly, without using a temporary file, without reading the file into memory, and without reading the file more than once:<br /><br /><span class="default">&lt;?php<br />$fin </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />if (</span><span class="default">$fin </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="default">$fout </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://output"</span><span class="keyword">, </span><span class="string">"wb"</span><span class="keyword">);<br />    if (</span><span class="default">$fout </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="comment">// write gzip header<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="string">"\x1F\x8B\x08\x08"</span><span class="keyword">.</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)).</span><span class="string">"\0\xFF"</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />    </span><span class="comment">// write the original file name<br />    </span><span class="default">$oname </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="default">$oname</span><span class="keyword">.</span><span class="string">"\0"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$oname</span><span class="keyword">));<br />    </span><span class="comment">// add the deflate filter using default compression level<br />    </span><span class="default">$fltr </span><span class="keyword">= </span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="string">"zlib.deflate"</span><span class="keyword">, </span><span class="default">STREAM_FILTER_WRITE</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="comment">// set up the CRC32 hashing context<br />    </span><span class="default">$hctx </span><span class="keyword">= </span><span class="default">hash_init</span><span class="keyword">(</span><span class="string">"crc32b"</span><span class="keyword">);<br />    </span><span class="comment">// turn off the time limit<br />    </span><span class="keyword">if (!</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"safe_mode"</span><span class="keyword">)) </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">$con </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />    </span><span class="default">$fsize </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while ((</span><span class="default">$con </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) &amp;&amp; !</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fin</span><span class="keyword">)) {<br />        </span><span class="comment">// deflate works best with buffers &gt;32K<br />        </span><span class="default">$con </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fin</span><span class="keyword">, </span><span class="default">64 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">);<br />        if (</span><span class="default">$con </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">) {<br />        </span><span class="default">hash_update</span><span class="keyword">(</span><span class="default">$hctx</span><span class="keyword">, </span><span class="default">$con</span><span class="keyword">);<br />        </span><span class="default">$clen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">);<br />        </span><span class="default">$fsize </span><span class="keyword">+= </span><span class="default">$clen</span><span class="keyword">;<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="default">$con</span><span class="keyword">, </span><span class="default">$clen</span><span class="keyword">);<br />        }<br />    }<br />    </span><span class="comment">// remove the deflate filter<br />    </span><span class="default">stream_filter_remove</span><span class="keyword">(</span><span class="default">$fltr</span><span class="keyword">);<br />    </span><span class="comment">// write the CRC32 value<br />    // hash_final is a string, not an integer<br />    </span><span class="default">$crc </span><span class="keyword">= </span><span class="default">hash_final</span><span class="keyword">(</span><span class="default">$hctx</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />    </span><span class="comment">// need to reverse the hash_final string so it's little endian<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="default">$crc</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">4</span><span class="keyword">);<br />    </span><span class="comment">// write the original uncompressed file size<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">), </span><span class="default">4</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fout</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fin</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82732">  <div class="votes">
    <div id="Vu82732">
    <a href="/manual/vote-note.php?id=82732&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82732">
    <a href="/manual/vote-note.php?id=82732&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82732" title="77% like this...">
    5
    </div>
  </div>
  <a href="#82732" class="name">
  <strong class="user"><em>katzlbtjunk at hotmail dot com</em></strong></a><a class="genanchor" href="#82732"> &para;</a><div class="date" title="2008-04-23 12:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82732">
<div class="phpcode"><code><span class="html">WARNING gzopen and gzread have a major disadvantage. They makes NO checksum and NO length verification of the gzipped data and discard this valuable information. This should be documented here.</span></code></div>
  </div>
 </div>
  <div class="note" id="117973">  <div class="votes">
    <div id="Vu117973">
    <a href="/manual/vote-note.php?id=117973&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117973">
    <a href="/manual/vote-note.php?id=117973&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117973" title="71% like this...">
    3
    </div>
  </div>
  <a href="#117973" class="name">
  <strong class="user"><em>dj8 at joesvolcano dot net</em></strong></a><a class="genanchor" href="#117973"> &para;</a><div class="date" title="2015-09-11 02:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117973">
<div class="phpcode"><code><span class="html">An OO-version of David Gero's excellent GZ File format note also on this page:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// David Gero's example: read a file and output GZ<br /></span><span class="default">$gz_to_out </span><span class="keyword">= new </span><span class="default">GZTempFile</span><span class="keyword">(</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">), </span><span class="string">"php://output"</span><span class="keyword">);<br /></span><span class="default">$fin </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />while(</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fin</span><span class="keyword">, </span><span class="default">64 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">)) {<br />    </span><span class="default">$gz_to_out</span><span class="keyword">-&gt;</span><span class="default">fwrite</span><span class="keyword">();<br />}<br /></span><span class="default">close</span><span class="keyword">(</span><span class="default">$fin</span><span class="keyword">);<br /></span><span class="default">$gz_to_out</span><span class="keyword">-&gt;</span><span class="default">flushBuffer</span><span class="keyword">();<br /><br /></span><span class="comment">// Example of building your GZ file content on the fly (temp filehandle)<br /></span><span class="default">$gz_custom </span><span class="keyword">= new </span><span class="default">GZTempFile</span><span class="keyword">();<br />foreach ( ... ) {<br />    </span><span class="comment">//  Some work<br />    </span><span class="default">$str </span><span class="keyword">= ...<br /><br />    </span><span class="default">$gz_custom</span><span class="keyword">-&gt;</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />}<br /></span><span class="comment">//  Store it in a database<br /></span><span class="default">$m </span><span class="keyword">= new </span><span class="default">MongoClient</span><span class="keyword">();<br /></span><span class="default">$gridfs </span><span class="keyword">= </span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">selectDB</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">)-&gt;</span><span class="default">getGridFS</span><span class="keyword">();<br /></span><span class="default">$id </span><span class="keyword">= </span><span class="default">$gridfs</span><span class="keyword">-&gt;</span><span class="default">storeFile</span><span class="keyword">(</span><span class="default">$gz_custom</span><span class="keyword">-&gt;</span><span class="default">getReadFilehandle</span><span class="keyword">(), array(</span><span class="string">'contentType' </span><span class="keyword">=&gt; </span><span class="string">'application/x-gzip'</span><span class="keyword">));<br /><br />class </span><span class="default">GZTempFile </span><span class="keyword">{<br />    private </span><span class="default">$__fh </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    public </span><span class="default">$uncompressed_bytes </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public </span><span class="default">$filesize </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    private </span><span class="default">$gz_filter </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    private </span><span class="default">$file_hash </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    private </span><span class="default">$final_read_fh </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    private </span><span class="default">$__buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    private </span><span class="default">$__buffer_len </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$filename </span><span class="keyword">= </span><span class="string">'data'</span><span class="keyword">, </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh </span><span class="keyword">= </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">) ? </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">,</span><span class="string">'w+'</span><span class="keyword">) : </span><span class="default">$fh</span><span class="keyword">;<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="string">"\x1F\x8B\x08\x08"</span><span class="keyword">.</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">()).</span><span class="string">"\0\xFF"</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">// GZ file header<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)) .</span><span class="string">"\0"</span><span class="keyword">);  </span><span class="comment">// GZ filename = data, needed???<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gz_filter </span><span class="keyword">= </span><span class="default">stream_filter_append</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="string">"zlib.deflate"</span><span class="keyword">, </span><span class="default">STREAM_FILTER_WRITE</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">uncompressed_bytes </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_hash </span><span class="keyword">= </span><span class="default">hash_init</span><span class="keyword">(</span><span class="string">"crc32b"</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$length </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">final_read_fh </span><span class="keyword">) { throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"GZTempFile has already been finalized and closed.  No more writing"</span><span class="keyword">); }<br />        </span><span class="default">hash_update</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_hash</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">uncompressed_bytes </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer_len </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">;<br />        if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer_len </span><span class="keyword">&gt;= </span><span class="default">64 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">) { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">flushBuffer</span><span class="keyword">(); }<br />    }<br />    public function </span><span class="default">flushBuffer</span><span class="keyword">() {<br />        if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer_len </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer_len </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getReadFilehandle</span><span class="keyword">() {        <br />        if ( ! </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">final_read_fh </span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">flushBuffer</span><span class="keyword">();<br />            </span><span class="default">stream_filter_remove</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">gz_filter</span><span class="keyword">);<br />            </span><span class="default">$crc </span><span class="keyword">= </span><span class="default">hash_final</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_hash</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);            </span><span class="comment">// hash_final is a string, not an integer<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="default">$crc</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="default">$crc</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">// need to reverse the hash_final string so it's little endian<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">, </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"V"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">uncompressed_bytes</span><span class="keyword">), </span><span class="default">4</span><span class="keyword">);<br /><br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filesize </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">);<br />            </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">final_read_fh </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__fh</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">final_read_fh</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123666">  <div class="votes">
    <div id="Vu123666">
    <a href="/manual/vote-note.php?id=123666&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123666">
    <a href="/manual/vote-note.php?id=123666&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123666" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123666" class="name">
  <strong class="user"><em>chasjfish at gmail dot com</em></strong></a><a class="genanchor" href="#123666"> &para;</a><div class="date" title="2019-03-07 06:58"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123666">
<div class="phpcode"><code><span class="html">There is an active feature request for an xzopen function. The xz program uses the LZMA algorithm for much higher compression ratios than gzip.<br /><br />Until such time that xzopen might be available, here is my best design for safely reading .xz files which originate remotely and are not trusted.<br /><br />Below is a CSV log viewer - there is a lot going on here, so I will explain it below:<br /><br />&lt;?<br /><br />$PRG_NAME = basename($_SERVER['PHP_SELF'], '.php');<br />$PRG_LEN = strlen($PRG_NAME);<br /><br />if(substr($z = $_GET['CSV'], 0, $PRG_LEN) == $PRG_NAME)<br />{<br /> header('content-type:application/csv;charset=UTF-8');<br /> header('Content-Disposition:attachment;filename="' .<br />   $_GET['CSV'] . '.csv"');<br /><br /> if('.xz' == substr($z, -3))<br /> {<br />        $tmpfname = tempnam("/tmp", "php-log-viewer");<br />        $fpx = fopen($tmpfname, 'w');<br />        fprintf($fpx, "/var/app/log/%s\0", $z);<br />        fclose($fpx);<br /><br />        $fp = popen("xz -cd --files0=" . $tmpfname, 'r');<br /> }<br /> else   $fp = fopen('/var/app/log/' . $z, 'r');<br /><br /> while($line = fgets($fp))<br />  echo '"' . preg_replace('/[~]/', '","', rtrim($line)) . "\"\n";<br /><br /> fclose($fp); if(is_file($tmpfname)) unlink($tmpfname); exit;<br />}<br /><br />?&gt;<br /><br />The logs are tilde-delimited files (~) in the /var/app/log directory which the code above converts to CSV and injects into Excel. They are regularly compressed by cron, but the latest logs will be uncompressed text files. A separate section of my code (not included here) presents them via opendir()/readdir()/stat().<br /><br />The file prefix that the viewer will allow the user to see is determined by the name of the script - if I name it FTP-LOG.php, then any file beginning with /var/app/log/FTP-LOG can be read. I am enabling the viewer for different prefixes by making hard links to the script.<br /><br />Since the log might not (yet) be compressed, I check the extension - if .xz is detected, then the gymnastics begin.<br /><br />It is not safe to pass form content from remote users to a UNIX shell, and I am trying to avoid this. Fortunately, xz has the --files and --files0 options, and I create a temporary filename, record the file of interest in it, then open an xz process for reading (otherwise, a simple fopen() will suffice). Recording a \0 allows safer processing of files with embedded newlines (which is allowed by POSIX), and is immediately familiar to fans of "find -print0" and "xargs -0".<br /><br />Unfortunately, neither bzip2 nor lzip have have a --files[0] option. It is quite useful in this case, and appears to improve security.</span></code></div>
  </div>
 </div>
  <div class="note" id="53430">  <div class="votes">
    <div id="Vu53430">
    <a href="/manual/vote-note.php?id=53430&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53430">
    <a href="/manual/vote-note.php?id=53430&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53430" title="no votes...">
    0
    </div>
  </div>
  <a href="#53430" class="name">
  <strong class="user"><em>rob at digital-crocus dot com</em></strong></a><a class="genanchor" href="#53430"> &para;</a><div class="date" title="2005-06-01 05:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53430">
<div class="phpcode"><code><span class="html">dtorop932 at hotmail dot com's comments, according to my tests, is incorrect. That code wishes to download the entire file before parsing, which is inconvinient. The wget method works though.</span></code></div>
  </div>
 </div>
  <div class="note" id="49476">  <div class="votes">
    <div id="Vu49476">
    <a href="/manual/vote-note.php?id=49476&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49476">
    <a href="/manual/vote-note.php?id=49476&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49476" title="no votes...">
    0
    </div>
  </div>
  <a href="#49476" class="name">
  <strong class="user"><em>pentek_imre at mailbox dot hu</em></strong></a><a class="genanchor" href="#49476"> &para;</a><div class="date" title="2005-01-29 10:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49476">
<div class="phpcode"><code><span class="html">Be aware that when opening a remote file on a http server the gzopen will return by default false after 120 seconds waiting to any answer.</span></code></div>
  </div>
 </div>
  <div class="note" id="46736">  <div class="votes">
    <div id="Vu46736">
    <a href="/manual/vote-note.php?id=46736&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46736">
    <a href="/manual/vote-note.php?id=46736&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46736" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#46736" class="name">
  <strong class="user"><em>dtorop932 at hotmail dot com</em></strong></a><a class="genanchor" href="#46736"> &para;</a><div class="date" title="2004-10-21 12:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46736">
<div class="phpcode"><code><span class="html">RE dubious's comment: "Being able to read gzip streams from ftp and http is near the top of my personal wishlist at the moment..."<br /><br />One way to read a gzip stream over http is to daisychain stream wrappers, e.g.:<br /><br />&lt;?<br />$fp = fopen("compress.zlib://<a href="http://some.website.org/example.gz" rel="nofollow" target="_blank">http://some.website.org/example.gz</a>", "r");<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="17920">  <div class="votes">
    <div id="Vu17920">
    <a href="/manual/vote-note.php?id=17920&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17920">
    <a href="/manual/vote-note.php?id=17920&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17920" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#17920" class="name">
  <strong class="user"><em>-delete-this-part-dubious at 2xtreme dot net</em></strong></a><a class="genanchor" href="#17920"> &para;</a><div class="date" title="2002-01-02 07:22"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17920">
<div class="phpcode"><code><span class="html">"On the fly" gunzipping actually DOES seem to work - it just appears that only LOCAL streams/files (including php://stdin) can be accessed for some reason.  I THINK (but have not yet tested) that you could similarly gzopen "php://stdout" and pass a stream of gzipped data to the browser (when run from a web page) or console (when run standalone) through there.<br /><br />I HAVE tested scripts from the command line like:<br /><br />wget -q -O- <a href="ftp://some.host.net/pub/some_gzip_file.gz" rel="nofollow" target="_blank">ftp://some.host.net/pub/some_gzip_file.gz</a> | php gunzip_stuff.php<br /><br />where gunzip_stuff.php would be a script that gzopened "php://stdin" and did gzgets from that stream, and it seems to work fine, but that obviously doesn't help someone wanting to grab gzipped streams from remote sites from a web-based script.<br /><br />Being able to read gzip streams from ftp and http is near the top of my personal wishlist at the moment...</span></code></div>
  </div>
 </div>
  <div class="note" id="85561">  <div class="votes">
    <div id="Vu85561">
    <a href="/manual/vote-note.php?id=85561&amp;page=function.gzopen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85561">
    <a href="/manual/vote-note.php?id=85561&amp;page=function.gzopen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85561" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#85561" class="name">
  <strong class="user"><em>plasma</em></strong></a><a class="genanchor" href="#85561"> &para;</a><div class="date" title="2008-09-05 08:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85561">
<div class="phpcode"><code><span class="html">This worked unstable for me under high load (50+ files per second):<br /><br /><span class="default">&lt;?php<br />    $gz </span><span class="keyword">= </span><span class="default">gzopen </span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'w9' </span><span class="keyword">);<br />    </span><span class="default">gzwrite </span><span class="keyword">( </span><span class="default">$gz</span><span class="keyword">, </span><span class="default">$content </span><span class="keyword">);<br />    </span><span class="default">gzclose </span><span class="keyword">( </span><span class="default">$gz </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The following works fine:<br /><br /><span class="default">&lt;?php<br />    $f </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'w' </span><span class="keyword">);<br />    </span><span class="default">fwrite </span><span class="keyword">( </span><span class="default">$f</span><span class="keyword">, </span><span class="default">gzcompress </span><span class="keyword">( </span><span class="default">$content</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">) );<br />    </span><span class="default">fclose </span><span class="keyword">( </span><span class="default">$f </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gzopen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzopen.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
