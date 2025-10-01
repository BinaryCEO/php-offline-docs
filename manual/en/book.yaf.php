<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Yaf - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.yaf.php">
 <link rel="shorturl" href="https://www.php.net/yaf">
 <link rel="alternate" href="https://www.php.net/yaf" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.yaml-parse-url.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.yaf.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.yaf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.yaf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.yaf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.yaf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.yaf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.yaf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.yaf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.yaf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.yaf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.yaf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.yaf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Yet Another Framework" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Yaf - Manual" />
<meta name="twitter:description" content="Yet Another Framework" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Yaf - Manual" />
<meta itemprop="description" content="Yet Another Framework" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Yet Another Framework" />

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
        <a href="intro.yaf.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.yaml-parse-url.php">
          &laquo; yaml_parse_url        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      </ul>
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
            <option value='en/book.yaf.php' selected="selected">English</option>
            <option value='de/book.yaf.php'>German</option>
            <option value='es/book.yaf.php'>Spanish</option>
            <option value='fr/book.yaf.php'>French</option>
            <option value='it/book.yaf.php'>Italian</option>
            <option value='ja/book.yaf.php'>Japanese</option>
            <option value='pt_BR/book.yaf.php'>Brazilian Portuguese</option>
            <option value='ru/book.yaf.php'>Russian</option>
            <option value='tr/book.yaf.php'>Turkish</option>
            <option value='uk/book.yaf.php'>Ukrainian</option>
            <option value='zh/book.yaf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.yaf" class="book">
 
 <h1 class="title">Yet Another Framework</h1>
 

 

 






 






 





 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 





     
 






 





       
 






 






 





  
 





  

<ul class="chunklist chunklist_book"><li><a href="intro.yaf.php">Introduction</a></li><li><a href="yaf.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf.installation.php">Installation</a></li><li><a href="yaf.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="yaf.constants.php">Predefined Constants</a></li><li><a href="yaf.tutorials.php">Examples</a></li><li><a href="yaf.appconfig.php">Application Configuration</a></li><li><a href="class.yaf-application.php">Yaf_Application</a> — The Yaf_Application class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-application.app.php">Yaf_Application::app</a> — Retrieve an Application instance</li><li><a href="yaf-application.bootstrap.php">Yaf_Application::bootstrap</a> — Call bootstrap</li><li><a href="yaf-application.clearlasterror.php">Yaf_Application::clearLastError</a> — Clear the last error info</li><li><a href="yaf-application.construct.php">Yaf_Application::__construct</a> — Yaf_Application constructor</li><li><a href="yaf-application.destruct.php">Yaf_Application::__destruct</a> — The __destruct purpose</li><li><a href="yaf-application.environ.php">Yaf_Application::environ</a> — Retrive environ</li><li><a href="yaf-application.execute.php">Yaf_Application::execute</a> — Execute a callback</li><li><a href="yaf-application.getappdirectory.php">Yaf_Application::getAppDirectory</a> — Get the application directory</li><li><a href="yaf-application.getconfig.php">Yaf_Application::getConfig</a> — Retrive the config instance</li><li><a href="yaf-application.getdispatcher.php">Yaf_Application::getDispatcher</a> — Get Yaf_Dispatcher instance</li><li><a href="yaf-application.getlasterrormsg.php">Yaf_Application::getLastErrorMsg</a> — Get message of the last occurred error</li><li><a href="yaf-application.getlasterrorno.php">Yaf_Application::getLastErrorNo</a> — Get code of last occurred error</li><li><a href="yaf-application.getmodules.php">Yaf_Application::getModules</a> — Get defined module names</li><li><a href="yaf-application.run.php">Yaf_Application::run</a> — Start Yaf_Application</li><li><a href="yaf-application.setappdirectory.php">Yaf_Application::setAppDirectory</a> — Change the application directory</li></ul></li><li><a href="class.yaf-bootstrap-abstract.php">Yaf_Bootstrap_Abstract</a> — The Yaf_Bootstrap_Abstract class</li><li><a href="class.yaf-dispatcher.php">Yaf_Dispatcher</a> — The Yaf_Dispatcher class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-dispatcher.autorender.php">Yaf_Dispatcher::autoRender</a> — Switch on/off autorendering</li><li><a href="yaf-dispatcher.catchexception.php">Yaf_Dispatcher::catchException</a> — Switch on/off exception catching</li><li><a href="yaf-dispatcher.construct.php">Yaf_Dispatcher::__construct</a> — Yaf_Dispatcher constructor</li><li><a href="yaf-dispatcher.disableview.php">Yaf_Dispatcher::disableView</a> — Disable view rendering</li><li><a href="yaf-dispatcher.dispatch.php">Yaf_Dispatcher::dispatch</a> — Dispatch a request</li><li><a href="yaf-dispatcher.enableview.php">Yaf_Dispatcher::enableView</a> — Enable view rendering</li><li><a href="yaf-dispatcher.flushinstantly.php">Yaf_Dispatcher::flushInstantly</a> — Switch on/off the instant flushing</li><li><a href="yaf-dispatcher.getapplication.php">Yaf_Dispatcher::getApplication</a> — Retrieve the application</li><li><a href="yaf-dispatcher.getdefaultaction.php">Yaf_Dispatcher::getDefaultAction</a> — Retrive the default action name</li><li><a href="yaf-dispatcher.getdefaultcontroller.php">Yaf_Dispatcher::getDefaultController</a> — Retrive the default controller name</li><li><a href="yaf-dispatcher.getdefaultmodule.php">Yaf_Dispatcher::getDefaultModule</a> — Retrive the default module name</li><li><a href="yaf-dispatcher.getinstance.php">Yaf_Dispatcher::getInstance</a> — Retrive the dispatcher instance</li><li><a href="yaf-dispatcher.getrequest.php">Yaf_Dispatcher::getRequest</a> — Retrive the request instance</li><li><a href="yaf-dispatcher.getrouter.php">Yaf_Dispatcher::getRouter</a> — Retrive router instance</li><li><a href="yaf-dispatcher.initview.php">Yaf_Dispatcher::initView</a> — Initialize view and return it</li><li><a href="yaf-dispatcher.registerplugin.php">Yaf_Dispatcher::registerPlugin</a> — Register a plugin</li><li><a href="yaf-dispatcher.returnresponse.php">Yaf_Dispatcher::returnResponse</a> — The returnResponse purpose</li><li><a href="yaf-dispatcher.setdefaultaction.php">Yaf_Dispatcher::setDefaultAction</a> — Change default action name</li><li><a href="yaf-dispatcher.setdefaultcontroller.php">Yaf_Dispatcher::setDefaultController</a> — Change default controller name</li><li><a href="yaf-dispatcher.setdefaultmodule.php">Yaf_Dispatcher::setDefaultModule</a> — Change default module name</li><li><a href="yaf-dispatcher.seterrorhandler.php">Yaf_Dispatcher::setErrorHandler</a> — Set error handler</li><li><a href="yaf-dispatcher.setrequest.php">Yaf_Dispatcher::setRequest</a> — The setRequest purpose</li><li><a href="yaf-dispatcher.setview.php">Yaf_Dispatcher::setView</a> — Set a custom view engine</li><li><a href="yaf-dispatcher.throwexception.php">Yaf_Dispatcher::throwException</a> — Switch on/off exception throwing</li></ul></li><li><a href="class.yaf-config-abstract.php">Yaf_Config_Abstract</a> — The Yaf_Config_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-abstract.get.php">Yaf_Config_Abstract::get</a> — Getter</li><li><a href="yaf-config-abstract.readonly.php">Yaf_Config_Abstract::readonly</a> — Find a config whether readonly</li><li><a href="yaf-config-abstract.set.php">Yaf_Config_Abstract::set</a> — Setter</li><li><a href="yaf-config-abstract.toarray.php">Yaf_Config_Abstract::toArray</a> — Cast to array</li></ul></li><li><a href="class.yaf-config-ini.php">Yaf_Config_Ini</a> — The Yaf_Config_Ini class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-ini.construct.php">Yaf_Config_Ini::__construct</a> — Yaf_Config_Ini constructor</li><li><a href="yaf-config-ini.count.php">Yaf_Config_Ini::count</a> — Count all elements in Yaf_Config.ini</li><li><a href="yaf-config-ini.current.php">Yaf_Config_Ini::current</a> — Retrieve the current value</li><li><a href="yaf-config-ini.get.php">Yaf_Config_Ini::__get</a> — Retrieve a element</li><li><a href="yaf-config-ini.isset.php">Yaf_Config_Ini::__isset</a> — Determine if a key is exists</li><li><a href="yaf-config-ini.key.php">Yaf_Config_Ini::key</a> — Fetch current element's key</li><li><a href="yaf-config-ini.next.php">Yaf_Config_Ini::next</a> — Advance the internal pointer</li><li><a href="yaf-config-ini.offsetexists.php">Yaf_Config_Ini::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-ini.offsetget.php">Yaf_Config_Ini::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-ini.offsetset.php">Yaf_Config_Ini::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-ini.offsetunset.php">Yaf_Config_Ini::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-ini.readonly.php">Yaf_Config_Ini::readonly</a> — The readonly purpose</li><li><a href="yaf-config-ini.rewind.php">Yaf_Config_Ini::rewind</a> — The rewind purpose</li><li><a href="yaf-config-ini.set.php">Yaf_Config_Ini::__set</a> — The __set purpose</li><li><a href="yaf-config-ini.toarray.php">Yaf_Config_Ini::toArray</a> — Return config as a PHP array</li><li><a href="yaf-config-ini.valid.php">Yaf_Config_Ini::valid</a> — The valid purpose</li></ul></li><li><a href="class.yaf-config-simple.php">Yaf_Config_Simple</a> — The Yaf_Config_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-simple.construct.php">Yaf_Config_Simple::__construct</a> — The __construct purpose</li><li><a href="yaf-config-simple.count.php">Yaf_Config_Simple::count</a> — The count purpose</li><li><a href="yaf-config-simple.current.php">Yaf_Config_Simple::current</a> — The current purpose</li><li><a href="yaf-config-simple.get.php">Yaf_Config_Simple::__get</a> — The __get purpose</li><li><a href="yaf-config-simple.isset.php">Yaf_Config_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-config-simple.key.php">Yaf_Config_Simple::key</a> — The key purpose</li><li><a href="yaf-config-simple.next.php">Yaf_Config_Simple::next</a> — The next purpose</li><li><a href="yaf-config-simple.offsetexists.php">Yaf_Config_Simple::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-simple.offsetget.php">Yaf_Config_Simple::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-simple.offsetset.php">Yaf_Config_Simple::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-simple.offsetunset.php">Yaf_Config_Simple::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-simple.readonly.php">Yaf_Config_Simple::readonly</a> — The readonly purpose</li><li><a href="yaf-config-simple.rewind.php">Yaf_Config_Simple::rewind</a> — The rewind purpose</li><li><a href="yaf-config-simple.set.php">Yaf_Config_Simple::__set</a> — The __set purpose</li><li><a href="yaf-config-simple.toarray.php">Yaf_Config_Simple::toArray</a> — Returns a PHP array</li><li><a href="yaf-config-simple.valid.php">Yaf_Config_Simple::valid</a> — The valid purpose</li></ul></li><li><a href="class.yaf-controller-abstract.php">Yaf_Controller_Abstract</a> — The Yaf_Controller_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-controller-abstract.construct.php">Yaf_Controller_Abstract::__construct</a> — Yaf_Controller_Abstract constructor</li><li><a href="yaf-controller-abstract.display.php">Yaf_Controller_Abstract::display</a> — The display purpose</li><li><a href="yaf-controller-abstract.forward.php">Yaf_Controller_Abstract::forward</a> — Forward to another action</li><li><a href="yaf-controller-abstract.getinvokearg.php">Yaf_Controller_Abstract::getInvokeArg</a> — The getInvokeArg purpose</li><li><a href="yaf-controller-abstract.getinvokeargs.php">Yaf_Controller_Abstract::getInvokeArgs</a> — The getInvokeArgs purpose</li><li><a href="yaf-controller-abstract.getmodulename.php">Yaf_Controller_Abstract::getModuleName</a> — Get module name</li><li><a href="yaf-controller-abstract.getname.php">Yaf_Controller_Abstract::getName</a> — Get self name</li><li><a href="yaf-controller-abstract.getrequest.php">Yaf_Controller_Abstract::getRequest</a> — Retrieve current request object</li><li><a href="yaf-controller-abstract.getresponse.php">Yaf_Controller_Abstract::getResponse</a> — Retrieve current response object</li><li><a href="yaf-controller-abstract.getview.php">Yaf_Controller_Abstract::getView</a> — Retrieve the view engine</li><li><a href="yaf-controller-abstract.getviewpath.php">Yaf_Controller_Abstract::getViewpath</a> — The getViewpath purpose</li><li><a href="yaf-controller-abstract.init.php">Yaf_Controller_Abstract::init</a> — Controller initializer</li><li><a href="yaf-controller-abstract.initview.php">Yaf_Controller_Abstract::initView</a> — The initView purpose</li><li><a href="yaf-controller-abstract.redirect.php">Yaf_Controller_Abstract::redirect</a> — Redirect to a URL</li><li><a href="yaf-controller-abstract.render.php">Yaf_Controller_Abstract::render</a> — Render view template</li><li><a href="yaf-controller-abstract.setviewpath.php">Yaf_Controller_Abstract::setViewpath</a> — The setViewpath purpose</li></ul></li><li><a href="class.yaf-action-abstract.php">Yaf_Action_Abstract</a> — The Yaf_Action_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-action-abstract.execute.php">Yaf_Action_Abstract::execute</a> — Action entry point</li><li><a href="yaf-action-abstract.getcontroller.php">Yaf_Action_Abstract::getController</a> — Retrieve controller object</li><li><a href="yaf-controller-abstract.getcontrollername.php">Yaf_Action_Abstract::getControllerName</a> — Get controller name</li></ul></li><li><a href="class.yaf-view-interface.php">Yaf_View_Interface</a> — The Yaf_View_Interface class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-view-interface.assign.php">Yaf_View_Interface::assign</a> — Assign value to View engine</li><li><a href="yaf-view-interface.display.php">Yaf_View_Interface::display</a> — Render and output a template</li><li><a href="yaf-view-interface.getscriptpath.php">Yaf_View_Interface::getScriptPath</a> — The getScriptPath purpose</li><li><a href="yaf-view-interface.render.php">Yaf_View_Interface::render</a> — Render a template</li><li><a href="yaf-view-interface.setscriptpath.php">Yaf_View_Interface::setScriptPath</a> — The setScriptPath purpose</li></ul></li><li><a href="class.yaf-view-simple.php">Yaf_View_Simple</a> — The Yaf_View_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-view-simple.assign.php">Yaf_View_Simple::assign</a> — Assign values</li><li><a href="yaf-view-simple.assignref.php">Yaf_View_Simple::assignRef</a> — The assignRef purpose</li><li><a href="yaf-view-simple.clear.php">Yaf_View_Simple::clear</a> — Clear Assigned values</li><li><a href="yaf-view-simple.construct.php">Yaf_View_Simple::__construct</a> — Constructor of Yaf_View_Simple</li><li><a href="yaf-view-simple.display.php">Yaf_View_Simple::display</a> — Render and display</li><li><a href="yaf-view-simple.eval.php">Yaf_View_Simple::eval</a> — Render template</li><li><a href="yaf-view-simple.get.php">Yaf_View_Simple::__get</a> — Retrieve assigned variable</li><li><a href="yaf-view-simple.getscriptpath.php">Yaf_View_Simple::getScriptPath</a> — Get templates directory</li><li><a href="yaf-view-simple.isset.php">Yaf_View_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-view-simple.render.php">Yaf_View_Simple::render</a> — Render template</li><li><a href="yaf-view-simple.set.php">Yaf_View_Simple::__set</a> — Set value to engine</li><li><a href="yaf-view-simple.setscriptpath.php">Yaf_View_Simple::setScriptPath</a> — Set tempaltes directory</li></ul></li><li><a href="class.yaf-loader.php">Yaf_Loader</a> — The Yaf_Loader class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-loader.autoload.php">Yaf_Loader::autoload</a> — The autoload purpose</li><li><a href="yaf-loader.clearlocalnamespace.php">Yaf_Loader::clearLocalNamespace</a> — The clearLocalNamespace purpose</li><li><a href="yaf-loader.construct.php">Yaf_Loader::__construct</a> — The __construct purpose</li><li><a href="yaf-loader.getinstance.php">Yaf_Loader::getInstance</a> — The getInstance purpose</li><li><a href="yaf-loader.getlibrarypath.php">Yaf_Loader::getLibraryPath</a> — Get the library path</li><li><a href="yaf-loader.getlocalnamespace.php">Yaf_Loader::getLocalNamespace</a> — The getLocalNamespace purpose</li><li><a href="yaf-loader.getnamespacepath.php">Yaf_Loader::getNamespacePath</a> — Retieve path of a registered namespace</li><li><a href="yaf-loader.getnamespaces.php">Yaf_Loader::getLocalNamespace</a> — Retrive all register namespaces info</li><li><a href="yaf-loader.import.php">Yaf_Loader::import</a> — The import purpose</li><li><a href="yaf-loader.islocalname.php">Yaf_Loader::isLocalName</a> — The isLocalName purpose</li><li><a href="yaf-loader.registerlocalnamespace.php">Yaf_Loader::registerLocalNamespace</a> — Register local class prefix</li><li><a href="yaf-loader.registernamespace.php">Yaf_Loader::registerNamespace</a> — Register namespace with searching path</li><li><a href="yaf-loader.setlibrarypath.php">Yaf_Loader::setLibraryPath</a> — Change the library path</li></ul></li><li><a href="class.yaf-plugin-abstract.php">Yaf_Plugin_Abstract</a> — The Yaf_Plugin_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-plugin-abstract.dispatchloopshutdown.php">Yaf_Plugin_Abstract::dispatchLoopShutdown</a> — The dispatchLoopShutdown purpose</li><li><a href="yaf-plugin-abstract.dispatchloopstartup.php">Yaf_Plugin_Abstract::dispatchLoopStartup</a> — Hook before dispatch loop</li><li><a href="yaf-plugin-abstract.postdispatch.php">Yaf_Plugin_Abstract::postDispatch</a> — The postDispatch purpose</li><li><a href="yaf-plugin-abstract.predispatch.php">Yaf_Plugin_Abstract::preDispatch</a> — The preDispatch purpose</li><li><a href="yaf-plugin-abstract.preresponse.php">Yaf_Plugin_Abstract::preResponse</a> — The preResponse purpose</li><li><a href="yaf-plugin-abstract.routershutdown.php">Yaf_Plugin_Abstract::routerShutdown</a> — The routerShutdown purpose</li><li><a href="yaf-plugin-abstract.routerstartup.php">Yaf_Plugin_Abstract::routerStartup</a> — RouterStartup hook</li></ul></li><li><a href="class.yaf-registry.php">Yaf_Registry</a> — The Yaf_Registry class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-registry.construct.php">Yaf_Registry::__construct</a> — Yaf_Registry implements singleton</li><li><a href="yaf-registry.del.php">Yaf_Registry::del</a> — Remove an item from registry</li><li><a href="yaf-registry.get.php">Yaf_Registry::get</a> — Retrieve an item from registry</li><li><a href="yaf-registry.has.php">Yaf_Registry::has</a> — Check whether an item exists</li><li><a href="yaf-registry.set.php">Yaf_Registry::set</a> — Add an item into registry</li></ul></li><li><a href="class.yaf-request-abstract.php">Yaf_Request_Abstract</a> — The Yaf_Request_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-abstract.clearparams.php">Yaf_Request_Abstract::clearParams</a> — Remove all params</li><li><a href="yaf-request-abstract.getactionname.php">Yaf_Request_Abstract::getActionName</a> — The getActionName purpose</li><li><a href="yaf-request-abstract.getbaseuri.php">Yaf_Request_Abstract::getBaseUri</a> — The getBaseUri purpose</li><li><a href="yaf-request-abstract.getcontrollername.php">Yaf_Request_Abstract::getControllerName</a> — The getControllerName purpose</li><li><a href="yaf-request-abstract.getenv.php">Yaf_Request_Abstract::getEnv</a> — Retrieve ENV varialbe</li><li><a href="yaf-request-abstract.getexception.php">Yaf_Request_Abstract::getException</a> — The getException purpose</li><li><a href="yaf-request-abstract.getlanguage.php">Yaf_Request_Abstract::getLanguage</a> — Retrieve client's preferred language</li><li><a href="yaf-request-abstract.getmethod.php">Yaf_Request_Abstract::getMethod</a> — Retrieve the request method</li><li><a href="yaf-request-abstract.getmodulename.php">Yaf_Request_Abstract::getModuleName</a> — The getModuleName purpose</li><li><a href="yaf-request-abstract.getparam.php">Yaf_Request_Abstract::getParam</a> — Retrieve calling parameter</li><li><a href="yaf-request-abstract.getparams.php">Yaf_Request_Abstract::getParams</a> — Retrieve all calling parameters</li><li><a href="yaf-request-abstract.getrequesturi.php">Yaf_Request_Abstract::getRequestUri</a> — The getRequestUri purpose</li><li><a href="yaf-request-abstract.getserver.php">Yaf_Request_Abstract::getServer</a> — Retrieve SERVER variable</li><li><a href="yaf-request-abstract.iscli.php">Yaf_Request_Abstract::isCli</a> — Determine if request is CLI request</li><li><a href="yaf-request-abstract.isdispatched.php">Yaf_Request_Abstract::isDispatched</a> — Determin if the request is dispatched</li><li><a href="yaf-request-abstract.isget.php">Yaf_Request_Abstract::isGet</a> — Determine if request is GET request</li><li><a href="yaf-request-abstract.ishead.php">Yaf_Request_Abstract::isHead</a> — Determine if request is HEAD request</li><li><a href="yaf-request-abstract.isoptions.php">Yaf_Request_Abstract::isOptions</a> — Determine if request is OPTIONS request</li><li><a href="yaf-request-abstract.ispost.php">Yaf_Request_Abstract::isPost</a> — Determine if request is POST request</li><li><a href="yaf-request-abstract.isput.php">Yaf_Request_Abstract::isPut</a> — Determine if request is PUT request</li><li><a href="yaf-request-abstract.isrouted.php">Yaf_Request_Abstract::isRouted</a> — Determin if request has been routed</li><li><a href="yaf-request-abstract.isxmlhttprequest.php">Yaf_Request_Abstract::isXmlHttpRequest</a> — Determine if request is AJAX request</li><li><a href="yaf-request-abstract.setactionname.php">Yaf_Request_Abstract::setActionName</a> — Set action name</li><li><a href="yaf-request-abstract.setbaseuri.php">Yaf_Request_Abstract::setBaseUri</a> — Set base URI</li><li><a href="yaf-request-abstract.setcontrollername.php">Yaf_Request_Abstract::setControllerName</a> — Set controller name</li><li><a href="yaf-request-abstract.setdispatched.php">Yaf_Request_Abstract::setDispatched</a> — The setDispatched purpose</li><li><a href="yaf-request-abstract.setmodulename.php">Yaf_Request_Abstract::setModuleName</a> — Set module name</li><li><a href="yaf-request-abstract.setparam.php">Yaf_Request_Abstract::setParam</a> — Set a calling parameter to a request</li><li><a href="yaf-request-abstract.setrequesturi.php">Yaf_Request_Abstract::setRequestUri</a> — The setRequestUri purpose</li><li><a href="yaf-request-abstract.setrouted.php">Yaf_Request_Abstract::setRouted</a> — The setRouted purpose</li></ul></li><li><a href="class.yaf-request-http.php">Yaf_Request_Http</a> — The Yaf_Request_Http class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-http.construct.php">Yaf_Request_Http::__construct</a> — Constructor of Yaf_Request_Http</li><li><a href="yaf-request-http.get.php">Yaf_Request_Http::get</a> — Retrieve variable from client</li><li><a href="yaf-request-http.getcookie.php">Yaf_Request_Http::getCookie</a> — Retrieve Cookie variable</li><li><a href="yaf-request-http.getfiles.php">Yaf_Request_Http::getFiles</a> — The getFiles purpose</li><li><a href="yaf-request-http.getpost.php">Yaf_Request_Http::getPost</a> — Retrieve POST variable</li><li><a href="yaf-request-http.getquery.php">Yaf_Request_Http::getQuery</a> — Fetch a query parameter</li><li><a href="yaf-request-http.getraw.php">Yaf_Request_Http::getRaw</a> — Retrieve Raw request body</li><li><a href="yaf-request-http.getrequest.php">Yaf_Request_Http::getRequest</a> — The getRequest purpose</li><li><a href="yaf-request-http.isxmlhttprequest.php">Yaf_Request_Http::isXmlHttpRequest</a> — Determin if request is Ajax Request</li></ul></li><li><a href="class.yaf-request-simple.php">Yaf_Request_Simple</a> — The Yaf_Request_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-simple.construct.php">Yaf_Request_Simple::__construct</a> — Constructor of Yaf_Request_Simple</li><li><a href="yaf-request-simple.get.php">Yaf_Request_Simple::get</a> — The get purpose</li><li><a href="yaf-request-simple.getcookie.php">Yaf_Request_Simple::getCookie</a> — The getCookie purpose</li><li><a href="yaf-request-simple.getfiles.php">Yaf_Request_Simple::getFiles</a> — The getFiles purpose</li><li><a href="yaf-request-simple.getpost.php">Yaf_Request_Simple::getPost</a> — The getPost purpose</li><li><a href="yaf-request-simple.getquery.php">Yaf_Request_Simple::getQuery</a> — The getQuery purpose</li><li><a href="yaf-request-simple.getrequest.php">Yaf_Request_Simple::getRequest</a> — The getRequest purpose</li><li><a href="yaf-request-simple.isxmlhttprequest.php">Yaf_Request_Simple::isXmlHttpRequest</a> — Determin if request is AJAX request</li></ul></li><li><a href="class.yaf-response-abstract.php">Yaf_Response_Abstract</a> — The Yaf_Response_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-response-abstract.appendbody.php">Yaf_Response_Abstract::appendBody</a> — Append to response body</li><li><a href="yaf-response-abstract.clearbody.php">Yaf_Response_Abstract::clearBody</a> — Discard all exists response body</li><li><a href="yaf-response-abstract.clearheaders.php">Yaf_Response_Abstract::clearHeaders</a> — Discard all set headers</li><li><a href="yaf-response-abstract.construct.php">Yaf_Response_Abstract::__construct</a> — The __construct purpose</li><li><a href="yaf-response-abstract.destruct.php">Yaf_Response_Abstract::__destruct</a> — The __destruct purpose</li><li><a href="yaf-response-abstract.getbody.php">Yaf_Response_Abstract::getBody</a> — Retrieve a exists content</li><li><a href="yaf-response-abstract.getheader.php">Yaf_Response_Abstract::getHeader</a> — The getHeader purpose</li><li><a href="yaf-response-abstract.prependbody.php">Yaf_Response_Abstract::prependBody</a> — The prependBody purpose</li><li><a href="yaf-response-abstract.response.php">Yaf_Response_Abstract::response</a> — Send response</li><li><a href="yaf-response-abstract.setallheaders.php">Yaf_Response_Abstract::setAllHeaders</a> — The setAllHeaders purpose</li><li><a href="yaf-response-abstract.setbody.php">Yaf_Response_Abstract::setBody</a> — Set content to response</li><li><a href="yaf-response-abstract.setheader.php">Yaf_Response_Abstract::setHeader</a> — Set reponse header</li><li><a href="yaf-response-abstract.setredirect.php">Yaf_Response_Abstract::setRedirect</a> — The setRedirect purpose</li><li><a href="yaf-response-abstract.tostring.php">Yaf_Response_Abstract::__toString</a> — Retrieve all bodys as string</li></ul></li><li><a href="class.yaf-route-interface.php">Yaf_Route_Interface</a> — The Yaf_Route_Interface class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-interface.assemble.php">Yaf_Route_Interface::assemble</a> — Assemble a request</li><li><a href="yaf-route-interface.route.php">Yaf_Route_Interface::route</a> — Route a request</li></ul></li><li><a href="class.yaf-route-map.php">Yaf_Route_Map</a> — The Yaf_Route_Map class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-map.assemble.php">Yaf_Route_Map::assemble</a> — Assemble a url</li><li><a href="yaf-route-map.construct.php">Yaf_Route_Map::__construct</a> — The __construct purpose</li><li><a href="yaf-route-map.route.php">Yaf_Route_Map::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-regex.php">Yaf_Route_Regex</a> — The Yaf_Route_Regex class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-regex.assemble.php">Yaf_Route_Regex::assemble</a> — Assemble a url</li><li><a href="yaf-route-regex.construct.php">Yaf_Route_Regex::__construct</a> — Yaf_Route_Regex constructor</li><li><a href="yaf-route-regex.route.php">Yaf_Route_Regex::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-rewrite.php">Yaf_Route_Rewrite</a> — The Yaf_Route_Rewrite class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-rewrite.assemble.php">Yaf_Route_Rewrite::assemble</a> — Assemble a url</li><li><a href="yaf-route-rewrite.construct.php">Yaf_Route_Rewrite::__construct</a> — Yaf_Route_Rewrite constructor</li><li><a href="yaf-route-rewrite.route.php">Yaf_Route_Rewrite::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-router.php">Yaf_Router</a> — The Yaf_Router class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-router.addconfig.php">Yaf_Router::addConfig</a> — Add config-defined routes into Router</li><li><a href="yaf-router.addroute.php">Yaf_Router::addRoute</a> — Add new Route into Router</li><li><a href="yaf-router.construct.php">Yaf_Router::__construct</a> — Yaf_Router constructor</li><li><a href="yaf-router.getcurrentroute.php">Yaf_Router::getCurrentRoute</a> — Get the effective route name</li><li><a href="yaf-router.getroute.php">Yaf_Router::getRoute</a> — Retrieve a route by name</li><li><a href="yaf-router.getroutes.php">Yaf_Router::getRoutes</a> — Retrieve registered routes</li><li><a href="yaf-router.route.php">Yaf_Router::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-simple.php">Yaf_Route_Simple</a> — The Yaf_Route_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-simple.assemble.php">Yaf_Route_Simple::assemble</a> — Assemble a url</li><li><a href="yaf-route-simple.construct.php">Yaf_Route_Simple::__construct</a> — Yaf_Route_Simple constructor</li><li><a href="yaf-route-simple.route.php">Yaf_Route_Simple::route</a> — Route a request</li></ul></li><li><a href="class.yaf-route-static.php">Yaf_Route_Static</a> — The Yaf_Route_Static class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-static.assemble.php">Yaf_Route_Static::assemble</a> — Assemble a url</li><li><a href="yaf-route-static.match.php">Yaf_Route_Static::match</a> — The match purpose</li><li><a href="yaf-route-static.route.php">Yaf_Route_Static::route</a> — Route a request</li></ul></li><li><a href="class.yaf-route-supervar.php">Yaf_Route_Supervar</a> — The Yaf_Route_Supervar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-supervar.assemble.php">Yaf_Route_Supervar::assemble</a> — Assemble a url</li><li><a href="yaf-route-supervar.construct.php">Yaf_Route_Supervar::__construct</a> — The __construct purpose</li><li><a href="yaf-route-supervar.route.php">Yaf_Route_Supervar::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-session.php">Yaf_Session</a> — The Yaf_Session class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-session.construct.php">Yaf_Session::__construct</a> — Constructor of Yaf_Session</li><li><a href="yaf-session.count.php">Yaf_Session::count</a> — The count purpose</li><li><a href="yaf-session.current.php">Yaf_Session::current</a> — The current purpose</li><li><a href="yaf-session.del.php">Yaf_Session::del</a> — The del purpose</li><li><a href="yaf-session.get.php">Yaf_Session::__get</a> — The __get purpose</li><li><a href="yaf-session.getinstance.php">Yaf_Session::getInstance</a> — The getInstance purpose</li><li><a href="yaf-session.has.php">Yaf_Session::has</a> — The has purpose</li><li><a href="yaf-session.isset.php">Yaf_Session::__isset</a> — The __isset purpose</li><li><a href="yaf-session.key.php">Yaf_Session::key</a> — The key purpose</li><li><a href="yaf-session.next.php">Yaf_Session::next</a> — The next purpose</li><li><a href="yaf-session.offsetexists.php">Yaf_Session::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-session.offsetget.php">Yaf_Session::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-session.offsetset.php">Yaf_Session::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-session.offsetunset.php">Yaf_Session::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-session.rewind.php">Yaf_Session::rewind</a> — The rewind purpose</li><li><a href="yaf-session.set.php">Yaf_Session::__set</a> — The __set purpose</li><li><a href="yaf-session.start.php">Yaf_Session::start</a> — The start purpose</li><li><a href="yaf-session.unset.php">Yaf_Session::__unset</a> — The __unset purpose</li><li><a href="yaf-session.valid.php">Yaf_Session::valid</a> — The valid purpose</li></ul></li><li><a href="class.yaf-exception.php">Yaf_Exception</a> — The Yaf_Exception class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-exception.construct.php">Yaf_Exception::__construct</a> — The __construct purpose</li><li><a href="yaf-exception.getprevious.php">Yaf_Exception::getPrevious</a> — The getPrevious purpose</li></ul></li><li><a href="class.yaf-exception-typeerror.php">Yaf_Exception_TypeError</a> — The Yaf_Exception_TypeError class</li><li><a href="class.yaf-exception-startuperror.php">Yaf_Exception_StartupError</a> — The Yaf_Exception_StartupError class</li><li><a href="class.yaf-exception-dispatchfailed.php">Yaf_Exception_DispatchFailed</a> — The Yaf_Exception_DispatchFailed class</li><li><a href="class.yaf-exception-routerfailed.php">Yaf_Exception_RouterFailed</a> — The Yaf_Exception_RouterFailed class</li><li><a href="class.yaf-exception-loadfailed.php">Yaf_Exception_LoadFailed</a> — The Yaf_Exception_LoadFailed class</li><li><a href="class.yaf-exception-loadfailed-module.php">Yaf_Exception_LoadFailed_Module</a> — The Yaf_Exception_LoadFailed_Module class</li><li><a href="class.yaf-exception-loadfailed-controller.php">Yaf_Exception_LoadFailed_Controller</a> — The Yaf_Exception_LoadFailed_Controller class</li><li><a href="class.yaf-exception-loadfailed-action.php">Yaf_Exception_LoadFailed_Action</a> — The Yaf_Exception_LoadFailed_Action class</li><li><a href="class.yaf-exception-loadfailed-view.php">Yaf_Exception_LoadFailed_View</a> — The Yaf_Exception_LoadFailed_View class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaf/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.yaf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.yaf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.yaf.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.other.php">Other Basic Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.geoip.php" title="GeoIP">GeoIP</a>
                        </li>
                                                <li class="">
                            <a href="book.fann.php" title="FANN">FANN</a>
                        </li>
                                                <li class="">
                            <a href="book.igbinary.php" title="Igbinary">Igbinary</a>
                        </li>
                                                <li class="">
                            <a href="book.json.php" title="JSON">JSON</a>
                        </li>
                                                <li class="">
                            <a href="book.simdjson.php" title="Simdjson">Simdjson</a>
                        </li>
                                                <li class="">
                            <a href="book.lua.php" title="Lua">Lua</a>
                        </li>
                                                <li class="">
                            <a href="book.luasandbox.php" title="LuaSandbox">LuaSandbox</a>
                        </li>
                                                <li class="">
                            <a href="book.misc.php" title="Misc.">Misc.</a>
                        </li>
                                                <li class="">
                            <a href="book.random.php" title="Random">Random</a>
                        </li>
                                                <li class="">
                            <a href="book.seaslog.php" title="Seaslog">Seaslog</a>
                        </li>
                                                <li class="">
                            <a href="book.spl.php" title="SPL">SPL</a>
                        </li>
                                                <li class="">
                            <a href="book.stream.php" title="Streams">Streams</a>
                        </li>
                                                <li class="">
                            <a href="book.swoole.php" title="Swoole">Swoole</a>
                        </li>
                                                <li class="">
                            <a href="book.tidy.php" title="Tidy">Tidy</a>
                        </li>
                                                <li class="">
                            <a href="book.tokenizer.php" title="Tokenizer">Tokenizer</a>
                        </li>
                                                <li class="">
                            <a href="book.url.php" title="URLs">URLs</a>
                        </li>
                                                <li class="">
                            <a href="book.v8js.php" title="V8js">V8js</a>
                        </li>
                                                <li class="">
                            <a href="book.yaml.php" title="Yaml">Yaml</a>
                        </li>
                                                <li class="current">
                            <a href="book.yaf.php" title="Yaf">Yaf</a>
                        </li>
                                                <li class="">
                            <a href="book.yaconf.php" title="Yaconf">Yaconf</a>
                        </li>
                                                <li class="">
                            <a href="book.taint.php" title="Taint">Taint</a>
                        </li>
                                                <li class="">
                            <a href="book.ds.php" title="Data Structures">Data Structures</a>
                        </li>
                                                <li class="">
                            <a href="book.var_representation.php" title="var_&#8203;representation">var_&#8203;representation</a>
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
