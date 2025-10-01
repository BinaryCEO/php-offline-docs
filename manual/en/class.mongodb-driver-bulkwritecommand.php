<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\BulkWriteCommand - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.mongodb-driver-bulkwritecommand.php">
 <link rel="shorturl" href="https://www.php.net/mongodb-driver-bulkwritecommand">
 <link rel="alternate" href="https://www.php.net/mongodb-driver-bulkwritecommand" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.mongodb.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-bulkwrite.update.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-bulkwritecommand.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.mongodb-driver-bulkwritecommand.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.mongodb-driver-bulkwritecommand.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.mongodb-driver-bulkwritecommand.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.mongodb-driver-bulkwritecommand.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.mongodb-driver-bulkwritecommand.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.mongodb-driver-bulkwritecommand.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.mongodb-driver-bulkwritecommand.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.mongodb-driver-bulkwritecommand.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.mongodb-driver-bulkwritecommand.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.mongodb-driver-bulkwritecommand.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.mongodb-driver-bulkwritecommand.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The MongoDB\Driver\BulkWriteCommand class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\BulkWriteCommand - Manual" />
<meta name="twitter:description" content="The MongoDB\Driver\BulkWriteCommand class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\BulkWriteCommand - Manual" />
<meta itemprop="description" content="The MongoDB\Driver\BulkWriteCommand class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The MongoDB\Driver\BulkWriteCommand class" />

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
        <a href="mongodb-driver-bulkwritecommand.construct.php">
          MongoDB\Driver\BulkWriteCommand::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-bulkwrite.update.php">
          &laquo; MongoDB\Driver\BulkWrite::update        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.mongodb.php'>MongoDB</a></li>      <li><a href='mongodb.mongodb.php'>MongoDB\Driver</a></li>      </ul>
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
            <option value='en/class.mongodb-driver-bulkwritecommand.php' selected="selected">English</option>
            <option value='de/class.mongodb-driver-bulkwritecommand.php'>German</option>
            <option value='es/class.mongodb-driver-bulkwritecommand.php'>Spanish</option>
            <option value='fr/class.mongodb-driver-bulkwritecommand.php'>French</option>
            <option value='it/class.mongodb-driver-bulkwritecommand.php'>Italian</option>
            <option value='ja/class.mongodb-driver-bulkwritecommand.php'>Japanese</option>
            <option value='pt_BR/class.mongodb-driver-bulkwritecommand.php'>Brazilian Portuguese</option>
            <option value='ru/class.mongodb-driver-bulkwritecommand.php'>Russian</option>
            <option value='tr/class.mongodb-driver-bulkwritecommand.php'>Turkish</option>
            <option value='uk/class.mongodb-driver-bulkwritecommand.php'>Ukrainian</option>
            <option value='zh/class.mongodb-driver-bulkwritecommand.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.mongodb-driver-bulkwritecommand" class="reference">

 <h1 class="title">The MongoDB\Driver\BulkWriteCommand class</h1>
 

 <div class="partintro"><p class="verinfo">(mongodb &gt;=2.1.0)</p>


  <div class="section" id="mongodb-driver-bulkwritecommand.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="classname"><strong class="classname">MongoDB\Driver\BulkWriteCommand</strong></span> collects one or more
    write operations that should be sent to the server using the
    <a href="https://www.mongodb.com/docs/manual/reference/command/bulkWrite" class="link external">&raquo;&nbsp;bulkWrite</a>
    command introduced in MongoDB 8.0. After adding any number of insert,
    update, and delete operations, the command may be executed via
    <span class="methodname"><a href="mongodb-driver-manager.executebulkwritecommand.php" class="methodname">MongoDB\Driver\Manager::executeBulkWriteCommand()</a></span>.
   </p>
   <p class="para">
    Unlike <span class="classname"><a href="class.mongodb-driver-bulkwrite.php" class="classname">MongoDB\Driver\BulkWrite</a></span>, where all write
    operations must target the same collection, each write operation within
    <span class="classname"><strong class="classname">MongoDB\Driver\BulkWriteCommand</strong></span> may target a
    different collection.
   </p>
   <p class="para">
    Write operations may either be ordered (default) or unordered. Ordered write
    operations are sent to the server, in the order provided, for serial
    execution. If a write fails, any remaining operations will be aborted.
    Unordered operations are sent to the server in an arbitrary order
    where they may be executed in parallel. Any errors that occur are reported
    after all operations have been attempted.
   </p>
  </div>


  <div class="section" id="mongodb-driver-bulkwritecommand.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="modifier">final</span>
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\BulkWriteCommand</strong>
     </span>

     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.countable.php" class="interfacename">Countable</a></span> {</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.deletemany.php" class="methodname">deleteMany</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.deleteone.php" class="methodname">deleteOne</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.insertone.php" class="methodname">insertOne</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$document</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.replaceone.php" class="methodname">replaceOne</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$replacement</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.updatemany.php" class="methodname">updateMany</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$update</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-bulkwritecommand.updateone.php" class="methodname">updateOne</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$filter</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$update</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>

  <div class="section" id="mongodb-driver-bulkwritecommand.examples">
   <h2 class="title">Examples</h2>

   <div class="example" id="example-1418">
    <p><strong>Example #1 Mixed write operations</strong></p>
    <div class="example-contents"><p>
     Mixed write operations (i.e. inserts, updates, and deletes) will be sent
     to the server using a single
     <a href="https://www.mongodb.com/docs/manual/reference/command/bulkWrite" class="link external">&raquo;&nbsp;bulkWrite</a>
     command.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$bulk </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\BulkWriteCommand</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Delete documents from both collections<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteMany</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_one'</span><span style="color: #007700">, []);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteMany</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_two'</span><span style="color: #007700">, []);<br /><br /></span><span style="color: #FF8000">// Insert documents into two collections<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_one'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_two'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_two'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// Update a document in "coll_one"<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll_one'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">], [</span><span style="color: #DD0000">'$set' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]]);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBulkWriteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$bulk</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Inserted %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInsertedCount</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Updated  %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModifiedCount</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
Inserted 3 document(s)
Updated  1 document(s)
</pre></div>
    </div>
   </div>
   <div class="example" id="example-1419">
    <p><strong>Example #2 Ordered write operations causing an error</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$bulk </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\BulkWriteCommand</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteMany</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll'</span><span style="color: #007700">, []);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">(</span><span style="color: #DD0000">'db.coll'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'_id' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /><br />try {<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBulkWriteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$bulk</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">MongoDB\Driver\Exception\BulkWriteCommandException $e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPartialResult</span><span style="color: #007700">();<br /><br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWriteErrors</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Inserted %d document(s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInsertedCount</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [3]=&gt;
  object(MongoDB\Driver\WriteError)#5 (4) {
    [&quot;message&quot;]=&gt;
    string(78) &quot;E11000 duplicate key error collection: db.coll index: _id_ dup key: { _id: 1 }&quot;
    [&quot;code&quot;]=&gt;
    int(11000)
    [&quot;index&quot;]=&gt;
    int(3)
    [&quot;info&quot;]=&gt;
    object(stdClass)#6 (0) {
    }
  }
}
Inserted 2 document(s)
</pre></div>
    </div>
   </div>
  </div>

  <div class="section" id="mongodb-driver-bulkwritecommand.seealso">
   <h2 class="title">See Also</h2>
   <ul class="simplelist">
    <li><span class="methodname"><a href="mongodb-driver-manager.executebulkwritecommand.php" class="methodname">MongoDB\Driver\Manager::executeBulkWriteCommand()</a></span></li>
    <li><span class="classname"><a href="class.mongodb-driver-bulkwritecommandresult.php" class="classname">MongoDB\Driver\BulkWriteCommandResult</a></span></li>
    <li><span class="classname"><a href="class.mongodb-driver-exception-bulkwritecommandexception.php" class="classname">MongoDB\Driver\Exception\BulkWriteCommandException</a></span></li>
    <li><span class="classname"><a href="class.mongodb-driver-writeconcern.php" class="classname">MongoDB\Driver\WriteConcern</a></span></li>
    <li><span class="classname"><a href="class.mongodb-driver-writeconcernerror.php" class="classname">MongoDB\Driver\WriteConcernError</a></span></li>
    <li><span class="classname"><a href="class.mongodb-driver-writeerror.php" class="classname">MongoDB\Driver\WriteError</a></span></li>
   </ul>
  </div>

 </div>

 
























































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="mongodb-driver-bulkwritecommand.construct.php">MongoDB\Driver\BulkWriteCommand::__construct</a> — Create a new BulkWriteCommand</li><li><a href="mongodb-driver-bulkwritecommand.count.php">MongoDB\Driver\BulkWriteCommand::count</a> — Count number of write operations in the BulkWriteCommand</li><li><a href="mongodb-driver-bulkwritecommand.deletemany.php">MongoDB\Driver\BulkWriteCommand::deleteMany</a> — Add a deleteMany operation</li><li><a href="mongodb-driver-bulkwritecommand.deleteone.php">MongoDB\Driver\BulkWriteCommand::deleteOne</a> — Add a deleteOne operation</li><li><a href="mongodb-driver-bulkwritecommand.insertone.php">MongoDB\Driver\BulkWriteCommand::insertOne</a> — Add an insertOne operation</li><li><a href="mongodb-driver-bulkwritecommand.replaceone.php">MongoDB\Driver\BulkWriteCommand::replaceOne</a> — Add a replaceOne operation</li><li><a href="mongodb-driver-bulkwritecommand.updatemany.php">MongoDB\Driver\BulkWriteCommand::updateMany</a> — Add an updateMany operation</li><li><a href="mongodb-driver-bulkwritecommand.updateone.php">MongoDB\Driver\BulkWriteCommand::updateOne</a> — Add an updateOne operation</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/bulkwritecommand.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.mongodb-driver-bulkwritecommand%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.mongodb-driver-bulkwritecommand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-bulkwritecommand.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mongodb.mongodb.php">MongoDB\Driver</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.mongodb-driver-manager.php" title="MongoDB\Driver\Manager">MongoDB\Driver\Manager</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-command.php" title="MongoDB\Driver\Command">MongoDB\Driver\Command</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-query.php" title="MongoDB\Driver\Query">MongoDB\Driver\Query</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-bulkwrite.php" title="MongoDB\Driver\BulkWrite">MongoDB\Driver\BulkWrite</a>
                        </li>
                                                <li class="current">
                            <a href="class.mongodb-driver-bulkwritecommand.php" title="MongoDB\Driver\BulkWriteCommand">MongoDB\Driver\BulkWriteCommand</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-session.php" title="MongoDB\Driver\Session">MongoDB\Driver\Session</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-clientencryption.php" title="MongoDB\Driver\ClientEncryption">MongoDB\Driver\ClientEncryption</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-serverapi.php" title="MongoDB\Driver\ServerApi">MongoDB\Driver\ServerApi</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeconcern.php" title="MongoDB\Driver\WriteConcern">MongoDB\Driver\WriteConcern</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-readpreference.php" title="MongoDB\Driver\ReadPreference">MongoDB\Driver\ReadPreference</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-readconcern.php" title="MongoDB\Driver\ReadConcern">MongoDB\Driver\ReadConcern</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-cursor.php" title="MongoDB\Driver\Cursor">MongoDB\Driver\Cursor</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-cursorinterface.php" title="MongoDB\Driver\CursorInterface">MongoDB\Driver\CursorInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-server.php" title="MongoDB\Driver\Server">MongoDB\Driver\Server</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-serverdescription.php" title="MongoDB\Driver\ServerDescription">MongoDB\Driver\ServerDescription</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-topologydescription.php" title="MongoDB\Driver\TopologyDescription">MongoDB\Driver\TopologyDescription</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeconcernerror.php" title="MongoDB\Driver\WriteConcernError">MongoDB\Driver\WriteConcernError</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeerror.php" title="MongoDB\Driver\WriteError">MongoDB\Driver\WriteError</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-writeresult.php" title="MongoDB\Driver\WriteResult">MongoDB\Driver\WriteResult</a>
                        </li>
                                                <li class="">
                            <a href="class.mongodb-driver-bulkwritecommandresult.php" title="MongoDB\Driver\BulkWriteCommandResult">MongoDB\Driver\BulkWriteCommandResult</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="class.mongodb-driver-cursorid.php" title="MongoDB\Driver\CursorId">MongoDB\Driver\CursorId</a>
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
