<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DateTimeInterface::diff - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/datetime.diff.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/datetime.diff.php">
 <link rel="alternate" href="https://www.php.net/manual/en/datetime.diff.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.datetimeinterface.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.datetimeinterface.php">
 <link rel="next" href="https://www.php.net/manual/en/datetime.format.php">

 <link rel="alternate" href="https://www.php.net/manual/en/datetime.diff.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/datetime.diff.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/datetime.diff.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/datetime.diff.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/datetime.diff.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/datetime.diff.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/datetime.diff.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/datetime.diff.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/datetime.diff.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/datetime.diff.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/datetime.diff.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the difference between two DateTime objects" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DateTimeInterface::diff - Manual" />
<meta name="twitter:description" content="Returns the difference between two DateTime objects" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DateTimeInterface::diff - Manual" />
<meta itemprop="description" content="Returns the difference between two DateTime objects" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the difference between two DateTime objects" />

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
        <a href="datetime.format.php">
          DateTimeInterface::format &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.datetimeinterface.php">
          &laquo; DateTimeInterface        </a>
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
            <option value='en/datetime.diff.php' selected="selected">English</option>
            <option value='de/datetime.diff.php'>German</option>
            <option value='es/datetime.diff.php'>Spanish</option>
            <option value='fr/datetime.diff.php'>French</option>
            <option value='it/datetime.diff.php'>Italian</option>
            <option value='ja/datetime.diff.php'>Japanese</option>
            <option value='pt_BR/datetime.diff.php'>Brazilian Portuguese</option>
            <option value='ru/datetime.diff.php'>Russian</option>
            <option value='tr/datetime.diff.php'>Turkish</option>
            <option value='uk/datetime.diff.php'>Ukrainian</option>
            <option value='zh/datetime.diff.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="datetime.diff" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DateTimeInterface::diff</h1>
  <h1 class="refname">DateTimeImmutable::diff</h1>
  <h1 class="refname">DateTime::diff</h1>
  <h1 class="refname">date_diff</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DateTimeInterface::diff</span> -- <span class="refname">DateTimeImmutable::diff</span> -- <span class="refname">DateTime::diff</span> -- <span class="refname">date_diff</span> &mdash; <span class="dc-title">Returns the difference between two DateTime objects</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-datetime.diff-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DateTimeInterface::diff</strong></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$targetObject</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$absolute</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>DateTimeImmutable::diff</strong></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$targetObject</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$absolute</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>DateTime::diff</strong></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$targetObject</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$absolute</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><a href="function.date-diff.php" class="methodname">date_diff</a></span>(<span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$baseObject</code></span>, <span class="methodparam"><span class="type"><a href="class.datetimeinterface.php" class="type DateTimeInterface">DateTimeInterface</a></span> <code class="parameter">$targetObject</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$absolute</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.dateinterval.php" class="type DateInterval">DateInterval</a></span></div>

  <p class="para rdfs-comment">
   Returns the difference between two <span class="classname"><a href="class.datetimeinterface.php" class="classname">DateTimeInterface</a></span>
   objects.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-datetime.diff-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">datetime</code></dt>
    <dd>
     <p class="para">
      The date to compare to.
     </p>
    </dd>
   
   
    <dt><code class="parameter">absolute</code></dt>
    <dd>
     <p class="para">
      Should the interval be forced to be positive?
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-datetime.diff-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> object represents the
   difference between the two dates.
  </p>
  <p class="para">
   The <code class="parameter">absolute</code> parameter only affects the
   <code class="parameter">invert</code> property of a
   <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> object.
  </p>
  <p class="para">
   The return value more specifically represents the clock-time interval to
   apply to the original object (<code class="parameter">$this</code> or
   <code class="parameter">$originObject</code>) to arrive at the
   <code class="parameter">$targetObject</code>. This process is not always
   reversible.
  </p>
  <p class="para">
   The method is aware of DST changeovers, and hence can return an interval of
   <code class="literal">24 hours and 30 minutes</code>, as per one of the examples. If
   you want to calculate with absolute time, you need to convert both the
   <code class="parameter">$this</code>/<code class="parameter">$baseObject</code>, and
   <code class="parameter">$targetObject</code> to UTC first.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-datetime.diff-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2225">
   <p><strong>Example #1 <span class="function"><strong>DateTimeImmutable::diff()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$origin </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">'2009-10-11'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$target </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">'2009-10-13'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= </span><span style="color: #0000BB">$origin</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%R%a days'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$origin </span><span style="color: #007700">= </span><span style="color: #0000BB">date_create</span><span style="color: #007700">(</span><span style="color: #DD0000">'2009-10-11'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$target </span><span style="color: #007700">= </span><span style="color: #0000BB">date_create</span><span style="color: #007700">(</span><span style="color: #DD0000">'2009-10-13'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= </span><span style="color: #0000BB">date_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$origin</span><span style="color: #007700">, </span><span style="color: #0000BB">$target</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'%R%a days'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">+2 days</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2226">
   <p><strong>Example #2 <span class="methodname"><strong>DateTimeInterface::diff()</strong></span> during DST
   changeover</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$originalTime </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">"2021-10-30 09:00:00 Europe/London"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$targetTime </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">"2021-10-31 08:30:00 Europe/London"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= </span><span style="color: #0000BB">$originalTime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$targetTime</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">"%H:%I:%S (Full days: %a)"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">24:30:00 (Full days: 0)</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2227">
   <p><strong>Example #3 <span class="methodname"><strong>DateTimeInterface::diff()</strong></span> range</strong></p>
   <div class="example-contents"><p>
    The value that the method returns is the exact amount of time to get from
    <code class="parameter">$this</code> to <code class="parameter">$targetObject</code>.
    Comparing January 1st to December 31st returns therefore 364, and not 365,
    days (for non-leap years).
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$originalTime </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">"2023-01-01 UTC"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$targetTime </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTimeImmutable</span><span style="color: #007700">(</span><span style="color: #DD0000">"2023-12-31 UTC"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$interval </span><span style="color: #007700">= </span><span style="color: #0000BB">$originalTime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$targetTime</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Full days: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$interval</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">"%a"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Full days: 364</pre>
</div>
   </div>
  </div>

  <div class="example" id="example-2228">
   <p><strong>Example #4 <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> object comparison</strong></p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> and
     <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> objects can be compared using
     <a href="language.operators.comparison.php" class="link">comparison operators</a>.
    </p>
   </p></blockquote>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$date1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">"now"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$date2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">"tomorrow"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$date1 </span><span style="color: #007700">== </span><span style="color: #0000BB">$date2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$date1 </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">$date2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$date1 </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">$date2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output:</p></div>
  <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(false)
bool(true)
bool(false)</pre>
</div>
  </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-datetime.diff-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="dateinterval.format.php" class="function" rel="rdfs-seeAlso">DateInterval::format()</a> - Formats the interval</span></li>
   <li><span class="function"><a href="datetime.add.php" class="function" rel="rdfs-seeAlso">DateTime::add()</a> - Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds</span></li>
   <li><span class="function"><a href="datetime.sub.php" class="function" rel="rdfs-seeAlso">DateTime::sub()</a> - Subtracts an amount of days, months, years, hours, minutes and seconds from
   a DateTime object</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/datetimeinterface/diff.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdatetime.diff%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=datetime.diff&amp;repo=en&amp;redirect=https://www.php.net/manual/en/datetime.diff.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.datetimeinterface.php">DateTimeInterface</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="datetime.diff.php" title="diff">diff</a>
                        </li>
                                                <li class="">
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
