<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XSLTProcessor::setParameter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xsltprocessor.setparameter.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xsltprocessor.setparameter.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.setparameter.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.xsltprocessor.php">
 <link rel="prev" href="https://www.php.net/manual/en/xsltprocessor.removeparameter.php">
 <link rel="next" href="https://www.php.net/manual/en/xsltprocessor.setprofiling.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.setparameter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xsltprocessor.setparameter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xsltprocessor.setparameter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xsltprocessor.setparameter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xsltprocessor.setparameter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xsltprocessor.setparameter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xsltprocessor.setparameter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xsltprocessor.setparameter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xsltprocessor.setparameter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xsltprocessor.setparameter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xsltprocessor.setparameter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set value for a parameter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XSLTProcessor::setParameter - Manual" />
<meta name="twitter:description" content="Set value for a parameter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XSLTProcessor::setParameter - Manual" />
<meta itemprop="description" content="Set value for a parameter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set value for a parameter" />

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
        <a href="xsltprocessor.setprofiling.php">
          XSLTProcessor::setProfiling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xsltprocessor.removeparameter.php">
          &laquo; XSLTProcessor::removeParameter        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xsl.php'>XSL</a></li>      <li><a href='class.xsltprocessor.php'>XSLTProcessor</a></li>      </ul>
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
            <option value='en/xsltprocessor.setparameter.php' selected="selected">English</option>
            <option value='de/xsltprocessor.setparameter.php'>German</option>
            <option value='es/xsltprocessor.setparameter.php'>Spanish</option>
            <option value='fr/xsltprocessor.setparameter.php'>French</option>
            <option value='it/xsltprocessor.setparameter.php'>Italian</option>
            <option value='ja/xsltprocessor.setparameter.php'>Japanese</option>
            <option value='pt_BR/xsltprocessor.setparameter.php'>Brazilian Portuguese</option>
            <option value='ru/xsltprocessor.setparameter.php'>Russian</option>
            <option value='tr/xsltprocessor.setparameter.php'>Turkish</option>
            <option value='uk/xsltprocessor.setparameter.php'>Ukrainian</option>
            <option value='zh/xsltprocessor.setparameter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xsltprocessor.setparameter" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">XSLTProcessor::setParameter</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">XSLTProcessor::setParameter</span> &mdash; <span class="dc-title">Set value for a parameter</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-xsltprocessor.setparameter-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>XSLTProcessor::setParameter</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>XSLTProcessor::setParameter</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sets the value of one or more parameters to be used in subsequent 
   transformations with <span class="classname"><a href="class.xsltprocessor.php" class="classname">XSLTProcessor</a></span>. If the 
   parameter doesn&#039;t exist in the stylesheet it will be ignored.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-xsltprocessor.setparameter-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">namespace</code></dt>
     <dd>
      <p class="para">
       The namespace URI of the XSLT parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The local name of the XSLT parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The new value of the XSLT parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array of  <code class="literal">name =&gt; value</code> pairs.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-xsltprocessor.setparameter-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-xsltprocessor.setparameter-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if any of the arguments
   contain null bytes.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-xsltprocessor.setparameter-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.4.0</td>
      <td>
       Now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if any of the
       arguments contain null bytes instead of silently truncating.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       It is now possible to set a parameter value containing both single and
       double quotes. Prior to PHP 8.4.0, this resulted in a warning.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-xsltprocessor.setparameter-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5933">
    <p><strong>Example #1 Changing the owner before the transformation</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$collections </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'Marc Rutkowski' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'marc'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'Olivier Parmentier' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'olivier'<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$xsl </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$xsl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection.xsl'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Configure the transformer<br /></span><span style="color: #0000BB">$proc </span><span style="color: #007700">= new </span><span style="color: #0000BB">XSLTProcessor</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">importStyleSheet</span><span style="color: #007700">(</span><span style="color: #0000BB">$xsl</span><span style="color: #007700">); </span><span style="color: #FF8000">// attach the xsl rules<br /><br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$collections </span><span style="color: #007700">as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$file</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Load the XML source<br />    </span><span style="color: #0000BB">$xml </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection_' </span><span style="color: #007700">. </span><span style="color: #0000BB">$file </span><span style="color: #007700">. </span><span style="color: #DD0000">'.xml'</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'owner'</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transformToURI</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">, </span><span style="color: #DD0000">'file:///tmp/' </span><span style="color: #007700">. </span><span style="color: #0000BB">$file </span><span style="color: #007700">. </span><span style="color: #DD0000">'.html'</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-xsltprocessor.setparameter-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="xsltprocessor.getparameter.php" class="function" rel="rdfs-seeAlso">XSLTProcessor::getParameter()</a> - Get value of a parameter</span></li>
    <li><span class="function"><a href="xsltprocessor.removeparameter.php" class="function" rel="rdfs-seeAlso">XSLTProcessor::removeParameter()</a> - Remove parameter</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xsl/xsltprocessor/setparameter.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxsltprocessor.setparameter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xsltprocessor.setparameter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.setparameter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="81077">  <div class="votes">
    <div id="Vu81077">
    <a href="/manual/vote-note.php?id=81077&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81077">
    <a href="/manual/vote-note.php?id=81077&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81077" title="66% like this...">
    1
    </div>
  </div>
  <a href="#81077" class="name">
  <strong class="user"><em>Lennaert van der Linden</em></strong></a><a class="genanchor" href="#81077"> &para;</a><div class="date" title="2008-02-13 06:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81077">
<div class="phpcode"><code><span class="html">[EDIT by nielsdos: This is no longer true as of PHP 8.4.0]
<br />
<br />The parameter will not be set if the value contains both single and double quotes. Instead a warning will be shown when transforming the document:
<br />
<br />PHP Warning:  XSLTProcessor::transformToXml(): Cannot create XPath expression (string contains both quote and double-quotes)</span></code></div>
  </div>
 </div>
  <div class="note" id="89376">  <div class="votes">
    <div id="Vu89376">
    <a href="/manual/vote-note.php?id=89376&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89376">
    <a href="/manual/vote-note.php?id=89376&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89376" title="100% like this...">
    2
    </div>
  </div>
  <a href="#89376" class="name">
  <strong class="user"><em>richard at aggmedia dot net</em></strong></a><a class="genanchor" href="#89376"> &para;</a><div class="date" title="2009-03-04 07:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89376">
<div class="phpcode"><code><span class="html">Note that there is no way to remove a parameter from an XSLTProcessor unless you know its name, and there is no way (that I can find) to get a list of the current parameters.<br /><br />This means that you cannot reuse an XSLTProcessor with different parameters unless you call XSLTProcessor-&gt;removeParameter() on every parameter, and to do that you need to know the names of all the currently set parameters.<br /><br />I bumped into this because we were caching XSLTProcessors for reuse, and they were spitting out content based on phantom parameters (they were still there from previous uses).</span></code></div>
  </div>
 </div>
  <div class="note" id="75024">  <div class="votes">
    <div id="Vu75024">
    <a href="/manual/vote-note.php?id=75024&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75024">
    <a href="/manual/vote-note.php?id=75024&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75024" title="100% like this...">
    1
    </div>
  </div>
  <a href="#75024" class="name">
  <strong class="user"><em>brettz9</em></strong></a><a class="genanchor" href="#75024"> &para;</a><div class="date" title="2007-05-08 08:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75024">
<div class="phpcode"><code><span class="html">It seems heinemann's usage is not correct and does not achieve the intended result.<br /><br />This method's purpose is to change a global &lt;xsl:param&gt; value in the XSL stylesheet--not to change an attribute of any other element.  &lt;xsl:param&gt; basically lets you set up a stylesheet which can be customized (as from PHP) externally (without needing to tamper with the original XSL file).<br /><br />Here's an example of usage (that will work):<br /><br />Stylesheet:<br /><br />&lt;?xml version="1.0"?&gt;<br />&lt;xsl:stylesheet version="1.0" xmlns:xsl="<a href="http://www.w3.org/1999/XSL/Transform" rel="nofollow" target="_blank">http://www.w3.org/1999/XSL/Transform</a>"&gt;<br />    &lt;xsl:param name="print_something" select="defaultstring"/&gt;<br />    &lt;xsl:template match="/mydoc"&gt;<br />        &lt;p style="color:red;"&gt;Printed parameter: &lt;xsl:value-of select="$print_something"/&gt;&lt;/p&gt;<br />    &lt;/xsl:template&gt;<br />&lt;/xsl:stylesheet&gt;<br /><br />Script: <br /><br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$xsl </span><span class="keyword">= new </span><span class="default">XSLTProcessor</span><span class="keyword">;<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">setParameter</span><span class="keyword">( </span><span class="string">''</span><span class="keyword">, </span><span class="string">'print_something'</span><span class="keyword">, </span><span class="string">"Now I've overridden the default!"</span><span class="keyword">);<br /></span><span class="default">$style </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">( </span><span class="string">"./my_stylesheet.xslt" </span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$style</span><span class="keyword">);<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">importStyleSheet</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'&lt;mydoc&gt;&lt;/mydoc&gt;'</span><span class="keyword">);<br /><br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">transformToXML</span><span class="keyword">( </span><span class="default">$dom </span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">,<br />    </span><span class="default">htmlentities</span><span class="keyword">( </span><span class="default">$out</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'utf-8' </span><span class="keyword">),<br />    </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">getParameter</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'print_something'</span><span class="keyword">),<br /></span><span class="string">'&lt;/pre&gt;' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />gives:<br /><br />string(5) "<br /><br />"<br />string(143) "&lt;?xml version="1.0"?&gt;<br />&lt;p style="color:red;"&gt;Printed parameter: Now I've overridden the default!&lt;/p&gt;<br />"<br />string(32) "Now I've overridden the default!"<br />string(6) "<br /><br />" <br /><br />Notice that at present adding a namespace will not work. The only option at present is to set the first parameter for namespace to an empty string (though you can add the prefix with colon to the second argument for name in order to set the parameter for a namespace-prefixed parameter name).<br /><br />See <a href="http://bugs.php.net/bug.php?id=30622" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=30622</a></span></code></div>
  </div>
 </div>
  <div class="note" id="74864">  <div class="votes">
    <div id="Vu74864">
    <a href="/manual/vote-note.php?id=74864&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74864">
    <a href="/manual/vote-note.php?id=74864&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74864" title="no votes...">
    0
    </div>
  </div>
  <a href="#74864" class="name">
  <strong class="user"><em>OrionI</em></strong></a><a class="genanchor" href="#74864"> &para;</a><div class="date" title="2007-05-01 07:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74864">
<div class="phpcode"><code><span class="html">After looking at this a little further (see <a href="http://bugs.php.net/bug.php?id=41248" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=41248</a>), it appears that it's a shortcoming of libxslt, not PHP, that prevents passing in DOMDocuments or DOMNodes as parameters.</span></code></div>
  </div>
 </div>
  <div class="note" id="74857">  <div class="votes">
    <div id="Vu74857">
    <a href="/manual/vote-note.php?id=74857&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74857">
    <a href="/manual/vote-note.php?id=74857&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74857" title="no votes...">
    0
    </div>
  </div>
  <a href="#74857" class="name">
  <strong class="user"><em>Orion I</em></strong></a><a class="genanchor" href="#74857"> &para;</a><div class="date" title="2007-04-30 08:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74857">
<div class="phpcode"><code><span class="html">I've been trying to pass in a DOMDocument object as a parameter so I can stuff a bunch of data into XML nodes, but it appears that this function is not capable of it. I was hoping to get it to work like it does in the .NET 2.0 framework. (See <a href="http://msdn2.microsoft.com/en-us/library/" rel="nofollow" target="_blank">http://msdn2.microsoft.com/en-us/library/</a><br />system.xml.xsl.xsltargumentlist.addparam.aspx)<br />But after looking at the PHP 5.2.1 source code, /php-5.2.1/ext/xsl/xsltprocessor.c line 604-650, it appears that it's not possible to do so in PHP even though it appears that libxslt supports it (see <a href="http://xmlsoft.org/XSLT/html/libxslt-variables.html" rel="nofollow" target="_blank">http://xmlsoft.org/XSLT/html/libxslt-variables.html</a><br />#xsltParseGlobalParam)<br /><br />In fact, if the parameters aren't exactly what's expected, you'll always get a warning like this:<br /><br />Wrong parameter count for XSLTProcessor::setParameter()</span></code></div>
  </div>
 </div>
  <div class="note" id="62686">  <div class="votes">
    <div id="Vu62686">
    <a href="/manual/vote-note.php?id=62686&amp;page=xsltprocessor.setparameter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62686">
    <a href="/manual/vote-note.php?id=62686&amp;page=xsltprocessor.setparameter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62686" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#62686" class="name">
  <strong class="user"><em>heinemann dot juergen at hjcms dot de</em></strong></a><a class="genanchor" href="#62686"> &para;</a><div class="date" title="2006-03-07 03:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62686">
<div class="phpcode"><code><span class="html">Example for how it works.<br /><br />&lt;?xml version = '1.0' encoding = 'utf-8' ?&gt;<br />&lt;xsl:stylesheet version="1.0" xmlns:xsl="<a href="http://www.w3.org/1999/XSL/Transform" rel="nofollow" target="_blank">http://www.w3.org/1999/XSL/Transform</a>"&gt;<br />&lt;xsl:output method="xml" <br />    indent="yes"<br />    encoding="ISO-8859-15"<br />    doctype-system = "-//W3C//DTD XHTML 1.0 Transitional//EN" <br />    doctype-public = "<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd</a>"<br />/&gt;<br />&lt;xsl:template match="docs"&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />    &lt;title&gt;<br />        &lt;xsl:text&gt;Example&lt;/xsl:text&gt;<br />    &lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />    &lt;xsl:for-each select="block"&gt;<br />        &lt;div&gt;<br />            &lt;xsl:value-of select="." /&gt;<br />        &lt;/div&gt;<br />    &lt;/xsl:for-each&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br />&lt;/xsl:template&gt;<br />&lt;/xsl:stylesheet&gt;<br /><br />------------------<br /><br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">( </span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8' </span><span class="keyword">);<br /></span><span class="default">$xsl </span><span class="keyword">= new </span><span class="default">XSLTProcessor</span><span class="keyword">;<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">setParameter</span><span class="keyword">( </span><span class="string">'block'</span><span class="keyword">, </span><span class="string">'xmlns'</span><span class="keyword">, </span><span class="string">'<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>' </span><span class="keyword">);<br /><br /></span><span class="default">$style </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">( </span><span class="string">"./my_stylesheet.xslt" </span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">( </span><span class="default">$style </span><span class="keyword">);<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">importStyleSheet</span><span class="keyword">( </span><span class="default">$dom </span><span class="keyword">);<br /><br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">( </span><span class="string">'&lt;docs&gt;<br />    &lt;block&gt;Howto set xhtml Transitional Namespaces width php&lt;/block&gt;<br />    &lt;block&gt;see <a href="http://www.php.net&lt;/block&gt;" rel="nofollow" target="_blank">http://www.php.net&lt;/block&gt;</a><br />&lt;/docs&gt;' </span><span class="keyword">);<br /><br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">transformToXML</span><span class="keyword">( </span><span class="default">$dom </span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">, <br />    </span><span class="default">htmlentities</span><span class="keyword">( </span><span class="default">$out</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'utf-8' </span><span class="keyword">),<br />    </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">getParameter</span><span class="keyword">( </span><span class="string">'block'</span><span class="keyword">, </span><span class="string">'xmlns' </span><span class="keyword">),<br />    </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">getParameter</span><span class="keyword">( </span><span class="string">'docs'</span><span class="keyword">, </span><span class="string">'xmlns' </span><span class="keyword">),<br /></span><span class="string">'&lt;/pre&gt;' </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=xsltprocessor.setparameter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.setparameter.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.xsltprocessor.php">XSLTProcessor</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="xsltprocessor.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getparameter.php" title="getParameter">getParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getsecurityprefs.php" title="getSecurityPrefs">getSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.hasexsltsupport.php" title="hasExsltSupport">hasExsltSupport</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.importstylesheet.php" title="importStylesheet">importStylesheet</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctionns.php" title="registerPHPFunctionNS">registerPHPFunctionNS</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctions.php" title="registerPHPFunctions">registerPHPFunctions</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.removeparameter.php" title="removeParameter">removeParameter</a>
                        </li>
                                                <li class="current">
                            <a href="xsltprocessor.setparameter.php" title="setParameter">setParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setprofiling.php" title="setProfiling">setProfiling</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setsecurityprefs.php" title="setSecurityPrefs">setSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtodoc.php" title="transformToDoc">transformToDoc</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtouri.php" title="transformToUri">transformToUri</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtoxml.php" title="transformToXml">transformToXml</a>
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
