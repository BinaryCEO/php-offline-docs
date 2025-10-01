<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Using PHP and DTrace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.dtrace.dtrace.php">
 <link rel="shorturl" href="https://www.php.net/dtrace.dtrace">
 <link rel="alternate" href="https://www.php.net/dtrace.dtrace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.dtrace.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.dtrace.introduction.php">
 <link rel="next" href="https://www.php.net/manual/en/features.dtrace.systemtap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.dtrace.dtrace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.dtrace.dtrace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.dtrace.dtrace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.dtrace.dtrace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.dtrace.dtrace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.dtrace.dtrace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.dtrace.dtrace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.dtrace.dtrace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.dtrace.dtrace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.dtrace.dtrace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.dtrace.dtrace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using PHP and DTrace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Using PHP and DTrace - Manual" />
<meta name="twitter:description" content="Using PHP and DTrace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Using PHP and DTrace - Manual" />
<meta itemprop="description" content="Using PHP and DTrace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using PHP and DTrace" />

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
        <a href="features.dtrace.systemtap.php">
          Using SystemTap with PHP DTrace Static Probes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.dtrace.introduction.php">
          &laquo; Introduction to PHP and DTrace        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.dtrace.php'>DTrace Dynamic Tracing</a></li>      </ul>
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
            <option value='en/features.dtrace.dtrace.php' selected="selected">English</option>
            <option value='de/features.dtrace.dtrace.php'>German</option>
            <option value='es/features.dtrace.dtrace.php'>Spanish</option>
            <option value='fr/features.dtrace.dtrace.php'>French</option>
            <option value='it/features.dtrace.dtrace.php'>Italian</option>
            <option value='ja/features.dtrace.dtrace.php'>Japanese</option>
            <option value='pt_BR/features.dtrace.dtrace.php'>Brazilian Portuguese</option>
            <option value='ru/features.dtrace.dtrace.php'>Russian</option>
            <option value='tr/features.dtrace.dtrace.php'>Turkish</option>
            <option value='uk/features.dtrace.dtrace.php'>Ukrainian</option>
            <option value='zh/features.dtrace.dtrace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.dtrace.dtrace" class="sect1">
  <h2 class="title">Using PHP and DTrace</h2>
  <p class="para">
   PHP can be configured with DTrace static probes on platforms that
   support DTrace Dynamic Tracing.
  </p>

  <div class="sect2" id="features.dtrace.install">
   <h3 class="title">Configuring PHP for DTrace Static Probes</h3>

   <p class="para">
    Refer to external platform specific documentation for enabling
    operating system DTrace support.  For example, on Oracle Linux
    boot a UEK3 kernel and do:

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"># modprobe fasttrap<br /># chmod 666 /dev/dtrace/helper</span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Instead of using <code class="literal">chmod</code>, you could instead use an
    ACL package rule to limit device access to a specific user.
   </p>

   <p class="para">
    Build PHP with the <code class="literal">--enable-dtrace</code> configuration parameter:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"># ./configure --enable-dtrace ...<br /># make<br /># make install</span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    This makes the static probes available in core PHP.  Any PHP extensions
    that provide their own probes should be built separately as shared
    extensions.
   </p>
   <p class="para">
    To enable probes, set <strong class="option unknown">USE_ZEND_DTRACE=1</strong> environment variable to the target PHP processes.
   </p>
  </div>

  <div class="sect2" id="features.dtrace.static-probes">
  <h3 class="title">DTrace Static Probes in Core PHP</h3>
  <table class="doctable table">
   <caption><strong>The following static probes are available in PHP</strong></caption>
   
    <thead>
     <tr>
      <th>Probe Name</th>
      <th>Probe Description</th>
      <th>Probe Arguments</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">request-startup</code></td>
      <td>Fires when a request starts.</td>
      <td>char *<var class="varname">file</var>, char *<var class="varname">request_uri</var>, char *<var class="varname">request_method</var></td>
     </tr>

     <tr>
      <td><code class="literal">request-shutdown</code></td>
      <td>Fires when a request shutdown.</td>
      <td>char *<var class="varname">file</var>, char *<var class="varname">request_uri</var>, char *<var class="varname">request_method</var></td>
     </tr>

     <tr>
      <td><code class="literal">compile-file-entry</code></td>
      <td>Fires when the compilation of a script starts.</td>
      <td>char *<var class="varname">compile_file</var>, char *<var class="varname">compile_file_translated</var></td>
     </tr>

     <tr>
      <td><code class="literal">compile-file-return</code></td>
      <td>Fires when the compilation of a script finishes.</td>
      <td>char *<var class="varname">compile_file</var>, char *<var class="varname">compile_file_translated</var></td>
     </tr>

     <tr>
      <td><code class="literal">execute-entry</code></td>
      <td>Fires when an opcode array is to be executed.  For
      example, it fires on function calls, includes, and generator
      resumes.</td>
      <td>char *<var class="varname">request_file</var>, int <var class="varname">lineno</var></td>
     </tr>

     <tr>
      <td><code class="literal">execute-return</code></td>
      <td>Fires after execution of an opcode array.</td>
      <td>char *<var class="varname">request_file</var>, int <var class="varname">lineno</var></td>
     </tr>

     <tr>
      <td><code class="literal">function-entry</code></td>
      <td>Fires when the PHP engine enters a PHP function or method call.</td>
      <td>char *<var class="varname">function_name</var>, char *<var class="varname">request_file</var>, int <var class="varname">lineno</var>, char *<var class="varname">classname</var>, char *<var class="varname">scope</var></td>
     </tr>

     <tr>
      <td><code class="literal">function-return</code></td>
      <td>Fires when the PHP engine returns from a PHP function or method call.</td>
      <td>char *<var class="varname">function_name</var>, char *<var class="varname">request_file</var>, int <var class="varname">lineno</var>, char *<var class="varname">classname</var>, char *<var class="varname">scope</var></td>
     </tr>

     <tr>
      <td><code class="literal">exception-thrown</code></td>
      <td>Fires when an exception is thrown.</td>
      <td>char *<var class="varname">classname</var></td>
     </tr>

     <tr>
      <td><code class="literal">exception-caught</code></td>
      <td>Fires when an exception is caught.</td>
      <td>char *<var class="varname">classname</var></td>
     </tr>

     <tr>
      <td><code class="literal">error</code></td>
      <td>Fires when an error occurs, regardless of the <a href="errorfunc.configuration.php#ini.error-reporting" class="link">error_reporting</a> level.</td>
      <td>char *<var class="varname">errormsg</var>, char *<var class="varname">request_file</var>, int <var class="varname">lineno</var></td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   PHP extensions may also have additional static probes.
  </p>
  </div>

  <div class="sect2" id="features.dtrace.list-probes">
   <h3 class="title">Listing DTrace Static Probes in PHP</h3>
   <p class="para">
    To list available probes, start a PHP process and then run:
    <div class="informalexample">
     <div class="example-contents">
<div class="cdata"><pre>
# dtrace -l
</pre></div>
     </div>

    </div>
   </p>

   <p class="para">
    The output will be similar to:
    <div class="informalexample">
     <div class="example-contents">
<div class="cdata"><pre>
   ID   PROVIDER            MODULE                          FUNCTION NAME
   [ . . . ]
    4   php15271               php               dtrace_compile_file compile-file-entry
    5   php15271               php               dtrace_compile_file compile-file-return
    6   php15271               php                        zend_error error
    7   php15271               php  ZEND_CATCH_SPEC_CONST_CV_HANDLER exception-caught
    8   php15271               php     zend_throw_exception_internal exception-thrown
    9   php15271               php                 dtrace_execute_ex execute-entry
   10   php15271               php           dtrace_execute_internal execute-entry
   11   php15271               php                 dtrace_execute_ex execute-return
   12   php15271               php           dtrace_execute_internal execute-return
   13   php15271               php                 dtrace_execute_ex function-entry
   14   php15271               php                 dtrace_execute_ex function-return
   15   php15271               php              php_request_shutdown request-shutdown
   16   php15271               php               php_request_startup request-startup
</pre></div>
     </div>

    </div>
   </p>

   <p class="para">
    The Provider column values consist of <code class="literal">php</code> and
    the process id of the currently running PHP process.
   </p>

   <p class="para">
    If the Apache web server is running, the module name might be, for
    example, <var class="filename">libphp5.so</var>, and there would be
    multiple blocks of listings, one per running Apache process.
   </p>

   <p class="para">
    The Function column refers to PHP&#039;s internal C implementation
    function names where each provider is located.
   </p>

   <p class="para">
    If a PHP process is not running, then no PHP probes will be shown.
   </p>
  </div>

  <div class="sect2" id="features.dtrace.examples">
   <h3 class="title">DTrace with PHP Example</h3>
   <p class="para">
    This example shows the basics of the DTrace D scripting language.
    <div class="example" id="example-579">
     <p><strong>Example #1 <var class="filename">all_probes.d</var> for tracing all PHP Static Probes with DTrace</strong></p>
     <div class="example-contents">
<div class="cdata"><pre>
#!/usr/sbin/dtrace -Zs

#pragma D option quiet

php*:::compile-file-entry
{
    printf(&quot;PHP compile-file-entry\n&quot;);
    printf(&quot;  compile_file              %s\n&quot;, copyinstr(arg0));
    printf(&quot;  compile_file_translated   %s\n&quot;, copyinstr(arg1));
}

php*:::compile-file-return
{
    printf(&quot;PHP compile-file-return\n&quot;);
    printf(&quot;  compile_file              %s\n&quot;, copyinstr(arg0));
    printf(&quot;  compile_file_translated   %s\n&quot;, copyinstr(arg1));
}

php*:::error
{
    printf(&quot;PHP error\n&quot;);
    printf(&quot;  errormsg                  %s\n&quot;, copyinstr(arg0));
    printf(&quot;  request_file              %s\n&quot;, copyinstr(arg1));
    printf(&quot;  lineno                    %d\n&quot;, (int)arg2);
}

php*:::exception-caught
{
    printf(&quot;PHP exception-caught\n&quot;);
    printf(&quot;  classname                 %s\n&quot;, copyinstr(arg0));
}

php*:::exception-thrown
{
    printf(&quot;PHP exception-thrown\n&quot;);
    printf(&quot;  classname                 %s\n&quot;, copyinstr(arg0));
}

php*:::execute-entry
{
    printf(&quot;PHP execute-entry\n&quot;);
    printf(&quot;  request_file              %s\n&quot;, copyinstr(arg0));
    printf(&quot;  lineno                    %d\n&quot;, (int)arg1);
}

php*:::execute-return
{
    printf(&quot;PHP execute-return\n&quot;);
    printf(&quot;  request_file              %s\n&quot;, copyinstr(arg0));
    printf(&quot;  lineno                    %d\n&quot;, (int)arg1);
}

php*:::function-entry
{
    printf(&quot;PHP function-entry\n&quot;);
    printf(&quot;  function_name             %s\n&quot;, copyinstr(arg0));
    printf(&quot;  request_file              %s\n&quot;, copyinstr(arg1));
    printf(&quot;  lineno                    %d\n&quot;, (int)arg2);
    printf(&quot;  classname                 %s\n&quot;, copyinstr(arg3));
    printf(&quot;  scope                     %s\n&quot;, copyinstr(arg4));
}

php*:::function-return
{
    printf(&quot;PHP function-return\n&quot;);
    printf(&quot;  function_name             %s\n&quot;, copyinstr(arg0));
    printf(&quot;  request_file              %s\n&quot;, copyinstr(arg1));
    printf(&quot;  lineno                    %d\n&quot;, (int)arg2);
    printf(&quot;  classname                 %s\n&quot;, copyinstr(arg3));
    printf(&quot;  scope                     %s\n&quot;, copyinstr(arg4));
}

php*:::request-shutdown
{
    printf(&quot;PHP request-shutdown\n&quot;);
    printf(&quot;  file                      %s\n&quot;, copyinstr(arg0));
    printf(&quot;  request_uri               %s\n&quot;, copyinstr(arg1));
    printf(&quot;  request_method            %s\n&quot;, copyinstr(arg2));
}

php*:::request-startup
{
    printf(&quot;PHP request-startup\n&quot;);
    printf(&quot;  file                      %s\n&quot;, copyinstr(arg0));
    printf(&quot;  request_uri               %s\n&quot;, copyinstr(arg1));
    printf(&quot;  request_method            %s\n&quot;, copyinstr(arg2));
}
</pre></div>
     </div>

    </div>
   </p>

   <p class="para">
    This script uses the <code class="literal">-Z</code> option to
    <var class="filename">dtrace</var>, allowing it to be run when there is no
    PHP process executing.  If this option were omitted the script
    would immediately terminate because it knows none of the probes to
    be monitored are in existence.
   </p>

   <p class="para">
    The script traces all core PHP static probe points throughout the
    duration of a running PHP script. Run the D script:
    <div class="informalexample">
     <div class="example-contents">
<div class="cdata"><pre>
# ./all_probes.d
</pre></div>
     </div>

    </div>
   </p>

   <p class="para">
    Run a PHP script or application.  The monitoring D script will
    output each probe&#039;s arguments as it fires.
   </p>

   <p class="para">
    When monitoring is complete, the D script can be terminated with a
    <kbd class="keycombo"><kbd class="keycap">CTRL</kbd>+<kbd class="keycap">C</kbd></kbd>.
   </p>

   <p class="para">
    On multi-CPU machines the probe ordering might not appear to be
    sequential. This depends on which CPU was processing the probes,
    and how threads migrate across CPUs.  Displaying probe time stamps
    will help reduce confusion, for example:
    <div class="informalexample">
     <div class="example-contents">
<div class="cdata"><pre>
php*:::function-entry
{
      printf(&quot;%lld: PHP function-entry &quot;, walltimestamp);
      [ . . .]
}
</pre></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect2" id="features.dtrace.references">
   <h3 class="title">See Also</h3>
   <ul class="simplelist">
    <li><a href="oci8.dtrace.php" class="link">OCI8 and DTrace Dynamic Tracing</a></li>
   </ul>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/dtrace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.dtrace.dtrace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.dtrace.dtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.dtrace.dtrace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.dtrace.php">DTrace Dynamic Tracing</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.dtrace.introduction.php" title="Introduction to PHP and DTrace">Introduction to PHP and DTrace</a>
                        </li>
                                                <li class="current">
                            <a href="features.dtrace.dtrace.php" title="Using PHP and DTrace">Using PHP and DTrace</a>
                        </li>
                                                <li class="">
                            <a href="features.dtrace.systemtap.php" title="Using SystemTap with PHP DTrace Static Probes">Using SystemTap with PHP DTrace Static Probes</a>
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
