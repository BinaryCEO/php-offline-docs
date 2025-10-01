<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Phar::createDefaultStub - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/phar.createdefaultstub.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/phar.createdefaultstub.php">
 <link rel="alternate" href="https://www.php.net/manual/en/phar.createdefaultstub.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.phar.php">
 <link rel="prev" href="https://www.php.net/manual/en/phar.count.php">
 <link rel="next" href="https://www.php.net/manual/en/phar.decompress.php">

 <link rel="alternate" href="https://www.php.net/manual/en/phar.createdefaultstub.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/phar.createdefaultstub.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/phar.createdefaultstub.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/phar.createdefaultstub.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/phar.createdefaultstub.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/phar.createdefaultstub.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/phar.createdefaultstub.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/phar.createdefaultstub.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/phar.createdefaultstub.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/phar.createdefaultstub.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/phar.createdefaultstub.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a phar-file format specific stub" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Phar::createDefaultStub - Manual" />
<meta name="twitter:description" content="Create a phar-file format specific stub" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Phar::createDefaultStub - Manual" />
<meta itemprop="description" content="Create a phar-file format specific stub" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a phar-file format specific stub" />

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
        <a href="phar.decompress.php">
          Phar::decompress &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="phar.count.php">
          &laquo; Phar::count        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.phar.php'>Phar</a></li>      <li><a href='class.phar.php'>Phar</a></li>      </ul>
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
            <option value='en/phar.createdefaultstub.php' selected="selected">English</option>
            <option value='de/phar.createdefaultstub.php'>German</option>
            <option value='es/phar.createdefaultstub.php'>Spanish</option>
            <option value='fr/phar.createdefaultstub.php'>French</option>
            <option value='it/phar.createdefaultstub.php'>Italian</option>
            <option value='ja/phar.createdefaultstub.php'>Japanese</option>
            <option value='pt_BR/phar.createdefaultstub.php'>Brazilian Portuguese</option>
            <option value='ru/phar.createdefaultstub.php'>Russian</option>
            <option value='tr/phar.createdefaultstub.php'>Turkish</option>
            <option value='uk/phar.createdefaultstub.php'>Ukrainian</option>
            <option value='zh/phar.createdefaultstub.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="phar.createdefaultstub" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Phar::createDefaultStub</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL phar &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Phar::createDefaultStub</span> &mdash; <span class="dc-title">Create a phar-file format specific stub</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-phar.createdefaultstub-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>Phar::createDefaultStub</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$webIndex</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>


  <p class="para rdfs-comment">
   This method is intended for creation of phar-file format-specific stubs, and is
   not intended for use with tar- or zip-based phar archives.
  </p>
  <p class="para">
   Phar archives contain a bootstrap loader, or <code class="literal">stub</code>
   written in PHP that is executed when the archive is executed in PHP either via
   include:
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'myphar.phar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   or by simple execution:
   <div class="example-contents screen">
    <div class="descriptioncode"><pre class="descriptioncode">php myphar.phar</pre>
</div>
   </div>
  </p>
  <p class="para">
   This method provides a simple and easy method to create a stub that will
   run a startup file from the phar archive.  In addition, different files can
   be specified for running the phar archive from the command line versus through
   a web server.  The loader stub also calls <span class="function"><a href="phar.interceptfilefuncs.php" class="function">Phar::interceptFileFuncs()</a></span>
   to allow easy bundling of a PHP application that accesses the file system.  If the
   phar extension is not present, the loader stub will extract the phar archive
   to a temporary directory and then operate on the files.  A shutdown function
   erases the temporary files on exit.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-phar.createdefaultstub-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">index</code></dt>
     <dd>
      <p class="para">
       Relative path within the phar archive to run if accessed on the command-line
      </p>
     </dd>
    
    
     <dt><code class="parameter">webIndex</code></dt>
     <dd>
      <p class="para">
       Relative path within the phar archive to run if accessed through a web browser
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-phar.createdefaultstub-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the contents of a customized bootstrap loader (stub)
   that allows the created Phar archive to work with or without the Phar extension
   enabled.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-phar.createdefaultstub-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws <span class="classname"><a href="class.unexpectedvalueexception.php" class="classname">UnexpectedValueException</a></span> if either parameter is longer
   than 400 bytes.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-phar.createdefaultstub-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">index</code> and <code class="parameter">webIndex</code> are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-phar.createdefaultstub-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-813">
    <p><strong>Example #1 A <span class="function"><strong>Phar::createDefaultStub()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">$phar </span><span style="color: #007700">= new </span><span style="color: #0000BB">Phar</span><span style="color: #007700">(</span><span style="color: #DD0000">'myphar.phar'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$phar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStub</span><span style="color: #007700">(</span><span style="color: #0000BB">$phar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createDefaultStub</span><span style="color: #007700">(</span><span style="color: #DD0000">'cli.php'</span><span style="color: #007700">, </span><span style="color: #DD0000">'web/index.php'</span><span style="color: #007700">));<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// handle errors<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-phar.createdefaultstub-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="phar.setstub.php" class="function" rel="rdfs-seeAlso">Phar::setStub()</a> - Used to set the PHP loader or bootstrap stub of a Phar archive</span></li>
    <li><span class="function"><a href="phar.getstub.php" class="function" rel="rdfs-seeAlso">Phar::getStub()</a> - Return the PHP loader or bootstrap stub of a Phar archive</span></li>
   </ul>
  </p>
 </div>



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/phar/Phar/createDefaultStub.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fphar.createdefaultstub%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=phar.createdefaultstub&amp;repo=en&amp;redirect=https://www.php.net/manual/en/phar.createdefaultstub.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.phar.php">Phar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="phar.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="">
                            <a href="phar.addfile.php" title="addFile">addFile</a>
                        </li>
                                                <li class="">
                            <a href="phar.addfromstring.php" title="addFromString">addFromString</a>
                        </li>
                                                <li class="">
                            <a href="phar.apiversion.php" title="apiVersion">apiVersion</a>
                        </li>
                                                <li class="">
                            <a href="phar.buildfromdirectory.php" title="buildFromDirectory">buildFromDirectory</a>
                        </li>
                                                <li class="">
                            <a href="phar.buildfromiterator.php" title="buildFromIterator">buildFromIterator</a>
                        </li>
                                                <li class="">
                            <a href="phar.cancompress.php" title="canCompress">canCompress</a>
                        </li>
                                                <li class="">
                            <a href="phar.canwrite.php" title="canWrite">canWrite</a>
                        </li>
                                                <li class="">
                            <a href="phar.compress.php" title="compress">compress</a>
                        </li>
                                                <li class="">
                            <a href="phar.compressfiles.php" title="compressFiles">compressFiles</a>
                        </li>
                                                <li class="">
                            <a href="phar.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="phar.converttodata.php" title="convertToData">convertToData</a>
                        </li>
                                                <li class="">
                            <a href="phar.converttoexecutable.php" title="convertToExecutable">convertToExecutable</a>
                        </li>
                                                <li class="">
                            <a href="phar.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="phar.count.php" title="count">count</a>
                        </li>
                                                <li class="current">
                            <a href="phar.createdefaultstub.php" title="createDefaultStub">createDefaultStub</a>
                        </li>
                                                <li class="">
                            <a href="phar.decompress.php" title="decompress">decompress</a>
                        </li>
                                                <li class="">
                            <a href="phar.decompressfiles.php" title="decompressFiles">decompressFiles</a>
                        </li>
                                                <li class="">
                            <a href="phar.delmetadata.php" title="delMetadata">delMetadata</a>
                        </li>
                                                <li class="">
                            <a href="phar.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="phar.destruct.php" title="_&#8203;_&#8203;destruct">_&#8203;_&#8203;destruct</a>
                        </li>
                                                <li class="">
                            <a href="phar.extractto.php" title="extractTo">extractTo</a>
                        </li>
                                                <li class="">
                            <a href="phar.getalias.php" title="getAlias">getAlias</a>
                        </li>
                                                <li class="">
                            <a href="phar.getmetadata.php" title="getMetadata">getMetadata</a>
                        </li>
                                                <li class="">
                            <a href="phar.getmodified.php" title="getModified">getModified</a>
                        </li>
                                                <li class="">
                            <a href="phar.getpath.php" title="getPath">getPath</a>
                        </li>
                                                <li class="">
                            <a href="phar.getsignature.php" title="getSignature">getSignature</a>
                        </li>
                                                <li class="">
                            <a href="phar.getstub.php" title="getStub">getStub</a>
                        </li>
                                                <li class="">
                            <a href="phar.getsupportedcompression.php" title="getSupportedCompression">getSupportedCompression</a>
                        </li>
                                                <li class="">
                            <a href="phar.getsupportedsignatures.php" title="getSupportedSignatures">getSupportedSignatures</a>
                        </li>
                                                <li class="">
                            <a href="phar.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="phar.hasmetadata.php" title="hasMetadata">hasMetadata</a>
                        </li>
                                                <li class="">
                            <a href="phar.interceptfilefuncs.php" title="interceptFileFuncs">interceptFileFuncs</a>
                        </li>
                                                <li class="">
                            <a href="phar.isbuffering.php" title="isBuffering">isBuffering</a>
                        </li>
                                                <li class="">
                            <a href="phar.iscompressed.php" title="isCompressed">isCompressed</a>
                        </li>
                                                <li class="">
                            <a href="phar.isfileformat.php" title="isFileFormat">isFileFormat</a>
                        </li>
                                                <li class="">
                            <a href="phar.isvalidpharfilename.php" title="isValidPharFilename">isValidPharFilename</a>
                        </li>
                                                <li class="">
                            <a href="phar.iswritable.php" title="isWritable">isWritable</a>
                        </li>
                                                <li class="">
                            <a href="phar.loadphar.php" title="loadPhar">loadPhar</a>
                        </li>
                                                <li class="">
                            <a href="phar.mapphar.php" title="mapPhar">mapPhar</a>
                        </li>
                                                <li class="">
                            <a href="phar.mount.php" title="mount">mount</a>
                        </li>
                                                <li class="">
                            <a href="phar.mungserver.php" title="mungServer">mungServer</a>
                        </li>
                                                <li class="">
                            <a href="phar.offsetexists.php" title="offsetExists">offsetExists</a>
                        </li>
                                                <li class="">
                            <a href="phar.offsetget.php" title="offsetGet">offsetGet</a>
                        </li>
                                                <li class="">
                            <a href="phar.offsetset.php" title="offsetSet">offsetSet</a>
                        </li>
                                                <li class="">
                            <a href="phar.offsetunset.php" title="offsetUnset">offsetUnset</a>
                        </li>
                                                <li class="">
                            <a href="phar.running.php" title="running">running</a>
                        </li>
                                                <li class="">
                            <a href="phar.setalias.php" title="setAlias">setAlias</a>
                        </li>
                                                <li class="">
                            <a href="phar.setdefaultstub.php" title="setDefaultStub">setDefaultStub</a>
                        </li>
                                                <li class="">
                            <a href="phar.setmetadata.php" title="setMetadata">setMetadata</a>
                        </li>
                                                <li class="">
                            <a href="phar.setsignaturealgorithm.php" title="setSignatureAlgorithm">setSignatureAlgorithm</a>
                        </li>
                                                <li class="">
                            <a href="phar.setstub.php" title="setStub">setStub</a>
                        </li>
                                                <li class="">
                            <a href="phar.startbuffering.php" title="startBuffering">startBuffering</a>
                        </li>
                                                <li class="">
                            <a href="phar.stopbuffering.php" title="stopBuffering">stopBuffering</a>
                        </li>
                                                <li class="">
                            <a href="phar.unlinkarchive.php" title="unlinkArchive">unlinkArchive</a>
                        </li>
                                                <li class="">
                            <a href="phar.webphar.php" title="webPhar">webPhar</a>
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
