<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-connect.php">
 <link rel="shorturl" href="https://www.php.net/pg-connect">
 <link rel="alternate" href="https://www.php.net/pg-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-close.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-connect-poll.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open a PostgreSQL connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_connect - Manual" />
<meta name="twitter:description" content="Open a PostgreSQL connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_connect - Manual" />
<meta itemprop="description" content="Open a PostgreSQL connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open a PostgreSQL connection" />

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
        <a href="function.pg-connect-poll.php">
          pg_connect_poll &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-close.php">
          &laquo; pg_close        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.pgsql.php'>PostgreSQL</a></li>      <li><a href='ref.pgsql.php'>PostgreSQL Functions</a></li>      </ul>
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
            <option value='en/function.pg-connect.php' selected="selected">English</option>
            <option value='de/function.pg-connect.php'>German</option>
            <option value='es/function.pg-connect.php'>Spanish</option>
            <option value='fr/function.pg-connect.php'>French</option>
            <option value='it/function.pg-connect.php'>Italian</option>
            <option value='ja/function.pg-connect.php'>Japanese</option>
            <option value='pt_BR/function.pg-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-connect.php'>Russian</option>
            <option value='tr/function.pg-connect.php'>Turkish</option>
            <option value='uk/function.pg-connect.php'>Ukrainian</option>
            <option value='zh/function.pg-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_connect</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_connect</span> &mdash; <span class="dc-title">Open a PostgreSQL connection</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_connect</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$connection_string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_connect()</strong></span> opens a connection to a
   PostgreSQL database specified by the
   <code class="parameter">connection_string</code>.
  </p>
  <p class="para">
   If a second call is made to <span class="function"><strong>pg_connect()</strong></span> with
   the same <code class="parameter">connection_string</code> as an existing connection, the
   existing connection will be returned unless you pass
   <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-force-new">PGSQL_CONNECT_FORCE_NEW</a></code></strong> as
   <code class="parameter">flags</code>.
  </p>
  <p class="para">
   The old syntax with multiple parameters
   <strong class="command">$conn = pg_connect(&quot;host&quot;, &quot;port&quot;, &quot;options&quot;, &quot;tty&quot;, &quot;dbname&quot;)
   </strong> has been deprecated.
  </p>
 </div>


<div class="refsect1 parameters" id="refsect1-function.pg-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection_string</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">connection_string</code> can be empty to use all default parameters, or it 
       can contain one or more parameter settings separated by whitespace. 
       Each parameter setting is in the form <code class="literal">keyword = value</code>. Spaces around 
       the equal sign are optional. To write an empty value or a value 
       containing spaces, surround it with single quotes, e.g., <code class="literal">keyword = 
       &#039;a value&#039;</code>. Single quotes and backslashes within the value must be 
       escaped with a backslash, i.e., \&#039; and \\.  
      </p>
      <p class="para">
       The currently recognized parameter keywords are:
       <code class="parameter">host</code>, <code class="parameter">hostaddr</code>, <code class="parameter">port</code>,
       <code class="parameter">dbname</code> (defaults to value of <code class="parameter">user</code>),
       <code class="parameter">user</code>,
       <code class="parameter">password</code>, <code class="parameter">connect_timeout</code>,
       <code class="parameter">options</code>, <code class="parameter">tty</code> (ignored), <code class="parameter">sslmode</code>,
       <code class="parameter">requiressl</code> (deprecated in favor of <code class="parameter">sslmode</code>), and
       <code class="parameter">service</code>.  Which of these arguments exist depends
       on your PostgreSQL version.
      </p>
      <p class="para">
       The <code class="parameter">options</code> parameter can be used to set command line parameters 
       to be invoked by the server.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       If <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-force-new">PGSQL_CONNECT_FORCE_NEW</a></code></strong> is passed, then a new connection
       is created, even if the <code class="parameter">connection_string</code> is identical to
       an existing connection.
      </p>
      <p class="para">
       If <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-async">PGSQL_CONNECT_ASYNC</a></code></strong> is given, then the
       connection is established asynchronously. The state of the connection
       can then be checked via <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> or
       <span class="function"><a href="function.pg-connection-status.php" class="function">pg_connection_status()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-connect-changelog">
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
      <td>8.1.0</td>
      <td>
       Returns an <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.pg-connect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2042">
    <p><strong>Example #1 Using <span class="function"><strong>pg_connect()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=mary"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//connect to a database named "mary"<br /><br /></span><span style="color: #0000BB">$dbconn2 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"host=localhost port=5432 dbname=mary"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// connect to a database named "mary" on "localhost" at port "5432"<br /><br /></span><span style="color: #0000BB">$dbconn3 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"host=sheep port=5432 dbname=mary user=lamb password=foo"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//connect to a database named "mary" on the host "sheep" with a username and password<br /><br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"host=sheep port=5432 dbname=test user=lamb password=bar"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dbconn4 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//connect to a database named "test" on the host "sheep" with a username and password<br /><br /></span><span style="color: #0000BB">$dbconn5 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"host=localhost options='--client_encoding=UTF8'"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//connect to a database on "localhost" and set the command line parameter which tells the encoding is in UTF-8<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pg-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-pconnect.php" class="function" rel="rdfs-seeAlso">pg_pconnect()</a> - Open a persistent PostgreSQL connection</span></li>
    <li><span class="function"><a href="function.pg-close.php" class="function" rel="rdfs-seeAlso">pg_close()</a> - Closes a PostgreSQL connection</span></li>
    <li><span class="function"><a href="function.pg-host.php" class="function" rel="rdfs-seeAlso">pg_host()</a> - Returns the host name associated with the connection</span></li>
    <li><span class="function"><a href="function.pg-port.php" class="function" rel="rdfs-seeAlso">pg_port()</a> - Return the port number associated with the connection</span></li>
    <li><span class="function"><a href="function.pg-tty.php" class="function" rel="rdfs-seeAlso">pg_tty()</a> - Return the TTY name associated with the connection</span></li>
    <li><span class="function"><a href="function.pg-options.php" class="function" rel="rdfs-seeAlso">pg_options()</a> - Get the options associated with the connection</span></li>
    <li><span class="function"><a href="function.pg-dbname.php" class="function" rel="rdfs-seeAlso">pg_dbname()</a> - Get the database name</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119642">  <div class="votes">
    <div id="Vu119642">
    <a href="/manual/vote-note.php?id=119642&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119642">
    <a href="/manual/vote-note.php?id=119642&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119642" title="58% like this...">
    14
    </div>
  </div>
  <a href="#119642" class="name">
  <strong class="user"><em>lukasz dot wolczak at gmail dot com</em></strong></a><a class="genanchor" href="#119642"> &para;</a><div class="date" title="2016-07-23 09:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119642">
<div class="phpcode"><code><span class="html">It is worth to know, that you can set application_name in connection string, consider this simple example:<br /><br /><span class="default">&lt;?php<br />$appName </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">] . </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_URI'</span><span class="keyword">];<br /></span><span class="default">$connStr </span><span class="keyword">= </span><span class="string">"host=localhost port=5432 dbname=postgres user=postgres options='--application_name=</span><span class="default">$appName</span><span class="string">'"</span><span class="keyword">;<br /><br /></span><span class="comment">//simple check<br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="default">$connStr</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"select * from pg_stat_activity"</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">pg_fetch_all</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />By doing this move on cli or cgi you can see in pgAdmin what scripts are running or what requests are running on database. You can extend configuration of postgres to track slow queries and print application name to logs. It was very usuful to me to find out what and where should I optimize.</span></code></div>
  </div>
 </div>
  <div class="note" id="112340">  <div class="votes">
    <div id="Vu112340">
    <a href="/manual/vote-note.php?id=112340&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112340">
    <a href="/manual/vote-note.php?id=112340&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112340" title="57% like this...">
    6
    </div>
  </div>
  <a href="#112340" class="name">
  <strong class="user"><em>Dave</em></strong></a><a class="genanchor" href="#112340"> &para;</a><div class="date" title="2013-06-03 12:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112340">
<div class="phpcode"><code><span class="html">If you use pgbouncer and unix socket<br />and you pgbouncer.ini looks like this<br />listen_port = 6432<br />unix_socket_dir = /tmp<br /><br />you connect like this<br /><br />pg_connect('host=/tmp port=6432 dbname=DB user=USER password=PASS');</span></code></div>
  </div>
 </div>
  <div class="note" id="115817">  <div class="votes">
    <div id="Vu115817">
    <a href="/manual/vote-note.php?id=115817&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115817">
    <a href="/manual/vote-note.php?id=115817&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115817" title="56% like this...">
    4
    </div>
  </div>
  <a href="#115817" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#115817"> &para;</a><div class="date" title="2014-09-29 07:50"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115817">
<div class="phpcode"><code><span class="html">Getting md5 passwords was confusing because of a lack of documentation:<br /><br />- set up your pg_hba.conf in order to use md5 password instead of 'trust' or 'ident'<br />- check if your postgres.conf has 'password_encryption=on' (depending on the version this might already be 'on').<br />- make sure to restart your postgres process.<br />- in PHP you just supply the username and password in _plain_ text:<br />'host=localhost port=5432 dbname=megadb user=megauser password=holyhandbagsbatmanthispasswordisinplaintext'<br />The postgres PHP library will automagically do the md5 encoding for you, no need to do it yourself.</span></code></div>
  </div>
 </div>
  <div class="note" id="82117">  <div class="votes">
    <div id="Vu82117">
    <a href="/manual/vote-note.php?id=82117&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82117">
    <a href="/manual/vote-note.php?id=82117&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82117" title="55% like this...">
    4
    </div>
  </div>
  <a href="#82117" class="name">
  <strong class="user"><em>bgalloway at citycarshare dot org</em></strong></a><a class="genanchor" href="#82117"> &para;</a><div class="date" title="2008-03-27 06:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82117">
<div class="phpcode"><code><span class="html">Beware about writing something like <br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getdb_FAILS</span><span class="keyword">() {<br />    return </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"..."</span><span class="keyword">) or die(</span><span class="string">'connection failed'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />It will return a boolean.  This will appear to be fine if you don't use the return value as a db connection handle, but will fail if you do.<br /><br />Instead, use:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getdb</span><span class="keyword">() {<br />    </span><span class="default">$db </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"..."</span><span class="keyword">) or die(</span><span class="string">'connection failed'</span><span class="keyword">);<br />    return </span><span class="default">$db</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />which actually returns a handle.</span></code></div>
  </div>
 </div>
  <div class="note" id="80093">  <div class="votes">
    <div id="Vu80093">
    <a href="/manual/vote-note.php?id=80093&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80093">
    <a href="/manual/vote-note.php?id=80093&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80093" title="54% like this...">
    2
    </div>
  </div>
  <a href="#80093" class="name">
  <strong class="user"><em>tim at buttersideup dot com</em></strong></a><a class="genanchor" href="#80093"> &para;</a><div class="date" title="2007-12-28 10:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80093">
<div class="phpcode"><code><span class="html">It's not explicitly stated here, but you can also connect to PostgreSQL via a UNIX domain socket by leaving the host empty.  This should have less overhead than using TCP e.g.:<br /><br />$dbh = new PDO('pgsql:user=exampleuser dbname=exampledb password=examplepass');<br /><br />In fact as the C library call PQconnectdb underlies this implementation, you can supply anything that this library call would take - the "pgsql:" prefix gets stripped off before PQconnectdb is called, and if you supply any of the optional arguments (e.g. user), then these arguments will be added to the string that you supplied...  Check the docs for your relevant PostgreSQL client library: e.g.<br /><br /><a href="http://www.postgresql.org/docs/8.3/static/libpq-connect.html" rel="nofollow" target="_blank">http://www.postgresql.org/docs/8.3/static/libpq-connect.html</a><br /><br />If you really want, you can use ';'s to separate your arguments - these will just be converted to spaces before PQconnectdb is called.<br /><br />Tim.</span></code></div>
  </div>
 </div>
  <div class="note" id="18984">  <div class="votes">
    <div id="Vu18984">
    <a href="/manual/vote-note.php?id=18984&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18984">
    <a href="/manual/vote-note.php?id=18984&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18984" title="55% like this...">
    1
    </div>
  </div>
  <a href="#18984" class="name">
  <strong class="user"><em>matias at nospam dot projectcast dot com</em></strong></a><a class="genanchor" href="#18984"> &para;</a><div class="date" title="2002-02-12 01:16"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18984">
<div class="phpcode"><code><span class="html">At least with Postgres 7.2, connecting to local postgresdatabase requires a user in the database with the same name as the user running apache, or the connection fails.</span></code></div>
  </div>
 </div>
  <div class="note" id="100641">  <div class="votes">
    <div id="Vu100641">
    <a href="/manual/vote-note.php?id=100641&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100641">
    <a href="/manual/vote-note.php?id=100641&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100641" title="51% like this...">
    1
    </div>
  </div>
  <a href="#100641" class="name">
  <strong class="user"><em>thakur at corexprts dot com</em></strong></a><a class="genanchor" href="#100641"> &para;</a><div class="date" title="2010-10-27 01:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100641">
<div class="phpcode"><code><span class="html">One thing is to remember, whenever trying to use pg_connect, add the timeout parameter with it
<br />
<br /><span class="default">&lt;?php
<br />$d</span><span class="keyword">=</span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">'host=example.com user=pgsql dbname=postgres connect_timeout=5'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123569">  <div class="votes">
    <div id="Vu123569">
    <a href="/manual/vote-note.php?id=123569&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123569">
    <a href="/manual/vote-note.php?id=123569&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123569" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123569" class="name">
  <strong class="user"><em>VLroyrenn</em></strong></a><a class="genanchor" href="#123569"> &para;</a><div class="date" title="2019-01-30 07:31"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123569">
<div class="phpcode"><code><span class="html">For what it's worth, it should be noted that, while PHP will generally handle connection-reuse for you so long as you keep using the same connection strings, as in the following example:<br /><br /><span class="default">&lt;?php<br />$before_conn1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$db1 </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="default">$conn_string</span><span class="keyword">);<br /><br /></span><span class="default">$before_conn2 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$db2 </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="default">$conn_string</span><span class="keyword">);<br /></span><span class="default">$after_conn2 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />echo(</span><span class="default">$before_conn2 </span><span class="keyword">- </span><span class="default">$before_conn1</span><span class="keyword">); </span><span class="comment">// Takes ~0.03s<br /></span><span class="keyword">echo(</span><span class="string">"\n"</span><span class="keyword">);<br />echo(</span><span class="default">$after_conn2 </span><span class="keyword">- </span><span class="default">$before_conn2</span><span class="keyword">); </span><span class="comment">// Takes 0s<br /></span><span class="default">?&gt;<br /></span><br />...as nice as it would have been, this does not hold true for async connections; you have to manage those yourself and you can't follow up an async connection with a blocking one later on as an easy way to wait for the connection process to complete before sending queries.<br /><br /><span class="default">&lt;?php<br />$before_conn1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$db1 </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="default">$conn_string</span><span class="keyword">, </span><span class="default">PGSQL_CONNECT_ASYNC</span><span class="keyword">);<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$before_conn2 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$db2 </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="default">$conn_string</span><span class="keyword">);<br /></span><span class="default">$after_conn2 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />echo(</span><span class="default">$before_conn2 </span><span class="keyword">- </span><span class="default">$before_conn1</span><span class="keyword">); </span><span class="comment">// Takes ~1s<br /></span><span class="keyword">echo(</span><span class="string">"\n"</span><span class="keyword">);<br />echo(</span><span class="default">$after_conn2 </span><span class="keyword">- </span><span class="default">$before_conn2</span><span class="keyword">); </span><span class="comment">// Takes ~0.025s<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93837">  <div class="votes">
    <div id="Vu93837">
    <a href="/manual/vote-note.php?id=93837&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93837">
    <a href="/manual/vote-note.php?id=93837&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93837" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#93837" class="name">
  <strong class="user"><em>gutostraube at gmail dot com</em></strong></a><a class="genanchor" href="#93837"> &para;</a><div class="date" title="2009-10-02 06:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93837">
<div class="phpcode"><code><span class="html">It's possible connect to a PostgreSQL database via Unix socket using the pg_connect() function by the following two ways:<br /><br />1) Using the socket path:<br /><br /><span class="default">&lt;?php<br />$conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">'host=/var/run/postgresql user=username dbname=databasename'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />2) Omitting the host name/path:<br /><br /><span class="default">&lt;?php<br />$conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">'user=username dbname=databasename'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Note: in this case (omitting the host value), the default socket path will be used.</span></code></div>
  </div>
 </div>
  <div class="note" id="51767">  <div class="votes">
    <div id="Vu51767">
    <a href="/manual/vote-note.php?id=51767&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51767">
    <a href="/manual/vote-note.php?id=51767&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51767" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#51767" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#51767"> &para;</a><div class="date" title="2005-04-10 09:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51767">
<div class="phpcode"><code><span class="html">The values accepted by pg_connect's sslmode argument are: disable, allow, prefer, require</span></code></div>
  </div>
 </div>
  <div class="note" id="6892">  <div class="votes">
    <div id="Vu6892">
    <a href="/manual/vote-note.php?id=6892&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd6892">
    <a href="/manual/vote-note.php?id=6892&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V6892" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#6892" class="name">
  <strong class="user"><em>leace at post dot cz</em></strong></a><a class="genanchor" href="#6892"> &para;</a><div class="date" title="2000-07-21 02:26"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom6892">
<div class="phpcode"><code><span class="html">If you use PostgreSQL users for authenticating into your pg database rather than using your own authentication, always specify host directive in pg_connect and edit pg_hba.conf to authenticate from this host accordingly. Otherwise, PHP will connect as 'local' using UNIX domain sockets, which is set in pg_hba.conf to 'trust' by default (so you can connect using psql on console without specifying password) and everyone can connect to db _without password_ .</span></code></div>
  </div>
 </div>
  <div class="note" id="76870">  <div class="votes">
    <div id="Vu76870">
    <a href="/manual/vote-note.php?id=76870&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76870">
    <a href="/manual/vote-note.php?id=76870&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76870" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#76870" class="name">
  <strong class="user"><em>Sohel Taslim</em></strong></a><a class="genanchor" href="#76870"> &para;</a><div class="date" title="2007-08-02 07:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76870">
<div class="phpcode"><code><span class="html">I got the same problem but I have to solve that in different way.<br />In my postgresql.conf file the following was commented.<br />So, I active that under Connection Settings-<br /><br /># - Connection Settings –<br />tcpip_socket = true</span></code></div>
  </div>
 </div>
  <div class="note" id="119586">  <div class="votes">
    <div id="Vu119586">
    <a href="/manual/vote-note.php?id=119586&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119586">
    <a href="/manual/vote-note.php?id=119586&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119586" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#119586" class="name">
  <strong class="user"><em>floriparob at gmail dot com</em></strong></a><a class="genanchor" href="#119586"> &para;</a><div class="date" title="2016-07-12 03:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119586">
<div class="phpcode"><code><span class="html">Using the "service" parameter as the connection string -- we found that the following functions:-<br /><br />putenv("PGSERVICEFILE=/path/to/your/service/file/pg_service.conf");<br />$connect_string = ("service=testdb");<br />try {<br />   $pgconn_handle = pg_connect($connect_string);<br />   . . . . . etc.<br /><br />Note:-<br />1) the environment variable has to point to the path AND file name.<br />2) the file has to be readable by Apache.<br /><br />See:-<br /><br /><a href="https://www.postgresql.org/docs/9.6/static/libpq-pgservice.html" rel="nofollow" target="_blank">https://www.postgresql.org/docs/9.6/static/libpq-pgservice.html</a><br /><br />for how to create your pg_service.conf</span></code></div>
  </div>
 </div>
  <div class="note" id="38125">  <div class="votes">
    <div id="Vu38125">
    <a href="/manual/vote-note.php?id=38125&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38125">
    <a href="/manual/vote-note.php?id=38125&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38125" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#38125" class="name">
  <strong class="user"><em>xzilla at users dot sourceforge dot net</em></strong></a><a class="genanchor" href="#38125"> &para;</a><div class="date" title="2003-12-09 08:22"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38125">
<div class="phpcode"><code><span class="html">regarding the note from  matias at nospam dot projectcast dot com<br />on 12-Feb-2002 01:16, you do not need a user in the database with the same name a your web user with ANY version of postgresql.  The only time that would be a requirement ifs if you set your postgresql server to only allow IDENT based authentication  (which IIRC is the default on Red Hat systems, which might be what lead to the confusion).  For more info on the various authentication methods allowed by postgresql, check out <a href="http://www.postgresql.org/docs/7.4/static/client-authentication.html" rel="nofollow" target="_blank">http://www.postgresql.org/docs/7.4/static/client-authentication.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="28069">  <div class="votes">
    <div id="Vu28069">
    <a href="/manual/vote-note.php?id=28069&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28069">
    <a href="/manual/vote-note.php?id=28069&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28069" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#28069" class="name">
  <strong class="user"><em>jtate at php dot net</em></strong></a><a class="genanchor" href="#28069"> &para;</a><div class="date" title="2002-12-31 02:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28069">
<div class="phpcode"><code><span class="html">If you use host=HOSTNAME in your pg_connect string when connecting to PostgreSQL databases newer than 7.1, you need to make sure that your postmaster daemon is started with the "-i" option.  Otherwise the connection will fail.  See <a href="http://www.postgresql.org/idocs/index.php?client-authentication.html" rel="nofollow" target="_blank">http://www.postgresql.org/idocs/index.php?client-authentication.html</a> for client authentication documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="45293">  <div class="votes">
    <div id="Vu45293">
    <a href="/manual/vote-note.php?id=45293&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45293">
    <a href="/manual/vote-note.php?id=45293&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45293" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#45293" class="name">
  <strong class="user"><em>phpnet at benjamin dot schulz dot name</em></strong></a><a class="genanchor" href="#45293"> &para;</a><div class="date" title="2004-09-01 04:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45293">
<div class="phpcode"><code><span class="html">if you need to open a new connection handle (i.e. for multiple pg_send_query()) use PGSQL_CONNECT_FORCE_NEW as second parameter to pg_connect()</span></code></div>
  </div>
 </div>
  <div class="note" id="8527">  <div class="votes">
    <div id="Vu8527">
    <a href="/manual/vote-note.php?id=8527&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8527">
    <a href="/manual/vote-note.php?id=8527&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8527" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#8527" class="name">
  <strong class="user"><em>kayotix at yahoo dot com</em></strong></a><a class="genanchor" href="#8527"> &para;</a><div class="date" title="2000-09-14 11:54"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8527">
<div class="phpcode"><code><span class="html">Little note that is buried in the install somewhere.  In Php 3, PostgreSQL support was activated by adding --with-postgresql=[DIR] to the options passed to ./configure.  With Php 4.0.2 (on Linux) the parameter was --with-pgsql.  The only place I found this was in the installing PHP on Unix section of the manual.</span></code></div>
  </div>
 </div>
  <div class="note" id="16024">  <div class="votes">
    <div id="Vu16024">
    <a href="/manual/vote-note.php?id=16024&amp;page=function.pg-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16024">
    <a href="/manual/vote-note.php?id=16024&amp;page=function.pg-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16024" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#16024" class="name">
  <strong class="user"><em>rolf at sir-wum dot de</em></strong></a><a class="genanchor" href="#16024"> &para;</a><div class="date" title="2001-10-12 05:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16024">
<div class="phpcode"><code><span class="html">pg_connect() won't work with the authentication method 'crypt' in the pg_hba.conf. Took me an hour to figure that out till I remeberd some other issues with windows missing the crypt() call.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-connect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pgsql.php">PostgreSQL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.pg-affected-rows.php" title="pg_&#8203;affected_&#8203;rows">pg_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-cancel-query.php" title="pg_&#8203;cancel_&#8203;query">pg_&#8203;cancel_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-client-encoding.php" title="pg_&#8203;client_&#8203;encoding">pg_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-close.php" title="pg_&#8203;close">pg_&#8203;close</a>
                        </li>
                                                <li class="current">
                            <a href="function.pg-connect.php" title="pg_&#8203;connect">pg_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connect-poll.php" title="pg_&#8203;connect_&#8203;poll">pg_&#8203;connect_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-busy.php" title="pg_&#8203;connection_&#8203;busy">pg_&#8203;connection_&#8203;busy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-reset.php" title="pg_&#8203;connection_&#8203;reset">pg_&#8203;connection_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-status.php" title="pg_&#8203;connection_&#8203;status">pg_&#8203;connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-consume-input.php" title="pg_&#8203;consume_&#8203;input">pg_&#8203;consume_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-convert.php" title="pg_&#8203;convert">pg_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-from.php" title="pg_&#8203;copy_&#8203;from">pg_&#8203;copy_&#8203;from</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-to.php" title="pg_&#8203;copy_&#8203;to">pg_&#8203;copy_&#8203;to</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-dbname.php" title="pg_&#8203;dbname">pg_&#8203;dbname</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-delete.php" title="pg_&#8203;delete">pg_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-end-copy.php" title="pg_&#8203;end_&#8203;copy">pg_&#8203;end_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-bytea.php" title="pg_&#8203;escape_&#8203;bytea">pg_&#8203;escape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-identifier.php" title="pg_&#8203;escape_&#8203;identifier">pg_&#8203;escape_&#8203;identifier</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-literal.php" title="pg_&#8203;escape_&#8203;literal">pg_&#8203;escape_&#8203;literal</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-string.php" title="pg_&#8203;escape_&#8203;string">pg_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-execute.php" title="pg_&#8203;execute">pg_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all.php" title="pg_&#8203;fetch_&#8203;all">pg_&#8203;fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all-columns.php" title="pg_&#8203;fetch_&#8203;all_&#8203;columns">pg_&#8203;fetch_&#8203;all_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-array.php" title="pg_&#8203;fetch_&#8203;array">pg_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-assoc.php" title="pg_&#8203;fetch_&#8203;assoc">pg_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-object.php" title="pg_&#8203;fetch_&#8203;object">pg_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-result.php" title="pg_&#8203;fetch_&#8203;result">pg_&#8203;fetch_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-row.php" title="pg_&#8203;fetch_&#8203;row">pg_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-is-null.php" title="pg_&#8203;field_&#8203;is_&#8203;null">pg_&#8203;field_&#8203;is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-name.php" title="pg_&#8203;field_&#8203;name">pg_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-num.php" title="pg_&#8203;field_&#8203;num">pg_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-prtlen.php" title="pg_&#8203;field_&#8203;prtlen">pg_&#8203;field_&#8203;prtlen</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-size.php" title="pg_&#8203;field_&#8203;size">pg_&#8203;field_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-table.php" title="pg_&#8203;field_&#8203;table">pg_&#8203;field_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-type.php" title="pg_&#8203;field_&#8203;type">pg_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-type-oid.php" title="pg_&#8203;field_&#8203;type_&#8203;oid">pg_&#8203;field_&#8203;type_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-flush.php" title="pg_&#8203;flush">pg_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-free-result.php" title="pg_&#8203;free_&#8203;result">pg_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-notify.php" title="pg_&#8203;get_&#8203;notify">pg_&#8203;get_&#8203;notify</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-pid.php" title="pg_&#8203;get_&#8203;pid">pg_&#8203;get_&#8203;pid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-result.php" title="pg_&#8203;get_&#8203;result">pg_&#8203;get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-host.php" title="pg_&#8203;host">pg_&#8203;host</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-insert.php" title="pg_&#8203;insert">pg_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-error.php" title="pg_&#8203;last_&#8203;error">pg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-notice.php" title="pg_&#8203;last_&#8203;notice">pg_&#8203;last_&#8203;notice</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-oid.php" title="pg_&#8203;last_&#8203;oid">pg_&#8203;last_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-close.php" title="pg_&#8203;lo_&#8203;close">pg_&#8203;lo_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-create.php" title="pg_&#8203;lo_&#8203;create">pg_&#8203;lo_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-export.php" title="pg_&#8203;lo_&#8203;export">pg_&#8203;lo_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-import.php" title="pg_&#8203;lo_&#8203;import">pg_&#8203;lo_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-open.php" title="pg_&#8203;lo_&#8203;open">pg_&#8203;lo_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read.php" title="pg_&#8203;lo_&#8203;read">pg_&#8203;lo_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read-all.php" title="pg_&#8203;lo_&#8203;read_&#8203;all">pg_&#8203;lo_&#8203;read_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-seek.php" title="pg_&#8203;lo_&#8203;seek">pg_&#8203;lo_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-tell.php" title="pg_&#8203;lo_&#8203;tell">pg_&#8203;lo_&#8203;tell</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-truncate.php" title="pg_&#8203;lo_&#8203;truncate">pg_&#8203;lo_&#8203;truncate</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-unlink.php" title="pg_&#8203;lo_&#8203;unlink">pg_&#8203;lo_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-write.php" title="pg_&#8203;lo_&#8203;write">pg_&#8203;lo_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-meta-data.php" title="pg_&#8203;meta_&#8203;data">pg_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-fields.php" title="pg_&#8203;num_&#8203;fields">pg_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-rows.php" title="pg_&#8203;num_&#8203;rows">pg_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-options.php" title="pg_&#8203;options">pg_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-parameter-status.php" title="pg_&#8203;parameter_&#8203;status">pg_&#8203;parameter_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-pconnect.php" title="pg_&#8203;pconnect">pg_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-ping.php" title="pg_&#8203;ping">pg_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-port.php" title="pg_&#8203;port">pg_&#8203;port</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-prepare.php" title="pg_&#8203;prepare">pg_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-put-line.php" title="pg_&#8203;put_&#8203;line">pg_&#8203;put_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query.php" title="pg_&#8203;query">pg_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query-params.php" title="pg_&#8203;query_&#8203;params">pg_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error.php" title="pg_&#8203;result_&#8203;error">pg_&#8203;result_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error-field.php" title="pg_&#8203;result_&#8203;error_&#8203;field">pg_&#8203;result_&#8203;error_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-memory-size.php" title="pg_&#8203;result_&#8203;memory_&#8203;size">pg_&#8203;result_&#8203;memory_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-seek.php" title="pg_&#8203;result_&#8203;seek">pg_&#8203;result_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-status.php" title="pg_&#8203;result_&#8203;status">pg_&#8203;result_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-select.php" title="pg_&#8203;select">pg_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-execute.php" title="pg_&#8203;send_&#8203;execute">pg_&#8203;send_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-prepare.php" title="pg_&#8203;send_&#8203;prepare">pg_&#8203;send_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query.php" title="pg_&#8203;send_&#8203;query">pg_&#8203;send_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query-params.php" title="pg_&#8203;send_&#8203;query_&#8203;params">pg_&#8203;send_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-chunked-rows-size.php" title="pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size">pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-client-encoding.php" title="pg_&#8203;set_&#8203;client_&#8203;encoding">pg_&#8203;set_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-context-visibility.php" title="pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility">pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-verbosity.php" title="pg_&#8203;set_&#8203;error_&#8203;verbosity">pg_&#8203;set_&#8203;error_&#8203;verbosity</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-socket.php" title="pg_&#8203;socket">pg_&#8203;socket</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-trace.php" title="pg_&#8203;trace">pg_&#8203;trace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-transaction-status.php" title="pg_&#8203;transaction_&#8203;status">pg_&#8203;transaction_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-tty.php" title="pg_&#8203;tty">pg_&#8203;tty</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-unescape-bytea.php" title="pg_&#8203;unescape_&#8203;bytea">pg_&#8203;unescape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-untrace.php" title="pg_&#8203;untrace">pg_&#8203;untrace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-update.php" title="pg_&#8203;update">pg_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-version.php" title="pg_&#8203;version">pg_&#8203;version</a>
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
