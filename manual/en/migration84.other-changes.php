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

 <link rel="canonical" href="https://www.php.net/manual/en/migration84.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration84.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration84.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration84.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration84.removed-extensions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration84.windows-support.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration84.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration84.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration84.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration84.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration84.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration84.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration84.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration84.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration84.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration84.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration84.other-changes.php" hreflang="zh">

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
        <a href="migration84.windows-support.php">
          Windows Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration84.removed-extensions.php">
          &laquo; Removed Extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration84.php'>Migrating from PHP 8.3.x to PHP 8.4.x</a></li>      </ul>
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
            <option value='en/migration84.other-changes.php' selected="selected">English</option>
            <option value='de/migration84.other-changes.php'>German</option>
            <option value='es/migration84.other-changes.php'>Spanish</option>
            <option value='fr/migration84.other-changes.php'>French</option>
            <option value='it/migration84.other-changes.php'>Italian</option>
            <option value='ja/migration84.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration84.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration84.other-changes.php'>Russian</option>
            <option value='tr/migration84.other-changes.php'>Turkish</option>
            <option value='uk/migration84.other-changes.php'>Ukrainian</option>
            <option value='zh/migration84.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration84.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration84.other-changes.core">
  <h3 class="title">Core changes</h3>

  <div class="sect3" id="migration84.other-changes.core.closures">
   <h4 class="title">Closures</h4>

   <p class="simpara">
    Closure names have been adjusted to include the parent function&#039;s name
    and the line of definition to make them easier to distinguish, for example
    within stack traces.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.core.fibers">
   <h4 class="title">Fibers</h4>

   <p class="simpara">
    Fiber switching during destructor execution is now allowed. It was previously
    blocked due to conflicts with garbage collection.
   </p>

   <p class="simpara">
    Destructors may now be executed in a separate Fiber:
   </p>

   <p class="simpara">
    When garbage collection is triggered in a Fiber,
    destructors called by the GC are executed in a separate Fiber:
    the gc_destructor_fiber.
    If this Fiber suspends, a new one is created to execute the remaining
    destructors.
    The previous gc_destructor_fiber is not referenced anymore by the GC
    and may be collected if it&#039;s not referenced anywhere else.
    Objects whose destructor is suspended will not be collected until the
    destructor returns or the <span class="classname"><a href="class.fiber.php" class="classname">Fiber</a></span> is collected.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.core.output">
   <h4 class="title">Output Handlers</h4>

   <p class="simpara">
    Output handler status flags passed to the <code class="parameter">flags</code>
    parameter of <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span> are now cleared.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.output-add-rewrite-var.php" class="function">output_add_rewrite_var()</a></span> now uses
    <a href="outcontrol.configuration.php#ini.url-rewriter.hosts" class="link"><code class="literal">url_rewriter.hosts</code></a>
    instead of
    <a href="session.configuration.php#ini.session.trans-sid-hosts" class="link"><code class="literal">session.trans_sid_hosts</code></a>
    for selecting hosts that will be rewritten.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.other-changes.sapi">
  <h3 class="title">Changes in SAPI Modules</h3>

  <div class="sect3" id="migration84.other-changes.sapi.apache">
   <h4 class="title">apache2handler</h4>

   <p class="simpara">
    Support for EOL Apache 2.0 and 2.2 has been removed.
    Minimum required Apache version is now 2.4.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.sapi.cli">
   <h4 class="title">CLI</h4>

   <p class="simpara">
    The builtin server looks for an index file recursively by traversing parent
    directories in case the specified file cannot be located.
    This process was previously skipped if the path looked like it was
    referring to a file, i.e. if the last path component contained a period.
    In that case, a 404 error was returned.
    The behavior has been changed to look for an index file in all cases.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.sapi.fpm">
   <h4 class="title">FPM</h4>

   <p class="simpara">
    Flushing headers without a body will now succeed.
    
   </p>

   <p class="simpara">
    Status page has a new field to display a memory peak.
   </p>

   <p class="simpara">
    
    The <var class="filename">/dev/poll</var> <code class="literal">events.mechanism</code>
    setting for Solaris/Illumos had been retired.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.other-changes.functions">
  <h3 class="title">Changed Functions</h3>

  <div class="sect3" id="migration84.other-changes.functions.core">
   <h4 class="title">Core</h4>

   <p class="simpara">
    <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span> and <span class="function"><a href="function.user-error.php" class="function">user_error()</a></span>
    now have a return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> instead of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.dom">
   <h4 class="title">DOM</h4>

   <p class="simpara">
    <span class="methodname"><a href="domdocument.registernodeclass.php" class="methodname">DOMDocument::registerNodeClass()</a></span>
    now has a tentative return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> instead of
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
    It could only ever return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> in practice.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.hash">
   <h4 class="title">Hash</h4>

   <p class="simpara">
    <span class="function"><a href="function.hash-update.php" class="function">hash_update()</a></span>
    now has a tentative return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> instead of
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
    It could only ever return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> in practice.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.intl">
   <h4 class="title">Intl</h4>

   <p class="simpara">
    <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-toward-zero">NumberFormatter::ROUND_TOWARD_ZERO</a></code></strong> and
    <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-away-from-zero">NumberFormatter::ROUND_AWAY_FROM_ZERO</a></code></strong>
    have been added as aliases for
    <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-down">NumberFormatter::ROUND_DOWN</a></code></strong> and
    <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-up">NumberFormatter::ROUND_UP</a></code></strong>
    to be consistent with the new
    <strong><code><a href="math.constants.php#constant.php-round-half-up">PHP_ROUND_<span class="replaceable">*</span></a></code></strong> modes.
   </p>

   <p class="simpara">
    <span class="methodname"><a href="resourcebundle.get.php" class="methodname">ResourceBundle::get()</a></span>
    
    now has a tentative return type of <code class="literal">ResourceBundle|array|string|int|null</code>.
   </p>

   <p class="simpara">
    The <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span> and <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span>
    functions now always throw <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>s
    if the <code class="parameter">domain</code> name is empty or too long.
   </p>

   <p class="simpara">
    The <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span> and <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span>
    functions now always throw <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>
    if the <code class="parameter">variant</code> parameter is not
    <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.libxml">
   <h4 class="title">LibXML</h4>

   <p class="simpara">
    <span class="function"><a href="function.libxml-set-streams-context.php" class="function">libxml_set_streams_context()</a></span> now immediately throws a
    <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> when a non-stream-context
    resource is passed to the function,
    instead of throwing later when the stream context is used.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.mbstring">
   <h4 class="title">MBString</h4>

   <p class="simpara">
    The behavior of <span class="function"><a href="function.mb-strcut.php" class="function">mb_strcut()</a></span> is more consistent
    now on invalid UTF-8 and UTF-16 strings.
    There is no behavioural change for valid UTF-8 and UTF-16 strings.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.odbc">
   <h4 class="title">ODBC</h4>

   <p class="simpara">
    The <code class="parameter">row</code> of
    <span class="function"><a href="function.odbc-fetch-object.php" class="function">odbc_fetch_object()</a></span>,
    <span class="function"><a href="function.odbc-fetch-array.php" class="function">odbc_fetch_array()</a></span>, and
    <span class="function"><a href="function.odbc-fetch-into.php" class="function">odbc_fetch_into()</a></span> now have a default value of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
    consistent with <span class="function"><a href="function.odbc-fetch-row.php" class="function">odbc_fetch_row()</a></span>.
    Previously, the default values were
    <code class="literal">-1</code>,
    <code class="literal">-1</code>,
    and <code class="literal">0</code>,
    respectively.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.openssl">
   <h4 class="title">OpenSSL</h4>

   <p class="simpara">
    The <code class="parameter">extra_attributes</code> in
    <span class="function"><a href="function.openssl-csr-new.php" class="function">openssl_csr_new()</a></span> sets the <abbr title="Certificate Signing Request">CSR</abbr>
    attributes instead of subject DN, which incorrectly done previously.
   </p>

   <p class="simpara">
    The <code class="parameter">dn</code> in
    <span class="function"><a href="function.openssl-csr-new.php" class="function">openssl_csr_new()</a></span> allows setting an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
    of values for a single entry.
   </p>

   <p class="simpara">
    New <code class="parameter">serial_hex</code> added to
    <span class="function"><a href="function.openssl-csr-sign.php" class="function">openssl_csr_sign()</a></span> to allow setting serial numbers
    in the hexadecimal format.
   </p>

   <p class="simpara">
    Parsing ASN.1 UTCTime with <span class="function"><a href="function.openssl-x509-parse.php" class="function">openssl_x509_parse()</a></span>
    fails if seconds are omitted for OpenSSL version below 3.2
    (<code class="literal">-1</code> is returned for such fields).
    OpenSSL version above 3.3 did not load such certificates already.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.pdo">
   <h4 class="title">PDO</h4>

   <p class="simpara">
    It is now possible to fetch the value of the
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong> attribute with
    <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span>.
   </p>

   <p class="simpara">
    A new <strong><code>PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE</code></strong>
    has been added to retrieve the memory usage of query results with
    <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span> for drivers that support it.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.pdo-firebird">
   <h4 class="title">PDO_FIREBIRD</h4>

   <p class="simpara">
    It is now possible to fetch the value of the
    
    <strong><code>FB_ATTR_DATE_FORMAT</code></strong>,
    <strong><code>FB_ATTR_TIME_FORMAT</code></strong>,
    <strong><code>FB_ATTR_TIMESTAMP_FORMAT</code></strong>,
    attributes with
    
    <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span>.
   </p>

   <p class="para">
    Added new attributes to specify transaction isolation level and access mode.
    Five constants relating to this functionality have been added:

    <ul class="simplelist">
     <li><strong><code><a href="class.pdo-firebird.php#pdo-firebird.constants.transaction-isolation-level">Pdo\Firebird::TRANSACTION_ISOLATION_LEVEL</a></code></strong></li>
     <li><strong><code><a href="class.pdo-firebird.php#pdo-firebird.constants.read-committed">Pdo\Firebird::READ_COMMITTED</a></code></strong></li>
     <li><strong><code><a href="class.pdo-firebird.php#pdo-firebird.constants.repeatable-read">Pdo\Firebird::REPEATABLE_READ</a></code></strong></li>
     <li><strong><code><a href="class.pdo-firebird.php#pdo-firebird.constants.serializable">Pdo\Firebird::SERIALIZABLE</a></code></strong></li>
     <li><strong><code><a href="class.pdo-firebird.php#pdo-firebird.constants.writable-transaction">Pdo\Firebird::WRITABLE_TRANSACTION</a></code></strong></li>
    </ul>
   </p>

   <p class="simpara">
    When using persistent connections, there is now a liveliness check in the
    constructor.
   </p>

   <p class="simpara">
    The content that is built changes depending on the value of
    <strong><code>FB_API_VER</code></strong> in
    <var class="filename">ibase.h</var>.
    A new static method <span class="methodname"><a href="pdo-firebird.getapiversion.php" class="methodname">Pdo\Firebird::getApiVersion()</a></span>
    can be used to obtain this information.
    This information is also now referenced in <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>.
   </p>

   <p class="para">
    Five new data types are now available:
    <span class="simplelist"><code class="literal">INT128</code>, <code class="literal">DEC16</code>, <code class="literal">DEC34</code>, <code class="literal">TIMESTAMP_TZ</code>, <code class="literal">TIME_TZ</code></span>
    .
    These are available starting with Firebird 4.0.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.pdo-mysql">
   <h4 class="title">PDO_MYSQL</h4>

   <p class="simpara">
    It is now possible to fetch the value of the
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-fetch-table-names">PDO::ATTR_FETCH_TABLE_NAMES</a></code></strong> attribute with
    
    <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.pdo-pgsql">
   <h4 class="title">PDO_PGSQL</h4>

   <p class="simpara">
    Support retrieving the memory usage of queries for
    <strong><code>PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE</code></strong>.
   </p>

   <p class="simpara">
    If the column is of type <code class="literal">FLOAT4OID</code> or
    <code class="literal">FLOAT8OID</code> the value will now be returned as a
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> instead of a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.pgsql">
   <h4 class="title">PGSQL</h4>

   <p class="simpara">
    The <code class="parameter">conditions</code> parameter of
    <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span> is now optional and accepts an empty array.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.phar">
   <h4 class="title">Phar</h4>

   <p class="para">
    The
    <span class="simplelist"><span class="methodname"><a href="phar.setalias.php" class="methodname">Phar::setAlias()</a></span>, <span class="methodname"><a href="phar.setdefaultstub.php" class="methodname">Phar::setDefaultStub()</a></span></span>
    methods now have a tentative return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>
    instead of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.posix">
   <h4 class="title">POSIX</h4>

   <p class="simpara">
    <span class="function"><a href="function.posix-isatty.php" class="function">posix_isatty()</a></span> now sets the error number when the
    file descriptor/stream argument is invalid.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.reflection">
   <h4 class="title">Reflection</h4>

   <p class="simpara">
    <span class="methodname"><a href="reflectiongenerator.getfunction.php" class="methodname">ReflectionGenerator::getFunction()</a></span>
    may now be called after the generator finished executing.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.sockets">
   <h4 class="title">Sockets</h4>

   <p class="simpara">
    The <code class="parameter">backlog</code> parameter of
    <span class="function"><a href="function.socket-create-listen.php" class="function">socket_create_listen()</a></span> now has a default value of
    <strong><code><a href="sockets.constants.php#constant.somaxconn">SOMAXCONN</a></code></strong>.
    Previously, it was <code class="literal">128</code>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.sodium">
   <h4 class="title">Sodium</h4>

   <p class="simpara">
    The <span class="function"><strong>sodium_crypto_aead_aes256gcm_()</strong><span class="replaceable">*</span></span>
    functions are now available on aarch64 CPUs with the ARM cryptographic
    extensions.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.spl">
   <h4 class="title">SPL</h4>

   <p class="para">
    The
    <span class="simplelist"><span class="methodname"><a href="splpriorityqueue.insert.php" class="methodname">SplPriorityQueue::insert()</a></span>, <span class="methodname"><a href="splpriorityqueue.recoverfromcorruption.php" class="methodname">SplPriorityQueue::recoverFromCorruption()</a></span>, <span class="methodname"><a href="splheap.insert.php" class="methodname">SplHeap::insert()</a></span>, <span class="methodname"><a href="splheap.recoverfromcorruption.php" class="methodname">SplHeap::recoverFromCorruption()</a></span></span>
    methods now have a tentative return type of <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>
    instead of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
   </p>

   <p class="simpara">
    <span class="classname"><a href="class.splobjectstorage.php" class="classname">SplObjectStorage</a></span> now implements
    <span class="interfacename"><a href="class.seekableiterator.php" class="interfacename">SeekableIterator</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.functions.standard">
   <h4 class="title">Standard</h4>

   <p class="simpara">

    The default <code class="literal">&#039;cost&#039;</code> value for the <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong>
    hashing algorithm for <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> has been increased from
    <code class="literal">10</code> to <code class="literal">12</code>.
    
   </p>

   <p class="simpara">
    <span class="function"><a href="function.debug-zval-dump.php" class="function">debug_zval_dump()</a></span> now indicates whether an array is packed.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.long2ip.php" class="function">long2ip()</a></span> now has a return type of <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    
    instead of <code class="literal">string|false</code>.
   </p>

   <p class="simpara">
    
    <span class="function"><a href="function.highlight-string.php" class="function">highlight_string()</a></span> now has a return type of
    <span class="type">string|true</span> instead of <code class="literal">string|bool</code>.
   </p>

   <p class="simpara">
    
    <span class="function"><a href="function.print-r.php" class="function">print_r()</a></span> now has a return type of
    <span class="type">string|true</span> instead of <code class="literal">string|bool</code>.
   </p>

   
   <div class="sect4">
    <h5 class="title">Rounding with <span class="function"><a href="function.round.php" class="function">round()</a></span></h5>

    <p class="simpara">
     The <code class="parameter">mode</code> parameter of the
     <span class="function"><a href="function.round.php" class="function">round()</a></span> function has been widened to
     
     <code class="literal">RoundingMode|int</code>,
     
     accepting instances of a new <span class="classname"><a href="enum.roundingmode.php" class="classname">RoundingMode</a></span> enum.
     
    </p>

    <p class="para">
     Four new modes have been added to the <span class="function"><a href="function.round.php" class="function">round()</a></span> function:
     <span class="simplelist">RoundingMode::PositiveInfinity, RoundingMode::NegativeInfinity, RoundingMode::TowardsZero, RoundingMode::AwayFromZero</span>
     
    </p>

    <p class="simpara">
     The internal implementation for rounding to integers has been rewritten
     to be easier to verify for correctness and to be easier to maintain.
     Some rounding bugs have been fixed as a result of the rewrite.
     For example previously rounding <code class="literal">0.49999999999999994</code>
     to the nearest integer would have resulted in <code class="literal">1.0</code>
     instead of the correct result <code class="literal">0.0</code>.
     Additional inputs might also be affected and result in different outputs
     compared to earlier PHP versions.
    </p>

    <p class="simpara">
     Fixed a bug caused by &quot;pre-rounding&quot; of the <span class="function"><a href="function.round.php" class="function">round()</a></span> function.
     Previously, using &quot;pre-rounding&quot; to treat a value like <code class="literal">0.285</code>
     (actually <code class="literal">0.28499999999999998</code>) as a decimal number
     and round it to <code class="literal">0.29</code>.
     However, &quot;pre-rounding&quot; incorrectly rounds certain numbers,
     so this fix removes &quot;pre-rounding&quot; and changes the way numbers are compared,
     so that the values are correctly rounded as decimal numbers.
    </p>

    <p class="simpara">
     The maximum precision that can be handled by <span class="function"><a href="function.round.php" class="function">round()</a></span>
     has been extended by one digit.
     For example, <code class="code">round(4503599627370495.5)</code> returned in
     <code class="literal">4503599627370495.5</code>,
     but now returns <code class="literal">4503599627370496</code>.
    </p>

   </div>
  </div>

 </div>

 <div class="sect2" id="migration84.other-changes.extensions">
  <h3 class="title">Other Changes to Extensions</h3>

  <div class="sect3" id="migration84.other-changes.extensions.curl">
   <h4 class="title">cURL</h4>

   <p class="simpara">
    The minimum libcurl version required is now 7.61.0.
   </p>

   <p class="simpara">
    The <strong><code><a href="curl.constants.php#constant.curlopt-dns-use-global-cache">CURLOPT_DNS_USE_GLOBAL_CACHE</a></code></strong> option no longer
    has any effect, and is silently ignored.
    This underlying feature was deprecated in libcurl 7.11.1,
    and removed in libcurl 7.62.0.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.gmp">
   <h4 class="title">GMP</h4>

   
   <p class="simpara">
    Casting a <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span> object to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> is now
    possible instead of emitting a <strong><code><a href="errorfunc.constants.php#constant.e-recoverable-error">E_RECOVERABLE_ERROR</a></code></strong>.
    The casting behaviour is overloaded such that a <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span>
    object representing the value <code class="literal">0</code> is cast to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.libxml">
   <h4 class="title">LibXML</h4>

   <p class="simpara">
    The minimum libxml2 version required is now 2.9.4.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.intl">
   <h4 class="title">Intl</h4>

   <p class="simpara">
    The behaviour of Intl class has been normalized to always throw
    <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> exceptions when attempting to use
    a non-initialized object, or when cloning fails.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.mbstring">
   <h4 class="title">MBString</h4>

   <p class="simpara">
    Unicode data tables have been updated to Unicode 16.0.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.mysqlnd">
   <h4 class="title">MySQLnd</h4>

   <p class="simpara">
    Support for the new VECTOR data type from MySQL 9.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.openssl">
   <h4 class="title">OpenSSL</h4>

   <p class="simpara">
    The minimum OpenSSL version required is now 1.1.1.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.pdo-pgsql">
   <h4 class="title">PDO_PGSQL</h4>

   <p class="simpara">
    The minimum libpq version required is now 10.0.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.pgsql">
   <h4 class="title">PGSQL</h4>

   <p class="simpara">
    The minimum libpq version required is now 10.0.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.spl">
   <h4 class="title">SPL</h4>

   <p class="simpara">
    Out of bounds accesses in <span class="classname"><a href="class.splfixedarray.php" class="classname">SplFixedArray</a></span> now throw
    exceptions of type <span class="exceptionname"><a href="class.outofboundsexception.php" class="exceptionname">OutOfBoundsException</a></span>
    instead of <span class="exceptionname"><a href="class.runtimeexception.php" class="exceptionname">RuntimeException</a></span>.
    Because <span class="exceptionname"><a href="class.outofboundsexception.php" class="exceptionname">OutOfBoundsException</a></span> is a child
    class of <span class="exceptionname"><a href="class.runtimeexception.php" class="exceptionname">RuntimeException</a></span> no behavioural
    changes are exhibited when attempting to catch those exceptions.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.xsl">
   <h4 class="title">XSL</h4>

   <p class="simpara">
    The typed properties <span class="property"><a href="class.xsltprocessor.php#xsltprocessor.props.clonedocument">XSLTProcessor::$cloneDocument</a></span>
    and <span class="property"><a href="class.xsltprocessor.php#xsltprocessor.props.doxinclude">XSLTProcessor::$doXInclude</a></span> are now declared.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.extensions.zlib">
   <h4 class="title">Zlib</h4>

   <p class="simpara">
    The minimum zlib version required is now 1.2.11.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.other-changes.performance">
  <h3 class="title">Performance</h3>

  <div class="sect3" id="migration84.other-changes.performance.core">
   <h4 class="title">Core</h4>

   <p class="simpara">
    Improved the performance of floating point number parsing and formatting in
    ZTS builds under highly concurrent loads.
    This affects the <span class="function"><a href="function.printf.php" class="function">printf()</a></span> family of functions as well
    as serialization functions such as <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>,
    or <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span>.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span> using only <code class="literal">%s</code> and
    <code class="literal">%d</code> specifiers will be compiled into the equivalent
    string interpolation, avoiding the overhead of a function call and
    repeatedly parsing the format string.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.bcmath">
   <h4 class="title">BCMath</h4>

   <p class="simpara">
    Improved performance of number conversions and operations.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.dom">
   <h4 class="title">DOM</h4>

   <p class="simpara">
    The performance of <span class="methodname"><a href="domnode.c14n.php" class="methodname">DOMNode::C14N()</a></span> is greatly
    improved for the case without an xpath query.
    This can give a time improvement of easily two order of
    magnitude for documents with tens of thousands of nodes.
   </p>

   <p class="simpara">
    Improved performance and reduce memory consumption of XML serialization.
   </p>

   <p class="simpara">
    Reduced memory usage of node classes.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.ftp">
   <h4 class="title">FTP</h4>

   <p class="simpara">
    Improved the performance of FTP uploads up to a factor of 10x for large
    uploads.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.hash">
   <h4 class="title">Hash</h4>

   <p class="simpara">
    Added SSE2 and SHA-NI implementations of SHA-256.
    This improves the performance on supported CPUs by ~1.3x (SSE2),
    and 3x - 5x (SHA-NI).
    Credit to Colin Percival / Tarsnap for this optimization.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.mbstring">
   <h4 class="title">MBString</h4>

   <p class="simpara">
    <span class="function"><a href="function.mb-strcut.php" class="function">mb_strcut()</a></span> is much faster now for UTF-8
    and UTF-16 strings.
   </p>

   <p class="simpara">
    Looking up mbstring encoding names is much faster now.
   </p>

   <p class="simpara">
    The performance of converting SJIS-win to Unicode is greatly improved.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.mysqlnd">
   <h4 class="title">MySQLnd</h4>

   <p class="simpara">
    Improved the performance of MySQLnd quoting.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.pcre">
   <h4 class="title">PCRE</h4>

   <p class="simpara">
    Improved the performance of named capture groups.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.random">
   <h4 class="title">Random</h4>

   <p class="simpara">
    Improved the performance of <span class="classname"><a href="class.random-randomizer.php" class="classname">Random\Randomizer</a></span>,
    with a specific focus on the
    <span class="methodname"><a href="random-randomizer.getbytes.php" class="methodname">Random\Randomizer::getBytes()</a></span>,
    and <span class="methodname"><a href="random-randomizer.getbytesfromstring.php" class="methodname">Random\Randomizer::getBytesFromString()</a></span> methods.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.simplexml">
   <h4 class="title">SimpleXML</h4>

   <p class="simpara">
    Improved performance and reduce memory consumption of XML serialization.
   </p>
  </div>

  <div class="sect3" id="migration84.other-changes.performance.standard">
   <h4 class="title">Standard</h4>

   <p class="simpara">
    The performance of <span class="function"><a href="function.strspn.php" class="function">strspn()</a></span> and
    <span class="function"><a href="function.strcspn.php" class="function">strcspn()</a></span> is greatly improved.
    They now run in linear time instead of being bounded by quadratic time.
   </p>

   <p class="simpara">
    Improved the performance of <span class="function"><a href="function.strpbrk.php" class="function">strpbrk()</a></span>.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.get-browser.php" class="function">get_browser()</a></span> is much faster now,
    up to 1.5x - 2.5x for some test cases.
   </p>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration84/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration84.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration84.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration84.php">Migrating from PHP 8.3.x to PHP 8.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration84.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-classes.php" title="New Classes, Enums, and Interfaces">New Classes, Enums, and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration84.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="current">
                            <a href="migration84.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.windows-support.php" title="Windows Support">Windows Support</a>
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
