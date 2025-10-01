<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: atan2 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.atan2.php">
 <link rel="shorturl" href="https://www.php.net/atan2">
 <link rel="alternate" href="https://www.php.net/atan2" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.atan.php">
 <link rel="next" href="https://www.php.net/manual/en/function.atanh.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.atan2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.atan2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.atan2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.atan2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.atan2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.atan2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.atan2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.atan2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.atan2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.atan2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.atan2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Arc tangent of two variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: atan2 - Manual" />
<meta name="twitter:description" content="Arc tangent of two variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: atan2 - Manual" />
<meta itemprop="description" content="Arc tangent of two variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Arc tangent of two variables" />

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
        <a href="function.atanh.php">
          atanh &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.atan.php">
          &laquo; atan        </a>
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
            <option value='en/function.atan2.php' selected="selected">English</option>
            <option value='de/function.atan2.php'>German</option>
            <option value='es/function.atan2.php'>Spanish</option>
            <option value='fr/function.atan2.php'>French</option>
            <option value='it/function.atan2.php'>Italian</option>
            <option value='ja/function.atan2.php'>Japanese</option>
            <option value='pt_BR/function.atan2.php'>Brazilian Portuguese</option>
            <option value='ru/function.atan2.php'>Russian</option>
            <option value='tr/function.atan2.php'>Turkish</option>
            <option value='uk/function.atan2.php'>Ukrainian</option>
            <option value='zh/function.atan2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.atan2" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">atan2</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">atan2</span> &mdash; <span class="dc-title">Arc tangent of two variables</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.atan2-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
    <span class="methodname"><strong>atan2</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$y</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$x</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="simpara">
   This function calculates the arc tangent of the two variables
   <code class="parameter">x</code> and <code class="parameter">y</code>.  It is
   similar to calculating the arc tangent of
   <code class="parameter">y</code> / <code class="parameter">x</code>, except that
   the signs of both arguments are used to determine the quadrant of
   the result.
  </p>
  <p class="simpara">
   The function returns the result in radians, which is between -PI
   and PI (inclusive).
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.atan2-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">y</code></dt>
     <dd>
      <p class="para">
       Dividend parameter
      </p>
     </dd>
    
    
     <dt><code class="parameter">x</code></dt>
     <dd>
      <p class="para">
       Divisor parameter
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.atan2-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The arc tangent of <code class="parameter">y</code>/<code class="parameter">x</code> 
   in radians.
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.atan2-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.atan.php" class="function" rel="rdfs-seeAlso">atan()</a> - Arc tangent</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/atan2.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.atan2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.atan2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.atan2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="32332">  <div class="votes">
    <div id="Vu32332">
    <a href="/manual/vote-note.php?id=32332&amp;page=function.atan2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32332">
    <a href="/manual/vote-note.php?id=32332&amp;page=function.atan2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32332" title="74% like this...">
    15
    </div>
  </div>
  <a href="#32332" class="name">
  <strong class="user"><em>reubs at idsdatanet dot com</em></strong></a><a class="genanchor" href="#32332"> &para;</a><div class="date" title="2003-05-23 01:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32332">
<div class="phpcode"><code><span class="html">Just a note:<br /><br />PHP's atan2 function receives parameters in (y,x) and Excel receives it in (x,y) format. Just in case you are porting formulas across. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="88119">  <div class="votes">
    <div id="Vu88119">
    <a href="/manual/vote-note.php?id=88119&amp;page=function.atan2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88119">
    <a href="/manual/vote-note.php?id=88119&amp;page=function.atan2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88119" title="70% like this...">
    11
    </div>
  </div>
  <a href="#88119" class="name">
  <strong class="user"><em>fred dot beck at rrd dot com</em></strong></a><a class="genanchor" href="#88119"> &para;</a><div class="date" title="2009-01-11 12:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88119">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> *    Given an origin point of (0,0) and a destination point $x,$y<br /> *  somewhere on an axis grid, compass() determines the compass<br /> *  heading(direction) of the destination point from the origin<br /> *    <br /> *  HOWEVER, atan2(y,x)'s natural compass thinks east is north, <br /> * <br /> *  {135}-------{ 90}-------{45}<br /> *      | +-----[ +y]-----+ |  <br /> *      | |               | |  <br /> *      | |               | |  <br /> *  {180} [-x]  [0,0]  [+x] {0} &lt;--------- North ?<br /> *      | |               | |  <br /> *      | |               | |  <br /> *      | +-----[ -y]-----+ | <br /> * {-135}-------{-90}-------{-45}<br /> *<br /> *<br /> *    SO, we simply transpose the (y,x) parameters to atan2(x,y) <br /> *     which will both rotate(left) and reflect(mirror) the compass. <br /> *<br /> *  Which gives us this compass<br /> * <br /> *  {-45}-------{ 0 }-------{45}<br /> *      | +-----[ +y]-----+ |  <br /> *      | |               | |  <br /> *      | |               | |  <br /> *  {-90} [-x]  [0,0]  [+x] {90}<br /> *      | |               | |  <br /> *      | |               | |  <br /> *      | +-----[ -y]-----+ | <br /> * {-135}-------{180}-------{135}<br /> *<br /> *  FINALLY,` we check if param $x was indeed a negative number, <br /> *  if so we simply add 360 to the negative angle returned by atan2() <br /> *    <br /> */<br /></span><span class="keyword">function </span><span class="default">compass</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$x</span><span class="keyword">==</span><span class="default">0 </span><span class="keyword">AND </span><span class="default">$y</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){ return </span><span class="default">0</span><span class="keyword">; } </span><span class="comment">// ...or return 360<br />        </span><span class="keyword">return (</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)<br />        ? </span><span class="default">rad2deg</span><span class="keyword">(</span><span class="default">atan2</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">))+</span><span class="default">360      </span><span class="comment">// TRANSPOSED !! y,x params<br />        </span><span class="keyword">: </span><span class="default">rad2deg</span><span class="keyword">(</span><span class="default">atan2</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">)); <br />    }<br />function </span><span class="default">polar</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">)<br />    {<br />        </span><span class="default">$N </span><span class="keyword">= (</span><span class="default">$y</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)?</span><span class="string">'N'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$S </span><span class="keyword">= (</span><span class="default">$y</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">)?</span><span class="string">'S'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$E </span><span class="keyword">= (</span><span class="default">$x</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)?</span><span class="string">'E'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$W </span><span class="keyword">= (</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">)?</span><span class="string">'W'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;        <br />        return </span><span class="default">$N</span><span class="keyword">.</span><span class="default">$S</span><span class="keyword">.</span><span class="default">$E</span><span class="keyword">.</span><span class="default">$W</span><span class="keyword">;<br />    }<br />function </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">)<br />     {<br />         return </span><span class="string">'&lt;BR&gt;'<br />             </span><span class="keyword">.</span><span class="default">polar</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">)<br />             .</span><span class="string">' compass( x='</span><span class="keyword">.</span><span class="default">$x</span><span class="keyword">.</span><span class="string">', y='</span><span class="keyword">.</span><span class="default">$y</span><span class="keyword">.</span><span class="string">' )= '<br />             </span><span class="keyword">.</span><span class="default">number_format</span><span class="keyword">(</span><span class="default">compass</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">),</span><span class="default">3</span><span class="keyword">).</span><span class="string">'&amp;deg'</span><span class="keyword">;<br />     }<br /><br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">.06</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,</span><span class="default">.06</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,-</span><span class="default">.06</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">.06</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">.06</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">3</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">3</span><span class="keyword">,-</span><span class="default">.06</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">3</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">3</span><span class="keyword">,</span><span class="default">.06</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">3</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">show_compass</span><span class="keyword">(-</span><span class="default">.06</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br /><br /></span><span class="comment">/* RENDERS THIS<br /><br />N compass( x=0, y=3 )= 0 °<br />NE compass( x=0.06, y=3 )= 1.14576283818 °<br />NE compass( x=3, y=3 )= 45 °<br />NE compass( x=3, y=0.06 )= 88.8542371618 °<br />E compass( x=3, y=0 )= 90 °<br />SE compass( x=3, y=-0.06 )= 91.1457628382 °<br />SE compass( x=3, y=-3 )= 135 °<br />SE compass( x=0.06, y=-3 )= 178.854237162 °<br />S compass( x=0, y=-3 )= 180 °<br />SW compass( x=-0.06, y=-3 )= 181.145762838 °<br />SW compass( x=-3, y=-3 )= 225 °<br />SW compass( x=-3, y=-0.06 )= 268.854237162 °<br />W compass( x=-3, y=0 )= 270 °<br />NW compass( x=-3, y=0.06 )= 271.145762838 °<br />NW compass( x=-3, y=3 )= 315 °<br />NW compass( x=-0.06, y=3 )= 358.854237162 °<br /><br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.atan2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.atan2.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
