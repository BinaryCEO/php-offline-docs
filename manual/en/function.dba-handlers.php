<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dba_handlers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dba-handlers.php">
 <link rel="shorturl" href="https://www.php.net/dba-handlers">
 <link rel="alternate" href="https://www.php.net/dba-handlers" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dba.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dba-firstkey.php">
 <link rel="next" href="https://www.php.net/manual/en/function.dba-insert.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dba-handlers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dba-handlers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dba-handlers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dba-handlers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dba-handlers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dba-handlers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dba-handlers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dba-handlers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dba-handlers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dba-handlers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dba-handlers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List all the handlers available" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dba_handlers - Manual" />
<meta name="twitter:description" content="List all the handlers available" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dba_handlers - Manual" />
<meta itemprop="description" content="List all the handlers available" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List all the handlers available" />

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
        <a href="function.dba-insert.php">
          dba_insert &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dba-firstkey.php">
          &laquo; dba_firstkey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.dba.php'>DBA</a></li>      <li><a href='ref.dba.php'>DBA Functions</a></li>      </ul>
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
            <option value='en/function.dba-handlers.php' selected="selected">English</option>
            <option value='de/function.dba-handlers.php'>German</option>
            <option value='es/function.dba-handlers.php'>Spanish</option>
            <option value='fr/function.dba-handlers.php'>French</option>
            <option value='it/function.dba-handlers.php'>Italian</option>
            <option value='ja/function.dba-handlers.php'>Japanese</option>
            <option value='pt_BR/function.dba-handlers.php'>Brazilian Portuguese</option>
            <option value='ru/function.dba-handlers.php'>Russian</option>
            <option value='tr/function.dba-handlers.php'>Turkish</option>
            <option value='uk/function.dba-handlers.php'>Ukrainian</option>
            <option value='zh/function.dba-handlers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dba-handlers" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dba_handlers</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dba_handlers</span> &mdash; <span class="dc-title">List all the handlers available</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.dba-handlers-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dba_handlers</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$full_info</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>dba_handlers()</strong></span> list all the handlers supported by this
   extension.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.dba-handlers-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">full_info</code></dt>
     <dd>
      <p class="para">
       Turns on/off full information display in the result.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.dba-handlers-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of database handlers. If <code class="parameter">full_info</code>
   is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the array will be associative with the handlers names as
   keys, and their version information as value. Otherwise, the result will be
   an indexed array of handlers names.  
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When the internal cdb library is used you will see 
    <code class="literal">cdb</code> and <code class="literal">cdb_make</code>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 examples" id="refsect1-function.dba-handlers-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1092">
    <p><strong>Example #1 <span class="function"><strong>dba_handlers()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Available DBA handlers:\n"</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">dba_handlers</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">) as </span><span style="color: #0000BB">$handler_name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$handler_version</span><span style="color: #007700">) {<br />  </span><span style="color: #FF8000">// clean the versions<br />  </span><span style="color: #0000BB">$handler_version </span><span style="color: #007700">= </span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'$'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">$handler_version</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">" - </span><span style="color: #0000BB">$handler_name</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$handler_version</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Available DBA handlers:
 - cdb: 0.75, Revision: 1.3.2.3 
 - cdb_make: 0.75, Revision: 1.2.2.4 
 - db2: Sleepycat Software: Berkeley DB 2.7.7: (08/20/99)
 - inifile: 1.0, Revision: 1.6.2.3 
 - flatfile: 1.0, Revision: 1.5.2.4</pre>
</div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dba/functions/dba-handlers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dba-handlers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dba-handlers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dba-handlers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93370">  <div class="votes">
    <div id="Vu93370">
    <a href="/manual/vote-note.php?id=93370&amp;page=function.dba-handlers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93370">
    <a href="/manual/vote-note.php?id=93370&amp;page=function.dba-handlers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93370" title="66% like this...">
    1
    </div>
  </div>
  <a href="#93370" class="name">
  <strong class="user"><em>cbemerine at gmail dot com</em></strong></a><a class="genanchor" href="#93370"> &para;</a><div class="date" title="2009-09-06 05:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93370">
<div class="phpcode"><code><span class="html">A quick way to see which DBA handlers, without version numbers, that have been built into your version of MySQL on your system, use var_dump with dba_handler() as follows: <br /><br /><span class="default">&lt;?php<br />var_dump </span><span class="keyword">( </span><span class="string">"dba_handlers()" </span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />Many distros build in these DBA Handlers by default: <br />array(5) { [0]=&gt;  string(3) "cdb" [1]=&gt;  string(8) "cdb_make" [2]=&gt;  string(3) "db4" [3]=&gt;  string(7) "inifile" [4]=&gt;  string(8) "flatfile" }<br /><br />using print and pre tags for readability: <br /><br />array(5) {<br /><br />  [0]=&gt;<br /><br />  string(3) "cdb"<br /><br />  [1]=&gt;<br /><br />  string(8) "cdb_make"<br /><br />  [2]=&gt;<br /><br />  string(3) "db4"<br /><br />  [3]=&gt;<br /><br />  string(7) "inifile"<br /><br />  [4]=&gt;<br /><br />  string(8) "flatfile"<br /><br />}<br /><br />Note there are issues with dba_insert and dba_replace without building for either GDBM or QDBM.<br />  Here are two sources for the list of DBA handlers: (<a href="http://www.php-editors.com/php_manual/ref.dba.html" rel="nofollow" target="_blank">http://www.php-editors.com/php_manual/ref.dba.html</a> and <a href="http://dewa03.unep.org/manuals/php_manual/ref.dba.html;" rel="nofollow" target="_blank">http://dewa03.unep.org/manuals/php_manual/ref.dba.html;</a> )<br /><br />CDBM &amp; CDB compiles have issues with updates, you can read databases and write new database files, but you will be prevented from using dba_replace() and you may have issues with dba_insert().<br /><br />NDBM &amp; DBM are depreciated.<br /><br />DB2, DB3 &amp; DB4 (Berkeley DB Sleepycat Software / Oracle)  Have read online about issues with dba_replace() and db4 specifically. Make sure you test your installation for correct usage of all DBA functions.<br /><br />SDBM, TDB, TinyCDB were not listed on most of the sources I have found online.  Those DBA handlers and the names of the developers were listed on the QDBM source forge site.  How they interact with dba_replace() I do not know.  You should be aware of their existence.  <br /><br />GDBM and QDBM are the only other two DBA handlers I am aware of.  Both are reported to allow PHP's dba_replace() function to work correctly so either may be an acceptable option.  The following three restrictions of traditional DBM are not issues for either GDBM or QDBM: 1) a process can handle only one database;  2) the size of a key and a value is bounded;   3) a database file is sparse.<br /><br />DBA handler benchmark compares QDBM, GDBM, NDBM, SDBM, TDB, CDB, BDB, QDBM-BT-ASC, QDBM-BT-RND, BDB-BT-ASC, BDB-BT-RND can be found here: (<a href="http://qdbm.sourceforge.net/benchmark.pdf" rel="nofollow" target="_blank">http://qdbm.sourceforge.net/benchmark.pdf</a>); <br /><br />QDBM seems to offer significant improvements in speed over the other DBA Handlers, test in your environment to verify the results.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dba-handlers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dba-handlers.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dba.php">DBA Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.dba-close.php" title="dba_&#8203;close">dba_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-delete.php" title="dba_&#8203;delete">dba_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-exists.php" title="dba_&#8203;exists">dba_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-fetch.php" title="dba_&#8203;fetch">dba_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-firstkey.php" title="dba_&#8203;firstkey">dba_&#8203;firstkey</a>
                        </li>
                                                <li class="current">
                            <a href="function.dba-handlers.php" title="dba_&#8203;handlers">dba_&#8203;handlers</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-insert.php" title="dba_&#8203;insert">dba_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-key-split.php" title="dba_&#8203;key_&#8203;split">dba_&#8203;key_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-list.php" title="dba_&#8203;list">dba_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-nextkey.php" title="dba_&#8203;nextkey">dba_&#8203;nextkey</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-open.php" title="dba_&#8203;open">dba_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-optimize.php" title="dba_&#8203;optimize">dba_&#8203;optimize</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-popen.php" title="dba_&#8203;popen">dba_&#8203;popen</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-replace.php" title="dba_&#8203;replace">dba_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.dba-sync.php" title="dba_&#8203;sync">dba_&#8203;sync</a>
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
