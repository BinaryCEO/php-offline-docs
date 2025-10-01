<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB\Driver\Cursor - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.mongodb-driver-cursor.php">
 <link rel="shorturl" href="https://www.php.net/mongodb-driver-cursor">
 <link rel="alternate" href="https://www.php.net/mongodb-driver-cursor" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.mongodb.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb-driver-readconcern.isdefault.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb-driver-cursor.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.mongodb-driver-cursor.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.mongodb-driver-cursor.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.mongodb-driver-cursor.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.mongodb-driver-cursor.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.mongodb-driver-cursor.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.mongodb-driver-cursor.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.mongodb-driver-cursor.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.mongodb-driver-cursor.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.mongodb-driver-cursor.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.mongodb-driver-cursor.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.mongodb-driver-cursor.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The MongoDB\Driver\Cursor class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB\Driver\Cursor - Manual" />
<meta name="twitter:description" content="The MongoDB\Driver\Cursor class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB\Driver\Cursor - Manual" />
<meta itemprop="description" content="The MongoDB\Driver\Cursor class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The MongoDB\Driver\Cursor class" />

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
        <a href="mongodb-driver-cursor.construct.php">
          MongoDB\Driver\Cursor::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb-driver-readconcern.isdefault.php">
          &laquo; MongoDB\Driver\ReadConcern::isDefault        </a>
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
            <option value='en/class.mongodb-driver-cursor.php' selected="selected">English</option>
            <option value='de/class.mongodb-driver-cursor.php'>German</option>
            <option value='es/class.mongodb-driver-cursor.php'>Spanish</option>
            <option value='fr/class.mongodb-driver-cursor.php'>French</option>
            <option value='it/class.mongodb-driver-cursor.php'>Italian</option>
            <option value='ja/class.mongodb-driver-cursor.php'>Japanese</option>
            <option value='pt_BR/class.mongodb-driver-cursor.php'>Brazilian Portuguese</option>
            <option value='ru/class.mongodb-driver-cursor.php'>Russian</option>
            <option value='tr/class.mongodb-driver-cursor.php'>Turkish</option>
            <option value='uk/class.mongodb-driver-cursor.php'>Ukrainian</option>
            <option value='zh/class.mongodb-driver-cursor.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.mongodb-driver-cursor" class="reference">

 <h1 class="title">The MongoDB\Driver\Cursor class</h1>
 

 <div class="partintro"><p class="verinfo">(mongodb &gt;=1.0.0)</p>


  <div class="section" id="mongodb-driver-cursor.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">MongoDB\Driver\Cursor</strong></span> class encapsulates
    the results of a MongoDB command or query and may be returned by
    <span class="methodname"><a href="mongodb-driver-manager.executecommand.php" class="methodname">MongoDB\Driver\Manager::executeCommand()</a></span> or
    <span class="methodname"><a href="mongodb-driver-manager.executequery.php" class="methodname">MongoDB\Driver\Manager::executeQuery()</a></span>, respectively.
   </p>
  </div>


  <div class="section" id="mongodb-driver-cursor.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="modifier">final</span>
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Cursor</strong>
     </span>

     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.mongodb-driver-cursorinterface.php" class="interfacename">MongoDB\Driver\CursorInterface</a></span> {</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="methodname"><a href="mongodb-driver-cursor.construct.php" class="methodname">__construct</a></span>()</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.current.php" class="methodname">current</a></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.getid.php" class="methodname">getId</a></span>(): <span class="type"><a href="class.mongodb-bson-int64.php" class="type MongoDB\BSON\Int64">MongoDB\BSON\Int64</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.getserver.php" class="methodname">getServer</a></span>(): <span class="type"><a href="class.mongodb-driver-server.php" class="type MongoDB\Driver\Server">MongoDB\Driver\Server</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.isdead.php" class="methodname">isDead</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.settypemap.php" class="methodname">setTypeMap</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$typemap</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.toarray.php" class="methodname">toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="mongodb-driver-cursor.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>

  <div class="section">
   <h2 class="title">Changelog</h2>
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
        <td>PECL mongodb 1.9.0</td>
        <td>
         Implements <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span>.
        </td>
       </tr>

       <tr>
        <td>PECL mongodb 1.6.0</td>
        <td>
         Implements <span class="interfacename"><a href="class.mongodb-driver-cursorinterface.php" class="interfacename">MongoDB\Driver\CursorInterface</a></span>,
         which extends <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span>.
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

  <div class="section" id="mongodb-driver-cursor.examples">
   <h2 class="title">Examples</h2>

   <div class="example" id="mongodb-driver-cursor.examples.foreach">
    <p><strong>Example #1 Reading a result set</strong></p>
    <div class="example-contents"><p>
     <span class="methodname"><a href="mongodb-driver-manager.executecommand.php" class="methodname">MongoDB\Driver\Manager::executeCommand()</a></span> and
     <span class="methodname"><a href="mongodb-driver-manager.executequery.php" class="methodname">MongoDB\Driver\Manager::executeQuery()</a></span> both return
     their result(s) as a <span class="classname"><strong class="classname">MongoDB\Driver\Cursor</strong></span> object.
     This object can be used to iterate over the result set of the command or
     query.
    </p></div>
    <div class="example-contents"><p>
     Because <span class="classname"><strong class="classname">MongoDB\Driver\Cursor</strong></span> implements the
     <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> interface, you can simply
     iterate over the result set with
     <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>.
    </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Insert some documents so that our query returns information */<br /></span><span style="color: #0000BB">$bulkWrite </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\BulkWrite</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bulkWrite</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Ceres'</span><span style="color: #007700">, </span><span style="color: #DD0000">'size' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">946</span><span style="color: #007700">, </span><span style="color: #DD0000">'distance' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2.766</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$bulkWrite</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Vesta'</span><span style="color: #007700">, </span><span style="color: #DD0000">'size' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">525</span><span style="color: #007700">, </span><span style="color: #DD0000">'distance' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2.362</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBulkWrite</span><span style="color: #007700">(</span><span style="color: #DD0000">"test.asteroids"</span><span style="color: #007700">, </span><span style="color: #0000BB">$bulkWrite</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Query for all the items in the collection */<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Query</span><span style="color: #007700">( [] );<br /><br /></span><span style="color: #FF8000">/* Query the "asteroids" collection of the "test" database */<br /></span><span style="color: #0000BB">$cursor </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">"test.asteroids"</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* $cursor now contains an object that wraps around the result set. Use<br /> * foreach() to iterate over all the result */<br /></span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$cursor </span><span style="color: #007700">as </span><span style="color: #0000BB">$document</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$document</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
stdClass Object
(
    [_id] =&gt; MongoDB\BSON\ObjectId Object
        (
            [oid] =&gt; 5a4cff2f122d3321565d8cc2
        )

    [name] =&gt; Ceres
    [size] =&gt; 946
    [distance] =&gt; 2.766
)
stdClass Object
(
    [_id] =&gt; MongoDB\BSON\ObjectId Object
        (
            [oid] =&gt; 5a4cff2f122d3321565d8cc3
        )

    [name] =&gt; Vesta
    [size] =&gt; 525
    [distance] =&gt; 2.362
}
</pre></div>
    </div>
   </div>

   <div class="example" id="mongodb-driver-cursor.examples.tailable">
    <p><strong>Example #2 Reading a result set for a tailable cursor</strong></p>
    <div class="example-contents"><p>
     <a href="https://www.mongodb.com/docs/manual/core/tailable-cursors" class="link external">&raquo;&nbsp;Tailable cursors</a>
     are a special type of MongoDB cursor that allows the client to read some
     results and then wait until more documents become available. These cursors
     are primarily used with
     <a href="https://www.mongodb.com/docs/manual/core/capped-collections" class="link external">&raquo;&nbsp;Capped Collections</a>
     and <a href="https://www.mongodb.com/docs/manual/changeStreams" class="link external">&raquo;&nbsp;Change Streams</a>.
    </p></div>
    <div class="example-contents"><p>
     While normal cursors can be iterated once with <code class="literal">foreach</code>,
     that approach will not work with tailable cursors. When
     <code class="literal">foreach</code> is used with a tailable cursor, the loop will
     stop upon reaching the end of the initial result set. Attempting to
     continue iteration on the cursor with a second
     <code class="literal">foreach</code> would throw an exception, since PHP attempts to
     rewind the cursor. Similar to result objects in other database drivers,
     cursors in MongoDB only support forward iteration, which means they cannot
     be rewound.
    </p></div>
    <div class="example-contents"><p>
     In order to continuously read from a tailable cursor, the Cursor object
     must be wrapped with an <span class="classname"><a href="class.iteratoriterator.php" class="classname">IteratorIterator</a></span>. This
     allows the application to directly control the cursor&#039;s iteration, avoid
     inadvertently rewinding the cursor, and decide when to wait for new results
     or stop iteration entirely.
    </p></div>
    <div class="example-contents"><p>
     In order to demonstrate a tailable cursor in action, two scripts will be
     used: a &quot;producer&quot; and a &quot;consumer&quot;. The producer script will create a new
     capped collection using the
     <a href="https://www.mongodb.com/docs/manual/reference/command/create" class="link external">&raquo;&nbsp;create</a> command
     and proceed to insert a new document into that collection each second.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">, new </span><span style="color: #0000BB">MongoDB\Driver\Command</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'create' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'asteroids'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'capped' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'size' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1048576</span><span style="color: #007700">,<br />]));<br /><br />while (</span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$bulkWrite </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\BulkWrite</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$bulkWrite</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">([</span><span style="color: #DD0000">'createdAt' </span><span style="color: #007700">=&gt; new </span><span style="color: #0000BB">MongoDB\BSON\UTCDateTime</span><span style="color: #007700">]);<br />    </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBulkWrite</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.asteroids'</span><span style="color: #007700">, </span><span style="color: #0000BB">$bulkWrite</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">sleep</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     With the producer script still running, a second consumer script may be
     executed to read the inserted documents using a tailable cursor, indicated
     by the <code class="literal">tailable</code> and <code class="literal">awaitData</code> options
     to <span class="function"><a href="mongodb-driver-query.construct.php" class="function">MongoDB\Driver\Query::__construct()</a></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$manager </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Manager</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Driver\Query</span><span style="color: #007700">([], [<br />    </span><span style="color: #DD0000">'tailable' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'awaitData' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />]);<br /><br /></span><span style="color: #0000BB">$cursor </span><span style="color: #007700">= </span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.asteroids'</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$iterator </span><span style="color: #007700">= new </span><span style="color: #0000BB">IteratorIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$cursor</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$iterator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">();<br /><br />while (</span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$iterator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">valid</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">$document </span><span style="color: #007700">= </span><span style="color: #0000BB">$iterator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">current</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Consumed document created at: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$document</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createdAt</span><span style="color: #007700">);<br />    }<br /><br />    </span><span style="color: #0000BB">$iterator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     The consumer script will start by quickly printing all available documents
     in the capped collection (as if <code class="literal">foreach</code> had been used);
     however, it will not terminate upon reaching the end of the initial result
     set. Since the cursor is tailable, calling
     <span class="function"><a href="iteratoriterator.next.php" class="function">IteratorIterator::next()</a></span> will block and wait for
     additional results. <span class="function"><a href="iteratoriterator.valid.php" class="function">IteratorIterator::valid()</a></span> is also
     used to check if there is actually data available to read at each step.
    </p></div>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This example uses the <code class="literal">awaitData</code> query option to
      instruct the server to block for a short period (e.g. one second) at the
      end of the result set before returning a response to the driver. This is
      used to prevent the driver from aggressively polling the server when there
      are no results available. The <code class="literal">maxAwaitTimeMS</code> option may
      be used in conjunction with <code class="literal">tailable</code> and
      <code class="literal">awaitData</code> to specify the amount of time that the server
      should block when it reaches the end of the result set.
     </span>
    </p></blockquote>
   </div>
  </div>

  <div class="section">
   <h2 class="title">Errors/Exceptions</h2>
   <p class="simpara">
    When iterating over the cursor object, BSON data is converted into PHP
    variables. This iteration can cause the following Exceptions:
   </p>
   <ul class="simplelist">
    <li>
     Throws
     <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> if
     a class in the type map cannot be instantiated or does not implement
     <span class="interfacename"><a href="class.mongodb-bson-unserializable.php" class="interfacename">MongoDB\BSON\Unserializable</a></span>.
    </li>
    <li>Throws <span class="classname"><a href="class.mongodb-driver-exception-unexpectedvalueexception.php" class="classname">MongoDB\Driver\Exception\UnexpectedValueException</a></span> if the input did not contain exactly one BSON document. Possible reasons include, but are not limited to, invalid BSON, extra data (after reading one BSON document), or an unexpected <a href="https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson" class="link external">&raquo;&nbsp;libbson</a> error.</li>
   </ul>
  </div>

 </div>

 
 


























 









 





 





 


 






 









 


<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="mongodb-driver-cursor.construct.php">MongoDB\Driver\Cursor::__construct</a> — Create a new Cursor (not used)</li><li><a href="mongodb-driver-cursor.current.php">MongoDB\Driver\Cursor::current</a> — Returns the current element</li><li><a href="mongodb-driver-cursor.getid.php">MongoDB\Driver\Cursor::getId</a> — Returns the ID for this cursor</li><li><a href="mongodb-driver-cursor.getserver.php">MongoDB\Driver\Cursor::getServer</a> — Returns the server associated with this cursor</li><li><a href="mongodb-driver-cursor.isdead.php">MongoDB\Driver\Cursor::isDead</a> — Checks if the cursor is exhausted or may have additional results</li><li><a href="mongodb-driver-cursor.key.php">MongoDB\Driver\Cursor::key</a> — Returns the current result's index within the cursor</li><li><a href="mongodb-driver-cursor.next.php">MongoDB\Driver\Cursor::next</a> — Advances the cursor to the next result</li><li><a href="mongodb-driver-cursor.rewind.php">MongoDB\Driver\Cursor::rewind</a> — Rewind the cursor to the first result</li><li><a href="mongodb-driver-cursor.settypemap.php">MongoDB\Driver\Cursor::setTypeMap</a> — Sets a type map to use for BSON unserialization</li><li><a href="mongodb-driver-cursor.toarray.php">MongoDB\Driver\Cursor::toArray</a> — Returns an array containing all results for this cursor</li><li><a href="mongodb-driver-cursor.valid.php">MongoDB\Driver\Cursor::valid</a> — Checks if the current position in the cursor is valid</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/mongodb/driver/cursor.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.mongodb-driver-cursor%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.mongodb-driver-cursor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-cursor.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118824">  <div class="votes">
    <div id="Vu118824">
    <a href="/manual/vote-note.php?id=118824&amp;page=class.mongodb-driver-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118824">
    <a href="/manual/vote-note.php?id=118824&amp;page=class.mongodb-driver-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118824" title="72% like this...">
    16
    </div>
  </div>
  <a href="#118824" class="name">
  <strong class="user"><em>max-p at max-p dot me</em></strong></a><a class="genanchor" href="#118824"> &para;</a><div class="date" title="2016-02-12 01:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118824">
<div class="phpcode"><code><span class="html">As one might notice, this class does not implement a hasNext() or next() method as opposed to the now deprecated Mongo driver.<br /><br />If, for any reason, you need to pull data from the cursor procedurally or otherwise need to override the behavior of foreach while iterating on the cursor, the SPL \IteratorIterator class can be used. When doing so, it is important to rewind the iterator before using it, otherwise you won't get any data back.<br /><br /><span class="default">&lt;?php<br />$cursor </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">find</span><span class="keyword">();<br /></span><span class="default">$it </span><span class="keyword">= new </span><span class="default">\IteratorIterator</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">);<br /></span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="comment">// Very important<br /><br /></span><span class="keyword">while(</span><span class="default">$doc </span><span class="keyword">= </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">);<br />    </span><span class="default">$it</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />I used this trick to build a backward compatibility wrapper emulating the old Mongo driver in order to upgrade an older codebase.</span></code></div>
  </div>
 </div>
  <div class="note" id="119606">  <div class="votes">
    <div id="Vu119606">
    <a href="/manual/vote-note.php?id=119606&amp;page=class.mongodb-driver-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119606">
    <a href="/manual/vote-note.php?id=119606&amp;page=class.mongodb-driver-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119606" title="66% like this...">
    5
    </div>
  </div>
  <a href="#119606" class="name">
  <strong class="user"><em>tdrpic</em></strong></a><a class="genanchor" href="#119606"> &para;</a><div class="date" title="2016-07-14 08:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119606">
<div class="phpcode"><code><span class="html">If you find that it would be easier to use arrays (instead of objects) for the returned documents, add the following after executing your query:<br /><br />$cursor-&gt;setTypeMap(['root' =&gt; 'array', 'document' =&gt; 'array', 'array' =&gt; 'array']);</span></code></div>
  </div>
 </div>
  <div class="note" id="118856">  <div class="votes">
    <div id="Vu118856">
    <a href="/manual/vote-note.php?id=118856&amp;page=class.mongodb-driver-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118856">
    <a href="/manual/vote-note.php?id=118856&amp;page=class.mongodb-driver-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118856" title="66% like this...">
    4
    </div>
  </div>
  <a href="#118856" class="name">
  <strong class="user"><em>mikemartin2016 at gmail dot com</em></strong></a><a class="genanchor" href="#118856"> &para;</a><div class="date" title="2016-02-17 08:47"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118856">
<div class="phpcode"><code><span class="html">I noticed that  -&gt;sort is missing from the cursor.  Seems like the old driver has more functionality.
<br />
<br />[red.: The way how cursors are created is different between the drivers. In the old driver, the cursor would not be created until after the first rewind() call on the iterator.
<br />
<br />In the new driver the cursor already exists. Because sort (and limit and skip) parameters need to be send to the server, they can not be called after the cursor already has been created.
<br />
<br />You can use sort (and limit and skip) with the new driver as well, by specifying them as options to the Query as shown in this example: <a href="http://php.net/manual/en/mongodb-driver-query.construct.php#refsect1-mongodb-driver-query.construct-examples]" rel="nofollow" target="_blank">http://php.net/manual/en/mongodb-driver-query.construct.php#refsect1-mongodb-driver-query.construct-examples]</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120922">  <div class="votes">
    <div id="Vu120922">
    <a href="/manual/vote-note.php?id=120922&amp;page=class.mongodb-driver-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120922">
    <a href="/manual/vote-note.php?id=120922&amp;page=class.mongodb-driver-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120922" title="57% like this...">
    4
    </div>
  </div>
  <a href="#120922" class="name">
  <strong class="user"><em>peichi40233 at gmail dot com</em></strong></a><a class="genanchor" href="#120922"> &para;</a><div class="date" title="2017-04-02 09:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120922">
<div class="phpcode"><code><span class="html">There used to be a count() method in the old mongo extension (<a href="http://docs.php.net/manual/en/mongocursor.count.php" rel="nofollow" target="_blank">http://docs.php.net/manual/en/mongocursor.count.php</a>), however, this feature seems to be deleted in mongodb.<br /><br />I've seen some people use executeCommand() to do that, but I found it much more earier to just use the toArray() method and count the returned array.<br /><br />For example:<br />$manager = new MongoDB\Driver\Manager();<br />$query = new MongoDB\Driver\Query($filter, $options);<br />$cursor = $manager-&gt;executeQuery('db.collection', $query)-&gt;toArray();<br />var_dump(count($cursor));</span></code></div>
  </div>
 </div>
  <div class="note" id="126401">  <div class="votes">
    <div id="Vu126401">
    <a href="/manual/vote-note.php?id=126401&amp;page=class.mongodb-driver-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126401">
    <a href="/manual/vote-note.php?id=126401&amp;page=class.mongodb-driver-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126401" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126401" class="name">
  <strong class="user"><em>cg at papoo dot de</em></strong></a><a class="genanchor" href="#126401"> &para;</a><div class="date" title="2021-09-08 04:29"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126401">
<div class="phpcode"><code><span class="html">Since php-mongodb version 1.9.0 Cursor implements Iterator, but if you need to support older versions too, you can conditionally wrap the cursor with IteratorIterator:<br /><br /><span class="default">&lt;?php<br />$iterator </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">find</span><span class="keyword">();<br /><br />if (!(</span><span class="default">$iterator </span><span class="keyword">implements </span><span class="default">Iterator</span><span class="keyword">)) {<br />  </span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">\IteratorIterator</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.mongodb-driver-cursor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.mongodb-driver-cursor.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="">
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
                                                <li class="current">
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
