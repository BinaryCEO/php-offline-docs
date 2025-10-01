<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: win32_create_service - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.win32-create-service.php">
 <link rel="shorturl" href="https://www.php.net/win32-create-service">
 <link rel="alternate" href="https://www.php.net/win32-create-service" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.win32service.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.win32-continue-service.php">
 <link rel="next" href="https://www.php.net/manual/en/function.win32-delete-service.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.win32-create-service.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.win32-create-service.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.win32-create-service.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.win32-create-service.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.win32-create-service.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.win32-create-service.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.win32-create-service.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.win32-create-service.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.win32-create-service.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.win32-create-service.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.win32-create-service.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a new service entry in the SCM database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: win32_create_service - Manual" />
<meta name="twitter:description" content="Creates a new service entry in the SCM database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: win32_create_service - Manual" />
<meta itemprop="description" content="Creates a new service entry in the SCM database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a new service entry in the SCM database" />

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
        <a href="function.win32-delete-service.php">
          win32_delete_service &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.win32-continue-service.php">
          &laquo; win32_continue_service        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.win32service.php'>win32service</a></li>      <li><a href='ref.win32service.php'>win32service Functions</a></li>      </ul>
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
            <option value='en/function.win32-create-service.php' selected="selected">English</option>
            <option value='de/function.win32-create-service.php'>German</option>
            <option value='es/function.win32-create-service.php'>Spanish</option>
            <option value='fr/function.win32-create-service.php'>French</option>
            <option value='it/function.win32-create-service.php'>Italian</option>
            <option value='ja/function.win32-create-service.php'>Japanese</option>
            <option value='pt_BR/function.win32-create-service.php'>Brazilian Portuguese</option>
            <option value='ru/function.win32-create-service.php'>Russian</option>
            <option value='tr/function.win32-create-service.php'>Turkish</option>
            <option value='uk/function.win32-create-service.php'>Ukrainian</option>
            <option value='zh/function.win32-create-service.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.win32-create-service" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">win32_create_service</h1>
  <p class="verinfo">(PECL win32service &gt;=0.1.0)</p><p class="refpurpose"><span class="refname">win32_create_service</span> &mdash; <span class="dc-title">Creates a new service entry in the SCM database</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.win32-create-service-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>win32_create_service</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$details</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$machine</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Attempts to add a service into the SCM database. Administrative
   privileges are required for this to succeed.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.win32-create-service-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">details</code></dt>
     <dd>
      <p class="para">
       An array of service details:
       <dl>
        
         <dt><code class="parameter">service</code></dt>
         <dd>
          <p class="para">
           The short name of the service.  This is the name that you
           will use to control the service using the <code class="literal">net</code>
           command.  The service must be unique (no two services can share the
           same name), and, ideally, should avoid having spaces in the name.
          </p>
         </dd>
        
        
         <dt><code class="parameter">display</code></dt>
         <dd>
          <p class="para">The display name of the service.  This is the name that you
          will see in the Services Applet.
          </p>
         </dd>
        
        
         <dt><code class="parameter">description</code></dt>
         <dd>
          <p class="para">The long description of the service.  This is the description
          that you will see in the Services Applet.
          </p>
         </dd>
        
        
         <dt><code class="parameter">user</code></dt>
         <dd>
          <p class="para">
           The name of the user account under which you want the service to
           run.  If omitted, the service will run as the LocalSystem account.
           If the username is specified, you must also provide a password.
          </p>
         </dd>
        
        
         <dt><code class="parameter">password</code></dt>
         <dd>
          <p class="para">
           The password that corresponds to the <code class="parameter">user</code>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">path</code></dt>
         <dd>
          <p class="para">
           The full path to the executable module that will be launched when
           the service is started.  If omitted, the path to the current PHP
           process will be used.
          </p>
         </dd>
        
        
         <dt><code class="parameter">params</code></dt>
         <dd>
          <p class="para">
           Command line parameters to pass to the service when it starts.
           If you want to run a PHP script as the service, then the first
           parameter should be the full path to the PHP script that you intend
           to run. If the script name or path contains spaces, then wrap the
           full path to the PHP script with <code class="literal">&quot;</code>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">load_order</code></dt>
         <dd>
          <p class="para">
           Controls the load_order.  This is not yet fully supported.
          </p>
         </dd>
        
        
         <dt><code class="parameter">svc_type</code></dt>
         <dd>
          <p class="para">
           Sets the service type.  If omitted, the default value is
           <strong><code><a href="win32service.constants.php#constant.win32-service-win32-own-process">WIN32_SERVICE_WIN32_OWN_PROCESS</a></code></strong>.
           Don&#039;t change this unless you know what you&#039;re doing.
          </p>
         </dd>
        
        
         <dt><code class="parameter">start_type</code></dt>
         <dd>
          <p class="para">
           Specifies how the service should be started.  The default is
           <strong><code><a href="win32service.constants.php#constant.win32-service-auto-start">WIN32_SERVICE_AUTO_START</a></code></strong> which means the
           service will be launched when the machine starts up.
          </p>
         </dd>
        
        
         <dt><code class="parameter">error_control</code></dt>
         <dd>
          <p class="para">
           Informs the SCM what it should do when it detects a problem with
           the service.  The default is
           <strong><code>WIN32_SERVER_ERROR_IGNORE</code></strong>.  Changing this
           value is not yet fully supported.
          </p>
         </dd>
        
        
         <dt><code class="parameter">delayed_start</code></dt>
         <dd>
          <p class="para">
           If <code class="parameter">delayed_start</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, then this
           will inform the SCM that this service should be started after other
           auto-start services are started plus a short delay.
          </p>
          <p class="para">
           Any service can be marked as a delayed auto-start service; however,
           this setting has no effect unless the service&#039;s
           <code class="parameter">start_type</code> is
           <strong><code><a href="win32service.constants.php#constant.win32-service-auto-start">WIN32_SERVICE_AUTO_START</a></code></strong>.
          </p>
          <p class="para">
           This setting is only applicable on Windows Vista and Windows Server
           2008 or greater.
          </p>
         </dd>
        
        
         <dt><code class="parameter">base_priority</code></dt>
         <dd>
          <p class="para">
           To reduce the impact on processor utilisation, it may be necessary
           to set a base priority lower than normal.
          </p>
          <p class="para">
           The <code class="parameter">base_priority</code> can be set to one of the
           constants define in
           <a href="win32service.constants.php#win32service.constants.basepriorities" class="link">Win32 Base Priority Classes</a>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">dependencies</code></dt>
         <dd>
          <p class="para">
           To define the dependencies for your service, it may be necessary to set 
           this parameter to the list of the services names in an array.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_delay</code></dt>
         <dd>
          <p class="para">
           This parameter defines the delay between the fail and the execution 
           of recovery action. The value is in milliseconds.
          </p>
          <p class="para">
           The default value is 60000.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_action_1</code></dt>
         <dd>
          <p class="para">
           The action will be executed on first failure. The default value is 
           <strong><code><a href="win32service.constants.php#constant.win32-sc-action-none">WIN32_SC_ACTION_NONE</a></code></strong>.
          </p>
          <p class="para">
           The <code class="parameter">recovery_action_1</code> can be set to one of the
           constants defined in
           <a href="win32service.constants.php#win32service.constants.recovery-action" class="link">Win32 Recovery action</a>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_action_2</code></dt>
         <dd>
          <p class="para">
           The action will be executed on second failure. The default value is 
           <strong><code><a href="win32service.constants.php#constant.win32-sc-action-none">WIN32_SC_ACTION_NONE</a></code></strong>.
          </p>
          <p class="para">
           The <code class="parameter">recovery_action_2</code> can be set to one of the
           constants defined in
           <a href="win32service.constants.php#win32service.constants.recovery-action" class="link">Win32 Recovery action</a>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_action_3</code></dt>
         <dd>
          <p class="para">
           The action will be executed on next failures. The default value is 
           <strong><code><a href="win32service.constants.php#constant.win32-sc-action-none">WIN32_SC_ACTION_NONE</a></code></strong>.
          </p>
          <p class="para">
           The <code class="parameter">recovery_action_3</code> can be set to one of the
           constants defined in
           <a href="win32service.constants.php#win32service.constants.recovery-action" class="link">Win32 Recovery action</a>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_reset_period</code></dt>
         <dd>
          <p class="para">
           The failure count will be reset after the delay defined in the parameter. The delay is expirement in seconds.
          </p>
          <p class="para">
           The default value is <code class="literal">86400</code>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_enabled</code></dt>
         <dd>
          <p class="para">
           Set this parameter at <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to enable the recovery settings, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> 
           to disable. 
          </p>
          <p class="para">
           The default value is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_reboot_msg</code></dt>
         <dd>
          <p class="para">
           Set this parameter to define the message saved into the Windows Event 
           Log before the reboot. Used only if one action is set to 
           <strong><code><a href="win32service.constants.php#constant.win32-sc-action-reboot">WIN32_SC_ACTION_REBOOT</a></code></strong>.
          </p>
         </dd>
        
        
         <dt><code class="parameter">recovery_command</code></dt>
         <dd>
          <p class="para">
           Set this parameter to define the command executed when one action is defined on  
           <strong><code><a href="win32service.constants.php#constant.win32-sc-action-run-command">WIN32_SC_ACTION_RUN_COMMAND</a></code></strong>.
          </p>
         </dd>
        
       </dl>
      </p>
     </dd>
    
    
     <dt><code class="parameter">machine</code></dt>
     <dd>
      <p class="para">
       The optional machine name on which you want to create a service.
       If omitted, it will use the local machine.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.win32-create-service-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
  <p class="para">
   Prior to version 1.0.0, returned <strong><code><a href="win32service.constants.php#constant.win32-no-error">WIN32_NO_ERROR</a></code></strong> on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there is a problem with the parameters or a <a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Code</a> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.win32-create-service-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">service</code> parameter is empty.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">path</code> parameter is missing or empty.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">svc_type</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">start_type</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">error_control</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">base_priority</code> parameter  is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">recovery_delay</code> parameter is not between 
   0 and PHP_INT_MAX.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">recovery_action_1</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">recovery_action_2</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">recovery_action_3</code> parameter is wrong.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the
   value of <code class="parameter">recovery_reset_period</code> parameter is not 
   between 0 and PHP_INT_MAX.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.win32serviceexception.php" class="classname">Win32ServiceException</a></span> is thrown on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.win32-create-service-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> on invalid data in parameters,
        previously <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        Throws a <span class="classname"><a href="class.win32serviceexception.php" class="classname">Win32ServiceException</a></span> on error,
        previously a 
        <a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Code</a>
        was returned.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        The return type is now <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span>, previously it was <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 0.4.0</td>
       <td>
        The <code class="parameter">dependencies</code>, <code class="parameter">recovery_delay</code>,
        <code class="parameter">recovery_action_1</code>, <code class="parameter">recovery_action_2</code>,
        <code class="parameter">recovery_action_3</code>, <code class="parameter">recovery_reset_period</code>,
        <code class="parameter">recovery_enabled</code>, <code class="parameter">recovery_reboot_msg</code>
        and <code class="parameter">recovery_command</code> parameters have been added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.win32-create-service-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5750">
    <p><strong>Example #1 A <span class="function"><strong>win32_create_service()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     Create a service with the short name &#039;dummyphp&#039;.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">win32_create_service</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">'service'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">,                                           </span><span style="color: #FF8000">// the name of your service<br />    </span><span style="color: #DD0000">'display'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sample dummy PHP service'</span><span style="color: #007700">,                           </span><span style="color: #FF8000">// short description<br />    </span><span style="color: #DD0000">'description' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'This is a dummy Windows service created using PHP.'</span><span style="color: #007700">, </span><span style="color: #FF8000">// long description<br />    </span><span style="color: #DD0000">'params'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'"' </span><span style="color: #007700">. </span><span style="color: #0000BB">__FILE__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'"  run'</span><span style="color: #007700">,                            </span><span style="color: #FF8000">// path to the script and parameters<br /></span><span style="color: #007700">));<br /></span><span style="color: #0000BB">debug_zval_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5751">
    <p><strong>Example #2 A <span class="function"><strong>win32_create_service()</strong></span> example with dependencies</strong></p>
    <div class="example-contents"><p>
     Create a service with the short name &#039;dummyphp&#039; and dependencies.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">win32_create_service</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">'service'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">,                                           </span><span style="color: #FF8000">// the name of your service<br />    </span><span style="color: #DD0000">'display'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sample dummy PHP service'</span><span style="color: #007700">,                           </span><span style="color: #FF8000">// short description<br />    </span><span style="color: #DD0000">'description'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'This is a dummy Windows service created using PHP.'</span><span style="color: #007700">, </span><span style="color: #FF8000">// long description<br />    </span><span style="color: #DD0000">'params'       </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'"' </span><span style="color: #007700">. </span><span style="color: #0000BB">__FILE__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'"  run'</span><span style="color: #007700">,                            </span><span style="color: #FF8000">// path to the script and parameters<br />    </span><span style="color: #DD0000">'dependencies' </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"Netman"</span><span style="color: #007700">),                                      </span><span style="color: #FF8000">// The list of the dependencies <br /></span><span style="color: #007700">));<br /></span><span style="color: #0000BB">debug_zval_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5752">
    <p><strong>Example #3 A <span class="function"><strong>win32_create_service()</strong></span> example with recovery</strong></p>
    <div class="example-contents"><p>
     Create a service with the short name &#039;dummyphp&#039; and recovery settings.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">win32_create_service</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">'service'               </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">,                                           </span><span style="color: #FF8000">// the name of your service<br />    </span><span style="color: #DD0000">'display'               </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sample dummy PHP service'</span><span style="color: #007700">,                           </span><span style="color: #FF8000">// short description<br />    </span><span style="color: #DD0000">'description'           </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'This is a dummy Windows service created using PHP.'</span><span style="color: #007700">, </span><span style="color: #FF8000">// long description<br />    </span><span style="color: #DD0000">'params'                </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'"' </span><span style="color: #007700">. </span><span style="color: #0000BB">__FILE__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'"  run'</span><span style="color: #007700">,                            </span><span style="color: #FF8000">// path to the script and parameters<br />    </span><span style="color: #DD0000">'recovery_delay'        </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">120000</span><span style="color: #007700">,                                               </span><span style="color: #FF8000">// Recovery action is executed after 2 minutes<br />    </span><span style="color: #DD0000">'recovery_action_1'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">WIN32_SC_ACTION_RESTART</span><span style="color: #007700">,                              </span><span style="color: #FF8000">// On first failure, restart the service<br />    </span><span style="color: #DD0000">'recovery_action_2'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">WIN32_SC_ACTION_RUN_COMMAND</span><span style="color: #007700">,                          </span><span style="color: #FF8000">// On second failure, execute the commmand<br />    </span><span style="color: #DD0000">'recovery_action_3'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">WIN32_SC_ACTION_NONE</span><span style="color: #007700">,                                 </span><span style="color: #FF8000">// On other failure, do nothing<br />    </span><span style="color: #DD0000">'recovery_reset_period' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">86400</span><span style="color: #007700">,                                                </span><span style="color: #FF8000">// Reset the fail counter after 1 day<br />    </span><span style="color: #DD0000">'recovery_enabled'      </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,                                                 </span><span style="color: #FF8000">// Enable the recovery parameter<br />    </span><span style="color: #DD0000">'recovery_reboot_msg'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">null</span><span style="color: #007700">,                                                 </span><span style="color: #FF8000">// Do not define a reboot message, it's not needed here<br />    </span><span style="color: #DD0000">'recovery_command'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"c:\clean-service.bat"</span><span style="color: #007700">,                               </span><span style="color: #FF8000">// When the action is WIN32_SC_ACTION_RUN_COMMAND, execute this command<br /></span><span style="color: #007700">));<br /></span><span style="color: #0000BB">debug_zval_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.win32-create-service-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.win32-delete-service.php" class="function" rel="rdfs-seeAlso">win32_delete_service()</a> - Deletes a service entry from the SCM database</span></li>
    <li><a href="win32service.constants.php#win32service.constants.basepriorities" class="link">Win32 Base Priority Classes</a></li>
    <li><a href="win32service.constants.php#win32service.constants.recovery-action" class="link">Win32 Recovery action</a></li>
    <li><a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Codes</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/win32service/functions/win32-create-service.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.win32-create-service%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.win32-create-service&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-create-service.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72513">  <div class="votes">
    <div id="Vu72513">
    <a href="/manual/vote-note.php?id=72513&amp;page=function.win32-create-service&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72513">
    <a href="/manual/vote-note.php?id=72513&amp;page=function.win32-create-service&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72513" title="75% like this...">
    2
    </div>
  </div>
  <a href="#72513" class="name">
  <strong class="user"><em>pauljamesthomson at gmail dot com</em></strong></a><a class="genanchor" href="#72513"> &para;</a><div class="date" title="2007-01-22 04:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72513">
<div class="phpcode"><code><span class="html">Other start_type values:<br /><br />0x00000002: A service started automatically by the service control manager during system startup. For more information, see Automatically Starting Services.<br /><br />0x00000000: A device driver started by the system loader. This value is valid only for driver services.<br /><br />0x00000003: A service started by the service control manager when a process calls the win32_start_service() function.<br /><br />0x00000004: A service that cannot be started. Attempts to start the service result in the error code <br /><br />0x00000001: A device driver started by the IoInitSystem function. This value is valid only for driver services.<br /><br />I can confirm that 0x00000003 works as expected (service is created, but must be started manually).<br /><br />More here:<br /><br /><a href="http://msdn2.microsoft.com/en-us/library/ms682450.aspx" rel="nofollow" target="_blank">http://msdn2.microsoft.com/en-us/library/ms682450.aspx</a></span></code></div>
  </div>
 </div>
  <div class="note" id="100333">  <div class="votes">
    <div id="Vu100333">
    <a href="/manual/vote-note.php?id=100333&amp;page=function.win32-create-service&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100333">
    <a href="/manual/vote-note.php?id=100333&amp;page=function.win32-create-service&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100333" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100333" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#100333"> &para;</a><div class="date" title="2010-10-08 10:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100333">
<div class="phpcode"><code><span class="html">[An example of how to create a Windows service.  Evaluate code first and use at your own risk!]
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//No timeouts, Flush Content immediatly
<br />    </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />    </span><span class="default">ob_implicit_flush</span><span class="keyword">();
<br />    
<br /></span><span class="comment">//Service Settings
<br />    </span><span class="default">$phpPath </span><span class="keyword">= </span><span class="string">"D:\\php\\php5.2.9"</span><span class="keyword">;
<br />    </span><span class="default">$ServiceName </span><span class="keyword">= </span><span class="string">'phpServiceName'</span><span class="keyword">;
<br />    </span><span class="default">$ServiceDisplay </span><span class="keyword">= </span><span class="string">'phpDisplayName'</span><span class="keyword">;
<br />
<br /></span><span class="comment">//Windows Service Control
<br />    </span><span class="default">$ServiceAction </span><span class="keyword">= </span><span class="string">"status"</span><span class="keyword">;
<br />    </span><span class="comment">//$ServiceAction = "debug";
<br />    </span><span class="keyword">if ( isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'ServiceAction'</span><span class="keyword">]) and </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'ServiceAction'</span><span class="keyword">]) ) {
<br />        </span><span class="default">$ServiceAction </span><span class="keyword">= </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'ServiceAction'</span><span class="keyword">]);
<br />    } else if ( isset(</span><span class="default">$argv</span><span class="keyword">) and isset(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) and </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ) {
<br />        </span><span class="default">$ServiceAction </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />    }
<br />    if( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"status" </span><span class="keyword">) {
<br />        </span><span class="default">$ServiceStatus </span><span class="keyword">= </span><span class="default">win32_query_service_status</span><span class="keyword">(</span><span class="default">$ServiceName</span><span class="keyword">);
<br />        if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_STOPPED </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Stopped\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_START_PENDING </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Start Pending\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_STOP_PENDING </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Stop Pending\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_RUNNING </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Running\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_CONTINUE_PENDING </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Continue Pending\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_PAUSE_PENDING </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Pause Pending\n\n"</span><span class="keyword">;
<br />        } else if ( </span><span class="default">$ServiceStatus</span><span class="keyword">[</span><span class="string">'CurrentState'</span><span class="keyword">] == </span><span class="default">WIN32_SERVICE_PAUSED </span><span class="keyword">) {
<br />            echo </span><span class="string">"Service Paused\n\n"</span><span class="keyword">;
<br />        } else{
<br />            echo </span><span class="string">"Service Unknown\n\n"</span><span class="keyword">;
<br />        }
<br />      exit;
<br />    } else if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"install" </span><span class="keyword">) {
<br />    </span><span class="comment">//Install Windows Service
<br />        </span><span class="default">win32_create_service</span><span class="keyword">( Array(
<br />            </span><span class="string">'service' </span><span class="keyword">=&gt; </span><span class="default">$ServiceName</span><span class="keyword">,
<br />            </span><span class="string">'display' </span><span class="keyword">=&gt; </span><span class="default">$ServiceDisplay</span><span class="keyword">,
<br />            </span><span class="string">'params' </span><span class="keyword">=&gt; </span><span class="default">__FILE__ </span><span class="keyword">. </span><span class="string">" run"</span><span class="keyword">,
<br />            </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="default">$phpPath</span><span class="keyword">.</span><span class="string">"\\php.exe"</span><span class="keyword">,
<br />        ));
<br />        echo </span><span class="string">"Service Installed\n\n"</span><span class="keyword">;
<br />        exit;
<br />    } else if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"uninstall" </span><span class="keyword">) {
<br />    </span><span class="comment">//Remove Windows Service
<br />        </span><span class="default">win32_delete_service</span><span class="keyword">(</span><span class="default">$ServiceName</span><span class="keyword">);
<br />        echo </span><span class="string">"Service Removed\n\n"</span><span class="keyword">;
<br />        exit;
<br />    } else if( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"start"</span><span class="keyword">) {
<br />    </span><span class="comment">//Start Windows Service
<br />      </span><span class="default">win32_start_service</span><span class="keyword">(</span><span class="default">$ServiceName</span><span class="keyword">);
<br />      echo </span><span class="string">"Service Started\n\n"</span><span class="keyword">;
<br />      exit;
<br />    } else if( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"stop" </span><span class="keyword">) {
<br />    </span><span class="comment">//Stop Windows Service
<br />      </span><span class="default">win32_stop_service</span><span class="keyword">(</span><span class="default">$ServiceName</span><span class="keyword">);
<br />      echo </span><span class="string">"Service Stopped\n\n"</span><span class="keyword">;
<br />      exit;
<br />    } else if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"run" </span><span class="keyword">) {
<br />    </span><span class="comment">//Run Windows Service
<br />        </span><span class="default">win32_start_service_ctrl_dispatcher</span><span class="keyword">(</span><span class="default">$ServiceName</span><span class="keyword">);
<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);
<br />    } else if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"debug" </span><span class="keyword">) {
<br />    </span><span class="comment">//Debug Windows Service
<br />        </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);
<br />    } else {
<br />        exit();
<br />    }
<br />
<br /></span><span class="comment">//Server Loop
<br />    </span><span class="keyword">while (</span><span class="default">1</span><span class="keyword">) {
<br />    </span><span class="comment">//Handle Windows Service Request
<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">*</span><span class="default">1000</span><span class="keyword">);
<br />        if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"run" </span><span class="keyword">) {
<br />            switch ( </span><span class="default">win32_get_last_control_message</span><span class="keyword">() ) {
<br />                case </span><span class="default">WIN32_SERVICE_CONTROL_CONTINUE</span><span class="keyword">:
<br />                    break;
<br />                case </span><span class="default">WIN32_SERVICE_CONTROL_INTERROGATE</span><span class="keyword">:
<br />                    </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_NO_ERROR</span><span class="keyword">);
<br />                break;
<br />                case </span><span class="default">WIN32_SERVICE_CONTROL_STOP</span><span class="keyword">:
<br />                    </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);
<br />                    exit;
<br />                default:
<br />                    </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_ERROR_CALL_NOT_IMPLEMENTED</span><span class="keyword">); 
<br />            }
<br />        }
<br />    </span><span class="comment">//User Loop
<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />        echo </span><span class="string">"\n&lt;BR&gt;YOUR CODE HERE"</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">//Exit
<br />    </span><span class="keyword">if ( </span><span class="default">$ServiceAction </span><span class="keyword">== </span><span class="string">"run" </span><span class="keyword">) {
<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);
<br />    }
<br />    exit();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.win32-create-service&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-create-service.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.win32service.php">win32service Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.win32-add-right-access-service.php" title="win32_&#8203;add_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;add_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-add-service-env-var.php" title="win32_&#8203;add_&#8203;service_&#8203;env_&#8203;var">win32_&#8203;add_&#8203;service_&#8203;env_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-continue-service.php" title="win32_&#8203;continue_&#8203;service">win32_&#8203;continue_&#8203;service</a>
                        </li>
                                                <li class="current">
                            <a href="function.win32-create-service.php" title="win32_&#8203;create_&#8203;service">win32_&#8203;create_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-delete-service.php" title="win32_&#8203;delete_&#8203;service">win32_&#8203;delete_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-get-last-control-message.php" title="win32_&#8203;get_&#8203;last_&#8203;control_&#8203;message">win32_&#8203;get_&#8203;last_&#8203;control_&#8203;message</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-get-service-env-vars.php" title="win32_&#8203;get_&#8203;service_&#8203;env_&#8203;vars">win32_&#8203;get_&#8203;service_&#8203;env_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-pause-service.php" title="win32_&#8203;pause_&#8203;service">win32_&#8203;pause_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-query-service-status.php" title="win32_&#8203;query_&#8203;service_&#8203;status">win32_&#8203;query_&#8203;service_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-read-all-rights-access-service.php" title="win32_&#8203;read_&#8203;all_&#8203;rights_&#8203;access_&#8203;service">win32_&#8203;read_&#8203;all_&#8203;rights_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-read-right-access-service.php" title="win32_&#8203;read_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;read_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-remove-right-access-service.php" title="win32_&#8203;remove_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;remove_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-remove-service-env-var.php" title="win32_&#8203;remove_&#8203;service_&#8203;env_&#8203;var">win32_&#8203;remove_&#8203;service_&#8203;env_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-send-custom-control.php" title="win32_&#8203;send_&#8203;custom_&#8203;control">win32_&#8203;send_&#8203;custom_&#8203;control</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-exit-code.php" title="win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;code">win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-exit-mode.php" title="win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;mode">win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-pause-resume-state.php" title="win32_&#8203;set_&#8203;service_&#8203;pause_&#8203;resume_&#8203;state">win32_&#8203;set_&#8203;service_&#8203;pause_&#8203;resume_&#8203;state</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-status.php" title="win32_&#8203;set_&#8203;service_&#8203;status">win32_&#8203;set_&#8203;service_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-start-service.php" title="win32_&#8203;start_&#8203;service">win32_&#8203;start_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-start-service-ctrl-dispatcher.php" title="win32_&#8203;start_&#8203;service_&#8203;ctrl_&#8203;dispatcher">win32_&#8203;start_&#8203;service_&#8203;ctrl_&#8203;dispatcher</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-stop-service.php" title="win32_&#8203;stop_&#8203;service">win32_&#8203;stop_&#8203;service</a>
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
