<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Build Problems - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.build.php">
 <link rel="shorturl" href="https://www.php.net/build">
 <link rel="alternate" href="https://www.php.net/build" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.using.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.build.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.build.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.build.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.build.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.build.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.build.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.build.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.build.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.build.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.build.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.build.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Build Problems" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Build Problems - Manual" />
<meta name="twitter:description" content="Build Problems" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Build Problems - Manual" />
<meta itemprop="description" content="Build Problems" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Build Problems" />

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
        <a href="faq.using.php">
          Using PHP &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.installation.php">
          &laquo; Installation        </a>
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
            <option value='en/faq.build.php' selected="selected">English</option>
            <option value='de/faq.build.php'>German</option>
            <option value='es/faq.build.php'>Spanish</option>
            <option value='fr/faq.build.php'>French</option>
            <option value='it/faq.build.php'>Italian</option>
            <option value='ja/faq.build.php'>Japanese</option>
            <option value='pt_BR/faq.build.php'>Brazilian Portuguese</option>
            <option value='ru/faq.build.php'>Russian</option>
            <option value='tr/faq.build.php'>Turkish</option>
            <option value='uk/faq.build.php'>Ukrainian</option>
            <option value='zh/faq.build.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.build" class="chapter">
  <h1 class="title">Build Problems</h1>

  

  <p class="para">
   This section gathers most common errors that occur at 
   build time.
  </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.build.configure">
     
      I got the latest version of PHP using the anonymous Git service, 
      but there&#039;s no configure script!
     
    </a></li><li><a href="#faq.build.configuring">
     
      I&#039;m having problems configuring PHP to work with Apache. 
      It says it can&#039;t find httpd.h, but it&#039;s right where I said it is!
     
    </a></li><li><a href="#faq.build.lex">
     
      While configuring PHP (./configure), you come across
      an error similar to the following:
     
     
      
       checking lex output file root... ./configure: lex: command not found
       configure: error: cannot find output from lex; giving up
      
     
    </a></li><li><a href="#faq.build.apache-sharedcore">
     
      When I try to start Apache, I get the following message:
     
     
      
       fatal: relocation error: file /path/to/libphp4.so:
       symbol ap_block_alarms: referenced symbol not found
      
     
    </a></li><li><a href="#faq.build.not-found">
     
      When I run configure, it says that it can&#039;t find the 
      include files or library for GD, gdbm, or some other package!
     
    </a></li><li><a href="#faq.build.yytname">
     
      When it is compiling the file language-parser.tab.c, it gives me errors 
      that say yytname undeclared.
     
    </a></li><li><a href="#faq.build.link">
     
      When I run make, it seems to run fine but then fails when it tries 
      to link the final application complaining that it can&#039;t find some files.
     
    </a></li><li><a href="#faq.build.undefined">
     
      When linking PHP, it complains about a number of undefined references.
     
    </a></li><li><a href="#faq.build.not-running">
     
      I have followed all the steps to install the Apache module version on 
      Unix, and my PHP scripts show up in my browser or I am being asked to 
      save the file.
     
    </a></li><li><a href="#faq.build.activate-module">
     
      It says to use: --activate-module=src/modules/php4/libphp4.a, 
      but  that file doesn&#039;t exist, so I changed it to 
      --activate-module=src/modules/php4/libmodphp4.a and it 
      doesn&#039;t work!? What&#039;s going on?
     
    </a></li><li><a href="#faq.build.ansi">
     
      When I try to build Apache with PHP as a static module using 
      --activate-module=src/modules/php4/libphp4.a 
      it tells me that my compiler is not ANSI compliant.
     
    </a></li><li><a href="#faq.build.apxs">
     
      When I try to build PHP using --with-apxs I get strange error messages.
     
    </a></li><li><a href="#faq.build.microtime">
     
      During make, I get errors in microtime, 
      and a lot of RUSAGE_ stuff.
     
    </a></li><li><a href="#faq.build.mysql.tempnam">
     
      When compiling PHP with MySQL, configure runs fine but during
      make I get an error similar to the following:
      ext/mysql/libmysqlclient/my_tempnam.o(.text+0x46): In function 
      my_tempnam&#039;: /php4/ext/mysql/libmysqlclient/my_tempnam.c:103: the 
      use of tempnam&#039; is dangerous, better use mkstemp&#039;, 
      what&#039;s wrong?
     
    </a></li><li><a href="#faq.build.upgrade">
     
      I want to upgrade my PHP. Where can I find the ./configure
      line that was used to build my current PHP installation?
     
    </a></li><li><a href="#faq.build.gdlibs">
     
      When building PHP with the GD library it either gives strange compile errors
      or segfaults on execution.
     
    </a></li><li><a href="#faq.installation.needgnu">
     
      When compiling PHP I seemingly get random errors, like it hangs.
      I&#039;m using Solaris if that matters.
     
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.build.configure">
    <dt><strong>
     
      I got the latest version of PHP using the anonymous Git service, 
      but there&#039;s no configure script!
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You have to have the GNU autoconf package installed so you can
      generate the configure script from <var class="filename">configure.in</var>. Just run
      <strong class="command">./buildconf</strong> in the top-level directory after getting
      the sources from the Git server. (Also, unless you run <strong class="command">configure</strong>
      with the <code class="literal">--enable-maintainer-mode</code> option, the
      configure script will not automatically get rebuilt when the
      <var class="filename">configure.in</var> file is updated, so you should make sure to do that
      manually when you notice <var class="filename">configure.in</var> has changed. One symptom
      of this is finding things like @VARIABLE@ in your Makefile after
      configure or <var class="filename">config.status</var> is run.)
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.configuring">
    <dt><strong>
     
      I&#039;m having problems configuring PHP to work with Apache. 
      It says it can&#039;t find <var class="filename">httpd.h</var>, but it&#039;s right where I said it is!
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You need to tell the configure/setup script the location of the
      top-level of your Apache source tree. This means that
      you want to specify <strong class="option configure">--with-apache=/path/to/apache</strong>
      and <em>not</em> <strong class="option configure">--with-apache=/path/to/apache/src</strong>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.lex">
    <dt><strong>
     
      While configuring PHP (<code class="literal">./configure</code>), you come across
      an error similar to the following:
     
     
      <div class="example-contents screen"><br />
       checking lex output file root... ./configure: lex: command not found<br />
       configure: error: cannot find output from lex; giving up<br />
      </div>
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Be sure to read the <a href="install.unix.php" class="link">installation</a>
      instructions carefully and note that you need both flex and bison
      installed to compile PHP.  Depending on your setup you will install 
      bison and flex from either source or a package, such as a RPM.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.apache-sharedcore">
    <dt><strong>
     
      When I try to start Apache, I get the following message:
     
     
      <div class="example-contents screen"><br />
       fatal: relocation error: file /path/to/libphp4.so:<br />
       symbol ap_block_alarms: referenced symbol not found<br />
      </div>
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This error usually comes up when one compiles the Apache
      core program as a DSO library for shared usage.  Try to
      reconfigure apache, making sure to use at least the
      following flags:
     </p>
     <p class="para">
      <div class="example-contents screen"><br />
      --enable-shared=max --enable-rule=SHARED_CORE<br />
      </div>
     </p>
     <p class="para">
      For more information, read the top-level Apache
      <var class="filename">INSTALL</var> file or the Apache
      <a href="http://httpd.apache.org/docs/current/dso.html" class="link external">&raquo;&nbsp;DSO manual page</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.not-found">
    <dt><strong>
     
      When I run configure, it says that it can&#039;t find the 
      include files or library for GD, gdbm, or some other package!
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You can make the configure script look for header files and libraries
      in non-standard locations by specifying additional flags to pass to
      the C preprocessor and linker, such as:
      <div class="example-contents">
<div class="cdata"><pre>
    CPPFLAGS=-I/path/to/include LDFLAGS=-L/path/to/library ./configure
</pre></div>
      </div>

      If you&#039;re using a csh-variant for your login shell (why?), it would be:
      <div class="example-contents">
<div class="cdata"><pre>
    env CPPFLAGS=-I/path/to/include LDFLAGS=-L/path/to/library ./configure
</pre></div>
      </div>

     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.yytname">
    <dt><strong>
     
      When it is compiling the file <var class="filename">language-parser.tab.c</var>, it gives me errors 
      that say <code class="literal">yytname undeclared</code>.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You need to update your version of Bison. You can find the latest version
      at <a href="http://www.gnu.org/software/bison/bison.html" class="link external">&raquo;&nbsp;http://www.gnu.org/software/bison/bison.html</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.link">
    <dt><strong>
     
      When I run <strong class="command">make</strong>, it seems to run fine but then fails when it tries 
      to link the final application complaining that it can&#039;t find some files.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Some old versions of make that don&#039;t correctly put the compiled
      versions of the files in the functions directory into that same
      directory. Try running <strong class="command">cp *.o functions</strong> and then
      re-running <strong class="command">make</strong> to see if that helps. If it does, you should really
      upgrade to a recent version of GNU make.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.undefined">
    <dt><strong>
     
      When linking PHP, it complains about a number of undefined references.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Take a look at the link line and make sure that all of the appropriate  
      libraries are being included at the end. Common ones that you might have
      missed are &#039;-ldl&#039; and any libraries required for any database support
      you included.
     </p>
     <p class="para">
      Some people have also reported that they had to add &#039;-ldl&#039; immediately
      following <var class="filename">libphp4.a</var> when linking with Apache.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.not-running">
    <dt><strong>
     
      I have followed all the steps to install the Apache module version on 
      Unix, and my PHP scripts show up in my browser or I am being asked to 
      save the file.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This means that the PHP module is not getting invoked for some reason.
      Three things to check before asking for further help:
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         Make sure that the httpd binary you are running is the actual 
         new httpd binary you just built.  To do this, try running: 
         <code class="literal">/path/to/binary/httpd -l</code>
        </span>
        <span class="simpara">
         If you don&#039;t see <var class="filename">mod_php4.c</var> listed then
         you are not running the right binary.  Find and install the
         correct binary.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Make sure you have added the correct Mime Type to one of your 
         <code class="literal">Apache .conf</code> files.  It should be: 
         <code class="literal">AddType application/x-httpd-php .php</code>
        </span>
        <span class="simpara"> 
         Also make sure that this AddType line is not hidden away inside a
         &lt;Virtualhost&gt; or &lt;Directory&gt; block which would
         prevent it from applying to the location of your test script.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Finally, the default location of the Apache configuration files 
         changed between Apache 1.2 and Apache 1.3.  You should check to 
         make sure that the configuration file you are adding the AddType 
         line to is actually being read. You can put an obvious syntax error
         into your <var class="filename">httpd.conf</var> file or some other obvious change that will 
         tell you if the file is being read correctly.
        </span>
       </li>
      </ul>
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.activate-module">
    <dt><strong>
     
      It says to use: <code class="literal">--activate-module=src/modules/php4/libphp4.a</code>, 
      but  that file doesn&#039;t exist, so I changed it to 
      <code class="literal">--activate-module=src/modules/php4/libmodphp4.a</code> and it 
      doesn&#039;t work!? What&#039;s going on?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Note that the <var class="filename">libphp4.a</var> file is not supposed to exist.  The
      apache process will create it!
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.ansi">
    <dt><strong>
     
      When I try to build Apache with PHP as a static module using 
      <code class="literal">--activate-module=src/modules/php4/libphp4.a</code> 
      it tells me that my compiler is not ANSI compliant.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This is a misleading error message from Apache that has been fixed
      in more recent versions.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.apxs">
    <dt><strong>
     
      When I try to build PHP using <strong class="option configure">--with-apxs</strong> I get strange error messages.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      There are three things to check here.  First, for some reason
      when Apache builds the apxs Perl script, it sometimes ends up
      getting built without the proper compiler and flags variables.
      Find your apxs script (try the command <strong class="command">which apxs</strong>), 
      it&#039;s sometimes found in <var class="filename">/usr/local/apache/bin/apxs</var>
      or <var class="filename">/usr/sbin/apxs</var>.
      Open it and check for lines similar to these:
      <div class="example-contents">
<div class="cdata"><pre>
my $CFG_CFLAGS_SHLIB  = &#039; &#039;;          # substituted via Makefile.tmpl
my $CFG_LD_SHLIB      = &#039; &#039;;          # substituted via Makefile.tmpl
my $CFG_LDFLAGS_SHLIB = &#039; &#039;;          # substituted via Makefile.tmpl
</pre></div>
      </div>

      If this is what you see, you have found your problem.  They may 
      contain just spaces or other incorrect values, such as &#039;q()&#039;.  Change 
      these lines to say:
      <div class="example-contents">
<div class="cdata"><pre>
my $CFG_CFLAGS_SHLIB  = &#039;-fpic -DSHARED_MODULE&#039;; # substituted via Makefile.tmpl
my $CFG_LD_SHLIB      = &#039;gcc&#039;;                   # substituted via Makefile.tmpl
my $CFG_LDFLAGS_SHLIB = q(-shared);              # substituted via Makefile.tmpl 
</pre></div>
      </div>

      The second possible problem should only be an issue on Red Hat 6.1
      and 6.2.  The apxs script Red Hat ships is broken.  Look for this line:
      <div class="example-contents">
<div class="cdata"><pre>
my $CFG_LIBEXECDIR    = &#039;modules&#039;;         # substituted via APACI install
</pre></div>
      </div>

      If you see the above line, change it to this:
      <div class="example-contents">
<div class="cdata"><pre>
my $CFG_LIBEXECDIR    = &#039;/usr/lib/apache&#039;; # substituted via APACI install
</pre></div>
      </div>

       Last, if you reconfigure/reinstall Apache, add a <strong class="command">make clean</strong> 
       to the process after <strong class="command">./configure</strong> and before <strong class="command">make</strong>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.build.microtime">
    <dt><strong>
     
      During <strong class="command">make</strong>, I get errors in microtime, 
      and a lot of <code class="literal">RUSAGE_</code> stuff.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      During the <strong class="command">make</strong> portion of installation, 
      if you encounter problems that look similar to this:
      <div class="example-contents">
<div class="cdata"><pre>
microtime.c: In function `php_if_getrusage&#039;:
microtime.c:94: storage size of `usg&#039; isn&#039;t known
microtime.c:97: `RUSAGE_SELF&#039; undeclared (first use in this function)
microtime.c:97: (Each undeclared identifier is reported only once
microtime.c:97: for each function it appears in.)
microtime.c:103: `RUSAGE_CHILDREN&#039; undeclared (first use in this function)
make[3]: *** [microtime.lo] Error 1
make[3]: Leaving directory `/home/master/php-4.0.1/ext/standard&#039;
make[2]: *** [all-recursive] Error 1
make[2]: Leaving directory `/home/master/php-4.0.1/ext/standard&#039;
make[1]: *** [all-recursive] Error 1
make[1]: Leaving directory `/home/master/php-4.0.1/ext&#039;
make: *** [all-recursive] Error 1
</pre></div>
      </div>

     </p>
     <p class="para">
      Your system is broken.  You need to fix your <var class="filename">/usr/include</var> files by
      installing a glibc-devel package that matches your glibc.  This has
      absolutely nothing to do with PHP.  To prove this to yourself, try this
      simple test:
     <div class="example-contents">
<div class="cdata"><pre>
$ cat &gt;test.c &lt;&lt;X
#include &lt;sys/resource.h&gt;
X
$ gcc -E test.c &gt;/dev/null
</pre></div>
      </div>

      If that spews out errors, you know your include files are messed up. 
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.build.mysql.tempnam">
    <dt><strong>
     
      When compiling PHP with MySQL, configure runs fine but during
      <code class="literal">make</code> I get an error similar to the following:
      <em>ext/mysql/libmysqlclient/my_tempnam.o(.text+0x46): In function 
      my_tempnam&#039;: /php4/ext/mysql/libmysqlclient/my_tempnam.c:103: the 
      use of tempnam&#039; is dangerous, better use mkstemp&#039;</em>, 
      what&#039;s wrong?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      First, it&#039;s important to realize that this is a <code class="literal">
      Warning</code> and not a fatal error.  Because this is
      often the last output seen during <code class="literal">make</code>,
      it may seem like a fatal error but it&#039;s not.  Of course, if
      you set your compiler to die on Warnings, it will.  Also
      keep in mind that MySQL support is enabled by default.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       As of PHP 4.3.2, you&#039;ll also see the following text after
       the build (make) completes:
      </p>
      <p class="para">
       <div class="example-contents screen"><br />
        Build complete.<br />
        (It is safe to ignore warnings about tempnam and tmpnam).<br />
       </div>
      </p>
     </p></blockquote>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.build.upgrade">
    <dt><strong>
     
      I want to upgrade my PHP. Where can I find the <strong class="command">./configure</strong>
      line that was used to build my current PHP installation?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Either you look at config.nice file, in the source tree of your current PHP
      installation or, if this is not available, you simply run a 
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      script. On top of the output the <strong class="command">./configure</strong> line, that was used
      to build this PHP installation is shown.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.build.gdlibs">
    <dt><strong>
     
      When building PHP with the GD library it either gives strange compile errors
      or segfaults on execution.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Make sure your GD library and PHP are linked against the same depending
      libraries (e.g. libpng).
     </p>
    </dd>
   </dl>   
   
   <dl class="qandaentry" id="faq.installation.needgnu">
    <dt><strong>
     
      When compiling PHP I seemingly get random errors, like it hangs.
      I&#039;m using Solaris if that matters.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Using non-GNU utilities while compiling PHP may cause problems.  Be
      sure to use GNU tools in order to be certain that compiling PHP will
      work.  For example, on Solaris, using either the SunOS BSD-compatible
      or Solaris versions of <code class="literal">sed</code> will not work, but using
      the GNU or Sun POSIX (xpg4) versions of <code class="literal">sed</code> will
      work.  Links: <a href="http://www.gnu.org/software/sed/sed.html" class="link external">&raquo;&nbsp;GNU sed</a>,
      <a href="http://www.gnu.org/software/flex/flex.html" class="link external">&raquo;&nbsp;GNU flex</a>, and
      <a href="http://www.gnu.org/software/bison/bison.html" class="link external">&raquo;&nbsp;GNU bison</a>.
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
        <a href="https://github.com/php/doc-en/blob/master/faq/build.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.build%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.build&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.build.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="faq.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
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
