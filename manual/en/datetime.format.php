<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateTimeInterface::format - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/datetime.format.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/datetime.format.php">
 <link rel="alternate" href="https://www.php.net/manual/en/datetime.format.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.datetimeinterface.php">
 <link rel="prev" href="https://www.php.net/manual/en/datetime.diff.php">
 <link rel="next" href="https://www.php.net/manual/en/datetime.getoffset.php">

 <link rel="alternate" href="https://www.php.net/manual/en/datetime.format.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/datetime.format.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/datetime.format.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/datetime.format.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/datetime.format.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/datetime.format.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/datetime.format.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/datetime.format.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/datetime.format.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/datetime.format.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/datetime.format.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns date formatted according to given format" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateTimeInterface::format - Manual" />
<meta name="twitter:description" content="Returns date formatted according to given format" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateTimeInterface::format - Manual" />
<meta itemprop="description" content="Returns date formatted according to given format" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns date formatted according to given format" />

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
        <a href="datetime.getoffset.php">
          DateTimeInterface::getOffset &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="datetime.diff.php">
          &laquo; DateTimeInterface::diff        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='class.datetimeinterface.php'>DateTimeInterface</a></li>      </ul>
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
            <option value='en/datetime.format.php' selected="selected">English</option>
            <option value='de/datetime.format.php'>German</option>
            <option value='es/datetime.format.php'>Spanish</option>
            <option value='fr/datetime.format.php'>French</option>
            <option value='it/datetime.format.php'>Italian</option>
            <option value='ja/datetime.format.php'>Japanese</option>
            <option value='pt_BR/datetime.format.php'>Brazilian Portuguese</option>
            <option value='ru/datetime.format.php'>Russian</option>
            <option value='tr/datetime.format.php'>Turkish</option>
            <option value='uk/datetime.format.php'>Ukrainian</option>
            <option value='zh/datetime.format.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="datetime.format" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DateTimeInterface::format</h1>
  <h1 class="refname">DateTimeImmutable::format</h1>
  <h1 class="refname">DateTime::format</h1>
  <h1 class="refname">date_format</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DateTimeInterface::format</span> -- <span class="refname">DateTimeImmutable::format</span> -- <span class="refname">DateTime::format</span> -- <span class="refname">date_format</span> &mdash; <span class="dc-title">Returns date formatted according to given format</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-datetime.format-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DateTimeInterface::format</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>DateTimeImmutable::format</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>DateTime::format</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><a href="function.date-format.php" class="methodname">date_format</a></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$object</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns date formatted according to given format.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-datetime.format-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   <dt><code class="parameter">object</code></dt>
<dd><p class="para">Procedural style only: A <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> object
returned by <span class="function"><a href="function.date-create.php" class="function">date_create()</a></span></p></dd>
   
    <dt><code class="parameter">format</code></dt>
    <dd>
     <p class="para">
      The format of the outputted date <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. See the formatting
      options below. There are also several
      <a href="class.datetimeinterface.php#datetimeinterface.constants.types" class="link">predefined date constants</a>
      that may be used instead, so for example <strong><code><a href="datetime.constants.php#constant.date-rss">DATE_RSS</a></code></strong>
      contains the format string <code class="literal">&#039;D, d M Y H:i:s&#039;</code>.
     </p>
     <p class="para">
      <table class="doctable table">
       <caption><strong>The following characters are recognized in the
       <code class="parameter">format</code> parameter string</strong></caption>
       
        <thead>
         <tr>
          <th><code class="parameter">format</code> character</th>
          <th>Description</th>
          <th>Example returned values</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td style="text-align: center;"><em>Day</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">d</code></td>
          <td>Day of the month, 2 digits with leading zeros</td>
          <td><code class="literal">01</code> to <code class="literal">31</code></td>
         </tr>

         <tr>
          <td><code class="literal">D</code></td>
          <td>A textual representation of a day, three letters</td>
          <td><code class="literal">Mon</code> through <code class="literal">Sun</code></td>
         </tr>

         <tr>
          <td><code class="literal">j</code></td>
          <td>Day of the month without leading zeros</td>
          <td><code class="literal">1</code> to <code class="literal">31</code></td>
         </tr>

         <tr>
          <td><code class="literal">l</code> (lowercase &#039;L&#039;)</td>
          <td>A full textual representation of the day of the week</td>
          <td><code class="literal">Sunday</code> through <code class="literal">Saturday</code></td>
         </tr>

         <tr>
          <td><code class="literal">N</code></td>
          <td>ISO 8601 numeric representation of the day of the week</td>
          <td><code class="literal">1</code> (for Monday) through <code class="literal">7</code> (for Sunday)</td>
         </tr>

         <tr>
          <td><code class="literal">S</code></td>
          <td>English ordinal suffix for the day of the month, 2 characters</td>
          <td>
           <code class="literal">st</code>, <code class="literal">nd</code>, <code class="literal">rd</code> or
           <code class="literal">th</code>.  Works well with <code class="literal">j</code>
          </td>
         </tr>

         <tr>
          <td><code class="literal">w</code></td>
          <td>Numeric representation of the day of the week</td>
          <td><code class="literal">0</code> (for Sunday) through <code class="literal">6</code> (for Saturday)</td>
         </tr>

         <tr>
          <td><code class="literal">z</code></td>
          <td>The day of the year (starting from 0)</td>
          <td><code class="literal">0</code> through <code class="literal">365</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Week</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">W</code></td>
          <td>ISO 8601 week number of year, weeks starting on Monday</td>
          <td>Example: <code class="literal">42</code> (the 42nd week in the year)</td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Month</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">F</code></td>
          <td>A full textual representation of a month, such as January or March</td>
          <td><code class="literal">January</code> through <code class="literal">December</code></td>
         </tr>

         <tr>
          <td><code class="literal">m</code></td>
          <td>Numeric representation of a month, with leading zeros</td>
          <td><code class="literal">01</code> through <code class="literal">12</code></td>
         </tr>

         <tr>
          <td><code class="literal">M</code></td>
          <td>A short textual representation of a month, three letters</td>
          <td><code class="literal">Jan</code> through <code class="literal">Dec</code></td>
         </tr>

         <tr>
          <td><code class="literal">n</code></td>
          <td>Numeric representation of a month, without leading zeros</td>
          <td><code class="literal">1</code> through <code class="literal">12</code></td>
         </tr>

         <tr>
          <td><code class="literal">t</code></td>
          <td>Number of days in the given month</td>
          <td><code class="literal">28</code> through <code class="literal">31</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Year</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">L</code></td>
          <td>Whether it&#039;s a leap year</td>
          <td><code class="literal">1</code> if it is a leap year, <code class="literal">0</code> otherwise.</td>
         </tr>

         <tr>
          <td><code class="literal">o</code></td>
          <td>ISO 8601 week-numbering year. This has the same value as
           <code class="literal">Y</code>, except that if the ISO week number
           (<code class="literal">W</code>) belongs to the previous or next year, that year
           is used instead.</td>
          <td>Examples: <code class="literal">1999</code> or <code class="literal">2003</code></td>
         </tr>

         <tr>
          <td><code class="literal">X</code></td>
          <td>An expanded full numeric representation of a year, at least 4 digits,
           with <code class="literal">-</code> for years BCE, and <code class="literal">+</code>
           for years CE.</td>
          <td>Examples: <code class="literal">-0055</code>, <code class="literal">+0787</code>,
           <code class="literal">+1999</code>, <code class="literal">+10191</code></td>
         </tr>

         <tr>
          <td><code class="literal">x</code></td>
          <td>An expanded full numeric representation if required, or a
           standard full numeral representation if possible (like
           <code class="literal">Y</code>). At least four digits. Years BCE are prefixed
           with a <code class="literal">-</code>. Years beyond (and including)
           <code class="literal">10000</code> are prefixed by a
           <code class="literal">+</code>.</td>
          <td>Examples: <code class="literal">-0055</code>, <code class="literal">0787</code>,
           <code class="literal">1999</code>, <code class="literal">+10191</code></td>
         </tr>

         <tr>
          <td><code class="literal">Y</code></td>
          <td>A full numeric representation of a year, at least 4 digits,
           with <code class="literal">-</code> for years BCE.</td>
          <td>Examples: <code class="literal">-0055</code>, <code class="literal">0787</code>,
           <code class="literal">1999</code>, <code class="literal">2003</code>,
           <code class="literal">10191</code></td>
         </tr>

         <tr>
          <td><code class="literal">y</code></td>
          <td>A two digit representation of a year</td>
          <td>Examples: <code class="literal">99</code> or <code class="literal">03</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Time</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">a</code></td>
          <td>Lowercase Ante meridiem and Post meridiem</td>
          <td><code class="literal">am</code> or <code class="literal">pm</code></td>
         </tr>

         <tr>
          <td><code class="literal">A</code></td>
          <td>Uppercase Ante meridiem and Post meridiem</td>
          <td><code class="literal">AM</code> or <code class="literal">PM</code></td>
         </tr>

         <tr>
          <td><code class="literal">B</code></td>
          <td>Swatch Internet time</td>
          <td><code class="literal">000</code> through <code class="literal">999</code></td>
         </tr>

         <tr>
          <td><code class="literal">g</code></td>
          <td>12-hour format of an hour without leading zeros</td>
          <td><code class="literal">1</code> through <code class="literal">12</code></td>
         </tr>

         <tr>
          <td><code class="literal">G</code></td>
          <td>24-hour format of an hour without leading zeros</td>
          <td><code class="literal">0</code> through <code class="literal">23</code></td>
         </tr>

         <tr>
          <td><code class="literal">h</code></td>
          <td>12-hour format of an hour with leading zeros</td>
          <td><code class="literal">01</code> through <code class="literal">12</code></td>
         </tr>

         <tr>
          <td><code class="literal">H</code></td>
          <td>24-hour format of an hour with leading zeros</td>
          <td><code class="literal">00</code> through <code class="literal">23</code></td>
         </tr>

         <tr>
          <td><code class="literal">i</code></td>
          <td>Minutes with leading zeros</td>
          <td><code class="literal">00</code> to <code class="literal">59</code></td>
         </tr>

         <tr>
          <td><code class="literal">s</code></td>
          <td>Seconds with leading zeros</td>
          <td><code class="literal">00</code> through <code class="literal">59</code></td>
         </tr>

         <tr>
          <td><code class="literal">u</code></td>
          <td>
           Microseconds. Note that
           <span class="function"><a href="function.date.php" class="function">date()</a></span> will always generate
           <code class="literal">000000</code> since it takes an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
           parameter, whereas <span class="methodname"><strong>DateTimeInterface::format()</strong></span> does
           support microseconds if an object of type
           <span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span> was created with microseconds.
          </td>
          <td>Example: <code class="literal">654321</code></td>
         </tr>

         <tr>
          <td><code class="literal">v</code></td>
          <td>
           Milliseconds. Same note applies as for
           <code class="literal">u</code>.
          </td>
          <td>Example: <code class="literal">654</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Timezone</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">e</code></td>
          <td>Timezone identifier</td>
          <td>Examples: <code class="literal">UTC</code>, <code class="literal">GMT</code>, <code class="literal">Atlantic/Azores</code></td>
         </tr>

         <tr>
          <td><code class="literal">I</code> (capital i)</td>
          <td>Whether or not the date is in daylight saving time</td>
          <td><code class="literal">1</code> if Daylight Saving Time, <code class="literal">0</code> otherwise.</td>
         </tr>

         <tr>
          <td><code class="literal">O</code></td>
          <td>Difference to Greenwich time (GMT) without colon between hours and minutes</td>
          <td>Example: <code class="literal">+0200</code></td>
         </tr>

         <tr>
          <td><code class="literal">P</code></td>
          <td>Difference to Greenwich time (GMT) with colon between hours and minutes</td>
          <td>Example: <code class="literal">+02:00</code></td>
         </tr>

         <tr>
          <td><code class="literal">p</code></td>
          <td>
           The same as <code class="literal">P</code>, but returns <code class="literal">Z</code> instead of <code class="literal">+00:00</code>
           (available as of PHP 8.0.0)
          </td>
          <td>Examples: <code class="literal">Z</code> or <code class="literal">+02:00</code></td>
         </tr>

         <tr>
          <td><code class="literal">T</code></td>
          <td>Timezone abbreviation, if known; otherwise the GMT offset.</td>
          <td>Examples: <code class="literal">EST</code>, <code class="literal">MDT</code>, <code class="literal">+05</code></td>
         </tr>

         <tr>
          <td><code class="literal">Z</code></td>
          <td>Timezone offset in seconds. The offset for timezones west of UTC is always
          negative, and for those east of UTC is always positive.</td>
          <td><code class="literal">-43200</code> through <code class="literal">50400</code></td>
         </tr>

         <tr>
          <td style="text-align: center;"><em>Full Date/Time</em></td>
          <td>---</td>
          <td>---</td>
         </tr>

         <tr>
          <td><code class="literal">c</code></td>
          <td>ISO 8601 date</td>
          <td>2004-02-12T15:19:21+00:00</td>
         </tr>

         <tr>
          <td><code class="literal">r</code></td>
          <td><a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC 2822</a>/<a href="https://datatracker.ietf.org/doc/html/rfc5322" class="link external">&raquo;&nbsp;RFC 5322</a> formatted date</td>
          <td>Example: <code class="literal">Thu, 21 Dec 2000 16:01:07 +0200</code></td>
         </tr>

         <tr>
          <td><code class="literal">U</code></td>
          <td>Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
          <td>See also <span class="function"><a href="function.time.php" class="function">time()</a></span></td>
         </tr>

        </tbody>
       
      </table>

     </p>
     <p class="para">
      Unrecognized characters in the format string will be printed
      as-is.  The <code class="literal">Z</code> format will always return
      <code class="literal">0</code> when using <span class="function"><a href="function.gmdate.php" class="function">gmdate()</a></span>.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Since this function only accepts <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> timestamps the
       <code class="literal">u</code> format character is only useful when using the
       <span class="function"><a href="function.date-format.php" class="function">date_format()</a></span> function with user based timestamps
       created with <span class="function"><a href="function.date-create.php" class="function">date_create()</a></span>.
      </p>
     </p></blockquote>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-datetime.format-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the formatted date string on success.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-datetime.format-changelog">
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
      <td>8.2.0</td>
      <td>
       The format characters <code class="literal">X</code> and <code class="literal">x</code>
       have been added.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The format character <code class="literal">p</code> has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-datetime.format-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2229">
    <p><strong>Example #1 <span class="function"><strong>DateTimeInterface::format()</strong></span> example</strong></p>
    <div class="example-contents"><p>Object-oriented style</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">'2000-01-01'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Procedural style</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date </span><span style="color: #007700">= </span><span style="color: #0000BB">date_create</span><span style="color: #007700">(</span><span style="color: #DD0000">'2000-01-01'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">date_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">, </span><span style="color: #DD0000">'Y-m-d H:i:s'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">2000-01-01 00:00:00</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   <div class="example" id="example-2230">
    <p><strong>Example #2 More examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// set the default timezone to use.<br /></span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// now<br /></span><span style="color: #0000BB">$date </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Prints something like: Wednesday<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'l'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Prints something like: Wednesday 19th of October 2022 08:40:48 AM<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'l jS \o\f F Y h:i:s A'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* use the constants in the format parameter */<br />// prints something like: Wed, 19 Oct 2022 08:40:48 +0000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">DateTimeInterface</span><span style="color: #007700">::</span><span style="color: #0000BB">RFC2822</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   You can prevent a recognized character in the format string from being
   expanded by escaping it with a preceding backslash. If the character with
   a backslash is already a special sequence, you may need to also escape
   the backslash.
   <div class="example" id="example-2231">
    <p><strong>Example #3 Escaping characters while formatting</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// prints something like: Wednesday the 19th<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$date</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'l \t\h\e jS'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   To format dates in other languages,
   <span class="methodname"><a href="intldateformatter.format.php" class="methodname">IntlDateFormatter::format()</a></span>
   can be used instead of <span class="methodname"><strong>DateTimeInterface::format()</strong></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-datetime.format-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   This method does not use locales. All output is in English.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-datetime.format-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="intldateformatter.format.php" class="methodname" rel="rdfs-seeAlso">IntlDateFormatter::format()</a> - Format the date/time value as a string</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/datetimeinterface/format.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdatetime.format%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=datetime.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/datetime.format.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129945">  <div class="votes">
    <div id="Vu129945">
    <a href="/manual/vote-note.php?id=129945&amp;page=datetime.format&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129945">
    <a href="/manual/vote-note.php?id=129945&amp;page=datetime.format&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129945" title="86% like this...">
    11
    </div>
  </div>
  <a href="#129945" class="name">
  <strong class="user"><em>jurchiks101 at gmail dot com</em></strong></a><a class="genanchor" href="#129945"> &para;</a><div class="date" title="2025-01-08 09:12"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129945">
<div class="phpcode"><code><span class="html">If you want to get the week of year + year of said week, you need to use `format('o-W'), otherwise you can stumble into a non-obvious gotcha (unless you RTFM and memorised it, that is).<br />Using `Y` instead of `o` can result in incorrect year values in the case of the first or last week of the year (depending on if January 4th falls into said week or not), such as the first week of 2025 between 2024-12-30 and 2025-01-05 - `(new DateTime('2024-12-30'))-&gt;format('o-W')` will return the correct value of `2025-01` (as per ISO-8601 definition of week of year), while `format('Y-W')` will return `2024-01`.<br />Because of this, I would personally recommend avoiding using week of year anywhere unless absolutely necessary, as it is easy to make this mistake and never realise it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=datetime.format&amp;repo=en&amp;redirect=https://www.php.net/manual/en/datetime.format.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.datetimeinterface.php">DateTimeInterface</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="datetime.diff.php" title="diff">diff</a>
                        </li>
                                                <li class="current">
                            <a href="datetime.format.php" title="format">format</a>
                        </li>
                                                <li class="">
                            <a href="datetime.getoffset.php" title="getOffset">getOffset</a>
                        </li>
                                                <li class="">
                            <a href="datetime.gettimestamp.php" title="getTimestamp">getTimestamp</a>
                        </li>
                                                <li class="">
                            <a href="datetime.gettimezone.php" title="getTimezone">getTimezone</a>
                        </li>
                                                <li class="">
                            <a href="datetime.serialize.php" title="_&#8203;_&#8203;serialize">_&#8203;_&#8203;serialize</a>
                        </li>
                                                <li class="">
                            <a href="datetime.unserialize.php" title="_&#8203;_&#8203;unserialize">_&#8203;_&#8203;unserialize</a>
                        </li>
                                                <li class="">
                            <a href="datetime.wakeup.php" title="_&#8203;_&#8203;wakeup">_&#8203;_&#8203;wakeup</a>
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
