<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Zookeeper - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.zookeeper.php">
 <link rel="shorturl" href="https://www.php.net/zookeeper">
 <link rel="alternate" href="https://www.php.net/zookeeper" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.zookeeper.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.zookeeper-dispatch.php">
 <link rel="next" href="https://www.php.net/manual/en/zookeeper.addauth.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.zookeeper.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.zookeeper.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.zookeeper.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.zookeeper.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.zookeeper.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.zookeeper.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.zookeeper.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.zookeeper.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.zookeeper.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.zookeeper.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.zookeeper.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Zookeeper class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Zookeeper - Manual" />
<meta name="twitter:description" content="The Zookeeper class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Zookeeper - Manual" />
<meta itemprop="description" content="The Zookeeper class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Zookeeper class" />

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
        <a href="zookeeper.addauth.php">
          Zookeeper::addAuth &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.zookeeper-dispatch.php">
          &laquo; zookeeper_dispatch        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.zookeeper.php'>ZooKeeper</a></li>      </ul>
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
            <option value='en/class.zookeeper.php' selected="selected">English</option>
            <option value='de/class.zookeeper.php'>German</option>
            <option value='es/class.zookeeper.php'>Spanish</option>
            <option value='fr/class.zookeeper.php'>French</option>
            <option value='it/class.zookeeper.php'>Italian</option>
            <option value='ja/class.zookeeper.php'>Japanese</option>
            <option value='pt_BR/class.zookeeper.php'>Brazilian Portuguese</option>
            <option value='ru/class.zookeeper.php'>Russian</option>
            <option value='tr/class.zookeeper.php'>Turkish</option>
            <option value='uk/class.zookeeper.php'>Ukrainian</option>
            <option value='zh/class.zookeeper.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.zookeeper" class="reference">
 <h1 class="title">The Zookeeper class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PECL zookeeper &gt;= 0.1.0)</p>
 

  <div class="section" id="zookeeper.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents ZooKeeper session.
   </p>
  </div>

 
  <div class="section" id="zookeeper.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>
 

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Zookeeper</strong>
     </span>
 
     {</div>

 

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code><span class="initializer"> = &#039;&#039;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$recv_timeout</code><span class="initializer"> = 10000</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.addauth.php" class="methodname">addAuth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$scheme</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$cert</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$completion_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.connect.php" class="methodname">connect</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$recv_timeout</code><span class="initializer"> = 10000</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.create.php" class="methodname">create</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$acls</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.delete.php" class="methodname">delete</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code><span class="initializer"> = -1</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.exists.php" class="methodname">exists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.get.php" class="methodname">get</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$stat</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_size</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getacl.php" class="methodname">getAcl</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getchildren.php" class="methodname">getChildren</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getclientid.php" class="methodname">getClientId</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getconfig.php" class="methodname">getConfig</a></span>(): <span class="type"><a href="class.zookeeperconfig.php" class="type ZookeeperConfig">ZookeeperConfig</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getrecvtimeout.php" class="methodname">getRecvTimeout</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.getstate.php" class="methodname">getState</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.isrecoverable.php" class="methodname">isRecoverable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.set.php" class="methodname">set</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$stat</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.setacl.php" class="methodname">setAcl</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$acl</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="zookeeper.setdebuglevel.php" class="methodname">setDebugLevel</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$logLevel</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="zookeeper.setdeterministicconnorder.php" class="methodname">setDeterministicConnOrder</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$yesOrNo</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.setlogstream.php" class="methodname">setLogStream</a></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="zookeeper.setwatcher.php" class="methodname">setWatcher</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$watcher_cb</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>




    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-read"><var class="varname">PERM_READ</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-write"><var class="varname">PERM_WRITE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-create"><var class="varname">PERM_CREATE</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-delete"><var class="varname">PERM_DELETE</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-admin"><var class="varname">PERM_ADMIN</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.perm-all"><var class="varname">PERM_ALL</var></a></var><span class="initializer"> = 31</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.ephemeral"><var class="varname">EPHEMERAL</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.sequence"><var class="varname">SEQUENCE</var></a></var><span class="initializer"> = 2</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.log-level-error"><var class="varname">LOG_LEVEL_ERROR</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.log-level-warn"><var class="varname">LOG_LEVEL_WARN</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.log-level-info"><var class="varname">LOG_LEVEL_INFO</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.log-level-debug"><var class="varname">LOG_LEVEL_DEBUG</var></a></var><span class="initializer"> = 4</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.expired-session-state"><var class="varname">EXPIRED_SESSION_STATE</var></a></var><span class="initializer"> = -112</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.auth-failed-state"><var class="varname">AUTH_FAILED_STATE</var></a></var><span class="initializer"> = -113</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.connecting-state"><var class="varname">CONNECTING_STATE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.associating-state"><var class="varname">ASSOCIATING_STATE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.connected-state"><var class="varname">CONNECTED_STATE</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.readonly-state"><var class="varname">READONLY_STATE</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.notconnected-state"><var class="varname">NOTCONNECTED_STATE</var></a></var><span class="initializer"> = 999</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.created-event"><var class="varname">CREATED_EVENT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.deleted-event"><var class="varname">DELETED_EVENT</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.changed-event"><var class="varname">CHANGED_EVENT</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.child-event"><var class="varname">CHILD_EVENT</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.session-event"><var class="varname">SESSION_EVENT</var></a></var><span class="initializer"> = -1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.notwatching-event"><var class="varname">NOTWATCHING_EVENT</var></a></var><span class="initializer"> = -2</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.systemerror"><var class="varname">SYSTEMERROR</var></a></var><span class="initializer"> = -1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.runtimeinconsistency"><var class="varname">RUNTIMEINCONSISTENCY</var></a></var><span class="initializer"> = -2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.datainconsistency"><var class="varname">DATAINCONSISTENCY</var></a></var><span class="initializer"> = -3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.connectionloss"><var class="varname">CONNECTIONLOSS</var></a></var><span class="initializer"> = -4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.marshallingerror"><var class="varname">MARSHALLINGERROR</var></a></var><span class="initializer"> = -5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.unimplemented"><var class="varname">UNIMPLEMENTED</var></a></var><span class="initializer"> = -6</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.operationtimeout"><var class="varname">OPERATIONTIMEOUT</var></a></var><span class="initializer"> = -7</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.badarguments"><var class="varname">BADARGUMENTS</var></a></var><span class="initializer"> = -8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.invalidstate"><var class="varname">INVALIDSTATE</var></a></var><span class="initializer"> = -9</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.newconfignoquorum"><var class="varname">NEWCONFIGNOQUORUM</var></a></var><span class="initializer"> = -13</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.reconfiginprogress"><var class="varname">RECONFIGINPROGRESS</var></a></var><span class="initializer"> = -14</span>;</div>


    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.ok"><var class="varname">OK</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.apierror"><var class="varname">APIERROR</var></a></var><span class="initializer"> = -100</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.nonode"><var class="varname">NONODE</var></a></var><span class="initializer"> = -101</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.noauth"><var class="varname">NOAUTH</var></a></var><span class="initializer"> = -102</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.badversion"><var class="varname">BADVERSION</var></a></var><span class="initializer"> = -103</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.nochildrenforephemerals"><var class="varname">NOCHILDRENFOREPHEMERALS</var></a></var><span class="initializer"> = -108</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.nodeexists"><var class="varname">NODEEXISTS</var></a></var><span class="initializer"> = -110</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.notempty"><var class="varname">NOTEMPTY</var></a></var><span class="initializer"> = -111</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.sessionexpired"><var class="varname">SESSIONEXPIRED</var></a></var><span class="initializer"> = -112</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.invalidcallback"><var class="varname">INVALIDCALLBACK</var></a></var><span class="initializer"> = -113</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.invalidacl"><var class="varname">INVALIDACL</var></a></var><span class="initializer"> = -114</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.authfailed"><var class="varname">AUTHFAILED</var></a></var><span class="initializer"> = -115</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.closing"><var class="varname">CLOSING</var></a></var><span class="initializer"> = -116</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.nothing"><var class="varname">NOTHING</var></a></var><span class="initializer"> = -117</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.sessionmoved"><var class="varname">SESSIONMOVED</var></a></var><span class="initializer"> = -118</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.notreadonly"><var class="varname">NOTREADONLY</var></a></var><span class="initializer"> = -119</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.ephemeralonlocalsession"><var class="varname">EPHEMERALONLOCALSESSION</var></a></var><span class="initializer"> = -120</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.nowatcher"><var class="varname">NOWATCHER</var></a></var><span class="initializer"> = -121</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.zookeeper.php#zookeeper.constants.reconfigdisabled"><var class="varname">RECONFIGDISABLED</var></a></var><span class="initializer"> = -122</span>;</div>



   }</div>


  </div>


  <div class="section" id="zookeeper.class.constants">
   <h2 class="title">Predefined Constants</h2>


   <div class="section" id="zookeeper.constants.perms">
    <h2 class="title"><abbr>ZooKeeper</abbr> Permissions</h2>
    <dl>

     
      <dt id="zookeeper.constants.perm-read"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-read">Zookeeper::PERM_READ</a></code></strong></dt>
      <dd>
       <p class="para">Can read nodes value and list its children</p>
      </dd>
     
     
      <dt id="zookeeper.constants.perm-write"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-write">Zookeeper::PERM_WRITE</a></code></strong></dt>
      <dd>
       <p class="para">Can set the nodes value</p>
      </dd>
     
     
      <dt id="zookeeper.constants.perm-create"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-create">Zookeeper::PERM_CREATE</a></code></strong></dt>
      <dd>
       <p class="para">Can create children</p>
      </dd>
     
     
      <dt id="zookeeper.constants.perm-delete"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-delete">Zookeeper::PERM_DELETE</a></code></strong></dt>
      <dd>
       <p class="para">Can delete children</p>
      </dd>
     
     
      <dt id="zookeeper.constants.perm-admin"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-admin">Zookeeper::PERM_ADMIN</a></code></strong></dt>
      <dd>
       <p class="para">Can execute set_acl()</p>
      </dd>
     
     
      <dt id="zookeeper.constants.perm-all"><strong><code><a href="class.zookeeper.php#zookeeper.constants.perm-all">Zookeeper::PERM_ALL</a></code></strong></dt>
      <dd>
       <p class="para">All of the above flags ORd together</p>
      </dd>
     

    </dl>
   </div>



   <div class="section" id="zookeeper.constants.create-flags">
    <h2 class="title"><abbr>ZooKeeper</abbr> Create Flags</h2>
    <dl>

     
      <dt id="zookeeper.constants.ephemeral"><strong><code><a href="class.zookeeper.php#zookeeper.constants.ephemeral">Zookeeper::EPHEMERAL</a></code></strong></dt>
      <dd>
       <p class="para">If Zookeeper::EPHEMERAL flag is set, the node will automatically get removed if the client session goes away.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.sequence"><strong><code><a href="class.zookeeper.php#zookeeper.constants.sequence">Zookeeper::SEQUENCE</a></code></strong></dt>
      <dd>
       <p class="para">If the Zookeeper::SEQUENCE flag is set, a unique monotonically increasing sequence number is appended to the path name. The sequence number is always fixed length of 10 digits, 0 padded.</p>
      </dd>
     
    </dl>
   </div>



   <div class="section" id="zookeeper.constants.log-levels">
    <h2 class="title"><abbr>ZooKeeper</abbr> Log Levels</h2>
    <dl>

     
      <dt id="zookeeper.constants.log-level-error"><strong><code><a href="class.zookeeper.php#zookeeper.constants.log-level-error">Zookeeper::LOG_LEVEL_ERROR</a></code></strong></dt>
      <dd>
       <p class="para">Outputs only error mesages</p>
      </dd>
     
     
      <dt id="zookeeper.constants.log-level-warn"><strong><code><a href="class.zookeeper.php#zookeeper.constants.log-level-warn">Zookeeper::LOG_LEVEL_WARN</a></code></strong></dt>
      <dd>
       <p class="para">Outputs errors/warnings</p>
      </dd>
     
     
      <dt id="zookeeper.constants.log-level-info"><strong><code><a href="class.zookeeper.php#zookeeper.constants.log-level-info">Zookeeper::LOG_LEVEL_INFO</a></code></strong></dt>
      <dd>
       <p class="para">Outputs big action messages besides errors/warnings</p>
      </dd>
     
     
      <dt id="zookeeper.constants.log-level-debug"><strong><code><a href="class.zookeeper.php#zookeeper.constants.log-level-debug">Zookeeper::LOG_LEVEL_DEBUG</a></code></strong></dt>
      <dd>
       <p class="para">Outputs all</p>
      </dd>
     

    </dl>
   </div>



   <div class="section" id="zookeeper.constants.states">
    <h2 class="title"><abbr>ZooKeeper</abbr> States</h2>
    <dl>

     
      <dt id="zookeeper.constants.expired-session-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.expired-session-state">Zookeeper::EXPIRED_SESSION_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Connected but session expired</p>
      </dd>
     
     
      <dt id="zookeeper.constants.auth-failed-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.auth-failed-state">Zookeeper::AUTH_FAILED_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Connected but auth failed</p>
      </dd>
     
     
      <dt id="zookeeper.constants.connecting-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.connecting-state">Zookeeper::CONNECTING_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Connecting</p>
      </dd>
     
     
      <dt id="zookeeper.constants.associating-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.associating-state">Zookeeper::ASSOCIATING_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Associating</p>
      </dd>
     
     
      <dt id="zookeeper.constants.connected-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.connected-state">Zookeeper::CONNECTED_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Connected</p>
      </dd>
     
     
      <dt id="zookeeper.constants.readonly-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.readonly-state">Zookeeper::READONLY_STATE</a></code></strong></dt>
      <dd>
       <p class="para">TODO: help us improve this extension.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.notconnected-state"><strong><code><a href="class.zookeeper.php#zookeeper.constants.notconnected-state">Zookeeper::NOTCONNECTED_STATE</a></code></strong></dt>
      <dd>
       <p class="para">Connection failed</p>
      </dd>
     

    </dl>
   </div>



   <div class="section" id="zookeeper.constants.watch-types">
    <h2 class="title"><abbr>ZooKeeper</abbr> Watch Types</h2>
    <dl>

     
      <dt id="zookeeper.constants.created-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.created-event">Zookeeper::CREATED_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A node has been created</p>
       <p class="para">This is only generated by watches on non-existent nodes. These watches are set using Zookeeper::exists.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.deleted-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.deleted-event">Zookeeper::DELETED_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A node has been deleted</p>
       <p class="para">This is only generated by watches on nodes. These watches are set using Zookeeper::exists and Zookeeper::get.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.changed-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.changed-event">Zookeeper::CHANGED_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A node has changed</p>
       <p class="para">This is only generated by watches on nodes. These watches are set using Zookeeper::exists and Zookeeper::get.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.child-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.child-event">Zookeeper::CHILD_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A change as occurred in the list of children</p>
       <p class="para">This is only generated by watches on the child list of a node. These watches are set using Zookeeper::getChildren.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.session-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.session-event">Zookeeper::SESSION_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A session has been lost</p>
       <p class="para">This is generated when a client loses contact or reconnects with a server.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.notwatching-event"><strong><code><a href="class.zookeeper.php#zookeeper.constants.notwatching-event">Zookeeper::NOTWATCHING_EVENT</a></code></strong></dt>
      <dd>
       <p class="para">A watch has been removed</p>
       <p class="para">This is generated when the server for some reason, probably a resource constraint, will no longer watch a node for a client.</p>
      </dd>
     

    </dl>
   </div>



   <div class="section" id="zookeeper.constants.system-n-server-side-errors">
    <h2 class="title"><abbr>ZooKeeper</abbr> System and Server-side Errors</h2>
    <dl>
     
      <dt id="zookeeper.constants.systemerror"><strong><code><a href="class.zookeeper.php#zookeeper.constants.systemerror">Zookeeper::SYSTEMERROR</a></code></strong></dt>
      <dd>
       <p class="para">This is never thrown by the server, it shouldn&#039;t be used other than to indicate a range. Specifically error codes greater than this value, but lesser than Zookeeper::APIERROR, are system errors.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.runtimeinconsistency"><strong><code><a href="class.zookeeper.php#zookeeper.constants.runtimeinconsistency">Zookeeper::RUNTIMEINCONSISTENCY</a></code></strong></dt>
      <dd>
       <p class="para">A runtime inconsistency was found.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.datainconsistency"><strong><code><a href="class.zookeeper.php#zookeeper.constants.datainconsistency">Zookeeper::DATAINCONSISTENCY</a></code></strong></dt>
      <dd>
       <p class="para">A data inconsistency was found.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.connectionloss"><strong><code><a href="class.zookeeper.php#zookeeper.constants.connectionloss">Zookeeper::CONNECTIONLOSS</a></code></strong></dt>
      <dd>
       <p class="para">Connection to the server has been lost.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.marshallingerror"><strong><code><a href="class.zookeeper.php#zookeeper.constants.marshallingerror">Zookeeper::MARSHALLINGERROR</a></code></strong></dt>
      <dd>
       <p class="para">Error while marshalling or unmarshalling data.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.unimplemented"><strong><code><a href="class.zookeeper.php#zookeeper.constants.unimplemented">Zookeeper::UNIMPLEMENTED</a></code></strong></dt>
      <dd>
       <p class="para">Operation is unimplemented.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.operationtimeout"><strong><code><a href="class.zookeeper.php#zookeeper.constants.operationtimeout">Zookeeper::OPERATIONTIMEOUT</a></code></strong></dt>
      <dd>
       <p class="para">Operation timeout.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.badarguments"><strong><code><a href="class.zookeeper.php#zookeeper.constants.badarguments">Zookeeper::BADARGUMENTS</a></code></strong></dt>
      <dd>
       <p class="para">Invalid arguments.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.invalidstate"><strong><code><a href="class.zookeeper.php#zookeeper.constants.invalidstate">Zookeeper::INVALIDSTATE</a></code></strong></dt>
      <dd>
       <p class="para">Invalid zhandle state.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.newconfignoquorum"><strong><code><a href="class.zookeeper.php#zookeeper.constants.newconfignoquorum">Zookeeper::NEWCONFIGNOQUORUM</a></code></strong></dt>
      <dd>
       <p class="para">No quorum of new config is connected and up-to-date with the leader of last committed config - try invoking reconfiguration after new servers are connected and synced.</p>
       <p class="para">Available as of ZooKeeper 3.5.0</p>
      </dd>
     
     
      <dt id="zookeeper.constants.reconfiginprogress"><strong><code><a href="class.zookeeper.php#zookeeper.constants.reconfiginprogress">Zookeeper::RECONFIGINPROGRESS</a></code></strong></dt>
      <dd>
       <p class="para">Reconfiguration requested while another reconfiguration is currently in progress. This is currently not supported. Please retry.</p>
       <p class="para">Available as of ZooKeeper 3.5.0</p>
      </dd>
     
    </dl>
   </div>



   <div class="section" id="zookeeper.constants.api-errors">
    <h2 class="title"><abbr>ZooKeeper</abbr> API Errors</h2>
    <dl>
     
      <dt id="zookeeper.constants.ok"><strong><code><a href="class.zookeeper.php#zookeeper.constants.ok">Zookeeper::OK</a></code></strong></dt>
      <dd>
       <p class="para">Everything is OK.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.apierror"><strong><code><a href="class.zookeeper.php#zookeeper.constants.apierror">Zookeeper::APIERROR</a></code></strong></dt>
      <dd>
       <p class="para">This is never thrown by the server, it shouldn&#039;t be used other than to indicate a range. Specifically error codes greater than this value are API errors (while values less than this indicate a Zookeeper::SYSTEMERROR).</p>
      </dd>
     
     
      <dt id="zookeeper.constants.nonode"><strong><code><a href="class.zookeeper.php#zookeeper.constants.nonode">Zookeeper::NONODE</a></code></strong></dt>
      <dd>
       <p class="para">Node does not exist.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.noauth"><strong><code><a href="class.zookeeper.php#zookeeper.constants.noauth">Zookeeper::NOAUTH</a></code></strong></dt>
      <dd>
       <p class="para">Not authenticated.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.badversion"><strong><code><a href="class.zookeeper.php#zookeeper.constants.badversion">Zookeeper::BADVERSION</a></code></strong></dt>
      <dd>
       <p class="para">Version conflict.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.nochildrenforephemerals"><strong><code><a href="class.zookeeper.php#zookeeper.constants.nochildrenforephemerals">Zookeeper::NOCHILDRENFOREPHEMERALS</a></code></strong></dt>
      <dd>
       <p class="para">Ephemeral nodes may not have children.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.nodeexists"><strong><code><a href="class.zookeeper.php#zookeeper.constants.nodeexists">Zookeeper::NODEEXISTS</a></code></strong></dt>
      <dd>
       <p class="para">The node already exists.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.notempty"><strong><code><a href="class.zookeeper.php#zookeeper.constants.notempty">Zookeeper::NOTEMPTY</a></code></strong></dt>
      <dd>
       <p class="para">The node has children.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.sessionexpired"><strong><code><a href="class.zookeeper.php#zookeeper.constants.sessionexpired">Zookeeper::SESSIONEXPIRED</a></code></strong></dt>
      <dd>
       <p class="para">The session has been expired by the server.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.invalidcallback"><strong><code><a href="class.zookeeper.php#zookeeper.constants.invalidcallback">Zookeeper::INVALIDCALLBACK</a></code></strong></dt>
      <dd>
       <p class="para">Invalid callback specified.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.invalidacl"><strong><code><a href="class.zookeeper.php#zookeeper.constants.invalidacl">Zookeeper::INVALIDACL</a></code></strong></dt>
      <dd>
       <p class="para">Invalid ACL specified.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.authfailed"><strong><code><a href="class.zookeeper.php#zookeeper.constants.authfailed">Zookeeper::AUTHFAILED</a></code></strong></dt>
      <dd>
       <p class="para">Client authentication failed.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.closing"><strong><code><a href="class.zookeeper.php#zookeeper.constants.closing">Zookeeper::CLOSING</a></code></strong></dt>
      <dd>
       <p class="para">ZooKeeper is closing.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.nothing"><strong><code><a href="class.zookeeper.php#zookeeper.constants.nothing">Zookeeper::NOTHING</a></code></strong></dt>
      <dd>
       <p class="para">(not error) No server responses to process.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.sessionmoved"><strong><code><a href="class.zookeeper.php#zookeeper.constants.sessionmoved">Zookeeper::SESSIONMOVED</a></code></strong></dt>
      <dd>
       <p class="para">Session moved to another server, so operation is ignored.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.notreadonly"><strong><code><a href="class.zookeeper.php#zookeeper.constants.notreadonly">Zookeeper::NOTREADONLY</a></code></strong></dt>
      <dd>
       <p class="para">State-changing request is passed to read-only server.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.ephemeralonlocalsession"><strong><code><a href="class.zookeeper.php#zookeeper.constants.ephemeralonlocalsession">Zookeeper::EPHEMERALONLOCALSESSION</a></code></strong></dt>
      <dd>
       <p class="para">Attempt to create ephemeral node on a local session.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.nowatcher"><strong><code><a href="class.zookeeper.php#zookeeper.constants.nowatcher">Zookeeper::NOWATCHER</a></code></strong></dt>
      <dd>
       <p class="para">The watcher couldn&#039;t be found.</p>
      </dd>
     
     
      <dt id="zookeeper.constants.reconfigdisabled"><strong><code><a href="class.zookeeper.php#zookeeper.constants.reconfigdisabled">Zookeeper::RECONFIGDISABLED</a></code></strong></dt>
      <dd>
       <p class="para">Attempts to perform a reconfiguration operation when reconfiguration feature is disabled.</p>
      </dd>
     
    </dl>
   </div>


  </div>


 
 </div>
 
 


















































































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="zookeeper.addauth.php">Zookeeper::addAuth</a> — Specify application credentials</li><li><a href="zookeeper.close.php">Zookeeper::close</a> — Close the zookeeper handle and free up any resources</li><li><a href="zookeeper.connect.php">Zookeeper::connect</a> — Create a handle to used communicate with zookeeper</li><li><a href="zookeeper.construct.php">Zookeeper::__construct</a> — Create a handle to used communicate with zookeeper</li><li><a href="zookeeper.create.php">Zookeeper::create</a> — Create a node synchronously</li><li><a href="zookeeper.delete.php">Zookeeper::delete</a> — Delete a node in zookeeper synchronously</li><li><a href="zookeeper.exists.php">Zookeeper::exists</a> — Checks the existence of a node in zookeeper synchronously</li><li><a href="zookeeper.get.php">Zookeeper::get</a> — Gets the data associated with a node synchronously</li><li><a href="zookeeper.getacl.php">Zookeeper::getAcl</a> — Gets the acl associated with a node synchronously</li><li><a href="zookeeper.getchildren.php">Zookeeper::getChildren</a> — Lists the children of a node synchronously</li><li><a href="zookeeper.getclientid.php">Zookeeper::getClientId</a> — Return the client session id, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE)</li><li><a href="zookeeper.getconfig.php">Zookeeper::getConfig</a> — Get instance of ZookeeperConfig</li><li><a href="zookeeper.getrecvtimeout.php">Zookeeper::getRecvTimeout</a> — Return the timeout for this session, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE). This value may change after a server re-connect</li><li><a href="zookeeper.getstate.php">Zookeeper::getState</a> — Get the state of the zookeeper connection</li><li><a href="zookeeper.isrecoverable.php">Zookeeper::isRecoverable</a> — Checks if the current zookeeper connection state can be recovered</li><li><a href="zookeeper.set.php">Zookeeper::set</a> — Sets the data associated with a node</li><li><a href="zookeeper.setacl.php">Zookeeper::setAcl</a> — Sets the acl associated with a node synchronously</li><li><a href="zookeeper.setdebuglevel.php">Zookeeper::setDebugLevel</a> — Sets the debugging level for the library</li><li><a href="zookeeper.setdeterministicconnorder.php">Zookeeper::setDeterministicConnOrder</a> — Enable/disable quorum endpoint order randomization</li><li><a href="zookeeper.setlogstream.php">Zookeeper::setLogStream</a> — Sets the stream to be used by the library for logging</li><li><a href="zookeeper.setwatcher.php">Zookeeper::setWatcher</a> — Set a watcher function</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zookeeper/zookeeper.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.zookeeper%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.zookeeper&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.zookeeper.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.zookeeper.php">ZooKeeper</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.zookeeper.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="zookeeper.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ref.zookeeper.php" title="ZooKeeper Functions">ZooKeeper Functions</a>
                        </li>
                                                <li class="current">
                            <a href="class.zookeeper.php" title="Zookeeper">Zookeeper</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeeperconfig.php" title="ZookeeperConfig">ZookeeperConfig</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeeperexception.php" title="ZookeeperException">ZookeeperException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeeperauthenticationexception.php" title="ZookeeperAuthenticationException">ZookeeperAuthenticationException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeeperconnectionexception.php" title="ZookeeperConnectionException">ZookeeperConnectionException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeepermarshallingexception.php" title="ZookeeperMarshallingException">ZookeeperMarshallingException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeepernonodeexception.php" title="ZookeeperNoNodeException">ZookeeperNoNodeException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeeperoperationtimeoutexception.php" title="ZookeeperOperationTimeoutException">ZookeeperOperationTimeoutException</a>
                        </li>
                                                <li class="">
                            <a href="class.zookeepersessionexception.php" title="ZookeeperSessionException">ZookeeperSessionException</a>
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
