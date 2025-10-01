<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateTimeImmutable::createFromFormat - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/datetimeimmutable.createfromformat.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/datetimeimmutable.createfromformat.php">
 <link rel="alternate" href="https://www.php.net/manual/en/datetimeimmutable.createfromformat.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.datetimeimmutable.php">
 <link rel="prev" href="https://www.php.net/manual/en/datetimeimmutable.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/datetimeimmutable.createfrominterface.php">

 <link rel="alternate" href="https://www.php.net/manual/en/datetimeimmutable.createfromformat.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/datetimeimmutable.createfromformat.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/datetimeimmutable.createfromformat.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/datetimeimmutable.createfromformat.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/datetimeimmutable.createfromformat.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/datetimeimmutable.createfromformat.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/datetimeimmutable.createfromformat.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/datetimeimmutable.createfromformat.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/datetimeimmutable.createfromformat.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/datetimeimmutable.createfromformat.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/datetimeimmutable.createfromformat.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parses a time string according to a specified format" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateTimeImmutable::createFromFormat - Manual" />
<meta name="twitter:description" content="Parses a time string according to a specified format" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateTimeImmutable::createFromFormat - Manual" />
<meta itemprop="description" content="Parses a time string according to a specified format" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parses a time string according to a specified format" />

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
        <a href="datetimeimmutable.createfrominterface.php">
          DateTimeImmutable::createFromInterface &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="datetimeimmutable.construct.php">
          &laquo; DateTimeImmutable::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='class.datetimeimmutable.php'>DateTimeImmutable</a></li>      </ul>
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
            <option value='en/datetimeimmutable.createfromformat.php' selected="selected">English</option>
            <option value='de/datetimeimmutable.createfromformat.php'>German</option>
            <option value='es/datetimeimmutable.createfromformat.php'>Spanish</option>
            <option value='fr/datetimeimmutable.createfromformat.php'>French</option>
            <option value='it/datetimeimmutable.createfromformat.php'>Italian</option>
            <option value='ja/datetimeimmutable.createfromformat.php'>Japanese</option>
            <option value='pt_BR/datetimeimmutable.createfromformat.php'>Brazilian Portuguese</option>
            <option value='ru/datetimeimmutable.createfromformat.php'>Russian</option>
            <option value='tr/datetimeimmutable.createfromformat.php'>Turkish</option>
            <option value='uk/datetimeimmutable.createfromformat.php'>Ukrainian</option>
            <option value='zh/datetimeimmutable.createfromformat.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="datetimeimmutable.createfromformat" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DateTimeImmutable::createFromFormat</h1>
  <h1 class="refname">date_create_immutable_from_format</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DateTimeImmutable::createFromFormat</span> -- <span class="refname">date_create_immutable_from_format</span> &mdash; <span class="dc-title">Parses a time string according to a specified format</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-datetimeimmutable.createfromformat-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>DateTimeImmutable::createFromFormat</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.datetimeimmutable.php" class="type DateTimeImmutable">DateTimeImmutable</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><a href="function.date-create-immutable-from-format.php" class="methodname">date_create_immutable_from_format</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$datetime</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.datetimezone.php" class="type DateTimeZone">DateTimeZone</a></span></span> <code class="parameter">$timezone</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.datetimeimmutable.php" class="type DateTimeImmutable">DateTimeImmutable</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns a new DateTimeImmutable object representing the date and time specified by the
   <code class="parameter">datetime</code> string, which was formatted in the given
   <code class="parameter">format</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="datetimeimmutable.createfromformat.parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">format</code></dt>
    <dd>
     <p class="para">
      The format that the passed in <span class="type"><a href="language.types.string.php" class="type string">string</a></span> should be in. See the
      formatting options below. In most cases, the same letters as for the
      <span class="function"><a href="function.date.php" class="function">date()</a></span> can be used.
     </p>
     <p class="para">
      All fields are initialised with the current date/time. In most cases you
      would want to reset these to &quot;zero&quot; (the Unix epoch, <code class="literal">1970-01-01
      00:00:00 UTC</code>). You do that by including the
      <code class="literal">!</code> character as first character in your
      <code class="parameter">format</code>, or <code class="literal">|</code> as your last.
      Please see the documentation for each character below for more
      information.
     </p>
     <p class="para">
      The format is parsed from left to right, which means that in some
      situations the order in which the format characters are present affects
      the result. In the case of <code class="literal">z</code> (the day of the year),
      it is required that a year has already been parsed,
      for example through the <code class="literal">Y</code> or <code class="literal">y</code>
      characters.
     </p>
     <p class="para">
      Letters that are used for parsing numbers allow a wide range of values,
      outside of what the logical range would be. For example, the
      <code class="literal">d</code> (day of the month) accepts values in the range from
      <code class="literal">00</code> to <code class="literal">99</code>. The only constraint is
      on the amount of digits. The date/time parser&#039;s overflow mechanism is
      used when out-of-range values are given. The examples below show some of
      this behaviour.
     </p>
     <p class="para">
      This also means that the data parsed for a format letter is greedy, and
      will read up to the amount of digits its format allows for. That can
      then also mean that there are no
      longer enough characters in the <code class="parameter">datetime</code> string
      for following format characters. An example on this page also
      illustrates this issue.
     </p>
     <p class="para">
      <table class="doctable table">
       <caption><strong>The following characters are recognized in the
       <code class="parameter">format</code> parameter string</strong></caption>
       
        <thead>
         <tr>
          <th><code class="parameter">format</code> character</th>
          <th>Description</th>
          <th>Example parsable values</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td style="text-align: center;"><em>Day</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">d</code> and <code class="literal">j</code></td>
          <td>Day of the month, 2 digits with or without leading zeros</td>
          <td>
           <code class="literal">01</code> to <code class="literal">31</code> or
           <code class="literal">1</code> to <code class="literal">31</code>. (2 digit numbers
           higher than the number of days in the month are accepted, in which
           case they will make the month overflow. For example using 33 with
           January, means February 2nd)
          </td>
         </tr>

         <tr>
          <td><code class="literal">D</code> and <code class="literal">l</code></td>
          <td>A textual representation of a day</td>
          <td>
           <code class="literal">Mon</code> through <code class="literal">Sun</code> or
           <code class="literal">Sunday</code> through <code class="literal">Saturday</code>. If
           the day name given is different then the day name belonging to a
           parsed (or default) date is different, then an overflow occurs to
           the <em>next</em> date with the given day name. See the
           examples below for an explanation.
          </td>
         </tr>

         <tr>
          <td><code class="literal">S</code></td>
          <td>English ordinal suffix for the day of the month, 2
          characters. It&#039;s ignored while processing.</td>
          <td>
           <code class="literal">st</code>, <code class="literal">nd</code>, <code class="literal">rd</code> or
           <code class="literal">th</code>.
          </td>
         </tr>

         <tr>
          <td><code class="literal">z</code></td>
          <td>
           The day of the year (starting from 0);
           must be preceded by <code class="literal">Y</code> or <code class="literal">y</code>.
          </td>
          <td>
           <code class="literal">0</code> through <code class="literal">365</code>. (3 digit
           numbers higher than the numbers in a year are accepted, in which
           case they will make the year overflow. For example using 366 with
           2022, means January 2nd, 2023)
          </td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Month</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">F</code> and <code class="literal">M</code></td>
          <td>A textual representation of a month, such as January or Sept</td>
          <td>
           <code class="literal">January</code> through <code class="literal">December</code> or
           <code class="literal">Jan</code> through <code class="literal">Dec</code>
          </td>
         </tr>

         <tr>
          <td><code class="literal">m</code> and <code class="literal">n</code></td>
          <td>Numeric representation of a month, with or without leading zeros</td>
          <td>
           <code class="literal">01</code> through <code class="literal">12</code> or
           <code class="literal">1</code> through <code class="literal">12</code>.
           (2 digit numbers higher than 12 are accepted, in which case they
           will make the year overflow. For example using 13 means January in
           the next year)
          </td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Year</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">X</code> and <code class="literal">x</code></td>
          <td>A full numeric representation of a year, up to 19 digits,
           optionally prefixed by <code class="literal">+</code> or
           <code class="literal">-</code></td>
          <td>Examples: <code class="literal">0055</code>, <code class="literal">787</code>,
           <code class="literal">1999</code>, <code class="literal">-2003</code>,
           <code class="literal">+10191</code></td>
         </tr>

         <tr>
          <td><code class="literal">Y</code></td>
          <td>A full numeric representation of a year, up to 4 digits</td>
          <td>Examples: <code class="literal">0055</code>, <code class="literal">787</code>,
           <code class="literal">1999</code>, <code class="literal">2003</code></td>
         </tr>

         <tr>
          <td><code class="literal">y</code></td>
          <td>
           A two digit representation of a year (which is assumed to be in the
           range 1970-2069, inclusive)
          </td>
          <td>
           Examples:
           <code class="literal">99</code> or <code class="literal">03</code>
           (which will be interpreted as <code class="literal">1999</code> and
           <code class="literal">2003</code>, respectively)
          </td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Time</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">a</code> and <code class="literal">A</code></td>
          <td>Ante meridiem and Post meridiem</td>
          <td><code class="literal">am</code> or <code class="literal">pm</code></td>
         </tr>

         <tr>
          <td><code class="literal">g</code> and <code class="literal">h</code></td>
          <td>12-hour format of an hour with or without leading zero</td>
          <td>
           <code class="literal">1</code> through <code class="literal">12</code> or
           <code class="literal">01</code> through <code class="literal">12</code> (2 digit
           numbers higher than 12 are accepted, in which case they will make
           the day overflow. For example using <code class="literal">14</code> means
           <code class="literal">02</code> in the next AM/PM period)
          </td>
         </tr>

         <tr>
          <td><code class="literal">G</code> and <code class="literal">H</code></td>
          <td>24-hour format of an hour with or without leading zeros</td>
          <td>
           <code class="literal">0</code> through <code class="literal">23</code> or
           <code class="literal">00</code> through <code class="literal">23</code> (2 digit
           numbers higher than 24 are accepted, in which case they will make
           the day overflow. For example using <code class="literal">26</code> means
           <code class="literal">02:00</code> the next day)
          </td>
         </tr>

         <tr>
          <td><code class="literal">i</code></td>
          <td>Minutes with leading zeros</td>
          <td>
           <code class="literal">00</code> to <code class="literal">59</code>. (2 digit
           numbers higher than 59 are accepted, in which case they will make
           the hour overflow. For example using <code class="literal">66</code> means
           <code class="literal">:06</code> the next hour)
          </td>
         </tr>

         <tr>
          <td><code class="literal">s</code></td>
          <td>Seconds, with leading zeros</td>
          <td>
           <code class="literal">00</code> through <code class="literal">59</code> (2 digit
           numbers higher than 59 are accepted, in which case they will make
           the minute overflow. For example using <code class="literal">90</code> means
           <code class="literal">:30</code> the next minute)
          </td>
         </tr>

         <tr>
          <td><code class="literal">v</code></td>
          <td>Fraction in milliseconds (up to three digits)</td>
          <td>Example: <code class="literal">12</code> (<code class="literal">0.12</code>
          seconds), <code class="literal">345</code> (<code class="literal">0.345</code> seconds)</td>
         </tr>

         <tr>
          <td><code class="literal">u</code></td>
          <td>Fraction in microseconds (up to six digits)</td>
          <td>Example: <code class="literal">45</code> (<code class="literal">0.45</code>
          seconds), <code class="literal">654321</code> (<code class="literal">0.654321</code>
          seconds)</td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Timezone</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td>
           <code class="literal">e</code>, <code class="literal">O</code>, <code class="literal">p</code>,
           <code class="literal">P</code> and <code class="literal">T</code>
          </td>
          <td>Timezone identifier, or difference to UTC in hours, or
          difference to UTC with colon between hours and minutes, or timezone
          abbreviation</td>
          <td>Examples: <code class="literal">UTC</code>, <code class="literal">GMT</code>,
           <code class="literal">Atlantic/Azores</code> or
           <code class="literal">+0200</code> or <code class="literal">+02:00</code> or
           <code class="literal">EST</code>, <code class="literal">MDT</code>
          </td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Full Date/Time</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">U</code></td>
          <td>Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
          <td>Example: <code class="literal">1292177455</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Whitespace and Separators</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal"> </code> (space)</td>
          <td>Zero or more spaces, tabs, NBSP (U+A0), or NNBSP (U+202F)
          characters</td>
          <td>Example: <code class="literal">&quot;\t&quot;</code>, <code class="literal">&quot;  &quot;</code></td>
         </tr>

         <tr>
          <td><code class="literal">#</code></td>
          <td>
           One of the following separation symbol: <code class="literal">;</code>,
           <code class="literal">:</code>, <code class="literal">/</code>, <code class="literal">.</code>,
           <code class="literal">,</code>, <code class="literal">-</code>, <code class="literal">(</code> or
           <code class="literal">)</code>
          </td>
          <td>Example: <code class="literal">/</code></td>
         </tr>

         <tr>
          <td>
           <code class="literal">;</code>,
           <code class="literal">:</code>, <code class="literal">/</code>, <code class="literal">.</code>,
           <code class="literal">,</code>, <code class="literal">-</code>, <code class="literal">(</code> or
           <code class="literal">)</code>
          </td>
          <td>The specified character.</td>
          <td>Example: <code class="literal">-</code></td>
         </tr>

         <tr>
          <td><code class="literal">?</code></td>
          <td>A random byte</td>
          <td>Example: <code class="literal">^</code> (Be aware that for UTF-8
          characters you might need more than one <code class="literal">?</code>.
          In this case, using <code class="literal">*</code> is probably what you want
          instead)</td>
         </tr>

         <tr>
          <td><code class="literal">*</code></td>
          <td>Random bytes until the next separator or digit</td>
          <td>Example: <code class="literal">*</code> in <code class="literal">Y-*-d</code> with
          the string <code class="literal">2009-aWord-08</code> will match
          <code class="literal">aWord</code></td>
         </tr>

         <tr>
          <td><code class="literal">!</code></td>
          <td>Resets all fields (year, month, day, hour, minute, second,
          fraction and timezone information) to zero-like values (
           <code class="literal">0</code> for hour, minute, second and fraction,
           <code class="literal">1</code> for month and day, <code class="literal">1970</code>
           for year and <code class="literal">UTC</code> for timezone information)</td>
          <td>Without <code class="literal">!,</code> all fields will be set to the
          current date and time.</td>
         </tr>

         <tr>
          <td><code class="literal">|</code></td>
          <td>Resets all fields (year, month, day, hour, minute, second,
          fraction and timezone information) to zero-like values if they have
          not been parsed yet</td>
          <td><code class="literal">Y-m-d|</code> will set the year, month and day
          to the information found in the string to parse, and sets the hour,
          minute and second to 0.</td>
         </tr>

         <tr>
          <td><code class="literal">+</code></td>
          <td>If this format specifier is present, trailing data in the
          string will not cause an error, but a warning instead</td>
          <td>Use <span class="methodname"><a href="datetimeimmutable.getlasterrors.php" class="methodname">DateTimeImmutable::getLastErrors()</a></span> to find out
          whether trailing data was present.</td>
         </tr>

        </tbody>
       
      </table>

     </p>
     <p class="para">
      Unrecognized characters in the format string will cause the
      parsing to fail and an error message is appended to the returned
      structure. You can query error messages with
      <span class="methodname"><a href="datetimeimmutable.getlasterrors.php" class="methodname">DateTimeImmutable::getLastErrors()</a></span>.
     </p>
     <p class="para">
      To include literal characters in <code class="parameter">format</code>, you have
      to escape them with a backslash (<code class="literal">\</code>).
     </p>
     <p class="para">
      If <code class="parameter">format</code> does not contain the character
      <code class="literal">!</code> then portions of the generated date/time which are not
      specified in <code class="parameter">format</code> will be set to the current
      system time.
     </p>
     <p class="para">
      If <code class="parameter">format</code> contains the
      character <code class="literal">!</code>, then portions of the generated
      date/time not provided in <code class="parameter">format</code>, as well as
      values to the left-hand side of the <code class="literal">!</code>, will
      be set to corresponding values from the Unix epoch.
     </p>
     <p class="para">
      If any time character is parsed, then all other time-related fields are
      set to &quot;0&quot;, unless also parsed.
     </p>
     <p class="para">
      The Unix epoch is 1970-01-01 00:00:00 UTC.
     </p>
    </dd>
   
   
    <dt><code class="parameter">datetime</code></dt>
    <dd>
     <p class="para">
      String representing the time.
     </p>
    </dd>
   
   
    <dt><code class="parameter">timezone</code></dt>
    <dd>
     <p class="para">
      A <span class="classname"><a href="class.datetimezone.php" class="classname">DateTimeZone</a></span> object representing the
      desired time zone.
     </p>
     <p class="para">
      If <code class="parameter">timezone</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> and
      <code class="parameter">datetime</code> contains no timezone,
      the current timezone will be used.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The <code class="parameter">timezone</code> parameter
       and the current timezone are ignored when the
       <code class="parameter">datetime</code> parameter either
       contains a UNIX timestamp (e.g. <code class="literal">946684800</code>)
       or specifies a timezone
       (e.g. <code class="literal">2010-01-28T15:00:00+02:00</code>).
      </p>
     </p></blockquote>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-datetimeimmutable.createfromformat-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a new DateTimeImmutable instance or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-datetimeimmutable.createfromformat-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   This method throws <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> when the
   <code class="parameter">datetime</code> contains NULL-bytes.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-datetimeimmutable.createfromformat-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.2.9</td>
       <td>
        The <code class="literal"> </code> (space) specifier now also supports NBSP
        (U+A0) and NNBSP (U+202F) characters.
       </td>
      </tr>

      <tr>
       <td>8.2.0</td>
       <td>
        The <code class="literal">X</code> and <code class="literal">x</code>
        <code class="parameter">format</code> specifiers have been added.
       </td>
      </tr>

      <tr>
       <td>8.0.21, 8.1.8, 8.2.0</td>
       <td>
        Now throws <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> when NULL-bytes
        are passed into <code class="parameter">datetime</code>, which previously was silently
        ignored.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        The <code class="literal">v</code> <code class="parameter">format</code> specifier has
        been added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-datetimeimmutable.createfromformat-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2200">
   <p><strong>Example #1 <span class="function"><strong>DateTimeImmutable::createFromFormat()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'j-M-Y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'15-Feb-2009'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-2201">
   <p><strong>Example #2 Using predefined format constants with <span class="function"><strong>DateTimeImmutable::createFromFormat()</strong></span></strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeInterface</span><span style="color: #007700">::</span><span style="color: #0000BB">ISO8601</span><span style="color: #007700">, </span><span style="color: #DD0000">'2004-02-12T15:19:21+00:00'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeInterface</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC3339_EXTENDED</span><span style="color: #007700">, </span><span style="color: #DD0000">'2013-10-14T09:00:00.000+02:00'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>
    The <a href="class.datetimeinterface.php#datetimeinterface.constants.types" class="link">formatting constants</a>
    as used in this example consist of
    a string of characters for <a href="datetime.format.php" class="link">formatting</a> a
    <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> object. In most cases, these
    letters match with the same elements of date/time information as the ones defined in the <a href="" class="link">parameters</a>
    section above, but they tend to be more lenient.
   </p></div>
  </div>

  <div class="example" id="example-2202">
   <p><strong>Example #3 Intricacies of <span class="function"><strong>DateTimeImmutable::createFromFormat()</strong></span></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Current time: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #DD0000">'2009-02-15'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Format: </span><span style="color: #0000BB">$format</span><span style="color: #DD0000">; " </span><span style="color: #007700">. </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #DD0000">'2009-02-15 15:16:17'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Format: </span><span style="color: #0000BB">$format</span><span style="color: #DD0000">; " </span><span style="color: #007700">. </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'Y-m-!d H:i:s'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #DD0000">'2009-02-15 15:16:17'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Format: </span><span style="color: #0000BB">$format</span><span style="color: #DD0000">; " </span><span style="color: #007700">. </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'!d'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #DD0000">'15'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Format: </span><span style="color: #0000BB">$format</span><span style="color: #DD0000">; " </span><span style="color: #007700">. </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'i'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #DD0000">'15'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Format: </span><span style="color: #0000BB">$format</span><span style="color: #DD0000">; " </span><span style="color: #007700">. </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Current time: 2022-06-02 15:50:46
Format: Y-m-d; 2009-02-15 15:50:46
Format: Y-m-d H:i:s; 2009-02-15 15:16:17
Format: Y-m-!d H:i:s; 1970-01-15 15:16:17
Format: !d; 1970-01-15 00:00:00
Format: i; 2022-06-02 00:15:00</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2203">
   <p><strong>Example #4 Format string with literal characters</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'H\h i\m s\s'</span><span style="color: #007700">,</span><span style="color: #DD0000">'23h 15m 03s'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:i:s'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">23:15:03</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2204">
   <p><strong>Example #5 Overflow behaviour</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">, </span><span style="color: #DD0000">'2021-17-35 16:60:97'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC2822</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Sat, 04 Jun 2022 17:01:37 +0000</pre>
</div>
   </div>
   <div class="example-contents"><p>
    Although the result looks odd, it is correct, as the following overflows
    happen:
   </p></div>
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      <code class="literal">97</code> seconds overflows to <code class="literal">1</code> minute,
      leaving <code class="literal">37</code> seconds.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">61</code> minutes overflows to <code class="literal">1</code> hour,
      leaving <code class="literal">1</code> minutes.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">35</code> days overflows to <code class="literal">1</code> month,
      leaving <code class="literal">4</code> days. The amount of days that are left over
      depends on the month, as not every month has the same amount of days.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">18</code> months overflows to <code class="literal">1</code> year,
      leaving <code class="literal">6</code> months.
     </span>
    </li>
   </ol>
  </div>

  <div class="example" id="example-2205">
   <p><strong>Example #6 Overflowing day name behaviour</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$d </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeInterface</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC1123</span><span style="color: #007700">, </span><span style="color: #DD0000">'Mon, 3 Aug 2020 25:00:00 +0000'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTime</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC1123</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Mon, 10 Aug 2020 01:00:00 +0000</pre>
</div>
   </div>
   <div class="example-contents"><p>
    Although the result looks odd, it is correct, as the following overflows
    happen:
   </p></div>
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      <code class="literal">3 Aug 2020 25:00:00</code> overflows to <code class="literal">(Tue) 4 Aug
      2020 01:00</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">Mon</code> gets applied, which advances the date to
      <code class="literal">Mon, 10 Aug 2020 01:00:00</code>. The explanation of
      relative keywords such as <code class="literal">Mon</code> is explained in the
      section on <a href="datetime.formats.php#datetime.formats.relative" class="link">relative
      formats</a>.
     </span>
    </li>
   </ol>
  </div>

  <p class="para">
   In order to detect overflows in dates, you can use
   <span class="methodname"><a href="datetimeimmutable.getlasterrors.php" class="methodname">DateTimeImmutable::getLastErrors()</a></span>, which will
   include a warning if an overflow occured.
  </p>
  <div class="example" id="example-2206">
   <p><strong>Example #7 Detecting overflown dates</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$d </span><span style="color: #007700">= </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">, </span><span style="color: #DD0000">'2021-17-35 16:60:97'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC2822</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">::</span><span style="color: #0000BB">GetLastErrors</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Sat, 04 Jun 2022 17:01:37 +0000

array(4) {
  &#039;warning_count&#039; =&gt;
  int(2)
  &#039;warnings&#039; =&gt;
  array(1) {
    [19] =&gt;
    string(27) &quot;The parsed date was invalid&quot;
  }
  &#039;error_count&#039; =&gt;
  int(0)
  &#039;errors&#039; =&gt;
  array(0) {
  }
}</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2207">
   <p><strong>Example #8 Greedy parsing behaviour</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">date_parse_from_format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Gis'</span><span style="color: #007700">, </span><span style="color: #DD0000">'60101'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [year] =&gt;
    [month] =&gt;
    [day] =&gt;
    [hour] =&gt; 60
    [minute] =&gt; 10
    [second] =&gt; 0
    [fraction] =&gt; 0
    [warning_count] =&gt; 1
    [warnings] =&gt; Array
        (
            [5] =&gt; The parsed time was invalid
        )

    [error_count] =&gt; 1
    [errors] =&gt; Array
        (
            [4] =&gt; A two digit second could not be found
        )

    [is_localtime] =&gt;
)</pre>
</div>
   </div>
   <div class="example-contents"><p>
    The <code class="literal">G</code> format is to parse 24 hour clock hours, with or
    without leading zero. This requires to parse 1 or 2 digits. Because there
    are two following digits, it greedily reads this as <code class="literal">60</code>.
   </p></div>
   <div class="example-contents"><p>
    The following <code class="literal">i</code> and <code class="literal">s</code> format
    characters both require two digits. This means that <code class="literal">10</code>
    is passed as minute (<code class="literal">i</code>), and that there are then not
    enough digits left to parse for as second (<code class="literal">s</code>).
   </p></div>
   <div class="example-contents"><p>
    The <code class="literal">errors</code> array indicates this problem.
   </p></div>
   <div class="example-contents"><p>
    Additionally, an hour of <code class="literal">60</code> is outside the range
    <code class="literal">0</code>-<code class="literal">24</code>, which causes the
    <code class="literal">warnings</code> array to include a warning that the time is
    invalid.
   </p></div>
  </div>

 </div>


 <div class="refsect1 seealso" id="refsect1-datetimeimmutable.createfromformat-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="datetimeimmutable.construct.php" class="function" rel="rdfs-seeAlso">DateTimeImmutable::__construct()</a> - Returns new DateTimeImmutable object</span></li>
   <li><span class="function"><a href="datetimeimmutable.getlasterrors.php" class="function" rel="rdfs-seeAlso">DateTimeImmutable::getLastErrors()</a> - Returns the warnings and errors</span></li>
   <li><span class="function"><a href="function.checkdate.php" class="function" rel="rdfs-seeAlso">checkdate()</a> - Validate a Gregorian date</span></li>
   <li><span class="function"><a href="function.strptime.php" class="function" rel="rdfs-seeAlso">strptime()</a> - Parse a time/date generated with strftime</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/datetimeimmutable/createfromformat.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdatetimeimmutable.createfromformat%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=datetimeimmutable.createfromformat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/datetimeimmutable.createfromformat.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129206">  <div class="votes">
    <div id="Vu129206">
    <a href="/manual/vote-note.php?id=129206&amp;page=datetimeimmutable.createfromformat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129206">
    <a href="/manual/vote-note.php?id=129206&amp;page=datetimeimmutable.createfromformat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129206" title="100% like this...">
    4
    </div>
  </div>
  <a href="#129206" class="name">
  <strong class="user"><em>Tessa at AuRiseCreative dot com</em></strong></a><a class="genanchor" href="#129206"> &para;</a><div class="date" title="2024-01-30 04:08"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129206">
<div class="phpcode"><code><span class="html">Since the description and examples don't exactly match for the timezone row, I want to clarify exactly which format each character outputs.<br /><br />`e` outputs the timezone identifier, e.g. `America/New_York` or `Asia/Gaza`<br /><br />`O` outputs the difference to UTC in hours, e.g. `-0500` or `+0200`<br /><br />`P` outputs difference to UTC with a colon between hours and minutes, e.g. `-05:00` or `+02:00`<br /><br />`T` outputs the timezone abbreviation, e.g. `EST` or `EET`</span></code></div>
  </div>
 </div>
  <div class="note" id="127934">  <div class="votes">
    <div id="Vu127934">
    <a href="/manual/vote-note.php?id=127934&amp;page=datetimeimmutable.createfromformat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127934">
    <a href="/manual/vote-note.php?id=127934&amp;page=datetimeimmutable.createfromformat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127934" title="71% like this...">
    3
    </div>
  </div>
  <a href="#127934" class="name">
  <strong class="user"><em>Andy Walker</em></strong></a><a class="genanchor" href="#127934"> &para;</a><div class="date" title="2022-11-15 03:24"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127934">
<div class="phpcode"><code><span class="html">To clarify, g/G are 12/24 hour time without a leading 0, and h/H are 12/24 hour time with a leading zero, as described here:<br /><br /><a href="https://www.php.net/manual/en/datetime.format.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/datetime.format.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129165">  <div class="votes">
    <div id="Vu129165">
    <a href="/manual/vote-note.php?id=129165&amp;page=datetimeimmutable.createfromformat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129165">
    <a href="/manual/vote-note.php?id=129165&amp;page=datetimeimmutable.createfromformat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129165" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#129165" class="name">
  <strong class="user"><em>peter dot labos at gmail dot com</em></strong></a><a class="genanchor" href="#129165"> &para;</a><div class="date" title="2024-01-16 12:20"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129165">
<div class="phpcode"><code><span class="html">If you are not happy with wide range of conversions and repairs this method is making for you, or just want to check that date is really same as input:<br /><br />```<br />$datetime = \DateTimeImmutable::createFromFormat('Y-m-d G:i:s', $userDateTimeInput);<br /><br />if ($datetime &amp;&amp; $datetime-&gt;format('Y-m-d G:i:s') === $userDateTimeInput) {<br />  // $datetime is not false and we have a correct date in correct format from user<br />}<br />```</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=datetimeimmutable.createfromformat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/datetimeimmutable.createfromformat.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.datetimeimmutable.php">DateTimeImmutable</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="datetimeimmutable.add.php" title="add">add</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="datetimeimmutable.createfromformat.php" title="createFromFormat">createFromFormat</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.createfrominterface.php" title="createFromInterface">createFromInterface</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.createfrommutable.php" title="createFromMutable">createFromMutable</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.getlasterrors.php" title="getLastErrors">getLastErrors</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.modify.php" title="modify">modify</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.set-state.php" title="_&#8203;_&#8203;set_&#8203;state">_&#8203;_&#8203;set_&#8203;state</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.setdate.php" title="setDate">setDate</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.setisodate.php" title="setISODate">setISODate</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.settime.php" title="setTime">setTime</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.settimestamp.php" title="setTimestamp">setTimestamp</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.settimezone.php" title="setTimezone">setTimezone</a>
                        </li>
                                                <li class="">
                            <a href="datetimeimmutable.sub.php" title="sub">sub</a>
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
