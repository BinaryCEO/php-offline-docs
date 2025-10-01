<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\Manager::executeBulkWrite - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mongodb-driver-manager.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-manager.createclientencryption.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-manager.executebulkwritecommand.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mongodb-driver-manager.executebulkwrite.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mongodb-driver-manager.executebulkwrite.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mongodb-driver-manager.executebulkwrite.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mongodb-driver-manager.executebulkwrite.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mongodb-driver-manager.executebulkwrite.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mongodb-driver-manager.executebulkwrite.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mongodb-driver-manager.executebulkwrite.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mongodb-driver-manager.executebulkwrite.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mongodb-driver-manager.executebulkwrite.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mongodb-driver-manager.executebulkwrite.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute one or more write operations" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\Manager::executeBulkWrite - Manual" />
<meta name="twitter:description" content="Execute one or more write operations" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\Manager::executeBulkWrite - Manual" />
<meta itemprop="description" content="Execute one or more write operations" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute one or more write operations" />

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
        <a href="mongodb-driver-manager.executebulkwritecommand.php">
          MongoDB\Driver\Manager::executeBulkWriteCommand &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-manager.createclientencryption.php">
          &laquo; MongoDB\Driver\Manager::createClientEncryption        </a>
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
            <option value='en/mongodb-driver-manager.executebulkwrite.php' selected="selected">English</option>
            <option value='de/mongodb-driver-manager.executebulkwrite.php'>German</option>
            <option value='es/mongodb-driver-manager.executebulkwrite.php'>Spanish</option>
            <option value='fr/mongodb-driver-manager.executebulkwrite.php'>French</option>
            <option value='it/mongodb-driver-manager.executebulkwrite.php'>Italian</option>
            <option value='ja/mongodb-driver-manager.executebulkwrite.php'>Japanese</option>
            <option value='pt_BR/mongodb-driver-manager.executebulkwrite.php'>Brazilian Portuguese</option>
            <option value='ru/mongodb-driver-manager.executebulkwrite.php'>Russian</option>
            <option value='tr/mongodb-driver-manager.executebulkwrite.php'>Turkish</option>
            <option value='uk/mongodb-driver-manager.executebulkwrite.php'>Ukrainian</option>
            <option value='zh/mongodb-driver-manager.executebulkwrite.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mongodb-driver-manager.executebulkwrite" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">MongoDB\Driver\Manager::executeBulkWrite</h1>
  <p class="verinfo">(mongodb &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">MongoDB\Driver\Manager::executeBulkWrite</span> &mdash; <span class="dc-title">Execute one or more write operations</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mongodb-driver-manager.executebulkwrite-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><strong>MongoDB\Driver\Manager::executeBulkWrite</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="class.mongodb-driver-bulkwrite.php" class="type MongoDB\Driver\BulkWrite">MongoDB\Driver\BulkWrite</a></span> <code class="parameter">$bulk</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.mongodb-driver-writeresult.php" class="type MongoDB\Driver\WriteResult">MongoDB\Driver\WriteResult</a></span></div>

  <p class="para rdfs-comment">
   Executes one or more write operations on the primary server.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.mongodb-driver-bulkwrite.php" class="classname">MongoDB\Driver\BulkWrite</a></span> can be constructed with
   one or more write operations of varying types (e.g. updates, deletes, and
   inserts). The driver will attempt to send operations of the same type to the
   server in as few requests as possible to optimize round trips.
  </p>
  <p class="para">
   The default value for the <code class="literal">&quot;writeConcern&quot;</code> option will be
   inferred from an active transaction (indicated by the
   <code class="literal">&quot;session&quot;</code> option), followed by the
   <a href="mongodb-driver-manager.construct.php#mongodb-driver-manager.construct-uri" class="link">connection URI</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mongodb-driver-manager.executebulkwrite-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
   
    <dt><code class="parameter">namespace</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)</dt>
    <dd>
     <p class="para">
      A fully qualified namespace (e.g. <code class="literal">&quot;databaseName.collectionName&quot;</code>).
     </p>
    </dd>
   

   
   
    <dt><code class="parameter">bulk</code> (<span class="classname"><a href="class.mongodb-driver-bulkwrite.php" class="classname">MongoDB\Driver\BulkWrite</a></span>)</dt>
    <dd>
     <p class="para">
      The write(s) to execute.
     </p>
    </dd>
   

   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      <table class="doctable table">
       <caption><strong>options</strong></caption>
       
        <thead>
         <tr>
          <th>Option</th>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         
         <tr>
          <td>session</td>
          <td><span class="classname"><a href="class.mongodb-driver-session.php" class="classname">MongoDB\Driver\Session</a></span></td>
          <td>
           <p class="para">
            A session to associate with the operation.
           </p>
          </td>
         </tr>


         
         <tr>
          <td>writeConcern</td>
          <td><span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span></td>
          <td>
           <p class="para">
            A write concern to apply to the operation.
           </p>
          </td>
         </tr>


        </tbody>
       
      </table>

     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mongodb-driver-manager.executebulkwrite-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">Returns <span class="classname"><a href="class.mongodb-driver-writeresult.php" class="classname">MongoDB\Driver\WriteResult</a></span> on success.</p>
 </div>


 <div class="refsect1 errors" id="refsect1-mongodb-driver-manager.executebulkwrite-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="simplelist">
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> if <code class="parameter">bulk</code> does not contain any write operations.</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> if <code class="parameter">bulk</code> has already been executed. <span class="classname"><a href="class.mongodb-driver-bulkwrite.php" class="classname">MongoDB\Driver\BulkWrite</a></span> objects may not be executed multiple times.</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> if the <code class="literal">&quot;session&quot;</code> option is used in combination with an unacknowledged write concern.</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> on argument parsing errors.</li><li>Throws <span class="classname"><a href="class.mongodb-driver-exception-connectionexception.php" class="classname">MongoDB\Driver\Exception\ConnectionException</a></span> if connection to the server fails (for reasons other than authentication).</li><li>Throws <span class="classname"><a href="class.mongodb-driver-exception-authenticationexception.php" class="classname">MongoDB\Driver\Exception\AuthenticationException</a></span> if authentication is needed and fails.</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-bulkwriteexception.php" class="classname">MongoDB\Driver\Exception\BulkWriteException</a></span> on any write failure (e.g. write error, failure to apply a write concern)</li>
   <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-runtimeexception.php" class="classname">MongoDB\Driver\Exception\RuntimeException</a></span> on other errors.</li>
  </ul>
 </div>


 <div class="refsect1 changelog" id="refsect1-mongodb-driver-manager.executebulkwrite-changelog">
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
        The <code class="parameter">options</code> parameter no longer accepts a
        <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span> instance.
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.21.0</td>
       <td>
        Passing a <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span> object as
        <code class="parameter">options</code> is deprecated and will be removed in 2.0.
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.4.4</td>
       <td>
        <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span>
        will be thrown if the <code class="literal">&quot;session&quot;</code> option is used in
        combination with an unacknowledged write concern.
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.4.0</td>
       <td>
        The third parameter is now an <code class="parameter">options</code> array.
        For backwards compatibility, this paramater will still accept a
        <span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span> object.
       </td>
      </tr>

      <tr>
       <td>PECL mongodb 1.3.0</td>
       <td>
        <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span>
        is now thrown if <code class="parameter">bulk</code> does not contain any write
        operations. Previously, a
        <span class="classname"><a href="class.mongodb-driver-exception-bulkwriteexception.php" class="classname">MongoDB\Driver\Exception\BulkWriteException</a></span> was
        thrown.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mongodb-driver-manager.executebulkwrite-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1395">
   <p><strong>Example #1 <span class="function"><strong>MongoDB\Driver\Manager::executeBulkWrite()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$bulk </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\BulkWrite</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">([</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">], [</span><span style="color: #DD0000">'$set' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]], [</span><span style="color: #DD0000">'multi' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">'upsert' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">([</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">], [</span><span style="color: #DD0000">'$set' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">]], [</span><span style="color: #DD0000">'multi' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">'upsert' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">([</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">], [</span><span style="color: #DD0000">'$set' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">]], [</span><span style="color: #DD0000">'multi' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">'upsert' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">([</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">], [</span><span style="color: #DD0000">'limit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">(</span><span style="color: #DD0000">'mongodb://localhost:27017'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$writeConcern </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\WriteConcern</span><span style="color: #007700">(</span><span style="color: #0000BB">MongoDB\Driver\WriteConcern</span><span style="color: #007700">::</span><span style="color: #0000BB">MAJORITY</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBulkWrite</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.collection'</span><span style="color: #007700">, </span><span style="color: #0000BB">$bulk</span><span style="color: #007700">, [</span><span style="color: #DD0000">'writeConcern' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$writeConcern</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Inserted %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInsertedCount</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Matched  %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMatchedCount</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Updated  %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModifiedCount</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Upserted %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUpsertedCount</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Deleted  %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDeletedCount</span><span style="color: #007700">());<br /><br />foreach (</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUpsertedIds</span><span style="color: #007700">() as </span><span style="color: #0000BB">$index </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'upsertedId[%d]: '</span><span style="color: #007700">, </span><span style="color: #0000BB">$index</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* If the WriteConcern could not be fulfilled */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$writeConcernError </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWriteConcernError</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s (%d): %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$writeConcernError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #0000BB">$writeConcernError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(), </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$writeConcernError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInfo</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #FF8000">/* If a write could not happen at all */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWriteErrors</span><span style="color: #007700">() as </span><span style="color: #0000BB">$writeError</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Operation#%d: %s (%d)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$writeError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIndex</span><span style="color: #007700">(), </span><span style="color: #0000BB">$writeError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #0000BB">$writeError</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">());<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Inserted 3 document(s)
Matched  1 document(s)
Updated  1 document(s)
Upserted 2 document(s)
Deleted  1 document(s)
upsertedId[3]: object(MongoDB\BSON\ObjectId)#5 (1) {
  [&quot;oid&quot;]=&gt;
  string(24) &quot;54d3adc3ce7a792f4d703756&quot;
}
upsertedId[4]: int(3)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mongodb-driver-manager.executebulkwrite-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="classname"><a href="class.mongodb-driver-bulkwrite.php" class="classname">MongoDB\Driver\BulkWrite</a></span></li>
   <li><span class="classname"><a href="class.mongodb-driver-writeresult.php" class="classname">MongoDB\Driver\WriteResult</a></span></li>
   <li><span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span></li>
   <li><span class="function"><a href="mongodb-driver-server.executebulkwrite.php" class="function" rel="rdfs-seeAlso">MongoDB\Driver\Server::executeBulkWrite()</a> - Execute one or more write operations on this server</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/manager/executebulkwrite.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmongodb-driver-manager.executebulkwrite%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mongodb-driver-manager.executebulkwrite&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124169">  <div class="votes">
    <div id="Vu124169">
    <a href="/manual/vote-note.php?id=124169&amp;page=mongodb-driver-manager.executebulkwrite&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124169">
    <a href="/manual/vote-note.php?id=124169&amp;page=mongodb-driver-manager.executebulkwrite&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124169" title="57% like this...">
    2
    </div>
  </div>
  <a href="#124169" class="name">
  <strong class="user"><em>RJ</em></strong></a><a class="genanchor" href="#124169"> &para;</a><div class="date" title="2019-09-04 05:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124169">
<div class="phpcode"><code><span class="html">If you're trying to figure out how to insert just one object and NOT an array resulting in a bunch of unwanted [0]s in your schema, I'm sorry I cannot help you. I've scoured the SERPs and since MongoDB\Driver\BulkWrite only takes an array it appears there is literally no way to "insertOne" in PHP7, nor a way to pass JUST an object and NOT an array, which may mean you must use a different language or revert to shell commands :-\. <br /><br />There are several articles where people, apparently mistakenly, refer to "MongoDB\Driver\Client" but neither that nor "MongoDB\Driver\Collections" appear to exist at all. I'm devastated, but if this forces me to downgrade to PHP5 on a brand new project I'll just need to move to a more modern language. :-(<br /><br />After several hours of this torture I'm now going to spend another hour trying to figure out if I can compose an update query that will collapse the unnecessary array that is being stuck where an object (document) should be. Ug. I realize people using MongoDB have mostly fled PHP, but abandoning the few &amp; loyal among us is really very sad as has been attested to by the unresolved stackoverflow laments that have been going on for years.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mongodb-driver-manager.executebulkwrite&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb-driver-manager.executebulkwrite.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mongodb-driver-manager.php">MongoDB\Driver\Manager</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mongodb-driver-manager.addsubscriber.php" title="addSubscriber">addSubscriber</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mongodb-driver-manager.createclientencryption.php" title="createClientEncryption">createClientEncryption</a>
                        </li>
                                                <li class="current">
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
