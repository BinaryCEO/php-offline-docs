<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation for Apache 2.x on Windows systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.windows.apache2.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.windows.apache2.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.apache2.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.windows.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.windows.manual.php">
 <link rel="next" href="https://www.php.net/manual/en/install.windows.iis.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.apache2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.windows.apache2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.windows.apache2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.windows.apache2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.windows.apache2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.windows.apache2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.windows.apache2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.windows.apache2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.windows.apache2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.windows.apache2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.windows.apache2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation for Apache 2.x on Windows systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation for Apache 2.x on Windows systems - Manual" />
<meta name="twitter:description" content="Installation for Apache 2.x on Windows systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation for Apache 2.x on Windows systems - Manual" />
<meta itemprop="description" content="Installation for Apache 2.x on Windows systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation for Apache 2.x on Windows systems" />

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
        <a href="install.windows.iis.php">
          Installation with IIS for Windows &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.windows.manual.php">
          &laquo; Manual installation of pre-built binaries        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.windows.php'>Installation on Windows systems</a></li>      </ul>
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
            <option value='en/install.windows.apache2.php' selected="selected">English</option>
            <option value='de/install.windows.apache2.php'>German</option>
            <option value='es/install.windows.apache2.php'>Spanish</option>
            <option value='fr/install.windows.apache2.php'>French</option>
            <option value='it/install.windows.apache2.php'>Italian</option>
            <option value='ja/install.windows.apache2.php'>Japanese</option>
            <option value='pt_BR/install.windows.apache2.php'>Brazilian Portuguese</option>
            <option value='ru/install.windows.apache2.php'>Russian</option>
            <option value='tr/install.windows.apache2.php'>Turkish</option>
            <option value='uk/install.windows.apache2.php'>Ukrainian</option>
            <option value='zh/install.windows.apache2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.windows.apache2" class="sect1">
 <h2 class="title">Installation for Apache 2.x on Windows systems</h2>
 <p class="para">
  This section contains notes and hints specific to Apache 2.x installs
  of PHP on Microsoft Windows systems.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Please read the <a href="install.windows.manual.php" class="link">manual
   installation steps</a> first!
  </p>
 </p></blockquote>

 <p class="para">
  It is strongly recommended to consult the
  <a href="http://httpd.apache.org/docs/current/" class="link external">&raquo;&nbsp;Apache Documentation</a>
  to get have  a basic understanding of the Apache 2.x Server.
  Also consider reading the
  <a href="http://httpd.apache.org/docs/current/platform/windows.html" class="link external">&raquo;&nbsp;Windows specific notes</a>
  for Apache 2.x before reading on here.
 </p>

 <p class="para">
  Download the most recent version of
  <a href="https://www.apachelounge.com/download/" class="link external">&raquo;&nbsp;Apache 2.x</a>
  and a fitting PHP version. Follow the
  <a href="install.windows.manual.php" class="link">Manual Installation Steps</a>
  and come back to go on with the integration of PHP and Apache.
 </p>

 <p class="para">
  There are three ways to set up PHP to work with Apache 2.x on Windows.
  PHP can be run as a handler, as a CGI, or under FastCGI.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">Remember that when adding
path values in the Apache configuration files on Windows, all backslashes
such as <var class="filename">c:\directory\file.ext</var> should be converted to
forward slashes: <var class="filename">c:/directory/file.ext</var>. A trailing
slash may also be necessary for directories.</span></p></blockquote>

 <div class="sect2" id="install.windows.apache2.module">
  <h3 class="title">Installing as an Apache handler</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    When using the apache2handler SAPI, the Thread Safe (TS) version of
    PHP must be used.
   </span>
  </p></blockquote>
  <p class="para">
   To load the PHP module for Apache 2.x, the following lines in the
   Apache <var class="filename">httpd.conf</var> configuration file must be inserted:
   <div class="example" id="example-23">
    <p><strong>Example #1 PHP and Apache 2.x as handler</strong></p>
    <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode"># before PHP 8.0.0 the name of the module was php7_module
LoadModule php_module &quot;c:/php/php8apache2_4.dll&quot;
&lt;FilesMatch \.php$&gt;
    SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;
# configure the path to php.ini
PHPIniDir &quot;C:/php&quot;</pre>
</div>
    </div>

   </div>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The actual path to PHP must be substituted instead of
    <var class="filename">C:/php/</var> in the above examples.
    Make sure that the file referenced in the <code class="literal">LoadModule</code> directive is at
    the specified location. Use <var class="filename">php7apache2_4.dll</var>
    for PHP 7, or <var class="filename">php8apache2_4.dll</var> for PHP 8.
   </span>
  </p></blockquote>
 </div>

 <div class="sect2" id="install.windows.apache2.cgi">
  <h3 class="title">Running PHP as CGI</h3>

  <p class="para">
   It is strongly recommended to consult the
   <a href="http://httpd.apache.org/docs/current/howto/cgi.html" class="link external">&raquo;&nbsp;Apache CGI documentation</a>
   for a more complete understanding of running CGI on Apache.
  </p>

  <p class="para">
   To run PHP as CGI, the php-cgi files will need to be placed in a
   directory designated as a CGI directory using the ScriptAlias directive.
  </p>

  <p class="para">
   A <code class="literal">#!</code> line will need to be placed in the PHP files,
   which point to the location of the PHP binary:

   <div class="example" id="example-24">
    <p><strong>Example #2 PHP and Apache 2.x as CGI</strong></p>
    <div class="example-contents">
<div class="cdata"><pre>
#!C:/php/php.exe
&lt;?php
  phpinfo();
?&gt;
</pre></div>
    </div>

   </div>
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="para">A server deployed in CGI mode is open
to several possible vulnerabilities. Please read our
<a href="security.cgi-bin.php" class="link">CGI security section</a> to learn how to
defend yourself from such attacks.</p></div>
 </div>

 <div class="sect2" id="install.windows.apache2.fastcgi">
  <h3 class="title">Running PHP under FastCGI</h3>

  <p class="para">
   Running PHP under FastCGI has a number of advantages over running it as a
   CGI. Setting it up this way is fairly straightforward:
  </p>
  <p class="para">
   Obtain <code class="literal">mod_fcgid</code> from
   <a href="https://www.apachelounge.com/download/" class="link external">&raquo;&nbsp;https://www.apachelounge.com</a>.
   Win32 binaries are available for download from that site.
   Install the module according to the instructions that will come with it.
  </p>
  <p class="para">
   Configure the web server as shown below, taking care to adjust any paths
   to reflect how it is installed on the system:

   <div class="example" id="example-25">
    <p><strong>Example #3 Configure Apache to run PHP as FastCGI</strong></p>
    <div class="example-contents">
<div class="cdata"><pre>
LoadModule fcgid_module modules/mod_fcgid.so
# Where is the php.ini file?
FcgidInitialEnv PHPRC        &quot;c:/php&quot;
&lt;FilesMatch \.php$&gt;
    SetHandler fcgid-script
&lt;/FilesMatch&gt;
FcgidWrapper &quot;c:/php/php-cgi.exe&quot; .php
</pre></div>
    </div>

   </div>

   Files with a <code class="literal">.php</code> extension will now be executed by the PHP FastCGI
   wrapper.
  </p>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/windows/apache2.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.windows.apache2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.windows.apache2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.apache2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114118">  <div class="votes">
    <div id="Vu114118">
    <a href="/manual/vote-note.php?id=114118&amp;page=install.windows.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114118">
    <a href="/manual/vote-note.php?id=114118&amp;page=install.windows.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114118" title="64% like this...">
    47
    </div>
  </div>
  <a href="#114118" class="name">
  <strong class="user"><em>wolfeh1994 at yahoo dot com</em></strong></a><a class="genanchor" href="#114118"> &para;</a><div class="date" title="2014-01-13 02:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114118">
<div class="phpcode"><code><span class="html">Please for the love of god, download the threaded version. I spent over an hour trying to figure out why php5apache2.dll could not be found, and while desperately looking through manuals I went into the php 5 structure and found that it doesn't exist in the non-threaded version.<br /><br />This really could use a mention somewhere other than the PHP 5 structure, like the paragraph to the left of the homepage which talks about which PHP version to choose, or this part of the manual which covers Apache... Anywhere but structure, seriously. I would have never guessed to look there.</span></code></div>
  </div>
 </div>
  <div class="note" id="118522">  <div class="votes">
    <div id="Vu118522">
    <a href="/manual/vote-note.php?id=118522&amp;page=install.windows.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118522">
    <a href="/manual/vote-note.php?id=118522&amp;page=install.windows.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118522" title="66% like this...">
    5
    </div>
  </div>
  <a href="#118522" class="name">
  <strong class="user"><em>a user</em></strong></a><a class="genanchor" href="#118522"> &para;</a><div class="date" title="2015-12-20 02:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118522">
<div class="phpcode"><code><span class="html">If you are having issues getting the PHPIniDir or LoadModule directives to work and all the suggestions already given do not help, double-check if you are not using fancy quotes around your paths (‘ ’  “ ”).<br /><br />This happened to me because I copied the statements from a random website. In my text editor the difference was barely noticeable, but to Apache it certainly is!<br /><br />For example, this will not work:<br />PHPIniDir “C:/PHP7”<br /><br />But this will work:<br />PHPIniDir "C:/PHP7"</span></code></div>
  </div>
 </div>
  <div class="note" id="108429">  <div class="votes">
    <div id="Vu108429">
    <a href="/manual/vote-note.php?id=108429&amp;page=install.windows.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108429">
    <a href="/manual/vote-note.php?id=108429&amp;page=install.windows.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108429" title="53% like this...">
    9
    </div>
  </div>
  <a href="#108429" class="name">
  <strong class="user"><em>a solution for simpletons like me</em></strong></a><a class="genanchor" href="#108429"> &para;</a><div class="date" title="2012-04-25 07:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108429">
<div class="phpcode"><code><span class="html">Installing Apache and PHP on Windows 7 Home Premium on a Gateway NV75S laptop with a quad AMD A6-3400M<br /><br />All I need to do with these programs is to test my website out on my laptop.  I have HTML and PHP files. I do not need MySQL as I use html5 storage.<br /><br />Getting and installing Apache<br /><br />1  In your browser go to h t t p : / / h t t p d . a p a c h e . o r g / d o w n l o a d . c g i<br />   (without the spaces)<br />2  Click on  httpd-2.2.22-win32-x86-no_ssl.msi<br />   (this is a self-installing executable file without crypto ... no Secure Socket Layer)<br />   (2.2.22 was the latest version on April 25, 2012)<br />3  Click on the httpd-2.2.22-win32-x86-no_ssl.msi file after it downloads <br />   (single click on the file tab in Chrome or double click on the actual file in Downloads)<br />4  Click Next<br />5  Click I accept the terms in the license agreement<br />6  Click Next<br />7  Click Next<br />8  Type localhost in the top box<br />9  Type localhost in the middle box<br />10 Type admin@localhost.com in the bottom box<br />11 Click Next<br />12 Click Next<br />13 Click Next<br />14 Click Install and wait<br />15 Cick Yes to allow the program to make changes<br />16 Click Finish<br /><br />Testing Apache<br /><br />1  Type localhost in your browser location box (I use Chrome) or type h t t p : / / l o c a l h o s t<br />   (without the spaces)<br />2  The message It works! should appear.<br /><br />Getting and installing PHP<br /><br />1  In your browser go to h t t p : / / w i n d o w s . p h p . n e t / d o w n l o a d /<br />   (without the spaces)<br />2  Click on the Installer link under PHP 5.3 (5.3.10)   VC9 x86 Thread Safe<br />   (Ignore the Do NOT use VC9 version with apache.org binaries comment on the side panel)<br />3  Click on the php-5.3.10-Win32-VC9-x86.msi file after in downloads<br />   (single click on the file tab in Chrome or double click on the actual file in Downloads)<br />4  Click Next<br />5  Click I accept the terms in the License Agreement<br />6  Click Next<br />7  Click Next<br />8  Click Apache 2.2.x Module<br />9  Click Next<br />10 Click Browse<br />11 Double click Apache Software Foundation<br />12 Double click Apache 2.2<br />13 Double click conf<br />14 Click OK<br />15 Click Next<br />16 Click Next<br />17 Click Install and wait<br />18 Cick Yes to allow the program to make changes<br />19 Click Finish<br /><br />Testing PHP with Apache<br /><br />1  Open Notepad<br />2  Type 'left bracket character'?php phpinfo(); ?'right bracket character'<br />3  Save the file to C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs as test.php<br />4  Type localhost/test.php in your browser location box (I use Chrome) or type h t t p : / / l o c a l h o s t / t e s t . p h p<br />5  A table with title PHP Version ... should appear<br /><br />DONE</span></code></div>
  </div>
 </div>
  <div class="note" id="101019">  <div class="votes">
    <div id="Vu101019">
    <a href="/manual/vote-note.php?id=101019&amp;page=install.windows.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101019">
    <a href="/manual/vote-note.php?id=101019&amp;page=install.windows.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101019" title="53% like this...">
    3
    </div>
  </div>
  <a href="#101019" class="name">
  <strong class="user"><em>farinspace</em></strong></a><a class="genanchor" href="#101019"> &para;</a><div class="date" title="2010-11-20 11:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101019">
<div class="phpcode"><code><span class="html">Running PHP under FastCGI:<br /><br />Besides the following in your httpd.conf<br /><br />    LoadModule fcgid_module modules/mod_fcgid.so  <br />    FcgidInitialEnv PHPRC "c:/php" <br />    AddHandler fcgid-script .php  <br />    FcgidWrapper "c:/php/php-cgi.exe" .php<br /><br />Remember to add the following to the default &lt;Directory "C:/apache/htdocs"&gt; block (or virtual host blocks):<br /><br />    Options ExecCGI</span></code></div>
  </div>
 </div>
  <div class="note" id="129524">  <div class="votes">
    <div id="Vu129524">
    <a href="/manual/vote-note.php?id=129524&amp;page=install.windows.apache2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129524">
    <a href="/manual/vote-note.php?id=129524&amp;page=install.windows.apache2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129524" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#129524" class="name">
  <strong class="user"><em>horica78 at yahoo dot com</em></strong></a><a class="genanchor" href="#129524"> &para;</a><div class="date" title="2024-05-26 06:06"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129524">
<div class="phpcode"><code><span class="html">This for the fastest architecture of Apache on Windows faster than as module for php<br /><br />Enable mod_proxy and mod_proxy_fcgi in httpd.conf and run <br />setx PHP_FCGI_CHILDREN "15" /m<br />setx PHP_FCGI_MAX_REQUESTS "1000" /m<br />and download <br />RunHiddenConsole.exe  and start php with c:\hidden\RunHiddenConsole.exe C:\PHP\php-cgi.exe -b 127.0.0.1:9000 and set on VirtualHost :<br />&lt;Files ~ "\.(php|phtml)$"&gt; <br />    SetHandler "proxy:fcgi://127.0.0.1:9000#"<br />    ProxyFCGIBackendType GENERIC<br />    ProxyFCGISetEnvIf "true" SCRIPT_FILENAME "C:%{reqenv:SCRIPT_FILENAME}" <br />    &lt;/Files&gt;<br />retar the Apache service and have fun. Cheers from one huge fan of</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.windows.apache2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.apache2.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.windows.php">Installation on Windows systems</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.windows.recommended.php" title="Recommended configuration on Windows systems">Recommended configuration on Windows systems</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.manual.php" title="Manual installation of pre-&#8203;built binaries">Manual installation of pre-&#8203;built binaries</a>
                        </li>
                                                <li class="current">
                            <a href="install.windows.apache2.php" title="Installation for Apache 2.x on Windows systems">Installation for Apache 2.x on Windows systems</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.iis.php" title="Installation with IIS for Windows">Installation with IIS for Windows</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.tools.php" title="Third-&#8203;party tools for installing PHP">Third-&#8203;party tools for installing PHP</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.building.php" title="Building from source">Building from source</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.commandline.php" title="Running PHP on the command line on Windows systems">Running PHP on the command line on Windows systems</a>
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
