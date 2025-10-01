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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.installation.php">
 <link rel="shorturl" href="https://www.php.net/installation">
 <link rel="alternate" href="https://www.php.net/installation" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.databases.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.build.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.installation.php" hreflang="zh">

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
        <a href="faq.build.php">
          Build Problems &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.databases.php">
          &laquo; Database issues        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='faq.php'>FAQ</a></li>      </ul>
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
            <option value='en/faq.installation.php' selected="selected">English</option>
            <option value='de/faq.installation.php'>German</option>
            <option value='es/faq.installation.php'>Spanish</option>
            <option value='fr/faq.installation.php'>French</option>
            <option value='it/faq.installation.php'>Italian</option>
            <option value='ja/faq.installation.php'>Japanese</option>
            <option value='pt_BR/faq.installation.php'>Brazilian Portuguese</option>
            <option value='ru/faq.installation.php'>Russian</option>
            <option value='tr/faq.installation.php'>Turkish</option>
            <option value='uk/faq.installation.php'>Ukrainian</option>
            <option value='zh/faq.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.installation" class="chapter">
  <h1 class="title">Installation</h1>

  

  <p class="para">
   This section holds common questions about the way to install
   PHP. PHP is available for almost any OS, and almost any web server.
  </p>
  <p class="para">
   To install PHP, follow the instructions in <a href="install.php" class="xref">Installation and Configuration</a>.
  </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.installation.apache2">
     
      Why shouldn&#039;t I use Apache2 with a threaded MPM in a production environment?
     
    </a></li><li><a href="#faq.installation.phpini">
     
      Unix/Windows: Where should my php.ini file be
      located?
     
    </a></li><li><a href="#faq.installation.nodata">
     
      Unix: I installed PHP, but every time I load a document, I get the 
      message &#039;Document Contains No Data&#039;! What&#039;s going on here?
     
    </a></li><li><a href="#faq.installation.processing">
     
      Unix: I installed PHP using RPMS, but Apache isn&#039;t processing the 
      PHP pages! What&#039;s going on here?
     
    </a></li><li><a href="#faq.installation.frontpage">
     
      Unix: I patched Apache with the FrontPage extensions patch, and
      suddenly PHP stopped working. Is PHP incompatible with the
      Apache FrontPage extensions?
     
    </a></li><li><a href="#faq.installation.blankscreen">
     
      Unix/Windows: I have installed PHP, but when I try to
      access a PHP script file via my browser, I get a blank screen.
     
    </a></li><li><a href="#faq.installation.500error">
     
      Unix/Windows: I have installed PHP, but when try to
      access a PHP script file via my browser, I get a
      server 500 error.
     
    </a></li><li><a href="#faq.installation.undefinedsyms">
      
      Some operating systems: I have installed PHP without errors,
      but when I try to start Apache I get undefined symbol errors:
      
[mybox:user /src/php5] root# apachectl configtest
 apachectl: /usr/local/apache/bin/httpd Undefined symbols:
  _compress
  _uncompress
      
     
    </a></li><li><a href="#faq.installation.cgierror">
     
      Windows: I have installed PHP, but when I try to access
      a PHP script file via my browser, I get the error:
      

cgi error:
 The specified CGI application misbehaved by not
 returning a complete set of HTTP headers.
 The headers it did return are:

      
     
    </a></li><li><a href="#faq.installation.phpandiis">
     
      Windows: I&#039;ve followed all the instructions, but still can&#039;t
      get PHP and IIS to work together!
     
    </a></li><li><a href="#faq.installation.forceredirect">
     
       When running PHP as CGI with IIS, PWS, OmniHTTPD or Xitami,
       I get the following error: Security Alert! PHP CGI 
       cannot be accessed directly..
     
    </a></li><li><a href="#faq.installation.findphpini">
     
      How do I know if my php.ini is being found and read?  It
      seems like it isn&#039;t as my changes aren&#039;t being implemented.
     
    </a></li><li><a href="#faq.installation.addtopath">
     
      How do I add my PHP directory to the PATH
      on Windows?
     
    </a></li><li><a href="#faq.installation.phprc">
     
      How do I make the php.ini file available to PHP on Windows?
     
    </a></li><li><a href="#faq.installation.windows-temporary-path">
     
      Windows: How do I verify that PHP can write to the temporary directory
      under IIS?
     
    </a></li><li><a href="#faq.installation.apache.multiviews">
     
      Is it possible to use Apache content negotiation (MultiViews option)
      with PHP?
     
    </a></li><li><a href="#faq.installation.requestmethods">
     
      Is PHP limited to process GET and POST request methods only?
     
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.installation.apache2">
    <dt><strong>
     
      Why shouldn&#039;t I use Apache2 with a threaded MPM in a production environment?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      PHP is glue. It is the glue used to build cool web applications by
      sticking dozens of 3rd-party libraries together and making it all appear
      as one coherent entity through an intuitive and easy to learn language
      interface. The flexibility and power of PHP relies on the stability and
      robustness of the underlying platform. It needs a working OS, a working
      web server and working 3rd-party libraries to glue together. When any of
      these stop working PHP needs ways to identify the problems and fix them
      quickly. When you make the underlying framework more complex by not having
      completely separate execution threads, completely separate memory
      segments and a strong sandbox for each request to play in, further
      weaknesses are introduced into PHP&#039;s system.
     </p>
     <p class="para">
      If you want to use a threaded MPM, look at a FastCGI configuration
      where PHP is running in its own memory space.  
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.phpini">
    <dt><strong>
     
      Unix/Windows: Where should my <var class="filename">php.ini</var> file be
      located?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      By default on Unix it should be in <var class="filename">/usr/local/lib</var>
      which is <var class="filename">&lt;install-path&gt;/lib</var>.
      Most people will want to change this at compile-time with the 
      <a href="configure.about.php#configure.with-config-file-path" class="link">--with-config-file-path</a>
      flag. You would, for example, set it with something like:
      <div class="example-contents"><div class="shellcode"><pre class="shellcode">--with-config-file-path=/etc</pre>
</div></div>

      And then you would copy <var class="filename">php.ini-development</var> from 
      the distribution to <var class="filename">/etc/php.ini</var> and
      edit it to make any local changes you want.
     </p>
      <div class="example-contents"><div class="shellcode"><pre class="shellcode">--with-config-file-scan-dir=PATH</pre>
</div></div>

     <p class="para">
      On Windows the default path for the <var class="filename">php.ini</var> file is the Windows
      directory. If you&#039;re using the Apache webserver, <var class="filename">php.ini</var> is first
      searched in the Apaches install directory, e.g. <var class="filename">c:\program
      files\apache group\apache</var>. This way you can have
      different <var class="filename">php.ini</var> files for different versions of Apache on the same
      machine.
     </p>
     <p class="para">
     See also the chapter about the <a href="configuration.file.php" class="link">configuration file</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.nodata">
    <dt><strong>
     
      Unix: I installed PHP, but every time I load a document, I get the 
      message &#039;Document Contains No Data&#039;! What&#039;s going on here?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This probably means that PHP is having some sort of problem
      and is core-dumping. Look in your server error log to see if
      this is the case, and then try to reproduce the problem with
      a small test case. If you know how to use &#039;gdb&#039;, it is very
      helpful when you can provide a backtrace with your bug report
      to help the developers pinpoint the problem.  If you are using
      PHP as an Apache module try something like:
      <ul class="itemizedlist">
       <li class="listitem">
        <p class="para">
         Stop your httpd processes
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         gdb httpd
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         Stop your httpd processes
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         &gt; run -X -f /path/to/httpd.conf
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         Then fetch the URL causing the problem with your browser
        </p>
       </li>      
       <li class="listitem">
        <p class="para">
         &gt; run -X -f /path/to/httpd.conf
        </p>
       </li>      
       <li class="listitem">
        <p class="para">
         If you are getting a core dump, gdb should inform you of this now
        </p>
       </li>      
       <li class="listitem">
        <p class="para">
         type: bt
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         You should include your backtrace in your bug report. This should be submitted to 
         <a href="https://github.com/php/php-src/issues" class="link external">&raquo;&nbsp;https://github.com/php/php-src/issues</a> 
        </p>
       </li>
      </ul>
     </p>
     <p class="para">
      If your script uses the regular expression functions
      (<span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> and friends), you should make sure 
      that you compiled PHP and Apache with the same regular 
      expression package. This should happen automatically with
      PHP and Apache 1.3.x
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.processing">
    <dt><strong>
     
      Unix: I installed PHP using RPMS, but Apache isn&#039;t processing the 
      PHP pages! What&#039;s going on here?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Assuming you installed both Apache and PHP from RPM packages, 
      you need to uncomment or add some or all of the following lines
      in your <var class="filename">httpd.conf</var> file:
      <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode"># Extra Modules
AddModule mod_php.c
AddModule mod_perl.c

# Extra Modules
LoadModule php_module         modules/mod_php.so
LoadModule php5_module        modules/libphp5.so
LoadModule perl_module        modules/libperl.so</pre>
</div>
      </div>

      And add:
      <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">AddType application/x-httpd-php .php</pre>
</div>
      </div>

      ... to the global properties, or to the properties of the 
      VirtualDomain you want to have PHP support added to.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.frontpage">
    <dt><strong>
     
      Unix: I patched Apache with the FrontPage extensions patch, and
      suddenly PHP stopped working. Is PHP incompatible with the
      Apache FrontPage extensions?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      No, PHP works fine with the FrontPage extensions. The problem
      is that the FrontPage patch modifies several Apache structures,
      that PHP relies on. Recompiling PHP (using &#039;make clean ; make&#039;)
      after the FP patch is applied would solve the problem.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.blankscreen">
    <dt><strong>
     
      Unix/Windows: I have installed PHP, but when I try to
      access a PHP script file via my browser, I get a blank screen.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Do a &#039;view source&#039; in the web browser and you will probably
      find that you can see the source code of your PHP script.
      This means that the web server did not send the script to
      PHP for interpretation. Something is wrong with the server
      configuration - double check the server configuration against
      the PHP installation instructions.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.500error">
    <dt><strong>
     
      Unix/Windows: I have installed PHP, but when try to
      access a PHP script file via my browser, I get a
      server 500 error.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Something went wrong when the server tried to run PHP. To
      get to see a sensible error message, from the command line,
      change to the directory containing the PHP executable
      (<var class="filename">php.exe</var> on Windows) and run
      <strong class="command">php -i</strong>. If PHP has any problems running,
      then a suitable error message will be displayed which will
      give you a clue as to what needs to be done next. If you
      get a screen full of HTML codes (the output of the
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function) then PHP is working,
      and your problem may be related to your server configuration
      which you should double check.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.undefinedsyms">
    <dt><strong>
      
      Some operating systems: I have installed PHP without errors,
      but when I try to start Apache I get undefined symbol errors:
      <div class="example-contents"><div class="shellcode"><pre class="shellcode">[mybox:user /src/php5] root# apachectl configtest
 apachectl: /usr/local/apache/bin/httpd Undefined symbols:
  _compress
  _uncompress</pre>
</div></div>

     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This has actually nothing to do with PHP, but with the MySQL
      client libraries. Some need <strong class="option configure">--with-zlib</strong>, others do not. This
      is also covered in the MySQL FAQ.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.cgierror">
    <dt><strong>
     
      Windows: I have installed PHP, but when I try to access
      a PHP script file via my browser, I get the error:
      <div class="example-contents screen">
<div class="cdata"><pre>
cgi error:
 The specified CGI application misbehaved by not
 returning a complete set of HTTP headers.
 The headers it did return are:
</pre></div>
      </div>
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This error message means that PHP failed to output anything
      at all. To get to see a sensible error message, from the
      command line, change to the directory containing the PHP
      executable (<var class="filename">php.exe</var> on Windows) and run
      <strong class="command">php -i</strong>. If PHP has any problems running,
      then a suitable error message will be displayed which will
      give you a clue as to what needs to be done next. If you
      get a screen full of HTML codes (the output of the
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function) then PHP is working.
     </p>
     <p class="para">
      Once PHP is working at the command line, try accessing the
      script via the browser again. If it still fails then it
      could be one of the following:
     </p>
     <ul class="itemizedlist">
      <li class="listitem">
       <span class="simpara">
        File permissions on your PHP script,
        <var class="filename">php.exe</var>, <var class="filename">php5ts.dll</var>,
        <var class="filename">php.ini</var> or any PHP extensions you are trying to load are such
        that the anonymous internet user
        <code class="literal">ISUR_&lt;machinename&gt;</code> cannot access them.
       </span>
      </li>
      <li class="listitem">
       <span class="simpara">
        The script file does not exist (or possibly isn&#039;t where you
        think it is relative to your web root directory). Note that
        for IIS you can trap this error by ticking the &#039;check file
        exists&#039; box when setting up the script mappings in the
        Internet Services Manager. If a script file does not exist
        then the server will return a 404 error instead. There is
        also the additional benefit that IIS will do any
        authentication required for you based on the NTLanMan
        permissions on your script file.
       </span>
      </li>
     </ul>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.phpandiis">
    <dt><strong>
     
      Windows: I&#039;ve followed all the instructions, but still can&#039;t
      get PHP and IIS to work together!
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Make sure any user who needs to run a PHP script has the rights
      to run <var class="filename">php.exe</var>! IIS uses an anonymous user
      which is added at the time IIS is installed. This user needs
      rights to <var class="filename">php.exe</var>. Also, any authenticated
      user will also need rights to execute <var class="filename">php.exe</var>.
      And for IIS4 you need to tell it that PHP is a script engine.
      Also, you will want to read 
      <a href="faq.installation.php#faq.installation.forceredirect" class="link">this faq</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.forceredirect">
    <dt><strong>
     
       When running PHP as CGI with IIS, PWS, OmniHTTPD or Xitami,
       I get the following error: <code class="literal">Security Alert! PHP CGI 
       cannot be accessed directly.</code>.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You must set the <a href="ini.core.php#ini.cgi.force-redirect" class="link">
      cgi.force_redirect</a> directive to <code class="literal">0</code>.
      It defaults to <code class="literal">1</code> so be sure the directive
      isn&#039;t commented out (with a <code class="literal">;</code>).  Like
      all directives, this is set in <var class="filename">php.ini</var>
     </p>
     <p class="para">
      Because the default is <code class="literal">1</code>, it&#039;s critical
      that you&#039;re 100% sure that the correct <var class="filename">php.ini</var> file is being 
      read.  Read <a href="faq.installation.php#faq.installation.findphpini" class="link">this faq</a>
      for details.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.findphpini">
    <dt><strong>
     
      How do I know if my <var class="filename">php.ini</var> is being found and read?  It
      seems like it isn&#039;t as my changes aren&#039;t being implemented.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      To be sure your <var class="filename">php.ini</var> is being read by PHP, make a call to
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>. Near the top, there will be a
      listing called <code class="literal">Configuration File (php.ini)</code>.
      This will tell you where PHP is looking for <var class="filename">php.ini</var> and
      whether or not it&#039;s being read. If just a directory <var class="envar">PATH</var> exists,
      then it&#039;s not being read, and you should put your <var class="filename">php.ini</var>
      in that directory. If <var class="filename">php.ini</var> is included within the <var class="envar">PATH</var>,
      it is being read.
     </p>
     <p class="para">
      If <var class="filename">php.ini</var> is being read and you&#039;re running PHP as a module,
      then be sure to restart your web server after making changes to
      <var class="filename">php.ini</var> 
     </p>
     <p class="para">
      See also <span class="function"><a href="function.php-ini-loaded-file.php" class="function">php_ini_loaded_file()</a></span>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.addtopath">
    <dt><strong>
     
      How do I add my PHP directory to the <var class="envar">PATH</var>
      on Windows?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      On Windows:
      <ul class="itemizedlist">
       <li class="listitem"><p class="para">
        Go to Control Panel and open the System icon (Start → Control Panel)
       </p></li>
       <li class="listitem"><p class="para">
        Go to the Advanced tab
       </p></li>
       <li class="listitem"><p class="para">
        Click on the &#039;Environment Variables&#039; button
       </p></li>
       <li class="listitem"><p class="para">
        Look into the &#039;System Variables&#039; pane
       </p></li>
       <li class="listitem"><p class="para">
        Find the Path entry (you may need to scroll to find it)
       </p></li>
       <li class="listitem"><p class="para">
        Double click on the Path entry
       </p></li>
       <li class="listitem"><p class="para">
        Enter your PHP directory at the end, including &#039;;&#039; before (e.g.
        <code class="literal">;C:\php</code>)
       </p></li>
       <li class="listitem"><p class="para">
        Press OK
       </p></li>
      </ul>
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Be sure to reboot after following the steps above to ensure that the
       <var class="envar">PATH</var> changes are applied.
      </span>
     </p></blockquote>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.phprc">
    <dt><strong>
     
      How do I make the <var class="filename">php.ini</var> file available to PHP on Windows?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      There are several ways of doing this. If you are using Apache,
      refer to the Apache documentation, otherwise
      you must set the <var class="varname">PHPRC</var> environment variable.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.windows-temporary-path">
    <dt><strong>
     <p class="simpara">
      Windows: How do I verify that PHP can write to the temporary directory
      under IIS?
     </p>
    </strong></dt>
    <dd class="answer">
     <div class="procedure">
      <ol type="1"><li>
       <p class="simpara">
        Right-click the temporary directory (<var class="varname">%TEMP%</var>)
        in File Explorer to get the permissions.
        The temporary directory is available from the configuration or
        <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>.
       </p>
      </li>
      <li>
       <p class="simpara">
        For IIS, check that user <code class="literal">IIS_User</code> has
        <code class="literal">MODIFY</code> permission.
       </p>
      </li>
     </ol></div>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.apache.multiviews">
    <dt><strong>
     
      Is it possible to use Apache content negotiation (MultiViews option)
      with PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      If links to PHP files include extension, everything works perfect. This
      FAQ is only for the case when links to PHP files don&#039;t include extension
      and you want to use content negotiation to choose PHP files from URL
      with no extension.
      In this case, replace the line <code class="literal">AddType application/x-httpd-php
      .php</code> with:
      <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">AddHandler php5-script php
AddType text/html php</pre>
</div>
     </div>

     This solution doesn&#039;t work for Apache 1 as PHP module doesn&#039;t catch
     <code class="literal">php-script</code>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.installation.requestmethods">
    <dt><strong>
     
      Is PHP limited to process GET and POST request methods only?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      No, it is possible to handle any request method, e.g. CONNECT. Proper
      response status can be sent with <span class="function"><a href="function.header.php" class="function">header()</a></span>.
      If only GET and POST methods should be handled, it can be achieved with
      this Apache configuration:
      <div class="example-contents">
<div class="apache-confcode"><pre class="apache-confcode">&lt;LimitExcept GET POST&gt;
Deny from all
&lt;/LimitExcept&gt;</pre>
</div>
     </div>

     </p>
    </dd>
   </dl>

  
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/faq/installation.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54662">  <div class="votes">
    <div id="Vu54662">
    <a href="/manual/vote-note.php?id=54662&amp;page=faq.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54662">
    <a href="/manual/vote-note.php?id=54662&amp;page=faq.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54662" title="77% like this...">
    20
    </div>
  </div>
  <a href="#54662" class="name">
  <strong class="user"><em>per dot fikse at ipj dot no</em></strong></a><a class="genanchor" href="#54662"> &para;</a><div class="date" title="2005-07-12 01:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54662">
<div class="phpcode"><code><span class="html">Installing PHP 4 or 5 on Windows Server 2003 x64 results in http error 505. This is not a PHP bug. It is due to running a 32-bit ISAPI DLL under the 64-bit version of IIS 6, as documented here: <a href="http://support.microsoft.com/?id=895976" rel="nofollow" target="_blank">http://support.microsoft.com/?id=895976</a><br /><br />Solution: Flip the Metabase flag for Enable32bitAppOnWin64 as described in <a href="http://support.microsoft.com/?id=894435" rel="nofollow" target="_blank">http://support.microsoft.com/?id=894435</a> , <br />like this: CSCRIPT ADSUTIL.VBS SET W3SVC/AppPools/Enable32bitAppOnWin64 1<br /><br />(Alternatively with full path: cscript %SYSTEMDRIVE%\inetpub\adminscripts\adsutil.vbs SET W3SVC/AppPools/Enable32bitAppOnWin64 1)</span></code></div>
  </div>
 </div>
  <div class="note" id="82606">  <div class="votes">
    <div id="Vu82606">
    <a href="/manual/vote-note.php?id=82606&amp;page=faq.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82606">
    <a href="/manual/vote-note.php?id=82606&amp;page=faq.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82606" title="75% like this...">
    8
    </div>
  </div>
  <a href="#82606" class="name">
  <strong class="user"><em>charleslynch at xybersoftware dot com</em></strong></a><a class="genanchor" href="#82606"> &para;</a><div class="date" title="2008-04-17 07:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82606">
<div class="phpcode"><code><span class="html">One final note to the message below if you are getting the message about not having rights to execute...You need to use IIS right click on the website and choose 'Properties/Home Directory' then on the 'Execute Permissions' combo box you need to choose 'Scripts only'...Click ok...another dialog may appear asking which directories to apply the action too...choose any directories that you intend on using php in and click ok...It should work now...</span></code></div>
  </div>
 </div>
  <div class="note" id="60267">  <div class="votes">
    <div id="Vu60267">
    <a href="/manual/vote-note.php?id=60267&amp;page=faq.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60267">
    <a href="/manual/vote-note.php?id=60267&amp;page=faq.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60267" title="69% like this...">
    9
    </div>
  </div>
  <a href="#60267" class="name">
  <strong class="user"><em>emzeperx at emzeper dot hu</em></strong></a><a class="genanchor" href="#60267"> &para;</a><div class="date" title="2006-01-01 12:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60267">
<div class="phpcode"><code><span class="html">You do not have to restart the whole system make effect of changing the PATH env var. For me (sbs2003) worked automatically.<br />on older systems you can use<br /><br />set $Path=%path%;c:\php<br /><br />command to extend immediately the path var.</span></code></div>
  </div>
 </div>
  <div class="note" id="78933">  <div class="votes">
    <div id="Vu78933">
    <a href="/manual/vote-note.php?id=78933&amp;page=faq.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78933">
    <a href="/manual/vote-note.php?id=78933&amp;page=faq.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78933" title="63% like this...">
    5
    </div>
  </div>
  <a href="#78933" class="name">
  <strong class="user"><em>joerg at fenin dot de</em></strong></a><a class="genanchor" href="#78933"> &para;</a><div class="date" title="2007-11-02 02:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78933">
<div class="phpcode"><code><span class="html">To limit HTTP Request Methods on the Apache server running PHP you should use mod_rewrite or mod_security instead of LimitExcept, to give you more control over the handling of such http errors.  Can go in .htaccess file or httpd.conf<br /><br /># mod_rewrite<br />&lt;IfModule mod_rewrite.c&gt;<br />  RewriteEngine On<br />  RewriteCond %{REQUEST_METHOD} !^(GET|HEAD|POST)$<br />  RewriteRule .* - [F,L]<br />&lt;/IfModule&gt;<br /><br /># mod_security<br />&lt;IfModule mod_security.c&gt;<br />  SecFilterSelective REQUEST_METHOD "!^(GET|HEAD|POST)$" "deny,log,status:403"<br />&lt;/IfModule&gt;<br /><br />You can use the php request method scanner at askapache to see exactly how your server deals with various request methods, and check that your server is configured properly..  <br /><br /><a href="http://www.askapache.com/online-tools/request-method-scanner/" rel="nofollow" target="_blank">http://www.askapache.com/online-tools/request-method-scanner/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="75234">  <div class="votes">
    <div id="Vu75234">
    <a href="/manual/vote-note.php?id=75234&amp;page=faq.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75234">
    <a href="/manual/vote-note.php?id=75234&amp;page=faq.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75234" title="63% like this...">
    5
    </div>
  </div>
  <a href="#75234" class="name">
  <strong class="user"><em>Curtis</em></strong></a><a class="genanchor" href="#75234"> &para;</a><div class="date" title="2007-05-18 07:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75234">
<div class="phpcode"><code><span class="html">I have some additional troubleshooting tips for 53.7, which deals with getting a blank screen on your browser when running a PHP script.<br /><br />In addition to server misconfiguration, it may also be that PHP isn't configured to output errors to the browser, which is the case if you or your host uses a more secure php.ini. If this is the case, you need to find out where errors are being logged to find out if any errors are preventing normal output from being delivered to the client.<br /><br />If you have access to php.ini, check the 'display_errors' directive, which is, by default, located under the 'error_reporting' directive. It's helpful to have 'display_errors' on during debugging phases, but best to have it off in production environments.<br /><br />Related functions: <a href="http://php.net/ini_set" rel="nofollow" target="_blank">http://php.net/ini_set</a> | <a href="http://php.net/error_reporting" rel="nofollow" target="_blank">http://php.net/error_reporting</a> | <a href="http://php.net/error_log" rel="nofollow" target="_blank">http://php.net/error_log</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=faq.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="faq.php">FAQ</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="faq.general.php" title="General Information">General Information</a>
                        </li>
                                                <li class="">
                            <a href="faq.mailinglist.php" title="Mailing lists">Mailing lists</a>
                        </li>
                                                <li class="">
                            <a href="faq.obtaining.php" title="Obtaining PHP">Obtaining PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.databases.php" title="Database issues">Database issues</a>
                        </li>
                                                <li class="current">
                            <a href="faq.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="faq.build.php" title="Build Problems">Build Problems</a>
                        </li>
                                                <li class="">
                            <a href="faq.using.php" title="Using PHP">Using PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.passwords.php" title="Password Hashing">Password Hashing</a>
                        </li>
                                                <li class="">
                            <a href="faq.html.php" title="PHP and HTML">PHP and HTML</a>
                        </li>
                                                <li class="">
                            <a href="faq.com.php" title="PHP and COM">PHP and COM</a>
                        </li>
                                                <li class="">
                            <a href="faq.misc.php" title="Miscellaneous Questions">Miscellaneous Questions</a>
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
