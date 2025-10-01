<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of Keywords - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.keywords.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.keywords.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.keywords.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.classes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.keywords.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.keywords.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.keywords.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.keywords.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.keywords.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.keywords.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.keywords.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.keywords.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.keywords.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.keywords.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.keywords.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of Keywords" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of Keywords - Manual" />
<meta name="twitter:description" content="List of Keywords" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of Keywords - Manual" />
<meta itemprop="description" content="List of Keywords" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of Keywords" />

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
        <a href="reserved.classes.php">
          Predefined Classes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.php">
          &laquo; List of Reserved Words        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='reserved.php'>List of Reserved Words</a></li>      </ul>
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
            <option value='en/reserved.keywords.php' selected="selected">English</option>
            <option value='de/reserved.keywords.php'>German</option>
            <option value='es/reserved.keywords.php'>Spanish</option>
            <option value='fr/reserved.keywords.php'>French</option>
            <option value='it/reserved.keywords.php'>Italian</option>
            <option value='ja/reserved.keywords.php'>Japanese</option>
            <option value='pt_BR/reserved.keywords.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.keywords.php'>Russian</option>
            <option value='tr/reserved.keywords.php'>Turkish</option>
            <option value='uk/reserved.keywords.php'>Ukrainian</option>
            <option value='zh/reserved.keywords.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.keywords" class="sect1">
  <h2 class="title">List of Keywords</h2>
   <p class="simpara">
    These words have special meaning in PHP. Some of them represent things 
    which look like functions, some look like constants, and so on - but 
    they&#039;re not, really: they are language constructs.
    The following words cannot be used as constants, class names, or function names. 
    They are, however, allowed as property, constant, and
    method names of classes, interfaces and traits, except that
    <code class="literal">class</code> may not be used as constant name.
   </p>

   <table class="doctable table">
    <caption><strong>PHP Keywords</strong></caption>
    
     <tbody class="tbody">
      <tr>
       <td>
        <span class="function"><a href="function.halt-compiler.php" class="function">__halt_compiler()</a></span>
       </td>
       <td>
        <a href="language.oop5.abstract.php" class="link">abstract</a>
       </td>
       <td>
        <a href="language.operators.logical.php" class="link">and</a>
       </td>
       <td>
        <span class="function"><a href="function.array.php" class="function">array()</a></span>
       </td>
       <td>
        <a href="control-structures.foreach.php" class="link">as</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="control-structures.break.php" class="link">break</a>
       </td>
       <td>
        <a href="language.types.callable.php" class="link">callable</a>
       </td>
       <td>
        <a href="control-structures.switch.php" class="link">case</a>
       </td>
       <td>
        <a href="language.exceptions.php" class="link">catch</a>
       </td>
       <td>
        <a href="language.oop5.basic.php#language.oop5.basic.class" class="link">class</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.oop5.cloning.php" class="link">clone</a>
       </td>
       <td>
        <a href="language.oop5.constants.php" class="link">const</a>
       </td>
       <td>
        <a href="control-structures.continue.php" class="link">continue</a>
       </td>
       <td>
        <a href="control-structures.declare.php" class="link">declare</a>
       </td>
       <td>
        <a href="control-structures.switch.php" class="link">default</a>
       </td>
      </tr>

      <tr>
       <td>
        <span class="function"><a href="function.die.php" class="function">die()</a></span>
       </td>
       <td>
        <a href="control-structures.do.while.php" class="link">do</a>
       </td>
       <td>
        <span class="function"><a href="function.echo.php" class="function">echo</a></span>
       </td>
       <td>
        <a href="control-structures.else.php" class="link">else</a>
       </td>
       <td>
        <a href="control-structures.elseif.php" class="link">elseif</a>
       </td>
      </tr>

      <tr>
       <td>
        <span class="function"><a href="function.empty.php" class="function">empty()</a></span>
       </td>
       <td>
        <a href="control-structures.declare.php" class="link">enddeclare</a>
       </td>
       <td>
        <a href="control-structures.alternative-syntax.php" class="link">endfor</a>
       </td>
       <td>
        <a href="control-structures.alternative-syntax.php" class="link">endforeach</a>
       </td>
       <td>
        <a href="control-structures.alternative-syntax.php" class="link">endif</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="control-structures.alternative-syntax.php" class="link">endswitch</a>
       </td>
       <td>
        <a href="control-structures.alternative-syntax.php" class="link">endwhile</a>
       </td>
       <td>
        <span class="function"><a href="function.eval.php" class="function">eval()</a></span>
       </td>
       <td>
        <span class="function"><a href="function.exit.php" class="function">exit()</a></span>
       </td>
       <td>
        <a href="language.oop5.basic.php#language.oop5.basic.extends" class="link">extends</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.oop5.final.php" class="link">final</a>
       </td>
       <td>
        <a href="language.exceptions.php" class="link">finally</a>
       </td>
       <td>
        <a href="functions.arrow.php" class="link">fn</a> (as of PHP 7.4)
       </td>
       <td>
        <a href="control-structures.for.php" class="link">for</a>
       </td>
       <td>
        <a href="control-structures.foreach.php" class="link">foreach</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="functions.user-defined.php" class="link">function</a>
       </td>
       <td>
        <a href="language.variables.scope.php" class="link">global</a>
       </td>
       <td>
        <a href="control-structures.goto.php" class="link">goto</a>
       </td>
       <td>
        <a href="control-structures.if.php" class="link">if</a>
       </td>
       <td>
        <a href="language.oop5.interfaces.php" class="link">implements</a>
       </td>
      </tr>

      <tr>
       <td>
        <span class="function"><a href="function.include.php" class="function">include</a></span>
       </td>
       <td>
        <span class="function"><a href="function.include-once.php" class="function">include_once</a></span>
       </td>
       <td>
        <a href="language.operators.type.php" class="link">instanceof</a>
       </td>
       <td>
        <a href="language.oop5.traits.php#language.oop5.traits.conflict" class="link">insteadof</a>
       </td>
       <td>
        <a href="language.oop5.interfaces.php" class="link">interface</a>
       </td>
      </tr>

      <tr>
       <td>
        <span class="function"><a href="function.isset.php" class="function">isset()</a></span>
       </td>
       <td>
        <span class="function"><a href="function.list.php" class="function">list()</a></span>
       </td>
       <td>
        <a href="control-structures.match.php" class="link">match</a> (as of PHP 8.0)
       </td>
       <td>
        <a href="language.namespaces.php" class="link">namespace</a>
       </td>
       <td>
        <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.operators.logical.php" class="link">or</a>
       </td>
       <td>
        <span class="function"><a href="function.print.php" class="function">print</a></span>
       </td>
       <td>
        <a href="language.oop5.visibility.php" class="link">private</a>
       </td>
       <td>
        <a href="language.oop5.visibility.php" class="link">protected</a>
       </td>
       <td>
        <a href="language.oop5.visibility.php" class="link">public</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.oop5.properties.php#language.oop5.properties.readonly-properties" class="link">readonly</a> (as of PHP 8.1.0) *
       </td>
       <td>
        <span class="function"><a href="function.require.php" class="function">require</a></span>
       </td>
       <td>
        <span class="function"><a href="function.require-once.php" class="function">require_once</a></span>
       </td>
       <td>
        <span class="function"><a href="function.return.php" class="function">return</a></span>
       </td>
       <td>
        <a href="language.variables.scope.php" class="link">static</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="control-structures.switch.php" class="link">switch</a>
       </td>
       <td>
        <a href="language.exceptions.php" class="link">throw</a>
       </td>
       <td>
        <a href="language.oop5.traits.php" class="link">trait</a>
       </td>
       <td>
        <a href="language.exceptions.php" class="link">try</a>
       </td>
       <td>
        <span class="function"><a href="function.unset.php" class="function">unset()</a></span>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.namespaces.importing.php" class="link">use</a>
       </td>
       <td>
        <a href="language.oop5.properties.php" class="link">var</a>
       </td>
       <td>
        <a href="control-structures.while.php" class="link">while</a>
       </td>
       <td>
        <a href="language.operators.logical.php" class="link">xor</a>
       </td>
       <td>
        <a href="language.generators.php" class="link">yield</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.generators.syntax.php#control-structures.yield.from" class="link">yield from</a>
       </td>
       <td class="empty">&nbsp;</td>
       <td class="empty">&nbsp;</td>
       <td class="empty">&nbsp;</td>
       <td class="empty">&nbsp;</td>
      </tr>

     </tbody>
    
   </table>


   <p class="simpara">
    * <code class="literal">readonly</code> may be used as function name.
   </p>

   <table class="doctable table">
    <caption><strong>Compile-time constants</strong></caption>
    
     <tbody class="tbody">
      <tr>
       <td>
        <a href="language.constants.magic.php" class="link">__CLASS__</a>
       </td>
       <td> 
        <a href="language.constants.magic.php" class="link">__DIR__</a>
       </td>
       <td>
        <a href="language.constants.magic.php" class="link">__FILE__</a>
       </td>
       <td>
        <a href="language.constants.magic.php" class="link">__FUNCTION__</a>
       </td>
       <td>
        <a href="language.constants.magic.php" class="link">__LINE__</a>
       </td>
      </tr>

      <tr>
       <td>
        <a href="language.constants.magic.php" class="link">__METHOD__</a>
       </td>
       <td>
        <a href="language.constants.magic.php" class="link">__PROPERTY__</a>
       </td>
       <td>
        <a href="language.namespaces.nsconstants.php" class="link">__NAMESPACE__</a>
       </td>
       <td>
        <a href="language.constants.magic.php" class="link">__TRAIT__</a>
       </td>
       <td>
       </td>
       <td>
       </td>
       <td>
       </td>
       <td>
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/reserved.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.keywords%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.keywords&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.keywords.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111941">  <div class="votes">
    <div id="Vu111941">
    <a href="/manual/vote-note.php?id=111941&amp;page=reserved.keywords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111941">
    <a href="/manual/vote-note.php?id=111941&amp;page=reserved.keywords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111941" title="53% like this...">
    25
    </div>
  </div>
  <a href="#111941" class="name">
  <strong class="user"><em>martindilling at gmail dot com</em></strong></a><a class="genanchor" href="#111941"> &para;</a><div class="date" title="2013-04-15 10:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111941">
<div class="phpcode"><code><span class="html">RegEx to find all the keywords:<br /><br />\b(<br />(a(bstract|nd|rray|s))|<br />(c(a(llable|se|tch)|l(ass|one)|on(st|tinue)))|<br />(d(e(clare|fault)|ie|o))|<br />(e(cho|lse(if)?|mpty|nd(declare|for(each)?|if|switch|while)|val|x(it|tends)))|<br />(f(inal|or(each)?|unction))|<br />(g(lobal|oto))|<br />(i(f|mplements|n(clude(_once)?|st(anceof|eadof)|terface)|sset))|<br />(n(amespace|ew))|<br />(p(r(i(nt|vate)|otected)|ublic))|<br />(re(quire(_once)?|turn))|<br />(s(tatic|witch))|<br />(t(hrow|r(ait|y)))|<br />(u(nset|se))|<br />(__halt_compiler|break|list|(x)?or|var|while)<br />)\b</span></code></div>
  </div>
 </div>
  <div class="note" id="119738">  <div class="votes">
    <div id="Vu119738">
    <a href="/manual/vote-note.php?id=119738&amp;page=reserved.keywords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119738">
    <a href="/manual/vote-note.php?id=119738&amp;page=reserved.keywords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119738" title="54% like this...">
    18
    </div>
  </div>
  <a href="#119738" class="name">
  <strong class="user"><em>Thomas Hansen</em></strong></a><a class="genanchor" href="#119738"> &para;</a><div class="date" title="2016-08-15 10:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119738">
<div class="phpcode"><code><span class="html">Please note that reserved words are still not allowed to be used as namespace or as part of it:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">MyNameSpace\List</span><span class="keyword">;<br /><br />class </span><span class="default">Test<br /></span><span class="keyword">{<br />}<br /></span><span class="default">?&gt;<br /></span><br />This will fail with a Parse error:  syntax error, unexpected 'List' (T_LIST), expecting identifier (T_STRING)</span></code></div>
  </div>
 </div>
  <div class="note" id="110244">  <div class="votes">
    <div id="Vu110244">
    <a href="/manual/vote-note.php?id=110244&amp;page=reserved.keywords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110244">
    <a href="/manual/vote-note.php?id=110244&amp;page=reserved.keywords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110244" title="51% like this...">
    11
    </div>
  </div>
  <a href="#110244" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#110244"> &para;</a><div class="date" title="2012-10-04 04:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110244">
<div class="phpcode"><code><span class="html">Here they are as arrays:<br /><br /><span class="default">&lt;?php<br />$keywords </span><span class="keyword">= array(</span><span class="string">'__halt_compiler'</span><span class="keyword">, </span><span class="string">'abstract'</span><span class="keyword">, </span><span class="string">'and'</span><span class="keyword">, </span><span class="string">'array'</span><span class="keyword">, </span><span class="string">'as'</span><span class="keyword">, </span><span class="string">'break'</span><span class="keyword">, </span><span class="string">'callable'</span><span class="keyword">, </span><span class="string">'case'</span><span class="keyword">, </span><span class="string">'catch'</span><span class="keyword">, </span><span class="string">'class'</span><span class="keyword">, </span><span class="string">'clone'</span><span class="keyword">, </span><span class="string">'const'</span><span class="keyword">, </span><span class="string">'continue'</span><span class="keyword">, </span><span class="string">'declare'</span><span class="keyword">, </span><span class="string">'default'</span><span class="keyword">, </span><span class="string">'die'</span><span class="keyword">, </span><span class="string">'do'</span><span class="keyword">, </span><span class="string">'echo'</span><span class="keyword">, </span><span class="string">'else'</span><span class="keyword">, </span><span class="string">'elseif'</span><span class="keyword">, </span><span class="string">'empty'</span><span class="keyword">, </span><span class="string">'enddeclare'</span><span class="keyword">, </span><span class="string">'endfor'</span><span class="keyword">, </span><span class="string">'endforeach'</span><span class="keyword">, </span><span class="string">'endif'</span><span class="keyword">, </span><span class="string">'endswitch'</span><span class="keyword">, </span><span class="string">'endwhile'</span><span class="keyword">, </span><span class="string">'eval'</span><span class="keyword">, </span><span class="string">'exit'</span><span class="keyword">, </span><span class="string">'extends'</span><span class="keyword">, </span><span class="string">'final'</span><span class="keyword">, </span><span class="string">'for'</span><span class="keyword">, </span><span class="string">'foreach'</span><span class="keyword">, </span><span class="string">'function'</span><span class="keyword">, </span><span class="string">'global'</span><span class="keyword">, </span><span class="string">'goto'</span><span class="keyword">, </span><span class="string">'if'</span><span class="keyword">, </span><span class="string">'implements'</span><span class="keyword">, </span><span class="string">'include'</span><span class="keyword">, </span><span class="string">'include_once'</span><span class="keyword">, </span><span class="string">'instanceof'</span><span class="keyword">, </span><span class="string">'insteadof'</span><span class="keyword">, </span><span class="string">'interface'</span><span class="keyword">, </span><span class="string">'isset'</span><span class="keyword">, </span><span class="string">'list'</span><span class="keyword">, </span><span class="string">'namespace'</span><span class="keyword">, </span><span class="string">'new'</span><span class="keyword">, </span><span class="string">'or'</span><span class="keyword">, </span><span class="string">'print'</span><span class="keyword">, </span><span class="string">'private'</span><span class="keyword">, </span><span class="string">'protected'</span><span class="keyword">, </span><span class="string">'public'</span><span class="keyword">, </span><span class="string">'require'</span><span class="keyword">, </span><span class="string">'require_once'</span><span class="keyword">, </span><span class="string">'return'</span><span class="keyword">, </span><span class="string">'static'</span><span class="keyword">, </span><span class="string">'switch'</span><span class="keyword">, </span><span class="string">'throw'</span><span class="keyword">, </span><span class="string">'trait'</span><span class="keyword">, </span><span class="string">'try'</span><span class="keyword">, </span><span class="string">'unset'</span><span class="keyword">, </span><span class="string">'use'</span><span class="keyword">, </span><span class="string">'var'</span><span class="keyword">, </span><span class="string">'while'</span><span class="keyword">, </span><span class="string">'xor'</span><span class="keyword">);<br /><br /></span><span class="default">$predefined_constants </span><span class="keyword">= array(</span><span class="string">'__CLASS__'</span><span class="keyword">, </span><span class="string">'__DIR__'</span><span class="keyword">, </span><span class="string">'__FILE__'</span><span class="keyword">, </span><span class="string">'__FUNCTION__'</span><span class="keyword">, </span><span class="string">'__LINE__'</span><span class="keyword">, </span><span class="string">'__METHOD__'</span><span class="keyword">, </span><span class="string">'__NAMESPACE__'</span><span class="keyword">, </span><span class="string">'__TRAIT__'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Along with get_defined_functions() and get_defined_constants(), this can be useful for checking eval() statements.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.keywords&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.keywords.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.php">List of Reserved Words</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="reserved.keywords.php" title="List of Keywords">List of Keywords</a>
                        </li>
                                                <li class="">
                            <a href="reserved.classes.php" title="Predefined Classes">Predefined Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="reserved.other-reserved-words.php" title="List of other reserved words">List of other reserved words</a>
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
