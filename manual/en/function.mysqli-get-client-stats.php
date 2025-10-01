<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_get_client_stats - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mysqli-get-client-stats.php">
 <link rel="shorturl" href="https://www.php.net/mysqli-get-client-stats">
 <link rel="alternate" href="https://www.php.net/mysqli-get-client-stats" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mysqli-execute.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mysqli-get-links-stats.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mysqli-get-client-stats.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mysqli-get-client-stats.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mysqli-get-client-stats.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mysqli-get-client-stats.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mysqli-get-client-stats.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mysqli-get-client-stats.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mysqli-get-client-stats.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mysqli-get-client-stats.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mysqli-get-client-stats.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mysqli-get-client-stats.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mysqli-get-client-stats.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns client per-process statistics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_get_client_stats - Manual" />
<meta name="twitter:description" content="Returns client per-process statistics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_get_client_stats - Manual" />
<meta itemprop="description" content="Returns client per-process statistics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns client per-process statistics" />

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
        <a href="function.mysqli-get-links-stats.php">
          mysqli_get_links_stats &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mysqli-execute.php">
          &laquo; mysqli_execute        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='ref.mysqli.php'>Aliases and deprecated Mysqli Functions</a></li>      </ul>
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
            <option value='en/function.mysqli-get-client-stats.php' selected="selected">English</option>
            <option value='de/function.mysqli-get-client-stats.php'>German</option>
            <option value='es/function.mysqli-get-client-stats.php'>Spanish</option>
            <option value='fr/function.mysqli-get-client-stats.php'>French</option>
            <option value='it/function.mysqli-get-client-stats.php'>Italian</option>
            <option value='ja/function.mysqli-get-client-stats.php'>Japanese</option>
            <option value='pt_BR/function.mysqli-get-client-stats.php'>Brazilian Portuguese</option>
            <option value='ru/function.mysqli-get-client-stats.php'>Russian</option>
            <option value='tr/function.mysqli-get-client-stats.php'>Turkish</option>
            <option value='uk/function.mysqli-get-client-stats.php'>Ukrainian</option>
            <option value='zh/function.mysqli-get-client-stats.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mysqli-get-client-stats" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_get_client_stats</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_get_client_stats</span> &mdash; <span class="dc-title">Returns client per-process statistics</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.mysqli-get-client-stats-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mysqli_get_client_stats</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Returns client per-process statistics.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mysqli-get-client-stats-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.mysqli-get-client-stats-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array with client stats.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mysqli-get-client-stats-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1681">
    <p><strong>Example #1 A <span class="function"><strong>mysqli_get_client_stats()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">mysqli_get_client_stats</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [bytes_sent] =&gt; 43
    [bytes_received] =&gt; 80
    [packets_sent] =&gt; 1
    [packets_received] =&gt; 2
    [protocol_overhead_in] =&gt; 8
    [protocol_overhead_out] =&gt; 4
    [bytes_received_ok_packet] =&gt; 11
    [bytes_received_eof_packet] =&gt; 0
    [bytes_received_rset_header_packet] =&gt; 0
    [bytes_received_rset_field_meta_packet] =&gt; 0
    [bytes_received_rset_row_packet] =&gt; 0
    [bytes_received_prepare_response_packet] =&gt; 0
    [bytes_received_change_user_packet] =&gt; 0
    [packets_sent_command] =&gt; 0
    [packets_received_ok] =&gt; 1
    [packets_received_eof] =&gt; 0
    [packets_received_rset_header] =&gt; 0
    [packets_received_rset_field_meta] =&gt; 0
    [packets_received_rset_row] =&gt; 0
    [packets_received_prepare_response] =&gt; 0
    [packets_received_change_user] =&gt; 0
    [result_set_queries] =&gt; 0
    [non_result_set_queries] =&gt; 0
    [no_index_used] =&gt; 0
    [bad_index_used] =&gt; 0
    [slow_queries] =&gt; 0
    [buffered_sets] =&gt; 0
    [unbuffered_sets] =&gt; 0
    [ps_buffered_sets] =&gt; 0
    [ps_unbuffered_sets] =&gt; 0
    [flushed_normal_sets] =&gt; 0
    [flushed_ps_sets] =&gt; 0
    [ps_prepared_never_executed] =&gt; 0
    [ps_prepared_once_executed] =&gt; 0
    [rows_fetched_from_server_normal] =&gt; 0
    [rows_fetched_from_server_ps] =&gt; 0
    [rows_buffered_from_client_normal] =&gt; 0
    [rows_buffered_from_client_ps] =&gt; 0
    [rows_fetched_from_client_normal_buffered] =&gt; 0
    [rows_fetched_from_client_normal_unbuffered] =&gt; 0
    [rows_fetched_from_client_ps_buffered] =&gt; 0
    [rows_fetched_from_client_ps_unbuffered] =&gt; 0
    [rows_fetched_from_client_ps_cursor] =&gt; 0
    [rows_skipped_normal] =&gt; 0
    [rows_skipped_ps] =&gt; 0
    [copy_on_write_saved] =&gt; 0
    [copy_on_write_performed] =&gt; 0
    [command_buffer_too_small] =&gt; 0
    [connect_success] =&gt; 1
    [connect_failure] =&gt; 0
    [connection_reused] =&gt; 0
    [reconnect] =&gt; 0
    [pconnect_success] =&gt; 0
    [active_connections] =&gt; 1
    [active_persistent_connections] =&gt; 0
    [explicit_close] =&gt; 0
    [implicit_close] =&gt; 0
    [disconnect_close] =&gt; 0
    [in_middle_of_command_close] =&gt; 0
    [explicit_free_result] =&gt; 0
    [implicit_free_result] =&gt; 0
    [explicit_stmt_close] =&gt; 0
    [implicit_stmt_close] =&gt; 0
    [mem_emalloc_count] =&gt; 0
    [mem_emalloc_ammount] =&gt; 0
    [mem_ecalloc_count] =&gt; 0
    [mem_ecalloc_ammount] =&gt; 0
    [mem_erealloc_count] =&gt; 0
    [mem_erealloc_ammount] =&gt; 0
    [mem_efree_count] =&gt; 0
    [mem_malloc_count] =&gt; 0
    [mem_malloc_ammount] =&gt; 0
    [mem_calloc_count] =&gt; 0
    [mem_calloc_ammount] =&gt; 0
    [mem_realloc_count] =&gt; 0
    [mem_realloc_ammount] =&gt; 0
    [mem_free_count] =&gt; 0
    [proto_text_fetched_null] =&gt; 0
    [proto_text_fetched_bit] =&gt; 0
    [proto_text_fetched_tinyint] =&gt; 0
    [proto_text_fetched_short] =&gt; 0
    [proto_text_fetched_int24] =&gt; 0
    [proto_text_fetched_int] =&gt; 0
    [proto_text_fetched_bigint] =&gt; 0
    [proto_text_fetched_decimal] =&gt; 0
    [proto_text_fetched_float] =&gt; 0
    [proto_text_fetched_double] =&gt; 0
    [proto_text_fetched_date] =&gt; 0
    [proto_text_fetched_year] =&gt; 0
    [proto_text_fetched_time] =&gt; 0
    [proto_text_fetched_datetime] =&gt; 0
    [proto_text_fetched_timestamp] =&gt; 0
    [proto_text_fetched_string] =&gt; 0
    [proto_text_fetched_blob] =&gt; 0
    [proto_text_fetched_enum] =&gt; 0
    [proto_text_fetched_set] =&gt; 0
    [proto_text_fetched_geometry] =&gt; 0
    [proto_text_fetched_other] =&gt; 0
    [proto_binary_fetched_null] =&gt; 0
    [proto_binary_fetched_bit] =&gt; 0
    [proto_binary_fetched_tinyint] =&gt; 0
    [proto_binary_fetched_short] =&gt; 0
    [proto_binary_fetched_int24] =&gt; 0
    [proto_binary_fetched_int] =&gt; 0
    [proto_binary_fetched_bigint] =&gt; 0
    [proto_binary_fetched_decimal] =&gt; 0
    [proto_binary_fetched_float] =&gt; 0
    [proto_binary_fetched_double] =&gt; 0
    [proto_binary_fetched_date] =&gt; 0
    [proto_binary_fetched_year] =&gt; 0
    [proto_binary_fetched_time] =&gt; 0
    [proto_binary_fetched_datetime] =&gt; 0
    [proto_binary_fetched_timestamp] =&gt; 0
    [proto_binary_fetched_string] =&gt; 0
    [proto_binary_fetched_blob] =&gt; 0
    [proto_binary_fetched_enum] =&gt; 0
    [proto_binary_fetched_set] =&gt; 0
    [proto_binary_fetched_geometry] =&gt; 0
    [proto_binary_fetched_other] =&gt; 0
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mysqli-get-client-stats-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="mysqlnd.stats.php" class="link">Stats description</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/functions/mysqli-get-client-stats.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mysqli-get-client-stats%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mysqli-get-client-stats&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mysqli-get-client-stats.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mysqli.php">Aliases and deprecated Mysqli Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mysqli-connect.php" title="mysqli_&#8203;connect">mysqli_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.mysqli-escape-string.php" title="escape_&#8203;string">escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.mysqli-execute.php" title="mysqli_&#8203;execute">mysqli_&#8203;execute</a>
                        </li>
                                                <li class="current">
                            <a href="function.mysqli-get-client-stats.php" title="mysqli_&#8203;get_&#8203;client_&#8203;stats">mysqli_&#8203;get_&#8203;client_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="function.mysqli-get-links-stats.php" title="mysqli_&#8203;get_&#8203;links_&#8203;stats">mysqli_&#8203;get_&#8203;links_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="function.mysqli-report.php" title="mysqli_&#8203;report">mysqli_&#8203;report</a>
                        </li>
                                                <li class="">
                            <a href="function.mysqli-set-opt.php" title="set_&#8203;opt">set_&#8203;opt</a>
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
