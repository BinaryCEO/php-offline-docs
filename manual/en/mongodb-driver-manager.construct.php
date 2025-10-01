<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\Manager::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mongodb-driver-manager.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mongodb-driver-manager.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mongodb-driver-manager.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mongodb-driver-manager.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-manager.addsubscriber.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-manager.createclientencryption.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mongodb-driver-manager.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mongodb-driver-manager.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mongodb-driver-manager.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mongodb-driver-manager.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mongodb-driver-manager.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mongodb-driver-manager.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mongodb-driver-manager.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mongodb-driver-manager.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mongodb-driver-manager.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mongodb-driver-manager.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mongodb-driver-manager.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create new MongoDB Manager" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\Manager::__construct - Manual" />
<meta name="twitter:description" content="Create new MongoDB Manager" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\Manager::__construct - Manual" />
<meta itemprop="description" content="Create new MongoDB Manager" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create new MongoDB Manager" />

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
        <a href="mongodb-driver-manager.createclientencryption.php">
          MongoDB\Driver\Manager::createClientEncryption &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-manager.addsubscriber.php">
          &laquo; MongoDB\Driver\Manager::addSubscriber        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.mongodb.php'>MongoDB</a></li>      <li><a href='mongodb.mongodb.php'>MongoDB\Driver</a></li>      <li><a href='class.mongodb-driver-manager.php'>MongoDB\Driver\Manager</a></li>      </ul>
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
            <option value='en/mongodb-driver-manager.construct.php' selected="selected">English</option>
            <option value='de/mongodb-driver-manager.construct.php'>German</option>
            <option value='es/mongodb-driver-manager.construct.php'>Spanish</option>
            <option value='fr/mongodb-driver-manager.construct.php'>French</option>
            <option value='it/mongodb-driver-manager.construct.php'>Italian</option>
            <option value='ja/mongodb-driver-manager.construct.php'>Japanese</option>
            <option value='pt_BR/mongodb-driver-manager.construct.php'>Brazilian Portuguese</option>
            <option value='ru/mongodb-driver-manager.construct.php'>Russian</option>
            <option value='tr/mongodb-driver-manager.construct.php'>Turkish</option>
            <option value='uk/mongodb-driver-manager.construct.php'>Ukrainian</option>
            <option value='zh/mongodb-driver-manager.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mongodb-driver-manager.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">MongoDB\Driver\Manager::__construct</h1>
  <p class="verinfo">(mongodb &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">MongoDB\Driver\Manager::__construct</span> &mdash; <span class="dc-title">Create new MongoDB Manager</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mongodb-driver-manager.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><strong>MongoDB\Driver\Manager::__construct</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$uri</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$uriOptions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$driverOptions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

  <p class="para rdfs-comment">
   Constructs a new <span class="classname"><a href="class.mongodb-driver-manager.php" class="classname">MongoDB\Driver\Manager</a></span> object with the specified options.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Per the <a href="https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md#single-threaded-client-construction" class="link external">&raquo;&nbsp;Server Discovery and Monitoring Specification</a>,
    this constructor performs no I/O. Connections will be initialized on demand,
    when the first operation is executed.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    When specifying any SSL or TLS URI options via the connection string or
    <code class="parameter">uriOptions</code> parameter, the extension will implicitly
    enable TLS for its connections. To avoid this, either explicitly disable the
    <code class="literal">tls</code> option or don&#039;t specify any TLS options.
   </span>
  </p></blockquote>
  
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     On Unix platforms, the extension is sensitive to scripts that use the
     fork() system call without also calling exec(). Users are advised not to
     re-use <span class="classname"><a href="class.mongodb-driver-manager.php" class="classname">MongoDB\Driver\Manager</a></span> instances in a forked
     child process.
    </span>
   </p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-mongodb-driver-manager.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt id="mongodb-driver-manager.construct-uri"><code class="parameter">uri</code></dt>
    <dd>
     <p class="para">
      A <a href="https://www.mongodb.com/docs/manual/reference/connection-string/" class="link external">&raquo;&nbsp;mongodb://</a> connection URI:
      <div class="example-contents">
<div class="txtcode"><pre class="txtcode">mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[defaultAuthDb][?options]]</pre>
</div>
      </div>

     </p>
     <p class="para">
      Defaults to <code class="literal">&quot;mongodb://127.0.0.1:27017&quot;</code> if unspecified.
     </p>
     <p class="para">
      For details on supported URI options, see
      <a href="https://www.mongodb.com/docs/manual/reference/connection-string/#connections-connection-options" class="link external">&raquo;&nbsp;Connection String Options</a>
      in the MongoDB manual.
      <a href="https://www.mongodb.com/docs/manual/reference/connection-string/#connection-pool-options" class="link external">&raquo;&nbsp;Connection pool options</a>
      are not supported, as the extension does not implement connection pools.
     </p>
     <p class="para">
      The <code class="parameter">uri</code> is a URL, hence any special characters in
      its components need to be URL encoded according to
      <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">&raquo;&nbsp;RFC 3986</a>. This is particularly
      relevant to the username and password, which can often include special
      characters such as <code class="literal">@</code>, <code class="literal">:</code>, or
      <code class="literal">%</code>. When connecting via a Unix domain socket, the socket
      path may contain special characters such as slashes and must be encoded.
      The <span class="function"><a href="function.rawurlencode.php" class="function">rawurlencode()</a></span> function may be used to encode
      constituent parts of the URI.
     </p>
     <p class="para">
      The <code class="literal">defaultAuthDb</code> component may be used to specify the
      database name associated with the user&#039;s credentials; however the
      <code class="literal">authSource</code> URI option will take priority if specified.
      If neither <code class="literal">defaultAuthDb</code> nor
      <code class="literal">authSource</code> are specified, the <code class="literal">admin</code>
      database will be used by default. The <code class="literal">defaultAuthDb</code>
      component has no effect in the absence of user credentials.
     </p>
    </dd>
   
   
    <dt id="mongodb-driver-manager.construct-urioptions"><code class="parameter">uriOptions</code></dt>
    <dd>
     <p class="para">
      Additional
      <a href="https://www.mongodb.com/docs/manual/reference/connection-string/#connections-connection-options" class="link external">&raquo;&nbsp;connection string options</a>,
      which will overwrite any options with the same name in the
      <code class="parameter">uri</code> parameter.
     </p>
     <p class="para">
      <table class="doctable table">
       <caption><strong>uriOptions</strong></caption>
       
        <thead>
         <tr>
          <th>Option</th>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>appname</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            MongoDB 3.4+ has the ability to annotate connections with metadata
            provided by the connecting client. This metadata is included in the
            server&#039;s logs upon establishing a connection and also recorded in
            slow query logs when database profiling is enabled.
           </p>
           <p class="para">
            This option may be used to specify an application name, which will
            be included in the metadata. The value cannot exceed 128 characters
            in length.
           </p>
          </td>
         </tr>

         <tr>
          <td>authMechanism</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            The authentication mechanism that MongoDB will use to authenticate
            the connection. For additional details and a list of supported
            values, see
            <a href="https://www.mongodb.com/docs/manual/reference/connection-string/#urioption.authMechanism" class="link external">&raquo;&nbsp;Authentication Options</a>
            in the MongoDB manual.
           </p>
          </td>
         </tr>

         <tr>
          <td>authMechanismProperties</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            Properties for the selected authentication mechanism. For additional
            details and a list of supported properties, see the
            <a href="https://github.com/mongodb/specifications/blob/master/source/auth/auth.rst#auth-related-options" class="link external">&raquo;&nbsp;Driver Authentication Specification</a>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             When not specified in the URI string, this option is expressed as
             an array of key/value pairs. The keys and values in this array
             should be strings.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>authSource</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            The database name associated with the user&#039;s credentials. Defaults
            to the database component of the connection URI, or the
            <code class="literal">admin</code> database if both are unspecified.
           </p>
           <p class="para">
            For authentication mechanisms that delegate credential storage to
            other services (e.g. GSSAPI), this should be
            <code class="literal">&quot;$external&quot;</code>.
           </p>
          </td>
         </tr>

         <tr>
          <td>compressors</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            A prioritized, comma-delimited list of compressors that the client
            wants to use. Messages are only compressed if the client and server
            share any compressors in common, and the compressor used in each
            direction will depend on the individual configuration of the server
            or driver. See the
            <a href="https://github.com/mongodb/specifications/blob/master/source/compression/OP_COMPRESSED.rst#compressors" class="link external">&raquo;&nbsp;Driver Compression Specification</a>
            for more information.
           </p>
          </td>
         </tr>

         <tr id="mongodb-driver-manager.construct-urioptions.connecttimeoutms">
          <td>connectTimeoutMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            The time in milliseconds to attempt a connection before timing out.
            Defaults to 10,000 milliseconds.
           </p>
          </td>
         </tr>

         <tr>
          <td>directConnection</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            This option can be used to control replica set discovery behavior
            when only a single host is provided in the connection string. By
            default, providing a single member in the connection string will
            establish a direct connection or discover additional members
            depending on whether the <code class="literal">&quot;replicaSet&quot;</code> URI option
            is omitted or present, respectively. Specify <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to force
            discovery to occur (if <code class="literal">&quot;replicaSet&quot;</code> is omitted)
            or specify <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to force a direct connection (if
            <code class="literal">&quot;replicaSet&quot;</code> is present).
           </p>
          </td>
         </tr>

         <tr>
          <td>heartbeatFrequencyMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            Specifies the interval in milliseconds between the driver&#039;s checks
            of the MongoDB topology, counted from the end of the previous check
            until the beginning of the next one. Defaults to 60,000
            milliseconds.
           </p>
           <p class="para">
            Per the
            <a href="https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md#heartbeatfrequencyms" class="link external">&raquo;&nbsp;Server Discovery and Monitoring Specification</a>,
            this value cannot be less than 500 milliseconds.
           </p>
          </td>
         </tr>

         <tr>
          <td>journal</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Corresponds to the default write concern&#039;s
            <code class="parameter">journal</code> parameter. If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, writes will
            require acknowledgement from MongoDB that the operation has been
            written to the journal. For details, see
            <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span>.
           </p>
          </td>
         </tr>

         <tr>
          <td>loadBalanced</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Specifies whether the driver is connecting to a MongoDB cluster
            through a load balancer. If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the driver may only connect to a
            single host (specified by either the connection string or SRV
            lookup), the <code class="literal">&quot;directConnection&quot;</code> URI option
            cannot be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, and the <code class="literal">&quot;replicaSet&quot;</code> URI option
            must be omitted. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>localThresholdMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            The size in milliseconds of the latency window for selecting among
            multiple suitable MongoDB instances while resolving a read
            preference. Defaults to 15 milliseconds.
           </p>
          </td>
         </tr>

         <tr>
          <td>maxStalenessSeconds</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            Corresponds to the read preference&#039;s
            <code class="literal">&quot;maxStalenessSeconds&quot;</code>. Specifies, in seconds, how
            stale a secondary can be before the client stops using it for read
            operations. By default, there is no maximum staleness and clients
            will not consider a secondary’s lag when choosing where to direct a
            read operation. For details, see
            <span class="classname"><a href="class.mongodb-driver-readpreference.php" class="classname">MongoDB\Driver\ReadPreference</a></span>.
           </p>
           <p class="para">
            If specified, the max staleness must be a signed 32-bit integer
            greater than or equal to
            <strong><code><a href="class.mongodb-driver-readpreference.php#mongodb-driver-readpreference.constants.smallest-max-staleness-seconds">MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</a></code></strong>
            (i.e. 90 seconds).
           </p>
          </td>
         </tr>

         <tr>
          <td>password</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           The password for the user being authenticated. This option is useful
           if the password contains special characters, which would otherwise
           need to be URL encoded for the connection URI.
          </td>
         </tr>

         <tr>
          <td>readConcernLevel</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           Corresponds to the read concern&#039;s <code class="parameter">level</code>
           parameter. Specifies the level of read isolation. For details, see
           <span class="classname"><a href="class.mongodb-driver-readconcern.php" class="classname">MongoDB\Driver\ReadConcern</a></span>.
          </td>
         </tr>

         <tr>
          <td>readPreference</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Corresponds to the read preference&#039;s <code class="parameter">mode</code>
            parameter. Defaults to <code class="literal">&quot;primary&quot;</code>. For details,
            see <span class="classname"><a href="class.mongodb-driver-readpreference.php" class="classname">MongoDB\Driver\ReadPreference</a></span>.
           </p>
          </td>
         </tr>

         <tr>
          <td>readPreferenceTags</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            Corresponds to the read preference&#039;s <code class="parameter">tagSets</code>
            parameter. Tag sets allow you to target read operations to specific
            members of a replica set. For details, see
            <span class="classname"><a href="class.mongodb-driver-readpreference.php" class="classname">MongoDB\Driver\ReadPreference</a></span>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             When not specified in the URI string, this option is expressed as
             an array consistent with the format expected by
             <span class="function"><a href="mongodb-driver-readpreference.construct.php" class="function">MongoDB\Driver\ReadPreference::__construct()</a></span>.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>replicaSet</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Specifies the name of the replica set.
           </p>
          </td>
         </tr>

         <tr>
          <td>retryReads</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Specifies whether or not the driver should automatically retry
            certain read operations that fail due to transient network errors
            or replica set elections. This functionality requires MongoDB 3.6+.
            Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
           </p>
           <p class="para">
            See the
            <a href="https://github.com/mongodb/specifications/blob/master/source/retryable-reads/retryable-reads.rst" class="link external">&raquo;&nbsp;Retryable Reads Specification</a>
            for more information.
           </p>
          </td>
         </tr>

         <tr>
          <td>retryWrites</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Specifies whether or not the driver should automatically retry
            certain write operations that fail due to transient network errors
            or replica set elections. This functionality requires MongoDB 3.6+.
            Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
           </p>
           <p class="para">
            See
            <a href="https://www.mongodb.com/docs/manual/core/retryable-writes/" class="link external">&raquo;&nbsp;Retryable Writes</a>
            in the MongoDB manual for more information.
           </p>
          </td>
         </tr>

         <tr id="mongodb-driver-manager.construct-urioptions.serverselectiontimeoutms">
          <td>serverSelectionTimeoutMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            Specifies how long in milliseconds to block for server selection
            before throwing an exception. Defaults to 30,000 milliseconds.
           </p>
          </td>
         </tr>

         <tr>
          <td>serverSelectionTryOnce</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            When <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, instructs the driver to scan the MongoDB deployment
            exactly once after server selection fails and then either select a
            server or raise an error. When <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, the driver blocks and
            searches for a server up to the
            <code class="literal">&quot;serverSelectionTimeoutMS&quot;</code> value. Defaults to
            <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>socketCheckIntervalMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            If a socket has not been used recently, the driver must check it via
            a <code class="literal">hello</code> command before using it for any
            operation. Defaults to 5,000 milliseconds.
           </p>
          </td>
         </tr>

         <tr>
          <td>socketTimeoutMS</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            The time in milliseconds to attempt a send or receive on a socket
            before timing out. Defaults to 300,000 milliseconds (i.e. five
            minutes).
           </p>
          </td>
         </tr>

         <tr>
          <td>srvMaxHosts</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            The maximum number of SRV results to randomly select when initially
            populating the seedlist or, during SRV polling, adding new hosts to
            the topology. Defaults to <code class="literal">0</code> (i.e. no maximum).
           </p>
          </td>
         </tr>

         <tr>
          <td>srvServiceName</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            The service name to use for SRV lookup in initial DNS seedlist
            discovery and SRV polling. Defaults to <code class="literal">&quot;mongodb&quot;</code>.
           </p>
          </td>
         </tr>

         <tr>
          <td>tls</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Initiates the connection with TLS/SSL if <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. Defaults to
            <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsAllowInvalidCertificates</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Specifies whether or not the driver should error when the server&#039;s
            TLS certificate is invalid. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
           <div class="warning"><strong class="warning">Warning</strong>
            <p class="simpara">
             Disabling certificate validation creates a vulnerability.
            </p>
           </div>
          </td>
         </tr>

         <tr>
          <td>tlsAllowInvalidHostnames</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Specifies whether or not the driver should error when there is a
            mismatch between the server&#039;s hostname and the hostname specified by
            the TLS certificate. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
           <div class="warning"><strong class="warning">Warning</strong>
            <p class="simpara">
             Disabling certificate validation creates a vulnerability. Allowing
             invalid hostnames may expose the driver to a
             <a href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack" class="link external">&raquo;&nbsp;man-in-the-middle attack</a>.
            </p>
           </div>
          </td>
         </tr>

         <tr>
          <td>tlsCAFile</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Path to file with either a single or bundle of certificate
            authorities to be considered trusted when making a TLS connection.
            The system certificate store will be used by default.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsCertificateKeyFile</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Path to the client certificate file or the client private key file;
            in the case that they both are needed, the files should be
            concatenated.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsCertificateKeyFilePassword</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Password to decrypt the client private key (i.e.
            <code class="literal">&quot;tlsCertificateKeyFile&quot;</code> URI option) to be used
            for TLS connections.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsDisableCertificateRevocationCheck</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the driver will not attempt to check certificate
            revocation status (e.g. OCSP, CRL). Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsDisableOCSPEndpointCheck</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the driver will not attempt to contact an OCSP responder
            endpoint if needed (i.e. an OCSP response is not stapled). Defaults
            to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>tlsInsecure</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            Relax TLS constraints as much as possible. Specifying <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for
            this option has the same effect as specifying <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for both the
            <code class="literal">&quot;tlsAllowInvalidCertificates&quot;</code> and
            <code class="literal">&quot;tlsAllowInvalidHostnames&quot;</code> URI options. Defaults
            to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
           <div class="warning"><strong class="warning">Warning</strong>
            <p class="simpara">
             Disabling certificate validation creates a vulnerability. Allowing
             invalid hostnames may expose the driver to a
             <a href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack" class="link external">&raquo;&nbsp;man-in-the-middle attack</a>.
            </p>
           </div>
          </td>
         </tr>

         <tr>
          <td>username</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           The username for the user being authenticated. This option is useful
           if the username contains special characters, which would otherwise
           need to be URL encoded for the connection URI.
          </td>
         </tr>

         <tr>
          <td>w</td>
          <td><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></td>
          <td>
           <p class="para">
            Corresponds to the default write concern&#039;s <code class="parameter">w</code>
            parameter. For details, see
            <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span>.
           </p>
          </td>
         </tr>

         <tr>
          <td>wTimeoutMS</td>
          <td><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></td>
          <td>
           <p class="para">
            Corresponds to the default write concern&#039;s
            <code class="parameter">wtimeout</code> parameter. Specifies a time limit,
            in milliseconds, for the write concern. For details, see
            <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span>.
           </p>
           <p class="para">
            If specified, <code class="literal">wTimeoutMS</code> must be a signed 32-bit
            integer greater than or equal to zero.
           </p>
          </td>
         </tr>

         <tr>
          <td>zlibCompressionLevel</td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <p class="para">
            Specifies the compression level to use for the zlib compressor. This
            option has no effect if <code class="literal">zlib</code> is not included in
            the <code class="literal">&quot;compressors&quot;</code> URI option. See the
            <a href="https://github.com/mongodb/specifications/blob/master/source/compression/OP_COMPRESSED.rst#zlibcompressionlevel" class="link external">&raquo;&nbsp;Driver Compression Specification</a>
            for more information.
           </p>
          </td>
         </tr>

        </tbody>
       
      </table>

     </p>
    </dd>
   
   
    <dt id="mongodb-driver-manager.construct-driveroptions"><code class="parameter">driverOptions</code></dt>
    <dd>
     <p class="para">
      <table class="doctable table">
       <caption><strong>driverOptions</strong></caption>
       
        <thead>
         <tr>
          <th>Option</th>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>autoEncryption</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            Provides options to enable automatic client-side field level
            encryption. The list of options is described in the <a href="mongodb-driver-manager.construct.php#mongodb-driver-manager.construct-autoencryption" class="link">table below</a>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <p class="para">
             Automatic encryption is an enterprise-only feature that only
             applies to operations on a collection. Automatic encryption is not
             supported for operations on a database or view, and operations that
             are not bypassed will result in error (see
             <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#libmongocrypt-auto-encryption-allow-list" class="link external">&raquo;&nbsp;libmongocrypt: Auto Encryption Allow-List</a>). To bypass automatic encryption
             for all operations, set <code class="literal">bypassAutoEncryption</code> to
             <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
            </p>
            <p class="para">
             Automatic encryption requires the authenticated user to have the
             <a href="https://www.mongodb.com/docs/manual/reference/command/listCollections/#required-access" class="link external">&raquo;&nbsp;listCollections</a>
             privilege action.
            </p>
            <p class="para">
             Explicit encryption/decryption and automatic decryption is a
             community feature. The driver can still automatically decrypt when
             <code class="literal">bypassAutoEncryption</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
            </p>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>ca_dir</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>
           <p class="para">
            Path to a correctly hashed certificate directory. The system
            certificate store will be used by default.
           </p>
          </td>
         </tr>

         <tr>
          <td>crl_file</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>Path to a certificate revocation list file.</td>
         </tr>

         <tr>
          <td>disableClientPersistence</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, this Manager will use a new libmongoc client, which will
            not be persisted or shared with other Manager objects. When this
            Manager object is freed, its client will be destroyed and any
            connections will be closed. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             Disabling client persistence is not generally recommended.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>driver</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            Allows a higher level library to append its own metadata to the
            server handshake. By default, the extension submits its own name,
            version, and platform (i.e. PHP version) in the handshake. Strings
            can be specified for the <code class="literal">&quot;name&quot;</code>,
            <code class="literal">&quot;version&quot;</code>, and <code class="literal">&quot;platform&quot;</code> keys
            of this array, and will be appended to the respective field(s) in
            the handshake document.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             Handshake information is limited to 512 bytes. The extension will
             truncate handshake data to fit within this 512-byte string. Higher
             level libraries are encouraged to keep their own metadata concise.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>serverApi</td>
          <td><span class="classname"><a href="class.mongodb-driver-serverapi.php" class="classname">MongoDB\Driver\ServerApi</a></span></td>
          <td>
           <p class="para">
            This option is used to declare a server API version for the manager.
            If omitted, no API version is declared.
           </p>
          </td>
         </tr>

        </tbody>
       
      </table>

     </p>
     <p class="para" id="mongodb-driver-manager.construct-autoencryption">
      Options supported by automatic encryption through the <code class="literal">autoEncryption</code> driver option:
      <table class="doctable table">
       <caption><strong>autoEncryption</strong></caption>
       
        <thead>
         <tr>
          <th>Option</th>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         
         <tr>
          <td>keyVaultClient</td>
          <td><span class="classname"><a href="class.mongodb-driver-manager.php" class="classname">MongoDB\Driver\Manager</a></span></td>
          <td>The Manager used to route data key queries to a separate MongoDB cluster. By default, the current Manager and cluster is used.</td>
         </tr>


         
         <tr>
          <td>keyVaultNamespace</td>
          <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
          <td>A fully qualified namespace (e.g. <code class="literal">&quot;databaseName.collectionName&quot;</code>) denoting the collection that contains all data keys used for encryption and decryption. This option is required.</td>
         </tr>


         
         <tr>
          <td>kmsProviders</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            A document containing the configuration for one or more KMS providers, which are used to encrypt data keys. Supported providers include <code class="literal">&quot;aws&quot;</code>, <code class="literal">&quot;azure&quot;</code>, <code class="literal">&quot;gcp&quot;</code>, <code class="literal">&quot;kmip&quot;</code>, and <code class="literal">&quot;local&quot;</code> and at least one must be specified.
           </p>
           <p class="para">
            If an empty document is specified for <code class="literal">&quot;aws&quot;</code>,
            <code class="literal">&quot;azure&quot;</code>, or <code class="literal">&quot;gcp&quot;</code>, the driver
            will attempt to configure the provider using
            <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials" class="link external">&raquo;&nbsp;Automatic Credentials</a>.
           </p>
           <p class="para">
            The format for <code class="literal">&quot;aws&quot;</code> is as follows:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">aws: {
    accessKeyId: &lt;string&gt;,
    secretAccessKey: &lt;string&gt;,
    sessionToken: &lt;optional string&gt;
}</pre>
</div>
           </div>

           <p class="para">
            The format for <code class="literal">&quot;azure&quot;</code> is as follows:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">azure: {
    tenantId: &lt;string&gt;,
    clientId: &lt;string&gt;,
    clientSecret: &lt;string&gt;,
    identityPlatformEndpoint: &lt;optional string&gt; // Defaults to &quot;login.microsoftonline.com&quot;
}</pre>
</div>
           </div>

           <p class="para">
            The format for <code class="literal">&quot;gcp&quot;</code> is as follows:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">gcp: {
    email: &lt;string&gt;,
    privateKey: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt;,
    endpoint: &lt;optional string&gt; // Defaults to &quot;oauth2.googleapis.com&quot;
}</pre>
</div>
           </div>

           <p class="para">
            The format for <code class="literal">&quot;kmip&quot;</code> is as follows:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">kmip: {
    endpoint: &lt;string&gt;
}</pre>
</div>
           </div>

           <p class="para">
            The format for <code class="literal">&quot;local&quot;</code> is as follows:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">local: {
    // 96-byte master key used to encrypt/decrypt data keys
    key: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt;
}</pre>
</div>
           </div>

          </td>
         </tr>


         
         <tr>
          <td>tlsOptions</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            A document containing the TLS configuration for one or more KMS providers. Supported providers include <code class="literal">&quot;aws&quot;</code>, <code class="literal">&quot;azure&quot;</code>, <code class="literal">&quot;gcp&quot;</code>, and <code class="literal">&quot;kmip&quot;</code>. All providers support the following options:
           </p>
           <div class="example-contents">
<div class="javascriptcode"><pre class="javascriptcode">&lt;provider&gt;: {
    tlsCaFile: &lt;optional string&gt;,
    tlsCertificateKeyFile: &lt;optional string&gt;,
    tlsCertificateKeyFilePassword: &lt;optional string&gt;,
    tlsDisableOCSPEndpointCheck: &lt;optional bool&gt;
}</pre>
</div>
           </div>

          </td>
         </tr>


         <tr>
          <td>schemaMap</td>
          <td><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span></td>
          <td>
           <p class="para">
            Map of collection namespaces to a local JSON schema. This is
            used to configure automatic encryption. See
            <a href="https://www.mongodb.com/docs/manual/reference/security-client-side-automatic-json-schema/" class="link external">&raquo;&nbsp;Automatic Encryption Rules</a>
            in the MongoDB manual for more information. It is an error to
            specify a collection in both <code class="literal">schemaMap</code> and
            <code class="literal">encryptedFieldsMap</code>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             Supplying a <code class="literal">schemaMap</code> provides more
             security than relying on JSON schemas obtained from the
             server. It protects against a malicious server advertising a
             false JSON schema, which could trick the client into sending
             unencrypted data that should be encrypted.
            </span>
           </p></blockquote>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             Schemas supplied in the <code class="literal">schemaMap</code> only
             apply to configuring automatic encryption for client side
             encryption. Other validation rules in the JSON schema will
             not be enforced by the driver and will result in an error.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>bypassAutoEncryption</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, <code class="literal">mongocryptd</code> will not be spawned
           automatically. This is used to disable automatic encryption.
           Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
          </td>
         </tr>

         <tr>
          <td>bypassQueryAnalysis</td>
          <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
          <td>
           <p class="para">
            If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, automatic analysis of outgoing commands will be
            disabled and <code class="literal">mongocryptd</code> will not be
            spawned automatically. This enables the use case of explicit
            encryption for querying indexed fields without requiring the
            enterprise licensed <code class="literal">crypt_shared</code> library or
            <code class="literal">mongocryptd</code> process. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
           </p>
          </td>
         </tr>

         <tr>
          <td>encryptedFieldsMap</td>
          <td><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span></td>
          <td>
           <p class="para">
            Map of collection namespaces to an
            <code class="literal">encryptedFields</code> document. This is used to
            configure queryable encryption. See
            <a href="https://www.mongodb.com/docs/manual/core/queryable-encryption/fundamentals/encrypt-and-query/" class="link external">&raquo;&nbsp;Field Encryption and Queryability</a>
            in the MongoDB manual for more information. It is an error to
            specify a collection in both
            <code class="literal">encryptedFieldsMap</code> and
            <code class="literal">schemaMap</code>.
           </p>
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <span class="simpara">
             Supplying an <code class="literal">encryptedFieldsMap</code> provides
             more security than relying on an
             <code class="literal">encryptedFields</code> obtained from the server.
             It protects against a malicious server advertising a false
             <code class="literal">encryptedFields</code>.
            </span>
           </p></blockquote>
          </td>
         </tr>

         <tr>
          <td>extraOptions</td>
          <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
          <td>
           <p class="para">
            The <code class="literal">extraOptions</code> relate to the
            <code class="literal">mongocryptd</code> process. The following options
            are supported:
           </p>
           <ul class="simplelist">
            <li><code class="literal">mongocryptdURI</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>): URI to connect to an existing <code class="literal">mongocryptd</code> process. Defaults to <code class="literal">&quot;mongodb://localhost:27020&quot;</code>.</li>
            <li><code class="literal">mongocryptdBypassSpawn</code> (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>): If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, prevent the driver from spawning <code class="literal">mongocryptd</code>. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</li>
            <li><code class="literal">mongocryptdSpawnPath</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>): Absolute path to search for <code class="literal">mongocryptd</code> binary. Defaults to empty string and consults system paths.</li>
            <li><code class="literal">mongocryptdSpawnArgs</code> (<span class="type"><a href="language.types.array.php" class="type array">array</a></span>): Array of string arguments to pass to <code class="literal">mongocryptd</code> when spawning. Defaults to <code class="literal">[&quot;--idleShutdownTimeoutSecs=60&quot;]</code>.</li>
            <li><code class="literal">cryptSharedLibPath</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>): Absolute path to <code class="literal">crypt_shared</code> shared library. Defaults to empty string and consults system paths.</li>
            <li><code class="literal">cryptSharedLibRequired</code> (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>): If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, require the driver to load <code class="literal">crypt_shared</code>. Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</li>
           </ul>
           <p class="para">
            See the <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#extraoptions" class="link external">&raquo;&nbsp;Client-Side Encryption Specification</a> for more information.
           </p>
          </td>
         </tr>

        </tbody>
       
      </table>

      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Automatic encryption is an enterprise only feature that only
        applies to operations on a collection. Automatic encryption is not
        supported for operations on a database or view, and operations that
        are not bypassed will result in error. To bypass automatic
        encryption for all operations, set <code class="literal">bypassAutoEncryption=true</code>
        in <code class="literal">autoEncryption</code>. For more information on
        allowed operations, see the
        <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#libmongocrypt-auto-encryption-whitelist" class="link external">&raquo;&nbsp;Client-Side Encryption Specification</a>.
       </span>
      </p></blockquote>
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 errors" id="refsect1-mongodb-driver-manager.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="simplelist">
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> on argument parsing errors.</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-runtimeexception.php" class="classname">MongoDB\Driver\Exception\RuntimeException</a></span> if the <code class="parameter">uri</code> format is invalid</li>
  </ul>
 </div>


 <div class="refsect1 changelog" id="refsect1-mongodb-driver-manager.construct-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>PECL mongodb 2.0.0</td>
       <td>
        <p class="para">
         The <code class="literal">&quot;canonicalizeHostname&quot;</code> URI option was removed.
         Use the <code class="literal">&quot;CANONICALIZE_HOST_NAME&quot;</code> property of the
         <code class="literal">&quot;authMechanismProperties&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;gssapiServiceName&quot;</code> URI option was removed.
         Use the <code class="literal">&quot;SERVICE_NAME&quot;</code> property of the
         <code class="literal">&quot;authMechanismProperties&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;safe&quot;</code> URI option was removed. Use the
         <code class="literal">&quot;w&quot;</code> and <code class="literal">&quot;wTimeoutMS&quot;</code> URI options
         instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;ssl&quot;</code> URI option was removed. Use the
         <code class="literal">&quot;tls&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;allow_invalid_hostname&quot;</code> driver option was
         removed. Use the <code class="literal">&quot;tlsAllowInvalidHostnames&quot;</code> URI
         option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;ca_file&quot;</code> driver option was removed. Use the
         <code class="literal">&quot;tlsCAFile&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;context&quot;</code> driver option was removed. All context
         options were deprecated in favor of the various URI options related to
         TLS.
        </p>
        <p class="para">
         The <code class="literal">&quot;pem_file&quot;</code> driver option was removed. Use the
         <code class="literal">&quot;tlsCertificateKeyFile&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;pem_pwd&quot;</code> driver option was removed. Use the
         <code class="literal">&quot;tlsCertificateKeyFilePassword&quot;</code> URI option instead.
        </p>
        <p class="para">
         The <code class="literal">&quot;weak_cert_validation&quot;</code> driver option was removed.
         Use the <code class="literal">&quot;tlsAllowInvalidCertificates&quot;</code> URI option
         instead.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.16.0</td>
       <td>
        <p class="para">
         The AWS KMS provider for client-side encryption now accepts a
         <code class="literal">&quot;sessionToken&quot;</code> option, which can be used to
         authenticate with temporary AWS credentials.
        </p>
        <p class="para">
         Added <code class="literal">&quot;tlsDisableOCSPEndpointCheck&quot;</code> to the
         <code class="literal">&quot;tlsOptions&quot;</code> field of the
         <code class="literal">&quot;autoEncryption&quot;</code> driver option.
        </p>
        <p class="para">
         If an empty document is specified for the <code class="literal">&quot;azure&quot;</code> or
         <code class="literal">&quot;gcp&quot;</code> KMS provider, the driver will attempt to
         configure the provider using
         <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials" class="link external">&raquo;&nbsp;Automatic Credentials</a>.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.15.0</td>
       <td>
        <p class="para">
         If an empty document is specified for the <code class="literal">&quot;aws&quot;</code> KMS
         provider, the driver will attempt to configure the provider using
         <a href="https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials" class="link external">&raquo;&nbsp;Automatic Credentials</a>.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.14.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;bypassQueryAnalysis&quot;</code> and
         <code class="literal">&quot;encryptedFieldsMap&quot;</code> auto encryption options.
         Additional options pertaining to <code class="literal">crypt_shared</code> are
         now supported in the <code class="literal">&quot;extraOptions&quot;</code> auto encryption
         option.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.13.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;srvMaxHosts&quot;</code> and
         <code class="literal">&quot;srvServiceName&quot;</code> URI options.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.12.0</td>
       <td>
        <p class="para">
         KMIP is now supported as a KMS provider for client-side encryption and
         may be configured in the <code class="literal">&quot;kmsProviders&quot;</code> field of the
         <code class="literal">&quot;autoEncryption&quot;</code> driver option. Additionally, TLS
         options for KMS providers may now be configured in the
         <code class="literal">&quot;tlsOptions&quot;</code> field of the
         <code class="literal">&quot;autoEncryption&quot;</code> driver option.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.11.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;loadBalanced&quot;</code> URI option.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.10.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;disableClientPersistence&quot;</code> driver option.
        </p>
        <p class="para">
         Azure and GCP are now supported as KMS providers for client-side
         encryption and may be configured in the
         <code class="literal">&quot;kmsProviders&quot;</code> field of the
         <code class="literal">&quot;autoEncryption&quot;</code> driver option. Base64-encoded
         strings are now accepted as an alternative to
         <span class="classname"><a href="class.mongodb-bson-binary.php" class="classname">MongoDB\BSON\Binary</a></span> for options within
         <code class="literal">&quot;kmsProviders&quot;</code>.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.8.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;directConnection&quot;</code>,
         <code class="literal">&quot;tlsDisableCertificateRevocationCheck&quot;</code>, and
         <code class="literal">&quot;tlsDisableOCSPEndpointCheck&quot;</code> URI options.
        </p>
        <p class="para">
         Added the <code class="literal">&quot;driver&quot;</code> driver option.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.7.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;autoEncryption&quot;</code> driver option.
        </p>
        <p class="para">
         Specifying any SSL or TLS option via the <code class="parameter">driverOptions</code>
         parameter will now implicitly enable TLS, as is done for the
         corresponding URI options.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.6.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;retryReads&quot;</code>, <code class="literal">&quot;tls&quot;</code>,
         <code class="literal">&quot;tlsAllowInvalidCertificates&quot;</code>,
         <code class="literal">&quot;tlsAllowInvalidHostnames&quot;</code>,
         <code class="literal">&quot;tlsCAFile&quot;</code>,
         <code class="literal">&quot;tlsCertificateKeyFile&quot;</code>,
         <code class="literal">&quot;tlsCertificateKeyFilePassword&quot;</code>, and
         <code class="literal">&quot;tlsInsecure&quot;</code> URI options.
        </p>
        <p class="para">
         The <code class="literal">&quot;retryWrites&quot;</code> URI option defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
        </p>
        <p class="para">
         Specifying any SSL or TLS URI option via the connection string or
         <code class="parameter">uriOptions</code> parameter will now implicitly enable
         TLS unless <code class="literal">ssl</code> or <code class="literal">tls</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
         TLS is <em>not</em> implicitly enabled for any options in
         the <code class="parameter">driverOptions</code> parameter, which is unchanged
         from previous versions.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.5.0</td>
       <td>
        <p class="para">
         <code class="literal">&quot;wtimeoutMS&quot;</code> is now always validated and applied to
         the write concern. Previously, the option was ignored if
         <code class="literal">&quot;w&quot;</code> was &lt;= 1, since the timeout only applies to
         replication.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.4.0</td>
       <td>
        <p class="para">
         Added the <code class="literal">&quot;compressors&quot;</code>,
         <code class="literal">&quot;retryWrites&quot;</code>, and
         <code class="literal">&quot;zlibCompressionLevel&quot;</code> URI options.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.3.0</td>
       <td>
        <p class="para">
         The <code class="parameter">uriOptions</code> argument now accepts
         <code class="literal">&quot;authMechanism&quot;</code> and
         <code class="literal">&quot;authMechanismProperties&quot;</code> options. Previously, these
         options were only supported in the <code class="parameter">uri</code> argument.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.2.0</td>
       <td>
        <p class="para">
         The <code class="parameter">uri</code> argument defaults to
         <code class="literal">&quot;mongodb://127.0.0.1/&quot;</code>. The default port remains
         <code class="literal">27017</code>.
        </p>
        <p class="para">
         Added the <code class="literal">&quot;appname&quot;</code> URI option.
        </p>
        <p class="para">
         Added the <code class="literal">&quot;allow_invalid_hostname&quot;</code>,
         <code class="literal">&quot;ca_file&quot;</code>, <code class="literal">&quot;ca_dir&quot;</code>,
         <code class="literal">&quot;clr_file&quot;</code>, <code class="literal">&quot;pem_file&quot;</code>,
         <code class="literal">&quot;pem_pwd&quot;</code>, and
         <code class="literal">&quot;weak_cert_validation&quot;</code> driver options.
        </p>
        <p class="para">
         The PHP Streams API is no longer used for socket communication. The
         <code class="literal">&quot;connectTimeoutMS&quot;</code> URI option now defaults to 10
         seconds instead of
         <a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a>
         in previous versions. Additionally, the extension no longer supports
         all <a href="context.ssl.php" class="link">SSL context options</a> via the
         <code class="literal">&quot;context&quot;</code> driver option.
        </p>
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.1.0</td>
       <td>
        <p class="para">
         The <code class="parameter">uri</code> argument is optional and defaults to
         <code class="literal">&quot;mongodb://localhost:27017/&quot;</code>.
        </p>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mongodb-driver-manager.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1394">
   <p><strong>Example #1 <span class="function"><strong>MongoDB\Driver\Manager::__construct()</strong></span> basic examples</strong></p>
   <div class="example-contents"><p>Connecting to standalone MongoDB node:</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://example.com:27017"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>
    Connecting to standalone MongoDB node via a Unix domain socket. The socket
    path may include special characters such as slashes and should be encoded
    with <span class="function"><a href="function.rawurlencode.php" class="function">rawurlencode()</a></span>.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://" </span><span style="color: #007700">. </span><span style="color: #0000BB">rawurlencode</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp/mongodb-27017.sock"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Connecting to a replica set:</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://rs1.example.com,rs2.example.com/?replicaSet=myReplicaSet"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Connecting to a sharded cluster (i.e. one or more mongos instances):</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://mongos1.example.com,mongos2.example.com/"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Connecting to MongoDB with authentication credentials for a particular user and database:</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://myusername:mypassword@example.com/?authSource=databaseName"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>


   <div class="example-contents"><p>
    Connecting to MongoDB with authentication credentials for a particular
    user and database, where the username or password includes special
    characters (e.g. <code class="literal">@</code>, <code class="literal">:</code>,
    <code class="literal">%</code>). In the following example, the password string
    <code class="literal">myp@ss:w%rd</code> has been manually escaped; however,
    <span class="function"><a href="function.rawurlencode.php" class="function">rawurlencode()</a></span> may also be used to escape URI components
    that may contain special characters.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://myusername:myp%40ss%3Aw%25rd@example.com/?authSource=databaseName"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>


   <div class="example-contents"><p>Connecting to MongoDB with X509 authentication:</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(<br />    </span><span style="color: #DD0000">"mongodb://example.com/?ssl=true&amp;authMechanism=MONGODB-X509"</span><span style="color: #007700">,<br />    [],<br />    [<br />        </span><span style="color: #DD0000">"pem_file" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/path/to/client.pem"</span><span style="color: #007700">,<br />    ]<br />);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mongodb-driver-manager.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><a href="mongodb.connection-handling.php" class="link">Connection handling and persistence</a></li>
   <li><a href="https://www.mongodb.com/docs/manual/reference/connection-string/" class="link external">&raquo;&nbsp;MongoDB Connection String Format</a></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/manager/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmongodb-driver-manager.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mongodb-driver-manager.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb-driver-manager.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121328">  <div class="votes">
    <div id="Vu121328">
    <a href="/manual/vote-note.php?id=121328&amp;page=mongodb-driver-manager.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121328">
    <a href="/manual/vote-note.php?id=121328&amp;page=mongodb-driver-manager.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121328" title="57% like this...">
    1
    </div>
  </div>
  <a href="#121328" class="name">
  <strong class="user"><em>denys at bulakhweb dot com</em></strong></a><a class="genanchor" href="#121328"> &para;</a><div class="date" title="2017-07-06 02:20"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121328">
<div class="phpcode"><code><span class="html">Please note, if you send socketTimeoutMs value as 0 to disable timeout (according to MongoDB documentation), it will be considered as default value which is 300,000 ms in PHP driver. So send some really huge amount in case if you need to disable limitation.</span></code></div>
  </div>
 </div>
  <div class="note" id="121329">  <div class="votes">
    <div id="Vu121329">
    <a href="/manual/vote-note.php?id=121329&amp;page=mongodb-driver-manager.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121329">
    <a href="/manual/vote-note.php?id=121329&amp;page=mongodb-driver-manager.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121329" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#121329" class="name">
  <strong class="user"><em>denys at bulakhweb dot com</em></strong></a><a class="genanchor" href="#121329"> &para;</a><div class="date" title="2017-07-06 02:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121329">
<div class="phpcode"><code><span class="html">Please note, if you send socketTimeoutMs value as 0 to disable timeout (according to MongoDB documentation), it will be considered as default value which is 300,000 ms in PHP driver. So send some really huge amount in case if you need to disable limitation.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mongodb-driver-manager.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb-driver-manager.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mongodb-driver-manager.php">MongoDB\Driver\Manager</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mongodb-driver-manager.addsubscriber.php" title="addSubscriber">addSubscriber</a>
                        </li>
                                                <li class="current">
                            <a href="mongodb-driver-manager.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.createclientencryption.php" title="createClientEncryption">createClientEncryption</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executebulkwrite.php" title="executeBulkWrite">executeBulkWrite</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executebulkwritecommand.php" title="executeBulkWriteCommand">executeBulkWriteCommand</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executecommand.php" title="executeCommand">executeCommand</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executequery.php" title="executeQuery">executeQuery</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executereadcommand.php" title="executeReadCommand">executeReadCommand</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executereadwritecommand.php" title="executeReadWriteCommand">executeReadWriteCommand</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.executewritecommand.php" title="executeWriteCommand">executeWriteCommand</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.getencryptedfieldsmap.php" title="getEncryptedFieldsMap">getEncryptedFieldsMap</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.getreadconcern.php" title="getReadConcern">getReadConcern</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.getreadpreference.php" title="getReadPreference">getReadPreference</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.getservers.php" title="getServers">getServers</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.getwriteconcern.php" title="getWriteConcern">getWriteConcern</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.removesubscriber.php" title="removeSubscriber">removeSubscriber</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.selectserver.php" title="selectServer">selectServer</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.startsession.php" title="startSession">startSession</a>
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
