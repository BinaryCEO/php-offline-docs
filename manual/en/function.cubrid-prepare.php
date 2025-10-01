<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: cubrid_prepare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.cubrid-prepare.php">
 <link rel="shorturl" href="https://www.php.net/cubrid-prepare">
 <link rel="alternate" href="https://www.php.net/cubrid-prepare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.cubrid.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.cubrid-pconnect-with-url.php">
 <link rel="next" href="https://www.php.net/manual/en/function.cubrid-put.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.cubrid-prepare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.cubrid-prepare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.cubrid-prepare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.cubrid-prepare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.cubrid-prepare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.cubrid-prepare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.cubrid-prepare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.cubrid-prepare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.cubrid-prepare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.cubrid-prepare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.cubrid-prepare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepare a SQL statement for execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: cubrid_prepare - Manual" />
<meta name="twitter:description" content="Prepare a SQL statement for execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: cubrid_prepare - Manual" />
<meta itemprop="description" content="Prepare a SQL statement for execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepare a SQL statement for execution" />

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
        <a href="function.cubrid-put.php">
          cubrid_put &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.cubrid-pconnect-with-url.php">
          &laquo; cubrid_pconnect_with_url        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.cubrid.php'>CUBRID</a></li>      <li><a href='ref.cubrid.php'>CUBRID Functions</a></li>      </ul>
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
            <option value='en/function.cubrid-prepare.php' selected="selected">English</option>
            <option value='de/function.cubrid-prepare.php'>German</option>
            <option value='es/function.cubrid-prepare.php'>Spanish</option>
            <option value='fr/function.cubrid-prepare.php'>French</option>
            <option value='it/function.cubrid-prepare.php'>Italian</option>
            <option value='ja/function.cubrid-prepare.php'>Japanese</option>
            <option value='pt_BR/function.cubrid-prepare.php'>Brazilian Portuguese</option>
            <option value='ru/function.cubrid-prepare.php'>Russian</option>
            <option value='tr/function.cubrid-prepare.php'>Turkish</option>
            <option value='uk/function.cubrid-prepare.php'>Ukrainian</option>
            <option value='zh/function.cubrid-prepare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.cubrid-prepare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">cubrid_prepare</h1>
  <p class="verinfo">(PECL CUBRID &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">cubrid_prepare</span> &mdash; <span class="dc-title">Prepare a SQL statement for execution</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.cubrid-prepare-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>cubrid_prepare</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$conn_identifier</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prepare_stmt</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
      The <span class="function"><strong>cubrid_prepare()</strong></span> function is a sort of API which represents SQL statements 
      compiled previously to a given connection handle. This pre-compiled SQL statement will be included 
      in the <span class="function"><strong>cubrid_prepare()</strong></span>. 
  </p>
  <p class="para">
      Accordingly, you can use this statement effectively to execute several times repeatedly or to 
      process long data. Only a single statement can be used and a parameter may put a question mark (?) 
      to appropriate area in the SQL statement. Add a parameter when you bind a value in the VALUES 
      clause of INSERT statement or in the WHERE clause. Note that it is allowed to bind a value to a 
      MARK(?) by using the <span class="function"><a href="function.cubrid-bind.php" class="function">cubrid_bind()</a></span> function only. 
  </p>
 </div>


<div class="refsect1 parameters" id="refsect1-function.cubrid-prepare-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
  <dl>
    
  <dt><code class="parameter">conn_identifier</code></dt>
  <dd><p class="para">Connection identifier.</p></dd>
   
   
  <dt><code class="parameter">prepare_stmt</code></dt>
  <dd><p class="para">Prepare query.</p></dd>
   
   
  <dt><code class="parameter">option</code></dt>
    <dd><p class="para">OID return option <strong><code>CUBRID_INCLUDE_OID</code></strong>.</p></dd>
   
  </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.cubrid-prepare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    Request identifier, if process is successful, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.cubrid-prepare-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1269">
   <p><strong>Example #1 <span class="function"><strong>cubrid_prepare()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #0000BB">33000</span><span style="color: #007700">, </span><span style="color: #DD0000">"demodb"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= &lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT g.event_code, e.name <br />FROM game g <br />JOIN event e ON g.event_code=e.code <br />WHERE host_year = ? AND event_code NOT IN (SELECT event_code FROM game WHERE host_year=?) GROUP BY event_code;<br /></span><span style="color: #007700">EOD;<br /><br /></span><span style="color: #0000BB">$req </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">cubrid_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2004</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">cubrid_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">2000</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">cubrid_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$row_num </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"There are %d event that exits in 2004 olympic but not in 2000. For example:\n\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row_num</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%-15s %s\n"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Event_code"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Event_name"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"----------------------------\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%-15d %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"event_code"</span><span style="color: #007700">], </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%-15d %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"event_code"</span><span style="color: #007700">], </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB">cubrid_disconnect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">There are 27 event that exits in 2004 olympic but not in 2000. For example:

Event_code      Event_name
----------------------------
20063           +91kg
20070           64kg</pre>
</div>
   </div>
  </div>
 </div>


  <div class="refsect1 seealso" id="refsect1-function.cubrid-prepare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">  
    <li><span class="function"><a href="function.cubrid-execute.php" class="function" rel="rdfs-seeAlso">cubrid_execute()</a> - Execute a prepared SQL statement</span></li>  
    <li><span class="function"><a href="function.cubrid-bind.php" class="function" rel="rdfs-seeAlso">cubrid_bind()</a> - Bind variables to a prepared statement as parameters</span></li>  
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
        <a href="https://github.com/php/doc-en/blob/master/reference/cubrid/functions/cubrid-prepare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.cubrid-prepare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.cubrid-prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.cubrid-prepare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.cubrid.php">CUBRID Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.cubrid-bind.php" title="cubrid_&#8203;bind">cubrid_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-close-prepare.php" title="cubrid_&#8203;close_&#8203;prepare">cubrid_&#8203;close_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-close-request.php" title="cubrid_&#8203;close_&#8203;request">cubrid_&#8203;close_&#8203;request</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-col-get.php" title="cubrid_&#8203;col_&#8203;get">cubrid_&#8203;col_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-col-size.php" title="cubrid_&#8203;col_&#8203;size">cubrid_&#8203;col_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-column-names.php" title="cubrid_&#8203;column_&#8203;names">cubrid_&#8203;column_&#8203;names</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-column-types.php" title="cubrid_&#8203;column_&#8203;types">cubrid_&#8203;column_&#8203;types</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-commit.php" title="cubrid_&#8203;commit">cubrid_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-connect.php" title="cubrid_&#8203;connect">cubrid_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-connect-with-url.php" title="cubrid_&#8203;connect_&#8203;with_&#8203;url">cubrid_&#8203;connect_&#8203;with_&#8203;url</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-current-oid.php" title="cubrid_&#8203;current_&#8203;oid">cubrid_&#8203;current_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-disconnect.php" title="cubrid_&#8203;disconnect">cubrid_&#8203;disconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-drop.php" title="cubrid_&#8203;drop">cubrid_&#8203;drop</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-error-code.php" title="cubrid_&#8203;error_&#8203;code">cubrid_&#8203;error_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-error-code-facility.php" title="cubrid_&#8203;error_&#8203;code_&#8203;facility">cubrid_&#8203;error_&#8203;code_&#8203;facility</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-error-msg.php" title="cubrid_&#8203;error_&#8203;msg">cubrid_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-execute.php" title="cubrid_&#8203;execute">cubrid_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch.php" title="cubrid_&#8203;fetch">cubrid_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-free-result.php" title="cubrid_&#8203;free_&#8203;result">cubrid_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get.php" title="cubrid_&#8203;get">cubrid_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-autocommit.php" title="cubrid_&#8203;get_&#8203;autocommit">cubrid_&#8203;get_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-charset.php" title="cubrid_&#8203;get_&#8203;charset">cubrid_&#8203;get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-class-name.php" title="cubrid_&#8203;get_&#8203;class_&#8203;name">cubrid_&#8203;get_&#8203;class_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-client-info.php" title="cubrid_&#8203;get_&#8203;client_&#8203;info">cubrid_&#8203;get_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-db-parameter.php" title="cubrid_&#8203;get_&#8203;db_&#8203;parameter">cubrid_&#8203;get_&#8203;db_&#8203;parameter</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-query-timeout.php" title="cubrid_&#8203;get_&#8203;query_&#8203;timeout">cubrid_&#8203;get_&#8203;query_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-get-server-info.php" title="cubrid_&#8203;get_&#8203;server_&#8203;info">cubrid_&#8203;get_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-insert-id.php" title="cubrid_&#8203;insert_&#8203;id">cubrid_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-is-instance.php" title="cubrid_&#8203;is_&#8203;instance">cubrid_&#8203;is_&#8203;instance</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob-close.php" title="cubrid_&#8203;lob_&#8203;close">cubrid_&#8203;lob_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob-export.php" title="cubrid_&#8203;lob_&#8203;export">cubrid_&#8203;lob_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob-get.php" title="cubrid_&#8203;lob_&#8203;get">cubrid_&#8203;lob_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob-send.php" title="cubrid_&#8203;lob_&#8203;send">cubrid_&#8203;lob_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob-size.php" title="cubrid_&#8203;lob_&#8203;size">cubrid_&#8203;lob_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-bind.php" title="cubrid_&#8203;lob2_&#8203;bind">cubrid_&#8203;lob2_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-close.php" title="cubrid_&#8203;lob2_&#8203;close">cubrid_&#8203;lob2_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-export.php" title="cubrid_&#8203;lob2_&#8203;export">cubrid_&#8203;lob2_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-import.php" title="cubrid_&#8203;lob2_&#8203;import">cubrid_&#8203;lob2_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-new.php" title="cubrid_&#8203;lob2_&#8203;new">cubrid_&#8203;lob2_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-read.php" title="cubrid_&#8203;lob2_&#8203;read">cubrid_&#8203;lob2_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-seek.php" title="cubrid_&#8203;lob2_&#8203;seek">cubrid_&#8203;lob2_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-seek64.php" title="cubrid_&#8203;lob2_&#8203;seek64">cubrid_&#8203;lob2_&#8203;seek64</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-size.php" title="cubrid_&#8203;lob2_&#8203;size">cubrid_&#8203;lob2_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-size64.php" title="cubrid_&#8203;lob2_&#8203;size64">cubrid_&#8203;lob2_&#8203;size64</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-tell.php" title="cubrid_&#8203;lob2_&#8203;tell">cubrid_&#8203;lob2_&#8203;tell</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-tell64.php" title="cubrid_&#8203;lob2_&#8203;tell64">cubrid_&#8203;lob2_&#8203;tell64</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lob2-write.php" title="cubrid_&#8203;lob2_&#8203;write">cubrid_&#8203;lob2_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lock-read.php" title="cubrid_&#8203;lock_&#8203;read">cubrid_&#8203;lock_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-lock-write.php" title="cubrid_&#8203;lock_&#8203;write">cubrid_&#8203;lock_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-move-cursor.php" title="cubrid_&#8203;move_&#8203;cursor">cubrid_&#8203;move_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-next-result.php" title="cubrid_&#8203;next_&#8203;result">cubrid_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-num-cols.php" title="cubrid_&#8203;num_&#8203;cols">cubrid_&#8203;num_&#8203;cols</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-num-rows.php" title="cubrid_&#8203;num_&#8203;rows">cubrid_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-pconnect.php" title="cubrid_&#8203;pconnect">cubrid_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-pconnect-with-url.php" title="cubrid_&#8203;pconnect_&#8203;with_&#8203;url">cubrid_&#8203;pconnect_&#8203;with_&#8203;url</a>
                        </li>
                                                <li class="current">
                            <a href="function.cubrid-prepare.php" title="cubrid_&#8203;prepare">cubrid_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-put.php" title="cubrid_&#8203;put">cubrid_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-rollback.php" title="cubrid_&#8203;rollback">cubrid_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-schema.php" title="cubrid_&#8203;schema">cubrid_&#8203;schema</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-seq-drop.php" title="cubrid_&#8203;seq_&#8203;drop">cubrid_&#8203;seq_&#8203;drop</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-seq-insert.php" title="cubrid_&#8203;seq_&#8203;insert">cubrid_&#8203;seq_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-seq-put.php" title="cubrid_&#8203;seq_&#8203;put">cubrid_&#8203;seq_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-set-add.php" title="cubrid_&#8203;set_&#8203;add">cubrid_&#8203;set_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-set-autocommit.php" title="cubrid_&#8203;set_&#8203;autocommit">cubrid_&#8203;set_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-set-db-parameter.php" title="cubrid_&#8203;set_&#8203;db_&#8203;parameter">cubrid_&#8203;set_&#8203;db_&#8203;parameter</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-set-drop.php" title="cubrid_&#8203;set_&#8203;drop">cubrid_&#8203;set_&#8203;drop</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-set-query-timeout.php" title="cubrid_&#8203;set_&#8203;query_&#8203;timeout">cubrid_&#8203;set_&#8203;query_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-version.php" title="cubrid_&#8203;version">cubrid_&#8203;version</a>
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
