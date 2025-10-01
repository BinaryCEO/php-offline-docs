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

 <link rel="canonical" href="https://www.php.net/manual/en/migration73.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration73.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration73.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration73.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration73.deprecated.php">
 <link rel="next" href="https://www.php.net/manual/en/migration73.windows-support.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration73.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration73.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration73.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration73.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration73.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration73.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration73.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration73.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration73.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration73.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration73.other-changes.php" hreflang="zh">

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
        <a href="migration73.windows-support.php">
          Windows Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration73.deprecated.php">
          &laquo; Deprecated Features        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration73.php'>Migrating from PHP 7.2.x to PHP 7.3.x</a></li>      </ul>
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
            <option value='en/migration73.other-changes.php' selected="selected">English</option>
            <option value='de/migration73.other-changes.php'>German</option>
            <option value='es/migration73.other-changes.php'>Spanish</option>
            <option value='fr/migration73.other-changes.php'>French</option>
            <option value='it/migration73.other-changes.php'>Italian</option>
            <option value='ja/migration73.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration73.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration73.other-changes.php'>Russian</option>
            <option value='tr/migration73.other-changes.php'>Turkish</option>
            <option value='uk/migration73.other-changes.php'>Ukrainian</option>
            <option value='zh/migration73.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration73.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration73.other-changes.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration73.other-changes.core.setcookie">
   <h4 class="title">Set(raw)cookie accepts $option Argument</h4>

   <p class="para">
    <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> and <span class="function"><a href="function.setrawcookie.php" class="function">setrawcookie()</a></span> now also
    support the following signature:
    <div class="methodsynopsis dc-description">
     <span class="methodname"><a href="function.setcookie.php" class="methodname">setcookie</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    where <code class="literal">$options</code> is an associative array which may have
    any of the keys <code class="literal">&quot;expires&quot;</code>, <code class="literal">&quot;path&quot;</code>,
    <code class="literal">&quot;domain&quot;</code>, <code class="literal">&quot;secure&quot;</code>,
    <code class="literal">&quot;httponly&quot;</code> and <code class="literal">&quot;samesite&quot;</code>.
   </p>
  </div>

  <div class="sect3" id="migration73.other-changes.core.syslog">
   <h4 class="title">New Syslog ini Directives</h4>

   <p class="para">
    The following ini Directives have been added to customize logging, if
    <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a> is set to
    <code class="literal">syslog</code>:
    <dl>
     
      <dt><a href="errorfunc.configuration.php#ini.syslog.facility" class="link">syslog.facility</a></dt>
      <dd>
       <span class="simpara">
        Specifies what type of program is logging the message.
       </span>
      </dd>
     
     
      <dt><a href="errorfunc.configuration.php#ini.syslog.filter" class="link">syslog.filter</a></dt>
      <dd>
       <span class="simpara">
        Specifies the filter type to filter the logged messages, with the
        supported filter types - <code class="literal">all</code>,
        <code class="literal">no-ctrl</code> and <code class="literal">ascii</code>.
        Starting with PHP 7.3.8, <code class="literal">raw</code> is also available, 
        restoring the way syslog behaved in previous PHP versions.
        This filter will also affect calls to <span class="function"><a href="function.syslog.php" class="function">syslog()</a></span>.
       </span>
      </dd>
     
     
      <dt><a href="errorfunc.configuration.php#ini.syslog.ident" class="link">syslog.ident</a></dt>
      <dd>
       <span class="simpara">
        Specifies the ident string which is prepended to every message.
       </span>
      </dd>
     
    </dl>
   </p>
  </div>

  <div class="sect3" id="migration73.other-changes.core.gc">
   <h4 class="title">Garbage Collection</h4>

   <p class="para">
    The <a href="features.gc.collecting-cycles.php" class="link">cyclic GC</a> has been
    enhanced, which may result in considerable performance improvements.
   </p>
  </div>

  <div class="sect3" id="migration73.other-changes.core.misc">
   <h4 class="title">Miscellaneous</h4>

   <p class="para">
    <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span> now exports <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>
    objects as an array cast to an object (<code class="code">(object) array( ... )</code>), rather
    than using the nonexistent method <span class="methodname"><strong>stdClass::__setState()</strong></span>.
   </p>

   <p class="para">
    <span class="function"><a href="function.debug-zval-dump.php" class="function">debug_zval_dump()</a></span> was changed to display recursive arrays
    and objects in the same way as <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>. Now, it doesn&#039;t
    display them twice.
   </p>

   <p class="para">
    <span class="function"><a href="function.array-push.php" class="function">array_push()</a></span> and <span class="function"><a href="function.array-unshift.php" class="function">array_unshift()</a></span> can
    now also be called with a single argument, which is particularly convenient
    wrt. the spread operator.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration73.other-changes.phpdbg">
  <h3 class="title">Interactive PHP Debugger</h3>

  <p class="para">
   The unused constants <strong><code><a href="phpdbg.constants.php#constant.phpdbg-file">PHPDBG_FILE</a></code></strong>,
   <strong><code><a href="phpdbg.constants.php#constant.phpdbg-method">PHPDBG_METHOD</a></code></strong>, <strong><code><a href="phpdbg.constants.php#constant.phpdbg-lineno">PHPDBG_LINENO</a></code></strong> and
   <strong><code><a href="phpdbg.constants.php#constant.phpdbg-func">PHPDBG_FUNC</a></code></strong> have been removed.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.fpm">
  <h3 class="title">FastCGI Process Manager</h3>

  <p class="para">
   The <span class="function"><a href="function.getallheaders.php" class="function">getallheaders()</a></span> function is now also available.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.curl">
  <h3 class="title">Client URL Library</h3>

  <p class="para">
   libcurl ≥ 7.15.5 is now required.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.filter">
  <h3 class="title">Data Filtering</h3>

  <p class="para">
   <strong><code><a href="filter.constants.php#constant.filter-validate-float">FILTER_VALIDATE_FLOAT</a></code></strong> now also supports a <code class="literal">thousand</code>
   option, which defines the set of allowed thousand separator chars.  The default
   (<code class="code">&quot;&#039;,.&quot;</code>) is fully backward compatible with former PHP versions.
  </p>

  <p class="para">
   <strong><code><a href="filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong> has been added as an alias of the
   <code class="literal">magic_quotes</code> filter (<strong><code><a href="filter.constants.php#constant.filter-sanitize-magic-quotes">FILTER_SANITIZE_MAGIC_QUOTES</a></code></strong>).
   The <code class="literal">magic_quotes</code> filter is subject to removal in future versions of PHP.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.ftp">
  <h3 class="title">FTP</h3>

  <p class="para">
   The default transfer mode has been changed to <code class="literal">binary</code>.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.intl">
  <h3 class="title">Internationalization Functions</h3>

  <p class="para">
   <strong><code>Normalizer::NONE</code></strong> is deprecated, when PHP is linked with
   ICU ≥ 56.
  </p>

  <p class="para">
   Introduced <strong><code><a href="class.normalizer.php#normalizer.constants.form-kc-cf">Normalizer::FORM_KC_CF</a></code></strong> as
   <span class="methodname"><a href="normalizer.normalize.php" class="methodname">Normalizer::normalize()</a></span> argument for
   <code class="literal">NFKC_Casefold</code> normalization; available when linked with
   ICU ≥ 56.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.json">
  <h3 class="title">JavaScript Object Notation</h3>

  <p class="para">
   A new flag has been added, <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>, which
   can be used with <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> or
   <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span> and causes these functions to throw the new
   <span class="classname"><a href="class.jsonexception.php" class="classname">JsonException</a></span> upon an error, instead of setting the
   global error state that is retrieved with
   <span class="function"><a href="function.json-last-error.php" class="function">json_last_error()</a></span> and <span class="function"><a href="function.json-last-error-msg.php" class="function">json_last_error_msg()</a></span>.
   <strong><code><a href="json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> takes precedence over
   <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.mbstring">
  <h3 class="title">Multibyte String</h3>

  <p class="para">
   The configuration option <strong class="option configure">--with-libmbfl</strong> is
   no longer available.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.uodbc">
  <h3 class="title">ODBC (Unified)</h3>

  <p class="para">
   Support for <code class="literal">ODBCRouter</code> and <code class="literal">Birdstep</code>
   including the <code class="literal">birdstep.max_links</code> ini directive has been
   removed.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.opcache">
  <h3 class="title">OPcache</h3>

  <p class="para">
   The <code class="literal">opcache.inherited_hack</code> ini directive has been removed.
   The value has already been ignored since PHP 5.3.0.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.openssl">
  <h3 class="title">OpenSSL</h3>

  <p class="para">
   The <code class="literal">min_proto_version</code> and <code class="literal">max_proto_version</code>
   ssl stream options as well as related constants for possible TLS protocol values
   have been added.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.pcre">
  <h3 class="title">Regular Expressions (Perl-Compatible)</h3>

  <p class="para">
   The <a href="book.pcre.php" class="link">PCRE extension</a> has been upgraded to
   PCRE2, which may cause minor behavioral changes (for instance, character
   ranges in classes are now more strictly interpreted), and augments the
   existing regular expression syntax.
  </p>

  <p class="para">
   <span class="function"><a href="function.preg-quote.php" class="function">preg_quote()</a></span> now also escapes the <code class="literal">&#039;#&#039;</code>
   character.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.pdo-dblib">
  <h3 class="title">Microsoft SQL Server and Sybase Functions (PDO_DBLIB)</h3>

  <p class="para">
   The attribute <strong><code>PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS</code></strong> to enable automatic
   skipping of empty rowsets has been added.
  </p>

  <p class="para">
   The <strong><code>PDO::DBLIB_ATTR_TDS_VERSION</code></strong> attribute which exposes
   the TDS version has been added.
  </p>

  <p class="para">
    DATETIME2 columns are now treated like DATETIME columns.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.pdo-sqlite">
  <h3 class="title">SQLite Functions (PDO_SQLITE)</h3>

  <p class="para">
   SQLite3 databases can now be opened in read-only mode by setting the
   new <strong><code>PDO::SQLITE_ATTR_OPEN_FLAGS</code></strong> attribute to
   <strong><code>PDO::SQLITE_OPEN_READONLY</code></strong>.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.session">
  <h3 class="title">Session Handling</h3>

  <p class="para">
   <span class="function"><a href="function.session-set-cookie-params.php" class="function">session_set_cookie_params()</a></span> now also supports the
   following signature:
   <div class="methodsynopsis dc-description">
    <span class="methodname"><a href="function.session-set-cookie-params.php" class="methodname">session_set_cookie_params</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   where <code class="literal">$options</code> is an associative array which may have
   any of the keys <code class="literal">&quot;lifetime&quot;</code>, <code class="literal">&quot;path&quot;</code>,
   <code class="literal">&quot;domain&quot;</code>, <code class="literal">&quot;secure&quot;</code>,
   <code class="literal">&quot;httponly&quot;</code> and <code class="literal">&quot;samesite&quot;</code>. Accordingly,
   the return value of <span class="function"><a href="function.session-get-cookie-params.php" class="function">session_get_cookie_params()</a></span> now also
   has an element with the key <code class="literal">&quot;samesite&quot;</code>.
   Furthermore, the new <code class="literal">session.cookie_samesite</code> ini option to
   set the default of the SameSite directive for cookies has been added. It
   defaults to <code class="literal">&quot;&quot;</code> (empty string), so no SameSite directive is
   set. Can be set to <code class="literal">&quot;Lax&quot;</code> or <code class="literal">&quot;Strict&quot;</code>,
   which sets the respective SameSite directive.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.tidy">
  <h3 class="title">Tidy</h3>

  <p class="para">
   Building against <a href="https://github.com/petdance/tidyp" class="link external">&raquo;&nbsp;tidyp</a> is now also
   supported transparently. Since tidyp offers no API to get the release date,
   <span class="function"><a href="tidy.getrelease.php" class="function">tidy_get_release()</a></span> and <span class="methodname"><a href="tidy.getrelease.php" class="methodname">tidy::getRelease()</a></span>
   return <code class="literal">&#039;unknown&#039;</code> in this case.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.xml">
  <h3 class="title">XML Parser</h3>

  <p class="para">
   The return value of the <span class="function"><a href="function.xml-set-external-entity-ref-handler.php" class="function">xml_set_external_entity_ref_handler()</a></span>
   callback is no longer ignored if the extension has been built against libxml.
   Formerly, the return value has been ignored, and parsing did never stop.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.zip">
  <h3 class="title">Zip</h3>

  <p class="para">
   Building against the bundled libzip is discouraged, but still possible by
   adding <strong class="option configure">--without-libzip</strong> to the configuration.
  </p>
 </div>

 <div class="sect2" id="migration73.other-changes.zlib">
  <h3 class="title">Zlib Compression</h3>

  <p class="para">
   The zlib/level context option for the <a href="wrappers.compression.php" class="link">compress.zlib wrapper</a> to facilitate
   setting the desired compression level has been added.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration73/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration73.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration73.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration73.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration73.php">Migrating from PHP 7.2.x to PHP 7.3.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration73.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration73.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration73.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration73.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="current">
                            <a href="migration73.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.windows-support.php" title="Windows Support">Windows Support</a>
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
