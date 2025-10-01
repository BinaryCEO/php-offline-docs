<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_parse_into_struct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-parse-into-struct.php">
 <link rel="shorturl" href="https://www.php.net/xml-parse-into-struct">
 <link rel="alternate" href="https://www.php.net/xml-parse-into-struct" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-parse.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-parser-create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-parse-into-struct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-parse-into-struct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-parse-into-struct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-parse-into-struct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-parse-into-struct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-parse-into-struct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-parse-into-struct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-parse-into-struct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-parse-into-struct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-parse-into-struct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-parse-into-struct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse XML data into an array structure" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_parse_into_struct - Manual" />
<meta name="twitter:description" content="Parse XML data into an array structure" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_parse_into_struct - Manual" />
<meta itemprop="description" content="Parse XML data into an array structure" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse XML data into an array structure" />

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
        <a href="function.xml-parser-create.php">
          xml_parser_create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-parse.php">
          &laquo; xml_parse        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xml.php'>XML Parser</a></li>      <li><a href='ref.xml.php'>XML Parser Functions</a></li>      </ul>
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
            <option value='en/function.xml-parse-into-struct.php' selected="selected">English</option>
            <option value='de/function.xml-parse-into-struct.php'>German</option>
            <option value='es/function.xml-parse-into-struct.php'>Spanish</option>
            <option value='fr/function.xml-parse-into-struct.php'>French</option>
            <option value='it/function.xml-parse-into-struct.php'>Italian</option>
            <option value='ja/function.xml-parse-into-struct.php'>Japanese</option>
            <option value='pt_BR/function.xml-parse-into-struct.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-parse-into-struct.php'>Russian</option>
            <option value='tr/function.xml-parse-into-struct.php'>Turkish</option>
            <option value='uk/function.xml-parse-into-struct.php'>Ukrainian</option>
            <option value='zh/function.xml-parse-into-struct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-parse-into-struct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_parse_into_struct</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_parse_into_struct</span> &mdash; <span class="dc-title">Parse XML data into an array structure</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.xml-parse-into-struct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xml_parse_into_struct</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$values</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function parses an XML string into 2 parallel array structures, one
   (<code class="parameter">index</code>) containing pointers to the location of the
   appropriate values in the <code class="parameter">values</code> array. These last
   two parameters must be passed by reference.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-parse-into-struct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">parser</code></dt>
     <dd>
      <p class="para">
       A reference to the XML parser.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       A string containing the XML data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       An array containing the values of the XML data
      </p>
     </dd>
    
    
     <dt><code class="parameter">index</code></dt>
     <dd>
      <p class="para">
       An array containing pointers to the location of the appropriate values in the $values.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xml-parse-into-struct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>xml_parse_into_struct()</strong></span> returns 0 for failure and 1 for
   success. This is not the same as <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, be careful with
   operators such as ===.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-parse-into-struct-changelog">
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
 <td>8.0.0</td>
 <td>
  <code class="parameter">parser</code> expects an <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span>
  instance now; previously, a valid <code class="literal">xml</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.xml-parse-into-struct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   Below is an example that illustrates the internal structure of
   the arrays being generated by the function. We use a simple
   <code class="literal">note</code> tag embedded inside a
   <code class="literal">para</code> tag, and then we parse this and print out
   the structures generated:
   <div class="example" id="example-5911">
    <p><strong>Example #1 <span class="function"><strong>xml_parse_into_struct()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$simple </span><span style="color: #007700">= </span><span style="color: #DD0000">"&lt;para&gt;&lt;note&gt;simple note&lt;/note&gt;&lt;/para&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= </span><span style="color: #0000BB">xml_parser_create</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">xml_parse_into_struct</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">, </span><span style="color: #0000BB">$simple</span><span style="color: #007700">, </span><span style="color: #0000BB">$vals</span><span style="color: #007700">, </span><span style="color: #0000BB">$index</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">xml_parser_free</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Index array\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$index</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\nVals array\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$vals</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     When we run that code, the output will be:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Index array
Array
(
    [PARA] =&gt; Array
        (
            [0] =&gt; 0
            [1] =&gt; 2
        )

    [NOTE] =&gt; Array
        (
            [0] =&gt; 1
        )

)

Vals array
Array
(
    [0] =&gt; Array
        (
            [tag] =&gt; PARA
            [type] =&gt; open
            [level] =&gt; 1
        )

    [1] =&gt; Array
        (
            [tag] =&gt; NOTE
            [type] =&gt; complete
            [level] =&gt; 2
            [value] =&gt; simple note
        )

    [2] =&gt; Array
        (
            [tag] =&gt; PARA
            [type] =&gt; close
            [level] =&gt; 1
        )

)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   Event-driven parsing (based on the expat library) can get
   complicated when you have an XML document that is complex.
   This function does not produce a DOM style object, but it
   generates structures amenable of being traversed in a tree
   fashion. Thus, we can create objects representing the data
   in the XML file easily. Let&#039;s consider the following XML file
   representing a small database of aminoacids information:
   <div class="example" id="example-5912">
    <p><strong>Example #2 moldb.xml - small database of molecular information</strong></p>
    <div class="example-contents">
<div class="annotation-interactive xmlcode"><pre class="xmlcode">&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;moldb&gt;

  &lt;molecule&gt;
      &lt;name&gt;Alanine&lt;/name&gt;
      &lt;symbol&gt;ala&lt;/symbol&gt;
      &lt;code&gt;A&lt;/code&gt;
      &lt;type&gt;hydrophobic&lt;/type&gt;
  &lt;/molecule&gt;

  &lt;molecule&gt;
      &lt;name&gt;Lysine&lt;/name&gt;
      &lt;symbol&gt;lys&lt;/symbol&gt;
      &lt;code&gt;K&lt;/code&gt;
      &lt;type&gt;charged&lt;/type&gt;
  &lt;/molecule&gt;

&lt;/moldb&gt;</pre>
</div>
    </div>

   </div>
   And some code to parse the document and generate the appropriate
   objects:
   <div class="example" id="example-5913">
    <p><strong>Example #3 
     parsemoldb.php - parses moldb.xml into an array of
     molecular objects
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">AminoAcid </span><span style="color: #007700">{<br />    var </span><span style="color: #0000BB">$name</span><span style="color: #007700">;  </span><span style="color: #FF8000">// aa name<br />    </span><span style="color: #007700">var </span><span style="color: #0000BB">$symbol</span><span style="color: #007700">;    </span><span style="color: #FF8000">// three letter symbol<br />    </span><span style="color: #007700">var </span><span style="color: #0000BB">$code</span><span style="color: #007700">;  </span><span style="color: #FF8000">// one letter code<br />    </span><span style="color: #007700">var </span><span style="color: #0000BB">$type</span><span style="color: #007700">;  </span><span style="color: #FF8000">// hydrophobic, charged or neutral<br />    <br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">__construct </span><span style="color: #007700">(</span><span style="color: #0000BB">$aa</span><span style="color: #007700">) <br />    {<br />        foreach (</span><span style="color: #0000BB">$aa </span><span style="color: #007700">as </span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$k </span><span style="color: #007700">= </span><span style="color: #0000BB">$aa</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">];<br />    }<br />}<br /><br />function </span><span style="color: #0000BB">readDatabase</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">) <br />{<br />    </span><span style="color: #FF8000">// read the XML database of aminoacids<br />    </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$parser </span><span style="color: #007700">= </span><span style="color: #0000BB">xml_parser_create</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">xml_parser_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">XML_OPTION_CASE_FOLDING</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">xml_parser_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">XML_OPTION_SKIP_WHITE</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">xml_parse_into_struct</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$values</span><span style="color: #007700">, </span><span style="color: #0000BB">$tags</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">xml_parser_free</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">// loop through the structures<br />    </span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$tags </span><span style="color: #007700">as </span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        if (</span><span style="color: #0000BB">$key </span><span style="color: #007700">== </span><span style="color: #DD0000">"molecule"</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$molranges </span><span style="color: #007700">= </span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />            </span><span style="color: #FF8000">// each contiguous pair of array entries are the <br />            // lower and upper range for each molecule definition<br />            </span><span style="color: #007700">for (</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$molranges</span><span style="color: #007700">); </span><span style="color: #0000BB">$i</span><span style="color: #007700">+=</span><span style="color: #0000BB">2</span><span style="color: #007700">) {<br />                </span><span style="color: #0000BB">$offset </span><span style="color: #007700">= </span><span style="color: #0000BB">$molranges</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">] + </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />                </span><span style="color: #0000BB">$len </span><span style="color: #007700">= </span><span style="color: #0000BB">$molranges</span><span style="color: #007700">[</span><span style="color: #0000BB">$i </span><span style="color: #007700">+ </span><span style="color: #0000BB">1</span><span style="color: #007700">] - </span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />                </span><span style="color: #0000BB">$tdb</span><span style="color: #007700">[] = </span><span style="color: #0000BB">parseMol</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">, </span><span style="color: #0000BB">$offset</span><span style="color: #007700">, </span><span style="color: #0000BB">$len</span><span style="color: #007700">));<br />            }<br />        } else {<br />            continue;<br />        }<br />    }<br />    return </span><span style="color: #0000BB">$tdb</span><span style="color: #007700">;<br />}<br /><br />function </span><span style="color: #0000BB">parseMol</span><span style="color: #007700">(</span><span style="color: #0000BB">$mvalues</span><span style="color: #007700">) <br />{<br />    for (</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$mvalues</span><span style="color: #007700">); </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />        </span><span style="color: #0000BB">$mol</span><span style="color: #007700">[</span><span style="color: #0000BB">$mvalues</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">"tag"</span><span style="color: #007700">]] = </span><span style="color: #0000BB">$mvalues</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">"value"</span><span style="color: #007700">];<br />    }<br />    return new </span><span style="color: #0000BB">AminoAcid</span><span style="color: #007700">(</span><span style="color: #0000BB">$mol</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$db </span><span style="color: #007700">= </span><span style="color: #0000BB">readDatabase</span><span style="color: #007700">(</span><span style="color: #DD0000">"moldb.xml"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"** Database of AminoAcid objects:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   After executing <var class="filename">parsemoldb.php</var>, the variable
   <var class="varname">$db</var> contains an array of
   <span class="classname"><strong class="classname">AminoAcid</strong></span> objects, and the output of the
   script confirms that:
   <div class="informalexample">
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">** Database of AminoAcid objects:
Array
(
    [0] =&gt; aminoacid Object
        (
            [name] =&gt; Alanine
            [symbol] =&gt; ala
            [code] =&gt; A
            [type] =&gt; hydrophobic
        )

    [1] =&gt; aminoacid Object
        (
            [name] =&gt; Lysine
            [symbol] =&gt; lys
            [code] =&gt; K
            [type] =&gt; charged
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-parse-into-struct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-parse-into-struct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-parse-into-struct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-parse-into-struct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.xml.php">XML Parser Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.xml-error-string.php" title="xml_&#8203;error_&#8203;string">xml_&#8203;error_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-byte-index.php" title="xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index">xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-column-number.php" title="xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-line-number.php" title="xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-error-code.php" title="xml_&#8203;get_&#8203;error_&#8203;code">xml_&#8203;get_&#8203;error_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse.php" title="xml_&#8203;parse">xml_&#8203;parse</a>
                        </li>
                                                <li class="current">
                            <a href="function.xml-parse-into-struct.php" title="xml_&#8203;parse_&#8203;into_&#8203;struct">xml_&#8203;parse_&#8203;into_&#8203;struct</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create.php" title="xml_&#8203;parser_&#8203;create">xml_&#8203;parser_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create-ns.php" title="xml_&#8203;parser_&#8203;create_&#8203;ns">xml_&#8203;parser_&#8203;create_&#8203;ns</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-free.php" title="xml_&#8203;parser_&#8203;free">xml_&#8203;parser_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-get-option.php" title="xml_&#8203;parser_&#8203;get_&#8203;option">xml_&#8203;parser_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-set-option.php" title="xml_&#8203;parser_&#8203;set_&#8203;option">xml_&#8203;parser_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-character-data-handler.php" title="xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler">xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-default-handler.php" title="xml_&#8203;set_&#8203;default_&#8203;handler">xml_&#8203;set_&#8203;default_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-element-handler.php" title="xml_&#8203;set_&#8203;element_&#8203;handler">xml_&#8203;set_&#8203;element_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-end-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-external-entity-ref-handler.php" title="xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler">xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-notation-decl-handler.php" title="xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-object.php" title="xml_&#8203;set_&#8203;object">xml_&#8203;set_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-processing-instruction-handler.php" title="xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler">xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-start-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-unparsed-entity-decl-handler.php" title="xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler</a>
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
