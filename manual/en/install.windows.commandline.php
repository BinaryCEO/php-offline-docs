<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Running PHP on the command line on Windows systems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.windows.commandline.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.windows.commandline.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.commandline.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.windows.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.windows.building.php">
 <link rel="next" href="https://www.php.net/manual/en/install.cloud.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.windows.commandline.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.windows.commandline.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.windows.commandline.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.windows.commandline.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.windows.commandline.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.windows.commandline.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.windows.commandline.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.windows.commandline.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.windows.commandline.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.windows.commandline.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.windows.commandline.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Running PHP on the command line on Windows systems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Running PHP on the command line on Windows systems - Manual" />
<meta name="twitter:description" content="Running PHP on the command line on Windows systems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Running PHP on the command line on Windows systems - Manual" />
<meta itemprop="description" content="Running PHP on the command line on Windows systems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Running PHP on the command line on Windows systems" />

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
        <a href="install.cloud.php">
          Installation on Cloud Computing platforms &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.windows.building.php">
          &laquo; Building from source        </a>
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
            <option value='en/install.windows.commandline.php' selected="selected">English</option>
            <option value='de/install.windows.commandline.php'>German</option>
            <option value='es/install.windows.commandline.php'>Spanish</option>
            <option value='fr/install.windows.commandline.php'>French</option>
            <option value='it/install.windows.commandline.php'>Italian</option>
            <option value='ja/install.windows.commandline.php'>Japanese</option>
            <option value='pt_BR/install.windows.commandline.php'>Brazilian Portuguese</option>
            <option value='ru/install.windows.commandline.php'>Russian</option>
            <option value='tr/install.windows.commandline.php'>Turkish</option>
            <option value='uk/install.windows.commandline.php'>Ukrainian</option>
            <option value='zh/install.windows.commandline.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.windows.commandline" class="sect1">
 <h2 class="title">Running PHP on the command line on Windows systems</h2>
 <p class="para">
  This section contains notes and hints specific to getting PHP running
  from the command line for Windows.
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Read the <a href="install.windows.manual.php" class="link">manual
   installation steps</a> first!
  </p>
 </p></blockquote>
 <p class="para">
  Getting PHP to run from the command line can be performed without making
  any changes to Windows.
  <div class="example-contents screen">
<div class="cdata"><pre>
C:\php\php.exe -f &quot;C:\PHP Scripts\script.php&quot; -- -arg1 -arg2 -arg3
</pre></div>     
  </div>
 </p>

 <p class="para">
  But there are some easy steps that can be followed to make this simpler.
  Some of these steps should already have been taken, but are repeated here
  to be able to provide a complete step-by-step sequence.

  <ul class="itemizedlist">
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Both <var class="envar">PATH</var> and <var class="envar">PATHEXT</var> are important
     pre-existing system variables in Windows,
     and care should be taken to not overwrite either variable,
     only to add to them.
    </p>
   </p></blockquote>

   <li class="listitem">
    <p class="para">
     Append the location of the PHP executable (<var class="filename">php.exe</var>,
     <var class="filename">php-win.exe</var> or <var class="filename">php-cli.exe</var>
     depending upon the PHP version and display preferences) to the
     <var class="envar">PATH</var> environment variable. Read more about how to
     add the appropriate directory to <var class="envar">PATH</var> in the <a href="faq.installation.php#faq.installation.addtopath" class="link">corresponding FAQ entry</a>.
    </p>
   </li>

   <li class="listitem">
    <p class="para">
     Append the <code class="literal">.PHP</code> extension to the
     <var class="varname">PATHEXT</var> environment variable. This can be done
     at the same time as amending the <var class="envar">PATH</var> environment
     variable. Follow the same steps as described in the <a href="faq.installation.php#faq.installation.addtopath" class="link">FAQ</a> but amend the
     <var class="varname">PATHEXT</var> environment variable rather than the
     <var class="envar">PATH</var> environment variable.
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The position in which the <code class="literal">.PHP</code> is placed will
       determine which script or program is executed when there are matching
       filenames. For example, placing <code class="literal">.PHP</code> before
       <code class="literal">.BAT</code> will cause the script to run, rather than
       the batch file, if there is a batch file with the same name.
      </p>
     </p></blockquote>
    </p>
   </li>

   <li class="listitem">
    <p class="para">
     Associate the <code class="literal">.PHP</code> extension with a file type. This
     is done by running the following command:
     <div class="example-contents screen">
<div class="cdata"><pre>
assoc .php=phpfile
</pre></div>     
     </div>
    </p>
   </li>

   <li class="listitem">
    <p class="para">
     Associate the <code class="literal">phpfile</code> file type with the appropriate
     PHP executable. This is done by running the following command:
     <div class="example-contents screen">
<div class="cdata"><pre>
ftype phpfile=&quot;C:\php\php.exe&quot; -f &quot;%1&quot; -- %~2
</pre></div>     
     </div>
    </p>
   </li>

  </ul>
 </p>

 <p class="para">
  Following these steps will allow PHP scripts to be run from any directory
  without the need to type the PHP executable or the <code class="literal">.PHP</code>
  extension and all parameters will be supplied to the script for processing.
 </p>

 <p class="para">
  The example below details some of the registry changes that can be made manually.
  <div class="example" id="example-27">
   <p><strong>Example #1 Registry changes</strong></p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Windows Registry Editor Version 5.00

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\.php]
@=&quot;phpfile&quot;
&quot;Content Type&quot;=&quot;application/php&quot;

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile]
@=&quot;PHP Script&quot;
&quot;EditFlags&quot;=dword:00000000
&quot;BrowserFlags&quot;=dword:00000008
&quot;AlwaysShowExt&quot;=&quot;&quot;

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\DefaultIcon]
@=&quot;C:\\php\\php-win.exe,0&quot;

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell]
@=&quot;Open&quot;

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell\Open]
@=&quot;&amp;Open&quot;

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\phpfile\shell\Open\command]
@=&quot;\&quot;C:\\php\\php.exe\&quot; -f \&quot;%1\&quot; -- %~2&quot;
</pre></div>
   </div>
  </div>
 </p>

 <p class="para">
  With these changes the same command can be written as:
  <div class="example-contents screen">
<div class="cdata"><pre>
&quot;C:\PHP Scripts\script&quot; -arg1 -arg2 -arg3
</pre></div>
  </div>
  or, if the <code class="literal">&quot;C:\PHP Scripts&quot;</code> directory is in the
  <var class="envar">PATH</var> environment variable:
  <div class="example-contents screen">
<div class="cdata"><pre>
script -arg1 -arg2 -arg3
</pre></div>
  </div>
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   There is a small problem when intending to use this technique to run
   PHP scripts as a command line filter, like the example below:
   <div class="example-contents screen">
<div class="cdata"><pre>
dir | &quot;C:\PHP Scripts\script&quot; -arg1 -arg2 -arg3
</pre></div>
   </div>
   or
   <div class="example-contents screen">
<div class="cdata"><pre>
dir | script -arg1 -arg2 -arg3
</pre></div>
   </div>
   The script may simply hang and nothing is output.
   To get this operational, another registry change needs to be made:
   <div class="example-contents screen">
<div class="cdata"><pre>
Windows Registry Editor Version 5.00

[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\policies\Explorer]
&quot;InheritConsoleHandles&quot;=dword:00000001
</pre></div>
   </div>
   Further information regarding this issue can be found in this <a href="http://support.microsoft.com/default.aspx?scid=kb;en-us;321788" class="link external">&raquo;&nbsp;Microsoft
   Knowledgebase Article : 321788</a>.
   As of Windows 10, this setting seems to be reversed, making the default install of
   Windows 10 support inherited console handles automatically. This <a href="https://social.msdn.microsoft.com/Forums/en-US/f19d740d-21c8-4dc2-a9ab-d5c0527e932b/nasty-file-association-regression-bug-in-windows-10-console?forum=windowssdk" class="link external">&raquo;&nbsp;
   Microsoft forum post</a> provides the explanation.
  </p>
 </p></blockquote>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/windows/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.windows.commandline%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.windows.commandline&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.commandline.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101779">  <div class="votes">
    <div id="Vu101779">
    <a href="/manual/vote-note.php?id=101779&amp;page=install.windows.commandline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101779">
    <a href="/manual/vote-note.php?id=101779&amp;page=install.windows.commandline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101779" title="50% like this...">
    1
    </div>
  </div>
  <a href="#101779" class="name">
  <strong class="user"><em>pimroes at gmail dot com</em></strong></a><a class="genanchor" href="#101779"> &para;</a><div class="date" title="2011-01-11 12:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101779">
<div class="phpcode"><code><span class="html">Make sure your run CMD.exe as an administrator, otherwise you'll get an "access denied" when you run the commands.</span></code></div>
  </div>
 </div>
  <div class="note" id="118579">  <div class="votes">
    <div id="Vu118579">
    <a href="/manual/vote-note.php?id=118579&amp;page=install.windows.commandline&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118579">
    <a href="/manual/vote-note.php?id=118579&amp;page=install.windows.commandline&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118579" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#118579" class="name">
  <strong class="user"><em>rudigerw at hotmail dot com</em></strong></a><a class="genanchor" href="#118579"> &para;</a><div class="date" title="2015-12-31 08:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118579">
<div class="phpcode"><code><span class="html">On Windows 10 starting php by only typing the script name in an elevated command prompt pops up a dialog to choose an app.<br />It turns out Windows does that when the program associated with phpfiles through ftype cannot be executed. In this case this happens because it is trying to run php.exe in non-admin mode, even when launched from an elevated command prompt. To fix this, locate your php.exe, right-click, "Properties",  "Compatibility", under Settings check "Run this program as an administrator; then also click "Change settings for all users".</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.windows.commandline&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.windows.commandline.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
