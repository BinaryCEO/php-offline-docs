<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward Incompatible Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration82.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration82.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration82.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration82.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration82.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration82.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration82.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration82.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration82.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration82.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration82.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration82.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration82.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration82.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration82.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration82.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration82.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward Incompatible Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward Incompatible Changes - Manual" />
<meta name="twitter:description" content="Backward Incompatible Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward Incompatible Changes - Manual" />
<meta itemprop="description" content="Backward Incompatible Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward Incompatible Changes" />

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
        <a href="migration82.deprecated.php">
          Deprecated Features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration82.constants.php">
          &laquo; New Global Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration82.php'>Migrating from PHP 8.1.x to PHP 8.2.x</a></li>      </ul>
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
            <option value='en/migration82.incompatible.php' selected="selected">English</option>
            <option value='de/migration82.incompatible.php'>German</option>
            <option value='es/migration82.incompatible.php'>Spanish</option>
            <option value='fr/migration82.incompatible.php'>French</option>
            <option value='it/migration82.incompatible.php'>Italian</option>
            <option value='ja/migration82.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration82.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration82.incompatible.php'>Russian</option>
            <option value='tr/migration82.incompatible.php'>Turkish</option>
            <option value='uk/migration82.incompatible.php'>Ukrainian</option>
            <option value='zh/migration82.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration82.incompatible" class="sect1">
 <h2 class="title">Backward Incompatible Changes</h2>

 <div class="sect2" id="migration82.incompatible.date">
  <h3 class="title">Date</h3>

  <p class="para">
   <span class="methodname"><a href="datetime.createfromimmutable.php" class="methodname">DateTime::createFromImmutable()</a></span> now has a tentative
   return type of <span class="type">static</span>, previously it was <span class="type"><a href="class.datetime.php" class="type DateTime">DateTime</a></span>.
  </p>

  <p class="para">
   <span class="methodname"><a href="datetimeimmutable.createfrommutable.php" class="methodname">DateTimeImmutable::createFromMutable()</a></span> now has a tentative
   return type of <span class="type">static</span>, previously it was <span class="type"><a href="class.datetimeimmutable.php" class="type DateTimeImmutable">DateTimeImmutable</a></span>.
  </p>

  <p class="para">
   <code class="literal">number</code> symbols in <a href="datetime.formats.php#datetime.formats.relative" class="link">relative formats</a>
   no longer accept multiple signs, e.g. <code class="literal">+-2</code>.
  </p>
 </div>

 <div class="sect2" id="migration82.incompatible.odbc">
  <h3 class="title">ODBC</h3>

  <p class="para">
   The ODBC extension now escapes the username and password for the case when
   both a connection string and username/password are passed, and the string
   must be appended to. Before, user values containing values needing escaping
   could have created a malformed connection string, or injected values from
   user-provided data. The escaping rules should be identical to the .NET BCL
   DbConnectionOptions behaviour.
  </p>
 </div>

 <div class="sect2" id="migration82.incompatible.pdo-odbc">
  <h3 class="title">PDO_ODBC</h3>

  <p class="para">
   The PDO_ODBC extension also escapes the username and password when a
   connection string is passed. See the <a href="migration82.incompatible.php#migration82.incompatible.odbc" class="link">change to the ODBC extension</a> for
   further details.
  </p>
 </div>

 <div class="sect2" id="migration82.incompatible.standard">
  <h3 class="title">Standard</h3>

  <p class="para">
   <span class="function"><a href="function.glob.php" class="function">glob()</a></span> now returns an empty <span class="type"><a href="language.types.array.php" class="type array">array</a></span> if all paths are
   restricted by <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a>.
   Previously it returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   Moreover, a warning is now emitted even if only some paths are restricted by
   <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a>.
  </p>

  <p class="para">
   <span class="methodname"><a href="filesystemiterator.construct.php" class="methodname">FilesystemIterator::__construct()</a></span>: prior to PHP 8.2.0,
   <strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.skip-dots">FilesystemIterator::SKIP_DOTS</a></code></strong> constant was always set
   and couldn&#039;t be disabled. In order to maintain the previous behaviour the constant
   must be explicitly set when using the <code class="parameter">flags</code> parameter.
   The default value from <code class="parameter">flags</code> parameter has
   not been modified.
  </p>

  <p class="para">
   <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span>,
   <span class="function"><a href="function.strtoupper.php" class="function">strtoupper()</a></span>,
   <span class="function"><a href="function.stristr.php" class="function">stristr()</a></span>,
   <span class="function"><a href="function.stripos.php" class="function">stripos()</a></span>,
   <span class="function"><a href="function.strripos.php" class="function">strripos()</a></span>,
   <span class="function"><a href="function.lcfirst.php" class="function">lcfirst()</a></span>,
   <span class="function"><a href="function.ucfirst.php" class="function">ucfirst()</a></span>,
   <span class="function"><a href="function.ucwords.php" class="function">ucwords()</a></span>,
   and <span class="function"><a href="function.str-ireplace.php" class="function">str_ireplace()</a></span> are no longer locale-sensitive.
   They now perform ASCII case conversion, as if the locale were &quot;C&quot;.
   Localized versions of these functions are available in the <a href="book.mbstring.php" class="link">MBString extension</a>.
   Moreover, <span class="function"><a href="function.array-change-key-case.php" class="function">array_change_key_case()</a></span>, and sorting with
   <strong><code><a href="array.constants.php#constant.sort-flag-case">SORT_FLAG_CASE</a></code></strong> now also use ASCII case conversion.
  </p>

  <p class="para">
   <span class="function"><a href="function.str-split.php" class="function">str_split()</a></span> returns an empty <span class="type"><a href="language.types.array.php" class="type array">array</a></span> for an empty <span class="type"><a href="language.types.string.php" class="type string">string</a></span> now.
   Previously it returned an array with a single empty string entry.
   <span class="function"><a href="function.mb-str-split.php" class="function">mb_str_split()</a></span> is not affected by this change as it was
   already behaving like that.
  </p>

  <p class="para">
   <span class="function"><a href="function.ksort.php" class="function">ksort()</a></span> and <span class="function"><a href="function.krsort.php" class="function">krsort()</a></span> now do numeric string
   comparison under <strong><code><a href="array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> using the standard PHP 8 rules now.
  </p>

  <p class="para">
   <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span> no longer omits the leading backslash for exported classes,
   i.e. these are now fully qualified.
  </p>
 </div>

 <div class="sect2" id="migration82.incompatible.spl">
  <h3 class="title">Standard PHP Library (SPL)</h3>

  <p class="para">
   The following methods now enforce their signature:
   <ul class="simplelist">
    <li><span class="methodname"><strong>SplFileInfo::_bad_state_ex()</strong></span></li>
    <li><span class="methodname"><a href="splfileobject.getcsvcontrol.php" class="methodname">SplFileObject::getCsvControl()</a></span></li>
    <li><span class="methodname"><a href="splfileobject.fflush.php" class="methodname">SplFileObject::fflush()</a></span></li>
    <li><span class="methodname"><a href="splfileobject.ftell.php" class="methodname">SplFileObject::ftell()</a></span></li>
    <li><span class="methodname"><a href="splfileobject.fgetc.php" class="methodname">SplFileObject::fgetc()</a></span></li>
    <li><span class="methodname"><a href="splfileobject.fpassthru.php" class="methodname">SplFileObject::fpassthru()</a></span></li>
   </ul>
  </p>

  <p class="para">
   <span class="methodname"><a href="splfileobject.haschildren.php" class="methodname">SplFileObject::hasChildren()</a></span> now has a tentative
   return type of <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>, previously it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
  </p>

  <p class="para">
   <span class="methodname"><a href="splfileobject.getchildren.php" class="methodname">SplFileObject::getChildren()</a></span> now has a tentative
   return type of <span class="type"><a href="language.types.null.php" class="type null">null</a></span>, previously it was
   <span class="type">?</span><span class="type"><span class="type"><a href="class.recursiveiterator.php" class="type RecursiveIterator">RecursiveIterator</a></span><span class="type"></span></span>.
  </p>

  <p class="para">
   <span class="classname"><a href="class.globiterator.php" class="classname">GlobIterator</a></span> now returns an empty <span class="type"><a href="language.types.array.php" class="type array">array</a></span> if all
   paths are restricted by <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a>.
   Previously it returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   Moreover, a warning is now emitted even if only some paths are restricted by
   <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a>.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration82/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration82.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration82.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration82.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="130485">  <div class="votes">
    <div id="Vu130485">
    <a href="/manual/vote-note.php?id=130485&amp;page=migration82.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130485">
    <a href="/manual/vote-note.php?id=130485&amp;page=migration82.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130485" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130485" class="name">
  <strong class="user"><em>al dot turani at gmail dot com</em></strong></a><a class="genanchor" href="#130485"> &para;</a><div class="date" title="2025-09-16 02:33"><strong>13 days ago</strong></div>
  <div class="text" id="Hcom130485">
<div class="phpcode"><code><span class="html">Another backward incompatible change, not mentioned in the docs, is that function `date_default_timezone_get()` no longer returns current time zone.<br /><br />Prior to 8.2, this function returned:<br />- Time zone set by `date_default_timezone_set()` (if set).<br />- Time zone specified in `date.timezone` (if set).<br />- Current time zone, if none of above applies.<br /><br />From 8.2 onward, if neither of the first two variants applies, this function returns UTC. This breaks scenarios where current time zone shall be used.<br /><br />See &lt;<a href="https://github.com/php/php-src/issues/11496&gt;" rel="nofollow" target="_blank">https://github.com/php/php-src/issues/11496&gt;</a> for discussion.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration82.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration82.incompatible.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration82.php">Migrating from PHP 8.1.x to PHP 8.2.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration82.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration82.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration82.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration82.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration82.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration82.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration82.windows-support.php" title="Windows Support">Windows Support</a>
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
