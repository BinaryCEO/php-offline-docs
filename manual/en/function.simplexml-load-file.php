<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: simplexml_load_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.simplexml-load-file.php">
 <link rel="shorturl" href="https://www.php.net/simplexml-load-file">
 <link rel="alternate" href="https://www.php.net/simplexml-load-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.simplexml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.simplexml-import-dom.php">
 <link rel="next" href="https://www.php.net/manual/en/function.simplexml-load-string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.simplexml-load-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.simplexml-load-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.simplexml-load-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.simplexml-load-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.simplexml-load-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.simplexml-load-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.simplexml-load-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.simplexml-load-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.simplexml-load-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.simplexml-load-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.simplexml-load-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Interprets an XML file into an object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: simplexml_load_file - Manual" />
<meta name="twitter:description" content="Interprets an XML file into an object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: simplexml_load_file - Manual" />
<meta itemprop="description" content="Interprets an XML file into an object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Interprets an XML file into an object" />

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
        <a href="function.simplexml-load-string.php">
          simplexml_load_string &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.simplexml-import-dom.php">
          &laquo; simplexml_import_dom        </a>
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
            <option value='en/function.simplexml-load-file.php' selected="selected">English</option>
            <option value='de/function.simplexml-load-file.php'>German</option>
            <option value='es/function.simplexml-load-file.php'>Spanish</option>
            <option value='fr/function.simplexml-load-file.php'>French</option>
            <option value='it/function.simplexml-load-file.php'>Italian</option>
            <option value='ja/function.simplexml-load-file.php'>Japanese</option>
            <option value='pt_BR/function.simplexml-load-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.simplexml-load-file.php'>Russian</option>
            <option value='tr/function.simplexml-load-file.php'>Turkish</option>
            <option value='uk/function.simplexml-load-file.php'>Ukrainian</option>
            <option value='zh/function.simplexml-load-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.simplexml-load-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">simplexml_load_file</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">simplexml_load_file</span> &mdash; <span class="dc-title">
   Interprets an XML file into an object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.simplexml-load-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>simplexml_load_file</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class_name</code><span class="initializer"> = SimpleXMLElement::class</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace_or_prefix</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$is_prefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Convert the well-formed XML document in the given file to an object.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.simplexml-load-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the XML file
      </p>
     </dd>
    
    
     <dt><code class="parameter">class_name</code></dt>
     <dd>
      <p class="para">
       You may use this optional parameter so that
       <span class="function"><strong>simplexml_load_file()</strong></span> will return an object of 
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


 <div class="refsect1 returnvalues" id="refsect1-function.simplexml-load-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> of class <span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span> with
   properties containing the data held within the XML document, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 errors" id="refsect1-function.simplexml-load-file-errors">
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


 <div class="refsect1 examples" id="refsect1-function.simplexml-load-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5899">
    <p><strong>Example #1 Interpret an XML document</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The file examples/book.xml contains an XML document with a root element<br />// and at least an element /[root]/title.<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">);<br /> <br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br />} else {<br />    exit(</span><span style="color: #DD0000">'Failed to open examples/book.xml.'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     This script will display, on success:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">SimpleXMLElement Object
(
  [book] =&gt; Array
  ...
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     At this point, you can go about using <code class="literal">$xml-&gt;title</code>
     and any other elements.
    </p></div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.simplexml-load-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.simplexml-load-string.php" class="function" rel="rdfs-seeAlso">simplexml_load_string()</a> - Interprets a string of XML into an object</span></li>
    <li><span class="methodname"><a href="simplexmlelement.construct.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::__construct()</a> - Creates a new SimpleXMLElement object</span></li>
    <li><a href="simplexml.examples-errors.php" class="xref">Dealing with XML errors</a></li>
    <li><span class="function"><a href="function.libxml-use-internal-errors.php" class="function" rel="rdfs-seeAlso">libxml_use_internal_errors()</a> - Disable libxml errors and allow user to fetch error information as needed</span></li>
    <li><a href="simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>
    <li><span class="function"><a href="function.libxml-set-streams-context.php" class="function" rel="rdfs-seeAlso">libxml_set_streams_context()</a> - Set the streams context for the next libxml document load or write</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/functions/simplexml-load-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.simplexml-load-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.simplexml-load-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.simplexml-load-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109795">  <div class="votes">
    <div id="Vu109795">
    <a href="/manual/vote-note.php?id=109795&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109795">
    <a href="/manual/vote-note.php?id=109795&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109795" title="70% like this...">
    60
    </div>
  </div>
  <a href="#109795" class="name">
  <strong class="user"><em>ricardo at ricardomartins dot info</em></strong></a><a class="genanchor" href="#109795"> &para;</a><div class="date" title="2012-08-21 05:49"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109795">
<div class="phpcode"><code><span class="html">Sometimes we have xml's with hyphens nodes, like<br /><br />&lt;my_xml&gt;<br /> &lt;some-node&gt;value&lt;/some-node&gt;<br />&lt;/my_xml&gt;<br /><br />You'll need to use<br /><span class="default">&lt;?php<br />$simpleXmlObj</span><span class="keyword">-&gt;{</span><span class="string">'some-node'</span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />instead of <br /><span class="default">&lt;?php<br />$simpleXmlObj</span><span class="keyword">-&gt;</span><span class="default">some</span><span class="keyword">-</span><span class="default">node</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73367">  <div class="votes">
    <div id="Vu73367">
    <a href="/manual/vote-note.php?id=73367&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73367">
    <a href="/manual/vote-note.php?id=73367&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73367" title="64% like this...">
    35
    </div>
  </div>
  <a href="#73367" class="name">
  <strong class="user"><em>wouter at code-b dot nl</em></strong></a><a class="genanchor" href="#73367"> &para;</a><div class="date" title="2007-02-20 02:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73367">
<div class="phpcode"><code><span class="html">To correctly extract a value from a CDATA just make sure you cast the SimpleXML Element to a string value by using the cast operator:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="string">'&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
<br />&lt;rss&gt;
<br />    &lt;channel&gt;
<br />        &lt;item&gt;
<br />            &lt;title&gt;&lt;![CDATA[Tom &amp; Jerry]]&gt;&lt;/title&gt;
<br />        &lt;/item&gt;
<br />    &lt;/channel&gt;
<br />&lt;/rss&gt;'</span><span class="keyword">;
<br />
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);
<br />
<br /></span><span class="comment">// echo does the casting for you
<br /></span><span class="keyword">echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">-&gt;</span><span class="default">title</span><span class="keyword">;
<br />
<br /></span><span class="comment">// but vardump (or print_r) not!
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">-&gt;</span><span class="default">title</span><span class="keyword">);
<br />
<br /></span><span class="comment">// so cast the SimpleXML Element to 'string' solve this issue
<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">-&gt;</span><span class="default">title</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Above will output:
<br />
<br />Tom &amp; Jerry
<br />
<br />object(SimpleXMLElement)#4 (0) {}
<br />
<br />string(11) "Tom &amp; Jerry"</span></code></div>
  </div>
 </div>
  <div class="note" id="119934">  <div class="votes">
    <div id="Vu119934">
    <a href="/manual/vote-note.php?id=119934&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119934">
    <a href="/manual/vote-note.php?id=119934&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119934" title="75% like this...">
    12
    </div>
  </div>
  <a href="#119934" class="name">
  <strong class="user"><em>sirgrayjn at gmail dot com</em></strong></a><a class="genanchor" href="#119934"> &para;</a><div class="date" title="2016-09-22 09:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119934">
<div class="phpcode"><code><span class="html">// Be carefull if you migrate or use local machine<br />// for test/development.<br /><br />// Windows directory separators: "\" and "/"<br />// You may mix separators "C:\somedir\www/img/bg.jpg".<br /><br />// Mixed separators path work fine in other functions<br />// But simplexml_load_file() failed with mixed separators.<br /><br />// Examples:<br />include("C:\dir\my.php");    // work (windows)<br />include("C:\dir/my.php");    // work (windows) with mixed<br />include("C:/dir/my.php");    // work (windows, linux)<br />simplexml_load_file("C:\dir\my.php");    // work<br />simplexml_load_file("C:\dir/my.php");    // failed with mixed<br />simplexml_load_file("C:/dir/my.php");    // work</span></code></div>
  </div>
 </div>
  <div class="note" id="92969">  <div class="votes">
    <div id="Vu92969">
    <a href="/manual/vote-note.php?id=92969&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92969">
    <a href="/manual/vote-note.php?id=92969&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92969" title="65% like this...">
    7
    </div>
  </div>
  <a href="#92969" class="name">
  <strong class="user"><em>neil art neilanddeb dort com</em></strong></a><a class="genanchor" href="#92969"> &para;</a><div class="date" title="2009-08-17 06:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92969">
<div class="phpcode"><code><span class="html">Because the encoding of my XML file is UTF-8 and the <br />encoding of my web page is iso-8859-1 I was getting strange characters such as â€™ instead of a right single quote.<br /><br />The solution to this turned out to be hard to find, but really easy to implement.<br /><br /><a href="http://uk3.php.net/manual/en/function.iconv.php" rel="nofollow" target="_blank">http://uk3.php.net/manual/en/function.iconv.php</a><br /><br />Using the iconv() function you can convert from one encodign to another, the TRANSLIT option seems to work best for what I needed.  Here's my example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// convert string from utf-8 to iso8859-1<br /></span><span class="default">$horoscope </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">( </span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="string">"ISO-8859-1//TRANSLIT"</span><span class="keyword">, </span><span class="default">$horoscope </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I found the solution on this page...<br /><a href="http://tinyurl.com/lm39xc" rel="nofollow" target="_blank">http://tinyurl.com/lm39xc</a><br />Hope this helps</span></code></div>
  </div>
 </div>
  <div class="note" id="126864">  <div class="votes">
    <div id="Vu126864">
    <a href="/manual/vote-note.php?id=126864&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126864">
    <a href="/manual/vote-note.php?id=126864&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126864" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126864" class="name">
  <strong class="user"><em>tg at debian dot org</em></strong></a><a class="genanchor" href="#126864"> &para;</a><div class="date" title="2022-02-20 09:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126864">
<div class="phpcode"><code><span class="html">This function does not accept all pathnames, in spite of its documentation.<br /><br />$ php -r 'print_r( simplexml_load_file("%25.xml"));'<br />PHP Warning:  simplexml_load_file(): I/O warning : failed to load external entity "%25.xml" in Command line code on line 1</span></code></div>
  </div>
 </div>
  <div class="note" id="126774">  <div class="votes">
    <div id="Vu126774">
    <a href="/manual/vote-note.php?id=126774&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126774">
    <a href="/manual/vote-note.php?id=126774&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126774" title="57% like this...">
    1
    </div>
  </div>
  <a href="#126774" class="name">
  <strong class="user"><em>visualmind at nospam dot php dot net</em></strong></a><a class="genanchor" href="#126774"> &para;</a><div class="date" title="2022-01-18 02:49"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126774">
<div class="phpcode"><code><span class="html">This may sometimes get missed, but if your xml nodes are in the format:<br />&lt;prefix:element /&gt;<br /><br />You need to make sure to set the [namespace or prefix] argument and the [isPrefix] argument to true. Also when recalling elements you need to avoid adding the prefix if that is already set, so in the above example "prefix:element" should be added as "element" but when saved the prefix will be added automatically.<br /><br />If prefix is not set during load or object construction, load will fail to get the nodes correctly and you will not be able to recall elements directly so $xml-&gt;{'prefix:element'} will not work either.</span></code></div>
  </div>
 </div>
  <div class="note" id="85484">  <div class="votes">
    <div id="Vu85484">
    <a href="/manual/vote-note.php?id=85484&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85484">
    <a href="/manual/vote-note.php?id=85484&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85484" title="54% like this...">
    3
    </div>
  </div>
  <a href="#85484" class="name">
  <strong class="user"><em>mario</em></strong></a><a class="genanchor" href="#85484"> &para;</a><div class="date" title="2008-09-02 02:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85484">
<div class="phpcode"><code><span class="html">If you want CDATA in your object you should use LIBXML_NOCDATA
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$file_xml</span><span class="keyword">, </span><span class="string">'SimpleXMLElement'</span><span class="keyword">,</span><span class="default">LIBXML_NOCDATA</span><span class="keyword">);
<br />    
<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100526">  <div class="votes">
    <div id="Vu100526">
    <a href="/manual/vote-note.php?id=100526&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100526">
    <a href="/manual/vote-note.php?id=100526&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100526" title="52% like this...">
    2
    </div>
  </div>
  <a href="#100526" class="name">
  <strong class="user"><em>raduispas at gmail dot com</em></strong></a><a class="genanchor" href="#100526"> &para;</a><div class="date" title="2010-10-21 06:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100526">
<div class="phpcode"><code><span class="html">if you want to check when this function fails,make sure to compare the return value with ===  instead of == :
<br />
<br /><span class="default">&lt;?php
<br />$url </span><span class="keyword">= </span><span class="string">'<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>'</span><span class="keyword">;
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simpleXML_load_file</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="string">"SimpleXMLElement"</span><span class="keyword">,</span><span class="default">LIBXML_NOCDATA</span><span class="keyword">);
<br />if(</span><span class="default">$xml </span><span class="keyword">===  </span><span class="default">FALSE</span><span class="keyword">)
<br />{
<br />   </span><span class="comment">//deal with error
<br /></span><span class="keyword">}
<br />else { </span><span class="comment">//do stuff } 
<br /></span><span class="default">?&gt;
<br /></span>
<br />Otherwise you may end up with FALSE all the time even if the document is ok. Hope this helps someone ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="128625">  <div class="votes">
    <div id="Vu128625">
    <a href="/manual/vote-note.php?id=128625&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128625">
    <a href="/manual/vote-note.php?id=128625&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128625" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128625" class="name">
  <strong class="user"><em>siraic at gmail dot com</em></strong></a><a class="genanchor" href="#128625"> &para;</a><div class="date" title="2023-06-20 08:47"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128625">
<div class="phpcode"><code><span class="html">LibXML typically uses ten times the file size in memory to read a file, and this memory usage falls largely outside the memory limit guarded by PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="118372">  <div class="votes">
    <div id="Vu118372">
    <a href="/manual/vote-note.php?id=118372&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118372">
    <a href="/manual/vote-note.php?id=118372&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118372" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118372" class="name">
  <strong class="user"><em>Rich</em></strong></a><a class="genanchor" href="#118372"> &para;</a><div class="date" title="2015-11-24 02:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118372">
<div class="phpcode"><code><span class="html">I stumbled on this: a single element with a simple string in it becomes a string, but a single element with a *space* in it becomes an Array, with one element, the string space.<br /><br />I'm sure to XML mystics this is wise and wonderful but it really confused me,  and I thought it might confuse others.<br /><br /><span class="default">&lt;?php<br />$parsed </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;container&gt;&lt;space&gt; &lt;/space&gt;&lt;blank&gt;&lt;/blank&gt;&lt;string&gt;hello&lt;/string&gt;&lt;/container&gt;'</span><span class="keyword">);<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$parsed</span><span class="keyword">),</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">);<br /></span><span class="comment">/* Output is:<br />array(3) {<br />  'space' =&gt; array(1) {           ← did NOT expect this!<br />    [0] =&gt; string(1) " "<br />  }<br />  'blank' =&gt; array(0) { }<br />  'string' =&gt; string(5) "hello"<br />}<br /> */</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82067">  <div class="votes">
    <div id="Vu82067">
    <a href="/manual/vote-note.php?id=82067&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82067">
    <a href="/manual/vote-note.php?id=82067&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82067" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82067" class="name">
  <strong class="user"><em>l [DOT] anzinger [AT] gmail [DOT] com</em></strong></a><a class="genanchor" href="#82067"> &para;</a><div class="date" title="2008-03-26 09:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82067">
<div class="phpcode"><code><span class="html">If you don't want that the CDATA values get escaped, just load the XML with LIBXML_NOCDATA as an 3rd argument.
<br />
<br />Note: A PHP version &gt;= 5.1.0 is required for this to work.
<br />
<br />Example: 
<br />
<br /><span class="default">&lt;?php simplexml_load_file</span><span class="keyword">(</span><span class="string">'xmldatei.xml'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">LIBXML_NOCDATA</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61438">  <div class="votes">
    <div id="Vu61438">
    <a href="/manual/vote-note.php?id=61438&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61438">
    <a href="/manual/vote-note.php?id=61438&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61438" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61438" class="name">
  <strong class="user"><em>info at evasion dot cc</em></strong></a><a class="genanchor" href="#61438"> &para;</a><div class="date" title="2006-02-03 03:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61438">
<div class="phpcode"><code><span class="html">Suppose you have loaded a XML file into $simpleXML_obj. <br />The structure is like below :<br /><br />SimpleXMLElement Object<br />(<br /><br />    [node1] =&gt; SimpleXMLElement Object<br />        (<br />            [subnode1] =&gt; value1<br />            [subnode2] =&gt; value2<br />            [subnode3] =&gt; value3<br />        )<br /><br />    [node2] =&gt; SimpleXMLElement Object<br />        (<br />            [subnode4] =&gt; value4<br />            [subnode5] =&gt; value5<br />            [subnode6] =&gt; value6<br />        )<br /><br />)<br /><br />When searching a specific node in the object, you may use this function :<br />        <br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function &amp;</span><span class="default">getXMLnode</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">) {<br />        foreach(</span><span class="default">$object </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if(isset(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">-&gt;</span><span class="default">$param</span><span class="keyword">)) {<br />                return </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">-&gt;</span><span class="default">$param</span><span class="keyword">;<br />            }<br />            if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">)&amp;&amp;!empty(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">)) {<br />                </span><span class="default">$new_obj </span><span class="keyword">= </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">;<br />                </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">getCfgParam</span><span class="keyword">(</span><span class="default">$new_obj</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">);    <br />            }<br />        }<br />        if(</span><span class="default">$ret</span><span class="keyword">) return (string) </span><span class="default">$ret</span><span class="keyword">;<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />So if you want to get subnode4 value you may use this function like this : <br /><br /><span class="default">&lt;?php<br />$result </span><span class="keyword">= </span><span class="default">getXMLnode</span><span class="keyword">(</span><span class="default">$simpleXML_obj</span><span class="keyword">, </span><span class="string">'subnode4'</span><span class="keyword">);<br />echo </span><span class="default">$result</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />It display "value4"</span></code></div>
  </div>
 </div>
  <div class="note" id="62781">  <div class="votes">
    <div id="Vu62781">
    <a href="/manual/vote-note.php?id=62781&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62781">
    <a href="/manual/vote-note.php?id=62781&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62781" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#62781" class="name">
  <strong class="user"><em>fdouteaud at gmail dot com</em></strong></a><a class="genanchor" href="#62781"> &para;</a><div class="date" title="2006-03-09 05:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62781">
<div class="phpcode"><code><span class="html">Be careful if you are using simplexml data directly to feed your MySQL database using MYSQLi and bind parameters. <br /><br />The data coming from simplexml are Objects and the bind parameters functions of MySQLi do NOT like that! (it causes some memory leak and can crash Apache/PHP)<br /><br />In order to do this properly you MUST cast your values to the right type (string, integer...) before passing them to the binding methods of MySQLi.<br />I did not find that in the documentation and it caused me a lot of headache.</span></code></div>
  </div>
 </div>
  <div class="note" id="117566">  <div class="votes">
    <div id="Vu117566">
    <a href="/manual/vote-note.php?id=117566&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117566">
    <a href="/manual/vote-note.php?id=117566&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117566" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#117566" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#117566"> &para;</a><div class="date" title="2015-06-30 01:25"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117566">
<div class="phpcode"><code><span class="html">Occasionally you may try to load a file and have it complain about an entity and throw a parser error.<br /><br />If this is the case, check to make sure that the file in question does not contain an ampersand (&amp;) without a corresponding entity reference.<br /><br />If it does, or if you want to err on the side of caution, then instead of using simplexml_load_file, try this:<br /><br />$file = file_get_contents('stuff.xml');<br />$temp = preg_replace('/&amp;(?!(quot|amp|pos|lt|gt);)/', '&amp;amp;', $file);<br />$xml = simplexml_load_string($temp) or die("xml not loading");<br /><br />Read the file into a string, add 'amp;' after any '&amp;' that is not part of a character entity, then parse the string as xml.</span></code></div>
  </div>
 </div>
  <div class="note" id="109935">  <div class="votes">
    <div id="Vu109935">
    <a href="/manual/vote-note.php?id=109935&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109935">
    <a href="/manual/vote-note.php?id=109935&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109935" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#109935" class="name">
  <strong class="user"><em>kannan at 99deals dot in</em></strong></a><a class="genanchor" href="#109935"> &para;</a><div class="date" title="2012-09-04 06:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109935">
<div class="phpcode"><code><span class="html">If you have some nodes which are having special characters, it would not load properly<br /><br />for an instance see the nodes below<br />&lt;node:number&gt;1538-7445&lt;/node:number&gt;<br />&lt;node:coverDisplayDate&gt;Sep  1 2012 12:00:00:000AM&lt;/node:coverDisplayDate&gt;<br /><br />either you have to change the : to other special characters like '-' in order to convert it properly<br /><br />Correct Node<br />&lt;node-number&gt;1538-7445&lt;/node-number&gt;<br />&lt;node-coverDisplayDate&gt;Sep  1 2012 12:00:00:000AM&lt;/node-coverDisplayDate&gt;<br /><br />I have wasted my precious time while debugging this. Please aware about this. ?</span></code></div>
  </div>
 </div>
  <div class="note" id="108180">  <div class="votes">
    <div id="Vu108180">
    <a href="/manual/vote-note.php?id=108180&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108180">
    <a href="/manual/vote-note.php?id=108180&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108180" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#108180" class="name">
  <strong class="user"><em>fusionstream at gmail dot com</em></strong></a><a class="genanchor" href="#108180"> &para;</a><div class="date" title="2012-04-05 04:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108180">
<div class="phpcode"><code><span class="html">If you are loading many files, this may slow down your page load time.<br /><br />To set a timeout, use file_get_context and then simplexml_load_string<br /><br /><span class="default">&lt;?php<br /><br />$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/rss" rel="nofollow" target="_blank">http://www.example.com/rss</a>'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">stream_create_context</span><span class="keyword">(array(</span><span class="string">'http' </span><span class="keyword">=&gt; array(</span><span class="string">'timeout'</span><span class="keyword">, </span><span class="string">'1.5'</span><span class="keyword">))));<br /><br />if (</span><span class="default">$fp</span><span class="keyword">) {<br />    </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">) );<br />} else {<br />    echo </span><span class="string">"The request timed out"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74192">  <div class="votes">
    <div id="Vu74192">
    <a href="/manual/vote-note.php?id=74192&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74192">
    <a href="/manual/vote-note.php?id=74192&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74192" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#74192" class="name">
  <strong class="user"><em>php at werner dash ott dot de</em></strong></a><a class="genanchor" href="#74192"> &para;</a><div class="date" title="2007-03-29 01:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74192">
<div class="phpcode"><code><span class="html">Making SimpleXMLElement objects session save.
<br />
<br />Besides the effect of not surviving sessions, the SimpleXMLElement object may even crash the session_start() function when trying to re-enter the session!
<br />
<br />To come up with a solution for this, I used a pattern as follows. The core idea is to transform the SimpleXMLElement between session calls to and from a string representation which of course is session save.
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="comment">//
<br />  // session save handling of SimpleXMLElement objects
<br />  // (applies to/ tested with PHP 5.1.5 and PHP 5.2.1)
<br />  // The myClass pattern allows for conveniently accessing
<br />  // XML structures while being session save
<br />  //
<br />  </span><span class="keyword">class </span><span class="default">myClass
<br />  </span><span class="keyword">{
<br />    private </span><span class="default">$o_XMLconfig </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />    private </span><span class="default">$s_XMLconfig </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    
<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$args_configfile</span><span class="keyword">)
<br />    {
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">o_XMLconfig </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$args_configfile</span><span class="keyword">);
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">s_XMLconfig </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">o_XMLconfig</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br />    } </span><span class="comment">// __construct()
<br />    
<br />    </span><span class="keyword">public function </span><span class="default">__destruct</span><span class="keyword">()
<br />    {
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">s_XMLconfig </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">o_XMLconfig</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br />      unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">o_XMLconfig</span><span class="keyword">); </span><span class="comment">// this object would otherwise crash 
<br />                                 // the subsequent call of 
<br />                                 // session_start()!
<br />    </span><span class="keyword">} </span><span class="comment">// __destruct()
<br />    
<br />    </span><span class="keyword">public function </span><span class="default">__wakeup</span><span class="keyword">()
<br />    {
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">o_XMLconfig </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">s_XMLconfig</span><span class="keyword">);
<br />    } </span><span class="comment">// __wakeup()
<br />    
<br />  </span><span class="keyword">} </span><span class="comment">// class myClass
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97077">  <div class="votes">
    <div id="Vu97077">
    <a href="/manual/vote-note.php?id=97077&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97077">
    <a href="/manual/vote-note.php?id=97077&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97077" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#97077" class="name">
  <strong class="user"><em>jamie at splooshmedia dot co dot uk</em></strong></a><a class="genanchor" href="#97077"> &para;</a><div class="date" title="2010-03-31 06:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97077">
<div class="phpcode"><code><span class="html">A wrapper around simplexml_load_file to circumvent nasty error messages when the xml server times out or gives a 500 error etc.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">loadXML2</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">) {
<br />
<br />    </span><span class="comment">/*
<br />        Usage:
<br />        
<br />        $xml = loadXML2("127.0.0.1", "/path/to/xml/server.php?code=do_something");
<br />        if($xml) {
<br />            // xml doc loaded
<br />        } else {
<br />            // failed. show friendly error message.
<br />        }
<br />    */
<br />
<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">80</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);
<br />    if(</span><span class="default">$fp</span><span class="keyword">) {
<br />        </span><span class="comment">// make request
<br />        </span><span class="default">$out </span><span class="keyword">= </span><span class="string">"GET </span><span class="default">$path</span><span class="string"> HTTP/1.1\r\n"</span><span class="keyword">;
<br />        </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">"Host: </span><span class="default">$domain</span><span class="string">\r\n"</span><span class="keyword">;
<br />        </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">"Connection: Close\r\n\r\n"</span><span class="keyword">;
<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// get response
<br />        </span><span class="default">$resp </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />            </span><span class="default">$resp </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />        </span><span class="comment">// check status is 200
<br />        </span><span class="default">$status_regex </span><span class="keyword">= </span><span class="string">"/HTTP\/1\.\d\s(\d+)/"</span><span class="keyword">;
<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$status_regex</span><span class="keyword">, </span><span class="default">$resp</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">) &amp;&amp; </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="default">200</span><span class="keyword">) {    
<br />            </span><span class="comment">// load xml as object
<br />            </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\r\n\r\n"</span><span class="keyword">, </span><span class="default">$resp</span><span class="keyword">);    
<br />            return </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);                
<br />        }
<br />    }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />    
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102974">  <div class="votes">
    <div id="Vu102974">
    <a href="/manual/vote-note.php?id=102974&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102974">
    <a href="/manual/vote-note.php?id=102974&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102974" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#102974" class="name">
  <strong class="user"><em>sean at aliencreations dot com</em></strong></a><a class="genanchor" href="#102974"> &para;</a><div class="date" title="2011-03-17 10:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102974">
<div class="phpcode"><code><span class="html">If you find that you are receiving 500 errors with simplexml_load_file() but you can access the xml/rss feed manually through a browser, your script is probably being blocked by a user agent sniffer.<br /><br />Add this code before your xml call to remedy this issue<br /><br /><span class="default">&lt;?php<br /><br />ini_set</span><span class="keyword">(</span><span class="string">"user_agent"</span><span class="keyword">,</span><span class="string">"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">"max_execution_time"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">"memory_limit"</span><span class="keyword">, </span><span class="string">"10000M"</span><span class="keyword">);<br /><br /></span><span class="default">$rss </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$feed_url</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57326">  <div class="votes">
    <div id="Vu57326">
    <a href="/manual/vote-note.php?id=57326&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57326">
    <a href="/manual/vote-note.php?id=57326&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57326" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#57326" class="name">
  <strong class="user"><em>genialbrainmachine at NOSPAM dot tiscali dot it</em></strong></a><a class="genanchor" href="#57326"> &para;</a><div class="date" title="2005-09-30 08:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57326">
<div class="phpcode"><code><span class="html">Micro$oft Word uses non-standard characters and they create problems in using simplexml_load_file.<br />Many systems include non-standard Word character in their implementation of ISO-8859-1. So an XML document containing that characters can appear well-formed (i.e.) to many browsers. But if you try to load this kind of documents with simplexml_load_file you'll have a little bunch of troubles..<br />I believe that this is exactly the same question discussed in htmlentites. Following notes to htmlentitles are interesting here too (given in the reverse order, to grant the history):<br /><a href="http://it.php.net/manual/en/function.htmlentities.php#26379" rel="nofollow" target="_blank">http://it.php.net/manual/en/function.htmlentities.php#26379</a><br /><a href="http://it.php.net/manual/en/function.htmlentities.php#41152" rel="nofollow" target="_blank">http://it.php.net/manual/en/function.htmlentities.php#41152</a><br /><a href="http://it.php.net/manual/en/function.htmlentities.php#42126" rel="nofollow" target="_blank">http://it.php.net/manual/en/function.htmlentities.php#42126</a><br /><a href="http://it.php.net/manual/en/function.htmlentities.php#42511" rel="nofollow" target="_blank">http://it.php.net/manual/en/function.htmlentities.php#42511</a></span></code></div>
  </div>
 </div>
  <div class="note" id="102309">  <div class="votes">
    <div id="Vu102309">
    <a href="/manual/vote-note.php?id=102309&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102309">
    <a href="/manual/vote-note.php?id=102309&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102309" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#102309" class="name">
  <strong class="user"><em>Nanuit at ossi dot at</em></strong></a><a class="genanchor" href="#102309"> &para;</a><div class="date" title="2011-02-08 01:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102309">
<div class="phpcode"><code><span class="html">A little function very helpfull in using simplexml_load_file behind a proxy
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getXMLfromURL</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {
<br />      </span><span class="default">$Proxy </span><span class="keyword">= </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"HTTP_PROXY"</span><span class="keyword">);
<br />
<br />      if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Proxy</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {
<br />        </span><span class="default">$r_default_context </span><span class="keyword">= </span><span class="default">stream_context_get_default </span><span class="keyword">( array
<br />                    (</span><span class="string">'http' </span><span class="keyword">=&gt; array(
<br />                        </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="default">$Proxy</span><span class="keyword">,
<br />                        </span><span class="string">'request_fulluri' </span><span class="keyword">=&gt; </span><span class="default">True</span><span class="keyword">,
<br />                    ),
<br />                )
<br />            );
<br />        </span><span class="default">libxml_set_streams_context</span><span class="keyword">(</span><span class="default">$r_default_context</span><span class="keyword">);
<br />      }
<br />      </span><span class="default">$daten </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />      return (</span><span class="default">$daten</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />where HTTP_PROXY is set to e.g.: tcp://proxy:8080</span></code></div>
  </div>
 </div>
  <div class="note" id="71667">  <div class="votes">
    <div id="Vu71667">
    <a href="/manual/vote-note.php?id=71667&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71667">
    <a href="/manual/vote-note.php?id=71667&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71667" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#71667" class="name">
  <strong class="user"><em>Kyle</em></strong></a><a class="genanchor" href="#71667"> &para;</a><div class="date" title="2006-12-10 02:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71667">
<div class="phpcode"><code><span class="html">In regards to Anonymous on 7th April 2006<br /><br />There is a way to get back HTML tags. For example:<br /><br />&lt;?xml version="1.0"?&gt;<br />&lt;intro&gt;<br />    Welcome to &lt;b&gt;Example.com&lt;/b&gt;!<br />&lt;/intro&gt;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// I use @ so that it doesn't spit out content of my XML in an error message if the load fails. The content could be passwords so this is just to be safe.<br /></span><span class="default">$xml </span><span class="keyword">= @</span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'content_intro.xml'</span><span class="keyword">);<br />if (</span><span class="default">$xml</span><span class="keyword">) {<br />    </span><span class="comment">// asXML() will keep the HTML tags but it will also keep the parent tag &lt;intro&gt; so I strip them out with a str_replace. You could obviously also use a preg_replace if you have lots of tags.<br />    </span><span class="default">$intro </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'&lt;intro&gt;'</span><span class="keyword">, </span><span class="string">'&lt;/intro&gt;'</span><span class="keyword">), </span><span class="string">''</span><span class="keyword">, </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">());<br />} else {<br />    </span><span class="default">$error </span><span class="keyword">= </span><span class="string">"Could not load intro XML file."</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />With this method someone can change the intro in content_intro.xml and ensure that the HTML is well formed and not ruin the whole site design.</span></code></div>
  </div>
 </div>
  <div class="note" id="86471">  <div class="votes">
    <div id="Vu86471">
    <a href="/manual/vote-note.php?id=86471&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86471">
    <a href="/manual/vote-note.php?id=86471&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86471" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#86471" class="name">
  <strong class="user"><em>cryonyx at cerebrate dot ru</em></strong></a><a class="genanchor" href="#86471"> &para;</a><div class="date" title="2008-10-21 03:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86471">
<div class="phpcode"><code><span class="html">In case you have a XML file with a series of equally named elements on one level simplexml incorrectly processes them and doesn't allow to walk through the array using foreach(). As far as I'm concerned, it is the problem caused by PHP xml_parser (see: <a href="http://ru2.php.net/manual/ru/function.xml-parser-create.php#53188" rel="nofollow" target="_blank">http://ru2.php.net/manual/ru/function.xml-parser-create.php#53188</a>).
<br />
<br />To avoid this, just use count() and walk through the array using for().
<br />
<br />Example:
<br />
<br />&lt;params&gt;
<br />  &lt;param&gt;
<br />    &lt;name&gt;version.shell&lt;/name&gt;
<br />    &lt;value&gt;1.0&lt;/value&gt;
<br />  &lt;/param&gt;
<br />  &lt;param&gt;
<br />      &lt;name&gt;version.core&lt;/name&gt;
<br />      &lt;value&gt;1.0&lt;/value&gt;
<br />  &lt;/param&gt;
<br />  &lt;param&gt;
<br />      &lt;name&gt;file.lang&lt;/name&gt;
<br />      &lt;value&gt;vc.lang&lt;/value&gt;
<br />  &lt;/param&gt;
<br />  ...
<br />&lt;/params&gt;
<br />
<br /><span class="default">&lt;?php
<br />$filename </span><span class="keyword">= </span><span class="string">'...'</span><span class="keyword">;
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br /></span><span class="default">$p_cnt </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">param</span><span class="keyword">);
<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$p_cnt</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />  </span><span class="default">$param </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">param</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />  ...;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61450">  <div class="votes">
    <div id="Vu61450">
    <a href="/manual/vote-note.php?id=61450&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61450">
    <a href="/manual/vote-note.php?id=61450&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61450" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#61450" class="name">
  <strong class="user"><em>skutter at imprecision dot net</em></strong></a><a class="genanchor" href="#61450"> &para;</a><div class="date" title="2006-02-03 09:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61450">
<div class="phpcode"><code><span class="html">So it seems SimpleXML doesn't support CDATA... I bashed together this little regex function to sort out the CDATA before trying to parse XML with the likes of simplexml_load_file / simplexml_load_string. Hope it might help somebody and would be very interested to hear of better solutions. (Other than *not* using SimpleXML of course! ;)<br /><br />It looks for any &lt;![CDATA [Text and HTML etc in here]]&gt; elements, htmlspecialchar()'s the encapsulated data and then strips the "&lt;![CDATA [" and "]]&gt;" tags out.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">simplexml_unCDATAise</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">) {<br />    </span><span class="default">$new_xml </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/\&lt;\!\[CDATA \[(.*)\]\]\&gt;/U"</span><span class="keyword">, </span><span class="default">$xml</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br /><br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">)) {<br />        if (isset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; isset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />            </span><span class="default">$new_xml </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">;<br />            for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$old_text </span><span class="keyword">= </span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />                </span><span class="default">$new_text </span><span class="keyword">= </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]);<br />                </span><span class="default">$new_xml </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$old_text</span><span class="keyword">, </span><span class="default">$new_text</span><span class="keyword">, </span><span class="default">$new_xml</span><span class="keyword">);<br />            }<br />        }<br />    }<br /><br />    return </span><span class="default">$new_xml</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Usage:<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="string">'Your XML with CDATA...'</span><span class="keyword">;<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_unCDATAise</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">$xml_object </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96764">  <div class="votes">
    <div id="Vu96764">
    <a href="/manual/vote-note.php?id=96764&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96764">
    <a href="/manual/vote-note.php?id=96764&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96764" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#96764" class="name">
  <strong class="user"><em>Smokey</em></strong></a><a class="genanchor" href="#96764"> &para;</a><div class="date" title="2010-03-14 10:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96764">
<div class="phpcode"><code><span class="html">for nested and same name values i'v made up this little bit for getting and displaying multiable values from google's geocode when a exact match is not found it returns all close matches in the following format(this is an abriged version of there output)<br /><br />&lt;Response&gt;<br />  &lt;Placemark id="1"&gt;<br />    &lt;address&gt; New York 24, NY, USA&lt;/address&gt;<br />    &lt;AddressDetails&gt;<br />      ..................<br />    &lt;/AddressDetails&gt;<br />    &lt;Point&gt;<br />      &lt;coordinates&gt;-73.5850086,40.7207442,0&lt;/coordinates&gt;<br />    &lt;/Point&gt;<br />  &lt;/Placemark&gt;<br />  &lt;Placemark id="2"&gt;<br />    &lt;address&gt;New York 27, NY, USA&lt;/address&gt;<br />    &lt;AddressDetails&gt;<br />      ...................<br />    &lt;/AddressDetails&gt;<br />    &lt;Point&gt;<br />      &lt;coordinates&gt;-72.8987835,40.8003588,0&lt;/coordinates&gt;<br />    &lt;/Point&gt;<br />  &lt;/Placemark&gt;<br />  &lt;Placemark id="3"&gt;<br />    &lt;address&gt;Cedar Place School, 20 Cedar Pl, Yonkers, NY 10705, USA&lt;/address&gt;<br />    &lt;AddressDetails&gt;<br />      ..................<br />    &lt;/AddressDetails&gt;<br />    &lt;Point&gt;<br />      &lt;coordinates&gt;-73.8966320,40.9256520,0&lt;/coordinates&gt;<br />    &lt;/Point&gt;<br />  &lt;/Placemark&gt;<br />&lt;/Response&gt;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// get and breakdown the results then store them in $var's<br /></span><span class="default">$Address </span><span class="keyword">= </span><span class="string">"99999 parkplace, new york, NY"</span><span class="keyword">;<br /></span><span class="default">$urladdress </span><span class="keyword">= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$Address</span><span class="keyword">);<br /></span><span class="default">$Base_url </span><span class="keyword">= </span><span class="string">"<a href="http://maps.google.com/maps/geo?q=" rel="nofollow" target="_blank">http://maps.google.com/maps/geo?q=</a>"</span><span class="keyword">;<br /></span><span class="default">$urlParts </span><span class="keyword">= </span><span class="string">"&amp;output=xml"</span><span class="keyword">;<br /></span><span class="default">$urlrequest </span><span class="keyword">= </span><span class="default">$Base_url </span><span class="keyword">. </span><span class="default">$urladdress </span><span class="keyword">. </span><span class="default">$urlParts</span><span class="keyword">;<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$urlrequest</span><span class="keyword">);<br /></span><span class="default">$num </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">;<br />foreach (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">Response</span><span class="keyword">-&gt;</span><span class="default">Placemark </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){ <br />    </span><span class="default">$num</span><span class="keyword">++;<br />    </span><span class="default">$GeoFindAdd</span><span class="keyword">{</span><span class="default">$num</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">address</span><span class="keyword">;<br />    </span><span class="default">$GeoFindCords</span><span class="keyword">{</span><span class="default">$num</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">Point</span><span class="keyword">-&gt;</span><span class="default">coordinates</span><span class="keyword">;<br />} <br /><br /></span><span class="comment">// a simple display for the results <br /></span><span class="keyword">echo </span><span class="string">"Found "</span><span class="keyword">,</span><span class="default">$num</span><span class="keyword">,</span><span class="string">" Possable Geo Data Sets &lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">$CountNumResults </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">;<br />for ( ; </span><span class="default">$num </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">; </span><span class="default">$num</span><span class="keyword">--){<br />    </span><span class="default">$CountNumResults</span><span class="keyword">++;<br />    echo </span><span class="default">$countnum</span><span class="keyword">,</span><span class="string">"&lt;br&gt; Address = "</span><span class="keyword">,</span><span class="default">$GeoFindAdd</span><span class="keyword">{</span><span class="default">$num</span><span class="keyword">},</span><span class="string">"&lt;br&gt; Coordinates = "</span><span class="keyword">,</span><span class="default">$GeoFindCords</span><span class="keyword">{</span><span class="default">$num</span><span class="keyword">},</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"END"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64080">  <div class="votes">
    <div id="Vu64080">
    <a href="/manual/vote-note.php?id=64080&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64080">
    <a href="/manual/vote-note.php?id=64080&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64080" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#64080" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#64080"> &para;</a><div class="date" title="2006-04-06 09:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64080">
<div class="phpcode"><code><span class="html">What has been found when using the script is that simplexml_load_file() will remove any HTML formating inside the XML file, and will also only load so many layers deep. If your XML file is to deap, it will return a boolean false.</span></code></div>
  </div>
 </div>
  <div class="note" id="61549">  <div class="votes">
    <div id="Vu61549">
    <a href="/manual/vote-note.php?id=61549&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61549">
    <a href="/manual/vote-note.php?id=61549&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61549" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#61549" class="name">
  <strong class="user"><em>info at evasion dot cc</em></strong></a><a class="genanchor" href="#61549"> &para;</a><div class="date" title="2006-02-06 08:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61549">
<div class="phpcode"><code><span class="html">Sorry there's a mistake in the previous function :<br /><span class="default">&lt;?php<br />   </span><span class="keyword">function &amp;</span><span class="default">getXMLnode</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">) {<br />       foreach(</span><span class="default">$object </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />           if(isset(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">-&gt;</span><span class="default">$param</span><span class="keyword">)) {<br />               return </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">-&gt;</span><span class="default">$param</span><span class="keyword">;<br />           }<br />           if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">)&amp;&amp;!empty(</span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">)) {<br />               </span><span class="default">$new_obj </span><span class="keyword">= </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">;<br />               </span><span class="comment">// Must use getXMLnode function there (recursive)<br />               </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">getXMLnode</span><span class="keyword">(</span><span class="default">$new_obj</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">);   <br /><br />           }<br />       }<br />       if(</span><span class="default">$ret</span><span class="keyword">) return (string) </span><span class="default">$ret</span><span class="keyword">;<br />       return </span><span class="default">false</span><span class="keyword">;<br />   }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119867">  <div class="votes">
    <div id="Vu119867">
    <a href="/manual/vote-note.php?id=119867&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119867">
    <a href="/manual/vote-note.php?id=119867&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119867" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#119867" class="name">
  <strong class="user"><em>rex111 at bigmir dot net</em></strong></a><a class="genanchor" href="#119867"> &para;</a><div class="date" title="2016-09-08 03:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119867">
<div class="phpcode"><code><span class="html">Get all tags and their values. (recursive)<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'settings.xml'</span><span class="keyword">);<br /><br />function </span><span class="default">all_tag</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">){<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$name </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    foreach (</span><span class="default">$xml </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">){<br />        </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">$k</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />        </span><span class="default">$tag_value </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">$tag</span><span class="keyword">;<br />        if (</span><span class="default">$name </span><span class="keyword">== </span><span class="default">$tag</span><span class="keyword">){ </span><span class="default">$i</span><span class="keyword">++;    }<br />                </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$tag</span><span class="keyword">;     <br />            echo </span><span class="default">$tag </span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$tag_value</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />        </span><span class="comment">// recursive<br />           </span><span class="default">all_tag</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">());<br />    }<br />}<br /><br /></span><span class="default">all_tag</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56691">  <div class="votes">
    <div id="Vu56691">
    <a href="/manual/vote-note.php?id=56691&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56691">
    <a href="/manual/vote-note.php?id=56691&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56691" title="30% like this...">
    -5
    </div>
  </div>
  <a href="#56691" class="name">
  <strong class="user"><em>mark</em></strong></a><a class="genanchor" href="#56691"> &para;</a><div class="date" title="2005-09-12 11:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56691">
<div class="phpcode"><code><span class="html">If the property of an object is empty the array is not created. Here is a version object2array that transfers properly.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">object2array</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;
<br />       
<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">))
<br />    {
<br />        foreach(</span><span class="default">$object </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />            </span><span class="default">$return</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">object2array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />    } 
<br />    else 
<br />    {
<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);
<br />           
<br />        if(</span><span class="default">$var</span><span class="keyword">) 
<br />        {
<br />            foreach(</span><span class="default">$var </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />                </span><span class="default">$return</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (</span><span class="default">$key </span><span class="keyword">&amp;&amp; !</span><span class="default">$value</span><span class="keyword">) ? </span><span class="default">NULL </span><span class="keyword">: </span><span class="default">object2array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />        } 
<br />        else return </span><span class="default">$object</span><span class="keyword">;
<br />    }
<br />
<br />    return </span><span class="default">$return</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93478">  <div class="votes">
    <div id="Vu93478">
    <a href="/manual/vote-note.php?id=93478&amp;page=function.simplexml-load-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93478">
    <a href="/manual/vote-note.php?id=93478&amp;page=function.simplexml-load-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93478" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#93478" class="name">
  <strong class="user"><em>knl at bitflop dot com</em></strong></a><a class="genanchor" href="#93478"> &para;</a><div class="date" title="2009-09-11 12:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93478">
<div class="phpcode"><code><span class="html">If you need to parse the data from SimpleXML into a session variable remember to define the data as a string first.
<br />
<br />If you don't you will get warnings of "Node no longer exists" pointing to your session_start() function.
<br />
<br />This will work:
<br />
<br /><span class="default">&lt;?php
<br />
<br />    $new_version </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/version.xml" rel="nofollow" target="_blank">http://example.com/version.xml</a>'</span><span class="keyword">);
<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'current_version'</span><span class="keyword">] = (string)</span><span class="default">$new_version</span><span class="keyword">-&gt;</span><span class="default">version</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.simplexml-load-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.simplexml-load-file.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.simplexml.php">SimpleXML Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.simplexml-import-dom.php" title="simplexml_&#8203;import_&#8203;dom">simplexml_&#8203;import_&#8203;dom</a>
                        </li>
                                                <li class="current">
                            <a href="function.simplexml-load-file.php" title="simplexml_&#8203;load_&#8203;file">simplexml_&#8203;load_&#8203;file</a>
                        </li>
                                                <li class="">
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
