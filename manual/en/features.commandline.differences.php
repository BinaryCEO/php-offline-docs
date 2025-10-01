<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Differences to other SAPIs - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.differences.php">
 <link rel="shorturl" href="https://www.php.net/commandline.differences">
 <link rel="alternate" href="https://www.php.net/commandline.differences" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.options.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.differences.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.differences.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.differences.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.differences.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.differences.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.differences.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.differences.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.differences.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.differences.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.differences.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.differences.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Differences to other SAPIs" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Differences to other SAPIs - Manual" />
<meta name="twitter:description" content="Differences to other SAPIs" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Differences to other SAPIs - Manual" />
<meta itemprop="description" content="Differences to other SAPIs" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Differences to other SAPIs" />

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
        <a href="features.commandline.options.php">
          Options &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.php">
          &laquo; Command line usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.commandline.php'>Command line usage</a></li>      </ul>
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
            <option value='en/features.commandline.differences.php' selected="selected">English</option>
            <option value='de/features.commandline.differences.php'>German</option>
            <option value='es/features.commandline.differences.php'>Spanish</option>
            <option value='fr/features.commandline.differences.php'>French</option>
            <option value='it/features.commandline.differences.php'>Italian</option>
            <option value='ja/features.commandline.differences.php'>Japanese</option>
            <option value='pt_BR/features.commandline.differences.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.differences.php'>Russian</option>
            <option value='tr/features.commandline.differences.php'>Turkish</option>
            <option value='uk/features.commandline.differences.php'>Ukrainian</option>
            <option value='zh/features.commandline.differences.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.differences" class="section">
  <h2 class="title">Differences to other <abbr title="Server Application Programming Interface">SAPI</abbr>s</h2>
  
  <p class="para">
   Remarkable differences of the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> compared to other
   <abbr title="Server Application Programming Interface">SAPI</abbr>s:
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      Unlike the <abbr title="Common Gateway Interface">CGI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr>, no headers are
      written to the output.
     </p>
     <p class="para">
      Though the <abbr title="Common Gateway Interface">CGI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> provides a way
      to suppress HTTP headers, there&#039;s no equivalent switch to enable them in
      the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr>.
     </p>
     <p class="para">
      <abbr title="Command Line Interpreter/Interface">CLI</abbr> is started up in quiet mode by default, though the <strong class="option unknown">-q</strong>
      and <strong class="option unknown">--no-header</strong> switches are kept for compatibility so
      that it is possible to use older <abbr title="Common Gateway Interface">CGI</abbr> scripts.
     </p>
     <p class="para">
      It does not change the working directory to that of the script.
      (<strong class="option unknown">-C</strong> and <strong class="option unknown">--no-chdir</strong> switches kept for
      compatibility)
     </p>
     <p class="para">
      Plain text error messages (no <abbr title="Hyper Text Markup Language">HTML</abbr> formatting).
     </p>
    </li>
    
    <li class="listitem">
     <p class="para">
      There are certain <var class="filename">php.ini</var> directives which are overridden by the
      <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> because they do not make sense in shell environments:
     </p>
     <p class="para">
      <table class="doctable table">
       <caption><strong>Overridden <var class="filename">php.ini</var> directives</strong></caption>
       
        <thead>
         <tr>
          <th>Directive</th>
          <th><abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> default value</th>
          <th>Comment</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><a href="errorfunc.configuration.php#ini.html-errors" class="link">html_errors</a></td>
          <td><strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></td>
          <td>
           Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, as it can be quite hard to read error messages
           in the shell environment when they are cluttered up with uninterpreted
           <abbr title="Hyper Text Markup Language">HTML</abbr> tags.
          </td>
         </tr>

         <tr>
          <td><a href="outcontrol.configuration.php#ini.implicit-flush" class="link">implicit_flush</a></td>
          <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></td>
          <td>
           In a shell environment, it is usually desirable for output, such as
           from <span class="function"><a href="function.print.php" class="function">print</a></span>, <span class="function"><a href="function.echo.php" class="function">echo</a></span> and
           friends, to be displayed immediately, and not held in a buffer.
           Nonetheless, it is still possible to use
           <a href="ref.outcontrol.php" class="link">output buffering</a> to
           defer or manipulate standard output.
          </td>
         </tr>

         <tr>
          <td><a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a></td>
          <td>0 (unlimited)</td>
          <td>
           PHP in a shell environment tends to be used for a much more diverse
           range of purposes than typical Web-based scripts, and as these can
           be very long-running, the maximum execution time is set to unlimited.
          </td>
         </tr>

         <tr>
          <td><a href="ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a></td>
          <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></td>
          <td>
          <p class="para">
           Setting this to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> means that scripts executed via the
           <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> always have access to
           <em>argc</em> (number of arguments passed to the
           application) and <em>argv</em> (array of the actual
           arguments).
          </p>
          <p class="para">
           The PHP variables <var class="varname"><a href="reserved.variables.argc.php" class="classname">$argc</a></var>
           and <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv</a></var> are automatically set to the appropriate
           values when using the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr>. These values can
           also be found in the <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> array, for example:
           <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['argv']</a></var>.
          </p>
          <div class="warning"><strong class="warning">Warning</strong>
           <p class="para">
            The presence of <var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv</a></var> or <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['argv']</a></var>
            is not a reliable indication that a script is being run from the
            command line because they may be set in other contexts when
            <a href="ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a> is enabled.
            The value returned by <span class="function"><a href="function.php-sapi-name.php" class="function">php_sapi_name()</a></span> should be checked
            instead.
            <div class="informalexample">
             <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">php_sapi_name</span><span style="color: #007700">() === </span><span style="color: #DD0000">'cli'</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"This is being run from the command line!\n"</span><span style="color: #007700">;<br />}</span></span></code></div>
             </div>

            </div>
           </p>
          </div>
          </td>
         </tr>

         <tr>
          <td><a href="outcontrol.configuration.php#ini.output-buffering" class="link">output_buffering</a></td>
          <td><strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></td>
          <td>
           <p class="para">
            Although the <var class="filename">php.ini</var> setting is hardcoded to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, the
            <a href="book.outcontrol.php" class="link">Output buffering</a> functions
            are available.
           </p>
          </td>
         </tr>

         <tr>
          <td><a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a></td>
          <td><strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></td>
          <td>
           <p class="para">
            The PHP <abbr title="Command Line Interpreter/Interface">CLI</abbr> does not support GET, POST or file uploads.
           </p>
          </td>
         </tr>

        </tbody>
       
      </table>

     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       These directives cannot be initialized with another value from the
       configuration file <var class="filename">php.ini</var> or a custom one (if specified). This
       limitation is because the values are applied after all configuration
       files have been parsed. However, their values can be changed
       during runtime (although this is not sensible for all of them,
       such as <a href="ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a>).
      </p>
     </p></blockquote>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       It is recommended to set
       <a href="misc.configuration.php#ini.ignore-user-abort" class="link">ignore_user_abort</a> for
       command line scripts. See <span class="function"><a href="function.ignore-user-abort.php" class="function">ignore_user_abort()</a></span> for
       more information.
      </p>
     </p></blockquote>
    </li>
    
    <li class="listitem">
     <p class="para">
      To ease working in the shell environment, a number of constants are
      defined for <a href="features.commandline.io-streams.php" class="link">I/O streams
      </a>.
     </p>
    </li>
    
    <li class="listitem">
     <p class="para">
      The <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> does <strong>not</strong> change the
      current directory to the directory of the executed script.
     </p>
     <div class="example" id="example-541">
      <p><strong>Example #1 
       Example showing the difference to the <abbr title="Common Gateway Interface">CGI</abbr>
       <abbr title="Server Application Programming Interface">SAPI</abbr>:
      </strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Our simple test application named test.php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">getcwd</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>
       When using the <abbr title="Common Gateway Interface">CGI</abbr> version, the output is:
      </p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
$ pwd
/tmp

$ php -q another_directory/test.php
/tmp/another_directory
</pre></div>
      </div>
      <div class="example-contents"><p>
       This clearly shows that PHP changes its current directory to the one of
       the executed script.
      </p></div>
      <div class="example-contents"><p>
       Using the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> yields:
      </p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
$ pwd
/tmp

$ php -f another_directory/test.php
/tmp
</pre></div>
      </div>
      <div class="example-contents"><p>
       This allows greater flexibility when writing shell tools in PHP.
      </p></div>
     </div>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The <abbr title="Common Gateway Interface">CGI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> supports this
       <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> behaviour by means of the <strong class="option unknown">-C</strong> switch when run
       from the command line.
      </p>
     </p></blockquote>
    </li>
   </ul>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.differences%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.differences&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.differences.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.usage.php" title="Usage">Usage</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.io-streams.php" title="I/O streams">I/O streams</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.interactive.php" title="Interactive shell">Interactive shell</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.webserver.php" title="Built-&#8203;in web server">Built-&#8203;in web server</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.ini.php" title="INI settings">INI settings</a>
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
