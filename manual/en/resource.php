<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of Resource Types - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/resource.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/resource.php">
 <link rel="alternate" href="https://www.php.net/manual/en/resource.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/appendices.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.other-reserved-words.php">
 <link rel="next" href="https://www.php.net/manual/en/filters.php">

 <link rel="alternate" href="https://www.php.net/manual/en/resource.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/resource.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/resource.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/resource.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/resource.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/resource.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/resource.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/resource.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/resource.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/resource.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/resource.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of Resource Types" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of Resource Types - Manual" />
<meta name="twitter:description" content="List of Resource Types" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of Resource Types - Manual" />
<meta itemprop="description" content="List of Resource Types" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of Resource Types" />

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
        <a href="filters.php">
          List of Available Filters &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.other-reserved-words.php">
          &laquo; List of other reserved words        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      </ul>
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
            <option value='en/resource.php' selected="selected">English</option>
            <option value='de/resource.php'>German</option>
            <option value='es/resource.php'>Spanish</option>
            <option value='fr/resource.php'>French</option>
            <option value='it/resource.php'>Italian</option>
            <option value='ja/resource.php'>Japanese</option>
            <option value='pt_BR/resource.php'>Brazilian Portuguese</option>
            <option value='ru/resource.php'>Russian</option>
            <option value='tr/resource.php'>Turkish</option>
            <option value='uk/resource.php'>Ukrainian</option>
            <option value='zh/resource.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="resource" class="appendix">
 <h1 class="title">List of Resource Types</h1>

 <p class="para">
  The following is a list of functions which create, use or destroy
  PHP resources.  The function <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> can be
  used to determine if a variable is a resource and
  <span class="function"><a href="function.get-resource-type.php" class="function">get_resource_type()</a></span> will return the type of
  resource it is.
  <table class="doctable table">
   <caption><strong>Resource Types</strong></caption>
   
     <col width="1*" />
     <col width="1*" />
     <col width="2*" />
     <col width="1*" />
     <col width="1*" />
     <thead>
      <tr>
       <th>Resource Type Name</th>
       <th>Created By</th>
       <th>Used By</th>
       <th>Destroyed By</th>
       <th>Definition</th>
      </tr>

     </thead>

     <tbody class="tbody">
   <tr>
    <td>AddressInfo</td>
    <td>
     <span class="function"><a href="function.socket-addrinfo-lookup.php" class="function">socket_addrinfo_lookup()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.socket-addrinfo-bind.php" class="function">socket_addrinfo_bind()</a></span>,
     <span class="function"><a href="function.socket-addrinfo-connect.php" class="function">socket_addrinfo_connect()</a></span>,
     <span class="function"><a href="function.socket-addrinfo-explain.php" class="function">socket_addrinfo_explain()</a></span>,
    </td>
    <td>
     None
    </td>
    <td>AddressInfo (sockets extension)</td>
   </tr>

   <tr>
   <td>bzip2</td>
    <td>
     <span class="function"><a href="function.bzopen.php" class="function">bzopen()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.bzerrno.php" class="function">bzerrno()</a></span>,
     <span class="function"><a href="function.bzerror.php" class="function">bzerror()</a></span>,
     <span class="function"><a href="function.bzerrstr.php" class="function">bzerrstr()</a></span>,
     <span class="function"><a href="function.bzflush.php" class="function">bzflush()</a></span>,
     <span class="function"><a href="function.bzread.php" class="function">bzread()</a></span>,
     <span class="function"><a href="function.bzwrite.php" class="function">bzwrite()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.bzclose.php" class="function">bzclose()</a></span>
    </td>
    <td>Bzip2 file</td>
   </tr>

   <tr>
    <td>cubrid connection</td>
    <td>
     <span class="function"><a href="function.cubrid-connect.php" class="function">cubrid_connect()</a></span>
     <span class="function"><a href="function.cubrid-connect-with-url.php" class="function">cubrid_connect_with_url()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.cubrid-col-get.php" class="function">cubrid_col_get()</a></span>
     <span class="function"><a href="function.cubrid-col-size.php" class="function">cubrid_col_size()</a></span>
     <span class="function"><a href="function.cubrid-commit.php" class="function">cubrid_commit()</a></span>
     <span class="function"><a href="function.cubrid-drop.php" class="function">cubrid_drop()</a></span>
     <span class="function"><a href="function.cubrid-execute.php" class="function">cubrid_execute()</a></span>
     <span class="function"><a href="function.cubrid-get-autocommit.php" class="function">cubrid_get_autocommit()</a></span>
     <span class="function"><a href="function.cubrid-get-charset.php" class="function">cubrid_get_charset()</a></span>
     <span class="function"><a href="function.cubrid-get-class-name.php" class="function">cubrid_get_class_name()</a></span>
     <span class="function"><a href="function.cubrid-get-db-parameter.php" class="function">cubrid_get_db_parameter()</a></span>
     <span class="function"><a href="function.cubrid-get-server-info.php" class="function">cubrid_get_server_info()</a></span>
     <span class="function"><a href="function.cubrid-get.php" class="function">cubrid_get()</a></span>
     <span class="function"><a href="function.cubrid-insert-id.php" class="function">cubrid_insert_id()</a></span>
     <span class="function"><a href="function.cubrid-is-instance.php" class="function">cubrid_is_instance()</a></span>
     <span class="function"><a href="function.cubrid-lob-export.php" class="function">cubrid_lob_export()</a></span>
     <span class="function"><a href="function.cubrid-lob-get.php" class="function">cubrid_lob_get()</a></span>
     <span class="function"><a href="function.cubrid-lob-send.php" class="function">cubrid_lob_send()</a></span>
     <span class="function"><a href="function.cubrid-lock-read.php" class="function">cubrid_lock_read()</a></span>
     <span class="function"><a href="function.cubrid-lock-write.php" class="function">cubrid_lock_write()</a></span>
     <span class="function"><a href="function.cubrid-prepare.php" class="function">cubrid_prepare()</a></span>
     <span class="function"><a href="function.cubrid-put.php" class="function">cubrid_put()</a></span>
     <span class="function"><a href="function.cubrid-rollback.php" class="function">cubrid_rollback()</a></span>
     <span class="function"><a href="function.cubrid-schema.php" class="function">cubrid_schema()</a></span>
     <span class="function"><a href="function.cubrid-seq-drop.php" class="function">cubrid_seq_drop()</a></span>
     <span class="function"><a href="function.cubrid-seq-insert.php" class="function">cubrid_seq_insert()</a></span>
     <span class="function"><a href="function.cubrid-seq-put.php" class="function">cubrid_seq_put()</a></span>
     <span class="function"><a href="function.cubrid-set-add.php" class="function">cubrid_set_add()</a></span>
     <span class="function"><a href="function.cubrid-set-autocommit.php" class="function">cubrid_set_autocommit()</a></span>
     <span class="function"><a href="function.cubrid-set-db-parameter.php" class="function">cubrid_set_db_parameter()</a></span>
     <span class="function"><a href="function.cubrid-set-drop.php" class="function">cubrid_set_drop()</a></span>
     <span class="function"><a href="function.cubrid-affected-rows.php" class="function">cubrid_affected_rows()</a></span>
     <span class="function"><a href="function.cubrid-client-encoding.php" class="function">cubrid_client_encoding()</a></span>
     <span class="function"><a href="function.cubrid-errno.php" class="function">cubrid_errno()</a></span>
     <span class="function"><a href="function.cubrid-error.php" class="function">cubrid_error()</a></span>
     <span class="function"><a href="function.cubrid-list-dbs.php" class="function">cubrid_list_dbs()</a></span>
     <span class="function"><a href="function.cubrid-ping.php" class="function">cubrid_ping()</a></span>
     <span class="function"><a href="function.cubrid-query.php" class="function">cubrid_query()</a></span>
     <span class="function"><a href="function.cubrid-real-escape-string.php" class="function">cubrid_real_escape_string()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.cubrid-close.php" class="function">cubrid_close()</a></span>
     <span class="function"><a href="function.cubrid-disconnect.php" class="function">cubrid_disconnect()</a></span>
    </td>
    <td>Connection to CUBRID database</td>
   </tr>

   <tr>
    <td>persistent cubrid connection</td>
    <td>
     <span class="function"><a href="function.cubrid-pconnect.php" class="function">cubrid_pconnect()</a></span>
     <span class="function"><a href="function.cubrid-pconnect-with-url.php" class="function">cubrid_pconnect_with_url()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.cubrid-col-get.php" class="function">cubrid_col_get()</a></span>
     <span class="function"><a href="function.cubrid-col-size.php" class="function">cubrid_col_size()</a></span>
     <span class="function"><a href="function.cubrid-commit.php" class="function">cubrid_commit()</a></span>
     <span class="function"><a href="function.cubrid-drop.php" class="function">cubrid_drop()</a></span>
     <span class="function"><a href="function.cubrid-execute.php" class="function">cubrid_execute()</a></span>
     <span class="function"><a href="function.cubrid-get-autocommit.php" class="function">cubrid_get_autocommit()</a></span>
     <span class="function"><a href="function.cubrid-get-charset.php" class="function">cubrid_get_charset()</a></span>
     <span class="function"><a href="function.cubrid-get-class-name.php" class="function">cubrid_get_class_name()</a></span>
     <span class="function"><a href="function.cubrid-get-db-parameter.php" class="function">cubrid_get_db_parameter()</a></span>
     <span class="function"><a href="function.cubrid-get-server-info.php" class="function">cubrid_get_server_info()</a></span>
     <span class="function"><a href="function.cubrid-get.php" class="function">cubrid_get()</a></span>
     <span class="function"><a href="function.cubrid-insert-id.php" class="function">cubrid_insert_id()</a></span>
     <span class="function"><a href="function.cubrid-is-instance.php" class="function">cubrid_is_instance()</a></span>
     <span class="function"><a href="function.cubrid-lob-export.php" class="function">cubrid_lob_export()</a></span>
     <span class="function"><a href="function.cubrid-lob-get.php" class="function">cubrid_lob_get()</a></span>
     <span class="function"><a href="function.cubrid-lob-send.php" class="function">cubrid_lob_send()</a></span>
     <span class="function"><a href="function.cubrid-lock-read.php" class="function">cubrid_lock_read()</a></span>
     <span class="function"><a href="function.cubrid-lock-write.php" class="function">cubrid_lock_write()</a></span>
     <span class="function"><a href="function.cubrid-prepare.php" class="function">cubrid_prepare()</a></span>
     <span class="function"><a href="function.cubrid-put.php" class="function">cubrid_put()</a></span>
     <span class="function"><a href="function.cubrid-rollback.php" class="function">cubrid_rollback()</a></span>
     <span class="function"><a href="function.cubrid-schema.php" class="function">cubrid_schema()</a></span>
     <span class="function"><a href="function.cubrid-seq-drop.php" class="function">cubrid_seq_drop()</a></span>
     <span class="function"><a href="function.cubrid-seq-insert.php" class="function">cubrid_seq_insert()</a></span>
     <span class="function"><a href="function.cubrid-seq-put.php" class="function">cubrid_seq_put()</a></span>
     <span class="function"><a href="function.cubrid-set-add.php" class="function">cubrid_set_add()</a></span>
     <span class="function"><a href="function.cubrid-set-autocommit.php" class="function">cubrid_set_autocommit()</a></span>
     <span class="function"><a href="function.cubrid-set-db-parameter.php" class="function">cubrid_set_db_parameter()</a></span>
     <span class="function"><a href="function.cubrid-set-drop.php" class="function">cubrid_set_drop()</a></span>
     <span class="function"><a href="function.cubrid-affected-rows.php" class="function">cubrid_affected_rows()</a></span>
     <span class="function"><a href="function.cubrid-client-encoding.php" class="function">cubrid_client_encoding()</a></span>
     <span class="function"><a href="function.cubrid-errno.php" class="function">cubrid_errno()</a></span>
     <span class="function"><a href="function.cubrid-error.php" class="function">cubrid_error()</a></span>
     <span class="function"><a href="function.cubrid-list-dbs.php" class="function">cubrid_list_dbs()</a></span>
     <span class="function"><a href="function.cubrid-ping.php" class="function">cubrid_ping()</a></span>
     <span class="function"><a href="function.cubrid-query.php" class="function">cubrid_query()</a></span>
     <span class="function"><a href="function.cubrid-real-escape-string.php" class="function">cubrid_real_escape_string()</a></span>
     <span class="function"><a href="function.cubrid-lob2-new.php" class="function">cubrid_lob2_new()</a></span>
    </td>
    <td> </td>
    <td>Persistent connection to CUBRID database</td>
    </tr>

    <tr>
     <td>cubrid request</td>
     <td>
      <span class="function"><a href="function.cubrid-prepare.php" class="function">cubrid_prepare()</a></span>
      <span class="function"><a href="function.cubrid-execute.php" class="function">cubrid_execute()</a></span>
      <span class="function"><a href="function.cubrid-query.php" class="function">cubrid_query()</a></span>
      <span class="function"><a href="function.cubrid-unbuffered-query.php" class="function">cubrid_unbuffered_query()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-bind.php" class="function">cubrid_bind()</a></span>
      <span class="function"><a href="function.cubrid-column-names.php" class="function">cubrid_column_names()</a></span>
      <span class="function"><a href="function.cubrid-column-types.php" class="function">cubrid_column_types()</a></span>
      <span class="function"><a href="function.cubrid-current-oid.php" class="function">cubrid_current_oid()</a></span>
      <span class="function"><a href="function.cubrid-execute.php" class="function">cubrid_execute()</a></span>
      <span class="function"><a href="function.cubrid-free-result.php" class="function">cubrid_free_result()</a></span>
      <span class="function"><a href="function.cubrid-get-query-timeout.php" class="function">cubrid_get_query_timeout()</a></span>
      <span class="function"><a href="function.cubrid-move-cursor.php" class="function">cubrid_move_cursor()</a></span>
      <span class="function"><a href="function.cubrid-next-result.php" class="function">cubrid_next_result()</a></span>
      <span class="function"><a href="function.cubrid-num-cols.php" class="function">cubrid_num_cols()</a></span>
      <span class="function"><a href="function.cubrid-num-rows.php" class="function">cubrid_num_rows()</a></span>
      <span class="function"><a href="function.cubrid-set-query-timeout.php" class="function">cubrid_set_query_timeout()</a></span>
      <span class="function"><a href="function.cubrid-data-seek.php" class="function">cubrid_data_seek()</a></span>
      <span class="function"><a href="function.cubrid-fetch-array.php" class="function">cubrid_fetch_array()</a></span>
      <span class="function"><a href="function.cubrid-fetch-assoc.php" class="function">cubrid_fetch_assoc()</a></span>
      <span class="function"><a href="function.cubrid-fetch-field.php" class="function">cubrid_fetch_field()</a></span>
      <span class="function"><a href="function.cubrid-fetch-lengths.php" class="function">cubrid_fetch_lengths()</a></span>
      <span class="function"><a href="function.cubrid-fetch-object.php" class="function">cubrid_fetch_object()</a></span>
      <span class="function"><a href="function.cubrid-fetch-row.php" class="function">cubrid_fetch_row()</a></span>
      <span class="function"><a href="function.cubrid-field-flags.php" class="function">cubrid_field_flags()</a></span>
      <span class="function"><a href="function.cubrid-field-len.php" class="function">cubrid_field_len()</a></span>
      <span class="function"><a href="function.cubrid-field-name.php" class="function">cubrid_field_name()</a></span>
      <span class="function"><a href="function.cubrid-field-seek.php" class="function">cubrid_field_seek()</a></span>
      <span class="function"><a href="function.cubrid-field-table.php" class="function">cubrid_field_table()</a></span>
      <span class="function"><a href="function.cubrid-field-type.php" class="function">cubrid_field_type()</a></span>
      <span class="function"><a href="function.cubrid-num-fields.php" class="function">cubrid_num_fields()</a></span>
      <span class="function"><a href="function.cubrid-result.php" class="function">cubrid_result()</a></span>
      <span class="function"><a href="function.cubrid-lob2-bind.php" class="function">cubrid_lob2_bind()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-close-prepare.php" class="function">cubrid_close_prepare()</a></span>
      <span class="function"><a href="function.cubrid-close-request.php" class="function">cubrid_close_request()</a></span>
     </td>
     <td>CUBRID request</td>
    </tr>

    <tr>
     <td>cubrid lob</td>
     <td>
      <span class="function"><a href="function.cubrid-lob-get.php" class="function">cubrid_lob_get()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-lob-export.php" class="function">cubrid_lob_export()</a></span>
      <span class="function"><a href="function.cubrid-lob-send.php" class="function">cubrid_lob_send()</a></span>
      <span class="function"><a href="function.cubrid-lob-size.php" class="function">cubrid_lob_size()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-lob-close.php" class="function">cubrid_lob_close()</a></span>
     </td>
     <td>
      None
     </td>
    </tr>

    <tr>
     <td>cubrid lob2</td>
     <td>
      <span class="function"><a href="function.cubrid-lob2-new.php" class="function">cubrid_lob2_new()</a></span>
      <span class="function"><a href="function.cubrid-fetch.php" class="function">cubrid_fetch()</a></span>
      <span class="function"><a href="function.cubrid-fetch-row.php" class="function">cubrid_fetch_row()</a></span>
      <span class="function"><a href="function.cubrid-fetch-array.php" class="function">cubrid_fetch_array()</a></span>
      <span class="function"><a href="function.cubrid-fetch-assoc.php" class="function">cubrid_fetch_assoc()</a></span>
      <span class="function"><a href="function.cubrid-fetch-object.php" class="function">cubrid_fetch_object()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-lob2-export.php" class="function">cubrid_lob2_export()</a></span>
      <span class="function"><a href="function.cubrid-lob2-import.php" class="function">cubrid_lob2_import()</a></span>
      <span class="function"><a href="function.cubrid-lob2-read.php" class="function">cubrid_lob2_read()</a></span>
      <span class="function"><a href="function.cubrid-lob2-write.php" class="function">cubrid_lob2_write()</a></span>
      <span class="function"><a href="function.cubrid-lob2-tell.php" class="function">cubrid_lob2_tell()</a></span>
      <span class="function"><a href="function.cubrid-lob2-tell64.php" class="function">cubrid_lob2_tell64()</a></span>
      <span class="function"><a href="function.cubrid-lob2-seek.php" class="function">cubrid_lob2_seek()</a></span>
      <span class="function"><a href="function.cubrid-lob2-seek64.php" class="function">cubrid_lob2_seek64()</a></span>
      <span class="function"><a href="function.cubrid-lob2-size.php" class="function">cubrid_lob2_size()</a></span>
      <span class="function"><a href="function.cubrid-lob2-size64.php" class="function">cubrid_lob2_size64()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.cubrid-lob2-close.php" class="function">cubrid_lob2_close()</a></span>
     </td>
     <td>
      None
     </td>
    </tr>

   <tr>
    <td>curl</td>
    <td>
     <span class="function"><a href="function.curl-copy-handle.php" class="function">curl_copy_handle()</a></span>,
     <span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-copy-handle.php" class="function">curl_copy_handle()</a></span>,
     <span class="function"><a href="function.curl-errno.php" class="function">curl_errno()</a></span>,
     <span class="function"><a href="function.curl-error.php" class="function">curl_error()</a></span>,
     <span class="function"><a href="function.curl-exec.php" class="function">curl_exec()</a></span>,
     <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span>,
     <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-close.php" class="function">curl_close()</a></span>
    </td>
    <td>cURL handle</td>
   </tr>

   <tr>
    <td>curl_multi</td>
    <td>
     <span class="function"><a href="function.curl-multi-init.php" class="function">curl_multi_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-multi-errno.php" class="function">curl_multi_errno()</a></span>,
     <span class="function"><a href="function.curl-multi-exec.php" class="function">curl_multi_exec()</a></span>,
     <span class="function"><a href="function.curl-multi-info-read.php" class="function">curl_multi_info_read()</a></span>,
     <span class="function"><a href="function.curl-multi-remove-handle.php" class="function">curl_multi_remove_handle()</a></span>,
     <span class="function"><a href="function.curl-multi-select.php" class="function">curl_multi_select()</a></span>,
     <span class="function"><a href="function.curl-multi-setopt.php" class="function">curl_multi_setopt()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-multi-close.php" class="function">curl_multi_close()</a></span>
    </td>
    <td>cURL multi handle</td>
   </tr>

   <tr>
    <td>curl_share</td>
    <td>
     <span class="function"><a href="function.curl-share-init.php" class="function">curl_share_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-share-errno.php" class="function">curl_share_errno()</a></span>,
     <span class="function"><a href="function.curl-share-setopt.php" class="function">curl_share_setopt()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.curl-share-close.php" class="function">curl_share_close()</a></span>
    </td>
    <td>cURL share handle</td>
   </tr>

   <tr>
    <td>dba</td>
    <td>
     <span class="function"><a href="function.dba-open.php" class="function">dba_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.dba-delete.php" class="function">dba_delete()</a></span>,
     <span class="function"><a href="function.dba-exists.php" class="function">dba_exists()</a></span>,
     <span class="function"><a href="function.dba-fetch.php" class="function">dba_fetch()</a></span>,
     <span class="function"><a href="function.dba-firstkey.php" class="function">dba_firstkey()</a></span>,
     <span class="function"><a href="function.dba-insert.php" class="function">dba_insert()</a></span>,
     <span class="function"><a href="function.dba-nextkey.php" class="function">dba_nextkey()</a></span>,
     <span class="function"><a href="function.dba-optimize.php" class="function">dba_optimize()</a></span>,
     <span class="function"><a href="function.dba-replace.php" class="function">dba_replace()</a></span>,
     <span class="function"><a href="function.dba-sync.php" class="function">dba_sync()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.dba-close.php" class="function">dba_close()</a></span>
    </td>
    <td>Link to DBA database</td>
   </tr>

   <tr>
    <td>dba persistent</td>
    <td>
     <span class="function"><a href="function.dba-popen.php" class="function">dba_popen()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.dba-delete.php" class="function">dba_delete()</a></span>,
     <span class="function"><a href="function.dba-exists.php" class="function">dba_exists()</a></span>,
     <span class="function"><a href="function.dba-fetch.php" class="function">dba_fetch()</a></span>,
     <span class="function"><a href="function.dba-firstkey.php" class="function">dba_firstkey()</a></span>,
     <span class="function"><a href="function.dba-insert.php" class="function">dba_insert()</a></span>,
     <span class="function"><a href="function.dba-nextkey.php" class="function">dba_nextkey()</a></span>,
     <span class="function"><a href="function.dba-optimize.php" class="function">dba_optimize()</a></span>,
     <span class="function"><a href="function.dba-replace.php" class="function">dba_replace()</a></span>,
     <span class="function"><a href="function.dba-sync.php" class="function">dba_sync()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Persistent link to DBA database</td>
   </tr>

   <tr>
    <td>dbase</td>
    <td>
     <span class="function"><a href="function.dbase-open.php" class="function">dbase_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.dbase-pack.php" class="function">dbase_pack()</a></span>,
     <span class="function"><a href="function.dbase-add-record.php" class="function">dbase_add_record()</a></span>,
     <span class="function"><a href="function.dbase-replace-record.php" class="function">dbase_replace_record()</a></span>,
     <span class="function"><a href="function.dbase-delete-record.php" class="function">dbase_delete_record()</a></span>,
     <span class="function"><a href="function.dbase-get-record.php" class="function">dbase_get_record()</a></span>,
     <span class="function"><a href="function.dbase-get-record-with-names.php" class="function">dbase_get_record_with_names()</a></span>,
     <span class="function"><a href="function.dbase-numfields.php" class="function">dbase_numfields()</a></span>,
     <span class="function"><a href="function.dbase-numrecords.php" class="function">dbase_numrecords()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.dbase-close.php" class="function">dbase_close()</a></span>
    </td>
    <td>Link to Dbase database</td>
   </tr>

   <tr>
    <td>enchant_broker</td>
    <td>
     <span class="function"><a href="function.enchant-broker-init.php" class="function">enchant_broker_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.enchant-broker-describe.php" class="function">enchant_broker_describe()</a></span>,
     <span class="function"><a href="function.enchant-broker-dict-exists.php" class="function">enchant_broker_dict_exists()</a></span>,
     <span class="function"><a href="function.enchant-broker-get-dict-path.php" class="function">enchant_broker_get_dict_path()</a></span>,
     <span class="function"><a href="function.enchant-broker-get-error.php" class="function">enchant_broker_get_error()</a></span>,
     <span class="function"><a href="function.enchant-broker-list-dicts.php" class="function">enchant_broker_list_dicts()</a></span>,
     <span class="function"><a href="function.enchant-broker-set-dict-path.php" class="function">enchant_broker_set_dict_path()</a></span>,
     <span class="function"><a href="function.enchant-broker-set-ordering.php" class="function">enchant_broker_set_ordering()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.enchant-broker-free.php" class="function">enchant_broker_free()</a></span>
    </td>
    <td>Enchant broker (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>enchant_dict</td>
    <td>
     <span class="function"><a href="function.enchant-broker-request-dict.php" class="function">enchant_broker_request_dict()</a></span>
     <span class="function"><a href="function.enchant-broker-request-pwl-dict.php" class="function">enchant_broker_request_pwl_dict()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.enchant-dict-add-to-personal.php" class="function">enchant_dict_add_to_personal()</a></span>,
     <span class="function"><a href="function.enchant-dict-add-to-session.php" class="function">enchant_dict_add_to_session()</a></span>,
     <span class="function"><a href="function.enchant-dict-check.php" class="function">enchant_dict_check()</a></span>,
     <span class="function"><a href="function.enchant-dict-describe.php" class="function">enchant_dict_describe()</a></span>,
     <span class="function"><a href="function.enchant-dict-get-error.php" class="function">enchant_dict_get_error()</a></span>,
     <span class="function"><a href="function.enchant-dict-is-in-session.php" class="function">enchant_dict_is_in_session()</a></span>,
     <span class="function"><a href="function.enchant-dict-store-replacement.php" class="function">enchant_dict_store_replacement()</a></span>,
     <span class="function"><a href="function.enchant-dict-suggest.php" class="function">enchant_dict_suggest()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.enchant-broker-free-dict.php" class="function">enchant_broker_free_dict()</a></span>
    </td>
    <td>Enchant dictionary (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>fdf</td>
    <td>
     <span class="function"><a href="function.fdf-open.php" class="function">fdf_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.fdf-create.php" class="function">fdf_create()</a></span>,
     <span class="function"><a href="function.fdf-save.php" class="function">fdf_save()</a></span>,
     <span class="function"><a href="function.fdf-get-value.php" class="function">fdf_get_value()</a></span>,
     <span class="function"><a href="function.fdf-set-value.php" class="function">fdf_set_value()</a></span>,
     <span class="function"><a href="function.fdf-next-field-name.php" class="function">fdf_next_field_name()</a></span>,
     <span class="function"><a href="function.fdf-set-ap.php" class="function">fdf_set_ap()</a></span>,
     <span class="function"><a href="function.fdf-set-status.php" class="function">fdf_set_status()</a></span>,
     <span class="function"><a href="function.fdf-get-status.php" class="function">fdf_get_status()</a></span>,
     <span class="function"><a href="function.fdf-set-file.php" class="function">fdf_set_file()</a></span>,
     <span class="function"><a href="function.fdf-get-file.php" class="function">fdf_get_file()</a></span>,
     <span class="function"><a href="function.fdf-set-flags.php" class="function">fdf_set_flags()</a></span>,
     <span class="function"><a href="function.fdf-set-opt.php" class="function">fdf_set_opt()</a></span>,
     <span class="function"><a href="function.fdf-set-submit-form-action.php" class="function">fdf_set_submit_form_action()</a></span>,
     <span class="function"><a href="function.fdf-set-javascript-action.php" class="function">fdf_set_javascript_action()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.fdf-close.php" class="function">fdf_close()</a></span>
    </td>
    <td>FDF File</td>
   </tr>

   <tr>
    <td>ftp</td>
    <td>
     <span class="function"><a href="function.ftp-connect.php" class="function">ftp_connect()</a></span>,
     <span class="function"><a href="function.ftp-ssl-connect.php" class="function">ftp_ssl_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ftp-login.php" class="function">ftp_login()</a></span>,
     <span class="function"><a href="function.ftp-pwd.php" class="function">ftp_pwd()</a></span>,
     <span class="function"><a href="function.ftp-cdup.php" class="function">ftp_cdup()</a></span>,
     <span class="function"><a href="function.ftp-chdir.php" class="function">ftp_chdir()</a></span>,
     <span class="function"><a href="function.ftp-mkdir.php" class="function">ftp_mkdir()</a></span>,
     <span class="function"><a href="function.ftp-rmdir.php" class="function">ftp_rmdir()</a></span>,
     <span class="function"><a href="function.ftp-nlist.php" class="function">ftp_nlist()</a></span>,
     <span class="function"><a href="function.ftp-rawlist.php" class="function">ftp_rawlist()</a></span>,
     <span class="function"><a href="function.ftp-systype.php" class="function">ftp_systype()</a></span>,
     <span class="function"><a href="function.ftp-pasv.php" class="function">ftp_pasv()</a></span>,
     <span class="function"><a href="function.ftp-get.php" class="function">ftp_get()</a></span>,
     <span class="function"><a href="function.ftp-fget.php" class="function">ftp_fget()</a></span>,
     <span class="function"><a href="function.ftp-put.php" class="function">ftp_put()</a></span>,
     <span class="function"><a href="function.ftp-fput.php" class="function">ftp_fput()</a></span>,
     <span class="function"><a href="function.ftp-size.php" class="function">ftp_size()</a></span>,
     <span class="function"><a href="function.ftp-mdtm.php" class="function">ftp_mdtm()</a></span>,
     <span class="function"><a href="function.ftp-rename.php" class="function">ftp_rename()</a></span>,
     <span class="function"><a href="function.ftp-delete.php" class="function">ftp_delete()</a></span>,
     <span class="function"><a href="function.ftp-site.php" class="function">ftp_site()</a></span>,
     <span class="function"><a href="function.ftp-alloc.php" class="function">ftp_alloc()</a></span>,
     <span class="function"><a href="function.ftp-chmod.php" class="function">ftp_chmod()</a></span>,
     <span class="function"><a href="function.ftp-exec.php" class="function">ftp_exec()</a></span>,
     <span class="function"><a href="function.ftp-get-option.php" class="function">ftp_get_option()</a></span>,
     <span class="function"><a href="function.ftp-nb-continue.php" class="function">ftp_nb_continue()</a></span>,
     <span class="function"><a href="function.ftp-nb-fget.php" class="function">ftp_nb_fget()</a></span>,
     <span class="function"><a href="function.ftp-nb-fput.php" class="function">ftp_nb_fput()</a></span>,
     <span class="function"><a href="function.ftp-nb-get.php" class="function">ftp_nb_get()</a></span>,
     <span class="function"><a href="function.ftp-nb-put.php" class="function">ftp_nb_put()</a></span>,
     <span class="function"><a href="function.ftp-raw.php" class="function">ftp_raw()</a></span>,
     <span class="function"><a href="function.ftp-set-option.php" class="function">ftp_set_option()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ftp-close.php" class="function">ftp_close()</a></span>
    </td>
    <td>FTP connection (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>gd</td>
    <td>
     <span class="function"><a href="function.imagecreate.php" class="function">imagecreate()</a></span>,
     <span class="function"><a href="function.imagecreatefromgd.php" class="function">imagecreatefromgd()</a></span>,
     <span class="function"><a href="function.imagecreatefromgd2.php" class="function">imagecreatefromgd2()</a></span>,
     <span class="function"><a href="function.imagecreatefromgd2part.php" class="function">imagecreatefromgd2part()</a></span>,
     <span class="function"><a href="function.imagecreatefromgif.php" class="function">imagecreatefromgif()</a></span>,
     <span class="function"><a href="function.imagecreatefromjpeg.php" class="function">imagecreatefromjpeg()</a></span>,
     <span class="function"><a href="function.imagecreatefrompng.php" class="function">imagecreatefrompng()</a></span>,
     <span class="function"><a href="function.imagecreatefromwbmp.php" class="function">imagecreatefromwbmp()</a></span>,
     <span class="function"><a href="function.imagecreatefromstring.php" class="function">imagecreatefromstring()</a></span>,
     <span class="function"><a href="function.imagecreatefromxbm.php" class="function">imagecreatefromxbm()</a></span>,
     <span class="function"><a href="function.imagecreatefromxpm.php" class="function">imagecreatefromxpm()</a></span>,
     <span class="function"><a href="function.imagecreatetruecolor.php" class="function">imagecreatetruecolor()</a></span>,
     <span class="function"><a href="function.imagerotate.php" class="function">imagerotate()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.imagearc.php" class="function">imagearc()</a></span>,
     <span class="function"><a href="function.imagechar.php" class="function">imagechar()</a></span>,
     <span class="function"><a href="function.imagecharup.php" class="function">imagecharup()</a></span>,
     <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span>,
     <span class="function"><a href="function.imagecolorat.php" class="function">imagecolorat()</a></span>,
     <span class="function"><a href="function.imagecolorclosest.php" class="function">imagecolorclosest()</a></span>,
     <span class="function"><a href="function.imagecolorexact.php" class="function">imagecolorexact()</a></span>,
     <span class="function"><a href="function.imagecolorresolve.php" class="function">imagecolorresolve()</a></span>,
     <span class="function"><a href="function.imagegammacorrect.php" class="function">imagegammacorrect()</a></span>,
     <span class="function"><a href="function.imagegammacorrect.php" class="function">imagegammacorrect()</a></span>,
     <span class="function"><a href="function.imagecolorset.php" class="function">imagecolorset()</a></span>,
     <span class="function"><a href="function.imagecolorsforindex.php" class="function">imagecolorsforindex()</a></span>,
     <span class="function"><a href="function.imagecolorstotal.php" class="function">imagecolorstotal()</a></span>,
     <span class="function"><a href="function.imagecolortransparent.php" class="function">imagecolortransparent()</a></span>,
     <span class="function"><a href="function.imagecopy.php" class="function">imagecopy()</a></span>,
     <span class="function"><a href="function.imagecopyresized.php" class="function">imagecopyresized()</a></span>,
     <span class="function"><a href="function.imagedashedline.php" class="function">imagedashedline()</a></span>,
     <span class="function"><a href="function.imagefill.php" class="function">imagefill()</a></span>,
     <span class="function"><a href="function.imagefilledpolygon.php" class="function">imagefilledpolygon()</a></span>,
     <span class="function"><a href="function.imagefilledrectangle.php" class="function">imagefilledrectangle()</a></span>,
     <span class="function"><a href="function.imagefilltoborder.php" class="function">imagefilltoborder()</a></span>,
     <span class="function"><a href="function.imagegif.php" class="function">imagegif()</a></span>,
     <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span>,
     <span class="function"><a href="function.imagejpeg.php" class="function">imagejpeg()</a></span>,
     <span class="function"><a href="function.imagewbmp.php" class="function">imagewbmp()</a></span>,
     <span class="function"><a href="function.imageinterlace.php" class="function">imageinterlace()</a></span>,
     <span class="function"><a href="function.imageline.php" class="function">imageline()</a></span>,
     <span class="function"><a href="function.imagepolygon.php" class="function">imagepolygon()</a></span>,
     <span class="function"><a href="function.imagerectangle.php" class="function">imagerectangle()</a></span>,
     <span class="function"><a href="function.imagerotate.php" class="function">imagerotate()</a></span>,
     <span class="function"><a href="function.imagesetpixel.php" class="function">imagesetpixel()</a></span>,
     <span class="function"><a href="function.imagestring.php" class="function">imagestring()</a></span>,
     <span class="function"><a href="function.imagestringup.php" class="function">imagestringup()</a></span>,
     <span class="function"><a href="function.imagesx.php" class="function">imagesx()</a></span>,
     <span class="function"><a href="function.imagesy.php" class="function">imagesy()</a></span>,
     <span class="function"><a href="function.imagettftext.php" class="function">imagettftext()</a></span>,
     <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span>,
     <span class="function"><a href="function.imageellipse.php" class="function">imageellipse()</a></span>,
     <span class="function"><a href="function.imagefilledellipse.php" class="function">imagefilledellipse()</a></span>,
     <span class="function"><a href="function.imagecolorclosestalpha.php" class="function">imagecolorclosestalpha()</a></span>,
     <span class="function"><a href="function.imagecolorexactalpha.php" class="function">imagecolorexactalpha()</a></span>,
     <span class="function"><a href="function.imagecolorresolvealpha.php" class="function">imagecolorresolvealpha()</a></span>,
     <span class="function"><a href="function.imagecopymerge.php" class="function">imagecopymerge()</a></span>,
     <span class="function"><a href="function.imagecopymergegray.php" class="function">imagecopymergegray()</a></span>,
     <span class="function"><a href="function.imagecopyresampled.php" class="function">imagecopyresampled()</a></span>,
     <span class="function"><a href="function.imagetruecolortopalette.php" class="function">imagetruecolortopalette()</a></span>,
     <span class="function"><a href="function.imagesetbrush.php" class="function">imagesetbrush()</a></span>,
     <span class="function"><a href="function.imagesettile.php" class="function">imagesettile()</a></span>,
     <span class="function"><a href="function.imagesetthickness.php" class="function">imagesetthickness()</a></span>,
     <span class="function"><a href="function.image2wbmp.php" class="function">image2wbmp()</a></span>,
     <span class="function"><a href="function.imagealphablending.php" class="function">imagealphablending()</a></span>,
     <span class="function"><a href="function.imageantialias.php" class="function">imageantialias()</a></span>,
     <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>,
     <span class="function"><a href="function.imagecolorclosesthwb.php" class="function">imagecolorclosesthwb()</a></span>,
     <span class="function"><a href="function.imagecolordeallocate.php" class="function">imagecolordeallocate()</a></span>,
     <span class="function"><a href="function.imagecolormatch.php" class="function">imagecolormatch()</a></span>,
     <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span>,
     <span class="function"><a href="function.imagefttext.php" class="function">imagefttext()</a></span>,
     <span class="function"><a href="function.imagegd.php" class="function">imagegd()</a></span>,
     <span class="function"><a href="function.imagegd2.php" class="function">imagegd2()</a></span>,
     <span class="function"><a href="function.imageistruecolor.php" class="function">imageistruecolor()</a></span>,
     <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span>,
     <span class="function"><a href="function.imagepalettecopy.php" class="function">imagepalettecopy()</a></span>,
     <span class="function"><a href="function.imagesavealpha.php" class="function">imagesavealpha()</a></span>,
     <span class="function"><a href="function.imagesetstyle.php" class="function">imagesetstyle()</a></span>,
     <span class="function"><a href="function.imagexbm.php" class="function">imagexbm()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.imagedestroy.php" class="function">imagedestroy()</a></span>
    </td>
    <td>GD Image (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>gd font</td>
    <td>
     <span class="function"><a href="function.imageloadfont.php" class="function">imageloadfont()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.imagechar.php" class="function">imagechar()</a></span>,
     <span class="function"><a href="function.imagecharup.php" class="function">imagecharup()</a></span>,
     <span class="function"><a href="function.imagefontheight.php" class="function">imagefontheight()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Font for GD (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>imap</td>
    <td>
     <span class="function"><a href="function.imap-open.php" class="function">imap_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.imap-append.php" class="function">imap_append()</a></span>,
     <span class="function"><a href="function.imap-body.php" class="function">imap_body()</a></span>,
     <span class="function"><a href="function.imap-check.php" class="function">imap_check()</a></span>,
     <span class="function"><a href="function.imap-createmailbox.php" class="function">imap_createmailbox()</a></span>,
     <span class="function"><a href="function.imap-delete.php" class="function">imap_delete()</a></span>,
     <span class="function"><a href="function.imap-deletemailbox.php" class="function">imap_deletemailbox()</a></span>,
     <span class="function"><a href="function.imap-expunge.php" class="function">imap_expunge()</a></span>,
     <span class="function"><a href="function.imap-fetchbody.php" class="function">imap_fetchbody()</a></span>,
     <span class="function"><a href="function.imap-fetchstructure.php" class="function">imap_fetchstructure()</a></span>,
     <span class="function"><a href="function.imap-headerinfo.php" class="function">imap_headerinfo()</a></span>,
     <span class="function"><a href="function.imap-header.php" class="function">imap_header()</a></span>,
     <span class="function"><a href="function.imap-headers.php" class="function">imap_headers()</a></span>,
     <span class="function"><a href="function.imap-listmailbox.php" class="function">imap_listmailbox()</a></span>,
     <span class="function"><a href="function.imap-getmailboxes.php" class="function">imap_getmailboxes()</a></span>,
     <span class="function"><a href="function.imap-get-quota.php" class="function">imap_get_quota()</a></span>,
     <span class="function"><a href="function.imap-status.php" class="function">imap_status()</a></span>,
     <span class="function"><a href="function.imap-listsubscribed.php" class="function">imap_listsubscribed()</a></span>,
     <span class="function"><a href="function.imap-set-quota.php" class="function">imap_set_quota()</a></span>,
     <span class="function"><a href="function.imap-set-quota.php" class="function">imap_set_quota()</a></span>,
     <span class="function"><a href="function.imap-getsubscribed.php" class="function">imap_getsubscribed()</a></span>,
     <span class="function"><a href="function.imap-mail-copy.php" class="function">imap_mail_copy()</a></span>,
     <span class="function"><a href="function.imap-mail-move.php" class="function">imap_mail_move()</a></span>,
     <span class="function"><a href="function.imap-num-msg.php" class="function">imap_num_msg()</a></span>,
     <span class="function"><a href="function.imap-num-recent.php" class="function">imap_num_recent()</a></span>,
     <span class="function"><a href="function.imap-ping.php" class="function">imap_ping()</a></span>,
     <span class="function"><a href="function.imap-renamemailbox.php" class="function">imap_renamemailbox()</a></span>,
     <span class="function"><a href="function.imap-reopen.php" class="function">imap_reopen()</a></span>,
     <span class="function"><a href="function.imap-subscribe.php" class="function">imap_subscribe()</a></span>,
     <span class="function"><a href="function.imap-undelete.php" class="function">imap_undelete()</a></span>,
     <span class="function"><a href="function.imap-unsubscribe.php" class="function">imap_unsubscribe()</a></span>,
     <span class="function"><a href="function.imap-scanmailbox.php" class="function">imap_scanmailbox()</a></span>,
     <span class="function"><a href="function.imap-mailboxmsginfo.php" class="function">imap_mailboxmsginfo()</a></span>,
     <span class="function"><a href="function.imap-fetchheader.php" class="function">imap_fetchheader()</a></span>,
     <span class="function"><a href="function.imap-uid.php" class="function">imap_uid()</a></span>,
     <span class="function"><a href="function.imap-msgno.php" class="function">imap_msgno()</a></span>,
     <span class="function"><a href="function.imap-search.php" class="function">imap_search()</a></span>,
     <span class="function"><a href="function.imap-fetch-overview.php" class="function">imap_fetch_overview()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.imap-close.php" class="function">imap_close()</a></span>
    </td>
    <td>Link to IMAP, POP3 server (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
     <td>interbase blob</td>
     <td>
      <span class="function"><a href="function.ibase-blob-create.php" class="function">ibase_blob_create()</a></span>,
      <span class="function"><a href="function.ibase-blob-import.php" class="function">ibase_blob_import()</a></span>,
      <span class="function"><a href="function.ibase-blob-open.php" class="function">ibase_blob_open()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.ibase-blob-add.php" class="function">ibase_blob_add()</a></span>,
      <span class="function"><a href="function.ibase-blob-cancel.php" class="function">ibase_blob_cancel()</a></span>,
      <span class="function"><a href="function.ibase-blob-echo.php" class="function">ibase_blob_echo()</a></span>,
      <span class="function"><a href="function.ibase-blob-get.php" class="function">ibase_blob_get()</a></span>,
      <span class="function"><a href="function.ibase-blob-info.php" class="function">ibase_blob_info()</a></span>
     </td>
     <td>
      <span class="function"><a href="function.ibase-blob-close.php" class="function">ibase_blob_close()</a></span>
     </td>
     <td> </td>
    </tr>

   <tr>
    <td>interbase link</td>
    <td>
     <span class="function"><a href="function.ibase-connect.php" class="function">ibase_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-query.php" class="function">ibase_query()</a></span>,
     <span class="function"><a href="function.ibase-prepare.php" class="function">ibase_prepare()</a></span>,
     <span class="function"><a href="function.ibase-trans.php" class="function">ibase_trans()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-close.php" class="function">ibase_close()</a></span>
    </td>
    <td>Link to Interbase database</td>
   </tr>

   <tr>
    <td>interbase link persistent</td>
    <td>
     <span class="function"><a href="function.ibase-pconnect.php" class="function">ibase_pconnect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-query.php" class="function">ibase_query()</a></span>,
     <span class="function"><a href="function.ibase-prepare.php" class="function">ibase_prepare()</a></span>,
     <span class="function"><a href="function.ibase-trans.php" class="function">ibase_trans()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Persistent link to Interbase database</td>
   </tr>

   <tr>
    <td>interbase query</td>
    <td>
     <span class="function"><a href="function.ibase-prepare.php" class="function">ibase_prepare()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-execute.php" class="function">ibase_execute()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-free-query.php" class="function">ibase_free_query()</a></span>
    </td>
    <td>Interbase query</td>
   </tr>

   <tr>
    <td>interbase result</td>
    <td>
     <span class="function"><a href="function.ibase-query.php" class="function">ibase_query()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-fetch-row.php" class="function">ibase_fetch_row()</a></span>,
     <span class="function"><a href="function.ibase-fetch-object.php" class="function">ibase_fetch_object()</a></span>,
     <span class="function"><a href="function.ibase-field-info.php" class="function">ibase_field_info()</a></span>,
     <span class="function"><a href="function.ibase-num-fields.php" class="function">ibase_num_fields()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-free-result.php" class="function">ibase_free_result()</a></span>
    </td>
    <td>Interbase Result</td>
   </tr>

   <tr>
    <td>interbase transaction</td>
    <td>
     <span class="function"><a href="function.ibase-trans.php" class="function">ibase_trans()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-commit.php" class="function">ibase_commit()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ibase-rollback.php" class="function">ibase_rollback()</a></span>
    </td>
    <td>Interbase transaction</td>
   </tr>

   <tr>
    <td>ldap link</td>
    <td>
     <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>,
     <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ldap-count-entries.php" class="function">ldap_count_entries()</a></span>,
     <span class="function"><a href="function.ldap-first-attribute.php" class="function">ldap_first_attribute()</a></span>,
     <span class="function"><a href="function.ldap-first-entry.php" class="function">ldap_first_entry()</a></span>,
     <span class="function"><a href="function.ldap-get-attributes.php" class="function">ldap_get_attributes()</a></span>,
     <span class="function"><a href="function.ldap-get-dn.php" class="function">ldap_get_dn()</a></span>,
     <span class="function"><a href="function.ldap-get-entries.php" class="function">ldap_get_entries()</a></span>,
     <span class="function"><a href="function.ldap-get-values.php" class="function">ldap_get_values()</a></span>,
     <span class="function"><a href="function.ldap-get-values-len.php" class="function">ldap_get_values_len()</a></span>,
     <span class="function"><a href="function.ldap-next-attribute.php" class="function">ldap_next_attribute()</a></span>,
     <span class="function"><a href="function.ldap-next-entry.php" class="function">ldap_next_entry()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ldap-close.php" class="function">ldap_close()</a></span>
    </td>
    <td>ldap connection  (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>ldap result</td>
    <td>
     <span class="function"><a href="function.ldap-read.php" class="function">ldap_read()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ldap-add.php" class="function">ldap_add()</a></span>,
     <span class="function"><a href="function.ldap-compare.php" class="function">ldap_compare()</a></span>,
     <span class="function"><a href="function.ldap-bind.php" class="function">ldap_bind()</a></span>,
     <span class="function"><a href="function.ldap-count-entries.php" class="function">ldap_count_entries()</a></span>,
     <span class="function"><a href="function.ldap-delete.php" class="function">ldap_delete()</a></span>,
     <span class="function"><a href="function.ldap-errno.php" class="function">ldap_errno()</a></span>,
     <span class="function"><a href="function.ldap-error.php" class="function">ldap_error()</a></span>,
     <span class="function"><a href="function.ldap-first-attribute.php" class="function">ldap_first_attribute()</a></span>,
     <span class="function"><a href="function.ldap-first-entry.php" class="function">ldap_first_entry()</a></span>,
     <span class="function"><a href="function.ldap-get-attributes.php" class="function">ldap_get_attributes()</a></span>,
     <span class="function"><a href="function.ldap-get-dn.php" class="function">ldap_get_dn()</a></span>,
     <span class="function"><a href="function.ldap-get-entries.php" class="function">ldap_get_entries()</a></span>,
     <span class="function"><a href="function.ldap-get-values.php" class="function">ldap_get_values()</a></span>,
     <span class="function"><a href="function.ldap-get-values-len.php" class="function">ldap_get_values_len()</a></span>,
     <span class="function"><a href="function.ldap-get-option.php" class="function">ldap_get_option()</a></span>,
     <span class="function"><a href="function.ldap-list.php" class="function">ldap_list()</a></span>,
     <span class="function"><a href="function.ldap-modify.php" class="function">ldap_modify()</a></span>,
     <span class="function"><a href="function.ldap-mod-add.php" class="function">ldap_mod_add()</a></span>,
     <span class="function"><a href="function.ldap-mod-replace.php" class="function">ldap_mod_replace()</a></span>,
     <span class="function"><a href="function.ldap-next-attribute.php" class="function">ldap_next_attribute()</a></span>,
     <span class="function"><a href="function.ldap-next-entry.php" class="function">ldap_next_entry()</a></span>,
     <span class="function"><a href="function.ldap-mod-del.php" class="function">ldap_mod_del()</a></span>,
     <span class="function"><a href="function.ldap-set-option.php" class="function">ldap_set_option()</a></span>,
     <span class="function"><a href="function.ldap-unbind.php" class="function">ldap_unbind()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.ldap-free-result.php" class="function">ldap_free_result()</a></span>
    </td>
    <td>ldap search result (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
     <td>ldap result entry</td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td>ldap result entry (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>mailparse_mail_structure</td>
    <td>
     <span class="function"><a href="function.mailparse-msg-create.php" class="function">mailparse_msg_create()</a></span>
     <span class="function"><a href="function.mailparse-msg-parse-file.php" class="function">mailparse_msg_parse_file()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mailparse-msg-extract-part-file.php" class="function">mailparse_msg_extract_part_file()</a></span>
     <span class="function"><a href="function.mailparse-msg-extract-part.php" class="function">mailparse_msg_extract_part()</a></span>
     <span class="function"><a href="function.mailparse-msg-extract-whole-part-file.php" class="function">mailparse_msg_extract_whole_part_file()</a></span>
     <span class="function"><a href="function.mailparse-msg-get-part-data.php" class="function">mailparse_msg_get_part_data()</a></span>
     <span class="function"><a href="function.mailparse-msg-get-part.php" class="function">mailparse_msg_get_part()</a></span>
     <span class="function"><a href="function.mailparse-msg-get-structure.php" class="function">mailparse_msg_get_structure()</a></span>
     <span class="function"><a href="function.mailparse-msg-parse.php" class="function">mailparse_msg_parse()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mailparse-msg-free.php" class="function">mailparse_msg_free()</a></span>
    </td>
    <td class="empty">&nbsp;</td>
   </tr>

   <tr>
    <td>mysql link</td>
    <td>
     <span class="function"><a href="function.mysql-connect.php" class="function">mysql_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mysql-affected-rows.php" class="function">mysql_affected_rows()</a></span>,
     <span class="function"><a href="function.mysql-create-db.php" class="function">mysql_create_db()</a></span>,
     <span class="function"><a href="function.mysql-data-seek.php" class="function">mysql_data_seek()</a></span>,
     <span class="function"><a href="function.mysql-db-name.php" class="function">mysql_db_name()</a></span>,
     <span class="function"><a href="function.mysql-db-query.php" class="function">mysql_db_query()</a></span>,
     <span class="function"><a href="function.mysql-drop-db.php" class="function">mysql_drop_db()</a></span>,
     <span class="function"><a href="function.mysql-errno.php" class="function">mysql_errno()</a></span>,
     <span class="function"><a href="function.mysql-error.php" class="function">mysql_error()</a></span>,
     <span class="function"><a href="function.mysql-insert-id.php" class="function">mysql_insert_id()</a></span>,
     <span class="function"><a href="function.mysql-list-dbs.php" class="function">mysql_list_dbs()</a></span>,
     <span class="function"><a href="function.mysql-list-fields.php" class="function">mysql_list_fields()</a></span>,
     <span class="function"><a href="function.mysql-list-tables.php" class="function">mysql_list_tables()</a></span>,
     <span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>,
     <span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span>,
     <span class="function"><a href="function.mysql-select-db.php" class="function">mysql_select_db()</a></span>,
     <span class="function"><a href="function.mysql-tablename.php" class="function">mysql_tablename()</a></span>,
     <span class="function"><a href="function.mysql-get-host-info.php" class="function">mysql_get_host_info()</a></span>,
     <span class="function"><a href="function.mysql-get-proto-info.php" class="function">mysql_get_proto_info()</a></span>,
     <span class="function"><a href="function.mysql-get-server-info.php" class="function">mysql_get_server_info()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mysql-close.php" class="function">mysql_close()</a></span>
    </td>
    <td>Link to MySQL database</td>
   </tr>

   <tr>
    <td>mysql link persistent</td>
    <td>
     <span class="function"><a href="function.mysql-pconnect.php" class="function">mysql_pconnect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mysql-affected-rows.php" class="function">mysql_affected_rows()</a></span>,
     <span class="function"><a href="function.mysql-create-db.php" class="function">mysql_create_db()</a></span>,
     <span class="function"><a href="function.mysql-data-seek.php" class="function">mysql_data_seek()</a></span>,
     <span class="function"><a href="function.mysql-db-name.php" class="function">mysql_db_name()</a></span>,
     <span class="function"><a href="function.mysql-db-query.php" class="function">mysql_db_query()</a></span>,
     <span class="function"><a href="function.mysql-drop-db.php" class="function">mysql_drop_db()</a></span>,
     <span class="function"><a href="function.mysql-errno.php" class="function">mysql_errno()</a></span>,
     <span class="function"><a href="function.mysql-error.php" class="function">mysql_error()</a></span>,
     <span class="function"><a href="function.mysql-insert-id.php" class="function">mysql_insert_id()</a></span>,
     <span class="function"><a href="function.mysql-list-dbs.php" class="function">mysql_list_dbs()</a></span>,
     <span class="function"><a href="function.mysql-list-fields.php" class="function">mysql_list_fields()</a></span>,
     <span class="function"><a href="function.mysql-list-tables.php" class="function">mysql_list_tables()</a></span>,
     <span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>,
     <span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span>,
     <span class="function"><a href="function.mysql-select-db.php" class="function">mysql_select_db()</a></span>,
     <span class="function"><a href="function.mysql-tablename.php" class="function">mysql_tablename()</a></span>,
     <span class="function"><a href="function.mysql-get-host-info.php" class="function">mysql_get_host_info()</a></span>,
     <span class="function"><a href="function.mysql-get-proto-info.php" class="function">mysql_get_proto_info()</a></span>,
     <span class="function"><a href="function.mysql-get-server-info.php" class="function">mysql_get_server_info()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Persistent link to MySQL database</td>
   </tr>

   <tr>
    <td>mysql result</td>
    <td>
     <span class="function"><a href="function.mysql-db-query.php" class="function">mysql_db_query()</a></span>,
     <span class="function"><a href="function.mysql-list-dbs.php" class="function">mysql_list_dbs()</a></span>,
     <span class="function"><a href="function.mysql-list-fields.php" class="function">mysql_list_fields()</a></span>,
     <span class="function"><a href="function.mysql-list-processes.php" class="function">mysql_list_processes()</a></span>,
     <span class="function"><a href="function.mysql-list-tables.php" class="function">mysql_list_tables()</a></span>,
     <span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>,
     <span class="function"><a href="function.mysql-unbuffered-query.php" class="function">mysql_unbuffered_query()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mysql-data-seek.php" class="function">mysql_data_seek()</a></span>,
     <span class="function"><a href="function.mysql-db-name.php" class="function">mysql_db_name()</a></span>,
     <span class="function"><a href="function.mysql-fetch-array.php" class="function">mysql_fetch_array()</a></span>,
     <span class="function"><a href="function.mysql-fetch-assoc.php" class="function">mysql_fetch_assoc()</a></span>,
     <span class="function"><a href="function.mysql-fetch-field.php" class="function">mysql_fetch_field()</a></span>,
     <span class="function"><a href="function.mysql-fetch-lengths.php" class="function">mysql_fetch_lengths()</a></span>,
     <span class="function"><a href="function.mysql-fetch-object.php" class="function">mysql_fetch_object()</a></span>,
     <span class="function"><a href="function.mysql-fetch-row.php" class="function">mysql_fetch_row()</a></span>,
     <span class="function"><a href="function.mysql-fetch-row.php" class="function">mysql_fetch_row()</a></span>,
     <span class="function"><a href="function.mysql-field-flags.php" class="function">mysql_field_flags()</a></span>,
     <span class="function"><a href="function.mysql-field-name.php" class="function">mysql_field_name()</a></span>,
     <span class="function"><a href="function.mysql-field-len.php" class="function">mysql_field_len()</a></span>,
     <span class="function"><a href="function.mysql-field-seek.php" class="function">mysql_field_seek()</a></span>,
     <span class="function"><a href="function.mysql-field-table.php" class="function">mysql_field_table()</a></span>,
     <span class="function"><a href="function.mysql-field-type.php" class="function">mysql_field_type()</a></span>,
     <span class="function"><a href="function.mysql-num-fields.php" class="function">mysql_num_fields()</a></span>,
     <span class="function"><a href="function.mysql-num-rows.php" class="function">mysql_num_rows()</a></span>,
     <span class="function"><a href="function.mysql-result.php" class="function">mysql_result()</a></span>,
     <span class="function"><a href="function.mysql-tablename.php" class="function">mysql_tablename()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.mysql-free-result.php" class="function">mysql_free_result()</a></span>
    </td>
    <td>MySQL result</td>
   </tr>

   <tr>
     <td>oci8 collection</td>
     <td>
       <span class="function"><a href="function.oci-new-collection.php" class="function">oci_new_collection()</a></span>
     </td>
     <td>
       <span class="function"><a href="ocicollection.append.php" class="function">OCICollection::append()</a></span>,
       <span class="function"><a href="ocicollection.assign.php" class="function">OCICollection::assign()</a></span>,
       <span class="function"><a href="ocicollection.assignelem.php" class="function">OCICollection::assignElem()</a></span>,
       <span class="function"><a href="ocicollection.getelem.php" class="function">OCICollection::getElem()</a></span>,
       <span class="function"><a href="ocicollection.max.php" class="function">OCICollection::max()</a></span>,
       <span class="function"><a href="ocicollection.size.php" class="function">OCICollection::size()</a></span>,
       <span class="function"><a href="ocicollection.trim.php" class="function">OCICollection::trim()</a></span>
     </td>
     <td>
       <span class="function"><a href="ocicollection.free.php" class="function">OCICollection::free()</a></span>
     </td>
     <td>Oracle Collection</td>
   </tr>

   <tr>
    <td>oci8 connection</td>
    <td>
     <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>,
     <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span>,
     <span class="function"><a href="function.oci-new-connect.php" class="function">oci_new_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.oci-commit.php" class="function">oci_commit()</a></span>,
     <span class="function"><a href="function.oci-error.php" class="function">oci_error()</a></span>,
     <span class="function"><a href="function.oci-new-cursor.php" class="function">oci_new_cursor()</a></span>,
     <span class="function"><a href="function.oci-parse.php" class="function">oci_parse()</a></span>,
     <span class="function"><a href="function.oci-password-change.php" class="function">oci_password_change()</a></span>,
     <span class="function"><a href="function.oci-rollback.php" class="function">oci_rollback()</a></span>,
     <span class="function"><a href="function.oci-server-version.php" class="function">oci_server_version()</a></span>,
     <span class="function"><a href="function.oci-set-action.php" class="function">oci_set_action()</a></span>,
     <span class="function"><a href="function.oci-set-client-identifier.php" class="function">oci_set_client_identifier()</a></span>,
     <span class="function"><a href="function.oci-set-client-info.php" class="function">oci_set_client_info()</a></span>,
     <span class="function"><a href="function.oci-set-module-name.php" class="function">oci_set_module_name()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.oci-close.php" class="function">oci_close()</a></span>
    </td>
    <td>Connection to Oracle Database</td>
   </tr>

   <tr>
     <td>oci8 lob</td>
     <td>
       <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span>
     </td>
     <td>
       <span class="function"><a href="ocilob.append.php" class="function">OCILob::append()</a></span>,
       <span class="function"><a href="ocilob.close.php" class="function">OCILob::close()</a></span>,
       <span class="function"><a href="ocilob.eof.php" class="function">OCILob::eof()</a></span>,
       <span class="function"><a href="ocilob.erase.php" class="function">OCILob::erase()</a></span>,
       <span class="function"><a href="ocilob.export.php" class="function">OCILob::export()</a></span>,
       <span class="function"><a href="ocilob.flush.php" class="function">OCILob::flush()</a></span>,
       <span class="function"><a href="ocilob.getbuffering.php" class="function">OCILob::getBuffering()</a></span>,
       <span class="function"><a href="ocilob.import.php" class="function">OCILob::import()</a></span>,
       <span class="function"><a href="ocilob.load.php" class="function">OCILob::load()</a></span>,
       <span class="function"><a href="ocilob.read.php" class="function">OCILob::read()</a></span>,
       <span class="function"><a href="ocilob.rewind.php" class="function">OCILob::rewind()</a></span>,
       <span class="function"><a href="ocilob.save.php" class="function">OCILob::save()</a></span>,
       <span class="function"><a href="ocilob.savefile.php" class="function">OCILob::saveFile()</a></span>,
       <span class="function"><a href="ocilob.seek.php" class="function">OCILob::seek()</a></span>,
       <span class="function"><a href="ocilob.setbuffering.php" class="function">OCILob::setBuffering()</a></span>,
       <span class="function"><a href="ocilob.size.php" class="function">OCILob::size()</a></span>,
       <span class="function"><a href="ocilob.tell.php" class="function">OCILob::tell()</a></span>,
       <span class="function"><a href="ocilob.truncate.php" class="function">OCILob::truncate()</a></span>,
       <span class="function"><a href="ocilob.write.php" class="function">OCILob::write()</a></span>,
       <span class="function"><a href="ocilob.writetemporary.php" class="function">OCILob::writeTemporary()</a></span>,
       <span class="function"><a href="ocilob.writetofile.php" class="function">OCILob::writeToFile()</a></span>,
       <span class="function"><a href="function.oci-lob-copy.php" class="function">oci_lob_copy()</a></span>,
       <span class="function"><a href="function.oci-lob-is-equal.php" class="function">oci_lob_is_equal()</a></span>
     </td>
     <td>
       <span class="function"><a href="ocilob.free.php" class="function">OCILob::free()</a></span>
     </td>
     <td>Oracle large objects</td>
   </tr>

   <tr>
    <td>oci8 statement</td>
    <td>
     <span class="function"><a href="function.oci-parse.php" class="function">oci_parse()</a></span>,
     <span class="function"><a href="function.oci-new-cursor.php" class="function">oci_new_cursor()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span>,
     <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span>,
     <span class="function"><a href="function.oci-cancel.php" class="function">oci_cancel()</a></span>,
     <span class="function"><a href="function.oci-define-by-name.php" class="function">oci_define_by_name()</a></span>,
     <span class="function"><a href="function.oci-error.php" class="function">oci_error()</a></span>
     <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span>,
     <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span>,
     <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span>,
     <span class="function"><a href="function.oci-fetch-assoc.php" class="function">oci_fetch_assoc()</a></span>,
     <span class="function"><a href="function.oci-fetch-object.php" class="function">oci_fetch_object()</a></span>,
     <span class="function"><a href="function.oci-fetch-row.php" class="function">oci_fetch_row()</a></span>,
     <span class="function"><a href="function.oci-fetch.php" class="function">oci_fetch()</a></span>,
     <span class="function"><a href="function.oci-field-is-null.php" class="function">oci_field_is_null()</a></span>,
     <span class="function"><a href="function.oci-field-name.php" class="function">oci_field_name()</a></span>,
     <span class="function"><a href="function.oci-field-precision.php" class="function">oci_field_precision()</a></span>,
     <span class="function"><a href="function.oci-field-scale.php" class="function">oci_field_scale()</a></span>,
     <span class="function"><a href="function.oci-field-size.php" class="function">oci_field_size()</a></span>,
     <span class="function"><a href="function.oci-field-type-raw.php" class="function">oci_field_type_raw()</a></span>,
     <span class="function"><a href="function.oci-field-type.php" class="function">oci_field_type()</a></span>,
     <span class="function"><a href="function.oci-num-fields.php" class="function">oci_num_fields()</a></span>,
     <span class="function"><a href="function.oci-num-rows.php" class="function">oci_num_rows()</a></span>,
     <span class="function"><a href="function.oci-result.php" class="function">oci_result()</a></span>,
     <span class="function"><a href="function.oci-set-prefetch.php" class="function">oci_set_prefetch()</a></span>,
     <span class="function"><a href="function.oci-statement-type.php" class="function">oci_statement_type()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.oci-free-statement.php" class="function">oci_free_statement()</a></span>
    </td>
    <td>Oracle cursor</td>
   </tr>

   <tr>
    <td>odbc link</td>
    <td>
     <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.odbc-autocommit.php" class="function">odbc_autocommit()</a></span>,
     <span class="function"><a href="function.odbc-commit.php" class="function">odbc_commit()</a></span>,
     <span class="function"><a href="function.odbc-error.php" class="function">odbc_error()</a></span>,
     <span class="function"><a href="function.odbc-errormsg.php" class="function">odbc_errormsg()</a></span>,
     <span class="function"><a href="function.odbc-exec.php" class="function">odbc_exec()</a></span>,
     <span class="function"><a href="function.odbc-tables.php" class="function">odbc_tables()</a></span>,
     <span class="function"><a href="function.odbc-tableprivileges.php" class="function">odbc_tableprivileges()</a></span>,
     <span class="function"><a href="function.odbc-do.php" class="function">odbc_do()</a></span>,
     <span class="function"><a href="function.odbc-prepare.php" class="function">odbc_prepare()</a></span>,
     <span class="function"><a href="function.odbc-columns.php" class="function">odbc_columns()</a></span>,
     <span class="function"><a href="function.odbc-columnprivileges.php" class="function">odbc_columnprivileges()</a></span>,
     <span class="function"><a href="function.odbc-procedurecolumns.php" class="function">odbc_procedurecolumns()</a></span>,
     <span class="function"><a href="function.odbc-specialcolumns.php" class="function">odbc_specialcolumns()</a></span>,
     <span class="function"><a href="function.odbc-rollback.php" class="function">odbc_rollback()</a></span>,
     <span class="function"><a href="function.odbc-setoption.php" class="function">odbc_setoption()</a></span>,
     <span class="function"><a href="function.odbc-gettypeinfo.php" class="function">odbc_gettypeinfo()</a></span>,
     <span class="function"><a href="function.odbc-primarykeys.php" class="function">odbc_primarykeys()</a></span>,
     <span class="function"><a href="function.odbc-foreignkeys.php" class="function">odbc_foreignkeys()</a></span>,
     <span class="function"><a href="function.odbc-procedures.php" class="function">odbc_procedures()</a></span>,
     <span class="function"><a href="function.odbc-statistics.php" class="function">odbc_statistics()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.odbc-close.php" class="function">odbc_close()</a></span>
    </td>
    <td>Link to ODBC database</td>
   </tr>

   <tr>
    <td>odbc link persistent</td>
    <td>
     <span class="function"><a href="function.odbc-pconnect.php" class="function">odbc_pconnect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.odbc-autocommit.php" class="function">odbc_autocommit()</a></span>,
     <span class="function"><a href="function.odbc-commit.php" class="function">odbc_commit()</a></span>,
     <span class="function"><a href="function.odbc-error.php" class="function">odbc_error()</a></span>,
     <span class="function"><a href="function.odbc-errormsg.php" class="function">odbc_errormsg()</a></span>,
     <span class="function"><a href="function.odbc-exec.php" class="function">odbc_exec()</a></span>,
     <span class="function"><a href="function.odbc-tables.php" class="function">odbc_tables()</a></span>,
     <span class="function"><a href="function.odbc-tableprivileges.php" class="function">odbc_tableprivileges()</a></span>,
     <span class="function"><a href="function.odbc-do.php" class="function">odbc_do()</a></span>,
     <span class="function"><a href="function.odbc-prepare.php" class="function">odbc_prepare()</a></span>,
     <span class="function"><a href="function.odbc-columns.php" class="function">odbc_columns()</a></span>,
     <span class="function"><a href="function.odbc-columnprivileges.php" class="function">odbc_columnprivileges()</a></span>,
     <span class="function"><a href="function.odbc-procedurecolumns.php" class="function">odbc_procedurecolumns()</a></span>,
     <span class="function"><a href="function.odbc-specialcolumns.php" class="function">odbc_specialcolumns()</a></span>,
     <span class="function"><a href="function.odbc-rollback.php" class="function">odbc_rollback()</a></span>,
     <span class="function"><a href="function.odbc-setoption.php" class="function">odbc_setoption()</a></span>,
     <span class="function"><a href="function.odbc-gettypeinfo.php" class="function">odbc_gettypeinfo()</a></span>,
     <span class="function"><a href="function.odbc-primarykeys.php" class="function">odbc_primarykeys()</a></span>,
     <span class="function"><a href="function.odbc-foreignkeys.php" class="function">odbc_foreignkeys()</a></span>,
     <span class="function"><a href="function.odbc-procedures.php" class="function">odbc_procedures()</a></span>,
     <span class="function"><a href="function.odbc-statistics.php" class="function">odbc_statistics()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Persistent link to ODBC database</td>
   </tr>

   <tr>
    <td>odbc result</td>
    <td>
     <span class="function"><a href="function.odbc-prepare.php" class="function">odbc_prepare()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.odbc-binmode.php" class="function">odbc_binmode()</a></span>,
     <span class="function"><a href="function.odbc-cursor.php" class="function">odbc_cursor()</a></span>,
     <span class="function"><a href="function.odbc-execute.php" class="function">odbc_execute()</a></span>,
     <span class="function"><a href="function.odbc-fetch-into.php" class="function">odbc_fetch_into()</a></span>,
     <span class="function"><a href="function.odbc-fetch-row.php" class="function">odbc_fetch_row()</a></span>,
     <span class="function"><a href="function.odbc-field-name.php" class="function">odbc_field_name()</a></span>,
     <span class="function"><a href="function.odbc-field-num.php" class="function">odbc_field_num()</a></span>,
     <span class="function"><a href="function.odbc-field-type.php" class="function">odbc_field_type()</a></span>,
     <span class="function"><a href="function.odbc-field-len.php" class="function">odbc_field_len()</a></span>,
     <span class="function"><a href="function.odbc-field-precision.php" class="function">odbc_field_precision()</a></span>,
     <span class="function"><a href="function.odbc-field-scale.php" class="function">odbc_field_scale()</a></span>,
     <span class="function"><a href="function.odbc-longreadlen.php" class="function">odbc_longreadlen()</a></span>,
     <span class="function"><a href="function.odbc-num-fields.php" class="function">odbc_num_fields()</a></span>,
     <span class="function"><a href="function.odbc-num-rows.php" class="function">odbc_num_rows()</a></span>,
     <span class="function"><a href="function.odbc-result.php" class="function">odbc_result()</a></span>,
     <span class="function"><a href="function.odbc-result-all.php" class="function">odbc_result_all()</a></span>,
     <span class="function"><a href="function.odbc-setoption.php" class="function">odbc_setoption()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.odbc-free-result.php" class="function">odbc_free_result()</a></span>
    </td>
    <td>ODBC result</td>
   </tr>

   <tr>
     <td>birdstep link</td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td>Link to Birdstep database (prior to PHP 7.3.0)</td>
    </tr>

   <tr>
     <td>birdstep result</td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td>Birdstep result (prior to PHP 7.3.0)</td>
    </tr>

   <tr>
    <td>OpenSSL key</td>
    <td>
     <span class="function"><a href="function.openssl-get-privatekey.php" class="function">openssl_get_privatekey()</a></span>,
     <span class="function"><a href="function.openssl-get-publickey.php" class="function">openssl_get_publickey()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.openssl-sign.php" class="function">openssl_sign()</a></span>,
     <span class="function"><a href="function.openssl-seal.php" class="function">openssl_seal()</a></span>,
     <span class="function"><a href="function.openssl-open.php" class="function">openssl_open()</a></span>,
     <span class="function"><a href="function.openssl-verify.php" class="function">openssl_verify()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.openssl-free-key.php" class="function">openssl_free_key()</a></span>
    </td>
    <td>OpenSSL key</td>
   </tr>

   <tr>
    <td>OpenSSL X.509</td>
    <td>
     <span class="function"><a href="function.openssl-x509-read.php" class="function">openssl_x509_read()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.openssl-x509-parse.php" class="function">openssl_x509_parse()</a></span>,
     <span class="function"><a href="function.openssl-x509-checkpurpose.php" class="function">openssl_x509_checkpurpose()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.openssl-x509-free.php" class="function">openssl_x509_free()</a></span>
    </td>
    <td>Public Key</td>
   </tr>

   <tr>
    <td>pgsql large object</td>
    <td>
     <span class="function"><a href="function.pg-lo-open.php" class="function">pg_lo_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-lo-open.php" class="function">pg_lo_open()</a></span>,
     <span class="function"><a href="function.pg-lo-create.php" class="function">pg_lo_create()</a></span>,
     <span class="function"><a href="function.pg-lo-read.php" class="function">pg_lo_read()</a></span>,
     <span class="function"><a href="function.pg-lo-read-all.php" class="function">pg_lo_read_all()</a></span>,
     <span class="function"><a href="function.pg-lo-seek.php" class="function">pg_lo_seek()</a></span>,
     <span class="function"><a href="function.pg-lo-tell.php" class="function">pg_lo_tell()</a></span>,
     <span class="function"><a href="function.pg-lo-unlink.php" class="function">pg_lo_unlink()</a></span>,
     <span class="function"><a href="function.pg-lo-write.php" class="function">pg_lo_write()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-lo-close.php" class="function">pg_lo_close()</a></span>
    </td>
    <td>PostgreSQL Large Object (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>pgsql link</td>
    <td>
     <span class="function"><a href="function.pg-connect.php" class="function">pg_connect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-affected-rows.php" class="function">pg_affected_rows()</a></span>,
     <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>,
     <span class="function"><a href="function.pg-send-query.php" class="function">pg_send_query()</a></span>,
     <span class="function"><a href="function.pg-get-result.php" class="function">pg_get_result()</a></span>,
     <span class="function"><a href="function.pg-connection-busy.php" class="function">pg_connection_busy()</a></span>,
     <span class="function"><a href="function.pg-connection-reset.php" class="function">pg_connection_reset()</a></span>,
     <span class="function"><a href="function.pg-connection-status.php" class="function">pg_connection_status()</a></span>,
     <span class="function"><a href="function.pg-last-error.php" class="function">pg_last_error()</a></span>,
     <span class="function"><a href="function.pg-last-notice.php" class="function">pg_last_notice()</a></span>,
     <span class="function"><a href="function.pg-lo-create.php" class="function">pg_lo_create()</a></span>,
     <span class="function"><a href="function.pg-lo-export.php" class="function">pg_lo_export()</a></span>,
     <span class="function"><a href="function.pg-lo-import.php" class="function">pg_lo_import()</a></span>,
     <span class="function"><a href="function.pg-lo-open.php" class="function">pg_lo_open()</a></span>,
     <span class="function"><a href="function.pg-lo-unlink.php" class="function">pg_lo_unlink()</a></span>,
     <span class="function"><a href="function.pg-host.php" class="function">pg_host()</a></span>,
     <span class="function"><a href="function.pg-port.php" class="function">pg_port()</a></span>,
     <span class="function"><a href="function.pg-dbname.php" class="function">pg_dbname()</a></span>,
     <span class="function"><a href="function.pg-options.php" class="function">pg_options()</a></span>,
     <span class="function"><a href="function.pg-copy-from.php" class="function">pg_copy_from()</a></span>,
     <span class="function"><a href="function.pg-copy-to.php" class="function">pg_copy_to()</a></span>,
     <span class="function"><a href="function.pg-end-copy.php" class="function">pg_end_copy()</a></span>,
     <span class="function"><a href="function.pg-put-line.php" class="function">pg_put_line()</a></span>,
     <span class="function"><a href="function.pg-tty.php" class="function">pg_tty()</a></span>,
     <span class="function"><a href="function.pg-trace.php" class="function">pg_trace()</a></span>,
     <span class="function"><a href="function.pg-untrace.php" class="function">pg_untrace()</a></span>,
     <span class="function"><a href="function.pg-set-client-encoding.php" class="function">pg_set_client_encoding()</a></span>,
     <span class="function"><a href="function.pg-client-encoding.php" class="function">pg_client_encoding()</a></span>,
     <span class="function"><a href="function.pg-meta-data.php" class="function">pg_meta_data()</a></span>,
     <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>,
     <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>,
     <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-close.php" class="function">pg_close()</a></span>
    </td>
    <td>Link to PostgreSQL database (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>pgsql link persistent</td>
    <td>
     <span class="function"><a href="function.pg-pconnect.php" class="function">pg_pconnect()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-affected-rows.php" class="function">pg_affected_rows()</a></span>,
     <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>,
     <span class="function"><a href="function.pg-send-query.php" class="function">pg_send_query()</a></span>,
     <span class="function"><a href="function.pg-get-result.php" class="function">pg_get_result()</a></span>,
     <span class="function"><a href="function.pg-connection-busy.php" class="function">pg_connection_busy()</a></span>,
     <span class="function"><a href="function.pg-connection-reset.php" class="function">pg_connection_reset()</a></span>,
     <span class="function"><a href="function.pg-connection-status.php" class="function">pg_connection_status()</a></span>,
     <span class="function"><a href="function.pg-last-error.php" class="function">pg_last_error()</a></span>,
     <span class="function"><a href="function.pg-last-notice.php" class="function">pg_last_notice()</a></span>,
     <span class="function"><a href="function.pg-lo-create.php" class="function">pg_lo_create()</a></span>,
     <span class="function"><a href="function.pg-lo-export.php" class="function">pg_lo_export()</a></span>,
     <span class="function"><a href="function.pg-lo-import.php" class="function">pg_lo_import()</a></span>,
     <span class="function"><a href="function.pg-lo-open.php" class="function">pg_lo_open()</a></span>,
     <span class="function"><a href="function.pg-lo-unlink.php" class="function">pg_lo_unlink()</a></span>,
     <span class="function"><a href="function.pg-host.php" class="function">pg_host()</a></span>,
     <span class="function"><a href="function.pg-port.php" class="function">pg_port()</a></span>,
     <span class="function"><a href="function.pg-dbname.php" class="function">pg_dbname()</a></span>,
     <span class="function"><a href="function.pg-options.php" class="function">pg_options()</a></span>,
     <span class="function"><a href="function.pg-copy-from.php" class="function">pg_copy_from()</a></span>,
     <span class="function"><a href="function.pg-copy-to.php" class="function">pg_copy_to()</a></span>,
     <span class="function"><a href="function.pg-end-copy.php" class="function">pg_end_copy()</a></span>,
     <span class="function"><a href="function.pg-put-line.php" class="function">pg_put_line()</a></span>,
     <span class="function"><a href="function.pg-tty.php" class="function">pg_tty()</a></span>,
     <span class="function"><a href="function.pg-trace.php" class="function">pg_trace()</a></span>,
     <span class="function"><a href="function.pg-untrace.php" class="function">pg_untrace()</a></span>,
     <span class="function"><a href="function.pg-set-client-encoding.php" class="function">pg_set_client_encoding()</a></span>,
     <span class="function"><a href="function.pg-client-encoding.php" class="function">pg_client_encoding()</a></span>,
     <span class="function"><a href="function.pg-meta-data.php" class="function">pg_meta_data()</a></span>,
     <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>,
     <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>,
     <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span>
    </td>
    <td>
     None
    </td>
    <td>Persistent link to PostgreSQL database</td>
   </tr>

   <tr>
    <td>pgsql result</td>
    <td>
     <span class="function"><a href="function.pg-execute.php" class="function">pg_execute()</a></span>,
     <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>,
     <span class="function"><a href="function.pg-query-params.php" class="function">pg_query_params()</a></span>,
     <span class="function"><a href="function.pg-get-result.php" class="function">pg_get_result()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-fetch-array.php" class="function">pg_fetch_array()</a></span>,
     <span class="function"><a href="function.pg-fetch-object.php" class="function">pg_fetch_object()</a></span>,
     <span class="function"><a href="function.pg-fetch-result.php" class="function">pg_fetch_result()</a></span>,
     <span class="function"><a href="function.pg-fetch-row.php" class="function">pg_fetch_row()</a></span>,
     <span class="function"><a href="function.pg-field-is-null.php" class="function">pg_field_is_null()</a></span>,
     <span class="function"><a href="function.pg-field-name.php" class="function">pg_field_name()</a></span>,
     <span class="function"><a href="function.pg-field-num.php" class="function">pg_field_num()</a></span>,
     <span class="function"><a href="function.pg-field-prtlen.php" class="function">pg_field_prtlen()</a></span>,
     <span class="function"><a href="function.pg-field-size.php" class="function">pg_field_size()</a></span>,
     <span class="function"><a href="function.pg-field-type.php" class="function">pg_field_type()</a></span>,
     <span class="function"><a href="function.pg-last-oid.php" class="function">pg_last_oid()</a></span>,
     <span class="function"><a href="function.pg-num-fields.php" class="function">pg_num_fields()</a></span>,
     <span class="function"><a href="function.pg-num-rows.php" class="function">pg_num_rows()</a></span>,
     <span class="function"><a href="function.pg-result-error.php" class="function">pg_result_error()</a></span>,
     <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pg-free-result.php" class="function">pg_free_result()</a></span>
    </td>
    <td>PostgreSQL result (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
     <td>pgsql string</td>
     <td> </td>
     <td> </td>
     <td> </td>
     <td> </td>
    </tr>

   <tr>
    <td>process</td>
    <td><span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span></td>
    <td>
     <span class="function"><a href="function.proc-get-status.php" class="function">proc_get_status()</a></span>
     <span class="function"><a href="function.proc-terminate.php" class="function">proc_terminate()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.proc-close.php" class="function">proc_close()</a></span>
    </td>
    <td>
     Process
    </td>
   </tr>

   <tr>
    <td>pspell</td>
    <td>
     <span class="function"><a href="function.pspell-new.php" class="function">pspell_new()</a></span>,
     <span class="function"><a href="function.pspell-new-config.php" class="function">pspell_new_config()</a></span>,
     <span class="function"><a href="function.pspell-new-personal.php" class="function">pspell_new_personal()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pspell-add-to-personal.php" class="function">pspell_add_to_personal()</a></span>,
     <span class="function"><a href="function.pspell-add-to-session.php" class="function">pspell_add_to_session()</a></span>,
     <span class="function"><a href="function.pspell-check.php" class="function">pspell_check()</a></span>,
     <span class="function"><a href="function.pspell-clear-session.php" class="function">pspell_clear_session()</a></span>,
     <span class="function"><a href="function.pspell-config-ignore.php" class="function">pspell_config_ignore()</a></span>,
     <span class="function"><a href="function.pspell-config-mode.php" class="function">pspell_config_mode()</a></span>,
     <span class="function"><a href="function.pspell-config-personal.php" class="function">pspell_config_personal()</a></span>,
     <span class="function"><a href="function.pspell-config-repl.php" class="function">pspell_config_repl()</a></span>,
     <span class="function"><a href="function.pspell-config-runtogether.php" class="function">pspell_config_runtogether()</a></span>,
     <span class="function"><a href="function.pspell-config-save-repl.php" class="function">pspell_config_save_repl()</a></span>,
     <span class="function"><a href="function.pspell-save-wordlist.php" class="function">pspell_save_wordlist()</a></span>,
     <span class="function"><a href="function.pspell-store-replacement.php" class="function">pspell_store_replacement()</a></span>,
     <span class="function"><a href="function.pspell-suggest.php" class="function">pspell_suggest()</a></span>
    </td>
    <td>
     None
    </td>
    <td>pspell dictionary (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>pspell config</td>
    <td>
     <span class="function"><a href="function.pspell-config-create.php" class="function">pspell_config_create()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pspell-new-config.php" class="function">pspell_new_config()</a></span>
    </td>
    <td>
     None
    </td>
    <td>pspell configuration (prior to PHP 8.1.0)</td>
   </tr>

   <tr>
    <td>shmop</td>
    <td>
     <span class="function"><a href="function.shmop-open.php" class="function">shmop_open()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.shmop-read.php" class="function">shmop_read()</a></span>,
     <span class="function"><a href="function.shmop-write.php" class="function">shmop_write()</a></span>,
     <span class="function"><a href="function.shmop-size.php" class="function">shmop_size()</a></span>,
     <span class="function"><a href="function.shmop-delete.php" class="function">shmop_delete()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.shmop-close.php" class="function">shmop_close()</a></span>
    </td>
    <td>Shared memory block handle (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>Socket</td>
    <td>
     <span class="function"><a href="function.socket-accept.php" class="function">socket_accept()</a></span>,
     <span class="function"><a href="function.socket-addrinfo-bind.php" class="function">socket_addrinfo_bind()</a></span>,
     <span class="function"><a href="function.socket-addrinfo-connect.php" class="function">socket_addrinfo_connect()</a></span>,
     <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>,
     <span class="function"><a href="function.socket-create-listen.php" class="function">socket_create_listen()</a></span>,
     <span class="function"><a href="function.socket-import-stream.php" class="function">socket_import_stream()</a></span>,
     <span class="function"><a href="function.socket-wsaprotocol-info-import.php" class="function">socket_wsaprotocol_info_import()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.socket-accept.php" class="function">socket_accept()</a></span>,
     <span class="function"><a href="function.socket-bind.php" class="function">socket_bind()</a></span>,
     <span class="function"><a href="function.socket-clear-error.php" class="function">socket_clear_error()</a></span>,
     <span class="function"><a href="function.socket-connect.php" class="function">socket_connect()</a></span>,
     <span class="function"><a href="function.socket-get-option.php" class="function">socket_get_option()</a></span>,
     <span class="function"><a href="function.socket-getpeername.php" class="function">socket_getpeername()</a></span>,
     <span class="function"><a href="function.socket-getsockname.php" class="function">socket_getsockname()</a></span>,
     <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>,
     <span class="function"><a href="function.socket-listen.php" class="function">socket_listen()</a></span>,
     <span class="function"><a href="function.socket-read.php" class="function">socket_read()</a></span>,
     <span class="function"><a href="function.socket-recv.php" class="function">socket_recv()</a></span>,
     <span class="function"><a href="function.socket-recvfrom.php" class="function">socket_recvfrom()</a></span>,
     <span class="function"><a href="function.socket-recvmsg.php" class="function">socket_recvmsg()</a></span>,
     <span class="function"><a href="function.socket-select.php" class="function">socket_select()</a></span>,
     <span class="function"><a href="function.socket-send.php" class="function">socket_send()</a></span>,
     <span class="function"><a href="function.socket-sendmsg.php" class="function">socket_sendmsg()</a></span>,
     <span class="function"><a href="function.socket-sendto.php" class="function">socket_sendto()</a></span>,
     <span class="function"><a href="function.socket-set-block.php" class="function">socket_set_block()</a></span>,
     <span class="function"><a href="function.socket-set-nonblock.php" class="function">socket_set_nonblock()</a></span>,
     <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>,
     <span class="function"><a href="function.socket-shutdown.php" class="function">socket_shutdown()</a></span>,
     <span class="function"><a href="function.socket-write.php" class="function">socket_write()</a></span>,
     <span class="function"><a href="function.socket-wsaprotocol-info-export.php" class="function">socket_wsaprotocol_info_export()</a></span>,
     <span class="function"><a href="function.socket-wsaprotocol-info-release.php" class="function">socket_wsaprotocol_info_release()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.socket-close.php" class="function">socket_close()</a></span>
    </td>
    <td>Socket (sockets extension)</td>
   </tr>

   <tr>
    <td>stream</td>
    <td>
     <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.readdir.php" class="function">readdir()</a></span>,
     <span class="function"><a href="function.rewinddir.php" class="function">rewinddir()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.closedir.php" class="function">closedir()</a></span>
    </td>
    <td>Dir handle</td>
   </tr>

   <tr>
    <td>stream</td>
    <td>
     <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>,
     <span class="function"><a href="function.tmpfile.php" class="function">tmpfile()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.feof.php" class="function">feof()</a></span>,
     <span class="function"><a href="function.fflush.php" class="function">fflush()</a></span>,
     <span class="function"><a href="function.fgetc.php" class="function">fgetc()</a></span>,
     <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>,
     <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>,
     <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span>,
     <span class="function"><a href="function.flock.php" class="function">flock()</a></span>,
     <span class="function"><a href="function.fpassthru.php" class="function">fpassthru()</a></span>,
     <span class="function"><a href="function.fputs.php" class="function">fputs()</a></span>,
     <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span>,
     <span class="function"><a href="function.fread.php" class="function">fread()</a></span>,
     <span class="function"><a href="function.fseek.php" class="function">fseek()</a></span>,
     <span class="function"><a href="function.ftell.php" class="function">ftell()</a></span>,
     <span class="function"><a href="function.fstat.php" class="function">fstat()</a></span>,
     <span class="function"><a href="function.ftruncate.php" class="function">ftruncate()</a></span>,
     <span class="function"><a href="function.set-file-buffer.php" class="function">set_file_buffer()</a></span>,
     <span class="function"><a href="function.rewind.php" class="function">rewind()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span>
    </td>
    <td>File handle</td>
   </tr>

   <tr>
    <td>stream</td>
    <td>
     <span class="function"><a href="function.popen.php" class="function">popen()</a></span>,
     <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span>,
     <span class="function"><a href="function.pfsockopen.php" class="function">pfsockopen()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.feof.php" class="function">feof()</a></span>,
     <span class="function"><a href="function.fflush.php" class="function">fflush()</a></span>,
     <span class="function"><a href="function.fgetc.php" class="function">fgetc()</a></span>,
     <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>,
     <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>,
     <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span>,
     <span class="function"><a href="function.fpassthru.php" class="function">fpassthru()</a></span>,
     <span class="function"><a href="function.fputs.php" class="function">fputs()</a></span>,
     <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span>,
     <span class="function"><a href="function.fread.php" class="function">fread()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.pclose.php" class="function">pclose()</a></span>
    </td>
    <td>Process handle</td>
   </tr>

   <tr>
    <td>socket</td>
    <td>
    </td>
    <td>
     <span class="function"><a href="function.fflush.php" class="function">fflush()</a></span>,
     <span class="function"><a href="function.fgetc.php" class="function">fgetc()</a></span>,
     <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>,
     <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>,
     <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span>,
     <span class="function"><a href="function.fpassthru.php" class="function">fpassthru()</a></span>,
     <span class="function"><a href="function.fputs.php" class="function">fputs()</a></span>,
     <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span>,
     <span class="function"><a href="function.fread.php" class="function">fread()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span>
    </td>
    <td>Socket handle</td>
   </tr>

   <tr>
    <td>SSH2 Session</td>
    <td>
     <span class="function"><a href="function.ssh2-connect.php" class="function">ssh2_connect()</a></span>
    </td>
    <td>
    </td>
    <td>
     <span class="function"><a href="function.ssh2-disconnect.php" class="function">ssh2_disconnect()</a></span>
    </td>
    <td class="empty">&nbsp;</td>
   </tr>

   <tr>
    <td>SSH2 Listener</td>
    <td>
     <span class="function"><a href="function.ssh2-forward-listen.php" class="function">ssh2_forward_listen()</a></span>
    </td>
    <td>
    </td>
    <td>
     <span class="function">
    </td>
    <td class="empty">&nbsp;</td>
   </tr>

   <tr>
    <td>SSH2 SFTP</td>
    <td>
     <span class="function"><a href="function.ssh2-sftp.php" class="function">ssh2_sftp()</a></span>
    </td>
    <td>
    </td>
    <td>
     <span class="function">
    </td>
    <td class="empty">&nbsp;</td>
   </tr>

   <tr>
    <td>SSH2 Publickey Subsystem</td>
    <td>
     <span class="function"><a href="function.ssh2-publickey-init.php" class="function">ssh2_publickey_init()</a></span>
    </td>
    <td>
    </td>
    <td>
     <span class="function">
    </td>
    <td class="empty">&nbsp;</td>
   </tr>

   <tr>
    <td>sysvmsg queue</td>
    <td>
     <span class="function"><a href="function.msg-get-queue.php" class="function">msg_get_queue()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.msg-queue-exists.php" class="function">msg_queue_exists()</a></span>,
     <span class="function"><a href="function.msg-receive.php" class="function">msg_receive()</a></span>,
     <span class="function"><a href="function.msg-send.php" class="function">msg_send()</a></span>,
     <span class="function"><a href="function.msg-set-queue.php" class="function">msg_set_queue()</a></span>,
     <span class="function"><a href="function.msg-stat-queue.php" class="function">msg_stat_queue()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.msg-remove-queue.php" class="function">msg_remove_queue()</a></span>
    </td>
    <td>System V Message Queue (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>sysvsem</td>
    <td>
     <span class="function"><a href="function.sem-get.php" class="function">sem_get()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.sem-acquire.php" class="function">sem_acquire()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.sem-release.php" class="function">sem_release()</a></span>
    </td>
    <td>System V Semaphore (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>sysvshm</td>
    <td>
     <span class="function"><a href="function.shm-attach.php" class="function">shm_attach()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.shm-remove.php" class="function">shm_remove()</a></span>,
     <span class="function"><a href="function.shm-put-var.php" class="function">shm_put_var()</a></span>,
     <span class="function"><a href="function.shm-get-var.php" class="function">shm_get_var()</a></span>,
     <span class="function"><a href="function.shm-remove-var.php" class="function">shm_remove_var()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.shm-detach.php" class="function">shm_detach()</a></span>
    </td>
    <td>System V Shared Memory (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>wddx</td>
    <td>
     <span class="function"><a href="function.wddx-packet-start.php" class="function">wddx_packet_start()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.wddx-add-vars.php" class="function">wddx_add_vars()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.wddx-packet-end.php" class="function">wddx_packet_end()</a></span>
    </td>
    <td>WDDX packet</td>
   </tr>

   <tr>
    <td>xml</td>
    <td>
     <span class="function"><a href="function.xml-parser-create.php" class="function">xml_parser_create()</a></span>,
     <span class="function"><a href="function.xml-parser-create-ns.php" class="function">xml_parser_create_ns()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span>,
     <span class="function"><a href="function.xml-set-element-handler.php" class="function">xml_set_element_handler()</a></span>,
     <span class="function"><a href="function.xml-set-character-data-handler.php" class="function">xml_set_character_data_handler()</a></span>,
     <span class="function"><a href="function.xml-set-processing-instruction-handler.php" class="function">xml_set_processing_instruction_handler()</a></span>,
     <span class="function"><a href="function.xml-set-default-handler.php" class="function">xml_set_default_handler()</a></span>,
     <span class="function"><a href="function.xml-set-unparsed-entity-decl-handler.php" class="function">xml_set_unparsed_entity_decl_handler()</a></span>,
     <span class="function"><a href="function.xml-set-notation-decl-handler.php" class="function">xml_set_notation_decl_handler()</a></span>,
     <span class="function"><a href="function.xml-set-external-entity-ref-handler.php" class="function">xml_set_external_entity_ref_handler()</a></span>,
     <span class="function"><a href="function.xml-parse.php" class="function">xml_parse()</a></span>,
     <span class="function"><a href="function.xml-get-error-code.php" class="function">xml_get_error_code()</a></span>,
     <span class="function"><a href="function.xml-error-string.php" class="function">xml_error_string()</a></span>,
     <span class="function"><a href="function.xml-get-current-line-number.php" class="function">xml_get_current_line_number()</a></span>,
     <span class="function"><a href="function.xml-get-current-column-number.php" class="function">xml_get_current_column_number()</a></span>,
     <span class="function"><a href="function.xml-get-current-byte-index.php" class="function">xml_get_current_byte_index()</a></span>,
     <span class="function"><a href="function.xml-parse-into-struct.php" class="function">xml_parse_into_struct()</a></span>,
     <span class="function"><a href="function.xml-parser-set-option.php" class="function">xml_parser_set_option()</a></span>,
     <span class="function"><a href="function.xml-parser-get-option.php" class="function">xml_parser_get_option()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.xml-parser-free.php" class="function">xml_parser_free()</a></span>
    </td>
    <td>XML parser (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>zlib</td>
    <td>
     <span class="function"><a href="function.gzopen.php" class="function">gzopen()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.gzeof.php" class="function">gzeof()</a></span>,
     <span class="function"><a href="function.gzgetc.php" class="function">gzgetc()</a></span>,
     <span class="function"><a href="function.gzgets.php" class="function">gzgets()</a></span>,
     <span class="function"><a href="function.gzgetss.php" class="function">gzgetss()</a></span>,
     <span class="function"><a href="function.gzpassthru.php" class="function">gzpassthru()</a></span>,
     <span class="function"><a href="function.gzputs.php" class="function">gzputs()</a></span>,
     <span class="function"><a href="function.gzread.php" class="function">gzread()</a></span>,
     <span class="function"><a href="function.gzrewind.php" class="function">gzrewind()</a></span>,
     <span class="function"><a href="function.gzseek.php" class="function">gzseek()</a></span>,
     <span class="function"><a href="function.gztell.php" class="function">gztell()</a></span>,
     <span class="function"><a href="function.gzwrite.php" class="function">gzwrite()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.gzclose.php" class="function">gzclose()</a></span>
    </td>
    <td>gz-compressed file</td>
   </tr>

   <tr>
    <td>zlib.deflate</td>
    <td>
     <span class="function"><a href="function.deflate-init.php" class="function">deflate_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.deflate-add.php" class="function">deflate_add()</a></span>
    </td>
    <td>
     None
    </td>
    <td>incremental deflate context (prior to PHP 8.0.0)</td>
   </tr>

   <tr>
    <td>zlib.inflate</td>
    <td>
     <span class="function"><a href="function.inflate-init.php" class="function">inflate_init()</a></span>
    </td>
    <td>
     <span class="function"><a href="function.inflate-add.php" class="function">inflate_add()</a></span>,
     <span class="function"><a href="function.inflate-get-read-len.php" class="function">inflate_get_read_len()</a></span>,
     <span class="function"><a href="function.inflate-get-status.php" class="function">inflate_get_status()</a></span>
    </td>
    <td>
     None
    </td>
    <td>incremental inflate context (prior to PHP 8.0.0)</td>
   </tr>

       </tbody>
   
  </table>

 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/resources.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fresource%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=resource&amp;repo=en&amp;redirect=https://www.php.net/manual/en/resource.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="appendices.php">Appendices</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="history.php" title="History of PHP and Related Projects">History of PHP and Related Projects</a>
                        </li>
                                                <li class="">
                            <a href="examples.php" title="About manual examples">About manual examples</a>
                        </li>
                                                <li class="">
                            <a href="migration84.php" title="Migrating from PHP 8.3.x to PHP 8.4.x">Migrating from PHP 8.3.x to PHP 8.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration83.php" title="Migrating from PHP 8.2.x to PHP 8.3.x">Migrating from PHP 8.2.x to PHP 8.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration82.php" title="Migrating from PHP 8.1.x to PHP 8.2.x">Migrating from PHP 8.1.x to PHP 8.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration81.php" title="Migrating from PHP 8.0.x to PHP 8.1.x">Migrating from PHP 8.0.x to PHP 8.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration80.php" title="Migrating from PHP 7.4.x to PHP 8.0.x">Migrating from PHP 7.4.x to PHP 8.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration74.php" title="Migrating from PHP 7.3.x to PHP 7.4.x">Migrating from PHP 7.3.x to PHP 7.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration73.php" title="Migrating from PHP 7.2.x to PHP 7.3.x">Migrating from PHP 7.2.x to PHP 7.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.php" title="Migrating from PHP 7.1.x to PHP 7.2.x">Migrating from PHP 7.1.x to PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.php" title="Migrating from PHP 7.0.x to PHP 7.1.x">Migrating from PHP 7.0.x to PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.php" title="Migrating from PHP 5.6.x to PHP 7.0.x">Migrating from PHP 5.6.x to PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.php" title="Migrating from PHP 5.5.x to PHP 5.6.x">Migrating from PHP 5.5.x to PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="debugger.php" title="Debugging in PHP">Debugging in PHP</a>
                        </li>
                                                <li class="">
                            <a href="configure.php" title="Configure options">Configure options</a>
                        </li>
                                                <li class="">
                            <a href="ini.php" title="php.ini directives">php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="extensions.php" title="Extension List/Categorization">Extension List/Categorization</a>
                        </li>
                                                <li class="">
                            <a href="aliases.php" title="List of Function Aliases">List of Function Aliases</a>
                        </li>
                                                <li class="">
                            <a href="reserved.php" title="List of Reserved Words">List of Reserved Words</a>
                        </li>
                                                <li class="current">
                            <a href="resource.php" title="List of Resource Types">List of Resource Types</a>
                        </li>
                                                <li class="">
                            <a href="filters.php" title="List of Available Filters">List of Available Filters</a>
                        </li>
                                                <li class="">
                            <a href="transports.php" title="List of Supported Socket Transports">List of Supported Socket Transports</a>
                        </li>
                                                <li class="">
                            <a href="types.comparisons.php" title="PHP type comparison tables">PHP type comparison tables</a>
                        </li>
                                                <li class="">
                            <a href="tokens.php" title="List of Parser Tokens">List of Parser Tokens</a>
                        </li>
                                                <li class="">
                            <a href="userlandnaming.php" title="Userland Naming Guide">Userland Naming Guide</a>
                        </li>
                                                <li class="">
                            <a href="about.php" title="About the manual">About the manual</a>
                        </li>
                                                <li class="">
                            <a href="cc.license.php" title="Creative Commons Attribution 3.0">Creative Commons Attribution 3.0</a>
                        </li>
                                                <li class="">
                            <a href="indexes.php" title="Index listing">Index listing</a>
                        </li>
                                                <li class="">
                            <a href="doc.changelog.php" title="Changelog">Changelog</a>
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
