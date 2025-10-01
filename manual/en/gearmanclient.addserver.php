<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GearmanClient::addServer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/gearmanclient.addserver.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gearmanclient.addserver.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gearmanclient.addserver.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.gearmanclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/gearmanclient.addoptions.php">
 <link rel="next" href="https://www.php.net/manual/en/gearmanclient.addservers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gearmanclient.addserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gearmanclient.addserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gearmanclient.addserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gearmanclient.addserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gearmanclient.addserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gearmanclient.addserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gearmanclient.addserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gearmanclient.addserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gearmanclient.addserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gearmanclient.addserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gearmanclient.addserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a job server to the client" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GearmanClient::addServer - Manual" />
<meta name="twitter:description" content="Add a job server to the client" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GearmanClient::addServer - Manual" />
<meta itemprop="description" content="Add a job server to the client" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a job server to the client" />

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
        <a href="gearmanclient.addservers.php">
          GearmanClient::addServers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gearmanclient.addoptions.php">
          &laquo; GearmanClient::addOptions        </a>
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
            <option value='en/gearmanclient.addserver.php' selected="selected">English</option>
            <option value='de/gearmanclient.addserver.php'>German</option>
            <option value='es/gearmanclient.addserver.php'>Spanish</option>
            <option value='fr/gearmanclient.addserver.php'>French</option>
            <option value='it/gearmanclient.addserver.php'>Italian</option>
            <option value='ja/gearmanclient.addserver.php'>Japanese</option>
            <option value='pt_BR/gearmanclient.addserver.php'>Brazilian Portuguese</option>
            <option value='ru/gearmanclient.addserver.php'>Russian</option>
            <option value='tr/gearmanclient.addserver.php'>Turkish</option>
            <option value='uk/gearmanclient.addserver.php'>Ukrainian</option>
            <option value='zh/gearmanclient.addserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gearmanclient.addserver" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">GearmanClient::addServer</h1>
  <p class="verinfo">(PECL gearman &gt;= 0.5.0)</p><p class="refpurpose"><span class="refname">GearmanClient::addServer</span> &mdash; <span class="dc-title">Add a job server to the client</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-gearmanclient.addserver-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>GearmanClient::addServer</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$setupExceptionHandler</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Adds a job server to a list of servers that can be used to run a task.  No socket
   I/O happens here; the server is simply added to the list.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-gearmanclient.addserver-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-gearmanclient.addserver-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-gearmanclient.addserver-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4592">
    <p><strong>Example #1 Adding two job servers</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000"># Create our client object.<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">= new </span><span style="color: #0000BB">GearmanClient</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000"># Add two job servers, the first on the default 4730 port<br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"10.0.0.1"</span><span style="color: #007700">); <br /></span><span style="color: #0000BB">$gmclient</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"10.0.0.2"</span><span style="color: #007700">, </span><span style="color: #0000BB">7003</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-gearmanclient.addserver-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="gearmanclient.addservers.php" class="methodname" rel="rdfs-seeAlso">GearmanClient::addServers()</a> - Add a list of job servers to the client</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/gearman/gearmanclient/addserver.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgearmanclient.addserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gearmanclient.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanclient.addserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126999">  <div class="votes">
    <div id="Vu126999">
    <a href="/manual/vote-note.php?id=126999&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126999">
    <a href="/manual/vote-note.php?id=126999&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126999" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126999" class="name">
  <strong class="user"><em>jqv8gg681 at relay dot firefox dot com</em></strong></a><a class="genanchor" href="#126999"> &para;</a><div class="date" title="2022-04-21 03:54"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126999">
<div class="phpcode"><code><span class="html">Combining recommendations from brainreflex and iloveapplepie, as well as hours of testing. This avoids some bugs in cross versions of gearman across platforms. <br />It steps though the server list and fails if all are inaccessible.<br />I also use the same override as "class SmartGearmanClient extends GearmanClient" for the clients.<br /><br /><span class="default">&lt;?php </span><span class="comment">// WORKER<br /></span><span class="keyword">class </span><span class="default">SmartGearmanWorker </span><span class="keyword">extends </span><span class="default">GearmanWorker<br /></span><span class="keyword">{<br />    public </span><span class="default">$server </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    public function </span><span class="default">connect</span><span class="keyword">(</span><span class="default">$servers </span><span class="keyword">= array( array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">) ))<br />    {<br />        </span><span class="default">$connected </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        foreach (</span><span class="default">$servers </span><span class="keyword">as </span><span class="default">$server</span><span class="keyword">) {<br />            </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">GearmanClient</span><span class="keyword">();<br />            </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">], </span><span class="default">false</span><span class="keyword">);<br />    <br />            if (@</span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">ping</span><span class="keyword">(</span><span class="string">'ping'</span><span class="keyword">)) {              <br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]);<br />                </span><span class="default">$connected</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server </span><span class="keyword">= array(<br />                   </span><span class="string">'host'</span><span class="keyword">=&gt;</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">],<br />                   </span><span class="string">'port'</span><span class="keyword">=&gt;</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]<br />                );<br />                break; </span><span class="comment">// Remove this to use last working server in list<br />            </span><span class="keyword">}<br />        }<br />        return </span><span class="default">$connected</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="string">"Starting\n"</span><span class="keyword">;<br /><br /></span><span class="comment"># Add some servers<br /></span><span class="default">$servers </span><span class="keyword">= array(<br />    array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">),<br />    array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4731'</span><span class="keyword">),<br />    array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4732'</span><span class="keyword">),<br />    array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.2'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">),<br />    array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'192.168.204.10'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">)<br />);<br /><br /></span><span class="comment"># Create our worker object.<br /></span><span class="default">$gmw</span><span class="keyword">= new </span><span class="default">SmartGearmanWorker</span><span class="keyword">();<br /><br />if (</span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">)) {<br />    </span><span class="comment"># Register function "reverseString" with the server. <br />    </span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">"reverseString"</span><span class="keyword">, </span><span class="string">"reverseString_fn"</span><span class="keyword">);<br /><br />    print </span><span class="string">"Connected to </span><span class="keyword">{</span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]}</span><span class="string">:</span><span class="keyword">{</span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]}</span><span class="string">...\n"</span><span class="keyword">;<br />    print </span><span class="string">"Waiting for jobs...\n"</span><span class="keyword">;<br /><br />    while (</span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">()) {<br />        if (</span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">returnCode</span><span class="keyword">() != </span><span class="default">GEARMAN_SUCCESS</span><span class="keyword">) {<br />            echo </span><span class="string">"return_code: " </span><span class="keyword">. </span><span class="default">$gmw</span><span class="keyword">-&gt;</span><span class="default">returnCode</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />            break;<br />        }<br />    }<br /><br />    echo </span><span class="string">"DONE\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"Unable to connect to any gearman-job-servers."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />};<br /><br />function </span><span class="default">reverseString_fn</span><span class="keyword">(</span><span class="default">$job</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"Received job: " </span><span class="keyword">. </span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br /> <br />    </span><span class="default">$workload </span><span class="keyword">= </span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">workload</span><span class="keyword">();<br />    </span><span class="default">$workload_size </span><span class="keyword">= </span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">workloadSize</span><span class="keyword">();<br /><br />    echo </span><span class="string">"Workload: </span><span class="default">$workload</span><span class="string"> (</span><span class="default">$workload_size</span><span class="string">)\n"</span><span class="keyword">;<br /><br />    </span><span class="comment"># Lets send some progress information<br />    </span><span class="keyword">for (</span><span class="default">$x</span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$workload_size</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />        echo </span><span class="string">"Sending status: " </span><span class="keyword">. (</span><span class="default">$x </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) . </span><span class="string">"/</span><span class="default">$workload_size</span><span class="string"> complete\n"</span><span class="keyword">;<br />        </span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">sendStatus</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">, </span><span class="default">$workload_size</span><span class="keyword">);<br />        </span><span class="default">$job</span><span class="keyword">-&gt;</span><span class="default">sendData</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$workload</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));    <br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$result</span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$workload</span><span class="keyword">);<br />    echo </span><span class="string">"Result: </span><span class="default">$result</span><span class="string">\n"</span><span class="keyword">;<br /><br />    </span><span class="comment"># Return what we want to send back to the client.<br />    </span><span class="keyword">return </span><span class="default">$result</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118429">  <div class="votes">
    <div id="Vu118429">
    <a href="/manual/vote-note.php?id=118429&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118429">
    <a href="/manual/vote-note.php?id=118429&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118429" title="100% like this...">
    2
    </div>
  </div>
  <a href="#118429" class="name">
  <strong class="user"><em>brainreflex at gmail dot com</em></strong></a><a class="genanchor" href="#118429"> &para;</a><div class="date" title="2015-12-04 02:59"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118429">
<div class="phpcode"><code><span class="html">Amit, kosta250<br /><br />I found a workaround to avoid the dead servers and continue with rest alive. <br /><br /><span class="default">&lt;?php<br /><br />$servers </span><span class="keyword">= array(<br />  array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">), <br />  array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4731'</span><span class="keyword">), <br />  array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4732'</span><span class="keyword">), <br />  array(</span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">'127.0.0.2'</span><span class="keyword">, </span><span class="string">'port' </span><span class="keyword">=&gt; </span><span class="string">'4730'</span><span class="keyword">)<br />);<br /><br /></span><span class="default">$client</span><span class="keyword">= new </span><span class="default">\GearmanClient</span><span class="keyword">();<br /><br />foreach(</span><span class="default">$servers </span><span class="keyword">as </span><span class="default">$server</span><span class="keyword">) {<br />  </span><span class="default">$c </span><span class="keyword">= new </span><span class="default">\GearmanClient</span><span class="keyword">();<br />  </span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]);<br /><br />  if (@</span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">ping</span><span class="keyword">(</span><span class="string">'ping'</span><span class="keyword">)) {<br />    </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$server</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]);<br />  }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116798">  <div class="votes">
    <div id="Vu116798">
    <a href="/manual/vote-note.php?id=116798&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116798">
    <a href="/manual/vote-note.php?id=116798&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116798" title="100% like this...">
    1
    </div>
  </div>
  <a href="#116798" class="name">
  <strong class="user"><em>Peter</em></strong></a><a class="genanchor" href="#116798"> &para;</a><div class="date" title="2015-03-02 11:18"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116798">
<div class="phpcode"><code><span class="html">Solution:<br /><a href="https://bugs.launchpad.net/gearmand/+bug/1118751" rel="nofollow" target="_blank">https://bugs.launchpad.net/gearmand/+bug/1118751</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126851">  <div class="votes">
    <div id="Vu126851">
    <a href="/manual/vote-note.php?id=126851&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126851">
    <a href="/manual/vote-note.php?id=126851&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126851" title="no votes...">
    0
    </div>
  </div>
  <a href="#126851" class="name">
  <strong class="user"><em>iloveapplepie</em></strong></a><a class="genanchor" href="#126851"> &para;</a><div class="date" title="2022-02-12 06:52"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126851">
<div class="phpcode"><code><span class="html">Sometimes you want the job server to start even if not all servers are available.  The reason is that if at a later point the server comes back gearman will use it, even if if failed during the add server operation. <br /><br />class SmartGearmanWorker extends GearmanWorker<br />{<br />    function addServer($host = '127.0.0.1', $port = 4730):bool<br />    {<br />        try {<br />            parent::addServer($host, $port);<br />            echo "\nSERVER $host WORKED";<br />        } catch (GearmanException $e) {<br />            echo "\nSERVER $host FAILED";<br />        }<br />        return true;<br />    }<br />}<br /><br />class SmartGearmanClient extends GearmanClient <br />{<br />    function addServer($host = '127.0.0.1', $port = 4730,  bool $setupExceptionHandler = false):bool<br />    {<br />        try {<br />            parent::addServer($host, $port, $setupExceptionHandler);<br />            echo "\nSERVER $host WORKED";<br />    } catch (GearmanException $e) {<br />                <br />            echo "\nSERVER $host FAILED"; //this does not get called even if the server is down<br />        }<br />        return true;<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118360">  <div class="votes">
    <div id="Vu118360">
    <a href="/manual/vote-note.php?id=118360&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118360">
    <a href="/manual/vote-note.php?id=118360&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118360" title="no votes...">
    0
    </div>
  </div>
  <a href="#118360" class="name">
  <strong class="user"><em>kosta250 at gmail dot com</em></strong></a><a class="genanchor" href="#118360"> &para;</a><div class="date" title="2015-11-23 12:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118360">
<div class="phpcode"><code><span class="html">Adding to Amit's comments,  I found that if the first server in the list of servers is down, then there seems to be no way to handle such a condition.</span></code></div>
  </div>
 </div>
  <div class="note" id="111881">  <div class="votes">
    <div id="Vu111881">
    <a href="/manual/vote-note.php?id=111881&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111881">
    <a href="/manual/vote-note.php?id=111881&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111881" title="50% like this...">
    0
    </div>
  </div>
  <a href="#111881" class="name">
  <strong class="user"><em>info at phpgangsta dot de</em></strong></a><a class="genanchor" href="#111881"> &para;</a><div class="date" title="2013-04-08 11:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111881">
<div class="phpcode"><code><span class="html">Since a few versions the port parameter is not optional anymore. I have version 1.1.1 of pecl/gearman compiled with libgearman 1.1.5, and I'm getting the following error:<br /><br />send_packet(GEARMAN_COULD_NOT_CONNECT) Failed to send server-options packet -&gt; libgearman/connection.cc:430<br /><br />This happens if you don't provide a port.<br /><br />Just set the second parameter to 4730 and it is working again.</span></code></div>
  </div>
 </div>
  <div class="note" id="123868">  <div class="votes">
    <div id="Vu123868">
    <a href="/manual/vote-note.php?id=123868&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123868">
    <a href="/manual/vote-note.php?id=123868&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123868" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#123868" class="name">
  <strong class="user"><em>michael at butlerpc dot net</em></strong></a><a class="genanchor" href="#123868"> &para;</a><div class="date" title="2019-05-21 05:23"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123868">
<div class="phpcode"><code><span class="html">Prior to version 2.0.5, addServer DOES perform socket I/O indirectly because it calls set_server_option internally for an exception handler. This means if the server is unreachable you will get a GearmanException thrown at this point, and you may want to catch and handle it in your application.<br /><br /><span class="default">&lt;?php<br /><br />$client</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="default">4321</span><span class="keyword">); </span><span class="comment">// does attempt a socket connection!<br /><br /></span><span class="default">?&gt;<br /></span><br />Starting with version 2.0.5 of the extension, a third boolean argument (after $port) may be passed false in order to prevent this from happening.<br /><br /><span class="default">&lt;?php<br /><br />$client</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="default">4321</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="comment">// no socket i/o happens here<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113558">  <div class="votes">
    <div id="Vu113558">
    <a href="/manual/vote-note.php?id=113558&amp;page=gearmanclient.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113558">
    <a href="/manual/vote-note.php?id=113558&amp;page=gearmanclient.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113558" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#113558" class="name">
  <strong class="user"><em>Amit</em></strong></a><a class="genanchor" href="#113558"> &para;</a><div class="date" title="2013-10-29 06:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113558">
<div class="phpcode"><code><span class="html">The addServer and addServers are unforgiving when any of the addresses are down. I tried using exceptions, but it does not quite work. Can you provide a working example to handle a list of servers where one or more is not running.<br /><br />Thanks</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=gearmanclient.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearmanclient.addserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.gearmanclient.php">GearmanClient</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="gearmanclient.addoptions.php" title="addOptions">addOptions</a>
                        </li>
                                                <li class="current">
                            <a href="gearmanclient.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="gearmanclient.addservers.php" title="addServers">addServers</a>
                        </li>
                                                <li class="">
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
