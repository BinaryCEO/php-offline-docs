<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Apache Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="shorturl" href="https://www.php.net/apache">
 <link rel="alternate" href="https://www.php.net/apache" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.apache.php">
 <link rel="prev" href="https://www.php.net/manual/en/apache.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/function.apache-child-terminate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.apache.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.apache.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.apache.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.apache.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.apache.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.apache.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.apache.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.apache.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.apache.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.apache.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.apache.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Apache Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Apache Functions - Manual" />
<meta name="twitter:description" content="Apache Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Apache Functions - Manual" />
<meta itemprop="description" content="Apache Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Apache Functions" />

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
        <a href="function.apache-child-terminate.php">
          apache_child_terminate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="apache.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.server.php'>Server Specific Extensions</a></li>      <li><a href='book.apache.php'>Apache</a></li>      </ul>
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
            <option value='en/ref.apache.php' selected="selected">English</option>
            <option value='de/ref.apache.php'>German</option>
            <option value='es/ref.apache.php'>Spanish</option>
            <option value='fr/ref.apache.php'>French</option>
            <option value='it/ref.apache.php'>Italian</option>
            <option value='ja/ref.apache.php'>Japanese</option>
            <option value='pt_BR/ref.apache.php'>Brazilian Portuguese</option>
            <option value='ru/ref.apache.php'>Russian</option>
            <option value='tr/ref.apache.php'>Turkish</option>
            <option value='uk/ref.apache.php'>Ukrainian</option>
            <option value='zh/ref.apache.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.apache" class="reference">
  <h1 class="title">Apache Functions</h1>

 




































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.apache-child-terminate.php">apache_child_terminate</a> — Terminate apache process after this request</li><li><a href="function.apache-get-modules.php">apache_get_modules</a> — Get a list of loaded Apache modules</li><li><a href="function.apache-get-version.php">apache_get_version</a> — Fetch Apache version</li><li><a href="function.apache-getenv.php">apache_getenv</a> — Get an Apache subprocess_env variable</li><li><a href="function.apache-lookup-uri.php">apache_lookup_uri</a> — Perform a partial request for the specified URI and return all info about it</li><li><a href="function.apache-note.php">apache_note</a> — Get and set apache request notes</li><li><a href="function.apache-request-headers.php">apache_request_headers</a> — Fetch all HTTP request headers</li><li><a href="function.apache-response-headers.php">apache_response_headers</a> — Fetch all HTTP response headers</li><li><a href="function.apache-setenv.php">apache_setenv</a> — Set an Apache subprocess_env variable</li><li><a href="function.getallheaders.php">getallheaders</a> — Fetch all HTTP request headers</li><li><a href="function.virtual.php">virtual</a> — Perform an Apache sub-request</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/apache/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.apache%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.apache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.apache.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="45148">  <div class="votes">
    <div id="Vu45148">
    <a href="/manual/vote-note.php?id=45148&amp;page=ref.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45148">
    <a href="/manual/vote-note.php?id=45148&amp;page=ref.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45148" title="71% like this...">
    3
    </div>
  </div>
  <a href="#45148" class="name">
  <strong class="user"><em>outofnet at mail dot ru</em></strong></a><a class="genanchor" href="#45148"> &para;</a><div class="date" title="2004-08-27 07:44"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45148">
<div class="phpcode"><code><span class="html">Important info for Apache2 users that have several virtual hosts.<br /><br />It seems php_flag directive has a different behaviour under Apache 2 (from what it is under 1.3) when used inside &lt;VirtualHost&gt; block.<br /><br />If you override global php.ini settings with php_flag for one of your virtual host - then your other non-customized virtual hosts may use this overrided settings as well. php_flag records are messed up among different virtual hosts under single Apache 2 server. It may result from Apache 2 multi-thread nature.<br /><br />Here is an example:<br /><br />Suppose you have two Virtual hosts: V1 and V2.<br />For V1 in Apache configuration you use<br />php_flag magic_quotes_gpc 1<br />V2 is supposed to use global php.ini settings, so you didn't put any php_flag records into Apache conf for V2 (this worked under Apache 1.3).<br />And your default php.ini settings are: <br />php_flag magic_quotes_gpc 0<br /><br />When you run your server you'll notice that magic quotes is (sometimes) set to On at V2!<br />The value turns On at V2 when there have been a previous request to V1.<br /><br />To solve the problem either move php_flag into .htaccess located inside customized virtual host directory OR put php_flag with default settings into all your &lt;VirtualHost&gt; blocks that are not customized. So for V2 put:<br />php_flag magic_quotes_gpc 0<br /><br />It is critical to be very carefull with php_flag engine 0.<br /><br />My configuration is:<br />PHP 4.3.4, Apache 2.0.50, Linux RedHat 9</span></code></div>
  </div>
 </div>
  <div class="note" id="27008">  <div class="votes">
    <div id="Vu27008">
    <a href="/manual/vote-note.php?id=27008&amp;page=ref.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27008">
    <a href="/manual/vote-note.php?id=27008&amp;page=ref.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27008" title="75% like this...">
    2
    </div>
  </div>
  <a href="#27008" class="name">
  <strong class="user"><em>henk_nicolai at REMOVE-THIS at hotmail dot com</em></strong></a><a class="genanchor" href="#27008"> &para;</a><div class="date" title="2002-11-20 04:03"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27008">
<div class="phpcode"><code><span class="html">My Apache server has a problem when someone enters a URI like: "<a href="http://my_server.nl/index.php/" rel="nofollow" target="_blank">http://my_server.nl/index.php/</a>". (Note the extra slash.) The server executes the index.php script anyway, which causes the browser directory and the current directory used in the script to be different. And therefore my relative links don't work, and my stylesheet is not loaded. A quick test ("<a href="http://www.php.net/manual/en/index.php/" rel="nofollow" target="_blank">http://www.php.net/manual/en/index.php/</a>") reveals that also this site has this glitch. <br /><br />When a client requests a directory without the last slash ("<a href="http://www.php.net/manual" rel="nofollow" target="_blank">http://www.php.net/manual</a>") the server sends a HTTP 301 (Moved Permanently) response with a redirect to the correct URI ("<a href="http://www.php.net/manual/" rel="nofollow" target="_blank">http://www.php.net/manual/</a>"), and my idea was to do the same when the user adds a slash too much:<br /><br /><span class="default">&lt;?php<br />   $req </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">];<br />   </span><span class="comment">// Remove rubbish.<br />   </span><span class="default">$newReq </span><span class="keyword">= </span><span class="default">ereg_replace </span><span class="keyword">(</span><span class="string">'index.php[^?]*'</span><span class="keyword">, </span><span class="string">'index.php'</span><span class="keyword">, </span><span class="default">$req</span><span class="keyword">);<br />   if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$newReq</span><span class="keyword">) &lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">)) {<br />     </span><span class="default">header </span><span class="keyword">(</span><span class="string">'Location: '</span><span class="keyword">.</span><span class="default">$newReq</span><span class="keyword">);<br />     </span><span class="default">header </span><span class="keyword">(</span><span class="string">'HTTP/1.0 301 Moved Permanently'</span><span class="keyword">);<br />     die;  </span><span class="comment">// Don't send any more output.<br />   </span><span class="keyword">}<br />   unset(</span><span class="default">$req</span><span class="keyword">); unset(</span><span class="default">$newReq</span><span class="keyword">);<br /><br />   ... (</span><span class="default">rest of the script</span><span class="keyword">) ...<br /></span><span class="default">?&gt;<br /></span><br />Replace every occurence of 'index.php' with your filename and you're done. Hope it helps. :-)<br /><br />(Note: I'm not using fragments in my URI's (like 'index.php#bottom'), and this code may not do what you want if you are using them.)</span></code></div>
  </div>
 </div>
  <div class="note" id="18111">  <div class="votes">
    <div id="Vu18111">
    <a href="/manual/vote-note.php?id=18111&amp;page=ref.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18111">
    <a href="/manual/vote-note.php?id=18111&amp;page=ref.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18111" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#18111" class="name">
  <strong class="user"><em>cjm2 at earthling dot net</em></strong></a><a class="genanchor" href="#18111"> &para;</a><div class="date" title="2002-01-10 03:40"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18111">
<div class="phpcode"><code><span class="html">If you are trying to find a Handler to use with apache's mod_mime functions (e.g. SetHandler).  Use the MIME type associated with php.<br /><br />e.g. SetHandler application/x-httpd-php</span></code></div>
  </div>
 </div>
  <div class="note" id="59190">  <div class="votes">
    <div id="Vu59190">
    <a href="/manual/vote-note.php?id=59190&amp;page=ref.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59190">
    <a href="/manual/vote-note.php?id=59190&amp;page=ref.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59190" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#59190" class="name">
  <strong class="user"><em>bgshea at gmail dot com</em></strong></a><a class="genanchor" href="#59190"> &para;</a><div class="date" title="2005-11-28 07:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59190">
<div class="phpcode"><code><span class="html">here is a dynamic version of henk_nicolai at REMOVE-THIS at hotmail dot com's code<br /><br />    $req = $_SERVER['REQUEST_URI'];<br />    // Remove rubbish.<br />    $newReq = ereg_replace ( $_SERVER['SCRIPT_NAME'] . '[^?]*', $_SERVER['SCRIPT_NAME'], $req);<br />    if (strlen($newReq) &lt; strlen($req)) <br />    {<br />        header ('Location: '.$newReq);<br />        header ('HTTP/1.0 301 Moved Permanently');<br />        die;  // Don't send any more output.<br />    }<br />    unset($req); <br />    unset($newReq);<br /><br />this can be placed at the top of any file that is to be access by the URI.</span></code></div>
  </div>
 </div>
  <div class="note" id="58363">  <div class="votes">
    <div id="Vu58363">
    <a href="/manual/vote-note.php?id=58363&amp;page=ref.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58363">
    <a href="/manual/vote-note.php?id=58363&amp;page=ref.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58363" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#58363" class="name">
  <strong class="user"><em>pike</em></strong></a><a class="genanchor" href="#58363"> &para;</a><div class="date" title="2005-11-01 03:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58363">
<div class="phpcode"><code><span class="html">to henk_nicolai<br /><br />the behaviour you describe is not a "glitch" of apache :-). an url like<br />"<a href="http://my_server.nl/index.php/foo" rel="nofollow" target="_blank">http://my_server.nl/index.php/foo</a>".  should return the resource <a href="http://my_server.nl/index.php" rel="nofollow" target="_blank">http://my_server.nl/index.php</a> and pass "/foo" as PATH_INFO in the environment. <br /><br />which is extremely usefull if you use it wisely. <br /><br />for more info on PATH_INFO and PATH_TRANSLATED, see <a href="http://nl2.php.net/reserved.variables" rel="nofollow" target="_blank">http://nl2.php.net/reserved.variables</a> . PATH_INFO is not related to the php pathinfo() function<br /><br />$2c,<br />*pike</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.apache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.apache.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.apache.php">Apache</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.apache.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="apache.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ref.apache.php" title="Apache Functions">Apache Functions</a>
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
