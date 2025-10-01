<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="oci8.connection.php">
          OCI8 Connection Handling and Connection Pooling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      </ul>
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
            <option value='en/oci8.examples.php' selected="selected">English</option>
            <option value='de/oci8.examples.php'>German</option>
            <option value='es/oci8.examples.php'>Spanish</option>
            <option value='fr/oci8.examples.php'>French</option>
            <option value='it/oci8.examples.php'>Italian</option>
            <option value='ja/oci8.examples.php'>Japanese</option>
            <option value='pt_BR/oci8.examples.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.examples.php'>Russian</option>
            <option value='tr/oci8.examples.php'>Turkish</option>
            <option value='uk/oci8.examples.php'>Ukrainian</option>
            <option value='zh/oci8.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.examples" class="chapter">
 <h1 class="title">Examples</h1>

 <p class="para">
  These examples connect as the <code class="literal">HR</code> user, which is
  the sample &quot;Human Resources&quot; schema supplied with the
  Oracle database. The account may need to be unlocked and the
  password reset before you can use it.
 </p>

 <p class="para">
  The examples connect to the <code class="literal">XE</code> database on your
  machine.  Change the connect string to your database before running
  the examples.
 </p>

 <div class="example" id="example-1932">
  <p><strong>Example #1 Basic query</strong></p>
  <div class="example-contents"><p>
   This shows querying and displaying results.  Statements in OCI8 use
   a prepare-execute-fetch sequence of steps.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Prepare the statement<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT * FROM departments'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$stid</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Perform the logic of the query<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$r</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Fetch the results of the query<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"&lt;table border='1'&gt;\n"</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) {<br />    print </span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />    foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />        print </span><span style="color: #DD0000">"    &lt;td&gt;" </span><span style="color: #007700">. (</span><span style="color: #0000BB">$item </span><span style="color: #007700">!== </span><span style="color: #0000BB">null </span><span style="color: #007700">? </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">) : </span><span style="color: #DD0000">"&amp;nbsp;"</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;/td&gt;\n"</span><span style="color: #007700">;<br />    }<br />    print </span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}<br />print </span><span style="color: #DD0000">"&lt;/table&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1933">
  <p><strong>Example #2 Inserting with bind variables</strong></p>
  <div class="example-contents"><p>
   Bind variables improve performance by allowing reuse of execution
   contexts and caches.  Bind variables improve security by preventing
   some kinds of SQL Injection problems.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Before running, create the table:<br />//   CREATE TABLE MYTABLE (mid NUMBER, myd VARCHAR2(20));<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'INSERT INTO MYTABLE (mid, myd) VALUES(:myid, :mydata)'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">60</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #DD0000">'Some data'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':myid'</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':mydata'</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);  </span><span style="color: #FF8000">// executes and commits<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$r</span><span style="color: #007700">) {<br />    print </span><span style="color: #DD0000">"One row inserted"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1934">
  <p><strong>Example #3 Binding in the WHERE clause of a query</strong></p>
  <div class="example-contents"><p>
   This shows a single scalar bind.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"hr"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hrpwd"</span><span style="color: #007700">, </span><span style="color: #DD0000">"localhost/XE"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT last_name FROM employees WHERE department_id = :didbv ORDER BY last_name'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$didbv </span><span style="color: #007700">= </span><span style="color: #0000BB">60</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':didbv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$didbv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'LAST_NAME'</span><span style="color: #007700">] .</span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Output is<br />//    Austin<br />//    Ernst<br />//    Hunold<br />//    Lorentz<br />//    Pataballa<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1935">
  <p><strong>Example #4 Inserting and fetching a CLOB</strong></p>
  <div class="example-contents"><p>
   For large data use binary long object (BLOB) or character long
   object (CLOB) types.  This example uses CLOB.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Before running, create the table:<br />//     CREATE TABLE MYTABLE (mykey NUMBER, myclob CLOB);<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$mykey </span><span style="color: #007700">= </span><span style="color: #0000BB">12343</span><span style="color: #007700">;  </span><span style="color: #FF8000">// arbitrary key for this example;<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO mytable (mykey, myclob)<br />        VALUES (:mykey, EMPTY_CLOB())<br />        RETURNING myclob INTO :myclob"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_LOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":mykey"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mykey</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":myclob"</span><span style="color: #007700">, </span><span style="color: #0000BB">$clob</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_CLOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_NO_AUTO_COMMIT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #DD0000">"A very long string"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Fetching CLOB data<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT myclob FROM mytable WHERE mykey = :mykey'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse </span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":mykey"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mykey</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">'&lt;table border="1"&gt;'</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_LOBS</span><span style="color: #007700">)) {<br />    print </span><span style="color: #DD0000">'&lt;tr&gt;&lt;td&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'MYCLOB'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&lt;/td&gt;&lt;/tr&gt;'</span><span style="color: #007700">;<br />    </span><span style="color: #FF8000">// In a loop, freeing the large variable before the 2nd fetch reduces PHP's peak memory usage<br />    </span><span style="color: #007700">unset(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);  <br />}<br />print </span><span style="color: #DD0000">'&lt;/table&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1936">
  <p><strong>Example #5 Using a PL/SQL stored function</strong></p>
  <div class="example-contents"><p>
   You must bind a variable for the return value and optionally for
   any PL/SQL function arguments.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running the PHP program, create a stored function in<br />  SQL*Plus or SQL Developer:<br /><br />  CREATE OR REPLACE FUNCTION myfunc(p IN NUMBER) RETURN NUMBER AS<br />  BEGIN<br />      RETURN p * 3;<br />  END;<br /><br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'begin :r := myfunc(:p); end;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':r'</span><span style="color: #007700">, </span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$r</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// prints 24<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1937">
  <p><strong>Example #6 Using a PL/SQL stored procedure</strong></p>
  <div class="example-contents"><p>
   With stored procedures, you should bind variables for any arguments.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running the PHP program, create a stored procedure in<br />  SQL*Plus or SQL Developer:<br /><br />  CREATE OR REPLACE PROCEDURE myproc(p1 IN NUMBER, p2 OUT NUMBER) AS<br />  BEGIN<br />      p2 := p1 * 2;<br />  END;<br /><br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$p1 </span><span style="color: #007700">= </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'begin myproc(:p1, :p2); end;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p2'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p2</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$p2</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// prints 16<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>

 <div class="example" id="example-1938">
  <p><strong>Example #7 Calling a PL/SQL function that returns a <code class="literal">REF CURSOR</code></strong></p>
  <div class="example-contents"><p>
   Each returned value from the query is a <code class="literal">REF
   CURSOR</code> that can be fetched from.
  </p></div>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br />  Create the PL/SQL stored function as:<br /><br />  CREATE OR REPLACE FUNCTION myfunc(p1 IN NUMBER) RETURN SYS_REFCURSOR AS<br />      rc SYS_REFCURSOR;<br />  BEGIN<br />      OPEN rc FOR SELECT city FROM locations WHERE ROWNUM &lt; p1;<br />      RETURN rc;<br />  END;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT myfunc(5) AS mfrc FROM dual'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"&lt;table border='1'&gt;\n"</span><span style="color: #007700">;<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">))) {<br />    echo </span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$rc </span><span style="color: #007700">= </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'MFRC'</span><span style="color: #007700">];<br />    </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$rc</span><span style="color: #007700">);  </span><span style="color: #FF8000">// returned column value from the query is a ref cursor<br />    </span><span style="color: #007700">while ((</span><span style="color: #0000BB">$rc_row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$rc</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">))) {   <br />        echo </span><span style="color: #DD0000">"    &lt;td&gt;" </span><span style="color: #007700">. </span><span style="color: #0000BB">$rc_row</span><span style="color: #007700">[</span><span style="color: #DD0000">'CITY'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;/td&gt;\n"</span><span style="color: #007700">;<br />    }<br />    </span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$rc</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #DD0000">"&lt;/table&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Output is:<br />//   Beijing<br />//   Bern<br />//   Bombay<br />//   Geneva<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.oci8.php">OCI8</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.oci8.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="oci8.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="oci8.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="oci8.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.taf.php" title="OCI8 Transparent Application Failover (TAF) Support">OCI8 Transparent Application Failover (TAF) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.dtrace.php" title="OCI8 and DTrace Dynamic Tracing">OCI8 and DTrace Dynamic Tracing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.datatypes.php" title="Supported Datatypes">Supported Datatypes</a>
                        </li>
                                                <li class="">
                            <a href="ref.oci8.php" title="OCI8 Functions">OCI8 Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ocicollection.php" title="OCICollection">OCICollection</a>
                        </li>
                                                <li class="">
                            <a href="class.ocilob.php" title="OCILob">OCILob</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.oci8.php" title="OCI8 Obsolete Aliases and Functions">OCI8 Obsolete Aliases and Functions</a>
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
