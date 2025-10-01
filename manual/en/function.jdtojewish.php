<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: jdtojewish - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.jdtojewish.php">
 <link rel="shorturl" href="https://www.php.net/jdtojewish">
 <link rel="alternate" href="https://www.php.net/jdtojewish" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.jdtogregorian.php">
 <link rel="next" href="https://www.php.net/manual/en/function.jdtojulian.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.jdtojewish.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.jdtojewish.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.jdtojewish.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.jdtojewish.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.jdtojewish.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.jdtojewish.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.jdtojewish.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.jdtojewish.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.jdtojewish.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.jdtojewish.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.jdtojewish.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts a Julian day count to a Jewish calendar date" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: jdtojewish - Manual" />
<meta name="twitter:description" content="Converts a Julian day count to a Jewish calendar date" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: jdtojewish - Manual" />
<meta itemprop="description" content="Converts a Julian day count to a Jewish calendar date" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts a Julian day count to a Jewish calendar date" />

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
        <a href="function.jdtojulian.php">
          jdtojulian &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.jdtogregorian.php">
          &laquo; jdtogregorian        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.calendar.php'>Calendar</a></li>      <li><a href='ref.calendar.php'>Calendar Functions</a></li>      </ul>
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
            <option value='en/function.jdtojewish.php' selected="selected">English</option>
            <option value='de/function.jdtojewish.php'>German</option>
            <option value='es/function.jdtojewish.php'>Spanish</option>
            <option value='fr/function.jdtojewish.php'>French</option>
            <option value='it/function.jdtojewish.php'>Italian</option>
            <option value='ja/function.jdtojewish.php'>Japanese</option>
            <option value='pt_BR/function.jdtojewish.php'>Brazilian Portuguese</option>
            <option value='ru/function.jdtojewish.php'>Russian</option>
            <option value='tr/function.jdtojewish.php'>Turkish</option>
            <option value='uk/function.jdtojewish.php'>Ukrainian</option>
            <option value='zh/function.jdtojewish.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.jdtojewish" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">jdtojewish</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">jdtojewish</span> &mdash; <span class="dc-title">Converts a Julian day count to a Jewish calendar date</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.jdtojewish-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>jdtojewish</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$julian_day</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$hebrew</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Converts a Julian Day Count to the Jewish Calendar.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.jdtojewish-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">julian_day</code></dt>
     <dd>
      <p class="para">
       A julian day number as integer
      </p>
     </dd>
    
    
     <dt><code class="parameter">hebrew</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">hebrew</code> parameter is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the
       <code class="parameter">flags</code> parameter is used for Hebrew, ISO-8859-8 encoded string based,
       output format.  
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       A bitmask which may consist of
       <strong><code><a href="calendar.constants.php#constant.cal-jewish-add-alafim-geresh">CAL_JEWISH_ADD_ALAFIM_GERESH</a></code></strong>,
       <strong><code><a href="calendar.constants.php#constant.cal-jewish-add-alafim">CAL_JEWISH_ADD_ALAFIM</a></code></strong> and
       <strong><code><a href="calendar.constants.php#constant.cal-jewish-add-gereshayim">CAL_JEWISH_ADD_GERESHAYIM</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.jdtojewish-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The Jewish date as a string in the form &quot;month/day/year&quot;, or an ISO-8859-8
   encoded Hebrew date string, according to the <code class="parameter">hebrew</code>
   parameter.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.jdtojewish-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2183">
    <p><strong>Example #1 <span class="function"><strong>jdtojewish()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$jd </span><span style="color: #007700">= </span><span style="color: #0000BB">gregoriantojd</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">, </span><span style="color: #0000BB">2002</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">jdtojewish</span><span style="color: #007700">(</span><span style="color: #0000BB">$jd</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,<br />     </span><span style="color: #0000BB">jdtojewish</span><span style="color: #007700">(</span><span style="color: #0000BB">$jd</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">CAL_JEWISH_ADD_GERESHAYIM</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,<br />     </span><span style="color: #0000BB">jdtojewish</span><span style="color: #007700">(</span><span style="color: #0000BB">$jd</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">CAL_JEWISH_ADD_ALAFIM</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,<br />     </span><span style="color: #0000BB">jdtojewish</span><span style="color: #007700">(</span><span style="color: #0000BB">$jd</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">CAL_JEWISH_ADD_ALAFIM_GERESH</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">ב חשון התשסג
ב&#039; חשון התשס&quot;ג
ב חשון ה אלפים תשסג
ב חשון ה&#039;תשסג</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.jdtojewish-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.jewishtojd.php" class="function" rel="rdfs-seeAlso">jewishtojd()</a> - Converts a date in the Jewish Calendar to Julian Day Count</span></li> 
    <li><span class="function"><a href="function.cal-from-jd.php" class="function" rel="rdfs-seeAlso">cal_from_jd()</a> - Converts from Julian Day Count to a supported calendar</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/jdtojewish.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.jdtojewish%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.jdtojewish&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtojewish.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108028">  <div class="votes">
    <div id="Vu108028">
    <a href="/manual/vote-note.php?id=108028&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108028">
    <a href="/manual/vote-note.php?id=108028&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108028" title="84% like this...">
    13
    </div>
  </div>
  <a href="#108028" class="name">
  <strong class="user"><em>adam at tadam dot co dot il</em></strong></a><a class="genanchor" href="#108028"> &para;</a><div class="date" title="2012-03-23 09:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108028">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Hebrew date in hebrew<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">jdtojewish</span><span class="keyword">(</span><span class="default">gregoriantojd</span><span class="keyword">( </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d'</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">)), </span><span class="default">true</span><span class="keyword">, </span><span class="default">CAL_JEWISH_ADD_GERESHAYIM </span><span class="keyword">+ </span><span class="default">CAL_JEWISH_ADD_ALAFIM </span><span class="keyword">+ </span><span class="default">CAL_JEWISH_ADD_ALAFIM_GERESH</span><span class="keyword">); </span><span class="comment">// for today<br /></span><span class="default">$str1 </span><span class="keyword">= </span><span class="default">iconv </span><span class="keyword">(</span><span class="string">'WINDOWS-1255'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// convert to utf-8<br /><br /></span><span class="keyword">echo </span><span class="default">$str1</span><span class="keyword">; </span><span class="comment">// for 23/03/2012 will print: כ"ט אדר ה' אלפים תשע"ב<br /><br />// or<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">jdtojewish</span><span class="keyword">(</span><span class="default">gregoriantojd</span><span class="keyword">( </span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d'</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">)), </span><span class="default">true</span><span class="keyword">, </span><span class="default">CAL_JEWISH_ADD_GERESHAYIM</span><span class="keyword">); </span><span class="comment">// for today<br /></span><span class="default">$str1 </span><span class="keyword">= </span><span class="default">iconv </span><span class="keyword">(</span><span class="string">'WINDOWS-1255'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// convert to utf-8<br /><br /></span><span class="keyword">echo </span><span class="default">$str1</span><span class="keyword">; </span><span class="comment">// for 23/03/2012 will print: כ"ט אדר התשע"ב<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116453">  <div class="votes">
    <div id="Vu116453">
    <a href="/manual/vote-note.php?id=116453&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116453">
    <a href="/manual/vote-note.php?id=116453&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116453" title="90% like this...">
    9
    </div>
  </div>
  <a href="#116453" class="name">
  <strong class="user"><em>eclipsechasers2 at yahoo dot com</em></strong></a><a class="genanchor" href="#116453"> &para;</a><div class="date" title="2015-01-06 12:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116453">
<div class="phpcode"><code><span class="html">With PHP 5.5, the functionality changed regarding Adar in a non-leap year. Prior to 5.5, the month was returned as 6. In 5.5 and 5.6, the month is returned as 7. This difference is not listed under "What has changed in PHP 5.5.x".</span></code></div>
  </div>
 </div>
  <div class="note" id="75414">  <div class="votes">
    <div id="Vu75414">
    <a href="/manual/vote-note.php?id=75414&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75414">
    <a href="/manual/vote-note.php?id=75414&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75414" title="100% like this...">
    4
    </div>
  </div>
  <a href="#75414" class="name">
  <strong class="user"><em>asphp at dsgml dot com</em></strong></a><a class="genanchor" href="#75414"> &para;</a><div class="date" title="2007-05-28 02:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75414">
<div class="phpcode"><code><span class="html">This function outputs in ISO-8859-8-l.
<br />
<br />To convert to unicode UTF-8 do this:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">echo </span><span class="default">mb_convert_encoding</span><span class="keyword">( </span><span class="default">jdtojewish</span><span class="keyword">( </span><span class="default">unixtojd</span><span class="keyword">(), </span><span class="default">true </span><span class="keyword">), </span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="string">"ISO-8859-8"</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124638">  <div class="votes">
    <div id="Vu124638">
    <a href="/manual/vote-note.php?id=124638&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124638">
    <a href="/manual/vote-note.php?id=124638&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124638" title="100% like this...">
    3
    </div>
  </div>
  <a href="#124638" class="name">
  <strong class="user"><em>Berel</em></strong></a><a class="genanchor" href="#124638"> &para;</a><div class="date" title="2020-01-23 04:59"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124638">
<div class="phpcode"><code><span class="html">If you wish to format the hebrew date as this (ignore the brackets): [כ"ז סיון ה'תשע"ה], since none of the 3 bitmasks include this format, you can use the CAL_JEWISH_ADD_GERESHAYIM mask, and then insert the ' into the year with the second line, as shown:<br /><br />$hebdate = jdtojewish(gregoriantojd(6,14,2015),1,CAL_JEWISH_ADD_GERESHAYIM);<br />$hebdate = substr_replace($hebdate,"'",strrpos($hebdate," ")+2,0);</span></code></div>
  </div>
 </div>
  <div class="note" id="35453">  <div class="votes">
    <div id="Vu35453">
    <a href="/manual/vote-note.php?id=35453&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35453">
    <a href="/manual/vote-note.php?id=35453&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35453" title="100% like this...">
    3
    </div>
  </div>
  <a href="#35453" class="name">
  <strong class="user"><em>gr8g0thamguy at yahoo dot com</em></strong></a><a class="genanchor" href="#35453"> &para;</a><div class="date" title="2003-09-01 11:39"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35453">
<div class="phpcode"><code><span class="html">Based on the code already posted by Dave, I've modified it to display the *current* date on a page:<br /><br /><span class="default">&lt;?php <br /><br />$gregorianMonth </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="default">n</span><span class="keyword">);<br /></span><span class="default">$gregorianDay </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="default">j</span><span class="keyword">);<br /></span><span class="default">$gregorianYear </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="default">Y</span><span class="keyword">);<br /><br /></span><span class="default">$jdDate </span><span class="keyword">= </span><span class="default">gregoriantojd</span><span class="keyword">(</span><span class="default">$gregorianMonth</span><span class="keyword">,</span><span class="default">$gregorianDay</span><span class="keyword">,</span><span class="default">$gregorianYear</span><span class="keyword">); <br /><br /></span><span class="default">$hebrewMonthName </span><span class="keyword">= </span><span class="default">jdmonthname</span><span class="keyword">(</span><span class="default">$jdDate</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /><br /></span><span class="default">$hebrewDate </span><span class="keyword">= </span><span class="default">jdtojewish</span><span class="keyword">(</span><span class="default">$jdDate</span><span class="keyword">); <br /><br />list(</span><span class="default">$hebrewMonth</span><span class="keyword">, </span><span class="default">$hebrewDay</span><span class="keyword">, </span><span class="default">$hebrewYear</span><span class="keyword">) = </span><span class="default">split</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$hebrewDate</span><span class="keyword">); <br /><br />echo </span><span class="string">"</span><span class="default">$hebrewDay</span><span class="string"> </span><span class="default">$hebrewMonthName</span><span class="string"> </span><span class="default">$hebrewYear</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93238">  <div class="votes">
    <div id="Vu93238">
    <a href="/manual/vote-note.php?id=93238&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93238">
    <a href="/manual/vote-note.php?id=93238&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93238" title="77% like this...">
    5
    </div>
  </div>
  <a href="#93238" class="name">
  <strong class="user"><em>erelsgl at gmail dot com</em></strong></a><a class="genanchor" href="#93238"> &para;</a><div class="date" title="2009-08-29 02:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93238">
<div class="phpcode"><code><span class="html">In Hebrew leap years, the function will return 6 for Adar A, 7 for Adar B, 8 for Nisan, etc.<br /><br />In Hebrew non-leap years, the function will return 6 for Adar, 8 for Nisan, etc.<br /><br />i.e., the "real" Adar is Adar A.</span></code></div>
  </div>
 </div>
  <div class="note" id="19585">  <div class="votes">
    <div id="Vu19585">
    <a href="/manual/vote-note.php?id=19585&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19585">
    <a href="/manual/vote-note.php?id=19585&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19585" title="75% like this...">
    2
    </div>
  </div>
  <a href="#19585" class="name">
  <strong class="user"><em>dave_at_mitzvahweb.com</em></strong></a><a class="genanchor" href="#19585"> &para;</a><div class="date" title="2002-03-04 04:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19585">
<div class="phpcode"><code><span class="html">There's probably a simpler way to do this, but I needed to convert a Gregorian date to a Hebrew one and display it with the Hebrew month name (not the number).
<br />
<br />Perhaps it can help somebody...
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//enter your Gregorian date with the variables $gregorianMonth, $gregorianDay, and $gregorianYear using the numerical representation of the month
<br />
<br /></span><span class="default">$jdDate </span><span class="keyword">= </span><span class="default">gregoriantojd </span><span class="keyword">( </span><span class="default">$gregorianMonth</span><span class="keyword">, </span><span class="default">$gregorianDay</span><span class="keyword">, </span><span class="default">$gregorianYear</span><span class="keyword">);
<br />
<br /></span><span class="default">$gregorianMonthName </span><span class="keyword">= </span><span class="default">jdmonthname </span><span class="keyword">( </span><span class="default">$jdDate</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);
<br />
<br /></span><span class="default">$hebrewDate </span><span class="keyword">= </span><span class="default">jdtojewish </span><span class="keyword">(</span><span class="default">$jdDate</span><span class="keyword">);
<br />
<br />list (</span><span class="default">$hebrewMonth</span><span class="keyword">, </span><span class="default">$hebrewDay</span><span class="keyword">, </span><span class="default">$hebrewYear</span><span class="keyword">) = </span><span class="default">split </span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$hebrewDate</span><span class="keyword">);
<br />
<br /></span><span class="default">$hebrewMonthName </span><span class="keyword">= </span><span class="default">jdmonthname </span><span class="keyword">( </span><span class="default">$jdDate</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);  
<br />
<br /> echo </span><span class="string">"Your date in Hebrew would read: </span><span class="default">$hebrewDay</span><span class="string"> </span><span class="default">$hebrewMonthName</span><span class="string"> </span><span class="default">$hebrewYear</span><span class="string">"</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123822">  <div class="votes">
    <div id="Vu123822">
    <a href="/manual/vote-note.php?id=123822&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123822">
    <a href="/manual/vote-note.php?id=123822&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123822" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123822" class="name">
  <strong class="user"><em>WWW dot netfree at gmail dot com</em></strong></a><a class="genanchor" href="#123822"> &para;</a><div class="date" title="2019-05-04 08:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123822">
<div class="phpcode"><code><span class="html">Check whether the year is leap year, in order to determine whether the value 7 = Adar or Adar 2<br /><br /><span class="default">&lt;?php <br /><br />$hebrewDate </span><span class="keyword">= </span><span class="default">jdtojewish</span><span class="keyword">(</span><span class="default">gregoriantojd</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">'m'</span><span class="keyword">, </span><span class="default">$DateStamp</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d'</span><span class="keyword">, </span><span class="default">$DateStamp</span><span class="keyword">), </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$DateStamp</span><span class="keyword">)));<br />list(</span><span class="default">$hebrewMonth</span><span class="keyword">, </span><span class="default">$hebrewDay</span><span class="keyword">, </span><span class="default">$hebrewYear</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$hebrewDate</span><span class="keyword">);<br /><br /></span><span class="default">$m </span><span class="keyword">= array(</span><span class="default">3</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">14</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">, </span><span class="default">19</span><span class="keyword">);<br /></span><span class="default">$meuberet </span><span class="keyword">= </span><span class="default">in_array</span><span class="keyword">((</span><span class="default">$hebrewYear </span><span class="keyword">% </span><span class="default">19</span><span class="keyword">), </span><span class="default">$m</span><span class="keyword">);<br />if(</span><span class="default">$meuberet</span><span class="keyword">) if(</span><span class="default">$hebrewMonth </span><span class="keyword">== </span><span class="default">7</span><span class="keyword">) </span><span class="default">$hebrewMonth </span><span class="keyword">= </span><span class="string">'7b'</span><span class="keyword">; </span><span class="comment">//This is Adar 2</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126820">  <div class="votes">
    <div id="Vu126820">
    <a href="/manual/vote-note.php?id=126820&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126820">
    <a href="/manual/vote-note.php?id=126820&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126820" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126820" class="name">
  <strong class="user"><em>Sergio Z</em></strong></a><a class="genanchor" href="#126820"> &para;</a><div class="date" title="2022-02-03 08:07"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126820">
<div class="phpcode"><code><span class="html">To check if a Jewish year is leap use this function:<br /><br />function isJewishLeapYear($year) {<br />    return 0 != cal_days_in_month(CAL_JEWISH, 6, $year);<br />}<br /><br />In non-leap years there is only one Adar, and its number is 7. There is no 6.</span></code></div>
  </div>
 </div>
  <div class="note" id="93239">  <div class="votes">
    <div id="Vu93239">
    <a href="/manual/vote-note.php?id=93239&amp;page=function.jdtojewish&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93239">
    <a href="/manual/vote-note.php?id=93239&amp;page=function.jdtojewish&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93239" title="100% like this...">
    1
    </div>
  </div>
  <a href="#93239" class="name">
  <strong class="user"><em>erelsgl at gmail dot com</em></strong></a><a class="genanchor" href="#93239"> &para;</a><div class="date" title="2009-08-29 03:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93239">
<div class="phpcode"><code><span class="html">Sometimes it is useful to have the date in the format YYYY-MM-DD, which is sortable (e.g. you can sort dates by sorting the strings):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">JDToSortableJewish</span><span class="keyword">(</span><span class="default">$jd</span><span class="keyword">) {
<br />    return 
<br />        </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"|(\d+)/(\d+)/(\d+)|"</span><span class="keyword">,</span><span class="string">"$3-$1-$2"</span><span class="keyword">,  </span><span class="comment">// year-month-day
<br />        </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"|/(\d)/|"</span><span class="keyword">,</span><span class="string">"/0$1/"</span><span class="keyword">, </span><span class="comment">// add zeros to the day
<br />        </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"|^(\d)/|"</span><span class="keyword">,</span><span class="string">"0$1/"</span><span class="keyword">,  </span><span class="comment">// add zeros to the month
<br />        </span><span class="default">JDToJewish</span><span class="keyword">(</span><span class="default">$jd</span><span class="keyword">))));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.jdtojewish&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtojewish.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.calendar.php">Calendar Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.cal-days-in-month.php" title="cal_&#8203;days_&#8203;in_&#8203;month">cal_&#8203;days_&#8203;in_&#8203;month</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-from-jd.php" title="cal_&#8203;from_&#8203;jd">cal_&#8203;from_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-info.php" title="cal_&#8203;info">cal_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-to-jd.php" title="cal_&#8203;to_&#8203;jd">cal_&#8203;to_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-date.php" title="easter_&#8203;date">easter_&#8203;date</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-days.php" title="easter_&#8203;days">easter_&#8203;days</a>
                        </li>
                                                <li class="">
                            <a href="function.frenchtojd.php" title="frenchtojd">frenchtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.gregoriantojd.php" title="gregoriantojd">gregoriantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.jddayofweek.php" title="jddayofweek">jddayofweek</a>
                        </li>
                                                <li class="">
                            <a href="function.jdmonthname.php" title="jdmonthname">jdmonthname</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtofrench.php" title="jdtofrench">jdtofrench</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtogregorian.php" title="jdtogregorian">jdtogregorian</a>
                        </li>
                                                <li class="current">
                            <a href="function.jdtojewish.php" title="jdtojewish">jdtojewish</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtojulian.php" title="jdtojulian">jdtojulian</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtounix.php" title="jdtounix">jdtounix</a>
                        </li>
                                                <li class="">
                            <a href="function.jewishtojd.php" title="jewishtojd">jewishtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.juliantojd.php" title="juliantojd">juliantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.unixtojd.php" title="unixtojd">unixtojd</a>
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
