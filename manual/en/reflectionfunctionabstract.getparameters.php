<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ReflectionFunctionAbstract::getParameters - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.reflectionfunctionabstract.php">
 <link rel="prev" href="https://www.php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php">
 <link rel="next" href="https://www.php.net/manual/en/reflectionfunctionabstract.getreturntype.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reflectionfunctionabstract.getparameters.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reflectionfunctionabstract.getparameters.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reflectionfunctionabstract.getparameters.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reflectionfunctionabstract.getparameters.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reflectionfunctionabstract.getparameters.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getparameters.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reflectionfunctionabstract.getparameters.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reflectionfunctionabstract.getparameters.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reflectionfunctionabstract.getparameters.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reflectionfunctionabstract.getparameters.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets parameters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ReflectionFunctionAbstract::getParameters - Manual" />
<meta name="twitter:description" content="Gets parameters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ReflectionFunctionAbstract::getParameters - Manual" />
<meta itemprop="description" content="Gets parameters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets parameters" />

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
        <a href="reflectionfunctionabstract.getreturntype.php">
          ReflectionFunctionAbstract::getReturnType &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflectionfunctionabstract.getnumberofrequiredparameters.php">
          &laquo; ReflectionFunctionAbstract::getNumberOfRequiredParameters        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      <li><a href='class.reflectionfunctionabstract.php'>ReflectionFunctionAbstract</a></li>      </ul>
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
            <option value='en/reflectionfunctionabstract.getparameters.php' selected="selected">English</option>
            <option value='de/reflectionfunctionabstract.getparameters.php'>German</option>
            <option value='es/reflectionfunctionabstract.getparameters.php'>Spanish</option>
            <option value='fr/reflectionfunctionabstract.getparameters.php'>French</option>
            <option value='it/reflectionfunctionabstract.getparameters.php'>Italian</option>
            <option value='ja/reflectionfunctionabstract.getparameters.php'>Japanese</option>
            <option value='pt_BR/reflectionfunctionabstract.getparameters.php'>Brazilian Portuguese</option>
            <option value='ru/reflectionfunctionabstract.getparameters.php'>Russian</option>
            <option value='tr/reflectionfunctionabstract.getparameters.php'>Turkish</option>
            <option value='uk/reflectionfunctionabstract.getparameters.php'>Ukrainian</option>
            <option value='zh/reflectionfunctionabstract.getparameters.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reflectionfunctionabstract.getparameters" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ReflectionFunctionAbstract::getParameters</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ReflectionFunctionAbstract::getParameters</span> &mdash; <span class="dc-title">Gets parameters</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-reflectionfunctionabstract.getparameters-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ReflectionFunctionAbstract::getParameters</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Get the parameters as an array of <span class="type"><a href="class.reflectionparameter.php" class="type ReflectionParameter">ReflectionParameter</a></span>,
   in the order in which they are defined in the source.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-reflectionfunctionabstract.getparameters-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-reflectionfunctionabstract.getparameters-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The parameters, as a <span class="classname"><a href="class.reflectionparameter.php" class="classname">ReflectionParameter</a></span> object.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-reflectionfunctionabstract.getparameters-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="reflectionfunctionabstract.getnumberofparameters.php" class="methodname" rel="rdfs-seeAlso">ReflectionFunctionAbstract::getNumberOfParameters()</a> - Gets number of parameters</span></li>
    <li><span class="function"><a href="function.func-get-args.php" class="function" rel="rdfs-seeAlso">func_get_args()</a> - Returns an array comprising a function's argument list</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/reflection/reflectionfunctionabstract/getparameters.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freflectionfunctionabstract.getparameters%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reflectionfunctionabstract.getparameters&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118215">  <div class="votes">
    <div id="Vu118215">
    <a href="/manual/vote-note.php?id=118215&amp;page=reflectionfunctionabstract.getparameters&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118215">
    <a href="/manual/vote-note.php?id=118215&amp;page=reflectionfunctionabstract.getparameters&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118215" title="60% like this...">
    8
    </div>
  </div>
  <a href="#118215" class="name">
  <strong class="user"><em>dabidi at slupca dot pl</em></strong></a><a class="genanchor" href="#118215"> &para;</a><div class="date" title="2015-10-27 01:33"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118215">
<div class="phpcode"><code><span class="html">This is part of my private framework that uses reflection. <br />This function get arguments list from theme method and puts corresponding vars from $_REQUEST ($_GET, $_POST, and $_COOKIE)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public static function </span><span class="default">fire_theme_method</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">)<br />{<br />        </span><span class="default">$fire_args</span><span class="keyword">=array();<br />        <br />        </span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">() AS </span><span class="default">$arg</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$arg</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">])<br />        </span><span class="default">$fire_args</span><span class="keyword">[</span><span class="default">$arg</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]=</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$arg</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">];<br />        else<br />        </span><span class="default">$fire_args</span><span class="keyword">[</span><span class="default">$arg</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]=</span><span class="default">null</span><span class="keyword">;<br />    }<br />        <br />    return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$class</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">), </span><span class="default">$fire_args</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>For example, if my theme method needs only id, and we get this url:<br /><a href="http://example.com/my_class/my_method/?id=12&amp;some_unwanted_var=123" rel="nofollow" target="_blank">http://example.com/my_class/my_method/?id=12&amp;some_unwanted_var=123</a><br />will be ignored some_unwanted_var<br /><br />Of course behind this i have .htaccess, autoloader and controller</span></code></div>
  </div>
 </div>
  <div class="note" id="125551">  <div class="votes">
    <div id="Vu125551">
    <a href="/manual/vote-note.php?id=125551&amp;page=reflectionfunctionabstract.getparameters&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125551">
    <a href="/manual/vote-note.php?id=125551&amp;page=reflectionfunctionabstract.getparameters&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125551" title="100% like this...">
    4
    </div>
  </div>
  <a href="#125551" class="name">
  <strong class="user"><em>a dot lucassilvadeoliveira at gmail dot com</em></strong></a><a class="genanchor" href="#125551"> &para;</a><div class="date" title="2020-11-28 06:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125551">
<div class="phpcode"><code><span class="html">We can use this functionality to automatically pass arguments to our function based on some data structure.<br /><br />NOTE: I am using a php 8.0&gt; feature called "Nameds parameter".<br /><br /><span class="default">&lt;?php<br /><br />$valuesToProcess </span><span class="keyword">= [<br />  </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Anderson Lucas Silva de Oliveira'</span><span class="keyword">,<br />  </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">21</span><span class="keyword">,<br />  </span><span class="string">'hobbie' </span><span class="keyword">=&gt; </span><span class="string">'Play games'<br /></span><span class="keyword">];<br /><br />function </span><span class="default">processUserData</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$age</span><span class="keyword">, </span><span class="default">$job </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$hobbie </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">)<br />{<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"Hello </span><span class="default">$name</span><span class="string">. You have </span><span class="default">$age</span><span class="string"> years old"</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$job</span><span class="keyword">)) {<br />    </span><span class="default">$msg </span><span class="keyword">.= </span><span class="string">". Your job is </span><span class="default">$job</span><span class="string">"</span><span class="keyword">;<br />    }<br /><br />    if (!empty(</span><span class="default">$hobbie</span><span class="keyword">)) {<br />        </span><span class="default">$msg </span><span class="keyword">.= </span><span class="string">". Your hobbie is </span><span class="default">$hobbie</span><span class="string">"</span><span class="keyword">;<br />    }<br /><br />    echo </span><span class="default">$msg </span><span class="keyword">. </span><span class="string">"."</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$refFunction </span><span class="keyword">= new </span><span class="default">ReflectionFunction</span><span class="keyword">(</span><span class="string">'processUserData'</span><span class="keyword">);<br /></span><span class="default">$parameters </span><span class="keyword">= </span><span class="default">$refFunction</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">();<br /><br /></span><span class="default">$validParameters </span><span class="keyword">= [];<br />foreach (</span><span class="default">$parameters </span><span class="keyword">as </span><span class="default">$parameter</span><span class="keyword">) {<br />    if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(), </span><span class="default">$valuesToProcess</span><span class="keyword">) &amp;&amp; !</span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">isOptional</span><span class="keyword">()) {<br />        throw new </span><span class="default">DomainException</span><span class="keyword">(</span><span class="string">'Cannot resolve the parameter' </span><span class="keyword">. </span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">());<br />    }<br /><br />    if(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(), </span><span class="default">$valuesToProcess</span><span class="keyword">)) {<br />        continue;<br />    }<br /><br />    </span><span class="default">$validParameters</span><span class="keyword">[</span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">()] = </span><span class="default">$valuesToProcess</span><span class="keyword">[</span><span class="default">$parameter</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">()];<br />}<br /><br /></span><span class="default">$refFunction</span><span class="keyword">-&gt;</span><span class="default">invoke</span><span class="keyword">(...</span><span class="default">$validParameters</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Results in:<br /><br />Hello Anderson Lucas Silva de Oliveira. You have 21 years old. Your hobbie is Play games.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reflectionfunctionabstract.getparameters&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reflectionfunctionabstract.getparameters.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.reflectionfunctionabstract.php">ReflectionFunctionAbstract</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reflectionfunctionabstract.clone.php" title="_&#8203;_&#8203;clone">_&#8203;_&#8203;clone</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getattributes.php" title="getAttributes">getAttributes</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getclosurecalledclass.php" title="getClosureCalledClass">getClosureCalledClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getclosurescopeclass.php" title="getClosureScopeClass">getClosureScopeClass</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getclosurethis.php" title="getClosureThis">getClosureThis</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getclosureusedvariables.php" title="getClosureUsedVariables">getClosureUsedVariables</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getdoccomment.php" title="getDocComment">getDocComment</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getendline.php" title="getEndLine">getEndLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getextension.php" title="getExtension">getExtension</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getextensionname.php" title="getExtensionName">getExtensionName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getfilename.php" title="getFileName">getFileName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getnamespacename.php" title="getNamespaceName">getNamespaceName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getnumberofparameters.php" title="getNumberOfParameters">getNumberOfParameters</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getnumberofrequiredparameters.php" title="getNumberOfRequiredParameters">getNumberOfRequiredParameters</a>
                        </li>
                                                <li class="current">
                            <a href="reflectionfunctionabstract.getparameters.php" title="getParameters">getParameters</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getreturntype.php" title="getReturnType">getReturnType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getshortname.php" title="getShortName">getShortName</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getstartline.php" title="getStartLine">getStartLine</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.getstaticvariables.php" title="getStaticVariables">getStaticVariables</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.gettentativereturntype.php" title="getTentativeReturnType">getTentativeReturnType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.hasreturntype.php" title="hasReturnType">hasReturnType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.hastentativereturntype.php" title="hasTentativeReturnType">hasTentativeReturnType</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.innamespace.php" title="inNamespace">inNamespace</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isclosure.php" title="isClosure">isClosure</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isdeprecated.php" title="isDeprecated">isDeprecated</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isgenerator.php" title="isGenerator">isGenerator</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isinternal.php" title="isInternal">isInternal</a>
                        </li>
                                                <li class="">
                            <a href="reflectiofunctionabstract.isstatic.php" title="isStatic">isStatic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isuserdefined.php" title="isUserDefined">isUserDefined</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.isvariadic.php" title="isVariadic">isVariadic</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.returnsreference.php" title="returnsReference">returnsReference</a>
                        </li>
                                                <li class="">
                            <a href="reflectionfunctionabstract.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
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
