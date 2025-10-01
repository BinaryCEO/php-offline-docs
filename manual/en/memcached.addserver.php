<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcached::addServer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.addserver.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.addserver.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.addserver.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcached.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.addbykey.php">
 <link rel="next" href="https://www.php.net/manual/en/memcached.addservers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.addserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.addserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.addserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.addserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.addserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.addserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.addserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.addserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.addserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.addserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.addserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a server to the server pool" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcached::addServer - Manual" />
<meta name="twitter:description" content="Add a server to the server pool" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcached::addServer - Manual" />
<meta itemprop="description" content="Add a server to the server pool" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a server to the server pool" />

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
        <a href="memcached.addservers.php">
          Memcached::addServers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.addbykey.php">
          &laquo; Memcached::addByKey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcached.php'>Memcached</a></li>      <li><a href='class.memcached.php'>Memcached</a></li>      </ul>
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
            <option value='en/memcached.addserver.php' selected="selected">English</option>
            <option value='de/memcached.addserver.php'>German</option>
            <option value='es/memcached.addserver.php'>Spanish</option>
            <option value='fr/memcached.addserver.php'>French</option>
            <option value='it/memcached.addserver.php'>Italian</option>
            <option value='ja/memcached.addserver.php'>Japanese</option>
            <option value='pt_BR/memcached.addserver.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.addserver.php'>Russian</option>
            <option value='tr/memcached.addserver.php'>Turkish</option>
            <option value='uk/memcached.addserver.php'>Ukrainian</option>
            <option value='zh/memcached.addserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.addserver" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcached::addServer</h1>
  <p class="verinfo">(PECL memcached &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">Memcached::addServer</span> &mdash; <span class="dc-title">Add a server to the server pool</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcached.addserver-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Memcached::addServer</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$weight</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>Memcached::addServer()</strong></span> adds the specified server to the
   server pool. No connection is established to the server at this time, but
   if you are using consistent key distribution option (via
   <strong><code><a href="memcached.constants.php#memcached.constants.distribution-consistent">Memcached::DISTRIBUTION_CONSISTENT</a></code></strong> or
   <strong><code><a href="memcached.constants.php#memcached.constants.opt-libketama-compatible">Memcached::OPT_LIBKETAMA_COMPATIBLE</a></code></strong>), some of the
   internal data structures will have to be updated. Thus, if you need to add
   multiple servers, it is better to use
   <span class="methodname"><a href="memcached.addservers.php" class="methodname">Memcached::addServers()</a></span> as the update then happens
   only once.
  </p>
  <p class="para">
   The same server may appear multiple times in the server pool, because no
   duplication checks are made. This is not advisable; instead, use the
   <code class="parameter">weight</code> option to increase the selection weighting of
   this server.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-memcached.addserver-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">host</code></dt>
     <dd>
      <p class="para">
       The hostname of the memcache server. If the hostname is invalid,
       data-related operations will set 
       <strong><code><a href="memcached.constants.php#memcached.constants.res-host-lookup-failure">Memcached::RES_HOST_LOOKUP_FAILURE</a></code></strong> result code. As
       of version 2.0.0b1, this parameter may also specify the path of a unix
       socket filepath ex. <code class="literal">/path/to/memcached.sock</code>
       to use UNIX domain sockets, in this case <code class="parameter">port</code>
       must also be set to <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       The port on which memcache is running. Usually, this is
       <code class="literal">11211</code>. As of version 2.0.0b1, set this parameter to <code class="literal">0</code> when 
       using UNIX domain sockets.
      </p>
     </dd>
    
    
     <dt><code class="parameter">weight</code></dt>
     <dd>
      <p class="para">
       The weight of the server relative to the total weight of all the
       servers in the pool. This controls the probability of the server being
       selected for operations. This is used only with consistent distribution
       option and usually corresponds to the amount of memory available to
       memcache on that server.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-memcached.addserver-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-memcached.addserver-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4671">
    <p><strong>Example #1 <span class="function"><strong>Memcached::addServer()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$m </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcached</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Add 2 servers, so that the second one<br />   is twice as likely to be selected. */<br /></span><span style="color: #0000BB">$m</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">'mem1.domain.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">, </span><span style="color: #0000BB">33</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$m</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">'mem2.domain.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">, </span><span style="color: #0000BB">67</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-memcached.addserver-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="memcached.addservers.php" class="methodname" rel="rdfs-seeAlso">Memcached::addServers()</a> - Add multiple servers to the server pool</span></li>
    <li><span class="methodname"><a href="memcached.resetserverlist.php" class="methodname" rel="rdfs-seeAlso">Memcached::resetServerList()</a> - Clears all servers from the server list</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/memcached/addserver.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.addserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.addserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110003">  <div class="votes">
    <div id="Vu110003">
    <a href="/manual/vote-note.php?id=110003&amp;page=memcached.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110003">
    <a href="/manual/vote-note.php?id=110003&amp;page=memcached.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110003" title="78% like this...">
    19
    </div>
  </div>
  <a href="#110003" class="name">
  <strong class="user"><em>mbarriolinares at gmail dot com</em></strong></a><a class="genanchor" href="#110003"> &para;</a><div class="date" title="2012-09-10 06:55"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110003">
<div class="phpcode"><code><span class="html">Important to not call -&gt;addServers() every run -- only call it if no servers exist (check getServerList() ); otherwise, since addServers() does not check for dups, it will let you add the same server again and again and again, resultings in hundreds if not thousands of connections to the MC daemon. Specially when using FastCGI.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Cache </span><span class="keyword">{
<br />        private </span><span class="default">$id</span><span class="keyword">;
<br />        private </span><span class="default">$obj</span><span class="keyword">;
<br />
<br />        function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">){
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">$id</span><span class="keyword">;
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">obj </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);
<br />        }
<br />
<br />        public function </span><span class="default">connect</span><span class="keyword">(</span><span class="default">$host </span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">){
<br />                </span><span class="default">$servers </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">obj</span><span class="keyword">-&gt;</span><span class="default">getServerList</span><span class="keyword">();
<br />                if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">)) {
<br />                        foreach (</span><span class="default">$servers </span><span class="keyword">as </span><span class="default">$server</span><span class="keyword">)
<br />                                if(</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">] == </span><span class="default">$host </span><span class="keyword">and </span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] == </span><span class="default">$port</span><span class="keyword">)
<br />                                        return </span><span class="default">true</span><span class="keyword">;
<br />                }
<br />                return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">obj</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$host </span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);
<br />        }
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110661">  <div class="votes">
    <div id="Vu110661">
    <a href="/manual/vote-note.php?id=110661&amp;page=memcached.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110661">
    <a href="/manual/vote-note.php?id=110661&amp;page=memcached.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110661" title="83% like this...">
    16
    </div>
  </div>
  <a href="#110661" class="name">
  <strong class="user"><em>Dave</em></strong></a><a class="genanchor" href="#110661"> &para;</a><div class="date" title="2012-11-20 10:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110661">
<div class="phpcode"><code><span class="html">As of version 2.0.0b1 you can use Unix socket.<br /><br /><span class="default">&lt;?php<br />$m </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">();<br /></span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'/path/to/socket'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Not to be confused with Memcache that use 'unix:///path/to/socket'</span></code></div>
  </div>
 </div>
  <div class="note" id="105501">  <div class="votes">
    <div id="Vu105501">
    <a href="/manual/vote-note.php?id=105501&amp;page=memcached.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105501">
    <a href="/manual/vote-note.php?id=105501&amp;page=memcached.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105501" title="75% like this...">
    2
    </div>
  </div>
  <a href="#105501" class="name">
  <strong class="user"><em>Robbie De Lise</em></strong></a><a class="genanchor" href="#105501"> &para;</a><div class="date" title="2011-08-22 10:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105501">
<div class="phpcode"><code><span class="html">On my Debian Squeeze system I was getting WRITE FAILURE errors. After debugging and finally tcpdump it seems that the problem was me adding the server 'localhost', which resolved to '::1' (ipv6) while the default memcached server on debian only listens to '127.0.0.1' (ipv4). DNS automatically prefers ipv6 over ipv4. <br /><br />I added the server '127.0.0.1' instead and everything worked. You could also disable ipv6 or have memcached listen on ::1</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.addserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.memcached.php">Memcached</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="memcached.add.php" title="add">add</a>
                        </li>
                                                <li class="">
                            <a href="memcached.addbykey.php" title="addByKey">addByKey</a>
                        </li>
                                                <li class="current">
                            <a href="memcached.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="memcached.addservers.php" title="addServers">addServers</a>
                        </li>
                                                <li class="">
                            <a href="memcached.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="memcached.appendbykey.php" title="appendByKey">appendByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.cas.php" title="cas">cas</a>
                        </li>
                                                <li class="">
                            <a href="memcached.casbykey.php" title="casByKey">casByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="memcached.decrement.php" title="decrement">decrement</a>
                        </li>
                                                <li class="">
                            <a href="memcached.decrementbykey.php" title="decrementByKey">decrementByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletebykey.php" title="deleteByKey">deleteByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletemulti.php" title="deleteMulti">deleteMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.deletemultibykey.php" title="deleteMultiByKey">deleteMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="memcached.fetchall.php" title="fetchAll">fetchAll</a>
                        </li>
                                                <li class="">
                            <a href="memcached.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="memcached.get.php" title="get">get</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getallkeys.php" title="getAllKeys">getAllKeys</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getbykey.php" title="getByKey">getByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getdelayed.php" title="getDelayed">getDelayed</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getdelayedbykey.php" title="getDelayedByKey">getDelayedByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getmulti.php" title="getMulti">getMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getmultibykey.php" title="getMultiByKey">getMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getoption.php" title="getOption">getOption</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getresultcode.php" title="getResultCode">getResultCode</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getresultmessage.php" title="getResultMessage">getResultMessage</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getserverbykey.php" title="getServerByKey">getServerByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getserverlist.php" title="getServerList">getServerList</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getstats.php" title="getStats">getStats</a>
                        </li>
                                                <li class="">
                            <a href="memcached.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="memcached.increment.php" title="increment">increment</a>
                        </li>
                                                <li class="">
                            <a href="memcached.incrementbykey.php" title="incrementByKey">incrementByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.ispersistent.php" title="isPersistent">isPersistent</a>
                        </li>
                                                <li class="">
                            <a href="memcached.ispristine.php" title="isPristine">isPristine</a>
                        </li>
                                                <li class="">
                            <a href="memcached.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="memcached.prependbykey.php" title="prependByKey">prependByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.quit.php" title="quit">quit</a>
                        </li>
                                                <li class="">
                            <a href="memcached.replace.php" title="replace">replace</a>
                        </li>
                                                <li class="">
                            <a href="memcached.replacebykey.php" title="replaceByKey">replaceByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.resetserverlist.php" title="resetServerList">resetServerList</a>
                        </li>
                                                <li class="">
                            <a href="memcached.set.php" title="set">set</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setbykey.php" title="setByKey">setByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setencodingkey.php" title="setEncodingKey">setEncodingKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setmulti.php" title="setMulti">setMulti</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setmultibykey.php" title="setMultiByKey">setMultiByKey</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setoption.php" title="setOption">setOption</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setoptions.php" title="setOptions">setOptions</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setsaslauthdata.php" title="setSaslAuthData">setSaslAuthData</a>
                        </li>
                                                <li class="">
                            <a href="memcached.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="memcached.touchbykey.php" title="touchByKey">touchByKey</a>
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
