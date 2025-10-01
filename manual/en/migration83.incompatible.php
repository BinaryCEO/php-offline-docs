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

 <link rel="canonical" href="https://www.php.net/manual/en/migration83.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration83.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration83.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration83.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration83.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration83.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration83.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration83.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration83.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration83.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration83.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration83.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration83.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration83.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration83.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration83.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration83.incompatible.php" hreflang="zh">

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
        <a href="migration83.deprecated.php">
          Deprecated Features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration83.constants.php">
          &laquo; New Global Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration83.php'>Migrating from PHP 8.2.x to PHP 8.3.x</a></li>      </ul>
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
            <option value='en/migration83.incompatible.php' selected="selected">English</option>
            <option value='de/migration83.incompatible.php'>German</option>
            <option value='es/migration83.incompatible.php'>Spanish</option>
            <option value='fr/migration83.incompatible.php'>French</option>
            <option value='it/migration83.incompatible.php'>Italian</option>
            <option value='ja/migration83.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration83.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration83.incompatible.php'>Russian</option>
            <option value='tr/migration83.incompatible.php'>Turkish</option>
            <option value='uk/migration83.incompatible.php'>Ukrainian</option>
            <option value='zh/migration83.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration83.incompatible" class="sect1">
 <h2 class="title">Backward Incompatible Changes</h2>

 <div class="sect2" id="migration83.incompatible.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration83.incompatible.core.overflowing-call-stack">

   <h4 class="title">Programs that were very close to overflowing the call stack</h4>
   <p class="para">
    Programs that were very close to overflowing the call stack may now throw an
    <span class="classname"><a href="class.error.php" class="classname">Error</a></span> when using more than
    zend.max_allowed_stack_size-zend.reserved_stack_size bytes of stack
    (fiber.stack_size-zend.reserved_stack_size for fibers).
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.proc-get-status-multiple-times">
   <h4 class="title">Executing proc_get_status() multiple times</h4>
   <p class="para">
    Executing <span class="function"><a href="function.proc-get-status.php" class="function">proc_get_status()</a></span> multiple times will now always
    return the right value on POSIX systems. Previously, only the first call
    of the function returned the right value. Executing
    <span class="function"><a href="function.proc-close.php" class="function">proc_close()</a></span> after <span class="function"><a href="function.proc-get-status.php" class="function">proc_get_status()</a></span>
    will now also return the right exit code. Previously this would return
    <code class="literal">-1</code>.
    Internally, this works by caching the result on POSIX systems.
    If the previous behaviour is required, it is possible to check the
    <code class="literal">&quot;cached&quot;</code> key in the array returned by
    <span class="function"><a href="function.proc-get-status.php" class="function">proc_get_status()</a></span> to check whether the result was cached.
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.zend-max-execution-timers">
   <h4 class="title">Zend Max Execution Timers</h4>
   <p class="para">
    Zend Max Execution Timers is now enabled by default for ZTS builds on
    Linux.
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.traits-with-static-properties">
   <h4 class="title">Uses of traits with static properties</h4>
   <p class="para">
    Uses of traits with static properties will now redeclare static properties
    inherited from the parent class. This will create a separate static
    property storage for the current class. This is analogous to adding the
    static property to the class directly without traits.
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.negative-index-to-empty-array">
   <h4 class="title">Assigning a negative index to an empty array</h4>
   <p class="para">
    Assigning a negative index <var class="varname">$n</var> to an empty array will now make sure that the
    next index is <code class="code">$n+1</code> instead of <code class="literal">0</code>.
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.class-constant-visibility-check">
   <h4 class="title">Class constant visibility variance check</h4>
   <p class="para">
    Class constant visibility variance is now correctly checked when inherited
    from interfaces.
   </p>
  </div>

  <div class="sect3" id="migration83.incompatible.core.weakmap-entries-maps-to-itself">
   <h4 class="title">WeakMap entries whose key maps to itself</h4>
   <p class="para">
    <span class="classname"><a href="class.weakmap.php" class="classname">WeakMap</a></span> entries whose key maps to itself (possibly
    transitively) may now be removed during cycle collection if the key is not
    reachable except by iterating over the WeakMap (reachability via iteration is
    considered weak).
    Previously, such entries would never be automatically removed.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration83.incompatible.date">
  <h3 class="title">Date</h3>

  <p class="para">
   The DateTime extension has introduced Date extension specific exceptions
   and errors under the <span class="classname"><a href="class.dateerror.php" class="classname">DateError</a></span> and
   <span class="classname"><a href="class.dateexception.php" class="classname">DateException</a></span> hierarchies, instead of warnings and
   generic exceptions. This improves error handling, at the expense
   of having to check for errors and exceptions.
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.dom">
  <h3 class="title">DOM</h3>

  <p class="para">
   Calling <span class="methodname"><a href="domchildnode.after.php" class="methodname">DOMChildNode::after()</a></span>,
   <span class="methodname"><a href="domchildnode.before.php" class="methodname">DOMChildNode::before()</a></span>,
   <span class="methodname"><a href="domchildnode.replacewith.php" class="methodname">DOMChildNode::replaceWith()</a></span>
   on a node that has no parent is now a no-op instead of a hierarchy
   exception, which is the behaviour demanded by the DOM specification.
  </p>

  <p class="para">
   Using the <span class="classname"><a href="class.domparentnode.php" class="classname">DOMParentNode</a></span>
   and <span class="classname"><a href="class.domchildnode.php" class="classname">DOMChildNode</a></span> methods without a document now
   works instead of throwing a <strong><code><a href="dom.constants.php#constant.dom-hierarchy-request-err">DOM_HIERARCHY_REQUEST_ERR</a></code></strong>
   <span class="classname"><a href="class.domexception.php" class="classname">DOMException</a></span>.
   This is in line with the behaviour demanded by the DOM specification.
  </p>

  <p class="para">
   Calling <span class="methodname"><a href="domdocument.createattributens.php" class="methodname">DOMDocument::createAttributeNS()</a></span> without specifying
   a prefix would incorrectly create a default namespace, placing the element
   inside the namespace instead of the attribute. This bug is now fixed.
  </p>

  <p class="para">
   <span class="methodname"><a href="domdocument.createattributens.php" class="methodname">DOMDocument::createAttributeNS()</a></span> would previously
   incorrectly throw a <strong><code>DOM_NAMESPACE_ERRNAMESPACE_ERR</code></strong>
   <span class="classname"><a href="class.domexception.php" class="classname">DOMException</a></span> when the prefix was already used for a
   different URI. It now correctly chooses a different prefix when there&#039;s a
   prefix name conflict.
  </p>

  <p class="para">
   New methods and properties were added to some DOM classes.
   If a userland class inherits from these classes and declare a method or property
   with the same name, the declarations must be compatible. Otherwise, a typical
   compile error about incompatible declarations will be thrown.
   See the <a href="migration83.new-features.php#migration83.new-features.dom" class="link">list of new features</a>
   and <a href="migration83.new-functions.php#migration83.new-functions.dom" class="link">new functions</a> for
   a list of the newly implemented methods and properties.
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.ffi">
  <h3 class="title">FFI</h3>

  <p class="para">
   C functions that have a return type of <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> now return <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> instead of
   returning the following object <code class="literal">object(FFI\CData:void) { }</code>
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.opcache">
  <h3 class="title">Opcache</h3>

  <p class="para">
   The <a href="opcache.configuration.php#ini.opcache.consistency-checks" class="link">opcache.consistency_checks</a>
   INI directive was removed. This feature was broken with the tracing JIT,
   as well as with inheritance cache, and has been disabled without a way to
   enable it since PHP 8.1.18 and PHP 8.2.5.
   Both the tracing JIT and inheritance cache may modify shm after the script
   has been persisted by invalidating its checksum. The attempted fix skipped
   over the modifiable pointers but was rejected due to complexity. For this
   reason, it was decided to remove the feature instead.
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.phar">
  <h3 class="title">Phar</h3>

  <p class="para">
   The type of <span class="classname"><a href="class.phar.php" class="classname">Phar</a></span> class constants are now declared.
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.standard">
  <h3 class="title">Standard</h3>

  <p class="para">
   The <span class="function"><a href="function.range.php" class="function">range()</a></span> function has had various changes:
   <ul class="simplelist">
    <li>A <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> is now thrown when passing <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s,
    <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s, or <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s as the boundary inputs.</li>
    <li>A more descriptive <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown when
    passing <code class="literal">0</code> for <code class="parameter">$step</code>.</li>
    <li>A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is now thrown when using a
    negative <code class="parameter">$step</code> for increasing ranges.</li>
    <li>If <code class="parameter">$step</code> is a float that can be interpreted
    as an int, it is now done so.</li>
    <li>A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is now thrown if any argument
    is infinity or NAN.</li>
    <li>An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
    <code class="parameter">$start</code> or <code class="parameter">$end</code> is the empty
    string. The value continues to be cast to the value <code class="literal">0</code>.</li>
    <li>An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
    <code class="parameter">$start</code> or <code class="parameter">$end</code> has more than
    one byte, only if it is a non-numeric string.</li>
    <li>An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
    <code class="parameter">$start</code> or <code class="parameter">$end</code> is cast to an
    integer because the other boundary input is a number.
    (e.g. <code class="code">range(5, &#039;z&#039;);</code>).</li>
    <li>An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
    <code class="parameter">$step</code> is a float when trying to generate a range of
    characters, except if both boundary inputs are numeric strings (e.g.
    <code class="code">range(&#039;5&#039;, &#039;9&#039;, 0.5);</code> does not produce a warning).</li>
    <li><span class="function"><a href="function.range.php" class="function">range()</a></span> now produce a list of characters if one
    of the boundary inputs is a string digit instead of casting the other input
    to int (e.g. <code class="code">range(&#039;9&#039;, &#039;A&#039;);</code>).</li>
   </ul>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />range</span><span style="color: #007700">(</span><span style="color: #DD0000">'9'</span><span style="color: #007700">, </span><span style="color: #DD0000">'A'</span><span style="color: #007700">);  </span><span style="color: #FF8000">// ["9", ":", ";", "&lt;", "=", "&gt;", "?", "@", "A"], as of PHP 8.3.0<br /></span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #DD0000">'9'</span><span style="color: #007700">, </span><span style="color: #DD0000">'A'</span><span style="color: #007700">);  </span><span style="color: #FF8000">// [9, 8, 7, 6, 5, 4, 3, 2, 1, 0], prior to PHP 8.3.0<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <span class="function"><a href="function.number-format.php" class="function">number_format()</a></span> now handles negative
   <code class="parameter">$decimals</code> values by rounding
   <code class="parameter">$num</code> to <code class="code">abs($decimals)</code> digits before the
   decimal point. Previously, negative <code class="parameter">$decimals</code> values
   were ignored.
  </p>

  <p class="para">
   The <span class="function"><a href="function.file.php" class="function">file()</a></span> flags error check now catches all invalid flags.
   Notably <strong><code><a href="filesystem.constants.php#constant.file-append">FILE_APPEND</a></code></strong> was previously silently accepted.
  </p>
 </div>

 <div class="sect2" id="migration83.incompatible.SNMP">
  <h3 class="title">SNMP</h3>

  <p class="para">
   The type of <span class="classname"><a href="class.snmp.php" class="classname">SNMP</a></span> class constants are now declared.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration83/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration83.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration83.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration83.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration83.php">Migrating from PHP 8.2.x to PHP 8.3.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration83.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration83.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration83.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration83.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration83.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration83.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration83.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration83.windows-support.php" title="Windows Support">Windows Support</a>
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
