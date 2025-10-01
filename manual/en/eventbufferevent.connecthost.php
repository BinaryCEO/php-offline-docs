<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EventBufferEvent::connectHost - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/eventbufferevent.connecthost.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/eventbufferevent.connecthost.php">
 <link rel="alternate" href="https://www.php.net/manual/en/eventbufferevent.connecthost.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.eventbufferevent.php">
 <link rel="prev" href="https://www.php.net/manual/en/eventbufferevent.connect.php">
 <link rel="next" href="https://www.php.net/manual/en/eventbufferevent.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/eventbufferevent.connecthost.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/eventbufferevent.connecthost.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/eventbufferevent.connecthost.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/eventbufferevent.connecthost.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/eventbufferevent.connecthost.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/eventbufferevent.connecthost.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/eventbufferevent.connecthost.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/eventbufferevent.connecthost.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/eventbufferevent.connecthost.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/eventbufferevent.connecthost.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/eventbufferevent.connecthost.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connects to a hostname with optionally asyncronous DNS resolving" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EventBufferEvent::connectHost - Manual" />
<meta name="twitter:description" content="Connects to a hostname with optionally asyncronous DNS resolving" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EventBufferEvent::connectHost - Manual" />
<meta itemprop="description" content="Connects to a hostname with optionally asyncronous DNS resolving" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connects to a hostname with optionally asyncronous DNS resolving" />

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
        <a href="eventbufferevent.construct.php">
          EventBufferEvent::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="eventbufferevent.connect.php">
          &laquo; EventBufferEvent::connect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.event.php'>Event</a></li>      <li><a href='class.eventbufferevent.php'>EventBufferEvent</a></li>      </ul>
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
            <option value='en/eventbufferevent.connecthost.php' selected="selected">English</option>
            <option value='de/eventbufferevent.connecthost.php'>German</option>
            <option value='es/eventbufferevent.connecthost.php'>Spanish</option>
            <option value='fr/eventbufferevent.connecthost.php'>French</option>
            <option value='it/eventbufferevent.connecthost.php'>Italian</option>
            <option value='ja/eventbufferevent.connecthost.php'>Japanese</option>
            <option value='pt_BR/eventbufferevent.connecthost.php'>Brazilian Portuguese</option>
            <option value='ru/eventbufferevent.connecthost.php'>Russian</option>
            <option value='tr/eventbufferevent.connecthost.php'>Turkish</option>
            <option value='uk/eventbufferevent.connecthost.php'>Ukrainian</option>
            <option value='zh/eventbufferevent.connecthost.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="eventbufferevent.connecthost" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">EventBufferEvent::connectHost</h1>
  <p class="verinfo">(PECL event &gt;= 1.2.6-beta)</p><p class="refpurpose"><span class="refname">EventBufferEvent::connectHost</span> &mdash; <span class="dc-title">Connects to a hostname with optionally asyncronous DNS resolving</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-eventbufferevent.connecthost-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><strong>EventBufferEvent::connectHost</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventdnsbase.php" class="type EventDnsBase">EventDnsBase</a></span> <code class="parameter">$dns_base</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$family</code>
    <span class="initializer"> = EventUtil::AF_UNSPEC</span>
   </span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Resolves the DNS name hostname, looking for addresses of type
   <code class="parameter">family</code>
   (
   <code class="literal">EventUtil::AF_*</code>
   constants). If the name resolution fails, it invokes the event callback
   with an error event. If it succeeds, it launches a connection attempt just
   as
   <span class="methodname"><a href="eventbufferevent.connect.php" class="methodname">EventBufferEvent::connect()</a></span>
   would.
  </p>
  <p class="para">
   <code class="parameter">dns_base</code>
   is optional. May be <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, or an object created with
   <span class="methodname"><a href="eventdnsbase.construct.php" class="methodname">EventDnsBase::__construct()</a></span>.
   For asyncronous hostname resolving pass a valid event dns base resource.
   Otherwise the hostname resolving will block.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="classname"><a href="class.eventdnsbase.php" class="classname">EventDnsBase</a></span>
    is available only if
    <code class="literal">Event</code>
    configured
    <strong class="option configure">--with-event-extra</strong>
    (
    <code class="literal">event_extra</code>
    library,
    <em>libevent protocol-specific functionality support including HTTP, DNS, and RPC</em>
    ).
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="methodname"><strong>EventBufferEvent::connectHost()</strong></span>
    requires
    <code class="literal">libevent-2.0.3-alpha</code>
    or greater.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-eventbufferevent.connecthost-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt>
     <code class="parameter">dns_base</code>
    </dt>
    <dd>
     <p class="para">
      Object of
      <span class="classname"><a href="class.eventdnsbase.php" class="classname">EventDnsBase</a></span>
      in case if DNS is to be resolved asyncronously. Otherwise <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
     </p>
    </dd>
   
   
    <dt>
     <code class="parameter">hostname</code>
    </dt>
    <dd>
     <p class="para">
      Hostname to connect to. Recognized formats are:
<div class="example-contents screen">
<div class="parameterscode"><pre class="parameterscode">www.example.com (hostname)
 1.2.3.4 (ipv4address)
 ::1 (ipv6address)
[::1] ([ipv6address])</pre>
</div>
      </div>
     </p>
    </dd>
   
   
    <dt>
     <code class="parameter">port</code>
    </dt>
    <dd>
     <p class="para">
      Port number
     </p>
    </dd>
   
   
    <dt>
     <code class="parameter">family</code>
    </dt>
    <dd>
     <p class="para">
      Address family.
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-unspec">EventUtil::AF_UNSPEC</a></code></strong>,
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-inet">EventUtil::AF_INET</a></code></strong>,
      or
      <strong><code><a href="class.eventutil.php#eventutil.constants.af-inet6">EventUtil::AF_INET6</a></code></strong>.
      See
      <a href="class.eventutil.php#eventutil.constants" class="link">EventUtil constants</a>.
     </p>
    </dd>
   
  </dl>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-eventbufferevent.connecthost-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-eventbufferevent.connecthost-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-4531">
   <p><strong>Example #1 
    <span class="function"><strong>EventBufferEvent::connectHost()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Read callback */<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">readcb</span><span style="color: #007700">(</span><span style="color: #0000BB">$bev</span><span style="color: #007700">, </span><span style="color: #0000BB">$base</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">//$input = $bev-&gt;input; //$bev-&gt;getInput();<br /><br />    //$pos = $input-&gt;search("TTP");<br />    </span><span style="color: #0000BB">$pos </span><span style="color: #007700">= </span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">input</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">search</span><span style="color: #007700">(</span><span style="color: #DD0000">"TTP"</span><span style="color: #007700">);<br /><br />    while ((</span><span style="color: #0000BB">$n </span><span style="color: #007700">= </span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">input</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf</span><span style="color: #007700">, </span><span style="color: #0000BB">1024</span><span style="color: #007700">)) &gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$buf</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">/* Event callback */<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">eventcb</span><span style="color: #007700">(</span><span style="color: #0000BB">$bev</span><span style="color: #007700">, </span><span style="color: #0000BB">$events</span><span style="color: #007700">, </span><span style="color: #0000BB">$base</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$events </span><span style="color: #007700">&amp; </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">CONNECTED</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"Connected.\n"</span><span style="color: #007700">;<br />    } elseif (</span><span style="color: #0000BB">$events </span><span style="color: #007700">&amp; (</span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">EOF</span><span style="color: #007700">)) {<br />        if (</span><span style="color: #0000BB">$events </span><span style="color: #007700">&amp; </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">ERROR</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">"DNS error: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDnsErrorString</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />        }<br /><br />        echo </span><span style="color: #DD0000">"Closing\n"</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$base</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exit</span><span style="color: #007700">();<br />        exit(</span><span style="color: #DD0000">"Done\n"</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$base </span><span style="color: #007700">= new </span><span style="color: #0000BB">EventBase</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$dns_base </span><span style="color: #007700">= new </span><span style="color: #0000BB">EventDnsBase</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">, </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">); </span><span style="color: #FF8000">// We'll use async DNS resolving<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">$dns_base</span><span style="color: #007700">) {<br />    exit(</span><span style="color: #DD0000">"Failed to init DNS Base\n"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$bev </span><span style="color: #007700">= new </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">, </span><span style="color: #FF8000">/* use internal socket */ </span><span style="color: #0000BB">NULL</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">OPT_CLOSE_ON_FREE </span><span style="color: #007700">| </span><span style="color: #0000BB">EventBufferEvent</span><span style="color: #007700">::</span><span style="color: #0000BB">OPT_DEFER_CALLBACKS</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"readcb"</span><span style="color: #007700">, </span><span style="color: #FF8000">/* writecb */ </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #DD0000">"eventcb"</span><span style="color: #007700">, </span><span style="color: #0000BB">$base<br /></span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$bev</span><span style="color: #007700">) {<br />    exit(</span><span style="color: #DD0000">"Failed creating bufferevent socket\n"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">//$bev-&gt;setCallbacks("readcb", /* writecb */ NULL, "eventcb", $base);<br /></span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enable</span><span style="color: #007700">(</span><span style="color: #0000BB">Event</span><span style="color: #007700">::</span><span style="color: #0000BB">READ </span><span style="color: #007700">| </span><span style="color: #0000BB">Event</span><span style="color: #007700">::</span><span style="color: #0000BB">WRITE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">output</span><span style="color: #007700">; </span><span style="color: #FF8000">//$bev-&gt;getOutput();<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">$output</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">"GET </span><span style="color: #007700">{</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000"> HTTP/1.0\r\n"</span><span style="color: #007700">.<br />    </span><span style="color: #DD0000">"Host: </span><span style="color: #007700">{</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">\r\n"</span><span style="color: #007700">.<br />    </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"<br /></span><span style="color: #007700">)) {<br />    exit(</span><span style="color: #DD0000">"Failed adding request to output buffer\n"</span><span style="color: #007700">);<br />}<br /><br />if (!</span><span style="color: #0000BB">$bev</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectHost</span><span style="color: #007700">(</span><span style="color: #0000BB">$dns_base</span><span style="color: #007700">, </span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">80</span><span style="color: #007700">, </span><span style="color: #0000BB">EventUtil</span><span style="color: #007700">::</span><span style="color: #0000BB">AF_UNSPEC</span><span style="color: #007700">)) {<br />    exit(</span><span style="color: #DD0000">"Can't connect to host </span><span style="color: #007700">{</span><span style="color: #0000BB">$argv</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$base</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatch</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connected.
HTTP/1.0 301 Moved Permanently
Location: http://www.google.co.uk/
Content-Type: text/html; charset=UTF-8
Date: Sat, 09 Mar 2013 12:21:19 GMT
Expires: Mon, 08 Apr 2013 12:21:19 GMT
Cache-Control: public, max-age=2592000
Server: gws
Content-Length: 221
X-XSS-Protection: 1; mode=block
X-Frame-Options: SAMEORIGIN

&lt;HTML&gt;&lt;HEAD&gt;&lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html;charset=utf-8&quot;&gt;
&lt;TITLE&gt;301 Moved&lt;/TITLE&gt;&lt;/HEAD&gt;&lt;BODY&gt;
&lt;H1&gt;301 Moved&lt;/H1&gt;
The document has moved
&lt;A HREF=&quot;http://www.google.co.uk/&quot;&gt;here&lt;/A&gt;.
&lt;/BODY&gt;&lt;/HTML&gt;
Closing
Done</pre>
</div>
   </div>
  </div>
 </div>

 <div class="refsect1 seealso" id="refsect1-eventbufferevent.connecthost-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li>
    <span class="methodname"><a href="eventbufferevent.connect.php" class="methodname" rel="rdfs-seeAlso">EventBufferEvent::connect()</a> - Connect buffer event's file descriptor to given address or
  UNIX socket</span>
   </li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/event/eventbufferevent/connecthost.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Feventbufferevent.connecthost%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=eventbufferevent.connecthost&amp;repo=en&amp;redirect=https://www.php.net/manual/en/eventbufferevent.connecthost.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.eventbufferevent.php">EventBufferEvent</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="eventbufferevent.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.connect.php" title="connect">connect</a>
                        </li>
                                                <li class="current">
                            <a href="eventbufferevent.connecthost.php" title="connectHost">connectHost</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.createpair.php" title="createPair">createPair</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.disable.php" title="disable">disable</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.enable.php" title="enable">enable</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.free.php" title="free">free</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.getdnserrorstring.php" title="getDnsErrorString">getDnsErrorString</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.getenabled.php" title="getEnabled">getEnabled</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.getinput.php" title="getInput">getInput</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.getoutput.php" title="getOutput">getOutput</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.read.php" title="read">read</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.readbuffer.php" title="readBuffer">readBuffer</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.setcallbacks.php" title="setCallbacks">setCallbacks</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.setpriority.php" title="setPriority">setPriority</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.settimeouts.php" title="setTimeouts">setTimeouts</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.setwatermark.php" title="setWatermark">setWatermark</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslerror.php" title="sslError">sslError</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslfilter.php" title="sslFilter">sslFilter</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslgetcipherinfo.php" title="sslGetCipherInfo">sslGetCipherInfo</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslgetciphername.php" title="sslGetCipherName">sslGetCipherName</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslgetcipherversion.php" title="sslGetCipherVersion">sslGetCipherVersion</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslgetprotocol.php" title="sslGetProtocol">sslGetProtocol</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslrenegotiate.php" title="sslRenegotiate">sslRenegotiate</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.sslsocket.php" title="sslSocket">sslSocket</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.write.php" title="write">write</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.writebuffer.php" title="writeBuffer">writeBuffer</a>
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
