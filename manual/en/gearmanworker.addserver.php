<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GearmanWorker::addServer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/gearmanworker.addserver.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gearmanworker.addserver.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gearmanworker.addserver.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.gearmanworker.php">
 <link rel="prev" href="https://www.php.net/manual/en/gearmanworker.addoptions.php">
 <link rel="next" href="https://www.php.net/manual/en/gearmanworker.addservers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gearmanworker.addserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gearmanworker.addserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gearmanworker.addserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gearmanworker.addserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gearmanworker.addserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gearmanworker.addserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gearmanworker.addserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gearmanworker.addserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gearmanworker.addserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gearmanworker.addserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gearmanworker.addserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a job server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GearmanWorker::addServer - Manual" />
<meta name="twitter:description" content="Add a job server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GearmanWorker::addServer - Manual" />
<meta itemprop="description" content="Add a job server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a job server" />

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
        <a href="gearmanworker.addservers.php">
          GearmanWorker::addServers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gearmanworker.addoptions.php">
          &laquo; GearmanWorker::addOptions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.gearman.php'>Gearman</a></li>      <li><a href='class.gearmanworker.php'>GearmanWorker</a></li>      </ul>
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
            <option value='en/gearmanworker.addserver.php' selected="selected">English</option>
            <option value='de/gearmanworker.addserver.php'>German</option>
            <option value='es/gearmanworker.addserver.php'>Spanish</option>
            <option value='fr/gearmanworker.addserver.php'>French</option>
            <option value='it/gearmanworker.addserver.php'>Italian</option>
            <option value='ja/gearmanworker.addserver.php'>Japanese</option>
            <option value='pt_BR/gearmanworker.addserver.php'>Brazilian Portuguese</option>
            <option value='ru/gearmanworker.addserver.php'>Russian</option>
            <option value='tr/gearmanworker.addserver.php'>Turkish</option>
            <option value='uk/gearmanworker.addserver.php'>Ukrainian</option>
            <option value='zh/gearmanworker.addserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gearmanworker.addserver" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">GearmanWorker::addServer</h1>
  <p class="verinfo">(PECL gearman &gt;= 0.5.0)</p><p class="refpurpose"><span class="refname">GearmanWorker::addServer</span> &mdash; <span class="dc-title">Add a job server</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-gearmanworker.addserver-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>GearmanWorker::addServer</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$setupExceptionHandler</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Adds a job server to this worker.  This goes into a list of servers than can be used to run jobs.
   No socket I/O happens here.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-gearmanworker.addserver-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">host</code></dt>
     <dd>
      <p class="para">
       The job server host name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       The job server port.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-gearmanworker.addserver-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-gearmanworker.addserver-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4608">
    <p><strong>Example #1 Add alternate Gearman servers</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$worker</span><span style="color: #007700">= new </span><span style="color: #0000BB">GearmanWorker</span><span style="color: #007700">(); <br /></span><span style="color: #0000BB">$worker</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"10.0.0.1"</span><span style="color: #007700">); <br /></span><span style="color: #0000BB">$worker</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"10.0.0.2"</span><span style="color: #007700">, </span><span style="color: #0000BB">7003</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-gearmanworker.addserver-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="gearmanworker.addservers.php" class="methodname" rel="rdfs-seeAlso">GearmanWorker::addServers()</a> - Add job servers</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/gearman/gearmanworker/addserver.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgearmanworker.addserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gearmanworker.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanworker.addserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110351">  <div class="votes">
    <div id="Vu110351">
    <a href="/manual/vote-note.php?id=110351&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110351">
    <a href="/manual/vote-note.php?id=110351&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110351" title="72% like this...">
    5
    </div>
  </div>
  <a href="#110351" class="name">
  <strong class="user"><em>magge</em></strong></a><a class="genanchor" href="#110351"> &para;</a><div class="date" title="2012-10-14 07:21"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110351">
<div class="phpcode"><code><span class="html">If you suddenly start getting a:
<br />
<br />PHP Fatal error:  Uncaught exception 'GearmanException' with message 'Failed to set exception option' in
<br />
<br />...on your GearmanWorker::work() calls, I was able to fix this by specifying values to GearmanWorker::addServer(), even if they are the same as the documented default values.
<br />
<br />Crashes:
<br />
<br /><span class="default">&lt;?php
<br />$gmw </span><span class="keyword">= new </span><span class="default">GearmanWorker</span><span class="keyword">();
<br /></span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">();
<br /></span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Works:
<br />
<br /><span class="default">&lt;?php
<br />$gmw </span><span class="keyword">= new </span><span class="default">GearmanWorker</span><span class="keyword">();
<br /></span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">"127.0.0.1"</span><span class="keyword">, </span><span class="default">4730</span><span class="keyword">);
<br /></span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Go figure. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="117666">  <div class="votes">
    <div id="Vu117666">
    <a href="/manual/vote-note.php?id=117666&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117666">
    <a href="/manual/vote-note.php?id=117666&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117666" title="66% like this...">
    1
    </div>
  </div>
  <a href="#117666" class="name">
  <strong class="user"><em>liv_romania at yahoo dot com</em></strong></a><a class="genanchor" href="#117666"> &para;</a><div class="date" title="2015-07-18 03:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117666">
<div class="phpcode"><code><span class="html">To properly test the server added you could use the following code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// create the worker<br /></span><span class="default">$worker</span><span class="keyword">= new </span><span class="default">GearmanWorker</span><span class="keyword">();<br /><br /></span><span class="comment">// add the  job server (bad host/port)<br /></span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'127.0.0.2'</span><span class="keyword">, </span><span class="default">4731</span><span class="keyword">);<br /><br /></span><span class="comment">// define a variable to hold application data<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="comment">// add the reverse function<br /></span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">'reverse'</span><span class="keyword">, </span><span class="string">'my_reverse_function'</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);<br /><br /></span><span class="comment">// test job server response<br /></span><span class="keyword">if (!@</span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">echo</span><span class="keyword">(</span><span class="string">'test data'</span><span class="keyword">)) {<br />    die(</span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">());<br />}<br /><br /></span><span class="comment">// start the worker listening for job submissions<br /></span><span class="keyword">while (</span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">());<br /><br />function </span><span class="default">my_reverse_function</span><span class="keyword">(</span><span class="default">$job</span><span class="keyword">, &amp;</span><span class="default">$count</span><span class="keyword">)<br />{<br />    </span><span class="default">$count</span><span class="keyword">++;<br /><br />    return </span><span class="default">$count </span><span class="keyword">. </span><span class="string">': ' </span><span class="keyword">. </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">workload</span><span class="keyword">()) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121038">  <div class="votes">
    <div id="Vu121038">
    <a href="/manual/vote-note.php?id=121038&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121038">
    <a href="/manual/vote-note.php?id=121038&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121038" title="100% like this...">
    2
    </div>
  </div>
  <a href="#121038" class="name">
  <strong class="user"><em>anubhav dot jha at gmail dot com</em></strong></a><a class="genanchor" href="#121038"> &para;</a><div class="date" title="2017-05-02 11:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121038">
<div class="phpcode"><code><span class="html">I was receving following message on add server Uncaught exception 'GearmanException' with message 'Failed to set exception option' in &lt;&lt;filename&gt;&gt;:&lt;&lt;linenumber &gt;&gt;<br /> was on centos 6.5<br /><br />fixed by following steps:<br />yum install gearmand<br />/etc/init.d/gearmand start</span></code></div>
  </div>
 </div>
  <div class="note" id="120664">  <div class="votes">
    <div id="Vu120664">
    <a href="/manual/vote-note.php?id=120664&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120664">
    <a href="/manual/vote-note.php?id=120664&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120664" title="100% like this...">
    1
    </div>
  </div>
  <a href="#120664" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#120664"> &para;</a><div class="date" title="2017-02-18 01:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120664">
<div class="phpcode"><code><span class="html">PHP Fatal error:  Uncaught exception 'GearmanException' with message 'Failed to set exception option'<br /><br />also indicates the gearmand daemon is not running.</span></code></div>
  </div>
 </div>
  <div class="note" id="113321">  <div class="votes">
    <div id="Vu113321">
    <a href="/manual/vote-note.php?id=113321&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113321">
    <a href="/manual/vote-note.php?id=113321&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113321" title="100% like this...">
    1
    </div>
  </div>
  <a href="#113321" class="name">
  <strong class="user"><em>gabe dot spradlin at gmail dot com</em></strong></a><a class="genanchor" href="#113321"> &para;</a><div class="date" title="2013-09-27 03:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113321">
<div class="phpcode"><code><span class="html">The manual states that you get a TRUE on success and FALSE on failure. When I have attempted to connect to a server that is powered off I still get TRUE. The return from returnCode() is 0 which is the same as the returnCode() from a successful connection.<br /><br />I have not yet found a way around this.</span></code></div>
  </div>
 </div>
  <div class="note" id="120603">  <div class="votes">
    <div id="Vu120603">
    <a href="/manual/vote-note.php?id=120603&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120603">
    <a href="/manual/vote-note.php?id=120603&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120603" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120603" class="name">
  <strong class="user"><em>allevo</em></strong></a><a class="genanchor" href="#120603"> &para;</a><div class="date" title="2017-02-07 10:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120603">
<div class="phpcode"><code><span class="html">On Ubuntu (php7 php-gearman/xenial,now 2.0.2+1.1.2-1+deb.sury.org~xenial+1 amd64) this function throws a GearmanException. <br />Please use in try catch</span></code></div>
  </div>
 </div>
  <div class="note" id="113562">  <div class="votes">
    <div id="Vu113562">
    <a href="/manual/vote-note.php?id=113562&amp;page=gearmanworker.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113562">
    <a href="/manual/vote-note.php?id=113562&amp;page=gearmanworker.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113562" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#113562" class="name">
  <strong class="user"><em>617137379 at qq dot com</em></strong></a><a class="genanchor" href="#113562"> &para;</a><div class="date" title="2013-10-30 08:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113562">
<div class="phpcode"><code><span class="html">No socket I/O happens in addserver.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=gearmanworker.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanworker.addserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.gearmanworker.php">GearmanWorker</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="gearmanworker.addfunction.php" title="addFunction">addFunction</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.addoptions.php" title="addOptions">addOptions</a>
                        </li>
                                                <li class="current">
                            <a href="gearmanworker.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.addservers.php" title="addServers">addServers</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.clone.php" title="clone">clone</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.error.php" title="error">error</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.geterrno.php" title="getErrno">getErrno</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.register.php" title="register">register</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.removeoptions.php" title="removeOptions">removeOptions</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.returncode.php" title="returnCode">returnCode</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.setid.php" title="setId">setId</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.setoptions.php" title="setOptions">setOptions</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.settimeout.php" title="setTimeout">setTimeout</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.timeout.php" title="timeout">timeout</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.unregister.php" title="unregister">unregister</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.unregisterall.php" title="unregisterAll">unregisterAll</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.wait.php" title="wait">wait</a>
                        </li>
                                                <li class="">
                            <a href="gearmanworker.work.php" title="work">work</a>
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
