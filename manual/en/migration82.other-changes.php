<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration82.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration82.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration82.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration82.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration82.deprecated.php">
 <link rel="next" href="https://www.php.net/manual/en/migration82.windows-support.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration82.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration82.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration82.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration82.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration82.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration82.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration82.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration82.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration82.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration82.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration82.other-changes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Changes - Manual" />
<meta name="twitter:description" content="Other Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Changes - Manual" />
<meta itemprop="description" content="Other Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Changes" />

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
        <a href="migration82.windows-support.php">
          Windows Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration82.deprecated.php">
          &laquo; Deprecated Features        </a>
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
            <option value='en/migration82.other-changes.php' selected="selected">English</option>
            <option value='de/migration82.other-changes.php'>German</option>
            <option value='es/migration82.other-changes.php'>Spanish</option>
            <option value='fr/migration82.other-changes.php'>French</option>
            <option value='it/migration82.other-changes.php'>Italian</option>
            <option value='ja/migration82.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration82.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration82.other-changes.php'>Russian</option>
            <option value='tr/migration82.other-changes.php'>Turkish</option>
            <option value='uk/migration82.other-changes.php'>Ukrainian</option>
            <option value='zh/migration82.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration82.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration82.other-changes.core">
  <h3 class="title">Core changes</h3>

  <p class="para">
   The <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> type is now a built-in compile time alias for
   <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="class.traversable.php" class="type Traversable">Traversable</a></span></span>.
   Error messages relating to <code class="literal">iterable</code> will therefore
   now use <code class="literal">array|Traversable</code>.
   Type Reflection is preserved for single <code class="literal">iterable</code>
   (and <code class="literal">?iterable</code>) to produce a
   <span class="classname"><a href="class.reflectionnamedtype.php" class="classname">ReflectionNamedType</a></span> with name <code class="literal">iterable</code>,
   however usage of <code class="literal">iterable</code> in union types will be
   converted to <code class="literal">array|Traversable</code>.
  </p>

  <p class="para">
   The date format of sent cookies is now <code class="literal">&#039;D, d M Y H:i:s \G\M\T&#039;</code>;
   previously it was <code class="literal">&#039;D, d-M-Y H:i:s T&#039;</code>.
  </p>
 </div>

 <div class="sect2" id="migration82.other-changes.sapi">
  <h3 class="title">Changes in SAPI Modules</h3>

  <div class="sect3" id="migration82.other-changes.sapi.cli">
   <h4 class="title">CLI</h4>

   <p class="para">
    The STDOUT, STDERR and STDIN streams are no longer closed on resource destruction
    which is mostly when the CLI finishes. It is however still possible to
    explicitly close those streams using <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span> and similar.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration82.other-changes.functions">
  <h3 class="title">Changed Functions</h3>

  <div class="sect3" id="migration82.other-changes.functions.core">
   <h4 class="title">Core</h4>

   <p class="para">
    The <span class="function"><a href="function.strcmp.php" class="function">strcmp()</a></span>, <span class="function"><a href="function.strcasecmp.php" class="function">strcasecmp()</a></span>,
    <span class="function"><a href="function.strncmp.php" class="function">strncmp()</a></span>, <span class="function"><a href="function.strncasecmp.php" class="function">strncasecmp()</a></span>, and
    <span class="function"><a href="function.substr-compare.php" class="function">substr_compare()</a></span> functions, using binary safe string
    comparison is no longer guaranteed to return
    <code class="code">strlen($string1) - strlen($string2)</code> when string lengths are not
    equal, but may now return <code class="literal">-1</code> or <code class="literal">1</code>
    instead. Instead of depending on any concrete value, the return value should
    be compared to <code class="literal">0</code>.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.functions.dba">
   <h4 class="title">DBA</h4>

   <p class="para">
    <span class="function"><a href="function.dba-open.php" class="function">dba_open()</a></span> and <span class="function"><a href="function.dba-popen.php" class="function">dba_popen()</a></span>
    now have the following enforced signature:
    <div class="methodsynopsis dc-description">
     <span class="methodname"><a href="function.dba-open.php" class="methodname">dba_open</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$handler</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permission</code><span class="initializer"> = 0644</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$map_size</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

   </p>
   <p class="para">
    <span class="function"><a href="function.dba-fetch.php" class="function">dba_fetch()</a></span>&#039;s optional skip argument is now at the end
    in line with PHP userland semantics. Its signature is now:
    <div class="methodsynopsis dc-description"><span class="methodname"><a href="function.dba-fetch.php" class="methodname">dba_fetch</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$handle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$skip</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


    The overloaded signature:
    <div class="methodsynopsis dc-description"><span class="methodname"><a href="function.dba-fetch.php" class="methodname">dba_fetch</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$skip</code></span>, <span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$handle</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

    is still accepted, but it is recommended to use the new standard variant.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.functions.random">
   <h4 class="title">Random</h4>

   <p class="para">
    <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> and <span class="function"><a href="function.random-int.php" class="function">random_int()</a></span>
    now throw a <span class="classname"><a href="class.random-randomexception.php" class="classname">\Random\RandomException</a></span> on <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr> failures.
    Previously a plain <span class="classname"><a href="class.exception.php" class="classname">\Exception</a></span> was thrown instead.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.functions.spl">
   <h4 class="title">SPL</h4>

   <p class="para">
    The <code class="parameter">iterator</code> parameter of
    <span class="function"><a href="function.iterator-to-array.php" class="function">iterator_to_array()</a></span> and <span class="function"><a href="function.iterator-count.php" class="function">iterator_count()</a></span>
    is widened to <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> from <span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span>,
    allowing arrays to be passed.
    
   </p>
  </div>
 </div>

 <div class="sect2" id="migration82.other-changes.extensions">
  <h3 class="title">Other Changes to Extensions</h3>

  <div class="sect3" id="migration82.other-changes.extensions.date">
   <h4 class="title">Date</h4>

   <p class="para">
    The properties of <span class="classname"><a href="class.dateperiod.php" class="classname">DatePeriod</a></span> are now properly declared.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.intl">
   <h4 class="title">Intl</h4>

   <p class="para">
    Instances of
    <span class="classname"><a href="class.intlbreakiterator.php" class="classname">IntlBreakIterator</a></span>,
    <span class="classname"><a href="class.intlrulebasedbreakiterator.php" class="classname">IntlRuleBasedBreakIterator</a></span>,
    <span class="classname"><a href="class.intlcodepointbreakiterator.php" class="classname">IntlCodePointBreakIterator</a></span>,
    <span class="classname"><a href="class.intlpartsiterator.php" class="classname">IntlPartsIterator</a></span>,
    <span class="classname"><a href="class.intlcalendar.php" class="classname">IntlCalendar</a></span>,
    <span class="classname"><a href="class.collator.php" class="classname">Collator</a></span>,
    <span class="classname"><a href="class.intliterator.php" class="classname">IntlIterator</a></span>,
    <span class="classname"><a href="class.uconverter.php" class="classname">UConverter</a></span>,
    <span class="classname"><a href="class.intldateformatter.php" class="classname">IntlDateFormatter</a></span>,
    <span class="classname"><a href="class.intldatepatterngenerator.php" class="classname">IntlDatePatternGenerator</a></span>,
    <span class="classname"><a href="class.messageformatter.php" class="classname">MessageFormatter</a></span>,
    <span class="classname"><a href="class.resourcebundle.php" class="classname">ResourceBundle</a></span>,
    <span class="classname"><a href="class.spoofchecker.php" class="classname">Spoofchecker</a></span>,
    <span class="classname"><a href="class.intltimezone.php" class="classname">IntlTimeZone</a></span>,
    and <span class="classname"><a href="class.transliterator.php" class="classname">Transliterator</a></span>
    are no longer serializable. Previously, they could be serialized, but
    unserialization yielded unusable objects or failed.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.mysqli">
   <h4 class="title">MySQLi</h4>

   <p class="para">
    The support for libmysql has been removed and it is no longer
    possible to compile mysqli with libmysql.
    From now on, the mysqli extension can be compiled only with mysqlnd.
    All libmysql features unavailable in mysqlnd have been removed:
    <ul class="simplelist">
     <li>The reconnect property of <span class="classname"><a href="class.mysqli-driver.php" class="classname">mysqli_driver</a></span></li>
     <li>
      The <a href="mysqli.configuration.php#ini.mysqli.reconnect" class="link">mysqli.reconnect</a> INI directive
     </li>
     <li>The <strong><code><a href="mysqli.constants.php#constant.mysqli-is-mariadb">MYSQLI_IS_MARIADB</a></code></strong> constant has been deprecated</li>
    </ul>
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.oci8">
   <h4 class="title">OCI8</h4>

   <p class="para">
    The minimum Oracle Client library version required is now 11.2.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.pcre">
   <h4 class="title">PCRE</h4>

   <p class="para">
    NUL characters (<code class="literal">\0</code>) in pattern strings are now supported.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.session">
   <h4 class="title">Session</h4>

   <p class="para">
    Trying to change the
    <a href="session.configuration.php#ini.session.cookie-samesite" class="link">session.cookie_samesite</a>
    INI directive while the session is active or output has already been sent
    will now fail and emit a warning.
    This aligns the behaviour with all other session INI settings.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.sqlite3">
   <h4 class="title">SQLite3</h4>

   <p class="para">
    <a href="sqlite3.configuration.php#ini.sqlite3.defensive" class="link">sqlite3.defensive</a>
    is now <strong><code><a href="info.constants.php#constant.ini-user">INI_USER</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.standard">
   <h4 class="title">Standard</h4>

   <p class="para">
    <span class="function"><a href="function.getimagesize.php" class="function">getimagesize()</a></span> now reports the actual image dimensions,
    bits and channels of AVIF images. Previously, the dimensions have been reported as 0x0,
    and bits and channels have not been reported at all.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.tidy">
   <h4 class="title">Tidy</h4>

   <p class="para">
    The properties of the <span class="classname"><a href="class.tidy.php" class="classname">tidy</a></span> class are now properly declared.
    And those of the <span class="classname"><a href="class.tidynode.php" class="classname">tidyNode</a></span> class are now properly declared as readonly.
   </p>
  </div>

  <div class="sect3" id="migration82.other-changes.extensions.zip">
   <h4 class="title">Zip</h4>

   <p class="para">
    The Zip extension has been updated to version 1.20.0,
    which adds the following methods:
    <ul class="simplelist">
     <li><span class="methodname"><a href="ziparchive.clearerror.php" class="methodname">ZipArchive::clearError()</a></span></li>
     <li><span class="methodname"><a href="ziparchive.getstreamname.php" class="methodname">ZipArchive::getStreamName()</a></span></li>
     <li><span class="methodname"><a href="ziparchive.getstreamindex.php" class="methodname">ZipArchive::getStreamIndex()</a></span></li>
    </ul>
   </p>
  </div>
 </div>

 <div class="sect2" id="migration82.other-changes.ini">
  <h3 class="title">Changes to INI File Handling</h3>

  
  <p class="para">
   Support for binary (<code class="literal">0b</code>/<code class="literal">0B</code>) and octal
   (<code class="literal">0o</code>/<code class="literal">0O</code>) prefixes has been added to integer INI settings.
   Integer INI settings that start with a zero (<code class="literal">0</code>)
   continue to be interpreted as an octal integer.
  </p>

  <p class="para">
   Parsing of some ill-formatted values will now trigger a warning when this
   was silently ignored before.
   For backwards compatibility, interpretation of these values has not changed.
   This affects the following settings:

   <ul class="simplelist">
    <li><a href="bc.configuration.php#ini.bcmath.scale" class="link">bcmath.scale</a></li>
    <li><a href="com.configuration.php#ini.com.code-page" class="link">com.code_page</a></li>
    <li><a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a></li>
    <li><a href="info.configuration.php#ini.fiber.stack-size" class="link">fiber.stack_size</a></li>
    <li><a href="ini.core.php#ini.hard-timeout" class="link">hard_timeout</a></li>
    <li><a href="intl.configuration.php#ini.intl.error-level" class="link">intl.error_level</a></li>
    <li><a href="ldap.configuration.php#ini.ldap.max_links" class="link">ldap.max_links</a></li>
    <li><a href="info.configuration.php#ini.max-input-nesting-level" class="link">max_input_nesting_level</a></li>
    <li><a href="info.configuration.php#ini.max-input-vars" class="link">max_input_vars</a></li>
    <li><a href="mbstring.configuration.php#ini.mbstring.regex-retry-limit" class="link">mbstring.regex_retry_limit</a></li>
    <li><a href="mbstring.configuration.php#ini.mbstring.regex-stack-limit" class="link">mbstring.regex_stack_limit</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.allow-local-infile" class="link">mysqli.allow_local_infile</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.allow-persistent" class="link">mysqli.allow_persistent</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.default-port" class="link">mysqli.default_port</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.max-links" class="link">mysqli.max_links</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.max-persistent" class="link">mysqli.max_persistent</a></li>
    <li><a href="mysqli.configuration.php#ini.mysqli.rollback-on-cached-plink" class="link">mysqli.rollback_on_cached_plink</a></li>
    <li><a href="mysqlnd.config.php#ini.mysqlnd.log-mask" class="link">mysqlnd.log_mask</a></li>
    <li><a href="mysqlnd.config.php#ini.mysqlnd.mempool-default-size" class="link">mysqlnd.mempool_default_size</a></li>
    <li><a href="mysqlnd.config.php#ini.mysqlnd.net-read-buffer-size" class="link">mysqlnd.net_read_buffer_size</a></li>
    <li><a href="mysqlnd.config.php#ini.mysqlnd.net-read-timeout" class="link">mysqlnd.net_read_timeout</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.default-prefetch" class="link">oci8.default_prefetch</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.max-persistent" class="link">oci8.max_persistent</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.persistent-timeout" class="link">oci8.persistent_timeout</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.ping-interval" class="link">oci8.ping_interval</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.prefetch-lob-size" class="link">oci8.prefetch_lob_size</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.privileged-connect" class="link">oci8.privileged_connect</a></li>
    <li><a href="oci8.configuration.php#ini.oci8.statement-cache-size" class="link">oci8.statement_cache_size</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.allow-persistent" class="link">odbc.allow_persistent</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.check-persistent" class="link">odbc.check_persistent</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.max-persistent" class="link">odbc.max_persistent</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.max-links" class="link">odbc.max_links</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.defaultbinmode" class="link">odbc.defaultbinmode</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.defaultcursortype" class="link">odbc.default_cursortype</a></li>
    <li><a href="odbc.configuration.php#ini.uodbc.defaultlrl" class="link">odbc.defaultlrl</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.consistency-checks" class="link">opcache.consistency_checks</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.file_update_protection" class="link">opcache.file_update_protection</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.force-restart-timeout" class="link">opcache.force_restart_timeout</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.interned-strings-buffer" class="link">opcache.interned_strings_buffer</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-bisect-limit" class="link">opcache.jit_bisect_limit</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-blacklist-root-trace" class="link">opcache.jit_blacklist_root_trace</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-blacklist-side-trace" class="link">opcache.jit_blacklist_side_trace</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-debug" class="link">opcache.jit_debug</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-hot-func" class="link">opcache.jit_hot_func</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-hot-loop" class="link">opcache.jit_hot_loop</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-hot-return" class="link">opcache.jit_hot_return</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-hot-side-exit" class="link">opcache.jit_hot_side_exit</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-exit-counters" class="link">opcache.jit_max_exit_counters</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-loop-unrolls" class="link">opcache.jit_max_loop_unrolls</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-polymorphic-calls" class="link">opcache.jit_max_polymorphic_calls</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-calls" class="link">opcache.jit_max_recursive_calls</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-return" class="link">opcache.jit_max_recursive_returns</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-root-traces" class="link">opcache.jit_max_root_traces</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.jit-max-side-traces" class="link">opcache.jit_max_side_traces</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.log-verbosity-level" class="link">opcache.log_verbosity_level</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.max-file-size" class="link">opcache.max_file_size</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.opt_debug_level" class="link">opcache.opt_debug_level</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.optimization-level" class="link">opcache.optimization_level</a></li>
    <li><a href="opcache.configuration.php#ini.opcache.revalidate-freq" class="link">opcache.revalidate_freq</a></li>
    <li><a href="outcontrol.configuration.php#ini.output-buffering" class="link">output_buffering</a></li>
    <li><a href="pcre.configuration.php#ini.pcre.backtrack-limit" class="link">pcre.backtrack_limit</a></li>
    <li><a href="pcre.configuration.php#ini.pcre.recursion-limit" class="link">pcre.recursion_limit</a></li>
    <li><a href="pgsql.configuration.php#ini.pgsql.max-links" class="link">pgsql.max_links</a></li>
    <li><a href="pgsql.configuration.php#ini.pgsql.max-persistent" class="link">pgsql.max_persistent</a></li>
    <li><a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a></li>
    <li><a href="ini.core.php#ini.realpath-cache-size" class="link">realpath_cache_size</a></li>
    <li><a href="ini.core.php#ini.realpath-cache-ttl" class="link">realpath_cache_ttl</a></li>
    <li><a href="session.configuration.php#ini.session.cache-expire" class="link">session.cache_expire</a></li>
    <li><a href="session.configuration.php#ini.session.cookie-lifetime" class="link">session.cookie_lifetime</a></li>
    <li><a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a></li>
    <li><a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a></li>
    <li><a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a></li>
    <li><a href="soap.configuration.php#ini.soap.wsdl-cache-limit" class="link">soap.wsdl_cache_limit</a></li>
    <li><a href="soap.configuration.php#ini.soap.wsdl-cache-ttl" class="link">soap.wsdl_cache_ttl</a></li>
    <li><a href="var.configuration.php#ini.unserialize-max-depth" class="link">unserialize_max_depth</a></li>
    <li><a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a></li>
    <li><a href="ini.core.php#ini.user-ini.cache-ttl" class="link">user_ini.cache_ttl</a></li>
    <li><a href="errorfunc.configuration.php#ini.xmlrpc-error-number" class="link">xmlrpc_error_number</a></li>
    <li><a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a></li>
    <li><a href="zlib.configuration.php#ini.zlib.output-compression-level" class="link">zlib.output_compression_level</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration82/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration82.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration82.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration82.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="migration82.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration82.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="current">
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
