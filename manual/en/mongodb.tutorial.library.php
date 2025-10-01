<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Using the PHP Library for MongoDB (PHPLIB) - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mongodb.tutorial.library.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mongodb.tutorial.library.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mongodb.tutorial.library.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mongodb.tutorial.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb.tutorial.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb.tutorial.apm.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mongodb.tutorial.library.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mongodb.tutorial.library.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mongodb.tutorial.library.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mongodb.tutorial.library.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mongodb.tutorial.library.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mongodb.tutorial.library.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mongodb.tutorial.library.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mongodb.tutorial.library.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mongodb.tutorial.library.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mongodb.tutorial.library.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mongodb.tutorial.library.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using the PHP Library for MongoDB (PHPLIB)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Using the PHP Library for MongoDB (PHPLIB) - Manual" />
<meta name="twitter:description" content="Using the PHP Library for MongoDB (PHPLIB)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Using the PHP Library for MongoDB (PHPLIB) - Manual" />
<meta itemprop="description" content="Using the PHP Library for MongoDB (PHPLIB)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using the PHP Library for MongoDB (PHPLIB)" />

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
        <a href="mongodb.tutorial.apm.php">
          Application Performance Monitoring (APM) &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb.tutorial.php">
          &laquo; Tutorials        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.mongodb.php'>MongoDB</a></li>      <li><a href='mongodb.tutorial.php'>Tutorials</a></li>      </ul>
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
            <option value='en/mongodb.tutorial.library.php' selected="selected">English</option>
            <option value='de/mongodb.tutorial.library.php'>German</option>
            <option value='es/mongodb.tutorial.library.php'>Spanish</option>
            <option value='fr/mongodb.tutorial.library.php'>French</option>
            <option value='it/mongodb.tutorial.library.php'>Italian</option>
            <option value='ja/mongodb.tutorial.library.php'>Japanese</option>
            <option value='pt_BR/mongodb.tutorial.library.php'>Brazilian Portuguese</option>
            <option value='ru/mongodb.tutorial.library.php'>Russian</option>
            <option value='tr/mongodb.tutorial.library.php'>Turkish</option>
            <option value='uk/mongodb.tutorial.library.php'>Ukrainian</option>
            <option value='zh/mongodb.tutorial.library.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mongodb.tutorial.library" class="section">
 <h2 class="title">Using the PHP Library for MongoDB (PHPLIB)</h2>

 <p class="para">
  After the initial extension set-up, we will continue explaining how to get
  started with the corresponding userland library to write our first project.
 </p>

 <div class="section">
  <h2 class="title">Installing the PHP Library with Composer</h2>

  <p class="para">
   The last thing we still need to install to get started on the application
   itself, is the PHP library.
  </p>

  <p class="para">
   The library needs to be installed with
   <a href="https://getcomposer.org/" class="link external">&raquo;&nbsp;Composer</a>, a package manager
   for PHP. Instructions for installing Composer on various platforms may be
   found on its website.
   </p>

   <p class="para">
    Install the library by running:
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">$ composer require mongodb/mongodb</pre>
</div>
    </div>

   </p>

   <p class="para">
It will output something akin to:

    <div class="example-contents">
<div class="textcode"><pre class="textcode">./composer.json has been created
Loading composer repositories with package information
Updating dependencies (including require-dev)
  - Installing mongodb/mongodb (1.0.0)
    Downloading: 100%

Writing lock file
Generating autoload files</pre>
</div>
    </div>

   </p>

   <p class="para">
    Composer will create several files: <code class="code">composer.json</code>,
    <code class="code">composer.lock</code>, and a <code class="code">vendor</code> directory that will
    contain the library and any other dependencies your project might require.
   </p>
  </div>

  <div class="section">
   <h2 class="title">Using the PHP Library</h2>

   <p class="para">
    In addition to managing your dependencies, Composer will also provide you
    with an autoloader (for those dependencies&#039; classes). Ensure that it is
    included at the start of your script or in your application&#039;s bootstrap
    code:
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This path should point to Composer's autoloader<br /></span><span style="color: #007700">require </span><span style="color: #DD0000">'vendor/autoload.php'</span><span style="color: #007700">;</span></span></code></div>
    </div>

   </p>

   <p class="para">
    With this done, you can now use any of the functionality as described in the
    <a href="https://www.mongodb.com/docs/php-library/current/" class="link external">&raquo;&nbsp;library documentation</a>.
   </p>

   <p class="para">
    If you have used MongoDB drivers in other languages, the library&#039;s API
    should look familiar. It contains a
    <a href="https://www.mongodb.com/docs/php-library/master/reference/class/MongoDBClient/" class="link external">&raquo;&nbsp;Client</a>
    class for connecting to MongoDB, a
    <a href="https://www.mongodb.com/docs/php-library/master/reference/class/MongoDBDatabase/" class="link external">&raquo;&nbsp;Database</a>
    class for database-level operations (e.g. commands, collection management),
    and a
    <a href="https://www.mongodb.com/docs/php-library/master/reference/class/MongoDBCollection" class="link external">&raquo;&nbsp;Collection</a>
    class for collection-level operations (e.g.
    <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="link external">&raquo;&nbsp;CRUD</a> methods, index management).
   </p>

   <p class="para">
    As an example, this is how you insert a document into the
    <em>beers</em> collection of the <em>demo</em>
    database:
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">require </span><span style="color: #DD0000">'vendor/autoload.php'</span><span style="color: #007700">; </span><span style="color: #FF8000">// include Composer's autoloader<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Client</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://localhost:27017"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$collection </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">demo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beers</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$collection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insertOne</span><span style="color: #007700">( [ </span><span style="color: #DD0000">'name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hinterland'</span><span style="color: #007700">, </span><span style="color: #DD0000">'brewery' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'BrewDog' </span><span style="color: #007700">] );<br /><br />echo </span><span style="color: #DD0000">"Inserted with Object ID '</span><span style="color: #007700">{</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInsertedId</span><span style="color: #007700">()}</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </p>

   <p class="para">
    Since the inserted document did not contain an <code class="code">_id</code> field, the
    extension will generate an <span class="classname"><a href="class.mongodb-bson-objectid.php" class="classname">MongoDB\BSON\ObjectId</a></span> for
    the server to use as the <code class="code">_id</code>. This value is also made available
    to the caller via the result object returned by the <code class="code">insertOne</code>
    method.
   </p>

   <p class="para">
    After insertion, you can query for the data that you have just inserted.
    For that, you use the <code class="code">find</code> method, which returns an iterable
    cursor:
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">require </span><span style="color: #DD0000">'vendor/autoload.php'</span><span style="color: #007700">; </span><span style="color: #FF8000">// include Composer's autoloader<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">MongoDB\Client</span><span style="color: #007700">(</span><span style="color: #DD0000">"mongodb://localhost:27017"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$collection </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">demo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beers</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$collection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">find</span><span style="color: #007700">( [ </span><span style="color: #DD0000">'name' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hinterland'</span><span style="color: #007700">, </span><span style="color: #DD0000">'brewery' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'BrewDog' </span><span style="color: #007700">] );<br /><br />foreach (</span><span style="color: #0000BB">$result </span><span style="color: #007700">as </span><span style="color: #0000BB">$entry</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$entry</span><span style="color: #007700">[</span><span style="color: #DD0000">'_id'</span><span style="color: #007700">], </span><span style="color: #DD0000">': '</span><span style="color: #007700">, </span><span style="color: #0000BB">$entry</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </p>

   <p class="para">
    While it may not be apparent in the examples, BSON documents and arrays are
    unserialized as special classes in the library by default. These classes
    extend <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span> for usability and implement the
    extension&#039;s <span class="interfacename"><a href="class.mongodb-bson-serializable.php" class="interfacename">MongoDB\BSON\Serializable</a></span> and
    <span class="interfacename"><a href="class.mongodb-bson-unserializable.php" class="interfacename">MongoDB\BSON\Unserializable</a></span> interfaces to
    ensure that values preserve their type when serialized back into BSON. This
    avoids a caveat in the legacy <code class="code">mongo</code> extension where arrays
    might turn into documents, and vice versa. See the
    <a href="mongodb.persistence.php" class="xref">Persisting Data</a> specification for more information on
    how values are converted between PHP and BSON.
   </p>
  </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/tutorial/library.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmongodb.tutorial.library%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mongodb.tutorial.library&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb.tutorial.library.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122519">  <div class="votes">
    <div id="Vu122519">
    <a href="/manual/vote-note.php?id=122519&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122519">
    <a href="/manual/vote-note.php?id=122519&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122519" title="67% like this...">
    22
    </div>
  </div>
  <a href="#122519" class="name">
  <strong class="user"><em>surajtiwari020 at gmail dot com</em></strong></a><a class="genanchor" href="#122519"> &para;</a><div class="date" title="2018-03-16 05:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122519">
<div class="phpcode"><code><span class="html">Well most of the tutorials didn't explained well, So i hope this might help someone <br />Note: this is a part of my laravel project  <br /><br />//getting data from a collection<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">MongoDB\Client </span><span class="keyword">as </span><span class="default">Mongo</span><span class="keyword">;<br /><br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">"admin"</span><span class="keyword">;<br /></span><span class="default">$pwd </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;<br /><br /></span><span class="default">$mongo </span><span class="keyword">= new </span><span class="default">Mongo</span><span class="keyword">(</span><span class="string">"mongodb://</span><span class="keyword">${</span><span class="default">user</span><span class="keyword">}</span><span class="string">:</span><span class="keyword">${</span><span class="default">pwd</span><span class="keyword">}</span><span class="string">@127.0.0.1:27017"</span><span class="keyword">);<br /></span><span class="default">$collection </span><span class="keyword">= </span><span class="default">$mongo</span><span class="keyword">-&gt;</span><span class="default">db_name</span><span class="keyword">-&gt;</span><span class="default">collection</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">find</span><span class="keyword">()-&gt;</span><span class="default">toArray</span><span class="keyword">();<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124121">  <div class="votes">
    <div id="Vu124121">
    <a href="/manual/vote-note.php?id=124121&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124121">
    <a href="/manual/vote-note.php?id=124121&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124121" title="80% like this...">
    9
    </div>
  </div>
  <a href="#124121" class="name">
  <strong class="user"><em>salos_12 at hotmail dot com</em></strong></a><a class="genanchor" href="#124121"> &para;</a><div class="date" title="2019-08-16 07:16"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124121">
<div class="phpcode"><code><span class="html">When your database name contains a "-" (e.g. database-name) you need to use a string instead.<br /><br /><span class="default">&lt;?php<br /><br />$client </span><span class="keyword">= new </span><span class="default">MongoDB\Client</span><span class="keyword">(</span><span class="string">"mongodb://ip_address:port"</span><span class="keyword">);<br /></span><span class="default">$collection </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;{</span><span class="string">'database-name'</span><span class="keyword">}-&gt;</span><span class="default">collection</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124329">  <div class="votes">
    <div id="Vu124329">
    <a href="/manual/vote-note.php?id=124329&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124329">
    <a href="/manual/vote-note.php?id=124329&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124329" title="75% like this...">
    4
    </div>
  </div>
  <a href="#124329" class="name">
  <strong class="user"><em>wpg</em></strong></a><a class="genanchor" href="#124329"> &para;</a><div class="date" title="2019-10-23 05:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124329">
<div class="phpcode"><code><span class="html">If you have a number of JSON documents with nested elements such as 'responseId' below and you want to know how many documents have a responseId:<br />{"result":{"responseId":"xyz"}}<br />{"result":NULL}<br />{"result":{"responseId":"abc"}}<br /><br />I was not having luck with the following format<br /><span class="default">&lt;?php <br /></span><span class="comment">// trying to get the count of documents where responseId is not equal to NULL (did not work for me)<br /></span><span class="default">$intCount </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">([</span><span class="string">'result' </span><span class="keyword">=&gt; [</span><span class="string">'responseId' </span><span class="keyword">=&gt; [</span><span class="string">'$ne' </span><span class="keyword">=&gt; </span><span class="default">NULL</span><span class="keyword">]]]);<br /></span><span class="default">?&gt;<br /></span><br />Instead I needed to use a period between the JSON elements:<br /><span class="default">&lt;?php<br /></span><span class="comment">// get the count of documents where responseId is not equal to NULL<br /></span><span class="default">$intCount </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">([</span><span class="string">'result.responseId' </span><span class="keyword">=&gt; [</span><span class="string">'$ne' </span><span class="keyword">=&gt; </span><span class="default">NULL</span><span class="keyword">]]);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121084">  <div class="votes">
    <div id="Vu121084">
    <a href="/manual/vote-note.php?id=121084&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121084">
    <a href="/manual/vote-note.php?id=121084&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121084" title="58% like this...">
    9
    </div>
  </div>
  <a href="#121084" class="name">
  <strong class="user"><em>crystale dot darck at gmail dot com</em></strong></a><a class="genanchor" href="#121084"> &para;</a><div class="date" title="2017-05-15 04:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121084">
<div class="phpcode"><code><span class="html">To test your connection string, you can do something like this:<br /><br /><span class="default">&lt;?php<br />$mongo </span><span class="keyword">= new </span><span class="default">MongoDB\Client</span><span class="keyword">(</span><span class="string">'mongodb://my_server_does_not_exist_here:27017'</span><span class="keyword">);<br />try <br />{<br />    </span><span class="default">$dbs </span><span class="keyword">= </span><span class="default">$mongo</span><span class="keyword">-&gt;</span><span class="default">listDatabases</span><span class="keyword">();<br />}<br />catch (</span><span class="default">MongoDB\Driver\Exception\ConnectionTimeoutException $e</span><span class="keyword">)<br />{<br />    </span><span class="comment">// PHP cannot find a MongoDB server using the MongoDB connection string specified<br />    // do something here<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118888">  <div class="votes">
    <div id="Vu118888">
    <a href="/manual/vote-note.php?id=118888&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118888">
    <a href="/manual/vote-note.php?id=118888&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118888" title="56% like this...">
    6
    </div>
  </div>
  <a href="#118888" class="name">
  <strong class="user"><em>Dc Shiman</em></strong></a><a class="genanchor" href="#118888"> &para;</a><div class="date" title="2016-02-23 03:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118888">
<div class="phpcode"><code><span class="html">Do a text search on the collection with projection<br /><br />$search['$text'] = ['$search' =&gt; "foo"];<br />$options["projection"] = ['score' =&gt; ['$meta' =&gt; "textScore"]];<br />$options["sort"] = ["score" =&gt; ['$meta' =&gt; "textScore"]];<br /><br />$cursor = $collection-&gt;find($search, $options);</span></code></div>
  </div>
 </div>
  <div class="note" id="119729">  <div class="votes">
    <div id="Vu119729">
    <a href="/manual/vote-note.php?id=119729&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119729">
    <a href="/manual/vote-note.php?id=119729&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119729" title="54% like this...">
    4
    </div>
  </div>
  <a href="#119729" class="name">
  <strong class="user"><em>Basher</em></strong></a><a class="genanchor" href="#119729"> &para;</a><div class="date" title="2016-08-12 04:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119729">
<div class="phpcode"><code><span class="html">Pecl MongoDB at time of writing can be installed (see phpinfo()) but composer will complain that it's not present.<br /><br />$  composer require "mongodb/mongodb=^1.0.0"<br />...<br />Your requirements could not be resolved to an installable set of packages.<br /><br />If you see this try <br /><br />$ composer require "mongodb/mongodb=^1.0.0" --ignore-platform-reqs</span></code></div>
  </div>
 </div>
  <div class="note" id="129840">  <div class="votes">
    <div id="Vu129840">
    <a href="/manual/vote-note.php?id=129840&amp;page=mongodb.tutorial.library&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129840">
    <a href="/manual/vote-note.php?id=129840&amp;page=mongodb.tutorial.library&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129840" title="no votes...">
    0
    </div>
  </div>
  <a href="#129840" class="name">
  <strong class="user"><em>drankinatty at NOSPAMgmail dot com</em></strong></a><a class="genanchor" href="#129840"> &para;</a><div class="date" title="2024-11-07 09:21"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129840">
<div class="phpcode"><code><span class="html">One question that was unanswered was how to handle insertion of a full JSON document provided as an argument (or in a string variable). The mongodb extension can handle this by simply using json_decode() to convert the JSON document to an object that can then be easily inserted, e.g. (with full document provided as the 2nd command-line argument)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* include libmongo API */<br /></span><span class="keyword">require </span><span class="string">"vendor/autoload.php"</span><span class="keyword">;<br /><br /></span><span class="comment">/* include connection string, db and collection values */<br /></span><span class="keyword">require </span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">'/site/db-mongo-inc.php'</span><span class="keyword">;<br /><br /></span><span class="comment">/* use MongoDBClient; */<br /></span><span class="keyword">use </span><span class="default">MongoDB\Client</span><span class="keyword">;<br /><br /></span><span class="comment">/* connection string */<br /></span><span class="default">$uri </span><span class="keyword">= </span><span class="string">"mongodb://</span><span class="default">$user</span><span class="string">:</span><span class="default">$pass</span><span class="string">@localhost"</span><span class="keyword">;<br /><br /></span><span class="comment">/* attempt connection to database with $uri */<br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">MongoDB\Client</span><span class="keyword">(</span><span class="string">"</span><span class="default">$uri</span><span class="string">"</span><span class="keyword">);<br />if (!isset(</span><span class="default">$client</span><span class="keyword">)) {<br />  echo </span><span class="string">'error: connection failed'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/* define collection of documents */<br /></span><span class="default">$collection </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">$collection</span><span class="keyword">;<br /><br /></span><span class="comment">/* insert JSON document from string variable (here $argv[2]) */<br /></span><span class="keyword">if (</span><span class="default">$argc </span><span class="keyword">&gt; </span><span class="default">2</span><span class="keyword">) {<br />  </span><span class="default">$jsobj </span><span class="keyword">= </span><span class="default">json_decode </span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />  if (</span><span class="default">$jsobj</span><span class="keyword">) {<br />    </span><span class="default">$iresult </span><span class="keyword">= </span><span class="default">$collection</span><span class="keyword">-&gt;</span><span class="default">insertOne </span><span class="keyword">( </span><span class="default">$jsobj </span><span class="keyword">);<br />    if (!</span><span class="default">$iresult</span><span class="keyword">) {<br />      </span><span class="default">printf </span><span class="keyword">(</span><span class="string">"error: insert of object failed.\n"</span><span class="keyword">);<br />    }<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />The extension's block insert feature recursively resolves all field and data values contained in the object and inserts the entire document in the collection. It is helpful to remove the "_id:" field and have that auto-generated for you to avoid issues.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mongodb.tutorial.library&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mongodb.tutorial.library.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mongodb.tutorial.php">Tutorials</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="mongodb.tutorial.library.php" title="Using the PHP Library for MongoDB (PHPLIB)">Using the PHP Library for MongoDB (PHPLIB)</a>
                        </li>
                                                <li class="">
                            <a href="mongodb.tutorial.apm.php" title="Application Performance Monitoring (APM)">Application Performance Monitoring (APM)</a>
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
