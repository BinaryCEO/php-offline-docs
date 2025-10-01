<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PHP and COM - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.com.php">
 <link rel="shorturl" href="https://www.php.net/com">
 <link rel="alternate" href="https://www.php.net/com" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.html.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.misc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.com.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.com.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.com.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.com.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.com.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.com.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.com.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.com.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.com.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.com.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.com.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PHP and COM" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PHP and COM - Manual" />
<meta name="twitter:description" content="PHP and COM" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PHP and COM - Manual" />
<meta itemprop="description" content="PHP and COM" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PHP and COM" />

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
        <a href="faq.misc.php">
          Miscellaneous Questions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.html.php">
          &laquo; PHP and HTML        </a>
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
            <option value='en/faq.com.php' selected="selected">English</option>
            <option value='de/faq.com.php'>German</option>
            <option value='es/faq.com.php'>Spanish</option>
            <option value='fr/faq.com.php'>French</option>
            <option value='it/faq.com.php'>Italian</option>
            <option value='ja/faq.com.php'>Japanese</option>
            <option value='pt_BR/faq.com.php'>Brazilian Portuguese</option>
            <option value='ru/faq.com.php'>Russian</option>
            <option value='tr/faq.com.php'>Turkish</option>
            <option value='uk/faq.com.php'>Ukrainian</option>
            <option value='zh/faq.com.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.com" class="chapter">
  <h1 class="title">PHP and COM</h1>

  

   <p class="para">
    PHP can be used to access COM and DCOM objects on Win32 platforms.
   </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.com.q1">
     
      I have built a DLL to calculate something. Is there any way to run this DLL under PHP?
     
    </a></li><li><a href="#faq.com.q2">
     
      What does &#039;Unsupported variant type: xxxx (0xxxxx)&#039; mean?
     
    </a></li><li><a href="#faq.com.q3">
     
      Is it possible manipulate visual objects in PHP?
     
    </a></li><li><a href="#faq.com.q4">
     
      Can I store a COM object in a session?
     
    </a></li><li><a href="#faq.com.q5">
     
      How can I trap COM errors?
     
    </a></li><li><a href="#faq.com.q6">
     
      Can I generate DLL files from PHP scripts like I can in Perl?
     
    </a></li><li><a href="#faq.com.q7">
     
      What does &#039;Unable to obtain IDispatch interface for CLSID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}&#039; mean?
     
    </a></li><li><a href="#faq.com.q8">
     
      How can I run COM object from remote server?
     
    </a></li><li><a href="#faq.com.q9">
     
      I get &#039;DCOM is disabled in C:\path...\scriptname.php on line 6&#039;, what can I do?
     
    </a></li><li><a href="#faq.com.q10">
     
      Is it possible to load/manipulate an ActiveX object in a page with PHP?
     
    </a></li><li><a href="#faq.com.q11">
     
      Is it possible to get a running instance of a component?
     
    </a></li><li><a href="#faq.com.q12">
     
      Is there a way to handle an event sent from COM object?
     
    </a></li><li><a href="#faq.com.q13">
     
      I&#039;m having problems when trying to invoke a method of a COM object 
      which exposes more than one interface. What can I do?
     
    </a></li><li><a href="#faq.com.q14">
     
      So PHP works with COM, how about COM+?
     
    </a></li><li><a href="#faq.com.q15">
     
      If PHP can manipulate COM objects, can we imagine to use 
      MTS to manage components resources, in conjunction with PHP?
     
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.com.q1">
    <dt><strong>
     
      I have built a DLL to calculate something. Is there any way to run this DLL under PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      If this is a simple DLL there is no way yet to run it from PHP. If the DLL contains a COM
      server you may be able to access it if it implements the IDispatch interface.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q2">
    <dt><strong>
     
      What does &#039;Unsupported variant type: xxxx (0xxxxx)&#039; mean?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      There are dozens of VARIANT types and combinations of them. Most of them are already supported but
      a few still have to be implemented.
      Arrays are not completely supported. Only single dimensional indexed
      only arrays can be passed between PHP and COM.
      If you find other types that aren&#039;t supported, please report them as a bug (if not already reported)
      and provide as much information as available.
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.com.q3">
    <dt><strong>
     
      Is it possible manipulate visual objects in PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Generally it is, but as PHP is mostly used as a web scripting language it runs in the web servers context, thus
      visual objects will never appear on the servers desktop.
      If you use PHP for application scripting e.g. in conjunction with PHP-GTK there is no limitation in accessing and
      manipulating visual objects through COM.
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.com.q4">
    <dt><strong>
     
      Can I store a COM object in a session?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      No, you can&#039;t. COM instances are treated as resources and therefore they are only available in a single script&#039;s context.
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.com.q5">
    <dt><strong>
     
      How can I trap COM errors?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The COM extension throws <code class="literal">com_exception</code>
      exceptions, which you can catch and then inspect the <code class="literal">code</code>
      member to determine what to do next.
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.com.q6">
    <dt><strong>
     
      Can I generate DLL files from PHP scripts like I can in Perl?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      No, unfortunately there is no such tool available for PHP.
     </p>
    </dd>
   </dl>
  
   <dl class="qandaentry" id="faq.com.q7">
    <dt><strong>
     
      What does &#039;Unable to obtain IDispatch interface for CLSID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}&#039; mean?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This error can have multiple reasons:
      <ul class="itemizedlist">
       <li class="listitem">
         <span class="simpara">
         the CLSID is wrong
         </span>
        </li>
       <li class="listitem">
         <span class="simpara">
         the requested DLL is missing
         </span>
        </li>
       <li class="listitem">
         <span class="simpara">
         the requested component doesn&#039;t implement the IDispatch interface
         </span>
        </li>
       </ul>
     </p>
    </dd>
   </dl>
    
   <dl class="qandaentry" id="faq.com.q8">
    <dt><strong>
     
      How can I run COM object from remote server?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Exactly like you run local objects. You only have to pass the IP of the remote machine as second parameter to
      the COM constructor.
     </p>
     <p class="para">
      Make sure that you have set
      <a href="com.configuration.php#ini.com.allow-dcom" class="link">com.allow_dcom</a><code class="literal">=</code><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
      in your <var class="filename">php.ini</var>.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q9">
    <dt><strong>
     
      I get &#039;DCOM is disabled in C:\path...\scriptname.php on line 6&#039;, what can I do?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Edit your <var class="filename">php.ini</var> and set
      <a href="com.configuration.php#ini.com.allow-dcom" class="link">com.allow_dcom</a><code class="literal">=</code><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q10">
    <dt><strong>
     
      Is it possible to load/manipulate an ActiveX object in a page with PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This has nothing to do with PHP. ActiveX objects are loaded on client side if they are requested
      by the HTML document. There is no relation to the PHP script and therefore there is no direct
      server side interaction possible.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.com.q11">
    <dt><strong>
     
      Is it possible to get a running instance of a component?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      This is possible with the help of monikers. If you want to get multiple references to the same word instance
      you can create that instance like shown:
     </p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$word </span><span style="color: #007700">= new </span><span style="color: #0000BB">COM</span><span style="color: #007700">(</span><span style="color: #DD0000">"C:\docs\word.doc"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">
      This will create a new instance if there is no running instance available or it will return a handle to the
      running instance, if available.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.com.q12">
    <dt><strong>
     
      Is there a way to handle an event sent from COM object?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You can define an event sink and bind it using
      <span class="function"><a href="function.com-event-sink.php" class="function">com_event_sink()</a></span>.  You can use
      <span class="function"><a href="function.com-print-typeinfo.php" class="function">com_print_typeinfo()</a></span> to have PHP generate a skeleton
      for the event sink class.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q13">
    <dt><strong>
     
      I&#039;m having problems when trying to invoke a method of a COM object 
      which exposes more than one interface. What can I do?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The answer is as simple as unsatisfying. We don&#039;t know exactly but we think you can do nothing.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q14">
    <dt><strong>
     
      So PHP works with COM, how about COM+?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      COM+ extends COM by a framework for managing components through MTS and MSMQ but there is nothing special that
      PHP has to support to use such components.
     </p>
    </dd>
   </dl>
   
   <dl class="qandaentry" id="faq.com.q15">
    <dt><strong>
     
      If PHP can manipulate COM objects, can we imagine to use 
      MTS to manage components resources, in conjunction with PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      PHP itself doesn&#039;t handle transactions yet. Thus if an error 
      occurs no rollback is initiated. If you use components that
      support transactions you will have to implement the 
      transaction management yourself.
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
        <a href="https://github.com/php/doc-en/blob/master/faq/com.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.com%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.com&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.com.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54844">  <div class="votes">
    <div id="Vu54844">
    <a href="/manual/vote-note.php?id=54844&amp;page=faq.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54844">
    <a href="/manual/vote-note.php?id=54844&amp;page=faq.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54844" title="72% like this...">
    17
    </div>
  </div>
  <a href="#54844" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#54844"> &para;</a><div class="date" title="2005-07-17 04:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54844">
<div class="phpcode"><code><span class="html">Re: The Windows English CHM Sample with MS Word Automation.<br /><br />I see that $Word-&gt;Release() is called after $Word-&gt;Quit().<br />This seems to be erroneous. Actually, $Word-&gt;Release() should not have to be called if proper COM garbage collection is taking place. Release() is a C++ construction not used in either Visual Basic or VBScript or even MS-JScript. Just to be sure, however, I ran the sample through php.exe (5.04 CLI on Windows XP SP1 with Office 2003) and got a RPC failed error on the line containing $Word-&gt;Release(). The rest of the sample works fine, and the results are as expected. So, I propose 2 scenarios:<br />      1.There is a problem with the documentation (more likely).<br />      2.There is a problem with PHP504 itself, as this problem is reproduced with any COM Automation call, not just Word.</span></code></div>
  </div>
 </div>
  <div class="note" id="46281">  <div class="votes">
    <div id="Vu46281">
    <a href="/manual/vote-note.php?id=46281&amp;page=faq.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46281">
    <a href="/manual/vote-note.php?id=46281&amp;page=faq.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46281" title="71% like this...">
    14
    </div>
  </div>
  <a href="#46281" class="name">
  <strong class="user"><em>junk.ghost@virgin dOtt net</em></strong></a><a class="genanchor" href="#46281"> &para;</a><div class="date" title="2004-10-05 09:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46281">
<div class="phpcode"><code><span class="html">It may be obvious to everyone else but...<br /><br />If you want to write your own COM DLL in MSVC++6 and you want to pass it a string, you need the following in your .idl file:<br /><br />HRESULT function_name([in] BSTR parameter_name,<br />                      [retval, out] BSTR * retval);<br /><br />retval is the result of your function as a string to be passed back.<br /><br />BSTR is an unsigned short *, so if you want to use your string with STL string etc. you may need to convert parameters to and from char *.<br /><br />The burden of my message is that from PHP<br /><br />$comThing = new COM("comThing.comThing");<br />print $comThing-&gt;function_name("Jeremy");<br /><br />Jeremy will be marshalled as wide chars, which match BSTR.</span></code></div>
  </div>
 </div>
  <div class="note" id="72641">  <div class="votes">
    <div id="Vu72641">
    <a href="/manual/vote-note.php?id=72641&amp;page=faq.com&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72641">
    <a href="/manual/vote-note.php?id=72641&amp;page=faq.com&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72641" title="62% like this...">
    9
    </div>
  </div>
  <a href="#72641" class="name">
  <strong class="user"><em>codeslinger at compsalot dot com</em></strong></a><a class="genanchor" href="#72641"> &para;</a><div class="date" title="2007-01-27 05:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72641">
<div class="phpcode"><code><span class="html">in response to item #1 above:  "If this is a simple DLL there is no way yet to run it from PHP."<br /><br />Answer: There are several different packages/add-ons to php that enable low level access to the windows api. One of the most popular of these packages is available at <a href="http://www.winbinder.org" rel="nofollow" target="_blank">http://www.winbinder.org</a><br /><br />Winbinder does have the ability to load a dll and call it's functions.  Winbinder also provides a large set of windows apis for creating windows and controls.  This is useful for creating stand-alone desktop apps.  It is a possible alternative to php-gtk.<br /><br />I've had mixed results with Winbinder, some things work very well, others are buggy; source code is available.  It's worth a look, Evaluate carefully.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=faq.com&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.com.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
