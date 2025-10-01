<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GearmanClient::addTask - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/gearmanclient.addtask.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gearmanclient.addtask.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gearmanclient.addtask.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.gearmanclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/gearmanclient.addservers.php">
 <link rel="next" href="https://www.php.net/manual/en/gearmanclient.addtaskbackground.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gearmanclient.addtask.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gearmanclient.addtask.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gearmanclient.addtask.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gearmanclient.addtask.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gearmanclient.addtask.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gearmanclient.addtask.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gearmanclient.addtask.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gearmanclient.addtask.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gearmanclient.addtask.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gearmanclient.addtask.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gearmanclient.addtask.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a task to be run in parallel" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GearmanClient::addTask - Manual" />
<meta name="twitter:description" content="Add a task to be run in parallel" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GearmanClient::addTask - Manual" />
<meta itemprop="description" content="Add a task to be run in parallel" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a task to be run in parallel" />

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
        <a href="gearmanclient.addtaskbackground.php">
          GearmanClient::addTaskBackground &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gearmanclient.addservers.php">
          &laquo; GearmanClient::addServers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.gearman.php'>Gearman</a></li>      <li><a href='class.gearmanclient.php'>GearmanClient</a></li>      </ul>
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
            <option value='en/gearmanclient.addtask.php' selected="selected">English</option>
            <option value='de/gearmanclient.addtask.php'>German</option>
            <option value='es/gearmanclient.addtask.php'>Spanish</option>
            <option value='fr/gearmanclient.addtask.php'>French</option>
            <option value='it/gearmanclient.addtask.php'>Italian</option>
            <option value='ja/gearmanclient.addtask.php'>Japanese</option>
            <option value='pt_BR/gearmanclient.addtask.php'>Brazilian Portuguese</option>
            <option value='ru/gearmanclient.addtask.php'>Russian</option>
            <option value='tr/gearmanclient.addtask.php'>Turkish</option>
            <option value='uk/gearmanclient.addtask.php'>Ukrainian</option>
            <option value='zh/gearmanclient.addtask.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gearmanclient.addtask" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">GearmanClient::addTask</h1>
  <p class="verinfo">(PECL gearman &gt;= 0.5.0)</p><p class="refpurpose"><span class="refname">GearmanClient::addTask</span> &mdash; <span class="dc-title">Add a task to be run in parallel</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-gearmanclient.addtask-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>GearmanClient::addTask</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$function_name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$workload</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$unique_key</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.gearmantask.php" class="type GearmanTask">GearmanTask</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Adds a task to be run in parallel with other tasks.  Call this method for all the tasks
   to be run in parallel, then call <span class="methodname"><a href="gearmanclient.runtasks.php" class="methodname">GearmanClient::runTasks()</a></span> to 
   perform the work.  Note that enough workers need to be available for the tasks to all
   run in parallel.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-gearmanclient.addtask-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">function_name</code></dt>
     <dd>
      <p class="para">
       A registered function the worker is to execute
      </p>
     </dd>
    
    
     <dt><code class="parameter">workload</code></dt>
     <dd>
      <p class="para">
       Serialized data to be processed
      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
       Application context to associate with a task
      </p>
     </dd>
    
    
     <dt><code class="parameter">unique_key</code></dt>
     <dd>
      <p class="para">
       A unique ID used to identify a particular task
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-gearmanclient.addtask-returnvalues">
  <h3 class="title">Return Values</h3>
 <p class="para">
   A <span class="classname"><a href="class.gearmantask.php" class="classname">GearmanTask</a></span> object or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the task could not be added.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-gearmanclient.addtask-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4594">
    <p><strong>Example #1 Basic submission of two tasks</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000"># Create our gearman client<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">= new </span><span style="color: #0000BB">GearmanClient</span><span style="color: #007700">(); <br /><br /></span><span style="color: #FF8000"># add the default job server<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(); <br /><br /></span><span style="color: #FF8000"># set a function to be called when the work is complete<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setCompleteCallback</span><span style="color: #007700">(</span><span style="color: #DD0000">"complete"</span><span style="color: #007700">); <br /><br /></span><span style="color: #FF8000"># add a task to perform the "reverse" function on the string "Hello World!"<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addTask</span><span style="color: #007700">(</span><span style="color: #DD0000">"reverse"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello World!"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #DD0000">"1"</span><span style="color: #007700">); <br /><br /></span><span style="color: #FF8000"># add another task to perform the "reverse" function on the string "!dlroW olleH"<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addTask</span><span style="color: #007700">(</span><span style="color: #DD0000">"reverse"</span><span style="color: #007700">, </span><span style="color: #DD0000">"!dlroW olleH"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #DD0000">"2"</span><span style="color: #007700">); <br /><br /></span><span style="color: #FF8000"># run the tasks<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runTasks</span><span style="color: #007700">(); <br /><br />function </span><span style="color: #0000BB">complete</span><span style="color: #007700">(</span><span style="color: #0000BB">$task</span><span style="color: #007700">) <br />{ <br />  print </span><span style="color: #DD0000">"COMPLETE: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$task</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unique</span><span style="color: #007700">() . </span><span style="color: #DD0000">", " </span><span style="color: #007700">. </span><span style="color: #0000BB">$task</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; <br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">COMPLETE: 2, Hello World!
COMPLETE: 1, !dlroW olleH</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-4595">
    <p><strong>Example #2 Basic submission of two tasks with passing application context</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">GearmanClient</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000"># set a function to be called when the work is complete<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setCompleteCallback</span><span style="color: #007700">(</span><span style="color: #DD0000">"reverse_complete"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000"># Add some tasks for a placeholder of where to put the results<br /></span><span style="color: #0000BB">$results </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addTask</span><span style="color: #007700">(</span><span style="color: #DD0000">"reverse"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Hello World!"</span><span style="color: #007700">, </span><span style="color: #0000BB">$results</span><span style="color: #007700">, </span><span style="color: #DD0000">"t1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addTask</span><span style="color: #007700">(</span><span style="color: #DD0000">"reverse"</span><span style="color: #007700">, </span><span style="color: #DD0000">"!dlroW olleH"</span><span style="color: #007700">, </span><span style="color: #0000BB">$results</span><span style="color: #007700">, </span><span style="color: #DD0000">"t2"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runTasks</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000"># The results should now be filled in from the callbacks<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$results </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$result</span><span style="color: #007700">)<br />   echo </span><span style="color: #0000BB">$id </span><span style="color: #007700">. </span><span style="color: #DD0000">": " </span><span style="color: #007700">. </span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'handle'</span><span style="color: #007700">] . </span><span style="color: #DD0000">", " </span><span style="color: #007700">. </span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /><br />function </span><span style="color: #0000BB">reverse_complete</span><span style="color: #007700">(</span><span style="color: #0000BB">$task</span><span style="color: #007700">, </span><span style="color: #0000BB">$results</span><span style="color: #007700">)<br />{<br />   </span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$task</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unique</span><span style="color: #007700">()] = array(</span><span style="color: #DD0000">"handle"</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$task</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">jobHandle</span><span style="color: #007700">(), </span><span style="color: #DD0000">"data"</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$task</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">t2: H.foo:21, Hello World!
t1: H:foo:22, !dlroW olleH</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-gearmanclient.addtask-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="gearmanclient.addtaskhigh.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addTaskHigh()</a> - Add a high priority task to run in parallel</span></li>
    <li><span class="methodname"><a href="gearmanclient.addtasklow.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addTaskLow()</a> - Add a low priority task to run in parallel</span></li>
    <li><span class="methodname"><a href="gearmanclient.addtaskbackground.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addTaskBackground()</a> - Add a background task to be run in parallel</span></li>
    <li><span class="methodname"><a href="gearmanclient.addtaskhighbackground.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addTaskHighBackground()</a> - Add a high priority background task to be run in parallel</span></li>
    <li><span class="methodname"><a href="gearmanclient.addtasklowbackground.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addTaskLowBackground()</a> - Add a low priority background task to be run in parallel</span></li>
    <li><span class="methodname"><a href="gearmanclient.runtasks.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::runTasks()</a> - Run a list of tasks in parallel</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/gearman/gearmanclient/addtask.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgearmanclient.addtask%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gearmanclient.addtask&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanclient.addtask.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117669">  <div class="votes">
    <div id="Vu117669">
    <a href="/manual/vote-note.php?id=117669&amp;page=gearmanclient.addtask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117669">
    <a href="/manual/vote-note.php?id=117669&amp;page=gearmanclient.addtask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117669" title="88% like this...">
    7
    </div>
  </div>
  <a href="#117669" class="name">
  <strong class="user"><em>liv_romania at yahoo dot com</em></strong></a><a class="genanchor" href="#117669"> &para;</a><div class="date" title="2015-07-19 12:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117669">
<div class="phpcode"><code><span class="html">On PHP 5.5 you can use the following code for passing context by reference and avoid "Call-time pass-by-reference has been removed":<br /><br /><span class="default">&lt;?php<br />$client </span><span class="keyword">= new </span><span class="default">GearmanClient</span><span class="keyword">();<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">();<br /><br /></span><span class="comment"># Set a function to be called when the work is complete<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">setCompleteCallback</span><span class="keyword">(</span><span class="string">"reverse_complete"</span><span class="keyword">);<br /><br /></span><span class="comment"># Use StdClass instead of array<br /></span><span class="default">$results </span><span class="keyword">= new </span><span class="default">StdClass</span><span class="keyword">();<br /></span><span class="default">$results</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= array();<br /><br /></span><span class="comment"># Add some tasks for a placeholder of where to put the results<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">"reverse"</span><span class="keyword">, </span><span class="string">"Hello World!"</span><span class="keyword">, </span><span class="default">$results</span><span class="keyword">, </span><span class="string">"t1"</span><span class="keyword">);<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">"reverse"</span><span class="keyword">, </span><span class="string">"!dlroW olleH"</span><span class="keyword">, </span><span class="default">$results</span><span class="keyword">, </span><span class="string">"t2"</span><span class="keyword">);<br /><br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">runTasks</span><span class="keyword">();<br /><br /></span><span class="comment"># The results should now be filled in from the callbacks<br /></span><span class="keyword">foreach (</span><span class="default">$results</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">as </span><span class="default">$id </span><span class="keyword">=&gt; </span><span class="default">$result</span><span class="keyword">) {<br />    echo </span><span class="default">$id </span><span class="keyword">. </span><span class="string">": " </span><span class="keyword">. </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">] . </span><span class="string">", " </span><span class="keyword">. </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'data'</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">reverse_complete</span><span class="keyword">(</span><span class="default">GearmanTask $task</span><span class="keyword">, </span><span class="default">StdClass $results</span><span class="keyword">)<br />{<br />    </span><span class="default">$results</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">[</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">unique</span><span class="keyword">()] = array(<br />        </span><span class="string">"handle" </span><span class="keyword">=&gt; </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">jobHandle</span><span class="keyword">(),<br />        </span><span class="string">"data" </span><span class="keyword">=&gt; </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">()<br />    );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116032">  <div class="votes">
    <div id="Vu116032">
    <a href="/manual/vote-note.php?id=116032&amp;page=gearmanclient.addtask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116032">
    <a href="/manual/vote-note.php?id=116032&amp;page=gearmanclient.addtask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116032" title="100% like this...">
    1
    </div>
  </div>
  <a href="#116032" class="name">
  <strong class="user"><em>stanislav dot reshetnev at gmail dot com</em></strong></a><a class="genanchor" href="#116032"> &para;</a><div class="date" title="2014-10-31 04:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116032">
<div class="phpcode"><code><span class="html">Note that param $unique must be different for multiple tasks if You want to run they all separately. If param $unique is equal for multiple tasks You will get the same task:<br /><br /><span class="default">&lt;?php<br />  $unique</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /><br />  </span><span class="default">$gclient </span><span class="keyword">= </span><span class="default">GearmanClient</span><span class="keyword">();<br />  </span><span class="default">$gclient</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'srv'</span><span class="keyword">);  <br />  <br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setCreatedCallback</span><span class="keyword">(function(</span><span class="default">GearmanTask $task</span><span class="keyword">) {<br />    print </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">jobHandle</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">; <br />  });<br />  <br />  </span><span class="default">$gclient</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">'function_name'</span><span class="keyword">, </span><span class="string">'workload'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$unique</span><span class="keyword">);<br />  </span><span class="default">$gclient</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">'function_name'</span><span class="keyword">, </span><span class="string">'workload'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$unique</span><span class="keyword">);<br />  </span><span class="default">$gclient</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">'function_name'</span><span class="keyword">, </span><span class="string">'workload'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$unique</span><span class="keyword">);<br />  </span><span class="default">$gclient</span><span class="keyword">-&gt;</span><span class="default">runTasks</span><span class="keyword">();<br />  <br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This sript will print only one handler:<br /><br />H:srv:377382343<br />H:srv:377382343<br />H:srv:377382343</span></code></div>
  </div>
 </div>
  <div class="note" id="113686">  <div class="votes">
    <div id="Vu113686">
    <a href="/manual/vote-note.php?id=113686&amp;page=gearmanclient.addtask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113686">
    <a href="/manual/vote-note.php?id=113686&amp;page=gearmanclient.addtask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113686" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113686" class="name">
  <strong class="user"><em>Jeremy Zerr</em></strong></a><a class="genanchor" href="#113686"> &para;</a><div class="date" title="2013-11-15 06:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113686">
<div class="phpcode"><code><span class="html">As of PHP 5.3.0, you will get a warning saying that "call-time pass-by-reference" is deprecated when you use &amp; in $client-&gt;addTask(..., ..., &amp;$results, ...);. And as of PHP 5.4.0, call-time pass-by-reference was removed, so using it will raise a fatal error.<br /><br />So that means that when you call addTask with a context parameter as in the example above like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Add some tasks for a placeholder of where to put the results<br /></span><span class="default">$results </span><span class="keyword">= array();<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">"reverse"</span><span class="keyword">, </span><span class="string">"Hello World!"</span><span class="keyword">, &amp;</span><span class="default">$results</span><span class="keyword">, </span><span class="string">"t1"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You get this "call-time pass-by-reference" warning (or error).  This can be avoided and still result in functional code by changing the context variable to be an object so that it is passed by reference like this:<br /><br /><span class="default">&lt;?php<br />$results </span><span class="keyword">= new </span><span class="default">\stdClass</span><span class="keyword">();<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addTask</span><span class="keyword">(</span><span class="string">"reverse"</span><span class="keyword">, </span><span class="string">"Hello World!"</span><span class="keyword">, </span><span class="default">$results</span><span class="keyword">, </span><span class="string">"t1"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Then for completeness, change the complete handler to expect a reference:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">reverse_complete</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">, &amp;</span><span class="default">$results</span><span class="keyword">) { ... }<br /></span><span class="default">?&gt;<br /></span><br />Then inside the complete handler, you can use the $results object to save your results to be accessible outside the complete handler.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=gearmanclient.addtask&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanclient.addtask.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.gearmanclient.php">GearmanClient</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="gearmanclient.addoptions.php" title="addOptions">addOptions</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addservers.php" title="addServers">addServers</a>
                        </li>
                                                <li class="current">
                            <a href="gearmanclient.addtask.php" title="addTask">addTask</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtaskbackground.php" title="addTaskBackground">addTaskBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtaskhigh.php" title="addTaskHigh">addTaskHigh</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtaskhighbackground.php" title="addTaskHighBackground">addTaskHighBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtasklow.php" title="addTaskLow">addTaskLow</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtasklowbackground.php" title="addTaskLowBackground">addTaskLowBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addtaskstatus.php" title="addTaskStatus">addTaskStatus</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.clearcallbacks.php" title="clearCallbacks">clearCallbacks</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.clone.php" title="clone">clone</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.context.php" title="context">context</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.data.php" title="data">data</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.do.php" title="do">do</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dobackground.php" title="doBackground">doBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dohigh.php" title="doHigh">doHigh</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dohighbackground.php" title="doHighBackground">doHighBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dojobhandle.php" title="doJobHandle">doJobHandle</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dolow.php" title="doLow">doLow</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dolowbackground.php" title="doLowBackground">doLowBackground</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.donormal.php" title="doNormal">doNormal</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.dostatus.php" title="doStatus">doStatus</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.error.php" title="error">error</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.geterrno.php" title="getErrno">getErrno</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.jobstatus.php" title="jobStatus">jobStatus</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.ping.php" title="ping">ping</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.removeoptions.php" title="removeOptions">removeOptions</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.returncode.php" title="returnCode">returnCode</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.runtasks.php" title="runTasks">runTasks</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setclientcallback.php" title="setClientCallback">setClientCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setcompletecallback.php" title="setCompleteCallback">setCompleteCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setcontext.php" title="setContext">setContext</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setcreatedcallback.php" title="setCreatedCallback">setCreatedCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setdata.php" title="setData">setData</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setdatacallback.php" title="setDataCallback">setDataCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setexceptioncallback.php" title="setExceptionCallback">setExceptionCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setfailcallback.php" title="setFailCallback">setFailCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setoptions.php" title="setOptions">setOptions</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setstatuscallback.php" title="setStatusCallback">setStatusCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.settimeout.php" title="setTimeout">setTimeout</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setwarningcallback.php" title="setWarningCallback">setWarningCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.setworkloadcallback.php" title="setWorkloadCallback">setWorkloadCallback</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.timeout.php" title="timeout">timeout</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.wait.php" title="wait">wait</a>
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
