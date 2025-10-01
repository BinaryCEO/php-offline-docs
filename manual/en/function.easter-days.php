<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: easter_days - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.easter-days.php">
 <link rel="shorturl" href="https://www.php.net/easter-days">
 <link rel="alternate" href="https://www.php.net/easter-days" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.easter-date.php">
 <link rel="next" href="https://www.php.net/manual/en/function.frenchtojd.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.easter-days.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.easter-days.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.easter-days.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.easter-days.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.easter-days.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.easter-days.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.easter-days.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.easter-days.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.easter-days.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.easter-days.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.easter-days.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get number of days after March 21 on which Easter falls for a given year" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: easter_days - Manual" />
<meta name="twitter:description" content="Get number of days after March 21 on which Easter falls for a given year" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: easter_days - Manual" />
<meta itemprop="description" content="Get number of days after March 21 on which Easter falls for a given year" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get number of days after March 21 on which Easter falls for a given year" />

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
        <a href="function.frenchtojd.php">
          frenchtojd &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.easter-date.php">
          &laquo; easter_date        </a>
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
            <option value='en/function.easter-days.php' selected="selected">English</option>
            <option value='de/function.easter-days.php'>German</option>
            <option value='es/function.easter-days.php'>Spanish</option>
            <option value='fr/function.easter-days.php'>French</option>
            <option value='it/function.easter-days.php'>Italian</option>
            <option value='ja/function.easter-days.php'>Japanese</option>
            <option value='pt_BR/function.easter-days.php'>Brazilian Portuguese</option>
            <option value='ru/function.easter-days.php'>Russian</option>
            <option value='tr/function.easter-days.php'>Turkish</option>
            <option value='uk/function.easter-days.php'>Ukrainian</option>
            <option value='zh/function.easter-days.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.easter-days" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">easter_days</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">easter_days</span> &mdash; <span class="dc-title">Get number of days after March 21 on which Easter falls for a given year</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.easter-days-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>easter_days</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$year</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="calendar.constants.php#constant.cal-easter-default">CAL_EASTER_DEFAULT</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the number of days after March 21 on which Easter falls
   for a given year. If no year is specified, the current year is
   assumed.
  </p>
  <p class="para">
   This function can be used instead of
   <span class="function"><a href="function.easter-date.php" class="function">easter_date()</a></span> to calculate Easter for years
   which fall outside the range of Unix timestamps (i.e. before 1970
   or after 2037).
  </p>
  <p class="para">
   The date of Easter Day was defined by the Council of Nicaea in
   AD325 as the Sunday after the first full moon which falls on or
   after the Spring Equinox.  The Equinox is assumed to always fall
   on 21st March, so the calculation reduces to determining the date
   of the full moon and the date of the following Sunday.  The
   algorithm used here was introduced around the year 532 by
   Dionysius Exiguus.  Under the Julian Calendar (for years before
   1753) a simple 19-year cycle is used to track the phases of the
   Moon.  Under the Gregorian Calendar (for years after 1753 -
   devised by Clavius and Lilius, and introduced by Pope Gregory
   XIII in October 1582, and into Britain and its then colonies in
   September 1752) two correction factors are added to make the
   cycle more accurate.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.easter-days-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">year</code></dt>
     <dd>
      <p class="para">
       The year as a positive number. If omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, defaults to the
       current year according to the local time.
      </p>
     </dd>
      
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Allows Easter dates to be calculated based
       on the Gregorian calendar during the years 1582 - 1752 when set to
       <strong><code><a href="calendar.constants.php#constant.cal-easter-roman">CAL_EASTER_ROMAN</a></code></strong>. See the <a href="calendar.constants.php" class="link">calendar constants</a> for more valid
       constants.      
       </p>
     </dd>
      
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.easter-days-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The number of days after March 21st that the Easter Sunday
   is in the given <code class="parameter">year</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.easter-days-changelog">
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
       <code class="parameter">year</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.easter-days-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2180">
    <p><strong>Example #1 <span class="function"><strong>easter_days()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">easter_days</span><span style="color: #007700">(</span><span style="color: #0000BB">1999</span><span style="color: #007700">);        </span><span style="color: #FF8000">// 14, i.e. April 4<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">easter_days</span><span style="color: #007700">(</span><span style="color: #0000BB">1492</span><span style="color: #007700">);        </span><span style="color: #FF8000">// 32, i.e. April 22<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">easter_days</span><span style="color: #007700">(</span><span style="color: #0000BB">1913</span><span style="color: #007700">);        </span><span style="color: #FF8000">//  2, i.e. March 23<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.easter-days-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.easter-date.php" class="function" rel="rdfs-seeAlso">easter_date()</a> - Get Unix timestamp for local midnight on Easter of a given year</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/easter-days.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.easter-days%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.easter-days&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.easter-days.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117383">  <div class="votes">
    <div id="Vu117383">
    <a href="/manual/vote-note.php?id=117383&amp;page=function.easter-days&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117383">
    <a href="/manual/vote-note.php?id=117383&amp;page=function.easter-days&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117383" title="66% like this...">
    9
    </div>
  </div>
  <a href="#117383" class="name">
  <strong class="user"><em>p dot rijt at caesar dot nl</em></strong></a><a class="genanchor" href="#117383"> &para;</a><div class="date" title="2015-06-01 03:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117383">
<div class="phpcode"><code><span class="html">This function returns an array of timestamp corresponding to Dutch National holidays. Liberation Day (Bevrijdingsdag) is added as a National holiday once every five years (2000, 2005, 2010, ...).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getHolidays</span><span class="keyword">(</span><span class="default">$year </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    if (</span><span class="default">$year </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$year </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">));<br />    }<br />    <br />    </span><span class="default">$easterDate  </span><span class="keyword">= </span><span class="default">easter_date</span><span class="keyword">(</span><span class="default">$year</span><span class="keyword">);<br />    </span><span class="default">$easterDay   </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'j'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br />    </span><span class="default">$easterMonth </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'n'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br />    </span><span class="default">$easterYear   </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$easterDate</span><span class="keyword">);<br />  <br />    </span><span class="default">$holidays </span><span class="keyword">= array(<br />        </span><span class="comment">// Nieuwjaarsdag<br />        </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">,  </span><span class="default">1</span><span class="keyword">,  </span><span class="default">$year</span><span class="keyword">),  <br />        </span><span class="comment">// 1e Kerstdag<br />        </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">),  <br />        </span><span class="comment">// 2e Kerstdag<br />        </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">26</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">)<br />    );<br />      <br />    </span><span class="comment">// Bevrijdingsdag<br />    </span><span class="keyword">if ((</span><span class="default">$year </span><span class="keyword">% </span><span class="default">5</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);  <br />    }<br />    <br />    </span><span class="comment">// Koninginnedag (&lt; 2014) of Koningsdag (&gt;= 2014). <br />    // Verplaats naar zaterdag als het valt op zondag.<br />    </span><span class="keyword">if (</span><span class="default">$year </span><span class="keyword">&lt;= </span><span class="default">2013</span><span class="keyword">) { </span><span class="comment">// Koninginnedag &lt;= 2013<br />        </span><span class="keyword">if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'w'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">)) == </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// Op zondag?<br />            </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">29</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);  </span><span class="comment">// Verplaats naar zaterdag<br />        </span><span class="keyword">} else {<br />            </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);  </span><span class="comment">// Koninginnedag<br />        </span><span class="keyword">}<br />    } else { </span><span class="comment">// Koningsdag &gt; 2014<br />        </span><span class="keyword">if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'w'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">27</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">)) == </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// Op zondag?<br />            </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">26</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);  </span><span class="comment">// Verplaats naar zaterdag<br />        </span><span class="keyword">} else {<br />            </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">27</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);  </span><span class="comment">// Koningsdag<br />        </span><span class="keyword">}<br />    }<br />    <br />    </span><span class="comment">// Onderstaande dagen hebben een datum afhankelijk van Pasen<br />    // Goede Vrijdag (= pasen - 2)<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'-2 days'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">));<br />    </span><span class="comment">// 1e Paasdag<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">);<br />    </span><span class="comment">// 2e Paasdag (= pasen +1)<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+1 days'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">));<br />    </span><span class="comment">// Hemelvaartsdag (= pasen + 39)<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+39 days'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">));<br />    </span><span class="comment">// 1e Pinksterdag (= pasen + 49)<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+49 days'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">));<br />    </span><span class="comment">// 2e Pinksterdag (= pasen + 50)<br />    </span><span class="default">$holidays</span><span class="keyword">[] = </span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'+50 days'</span><span class="keyword">, </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$easterMonth</span><span class="keyword">, </span><span class="default">$easterDay</span><span class="keyword">,  </span><span class="default">$easterYear</span><span class="keyword">));<br /><br />    </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$holidays</span><span class="keyword">);<br />  <br />    return </span><span class="default">$holidays</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$holidays </span><span class="keyword">= </span><span class="default">getHolidays</span><span class="keyword">(</span><span class="default">2014</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$holidays </span><span class="keyword">as </span><span class="default">$holiday</span><span class="keyword">) {<br />    echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'d-M-Y'</span><span class="keyword">, </span><span class="default">$holiday</span><span class="keyword">) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="16932">  <div class="votes">
    <div id="Vu16932">
    <a href="/manual/vote-note.php?id=16932&amp;page=function.easter-days&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16932">
    <a href="/manual/vote-note.php?id=16932&amp;page=function.easter-days&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16932" title="50% like this...">
    0
    </div>
  </div>
  <a href="#16932" class="name">
  <strong class="user"><em>ian at eiloart dot com-NOSPAM</em></strong></a><a class="genanchor" href="#16932"> &para;</a><div class="date" title="2001-11-19 11:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16932">
<div class="phpcode"><code><span class="html">Also, be aware that the eastern orthodox churches sometimes have different dates for easter. See, for example &lt;<a href="http://webexhibits.org/calendars/calendar-christian-easter.html&gt;." rel="nofollow" target="_blank">http://webexhibits.org/calendars/calendar-christian-easter.html&gt;.</a> And note that the dates of easter a subject to change,  for example, the churches might some day decide to unify the dates.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.easter-days&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.easter-days.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
