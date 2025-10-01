<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SessionHandlerInterface - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.sessionhandlerinterface.php">
 <link rel="shorturl" href="https://www.php.net/sessionhandlerinterface">
 <link rel="alternate" href="https://www.php.net/sessionhandlerinterface" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/sessionhandler.write.php">
 <link rel="next" href="https://www.php.net/manual/en/sessionhandlerinterface.close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.sessionhandlerinterface.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.sessionhandlerinterface.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.sessionhandlerinterface.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.sessionhandlerinterface.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.sessionhandlerinterface.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.sessionhandlerinterface.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.sessionhandlerinterface.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.sessionhandlerinterface.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.sessionhandlerinterface.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.sessionhandlerinterface.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.sessionhandlerinterface.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SessionHandlerInterface class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SessionHandlerInterface - Manual" />
<meta name="twitter:description" content="The SessionHandlerInterface class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SessionHandlerInterface - Manual" />
<meta itemprop="description" content="The SessionHandlerInterface class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SessionHandlerInterface class" />

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
        <a href="sessionhandlerinterface.close.php">
          SessionHandlerInterface::close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sessionhandler.write.php">
          &laquo; SessionHandler::write        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      </ul>
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
            <option value='en/class.sessionhandlerinterface.php' selected="selected">English</option>
            <option value='de/class.sessionhandlerinterface.php'>German</option>
            <option value='es/class.sessionhandlerinterface.php'>Spanish</option>
            <option value='fr/class.sessionhandlerinterface.php'>French</option>
            <option value='it/class.sessionhandlerinterface.php'>Italian</option>
            <option value='ja/class.sessionhandlerinterface.php'>Japanese</option>
            <option value='pt_BR/class.sessionhandlerinterface.php'>Brazilian Portuguese</option>
            <option value='ru/class.sessionhandlerinterface.php'>Russian</option>
            <option value='tr/class.sessionhandlerinterface.php'>Turkish</option>
            <option value='uk/class.sessionhandlerinterface.php'>Ukrainian</option>
            <option value='zh/class.sessionhandlerinterface.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.sessionhandlerinterface" class="reference">

 <h1 class="title">The SessionHandlerInterface class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p>


  <div class="section" id="sessionhandlerinterface.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="classname"><strong class="classname">SessionHandlerInterface</strong></span> is an interface which defines the minimal
    prototype for creating a custom session handler. In order to pass a custom
    session handler to <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span> using its
    <abbr class="abbrev">OOP</abbr> invocation, the class can implement this interface.
   </p>
   <p class="para">
    Please note the callback methods of this class are designed to be called internally by
    PHP and are not meant to be called from user-space code.
   </p>
  </div>


  <div class="section" id="sessionhandlerinterface.synopsis">
   <h2 class="title">Interface synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">SessionHandlerInterface</strong></strong> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.destroy.php" class="methodname">destroy</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.gc.php" class="methodname">gc</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_lifetime</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.open.php" class="methodname">open</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.read.php" class="methodname">read</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sessionhandlerinterface.write.php" class="methodname">write</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>

  <div class="section" id="sessionhandlerinterface.examples">
   <h2 class="title">Examples</h2>
   <div class="example" id="example-5016">
    <p><strong>Example #1 
     Example using <span class="classname"><strong class="classname">SessionHandlerInterface</strong></span>
    </strong></p>
    <div class="example-contents"><p>
     The following example provides file based session storage similar to the
     PHP sessions default save handler <code class="parameter">files</code>.  This
     example could easily be extended to cover database storage using your
     favorite PHP supported database engine.
    </p></div>
    <div class="example-contents"><p>
     Note we use the OOP prototype with <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span> and
     register the shutdown function using the function&#039;s parameter flag.  This is generally
     advised when registering objects as session save handlers.
    </p></div>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="para">
      For brevity, this example omits input validation. However, the
      <code class="literal">$id</code> parameters are actually user supplied values which
      require proper validation/sanitization to avoid vulnerabilities, such as
      path traversal issues. <em>So do not use this example unmodified in
      production environments.</em>
     </p>
    </div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MySessionHandler </span><span style="color: #007700">implements </span><span style="color: #0000BB">SessionHandlerInterface<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$savePath</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #0000BB">$savePath</span><span style="color: #007700">, </span><span style="color: #0000BB">$sessionName</span><span style="color: #007700">): </span><span style="color: #0000BB">bool<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath </span><span style="color: #007700">= </span><span style="color: #0000BB">$savePath</span><span style="color: #007700">;<br />        if (!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #007700">, </span><span style="color: #0000BB">0777</span><span style="color: #007700">);<br />        }<br /><br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">close</span><span style="color: #007700">(): </span><span style="color: #0000BB">bool<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br /><br />    #[</span><span style="color: #0000BB">\ReturnTypeWillChange</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">read</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />    {<br />        return (string) @</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #DD0000">/sess_</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    }<br /><br />    public function </span><span style="color: #0000BB">write</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">): </span><span style="color: #0000BB">bool<br />    </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #DD0000">/sess_</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">"</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">) === </span><span style="color: #0000BB">false </span><span style="color: #007700">? </span><span style="color: #0000BB">false </span><span style="color: #007700">: </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">destroy</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">): </span><span style="color: #0000BB">bool<br />    </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">$file </span><span style="color: #007700">= </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #DD0000">/sess_</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />        if (</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />        }<br /><br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br /><br />    #[</span><span style="color: #0000BB">\ReturnTypeWillChange</span><span style="color: #007700">]<br />    public function </span><span style="color: #0000BB">gc</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxlifetime</span><span style="color: #007700">)<br />    {<br />        foreach (</span><span style="color: #0000BB">glob</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savePath</span><span style="color: #DD0000">/sess_*"</span><span style="color: #007700">) as </span><span style="color: #0000BB">$file</span><span style="color: #007700">) {<br />            if (</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">) + </span><span style="color: #0000BB">$maxlifetime </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">time</span><span style="color: #007700">() &amp;&amp; </span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)) {<br />                </span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />            }<br />        }<br /><br />        return </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$handler </span><span style="color: #007700">= new </span><span style="color: #0000BB">MySessionHandler</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">session_set_save_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$handler</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// proceed to set and retrieve values by key from $_SESSION</span></span></code></div>
    </div>

   </div>
  </div>

 </div>

 






























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="sessionhandlerinterface.close.php">SessionHandlerInterface::close</a> — Close the session</li><li><a href="sessionhandlerinterface.destroy.php">SessionHandlerInterface::destroy</a> — Destroy a session</li><li><a href="sessionhandlerinterface.gc.php">SessionHandlerInterface::gc</a> — Cleanup old sessions</li><li><a href="sessionhandlerinterface.open.php">SessionHandlerInterface::open</a> — Initialize session</li><li><a href="sessionhandlerinterface.read.php">SessionHandlerInterface::read</a> — Read session data</li><li><a href="sessionhandlerinterface.write.php">SessionHandlerInterface::write</a> — Write session data</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/sessionhandlerinterface.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.sessionhandlerinterface%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.sessionhandlerinterface&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.sessionhandlerinterface.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122032">  <div class="votes">
    <div id="Vu122032">
    <a href="/manual/vote-note.php?id=122032&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122032">
    <a href="/manual/vote-note.php?id=122032&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122032" title="92% like this...">
    24
    </div>
  </div>
  <a href="#122032" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#122032"> &para;</a><div class="date" title="2017-12-16 04:50"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122032">
<div class="phpcode"><code><span class="html">As of PHP 7.0, you can implement SessionUpdateTimestampHandlerInterface to <br />define your own session id validating method like validate_sid and the timestamp updating method like update_timestamp in the non-OOP prototype of session_set_save_handler().<br /><br />SessionUpdateTimestampHandlerInterface is a new interface introduced in PHP 7.0, which has not been documented yet. It has two abstract methods: SessionUpdateTimestampHandlerInterface :: validateId($sessionId) and SessionUpdateTimestampHandlerInterface :: updateTimestamp($sessionId, $sessionData).<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/*<br />       @author Wu Xiancheng<br />       Code structure for PHP 7.0+ only because SessionUpdateTimestampHandlerInterface is introduced in PHP 7.0<br />       With this class you can validate php session id and update the timestamp of php session data<br />       with the OOP prototype of session_set_save_handler() in PHP 7.0+<br />    */<br />    </span><span class="keyword">class </span><span class="default">PHPSessionXHandler </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface</span><span class="keyword">, </span><span class="default">SessionUpdateTimestampHandlerInterface </span><span class="keyword">{<br />        public function </span><span class="default">close</span><span class="keyword">(){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">destroy</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ... <br />        </span><span class="keyword">}<br />        public function </span><span class="default">gc</span><span class="keyword">(</span><span class="default">$maximumLifetime</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$sessionSavePath</span><span class="keyword">, </span><span class="default">$sessionName</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// return value should be the session data or an empty string<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">$sessionData</span><span class="keyword">){<br />            </span><span class="comment">// return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">create_sid</span><span class="keyword">(){<br />            </span><span class="comment">// available since PHP 5.5.1<br />            // invoked internally when a new session id is needed<br />            // no parameter is needed and return value should be the new session id created<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">validateId</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">){<br />            </span><span class="comment">// implements SessionUpdateTimestampHandlerInterface::validateId()<br />            // available since PHP 7.0<br />            // return value should be true if the session id is valid otherwise false<br />            // if false is returned a new session id will be generated by php internally<br />            // ...<br />        </span><span class="keyword">}<br />        public function </span><span class="default">updateTimestamp</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">$sessionData</span><span class="keyword">){<br />            </span><span class="comment">// implements SessionUpdateTimestampHandlerInterface::validateId()<br />            // available since PHP 7.0<br />            // return value should be true for success or false for failure<br />            // ...<br />        </span><span class="keyword">}<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122030">  <div class="votes">
    <div id="Vu122030">
    <a href="/manual/vote-note.php?id=122030&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122030">
    <a href="/manual/vote-note.php?id=122030&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122030" title="100% like this...">
    6
    </div>
  </div>
  <a href="#122030" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#122030"> &para;</a><div class="date" title="2017-12-16 08:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122030">
<div class="phpcode"><code><span class="html">The non-OOP prototype of session_set_save_handler() supports validate_sid and update_timestamp as of PHP 7.0 while the OOP prototype doesn't even in PHP 7.2. However the OOP prototype does support create_sid since PHP 5.5.1.<br /><br />validate_sid($sessionId)<br />  This callback is to validate $sessionId. Its return value should be true for valid session id $sessionId or false for invalid session id $sessionId. If false is returned, a new session id is generated to replace the invalid session id $sessionId.<br /><br />update_timestamp($sessionId)<br />  This call back is to update timestamp, and its return value should be true for success or false for failure.</span></code></div>
  </div>
 </div>
  <div class="note" id="121970">  <div class="votes">
    <div id="Vu121970">
    <a href="/manual/vote-note.php?id=121970&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121970">
    <a href="/manual/vote-note.php?id=121970&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121970" title="66% like this...">
    1
    </div>
  </div>
  <a href="#121970" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121970"> &para;</a><div class="date" title="2017-12-03 10:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121970">
<div class="phpcode"><code><span class="html">As of PHP 5.5.1, another method create_sid() is supported. It will be called when session_regenerate_id() is invoked.<br /><br />SessionHandlerInterface {<br />    /* Methods */<br />    abstract public bool close ( void )<br />    abstract public bool create_sid ( void )    <br />    abstract public bool destroy ( string $session_id )<br />    abstract public bool gc ( int $maxlifetime )<br />    abstract public bool open ( string $save_path , string $session_name )<br />    abstract public string read ( string $session_id )<br />    abstract public bool write ( string $session_id , string $session_data )<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="110125">  <div class="votes">
    <div id="Vu110125">
    <a href="/manual/vote-note.php?id=110125&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110125">
    <a href="/manual/vote-note.php?id=110125&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110125" title="53% like this...">
    5
    </div>
  </div>
  <a href="#110125" class="name">
  <strong class="user"><em>warxcell at gmail dot com</em></strong></a><a class="genanchor" href="#110125"> &para;</a><div class="date" title="2012-09-21 11:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110125">
<div class="phpcode"><code><span class="html">You should prepend &lt;b&gt;\&lt;/b&gt; before class name, to tell php its from root namespace.</span></code></div>
  </div>
 </div>
  <div class="note" id="116288">  <div class="votes">
    <div id="Vu116288">
    <a href="/manual/vote-note.php?id=116288&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116288">
    <a href="/manual/vote-note.php?id=116288&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116288" title="56% like this...">
    3
    </div>
  </div>
  <a href="#116288" class="name">
  <strong class="user"><em>avenidagez at foro5 dot com</em></strong></a><a class="genanchor" href="#116288"> &para;</a><div class="date" title="2014-12-06 03:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116288">
<div class="phpcode"><code><span class="html">Note that session_start( ) calls open then read and the class returns true for open and the value of session or empty for read.<br />Well, then there is no catch for errors, this is, session_start() must return false on failure, but that is not the case for the class implementation on method open, no matter if you return true or false or whatever from open, it is ignored by session_start() function and proceeds to read method<br />A bug?, if open returns false, session_start() should stop the next step (read) and return itself false<br /><br />if(session_start()) ...code<br />else exit( );<br /><br />So forget about session_start() return value, you need to implement an error catch routine and exit() in case of failure on open method</span></code></div>
  </div>
 </div>
  <div class="note" id="122817">  <div class="votes">
    <div id="Vu122817">
    <a href="/manual/vote-note.php?id=122817&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122817">
    <a href="/manual/vote-note.php?id=122817&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122817" title="100% like this...">
    2
    </div>
  </div>
  <a href="#122817" class="name">
  <strong class="user"><em>tony at marston-home dot demon dot co dot uk</em></strong></a><a class="genanchor" href="#122817"> &para;</a><div class="date" title="2018-06-10 03:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122817">
<div class="phpcode"><code><span class="html">Your custom session handler should not contain calls to any of the session functions, such as session_name() or session_id(), as the relevant values are passed as arguments on various handler methods. Attempting to obtain values from alternative sources may not work as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="124839">  <div class="votes">
    <div id="Vu124839">
    <a href="/manual/vote-note.php?id=124839&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124839">
    <a href="/manual/vote-note.php?id=124839&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124839" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124839" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#124839"> &para;</a><div class="date" title="2020-03-22 01:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124839">
<div class="phpcode"><code><span class="html">If you want to use type declarations in your own session handling class, don't "implements" the SessionHandlerInterface, SessionIdInterface, or SessinUpdateTimestampInterface, otherwise you will get a fatal error saying that declaration of the class method must be compatible with the interface method.<br /><br />a bad example<br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">SessionWuXianchengHandler </span><span class="keyword">implements </span><span class="default">SessionHandlerInterface </span><span class="keyword">{        <br />        public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">string $sessionPath</span><span class="keyword">, </span><span class="default">string $sessionName</span><span class="keyword">) : </span><span class="default">bool </span><span class="keyword">{<br />        }<br />        ......<br />    }<br /></span><span class="default">?&gt;<br /></span><br />a good example<br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">SessionWuXianchengHandler </span><span class="keyword">{<br />        public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">string $sessionPath</span><span class="keyword">, </span><span class="default">string $sessionName</span><span class="keyword">) : </span><span class="default">bool </span><span class="keyword">{<br />        }<br />        ......<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118246">  <div class="votes">
    <div id="Vu118246">
    <a href="/manual/vote-note.php?id=118246&amp;page=class.sessionhandlerinterface&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118246">
    <a href="/manual/vote-note.php?id=118246&amp;page=class.sessionhandlerinterface&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118246" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#118246" class="name">
  <strong class="user"><em>StanE</em></strong></a><a class="genanchor" href="#118246"> &para;</a><div class="date" title="2015-11-02 07:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118246">
<div class="phpcode"><code><span class="html">I think there is a small "error" in the example of the class MySessionHandler in method gc(). It uses the function filemtime() whose return value is cached by PHP. Add the following line inside the foreach block in the gc() method:<br /><br />clearstatcache(true, $file);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.sessionhandlerinterface&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.sessionhandlerinterface.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.session.php">Sessions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.session.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="session.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="session.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="session.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="session.upload-progress.php" title="Session Upload Progress">Session Upload Progress</a>
                        </li>
                                                <li class="">
                            <a href="session.security.php" title="Sessions and Security">Sessions and Security</a>
                        </li>
                                                <li class="">
                            <a href="ref.session.php" title="Session Functions">Session Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionhandler.php" title="SessionHandler">SessionHandler</a>
                        </li>
                                                <li class="current">
                            <a href="class.sessionhandlerinterface.php" title="SessionHandlerInterface">SessionHandlerInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionidinterface.php" title="SessionIdInterface">SessionIdInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionupdatetimestamphandlerinterface.php" title="SessionUpdateTimestampHandlerInterface">SessionUpdateTimestampHandlerInterface</a>
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
