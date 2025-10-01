<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: oci_new_descriptor - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.oci-new-descriptor.php">
 <link rel="shorturl" href="https://www.php.net/oci-new-descriptor">
 <link rel="alternate" href="https://www.php.net/oci-new-descriptor" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.oci-new-cursor.php">
 <link rel="next" href="https://www.php.net/manual/en/function.oci-num-fields.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.oci-new-descriptor.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.oci-new-descriptor.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.oci-new-descriptor.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.oci-new-descriptor.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.oci-new-descriptor.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.oci-new-descriptor.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.oci-new-descriptor.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.oci-new-descriptor.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.oci-new-descriptor.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.oci-new-descriptor.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.oci-new-descriptor.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initializes a new empty LOB or FILE descriptor" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: oci_new_descriptor - Manual" />
<meta name="twitter:description" content="Initializes a new empty LOB or FILE descriptor" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: oci_new_descriptor - Manual" />
<meta itemprop="description" content="Initializes a new empty LOB or FILE descriptor" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initializes a new empty LOB or FILE descriptor" />

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
        <a href="function.oci-num-fields.php">
          oci_num_fields &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.oci-new-cursor.php">
          &laquo; oci_new_cursor        </a>
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
            <option value='en/function.oci-new-descriptor.php' selected="selected">English</option>
            <option value='de/function.oci-new-descriptor.php'>German</option>
            <option value='es/function.oci-new-descriptor.php'>Spanish</option>
            <option value='fr/function.oci-new-descriptor.php'>French</option>
            <option value='it/function.oci-new-descriptor.php'>Italian</option>
            <option value='ja/function.oci-new-descriptor.php'>Japanese</option>
            <option value='pt_BR/function.oci-new-descriptor.php'>Brazilian Portuguese</option>
            <option value='ru/function.oci-new-descriptor.php'>Russian</option>
            <option value='tr/function.oci-new-descriptor.php'>Turkish</option>
            <option value='uk/function.oci-new-descriptor.php'>Ukrainian</option>
            <option value='zh/function.oci-new-descriptor.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.oci-new-descriptor" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">oci_new_descriptor</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL OCI8 &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">oci_new_descriptor</span> &mdash; <span class="dc-title">Initializes a new empty LOB or FILE descriptor</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.oci-new-descriptor-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>oci_new_descriptor</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$connection</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="oci8.constants.php#constant.oci-dtype-lob">OCI_DTYPE_LOB</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.ocilob.php" class="type OCILob">OCILob</a></span></span></div>

  <p class="para rdfs-comment">
   Allocates resources to hold descriptor or LOB locator. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.oci-new-descriptor-parameters">
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
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       Valid values for <code class="parameter">type</code> are: 
       <strong><code><a href="oci8.constants.php#constant.oci-dtype-file">OCI_DTYPE_FILE</a></code></strong>, <strong><code><a href="oci8.constants.php#constant.oci-dtype-lob">OCI_DTYPE_LOB</a></code></strong> and
       <strong><code><a href="oci8.constants.php#constant.oci-dtype-rowid">OCI_DTYPE_ROWID</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.oci-new-descriptor-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a new LOB or FILE descriptor on success, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.oci-new-descriptor-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2011">
    <p><strong>Example #1 <span class="function"><strong>oci_new_descriptor()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* This script is designed to be called from a HTML form.<br /> * It expects $user, $password, $table, $where, and $commitsize<br /> * to be passed in from the form.  The script then deletes<br /> * the selected rows using the ROWID and commits after each<br /> * set of $commitsize rows. (Use with care, there is no rollback)<br /> */<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"select rowid from </span><span style="color: #0000BB">$table</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$where</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rowid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_ROWID</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_define_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">"ROWID"</span><span style="color: #007700">, </span><span style="color: #0000BB">$rowid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />while (</span><span style="color: #0000BB">oci_fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$nrows </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$delete </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"delete from </span><span style="color: #0000BB">$table</span><span style="color: #DD0000"> where ROWID = :rid"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">, </span><span style="color: #DD0000">":rid"</span><span style="color: #007700">, </span><span style="color: #0000BB">$rowid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_ROWID</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$nrows</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    if ((</span><span style="color: #0000BB">$nrows </span><span style="color: #007700">% </span><span style="color: #0000BB">$commitsize</span><span style="color: #007700">) == </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">$nrows </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$nrows</span><span style="color: #DD0000"> deleted...\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #FF8000">/* This script demonstrates file upload to LOB columns<br />     * The formfield used for this example looks like this<br />     * &lt;form action="upload.php" method="post" enctype="multipart/form-data"&gt;<br />     * &lt;input type="file" name="lob_upload" /&gt;<br />     * ...<br />     */<br />  </span><span style="color: #007700">if (!isset(</span><span style="color: #0000BB">$lob_upload</span><span style="color: #007700">) || </span><span style="color: #0000BB">$lob_upload </span><span style="color: #007700">== </span><span style="color: #DD0000">'none'</span><span style="color: #007700">){<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;form action="upload.php" method="post" enctype="multipart/form-data"&gt;<br />Upload file: &lt;input type="file" name="lob_upload" /&gt;&lt;br /&gt;<br />&lt;input type="submit" value="Upload" /&gt; - &lt;input type="reset" value="Reset" /&gt;<br />&lt;/form&gt;<br /><span style="color: #0000BB">&lt;?php<br />  </span><span style="color: #007700">} else {<br /><br />     </span><span style="color: #FF8000">// $lob_upload contains the temporary filename of the uploaded file<br /><br />     // see also the features section on file upload,<br />     // if you would like to use secure uploads<br /><br />     </span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">$lob </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_LOB</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"insert into </span><span style="color: #0000BB">$table</span><span style="color: #DD0000"> (id, the_blob)<br />               values(my_seq.NEXTVAL, EMPTY_BLOB()) returning the_blob into :the_blob"</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">':the_blob'</span><span style="color: #007700">, </span><span style="color: #0000BB">$lob</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_BLOB</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_DEFAULT</span><span style="color: #007700">);<br />     if (</span><span style="color: #0000BB">$lob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">savefile</span><span style="color: #007700">(</span><span style="color: #0000BB">$lob_upload</span><span style="color: #007700">)){<br />        </span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />        echo </span><span style="color: #DD0000">"Blob successfully uploaded\n"</span><span style="color: #007700">;<br />     }else{<br />        echo </span><span style="color: #DD0000">"Couldn't upload Blob\n"</span><span style="color: #007700">;<br />     }<br />     </span><span style="color: #0000BB">$lob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br />     </span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />  }<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2012">
    <p><strong>Example #2 <span class="function"><strong>oci_new_descriptor()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Calling PL/SQL stored procedures which contain clobs as input<br /> * parameters.<br /> * Example PL/SQL stored procedure signature is:<br /> *<br /> * PROCEDURE save_data<br /> *   Argument Name                  Type                    In/Out Default?<br /> *   ------------------------------ ----------------------- ------ --------<br /> *   KEY                            NUMBER(38)              IN<br /> *   DATA                           CLOB                    IN<br /> *<br /> */<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"begin save_data(:key, :data); end;"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_LOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">':key'</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">':data'</span><span style="color: #007700">, </span><span style="color: #0000BB">$clob</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_CLOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">write</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_DEFAULT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.oci-new-descriptor-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.oci-bind-by-name.php" class="function" rel="rdfs-seeAlso">oci_bind_by_name()</a> - Binds a PHP variable to an Oracle placeholder</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/functions/oci-new-descriptor.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.oci-new-descriptor%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.oci-new-descriptor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-new-descriptor.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="53682">  <div class="votes">
    <div id="Vu53682">
    <a href="/manual/vote-note.php?id=53682&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53682">
    <a href="/manual/vote-note.php?id=53682&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53682" title="80% like this...">
    3
    </div>
  </div>
  <a href="#53682" class="name">
  <strong class="user"><em>&lt;Serg Petrenko&gt; pserg at inkfrog dot com</em></strong></a><a class="genanchor" href="#53682"> &para;</a><div class="date" title="2005-06-08 09:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53682">
<div class="phpcode"><code><span class="html">How to insert big XML data as CLOB into table with XMLType field.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//CREATE TABLE sometable(
<br />//id number(8) not null,
<br />//record XMLType
<br />//) XMLTYPE COLUMN record STORE AS OBJECT RELATIONAL
<br />//XMLSCHEMA "someschema" ELEMENT "some_element";
<br />//
<br />
<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"INSERT INTO sometable(id, record) VALUES(some_sequqnce.nextval, sys.xmltype.createxml(:rec)) RETURNING ID INTO :rid"</span><span class="keyword">;
<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">OCIParse</span><span class="keyword">(</span><span class="default">$ora_conn</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">);
<br /></span><span class="default">$clob </span><span class="keyword">= </span><span class="default">OCINewDescriptor</span><span class="keyword">(</span><span class="default">$ora_conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);
<br /></span><span class="default">$rowid </span><span class="keyword">= </span><span class="default">OCINewDescriptor</span><span class="keyword">(</span><span class="default">$ora_conn</span><span class="keyword">,</span><span class="default">OCI_D_ROWID</span><span class="keyword">);
<br /></span><span class="default">OCIBindByName</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':rec'</span><span class="keyword">, &amp;</span><span class="default">$clob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">,</span><span class="default">OCI_B_CLOB</span><span class="keyword">);
<br /></span><span class="default">OCIBindByName</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':rid'</span><span class="keyword">, </span><span class="default">$rowid</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">WriteTemporary</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">,</span><span class="default">OCI_TEMP_CLOB</span><span class="keyword">);
<br /></span><span class="default">$success </span><span class="keyword">= </span><span class="default">OCIExecute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">,</span><span class="default">OCI_DEFAULT</span><span class="keyword">);
<br />if(!</span><span class="default">$success</span><span class="keyword">) {
<br /></span><span class="default">OCICommit</span><span class="keyword">(</span><span class="default">$ora_conn</span><span class="keyword">);
<br />}
<br /></span><span class="default">OCIFreeStatement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br /></span><span class="default">OCIFreeDesc</span><span class="keyword">(</span><span class="default">$lob</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope it will help :)</span></code></div>
  </div>
 </div>
  <div class="note" id="55201">  <div class="votes">
    <div id="Vu55201">
    <a href="/manual/vote-note.php?id=55201&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55201">
    <a href="/manual/vote-note.php?id=55201&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55201" title="66% like this...">
    1
    </div>
  </div>
  <a href="#55201" class="name">
  <strong class="user"><em>kirt at diagonalsoftware dot com</em></strong></a><a class="genanchor" href="#55201"> &para;</a><div class="date" title="2005-07-27 07:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55201">
<div class="phpcode"><code><span class="html">Here is an example of retrieving a CLOB as an output parameter from a stored procedure. This is a bit hack-y and maybe there's a cleaner way to do this, but I couldn't find one. The following definitely works with Oracle 9:
<br />
<br />// the query to call the procedure, which includes declaring the
<br />// output parameter and assigning the result to a variable to be bound.
<br />$qry = '
<br />declare clob_out clob;
<br />begin
<br />  myprocedure(someparam_in, clob_out); 
<br />  :myclob := clob_out;
<br />end;
<br />';
<br />
<br />// parse the query and bind the 'myclob' variable
<br />$sth = OCIParse($conn,$qry);
<br />$myclob = OCINewDescriptor($conn,OCI_D_LOB);
<br />OCIBindByName($sth,":myclob",$myclob,-1,OCI_B_CLOB);
<br />
<br />OCIExecute($sth);
<br />
<br />// display the results
<br />echo $myclob-&gt;load();</span></code></div>
  </div>
 </div>
  <div class="note" id="36035">  <div class="votes">
    <div id="Vu36035">
    <a href="/manual/vote-note.php?id=36035&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36035">
    <a href="/manual/vote-note.php?id=36035&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36035" title="66% like this...">
    1
    </div>
  </div>
  <a href="#36035" class="name">
  <strong class="user"><em>Maxwell_Smart (at) ThePentagon (dot) com</em></strong></a><a class="genanchor" href="#36035"> &para;</a><div class="date" title="2003-09-23 02:13"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom36035">
<div class="phpcode"><code><span class="html">Just a note. When INSERTing a CLOB, if a VALUES clause is used, Oracle notes: You cannot initialize an internal LOB attribute in an object with a value other than empty or null. That is, you cannot use a literal.
<br />
<br />That's why all the examples here INSERT an EMPTY_CLOB(), and use RETURNING to grab the pointer.
<br />
<br />However, a CLOB can also be INSERTed via a SELECT statement, and that won't require any descriptors.
<br />
<br />Example:
<br />
<br />$Clob = Str_Replace("'", "''", $Clob);
<br />
<br />OCIParse($DB, "INSERT INTO My_Table (My_Clob) SELECT '$Clob' FROM Dual");
<br />
<br />This, of course, allows the use of a WHERE clause as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="17673">  <div class="votes">
    <div id="Vu17673">
    <a href="/manual/vote-note.php?id=17673&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17673">
    <a href="/manual/vote-note.php?id=17673&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17673" title="66% like this...">
    1
    </div>
  </div>
  <a href="#17673" class="name">
  <strong class="user"><em>moom_mong at yahoo dot com</em></strong></a><a class="genanchor" href="#17673"> &para;</a><div class="date" title="2001-12-18 10:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17673">
<div class="phpcode"><code><span class="html">To read a lob, other way: 
<br />
<br />$sql = OCIParse("select * from table_with_lob_field"); 
<br />OCIExecute($sql, OCI_DEFAULT); 
<br />while ( OCIFetch($sql)) { 
<br /> $o = ociresult($sql,"loc_field_name");
<br /> $loc_field_name = $o-&gt;load();
<br /> print $loc_field_name;
<br />};</span></code></div>
  </div>
 </div>
  <div class="note" id="37174">  <div class="votes">
    <div id="Vu37174">
    <a href="/manual/vote-note.php?id=37174&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37174">
    <a href="/manual/vote-note.php?id=37174&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37174" title="100% like this...">
    2
    </div>
  </div>
  <a href="#37174" class="name">
  <strong class="user"><em>Nathan Rogers</em></strong></a><a class="genanchor" href="#37174"> &para;</a><div class="date" title="2003-11-05 03:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37174">
<div class="phpcode"><code><span class="html">I found another method of inserting/updating lob data.  It works the same was as passing lob parameters to a stored procedure and avoids the need for a RETURNING clause.
<br />    $lob = OCINewDescriptor($conn, OCI_D_LOB);
<br />    $stmt = OCIParse($conn,"insert into $table (id, the_blob) 
<br />               values(my_seq.NEXTVAL, :the_blob)");
<br />    OCIBindByName($stmt, ':the_blob', &amp;$lob, -1, OCI_B_BLOB);
<br />    $lob-&gt;WriteTemporary($data);
<br />    OCIExecute($stmt, OCI_DEFAULT);
<br />    $lob-&gt;close();
<br />    $lob-&gt;free();
<br />    OCICommit($conn);
<br />
<br />There are some cases involving triggers where you can't use a RETURNING clause, so this method can come in handy.  The case where I needed it was updating a view that had an instead-of update trigger.</span></code></div>
  </div>
 </div>
  <div class="note" id="4149">  <div class="votes">
    <div id="Vu4149">
    <a href="/manual/vote-note.php?id=4149&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd4149">
    <a href="/manual/vote-note.php?id=4149&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V4149" title="100% like this...">
    2
    </div>
  </div>
  <a href="#4149" class="name">
  <strong class="user"><em>jcd at iddg dot com</em></strong></a><a class="genanchor" href="#4149"> &para;</a><div class="date" title="2000-03-03 02:42"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom4149">
<div class="phpcode"><code><span class="html">[Editor's note: don't use '&amp;' for parameters in bind calls in PHP 5]
<br />
<br />The code up above is somewhat correct... here's an example of how I got a CLOB to work
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">insert_adinfo</span><span class="keyword">(</span><span class="default">$AdInfoID</span><span class="keyword">, </span><span class="default">$MagazineType</span><span class="keyword">, </span><span class="default">$Publish</span><span class="keyword">, </span><span class="default">$DatePost</span><span class="keyword">, </span><span class="default">$BodyText</span><span class="keyword">) 
<br />{
<br />   global </span><span class="default">$db</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// Insert record into database
<br />    </span><span class="default">$clob </span><span class="keyword">= </span><span class="default">OCINewDescriptor</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);
<br />    </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">OCIParse</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">,</span><span class="string">"insert into tblAdInfo values (</span><span class="default">$AdInfoID</span><span class="string">,                  </span><span class="default">$MagazineType</span><span class="string">, '</span><span class="default">$Publish</span><span class="string">', to_date('</span><span class="default">$DatePost</span><span class="string">', 'YYYY-MM-DD'),                  EMPTY_CLOB()) returning BodyText into :the_blob"</span><span class="keyword">);
<br />    </span><span class="default">OCIBindByName</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':the_blob'</span><span class="keyword">, &amp;</span><span class="default">$clob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);
<br />    </span><span class="default">OCIExecute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);
<br />    if(</span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="default">$BodyText</span><span class="keyword">)){
<br />        </span><span class="default">OCICommit</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">);
<br />    }else{
<br />        echo </span><span class="string">"Problems: Couldn't upload Clob\n"</span><span class="keyword">;
<br />    }
<br />   
<br />   </span><span class="default">OCIFreeDescriptor</span><span class="keyword">(</span><span class="default">$clob</span><span class="keyword">);
<br />   </span><span class="default">OCIFreeStatement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20248">  <div class="votes">
    <div id="Vu20248">
    <a href="/manual/vote-note.php?id=20248&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20248">
    <a href="/manual/vote-note.php?id=20248&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20248" title="60% like this...">
    1
    </div>
  </div>
  <a href="#20248" class="name">
  <strong class="user"><em>aidanpeiser at yahoo dot com</em></strong></a><a class="genanchor" href="#20248"> &para;</a><div class="date" title="2002-03-27 11:12"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20248">
<div class="phpcode"><code><span class="html">another way to display your clob details !
<br />
<br />    $query = "select * from Your_clob_table";
<br />    $stmt = OCIParse($conn, $query);
<br />    ociexecute($stmt); 
<br />        
<br />        while ( OCIFetch($stmt)) 
<br />        { 
<br />         $lob = OCIResult($stmt,"CLOB_MESSAGE");
<br />         $CLOB_MESSAGE = $lob-&gt;load();
<br />         echo $CLOB_MESSAGE;
<br />        }
<br />
<br />this works,</span></code></div>
  </div>
 </div>
  <div class="note" id="40849">  <div class="votes">
    <div id="Vu40849">
    <a href="/manual/vote-note.php?id=40849&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40849">
    <a href="/manual/vote-note.php?id=40849&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40849" title="100% like this...">
    1
    </div>
  </div>
  <a href="#40849" class="name">
  <strong class="user"><em>cjbj at hotmail dot com</em></strong></a><a class="genanchor" href="#40849"> &para;</a><div class="date" title="2004-03-16 10:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40849">
<div class="phpcode"><code><span class="html">In PHP5 the way Example 2 passes a CLOB bind variable as an input
<br />parameter to a PL/SQL procedure can be extended to BLOBs.
<br />
<br />The critical change is:
<br />
<br />    OCIBindByName($stmt, ':data', $blob, -1, OCI_B_BLOB);
<br />    $blob-&gt;WriteTemporary($data, OCI_B_BLOB);
<br />
<br />This doesn't work for me in PHP4.  I believe it is because the
<br />implementation of OCIWriteTemporaryLob() always binds as a CLOB.
<br />(This is true as of php4-STABLE-200403170230).  In PHP5 the interface
<br />has changed and a type parameter is permitted.</span></code></div>
  </div>
 </div>
  <div class="note" id="26305">  <div class="votes">
    <div id="Vu26305">
    <a href="/manual/vote-note.php?id=26305&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26305">
    <a href="/manual/vote-note.php?id=26305&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26305" title="100% like this...">
    1
    </div>
  </div>
  <a href="#26305" class="name">
  <strong class="user"><em>tca at engineer dot com</em></strong></a><a class="genanchor" href="#26305"> &para;</a><div class="date" title="2002-10-25 01:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26305">
<div class="phpcode"><code><span class="html">Two examples of retrieving CLOBs from the database.  They are almost identical.  The first is using a package(and cursor) which is how I interface to Oracle at work, and the second is using straight SQL, which most people post examples in.
<br />
<br />I also convert the case from upper to lower, since that is how I prefer to work with assoc arrays...
<br />
<br />Instead of using the get_class() function you could use the OCIColumnType() function which (in this case) would return 'CLOB' as a result...
<br />
<br />/**
<br />* Example 1
<br />*
<br />* Using a PL/SQL package and cursor
<br />*
<br />*/
<br />$cursor=':p_cur';
<br />$sql2="begin clobPackage.getClob($cursor); end;";
<br />$curs=OCINewCursor($conn);
<br />$stmt=OCIParse($conn,$sql2);
<br />OCIBindByName($stmt,$cursor,&amp;$curs,-1,OCI_B_CURSOR);
<br />OCIExecute($stmt,OCI_DEFAULT);
<br />OCIExecute($curs,OCI_DEFAULT);
<br />$x=0;
<br />while(OCIFetch($curs)){ 
<br />  $cols=OCINumCols($curs);
<br />  for($i=1;$i&lt;=$cols;$i++){
<br />    $column_name=OCIColumnName($curs,$i);
<br />    if(is_object($tmp=OCIResult($curs,$i))&amp;&amp;get_class($tmp)=='OCI-Lob'){
<br />      $column_value=$tmp-&gt;load();
<br />    }else{
<br />      $column_value=$tmp;
<br />    }
<br />    $result[$x][strtolower($column_name)]=trim($column_value);
<br />  }
<br />  $x++;
<br />}
<br />OCICommit($conn);
<br />
<br />/**
<br />* Example 2
<br />*
<br />* Using a SELECT
<br />*
<br />*/
<br />$query="SELECT a_num, a_clob FROM clob_test";
<br />$stmt=OCIParse($conn,$query);
<br />OCIExecute($stmt,OCI_DEFAULT); 
<br />$x=0;
<br />while(OCIFetch($stmt)){ 
<br />  $ncols=OCINumCols($stmt);
<br />  for($i=1;$i&lt;=$ncols;$i++){
<br />    $column_name=OCIColumnName($stmt,$i);
<br />    if(is_object($tmp=OCIResult($curs,$i))&amp;&amp;get_class($tmp)=='OCI-Lob'){
<br />      $column_value=$tmp-&gt;load();
<br />    }else{
<br />      $column_value=$tmp;
<br />    }
<br />    $result[$x][strtolower($column_name)]=trim($column_value);
<br />  }
<br />  $x++;
<br />}
<br />OCICommit($conn);
<br />
<br />I hope someone finds this useful.
<br />
<br />Cheers,
<br />Keith.</span></code></div>
  </div>
 </div>
  <div class="note" id="108661">  <div class="votes">
    <div id="Vu108661">
    <a href="/manual/vote-note.php?id=108661&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108661">
    <a href="/manual/vote-note.php?id=108661&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108661" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108661" class="name">
  <strong class="user"><em>Mike</em></strong></a><a class="genanchor" href="#108661"> &para;</a><div class="date" title="2012-05-15 08:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108661">
<div class="phpcode"><code><span class="html">If you're passing a clob variable to oracle stored procedure, you could:
<br />
<br /><span class="default">&lt;?php
<br />$qry </span><span class="keyword">= </span><span class="string">'begin my_sp(:largetext); end;'</span><span class="keyword">;
<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$qry</span><span class="keyword">); </span><span class="comment">//definition of $conn is not included here
<br /></span><span class="default">$clob </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);
<br /></span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":largetext"</span><span class="keyword">, </span><span class="default">$clob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);
<br /></span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">writetemporary</span><span class="keyword">(</span><span class="default">$mylargedata</span><span class="keyword">);
<br /></span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br /></span><span class="default">$clob</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();
<br /></span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hopefully this will help!</span></code></div>
  </div>
 </div>
  <div class="note" id="83091">  <div class="votes">
    <div id="Vu83091">
    <a href="/manual/vote-note.php?id=83091&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83091">
    <a href="/manual/vote-note.php?id=83091&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83091" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83091" class="name">
  <strong class="user"><em>ajitsingh4u at gmail dot com</em></strong></a><a class="genanchor" href="#83091"> &para;</a><div class="date" title="2008-05-09 06:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83091">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// calling stored procedure to get clob data type (we use to get xml from oracle)<br /><br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">^ </span><span class="default">E_NOTICE</span><span class="keyword">);<br /><br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);<br />        <br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"BEGIN sp_employee_xml_data_select(:result); END;"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn </span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="default">$objClob </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br /></span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':result'</span><span class="keyword">, </span><span class="default">$objClob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br /><br /></span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br /></span><span class="default">$xmlData </span><span class="keyword">= </span><span class="default">$objClob</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="default">$objClob</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br /></span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /><br />echo </span><span class="default">$xmlData</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42273">  <div class="votes">
    <div id="Vu42273">
    <a href="/manual/vote-note.php?id=42273&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42273">
    <a href="/manual/vote-note.php?id=42273&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42273" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42273" class="name">
  <strong class="user"><em>cyrill@_malevanov_dot_spb_dot_ru</em></strong></a><a class="genanchor" href="#42273"> &para;</a><div class="date" title="2004-05-10 01:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42273">
<div class="phpcode"><code><span class="html">Passing CLOB to stored procedure and retrieve CLOB too (function lobinout(a in clob) return clob)
<br />
<br />&lt;?
<br />    error_reporting(1+2+4+8);
<br />    $conn = OCILogon('batdtd', 'batdtd', 'batxml');
<br />    
<br />    $lobin = OCINewDescriptor($conn, OCI_D_LOB);
<br />    $lobout = OCINewDescriptor($conn, OCI_D_LOB);
<br />    
<br />    $stmt = OCIParse($conn, "declare rs clob; begin :rs := lobinout(:par); end;");
<br />    $lob_data = 'abcdefgh';
<br />    
<br />    echo "binding lobin...";
<br />    OCIBindByName($stmt, ':par', $lobin, -1, OCI_B_CLOB);
<br />    
<br />    echo "done&lt;br&gt;binding rs...";
<br />    
<br />    OCIBindByName($stmt, ':rs', $lobout, -1, OCI_B_CLOB);
<br />    
<br />    echo "done&lt;br&gt;writing temp lob...";
<br />             // here we pass data to func
<br />    $lobin -&gt; WriteTemporary($lob_data);
<br />    echo "done&lt;br&gt;executing...";
<br />    
<br />    OCIExecute($stmt, OCI_DEFAULT);
<br />             // here we load data returned from func
<br />    echo "done&lt;br&gt;rs = ".$lobout-&gt;load();
<br />    OCICommit($conn);
<br />    $lobin -&gt; free();
<br />    $lobout -&gt; free();
<br />    OCIFreeStatement($stmt);
<br />    OCILogoff($conn);
<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="20605">  <div class="votes">
    <div id="Vu20605">
    <a href="/manual/vote-note.php?id=20605&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20605">
    <a href="/manual/vote-note.php?id=20605&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20605" title="50% like this...">
    0
    </div>
  </div>
  <a href="#20605" class="name">
  <strong class="user"><em>sozturk at emediamillworks dot com</em></strong></a><a class="genanchor" href="#20605"> &para;</a><div class="date" title="2002-04-09 03:30"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20605">
<div class="phpcode"><code><span class="html">I had the same problem with updating the lobs with shorter content as in one of the notes above. The addition of "\0" at the end of the replacement text didn't help either. But the following worked perfectly:
<br />
<br />$sql = "UPDATE sometable SET lob_col = EMPTY_LOB() WHERE key_col = $key RETURNING lob_col INTO :lob";
<br />$stmt = OCIParse($conn,$sql);
<br />$lob = OCINewDescriptor($conn,OCI_D_LOB);
<br />OCIBindByName($stmt,':lob',&amp;$lob,-1,OCI_B_BLOB);
<br />OCIExecute($stmt,OCI_DEFAULT);
<br />$lob-&gt;save($sometext);
<br />$lob-&gt;free();</span></code></div>
  </div>
 </div>
  <div class="note" id="64111">  <div class="votes">
    <div id="Vu64111">
    <a href="/manual/vote-note.php?id=64111&amp;page=function.oci-new-descriptor&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64111">
    <a href="/manual/vote-note.php?id=64111&amp;page=function.oci-new-descriptor&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64111" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#64111" class="name">
  <strong class="user"><em>Ben Hubbard ben at vonik dot com</em></strong></a><a class="genanchor" href="#64111"> &para;</a><div class="date" title="2006-04-07 09:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64111">
<div class="phpcode"><code><span class="html">Here is another example of how to insert a BLOB into table using a PL/SQL function.<br /><br />Oracle Database Code:<br /><br />create table blob_table ( the_blob blob);<br /><br />create or replace function insert_blob(out_blob out blob) <br />    return integer is<br />    begin<br />       insert into blob_table values (EMPTY_BLOB()) <br />         return the_blob into out_blob;<br />       return 0; /* Success */<br />    end insert_blob;<br /><br />PHP Code:<br /><br /><span class="default">&lt;?php<br />  $iResult </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />  </span><span class="default">$strTestData </span><span class="keyword">= </span><span class="string">'Testing 123'</span><span class="keyword">;<br />  </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin :RES := insert_blob(:OUT_BLOB); end;"</span><span class="keyword">);<br /> <br />  </span><span class="default">$objBlob </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":RES"</span><span class="keyword">, </span><span class="default">$iResult</span><span class="keyword">);<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":OUT_BLOB"</span><span class="keyword">, </span><span class="default">$objBlob</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_BLOB</span><span class="keyword">);<br />  </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br />  </span><span class="default">$objBlob</span><span class="keyword">-&gt;</span><span class="default">write</span><span class="keyword">(</span><span class="default">$strTestData</span><span class="keyword">);<br />  </span><span class="default">oci_commit</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br />  </span><span class="default">$objBlob</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />  </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.oci-new-descriptor&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-new-descriptor.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.oci-new-cursor.php" title="oci_&#8203;new_&#8203;cursor">oci_&#8203;new_&#8203;cursor</a>
                        </li>
                                                <li class="current">
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
