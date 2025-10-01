<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Yaf_Exception_LoadFailed_Controller - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-controller.php">
 <link rel="shorturl" href="https://www.php.net/yaf-exception-loadfailed-controller">
 <link rel="alternate" href="https://www.php.net/yaf-exception-loadfailed-controller" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.yaf.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-module.php">
 <link rel="next" href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-action.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-controller.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.yaf-exception-loadfailed-controller.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.yaf-exception-loadfailed-controller.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.yaf-exception-loadfailed-controller.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.yaf-exception-loadfailed-controller.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.yaf-exception-loadfailed-controller.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.yaf-exception-loadfailed-controller.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.yaf-exception-loadfailed-controller.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.yaf-exception-loadfailed-controller.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.yaf-exception-loadfailed-controller.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.yaf-exception-loadfailed-controller.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Yaf_Exception_LoadFailed_Controller class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Yaf_Exception_LoadFailed_Controller - Manual" />
<meta name="twitter:description" content="The Yaf_Exception_LoadFailed_Controller class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Yaf_Exception_LoadFailed_Controller - Manual" />
<meta itemprop="description" content="The Yaf_Exception_LoadFailed_Controller class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Yaf_Exception_LoadFailed_Controller class" />

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
        <a href="class.yaf-exception-loadfailed-action.php">
          Yaf_Exception_LoadFailed_Action &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.yaf-exception-loadfailed-module.php">
          &laquo; Yaf_Exception_LoadFailed_Module        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.yaf.php'>Yaf</a></li>      </ul>
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
            <option value='en/class.yaf-exception-loadfailed-controller.php' selected="selected">English</option>
            <option value='de/class.yaf-exception-loadfailed-controller.php'>German</option>
            <option value='es/class.yaf-exception-loadfailed-controller.php'>Spanish</option>
            <option value='fr/class.yaf-exception-loadfailed-controller.php'>French</option>
            <option value='it/class.yaf-exception-loadfailed-controller.php'>Italian</option>
            <option value='ja/class.yaf-exception-loadfailed-controller.php'>Japanese</option>
            <option value='pt_BR/class.yaf-exception-loadfailed-controller.php'>Brazilian Portuguese</option>
            <option value='ru/class.yaf-exception-loadfailed-controller.php'>Russian</option>
            <option value='tr/class.yaf-exception-loadfailed-controller.php'>Turkish</option>
            <option value='uk/class.yaf-exception-loadfailed-controller.php'>Ukrainian</option>
            <option value='zh/class.yaf-exception-loadfailed-controller.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.yaf-exception-loadfailed-controller" class="reference">

 <h1 class="title">The Yaf_Exception_LoadFailed_Controller class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-exception-loadfailed-controller.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-exception-loadfailed-controller.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Yaf_Exception_LoadFailed_Controller</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.yaf-exception-loadfailed.php" class="classname">Yaf_Exception_LoadFailed</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-exception.getprevious.php" class="methodname">Yaf_Exception::getPrevious</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


   }</div>

  </div>

  



 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaf/yaf-exception-loadfailed-controller.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.yaf-exception-loadfailed-controller%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.yaf-exception-loadfailed-controller&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.yaf-exception-loadfailed-controller.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.yaf.php">Yaf</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.yaf.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="yaf.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="yaf.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="yaf.tutorials.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="yaf.appconfig.php" title="Application Configuration">Application Configuration</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-application.php" title="Yaf_&#8203;Application">Yaf_&#8203;Application</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-bootstrap-abstract.php" title="Yaf_&#8203;Bootstrap_&#8203;Abstract">Yaf_&#8203;Bootstrap_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-dispatcher.php" title="Yaf_&#8203;Dispatcher">Yaf_&#8203;Dispatcher</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-config-abstract.php" title="Yaf_&#8203;Config_&#8203;Abstract">Yaf_&#8203;Config_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-config-ini.php" title="Yaf_&#8203;Config_&#8203;Ini">Yaf_&#8203;Config_&#8203;Ini</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-config-simple.php" title="Yaf_&#8203;Config_&#8203;Simple">Yaf_&#8203;Config_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-controller-abstract.php" title="Yaf_&#8203;Controller_&#8203;Abstract">Yaf_&#8203;Controller_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-action-abstract.php" title="Yaf_&#8203;Action_&#8203;Abstract">Yaf_&#8203;Action_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-view-interface.php" title="Yaf_&#8203;View_&#8203;Interface">Yaf_&#8203;View_&#8203;Interface</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-view-simple.php" title="Yaf_&#8203;View_&#8203;Simple">Yaf_&#8203;View_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-loader.php" title="Yaf_&#8203;Loader">Yaf_&#8203;Loader</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-plugin-abstract.php" title="Yaf_&#8203;Plugin_&#8203;Abstract">Yaf_&#8203;Plugin_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-registry.php" title="Yaf_&#8203;Registry">Yaf_&#8203;Registry</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-abstract.php" title="Yaf_&#8203;Request_&#8203;Abstract">Yaf_&#8203;Request_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-http.php" title="Yaf_&#8203;Request_&#8203;Http">Yaf_&#8203;Request_&#8203;Http</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-request-simple.php" title="Yaf_&#8203;Request_&#8203;Simple">Yaf_&#8203;Request_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-response-abstract.php" title="Yaf_&#8203;Response_&#8203;Abstract">Yaf_&#8203;Response_&#8203;Abstract</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-interface.php" title="Yaf_&#8203;Route_&#8203;Interface">Yaf_&#8203;Route_&#8203;Interface</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-map.php" title="Yaf_&#8203;Route_&#8203;Map">Yaf_&#8203;Route_&#8203;Map</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-regex.php" title="Yaf_&#8203;Route_&#8203;Regex">Yaf_&#8203;Route_&#8203;Regex</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-rewrite.php" title="Yaf_&#8203;Route_&#8203;Rewrite">Yaf_&#8203;Route_&#8203;Rewrite</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-router.php" title="Yaf_&#8203;Router">Yaf_&#8203;Router</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-simple.php" title="Yaf_&#8203;Route_&#8203;Simple">Yaf_&#8203;Route_&#8203;Simple</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-static.php" title="Yaf_&#8203;Route_&#8203;Static">Yaf_&#8203;Route_&#8203;Static</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-route-supervar.php" title="Yaf_&#8203;Route_&#8203;Supervar">Yaf_&#8203;Route_&#8203;Supervar</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-session.php" title="Yaf_&#8203;Session">Yaf_&#8203;Session</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception.php" title="Yaf_&#8203;Exception">Yaf_&#8203;Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-typeerror.php" title="Yaf_&#8203;Exception_&#8203;TypeError">Yaf_&#8203;Exception_&#8203;TypeError</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-startuperror.php" title="Yaf_&#8203;Exception_&#8203;StartupError">Yaf_&#8203;Exception_&#8203;StartupError</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-dispatchfailed.php" title="Yaf_&#8203;Exception_&#8203;DispatchFailed">Yaf_&#8203;Exception_&#8203;DispatchFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-routerfailed.php" title="Yaf_&#8203;Exception_&#8203;RouterFailed">Yaf_&#8203;Exception_&#8203;RouterFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed">Yaf_&#8203;Exception_&#8203;LoadFailed</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-module.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Module">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Module</a>
                        </li>
                                                <li class="current">
                            <a href="class.yaf-exception-loadfailed-controller.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Controller">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Controller</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-action.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Action">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;Action</a>
                        </li>
                                                <li class="">
                            <a href="class.yaf-exception-loadfailed-view.php" title="Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;View">Yaf_&#8203;Exception_&#8203;LoadFailed_&#8203;View</a>
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
