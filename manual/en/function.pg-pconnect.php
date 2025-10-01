<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_pconnect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-pconnect.php">
 <link rel="shorturl" href="https://www.php.net/pg-pconnect">
 <link rel="alternate" href="https://www.php.net/pg-pconnect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-parameter-status.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-ping.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-pconnect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-pconnect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-pconnect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-pconnect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-pconnect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-pconnect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-pconnect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-pconnect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-pconnect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-pconnect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-pconnect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open a persistent PostgreSQL connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_pconnect - Manual" />
<meta name="twitter:description" content="Open a persistent PostgreSQL connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_pconnect - Manual" />
<meta itemprop="description" content="Open a persistent PostgreSQL connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open a persistent PostgreSQL connection" />

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
        <a href="function.pg-ping.php">
          pg_ping &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-parameter-status.php">
          &laquo; pg_parameter_status        </a>
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
            <option value='en/function.pg-pconnect.php' selected="selected">English</option>
            <option value='de/function.pg-pconnect.php'>German</option>
            <option value='es/function.pg-pconnect.php'>Spanish</option>
            <option value='fr/function.pg-pconnect.php'>French</option>
            <option value='it/function.pg-pconnect.php'>Italian</option>
            <option value='ja/function.pg-pconnect.php'>Japanese</option>
            <option value='pt_BR/function.pg-pconnect.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-pconnect.php'>Russian</option>
            <option value='tr/function.pg-pconnect.php'>Turkish</option>
            <option value='uk/function.pg-pconnect.php'>Ukrainian</option>
            <option value='zh/function.pg-pconnect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-pconnect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_pconnect</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_pconnect</span> &mdash; <span class="dc-title">Open a persistent PostgreSQL connection</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-pconnect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_pconnect</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$connection_string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_pconnect()</strong></span> opens a connection to a
   PostgreSQL database. It returns a <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance that is
   needed by other PostgreSQL functions.
  </p>
  <p class="para">
   If a second call is made to <span class="function"><strong>pg_pconnect()</strong></span> with
   the same <code class="parameter">connection_string</code> as an existing connection, the
   existing connection will be returned unless you pass
   <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-force-new">PGSQL_CONNECT_FORCE_NEW</a></code></strong> as
   <code class="parameter">flags</code>.
  </p>
  <p class="para">
   To enable persistent connections, the
   <a href="pgsql.configuration.php#ini.pgsql.allow-persistent" class="link">pgsql.allow_persistent</a>
   <var class="filename">php.ini</var> directive must be set to <code class="literal">&quot;On&quot;</code> (which is the default).
   The maximum number of persistent connections can be defined with the
   <a href="pgsql.configuration.php#ini.pgsql.max-persistent" class="link">pgsql.max_persistent</a>
   <var class="filename">php.ini</var> directive (defaults to <code class="literal">-1</code> for no limit).
   The total number of connections can be set with the
   <a href="pgsql.configuration.php#ini.pgsql.max-links" class="link">pgsql.max_links</a>
   <var class="filename">php.ini</var> directive.
  </p>
  <p class="para">
   <span class="function"><a href="function.pg-close.php" class="function">pg_close()</a></span> will not close persistent links
   generated by <span class="function"><strong>pg_pconnect()</strong></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pg-pconnect-parameters">
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
       escaped with a backslash, i.e., <code class="literal">\&#039;</code> and <code class="literal">\\</code>.
      </p>
      <p class="para">
       The currently recognized parameter keywords are:
       <code class="parameter">host</code>, <code class="parameter">hostaddr</code>, <code class="parameter">port</code>,
       <code class="parameter">dbname</code>, <code class="parameter">user</code>,
       <code class="parameter">password</code>, <code class="parameter">connect_timeout</code>,
       <code class="parameter">options</code>, <code class="parameter">tty</code> (ignored), <code class="parameter">sslmode</code>,
       <code class="parameter">requiressl</code> (deprecated in favor of <code class="parameter">sslmode</code>), and
       <code class="parameter">service</code>.
       Which of these arguments exist depends on the PostgreSQL version.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       If <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-force-new">PGSQL_CONNECT_FORCE_NEW</a></code></strong> is passed, then a new connection
       is created, even if the <code class="parameter">connection_string</code> is identical to
       an existing connection.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-pconnect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-pconnect-changelog">
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
       Returns a <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.pg-pconnect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2098">
    <p><strong>Example #1 Using <span class="function"><strong>pg_pconnect()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Connect to a database named "mary"<br /></span><span style="color: #0000BB">$dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=mary"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Connect to a database named "mary" on "localhost" at port "5432"<br /></span><span style="color: #0000BB">$dbconn2 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">"host=localhost port=5432 dbname=mary"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Connect to a database named "mary" on the host "sheep" with a username and password<br /></span><span style="color: #0000BB">$dbconn3 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">"host=sheep port=5432 dbname=mary user=lamb password=foo"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Connect to a database named "test" on the host "sheep" with a username and password<br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"host=sheep port=5432 dbname=test user=lamb password=bar"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dbconn4 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_pconnect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.pg-pconnect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-connect.php" class="function" rel="rdfs-seeAlso">pg_connect()</a> - Open a PostgreSQL connection</span></li>
    <li>
     <a href="features.persistent-connections.php" class="link">
     Persistent Database Connections</a>
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-pconnect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-pconnect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-pconnect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-pconnect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="78476">  <div class="votes">
    <div id="Vu78476">
    <a href="/manual/vote-note.php?id=78476&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78476">
    <a href="/manual/vote-note.php?id=78476&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78476" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78476" class="name">
  <strong class="user"><em>Dennis Fogg</em></strong></a><a class="genanchor" href="#78476"> &para;</a><div class="date" title="2007-10-13 01:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78476">
<div class="phpcode"><code><span class="html">As of Aug 2007, some suggestions from the postgresql forums<br />on pg_pconnect(), faster postgres connections, and connection pooling:<br /><br />Summary: <br /><a href="http://archives.postgresql.org/pgsql-general/2007-08/msg01406.php" rel="nofollow" target="_blank">http://archives.postgresql.org/pgsql-general/2007-08/msg01406.php</a><br /><br />Good details: <a href="http://archives.postgresql.org/pgsql-general/2007-08/msg00660.php" rel="nofollow" target="_blank">http://archives.postgresql.org/pgsql-general/2007-08/msg00660.php</a><br />Also: <a href="http://archives.postgresql.org/pgsql-general/2007-08/msg01489.php" rel="nofollow" target="_blank">http://archives.postgresql.org/pgsql-general/2007-08/msg01489.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="87550">  <div class="votes">
    <div id="Vu87550">
    <a href="/manual/vote-note.php?id=87550&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87550">
    <a href="/manual/vote-note.php?id=87550&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87550" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#87550" class="name">
  <strong class="user"><em>robertb</em></strong></a><a class="genanchor" href="#87550"> &para;</a><div class="date" title="2008-12-10 12:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87550">
<div class="phpcode"><code><span class="html">You should not use pg_pconnect - it's broken. It will work but it doesn't really pool, and it's behaviour is unpredictable. It will only make you rise the max_connections parameter in postgresql.conf file until you run out of resources (which will slow your database down).<br /><br />If you have many concurrent connections to your database, you should use the PostgreSQL connection pooler PgBouncer (developed by the Skype-team). When using pgbouncer, make sure you use pg_connect and NOT pg_pconnect. Also, make sure you close your connections with pg_close.<br /><br />* PGBouncer homepage:<br /><a href="http://developer.skype.com/SkypeGarage/DbProjects/PgBouncer" rel="nofollow" target="_blank">http://developer.skype.com/SkypeGarage/DbProjects/PgBouncer</a><br /><br />* PostgreSQL pooling article by Last.fm:<br /><a href="http://www.last.fm/user/Russ/journal/2008/02/21" rel="nofollow" target="_blank">http://www.last.fm/user/Russ/journal/2008/02/21</a><br />/zd_postgres_connection_pools:_pgpool_vs._pgbouncer</span></code></div>
  </div>
 </div>
  <div class="note" id="29013">  <div class="votes">
    <div id="Vu29013">
    <a href="/manual/vote-note.php?id=29013&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29013">
    <a href="/manual/vote-note.php?id=29013&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29013" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#29013" class="name">
  <strong class="user"><em>Spiros Ioannou</em></strong></a><a class="genanchor" href="#29013"> &para;</a><div class="date" title="2003-01-30 05:40"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29013">
<div class="phpcode"><code><span class="html">Instead of reducing MaxClients in apache you may try to<br />reduce pgsql.max_links in php to at least the number of<br />postmasters. It should work and leave<br />you with more available httpds for static html pages.</span></code></div>
  </div>
 </div>
  <div class="note" id="78796">  <div class="votes">
    <div id="Vu78796">
    <a href="/manual/vote-note.php?id=78796&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78796">
    <a href="/manual/vote-note.php?id=78796&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78796" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#78796" class="name">
  <strong class="user"><em>ts at dev dot websafe dot pl</em></strong></a><a class="genanchor" href="#78796"> &para;</a><div class="date" title="2007-10-28 02:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78796">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//<br />// Using pg_pconnect in a class.<br />//<br />// Why this? Because the manual says:<br />//<br />//   If a second call is made to pg_pconnect() with the same<br />//   connection_string as an existing connection, the existing <br />//   connection will be returned unless you pass <br />//   PGSQL_CONNECT_FORCE_NEW as connect_type.<br />//<br />// This is not always true.<br />//<br />/**<br /> * MyClassA creates a postgresql connection using pg_pconnect <br /> * and stores the resulting resource id to $this-&gt;conn <br /> */<br /></span><span class="keyword">class </span><span class="default">MyClassA<br /></span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$connection_string</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn </span><span class="keyword">= <br />            </span><span class="default">pg_pconnect</span><span class="keyword">(</span><span class="default">$connection_string</span><span class="keyword">) <br />                or die(</span><span class="string">'Wrong CONN_STRING'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">//<br />// Showing current php.ini settings to be sure<br />// that persistent connections s  are allowed. <br />// -1 means 'unlimited'<br />//<br /></span><span class="keyword">echo </span><span class="string">'&lt;br&gt;pgsql.allow_persistent: ' </span><span class="keyword">. </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'pgsql.allow_persistent'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br&gt;pgsql.max_persistent: ' </span><span class="keyword">. </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'pgsql.max_persistent'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br&gt;pgsql.max_links: ' </span><span class="keyword">. </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'pgsql.max_links'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br&gt;&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// setting one custom connection string for all objects<br />// (modify $connection_string to fit your needs)<br /></span><span class="default">$connection_string </span><span class="keyword">=<br />    </span><span class="string">'host=localhost port=5432' </span><span class="keyword">.<br />    </span><span class="string">' dbname=test user=test password=test'</span><span class="keyword">;<br /><br /></span><span class="comment">//  <br />// Creating 10 MyClassA objects using the same $connection_string<br />//<br /></span><span class="default">$objArr </span><span class="keyword">= Array();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) <br />{<br />    </span><span class="default">$objArr</span><span class="keyword">[] = new </span><span class="default">MyClassA</span><span class="keyword">(</span><span class="default">$connection_string</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//<br />// Human readable result:<br />//<br /></span><span class="keyword">foreach(</span><span class="default">$objArr </span><span class="keyword">as </span><span class="default">$id </span><span class="keyword">=&gt; </span><span class="default">$object</span><span class="keyword">)<br />{<br />    </span><span class="default">printf</span><span class="keyword">(<br />        </span><span class="string">'%s: Object %s: using db %s&lt;br&gt;'</span><span class="keyword">,<br />        </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">), </span><span class="default">$id</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">conn<br />    </span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* ------------------------------------------------------------- */<br />// The result<br />// pgsql.allow_persistent: 1<br />// pgsql.max_persistent: -1<br />// pgsql.max_links: -1<br />// <br />// MyClassA: Object 0: using db Resource id #2<br />// MyClassA: Object 1: using db Resource id #3<br />// MyClassA: Object 2: using db Resource id #4<br />// MyClassA: Object 3: using db Resource id #5<br />// MyClassA: Object 4: using db Resource id #6<br />// MyClassA: Object 5: using db Resource id #7<br />// MyClassA: Object 6: using db Resource id #8<br />// MyClassA: Object 7: using db Resource id #9<br />// MyClassA: Object 8: using db Resource id #10<br />// MyClassA: Object 9: using db Resource id #11<br />// <br />/* ------------------------------------------------------------- */<br />//<br />// Each MyClassA object will use its _own_ database Resource id<br />//<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18898">  <div class="votes">
    <div id="Vu18898">
    <a href="/manual/vote-note.php?id=18898&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18898">
    <a href="/manual/vote-note.php?id=18898&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18898" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#18898" class="name">
  <strong class="user"><em>garrett at bgb dot cc</em></strong></a><a class="genanchor" href="#18898"> &para;</a><div class="date" title="2002-02-08 04:39"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18898">
<div class="phpcode"><code><span class="html">If a transaction is in progress when page processing ends, is it aborted before the connection placed bak in the pool? Or is the connection added "as is"?<br /><br />It would seem that the correct thing to do is to always 'ABORT' before adding to the pool. <br /><br />As a note, this would be a good time to check and see if the connection is still open before readding it. Thus allowing closed connections to be cleaned up over time, instead of hanging around for ever as they do now.</span></code></div>
  </div>
 </div>
  <div class="note" id="20309">  <div class="votes">
    <div id="Vu20309">
    <a href="/manual/vote-note.php?id=20309&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20309">
    <a href="/manual/vote-note.php?id=20309&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20309" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#20309" class="name">
  <strong class="user"><em>raggaflo at libertysurf dot fr</em></strong></a><a class="genanchor" href="#20309"> &para;</a><div class="date" title="2002-03-29 08:03"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20309">
<div class="phpcode"><code><span class="html">Be careful when using Apache/PHP dynamic module/PostgreSQL :<br />in httpd.conf (Apache conf) default MaxClients is 150, whereas default PG's max_connections is 32 which is much fewer than 150. You have to set max_connections to at least MaxClients (and pg's shared_buffers to 2*max_connections at least) to avoid PG's errors with pg_pconnect like : "Sorry, too many clients already connected"</span></code></div>
  </div>
 </div>
  <div class="note" id="19758">  <div class="votes">
    <div id="Vu19758">
    <a href="/manual/vote-note.php?id=19758&amp;page=function.pg-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19758">
    <a href="/manual/vote-note.php?id=19758&amp;page=function.pg-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19758" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#19758" class="name">
  <strong class="user"><em>etsysx dot i dot hate dot spam at teleline dot es</em></strong></a><a class="genanchor" href="#19758"> &para;</a><div class="date" title="2002-03-10 01:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19758">
<div class="phpcode"><code><span class="html">To setup a high availability server with apache as a static module and postgreSQL, change httpd.conf and set MaxClients to less than max postgreSQL simultaneous connections (like 32 or 64).<br />This way pg_pconnect will allways return a valid handle under heavy traffic or under a request flow attack without wasting resources and without connection problems.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-pconnect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-pconnect.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
