<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: count_chars - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.count-chars.php">
 <link rel="shorturl" href="https://www.php.net/count-chars">
 <link rel="alternate" href="https://www.php.net/count-chars" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.convert-uuencode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.crc32.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.count-chars.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.count-chars.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.count-chars.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.count-chars.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.count-chars.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.count-chars.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.count-chars.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.count-chars.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.count-chars.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.count-chars.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.count-chars.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return information about characters used in a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: count_chars - Manual" />
<meta name="twitter:description" content="Return information about characters used in a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: count_chars - Manual" />
<meta itemprop="description" content="Return information about characters used in a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return information about characters used in a string" />

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
        <a href="function.crc32.php">
          crc32 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.convert-uuencode.php">
          &laquo; convert_uuencode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.count-chars.php' selected="selected">English</option>
            <option value='de/function.count-chars.php'>German</option>
            <option value='es/function.count-chars.php'>Spanish</option>
            <option value='fr/function.count-chars.php'>French</option>
            <option value='it/function.count-chars.php'>Italian</option>
            <option value='ja/function.count-chars.php'>Japanese</option>
            <option value='pt_BR/function.count-chars.php'>Brazilian Portuguese</option>
            <option value='ru/function.count-chars.php'>Russian</option>
            <option value='tr/function.count-chars.php'>Turkish</option>
            <option value='uk/function.count-chars.php'>Ukrainian</option>
            <option value='zh/function.count-chars.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.count-chars" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">count_chars</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">count_chars</span> &mdash; <span class="dc-title">Return information about characters used in a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.count-chars-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>count_chars</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>

  <p class="para rdfs-comment">
   Counts the number of occurrences of every byte-value (0..255) in
   <code class="parameter">string</code> and returns it in various ways.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.count-chars-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The examined string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       See return values.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.count-chars-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Depending on <code class="parameter">mode</code>
   <span class="function"><strong>count_chars()</strong></span> returns one of the following:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      0 - an array with the byte-value as key and the frequency of
      every byte as value.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      1 - same as 0 but only byte-values with a frequency greater
      than zero are listed.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      2 - same as 0 but only byte-values with a frequency equal to
      zero are listed.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      3 - a string containing all unique characters is returned.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      4 - a string containing all unused characters is returned.
     </span>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.count-chars-changelog">
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
       Prior to this version, the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.count-chars-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5061">
    <p><strong>Example #1 <span class="function"><strong>count_chars()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= </span><span style="color: #DD0000">"Two Ts and one F."</span><span style="color: #007700">;<br /><br />foreach (</span><span style="color: #0000BB">count_chars</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">) as </span><span style="color: #0000BB">$i </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />   echo </span><span style="color: #DD0000">"There were </span><span style="color: #0000BB">$val</span><span style="color: #DD0000"> instance(s) of \"" </span><span style="color: #007700">, </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$i</span><span style="color: #007700">) , </span><span style="color: #DD0000">"\" in the string.\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">There were 4 instance(s) of &quot; &quot; in the string.
There were 1 instance(s) of &quot;.&quot; in the string.
There were 1 instance(s) of &quot;F&quot; in the string.
There were 2 instance(s) of &quot;T&quot; in the string.
There were 1 instance(s) of &quot;a&quot; in the string.
There were 1 instance(s) of &quot;d&quot; in the string.
There were 1 instance(s) of &quot;e&quot; in the string.
There were 2 instance(s) of &quot;n&quot; in the string.
There were 2 instance(s) of &quot;o&quot; in the string.
There were 1 instance(s) of &quot;s&quot; in the string.
There were 1 instance(s) of &quot;w&quot; in the string.</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.count-chars-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strpos.php" class="function" rel="rdfs-seeAlso">strpos()</a> - Find the position of the first occurrence of a substring in a string</span></li>
    <li><span class="function"><a href="function.substr-count.php" class="function" rel="rdfs-seeAlso">substr_count()</a> - Count the number of substring occurrences</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/count-chars.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.count-chars%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.count-chars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.count-chars.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107336">  <div class="votes">
    <div id="Vu107336">
    <a href="/manual/vote-note.php?id=107336&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107336">
    <a href="/manual/vote-note.php?id=107336&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107336" title="67% like this...">
    25
    </div>
  </div>
  <a href="#107336" class="name">
  <strong class="user"><em>marcus33cz</em></strong></a><a class="genanchor" href="#107336"> &para;</a><div class="date" title="2012-02-01 11:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107336">
<div class="phpcode"><code><span class="html">If you have problems using count_chars with a multibyte string, you can change the page encoding. Alternatively, you can also use this mb_count_chars version of the function. Basically it is mode "1" of the original function.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Counts character occurences in a multibyte string<br /> * @param string $input UTF-8 data<br /> * @return array associative array of characters.<br /> */<br /></span><span class="keyword">function </span><span class="default">mb_count_chars</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />    </span><span class="default">$unique </span><span class="keyword">= array();<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$l</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$char </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />        if(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">$unique</span><span class="keyword">))<br />            </span><span class="default">$unique</span><span class="keyword">[</span><span class="default">$char</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$unique</span><span class="keyword">[</span><span class="default">$char</span><span class="keyword">]++;<br />    }<br />    return </span><span class="default">$unique</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$input </span><span class="keyword">= </span><span class="string">"Let's try some Greek letters: αααααΕεΙιΜμΨψ, Russian: ЙЙЫЫЩН, Czech: ěščřžýáíé"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">mb_count_chars</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) ); <br /></span><span class="comment">//returns: Array ( [L] =&gt; 1 [e] =&gt; 7 [t] =&gt; 4 ['] =&gt; 1 [s] =&gt; 5 [ ] =&gt; 9 [r] =&gt; 3 [y] =&gt; 1 [o] =&gt; 1 [m] =&gt; 1 [G] =&gt; 1 [k] =&gt; 1 [l] =&gt; 1 [:] =&gt; 3 [α] =&gt; 5 [Ε] =&gt; 1 [ε] =&gt; 1 [Ι] =&gt; 1 [ι] =&gt; 1 [Μ] =&gt; 1 [μ] =&gt; 1 [Ψ] =&gt; 1 [ψ] =&gt; 1 [,] =&gt; 2 [R] =&gt; 1 [u] =&gt; 1 [i] =&gt; 1 [a] =&gt; 1 [n] =&gt; 1 [Й] =&gt; 2 [Ы] =&gt; 2 [Щ] =&gt; 1 [Н] =&gt; 1 [C] =&gt; 1 [z] =&gt; 1 [c] =&gt; 1 [h] =&gt; 1 [ě] =&gt; 1 [š] =&gt; 1 [č] =&gt; 1 [ř] =&gt; 1 [ž] =&gt; 1 [ý] =&gt; 1 [á] =&gt; 1 [í] =&gt; 1 [é] =&gt; 1 )<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53280">  <div class="votes">
    <div id="Vu53280">
    <a href="/manual/vote-note.php?id=53280&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53280">
    <a href="/manual/vote-note.php?id=53280&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53280" title="53% like this...">
    2
    </div>
  </div>
  <a href="#53280" class="name">
  <strong class="user"><em>Eric Pecoraro</em></strong></a><a class="genanchor" href="#53280"> &para;</a><div class="date" title="2005-05-27 07:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53280">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// Require (n) unique characters in a string<br />// Modification of a function below which ads some flexibility in how many unique characters are required in a given string.<br /><br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'123456' </span><span class="keyword">; </span><span class="comment">// true<br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'111222' </span><span class="keyword">; </span><span class="comment">// false<br /><br /></span><span class="default">req_unique</span><span class="keyword">(</span><span class="default">$pass</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br /><br />function </span><span class="default">req_unique</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$unique</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">) {<br />    if ( </span><span class="default">count</span><span class="keyword">(</span><span class="default">count_chars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) &lt; </span><span class="default">$unique</span><span class="keyword">) {<br />        echo </span><span class="string">'false'</span><span class="keyword">;<br />    }else{<br />        echo </span><span class="string">'true'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42431">  <div class="votes">
    <div id="Vu42431">
    <a href="/manual/vote-note.php?id=42431&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42431">
    <a href="/manual/vote-note.php?id=42431&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42431" title="53% like this...">
    2
    </div>
  </div>
  <a href="#42431" class="name">
  <strong class="user"><em>seb at synchrocide dot net</em></strong></a><a class="genanchor" href="#42431"> &para;</a><div class="date" title="2004-05-16 03:08"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42431">
<div class="phpcode"><code><span class="html">After much trial and error trying to create a function that finds the number of unique characters in a string I same across count_chars() - my 20+ lines of useless code were wiped for this:<br /><br />&lt;?<br />function unichar($string) {<br />$two= strtolower(str_replace(' ', '', $string));<br />$res = count(count_chars($two, 1));<br />return $res;<br />}<br /><br />/* examples :: */<br /><br />echo unichar("bob"); // 2<br />echo unichar("Invisibility"); //8<br />echo unichar("The quick brown fox slyly jumped over the lazy dog"); //26<br /><br />?&gt;<br /><br />I have no idea where this could be used, but it's quite fun</span></code></div>
  </div>
 </div>
  <div class="note" id="118726">  <div class="votes">
    <div id="Vu118726">
    <a href="/manual/vote-note.php?id=118726&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118726">
    <a href="/manual/vote-note.php?id=118726&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118726" title="51% like this...">
    1
    </div>
  </div>
  <a href="#118726" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118726"> &para;</a><div class="date" title="2016-01-26 05:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118726">
<div class="phpcode"><code><span class="html">count_chars for multibyte supported.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mb_count_chars </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$mode </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    <br />    </span><span class="default">$result </span><span class="keyword">=  </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$size </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$char </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {<br />            continue;<br />        }<br />        <br />        </span><span class="default">$code </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">);<br />        if (</span><span class="default">$code </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$code </span><span class="keyword">&lt;= </span><span class="default">255</span><span class="keyword">) {<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$code</span><span class="keyword">]++;<br />        }<br />    }<br />    <br />    switch (</span><span class="default">$mode</span><span class="keyword">) {<br />        case </span><span class="default">1</span><span class="keyword">: </span><span class="comment">// same as 0 but only byte-values with a frequency greater than zero are listed.<br />            </span><span class="keyword">foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (</span><span class="default">$value </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />                    unset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                }<br />            }<br />            break;<br />        case </span><span class="default">2</span><span class="keyword">: </span><span class="comment">// same as 0 but only byte-values with a frequency equal to zero are listed.<br />            </span><span class="keyword">foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (</span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />                    unset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                }<br />            }<br />            break;<br />        case </span><span class="default">3</span><span class="keyword">: </span><span class="comment">// a string containing all unique characters is returned.<br />            </span><span class="default">$buildString </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (</span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />                    </span><span class="default">$buildString </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />                }<br />            }<br />            return </span><span class="default">$buildString</span><span class="keyword">;<br />        case </span><span class="default">4</span><span class="keyword">: </span><span class="comment">// a string containing all not used characters is returned.<br />            </span><span class="default">$buildString </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (</span><span class="default">$value </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />                    </span><span class="default">$buildString </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />                }<br />            }<br />            return </span><span class="default">$buildString</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// change key names...<br />    </span><span class="keyword">foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)] = </span><span class="default">$value</span><span class="keyword">;<br />        unset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124744">  <div class="votes">
    <div id="Vu124744">
    <a href="/manual/vote-note.php?id=124744&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124744">
    <a href="/manual/vote-note.php?id=124744&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124744" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124744" class="name">
  <strong class="user"><em>Andrey G</em></strong></a><a class="genanchor" href="#124744"> &para;</a><div class="date" title="2020-02-22 06:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124744">
<div class="phpcode"><code><span class="html">Checking that two strings are anagram:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">isAnagram</span><span class="keyword">(</span><span class="default">$string1</span><span class="keyword">, </span><span class="default">$string2</span><span class="keyword">)<br />{<br />  return </span><span class="default">count_chars</span><span class="keyword">(</span><span class="default">$string1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) === </span><span class="default">count_chars</span><span class="keyword">(</span><span class="default">$string2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="default">isAnagram</span><span class="keyword">(</span><span class="string">'act'</span><span class="keyword">, </span><span class="string">'cat'</span><span class="keyword">); </span><span class="comment">// true<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76746">  <div class="votes">
    <div id="Vu76746">
    <a href="/manual/vote-note.php?id=76746&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76746">
    <a href="/manual/vote-note.php?id=76746&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76746" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76746" class="name">
  <strong class="user"><em>pzb at novell dot com</em></strong></a><a class="genanchor" href="#76746"> &para;</a><div class="date" title="2007-07-28 06:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76746">
<div class="phpcode"><code><span class="html">This function is great for input validation.  I frequently need to check that all characters in a string are 7-bit ASCII (and not null).  This is the fastest function I have found yet:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is7bit</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="comment">// empty strings are 7-bit clean<br />    </span><span class="keyword">if (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) {<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// count_chars returns the characters in ascending octet order<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">count_chars</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    </span><span class="comment">// Check for null character<br />    </span><span class="keyword">if (!</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Check for 8-bit character<br />    </span><span class="keyword">if (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">]) &amp; </span><span class="default">128</span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79583">  <div class="votes">
    <div id="Vu79583">
    <a href="/manual/vote-note.php?id=79583&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79583">
    <a href="/manual/vote-note.php?id=79583&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79583" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#79583" class="name">
  <strong class="user"><em>phpC2007</em></strong></a><a class="genanchor" href="#79583"> &para;</a><div class="date" title="2007-12-04 07:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79583">
<div class="phpcode"><code><span class="html">Here's a function to count number of strings in a string. It can be used as a simple utf8-enabled count_chars (but limited to a single mode)...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf8_count_strings</span><span class="keyword">(</span><span class="default">$stringChar</span><span class="keyword">)<br />{<br />    </span><span class="default">$num </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$lenStringChar </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$stringChar</span><span class="keyword">);<br />    <br />    for (</span><span class="default">$lastPosition </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />        </span><span class="default">$lastPosition </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$lastPosition </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$textSnippet</span><span class="keyword">, </span><span class="default">$stringChar</span><span class="keyword">, </span><span class="default">$lastPosition </span><span class="keyword">+ </span><span class="default">$lenStringChar</span><span class="keyword">))<br />    {<br />        </span><span class="default">$num</span><span class="keyword">++;<br />    }<br />    <br />    return </span><span class="default">$num</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18625">  <div class="votes">
    <div id="Vu18625">
    <a href="/manual/vote-note.php?id=18625&amp;page=function.count-chars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18625">
    <a href="/manual/vote-note.php?id=18625&amp;page=function.count-chars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18625" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#18625" class="name">
  <strong class="user"><em>mlong at mlong dot org</em></strong></a><a class="genanchor" href="#18625"> &para;</a><div class="date" title="2002-01-29 04:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18625">
<div class="phpcode"><code><span class="html">// Usefulness of the two functions
<br />
<br /><span class="default">&lt;?php
<br /> $string</span><span class="keyword">=</span><span class="string">"aaabbc"</span><span class="keyword">;
<br />
<br /> </span><span class="comment">// You just want to count the letter a
<br /> </span><span class="default">$acount</span><span class="keyword">=</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="string">"a"</span><span class="keyword">);
<br />
<br /> </span><span class="comment">// You want to count both letter a and letter b
<br /> </span><span class="default">$counts</span><span class="keyword">=</span><span class="default">count_chars</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br /> </span><span class="default">$acount</span><span class="keyword">=</span><span class="default">$counts</span><span class="keyword">[</span><span class="default">ord</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">)];
<br /> </span><span class="default">$bcount</span><span class="keyword">=</span><span class="default">$counts</span><span class="keyword">[</span><span class="default">ord</span><span class="keyword">(</span><span class="string">"b"</span><span class="keyword">)];
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.count-chars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.count-chars.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="current">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
