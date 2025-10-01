<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: simplexml_load_string - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.simplexml-load-string.php">
 <link rel="shorturl" href="https://www.php.net/simplexml-load-string">
 <link rel="alternate" href="https://www.php.net/simplexml-load-string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.simplexml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.simplexml-load-file.php">
 <link rel="next" href="https://www.php.net/manual/en/book.wddx.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.simplexml-load-string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.simplexml-load-string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.simplexml-load-string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.simplexml-load-string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.simplexml-load-string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.simplexml-load-string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.simplexml-load-string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.simplexml-load-string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.simplexml-load-string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.simplexml-load-string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.simplexml-load-string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Interprets a string of XML into an object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: simplexml_load_string - Manual" />
<meta name="twitter:description" content="Interprets a string of XML into an object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: simplexml_load_string - Manual" />
<meta itemprop="description" content="Interprets a string of XML into an object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Interprets a string of XML into an object" />

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
        <a href="book.wddx.php">
          WDDX &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.simplexml-load-file.php">
          &laquo; simplexml_load_file        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.simplexml.php'>SimpleXML</a></li>      <li><a href='ref.simplexml.php'>SimpleXML Functions</a></li>      </ul>
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
            <option value='en/function.simplexml-load-string.php' selected="selected">English</option>
            <option value='de/function.simplexml-load-string.php'>German</option>
            <option value='es/function.simplexml-load-string.php'>Spanish</option>
            <option value='fr/function.simplexml-load-string.php'>French</option>
            <option value='it/function.simplexml-load-string.php'>Italian</option>
            <option value='ja/function.simplexml-load-string.php'>Japanese</option>
            <option value='pt_BR/function.simplexml-load-string.php'>Brazilian Portuguese</option>
            <option value='ru/function.simplexml-load-string.php'>Russian</option>
            <option value='tr/function.simplexml-load-string.php'>Turkish</option>
            <option value='uk/function.simplexml-load-string.php'>Ukrainian</option>
            <option value='zh/function.simplexml-load-string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.simplexml-load-string" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">simplexml_load_string</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">simplexml_load_string</span> &mdash; <span class="dc-title">
   Interprets a string of XML into an object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.simplexml-load-string-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>simplexml_load_string</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class_name</code><span class="initializer"> = SimpleXMLElement::class</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace_or_prefix</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$is_prefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Takes a well-formed XML string and returns it as an object.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.simplexml-load-string-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       A well-formed XML string
      </p>
     </dd>
    
    
     <dt><code class="parameter">class_name</code></dt>
     <dd>
      <p class="para">
       You may use this optional parameter so that
       <span class="function"><strong>simplexml_load_string()</strong></span> will return an object of 
       the specified class. That class should extend the 
       <span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span> class.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
  <a href="language.operators.bitwise.php" class="link">Bitwise <code class="literal">OR</code></a>
  of the <a href="libxml.constants.php" class="link">libxml option constants</a>.
</p>
     </dd>
    
    
     <dt><code class="parameter">namespace_or_prefix</code></dt>
     <dd>
      <p class="para">
       Namespace prefix or URI.
      </p>
     </dd>
    
    
     <dt><code class="parameter">is_prefix</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">namespace_or_prefix</code> is a prefix, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if it&#039;s a URI;
       defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.simplexml-load-string-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> of class <span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span> with
   properties containing the data held within the xml document, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 errors" id="refsect1-function.simplexml-load-string-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Produces an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> error message for each error
   found in the XML data.
  </p>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    Use <span class="function"><a href="function.libxml-use-internal-errors.php" class="function">libxml_use_internal_errors()</a></span> to suppress all XML
    errors, and <span class="function"><a href="function.libxml-get-errors.php" class="function">libxml_get_errors()</a></span> to iterate over them
    afterwards.
   </p>
  </div>
 </div>


 <div class="refsect1 examples" id="refsect1-function.simplexml-load-string-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5900">
    <p><strong>Example #1 Interpret an XML string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= &lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;?xml version='1.0'?&gt; <br />&lt;document&gt;<br /> &lt;title&gt;Forty What?&lt;/title&gt;<br /> &lt;from&gt;Joe&lt;/from&gt;<br /> &lt;to&gt;Jane&lt;/to&gt;<br /> &lt;body&gt;<br />  I know that's the answer -- but what's the question?<br /> &lt;/body&gt;<br />&lt;/document&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #0000BB">$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">SimpleXMLElement Object
(
  [title] =&gt; Forty What?
  [from] =&gt; Joe
  [to] =&gt; Jane
  [body] =&gt;
   I know that&#039;s the answer -- but what&#039;s the question?
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     At this point, you can go about using <code class="literal">$xml-&gt;body</code>
     and such.
    </p></div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.simplexml-load-string-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.simplexml-load-file.php" class="function" rel="rdfs-seeAlso">simplexml_load_file()</a> - Interprets an XML file into an object</span></li>
    <li><span class="methodname"><a href="simplexmlelement.construct.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::__construct()</a> - Creates a new SimpleXMLElement object</span></li>
    <li><a href="simplexml.examples-errors.php" class="xref">Dealing with XML errors</a></li>
    <li><span class="function"><a href="function.libxml-use-internal-errors.php" class="function" rel="rdfs-seeAlso">libxml_use_internal_errors()</a> - Disable libxml errors and allow user to fetch error information as needed</span></li>
    <li><a href="simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/functions/simplexml-load-string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.simplexml-load-string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.simplexml-load-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.simplexml-load-string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101594">  <div class="votes">
    <div id="Vu101594">
    <a href="/manual/vote-note.php?id=101594&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101594">
    <a href="/manual/vote-note.php?id=101594&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101594" title="66% like this...">
    37
    </div>
  </div>
  <a href="#101594" class="name">
  <strong class="user"><em>ascammon at hotmail dot com</em></strong></a><a class="genanchor" href="#101594"> &para;</a><div class="date" title="2010-12-28 01:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101594">
<div class="phpcode"><code><span class="html">I had a hard time finding this documented, so posting it here in case it helps someone:<br /><br />If you want to use multiple libxml options, separate them with a pipe, like so:<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'SimpleXMLElement'</span><span class="keyword">, </span><span class="default">LIBXML_NOCDATA </span><span class="keyword">| </span><span class="default">LIBXML_NOBLANKS</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102277">  <div class="votes">
    <div id="Vu102277">
    <a href="/manual/vote-note.php?id=102277&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102277">
    <a href="/manual/vote-note.php?id=102277&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102277" title="64% like this...">
    21
    </div>
  </div>
  <a href="#102277" class="name">
  <strong class="user"><em>Diego Araos, diego at klapmedia dot com</em></strong></a><a class="genanchor" href="#102277"> &para;</a><div class="date" title="2011-02-05 12:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102277">
<div class="phpcode"><code><span class="html">A simpler way to transform the result into an array (requires json module).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">object2array</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">) { return @</span><span class="default">json_decode</span><span class="keyword">(@</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">); }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example:
<br /><span class="default">&lt;?php
<br />$xml_object</span><span class="keyword">=</span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;SOME XML DATA'</span><span class="keyword">);
<br /></span><span class="default">$xml_array</span><span class="keyword">=</span><span class="default">object2array</span><span class="keyword">(</span><span class="default">$xml_object</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117237">  <div class="votes">
    <div id="Vu117237">
    <a href="/manual/vote-note.php?id=117237&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117237">
    <a href="/manual/vote-note.php?id=117237&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117237" title="71% like this...">
    6
    </div>
  </div>
  <a href="#117237" class="name">
  <strong class="user"><em>meustrus</em></strong></a><a class="genanchor" href="#117237"> &para;</a><div class="date" title="2015-05-07 03:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117237">
<div class="phpcode"><code><span class="html">Be careful checking for parse errors. An empty SimpleXMLElement may resolve to FALSE, and if your XML contains no text or only contains namespaced elements your error check may be wrong. Always use `=== FALSE` when checking for parse errors.<br /><br /><span class="default">&lt;?php<br /><br />$xml </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;ns1:Root xmlns:ns1="<a href="http://example.com/custom" rel="nofollow" target="_blank">http://example.com/custom</a>"&gt;<br />&lt;ns1:Node&gt;There's stuff here&lt;/ns1:Node&gt;<br />&lt;/ns1:Root&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$simplexml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="comment">// This prints "Parse Error".<br /></span><span class="keyword">echo (</span><span class="default">$simplexml </span><span class="keyword">? </span><span class="string">'Valid XML' </span><span class="keyword">: </span><span class="string">'Parse Error'</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// But this prints "There's stuff here", proving that<br />// the SimpleXML object was created successfully.<br /></span><span class="keyword">echo </span><span class="default">$simplexml</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/custom" rel="nofollow" target="_blank">http://example.com/custom</a>'</span><span class="keyword">)-&gt;</span><span class="default">Node</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// Use this instead:<br /></span><span class="keyword">echo (</span><span class="default">$simplexml </span><span class="keyword">!== </span><span class="default">FALSE </span><span class="keyword">? </span><span class="string">'Valid XML' </span><span class="keyword">: </span><span class="string">'Parse Error'</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />See:<br /><br /><a href="https://bugs.php.net/bug.php?id=31045" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=31045</a><br /><a href="https://bugs.php.net/bug.php?id=30972" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=30972</a><br /><a href="https://bugs.php.net/bug.php?id=69596" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=69596</a></span></code></div>
  </div>
 </div>
  <div class="note" id="80855">  <div class="votes">
    <div id="Vu80855">
    <a href="/manual/vote-note.php?id=80855&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80855">
    <a href="/manual/vote-note.php?id=80855&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80855" title="62% like this...">
    11
    </div>
  </div>
  <a href="#80855" class="name">
  <strong class="user"><em>bojan</em></strong></a><a class="genanchor" href="#80855"> &para;</a><div class="date" title="2008-02-04 04:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80855">
<div class="phpcode"><code><span class="html">As was said before don't use var_dump() or print_r() to see SimpleXML object structure as they do not returns always what you expect.
<br />Consider the following:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// data in xml
<br /></span><span class="default">$xml_txt </span><span class="keyword">= </span><span class="string">'
<br />&lt;root&gt;
<br />  &lt;folder ID="65" active="1" permission="1"&gt;&lt;![CDATA[aaaa]]&gt;&lt;/folder&gt;
<br />  &lt;folder ID="65" active="1" permission="1"&gt;&lt;![CDATA[bbbb]]&gt;&lt;/folder&gt;
<br />&lt;/root&gt;'</span><span class="keyword">;
<br />
<br /></span><span class="comment">// load xml into SimpleXML object
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml_txt</span><span class="keyword">, </span><span class="string">'SimpleXMLElement'</span><span class="keyword">, </span><span class="default">LIBXML_NOCDATA</span><span class="keyword">);</span><span class="comment">//LIBXML_NOCDATA LIBXML_NOWARNING
<br />
<br />// see object structure
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);
<br />
<br /></span><span class="comment">/* this prints
<br />SimpleXMLElement Object
<br />(
<br />    [folder] =&gt; Array
<br />        (
<br />            [0] =&gt; aaaa
<br />            [1] =&gt; bbbb
<br />        )
<br />
<br />)
<br />*/
<br />
<br />// but...
<br /></span><span class="keyword">foreach (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">folder </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){
<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />}
<br /></span><span class="comment">/* prints complete structure of each folder element:
<br />SimpleXMLElement Object
<br />(
<br />    [@attributes] =&gt; Array
<br />        (
<br />            [ID] =&gt; 65
<br />            [active] =&gt; 1
<br />            [permission] =&gt; 1
<br />        )
<br />
<br />    [0] =&gt; aaaa
<br />)
<br />
<br />SimpleXMLElement Object
<br />(
<br />    [@attributes] =&gt; Array
<br />        (
<br />            [ID] =&gt; 65
<br />            [active] =&gt; 1
<br />            [permission] =&gt; 1
<br />        )
<br />
<br />    [0] =&gt; bbbb
<br />)
<br />
<br />*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84365">  <div class="votes">
    <div id="Vu84365">
    <a href="/manual/vote-note.php?id=84365&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84365">
    <a href="/manual/vote-note.php?id=84365&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84365" title="59% like this...">
    13
    </div>
  </div>
  <a href="#84365" class="name">
  <strong class="user"><em>rowan dot collins at gmail dot com</em></strong></a><a class="genanchor" href="#84365"> &para;</a><div class="date" title="2008-07-10 07:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84365">
<div class="phpcode"><code><span class="html">There seems to be a lot of talk about SimpleXML having a "problem" with CDATA, and writing functions to rip it out, etc. I thought so too, at first, but it's actually behaving just fine under PHP 5.2.6
<br />
<br />The key is noted above example #6 here:
<br /><a href="http://uk2.php.net/manual/en/simplexml.examples.php" rel="nofollow" target="_blank">http://uk2.php.net/manual/en/simplexml.examples.php</a>
<br />
<br />"To compare an element or attribute with a string or pass it into a function that requires a string, you must cast it to a string using (string). Otherwise, PHP treats the element as an object."
<br />
<br />If a tag contains CDATA, SimpleXML remembers that fact, by representing it separately from the string content of the element. So some functions, including print_r(), might not show what you expect. But if you explicitly cast to a string, you get the whole content.
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;foo&gt;Text1 &amp;amp; XML entities&lt;/foo&gt;'</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);
<br /></span><span class="comment">/*
<br />SimpleXMLElement Object
<br />(
<br />    [0] =&gt; Text1 &amp; XML entities
<br />)
<br />*/
<br />
<br /></span><span class="default">$xml2 </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;foo&gt;&lt;![CDATA[Text2 &amp; raw data]]&gt;&lt;/foo&gt;'</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$xml2</span><span class="keyword">);
<br /></span><span class="comment">/*
<br />SimpleXMLElement Object
<br />(
<br />)
<br />*/
<br />// Where's my CDATA?
<br />
<br />// Let's try explicit casts
<br /></span><span class="default">print_r</span><span class="keyword">( (string)</span><span class="default">$xml </span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">( (string)</span><span class="default">$xml2 </span><span class="keyword">);
<br /></span><span class="comment">/*
<br />Text1 &amp; XML entities
<br />Text2 &amp; raw data
<br />*/
<br />// Much better
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80968">  <div class="votes">
    <div id="Vu80968">
    <a href="/manual/vote-note.php?id=80968&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80968">
    <a href="/manual/vote-note.php?id=80968&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80968" title="66% like this...">
    2
    </div>
  </div>
  <a href="#80968" class="name">
  <strong class="user"><em>amir_abiri at ipcmedia dot com</em></strong></a><a class="genanchor" href="#80968"> &para;</a><div class="date" title="2008-02-08 08:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80968">
<div class="phpcode"><code><span class="html">It doesn't seem to be documented anywhere, but you can refer to an element "value" for the purpose of changing it like so:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;root&gt;&lt;number&gt;1&lt;/number&gt;&lt;/root&gt;'</span><span class="keyword">);
<br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXml</span><span class="keyword">(). </span><span class="string">"\n\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">number</span><span class="keyword">-&gt;{</span><span class="default">0</span><span class="keyword">} = </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">number</span><span class="keyword">-&gt;{</span><span class="default">0</span><span class="keyword">} + </span><span class="default">1</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXml</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />echos:
<br />&lt;?xml version="1.0"?&gt;
<br />&lt;root&gt;&lt;number&gt;1&lt;/number&gt;&lt;/root&gt;
<br />
<br />&lt;?xml version="1.0"?&gt;
<br />&lt;root&gt;&lt;number&gt;2&lt;/number&gt;&lt;/root&gt;
<br />
<br />However, this only works with a direct assignment, not with any of the other operators:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;root&gt;&lt;number&gt;1&lt;/number&gt;&lt;/root&gt;'</span><span class="keyword">);
<br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXml</span><span class="keyword">(). </span><span class="string">"\n\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">number</span><span class="keyword">-&gt;{</span><span class="default">0</span><span class="keyword">} += </span><span class="default">1</span><span class="keyword">;
<br /></span><span class="comment">// Or:
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">number</span><span class="keyword">-&gt;{</span><span class="default">0</span><span class="keyword">}++;
<br />
<br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXml</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Both of the above cases would result in:
<br />
<br />&lt;?xml version="1.0"?&gt;
<br />&lt;root&gt;&lt;number&gt;1&lt;/number&gt;&lt;/root&gt;
<br />
<br />&lt;?xml version="1.0"?&gt;
<br />&lt;root&gt;&lt;number&gt;1&lt;0/&gt;&lt;/number&gt;&lt;/root&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="77713">  <div class="votes">
    <div id="Vu77713">
    <a href="/manual/vote-note.php?id=77713&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77713">
    <a href="/manual/vote-note.php?id=77713&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77713" title="63% like this...">
    3
    </div>
  </div>
  <a href="#77713" class="name">
  <strong class="user"><em>nbijnens at servs dot eu</em></strong></a><a class="genanchor" href="#77713"> &para;</a><div class="date" title="2007-09-10 05:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77713">
<div class="phpcode"><code><span class="html">Please note that not all LIBXML options are supported with the options argument.<br /><br />For instance LIBXML_XINCLUDE does not work. But there is however a work around:<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">loadXML </span><span class="keyword">(</span><span class="default">$XMLString</span><span class="keyword">);<br />            <br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xinclude</span><span class="keyword">();<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_import_dom</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78513">  <div class="votes">
    <div id="Vu78513">
    <a href="/manual/vote-note.php?id=78513&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78513">
    <a href="/manual/vote-note.php?id=78513&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78513" title="60% like this...">
    1
    </div>
  </div>
  <a href="#78513" class="name">
  <strong class="user"><em>hattori at hanso dot com</em></strong></a><a class="genanchor" href="#78513"> &para;</a><div class="date" title="2007-10-15 03:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78513">
<div class="phpcode"><code><span class="html">Theres a problem with the below workaround when serializing fields containing html CDATA. For any other content type then HTML try to modfiy function parseCDATA.<br />Just add these lines before serializing.<br />This is also a workaround for this bug <a href="http://bugs.php.net/bug.php?id=42001" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=42001</a><br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="string">'&lt;![CDATA['</span><span class="keyword">)) {<br />   function </span><span class="default">parseCDATA</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />      return </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />   }<br />   </span><span class="default">$content </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />      </span><span class="string">'#&lt;!\[CDATA\[(.*)\]\]&gt;#'</span><span class="keyword">,<br />      </span><span class="string">'parseCDATA'</span><span class="keyword">,<br />      </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">)<br />   );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72697">  <div class="votes">
    <div id="Vu72697">
    <a href="/manual/vote-note.php?id=72697&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72697">
    <a href="/manual/vote-note.php?id=72697&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72697" title="57% like this...">
    2
    </div>
  </div>
  <a href="#72697" class="name">
  <strong class="user"><em>mindpower</em></strong></a><a class="genanchor" href="#72697"> &para;</a><div class="date" title="2007-01-30 03:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72697">
<div class="phpcode"><code><span class="html">A simple extension that adds a method for retrieving a specific attribute:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">simple_xml_extended </span><span class="keyword">extends </span><span class="default">SimpleXMLElement<br /></span><span class="keyword">{<br />    public    function    </span><span class="default">Attribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />    {<br />        foreach(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Attributes</span><span class="keyword">() as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$key </span><span class="keyword">== </span><span class="default">$name</span><span class="keyword">)<br />                return (string)</span><span class="default">$val</span><span class="keyword">;<br />        }<br />    }<br /><br />}<br /><br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'<br />&lt;xml&gt;<br />  &lt;dog type="poodle" owner="Mrs Smith"&gt;Rover&lt;/dog&gt;<br />&lt;/xml&gt;'</span><span class="keyword">, </span><span class="string">'simple_xml_extended'</span><span class="keyword">);<br /><br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">dog</span><span class="keyword">-&gt;</span><span class="default">Attribute</span><span class="keyword">(</span><span class="string">'type'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />outputs 'poodle'<br /><br />I prefer to use this technique rather than typecasting attributes.</span></code></div>
  </div>
 </div>
  <div class="note" id="110334">  <div class="votes">
    <div id="Vu110334">
    <a href="/manual/vote-note.php?id=110334&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110334">
    <a href="/manual/vote-note.php?id=110334&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110334" title="55% like this...">
    2
    </div>
  </div>
  <a href="#110334" class="name">
  <strong class="user"><em>AllenJB</em></strong></a><a class="genanchor" href="#110334"> &para;</a><div class="date" title="2012-10-12 08:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110334">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$xml </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">json_encode</span><span class="keyword">((array) </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)), </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />A reminder that json_encode attempts to convert data to UTF-8 without specific knowledge of the source encoding. This method can cause encoding issues if you're not working in UTF-8.</span></code></div>
  </div>
 </div>
  <div class="note" id="86428">  <div class="votes">
    <div id="Vu86428">
    <a href="/manual/vote-note.php?id=86428&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86428">
    <a href="/manual/vote-note.php?id=86428&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86428" title="57% like this...">
    1
    </div>
  </div>
  <a href="#86428" class="name">
  <strong class="user"><em>javalc6 at gmail dot com</em></strong></a><a class="genanchor" href="#86428"> &para;</a><div class="date" title="2008-10-18 06:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86428">
<div class="phpcode"><code><span class="html">I wanted to convert an array containing strings and other arrays of the same type into a simplexml object.
<br />
<br />Here is the code of the function array2xml that I've developed to perform this conversion. Please note that this code is simple without any checks.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array2xml</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">) {
<br />
<br />    function </span><span class="default">ia2xml</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {
<br />        </span><span class="default">$xml</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />        foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {
<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {
<br />                </span><span class="default">$xml</span><span class="keyword">.=</span><span class="string">"&lt;</span><span class="default">$key</span><span class="string">&gt;"</span><span class="keyword">.</span><span class="default">ia2xml</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">).</span><span class="string">"&lt;/</span><span class="default">$key</span><span class="string">&gt;"</span><span class="keyword">;
<br />            } else {
<br />                </span><span class="default">$xml</span><span class="keyword">.=</span><span class="string">"&lt;</span><span class="default">$key</span><span class="string">&gt;"</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">"&lt;/</span><span class="default">$key</span><span class="string">&gt;"</span><span class="keyword">;
<br />            }
<br />        }
<br />        return </span><span class="default">$xml</span><span class="keyword">;
<br />    }
<br />
<br />    return </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">"&lt;</span><span class="default">$tag</span><span class="string">&gt;"</span><span class="keyword">.</span><span class="default">ia2xml</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">).</span><span class="string">"&lt;/</span><span class="default">$tag</span><span class="string">&gt;"</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$test</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">]=</span><span class="string">'lunch'</span><span class="keyword">;
<br /></span><span class="default">$test</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">]=</span><span class="string">'12:30'</span><span class="keyword">;
<br /></span><span class="default">$test</span><span class="keyword">[</span><span class="string">'menu'</span><span class="keyword">]=array(</span><span class="string">'entree'</span><span class="keyword">=&gt;</span><span class="string">'salad'</span><span class="keyword">, </span><span class="string">'maincourse'</span><span class="keyword">=&gt;</span><span class="string">'steak'</span><span class="keyword">);
<br />
<br />echo </span><span class="default">array2xml</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">,</span><span class="string">"meal"</span><span class="keyword">)-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91564">  <div class="votes">
    <div id="Vu91564">
    <a href="/manual/vote-note.php?id=91564&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91564">
    <a href="/manual/vote-note.php?id=91564&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91564" title="53% like this...">
    1
    </div>
  </div>
  <a href="#91564" class="name">
  <strong class="user"><em>Bob</em></strong></a><a class="genanchor" href="#91564"> &para;</a><div class="date" title="2009-06-17 02:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91564">
<div class="phpcode"><code><span class="html">Here is my simple SimpleXML wrapper function.<br />As far as I can tell, it does the same as Julio Cesar Oliveira's (above).<br />It parses an XML string into a multi-dimensional associative array.<br />The second argument is a callback that is run on all data (so for example, if you want all data trimmed, like Julio does in his function, just pass 'trim' as the second arg).<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unserialize_xml</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$callback </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$recurse </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br /></span><span class="comment">/* bool/array unserialize_xml ( string $input [ , callback $callback ] )<br /> * Unserializes an XML string, returning a multi-dimensional associative array, optionally runs a callback on all non-array data<br /> * Returns false on all failure<br /> * Notes:<br />    * Root XML tags are stripped<br />    * Due to its recursive nature, unserialize_xml() will also support SimpleXMLElement objects and arrays as input<br />    * Uses simplexml_load_string() for XML parsing, see SimpleXML documentation for more info<br /> */<br /></span><span class="keyword">{<br />    </span><span class="comment">// Get input, loading an xml string with simplexml if its the top level of recursion<br />    </span><span class="default">$data </span><span class="keyword">= ((!</span><span class="default">$recurse</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">))? </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">): </span><span class="default">$input</span><span class="keyword">;<br />    </span><span class="comment">// Convert SimpleXMLElements to array<br />    </span><span class="keyword">if (</span><span class="default">$data </span><span class="keyword">instanceof </span><span class="default">SimpleXMLElement</span><span class="keyword">) </span><span class="default">$data </span><span class="keyword">= (array) </span><span class="default">$data</span><span class="keyword">;<br />    </span><span class="comment">// Recurse into arrays<br />    </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) foreach (</span><span class="default">$data </span><span class="keyword">as &amp;</span><span class="default">$item</span><span class="keyword">) </span><span class="default">$item </span><span class="keyword">= </span><span class="default">unserialize_xml</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="comment">// Run callback and return<br />    </span><span class="keyword">return (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">))? </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">): </span><span class="default">$data</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89951">  <div class="votes">
    <div id="Vu89951">
    <a href="/manual/vote-note.php?id=89951&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89951">
    <a href="/manual/vote-note.php?id=89951&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89951" title="53% like this...">
    1
    </div>
  </div>
  <a href="#89951" class="name">
  <strong class="user"><em>Julio Cesar Oliveira</em></strong></a><a class="genanchor" href="#89951"> &para;</a><div class="date" title="2009-03-30 07:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89951">
<div class="phpcode"><code><span class="html">The XML2Array func now Recursive!<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">XML2Array </span><span class="keyword">( </span><span class="default">$xml </span><span class="keyword">, </span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">)<br />{<br />    if ( ! </span><span class="default">$recursive </span><span class="keyword">)<br />    {<br />        </span><span class="default">$array </span><span class="keyword">= </span><span class="default">simplexml_load_string </span><span class="keyword">( </span><span class="default">$xml </span><span class="keyword">) ;<br />    }<br />    else<br />    {<br />        </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$xml </span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$newArray </span><span class="keyword">= array () ;<br />    </span><span class="default">$array </span><span class="keyword">= ( array ) </span><span class="default">$array </span><span class="keyword">;<br />    foreach ( </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">)<br />    {<br />        </span><span class="default">$value </span><span class="keyword">= ( array ) </span><span class="default">$value </span><span class="keyword">;<br />        if ( isset ( </span><span class="default">$value </span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">] ) )<br />        {<br />            </span><span class="default">$newArray </span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">trim </span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">[ </span><span class="default">0 </span><span class="keyword">] ) ;<br />        }<br />        else<br />        {<br />            </span><span class="default">$newArray </span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">XML2Array </span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">, </span><span class="default">true </span><span class="keyword">) ;<br />        }<br />    }<br />    return </span><span class="default">$newArray </span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117453">  <div class="votes">
    <div id="Vu117453">
    <a href="/manual/vote-note.php?id=117453&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117453">
    <a href="/manual/vote-note.php?id=117453&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117453" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117453" class="name">
  <strong class="user"><em>artistan at gmail dot com</em></strong></a><a class="genanchor" href="#117453"> &para;</a><div class="date" title="2015-06-11 12:32"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117453">
<div class="phpcode"><code><span class="html">Here is my update to Bob's simple SimpleXML wrapper function.<br />I noticed his version would turn an empty SimpleXMLElement into an empty array.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * <a href="http://php.net/manual/en/function.simplexml-load-string.php#91564" rel="nofollow" target="_blank">http://php.net/manual/en/function.simplexml-load-string.php#91564</a><br />     *<br />     * bool/array unserialize_xml ( string $input [ , callback $callback ] )<br />     * Unserializes an XML string, returning a multi-dimensional associative array, optionally runs a callback on all non-array data<br />     * Returns false on all failure<br />     * Notes:<br />     * Root XML tags are stripped<br />     * Due to its recursive nature, unserialize_xml() will also support SimpleXMLElement objects and arrays as input<br />     * Uses simplexml_load_string() for XML parsing, see SimpleXML documentation for more info<br />     *<br />     * @param $input<br />     * @param null $callback<br />     * @param bool $recurse<br />     * @return array|mixed<br />     *<br />     */<br />    </span><span class="keyword">function </span><span class="default">unserialize_xml</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$callback </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$recurse </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Get input, loading an xml string with simplexml if its the top level of recursion<br />        </span><span class="default">$data </span><span class="keyword">= ((!</span><span class="default">$recurse</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">))? </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">): </span><span class="default">$input</span><span class="keyword">;<br />        </span><span class="comment">// Convert SimpleXMLElements to array<br />        </span><span class="keyword">if (</span><span class="default">$data </span><span class="keyword">instanceof </span><span class="default">SimpleXMLElement</span><span class="keyword">){<br />            if(!empty(</span><span class="default">$data</span><span class="keyword">)){<br />                </span><span class="default">$data </span><span class="keyword">= (array) </span><span class="default">$data</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="comment">// Recurse into arrays<br />        </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) foreach (</span><span class="default">$data </span><span class="keyword">as &amp;</span><span class="default">$item</span><span class="keyword">) </span><span class="default">$item </span><span class="keyword">= </span><span class="default">unserialize_xml</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="comment">// Run callback and return<br />        </span><span class="keyword">return (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">))? </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">): </span><span class="default">$data</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107732">  <div class="votes">
    <div id="Vu107732">
    <a href="/manual/vote-note.php?id=107732&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107732">
    <a href="/manual/vote-note.php?id=107732&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107732" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107732" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#107732"> &para;</a><div class="date" title="2012-02-29 08:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107732">
<div class="phpcode"><code><span class="html">Use libxml_disable_entity_loader() to restrict loading of external files.  See <a href="http://www.idontplaydarts.com/2011/02/scanning-the-internal-network-using-simplexml/" rel="nofollow" target="_blank">http://www.idontplaydarts.com/2011/02/scanning-the-internal-network-using-simplexml/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="94658">  <div class="votes">
    <div id="Vu94658">
    <a href="/manual/vote-note.php?id=94658&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94658">
    <a href="/manual/vote-note.php?id=94658&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94658" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94658" class="name">
  <strong class="user"><em>jeff at creabilis dot com</em></strong></a><a class="genanchor" href="#94658"> &para;</a><div class="date" title="2009-11-17 02:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94658">
<div class="phpcode"><code><span class="html">If you want to set the charset of the outputed xml, simply set the encoding attribute like this :
<br />
<br /><span class="default">&lt;?php simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;?xml version="1.0" encoding="utf-8"?&gt;&lt;xml/&gt;'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />The generated xml outputed by $xml-&gt;asXML will containt accentuated characters like 'é' instead of &amp;#xE9;.
<br />
<br />Hope this help</span></code></div>
  </div>
 </div>
  <div class="note" id="73684">  <div class="votes">
    <div id="Vu73684">
    <a href="/manual/vote-note.php?id=73684&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73684">
    <a href="/manual/vote-note.php?id=73684&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73684" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73684" class="name">
  <strong class="user"><em>m dot ament at mailcity dot com</em></strong></a><a class="genanchor" href="#73684"> &para;</a><div class="date" title="2007-03-06 06:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73684">
<div class="phpcode"><code><span class="html">Warning:<br /><br />The parsing of XML-data will stop when reaching character 0.<br />Please avoid this character in your XML-data.</span></code></div>
  </div>
 </div>
  <div class="note" id="45278">  <div class="votes">
    <div id="Vu45278">
    <a href="/manual/vote-note.php?id=45278&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45278">
    <a href="/manual/vote-note.php?id=45278&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45278" title="50% like this...">
    0
    </div>
  </div>
  <a href="#45278" class="name">
  <strong class="user"><em>cellog at php dot net</em></strong></a><a class="genanchor" href="#45278"> &para;</a><div class="date" title="2004-08-31 04:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45278">
<div class="phpcode"><code><span class="html">simplexml does not simply handle CDATA sections in a foreach loop.
<br />
<br /><span class="default">&lt;?php
<br />$sx </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'
<br />&lt;test&gt;
<br /> &lt;one&gt;hi&lt;/one&gt;
<br /> &lt;two&gt;&lt;![CDATA[stuff]]&gt;&lt;/two&gt;
<br /> &lt;t&gt;
<br />  &lt;for&gt;two&lt;/for&gt;
<br /> &lt;/t&gt;
<br /> &lt;multi&gt;one&lt;/multi&gt;
<br /> &lt;multi&gt;two&lt;/multi&gt;
<br />&lt;/test&gt;'</span><span class="keyword">);
<br />foreach((array) </span><span class="default">$sx </span><span class="keyword">as </span><span class="default">$tagname </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {
<br />    if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {
<br />       </span><span class="comment">// &lt;one&gt; will go here
<br />    </span><span class="keyword">} elseif (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {
<br />       </span><span class="comment">// &lt;multi&gt; will go here because it happens multiple times
<br />    </span><span class="keyword">} elseif (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {
<br />      </span><span class="comment">// &lt;t&gt; will go here because it contains tags
<br />      // &lt;two&gt; will go here because it contains CDATA!
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />To test in the loop, do this
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">((array) </span><span class="default">$val</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {
<br />    </span><span class="comment">// this is not a tag that contains other tags
<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">. </span><span class="default">$val</span><span class="keyword">;
<br />    </span><span class="comment">// now the CDATA is revealed magically.
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76228">  <div class="votes">
    <div id="Vu76228">
    <a href="/manual/vote-note.php?id=76228&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76228">
    <a href="/manual/vote-note.php?id=76228&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76228" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#76228" class="name">
  <strong class="user"><em>Pedro</em></strong></a><a class="genanchor" href="#76228"> &para;</a><div class="date" title="2007-07-06 01:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76228">
<div class="phpcode"><code><span class="html">Attention:<br /><br />simplexml_load_string has a problem with entities other than (&amp;lt;, &amp;gt;, &amp;amp;, &amp;quot; and &amp;apos;). <br /><br />Use numeric character references instead!</span></code></div>
  </div>
 </div>
  <div class="note" id="113349">  <div class="votes">
    <div id="Vu113349">
    <a href="/manual/vote-note.php?id=113349&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113349">
    <a href="/manual/vote-note.php?id=113349&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113349" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#113349" class="name">
  <strong class="user"><em>dkrnl at yandex dot ru</em></strong></a><a class="genanchor" href="#113349"> &para;</a><div class="date" title="2013-09-30 02:58"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113349">
<div class="phpcode"><code><span class="html">Wrapper XMLReader class, for simple SAX-reading huge xml:<br /><a href="https://github.com/dkrnl/SimpleXMLReader" rel="nofollow" target="_blank">https://github.com/dkrnl/SimpleXMLReader</a><br /><br />Usage example: <a href="http://github.com/dkrnl/SimpleXMLReader/blob/master/examples/example1.php" rel="nofollow" target="_blank">http://github.com/dkrnl/SimpleXMLReader/blob/master/examples/example1.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="53638">  <div class="votes">
    <div id="Vu53638">
    <a href="/manual/vote-note.php?id=53638&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53638">
    <a href="/manual/vote-note.php?id=53638&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53638" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#53638" class="name">
  <strong class="user"><em>Maciek Ruckgaber &lt;maciekrb at gmai dot com&gt;</em></strong></a><a class="genanchor" href="#53638"> &para;</a><div class="date" title="2005-06-07 05:07"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53638">
<div class="phpcode"><code><span class="html">after wondering around some time, i just realized something (maybe obvious, not very much for me). Hope helps someone to not waste time as i did :-P
<br />
<br />when you have something like:
<br />
<br /><span class="default">&lt;?php
<br />$xmlstr </span><span class="keyword">= &lt;&lt;&lt;XML
<br /></span><span class="string">&lt;?xml version="1.0" encoding="utf-8"?&gt;
<br />&lt;double xmlns="<a href="http://foosite.foo/" rel="nofollow" target="_blank">http://foosite.foo/</a>"&gt;2328&lt;/double&gt;
<br /></span><span class="keyword">XML;
<br /></span><span class="default">?&gt;
<br /></span>
<br />you will have the simpleXML object "transformed" to the text() content:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xmlstr</span><span class="keyword">);
<br />echo </span><span class="default">$xml</span><span class="keyword">; </span><span class="comment">// this will echo 2328  (string)
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121072">  <div class="votes">
    <div id="Vu121072">
    <a href="/manual/vote-note.php?id=121072&amp;page=function.simplexml-load-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121072">
    <a href="/manual/vote-note.php?id=121072&amp;page=function.simplexml-load-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121072" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#121072" class="name">
  <strong class="user"><em>erguven dot m at gmail dot com</em></strong></a><a class="genanchor" href="#121072"> &para;</a><div class="date" title="2017-05-11 03:14"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121072">
<div class="phpcode"><code><span class="html">if you want to use a class which exists in a name space, use it full name. simple_load_string did not recognize short one.<br /><br />class.new.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">foo\bar</span><span class="keyword">;<br /><br />class new extends </span><span class="default">SimpleXMLElement<br /></span><span class="keyword">{<br />    public function do()<br />    {<br />        echo </span><span class="string">"done"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />false.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">\foo\bar\new</span><span class="keyword">;<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="string">'new'</span><span class="keyword">); </span><span class="comment">// it gives warning<br /></span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">do</span><span class="keyword">(); </span><span class="comment">// fatal error<br /></span><span class="default">?&gt;<br /></span><br />true.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">\foo\bar\new</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="string">'\foo\bar\new'</span><span class="keyword">);<br /><br /></span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">do</span><span class="keyword">(); </span><span class="comment">// prints done<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.simplexml-load-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.simplexml-load-string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.simplexml.php">SimpleXML Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.simplexml-import-dom.php" title="simplexml_&#8203;import_&#8203;dom">simplexml_&#8203;import_&#8203;dom</a>
                        </li>
                                                <li class="">
                            <a href="function.simplexml-load-file.php" title="simplexml_&#8203;load_&#8203;file">simplexml_&#8203;load_&#8203;file</a>
                        </li>
                                                <li class="current">
                            <a href="function.simplexml-load-string.php" title="simplexml_&#8203;load_&#8203;string">simplexml_&#8203;load_&#8203;string</a>
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
