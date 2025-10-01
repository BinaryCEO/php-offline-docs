<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: unixtojd - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.unixtojd.php">
 <link rel="shorturl" href="https://www.php.net/unixtojd">
 <link rel="alternate" href="https://www.php.net/unixtojd" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.juliantojd.php">
 <link rel="next" href="https://www.php.net/manual/en/book.datetime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.unixtojd.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.unixtojd.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.unixtojd.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.unixtojd.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.unixtojd.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.unixtojd.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.unixtojd.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.unixtojd.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.unixtojd.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.unixtojd.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.unixtojd.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert Unix timestamp to Julian Day" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: unixtojd - Manual" />
<meta name="twitter:description" content="Convert Unix timestamp to Julian Day" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: unixtojd - Manual" />
<meta itemprop="description" content="Convert Unix timestamp to Julian Day" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert Unix timestamp to Julian Day" />

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
        <a href="book.datetime.php">
          Date/Time &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.juliantojd.php">
          &laquo; juliantojd        </a>
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
            <option value='en/function.unixtojd.php' selected="selected">English</option>
            <option value='de/function.unixtojd.php'>German</option>
            <option value='es/function.unixtojd.php'>Spanish</option>
            <option value='fr/function.unixtojd.php'>French</option>
            <option value='it/function.unixtojd.php'>Italian</option>
            <option value='ja/function.unixtojd.php'>Japanese</option>
            <option value='pt_BR/function.unixtojd.php'>Brazilian Portuguese</option>
            <option value='ru/function.unixtojd.php'>Russian</option>
            <option value='tr/function.unixtojd.php'>Turkish</option>
            <option value='uk/function.unixtojd.php'>Ukrainian</option>
            <option value='zh/function.unixtojd.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.unixtojd" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">unixtojd</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">unixtojd</span> &mdash; <span class="dc-title">Convert Unix timestamp to Julian Day</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.unixtojd-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>unixtojd</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$timestamp</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Return the Julian Day for a Unix <code class="parameter">timestamp</code>
   (seconds since 1.1.1970), or for the current day if no
   <code class="parameter">timestamp</code> is given. Either way, the time is regarded
   as local time (not UTC).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.unixtojd-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">timestamp</code></dt>
     <dd>
      <p class="para">
       A unix timestamp to convert.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.unixtojd-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A julian day number as integer,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.unixtojd-changelog">
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
       <code class="parameter">timestamp</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.unixtojd-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.jdtounix.php" class="function" rel="rdfs-seeAlso">jdtounix()</a> - Convert Julian Day to Unix timestamp</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/unixtojd.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.unixtojd%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.unixtojd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unixtojd.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69310">  <div class="votes">
    <div id="Vu69310">
    <a href="/manual/vote-note.php?id=69310&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69310">
    <a href="/manual/vote-note.php?id=69310&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69310" title="63% like this...">
    3
    </div>
  </div>
  <a href="#69310" class="name">
  <strong class="user"><em>fabio at llgp dot org</em></strong></a><a class="genanchor" href="#69310"> &para;</a><div class="date" title="2006-08-31 02:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69310">
<div class="phpcode"><code><span class="html">If you need an easy way to convert an unix timestamp to a decimal julian day you can use:<br /><br />$julianDay = $unixTimeStamp / 86400 + 2440587.5;<br /><br />86400 is the number of seconds in a day;<br />2440587.5 is the julian day at 1/1/1970 0:00 UTC.</span></code></div>
  </div>
 </div>
  <div class="note" id="68798">  <div class="votes">
    <div id="Vu68798">
    <a href="/manual/vote-note.php?id=68798&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68798">
    <a href="/manual/vote-note.php?id=68798&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68798" title="100% like this...">
    2
    </div>
  </div>
  <a href="#68798" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#68798"> &para;</a><div class="date" title="2006-08-10 07:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68798">
<div class="phpcode"><code><span class="html">Its clearly stated that this function returns the Julian Day, not Julian Day + time.<br /><br />If you want the time with it you will have to do something like:<br /><br />$t=time();<br />$jd=unixtojd($t)+($t%60*60*24)/60*60*24;</span></code></div>
  </div>
 </div>
  <div class="note" id="129274">  <div class="votes">
    <div id="Vu129274">
    <a href="/manual/vote-note.php?id=129274&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129274">
    <a href="/manual/vote-note.php?id=129274&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129274" title="no votes...">
    0
    </div>
  </div>
  <a href="#129274" class="name">
  <strong class="user"><em>unixtojd at isslow dot com</em></strong></a><a class="genanchor" href="#129274"> &para;</a><div class="date" title="2024-02-24 08:50"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129274">
<div class="phpcode"><code><span class="html">unixtojd is slow.<br />Direct arithmetics calculations are faster and still coherent with original unixtojd.<br /><br />Feel free to add a test on $timestamp to set it to time() when $timestamp is null.<br /><br />function fast_unixtojd($timestamp){<br />    return intval($timestamp / 86400 + 2440588);<br />}<br /><br />$time = time();<br />$t_unixtojd = 0;<br />$t_fast_unixtojd = 0;<br />for ($t = $time - 240 * 3600; $t &lt; $time; $t++) {<br />    $time1 = microtime(true);<br />    $a = unixtojd($t);<br />    $time2 = microtime(true);<br />    $b = fast_unixtojd($t);<br />    $time3 = microtime(true);<br />    if ($a != $b) {<br />        echo "$a $b $t\n";<br />        break;<br />    }<br />    $t_unixtojd += $time2 - $time1;<br />    $t_fast_unixtojd += $time3 - $time2;<br />}<br />echo "unixtojd: $t_unixtojd sec\nfast_unixtojd: $t_fast_unixtojd sec\n";<br /><br />unixtojd: 0.42854166030884 sec<br />fast_unixtojd: 0.13218021392822 sec</span></code></div>
  </div>
 </div>
  <div class="note" id="74196">  <div class="votes">
    <div id="Vu74196">
    <a href="/manual/vote-note.php?id=74196&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74196">
    <a href="/manual/vote-note.php?id=74196&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74196" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74196" class="name">
  <strong class="user"><em>hrabi at linuxwaves dot com</em></strong></a><a class="genanchor" href="#74196"> &para;</a><div class="date" title="2007-03-29 06:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74196">
<div class="phpcode"><code><span class="html">according to <a href="http://www.decimaltime.hynes.net/dates.html#jd" rel="nofollow" target="_blank">http://www.decimaltime.hynes.net/dates.html#jd</a> and reading "X. Calendar Functions" on this side, it seems that php "jd" is precisely mean as "Chronological Julian Day" (should it be named cjd, and primarily strictly mentioned - isn't it?), used for covnersion between calendar systems. Than it's ok (but Incomplete manual is strongly confusing here IMHO).<br />Even that, cJD is adjusted to a local time, so... I am rather babeled now, so nothing else :-).</span></code></div>
  </div>
 </div>
  <div class="note" id="74194">  <div class="votes">
    <div id="Vu74194">
    <a href="/manual/vote-note.php?id=74194&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74194">
    <a href="/manual/vote-note.php?id=74194&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74194" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74194" class="name">
  <strong class="user"><em>hrabi at linuxwaves dot com</em></strong></a><a class="genanchor" href="#74194"> &para;</a><div class="date" title="2007-03-29 03:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74194">
<div class="phpcode"><code><span class="html">This is unusable. Julian Day start at noon, not midnight. It's better to use Fabio solution (however there is a lurk problem with leap second).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mmd</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">, </span><span class="default">$str_time</span><span class="keyword">) {<br />   </span><span class="default">$t </span><span class="keyword">= </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$str_time</span><span class="keyword">);<br />   </span><span class="default">$j </span><span class="keyword">= </span><span class="default">unixtojd</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br />   </span><span class="default">$s </span><span class="keyword">= </span><span class="default">gmstrftime</span><span class="keyword">(</span><span class="string">'%D %T %Z'</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">);<br />   </span><span class="default">$j_fabio </span><span class="keyword">= </span><span class="default">$t </span><span class="keyword">/ </span><span class="default">86400 </span><span class="keyword">+ </span><span class="default">2440587.5</span><span class="keyword">;<br /><br />   </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"</span><span class="keyword">${</span><span class="default">txt</span><span class="keyword">}</span><span class="string"> =&gt; (%s) %s, %s U, %s J, or %s J&lt;br&gt;\n"</span><span class="keyword">, </span><span class="default">$str_time</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">$j_fabio</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//$xt = strtotime("1.1.1970 15:00.00 GMT");<br /></span><span class="default">$sam </span><span class="keyword">= </span><span class="string">"9.10.1995 02:00.01 GMT"</span><span class="keyword">;<br /></span><span class="default">$spm </span><span class="keyword">= </span><span class="string">"9.10.1995 22:00.01 GMT"</span><span class="keyword">;<br /><br /></span><span class="comment">// unixtojd for $spm returns 2450000 (OK), but for $sam returns 2450000 too! (it is wrong).<br /></span><span class="default">mmd</span><span class="keyword">(</span><span class="string">"am"</span><span class="keyword">, </span><span class="default">$sam</span><span class="keyword">);  </span><span class="comment">// should be 2449999 (+ 0.58334)<br /></span><span class="default">mmd</span><span class="keyword">(</span><span class="string">"pm"</span><span class="keyword">, </span><span class="default">$spm</span><span class="keyword">);  </span><span class="comment">// should be 2450000 (+ 0.41668)<br /></span><span class="default">?&gt;<br /></span><br />reference<br />unix time, and UTC, TAI, ntp, ... problems: <a href="http://en.wikipedia.org/wiki/Unix_time" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Unix_time</a><br />Julian Date Converter: <a href="http://aa.usno.navy.mil/data/docs/JulianDate.html" rel="nofollow" target="_blank">http://aa.usno.navy.mil/data/docs/JulianDate.html</a><br />history overview: <a href="http://parris.josh.com.au/humour/work/17Nov1858.shtml" rel="nofollow" target="_blank">http://parris.josh.com.au/humour/work/17Nov1858.shtml</a></span></code></div>
  </div>
 </div>
  <div class="note" id="37559">  <div class="votes">
    <div id="Vu37559">
    <a href="/manual/vote-note.php?id=37559&amp;page=function.unixtojd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37559">
    <a href="/manual/vote-note.php?id=37559&amp;page=function.unixtojd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37559" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37559" class="name">
  <strong class="user"><em>johnston at capsaicin dot ca</em></strong></a><a class="genanchor" href="#37559"> &para;</a><div class="date" title="2003-11-19 01:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37559">
<div class="phpcode"><code><span class="html">Also note that epoch is in UTC time (epoch is a specific point in time - epoch is not different for every time zone), so be aware of timezone complexities.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.unixtojd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unixtojd.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
