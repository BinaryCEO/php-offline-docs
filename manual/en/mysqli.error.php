<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::$error - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.error.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.error.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.error.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.errno.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.error-list.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.error.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.error.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.error.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.error.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.error.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.error.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.error.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.error.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.error.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.error.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.error.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a string description of the last error" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::$error - Manual" />
<meta name="twitter:description" content="Returns a string description of the last error" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::$error - Manual" />
<meta itemprop="description" content="Returns a string description of the last error" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a string description of the last error" />

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
        <a href="mysqli.error-list.php">
          mysqli::$error_list &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.errno.php">
          &laquo; mysqli::$errno        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli.php'>mysqli</a></li>      </ul>
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
            <option value='en/mysqli.error.php' selected="selected">English</option>
            <option value='de/mysqli.error.php'>German</option>
            <option value='es/mysqli.error.php'>Spanish</option>
            <option value='fr/mysqli.error.php'>French</option>
            <option value='it/mysqli.error.php'>Italian</option>
            <option value='ja/mysqli.error.php'>Japanese</option>
            <option value='pt_BR/mysqli.error.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.error.php'>Russian</option>
            <option value='tr/mysqli.error.php'>Turkish</option>
            <option value='uk/mysqli.error.php'>Ukrainian</option>
            <option value='zh/mysqli.error.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.error" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::$error</h1>
  <h1 class="refname">mysqli_error</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::$error</span> -- <span class="refname">mysqli_error</span> &mdash; <span class="dc-title">Returns a string description of the last error</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.error-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="fieldsynopsis"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <var class="varname"><a href="mysqli.error.php">$mysqli-&gt;error</a></var>;</div>

  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mysqli_error</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns the last error message for the most recent MySQLi function call
   that can succeed or fail.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.error-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.error-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    A string that describes the error. An empty string if no error occurred.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.error-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1589">
   <p><strong>Example #1 <var class="varname">$mysqli->error</var> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect_errno</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect_error</span><span style="color: #007700">);<br />    exit();<br />}<br /><br />if (!</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SET a=1"</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Error message: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br />if (!</span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SET a=1"</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Error message: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">mysqli_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Error message: Unknown system variable &#039;a&#039;</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.error-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.connect-errno.php" class="function" rel="rdfs-seeAlso">mysqli_connect_errno()</a> - Returns the error code from last connect call</span></li>
    <li><span class="function"><a href="mysqli.connect-error.php" class="function" rel="rdfs-seeAlso">mysqli_connect_error()</a> - Returns a description of the last connection error</span></li>
    <li><span class="function"><a href="mysqli.errno.php" class="function" rel="rdfs-seeAlso">mysqli_errno()</a> - Returns the error code for the most recent function call</span></li>
    <li><span class="function"><a href="mysqli.sqlstate.php" class="function" rel="rdfs-seeAlso">mysqli_sqlstate()</a> - Returns the SQLSTATE error from previous MySQL operation</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/error.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.error%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.error.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="61044">  <div class="votes">
    <div id="Vu61044">
    <a href="/manual/vote-note.php?id=61044&amp;page=mysqli.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61044">
    <a href="/manual/vote-note.php?id=61044&amp;page=mysqli.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61044" title="60% like this...">
    17
    </div>
  </div>
  <a href="#61044" class="name">
  <strong class="user"><em>information at saunderswebsolutions dot com</em></strong></a><a class="genanchor" href="#61044"> &para;</a><div class="date" title="2006-01-24 02:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61044">
<div class="phpcode"><code><span class="html">The mysqli_sql_exception class is not available to PHP 5.05<br /><br />I used this code to catch errors <br /><span class="default">&lt;?php<br />$query </span><span class="keyword">= </span><span class="string">"SELECT XXname FROM customer_table "</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br />if (!</span><span class="default">$res</span><span class="keyword">) {<br />   </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Errormessage: %s\n"</span><span class="keyword">, </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span>The problem with this is that valid values for $res are: a mysqli_result object , true or false<br />This doesn't tell us that there has been an error with the sql used.<br />If you pass an update statement, false is a valid result if the update fails.<br /><br />So, a better way is:<br /><span class="default">&lt;?php<br />$query </span><span class="keyword">= </span><span class="string">"SELECT XXname FROM customer_table "</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br />if (!</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">) {<br />   </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Errormessage: %s\n"</span><span class="keyword">, </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This would output something like:<br />Unexpected PHP error [mysqli::query() [&lt;a href='function.query'&gt;function.query&lt;/a&gt;]: (42S22/1054): Unknown column 'XXname' in 'field list'] severity [E_WARNING] in [G:\database.php] line [249]<br /><br />Very frustrating as I wanted to also catch the sql error and print out the stack trace. <br /><br />A better way is:<br /><br /><span class="default">&lt;?php<br />mysqli_report</span><span class="keyword">(</span><span class="default">MYSQLI_REPORT_OFF</span><span class="keyword">); </span><span class="comment">//Turn off irritating default messages<br /><br /></span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"my_user"</span><span class="keyword">, </span><span class="string">"my_password"</span><span class="keyword">, </span><span class="string">"world"</span><span class="keyword">);<br /><br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT XXname FROM customer_table "</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">) {<br />    try {    <br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"MySQL error </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="string"> &lt;br&gt; Query:&lt;br&gt; </span><span class="default">$query</span><span class="string">"</span><span class="keyword">, </span><span class="default">$msqli</span><span class="keyword">-&gt;</span><span class="default">errno</span><span class="keyword">);    <br />    } catch(</span><span class="default">Exception $e </span><span class="keyword">) {<br />        echo </span><span class="string">"Error No: "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">(). </span><span class="string">" - "</span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"&lt;br &gt;"</span><span class="keyword">;<br />        echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">());<br />    }<br />}<br /><br /></span><span class="comment">//Do stuff with the result<br /></span><span class="default">?&gt;<br /></span>Prints out something like:<br />Error No: 1054<br />Unknown column 'XXname' in 'field list'<br />Query: <br />SELECT XXname FROM customer_table<br /><br />#0 G:\\database.php(251): database-&gt;dbError('Unknown column ...', 1054, 'getQuery()', 'SELECT XXname F...')<br />#1 G:\data\WorkSites\1framework5\tests\dbtest.php(29): database-&gt;getString('SELECT XXname F...')<br />#2 c:\PHP\includes\simpletest\runner.php(58): testOfDB-&gt;testGetVal()<br />#3 c:\PHP\includes\simpletest\runner.php(96): SimpleInvoker-&gt;invoke('testGetVal')<br />#4 c:\PHP\includes\simpletest\runner.php(125): SimpleInvokerDecorator-&gt;invoke('testGetVal')<br />#5 c:\PHP\includes\simpletest\runner.php(183): SimpleErrorTrappingInvoker-&gt;invoke('testGetVal')<br />#6 c:\PHP\includes\simpletest\simple_test.php(90): SimpleRunner-&gt;run()<br />#7 c:\PHP\includes\simpletest\simple_test.php(498): SimpleTestCase-&gt;run(Object(HtmlReporter))<br />#8 c:\PHP\includes\simpletest\simple_test.php(500): GroupTest-&gt;run(Object(HtmlReporter))<br />#9 G:\all_tests.php(16): GroupTest-&gt;run(Object(HtmlReporter))<br /><br />This will actually print out the error, a stack trace and the offending sql statement. Much more helpful when the sql statement is generated somewhere else in the code.</span></code></div>
  </div>
 </div>
  <div class="note" id="64770">  <div class="votes">
    <div id="Vu64770">
    <a href="/manual/vote-note.php?id=64770&amp;page=mysqli.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64770">
    <a href="/manual/vote-note.php?id=64770&amp;page=mysqli.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64770" title="64% like this...">
    9
    </div>
  </div>
  <a href="#64770" class="name">
  <strong class="user"><em>se (at) brainbits (dot) net</em></strong></a><a class="genanchor" href="#64770"> &para;</a><div class="date" title="2006-04-20 05:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64770">
<div class="phpcode"><code><span class="html">The decription "mysqli_error -- Returns a string description of the LAST error" is not exactly that what you get from mysqli_error. You get the error description from the last mysqli-function, not from the last mysql-error.<br /><br />If you have the following situation<br /><br />if (!$mysqli-&gt;query("SET a=1")) {<br />   $mysqli-&gt;query("ROLLBACK;")<br />   printf("Errormessage: %s\n", $mysqli-&gt;error);<br />}<br /><br />you don't get an error-message, if the ROLLBACK-Query didn't failed, too. In order to get the right error-message you have to write:<br /><br />if (!$mysqli-&gt;query("SET a=1")) {<br />   printf("Errormessage: %s\n", $mysqli-&gt;error);<br />   $mysqli-&gt;query("ROLLBACK;")<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="116849">  <div class="votes">
    <div id="Vu116849">
    <a href="/manual/vote-note.php?id=116849&amp;page=mysqli.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116849">
    <a href="/manual/vote-note.php?id=116849&amp;page=mysqli.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116849" title="60% like this...">
    6
    </div>
  </div>
  <a href="#116849" class="name">
  <strong class="user"><em>callforeach at gmail dot com</em></strong></a><a class="genanchor" href="#116849"> &para;</a><div class="date" title="2015-03-10 01:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116849">
<div class="phpcode"><code><span class="html">I had to set mysqli_report(MYSQLI_REPORT_ALL) at the begin of my script to be able to catch mysqli errors within the catch block of my php code.<br /><br />Initially, I used the below code to throw and subsequent catch mysqli exceptions<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />   </span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="string">'root'</span><span class="keyword">,</span><span class="string">'pwd'</span><span class="keyword">,</span><span class="string">'db'</span><span class="keyword">);<br />    if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">connect_errno</span><span class="keyword">) <br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">connect_error</span><span class="keyword">);<br /><br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />     echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /><br /></span><span class="default">I realized the exception was being thrown before the actual </span><span class="keyword">throw </span><span class="default">statement </span><span class="keyword">and </span><span class="default">hence the </span><span class="keyword">catch </span><span class="default">block was not being called</span><span class="keyword">.<br /><br /></span><span class="default">My current code looks like<br />mysqli_report</span><span class="keyword">(</span><span class="default">MYSQLI_REPORT_ALL</span><span class="keyword">) ;<br />try {<br />      </span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="string">'root'</span><span class="keyword">,</span><span class="string">'pwd'</span><span class="keyword">,</span><span class="string">'db'</span><span class="keyword">);<br />      </span><span class="comment">/* I don't need to throw the exception, it's being thrown automatically */<br /><br /></span><span class="keyword">} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /><br /></span><span class="default">This works fine </span><span class="keyword">and </span><span class="default">I</span><span class="string">'m able to trap all mysqli errors</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113587">  <div class="votes">
    <div id="Vu113587">
    <a href="/manual/vote-note.php?id=113587&amp;page=mysqli.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113587">
    <a href="/manual/vote-note.php?id=113587&amp;page=mysqli.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113587" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#113587" class="name">
  <strong class="user"><em>asmith16 at littlesvr dot ca</em></strong></a><a class="genanchor" href="#113587"> &para;</a><div class="date" title="2013-11-01 11:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113587">
<div class="phpcode"><code><span class="html">Please note that the string returned may contain data initially provided by the user, possibly making your code vulnerable to XSS. <br /><br />So even if you escape everything in your SQL query using mysqli_real_escape_string(), make sure that if you plan to display the string returned by mysqli_error() you run that string through htmlspecialchars().<br /><br />As far as I can tell the two escape functions don't escape the same characters, which is why you need both (the first for SQL and the second for HTML/JS).</span></code></div>
  </div>
 </div>
  <div class="note" id="127549">  <div class="votes">
    <div id="Vu127549">
    <a href="/manual/vote-note.php?id=127549&amp;page=mysqli.error&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127549">
    <a href="/manual/vote-note.php?id=127549&amp;page=mysqli.error&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127549" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#127549" class="name">
  <strong class="user"><em>abderrahmanekaddour dot aissat at gmail dot com</em></strong></a><a class="genanchor" href="#127549"> &para;</a><div class="date" title="2022-08-28 09:33"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127549">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// The idea is the add formated errors information for developers to easier bugs detection.<br /><br /></span><span class="default">$myfile </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"database_log.log"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">,</span><span class="string">"root"</span><span class="keyword">,</span><span class="string">"data"</span><span class="keyword">);<br />if(!</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SELECT"</span><span class="keyword">)){<br />  </span><span class="default">$timestamp </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">();<br />  </span><span class="default">$data_err </span><span class="keyword">= </span><span class="string">" {<br />     \"title\": \" Select statement error \",<br />     \"date_time\": "</span><span class="keyword">.</span><span class="default">$timestamp</span><span class="keyword">-&gt;</span><span class="default">getTimestamp</span><span class="keyword">().</span><span class="string">",<br />     \"error\":\" "</span><span class="keyword">.</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">.</span><span class="string">" \"<br />     } "</span><span class="keyword">; </span><span class="comment">// Do more information <br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">, </span><span class="default">$data_err</span><span class="keyword">); </span><span class="comment">// writing data<br /></span><span class="keyword">}<br />    </span><span class="comment">// In separate file do file read and format it for good visual.<br /><br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();  <br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.error&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.error.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.autocommit.php" title="autocommit">autocommit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.begin-transaction.php" title="begin_&#8203;transaction">begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.change-user.php" title="change_&#8203;user">change_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.character-set-name.php" title="character_&#8203;set_&#8203;name">character_&#8203;set_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-errno.php" title="$connect_&#8203;errno">$connect_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-error.php" title="$connect_&#8203;error">$connect_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.dump-debug-info.php" title="dump_&#8203;debug_&#8203;info">dump_&#8203;debug_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.execute-query.php" title="execute_&#8203;query">execute_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-charset.php" title="get_&#8203;charset">get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-info.php" title="$client_&#8203;info">$client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-version.php" title="$client_&#8203;version">$client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-connection-stats.php" title="get_&#8203;connection_&#8203;stats">get_&#8203;connection_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-host-info.php" title="$host_&#8203;info">$host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-proto-info.php" title="$protocol_&#8203;version">$protocol_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-info.php" title="$server_&#8203;info">$server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-version.php" title="$server_&#8203;version">$server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.info.php" title="$info">$info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.multi-query.php" title="multi_&#8203;query">multi_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.poll.php" title="poll">poll</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-connect.php" title="real_&#8203;connect">real_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-escape-string.php" title="real_&#8203;escape_&#8203;string">real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-query.php" title="real_&#8203;query">real_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.reap-async-query.php" title="reap_&#8203;async_&#8203;query">reap_&#8203;async_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.release-savepoint.php" title="release_&#8203;savepoint">release_&#8203;savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.rollback.php" title="rollback">rollback</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.savepoint.php" title="savepoint">savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.select-db.php" title="select_&#8203;db">select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.set-charset.php" title="set_&#8203;charset">set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.ssl-set.php" title="ssl_&#8203;set">ssl_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stmt-init.php" title="stmt_&#8203;init">stmt_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-id.php" title="$thread_&#8203;id">$thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-safe.php" title="thread_&#8203;safe">thread_&#8203;safe</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.use-result.php" title="use_&#8203;result">use_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.warning-count.php" title="$warning_&#8203;count">$warning_&#8203;count</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="mysqli.init.php" title="init">init</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.kill.php" title="kill">kill</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.ping.php" title="ping">ping</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.refresh.php" title="refresh">refresh</a>
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
