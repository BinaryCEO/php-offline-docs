<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Obtaining PHP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.obtaining.php">
 <link rel="shorturl" href="https://www.php.net/obtaining">
 <link rel="alternate" href="https://www.php.net/obtaining" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.mailinglist.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.databases.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.obtaining.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.obtaining.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.obtaining.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.obtaining.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.obtaining.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.obtaining.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.obtaining.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.obtaining.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.obtaining.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.obtaining.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.obtaining.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Obtaining PHP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Obtaining PHP - Manual" />
<meta name="twitter:description" content="Obtaining PHP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Obtaining PHP - Manual" />
<meta itemprop="description" content="Obtaining PHP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Obtaining PHP" />

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
        <a href="faq.databases.php">
          Database issues &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.mailinglist.php">
          &laquo; Mailing lists        </a>
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
            <option value='en/faq.obtaining.php' selected="selected">English</option>
            <option value='de/faq.obtaining.php'>German</option>
            <option value='es/faq.obtaining.php'>Spanish</option>
            <option value='fr/faq.obtaining.php'>French</option>
            <option value='it/faq.obtaining.php'>Italian</option>
            <option value='ja/faq.obtaining.php'>Japanese</option>
            <option value='pt_BR/faq.obtaining.php'>Brazilian Portuguese</option>
            <option value='ru/faq.obtaining.php'>Russian</option>
            <option value='tr/faq.obtaining.php'>Turkish</option>
            <option value='uk/faq.obtaining.php'>Ukrainian</option>
            <option value='zh/faq.obtaining.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.obtaining" class="chapter">
 <h1 class="title">Obtaining PHP</h1>

  

   <p class="para">
    This section has details about PHP download locations, and
    OS issues.
   </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.obtaining.where">
     Where can I obtain PHP?
    </a></li><li><a href="#faq.obtaining.precompiled">
     Are pre-compiled binary versions available?
    </a></li><li><a href="#faq.obtaining.optional">
     
      Where can I get libraries needed to compile some of
      the optional PHP extensions?
     
    </a></li><li><a href="#faq.obtaining.how">
     How do I get these libraries to work?
    </a></li><li><a href="#faq.obtaining.compilent">
     
      I got the latest version of the PHP source code from the Git
      repository on my Windows machine, what do I need to compile it?
     
    </a></li><li><a href="#faq.obtaining.browscap">
     Where do I find the Browser Capabilities File?
    </a></li><li><a href="#faq.obtaining.threadsafety">
     What does thread safety mean when downloading PHP?
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.obtaining.where">
    <dt><strong>
     Where can I obtain PHP?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You can download PHP from any of the members of the
      PHP network of sites. These can be found at 
      <a href="https://www.php.net/" class="link external">&raquo;&nbsp;https://www.php.net/</a>.
      You can also use anonymous Git to get the absolute latest
      version of the source. For more information, go to 
      <a href="https://www.php.net/git.php" class="link external">&raquo;&nbsp;https://www.php.net/git.php</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.obtaining.precompiled">
    <dt><strong>
     Are pre-compiled binary versions available?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      We only distribute precompiled binaries for Windows systems,
      as we are not able to compile PHP for every major Linux/Unix
      platform with every extension combination. Also note, that
      many Linux distributions come with PHP built in these days.
      Windows binaries can be downloaded from our <a href="https://www.php.net/downloads.php" class="link external">&raquo;&nbsp;Downloads</a> page, for Linux
      binaries, please visit your distribution&#039;s website.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.obtaining.optional">
    <dt><strong>
     
      Where can I get libraries needed to compile some of
      the optional PHP extensions?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Those marked with a * are to the best of our knowledge not thread safe; they are not recommended for use in a multi-threaded environment.
       </span>
      </p></blockquote>
     </p>
     <p class="para">
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         <a href="https://www.openldap.org/software/download/" class="link external">&raquo;&nbsp;LDAP (Unix)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="https://wiki.mozilla.org/LDAP_C_SDK" class="link external">&raquo;&nbsp;LDAP (Unix/Win)</a> : 
         Mozilla Directory (LDAP) SDK
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.bind9.net/download-openldap/" class="link external">&raquo;&nbsp;free LDAP server</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.sleepycat.com/" class="link external">&raquo;&nbsp;Berkeley DB2 (Unix/Win)</a> :
         http://www.sleepycat.com/.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.net-snmp.org/" class="link external">&raquo;&nbsp;SNMP* (Unix): </a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.libgd.org/" class="link external">&raquo;&nbsp;GD (Unix/Win)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="https://hughestech.com.au/products/msql/" class="link external">&raquo;&nbsp;mSQL* (Unix)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.postgresql.org/" class="link external">&raquo;&nbsp;PostgreSQL (Unix)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="https://github.com/uw-imap/imap" class="link external">&raquo;&nbsp;IMAP* (Win/Unix)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.sybase.com/" class="link external">&raquo;&nbsp;Sybase-CT* (Linux, libc5)</a> : 
         Available locally.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.freetype.org/" class="link external">&raquo;&nbsp;FreeType (libttf):</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.zlib.net/" class="link external">&raquo;&nbsp;ZLib (Unix/Win32)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="https://libexpat.github.io/" class="link external">&raquo;&nbsp;expat XML parser (Unix/Win32)</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.pdflib.com/products/pdflib-family/" class="link external">&raquo;&nbsp;PDFLib</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://mcrypt.sourceforge.net/" class="link external">&raquo;&nbsp;mcrypt</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://mhash.sourceforge.net/" class="link external">&raquo;&nbsp;mhash</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.ibiblio.org/pub/Linux/libs/graphics/" class="link external">&raquo;&nbsp;t1lib</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://dmalloc.com/" class="link external">&raquo;&nbsp;dmalloc</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://aspell.net/" class="link external">&raquo;&nbsp;aspell</a>.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <a href="http://www.thrysoee.dk/editline/" class="link external">&raquo;&nbsp;libedit</a>.
        </span>
       </li>
      </ul>
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.obtaining.how">
    <dt><strong>
     How do I get these libraries to work?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You will need to follow instructions provided with the library. Some of
      these libraries are detected automatically when you run the &#039;configure&#039;
      script of PHP (such as the GD library), and others you will have to
      enable using &#039;<code class="literal">--with-EXTENSION</code>&#039; options to 
      &#039;<code class="literal">configure</code>&#039;. Run 
      &#039;<code class="literal">configure --help</code>&#039; for a listing of these.     
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.obtaining.compilent">
    <dt><strong>
     
      I got the latest version of the PHP source code from the Git
      repository on my Windows machine, what do I need to compile it?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      See the PHP Wiki for the latest instructions: <a href="https://wiki.php.net/internals/windows/stepbystepbuild_sdk_2" class="link external">&raquo;&nbsp;Step by Step Build Instructions</a>
      
    </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.obtaining.browscap">
    <dt><strong>
     Where do I find the Browser Capabilities File?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You can find a <var class="filename">browscap.ini</var> file at 
      <a href="http://browscap.org/" class="link external">&raquo;&nbsp;http://browscap.org/</a>.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.obtaining.threadsafety">
    <dt><strong>
     What does thread safety mean when downloading PHP?
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Thread Safety means that binary can work in a multithreaded webserver 
      context, such as Apache 2 on Windows. Thread Safety works by creating 
      a local storage copy in each thread, so that the data won&#039;t collide 
      with another thread.
     </p>
     <p class="para">
      So what do I choose? If you choose to run PHP as a CGI binary, then 
      you won&#039;t need thread safety, because the binary is invoked at each 
      request. For multithreaded webservers, such as IIS5 and IIS6, you should 
      use the threaded version of PHP.
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
        <a href="https://github.com/php/doc-en/blob/master/faq/obtaining.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.obtaining%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.obtaining&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.obtaining.php">＋<small>add a note</small></a></span>
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
                                                <li class="current">
                            <a href="faq.obtaining.php" title="Obtaining PHP">Obtaining PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.databases.php" title="Database issues">Database issues</a>
                        </li>
                                                <li class="">
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
