<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dechex - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dechex.php">
 <link rel="shorturl" href="https://www.php.net/dechex">
 <link rel="alternate" href="https://www.php.net/dechex" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.decbin.php">
 <link rel="next" href="https://www.php.net/manual/en/function.decoct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dechex.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dechex.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dechex.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dechex.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dechex.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dechex.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dechex.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dechex.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dechex.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dechex.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dechex.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decimal to hexadecimal" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dechex - Manual" />
<meta name="twitter:description" content="Decimal to hexadecimal" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dechex - Manual" />
<meta itemprop="description" content="Decimal to hexadecimal" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decimal to hexadecimal" />

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
        <a href="function.decoct.php">
          decoct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.decbin.php">
          &laquo; decbin        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.math.php'>Math</a></li>      <li><a href='ref.math.php'>Math Functions</a></li>      </ul>
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
            <option value='en/function.dechex.php' selected="selected">English</option>
            <option value='de/function.dechex.php'>German</option>
            <option value='es/function.dechex.php'>Spanish</option>
            <option value='fr/function.dechex.php'>French</option>
            <option value='it/function.dechex.php'>Italian</option>
            <option value='ja/function.dechex.php'>Japanese</option>
            <option value='pt_BR/function.dechex.php'>Brazilian Portuguese</option>
            <option value='ru/function.dechex.php'>Russian</option>
            <option value='tr/function.dechex.php'>Turkish</option>
            <option value='uk/function.dechex.php'>Ukrainian</option>
            <option value='zh/function.dechex.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dechex" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dechex</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dechex</span> &mdash; <span class="dc-title">Decimal to hexadecimal</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.dechex-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dechex</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$num</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a string containing a hexadecimal representation of the given
   unsigned <code class="parameter">num</code> argument.
  </p>
  <p class="para">
   The largest number that can be converted is
   <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong><code class="literal"> * 2 + 1</code> (or
   <code class="literal">-1</code>): on 32-bit platforms, this will be
   <code class="literal">4294967295</code> in decimal, which results in
   <span class="function"><strong>dechex()</strong></span> returning <code class="literal">ffffffff</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.dechex-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">num</code></dt>
     <dd>
      <p class="para">
       The decimal value to convert.
      </p>
      <p class="para">
       As PHP&#039;s <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type is signed, but
       <span class="function"><strong>dechex()</strong></span> deals with unsigned integers, negative
       integers will be treated as though they were unsigned.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.dechex-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Hexadecimal string representation of <code class="parameter">num</code>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.dechex-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3366">
    <p><strong>Example #1 <span class="function"><strong>dechex()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">47</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">a
2f</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3367">
    <p><strong>Example #2 <span class="function"><strong>dechex()</strong></span> example with large integers</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The output below assumes a 32-bit platform.<br />// Note that the output is the same for all values.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">dechex</span><span style="color: #007700">(-</span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_INT_MAX </span><span style="color: #007700">* </span><span style="color: #0000BB">2 </span><span style="color: #007700">+ </span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">pow</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">32</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">ffffffff
ffffffff
ffffffff</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.dechex-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.hexdec.php" class="function" rel="rdfs-seeAlso">hexdec()</a> - Hexadecimal to decimal</span></li>
    <li><span class="function"><a href="function.decbin.php" class="function" rel="rdfs-seeAlso">decbin()</a> - Decimal to binary</span></li>
    <li><span class="function"><a href="function.decoct.php" class="function" rel="rdfs-seeAlso">decoct()</a> - Decimal to octal</span></li>
    <li><span class="function"><a href="function.base-convert.php" class="function" rel="rdfs-seeAlso">base_convert()</a> - Convert a number between arbitrary bases</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/dechex.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dechex%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dechex&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dechex.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="71795">  <div class="votes">
    <div id="Vu71795">
    <a href="/manual/vote-note.php?id=71795&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71795">
    <a href="/manual/vote-note.php?id=71795&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71795" title="82% like this...">
    88
    </div>
  </div>
  <a href="#71795" class="name">
  <strong class="user"><em>brent</em></strong></a><a class="genanchor" href="#71795"> &para;</a><div class="date" title="2006-12-15 11:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71795">
<div class="phpcode"><code><span class="html">Be very careful calling dechex on a number if it's stored in a string.<br /><br />For instance:<br /><br />The max number it can handle is 4294967295 which in hex is FFFFFFFF, as it says in the documentation.<br /><br />dechex(4294967295) =&gt; FFFFFFFF //CORRECT<br /><br />BUT, if you call it on a string of a number, it casts to int, and automatically gives you the largest int it can handle.<br /><br />dechex('4294967295') =&gt; 7FFFFFFF //WRONG!<br /><br />so you'll need to cast to a float:<br /><br />dechex((float) '4294967295') =&gt; FFFFFFFF //CORRECT<br /><br />This took me FOREVER to figure out, so hopefully I just saved someone some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="115651">  <div class="votes">
    <div id="Vu115651">
    <a href="/manual/vote-note.php?id=115651&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115651">
    <a href="/manual/vote-note.php?id=115651&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115651" title="75% like this...">
    2
    </div>
  </div>
  <a href="#115651" class="name">
  <strong class="user"><em>baoquyen804 at gmail dot com</em></strong></a><a class="genanchor" href="#115651"> &para;</a><div class="date" title="2014-09-01 09:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115651">
<div class="phpcode"><code><span class="html">this base function convert string rgb to color<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">rgb_to_color</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">, </span><span class="default">$symbols</span><span class="keyword">=</span><span class="string">' '</span><span class="keyword">){<br />        </span><span class="default">$color </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$symbols</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$color </span><span class="keyword">.= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        }<br />        return </span><span class="string">'#'</span><span class="keyword">.</span><span class="default">$color</span><span class="keyword">;<br />    }<br />       echo </span><span class="default">rgb_to_color</span><span class="keyword">(</span><span class="string">'186 186 18'</span><span class="keyword">);  </span><span class="comment">// #baba12<br />    </span><span class="keyword">echo </span><span class="default">rgb_to_color</span><span class="keyword">(</span><span class="string">'186-186-18'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">);  </span><span class="comment">// #baba12<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="21086">  <div class="votes">
    <div id="Vu21086">
    <a href="/manual/vote-note.php?id=21086&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21086">
    <a href="/manual/vote-note.php?id=21086&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21086" title="68% like this...">
    15
    </div>
  </div>
  <a href="#21086" class="name">
  <strong class="user"><em>joost at bingopaleis dot com</em></strong></a><a class="genanchor" href="#21086"> &para;</a><div class="date" title="2002-04-28 09:21"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21086">
<div class="phpcode"><code><span class="html">Here are two functions that will convert large dec numbers to hex and vice versa. And I really mean LARGE, much larger than any function posted earlier.<br /><br />&lt;pre&gt;<br />// Input: A decimal number as a String.<br />// Output: The equivalent hexadecimal number as a String.<br />function dec2hex($number)<br />{<br />    $hexvalues = array('0','1','2','3','4','5','6','7',<br />               '8','9','A','B','C','D','E','F');<br />    $hexval = '';<br />     while($number != '0')<br />     {<br />        $hexval = $hexvalues[bcmod($number,'16')].$hexval;<br />        $number = bcdiv($number,'16',0);<br />    }<br />    return $hexval;<br />}<br /><br />// Input: A hexadecimal number as a String.<br />// Output: The equivalent decimal number as a String.<br />function hex2dec($number)<br />{<br />    $decvalues = array('0' =&gt; '0', '1' =&gt; '1', '2' =&gt; '2',<br />               '3' =&gt; '3', '4' =&gt; '4', '5' =&gt; '5',<br />               '6' =&gt; '6', '7' =&gt; '7', '8' =&gt; '8',<br />               '9' =&gt; '9', 'A' =&gt; '10', 'B' =&gt; '11',<br />               'C' =&gt; '12', 'D' =&gt; '13', 'E' =&gt; '14',<br />               'F' =&gt; '15');<br />    $decval = '0';<br />    $number = strrev($number);<br />    for($i = 0; $i &lt; strlen($number); $i++)<br />    {<br />        $decval = bcadd(bcmul(bcpow('16',$i,0),$decvalues[$number{$i}]), $decval);<br />    }<br />    return $decval;<br />}<br />&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="53325">  <div class="votes">
    <div id="Vu53325">
    <a href="/manual/vote-note.php?id=53325&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53325">
    <a href="/manual/vote-note.php?id=53325&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53325" title="68% like this...">
    8
    </div>
  </div>
  <a href="#53325" class="name">
  <strong class="user"><em>jrisken at mn dot rr dot com</em></strong></a><a class="genanchor" href="#53325"> &para;</a><div class="date" title="2005-05-28 07:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53325">
<div class="phpcode"><code><span class="html">A less elegant but (perhaps) faster way to pad is with substr with a negative length argument. I use it in this tiny function which formats computed rgb color codes for style sheets:<br />&lt;?<br />function toColor($n)<br />{<br />return("#".substr("000000".dechex($n),-6));<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="39634">  <div class="votes">
    <div id="Vu39634">
    <a href="/manual/vote-note.php?id=39634&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39634">
    <a href="/manual/vote-note.php?id=39634&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39634" title="70% like this...">
    4
    </div>
  </div>
  <a href="#39634" class="name">
  <strong class="user"><em>mina86 at tlen dot pl</em></strong></a><a class="genanchor" href="#39634"> &para;</a><div class="date" title="2004-02-05 09:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39634">
<div class="phpcode"><code><span class="html">Easiest :P way to create random hex color:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rand_color</span><span class="keyword">() {<br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="string">'00000' </span><span class="keyword">. </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0xffffff</span><span class="keyword">)), -</span><span class="default">6</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48114">  <div class="votes">
    <div id="Vu48114">
    <a href="/manual/vote-note.php?id=48114&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48114">
    <a href="/manual/vote-note.php?id=48114&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48114" title="69% like this...">
    5
    </div>
  </div>
  <a href="#48114" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#48114"> &para;</a><div class="date" title="2004-12-12 07:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48114">
<div class="phpcode"><code><span class="html">If you need to generate random HEX-color, use this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">random_hex_color</span><span class="keyword">(){<br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%02X%02X%02X"</span><span class="keyword">, </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br />}<br /></span><span class="default">$hex </span><span class="keyword">= </span><span class="default">random_hex_color</span><span class="keyword">(); </span><span class="comment">// 09B826<br /></span><span class="default">?&gt;<br /></span><br />Enjoy.</span></code></div>
  </div>
 </div>
  <div class="note" id="108024">  <div class="votes">
    <div id="Vu108024">
    <a href="/manual/vote-note.php?id=108024&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108024">
    <a href="/manual/vote-note.php?id=108024&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108024" title="66% like this...">
    1
    </div>
  </div>
  <a href="#108024" class="name">
  <strong class="user"><em>sneskid at hotmail dot com</em></strong></a><a class="genanchor" href="#108024"> &para;</a><div class="date" title="2012-03-23 07:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108024">
<div class="phpcode"><code><span class="html">If you want to create or parse signed Hex values:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// $d should be an int<br /></span><span class="keyword">function </span><span class="default">sdechex</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">) { return (</span><span class="default">$d</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">) ? (</span><span class="string">'-' </span><span class="keyword">. </span><span class="default">dechex</span><span class="keyword">(-</span><span class="default">$d</span><span class="keyword">)) : </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">); }<br /><br /></span><span class="comment">// $h should be a string<br /></span><span class="keyword">function </span><span class="default">shexdec</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">) { return (</span><span class="default">$h</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'-'</span><span class="keyword">) ? -(</span><span class="string">'0x' </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$h</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) + </span><span class="default">0</span><span class="keyword">) : (</span><span class="string">'0x' </span><span class="keyword">. </span><span class="default">$h </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">); }<br /><br /></span><span class="comment">// test<br /><br /></span><span class="default">$v </span><span class="keyword">= </span><span class="default">sdechex</span><span class="keyword">(-</span><span class="default">123</span><span class="keyword">); </span><span class="comment">// string(3) "-7b"<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">shexdec</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);   </span><span class="comment">// int(-123)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Also note that ('0x' . $str + 0) is faster than hexdec()</span></code></div>
  </div>
 </div>
  <div class="note" id="60158">  <div class="votes">
    <div id="Vu60158">
    <a href="/manual/vote-note.php?id=60158&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60158">
    <a href="/manual/vote-note.php?id=60158&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60158" title="66% like this...">
    1
    </div>
  </div>
  <a href="#60158" class="name">
  <strong class="user"><em>Mista-NiceGuy at web dot de</em></strong></a><a class="genanchor" href="#60158"> &para;</a><div class="date" title="2005-12-28 05:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60158">
<div class="phpcode"><code><span class="html">These are functions to convert roman numbers (e.g. MXC) into dec and vice versa.<br />Note: romdec() does not check whether a string is really roman or not. To force a user-input into a real roman number use decrom(romdec($input)). This will turn XXXX into XL for example.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">decrom</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">){<br />        </span><span class="default">$digits</span><span class="keyword">=array(<br />            </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"I"</span><span class="keyword">,<br />            </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">"IV"</span><span class="keyword">,<br />            </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="string">"V"</span><span class="keyword">,<br />            </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">"IX"</span><span class="keyword">,<br />            </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">"X"</span><span class="keyword">,<br />            </span><span class="default">40 </span><span class="keyword">=&gt; </span><span class="string">"XL"</span><span class="keyword">,<br />            </span><span class="default">50 </span><span class="keyword">=&gt; </span><span class="string">"L"</span><span class="keyword">,<br />            </span><span class="default">90 </span><span class="keyword">=&gt; </span><span class="string">"XC"</span><span class="keyword">,<br />            </span><span class="default">100 </span><span class="keyword">=&gt; </span><span class="string">"C"</span><span class="keyword">,<br />            </span><span class="default">400 </span><span class="keyword">=&gt; </span><span class="string">"CD"</span><span class="keyword">,<br />            </span><span class="default">500 </span><span class="keyword">=&gt; </span><span class="string">"D"</span><span class="keyword">,<br />            </span><span class="default">900 </span><span class="keyword">=&gt; </span><span class="string">"CM"</span><span class="keyword">,<br />            </span><span class="default">1000 </span><span class="keyword">=&gt; </span><span class="string">"M"<br />        </span><span class="keyword">);<br />        </span><span class="default">krsort</span><span class="keyword">(</span><span class="default">$digits</span><span class="keyword">);<br />        </span><span class="default">$retval</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />        foreach(</span><span class="default">$digits </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />            while(</span><span class="default">$dec</span><span class="keyword">&gt;=</span><span class="default">$key</span><span class="keyword">){<br />                </span><span class="default">$dec</span><span class="keyword">-=</span><span class="default">$key</span><span class="keyword">;<br />                </span><span class="default">$retval</span><span class="keyword">.=</span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">$retval</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">romdec</span><span class="keyword">(</span><span class="default">$rom</span><span class="keyword">){<br />        </span><span class="default">$digits</span><span class="keyword">=array(<br />            </span><span class="string">"I" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />            </span><span class="string">"V" </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">,<br />            </span><span class="string">"X" </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">,<br />            </span><span class="string">"L" </span><span class="keyword">=&gt; </span><span class="default">50</span><span class="keyword">,<br />            </span><span class="string">"C" </span><span class="keyword">=&gt; </span><span class="default">100</span><span class="keyword">,<br />            </span><span class="string">"D" </span><span class="keyword">=&gt; </span><span class="default">500</span><span class="keyword">,<br />            </span><span class="string">"M" </span><span class="keyword">=&gt; </span><span class="default">1000<br />        </span><span class="keyword">);<br />        </span><span class="default">$retval</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />        </span><span class="default">$chars</span><span class="keyword">=array();<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$rom</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$chars</span><span class="keyword">[]=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$rom</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        }<br />        </span><span class="default">$step</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">--){<br />            if(!isset(</span><span class="default">$digits</span><span class="keyword">[</span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]])){ return </span><span class="string">"Error!"</span><span class="keyword">; }<br />            if(</span><span class="default">$step</span><span class="keyword">&lt;=</span><span class="default">$digits</span><span class="keyword">[</span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]]){<br />                </span><span class="default">$step</span><span class="keyword">=</span><span class="default">$digits</span><span class="keyword">[</span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]];<br />                </span><span class="default">$retval</span><span class="keyword">+=</span><span class="default">$digits</span><span class="keyword">[</span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]];<br />            }<br />            else{<br />                </span><span class="default">$retval</span><span class="keyword">-=</span><span class="default">$digits</span><span class="keyword">[</span><span class="default">$chars</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]];<br />            }<br />        }<br />        return </span><span class="default">$retval</span><span class="keyword">;<br />    }<br /><br />    echo </span><span class="default">decrom</span><span class="keyword">(</span><span class="default">romdec</span><span class="keyword">(</span><span class="string">"XXXX"</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52449">  <div class="votes">
    <div id="Vu52449">
    <a href="/manual/vote-note.php?id=52449&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52449">
    <a href="/manual/vote-note.php?id=52449&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52449" title="62% like this...">
    4
    </div>
  </div>
  <a href="#52449" class="name">
  <strong class="user"><em>admin AT bobfrank DOT org</em></strong></a><a class="genanchor" href="#52449"> &para;</a><div class="date" title="2005-05-01 07:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52449">
<div class="phpcode"><code><span class="html">Here is a very small zeropadding that you can use for numbers:<br /><br />function zeropad($num, $lim)<br />{<br />   return (strlen($num) &gt;= $lim) ? $num : zeropad("0" . $num);<br />}<br /><br />zeropad("234",6);<br /><br />will produce:<br />000234<br /><br />zeropad("234",1);<br /><br />will produce:<br />234</span></code></div>
  </div>
 </div>
  <div class="note" id="25437">  <div class="votes">
    <div id="Vu25437">
    <a href="/manual/vote-note.php?id=25437&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25437">
    <a href="/manual/vote-note.php?id=25437&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25437" title="62% like this...">
    2
    </div>
  </div>
  <a href="#25437" class="name">
  <strong class="user"><em>monkyNOSPAM at phpfi dot org dot invalid</em></strong></a><a class="genanchor" href="#25437"> &para;</a><div class="date" title="2002-09-23 07:20"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25437">
<div class="phpcode"><code><span class="html">Here's how to use bitwise operations for RGB2hex conversion. This function returns hexadesimal rgb value just like one submitted by gurke@bigfoot.com above.<br /><br />function hexColor($color) {<br />  return dechex(($color[0]&lt;&lt;16)|($color[1]&lt;&lt;8)|$color[2]);<br />}<br /><br />example:<br /><br />$col[0] = 25;<br />$col[1] = 255;<br />$col[2] = 55;<br /><br />print hexColor($col);</span></code></div>
  </div>
 </div>
  <div class="note" id="86673">  <div class="votes">
    <div id="Vu86673">
    <a href="/manual/vote-note.php?id=86673&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86673">
    <a href="/manual/vote-note.php?id=86673&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86673" title="60% like this...">
    4
    </div>
  </div>
  <a href="#86673" class="name">
  <strong class="user"><em>jbleau at gmail dot com</em></strong></a><a class="genanchor" href="#86673"> &para;</a><div class="date" title="2008-10-29 02:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86673">
<div class="phpcode"><code><span class="html">I was confused by dechex's size limitation. Here is my solution to the problem. It supports much bigger values, as well as signs.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dec_to_hex</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$sign </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; </span><span class="comment">// suppress errors
<br />    </span><span class="keyword">if( </span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">){ </span><span class="default">$sign </span><span class="keyword">= </span><span class="string">"-"</span><span class="keyword">; </span><span class="default">$dec </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">); }
<br />
<br />    </span><span class="default">$hex </span><span class="keyword">= Array( </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">,
<br />                  </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">, </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="default">7</span><span class="keyword">, </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="default">8</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="default">9</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,
<br />                  </span><span class="default">11 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">12 </span><span class="keyword">=&gt; </span><span class="string">'c'</span><span class="keyword">, </span><span class="default">13 </span><span class="keyword">=&gt; </span><span class="string">'d'</span><span class="keyword">, </span><span class="default">14 </span><span class="keyword">=&gt; </span><span class="string">'e'</span><span class="keyword">,    
<br />                  </span><span class="default">15 </span><span class="keyword">=&gt; </span><span class="string">'f' </span><span class="keyword">);
<br />        
<br />    do
<br />    {
<br />        </span><span class="default">$h </span><span class="keyword">= </span><span class="default">$hex</span><span class="keyword">[(</span><span class="default">$dec</span><span class="keyword">%</span><span class="default">16</span><span class="keyword">)] . </span><span class="default">$h</span><span class="keyword">;
<br />        </span><span class="default">$dec </span><span class="keyword">/= </span><span class="default">16</span><span class="keyword">;
<br />    }
<br />    while( </span><span class="default">$dec </span><span class="keyword">&gt;= </span><span class="default">1 </span><span class="keyword">);
<br />    
<br />    return </span><span class="default">$sign </span><span class="keyword">. </span><span class="default">$h</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117197">  <div class="votes">
    <div id="Vu117197">
    <a href="/manual/vote-note.php?id=117197&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117197">
    <a href="/manual/vote-note.php?id=117197&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117197" title="60% like this...">
    1
    </div>
  </div>
  <a href="#117197" class="name">
  <strong class="user"><em>delchodimi at gmail dot com</em></strong></a><a class="genanchor" href="#117197"> &para;</a><div class="date" title="2015-04-30 02:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117197">
<div class="phpcode"><code><span class="html">I like the example with the bitwise operations but if the value of color[0] is less than 16 it's not accurate:<br />example:<br />color[0]: 0;<br />color[1]: 0;<br />color[2]: 255;<br /> function hexColor($color) {<br />  return dechex(($color[0]&lt;&lt;16)|($color[1]&lt;&lt;8)|$color[2]);<br />}<br />It returns "ff", which is not legit RGB color...<br />so my solution is to combine the function above with: <br />function toColor($n)<br />{<br />return("#".substr("000000".dechex($n),-6));<br />}<br /><br />If you gotta deal with array of rgb values this is my solution:<br />------------------------------------------------------<br />function hexColor($color) {<br />    $rgb = dechex(($color[0]&lt;&lt;16)|($color[1]&lt;&lt;8)|$color[2]);<br />    return("#".substr("000000".$rgb, -6));<br />}<br />------------------------------------------------------</span></code></div>
  </div>
 </div>
  <div class="note" id="35843">  <div class="votes">
    <div id="Vu35843">
    <a href="/manual/vote-note.php?id=35843&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35843">
    <a href="/manual/vote-note.php?id=35843&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35843" title="60% like this...">
    2
    </div>
  </div>
  <a href="#35843" class="name">
  <strong class="user"><em>huda m elmatsani &lt;justhuda at netscape dot net&gt;</em></strong></a><a class="genanchor" href="#35843"> &para;</a><div class="date" title="2003-09-16 03:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35843">
<div class="phpcode"><code><span class="html">Create Random Hex Color:<br /><br />function make_seed() { <br />   list($usec, $sec) = explode(' ', microtime()); <br />   return (float) $sec + ((double) $usec * 100000); <br />} <br /><br />function rand_hex() {<br />   mt_srand(make_seed()); <br />   $randval = mt_rand(0,255);<br />   //convert to hex<br />   return sprintf("%02X",$randval);<br />}<br /><br />function random_color(){<br />   return "#".rand_hex().rand_hex().rand_hex();<br />}<br /><br />hme ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="107816">  <div class="votes">
    <div id="Vu107816">
    <a href="/manual/vote-note.php?id=107816&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107816">
    <a href="/manual/vote-note.php?id=107816&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107816" title="57% like this...">
    3
    </div>
  </div>
  <a href="#107816" class="name">
  <strong class="user"><em>andries at centim dot be</em></strong></a><a class="genanchor" href="#107816"> &para;</a><div class="date" title="2012-03-07 02:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107816">
<div class="phpcode"><code><span class="html">If you need to convert a large number (&gt; PHP_MAX_INT) to a hex value, simply use base_convert. For example:<br /><br />base_convert('2190964402', 10, 16); // 829776b2</span></code></div>
  </div>
 </div>
  <div class="note" id="83122">  <div class="votes">
    <div id="Vu83122">
    <a href="/manual/vote-note.php?id=83122&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83122">
    <a href="/manual/vote-note.php?id=83122&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83122" title="57% like this...">
    1
    </div>
  </div>
  <a href="#83122" class="name">
  <strong class="user"><em>mountarreat at gmail dot com</em></strong></a><a class="genanchor" href="#83122"> &para;</a><div class="date" title="2008-05-11 09:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83122">
<div class="phpcode"><code><span class="html">I was challenged by a problem with large number calculations and conversion to hex within php. The calculation exceeded unsigned integer and even float range. You can easily change it for your needs but it is, thanks to bcmath, capable of handling big numbers via string. This function will convert them to hex.
<br />
<br />In this specific example though, since I use it for game internals that can only handle 32 bit numbers, it will truncate calculations at 8 digits. If the input is 1 for example it will be filled up with zeros. Output 00000001h.
<br />
<br />Of course I don't claim it to be a good one, but it works for me and my purpose. Suggestions on faster code welcome!
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Turns numbers into 32-bit hex string; Fills up zeros
<br /></span><span class="keyword">function </span><span class="default">lrgDec2Hex</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$hex </span><span class="keyword">= array();
<br />
<br />    while(</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {
<br />        if(</span><span class="default">$number </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);
<br />        }
<br />        else {
<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="string">'16'</span><span class="keyword">))));
<br />            </span><span class="default">$number </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="string">'16'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">$i</span><span class="keyword">++;
<br />    }
<br />    </span><span class="default">krsort</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">);
<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48102">  <div class="votes">
    <div id="Vu48102">
    <a href="/manual/vote-note.php?id=48102&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48102">
    <a href="/manual/vote-note.php?id=48102&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48102" title="54% like this...">
    1
    </div>
  </div>
  <a href="#48102" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#48102"> &para;</a><div class="date" title="2004-12-11 01:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48102">
<div class="phpcode"><code><span class="html">If you need to convert RGB-color into HEX-color, use this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rgb2hex</span><span class="keyword">(</span><span class="default">$rgb</span><span class="keyword">){<br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%06X"</span><span class="keyword">, </span><span class="default">$rgb</span><span class="keyword">);<br />}<br /></span><span class="default">$hex </span><span class="keyword">= </span><span class="default">rgb2hex</span><span class="keyword">(</span><span class="default">65280</span><span class="keyword">); </span><span class="comment">// 00FF00<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127334">  <div class="votes">
    <div id="Vu127334">
    <a href="/manual/vote-note.php?id=127334&amp;page=function.dechex&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127334">
    <a href="/manual/vote-note.php?id=127334&amp;page=function.dechex&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127334" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127334" class="name">
  <strong class="user"><em>mahdiyari</em></strong></a><a class="genanchor" href="#127334"> &para;</a><div class="date" title="2022-07-24 11:45"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127334">
<div class="phpcode"><code><span class="html">Zero padded hex strings as a pair of 2 (8bit).<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">dec2hex</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">) {<br />  </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">);<br />  if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">)%</span><span class="default">2 </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$hex</span><span class="keyword">;<br />}<br /><br /></span><span class="default">dec2hex</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// 02<br /></span><span class="default">dec2hex</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">); </span><span class="comment">// 0a<br /></span><span class="default">dec2hex</span><span class="keyword">(</span><span class="default">256</span><span class="keyword">); </span><span class="comment">// 0100<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dechex&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dechex.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.math.php">Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.abs.php" title="abs">abs</a>
                        </li>
                                                <li class="">
                            <a href="function.acos.php" title="acos">acos</a>
                        </li>
                                                <li class="">
                            <a href="function.acosh.php" title="acosh">acosh</a>
                        </li>
                                                <li class="">
                            <a href="function.asin.php" title="asin">asin</a>
                        </li>
                                                <li class="">
                            <a href="function.asinh.php" title="asinh">asinh</a>
                        </li>
                                                <li class="">
                            <a href="function.atan.php" title="atan">atan</a>
                        </li>
                                                <li class="">
                            <a href="function.atan2.php" title="atan2">atan2</a>
                        </li>
                                                <li class="">
                            <a href="function.atanh.php" title="atanh">atanh</a>
                        </li>
                                                <li class="">
                            <a href="function.base-convert.php" title="base_&#8203;convert">base_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.bindec.php" title="bindec">bindec</a>
                        </li>
                                                <li class="">
                            <a href="function.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.cos.php" title="cos">cos</a>
                        </li>
                                                <li class="">
                            <a href="function.cosh.php" title="cosh">cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.decbin.php" title="decbin">decbin</a>
                        </li>
                                                <li class="current">
                            <a href="function.dechex.php" title="dechex">dechex</a>
                        </li>
                                                <li class="">
                            <a href="function.decoct.php" title="decoct">decoct</a>
                        </li>
                                                <li class="">
                            <a href="function.deg2rad.php" title="deg2rad">deg2rad</a>
                        </li>
                                                <li class="">
                            <a href="function.exp.php" title="exp">exp</a>
                        </li>
                                                <li class="">
                            <a href="function.expm1.php" title="expm1">expm1</a>
                        </li>
                                                <li class="">
                            <a href="function.fdiv.php" title="fdiv">fdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="function.fmod.php" title="fmod">fmod</a>
                        </li>
                                                <li class="">
                            <a href="function.fpow.php" title="fpow">fpow</a>
                        </li>
                                                <li class="">
                            <a href="function.hexdec.php" title="hexdec">hexdec</a>
                        </li>
                                                <li class="">
                            <a href="function.hypot.php" title="hypot">hypot</a>
                        </li>
                                                <li class="">
                            <a href="function.intdiv.php" title="intdiv">intdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.is-finite.php" title="is_&#8203;finite">is_&#8203;finite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-infinite.php" title="is_&#8203;infinite">is_&#8203;infinite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-nan.php" title="is_&#8203;nan">is_&#8203;nan</a>
                        </li>
                                                <li class="">
                            <a href="function.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="function.log10.php" title="log10">log10</a>
                        </li>
                                                <li class="">
                            <a href="function.log1p.php" title="log1p">log1p</a>
                        </li>
                                                <li class="">
                            <a href="function.max.php" title="max">max</a>
                        </li>
                                                <li class="">
                            <a href="function.min.php" title="min">min</a>
                        </li>
                                                <li class="">
                            <a href="function.octdec.php" title="octdec">octdec</a>
                        </li>
                                                <li class="">
                            <a href="function.pi.php" title="pi">pi</a>
                        </li>
                                                <li class="">
                            <a href="function.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="function.rad2deg.php" title="rad2deg">rad2deg</a>
                        </li>
                                                <li class="">
                            <a href="function.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="function.sin.php" title="sin">sin</a>
                        </li>
                                                <li class="">
                            <a href="function.sinh.php" title="sinh">sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.tan.php" title="tan">tan</a>
                        </li>
                                                <li class="">
                            <a href="function.tanh.php" title="tanh">tanh</a>
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
