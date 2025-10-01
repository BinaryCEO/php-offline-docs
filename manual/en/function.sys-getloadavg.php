<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sys_getloadavg - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sys-getloadavg.php">
 <link rel="shorturl" href="https://www.php.net/sys-getloadavg">
 <link rel="alternate" href="https://www.php.net/sys-getloadavg" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sleep.php">
 <link rel="next" href="https://www.php.net/manual/en/function.time-nanosleep.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sys-getloadavg.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sys-getloadavg.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sys-getloadavg.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sys-getloadavg.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sys-getloadavg.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sys-getloadavg.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sys-getloadavg.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sys-getloadavg.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sys-getloadavg.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sys-getloadavg.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sys-getloadavg.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets system load average" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sys_getloadavg - Manual" />
<meta name="twitter:description" content="Gets system load average" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sys_getloadavg - Manual" />
<meta itemprop="description" content="Gets system load average" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets system load average" />

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
        <a href="function.time-nanosleep.php">
          time_nanosleep &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sleep.php">
          &laquo; sleep        </a>
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
            <option value='en/function.sys-getloadavg.php' selected="selected">English</option>
            <option value='de/function.sys-getloadavg.php'>German</option>
            <option value='es/function.sys-getloadavg.php'>Spanish</option>
            <option value='fr/function.sys-getloadavg.php'>French</option>
            <option value='it/function.sys-getloadavg.php'>Italian</option>
            <option value='ja/function.sys-getloadavg.php'>Japanese</option>
            <option value='pt_BR/function.sys-getloadavg.php'>Brazilian Portuguese</option>
            <option value='ru/function.sys-getloadavg.php'>Russian</option>
            <option value='tr/function.sys-getloadavg.php'>Turkish</option>
            <option value='uk/function.sys-getloadavg.php'>Ukrainian</option>
            <option value='zh/function.sys-getloadavg.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sys-getloadavg" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sys_getloadavg</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sys_getloadavg</span> &mdash; <span class="dc-title">Gets system load average</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.sys-getloadavg-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sys_getloadavg</strong></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns three samples representing the average system load
   (the number of processes in the system run queue) over the last 1, 5 and 15
   minutes, respectively. Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.sys-getloadavg-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.sys-getloadavg-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with three samples (last 1, 5 and 15
   minutes).
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.sys-getloadavg-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3761">
    <p><strong>Example #1 A <span class="function"><strong>sys_getloadavg()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$load </span><span style="color: #007700">= </span><span style="color: #0000BB">sys_getloadavg</span><span style="color: #007700">();<br />if (</span><span style="color: #0000BB">$load</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] &gt; </span><span style="color: #0000BB">0.80</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTTP/1.1 503 Too busy, try again later'</span><span style="color: #007700">);<br />    die(</span><span style="color: #DD0000">'Server too busy. Please try again later.'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.sys-getloadavg-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is not
implemented on Windows platforms.</span></p></blockquote>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/sys-getloadavg.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sys-getloadavg%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sys-getloadavg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sys-getloadavg.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118673">  <div class="votes">
    <div id="Vu118673">
    <a href="/manual/vote-note.php?id=118673&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118673">
    <a href="/manual/vote-note.php?id=118673&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118673" title="73% like this...">
    34
    </div>
  </div>
  <a href="#118673" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#118673"> &para;</a><div class="date" title="2016-01-18 05:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118673">
<div class="phpcode"><code><span class="html">Function to get current CPU load as percentage value under Windows and Linux.<br /><br />Note: Function is getServerLoad(). It will return a decimal value as percentage of current CPU load or NULL if something went wrong (e. g. insufficient access rights).<br /><br /><span class="default">&lt;?php<br /><br />    header</span><span class="keyword">(</span><span class="string">"Content-Type: text/plain"</span><span class="keyword">);<br /><br />    function </span><span class="default">_getServerLoadLinuxData</span><span class="keyword">()<br />    {<br />        if (</span><span class="default">is_readable</span><span class="keyword">(</span><span class="string">"/proc/stat"</span><span class="keyword">))<br />        {<br />            </span><span class="default">$stats </span><span class="keyword">= @</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"/proc/stat"</span><span class="keyword">);<br /><br />            if (</span><span class="default">$stats </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">)<br />            {<br />                </span><span class="comment">// Remove double spaces to make it easier to extract values with explode()<br />                </span><span class="default">$stats </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[[:blank:]]+/"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$stats</span><span class="keyword">);<br /><br />                </span><span class="comment">// Separate lines<br />                </span><span class="default">$stats </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">"\n\r"</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$stats</span><span class="keyword">);<br />                </span><span class="default">$stats </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$stats</span><span class="keyword">);<br /><br />                </span><span class="comment">// Separate values and find line for main CPU load<br />                </span><span class="keyword">foreach (</span><span class="default">$stats </span><span class="keyword">as </span><span class="default">$statLine</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$statLineData </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLine</span><span class="keyword">));<br /><br />                    </span><span class="comment">// Found!<br />                    </span><span class="keyword">if<br />                    (<br />                        (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">) &gt;= </span><span class="default">5</span><span class="keyword">) &amp;&amp;<br />                        (</span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"cpu"</span><span class="keyword">)<br />                    )<br />                    {<br />                        return array(<br />                            </span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],<br />                            </span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],<br />                            </span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">],<br />                            </span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],<br />                        );<br />                    }<br />                }<br />            }<br />        }<br /><br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Returns server load in percent (just number, without percent sign)<br />    </span><span class="keyword">function </span><span class="default">getServerLoad</span><span class="keyword">()<br />    {<br />        </span><span class="default">$load </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />        if (</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="string">"win"</span><span class="keyword">))<br />        {<br />            </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"wmic cpu get loadpercentage /all"</span><span class="keyword">;<br />            @</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br /><br />            if (</span><span class="default">$output</span><span class="keyword">)<br />            {<br />                foreach (</span><span class="default">$output </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)<br />                {<br />                    if (</span><span class="default">$line </span><span class="keyword">&amp;&amp; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[0-9]+\$/"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">))<br />                    {<br />                        </span><span class="default">$load </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br />            }<br />        }<br />        else<br />        {<br />            if (</span><span class="default">is_readable</span><span class="keyword">(</span><span class="string">"/proc/stat"</span><span class="keyword">))<br />            {<br />                </span><span class="comment">// Collect 2 samples - each with 1 second period<br />                // See: <a href="https://de.wikipedia.org/wiki/Load#Der_Load_Average_auf_Unix-Systemen" rel="nofollow" target="_blank">https://de.wikipedia.org/wiki/Load#Der_Load_Average_auf_Unix-Systemen</a><br />                </span><span class="default">$statData1 </span><span class="keyword">= </span><span class="default">_getServerLoadLinuxData</span><span class="keyword">();<br />                </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />                </span><span class="default">$statData2 </span><span class="keyword">= </span><span class="default">_getServerLoadLinuxData</span><span class="keyword">();<br /><br />                if<br />                (<br />                    (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$statData1</span><span class="keyword">)) &amp;&amp;<br />                    (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$statData2</span><span class="keyword">))<br />                )<br />                {<br />                    </span><span class="comment">// Get difference<br />                    </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] -= </span><span class="default">$statData1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                    </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] -= </span><span class="default">$statData1</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />                    </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] -= </span><span class="default">$statData1</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />                    </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] -= </span><span class="default">$statData1</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br /><br />                    </span><span class="comment">// Sum up the 4 values for User, Nice, System and Idle and calculate<br />                    // the percentage of idle time (which is part of the 4 values!)<br />                    </span><span class="default">$cpuTime </span><span class="keyword">= </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] + </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] + </span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br /><br />                    </span><span class="comment">// Invert percentage to get CPU time, not idle time<br />                    </span><span class="default">$load </span><span class="keyword">= </span><span class="default">100 </span><span class="keyword">- (</span><span class="default">$statData2</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] * </span><span class="default">100 </span><span class="keyword">/ </span><span class="default">$cpuTime</span><span class="keyword">);<br />                }<br />            }<br />        }<br /><br />        return </span><span class="default">$load</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//----------------------------<br /><br />    </span><span class="default">$cpuLoad </span><span class="keyword">= </span><span class="default">getServerLoad</span><span class="keyword">();<br />    if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$cpuLoad</span><span class="keyword">)) {<br />        echo </span><span class="string">"CPU load not estimateable (maybe too old Windows or missing rights at Linux or Windows)"</span><span class="keyword">;<br />    }<br />    else {<br />        echo </span><span class="default">$cpuLoad </span><span class="keyword">. </span><span class="string">"%"</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107243">  <div class="votes">
    <div id="Vu107243">
    <a href="/manual/vote-note.php?id=107243&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107243">
    <a href="/manual/vote-note.php?id=107243&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107243" title="76% like this...">
    24
    </div>
  </div>
  <a href="#107243" class="name">
  <strong class="user"><em>rick at rctonline dot nl</em></strong></a><a class="genanchor" href="#107243"> &para;</a><div class="date" title="2012-01-24 12:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107243">
<div class="phpcode"><code><span class="html">Here is another one that also works on windows. Note that this method is not fast, so be careful in the number of calls to this function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_server_load</span><span class="keyword">() {<br />    <br />        if (</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="string">'win'</span><span class="keyword">)) {<br />        <br />            </span><span class="default">$wmi </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Winmgmts://"</span><span class="keyword">);<br />            </span><span class="default">$server </span><span class="keyword">= </span><span class="default">$wmi</span><span class="keyword">-&gt;</span><span class="default">execquery</span><span class="keyword">(</span><span class="string">"SELECT LoadPercentage FROM Win32_Processor"</span><span class="keyword">);<br />            <br />            </span><span class="default">$cpu_num </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$load_total </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            <br />            foreach(</span><span class="default">$server </span><span class="keyword">as </span><span class="default">$cpu</span><span class="keyword">){<br />                </span><span class="default">$cpu_num</span><span class="keyword">++;<br />                </span><span class="default">$load_total </span><span class="keyword">+= </span><span class="default">$cpu</span><span class="keyword">-&gt;</span><span class="default">loadpercentage</span><span class="keyword">;<br />            }<br />            <br />            </span><span class="default">$load </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$load_total</span><span class="keyword">/</span><span class="default">$cpu_num</span><span class="keyword">);<br />            <br />        } else {<br />        <br />            </span><span class="default">$sys_load </span><span class="keyword">= </span><span class="default">sys_getloadavg</span><span class="keyword">();<br />            </span><span class="default">$load </span><span class="keyword">= </span><span class="default">$sys_load</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        <br />        }<br />        <br />        return (int) </span><span class="default">$load</span><span class="keyword">;<br />    <br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126283">  <div class="votes">
    <div id="Vu126283">
    <a href="/manual/vote-note.php?id=126283&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126283">
    <a href="/manual/vote-note.php?id=126283&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126283" title="85% like this...">
    5
    </div>
  </div>
  <a href="#126283" class="name">
  <strong class="user"><em>Chris Wheeler</em></strong></a><a class="genanchor" href="#126283"> &para;</a><div class="date" title="2021-07-28 10:28"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126283">
<div class="phpcode"><code><span class="html">It is important to note that sys_getloadavg() does not return a percentage, and the numbers that it returns are completely meaningless if you do not know the number of CPU cores. To get the number as a percentage you need to divide the value by the number of CPU cores in the system. (eg: if the value is 0.5 and you have two cores, then you are using 25% of the CPU on average). Here is a simple function to get the values as a percent:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">percentloadavg</span><span class="keyword">(){<br />    </span><span class="default">$cpu_count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="string">'/proc/cpuinfo'</span><span class="keyword">)) {<br />        </span><span class="default">$cpuinfo </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'/proc/cpuinfo'</span><span class="keyword">);<br />        </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/^processor/m'</span><span class="keyword">, </span><span class="default">$cpuinfo</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />        </span><span class="default">$cpu_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="default">$sys_getloadavg </span><span class="keyword">= </span><span class="default">sys_getloadavg</span><span class="keyword">();<br />    </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] / </span><span class="default">$cpu_count</span><span class="keyword">;<br />    </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] / </span><span class="default">$cpu_count</span><span class="keyword">;<br />    </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">$sys_getloadavg</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] / </span><span class="default">$cpu_count</span><span class="keyword">;<br /><br />    return </span><span class="default">$sys_getloadavg</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71412">  <div class="votes">
    <div id="Vu71412">
    <a href="/manual/vote-note.php?id=71412&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71412">
    <a href="/manual/vote-note.php?id=71412&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71412" title="65% like this...">
    8
    </div>
  </div>
  <a href="#71412" class="name">
  <strong class="user"><em>scott at corelevel dot com</em></strong></a><a class="genanchor" href="#71412"> &para;</a><div class="date" title="2006-11-27 02:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71412">
<div class="phpcode"><code><span class="html">I was having a problem with a large script I need to run - was a loop through about 50,000 records and downloading several pictures for a bunch of them, and updating the database.<br /><br />the problem came as I started getting visitors to my site, the server would get behind, run out of memory, iowait skyrockets, mysql slows down... was a total downhill spiral.<br /><br />Use this to fix it.<br /><br />$load = sys_getloadavg();<br />$sleep=5;<br />$maxload=2;<br />if ($load[0] &gt; $maxload) {<br />       sleep($sleep);<br />    echo "Busy server - sleep $sleep seconds&lt;br&gt;";<br />}<br /><br />I have to play with the load and the sleep number to find what worked for my script, but now my server does not bog at all.</span></code></div>
  </div>
 </div>
  <div class="note" id="67928">  <div class="votes">
    <div id="Vu67928">
    <a href="/manual/vote-note.php?id=67928&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67928">
    <a href="/manual/vote-note.php?id=67928&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67928" title="58% like this...">
    3
    </div>
  </div>
  <a href="#67928" class="name">
  <strong class="user"><em>surfchen at gmail dot com</em></strong></a><a class="genanchor" href="#67928"> &para;</a><div class="date" title="2006-07-06 09:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67928">
<div class="phpcode"><code><span class="html">the codes below will provide this function for order versions of PHP.<br />if (!function_exists('sys_getloadavg')) {<br />    function sys_getloadavg()<br />    {<br />        $loadavg_file = '/proc/loadavg';<br />        if (file_exists($loadavg_file)) {<br />            return explode(chr(32),file_get_contents($loadavg_file));<br />        }<br />        return array(0,0,0);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94713">  <div class="votes">
    <div id="Vu94713">
    <a href="/manual/vote-note.php?id=94713&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94713">
    <a href="/manual/vote-note.php?id=94713&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94713" title="57% like this...">
    3
    </div>
  </div>
  <a href="#94713" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#94713"> &para;</a><div class="date" title="2009-11-19 12:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94713">
<div class="phpcode"><code><span class="html">To get just current load avg, you can do :
<br />
<br /><span class="default">&lt;?php
<br />$output </span><span class="keyword">= </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">'cat /proc/loadavg'</span><span class="keyword">);
<br /></span><span class="default">$loadavg </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62557">  <div class="votes">
    <div id="Vu62557">
    <a href="/manual/vote-note.php?id=62557&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62557">
    <a href="/manual/vote-note.php?id=62557&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62557" title="57% like this...">
    3
    </div>
  </div>
  <a href="#62557" class="name">
  <strong class="user"><em>tom pittlik</em></strong></a><a class="genanchor" href="#62557"> &para;</a><div class="date" title="2006-03-03 02:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62557">
<div class="phpcode"><code><span class="html">The code below mimics the output of sys_getloadavg(). You may have to tweak the way the substring is captured for different distros.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">sys_getloadavg_hack</span><span class="keyword">()
<br />{
<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"uptime"</span><span class="keyword">),</span><span class="string">":"</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">);
<br />    </span><span class="default">$avs </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">"trim"</span><span class="keyword">,</span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">));
<br />
<br />    return </span><span class="default">$avs</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">sys_getloadavg_hack</span><span class="keyword">());
<br />
<br /></span><span class="comment">// Array
<br />// (
<br />//     [0] =&gt; 6.24
<br />//     [1] =&gt; 4.92
<br />//     [2] =&gt; 3.99
<br />// )
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />This function is a neat way of running low priority or non-essential cron jobs on a busy server - if the load is high, don't continue with the task (and try again in a few minutes time).</span></code></div>
  </div>
 </div>
  <div class="note" id="115117">  <div class="votes">
    <div id="Vu115117">
    <a href="/manual/vote-note.php?id=115117&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115117">
    <a href="/manual/vote-note.php?id=115117&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115117" title="57% like this...">
    1
    </div>
  </div>
  <a href="#115117" class="name">
  <strong class="user"><em>kexianbin at diyism dot com</em></strong></a><a class="genanchor" href="#115117"> &para;</a><div class="date" title="2014-05-28 10:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115117">
<div class="phpcode"><code><span class="html">Use this:<br /><span class="default">&lt;?php<br />$loads</span><span class="keyword">=</span><span class="default">sys_getloadavg</span><span class="keyword">();<br /></span><span class="default">$core_nums</span><span class="keyword">=</span><span class="default">trim</span><span class="keyword">(</span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"grep -P '^physical id' /proc/cpuinfo|wc -l"</span><span class="keyword">));<br /></span><span class="default">$load</span><span class="keyword">=</span><span class="default">$loads</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]/</span><span class="default">$core_nums</span><span class="keyword">;<br />echo </span><span class="default">$load</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98396">  <div class="votes">
    <div id="Vu98396">
    <a href="/manual/vote-note.php?id=98396&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98396">
    <a href="/manual/vote-note.php?id=98396&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98396" title="55% like this...">
    2
    </div>
  </div>
  <a href="#98396" class="name">
  <strong class="user"><em>828586 at gmail dot com</em></strong></a><a class="genanchor" href="#98396"> &para;</a><div class="date" title="2010-06-12 07:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98396">
<div class="phpcode"><code><span class="html">equivalent for windows<br /><span class="default">&lt;?php<br />ob_start</span><span class="keyword">();<br /></span><span class="default">passthru</span><span class="keyword">(</span><span class="string">'typeperf -sc 1 "\processor(_total)\% processor time"'</span><span class="keyword">,</span><span class="default">$status</span><span class="keyword">);<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br />if (</span><span class="default">$status </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/\,\"([0-9]+\.[0-9]+)\"/"</span><span class="keyword">,</span><span class="default">$content</span><span class="keyword">,</span><span class="default">$load</span><span class="keyword">)) {<br />        if (</span><span class="default">$load</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] &gt; </span><span class="default">get_config</span><span class="keyword">(</span><span class="string">'busy_error'</span><span class="keyword">)) {<br />            </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.1 503 Too busy, try again later'</span><span class="keyword">);<br />            die(</span><span class="string">'Server too busy. Please try again later.'</span><span class="keyword">);<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129847">  <div class="votes">
    <div id="Vu129847">
    <a href="/manual/vote-note.php?id=129847&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129847">
    <a href="/manual/vote-note.php?id=129847&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129847" title="no votes...">
    0
    </div>
  </div>
  <a href="#129847" class="name">
  <strong class="user"><em>seb dot gibbs at ymail dot com</em></strong></a><a class="genanchor" href="#129847"> &para;</a><div class="date" title="2024-11-12 02:45"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129847">
<div class="phpcode"><code><span class="html">// To get correct number of CPU cores<br />// as to calculate correct usage<br /><br />function getCpuCores() {<br />    // Linux<br />    if (stristr(PHP_OS, 'linux')) {<br />        // First, try /proc/cpuinfo<br />        if (file_exists('/proc/cpuinfo')) {<br />            preg_match_all('/^processor/m', file_get_contents('/proc/cpuinfo'), $matches);<br />            if ($matches[0]) return count($matches[0]);<br />        }<br />        // Fallback: Use nproc command<br />        return (int)shell_exec('nproc');<br />    }<br /><br />    // macOS<br />    if (stristr(PHP_OS, 'darwin')) {<br />        return (int)shell_exec('sysctl -n hw.physicalcpu');<br />    }<br /><br />    // Windows<br />    if (stristr(PHP_OS, 'win')) {<br />        // Try wmic command first<br />        $cpuCount = shell_exec('wmic cpu get NumberOfLogicalProcessors');<br />        if ($cpuCount) {<br />            preg_match('/\d+/', $cpuCount, $matches);<br />            if (isset($matches[0])) return (int)$matches[0];<br />        }<br />        // Fallback: Use environment variable<br />        return (int)getenv('NUMBER_OF_PROCESSORS');<br />    }<br /><br />    // If failed<br />    return false;<br />}<br /><br />// Example usage<br />// get CPU cores<br />$cores = getCpuCores();<br /><br />if (is_Numeric($cores)) {<br />    $corePerc = 100/$cores;<br />} else {<br />    $corePerc = 100;<br />    $cores = 'Unknown';<br />}<br />echo '&lt;div&gt;&lt;b&gt;CPU:&lt;/b&gt; '.$cores .' cores&lt;/div&gt;';<br /><br />// show correct CPU usage<br />echo '&lt;blockquote&gt;';<br />$cpu = sys_getloadavg();<br />echo(round($cpu[0]*$corePerc) .'% - last min&lt;br&gt;');<br />echo(round($cpu[1]*$corePerc) .'% - last 5 mins&lt;br&gt;');<br />echo(round($cpu[2]*$corePerc) .'% - last 15 mins&lt;br&gt;');<br />echo '&lt;/blockquote&gt;';</span></code></div>
  </div>
 </div>
  <div class="note" id="126473">  <div class="votes">
    <div id="Vu126473">
    <a href="/manual/vote-note.php?id=126473&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126473">
    <a href="/manual/vote-note.php?id=126473&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126473" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#126473" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126473"> &para;</a><div class="date" title="2021-10-04 08:50"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126473">
<div class="phpcode"><code><span class="html">simple function to get the cpu load with availability to most os platforms because I haven't actually been able to find a similar protocol if you happen to be testing out various os platforms...<br /><br />function cpu_load():?string {<br />    $load='';<br />    if(strtolower(PHP_OS_FAMILY)=="windows") {<br />        exec("wmic cpu get loadpercentage /all",$out);<br />        if($out) {<br />            foreach($out as $line) {<br />                if($line&amp;&amp;preg_match("/^[0-9]+\$/",$line)) {<br />                    $load=$line;<br />                    break;<br />                }<br />            }<br />        }<br />    } else {<br />        $load=sys_getloadavg();<br />    }<br />    return $load;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125595">  <div class="votes">
    <div id="Vu125595">
    <a href="/manual/vote-note.php?id=125595&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125595">
    <a href="/manual/vote-note.php?id=125595&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125595" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#125595" class="name">
  <strong class="user"><em>wowabbs+php at gmail dot com</em></strong></a><a class="genanchor" href="#125595"> &para;</a><div class="date" title="2020-12-11 03:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125595">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php </span><span class="comment">// Usage processor in Windows using FFI<br />  </span><span class="keyword">if(!</span><span class="default">dl</span><span class="keyword">(</span><span class="string">"ffi"</span><span class="keyword">)) </span><span class="comment">// Load the extension<br />    </span><span class="keyword">throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Cound not load the FFI extension.'</span><span class="keyword">);<br /><br />  function </span><span class="default">GetSystemTimes</span><span class="keyword">()<br />  {<br />    static </span><span class="default">$Kernel32</span><span class="keyword">;<br />    </span><span class="default">$Kernel32</span><span class="keyword">??=</span><span class="default">FFI</span><span class="keyword">::</span><span class="default">cdef</span><span class="keyword">(&lt;&lt;&lt;'IDL'<br /></span><span class="string">      bool GetSystemTimes(long long *IdleTime, long long *KernelTime, long long *UserTime);<br />      int GetLastError();<br /></span><span class="keyword">    IDL, </span><span class="string">'Kernel32.dll'</span><span class="keyword">);<br />    <br />    </span><span class="default">$IdleTime   </span><span class="keyword">= </span><span class="default">FFI</span><span class="keyword">::new(</span><span class="string">'long long'</span><span class="keyword">);<br />    </span><span class="default">$KernelTime </span><span class="keyword">= </span><span class="default">FFI</span><span class="keyword">::new(</span><span class="string">'long long'</span><span class="keyword">); </span><span class="comment">// already has idle time<br />    </span><span class="default">$UserTime   </span><span class="keyword">= </span><span class="default">FFI</span><span class="keyword">::new(</span><span class="string">'long long'</span><span class="keyword">);<br />  <br />    if(</span><span class="default">$Kernel32</span><span class="keyword">-&gt;</span><span class="default">GetSystemTimes</span><span class="keyword">(</span><span class="default">FFI</span><span class="keyword">::</span><span class="default">addr</span><span class="keyword">(</span><span class="default">$IdleTime</span><span class="keyword">), </span><span class="default">FFI</span><span class="keyword">::</span><span class="default">addr</span><span class="keyword">(</span><span class="default">$KernelTime</span><span class="keyword">), </span><span class="default">FFI</span><span class="keyword">::</span><span class="default">addr</span><span class="keyword">(</span><span class="default">$UserTime</span><span class="keyword">)))<br />      return [<br />        </span><span class="string">'Idle'   </span><span class="keyword">=&gt;</span><span class="default">$IdleTime   </span><span class="keyword">-&gt;</span><span class="default">cdata</span><span class="keyword">,<br />        </span><span class="string">'Kernel' </span><span class="keyword">=&gt;</span><span class="default">$KernelTime </span><span class="keyword">-&gt;</span><span class="default">cdata</span><span class="keyword">, </span><span class="comment">// already has idle time<br />        </span><span class="string">'User'   </span><span class="keyword">=&gt;</span><span class="default">$UserTime   </span><span class="keyword">-&gt;</span><span class="default">cdata</span><span class="keyword">,<br />      ];<br />    return [];<br />  }<br />  <br />  function </span><span class="default">GetSystemTimesDelta</span><span class="keyword">()<br />  {<br />    static </span><span class="default">$Last</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br />    static </span><span class="default">$Delta</span><span class="keyword">=[</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">];<br />    </span><span class="default">$Times</span><span class="keyword">=</span><span class="default">GetSystemTimes</span><span class="keyword">();<br />    </span><span class="default">$Last</span><span class="keyword">??=</span><span class="default">$Times</span><span class="keyword">;<br />    </span><span class="default">$Idle </span><span class="keyword">=</span><span class="default">$Times</span><span class="keyword">[</span><span class="string">'Idle'   </span><span class="keyword">]-</span><span class="default">$Last</span><span class="keyword">[</span><span class="string">'Idle'   </span><span class="keyword">];<br />    </span><span class="default">$All  </span><span class="keyword">=</span><span class="default">$Times</span><span class="keyword">[</span><span class="string">'Kernel' </span><span class="keyword">]-</span><span class="default">$Last</span><span class="keyword">[</span><span class="string">'Kernel' </span><span class="keyword">]+  </span><span class="comment">// Kernel already has idle time<br />           </span><span class="default">$Times</span><span class="keyword">[</span><span class="string">'User'   </span><span class="keyword">]-</span><span class="default">$Last</span><span class="keyword">[</span><span class="string">'User'   </span><span class="keyword">];<br />    if(</span><span class="default">$All</span><span class="keyword">&gt;</span><span class="default">1_000_000</span><span class="keyword">) </span><span class="comment">// 100ms<br />    </span><span class="keyword">{<br />      </span><span class="default">$Delta</span><span class="keyword">=[</span><span class="default">$Idle</span><span class="keyword">, </span><span class="default">$All</span><span class="keyword">];<br />      </span><span class="default">$Last</span><span class="keyword">=</span><span class="default">$Times</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$Delta</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">ProcessorLoad</span><span class="keyword">()<br />  {<br />    static </span><span class="default">$Load</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    [</span><span class="default">$Idle</span><span class="keyword">, </span><span class="default">$All</span><span class="keyword">]=</span><span class="default">GetSystemTimesDelta</span><span class="keyword">();<br />    if(</span><span class="default">$All</span><span class="keyword">&gt;</span><span class="default">0.0</span><span class="keyword">)<br />      </span><span class="default">$Load</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">-</span><span class="default">$Idle</span><span class="keyword">/</span><span class="default">$All</span><span class="keyword">;<br />    return </span><span class="default">$Load</span><span class="keyword">;<br />  }<br />  <br />  function </span><span class="default">KbHit</span><span class="keyword">()<br />  {<br />    Static </span><span class="default">$Sys</span><span class="keyword">;<br />    </span><span class="default">$Sys</span><span class="keyword">??=</span><span class="default">FFI</span><span class="keyword">::</span><span class="default">cdef</span><span class="keyword">(</span><span class="string">'bool _kbhit();'</span><span class="keyword">, </span><span class="string">'msvcrt.dll'</span><span class="keyword">);<br />    return </span><span class="default">$Sys</span><span class="keyword">-&gt;</span><span class="default">_kbhit</span><span class="keyword">();<br />  }<br />  <br />  while(!</span><span class="default">KbHit</span><span class="keyword">())<br />  {<br />    echo </span><span class="default">str_pad</span><span class="keyword">((string)</span><span class="default">round</span><span class="keyword">(</span><span class="default">ProcessorLoad</span><span class="keyword">()*</span><span class="default">100</span><span class="keyword">), </span><span class="default">3</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">), </span><span class="string">"%\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109451">  <div class="votes">
    <div id="Vu109451">
    <a href="/manual/vote-note.php?id=109451&amp;page=function.sys-getloadavg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109451">
    <a href="/manual/vote-note.php?id=109451&amp;page=function.sys-getloadavg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109451" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#109451" class="name">
  <strong class="user"><em>vladvarna at gmail dot com</em></strong></a><a class="genanchor" href="#109451"> &para;</a><div class="date" title="2012-07-18 02:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109451">
<div class="phpcode"><code><span class="html">You can emulate loadavg using this. Can also be used to get iowait
<br />
<br /><span class="default">&lt;?php
<br />   </span><span class="keyword">function </span><span class="default">ProcStats</span><span class="keyword">()
<br />   {    
<br />       </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/proc/stat"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />       if(</span><span class="default">false</span><span class="keyword">===</span><span class="default">$fp</span><span class="keyword">)
<br />               return </span><span class="default">false</span><span class="keyword">;
<br />       </span><span class="default">$a</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">));
<br />       </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//get rid of 'cpu'
<br />       </span><span class="keyword">while(!</span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />           </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">//get rid of ' '
<br />       </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br />       </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />       return </span><span class="default">$a</span><span class="keyword">;
<br />   }
<br />
<br />   </span><span class="default">$a</span><span class="keyword">=</span><span class="default">ProcStats</span><span class="keyword">();
<br />   </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />   </span><span class="default">$b</span><span class="keyword">=</span><span class="default">ProcStats</span><span class="keyword">();
<br />
<br />   
<br />   </span><span class="default">$total</span><span class="keyword">=</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)-</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br />   
<br />   </span><span class="default">$loadavg </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">* ((</span><span class="default">$b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$b</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$b</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) - (</span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]+</span><span class="default">$a</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]+</span><span class="default">$a</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])) / </span><span class="default">$total</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// user+nice+system
<br />   </span><span class="default">$iowait</span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">* (</span><span class="default">$b</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] - </span><span class="default">$a</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">])/</span><span class="default">$total</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sys-getloadavg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sys-getloadavg.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
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
