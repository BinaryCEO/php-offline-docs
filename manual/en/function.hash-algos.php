<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash_algos - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash-algos.php">
 <link rel="shorturl" href="https://www.php.net/hash-algos">
 <link rel="alternate" href="https://www.php.net/hash-algos" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hash.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-copy.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash-algos.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash-algos.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash-algos.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash-algos.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash-algos.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash-algos.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash-algos.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash-algos.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash-algos.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash-algos.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash-algos.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return a list of registered hashing algorithms" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash_algos - Manual" />
<meta name="twitter:description" content="Return a list of registered hashing algorithms" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash_algos - Manual" />
<meta itemprop="description" content="Return a list of registered hashing algorithms" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return a list of registered hashing algorithms" />

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
        <a href="function.hash-copy.php">
          hash_copy &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hash.php">
          &laquo; hash        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.hash.php'>Hash</a></li>      <li><a href='ref.hash.php'>Hash Functions</a></li>      </ul>
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
            <option value='en/function.hash-algos.php' selected="selected">English</option>
            <option value='de/function.hash-algos.php'>German</option>
            <option value='es/function.hash-algos.php'>Spanish</option>
            <option value='fr/function.hash-algos.php'>French</option>
            <option value='it/function.hash-algos.php'>Italian</option>
            <option value='ja/function.hash-algos.php'>Japanese</option>
            <option value='pt_BR/function.hash-algos.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash-algos.php'>Russian</option>
            <option value='tr/function.hash-algos.php'>Turkish</option>
            <option value='uk/function.hash-algos.php'>Ukrainian</option>
            <option value='zh/function.hash-algos.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash-algos" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash_algos</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8, PECL hash &gt;= 1.1)</p><p class="refpurpose"><span class="refname">hash_algos</span> &mdash; <span class="dc-title">Return a list of registered hashing algorithms</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.hash-algos-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash_algos</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.hash-algos-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-algos-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a numerically indexed array containing the list of supported
   hashing algorithms.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-algos-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        Support for MurmurHash3 and xxHash algorithms has been added.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        Support for crc32c has been added.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        Support for sha512/224, sha512/256, sha3-224, sha3-256, sha3-384 and
        sha3-512 has been added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.hash-algos-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-980">
    <p><strong>Example #1 <span class="function"><strong>hash_algos()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     As of PHP 8.1.0, <span class="function"><strong>hash_algos()</strong></span> will return the
     following list of algorithm names.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">hash_algos</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; md2
    [1] =&gt; md4
    [2] =&gt; md5
    [3] =&gt; sha1
    [4] =&gt; sha224
    [5] =&gt; sha256
    [6] =&gt; sha384
    [7] =&gt; sha512/224
    [8] =&gt; sha512/256
    [9] =&gt; sha512
    [10] =&gt; sha3-224
    [11] =&gt; sha3-256
    [12] =&gt; sha3-384
    [13] =&gt; sha3-512
    [14] =&gt; ripemd128
    [15] =&gt; ripemd160
    [16] =&gt; ripemd256
    [17] =&gt; ripemd320
    [18] =&gt; whirlpool
    [19] =&gt; tiger128,3
    [20] =&gt; tiger160,3
    [21] =&gt; tiger192,3
    [22] =&gt; tiger128,4
    [23] =&gt; tiger160,4
    [24] =&gt; tiger192,4
    [25] =&gt; snefru
    [26] =&gt; snefru256
    [27] =&gt; gost
    [28] =&gt; gost-crypto
    [29] =&gt; adler32
    [30] =&gt; crc32
    [31] =&gt; crc32b
    [32] =&gt; crc32c
    [33] =&gt; fnv132
    [34] =&gt; fnv1a32
    [35] =&gt; fnv164
    [36] =&gt; fnv1a64
    [37] =&gt; joaat
    [38] =&gt; murmur3a
    [39] =&gt; murmur3c
    [40] =&gt; murmur3f
    [41] =&gt; xxh32
    [42] =&gt; xxh64
    [43] =&gt; xxh3
    [44] =&gt; xxh128
    [45] =&gt; haval128,3
    [46] =&gt; haval160,3
    [47] =&gt; haval192,3
    [48] =&gt; haval224,3
    [49] =&gt; haval256,3
    [50] =&gt; haval128,4
    [51] =&gt; haval160,4
    [52] =&gt; haval192,4
    [53] =&gt; haval224,4
    [54] =&gt; haval256,4
    [55] =&gt; haval128,5
    [56] =&gt; haval160,5
    [57] =&gt; haval192,5
    [58] =&gt; haval224,5
    [59] =&gt; haval256,5
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-algos-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.hash.php" class="function" rel="rdfs-seeAlso">hash()</a> - Generate a hash value (message digest)</span></li>
   <li><span class="function"><a href="function.hash-hmac-algos.php" class="function" rel="rdfs-seeAlso">hash_hmac_algos()</a> - Return a list of registered hashing algorithms suitable for hash_hmac</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash-algos.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash-algos%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash-algos&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-algos.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115951">  <div class="votes">
    <div id="Vu115951">
    <a href="/manual/vote-note.php?id=115951&amp;page=function.hash-algos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115951">
    <a href="/manual/vote-note.php?id=115951&amp;page=function.hash-algos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115951" title="67% like this...">
    21
    </div>
  </div>
  <a href="#115951" class="name">
  <strong class="user"><em>Miguel Florido</em></strong></a><a class="genanchor" href="#115951"> &para;</a><div class="date" title="2014-10-18 11:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115951">
<div class="phpcode"><code><span class="html">Ansewring to holdoffhunger avoid crc32, the are different results because the crc32(); use the algorithm 'crc32b'. To check this only have to write:<br /><br />echo hash('crc32b', 'The quick brown fox jumped over the lazy dog.'), "\n";<br />echo dechex (crc32('The quick brown fox jumped over the lazy dog.'));<br /><br />And check that both have the same results:<br /><br />82a34642<br />82a34642</span></code></div>
  </div>
 </div>
  <div class="note" id="109148">  <div class="votes">
    <div id="Vu109148">
    <a href="/manual/vote-note.php?id=109148&amp;page=function.hash-algos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109148">
    <a href="/manual/vote-note.php?id=109148&amp;page=function.hash-algos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109148" title="60% like this...">
    11
    </div>
  </div>
  <a href="#109148" class="name">
  <strong class="user"><em>holdoffhunger at gmail dot com</em></strong></a><a class="genanchor" href="#109148"> &para;</a><div class="date" title="2012-06-23 11:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109148">
<div class="phpcode"><code><span class="html">If you print the results of the hash_algos function and look at all of the available hashing functions, you will find three with duplicate functions: md5, sha1, crc32, and sha256.  That means you can call the any of these function with either its own function or the hash function.  For example, with the SHA1 function :<br /><br /><span class="default">&lt;?php<br /><br />            </span><span class="comment">// Author: holdoffhunger@gmail.com<br /><br />    </span><span class="default">$sha1_first_value </span><span class="keyword">= </span><span class="default">sha1</span><span class="keyword">(</span><span class="string">"secret"</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br /><br />    </span><span class="default">$sha1_second_value </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="string">"sha1"</span><span class="keyword">, </span><span class="string">"secret"</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />However, the alternate title for the SHA256 algorithm is "getImageSignature", as part of the ImageMagick application package.  Oddly, the CRC32 function returns different values when called from its own particular function (crc32()) compared to when it's called through the hash function (hash()).  This leads me to suspect that they may be different implementations of the crc32 algorithm altogether.  The different functions for SHA1 and MD5, however, produce the same results.  The SHA-256 algorithm, as implemented in the ImageMagick function, also produces different results compared to the results of the hash_file() function within the Hash application package.<br /><br />For the String "1234567890", the single CRC32() Function (which doesn't have an option for binary, "raw data" representation) produces "639479525", but when called through the Hash() Function, that same string produces "b6536850".  I cannot find the relationship of any of these values, as they are not inverses of each other, nor is their sum or difference equal to any power of two (as I suspected they might be an equal distance from 0 or 2^32).<br /><br />Both the SHA1 and MD5 alternate functions have the parameter of "TRUE/FALSE" at the end to indicate whether the result is given in binary (raw data) or not.  Unfortunately, this often turns out to be data that doesn't print very well.  It is recommended to be printed with the statement of printf("%u\n", $crc_32_value);.  However, that often doesn't produce any usable results, either.  The only method I have discovered is the "bin2hex" function, like so :<br /><br /><span class="default">&lt;?php<br /><br />    $md5_value </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="string">"md5"</span><span class="keyword">, </span><span class="string">"secret"</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />    </span><span class="default">$md5_value_in_hex </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$md5_value</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />However, bin2hex returns a hexadecimal representation, whereas you probably wanted a string of binary 1's and 0's.  You can use the base_convert function, such as base_convert($md5_value_in_hex, 16, 2);.  However, base_convert doesn't work on large numbers, so you have to write your own function for converting Hex to Binary.<br /><br />One other thing that will probably catch your attention is that half of the listed algorithms have similar names, but are represented with different numbers.  That means that the algorithm takes parameters itself, such as number of bits for the resultant hash value and number of rounds to do in producing the hashed result.  The first number in the title of the Hash Function usually indicates the size of the hash result, such as 128 bit for "haval128,3" and 160 bit for "tiger160,4".  The second number, however, indicates the number of rounds, such as 5 rounds for "haval224,5".</span></code></div>
  </div>
 </div>
  <div class="note" id="100934">  <div class="votes">
    <div id="Vu100934">
    <a href="/manual/vote-note.php?id=100934&amp;page=function.hash-algos&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100934">
    <a href="/manual/vote-note.php?id=100934&amp;page=function.hash-algos&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100934" title="54% like this...">
    3
    </div>
  </div>
  <a href="#100934" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#100934"> &para;</a><div class="date" title="2010-11-16 05:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100934">
<div class="phpcode"><code><span class="html">These algorithms can be used to generate a session ID. Just pick a string value from the list and feed the session.hash_function directive with it. E.g.:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'session.hash_function'</span><span class="keyword">, </span><span class="string">'whirlpool'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.hash-algos&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-algos.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.hash.php">Hash Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.hash.php" title="hash">hash</a>
                        </li>
                                                <li class="current">
                            <a href="function.hash-algos.php" title="hash_&#8203;algos">hash_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-copy.php" title="hash_&#8203;copy">hash_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-equals.php" title="hash_&#8203;equals">hash_&#8203;equals</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-file.php" title="hash_&#8203;file">hash_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-final.php" title="hash_&#8203;final">hash_&#8203;final</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hkdf.php" title="hash_&#8203;hkdf">hash_&#8203;hkdf</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac.php" title="hash_&#8203;hmac">hash_&#8203;hmac</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-algos.php" title="hash_&#8203;hmac_&#8203;algos">hash_&#8203;hmac_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-file.php" title="hash_&#8203;hmac_&#8203;file">hash_&#8203;hmac_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-init.php" title="hash_&#8203;init">hash_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-pbkdf2.php" title="hash_&#8203;pbkdf2">hash_&#8203;pbkdf2</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update.php" title="hash_&#8203;update">hash_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-file.php" title="hash_&#8203;update_&#8203;file">hash_&#8203;update_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-stream.php" title="hash_&#8203;update_&#8203;stream">hash_&#8203;update_&#8203;stream</a>
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
