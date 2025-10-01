<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Oracle PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-oci.php">
 <link rel="shorturl" href="https://www.php.net/pdo-oci">
 <link rel="alternate" href="https://www.php.net/pdo-oci" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.pdo-sqlsrv.connection.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-oci.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-oci.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-oci.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-oci.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-oci.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-oci.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-oci.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-oci.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-oci.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-oci.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-oci.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-oci.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Oracle PDO Driver (PDO_OCI)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Oracle PDO Driver - Manual" />
<meta name="twitter:description" content="Oracle PDO Driver (PDO_OCI)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Oracle PDO Driver - Manual" />
<meta itemprop="description" content="Oracle PDO Driver (PDO_OCI)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Oracle PDO Driver (PDO_OCI)" />

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
        <a href="ref.pdo-oci.connection.php">
          PDO_OCI DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.pdo-sqlsrv.connection.php">
          &laquo; PDO_SQLSRV DSN        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='pdo.drivers.php'>PDO Drivers</a></li>      </ul>
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
            <option value='en/ref.pdo-oci.php' selected="selected">English</option>
            <option value='de/ref.pdo-oci.php'>German</option>
            <option value='es/ref.pdo-oci.php'>Spanish</option>
            <option value='fr/ref.pdo-oci.php'>French</option>
            <option value='it/ref.pdo-oci.php'>Italian</option>
            <option value='ja/ref.pdo-oci.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-oci.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-oci.php'>Russian</option>
            <option value='tr/ref.pdo-oci.php'>Turkish</option>
            <option value='uk/ref.pdo-oci.php'>Ukrainian</option>
            <option value='zh/ref.pdo-oci.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-oci" class="reference">
  
  <h1 class="title">Oracle PDO Driver (PDO_OCI)</h1>
  
  <div class="partintro">

   

<div class="section" id="ref.pdo-oci.installation">
 <h2 class="title">Installation</h2>
 <p class="para">
  If the Oracle Database is on the same machine as PHP, the database
  software already contains the necessary libraries.  When PHP is on
  a different machine, use the free
  <a href="https://www.oracle.com/database/technologies/instant-client.html" class="link external">&raquo;&nbsp;Oracle Instant Client</a> libraries.
  For details refer to the <a href="oci8.requirements.php" class="link">OCI8 Requirements</a> section.
 </p>

 <div class="section" id="pdo-oci.installation.php84">
  <h2 class="title">PHP 8.4</h2>
  <p class="para">
   This extension has been moved to the <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a>
repository and is no longer bundled with PHP as of PHP 8.4.0
  </p>
  <p class="para">
   Information for installing this PECL extension may be
found in the manual chapter titled <a href="install.pecl.php" class="link">Installation
of PECL extensions</a>. Additional information such as new releases,
downloads, source files, maintainer information, and a CHANGELOG, can be
located here: 
   <a href="https://pecl.php.net/package/PDO_OCI" class="link external">&raquo;&nbsp;https://pecl.php.net/package/PDO_OCI</a>.
  </p>
 </div>

 <div class="section" id="pdo-oci.installation.phplt84">
  <h2 class="title">PHP &lt; 8.4</h2>
  <p class="para">
   Use <strong class="option configure">--with-pdo-oci[=DIR]</strong> to install
   the PDO Oracle OCI extension, where the optional <code class="literal">[=DIR]</code>
   is the Oracle Home directory. <code class="literal">[=DIR]</code> defaults to
   the <var class="varname">$ORACLE_HOME</var> environment variable.
  </p>
  <p class="para">
   Use <strong class="option configure">--with-pdo-oci=instantclient,prefix,version</strong>
   for an Oracle Instant Client <abbr>SDK</abbr>, where prefix and
   version are configured.
  </p>
  <p class="para">
   <div class="example-contents screen">
    <div class="cdata"><pre>
// Using $ORACLE_HOME
$ ./configure --with-pdo-oci

// Using OIC for Linux with 10.2.0.3 RPMs with a /usr prefix
$ ./configure --with-pdo-oci=instantclient,/usr,10.2.0.3
</pre></div>
   </div>
  </p>
 </div>
</div>


   

<div class="section" id="pdo-oci.constants">
 <h2 class="title">Predefined Constants</h2>
 <p class="simpara">The constants below are defined by
this driver, and will only be available when the extension has been either
compiled into PHP or dynamically loaded at runtime. In addition, these
driver-specific constants should only be used if you are using this driver.
Using driver-specific attributes with another driver may result in
unexpected behaviour. <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> may be used to
obtain the <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong> attribute to check the
driver, if your code can run against multiple drivers.</p>
 <dl>
  
  
   <dt id="pdo.constants.oci-attr-action">
    <strong><code><a href="ref.pdo-oci.php#pdo.constants.oci-attr-action">PDO::OCI_ATTR_ACTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Provides a way to specify the action on the database session.
    </p>
    <p class="para">
     This exists as of PHP  7.2.16 and 7.3.3
    </p>
   </dd>
  
  
  
   <dt id="pdo.constants.oci-attr-client-info">
    <strong><code><a href="ref.pdo-oci.php#pdo.constants.oci-attr-client-info">PDO::OCI_ATTR_CLIENT_INFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Provides a way to specify the client info on the database session.
    </p>
    <p class="para">
     This exists as of PHP  7.2.16 and 7.3.3
    </p>
   </dd>
  
  
  
   <dt id="pdo.constants.oci-attr-client-identifier">
    <strong><code><a href="ref.pdo-oci.php#pdo.constants.oci-attr-client-identifier">PDO::OCI_ATTR_CLIENT_IDENTIFIER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Provides a way to specify the client identifier on the database session.
    </p>
    <p class="para">
     This exists as of PHP  7.2.16 and 7.3.3
    </p>
   </dd>
  
  
  
   <dt id="pdo.constants.oci-attr-module">
    <strong><code><a href="ref.pdo-oci.php#pdo.constants.oci-attr-module">PDO::OCI_ATTR_MODULE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Provides a way to specify the module on the database session.
    </p>
    <p class="para">
     This exists as of PHP  7.2.16 and 7.3.3
    </p>
   </dd>
  

 </dl>
</div>




  </div>

  

 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-oci.connection.php">PDO_OCI DSN</a> — Connecting to Oracle databases</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_oci/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-oci%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-oci&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-oci.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128538">  <div class="votes">
    <div id="Vu128538">
    <a href="/manual/vote-note.php?id=128538&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128538">
    <a href="/manual/vote-note.php?id=128538&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128538" title="71% like this...">
    6
    </div>
  </div>
  <a href="#128538" class="name">
  <strong class="user"><em>Wolfgang Riedmann</em></strong></a><a class="genanchor" href="#128538"> &para;</a><div class="date" title="2023-05-15 05:03"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128538">
<div class="phpcode"><code><span class="html">An important hint: if you are using prebuilt PHP packages where PDO_OCI is not compiled in, you should download the original PHP sources for the PHP version your server is using.<br />These sources contain the PDO_OCI source in the ext/pdo_oci directory.<br />Change to that directory, build the module using <br />phpize<br />./configure<br />make<br />and then install the newly build module to your PHP extension directory and add it to your configuration.<br />For me this has worked on a Debian server with the sury.org modules (PHP 8.2).</span></code></div>
  </div>
 </div>
  <div class="note" id="64819">  <div class="votes">
    <div id="Vu64819">
    <a href="/manual/vote-note.php?id=64819&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64819">
    <a href="/manual/vote-note.php?id=64819&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64819" title="55% like this...">
    9
    </div>
  </div>
  <a href="#64819" class="name">
  <strong class="user"><em>cursade at hotmail dot com</em></strong></a><a class="genanchor" href="#64819"> &para;</a><div class="date" title="2006-04-20 11:29"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64819">
<div class="phpcode"><code><span class="html">if oracle and oracle instant client has been installed,<br />without db in the same host<br /><br />For UNIX/LINUX，set $LD_LIBRARY_PATH<br />appent your instant client path  and  client/lib path to it,<br /><br />For windows set PATH like this<br /><br />After set the path ,set TNS_ADMIN everioment ,point to <br />where  tnsnames.ora located.<br /><br />Then,you can use service name to connect to your Database<br /><br />Test coding<br /><br /><span class="default">&lt;?php<br />$param </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">;<br /></span><span class="default">$db_username </span><span class="keyword">= </span><span class="string">"youusername"</span><span class="keyword">;<br /></span><span class="default">$db_password </span><span class="keyword">= </span><span class="string">"yourpassword"</span><span class="keyword">;<br /></span><span class="default">$db </span><span class="keyword">= </span><span class="string">"oci:dbname=yoursid"</span><span class="keyword">;<br /></span><span class="default">$conn </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">,</span><span class="default">$db_username</span><span class="keyword">,</span><span class="default">$db_password</span><span class="keyword">);<br /></span><span class="default">$name </span><span class="keyword">= </span><span class="default">$param</span><span class="keyword">[</span><span class="string">'module'</span><span class="keyword">];<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">$param</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">];<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"INSERT INTO AL_MODULE (AL_MODULENAME, AL_MODULEFILE) VALUES ('</span><span class="default">$name</span><span class="string">', '</span><span class="default">$file</span><span class="string">')"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106139">  <div class="votes">
    <div id="Vu106139">
    <a href="/manual/vote-note.php?id=106139&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106139">
    <a href="/manual/vote-note.php?id=106139&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106139" title="56% like this...">
    6
    </div>
  </div>
  <a href="#106139" class="name">
  <strong class="user"><em>php at ideacode dot com</em></strong></a><a class="genanchor" href="#106139"> &para;</a><div class="date" title="2011-10-13 07:28"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106139">
<div class="phpcode"><code><span class="html">If you're getting the "I'm too dumb to find oci.h" error, try creating a variety of paths.  One variety uses just the major and minor of your OIC version (eg, 11.2 for 11.2.0.2) and another variety uses client64 as well as client.<br /><br />Something like this (for 11.2.0.2):<br />ln -s /usr/include/oracle/11.2.0.2/ /usr/include/oracle/11.2<br />ln -s /usr/include/oracle/11.2/client /usr/include/oracle/11.2/client64<br />ln -s /usr/lib/oracle/11.2.0.2/ /usr/lib/oracle/11.2<br />ln -s /usr/lib/oracle/11.2/client /usr/lib/oracle/11.2/client64<br /><br />This should cover your bases for 64-bit systems, as well as PHP patched to use the major.minor version number only.  See also PHP bug #44989.</span></code></div>
  </div>
 </div>
  <div class="note" id="88331">  <div class="votes">
    <div id="Vu88331">
    <a href="/manual/vote-note.php?id=88331&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88331">
    <a href="/manual/vote-note.php?id=88331&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88331" title="56% like this...">
    4
    </div>
  </div>
  <a href="#88331" class="name">
  <strong class="user"><em>fernando dot wendt at gmail dot com</em></strong></a><a class="genanchor" href="#88331"> &para;</a><div class="date" title="2009-01-20 05:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88331">
<div class="phpcode"><code><span class="html">To enable PDO support on PHP for Oracle Instant Client 11.1.x, you should follow the syntax above in the compile command, just as pointed by Andrew <a href="http://bugs.php.net/bug.php?id=39312," rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=39312,</a> taking by default you have installed the OIC at /usr/lib/oracle (instant client and sdk at subfolder):<br /><br />./configure --with-oci8=shared,instantclient,/usr/lib/oracle<br />--with-pdo-oci=instantclient,/usr/lib/oracle,11.1<br /><br />Just saying your release version from the Oracle OIC.<br /><br />It compiles fine then.<br /><br />Best regards.</span></code></div>
  </div>
 </div>
  <div class="note" id="130418">  <div class="votes">
    <div id="Vu130418">
    <a href="/manual/vote-note.php?id=130418&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130418">
    <a href="/manual/vote-note.php?id=130418&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130418" title="no votes...">
    0
    </div>
  </div>
  <a href="#130418" class="name">
  <strong class="user"><em>wriedmann at gmail dot com</em></strong></a><a class="genanchor" href="#130418"> &para;</a><div class="date" title="2025-07-15 04:40"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130418">
<div class="phpcode"><code><span class="html">As addition to what I wrote 2 years ago:<br />if you are installing on Debian with a Debian provided package, install the source with <br />apt source php8.2<br />Then you have to set ORACLE_HOME like that:<br />ORACLE_HOME=/usr/lib/oracle/19.6<br />export ORACLE_HOME<br />before running ./configure.<br />After that, I had to add the include directory <br />-I/usr/include/oracle/19.6/client64/<br />into the Makefile to successfully build the module.</span></code></div>
  </div>
 </div>
  <div class="note" id="104350">  <div class="votes">
    <div id="Vu104350">
    <a href="/manual/vote-note.php?id=104350&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104350">
    <a href="/manual/vote-note.php?id=104350&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104350" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#104350" class="name">
  <strong class="user"><em>redlorry919 at gmail dot com</em></strong></a><a class="genanchor" href="#104350"> &para;</a><div class="date" title="2011-06-10 03:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104350">
<div class="phpcode"><code><span class="html">Take note of the note at the top, this really is an experimental extension. I had a problem trying to read data from Oracle which resulted in some strange behaviour in PHP. i.e. foreach loops not ending, with no error messages. I also managed to get the data from Oracle into an array in PHP, but then couldn't return the array from a function.
<br />
<br />After pulling my hair out for a day, it turned out to be a CLOB column in Oracle that caused the strange behaviour in PHP. I assume this extension doesn't fully support them.
<br />
<br />Instead I've typecast it within the SQL to a VARCHAR2 which seems to resolve it:
<br />
<br />SELECT CAST(columnx AS VARCHAR2(4000)) AS columnx ...
<br />
<br />It might help someone else having similar issues.</span></code></div>
  </div>
 </div>
  <div class="note" id="66972">  <div class="votes">
    <div id="Vu66972">
    <a href="/manual/vote-note.php?id=66972&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66972">
    <a href="/manual/vote-note.php?id=66972&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66972" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#66972" class="name">
  <strong class="user"><em>moc.aciremi@yvelj</em></strong></a><a class="genanchor" href="#66972"> &para;</a><div class="date" title="2006-06-01 12:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66972">
<div class="phpcode"><code><span class="html">A Statement of Warning:<br /><br />PDO::oci does not support REF CURSORS.<br /><br />This is mentioned nowhere (until now!) on this page. <br /><br />And now you know!<br /><br />If you want ref cursors avoid PDO for now. <br /><br />My Reference for this claim:<br /><a href="http://www.oracle.com/technology/pub/articles/" rel="nofollow" target="_blank">http://www.oracle.com/technology/pub/articles/</a><br />php_experts/otn_pdo_oracle5.html<br /><br />GREAT article, excellent piece, really. It's not clear to me <br />how old this document is, but it must have some dust on it, <br />given it's references to "PHP5.1 ...' which is a little way off yet' "<br />... as of 2006-06-01, PHP5.1 has been with us for quite some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="98629">  <div class="votes">
    <div id="Vu98629">
    <a href="/manual/vote-note.php?id=98629&amp;page=ref.pdo-oci&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98629">
    <a href="/manual/vote-note.php?id=98629&amp;page=ref.pdo-oci&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98629" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#98629" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#98629"> &para;</a><div class="date" title="2010-06-27 09:49"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98629">
<div class="phpcode"><code><span class="html">Notice the red block at the beginning of this page... pdo_oci is HIGHLY experimental.<br /><br />Even though it is under dev from 2004, it lakes today support for things that _do_ matters :<br /> - bind a varchar2 of 3500 chars <br /> - get selected metas<br /> - left join with blobs/clobs<br /> - etc.<br /><br />For the story, since we use pdo_pgsql in our software, I thought it would be viable to use pdo_oci for running under Oracle. After a long battle, I finally won :<br /><br />1) If requested driver has a non-experimental pdo version available, use it.<br />2) else (well, for pdo_oci at least), use an abstraction layer of your own.<br />3) you're done.<br /><br />What I did in more details...<br /><br />2 "main" classes for being compliant with "$obj instanceof PDO" or such :<br /> - class PhpDb extends PDO<br /> - class PhpDbStatement extends PDOStatement<br />2 "abstract" classes that defines what PDO actually does :<br /> - abstract class PhpDbAbstract<br /> - abstract class PhpDbAbstractStatement<br />And at last for each driver, 2 classes doing the abstraction :<br /> - class PhpDbDriverOracle extends PhpDbAbstract<br /> - class PhpDbDriverOracleStatement extends PhpDbAbstractStatement<br /><br />"main" classes are accessed from your script, simply replace "new PDO" with "new PhpDb".<br />"abstract" classes are mainly there for the documentation :p<br />"driver" classes do the job in background, they are instances by the main classes.<br /><br />My PhpDb will be in an open source project sooner or later, search google or mail me !</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-oci&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-oci.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ref.pdo-cubrid.php" title="CUBRID PDO Driver">CUBRID PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-dblib.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-dblib.php" title="Pdo\Dblib">Pdo\Dblib</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-firebird.php" title="Firebird PDO Driver">Firebird PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-firebird.php" title="Pdo\Firebird">Pdo\Firebird</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-ibm.php" title="IBM PDO Driver">IBM PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-informix.php" title="Informix PDO Driver">Informix PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-mysql.php" title="MySQL PDO Driver">MySQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-mysql.php" title="Pdo\Mysql">Pdo\Mysql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlsrv.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="current">
                            <a href="ref.pdo-oci.php" title="Oracle PDO Driver">Oracle PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-odbc.php" title="ODBC and DB2 PDO Driver">ODBC and DB2 PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-odbc.php" title="Pdo\Odbc">Pdo\Odbc</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-pgsql.php" title="PostgreSQL PDO Driver">PostgreSQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-pgsql.php" title="Pdo\Pgsql">Pdo\Pgsql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlite.php" title="SQLite PDO Driver">SQLite PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-sqlite.php" title="Pdo\Sqlite">Pdo\Sqlite</a>
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
