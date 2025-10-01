<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/oci8.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.test.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.installation.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation - Manual" />
<meta name="twitter:description" content="Installation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation - Manual" />
<meta itemprop="description" content="Installation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation" />

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
        <a href="oci8.test.php">
          Testing &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      <li><a href='oci8.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/oci8.installation.php' selected="selected">English</option>
            <option value='de/oci8.installation.php'>German</option>
            <option value='es/oci8.installation.php'>Spanish</option>
            <option value='fr/oci8.installation.php'>French</option>
            <option value='it/oci8.installation.php'>Italian</option>
            <option value='ja/oci8.installation.php'>Japanese</option>
            <option value='pt_BR/oci8.installation.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.installation.php'>Russian</option>
            <option value='tr/oci8.installation.php'>Turkish</option>
            <option value='uk/oci8.installation.php'>Ukrainian</option>
            <option value='zh/oci8.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.installation" class="section">
 <h2 class="title">Installation</h2>


<div class="section" id="oci8.configure">
<h2 class="title">Configuring PHP with OCI8</h2>
 <p class="para">
  Review the
  previous <a href="oci8.requirements.php" class="link">Requirements</a>
  section before configuring OCI8.
 </p>
 <p class="para">
  Before starting the web server, OCI8 typically requires several
  Oracle environment variables (see below) to locate libraries, point
  to configuration files, and set some basic properties such as the
  character set used by Oracle libraries.  The variables must be set
  <em>before</em> any PHP process starts.
 </p>
 <p class="para">
  The PHP binary must link with the same, or more recent, major version of
  Oracle libraries as it was configured with.  For example, if you build
  OCI8 with Oracle 19 libraries, then PHP should also be deployed
  and run with Oracle 19 libraries. PHP applications can connect to other
  versions of Oracle Database, since Oracle has client-server cross-version compatibility.
 </p>
</div>
<div class="section">
 <h2 class="title">Installing OCI8 from PECL Using the pecl Command</h2>
 <p class="para">
  The OCI8 extension can be added to an existing PHP installation by using
  the <a href="https://pecl.php.net/package/oci8" class="link external">&raquo;&nbsp;PECL</a> repository.
 </p>
 <p class="para">
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     If you are behind a firewall, set PEAR&#039;s proxy, for example:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
pear config-set http_proxy http://my-proxy.example.com:80/
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Run
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
pecl install oci8
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     For PHP 7, use <code class="literal">pecl install oci8-2.2.0</code>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     When prompted, enter either the value of <code class="literal">$ORACLE_HOME</code>, or
     <code class="literal">instantclient,/path/to/instant/client/lib</code>.
    </p>
    <p class="para">
      Note: Do not enter variable names like <code class="literal">$ORACLE_HOME</code>
      or <code class="literal">$HOME</code> because <code class="literal">pecl</code> will not
      expand them.  Instead, enter an expanded path, for
      example <code class="literal">/opt/oracle/product/19c/dbhome_1</code>
      or <code class="literal">instantclient,/Users/myname/Downloads/instantclient_19_8</code>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     If you get an error <code class="literal">oci8_dtrace_gen.h: No such file or
     directory</code>, it means PHP was built
     with <a href="features.dtrace.php" class="link">DTrace Dynamic Tracing</a> enabled.
     Install using:
    </p>
   <p class="para">
    <div class="informalexample">
     <div class="example-contents screen">
<div class="cdata"><pre>
$ export PHP_DTRACE=yes
$ pecl install oci8
</pre></div>
     </div>
    </div>
   </p>    
   </li>   
   <li class="listitem">
    <p class="para">
      Edit your <var class="filename">php.ini</var> file and add the line:
    </p>
    <p class="para">
      <div class="informalexample">
        <div class="example-contents screen">
          <div class="cdata"><pre>
extension=oci8.so
</pre></div>
        </div>
      </div>
    </p>
    <p class="para">
      Make sure the <var class="filename">php.ini</var>
      directive <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a> is
      set to the directory that <var class="filename">oci8.so</var> was installed
      in.
    </p>
   </li>
  </ul>
 </p>
</div>
<div class="section">
 <h2 class="title">Installing OCI8 from PECL Using phpize</h2>
 <p class="para">
  To install OCI8 on an existing PHP installation when
  the <code class="literal">pecl</code> command is not available, manually download
  the <a href="https://pecl.php.net/package/oci8" class="link external">&raquo;&nbsp;PECL</a> OCI8 package,
  e.g. <var class="filename">oci8-3.0.0.tgz</var>.
 </p>
 <p class="para">
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     Extract the package:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
tar -zxf oci8-3.0.0.tgz
cd oci8-3.0.0
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Prepare the package:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
phpize
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Configure the package, either
     using <code class="literal">$ORACLE_HOME</code> or Instant Client
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure -with-oci8=shared,$ORACLE_HOME
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     or
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure -with-oci8=shared,instantclient,/path/to/instant/client/lib
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     Install the package:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
make install
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     If you get an error <code class="literal">oci8_dtrace_gen.h: No such file or
     directory</code>, it means PHP was built
     with <a href="features.dtrace.php" class="link">DTrace Dynamic Tracing</a> enabled.
     Re-run the <code class="literal">configure</code> and <code class="literal">make</code>
     commands after setting this environment variable:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
$ export PHP_DTRACE=yes
</pre></div>
     </div>
    </div>
   </p>    
   </li>
   <li class="listitem">
    <p class="para">
      Edit your <var class="filename">php.ini</var> file and add the line:
    </p>
    <p class="para">
      <div class="informalexample">
        <div class="example-contents screen">
          <div class="cdata"><pre>
extension=oci8.so
</pre></div>
        </div>
      </div>
    </p>
    <p class="para">
      Make sure the <var class="filename">php.ini</var>
      directive <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a> is
      set to the directory that <var class="filename">oci8.so</var> was installed
      in.
    </p>
   </li>
  </ul>
 </p>
</div>
<div class="section">
 <h2 class="title">Installing OCI8 as a Shared Extension when Building PHP</h2>
 <p class="para">
  If you are building PHP from source code, the
  configuration <code class="literal">shared</code> option can be used to build OCI8 as a shared library
  that can be dynamically loaded into PHP.  Building a shared extension allows
  OCI8 to be upgraded easily without impacting the rest of PHP.
 </p>
 <p class="para">
  Configure OCI8 using one of the following configure options.
 </p>
 <p class="para">
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     If using the free <a href="https://www.oracle.com/database/technologies/instant-client.html" class="link external">&raquo;&nbsp;Oracle Instant
     Client</a> libraries, then do:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure --with-oci8=shared,instantclient,/path/to/instant/client/lib
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     If Instant Client 12.2 (or earlier) is installed from ZIP files, make sure to create
     the library symbolic link first, for example <code class="literal">ln -s
     libclntsh.so.12.1 libclntsh.so</code>.
    </p>
    <p class="para">
     If using an RPM-based installation of Oracle Instant Client, the
     configure line will look like this:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure --with-oci8=shared,instantclient,/usr/lib/oracle/&lt;version&gt;/client/lib
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     For example, <strong class="option configure">--with-oci8=shared,instantclient,/usr/lib/oracle/19.9/client/lib</strong>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     If using an Oracle database or full Oracle Client installation then do:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure --with-oci8=shared,$ORACLE_HOME
</pre></div>
      </div>
     </div>
    </p>
    <p class="para">
     Make sure the web server user
     (<code class="literal">nobody</code>, <code class="literal">www</code>) has access to
     the libraries, initialization files
     and <var class="filename">tnsnames.ora</var> (if used) under
     the <code class="literal">$ORACLE_HOME</code> directory.  With Oracle
     10<em>g</em>R2, you may need to run
     the <var class="filename">$ORACLE_HOME/install/changePerm.sh</var>
     utility to give directory access.
    </p>
   </li>
  </ul>
 </p>
 <p class="para">
  After configuration, follow the usual PHP building procedure,
  e.g. <em>make install</em>.  The OCI8 shared extension
  <var class="filename">oci8.so</var> library will be created.  It may need
  to be manually moved to the PHP extension directory, specified by
  the <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a> option in
  your <var class="filename">php.ini</var> file.
 </p>
 <p class="para">
  To complete installation of OCI8, edit <var class="filename">php.ini</var> and add the line:
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents screen">
<div class="cdata"><pre>
extension=oci8.so
</pre></div>
   </div>
  </div>
 </p>
</div>
<div class="section">
 <h2 class="title">Installing OCI8 as a Statically Compiled Extension when Building PHP</h2>
 <p class="para">
  If you are building PHP from source code, you can configure PHP to include
  OCI8 as a static extension using one of the following configure options.
 </p>
 <p class="para">
  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     If using Oracle Instant Client, then do:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure --with-oci8=instantclient,/path/to/instant/client/lib
</pre></div>
      </div>
     </div>
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     If using an Oracle database or full Oracle Client installation then do:
    </p>
    <p class="para">
     <div class="informalexample">
      <div class="example-contents screen">
<div class="cdata"><pre>
./configure --with-oci8=$ORACLE_HOME
</pre></div>
      </div>
     </div>
    </p>
   </li>
  </ul>
 </p>
 <p class="para">
  After configuration, follow the usual PHP building procedure,
  e.g. <em>make install</em>.  After successful
  compilation, you do not need to add <var class="filename">oci8.so</var> to
  <var class="filename">php.ini</var>.  No additional build steps are required.
 </p>
</div>
<div class="section">
 <h2 class="title">Installing OCI8 on Windows</h2>
 <p class="para">
  The OCI8 extension can be added to an existing PHP installation by using the
  DLLs from <a href="https://pecl.php.net/package/oci8" class="link external">&raquo;&nbsp;PECL</a> repository or
  the libraries in your PHP installation&#039;s <code class="literal">ext</code> directory.
 </p>
 <p class="para">
  With Oracle 12<em>c</em> (or later) libraries, uncomment one of
  the <var class="filename">php.ini</var> lines <code class="literal">extension=php_oci8_12c.dll</code>
  or <code class="literal">extension=php_oci8_11g.dll</code>
  or <code class="literal">extension=php_oci8.dll</code>. Only one of these DLLs may be
  enabled at a time. DLLs with higher versions may contain more
  functionality. Not all DLLs may be available for all versions of PHP.  Make
  sure <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a> is set to the
  directory containing the PHP extension DLLs.
 </p>
 <p class="para">
  If using Instant Client, set the system <var class="envar">PATH</var>
  environment variable to the Oracle library directory.
 </p>
</div>
<div class="section">
 <h2 class="title">Setting the Oracle Environment</h2>
 <p class="para">
  Before using this extension, make sure that the Oracle environment
  variables are properly set for the web daemon user.  If your web
  server is automatically started at boot time then make sure that the
  boot-time environment is also configured correctly.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Do not set Oracle environment variables
   using <span class="function"><a href="function.putenv.php" class="function">putenv()</a></span> in a PHP script because Oracle
   libraries may be loaded and initialized before your script
   runs. Variables set with <span class="function"><a href="function.putenv.php" class="function">putenv()</a></span> may then cause
   conflicts, crashes, or unpredictable behavior.  Some functions may
   work but others might give subtle errors. The variables should be
   set up <em>before</em> the web server is started.  
  </p>
 </p></blockquote>
 <p class="para">
  On Red Hat Linux and variants, export variables at the end of
  <var class="filename">/etc/sysconfig/httpd</var>.  Other systems with
  Apache 2 may use an <var class="filename">envvars</var> script in the
  Apache <var class="filename">bin</var> directory.  A third option, the
  Apache <code class="literal">SetEnv</code> directive
  in <var class="filename">httpd.conf</var>, may work in some systems but is
  known to be insufficient in others.
 </p>
 <p class="para">
  To check that environment variables are set correctly,
  use <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> and check
  the <em>Environment</em> (not the <em>Apache
  Environment</em>) section contains the expected variables.
 </p>
 <p class="para">
  The variables that might be needed are included in the following
  table.  Refer to the Oracle documentation for more information on
  all the available variables.
  <table class="doctable table">
   <caption><strong>Common Oracle Environment Variables</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Purpose</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>ORACLE_HOME</td>
      <td>Contains the directory of the full Oracle Database
      software.  Do not set this when using Oracle Instant Client as
      it is unnecessary and may cause installation problems.</td>
     </tr>

     <tr>
      <td>ORACLE_SID</td>
      <td>Contains the name of the database on the local machine to
      be connected to. There is no need to set this if you using
      Oracle Instant Client, or always pass the connection parameter
      to <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>.</td>
     </tr>

     <tr>
      <td>LD_LIBRARY_PATH</td>
      <td>Set this (or its platform equivalent, such
      as <code class="literal">LIBPATH</code>, or <code class="literal">SHLIB_PATH</code>) to the
      location of the Oracle libraries, for
      example <var class="filename">$ORACLE_HOME/lib</var>
      or <var class="filename">/usr/lib/oracle/18.5/client/lib</var>. Note with Instant
      Client ZIP files on Linux it is more reliable to
      use <var class="filename">ldconfig</var> instead, see the Instant Client
      installation instructions.  With Instant Client 19 (or later) RPM
      files, <code class="literal">ldconfig</code> is automatically run for you.  Some
      users use
      <code class="literal">LD_PRELOAD</code> instead
      of <code class="literal">LD_LIBRARY_PATH</code>.</td>
     </tr>

     <tr>
      <td>NLS_LANG</td>
      <td>This is the primary variable for setting the character
      set and globalization information used by the Oracle
      libraries.</td>
     </tr>

     <tr>
      <td>ORA_SDTZ</td>
      <td>Sets the Oracle session timezone.</td>
     </tr>

     <tr>
      <td>TNS_ADMIN</td>
      <td>Contains the directory where the Oracle Net Services configuration
      files such as <var class="filename">tnsnames.ora</var>
      and <var class="filename">sqlnet.ora</var> are kept.  Not needed if
      the <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> connection string uses the Easy
      Connect naming syntax such as <code class="literal">localhost/XE</code>.  Not needed
      if the network configuration files are in one of the default locations
      such
      as <var class="filename">/usr/lib/oracle/VERSION/client/lib/network/admin</var>, <var class="filename">$ORACLE_HOME/network/admin</var>
      or <var class="filename">/etc</var>.</td>
     </tr>

    </tbody>
   
  </table>

   Less frequently used Oracle environment variables include
   <code class="literal">TWO_TASK</code>, <code class="literal">ORA_TZFILE</code>, and the
   various Oracle globalization settings
   like <code class="literal">NLS*</code> and the <code class="literal">ORA_NLS_*</code>
   variables.  
 </p>
</div>
<div class="section">
 <h2 class="title">Troubleshooting</h2>
 <p class="para">
  The most common problem with installing OCI8 is not having the
  Oracle environment correctly set.  This typically appears as a
  problem using <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>
  or <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span>.  The error may be a PHP error
  such as <em>Call to undefined function
  oci_connect()</em>, an Oracle error such as ORA-12705, or even
  an Apache crash.  Check the Apache log files for startup errors and
  see the sections above to resolve this problem.
 </p>
 <p class="para">
  While network errors like ORA-12154 or ORA-12514 indicate an Oracle
  network naming or configuration issue, the root cause may be because
  the PHP environment is incorrectly set up and Oracle libraries are
  unable to locate the <var class="filename">tnsnames.ora</var> configuration
  file.
 </p>
 <p class="para">
  On Windows, having multiple versions of Oracle on the one machine
  can easily cause library clashes unless care is taken to make sure
  PHP only uses the correct version of Oracle.
 </p>
 <p class="para">
  A utility to examine what libraries are being looked for and loaded
  can help resolve missing or clashing library issues, particularly on
  Windows.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>If the web server doesn&#039;t start or crashes at
  startup</strong><br />
  <p class="para">
   Check that Apache is linked with the pthread library:
  </p>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
# ldd /www/apache/bin/httpd
  libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x4001c000)
  libm.so.6 =&gt; /lib/libm.so.6 (0x4002f000)
  libcrypt.so.1 =&gt; /lib/libcrypt.so.1 (0x4004c000)
  libdl.so.2 =&gt; /lib/libdl.so.2 (0x4007a000)
  libc.so.6 =&gt; /lib/libc.so.6 (0x4007e000)
  /lib/ld-linux.so.2 =&gt; /lib/ld-linux.so.2 (0x40000000)
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   If the libpthread is not listed, then reinstall Apache:
  </p>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
# cd /usr/src/apache_1.3.xx
# make clean
# LIBS=-lpthread ./config.status
# make
# make install
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Please note that on some systems like UnixWare, it is libthread
   instead of libpthread. PHP and Apache have to be configured with
   EXTRA_LIBS=-lthread.
  </p>
 </p></blockquote>
</div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/configure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">36 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83747">  <div class="votes">
    <div id="Vu83747">
    <a href="/manual/vote-note.php?id=83747&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83747">
    <a href="/manual/vote-note.php?id=83747&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83747" title="64% like this...">
    25
    </div>
  </div>
  <a href="#83747" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#83747"> &para;</a><div class="date" title="2008-06-10 04:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83747">
<div class="phpcode"><code><span class="html">If you've followed the instructions and you can't even connect to the DB server, welcome to the Oracle hell. Most of the information you'll find is deprecated, incomplete, not for your platform, unnecessary or just plain wrong.
<br />
<br />Typically, you won't need at all those complicate setups you'll read about and they'll probably make things harder. I suggest you get Systernal's "Filemon" utility (for Windows, in Unix you may do with strace) and find out what exact config files and DLLs are being tried by php.exe (or httpd.exe if PHP runs as Apache module or...). Pretty often, the issue is that (e.g.) TNSNAMES.ORA does not have the correct line ending or Apache is looking for a DLL that does not even exist in your hard disc; learning that prevents you to waste time adding more and more useless environmental variables.
<br />
<br />Goog luck.</span></code></div>
  </div>
 </div>
  <div class="note" id="83323">  <div class="votes">
    <div id="Vu83323">
    <a href="/manual/vote-note.php?id=83323&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83323">
    <a href="/manual/vote-note.php?id=83323&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83323" title="71% like this...">
    3
    </div>
  </div>
  <a href="#83323" class="name">
  <strong class="user"><em>mike at macgirvin.com</em></strong></a><a class="genanchor" href="#83323"> &para;</a><div class="date" title="2008-05-20 06:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83323">
<div class="phpcode"><code><span class="html">Some notes to save somebody some grief:
<br />
<br />Installing the Oracle libraries and access module into an existing PHP5 installation on Debian etch without rebuilding php...
<br />
<br />First grab the Linux instantclient from oracle.com - you'll also need the client SDK kit. Here I'm using instantclient 11.1
<br />
<br />create a directory for these such as /home/oracle and unpack both of them to that directory.
<br />
<br />Go into the oracle directory (and into the instantclient_11_1 directory) and create a symlink:
<br />
<br />$ ln -s libclntsh.so.11.1 libclntsh.so
<br />
<br />Grab the oci8 PECL package and unpack it somewhere (~/oci).
<br />
<br />Make sure you have the following packages (in addition to php5, php5-cli, apache2, etc).
<br />
<br />  php5-dev
<br />
<br />  libaio1
<br />
<br />  php-pear
<br /> 
<br />
<br />Go to the oci8 directory (~/oci/). 
<br />
<br />You need to run 'pecl build' once to create the configure script. 
<br />
<br />$pecl build 
<br />
<br />But the problem is that pecl build will claim the files are installed and they are not. I wasted half a day on this one. Now go into the oci8-1.3.0 directory and build again by hand: 
<br />
<br />$ cd oci8-1.3.0 
<br />
<br />$ ./configure --with-oci8=instantclient,/home/oracle/instantclient_11_1 
<br />
<br />$ make
<br />
<br />Fix any errors/warnings before continuing
<br />
<br />Don't make install, which won't work.
<br />
<br />$ cp ./modules/oci8.so /usr/lib/php5/20060613+lfs
<br />
<br />Replace 20060613+lfs with whatever module directory has been setup for you in /usr/lib/php5
<br />
<br />Create /etc/php5/conf.d/oci8.ini:
<br />
<br />----
<br />
<br />extension=oci8.so
<br />
<br />----
<br />
<br />Now run the php cmdline in verbose mode (php -v) and see if everything loaded. Fix it if it didn't.
<br />
<br />You may need some env variables setup in your /etc/init.d/apache2 file to make everything work and actually execute queries, but a phpinfo() at this point should show your oci8 extension. See the php.net Oracle pages if you need help with the env variables.
<br />
<br />Restart the web server
<br />
<br />$ /etc/init.d/apache2 restart</span></code></div>
  </div>
 </div>
  <div class="note" id="107603">  <div class="votes">
    <div id="Vu107603">
    <a href="/manual/vote-note.php?id=107603&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107603">
    <a href="/manual/vote-note.php?id=107603&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107603" title="66% like this...">
    5
    </div>
  </div>
  <a href="#107603" class="name">
  <strong class="user"><em>Saxon Leung</em></strong></a><a class="genanchor" href="#107603"> &para;</a><div class="date" title="2012-02-21 09:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107603">
<div class="phpcode"><code><span class="html">Spending long time in researching how to install this on a freshly installed [Red Hat-based (RHEL, CentOS, Fedora)] Linux, and finally I come to this:
<br />
<br />1) Download &amp; install 
<br />
<br />#yum install oracle-instantclient-basic
<br />#yum install oracle-instantclient-devel
<br />
<br />or 
<br />
<br />Download:
<br />oci8-1.4.7.tgz
<br />oracle-instantclient11.2-basic-11.2.0.3.0-1.x86_64.rpm
<br />oracle-instantclient11.2-devel-11.2.0.3.0-1.x86_64.rpm
<br />
<br />#rpm -i oracle-instantclient11.2-basic-11.2.0.3.0-1.x86_64.rpm
<br />#rpm -i oracle-instantclient11.2-devel-11.2.0.3.0-1.x86_64.rpm
<br />
<br />2) Check PHP version:
<br />
<br />#rpm -qa | grep php
<br />
<br />It should looks sth like this:
<br />php-devel-5.3.10-1.w5
<br />php-pdo-5.3.10-1.w5
<br />php-ldap-5.3.10-1.w5
<br />php-cli-5.3.10-1.w5
<br />php-mysql-5.3.10-1.w5
<br />php-5.3.10-1.w5
<br />php-common-5.3.10-1.w5
<br />
<br />3) Update if needed by:
<br />
<br />#yum --enablerepo=webtatic update php
<br />
<br />** Make sure you have php-devel installed before updating to a newer version, or you might have problem to add package back. If it happened, you\\'ll have to reinstall all php packages (sadly I did):
<br />
<br />#yum remove php-common
<br />#yum --enablerepo=webtatic install php
<br />
<br />4) Remember to install a C compiler for installation use:
<br />#yum install gcc
<br />
<br />5) Unzip oci8-1.4.7.tgz:
<br />#tar xvzf oci8-1.4.7
<br />
<br />6) Run phpize (php-devel required):
<br /># phpize
<br />
<br />7) Setup Config:
<br /># ./configure --with-oci8=shared,instantclient,/usr/lib/oracle/11.2/client64/lib
<br />
<br />8) Add a sym-link to the SDK header files (Comes with the instantclient-devel)
<br />
<br />#ln -s /usr/include/oracle/11.2/client64/ /usr/lib/oracle/11.2/client64/lib/include
<br />
<br />** The installation defaults to use 1 dir path only, so the missing SDK files need to add back to that directory, by adding a sym-link \\"include\\" under the lib folder.
<br />
<br />9) Compile and install:
<br />#make all install
<br />
<br />[Please note that I'm installing on a 64-bit platform so links are pointing at client64 instead of client]</span></code></div>
  </div>
 </div>
  <div class="note" id="44468">  <div class="votes">
    <div id="Vu44468">
    <a href="/manual/vote-note.php?id=44468&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44468">
    <a href="/manual/vote-note.php?id=44468&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44468" title="66% like this...">
    1
    </div>
  </div>
  <a href="#44468" class="name">
  <strong class="user"><em>neogodo at yahoo dot com dot br</em></strong></a><a class="genanchor" href="#44468"> &para;</a><div class="date" title="2004-08-06 06:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44468">
<div class="phpcode"><code><span class="html">Hey guys!!!!
<br />
<br /> I have all these problems and when are solved a php show this:
<br />
<br />_oci_server ORA-12159:connection text especified is too long
<br />
<br />It's simple!!!
<br />
<br />  In the TNSNAMES.ORA remove all space, tab, carriage return on the conection string and, wallah!!! All work fine!!!
<br />
<br />  More info:
<br />
<br />   PHP 5.0.0  with Oci8
<br />   Apache 1.3
<br />
<br />Regards,
<br />Romolo (neogodo@yahoo.com.br).
<br />DBA Oracle
<br />Brazil - SP - Sao Paulo</span></code></div>
  </div>
 </div>
  <div class="note" id="58181">  <div class="votes">
    <div id="Vu58181">
    <a href="/manual/vote-note.php?id=58181&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58181">
    <a href="/manual/vote-note.php?id=58181&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58181" title="61% like this...">
    3
    </div>
  </div>
  <a href="#58181" class="name">
  <strong class="user"><em>scoop at subindie dot com</em></strong></a><a class="genanchor" href="#58181"> &para;</a><div class="date" title="2005-10-26 01:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58181">
<div class="phpcode"><code><span class="html">Regarding compiling with the recently updated OCI8 Extension (<a href="http://pecl.php.net/package/oci8" rel="nofollow" target="_blank">http://pecl.php.net/package/oci8</a>).
<br />
<br />I ran into problems when statically compiling, such as numerous "undefined reference to `zif_oci_***'" errors.  Since I likely won't be the only one to run into this problem, here's some helpful hints:
<br />
<br />If you've previously compiled your php installation, first: make clean
<br />
<br />Then replace the existing php-x.x.x/ext/oci8 directory with the latest package from: <a href="http://pecl.php.net/package/oci8" rel="nofollow" target="_blank">http://pecl.php.net/package/oci8</a>
<br />
<br />./buildconf --force
<br />./config ..
<br />make</span></code></div>
  </div>
 </div>
  <div class="note" id="65361">  <div class="votes">
    <div id="Vu65361">
    <a href="/manual/vote-note.php?id=65361&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65361">
    <a href="/manual/vote-note.php?id=65361&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65361" title="62% like this...">
    2
    </div>
  </div>
  <a href="#65361" class="name">
  <strong class="user"><em>f dot kheiri at ucl dot ac dot uk</em></strong></a><a class="genanchor" href="#65361"> &para;</a><div class="date" title="2006-04-29 07:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65361">
<div class="phpcode"><code><span class="html">To compile PHP 4.4.2 with OCI8 / Oracle 9i / AIX 5.2 (64-bit) / GCC
<br />
<br />PHP will automatically compile against the Oracle 64-bit libraries, which PHP being a 32-bit app, will cause "make" to fail (though it will configure fine). Here's how to avoid this:
<br />
<br />1. replace your PHP's ext/oci8 directory with the latest ext/oci8 directory downloadable from PECL - then remove the old directory entirely
<br />
<br />2. rebuild configure by running:
<br />
<br />./buildconf --force
<br />
<br />...in PHP's root directory. This will rebuild the configure script.
<br />
<br />3. using a tool like sed, in your configure file replace all instances of /path/to/oracle/lib with /path/to/oracle/lib32 - note, this may require GNU's autoconf, m4 and gnumake.
<br />
<br />4. export LD_LIBRARY_PATH=/path/to/oracle/lib32
<br />
<br />5. ./configure --with-oci-8=/path/to/oracle (and any other options)
<br />
<br />Then, the usual make and make install.</span></code></div>
  </div>
 </div>
  <div class="note" id="36808">  <div class="votes">
    <div id="Vu36808">
    <a href="/manual/vote-note.php?id=36808&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36808">
    <a href="/manual/vote-note.php?id=36808&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36808" title="62% like this...">
    2
    </div>
  </div>
  <a href="#36808" class="name">
  <strong class="user"><em>aliquis at die dot spammers dot die dot link-net dot org</em></strong></a><a class="genanchor" href="#36808"> &para;</a><div class="date" title="2003-10-23 06:39"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36808">
<div class="phpcode"><code><span class="html">I've had all kinds of errors with RedHat9(yuck), PHP 4.3.4RC1 and Oracle enterprice server 9.2. For some time I thought that --with-oci8 wouldn't work with Oracle9 but that wasn't the case, the solution was many steps.
<br />
<br />1) install oracle, might require some tricks, on RedHat9 I had to put this in my .bashrc:
<br />export ORACLE_BASE=/opt/ora9
<br />export ORACLE_HOME=$ORACLE_BASE/product/9.2
<br />export PATH=$ORACLE_HOME/bin:$PATH
<br />export ORACLE_OWNER=oracle
<br />export ORACLE_SID=netadmdb
<br />export ORACLE_TERM=vt100
<br />export LD_ASSUME_KERNEL=2.4.1
<br />export THREADS_FLAG=native
<br />export LD_LIBRARY_PATH=$ORACLE_BASE/product/9.2/lib:$LD_LIBRARY_PATH
<br />
<br />2) compile php, use --with-oci8
<br />
<br />3) Make an init-script for the oracle9 database server, as default the TNS listener doesn't run so add that on aswell, example:
<br />#!/bin/bash
<br />export ORACLE_HOME=/opt/ora9/product/9.2
<br />export PATH=$ORACLE_HOME/bin:$PATH
<br />export ORACLE_SID=netadmdb
<br />export DISPLAY=:0
<br />oracle_user=oracle
<br />export oracle_user
<br />case $1 in
<br />start)
<br />su - "$oracle_user"&lt;&lt;EOO
<br />sqlplus /nolog&lt;&lt;EOS
<br />connect / as sysdba
<br />startup
<br />EOS
<br />/opt/ora9/product/9.2/bin/lsnrctl start
<br />EOO
<br />;;
<br />stop)
<br />su - "$oracle_user"&lt;&lt;EOO
<br />/opt/ora9/product/9.2/bin/lsnrctl stop
<br />sqlplus /nolog&lt;&lt;EOS
<br />connect / as sysdba
<br />shutdown immediate
<br />EOS
<br />EOO
<br />;;
<br />*)
<br />echo "Usage: ora9 [start|stop]"
<br />;;
<br />esac
<br />
<br />4) Configure Apache. For some reason it requires some tweaking with environment variables, in the begining I put those in the PHP-script with putenv, later in the httpd.conf with SetEnv and the mod_env module. But I was told to not do that and instead set them in the init script for Apache. So I copied apachectl to /etc/init.d and edited envvars in $APACHE_PATH/bin. First I added all kinds of env variables until I got it to work, and then I removed them one at a time and came to the following minimal configuration:
<br />LD_LIBRARY_PATH="/usr/local/apache2/lib:$LD_LIBRARY_PATH"
<br />ORACLE_HOME=/opt/ora9/product/9.2
<br />LANG=sv_SE
<br />export LD_LIBRARY_PATH ORACLE_HOME LANG
<br />
<br />Earlier I had added NLS_LANG and TNS_ADMIN above those mentioned above (point 1), but it seems those aren't needed really. So no need for TWO_TASK or ORACLE_SID, only needed one is ORACLE_HOME and if you get missing/invalid option for your OCILogon set LANG to something else like I did. Someone earlier said it might have to do with UTF8.
<br />
<br />So if you are sure lsncrtl are started and that you have the correct env-variables set in your $APACHE_PATH/bin/envvars you can just use something like:
<br />
<br />$iDBConn=OCILogon("user","pass","netadmdb");
<br />
<br />in your PHP-script and it should work.
<br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="21901">  <div class="votes">
    <div id="Vu21901">
    <a href="/manual/vote-note.php?id=21901&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21901">
    <a href="/manual/vote-note.php?id=21901&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21901" title="62% like this...">
    2
    </div>
  </div>
  <a href="#21901" class="name">
  <strong class="user"><em>devolver at iastate dot edu</em></strong></a><a class="genanchor" href="#21901"> &para;</a><div class="date" title="2002-05-30 04:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21901">
<div class="phpcode"><code><span class="html">I spent several hours tracking down error ORA 24374, which would result from only *SOME* of my select statements.  This error would be caused if I made a query that would return any non-numerical value.  I am running an Apache 1.3.x webserver and PHP 4.2.1.
<br />
<br />The fix is to add entries in your httpd.conf file that would export your environment settings.  I added these three lines and everything worked like a charm!
<br />SetEnv ORACLE_HOME  /path/to/oracle/home
<br />SetEnv ORA_NLS33  /path/to/oracle/home/ocommon/nls/admin/data
<br />SetEnv NLS_LANG AMERICAN
<br />
<br />Obviously, if your NLS_LANG is different, you should set it to whatever your NLS_LANG actually is.  Ask your friendly DB admin for this information.
<br />
<br />Hope this helps someone who treads down the path that I just followed!
<br />
<br />Trent</span></code></div>
  </div>
 </div>
  <div class="note" id="74410">  <div class="votes">
    <div id="Vu74410">
    <a href="/manual/vote-note.php?id=74410&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74410">
    <a href="/manual/vote-note.php?id=74410&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74410" title="60% like this...">
    1
    </div>
  </div>
  <a href="#74410" class="name">
  <strong class="user"><em>david dot reynoldsat at ipl dot com</em></strong></a><a class="genanchor" href="#74410"> &para;</a><div class="date" title="2007-04-10 07:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74410">
<div class="phpcode"><code><span class="html">I had a problem loading php_oci8.dll with php 5.2, Apache, and windows XP - a module not loaded error, on every apache restart.
<br />I eventually found that I had to add the oracle instantclient library path to the %PATH% under SYSTEM and not under USER.  Doing that, and then rebooting, fixed the error - as Apache is starting as a service (outside the user setup).</span></code></div>
  </div>
 </div>
  <div class="note" id="65165">  <div class="votes">
    <div id="Vu65165">
    <a href="/manual/vote-note.php?id=65165&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65165">
    <a href="/manual/vote-note.php?id=65165&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65165" title="60% like this...">
    1
    </div>
  </div>
  <a href="#65165" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#65165"> &para;</a><div class="date" title="2006-04-25 03:29"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65165">
<div class="phpcode"><code><span class="html"># here's what it took to get it going for me on rhel4 on x86_64 w/ 10gr2 and php5.0.5
<br /># hopefully this will save someone a little grief
<br /># first you must install the 10.2 full client in /app/oracle/product/10.2.0/db_1
<br /># follow all the instructions. This part will be a bitch.
<br />
<br /># install the instantclient basic and sdk like this
<br />mkdir -p /usr/lib/oracle/10.2.0.2/client/lib
<br />unzip -jd /usr/lib/oracle/10.2.0.2/client/lib instantclient-basic-linux-x86-64-10.2.0.2-20060228.zip
<br />mkdir -p /usr/include/oracle/10.2.0.2/client
<br />unzip -jd /usr/lib/oracle/10.2.0.2/client instantclient-sdk-linux-x86-64-10.2.0.2-20060228.zip
<br />ln -s /usr/lib/oracle/10.2.0.2/client/lib/libclntsh.so.10.1 /usr/lib/oracle/10.2.0.2/client/lib/libclntsh.so
<br />
<br /># make the full client use instantclient's files
<br />cd /app/oracle/product/10.2.0/db_1
<br />mv lib oldlib
<br />ln -s /usr/lib/oracle/10.2.0.2/client/lib lib
<br />ln -s /usr/include/oracle/10.2.0.2/client include
<br />
<br />php configure line is: --with-oci8=/app/oracle/product/10.2.0/db_1/</span></code></div>
  </div>
 </div>
  <div class="note" id="27519">  <div class="votes">
    <div id="Vu27519">
    <a href="/manual/vote-note.php?id=27519&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27519">
    <a href="/manual/vote-note.php?id=27519&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27519" title="57% like this...">
    1
    </div>
  </div>
  <a href="#27519" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#27519"> &para;</a><div class="date" title="2002-12-09 01:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27519">
<div class="phpcode"><code><span class="html">Configuring/Compiling PHP as a DSO with Oracle support from source on a Sun Solaris 8 box.  We had already installed Oracle 9.2.0 client tools.
<br />
<br />1. Make sure the following tools are installed
<br />
<br />    autoconf
<br />    automake
<br />    bison
<br />    flex
<br />    gcc
<br />    make
<br />    gzip
<br />    
<br />    They can be downloaded from <a href="http://www.sunfreeware.com." rel="nofollow" target="_blank">http://www.sunfreeware.com.</a>
<br />    
<br />2.  Make sure Apache is installed with DSO support.  We ran the Apache configure/compile like so:
<br />
<br />    LIBS=-lpthread ./configure \
<br />    --prefix=/usr/local/apache \
<br />    --enable-module=most \
<br />    --enable-shared=max
<br />    
<br />    
<br />    make
<br />    make install
<br />    
<br />3.  If you haven't already, install the Oracle client tools.
<br />4.  Make sure the following environment variables are set correctly and are accessible by all users.  We set them in /etc/profile.
<br />
<br />    ORACLE_HOME
<br />    ORACLE_BASE
<br />    NLS_LANG
<br />    ORA_NLS33
<br />    ORACLE_TERM
<br />    LD_LIBRARY_PATH
<br />    
<br />    (technically, only $ORACLE_HOME is required, but you'll want to set the rest in order to make sure things run smoothly afterward)
<br />    
<br />5.  Make sure '/usr/ccs/bin' is in your path.  If not, add it.
<br />6.  Unpack PHP source (php-4.2.3):
<br />
<br />    gunzip php-4.2.3.tar.gz
<br />    tar xvf php-4.2.3.tar
<br />    cd php-4.2.3
<br />
<br />    
<br />7.  Run PHP configure like so :
<br />
<br />    CC=gcc ./configure --with-apxs=/usr/local/apache/bin/apxs \
<br />    --with-config-file-path=/etc \
<br />    --with-mysql \
<br />    --enable-ftp \
<br />    --with-oci8=/path/to/ORACLE_HOME \
<br />    --with-oracle=/path/to/ORACLE_HOME \
<br />    --enable-sigchild
<br />    
<br />8.  Run make:  make
<br />9.  Run this as root:  make install
<br />10.  Change the LoadModule line in httpd.conf to include the fully qualified path.  For us:
<br />
<br />    LoadModule php4_module        /usr/local/apache/libexec/libphp4.so
<br />    
<br />11.  Make sure the PHP files types are recognized in your httpd.conf file:
<br />
<br />    AddType application/x-httpd-php .php
<br />    AddType application/x-httpd-php-source .phps
<br />    
<br />12.  Test the configuration:
<br />
<br />    /usr/local/apache/bin/apachectl configtest
<br />    
<br />    It should return "Syntax OK"
<br />    
<br />13.  Bounce Apache:
<br />
<br />    /usr/local/apache/bin/apachectl restart
<br />    
<br />    
<br />14.  Here's a simple PHP script to test the setup.  If you don't have access to the default tables Oracle provides, change the connections/tablenames/fields to match your setup:
<br />
<br />    <span class="default">&lt;?php
<br />
<br />    $db_conn </span><span class="keyword">= </span><span class="default">ocilogon</span><span class="keyword">(</span><span class="string">"scott"</span><span class="keyword">, </span><span class="string">"tiger"</span><span class="keyword">);
<br />
<br />    </span><span class="default">$cmdstr </span><span class="keyword">= </span><span class="string">"select ename, sal from emp"</span><span class="keyword">;
<br />    </span><span class="default">$parsed </span><span class="keyword">= </span><span class="default">ociparse</span><span class="keyword">(</span><span class="default">$db_conn</span><span class="keyword">, </span><span class="default">$cmdstr</span><span class="keyword">);
<br />    </span><span class="default">ociexecute</span><span class="keyword">(</span><span class="default">$parsed</span><span class="keyword">);
<br />    </span><span class="default">$nrows </span><span class="keyword">= </span><span class="default">ocifetchstatement</span><span class="keyword">(</span><span class="default">$parsed</span><span class="keyword">, </span><span class="default">$results</span><span class="keyword">);
<br />    echo </span><span class="string">"Found: </span><span class="default">$nrows</span><span class="string"> results&lt;br&gt;&lt;br&gt;\n"</span><span class="keyword">;
<br />
<br />    echo </span><span class="string">"&lt;table border=1 cellspacing='0' width='50%'&gt;\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"&lt;tr&gt;\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"&lt;td&gt;&lt;b&gt;Name&lt;/b&gt;&lt;/td&gt;\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"&lt;td&gt;&lt;b&gt;Salary&lt;/b&gt;&lt;/td&gt;\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"&lt;/tr&gt;\n"</span><span class="keyword">;
<br />
<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$nrows</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {
<br />          echo </span><span class="string">"&lt;tr&gt;\n"</span><span class="keyword">;
<br />          echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$results</span><span class="keyword">[</span><span class="string">"ENAME"</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] . </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />          echo </span><span class="string">"&lt;td&gt;$ " </span><span class="keyword">. </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">[</span><span class="string">"SAL"</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">], </span><span class="default">2</span><span class="keyword">). </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />          echo </span><span class="string">"&lt;/tr&gt;\n"</span><span class="keyword">;
<br />    }
<br />
<br />    echo </span><span class="string">"&lt;/table&gt;\n"</span><span class="keyword">;
<br />
<br />    </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110226">  <div class="votes">
    <div id="Vu110226">
    <a href="/manual/vote-note.php?id=110226&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110226">
    <a href="/manual/vote-note.php?id=110226&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110226" title="52% like this...">
    1
    </div>
  </div>
  <a href="#110226" class="name">
  <strong class="user"><em>Sergey</em></strong></a><a class="genanchor" href="#110226"> &para;</a><div class="date" title="2012-10-03 08:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110226">
<div class="phpcode"><code><span class="html">Lost a day on trying to make work oci8 &amp; pdo_oci extensions in php-fpm 5.3 on OpenSuSE 12.2 (64bit) with latest oracle instant client 11.2.0.3.0. <br />Any of two works normally with generic instructions. But both extensions caused crash in oci_connect(). <br /><br />Solution was simple add ORACLE_HOME variable BEFORE running php-fpm.<br /><br />/etc/profile.d/oracle.sh<br />#!/bin/bash<br />ORACLE_HOME=/usr/lib/oracle/11.2/client64<br />LD_LIBRARY_PATH=$ORACLE_HOME/lib<br />NLS_LANG=american_america.utf8<br />export ORACLE_HOME LD_LIBRARY_PATH NLS_LANG<br /><br />/etc/init.d/php-fpm<br />.....<br />. /etc/rc.status<br />. /etc/profile.d/oracle.sh # add this after rc.status (note: dot &amp; space)<br />.....<br /><br />After "service php-fpm restart" works normally. Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="92683">  <div class="votes">
    <div id="Vu92683">
    <a href="/manual/vote-note.php?id=92683&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92683">
    <a href="/manual/vote-note.php?id=92683&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92683" title="100% like this...">
    2
    </div>
  </div>
  <a href="#92683" class="name">
  <strong class="user"><em>beer at myplace dot now</em></strong></a><a class="genanchor" href="#92683"> &para;</a><div class="date" title="2009-08-03 10:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92683">
<div class="phpcode"><code><span class="html">I was experiencing issues with Unicode characters being saved incorrectly to my ORA 10 DB. Issue was tracked to not having a NLS_LANG environment variable specified - set this correctly in the Apache environment and the issue was resolved.</span></code></div>
  </div>
 </div>
  <div class="note" id="92189">  <div class="votes">
    <div id="Vu92189">
    <a href="/manual/vote-note.php?id=92189&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92189">
    <a href="/manual/vote-note.php?id=92189&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92189" title="100% like this...">
    2
    </div>
  </div>
  <a href="#92189" class="name">
  <strong class="user"><em>benstendahl at hotmail dot com</em></strong></a><a class="genanchor" href="#92189"> &para;</a><div class="date" title="2009-07-13 11:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92189">
<div class="phpcode"><code><span class="html">When using PHP on an IIS server (Windows Server 2000+):<br /><br />After installing the Oracle Instant Client and adding it to the "PATH" Environment Variable, be sure that you also add "Read &amp; Execute" privileges to the Oracle Instant Client directory for the IIS user designated for the site.  This is especially necessary if IIS has been hardened using the IIS Lockdown tool (<a href="http://technet.microsoft.com/en-us/library/dd450372(WS.10" rel="nofollow" target="_blank">http://technet.microsoft.com/en-us/library/dd450372(WS.10</a>).aspx) as users must be explicitly granted permissions from the web.</span></code></div>
  </div>
 </div>
  <div class="note" id="66426">  <div class="votes">
    <div id="Vu66426">
    <a href="/manual/vote-note.php?id=66426&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66426">
    <a href="/manual/vote-note.php?id=66426&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66426" title="100% like this...">
    2
    </div>
  </div>
  <a href="#66426" class="name">
  <strong class="user"><em>rainer dot klier at gmx dot at</em></strong></a><a class="genanchor" href="#66426"> &para;</a><div class="date" title="2006-05-22 02:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66426">
<div class="phpcode"><code><span class="html">estoreic (note from 15-May-2006 10:54) is right.
<br />
<br />there seems to be a problem with the oci8-api-functions in php 4.4.x.
<br />
<br />there are error-messages like these in the error_log:
<br />child pid 22297 exit signal Segmentation fault (11)
<br />*** glibc detected *** double free or corruption (out): 0x00000000019f4730 ***
<br />*** glibc detected *** double free or corruption (!prev): 0x0000000001111d90 ***
<br />*** glibc detected *** corrupted double-linked list: 0x0000000001111d50 ***
<br />
<br />using php 4.4.x with oracle 10.x is impossible, until you do the following:
<br />1. download latest oci8-package from <a href="http://pecl.php.net/package/oci8" rel="nofollow" target="_blank">http://pecl.php.net/package/oci8</a>
<br />2. extract package somewhere
<br />3. go to php-4.4.x-source directory
<br />4. rm -rf ext/oci8
<br />5. cp extraceted oci8-1.2.x directory to/as ext/oci8
<br />6. make distclean
<br />7. ./buildconf --force
<br />8. ./.configure (with the options you need)
<br />9. make
<br />10. only for x86_64:
<br />create pear-install.ini:
<br />-----------------------------------------------
<br />[PHP]
<br />
<br />memory_limit = 128M      ; Maximum amount of memory a script may consume (8MB)
<br />------------------------------------------------
<br />
<br />11. edit Makefile:
<br />replace:
<br />PEAR_INSTALL_FLAGS = -n -dshort_open_tag=0 -dsafe_mode=0
<br />with:
<br />PEAR_INSTALL_FLAGS = -cpear-install.ini -dshort_open_tag=0 -dsafe_mode=0
<br />
<br />12. make install
<br />
<br />have fun!
<br />oracle connections will work now!</span></code></div>
  </div>
 </div>
  <div class="note" id="53712">  <div class="votes">
    <div id="Vu53712">
    <a href="/manual/vote-note.php?id=53712&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53712">
    <a href="/manual/vote-note.php?id=53712&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53712" title="100% like this...">
    2
    </div>
  </div>
  <a href="#53712" class="name">
  <strong class="user"><em>denis dot delamarre at chu-rennes dot fr</em></strong></a><a class="genanchor" href="#53712"> &para;</a><div class="date" title="2005-06-09 10:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53712">
<div class="phpcode"><code><span class="html">php5 + Apache 2 + solaris 2.10 + oracle9i (64bits)
<br />
<br />'./configure' '--with-oracle=/prod/dba/oraeve/ora9i' '--with-apxs2=/usr/local/apache2/bin/apxs' '--with-zlib' '--with-gd' '--without-mysql' '--with-oci8=/prod/dba/oraeve/ora9i' 
<br />
<br />fail with :
<br />ld: fatal : fichier libclntsh.so : wrong elf class : ELFCLASS64 
<br />
<br />the solution is between ./configure and make command to edit Makefile and replace /ora9i/lib  with  /ora9i/lib32
<br />
<br />all it's ok</span></code></div>
  </div>
 </div>
  <div class="note" id="123946">  <div class="votes">
    <div id="Vu123946">
    <a href="/manual/vote-note.php?id=123946&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123946">
    <a href="/manual/vote-note.php?id=123946&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123946" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123946" class="name">
  <strong class="user"><em>semenov dot v at gmail dot com</em></strong></a><a class="genanchor" href="#123946"> &para;</a><div class="date" title="2019-06-17 05:36"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123946">
<div class="phpcode"><code><span class="html">CentOS 7 PECL with oci8-2<br /><br />After documented installation stucks<br /><br />$ yum install systemtap-sdt-devel<br />$ export ORACLE_HOME=/usr/include/oracle/XX.X/client64<br />$ LD_LIBRARY_PATH=$ORACLE_HOME/lib:/lib:/usr/lib; export $ LD_LIBRARY_PATH<br />$ export PHP_DTRACE=yes<br />$ C_INCLUDE_PATH=/usr/include/oracle/XX.X/client64 pecl install oci8<br />[autodetect]<br />$ echo extension=oci8.so &gt; /etc/php.d/instantclient.ini<br />$ systemctl reload https</span></code></div>
  </div>
 </div>
  <div class="note" id="40178">  <div class="votes">
    <div id="Vu40178">
    <a href="/manual/vote-note.php?id=40178&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40178">
    <a href="/manual/vote-note.php?id=40178&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40178" title="100% like this...">
    1
    </div>
  </div>
  <a href="#40178" class="name">
  <strong class="user"><em>oddbec_no_more_spam_kthx at online dot no</em></strong></a><a class="genanchor" href="#40178"> &para;</a><div class="date" title="2004-02-24 08:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40178">
<div class="phpcode"><code><span class="html">I had trouble with norwegian characters using oracle 8.7.1 / php 4something and Apache 2.
<br />
<br />The only trouble was that '?' appeared instead of the norwegian characters.
<br />
<br />The solution to it all was to add this to the apachectl script:
<br />
<br />export NLS_LANG="norwegian_norway.WE8ISO8859P1"
<br />export ORACLE_BASE="/home/oracle"
<br />export ORA_NLS33="/home/oracle/ocommon/nls/admin/data"
<br />export ORACLE_TERM="ansi"
<br />export ORACLE_HOME="/home/oracle"
<br />export LANG="no_NO"
<br />
<br />I'm not sure if all of these are necessary, but I took no change, and it works now :)</span></code></div>
  </div>
 </div>
  <div class="note" id="104109">  <div class="votes">
    <div id="Vu104109">
    <a href="/manual/vote-note.php?id=104109&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104109">
    <a href="/manual/vote-note.php?id=104109&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104109" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104109" class="name">
  <strong class="user"><em>modir at huanga dot com</em></strong></a><a class="genanchor" href="#104109"> &para;</a><div class="date" title="2011-05-23 03:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104109">
<div class="phpcode"><code><span class="html">For those of you who would like to install this extension on an RedHat/CentOS server. It is actually pretty simple.<br /><br />Here is what you have to do:<br />1) Download the following RPM from Oracle: oracle-instantclient11.2-basiclite-11.2.0.2.0.x86_64.rpm (Version number can be newer and check if you need the 64bit version or not). And then install it on the server.<br /><br />2) yum install php-oci8<br /><br />3) And as the last step you edit /etc/sysconfig/httpd and write the following line at the end: export LD_LIBRARY_PATH=/usr/lib/oracle/11.2/client64/lib/ (Attention: Path changes depending on the version you have downloaded from the Oracle website.)</span></code></div>
  </div>
 </div>
  <div class="note" id="127238">  <div class="votes">
    <div id="Vu127238">
    <a href="/manual/vote-note.php?id=127238&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127238">
    <a href="/manual/vote-note.php?id=127238&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127238" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#127238" class="name">
  <strong class="user"><em>Wilber</em></strong></a><a class="genanchor" href="#127238"> &para;</a><div class="date" title="2022-07-09 03:01"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127238">
<div class="phpcode"><code><span class="html">The OCI8 extension lets you access Oracle Database.<br /><br />Use 'pecl install oci8' to install for PHP 8.1.<br /><br />Use 'pecl install oci8-3.0.1' to install for PHP 8.0.<br /><br />Use 'pecl install oci8-2.2.0' to install for PHP 7.<br /><br />Use 'pecl install oci8-2.0.12' to install for PHP 5.2 - PHP 5.6.<br /><br />Use 'pecl install oci8-1.4.10' to install for PHP 4.3.9 - PHP 5.1.<br /><br />[username@hostname ~]# php -v<br />^ To see PHP version</span></code></div>
  </div>
 </div>
  <div class="note" id="87174">  <div class="votes">
    <div id="Vu87174">
    <a href="/manual/vote-note.php?id=87174&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87174">
    <a href="/manual/vote-note.php?id=87174&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87174" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87174" class="name">
  <strong class="user"><em>nicodenboer (at) yahoo (dot) com</em></strong></a><a class="genanchor" href="#87174"> &para;</a><div class="date" title="2008-11-22 09:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87174">
<div class="phpcode"><code><span class="html">Hi, I use Oracle Database 10g Express Edition Release
<br />10.2.0.1.0 on a Linux workstation for dev purposes, along
<br />with Apache 2 and PHP5. So far I have used it on Kubuntu 8.04.
<br />To get things working on a recently installed notebook with openSUSE 
<br />11.0 was a bit more complicated. So I hope someone will be able to 
<br />benefit from our experiences. Here is our howto:
<br />
<br /># Use the package manager to install the packages php5-pear and
<br />php5-dev, if not installed yet.
<br />
<br /># Download the instantclient_11_1, zip files basic, sdk, sqlplus from the Oracle web site
<br />
<br /># Switch to user root here, since not all commands to some work sudo
<br />
<br /># Unzip these files to /opt/oracle/.
<br /># As a result you will see a dir instantclient_11_1 appearing.
<br />
<br />ln -s /opt/oracle/instantclient_11_1/libclntsh.so.11.1 \
<br />   /opt/oracle/instantclient_11_1/libclntsh.so  
<br />ln -s /opt/oracle/instantclient_11_1/libclntsh.so.11.1 \
<br />   /usr/lib/libclntsh.so
<br />ln -s /opt/oracle/instantclient_11_1/libnnz11.so \
<br />   /usr/lib/libnnz11.so
<br />ldconfig # to make sure the system will be able to find the libs
<br />
<br />pecl install oci8 # interactively enter option 1,
<br /># then instantclient,/opt/oracle/instantclient_11_1,
<br /># then enter
<br />
<br /># if needed, add extension=oci8.so to your php.ini
<br />
<br />/etc/init.d/apache2 reload
<br />
<br /># finished!
<br />
<br />Kind regards,
<br />Nico den Boer</span></code></div>
  </div>
 </div>
  <div class="note" id="71588">  <div class="votes">
    <div id="Vu71588">
    <a href="/manual/vote-note.php?id=71588&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71588">
    <a href="/manual/vote-note.php?id=71588&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71588" title="no votes...">
    0
    </div>
  </div>
  <a href="#71588" class="name">
  <strong class="user"><em>jay dot couture at gmail dot com</em></strong></a><a class="genanchor" href="#71588"> &para;</a><div class="date" title="2006-12-06 03:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71588">
<div class="phpcode"><code><span class="html"># Here's what it took to get it going for me on Red Hat on 
<br /># x86_32 w/ 10gr2 and php5.1.2
<br /># I sincerely appreciate all of the other poster's notes. 
<br /># It was a combination of a few 
<br /># of them to get mine configured. My note should reflect this:
<br />
<br /># install the instantclient basic and sdk like this
<br /># note: the original poster had you install into a lib subdirectory, 
<br /># but when I tried this it couldn't find the sdk files. So I moved 
<br /># the files in lib into the parent directory as
<br /># shown below. Actually I copied them, YMMV
<br />mkdir -p /usr/lib/oracle/10.2.0.2/client
<br />unzip -jd /usr/lib/oracle/10.2.0.2/client 
<br />    instantclient-basic-linux-x86-32-10.2.0.2-20060331.zip
<br />mkdir -p /usr/include/oracle/10.2.0.2/client
<br />unzip -jd /usr/lib/oracle/10.2.0.2/client 
<br />    instantclient-sdk-linux-x86-32-10.2.0.2-20060331.zip
<br />ln -s /usr/lib/oracle/10.2.0.2/client/libclntsh.so.10.1 
<br />    /usr/lib/oracle/10.2.0.2/client/libclntsh.so
<br />
<br /># make the full client use instantclient's files
<br />cd /app/oracle/product/10.2.0/db_1
<br />mv lib oldlib
<br />ln -s /usr/lib/oracle/10.2.0.2/client/lib lib
<br />ln -s /usr/include/oracle/10.2.0.2/client include
<br />
<br />#php configure line is: 
<br />    ./configure --with-oci8=instantclient,/usr/lib/oracle/10.2.0.2/client
<br />
<br /># I had to do this, or the OCI8 would not compile when 
<br /># I ran make on PHP5.1.2 I did not do this originally when I 
<br /># had the files in the lib sudirectory (see my note above) so 
<br /># that may be the true issue.
<br />export LD_LIBRARY_PATH=/usr/lib/oracle/10.2.0.2/client:$LD_LIBRARY_PATH
<br />
<br />make
<br />
<br />make install
<br />
<br />#In apache2 edit the envvars and add
<br />LD_LIBRARY_PATH="/usr/local/apache2/lib:
<br />    /usr/lib/oracle/10.2.0.2/client:$LD_LIBRARY_PATH"
<br />TNS_ADMIN="/usr/lib/oracle/10.2.0.2/client"
<br />LANG=en_US
<br />export LD_LIBRARY_PATH LANG TNS_ADMIN
<br />
<br />#Restart Apache
<br />
<br />Jay</span></code></div>
  </div>
 </div>
  <div class="note" id="54508">  <div class="votes">
    <div id="Vu54508">
    <a href="/manual/vote-note.php?id=54508&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54508">
    <a href="/manual/vote-note.php?id=54508&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54508" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54508" class="name">
  <strong class="user"><em>ben at onshop dot co dot uk</em></strong></a><a class="genanchor" href="#54508"> &para;</a><div class="date" title="2005-07-06 08:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54508">
<div class="phpcode"><code><span class="html">I spent ages trying work out why I was getting the following message when when using ocilogon() on Windows 2000 using PHP 4 and 5:
<br />
<br />ORA-03106 Fatal two-task communication protocol error
<br />
<br />This problem is occurs when PHP cannot find ORACLE client environmental variables.
<br />
<br />The environmental variables can be set in several ways:
<br />
<br />1. Within the root 'Directory' directive on Apache httpd.conf:
<br />
<br />&lt;Directory "d:/path/to/webroot"&gt;
<br />  SetEnv ORACLE_BASE "c:/oracle"
<br />  SetEnv ORACLE_HOME "c:/oracle/ora81"
<br />  SetEnv NLS_LANG "american_america.WE8DEC"
<br />  SetEnv NLS_CHARACTERSET "WE8DEC"
<br />  SetEnv NLS_NCHAR_CHARACTERSET "AL16UTF16"
<br />&lt;/Directory&gt;
<br />
<br />or
<br />
<br />2. Within Windows:
<br />
<br />Go to the Control Panel&gt;System&gt;Advanced&gt;Environmental Variables
<br />
<br />Then enter a name value/pair for each of the variables.
<br />
<br />3. Using putenv() statements in the PHP file prior to using ocilogon(). This is not ideal because the statements are required evertime you wish to connect to Oracle.</span></code></div>
  </div>
 </div>
  <div class="note" id="53595">  <div class="votes">
    <div id="Vu53595">
    <a href="/manual/vote-note.php?id=53595&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53595">
    <a href="/manual/vote-note.php?id=53595&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53595" title="no votes...">
    0
    </div>
  </div>
  <a href="#53595" class="name">
  <strong class="user"><em>MSapp</em></strong></a><a class="genanchor" href="#53595"> &para;</a><div class="date" title="2005-06-06 06:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53595">
<div class="phpcode"><code><span class="html">Problems compiling 5.0.4 with Oracle Instant Client 10? (i.e. cannot find -lirc)
<br />
<br />Remove the "-lirc" from sdk/demo/sysliblist and rerun configure.</span></code></div>
  </div>
 </div>
  <div class="note" id="50278">  <div class="votes">
    <div id="Vu50278">
    <a href="/manual/vote-note.php?id=50278&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50278">
    <a href="/manual/vote-note.php?id=50278&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50278" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50278" class="name">
  <strong class="user"><em>kucerar at hhmi dot org</em></strong></a><a class="genanchor" href="#50278"> &para;</a><div class="date" title="2005-02-23 08:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50278">
<div class="phpcode"><code><span class="html">Great Solaris patch!  Finally built.  Here's some tips on connecting:
<br />
<br />Just made this on solaris8 32bit, actually works.
<br />
<br />1) put everything in one directory
<br />2) unsetenv ORACLE_HOME
<br />3) set the env vars LD_LIBRARY_PATH and SQLPATH and TNS_ADMIN(if you have it) to that directory.
<br />4) use one of the other easy connection notations here
<br />
<br /><a href="http://www.oracle.com/technology/" rel="nofollow" target="_blank">http://www.oracle.com/technology/</a>
<br />docs/tech/sql_plus/10102/readme_ic.htm
<br />
<br />These env vars worked when put at the top of apachectl script as well.
<br />
<br />To build you may have to fake it out with an ORACLE_HOME var,  but unset it later.  You may also have to fake out the build by putting header files where it is looking for them,  e.g. in the rdbms/demo directory or some such other place.
<br />
<br />When running though,  make sure you have only the files required in only one directory.
<br />
<br />Oracle has not put up a link to the 32bit solaris sqlplus--you have to guess it--it's there though:
<br />
<br /><a href="http://download.oracle.com/otn/solaris/instantclient/" rel="nofollow" target="_blank">http://download.oracle.com/otn/solaris/instantclient/</a>
<br />instantclient-sqlplus-solaris32-10.1.0.3.zip
<br />  
<br />...and don't forget to add ".world" on to the end of your SID. It's very common to have to specify DBNAME.WORLD to connect.</span></code></div>
  </div>
 </div>
  <div class="note" id="43824">  <div class="votes">
    <div id="Vu43824">
    <a href="/manual/vote-note.php?id=43824&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43824">
    <a href="/manual/vote-note.php?id=43824&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43824" title="no votes...">
    0
    </div>
  </div>
  <a href="#43824" class="name">
  <strong class="user"><em>mark at magpies dot net</em></strong></a><a class="genanchor" href="#43824"> &para;</a><div class="date" title="2004-07-05 09:07"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43824">
<div class="phpcode"><code><span class="html">For those trying to use the Oracle Instant Client 10g in a win32 environment, heres a nice easy howto. If you fully read the docs properly and understand what your reading you will be able to set it up, but if like me you want a quick easy fix, heres how I did it.
<br />
<br />1. Download and install the Oracle Instant Client to where ever (lets say  c:\ora\client  )
<br />2. Add your connect info, copy a previously created or provided tnsnames.ora file to the above directory.
<br />3. Change Path in the Environment Variables area to add this directory to the path. ie.  c:\ora\client;%SystemRoot%;&lt;and so on&gt;
<br />4. Open regedit and add a Key called ORACLE to HKEY_LOCAL_MACHINE\SOFTWARE
<br />5. To the ORACLE key add a string value called TNS_ADMIN and assign it the directory above (ie. c:\ora\client )  So you end up with KEY_LOCAL_MACHINE\SOFTWARE\ORACLE\TNS_ADMIN = c:\ora\client
<br />6. Set php to use Oci8 extension and bobs your uncle
<br />7. Reboot.
<br />
<br />Option 7 was required as the oci8 extension or php wouldn't pick up the path change. Also my problem was how to use other programs like sqlplus without creating extra Environment Variables etc the TNS_ADMIN / tnsnames.ora part makes that simpler and allows you to call things the same as you would before.
<br />
<br />PS: This should apply to all the Instant Clients. I haven't tried it with any others but 10g though.
<br />
<br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="43737">  <div class="votes">
    <div id="Vu43737">
    <a href="/manual/vote-note.php?id=43737&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43737">
    <a href="/manual/vote-note.php?id=43737&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43737" title="no votes...">
    0
    </div>
  </div>
  <a href="#43737" class="name">
  <strong class="user"><em>ed000001 at hotmail dot com</em></strong></a><a class="genanchor" href="#43737"> &para;</a><div class="date" title="2004-07-01 03:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43737">
<div class="phpcode"><code><span class="html">If you get your connectivity working with putenv on ORACLE_SID and ORACLE_HOME, but you do not want to use putenv because you want safemode on. You will need to pass these from your environment variables.  Somehow setenv in httpd.conf did not do the trick for me... the values are set but the connectivity does not work.  Then you will need to set the environment in your /etc/init.d/apachectl or /etc/profile and use a "PassEnv ORACLE_HOME ORACLE_SID" directive in httpd.conf so that these variables are picked up by php.
<br />
<br />However, when you suexec in Apache 2.0, the server will only allow you to pass a given set of variables which are defined in the apache source code in the file apache-dir/support/suexec.c
<br />
<br />In order to pass ORACLE_SID and ORACLE_HOME to PHP you need to add these to that file.  The relevant changed piece of code where I added "ORACLE_" looks something like this:
<br />
<br />char *safe_env_lst[] =
<br />{
<br />    /* variable name starts with */
<br />    "HTTP_",
<br />    "SSL_",
<br />    "ORACLE_",
<br />
<br />    /* variable name is */
<br />...
<br />
<br />You will have to do a "make clean", "./configure", "make", "make install".  Do not forget to do the "make clean" or the apache changes will not be picked up.
<br />
<br />Here is a nice php test script :)
<br />
<br /><span class="default">&lt;?php </span><span class="comment">// test-oracle.php
<br />
<br />    </span><span class="keyword">function </span><span class="default">dump_array</span><span class="keyword">(</span><span class="default">$a_value</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$a_value</span><span class="keyword">);
<br />        for ( </span><span class="default">$s_str </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">; list(</span><span class="default">$s_key</span><span class="keyword">, </span><span class="default">$x_value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$a_value</span><span class="keyword">) ;  )
<br />        {
<br />            </span><span class="default">$s_str </span><span class="keyword">.= </span><span class="string">"&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">.
<br />                      </span><span class="string">"&lt;span style=\"color:green\"&gt;[&lt;/span&gt;</span><span class="default">$s_key</span><span class="string">&lt;span style=\"color:green\"&gt;]&lt;/span&gt; = "</span><span class="keyword">.
<br />                      </span><span class="string">"&lt;span style=\"color:red\"&gt;[&lt;/span&gt;</span><span class="default">$x_value</span><span class="string">&lt;span style=\"color:red\"&gt;]&lt;/span&gt;&lt;br /&gt;"</span><span class="keyword">; 
<br />        }
<br />        </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$a_value</span><span class="keyword">);
<br />        echo </span><span class="default">$s_str</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="comment">#putenv("ORACLE_SID=ORTD");
<br />#putenv("ORACLE_HOME=/u01/app/oracle/product/9.2.0.1.0");
<br /></span><span class="default">$ORACLE_SID </span><span class="keyword">= </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"ORACLE_SID"</span><span class="keyword">);
<br /></span><span class="default">$ORACLE_HOME </span><span class="keyword">= </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"ORACLE_HOME"</span><span class="keyword">);
<br />echo </span><span class="string">"ORACLE_SID = </span><span class="default">$ORACLE_SID</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"ORACLE_HOME = </span><span class="default">$ORACLE_HOME</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br />
<br />    </span><span class="default">$cn </span><span class="keyword">= </span><span class="default">ociplogon</span><span class="keyword">(</span><span class="string">'scott'</span><span class="keyword">, </span><span class="string">'tiger'</span><span class="keyword">);
<br />echo </span><span class="string">"cn = </span><span class="default">$cn</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;
<br />    </span><span class="default">$st </span><span class="keyword">= </span><span class="default">ociparse</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">, </span><span class="string">"select tname from tab"</span><span class="keyword">);
<br />echo </span><span class="string">"st = </span><span class="default">$st</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;
<br />    </span><span class="default">$ex </span><span class="keyword">= </span><span class="default">ociexecute</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">,</span><span class="default">OCI_COMMIT_ON_SUCCESS</span><span class="keyword">);
<br />echo </span><span class="string">"ex = </span><span class="default">$ex</span><span class="string">&lt;br /&gt;\n"</span><span class="keyword">;
<br />    </span><span class="default">$mr </span><span class="keyword">= </span><span class="default">ocifetchinto</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">,</span><span class="default">$xx</span><span class="keyword">,</span><span class="default">OCI_ASSOC</span><span class="keyword">);
<br />    while ( </span><span class="default">$mr </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">dump_array</span><span class="keyword">(</span><span class="default">$xx</span><span class="keyword">);
<br />        </span><span class="default">$mr </span><span class="keyword">= </span><span class="default">ocifetchinto</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">,</span><span class="default">$xx</span><span class="keyword">,</span><span class="default">OCI_ASSOC</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$fr </span><span class="keyword">= </span><span class="default">ocifreestatement</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">);
<br />echo </span><span class="string">"fr = </span><span class="default">$fr</span><span class="string">&lt;br /&gt;"</span><span class="keyword">;
<br />    </span><span class="default">ocicommit</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">);
<br />    </span><span class="default">ocilogoff</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37470">  <div class="votes">
    <div id="Vu37470">
    <a href="/manual/vote-note.php?id=37470&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37470">
    <a href="/manual/vote-note.php?id=37470&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37470" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37470" class="name">
  <strong class="user"><em>aleigh at tessier dot com</em></strong></a><a class="genanchor" href="#37470"> &para;</a><div class="date" title="2003-11-16 03:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37470">
<div class="phpcode"><code><span class="html">Warning: ocilogon(): _oci_open_session: OCIHandleAlloc OCI_HTYPE_SVCCTX: OCI_INVALID_HANDLE can also be caused by running the webserver with an ORACLE_HOME of a (radically?) different version than PHP was linked against. 
<br />
<br />I experienced this when I accidently used an Oracle 8 ORACLE_HOME for a PHP that was linked against Oracle 9.</span></code></div>
  </div>
 </div>
  <div class="note" id="32410">  <div class="votes">
    <div id="Vu32410">
    <a href="/manual/vote-note.php?id=32410&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32410">
    <a href="/manual/vote-note.php?id=32410&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32410" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32410" class="name">
  <strong class="user"><em>NOSPAMPLZ!esartoni at omniaglobal dot net</em></strong></a><a class="genanchor" href="#32410"> &para;</a><div class="date" title="2003-05-27 03:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32410">
<div class="phpcode"><code><span class="html">I had a little problem with ocilogon but only with RedHat 8.0. It always returned some kind of error during connection like 'OCISessionBegin - ... invalid character', or 'OCISessionBegin - ... missing or invalid option in ...'
<br />
<br />I have finally found what is this problem! You have to change your LANG enviroment variable disabling UTF-8. Example: LANG=en_US.UTF-8 should become LANG=en_US.</span></code></div>
  </div>
 </div>
  <div class="note" id="32212">  <div class="votes">
    <div id="Vu32212">
    <a href="/manual/vote-note.php?id=32212&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32212">
    <a href="/manual/vote-note.php?id=32212&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32212" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32212" class="name">
  <strong class="user"><em>lore_giver at lycos dot co dot uk</em></strong></a><a class="genanchor" href="#32212"> &para;</a><div class="date" title="2003-05-20 11:42"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32212">
<div class="phpcode"><code><span class="html">Running Oracle 9i on a 
<br />Solaris 9 (64 bit) platform with a Sun Server E250:
<br />Apache version 1.3.27
<br />PHP version 4.3.1
<br />
<br />I was first getting "...wrong ELF class: ELFCLASS64.."
<br />while doing a ./configure with the --with-oci8 and --with-oracle parameters.
<br />
<br />After some unsuccessfull searched I renamed the $ORACLE_HOME/lib to $ORACLE_HOME/lib.org and then renamed the
<br />$ORACLE_HOME/lib32 to $ORACLE_HOME/lib
<br />
<br />Thereafter it went passed this config, but now failed on 
<br />not being able to find a libwtc9.so file which was in the
<br />$ORACLE_HOME/lib directory  (this message was displayed in the debug.log in the php source directory).
<br />
<br />After setting the Environment variable:
<br />LD_LIBRARY_PATH=$ORACLE_HOME/lib
<br />I was able to compile without any errors and 'make' and 'make install' ran smoothly.
<br />
<br />I only had to add the php type in the httpd.conf (in your apache conf directory eg. /usr/local/apache/conf)..
<br />AddType application/x-httpd-php .php
<br />to get the php to work again...
<br />
<br />I had to then reverse the $ORACLE_HOME/lib swop on top since php was now having problems with the 32 bit version of the library...so switched it back to 64 and my php script worked....
<br />
<br />Hope this helps some out there with similar problems..
<br />
<br />Cheers</span></code></div>
  </div>
 </div>
  <div class="note" id="25523">  <div class="votes">
    <div id="Vu25523">
    <a href="/manual/vote-note.php?id=25523&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25523">
    <a href="/manual/vote-note.php?id=25523&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25523" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25523" class="name">
  <strong class="user"><em>kakukkfu at mailbox dot hu</em></strong></a><a class="genanchor" href="#25523"> &para;</a><div class="date" title="2002-09-26 11:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25523">
<div class="phpcode"><code><span class="html">Better to insert needed variables into apache(!) (or your webserver - respectively) start script. 
<br />
<br />For example on UNIX systems /etc/init.d/apache would contain following lines before anything else:
<br />
<br />#!/bin/bash
<br />
<br />if [ -f ~oracle/.profile ]; then
<br />        source ~oracle/.profile
<br />fi
<br />
<br />The ~oracle/.profile has the appropiate settings to start an Oracle database so it is always up-to-date for PHP, too. (If settings are changed, don't forget to restart your webserver.) This way you just no need to worry what to include or define for PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="112608">  <div class="votes">
    <div id="Vu112608">
    <a href="/manual/vote-note.php?id=112608&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112608">
    <a href="/manual/vote-note.php?id=112608&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112608" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#112608" class="name">
  <strong class="user"><em>wingjeeplau at gmail dot com</em></strong></a><a class="genanchor" href="#112608"> &para;</a><div class="date" title="2013-07-03 11:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112608">
<div class="phpcode"><code><span class="html">In Ubuntu the setting is in file /etc/apache2/envvars</span></code></div>
  </div>
 </div>
  <div class="note" id="12957">  <div class="votes">
    <div id="Vu12957">
    <a href="/manual/vote-note.php?id=12957&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12957">
    <a href="/manual/vote-note.php?id=12957&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12957" title="50% like this...">
    0
    </div>
  </div>
  <a href="#12957" class="name">
  <strong class="user"><em>Marinne at ilovechocolate dot com</em></strong></a><a class="genanchor" href="#12957"> &para;</a><div class="date" title="2001-05-17 05:25"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12957">
<div class="phpcode"><code><span class="html">One simple but useful note:check whether your TNS Listener is running! By default, it's not started automatically when an Oracle instance is started. Login as oracle then type :
<br />
<br />lsnrctl START
<br />
<br />After it's started, I can sucessfully run the sample code on this page! I used to got ora-12514 error before doing this.</span></code></div>
  </div>
 </div>
  <div class="note" id="11757">  <div class="votes">
    <div id="Vu11757">
    <a href="/manual/vote-note.php?id=11757&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11757">
    <a href="/manual/vote-note.php?id=11757&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11757" title="50% like this...">
    0
    </div>
  </div>
  <a href="#11757" class="name">
  <strong class="user"><em>bluei at phpworld dot org</em></strong></a><a class="genanchor" href="#11757"> &para;</a><div class="date" title="2001-03-06 02:57"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11757">
<div class="phpcode"><code><span class="html">check your tnsnames.ora permission.
<br />
<br />ex)
<br />ORACLE_HOME = /home/oracle/oracle
<br />
<br />chmod 755 /home/oracle/oracle/network/admin -R
<br />
<br />Yahoo!!!!!! I solved it!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="8872">  <div class="votes">
    <div id="Vu8872">
    <a href="/manual/vote-note.php?id=8872&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8872">
    <a href="/manual/vote-note.php?id=8872&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8872" title="50% like this...">
    0
    </div>
  </div>
  <a href="#8872" class="name">
  <strong class="user"><em>shmengie_2000 at yahoo dot com</em></strong></a><a class="genanchor" href="#8872"> &para;</a><div class="date" title="2000-10-03 03:43"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom8872">
<div class="phpcode"><code><span class="html">couple of notes about startup/shutdown on linux:  (redhat, maybe others)
<br />
<br />export LD_PRELOAD=/usr/lib/libpthread.so
<br />
<br />Caused the start/stop script to fail to stop the httpd process.  
<br />The LD_PRELOAD environment var caused the 'ps' command to core dump.  I went bald figuring that out.
<br />
<br />Easiest fix I could think of was to move all the oracle/php varialble exports so they are only set in the start section of the httpd script.
<br />
<br />Never thought setting those vars globally in the script would cause problems.  That's what I get for thinking...
<br />
<br />One other note:  Make sure the httpd process is shutdown before Oracle.
<br />
<br />eg: 
<br />/etc/rc.d/rc0.d/K15httpd
<br />/etc/rc.d/rc0.d/K25Oracle
<br />
<br />Lingering connections to oracle may cause shutdown to take forever.
<br />
<br />gl &amp; hf
<br />
<br />-Joe</span></code></div>
  </div>
 </div>
  <div class="note" id="27032">  <div class="votes">
    <div id="Vu27032">
    <a href="/manual/vote-note.php?id=27032&amp;page=oci8.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27032">
    <a href="/manual/vote-note.php?id=27032&amp;page=oci8.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27032" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#27032" class="name">
  <strong class="user"><em>john at john-warner dot com</em></strong></a><a class="genanchor" href="#27032"> &para;</a><div class="date" title="2002-11-20 04:13"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27032">
<div class="phpcode"><code><span class="html">In addition to the earlier posts here is a further explaination;
<br />
<br />Problem: Regular and Remote authentication does not work using Windows 2000 + PHP and Oracle 8i, 9i.
<br />
<br />Secondary Issue if using Oracle 9.2.0.1
<br />     When using Oracle 9.2.0.1 the Error structure returned by Oracle is different than expected by PHP. As a result there will be no legible error message other than the following;
<br />     Warning: _oci_open_server: in ...
<br />
<br />Using Oracle 9.0.1.1 the error message returned is any of the following depending on your situation;
<br />     
<br />Warning: _oci_open_server: ORA-12638: Credential retrieval failed in ...
<br />Warning: _oci_open_server: ORA-12154: TNS:could not resolve service name in ...
<br />Warning: _oci_open_server: ORA-12505: TNS:listener could not resolve SID given in connect descriptor in ...
<br />     
<br />Resolution:
<br />In order to get this to work properly you need to do the following;
<br />In reference to ORA-12638: Credential retrieval failed in ... 
<br />you need to edit your sqlnet.ora file and change the 
<br />SQLNET.AUTHENTICATION_SERVICES = (NTS) to
<br />SQLNET.AUTHENTICATION_SERVICES = (NONE)
<br />The reason is that using NTS validation on a Windows 2000 machine essentially means Kerberos.
<br />Using (NONE) will tell oracle not to expect kerberos "Credentials" as a means of validation. In turn it will use the oracle authentication for a database user.
<br />
<br />In reference to ORA-12154 and ORA-12505 you need to do the following;
<br />In your php code you are using to connect you need to copy the section in tnsnames.ora 
<br />into a variable. 
<br />For example;
<br /><span class="default">&lt;?php
<br />putenv</span><span class="keyword">(</span><span class="string">"ORACLE_SID=TESTDB"</span><span class="keyword">);
<br /></span><span class="comment">//putenv("ORACLE_HOME=/oracle/ora90");
<br />//putenv("TNS_ADMIN=/oracle/ora90/network/admin");
<br /></span><span class="default">$username </span><span class="keyword">= </span><span class="string">"scott"</span><span class="keyword">;
<br /></span><span class="default">$passwd </span><span class="keyword">= </span><span class="string">"tiger"</span><span class="keyword">;
<br /></span><span class="default">$db</span><span class="keyword">=</span><span class="string">"(DESCRIPTION=
<br />           (ADDRESS_LIST=
<br />             (ADDRESS=(PROTOCOL=TCP)
<br />               (HOST=yourTargetMachine)(PORT=1521)
<br />             )
<br />           )
<br />             (CONNECT_DATA=(SERVICE_NAME=TESTDB))
<br />      )"</span><span class="keyword">;
<br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">OCILogon</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$passwd</span><span class="keyword">,</span><span class="default">$db</span><span class="keyword">);
<br />if (!</span><span class="default">$conn</span><span class="keyword">)
<br />{
<br />    echo </span><span class="string">"Connection failed"</span><span class="keyword">;
<br />    echo </span><span class="string">"Error Message: [" </span><span class="keyword">. </span><span class="default">OCIError</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">;
<br />    exit;
<br />}
<br />else
<br />{
<br />    echo </span><span class="string">"Connected!"</span><span class="keyword">;
<br />}
<br />...
<br /></span><span class="default">?&gt;
<br /></span>I left the ORACLE_HOME and TNS_ADMIN putenv lines commented out and your need for them depends on which web server you are using. If you are using Apache, you may need both.
<br />If you are using Microsoft IIS you may need ORACLE_HOME. Putting it in can't hurt and it appears PHP may read them if they are there but either way you should be working at this 
<br />point.
<br />
<br />Live long and prosper.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=oci8.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="oci8.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oci8.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="oci8.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="oci8.test.php" title="Testing">Testing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
