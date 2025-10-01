<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: db2_bind_param - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.db2-bind-param.php">
 <link rel="shorturl" href="https://www.php.net/db2-bind-param">
 <link rel="alternate" href="https://www.php.net/db2-bind-param" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ibm-db2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.db2-autocommit.php">
 <link rel="next" href="https://www.php.net/manual/en/function.db2-client-info.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.db2-bind-param.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.db2-bind-param.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.db2-bind-param.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.db2-bind-param.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.db2-bind-param.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.db2-bind-param.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.db2-bind-param.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.db2-bind-param.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.db2-bind-param.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.db2-bind-param.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.db2-bind-param.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds a PHP variable to an SQL statement parameter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: db2_bind_param - Manual" />
<meta name="twitter:description" content="Binds a PHP variable to an SQL statement parameter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: db2_bind_param - Manual" />
<meta itemprop="description" content="Binds a PHP variable to an SQL statement parameter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds a PHP variable to an SQL statement parameter" />

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
        <a href="function.db2-client-info.php">
          db2_client_info &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.db2-autocommit.php">
          &laquo; db2_autocommit        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibm-db2.php'>IBM DB2</a></li>      <li><a href='ref.ibm-db2.php'>IBM DB2 Functions</a></li>      </ul>
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
            <option value='en/function.db2-bind-param.php' selected="selected">English</option>
            <option value='de/function.db2-bind-param.php'>German</option>
            <option value='es/function.db2-bind-param.php'>Spanish</option>
            <option value='fr/function.db2-bind-param.php'>French</option>
            <option value='it/function.db2-bind-param.php'>Italian</option>
            <option value='ja/function.db2-bind-param.php'>Japanese</option>
            <option value='pt_BR/function.db2-bind-param.php'>Brazilian Portuguese</option>
            <option value='ru/function.db2-bind-param.php'>Russian</option>
            <option value='tr/function.db2-bind-param.php'>Turkish</option>
            <option value='uk/function.db2-bind-param.php'>Ukrainian</option>
            <option value='zh/function.db2-bind-param.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.db2-bind-param" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">db2_bind_param</h1>
  <p class="verinfo">(PECL ibm_db2 &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">db2_bind_param</span> &mdash; <span class="dc-title">
   Binds a PHP variable to an SQL statement parameter
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.db2-bind-param-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>db2_bind_param</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stmt</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$parameter_number</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$variable_name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$parameter_type</code><span class="initializer"> = <strong><code><a href="ibm-db2.constants.php#constant.db2-param-in">DB2_PARAM_IN</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$data_type</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$precision</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$scale</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


  <p class="para rdfs-comment">
   Binds a PHP variable to an SQL statement parameter in a statement resource
   returned by <span class="function"><a href="function.db2-prepare.php" class="function">db2_prepare()</a></span>. This function gives you more
   control over the parameter type, data type, precision, and scale for the
   parameter than simply passing the variable as part of the optional input
   array to <span class="function"><a href="function.db2-execute.php" class="function">db2_execute()</a></span>.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.db2-bind-param-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stmt</code></dt>
     <dd>
      <p class="para">
       A prepared statement returned from <span class="function"><a href="function.db2-prepare.php" class="function">db2_prepare()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">parameter_number</code></dt>
     <dd>
      <p class="para">
       Specifies the 1-indexed position of the parameter in the prepared
       statement.
      </p>
     </dd>
    
    
    <dt><code class="parameter">variable_name</code></dt>
     <dd>
      <p class="para">
       A string specifying the name of the PHP variable to bind to the
       parameter specified by <code class="parameter">parameter_number</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">parameter_type</code></dt>
     <dd>
      <p class="para">
       A constant specifying whether the PHP variable should be bound to the
       SQL parameter as an input parameter (<strong><code><a href="ibm-db2.constants.php#constant.db2-param-in">DB2_PARAM_IN</a></code></strong>),
       an output parameter (<strong><code><a href="ibm-db2.constants.php#constant.db2-param-out">DB2_PARAM_OUT</a></code></strong>), or as a
       parameter that accepts input and returns output
       (<strong><code><a href="ibm-db2.constants.php#constant.db2-param-inout">DB2_PARAM_INOUT</a></code></strong>). To avoid memory overhead, you can
       also specify <strong><code><a href="ibm-db2.constants.php#constant.db2-param-file">DB2_PARAM_FILE</a></code></strong> to bind the PHP variable
       to the name of a file that contains large object (BLOB, CLOB, or DBCLOB)
       data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data_type</code></dt>
     <dd>
      <p class="para">
       A constant specifying the SQL data type that the PHP variable should be
       bound as: one of <strong><code><a href="ibm-db2.constants.php#constant.db2-binary">DB2_BINARY</a></code></strong>,
       <strong><code><a href="ibm-db2.constants.php#constant.db2-char">DB2_CHAR</a></code></strong>, <code class="literal">DB2_DOUBLE</code>, or
       <strong><code><a href="ibm-db2.constants.php#constant.db2-long">DB2_LONG</a></code></strong> .
      </p>
     </dd>
    
    
     <dt><code class="parameter">precision</code></dt>
     <dd>
      <p class="para">
       Specifies the precision with which the variable should be bound to the
       database. This parameter can also be used for retrieving XML output values 
       from stored procedures. A non-negative value specifies the maximum size of 
       the XML data that will be retrieved from the database. If this parameter 
       is not used, a default of 1MB will be assumed for retrieving the XML 
       output value from the stored procedure.
      </p>
     </dd>
    
    
     <dt><code class="parameter">scale</code></dt>
     <dd>
      <p class="para">
       Specifies the scale with which the variable should be bound to the
       database.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.db2-bind-param-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.db2-bind-param-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1341">
    <p><strong>Example #1 Binding PHP variables to a prepared statement</strong></p>
    <div class="example-contents"><p>
     The SQL statement in the following example uses two input parameters in
     the WHERE clause. We call <span class="function"><strong>db2_bind_param()</strong></span> to bind two
     PHP variables to the corresponding SQL parameters. Notice that the PHP
     variables do not have to be declared or assigned before the call to
     <span class="function"><strong>db2_bind_param()</strong></span>; in the example,
     <code class="literal">$lower_limit</code> is assigned a value before the call to
     <span class="function"><strong>db2_bind_param()</strong></span>, but <code class="literal">$upper_limit</code>
     is assigned a value after the call to
     <span class="function"><strong>db2_bind_param()</strong></span>. The variables must be bound and, for
     parameters that accept input, must have any value assigned, before calling
     <span class="function"><a href="function.db2-execute.php" class="function">db2_execute()</a></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT name, breed, weight FROM animals<br />    WHERE weight &gt; ? AND weight &lt; ?'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$database</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// We can declare the variable before calling db2_bind_param()<br /></span><span style="color: #0000BB">$lower_limit </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"lower_limit"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_IN</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"upper_limit"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_IN</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// We can also declare the variable after calling db2_bind_param()<br /></span><span style="color: #0000BB">$upper_limit </span><span style="color: #007700">= </span><span style="color: #0000BB">15.0</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">db2_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />        print </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Pook, cat, 3.2
Rickety Ride, goat, 9.7
Peaches, dog, 12.3</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1342">
    <p><strong>Example #2 Calling stored procedures with IN and OUT parameters</strong></p>
    <div class="example-contents"><p>
     The stored procedure match_animal in the following example accepts
     three different parameters:
     <ol type="1">
      <li class="listitem">
       <p class="para">
        an input (IN) parameter that accepts the name of the first animal as
        input
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        an input-output (INOUT) parameter that accepts the name of the second
        animal as input and returns the string <code class="literal">TRUE</code> if an
        animal in the database matches that name
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        an output (OUT) parameter that returns the sum of the weight of the
        two identified animals
       </p>
      </li>
     </ol>
     In addition, the stored procedure returns a result set consisting of the
     animals listed in alphabetic order starting at the animal corresponding
     to the input value of the first parameter and ending at the animal
     corresponding to the input value of the second parameter.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'CALL match_animal(?, ?, ?)'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$database</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">"Peaches"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$second_name </span><span style="color: #007700">= </span><span style="color: #DD0000">"Rickety Ride"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$weight </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_IN</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"second_name"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_INOUT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">"weight"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_OUT</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"Values of bound parameters _before_ CALL:\n"</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"  1: </span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000"> 2: </span><span style="color: #007700">{</span><span style="color: #0000BB">$second_name</span><span style="color: #007700">}</span><span style="color: #DD0000"> 3: </span><span style="color: #007700">{</span><span style="color: #0000BB">$weight</span><span style="color: #007700">}</span><span style="color: #DD0000">\n\n"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">db2_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />    print </span><span style="color: #DD0000">"Values of bound parameters _after_ CALL:\n"</span><span style="color: #007700">;<br />    print </span><span style="color: #DD0000">"  1: </span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000"> 2: </span><span style="color: #007700">{</span><span style="color: #0000BB">$second_name</span><span style="color: #007700">}</span><span style="color: #DD0000"> 3: </span><span style="color: #007700">{</span><span style="color: #0000BB">$weight</span><span style="color: #007700">}</span><span style="color: #DD0000">\n\n"</span><span style="color: #007700">;<br /><br />    print </span><span style="color: #DD0000">"Results:\n"</span><span style="color: #007700">;<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />        print </span><span style="color: #DD0000">"  </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">, </span><span style="color: #007700">{</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Values of bound parameters _before_ CALL:
  1: Peaches 2: Rickety Ride 3: 0

Values of bound parameters _after_ CALL:
  1: Peaches 2: TRUE 3: 22

Results:
  Peaches, dog, 12.3
  Pook, cat, 3.2
  Rickety Ride, goat, 9.7</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1343">
    <p><strong>Example #3 Inserting a binary large object (BLOB) directly from a file</strong></p>
    <div class="example-contents"><p>
     The data for large objects are typically stored in files, such as XML
     documents or audio files. Rather than reading an entire file into a PHP
     variable, and then binding that PHP variable into an SQL statement, you
     can avoid some memory overhead by binding the file directly to the input
     parameter of your SQL statement. The following example demonstrates how
     to bind a file directly into a BLOB column.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"INSERT INTO animal_pictures(picture) VALUES (?)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$picture </span><span style="color: #007700">= </span><span style="color: #DD0000">"/opt/albums/spook/grooming.jpg"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$rc </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"picture"</span><span style="color: #007700">, </span><span style="color: #0000BB">DB2_PARAM_FILE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rc </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.db2-bind-param-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.db2-execute.php" class="function" rel="rdfs-seeAlso">db2_execute()</a> - Executes a prepared SQL statement</span></li>
    <li><span class="function"><a href="function.db2-prepare.php" class="function" rel="rdfs-seeAlso">db2_prepare()</a> - Prepares an SQL statement to be executed</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ibm_db2/functions/db2-bind-param.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.db2-bind-param%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.db2-bind-param&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-bind-param.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126536">  <div class="votes">
    <div id="Vu126536">
    <a href="/manual/vote-note.php?id=126536&amp;page=function.db2-bind-param&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126536">
    <a href="/manual/vote-note.php?id=126536&amp;page=function.db2-bind-param&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126536" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126536" class="name">
  <strong class="user"><em>bravo1_r at hotmail dot com</em></strong></a><a class="genanchor" href="#126536"> &para;</a><div class="date" title="2021-10-25 01:00"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126536">
<div class="phpcode"><code><span class="html">Important when using classes:<br />You must call db2_execute() in the same scope as where you define / set / bind the variables.<br />For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">DB2Class </span><span class="keyword">{<br />    public </span><span class="default">$conn</span><span class="keyword">;<br />    private </span><span class="default">$usr </span><span class="keyword">= </span><span class="string">'user'</span><span class="keyword">;<br />    private </span><span class="default">$pss </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;<br />    private </span><span class="default">$cat </span><span class="keyword">= </span><span class="string">'catalog'</span><span class="keyword">;<br />    public function </span><span class="default">db2_conn</span><span class="keyword">(){<br />        </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">db2_connect</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cat</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">usr</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pss</span><span class="keyword">);<br />        if(!</span><span class="default">$conn</span><span class="keyword">)<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">db2_conn_errormsg</span><span class="keyword">());<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">db2_prep</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">){<br />        if(!</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">db2_prepare</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">)){<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">$sql </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">db2_stmt_errormsg</span><span class="keyword">());<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$stmt</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">db2_exec</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">){<br />        if(!</span><span class="default">db2_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">db2_stmt_errormsg</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">));<br />    }<br />}<br /><br /></span><span class="comment">/* This will NOT work */<br /></span><span class="keyword">function </span><span class="default">bindtest</span><span class="keyword">(){<br />    try {<br />        </span><span class="default">$db2 </span><span class="keyword">= new </span><span class="default">DB2Class</span><span class="keyword">;<br />        </span><span class="default">$db2</span><span class="keyword">-&gt;</span><span class="default">db2_conn</span><span class="keyword">();<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db2</span><span class="keyword">-&gt;</span><span class="default">db2_prep</span><span class="keyword">(</span><span class="string">"SELECT * FROM TABLE WHERE FIELD = ?"</span><span class="keyword">);<br />        </span><span class="default">$field </span><span class="keyword">= </span><span class="string">'value'</span><span class="keyword">;<br />        </span><span class="default">db2_bind_param</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">"field"</span><span class="keyword">, </span><span class="default">DB2_PARAM_IN</span><span class="keyword">);<br />        </span><span class="default">$db2</span><span class="keyword">-&gt;</span><span class="default">db2_exec</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);        </span><span class="comment">// Results in Unbound Variable Error<br />        </span><span class="keyword">while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">db2_fetch_assoc</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">))<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br />    } catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />        </span><span class="default">error_log</span><span class="keyword">( </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage </span><span class="keyword">() );<br />    }<br />}<br /><br /></span><span class="comment">/* This will work */<br /></span><span class="keyword">function </span><span class="default">bindtest</span><span class="keyword">(){<br />    try {<br />        </span><span class="default">$db2 </span><span class="keyword">= new </span><span class="default">DB2Class</span><span class="keyword">;<br />        </span><span class="default">$db2</span><span class="keyword">-&gt;</span><span class="default">db2_conn</span><span class="keyword">();<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db2</span><span class="keyword">-&gt;</span><span class="default">db2_prep</span><span class="keyword">(</span><span class="string">"SELECT * FROM TABLE WHERE FIELD = ?"</span><span class="keyword">);<br />        </span><span class="default">$field </span><span class="keyword">= </span><span class="string">'value'</span><span class="keyword">;<br />        </span><span class="default">db2_bind_param</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">"field"</span><span class="keyword">, </span><span class="default">DB2_PARAM_IN</span><span class="keyword">);<br />        if(!</span><span class="default">db2_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">))<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">db2_stmt_errormsg</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">));<br />        while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">db2_fetch_assoc</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">))<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br />    } catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />        </span><span class="default">error_log</span><span class="keyword">( </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage </span><span class="keyword">() );<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.db2-bind-param&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-bind-param.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ibm-db2.php">IBM DB2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.db2-autocommit.php" title="db2_&#8203;autocommit">db2_&#8203;autocommit</a>
                        </li>
                                                <li class="current">
                            <a href="function.db2-bind-param.php" title="db2_&#8203;bind_&#8203;param">db2_&#8203;bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-client-info.php" title="db2_&#8203;client_&#8203;info">db2_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-close.php" title="db2_&#8203;close">db2_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-column-privileges.php" title="db2_&#8203;column_&#8203;privileges">db2_&#8203;column_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-columns.php" title="db2_&#8203;columns">db2_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-commit.php" title="db2_&#8203;commit">db2_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-error.php" title="db2_&#8203;conn_&#8203;error">db2_&#8203;conn_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-errormsg.php" title="db2_&#8203;conn_&#8203;errormsg">db2_&#8203;conn_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-connect.php" title="db2_&#8203;connect">db2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-cursor-type.php" title="db2_&#8203;cursor_&#8203;type">db2_&#8203;cursor_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-escape-string.php" title="db2_&#8203;escape_&#8203;string">db2_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-exec.php" title="db2_&#8203;exec">db2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-execute.php" title="db2_&#8203;execute">db2_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-array.php" title="db2_&#8203;fetch_&#8203;array">db2_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-assoc.php" title="db2_&#8203;fetch_&#8203;assoc">db2_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-both.php" title="db2_&#8203;fetch_&#8203;both">db2_&#8203;fetch_&#8203;both</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-object.php" title="db2_&#8203;fetch_&#8203;object">db2_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-row.php" title="db2_&#8203;fetch_&#8203;row">db2_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-display-size.php" title="db2_&#8203;field_&#8203;display_&#8203;size">db2_&#8203;field_&#8203;display_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-name.php" title="db2_&#8203;field_&#8203;name">db2_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-num.php" title="db2_&#8203;field_&#8203;num">db2_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-precision.php" title="db2_&#8203;field_&#8203;precision">db2_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-scale.php" title="db2_&#8203;field_&#8203;scale">db2_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-type.php" title="db2_&#8203;field_&#8203;type">db2_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-width.php" title="db2_&#8203;field_&#8203;width">db2_&#8203;field_&#8203;width</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-foreign-keys.php" title="db2_&#8203;foreign_&#8203;keys">db2_&#8203;foreign_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-result.php" title="db2_&#8203;free_&#8203;result">db2_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-stmt.php" title="db2_&#8203;free_&#8203;stmt">db2_&#8203;free_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-get-option.php" title="db2_&#8203;get_&#8203;option">db2_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-last-insert-id.php" title="db2_&#8203;last_&#8203;insert_&#8203;id">db2_&#8203;last_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-lob-read.php" title="db2_&#8203;lob_&#8203;read">db2_&#8203;lob_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-next-result.php" title="db2_&#8203;next_&#8203;result">db2_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-fields.php" title="db2_&#8203;num_&#8203;fields">db2_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-rows.php" title="db2_&#8203;num_&#8203;rows">db2_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pclose.php" title="db2_&#8203;pclose">db2_&#8203;pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pconnect.php" title="db2_&#8203;pconnect">db2_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-prepare.php" title="db2_&#8203;prepare">db2_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-primary-keys.php" title="db2_&#8203;primary_&#8203;keys">db2_&#8203;primary_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedure-columns.php" title="db2_&#8203;procedure_&#8203;columns">db2_&#8203;procedure_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedures.php" title="db2_&#8203;procedures">db2_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-result.php" title="db2_&#8203;result">db2_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-rollback.php" title="db2_&#8203;rollback">db2_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-server-info.php" title="db2_&#8203;server_&#8203;info">db2_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-set-option.php" title="db2_&#8203;set_&#8203;option">db2_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-special-columns.php" title="db2_&#8203;special_&#8203;columns">db2_&#8203;special_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-statistics.php" title="db2_&#8203;statistics">db2_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-error.php" title="db2_&#8203;stmt_&#8203;error">db2_&#8203;stmt_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-errormsg.php" title="db2_&#8203;stmt_&#8203;errormsg">db2_&#8203;stmt_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-table-privileges.php" title="db2_&#8203;table_&#8203;privileges">db2_&#8203;table_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-tables.php" title="db2_&#8203;tables">db2_&#8203;tables</a>
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
