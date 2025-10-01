<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Persistent Database Connections - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.persistent-connections.php">
 <link rel="shorturl" href="https://www.php.net/persistent-connections">
 <link rel="alternate" href="https://www.php.net/persistent-connections" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.connection-handling.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.persistent-connections.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.persistent-connections.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.persistent-connections.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.persistent-connections.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.persistent-connections.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.persistent-connections.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.persistent-connections.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.persistent-connections.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.persistent-connections.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.persistent-connections.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.persistent-connections.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Persistent Database Connections" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Persistent Database Connections - Manual" />
<meta name="twitter:description" content="Persistent Database Connections" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Persistent Database Connections - Manual" />
<meta itemprop="description" content="Persistent Database Connections" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Persistent Database Connections" />

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
        <a href="features.commandline.php">
          Command line usage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.connection-handling.php">
          &laquo; Connection handling        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      </ul>
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
            <option value='en/features.persistent-connections.php' selected="selected">English</option>
            <option value='de/features.persistent-connections.php'>German</option>
            <option value='es/features.persistent-connections.php'>Spanish</option>
            <option value='fr/features.persistent-connections.php'>French</option>
            <option value='it/features.persistent-connections.php'>Italian</option>
            <option value='ja/features.persistent-connections.php'>Japanese</option>
            <option value='pt_BR/features.persistent-connections.php'>Brazilian Portuguese</option>
            <option value='ru/features.persistent-connections.php'>Russian</option>
            <option value='tr/features.persistent-connections.php'>Turkish</option>
            <option value='uk/features.persistent-connections.php'>Ukrainian</option>
            <option value='zh/features.persistent-connections.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.persistent-connections" class="chapter">
  <h1 class="title">Persistent Database Connections</h1>


  <p class="simpara">
   Persistent connections are links that do not close when the
   execution of your script ends. When a persistent connection is
   requested, PHP checks if there&#039;s already an identical persistent
   connection (that remained open from earlier) - and if it exists, it
   uses it. If it does not exist, it creates the link. An &#039;identical&#039;
   connection is a connection that was opened to the same host, with
   the same username and the same password (where applicable).
  </p>
  <p class="simpara">
   People who aren&#039;t thoroughly familiar with the way web servers work
   and distribute the load may mistake persistent connects for what
   they&#039;re not. In particular, they do <em>not</em> give
   you an ability to open &#039;user sessions&#039; on the same link, they
   do <em>not</em> give you an ability to build up a
   transaction efficiently, and they don&#039;t do a whole lot of other
   things. In fact, to be extremely clear about the subject,
   persistent connections don&#039;t give you <em>any</em>
   functionality that wasn&#039;t possible with their non-persistent
   brothers.
  </p>
  <p class="simpara">
   Why?
  </p> 
  <p class="simpara">
   This has to do with the way web servers work. There are three ways
   in which your web server can utilize PHP to generate web pages.
  </p>
  <p class="simpara">
   The first method is to use PHP as a CGI &quot;wrapper&quot;. When run this
   way, an instance of the PHP interpreter is created and destroyed
   for every page request (for a PHP page) to your web server.
   Because it is destroyed after every request, any resources that it
   acquires (such as a link to an SQL database server) are closed when
   it is destroyed. In this case, you do not gain anything from trying
   to use persistent connections -- they simply don&#039;t persist.
  </p>
  <p class="simpara">
   The second, and most popular, method is to run PHP as a module in a
   multiprocess web server, which currently only includes Apache. A
   multiprocess server typically has one process (the parent) which
   coordinates a set of processes (its children) who actually do the
   work of serving up web pages. When a request comes in from a
   client, it is handed off to one of the children that is not already
   serving another client. This means that when the same client makes
   a second request to the server, it may be served by a different
   child process than the first time. When opening a persistent connection, 
   every following page requesting SQL services can reuse the same 
   established connection to the SQL server.
  </p>
  <p class="simpara">
   The last method is to use PHP as a plug-in for a multithreaded web
   server. Currently PHP has support for WSAPI, and NSAPI (on
   Windows), which all allow PHP to be used as a plug-in on multithreaded
   servers like Netscape FastTrack (iPlanet), Microsoft&#039;s Internet Information
   Server (IIS), and O&#039;Reilly&#039;s WebSite Pro. The behavior is essentially
   the same as for the multiprocess model described before.
  </p>
  <p class="simpara">
   If persistent connections don&#039;t have any added functionality, what
   are they good for?
  </p>
  <p class="simpara">
   The answer here is extremely simple -- efficiency. Persistent
   connections are good if the overhead to create a link to your SQL
   server is high. Whether or not this overhead is really high depends
   on many factors. Like, what kind of database it is, whether or not
   it sits on the same computer on which your web server sits, how
   loaded the machine the SQL server sits on is and so forth. The
   bottom line is that if that connection overhead is high, persistent
   connections help you considerably. They cause the child process to
   simply connect only once for its entire lifespan, instead of every
   time it processes a page that requires connecting to the SQL
   server. This means that for every child that opened a persistent
   connection will have its own open persistent connection to the
   server. For example, if you had 20 different child processes that
   ran a script that made a persistent connection to your SQL server,
   you&#039;d have 20 different connections to the SQL server, one from
   each child.
  </p>
  <p class="simpara">
   Note, however, that this can have some drawbacks if you are using a
   database with connection limits that are exceeded by persistent
   child connections. If your database has a limit of 16 simultaneous
   connections, and in the course of a busy server session, 17 child
   threads attempt to connect, one will not be able to. If there are
   bugs in your scripts which do not allow the connections to shut
   down (such as infinite loops), the database with only 16 connections
   may be rapidly swamped. Check your database documentation for
   information on handling abandoned or idle connections.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    There are a couple of additional caveats to keep in mind when
    using persistent connections. One is that when using table
    locking on a persistent connection, if the script for whatever
    reason cannot release the lock, then subsequent scripts using the
    same connection will block indefinitely and may require that you
    either restart the httpd server or the database server. Another is
    that when using transactions, a transaction block will also carry
    over to the next script which uses that connection if script execution
    ends before the transaction block does. In either case, you can
    use <span class="function"><a href="function.register-shutdown-function.php" class="function">register_shutdown_function()</a></span> to register a
    simple cleanup function to unlock your tables or roll back your
    transactions. Better yet, avoid the problem entirely by not using
    persistent connections in scripts which use table locks or
    transactions (you can still use them elsewhere).
   </p>
  </div>
  <p class="simpara">
   An important summary. Persistent connections were designed to have
   one-to-one mapping to regular connections. That means that you
   should <em>always</em> be able to replace persistent
   connections with non-persistent connections, and it won&#039;t change
   the way your script behaves. It <em>may</em> (and
   probably will) change the efficiency of the script, but not its
   behavior!
  </p>
  <p class="para">
   See also <span class="function"><a href="function.ibase-pconnect.php" class="function">ibase_pconnect()</a></span>, <span class="function"><a href="function.ociplogon.php" class="function">ociplogon()</a></span>,
   <span class="function"><a href="function.odbc-pconnect.php" class="function">odbc_pconnect()</a></span>, <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span>,
   <span class="function"><a href="function.pfsockopen.php" class="function">pfsockopen()</a></span>, and <span class="function"><a href="function.pg-pconnect.php" class="function">pg_pconnect()</a></span>.
  </p>
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/persistent-connections.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.persistent-connections%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.persistent-connections&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.persistent-connections.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95340">  <div class="votes">
    <div id="Vu95340">
    <a href="/manual/vote-note.php?id=95340&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95340">
    <a href="/manual/vote-note.php?id=95340&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95340" title="56% like this...">
    22
    </div>
  </div>
  <a href="#95340" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#95340"> &para;</a><div class="date" title="2009-12-28 05:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95340">
<div class="phpcode"><code><span class="html">There's a third case for PHP: run on a fastCGI interface. In this case, PHP processes are NOT destroyed after each request, and so persistent connections do persist. Set PHP_FCGI_CHILDREN &lt;&lt; mysql's max_connections and you'll be fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="114190">  <div class="votes">
    <div id="Vu114190">
    <a href="/manual/vote-note.php?id=114190&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114190">
    <a href="/manual/vote-note.php?id=114190&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114190" title="54% like this...">
    17
    </div>
  </div>
  <a href="#114190" class="name">
  <strong class="user"><em>php at alfadog dot net</em></strong></a><a class="genanchor" href="#114190"> &para;</a><div class="date" title="2014-01-22 04:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114190">
<div class="phpcode"><code><span class="html">One additional not regarding odbc_pconnect  and possibly other variations of pconnect:<br /> <br />If the connection encounters an error (bad SQL, incorrect request, etc), that error will return with  be present in odbc_errormsg for every subsequent action on that connection, even if subsequent actions don't cause another error.<br /><br />For example:<br /><br />A script connects with odbc_pconnect.<br />The connection is created on it's first use.<br />The script calls a query "Select * FROM Table1".<br />Table1 doesn't exist and odbc_errormsg contains that error.<br /><br />Later(days, perhaps), a different script is called using the same parameters to odbc_pconnect.<br />The connection already exists, to it is reused.<br />The script calls a query "Select * FROM Table0".<br />The query runs fine, but odbc_errormsg still returns the error about Table1 not existing.<br /><br />I'm not seeing a way to clear that error using odbc_ functions, so keep your eyes open for this gotcha or use odbc_connect instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="117523">  <div class="votes">
    <div id="Vu117523">
    <a href="/manual/vote-note.php?id=117523&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117523">
    <a href="/manual/vote-note.php?id=117523&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117523" title="55% like this...">
    14
    </div>
  </div>
  <a href="#117523" class="name">
  <strong class="user"><em>pacerier at gmail dot com</em></strong></a><a class="genanchor" href="#117523"> &para;</a><div class="date" title="2015-06-24 09:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117523">
<div class="phpcode"><code><span class="html">Did anyone else notice that the last paragraph contradicts everything above it?<br /><br />( cached page: <a href="https://archive.is/ZAOwy" rel="nofollow" target="_blank">https://archive.is/ZAOwy</a> )</span></code></div>
  </div>
 </div>
  <div class="note" id="76013">  <div class="votes">
    <div id="Vu76013">
    <a href="/manual/vote-note.php?id=76013&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76013">
    <a href="/manual/vote-note.php?id=76013&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76013" title="55% like this...">
    14
    </div>
  </div>
  <a href="#76013" class="name">
  <strong class="user"><em>christopher dot jones at oracle dot com</em></strong></a><a class="genanchor" href="#76013"> &para;</a><div class="date" title="2007-06-26 10:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76013">
<div class="phpcode"><code><span class="html">For the oci8 extension it is not true that " [...] when using transactions, a transaction block will also carry over to the next script which uses that connection if script execution ends before the transaction block does.".  The oci8 extension does a rollback at the end scripts using persistent connections, thus ending the transaction.  The rollback also releases locks. However any ALTER SESSION command (e.g. changing the date format) on a persistent connection will be retained over to the next script.</span></code></div>
  </div>
 </div>
  <div class="note" id="100009">  <div class="votes">
    <div id="Vu100009">
    <a href="/manual/vote-note.php?id=100009&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100009">
    <a href="/manual/vote-note.php?id=100009&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100009" title="56% like this...">
    13
    </div>
  </div>
  <a href="#100009" class="name">
  <strong class="user"><em>ambrish at php dot net</em></strong></a><a class="genanchor" href="#100009"> &para;</a><div class="date" title="2010-09-20 01:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100009">
<div class="phpcode"><code><span class="html">In IBM_DB2 extension v1.9.0 or later performs a transaction rollback on persistent connections at the end of a request, thus ending the transaction. This prevents the transaction block from carrying over to the next request which uses that connection if script execution ends before the transaction block does.</span></code></div>
  </div>
 </div>
  <div class="note" id="89465">  <div class="votes">
    <div id="Vu89465">
    <a href="/manual/vote-note.php?id=89465&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89465">
    <a href="/manual/vote-note.php?id=89465&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89465" title="55% like this...">
    12
    </div>
  </div>
  <a href="#89465" class="name">
  <strong class="user"><em>ynzhang from lakeheadu canada</em></strong></a><a class="genanchor" href="#89465"> &para;</a><div class="date" title="2009-03-09 10:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89465">
<div class="phpcode"><code><span class="html">It seems that using pg_pconnect() will not persist the temporary views/tables. So if you are trying to create temporary views/tables with the query results and then access them with the next script of the same session, you are out of luck. Those temporary view/tables are gone after each PHP script ended. One way to get around this problem is to create real view/table with session ID as part of the name and record the name&amp;creation time in a common table. Have a garbage collection script to drop the view/table who's session is expired.</span></code></div>
  </div>
 </div>
  <div class="note" id="73370">  <div class="votes">
    <div id="Vu73370">
    <a href="/manual/vote-note.php?id=73370&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73370">
    <a href="/manual/vote-note.php?id=73370&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73370" title="54% like this...">
    9
    </div>
  </div>
  <a href="#73370" class="name">
  <strong class="user"><em>andy at paradigm-reborn dot com</em></strong></a><a class="genanchor" href="#73370"> &para;</a><div class="date" title="2007-02-20 08:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73370">
<div class="phpcode"><code><span class="html">To those using MySQL and finding a lot of leftover sleeping processes, take a look at MySQL's wait_timeout directive. By default it is set to 8 hours, but almost any decent production server will have been lowered to the 60 second range. Even on my testing server, I was having problems with too many connections from leftover persistent connections.</span></code></div>
  </div>
 </div>
  <div class="note" id="24393">  <div class="votes">
    <div id="Vu24393">
    <a href="/manual/vote-note.php?id=24393&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24393">
    <a href="/manual/vote-note.php?id=24393&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24393" title="54% like this...">
    9
    </div>
  </div>
  <a href="#24393" class="name">
  <strong class="user"><em>jean_christian at myrealbox dot com</em></strong></a><a class="genanchor" href="#24393"> &para;</a><div class="date" title="2002-08-15 03:13"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24393">
<div class="phpcode"><code><span class="html">If anyone ever wonders why the number of idle db process (open connections) seems to grow even though you are using persistent connections, here's why:<br /><br />"You are probably using a multi-process web server such as Apache. Since<br />database connections cannot be shared among different processes a new<br />one is created if the request happen to come to a different web server<br />child process."</span></code></div>
  </div>
 </div>
  <div class="note" id="60614">  <div class="votes">
    <div id="Vu60614">
    <a href="/manual/vote-note.php?id=60614&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60614">
    <a href="/manual/vote-note.php?id=60614&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60614" title="51% like this...">
    2
    </div>
  </div>
  <a href="#60614" class="name">
  <strong class="user"><em>fabio</em></strong></a><a class="genanchor" href="#60614"> &para;</a><div class="date" title="2006-01-12 03:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60614">
<div class="phpcode"><code><span class="html">You can in fact provide a port for the connection, take a look at <a href="http://de2.php.net/manual/en/function.mysql-pconnect.php#AEN101879" rel="nofollow" target="_blank">http://de2.php.net/manual/en/function.mysql-pconnect.php#AEN101879</a><br /><br />Just use "hostname:port" for the server address.</span></code></div>
  </div>
 </div>
  <div class="note" id="62646">  <div class="votes">
    <div id="Vu62646">
    <a href="/manual/vote-note.php?id=62646&amp;page=features.persistent-connections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62646">
    <a href="/manual/vote-note.php?id=62646&amp;page=features.persistent-connections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62646" title="50% like this...">
    1
    </div>
  </div>
  <a href="#62646" class="name">
  <strong class="user"><em>RQuadling at GMail dot com</em></strong></a><a class="genanchor" href="#62646"> &para;</a><div class="date" title="2006-03-06 03:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62646">
<div class="phpcode"><code><span class="html">If you have multiple databases on the same server AND you are using persistent connections, you MUST prefix all the table names with the specific database name.<br /><br />Changing the database using the xxx_select_db functions alters the database for the connection for all users who are sharing that connection (assuming PHP is running shared and not CGI/CLI).<br /><br />If you have 2 databases (live and archive) and your script is talking to both, you cannot use 2 persistent connections and change the database for each one.<br /><br />Internally, persistent connections are used even if you do not specify that you want to use persistent connections. This is why new_link was added to mysql_connect/mssql_connect (PHPV4.2.0+).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.persistent-connections&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.persistent-connections.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.php">Features</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.http-auth.php" title="HTTP authentication with PHP">HTTP authentication with PHP</a>
                        </li>
                                                <li class="">
                            <a href="features.cookies.php" title="Cookies">Cookies</a>
                        </li>
                                                <li class="">
                            <a href="features.sessions.php" title="Sessions">Sessions</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.php" title="Handling file uploads">Handling file uploads</a>
                        </li>
                                                <li class="">
                            <a href="features.remote-files.php" title="Using remote files">Using remote files</a>
                        </li>
                                                <li class="">
                            <a href="features.connection-handling.php" title="Connection handling">Connection handling</a>
                        </li>
                                                <li class="current">
                            <a href="features.persistent-connections.php" title="Persistent Database Connections">Persistent Database Connections</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.php" title="Command line usage">Command line usage</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.php" title="Garbage Collection">Garbage Collection</a>
                        </li>
                                                <li class="">
                            <a href="features.dtrace.php" title="DTrace Dynamic Tracing">DTrace Dynamic Tracing</a>
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
