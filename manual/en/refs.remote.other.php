<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Services - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="alternate" href="https://www.php.net/manual/en/refs.remote.other.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/funcref.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.var-representation.php">
 <link rel="next" href="https://www.php.net/manual/en/book.curl.php">

 <link rel="alternate" href="https://www.php.net/manual/en/refs.remote.other.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/refs.remote.other.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/refs.remote.other.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/refs.remote.other.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/refs.remote.other.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/refs.remote.other.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/refs.remote.other.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/refs.remote.other.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/refs.remote.other.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/refs.remote.other.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/refs.remote.other.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Services" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Services - Manual" />
<meta name="twitter:description" content="Other Services" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Services - Manual" />
<meta itemprop="description" content="Other Services" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Services" />

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
        <a href="book.curl.php">
          cURL &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.var-representation.php">
          &laquo; var_representation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      </ul>
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
            <option value='en/refs.remote.other.php' selected="selected">English</option>
            <option value='de/refs.remote.other.php'>German</option>
            <option value='es/refs.remote.other.php'>Spanish</option>
            <option value='fr/refs.remote.other.php'>French</option>
            <option value='it/refs.remote.other.php'>Italian</option>
            <option value='ja/refs.remote.other.php'>Japanese</option>
            <option value='pt_BR/refs.remote.other.php'>Brazilian Portuguese</option>
            <option value='ru/refs.remote.other.php'>Russian</option>
            <option value='tr/refs.remote.other.php'>Turkish</option>
            <option value='uk/refs.remote.other.php'>Ukrainian</option>
            <option value='zh/refs.remote.other.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="refs.remote.other" class="set">
   <h1 class="title">Other Services</h1>
   

 





   




   

 





   







   







   

 





   







   








   

 





   






   






   







   

 





   

 





   







   







   








   







   






   







   







   







  <ul class="chunklist chunklist_set"><li><a href="book.curl.php">cURL</a> — Client URL Library<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.curl.php">Introduction</a></li><li><a href="curl.setup.php">Installing/Configuring</a></li><li><a href="curl.constants.php">Predefined Constants</a></li><li><a href="curl.examples.php">Examples</a></li><li><a href="ref.curl.php">cURL Functions</a></li><li><a href="class.curlhandle.php">CurlHandle</a> — The CurlHandle class</li><li><a href="class.curlmultihandle.php">CurlMultiHandle</a> — The CurlMultiHandle class</li><li><a href="class.curlsharehandle.php">CurlShareHandle</a> — The CurlShareHandle class</li><li><a href="class.curlsharepersistenthandle.php">CurlSharePersistentHandle</a> — The CurlSharePersistentHandle class</li><li><a href="class.curlfile.php">CURLFile</a> — The CURLFile class</li><li><a href="class.curlstringfile.php">CURLStringFile</a> — The CURLStringFile class</li></ul></li><li><a href="book.event.php">Event</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.event.php">Introduction</a></li><li><a href="event.setup.php">Installing/Configuring</a></li><li><a href="event.examples.php">Examples</a></li><li><a href="event.flags.php">Event flags</a></li><li><a href="event.persistence.php">About event persistence</a></li><li><a href="event.callbacks.php">Event callbacks</a></li><li><a href="event.constructing.signal.events.php">Constructing signal events</a></li><li><a href="class.event.php">Event</a> — The Event class</li><li><a href="class.eventbase.php">EventBase</a> — The EventBase class</li><li><a href="class.eventbuffer.php">EventBuffer</a> — The EventBuffer class</li><li><a href="class.eventbufferevent.php">EventBufferEvent</a> — The EventBufferEvent class</li><li><a href="eventbufferevent.about.callbacks.php">About buffer event callbacks</a></li><li><a href="class.eventconfig.php">EventConfig</a> — The EventConfig class</li><li><a href="class.eventdnsbase.php">EventDnsBase</a> — The EventDnsBase class</li><li><a href="class.eventhttp.php">EventHttp</a> — The EventHttp class</li><li><a href="class.eventhttpconnection.php">EventHttpConnection</a> — The EventHttpConnection class</li><li><a href="class.eventhttprequest.php">EventHttpRequest</a> — The EventHttpRequest class</li><li><a href="class.eventlistener.php">EventListener</a> — The EventListener class</li><li><a href="class.eventsslcontext.php">EventSslContext</a> — The EventSslContext class</li><li><a href="class.eventutil.php">EventUtil</a> — The EventUtil class</li><li><a href="class.eventexception.php">EventException</a> — The EventException class</li></ul></li><li><a href="book.ftp.php">FTP</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.ftp.php">Introduction</a></li><li><a href="ftp.setup.php">Installing/Configuring</a></li><li><a href="ftp.constants.php">Predefined Constants</a></li><li><a href="ftp.examples.php">Examples</a></li><li><a href="ref.ftp.php">FTP Functions</a></li><li><a href="class.ftp-connection.php">FTP\Connection</a> — The FTP\Connection class</li></ul></li><li><a href="book.gearman.php">Gearman</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.gearman.php">Introduction</a></li><li><a href="gearman.setup.php">Installing/Configuring</a></li><li><a href="gearman.constants.php">Predefined Constants</a></li><li><a href="gearman.examples.php">Examples</a></li><li><a href="class.gearmanclient.php">GearmanClient</a> — The GearmanClient class</li><li><a href="class.gearmanjob.php">GearmanJob</a> — The GearmanJob class</li><li><a href="class.gearmantask.php">GearmanTask</a> — The GearmanTask class</li><li><a href="class.gearmanworker.php">GearmanWorker</a> — The GearmanWorker class</li><li><a href="class.gearmanexception.php">GearmanException</a> — The GearmanException class</li></ul></li><li><a href="book.ldap.php">LDAP</a> — Lightweight Directory Access Protocol<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.ldap.php">Introduction</a></li><li><a href="ldap.setup.php">Installing/Configuring</a></li><li><a href="ldap.constants.php">Predefined Constants</a></li><li><a href="ldap.using.php">Using the PHP LDAP calls</a></li><li><a href="ldap.controls.php">LDAP controls</a></li><li><a href="ldap.examples.php">Examples</a></li><li><a href="ref.ldap.php">LDAP Functions</a></li><li><a href="class.ldap-connection.php">LDAP\Connection</a> — The LDAP\Connection class</li><li><a href="class.ldap-result.php">LDAP\Result</a> — The LDAP\Result class</li><li><a href="class.ldap-result-entry.php">LDAP\ResultEntry</a> — The LDAP\ResultEntry class</li></ul></li><li><a href="book.memcache.php">Memcache</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.memcache.php">Introduction</a></li><li><a href="memcache.setup.php">Installing/Configuring</a></li><li><a href="memcache.constants.php">Predefined Constants</a></li><li><a href="memcache.examples.php">Examples</a></li><li><a href="class.memcache.php">Memcache</a> — The Memcache class</li><li><a href="ref.memcache.php">Memcache Functions</a></li></ul></li><li><a href="book.memcached.php">Memcached</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.memcached.php">Introduction</a></li><li><a href="memcached.setup.php">Installing/Configuring</a></li><li><a href="memcached.constants.php">Predefined Constants</a></li><li><a href="memcached.expiration.php">Expiration Times</a></li><li><a href="memcached.callbacks.php">Callbacks</a></li><li><a href="memcached.sessions.php">Sessions support</a></li><li><a href="class.memcached.php">Memcached</a> — The Memcached class</li><li><a href="class.memcachedexception.php">MemcachedException</a> — The MemcachedException class</li></ul></li><li><a href="book.mqseries.php">mqseries</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.mqseries.php">Introduction</a></li><li><a href="mqseries.setup.php">Installing/Configuring</a></li><li><a href="mqseries.constants.php">Predefined Constants</a></li><li><a href="ref.mqseries.php">mqseries Functions</a></li></ul></li><li><a href="book.network.php">Network</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.network.php">Introduction</a></li><li><a href="network.setup.php">Installing/Configuring</a></li><li><a href="network.constants.php">Predefined Constants</a></li><li><a href="ref.network.php">Network Functions</a></li></ul></li><li><a href="book.rrd.php">RRD</a> — RRDtool<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.rrd.php">Introduction</a></li><li><a href="rrd.setup.php">Installing/Configuring</a></li><li><a href="rrd.examples.php">Examples</a></li><li><a href="ref.rrd.php">RRD Functions</a></li><li><a href="class.rrdcreator.php">RRDCreator</a> — The RRDCreator class</li><li><a href="class.rrdgraph.php">RRDGraph</a> — The RRDGraph class</li><li><a href="class.rrdupdater.php">RRDUpdater</a> — The RRDUpdater class</li></ul></li><li><a href="book.scoutapm.php">ScoutAPM</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.scoutapm.php">Introduction</a></li><li><a href="scoutapm.setup.php">Installing/Configuring</a></li><li><a href="ref.scoutapm.php">Scoutapm Functions</a></li></ul></li><li><a href="book.snmp.php">SNMP</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.snmp.php">Introduction</a></li><li><a href="snmp.setup.php">Installing/Configuring</a></li><li><a href="snmp.constants.php">Predefined Constants</a></li><li><a href="ref.snmp.php">SNMP Functions</a></li><li><a href="class.snmp.php">SNMP</a> — The SNMP class</li><li><a href="class.snmpexception.php">SNMPException</a> — The SNMPException class</li></ul></li><li><a href="book.sockets.php">Sockets</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.sockets.php">Introduction</a></li><li><a href="sockets.setup.php">Installing/Configuring</a></li><li><a href="sockets.constants.php">Predefined Constants</a></li><li><a href="sockets.examples.php">Examples</a></li><li><a href="sockets.errors.php">Socket Errors</a></li><li><a href="ref.sockets.php">Socket Functions</a></li><li><a href="class.socket.php">Socket</a> — The Socket class</li><li><a href="class.addressinfo.php">AddressInfo</a> — The AddressInfo class</li></ul></li><li><a href="book.ssh2.php">SSH2</a> — Secure Shell2<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.ssh2.php">Introduction</a></li><li><a href="ssh2.setup.php">Installing/Configuring</a></li><li><a href="ssh2.constants.php">Predefined Constants</a></li><li><a href="ref.ssh2.php">SSH2 Functions</a></li></ul></li><li><a href="book.stomp.php">Stomp</a> — Stomp Client<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.stomp.php">Introduction</a></li><li><a href="stomp.setup.php">Installing/Configuring</a></li><li><a href="stomp.examples.php">Examples</a></li><li><a href="ref.stomp.php">Stomp Functions</a></li><li><a href="class.stomp.php">Stomp</a> — The Stomp class</li><li><a href="class.stompframe.php">StompFrame</a> — The StompFrame class</li><li><a href="class.stompexception.php">StompException</a> — The StompException class</li></ul></li><li><a href="book.svm.php">SVM</a> — Support Vector Machine<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.svm.php">Introduction</a></li><li><a href="svm.setup.php">Installing/Configuring</a></li><li><a href="svm.examples.php">Examples</a></li><li><a href="class.svm.php">SVM</a> — The SVM class</li><li><a href="class.svmmodel.php">SVMModel</a> — The SVMModel class</li></ul></li><li><a href="book.svn.php">SVN</a> — Subversion<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.svn.php">Introduction</a></li><li><a href="svn.setup.php">Installing/Configuring</a></li><li><a href="svn.constants.php">Predefined Constants</a></li><li><a href="ref.svn.php">SVN Functions</a></li></ul></li><li><a href="book.tcpwrap.php">TCP</a> — TCP Wrappers<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.tcpwrap.php">Introduction</a></li><li><a href="tcpwrap.setup.php">Installing/Configuring</a></li><li><a href="ref.tcpwrap.php">TCP Functions</a></li></ul></li><li><a href="book.varnish.php">Varnish</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.varnish.php">Introduction</a></li><li><a href="varnish.setup.php">Installing/Configuring</a></li><li><a href="varnish.constants.php">Predefined Constants</a></li><li><a href="varnish.examples.php">Examples</a></li><li><a href="class.varnishadmin.php">VarnishAdmin</a> — The VarnishAdmin class</li><li><a href="class.varnishstat.php">VarnishStat</a> — The VarnishStat class</li><li><a href="class.varnishlog.php">VarnishLog</a> — The VarnishLog class</li></ul></li><li><a href="book.yaz.php">YAZ</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.yaz.php">Introduction</a></li><li><a href="yaz.setup.php">Installing/Configuring</a></li><li><a href="yaz.examples.php">Examples</a></li><li><a href="ref.yaz.php">YAZ Functions</a></li></ul></li><li><a href="book.zmq.php">0MQ messaging</a> — ZMQ<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.zmq.php">Introduction</a></li><li><a href="zmq.setup.php">Installing/Configuring</a></li><li><a href="class.zmq.php">ZMQ</a> — The ZMQ class</li><li><a href="class.zmqcontext.php">ZMQContext</a> — The ZMQContext class</li><li><a href="class.zmqsocket.php">ZMQSocket</a> — The ZMQSocket class</li><li><a href="class.zmqpoll.php">ZMQPoll</a> — The ZMQPoll class</li><li><a href="class.zmqdevice.php">ZMQDevice</a> — The ZMQDevice class</li></ul></li><li><a href="book.zookeeper.php">ZooKeeper</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.zookeeper.php">Introduction</a></li><li><a href="zookeeper.setup.php">Installing/Configuring</a></li><li><a href="ref.zookeeper.php">ZooKeeper Functions</a></li><li><a href="class.zookeeper.php">Zookeeper</a> — The Zookeeper class</li><li><a href="class.zookeeperconfig.php">ZookeeperConfig</a> — The ZookeeperConfig class</li><li><a href="class.zookeeperexception.php">ZookeeperException</a> — The ZookeeperException class</li><li><a href="class.zookeeperauthenticationexception.php">ZookeeperAuthenticationException</a> — The ZookeeperAuthenticationException class</li><li><a href="class.zookeeperconnectionexception.php">ZookeeperConnectionException</a> — The ZookeeperConnectionException class</li><li><a href="class.zookeepermarshallingexception.php">ZookeeperMarshallingException</a> — The ZookeeperMarshallingException class</li><li><a href="class.zookeepernonodeexception.php">ZookeeperNoNodeException</a> — The ZookeeperNoNodeException class</li><li><a href="class.zookeeperoperationtimeoutexception.php">ZookeeperOperationTimeoutException</a> — The ZookeeperOperationTimeoutException class</li><li><a href="class.zookeepersessionexception.php">ZookeeperSessionException</a> — The ZookeeperSessionException class</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frefs.remote.other%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=refs.remote.other&amp;repo=en&amp;redirect=https://www.php.net/manual/en/refs.remote.other.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="funcref.php">Function Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="refs.basic.php.php" title="Affecting PHP's Behaviour">Affecting PHP's Behaviour</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.audio.php" title="Audio Formats Manipulation">Audio Formats Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.auth.php" title="Authentication Services">Authentication Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.cmdline.php" title="Command Line Specific Extensions">Command Line Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.compression.php" title="Compression and Archive Extensions">Compression and Archive Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.crypto.php" title="Cryptography Extensions">Cryptography Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.database.php" title="Database Extensions">Database Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.calendar.php" title="Date and Time Related Extensions">Date and Time Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.file.php" title="File System Related Extensions">File System Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.international.php" title="Human Language and Character Encoding Support">Human Language and Character Encoding Support</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.image.php" title="Image Processing and Generation">Image Processing and Generation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.mail.php" title="Mail Related Extensions">Mail Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.math.php" title="Mathematical Extensions">Mathematical Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.nontext.php" title="Non-&#8203;Text MIME Output">Non-&#8203;Text MIME Output</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.process.php" title="Process Control Extensions">Process Control Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.other.php" title="Other Basic Extensions">Other Basic Extensions</a>
                        </li>
                                                <li class="current">
                            <a href="refs.remote.other.php" title="Other Services">Other Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.search.php" title="Search Engine Extensions">Search Engine Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.server.php" title="Server Specific Extensions">Server Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.session.php" title="Session Extensions">Session Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.text.php" title="Text Processing">Text Processing</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.vartype.php" title="Variable and Type Related Extensions">Variable and Type Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.webservice.php" title="Web Services">Web Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.windows.php" title="Windows Only Extensions">Windows Only Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.xml.php" title="XML Manipulation">XML Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.ui.php" title="GUI Extensions">GUI Extensions</a>
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
