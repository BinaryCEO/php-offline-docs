<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: oci_new_cursor - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.oci-new-cursor.php">
 <link rel="shorturl" href="https://www.php.net/oci-new-cursor">
 <link rel="alternate" href="https://www.php.net/oci-new-cursor" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.oci-new-connect.php">
 <link rel="next" href="https://www.php.net/manual/en/function.oci-new-descriptor.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.oci-new-cursor.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.oci-new-cursor.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.oci-new-cursor.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.oci-new-cursor.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.oci-new-cursor.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.oci-new-cursor.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.oci-new-cursor.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.oci-new-cursor.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.oci-new-cursor.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.oci-new-cursor.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.oci-new-cursor.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Allocates and returns a new cursor (statement handle)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: oci_new_cursor - Manual" />
<meta name="twitter:description" content="Allocates and returns a new cursor (statement handle)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: oci_new_cursor - Manual" />
<meta itemprop="description" content="Allocates and returns a new cursor (statement handle)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Allocates and returns a new cursor (statement handle)" />

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
        <a href="function.oci-new-descriptor.php">
          oci_new_descriptor &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.oci-new-connect.php">
          &laquo; oci_new_connect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      <li><a href='ref.oci8.php'>OCI8 Functions</a></li>      </ul>
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
            <option value='en/function.oci-new-cursor.php' selected="selected">English</option>
            <option value='de/function.oci-new-cursor.php'>German</option>
            <option value='es/function.oci-new-cursor.php'>Spanish</option>
            <option value='fr/function.oci-new-cursor.php'>French</option>
            <option value='it/function.oci-new-cursor.php'>Italian</option>
            <option value='ja/function.oci-new-cursor.php'>Japanese</option>
            <option value='pt_BR/function.oci-new-cursor.php'>Brazilian Portuguese</option>
            <option value='ru/function.oci-new-cursor.php'>Russian</option>
            <option value='tr/function.oci-new-cursor.php'>Turkish</option>
            <option value='uk/function.oci-new-cursor.php'>Ukrainian</option>
            <option value='zh/function.oci-new-cursor.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.oci-new-cursor" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">oci_new_cursor</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL OCI8 &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">oci_new_cursor</span> &mdash; <span class="dc-title">Allocates and returns a new cursor (statement handle)</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.oci-new-cursor-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>oci_new_cursor</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$connection</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Allocates a new statement handle on the specified connection.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.oci-new-cursor-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">
       An Oracle connection identifier, returned by 
       <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> or <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.oci-new-cursor-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a new statement handle, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.oci-new-cursor-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2010">
    <p><strong>Example #1 Binding a REF CURSOR in an Oracle stored procedure call</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Precreate:<br />//   create or replace procedure myproc(myrc out sys_refcursor) as<br />//   begin<br />//     open myrc for select first_name from employees;<br />//   end;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"hr"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hrpwd"</span><span style="color: #007700">, </span><span style="color: #DD0000">"localhost/XE"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$curs </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_cursor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"begin myproc(:cursbv); end;"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":cursbv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$curs</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_CURSOR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$curs</span><span style="color: #007700">);  </span><span style="color: #FF8000">// Execute the REF CURSOR like a normal statement id<br /></span><span style="color: #007700">while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$curs</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'FIRST_NAME'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$curs</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/functions/oci-new-cursor.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.oci-new-cursor%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.oci-new-cursor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-new-cursor.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110576">  <div class="votes">
    <div id="Vu110576">
    <a href="/manual/vote-note.php?id=110576&amp;page=function.oci-new-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110576">
    <a href="/manual/vote-note.php?id=110576&amp;page=function.oci-new-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110576" title="72% like this...">
    10
    </div>
  </div>
  <a href="#110576" class="name">
  <strong class="user"><em>mgumiel at mgait dot com</em></strong></a><a class="genanchor" href="#110576"> &para;</a><div class="date" title="2012-11-08 09:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110576">
<div class="phpcode"><code><span class="html">Some packages in oracle are functions, and that functions returns a cursor.<br /><br />For example:<br /><br />CREATE FUNCTION F_Function( p1 char(2), p2 int)<br />  RETURN SYS_REFCURSOR<br />AS<br />  my_cursor SYS_REFCURSOR;<br />BEGIN<br />  OPEN my_cursor FOR SELECT * FROM allitems <br />                           WHERE (cod=p1) <br />                                      AND (Number=p2);<br />  RETURN my_cursor;<br />END F_Function; <br /><br />Here is the code that allows to obtain data from a function that returns a cursor.<br /><br />&lt;pre&gt;<br /><span class="default">&lt;?php<br /> $conn</span><span class="keyword">=</span><span class="default">oci_connect</span><span class="keyword">(</span><span class="string">"server"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">);<br />if (!</span><span class="default">$conn</span><span class="keyword">) {<br />    </span><span class="default">$e </span><span class="keyword">= </span><span class="default">oci_error</span><span class="keyword">();<br />    </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">]), </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />}<br /><br />    </span><span class="comment">//You must asign before.<br />    </span><span class="default">$p1 </span><span class="keyword">= </span><span class="string">'03'</span><span class="keyword">;<br />    </span><span class="default">$p2 </span><span class="keyword">= </span><span class="default">2012016191</span><span class="keyword">;<br /><br />    </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">'begin :cursor := server.PKG_package.F_Function(:p1,:p2); end;'</span><span class="keyword">);<br />    </span><span class="default">$p_cursor </span><span class="keyword">= </span><span class="default">oci_new_cursor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />    </span><span class="comment">//Send parameters variable  value  lenght<br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">':p1'</span><span class="keyword">, </span><span class="default">$p1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">':p2'</span><span class="keyword">, </span><span class="default">$p2</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /><br />    </span><span class="comment">//Bind Cursor     put -1 <br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">':cursor'</span><span class="keyword">, </span><span class="default">$p_cursor</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CURSOR</span><span class="keyword">);<br /><br />    </span><span class="comment">// Execute Statement<br />    </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />    </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$p_cursor</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br /><br />    </span><span class="default">oci_fetch_all</span><span class="keyword">(</span><span class="default">$p_cursor</span><span class="keyword">, </span><span class="default">$cursor</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">OCI_FETCHSTATEMENT_BY_ROW</span><span class="keyword">);<br />    echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">);<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95903">  <div class="votes">
    <div id="Vu95903">
    <a href="/manual/vote-note.php?id=95903&amp;page=function.oci-new-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95903">
    <a href="/manual/vote-note.php?id=95903&amp;page=function.oci-new-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95903" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#95903" class="name">
  <strong class="user"><em>sixd at php dot net</em></strong></a><a class="genanchor" href="#95903"> &para;</a><div class="date" title="2010-01-27 10:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95903">
<div class="phpcode"><code><span class="html">Oracle 11.2 introduced support for REF CURSOR prefetching</span></code></div>
  </div>
 </div>
  <div class="note" id="86834">  <div class="votes">
    <div id="Vu86834">
    <a href="/manual/vote-note.php?id=86834&amp;page=function.oci-new-cursor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86834">
    <a href="/manual/vote-note.php?id=86834&amp;page=function.oci-new-cursor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86834" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#86834" class="name">
  <strong class="user"><em>sixd at php dot net</em></strong></a><a class="genanchor" href="#86834"> &para;</a><div class="date" title="2008-11-05 12:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86834">
<div class="phpcode"><code><span class="html">Because OCI8 uses "prefetching" to greatly improve returning query results, but Oracle doesn't support prefetching for REF CURSORs, application performance using REF CURSORs can be greatly improved by writing a PL/SQL function that pulls data from the REF CURSOR and PIPEs the output. The new function can be queried in a SELECT as if it were a table.  See <a href="http://blogs.oracle.com/opal/2008/11/" rel="nofollow" target="_blank">http://blogs.oracle.com/opal/2008/11/</a><br />converting_ref_cursor_to_pipe.html</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.oci-new-cursor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-new-cursor.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.oci8.php">OCI8 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.oci-bind-array-by-name.php" title="oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name">oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-bind-by-name.php" title="oci_&#8203;bind_&#8203;by_&#8203;name">oci_&#8203;bind_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-cancel.php" title="oci_&#8203;cancel">oci_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-client-version.php" title="oci_&#8203;client_&#8203;version">oci_&#8203;client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-close.php" title="oci_&#8203;close">oci_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-commit.php" title="oci_&#8203;commit">oci_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-connect.php" title="oci_&#8203;connect">oci_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-define-by-name.php" title="oci_&#8203;define_&#8203;by_&#8203;name">oci_&#8203;define_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-error.php" title="oci_&#8203;error">oci_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-execute.php" title="oci_&#8203;execute">oci_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch.php" title="oci_&#8203;fetch">oci_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-all.php" title="oci_&#8203;fetch_&#8203;all">oci_&#8203;fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-array.php" title="oci_&#8203;fetch_&#8203;array">oci_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-assoc.php" title="oci_&#8203;fetch_&#8203;assoc">oci_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-object.php" title="oci_&#8203;fetch_&#8203;object">oci_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-row.php" title="oci_&#8203;fetch_&#8203;row">oci_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-is-null.php" title="oci_&#8203;field_&#8203;is_&#8203;null">oci_&#8203;field_&#8203;is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-name.php" title="oci_&#8203;field_&#8203;name">oci_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-precision.php" title="oci_&#8203;field_&#8203;precision">oci_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-scale.php" title="oci_&#8203;field_&#8203;scale">oci_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-size.php" title="oci_&#8203;field_&#8203;size">oci_&#8203;field_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-type.php" title="oci_&#8203;field_&#8203;type">oci_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-type-raw.php" title="oci_&#8203;field_&#8203;type_&#8203;raw">oci_&#8203;field_&#8203;type_&#8203;raw</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-free-descriptor.php" title="oci_&#8203;free_&#8203;descriptor">oci_&#8203;free_&#8203;descriptor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-free-statement.php" title="oci_&#8203;free_&#8203;statement">oci_&#8203;free_&#8203;statement</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-get-implicit-resultset.php" title="oci_&#8203;get_&#8203;implicit_&#8203;resultset">oci_&#8203;get_&#8203;implicit_&#8203;resultset</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-lob-copy.php" title="oci_&#8203;lob_&#8203;copy">oci_&#8203;lob_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-lob-is-equal.php" title="oci_&#8203;lob_&#8203;is_&#8203;equal">oci_&#8203;lob_&#8203;is_&#8203;equal</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-collection.php" title="oci_&#8203;new_&#8203;collection">oci_&#8203;new_&#8203;collection</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-connect.php" title="oci_&#8203;new_&#8203;connect">oci_&#8203;new_&#8203;connect</a>
                        </li>
                                                <li class="current">
                            <a href="function.oci-new-cursor.php" title="oci_&#8203;new_&#8203;cursor">oci_&#8203;new_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-descriptor.php" title="oci_&#8203;new_&#8203;descriptor">oci_&#8203;new_&#8203;descriptor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-num-fields.php" title="oci_&#8203;num_&#8203;fields">oci_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-num-rows.php" title="oci_&#8203;num_&#8203;rows">oci_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-parse.php" title="oci_&#8203;parse">oci_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-password-change.php" title="oci_&#8203;password_&#8203;change">oci_&#8203;password_&#8203;change</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-pconnect.php" title="oci_&#8203;pconnect">oci_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-register-taf-callback.php" title="oci_&#8203;register_&#8203;taf_&#8203;callback">oci_&#8203;register_&#8203;taf_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-result.php" title="oci_&#8203;result">oci_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-rollback.php" title="oci_&#8203;rollback">oci_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-server-version.php" title="oci_&#8203;server_&#8203;version">oci_&#8203;server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-action.php" title="oci_&#8203;set_&#8203;action">oci_&#8203;set_&#8203;action</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-call-timout.php" title="oci_&#8203;set_&#8203;call_&#8203;timeout">oci_&#8203;set_&#8203;call_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-client-identifier.php" title="oci_&#8203;set_&#8203;client_&#8203;identifier">oci_&#8203;set_&#8203;client_&#8203;identifier</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-client-info.php" title="oci_&#8203;set_&#8203;client_&#8203;info">oci_&#8203;set_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-db-operation.php" title="oci_&#8203;set_&#8203;db_&#8203;operation">oci_&#8203;set_&#8203;db_&#8203;operation</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-edition.php" title="oci_&#8203;set_&#8203;edition">oci_&#8203;set_&#8203;edition</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-module-name.php" title="oci_&#8203;set_&#8203;module_&#8203;name">oci_&#8203;set_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-prefetch.php" title="oci_&#8203;set_&#8203;prefetch">oci_&#8203;set_&#8203;prefetch</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-prefetch-lob.php" title="oci_&#8203;set_&#8203;prefetch_&#8203;lob">oci_&#8203;set_&#8203;prefetch_&#8203;lob</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-statement-type.php" title="oci_&#8203;statement_&#8203;type">oci_&#8203;statement_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-unregister-taf-callback.php" title="oci_&#8203;unregister_&#8203;taf_&#8203;callback">oci_&#8203;unregister_&#8203;taf_&#8203;callback</a>
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
