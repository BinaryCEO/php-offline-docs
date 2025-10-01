<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcached::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcached.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.casbykey.php">
 <link rel="next" href="https://www.php.net/manual/en/memcached.decrement.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a Memcached instance" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcached::__construct - Manual" />
<meta name="twitter:description" content="Create a Memcached instance" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcached::__construct - Manual" />
<meta itemprop="description" content="Create a Memcached instance" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a Memcached instance" />

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
        <a href="memcached.decrement.php">
          Memcached::decrement &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.casbykey.php">
          &laquo; Memcached::casByKey        </a>
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
            <option value='en/memcached.construct.php' selected="selected">English</option>
            <option value='de/memcached.construct.php'>German</option>
            <option value='es/memcached.construct.php'>Spanish</option>
            <option value='fr/memcached.construct.php'>French</option>
            <option value='it/memcached.construct.php'>Italian</option>
            <option value='ja/memcached.construct.php'>Japanese</option>
            <option value='pt_BR/memcached.construct.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.construct.php'>Russian</option>
            <option value='tr/memcached.construct.php'>Turkish</option>
            <option value='uk/memcached.construct.php'>Ukrainian</option>
            <option value='zh/memcached.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcached::__construct</h1>
  <p class="verinfo">(PECL memcached &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">Memcached::__construct</span> &mdash; <span class="dc-title">Create a Memcached instance</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcached.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Memcached::__construct</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$persistent_id</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$connection_str</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

  <p class="para rdfs-comment">
   Creates a Memcached instance representing the connection to the memcache
   servers.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
 </div>


 <div class="refsect1 parameters" id="refsect1-memcached.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">persistent_id</code></dt>
     <dd>
      <p class="para">
       By default the Memcached instances are destroyed at the end of the
       request. To create an instance that persists between requests, use
       <code class="parameter">persistent_id</code> to specify a unique ID for the
       instance. All instances created with the same
       <code class="parameter">persistent_id</code> will share the same connection.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       
      </p>
     </dd>
    
    
     <dt><code class="parameter">connection_str</code></dt>
     <dd>
      <p class="para">
       
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-memcached.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4675">
    <p><strong>Example #1 Creating a Memcached object</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Create a regular instance */<br /></span><span style="color: #0000BB">$m </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcached</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create a persistent instance */<br /></span><span style="color: #0000BB">$m2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcached</span><span style="color: #007700">(</span><span style="color: #DD0000">'story_pool'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$m3 </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcached</span><span style="color: #007700">(</span><span style="color: #DD0000">'story_pool'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* now $m2 and $m3 share the same connection */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/memcached/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93536">  <div class="votes">
    <div id="Vu93536">
    <a href="/manual/vote-note.php?id=93536&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93536">
    <a href="/manual/vote-note.php?id=93536&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93536" title="82% like this...">
    22
    </div>
  </div>
  <a href="#93536" class="name">
  <strong class="user"><em>tschundler at gmail dot com</em></strong></a><a class="genanchor" href="#93536"> &para;</a><div class="date" title="2009-09-15 02:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93536">
<div class="phpcode"><code><span class="html">When using persistent connections, it is important to not re-add servers.<br /><br />This is what you do not want to do:<br /><span class="default">&lt;?php<br />$mc </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="string">'mc'</span><span class="keyword">);<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_LIBKETAMA_COMPATIBLE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">addServers</span><span class="keyword">(array(<br />    array(</span><span class="string">'mc1.example.com'</span><span class="keyword">,</span><span class="default">11211</span><span class="keyword">),<br />    array(</span><span class="string">'mc2.example.com'</span><span class="keyword">,</span><span class="default">11211</span><span class="keyword">),<br />));<br /></span><span class="default">?&gt;<br /></span>Every time the page is loaded those servers will be appended to the list resulting in many simultaneous open connections to the same server. The addServer/addServers functions to not check for existing references to the specified servers.<br /><br />A better approach is something like:<br /><span class="default">&lt;?php<br />$mc </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="string">'mc'</span><span class="keyword">);<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_LIBKETAMA_COMPATIBLE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />if (!</span><span class="default">count</span><span class="keyword">(</span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">getServerList</span><span class="keyword">())) {<br />    </span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">addServers</span><span class="keyword">(array(<br />        array(</span><span class="string">'mc1.example.com'</span><span class="keyword">,</span><span class="default">11211</span><span class="keyword">),<br />        array(</span><span class="string">'mc2.example.com'</span><span class="keyword">,</span><span class="default">11211</span><span class="keyword">),<br />    ));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104269">  <div class="votes">
    <div id="Vu104269">
    <a href="/manual/vote-note.php?id=104269&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104269">
    <a href="/manual/vote-note.php?id=104269&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104269" title="77% like this...">
    5
    </div>
  </div>
  <a href="#104269" class="name">
  <strong class="user"><em>clancy hood at gmail dot com</em></strong></a><a class="genanchor" href="#104269"> &para;</a><div class="date" title="2011-06-04 01:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104269">
<div class="phpcode"><code><span class="html">If you're wanting to get started with Memcached on a relatively small project but need some scalability then it can make sense to allow $persistent_id to also denote both a key prefix and a server set which you define yourself.  This keeps both key separation and allocation of data sets to certain server(s) incredibly simple throughout the project's life, without hampering any of your options. <br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Here is the array which we will add to in the future<br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'memcached-sets'</span><span class="keyword">] = array (<br />        </span><span class="string">'_' </span><span class="keyword">=&gt; array (<br />            array(</span><span class="string">'localhost'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">)<br />        )<br />    );<br /><br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'DEFAULT_MEMCACHED_SET'</span><span class="keyword">, </span><span class="string">'_'</span><span class="keyword">);<br /><br />    function </span><span class="default">mcache</span><span class="keyword">( </span><span class="default">$persistent_id</span><span class="keyword">=</span><span class="default">DEFAULT_MEMCACHED_SET </span><span class="keyword">) {<br /><br />        </span><span class="comment">// one instantiation per-connection per-request<br />        </span><span class="keyword">static </span><span class="default">$memcached_instances </span><span class="keyword">= array();<br />    <br />        if( </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$persistent_id</span><span class="keyword">, </span><span class="default">$memcached_instances</span><span class="keyword">)) {<br />            </span><span class="default">$instance </span><span class="keyword">= </span><span class="default">$memcached_instances</span><span class="keyword">[</span><span class="default">$persistent_id</span><span class="keyword">];<br />        }else{<br />            </span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="default">$persistent_id</span><span class="keyword">);<br />            </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_PREFIX_KEY</span><span class="keyword">, </span><span class="default">$persistent_id</span><span class="keyword">);<br />            </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_LIBKETAMA_COMPATIBLE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// advisable option<br />            <br />            // Add servers if no connections listed. Get server set by $persistent_id or use default set.<br />            // In a production environment with multiple server sets you may wish to prevent typos from silently adding data <br />            // to the default pool, in which case return an error on no match instead of defaulting<br />            </span><span class="keyword">if( !</span><span class="default">count</span><span class="keyword">(</span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">getServerList</span><span class="keyword">()) ) {<br />                </span><span class="default">$servers </span><span class="keyword">= </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$persistent_id</span><span class="keyword">, </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'memcached-sets'</span><span class="keyword">])<br />                    ? </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'memcached-sets'</span><span class="keyword">][</span><span class="default">$persistent_id</span><span class="keyword">]<br />                    : </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'memcached-sets'</span><span class="keyword">][</span><span class="default">DEFAULT_MEMCACHED_SET</span><span class="keyword">];<br />                </span><span class="default">$instance</span><span class="keyword">-&gt;</span><span class="default">addServers</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">);<br />            }<br /><br />            </span><span class="default">$memcached_instances</span><span class="keyword">[</span><span class="default">$persistent_id</span><span class="keyword">] = </span><span class="default">$instance</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$instance</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// simple example<br />    </span><span class="default">mcache</span><span class="keyword">()-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br />    </span><span class="default">mcache</span><span class="keyword">(</span><span class="string">'myset'</span><span class="keyword">)-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'baz'</span><span class="keyword">);<br /><br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">mcache</span><span class="keyword">()-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">), </span><span class="default">mcache</span><span class="keyword">(</span><span class="string">'myset'</span><span class="keyword">)-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />string(3) "bar" <br />string(3) "baz" <br /><br />Just remember to keep your $persistent_ids short as they infringe upon your maximum key length.  Happy coding! :)</span></code></div>
  </div>
 </div>
  <div class="note" id="106865">  <div class="votes">
    <div id="Vu106865">
    <a href="/manual/vote-note.php?id=106865&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106865">
    <a href="/manual/vote-note.php?id=106865&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106865" title="75% like this...">
    2
    </div>
  </div>
  <a href="#106865" class="name">
  <strong class="user"><em>enknamel AT gmail DOT com</em></strong></a><a class="genanchor" href="#106865"> &para;</a><div class="date" title="2011-12-13 02:53"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106865">
<div class="phpcode"><code><span class="html">This was causing me to tear my hair out since I listened to the comments posted here. <br /><br />If you enable persistence, the options you set will persist as well AND certain options if you set them with persistence enabled WILL CLOSE ALL YOUR PERSISTED CONNECTIONS. This is a part of libmemcached that the memcached extensions is built against. You can verify this by running strace.<br /><br />So this is what you should do:<br /><br /><span class="default">&lt;?php<br /><br />$mem </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="default">$myPoolId</span><span class="keyword">);<br /><br />if(empty(</span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">getServerList</span><span class="keyword">())) {<br />    </span><span class="comment">//This code block will only execute if we are setting up a new EG(persistent_list) entry<br />    </span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_RECV_TIMEOUT</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br />    </span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_SEND_TIMEOUT</span><span class="keyword">, </span><span class="default">3000</span><span class="keyword">);<br />    </span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_TCP_NODELAY</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_PREFIX_KEY</span><span class="keyword">, </span><span class="string">"md_"</span><span class="keyword">);<br />    </span><span class="default">$mem</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$myMemcahceIp</span><span class="keyword">, </span><span class="default">$myMemcachePort</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102493">  <div class="votes">
    <div id="Vu102493">
    <a href="/manual/vote-note.php?id=102493&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102493">
    <a href="/manual/vote-note.php?id=102493&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102493" title="75% like this...">
    2
    </div>
  </div>
  <a href="#102493" class="name">
  <strong class="user"><em>Tobias</em></strong></a><a class="genanchor" href="#102493"> &para;</a><div class="date" title="2011-02-17 07:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102493">
<div class="phpcode"><code><span class="html">Note that with this Memcached interface, if one or more underlying memcached daemons are down, suffering high network latency (over 1 second by default), or have crashed, then there still will be no warning, no error, no notice.  Everything will appear to work correctly, you just won't get proper results back.</span></code></div>
  </div>
 </div>
  <div class="note" id="102487">  <div class="votes">
    <div id="Vu102487">
    <a href="/manual/vote-note.php?id=102487&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102487">
    <a href="/manual/vote-note.php?id=102487&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102487" title="71% like this...">
    3
    </div>
  </div>
  <a href="#102487" class="name">
  <strong class="user"><em>Tobias</em></strong></a><a class="genanchor" href="#102487"> &para;</a><div class="date" title="2011-02-17 03:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102487">
<div class="phpcode"><code><span class="html">Not positive, but it seems like the __construct() creates an instance of Memcache() class that lives (and stays alive) in at least the child Apache procs, if not the main Apache proc.<br /><br />This (seems to) mean that Memcache daemons added to the server "pool" (via -&gt;addServers() ) stay remembered.<br /><br />This is why you do not want to call -&gt;addServers() every time your script runs, because -&gt;addServers() does not check for dups and will add hundreds or thousands of connections to the memcached daemon proc from the Apache proc(s).<br /><br />One side effect is that any other scripts (even across different website domains) can also add to your server "pool" (if they know the server pool name, or if they can get it from the memcached daemon itself (not sure if/how this is possible), or if you or your team has coded several sites using the same server pool (i.e., new Memcached( 'same-server-pool-name' ) ).  This may present a security hole.</span></code></div>
  </div>
 </div>
  <div class="note" id="94636">  <div class="votes">
    <div id="Vu94636">
    <a href="/manual/vote-note.php?id=94636&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94636">
    <a href="/manual/vote-note.php?id=94636&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94636" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#94636" class="name">
  <strong class="user"><em>jeroen at 4worx dot com</em></strong></a><a class="genanchor" href="#94636"> &para;</a><div class="date" title="2009-11-16 02:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94636">
<div class="phpcode"><code><span class="html">Using multiple memcached instances with options in combination with persistent connections might be confusing:<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="string">'memcached_pool'</span><span class="keyword">);<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_COMPRESSION</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">(</span><span class="string">'memcached_pool'</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_COMPRESSION</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="string">'key'</span><span class="keyword">, </span><span class="string">'some data'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />You might think that connection $a will store everything uncompressed, but this is not the case.<br />The persistent connection options are changed by the second object creation.</span></code></div>
  </div>
 </div>
  <div class="note" id="111154">  <div class="votes">
    <div id="Vu111154">
    <a href="/manual/vote-note.php?id=111154&amp;page=memcached.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111154">
    <a href="/manual/vote-note.php?id=111154&amp;page=memcached.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111154" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#111154" class="name">
  <strong class="user"><em>kangzjnet at gmail dot com</em></strong></a><a class="genanchor" href="#111154"> &para;</a><div class="date" title="2013-01-21 09:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111154">
<div class="phpcode"><code><span class="html">To enable automatic failover, you have to set OPT_REMOVE_FAILED_SERVERS option, which is supported by php-memcached 2.0.0b2 or above.<br /><br />Here is the example,<br /><span class="default">&lt;?php<br />$memcache </span><span class="keyword">= new </span><span class="default">Memcached </span><span class="keyword">( </span><span class="string">'a_mem_pool' </span><span class="keyword">);<br /></span><span class="default">$ss </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">getServerList </span><span class="keyword">();<br />if (empty ( </span><span class="default">$ss </span><span class="keyword">)) {<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_RECV_TIMEOUT</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_SEND_TIMEOUT</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_TCP_NODELAY</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_SERVER_FAILURE_LIMIT</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_CONNECT_TIMEOUT</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_RETRY_TIMEOUT</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_DISTRIBUTION</span><span class="keyword">, </span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">DISTRIBUTION_CONSISTENT</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_REMOVE_FAILED_SERVERS</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_LIBKETAMA_COMPATIBLE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">addServer </span><span class="keyword">( </span><span class="string">'10.10.1.75'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">addServer </span><span class="keyword">( </span><span class="string">'10.10.1.76'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">addServer </span><span class="keyword">( </span><span class="string">'10.10.1.77'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.construct.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
