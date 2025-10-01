<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Persisting Data - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mongodb.persistence.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mongodb.persistence.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mongodb.persistence.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.architecture.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb.connection-handling.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb.security.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mongodb.persistence.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mongodb.persistence.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mongodb.persistence.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mongodb.persistence.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mongodb.persistence.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mongodb.persistence.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mongodb.persistence.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mongodb.persistence.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mongodb.persistence.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mongodb.persistence.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mongodb.persistence.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Serialization and deserialization of PHP variables into MongoDB" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Persisting Data - Manual" />
<meta name="twitter:description" content="Serialization and deserialization of PHP variables into MongoDB" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Persisting Data - Manual" />
<meta itemprop="description" content="Serialization and deserialization of PHP variables into MongoDB" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Serialization and deserialization of PHP variables into MongoDB" />

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
        <a href="mongodb.security.php">
          Security &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb.connection-handling.php">
          &laquo; Connections        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.mongodb.php'>MongoDB</a></li>      <li><a href='mongodb.architecture.php'>Driver Architecture and Internals</a></li>      </ul>
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
            <option value='en/mongodb.persistence.php' selected="selected">English</option>
            <option value='de/mongodb.persistence.php'>German</option>
            <option value='es/mongodb.persistence.php'>Spanish</option>
            <option value='fr/mongodb.persistence.php'>French</option>
            <option value='it/mongodb.persistence.php'>Italian</option>
            <option value='ja/mongodb.persistence.php'>Japanese</option>
            <option value='pt_BR/mongodb.persistence.php'>Brazilian Portuguese</option>
            <option value='ru/mongodb.persistence.php'>Russian</option>
            <option value='tr/mongodb.persistence.php'>Turkish</option>
            <option value='uk/mongodb.persistence.php'>Ukrainian</option>
            <option value='zh/mongodb.persistence.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mongodb.persistence" class="section">
  
  <h2 class="title">Serialization and deserialization of PHP variables into MongoDB</h2>

  <p class="para">
   This document discusses how compound structures (i.e. documents, arrays, and
   objects) are converted between BSON and PHP values.
  </p>

  <div class="section" id="mongodb.persistence.serialization">
   <h2 class="title">Serialization to BSON</h2>

   <div class="section">
    <h2 class="title">Arrays</h2>

    <p class="para">
     If an array is a <em>packed array</em> — i.e. empty array or
     the keys start at 0 and are sequential without gaps: <em>BSON
     array</em>.
    </p>

    <p class="para">
     If the array is not packed — i.e. having associative (string) keys, the
     keys don&#039;t start at 0, or when there are gaps:: <em>BSON
     object</em>
    </p>

    <p class="para">
     A top-level (root) document, <em>always</em> serializes as a
     BSON document.
    </p>

    <div class="section">
     <h2 class="title">Examples</h2>

     <p class="para">
      These serialize as a BSON array:
     </p>

     <div class="example-contents">
<div class="textcode"><pre class="textcode">[ 8, 5, 2, 3 ] =&gt; [ 8, 5, 2, 3 ]
[ 0 =&gt; 4, 1 =&gt; 9 ] =&gt; [ 4, 9 ]</pre>
</div>
     </div>


     <p class="para">
      These serialize as a BSON document:
     </p>

     <div class="example-contents">
<div class="textcode"><pre class="textcode">[ 0 =&gt; 1, 2 =&gt; 8, 3 =&gt; 12 ] =&gt; { &quot;0&quot; : 1, &quot;2&quot; : 8, &quot;3&quot; : 12 }
[ &quot;foo&quot; =&gt; 42 ] =&gt; { &quot;foo&quot; : 42 }
[ 1 =&gt; 9, 0 =&gt; 10 ] =&gt; { &quot;1&quot; : 9, &quot;0&quot; : 10 }</pre>
</div>
     </div>


     <p class="para">
      Note that the five examples are <em>extracts</em> of a full
      document, and represent only <em>one</em> value inside a
      document.
     </p>

    </div>
   </div>

   <div class="section">
    <h2 class="title">Objects</h2>

     <p class="para">
      If an object is of the <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> class, serialize
      as a <em>BSON document</em>.
     </p>

     <p class="para">
      If an object is a supported class that implements
      <span class="interfacename"><a href="class.mongodb-bson-type.php" class="interfacename">MongoDB\BSON\Type</a></span>, then use the BSON
      serialization logic for that specific type.
      <span class="interfacename"><a href="class.mongodb-bson-type.php" class="interfacename">MongoDB\BSON\Type</a></span> instances (excluding
      <span class="interfacename"><a href="class.mongodb-bson-serializable.php" class="interfacename">MongoDB\BSON\Serializable</a></span> may only be
      serialized as a document field value. Attempting to serialize such an
      object as a root document will throw a
      <span class="classname"><a href="class.mongodb-driver-exception-unexpectedvalueexception.php" class="classname">MongoDB\Driver\Exception\UnexpectedValueException</a></span>
     </p>

     <p class="para">
      If an object is of an unknown class implementing the
      <span class="interfacename"><a href="class.mongodb-bson-type.php" class="interfacename">MongoDB\BSON\Type</a></span> interface, then throw a
      <span class="classname"><a href="class.mongodb-driver-exception-unexpectedvalueexception.php" class="classname">MongoDB\Driver\Exception\UnexpectedValueException</a></span>
     </p>

     <p class="para">
      If an object is of any other class, without implementing any special
      interface, serialize as a <em>BSON document</em>. Keep only
      <em>public</em> properties, and ignore
      <em>protected</em> and <em>private</em>
      properties.
     </p>

     <p class="para">
      If an object is of a class that implements the
      <span class="interfacename"><a href="class.mongodb-bson-serializable.php" class="interfacename">MongoDB\BSON\Serializable</a></span> interface, call
      <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span> and use
      the returned array or <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> to serialize as a
      BSON document or array. The BSON type will be determined by the following:
     </p>

     <p class="para">
      <ol type="1">
       <li class="listitem">
        <p class="para">Root documents must be serialized as a BSON
        document.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> objects must be
         serialized as a BSON document.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         If <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span>
         returns a packed array, serialize as a BSON array.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         If <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span>
         returns a non-packed array or <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>,
         serialize as a BSON document.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         If <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span>
         did not return an array or <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>, throw an
         <span class="classname"><a href="class.mongodb-driver-exception-unexpectedvalueexception.php" class="classname">MongoDB\Driver\Exception\UnexpectedValueException</a></span>
         exception.
        </p>
       </li>
      </ol>
     </p>

     <p class="para">
      If an object is of a class that implements the
      <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> interface (which
      implies <span class="interfacename"><a href="class.mongodb-bson-serializable.php" class="interfacename">MongoDB\BSON\Serializable</a></span>), obtain
      the properties in a similar way as in the previous paragraphs, but
      <em>also</em> add an additional property
      <span class="property">__pclass</span> as a Binary value, with subtype
      <code class="literal">0x80</code> and data bearing the fully qualified class name
      of the object that is being serialized.
     </p>

     <p class="para">
      The <span class="property">__pclass</span> property is added to the array or
      object returned by
      <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span>, which
      means it will overwrite any <span class="property">__pclass</span> key/property in
      the <span class="methodname"><a href="mongodb-bson-serializable.bsonserialize.php" class="methodname">MongoDB\BSON\Serializable::bsonSerialize()</a></span>
      return value. If you want to avoid this behaviour and set your own
      <span class="property">__pclass</span> value, you must <em>not</em>
      implement <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> and
      should instead implement
      <span class="interfacename"><a href="class.mongodb-bson-serializable.php" class="interfacename">MongoDB\BSON\Serializable</a></span> directly.
     </p>

     <div class="section">
      <h2 class="title">Examples</h2>

      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">stdClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />} </span><span style="color: #FF8000">// =&gt; {"foo": 42}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$prot </span><span style="color: #007700">= </span><span style="color: #DD0000">'wine'</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$fpr </span><span style="color: #007700">= </span><span style="color: #DD0000">'cheese'</span><span style="color: #007700">;<br />} </span><span style="color: #FF8000">// =&gt; {"foo": 42}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass1 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$prot </span><span style="color: #007700">= </span><span style="color: #DD0000">'wine'</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$fpr </span><span style="color: #007700">= </span><span style="color: #DD0000">'cheese'</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return [</span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">, </span><span style="color: #DD0000">'prot' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prot</span><span style="color: #007700">];<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"foo": 42, "prot": "wine"}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass2 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): </span><span style="color: #0000BB">self<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />    }<br />} </span><span style="color: #FF8000">// =&gt; MongoDB\Driver\Exception\UnexpectedValueException("bsonSerialize() did not return an array or stdClass")<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass3 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$elements </span><span style="color: #007700">= [</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">];<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">;<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"0": "foo", "1": "bar"}<br /><br />/**<br /> * Nesting Serializable classes<br /> */<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass4 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$elements </span><span style="color: #007700">= [</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">];<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">;<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"0": "foo", "2": "bar"}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ContainerClass1 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$things</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things </span><span style="color: #007700">= new </span><span style="color: #0000BB">AnotherClass4</span><span style="color: #007700">();<br />    }<br /><br />    function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return [</span><span style="color: #DD0000">'things' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things</span><span style="color: #007700">];<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"things": {"0": "foo", "2": "bar"}}<br /><br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass5 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$elements </span><span style="color: #007700">= [</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">];<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return </span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">);<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"0": "foo", "1": "bar"} as a root class<br />  //    ["foo", "bar"] as a nested value<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ContainerClass2 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$things</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things </span><span style="color: #007700">= new </span><span style="color: #0000BB">AnotherClass5</span><span style="color: #007700">();<br />    }<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return [</span><span style="color: #DD0000">'things' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things</span><span style="color: #007700">];<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"things": ["foo", "bar"]}<br /><br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AnotherClass6 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$elements </span><span style="color: #007700">= [</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">];<br /><br />    function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): </span><span style="color: #0000BB">object<br />    </span><span style="color: #007700">{<br />        return (object) </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">;<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"0": "foo", "1": "bar"}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">ContainerClass3 </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Serializable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$things</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things </span><span style="color: #007700">= new </span><span style="color: #0000BB">AnotherClass6</span><span style="color: #007700">();<br />    }<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return [</span><span style="color: #DD0000">'things' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">things</span><span style="color: #007700">];<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"things": {"0": "foo", "1": "bar"}}<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">UpperClass </span><span style="color: #007700">implements </span><span style="color: #0000BB">MongoDB\BSON\Persistable<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br />    protected </span><span style="color: #0000BB">$prot </span><span style="color: #007700">= </span><span style="color: #DD0000">'wine'</span><span style="color: #007700">;<br />    private </span><span style="color: #0000BB">$fpr </span><span style="color: #007700">= </span><span style="color: #DD0000">'cheese'</span><span style="color: #007700">;<br /><br />    private </span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">bsonUnserialize</span><span style="color: #007700">(array </span><span style="color: #0000BB">$data</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data </span><span style="color: #007700">= </span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">bsonSerialize</span><span style="color: #007700">(): array<br />    {<br />        return [</span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">, </span><span style="color: #DD0000">'prot' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prot</span><span style="color: #007700">];<br />    }<br />} </span><span style="color: #FF8000">// =&gt; {"foo": 42, "prot": "wine", "__pclass": {"$type": "80", "$binary": "VXBwZXJDbGFzcw=="}}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>
  </div>

  <div class="section" id="mongodb.persistence.deserialization">
   <h2 class="title">Deserialization from BSON</h2>

   
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     BSON documents can technically contain duplicate keys because documents are
     stored as a list of key-value pairs; however, applications should refrain
     from generating documents with duplicate keys as server and driver behavior
     may be undefined. Since PHP objects and arrays cannot have duplicate keys,
     data could also be lost when decoding a BSON document with duplicate keys.
    </p>
   </div>


   <p class="para">
    The legacy <code class="code">mongo</code> extension deserialized
    both BSON documents and arrays as PHP arrays. While PHP arrays are
    convenient to work with, this behavior was problematic because different
    BSON types could deserialize to the same PHP value (e.g.
    <code class="literal">{&quot;0&quot;: &quot;foo&quot;}</code> and <code class="literal">[&quot;foo&quot;]</code>) and make it
    impossible to infer the original BSON type. By default, the
    <code class="code">mongodb</code> extension addresses this concern by ensuring that BSON
    arrays and documents are converted to PHP arrays and objects, respectively.
   </p>
   <p class="para">
    For compound types, there are three data types:
   </p>

   <p class="para">
    <dl>
     
      <dt>root</dt>
      <dd>
       <p class="para">
        refers to the top-level BSON document <em>only</em>
       </p>
      </dd>
     
     
      <dt>document</dt>
      <dd>
       <p class="para">
        refers to embedded BSON documents <em>only</em>
       </p>
      </dd>
     
     
      <dt>array</dt>
      <dd>
       <p class="para">
        refers to a BSON array
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para">
    Besides the three collective types, it is also possible to configure
    specific fields in your document to map to the data types mentioned below.
    As an example, the following type map allows you to
    map each embedded document within an <code class="literal">&quot;addresses&quot;</code> array to
    an <span class="classname"><strong class="classname">Address</strong></span> class <em>and</em> each
    <code class="literal">&quot;city&quot;</code> field within those embedded address documents to
    a <span class="classname"><strong class="classname">City</strong></span> class:

    <div class="example-contents">
<div class="textcode"><pre class="textcode">[
    &#039;fieldPaths&#039; =&gt; [
        &#039;addresses.$&#039; =&gt; &#039;MyProject\Address&#039;,
        &#039;addresses.$.city&#039; =&gt; &#039;MyProject\City&#039;,
    ],
]</pre>
</div>
    </div>

   </p>

   <p class="para">
    Each of those three data types, as well as the field specific mappings,
    can be mapped against different PHP types. The possible mapping values
    are:
   </p>

   <p class="para">
    <dl>
     
      <dt><em>not set</em> or <span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span> (default)</dt>
      <dd>
       <p class="para">
        <ul class="itemizedlist">
         <li class="listitem">
          <p class="para">
           A BSON array will be deserialized as a PHP <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
          </p>
         </li>
         <li class="listitem">
          <p class="para">
           A BSON document (root or embedded) without a
           <span class="property">__pclass</span> property
           <a href="#fnidmongodb.pclass" name="fnmongodb.pclass"><sup>[1]</sup></a>
            
           
           becomes a PHP <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> object, with each
           BSON document key set as a public <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>
           property.
          </p>
         </li>
         <li class="listitem">
          <p class="para">
           A BSON document (root or embedded) with a
           <span class="property">__pclass</span> property <a href="#fnidmongodb.pclass"><sup>[1]</sup></a> becomes a PHP object of
           the class name as defined by the <span class="property">__pclass</span>
           property.
          </p>
          <p class="para">
           If the named class implements the
           <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> interface,
           then the properties of the BSON document, including the
           <span class="property">__pclass</span> property, are sent as an associative
           array to the
           <span class="methodname"><a href="mongodb-bson-unserializable.bsonunserialize.php" class="methodname">MongoDB\BSON\Unserializable::bsonUnserialize()</a></span>
           function to initialise the object&#039;s properties.
          </p>
          <p class="para">
           If the named class does not exist or does not implement the
           <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> interface,
           <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> will be used and each BSON document
           key (including <span class="property">__pclass</span>) will be set as a
           public <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> property.
          </p>
          <p class="para">
           The <span class="property">__pclass</span> functionality relies on the
           property being part of a retrieved MongoDB document. If you use a
           <a href="mongodb-driver-query.construct.php#mongodb-driver-query.construct-queryOptions" class="link">projection</a>
           when querying for documents, you need to include the
           <span class="property">__pclass</span> field in the projection for this
           functionality to work.
          </p>
         </li>
        </ul>
       </p>
      </dd>
     

     
      <dt><code class="literal">&quot;array&quot;</code></dt>
      <dd>
       <p class="para">
        Turns a BSON array or BSON document into a PHP array. There will be no
        special treatment of a <span class="property">__pclass</span> property <a href="#fnidmongodb.pclass"><sup>[1]</sup></a>,
        but it may be set as an element in the returned array if it was
        present in the BSON document.
       </p>
      </dd>
     

     
      <dt><code class="literal">&quot;object&quot;</code> or <code class="literal">&quot;stdClass&quot;</code></dt>
      <dd>
       <p class="para">
        Turns a BSON array or BSON document into a
        <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> object. There will be no special
        treatment of a <span class="property">__pclass</span> property <a href="#fnidmongodb.pclass"><sup>[1]</sup></a>, but it may
        be set as a public property in the returned object if it was present
        in the BSON document.
       </p>
      </dd>
     

     
      <dt><code class="literal">&quot;bson&quot;</code></dt>
      <dd>
       <p class="para">
        Turns a BSON array into a <span class="classname"><a href="class.mongodb-bson-packedarray.php" class="classname">MongoDB\BSON\PackedArray</a></span>
        and a BSON document into a <span class="classname"><a href="class.mongodb-bson-document.php" class="classname">MongoDB\BSON\Document</a></span>,
        regardless of whether the BSON document has a <span class="property">__pclass</span>
        property <a href="#fnidmongodb.pclass"><sup>[1]</sup></a>.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <span class="simpara">
         The <code class="literal">bson</code> value is only available for the three root
         types, not in the field specific mappings.
        </span>
       </p></blockquote>
      </dd>
     

     
      <dt>any other string</dt>
      <dd>
       <p class="para">
        Defines the class name that the BSON array or BSON object should be
        deserialized as. For BSON objects that include
        <span class="property">__pclass</span> properties, that class will take
        priority.
       </p>

       <p class="para">
        If the named class does not exist, is not concrete (i.e. it is
        abstract or an interface), or does not implement
        <span class="interfacename"><a href="class.mongodb-bson-unserializable.php" class="interfacename">MongoDB\BSON\Unserializable</a></span> then an
        <span class="classname"><a href="class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span>
        exception is thrown.
       </p>

       <p class="para">
        If the BSON object has a <span class="property">__pclass</span> property and
        that class exists and implements
        <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span> it will
        supersede the class provided in the type map.
       </p>

       <p class="para">
        The properties of the BSON document, <em>including</em>
        the <span class="property">__pclass</span> property if it exists, will be sent
        as an associative array to the
        <span class="methodname"><a href="mongodb-bson-unserializable.bsonunserialize.php" class="methodname">MongoDB\BSON\Unserializable::bsonUnserialize()</a></span>
        function to initialise the object&#039;s properties.
       </p>
      </dd>
     
    </dl>
   </p>

   <div class="section" id="mongodb.persistence.typemaps">
    <h2 class="title">TypeMaps</h2>

     <p class="para">
      TypeMaps can be set through the
      <span class="methodname"><a href="mongodb-driver-cursor.settypemap.php" class="methodname">MongoDB\Driver\Cursor::setTypeMap()</a></span> method on a
      <span class="classname"><a href="class.mongodb-driver-cursor.php" class="classname">MongoDB\Driver\Cursor</a></span> object, or the
      <code class="literal">$typeMap</code> argument of
      <span class="function"><a href="function.mongodb.bson-tophp.php" class="function">MongoDB\BSON\toPHP()</a></span>,
      <span class="methodname"><a href="mongodb-bson-document.tophp.php" class="methodname">MongoDB\BSON\Document::toPHP()</a></span>, and
      <span class="methodname"><a href="mongodb-bson-packedarray.tophp.php" class="methodname">MongoDB\BSON\PackedArray::toPHP()</a></span>. Each of the three
      classes (<em>root</em>, <em>document</em>, and
      <em>array</em>) can be individually set, in addition to the
      field specific types.
     </p>

     <p class="para">
      If the value in the map is <span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span>, it means the same as the
      <em>default</em> value for that item.
     </p>
    </div>

    <div class="section">
     <h2 class="title">Examples</h2>

     <p class="para">
      These examples use the following classes:
     </p>

     <p class="para">
      <dl>
       
        <dt>MyClass</dt>
        <dd>
         <p class="para">
          which does <em>not</em> implement any interface
         </p>
        </dd>
       
       
        <dt>YourClass</dt>
        <dd>
         <p class="para">
          which implements
          <span class="interfacename"><a href="class.mongodb-bson-unserializable.php" class="interfacename">MongoDB\BSON\Unserializable</a></span>
         </p>
        </dd>
       
       
        <dt>OurClass</dt>
        <dd>
         <p class="para">
          which implements
          <span class="interfacename"><a href="class.mongodb-bson-persistable.php" class="interfacename">MongoDB\BSON\Persistable</a></span>
         </p>
        </dd>
       
       
        <dt>TheirClass</dt>
        <dd>
         <p class="para">
          which extends OurClass
         </p>
        </dd>
       
      </dl>
     </p>

     <p class="para">
      The <span class="methodname"><a href="mongodb-bson-unserializable.bsonunserialize.php" class="methodname">MongoDB\BSON\Unserializable::bsonUnserialize()</a></span>
      method of YourClass, OurClass, TheirClass iterate over the array and set
      the properties without modifications. It <em>also</em> sets
      the <code class="literal">$unserialized</code> property to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>:

      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">bsonUnserialize</span><span style="color: #007700">( array </span><span style="color: #0000BB">$map </span><span style="color: #007700">)<br />{<br />    foreach ( </span><span style="color: #0000BB">$map </span><span style="color: #007700">as </span><span style="color: #0000BB">$k </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value </span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$k </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br />    </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unserialized </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span></span></code></div>
      </div>

     </p>

     <p class="para">
      <div class="example-contents">
<div class="textcode"><pre class="textcode">/* typemap: [] (all defaults) */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;bar&quot; : false }
  -&gt; stdClass { $foo =&gt; &#039;yes&#039;, $bar =&gt; false }

{ &quot;foo&quot;: &quot;no&quot;, &quot;array&quot; : [ 5, 6 ] }
  -&gt; stdClass { $foo =&gt; &#039;no&#039;, $array =&gt; [ 5, 6 ] }

{ &quot;foo&quot;: &quot;no&quot;, &quot;obj&quot; : { &quot;embedded&quot; : 3.14 } }
  -&gt; stdClass { $foo =&gt; &#039;no&#039;, $obj =&gt; stdClass { $embedded =&gt; 3.14 } }

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: &quot;MyClass&quot; }
  -&gt; stdClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; &#039;MyClass&#039; }

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: { &quot;$type&quot; : &quot;80&quot;, &quot;$binary&quot; : &quot;MyClass&quot; } }
  -&gt; stdClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; Binary(0x80, &#039;MyClass&#039;) }

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: { &quot;$type&quot; : &quot;80&quot;, &quot;$binary&quot; : &quot;YourClass&quot;) }
  -&gt; stdClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; Binary(0x80, &#039;YourClass&#039;) }

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: { &quot;$type&quot; : &quot;80&quot;, &quot;$binary&quot; : &quot;OurClass&quot;) }
  -&gt; OurClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; Binary(0x80, &#039;OurClass&#039;), $unserialized =&gt; true }

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: { &quot;$type&quot; : &quot;44&quot;, &quot;$binary&quot; : &quot;YourClass&quot;) }
  -&gt; stdClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; Binary(0x44, &#039;YourClass&#039;) }</pre>
</div>
      </div>

     </p>

     <p class="para">
      <div class="example-contents">
<div class="textcode"><pre class="textcode">/* typemap: [ &quot;root&quot; =&gt; &quot;MissingClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot; }
  -&gt; MongoDB\Driver\Exception\InvalidArgumentException(&quot;MissingClass does not exist&quot;)

/* typemap: [ &quot;root&quot; =&gt; &quot;MyClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;MyClass&quot; } }
  -&gt; MongoDB\Driver\Exception\InvalidArgumentException(&quot;MyClass does not implement Unserializable interface&quot;)

/* typemap: [ &quot;root&quot; =&gt; &quot;MongoDB\BSON\Unserializable&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot; }
  -&gt; MongoDB\Driver\Exception\InvalidArgumentException(&quot;Unserializable is not a concrete class&quot;)

/* typemap: [ &quot;root&quot; =&gt; &quot;YourClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;MongoDB\BSON\Unserializable&quot; } }
  -&gt; YourClass { $foo =&gt; &quot;yes&quot;, $__pclass =&gt; Binary(0x80, &quot;MongoDB\BSON\Unserializable&quot;), $unserialized =&gt; true }

/* typemap: [ &quot;root&quot; =&gt; &quot;YourClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;MyClass&quot; } }
  -&gt; YourClass { $foo =&gt; &quot;yes&quot;, $__pclass =&gt; Binary(0x80, &quot;MyClass&quot;), $unserialized =&gt; true }

/* typemap: [ &quot;root&quot; =&gt; &quot;YourClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;OurClass&quot; } }
  -&gt; OurClass { $foo =&gt; &quot;yes&quot;, $__pclass =&gt; Binary(0x80, &quot;OurClass&quot;), $unserialized =&gt; true }

/* typemap: [ &quot;root&quot; =&gt; &quot;YourClass&quot; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;TheirClass&quot; } }
  -&gt; TheirClass { $foo =&gt; &quot;yes&quot;, $__pclass =&gt; Binary(0x80, &quot;TheirClass&quot;), $unserialized =&gt; true }

/* typemap: [ &quot;root&quot; =&gt; &quot;OurClass&quot; ] */
{ foo: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;TheirClass&quot; } }
  -&gt; TheirClass { $foo =&gt; &quot;yes&quot;, $__pclass =&gt; Binary(0x80, &quot;TheirClass&quot;), $unserialized =&gt; true }</pre>
</div>
      </div>

     </p>

     <p class="para">
      <div class="example-contents">
<div class="textcode"><pre class="textcode">/* typemap: [ &#039;root&#039; =&gt; &#039;YourClass&#039; ] */
{ foo: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;YourClass&quot; } }
  -&gt; YourClass { $foo =&gt; &#039;yes&#039;, $__pclass =&gt; Binary(0x80, &#039;YourClass&#039;), $unserialized =&gt; true }</pre>
</div>
      </div>

     </p>

     <p class="para">
      <div class="example-contents">
<div class="textcode"><pre class="textcode">/* typemap: [ &#039;root&#039; =&gt; &#039;array&#039;, &#039;document&#039; =&gt; &#039;array&#039; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;bar&quot; : false }
  -&gt; [ &quot;foo&quot; =&gt; &quot;yes&quot;, &quot;bar&quot; =&gt; false ]

{ &quot;foo&quot;: &quot;no&quot;, &quot;array&quot; : [ 5, 6 ] }
  -&gt; [ &quot;foo&quot; =&gt; &quot;no&quot;, &quot;array&quot; =&gt; [ 5, 6 ] ]

{ &quot;foo&quot;: &quot;no&quot;, &quot;obj&quot; : { &quot;embedded&quot; : 3.14 } }
  -&gt; [ &quot;foo&quot; =&gt; &quot;no&quot;, &quot;obj&quot; =&gt; [ &quot;embedded =&gt; 3.14 ] ]

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: &quot;MyClass&quot; }
  -&gt; [ &quot;foo&quot; =&gt; &quot;yes&quot;, &quot;__pclass&quot; =&gt; &quot;MyClass&quot; ]

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;MyClass&quot; } }
  -&gt; [ &quot;foo&quot; =&gt; &quot;yes&quot;, &quot;__pclass&quot; =&gt; Binary(0x80, &quot;MyClass&quot;) ]

{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot; : { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;OurClass&quot; } }
  -&gt; [ &quot;foo&quot; =&gt; &quot;yes&quot;, &quot;__pclass&quot; =&gt; Binary(0x80, &quot;OurClass&quot;) ]</pre>
</div>
      </div>

     </p>

     <p class="para">
      <div class="example-contents">
<div class="textcode"><pre class="textcode">/* typemap: [ &#039;root&#039; =&gt; &#039;object&#039;, &#039;document&#039; =&gt; &#039;object&#039; ] */
{ &quot;foo&quot;: &quot;yes&quot;, &quot;__pclass&quot;: { &quot;$type&quot;: &quot;80&quot;, &quot;$binary&quot;: &quot;MyClass&quot; } }
  -&gt; stdClass { $foo =&gt; &quot;yes&quot;, &quot;__pclass&quot; =&gt; Binary(0x80, &quot;MyClass&quot;) }</pre>
</div>
      </div>

     </p>

   </div>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/architecture.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmongodb.persistence%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mongodb.persistence&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb.persistence.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mongodb.architecture.php">Driver Architecture and Internals</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mongodb.overview.php" title="Architecture">Architecture</a>
                        </li>
                                                <li class="">
                            <a href="mongodb.connection-handling.php" title="Connections">Connections</a>
                        </li>
                                                <li class="current">
                            <a href="mongodb.persistence.php" title="Persisting Data">Persisting Data</a>
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
