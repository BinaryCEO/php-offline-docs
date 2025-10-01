<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gzinflate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gzinflate.php">
 <link rel="shorturl" href="https://www.php.net/gzinflate">
 <link rel="alternate" href="https://www.php.net/gzinflate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zlib.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gzgetss.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gzopen.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gzinflate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gzinflate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gzinflate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gzinflate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gzinflate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gzinflate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gzinflate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gzinflate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gzinflate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gzinflate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gzinflate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Inflate a deflated string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gzinflate - Manual" />
<meta name="twitter:description" content="Inflate a deflated string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gzinflate - Manual" />
<meta itemprop="description" content="Inflate a deflated string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Inflate a deflated string" />

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
        <a href="function.gzopen.php">
          gzopen &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gzgetss.php">
          &laquo; gzgetss        </a>
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
            <option value='en/function.gzinflate.php' selected="selected">English</option>
            <option value='de/function.gzinflate.php'>German</option>
            <option value='es/function.gzinflate.php'>Spanish</option>
            <option value='fr/function.gzinflate.php'>French</option>
            <option value='it/function.gzinflate.php'>Italian</option>
            <option value='ja/function.gzinflate.php'>Japanese</option>
            <option value='pt_BR/function.gzinflate.php'>Brazilian Portuguese</option>
            <option value='ru/function.gzinflate.php'>Russian</option>
            <option value='tr/function.gzinflate.php'>Turkish</option>
            <option value='uk/function.gzinflate.php'>Ukrainian</option>
            <option value='zh/function.gzinflate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gzinflate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gzinflate</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gzinflate</span> &mdash; <span class="dc-title">Inflate a deflated string</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gzinflate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gzinflate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_length</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">   
   This function inflates a deflated string.  
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.gzinflate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The data compressed by <span class="function"><a href="function.gzdeflate.php" class="function">gzdeflate()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">max_length</code></dt>
     <dd>
      <p class="para">
       The maximum length of decoded data.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.gzinflate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The original uncompressed data or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
  <p class="para">
   The function will return an error if the uncompressed data is more than
   32768 times the length of the compressed input <code class="parameter">data</code> 
   or, unless <code class="parameter">max_length</code> is <code class="literal">0</code>, more than the optional parameter <code class="parameter">max_length</code>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.gzinflate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-970">
    <p><strong>Example #1 <span class="function"><strong>gzinflate()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$compressed   </span><span style="color: #007700">= </span><span style="color: #0000BB">gzdeflate</span><span style="color: #007700">(</span><span style="color: #DD0000">'Compress me'</span><span style="color: #007700">, </span><span style="color: #0000BB">9</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$uncompressed </span><span style="color: #007700">= </span><span style="color: #0000BB">gzinflate</span><span style="color: #007700">(</span><span style="color: #0000BB">$compressed</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$uncompressed</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.gzinflate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gzdeflate.php" class="function" rel="rdfs-seeAlso">gzdeflate()</a> - Deflate a string</span></li>
    <li><span class="function"><a href="function.gzcompress.php" class="function" rel="rdfs-seeAlso">gzcompress()</a> - Compress a string</span></li>
    <li><span class="function"><a href="function.gzuncompress.php" class="function" rel="rdfs-seeAlso">gzuncompress()</a> - Uncompress a compressed string</span></li>
    <li><span class="function"><a href="function.gzencode.php" class="function" rel="rdfs-seeAlso">gzencode()</a> - Create a gzip compressed string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zlib/functions/gzinflate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gzinflate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gzinflate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzinflate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112201">  <div class="votes">
    <div id="Vu112201">
    <a href="/manual/vote-note.php?id=112201&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112201">
    <a href="/manual/vote-note.php?id=112201&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112201" title="94% like this...">
    35
    </div>
  </div>
  <a href="#112201" class="name">
  <strong class="user"><em>anonymous at dekho-ji dot com</em></strong></a><a class="genanchor" href="#112201"> &para;</a><div class="date" title="2013-05-16 11:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112201">
<div class="phpcode"><code><span class="html">To decode / uncompress the received HTTP POST data in PHP code, request data coming from Java / Android application via HTTP POST GZIP / DEFLATE compressed format<br /><br />1) Data sent from Java Android app to PHP using DeflaterOutputStream java class and received in PHP as shown below<br />echo gzinflate( substr($HTTP_RAW_POST_DATA,2,-4) ) . PHP_EOL  . PHP_EOL;<br /><br />2) Data sent from Java Android app to PHP using GZIPOutputStream java class and received in PHP code as shown below<br />echo gzinflate( substr($HTTP_RAW_POST_DATA,10,-8) ) . PHP_EOL  . PHP_EOL;<br /><br />From Java Android side (API level 10+), data being sent in DEFLATE compressed format<br />        String body = "Lorem ipsum shizzle ma nizle";<br />        URL url = new URL("<a href="http://www.url.com/postthisdata.php" rel="nofollow" target="_blank">http://www.url.com/postthisdata.php</a>");<br />        URLConnection conn = url.openConnection();<br />        conn.setDoOutput(true);<br />        conn.setRequestProperty("Content-encoding", "deflate");<br />        conn.setRequestProperty("Content-type", "application/octet-stream");<br />        DeflaterOutputStream dos = new DeflaterOutputStream(<br />                conn.getOutputStream());<br />        dos.write(body.getBytes());<br />        dos.flush();<br />        dos.close();<br />        BufferedReader in = new BufferedReader(new InputStreamReader(<br />                conn.getInputStream()));<br />        String decodedString = "";<br />        while ((decodedString = in.readLine()) != null) {<br />            Log.e("dump",decodedString);<br />        }<br />        in.close();<br /><br />On PHP side (v 5.3.1), code for decompressing this DEFLATE data will be<br />    echo substr($HTTP_RAW_POST_DATA,2,-4);<br /><br />From Java Android side (API level 10+), data being sent in GZIP compressed format<br /><br />        String body1 = "Lorem ipsum shizzle ma nizle";<br />        URL url1 = new URL("<a href="http://www.url.com/postthisdata.php" rel="nofollow" target="_blank">http://www.url.com/postthisdata.php</a>");<br />        URLConnection conn1 = url1.openConnection();<br />        conn1.setDoOutput(true);<br />        conn1.setRequestProperty("Content-encoding", "gzip");<br />        conn1.setRequestProperty("Content-type", "application/octet-stream");<br />        GZIPOutputStream dos1 = new GZIPOutputStream(conn1.getOutputStream());<br />        dos1.write(body1.getBytes());<br />        dos1.flush();<br />        dos1.close();<br />        BufferedReader in1 = new BufferedReader(new InputStreamReader(<br />                conn1.getInputStream()));<br />        String decodedString1 = "";<br />        while ((decodedString1 = in1.readLine()) != null) {<br />            Log.e("dump",decodedString1);<br />        }<br />        in1.close();<br /><br />On PHP side (v 5.3.1), code for decompressing this GZIP data will be<br />    echo substr($HTTP_RAW_POST_DATA,10,-8);<br /><br />Useful PHP code for printing out compressed data using all available formats.<br /><br />$data = "Lorem ipsum shizzle ma nizle";<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzcompress($data,$i))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzdeflate($data,$i))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzencode($data,$i,FORCE_GZIP))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br />for($i=-1;$i&lt;=9;$i++)<br />    echo chunk_split(strtoupper(bin2hex(gzencode($data,$i,FORCE_DEFLATE))),2," ") . PHP_EOL  . PHP_EOL;<br />echo "\n\n\n";<br /><br />Hope this helps. Please ThumbsUp if this saved you a lot of effort and time.</span></code></div>
  </div>
 </div>
  <div class="note" id="111510">  <div class="votes">
    <div id="Vu111510">
    <a href="/manual/vote-note.php?id=111510&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111510">
    <a href="/manual/vote-note.php?id=111510&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111510" title="100% like this...">
    5
    </div>
  </div>
  <a href="#111510" class="name">
  <strong class="user"><em>felix dot klee at inka dot de</em></strong></a><a class="genanchor" href="#111510"> &para;</a><div class="date" title="2013-02-27 10:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111510">
<div class="phpcode"><code><span class="html">The code below illustrates usage of the second parameter, in particular to protect against fatal out-of-memory errors. It outputs:
<br />
<br />1000000
<br />1000000
<br />error
<br />
<br />Tested with PHP 5.3 on 32bit Linux.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">tryToGzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">, </span><span class="default">$maxLen </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />  </span><span class="default">$data </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">, </span><span class="default">$maxLen</span><span class="keyword">);
<br />  if (</span><span class="default">$data </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)
<br />    echo </span><span class="string">'error&lt;br&gt;'</span><span class="keyword">;
<br />  else
<br />    echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// random data:
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />  </span><span class="default">$data </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">97</span><span class="keyword">, </span><span class="default">122</span><span class="keyword">)); </span><span class="comment">// a-z
<br />
<br /></span><span class="default">$deflatedData </span><span class="keyword">= </span><span class="default">gzdeflate</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />
<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, </span><span class="string">'5M'</span><span class="keyword">); </span><span class="comment">// plenty of memory
<br /></span><span class="default">tryToGzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">);
<br /></span><span class="default">tryToGzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));
<br />
<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, </span><span class="string">'100'</span><span class="keyword">); </span><span class="comment">// little memory
<br /></span><span class="default">tryToGzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br /></span><span class="default">tryToGzinflate</span><span class="keyword">(</span><span class="default">$deflatedData</span><span class="keyword">); </span><span class="comment">// causes fatal out-of-memory error
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93435">  <div class="votes">
    <div id="Vu93435">
    <a href="/manual/vote-note.php?id=93435&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93435">
    <a href="/manual/vote-note.php?id=93435&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93435" title="83% like this...">
    8
    </div>
  </div>
  <a href="#93435" class="name">
  <strong class="user"><em>vitall at ua dot fm</em></strong></a><a class="genanchor" href="#93435"> &para;</a><div class="date" title="2009-09-09 05:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93435">
<div class="phpcode"><code><span class="html">The correct function for gzip and chunked data particularly when you get "Content-Encoding: gzip" and "Transfer-Encoding: chunked" headers:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">decode_gzip</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$rn</span><span class="keyword">=</span><span class="string">"\r\n"</span><span class="keyword">){
<br />if (isset(</span><span class="default">$h</span><span class="keyword">[</span><span class="string">'Transfer-Encoding'</span><span class="keyword">])){
<br /> </span><span class="default">$lrn </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rn</span><span class="keyword">);
<br /> </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br /> </span><span class="default">$ofs</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br /> do{
<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$rn</span><span class="keyword">,</span><span class="default">$ofs</span><span class="keyword">);
<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$ofs</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">-</span><span class="default">$ofs</span><span class="keyword">));
<br />    </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">$p</span><span class="keyword">+</span><span class="default">$lrn</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">);
<br />     </span><span class="default">$ofs </span><span class="keyword">= </span><span class="default">$p</span><span class="keyword">+</span><span class="default">$lrn</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">+</span><span class="default">$len</span><span class="keyword">;
<br /> }while (</span><span class="default">$d</span><span class="keyword">[</span><span class="default">$ofs</span><span class="keyword">]!==</span><span class="string">'0'</span><span class="keyword">);
<br /> </span><span class="default">$d</span><span class="keyword">=</span><span class="default">$str</span><span class="keyword">;
<br />}
<br />if (isset(</span><span class="default">$h</span><span class="keyword">[</span><span class="string">'Content-Encoding'</span><span class="keyword">])) </span><span class="default">$d </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">));
<br />return </span><span class="default">$d</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Enjoy!</span></code></div>
  </div>
 </div>
  <div class="note" id="100775">  <div class="votes">
    <div id="Vu100775">
    <a href="/manual/vote-note.php?id=100775&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100775">
    <a href="/manual/vote-note.php?id=100775&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100775" title="81% like this...">
    7
    </div>
  </div>
  <a href="#100775" class="name">
  <strong class="user"><em>Steven Lustig</em></strong></a><a class="genanchor" href="#100775"> &para;</a><div class="date" title="2010-11-05 09:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100775">
<div class="phpcode"><code><span class="html">You can use this to uncompress a string from Linux command line gzip by stripping the first 10 bytes:
<br />
<br /><span class="default">&lt;?php
<br />$inflatedOutput </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, -</span><span class="default">8</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="33810">  <div class="votes">
    <div id="Vu33810">
    <a href="/manual/vote-note.php?id=33810&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33810">
    <a href="/manual/vote-note.php?id=33810&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33810" title="83% like this...">
    4
    </div>
  </div>
  <a href="#33810" class="name">
  <strong class="user"><em>boris at gamate dot com</em></strong></a><a class="genanchor" href="#33810"> &para;</a><div class="date" title="2003-07-08 05:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33810">
<div class="phpcode"><code><span class="html">When retrieving mod_gzip'ed content and using gzinflate() to decode the data, be sure to strip the first 10 chars from the retrieved content.
<br />
<br /><span class="default">&lt;?php $dec </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$enc</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77336">  <div class="votes">
    <div id="Vu77336">
    <a href="/manual/vote-note.php?id=77336&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77336">
    <a href="/manual/vote-note.php?id=77336&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77336" title="77% like this...">
    5
    </div>
  </div>
  <a href="#77336" class="name">
  <strong class="user"><em>patatraboum at free dot fr</em></strong></a><a class="genanchor" href="#77336"> &para;</a><div class="date" title="2007-08-24 10:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77336">
<div class="phpcode"><code><span class="html">Some gz string strip header and return inflated
<br />It actualy processes some first member of the gz
<br />See rfc1952 at <a href="http://www.faqs.org/rfcs/rfc1952.html" rel="nofollow" target="_blank">http://www.faqs.org/rfcs/rfc1952.html</a> for more details and improvment as gzdecode
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">gzBody</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">){
<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)==</span><span class="string">"\x1f\x8b\x08"</span><span class="keyword">){
<br />        </span><span class="default">$i</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">;
<br />        </span><span class="default">$flg</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));
<br />        if(</span><span class="default">$flg</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){
<br />            if(</span><span class="default">$flg</span><span class="keyword">&amp;</span><span class="default">4</span><span class="keyword">){
<br />                list(</span><span class="default">$xlen</span><span class="keyword">)=</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'v'</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));
<br />                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">+</span><span class="default">$xlen</span><span class="keyword">;
<br />            }
<br />            if(</span><span class="default">$flg</span><span class="keyword">&amp;</span><span class="default">8</span><span class="keyword">) </span><span class="default">$i</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="string">"\0"</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">;
<br />            if(</span><span class="default">$flg</span><span class="keyword">&amp;</span><span class="default">16</span><span class="keyword">) </span><span class="default">$i</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="string">"\0"</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">;
<br />            if(</span><span class="default">$flg</span><span class="keyword">&amp;</span><span class="default">2</span><span class="keyword">) </span><span class="default">$i</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$gzData</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,-</span><span class="default">8</span><span class="keyword">));
<br />    }
<br />    else return </span><span class="default">false</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70875">  <div class="votes">
    <div id="Vu70875">
    <a href="/manual/vote-note.php?id=70875&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70875">
    <a href="/manual/vote-note.php?id=70875&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70875" title="80% like this...">
    3
    </div>
  </div>
  <a href="#70875" class="name">
  <strong class="user"><em>spikeles_ at hotmail dot com</em></strong></a><a class="genanchor" href="#70875"> &para;</a><div class="date" title="2006-11-01 08:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70875">
<div class="phpcode"><code><span class="html">This can be used to inflate streams compressed by the Java class java.util.zip.Deflater but you must strip the first 2 bytes off it. ( much like the above comment )
<br />
<br /><span class="default">&lt;?php $result </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$compressedData</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108948">  <div class="votes">
    <div id="Vu108948">
    <a href="/manual/vote-note.php?id=108948&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108948">
    <a href="/manual/vote-note.php?id=108948&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108948" title="60% like this...">
    1
    </div>
  </div>
  <a href="#108948" class="name">
  <strong class="user"><em>niblett at gmail dot com</em></strong></a><a class="genanchor" href="#108948"> &para;</a><div class="date" title="2012-06-07 02:08"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108948">
<div class="phpcode"><code><span class="html">alternative, with detection for optional filename header<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">gzdecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br /><br />        </span><span class="comment">// check if filename field is set in FLG, is 4th byte<br />        </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br />        </span><span class="default">$flg </span><span class="keyword">= (int)</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br /><br />        </span><span class="comment">// remove headers<br />        </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /><br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        if (  (</span><span class="default">$flg </span><span class="keyword">&amp; </span><span class="default">0x8</span><span class="keyword">) == </span><span class="default">8 </span><span class="keyword">){<br />                print </span><span class="string">"ello"</span><span class="keyword">;<br />                for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2 </span><span class="keyword">){<br />                        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />                        if ( </span><span class="default">$value </span><span class="keyword">== </span><span class="string">'00' </span><span class="keyword">){<br />                                </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, (</span><span class="default">$i</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">));<br />                                break;<br />                        }<br />                }<br />        }<br />        return </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110817">  <div class="votes">
    <div id="Vu110817">
    <a href="/manual/vote-note.php?id=110817&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110817">
    <a href="/manual/vote-note.php?id=110817&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110817" title="55% like this...">
    1
    </div>
  </div>
  <a href="#110817" class="name">
  <strong class="user"><em>akniep at rayo dot info</em></strong></a><a class="genanchor" href="#110817"> &para;</a><div class="date" title="2012-12-11 03:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110817">
<div class="phpcode"><code><span class="html">Take care when using the optional second parameter $length!
<br />In our tests -at least in certain situations- we were unable to determine the actual use of this parameter, plus, it lead to the script either being unable to inflate compressed data or crash due to memory-problems.
<br />
<br />Example:
<br />When trying to inflate the compressed data from a website, we were literally unable to find a value (other than 0) for $length in order to make gzinflate work... while without the second parameter (or setting it to 0) gzinflate worked like a charm:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// -----------------------------------------------------------------------
<br />// Test 1 works without problems. Memory peak usage: Before inflating: 24.787 kB; after: 24.844 kB.
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">) );
<br />
<br /></span><span class="comment">// -----------------------------------------------------------------------
<br />// ALL three of the following tests failed with a warning. Memory peak usage: Before inflating: 24.787 kB; after: 298.262 kB.
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">),       </span><span class="default">200 </span><span class="keyword">* </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">) );
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">),     </span><span class="default">32768 </span><span class="keyword">* </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">) );
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">),     </span><span class="default">11000 </span><span class="keyword">);
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">), </span><span class="default">280000000 </span><span class="keyword">);    </span><span class="comment">// the PHP memory limit was set to 300MB  (memory_limit=300M)
<br /></span><span class="keyword">=&gt;
<br /></span><span class="default">Warning</span><span class="keyword">:  </span><span class="default">gzinflate</span><span class="keyword">() [function.</span><span class="default">gzinflate</span><span class="keyword">]: </span><span class="default">insufficient memory in </span><span class="keyword">[...]
<br />
<br /></span><span class="comment">// -----------------------------------------------------------------------
<br />// The last test failed with a fatal error. Memory peak usage: Before inflating: 24.787 kB; after: ? (&gt; 300M).
<br /></span><span class="default">gzinflate</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$deflated_body</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">), </span><span class="default">300000000 </span><span class="keyword">);    </span><span class="comment">// the PHP memory limit was set to 300MB  (memory_limit=300M)
<br /></span><span class="keyword">=&gt;
<br /></span><span class="default">Fatal error</span><span class="keyword">:  </span><span class="default">Allowed memory size of 314572800 bytes exhausted </span><span class="keyword">(</span><span class="default">tried to allocate 300000000 bytes</span><span class="keyword">) </span><span class="default">in 
<br />?&gt;
<br /></span>
<br />In short: We were unable to determine the actual use of the second parameter in certain situations.
<br />Be careful with using the second parameter $length!</span></code></div>
  </div>
 </div>
  <div class="note" id="83818">  <div class="votes">
    <div id="Vu83818">
    <a href="/manual/vote-note.php?id=83818&amp;page=function.gzinflate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83818">
    <a href="/manual/vote-note.php?id=83818&amp;page=function.gzinflate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83818" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#83818" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#83818"> &para;</a><div class="date" title="2008-06-12 10:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83818">
<div class="phpcode"><code><span class="html">And when retrieving mod_deflate gzip'ed content and using gzinflate() to decode the data, be sure to strip the first 11 chars from the retrieved content.
<br />
<br /><span class="default">&lt;?php $dec </span><span class="keyword">= </span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$enc</span><span class="keyword">,</span><span class="default">11</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gzinflate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gzinflate.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
