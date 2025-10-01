<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: time_nanosleep - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.time-nanosleep.php">
 <link rel="shorturl" href="https://www.php.net/time-nanosleep">
 <link rel="alternate" href="https://www.php.net/time-nanosleep" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sys-getloadavg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.time-sleep-until.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.time-nanosleep.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.time-nanosleep.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.time-nanosleep.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.time-nanosleep.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.time-nanosleep.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.time-nanosleep.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.time-nanosleep.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.time-nanosleep.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.time-nanosleep.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.time-nanosleep.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.time-nanosleep.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Delay for a number of seconds and nanoseconds" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: time_nanosleep - Manual" />
<meta name="twitter:description" content="Delay for a number of seconds and nanoseconds" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: time_nanosleep - Manual" />
<meta itemprop="description" content="Delay for a number of seconds and nanoseconds" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Delay for a number of seconds and nanoseconds" />

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
        <a href="function.time-sleep-until.php">
          time_sleep_until &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sys-getloadavg.php">
          &laquo; sys_getloadavg        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.time-nanosleep.php' selected="selected">English</option>
            <option value='de/function.time-nanosleep.php'>German</option>
            <option value='es/function.time-nanosleep.php'>Spanish</option>
            <option value='fr/function.time-nanosleep.php'>French</option>
            <option value='it/function.time-nanosleep.php'>Italian</option>
            <option value='ja/function.time-nanosleep.php'>Japanese</option>
            <option value='pt_BR/function.time-nanosleep.php'>Brazilian Portuguese</option>
            <option value='ru/function.time-nanosleep.php'>Russian</option>
            <option value='tr/function.time-nanosleep.php'>Turkish</option>
            <option value='uk/function.time-nanosleep.php'>Ukrainian</option>
            <option value='zh/function.time-nanosleep.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.time-nanosleep" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">time_nanosleep</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">time_nanosleep</span> &mdash; <span class="dc-title">Delay for a number of seconds and nanoseconds</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.time-nanosleep-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>time_nanosleep</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$seconds</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$nanoseconds</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Delays program execution for the given number of
   <code class="parameter">seconds</code> and <code class="parameter">nanoseconds</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.time-nanosleep-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">seconds</code></dt>
     <dd>
      <p class="para">
       Must be a non-negative integer.
      </p>
     </dd>
    
    
     <dt><code class="parameter">nanoseconds</code></dt>
     <dd>
      <p class="para">
       Must be a non-negative integer less than 1 billion.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        On Windows, the system may sleep longer that the given number of nanoseconds,
        depending on the hardware.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.time-nanosleep-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   If the delay was interrupted by a signal, an associative array will be
   returned with the components:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <code class="literal">seconds</code> - number of seconds remaining in
      the delay
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">nanoseconds</code> - number of nanoseconds
      remaining in the delay
     </span>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.time-nanosleep-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3762">
    <p><strong>Example #1 <span class="function"><strong>time_nanosleep()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Careful! This won't work as expected if an array is returned<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">time_nanosleep</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">500000000</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Slept for half a second.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// This is better:<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">time_nanosleep</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">500000000</span><span style="color: #007700">) === </span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Slept for half a second.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// And this is the best:<br /></span><span style="color: #0000BB">$nano </span><span style="color: #007700">= </span><span style="color: #0000BB">time_nanosleep</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">100000</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$nano </span><span style="color: #007700">=== </span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Slept for 2 seconds, 100 microseconds.\n"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">$nano </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Sleeping failed.\n"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$nano</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$seconds </span><span style="color: #007700">= </span><span style="color: #0000BB">$nano</span><span style="color: #007700">[</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">];<br />    </span><span style="color: #0000BB">$nanoseconds </span><span style="color: #007700">= </span><span style="color: #0000BB">$nano</span><span style="color: #007700">[</span><span style="color: #DD0000">'nanoseconds'</span><span style="color: #007700">];<br />    echo </span><span style="color: #DD0000">"Interrupted by a signal.\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"Time remaining: </span><span style="color: #0000BB">$seconds</span><span style="color: #DD0000"> seconds, </span><span style="color: #0000BB">$nanoseconds</span><span style="color: #DD0000"> nanoseconds."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.time-nanosleep-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sleep.php" class="function" rel="rdfs-seeAlso">sleep()</a> - Delay execution</span></li>
    <li><span class="function"><a href="function.usleep.php" class="function" rel="rdfs-seeAlso">usleep()</a> - Delay execution in microseconds</span></li>
    <li><span class="function"><a href="function.time-sleep-until.php" class="function" rel="rdfs-seeAlso">time_sleep_until()</a> - Make the script sleep until the specified time</span></li>
    <li><span class="function"><a href="function.set-time-limit.php" class="function" rel="rdfs-seeAlso">set_time_limit()</a> - Limits the maximum execution time</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/time-nanosleep.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.time-nanosleep%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.time-nanosleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.time-nanosleep.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69061">  <div class="votes">
    <div id="Vu69061">
    <a href="/manual/vote-note.php?id=69061&amp;page=function.time-nanosleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69061">
    <a href="/manual/vote-note.php?id=69061&amp;page=function.time-nanosleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69061" title="62% like this...">
    7
    </div>
  </div>
  <a href="#69061" class="name">
  <strong class="user"><em>anybody (a) emuxperts.net</em></strong></a><a class="genanchor" href="#69061"> &para;</a><div class="date" title="2006-08-21 04:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69061">
<div class="phpcode"><code><span class="html">Documentation states that "seconds" must be positive. This is not correct, 0 is possible.<br /><br />Rather, "seconds" must be non-negative.</span></code></div>
  </div>
 </div>
  <div class="note" id="55802">  <div class="votes">
    <div id="Vu55802">
    <a href="/manual/vote-note.php?id=55802&amp;page=function.time-nanosleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55802">
    <a href="/manual/vote-note.php?id=55802&amp;page=function.time-nanosleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55802" title="75% like this...">
    6
    </div>
  </div>
  <a href="#55802" class="name">
  <strong class="user"><em>m at kufi dot net</em></strong></a><a class="genanchor" href="#55802"> &para;</a><div class="date" title="2005-08-13 02:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55802">
<div class="phpcode"><code><span class="html">You should take into account, if you use the function replacement down here, the CPU will be in use of 99% for the time of execution...<br /><br />(A little bit better in this situation is to let the 'full seconds' go by a normal sleep command (makes the thread sleep!, and uses minimum cpu))<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">//THIS IS THE FUNCTION WE ARE TALKIN ABOUT<br />    </span><span class="keyword">function </span><span class="default">timeWait</span><span class="keyword">(</span><span class="default">$microtime</span><span class="keyword">)<br />    {<br /></span><span class="comment">//optimizations added by me [start]<br />//sleep the full seconds<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$microtime</span><span class="keyword">));<br /></span><span class="comment">//set the microtime to only resleep the last part of the nanos<br /></span><span class="default">$microtime </span><span class="keyword">= </span><span class="default">$microtime </span><span class="keyword">- </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$microtime</span><span class="keyword">);<br /></span><span class="comment">//optimizations added by me [end]<br /><br />        </span><span class="default">$timeLimit </span><span class="keyword">= </span><span class="default">$microtime </span><span class="keyword">+ </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">microtime</span><span class="keyword">()));<br />        while(</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">microtime</span><span class="keyword">())) &lt; </span><span class="default">$timeLimit</span><span class="keyword">)<br />        {</span><span class="comment">/*DO NOTHING*/</span><span class="keyword">}<br />        return(</span><span class="default">true</span><span class="keyword">);<br />    }<br /> <br />    </span><span class="comment">//THIS IS HOW WE CAN USE IT<br />    </span><span class="keyword">echo </span><span class="string">"Process started at " </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="string">"H:i:s"</span><span class="keyword">) . </span><span class="string">" and " </span><span class="keyword">. </span><span class="default">current</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">microtime</span><span class="keyword">())) . </span><span class="string">" nanoseconds.&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">timeWait</span><span class="keyword">(</span><span class="default">5.5</span><span class="keyword">); </span><span class="comment">//With this call the system will wait 5 seconds and a half. You can use either integer or float.<br />    </span><span class="keyword">echo </span><span class="string">"Process completed at " </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="string">"H:i:s"</span><span class="keyword">) . </span><span class="string">" and " </span><span class="keyword">. </span><span class="default">current</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">microtime</span><span class="keyword">())) . </span><span class="string">" nanoseconds."</span><span class="keyword">;<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71839">  <div class="votes">
    <div id="Vu71839">
    <a href="/manual/vote-note.php?id=71839&amp;page=function.time-nanosleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71839">
    <a href="/manual/vote-note.php?id=71839&amp;page=function.time-nanosleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71839" title="60% like this...">
    6
    </div>
  </div>
  <a href="#71839" class="name">
  <strong class="user"><em>fantasysportswire at yahoo dot com</em></strong></a><a class="genanchor" href="#71839"> &para;</a><div class="date" title="2006-12-18 03:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71839">
<div class="phpcode"><code><span class="html">Just glancing at this - and the note from over a year ago with a implementation for windows.. with 5.0.0 and higher it would be simplier to just do something like......
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'time_nanosleep'</span><span class="keyword">)) {
<br />
<br />function </span><span class="default">time_nanosleep</span><span class="keyword">(</span><span class="default">$seconds</span><span class="keyword">, </span><span class="default">$nanoseconds</span><span class="keyword">) {
<br />
<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$seconds</span><span class="keyword">);
<br /></span><span class="default">usleep</span><span class="keyword">(</span><span class="default">round</span><span class="keyword">(</span><span class="default">$nanoseconds</span><span class="keyword">/</span><span class="default">100</span><span class="keyword">));
<br />
<br />return </span><span class="default">true</span><span class="keyword">;
<br />
<br />}
<br />
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />....off the top of my head - obviously simple enough there should be no mistakes.. but those are the ones that always seem to get ya :( .....</span></code></div>
  </div>
 </div>
  <div class="note" id="84249">  <div class="votes">
    <div id="Vu84249">
    <a href="/manual/vote-note.php?id=84249&amp;page=function.time-nanosleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84249">
    <a href="/manual/vote-note.php?id=84249&amp;page=function.time-nanosleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84249" title="62% like this...">
    4
    </div>
  </div>
  <a href="#84249" class="name">
  <strong class="user"><em>b dot andrew at shaw dot ca</em></strong></a><a class="genanchor" href="#84249"> &para;</a><div class="date" title="2008-07-04 09:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84249">
<div class="phpcode"><code><span class="html">A response to the note below:<br /><br />Your function is also useless, as the WinNT 32 kernel only functions at a minimum of about 10+ ms (1,000 us), rendering usleep() useless, because usleep uses the C function which is provided by the system (in this case, kernel32.dll).<br /><br />You'll want to use a function that does not rely on the kernel, but rather something made for precise measurement:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">usleep_win</span><span class="keyword">( </span><span class="default">$micro_seconds </span><span class="keyword">)<br />{<br />    if ( @</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">"socket_create" </span><span class="keyword">) &amp;&amp; @</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">"socket_select" </span><span class="keyword">) )<br />    {<br />        </span><span class="default">$false </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$socket </span><span class="keyword">= array( </span><span class="default">socket_create</span><span class="keyword">( </span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">, </span><span class="default">$false </span><span class="keyword">) );<br />        </span><span class="default">socket_select</span><span class="keyword">( </span><span class="default">$false</span><span class="keyword">, </span><span class="default">$false</span><span class="keyword">, </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$micro_seconds </span><span class="keyword">);<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This function will allow to you sleep for a specified microsecond, although I have measured it to be off by ~5 us.<br /><br />Again, most of this depends on the hardware in your system. If you _REALLY_ need to be precise to &lt; 10 us, you shouldn't be using WinNT anyways!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.time-nanosleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.time-nanosleep.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="current">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
