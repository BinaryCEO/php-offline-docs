<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Language Reference - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/langref.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/langref.php">
 <link rel="alternate" href="https://www.php.net/manual/en/langref.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/index.php">
 <link rel="prev" href="https://www.php.net/manual/en/configuration.changes.php">
 <link rel="next" href="https://www.php.net/manual/en/language.basic-syntax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/langref.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/langref.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/langref.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/langref.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/langref.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/langref.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/langref.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/langref.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/langref.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/langref.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/langref.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Language Reference" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Language Reference - Manual" />
<meta name="twitter:description" content="Language Reference" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Language Reference - Manual" />
<meta itemprop="description" content="Language Reference" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Language Reference" />

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
        <a href="language.basic-syntax.php">
          Basic syntax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="configuration.changes.php">
          &laquo; How to change configuration settings        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      </ul>
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
            <option value='en/langref.php' selected="selected">English</option>
            <option value='de/langref.php'>German</option>
            <option value='es/langref.php'>Spanish</option>
            <option value='fr/langref.php'>French</option>
            <option value='it/langref.php'>Italian</option>
            <option value='ja/langref.php'>Japanese</option>
            <option value='pt_BR/langref.php'>Brazilian Portuguese</option>
            <option value='ru/langref.php'>Russian</option>
            <option value='tr/langref.php'>Turkish</option>
            <option value='uk/langref.php'>Ukrainian</option>
            <option value='zh/langref.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="langref" class="book">
  <h1 class="title">Language Reference</h1>
  

 



  




  

 
 


  

 
 


  

 
 


  




  





  

 



  

 
 


  





  
 



  


 


  


 


  

 


  





  

 



  

 
 


  



 

 

  







  







  



  



 



  






 <ul class="chunklist chunklist_book"><li><a href="language.basic-syntax.php">Basic syntax</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.basic-syntax.phptags.php">PHP tags</a></li><li><a href="language.basic-syntax.phpmode.php">Escaping from HTML</a></li><li><a href="language.basic-syntax.instruction-separation.php">Instruction separation</a></li><li><a href="language.basic-syntax.comments.php">Comments</a></li></ul></li><li><a href="language.types.php">Types</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.types.intro.php">Introduction</a></li><li><a href="language.types.type-system.php">Type System</a></li><li><a href="language.types.null.php">NULL</a></li><li><a href="language.types.boolean.php">Booleans</a></li><li><a href="language.types.integer.php">Integers</a></li><li><a href="language.types.float.php">Floating point numbers</a></li><li><a href="language.types.string.php">Strings</a></li><li><a href="language.types.numeric-strings.php">Numeric strings</a></li><li><a href="language.types.array.php">Arrays</a></li><li><a href="language.types.object.php">Objects</a></li><li><a href="language.types.enumerations.php">Enumerations</a></li><li><a href="language.types.resource.php">Resources</a></li><li><a href="language.types.callable.php">Callbacks / Callables</a></li><li><a href="language.types.mixed.php">Mixed</a></li><li><a href="language.types.void.php">Void</a></li><li><a href="language.types.never.php">Never</a></li><li><a href="language.types.relative-class-types.php">Relative class types</a></li><li><a href="language.types.singleton.php">Singleton types</a></li><li><a href="language.types.iterable.php">Iterables</a></li><li><a href="language.types.declarations.php">Type declarations</a></li><li><a href="language.types.type-juggling.php">Type Juggling</a></li></ul></li><li><a href="language.variables.php">Variables</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.variables.basics.php">Basics</a></li><li><a href="language.variables.predefined.php">Predefined Variables</a></li><li><a href="language.variables.scope.php">Variable scope</a></li><li><a href="language.variables.variable.php">Variable variables</a></li><li><a href="language.variables.external.php">Variables From External Sources</a></li></ul></li><li><a href="language.constants.php">Constants</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.constants.syntax.php">Syntax</a></li><li><a href="language.constants.predefined.php">Predefined constants</a></li><li><a href="language.constants.magic.php">Magic constants</a></li></ul></li><li><a href="language.expressions.php">Expressions</a></li><li><a href="language.operators.php">Operators</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.operators.precedence.php">Operator Precedence</a></li><li><a href="language.operators.arithmetic.php">Arithmetic</a> — Arithmetic Operators</li><li><a href="language.operators.increment.php">Increment and Decrement</a> — Incrementing/Decrementing Operators</li><li><a href="language.operators.assignment.php">Assignment</a> — Assignment Operators</li><li><a href="language.operators.bitwise.php">Bitwise</a> — Bitwise Operators</li><li><a href="language.operators.comparison.php">Comparison</a> — Comparison Operators</li><li><a href="language.operators.errorcontrol.php">Error Control</a> — Error Control Operators</li><li><a href="language.operators.execution.php">Execution</a> — Execution Operators</li><li><a href="language.operators.logical.php">Logic</a> — Logical Operators</li><li><a href="language.operators.string.php">String</a> — String Operators</li><li><a href="language.operators.array.php">Array</a> — Array Operators</li><li><a href="language.operators.type.php">Type</a> — Type Operators</li></ul></li><li><a href="language.control-structures.php">Control Structures</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="control-structures.intro.php">Introduction</a></li><li><a href="control-structures.if.php">if</a></li><li><a href="control-structures.else.php">else</a></li><li><a href="control-structures.elseif.php">elseif/else if</a></li><li><a href="control-structures.alternative-syntax.php">Alternative syntax for control structures</a></li><li><a href="control-structures.while.php">while</a></li><li><a href="control-structures.do.while.php">do-while</a></li><li><a href="control-structures.for.php">for</a></li><li><a href="control-structures.foreach.php">foreach</a></li><li><a href="control-structures.break.php">break</a></li><li><a href="control-structures.continue.php">continue</a></li><li><a href="control-structures.switch.php">switch</a></li><li><a href="control-structures.match.php">match</a></li><li><a href="control-structures.declare.php">declare</a></li><li><a href="function.return.php">return</a></li><li><a href="function.require.php">require</a></li><li><a href="function.include.php">include</a></li><li><a href="function.require-once.php">require_once</a></li><li><a href="function.include-once.php">include_once</a></li><li><a href="control-structures.goto.php">goto</a></li></ul></li><li><a href="language.functions.php">Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="functions.user-defined.php">User-defined functions</a></li><li><a href="functions.arguments.php">Function parameters and arguments</a></li><li><a href="functions.returning-values.php">Returning values</a></li><li><a href="functions.variable-functions.php">Variable functions</a></li><li><a href="functions.internal.php">Internal (built-in) functions</a></li><li><a href="functions.anonymous.php">Anonymous functions</a></li><li><a href="functions.arrow.php">Arrow Functions</a></li><li><a href="functions.first_class_callable_syntax.php">First class callable syntax</a></li></ul></li><li><a href="language.oop5.php">Classes and Objects</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="oop5.intro.php">Introduction</a></li><li><a href="language.oop5.basic.php">The Basics</a></li><li><a href="language.oop5.properties.php">Properties</a></li><li><a href="language.oop5.property-hooks.php">Property Hooks</a></li><li><a href="language.oop5.constants.php">Class Constants</a></li><li><a href="language.oop5.autoload.php">Autoloading Classes</a></li><li><a href="language.oop5.decon.php">Constructors and Destructors</a></li><li><a href="language.oop5.visibility.php">Visibility</a></li><li><a href="language.oop5.inheritance.php">Object Inheritance</a></li><li><a href="language.oop5.paamayim-nekudotayim.php">Scope Resolution Operator (::)</a></li><li><a href="language.oop5.static.php">Static Keyword</a></li><li><a href="language.oop5.abstract.php">Class Abstraction</a></li><li><a href="language.oop5.interfaces.php">Object Interfaces</a></li><li><a href="language.oop5.traits.php">Traits</a></li><li><a href="language.oop5.anonymous.php">Anonymous classes</a></li><li><a href="language.oop5.overloading.php">Overloading</a></li><li><a href="language.oop5.iterations.php">Object Iteration</a></li><li><a href="language.oop5.magic.php">Magic Methods</a></li><li><a href="language.oop5.final.php">Final Keyword</a></li><li><a href="language.oop5.cloning.php">Object Cloning</a></li><li><a href="language.oop5.object-comparison.php">Comparing Objects</a></li><li><a href="language.oop5.late-static-bindings.php">Late Static Bindings</a></li><li><a href="language.oop5.references.php">Objects and references</a></li><li><a href="language.oop5.serialization.php">Object Serialization</a> — Serializing objects - objects in sessions</li><li><a href="language.oop5.variance.php">Covariance and Contravariance</a></li><li><a href="language.oop5.lazy-objects.php">Lazy Objects</a></li><li><a href="language.oop5.changelog.php">OOP Changelog</a></li></ul></li><li><a href="language.namespaces.php">Namespaces</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.namespaces.rationale.php">Overview</a> — Namespaces overview</li><li><a href="language.namespaces.definition.php">Namespaces</a> — Defining namespaces</li><li><a href="language.namespaces.nested.php">Sub-namespaces</a> — Declaring sub-namespaces</li><li><a href="language.namespaces.definitionmultiple.php">Defining multiple namespaces in the same file</a></li><li><a href="language.namespaces.basics.php">Basics</a> — Using namespaces: Basics</li><li><a href="language.namespaces.dynamic.php">Namespaces and dynamic language features</a></li><li><a href="language.namespaces.nsconstants.php">namespace keyword and __NAMESPACE__</a> — The namespace keyword and __NAMESPACE__ magic constant</li><li><a href="language.namespaces.importing.php">Aliasing and Importing</a> — Using namespaces: Aliasing/Importing</li><li><a href="language.namespaces.global.php">Global space</a></li><li><a href="language.namespaces.fallback.php">Fallback to global space</a> — Using namespaces: fallback to the global space for functions and constants</li><li><a href="language.namespaces.rules.php">Name resolution rules</a></li><li><a href="language.namespaces.faq.php">FAQ</a> — FAQ: things you need to know about namespaces</li></ul></li><li><a href="language.enumerations.php">Enumerations</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.enumerations.overview.php">Enumerations overview</a></li><li><a href="language.enumerations.basics.php">Basic enumerations</a></li><li><a href="language.enumerations.backed.php">Backed enumerations</a></li><li><a href="language.enumerations.methods.php">Enumeration methods</a></li><li><a href="language.enumerations.static-methods.php">Enumeration static methods</a></li><li><a href="language.enumerations.constants.php">Enumeration constants</a></li><li><a href="language.enumerations.traits.php">Traits</a></li><li><a href="language.enumerations.expressions.php">Enum values in constant expressions</a></li><li><a href="language.enumerations.object-differences.php">Differences from objects</a></li><li><a href="language.enumerations.listing.php">Value listing</a></li><li><a href="language.enumerations.serialization.php">Serialization</a></li><li><a href="language.enumerations.object-differences.inheritance.php">Why enums aren't extendable</a></li><li><a href="language.enumerations.examples.php">Examples</a></li></ul></li><li><a href="language.errors.php">Errors</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.errors.basics.php">Basics</a></li><li><a href="language.errors.php7.php">Errors in PHP 7</a></li></ul></li><li><a href="language.exceptions.php">Exceptions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.exceptions.extending.php">Extending Exceptions</a></li></ul></li><li><a href="language.fibers.php">Fibers</a></li><li><a href="language.generators.php">Generators</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.generators.overview.php">Generators overview</a></li><li><a href="language.generators.syntax.php">Generator syntax</a></li><li><a href="language.generators.comparison.php">Comparing generators with Iterator objects</a></li></ul></li><li><a href="language.attributes.php">Attributes</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.attributes.overview.php">Attributes overview</a></li><li><a href="language.attributes.syntax.php">Attribute syntax</a></li><li><a href="language.attributes.reflection.php">Reading Attributes with the Reflection API</a></li><li><a href="language.attributes.classes.php">Declaring Attribute Classes</a></li></ul></li><li><a href="language.references.php">References Explained</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.references.whatare.php">What References Are</a></li><li><a href="language.references.whatdo.php">What References Do</a></li><li><a href="language.references.arent.php">What References Are Not</a></li><li><a href="language.references.pass.php">Passing by Reference</a></li><li><a href="language.references.return.php">Returning References</a></li><li><a href="language.references.unset.php">Unsetting References</a></li><li><a href="language.references.spot.php">Spotting References</a></li></ul></li><li><a href="reserved.variables.php">Predefined Variables</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="language.variables.superglobals.php">Superglobals</a> — Built-in variables that are always available in all scopes</li><li><a href="reserved.variables.globals.php">$GLOBALS</a> — References all variables available in global scope</li><li><a href="reserved.variables.server.php">$_SERVER</a> — Server and execution environment information</li><li><a href="reserved.variables.get.php">$_GET</a> — HTTP GET variables</li><li><a href="reserved.variables.post.php">$_POST</a> — HTTP POST variables</li><li><a href="reserved.variables.files.php">$_FILES</a> — HTTP File Upload variables</li><li><a href="reserved.variables.request.php">$_REQUEST</a> — HTTP Request variables</li><li><a href="reserved.variables.session.php">$_SESSION</a> — Session variables</li><li><a href="reserved.variables.environment.php">$_ENV</a> — Environment variables</li><li><a href="reserved.variables.cookies.php">$_COOKIE</a> — HTTP Cookies</li><li><a href="reserved.variables.phperrormsg.php">$php_errormsg</a> — The previous error message</li><li><a href="reserved.variables.httpresponseheader.php">$http_response_header</a> — HTTP response headers</li><li><a href="reserved.variables.argc.php">$argc</a> — The number of arguments passed to script</li><li><a href="reserved.variables.argv.php">$argv</a> — Array of arguments passed to script</li></ul></li><li><a href="reserved.exceptions.php">Predefined Exceptions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.exception.php">Exception</a></li><li><a href="class.errorexception.php">ErrorException</a></li><li><a href="class.closedgeneratorexception.php">ClosedGeneratorException</a> — The ClosedGeneratorException class</li><li><a href="class.error.php">Error</a></li><li><a href="class.argumentcounterror.php">ArgumentCountError</a></li><li><a href="class.arithmeticerror.php">ArithmeticError</a></li><li><a href="class.assertionerror.php">AssertionError</a></li><li><a href="class.divisionbyzeroerror.php">DivisionByZeroError</a></li><li><a href="class.compileerror.php">CompileError</a></li><li><a href="class.parseerror.php">ParseError</a></li><li><a href="class.typeerror.php">TypeError</a></li><li><a href="class.valueerror.php">ValueError</a></li><li><a href="class.unhandledmatcherror.php">UnhandledMatchError</a></li><li><a href="class.fibererror.php">FiberError</a></li><li><a href="class.requestparsebodyexception.php">RequestParseBodyException</a></li></ul></li><li><a href="reserved.interfaces.php">Predefined Interfaces and Classes</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.traversable.php">Traversable</a> — The Traversable interface</li><li><a href="class.iterator.php">Iterator</a> — The Iterator interface</li><li><a href="class.iteratoraggregate.php">IteratorAggregate</a> — The IteratorAggregate interface</li><li><a href="class.internaliterator.php">InternalIterator</a> — The InternalIterator class</li><li><a href="class.throwable.php">Throwable</a></li><li><a href="class.countable.php">Countable</a> — The Countable interface</li><li><a href="class.arrayaccess.php">ArrayAccess</a> — The ArrayAccess interface</li><li><a href="class.serializable.php">Serializable</a> — The Serializable interface</li><li><a href="class.closure.php">Closure</a> — The Closure class</li><li><a href="class.stdclass.php">stdClass</a> — The stdClass class</li><li><a href="class.generator.php">Generator</a> — The Generator class</li><li><a href="class.fiber.php">Fiber</a> — The Fiber class</li><li><a href="class.weakreference.php">WeakReference</a> — The WeakReference class</li><li><a href="class.weakmap.php">WeakMap</a> — The WeakMap class</li><li><a href="class.stringable.php">Stringable</a> — The Stringable interface</li><li><a href="class.unitenum.php">UnitEnum</a> — The UnitEnum interface</li><li><a href="class.backedenum.php">BackedEnum</a> — The BackedEnum interface</li><li><a href="class.sensitiveparametervalue.php">SensitiveParameterValue</a> — The SensitiveParameterValue class</li><li><a href="class.php-incomplete-class.php">__PHP_Incomplete_Class</a> — The __PHP_Incomplete_Class class</li></ul></li><li><a href="reserved.attributes.php">Predefined Attributes</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.attribute.php">Attribute</a> — The Attribute attribute</li><li><a href="class.allowdynamicproperties.php">AllowDynamicProperties</a> — The AllowDynamicProperties attribute</li><li><a href="class.deprecated.php">Deprecated</a> — The Deprecated attribute</li><li><a href="class.override.php">Override</a> — The Override attribute</li><li><a href="class.returntypewillchange.php">ReturnTypeWillChange</a> — The ReturnTypeWillChange attribute</li><li><a href="class.sensitiveparameter.php">SensitiveParameter</a> — The SensitiveParameter attribute</li></ul></li><li><a href="context.php">Context options and parameters</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="context.socket.php">Socket context options</a> — Socket context option listing</li><li><a href="context.http.php">HTTP context options</a> — HTTP context option listing</li><li><a href="context.ftp.php">FTP context options</a> — FTP context option listing</li><li><a href="context.ssl.php">SSL context options</a> — SSL context option listing</li><li><a href="context.phar.php">Phar context options</a> — Phar context option listing</li><li><a href="context.params.php">Context parameters</a> — Context parameter listing</li><li><a href="context.zip.php">Zip context options</a> — Zip context option listing</li><li><a href="context.zlib.php">Zlib context options</a> — Zlib context option listing</li></ul></li><li><a href="wrappers.php">Supported Protocols and Wrappers</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="wrappers.file.php">file://</a> — Accessing local filesystem</li><li><a href="wrappers.http.php">http://</a> — Accessing HTTP(s) URLs</li><li><a href="wrappers.ftp.php">ftp://</a> — Accessing FTP(s) URLs</li><li><a href="wrappers.php.php">php://</a> — Accessing various I/O streams</li><li><a href="wrappers.compression.php">zlib://</a> — Compression Streams</li><li><a href="wrappers.data.php">data://</a> — Data (RFC 2397)</li><li><a href="wrappers.glob.php">glob://</a> — Find pathnames matching pattern</li><li><a href="wrappers.phar.php">phar://</a> — PHP Archive</li><li><a href="wrappers.ssh2.php">ssh2://</a> — Secure Shell 2</li><li><a href="wrappers.rar.php">rar://</a> — RAR</li><li><a href="wrappers.audio.php">ogg://</a> — Audio streams</li><li><a href="wrappers.expect.php">expect://</a> — Process Interaction Streams</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flangref%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=langref&amp;repo=en&amp;redirect=https://www.php.net/manual/en/langref.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="index.php">PHP Manual</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="copyright.php" title="Copyright">Copyright</a>
                        </li>
                                                <li class="">
                            <a href="preface.php" title="Preface">Preface</a>
                        </li>
                                                <li class="">
                            <a href="getting-started.php" title="Getting Started">Getting Started</a>
                        </li>
                                                <li class="">
                            <a href="install.php" title="Installation and Configuration">Installation and Configuration</a>
                        </li>
                                                <li class="current">
                            <a href="langref.php" title="Language Reference">Language Reference</a>
                        </li>
                                                <li class="">
                            <a href="security.php" title="Security">Security</a>
                        </li>
                                                <li class="">
                            <a href="features.php" title="Features">Features</a>
                        </li>
                                                <li class="">
                            <a href="funcref.php" title="Function Reference">Function Reference</a>
                        </li>
                                                <li class="">
                            <a href="faq.php" title="FAQ">FAQ</a>
                        </li>
                                                <li class="">
                            <a href="appendices.php" title="Appendices">Appendices</a>
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
